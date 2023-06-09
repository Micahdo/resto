<?php
include_once('php/bdd.php');
//Création d'un tableau vide
$imgArray = array();
$txtArray = array();
//On fait une recherche des noms de fichier et d'image jusqu'à en avoir 15
for ($i = 0; $i <= 15; $i++) {
    $imgStatement = $db->prepare("SELECT file, name FROM images WHERE id_img = :idimg");
    $imgStatement->bindValue(":idimg", $i);
    $imgStatement->execute();
    $imgResult = $imgStatement->fetchAll();
    //On ajoute tous les noms de fichier récupérés dans le tableau $imgArray
    foreach ($imgResult as $result) {
        $imgArray[] = $result['file'];
        $txtArray[] = $result['name'];
    };
};
?>