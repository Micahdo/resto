CREATE TABLE dishes (
    title VARCHAR(50) NOT NULL PRIMARY KEY,
    description VARCHAR(250),
    price DECIMAL(4,2) NOT NULL,
    category VARCHAR(50)
);

CREATE TABLE images (
    id_img INT UNIQUE,
    file VARCHAR(50) NOT NULL,
    name VARCHAR(50)
);

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