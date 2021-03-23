<?php

$userName = $_POST['userName'];
$userEmail = $_POST['userEmail'];
$userPhone = $_POST['userPhone'];
$userQuestion = $_POST['userQuestion'];

require 'phpmailler/Exception.php';
require 'phpmailler/PHPMailer.php';
require 'phpmailler/SMTP.php';

// require 'vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth   = true;
  $mail->Username   = 'hellogoodbad01@gmail.com';
  $mail->Password   = 'kmcdjuaxr-mercedes911';
  $mail->Port = 587;
  $mail->CharSet = "utf-8";
  $mail->setFrom('hellogoodbad01@gmail.com', 'Иван');
  $mail->addAddress('vanish475@gmail.com', 'Иван');
  $mail->SMTPSecure = 'tls';
  $mail->isHTML(true);
  $mail->Subject = "Новая заявка с сайта";
  $mail->Body    = "Имя пользователя: ${userName}, его телефон: ${userPhone}. Его почта будет: ${userEmail}. Его вопрос будет: ${userQuestion}";

  $mail->send();

  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $extra = 'done.html';
  header("Location: http://$host$uri/$extra");
} catch (Exception $e) {
  echo "Ошибка отправки: {$mail->ErrorInfo}";
}

?>