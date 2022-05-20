<?php
use PHPMailer\PHPMailer\PHPMailer; // use namespace
use PHPMailer\PHPMailer\SMTP; // use namespace
use PHPMailer\PHPMailer\Exception; // use namespace

require 'vendor/autoload.php'; // include autoload
$mail = new PHPMailer(true); // new object PHPMailer

header('Location: ./index.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$text = $_POST['text'];
$msg = " <br>
    Имя: $name <br>
    Фамилия: $surname <br>
    Телефон: $phone <br>
    Почта: $email <br>
    Текст: $text";

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // debugger SMTP
    $mail->isSMTP(); // connection SMTP
    $mail->Host = 'smtp.gmail.com'; // HOST
    $mail->SMTPAuth = true; // authorization
    $mail->Username = 'FromMail'; // gmail for send
    $mail->Password = 'passwordMail'; // password for this gmail
    $mail->Port = 587; // port to send
    $mail->CharSet = "utf-8";
    $mail->setFrom("FromMail","Name"); // from mail
    $mail->addAddress("ToMail","Name"); // gmail to
    $mail->addAttachment('background.jpg', 'new.jpg'); // attachment(images, etc)
    $mail->SMTPSecure = 'tls';
    $mail->isHTML(true); // use HTML tag
    $mail->Subject = "Subject"; // gmail subject
    $mail->Body = $msg; // gmail body->text
    $mail->AltBody = "Альтернативное содержание сообщения.";

    $mail->send(); // send mail
    echo "Сообщение отправлено.";
} catch (Exception $e) { // catch exception/error
    echo "Ошибка отправки: $mail->ErrorInfo";
}