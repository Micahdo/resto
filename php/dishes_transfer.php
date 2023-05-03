<?php
    $dishName = $_POST['dishName'];
    $dishDesc = $_POST['dishDesc'];
    $dishPrice = $_POST['dishPrice'];
    $dishCategory = $_POST['dishCategory'];
    include_once('../php/bdd.php');
    $selectStatement = $db->prepare("SELECT title FROM dishes WHERE title='$dishName'");
    $selectStatement->execute();
    $select = $selectStatement->fetch();
    if ($select != null)
    {
        $delRow = $db->prepare("UPDATE dishes SET title=:title, description=:description, price=:price, category=:category WHERE title = :title");
        $delRow->bindParam(':title', $dishName);
        $delRow->bindParam(':description', $dishDesc);
        $delRow->bindParam(':price', $dishPrice);
        $delRow->bindParam(':category', $dishCategory);
        $delRow->execute();
    } else {
        $insert = $db->prepare("INSERT INTO dishes (title, description, price, category) VALUES ('$dishName', '$dishDesc', '$dishPrice', '$dishCategory')");
        $insert->execute();
    };   
    header('location:../administration.php');
?>