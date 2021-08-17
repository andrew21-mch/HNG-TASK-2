<?php

require ".gitignore/mail.php";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$mail->IsHTML(true);
$mail->AddAddress($email, $name);
$mail->SetFrom($email, $name);
$mail->AddReplyTo($email, $name);
$mail->AddCC("cc-$email", "$name");
$mail->Subject = $subject;
$content = $content;

$mail->MsgHTML($content); 
if(!$mail->Send()) {
echo "Error while sending Email.";
var_dump($mail);
} else {
echo "Email sent successfully";
}