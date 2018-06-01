-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: whb
-- ------------------------------------------------------
-- Server version	5.6.13

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
-- Table structure for table `wheels`
--

DROP TABLE IF EXISTS `wheels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wheels` (
  `ItemID` int(10) NOT NULL AUTO_INCREMENT,
  `Item` varchar(25) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Image` varchar(25) NOT NULL,
  `Price` decimal(4,2) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wheels`
--

LOCK TABLES `wheels` WRITE;
/*!40000 ALTER TABLE `wheels` DISABLE KEYS */;
INSERT INTO `wheels` VALUES (1,'Trusted Classic','This is a fine example of a utilitarian \n    wheelbarrow that can be called upon and trusted to carry ones \n    load from A to B','images/wb1.jpg',27.99),(2,'Golden Oldie','This is \n    among our award winning classics which is a fine addition to any\n    retro garden environment. Fully functional, its a keeper','images/oldwb.jpg',45.55),(3,'Work Beast','Say Hello to many \n    easier days toiling when you let this wheelbarrow into your life. \n    Its motors gently assist you with any hard work','images/motowb.jpg',65.95),(4,'Orange Classic','This wheelbarrow is an award-winning model, \n    known worldwide for its impressive performances and its longevity','images/wb2.jpg',32.95),(5,'Pull Trolley','This versatile trolley can be\n    used for many things, not only gardening. Take it shopping with you, \n    or take your kids bags home from school','images/trolley.jpeg',28.99),(6,'Retro Fantastic','A vintage piece of equipment that will benefit the\n    aesthetics of any garden. Can even be used for carting too','images/wooden.jpeg',47.99);
/*!40000 ALTER TABLE `wheels` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-04 23:32:53
