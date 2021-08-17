<?php
if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/autoload.php';

        $mail = new PHPMailer(TRUE);

        $mail->IsSMTP();
        $mail->Mailer = "smtp";

        $mail->SMTPDebug  = 1;  
        $mail->SMTPAuth   = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port       = 587;
        $mail->Host       = "smtp.gmail.com";
        $mail->Username   = "nfondrew@gmail.com";
        $mail->Password   = "nfonandrew73@gmail.com";

        $mail->IsHTML(true);
        $mail->AddAddress("nfondrew@gmail.com", "Nfon Andrew");
        $mail->SetFrom("$emali", "$name");
        $mail->AddReplyTo("$email", "$name");
        $mail->AddCC("$email", "$name");
        $mail->Subject = $subject;
        $content = $message;

        $mail->MsgHTML($content); 
        if(!$mail->Send()) {
        echo "Error while sending Email.";
        var_dump($mail);
        } else {
        echo "Email sent successfully";
        }
    }