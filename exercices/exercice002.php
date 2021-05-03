<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>
<body>
    <!-- PARTIE 1 -->

    <h2>Exercice 004</h2>

    <?php
        $hasard = rand(1, 20);

        echo "<h3> le nombre tiré au sort est: $hasard</h3>";

        if($hasard >= 1 && $hasard <= 5)
        {
            echo "<p>le nombre est compris entre 1 et 5 </p>";
        } 
        else if($hasard >= 6 && $hasard <= 10)
        {
            echo "<p>le nombre est compris entre 6 et 10 </p>";
        }
        else if($hasard >= 11 && $hasard <= 15)
        {
            echo "<p>le nombre est compris entre 11 et 15 </p>";
        }
        else if($hasard >= 16 && $hasard <= 20)
        {
            echo "<p>le nombre est compris entre 16 et 20 </p>";
        }
    ?>

    <!-- PARTIE 2 -->

    <h2>Exercice 005</h2>

    <?php
        $nombre1 = rand(1, 100);
        $nombre2 = rand(1, 100);

        $résultat = abs($nombre1 - $nombre2);
    ?>

    <p>Chiffre 1 : <span style="font-weight: bold"><?= $nombre1 ?></span></p>
    <p>Chiffre 2 : <span style="font-weight: bold"><?= $nombre2 ?></span></p>
    <p>Valeur Absolue: <span style="font-weight: bold"><?= $résultat ?></span></p>

    <?php
        if($résultat >= 25 && $résultat <= 75)
        {
            echo "<p>La valeur absolue de <span style='font-weight: bold'>$nombre1</span> - <span style='font-weight: bold'>$nombre2</span> est comprise entre 25 et 75</p>";
        }
        else
        {
            echo "<p>La valeur absolue de <span style='font-weight: bold'>$nombre1</span> - <span style='font-weight: bold'>$nombre2</span> n'est pas comprise entre 25 et 75</p>";
        }
    ?>
    <!-- PARTIE 3 -->

    <h2>Exercice 006</h2>
    <?php
        $tableauMois = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre'];
        $hasardMois = rand(1, 12);
        $indexTableau = $hasardMois -1;

        switch($hasardMois){
            case 1:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 2:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 3:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break; 
            case 4:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break; 
            case 5:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 6:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 7:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 8:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 9:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 10:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 11:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;
            case 12:
                echo "<p>Le mois <span style='font-weigth: bold'>$hasardMois</span> correspond au mois de $tableauMois[$indexTableau]";
                break;                
                            
            default:
                echo "<p>Il y a eu un soucis dans l'opération</p>";
        }
    ?>
</body>
</html>