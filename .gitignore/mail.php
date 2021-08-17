<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "nfontatah73@gmail.com";
    $mail->Password   = "*123#And";

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
}
