<?php
require 'vendor/autoload.php';
//require 'vendor\phpmailer\phpmailer/PHPMailerAutoload.php';

//error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['submit'])) {
        
$name = $_POST["name"];
$email = $_POST["email"];
$body = nl2br($_POST["body"]);

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@example.com';                 // SMTP username
$mail->Password = 'secret';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($email, 'Mailer');
$mail->addAddress('harry@example.net', 'Harry User');     // Add a recipient


$mail->Subject = 'Contact form submitted';
$mail->Body    = $body;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo "</br><a href='contact.php'>get back</a>";
} else {
    echo 'Message has been sent';
}

}
 ?>
