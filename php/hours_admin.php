<?php
    $day = $_POST['day'];

    include_once('../php/bdd.php');
    $hourStatement = $db->prepare("SELECT noon_start, noon_end, evening_start, evening_end FROM opening_hours WHERE day = :day");
    $hourStatement->bindValue(":day", $day);
    $hourStatement->execute();
    $hourResult = $hourStatement->fetch();

    if ($day != 'Sélectionner un jour') {
        echo '<p>Midi (heure de début)</p>';
        echo '<input type="time" step="1" name="hour1" id="hour1" class="input" value="'.$hourResult['noon_start'].'">';
        echo '<p>Midi (heure de fin)</p>';
        echo '<input type="time" step="1" name="hour2" id="hour2" class="input" value="'.$hourResult['noon_end'].'">';
        echo '<p>Soir (heure de début)</p>';
        echo '<input type="time" step="1" name="hour3" id="hour3" class="input" value="'.$hourResult['evening_start'].'">';
        echo '<p>Soir (heure de fin)</p>';
        echo '<input type="time" step="1" name="hour4" id="hour4" class="input" value="'.$hourResult['evening_end'].'">';
    };
?>