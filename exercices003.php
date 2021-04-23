<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exercice 7</h2>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<table>
    <th>Nombre</th>
    <th>Carré</th>
    <th>Racine</th>
    <?php
    $nombre = 1;
    for($i = 0; $i <20; $i++){
        $carré = $nombre * $nombre;
        $racine = sqrt($nombre);
        echo '<tr><td>' . $nombre . '</td><td>' . $carré . '</td><td>' . $racine . '</td></tr>';
        $nombre++;
    }
    ?>
</table>
<h2>Exercice 8</p>
    <?php
    $rand = rand(5,15);
    $resultat = 0;
    $etape = 0;
    echo '<h3>Voici le cumul des ' . $rand . ' premiers nombres (sens inverse):</h3>';
    for($i = $rand; $i > 0; $i--){
        $resultat = $resultat + $i;
        $etape++;
        echo '<p>Etape: ' . $etape . ' - résultat = '. $resultat . '</p>';
    }
    ?>
<h2>Exercice 9</h2>
    <?php
    $essais = 0;
    do{
        $essais++;
        $rand1 = rand(1,20);
        if($rand1 <= 15){
            echo '<p>Essais ' . $essais . ': ' . $rand1 . ' est trop petit (<16)</p>';
        }else{
            echo '<p>Le nombre choisi est: ' .$rand1;
        }
    }while($rand1 <= 15);
    ?>
<h2>Exercice 10</h2>
    <?php
    $noteDeGuy = [];
    for($i = 0; $i < 20; $i++){
        $note = rand(0,20);
        array_push($noteDeGuy,$note);
    }
    $message = '';
    $moyenne = (($noteDeGuy[0] + $noteDeGuy[1] + $noteDeGuy[2] + $noteDeGuy[3] + $noteDeGuy[4] + $noteDeGuy[5] +
    $noteDeGuy[6] + $noteDeGuy[7] +$noteDeGuy[8] +$noteDeGuy[9] +$noteDeGuy[10] +$noteDeGuy[11] +$noteDeGuy[12] +
    $noteDeGuy[13] + $noteDeGuy[14] + $noteDeGuy[15] + $noteDeGuy[16] + $noteDeGuy[17] +$noteDeGuy[18] + $noteDeGuy[19]) / 20) * 5;
    if($moyenne <= 30){
        $message = 'ça ira mieux l\'année proshaine!!!';
    }elseif($moyenne > 30 && $moyenne <= 50){
        $message = 'Voilà pourquoi il ne faut pas regarder des stream jv durant les cours!';
    }elseif($moyenne > 50 && $moyenne <= 60){
        $message = 'pas de bol, t\'y était presque !!!';
    }elseif($moyenne > 60 && $moyenne <= 70){
        $message = 'ça passe... sans classe, mais ça passe !!!';
    }elseif($moyenne > 70 && $moyenne <= 80){
        $message = 'Bien joué, objectif atteint!!!';
    }else{
        $message = 'Master Class, 5 étoiles pour toi';
    }
    echo 'Note N°1: ' . $noteDeGuy[0] .
    ' | Note N°2: ' . $noteDeGuy[1] .
    ' | Note N°3: ' . $noteDeGuy[2] .
    ' | Note N°4: ' . $noteDeGuy[3] .
    ' | Note N°5: ' . $noteDeGuy[4] .
    ' | Note N°6: ' . $noteDeGuy[5] .
    ' | Note N°7: ' . $noteDeGuy[6] .
    ' | Note N°8: ' . $noteDeGuy[7] .
    ' | Note N°9: ' . $noteDeGuy[8] .
    ' | Note N°10: ' . $noteDeGuy[9] .
    ' | Note N°11: ' . $noteDeGuy[10] .
    ' | Note N°12: ' . $noteDeGuy[11] .
    ' | Note N°13: ' . $noteDeGuy[12] .
    ' | Note N°14: ' . $noteDeGuy[13] .
    ' | Note N°15: ' . $noteDeGuy[14] .
    ' | Note N°16: ' . $noteDeGuy[15] .
    ' | Note N°17: ' . $noteDeGuy[16] .
    ' | Note N°18: ' . $noteDeGuy[17] .
    ' | Note N°19: ' . $noteDeGuy[18] .
    ' | Note N°20: ' . $noteDeGuy[19] .
    '<h3> La moyenne de l\'année est de ' . $moyenne . ' : ' . $message . '</h3>';
    ?>
</body>
</html>