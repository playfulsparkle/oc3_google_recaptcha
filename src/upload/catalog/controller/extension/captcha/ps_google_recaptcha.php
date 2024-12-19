<?php
class ControllerExtensionCaptchaPsGoogleReCaptcha extends Controller
{
    public function __construct($registry)
    {
        parent::__construct($registry);

        if (!isset($this->session->data['ps_google_recaptcha_counter'])) {
            $this->session->data['ps_google_recaptcha_counter'] = 0;
        }
    }

    public function index($error = array())
    {
        if (!$this->config->get('captcha_ps_google_recaptcha_status')) {
            return '';
        }

        $this->load->language('extension/captcha/ps_google_recaptcha');

        $this->session->data['ps_google_recaptcha_counter']++;

        $data = array();

        if (isset($error['captcha'])) {
            $data['error_captcha'] = $error['captcha'];
        } else {
            $data['error_captcha'] = '';
        }

        $data['widget_counter'] = $this->session->data['ps_google_recaptcha_counter'];

        $data['key_type'] = $this->config->get('captcha_ps_google_recaptcha_key_type');
        $data['badge_theme'] = $this->config->get('captcha_ps_google_recaptcha_badge_theme');
        $data['badge_size'] = $this->config->get('captcha_ps_google_recaptcha_badge_size');
        $data['badge_position'] = $this->config->get('captcha_ps_google_recaptcha_badge_position');
        $data['site_key'] = $this->config->get('captcha_ps_google_recaptcha_site_key');
        $data['script_nonce'] = $this->config->get('captcha_ps_google_recaptcha_script_nonce');
        $data['google_captcha_nonce'] = $this->config->get('captcha_ps_google_recaptcha_google_captcha_nonce');
        $data['hide_badge'] = $this->config->get('captcha_ps_google_recaptcha_hide_badge');

        $login_page = substr($this->request->get['route'], 0, 13) === 'account/login';

        $data['alternative_layout'] = substr($this->request->get['route'], 0, 9) === 'checkout/' || substr($this->request->get['route'], 0, 15) === 'product/product' || $login_page;
        $data['login_page'] = $login_page;

        $query = array();

        if ($this->config->get('captcha_ps_google_recaptcha_key_type') === 'v3') {
            $query['render'] = $this->config->get('captcha_ps_google_recaptcha_site_key');

            if ($this->config->get('captcha_ps_google_recaptcha_badge_position') === 'inline') {
                $query['onload'] = 'repositionCaptchaBadge' . $this->session->data['ps_google_recaptcha_counter'];
            } else {
                $query['badge'] = $this->config->get('captcha_ps_google_recaptcha_badge_position');
            }
        } else if ($this->config->get('captcha_ps_google_recaptcha_key_type') === 'v2_checkbox') {
            $query['render'] = 'explicit';
            $query['onload'] = 'onloadCallback' . $this->session->data['ps_google_recaptcha_counter'];
            $query['badge'] = $this->config->get('captcha_ps_google_recaptcha_badge_position');
        } else if ($this->config->get('captcha_ps_google_recaptcha_key_type') === 'v2_invisible') {
            if ($this->config->get('captcha_ps_google_recaptcha_badge_position') === 'inline') {
                $query['onload'] = 'repositionCaptchaBadge' . $this->session->data['ps_google_recaptcha_counter'];
            } else {
                $query['badge'] = $this->config->get('captcha_ps_google_recaptcha_badge_position');
            }
        }

        $query['hl'] = $this->language->get('code');

        $data['google_captcha_url'] = 'https://www.google.com/recaptcha/api.js?' . http_build_query($query);

        return $this->load->view('extension/captcha/ps_google_recaptcha', $data);
    }

    public function validate()
    {
        $log_status = (bool) $this->config->get('captcha_ps_google_recaptcha_error_log_status') && !empty($this->config->get('captcha_ps_google_recaptcha_log_filename'));

        if ($log_status) {
            $log = new Log($this->config->get('captcha_ps_google_recaptcha_log_filename'));
        }

        $this->load->language('extension/captcha/ps_google_recaptcha');

        if (!isset($this->request->post['g-recaptcha-response'])) {
            if ($log_status) {
                $log->write('reCAPTCHA Error: Missing g-recaptcha-response. IP: ' . $this->request->server['REMOTE_ADDR'] .
                    ', URL: ' . $this->request->server['REQUEST_URI'] .
                    ', User-Agent: ' . $this->request->server['HTTP_USER_AGENT']);
            }

            return $this->language->get('error_missing_input_response');
        }

        $post_data = array(
            'secret' => $this->config->get('captcha_ps_google_recaptcha_secret_key'),
            'response' => $this->request->post['g-recaptcha-response'],
        );

        if ($this->config->get('captcha_ps_google_recaptcha_send_client_ip')) {
            $post_data['remoteip'] = $this->request->server['REMOTE_ADDR'];
        }

        if (function_exists('curl_init')) {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
        } else if (ini_get('allow_url_fopen')) {
            $context = stream_context_create(array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                    'content' => http_build_query($post_data)
                )
            ));
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
        }

        $captcha_response = array_merge(
            array('success' => false, 'score' => 0.0, 'error-codes' => array()),
            (array) json_decode((string) $response, true)
        );

        if (JSON_ERROR_NONE !== $json_last_error = json_last_error()) {
            if ($log_status) {
                $log->write('JSON Error: ' . json_last_error_msg() . ' (Code: ' . $json_last_error . ')');
            }

            return $this->language->get('error_bad_request');
        }

        if ($this->config->get('captcha_ps_google_recaptcha_key_type') === 'v3') {
            $route_to_page = array(
                'product/product/write' => 'review',
                'information/contact' => 'contact',
                'account/return/add' => 'returns',
                'account/register' => 'register',
                'checkout/register/save' => 'register',
                'checkout/guest/save' => 'guest'
            );
            $recaptcha_page = isset($route_to_page[$this->request->get['route']]) ? $route_to_page[$this->request->get['route']] : 'default';

            $recaptcha_pages = (array) $this->config->get('captcha_ps_google_recaptcha_v3_score_threshold');

            if (!isset($recaptcha_pages[$recaptcha_page])) {
                $recaptcha_pages[$recaptcha_page] = 0.5; // default value
            }

            if ($captcha_response['success'] && $captcha_response['score'] >= $recaptcha_pages[$recaptcha_page]) {
                return '';
            } else {
                if ($log_status) {
                    $log->write('V3 Score threshold error on page ' . $recaptcha_page .
                        '. Score: ' . $captcha_response['score'] .
                        ', Threshold: ' . $recaptcha_pages[$recaptcha_page] .
                        ', IP: ' . $this->request->server['REMOTE_ADDR']);
                }

                return $this->language->get('error_low_score');
            }
        } else {
            if ($captcha_response['success']) {
                return '';
            }
        }

        if ($captcha_response['error-codes']) {
            $errors = array();

            foreach ($captcha_response['error-codes'] as $error_code) {
                $error_message = $this->language->get('error_' . str_replace('-', '_', $error_code));

                $errors[] = $error_message;

                if ($log_status) {
                    $log->write('reCAPTCHA Error: ' . $error_code . ' - ' . $error_message . ', IP: ' . $this->request->server['REMOTE_ADDR']);
                }
            }

            return implode(', ', $errors);
        }

        if ($log_status) {
            $log->write('reCAPTCHA Error: ' . $this->language->get('error_captcha') . ', IP: ' . $this->request->server['REMOTE_ADDR']);
        }

        return $this->language->get('error_bad_request');
    }
}
