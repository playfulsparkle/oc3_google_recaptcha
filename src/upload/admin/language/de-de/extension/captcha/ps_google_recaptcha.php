<?php
// Überschrift
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']          = 'Erste Schritte';
$_['heading_setup']                    = 'Einrichtung des Google reCAPTCHA';
$_['heading_troubleshot']              = 'Häufige Fehlersuche';
$_['heading_faq']                      = 'Häufig gestellte Fragen';
$_['heading_contact']                  = 'Support kontaktieren';
$_['heading_v3_score_threshold']       = 'Score-Schwelle';

// Text
$_['text_extension']                   = 'Erweiterungen';
$_['text_success']                     = 'Erfolg: Sie haben Google reCAPTCHA erfolgreich bearbeitet!';
$_['text_edit']                        = 'Google reCAPTCHA bearbeiten';
$_['text_signup']                      = 'Um zu beginnen, besuchen Sie die <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA-Seite</a> und registrieren Sie Ihre Website, um den reCAPTCHA Site Key und Secret Key zu erhalten.';
$_['text_getting_started']             = '<p><strong>Überblick:</strong> Playful Sparkle - Google reCAPTCHA ist eine fortschrittliche Erweiterung für OpenCart 4, die Ihren Shop vor Spam und Missbrauch schützt. Sie unterstützt mehrere Implementierungen von Google reCAPTCHA, darunter Score-basiert (v3), Checkbox (v2) und Unsichtbar (v2), und bietet Flexibilität sowie erhöhte Sicherheit für Ihren Shop.</p><p><strong>Voraussetzungen:</strong> OpenCart 4.x+, PHP 7.4 oder höher</p>';
$_['text_setup']                       = '<ul><li><strong>Schritt 1:</strong> Besorgen Sie sich Ihren reCAPTCHA-Website-Schlüssel und Geheimschlüssel in der <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">Google reCAPTCHA Admin-Konsole</a>.</li><li><strong>Schritt 2:</strong> Gehen Sie in Ihrem OpenCart-Adminbereich zu den Erweiterungseinstellungen und wählen Sie die gewünschte reCAPTCHA-Implementierung aus (Score-basiert v3, Checkbox v2 oder Unsichtbar v2).</li><li><strong>Schritt 3:</strong> Passen Sie Ihre Einstellungen entsprechend der ausgewählten Implementierung an:<ul><li>Für Score-basiert (v3): Legen Sie die Position des Badges fest (unten links, unten rechts oder inline). Für Inline wählen Sie das helle oder dunkle Design oder blenden Sie das Badge aus (mit einer Fußzeilenhinweis, um den Google-Richtlinien zu entsprechen).</li><li>Für Challenge (v2) Checkbox-Challenge: Legen Sie das Design des Badges (hell oder dunkel) und die Größe (normal oder kompakt) fest.</li><li>Für Challenge (v2) Unsichtbar: Legen Sie die Position des Badges fest (unten links, unten rechts oder inline). Für Inline wählen Sie das helle oder dunkle Design.</li></ul></li><li><strong>Schritt 4:</strong> Konfigurieren Sie reCAPTCHA für die gewünschten Seiten in den OpenCart-Einstellungen.</li><li><strong>Schritt 5:</strong> Aktualisieren Sie den Modifikations-Cache, um die Änderungen zu übernehmen. Führen Sie dazu Folgendes aus:<ul><li>Gehen Sie zu <strong>Erweiterungen</strong> &gt; <strong>Modifikationen</strong> in Ihrem OpenCart-Adminbereich.</li><li>Klicken Sie oben rechts auf der Seite auf den blauen <strong>Aktualisieren</strong>-Button.</li></ul>Dieser Schritt stellt sicher, dass die aktualisierten reCAPTCHA-Einstellungen korrekt in Ihrem Shop angewendet werden.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Problem:</strong> reCAPTCHA wird nicht angezeigt. <strong>Lösung:</strong> Stellen Sie sicher, dass der korrekte Website-Schlüssel und Geheimschlüssel eingegeben sind, und bestätigen Sie, dass Ihre Domain in der Google reCAPTCHA Admin-Konsole registriert ist. Aktualisieren Sie außerdem den Modifikations-Cache nach Änderungen.</li><li><strong>Problem:</strong> Fehler tritt bei der Validierung auf. <strong>Lösung:</strong> Überprüfen Sie, ob das Schlüsselpaar zur reCAPTCHA-Implementierung passt (z. B. können v2-Checkbox-Schlüssel nicht für v3 verwendet werden).</li><li><strong>Problem:</strong> Badge-Anpassungen werden nicht wie erwartet angezeigt. <strong>Lösung:</strong> Überprüfen Sie die Badge-Konfigurationseinstellungen (z. B. Position, Design oder Größe), stellen Sie sicher, dass der Cache geleert wurde, und aktualisieren Sie den Modifikations-Cache.</li></ul>';
$_['text_faq']                         = '<details><summary>Welche reCAPTCHA-Implementierung sollte ich wählen?</summary> Es hängt von Ihren Anforderungen ab:<ul><li><strong>Score-basiert (v3):</strong> Ideal für ein nahtloses Benutzererlebnis ohne direkte Interaktion, geeignet für Hintergrundvalidierungen.</li><li><strong>Checkbox (v2):</strong> Fügt ein sichtbares "Ich bin kein Roboter"-Checkbox-Element hinzu, ideal für benutzerorientierte Formulare.</li><li><strong>Unsichtbar (v2):</strong> Validiert Anfragen im Hintergrund ohne Benutzerinteraktion, ideal für saubere Oberflächen mit optionaler Badge-Anzeige.</li></ul></details><details><summary>Warum erhalte ich einen "Ungültiger Site Key"-Fehler?</summary> Dieser Fehler tritt auf, wenn die eingegebenen Schlüssel nicht zur gewählten reCAPTCHA-Implementierung passen. Stellen Sie sicher, dass Sie das richtige Schlüsselpaar für die gewählte Implementierung verwenden (z. B. v3-Schlüssel für v3, v2 Checkbox-Schlüssel für v2 Checkbox usw.).</details><details><summary>Wo kann ich reCAPTCHA aktivieren?</summary> reCAPTCHA kann für verschiedene Seiten auf der OpenCart-Einstellungsseite konfiguriert werden.</details>';
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
$_['text_recaptcha_branding']          = 'Diese Seite ist durch reCAPTCHA geschützt. Es gelten die <a href="https://policies.google.com/privacy">Datenschutzbestimmungen</a> und die <a href="https://policies.google.com/terms">Nutzungsbedingungen</a> von Google.';

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
$_['entry_challange_captcha']          = 'Bitte vervollständigen Sie die Captcha-Validierung unten';
$_['entry_score_based_captcha']        = 'Captcha-Validierung';

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
$_['error_missing_input_secret']       = 'Der geheime Schlüssel fehlt. Bitte stellen Sie sicher, dass Ihr reCAPTCHA-Schlüssel in der Anfrage enthalten ist.';
$_['error_invalid_input_secret']       = 'Der angegebene geheime Schlüssel ist ungültig oder falsch formatiert. Überprüfen Sie Ihren reCAPTCHA-Schlüssel und versuchen Sie es erneut.';
$_['error_missing_input_response']     = 'Die reCAPTCHA-Antwort fehlt. Bitte stellen Sie sicher, dass die reCAPTCHA-Aufgabe abgeschlossen wurde, bevor das Formular gesendet wird.';
$_['error_invalid_input_response']     = 'Die angegebene reCAPTCHA-Antwort ist ungültig oder falsch formatiert. Bitte versuchen Sie, die reCAPTCHA-Aufgabe erneut zu lösen.';
$_['error_bad_request']                = 'Die Anfrage konnte nicht verarbeitet werden, da sie ungültig oder fehlerhaft ist. Überprüfen Sie das Format und die Parameter der Anfrage und versuchen Sie es erneut.';
$_['error_timeout_or_duplicate']       = 'Die reCAPTCHA-Antwort ist nicht mehr gültig. Sie könnte abgelaufen oder erneut verwendet worden sein. Bitte aktualisieren Sie die Seite und lösen Sie die reCAPTCHA-Aufgabe erneut.';
$_['error_low_score']                  = 'Ihre Anfrage wurde als verdächtig eingestuft. Bitte versuchen Sie es erneut oder kontaktieren Sie den Support, falls Sie einen Fehler vermuten.';
