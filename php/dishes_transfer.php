<?php
    $dishName = $_POST['dishName'];
    $dishDesc = $_POST['dishDesc'];
    $dishPrice = $_POST['dishPrice'];
    $dishCategory = $_POST['dishCategory'];

    include_once('../php/bdd.php');
    $statement = $db->prepare("SELECT title FROM dishes WHERE title=:dishTitle");
    $statement->bindValue(':dishTitle', $dishName);
    $statement->execute();
    $select = $statement->fetch();
    if ($select != '') {
        $delRow = $db->prepare("UPDATE dishes SET title=:title, description=:description, price=:price, category=:category WHERE title = :title");
        $delRow->bindParam(':title', $dishName);
        $delRow->bindParam(':description', $dishDesc);
        $delRow->bindParam(':price', $dishPrice);
        $delRow->bindParam(':category', $dishCategory);
        $delRow->execute();
    } else {
        $insertRow = $db->prepare("INSERT INTO dishes (title, description, price, category) VALUES (:dishName, :dishDesc, :dishPrice, :dishCategory)");
        $insertRow->bindValue(':dishName', $dishName);
        $insertRow->bindValue(':dishDesc', $dishDesc);
        $insertRow->bindValue(':dishPrice', $dishPrice);
        $insertRow->bindValue(':dishCategory', $dishCategory);
        $insertRow->execute();
    };   
    header('location:../administration.php');
?>