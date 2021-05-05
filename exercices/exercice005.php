<?php 
    $titre = "Exercice Série 005 - Les formulaires 1/2";
    require "../common/template.php" ?>
    <style>
        .display{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .border{
            border: 1px solid black;
            padding: 1em;
            margin: 1em;
        }
        .button{
            background-color: blue;
            color:white;
            margin-top:1rem;
        }
    </style>
<h2>Exercice 15</h2>
<section class="display">
<div class="border">
<?php 
if(isset($_GET["age"]) && isset($_GET["prenom"])){
    echo "<p>Bonjour " . $_GET["prenom"] . ", tu as " . $_GET["age"] . " ans</p><p>cette section a été générée par la méthode GET</p>";
}?>
    <form method="get" action="">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>âge:</td>
                <td><input type="text" name="age" /></td>
            </tr>
        </table>
            <button class="button" type="submit">Envoyer</button>
    </form>
</div>
<div class="border">
    <?php 
if(isset($_POST["age"]) && isset($_POST["prenom"])){
    echo "<p>Bonjour " . $_POST["prenom"] . ", tu as " . $_POST["age"] . " ans</p><p>cette section a été générée par la méthode POST</p>";
}?>
    <form method="post" action="">
        <table>
            <tr>
                <td>Prénom:</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>âge:</td>
                <td><input type="text" name="age" /></td>
            </tr>
        </table>
            <button class="button" type="submit">Envoyer</button>
    </form>
</div>
</section>