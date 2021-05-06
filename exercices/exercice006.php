<?php 
    $titre = "Exercice Série 016 - Hebergeur d'images";
    require "../common/template.php";
    if(isset($_FILES["fichier"]) && $_FILES["fichier"]["error"] == 0){
        if($_FILES["fichier"]["size"] <= 10000000){
            $extensionArray = ["png", "gif", "jpg", "JPEG", "jfif", "jpeg"];
            $infoFichier = pathinfo($_FILES["fichier"]["name"]);
            $extensionImage = $infoFichier["extension"];
            if(in_array($extensionImage, $extensionArray)){
                $destination = "uploads/" . time() . basename($_FILES["fichier"]["name"]);
                move_uploaded_file($_FILES["fichier"]["tmp_name"], $destination);
                echo "<h3 class='green'>Envoi du fichier " . $_FILES["fichier"]["name"] . " réussi !!!</h3>";
                echo "<img class='center' src='$destination'>";
            }
        }else{
            echo "<h3 class='red'>Le fichier est trop volumineux</h3>";
        }   
    } 
    ?>
<style>
        .border2{
            display:inline-block;
            border: 3px solid gray;
            padding: 1em;
            margin: 1em;
        }
        .image{
            flex-direction: row;
            text-align: center;
            background-color: white;
            padding: 0.3rem 0.3rem 1.5rem 0.3rem;
            margin: 2rem;
        }
        .imageBorder{
            border: 2px solid green;
            max-width: 7rem;
            margin-bottom: 1rem;
        }
        .miseEnPage{
            background: rgb(0,212,255);
            background: linear-gradient(90deg, rgba(0,212,255,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        h2{
            color:white;
            padding-top: 1.5rem;
        }
        .image a{
            text-decoration: none;
            color:black;
        }
        .image a:hover{
            text-decoration: none;
            color:black;
        }
        .green{
            color:green;
            margin-left:37%;
        }
        .red{
            color:red;
            margin-left:37%;
        }
        .center{
            margin-left:40%;
            width: 20%;
            border: 2px solid green;
        }
    </style>
<div>
    <form method="post" action="" enctype="multipart/form-data" class="border2">
    <h3>Uploader un fichier...</h3>
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
            <table>
                <tr>
                    <td><input type="file" name="fichier"></td>
                </tr>
                <tr>
                    <td><input type="submit" /></td>
                </tr>
    
            </table>
        </form>
</div>
<?php 
    $dir = "./uploads";
    $fichiers = scandir($dir);
?>
<div class="miseEnPage">
<div>
<h2>Liste des images disponible</h2>
</div>
<div class="miseEnPage">
    <?php 
        foreach($fichiers as $values){
            if($values != "." && $values != ".."){
                $name = substr($values, 10);
                echo '
                    <div class="image">
                        <a href="./uploads/' . $values . '">
                        <img class="imageBorder" src="./uploads/' . $values . '" alt="' . $values . '" />
                        <p>' . $name . ' </p></a>
                        
                    </div>
                ';
            }
        }
    ?>
</div>
</div>
