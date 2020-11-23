CREATE DATABASE brokenauth;
USE brokenauth;

CREATE TABLE gebruiker(
  	ID int not null AUTO_INCREMENT,
    email VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY(ID)
);
