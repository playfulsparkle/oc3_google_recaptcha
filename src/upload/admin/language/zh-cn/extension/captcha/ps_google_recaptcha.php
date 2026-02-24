<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = '联系支持';
$_['heading_v3_score_threshold']                   = '分数阈值';

// Text
$_['text_extension']                               = '扩展程序';
$_['text_success']                                 = '成功：您已修改 Google reCAPTCHA！';
$_['text_edit']                                    = '编辑 Google reCAPTCHA';
$_['text_signup']                                  = '要开始使用，请访问 <a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA 页面</a>并注册您的网站，以获取 reCAPTCHA 站点密钥 (Site Key) 和通信密钥 (Secret Key)。';
$_['text_contact']                                 = '<p>如需进一步帮助，请联系我们的支持团队：</p><ul><li><strong>联系方式：</strong> <a href="mailto:%s">%s</a></li><li><strong>文档：</strong> <a href="%s" target="_blank" rel="noopener noreferrer">用户文档</a></li></ul>';
$_['text_key_type_v3']                             = '基于评分 (v3) - 通过分数验证请求';
$_['text_key_type_v2_checkbox']                    = '挑战 (v2) - "我不是机器人" 复选框挑战';
$_['text_key_type_v2_invisible']                   = '挑战 (v2) - 隐形 reCAPTCHA 徽章挑战';
$_['text_badge_inline']                            = '内联';
$_['text_badge_bottom_left']                       = '左下角';
$_['text_badge_bottom_right']                      = '右下角';
$_['text_badge_dark']                              = '深色';
$_['text_badge_light']                             = '浅色';
$_['text_badge_compact']                           = '紧凑';
$_['text_badge_normal']                            = '正常';
$_['text_badge_invisible']                         = '隐形';
$_['text_csp_info']                                = '确保您的内容安全策略 (CSP) 已正确配置以配合 Google reCAPTCHA 工作。为了获得最大的安全性，我们建议使用 <strong>来自 CSP3 的基于 nonce 的方法</strong>。或者，在 <strong>script-src</strong> 中允许 <strong>https://www.google.com/recaptcha/</strong> 和 <strong>https://www.gstatic.com/recaptcha/</strong>，并在 <strong>frame-src</strong> 中允许 <strong>https://www.google.com/recaptcha/</strong> 和 <strong>https://recaptcha.google.com/recaptcha/</strong>。兼容的浏览器也支持使用 <strong>strict-dynamic</strong>。';
$_['text_captcha_page_admin_login']                = '后台登录';
$_['text_captcha_page_catalog_login']              = '前台登录';
$_['text_captcha_page_register']                   = '注册';
$_['text_captcha_page_admin_forgotten_password']   = '后台找回密码';
$_['text_captcha_page_catalog_forgotten_password'] = '前台找回密码';
$_['text_captcha_page_guest']                      = '游客结账';
$_['text_captcha_page_review']                     = '评论';
$_['text_captcha_page_return']                     = '退换货';
$_['text_captcha_page_contact']                    = '联系我们';
$_['text_default']                                 = '(默认)';
$_['text_log_clear_success']                       = '错误日志已成功清除。';

// Tab
$_['tab_general']                                  = '常规';
$_['tab_security']                                 = '安全';
$_['tab_error_log']                                = '错误日志';
$_['tab_help_and_support']                         = '帮助与支持';

// Entry
$_['entry_key_type']                               = 'reCAPTCHA 类型';
$_['entry_site_key']                               = '站点密钥 (Site key)';
$_['entry_secret_key']                             = '通信密钥 (Secret key)';
$_['entry_status']                                 = '状态';
$_['entry_badge_position']                         = '徽章位置';
$_['entry_badge_theme']                            = '徽章主题';
$_['entry_badge_size']                             = '徽章尺寸';
$_['entry_hide_badge']                             = '隐藏徽章';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = '验证日志文件名';
$_['entry_send_client_ip']                         = '发送客户端 IP 地址';
$_['entry_enable_error_log']                       = '启用错误日志';

// Button
$_['button_download']                              = '下载';
$_['button_clear']                                 = '清除';

// Help
$_['help_copy']                                    = '复制 URL';
$_['help_key_type']                                = '为此站点密钥选择 reCAPTCHA 类型。一个站点密钥仅适用于单一的 reCAPTCHA 站点类型。有关更多详细信息，请参阅 <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">站点类型</a>。';
$_['help_hide_badge']                              = '通过启用此选项，您可以完全隐藏 Google reCAPTCHA 徽章。为了符合 Google 的准则，每页的页脚会自动添加一条通知。有关更多信息，请参阅 Google reCAPTCHA 常见问题解答页面上的 <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">我想隐藏 reCAPTCHA 徽章，哪些操作是被允许的？</a> 部分。';
$_['help_site_key']                                = '在您的站点提供给用户的 HTML 代码中使用此站点密钥。';
$_['help_secret_key']                              = '使用此通信密钥在您的站点与 reCAPTCHA 之间进行通信。';
$_['help_v3_score_threshold']                      = '此设置定义 reCAPTCHA v3 返回的分数阈值。分数的范围是 0.0 到 1.0，分数越高（越接近 1.0）表示合法用户交互的可能性越高，分数越低（越接近 0.0）表示机器人的可能性越高。默认使用 0.5。';
$_['help_log_filename']                            = '输入用于存储 reCAPTCHA 验证错误的文件名。';

// Error
$_['error_permission']                             = '警告：您没有权限修改 Google reCAPTCHA！';
$_['error_error_log_permission']                   = '警告：您没有权限清除错误日志！';
$_['error_error_log_file']                         = '警告：找不到文件 %s！';
$_['error_error_log_empty']                        = '警告：日志文件 %s 为空！';
$_['error_site_key']                               = '需要站点密钥！';
$_['error_secret_key']                             = '需要通信密钥！';
$_['error_v3_score_threshold_value']               = '分数值必须介于 0 到 1 之间。';
$_['error_log_filename']                           = '需要日志文件名以存储 reCAPTCHA 验证错误。';
