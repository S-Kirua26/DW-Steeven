INSERT INTO `salles`(`nomSalle`, `adresseSalle`, `villeSalle`) VALUES ("AccorHotelArena","128 rue de toto","Paris");
INSERT INTO `salles`(`nomSalle`, `adresseSalle`, `villeSalle`) VALUES ("Bercy","38 rue OUI","Dunkerque");
INSERT INTO `salles`(`nomSalle`, `adresseSalle`, `villeSalle`) VALUES ("AFPA","158 avenue de la gironde","Lyon");

INSERT INTO `emplacements`(`numeroEmplacement`, `idSalle`) VALUES ("258","1");
INSERT INTO `emplacements`(`numeroEmplacement`, `idSalle`) VALUES ("999","2");
INSERT INTO `emplacements`(`numeroEmplacement`, `idSalle`) VALUES ("666","3");

INSERT INTO `conventions`(`nomConvention`, `categorieConvention`, `idSalle`) VALUES ("PGW","Jeux vidéos","1");
INSERT INTO `conventions`(`nomConvention`, `categorieConvention`, `idSalle`) VALUES ("PHP Conference","Informatique","2");
INSERT INTO `conventions`(`nomConvention`, `categorieConvention`, `idSalle`) VALUES ("Portes ouvertes AFPA","Portes ouvertes","3");

INSERT INTO `animateurs`(`nomAnimateur`, `prenomAnimateur`, `titreAnimateur`, `dateDebut`, `dateFin`, `idEmplacement`) VALUES ("Cugny","Maxime","Vendeur","2020-12-25","2020-12-20","1");
INSERT INTO `animateurs`(`nomAnimateur`, `prenomAnimateur`, `titreAnimateur`, `dateDebut`, `dateFin`, `idEmplacement`) VALUES ("Hovelynck","Bryan","Présentateur","2020-12-25","2020-12-20","2");
INSERT INTO `animateurs`(`nomAnimateur`, `prenomAnimateur`, `titreAnimateur`, `dateDebut`, `dateFin`, `idEmplacement`) VALUES ("Pietka","Cédric","Vendeur","2020-12-25","2020-12-20","3");

INSERT INTO `visiteurs`(`nomVisiteur`, `prenomVisiteur`, `adresseVisiteur`, `codePostalVisiteur`, `villeVisiteur`) VALUES ("Toto","Titi","125 rue de la rue","52689","Dunkerque");
INSERT INTO `visiteurs`(`nomVisiteur`, `prenomVisiteur`, `adresseVisiteur`, `codePostalVisiteur`, `villeVisiteur`) VALUES ("Tuto","Tutu","265 rue de la rue","62100","Calais");
INSERT INTO `visiteurs`(`nomVisiteur`, `prenomVisiteur`, `adresseVisiteur`, `codePostalVisiteur`, `villeVisiteur`) VALUES ("Totu","Tata","323 rue des avenues","323232","Paris");

INSERT INTO `visite`( `dateVisite`, `idVisiteur`, `idConvention`) VALUES ("2020-12-22","1","2");
INSERT INTO `visite`( `dateVisite`, `idVisiteur`, `idConvention`) VALUES ("2020-12-22","2","3");
INSERT INTO `visite`( `dateVisite`, `idVisiteur`, `idConvention`) VALUES ("2020-12-22","3","1");
