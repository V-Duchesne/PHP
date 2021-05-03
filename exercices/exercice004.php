<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercice 11</h2>
    <?php
        function equation($a,$b,$c){
            $delta = ($b * $b) - (4 * $a * $c);
            echo "<p>Les nombres tiré au sort sont</p><p>a = $a, b = $b, c = $c</p><p>Le delta obtenu est : ($b X $b) - (4 X $a X $b) = $delta</p>";
            if ($delta <0){
                echo "il n'y a pas de solution";
            }elseif($delta == 0){
                $solution = -$b / (2 * $a);
                echo "x = -$b / (2 * $a) => $solution";
            }elseif($delta > 0){
                $racineA = (-$b - sqrt($delta)) / ($a*$a);
                $racineB = (-$b + sqrt($delta)) / ($a*$a);
                echo "<p>racine A = (-$b - √$delta) / ($a * $a) => $racineA</p><p>racine B = (-$b + √$delta) / ($a * $a) => $racineB";
            }
        };
        equation(rand(1,10),rand(1,10),rand(1,10));
    ?>
    <h2>Exercice 12</h2>
    <?php
            $guy = [
                'Nom' => 'Guy',
                'Age' => 42,
                'Sexe' => 'Homme'
            ];
            $delphine = [
                'Nom' => 'Delphine',
                'Age' => 39,
                'Sexe' => 'Femme'
            ];
        function tableau($x){
            echo "<p>Nom : $x[Nom]</p><p>age : $x[Age]</p><p>sexe : $x[Sexe]</p>";
        }
        tableau($guy);
        echo '------------';
        tableau($delphine);
    ?>
    <h2>Exercice 13</h2>
    <?php
        $marc = [
            'Nom' => 'Marc',
            'Age' => 25,
            'Sexe' => 'Homme'
        ];
        $mathilde = [
            'Nom' => 'Mathilde',
            'Age' => 21,
            'Sexe' => 'Femme'
        ];
        $tableau = [
            $guy,$delphine,$marc,$mathilde
        ];
        foreach($tableau as $value){
            tableau($value);
            echo "<p>-----------</p>";
        }
    ?>
    <h2>Exercice 14</h2>
    <?php
        function moyenne($a,$b,$c,$d){
            $moyenne = (($a + $b + $c + $d) / 4);
            return $moyenne;
        };
        foreach($tableau as $value){
            tableau($value);
            $note = [rand(1,20), rand(1,20), rand(1,20), rand(1,20)];
            echo "<p>Note 1 : $note[0]</p><p>Note 2 : $note[1]</p><p>Note 3 : $note[2]</p><p>Note 4 : $note[3]</p>";
            $moyenne = moyenne($note[0],$note[1],$note[2],$note[3]);
            echo "<p>La moyenne est de : $moyenne</p>";
            echo "<p>-----------</p>";
        }
    ?>
</body>
</html>