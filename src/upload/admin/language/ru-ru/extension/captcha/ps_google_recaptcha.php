<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Связаться с поддержкой';
$_['heading_v3_score_threshold']                   = 'Порог оценки';

// Text
$_['text_extension']                               = 'Расширения';
$_['text_success']                                 = 'Успех: Вы успешно изменили настройки Google reCAPTCHA!';
$_['text_edit']                                    = 'Редактировать Google reCAPTCHA';
$_['text_signup']                                  = 'Для начала посетите <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">страницу Google reCAPTCHA</a> и зарегистрируйте ваш сайт, чтобы получить reCAPTCHA Site Key и Secret Key.';
$_['text_contact']                                 = '<p>Для получения дополнительной помощи, пожалуйста, свяжитесь с нашей службой поддержки:</p><ul><li><strong>Контакт:</strong> <a href="mailto:%s">%s</a></li><li><strong>Документация:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Руководство пользователя</a></li></ul>';
$_['text_key_type_v3']                             = 'На основе баллов (v3) - Проверка запросов по баллам';
$_['text_key_type_v2_checkbox']                    = 'Проверка (v2) - Флажок "Я не робот"';
$_['text_key_type_v2_invisible']                   = 'Проверка (v2) - Невидимый значок reCAPTCHA';
$_['text_badge_inline']                            = 'Встраиваемый';
$_['text_badge_bottom_left']                       = 'Внизу слева';
$_['text_badge_bottom_right']                      = 'Внизу справа';
$_['text_badge_dark']                              = 'Темный';
$_['text_badge_light']                             = 'Светлый';
$_['text_badge_compact']                           = 'Компактный';
$_['text_badge_normal']                            = 'Нормальный';
$_['text_badge_invisible']                         = 'Невидимый';
$_['text_csp_info']                                = 'Убедитесь, что ваша политика безопасности контента (CSP) правильно настроена для работы с Google reCAPTCHA. Мы рекомендуем использовать <strong>метод nonce из CSP3</strong> для максимальной безопасности. В качестве альтернативы включите <strong>script-src</strong> для разрешения <strong>https://www.google.com/recaptcha/</strong> и <strong>https://www.gstatic.com/recaptcha/</strong>, а также <strong>frame-src</strong> для разрешения <strong>https://www.google.com/recaptcha/</strong> и <strong>https://recaptcha.google.com/recaptcha/</strong>. Использование <strong>strict-dynamic</strong> также поддерживается в совместимых браузерах.';
$_["text_captcha_page_admin_login"]                = "Вход в админ-панель";
$_["text_captcha_page_catalog_login"]              = "Вход покупателя";
$_["text_captcha_page_register"]                   = "Регистрация";
$_["text_captcha_page_admin_forgotten_password"]   = "Забыли пароль (Админ)";
$_["text_captcha_page_catalog_forgotten_password"] = "Забыли пароль (Покупатель)";
$_["text_captcha_page_guest"]                      = "Оформление гостем";
$_["text_captcha_page_review"]                     = "Отзывы";
$_["text_captcha_page_return"]                     = "Возвраты";
$_["text_captcha_page_contact"]                    = "Связаться с нами";
$_['text_default']                                 = '(по умолчанию)';
$_['text_log_clear_success']                       = 'Журнал ошибок успешно очищен.';

// Tab
$_['tab_general']                                  = 'Основные';
$_['tab_security']                                 = 'Безопасность';
$_['tab_error_log']                                = 'Журнал ошибок';
$_['tab_help_and_support']                         = 'Помощь и поддержка';

// Entry
$_['entry_key_type']                               = 'Тип reCAPTCHA';
$_['entry_site_key']                               = 'Ключ сайта';
$_['entry_secret_key']                             = 'Секретный ключ';
$_['entry_status']                                 = 'Статус';
$_['entry_badge_position']                         = 'Позиция значка';
$_['entry_badge_theme']                            = 'Тема значка';
$_['entry_badge_size']                             = 'Размер значка';
$_['entry_hide_badge']                             = 'Скрыть значок';
$_['entry_script_nonce']                           = 'Nonce для скрипта';
$_['entry_google_captcha_nonce']                   = 'Nonce для скрипта Google Captcha API';
$_['entry_css_nonce']                              = 'Nonce для тега стилей CSS';
$_['entry_log_filename']                           = 'Имя файла журнала валидации';
$_['entry_send_client_ip']                         = 'Отправить IP-адрес клиента';
$_['entry_enable_error_log']                       = 'Включить журнал ошибок';

// Button
$_['button_download']                              = 'Скачать';
$_['button_clear']                                 = 'Очистить';

// Help
$_['help_copy']                                    = 'Копировать URL';
$_['help_key_type']                                = 'Выберите тип reCAPTCHA для этого ключа сайта. Ключ сайта работает только с одним типом reCAPTCHA. См. <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Типы сайтов</a> для получения дополнительной информации.';
$_['help_hide_badge']                              = 'Включив эту опцию, вы можете полностью скрыть значок Google reCAPTCHA. Внизу каждой страницы автоматически будет добавлено уведомление для соблюдения руководящих принципов Google. Для получения дополнительной информации обратитесь к разделу <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Я хочу скрыть значок reCAPTCHA. Что разрешено?</a> на странице часто задаваемых вопросов Google reCAPTCHA.';
$_['help_site_key']                                = 'Используйте этот ключ сайта в HTML-коде, который ваш сайт отправляет пользователям.';
$_['help_secret_key']                              = 'Используйте этот секретный ключ для связи между вашим сайтом и reCAPTCHA.';
$_['help_v3_score_threshold']                      = 'Эта настройка определяет порог для оценки, возвращаемой reCAPTCHA v3. Оценка варьируется от 0,0 до 1,0, где более высокая оценка (ближе к 1,0) указывает на большую вероятность легитимного взаимодействия пользователя, а более низкая оценка (ближе к 0,0) предполагает большую вероятность бота. Вы можете настроить этот порог, чтобы определить действия в зависимости от оценки. По умолчанию используется порог 0,5, но вы можете изменить его в зависимости от специфических требований вашего сайта.';
$_['help_log_filename']                            = 'Введите имя файла журнала для хранения ошибок валидации reCAPTCHA.';

// Error
$_['error_permission']                             = 'Предупреждение: У вас нет прав на изменение Google reCAPTCHA!';
$_['error_error_log_permission']                   = 'Предупреждение: У вас нет прав для очистки журнала ошибок!';
$_['error_error_log_file']                         = 'Предупреждение: Файл %s не найден!';
$_['error_error_log_empty']                        = 'Предупреждение: Журнал %s пуст!';
$_['error_site_key']                               = 'Требуется ключ!';
$_['error_secret_key']                             = 'Требуется секрет!';
$_['error_v3_score_threshold_value']               = 'Значение балла должно быть между 0 и 1. Оно не может быть меньше 0 или больше 1.';
$_['error_log_filename']                           = 'Для хранения ошибок валидации reCAPTCHA требуется имя файла журнала.';
