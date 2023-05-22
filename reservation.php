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

        <form method="post">
            <div class="flexCol">
                <div class="flexCol">
                    <p>Date de réservation : <span id="dateResult"></span></p>
                    <br>
                    <p>Horaire de réservation : <span id="hourResult"></span></p>
                </div>
                <br>
                <label for="booking-date">Choisir une date :</label>
                <input type="date" name="booking-date" id="booking-date" min="<?php echo date('Y-m-d');?>" class="input">
                <div id="result"></div>
                <br>
            </div>
            <div class="flexCol">
                <label for="booking-email">Votre adresse email :</label>
                <input type="email" name="booking-email" id="booking-email" class="input" value="<?php if (isset($_SESSION['email'])) {echo $_SESSION['email'];} ?>">
            </div>
            <div class="flexCol">
                <label for="booking-name">Nom de la réservation :</label>
                <input type="text" name="booking-name" id="booking-name" class="input" value="<?php if (isset($_SESSION['user'])) {echo $_SESSION['user'];} ?>">
            </div>
            <div class="flexCol">
                <label for="booking-seats">Nombre de couverts :</label>
                <input type="number" class="input" min="1" max="12"  name="booking-seats" id="booking-seats" value="<?php if (isset($_SESSION['seats'])) {echo $_SESSION['seats'];} ?>">
            </div>
            <?php
                include_once('allergies.php');
            ?>
            <div class="flexCol">
                <button class="btn" id="btn-booking">Valider</button>
            </div>            
        </form>
        <br>
        <h5>En cas d'annulation de votre réservation, merci de nous contacter au plus tôt par téléphone.</h5>
        <br>
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