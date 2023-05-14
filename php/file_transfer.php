<?php
    $img_file = $_FILES['img'];
    $img_file_name = $_FILES['img']['name'];
    $img_name = $_POST['imgName'];
    $img_number = $_POST['imgNumber'];
    $img_upload = 1;

    //Vérifie l'extension du fichier
    if (isset($img_file_name));
    {
        //Vérifie s'il y a une erreur
        if ($img_file['error'] !== UPLOAD_ERR_OK) {
            echo 'Erreur de chargement</br>';
            $img_upload = 0;
        };
        // Vérifie le poids du fichier
        if ($img_file['size'] > 1000000) {
            echo 'Le poids du fichier est supérieur à 1 Mo</br>';
            $img_upload = 0;
        };
        //Vérifie l'extension du fichier
        if ($img_file['type'] !== 'image/jpg' && $_FILES['img']['type'] !== 'image/jpeg' && $_FILES['img']['type'] !== 'image/png') {
            echo 'Veuillez sélectionner un fichier avec une estension jpg, jpeg ou png</br>';
            $img_upload = 0;
        };
        //Ajoute le fichier au répertoire images/
        if ($img_upload === 1) {
            move_uploaded_file($_FILES['img']['tmp_name'], '../images/'.$_FILES['img']['name']);
            include_once('../php/bdd.php');
            $idStatement = $db->prepare("SELECT id_img FROM images WHERE id_img = $img_number");
            $idStatement->execute();
            $idNumber = $idStatement->fetch();
            if ($idNumber != null)
            {
                $delete_row = $db->prepare("DELETE FROM images WHERE id_img = $img_number");
                $delete_row->execute();
            };
            $insert = "INSERT INTO images (id_img, name, file) VALUES ('$img_number', '$img_name', '$img_file_name')";
            $db->query($insert);
            header('location:../administration.php');
        }
    }
?>