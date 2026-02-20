<?php
// Überschrift
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                  = 'Support kontaktieren';
$_['heading_v3_score_threshold']       = 'Score-Schwelle';

// Text
$_['text_extension']                   = 'Erweiterungen';
$_['text_success']                     = 'Erfolg: Sie haben Google reCAPTCHA erfolgreich bearbeitet!';
$_['text_edit']                        = 'Google reCAPTCHA bearbeiten';
$_['text_signup']                      = 'Um zu beginnen, besuchen Sie die <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA-Seite</a> und registrieren Sie Ihre Website, um den reCAPTCHA Site Key und Secret Key zu erhalten.';
$_['text_contact']                     = '<p>Für weitere Unterstützung wenden Sie sich bitte an unser Support-Team:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentation:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Benutzerdokumentation</a></li></ul>';
$_['text_key_type_v3']                 = 'Score-basiert (v3) - Anfragen anhand eines Scores überprüfen';
$_['text_key_type_v2_checkbox']        = 'Challenge (v2) - "Ich bin kein Roboter"-Checkbox-Herausforderung';
$_['text_key_type_v2_invisible']       = 'Challenge (v2) - Unsichtbares reCAPTCHA-Badge';
$_['text_badge_inline']                = 'Inline';
$_['text_badge_bottom_left']           = 'Unten links';
$_['text_badge_bottom_right']          = 'Unten rechts';
$_['text_badge_dark']                  = 'Dunkel';
$_['text_badge_light']                 = 'Hell';
$_['text_badge_compact']               = 'Kompakt';
$_['text_badge_normal']                = 'Normal';
$_['text_badge_invisible']             = 'Unsichtbar';
$_['text_csp_info']                    = 'Stellen Sie sicher, dass Ihre Content-Security-Policy (CSP) korrekt für Google reCAPTCHA konfiguriert ist. Wir empfehlen die Verwendung des <strong>nonce-basierten Ansatzes von CSP3</strong> für maximale Sicherheit. Alternativ fügen Sie <strong>script-src</strong> hinzu, um <strong>https://www.google.com/recaptcha/</strong> und <strong>https://www.gstatic.com/recaptcha/</strong> zuzulassen, sowie <strong>frame-src</strong>, um <strong>https://www.google.com/recaptcha/</strong> und <strong>https://recaptcha.google.com/recaptcha/</strong> zuzulassen. Die Verwendung von <strong>strict-dynamic</strong> wird ebenfalls von kompatiblen Browsern unterstützt.';
$_['text_admin_login']                 = 'Administrator-Anmeldung';
$_['text_catalog_login']               = 'Frontend-Anmeldung';
$_['text_register']                    = 'Registrierung';
$_['text_admin_forgotten_password']    = 'Vergessenes Passwort für das Backend';
$_['text_catalog_forgotten_password']  = 'Vergessenes Passwort für das Frontend';
$_['text_guest']                       = 'Gastbestellung';
$_['text_review']                      = 'Bewertungen';
$_['text_return']                      = 'Rücksendungen';
$_['text_contact']                     = 'Kontakt';
$_['text_default']                     = '(Standard)';
$_['text_log_clear_success']           = 'Das Fehlerprotokoll wurde erfolgreich gelöscht.';

// Tab
$_['tab_general']                      = 'Allgemein';
$_['tab_security']                     = 'Sicherheit';
$_['tab_error_log']                    = 'Fehlerprotokoll';
$_['tab_help_and_support']             = 'Hilfe &amp; Unterstützung';

// Entry
$_['entry_key_type']                   = 'reCAPTCHA-Typ';
$_['entry_site_key']                   = 'Websiteschlüssel';
$_['entry_secret_key']                 = 'Geheimen Schlüssel';
$_['entry_status']                     = 'Status';
$_['entry_badge_position']             = 'Position des Badges';
$_['entry_badge_theme']                = 'Design des Badges';
$_['entry_badge_size']                 = 'Größe des Badges';
$_['entry_hide_badge']                 = 'Badge ausblenden';
$_['entry_script_nonce']               = 'Skript-Nonce';
$_['entry_google_captcha_nonce']       = 'Google-Captcha-API-Skript-Nonce';
$_['entry_css_nonce']                  = 'CSS-Style-Tag-Nonce';
$_['entry_log_filename']               = 'Log-Dateiname für Validierung';
$_['entry_send_client_ip']             = 'Client-IP-Adresse senden';
$_['entry_enable_error_log']           = 'Fehlerprotokoll aktivieren';

// Button
$_['button_download']                  = 'Herunterladen';
$_['button_clear']                     = 'Löschen';

// Help
$_['help_copy']                        = 'URL kopieren';
$_['help_key_type']                    = 'Wählen Sie den reCAPTCHA-Typ für diesen Schlüssel. Ein Websiteschlüssel funktioniert nur mit einem spezifischen reCAPTCHA-Typ. Weitere Informationen finden Sie unter <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Site Types</a>.';
$_['help_hide_badge']                  = 'Wenn Sie diese Option aktivieren, wird das Google reCAPTCHA-Badge vollständig ausgeblendet. Ein Hinweis wird automatisch im Footer jeder Seite hinzugefügt, um die Google-Richtlinien einzuhalten. Weitere Informationen finden Sie im Abschnitt <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">I\'d like to hide the reCAPTCHA badge. What is allowed?</a> auf der Google reCAPTCHA FAQ-Seite.';
$_['help_site_key']                    = 'Verwenden Sie diesen websiteschlüssel im HTML-Code, den Ihre Seite den Nutzern bereitstellt.';
$_['help_secret_key']                  = 'Verwenden Sie diesen geheimen Schlüssel für die Kommunikation zwischen Ihrer Website und reCAPTCHA.';
$_['help_v3_score_threshold']          = 'Diese Einstellung definiert die Schwelle für das von reCAPTCHA v3 zurückgegebene Score. Das Score reicht von 0,0 bis 1,0, wobei ein höherer Score (näher an 1,0) eine höhere Wahrscheinlichkeit für eine legitime Benutzerinteraktion anzeigt und ein niedrigerer Score (näher an 0,0) eine höhere Wahrscheinlichkeit für einen Bot bedeutet. Sie können diese Schwelle anpassen, um die Aktionen basierend auf dem Score zu bestimmen. Standardmäßig wird eine Schwelle von 0,5 verwendet, aber Sie können diese entsprechend den Anforderungen Ihrer Website anpassen.';
$_['help_log_filename']                = 'Geben Sie den Log-Dateinamen ein, um Fehler bei der reCAPTCHA-Validierung zu speichern.';

// Error
$_['error_permission']                 = 'Warnung: Sie haben keine Berechtigung, Google reCAPTCHA zu ändern!';
$_['error_error_log_permission']       = 'Warnung: Sie haben keine Berechtigung, das Fehlerprotokoll zu löschen!';
$_['error_error_log_file']             = 'Warnung: Die Datei %s konnte nicht gefunden werden!';
$_['error_error_log_empty']            = 'Warnung: Die Protokolldatei %s ist leer!';
$_['error_site_key']                   = 'Websiteschlüssel ist erforderlich!';
$_['error_secret_key']                 = 'Geheimen Schlüssel ist erforderlich!';
$_['error_v3_score_threshold_value']   = 'Der Wert des Scores muss zwischen 0 und 1 liegen. Er darf nicht kleiner als 0 oder größer als 1 sein.';
$_['error_log_filename']               = 'Ein Log-Dateiname ist erforderlich, um Fehler bei der reCAPTCHA-Validierung zu speichern.';
