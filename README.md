# Quai Antique

## Installation en local
1.	Utiliser un serveur local (WAMP, XAMP, MAMP…) et créer un dossier dans le répertoire dédié en fonction du serveur (www pour WAMP, htdocs pour XAMP, htdocs pour MAMP…)
2.	Télécharger l'ensemble des fichiers du site et les coller dans le dossier créé.
3.	Dans un navigateur, ouvrir le fichier 'creation_db.php' à la racince du site. Celui-ci va créer la base de données et les tables, puis y insérer des données.
4.	Si nécessaire, les tables et les données peuvent être importées individuellement via des fichiers placés dans le dossier 'sql'.
5.	Au démarrage, il n'y a qu'un seul administrateur qui ne peut être supprimé via le site. Celui-ci peut se connecter en entrant l'adresse email **jon@hotmail.com** et le mot de passe **Winterfell_18**
6.	Si nécessaire, le rôle d'administrateur peut être ajouté manuellement dans la base de données en se rendant dans la table 'users' et en entrant la valeur '1' dans la colonne 'admin'.

## Utilisation du site – connexion
Administrateur et client peuvent se connecter en se rendant sur la page 'Connexion'. Le panneau d'administration et le compte client peuvent dès lors s'ouvrir en cliquant sur l'icône d'utilisateur qui apparaît dans le coin en haut à droite de l'écran.

## Utilisation du site – création de compte
En cliquant sur le bouton 'Créer un compte', une fenêtre modale s'ouvre et l'utilisateur doit remplir tous les champs avant de pouvoir s'enregistrer. Si un champ n'est pas correctement rempli (adresse email non conforme, caractères spéciaux non autorisés, lettres à la place de nombres, etc.), un message d'erreur apparaît.

## Utilisation du site – réservation
En cliquant sur le bouton 'Réserver', l'utilisateur doit remplir tous les champs afin de pouvoir valider sa réservation. S'il est déjà connecté, certains champs sont pré-remplis (adresse email, nom de la réservation, nombre de couverts par défaut, allergies éventuelles). En choisissant une date, il fait apparaître une liste d'horaires et doit en choisir un pour pouvoir terminer la réservation. Si le nombre de places restantes pour la période demandée ne permet d'ajouter de nouvelles réservations, un message prévient que la réservation ne peut pas être enregistrée.

## Utilisation du site – administration
En se rendant dans l'espace d'administration, l'administrateur peut naviguer entre plusieurs onglets et modifier le site comme bon lui semble. L'administrateur principal (ou master admin) n'apparaît pas dans les menus, il ne peut modifier ou supprimer son propre compte.
Un administrateur peut : 
•	Ajouter un droit d'administration.
•	Supprimer un droit d'administration (sauf le master admin).
•	Supprimer un compte utilisateur ou administrateur (sauf le master admin).
•	Ajouter une nouvelle image sur la page d'accueil et en modifier le texte qui apparaît au survol.
•	Modifier les horaires de chaque jour.
•	Modifier l'intervalle entre les horaires que peut sélectionner un utilisateur.
•	Modifier la capacité maximale du restaurant.
•	Ajouter, modifier ou supprimer un plat sur la carte.
•	Ajouter, modifier ou supprimer un menu et une formule.
•	Vérifier les réservations en cours en sélectionnant une date.
