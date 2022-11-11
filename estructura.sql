-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: scandina_spa
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.10-MariaDB

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
-- Table structure for table `additional`
--

DROP TABLE IF EXISTS `additional`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `additional` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  `amount` int(11) NOT NULL,
  `cash` decimal(6,2) NOT NULL,
  `pos` decimal(6,2) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=922 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `clientname` varchar(100) DEFAULT NULL,
  `cashfee` decimal(6,2) DEFAULT 0.00,
  `posfee` decimal(6,2) DEFAULT 0.00,
  `cashexit` decimal(6,2) DEFAULT 0.00,
  `posexit` decimal(6,2) DEFAULT 0.00,
  `discount` int(11) DEFAULT 0,
  `locker` int(3) DEFAULT NULL,
  `courtesy` int(11) DEFAULT NULL,
  `masajecorto` int(11) DEFAULT NULL,
  `masajelargo` int(11) DEFAULT NULL,
  `vodka` int(11) DEFAULT NULL,
  `ron` int(11) DEFAULT NULL,
  `whisky` int(11) DEFAULT NULL,
  `tequila` int(11) DEFAULT NULL,
  `pilsener` int(11) DEFAULT NULL,
  `golden` int(11) DEFAULT NULL,
  `suprema` int(11) DEFAULT NULL,
  `corona` int(11) DEFAULT NULL,
  `smirnoff` int(11) DEFAULT NULL,
  `cokacola` int(11) DEFAULT NULL,
  `sodas` int(11) DEFAULT NULL,
  `water` int(11) DEFAULT NULL,
  `icetea` int(11) DEFAULT NULL,
  `gatorade` int(11) DEFAULT NULL,
  `powerade` int(11) DEFAULT NULL,
  `pro3x5` int(11) DEFAULT NULL,
  `6x10` int(11) DEFAULT NULL,
  `golden1` int(11) DEFAULT NULL,
  `pilsener1` int(11) DEFAULT NULL,
  `cocktailscandinavia` int(11) DEFAULT NULL,
  `tequila1` int(11) DEFAULT NULL,
  `cocktailscandinavia1` int(11) DEFAULT NULL,
  `vodka2` int(11) DEFAULT NULL,
  `ron2` int(11) DEFAULT NULL,
  `vodkadoble` int(11) DEFAULT NULL,
  `rondoble` int(11) DEFAULT NULL,
  `whiskydoble` int(11) DEFAULT NULL,
  `tequiladoble` int(11) DEFAULT NULL,
  `botellavino` int(11) DEFAULT NULL,
  `botellaron` int(11) DEFAULT NULL,
  `botellavodka` int(11) DEFAULT NULL,
  `vasohielo` int(11) DEFAULT NULL,
  `auxpilsener` int(11) DEFAULT NULL,
  `auxgolden` int(11) DEFAULT NULL,
  `vodkafin` int(11) DEFAULT 0,
  `vodkafindoble` int(11) DEFAULT 0,
  `tequilac` int(11) DEFAULT 0,
  `tequilacdoble` int(11) DEFAULT 0,
  `tequilac1` int(11) DEFAULT 0,
  `sunride` int(11) DEFAULT 0,
  `sunridedoble` int(11) DEFAULT 0,
  `energizer` int(11) DEFAULT 0,
  `tequilajc` int(11) DEFAULT 0,
  `tequilajcdoble` int(11) DEFAULT 0,
  `vodkaf` int(11) DEFAULT 0,
  `vodkafdoble` int(11) DEFAULT 0,
  `heineken` int(11) DEFAULT 0,
  `aguap` int(11) DEFAULT 0,
  `cadejo` int(11) DEFAULT 0,
  `cajetillag` int(11) DEFAULT 0,
  `cajetillap` int(11) DEFAULT 0,
  `cadejopro` int(11) DEFAULT 0,
  `remainingc` int(11) DEFAULT 0,
  `cadejopromocion` int(11) DEFAULT 0,
  `botellavino2` int(11) DEFAULT 0,
  `popper` int(11) DEFAULT 0,
  `budlight` int(11) DEFAULT 0,
  `whiskychivas` int(11) DEFAULT 0,
  `whiskychivasdoble` int(11) DEFAULT 0,
  `bañador` int(11) DEFAULT 0,
  `ropapm` int(11) DEFAULT 0,
  `ropap` int(11) DEFAULT 0,
  `suspensor` int(11) DEFAULT 0,
  `hilo` int(11) DEFAULT 0,
  `pulseras` int(11) DEFAULT 0,
  `short` int(11) DEFAULT 0,
  `acc1` int(11) DEFAULT 0,
  `acc2` int(11) DEFAULT 0,
  `acc3` int(11) DEFAULT 0,
  `regia` int(11) DEFAULT 0,
  `depaxilas` int(11) DEFAULT 0,
  `depbrazos` int(11) DEFAULT 0,
  `depnariz` int(11) DEFAULT 0,
  `deppecho` int(11) DEFAULT 0,
  `depabdomen` int(11) DEFAULT 0,
  `deppechoabdomen` int(11) DEFAULT 0,
  `depanogluteos` int(11) DEFAULT 0,
  `depparteintima` int(11) DEFAULT 0,
  `depespalda` int(11) DEFAULT 0,
  `deppiernas` int(11) DEFAULT 0,
  `deppanomuslo` int(11) DEFAULT 0,
  `facialscan` int(11) DEFAULT 0,
  `facialprof` int(11) DEFAULT 0,
  `lub` int(11) DEFAULT 0,
  `condon` int(11) DEFAULT 0,
  `bombay` int(11) DEFAULT 0,
  `bombaydoble` int(11) DEFAULT 0,
  `michelada` int(11) DEFAULT 0,
  `stela` int(11) DEFAULT 0,
  `santacruz` int(11) DEFAULT 0,
  `michelob` int(11) DEFAULT 0,
  `modelo` int(11) DEFAULT 0,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=36502 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cash`
--

DROP TABLE IF EXISTS `cash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cash` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reason` varchar(250) DEFAULT NULL,
  `amount` decimal(12,2) DEFAULT NULL,
  `modus` int(11) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=8541 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `entries`
--

DROP TABLE IF EXISTS `entries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `entries` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `clientname` varchar(200) NOT NULL,
  `cash` decimal(6,2) NOT NULL,
  `pos` decimal(6,2) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=36495 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `extramoney`
--

DROP TABLE IF EXISTS `extramoney`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extramoney` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `registerem`
--

DROP TABLE IF EXISTS `registerem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registerem` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(250) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `cod` bigint(250) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(250) NOT NULL,
  `cantidad` decimal(12,2) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=620 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-29 13:08:00
