-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 30 nov. 2020 à 16:24
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
-- Base de données : `utilisateur`
--

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
  `adresseMailUtilisateur` varchar(50) NOT NULL,
  `roleUtilisateur` varchar(30) NOT NULL,
  `pseudoUtilisateur` varchar(50) NOT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `roleUtilisateur`, `pseudoUtilisateur`) VALUES(4, 'test', 'oublier', '63722685544e79e1d61337e9b8c04b48', 'test.mail', '2', 'testing');
INSERT INTO `users` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasseUtilisateur`, `adresseMailUtilisateur`, `roleUtilisateur`, `pseudoUtilisateur`) VALUES(5, 'Roronoa', 'Zoro', 'f2151a1366ec1ef0ffd41bffa6ebdb7e', 'RoronoaZoro.mail', '1', 'ZoroD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;