<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                  = 'Terméktámogatás';
$_['heading_v3_score_threshold']       = 'Pontosító küszöbérték';

// Text
$_['text_extension']                   = 'Bővítmények';
$_['text_success']                     = 'Siker: Sikeresen módosította a Google reCAPTCHA beállításait!';
$_['text_edit']                        = 'Google reCAPTCHA szerkesztése';
$_['text_signup']                      = 'A kezdéshez látogasson el a <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA oldalára</a> és regisztrálja weboldalát, hogy megkapja a reCAPTCHA Site Key-t és Secret Key-t.';
$_['text_contact']                     = '<p>További segítségért kérjük, lépjen kapcsolatba támogatási csapatunkkal:</p><ul><li><strong>Kapcsolat:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentáció:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Felhasználói dokumentáció</a></li></ul>';
$_['text_key_type_v3']                 = 'Pontszám alapú (v3) - Kérések ellenőrzése pontszám alapján';
$_['text_key_type_v2_checkbox']        = 'Kihívás (v2) - "Nem robot vagyok" jelölőnégyzet kihívás';
$_['text_key_type_v2_invisible']       = 'Kihívás (v2) - Láthatatlan reCAPTCHA badge kihívás';
$_['text_badge_inline']                = 'Inline';
$_['text_badge_bottom_left']           = 'Bal alsó';
$_['text_badge_bottom_right']          = 'Jobb alsó';
$_['text_badge_dark']                  = 'Sötét';
$_['text_badge_light']                 = 'Világos';
$_['text_badge_compact']               = 'Kompakt';
$_['text_badge_normal']                = 'Normál';
$_['text_badge_invisible']             = 'Láthatatlan';
$_['text_csp_info']                    = 'Győződjön meg róla, hogy a Content-Security-Policy (CSP) megfelelően van beállítva, hogy működjön a Google reCAPTCHA-val. A legjobb biztonság érdekében javasoljuk a <strong>nonce-alapú megközelítést a CSP3-ban</strong>. Alternatívaként adja hozzá a <strong>script-src</strong> direktívát a <strong>https://www.google.com/recaptcha/</strong> és <strong>https://www.gstatic.com/recaptcha/</strong>, valamint a <strong>frame-src</strong> direktívát a <strong>https://www.google.com/recaptcha/</strong> és <strong>https://recaptcha.google.com/recaptcha/</strong> engedélyezéséhez. A <strong>strict-dynamic</strong> is támogatott a kompatibilis böngészőkben.';
$_['text_admin_login']                 = 'Adminisztrátori bejelentkezés';
$_['text_catalog_login']               = 'Weboldal bejelentkezés';
$_['text_register']                    = 'Regisztráció';
$_['text_admin_forgotten_password']    = 'Elfelejtett adminisztrátori jelszó';
$_['text_catalog_forgotten_password']  = 'Elfelejtett katalógus jelszó';
$_['text_guest']                       = 'Vendég vásárlás';
$_['text_review']                      = 'Vélemények';
$_['text_return']                      = 'Visszaküldés';
$_['text_contact']                     = 'Kapcsolat';
$_['text_default']                     = '(alapértelmezett)';
$_['text_log_clear_success']           = 'A hibanapló sikeresen törlésre került.';

// Tab
$_['tab_general']                      = 'Általános';
$_['tab_security']                     = 'Biztonság';
$_['tab_error_log']                    = 'Hiba napló';
$_['tab_help_and_support']             = 'Segítség &amp; Támogatás';

// Entry
$_['entry_key_type']                   = 'reCAPTCHA típus';
$_['entry_site_key']                   = 'Webhely kulcs';
$_['entry_secret_key']                 = 'Titkos kulcs';
$_['entry_status']                     = 'Állapot';
$_['entry_badge_position']             = 'Badge pozíció';
$_['entry_badge_theme']                = 'Badge téma';
$_['entry_badge_size']                 = 'Badge méret';
$_['entry_hide_badge']                 = 'Badge elrejtése';
$_['entry_script_nonce']               = 'Script nonce';
$_['entry_google_captcha_nonce']       = 'Google Captcha API Script nonce';
$_['entry_css_nonce']                  = 'CSS stílus elem nonce';
$_['entry_log_filename']               = 'Érvényesítési naplófájl neve';
$_['entry_send_client_ip']             = 'Kliens IP-címének küldése';
$_['entry_enable_error_log']           = 'Hibák naplózásának engedélyezése';

// Button
$_['button_download']                  = 'Letöltés';
$_['button_clear']                     = 'Törlés';

// Help
$_['help_copy']                        = 'URL másolása';
$_['help_key_type']                    = 'Válassza ki a reCAPTCHA típusát ehhez a webhely kulcshoz. A webhely kulcs csak egy adott reCAPTCHA típusú webhelyhez működik. További információkért tekintse meg a <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Webhely típusok</a> oldalt.';
$_['help_hide_badge']                  = 'Ezen lehetőség engedélyezésével teljesen elrejtheti a Google reCAPTCHA badge-t. A láblécben automatikusan megjelenik egy figyelmeztetés minden oldalon a Google irányelveinek való megfelelés érdekében. További információkért látogasson el a Google reCAPTCHA GYIK oldalának <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">A reCAPTCHA badge elrejtését szeretném. Mi megengedett?</a> szakaszához.';
$_['help_site_key']                    = 'Használja ezt a webhely kulcsot az HTML kódban, amelyet a webhelye a felhasználóknak küld.';
$_['help_secret_key']                  = 'Használja ezt a titkos kulcsot a webhelye és a reCAPTCHA közötti kommunikációhoz.';
$_['help_v3_score_threshold']          = 'Ez a beállítás a reCAPTCHA v3 által visszaadott pontszám küszöbértékét határozza meg. A pontszám 0,0 és 1,0 között mozog, ahol a magasabb pontszám (közelebb 1,0-hoz) a jogos felhasználói interakció magasabb valószínűségét jelzi, míg az alacsonyabb pontszám (közelebb 0,0-hoz) nagyobb valószínűséget jelez arra, hogy botról van szó. Ezt a küszöbértéket módosíthatja annak érdekében, hogy az Ön által választott akciókat a pontszám alapján hajtsa végre. Alapértelmezés szerint 0,5-ös küszöbértéket használ, de ezt módosíthatja a weboldal speciális igényei szerint.';
$_['help_log_filename']                = 'Adja meg a naplófájl nevét a reCAPTCHA érvényesítési hibák tárolásához.';

// Error
$_['error_permission']                 = 'Figyelmeztetés: Nincs engedélye a Google reCAPTCHA módosításához!';
$_['error_error_log_permission']       = 'Figyelmeztetés: Nincs engedélye a hibanapló törlésére!';
$_['error_error_log_file']             = 'Figyelmeztetés: A %s fájl nem található!';
$_['error_error_log_empty']            = 'Figyelmeztetés: A %s napló fájl üres!';
$_['error_site_key']                   = 'A kulcs megadása kötelező!';
$_['error_secret_key']                 = 'A titkos kulcs megadása kötelező!';
$_['error_v3_score_threshold_value']   = 'A pontszám értékének 0 és 1 között kell lennie. Nem lehet kisebb, mint 0, és nem lehet nagyobb, mint 1.';
$_['error_log_filename']               = 'A reCAPTCHA érvényesítési hibáinak tárolásához szükséges egy naplófájl név.';
