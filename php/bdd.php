<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=quai_antique;charset=utf8', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Une erreur s\'est produite';
};
?>