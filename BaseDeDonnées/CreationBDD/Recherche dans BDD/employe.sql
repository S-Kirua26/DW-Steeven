-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 oct. 2020 à 16:32
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
-- Base de données : `exemple`
--

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `noemp` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `dateemb` datetime NOT NULL,
  `nosup` varchar(50) DEFAULT NULL,
  `titre` varchar(50) NOT NULL,
  `nodep` varchar(50) NOT NULL,
  `salaire` decimal(18,0) NOT NULL,
  `tauxcom` decimal(18,0) DEFAULT NULL,
  PRIMARY KEY (`noemp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(1, 'patamob', 'adhémar', '2000-03-26 00:00:00', NULL, 'président', '50', '50000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(2, 'zeublouse', 'agathe', '2000-04-15 00:00:00', '1', 'dir.distrib', '41', '35000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(3, 'kuzbidon', 'alex', '2000-05-05 00:00:00', '1', 'dir.vente', '31', '34000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(4, 'locale', 'anasthasie', '2000-05-25 00:00:00', '1', 'dir.finance', '10', '36000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(5, 'teutmaronne', 'armand', '2000-06-14 00:00:00', '1', 'dir.administratif', '50', '36000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(6, 'zoudanlkou', 'debbie', '2000-07-04 00:00:00', '2', 'chef entrepot', '41', '25000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(7, 'rivenbusse', 'elsa', '2000-07-24 00:00:00', '2', 'chef entrepot', '42', '24000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(8, 'ardelpic', 'helmut', '2000-08-13 00:00:00', '2', 'chef entrepot', '43', '23000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(9, 'peursconla', 'humphrey', '2000-09-02 00:00:00', '2', 'chef entrepot', '44', '22000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(10, 'vrante', 'helena', '2000-09-22 00:00:00', '2', 'chef entrepot', '45', '21000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(11, 'melusine', 'enfaillite', '2000-10-12 00:00:00', '3', 'représentant', '31', '25000', '10');
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(12, 'eurktumeme', 'odile', '2000-11-01 00:00:00', '3', 'représentant', '32', '26000', '12');
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(13, 'hotdeugou', 'olaf', '2000-11-21 00:00:00', '3', 'représentant', '33', '27000', '10');
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(14, 'odlavieille', 'pacome', '2000-12-11 00:00:00', '3', 'représentant', '34', '25000', '15');
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(15, 'amartakaldire', 'quentin', '2000-12-21 00:00:00', '3', 'représentant', '35', '23000', '17');
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(16, 'traibien', 'samira', '2000-12-31 00:00:00', '6', 'secrétaire', '41', '15000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(17, 'fonfec', 'sophie', '2001-01-10 00:00:00', '6', 'secrétaire', '41', '14000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(18, 'fairent', 'teddy', '2001-01-20 00:00:00', '7', 'secrétaire', '42', '13000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(19, 'blaireur', 'terry', '2001-02-09 00:00:00', '7', 'secrétaire', '42', '13000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(20, 'ajerre', 'tex', '2001-02-09 00:00:00', '8', 'secrétaire', '43', '13000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(21, 'chmonfisse', 'thierry', '2001-02-19 00:00:00', '8', 'secrétaire', '43', '12000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(22, 'phototetedemort', 'thomas', '2001-02-19 00:00:00', '9', 'secrétaire', '44', '22500', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(23, 'kaecoute', 'xavier', '2001-03-01 00:00:00', '9', 'secrétaire', '34', '11500', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(24, 'adrouille-toutltan', 'yves', '2001-03-11 00:00:00', '10', 'secrétaire', '45', '11000', NULL);
INSERT INTO `employe` (`noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom`) VALUES(25, 'anchier', 'yvon', '2001-03-21 00:00:00', '10', 'secrétaire', '45', '10000', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
