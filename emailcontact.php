<?php

if(isset($_POST['submit'])) {

$to = "nfonandrew73@gmail.com";
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: nfonandrew73@gmail.com";

mail($to,$subject,$message,$headers);
}

   