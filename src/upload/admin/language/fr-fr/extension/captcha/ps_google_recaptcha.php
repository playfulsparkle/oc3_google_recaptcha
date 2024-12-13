<?php
// Heading
$_['heading_title']               = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']     = 'Getting Started';
$_['heading_setup']               = 'Setting Up Live Search';
$_['heading_troubleshot']         = 'Common Troubleshooting';
$_['heading_faq']                 = 'FAQ';
$_['heading_contact']             = 'Contact Support';

// Text
$_['text_extension']              = 'Extensions';
$_['text_success']                = 'Success: You have modified Google reCAPTCHA!';
$_['text_edit']                   = 'Edit Google reCAPTCHA';
$_['text_signup']                 = 'Go to <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA page</a> and register your website.';
$_['text_getting_started']        = '<p><strong>Overview:</strong> Playful Sparkle - Google reCAPTCHA is an advanced extension for OpenCart 4, designed to protect your store from spam and abuse. It supports multiple implementations of Google reCAPTCHA, including Score-based (v3), Checkbox (v2), and Invisible (v2), providing flexibility and enhanced security for your store.</p><p><strong>Requirements:</strong> OpenCart 3.x+, PHP 7.3 or higher</p>';
$_['text_setup']                  = '<ul><li><strong>Step 1:</strong> Obtain your reCAPTCHA Site Key and Secret Key from the <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">Google reCAPTCHA admin console</a>.</li><li><strong>Step 2:</strong> In your OpenCart admin panel, navigate to the extension settings and choose the reCAPTCHA implementation you want to use (Score-based v3, Checkbox v2, or Invisible v2).</li><li><strong>Step 3:</strong> Customize your settings based on the selected implementation:<ul><li>For Score based (v3): Set badge position (bottom left, bottom right, or inline). For inline, choose light or dark theme, or hide the badge (with a footer notice to comply with Google policy).</li><li>For Challenge (v2) Checkbox challenge: Set badge theme (light or dark) and size (normal or compact).</li><li>For Challenge (v2) Invisible: Set badge position (bottom left, bottom right, or inline). For inline, choose light or dark theme.</li></ul></li><li><strong>Step 4:</strong> Configure reCAPTCHA for the desired pages in the OpenCart settings page.</li><li><strong>Step 5:</strong> Refresh the modification cache to apply the changes. To do this:<ul><li>Go to <strong>Extensions</strong> &gt; <strong>Modifications</strong> in your OpenCart admin panel.</li><li>Click the blue <strong>Refresh</strong> button in the top-right corner of the page.</li></ul>This step ensures that the updated reCAPTCHA settings are correctly applied to your store.</li></ul>';
$_['text_troubleshot']            = '<ul><li><strong>Issue:</strong> reCAPTCHA is not displaying. <strong>Solution:</strong> Ensure the correct Site Key and Secret Key are entered, and confirm your domain is registered in the Google reCAPTCHA admin console. Additionally, make sure to refresh the modification cache after making changes.</li><li><strong>Issue:</strong> Error appears during validation. <strong>Solution:</strong> Verify that the key pair matches the reCAPTCHA implementation (e.g., v2 Checkbox keys cannot be used for v3).</li><li><strong>Issue:</strong> Badge customization does not appear as expected. <strong>Solution:</strong> Double-check badge configuration settings (e.g., position, theme, or size), ensure the cache is cleared, and refresh the modification cache.</li></ul>';
$_['text_faq']                    = '<details><summary>Which reCAPTCHA implementation should I choose?</summary> It depends on your needs:<ul><li><strong>Score-based (v3):</strong> Best for seamless user experience without direct interaction, useful for background validation.</li><li><strong>Checkbox (v2):</strong> Adds a clear "I\'m not a robot" checkbox for visible interaction, great for user-facing forms.</li><li><strong>Invisible (v2):</strong> Validates requests in the background without requiring user interaction, ideal for cleaner interfaces with optional badge display.</li></ul></details><details><summary>Why am I getting a "Invalid site key" error?</summary> This occurs when the keys you entered do not match the reCAPTCHA implementation you selected. Make sure to use the correct key pair for the chosen implementation (e.g., v3 keys for v3, v2 Checkbox keys for v2 Checkbox, etc.).</details><details><summary>Where can I enable reCAPTCHA?</summary> reCAPTCHA can be configured for various pages in the OpenCart settings page.</details>';
$_['text_contact']                = '<p>For further assistance, please reach out to our support team:</p><ul><li><strong>Contact:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">User Documentation</a></li></ul>';
$_['text_key_type_v3']            = 'Score based (v3) - Verify requests with a score';
$_['text_key_type_v2_checkbox']   = 'Challenge (v2) - "I\'m not a robot" Checkbox challenge';
$_['text_key_type_v2_invisible']  = 'Challenge (v2) - Invisible reCAPTCHA badge challenge';
$_['text_badge_inline']           = 'Inline';
$_['text_badge_bottom_left']      = 'Bottom Left';
$_['text_badge_bottom_right']     = 'Bottom Right';
$_['text_badge_dark']             = 'Dark';
$_['text_badge_light']            = 'Light';
$_['text_badge_compact']          = 'Compact';
$_['text_badge_normal']           = 'Normal';
$_['text_badge_invisible']        = 'Invisible';
$_['text_csp_info']               = 'Ensure your Content-Security-Policy (CSP) is correctly configured to work with Google reCAPTCHA. We recommend using the <strong>nonce-based approach from CSP3</strong> for maximum security. Alternatively, include <strong>script-src</strong> to allow <strong>https://www.google.com/recaptcha/</strong> and <strong>https://www.gstatic.com/recaptcha/</strong>, and <strong>frame-src</strong> to allow <strong>https://www.google.com/recaptcha/</strong> and <strong>https://recaptcha.google.com/recaptcha/</strong>. Using <strong>strict-dynamic</strong> is also supported on compatible browsers.';

// Tab
$_['tab_general']                 = 'General';
$_['tab_security']                = 'Security';
$_['tab_help_and_support']        = 'Help &amp; Support';

// Entry
$_['entry_key_type']              = 'reCAPTCHA type';
$_['entry_site_key']              = 'Site key';
$_['entry_secret_key']            = 'Secret key';
$_['entry_status']                = 'Status';
$_['entry_badge_position']        = 'Badge Position';
$_['entry_badge_theme']           = 'Badge Theme';
$_['entry_badge_size']            = 'Badge Size';
$_['entry_hide_badge']            = 'Hide Badge';
$_['entry_script_nonce']          = 'Script Nonce';
$_['entry_google_captcha_nonce']  = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']             = 'CSS Style Tag Nonce';

// Help
$_['help_key_type']               = 'Choose the type of reCAPTCHA for this site key. A site key only works with a single reCAPTCHA site type. See <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Site Types</a> for more details.';
$_['help_hide_badge']             = 'By enabling this option, you can completely hide the Google reCAPTCHA badge. A notice will automatically be added to the footer of every page to comply with Google\'s guidelines. For more information, refer to the <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">I\'d like to hide the reCAPTCHA badge. What is allowed?</a> section on the Google reCAPTCHA FAQ page.';
$_['help_site_key']               = 'Use this site key in the HTML code your site serves to users.';
$_['help_secret_key']             = 'Use this secret key for communication between your site and reCAPTCHA.';

// Error
$_['error_permission']            = 'Warning: You do not have permission to modify Google reCAPTCHA!';
$_['error_site_key']              = 'Key required!';
$_['error_secret_key']            = 'Secret required!';
