<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

// Get the dotenv variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$mail = new PHPMailer(true);

$mail->SMTPDebug = 3;
// Get the form data
$data = $_POST;

$name = $data['name'];
$email = $data['email'];
$message = $data['message'];

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->SMTPAuth = true;
$mail->Username = $_ENV['C_EMAIL'];
$mail->Password = $_ENV['C_PASS'];
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($email, $name);
$mail->addAddress($_ENV['SEND_TO']);
$mail->addReplyTo($email, $name);

$mail->isHTML(true);
$mail->Subject = 'Contact Form Submission';
$mail->Body = "Name: $name <br> Email: $email <br> Message: $message";


try {
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
?>
