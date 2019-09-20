<?php
$email = $_POST['email'];
$message = $_POST['message'];

$error = '';
if (trim($email) == '')
    $error = 'You must enter E-mail';
else if(trim($message) == '')
    $error = 'You must enter your message';
else if(strlen($message) < 10)
    $error = 'Your message is too short';

    if($error != '') {
        echo $error;
        exit;
    }
    $message = $message.' by '.$email;
    $subject = "=?utf-8?B?".base64_encode("Test Message")."?=";
    $headers = 'From: wolk_ase@karmantest.zzz.com.ua'."\r\n";
    mail('bullashes@gmail.com', $subject, $message, $headers);


    echo '<script>alert("Email was sent successfully");</script>';
    echo '<script>location.href="about.php";</script>';

