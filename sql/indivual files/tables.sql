DROP TABLE IF EXISTS dishes;
DROP TABLE IF EXISTS images;
DROP TABLE IF EXISTS users;
DROP TABLE IF EXISTS opening_hours;
DROP TABLE IF EXISTS restaurant;
DROP TABLE IF EXISTS bookings;
DROP TABLE IF EXISTS menus;
DROP TABLE IF EXISTS allergies;

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
	user_admin BOOLEAN NOT NULL,
	default_seats INT(2) DEFAULT 1,
    id_allergy INT,
    FOREIGN KEY (id_allergy) REFERENCES allergies(allergy_id)
);

CREATE TABLE opening_hours (
    id_day TINYINT(1) NOT NULL PRIMARY KEY,
    day VARCHAR(50) NOT NULL,
    noon_start TIME NOT NULL DEFAULT '00:00:00',
    noon_end TIME NOT NULL DEFAULT '00:00:00',
    evening_start TIME NOT NULL DEFAULT '00:00:00',
    evening_end TIME NOT NULL DEFAULT '00:00:00'
);

CREATE TABLE restaurant (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
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
    booking_time TIME NOT NULL,
    id_allergy INT,
    FOREIGN KEY (id_allergy) REFERENCES allergies(allergy_id)
);

CREATE TABLE menus (
    menu_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    menu_title VARCHAR(50) NOT NULL,
    formule_title VARCHAR(50) NOT NULL,
    formule_period VARCHAR(50),
    formule_desc TEXT NOT NULL,
    formule_price DECIMAL(5,2) NOT NULL
);

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