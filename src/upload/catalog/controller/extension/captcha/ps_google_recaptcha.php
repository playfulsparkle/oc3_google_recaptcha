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
        $data['ps_script_nonce'] = $this->config->get('captcha_ps_google_recaptcha_script_nonce');
        $data['ps_google_captcha_nonce'] = $this->config->get('captcha_ps_google_recaptcha_google_captcha_nonce');

        $data['route'] = $this->request->get['route'];

        $query = [];

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
        $this->load->language('extension/captcha/ps_google_recaptcha');

        if (!isset($this->request->post['g-recaptcha-response'])) {
            return $this->language->get('error_captcha');
        }

        $recaptcha_response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($this->config->get('captcha_ps_google_recaptcha_secret_key')) . '&response=' . $this->request->post['g-recaptcha-response'] . '&remoteip=' . $this->request->server['REMOTE_ADDR']);

        $recaptcha = array_merge(
            array('success' => false, 'error-codes' => array()),
            (array) json_decode($recaptcha_response, true)
        );

        if ($recaptcha['success']) {
            return '';
        }

        if ($recaptcha['error-codes']) {
            $errors = array();

            foreach ($recaptcha['error-codes'] as $error_code) {
                $errors[] = $this->language->get('error_' . str_replace('-', '_', $error_code));
            }

            return implode(', ', $errors);
        }

        return $this->language->get('error_captcha');
    }
}
