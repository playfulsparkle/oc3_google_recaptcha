<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = '聯繫支援';
$_['heading_v3_score_threshold']                   = '分數閾值';

// Text
$_['text_extension']                               = '擴充功能';
$_['text_success']                                 = '成功：您已修改 Google reCAPTCHA！';
$_['text_edit']                                    = '編輯 Google reCAPTCHA';
$_['text_signup']                                  = '要開始使用，請訪問 <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA 頁面</a>並註冊您的網站，以獲取 reCAPTCHA 金鑰 (Site Key) 與密鑰 (Secret Key)。';
$_['text_contact']                                 = '<p>如需進一步協助，請聯繫我們的支援團隊：</p><ul><li><strong>聯繫方式：</strong> <a href="mailto:%s">%s</a></li><li><strong>說明文件：</strong> <a href="%s" target="_blank" rel="noopener noreferrer">使用者文件</a></li></ul>';
$_['text_key_type_v3']                             = '評分型 (v3) - 透過分數驗證請求';
$_['text_key_type_v2_checkbox']                    = '挑戰型 (v2) - 「我不是機器人」核取方塊';
$_['text_key_type_v2_invisible']                   = '挑戰型 (v2) - 隱形 reCAPTCHA 標記';
$_['text_badge_inline']                            = '內嵌';
$_['text_badge_bottom_left']                       = '左下角';
$_['text_badge_bottom_right']                      = '右下角';
$_['text_badge_dark']                              = '深色';
$_['text_badge_light']                             = '淺色';
$_['text_badge_compact']                           = '緊湊';
$_['text_badge_normal']                            = '正常';
$_['text_badge_invisible']                         = '隱形';
$_['text_csp_info']                                = '確保您的內容安全政策 (CSP) 已正確配置以搭配 Google reCAPTCHA 運作。為了獲得最高的安全性，我們建議使用 <strong>來自 CSP3 的基於 nonce 的方法</strong>。或者，在 <strong>script-src</strong> 中允許 <strong>https://www.google.com/recaptcha/</strong> 與 <strong>https://www.gstatic.com/recaptcha/</strong>，並在 <strong>frame-src</strong> 中允許 <strong>https://www.google.com/recaptcha/</strong> 與 <strong>https://recaptcha.google.com/recaptcha/</strong>。相容的瀏覽器也支援使用 <strong>strict-dynamic</strong>。';
$_['text_captcha_page_admin_login']                = '後台登入';
$_['text_captcha_page_catalog_login']              = '前台登入';
$_['text_captcha_page_register']                   = '註冊';
$_['text_captcha_page_admin_forgotten_password']   = '後台找回密碼';
$_['text_captcha_page_catalog_forgotten_password'] = '前台找回密碼';
$_['text_captcha_page_guest']                      = '訪客結帳';
$_['text_captcha_page_review']                     = '評論';
$_['text_captcha_page_return']                     = '退換貨';
$_['text_captcha_page_contact']                    = '聯繫我們';
$_['text_default']                                 = '(預設)';
$_['text_log_clear_success']                       = '錯誤日誌已成功清除。';

// Tab
$_['tab_general']                                  = '一般';
$_['tab_security']                                 = '安全';
$_['tab_error_log']                                = '錯誤日誌';
$_['tab_help_and_support']                         = '說明與支援';

// Entry
$_['entry_key_type']                               = 'reCAPTCHA 類型';
$_['entry_site_key']                               = '金鑰 (Site key)';
$_['entry_secret_key']                             = '密鑰 (Secret key)';
$_['entry_status']                                 = '狀態';
$_['entry_badge_position']                         = '標記位置';
$_['entry_badge_theme']                            = '標記主題';
$_['entry_badge_size']                             = '標記尺寸';
$_['entry_hide_badge']                             = '隱藏標記';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = '驗證日誌檔名';
$_['entry_send_client_ip']                         = '傳送用戶端 IP 位址';
$_['entry_enable_error_log']                       = '啟用錯誤日誌';

// Button
$_['button_download']                              = '下載';
$_['button_clear']                                 = '清除';

// Help
$_['help_copy']                                    = '複製 URL';
$_['help_key_type']                                = '為此金鑰選擇 reCAPTCHA 類型。一組金鑰僅適用於單一的 reCAPTCHA 類型。有關更多詳細資訊，請參閱 <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">網站類型</a>。';
$_['help_hide_badge']                              = '啟用此選項後，您可以完全隱藏 Google reCAPTCHA 標記。為了符合 Google 的準則，頁尾會自動加入一條通知。詳情請參閱 Google reCAPTCHA 常見問題頁面上的 <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">我想隱藏 reCAPTCHA 標記，哪些操作是被允許的？</a> 部分。';
$_['help_site_key']                                = '在您的網站提供給使用者的 HTML 程式碼中使用此金鑰。';
$_['help_secret_key']                              = '使用此密鑰在您的網站與 reCAPTCHA 之間進行通訊。';
$_['help_v3_score_threshold']                      = '此設定定義 reCAPTCHA v3 回傳的分數閾值。分數範圍為 0.0 到 1.0，預設使用 0.5。';
$_['help_log_filename']                            = '輸入用於儲存 reCAPTCHA 驗證錯誤的日誌檔名。';

// Error
$_['error_permission']                             = '警告：您沒有權限修改 Google reCAPTCHA！';
$_['error_error_log_permission']                   = '警告：您沒有權限清除錯誤日誌！';
$_['error_error_log_file']                         = '警告：找不到檔案 %s！';
$_['error_error_log_empty']                        = '警告：日誌檔 %s 是空的！';
$_['error_site_key']                               = '需要金鑰！';
$_['error_secret_key']                             = '需要密鑰！';
$_['error_v3_score_threshold_value']               = '分數值必須介於 0 到 1 之間。';
$_['error_log_filename']                           = '需要日誌檔名以儲存 reCAPTCHA 驗證錯誤。';
