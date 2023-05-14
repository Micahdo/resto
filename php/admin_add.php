<?php
    include_once('../php/bdd.php');
    $listAddAdmins = $_POST['listAddAdmins'];
    $statement = $db->prepare("UPDATE users SET user_admin = 1 WHERE user_email =:useremail");
    $statement->bindParam(':useremail', $listAddAdmins, PDO::PARAM_STR);
    $statement->execute();
    header('location:../administration.php');
?>