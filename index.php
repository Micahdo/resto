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
        <?php
            include_once('php/images_management.php');
        ?>
        <h3 class="accueilTitre">Nos salades</h3>
        <div class="flexRow around">
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[0]?>" alt="">
                <p class="imageTitre"><?=$txtArray[0]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[1]?>" alt="">
                <p class="imageTitre"><?=$txtArray[1]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[2]?>" alt="">
                <p class="imageTitre"><?=$txtArray[2]?></p>
                <div class="imagePlatFond"></div>
            </div>
        </div>

        <h3 class="accueilTitre">Nos entrées chaudes</h3>    
        <div class="flexRow around">  
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[3]?>" alt="">
                <p class="imageTitre"><?=$txtArray[3]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[4]?>" alt="">
                <p class="imageTitre"><?=$txtArray[4]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[5]?>" alt="">
                <p class="imageTitre"><?=$txtArray[5]?></p>
                <div class="imagePlatFond"></div>
            </div>
        </div>

        <h3 class="accueilTitre">Nos assiettes de charcuterie</h3>
        <div class="flexRow around">
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[6]?>" alt="">
                <p class="imageTitre"><?=$txtArray[6]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[7]?>" alt="">
                <p class="imageTitre"><?=$txtArray[7]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[8]?>" alt="">
                <p class="imageTitre"><?=$txtArray[8]?></p>
                <div class="imagePlatFond"></div>
            </div>
        </div>

        <h3 class="accueilTitre">Nos spécialités</h3>
        <div class="flexRow around">        
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[9]?>" alt="">
                <p class="imageTitre"><?=$txtArray[9]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[10]?>" alt="">
                <p class="imageTitre"><?=$txtArray[10]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[11]?>" alt="">
                <p class="imageTitre"><?=$txtArray[11]?></p>
                <div class="imagePlatFond"></div>
            </div>
        </div>

        <h3 class="accueilTitre">Nos desserts maison</h3>
        <div class="flexRow around">        
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[12]?>" alt="">
                <p class="imageTitre"><?=$txtArray[12]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[13]?>" alt="">
                <p class="imageTitre"><?=$txtArray[13]?></p>
                <div class="imagePlatFond"></div>
            </div>
            <div class="imageAccueil">
                <img class="imagePlat" src="images/<?=$imgArray[14]?>" alt="">
                <p class="imageTitre"><?=$txtArray[14]?></p>
                <div class="imagePlatFond"></div>
            </div>
        </div>
        <br>
        <div class="flexCol">
            <a href="reservation.php">
                <button class="btn-booking-2">Réserver</button>
            </a>
        </div>
        <br>
    </section>

    <footer>
        <?php
            include_once('footer.php');
            $db=null;
        ?>
    </footer>

</body>

</html>