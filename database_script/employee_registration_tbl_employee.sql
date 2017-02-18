CREATE DATABASE  IF NOT EXISTS `employee_registration` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `employee_registration`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: employee_registration
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.19-MariaDB

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
-- Table structure for table `tbl_employee`
--

DROP TABLE IF EXISTS `tbl_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_employee` (
  `emp_Id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `address` text,
  `city_id` int(11) NOT NULL,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`emp_Id`),
  KEY `dept_id` (`dept_id`),
  KEY `city_id` (`city_id`),
  CONSTRAINT `tbl_employee_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `tbl_department` (`dept_id`),
  CONSTRAINT `tbl_employee_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_employee`
--

LOCK TABLES `tbl_employee` WRITE;
/*!40000 ALTER TABLE `tbl_employee` DISABLE KEYS */;
INSERT INTO `tbl_employee` VALUES (6,'Kamlesh','Male',30000.00,1,'2, SP road',1,'2017-02-18 21:57:50'),(8,'Jay','Male',21000.00,3,'2, SP road',2,'2017-02-18 22:00:36'),(9,'Ankit','Male',16000.00,4,'2, SP road',3,'2017-02-18 23:56:49'),(10,'rahul','Male',10000.00,2,'2, SP road',4,'2017-02-18 23:56:49'),(11,'parag','Male',25345.00,4,'2, SP road',7,'2017-02-18 23:56:49'),(12,'mitesh','Male',45785.00,2,'2, SP road',5,'2017-02-18 23:56:49'),(13,'rakesh','Male',10000.00,1,'2, SP road',6,'2017-02-18 23:56:49'),(14,'Nadesh','Male',65421.00,4,'2, SP road',8,'2017-02-18 23:56:49'),(15,'Delroy','Male',45124.00,3,'2, SP road',9,'2017-02-18 23:56:49'),(16,'Olu','Male',12000.00,2,'2, SP road',10,'2017-02-18 23:56:49'),(17,'Mukesh','Male',12546.00,1,'2, SP road',11,'2017-02-18 23:56:49'),(18,'vipul','Male',45124.00,2,'2, SP road',12,'2017-02-18 23:56:49'),(19,'shashikant','Male',10000.00,3,'2, SP road',13,'2017-02-18 23:56:49'),(20,'Nagesh','Male',15000.00,4,'2, SP road',14,'2017-02-18 23:56:49'),(21,'viral','Male',8000.00,4,'2, SP road',15,'2017-02-18 23:56:49'),(22,'jaydeep','Male',10000.00,2,'2, SP road',16,'2017-02-18 23:56:49'),(23,'pankaj','Male',14000.00,3,'2, SP road',17,'2017-02-18 23:56:49'),(24,'vijay','Male',33000.00,1,'2, SP road',18,'2017-02-18 23:56:49'),(25,'suyog','Male',44000.00,2,'2, SP road',1,'2017-02-18 23:56:49'),(26,'Ankita','Female',14000.00,3,'2, SP road',2,'2017-02-18 23:56:49'),(27,'Priyanka','Female',19000.00,2,'2, SP road',3,'2017-02-18 23:56:49'),(28,'Meghana','Female',10000.00,1,'304-rangoot street',4,'2017-02-18 23:56:49'),(29,'Mital','Female',22000.00,2,'304-rangoot street',5,'2017-02-18 23:56:49'),(30,'Payal','Female',9000.00,3,'304-rangoot street',6,'2017-02-18 23:56:49'),(31,'Anajali','Female',45124.00,4,'304-rangoot street',7,'2017-02-18 23:56:49'),(32,'Rita','Female',12000.00,4,'304-rangoot street',8,'2017-02-18 23:56:49'),(33,'Shilpa','Female',10000.00,4,'304-rangoot street',9,'2017-02-18 23:56:49'),(34,'Jigna','Female',18000.00,4,'304-rangoot street',10,'2017-02-18 23:56:49'),(35,'Mehul','Male',15500.00,4,'304-rangoot street',11,'2017-02-18 23:56:49'),(36,'Jagpreet','Male',45124.00,2,'304-rangoot street',12,'2017-02-18 23:56:49'),(37,'Vikas','Male',32154.00,2,'304-rangoot street',13,'2017-02-18 23:56:49'),(38,'Shikhir','Male',10000.00,1,'304-rangoot street',14,'2017-02-18 23:56:49'),(39,'Mayur','Male',54133.00,1,'2, SP road',15,'2017-02-18 23:56:49'),(40,'Poonam','Female',14000.00,2,'304-rangoot street',16,'2017-02-18 23:56:49'),(41,'Maya','Female',21213.00,3,'304-rangoot street',17,'2017-02-18 23:56:49'),(42,'Janki','Female',10000.00,4,'304-rangoot street',18,'2017-02-18 23:56:49'),(43,'Vatshala','Female',32156.00,1,'304-rangoot street',1,'2017-02-18 23:56:49'),(44,'Renuka','Female',14000.00,3,'304-rangoot street',2,'2017-02-18 23:56:49'),(45,'Ashok','Male',10000.00,2,'304-rangoot street',3,'2017-02-18 23:56:49'),(46,'Janak','Male',10452.00,1,'304-rangoot street',4,'2017-02-18 23:56:49'),(47,'Prashant','Male',8002.00,3,'304-rangoot street',5,'2017-02-18 23:56:49');
/*!40000 ALTER TABLE `tbl_employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-19  2:47:20
