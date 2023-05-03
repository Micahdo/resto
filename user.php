<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau&display=swap" rel="stylesheet">
    <title>Quai antique</title>

</head>
<header>
    <?php
        include_once('header.php');
    ?>
</header>

<body>

<nav>
        <?php
            include_once('navigation.php');
        ?>
    </nav>
    
<section>

<h2>Connexion utilisateur</h2>
<div class="divConnect flexCol">
    <form action="php/login.php" method="post" class="flexCol">
        <div class="alCol">
            <label for="user_email">Adresse email :</label>
            <input type="email" name="user_email">
        </div>
        <div class="alCol">
            <label for="user_password">Mot de passe :</label>
            <input type="text" name="user_password">
        </div>
        <button class="btn">Connexion</button>
    </form>
</div>

</section>

<section>
    <div class="divConnect flexCol">
        <button  class="btn btn-open">Créer un compte</button>
    </div>
</section>

<aside class="modal hidden flexCol">
    <h2>Créer un compte client</h2>
    <form action="php/new_account.php" method="post" class="flexCol">
        <div class="alCol">
            <label for="username">Votre adresse email</label>
            <input type="email" name="username">
        </div>
        <div class="alCol">
            <label for="password">Votre mot de passe</label>
            <input type="text" name="password">
        </div>
        <div class="alCol">
            <label for="convives">Nombre de convives par défaut</label>
            <input type="number" name="convives">
        </div>
        <button class="btn">Valider</button>
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


<script type="text/javascript" src="js/modal.js"></script>
</body>

</html>