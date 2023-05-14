<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Venez déguster les meilleures spécialités de la Savoie">
    <meta name="keywords" content="restaurant, savoie, chambery, fondue, raclette, brisgotte, cuisine, michant">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau&display=swap" rel="stylesheet">
    <title>Quai antique</title>
</head>

<body>

    <header>
        <?php
            include_once('header.php');
        ?>
    </header>

    <nav>
        <?php
            include_once('navigation.php');
        ?>
    </nav>

    <section>
        <h2>Réservation</h2>
        <?php
            //echo '<script>alert("'.$_SESSION["user"].'")</script>';
            //echo '<script>$("#booking-email").val() = '.$_SESSION["user"].'</script>';
            echo '<script>document.getElementById("booking-email").setAttribute(placeholder, "bob@hotmail.com")</script>';
        ?>
        
        <div class="flexCol">
            <label for="booking-date">Date de la réservation :</label>
            <input type="date" name="booking-date" id="booking-date" min="2023-01-01" class="input">
            <div id="result"></div>
            <div class="hourResult flexCol" id="hourResult"></div>
        </div>
        <div class="flexCol">
            <label for="booking-email">Votre adresse email :</label>
            <input type="email" name="booking-email" id="booking-email" class="input" placeholder="<?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>">
        </div>
        <div class="flexCol">
            <label for="booking-name">Nom de la réservation :</label>
            <input type="text" name="booking-name" id="booking-name" class="input" placeholder="<?php if (isset($_SESSION['user'])) {echo $_SESSION['user'];} ?>">
        </div>
        <div class="flexCol">
            <label for="booking-table">Nombre de couverts :</label>
            <select name="booking-table" id="booking-table">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </div>
        <div class="flexCol">
            <button class="btn" id="btn-booking">Valider</button>
        </div>

        <p>Si vous ne pouvez vous rendre au restaurant à l'heure que vous avez choisie, merci de nous l'indiquer au plus tôt en nous joignant par téléphone afin que nous puissions annuler votre réservation.</p>
        <br>
        <p>Afficher la liste des horaires disponibles en fonction du jour choisi</p>
        <p>Calcul des disponibilités et mise à jour en temps réel avec JS</p>
        <p>Comparaison entre le nombre couverts max pour le jour souhaité et le nombre de couverts demandés</p>
        <p>Quantité max de couverts déterminée par l'administrateur.</p>
        <p>Comparer la date choisie à la date actuelle (impossible de choisir une date avant la date actuelle).</p>
        <p>Table de réservation: date, horaire, nombre de couverts, nom de la réservation, email de la réservation</p>

    </section>

    <footer>
        <?php
            include_once('footer.php');
            $db=null;
        ?>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/booking.js"></script>

</body>

</html>