CREATE DATABASE  IF NOT EXISTS `dbgrosic` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dbgrosic`;
-- MySQL dump 10.13  Distrib 5.7.23, for Win64 (x86_64)
--
-- Host: localhost    Database: dbgrosic
-- ------------------------------------------------------
-- Server version	5.7.23

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
-- Table structure for table `estados`
--

DROP TABLE IF EXISTS `estados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `id_estado` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `extension_territorial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `gentilicio` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `numero_municipios` int(11) NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen_estado` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen_escudo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `num_habitantes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estado`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES (1,'Guerrero','Chilpancingo de los Bravo','64281 ','Guerrrerense',81,'Guerrero es uno de los treinta y un estados que, junto con la Ciudad de México, forman los Estados Unidos Mexicanos. Su capital es Chilpancingo de los Bravo y su ciudad más poblada, Acapulco de Juárez. Está ubicado en la región suroeste del país, limitando al norte con el Estado de México, Morelos y Puebla, al sureste con Oaxaca, al suroeste con el océano Pacífico y al noroeste con el río Balsas que lo separa de Michoacán. Fue fundado el 27 de octubre de 1849.','/images/mapas/1550449219mapa_guerrero.png','/images/escudos/1550449219escudo_guerrero.png','2019-02-18 00:20:19','2019-02-18 00:20:19',187251);
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fauna`
--

DROP TABLE IF EXISTS `fauna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fauna` (
  `id_fauna` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_cientfico` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No se especifica',
  `promedio_vida` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No se especifica',
  `descripcion_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_fauna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fauna`
--

LOCK TABLES `fauna` WRITE;
/*!40000 ALTER TABLE `fauna` DISABLE KEYS */;
/*!40000 ALTER TABLE `fauna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fauna_imagenes`
--

DROP TABLE IF EXISTS `fauna_imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fauna_imagenes` (
  `id_fauna` int(10) unsigned NOT NULL,
  `id_imagen` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_fauna_has_imagenes_fauna1_idx` (`id_fauna`),
  KEY `fk_fauna_has_imagenes_imagenes1_idx` (`id_imagen`),
  CONSTRAINT `fauna_imagenes_id_fauna` FOREIGN KEY (`id_fauna`) REFERENCES `fauna` (`id_fauna`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_fauna_has_imagenes_imagenes1_idx` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fauna_imagenes`
--

LOCK TABLES `fauna_imagenes` WRITE;
/*!40000 ALTER TABLE `fauna_imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `fauna_imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fauna_municipios`
--

DROP TABLE IF EXISTS `fauna_municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fauna_municipios` (
  `id_Fauna` int(10) unsigned NOT NULL,
  `id_municipio` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_Fauna_has_municipios_municipios1_idx` (`id_municipio`),
  KEY `fk_Fauna_has_municipios_Fauna1_idx` (`id_Fauna`),
  CONSTRAINT `fauna_municipios_id_Fauna` FOREIGN KEY (`id_Fauna`) REFERENCES `fauna` (`id_fauna`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Fauna_has_municipios_municipios1_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fauna_municipios`
--

LOCK TABLES `fauna_municipios` WRITE;
/*!40000 ALTER TABLE `fauna_municipios` DISABLE KEYS */;
/*!40000 ALTER TABLE `fauna_municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flora`
--

DROP TABLE IF EXISTS `flora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flora` (
  `id_flora` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_cientifico` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `genero` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `familia` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `especie` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `descripcion_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_flora`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flora`
--

LOCK TABLES `flora` WRITE;
/*!40000 ALTER TABLE `flora` DISABLE KEYS */;
/*!40000 ALTER TABLE `flora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flora_imagenes`
--

DROP TABLE IF EXISTS `flora_imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flora_imagenes` (
  `id_flora` int(10) unsigned NOT NULL,
  `id_imagen` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_Flora_has_imagenes_Flora1_idx` (`id_flora`),
  KEY `fk_Flora_has_imagenes_imagenes1_idx` (`id_imagen`),
  CONSTRAINT `fk_Flora_has_imagenes_imagenes1_idx` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `flora_imagenes_id_flora` FOREIGN KEY (`id_flora`) REFERENCES `flora` (`id_flora`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flora_imagenes`
--

LOCK TABLES `flora_imagenes` WRITE;
/*!40000 ALTER TABLE `flora_imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `flora_imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flora_municipios`
--

DROP TABLE IF EXISTS `flora_municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flora_municipios` (
  `id_flora` int(10) unsigned NOT NULL,
  `id_municipio` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_Flora_has_municipios_municipios1_idx` (`id_municipio`),
  KEY `fk_Flora_has_municipios_Flora1_idx` (`id_flora`),
  CONSTRAINT `fk_Flora_has_municipios_municipios1_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `flora_municipios_id_flora` FOREIGN KEY (`id_flora`) REFERENCES `flora` (`id_flora`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flora_municipios`
--

LOCK TABLES `flora_municipios` WRITE;
/*!40000 ALTER TABLE `flora_municipios` DISABLE KEYS */;
/*!40000 ALTER TABLE `flora_municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id_imagen` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ruta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intereses_culturales`
--

DROP TABLE IF EXISTS `intereses_culturales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intereses_culturales` (
  `id_interes_cult` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `horario` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `direccion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_municipio` int(10) unsigned NOT NULL,
  `id_tipo_interes` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_interes_cult`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_int_culturales_municipios_idx` (`id_municipio`),
  KEY `fk_tipo_intereses_culturales_idx` (`id_tipo_interes`),
  CONSTRAINT `fk_int_culturales_municipios_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tipo_intereses_culturales_idx` FOREIGN KEY (`id_tipo_interes`) REFERENCES `tipo_intereses_culturales` (`id_tipo_interes`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intereses_culturales`
--

LOCK TABLES `intereses_culturales` WRITE;
/*!40000 ALTER TABLE `intereses_culturales` DISABLE KEYS */;
/*!40000 ALTER TABLE `intereses_culturales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intereses_culturales_has_imagenes`
--

DROP TABLE IF EXISTS `intereses_culturales_has_imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `intereses_culturales_has_imagenes` (
  `id_interes_cult` int(10) unsigned NOT NULL,
  `id_imagen` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_intereses_culturales_has_imagenes_imagenes1_idx` (`id_imagen`),
  KEY `fk_intereses_culturales_has_imagenes_intereses_culturales1_idx` (`id_interes_cult`),
  CONSTRAINT `fk_intereses_culturales_has_imagenes_imagenes1_idx` FOREIGN KEY (`id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_intereses_culturales_has_imagenes_intereses_culturales1_idx` FOREIGN KEY (`id_interes_cult`) REFERENCES `intereses_culturales` (`id_interes_cult`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intereses_culturales_has_imagenes`
--

LOCK TABLES `intereses_culturales_has_imagenes` WRITE;
/*!40000 ALTER TABLE `intereses_culturales_has_imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `intereses_culturales_has_imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lenguajes`
--

DROP TABLE IF EXISTS `lenguajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lenguajes` (
  `id_lengua` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_lengua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lenguajes`
--

LOCK TABLES `lenguajes` WRITE;
/*!40000 ALTER TABLE `lenguajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `lenguajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_02_17_121520_create_imagens_table',1),(4,'2019_02_17_121520_create_usuarios_table',1),(5,'2019_02_17_121521_create_estados_table',1),(6,'2019_02_17_121521_create_faunas_table',1),(7,'2019_02_17_121521_create_floras_table',1),(8,'2019_02_17_121521_create_lenguajes_table',1),(9,'2019_02_17_121521_create_religions_table',1),(10,'2019_02_17_121521_create_tipo_sitio_interes_table',1),(11,'2019_02_17_121521_create_tipo_tradicions_table',1),(12,'2019_02_17_121620_create_regions_table',1),(13,'2019_02_17_121720_create_municipios_table',1),(14,'2019_02_17_121822_create_sitio_interes_table',1),(15,'2019_02_17_121822_create_tradicions_table',1),(16,'2019_02_17_121837_create_fauna_has_imagens_table',1),(17,'2019_02_17_121921_create_sitio_interes_has_imagens_table',1),(18,'2019_02_17_122026_create_flora_has_imagens_table',1),(19,'2019_02_17_122257_create_municipio_has_faunas_table',1),(20,'2019_02_17_122446_create_municipio_has_floras_table',1),(21,'2019_02_17_122545_create_municipio_has_lenguajes_table',1),(22,'2019_02_17_122720_create_municipio_has_religions_table',1),(23,'2019_02_17_122745_create_municipio_has_tradicions_table',1),(24,'2019_02_17_123036_create_tradicion_has_imagens_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios`
--

DROP TABLE IF EXISTS `municipios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios` (
  `id_municipio` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clima` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `numero_habitantes` int(11) NOT NULL,
  `historia_general` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `escudo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mapa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_region` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_municipio`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_municipios_regiones1_idx` (`id_region`),
  CONSTRAINT `fk_municipios_regiones1_idx` FOREIGN KEY (`id_region`) REFERENCES `regiones` (`id_region`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios`
--

LOCK TABLES `municipios` WRITE;
/*!40000 ALTER TABLE `municipios` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios_lenguajes`
--

DROP TABLE IF EXISTS `municipios_lenguajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios_lenguajes` (
  `id_lengua` int(10) unsigned NOT NULL,
  `id_municipio` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_municipio_municipio_idx` (`id_municipio`),
  KEY `fk_lengua_lengua_idx` (`id_lengua`),
  CONSTRAINT `fk_municipio_municipio_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `municipios_lenguajes_id_lengua` FOREIGN KEY (`id_lengua`) REFERENCES `lenguajes` (`id_lengua`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios_lenguajes`
--

LOCK TABLES `municipios_lenguajes` WRITE;
/*!40000 ALTER TABLE `municipios_lenguajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipios_lenguajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios_religiones`
--

DROP TABLE IF EXISTS `municipios_religiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios_religiones` (
  `id_municipio` int(10) unsigned NOT NULL,
  `id_religion` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_municipio_religion_municipios_idx` (`id_municipio`),
  KEY `fk_municipio_religion_religiones_idx` (`id_religion`),
  CONSTRAINT `fk_municipio_religion_religiones_idx` FOREIGN KEY (`id_religion`) REFERENCES `religiones` (`id_religion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `municipios_religiones_id_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios_religiones`
--

LOCK TABLES `municipios_religiones` WRITE;
/*!40000 ALTER TABLE `municipios_religiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipios_religiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipios_tradiciones`
--

DROP TABLE IF EXISTS `municipios_tradiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipios_tradiciones` (
  `id_municipio` int(10) unsigned NOT NULL,
  `id_tradicion` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_muni_tradi_municipios_idx` (`id_municipio`),
  KEY `fk_muni_tradi_tradiciones_idx` (`id_tradicion`),
  CONSTRAINT `fk_muni_tradi_municipios_idx` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_muni_tradi_tradiciones_idx` FOREIGN KEY (`id_tradicion`) REFERENCES `tradiciones` (`id_tradicion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipios_tradiciones`
--

LOCK TABLES `municipios_tradiciones` WRITE;
/*!40000 ALTER TABLE `municipios_tradiciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipios_tradiciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `regiones`
--

DROP TABLE IF EXISTS `regiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `regiones` (
  `id_region` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capital_regional` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `extension_territorial` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `ubicacion_geografica` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Información no disponible',
  `numero_habitantes` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Información no disponible',
  `numero_municipios` int(11) NOT NULL,
  `mapa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_estado` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_region`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_regiones_estados1_idx` (`id_estado`),
  CONSTRAINT `fk_regiones_estados1_idx` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `regiones`
--

LOCK TABLES `regiones` WRITE;
/*!40000 ALTER TABLE `regiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `regiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `religiones`
--

DROP TABLE IF EXISTS `religiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `religiones` (
  `id_religion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_religion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `religiones`
--

LOCK TABLES `religiones` WRITE;
/*!40000 ALTER TABLE `religiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `religiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_intereses_culturales`
--

DROP TABLE IF EXISTS `tipo_intereses_culturales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_intereses_culturales` (
  `id_tipo_interes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_interes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_intereses_culturales`
--

LOCK TABLES `tipo_intereses_culturales` WRITE;
/*!40000 ALTER TABLE `tipo_intereses_culturales` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_intereses_culturales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_tradicion`
--

DROP TABLE IF EXISTS `tipo_tradicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_tradicion` (
  `id_tipo_tradicion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tipo_tradicion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_tradicion`
--

LOCK TABLES `tipo_tradicion` WRITE;
/*!40000 ALTER TABLE `tipo_tradicion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_tradicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tradiciones`
--

DROP TABLE IF EXISTS `tradiciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tradiciones` (
  `id_tradicion` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_festejo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Informacion no disponible',
  `id_tipo_tradicion` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_tradicion`),
  UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  KEY `fk_tradiciones_tipo_tradicion_idx` (`id_tipo_tradicion`),
  CONSTRAINT `fk_tradiciones_tipo_tradicion_idx` FOREIGN KEY (`id_tipo_tradicion`) REFERENCES `tipo_tradicion` (`id_tipo_tradicion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tradiciones`
--

LOCK TABLES `tradiciones` WRITE;
/*!40000 ALTER TABLE `tradiciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `tradiciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tradiciones_has_imagenes`
--

DROP TABLE IF EXISTS `tradiciones_has_imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tradiciones_has_imagenes` (
  `tradiciones_id_tradicion` int(10) unsigned NOT NULL,
  `imagenes_id_imagen` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `fk_tradiciones_has_imagenes_tradiciones1_idx` (`tradiciones_id_tradicion`),
  KEY `fk_tradiciones_has_imagenes_imagenes1_idx` (`imagenes_id_imagen`),
  CONSTRAINT `fk_tradiciones_has_imagenes_imagenes1_idx` FOREIGN KEY (`imagenes_id_imagen`) REFERENCES `imagenes` (`id_imagen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tradiciones_has_imagenes_tradiciones1_idx` FOREIGN KEY (`tradiciones_id_tradicion`) REFERENCES `tradiciones` (`id_tradicion`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tradiciones_has_imagenes`
--

LOCK TABLES `tradiciones_has_imagenes` WRITE;
/*!40000 ALTER TABLE `tradiciones_has_imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tradiciones_has_imagenes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo_electronico` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-24  8:54:29
