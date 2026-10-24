<?php
    $otp=rand(1111,9999);
    require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'aungnyinyimin32439@gmail.com';                 // SMTP username
    $mail->Password = 'gdbcegflheqtzjjd';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    $mail->setFrom('aungnyinyimin32439@gmail.com', 'beauty life');
    $mail->addAddress('aungnyinyimin32439@gmail.com', 'beauty life');     // Add a recipient
    $mail->addAddress('talkmyanmar12@gmail.com');               // Name is optional
    $mail->addReplyTo('talkmyanmar12@gmail.com', 'beauty life');

    $mail->addAttachment('image\Slide6.JPG');         // Add attachments
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject ';
    $mail->Body    = $otp;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
?>