-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: loan_app
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

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
-- Table structure for table `loan_info`
--

DROP TABLE IF EXISTS `loan_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loan_info` (
  `loan_no` int(11) NOT NULL AUTO_INCREMENT,
  `amount` float NOT NULL,
  `value` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `paid` bit(1) NOT NULL DEFAULT b'0',
  `paid_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`loan_no`),
  UNIQUE KEY `loan_no` (`loan_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loan_info`
--

LOCK TABLES `loan_info` WRITE;
/*!40000 ALTER TABLE `loan_info` DISABLE KEYS */;
INSERT INTO `loan_info` VALUES (1,145,3,3,'\0',NULL),(2,43,5,2,'\0',NULL),(3,53,1,3,'',2),(4,565,3,1,'\0',NULL);
/*!40000 ALTER TABLE `loan_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `loan_info_extended`
--

DROP TABLE IF EXISTS `loan_info_extended`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `loan_info_extended` (
  `loan_id` int(11) NOT NULL,
  `interest_rate` double NOT NULL,
  `pay_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `loan_info_extended`
--

LOCK TABLES `loan_info_extended` WRITE;
/*!40000 ALTER TABLE `loan_info_extended` DISABLE KEYS */;
INSERT INTO `loan_info_extended` VALUES (1,3.2,4),(1,2,1),(2,3,3),(2,4,1);
/*!40000 ALTER TABLE `loan_info_extended` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main`
--

DROP TABLE IF EXISTS `main`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `value` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main`
--

LOCK TABLES `main` WRITE;
/*!40000 ALTER TABLE `main` DISABLE KEYS */;
INSERT INTO `main` VALUES ('mil','mi@gmail.com','sg','h',3,1),('mili','mili@gmail.com','mpsk22','Hamirpur',4,2),('milindra','milindra@gmail.com','mpsk22','Hamirpur',0,3),('Mukesh','muk@gmail.com','abcd','mumbai',0,4),('mil','milll@gmail.com','sg','h',3,5),('a','ma@gmail.com','sm','mill',0,6);
/*!40000 ALTER TABLE `main` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-04 11:16:27
