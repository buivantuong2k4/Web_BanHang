<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Public/vendor/PHPMailer/src/Exception.php';
require 'Public/vendor/PHPMailer/src/PHPMailer.php';
require 'Public/vendor/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
                 //Enable verbose debug output
                 $mail->SMTPDebug = 2;
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dainguyenquang294@gmail.com';                     //SMTP username
    $mail->Password   = 'dghe iiun tlxy zvil';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('dainguyenquang294@gmail.com', 'DAI');
    $mail->addAddress($email,$data["tennguoidung"]);     //Add a recipient
                 //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'WEBSITE BAN MY CAY';
    $mail->Body    = 'Mật khẩu tài khoản của bạn là :'.$data["matkhau"].'';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>