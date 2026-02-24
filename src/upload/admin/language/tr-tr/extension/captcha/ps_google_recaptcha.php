<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'Destekle İletişime Geçin';
$_['heading_v3_score_threshold']                   = 'Puan Eşiği';

// Text
$_['text_extension']                               = 'Eklentiler';
$_['text_success']                                 = 'Başarılı: Google reCAPTCHA güncellendi!';
$_['text_edit']                                    = 'Google reCAPTCHA Düzenle';
$_['text_signup']                                  = 'Başlamak için <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA sayfasını</a> ziyaret edin ve reCAPTCHA Site Anahtarı ile Gizli Anahtarı almak için web sitenizi kaydedin.';
$_['text_contact']                                 = '<p>Daha fazla yardım için lütfen destek ekibimize ulaşın:</p><ul><li><strong>İletişim:</strong> <a href="mailto:%s">%s</a></li><li><strong>Dokümantasyon:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Kullanıcı Dokümantasyonu</a></li></ul>';
$_['text_key_type_v3']                             = 'Puan tabanlı (v3) - İstekleri bir puanla doğrulayın';
$_['text_key_type_v2_checkbox']                    = 'Sınama (v2) - "Ben robot değilim" onay kutusu';
$_['text_key_type_v2_invisible']                   = 'Sınama (v2) - Görünmez reCAPTCHA rozeti';
$_['text_badge_inline']                            = 'Satır İçi (Inline)';
$_['text_badge_bottom_left']                       = 'Sol Alt';
$_['text_badge_bottom_right']                      = 'Sağ Alt';
$_['text_badge_dark']                              = 'Koyu';
$_['text_badge_light']                             = 'Açık';
$_['text_badge_compact']                           = 'Sıkışık';
$_['text_badge_normal']                            = 'Normal';
$_['text_badge_invisible']                         = 'Görünmez';
$_['text_csp_info']                                = 'Content-Security-Policy (CSP) ayarlarınızın Google reCAPTCHA ile çalışacak şekilde doğru yapılandırıldığından emin olun. Maksimum güvenlik için <strong>CSP3 tabanlı nonce yaklaşımını</strong> kullanmanızı öneririz. Alternatif olarak, <strong>https://www.google.com/recaptcha/</strong> ve <strong>https://www.gstatic.com/recaptcha/</strong> adreslerine izin vermek için <strong>script-src</strong> ve <strong>frame-src</strong> yönergelerini ekleyin. <strong>strict-dynamic</strong> kullanımı da uyumlu tarayıcılarda desteklenir.';
$_['text_captcha_page_admin_login']                = 'Yönetim Paneli Girişi';
$_['text_captcha_page_catalog_login']              = 'Müşteri Girişi';
$_['text_captcha_page_register']                   = 'Kayıt Ol';
$_['text_captcha_page_admin_forgotten_password']   = 'Yönetim Paneli Şifremi Unuttum';
$_['text_captcha_page_catalog_forgotten_password'] = 'Müşteri Şifremi Unuttum';
$_['text_captcha_page_guest']                      = 'Misafir Alışverişi';
$_['text_captcha_page_review']                     = 'Yorumlar';
$_['text_captcha_page_return']                     = 'İadeler';
$_['text_captcha_page_contact']                    = 'İletişim';
$_['text_default']                                 = '(varsayılan)';
$_['text_log_clear_success']                       = 'Hata günlüğü başarıyla temizlendi.';

// Tab
$_['tab_general']                                  = 'Genel';
$_['tab_security']                                 = 'Güvenlik';
$_['tab_error_log']                                = 'Hata Günlüğü';
$_['tab_help_and_support']                         = 'Yardım & Destek';

// Entry
$_['entry_key_type']                               = 'reCAPTCHA Türü';
$_['entry_site_key']                               = 'Site anahtarı';
$_['entry_secret_key']                             = 'Gizli anahtar';
$_['entry_status']                                 = 'Durumu';
$_['entry_badge_position']                         = 'Rozet Konumu';
$_['entry_badge_theme']                            = 'Rozet Teması';
$_['entry_badge_size']                             = 'Rozet Boyutu';
$_['entry_hide_badge']                             = 'Rozeti Gizle';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = 'Doğrulama günlüğü dosya adı';
$_['entry_send_client_ip']                         = 'Müşteri IP Adresini Gönder';
$_['entry_enable_error_log']                       = 'Hata Günlüğünü Etkinleştir';

// Button
$_['button_download']                              = 'İndir';
$_['button_clear']                                 = 'Temizle';

// Help
$_['help_copy']                                    = 'URL\'yi Kopyala';
$_['help_key_type']                                = 'Bu site anahtarı için reCAPTCHA türünü seçin. Bir anahtar yalnızca tek bir türle çalışır. Detaylar için <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">Site Türleri</a> sayfasına bakın.';
$_['help_hide_badge']                              = 'Bu seçeneği etkinleştirerek Google reCAPTCHA rozetini tamamen gizleyebilirsiniz. Google kurallarına uymak için her sayfanın altbilgisine otomatik olarak bir bildirim eklenecektir.';
$_['help_site_key']                                = 'Sitenizin kullanıcılara sunduğu HTML kodunda bu site anahtarını kullanın.';
$_['help_secret_key']                              = 'Siteniz ile reCAPTCHA arasındaki iletişim için bu gizli anahtarı kullanın.';
$_['help_v3_score_threshold']                      = 'Bu ayar, reCAPTCHA v3 tarafından döndürülen puan için eşiği tanımlar. Puan 0.0 ile 1.0 arasındadır. Varsayılan olarak 0.5 kullanılır.';
$_['help_log_filename']                            = 'reCAPTCHA doğrulama hatalarını saklamak için günlük dosyası adını girin.';

// Error
$_['error_permission']                             = 'Uyarı: Google reCAPTCHA\'yı değiştirme yetkiniz yok!';
$_['error_error_log_permission']                   = 'Uyarı: Hata günlüğünü temizleme yetkiniz yok!';
$_['error_error_log_file']                         = 'Uyarı: %s dosyası bulunamadı!';
$_['error_error_log_empty']                        = 'Uyarı: %s günlük dosyası boş!';
$_['error_site_key']                               = 'Anahtar gerekli!';
$_['error_secret_key']                             = 'Gizli anahtar gerekli!';
$_['error_v3_score_threshold_value']               = 'Puan değeri 0 ile 1 arasında olmalıdır.';
$_['error_log_filename']                           = 'Doğrulama hatalarını saklamak için bir günlük dosyası adı gereklidir.';
