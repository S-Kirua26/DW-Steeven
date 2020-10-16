
CREATE DATABASE GestionConcours;

CREATE TABLE Concours
(
	IdConcours INT(11) not null AUTO_INCREMENT,
	NomConcours VARCHAR(50),
	LieuConcours VARCHAR(50),
	DotationsConcours VARCHAR(50),
	DateDuConcours DATE,
	PRIMARY KEY (IdConcours)
)
CREATE TABLE Apprenti
(
	IdApprenti INT(11) not null AUTO_INCREMENT,
	NomApprenti VARCHAR(50),
	PrenomApprenti VARCHAR(50),
	PRIMARY KEY (IdApprenti)
)
CREATE TABLE Tuteur
(
	IdTuteur INT(11) not null AUTO_INCREMENT,
	NomTuteur VARCHAR(50),
	PrenomTuteur VARCHAR(50),
	PRIMARY KEY (IdTuteur)
)
CREATE TABLE ObjetCreer
(
	IdObjetCreer INT(11) not null AUTO_INCREMENT,
	NomObjet VARCHAR(50),
	PRIMARY KEY (IdObjetCreer)
)

ALTER TABLE ObjetCreer ADD IdConcours INT(11);
ALTER TABLE ObjetCreer ADD CONSTRAINT FK_ObjetCreer_Concours FOREIGN KEY IdConcours REFERENCES Concours(IdConcours);
ALTER TABLE ObjetCreer ADD IdApprenti INT(11);
ALTER TABLE ObjetCreer ADD CONSTRAINT FK_ObjetCreer_Apprenti FOREIGN KEY IdApprenti REFERENCES Apprenti(IdApprenti);
ALTER TABLE Apprenti ADD idTuteur INT(11);
ALTER TABLE Apprenti ADD CONSTRAINT FK_Apprenti_Tuteur FOREIGN KEY IdTuteur REFERENCES Tuteur(IdTuteur);
