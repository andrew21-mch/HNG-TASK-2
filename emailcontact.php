<?php

if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    
    $toEmail = 'nfonandrew73@gmail.com';
    $headers = "From: ". $email. "To \n" . $toEmail;

    if(mail($toEmail, $subject, $message, $headers)){
        echo '<script>alert("SUCCESS")</script>';
    }
    else{
        echo '<script>alert("Failed")</script>';
    }

}

   