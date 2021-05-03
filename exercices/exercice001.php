<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- PARTIE 1 -->
<?php

// Variables de base
    $a = 3;
    $b = 5;
    $c = 7;

    echo '<p>************************ AVANT PERMUTATION ************************</p>
    <p>A: ' . $a . '</p>
    <p>B: ' . $b . '</p>
    <p>C: ' . $c . '</p>';

    // Réassignation des variables
    $tmp = $a;
    $a = $b;
    $b = $c;
    $c = $tmp;

    echo '<p>************************ APRES PERMUTATION ************************</p>
    <p>A: ' . $a . '</p>
    <p>B: ' . $b . '</p>
    <p>C: ' . $c . '</p>';
?>

<!-- PARTIE 2 -->
    <!-- les variables -->
    <?php
        $nom = "Marie";
        $age = 29;
        $genre = "homme";
        $nom2 = "Pierre";
        $age2 = 30;
        $genre2 = "femme";   
    ?>
    <p><?= $nom ?> à <?= $age ?> ans, et c'est un <?= $genre ?></p>
    <p><?= $nom2 ?> à <?= $age2 ?> ans, et c'est un <?= $genre2 ?></p>



    <!-- PARTIE 3 -->

    <?php
        $personne = [
            "id" => 1,
            "prénom" => "Guy",
            "nom" => "Vilain",
            "age" => 42
        ];

        $annéeNaissance = (2021 - $personne["age"]);
        ?>
        <p>Bonjour <?= $personne["prénom"] . ' ' . $personne["nom"] ?>, tu as <?= $personne["age"] ?> ans, tu es probablement né en <?= $annéeNaissance ?>.</p>



</body>
</html>