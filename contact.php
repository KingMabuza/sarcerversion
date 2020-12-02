<?php

    if (isset($_POST['submit'])){
        ini_set("SMTP", "mail.zoho.com");
        ini_set("sendmail_from", "king@sarcer.com");
        ini_set("smtp_port", 587);
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $msg = $_POST['message'];

        $to = 'info@sarcer.com';
        $headers = "From: king@sarcer.com";
        mail($to, $subject, $msg,$headers);
        header('location:index.php?success');
    }

?>