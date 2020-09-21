<?php

function addComments($database, $nom, $email, $content, $title)
{

    $confirm = $database->prepare("INSERT INTO comments (nom, email, title, content) VALUES ('$nom', '$email', '$title', '$content')");
    $confirm->execute();

    $result = $confirm->rowCount();
}

