<?php
    $formule = $_POST['formule'];

    include_once('../php/bdd.php');
    $formule = $_POST['formule'];
    $delStatement = $db->prepare("DELETE FROM menus WHERE formule_title=:title");
    $delStatement->bindValue(':title', $formule);
    $delStatement->execute();
    echo 'La formule a bien été supprimée';