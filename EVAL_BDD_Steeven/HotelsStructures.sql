DROP DATABASE IF EXISTS Hotel;

CREATE DATABASE Hotel;

USE Hotel;

CREATE TABLE Station
(
	idStation INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	nomStation VARCHAR(40),
	altitudeStation VARCHAR(10)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE Hotels
(
    idHotel INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	nomHotel VARCHAR(30),
	categorieHotel VARCHAR(30),
	adresseHotel VARCHAR(50),
	villeHotel VARCHAR(30)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE Chambres
(
    idChambre INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	noChambre INT,
	typeChambre VARCHAR(30),
	capaciteChambre VARCHAR(30)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE Clients
(
	idClient INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	nomClient VARCHAR(30),
	prenomClient VARCHAR(30),
	adresseClient VARCHAR(50),
	villeClient VARCHAR(30),
    dateDebutSejour DATE,
    dateFinSejour DATE,
    arrhesReservation VARCHAR(30),
    DateReservation DATE
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

ALTER TABLE Hotels ADD idStation INT(11);
ALTER TABLE Hotels ADD CONSTRAINT FK_Hotels_Station FOREIGN KEY (idStation) REFERENCES Station(idStation);
ALTER TABLE Chambres ADD idHotel INT(11);
ALTER TABLE Chambres ADD CONSTRAINT FK_Chambres_Hotels FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel);
