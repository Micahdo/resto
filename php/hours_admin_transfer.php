<?php
    $day = $_POST['day'];
    $hour1 = $_POST['hour1'];
    $hour2 = $_POST['hour2'];
    $hour3 = $_POST['hour3'];
    $hour4 = $_POST['hour4'];
    var_dump($day);
    include_once('../php/bdd.php');

    if($day != 'Sélectionner un jour'){
        $hoursModify = $db->prepare("UPDATE opening_hours SET noon_start = :h1, noon_end = :h2, evening_start = :h3, evening_end = :h4 WHERE day = :day");
        $hoursModify->bindValue(":h1", $hour1);
        $hoursModify->bindValue(":h2", $hour2);
        $hoursModify->bindValue(":h3", $hour3);
        $hoursModify->bindValue(":h4", $hour4);
        $hoursModify->bindValue(":day", $day);
        $hoursModify->execute();
    }

?>