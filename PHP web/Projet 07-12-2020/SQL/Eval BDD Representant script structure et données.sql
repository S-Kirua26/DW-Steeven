
--
-- Base de données :  `GestionRepresentant`
--
DROP DATABASE IF EXISTS `GestionRepresentant`;
CREATE DATABASE IF NOT EXISTS `GestionRepresentant` DEFAULT CHARACTER SET utf8 ;
USE `GestionRepresentant`;
-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `IdClient` int(11) NOT NULL AUTO_INCREMENT,
  `NomClient` varchar(25) DEFAULT NULL,
  `VilleClient` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdClient`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `IdProduit` int(11) NOT NULL AUTO_INCREMENT,
  `NomProduit` varchar(25) DEFAULT NULL,
  `CouleurProduit` varchar(25) DEFAULT NULL,
  `PoidsProduit` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdProduit`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `representants`
--

DROP TABLE IF EXISTS `representants`;
CREATE TABLE IF NOT EXISTS `representants` (
  `IdRepres` int(11) NOT NULL AUTO_INCREMENT,
  `NomRepres` varchar(25) DEFAULT NULL,
  `VilleRepres` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdRepres`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ventes`
--

DROP TABLE IF EXISTS `ventes`;
CREATE TABLE IF NOT EXISTS `ventes` (
  `IdVente` int(11) NOT NULL AUTO_INCREMENT,
  `IdRepres` int(11) DEFAULT NULL,
  `IdProduit` int(11) DEFAULT NULL,
  `IdClient` int(11) DEFAULT NULL,
  `Quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdVente`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;

ALTER TABLE `ventes` ADD FOREIGN KEY (`IdClient`) REFERENCES `clients`(`IdClient`); 
ALTER TABLE `ventes` ADD FOREIGN KEY (`IdProduit`) REFERENCES `produits`(`IdProduit`); 
ALTER TABLE `ventes` ADD FOREIGN KEY (`IdRepres`) REFERENCES `representants`(`IdRepres`);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `IdRole` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdRole`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IdUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `prenomUtilisateur` varchar(50) DEFAULT NULL,
  `ageUtilisateur` int(11) DEFAULT NULL,
  `pseudoUtilisateur` varchar(50) DEFAULT NULL,
  `motDePasseUtilisateur` varchar(50) DEFAULT NULL,
  `IdRepres` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdUtilisateur`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;

ALTER TABLE `utilisateurs` ADD FOREIGN KEY (`IdRole`) REFERENCES `roles`(`IdRole`);

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `IdTexte` int(11) NOT NULL AUTO_INCREMENT,
  `CodeTexte` varchar(1000) DEFAULT NULL,
  `CodeLangue` varchar(1000) DEFAULT NULL,
  `Texte` text DEFAULT NULL,
  PRIMARY KEY (`IdTexte`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

/********************************************* table representant ***************************************************/
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (1, 'Stephane', 'Lyon');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (2, 'Benjamin', 'Paris');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (3, 'Leonard', 'Lyon');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (4, 'Antoine', 'Brest');
INSERT INTO REPRESENTANTS (IdRepres, NomRepres, VilleRepres) VALUES (5, 'Bruno', 'Bayonne');

/********************************************* table produits ***************************************************/
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (1, 'Aspirateur', 'Rouge', 3546);
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (2, 'Trottinette', 'Bleu', 1423);
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (3, 'Chaise', 'Blanc', 3827);
INSERT INTO PRODUITS (IdProduit, NomProduit, CouleurProduit, PoidsProduit) VALUES (4, 'Tapis', 'Rouge', 1423);

/********************************************* table clients ***************************************************/
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (1, 'Alice', 'Lyon');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (2, 'Bruno', 'Lyon');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (3, 'Charles', 'Compiègne');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (4, 'Denis', 'Montpellier');
INSERT INTO CLIENTS (IdClient, NomClient, VilleClient) VALUES (5, 'Emile', 'Strasbourg');

/********************************************* table ventes ***************************************************/
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(1,1,	1, 1,	1);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(2,1,	1, 2,	1);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(3,2,	2, 3,	1);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(4,4,	3, 3,	200);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(5,3,	4, 2,	190);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(6,1,	3, 2,	300);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(7,3,	1, 2,	120);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(8,3,	1, 4,	120);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(9,3,	4, 4,	2);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(10,3, 1, 1, 3);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(11,3, 4,	1, 5);
INSERT	INTO	VENTES	(IdVente, IdRepres,	IdProduit, IdClient, Quantite)	VALUES	(12,3, 1,	3, 1);

/********************************************* table roles ***************************************************/
INSERT INTO ROLES (IdRole, NomRole) VALUES (1, 'Utilisateur');
INSERT INTO ROLES (IdRole, NomRole) VALUES (2, 'Administrateur');

/********************************************* table utilisateurs ***************************************************/
INSERT	INTO	UTILISATEURS	(IdUtilisateur, nomUtilisateur, prenomUtilisateur, ageUtilisateur, pseudoUtilisateur, motDePasseUtilisateur, idRole)	VALUES	(1,'Roronoa',	'Zoro', 21,	'Roronoa', 'Zoro',1);
INSERT	INTO	UTILISATEURS	(IdUtilisateur, nomUtilisateur, prenomUtilisateur, ageUtilisateur, pseudoUtilisateur, motDePasseUtilisateur, idRole)	VALUES	(2,'Vinsmoke',	'Sanji', 20,	'Vinsmoke', 'Sanji',2);

/********************************************* table texte ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"titreHeader","FR","Bienvenue sur le site de gestion");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"titreHeader","EN","Welcome to the gestion website");

/********************************************* liste Client ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterClient","FR","Ajouter un client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterClient","EN","Add a customer");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailClient","FR","Details du client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailClient","EN","Customer Information");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierClient","FR","Modifier un client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierClient","EN","Modify a customer");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerClient","FR","Supprimer un client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerClient","EN","Delete a customer");

/********************************************* liste Produit ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterProduit","FR","Ajouter un Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterProduit","EN","Add a product");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"rechercherProduit","FR","Rechercher un Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"rechercherProduit","EN","Research a product");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailProduit","FR","Details du Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailProduit","EN","Product Information");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierProduit","FR","Modifier un Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierProduit","EN","Modify a product");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerProduit","FR","Supprimer un Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerProduit","EN","Delete a product");

/********************************************* liste Representant ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterRepresentant","FR","Ajouter un Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterRepresentant","EN","Add a Delegate");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailRepresentant","FR","Details du Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailRepresentant","EN","Delegate Information");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierRepresentant","FR","Modifier un Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierRepresentant","EN","Modify a Delegate");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerRepresentant","FR","Supprimer un Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerRepresentant","EN","Delete a Delegate");

/********************************************* liste Vente ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterVente","FR","Ajouter une Vente");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterVente","EN","Add a Sale");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailVente","FR","Details de la Vente");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailVente","EN","Sale Information");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierVente","FR","Modifier une Vente");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierVente","EN","Modify a Sale");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerVente","FR","Supprimer une Vente");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerVente","EN","Delete a Sale");

/********************************************* liste Utilisateur ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterUtilisateur","FR","Ajouter un Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterUtilisateur","EN","Add a User");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailUtilisateur","FR","Details Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailUtilisateur","EN","User Information");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierUtilisateur","FR","Modifier un Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierUtilisateur","EN","Modify a User");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerUtilisateur","FR","Supprimer un Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerUtilisateur","EN","Delete a User");

/********************************************* liste Role ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterRole","FR","Ajouter un Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouterRole","EN","Add a Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailRole","FR","Details du Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"detailRole","EN","Role Information");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierRole","FR","Modifier un Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifierRole","EN","Modify a Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerRole","FR","Supprimer un Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimerRole","EN","Delete a Role");


/********************************************* Nav ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"connection","FR","Connection");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"connection","EN","Connexion");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"inscription","FR","Inscription");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"inscription","EN","Registration");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"deconnection","FR","Deconnection");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"deconnection","EN","Sign out");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"client","FR","Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"client","EN","Customer");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"produit","FR","Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"produit","EN","Product");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"representant","FR","Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"representant","EN","Delegate");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"vente","FR","Vente");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"vente","EN","Sale");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"utilisateur","FR","Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"utilisateur","EN","User");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"role","FR","Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"role","EN","Role");


/********************************************* Footer ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"contact","FR","Contact");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"contact","EN","Contact");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"adressePostal","FR","Adresse Postal");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"adressePostal","EN","Postal Adress");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"adresseMail","FR","Adresse Mail");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"adresseMail","EN","Mail Adress");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"numeroTel","FR","Numero de Telephone");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"numeroTel","EN","Phone numero");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"reseaux","FR","Reseaux");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"reseaux","EN","Network");


/***************************** Bouton ajouter, modifier, supprimer *******************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"retour","FR","Retour");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"retour","EN","Return");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouter","FR","Ajouter");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ajouter","EN","Add");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifier","FR","Modifier");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"modifier","EN","Modify");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimer","FR","Supprimer");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"supprimer","EN","Delete");


/********************************************* Formualire Client ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomClient","FR","Nom du Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomClient","EN","Customer Name");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"villeClient","FR","Ville du Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"villeClient","EN","Customer City");

/********************************************* Formualire Produit ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomProduit","FR","Nom du Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomProduit","EN","Product Name");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"couleurProduit","FR","Couleur du Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"couleurProduit","EN","Product Color");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"poidsProduit","FR","Poids du Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"poidsProduit","EN","Product Weight");

/********************************************* Formualire Representant ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomRepresentant","FR","Nom du Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomRepresentant","EN","Delegate Name");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"villeRepresentant","FR","Ville du Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"villeRepresentant","EN","Delegate City");

/********************************************* Formualire Vente ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"idRepresentant","FR","ID Representant");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"idRepresentant","EN","Delegate ID");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"idProduit","FR","ID Produit");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"idProduit","EN","Product ID");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"idClient","FR","ID Client");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"idClient","EN","Customer ID");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"quantite","FR","Quantite");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"quantite","EN","Quantity");

/********************************************* Formualire Utilisateur ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomUtilisateur","FR","Nom Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomUtilisateur","EN","User Name");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"prenomUtilisateur","FR","Prenom Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"prenomUtilisateur","EN","User Surname");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ageUtilisateur","FR","Age Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"ageUtilisateur","EN","User Age");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"pseudoUtilisateur","FR","Pseudo Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"pseudoUtilisateur","EN","Pseudo User");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"motDePasseUtilisateur","FR","Mot De Passe Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"motDePasseUtilisateur","EN","User Password");

/********************************************* Formualire Role ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomRole","FR","Nom Role");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"nomRole","EN","Role Name");

/********************************************* Formualire connexion ***************************************************/
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"confirmMDPUtilisateur","FR","Confirmation Mot De Passe Utilisateur");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"confirmMDPUtilisateur","EN","Confirm User Password");



