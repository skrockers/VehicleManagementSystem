-- MySQL dump 10.16  Distrib 10.1.48-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: fdb29.awardspace.net    Database: 3561756_sktravels
-- ------------------------------------------------------
-- Server version	5.7.20-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_register`
--

DROP TABLE IF EXISTS `admin_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_register` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Confirm_Password` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_register`
--

LOCK TABLES `admin_register` WRITE;
/*!40000 ALTER TABLE `admin_register` DISABLE KEYS */;
INSERT INTO `admin_register` VALUES (1,'SAIKUMAR','saikumarmuppanar14@gmail.com','sai','sai','55643'),(2,'','','','',''),(3,'saikumar','saikumar@gmail.com','sai','sai','54545'),(4,'Saikumar','sai@gmail.com','sai','sai','4654756'),(5,'Sai','saikumar@sktravels.com','sai','sai','23443'),(6,'','admin@sktravels.com','admin','admin','5465465'),(7,'','jarvis@sktravels.com','sai','sai','43656'),(8,'Asus`','Asus@sktravels.com','asus','asus','7875');
/*!40000 ALTER TABLE `admin_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `car_register`
--

DROP TABLE IF EXISTS `car_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `car_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic` varchar(255) DEFAULT NULL,
  `vehicle_type` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Model` varchar(255) DEFAULT NULL,
  `Seats` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL,
  `Driver` varchar(255) DEFAULT NULL,
  `Registration_No` varchar(255) DEFAULT NULL,
  `Engine_No` varchar(255) DEFAULT NULL,
  `Insurance` varchar(255) DEFAULT NULL,
  `Insurance_Start` varchar(255) DEFAULT NULL,
  `Insurance_Expiry` varchar(255) DEFAULT NULL,
  `Fuel` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `car_register`
--

LOCK TABLES `car_register` WRITE;
/*!40000 ALTER TABLE `car_register` DISABLE KEYS */;
INSERT INTO `car_register` VALUES (23,'upload/toyo2.png','Car    ','Maruti   ','ETS    ','5    ','20    ','20    ','TN56CK5677    ','FSDHFKJ    ','Indusland Bank    ',' 22/06/2020',' 22/8/2030','Electric  '),(24,'upload/tata4.png','Car','SAIKUMAR','Swift','10','4543','333','12','MS7556fr','SriRam','2020-07-02','2020-06-10','Discel'),(25,'upload/bus.jpg','Bus','Tata','VX320','50','30','200','TN 76 AG 57657','MS7556fr','HDFC','2012-06-15','2020-07-07','Discel'),(26,'upload/toyo1.png','Car','Tata','Swift','4','100','200','TN98 ASGD','MS7556fr','Indusland Bank','2020-06-18','2020-07-12','Petrol');
/*!40000 ALTER TABLE `car_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `driver_register`
--

DROP TABLE IF EXISTS `driver_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `driver_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Pic` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `ContactNo` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `DriverType` varchar(255) DEFAULT NULL,
  `Experience` varchar(255) DEFAULT NULL,
  `Salary` varchar(255) DEFAULT NULL,
  `DL_Number` varchar(255) DEFAULT NULL,
  `License_Type` varchar(255) DEFAULT NULL,
  `License_Issued` varchar(255) DEFAULT NULL,
  `License_Expiry` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `driver_register`
--

LOCK TABLES `driver_register` WRITE;
/*!40000 ALTER TABLE `driver_register` DISABLE KEYS */;
INSERT INTO `driver_register` VALUES (5,'driver/FB_IMG_1571406621245.jpg','Deepak ','9987218730  ','saikumarmuppanar14@gmail.com  ','Fresher  ','Fresher  ','10000','TNFDD677655444  ','LMV  ','2020-06-02  ','2020-07-12  '),(6,'driver/dp.png','SK','2345678 ','jamil@gmail.com ','Experienced ','4 year ','5000 ','TNFDD677655444 ','HMV ','2020-06-15 ','2020-07-04 '),(7,'driver/IMG_20191010_182404-ANIMATION.gif','Revathi','56465465','revathi14@gmail.com','Experienced','3 year','25000','TN7612345','LMV','2020-06-13','2020-07-12');
/*!40000 ALTER TABLE `driver_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fueldetails`
--

DROP TABLE IF EXISTS `fueldetails`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fueldetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Vehicle_ID` varchar(255) DEFAULT NULL,
  `Vehicle_Type` varchar(255) DEFAULT NULL,
  `Vehicle_Name` varchar(255) DEFAULT NULL,
  `Vehicle_Model` varchar(255) DEFAULT NULL,
  `Driver_Name` varchar(255) DEFAULT NULL,
  `Fuel_Station_Name` varchar(255) DEFAULT NULL,
  `Fuel_Date` date DEFAULT NULL,
  `Fuel_Quantity` varchar(255) DEFAULT NULL,
  `Fuel_Station_Location` varchar(255) DEFAULT NULL,
  `Fuel_Cost` varchar(255) DEFAULT NULL,
  `Fuel_Type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fueldetails`
--

LOCK TABLES `fueldetails` WRITE;
/*!40000 ALTER TABLE `fueldetails` DISABLE KEYS */;
INSERT INTO `fueldetails` VALUES (3,'23','Car    ','Maruti   ','ETS    ','Sai','Indane','2020-06-15','5','Tenkasi','200','Petrol'),(4,'23','Car    ','Maruti   ','ETS    ','Kumar','Reliance','2020-06-18','3','Tenkasi','500','Discel'),(5,'26','Car','Tata','Swift','Sai','Reliance','2020-06-25','12','Tenkasi','500','Gas');
/*!40000 ALTER TABLE `fueldetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Vehicle_ID` varchar(255) DEFAULT NULL,
  `Vehicle_Type` varchar(255) DEFAULT NULL,
  `Vehicle_Name` varchar(255) DEFAULT NULL,
  `Vehicle_Model` varchar(255) DEFAULT NULL,
  `Driver_Name` varchar(255) DEFAULT NULL,
  `Garage_Name` varchar(255) DEFAULT NULL,
  `Repair_Date` date DEFAULT NULL,
  `Repair_Cost` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maintenance`
--

LOCK TABLES `maintenance` WRITE;
/*!40000 ALTER TABLE `maintenance` DISABLE KEYS */;
INSERT INTO `maintenance` VALUES (7,'23','Car    ','Maruti   ','ETS    ','Deepak','sk garage','2020-06-15','600','Engine changed'),(8,'23','Car    ','Maruti   ','ETS    ','Rajesh','sk garage','2020-06-26','300','Brake changed');
/*!40000 ALTER TABLE `maintenance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `profile_pic` varchar(255) DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Confirm_Password` varchar(255) DEFAULT NULL,
  `ContactNo` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register`
--

LOCK TABLES `register` WRITE;
/*!40000 ALTER TABLE `register` DISABLE KEYS */;
INSERT INTO `register` VALUES (1,'profiledp/tata5.png','Saikumar','saikumar@gmail.com','saikumar','saikumar',7856437865),(2,NULL,'sai','sai@gmail.com','sss','sss',9987218730),(3,NULL,'Saikumar','sai11@gmail.com','sss','sss',3456),(4,'profiledp/tata5.png','Saikumar','saikumar@gmail.com','sss','sss',9987218732),(5,'profiledp/tata5.png','Saikumar','saikumar@gmail.com','sss','sss',6666),(6,'profiledp/tata5.png','Saikumar','saikumar@gmail.com','sss','sss',12),(7,NULL,'Saikumar','sai122@gmail.com','sss','sss',544),(8,NULL,'sa','dsdd@gmail.com','sas','sas',444),(9,NULL,'SAIKUMAR','saikumarmuppanar14@gmail.com','asd','asd',4545456665),(10,NULL,'Jarvis','jarvis@yahoo.com','jar','jar',5645435435),(11,NULL,'Rajesh','rajesh@gmail.com','sai','sai',1234567890),(12,NULL,'Suresh','suresh@gmail.com','suresh','suresh',54545333456),(13,NULL,'Basariya','basari@gmail.com','bas','bas',6655465656),(14,NULL,'Dinesh','dinesh@gmail.com','dinesh','dinesh',99876655),(15,'profiledp/tata2.png','Tony','tonystark@gmail.com','tony','tony',7654457677),(16,NULL,'qwerty','qwerty@gmail.com','qwerty','qwerty',5456576),(17,NULL,'nokia','nokia@gmail.com','nokia','nokia',856474154),(18,NULL,'test1','test1@gmail.com','test1','test1',5654654),(19,NULL,'pellar','pellar@gmail.com','pellar','pellar',123456789),(20,NULL,'s','s','s','s',122),(21,NULL,'Mahendra Singh Dhoni','mahi@gmail.com','mahi','mahi',494346),(22,NULL,'Tendukar','tenula@gmail.com','ten','ten',45545),(23,NULL,'Thakur','thakur@gmail.com','thakur','thakur',387616),(24,NULL,'Demo1','demo1@gmail.com','demo1','demo1',455554),(25,NULL,'ABC','abc@gmail.com','abc','abc',654654),(26,NULL,'JA','spyhigh4@gmail.com','00000000','00000000',9090909090),(27,NULL,'subash c','david007@gmail.com','12345678','12345678',7010190225),(28,NULL,'Harish','Harishmani5051@gmail.com','12345678','12345678',7200667533),(29,NULL,'Sai','sai@csk.com','1234567890','1234567890',1234567890);
/*!40000 ALTER TABLE `register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Booking_id` varchar(255) DEFAULT NULL,
  `Booking_Status` varchar(255) DEFAULT NULL,
  `Booking_Date` date DEFAULT NULL,
  `Login_Email` varchar(255) DEFAULT NULL,
  `Pass_Name` varchar(255) DEFAULT NULL,
  `Pass_Contact` varchar(255) DEFAULT NULL,
  `Pass_Email` varchar(255) DEFAULT NULL,
  `Pass_Days` varchar(255) DEFAULT NULL,
  `Start_Loc` varchar(255) DEFAULT NULL,
  `End_Loc` varchar(255) DEFAULT NULL,
  `Pass_JDate` varchar(255) DEFAULT NULL,
  `Pass_RDate` varchar(255) DEFAULT NULL,
  `Car_Name` varchar(255) DEFAULT NULL,
  `Car_Model` varchar(255) DEFAULT NULL,
  `Car_Seats` varchar(255) DEFAULT NULL,
  `Car_Fuel` varchar(255) DEFAULT NULL,
  `Car_Rate` varchar(255) DEFAULT NULL,
  `Car_Driver` varchar(255) DEFAULT NULL,
  `TotalFare` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
INSERT INTO `reservation` VALUES (55,'5ee74a43048f9','Completed','2020-06-15','tonystark@gmail.com','Sachin','343','dinesh@gmail.com','4','Tenkasi','Tirunelveli','2020-06-19','2020-06-26','Maruti   ','ETS    ','5    ','Electric  ','20    ','20    ','100'),(56,'5eeb3f11a70c5','Completed','2020-06-18','tonystark@gmail.com','Virat','54','dhoni@gmail.com','5','Tenkasi','Tirunelveli','2020-07-04','2020-07-03','SAIKUMAR','Swift','10','Discel','4543','333','200'),(57,'5eef33af08c76','Completed','2020-06-21','tonystark@gmail.com','Dhoni','34','dhoni@gmail.com','6','Tenkasi','Tirunelveli','2020-07-04','2020-06-28','Maruti   ','ETS    ','5    ','Electric  ','20    ','20    ','1000'),(58,'5e75e9d2bb926','Completed','2020-03-21','tonystark@gmail.com','Ashwin','445','asa@gmail.com','6','Tenkasi','Tirunelveli','2020-06-13','2020-06-30','SAIKUMAR','Swift','10','Discel','4543','333','7000'),(59,'5ee76cb5d6a4b','Completed','2020-06-15','tonystark@gmail.com','dinesh','977','dhoni@gmail.com','56','Tenkasi','Tirunelveli','2020-06-17','2020-06-28','Maruti   ','ETS    ','5    ','Electric  ','20    ','20    ','5000'),(60,'5ee7881b46442','Completed','2020-06-15','tonystark@gmail.com','Virat','4434','virat@gmail.com','5','Tenkasi','Tirunelveli','2020-06-27','2020-06-27','SAIKUMAR','Swift','10','Discel','4543','333','600'),(61,'5ee79acecf83d','Completed','2020-06-15','tonystark@gmail.com','Virat','545','virat@gmail.com','6','Tenkasi','Tirunelveli','2020-06-16','2020-07-10','SAIKUMAR','Swift','10','Discel','4543','333','200'),(62,'5ee7a4e2f2f6c','Completed','2020-06-15','jarvis@yahoo.com','Jarvis','354354','jarvis@gmail.com','3','Tenkasi','Tirunelveli','2020-06-16','2020-06-18','Tata','VX320','50','Discel','30','200','300'),(63,'5ef18d7fdb7b0','Approved','2020-06-23','jarvis@yahoo.com','Sai','6565665','saikumar@gmail.com','3','Tirunelveli','Madurai','2020-06-23','2020-06-25','Maruti   ','ETS    ','5    ','Electric  ','20    ','20    ',NULL),(64,'5ef491eb4ad00','Approved','2020-06-25','jarvis@yahoo.com','dinesh','3545','dhoni@gmail.com','3','Tenkasi','Tirunelveli','2020-06-23','2020-06-29','Maruti   ','ETS    ','5    ','Electric  ','20    ','20    ',NULL),(65,'5f4e68b1923ec','Approved','2020-09-01','tenula@gmail.com','','','','5','Chennai','Delhi','2020-08-31','2020-09-05','Maruti   ','ETS','5    ','Electric','20    ','20',NULL),(66,'5f4e695051ffd','Completed','2020-09-01','tenula@gmail.com','Shinchan','6757','shinchan@gmail.com','5','Japan','Mumbai','2020-09-01','2020-09-17','Tata','Swift','4','Petrol','100','200','12000'),(67,'5f4e7202acee0','Completed','2020-09-01','tenula@gmail.com','Deepak Shinde','39862949','shinde@gmail.co.in','','Jammu ','New Delhi','2020-09-03','','Tata','VX320','50','Discel','30','200','250'),(68,'5f58697a60306','pending','2020-09-09','spyhigh4@gmail.com','','','','','','','','','Tata','Swift','4','Petrol','100','200',NULL),(69,'5f59d59d53d63','Approved','2020-09-10','tonystark@gmail.com','Manokaran','8899869769','mano@gmail.com','3','Tenkasi','Chennaii','2020-09-11','2020-09-13','SAIKUMAR','Swift','10','Discel','4543','333',NULL),(70,'5f59d7e7c8d39','Completed','2020-09-10','david007@gmail.com','lucifer','7778889890','david007@gmail.com','2','Tenkasi','Chennaii','2020-12-08','2020-12-10','SAIKUMAR','Swift','10','Discel','4543','333','200'),(71,'609a93696f260','Completed','2021-05-11','sai@csk.com','ss','453','dasd@gvhs.com','4','chennai','mumbai','2021-05-11','2021-05-15','SAIKUMAR','Swift','10','Discel','4543','333','2000');
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database '3561756_sktravels'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-22 14:06:41
