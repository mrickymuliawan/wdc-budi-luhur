-- MySQL dump 10.16  Distrib 10.1.8-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: brokomputer
-- ------------------------------------------------------
-- Server version	10.1.8-MariaDB

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
-- Current Database: `brokomputer`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `brokomputer` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `brokomputer`;

--
-- Table structure for table `artikel`
--

DROP TABLE IF EXISTS `artikel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `artikel` (
  `kode_artikel` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `komen` text,
  `tanggal` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `artikel`
--

LOCK TABLES `artikel` WRITE;
/*!40000 ALTER TABLE `artikel` DISABLE KEYS */;
INSERT INTO `artikel` VALUES (3,'Jihad Darmawan','Mantap gannnnn!!!','19/Nov/2016'),(3,'Willy Dwi Raharjo','Bener kata jihad, mantappp!','19/Nov/2016'),(1,'Willy Baon','Keren bang, gas terusss','19/Nov/2016'),(1,'Gipari ','Artikelnya kurang menarik huhu','19/Nov/2016'),(1,'RICKY MULIAWAN','@Gipari: Jangan sok tau bang','19/Nov/2016'),(2,'WILLY','wow istimewa!','19/Nov/2016');
/*!40000 ALTER TABLE `artikel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `part`
--

DROP TABLE IF EXISTS `part`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `part` (
  `kode_part` varchar(50) DEFAULT NULL,
  `nama_part` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `part`
--

LOCK TABLES `part` WRITE;
/*!40000 ALTER TABLE `part` DISABLE KEYS */;
INSERT INTO `part` VALUES ('int6','Intel Pentium G3240 3.2 Ghz',830000,'cpu','intel'),('int1','Intel Core i3 4130 3.4 Ghz',1400000,'cpu','intel'),('int2','Intel Core i3 4150 3.5 Ghz',1450000,'cpu','intel'),('int5','Intel Pentium G3220 3.0 Ghz',700000,'cpu','intel'),('int3','Intel Core i5 4690k 3.9 Ghz',3300000,'cpu','intel'),('int4','Intel Core i7 4790k 4.4 Ghz',4600000,'cpu','intel'),('amd1','AMD Carrizo Athlon X4-845 3.1 Ghz',1000000,'cpu','amd'),('amd2','AMD Kaveri A6-7400K  3.5 Ghz',630000,'cpu','amd'),('amd3','AMD Kaveri A8-7600 3.1 Ghz',1000000,'cpu','amd'),('amd5','AMD Vishera FX-6300 3.5 Ghz',1300000,'cpu','amd'),('amd6','AMD Vishera FX-8350 4.0 Ghz ',2500000,'cpu','amd'),('amd4','AMD Kaveri Athlon X4-860K 3.5 Ghz',840000,'cpu','amd'),('msi7','MSI Z170A G43 PLUS',2300000,'motherboard','msi'),('msi6','MSI H170M-PRO',1700000,'motherboard','msi'),('ass4','Asus Z170M-Plus',2200000,'motherboard','asus'),('asr2','ASRock B150 Gaming K4',1600000,'motherboard','asrock'),('asr3','ASRock FataL1ty Z170 GAMING K6',3000000,'motherboard','asrock'),('ass2','Asus H110M-D',1100000,'motherboard','asus'),('ass1','Asus 970 Pro Gaming Aura',1800000,'motherboard','asus'),('msi1','MSI 760GM-P23',730000,'motherboard','msi'),('msi2','MSI 990FXA-Gaming',2550000,'motherboard','msi'),('asr1','ASRock A88M-G/3.1 ',950000,'motherboard','asrock'),('gb1','Gigabyte GA-F2A88XM-HD3',1300000,'motherboard','gigabyte'),('ass3','Asus M5A78L-M/USB3',880000,'motherboard','asus'),('xfx1','XFX Radeon R7 360 2GB DDR5',1400000,'vga','xfx'),('sap2','Sapphire Radeon R9 390 8G GDDR5',4450000,'vga','sapphire'),('sap1','Sapphire Radeon R7 250 2G GDDR5',1200000,'vga','sapphire'),('ztc2','Zotac GeForce GTX 750 Ti 1GB DDR5',1300000,'vga','zotac'),('msi5','MSI GeForce GTX 960 4GB DDR5',3800000,'vga','msi'),('xfx2','XFX Radeon RX 480 4GB DDR5',3300000,'vga','xfx'),('msi4','MSI GeForce GTX 1080 8GB DDR5',12100000,'vga','msi'),('ztc1','Zotac GeForce GTX 1050 Ti 4GB DDR5',2300000,'vga','zotac'),('crs1','Corsair  DDR3 8GB PC12800',655000,'ram','corsair'),('crs2','Corsair  DDR3 4GB PC12800',410000,'ram','corsair'),('tme1','Team Elite Plus Black DDR4  2400Mhz 8GB',1200000,'ram','team elite'),('tme2','Team Elite Plus Red DDR4 2400Mhz 16GB',1000000,'ram','team elite'),('wdc1','WDC 500GB SATA3',570000,'hdd','wdc'),('wdc2','WDC1TB SATA3',700000,'hdd','wdc'),('sgt1','Seagate 1TB SATA3',720000,'hdd','seagate'),('sgt2','Seagate 500GB SATA3',560000,'hdd','seagate'),('xfx3','XFX TS Series 430W 80PLUS GOLD ',550000,'psu','xfx'),('xfx5','XFX TS Series 850W 80PLUS GOLD ',2350000,'psu','xfx'),('xfx4','XFX TS Series 650W 80PLUS GOLD ',1550000,'psu','xfx'),('dzb2','Dazumba de310',315000,'case','dazumba'),('dzb3','Dazumba de610',335000,'case','dazumba'),('dzb1','Dazumba de210',175000,'case','dazumba'),('pwl1','Power Logic futura neo',275000,'case','power logic'),('pwl2','Power logic nanotron',375000,'case','power logic'),('lg3','LG LED 19',1000000,'monitor','lg'),('lg2','LG LED 22',1400000,'monitor','lg'),('lg1','LG LED 16',810000,'monitor','lg'),('novga','Tanpa Vga Card',0,'vga',NULL),('nomonitor','Tanpa Monitor',0,'monitor',NULL);
/*!40000 ALTER TABLE `part` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesanan`
--

DROP TABLE IF EXISTS `pesanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesanan` (
  `kode_pesan` varchar(50) NOT NULL,
  `pelanggan` varchar(50) NOT NULL DEFAULT '0',
  `nama_part` varchar(50) DEFAULT NULL,
  `harga` int(11) NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0',
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesanan`
--

LOCK TABLES `pesanan` WRITE;
/*!40000 ALTER TABLE `pesanan` DISABLE KEYS */;
INSERT INTO `pesanan` VALUES ('RICKY MULIAWAN1','RICKY MULIAWAN','PAKET MIN GAMING',5100000,5100000,'menunggu pembayaran');
/*!40000 ALTER TABLE `pesanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nomor` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (22,'ANDI ','ANDI','ANDI','DIRUMAHNYA ANDI',12345),(23,'RICKY MULIAWAN','RICKY@GMAIL.COM','PASSWORD','PERBANAS BLOK F/6',2147483647),(24,'WILLY','WILLY@GMAIL.COM','WILLY','CILEDUG ',12345);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-19 15:33:52
