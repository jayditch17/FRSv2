<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

// Load Composer's autoloader
require 'PHPMailerAutoLoad.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

if (isset($_POST['announcement'])) {
    # code...
    //Server settings
    $mail->SMTPDebug = 4;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'webteklec@gmail.com';                     // SMTP username
    $mail->Password   = 'WEBtek@123';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('webteklec@gmail.com', 'Mailer');
    $mail->addAddress('webteklec@gmail.com', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('webteklec@gmail.com', 'Information');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Announcement';
    $mail->Body    = 'new Announcement';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}else{
    echo "Message Sent";
}
}




// $result ="";
// require_once('PHPMailerAutoLoad.php');

// $mail = new PHPMailer();
// $mail->Host = 'smtp.gmail.com';
// $mail->port = 587;
// $mail->SMPTPAuth = true;
// $mail->SMPTPSecure = 'tls';
// $mail->Username = "webteklec@gmail.com";
// $mail->Password = "WEBtek@123";


// $mail->SetFrom('2164482@slu.edu.ph', '7Wheel');
// $mail->AddAddress('2164482@slu.edu.ph');
// $mail->isHTML(true);
// $mail->Subject = 'Hello World';
// $mail->Body = ' a test email';

// //$mail->isSMTP();

// if(!$mail->Send()){
// 	$result = "Something went wrong.";
// }else{
// 	$result="thanks";
// }

 