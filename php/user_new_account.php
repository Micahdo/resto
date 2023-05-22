<?php
    // On récupère les valeurs entrées par le client
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $seats = $_POST['seats'];
    $gluten = $_POST['gluten'];
    $crustaces = $_POST['crustaces'];
    $oeufs = $_POST['oeufs'];
    $poissons = $_POST['poissons'];
    $arachides = $_POST['arachides'];
    $soja = $_POST['soja'];
    $lait = $_POST['lait'];
    $coques = $_POST['coques'];
    $celeri = $_POST['celeri'];
    $moutarde = $_POST['moutarde'];
    $sesame = $_POST['sesame'];
    $sulfites = $_POST['sulfites'];
    $lupin = $_POST['lupin'];
    $mollusques = $_POST['mollusques'];    

    include_once('../php/bdd.php');

    //On interroge la base de données pour vérifier si l'email est déjà présent dans la base de données
    $statement = $db->prepare("SELECT user_email FROM users WHERE user_email = :useremail");
    $statement->bindValue(":useremail", $email);
    $statement->execute();
    $result = $statement->fetch();
        
    if ($result) {
        //Message si l'adresse email entrée existe déjà dans la base de données
        echo 'Cette adresse email existe déjà';
    } else {
        if ($gluten == 0 && $crustaces == 0 && $oeufs == 0 && $poissons == 0 && $arachides == 0 && $soja == 0 && $lait == 0 && $coques == 0 && $celeri == 0 && $moutarde == 0 && $sesame == 0 && $sulfites == 0 && $lupin == 0 && $mollusques == 0) {
            $id = 1;
        } else {
            $statement = $db->prepare("INSERT INTO allergies (gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) 
            VALUES ($gluten, $crustaces, $oeufs, $poissons, $arachides, $soja, $lait, $coques, $celeri, $moutarde, $sesame, $sulfites, $lupin, $mollusques)");
            $statement->execute();
            $id = $db->lastInsertId();
        }  
            
        //Création du compte dans la base de données
        if (!empty($email) && !empty($password) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $statement = $db->prepare("INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES (UUID(), :useremail, :password, :username, :admin, :seats, :allergy)");
            $statement->bindValue(":useremail", $email);
            $statement->bindValue(":password", password_hash($password, PASSWORD_BCRYPT));
            $statement->bindValue(":username", $username);
            $statement->bindValue(":admin", 0);
            $statement->bindValue(":seats", $seats);
            $statement->bindValue(':allergy', $id);
            $statement->execute();
        };
        echo 'Votre compte a été créé.';            
    };     
?>