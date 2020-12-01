-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 01 déc. 2020 à 14:23
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `convention`
--
CREATE DATABASE IF NOT EXISTS `convention` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `convention`;

-- --------------------------------------------------------

--
-- Structure de la table `animateurs`
--

DROP TABLE IF EXISTS `animateurs`;
CREATE TABLE IF NOT EXISTS `animateurs` (
  `idAnimateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomAnimateur` varchar(50) NOT NULL,
  `prenomAnimateur` varchar(50) NOT NULL,
  `titreAnimateur` varchar(50) NOT NULL,
  `dateDebut` date NOT NULL,
  `dateFin` date NOT NULL,
  `idEmplacement` int(11) NOT NULL,
  PRIMARY KEY (`idAnimateur`),
  KEY `FK_animateurs_emplacements` (`idEmplacement`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `animateurs`
--

INSERT INTO `animateurs` (`idAnimateur`, `nomAnimateur`, `prenomAnimateur`, `titreAnimateur`, `dateDebut`, `dateFin`, `idEmplacement`) VALUES
(1, 'Cugny', 'Maxime', 'Vendeur', '2020-12-25', '2020-12-20', 1),
(2, 'Hovelynck', 'Bryan', 'Présentateur', '2020-12-25', '2020-12-20', 2),
(3, 'Pietka', 'Cédric', 'Vendeur', '2020-12-25', '2020-12-20', 3);

-- --------------------------------------------------------

--
-- Structure de la table `conventions`
--

DROP TABLE IF EXISTS `conventions`;
CREATE TABLE IF NOT EXISTS `conventions` (
  `idConvention` int(11) NOT NULL AUTO_INCREMENT,
  `nomConvention` varchar(50) NOT NULL,
  `categorieConvention` varchar(50) NOT NULL,
  `idSalle` int(11) NOT NULL,
  PRIMARY KEY (`idConvention`),
  KEY `FK_conventions_salles` (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `conventions`
--

INSERT INTO `conventions` (`idConvention`, `nomConvention`, `categorieConvention`, `idSalle`) VALUES
(1, 'PGW', 'Jeux vidéos', 1),
(2, 'PHP Conference', 'Informatique', 2),
(3, 'Portes ouvertes AFPA', 'Portes ouvertes', 3);

-- --------------------------------------------------------

--
-- Structure de la table `emplacements`
--

DROP TABLE IF EXISTS `emplacements`;
CREATE TABLE IF NOT EXISTS `emplacements` (
  `idEmplacement` int(11) NOT NULL AUTO_INCREMENT,
  `numeroEmplacement` varchar(50) NOT NULL,
  `idSalle` int(11) NOT NULL,
  PRIMARY KEY (`idEmplacement`),
  KEY `FK_emplacements_salles` (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `emplacements`
--

INSERT INTO `emplacements` (`idEmplacement`, `numeroEmplacement`, `idSalle`) VALUES
(1, '258', 1),
(2, '999', 2),
(3, '666', 3);

-- --------------------------------------------------------

--
-- Structure de la table `multilingue`
--

DROP TABLE IF EXISTS `multilingue`;
CREATE TABLE IF NOT EXISTS `multilingue` (
  `idTexte` int(11) NOT NULL AUTO_INCREMENT,
  `codeTexte` varchar(50) NOT NULL,
  `codeLangue` varchar(2) NOT NULL,
  `Texte` varchar(200) NOT NULL,
  PRIMARY KEY (`idTexte`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `multilingue`
--

INSERT INTO `multilingue` (`idTexte`, `codeTexte`, `codeLangue`, `Texte`) VALUES
(4, 'titreAjouter', 'EN', 'Add'),
(3, 'titreAjouter', 'FR', 'Ajouter'),
(5, 'titreDetail', 'FR', 'Aller voir une visite'),
(6, 'titreDetail', 'EN', 'Go see a visit'),
(7, 'titreModifier', 'FR', 'Aller modifier une visite'),
(12, 'titreModifier', 'EN', 'Go update a visit'),
(13, 'titreSupprimer', 'FR', 'Aller supprimer une visite'),
(14, 'titreSupprimer', 'EN', 'Go delete a visit'),
(15, 'dateVisite', 'FR', 'Date de la visite'),
(16, 'dateVisite', 'EN', 'Date of the visit'),
(17, 'idVisiteur', 'FR', 'Id Visiteur'),
(18, 'idVisiteur', 'EN', 'Visitor Id'),
(19, 'idConvention', 'FR', 'Id Convention'),
(20, 'idConvention', 'EN', 'Convention Id'),
(21, 'retour', 'FR', 'Retour'),
(22, 'retour', 'EN', 'Return'),
(23, 'modifier', 'FR', 'Modifier'),
(24, 'modifier', 'EN', 'Update'),
(25, 'titreConvention', 'FR', 'Bienvenue sur le site des conventions'),
(26, 'titreConvention', 'EN', 'Welcome on the convention website'),
(27, 'animateurs', 'FR', 'Animateurs'),
(28, 'animateurs', 'EN', 'Animators'),
(29, 'conventions', 'FR', 'Conventions'),
(30, 'conventions', 'EN', 'Conventions'),
(31, 'emplacements', 'FR', 'Emplacements'),
(32, 'emplacements', 'EN', 'Location'),
(33, 'salles', 'FR', 'Salles'),
(34, 'salles', 'EN', 'Rooms'),
(35, 'visites', 'FR', 'Visites'),
(36, 'visites', 'EN', 'Visits'),
(37, 'visiteurs', 'FR', 'Visiteurs'),
(38, 'visiteurs', 'EN', 'Visitors'),
(39, 'inscription', 'FR', 'Inscriptions'),
(40, 'inscription', 'EN', 'Inscription'),
(41, 'connection', 'FR', 'Connections'),
(42, 'connection', 'EN', 'Connexion'),
(43, 'contacts', 'FR', 'Contacts'),
(44, 'contacts', 'EN', 'Contact'),
(45, 'calendrier', 'FR', 'Calendrier'),
(46, 'calendrier', 'EN', 'Calendar'),
(47, 'faq', 'FR', 'FAQ'),
(48, 'faq', 'EN', 'FAQ'),
(49, 'reseaux', 'FR', 'Reseaux'),
(50, 'reseaux', 'EN', 'Networks');

-- --------------------------------------------------------

--
-- Structure de la table `salles`
--

DROP TABLE IF EXISTS `salles`;
CREATE TABLE IF NOT EXISTS `salles` (
  `idSalle` int(11) NOT NULL AUTO_INCREMENT,
  `nomSalle` varchar(50) NOT NULL,
  `adresseSalle` varchar(100) NOT NULL,
  `villeSalle` varchar(50) NOT NULL,
  PRIMARY KEY (`idSalle`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salles`
--

INSERT INTO `salles` (`idSalle`, `nomSalle`, `adresseSalle`, `villeSalle`) VALUES
(1, 'AccorHotelArena', '128 rue de toto', 'Paris'),
(2, 'Bercy', '38 rue OUI', 'Dunkerque'),
(3, 'AFPA', '158 avenue de la gironde', 'Lyon');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nomUtilisateur` varchar(50) NOT NULL,
  `prenomUtilisateur` varchar(50) NOT NULL,
  `motDePasseUtilisateur` varchar(50) NOT NULL,
  `adresseMailUtilisateur` varchar(70) NOT NULL,
  `roleUtilisateur` varchar(50) NOT NULL,
  `pseudoUtilisateur` varchar(50) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `roleUtilisateur`, `pseudoUtilisateur`) VALUES
(1, 'Roronoa', 'Zoro', 'OnePiece', 'RoronoaZoro@gmail.com', 'Utilisateur', 'ZoroD'),
(3, 'test', 'test', 'test', 'test@mail.com', 'Utilisateur', 'test'),
(4, 'test2', 'test2', '69566403f12c5a71d93cc155573541d3', 'test2@gmail.com', 'Utilisateur', 'test2');

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

DROP TABLE IF EXISTS `visite`;
CREATE TABLE IF NOT EXISTS `visite` (
  `idVisite` int(11) NOT NULL AUTO_INCREMENT,
  `dateVisite` date NOT NULL,
  `idVisiteur` int(10) NOT NULL,
  `idConvention` int(10) NOT NULL,
  PRIMARY KEY (`idVisite`),
  KEY `FK_visites_visiteurs` (`idVisiteur`),
  KEY `FK_visites_conventions` (`idConvention`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`idVisite`, `dateVisite`, `idVisiteur`, `idConvention`) VALUES
(1, '2020-12-22', 1, 2),
(2, '2020-12-22', 2, 3),
(3, '2020-12-22', 3, 1),
(7, '2020-12-26', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
CREATE TABLE IF NOT EXISTS `visiteurs` (
  `idVisiteur` int(11) NOT NULL AUTO_INCREMENT,
  `nomVisiteur` varchar(50) NOT NULL,
  `prenomVisiteur` varchar(50) NOT NULL,
  `adresseVisiteur` varchar(100) NOT NULL,
  `codePostalVisiteur` varchar(10) NOT NULL,
  `villeVisiteur` varchar(50) NOT NULL,
  PRIMARY KEY (`idVisiteur`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`idVisiteur`, `nomVisiteur`, `prenomVisiteur`, `adresseVisiteur`, `codePostalVisiteur`, `villeVisiteur`) VALUES
(1, 'Toto', 'Titi', '125 rue de la rue', '52689', 'Dunkerque'),
(2, 'Tuto', 'Tutu', '265 rue de la rue', '62100', 'Calais'),
(3, 'Totu', 'Tata', '323 rue des avenues', '323232', 'Paris');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `animateurs`
--
ALTER TABLE `animateurs`
  ADD CONSTRAINT `FK_animateurs_emplacements` FOREIGN KEY (`idEmplacement`) REFERENCES `emplacements` (`idEmplacement`);

--
-- Contraintes pour la table `conventions`
--
ALTER TABLE `conventions`
  ADD CONSTRAINT `FK_conventions_salles` FOREIGN KEY (`idSalle`) REFERENCES `salles` (`idSalle`);

--
-- Contraintes pour la table `emplacements`
--
ALTER TABLE `emplacements`
  ADD CONSTRAINT `FK_emplacements_salles` FOREIGN KEY (`idSalle`) REFERENCES `salles` (`idSalle`);

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `FK_visites_conventions` FOREIGN KEY (`idConvention`) REFERENCES `conventions` (`idConvention`),
  ADD CONSTRAINT `FK_visites_visiteurs` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteurs` (`idVisiteur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
