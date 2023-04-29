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
)

