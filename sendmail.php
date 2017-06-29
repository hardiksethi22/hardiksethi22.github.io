<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->setFrom('manusethi123@gmail.com', 'hardik');
$mail->addAddress('hardiksethi893@gmail.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Hi! This is my first e-mail sent through PHPMailer.';
if(!$mail->send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}
