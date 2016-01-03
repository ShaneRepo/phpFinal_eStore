# phpFinal_eStore
A simple e-store for final project.
# Home Page
![Alt text](https://cloud.githubusercontent.com/assets/10361727/12080820/a3e56bbe-b235-11e5-957f-7a332132ca69.PNG "Homepage")
# Product of Week Page
![Alt text](https://cloud.githubusercontent.com/assets/10361727/12080822/a3e68058-b235-11e5-8353-75b692354678.PNG "Products")
# Create Account Page
![Alt text](https://cloud.githubusercontent.com/assets/10361727/12080823/a3e76234-b235-11e5-9a2f-17a73bd6c0e7.PNG "Account")
# Login Page
![Alt text](https://cloud.githubusercontent.com/assets/10361727/12080821/a3e67162-b235-11e5-96be-4c0224e59341.PNG "Login")

# This is the tables used in the project (MySql).
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
  PRIMARY KEY (product_id)
);

INSERT INTO products222 (product_id, name, description, price) VALUES
(NULL,'cat', 'a cat stuffed animal', '15.00'),
(NULL,'bats', 'flying bats figure', '25.00'),
(NULL,'pumpkin', 'fake pumpkin', '35.00'),
(NULL,'rat', 'a rat stuffed animal', '45.00'),
(NULL,'strobe', 'a strobe light', '55.00');

------------------------------------------------------------
