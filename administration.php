<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
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

    <?php
        if (!isset($_SESSION['username'])) {
            header('location:utilisateur.php');
        };
    ?>

    <section>
        <h2>Administration</h2>

        <?php
            echo 'Connexion avec l\'adresse '.$_SESSION['username'];
        ?>
        <div>
            <form action="php/deconnexion.php" method="post">
                <button class="btn">Déconnexion</button>
            </form>
        </div>
        <div class="divAdmin">
            <h3>Gestion des utilisateurs</h3>
            <p>Créer un administrateur : vérifier la sécurité du mot de passe</p>
            <p>Supprimer un administrateur</p>
            <p>Lister les administrateurs</p>
        </div>
        <!-- Gestion de la page d'accueil -->
        <div class="divAdmin">
            <h3>Page d'accueil</h3>
                <form action="php/file_transfer.php" method="post">
                    <div class="alCol">
                        <label for="img">Sélectionner une image :</label>
                        <input type="file" name="img">
                    </div>
                    <div class="alCol">
                        <label for="imgName">Nom de l'image :</label>
                        <input type="text" name="imgName">
                    </div>
                    <div class="alCol">
                    <label for="imgName">Numéro de l'image :</label>
                        <select name="imgNumber" id="imgNumber">
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
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                    </div>
                    <button class="btnAdmin">Valider</button>
                </form>
        </div>
        <!-- Gestion des horaires -->
        <div class="divAdmin">
            <h3>Horaires</h3>
                <form action="" method="post" class="formHoraires">
                    <div>
                        <label for="day">Jour : </label>
                        <select name="day" id="day">
                            <option value="lundi">Lundi</option>
                            <option value="mardi">Mardi</option>
                            <option value="mercredi">Mercredi</option>
                            <option value="jeudi">Jeudi</option>
                            <option value="vendredi">Vendredi</option>
                            <option value="samedi">Samedi</option>
                            <option value="dimanche">Dimanche</option>
                        </select>
                    </div>                
                    <div>
                        <label for="morningStart">Horaire midi (début) :</label>
                        <input type="time" name="morningStart" class="inputHoraires">
                    </div>
                    <div>
                        <label for="morningEnd">Horaire midi (fin) :</label>
                        <input type="time" name="morningEnd" class="inputHoraires">
                    </div>
                    <div>
                        <label for="eveningStart">Horaire soir (début) :</label>
                        <input type="time" name="eveningStart" class="inputHoraires">
                    </div>
                    <div>
                        <label for="eveningEnd">Horaire soir (fin) :</label>
                        <input type="time" name="eveningEnd" class="inputHoraires">
                    </div>
                    <button class="btnAdmin">Valider</button>
                </form>
        </div>
        <!-- Gestion de la carte -->
        <div class="divAdmin">
            <h3>Carte</h3>
                <h4>Plats</h4>
                <div>
                    <form action="php/dishes_transfer.php" method="post">
                        <div>
                            <label for="dishName">Plat :</label>
                            <input type="text" name="dishName">
                        </div>
                        <div>
                            <label for="dishDesc">Description :</label>
                            <input type="text" name="dishDesc">
                        </div>
                        <div>
                            <label for="dishPrice">Prix</label>
                            <input type="number" name="dishPrice" step="0.01">
                        </div>
                        <div>
                            <label for="">Catégorie :</label>
                            <select name="dishCategory" id="">
                                <option value="salade">Salade</option>
                                <option value="entree">Entrée chaude</option>
                                <option value="charcuterie">Charcuterie</option>
                                <option value="specialite">Spécialité</option>
                                <option value="dessert">Dessert</option>
                            </select>
                        </div>
                        <button class="btnAdmin">Ajouter</button>
                    </form>
                </div>
                <div>
                    <form action="php/dishes_suppress.php" method="post">
                        <?php
                            include_once('php/bdd.php');
                            echo '<select name="listDishes">';
                            foreach ($db->query('SELECT * FROM dishes ORDER BY category') as $dish) {
                                echo '<option>';
                                echo $dish['title'];
                                echo'</option>';
                            };
                            echo'</select>';
                        ?>
                        <button>Supprimer</button>
                    </form>
                </div>

                <h4>Menus</h4>
                <h4>Formules</h4>
                <h4>Allergènes</h4>
                <p>Afficher la liste</p>
        </div>
        <!-- Gestion des couverts -->
        <div class="divAdmin">
            <h3>Restaurant</h3>
                <label for="">Nombre de couverts :</label>
                <input type="number">
        </div>
        <!-- Gestion des réservations -->
        <div class="divAdmin">
            <h3>Réservation</h3>
                <p>Nombre de tables : </p>
                <label for="tables">Changer le nombre de tables : </label>
                <input type="number" name="tables">
                <p>Lister les réservations en fonction du jour demandé</p>
                <p>Supprimer une réservation</p>
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