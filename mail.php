<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'mailer/autoload.php';

$mail = new PHPMailer();
//Create an instance; passing `true` enables exceptions

$mail->isSMTP(); // Utiliser SMTP pour l'envoi des e-mails
$mail->Host = 'smtp.gmail.com'; // Spécifier le serveur SMTP
$mail->SMTPAuth = true; // Activer l'authentification SMTP
$mail->Username = 'issamman764@gmail.com'; // Nom d'utilisateur SMTP
$mail->Password = 'sxvyfdeiwfujabji'; // Mot de passe SMTP
$mail->SMTPSecure = 'ssl'; // Protocole de sécurité SMTP
$mail->Port = 465; // Port SMTP
?>