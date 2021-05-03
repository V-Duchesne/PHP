<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 007</h2>
    <?php

    echo '<table border>
    <tr>
        <th>Nombre</th>
        <th>Carré</th>
        <th>Racine</th>
    </tr>';

    // LES LIGNES DES NOMBRES DYNAMIQUES
    for ($i = 1; $i <= 20; $i++) {

        echo'<tr>
            <td>'.$i.'</td>
            <td>'.$i*$i.'</td>
            <td>'.sqrt($i).'</td>
        </tr>';

    }

    echo '</table>';
    
    ?>
    <h2>Exercice 008</h2>
    <?php
        $n = rand(5, 15);
        $boucle = 1;
        $resultat = 0;
        echo "<h3>Voici le cumul des $n premiers nombres (sens inverse): </h3>";
        for($i = $n; $i >=1; $i--):
            $resultat += $i;
            echo "<p>Etape: $boucle - résultat = $resultat</p>";
            $boucle++;
        endfor;
    ?>

    <h2>Exercice 009</h2>
    <?php
    $random = 0;
    $essai = 0;
        while($random < 15):
            $random = rand(1, 20);
            $essai++;
            if($random <= 15):
                echo "<p>Essais $essai: $random est trop petit(<16)</p>";
            endif;
        endwhile;
        echo "<p>Le nombre choisi est: $random</p>"
    ?>

    <h2>Exercice 010</h2>

    <?php
    
        // créer le tableau de note de Guy
        $noteDeGuy = [];
        // Variable pour acceuillir la moyenne
        $moyenne = 0;

        // Injecter 20 notes aléatoires
        for($i=0; $i < 20; $i++):
            $aleatoire = rand(1, 20);
            $noteDeGuy[$i] = $aleatoire;
        endfor;

        //Afficher les notes et préparer le calcul de la moyenne
        foreach ($noteDeGuy as $key => $value) {
            echo 'Note N°' . ($key+1) . ': <span style=\'font-weight: bold\'>' . $noteDeGuy[$key] . '</span> | ';
            $moyenne += $noteDeGuy[$key];
        }

        // Calculer la moyenne
        $resultat = ($moyenne / count($noteDeGuy)) * 5;
        echo "<h3>La moyenne de l'année est de $resultat : ";

        if($resultat <= 30) : 
            echo "ça ira mieux l’année prochaine!!!";
        endif;
        if($resultat > 30 && $resultat <= 50): 
            echo "Voilà pourquoi il ne faut pas regarder des stream jv durant les cours!";
        endif;
        if($resultat > 50 && $resultat <= 60):
            echo "pas de bol, t’y était presque !!!";
        endif;
        if($resultat > 60 && $resultat <= 70):
            echo "ça passe… sans classe, mais ça passe !!!";
        endif;
        if($resultat > 70 && $resultat <= 80): 
            echo "Bien joué, objectif atteint!!!";
        endif;
        if($resultat > 80): 
            echo "Master Class, 5étoiles pour toi";
        endif;
        echo '</h3';
    ?>

</body>
</html>