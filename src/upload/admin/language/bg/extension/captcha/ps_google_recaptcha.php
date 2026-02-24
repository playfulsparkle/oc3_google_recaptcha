<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Контакт с поддръжката';
$_['heading_v3_score_threshold']                   = 'Праг на резултата (Score Threshold)';

// Text
$_['text_extension']                               = 'Разширения';
$_['text_success']                                 = 'Успех: Променихте Google reCAPTCHA!';
$_['text_edit']                                    = 'Редактиране на Google reCAPTCHA';
$_['text_signup']                                  = 'За да започнете, посетете <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">страницата на Google reCAPTCHA</a> и регистрирайте сайта си, за да получите reCAPTCHA Site Key и Secret Key.';
$_['text_contact']                                 = '<p>За допълнително съдействие, моля, свържете се с нашия екип по поддръжка:</p><ul><li><strong>Контакт:</strong> <a href="mailto:%s">%s</a></li><li><strong>Документация:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Потребителска документация</a></li></ul>';
$_['text_key_type_v3']                             = 'Базиран на резултат (v3) - Проверка на заявки с резултат';
$_['text_key_type_v2_checkbox']                    = 'Предизвикателство (v2) - Чекбокс "Аз не съм робот"';
$_['text_key_type_v2_invisible']                   = 'Предизвикателство (v2) - Невидим reCAPTCHA значка';
$_['text_badge_inline']                            = 'Вграден (Inline)';
$_['text_badge_bottom_left']                       = 'Долу вляво';
$_['text_badge_bottom_right']                      = 'Долу вдясно';
$_['text_badge_dark']                              = 'Тъмна';
$_['text_badge_light']                             = 'Светла';
$_['text_badge_compact']                           = 'Компактен';
$_['text_badge_normal']                            = 'Нормален';
$_['text_badge_invisible']                         = 'Невидим';
$_['text_csp_info']                                = 'Уверете се, че вашата Content-Security-Policy (CSP) е правилно конфигурирана за работа с Google reCAPTCHA. Препоръчваме използването на <strong>подход, базиран на nonce от CSP3</strong> за максимална сигурност. Алтернативно, включете <strong>script-src</strong>, за да разрешите <strong>https://www.google.com/recaptcha/</strong> и <strong>https://www.gstatic.com/recaptcha/</strong>, и <strong>frame-src</strong> за <strong>https://www.google.com/recaptcha/</strong> и <strong>https://recaptcha.google.com/recaptcha/</strong>. Използването на <strong>strict-dynamic</strong> също се поддържа от съвместими браузъри.';
$_['text_captcha_page_admin_login']                = 'Вход в администрацията';
$_['text_captcha_page_catalog_login']              = 'Вход за клиенти';
$_['text_captcha_page_register']                   = 'Регистрация';
$_['text_captcha_page_admin_forgotten_password']   = 'Забравена парола (Администрация)';
$_['text_captcha_page_catalog_forgotten_password'] = 'Забравена парола (Клиенти)';
$_['text_captcha_page_guest']                      = 'Поръчка като гост';
$_['text_captcha_page_review']                     = 'Отзиви';
$_['text_captcha_page_return']                     = 'Рекламации';
$_['text_captcha_page_contact']                    = 'Контакт';
$_['text_default']                                 = '(по подразбиране)';
$_['text_log_clear_success']                       = 'Журналът с грешки е изчистен успешно.';

// Tab
$_['tab_general']                                  = 'Общи';
$_['tab_security']                                 = 'Сигурност';
$_['tab_error_log']                                = 'Журнал с грешки';
$_['tab_help_and_support']                         = 'Помощ и поддръжка';

// Entry
$_['entry_key_type']                               = 'Тип reCAPTCHA';
$_['entry_site_key']                               = 'Site key';
$_['entry_secret_key']                             = 'Secret key';
$_['entry_status']                                 = 'Статус';
$_['entry_badge_position']                         = 'Позиция на значката';
$_['entry_badge_theme']                            = 'Тема на значката';
$_['entry_badge_size']                             = 'Размер на значката';
$_['entry_hide_badge']                             = 'Скриване на значката';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = 'Име на файл за журнала';
$_['entry_send_client_ip']                         = 'Изпращане на IP адрес на клиента';
$_['entry_enable_error_log']                       = 'Активиране на журнал с грешки';

// Button
$_['button_download']                              = 'Изтегляне';
$_['button_clear']                                 = 'Изчистване';

// Help
$_['help_copy']                                    = 'Копиране на URL';
$_['help_key_type']                                = 'Изберете типа reCAPTCHA за този сайт ключ. Един ключ работи само с един тип reCAPTCHA. Вижте <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Типове сайтове</a> за повече подробности.';
$_['help_hide_badge']                              = 'Чрез активиране на тази опция можете напълно да скриете значката на Google reCAPTCHA. Автоматично ще бъде добавено съобщение във футъра на всяка страница, за да се спазят указанията на Google. За повече информация вижте секцията <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Искам да скрия значката на reCAPTCHA. Какво е позволено?</a> в страницата с често задавани въпроси.';
$_['help_site_key']                                = 'Използвайте този site key в HTML кода, който вашият сайт предоставя на потребителите.';
$_['help_secret_key']                              = 'Използвайте този secret key за комуникация между вашия сайт и reCAPTCHA.';
$_['help_v3_score_threshold']                      = 'Тази настройка определя прага за резултата, върнат от reCAPTCHA v3. Резултатът варира от 0.0 до 1.0, където по-висок резултат (близо до 1.0) показва по-голяма вероятност за легитимно потребителско взаимодействие, а по-нисък (близо до 0.0) предполага бот. По подразбиране се използва праг от 0.5.';
$_['help_log_filename']                            = 'Въведете име на лог файл за съхранение на грешки при валидация на reCAPTCHA.';

// Error
$_['error_permission']                             = 'Внимание: Нямате разрешение за промяна на Google reCAPTCHA!';
$_['error_error_log_permission']                   = 'Внимание: Нямате разрешение за изчистване на журнала с грешки!';
$_['error_error_log_file']                         = 'Внимание: Файлът %s не може да бъде намерен!';
$_['error_error_log_empty']                        = 'Внимание: Лог файлът %s е празен!';
$_['error_site_key']                               = 'Изисква се ключ (Key)!';
$_['error_secret_key']                             = 'Изисква се таен ключ (Secret)!';
$_['error_v3_score_threshold_value']               = 'Стойността на резултата трябва да бъде между 0 и 1.';
$_['error_log_filename']                           = 'Изисква се име на лог файл за съхранение на грешките.';
