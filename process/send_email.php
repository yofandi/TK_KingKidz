<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$mail = new PHPMailer(true);

try {
    // //Server settings
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication

    // $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    // $mail->Username   = 'info@tkkingskidzsby.com';                     //SMTP username
    // $mail->Password   = '@01Januari2024';                               //SMTP password

    // //Recipients
    // $mail->setFrom('info@tkkingskidzsby.com');
    // $mail->addAddress('tk.kingskidzsby@gmail.com');

    // //Content
    // $mail->isHTML(true);                                  //Set email format to HTML
    // $mail->Subject = 'Kontak : Formulir Pesan dan Saran - tkkingskidzsby.com';
    // $mail->Body    = 'Nama  :' . $_POST['nama'] . '<br>';
    // $mail->Body    .= 'Email  :' . $_POST['email'] . '<br>';
    // $mail->Body    .= 'Telepon  :' . $_POST['phone'] . '<br>';
    // $mail->Body    .= 'Pesan  : <br>' . $_POST['pesan'];

    // $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
