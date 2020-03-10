<?php

$name = $_POST['name'];
$from = $_POST['email'];
$title = $_POST['subject'];
$message = $_POST['message'];

// Email and name of sender
$sender = "tec_dev@amvara.de";
$senderName = $name;

// The subject line of the email
$subject = "[COMETA website] $title";

// The plain-text body of the email
$bodyText =  "$from $subject";

// The HTML-formatted body of the email
$bodyHtml = nl2br($message);

$mail = new PHPMailer();

// sending emails via mail.amvara.de
$email->Host = "mail.amvara.de";
// $email->Mailer = "smtp";
$email->isSMTP();
$email->Port = 587;
$email->SMTPAuth = true;
$email->Username = "tec_dev@amvara.de";
$email->Password = "PoHEqbH9dszX7LPHhwoG";    
$email->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];

// Specify the SMTP settings.
$mail->setFrom($sender, $senderName);
$mail->SMTPDebug  = 1;

// Specify the message recipients.
$mail -> addAddress('tec_dev@amvara.de', 'AMVARA Tech Team');

// Specify the content of the message.
$mail->Subject = $subject;
$mail->IsHTML(true);
$mail->Body = $bodyHtml;
$mail->AltBody = $bodyText;
$mail->CharSet ="UTF-8";

$mail_result = $mail->send();
?>