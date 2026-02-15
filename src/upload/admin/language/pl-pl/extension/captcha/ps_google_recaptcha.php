<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']          = 'Pierwsze kroki';
$_['heading_setup']                    = 'Konfiguracja Google reCAPTCHA';
$_['heading_troubleshot']              = 'Typowe problemy i ich rozwiązywanie';
$_['heading_faq']                      = 'FAQ';
$_['heading_contact']                  = 'Kontakt z obsługą';
$_['heading_v3_score_threshold']       = 'Próg punktowy';

// Text
$_['text_extension']                   = 'Rozszerzenia';
$_['text_success']                     = 'Sukces: Zmodyfikowano Google reCAPTCHA!';
$_['text_edit']                        = 'Edytuj Google reCAPTCHA';
$_['text_signup']                      = 'Aby rozpocząć, odwiedź <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">stronę Google reCAPTCHA</a> i zarejestruj swoją witrynę, aby uzyskać Klucz witryny reCAPTCHA i Klucz tajny.';
$_['text_getting_started']             = '<p><strong>Przegląd:</strong> Playful Sparkle - Google reCAPTCHA to zaawansowane rozszerzenie dla OpenCart 4, zaprojektowane w celu ochrony Twojego sklepu przed spamem i nadużyciami. Obsługuje wiele implementacji Google reCAPTCHA, w tym opartą na punktach (v3), pole wyboru (v2) i niewidoczną (v2), zapewniając elastyczność i zwiększone bezpieczeństwo Twojego sklepu.</p><p><strong>Wymagania:</strong> OpenCart 3.x+, PHP 7.3 lub nowszy</p>';
$_['text_setup']                       = '<ul><li><strong>Krok 1:</strong> Uzyskaj Klucz witryny reCAPTCHA i Klucz tajny z <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">konsoli administracyjnej Google reCAPTCHA</a>.</li><li><strong>Krok 2:</strong> W panelu administracyjnym OpenCart przejdź do ustawień rozszerzenia i wybierz implementację reCAPTCHA, której chcesz użyć (oparta na punktach v3, pole wyboru v2 lub niewidoczna v2).</li><li><strong>Krok 3:</strong> Dostosuj ustawienia w zależności od wybranej implementacji:<ul><li>Dla opcji opartej na punktach (v3): Ustaw pozycję plakietki (na dole po lewej, na dole po prawej lub w tekście). Dla opcji w tekście wybierz jasny lub ciemny motyw lub ukryj plakietkę (z informacją w stopce zgodnie z polityką Google).</li><li>Dla wyzwania (v2) z polem wyboru: Ustaw motyw plakietki (jasny lub ciemny) i rozmiar (normalny lub kompaktowy).</li><li>Dla wyzwania (v2) niewidocznego: Ustaw pozycję plakietki (na dole po lewej, na dole po prawej lub w tekście). Dla opcji w tekście wybierz jasny lub ciemny motyw.</li></ul></li><li><strong>Krok 4:</strong> Skonfiguruj reCAPTCHA dla żądanych stron w ustawieniach OpenCart.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Problem:</strong> reCAPTCHA nie wyświetla się. <strong>Rozwiązanie:</strong> Upewnij się, że wprowadzono poprawne Klucz witryny i Klucz tajny, i potwierdź, że Twoja domena jest zarejestrowana w konsoli administracyjnej Google reCAPTCHA.</li><li><strong>Problem:</strong> Podczas weryfikacji pojawia się błąd. <strong>Rozwiązanie:</strong> Sprawdź, czy para kluczy pasuje do implementacji reCAPTCHA (np. klucze v2 Checkbox nie mogą być używane dla v3).</li><li><strong>Problem:</strong> Dostosowanie plakietki nie wygląda zgodnie z oczekiwaniami. <strong>Rozwiązanie:</strong> Dokładnie sprawdź ustawienia konfiguracji plakietki (np. pozycja, motyw lub rozmiar).</li></ul>';
$_['text_faq']                         = '<details><summary>Którą implementację reCAPTCHA powinienem wybrać?</summary> To zależy od Twoich potrzeb:<ul><li><strong>Oparta na punktach (v3):</strong> Najlepsza dla płynnego doświadczenia użytkownika bez bezpośredniej interakcji, przydatna do weryfikacji w tle.</li><li><strong>Pole wyboru (v2):</strong> Dodaje wyraźne pole wyboru "Nie jestem robotem" do widocznej interakcji, świetne dla formularzy widocznych dla użytkownika.</li><li><strong>Niewidoczna (v2):</strong> Weryfikuje żądania w tle bez wymagania interakcji użytkownika, idealna dla czystszych interfejsów z opcjonalnym wyświetlaniem plakietki.</li></ul></details><details><summary>Dlaczego otrzymuję błąd "Nieprawidłowy klucz witryny"?</summary> Dzieje się tak, gdy wprowadzone klucze nie pasują do wybranej implementacji reCAPTCHA. Upewnij się, że używasz poprawnej pary kluczy dla wybranej implementacji (np. klucze v3 dla v3, klucze v2 Checkbox dla v2 Checkbox itp.).</details><details><summary>Gdzie mogę włączyć reCAPTCHA?</summary> reCAPTCHA można skonfigurować dla różnych stron w ustawieniach OpenCart.</details>';
$_['text_contact']                     = '<p>Aby uzyskać dalszą pomoc, skontaktuj się z naszym zespołem wsparcia:</p><ul><li><strong>Kontakt:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokumentacja:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Dokumentacja użytkownika</a></li></ul>';
$_['text_key_type_v3']                 = 'Oparta na punktach (v3) - Weryfikuj żądania za pomocą punktacji';
$_['text_key_type_v2_checkbox']        = 'Wyzwanie (v2) - Wyzwanie z polem wyboru "Nie jestem robotem"';
$_['text_key_type_v2_invisible']       = 'Wyzwanie (v2) - Wyzwanie z niewidoczną plakietką reCAPTCHA';
$_['text_badge_inline']                = 'W tekście';
$_['text_badge_bottom_left']           = 'Na dole po lewej';
$_['text_badge_bottom_right']          = 'Na dole po prawej';
$_['text_badge_dark']                  = 'Ciemny';
$_['text_badge_light']                 = 'Jasny';
$_['text_badge_compact']               = 'Kompaktowy';
$_['text_badge_normal']                = 'Normalny';
$_['text_badge_invisible']             = 'Niewidoczny';
$_['text_csp_info']                    = 'Upewnij się, że Twoja polityka bezpieczeństwa treści (CSP) jest poprawnie skonfigurowana do pracy z Google reCAPTCHA. Zalecamy użycie <strong>podejścia opartego na nonce z CSP3</strong> dla maksymalnego bezpieczeństwa. Alternatywnie, dodaj <strong>script-src</strong>, aby zezwolić na <strong>https://www.google.com/recaptcha/</strong> i <strong>https://www.gstatic.com/recaptcha/</strong>, oraz <strong>frame-src</strong>, aby zezwolić na <strong>https://www.google.com/recaptcha/</strong> i <strong>https://recaptcha.google.com/recaptcha/</strong>. Używanie <strong>strict-dynamic</strong> jest również obsługiwane w kompatybilnych przeglądarkach.';
$_['text_admin_login']                 = 'Logowanie do panelu administracyjnego';
$_['text_catalog_login']               = 'Logowanie do sklepu';
$_['text_register']                    = 'Zarejestruj się';
$_['text_forgotten_password']          = 'Zapomniałem hasła';
$_['text_guest']                       = 'Zakupy gościnne';
$_['text_review']                      = 'Opinie';
$_['text_comment']                     = 'Komentarz';
$_['text_return']                      = 'Zwroty';
$_['text_contact']                     = 'Kontakt';
$_['text_default']                     = '(domyślny)';
$_['text_log_clear_success']           = 'Dziennik błędów został pomyślnie wyczyszczony.';

// Tab
$_['tab_general']                      = 'Ogólne';
$_['tab_security']                     = 'Bezpieczeństwo';
$_['tab_help_and_support']             = 'Pomoc i wsparcie';

// Entry
$_['entry_key_type']                   = 'Typ reCAPTCHA';
$_['entry_site_key']                   = 'Klucz witryny';
$_['entry_secret_key']                 = 'Klucz tajny';
$_['entry_status']                     = 'Status';
$_['entry_badge_position']             = 'Pozycja plakietki';
$_['entry_badge_theme']                = 'Motyw plakietki';
$_['entry_badge_size']                 = 'Rozmiar plakietki';
$_['entry_hide_badge']                 = 'Ukryj plakietkę';
$_['entry_script_nonce']               = 'Nonce skryptu';
$_['entry_google_captcha_nonce']       = 'Nonce skryptu API Google Captcha';
$_['entry_css_nonce']                  = 'Nonce tagu stylu CSS';
$_['entry_log_filename']               = 'Nazwa pliku dziennika weryfikacji';
$_['entry_send_client_ip']             = 'Wyślij adres IP klienta';
$_['entry_enable_error_log']           = 'Włącz dziennik błędów';

// Button
$_['button_download']                  = 'Pobierz';
$_['button_clear']                     = 'Wyczyść';
$_['tab_error_log']                    = 'Dziennik błędów';

// Help
$_['help_copy']                        = 'Kopiuj URL';
$_['help_key_type']                    = 'Wybierz typ reCAPTCHA dla tego klucza witryny. Klucz witryny działa tylko z jednym typem witryny reCAPTCHA. Zobacz <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Typy witryn</a>, aby uzyskać więcej szczegółów.';
$_['help_hide_badge']                  = 'Włączenie tej opcji pozwala całkowicie ukryć plakietkę Google reCAPTCHA. Powiadomienie zostanie automatycznie dodane do stopki każdej strony, aby zachować zgodność z wytycznymi Google. Więcej informacji można znaleźć w sekcji <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Chciałbym ukryć plakietkę reCAPTCHA. Co jest dozwolone?</a> na stronie FAQ Google reCAPTCHA.';
$_['help_site_key']                    = 'Użyj tego klucza witryny w kodzie HTML, który Twoja witryna udostępnia użytkownikom.';
$_['help_secret_key']                  = 'Użyj tego klucza tajnego do komunikacji między Twoją witryną a reCAPTCHA.';
$_['help_v3_score_threshold']          = 'To ustawienie definiuje próg dla wyniku zwracanego przez reCAPTCHA v3. Wynik mieści się w zakresie od 0.0 do 1.0, gdzie wyższy wynik (bliższy 1.0) wskazuje na większe prawdopodobieństwo interakcji ze strony prawdziwego użytkownika, a niższy wynik (bliższy 0.0) sugeruje większe prawdopodobieństwo bota. Możesz dostosować ten próg, aby określić działania podejmowane na podstawie wyniku. Domyślnie używany jest próg 0.5, ale możesz go zmodyfikować zgodnie ze specyficznymi wymaganiami Twojej witryny.';
$_['help_log_filename']                = 'Wprowadź nazwę pliku dziennika, aby przechowywać błędy weryfikacji reCAPTCHA.';

// Error
$_['error_permission']                 = 'Ostrzeżenie: Nie masz uprawnień do modyfikowania Google reCAPTCHA!';
$_['error_error_log_permission']       = 'Ostrzeżenie: Nie masz uprawnień do czyszczenia dziennika błędów!';
$_['error_error_log_file']             = 'Ostrzeżenie: Nie można znaleźć pliku %s!';
$_['error_error_log_empty']            = 'Ostrzeżenie: Plik dziennika %s jest pusty!';
$_['error_site_key']                   = 'Klucz wymagany!';
$_['error_secret_key']                 = 'Sekret wymagany!';
$_['error_v3_score_threshold_value']   = 'Wartość punktowa musi mieścić się w zakresie od 0 do 1. Nie może być niższa niż 0 ani wyższa niż 1.';
$_['error_log_filename']               = 'Nazwa pliku dziennika jest wymagana do przechowywania błędów weryfikacji reCAPTCHA.';
