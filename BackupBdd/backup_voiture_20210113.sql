-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: voiture
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
-- Current Database: `voiture`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `voiture` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `voiture`;

--
-- Table structure for table `marque`
--

DROP TABLE IF EXISTS `marque`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marque` (
  `IdMarque` int(11) NOT NULL AUTO_INCREMENT,
  `NomMarque` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marque`
--

LOCK TABLES `marque` WRITE;
/*!40000 ALTER TABLE `marque` DISABLE KEYS */;
INSERT INTO `marque` VALUES (1,'Acura'),(2,'Buick'),(3,'Chevrolet'),(4,'Delage'),(5,'Excalibur'),(6,'FIAT'),(7,'Grecav'),(8,'Jeep'),(9,'Lincoln'),(10,'Maserati');
/*!40000 ALTER TABLE `marque` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modele`
--

DROP TABLE IF EXISTS `modele`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modele` (
  `LibelleModele` varchar(50) NOT NULL,
  `IdModele` int(11) NOT NULL AUTO_INCREMENT,
  `IdMarque` varchar(50) NOT NULL,
  PRIMARY KEY (`IdModele`)
) ENGINE=MyISAM AUTO_INCREMENT=426 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modele`
--

LOCK TABLES `modele` WRITE;
/*!40000 ALTER TABLE `modele` DISABLE KEYS */;
INSERT INTO `modele` VALUES ('159',1,'1'),('NULL',2,'1'),('8C ',3,'1'),('A5',4,'1'),('GIULIETTA ',5,'1'),('MITO ',6,'1'),('SPIDER ',7,'1'),('A1 ',8,'2'),('A3 ',9,'2'),('A4 ',10,'2'),('A5 ',11,'2'),('A6 ',12,'2'),('A7 ',13,'2'),('A8 ',14,'2'),('Q3 ',15,'2'),('Q5 ',16,'2'),('Q7 ',17,'2'),('R8 ',18,'2'),('TT ',19,'2'),('CONTINENTAL ',20,'3'),('FLYING SPUR ',21,'3'),('MULSANNE ',22,'3'),('114',23,'4'),('116',24,'4'),('118',25,'4'),('120',26,'4'),('125',27,'4'),('214',28,'4'),('216',29,'4'),('218',30,'4'),('220',31,'4'),('225',32,'4'),('228',33,'4'),('235',34,'4'),('316',35,'4'),('318',36,'4'),('320',37,'4'),('325',38,'4'),('328',39,'4'),('330',40,'4'),('335',41,'4'),('418',42,'4'),('420',43,'4'),('425',44,'4'),('428',45,'4'),('430',46,'4'),('435',47,'4'),('518',48,'4'),('520',49,'4'),('525',50,'4'),('528',51,'4'),('530',52,'4'),('535',53,'4'),('550',54,'4'),('640',55,'4'),('650',56,'4'),('730',57,'4'),('740',58,'4'),('750',59,'4'),('760',60,'4'),('I3 ',61,'4'),('I8 ',62,'4'),('M3 ',63,'4'),('M4 ',64,'4'),('M5 ',65,'4'),('SERIE 3 ACTIVEHYBRID ',66,'4'),('SERIE 5 ACTIVEHYBRID ',67,'4'),('SERIE 7 ACTIVEHYBRID ',68,'4'),('X1 ',69,'4'),('X3 ',70,'4'),('X4 ',71,'4'),('X5 ',72,'4'),('X6 ',73,'4'),('Z4 ',74,'4'),('ATS ',75,'5'),('CTS ',76,'5'),('ESCALADE ',77,'5'),('SRX ',78,'5'),('CAMARO ',79,'6'),('CORVETTE ',80,'6'),('BERLINGO ',81,'7'),('C-ZERO ',82,'7'),('C1 ',83,'7'),('C3 ',84,'7'),('C3 PICASSO ',85,'7'),('C4 ',86,'7'),('C4 AIRCROSS ',87,'7'),('C4 CACTUS ',88,'7'),('C4 PICASSO ',89,'7'),('C5 ',90,'7'),('C8 ',91,'7'),('DS3 ',92,'7'),('DS4 ',93,'7'),('DS5 ',94,'7'),('JUMPER ',95,'7'),('JUMPY ',96,'7'),('NEMO ',97,'7'),('DOKKER ',98,'8'),('DUSTER ',99,'8'),('LODGY ',100,'8'),('LOGAN ',101,'8'),('SANDERO ',102,'8'),('458',103,'9'),('CALIFORNIA ',104,'9'),('F12 ',105,'9'),('FF ',106,'9'),('LAFERRARI ',107,'9'),('500',108,'10'),('500L ',109,'10'),('BRAVO ',110,'10'),('DOBLO ',111,'10'),('DUCATO ',112,'10'),('FIORINO ',113,'10'),('FREEMONT ',114,'10'),('PANDA ',115,'10'),('PUNTO ',116,'10'),('SCUDO ',117,'10'),('SEDICI ',118,'10'),('B-MAX ',119,'11'),('C-MAX ',120,'11'),('ECOSPORT ',121,'11'),('FIESTA ',122,'11'),('FOCUS ',123,'11'),('KA ',124,'11'),('KUGA ',125,'11'),('MONDEO ',126,'11'),('S-MAX ',127,'11'),('TOURNEO CONNECT ',128,'11'),('TOURNEO COURIER ',129,'11'),('TOURNEO CUSTOM ',130,'11'),('TRANSIT ',131,'11'),('TRANSIT CUSTOM ',132,'11'),('ACCORD ',133,'12'),('CIVIC ',134,'12'),('CR-V ',135,'12'),('CR-Z ',136,'12'),('INSIGHT ',137,'12'),('JAZZ ',138,'12'),('GENESIS ',139,'13'),('I 10 ',140,'13'),('I 20 ',141,'13'),('I 30 ',142,'13'),('I 40 ',143,'13'),('IX 20 ',144,'13'),('IX 35 ',145,'13'),('SANTA FE ',146,'13'),('VELOSTER ',147,'13'),('Q50 ',148,'14'),('Q60 ',149,'14'),('Q70 ',150,'14'),('QX50 ',151,'14'),('QX70 ',152,'14'),('F-TYPE ',153,'15'),('XF ',154,'15'),('XJ ',155,'15'),('CHEROKEE ',156,'16'),('COMPASS ',157,'16'),('GRAND CHEROKEE ',158,'16'),('WRANGLER ',159,'16'),('CARENS ',160,'17'),('CEED ',161,'17'),('OPTIMA ',162,'17'),('PICANTO ',163,'17'),('RIO ',164,'17'),('SORENTO ',165,'17'),('SOUL ',166,'17'),('SPORTAGE ',167,'17'),('VENGA ',168,'17'),('NIVA ',169,'18'),('AVENTADOR ',170,'19'),('GALLARDO ',171,'19'),('HURACAN ',172,'19'),('DELTA ',173,'20'),('FLAVIA ',174,'20'),('MUSA ',175,'20'),('THEMA ',176,'20'),('VOYAGER ',177,'20'),('YPSILON ',178,'20'),('DISCOVERY ',179,'21'),('DISCOVERY SPORT ',180,'21'),('FREELANDER ',181,'21'),('RANGE ROVER ',182,'21'),('RANGE ROVER EVOQUE ',183,'21'),('RANGE ROVER SPORT ',184,'21'),('CT ',185,'22'),('GS ',186,'22'),('IS ',187,'22'),('LFA ',188,'22'),('LS ',189,'22'),('NX ',190,'22'),('RC ',191,'22'),('RX ',192,'22'),('GHIBLI ',193,'23'),('GRANCABRIO ',194,'23'),('GRANTURISMO ',195,'23'),('QUATTROPORTE ',196,'23'),('2',197,'24'),('3',198,'24'),('5',199,'24'),('6',200,'24'),('CX-5 ',201,'24'),('MX-5 ',202,'24'),('A 160 ',203,'25'),('A 180 ',204,'25'),('A 200 ',205,'25'),('A 220 ',206,'25'),('A 250 ',207,'25'),('A 45 AMG ',208,'25'),('AMG GT ',209,'25'),('AMG GT S ',210,'25'),('B 160 ',211,'25'),('B 180 ',212,'25'),('B 200 ',213,'25'),('B 220 ',214,'25'),('B 250 ',215,'25'),('B ED ',216,'25'),('C 180 ',217,'25'),('C 200 ',218,'25'),('C 220 ',219,'25'),('C 250 ',220,'25'),('C 300 ',221,'25'),('C 350 ',222,'25'),('C 400 ',223,'25'),('C 63 AMG ',224,'25'),('C 63 S-AMG ',225,'25'),('CITAN ',226,'25'),('CL 63 AMG ',227,'25'),('CLA 180 ',228,'25'),('CLA 200 ',229,'25'),('CLA 220 ',230,'25'),('CLA 250 ',231,'25'),('CLA 45 AMG ',232,'25'),('CLASSE V ',233,'25'),('CLS 220 ',234,'25'),('CLS 250 ',235,'25'),('CLS 350 ',236,'25'),('CLS 400 ',237,'25'),('CLS 500 ',238,'25'),('CLS 63 AMG ',239,'25'),('E 200 ',240,'25'),('E 220 ',241,'25'),('E 250 ',242,'25'),('E 300 ',243,'25'),('E 320 ',244,'25'),('E 350 ',245,'25'),('E 400 ',246,'25'),('E 500 ',247,'25'),('E 63 AMG ',248,'25'),('G 350 ',249,'25'),('G 500 ',250,'25'),('G 63 AMG ',251,'25'),('G 65 AMG ',252,'25'),('GL 350 ',253,'25'),('GL 400 ',254,'25'),('GL 500 ',255,'25'),('GL 63 AMG ',256,'25'),('GLA 180 ',257,'25'),('GLA 200 ',258,'25'),('GLA 220 ',259,'25'),('GLA 250 ',260,'25'),('GLA 45 AMG ',261,'25'),('ML 250 ',262,'25'),('ML 350 ',263,'25'),('ML 400 ',264,'25'),('ML 500 ',265,'25'),('ML 63 AMG ',266,'25'),('S 300 ',267,'25'),('S 350 ',268,'25'),('S 400 ',269,'25'),('S 500 ',270,'25'),('S 600 ',271,'25'),('S 63 AMG ',272,'25'),('S 65 AMG ',273,'25'),('SL 350 ',274,'25'),('SL 400 ',275,'25'),('SL 500 ',276,'25'),('SL 63 AMG ',277,'25'),('SL 65 AMG ',278,'25'),('SLK 200 ',279,'25'),('SLK 250 ',280,'25'),('SLK 350 ',281,'25'),('SLK 55 AMG ',282,'25'),('SLS AMG GT S ',283,'25'),('SPRINTER ',284,'25'),('VITO ',285,'25'),('CABRIO ',286,'26'),('COUNTRYMAN ',287,'26'),('COUPE ',288,'26'),('MINI ',289,'26'),('PACEMAN ',290,'26'),('ROADSTER ',291,'26'),('ASX ',292,'27'),('I-MIEV ',293,'27'),('OUTLANDER ',294,'27'),('PAJERO ',295,'27'),('SPACE STAR ',296,'27'),('370Z ',297,'28'),('GT-R ',298,'28'),('JUKE ',299,'28'),('LEAF ',300,'28'),('MICRA ',301,'28'),('MURANO ',302,'28'),('NOTE ',303,'28'),('NV200 ',304,'28'),('NV300 ',305,'28'),('NV400 ',306,'28'),('PULSAR ',307,'28'),('QASHQAI ',308,'28'),('X-TRAIL ',309,'28'),('ADAM ',310,'29'),('AGILA ',311,'29'),('AMPERA ',312,'29'),('ANTARA ',313,'29'),('ASTRA ',314,'29'),('CASCADA ',315,'29'),('COMBO ',316,'29'),('CORSA ',317,'29'),('INSIGNIA ',318,'29'),('MERIVA ',319,'29'),('MOKKA ',320,'29'),('MOVANO ',321,'29'),('VIVARO ',322,'29'),('ZAFIRA ',323,'29'),('108',324,'30'),('2008',325,'30'),('207',326,'30'),('208',327,'30'),('3008',328,'30'),('308',329,'30'),('4008',330,'30'),('5008',331,'30'),('508',332,'30'),('BIPPER ',333,'30'),('BOXER ',334,'30'),('EXPERT ',335,'30'),('ION ',336,'30'),('PARTNER ',337,'30'),('RCZ ',338,'30'),('911',339,'31'),('918',340,'31'),('BOXSTER ',341,'31'),('CAYENNE ',342,'31'),('CAYMAN ',343,'31'),('MACAN ',344,'31'),('PANAMERA ',345,'31'),('CAPTUR ',346,'32'),('CLIO ',347,'32'),('ESPACE ',348,'32'),('KANGOO ',349,'32'),('KOLEOS ',350,'32'),('LAGUNA ',351,'32'),('LATITUDE ',352,'32'),('MASTER ',353,'32'),('MEGANE ',354,'32'),('SCENIC ',355,'32'),('TRAFIC ',356,'32'),('TWINGO ',357,'32'),('ZOE ',358,'32'),('GHOST ',359,'33'),('PHANTOM ',360,'33'),('WRAITH ',361,'33'),('ALHAMBRA ',362,'34'),('ALTEA ',363,'34'),('IBIZA ',364,'34'),('LEON ',365,'34'),('MII ',366,'34'),('TOLEDO ',367,'34'),('CITIGO ',368,'35'),('FABIA ',369,'35'),('OCTAVIA ',370,'35'),('RAPID ',371,'35'),('ROOMSTER ',372,'35'),('SUPERB ',373,'35'),('YETI ',374,'35'),('FORFOUR ',375,'36'),('FORTWO ',376,'36'),('KORANDO ',377,'37'),('REXTON ',378,'37'),('RODIUS ',379,'37'),('BRZ ',380,'38'),('FORESTER ',381,'38'),('WRX ',382,'38'),('XV ',383,'38'),('CELERIO ',384,'39'),('JIMNY ',385,'39'),('SWIFT ',386,'39'),('SX4 ',387,'39'),('VITARA ',388,'39'),('MODEL S ',389,'40'),('AURIS ',390,'41'),('AVENSIS ',391,'41'),('AYGO ',392,'41'),('GT86 ',393,'41'),('IQ ',394,'41'),('LAND CRUISER ',395,'41'),('PRIUS ',396,'41'),('PRIUS+ ',397,'41'),('RAV4 ',398,'41'),('VERSO ',399,'41'),('VERSO S ',400,'41'),('YARIS ',401,'41'),('CC ',402,'42'),('COCCINELLE ',403,'42'),('CRAFTER ',404,'42'),('EOS ',405,'42'),('GOLF ',406,'42'),('GOLF SPORTSVAN ',407,'42'),('JETTA ',408,'42'),('PASSAT ',409,'42'),('PHAETON ',410,'42'),('POLO ',411,'42'),('SCIROCCO ',412,'42'),('SHARAN ',413,'42'),('TIGUAN ',414,'42'),('TOUAREG ',415,'42'),('TOURAN ',416,'42'),('UP! ',417,'42'),('S60 ',418,'43'),('S80 ',419,'43'),('V40 ',420,'43'),('V60 ',421,'43'),('V70 ',422,'43'),('XC60 ',423,'43'),('XC70 ',424,'43'),('XC90 ',425,'43');
/*!40000 ALTER TABLE `modele` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-13 17:10:02
