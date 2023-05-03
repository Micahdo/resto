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

    <h2>Créer un compte client</h2>
        <div>
            <form action="php/new_account.php" method="post">
                <label for="username">Veuillez entrer votre identifiant</label>
                <input type="email" name="username">
                <label for="password">Veuillez entrer votre mot de passe</label>
                <input type="text" name="password">
                <label for="convives">Veuillez entrer le nombre de convives par défaut</label>
                <input type="number" name="convives">
                <button class="btn">Valider</button>
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