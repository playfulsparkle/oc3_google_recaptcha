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
            $this->model_setting_setting->editSetting('captcha_ps_google_recaptcha', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=captcha', true));
        }

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
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

        $data['recaptcha_key_types'] = array(
            'v3' => $this->language->get('entry_key_type_v3'),
            'v2_checkbox' => $this->language->get('entry_key_type_v2_checkbox'),
            'v2_invisible' => $this->language->get('entry_key_type_v2_invisible'),
        );

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

        return !$this->error;
    }

    public function install()
    {
        $this->load->model('setting/setting');

        $data = array(
            'captcha_ps_google_recaptcha_key_type' => 'v3',
        );

        $this->model_setting_setting->editSetting('captcha_ps_google_recaptcha', $data);
    }

    public function uninstall()
    {

    }
}
