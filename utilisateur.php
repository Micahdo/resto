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
<div class="divConnect">
    <form action="php/login.php" method="post">
        <div class="alCol">
            <label for="username">Identifiant :</label>
            <input type="email" name="username">
        </div>
        <div class="alCol">
            <label for="password">Mot de passe :</label>
            <input type="text" name="password">
        </div>
        <button class="btn">Connexion</button>
    </form>
</div>
<div class="divConnect">
    <form action="creation_de_compte.php" method="post">
        <button class="btn">Créer un compte</button>
    </form>
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

</body>

</html>