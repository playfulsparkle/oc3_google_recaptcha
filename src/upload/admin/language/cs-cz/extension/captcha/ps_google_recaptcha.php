<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']          = 'Začínáme';
$_['heading_setup']                    = 'Nastavení Google reCAPTCHA';
$_['heading_troubleshot']              = 'Běžné řešení problémů';
$_['heading_faq']                      = 'Často kladené otázky';
$_['heading_contact']                  = 'Kontaktujte podporu';
$_['heading_v3_score_threshold']       = 'Prahová hodnota skóre';

// Text
$_['text_extension']                   = 'Rozšíření';
$_['text_success']                     = 'Úspěch: Úspěšně jste upravili Google reCAPTCHA!';
$_['text_edit']                        = 'Upravit Google reCAPTCHA';
$_['text_signup']                      = 'Pro zahájení navštivte <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">stránku Google reCAPTCHA</a> a zaregistrujte svou webovou stránku, abyste získali reCAPTCHA Site Key a Secret Key.';
$_['text_getting_started']             = '<p><strong>Přehled:</strong> Playful Sparkle - Google reCAPTCHA je pokročilé rozšíření pro OpenCart 4, navržené k ochraně vaší prodejny před spamem a zneužíváním. Podporuje více implementací Google reCAPTCHA, včetně Score-based (v3), Checkbox (v2) a Invisible (v2), čímž poskytuje flexibilitu a vylepšenou bezpečnost pro vaši prodejnu.</p><p><strong>Požadavky:</strong> OpenCart 3.x+, PHP 7.3 nebo vyšší</p>';
$_['text_setup']                       = '<ul><li><strong>Krok 1:</strong> Získejte svůj reCAPTCHA Site Key a Secret Key z <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">Google reCAPTCHA administrátorského rozhraní</a>.</li><li><strong>Krok 2:</strong> V administraci OpenCart přejděte do nastavení rozšíření a vyberte implementaci reCAPTCHA, kterou chcete použít (Score-based v3, Checkbox v2 nebo Invisible v2).</li><li><strong>Krok 3:</strong> Přizpůsobte nastavení na základě vybrané implementace:<ul><li>Pro Score-based (v3): Nastavte pozici badge (spodní levý, spodní pravý nebo inline). Pro inline vyberte světlé nebo tmavé téma, nebo skryjte badge (s upozorněním v patičce pro dodržení pravidel Google).</li><li>Pro Challenge (v2) Checkbox výzvu: Nastavte téma badge (světlé nebo tmavé) a velikost (normální nebo kompaktní).</li><li>Pro Challenge (v2) Invisible: Nastavte pozici badge (spodní levý, spodní pravý nebo inline). Pro inline vyberte světlé nebo tmavé téma.</li></ul></li><li><strong>Krok 4:</strong> Nakonfigurujte reCAPTCHA pro požadované stránky na stránce nastavení OpenCart.</li><li><strong>Krok 5:</strong> Obnovte cache úpravy, aby se změny projevily. Postupujte takto:<ul><li>V administraci OpenCart přejděte na <strong>Rozšíření</strong> &gt; <strong>Modifikace</strong>.</li><li>Klikněte na modré tlačítko <strong>Obnovit</strong> v pravém horním rohu stránky.</li></ul>Tento krok zajistí, že nastavení reCAPTCHA budou správně aplikována na vaší prodejně.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Problém:</strong> reCAPTCHA se nezobrazuje. <strong>Řešení:</strong> Ujistěte se, že jsou správně zadány Site Key a Secret Key a že vaše doména je zaregistrována v Google reCAPTCHA administrátorském rozhraní. Také se ujistěte, že po provedení změn obnovíte cache úpravy.</li><li><strong>Problém:</strong> Během validace se objeví chyba. <strong>Řešení:</strong> Ověřte, že pár klíčů odpovídá implementaci reCAPTCHA (např. v2 Checkbox klíče nelze použít pro v3).</li><li><strong>Problém:</strong> Přizpůsobení badge se nezobrazuje podle očekávání. <strong>Řešení:</strong> Zkontrolujte nastavení badge (např. pozice, téma nebo velikost), ujistěte se, že cache je vyprázdněná, a obnovte cache úpravy.</li></ul>';
$_['text_faq']                         = '<details><summary>Jakou implementaci reCAPTCHA bych měl vybrat?</summary> Záleží na vašich potřebách:<ul><li><strong>Score-based (v3):</strong> Nejlepší pro bezproblémový uživatelský zážitek bez přímé interakce, užitečné pro pozadí validace.</li><li><strong>Checkbox (v2):</strong> Přidává jasné "Nejsem robot" zaškrtávací políčko pro viditelnou interakci, skvělé pro uživatelské formuláře.</li><li><strong>Invisible (v2):</strong> Validuje požadavky na pozadí bez potřeby uživatelské interakce, ideální pro čistší rozhraní s volitelným zobrazením badge.</li></ul></details><details><summary>Proč se mi zobrazuje chyba "Invalid site key"?</summary> K tomu dochází, když klíče, které jste zadali, neodpovídají vybrané implementaci reCAPTCHA. Ujistěte se, že používáte správný pár klíčů pro vybranou implementaci (např. v3 klíče pro v3, v2 Checkbox klíče pro v2 Checkbox, atd.).</details><details><summary>Kde mohu povolit reCAPTCHA?</summary> reCAPTCHA lze nakonfigurovat pro různé stránky v nastavení OpenCart.</details>';
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
$_['text_forgotten_password']          = 'Zapomenuté heslo';
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
$_['entry_challange_captcha']          = 'Dokončete prosím ověření captcha níže';
$_['entry_score_based_captcha']        = 'Ověření captcha';

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
$_['error_missing_input_secret']       = 'Chybí tajný klíč. Ujistěte se, že váš reCAPTCHA tajný klíč je zahrnut v požadavku.';
$_['error_invalid_input_secret']       = 'Poskytnutý tajný klíč je neplatný nebo má nesprávný formát. Zkontrolujte svůj reCAPTCHA tajný klíč a zkuste to znovu.';
$_['error_missing_input_response']     = 'Chybí odpověď na reCAPTCHA. Ujistěte se, že výzva reCAPTCHA byla dokončena před odesláním formuláře.';
$_['error_invalid_input_response']     = 'Poskytnutá odpověď na reCAPTCHA je neplatná nebo má nesprávný formát. Zkuste znovu dokončit výzvu reCAPTCHA.';
$_['error_bad_request']                = 'Požadavek nemohl být zpracován, protože je neplatný nebo nesprávně vytvořený. Ověřte formát a parametry požadavku a zkuste to znovu.';
$_['error_timeout_or_duplicate']       = 'Odpověď na reCAPTCHA již není platná. Mohla vypršet nebo být znovu použita. Obnovte stránku a znovu dokončete výzvu reCAPTCHA.';
