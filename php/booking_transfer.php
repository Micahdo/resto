<?php
    $date = $_POST['date'];
    $time = $_POST['hour'];
    $email = $_POST['email'];
    $user = $_POST['username'];
    $seats = $_POST['seats'];
    $day = $_POST['weekDay'];

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
            $bookingInsert = $db->prepare("INSERT INTO bookings (booking_date, booking_noon, booking_email, booking_user, booking_time) VALUES (:bdate, :bnoon, :bemail, :buser, :btime)");
            $bookingInsert->bindValue(':bdate', $date);
            $bookingInsert->bindValue(':bnoon', $seats);
            $bookingInsert->bindValue(':bemail', $email);
            $bookingInsert->bindValue(':buser', $user);
            $bookingInsert->bindValue(':btime', $time);
            $bookingInsert->execute();
            echo 'La réservation a bien été enregistrée pour le '.$date.' à '.$time;
        }        
    } else { //Si l'horaire choisi est supérieur à l'horaire de début du soir...
        $resStatement = $db->prepare("SELECT SUM(booking_evening) AS sum_evening FROM bookings WHERE booking_date = :bookingdate");
        $resStatement->bindValue(':bookingdate', $date);
        $resStatement->execute();
        $resResult = $resStatement->fetch();
        $diffEvening = $maxSeats['max_seats'] - $resResult['sum_evening']; // On calcule la différence entre la capacité maximale du restaurant et la somme des couverts pour le soir pour le jour donné
        if ($seats > $diffEvening) { //Si le nombre de couverts choisi est supérieur au nombre de couverts restants pour le soir...
            echo 'Le nombre de couverts est malheureusement supérieur au nombre de places restantes pour le service du soir. Merci de réduire le nombre de couverts ou de choisir une autre date.';
        } else if ($seats <= $diffEvening) { //Si le nombre de couverts choisi est inférieur ou égal au nombre de couverts restants pour le soir...
            $bookingInsert = $db->prepare("INSERT INTO bookings (booking_date, booking_evening, booking_email, booking_user, booking_time) VALUES (:bdate, :bevening, :bemail, :buser, :btime)");
            $bookingInsert->bindValue(':bdate', $date);
            $bookingInsert->bindValue(':bevening', $seats);
            $bookingInsert->bindValue(':bemail', $email);
            $bookingInsert->bindValue(':buser', $user);
            $bookingInsert->bindValue(':btime', $time);
            $bookingInsert->execute();
            echo 'La réservation a bien été enregistrée pour le '.$date.' à '.$time;
        }
    };
?>