<?php

session_start();

try{
    $bdd = new PDO(
        'mysql:host=localhost;dbname=connexion;charset=utf8',
        'nouvel_utilisateur',
        'mot_de_passe'
        );
    }catch(Exception $e){
        die('Erreur: '. $e->getMessage());
    }

$sql = "SELECT * FROM journal";
$req = $bdd->prepare($sql);
$req -> execute();
$donnees = $req -> fetchAll();

try{
    $bdd = new PDO(
        'mysql:host=localhost;dbname=connexion;charset=utf8',
        'nouvel_utilisateur',
        'mot_de_passe'
        );
    }catch(Exception $e){
        die('Erreur: '. $e->getMessage());
    }

$sql = "SELECT * FROM connexion";
$req = $bdd->prepare($sql);
$req -> execute();
$donnees2 = $req -> fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Journal de bord</title>
</head>
<body>


<?php
if (isset($_SESSION["prenom"]) && $_SESSION["prenom"] === "admin") {
    echo "<header><li><a href='page_principal.php'>Retour à l'accueil</a></li></header>";
} else {
    echo 
'<div id="banniere">
        <header>
            <nav>
                <ul>
                    <li><a class="lien" href="page_principal.php">Accueil</a></li>
                    <li><a class="lien" href="projet.php">Projets</a></li>
                    <li><a class="lien" href="parcours_certif.php">Certification</a></li>
                    <li><a class="lien" href="veille_techno.php">Veille technologique</a></li>
                    <li><a class="lien" href="../documents/cv_2024.pdf" download="cv_2024.pdf">CV</a></li>
                </ul>
            </nav>
        </header>
    </div>';
}

echo '<br><br><h2 class="titre_page">Journal de Bord STAGE</h2>';

?>




<?php

if(isset($_SESSION["prenom"]) && $_SESSION["prenom"] === "admin") {
    // Affichage du formulaire pour l'admin
    ?>
    <div id="cont_form_stage">
    <form id="form_stage" method='post' action='traitement_jdb.php'>
        <label for='date'>Date</label>
        <input class="case_form" type='text' name='date'><br><br>
        <label for='contenu'>Contenu</label><br>
        <textarea id='story' name='contenu' rows='50' cols='150'></textarea><br><br>
        <input class="boutton" type='submit' value='Envoyer'>
    </form>
    </div>
    <?php
}

// Affichage des comptes rendus pour tous les utilisateurs
echo "<div class='conteneur3'>";
foreach ($donnees as $d){
    echo "<div class='blocJDB' id='jdb_" . $d['id'] . "'>";
    echo "<br>";
    echo "<p>Date : " . $d["date"] . "<br>Contenu : " . $d["contenu"] . "</p>";
    if(isset($_SESSION["prenom"]) && $_SESSION["prenom"] === "admin") {
        // On affiche le bouton de suppression si l'utilisateur est admin
        echo "<form method='POST' action='traitement_suppression.php'>";
        echo "<input type='hidden' name='id' value='" . $d['id'] . "'>";
        echo "<input class='boutton_supp' type='submit' value='supprimer')>";
        echo "</form>";
    }
    echo "<br>";
    echo "</div>";
}
echo "</div>";

?>

        
    <script src="../js/supprimer.js"></script>

</body>
</html>
