<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables</title>
</head>
<body>
<!-- PARTIE 01 -->
    <!-- Variables -->
    <?php
        $ageDuLyceen;
        echo $ageDuLyceen; //Va produire une erreur

        $ageDuProfesseur = 42;
        echo $ageDuProfesseur; //Fonctionne sans soucis!
    ?>

    <!-- Les types de variables -->
    <?php
        $age = 18; // ENTIER (INT)
        $prixDuBaril = 62.94; //FLOAT
        $prénom = "Guy" ;// STRING
        $echappement = "\"18.5\"";// L'anti-Slash permet d'échaper une instruction et d'en faire un caractère
        $echappementBis = 'C\'est de toute beauté';
        $estMajeur = true; //Boolean
        echo $echappement;
        echo $echappementBis;
    ?>

    <!-- PARTIE 02 -->
    <?php
        $direBonjour = "Hello";
        $destination = "World";

        echo "$direBonjour $destination";
        echo 'C\'est l\'heure d\'exprimer le ' . $direBonjour . ' ' . $destination . ' habituel pour célébrer les premières lignes
         de codes que nous codons dans un nouveau langage';

    ?>


</html>