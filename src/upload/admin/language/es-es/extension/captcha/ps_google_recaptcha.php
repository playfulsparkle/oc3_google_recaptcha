<?php
// Heading
$_['heading_title']                    = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_getting_started']          = 'Introducción';
$_['heading_setup']                    = 'Configuración de Google reCAPTCHA';
$_['heading_troubleshot']              = 'Solución de problemas comunes';
$_['heading_faq']                      = 'Preguntas frecuentes';
$_['heading_contact']                  = 'Contactar soporte';
$_['heading_v3_score_threshold']       = 'Umbral de puntuación';

// Text
$_['text_extension']                   = 'Extensiones';
$_['text_success']                     = 'Éxito: ¡Has modificado Google reCAPTCHA!';
$_['text_edit']                        = 'Editar Google reCAPTCHA';
$_['text_signup']                      = 'Para comenzar, visite la <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">página de Google reCAPTCHA</a> y registre su sitio web para obtener la Clave del Sitio y la Clave Secreta de reCAPTCHA.';
$_['text_getting_started']             = '<p><strong>Descripción general:</strong> Playful Sparkle - Google reCAPTCHA es una extensión avanzada para OpenCart 4, diseñada para proteger tu tienda contra spam y abusos. Soporta múltiples implementaciones de Google reCAPTCHA, incluyendo Score-based (v3), Checkbox (v2) e Invisible (v2), proporcionando flexibilidad y seguridad mejorada para tu tienda.</p><p><strong>Requisitos:</strong> OpenCart 4.x+, PHP 7.4+ o superior</p>';
$_['text_setup']                       = '<ul><li><strong>Paso 1:</strong> Obtenga su Clave del Sitio y Clave Secreta de reCAPTCHA desde la <a href="https://www.google.com/recaptcha/admin/create" target="_blank" rel="noopener noreferrer">consola de administración de Google reCAPTCHA</a>.</li><li><strong>Paso 2:</strong> En el panel de administración de OpenCart, navegue a la configuración de extensiones y elija la implementación de reCAPTCHA que desea utilizar (v3 basada en puntuación, v2 con casilla de verificación, o v2 invisible).</li><li><strong>Paso 3:</strong> Personalice su configuración según la implementación seleccionada:<ul><li>Para puntuación (v3): Configure la posición de la insignia (abajo a la izquierda, abajo a la derecha o en línea). Para la opción en línea, elija entre un tema claro u oscuro, o bien oculte la insignia (con un aviso en el pie de página para cumplir con las políticas de Google).</li><li>Para desafío (v2) con casilla de verificación: Configure el tema de la insignia (claro u oscuro) y el tamaño (normal o compacto).</li><li>Para desafío (v2) invisible: Configure la posición de la insignia (abajo a la izquierda, abajo a la derecha o en línea). Para la opción en línea, elija entre un tema claro u oscuro.</li></ul></li><li><strong>Paso 4:</strong> Configure reCAPTCHA para las páginas deseadas en la configuración de OpenCart.</li><li><strong>Paso 5:</strong> Actualice la caché de modificaciones para aplicar los cambios. Para hacer esto:<ul><li>Vaya a <strong>Extensiones</strong> &gt; <strong>Modificaciones</strong> en su panel de administración de OpenCart.</li><li>Haga clic en el botón azul <strong>Actualizar</strong> en la esquina superior derecha de la página.</li></ul>Este paso asegura que la configuración actualizada de reCAPTCHA se aplique correctamente a su tienda.</li></ul>';
$_['text_troubleshot']                 = '<ul><li><strong>Problema:</strong> reCAPTCHA no se muestra. <strong>Solución:</strong> Asegúrese de haber ingresado la Clave del Sitio y la Clave Secreta correctas, y confirme que su dominio esté registrado en la consola de administración de Google reCAPTCHA. Además, asegúrese de actualizar la caché de modificaciones después de realizar cambios.</li><li><strong>Problema:</strong> Aparece un error durante la validación. <strong>Solución:</strong> Verifique que el par de claves coincida con la implementación de reCAPTCHA (por ejemplo, las claves de la casilla de verificación v2 no pueden usarse para v3).</li><li><strong>Problema:</strong> La personalización de la insignia no aparece como se esperaba. <strong>Solución:</strong> Revise nuevamente la configuración de la insignia (por ejemplo, posición, tema o tamaño), asegúrese de que la caché esté vacía y actualice la caché de modificaciones.</li></ul>';
$_['text_faq']                         = '<details><summary>¿Qué implementación de reCAPTCHA debería elegir?</summary> Depende de tus necesidades:<ul><li><strong>Score-based (v3):</strong> Ideal para una experiencia de usuario fluida sin interacción directa, útil para validaciones en segundo plano.</li><li><strong>Checkbox (v2):</strong> Añade una interacción visible con un cuadro "No soy un robot", excelente para formularios orientados al usuario.</li><li><strong>Invisible (v2):</strong> Valida solicitudes en segundo plano sin requerir interacción del usuario, ideal para interfaces limpias con una visualización opcional del distintivo.</li></ul></details><details><summary>¿Por qué recibo un error de "Clave de sitio inválida"?</summary> Esto ocurre cuando las claves ingresadas no coinciden con la implementación de reCAPTCHA seleccionada. Asegúrate de usar el par de claves correcto para la implementación elegida (por ejemplo, claves de v3 para v3, claves de v2 Checkbox para v2 Checkbox, etc.).</details><details><summary>¿Dónde puedo habilitar reCAPTCHA?</summary> Puedes configurar reCAPTCHA para varias páginas en la configuración de OpenCart.</details>';
$_['text_contact']                     = '<p>Para más asistencia, por favor contacta a nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación del usuario</a></li></ul>';
$_['text_key_type_v3']                 = 'Score-based (v3) - Verificar solicitudes con un puntaje';
$_['text_key_type_v2_checkbox']        = 'Challenge (v2) - Desafío con cuadro "No soy un robot"';
$_['text_key_type_v2_invisible']       = 'Challenge (v2) - Desafío Invisible con distintivo';
$_['text_badge_inline']                = 'En línea';
$_['text_badge_bottom_left']           = 'Inferior izquierda';
$_['text_badge_bottom_right']          = 'Inferior derecha';
$_['text_badge_dark']                  = 'Oscuro';
$_['text_badge_light']                 = 'Claro';
$_['text_badge_compact']               = 'Compacto';
$_['text_badge_normal']                = 'Normal';
$_['text_badge_invisible']             = 'Invisible';
$_['text_csp_info']                    = 'Asegúrate de que tu Política de Seguridad de Contenido (CSP) esté configurada correctamente para trabajar con Google reCAPTCHA. Recomendamos utilizar el <strong>enfoque basado en nonce de CSP3</strong> para máxima seguridad. Alternativamente, incluye <strong>script-src</strong> para permitir <strong>https://www.google.com/recaptcha/</strong> y <strong>https://www.gstatic.com/recaptcha/</strong>, y <strong>frame-src</strong> para permitir <strong>https://www.google.com/recaptcha/</strong> y <strong>https://recaptcha.google.com/recaptcha/</strong>. Usar <strong>strict-dynamic</strong> también es compatible con navegadores compatibles.';
$_['text_v3_score_threshold_register'] = 'Registro';
$_['text_v3_score_threshold_guest']    = 'Compra como invitado';
$_['text_v3_score_threshold_review']   = 'Reseñas';
$_['text_v3_score_threshold_return']   = 'Devoluciones';
$_['text_v3_score_threshold_contact']  = 'Contacto';
$_['text_log_clear_success']     = 'El registro de errores se ha borrado con éxito.';

// Tab
$_['tab_general']                      = 'General';
$_['tab_security']                     = 'Seguridad';
$_['tab_error_log']                    = 'Registro de errores';
$_['tab_help_and_support']             = 'Ayuda y Soporte';

// Entry
$_['entry_key_type']                   = 'Tipo de reCAPTCHA';
$_['entry_site_key']                   = 'Clave del sitio';
$_['entry_secret_key']                 = 'Clave secreta';
$_['entry_status']                     = 'Estado';
$_['entry_badge_position']             = 'Posición de la insignia';
$_['entry_badge_theme']                = 'Tema de la insignia';
$_['entry_badge_size']                 = 'Tamaño de la insignia';
$_['entry_hide_badge']                 = 'Ocultar insignia';
$_['entry_script_nonce']               = 'Nonce del script';
$_['entry_google_captcha_nonce']       = 'Nonce del script de Google Captcha API';
$_['entry_css_nonce']                  = 'Nonce de la etiqueta de estilo CSS';
$_['entry_log_filename']               = 'Nombre del archivo de registro de validación';
$_['entry_send_client_ip']             = 'Enviar la dirección IP del cliente';
$_['entry_enable_error_log']           = 'Habilitar registro de errores';

// Button
$_['button_download']                  = 'Descargar';
$_['button_clear']                     = 'Borrar';

// Help
$_['help_copy']                        = 'Copiar URL';
$_['help_key_type']                    = 'Elija el tipo de reCAPTCHA para esta clave del sitio. Una clave del sitio solo funciona con un único tipo de reCAPTCHA. Consulte <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Tipos de sitios</a> para más detalles.';
$_['help_hide_badge']                  = 'Al habilitar esta opción, puede ocultar completamente la insignia de Google reCAPTCHA. Se añadirá automáticamente un aviso al pie de página de cada página para cumplir con las directrices de Google. Para más información, consulte la sección <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Quisiera ocultar la insignia de reCAPTCHA. ¿Qué está permitido?</a> en la página de preguntas frecuentes de Google reCAPTCHA.';
$_['help_site_key']                    = 'Utilice esta clave del sitio en el código HTML que su sitio sirve a los usuarios.';
$_['help_secret_key']                  = 'Utilice esta clave secreta para la comunicación entre su sitio y reCAPTCHA.';
$_['help_v3_score_threshold']          = 'Esta configuración define el umbral para la puntuación devuelta por reCAPTCHA v3. La puntuación varía de 0,0 a 1,0, donde una puntuación más alta (más cerca de 1,0) indica una mayor probabilidad de una interacción legítima del usuario, y una puntuación más baja (más cerca de 0,0) sugiere una mayor probabilidad de un bot. Puede ajustar este umbral para determinar las acciones que debe realizar según la puntuación. Por defecto, se utiliza un umbral de 0,5, pero puede modificarlo según los requisitos específicos de su sitio.';
$_['help_log_filename']                = 'Introduzca el nombre del archivo de registro para almacenar los errores de validación de reCAPTCHA.';

// Error
$_['error_permission']                 = 'Advertencia: ¡No tiene permiso para modificar Google reCAPTCHA!';
$_['error_error_log_permission']       = 'Advertencia: ¡No tiene permiso para borrar el registro de errores!';
$_['error_error_log_file']             = 'Advertencia: ¡No se pudo encontrar el archivo %s!';
$_['error_error_log_empty']            = 'Advertencia: ¡El archivo de registro %s está vacío!';
$_['error_site_key']                   = '¡Clave del sitio requerida!';
$_['error_secret_key']                 = '¡Clave secreta requerida!';
$_['error_v3_score_threshold_value']   = 'El valor del puntaje debe estar entre 0 y 1. No puede ser menor que 0 ni mayor que 1.';
$_['error_log_filename']               = 'Se requiere un nombre de archivo de registro para almacenar los errores de validación de reCAPTCHA.';
