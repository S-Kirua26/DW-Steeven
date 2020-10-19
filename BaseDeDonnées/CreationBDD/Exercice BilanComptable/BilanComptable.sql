DROP DATABASE IF EXISTS BilanComptable;

CREATE DATABASE BilanComptable;

USE BilanComptable;

CREATE TABLE Ecritures
( 
	IdEcriture INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	DateEcriture DATE,
	LibelleEcriture VARCHAR(4)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE LignesEcritures
(
	IdLigne INT(11) not null AUTO_INCREMENT PRIMARY KEY ,
	IntituleLigne VARCHAR(50),
	DebitLigne VARCHAR(50),
	CreditLigne VARCHAR(50)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE Comptes
(
	IdCompte INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	NumeroCompte INT,
	LibelleCompte VARCHAR(50)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE ClasseDeComptes
(
	IdClasseDeCompte INT(11) not null AUTO_INCREMENT PRIMARY KEY ,
	LibelleClasseDeCompte VARCHAR(50)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

CREATE TABLE GroupementDeClasse
(
	IdGroupement INT(11) not null AUTO_INCREMENT PRIMARY KEY,
	LibelleGroupement VARCHAR(50)
) ENGINE = INNODB DEFAULT CHARSET = UTF8;

ALTER TABLE LignesEcritures ADD IdEcriture INT(11);
ALTER TABLE LignesEcritures ADD CONSTRAINT FK_LignesEcritures_Ecritures FOREIGN KEY (IdEcriture) REFERENCES Ecritures(IdEcriture);
ALTER TABLE LignesEcritures ADD IdCompte INT(11);
ALTER TABLE LignesEcritures ADD CONSTRAINT FK_LignesEcritures_Comptes FOREIGN KEY (IdCompte) REFERENCES Comptes(IdCompte);
ALTER TABLE Comptes ADD IdClasseDeCompte INT(11);
ALTER TABLE Comptes ADD CONTRAINT FK_Comptes_ClasseDeComptes FOREIGN KEY (IdClasseDeCompte) REFERENCES ClasseDeComptes(IdClasseDeCompte);
ALTER TABLE ClasseDeComptes ADD IdGroupement INT(11);
ALTER TABLE ClasseDeComptes ADD CONSTRAINT FK_ClasseDeComptes_GroupementDeClasse FOREIGN KEY (IdGroupement) REFERENCES GroupementDeClasse(IdGroupement);
