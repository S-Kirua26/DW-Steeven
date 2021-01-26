-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: basededonnees95steeven
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `basededonnees95steeven`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `basededonnees95steeven` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `basededonnees95steeven`;

--
-- Table structure for table `eleves`
--

DROP TABLE IF EXISTS `eleves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eleves` (
  `idEleve` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(50) DEFAULT NULL,
  `prenomEleve` varchar(50) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEleve`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eleves`
--

LOCK TABLES `eleves` WRITE;
/*!40000 ALTER TABLE `eleves` DISABLE KEYS */;
INSERT INTO `eleves` VALUES (1,'Durand','Paul','CP'),(2,'Dupont','Charles','CP'),(3,'Merise','Cerise','CE1'),(4,'Prévert','Paul','CE1'),(5,'Jean','Jean','CM1');
/*!40000 ALTER TABLE `eleves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseignants` (
  `idEnseignant` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMatiere` varchar(50) DEFAULT NULL,
  `nomEnseignant` varchar(50) DEFAULT NULL,
  `prenomEnseignant` varchar(50) DEFAULT NULL,
  `pseudoEnseignant` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idEnseignant`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseignants`
--

LOCK TABLES `enseignants` WRITE;
/*!40000 ALTER TABLE `enseignants` DISABLE KEYS */;
INSERT INTO `enseignants` VALUES (1,NULL,'Camara','Catherine',NULL),(2,'Math','Duval','Henri','DuvalH'),(3,'Histoire','Trombi','Bernard','TrombiB'),(8,'Sciences','Mojille','Didier','MojilleD'),(9,'EPS','Lalo','Laurent','Lalol');
/*!40000 ALTER TABLE `enseignants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matieres`
--

DROP TABLE IF EXISTS `matieres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matieres` (
  `idMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `libelleMatiere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matieres`
--

LOCK TABLES `matieres` WRITE;
/*!40000 ALTER TABLE `matieres` DISABLE KEYS */;
INSERT INTO `matieres` VALUES (1,'Francais'),(2,'Math'),(3,'Histoire'),(4,'Sciences'),(5,'EPS');
/*!40000 ALTER TABLE `matieres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `idNote` int(11) NOT NULL AUTO_INCREMENT,
  `nomEleve` varchar(50) DEFAULT NULL,
  `prenomEleve` varchar(50) DEFAULT NULL,
  `noteObtenue` int(11) DEFAULT NULL,
  PRIMARY KEY (`idNote`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'Durand','Paul',12),(2,'Dupond','Charles',14),(3,'Merise','Cerise',8),(4,'Prevert','Paul',15);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL AUTO_INCREMENT,
  `nomRole` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Proviseur'),(2,'Enseignant');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suivis`
--

DROP TABLE IF EXISTS `suivis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suivis` (
  `idSuivi` int(11) NOT NULL AUTO_INCREMENT,
  `note` int(11) DEFAULT NULL,
  `idMatiere` int(11) DEFAULT NULL,
  `idEleve` int(11) DEFAULT NULL,
  PRIMARY KEY (`idSuivi`),
  KEY `idMatiere` (`idMatiere`),
  KEY `idEleve` (`idEleve`),
  CONSTRAINT `suivis_ibfk_1` FOREIGN KEY (`idMatiere`) REFERENCES `matieres` (`idMatiere`),
  CONSTRAINT `suivis_ibfk_2` FOREIGN KEY (`idEleve`) REFERENCES `eleves` (`idEleve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suivis`
--

LOCK TABLES `suivis` WRITE;
/*!40000 ALTER TABLE `suivis` DISABLE KEYS */;
/*!40000 ALTER TABLE `suivis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `utilisateurs` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `loginUtilisateur` varchar(50) DEFAULT NULL,
  `nomUtilisateur` varchar(50) DEFAULT NULL,
  `prenomUtilisateur` varchar(50) DEFAULT NULL,
  `motDePasseUtilisateur` varchar(50) DEFAULT NULL,
  `idRole` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`),
  KEY `idRole` (`idRole`),
  CONSTRAINT `utilisateurs_ibfk_1` FOREIGN KEY (`idRole`) REFERENCES `roles` (`idRole`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateurs`
--

LOCK TABLES `utilisateurs` WRITE;
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` VALUES (1,'laureMichel','Michel','Laure','c32f54777019148fbc5119c52396d2d4',1),(2,'PascalVentil','Ventil','Pascal','0d7d409f73869ddf285191288349e950',2);
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-26 17:10:01
