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

.centre{
    margin-top:10%;
}
</style>

<form action="" method="post" class="border border-primary border-3 mx-auto w-25 p-4 pt-5 fw-bold centre">
    <p class="text-center">Créer un compte</p>
    <table>
        <tr>
            <td>Nom</td>
            <td><input type="text" name="nom" class="mb-2"></td>
        </tr>
        <tr>
            <td>Prénom</td>
            <td><input type="text" name="prénom" class="mb-2"></td>
        </tr>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login" class="mb-2"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" class="mb-3"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Creer le compte" class="fw-bold mb-2"></td>
        </tr>
    </table>
    <p>Déjà un compte?...<a href="index.php">Se connecter</a></p>
</form>

<?php
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    $nom = $_POST["nom"];
    $prenom = $_POST["prénom"];
    $login = $_POST["login"];
    function grainDeSel($x){
        $chars = '0123456789abcdef';
        $string = '';
        for($i = 0; $i < $x; $i++){
            $string .= $chars[rand(0, strlen($chars) - 1)];
        }
        return $string;
    }

    $sel = grainDeSel(rand(5,15));
    $mdp3Md5 = md5($_POST['password']);
    $mdp3Md5Sel = $sel . $mdp3Md5;
    // Rajouter manuellement une nouvelle section
    $requete = $bdd->exec("INSERT INTO users(nom, prenom, login, password, sel)
                            VALUES('$nom', '$prenom', '$login', '$mdp3Md5Sel', '$sel')");
}
?>