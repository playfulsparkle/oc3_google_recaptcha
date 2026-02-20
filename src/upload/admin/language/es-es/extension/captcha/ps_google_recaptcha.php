<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Contactar soporte';
$_['heading_v3_score_threshold']                   = 'Umbral de puntuación';

// Text
$_['text_extension']                               = 'Extensiones';
$_['text_success']                                 = 'Éxito: ¡Has modificado Google reCAPTCHA!';
$_['text_edit']                                    = 'Editar Google reCAPTCHA';
$_['text_signup']                                  = 'Para comenzar, visite la <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">página de Google reCAPTCHA</a> y registre su sitio web para obtener la Clave del Sitio y la Clave Secreta de reCAPTCHA.';
$_['text_contact']                                 = '<p>Para obtener más ayuda, por favor contacta a nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación para el Usuario</a></li></ul>';
$_['text_key_type_v3']                             = 'Score-based (v3) - Verificar solicitudes con un puntaje';
$_['text_key_type_v2_checkbox']                    = 'Challenge (v2) - Desafío con cuadro "No soy un robot"';
$_['text_key_type_v2_invisible']                   = 'Challenge (v2) - Desafío Invisible con distintivo';
$_['text_badge_inline']                            = 'En línea';
$_['text_badge_bottom_left']                       = 'Inferior izquierda';
$_['text_badge_bottom_right']                      = 'Inferior derecha';
$_['text_badge_dark']                              = 'Oscuro';
$_['text_badge_light']                             = 'Claro';
$_['text_badge_compact']                           = 'Compacto';
$_['text_badge_normal']                            = 'Normal';
$_['text_badge_invisible']                         = 'Invisible';
$_['text_csp_info']                                = 'Asegúrate de que tu Política de Seguridad de Contenido (CSP) esté configurada correctamente para trabajar con Google reCAPTCHA. Recomendamos utilizar el <strong>enfoque basado en nonce de CSP3</strong> para máxima seguridad. Alternativamente, incluye <strong>script-src</strong> para permitir <strong>https://www.google.com/recaptcha/</strong> y <strong>https://www.gstatic.com/recaptcha/</strong>, y <strong>frame-src</strong> para permitir <strong>https://www.google.com/recaptcha/</strong> y <strong>https://recaptcha.google.com/recaptcha/</strong>. Usar <strong>strict-dynamic</strong> también es compatible con navegadores compatibles.';
$_["text_captcha_page_admin_login"]                = "Inicio de sesión Administración";
$_["text_captcha_page_catalog_login"]              = "Inicio de sesión Cliente";
$_["text_captcha_page_register"]                   = "Registro";
$_["text_captcha_page_admin_forgotten_password"]   = "Contraseña olvidada Administración";
$_["text_captcha_page_catalog_forgotten_password"] = "Contraseña olvidada Cliente";
$_["text_captcha_page_guest"]                      = "Pedido como invitado";
$_["text_captcha_page_review"]                     = "Reseñas";
$_["text_captcha_page_return"]                     = "Devoluciones";
$_["text_captcha_page_contact"]                    = "Contacto";
$_['text_default']                                 = '(predeterminado)';
$_['text_log_clear_success']                       = 'El registro de errores se ha borrado con éxito.';

// Tab
$_['tab_general']                                  = 'General';
$_['tab_security']                                 = 'Seguridad';
$_['tab_error_log']                                = 'Registro de errores';
$_['tab_help_and_support']                         = 'Ayuda y Soporte';

// Entry
$_['entry_key_type']                               = 'Tipo de reCAPTCHA';
$_['entry_site_key']                               = 'Clave del sitio';
$_['entry_secret_key']                             = 'Clave secreta';
$_['entry_status']                                 = 'Estado';
$_['entry_badge_position']                         = 'Posición de la insignia';
$_['entry_badge_theme']                            = 'Tema de la insignia';
$_['entry_badge_size']                             = 'Tamaño de la insignia';
$_['entry_hide_badge']                             = 'Ocultar insignia';
$_['entry_script_nonce']                           = 'Nonce del script';
$_['entry_google_captcha_nonce']                   = 'Nonce del script de Google Captcha API';
$_['entry_css_nonce']                              = 'Nonce de la etiqueta de estilo CSS';
$_['entry_log_filename']                           = 'Nombre del archivo de registro de validación';
$_['entry_send_client_ip']                         = 'Enviar la dirección IP del cliente';
$_['entry_enable_error_log']                       = 'Habilitar registro de errores';

// Button
$_['button_download']                              = 'Descargar';
$_['button_clear']                                 = 'Borrar';

// Help
$_['help_copy']                                    = 'Copiar URL';
$_['help_key_type']                                = 'Elija el tipo de reCAPTCHA para esta clave del sitio. Una clave del sitio solo funciona con un único tipo de reCAPTCHA. Consulte <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Tipos de sitios</a> para más detalles.';
$_['help_hide_badge']                              = 'Al habilitar esta opción, puede ocultar completamente la insignia de Google reCAPTCHA. Se añadirá automáticamente un aviso al pie de página de cada página para cumplir con las directrices de Google. Para más información, consulte la sección <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Quisiera ocultar la insignia de reCAPTCHA. ¿Qué está permitido?</a> en la página de preguntas frecuentes de Google reCAPTCHA.';
$_['help_site_key']                                = 'Utilice esta clave del sitio en el código HTML que su sitio sirve a los usuarios.';
$_['help_secret_key']                              = 'Utilice esta clave secreta para la comunicación entre su sitio y reCAPTCHA.';
$_['help_v3_score_threshold']                      = 'Esta configuración define el umbral para la puntuación devuelta por reCAPTCHA v3. La puntuación varía de 0,0 a 1,0, donde una puntuación más alta (más cerca de 1,0) indica una mayor probabilidad de una interacción legítima del usuario, y una puntuación más baja (más cerca de 0,0) sugiere una mayor probabilidad de un bot. Puede ajustar este umbral para determinar las acciones que debe realizar según la puntuación. Por defecto, se utiliza un umbral de 0,5, pero puede modificarlo según los requisitos específicos de su sitio.';
$_['help_log_filename']                            = 'Introduzca el nombre del archivo de registro para almacenar los errores de validación de reCAPTCHA.';

// Error
$_['error_permission']                             = 'Advertencia: ¡No tiene permiso para modificar Google reCAPTCHA!';
$_['error_error_log_permission']                   = 'Advertencia: ¡No tiene permiso para borrar el registro de errores!';
$_['error_error_log_file']                         = 'Advertencia: ¡No se pudo encontrar el archivo %s!';
$_['error_error_log_empty']                        = 'Advertencia: ¡El archivo de registro %s está vacío!';
$_['error_site_key']                               = '¡Clave del sitio requerida!';
$_['error_secret_key']                             = '¡Clave secreta requerida!';
$_['error_v3_score_threshold_value']               = 'El valor del puntaje debe estar entre 0 y 1. No puede ser menor que 0 ni mayor que 1.';
$_['error_log_filename']                           = 'Se requiere un nombre de archivo de registro para almacenar los errores de validación de reCAPTCHA.';
