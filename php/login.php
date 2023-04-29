<?php
session_start();
if (($_POST['username'] === 'bob@hotmail.com') && ($_POST['password'] === 'bob')) {
    header('location:../administration.php');
    $_SESSION['username'] = $_POST['username'];
} else {
    header('location:../utilisateur.php');
};
?>