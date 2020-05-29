<?php 

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/OAuth.php';

try {
//Recipient
$to = 'tywaynebuchanan@gmail.com';

//Subject
$subject = 'Test Email';

//Message
$message ='<h1>Hi There. This is a test</h1>';

$mail = new PHPMailer(true);
$mail->isSMTP();  
$mail->SMTPDebug = SMTP::DEBUG_SERVER;   
$mail ->SMTPAuth = true;
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;  
$mail ->Host = "smtp.gmail.com";
$mail ->Port = 587;
//Recipients
    $mail->setFrom('tywaynebuchanan@gmail.com', 'Mailer');
    $mail->addAddress('tywaynebuchanan@gmail.com', '');     // Add a recipient
    $mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('tywaynebuchanan@gmail.com', 'Information');
    
   

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// //Headers

// $headers = "From: The Sender Name <tywaynebuchanan@gmail.com\r\n";
// $headers .= "Reply-To:replyto@tywaynebuchanan@gmail.com";
// $headers .= "Content-type: text/html\r\n";

// mail($to,$subject,$message,$headers);


?>