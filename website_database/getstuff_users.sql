CREATE DATABASE  IF NOT EXISTS `getstuff` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `getstuff`;
-- MySQL dump 10.13  Distrib 8.0.17, for Win64 (x86_64)
--
-- Host: 192.168.56.150    Database: getstuff
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `uname` varchar(45) NOT NULL,
  `funds` double NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `uname_UNIQUE` (`uname`),
  UNIQUE KEY `userid_UNIQUE` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (0,'Bruce','Bigman','big_boss',400,'6c9a0301e031e6fdd1715894dbddf918',1,1),(1,'Tim','Heidecker','grum',878,'35F6A83A5BA621356BEEE357DB022E6C',0,0),(2,'Eric','Wareheim','pristimi',7749,'38CC20041EAA6E03C92C0A7D17B21B9A',1,0),(3,'Anne','McAnne','AM34',9915,'7640A28364D51541DFA1C6AD36E90EB3',1,0),(4,'Johnny','Rock','Ishot_JR',244,'2ECECD0E63E498B6F7514044265F451C',1,0),(5,'Pam','Gerwig','pez',994,'78000D894EB9F42A88AC2A14B2D783A5',1,0),(6,'Billy ','Bob','spaceman',44574,'B4F411358C4A80E69F64CAB04E5A7E53',1,0),(7,'Amy','Trevaskis','killeraimz',0,'4528E6A7BB9341C36C425FAF40EF32C3',1,1),(8,'Vault','Boy','Vault101',0,'68B329DA9893E34099C7D8AD5CB9C940',0,0),(10,'Samus','Aran','mSlayer',150,'EF5A22D59CE52A794593A74F8447E29A',0,0),(11,'Elizabeth','Dewitt','infinite_babe',0,'1F096A3900AF5AEC3562C05E2E7A80BF',0,0),(12,'Sally','Shepard','N7',650,'560A9C17A3C96218DB2E8EE474DBEE1F',1,0),(13,'Issac','Clarke','smash',50,'D79096188B670C2F81B7001F73801117',1,0),(14,'Alison','Dubois','mediuam',100,'D79096188B670C2F81B7001F73801117',1,0),(15,'Jeanie','Beuller','dayz',100,'21708158DC545D4C3B1A0BA970CC8536',1,0),(16,'Martin','Brundle','flyman86',100,'CB892D76278796F5F6F720AAB0B2FD1B',1,0),(17,'Maxim','Romanov','maxy_boy',100,'A8F115FD1E5ECFEACCB05AEEC6490412',1,0),(18,'Annie','Wilkes','misery_fan',100,'6C63212AB48E8401EAF6B59B95D816A9',1,0),(19,'Arial','Atalntis','mer_babe',115,'F4894BA52BD9338608D1964DC63483BA',1,0),(20,'Sammy','Davis jr','showman',148,'5D41402ABC4B2A76B9719D911017C592',1,0),(21,'Hughie','McQueen','super_boy',480,'48D6215903DFF56238E52E8891380C8F',1,0),(22,'Eliza','Dolittle','fair_lady66',100,'042062210D7A5A13FD0062A35E2941B8',1,0),(23,'Edward','Van Halen','VH3',100,'74C41CFE7E6B979D513C911964416EFC',1,0),(24,'Bobby','Droptable','xckd',100,'C0D95DAE0FD13E845E1C26349C308874',1,0),(25,'Geogire','Flipo','G Flip',145,'FC0586ACA6E42CFFADE83252446D0613',1,0),(26,'Andrew','Ryan','objec_tiv',70,'2897614B85DA05C6A208E3E7A64809E6',1,0),(28,'Emma','Stone','Fav',100,'F559DA1D6F151EC30E67C2092E286C7E',1,0),(29,'Francis','Wray','sad_girl23',100,'54966D5F976F7653FAB01239FA062E66',1,0),(30,'Harold','Harold','I_am_Harold',100,'E89FA90F2F8C771E6EE1DD75F85D909B',1,0),(31,'Jackson','Maine','rockStr',100,'0B1F5FA3C63B1052E2BA0ECE1E18CE62',1,0),(32,'Ulyashin ','Maksim Antonovich','Max_Man',100,'849ED1DE4940919393EC63CC410BCAFE',1,0),(33,'Monty','Foster','aussie_man',500,'FB826E101D8F62E6B97EE1F11944AD47',1,0),(35,'shady','guy','imposter',100,'1A1DC91C907325C69271DDF0C944BC72',1,1),(37,'Amy','Test','amz',78,'A029D0DF84EB5549C641E04A9EF389E5',1,0),(38,'Guy','Fawks','remeb4r',45,'015f28b9df1bdd36427dd976fb73b29d',1,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-21 21:02:47
