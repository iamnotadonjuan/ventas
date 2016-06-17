-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: inmueble
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Current Database: `inmueble`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `inmueble` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `inmueble`;

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentarios` (
  `come_iden` int(11) NOT NULL AUTO_INCREMENT,
  `usua_iden` int(11) NOT NULL,
  `inmu_iden` int(11) NOT NULL,
  `come_fech` date NOT NULL,
  `come_come` text NOT NULL,
  PRIMARY KEY (`come_iden`),
  KEY `usua_iden` (`usua_iden`),
  KEY `inmu_iden` (`inmu_iden`),
  CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`usua_iden`) REFERENCES `usuarios` (`usua_iden`),
  CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`inmu_iden`) REFERENCES `inmuebles` (`inmu_iden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Comentarios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentarios`
--

LOCK TABLES `comentarios` WRITE;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inmuebles`
--

DROP TABLE IF EXISTS `inmuebles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inmuebles` (
  `inmu_iden` int(11) NOT NULL AUTO_INCREMENT,
  `inmu_nomb` varchar(100) NOT NULL,
  `inmu_desc` text NOT NULL,
  `inmu_valo` double NOT NULL,
  `inmu_tine` enum('Arriendo','Venta') NOT NULL,
  `inmu_npla` int(11) NOT NULL,
  `inmu_fech` date NOT NULL,
  `inmu_nhab` smallint(6) NOT NULL,
  `inmu_nban` smallint(6) NOT NULL,
  `inmu_npar` smallint(6) NOT NULL,
  `inmu_npis` smallint(6) NOT NULL,
  `inmu_m2c` int(11) NOT NULL,
  `inmu_m2nc` int(11) NOT NULL,
  `inmu_terr` tinyint(1) NOT NULL,
  `inmu_estr` int(11) NOT NULL,
  `inmu_agua` tinyint(1) NOT NULL,
  `inmu_luz` tinyint(1) NOT NULL,
  `inmu_gas` tinyint(1) NOT NULL,
  `inmu_tele` int(1) NOT NULL,
  `inmu_bbq` tinyint(1) NOT NULL,
  `inmu_prop` enum('Oferta','Demanda') NOT NULL,
  `inmu_feed` date NOT NULL,
  `inmu_fefi` date NOT NULL,
  `inmu_est` enum('Activo','Desactivado') NOT NULL,
  PRIMARY KEY (`inmu_iden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Inmuebles';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inmuebles`
--

LOCK TABLES `inmuebles` WRITE;
/*!40000 ALTER TABLE `inmuebles` DISABLE KEYS */;
/*!40000 ALTER TABLE `inmuebles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inmuebles_fotos`
--

DROP TABLE IF EXISTS `inmuebles_fotos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inmuebles_fotos` (
  `info_iden` int(11) NOT NULL AUTO_INCREMENT,
  `inmu_iden` int(11) DEFAULT NULL,
  `info_foto` varchar(255) NOT NULL,
  PRIMARY KEY (`info_iden`),
  KEY `info_inmu` (`inmu_iden`),
  CONSTRAINT `info_inmu` FOREIGN KEY (`inmu_iden`) REFERENCES `inmuebles` (`inmu_iden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inmuebles_fotos`
--

LOCK TABLES `inmuebles_fotos` WRITE;
/*!40000 ALTER TABLE `inmuebles_fotos` DISABLE KEYS */;
/*!40000 ALTER TABLE `inmuebles_fotos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lista_deseos`
--

DROP TABLE IF EXISTS `lista_deseos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lista_deseos` (
  `lide_iden` int(11) NOT NULL AUTO_INCREMENT,
  `inmu_iden` int(11) NOT NULL,
  `usua_iden` int(11) NOT NULL,
  PRIMARY KEY (`lide_iden`),
  KEY `inmu_iden` (`inmu_iden`),
  KEY `usua_iden` (`usua_iden`),
  CONSTRAINT `lista_deseos_ibfk_1` FOREIGN KEY (`inmu_iden`) REFERENCES `inmuebles` (`inmu_iden`),
  CONSTRAINT `lista_deseos_ibfk_2` FOREIGN KEY (`usua_iden`) REFERENCES `usuarios` (`usua_iden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Lista de deseos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lista_deseos`
--

LOCK TABLES `lista_deseos` WRITE;
/*!40000 ALTER TABLE `lista_deseos` DISABLE KEYS */;
/*!40000 ALTER TABLE `lista_deseos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_usuarios`
--

DROP TABLE IF EXISTS `tipos_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_usuarios` (
  `tius_iden` int(11) NOT NULL AUTO_INCREMENT,
  `tius_nomb` varchar(15) NOT NULL,
  PRIMARY KEY (`tius_iden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Tipo Usuarios';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_usuarios`
--

LOCK TABLES `tipos_usuarios` WRITE;
/*!40000 ALTER TABLE `tipos_usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usua_iden` int(11) NOT NULL AUTO_INCREMENT,
  `tius_iden` int(11) NOT NULL,
  `usua_nomb` varchar(100) NOT NULL,
  `usua_emai` varchar(100) NOT NULL,
  `usua_clav` char(32) NOT NULL,
  `usua_tele` varchar(20) NOT NULL,
  `usua_dire` varchar(100) NOT NULL,
  `usua_conf` tinyint(1) NOT NULL,
  `usua_regi` tinyint(1) NOT NULL,
  PRIMARY KEY (`usua_iden`),
  KEY `tius_iden` (`tius_iden`),
  CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`tius_iden`) REFERENCES `tipos_usuarios` (`tius_iden`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Tabla Usuarios';
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

-- Dump completed on 2016-06-16 23:23:24
