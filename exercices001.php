<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercice 1</h2>
    <?php
    $a = 3;
    $b = 5;
    $c = 7;
    echo '<p>**************** AVANT PERMUTATION ****************</p>
        <p>A:'.$a.'</p>'.
        '<p>B:'.$b.'</p>'.
        '<p>C:'.$c.'</p>';
        $d = $a;
        $a = $b;
        $b = $c;    
        $c = $d;
    echo '<p>**************** APRES PERMUTATION ****************</p>
    <p>A:'.$a.'</p>'.
    '<p>B:'.$b.'</p>'.
    '<p>C:'.$c.'</p>'
    ?>

<h2>Exercice 2</h2>
<?php
$NOM = 'Marie';
$NOM2 = 'Pierre';
$AGE = 29;
$AGE2 = 30;
$GENRE = 'homme';
$GENRE2 = 'femme';
echo '<p>'.$NOM.' à '.$AGE.', et c\'est un '.$GENRE.'</p>';
echo '<p>'.$NOM2.' à '.$AGE2.', et c\'est un '.$GENRE2.'</p>';
?>
<h2>Exercice 3</h2>
<?php
$identité = [
    'id' => 1,
    'nom' => 'Duchesne',
    'prénom' => 'Vincent',
    'age' => 32
];
$naissance = 2021 - $identité['age'];
echo 'Bonjour '.$identité['prénom'].' '.$identité['nom'].', tu as '.$identité['age'].' ans, tu es probablement né en '.$naissance.'.'
?>
</body>
</html>