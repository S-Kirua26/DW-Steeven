DROP DATABASE IF EXISTS Hotel;

CREATE DATABASE Hotel;

USE Hotel;

#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Station
#------------------------------------------------------------

CREATE TABLE Station(
        idStation       Int  Auto_increment  NOT NULL ,
        nomStation      Varchar (40) NOT NULL ,
        altitudeStation Varchar (10) NOT NULL
	,CONSTRAINT Station_PK PRIMARY KEY (idStation)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Hotels
#------------------------------------------------------------

CREATE TABLE Hotels(
        idHotel        Int  Auto_increment  NOT NULL ,
        nomHotel       Varchar (30) NOT NULL ,
        CategorieHotel Varchar (30) NOT NULL ,
        adresseHotel   Varchar (30) NOT NULL ,
        villeHotel     Varchar (30) NOT NULL ,
        idStation      Int NOT NULL
	,CONSTRAINT Hotels_PK PRIMARY KEY (idHotel)

	,CONSTRAINT Hotels_Station_FK FOREIGN KEY (idStation) REFERENCES Station(idStation)
)ENGINE=InnoDB;

#------------------------------------------------------------
# Table: Chambres
#------------------------------------------------------------

CREATE TABLE Chambres(
        idChambre       Int  Auto_increment  NOT NULL ,
        noChambre       Int NOT NULL ,
        TypeChambre     Varchar (30) NOT NULL ,
        CapaciteChambre Varchar (30) NOT NULL ,
        idHotel         Int NOT NULL
	,CONSTRAINT Chambres_PK PRIMARY KEY (idChambre)

	,CONSTRAINT Chambres_Hotels_FK FOREIGN KEY (idHotel) REFERENCES Hotels(idHotel)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Clients
#------------------------------------------------------------

CREATE TABLE Clients(
        idClient      Int  Auto_increment  NOT NULL ,
        nomClient     Varchar (30) NOT NULL ,
        prenomClient  Varchar (30) NOT NULL ,
        adresseClient Varchar (30) NOT NULL ,
        villeClient   Varchar (30) NOT NULL
	,CONSTRAINT Clients_PK PRIMARY KEY (idClient)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Reserve
#------------------------------------------------------------

CREATE TABLE Reserve(
        idChambre         Int NOT NULL ,
        idClient          Int NOT NULL ,
        DateDebutSejour   Date NOT NULL ,
        DateFinSejour     Date NOT NULL ,
        PrixReservation   Double NOT NULL ,
        ArrhesReservation Varchar (30) NOT NULL ,
        DateReservation   Date NOT NULL
	,CONSTRAINT Reserve_PK PRIMARY KEY (idChambre,idClient)

	,CONSTRAINT Reserve_Chambres_FK FOREIGN KEY (idChambre) REFERENCES Chambres(idChambre)
	,CONSTRAINT Reserve_Clients0_FK FOREIGN KEY (idClient) REFERENCES Clients(idClient)
)ENGINE=InnoDB;
