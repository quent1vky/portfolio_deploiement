<?php

$id = $_POST["id"];

try {
    $bdd = new PDO(
        'mysql:host=localhost;dbname=connexion;charset=utf8',
        'nouvel_utilisateur',
        'mot_de_passe'
    );
} catch(Exception $e) {
    die('Erreur: '. $e->getMessage());
}

$sql = 'DELETE FROM journal WHERE id=:id';
$req = $bdd->prepare($sql);
$req->bindValue(':id', $id);
$req->execute();


header("location:journal.php");
die();

?>

