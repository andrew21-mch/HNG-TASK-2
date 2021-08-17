<?php
         $to = "nfonandrew73@gmail.com";
         $subject = "This is subject";
         
         $message = "<b>This is HTML message.</b>";
         $message .= "<h1>This is headline.</h1>";
         
         $header = "From:nfontatah73@gmail.com \r\n";
    
         
         if(mail ($to,$subject,$message,$header)){
            echo "Message sent successfully...";
         }
         else {
            echo "Message could not be sent...";
         }
      ?>