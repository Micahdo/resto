<?php
    include_once('php/bdd.php');
    $listDishes = $_POST['listDishes'];
    $delRow = $db->prepare("DELETE FROM dishes WHERE title=:title");
    $delRow->bindParam(':title', $listDishes, PDO::PARAM_STR);
    $delRow->execute();
    header('location:../administration.php');
?>