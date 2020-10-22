-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: bilancomptable
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
-- Current Database: `bilancomptable`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `bilancomptable` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bilancomptable`;

--
-- Table structure for table `classedecomptes`
--

DROP TABLE IF EXISTS `classedecomptes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classedecomptes` (
  `IdClasseDeCompte` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleClasseDeCompte` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdClasseDeCompte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classedecomptes`
--

LOCK TABLES `classedecomptes` WRITE;
/*!40000 ALTER TABLE `classedecomptes` DISABLE KEYS */;
/*!40000 ALTER TABLE `classedecomptes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comptes`
--

DROP TABLE IF EXISTS `comptes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comptes` (
  `IdCompte` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroCompte` int(11) DEFAULT NULL,
  `LibelleCompte` varchar(50) DEFAULT NULL,
  `IdClasseDeCompte` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdCompte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comptes`
--

LOCK TABLES `comptes` WRITE;
/*!40000 ALTER TABLE `comptes` DISABLE KEYS */;
/*!40000 ALTER TABLE `comptes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ecritures`
--

DROP TABLE IF EXISTS `ecritures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ecritures` (
  `IdEcriture` int(11) NOT NULL AUTO_INCREMENT,
  `DateEcriture` date DEFAULT NULL,
  `LibelleEcriture` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`IdEcriture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ecritures`
--

LOCK TABLES `ecritures` WRITE;
/*!40000 ALTER TABLE `ecritures` DISABLE KEYS */;
/*!40000 ALTER TABLE `ecritures` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groupementdeclasse`
--

DROP TABLE IF EXISTS `groupementdeclasse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groupementdeclasse` (
  `IdGroupement` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleGroupement` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdGroupement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groupementdeclasse`
--

LOCK TABLES `groupementdeclasse` WRITE;
/*!40000 ALTER TABLE `groupementdeclasse` DISABLE KEYS */;
/*!40000 ALTER TABLE `groupementdeclasse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lignesecritures`
--

DROP TABLE IF EXISTS `lignesecritures`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lignesecritures` (
  `IdLigne` int(11) NOT NULL AUTO_INCREMENT,
  `IntituleLigne` varchar(50) DEFAULT NULL,
  `DebitLigne` varchar(50) DEFAULT NULL,
  `CreditLigne` varchar(50) DEFAULT NULL,
  `IdEcriture` int(11) DEFAULT NULL,
  `IdCompte` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdLigne`),
  KEY `FK_LignesEcritures_Ecritures` (`IdEcriture`),
  KEY `FK_LignesEcritures_Comptes` (`IdCompte`),
  CONSTRAINT `FK_LignesEcritures_Comptes` FOREIGN KEY (`IdCompte`) REFERENCES `comptes` (`IdCompte`),
  CONSTRAINT `FK_LignesEcritures_Ecritures` FOREIGN KEY (`IdEcriture`) REFERENCES `ecritures` (`IdEcriture`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lignesecritures`
--

LOCK TABLES `lignesecritures` WRITE;
/*!40000 ALTER TABLE `lignesecritures` DISABLE KEYS */;
/*!40000 ALTER TABLE `lignesecritures` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-22 17:10:00
