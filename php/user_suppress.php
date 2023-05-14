<?php
    include_once('../php/bdd.php');
    $listUsers = $_POST['listUsers'];
    $statement = $db->prepare("DELETE FROM users WHERE user_email =:useremail");
    $statement->bindValue(':useremail', $listUsers, PDO::PARAM_STR);
    $statement->execute();
    header('location:../administration.php');
?>