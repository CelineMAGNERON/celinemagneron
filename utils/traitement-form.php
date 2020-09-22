<?php

//Include required phpmailer files
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

include 'database.php';
include 'queries.php';

//Define name spaces
use PHPmailer\PHPmailer\Exception;
use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\SMTP;


$nom = $_POST['nom'];
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];

addComments($database,$nom, $email, $title, $content);

#Mail : enregistrement en bdd pour envoie l'adresse mail + envoie du mail
#création d'une fonction comme pour queries
# insérer CAPTCHA
#INSTALL COMPOSER et PHP Dot Env

//Create instance of phpmailer
$mail = new PHPmailer();
//Set mailer to use smtp
$mail->isSMTP();
//define smtp host
$mail->Host  = "smtp.gmail.com";
//enable semtp authentification
$mail->SMTPAuth = "true";
//set type of encryptation (ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail username\
$mail->Username = $_ENV['MAILADRESS'];
//set gmail password
$mail->Password = $_ENV['PASSWORD'];
//accept SSL
$mail->SMTPSecure = 'ssl'; 
//set gmail subject
$mail->Subject = "Text Email Using PHPMailer";
//set sender email
$mail->setFrom("magneron.cel@gmail.com");
//Enable HTML
$mail->isHTML(true);
// Attachment img
//Email body
$mail->Body = "<h1>Nouveau message. </h1> </br> <p>Bonne lecture ... </p>";
//Add recipient
$mail->addAddress("magneron.cel@gmail.com");
//Finally send email
if ($mail->Send()) {
    echo "Message envoyé !";
} else {
    echo "Erreur :/";
    }
//Closing smtp connection
$mail->smtpClose();

?>