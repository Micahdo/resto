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

    <?php
        if ($_SESSION['admin'] != 1000) {
            header('location:user.php');
        };
    ?>

    <section>
        <!--Onglets-->
        <div class="flexRow around">
            <div class="btn-tab flexCol" id="btn-admin">Utilisateurs</div>
            <div class="btn-tab flexCol" id="btn-landing">Page d'accueil</div>
            <div class="btn-tab flexCol" id="btn-hour">Restaurant</div>
            <div class="btn-tab flexCol" id="btn-carte">Carte</div>
            <div class="btn-tab flexCol" id="btn-booking">Réservations</div>
        </div>

        <!-- Gestion des administrateurs -->
        <article  class="tab" id="tab-admin">
            <h3>Gestion des utilisateurs</h3>
            <div class="flexArticle around">
                <!--Ajouter un droit d'administration-->
                <div>
                    <h4>Ajouter un droit d'administration</h4>
                    <form action="php/admin_add.php" method="post" class="flexCol">
                        <?php
                            //On récupère la liste des clients
                            include_once('php/bdd.php');
                            echo '<label for="listAddAdmins">Liste des utilisateurs :</label>';
                            echo '<select name="listAddAdmins" class="input">';
                            foreach ($db->query('SELECT * FROM users WHERE user_admin != 1 AND user_email != "jon@hotmail.com"') as $user) {
                                echo '<option>';
                                echo $user['user_email'];
                                echo'</option>';
                            };
                            echo '</select>';
                        ?>
                        <button class="btn">Ajouter</button>
                    </form>
                </div>
                <!--Retirer un droit d'administration-->
                <div>
                    <h4>Retirer un droit d'administration</h4>
                    <form action="php/admin_suppress.php" method="post" class="flexCol">
                        <?php
                            //On récupère la liste des administrateurs à l'exception de celui du master admin
                            include_once('php/bdd.php');
                            echo '<label for="listDelAdmins">Liste des administrateurs :</label>';
                            echo '<select name="listDelAdmins" class="input">';
                            foreach ($db->query('SELECT * FROM users WHERE user_admin != 0 AND user_email != "jon@hotmail.com"') as $user) {
                                echo '<option>';
                                echo $user['user_email'];
                                echo'</option>';
                            };
                            echo '</select>';
                        ?>
                        <button class="btn">Supprimer</button>
                    </form>
                </div>
                <!--Supprimer un compte-->
                <div>
                    <h4>Supprimer un compte</h4>
                    <form action="php/user_suppress.php" method="post" class="flexCol">
                        <?php
                            //On récupère la liste de tous les comptes à l'exception de celui du master admin
                            include_once('php/bdd.php');
                            echo '<label for="listUsers">Liste des comptes :</label>';
                            echo '<select name="listUsers" class="input">';
                            foreach ($db->query('SELECT * FROM users WHERE user_email != "jon@hotmail.com"') as $user) {
                                echo '<option>';
                                echo $user['user_email'];
                                echo'</option>';
                            };
                            echo '</select>';
                        ?>
                        <button class="btn">Supprimer</button>
                    </form> 
                </div>
            </div>
            <br>
        </article>        

        <!-- Gestion de la page d'accueil -->
        <article class="hidden tab" id="tab-landing">
            <h3>Page d'accueil</h3>
            <div class="flexArticle around">
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
                        <div class="flexCol">
                            <label for="img">Sélectionner un fichier</label>
                            <input type="file" name="img" class="input">
                        </div>
                        <div class="flexCol">
                            <label for="imgName">Nom de l'image</label>
                            <input type="text" name="imgName" class="input">
                        </div>
                        <div class="flexCol">
                        <label for="imgNumber">Numéro de l'image</label>
                            <select name="imgNumber" class="input" id="imgNumber">
                                <option value="1">Image 1</option>
                                <option value="2">Image 2</option>
                                <option value="3">Image 3</option>
                                <option value="4">Image 4</option>
                                <option value="5">Image 5</option>
                                <option value="6">Image 6</option>
                                <option value="7">Image 7</option>
                                <option value="8">Image 8</option>
                                <option value="9">Image 9</option>
                                <option value="10">Image 10</option>
                                <option value="11">Image 11</option>
                                <option value="12">Image 12</option>
                                <option value="13">Image 13</option>
                                <option value="14">Image 14</option>
                                <option value="15">Image 15</option>
                            </select>
                        </div>
                        <button class="btn">Valider</button>
                    </form>
                </div>                
            </div>
            <br>
        </article>
        
        <!-- Gestion des horaires -->
        <article class="hidden tab" id="tab-hours">
            <h3>Restaurant</h3>
            <div class="flexArticle around">
                <div>
                    <h4>Horaires</h4>
                    <br>
                    <form method="post" class="flexCol" id="formHours">
                        <div class="flexCol">                        
                        <label for="day">Modifier les horaires</label>
                            <select name="day" id="day" class="input">
                                <option value="selectDay">Sélectionner un jour</option>
                                <option value="Lundi">Lundi</option>
                                <option value="Mardi">Mardi</option>
                                <option value="Mercredi">Mercredi</option>
                                <option value="Jeudi">Jeudi</option>
                                <option value="Vendredi">Vendredi</option>
                                <option value="Samedi">Samedi</option>
                                <option value="Dimanche">Dimanche</option>
                            </select>
                        </div>
                        <div id="hoursResult" class="flexCol"></div>            
                        <button class="btn" id="btn-hours">Valider</button>
                    </form>
                </div>
                <div>
                    <h4>Intervalle</h4>
                    <form action="php/interval.php" method="post" class="flexCol">
                        <?php
                            //On récupère l'intervalle de temps entre les choix d'horaires disponibles pour le client
                            include_once('php/bdd.php');
                            $statement = $db->prepare("SELECT inter FROM restaurant WHERE id = 1");
                            $statement->execute();
                            $result = $statement->fetch();
                            echo '<div><p>Intervalle actuel : '.$result['inter'].' minutes</p></div>';
                        ?>
                        <br>
                        <label for="interval">Modifier l'intervalle</label>
                        <input type="number" min="0" max="60" value="15" class="input" name="interval">
                        <button class="btn">Modifier</button>
                    </form>
                </div>
                <div>
                    <h4>Couverts max</h4>
                    <form action="php/max_seats.php" method="post" class="flexCol">
                        <?php
                            //On récupère la capacité maximale du restaurant
                            include_once('php/bdd.php');
                            $statement = $db->prepare("SELECT max_seats FROM restaurant WHERE id = 1");
                            $statement->execute();
                            $result = $statement->fetch();
                            echo '<div><p>Capacité maximale : '.$result['max_seats'].' couverts</p></div>';
                        ?>
                        <br>
                        <label for="max-seats">Modifier le nombre de couverts</label>
                        <input type="number" min="0" max="200" value="0" class="input" name="max-seats">
                        <button class="btn">Modifier</button>
                    </form>
                </div>
            </div>
            <br>
        </article>

        <!-- Gestion de la carte -->
        <article class="hidden tab" id="tab-carte">
            <h3>Carte</h3>
            <div class="flexArticle around">
                <!-- Ajouter un plat -->
                <div>
                    <h4>Ajouter un plat</h4>
                    <form action="php/dishes_transfer.php" method="post" class="flexCol">
                        <div class="flexCol">
                            <label for="dishName" class="txtWhite">Nom du plat</label>
                            <input type="text" name="dishName" class="input">
                        </div>
                        <div class="flexCol">
                            <label for="dishDesc" class="txtWhite">Description du plat</label>
                            <input type="text" name="dishDesc" class="input">
                        </div>
                        <div class="flexCol">
                            <label for="dishPrice" class="txtWhite">Prix du plat</label>
                            <input type="number" name="dishPrice" step="0.01" class="input">
                        </div>
                        <div class="flexCol">
                            <label for="" class="txtWhite">Catégorie du plat</label>
                            <select name="dishCategory"  class="input">
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
                <!-- Supprimer un plat -->
                <div>
                    <h4>Supprimer un plat</h4>
                    <form action="php/dishes_suppress.php" method="post" class="flexCol">
                        <?php
                            //On récupère la liste des plats
                            include_once('php/bdd.php');
                            echo '<label for="listDishes" class="txtWhite">Liste des plats</label>';
                            echo '<select name="listDishes" class="input" id="listDishes">';                            
                            foreach ($db->query('SELECT * FROM dishes ORDER BY title') as $dish) {
                                echo '<option>';
                                echo $dish['title'];
                                echo'</option>';
                            };
                            echo '</select>';
                        ?>
                        <button class="btn">Supprimer</button>
                    </form>
                </div>
                <!-- Gérer les menus -->
                <div>
                    <h4>Menus</h4>
                    <form method="post" class="flexCol">
                        <div class="flexCol">
                            <p>Créer un menu</p>
                            <button class="btn" id="btn-menu-new">Nouveau</button>
                        </div>
                        <div class="flexCol">
                            <p>Modifier un menu</p>
                            <?php                    
                            //On récupère la liste des menus et des formules
                            include_once('php/bdd.php');
                            echo '<select name="listMenus" class="input" id="listMenus">';
                            foreach ($db->query('SELECT * FROM menus GROUP BY menu_title ORDER BY menu_title') as $menu) {
                                echo '<optgroup label="'.$menu['menu_title'].'">';
                                $mf = $db->prepare("SELECT formule_title FROM menus WHERE menu_title = :mf");
                                $mf->bindValue(':mf',$menu['menu_title']);
                                $mf->execute();
                                $mfResult = $mf->fetchAll();
                                foreach($mfResult as $ft){
                                    echo '<option>';
                                    echo $ft['formule_title'];
                                    echo '</option>';
                                };
                                echo '</optgroup>';
                            };
                            echo '</select>';
                        ?>
                            <button class="btn" id="btn-menu-update">Modifier</button>
                        </div>
                        <div class="flexCol">
                            <p>Supprimer une formule</p>
                            <button class="btn" id="btn-menu-delete">Supprimer</button>
                        </div>
                        <div id="new-menu"></div>
                        <br>
                    </form>
                </div>                
            </div>
        </article>

        <!-- Gestion des réservations -->
        <article class="hidden tab" id="tab-bookings">
            <h3>Réservations</h3>
            <div class="flexCol around">
                <form method="post" class="flexCol">
                    <h4>Sélectionner une date</h4>
                    <input type="date"  min="<?php echo date('Y-m-d');?>" class="input" id="date-input">
                    <br>
                    <div id="dateInputResult"></div>
                </form>         
            </div>
        </article>               
    </section>

    <?php
        $db=null;
    ?>

    <footer>
        <?php
            include_once('footer.php');
        ?>
    </footer>

    <script src="js/jquery.js"></script>
    <script src="js/hours.js"></script>
    <script src="js/tabs.js"></script>
    <script src="js/menus.js"></script>

</body>

</html>