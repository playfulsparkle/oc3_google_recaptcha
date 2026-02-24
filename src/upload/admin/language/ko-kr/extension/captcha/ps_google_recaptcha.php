<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = '지원팀에 문의';
$_['heading_v3_score_threshold']                   = '점수 임계값';

// Text
$_['text_extension']                               = '확장 모듈';
$_['text_success']                                 = '성공: Google reCAPTCHA 설정을 수정했습니다!';
$_['text_edit']                                    = 'Google reCAPTCHA 수정';
$_['text_signup']                                  = '시작하려면 <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA 페이지</a>를 방문하여 웹사이트를 등록하고 reCAPTCHA 사이트 키와 비밀 키를 발급받으세요.';
$_['text_contact']                                 = '<p>추가 도움이 필요하시면 지원팀에 문의해 주세요:</p><ul><li><strong>문의처:</strong> <a href="mailto:%s">%s</a></li><li><strong>문서:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">사용자 설명서</a></li></ul>';
$_['text_key_type_v3']                             = '점수 기반 (v3) - 점수로 요청 확인';
$_['text_key_type_v2_checkbox']                    = '챌린지 (v2) - "로봇이 아닙니다" 체크박스';
$_['text_key_type_v2_invisible']                   = '챌린지 (v2) - 보이지 않는 reCAPTCHA 배지';
$_['text_badge_inline']                            = '인라인';
$_['text_badge_bottom_left']                       = '왼쪽 하단';
$_['text_badge_bottom_right']                      = '오른쪽 하단';
$_['text_badge_dark']                              = '어두움';
$_['text_badge_light']                             = '밝음';
$_['text_badge_compact']                           = '좁게';
$_['text_badge_normal']                            = '보통';
$_['text_badge_invisible']                         = '보이지 않음';
$_['text_csp_info']                                = 'Google reCAPTCHA가 올바르게 작동하도록 Content-Security-Policy (CSP)가 구성되어 있는지 확인하세요. 최대 보안을 위해 <strong>CSP3의 nonce 기반 접근 방식</strong>을 권장합니다. 또는 <strong>script-src</strong>에 <strong>https://www.google.com/recaptcha/</strong> 및 <strong>https://www.gstatic.com/recaptcha/</strong>를 허용하고, <strong>frame-src</strong>에 <strong>https://www.google.com/recaptcha/</strong> 및 <strong>https://recaptcha.google.com/recaptcha/</strong>를 허용하세요. 호환되는 브라우저에서는 <strong>strict-dynamic</strong>도 지원됩니다.';
$_['text_captcha_page_admin_login']                = '관리자 로그인';
$_['text_captcha_page_catalog_login']              = '사용자 로그인';
$_['text_captcha_page_register']                   = '회원가입';
$_['text_captcha_page_admin_forgotten_password']   = '관리자 비밀번호 찾기';
$_['text_captcha_page_catalog_forgotten_password'] = '사용자 비밀번호 찾기';
$_['text_captcha_page_guest']                      = '게스트 결제';
$_['text_captcha_page_review']                     = '상품평';
$_['text_captcha_page_return']                     = '반품';
$_['text_captcha_page_contact']                    = '문의하기';
$_['text_default']                                 = '(기본값)';
$_['text_log_clear_success']                       = '오류 로그가 성공적으로 삭제되었습니다.';

// Tab
$_['tab_general']                                  = '일반';
$_['tab_security']                                 = '보안';
$_['tab_error_log']                                = '오류 로그';
$_['tab_help_and_support']                         = '도움말 및 지원';

// Entry
$_['entry_key_type']                               = 'reCAPTCHA 유형';
$_['entry_site_key']                               = '사이트 키';
$_['entry_secret_key']                             = '비밀 키';
$_['entry_status']                                 = '상태';
$_['entry_badge_position']                         = '배지 위치';
$_['entry_badge_theme']                            = '배지 테마';
$_['entry_badge_size']                             = '배지 크기';
$_['entry_hide_badge']                             = '배지 숨기기';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = '로그 파일 이름';
$_['entry_send_client_ip']                         = '클라이언트 IP 주소 전송';
$_['entry_enable_error_log']                       = '오류 로그 활성화';

// Button
$_['button_download']                              = '다운로드';
$_['button_clear']                                 = '삭제';

// Help
$_['help_copy']                                    = 'URL 복사';
$_['help_key_type']                                = '이 사이트 키에 대한 reCAPTCHA 유형을 선택하세요. 사이트 키는 하나의 reCAPTCHA 유형에서만 작동합니다. 자세한 내용은 <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">사이트 유형</a>을 참조하세요.';
$_['help_hide_badge']                              = '이 옵션을 활성화하면 Google reCAPTCHA 배지를 완전히 숨길 수 있습니다. Google 가이드라인을 준수하기 위해 모든 페이지 하단에 고지 사항이 자동으로 추가됩니다. 자세한 내용은 Google reCAPTCHA FAQ의 <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">배지를 숨기고 싶습니다. 무엇이 허용되나요?</a> 섹션을 참조하세요.';
$_['help_site_key']                                = '사이트에서 사용자에게 제공하는 HTML 코드에 이 사이트 키를 사용하세요.';
$_['help_secret_key']                              = '사이트와 reCAPTCHA 간의 통신에 이 비밀 키를 사용하세요.';
$_['help_v3_score_threshold']                      = '이 설정은 reCAPTCHA v3에서 반환하는 점수의 임계값을 정의합니다. 점수는 0.0에서 1.0 사이이며, 1.0에 가까울수록 실제 사용자의 활동일 가능성이 높고, 0.0에 가까울수록 봇일 가능성이 높습니다. 기본값은 0.5입니다.';
$_['help_log_filename']                            = 'reCAPTCHA 유효성 검사 오류를 저장할 로그 파일 이름을 입력하세요.';

// Error
$_['error_permission']                             = '경고: Google reCAPTCHA를 수정할 권한이 없습니다!';
$_['error_error_log_permission']                   = '경고: 오류 로그를 삭제할 권한이 없습니다!';
$_['error_error_log_file']                         = '경고: %s 파일을 찾을 수 없습니다!';
$_['error_error_log_empty']                        = '경고: %s 로그 파일이 비어 있습니다!';
$_['error_site_key']                               = '사이트 키가 필요합니다!';
$_['error_secret_key']                             = '비밀 키가 필요합니다!';
$_['error_v3_score_threshold_value']               = '점수 값은 0에서 1 사이여야 합니다.';
$_['error_log_filename']                           = '유효성 검사 오류를 저장하기 위한 로그 파일 이름이 필요합니다.';
