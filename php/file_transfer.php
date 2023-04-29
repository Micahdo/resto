<?php
    $img_file = pathinfo($_POST['img'], PATHINFO_BASENAME);
    $img_name = $_POST['imgName'];
    $img_number = $_POST['imgNumber'];
    include_once('php/bdd.php');
    $idStatement = $db->prepare("SELECT id_img FROM images WHERE id_img = $img_number");
    $idStatement->execute();
    $idNumber = $idStatement->fetch();

    if ($idNumber != null)
    {
        $delete_row = $db->prepare("DELETE FROM images WHERE id_img = $img_number");
        $delete_row->execute();
    };
    $insert = "INSERT INTO images (id_img, name, file) VALUES ('$img_number', '$img_name', '$img_file')";
    $db->query($insert);
    header('location:../administration.php');
?>