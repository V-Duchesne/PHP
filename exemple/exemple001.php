<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple01</title>
</head>
<body>
    <?php
        echo "Bonjour, je suis un script php";
    ?>
    <!-- Ceci est un commentaire html -->
    <p>Ceci sera ignoré par PHP et affiché au navigateur.</p>
    <?php 
        // Ceci est un commentaire php
        /* Ceci est un commentaire 
        php sur plusieurs lignes*/
    ?>

    <?php echo 'Alors que ceci sera analysé par PHP.'; ?>
    <p>Ceci sera aussi ignoré par PHP et affiché au navigateur.</p>


    <?php 
        $expression = true;
        if ($expression == true): ?>
        <h2>Ceci sera affiché si l'expression est vraie.</h2>
    <?php else: ?>
        <h2>Sinon, ceci sera affiché.</h2>
    <?php endif; ?>

</body>
</html>