<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Recaptcha (V2)
|--------------------------------------------------------------------------
|
| Write the necessary keys to enable recaptcha in the register
| Use the following page to create the necessary keys.
| https://www.google.com/recaptcha/admin#list
|
*/
$config['recaptcha_sitekey'] = '6LfJFEAUAAAAAKBrGYQaX-TeWGBG1vTNlqUuNyNA';

/*
|--------------------------------------------------------------------------
| SMTP
|--------------------------------------------------------------------------
|
| Write the necessary information for use SMTP to use in recovery password
| and account activation.
|
*/
$config['smtp_protocol'] = 'smtp';
$config['smtp_host'] = 'ssl://cp162176.hpdns.net';
$config['smtp_port'] = 465;
$config['smtp_user'] = 'dzy@dzywolf.me';
$config['smtp_pass'] = 'r5hxfIazAXmn';

/*
|--------------------------------------------------------------------------
| Recovery Passowrd
|--------------------------------------------------------------------------
|
| Write the necessary information for use recovery password.
|
*/
$config['recovery_email_from'] = 'dzy@dzywolf.me';
$config['recovery_email_name'] = 'BlizzCMS';
$config['recovery_email_subject'] = 'Password Recovery';

/*
|--------------------------------------------------------------------------
| Account Activation
|--------------------------------------------------------------------------
|
| Write the necessary information for use account activation.
|
*/