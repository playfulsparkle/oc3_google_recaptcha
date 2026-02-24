<?php
// Heading
$_['heading_title']                                = 'Playful Sparkle - Google reCAPTCHA';
$_['heading_contact']                              = 'サポートにお問い合わせ';
$_['heading_v3_score_threshold']                   = 'スコアのしきい値';

// Text
$_['text_extension']                               = '拡張機能';
$_['text_success']                                 = '成功: Google reCAPTCHA を更新しました。';
$_['text_edit']                                    = 'Google reCAPTCHA の編集';
$_['text_signup']                                  = '開始するには、<a href="https://www.google.com/recaptcha/intro/index.html" target="_blank" rel="noopener noreferrer">Google reCAPTCHA ページ</a>にアクセスし、ウェブサイトを登録して reCAPTCHA サイトキーとシークレットキーを取得してください。';
$_['text_contact']                                 = '<p>さらにサポートが必要な場合は、サポートチームにお問い合わせください：</p><ul><li><strong>連絡先:</strong> <a href="mailto:%s">%s</a></li><li><strong>ドキュメント:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">ユーザーマニュアル</a></li></ul>';
$_['text_key_type_v3']                             = 'スコアベース (v3) - スコアでリクエストを検証';
$_['text_key_type_v2_checkbox']                    = 'チャレンジ (v2) - 「私はロボットではありません」チェックボックス';
$_['text_key_type_v2_invisible']                   = 'チャレンジ (v2) - 非表示 reCAPTCHA バッジ';
$_['text_badge_inline']                            = 'インライン';
$_['text_badge_bottom_left']                       = '左下';
$_['text_badge_bottom_right']                      = '右下';
$_['text_badge_dark']                              = 'ダーク';
$_['text_badge_light']                             = 'ライト';
$_['text_badge_compact']                           = 'コンパクト';
$_['text_badge_normal']                            = '標準';
$_['text_badge_invisible']                         = '非表示';
$_['text_csp_info']                                = 'Google reCAPTCHA が正しく動作するように Content-Security-Policy (CSP) が設定されていることを確認してください。セキュリティを最大化するために、<strong>CSP3 の nonce ベースのアプローチ</strong>を使用することをお勧めします。または、<strong>script-src</strong> に <strong>https://www.google.com/recaptcha/</strong> および <strong>https://www.gstatic.com/recaptcha/</strong> を許可し、<strong>frame-src</strong> に <strong>https://www.google.com/recaptcha/</strong> および <strong>https://recaptcha.google.com/recaptcha/</strong> を許可してください。互換性のあるブラウザでは <strong>strict-dynamic</strong> もサポートされています。';
$_['text_captcha_page_admin_login']                = '管理画面ログイン';
$_['text_captcha_page_catalog_login']              = 'フロントエンドログイン';
$_['text_captcha_page_register']                   = '新規会員登録';
$_['text_captcha_page_admin_forgotten_password']   = '管理画面パスワード忘れ';
$_['text_captcha_page_catalog_forgotten_password'] = 'フロントエンドパスワード忘れ';
$_['text_captcha_page_guest']                      = 'ゲスト購入';
$_['text_captcha_page_review']                     = 'レビュー';
$_['text_captcha_page_return']                     = '返品依頼';
$_['text_captcha_page_contact']                    = 'お問い合わせ';
$_['text_default']                                 = '(デフォルト)';
$_['text_log_clear_success']                       = 'エラーログが正常に消去されました。';

// Tab
$_['tab_general']                                  = '全般';
$_['tab_security']                                 = 'セキュリティ';
$_['tab_error_log']                                = 'エラーログ';
$_['tab_help_and_support']                         = 'ヘルプ & サポート';

// Entry
$_['entry_key_type']                               = 'reCAPTCHA タイプ';
$_['entry_site_key']                               = 'サイトキー';
$_['entry_secret_key']                             = 'シークレットキー';
$_['entry_status']                                 = 'ステータス';
$_['entry_badge_position']                         = 'バッジの位置';
$_['entry_badge_theme']                            = 'バッジのテーマ';
$_['entry_badge_size']                             = 'バッジのサイズ';
$_['entry_hide_badge']                             = 'バッジを非表示にする';
$_['entry_script_nonce']                           = 'Script Nonce';
$_['entry_google_captcha_nonce']                   = 'Google Captcha API Script Nonce';
$_['entry_css_nonce']                              = 'CSS Style Tag Nonce';
$_['entry_log_filename']                           = '検証ログのファイル名';
$_['entry_send_client_ip']                         = 'クライアント IP アドレスを送信する';
$_['entry_enable_error_log']                       = 'エラーログを有効にする';

// Button
$_['button_download']                              = 'ダウンロード';
$_['button_clear']                                 = '消去';

// Help
$_['help_copy']                                    = 'URLをコピー';
$_['help_key_type']                                = 'このサイトキーに使用する reCAPTCHA のタイプを選択してください。サイトキーは単一の reCAPTCHA タイプでのみ動作します。詳細は <a href="https://developers.google.com/recaptcha/docs/versions" target="_blank" rel="noopener noreferrer">サイトタイプ</a> を参照してください。';
$_['help_hide_badge']                              = 'このオプションを有効にすると、Google reCAPTCHA バッジを完全に非表示にできます。Google のガイドラインに準拠するため、各ページのフッターに通知が自動的に追加されます。詳細は Google reCAPTCHA FAQ の <a href="https://developers.google.com/recaptcha/docs/faq#id-like-to-hide-the-recaptcha-badge.-what-is-allowed" target="_blank" rel="noopener noreferrer">バッジを非表示にしたいのですが、何が許可されていますか？</a> セクションを参照してください。';
$_['help_site_key']                                = 'サイトがユーザーに提供する HTML コード内でこのサイトキーを使用します。';
$_['help_secret_key']                              = 'サイトと reCAPTCHA 間の通信にこのシークレットキーを使用します。';
$_['help_v3_score_threshold']                      = 'この設定は reCAPTCHA v3 が返すスコアのしきい値を定義します。スコアは 0.0 から 1.0 の範囲で、高いほど (1.0 に近いほど) 正当なユーザーである可能性が高く、低いほど (0.0 に近いほど) ボットである可能性が高くなります。デフォルトでは 0.5 が使用されます。';
$_['help_log_filename']                            = 'reCAPTCHA 検証エラーを保存するログファイル名を入力してください。';

// Error
$_['error_permission']                             = '警告: Google reCAPTCHA を変更する権限がありません。';
$_['error_error_log_permission']                   = '警告: エラーログを消去する権限がありません。';
$_['error_error_log_file']                         = '警告: ファイル %s が見つかりませんでした。';
$_['error_error_log_empty']                        = '警告: ログファイル %s は空です。';
$_['error_site_key']                               = 'キーが必要です。';
$_['error_secret_key']                             = 'シークレットが必要です。';
$_['error_v3_score_threshold_value']               = 'スコアは 0 から 1 の間でなければなりません。';
$_['error_log_filename']                           = '検証エラーを保存するためのログファイル名が必要です。';
