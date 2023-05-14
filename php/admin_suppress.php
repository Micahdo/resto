<?php
    include_once('../php/bdd.php');
    $listDelAdmins = $_POST['listDelAdmins'];
    $statement = $db->prepare("UPDATE users SET user_admin = 0 WHERE user_email =:useremail");
    $statement->bindParam(':useremail', $listDelAdmins, PDO::PARAM_STR);
    $statement->execute();
    header('location:../administration.php');
?>