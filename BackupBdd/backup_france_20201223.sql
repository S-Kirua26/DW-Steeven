-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: france
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
-- Current Database: `france`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `france` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `france`;

--
-- Table structure for table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localisation` (
  `IdLocalisation` int(11) NOT NULL AUTO_INCREMENT,
  `nomDepartement` varchar(50) NOT NULL,
  `nomRegion` varchar(50) NOT NULL,
  `numeroRegion` varchar(50) NOT NULL,
  PRIMARY KEY (`IdLocalisation`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localisation`
--

LOCK TABLES `localisation` WRITE;
/*!40000 ALTER TABLE `localisation` DISABLE KEYS */;
INSERT INTO `localisation` VALUES (1,'Ain','Auvergne-Rhône-Alpes','1'),(2,'Aisne','Hauts-de-France','2'),(3,'Allier','Auvergne-Rhône-Alpes','1'),(4,'Alpes-de-Haute-Provence','Provence-Alpes-Côte d\'Azur','3'),(5,'Hautes-Alpes','Provence-Alpes-Côte d\'Azur','3'),(6,'Alpes-Maritimes','Provence-Alpes-Côte d\'Azur','3'),(7,'Ardèche','Auvergne-Rhône-Alpes','1'),(8,'Ardennes','Grand-Est','4'),(9,'Ariège','Occitanie','5'),(10,'Aube','Grand-Est','4'),(11,'Aude','Occitanie','5'),(12,'Aveyron','Occitanie','5'),(13,'Bouches-du-Rhône','Provence-Alpes-Côte d\'Azur','3'),(14,'Calvados','Normandie','6'),(15,'Cantal','Auvergne-Rhône-Alpes','1'),(16,'Charente','Nouvelle-Aquitaine','7'),(17,'Charente-Maritime','Nouvelle-Aquitaine','7'),(18,'Cher','Centre-Val de Loire','8'),(19,'Correze','Nouvelle-Aquitaine','7'),(20,'Côte-d\'Or','Bourgogne-Franche-Comté','9'),(21,'Côtes-d\'Armor','Bretagne','10'),(22,'Creuse','Nouvelle-Aquitaine','7'),(23,'Dordogne','Nouvelle-Aquitaine','7'),(24,'Doubs','Bourgogne-Franche-Comté','9'),(25,'Drôme','Auvergne-Rhône-Alpes','1'),(26,'Eure','Normandie','6'),(27,'Eure-et-Loir','Centre-Val de Loire','8'),(28,'Finistère','Bretagne','10'),(29,'Corse-du-Sud','Corse','11'),(30,'Haute-Corse ','Corse','11'),(31,'Gard','Occitanie','5'),(32,'Haute-Garonne','Occitanie','5'),(33,'Gers','Occitanie','5'),(34,'Gironde','Nouvelle-Aquitaine','7'),(35,'Hérault','Occitanie','5'),(36,'Ille-et-Vilaine','Bretagne','10'),(37,'Indre','Centre-Val de Loire','8'),(38,'Indre-et-Loire','Centre-Val de Loire','8'),(39,'Isère','Auvergne-Rhône-Alpes','1'),(40,'Jura','Bourgogne-Franche-Comté','9'),(41,'Landes','Nouvelle-Aquitaine','7'),(42,'Loir-et-Cher','Centre-Val de Loire','8'),(43,'Loire','Auvergne-Rhône-Alpes','1'),(44,'Haute-Loire','Auvergne-Rhône-Alpes','1'),(45,'Loire-Atlantique','Pays de la Loire','12'),(46,'Loiret','Centre-Val de Loire','8'),(47,'Lot','Occitanie','5'),(48,'Lot-et-Garonne','Nouvelle-Aquitaine','7'),(49,'Lozère','Occitanie','5'),(50,'Maine-et-Loire','Pays de la Loire','12'),(51,'Manche','Normandie','6'),(52,'Marne','Grand-Est','4'),(53,'Haute-Marne','Grand-Est','4'),(54,'Mayenne','Pays de la Loire','12'),(55,'Meurthe-et-Moselle','Grand-Est','4'),(56,'Meuse','Grand-Est','4'),(57,'Morbihan','Bretagne','10'),(58,'Moselle','Grand-Est','4'),(59,'Nièvre','Bourgogne-Franche-Comté','9'),(60,'Nord','Hauts-de-France','2'),(61,'Oise','Hauts-de-France','2'),(62,'Orne','Normandie','6'),(63,'Pas-de-Calais','Hauts-de-France','2'),(64,'Puy-de-Dôme','Auvergne-Rhône-Alpes','1'),(65,'Pyrénées-Atlantiques','Nouvelle-Aquitaine','7'),(66,'Hautes-Pyrénées','Occitanie','5'),(67,'Pyrénées-Orientales','Occitanie','5'),(68,'Bas-Rhin','Grand-Est','4'),(69,'Haut-Rhin','Grand-Est','4'),(70,'Rhône','Auvergne-Rhône-Alpes','1'),(71,'Haute-Saône','Bourgogne-Franche-Comté','9'),(72,'Saône-et-Loire','Bourgogne-Franche-Comté','9'),(73,'Sarthe','Pays de la Loire','12'),(74,'Savoie','Auvergne-Rhône-Alpes','1'),(75,'Haute-Savoie','Auvergne-Rhône-Alpes','1'),(76,'Paris','Ile-de-France','13'),(77,'Seine-Maritime','Normandie','6'),(78,'Seine-et-Marne','Ile-de-France','13'),(79,'Yvelines','Ile-de-France','13'),(80,'Deux-Sèvres','Nouvelle-Aquitaine','7'),(81,'Somme','Hauts-de-France','2'),(82,'Tarn','Occitanie','5'),(83,'Tarn-et-Garonne','Occitanie','5'),(84,'Var','Provence-Alpes-Côte d\'Azur','3'),(85,'Vaucluse','Provence-Alpes-Côte d\'Azur','3'),(86,'Vendée','Pays de la Loire','12'),(87,'Vienne','Nouvelle-Aquitaine','7'),(88,'Haute-Vienne','Nouvelle-Aquitaine','7'),(89,'Vosges','Grand-Est','4'),(90,'Yonne','Bourgogne-Franche-Comté','9'),(91,'Territoire de Belfort','Bourgogne-Franche-Comté','9'),(92,'Essonne','Ile-de-France','13'),(93,'Hauts-de-Seine','Ile-de-France','13'),(94,'Seine-Saint-Denis','Ile-de-France','13'),(95,'Val-de-Marne','Ile-de-France','13'),(96,'Val-d\'Oise','Ile-de-France','13'),(97,'Guadeloupe','DOM-TOM','14'),(98,'Martinique','DOM-TOM','14'),(99,'Guyane','DOM-TOM','14'),(100,'La Réunion','DOM-TOM','14'),(101,'Saint-Pierre-et-Miquelon','DOM-TOM','14'),(102,'Mayotte','INCONNU','0'),(103,'Saint-Barthélemy','DOM-TOM','14'),(104,'Saint-Martin','DOM-TOM','14'),(105,'Terres australes et antarctiques françaises','DOM-TOM','14'),(106,'Wallis-et-Futuna','DOM-TOM','14'),(107,'Polynésie française','DOM-TOM','14'),(108,'Nouvelle-Calédonie','DOM-TOM','14'),(109,'Clipperton','DOM-TOM','14');
/*!40000 ALTER TABLE `localisation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-23 17:10:01
