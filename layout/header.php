<!DOCTYPE HTML>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site de présentation de Céline MAGNERON"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet"> </head>

    <!-- mysqli_init -->
    
<title><?php if (isset($title)) {
            echo $title;
        } else {
            echo "Céline MAGNERON";
            } ?></title>

<header>
    <nav>
        <a href="index.php"> <img src="./assets/images/sydney-opera-house.png" alt="Accueil"
                height="32px"></a>
        <ul class="nav-links-wrapper">
            <li><a class="button" href="#who" title="Qui suis-je ?">Qui suis-je ?</a></li>
            <li><a class="button" href="#projets" title="Mes projets persos">Mes projets perso</a></li>
            <li><a class="button" href="#xp" title="Experiences">Mon parcours pro</a></li>
            <li><a class="button" href="#formations" title="Formations">Mes formations</a></li>
            <li><a class="button" href="#extrapro" title="Extra-pro">En extra-pro</a></li>
        </ul>
    </nav>
</header>

