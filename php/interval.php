<?php
    include_once('../php/bdd.php');
    $interval = $_POST['interval'];
    $statement = $db->prepare("UPDATE restaurant SET inter = :interval");
    $statement->bindParam(':interval', $interval, PDO::PARAM_INT);
    $statement->execute();
    header('location:../administration.php');
?>