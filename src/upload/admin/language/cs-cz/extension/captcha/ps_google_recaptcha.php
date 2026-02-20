<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                  = 'Kontaktujte podporu';
$_['heading_v3_score_threshold']       = 'Prahová hodnota skóre';

// Text
$_['text_extension']                   = 'Rozšíření';
$_['text_success']                     = 'Úspěch: Úspěšně jste upravili Google reCAPTCHA!';
$_['text_edit']                        = 'Upravit Google reCAPTCHA';
$_['text_signup']                      = 'Pro zahájení navštivte <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">stránku Google reCAPTCHA</a> a zaregistrujte svou webovou stránku, abyste získali reCAPTCHA Site Key a Secret Key.';
$_['text_contact']                     = '<p>Pro další pomoc se prosím obraťte na náš tým podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentace:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentace pro uživatele</a></li></ul>';
$_['text_key_type_v3']                 = 'Score based (v3) - Ověřování požadavků s použitím skóre';
$_['text_key_type_v2_checkbox']        = 'Challenge (v2) - "Nejsem robot" výzva s zaškrtávacím políčkem';
$_['text_key_type_v2_invisible']       = 'Challenge (v2) - Neviditelná výzva reCAPTCHA s badge';
$_['text_badge_inline']                = 'Inline';
$_['text_badge_bottom_left']           = 'Spodní levý';
$_['text_badge_bottom_right']          = 'Spodní pravý';
$_['text_badge_dark']                  = 'Tmavý';
$_['text_badge_light']                 = 'Světlý';
$_['text_badge_compact']               = 'Kompaktní';
$_['text_badge_normal']                = 'Normální';
$_['text_badge_invisible']             = 'Neviditelný';
$_['text_csp_info']                    = 'Ujistěte se, že vaše Content-Security-Policy (CSP) je správně nakonfigurována pro práci s Google reCAPTCHA. Doporučujeme používat <strong>nonce-based přístup z CSP3</strong> pro maximální bezpečnost. Alternativně zahrňte <strong>script-src</strong>, aby bylo povoleno <strong>https://www.google.com/recaptcha/</strong> a <strong>https://www.gstatic.com/recaptcha/</strong>, a <strong>frame-src</strong>, aby bylo povoleno <strong>https://www.google.com/recaptcha/</strong> a <strong>https://recaptcha.google.com/recaptcha/</strong>. Použití <strong>strict-dynamic</strong> je také podporováno na kompatibilních prohlížečích.';
$_['text_admin_login']                 = 'Přihlášení do administrace';
$_['text_catalog_login']               = 'Přihlášení na webovou stránku';
$_['text_register']                    = 'Registrace';
$_['text_admin_forgotten_password']    = 'Zapomenuté heslo pro administraci';
$_['text_catalog_forgotten_password']  = 'Zapomenuté heslo pro katalog';
$_['text_guest']                       = 'Nákup jako host';
$_['text_review']                      = 'Recenze';
$_['text_return']                      = 'Vrácení zboží';
$_['text_contact']                     = 'Kontakt';
$_['text_default']                     = '(výchozí)';
$_['text_log_clear_success']           = 'Protokol chyb byl úspěšně vymazán.';

// Tab
$_['tab_general']                      = 'Obecné';
$_['tab_security']                     = 'Bezpečnost';
$_['tab_error_log']                    = 'Protokol chyb';
$_['tab_help_and_support']             = 'Nápověda a podpora';

// Entry
$_['entry_key_type']                   = 'Typ reCAPTCHA';
$_['entry_site_key']                   = 'Klíč webu';
$_['entry_secret_key']                 = 'Tajný klíč';
$_['entry_status']                     = 'Stav';
$_['entry_badge_position']             = 'Pozice badge';
$_['entry_badge_theme']                = 'Téma badge';
$_['entry_badge_size']                 = 'Velikost badge';
$_['entry_hide_badge']                 = 'Skrýt badge';
$_['entry_script_nonce']               = 'Nonce skriptu';
$_['entry_google_captcha_nonce']       = 'Nonce Google reCAPTCHA API skriptu';
$_['entry_css_nonce']                  = 'Nonce CSS stylu';
$_['entry_log_filename']               = 'Název souboru protokolu pro validaci';
$_['entry_send_client_ip']             = 'Odeslat IP adresu klienta';
$_['entry_enable_error_log']           = 'Povolit log chyb';

// Button
$_['button_download']                  = 'Stáhnout';
$_['button_clear']                     = 'Vymazat';

// Help
$_['help_copy']                        = 'Zkopírovat URL';
$_['help_key_type']                    = 'Vyberte typ reCAPTCHA pro tento klíč webu. Klíč webu funguje pouze s jedním typem reCAPTCHA. Pro více informací navštivte <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Typy webů</a>.';
$_['help_hide_badge']                  = 'Povolením této možnosti můžete úplně skrýt badge Google reCAPTCHA. Oznámení bude automaticky přidáno do zápatí každé stránky, aby bylo splněno Google pravidla. Pro více informací se podívejte na sekci <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Chci skrýt badge reCAPTCHA. Co je povoleno?</a> na stránce FAQ Google reCAPTCHA.';
$_['help_site_key']                    = 'Použijte tento klíč webu v HTML kódu, který váš web poskytuje uživatelům.';
$_['help_secret_key']                  = 'Použijte tento tajný klíč pro komunikaci mezi vaším webem a reCAPTCHA.';
$_['help_v3_score_threshold']          = 'Toto nastavení definuje práh pro skóre vrácené reCAPTCHA v3. Skóre se pohybuje od 0,0 do 1,0, přičemž vyšší skóre (blíže k 1,0) naznačuje vyšší pravděpodobnost legitimní interakce uživatele a nižší skóre (blíže k 0,0) naznačuje vyšší pravděpodobnost, že jde o robota. Tento práh můžete upravit podle toho, jaké akce chcete provádět na základě skóre. Výchozí hodnota je 0,5, ale můžete ji upravit podle specifických požadavků vaší stránky.';
$_['help_log_filename']                = 'Zadejte název souboru protokolu pro uložení chyb validace reCAPTCHA.';

// Error
$_['error_permission']                 = 'Upozornění: Nemáte oprávnění upravovat Google reCAPTCHA!';
$_['error_error_log_permission']       = 'Upozornění: Nemáte oprávnění vymazat chyby v protokolu!';
$_['error_error_log_file']             = 'Upozornění: Soubor %s nebyl nalezen!';
$_['error_error_log_empty']            = 'Upozornění: Protokol %s je prázdný!';
$_['error_site_key']                   = 'Klíč je požadován!';
$_['error_secret_key']                 = 'Tajný klíč je požadován!';
$_['error_v3_score_threshold_value']   = 'Hodnota skóre musí být mezi 0 a 1. Nemůže být nižší než 0 ani vyšší než 1.';
$_['error_log_filename']               = 'Pro uložení chyb validace reCAPTCHA je požadován název souboru protokolu.';
