<?php
    // On récupère les valeurs entrées par le client
    $username = $_POST['username'];
    $password = $_POST['password'];

    //On interroge la base de données pour vérifier s'il le username est déjà présent dans la base de données
    include_once('../php/bdd.php');
    $userStatement = $db->prepare("SELECT user_email FROM users WHERE user_email = :useremail");
    $userStatement->bindValue(":useremail", $username);
    $userStatement->execute();
    $userResult = $userStatement->fetch();

    if ($userResult['user_email']) {
        echo ('Cet email existe déjà');
    } else {
        //Création du compte dans la base de données
        $insert = $db->prepare("INSERT INTO users (user_email, user_password) VALUES ('$username', '$password')");
        $insert->execute();
        echo ('Votre compte a été créé.');
    };
?>