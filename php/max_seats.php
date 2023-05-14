<?php
    include_once('../php/bdd.php');
    $seats = $_POST['max-seats'];
    $statement = $db->prepare("UPDATE restaurant SET max_seats = :seats");
    $statement->bindParam(':seats', $seats, PDO::PARAM_INT);
    $statement->execute();
    header('location:../administration.php');
?>