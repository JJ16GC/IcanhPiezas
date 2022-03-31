-- MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: icanh_bd
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB

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
-- Table structure for table `tramite`
--

DROP TABLE IF EXISTS `tramite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramite` (
  `id_tramite` int(11) NOT NULL AUTO_INCREMENT,
  `tipodoc` varchar(30) NOT NULL,
  `otrotip` varchar(30) DEFAULT NULL,
  `numdoc` varchar(30) NOT NULL,
  `pnombre` varchar(30) NOT NULL,
  `snombre` varchar(30) DEFAULT NULL,
  `papellido` varchar(30) DEFAULT NULL,
  `sapellido` varchar(30) DEFAULT NULL,
  `profesion` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `entidadvinc` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `numaut` varchar(30) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `numcert` varchar(30) NOT NULL,
  `nomproyecto` varchar(30) NOT NULL,
  `desctipo` varchar(150) NOT NULL,
  `descmet` varchar(150) NOT NULL,
  `descmate` varchar(150) NOT NULL,
  `cantidad` int(30) NOT NULL,
  `anexos` varchar(150) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `institucion` varchar(30) NOT NULL,
  `lugar` varchar(30) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_retorno` date NOT NULL,
  `nombre_encargado` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  PRIMARY KEY (`id_tramite`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite`
--

LOCK TABLES `tramite` WRITE;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
INSERT INTO `tramite` VALUES (1,'Pasaporte','','1000324721','Jhon','Jairo','Guauque','Cristancho','Ingeniero','3123526090','user@gmail.com','crra100','Icanh','estudiante','1341341234','Piezas','2312312','Analisis11','fdaafsddfas','fdasfdfdsafdas','Piezas',4,'Analisis11ActividadSemanaACA3(1).pdf','Armenia','bogotá','universidad','universidad','2022-02-28','2022-03-24','Andres','Abierto'),(2,'Otro','NIUP','12314124134','Jhon','Jairo','Guauque','Cristancho','Ingeniero','3123526090','user@gmail.com','crra100','Icanh','estudiante','1341341234','Piezas','2312312','Analisis','eqwrqwerweq','reqwrewqrweq','Piezas',5,'AnalisisActividadSemanaACA3(1).pdf','Croacia','bogotá','universidad','universidad','2022-02-27','2022-04-02','Jhon Jairo','Abierto'),(3,'NIT','','1000324721','Jhon','Jairo','Guauque','Cristancho','Ingeniero','3123526090','user@gmail.com','crra100','Icanh','estudiante','1341341234','Piezas','2312312','SFNSAD','dasfdfasafds','fdasdfsafdsa','Piezas',5,'SFNSADActividadSemanaACA3.pdf','Hungría','bogotá','universidad','universidad','2022-03-21','2022-04-09','Jhon Jairo','Cerrado');
/*!40000 ALTER TABLE `tramite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tramite_detalle`
--

DROP TABLE IF EXISTS `tramite_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tramite_detalle` (
  `tick_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_id` int(11) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `tick_estado` varchar(30) NOT NULL,
  `fecha_creacion` date NOT NULL,
  PRIMARY KEY (`tick_id`),
  KEY `usu_id` (`usu_id`),
  CONSTRAINT `tramite_detalle_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `tramite_detalle_ibfk_2` FOREIGN KEY (`tick_id`) REFERENCES `tramite` (`id_tramite`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tramite_detalle`
--

LOCK TABLES `tramite_detalle` WRITE;
/*!40000 ALTER TABLE `tramite_detalle` DISABLE KEYS */;
INSERT INTO `tramite_detalle` VALUES (1,2,'Análisis de piezas','Abierto','2022-03-31'),(2,3,'Análisis de piezas','Abierto','2022-03-31'),(3,2,'Análisis de piezas','Cerrado','2022-03-31');
/*!40000 ALTER TABLE `tramite_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_mod` date DEFAULT NULL,
  `fecha_elim` date DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','admin','admin@gmail.com','$2y$10$E6llurAZ.3NUalzKNTTR1OOzyQ5hCt.93q.ieqX1UpJjVy9LirT7K',2,'2022-03-08','0000-00-00','0000-00-00',1),(2,'Luis','Perez','user@gmail.com','$2y$10$jbj/m.KEe1bQfCpar.lXDuOAC1g1PN7yHl6Sy1Xyc56lFkNRYDby.',1,'2022-03-14',NULL,NULL,1),(3,'Jhon','Guauque','jj16gc@gmail.com','$2y$10$bv8OS9iRo4DG0LLDUPWM9OcdPQm2C/cV8XMkIDN0VeIndIWe8vcrW',1,'2022-03-17',NULL,NULL,1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-03-31 16:31:48
