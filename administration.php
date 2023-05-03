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
        if ($_SESSION['admin'] === 0) {
            header('location:user.php');
        };
    ?>

    <section>
        <h2>Page d'administration</h2>

        <!-- Gestion des administrateurs -->
        <div class="divAdmin flexCol">
            <h3>Gestion des utilisateurs</h3>
            <p>Créer un administrateur : vérifier la sécurité du mot de passe</p>
        </div>
        <div class="flexCol">
            <h4>Créer un administrateur</h4>
            <form action="php/new_account_admin.php" method="post" class="flexCol">
                <div class="alCol">
                    <label for="username">Entrez une adresse email</label>
                    <input type="email" name="username">
                </div>
                <div class="alCol">
                    <label for="password">Entrez un mot de passe</label>
                    <input type="text" name="password">
                </div>
                <button class="btn">Valider</button>
            </form>
        </div>
        <div class="flexCol">
            <h4>Supprimer un administrateur</h4>
            <form action="php/.php" method="post" class="flexCol">
                <?php
                    include_once('php/bdd.php');
                    echo '<div class="alCol">';
                    echo '<label for="listAdmins">Liste des administrateurs :</label>';
                    echo '<select name="listAdmins">';
                    foreach ($db->query('SELECT * FROM users WHERE user_admin != 0 AND user_email != "bob@hotmail.com"') as $admin) {
                        echo '<option>';
                        echo $admin['user_email'];
                        echo'</option>';
                    };
                    echo '</select>';
                    echo '</div>';
                ?>
                <button class="btn">Supprimer</button>
            </form>
        </div>
        <div class="flexCol">
            <h4>Supprimer un utilisateur</h4>
            <form action="php/.php" method="post" class="flexCol">
                <?php
                    include_once('php/bdd.php');
                    echo '<div class="alCol">';
                    echo '<label for="listAdmins">Liste des administrateurs :</label>';
                    echo '<select name="listAdmins">';
                    foreach ($db->query('SELECT * FROM users WHERE user_admin != 1') as $admin) {
                        echo '<option>';
                        echo $admin['user_email'];
                        echo'</option>';
                    };
                    echo '</select>';
                    echo '</div>';
                ?>
                <button class="btn">Supprimer</button>
            </form>
        </div>

        <!-- Gestion de la page d'accueil -->
        <h3>Page d'accueil</h3>
        <div class="divAdmin flexRow">
            <div>
                <div class="flexRow">
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">1</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">2</p>
                        </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">3</p>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">4</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">5</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">6</p>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">7</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">8</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">9</p>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">10</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">11</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">12</p>
                    </div>
                </div>
                <div class="flexRow">
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">13</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">14</p>
                    </div>
                    <div class="renduAccueilBox flexCol">
                        <p class="renduAcceuilNumber">15</p>
                    </div>
                </div>
            </div>                
            <div class="flexCol">
                <h4>Changer une image</h4>
                <form 
                    action="php/file_transfer.php" 
                    method="post" 
                    enctype="multipart/form-data" 
                    class="flexCol"
                    >
                    <div class="alCol">
                        <label for="img">Sélectionner un fichier :</label>
                        <input type="file" name="img">
                    </div>
                    <div class="alCol">
                        <label for="imgName">Nom de l'image :</label>
                        <input type="text" name="imgName">
                    </div>
                    <div class="alCol">
                    <label for="imgNumber">Numéro de l'image :</label>
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
                    <button class="btn">Valider</button>
                </form>
            </div>                
        </div>
        <!-- Gestion des horaires -->
        <div class="divAdmin">
            <h3>Horaires</h3>
                <form action="" method="post" class="flexCol">
                    <div class="alCol">
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
                    <div class="alCol">
                        <label for="morningStart">Horaire midi (début) :</label>
                        <input type="time" name="morningStart" class="inputHoraires">
                    </div>
                    <div class="alCol">
                        <label for="morningEnd">Horaire midi (fin) :</label>
                        <input type="time" name="morningEnd" class="inputHoraires">
                    </div>
                    <div class="alCol">
                        <label for="eveningStart">Horaire soir (début) :</label>
                        <input type="time" name="eveningStart" class="inputHoraires">
                    </div>
                    <div class="alCol">
                        <label for="eveningEnd">Horaire soir (fin) :</label>
                        <input type="time" name="eveningEnd" class="inputHoraires">
                    </div>
                    <button class="btn">Valider</button>
                </form>
        </div>
        <!-- Gestion de la carte -->
        <div class="divAdmin">
            <h3>Carte</h3>

                <div class="flexCol">
                    <h4>Ajouter un plat</h4>
                    <form action="php/dishes_transfer.php" method="post" class="flexCol">
                        <div class="alCol">
                            <label for="dishName" class="txtWhite">Plat :</label>
                            <input type="text" name="dishName">
                        </div>
                        <div class="alCol">
                            <label for="dishDesc" class="txtWhite">Description :</label>
                            <input type="text" name="dishDesc">
                        </div>
                        <div class="alCol">
                            <label for="dishPrice" class="txtWhite">Prix</label>
                            <input type="number" name="dishPrice" step="0.01">
                        </div>
                        <div class="alCol">
                            <label for="" class="txtWhite">Catégorie :</label>
                            <select name="dishCategory" id="">
                                <option value="Salade">Salade</option>
                                <option value="Entree chaude">Entrée chaude</option>
                                <option value="Charcuterie">Charcuterie</option>
                                <option value="Spécialité">Spécialité</option>
                                <option value="Dessert">Dessert</option>
                            </select>
                        </div>
                        <button class="btn">Ajouter</button>
                    </form>
                </div>

                <div class="flexCol">
                    <h4>Supprimer un plat</h4>
                    <form action="php/dishes_suppress.php" method="post" class="flexCol">
                        <?php
                            include_once('php/bdd.php');
                            echo '<div class="alCol">';
                            echo '<label for="listDishes">Plat :</label>';
                            echo '<select name="listDishes">';
                            foreach ($db->query('SELECT * FROM dishes ORDER BY title') as $dish) {
                                echo '<option>';
                                echo $dish['title'];
                                echo'</option>';
                            };
                            echo '</select>';
                            echo '</div>';
                        ?>
                        <button class="btn">Supprimer</button>
                    </form>
                </div>

                <h4>Menus</h4>
                <h4>Formules</h4>
                <h4>Allergènes</h4>
                <p>Afficher la liste</p>
        </div>
        <!-- Gestion des couverts -->
        <div class="divAdmin flexCol">
            <h3>Restaurant</h3>
                <label for="">Nombre de couverts :</label>
                <input type="number">
        </div>
        <!-- Gestion des réservations -->
        <div class="divAdmin flexCol">
            <h3>Réservations</h3>
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