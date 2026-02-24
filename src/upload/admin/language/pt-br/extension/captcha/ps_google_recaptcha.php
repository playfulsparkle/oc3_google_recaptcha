<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Contato de Suporte';
$_['heading_v3_score_threshold']                   = 'Limite de Pontuação (Score Threshold)';

// Text
$_['text_extension']                               = 'Extensões';
$_['text_success']                                 = 'Sucesso: Você modificou o Google reCAPTCHA!';
$_['text_edit']                                    = 'Editar Google reCAPTCHA';
$_['text_signup']                                  = 'Para começar, visite a <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">página do Google reCAPTCHA</a> e registre seu site para obter a Chave do Site e a Chave Secreta.';
$_['text_contact']                                 = '<p>Para mais assistência, entre em contato com nossa equipe de suporte:</p><ul><li><strong>Contato:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentação:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentação do Usuário</a></li></ul>';
$_['text_key_type_v3']                             = 'Baseado em pontuação (v3) - Verificar solicitações com uma pontuação';
$_['text_key_type_v2_checkbox']                    = 'Desafio (v2) - Caixa de seleção "Não sou um robô"';
$_['text_key_type_v2_invisible']                   = 'Desafio (v2) - Selo reCAPTCHA invisível';
$_['text_badge_inline']                            = 'Embutido (Inline)';
$_['text_badge_bottom_left']                       = 'Inferior Esquerdo';
$_['text_badge_bottom_right']                      = 'Inferior Direito';
$_['text_badge_dark']                              = 'Escuro';
$_['text_badge_light']                             = 'Claro';
$_['text_badge_compact']                           = 'Compacto';
$_['text_badge_normal']                            = 'Normal';
$_['text_badge_invisible']                         = 'Invisível';
$_['text_csp_info']                                = 'Certifique-se de que sua Content-Security-Policy (CSP) está configurada corretamente para funcionar com o Google reCAPTCHA. Recomendamos o uso da <strong>abordagem baseada em nonce do CSP3</strong> para máxima segurança. Alternativamente, inclua <strong>script-src</strong> para permitir <strong>https://www.google.com/recaptcha/</strong> e <strong>https://www.gstatic.com/recaptcha/</strong>, e <strong>frame-src</strong> para permitir <strong>https://www.google.com/recaptcha/</strong> e <strong>https://recaptcha.google.com/recaptcha/</strong>. O uso de <strong>strict-dynamic</strong> também é suportado em navegadores compatíveis.';
$_['text_captcha_page_admin_login']                = 'Login do Painel';
$_['text_captcha_page_catalog_login']              = 'Login da Loja';
$_['text_captcha_page_register']                   = 'Cadastro';
$_['text_captcha_page_admin_forgotten_password']   = 'Esqueci a Senha (Painel)';
$_['text_captcha_page_catalog_forgotten_password'] = 'Esqueci a Senha (Loja)';
$_['text_captcha_page_guest']                      = 'Finalização como Visitante';
$_['text_captcha_page_review']                     = 'Avaliações';
$_['text_captcha_page_return']                     = 'Devoluções';
$_['text_captcha_page_contact']                    = 'Contato';
$_['text_default']                                 = '(padrão)';
$_['text_log_clear_success']                       = 'O log de erros foi limpo com sucesso.';

// Tab
$_['tab_general']                                  = 'Geral';
$_['tab_security']                                 = 'Segurança';
$_['tab_error_log']                                = 'Log de Erros';
$_['tab_help_and_support']                         = 'Ajuda e Suporte';

// Entry
$_['entry_key_type']                               = 'Tipo de reCAPTCHA';
$_['entry_site_key']                               = 'Chave do site';
$_['entry_secret_key']                             = 'Chave secreta';
$_['entry_status']                                 = 'Situação';
$_['entry_badge_position']                         = 'Posição do Selo';
$_['entry_badge_theme']                            = 'Tema do Selo';
$_['entry_badge_size']                             = 'Tamanho do Selo';
$_['entry_hide_badge']                             = 'Esconder Selo';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = 'Nome do arquivo de log';
$_['entry_send_client_ip']                         = 'Enviar endereço IP do cliente';
$_['entry_enable_error_log']                       = 'Ativar log de erros';

// Button
$_['button_download']                              = 'Baixar';
$_['button_clear']                                 = 'Limpar';

// Help
$_['help_copy']                                    = 'Copiar URL';
$_['help_key_type']                                = 'Escolha o tipo de reCAPTCHA para esta chave do site. Uma chave funciona apenas com um único tipo. Veja <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Tipos de Site</a> para mais detalhes.';
$_['help_hide_badge']                              = 'Ao ativar esta opção, você pode esconder completamente o selo do Google reCAPTCHA. Um aviso será adicionado ao rodapé de cada página para cumprir as diretrizes do Google. Veja a seção <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">Eu gostaria de esconder o selo. O que é permitido?</a> no FAQ.';
$_['help_site_key']                                = 'Use esta chave no código HTML que seu site envia aos usuários.';
$_['help_secret_key']                              = 'Use esta chave secreta para comunicação entre seu site e o reCAPTCHA.';
$_['help_v3_score_threshold']                      = 'Esta configuração define o limite para a pontuação retornada pelo reCAPTCHA v3. A pontuação varia de 0.0 a 1.0. Por padrão, é usado 0.5.';
$_['help_log_filename']                            = 'Digite o nome do arquivo de log para armazenar erros de validação.';

// Error
$_['error_permission']                             = 'Atenção: Você não tem permissão para modificar o Google reCAPTCHA!';
$_['error_error_log_permission']                   = 'Atenção: Você não tem permissão para limpar o log de erros!';
$_['error_error_log_file']                         = 'Atenção: O arquivo %s não foi encontrado!';
$_['error_error_log_empty']                        = 'Atenção: O arquivo de log %s está vazio!';
$_['error_site_key']                               = 'Chave do site obrigatória!';
$_['error_secret_key']                             = 'Chave secreta obrigatória!';
$_['error_v3_score_threshold_value']               = 'O valor da pontuação deve estar entre 0 e 1.';
$_['error_log_filename']                           = 'Um nome de arquivo de log é obrigatório.';
