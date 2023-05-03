<?php
    session_start();
    //Récupération des valeurs du formulaire
    $user_email = htmlspecialchars($_POST['user_email']);
    $user_password = htmlspecialchars($_POST['user_password']);
    $error = '';

    if ($user_email == NULL || $user_password == NULL) {
        $error = 'Veuillez renseigner une adresse email et un mot de passe.';
    } else {

        //Récupération des valeurs de la base de données
        include_once('../php/bdd.php');
        $userStatement = $db->prepare("SELECT * FROM users WHERE user_email = :user_email AND user_password = :user_password");
        $userStatement->bindValue(":user_email", $user_email);
        $userStatement->bindValue(":user_password", $user_password);
        $userStatement->execute();
        $userResult = $userStatement->fetch();

        //Comparaison
        if ($userResult != null && $userResult['user_admin'] == 1) {
            $_SESSION['user'] = $_POST['user_email'];
            $_SESSION['admin'] = 1;
            header('location:../administration.php');
        } else if ($userResult != null && $userResult['user_admin'] == 0) {
            $_SESSION['user'] = $_POST['user_email'];
            $_SESSION['admin'] = 0;
            header('location:../index.php');
        } else {
            $error = 'Adresse email ou mot de passe incorrect.';
            $_SESSION['user'] = '';
            $_SESSION['admin'] = 0;
        };
    };
?>