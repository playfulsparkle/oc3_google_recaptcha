<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']          = 'Začíname';
$_['heading_setup']                    = 'Nastavenie Google reCAPTCHA';
$_['heading_troubleshot']              = 'Bežné problémy';
$_['heading_faq']                      = 'Často kladené otázky';
$_['heading_contact']                  = 'Kontaktujte podporu';
$_['heading_v3_score_threshold']       = 'Prahová hodnota skóre';

// Text
$_['text_extension']                   = 'Rozšírenia';
$_['text_success']                     = 'Úspech: Google reCAPTCHA bolo úspešne upravené!';
$_['text_edit']                        = 'Upraviť Google reCAPTCHA';
$_['text_signup']                      = 'Pre začiatok navštívte <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">stránku Google reCAPTCHA</a> a zaregistrujte svoju webovú stránku, aby ste získali reCAPTCHA Site Key a Secret Key.';
$_['text_getting_started']             = '<p><strong>Prehľad:</strong> Playful Sparkle - Google reCAPTCHA je pokročilé rozšírenie pre OpenCart 4, navrhnuté na ochranu vašej stránky pred spamom a zneužívaním. Podporuje viacero implementácií Google reCAPTCHA, vrátane skóre (v3), zaškrtávacieho políčka (v2) a neviditeľného (v2), čím poskytuje flexibilitu a zvýšenú bezpečnosť pre vašu stránku.</p><p><strong>Požiadavky:</strong> OpenCart 4.x+, PHP 7.4+ alebo novší</p>';
$_['text_setup']                       = '<ul><li><strong>Krok 1:</strong> Získajte svoj reCAPTCHA Site Key a Secret Key z <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">Google reCAPTCHA admin konzoly</a>.</li><li><strong>Krok 2:</strong> V administratívnom paneli OpenCart prejdite na nastavenia rozšírenia a vyberte implementáciu reCAPTCHA, ktorú chcete použiť (Score-based v3, Checkbox v2 alebo Invisible v2).</li><li><strong>Krok 3:</strong> Prispôsobte nastavenia na základe vybranej implementácie:<ul><li>Pre Score-based (v3): Nastavte pozíciu nálepky (dolný ľavý, dolný pravý alebo inline). Pre inline vyberte svetlú alebo tmavú tému, alebo skryte nálepku (s upozornením v päte stránky na dodržiavanie politiky Google).</li><li>Pre Challenge (v2) Checkbox výzvu: Nastavte tému nálepky (svetlá alebo tmavá) a veľkosť (normálna alebo kompaktná).</li><li>Pre Challenge (v2) Invisible: Nastavte pozíciu nálepky (dolný ľavý, dolný pravý alebo inline). Pre inline vyberte svetlú alebo tmavú tému.</li></ul></li><li><strong>Krok 4:</strong> Nakonfigurujte reCAPTCHA pre požadované stránky na stránke nastavení OpenCart.</li><li><strong>Krok 5:</strong> Obnovte cache úprav, aby sa aplikovali zmeny. Na tento účel:<ul><li>Prejdite do <strong>Rozšírenia</strong> &gt; <strong>Úpravy</strong> vo vašom administratívnom paneli OpenCart.</li><li>Kliknite na modré tlačidlo <strong>Obnoviť</strong> v pravom hornom rohu stránky.</li></ul>Tento krok zabezpečí, že aktualizované nastavenia reCAPTCHA sa správne aplikujú na váš obchod.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Problém:</strong> reCAPTCHA sa nezobrazuje. <strong>Riešenie:</strong> Skontrolujte, či sú správne zadané Site Key a Secret Key, a potvrďte, že vaša doména je registrovaná v Google reCAPTCHA admin konzole. Okrem toho nezabudnite obnoviť cache úprav po vykonaní zmien.</li><li><strong>Problém:</strong> Počas validácie sa zobrazuje chyba. <strong>Riešenie:</strong> Overte, či kľúče zodpovedajú implementácii reCAPTCHA (napr. v2 Checkbox kľúče nemožno použiť pre v3).</li><li><strong>Problém:</strong> Prispôsobenie nálepky sa nezobrazuje podľa očakávaní. <strong>Riešenie:</strong> Dvojito skontrolujte nastavenia konfigurácie nálepky (napr. pozícia, téma alebo veľkosť), uistite sa, že bola vymazaná cache a obnovte cache úprav.</li></ul>';
$_['text_faq']                         = '<details><summary>Akú implementáciu reCAPTCHA by som mal vybrať?</summary> Závisí to od vašich potrieb:<ul><li><strong>Skóre (v3):</strong> Najlepšie pre plynulý používateľský zážitok bez priamej interakcie, užitočné pre pozadím overenie.</li><li><strong>Zaškrtávacie políčko (v2):</strong> Pridáva jasné zaškrtávacie políčko „Nie som robot“ pre viditeľnú interakciu, ideálne pre formuláre pre používateľov.</li><li><strong>Neviditeľné (v2):</strong> Overuje požiadavky na pozadí bez potreby používateľskej interakcie, ideálne pre čistšie rozhrania s voliteľným zobrazením odznaku.</li></ul></details><details><summary>Prečo dostávam chybu „Neplatný kľúč stránky“?</summary> K tejto chybe dochádza, keď kľúče, ktoré ste zadali, nezodpovedajú implementácii reCAPTCHA, ktorú ste vybrali. Uistite sa, že používate správny pár kľúčov pre vybranú implementáciu (napr. kľúče v3 pre v3, kľúče v2 zaškrtávacie políčko pre v2 zaškrtávacie políčko atď.).</details><details><summary>Kde môžem povoliť reCAPTCHA?</summary> reCAPTCHA môže byť nakonfigurované pre rôzne stránky v nastaveniach OpenCart.</details>';
$_['text_contact']                     = '<p>Pre ďalšiu pomoc sa, prosím, obráťte na náš tím podpory:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentácia:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentácia pre používateľov</a></li></ul>';
$_['text_key_type_v3']                 = 'Skóre na základe (v3) - Overiť požiadavky pomocou skóre';
$_['text_key_type_v2_checkbox']        = 'Výzva (v2) - Zaškrtávacie políčko „Nie som robot“';
$_['text_key_type_v2_invisible']       = 'Výzva (v2) - Neviditeľné reCAPTCHA odznak';
$_['text_badge_inline']                = 'Inline';
$_['text_badge_bottom_left']           = 'Dole vľavo';
$_['text_badge_bottom_right']          = 'Dole vpravo';
$_['text_badge_dark']                  = 'Tmavé';
$_['text_badge_light']                 = 'Svetlé';
$_['text_badge_compact']               = 'Kompaktné';
$_['text_badge_normal']                = 'Normálne';
$_['text_badge_invisible']             = 'Neviditeľné';
$_['text_csp_info']                    = 'Uistite sa, že vaša Content-Security-Policy (CSP) je správne nakonfigurovaná na spoluprácu s Google reCAPTCHA. Odporúčame použiť <strong>nonce-based prístup z CSP3</strong> pre maximálnu bezpečnosť. Alternatívne zahrňte <strong>script-src</strong>, aby sa umožnilo <strong>https://www.google.com/recaptcha/</strong> a <strong>https://www.gstatic.com/recaptcha/</strong>, a <strong>frame-src</strong>, aby sa umožnilo <strong>https://www.google.com/recaptcha/</strong> a <strong>https://recaptcha.google.com/recaptcha/</strong>. Používanie <strong>strict-dynamic</strong> je tiež podporované v kompatibilných prehliadačoch.';
$_['text_v3_score_threshold_register'] = 'Registrácia';
$_['text_v3_score_threshold_guest']    = 'Nákup ako hosť';
$_['text_v3_score_threshold_review']   = 'Recenzie';
$_['text_v3_score_threshold_return']   = 'Vrátenie tovaru';
$_['text_v3_score_threshold_contact']  = 'Kontakt';
$_['text_default']                     = '(predvolené)';
$_['text_log_clear_success']           = 'Chybový log bol úspešne vymazaný.';

// Tab
$_['tab_general']                      = 'Všeobecné';
$_['tab_security']                     = 'Bezpečnosť';
$_['tab_error_log']                    = 'Protokol chýb';
$_['tab_help_and_support']             = 'Pomoc & Podpora';

// Entry
$_['entry_key_type']                   = 'Typ reCAPTCHA';
$_['entry_site_key']                   = 'Site key';
$_['entry_secret_key']                 = 'Tajný kľúč';
$_['entry_status']                     = 'Stav';
$_['entry_badge_position']             = 'Pozícia nálepky';
$_['entry_badge_theme']                = 'Téma nálepky';
$_['entry_badge_size']                 = 'Veľkosť nálepky';
$_['entry_hide_badge']                 = 'Skryť nálepku';
$_['entry_script_nonce']               = 'Nonce skriptu';
$_['entry_google_captcha_nonce']       = 'Nonce Google reCAPTCHA API skriptu';
$_['entry_css_nonce']                  = 'Nonce štýlu CSS značky';
$_['entry_log_filename']               = 'Názov súboru protokolu pre validáciu';
$_['entry_send_client_ip']             = 'Odoslať IP adresu klienta';
$_['entry_enable_error_log']           = 'Povoliť protokol chýb';

// Button
$_['button_download']                  = 'Stiahnuť';
$_['button_clear']                     = 'Vymazať';

// Help
$_['help_copy']                        = 'Skopírovať URL';
$_['help_key_type']                    = 'Vyberte typ reCAPTCHA pre tento site key. Site key funguje iba s jedným typom reCAPTCHA. Viac informácií nájdete na stránke <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Typy stránok</a>.';
$_['help_hide_badge']                  = 'Povolením tejto možnosti môžete úplne skryť Google reCAPTCHA nálepku. Oznámenie bude automaticky pridané do päty každej stránky, aby bola splnená smernica spoločnosti Google. Viac informácií nájdete v sekcii <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Chcem skryť reCAPTCHA nálepku. Čo je povolené?</a> na stránke FAQ Google reCAPTCHA.';
$_['help_site_key']                    = 'Použite tento site key v HTML kóde, ktorý vaša stránka poskytuje používateľom.';
$_['help_secret_key']                  = 'Použite tento tajný kľúč na komunikáciu medzi vašou stránkou a reCAPTCHA.';
$_['help_v3_score_threshold']          = 'Toto nastavenie definuje prahovú hodnotu pre skóre vrátené reCAPTCHA v3. Skóre sa pohybuje od 0,0 do 1,0, pričom vyššie skóre (bližšie k 1,0) naznačuje vyššiu pravdepodobnosť legitímnej interakcie používateľa a nižšie skóre (bližšie k 0,0) naznačuje vyššiu pravdepodobnosť bota. Tento prah môžete upravit tak, aby určoval akcie na základe skóre. Predvolene sa používa prah 0,5, ale môžete ho upravit podľa špecifických požiadaviek vášho webu.';
$_['help_log_filename']                = 'Zadajte názov súboru protokolu na uloženie chýb validácie reCAPTCHA.';

// Error
$_['error_permission']                 = 'Upozornenie: Nemáte oprávnenie na úpravu Google reCAPTCHA!';
$_['error_error_log_permission']       = 'Upozornenie: Nemáte oprávnenie na vymazanie chybového logu!';
$_['error_error_log_file']             = 'Upozornenie: Súbor %s sa nenašiel!';
$_['error_error_log_empty']            = 'Upozornenie: Chybový súbor %s je prázdny!';
$_['error_site_key']                   = 'Vyžaduje sa kľúč!';
$_['error_secret_key']                 = 'Vyžaduje sa tajný kľúč!';
$_['error_v3_score_threshold_value']   = 'Hodnota skóre musí byť medzi 0 a 1. Nemôže byť menšia ako 0 ani väčšia ako 1.';
$_['error_log_filename']               = 'Na uloženie chýb validácie reCAPTCHA je potrebné zadať názov súboru protokolu.';
