<?php
$name = $_POST['uname'];
$phone = $_POST['phone'];

require 'class.phpmailer.php';

$mail = new PHPMailer;

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.mail.ru';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'myron91@mail.ru';                            // SMTP username
$mail->Password = '3245MARIC';                           // SMTP password
$mail->SMTPSecure = 'ssl';  
$mail->Port = 465;                          // Enable encryption, 'ssl' also accepted

$mail->From = 'myron91@mail.ru';
$mail->FromName = 'RYTA';
$mail->AddAddress('91myron91@gmail.com', 'Josh Adams');  // Add a recipient
$mail->AddAddress('kissvova@rambler.ru');               // Name is optional
//$mail->AddReplyTo('info@example.com', 'Information');
//$mail->AddCC('cc@example.com');
//$mail->AddBCC('bcc@example.com');

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->AddAttachment('/var/tmp/file.tar.gz');         // Add attachments
$mail->AddAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>name: '.$name .'    phone: '.$phone.'</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo '<b>Повідомлення успішно відправлено</b>' and {
   header ('Location: index.html');  // перенаправление на нужную страницу
   exit();    // прерываем работу скрипта, чтобы забыл о прошлом
};
