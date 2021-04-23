<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercice 4</h2>
    <?php
        $rand = rand(1,20);
        echo '<h3>le nombre tiré au sert est : '. $rand.'</h3>'; 
        if($rand >=1 && $rand <=5){
            echo '<p>Il est compris entre 1 et 5</p>';
        }elseif($rand >=6 && $rand <=10){
            echo '<p>Il est compris entre 6 et 10</p>';
        }elseif($rand >=11 && $rand <=15){
            echo '<p>Il est compris entre 11 et 15</p>';
        }else{
            echo '<p>Il est compris entre 16 et 20</p>';
        }
    ?>
<h2>Exercice 5</h2>
    <?php
    $rand1 = rand(1,100);
    $rand2 = rand(1,100);
    $abs = abs($rand1 - $rand2);
    echo '<p>Chiffre 1 : ' . $rand1 . '</p><p>Chiffre 2 : ' . $rand2 . '</p>
        <p>Valeur Absolue: ' . $abs . '</p>';
    if($abs >= 25 && $abs <= 75){
        echo '<p>La valeur de ' . $rand1 . ' - ' . $rand2 . ' est comprise entre 25 et 75';
    }else{
        echo '<p>La valeur de ' . $rand1 . ' - ' . $rand2 . ' n\'est pas comprise entre 25 et 75';
    }
    ?>
<h2>Exercice 6</h2>
    <?php
    $rand3 = rand(1,12);
    $month = ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'];
    switch($rand3){
        case 1:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[0];
            break;
        case 2:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[1];
            break;
        case 3:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[2];
            break;
        case 4:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[3];
            break;
        case 5:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[4];
            break;
        case 6:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[5];
            break;
        case 7:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[6];
            break;
        case 8:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[7];
            break;
        case 9:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[8];
            break;
        case 10:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[9];
            break;
        case 11:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[10];
            break;
        case 12:
            echo '<p>Le mois ' . $rand3 . ' correspond au mois de ' .$month[11];
            break;
    }
    ?>
</body>
</html>