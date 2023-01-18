-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: db1
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `secret_articles`
--

DROP TABLE IF EXISTS `secret_articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `secret_articles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int unsigned NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `text` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date1` int unsigned NOT NULL,
  `hide` tinyint unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secret_articles`
--

LOCK TABLES `secret_articles` WRITE;
/*!40000 ALTER TABLE `secret_articles` DISABLE KEYS */;
INSERT INTO `secret_articles` VALUES (1,2,'Cows first redacted article','Text of cows first redacted article...',1672303533,0),(2,1,'Snakes first article','Text of this snakes article...',1672303533,1);
/*!40000 ALTER TABLE `secret_articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `secret_users`
--

DROP TABLE IF EXISTS `secret_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `secret_users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `password` char(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `balance` double(10,2) unsigned NOT NULL DEFAULT '0.00',
  `ip_reg` bigint NOT NULL,
  `date_reg` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `secret_users`
--

LOCK TABLES `secret_users` WRITE;
/*!40000 ALTER TABLE `secret_users` DISABLE KEYS */;
INSERT INTO `secret_users` VALUES (1,'Python','python@mail.mail','$2y$10$.8JAUMuVZrZ5.QKy23o/meIkcnAxHdiG9CtPMqP79lzSJvT8Pq9vC',0.00,0,1672303533),(2,'GNU','gnu@mail.mail','$2y$10$I7ZMjxLYB2X1eGBEcIwWB.5m0odCx2j6WXfomr5Jc5lTVYPZdPyDe',5.20,0,1672303533),(3,'Me','mail@mail.mail','$2y$10$M0VkCZ57Aln6eBJJ07L.b.mzceAoQ0SGZ6w8eUJXgWbZE4JoJDcXW',0.00,167772674,1672487253),(4,'2','2','$2y$10$iXubT.YXuI5RiLUtR6GNaOyfEMNnfl7DjoZeJRUWiOvKakCCcrEJe',0.00,167772674,1672495585),(5,'LittleMan','a@a-nova.ru','$2y$10$Xdqr2yhZyCTzRpE9aO6Kl.Pu75KpB5E70Aye8.tKeqLAgvmf3Hxum',0.00,167772674,1672496722);
/*!40000 ALTER TABLE `secret_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-31 16:01:01
