
DROP TABLE IF EXISTS dishes;
CREATE TABLE dishes (
    title VARCHAR(50) NOT NULL PRIMARY KEY,
    description VARCHAR(250),
    price DECIMAL(4,2) NOT NULL,
    category VARCHAR(50) NOT NULL
);

DROP TABLE IF EXISTS images;
CREATE TABLE images (
    id_img TINYINT(2) UNIQUE PRIMARY KEY,
    file VARCHAR(50) NOT NULL,
    name VARCHAR(50)
);

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	user_id CHAR(36) NOT NULL PRIMARY KEY,
	user_email VARCHAR(50) NOT NULL UNIQUE,
	user_password VARCHAR(100) NOT NULL,
	user_name VARCHAR(50) NOT NULL,
	user_admin BOOL,
	default_seats INT(2) DEFAULT 1,
	bookings INT(4) DEFAULT 0
);

DROP TABLE IF EXISTS opening_hours;
CREATE TABLE opening_hours (
    id_day INT(2) NOT NULL PRIMARY KEY,
    day VARCHAR(50) NOT NULL,
    noon_start TIME NOT NULL DEFAULT '00:00:00',
    noon_end TIME NOT NULL DEFAULT '00:00:00',
    evening_start TIME NOT NULL DEFAULT '00:00:00',
    evening_end TIME NOT NULL DEFAULT '00:00:00'
);

DROP TABLE IF EXISTS restaurant;
CREATE TABLE restaurant (
	id INT,
	max_seats INT(3) NOT NULL DEFAULT 40,
    inter INT(2) NOT NULL DEFAULT 15
);
