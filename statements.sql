CREATE DATABASE brokenauth;
USE brokenauth;

CREATE TABLE gebruiker(
  	ID int not null AUTO_INCREMENT,
    email VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY(ID)
);

ALTER TABLE user ADD COLUMN(
	IP_adrress VARCHAR(80),
	datum DATETIME DEFAULT CURRENT_TIMESTAMP
);
