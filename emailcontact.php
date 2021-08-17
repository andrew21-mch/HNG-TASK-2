<?php

if(isset($_POST['submit'])) {

$email = $_POST['email']
$to = "nfonandrew73@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: $email" . "\r\n" .
"CC: nfonandrew73@gmail.com";

mail($to,$subject,$message,$headers);
}

   