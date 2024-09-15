<?php

$id = $_POST["id"];
$date = $_POST["date"];
$contenu = $_POST["contenu"];


try{
    $bdd = new PDO(
        'mysql:host=localhost;dbname=connexion;charset=utf8',
        'nouvel_utilisateur',
        'mot_de_passe'
        );
    }catch(Exception $e){
        die('Erreur: '. $e->getMessage());
    }

if ($date == "" || $contenu == ""){
    header("location:journal.php?erreurInsertion");
    die();
}else{
    $sql = "INSERT INTO journal (id,date,contenu) VALUES (:id,:date,:contenu)";
    $req = $bdd->prepare($sql);
    $req -> bindParam(":id",$id,PDO::PARAM_STR);
    $req -> bindParam(":date",$date,PDO::PARAM_STR);
    $req -> bindParam(":contenu",$contenu,PDO::PARAM_STR);
    $req -> execute();
}
header("location:journal.php");
die();

?>


