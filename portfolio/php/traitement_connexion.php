<?php

session_start();


$prenom = $_POST["prenom"];
$mdp = $_POST["mdp"];


try{
$bdd = new PDO(
    'mysql:host=localhost;dbname=connexion;charset=utf8',
    'nouvel_utilisateur',
    'mot_de_passe'
    );
}catch(Exception $e){
    die('Erreur: '. $e->getMessage());
}

$sql = "SELECT COUNT(*) FROM connexion WHERE prenom=:prenom AND mdp=:mdp";
$req = $bdd->prepare($sql);

$req->bindParam(":prenom", $prenom, PDO::PARAM_STR);
$req->bindParam(":mdp", $mdp, PDO::PARAM_STR);

$req->execute();
$donnees = $req->fetchColumn();

if ($donnees == 1) {
    $_SESSION["prenom"] = $prenom;
    header("Location: page_principal.php?$prenom");
    die();
} else {
    header("Location: index.php?invalidData"); 
    die();
}
?>

