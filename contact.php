<?php

    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];

        $to = 'info@sarcer.com';
        $headers = "From: $email";
        if(mail($to, $subject, $msg,$headers)){
            header('location:index.php?success');
        }
    }

?>