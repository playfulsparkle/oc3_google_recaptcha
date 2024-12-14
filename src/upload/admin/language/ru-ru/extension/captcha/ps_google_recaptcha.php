<?php
// Heading
$_['heading_title']               = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']     = 'Начало работы';
$_['heading_setup']               = 'Настройка Google reCAPTCHA';
$_['heading_troubleshot']         = 'Типичные проблемы';
$_['heading_faq']                 = 'Часто задаваемые вопросы';
$_['heading_contact']             = 'Связаться с поддержкой';

// Text
$_['text_extension']              = 'Расширения';
$_['text_success']                = 'Успех: Вы успешно изменили настройки Google reCAPTCHA!';
$_['text_edit']                   = 'Редактировать Google reCAPTCHA';
$_['text_signup']                 = 'Перейдите на <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">страницу Google reCAPTCHA</a> и зарегистрируйте ваш сайт.';
$_['text_getting_started']        = '<p><strong>Обзор:</strong> Playful Sparkle - Google reCAPTCHA — это расширение для OpenCart 4, предназначенное для защиты вашего магазина от спама и злоупотреблений. Оно поддерживает несколько реализаций Google reCAPTCHA, включая основанный на баллах (v3), флажок (v2) и невидимый (v2), предоставляя гибкость и повышенную безопасность для вашего магазина.</p><p><strong>Требования:</strong> OpenCart 4.x+, PHP 7.4+ или выше</p>';
$_['text_setup']                  = '<ul><li><strong>Шаг 1:</strong> Получите свой ключ сайта и секретный ключ reCAPTCHA в <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">консоли администратора Google reCAPTCHA</a>.</li><li><strong>Шаг 2:</strong> В панели администратора OpenCart перейдите в настройки расширения и выберите нужную реализацию reCAPTCHA (по баллам v3, флажок v2 или невидимая v2).</li><li><strong>Шаг 3:</strong> Настройте параметры в зависимости от выбранной реализации:<ul><li>Для реализации на основе баллов (v3): Установите позицию значка (внизу слева, внизу справа или встроенный). Для встроенного выберите светлую или темную тему или скрыть значок (с уведомлением в подвале для соблюдения политики Google).</li><li>Для вызова (v2) с флажком: Установите тему значка (светлая или темная) и размер (нормальный или компактный).</li><li>Для невидимой реализации (v2): Установите позицию значка (внизу слева, внизу справа или встроенный). Для встроенного выберите светлую или темную тему.</li></ul></li><li><strong>Шаг 4:</strong> Настройте reCAPTCHA для нужных страниц в настройках OpenCart.</li><li><strong>Шаг 5:</strong> Обновите кеш модификаций, чтобы применить изменения. Для этого:<ul><li>Перейдите в <strong>Расширения</strong> &gt; <strong>Модификации</strong> в панели администратора OpenCart.</li><li>Нажмите синюю кнопку <strong>Обновить</strong> в правом верхнем углу страницы.</li></ul>Этот шаг обеспечит правильное применение обновленных настроек reCAPTCHA к вашему магазину.</li></ul>';
$_['text_troubleshot']            = '<ul><li><strong>Проблема:</strong> reCAPTCHA не отображается. <strong>Решение:</strong> Убедитесь, что правильные ключ сайта и секретный ключ введены, и подтвердите, что ваш домен зарегистрирован в консоли администратора Google reCAPTCHA. Также убедитесь, что вы обновили кеш модификаций после внесения изменений.</li><li><strong>Проблема:</strong> Появляется ошибка при проверке. <strong>Решение:</strong> Проверьте, что пара ключей соответствует реализации reCAPTCHA (например, ключи для флажка v2 не могут быть использованы для v3).</li><li><strong>Проблема:</strong> Настройки значка не отображаются как ожидается. <strong>Решение:</strong> Дважды проверьте настройки конфигурации значка (например, позицию, тему или размер), убедитесь, что кеш очищен, и обновите кеш модификаций.</li></ul>';
$_['text_faq']                    = '<details><summary>Какую реализацию reCAPTCHA выбрать?</summary> Это зависит от ваших потребностей:<ul><li><strong>Основанный на баллах (v3):</strong> Идеален для бесшовного пользовательского опыта без прямого взаимодействия, полезен для фоновой проверки.</li><li><strong>Флажок (v2):</strong> Добавляет четкий флажок "Я не робот" для видимого взаимодействия, идеально подходит для форм с пользовательским интерфейсом.</li><li><strong>Невидимый (v2):</strong> Проверяет запросы в фоновом режиме без взаимодействия с пользователем, идеально подходит для более чистых интерфейсов с необязательным отображением значка.</li></ul></details><details><summary>Почему появляется ошибка "Неверный ключ сайта"?</summary> Это происходит, когда введенные вами ключи не соответствуют выбранной реализации reCAPTCHA. Убедитесь, что используете правильную пару ключей для выбранной реализации (например, ключи v3 для v3, ключи v2 для флажка v2 и т. д.).</details><details><summary>Где можно включить reCAPTCHA?</summary> reCAPTCHA можно настроить для различных страниц на странице настроек OpenCart.</details>';
$_['text_contact']                = '<p>Для получения дополнительной помощи свяжитесь с нашей службой поддержки:</p><ul><li><strong>Контакт:</strong> <a href="mailto:%s">%s</a></li><li><strong>Документация:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Документация пользователя</a></li></ul>';
$_['text_key_type_v3']            = 'На основе баллов (v3) - Проверка запросов по баллам';
$_['text_key_type_v2_checkbox']   = 'Проверка (v2) - Флажок "Я не робот"';
$_['text_key_type_v2_invisible']  = 'Проверка (v2) - Невидимый значок reCAPTCHA';
$_['text_badge_inline']           = 'Встраиваемый';
$_['text_badge_bottom_left']      = 'Внизу слева';
$_['text_badge_bottom_right']     = 'Внизу справа';
$_['text_badge_dark']             = 'Темный';
$_['text_badge_light']            = 'Светлый';
$_['text_badge_compact']          = 'Компактный';
$_['text_badge_normal']           = 'Нормальный';
$_['text_badge_invisible']        = 'Невидимый';
$_['text_csp_info']               = 'Убедитесь, что ваша политика безопасности контента (CSP) правильно настроена для работы с Google reCAPTCHA. Мы рекомендуем использовать <strong>метод nonce из CSP3</strong> для максимальной безопасности. В качестве альтернативы включите <strong>script-src</strong> для разрешения <strong>https://www.google.com/recaptcha/</strong> и <strong>https://www.gstatic.com/recaptcha/</strong>, а также <strong>frame-src</strong> для разрешения <strong>https://www.google.com/recaptcha/</strong> и <strong>https://recaptcha.google.com/recaptcha/</strong>. Использование <strong>strict-dynamic</strong> также поддерживается в совместимых браузерах.';

// Tab
$_['tab_general']                 = 'Основные';
$_['tab_security']                = 'Безопасность';
$_['tab_help_and_support']        = 'Помощь и поддержка';

// Entry
$_['entry_key_type']              = 'Тип reCAPTCHA';
$_['entry_site_key']              = 'Ключ сайта';
$_['entry_secret_key']            = 'Секретный ключ';
$_['entry_status']                = 'Статус';
$_['entry_badge_position']        = 'Позиция значка';
$_['entry_badge_theme']           = 'Тема значка';
$_['entry_badge_size']            = 'Размер значка';
$_['entry_hide_badge']            = 'Скрыть значок';
$_['entry_script_nonce']          = 'Nonce для скрипта';
$_['entry_google_captcha_nonce']  = 'Nonce для скрипта Google Captcha API';
$_['entry_css_nonce']             = 'Nonce для тега стилей CSS';

// Help
$_['help_copy']                   = 'Копировать URL';
$_['help_key_type']               = 'Выберите тип reCAPTCHA для этого ключа сайта. Ключ сайта работает только с одним типом reCAPTCHA. См. <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Типы сайтов</a> для получения дополнительной информации.';
$_['help_hide_badge']             = 'Включив эту опцию, вы можете полностью скрыть значок Google reCAPTCHA. Внизу каждой страницы автоматически будет добавлено уведомление для соблюдения руководящих принципов Google. Для получения дополнительной информации обратитесь к разделу <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Я хочу скрыть значок reCAPTCHA. Что разрешено?</a> на странице часто задаваемых вопросов Google reCAPTCHA.';
$_['help_site_key']               = 'Используйте этот ключ сайта в HTML-коде, который ваш сайт отправляет пользователям.';
$_['help_secret_key']             = 'Используйте этот секретный ключ для связи между вашим сайтом и reCAPTCHA.';

// Error
$_['error_permission']            = 'Предупреждение: У вас нет прав на изменение Google reCAPTCHA!';
$_['error_site_key']              = 'Требуется ключ!';
$_['error_secret_key']            = 'Требуется секрет!';
