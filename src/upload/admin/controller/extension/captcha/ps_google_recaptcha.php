<?php
class ControllerExtensionCaptchaPsGoogleReCaptcha extends Controller
{
    /**
     * @var string The support email address.
     */
    const EXTENSION_EMAIL = 'support@playfulsparkle.com';

    /**
     * @var string The documentation URL for the extension.
     */
    const EXTENSION_DOC = 'https://playfulsparkle.com/en-us/resources/downloads/';

    private $error = array();

    public function index()
    {
        $this->load->language('extension/captcha/ps_google_recaptcha');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if ($this->request->post['captcha_ps_google_recaptcha_key_type'] === 'v3') {
                $this->request->post['captcha_ps_google_recaptcha_badge_size'] = '';
            } else if ($this->request->post['captcha_ps_google_recaptcha_key_type'] === 'v2_checkbox') {
                $this->request->post['captcha_ps_google_recaptcha_badge_position'] = 'bottomright';
            }

            if (
                $this->request->post['captcha_ps_google_recaptcha_key_type'] !== 'v3' &&
                $this->request->post['captcha_ps_google_recaptcha_key_type'] !== 'v2_invisible'
            ) {
                $this->request->post['captcha_ps_google_recaptcha_hide_badge'] = 0;
            }

            $this->model_setting_setting->editSetting('captcha_ps_google_recaptcha', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=captcha', true));
        }

        if (isset($this->session->data['error'])) {
            $data['error_warning'] = $this->session->data['error'];

            unset($this->session->data['error']);
        } else if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['log_filename'])) {
            $data['error_log_filename'] = $this->error['log_filename'];
        } else {
            $data['error_log_filename'] = '';
        }

        if (isset($this->error['site_key'])) {
            $data['error_site_key'] = $this->error['site_key'];
        } else {
            $data['error_site_key'] = '';
        }

        if (isset($this->error['secret_key'])) {
            $data['error_secret_key'] = $this->error['secret_key'];
        } else {
            $data['error_secret_key'] = '';
        }

        if (isset($this->error['v3_score_threshold'])) {
            $data['error_v3_score_threshold'] = (array) $this->error['v3_score_threshold'];
        } else {
            $data['error_v3_score_threshold'] = array();
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_extension'),
            'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=captcha', true)
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('extension/captcha/ps_google_recaptcha', 'user_token=' . $this->session->data['user_token'], true)
        );

        $data['action'] = $this->url->link('extension/captcha/ps_google_recaptcha', 'user_token=' . $this->session->data['user_token'], true);

        $data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=captcha', true);

        if (isset($this->request->post['captcha_ps_google_recaptcha_status'])) {
            $data['captcha_ps_google_recaptcha_status'] = $this->request->post['captcha_ps_google_recaptcha_status'];
        } else {
            $data['captcha_ps_google_recaptcha_status'] = $this->config->get('captcha_ps_google_recaptcha_status');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_error_log_status'])) {
            $data['captcha_ps_google_recaptcha_error_log_status'] = $this->request->post['captcha_ps_google_recaptcha_error_log_status'];
        } else {
            $data['captcha_ps_google_recaptcha_error_log_status'] = $this->config->get('captcha_ps_google_recaptcha_error_log_status');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_log_filename'])) {
            $data['captcha_ps_google_recaptcha_log_filename'] = $this->request->post['captcha_ps_google_recaptcha_log_filename'];
        } else {
            $data['captcha_ps_google_recaptcha_log_filename'] = $this->config->get('captcha_ps_google_recaptcha_log_filename');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_key_type'])) {
            $data['captcha_ps_google_recaptcha_key_type'] = $this->request->post['captcha_ps_google_recaptcha_key_type'];
        } else {
            $data['captcha_ps_google_recaptcha_key_type'] = $this->config->get('captcha_ps_google_recaptcha_key_type');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_site_key'])) {
            $data['captcha_ps_google_recaptcha_site_key'] = $this->request->post['captcha_ps_google_recaptcha_site_key'];
        } else {
            $data['captcha_ps_google_recaptcha_site_key'] = $this->config->get('captcha_ps_google_recaptcha_site_key');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_secret_key'])) {
            $data['captcha_ps_google_recaptcha_secret_key'] = $this->request->post['captcha_ps_google_recaptcha_secret_key'];
        } else {
            $data['captcha_ps_google_recaptcha_secret_key'] = $this->config->get('captcha_ps_google_recaptcha_secret_key');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_send_client_ip'])) {
            $data['captcha_ps_google_recaptcha_send_client_ip'] = $this->request->post['captcha_ps_google_recaptcha_send_client_ip'];
        } else {
            $data['captcha_ps_google_recaptcha_send_client_ip'] = $this->config->get('captcha_ps_google_recaptcha_send_client_ip');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_badge_theme'])) {
            $data['captcha_ps_google_recaptcha_badge_theme'] = $this->request->post['captcha_ps_google_recaptcha_badge_theme'];
        } else {
            $data['captcha_ps_google_recaptcha_badge_theme'] = $this->config->get('captcha_ps_google_recaptcha_badge_theme');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_badge_position'])) {
            $data['captcha_ps_google_recaptcha_badge_position'] = $this->request->post['captcha_ps_google_recaptcha_badge_position'];
        } else {
            $data['captcha_ps_google_recaptcha_badge_position'] = $this->config->get('captcha_ps_google_recaptcha_badge_position');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_badge_size'])) {
            $data['captcha_ps_google_recaptcha_badge_size'] = $this->request->post['captcha_ps_google_recaptcha_badge_size'];
        } else {
            $data['captcha_ps_google_recaptcha_badge_size'] = $this->config->get('captcha_ps_google_recaptcha_badge_size');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_hide_badge'])) {
            $data['captcha_ps_google_recaptcha_hide_badge'] = $this->request->post['captcha_ps_google_recaptcha_hide_badge'];
        } else {
            $data['captcha_ps_google_recaptcha_hide_badge'] = $this->config->get('captcha_ps_google_recaptcha_hide_badge');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_script_nonce'])) {
            $data['captcha_ps_google_recaptcha_script_nonce'] = $this->request->post['captcha_ps_google_recaptcha_script_nonce'];
        } else {
            $data['captcha_ps_google_recaptcha_script_nonce'] = $this->config->get('captcha_ps_google_recaptcha_script_nonce');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_google_captcha_nonce'])) {
            $data['captcha_ps_google_recaptcha_google_captcha_nonce'] = $this->request->post['captcha_ps_google_recaptcha_google_captcha_nonce'];
        } else {
            $data['captcha_ps_google_recaptcha_google_captcha_nonce'] = $this->config->get('captcha_ps_google_recaptcha_google_captcha_nonce');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_css_nonce'])) {
            $data['captcha_ps_google_recaptcha_css_nonce'] = $this->request->post['captcha_ps_google_recaptcha_css_nonce'];
        } else {
            $data['captcha_ps_google_recaptcha_css_nonce'] = $this->config->get('captcha_ps_google_recaptcha_css_nonce');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_v3_score_threshold'])) {
            $data['captcha_ps_google_recaptcha_v3_score_threshold'] = (array) $this->request->post['captcha_ps_google_recaptcha_v3_score_threshold'];
        } else {
            $data['captcha_ps_google_recaptcha_v3_score_threshold'] = (array) $this->config->get('captcha_ps_google_recaptcha_v3_score_threshold');
        }

        $data['recaptcha_key_types'] = array(
            'v2_checkbox' => $this->language->get('text_key_type_v2_checkbox') . ' ' . $this->language->get('text_default'),
            'v2_invisible' => $this->language->get('text_key_type_v2_invisible'),
            'v3' => $this->language->get('text_key_type_v3'),
        );

        $data['badge_themes'] = array(
            'light' => $this->language->get('text_badge_light') . ' ' . $this->language->get('text_default'),
            'dark' => $this->language->get('text_badge_dark'),
        );

        $data['badge_positions'] = array(
            'bottomright' => $this->language->get('text_badge_bottom_right') . ' ' . $this->language->get('text_default'),
            'bottomleft' => $this->language->get('text_badge_bottom_left'),
            'inline' => $this->language->get('text_badge_inline'),
        );

        $data['badge_sizes'] = array(
            array('disabled' => $this->config->get('captcha_ps_google_recaptcha_key_type') === 'v2_invisible', 'value' => 'normal', 'name' => $this->language->get('text_badge_normal'), ),
            array('disabled' => $this->config->get('captcha_ps_google_recaptcha_key_type') === 'v2_invisible', 'value' => 'compact', 'name' => $this->language->get('text_badge_compact'), ),
            array('disabled' => $this->config->get('captcha_ps_google_recaptcha_key_type') === 'v2_checkbox', 'value' => 'invisible', 'name' => $this->language->get('text_badge_invisible'), ),
        );

        $data['captcha_pages'] = array();

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_admin_login'),
            'value' => 'admin_login'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_catalog_login'),
            'value' => 'catalog_login'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_register'),
            'value' => 'register'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_admin_forgotten_password'),
            'value' => 'admin_forgotten_password'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_catalog_forgotten_password'),
            'value' => 'forgotten_password'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_guest'),
            'value' => 'guest'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_review'),
            'value' => 'review'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_return'),
            'value' => 'return'
        );

        $data['captcha_pages'][] = array(
            'text' => $this->language->get('text_contact'),
            'value' => 'contact'
        );

        $data['error_log_output'] = '';
        $data['error_log_download'] = $this->url->link('extension/captcha/ps_google_recaptcha/download', 'user_token=' . $this->session->data['user_token'], true);
        $data['error_log_clear'] = $this->url->link('extension/captcha/ps_google_recaptcha/clear', 'user_token=' . $this->session->data['user_token'], true);

        if ($data['captcha_ps_google_recaptcha_error_log_status']) {
            $error_log_filename = DIR_LOGS . $data['captcha_ps_google_recaptcha_log_filename'];

            if (is_readable($error_log_filename)) {
                $error_log_handle = fopen($error_log_filename, 'r+');

                $data['error_log_output'] = fread($error_log_handle, 3145728);

                fclose($error_log_handle);
            }
        }
        $data['text_contact'] = sprintf($this->language->get('text_contact'), self::EXTENSION_EMAIL, self::EXTENSION_EMAIL, self::EXTENSION_DOC);

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('extension/captcha/ps_google_recaptcha', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'extension/captcha/ps_google_recaptcha')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!$this->request->post['captcha_ps_google_recaptcha_site_key']) {
            $this->error['site_key'] = $this->language->get('error_site_key');
        }

        if (!$this->request->post['captcha_ps_google_recaptcha_secret_key']) {
            $this->error['secret_key'] = $this->language->get('error_secret_key');
        }

        if ((bool) $this->request->post['captcha_ps_google_recaptcha_error_log_status'] && !$this->request->post['captcha_ps_google_recaptcha_log_filename']) {
            $this->error['log_filename'] = $this->language->get('error_log_filename');
        }

        if (isset($this->request->post['captcha_ps_google_recaptcha_v3_score_threshold'])) {
            foreach ($this->request->post['captcha_ps_google_recaptcha_v3_score_threshold'] as $captcha_page => $value) {
                if ($value < 0 || $value > 1) {
                    $this->error['v3_score_threshold'][$captcha_page] = $this->language->get('error_v3_score_threshold_value');
                }
            }
        }

        return !$this->error;
    }

    public function install()
    {
        $this->load->model('setting/setting');

        $data = array(
            'captcha_ps_google_recaptcha_key_type' => 'v2_checkbox',
            'captcha_ps_google_recaptcha_script_nonce' => $this->generateGuid(),
            'captcha_ps_google_recaptcha_google_captcha_nonce' => $this->generateGuid(),
            'captcha_ps_google_recaptcha_css_nonce' => $this->generateGuid(),
            'captcha_ps_google_recaptcha_badge_theme' => 'light',
            'captcha_ps_google_recaptcha_badge_position' => 'bottomright',
            'captcha_ps_google_recaptcha_log_filename' => 'ps_google_recaptcha.log',
        );

        $this->model_setting_setting->editSetting('captcha_ps_google_recaptcha', $data);
    }

    public function uninstall()
    {

    }

    public function download()
    {
        $this->load->language('extension/captcha/ps_google_recaptcha');

        $error_log_filename = DIR_LOGS . $this->config->get('captcha_ps_google_recaptcha_log_filename');

        if (!is_file($error_log_filename)) {
            $this->session->data['error'] = sprintf($this->language->get('error_error_log_file'), $this->config->get('captcha_ps_google_recaptcha_log_filename'));

            $this->response->redirect($this->url->link('extension/captcha/ps_google_recaptcha', 'user_token=' . $this->session->data['user_token'], true));
        }

        if (!filesize($error_log_filename)) {
            $this->session->data['error'] = sprintf($this->language->get('error_error_log_empty'), $this->config->get('captcha_ps_google_recaptcha_log_filename'));

            $this->response->redirect($this->url->link('extension/captcha/ps_google_recaptcha', 'user_token=' . $this->session->data['user_token'], true));
        }

        $this->response->addheader('Pragma: public');
        $this->response->addheader('Expires: 0');
        $this->response->addheader('Content-Description: File Transfer');
        $this->response->addheader('Content-Type: application/octet-stream');
        $this->response->addheader('Content-Disposition: attachment; filename="' . $this->config->get('captcha_ps_google_recaptcha_log_filename') . '"');
        $this->response->addheader('Content-Transfer-Encoding: binary');

        $this->response->setOutput(file_get_contents($error_log_filename, FILE_USE_INCLUDE_PATH, null));
    }

    /**
     * @return void
     */
    public function clear()
    {
        $this->load->language('extension/captcha/ps_google_recaptcha');

        $json = array();

        if (!$this->user->hasPermission('modify', 'tool/log')) {
            $json['error'] = $this->language->get('error_permission');
        }

        $error_log_filename = DIR_LOGS . $this->config->get('captcha_ps_google_recaptcha_log_filename');

        if (!is_file($error_log_filename)) {
            $json['error'] = sprintf($this->language->get('error_error_log_file'), $this->config->get('captcha_ps_google_recaptcha_log_filename'));
        }

        if (!$json) {
            $handle = fopen($error_log_filename, 'w+');

            fclose($handle);

            $json['success'] = $this->language->get('text_log_clear_success');
        }

        $this->response->addHeader('Content-Type: application/json');
        $this->response->setOutput(json_encode($json));
    }

    public function render_captcha()
    {
        if (!$this->config->get('captcha_ps_google_recaptcha_status')) {
            return '';
        }

        $this->load->language('extension/captcha/ps_google_recaptcha');

        if (!isset($this->session->data['ps_google_recaptcha_counter'])) {
            $this->session->data['ps_google_recaptcha_counter'] = 0;
        } else {
            $this->session->data['ps_google_recaptcha_counter']++;
        }

        $data = array();

        $data['widget_counter'] = $this->session->data['ps_google_recaptcha_counter'];

        $data['key_type'] = $this->config->get('captcha_ps_google_recaptcha_key_type');
        $data['badge_theme'] = $this->config->get('captcha_ps_google_recaptcha_badge_theme');
        $data['badge_size'] = $this->config->get('captcha_ps_google_recaptcha_badge_size');
        $data['badge_position'] = $this->config->get('captcha_ps_google_recaptcha_badge_position');
        $data['site_key'] = $this->config->get('captcha_ps_google_recaptcha_site_key');
        $data['script_nonce'] = $this->config->get('captcha_ps_google_recaptcha_script_nonce');
        $data['google_captcha_nonce'] = $this->config->get('captcha_ps_google_recaptcha_google_captcha_nonce');
        $data['hide_badge'] = $this->config->get('captcha_ps_google_recaptcha_hide_badge');

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

        return $this->load->view('extension/captcha/ps_google_recaptcha_widget', $data);
    }

    public function validate_captcha()
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

    public function generateGuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000, // Version 4
            mt_rand(0, 0x3fff) | 0x8000, // Variant 10
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }
}
