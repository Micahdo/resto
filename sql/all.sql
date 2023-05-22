DROP TABLE IF EXISTS dishes;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS opening_hours;
DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS bookings;
DROP TABLE IF EXISTS menus;
DROP TABLE IF EXISTS allergies;

CREATE TABLE allergies (
    allergy_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    gluten BOOLEAN DEFAULT 0,
    crustaces BOOLEAN DEFAULT 0,
    oeufs BOOLEAN DEFAULT 0,
    poissons BOOLEAN DEFAULT 0,
    arachides BOOLEAN DEFAULT 0,
    soja BOOLEAN DEFAULT 0,
    lait BOOLEAN DEFAULT 0,
    coques BOOLEAN DEFAULT 0,
    celeri BOOLEAN DEFAULT 0,
    moutarde BOOLEAN DEFAULT 0,
    sesame BOOLEAN DEFAULT 0,
    sulfites BOOLEAN DEFAULT 0,
    lupin BOOLEAN DEFAULT 0,
    mollusques BOOLEAN DEFAULT 0 
);

/*Allergies*/
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (2, 1, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (4, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (8, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (9, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (10, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (11, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (13, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (14, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (15, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (16, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (17, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (18, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (19, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (20, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0);
INSERT INTO allergies (allergy_id, gluten, crustaces, oeufs, poissons, arachides, soja, lait, coques, celeri, moutarde, sesame, sulfites, lupin, mollusques) VALUES (21, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0);

CREATE TABLE dishes (
    title VARCHAR(50) NOT NULL PRIMARY KEY,
    description VARCHAR(250),
    price DECIMAL(5,2) NOT NULL,
    category VARCHAR(50) NOT NULL
);

/*Carte*/
INSERT INTO dishes (title, description, price, category) VALUES ("Salade nature", "Salade verte, sauce vinaigrette", 4.50,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade au noix", "Salade verte, noix, sauve vinaigrette", 6.60,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade paysanne", "Lardons, croûtons", 7.50,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade savoyarde", "Jambon cru, croûtons, fromage râpé", 7.80,"Salade");
INSERT INTO dishes (title, description, price, category) VALUES ("Soupe à l\'oignon", "Oignons, croûtons", 7.50,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Gratinée à l\'oignon", "Oignons, emmental", 7.70,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Chèvre chaud aux noisettes", "Salade verte, fromage de chèvre, sauce vinaigrette", 9.10,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Saint-Marcelin chaud aux noix", "Salade verte, noix, Saint-Marcelin, sauve vinaigrette", 9.60,"Entree chaude");
INSERT INTO dishes (title, description, price, category) VALUES ("Saucisson sec artisanal", "Origine savoie", 9.60,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Carré de porc séchée", "Origine Savoie", 10.00,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Jambon sec de Savoie", "Origine Savoie, affiné 12 mois", 10.00,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Bacon fumé artisanal", "Origine Savoie", 10.00,"Charcuterie");
INSERT INTO dishes (title, description, price, category) VALUES ("Fondue savoyarde", "Mélange de trois fromages", 18.70,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Fondue suisse", "Gruyère fribourgeois, Vacherin fribourgeois", 21.10,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Raclette fermière au lait cru", "Origine Haute-Savoie, accompagnée de charcuterie", 29.00,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Raclette fumée au lait cru", "Origine Haute-Savoie, accompagnée de charcuterie", 29.50,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Raclette à l'ail des ours au lait cru", "Origine Hautes-Alpes, accompagnée de charcuterie", 30.00,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Tartiflette", "Reblochon fermier, pommes de terre, oignons, lardons, crème fraîche épaisse, salade verte", 15.30,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Gratin de crozets savoyards", "Lardons, crème fraîche épaisse, oignons, fromage râpé, salade verte", 15.30,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Berthoud", "Fromage d'Abondance d'alpage, arrosé au madère et fondu au four", 15.30,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Paillasse de Fribourg", "Galettes de pain mouillées au lait, gruyère suisse, boeuf séché", 16.00,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Diots au vin blanc", "Saucisses purc porc, accompagnés de tomates et de pommes vapeur", 15.10,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Brisgotte", "Pain de campagne, fromage suisse, jambon cru de Savoie, charcuterie, salade verte", 27.00,"Spécialité");
INSERT INTO dishes (title, description, price, category) VALUES ("Mousse au chocolat", "", 6.50,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Crème au caramel", "", 6.50,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Salade de fruits frais", "", 6.50,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Tartelette paysanne aux pommes", "Servie avec une boule de glace à la vanille et de la chantilly", 8.10,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Fromage blanc à la crème", "", 5.80,"Dessert");
INSERT INTO dishes (title, description, price, category) VALUES ("Fromage blanc aux myrtilles", "", 6.00,"Dessert");

CREATE TABLE images (
    id_img TINYINT(2) UNIQUE PRIMARY KEY,
    file VARCHAR(50) NOT NULL,
    name VARCHAR(50)
);

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

CREATE TABLE users (
	user_id CHAR(36) NOT NULL PRIMARY KEY,
	user_email VARCHAR(50) NOT NULL UNIQUE,
	user_password VARCHAR(100) NOT NULL,
	user_name VARCHAR(50) NOT NULL,
	user_admin BOOLEAN NOT NULL,
	default_seats INT(2) DEFAULT 1,
    id_allergy INT,
    FOREIGN KEY (id_allergy) REFERENCES allergies(allergy_id)
);

/*Utilisateurs*/
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('13a4374f-f561-11ed-b863-00d8619c787a', 'jon@hotmail.com', '$2y$10$GQKHTvoz01PJkHKh0TO1GeHMJ1nHqMJIf65Rq0VeX.vOKb9c60EpC', 'Jon Snow', 1, 1, 2);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('19217e15-f7a4-11ed-9440-00d8619c787a', 'frodo.baggins@comte.com', '$2y$10$IwQmj3eriREi1mhDILdhJuZPWvnikm9Ut29ThmqhzzBYKKR4.GmIS', 'Hobbits', 0, 4, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('1ae4fe83-f7a3-11ed-9440-00d8619c787a', 'ron.weasley@hotmail.uk', '$2y$10$3lvOVdRxQZAxhxrVxPtcbODWgiaDFgz8dzun.XMN00d1h7WRw18B2', 'Ron Weasley', 0, 1, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('21414c65-f8b8-11ed-a80b-00d8619c787a', 'R2D2@tatooine.com', '$2y$10$EcIreMuLM6s/tnRdikGUWuG21LSMPudjGix2mirIo5V5dcuHFUiIi', 'R2D2', 0, 3, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('3ee80acf-f7a3-11ed-9440-00d8619c787a', 'tanjiro@gmail.jp', '$2y$10$BF7UlUe.tC05myjrFknsPOe8JbsK4Aaq/kEalMN6D7sgp5Oy.WiZu', 'Tanjiro', 0, 1, 4);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('42384f95-f7a4-11ed-9440-00d8619c787a', 'vador@deathstar.com', '$2y$10$5IuawgmxdBT.digcFIeC5eL.pDh1EKZ9Qy1Y6HhgkNBeck4IuQ8QG', 'Vador', 0, 1, 5);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('4b31edee-f7a3-11ed-9440-00d8619c787a', 'nezuko@gmail.jp', '$2y$10$oXdGFoGOblAEdoz/okKWBuzqHnX/VopFpHwrJOSwquYgOD1pSCJTO', 'Nezuko', 0, 1, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('595a19a8-f89e-11ed-a80b-00d8619c787a', 'fred@hotmail.com', '$2y$10$aZ8g.4dlZboLZTPkeRo4gulR3F9QPZRleB17tkZPUQV.DY4KF9L7C', 'Fred', 0, 2, 8);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('6545b4fa-f7a3-11ed-9440-00d8619c787a', 'homer.simpson@gmail.com', '$2y$10$GiPyXgGwyhblDv1VqZlu6OnKTGKB6jsK5F3hhBJ7queMnHNWW0m6C', 'Homer', 0, 4, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('9ff82eb6-f7a3-11ed-9440-00d8619c787a', 'spengler@ghostbuster.com', '$2y$10$NSVu84SWJ.FtUx5DxzzVI.9B3mZ8afs/SW.m5ynfvO/u2G1zHCjmG', 'Eggon Spengler', 0, 3, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('b555945d-f8b7-11ed-a80b-00d8619c787a', 'yoda@tatooine.com', '$2y$10$FaHKYBxaNB0d7Ta3o65QKuMUTBqACbyPtZLoJzULmt6Erytfa4Xa2', 'Yoda', 0, 1, 16);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('b6fd0b40-f7a3-11ed-9440-00d8619c787a', 'beetlejuice@hell.com', '$2y$10$WpfC9PpNqZCeVImRTLHq5eoIBB.f3woCUB4NmjNZlbPMBXAg33tcG', 'Beetlejuice', 0, 1, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('d71f5c3e-f7a2-11ed-9440-00d8619c787a', 'harry.potter@gmail.com', '$2y$10$KcgQtVvfrpg5Q1.RC09hXeoaArYm79dPgL8ejg6ln2XTBxO6YV2bK', 'Harry Potter', 0, 1, 1);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('eb800405-f89f-11ed-a80b-00d8619c787a', 'padme@gmail.com', '$2y$10$3jaFPQdVsGx7wrzT9SCByOkrTT2so2eQRmBHcxQGIQp5fIvnsTZ3i', 'Padme', 0, 1, 9);
INSERT INTO users (user_id, user_email, user_password, user_name, user_admin, default_seats, id_allergy) VALUES ('fb285d5c-f7a2-11ed-9440-00d8619c787a', 'hermione-granger@hotmail.uk', '$2y$10$TnFGrd7liACDMpNKzXOqr.pSJXJdBabNnJmoV5hA71/RGF0kcnQHu', 'Hermione', 0, 2, 1);

CREATE TABLE opening_hours (
    id_day TINYINT(1) NOT NULL PRIMARY KEY,
    day VARCHAR(50) NOT NULL,
    noon_start TIME NOT NULL DEFAULT '00:00:00',
    noon_end TIME NOT NULL DEFAULT '00:00:00',
    evening_start TIME NOT NULL DEFAULT '00:00:00',
    evening_end TIME NOT NULL DEFAULT '00:00:00'
);

/*Horaires d'ouverture*/
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (1, 'Lundi', '12:00:00', '15:00:00', '19:00:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (2, 'Mardi', '12:00:00', '15:00:00', '19:00:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (3, 'Mercredi', '00:00:00', '00:00:00', '19:00:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (4, 'Jeudi', '12:00:00', '15:00:00', '19:00:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (5, 'Vendredi', '12:00:00', '15:00:00', '19:00:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (6, 'Samedi', '12:00:00', '15:00:00', '19:00:00', '23:30:00');
INSERT INTO opening_hours (id_day, day, noon_start, noon_end, evening_start, evening_end) VALUES (7, 'Dimanche', '00:00:00', '00:00:00', '00:00:00', '00:00:00');

CREATE TABLE restaurant (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	max_seats INT(3) NOT NULL DEFAULT 40,
    inter INT(2) NOT NULL DEFAULT 15
);

/*Intervalle de temps pour les réservations et nombre maximum de couverts*/
INSERT INTO restaurant (id, inter, max_seats) VALUES (1, 15, 40);

CREATE TABLE bookings (
	booking_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    booking_date DATE NOT NULL,
    booking_noon INT(3) DEFAULT 0,
    booking_evening INT(3) DEFAULT 0,
    booking_email VARCHAR(50) NOT NULL,
    booking_user CHAR(36) NOT NULL,
    booking_time TIME NOT NULL,
    id_allergy INT,
    FOREIGN KEY (id_allergy) REFERENCES allergies(allergy_id)
);

/*Réservations*/
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (1, '2023-06-01', 2, 0, 'bob@hotmail.com', 'Bob', '12:30:00', 11);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (2, '2023-06-14', 0, 6, 'bob@hotmail.com', 'Bob', '21:30:00', 12);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (3, '2023-06-01', 6, 0, 'padme@gmail.com', 'Padme', '12:00:00', 13);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (4, '2023-06-02', 0, 6, 'padme@gmail.com', 'Padme', '20:00:00', 14);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (5, '2023-06-12', 12, 0, 'padme@gmail.com', 'Padme', '12:30:00', 15);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (6, '2023-06-01', 5, 0, 'yoda@tatooine.com', 'Yoda', '12:30:00', 17);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (7, '2023-06-02', 5, 0, 'yoda@tatooine.com', 'Yoda', '12:30:00', 18);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (8, '2023-06-03', 5, 0, 'yoda@tatooine.com', 'Yoda', '12:30:00', 19);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (9, '2023-06-05', 5, 0, 'yoda@tatooine.com', 'Yoda', '12:30:00', 20);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (10, '2023-06-06', 5, 0, 'yoda@tatooine.com', 'Yoda', '12:30:00', 21);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (11, '2023-06-01', 3, 0, 'R2D2@tatooine.com', 'R2D2', '12:15:00', 1);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (12, '2023-06-02', 3, 0, 'R2D2@tatooine.com', 'R2D2', '12:45:00', 1);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (13, '2023-06-03', 0, 3, 'R2D2@tatooine.com', 'R2D2', '20:00:00', 1);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (14, '2023-06-05', 0, 3, 'R2D2@tatooine.com', 'R2D2', '19:15:00', 1);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (15, '2023-06-07', 0, 3, 'R2D2@tatooine.com', 'R2D2', '21:00:00', 1);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (16, '2023-06-09', 3, 0, 'R2D2@tatooine.com', 'R2D2', '13:00:00', 1);
INSERT INTO bookings (booking_id, booking_date, booking_noon, booking_evening, booking_email, booking_user, booking_time, id_allergy) VALUES (17, '2023-06-09', 0, 3, 'R2D2@tatooine.com', 'R2D2', '19:00:00', 1);

CREATE TABLE menus (
    menu_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    menu_title VARCHAR(50) NOT NULL,
    formule_title VARCHAR(50) NOT NULL,
    formule_period VARCHAR(50),
    formule_desc TEXT NOT NULL,
    formule_price DECIMAL(5,2) NOT NULL
);

/*Menus*/
INSERT INTO menus (menu_title, formule_title, formule_period, formule_desc, formule_price) VALUES ('Menu Boulot', 'Formule Presto', '(du lundi au vendredi, uniquement le midi)', 'Entrée + Plat ou Plat + Dessert\nEntrées : Salade ou Entrée chaude\nPlats : Diots au vin blanc ou Tartiflette ou Paillasse de Fribourg\nDesserts : au choix\n', '21.90');
INSERT INTO menus (menu_title, formule_title, formule_period, formule_desc, formule_price) VALUES ('Menu Boulot', 'Formule Piano', '(du lundi au vendredi, uniquement le midi)', 'Entrée + Plat + Dessert\nEntrées : Salade ou Entrée chaude\nPlats : Diots au vin blanc ou Tartiflette ou Paillasse de Fribourg\nDesserts : au choix\n', '27.90');
INSERT INTO menus (menu_title, formule_title, formule_period, formule_desc, formule_price) VALUES ('Menu de la Yaute', 'Formule Petit Savoyard', '(toute la semaine)', 'Salade savoyarde ou Gratinée à l''oignon\nBerthoud ou Paillasse de Fribourg\nDessert au choix', '27.90');
INSERT INTO menus (menu_title, formule_title, formule_period, formule_desc, formule_price) VALUES ('Menu de la Yaute', 'Formule Haut Savoyard', '(toute la semaine)', 'Salade savoyarde ou Chèvre chaud aux noisettes\nBrisgotte ou  Fondue savoyarde (avec une charcuterie au choix)\nDessert au choix', '32.90');
INSERT INTO menus (menu_title, formule_title, formule_period, formule_desc, formule_price) VALUES ('Menu de la Yaute', 'Formule Gargantua', '(toute la semaine)', 'Salade savoyarde ou Chèvre chaud aux noix ou Gratinée à l''oignon\nRaclette fermière ou Raclette fumée ou Raclette à l''ail des ours\nJambon sec de Savoie\nBacon fumé ou Saucisson sec\nDessert au choix', '57.00');










