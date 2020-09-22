<?php
    require "../vendor/autoload.php";

//Include required phpmailer files
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

//include 'database.php';
//include 'queries.php';

echo $_SERVER;
use Dotenv\Dotenv;

  //if (file_exists(__DIR__ . '/.env')) {
  //    echo "I'm in !";
      $dotenv = Dotenv::createImmutable('../');
      $dotenv->load();
  //}

//Define name spaces
use PHPmailer\PHPmailer\Exception;
use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\SMTP;

$nom = $_POST['nom'];
$email = $_POST['email'];
$title = $_POST['title'];
$content = $_POST['content'];

//addComments($database,$nom, $email, $title, $content);

#Mail : enregistrement en bdd pour envoie l'adresse mail + envoie du mail
#création d'une fonction comme pour queries
# insérer CAPTCHA
#INSTALL COMPOSER et PHP Dot Env

//Create instance of phpmailer
$mail = new PHPmailer(true);
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
    $mail->isSMTP(); // Send using SMTP
    $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
    $mail->SMTPAuth = true; // Enable SMTP authentication
    $mail->Username = $_ENV['MAILADRESS']; // SMTP username
    $mail->Password = $_ENV['PASSWORD']; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port = 587; // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($_ENV['MAILADRESS']); // Name is optional
    
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = "$nom a voulu vous contacter";
    $mail->Body = $content;
    
    $mail->send();
    echo 'Message has been sent';
    } catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    //header('Location:/');

?>