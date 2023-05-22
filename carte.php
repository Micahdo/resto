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

    <section >
        <div class="carte flexCol">
            <?php
                include_once('php/bdd.php');
            ?>
            <h3>Salades</h3>
            <?php
                echo '<ul>';
                foreach ($db->query('SELECT * FROM dishes WHERE category = "Salade"') as $dish) {
                    echo '<li class="liDish liTitle"><span" class="dishTitle"><b>'.$dish['title'].'</li>';
                    if ($dish['description'] != null) {
                        echo '<li class="liDish liDesc">'.$dish['description'].'</li>';
                    };
                    echo '<li class="liDish liPrice">'.$dish['price'].' € </li>';
                };
                echo'</ul>';
            ?>
            <hr>
            <h3>Entrées chaudes</h3>
                <?php
                    echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Entree chaude"') as $dish) {
                        echo '<li class="liDish liTitle"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish liDesc">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish liPrice">'.$dish['price'].' € </li>';
                    };
                    echo'</ul>';
                ?>
            <hr>
            <h3>Charcuterie</h3>
                <?php
                    echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Charcuterie"') as $dish) {
                        echo '<li class="liDish liTitle"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish liDesc">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish liPrice">'.$dish['price'].' € </li>';
                    };
                    echo'</ul>';
                ?>
            <hr>
            <h3>Spécialités</h3>
                <?php
                    echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Spécialité"') as $dish) {
                        echo '<li class="liDish liTitle"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish liDesc">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish liPrice">'.$dish['price'].' € </li>';
                    };
                    echo'</ul>';
                ?>
            <hr>
            <h3>Desserts</h3>

            <?php
                echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Dessert"') as $dish) {
                        echo '<li class="liDish liTitle"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish liDesc">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish liPrice">'.$dish['price'].' € </li>';
                };
                echo'</ul>';
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

</body>

</html>