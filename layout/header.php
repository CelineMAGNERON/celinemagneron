<!DOCTYPE HTML>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/header.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/footer.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Site de présentation de Céline MAGNERON" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- mysqli_init -->

    <title><?php if (isset($title)) {
                echo $title;
            } else {
                echo "Céline MAGNERON";
            } ?></title>

    <header class="container-fluid header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav stylelink">
                    <a class="nav-item nav-link stylelink" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link stylelink" href="#who" title="Qui suis-je ?">Qui suis-je ?</a>
                    <a class="nav-item nav-link stylelink" href="#projets" title="Mes projets persos">Mes projets perso</a>
                    <a class="nav-item nav-link" href="#xp" title="Experiences">Mon parcours pro</a>
                    <a class="nav-item nav-link" href="#formations" title="Formations">Mes formations</a>
                    <a class="nav-item nav-link" href="#extrapro" title="Extra-pro">En extra-pro</a>
                </div>
            </div>
        </nav>


    </header>