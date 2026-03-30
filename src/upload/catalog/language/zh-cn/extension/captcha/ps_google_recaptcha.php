<?php
// Text
$_['text_captcha']                 = '验证码';
$_['text_recaptcha_branding']      = '本网站受到 reCAPTCHA 的保护，并适用 Google <a href="https://policies.google.com/privacy">隐私权政策</a> 和 <a href="https://policies.google.com/terms">服务条款</a>。';

// Entry
$_['entry_challange_captcha']      = '请完成下方的验证码校验';
$_['entry_score_based_captcha']    = '验证码校验';

// Error
$_['error_missing_input_secret']   = '密钥缺失。请确保请求中包含 reCAPTCHA 密钥。';
$_['error_invalid_input_secret']   = '提供的密钥无效或格式错误。请重新检查您的 reCAPTCHA 密钥并重试。';
$_['error_missing_input_response'] = '缺少 reCAPTCHA 响应。请在提交表单前确保已完成 reCAPTCHA 验证。';
$_['error_invalid_input_response'] = '提供的 reCAPTCHA 响应无效或格式错误。请尝试重新完成 reCAPTCHA 验证。';
$_['error_bad_request']            = '由于请求无效或格式有误，无法处理该请求。请核实请求格式和参数后重试。';
$_['error_timeout_or_duplicate']   = 'reCAPTCHA 响应不再有效。可能已过期或已被重复使用。请刷新页面并重新完成 reCAPTCHA 验证。';
$_['error_low_score']              = '您的请求被标记为可疑。请重试，或者如果您认为这是误报，请联系技术支持。';
