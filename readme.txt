This file will outline a few things about the project.
------------------------------------------------------
USER'S TABLE
------------------------------------------------------
CREATE TABLE users222 (
user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
first_name VARCHAR(20) NOT NULL,
last_name VARCHAR(40) NOT NULL,
email VARCHAR(60) NOT NULL,
pass CHAR(40) NOT NULL,
registration_date DATETIME NOT NULL,
PRIMARY KEY (user_id)
);

INSERT INTO users222 (first_name, last_name, email, pass, registration_date) VALUES
('John', 'Lennon', 'john@beatles.com', SHA1('Happin3ss'), NOW()),
('Paul', 'McCartney', 'paul@beatles.com', SHA1('letITbe'), NOW()),
('George', 'Harrison', 'george@beatles.com ', SHA1('something'), NOW()),
('Ringo', 'Starr', 'ringo@beatles.com', SHA1('thisboy'), NOW());

-------------------------------------------------------
PRODUCT'S TABLE
-------------------------------------------------------
CREATE TABLE products222 (
  product_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
  name varchar(100) NOT NULL,
  description varchar(250) NOT NULL,
  price decimal(6,2) NOT NULL,
  PRIMARY KEY (id_product)
);

INSERT INTO products222 (name, description, price) VALUES
'cat', 'a cat stuffed animal', '15.00',
'bats', 'flying bats figure', '25.00',
'pumpkin', 'fake pumpkin', '35.00',
'rat', 'a rat stuffed animal', '45.00',
'strobe', 'a strobe light', '55.00',

------------------------------------------------------------