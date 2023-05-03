<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
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
    <h2>Réservation</h2>
        <input type="date">
        <select name="nbCouverts" id="nbCouverts" class="">
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

        <p>Afficher la liste des horaires disponibles en fonction du jour choisi</p>
        <p>Calcul des disponibilités et mise à jour en temps réel avec JS</p>
        <p>Comparaison entre le nombre couverts max pour le jour souhaité et le nombre de couverts demandés</p>
        <p>Quantité max de couverts déterminée par l'administrateur.</p>

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