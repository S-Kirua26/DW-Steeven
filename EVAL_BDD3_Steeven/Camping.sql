DROP DATABASE IF EXISTS Station;

CREATE DATABASE Station;

USE Station;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

#------------------------------------------------------------
# Table: Camping
#------------------------------------------------------------

CREATE TABLE Camping(
        idCamping  Int(11)  Auto_increment  NOT NULL PRIMARY KEY,
        nomCamping Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Zone
#------------------------------------------------------------

CREATE TABLE Zones(
        idZone  Int(11)  Auto_increment  NOT NULL PRIMARY KEY,
        nomZone  Varchar (30) NOT NULL ,
        situationZone   Varchar (20) NOT NULL ,
        racordElecZone  Varchar (20) NOT NULL ,
        activiteCamping Varchar (10) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Emplacement
#------------------------------------------------------------

CREATE TABLE Emplacement(
        idEmplacement  Int(11)  Auto_increment  NOT NULL PRIMARY KEY,
        idZone Int(11) NOT NULL,
        idCamping Int(11) NOT NULL,
        typesEmplacement Varchar (50) NOT NULL ,
        parking          Varchar (50) NOT NULL ,
        prixEmplacement  Int NOT NULL,
        numeroEmplacement INT NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient  Int(11)  Auto_increment  NOT NULL PRIMARY KEY,
        nomClient  Varchar (30) NOT NULL ,
        prenomClient  Varchar (30) NOT NULL ,
        adresseClient Varchar (70) NOT NULL ,
        numTelClient  Varchar (10) NOT NULL ,
        mailClient    Varchar (10) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reserve
#------------------------------------------------------------

CREATE TABLE reserve(
        idClient  Int(11) NOT NULL,
        idEmplacement   Int(11) NOT NULL,
        dateDebutSejour Date NOT NULL ,
        dateFinSejour   Date NOT NULL ,
        optionSejour    Varchar (10) NOT NULL
)ENGINE=InnoDB;

ALTER TABLE Emplacement ADD CONSTRAINT FK_Emplacement_Camping FOREIGN KEY (idCamping) REFERENCES Camping(idCamping);
ALTER TABLE Emplacement ADD CONSTRAINT FK_Emplacement_Zones FOREIGN KEY (idZone) REFERENCES Zones(idZone);
ALTER TABLE reserve ADD CONSTRAINT FK_reserve_Clients FOREIGN KEY (idClient) REFERENCES Clients(idClient);
ALTER TABLE reserve ADD CONSTRAINT FK_reserve_Emplacement FOREIGN KEY (idEmplacement) REFERENCES Emplacement(idEmplacement);