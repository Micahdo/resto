<?php
    $dateInput = $_POST['dateInput'];

    include_once('../php/bdd.php');

    //On récupère les données pour le midi
    $noonStatement = $db->prepare("SELECT
        DATE_FORMAT(booking_date, '%d-%m-%Y') AS booking_date,
        booking_noon,
        booking_user,
        booking_time,
        id_allergy
        FROM bookings 
        WHERE booking_date = :bookingdate
        AND booking_noon != 0
        ORDER BY booking_time");
    $noonStatement->bindValue(':bookingdate', $dateInput);
    $noonStatement->execute();
    $noonResult = $noonStatement->fetchAll();

    //On récupère les données pour le midi
    $eveningStatement = $db->prepare("SELECT
        DATE_FORMAT(booking_date, '%d-%m-%Y') AS booking_date,
        booking_evening,
        booking_user,
        booking_time,
        id_allergy
        FROM bookings 
        WHERE booking_date = :bookingdate
        AND booking_evening != 0
        ORDER BY booking_time");
    $eveningStatement->bindValue(':bookingdate', $dateInput);
    $eveningStatement->execute();
    $eveningResult = $eveningStatement->fetchAll();
    
    //On récupère le total de couverts pour le midi et le soir
    $totalStatement = $db->prepare("SELECT
        SUM(booking_noon) AS sbnoon,
        SUM(booking_evening) AS sbevening
        FROM bookings 
        WHERE booking_date = :bookingdate");
    $totalStatement->bindValue(':bookingdate', $dateInput);
    $totalStatement->execute();
    $totalResult = $totalStatement->fetchAll();

    $date = date_create($dateInput);
    echo '<h5>Couverts du '.date_format($date, "d-m-Y").' midi ('.$totalResult[0]['sbnoon'].') :</h5>';
    echo '<div class="flexCol">';
        echo '<ul>';
        //On affiche toutes les réservations du midi pour la date sélectionnée
        foreach($noonResult as $noonReservation){
            echo '<li class="flexCol">';
                echo '<span class="allergies-list">'.$noonReservation["booking_time"].' : '.$noonReservation["booking_noon"].' place(s) au nom de '.$noonReservation["booking_user"].'</span>';
                $id = $noonReservation["id_allergy"];
                $allergyStatement = $db->prepare("SELECT gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques FROM allergies WHERE allergy_id = :id");
                $allergyStatement->bindValue(':id', $id);
                $allergyStatement->execute();
                $allergyResult = $allergyStatement->fetch();
                if ($id != 1) {
                    echo '<div class="allergies-admin">';
                    echo '<p>Allergies : </p>';
                    echo '<p>gluten = '.$allergyResult["gluten"].
                    ', crustacés = '.$allergyResult["crustaces"].
                    ', oeufs = '.$allergyResult["oeufs"].
                    ', crustacés = '.$allergyResult["crustaces"].
                    ', poissons = '.$allergyResult["poissons"].
                    ', arachides = '.$allergyResult["arachides"].
                    ', soja = '.$allergyResult["soja"].
                    ', lait = '.$allergyResult["lait"].
                    ', fruits à  coques = '.$allergyResult["coques"].
                    ', céleri = '.$allergyResult["celeri"].
                    ', moutarde = '.$allergyResult["moutarde"].
                    ', sésame = '.$allergyResult["sesame"].
                    ', sulfites = '.$allergyResult["sulfites"].
                    ', lupin = '.$allergyResult["lupin"];
                    ', mollusques = '.$allergyResult["mollusques"].'</p>';
                    
                    echo '</div>';
                };
                echo '<br>';
            echo '</li>';
        };
        echo '</ul>';
    echo '</div>';
    echo '<br>';
    echo '<hr>';
    echo '<br>';
    echo '<h5>Couverts du '.date_format($date, "d-m-Y").' soir ('.$totalResult[0]['sbevening'].') :</h5>';
    echo '<div class="flexCol">';
        echo '<ul>';
        //On affiche toutes les réservations du soir pour la date sélectionnée
        foreach($eveningResult as $eveningReservation){
            echo '<li class="flexCol">';
                echo '<span class="allergies-list">'.$eveningReservation["booking_time"].' : '.$eveningReservation["booking_evening"].' place(s) au nom de '.$eveningReservation["booking_user"].'</span>';
                $id = $eveningReservation["id_allergy"];
                $allergyStatement = $db->prepare("SELECT gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques FROM allergies WHERE allergy_id = :id");
                $allergyStatement->bindValue(':id', $id);
                $allergyStatement->execute();
                $allergyResult = $allergyStatement->fetch();
                if ($id != 1) {
                    echo '<div class="allergies-admin">';
                    echo '<p>Allergies : </p>';
                    echo '<p>gluten = '.$allergyResult["gluten"].
                    ', crustacés = '.$allergyResult["crustaces"].
                    ', oeufs = '.$allergyResult["oeufs"].
                    ', crustacés = '.$allergyResult["crustaces"].
                    ', poissons = '.$allergyResult["poissons"].
                    ', arachides = '.$allergyResult["arachides"].
                    ', soja = '.$allergyResult["soja"].
                    ', lait = '.$allergyResult["lait"].
                    ', fruits à  coques = '.$allergyResult["coques"].
                    ', céleri = '.$allergyResult["celeri"].
                    ', moutarde = '.$allergyResult["moutarde"].
                    ', sésame = '.$allergyResult["sesame"].
                    ', sulfites = '.$allergyResult["sulfites"].
                    ', lupin = '.$allergyResult["lupin"];
                    ', mollusques = '.$allergyResult["mollusques"].'</p>';
                    echo '</div>';
                };
            echo '</li>';
        };
        echo '</ul>';
    echo '</div>';
?>