<?php
    require '../dist/PHPMailer/PHPMailerAutoload.php';

    $msg = '';

    $name = $_POST['user-name'];
    $age = $_POST['user-age'];
    $email = $_POST['user-email'];
    $role = $_POST['user-role'];
    $emergencyContactName = $_POST['user-emergency-contact-name'];
    $emergencyContactNumber = $_POST['user-emergency-contact-number'];
    $identity = $_POST['user-identity'];

    if (isset($_POST['user-sat-events'])) {
        $satEvents = join(", ", $_POST['user-sat-events']);
    } else {
        $satEvents = "None";
    }

    if (isset($_POST['user-sun-events'])) {
        $sunEvents = join(", ", $_POST['user-sun-events']);
    } else {
        $sunEvents = "None";
    }

    $accommodation = $_POST['user-accommodation'];

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
        $mail->Subject = 'New Registration Form Submitted';

        $mail->isHTML(true);

        $mailContent = "Name: $name <br>
        Age: $age <br>
        Email: $email <br>
        Role: $role <br>
        Emergency Contact Name: $emergencyContactName <br>
        Emergency Contact Number: $emergencyContactNumber <br>
        Gender Identity: $identity <br>
        Saturday Events Registered For: $satEvents <br>
        Sunday Events Registered For: $sunEvents <br>
        Special Accommodations: $accommodation";
                
        $mail->Body = $mailContent;

        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
            $error = $mail->ErrorInfo;
            include "../includes/error.html.php";
        } else {
            include '../registration/success.html.php';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }

?>