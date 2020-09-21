<!DOCTYPE HTML>

<?php 
    require_once './assets/css/citation.php';
?>

<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Générateur de citations</title>
    <!-- jQuery + Bootstrap + Font-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="bootstrap-3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <!--____________________-->
    <link rel="stylesheet" href="generateurDeCitation.css">
    <script src="generateurDeCitation.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Générateur de citations" />
</head>

<body>
    <div class="container text-center">
        <h1>Générateur de citation</h1>
        <blockquote>
            <p class="citation">A rattacher au .js pour faire plus classe  :)</p>
            <footer class="auteur">
                Auteur
            </footer>
        </blockquote>

        <button id="generer" class="button">Générer
          <br/>
        <span class="tooltip">Une inspiration en appelle une autre ... </span>
        </button>

    </div>

</body>

</html>
