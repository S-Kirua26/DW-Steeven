-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 20 oct. 2020 à 08:25
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
-- Base de données : `france`
--

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
CREATE TABLE IF NOT EXISTS `localisation` (
  `IdLocalisation` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(50) NOT NULL,
  `nomRegion` varchar(50) NOT NULL,
  `numeroRegion` int(11) NOT NULL,
  PRIMARY KEY (`IdLocalisation`)
) ENGINE=MyISAM AUTO_INCREMENT=212 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `localisation`
--

INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(1, 'Ain', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(2, 'Aisne', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(3, 'Allier', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(4, 'Alpes-de-Haute-Provence', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(5, 'Hautes-Alpes', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(6, 'Alpes-Maritimes', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(7, 'Ardèche', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(8, 'Ardennes', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(9, 'Ariège', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(10, 'Aube', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(11, 'Aude', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(12, 'Aveyron', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(13, 'Bouches-du-Rhône', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(14, 'Calvados', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(15, 'Cantal', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(16, 'Charente', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(17, 'Charente-Maritime', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(18, 'Cher', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(19, 'Correze', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(20, "Côte-d\'Or", 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(21, "Côtes-d\'Armor", 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(22, 'Creuse', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(23, 'Dordogne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(24, 'Doubs', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(25, 'Drôme', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(26, 'Eure', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(27, 'Eure-et-Loir', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(28, 'Finistère', 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(29, 'Corse-du-Sud', 'Corse', 11);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(30, 'Haute-Corse ', 'Corse', 11);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(31, 'Gard', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(32, 'Haute-Garonne', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(33, 'Gers', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(34, 'Gironde', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(35, 'Hérault', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(36, 'Ille-et-Vilaine', 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(37, 'Indre', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(38, 'Indre-et-Loire', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(39, 'Isère', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(40, 'Jura', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(41, 'Landes', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(42, 'Loir-et-Cher', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(43, 'Loire', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(44, 'Haute-Loire', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(45, 'Loire-Atlantique', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(46, 'Loiret', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(47, 'Lot', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(48, 'Lot-et-Garonne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(49, 'Lozère', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(50, 'Maine-et-Loire', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(51, 'Manche', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(52, 'Marne', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(53, 'Haute-Marne', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(54, 'Mayenne', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(55, 'Meurthe-et-Moselle', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(56, 'Meuse', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(57, 'Morbihan', 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(58, 'Moselle', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(59, 'Nièvre', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(60, 'Nord', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(61, 'Oise', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(62, 'Orne', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(63, 'Pas-de-Calais', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(64, 'Puy-de-Dôme', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(65, 'Pyrénées-Atlantiques', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(66, 'Hautes-Pyrénées', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(67, 'Pyrénées-Orientales', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(68, 'Bas-Rhin', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(69, 'Haut-Rhin', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(70, 'Rhône', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(71, 'Haute-Saône', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(72, 'Saône-et-Loire', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(73, 'Sarthe', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(74, 'Savoie', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(75, 'Haute-Savoie', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(76, 'Paris', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(77, 'Seine-Maritime', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(78, 'Seine-et-Marne', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(79, 'Yvelines', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(80, 'Deux-Sèvres', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(81, 'Somme', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(82, 'Tarn', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(83, 'Tarn-et-Garonne', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(84, 'Var', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(85, 'Vaucluse', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(86, 'Vendée', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(87, 'Vienne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(88, 'Haute-Vienne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(89, 'Vosges', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(90, 'Yonne', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(91, 'Territoire de Belfort', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(92, 'Essonne', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(93, 'Hauts-de-Seine', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(94, 'Seine-Saint-Denis', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(95, 'Val-de-Marne', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(96, "Val-d\'Oise", 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(97, 'Guadeloupe', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(98, 'Martinique', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(99, 'Guyane', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(100, 'La Réunion', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(101, 'Saint-Pierre-et-Miquelon', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(102, 'Saint-Barthélemy', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(103, 'Ain', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(104, 'Aisne', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(105, 'Allier', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(106, 'Alpes-de-Haute-Provence', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(107, 'Hautes-Alpes', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(108, 'Alpes-Maritimes', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(109, 'Ardèche', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(110, 'Ardennes', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(111, 'Ariège', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(112, 'Aube', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(113, 'Aude', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(114, 'Aveyron', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(115, 'Bouches-du-Rhône', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(116, 'Calvados', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(117, 'Cantal', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(118, 'Charente', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(119, 'Charente-Maritime', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(120, 'Cher', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(121, 'Correze', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(122, "Côte-d\'Or", 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(123, "Côtes-d\'Armor", 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(124, 'Creuse', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(125, 'Dordogne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(126, 'Doubs', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(127, 'Drôme', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(128, 'Eure', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(129, 'Eure-et-Loir', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(130, 'Finistère', 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(131, 'Corse-du-Sud', 'Corse', 11);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(132, 'Haute-Corse ', 'Corse', 11);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(133, 'Gard', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(134, 'Haute-Garonne', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(135, 'Gers', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(136, 'Gironde', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(137, 'Hérault', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(138, 'Ille-et-Vilaine', 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(139, 'Indre', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(140, 'Indre-et-Loire', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(141, 'Isère', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(142, 'Jura', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(143, 'Landes', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(144, 'Loir-et-Cher', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(145, 'Loire', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(146, 'Haute-Loire', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(147, 'Loire-Atlantique', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(148, 'Loiret', 'Centre-Val de Loire', 8);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(149, 'Lot', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(150, 'Lot-et-Garonne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(151, 'Lozère', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(152, 'Maine-et-Loire', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(153, 'Manche', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(154, 'Marne', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(155, 'Haute-Marne', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(156, 'Mayenne', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(157, 'Meurthe-et-Moselle', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(158, 'Meuse', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(159, 'Morbihan', 'Bretagne', 10);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(160, 'Moselle', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(161, 'Nièvre', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(162, 'Nord', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(163, 'Oise', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(164, 'Orne', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(165, 'Pas-de-Calais', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(166, 'Puy-de-Dôme', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(167, 'Pyrénées-Atlantiques', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(168, 'Hautes-Pyrénées', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(169, 'Pyrénées-Orientales', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(170, 'Bas-Rhin', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(171, 'Haut-Rhin', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(172, 'Rhône', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(173, 'Haute-Saône', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(174, 'Saône-et-Loire', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(175, 'Sarthe', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(176, 'Savoie', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(177, 'Haute-Savoie', 'Auvergne-Rhône-Alpes', 1);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(178, 'Paris', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(179, 'Seine-Maritime', 'Normandie', 6);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(180, 'Seine-et-Marne', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(181, 'Yvelines', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(182, 'Deux-Sèvres', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(183, 'Somme', 'Hauts-de-France', 2);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(184, 'Tarn', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(185, 'Tarn-et-Garonne', 'Occitanie', 5);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(186, 'Var', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(187, 'Vaucluse', "Provence-Alpes-Côte d\'Azur", 3);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(188, 'Vendée', 'Pays de la Loire', 12);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(189, 'Vienne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(190, 'Haute-Vienne', 'Nouvelle-Aquitaine', 7);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(191, 'Vosges', 'Grand-Est', 4);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(192, 'Yonne', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(193, 'Territoire de Belfort', 'Bourgogne-Franche-Comté', 9);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(194, 'Essonne', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(195, 'Hauts-de-Seine', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(196, 'Seine-Saint-Denis', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(197, 'Val-de-Marne', 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(198, "Val-d\'Oise", 'Ile-de-France', 13);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(199, 'Guadeloupe', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(200, 'Martinique', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(201, 'Guyane', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(202, 'La Réunion', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(203, 'Saint-Pierre-et-Miquelon', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(204, 'Mayotte', 'INCONNU', 0);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(205, 'Saint-Barthélemy', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(206, 'Saint-Martin', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(207, 'Terres australes et antarctiques françaises', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(208, 'Wallis-et-Futuna', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(209, 'Polynésie française', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(210, 'Nouvelle-Calédonie', 'DOM-TOM', 14);
INSERT INTO `localisation` (`IdLocalisation`, `nomDepartement`, `nomRegion`, `numeroRegion`) VALUES(211, 'Clipperton', 'DOM-TOM', 14);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
