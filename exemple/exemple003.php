<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les opérateurs</title>
</head>
<body>

<?php
    // OPERATEURS
    $nombreUn = 20;
    $nombreDeux = 5;

    // ADDITIONNER
    $resultat = $nombreUn + $nombreDeux;
    echo    '<h2>ADDITION</h2>
            <p>' . $nombreUn . '+' . $nombreDeux . '=' . $resultat . '.</p>';
    // SOUSTRAIRE
    $resultat = $nombreUn - $nombreDeux;
    echo    '<h2>SOUSTRACTION</h2>
            <p>' . $nombreUn . '-' . $nombreDeux . '=' . $resultat . '.</p>';
    // MULTIPLIER
    $resultat = $nombreUn * $nombreDeux;
    echo    '<h2>MULTIPLICATION</h2>
            <p>' . $nombreUn . 'X' . $nombreDeux . '=' . $resultat . '.</p>';
    // DIVISER
    $resultat = $nombreUn / $nombreDeux;
    echo    '<h2>DIVISION</h2>
            <p>' . $nombreUn . '/' . $nombreDeux . '=' . $resultat . '.</p>';
    // MODULO
    $resultat = $nombreUn % $nombreDeux;
    echo    '<h2>MODULO</h2>
            <p>' . $nombreUn . 'Modulo' . $nombreDeux . '=' . $resultat . '.</p>';
    // EXPONENTIELLE
    $resultat = $nombreUn ** $nombreDeux;
    echo    '<h2>EXPONENTIELLE</h2>
            <p>' . $nombreUn . 'ex' . $nombreDeux . '=' . $resultat . '.</p>';


    // INCREMENTATION
    $resultat = 10;
    $resultat ++;
    echo    '<h2>INCREMENTATION</h2>
    <p>' . $resultat . '</p>';
    $resultat +=4;
    echo '<p>' . $resultat . '</p>';
    // DECREMENTATION
    $resultat--;
    echo  '<h2>DECREMENTATION</h2>
    <p>' . $resultat . '</p>';
    $resultat -=4;
    echo '<p>' . $resultat . '</p>';
    
?>
    
</body>
</html>