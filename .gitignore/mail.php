<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require 'PHPMailerAutoload.php';
        $mail = new PHPMailer(TRUE);
        $mail->setFrom($email, $name);
        $mail->addAddress('nfondrew@gmail.com', 'Employee');
        $mail->Subject  = $subject;
        $mail->Body     = $message;
        if(!$mail->send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
        echo 'Message has been sent.';
        }
    }