
--
-- Base de données :  `GestionRepresentant`
--
DROP DATABASE IF EXISTS `base de données 95 steeven`;
CREATE DATABASE IF NOT EXISTS `base de données 95 steeven` DEFAULT CHARACTER SET utf8 ;
USE `base de données 95 steeven`;
-- --------------------------------------------------------

--
-- Structure de la table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
CREATE TABLE IF NOT EXISTS `eleves` (
  `idEleve` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(50) DEFAULT NULL,
  `prenomEleve` varchar(50) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEleve`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
CREATE TABLE IF NOT EXISTS `enseignants` (
  `idEnseignant` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMatiere` varchar(50) DEFAULT NULL,
  `nomEnseignant` varchar(50) DEFAULT NULL,
  `prenomEnseignant` varchar(50) DEFAULT NULL,
  `pseudoEnseignant` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEnseignant`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
CREATE TABLE IF NOT EXISTS `matieres` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMatiere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `idNote` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(50) DEFAULT NULL,
  `prenomEleve` varchar(50) DEFAULT NULL,
  `noteObtenue` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNote`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `loginUtilisateur` varchar(50) DEFAULT NULL,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `prenomUtilisateur` varchar(50) DEFAULT NULL,
  `motDePasseUtilisateur` varchar(50) DEFAULT NULL,
  `idRole` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;

ALTER TABLE `utilisateurs` ADD FOREIGN KEY (`IdRole`) REFERENCES `roles`(`IdRole`);

-- --------------------------------------------------------

--
-- Structures de la table `suivis`
--

DROP TABLE IF EXISTS `suivis`;
CREATE TABLE IF NOT EXISTS `suivis` (
  `idSuivi` int(11) NOT NULL AUTO_INCREMENT,
  `note` int(11) DEFAULT NULL,
  `idMatiere` int(11) DEFAULT NULL,
  `idEleve` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSuivi`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;
COMMIT;

ALTER TABLE `suivis` ADD FOREIGN KEY (`idMatiere`) REFERENCES `matieres`(`idMatiere`);
ALTER TABLE `suivis` ADD FOREIGN KEY (`idEleve`) REFERENCES `eleves`(`idEleve`);

/*********************************************************** Remplissage de la base **************************************************/

/********************************************* table eleve ***************************************************/
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve,classe) VALUES (NULL, 'Durand', 'Paul','CP');
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve,classe) VALUES (NULL, 'Dupont', 'Charles','CP');
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve,classe) VALUES (NULL, 'Merise', 'Cerise','CE1');
INSERT INTO Eleves (idEleve, nomEleve, prenomEleve,classe) VALUES (NULL, 'Prévert', 'Paul','CE1');

/********************************************* table enseignants *********************************************/
INSERT INTO Enseignants (idEnseignant, LibelleMatiere, nomEnseignant, prenomEnseignant,pseudoEnseignant) VALUES (NULL, 'Français','Camara', 'Catherine','CamaraC');
INSERT INTO Enseignants (idEnseignant, LibelleMatiere, nomEnseignant, prenomEnseignant,pseudoEnseignant) VALUES (NULL, 'Math', 'Duval', 'Henri','DuvalH');
INSERT INTO Enseignants (idEnseignant, LibelleMatiere, nomEnseignant, prenomEnseignant,pseudoEnseignant) VALUES (NULL, 'Histoire', 'Trombi', 'Bernard','TrombiB');
INSERT INTO Enseignants (idEnseignant, LibelleMatiere, nomEnseignant, prenomEnseignant,pseudoEnseignant) VALUES (NULL, 'Sport', 'Lalo', 'Laurent','Lalol');
INSERT INTO Enseignants (idEnseignant, LibelleMatiere, nomEnseignant, prenomEnseignant,pseudoEnseignant) VALUES (NULL, 'Sciences', 'Mojille', 'Didier','MojilleD');

/********************************************* table matieres ***************************************************/
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, 'Francais');
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, 'Math');
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, 'Histoire');
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, 'Sciences');
INSERT INTO Matieres (idMatiere, libelleMatiere) VALUES (NULL, 'EPS');

/********************************************* table notes ***************************************************/
INSERT INTO Notes (idNote, nomEleve, prenomEleve, noteObtenue) VALUES (NULL, 'Durand', 'Paul', 12);
INSERT INTO Notes (idNote, nomEleve, prenomEleve, noteObtenue) VALUES (NULL, 'Dupond', 'Charles', 14);
INSERT INTO Notes (idNote, nomEleve, prenomEleve, noteObtenue) VALUES (NULL, 'Merise', 'Cerise', 8);
INSERT INTO Notes (idNote, nomEleve, prenomEleve, noteObtenue) VALUES (NULL, 'Prevert', 'Paul', 15);

/********************************************* table roles ***************************************************/
INSERT INTO Roles (idRole, nomRole) VALUES (NULL, 'Proviseur');
INSERT INTO Roles (idRole, nomRole) VALUES (NULL, 'Enseignant');

/********************************************* table utilisateurs ***************************************************/
INSERT INTO Utilisateurs (idUtilisateur, loginUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasseUtilisateur, idRole) VALUES (NULL, 'laureMichel', 'Michel', 'Laure', 'c32f54777019148fbc5119c52396d2d4', 1);
INSERT INTO Utilisateurs (idUtilisateur, loginUtilisateur, nomUtilisateur, prenomUtilisateur, motDePasseUtilisateur, idRole) VALUES (NULL, 'PascalVentil', 'Ventil', 'Pascal', '0d7d409f73869ddf285191288349e950', 2);



