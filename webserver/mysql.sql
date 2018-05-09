CREATE DATABASE ssi;
USE ssi;
SHOW DATABASES;
SHOW TABLES;

CREATE TABLE systems (
  id_system INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom_system VARCHAR(255)
);

INSERT INTO systems VALUES ('', 'debian');

SELECT * FROM systems WHERE nom = 'debian';



________________

CREATE USER 'adminssi'@'localhost' IDENTIFIED BY 'password';
GRANT ALL ON ssi.* TO 'adminssi'@'localhost';

CREATE USER 'userssi'@'localhost' IDENTIFIED BY 'password';
GRANT SELECT, INSERT ON ssi.* TO 'userssi'@'localhost';
