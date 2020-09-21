<?php
define('HOST', 'localhost');
define('DB_NAME', 'celinemagneron'); /*<nom de la base de données dans phpMyAdmin*/
define('USER', 'root');
define('PASS', '');

try {
    $database = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* Vérifier la bonne connexion :  echo "Connexion OK !" */
} catch (PDOException $error) {
    echo $error;
}