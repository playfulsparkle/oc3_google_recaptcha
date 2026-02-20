<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Contatta il supporto';
$_['heading_v3_score_threshold']                   = 'Soglia del punteggio';

// Text
$_['text_extension']                               = 'Estensioni';
$_['text_success']                                 = 'Successo: Hai modificato Google reCAPTCHA!';
$_['text_edit']                                    = 'Modifica Google reCAPTCHA';
$_['text_signup']                                  = 'Per iniziare, visita la <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">pagina di Google reCAPTCHA</a> e registra il tuo sito web per ottenere la Site Key e la Secret Key di reCAPTCHA.';
$_['text_contact']                                 = '<p>Per ulteriore assistenza, contatta il nostro team di supporto:</p><ul><li><strong>Contatto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentazione:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentazione utente</a></li></ul>';
$_['text_key_type_v3']                             = 'Score-based (v3) - Verifica le richieste con un punteggio';
$_['text_key_type_v2_checkbox']                    = 'Challenge (v2) - Casella di controllo "Non sono un robot"';
$_['text_key_type_v2_invisible']                   = 'Challenge (v2) - Challenge del badge Invisible reCAPTCHA';
$_['text_badge_inline']                            = 'Inline';
$_['text_badge_bottom_left']                       = 'In basso a sinistra';
$_['text_badge_bottom_right']                      = 'In basso a destra';
$_['text_badge_dark']                              = 'Scuro';
$_['text_badge_light']                             = 'Chiaro';
$_['text_badge_compact']                           = 'Compatto';
$_['text_badge_normal']                            = 'Normale';
$_['text_badge_invisible']                         = 'Invisible';
$_['text_csp_info']                                = 'Assicurati che la tua Content-Security-Policy (CSP) sia correttamente configurata per funzionare con Google reCAPTCHA. Si consiglia di utilizzare l\'<strong>approccio basato su nonce di CSP3</strong> per la massima sicurezza. In alternativa, includi <strong>script-src</strong> per consentire <strong>https://www.google.com/recaptcha/</strong> e <strong>https://www.gstatic.com/recaptcha/</strong>, e <strong>frame-src</strong> per consentire <strong>https://www.google.com/recaptcha/</strong> e <strong>https://recaptcha.google.com/recaptcha/</strong>. L\'utilizzo di <strong>strict-dynamic</strong> è anche supportato nei browser compatibili.';
$_["text_captcha_page_admin_login"]                = "Login Amministrazione";
$_["text_captcha_page_catalog_login"]              = "Login Cliente";
$_["text_captcha_page_register"]                   = "Registrazione";
$_["text_captcha_page_admin_forgotten_password"]   = "Password dimenticata Amministrazione";
$_["text_captcha_page_catalog_forgotten_password"] = "Password dimenticata Cliente";
$_["text_captcha_page_guest"]                      = "Checkout Ospite";
$_["text_captcha_page_review"]                     = "Recensioni";
$_["text_captcha_page_return"]                     = "Resi";
$_["text_captcha_page_contact"]                    = "Contatti";
$_['text_default']                                 = '(predefinito)';
$_['text_log_clear_success']                       = 'Il registro degli errori è stato cancellato con successo.';

// Tab
$_['tab_general']                                  = 'Generale';
$_['tab_security']                                 = 'Sicurezza';
$_['tab_error_log']                                = 'Registro errori';
$_['tab_help_and_support']                         = 'Aiuto e supporto';

// Entry
$_['entry_key_type']                               = 'Tipo di reCAPTCHA';
$_['entry_site_key']                               = 'Chiave del sito';
$_['entry_secret_key']                             = 'Chiave segreta';
$_['entry_status']                                 = 'Stato';
$_['entry_badge_position']                         = 'Posizione del badge';
$_['entry_badge_theme']                            = 'Tema del badge';
$_['entry_badge_size']                             = 'Dimensione del badge';
$_['entry_hide_badge']                             = 'Nascondi il badge';
$_['entry_script_nonce']                           = 'Nonce dello script';
$_['entry_google_captcha_nonce']                   = 'Nonce dello script API Google Captcha';
$_['entry_css_nonce']                              = 'Nonce del tag CSS';
$_['entry_log_filename']                           = 'Nome file di registro per la convalida';
$_['entry_send_client_ip']                         = 'Invia l\'indirizzo IP del client';
$_['entry_enable_error_log']                       = 'Abilitare il registro degli errori';

// Button
$_['button_download']                              = 'Scarica';
$_['button_clear']                                 = 'Pulisci';

// Help
$_['help_copy']                                    = 'Copia URL';
$_['help_key_type']                                = 'Scegli il tipo di reCAPTCHA per questa chiave del sito. Una chiave del sito funziona solo con un singolo tipo di reCAPTCHA. Vedi <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Tipi di sito</a> per ulteriori dettagli.';
$_['help_hide_badge']                              = 'Abilitando questa opzione, puoi nascondere completamente il badge di Google reCAPTCHA. Una notifica sarà automaticamente aggiunta al piè di pagina di ogni pagina per conformarsi alle linee guida di Google. Per ulteriori informazioni, consulta la sezione <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Vorrei nascondere il badge reCAPTCHA. Cosa è permesso?</a> nella pagina delle FAQ di Google reCAPTCHA.';
$_['help_site_key']                                = 'Usa questa chiave del sito nel codice HTML che il tuo sito serve agli utenti.';
$_['help_secret_key']                              = 'Usa questa chiave segreta per la comunicazione tra il tuo sito e reCAPTCHA.';
$_['help_v3_score_threshold']                      = 'Questa impostazione definisce la soglia per il punteggio restituito da reCAPTCHA v3. Il punteggio varia da 0,0 a 1,0, dove un punteggio più alto (più vicino a 1,0) indica una maggiore probabilità di un\'interazione legittima dell\'utente, e un punteggio più basso (più vicino a 0,0) suggerisce una maggiore probabilità di un bot. Puoi regolare questa soglia per determinare le azioni da intraprendere in base al punteggio. Per impostazione predefinita, viene utilizzata una soglia di 0,5, ma puoi modificarla in base alle esigenze specifiche del tuo sito.';
$_['help_log_filename']                            = 'Inserisci il nome del file di registro per memorizzare gli errori di convalida di reCAPTCHA.';

// Error
$_['error_permission']                             = 'Attenzione: Non hai il permesso di modificare Google reCAPTCHA!';
$_['error_error_log_permission']                   = 'Attenzione: Non hai il permesso di cancellare il registro degli errori!';
$_['error_error_log_file']                         = 'Attenzione: Il file %s non è stato trovato!';
$_['error_error_log_empty']                        = 'Attenzione: Il file di registro %s è vuoto!';
$_['error_site_key']                               = 'Chiave richiesta!';
$_['error_secret_key']                             = 'Chiave segreta richiesta!';
$_['error_v3_score_threshold_value']               = 'Il valore del punteggio deve essere compreso tra 0 e 1. Non può essere inferiore a 0 né superiore a 1.';
$_['error_log_filename']                           = 'È necessario un nome di file di registro per memorizzare gli errori di convalida di reCAPTCHA.';
