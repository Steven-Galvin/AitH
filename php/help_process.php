<?php

    require 'phpmysqlconnect.php';
    require '../dist/PHPMailer/PHPMailerAutoload.php';

    $msg = '';

    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $role = $_POST['user-role'];
    $comment = $_POST['user-comment'];

    $mail = new PHPMailer;
    
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'mail.stevengalvin.webhostingforstudents.com';
    $mail->Username = 'phpmailer@stevengalvin.webhostingforstudents.com';
    $mail->Password = 'PHPM4iler-WH4S!';
    $mail->Port = 587;

    $mail->setFrom('phpmailer@stevengalvin.webhostingforstudents.com', 'Steven Galvin');
    $mail->addAddress('phpmailer@stevengalvin.webhostingforstudents.com', 'Steven Galvin');
    
    if ($mail->addReplyTo($email, $name)) {
        $mail->Subject = 'New Help Form Submitted';

        $mail->isHTML(true);

        $mailContent = "Email: $email <br>
        Name: $name <br>
        Role: $role <br>
        Comment: $comment";
                
        $mail->Body = $mailContent;

        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
            $error = $mail->ErrorInfo;
            include "../includes/error.html.php";
        } else {
            include '../help/success.html.php';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }

?>