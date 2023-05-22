<?php
    $menu = $_POST['menu'];
    $formule = $_POST['formule'];
    $period = $_POST['period'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    include_once('../php/bdd.php');

    $statement = $db->prepare("SELECT formule_title FROM menus WHERE formule_title = :ft");
    $statement->bindValue(':ft', $formule);
    $statement->execute();
    $result = $statement->fetch();

    if ($result['formule_title'] != $formule){
        $insertStatement = $db->prepare("INSERT INTO menus (menu_title, formule_title, formule_period, formule_desc, formule_price) VALUES (:mmenu, :mformule, :mperiod, :mdescription, :mprice)");
        $insertStatement->bindValue(':mmenu', $menu);
        $insertStatement->bindValue(':mformule', $formule);
        $insertStatement->bindValue(':mperiod', $period);
        $insertStatement->bindValue(':mdescription', $description);
        $insertStatement->bindValue(':mprice', $price);
        $insertStatement->execute();
        echo 'Le menu a bien été ajouté';
    } else {
        $updateStatement = $db->prepare("UPDATE menus SET menu_title = :fmenu, formule_title = :ftitle, formule_period = :fperiod, formule_desc = :fdescription, formule_price = :fprice WHERE formule_title = :ftitle");
        $updateStatement->bindValue(':fmenu', $menu);
        $updateStatement->bindValue(':ftitle', $formule);
        $updateStatement->bindValue(':fperiod', $period);
        $updateStatement->bindValue(':fdescription', $description);
        $updateStatement->bindValue(':fprice', $price);
        $updateStatement->execute();
        echo 'Le menu a été modifié';
    };
?>