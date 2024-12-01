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
-- Table structure for table `pokemon`
--

DROP TABLE IF EXISTS `pokemon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pokemon` (
  `id` int NOT NULL,
  `identifier` varchar(255) DEFAULT NULL,
  `species_id` int DEFAULT NULL,
  `height` int DEFAULT NULL,
  `weight` int DEFAULT NULL,
  `base_experience` int DEFAULT NULL,
  `order` int DEFAULT NULL,
  `is_default` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pokemon`
--

LOCK TABLES `pokemon` WRITE;
/*!40000 ALTER TABLE `pokemon` DISABLE KEYS */;
INSERT INTO `pokemon` VALUES (1,'Bulbasaur',1,NULL,NULL,NULL,NULL,NULL),(2,'Ivysaur',1,NULL,NULL,NULL,NULL,NULL),(3,'Venusaur',1,NULL,NULL,NULL,NULL,NULL),(4,'Charmander',2,NULL,NULL,NULL,NULL,NULL),(5,'Charmeleon',2,NULL,NULL,NULL,NULL,NULL),(6,'Charizard',2,NULL,NULL,NULL,NULL,NULL),(7,'Squirtle',3,NULL,NULL,NULL,NULL,NULL),(8,'Wartortle',3,NULL,NULL,NULL,NULL,NULL),(9,'Blastoise',3,NULL,NULL,NULL,NULL,NULL),(10,'Caterpie',4,NULL,NULL,NULL,NULL,NULL),(11,'Metapod',4,NULL,NULL,NULL,NULL,NULL),(12,'Butterfree',4,NULL,NULL,NULL,NULL,NULL),(13,'Weedle',5,NULL,NULL,NULL,NULL,NULL),(14,'Kakuna',5,NULL,NULL,NULL,NULL,NULL),(15,'Beedrill',5,NULL,NULL,NULL,NULL,NULL),(16,'Pidgey',6,NULL,NULL,NULL,NULL,NULL),(17,'Pidgeotto',6,NULL,NULL,NULL,NULL,NULL),(18,'Pidgeot',6,NULL,NULL,NULL,NULL,NULL),(19,'Rattata',7,NULL,NULL,NULL,NULL,NULL),(20,'Raticate',7,NULL,NULL,NULL,NULL,NULL),(21,'Spearow',8,NULL,NULL,NULL,NULL,NULL),(22,'Fearow',8,NULL,NULL,NULL,NULL,NULL),(23,'Ekans',9,NULL,NULL,NULL,NULL,NULL),(24,'Arbok',9,NULL,NULL,NULL,NULL,NULL),(25,'Pikachu',10,NULL,NULL,NULL,NULL,NULL),(26,'Raichu',10,NULL,NULL,NULL,NULL,NULL),(27,'Sandshrew',11,NULL,NULL,NULL,NULL,NULL),(28,'Sandslash',11,NULL,NULL,NULL,NULL,NULL),(29,'Nidoran♀',12,NULL,NULL,NULL,NULL,NULL),(30,'Nidorina',12,NULL,NULL,NULL,NULL,NULL),(31,'Nidoqueen',12,NULL,NULL,NULL,NULL,NULL),(32,'Nidoran♂',13,NULL,NULL,NULL,NULL,NULL),(33,'Nidorino',13,NULL,NULL,NULL,NULL,NULL),(34,'Nidoking',13,NULL,NULL,NULL,NULL,NULL),(35,'Clefairy',14,NULL,NULL,NULL,NULL,NULL),(36,'Clefable',14,NULL,NULL,NULL,NULL,NULL),(37,'Vulpix',15,NULL,NULL,NULL,NULL,NULL),(38,'Ninetales',15,NULL,NULL,NULL,NULL,NULL),(39,'Jigglypuff',16,NULL,NULL,NULL,NULL,NULL),(40,'Wigglytuff',16,NULL,NULL,NULL,NULL,NULL),(41,'Zubat',17,NULL,NULL,NULL,NULL,NULL),(42,'Golbat',17,NULL,NULL,NULL,NULL,NULL),(43,'Oddish',18,NULL,NULL,NULL,NULL,NULL),(44,'Gloom',18,NULL,NULL,NULL,NULL,NULL),(45,'Vileplume',18,NULL,NULL,NULL,NULL,NULL),(46,'Paras',19,NULL,NULL,NULL,NULL,NULL),(47,'Parasect',19,NULL,NULL,NULL,NULL,NULL),(48,'Venonat',20,NULL,NULL,NULL,NULL,NULL),(49,'Venomoth',20,NULL,NULL,NULL,NULL,NULL),(50,'Diglett',21,NULL,NULL,NULL,NULL,NULL),(51,'Dugtrio',21,NULL,NULL,NULL,NULL,NULL),(52,'Meowth',22,NULL,NULL,NULL,NULL,NULL),(53,'Persian',22,NULL,NULL,NULL,NULL,NULL),(54,'Psyduck',23,NULL,NULL,NULL,NULL,NULL),(55,'Golduck',23,NULL,NULL,NULL,NULL,NULL),(56,'Mankey',24,NULL,NULL,NULL,NULL,NULL),(57,'Primeape',24,NULL,NULL,NULL,NULL,NULL),(58,'Growlithe',25,NULL,NULL,NULL,NULL,NULL),(59,'Arcanine',25,NULL,NULL,NULL,NULL,NULL),(60,'Poliwag',26,NULL,NULL,NULL,NULL,NULL),(61,'Poliwhirl',26,NULL,NULL,NULL,NULL,NULL),(62,'Poliwrath',26,NULL,NULL,NULL,NULL,NULL),(63,'Abra',27,NULL,NULL,NULL,NULL,NULL),(64,'Kadabra',27,NULL,NULL,NULL,NULL,NULL),(65,'Alakazam',27,NULL,NULL,NULL,NULL,NULL),(66,'Machop',28,NULL,NULL,NULL,NULL,NULL),(67,'Machoke',28,NULL,NULL,NULL,NULL,NULL),(68,'Machamp',28,NULL,NULL,NULL,NULL,NULL),(69,'Bellsprout',29,NULL,NULL,NULL,NULL,NULL),(70,'Weepinbell',29,NULL,NULL,NULL,NULL,NULL),(71,'Victreebel',29,NULL,NULL,NULL,NULL,NULL),(72,'Tentacool',30,NULL,NULL,NULL,NULL,NULL),(73,'Tentacruel',30,NULL,NULL,NULL,NULL,NULL),(74,'Geodude',31,NULL,NULL,NULL,NULL,NULL),(75,'Graveler',31,NULL,NULL,NULL,NULL,NULL),(76,'Golem',31,NULL,NULL,NULL,NULL,NULL),(77,'Ponyta',32,NULL,NULL,NULL,NULL,NULL),(78,'Rapidash',32,NULL,NULL,NULL,NULL,NULL),(79,'Slowpoke',33,NULL,NULL,NULL,NULL,NULL),(80,'Slowbro',33,NULL,NULL,NULL,NULL,NULL),(81,'Magnemite',34,NULL,NULL,NULL,NULL,NULL),(82,'Magneton',34,NULL,NULL,NULL,NULL,NULL),(83,'Farfetch\'d',35,NULL,NULL,NULL,NULL,NULL),(84,'Doduo',36,NULL,NULL,NULL,NULL,NULL),(85,'Dodrio',36,NULL,NULL,NULL,NULL,NULL),(86,'Seel',37,NULL,NULL,NULL,NULL,NULL),(87,'Dewgong',37,NULL,NULL,NULL,NULL,NULL),(88,'Grimer',38,NULL,NULL,NULL,NULL,NULL),(89,'Muk',38,NULL,NULL,NULL,NULL,NULL),(90,'Shellder',39,NULL,NULL,NULL,NULL,NULL),(91,'Cloyster',39,NULL,NULL,NULL,NULL,NULL),(92,'Gastly',40,NULL,NULL,NULL,NULL,NULL),(93,'Haunter',40,NULL,NULL,NULL,NULL,NULL),(94,'Gengar',40,NULL,NULL,NULL,NULL,NULL),(95,'Onix',41,NULL,NULL,NULL,NULL,NULL),(96,'Drowzee',42,NULL,NULL,NULL,NULL,NULL),(97,'Hypno',42,NULL,NULL,NULL,NULL,NULL),(98,'Krabby',43,NULL,NULL,NULL,NULL,NULL),(99,'Kingler',43,NULL,NULL,NULL,NULL,NULL),(100,'Voltorb',44,NULL,NULL,NULL,NULL,NULL),(101,'Electrode',44,NULL,NULL,NULL,NULL,NULL),(102,'Exeggcute',45,NULL,NULL,NULL,NULL,NULL),(103,'Exeggutor',45,NULL,NULL,NULL,NULL,NULL),(104,'Cubone',46,NULL,NULL,NULL,NULL,NULL),(105,'Marowak',46,NULL,NULL,NULL,NULL,NULL),(106,'Hitmonlee',47,NULL,NULL,NULL,NULL,NULL),(107,'Hitmonchan',47,NULL,NULL,NULL,NULL,NULL),(108,'Lickitung',48,NULL,NULL,NULL,NULL,NULL),(109,'Koffing',49,NULL,NULL,NULL,NULL,NULL),(110,'Weezing',49,NULL,NULL,NULL,NULL,NULL),(111,'Rhyhorn',50,NULL,NULL,NULL,NULL,NULL),(112,'Rhydon',50,NULL,NULL,NULL,NULL,NULL),(113,'Chansey',51,NULL,NULL,NULL,NULL,NULL),(114,'Tangela',52,NULL,NULL,NULL,NULL,NULL),(115,'Kangaskhan',53,NULL,NULL,NULL,NULL,NULL),(116,'Horsea',54,NULL,NULL,NULL,NULL,NULL),(117,'Seadra',54,NULL,NULL,NULL,NULL,NULL),(118,'Goldeen',55,NULL,NULL,NULL,NULL,NULL),(119,'Seaking',55,NULL,NULL,NULL,NULL,NULL),(120,'Staryu',56,NULL,NULL,NULL,NULL,NULL),(121,'Starmie',56,NULL,NULL,NULL,NULL,NULL),(122,'Mr. Mime',57,NULL,NULL,NULL,NULL,NULL),(123,'Scyther',58,NULL,NULL,NULL,NULL,NULL),(124,'Jynx',59,NULL,NULL,NULL,NULL,NULL),(125,'Electabuzz',60,NULL,NULL,NULL,NULL,NULL),(126,'Magmar',61,NULL,NULL,NULL,NULL,NULL),(127,'Pinsir',62,NULL,NULL,NULL,NULL,NULL),(128,'Tauros',63,NULL,NULL,NULL,NULL,NULL),(129,'Magikarp',64,NULL,NULL,NULL,NULL,NULL),(130,'Gyarados',64,NULL,NULL,NULL,NULL,NULL),(131,'Lapras',65,NULL,NULL,NULL,NULL,NULL),(132,'Ditto',66,NULL,NULL,NULL,NULL,NULL),(133,'Eevee',67,NULL,NULL,NULL,NULL,NULL),(134,'Vaporeon',67,NULL,NULL,NULL,NULL,NULL),(135,'Jolteon',67,NULL,NULL,NULL,NULL,NULL),(136,'Flareon',67,NULL,NULL,NULL,NULL,NULL),(137,'Porygon',68,NULL,NULL,NULL,NULL,NULL),(138,'Omanyte',69,NULL,NULL,NULL,NULL,NULL),(139,'Omastar',69,NULL,NULL,NULL,NULL,NULL),(140,'Kabuto',70,NULL,NULL,NULL,NULL,NULL),(141,'Kabutops',70,NULL,NULL,NULL,NULL,NULL),(142,'Aerodactyl',71,NULL,NULL,NULL,NULL,NULL),(143,'Snorlax',72,NULL,NULL,NULL,NULL,NULL),(144,'Articuno',73,NULL,NULL,NULL,NULL,NULL),(145,'Zapdos',74,NULL,NULL,NULL,NULL,NULL),(146,'Moltres',75,NULL,NULL,NULL,NULL,NULL),(147,'Dratini',76,NULL,NULL,NULL,NULL,NULL),(148,'Dragonair',76,NULL,NULL,NULL,NULL,NULL),(149,'Dragonite',76,NULL,NULL,NULL,NULL,NULL),(150,'Mewtwo',77,NULL,NULL,NULL,NULL,NULL),(151,'Mew',78,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `pokemon` ENABLE KEYS */;
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