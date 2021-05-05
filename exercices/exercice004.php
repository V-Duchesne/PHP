<?php 
    $titre = "Exercice Série 004 - Les fonctions";
    require "../common/template.php" ?>
    <style>
        .personne{
            display: flex;
            flex-direction: row;
        }
        .border{
            border: 1px solid black;
            padding: 1em;
            margin: 1em;
        }
    </style>
    <h2>EXERCICE 011</h2>
    <?php

        function Equation($a, $b, $c){
            // j'informe les nombre tiré au hasard
            echo "<p> les nombre tiré au sort sont</p>
            <p> a = $a, b = $b, et c = $c</p>";
            // 1°Calculer le delta
            $delta = ($b * $b) - (4 * $a * $c);

            echo "<p>Le delta obtenu est : ($b X $b) - (4 X $a X $c) = $delta";

            // Vérifier selon la valeur du delta:
                // a) Si Delta < 0 --> pas de solution
                if($delta < 0)
                {
                    echo "<h3>Le delta est inférieur à 0... Il n'y a pas de solution!!! pour ce tirage au sort</h3>";
                }
                else if($delta == 0){
                    $resultat = -$b / (2 * $a);
                    echo "<p>Le delta est = à 0... le calcul sera donc -$b / (2 X $a) = $resultat</p>";
                }
                else if($delta > 0)
                {
                    $racineA = (-$b - sqrt($delta)) / (2 * $a);
                    $racineB = (-$b + sqrt($delta)) / (2 * $a);

                    echo "<h3>racine A = (-$b - √$delta) / (2 * $a) => $racineA</h3>";
                    echo "<h3>racine B = (-$b + √$delta) / (2 * $a) => $racineB</h3>";

                }
            }

            Equation(rand(1,10), rand(1, 10), rand(1, 10));
    ?>

    <h2>Exercice 012</h2>
<?php
// Je crée les deux tableau contenant mes personnes
    $j1 = [
        "nom" => "Guy",
        "age" => 42,
        "sexe" => true
    ];

    $j2 = [
        "nom" => "Delphine",
        "age" => 39,
        "sexe" => false
    ];

    // J'appelle la fonction que je vais créer juste après
    afficherPersonne($j1);
    echo "------------------- <br />";
    afficherPersonne($j2);

    // Je crée la fonction me permettant d'afficher une personne
    function afficherPersonne($x){
        echo "<p>Nom : " . $x["nom"] . "</p>";
        echo "<p>age : " . $x["age"] . "</p>";
        if($x["sexe"]){
            echo "<p>sexe : Homme </p>";
        } else {
            echo "<p>sexe : Femme  </p>";
        }
    }
    ?>
    <h2>Exercice 013</h2>

<?php
//Je rajoute deux nouvelles personnes
    $j3 = [
        "nom" => "Marc",
        "age" => 25,
        "sexe" => true
    ];
    $j4 = [
        "nom" => "Mathilde",
        "age" => 21,
        "sexe" => false
    ];

    // J'envoie toutes les personnes dans un tableau multidimensionnel
    $personnes = [$j1,$j2,$j3,$j4];

    // J'utilise une boucle pour afficher l'intégralité des joueurs contenue dans ce nouveau tableau
    foreach($personnes as $personnes){
        // J'utilise la fonction créé plus haut qui reste valide !
        afficherPersonne($personnes);
        echo "------------------------ <br />";
    }

    

?>

    <h2>Exercice 14</h2>

    <?php
    // Je rajoute pour chaque personne une nouvelle clé qui contient le tableau des notes aléatoires
        $j1["notes"] =  [rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20)];
        $j2["notes"] =  [rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20)];
        $j3["notes"] =  [rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20)];
        $j4["notes"] =  [rand(1, 20), rand(1, 20), rand(1, 20), rand(1, 20)];

        // Je réinitialise le tableau personnes en réinjectant les tableau mis à jours
        $personnes = [$j1, $j2, $j3, $j4];

        // Bonus, je crée une section qui aura la classe personnes donc le style se trouve dans ma balise head
        echo "<section class='personne'>";
        // Je reboucle sur mon tableau de personne pour en afficher tous les composants
        foreach($personnes as $personnes){
            echo "<div class='border'>";
            afficherPersonnes($personnes);
            echo "------------------------ <br />";
            echo "</div>";
        }
        // Je ferme la section
        echo "</section>";
        // Je crée une nouvelle fonction qui prendra en charge cette fois le calcul de la moyenne
        function afficherPersonnes($x){
            echo "<p>Nom : " . $x["nom"] . "</p>";
            echo "<p>age : " . $x["age"] . "</p>";
            if($x["sexe"]){
                echo "<p>sexe : Homme </p>";
            } else {
                echo "<p>sexe : Femme  </p>";
            }
            $resultat = 0;
            foreach($x["notes"] as $indice => $note){
                $resultat += $note;
                echo "<p>Note : ". ($indice + 1). " : " . $note. "</p>";
            }
            echo "<p>La moyenne est de : ". ($resultat / count($x["notes"])). "</p>";

        }

    ?>
</body>
</html>