<?php
$servername = "localhost";
$username = "root";
$password = '';

try {
    $conn = new PDO("mysql:host:=$servername;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $creation = $conn->query("CREATE DATABASE IF NOT EXISTS test");
    $creation->execute();
    echo "La base de données a été créée avec le nom quai_antique2";
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
};

try {
    $conn = new PDO("mysql:host:=$servername;dbname=test;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = file_get_contents('sql/all.sql');
    $conn->exec($query);
    echo "Les tables ont été créées";
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
};

$conn = null;
?>