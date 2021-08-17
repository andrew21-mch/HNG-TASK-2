<?php
include "config.php";

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `messages` (`Message_From_Email`, `Message_From_Name`, `Message_Subject`, `Message_body`) VALUES ($email, $name, $subject, $message)";
        $query = mysqli_query($conn,$sql);
            if($query){
                echo"<script>alert('Message Delivered')</script>";
            }
            else{
            echo "ERROR:". $sql. "<br>". mysqli_error($conn);
            }
    }
    else{
    header("Location: index.php");
    }