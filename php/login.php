<?php
    session_start();
    //Récupération des valeurs du formulaire
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];

    //Récupération des valeurs de la base de données
    include_once('../php/bdd.php');
    $statement = $db->prepare("SELECT * FROM users WHERE user_email = :email");
    $statement->bindValue(":email", $email);
    if ($statement->execute()) {
        $result = $statement->fetch();
        if ($result === false) {
            echo 'Utilisateur inconnu';
        } else {
            if (password_verify($password, $result['user_password'])) {
                if ($result != null && $result['user_admin'] == 1) {
                    $_SESSION['email'] = $result['user_email'];
                    $_SESSION['user'] = $result['user_name'];
                    $_SESSION['admin'] = 1000;
                    header('location:../administration.php');
                } else if ($result != null && $result['user_admin'] == 0) {
                    $_SESSION['email'] = $result['user_email'];
                    $_SESSION['user'] = $result['user_name'];
                    $_SESSION['admin'] = 0;
                    header('location:../user.php');
                }
            } else {
                echo 'Impossible de récupérer l\'utilisateur';
            }
        }        
    } else {
        echo 'Impossible de récupérer l\'utilisateur';
    }
?>