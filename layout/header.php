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

<body>
<header>
    <nav>
        <a href="index.php"> <img src="./assets/images/sydney-opera-house.png" alt="Accueil"
                height="32px"></a>
        <ul class="nav-links-wrapper">
            <li><a class="<?php echo  $page === 'Qui sui-je' ?  'active' : ''  ?>" href="quisuisje.php"
                    title="Qui suis-je">Qui suis-je ?</a></li>
            <li><a class="<?php echo  $page === 'A propos' ?  'active' : ''  ?>" href="a_propos.php"
                    title="A propos">A propos</a></li>
            <li><a class="<?php echo $page === 'Mes expériences' ?  'active' : ''  ?>" href="experience.php" title="Mes expériences">Expériences</a></li>
            <li><a class="<?php echo $page === 'Mes projets perso' ?  'active' : ''  ?>" href="projets.php" title="Mes projets perso">Mes projets</a></li>
        </ul>
    </nav>
</header>

