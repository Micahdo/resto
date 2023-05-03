<?php
    // On récupère les valeurs entrées par le client
    $username = htmlspecialchars($_POST['username']);
    $user_password = htmlspecialchars($_POST['password']);
    $user_convives = $_POST['convives'];
    
    //On interroge la base de données
    include_once('../php/bdd.php');
    $userStatement = $db->prepare("SELECT * FROM users WHERE user_email = :user_email AND user_password = :user_password");
    $userStatement->bindValue(":user_email", $username);
    $userStatement->bindValue(":user_password", $user_password);
    $userStatement->execute();
    $userResult = $userStatement->fetch();
    
    //On compare les valeurs à la base de données
    if ($username !== '' || $user_password !== '') {
        if ($userResult['user_email'] !== null) {
            //Message d'erreur si un compte avec la même adresse eùail existe déjà dans la base de données
            $error = 'Un compte existe déjà avec cette adresse email.';
            header('location:../user.php');
        } else {
            //Création du compte dans la base de données
            $insert = $db->prepare("INSERT INTO users (user_email, user_password) VALUES ('$username', '$user_password')");
            $insert->execute();
            header('location:../user.php');
        }
    };
?>