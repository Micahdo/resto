<?php
    foreach ($db->query('SELECT id_day, day, time_format(noon_start, "%H:%i"), time_format(noon_end, "%H:%i"), time_format(evening_start, "%H:%i"), time_format(evening_end, "%H:%i") FROM opening_hours ORDER BY id_day') as $hour) {
        $hour_noon_start = $hour['time_format(noon_start, "%H:%i")'];
        $hour_noon_end = $hour['time_format(noon_end, "%H:%i")'];
        $hour_evening_start = $hour['time_format(evening_start, "%H:%i")'];
        $hour_evening_end = $hour['time_format(evening_end, "%H:%i")'];
        echo '<div>';
        echo '<div>';
        echo '<p>'.$hour['day'].'</p>';
        echo '</div>';
        echo '<div>';
        if ($hour_noon_start == '00:00' && $hour_noon_end == '00:00') {
            echo '<p>Fermé</p>';
        } else {
            echo '<p>'.$hour_noon_start.' à '.$hour_noon_end.'</p>';
        };
        echo '</div>';
        echo '<div>';
        if ($hour_evening_start == '00:00' && $hour_evening_end == '00:00') {
            echo '<p>Fermé</p>';
        } else {
            echo '<p>'.$hour_evening_start.' à '.$hour_evening_end.'</p>';
        };
        echo '</div>';
        echo '</div>';
    };
?>