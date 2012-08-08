-- MySQL dump 10.13  Distrib 5.1.51, for Win64 (unknown)
--
-- Host: localhost    Database: compambiental
-- ------------------------------------------------------
-- Server version	5.1.51-community

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
-- Table structure for table `comparendos`
--

DROP TABLE IF EXISTS `comparendos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comparendos` (
  ` id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `tipo_sancion` varchar(20) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `valor` varchar(255) NOT NULL,
  `observaciones` text,
  `estado` varchar(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `infraction_id` int(11) NOT NULL,
  `infractor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (` id`),
  KEY `fk_comparendos_infractions1` (`infraction_id`),
  KEY `fk_comparendos_infractors1` (`infractor_id`),
  KEY `fk_comparendos_users1` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comparendos`
--

LOCK TABLES `comparendos` WRITE;
/*!40000 ALTER TABLE `comparendos` DISABLE KEYS */;
/*!40000 ALTER TABLE `comparendos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `concepts`
--

DROP TABLE IF EXISTS `concepts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `concepts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `concepto` varchar(255) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `infraction_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`infraction_id`),
  KEY `fk_values_infractions` (`infraction_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `concepts`
--

LOCK TABLES `concepts` WRITE;
/*!40000 ALTER TABLE `concepts` DISABLE KEYS */;
INSERT INTO `concepts` VALUES (1,'','1','CC',1,'2012-08-07 21:47:56','2012-08-07 21:50:51',1),(2,'','5','NI',1,'2012-08-07 21:48:26','2012-08-07 21:48:26',1),(3,'','1','CC',0,'2012-08-07 21:51:25','2012-08-07 21:09:07',2),(4,'','5','NI',1,'2012-08-07 21:51:49','2012-08-07 21:17:13',2),(5,'Residuos sólidos no peligrosos','1','CC',1,'2012-08-07 21:52:33','2012-08-07 21:52:33',3);
/*!40000 ALTER TABLE `concepts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infractions`
--

DROP TABLE IF EXISTS `infractions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infractions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `CODIGO_INDEX` (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infractions`
--

LOCK TABLES `infractions` WRITE;
/*!40000 ALTER TABLE `infractions` DISABLE KEYS */;
INSERT INTO `infractions` VALUES (1,'01','Presentar para la recolecciÃ³n, los residuos sÃ³lidos en horarios no autorizados por la empresa prestadora del servicio.',1,'2012-08-06 14:31:36','2012-08-06 14:31:36'),(2,'02','No usar los recipientes o demÃ¡s elementos dispuestos para depositar los residuos sÃ³lidos, de acuerdo con los fines establecidos para cada uno de ellos.',1,'2012-08-06 14:51:30','2012-08-07 21:17:13'),(3,'03','Arrojar residuos sÃ³lidos o escombros en espacio pÃºblico en sitios no autorizados.',1,'2012-08-06 14:54:54','2012-08-06 14:54:54'),(4,'04','afasfasfasfas',1,'2012-08-07 14:31:27','2012-08-07 14:31:27');
/*!40000 ALTER TABLE `infractions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `infractors`
--

DROP TABLE IF EXISTS `infractors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infractors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(2) NOT NULL,
  `numero_documento` varchar(255) NOT NULL,
  `nombre_razon_social` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `estado` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_documento_UNIQUE` (`numero_documento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infractors`
--

LOCK TABLES `infractors` WRITE;
/*!40000 ALTER TABLE `infractors` DISABLE KEYS */;
/*!40000 ALTER TABLE `infractors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL,
  `record_id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `values` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `usuario` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `primer_apellido` varchar(255) NOT NULL,
  `segundo_apellido` varchar(255) DEFAULT NULL,
  `primer_nombre` varchar(255) NOT NULL,
  `segundo_nombre` varchar(255) DEFAULT NULL,
  `numero_documento` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(45) NOT NULL DEFAULT 'usuario',
  `estado` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numero_documento_UNIQUE` (`numero_documento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'CORREA','GUTIERREZ','LUIS','GUILLERMO',1117497125,'ed342aaf76c0d14849fa71b33e946d2a7634212f','admin',1,'2012-08-05 22:19:43','2012-08-08 01:51:51','luis.guillermo.correa@hotmail.com'),(2,'DOE','','JHONE','',1,'c6db74f64e5bfbd177de8861673405368f49bc2f','usuario',1,'2012-08-05 23:47:21','2012-08-05 23:47:21','jhon@mail.com');
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

-- Dump completed on 2012-08-07 21:55:00
