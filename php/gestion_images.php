<?php
require('php/bdd.php');
//Création d'un tableau vide
$imgArray = array();
$txtArray = array();
//On fait une recherche des noms de fichier et d'image jusqu'à en avoir 18
for ($i = 0; $i <= 15; $i++) {
    $imgStatement = $db->prepare("SELECT file, name FROM images WHERE id_img = :id_img");
    $imgStatement->bindValue(":id_img", $i);
    $imgStatement->execute();
    $imgResult = $imgStatement->fetchAll();
    //On ajoute tous les noms de fichier récupérés dans le tableau $imgArray
    foreach ($imgResult as $result) {
        $imgArray[] = $result['file'];
        $txtArray[] = $result['name'];
    };
};
?>