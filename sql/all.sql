DROP TABLE IF EXISTS dishes;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS opening_hours;
DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS bookings;
DROP TABLE IF EXISTS menus;

CREATE TABLE dishes (
    title VARCHAR(50) NOT NULL PRIMARY KEY,
    description VARCHAR(250),
    price DECIMAL(5,2) NOT NULL,
    category VARCHAR(50) NOT NULL
);

CREATE TABLE images (
    id_img TINYINT(2) UNIQUE PRIMARY KEY,
    file VARCHAR(50) NOT NULL,
    name VARCHAR(50)
);

CREATE TABLE users (
	user_id CHAR(36) NOT NULL PRIMARY KEY,
	user_email VARCHAR(50) NOT NULL UNIQUE,
	user_password VARCHAR(100) NOT NULL,
	user_name VARCHAR(50) NOT NULL,
	user_admin BOOL,
	default_seats INT(2) DEFAULT 1
);

CREATE TABLE opening_hours (
    id_day INT(1) NOT NULL PRIMARY KEY,
    day VARCHAR(50) NOT NULL,
    noon_start TIME NOT NULL DEFAULT '00:00:00',
    noon_end TIME NOT NULL DEFAULT '00:00:00',
    evening_start TIME NOT NULL DEFAULT '00:00:00',
    evening_end TIME NOT NULL DEFAULT '00:00:00'
);

CREATE TABLE restaurant (
	id INT NOT NULL PRIMARY KEY,
	max_seats INT(3) NOT NULL DEFAULT 40,
    inter INT(2) NOT NULL DEFAULT 15
);

CREATE TABLE bookings (
	booking_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    booking_date DATE NOT NULL,
    booking_noon INT(3) DEFAULT 0,
    booking_evening INT(3) DEFAULT 0,
    booking_email VARCHAR(50) NOT NULL,
    booking_user CHAR(36) NOT NULL,
    booking_time TIME NOT NULL
);

CREATE TABLE menus (
    menu_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    menu_title VARCHAR(50) NOT NULL,
    formule_title VARCHAR(50) NOT NULL,
    formule_period VARCHAR(50),
    formule_desc TEXT NOT NULL,
    formule_price DECIMAL(5,2) NOT NULL
);

/*Carte*/
INSERT INTO dishes (title, description, price, category) VALUES ("Salade nature", "", 4.70,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade au noix", "", 6.80,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade paysanne", "Lardons, croûtons", 7.60,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade savoyarde", "Jambon cru, croûtons, fromage râpé", 8.00,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Soupe à l\'oignon", "", 7.80,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Gratinée à l\'oignon", "", 8.10,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Chèvre chaud aux noisettes", "", 9.50,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Saint-Marcelin chaux aux noix", "", 10.00,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Saucisso sec artisanal", "Origine savoie", 9.90,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Carré de porc séchée", "Origine Savoie, élévé aux céréales, mariné au vin rouge", 10.20,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Jambon sec de Savoie", "Affiné 12 mois", 10.30,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Bacon fumé artisanal", "Origine Savoie", 10.20,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Fondue savoyarde", "Mélange de 3 fromages", 19.10,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Fondue suisse", "Gruyère de Fribourg, Vacherin fribourgeois", 21.40,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Raclette fermière au lait cru", "Origine Haute-Savoie, accompagnée de charcuterie", 29.20,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Raclette fumée au lait cru", "Origine Haute-Savoie, accompagnée de charcuterie", 30.00,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Raclette à l'ail des ours au lait cru", "Origine Hautes-Alpes, accompagnée de charcuterie", 30.20,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Tartiflette", "Reblochon fermier, pommes de terre, oignons, lardons, crème fraîche épaisse, accompagnée de salade verte", 15.80,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Gratin de crozets savoyards", "Lardons, crème fraîche épaisse, oignons, fromage râpé, accompagné de salade verte", 15.80,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Berthoud", "Fromage d'Abondance d'alpage, arrosé au madère et fondu au four", 15.60,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Paillasse de Fribourg", "Galettes de pain mouillées au lait, gruyère suisse, boeuf séché", 16.00,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Diots au vin blanc", "Saucisses purc porc, accompagnés de tomates et de pommes vapeur", 15.40,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Brisgotte", "Pain de campagne, fromage suisse, jambon cru de Savoie, accompagnée de charcuterie et d'une salade verte", 27.50,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Mousse au chocolat", "", 6.70,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Crème au caramel", "", 6.70,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade de fruits frais", "", 6.70,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Tartelette paysanne aux pommes", "Servie avec une boule de glace à la vanille et de la chantilly", 8.30,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Fromage blanc à la crème", "", 6.00,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Fromage blanc aux myrtilles", "", 6.10,"Dessert");

/*Images de la page d'accueil*/
INSERT INTO images (id_img, file, name) VALUES (1, "salade_aux_noix.jpg", "Salade aux noix");
INSERT INTO images (id_img, file, name) VALUES (2, "salade_paysanne.jpg", "Salade paysanne");
INSERT INTO images (id_img, file, name) VALUES (3, "salade_savoyarde.jpg", "Salade savoyarde");
INSERT INTO images (id_img, file, name) VALUES (4, "chevre_chaud.jpg", "Chèvre chaud");
INSERT INTO images (id_img, file, name) VALUES (5, "gratinee_oignon.jpg", "Gratinée à l\'oignon");
INSERT INTO images (id_img, file, name) VALUES (6, "soupe_oignon.jpg", "Soupe à l\'oignon");
INSERT INTO images (id_img, file, name) VALUES (7, "assiette_charcuterie.jpg", "Assiette de charcuterie");
INSERT INTO images (id_img, file, name) VALUES (8, "saucisson_sec.jpg", "Saucisson sec");
INSERT INTO images (id_img, file, name) VALUES (9, "carre_porc.jpg", "Carré de porc");
INSERT INTO images (id_img, file, name) VALUES (10, "crozets.jpg", "Gratin de crozets");
INSERT INTO images (id_img, file, name) VALUES (11, "tartiflette.jpg", "Tartiflette");
INSERT INTO images (id_img, file, name) VALUES (12, "fondue_savoyarde.jpg", "Fondue savoyarde");
INSERT INTO images (id_img, file, name) VALUES (13, "salade_fruits.jpg", "Salade de fruits");
INSERT INTO images (id_img, file, name) VALUES (14, "mousse_chocolat.jpg", "Mousse au chocolat");
INSERT INTO images (id_img, file, name) VALUES (15, "creme_caramel.jpg", "Crème au caramel");

/*Utilisateurs*/
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats) VALUES ("b26bb82f-f1ac-11ed-89b2-00d8619c787a", "bob@hotmail.com", "$2y$10$y49G9PdVcTjHxtzo3o.vou15oXtpg0dp8gKuRB5iYxN3Z.tFVFgu.", "Bob", 1, 1);

/*Horaires d'ouverture*/
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (1, 'Lundi', '12:00:00', '15:00:00', '18:30:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (2, 'Mardi', '12:00:00', '15:00:00', '18:30:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (3, 'Mercredi', '00:00:00', '00:00:00', '18:30:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (4, 'Jeudi', '12:00:00', '15:00:00', '18:30:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (5, 'Vendredi', '12:00:00', '15:00:00', '18:30:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (6, 'Samedi', '12:00:00', '14:00:00', '18:30:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (7, 'Dimanche', '00:00:00', '00:00:00', '00:00:00', '003:00:00');

/*Intervalle de temps pour les réservations et nombre maximum de couverts*/
INSERT INTO restaurant (id, inter, max_seats) VALUES (1, 15, 40);