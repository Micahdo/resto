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
        <div class="flexCol">
            <h3>Compte</h3>
            <h4>Bienvenue <?php if (isset($_SESSION['user'])) {echo $_SESSION['user'];}?></h4>
            


            <?php
                include_once('php/bdd.php');
                $statement = $db->prepare("SELECT * FROM bookings WHERE booking_email = :bemail");
                $statement->bindValue(":bemail", $_SESSION['email']);
                $statement->execute();
                $result = $statement->fetchAll();
    
                echo '<p> Réservations effectuées :</p>';
                echo '<ul>';
                foreach ($result as $bookings){
                    echo '<li><p>Date : '.date("d-m-Y", strtotime($bookings["booking_date"])).' | Places : '.$bookings["booking_time"].'</p></li>';
                };
                echo '</ul>';
                echo '<br>';
                include_once('allergies.php');
            ?>
        </div>

    </section>
    
    <?php
        $db=null;
    ?>

    <footer>
        <?php
            include_once('footer.php');
        ?>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/validation.js"></script>

</body>

</html>