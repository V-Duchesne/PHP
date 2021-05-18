<?php 
    $titre = "Exercice 17 - traiter un formulaire avec une base de données";
    $sousSite = "../..";
    require "../../common/template.php"; 
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_php2;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur: ' . $e->getMessage());
    };
?>

<style>
.bg-input{
    background-color:lightblue;
}
.centre{
    margin-top:10%;
}
</style>

<form action="" method="post" class="border border-primary border-3 mx-auto w-25 p-4 pt-5 fw-bold centre">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login" class="bg-input mb-2"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" class="bg-input mb-3"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Se connecter" class="fw-bold mb-2"></td>
        </tr>
    </table>
    <p>Pas encore inscrit?...<a href="inscription.php">S'enregistrer</a></p>
</form>

<?php
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
$login = $_POST["login"]; 

$sel = $bdd->prepare('SELECT sel FROM users WHERE login = ?');
$sel->execute(array($login));
while ($donnees = $sel->fetch()){$sel2 = $donnees['sel'];};

$passwordMd5 = md5($_POST["password"]);
$password = $sel2 . $passwordMd5 ;
}
if(isset($_POST["login"]) && isset($_POST["password"])){
    $requete = $bdd->prepare('SELECT * FROM users WHERE login= ? AND password = ?');
    $requete->execute(array($login, $password));

    while($données = $requete -> fetch()){
        echo '<p>bonjour '.$données["prenom"].', tu es maintenant connecté</p>';
    }
}
?>