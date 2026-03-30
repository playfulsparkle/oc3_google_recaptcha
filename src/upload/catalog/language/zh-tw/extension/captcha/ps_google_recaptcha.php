<?php
// Text
$_['text_captcha']                 = '驗證碼';
$_['text_recaptcha_branding']      = '本網站受到 reCAPTCHA 的保護，並適用 Google <a href="https://policies.google.com/privacy">隱私權政策</a> 和 <a href="https://policies.google.com/terms">服務條款</a>。';

// Entry
$_['entry_challange_captcha']      = '請完成下方的驗證碼校驗';
$_['entry_score_based_captcha']    = '驗證碼校驗';

// Error
$_['error_missing_input_secret']   = '金鑰缺失。請確保請求中包含 reCAPTCHA 金鑰。';
$_['error_invalid_input_secret']   = '提供的金鑰無效或格式錯誤。請重新檢查您的 reCAPTCHA 金鑰並重試。';
$_['error_missing_input_response'] = '缺少 reCAPTCHA 回應。請在提交表單前確保已完成 reCAPTCHA 驗證。';
$_['error_invalid_input_response'] = '提供的 reCAPTCHA 回應無效或格式錯誤。請嘗試重新完成 reCAPTCHA 驗證。';
$_['error_bad_request']            = '由於請求無效或格式有誤，無法處理該請求。請核實請求格式和參數後重試。';
$_['error_timeout_or_duplicate']   = 'reCAPTCHA 回應不再有效。可能已過期或已被重複使用。請重新整理頁面並重新完成 reCAPTCHA 驗證。';
$_['error_low_score']              = '您的請求被標記為可疑。請重試，或者如果您認為這是誤報，請聯繫技術支援。';
