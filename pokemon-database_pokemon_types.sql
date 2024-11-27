-- MySQL dump 10.13  Distrib 8.0.38, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: pokemon-database
-- ------------------------------------------------------
-- Server version	8.0.39

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
-- Table structure for table `pokemon_types`
--

DROP TABLE IF EXISTS `pokemon_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pokemon_types` (
  `pokemon_id` int DEFAULT NULL,
  `type_id` int DEFAULT NULL,
  `slot` int DEFAULT NULL,
  KEY `pokemon_id` (`pokemon_id`),
  KEY `id_idx` (`type_id`),
  CONSTRAINT `pokemon_types_ibfk_1` FOREIGN KEY (`pokemon_id`) REFERENCES `pokemon` (`id`),
  CONSTRAINT `pokemon_types_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokemon_types`
--

LOCK TABLES `pokemon_types` WRITE;
/*!40000 ALTER TABLE `pokemon_types` DISABLE KEYS */;
INSERT INTO `pokemon_types` VALUES (1,11,0),(1,4,1),(2,11,0),(2,4,1),(3,11,0),(3,4,1),(4,9,0),(5,9,0),(6,9,0),(6,3,1),(7,10,0),(8,10,0),(9,10,0),(10,7,0),(11,7,0),(12,7,0),(12,3,1),(13,7,0),(13,4,1),(14,7,0),(14,4,1),(15,7,0),(15,4,1),(16,1,0),(16,3,1),(17,1,0),(17,3,1),(18,1,0),(18,3,1),(19,1,0),(20,1,0),(21,1,0),(21,3,1),(22,1,0),(22,3,1),(23,4,0),(24,4,0),(25,12,0),(26,12,0),(27,5,0),(28,5,0),(29,4,0),(30,4,0),(31,4,0),(31,5,1),(32,4,0),(33,4,0),(34,4,0),(34,5,1),(35,1,0),(36,1,0),(37,9,0),(38,9,0),(39,1,0),(40,1,0),(41,4,0),(41,3,1),(42,4,0),(42,3,1),(43,11,0),(43,4,1),(44,11,0),(44,4,1),(45,11,0),(45,4,1),(46,11,0),(46,7,1),(47,11,0),(47,7,1),(48,7,0),(48,4,1),(49,7,0),(49,4,1),(50,5,0),(51,5,0),(52,1,0),(53,1,0),(54,10,0),(55,10,0),(56,2,0),(57,2,0),(58,9,0),(59,9,0),(60,10,0),(61,10,0),(62,10,0),(62,2,1),(63,13,0),(64,13,0),(65,13,0),(66,2,0),(67,2,0),(68,2,0),(69,11,0),(69,4,1),(70,11,0),(70,4,1),(71,11,0),(71,4,1),(72,10,0),(72,4,1),(73,10,0),(73,4,1),(74,6,0),(74,5,1),(75,6,0),(75,5,1),(76,6,0),(76,5,1),(77,9,0),(78,9,0),(79,10,0),(79,13,1),(80,10,0),(80,13,1),(81,12,0),(82,12,0),(84,1,0),(84,3,1),(85,1,0),(85,3,1),(86,10,0),(87,10,0),(87,14,1),(88,4,0),(89,4,0),(90,10,0),(91,10,0),(91,14,1),(92,8,0),(92,4,1),(93,8,0),(93,4,1),(94,8,0),(94,4,1),(95,6,0),(95,5,1),(96,13,0),(97,13,0),(98,10,0),(99,10,0),(100,12,0),(101,12,0),(102,11,0),(102,13,1),(103,11,0),(103,13,1),(104,5,0),(105,5,0),(106,2,0),(107,2,0),(108,1,0),(109,4,0),(110,4,0),(111,5,0),(111,6,1),(112,5,0),(112,6,1),(113,1,0),(114,11,0),(115,1,0),(116,10,0),(117,10,0),(118,10,0),(119,10,0),(120,10,0),(121,10,0),(121,13,1),(122,13,0),(123,7,0),(123,3,1),(124,14,0),(124,13,1),(125,12,0),(126,9,0),(127,7,0),(128,1,0),(129,10,0),(130,10,0),(130,3,1),(131,10,0),(131,14,1),(132,1,0),(133,1,0),(134,10,0),(135,12,0),(136,9,0),(137,1,0),(138,6,0),(138,10,1),(139,6,0),(139,10,1),(140,6,0),(140,10,1),(141,6,0),(141,10,1),(142,6,0),(142,3,1),(143,1,0),(144,14,0),(144,3,1),(145,12,0),(145,3,1),(146,9,0),(146,3,1),(147,15,0),(148,15,0),(149,15,0),(149,3,1),(150,13,0),(151,13,0);
/*!40000 ALTER TABLE `pokemon_types` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-27 13:45:30
