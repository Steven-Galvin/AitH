<?php
/**
 * Handles the processing of the contact form
 */

$msg = '';
//Don't run this unless we're handling a form submission
if (isset($_POST['user-email']) && ($_POST['honeypot'] =='')) {
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP - requires a local mail server
    //Faster and safer than using mail()
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'mail.stevengalvin.webhostingforstudents.com';
    $mail->Username = 'phpmailer@stevengalvin.webhostingforstudents.com';
    $mail->Password = '<?phpmailer?>';
    $mail->Port = 587;

    // Grab form results and set them to variables
    
    $name = $_POST['user-name'];
    $email = $_POST['user-email'];
    $role = $_POST['user-role'];
    $comment = $_POST['user-comment'];

    // Insert form results into database

    include '../includes/db.html.php';

    try {
        $sql = "INSERT INTO contact_results (name, email, role, comment) 
        VALUES ('$name', '$email', '$role', '$comment')";
        $pdo->exec($sql);
    } catch (PDOException $e) {
        $error = "Error updating database: " . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }

    //Use a fixed address in your own domain as the from address
    //**DO NOT** use the submitter's address here as it will be forgery
    //and will cause your messages to fail SPF checks
    $mail->setFrom('phpmailer@stevengalvin.webhostingforstudents.com', 'Steven Galvin');
    //Send the message to yourself, or whoever should receive contact for submissions
    $mail->addAddress('phpmailer@stevengalvin.webhostingforstudents.com', 'Steven Galvin');
    //Put the submitter's address in a reply-to header
    //This will fail if the address provided is invalid,
    //in which case we should ignore the whole request
   if ($mail->addReplyTo($email, $name)) {
        $mail->Subject = 'Ace in the Hole Help Form';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = <<<EOT
Email: {$email} <br>
Name: {$name} <br>
Role: {$role} <br>
Comment: {$comment}
EOT;
        //Send the message, check for errors
        if (!$mail->send()) {
            //The reason for failing to send will be in $mail->ErrorInfo
            //but you shouldn't display errors to users - process the error, log it on your server.
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            include 'success.html.php';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
} else {
   include 'help.html.php'; 
}
?>