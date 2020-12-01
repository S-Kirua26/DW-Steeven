DROP DATABASE IF EXISTS convention;

CREATE DATABASE convention;

USE convention;

CREATE TABLE convention.visiteurs
(
    idVisiteur int (11) not null auto_increment PRIMARY KEY,
    nomVisiteur varchar(50) not null,
    prenomVisiteur varchar(50) not null,
    adresseVisiteur varchar(100) not null,
    codePostalVisiteur varchar(10) not null,
    villeVisiteur varchar(50) not null
)ENGINE = INNODB,
CHARSET = UTF8;

CREATE TABLE convention.visite
(
    idVisite int(11) not null auto_increment PRIMARY KEY,
    dateVisite date not null,
    idVisiteur int(10) not null,
    idConvention int(10) not null
)ENGINE = INNODB,
CHARSET = UTF8;

CREATE TABLE convention.conventions
(
    idConvention int(11) not null auto_increment PRIMARY KEY,
    nomConvention varchar(50) not null,
    categorieConvention varchar(50) not null,
    idSalle int(11) not null
)ENGINE = INNODB,
CHARSET = UTF8;

CREATE TABLE convention.salles
(
    idSalle int(11) not null auto_increment PRIMARY KEY,
    nomSalle varchar(50) not null,
    adresseSalle varchar(100) not null,
    villeSalle varchar(50) not null
)ENGINE = INNODB,
CHARSET = UTF8;

CREATE TABLE convention.emplacements
(
    idEmplacement int(11) not null auto_increment PRIMARY KEY,
    numeroEmplacement varchar(50) not null,
    idSalle int(11) not null
)ENGINE = INNODB,
CHARSET = UTF8;

CREATE TABLE convention.animateurs
(
    idAnimateur int(11) not null auto_increment PRIMARY KEY,
    nomAnimateur varchar(50) not null,
    prenomAnimateur varchar(50) not null,
    titreAnimateur varchar(50) not null,
    dateDebut date not null,
    dateFin date not null,
    idEmplacement int(11) not null
)ENGINE = INNODB,
CHARSET = UTF8;

ALTER TABLE convention.visite ADD CONSTRAINT FK_visites_visiteurs FOREIGN KEY (idVisiteur) REFERENCES visiteurs(idVisiteur);
ALTER TABLE convention.visite ADD CONSTRAINT FK_visites_conventions FOREIGN KEY (idConvention) REFERENCES conventions(idConvention);
ALTER TABLE convention.conventions ADD CONSTRAINT FK_conventions_salles FOREIGN KEY (idSalle) REFERENCES salles(idSalle);
ALTER TABLE convention.emplacements ADD CONSTRAINT FK_emplacements_salles FOREIGN KEY (idSalle) REFERENCES salles(idSalle);
ALTER TABLE convention.animateurs ADD CONSTRAINT FK_animateurs_emplacements FOREIGN KEY (idEmplacement) REFERENCES emplacements(idEmplacement);
