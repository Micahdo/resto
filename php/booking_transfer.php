<?php
    // On récupère les valeurs entrées par le client
    $date = $_POST['date'];
    $time = $_POST['hour'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $seats = $_POST['seats'];
    $day = $_POST['weekDay'];
    $gluten = $_POST['gluten'];
    $crustaces = $_POST['crustaces'];
    $oeufs = $_POST['oeufs'];
    $poissons = $_POST['poissons'];
    $arachides = $_POST['arachides'];
    $soja = $_POST['soja'];
    $lait = $_POST['lait'];
    $coques = $_POST['coques'];
    $celeri = $_POST['celeri'];
    $moutarde = $_POST['moutarde'];
    $sesame = $_POST['sesame'];
    $sulfites = $_POST['sulfites'];
    $lupin = $_POST['lupin'];
    $mollusques = $_POST['mollusques'];  

    include_once('../php/bdd.php');

    //On récupère la capacité totale du restaurant
    $seatsStatement = $db->prepare("SELECT max_seats FROM restaurant WHERE id = 1");
    $seatsStatement->execute();
    $maxSeats = $seatsStatement->fetch();

    //On vérifie si l'horaire choisi est lié au midi ou au soir
    $hourStatement = $db->prepare("SELECT * FROM opening_hours WHERE day = :hday");
    $hourStatement->bindValue(':hday', $day);
    $hourStatement->execute();
    $hourResult = $hourStatement->fetch();

    if ($time <= $hourResult['noon_end']) { //Si l'horaire choisi est inférieur à l'horaire de fin du midi...
        $resStatement = $db->prepare("SELECT SUM(booking_noon) AS sum_noon FROM bookings WHERE booking_date = :bookingdate");
        $resStatement->bindValue(':bookingdate', $date);
        $resStatement->execute();
        $resResult = $resStatement->fetch();
        $diffNoon = $maxSeats['max_seats'] - $resResult['sum_noon']; // On calcule la différence entre la capacité maximale du restaurant et la somme des couverts pour le midi pour le jour donné
        if ($seats > $diffNoon) { //Si le nombre de couverts choisi est supérieur au nombre de couverts restants pour le midi...
            echo 'Le nombre de couverts est malheureusement supérieur au nombre de places restantes pour le service du midi. Merci de réduire le nombre de couverts ou de choisir une autre date.';
        } else if ($seats <= $diffNoon) { //Si le nombre de couverts choisi est inférieur ou égal au nombre de couverts restants pour le midi...
            if ($gluten == 0 && $crustaces == 0 && $oeufs == 0 && $poissons == 0 && $arachides == 0 && $soja == 0 && $lait == 0 && $coques == 0 && $celeri == 0 && $moutarde == 0 && $sesame == 0 && $sulfites == 0 && $lupin == 0 && $mollusques == 0) {
                $id = 1;
            } else {
                $statement = $db->prepare("INSERT INTO allergies (gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) 
                VALUES ($gluten, $crustaces, $oeufs, $poissons, $arachides, $soja, $lait, $coques, $celeri, $moutarde, $sesame, $sulfites, $lupin, $mollusques)");
                $statement->execute();
                $id = $db->lastInsertId();
            };               
            $bookingInsert = $db->prepare("INSERT INTO bookings (booking_date, booking_noon, booking_email, booking_user, booking_time, id_allergy) VALUES (:bdate, :bnoon, :bemail, :buser, :btime, :id)");
            $bookingInsert->bindValue(':bdate', $date);
            $bookingInsert->bindValue(':bnoon', $seats);
            $bookingInsert->bindValue(':bemail', $email);
            $bookingInsert->bindValue(':buser', $user);
            $bookingInsert->bindValue(':btime', $time);
            $bookingInsert->bindValue(':id', $id);
            $bookingInsert->execute();
            echo 'La réservation a bien été enregistrée pour le '.$date.' à '.$time;
        }        
    } else { //Dans le cas contraire...
        $resStatement = $db->prepare("SELECT SUM(booking_evening) AS sum_evening FROM bookings WHERE booking_date = :bookingdate");
        $resStatement->bindValue(':bookingdate', $date);
        $resStatement->execute();
        $resResult = $resStatement->fetch();
        $diffEvening = $maxSeats['max_seats'] - $resResult['sum_evening']; // On calcule la différence entre la capacité maximale du restaurant et la somme des couverts pour le soir pour le jour donné
        if ($seats > $diffEvening) { //Si le nombre de couverts choisi est supérieur au nombre de couverts restants pour le soir...
            echo 'Le nombre de couverts est malheureusement supérieur au nombre de places restantes pour le service du soir. Merci de réduire le nombre de couverts ou de choisir une autre date.';
        } else if ($seats <= $diffEvening) { //Si le nombre de couverts choisi est inférieur ou égal au nombre de couverts restants pour le soir...
            if ($gluten == 0 && $crustaces == 0 && $oeufs == 0 && $poissons == 0 && $arachides == 0 && $soja == 0 && $lait == 0 && $coques == 0 && $celeri == 0 && $moutarde == 0 && $sesame == 0 && $sulfites == 0 && $lupin == 0 && $mollusques == 0) {
                $id = 1;
            } else {
                $statement = $db->prepare("INSERT INTO allergies (gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) 
                VALUES ($gluten, $crustaces, $oeufs, $poissons, $arachides, $soja, $lait, $coques, $celeri, $moutarde, $sesame, $sulfites, $lupin, $mollusques)");
                $statement->execute();
                $id = $db->lastInsertId();
            }; 
            $bookingInsert = $db->prepare("INSERT INTO bookings (booking_date, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (:bdate, :bevening, :bemail, :buser, :btime, :id)");
            $bookingInsert->bindValue(':bdate', $date);
            $bookingInsert->bindValue(':bevening', $seats);
            $bookingInsert->bindValue(':bemail', $email);
            $bookingInsert->bindValue(':buser', $user);
            $bookingInsert->bindValue(':btime', $time);
            $bookingInsert->bindValue(':id', $id);
            $bookingInsert->execute();
            echo 'La réservation a bien été enregistrée pour le '.$date.' à '.$time;
        }
    };
?>