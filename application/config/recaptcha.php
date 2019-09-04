<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin

// Hosting www.ciptasinergi.com
//$config['recaptcha_site_key'] = '6LcRh7YUAAAAANBivyiTg-PReyQbq1jMh9MfJNr_';
//$config['recaptcha_secret_key'] = '6LcRh7YUAAAAABDdgKwZEyzd9xmGGgCYt9hl1bjn';

// For Local server
$config['recaptcha_site_key'] = '6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI';
$config['recaptcha_secret_key'] = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
