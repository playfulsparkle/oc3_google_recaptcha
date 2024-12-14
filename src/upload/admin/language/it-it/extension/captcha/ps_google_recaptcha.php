<?php
// Heading
$_['heading_title']               = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']     = 'Inizio';
$_['heading_setup']               = 'Impostazione di Google reCAPTCHA';
$_['heading_troubleshot']         = 'Risoluzione dei problemi comuni';
$_['heading_faq']                 = 'Domande frequenti';
$_['heading_contact']             = 'Contatta il supporto';

// Text
$_['text_extension']              = 'Estensioni';
$_['text_success']                = 'Successo: Hai modificato Google reCAPTCHA!';
$_['text_edit']                   = 'Modifica Google reCAPTCHA';
$_['text_signup']                 = 'Vai alla <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">pagina Google reCAPTCHA</a> e registra il tuo sito web.';
$_['text_getting_started']        = '<p><strong>Panoramica:</strong> Playful Sparkle - Google reCAPTCHA è un\'estensione avanzata per OpenCart 4, progettata per proteggere il tuo negozio dallo spam e dall\'abuso. Supporta più implementazioni di Google reCAPTCHA, tra cui Score-based (v3), Checkbox (v2) e Invisible (v2), offrendo flessibilità e maggiore sicurezza per il tuo negozio.</p><p><strong>Requisiti:</strong> OpenCart 4.x+, PHP 7.4+ o superiore</p>';
$_['text_setup']                  = '<ul><li><strong>Passo 1:</strong> Ottieni la tua chiave del sito e la chiave segreta reCAPTCHA dalla <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">console di amministrazione di Google reCAPTCHA</a>.</li><li><strong>Passo 2:</strong> Nel pannello di amministrazione di OpenCart, vai alle impostazioni dell\'estensione e scegli l\'implementazione di reCAPTCHA che desideri utilizzare (Score-based v3, Checkbox v2 o Invisible v2).</li><li><strong>Passo 3:</strong> Personalizza le tue impostazioni in base all\'implementazione selezionata:<ul><li>Per Score-based (v3): Imposta la posizione del badge (in basso a sinistra, in basso a destra o inline). Per inline, scegli il tema chiaro o scuro, oppure nascondi il badge (con una notifica nel piè di pagina per rispettare la politica di Google).</li><li>Per Challenge (v2) Checkbox challenge: Imposta il tema del badge (chiaro o scuro) e la dimensione (normale o compatta).</li><li>Per Challenge (v2) Invisible: Imposta la posizione del badge (in basso a sinistra, in basso a destra o inline). Per inline, scegli il tema chiaro o scuro.</li></ul></li><li><strong>Passo 4:</strong> Configura reCAPTCHA per le pagine desiderate nella pagina delle impostazioni di OpenCart.</li><li><strong>Passo 5:</strong> Rinfresca la cache delle modifiche per applicare le modifiche. Per farlo:<ul><li>Vai su <strong>Estensioni</strong> &gt; <strong>Modifiche</strong> nel pannello di amministrazione di OpenCart.</li><li>Clicca sul pulsante blu <strong>Rinfresca</strong> nell\'angolo in alto a destra della pagina.</li></ul>Questo passaggio garantisce che le impostazioni aggiornate di reCAPTCHA vengano correttamente applicate al tuo negozio.</li></ul>';
$_['text_troubleshot']            = '<ul><li><strong>Problema:</strong> reCAPTCHA non viene visualizzato. <strong>Soluzione:</strong> Assicurati che la chiave del sito e la chiave segreta siano inserite correttamente e verifica che il tuo dominio sia registrato nella console di amministrazione di Google reCAPTCHA. Inoltre, assicurati di rinfrescare la cache delle modifiche dopo aver apportato modifiche.</li><li><strong>Problema:</strong> Si verifica un errore durante la convalida. <strong>Soluzione:</strong> Verifica che la coppia di chiavi corrisponda all\'implementazione di reCAPTCHA (ad esempio, le chiavi di v2 Checkbox non possono essere utilizzate per v3).</li><li><strong>Problema:</strong> La personalizzazione del badge non appare come previsto. <strong>Soluzione:</strong> Ricontrolla le impostazioni di configurazione del badge (ad esempio, posizione, tema o dimensione), assicurati che la cache sia stata svuotata e rinfresca la cache delle modifiche.</li></ul>';
$_['text_faq']                    = '<details><summary>Quale implementazione di reCAPTCHA dovrei scegliere?</summary> Dipende dalle tue esigenze:<ul><li><strong>Score-based (v3):</strong> Ottimale per un\'esperienza utente fluida senza interazione diretta, utile per la convalida in background.</li><li><strong>Checkbox (v2):</strong> Aggiunge una chiara casella "Non sono un robot" per un\'interazione visibile, ideale per i moduli a vista dell\'utente.</li><li><strong>Invisible (v2):</strong> Convalida le richieste in background senza richiedere interazione dell\'utente, ideale per interfacce più pulite con badge opzionale.</li></ul></details><details><summary>Perché ricevo l\'errore "Invalid site key"?</summary> Questo accade quando le chiavi inserite non corrispondono all\'implementazione di reCAPTCHA che hai selezionato. Assicurati di utilizzare la coppia di chiavi corretta per l\'implementazione scelta (ad esempio, chiavi v3 per v3, chiavi v2 Checkbox per v2 Checkbox, ecc.).</details><details><summary>Dove posso abilitare reCAPTCHA?</summary> reCAPTCHA può essere configurato per diverse pagine nella pagina delle impostazioni di OpenCart.</details>';
$_['text_contact']                = '<p>Per ulteriore assistenza, contatta il nostro team di supporto:</p><ul><li><strong>Contatto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentazione:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentazione utente</a></li></ul>';
$_['text_key_type_v3']            = 'Score-based (v3) - Verifica le richieste con un punteggio';
$_['text_key_type_v2_checkbox']   = 'Challenge (v2) - Casella di controllo "Non sono un robot"';
$_['text_key_type_v2_invisible']  = 'Challenge (v2) - Challenge del badge Invisible reCAPTCHA';
$_['text_badge_inline']           = 'Inline';
$_['text_badge_bottom_left']      = 'In basso a sinistra';
$_['text_badge_bottom_right']     = 'In basso a destra';
$_['text_badge_dark']             = 'Scuro';
$_['text_badge_light']            = 'Chiaro';
$_['text_badge_compact']          = 'Compatto';
$_['text_badge_normal']           = 'Normale';
$_['text_badge_invisible']        = 'Invisible';
$_['text_csp_info']               = 'Assicurati che la tua Content-Security-Policy (CSP) sia correttamente configurata per funzionare con Google reCAPTCHA. Si consiglia di utilizzare l\'<strong>approccio basato su nonce di CSP3</strong> per la massima sicurezza. In alternativa, includi <strong>script-src</strong> per consentire <strong>https://www.google.com/recaptcha/</strong> e <strong>https://www.gstatic.com/recaptcha/</strong>, e <strong>frame-src</strong> per consentire <strong>https://www.google.com/recaptcha/</strong> e <strong>https://recaptcha.google.com/recaptcha/</strong>. L\'utilizzo di <strong>strict-dynamic</strong> è anche supportato nei browser compatibili.';

// Tab
$_['tab_general']                 = 'Generale';
$_['tab_security']                = 'Sicurezza';
$_['tab_help_and_support']        = 'Aiuto e supporto';

// Entry
$_['entry_key_type']              = 'Tipo di reCAPTCHA';
$_['entry_site_key']              = 'Chiave del sito';
$_['entry_secret_key']            = 'Chiave segreta';
$_['entry_status']                = 'Stato';
$_['entry_badge_position']        = 'Posizione del badge';
$_['entry_badge_theme']           = 'Tema del badge';
$_['entry_badge_size']            = 'Dimensione del badge';
$_['entry_hide_badge']            = 'Nascondi il badge';
$_['entry_script_nonce']          = 'Nonce dello script';
$_['entry_google_captcha_nonce']  = 'Nonce dello script API Google Captcha';
$_['entry_css_nonce']             = 'Nonce del tag CSS';

// Help
$_['help_copy']                   = 'Copia URL';
$_['help_key_type']               = 'Scegli il tipo di reCAPTCHA per questa chiave del sito. Una chiave del sito funziona solo con un singolo tipo di reCAPTCHA. Vedi <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Tipi di sito</a> per ulteriori dettagli.';
$_['help_hide_badge']             = 'Abilitando questa opzione, puoi nascondere completamente il badge di Google reCAPTCHA. Una notifica sarà automaticamente aggiunta al piè di pagina di ogni pagina per conformarsi alle linee guida di Google. Per ulteriori informazioni, consulta la sezione <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Vorrei nascondere il badge reCAPTCHA. Cosa è permesso?</a> nella pagina delle FAQ di Google reCAPTCHA.';
$_['help_site_key']               = 'Usa questa chiave del sito nel codice HTML che il tuo sito serve agli utenti.';
$_['help_secret_key']             = 'Usa questa chiave segreta per la comunicazione tra il tuo sito e reCAPTCHA.';

// Error
$_['error_permission']            = 'Attenzione: Non hai il permesso di modificare Google reCAPTCHA!';
$_['error_site_key']              = 'Chiave richiesta!';
$_['error_secret_key']            = 'Chiave segreta richiesta!';
