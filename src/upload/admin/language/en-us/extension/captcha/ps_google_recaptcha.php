<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Contact Support';
$_['heading_v3_score_threshold']                   = 'Score Threshold';

// Text
$_['text_extension']                               = 'Extensions';
$_['text_success']                                 = 'Success: You have modified Google reCAPTCHA!';
$_['text_edit']                                    = 'Edit Google reCAPTCHA';
$_['text_signup']                                  = 'To get started, visit the <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA page</a> and register your website to obtain the reCAPTCHA Site Key and Secret Key.';
$_['text_contact']                                 = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_key_type_v3']                             = 'Score based (v3) - Verify requests with a score';
$_['text_key_type_v2_checkbox']                    = 'Challenge (v2) - "I\'m not a robot" Checkbox challenge';
$_['text_key_type_v2_invisible']                   = 'Challenge (v2) - Invisible reCAPTCHA badge challenge';
$_['text_badge_inline']                            = 'Inline';
$_['text_badge_bottom_left']                       = 'Bottom Left';
$_['text_badge_bottom_right']                      = 'Bottom Right';
$_['text_badge_dark']                              = 'Dark';
$_['text_badge_light']                             = 'Light';
$_['text_badge_compact']                           = 'Compact';
$_['text_badge_normal']                            = 'Normal';
$_['text_badge_invisible']                         = 'Invisible';
$_['text_csp_info']                                = 'Ensure your Content-Security-Policy (CSP) is correctly configured to work with Google reCAPTCHA. We recommend using the <strong>nonce-based approach from CSP3</strong> for maximum security. Alternatively, include <strong>script-src</strong> to allow <strong>https://www.google.com/recaptcha/</strong> and <strong>https://www.gstatic.com/recaptcha/</strong>, and <strong>frame-src</strong> to allow <strong>https://www.google.com/recaptcha/</strong> and <strong>https://recaptcha.google.com/recaptcha/</strong>. Using <strong>strict-dynamic</strong> is also supported on compatible browsers.';
$_['text_captcha_page_admin_login']                = 'Backend Login';
$_['text_captcha_page_catalog_login']              = 'Frontend Login';
$_['text_captcha_page_register']                   = 'Register';
$_['text_captcha_page_admin_forgotten_password']   = 'Backend Forgotten Password';
$_['text_captcha_page_catalog_forgotten_password'] = 'Frontend Forgotten Password';
$_['text_captcha_page_guest']                      = 'Guest Checkout';
$_['text_captcha_page_review']                     = 'Reviews';
$_['text_captcha_page_return']                     = 'Returns';
$_['text_captcha_page_contact']                    = 'Contact';
$_['text_default']                                 = '(default)';
$_['text_log_clear_success']                       = 'The error log has been cleared successfully.';

// Tab
$_['tab_general']                                  = 'General';
$_['tab_security']                                 = 'Security';
$_['tab_error_log']                                = 'Error Log';
$_['tab_help_and_support']                         = 'Help &amp; Support';

// Entry
$_['entry_key_type']                               = 'reCAPTCHA type';
$_['entry_site_key']                               = 'Site key';
$_['entry_secret_key']                             = 'Secret key';
$_['entry_status']                                 = 'Status';
$_['entry_badge_position']                         = 'Badge Position';
$_['entry_badge_theme']                            = 'Badge Theme';
$_['entry_badge_size']                             = 'Badge Size';
$_['entry_hide_badge']                             = 'Hide Badge';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = 'Validation log filename';
$_['entry_send_client_ip']                         = 'Send Client IP Address';
$_['entry_enable_error_log']                       = 'Enable Error Log';

// Button
$_['button_download']                              = 'Download';
$_['button_clear']                                 = 'Clear';

// Help
$_['help_copy']                                    = 'Copy URL';
$_['help_key_type']                                = 'Choose the type of reCAPTCHA for this site key. A site key only works with a single reCAPTCHA site type. See <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Site Types</a> for more details.';
$_['help_hide_badge']                              = 'By enabling this option, you can completely hide the Google reCAPTCHA badge. A notice will automatically be added to the footer of every page to comply with Google\'s guidelines. For more information, refer to the <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">I\'d like to hide the reCAPTCHA badge. What is allowed?</a> section on the Google reCAPTCHA FAQ page.';
$_['help_site_key']                                = 'Use this site key in the HTML code your site serves to users.';
$_['help_secret_key']                              = 'Use this secret key for communication between your site and reCAPTCHA.';
$_['help_v3_score_threshold']                      = 'This setting defines the threshold for the score returned by reCAPTCHA v3. The score ranges from 0.0 to 1.0, where a higher score (closer to 1.0) indicates a higher likelihood of a legitimate user interaction, and a lower score (closer to 0.0) suggests a higher likelihood of a bot. You can adjust this threshold to determine the actions you take based on the score. By default, a threshold of 0.5 is used, but you may modify it according to your site\'s specific requirements.';
$_['help_log_filename']                            = 'Enter the log filename to store reCAPTCHA validation errors.';

// Error
$_['error_permission']                             = 'Warning: You do not have permission to modify Google reCAPTCHA!';
$_['error_error_log_permission']                   = 'Warning: You do not have permission to clear the error log!';
$_['error_error_log_file']                         = 'Warning: The %s file could not be found!';
$_['error_error_log_empty']                        = 'Warning: The log file %s is empty!';
$_['error_site_key']                               = 'Key required!';
$_['error_secret_key']                             = 'Secret required!';
$_['error_v3_score_threshold_value']               = 'The score value must be between 0 and 1. It cannot be lower than 0 or greater than 1.';
$_['error_log_filename']                           = 'A log filename is required to store reCAPTCHA validation errors.';
