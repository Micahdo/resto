<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
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

    <div class="carte">
        <h2>Carte du restaurant</h2>
        <?php
            include_once('php/bdd.php');
        ?>
            <h3>Salades</h3>
                <?php
                    echo '<ul class="ulDish">';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Salade"') as $dish) {
                        echo '<li class="liDish liTitle"><span"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish liDesc">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish liPrice">'.$dish['price'].'</li>';
                    };
                    echo'</ul>';
                ?>

            <h3>Entrées chaudes</h3>
                <?php
                    echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Entree chaude"') as $dish) {
                        echo '<li class="liDish"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish">'.$dish['price'].'</li>';
                    };
                    echo'</ul>';
                ?>

            <h3>Charcuterie</h3>
                <?php
                    echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Charcuterie"') as $dish) {
                        echo '<li class="liDish"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li liDish="ilDish">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish">'.$dish['price'].'</li>';
                    };
                    echo'</ul>';
                ?>

            <h3>Spécialités</h3>
                <?php
                    echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Spécialité"') as $dish) {
                        echo '<li class="liDish"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish">'.$dish['price'].'</li>';
                    };
                    echo'</ul>';
                ?>
            <h3>Desserts</h3>
            <?php
                echo '<ul>';
                    foreach ($db->query('SELECT * FROM dishes WHERE category = "Dessert"') as $dish) {
                        echo '<li class="liDish"><span class="dishTitle"><b>'.$dish['title'].'</li>';
                        if ($dish['description'] != null) {
                            echo '<li class="liDish">'.$dish['description'].'</li>';
                        };
                        echo '<li class="liDish">'.$dish['price'].'</li>';
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