<?php
    // On récupère les valeurs entrées par le client
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $seats = $_POST['seats'];
    
    //On interroge la base de données pour vérifier s'il l'email est déjà présent dans la base de données
    include_once('../php/bdd.php');
    $statement = $db->prepare("SELECT user_email FROM users WHERE user_email = :useremail");
    $statement->bindValue(":useremail", $email);
    $statement->execute();
    $result = $statement->fetch();
    
    if ($result) {
        echo 'Cette adresse email existe déjà';
    } else {
        //Création du compte dans la base de données
        if (!empty($email) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $statement = $db->prepare("INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats) VALUES (UUID(), :useremail, :password, :username, :admin, :seats)");
            $statement->bindValue(":useremail", $email);
            $statement->bindValue(":password", password_hash($password, PASSWORD_BCRYPT));
            $statement->bindValue(":username", $username);
            $statement->bindValue(":admin", 0);
            $statement->bindValue(":seats", $seats);
            $statement->execute();
        };
        echo 'Votre compte a été créé.';
    };
?>