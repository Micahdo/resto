<?php
    $weekDay = $_POST['weekDay'];

    include_once('../php/bdd.php');
    $dayStatement = $db->prepare(
        "SELECT 
        day, 
        noon_start, 
        ADDTIME(noon_start, '00:15:00') AS noon_15,
        SUBTIME(noon_end, '01:00:00') AS noon_end, 
        evening_start, 
        SUBTIME(evening_end, '01:00:00') AS evening_end 
        FROM opening_hours 
        WHERE day = :weekDay"
    );
    $dayStatement->bindValue(":weekDay", $weekDay);
    $dayStatement->execute();
    $result = $dayStatement->fetch();

    $intervalStatement = $db->prepare("SELECT inter FROM restaurant WHERE id = 1");
    $intervalStatement->execute();
    $intervalResult = ($intervalStatement->fetch());
    $interval = $intervalResult['inter']*60;

    //Affiche les horaires du midi si l'heure n'est pas 00:00:00
    if($result['noon_start'] != '00:00:00'){
        $noonStartTimestamp = strtotime($result['noon_start']);
        $noonEndTimestamp = strtotime($result['noon_end']);
        $noonIntervals;
        echo '<div class="flexCol booking-box">';
            echo '<p>'.$result['day'].' midi</p>';
            echo '<div class="flexRow booking-wrap">';
            for($i = $noonStartTimestamp; $i <= $noonEndTimestamp; $i = $i + $interval) {
                $noonIntervals = date('H:i', $i);
                echo '<input type="button" class="hourBox" id="btn-hour" onclick="hourClick()" value="'.$noonIntervals.'"</button>';
            };
            echo '</div>';
        echo '</div>';        
    }
    //Affiche les horaires du soir si l'heure n'est pas 00:00:00
    if($result['evening_start'] != '00:00:00'){
        $eveningStartTimestamp = strtotime($result['evening_start']);
        $eveningEndTimestamp = strtotime($result['evening_end']);
        $eveningIntervals;
        echo '<div class="flexCol booking-box">';
            echo '<p>'.$result['day'].' soir</p>';
            echo '<div class="flexRow booking-wrap">';
            for($j = $eveningStartTimestamp; $j <= $eveningEndTimestamp; $j = $j + $interval) {
                $eveningIntervals = date('H:i', $j);
                echo '<input type="button" class="hourBox" id="btn-hour" onclick="hourClick()" value="'.$eveningIntervals.'"</button>';
            };
            echo '</div>';
        echo '</div>';
    }
?>