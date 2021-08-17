<?php
if(isset($_POST['submit'])){

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';

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
        $mail->Username   = "nfondrew@gmail.com";
        $mail->Password   = "nfonandrew@gmail.com";

        $mail->IsHTML(true);
        $mail->AddAddress("nfondrew@gmail.com", "Nfon Andrew");
        $mail->SetFrom($emali, $name);
        $mail->AddReplyTo($email, $name);
        $mail->AddCC($email, $name);
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