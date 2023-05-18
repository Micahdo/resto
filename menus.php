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

        <?php
            include_once('php/bdd.php');
            //On récupère la liste des menus
            foreach ($db->query('SELECT menu_title FROM menus GROUP BY menu_title') as $menu) {
                echo '<ul class="flexCol">';
                echo '<h3>'.$menu['menu_title'].'</h3>';
                $f = $db->prepare('SELECT * FROM menus WHERE menu_title = :mt');
                $f->bindValue(':mt', $menu['menu_title']);
                $f->execute();
                $fResult = $f->fetchAll();
                foreach($fResult as $formule){
                    echo '<li class="liTitle">'.$formule["formule_title"].'</li>';
                    echo '<li><p>'.$formule["formule_period"].'</p></li>';
                    echo '<li class="liDesc">'.nl2br($formule["formule_desc"]).'</li>';
                    echo '<li class="liPrice">'.$formule["formule_price"].'</li>';
                    echo '</li>';
                };
                echo '</ul>';
            };

        ?>

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