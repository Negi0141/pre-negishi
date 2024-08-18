DROP DATABASE IF EXISTS posse;

CREATE DATABASE posse;

USE posse;

CREATE TABLE if not exists user (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) ,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255)
);

INSERT INTO user (user_id,email,password) VALUES
    (1,'madoka@gmail.com','$2y$10$OWlvj5tdJFCsuZeARQ1ceufRf5yAB3c61nBNeXnewJAP8ik1PvDbm');
-- password = 1007Madoka