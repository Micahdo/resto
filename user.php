<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
        <div id="res"></div>
        <h2>Connexion utilisateur</h2>
        <div class="divConnect flexCol">
            <form action="php/login.php" method="post" class="flexCol" id="formConnexion">
                <div class="alCol">
                    <label for="user_email">Adresse email :</label>
                    <input type="email" name="user_email" id="user_email" class="input">
                </div>
                <div class="alCol">
                    <label for="user_password">Mot de passe :</label>
                    <input type="password" name="user_password" id="user_password" class="input">
                </div>
                <button type="submit" class="btn" id="btn-connect">Connexion</button>
            </form>
        </div>
            <div class="divConnect flexCol">
                <button  class="btn btn-open">Créer un compte</button>
            </div>
    </section>

    <aside class="modal hidden flexCol">
        <h2>Créer un compte client</h2>        
        <form method="post" class="flexCol" id="formCreation">
            <div class="flexCol">
                <label for="email">Votre adresse email</label>
                <input type="email" name="email" id="email" class="input">
            </div>
            <div class="flexCol">
                <label for="password">Votre identifiant</label>
                <input type="text" name="username" id="username" class="input">
            </div>
            <div class="flexCol">
                <label for="password">Votre mot de passe</label>
                <input type="password" name="password" id="password" class="input">
            </div>
            <div class="flexCol">
                <label for="seats">Nombre de couverts par défaut</label>
                <input type="number" name="seats" id="seats" value="1" min="1" max="10" class="input">
            </div>
            <button type="submit" class="btn" id="btn-creation">Valider</button>
        </form>
        <button class="btn-close">X</button>
    </aside>

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