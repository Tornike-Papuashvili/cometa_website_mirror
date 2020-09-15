<?php

require "../PHPMailer/PHPMailerAutoload.php";
// Site's recaptcha secret key
$secretKey = "6Ld-7KcZAAAAAB89rNASRPWcaWPu7w8NjFFIJr2u";

$mail = new PHPMailer;

// sending emails via mail.amvara.de
$mail->isSMTP();
$mail->Host = "mail.amvara.de";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = "tec_dev@amvara.de";
$mail->Password = "PoHEqbH9dszX7LPHhwoG";    
$mail->SMTPOptions = ['ssl'=> ['allow_self_signed' => true]];

$to = "info@amvara.de";

$name = $_POST['name'];
$from = $_POST['email'];
$title = $_POST['subject'];
$message = nl2br($_POST['message']);
// Google recaptcha token
$token = $_POST['g-recaptcha-response'];

// Google send recaptcha for verifying
// post request to server
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => $secretKey, 'response' => $token);
// Build petition to google recaptcha
$options = array(
    'http' => array(
      'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
      'method'  => 'POST',
      'content' => http_build_query($data)
    )
  );
// Send petition
$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$responseKeys = json_decode($response,true);

// We get the response. If the captcha is successful AND we have a recaptcha score of > 0.5, it means that we are likely a human (0.0 surely a bot, 1.0 surely a human)
// If we are OK, then we send the email. If we do not pass the captcha, tell the user we did not pass it.
if($responseKeys["success"] && $responseKeys["score"] >= 0.6) {
    $mail->From = "tec_dev@amvara.de";
    $mail->addAddress($to);
    $mail->Subject = "[COMETA WEBSITE] ". $title;
    $mail->isHtml(TRUE);
    $mail->Body = "Message sent from: $from<br>$name sends his message from cometa.amvara.consulting: <br> $message";
    $mail->CharSet = 'UTF-8';
    if(!$mail->send()) {
        echo 'Message was not sent.';
        echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent.';
    }
} else {
    echo "Invalid ReCaptcha confirmation. Please, refresh the page and try again.";
}



?>