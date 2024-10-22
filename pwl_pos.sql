-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pwl_pos
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_barang`
--

DROP TABLE IF EXISTS `m_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_barang` (
  `barang_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_id` bigint(20) unsigned NOT NULL,
  `barang_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barang_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_beli` bigint(20) unsigned NOT NULL,
  `harga_jual` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`barang_id`),
  UNIQUE KEY `m_barang_barang_kode_unique` (`barang_kode`),
  KEY `m_barang_kategori_id_index` (`kategori_id`),
  CONSTRAINT `m_barang_kategori_id_foreign` FOREIGN KEY (`kategori_id`) REFERENCES `m_kategori` (`kategori_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_barang`
--

LOCK TABLES `m_barang` WRITE;
/*!40000 ALTER TABLE `m_barang` DISABLE KEYS */;
INSERT INTO `m_barang` VALUES (1,1,'B1','Lifebuoy',5000,6500,NULL,NULL),(2,1,'B2','Dettol',5500,6500,NULL,NULL),(3,1,'B3','Giv',3500,5000,NULL,NULL),(4,2,'B4','Erigo',85000,100000,NULL,NULL),(5,2,'B5','H&M',200000,250000,NULL,NULL),(6,2,'B6','3Second',15000,25000,NULL,NULL),(7,3,'B7','Jetz',3500,4500,NULL,NULL),(8,3,'B8','Better',1500,2000,NULL,NULL),(9,3,'B9','Sukro',500,1000,NULL,NULL),(10,4,'B10','Yupi',150,500,NULL,NULL),(11,4,'B11','Kopiko',150,500,NULL,NULL),(12,4,'B12','Relaxa',150,500,NULL,NULL),(13,5,'B13','Teh Gelas',1500,2000,NULL,NULL),(14,5,'B14','Golda',3000,3500,NULL,NULL),(15,5,'B15','Pocari',5000,6500,NULL,NULL);
/*!40000 ALTER TABLE `m_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_kategori`
--

DROP TABLE IF EXISTS `m_kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_kategori` (
  `kategori_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kategori_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kategori_id`),
  UNIQUE KEY `m_kategori_kategori_kode_unique` (`kategori_kode`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_kategori`
--

LOCK TABLES `m_kategori` WRITE;
/*!40000 ALTER TABLE `m_kategori` DISABLE KEYS */;
INSERT INTO `m_kategori` VALUES (1,'K1','Sabun',NULL,NULL),(2,'K2','Pakaian',NULL,NULL),(3,'K3','Snack',NULL,NULL),(4,'K4','Permen',NULL,NULL),(5,'K5','Minuman',NULL,NULL);
/*!40000 ALTER TABLE `m_kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_level`
--

DROP TABLE IF EXISTS `m_level`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_level` (
  `level_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `level_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`level_id`),
  UNIQUE KEY `m_level_level_kode_unique` (`level_kode`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_level`
--

LOCK TABLES `m_level` WRITE;
/*!40000 ALTER TABLE `m_level` DISABLE KEYS */;
INSERT INTO `m_level` VALUES (1,'ADM','Administrator',NULL,NULL),(2,'MNG','Manager',NULL,NULL),(3,'STF','Staff/Kasir',NULL,NULL);
/*!40000 ALTER TABLE `m_level` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_supplier`
--

DROP TABLE IF EXISTS `m_supplier`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_supplier` (
  `supplier_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `supplier_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`supplier_id`),
  UNIQUE KEY `m_supplier_supplier_kode_unique` (`supplier_kode`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_supplier`
--

LOCK TABLES `m_supplier` WRITE;
/*!40000 ALTER TABLE `m_supplier` DISABLE KEYS */;
INSERT INTO `m_supplier` VALUES (1,'S1','PT Supply Nusantara','Jl. Rantai Pasok No 1',NULL,NULL),(2,'S2','PT Jasa Sembako','Jl. Rantai Pasok No 2',NULL,NULL),(3,'K3','CV Indobaru','Jl. Rantai Pasok No 3',NULL,NULL);
/*!40000 ALTER TABLE `m_supplier` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `m_user`
--

DROP TABLE IF EXISTS `m_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `m_user` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `level_id` bigint(20) unsigned NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `m_user_username_unique` (`username`),
  KEY `m_user_level_id_index` (`level_id`),
  CONSTRAINT `m_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `m_level` (`level_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `m_user`
--

LOCK TABLES `m_user` WRITE;
/*!40000 ALTER TABLE `m_user` DISABLE KEYS */;
INSERT INTO `m_user` VALUES (1,1,'admin','Administrator','$2y$12$87nd15X.ZRbZYwINJPFRIOqALr/iDFMAtvCGFNWpxnW0bRNpb.e3O',NULL,NULL),(2,2,'manager','Manager','$2y$12$8McCDv3P4JCFqdN0MpJCFOqVzhQp8D8CGcSil1DPY4VGJotHbWewm',NULL,NULL),(3,3,'staff','Staff/Kasir','$2y$12$cnyWxVjuk.SEHXMKtGCfRuwCtYVn42CLXHzQxC7qgWK2JnkbAq2pW',NULL,NULL);
/*!40000 ALTER TABLE `m_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_09_10_111225_create_m_level_table',2),(6,'2024_09_10_112122_create_m_kategori_table',3),(7,'2024_09_10_112137_create_m_supplier_table',3),(8,'2024_09_10_112539_create_m_user_table',4),(9,'2024_09_10_113133_create_m_barang_table',5),(10,'2024_09_11_002855_create_m_user_table',6),(11,'2024_09_11_002917_create_t_penjualan_table',7),(12,'2024_09_11_003400_create_t_stok_table',8),(13,'2024_09_11_003956_create_t_penjualan_detail_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_penjualan`
--

DROP TABLE IF EXISTS `t_penjualan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_penjualan` (
  `penjualan_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `pembeli` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_kode` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjualan_tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`penjualan_id`),
  KEY `t_penjualan_user_id_index` (`user_id`),
  CONSTRAINT `t_penjualan_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_penjualan`
--

LOCK TABLES `t_penjualan` WRITE;
/*!40000 ALTER TABLE `t_penjualan` DISABLE KEYS */;
INSERT INTO `t_penjualan` VALUES (1,3,'Adi','P1','2024-02-11 00:00:00',NULL,NULL),(2,3,'Bayu','P2','2024-02-11 00:00:00',NULL,NULL),(3,3,'Chandra','P3','2024-02-11 00:00:00',NULL,NULL),(4,3,'Denis','P4','2024-02-11 00:00:00',NULL,NULL),(5,3,'Edo','P5','2024-03-11 00:00:00',NULL,NULL),(6,3,'Farid','P6','2024-03-11 00:00:00',NULL,NULL),(7,3,'Gilang','P7','2024-02-11 00:00:00',NULL,NULL),(8,3,'Heri','P8','2024-03-11 00:00:00',NULL,NULL),(9,3,'Indah','P9','2024-04-11 00:00:00',NULL,NULL),(10,3,'Jimi','P10','2024-05-11 00:00:00',NULL,NULL);
/*!40000 ALTER TABLE `t_penjualan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_penjualan_detail`
--

DROP TABLE IF EXISTS `t_penjualan_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_penjualan_detail` (
  `detail_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `penjualan_id` bigint(20) unsigned NOT NULL,
  `barang_id` bigint(20) unsigned NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `t_penjualan_detail_penjualan_id_index` (`penjualan_id`),
  KEY `t_penjualan_detail_barang_id_index` (`barang_id`),
  CONSTRAINT `t_penjualan_detail_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  CONSTRAINT `t_penjualan_detail_penjualan_id_foreign` FOREIGN KEY (`penjualan_id`) REFERENCES `t_penjualan` (`penjualan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_penjualan_detail`
--

LOCK TABLES `t_penjualan_detail` WRITE;
/*!40000 ALTER TABLE `t_penjualan_detail` DISABLE KEYS */;
INSERT INTO `t_penjualan_detail` VALUES (1,1,1,6500,1,NULL,NULL),(2,1,2,6500,1,NULL,NULL),(3,1,3,5000,1,NULL,NULL),(4,2,4,100000,1,NULL,NULL),(5,2,5,250000,1,NULL,NULL),(6,2,6,25000,1,NULL,NULL),(7,3,7,4500,1,NULL,NULL),(8,3,8,2000,1,NULL,NULL),(9,3,9,1000,1,NULL,NULL),(10,4,10,500,1,NULL,NULL),(11,4,11,500,1,NULL,NULL),(12,4,12,500,1,NULL,NULL),(13,5,13,2000,1,NULL,NULL),(14,5,14,3500,1,NULL,NULL),(15,5,15,5000,1,NULL,NULL),(16,6,1,6500,1,NULL,NULL),(17,6,2,6500,1,NULL,NULL),(18,6,3,5000,1,NULL,NULL),(19,7,4,100000,1,NULL,NULL),(20,7,5,250000,1,NULL,NULL),(21,7,6,25000,1,NULL,NULL),(22,8,7,4500,1,NULL,NULL),(23,8,8,2000,1,NULL,NULL),(24,8,9,1000,1,NULL,NULL),(25,9,10,500,1,NULL,NULL),(26,9,11,500,1,NULL,NULL),(27,9,12,500,1,NULL,NULL),(28,10,13,2000,1,NULL,NULL),(29,10,14,3500,1,NULL,NULL),(30,10,15,5000,1,NULL,NULL);
/*!40000 ALTER TABLE `t_penjualan_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_stok`
--

DROP TABLE IF EXISTS `t_stok`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_stok` (
  `stok_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `barang_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `stok_tanggal` datetime NOT NULL,
  `stok_jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`stok_id`),
  KEY `t_stok_barang_id_index` (`barang_id`),
  KEY `t_stok_user_id_index` (`user_id`),
  CONSTRAINT `t_stok_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `m_barang` (`barang_id`),
  CONSTRAINT `t_stok_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `m_user` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_stok`
--

LOCK TABLES `t_stok` WRITE;
/*!40000 ALTER TABLE `t_stok` DISABLE KEYS */;
INSERT INTO `t_stok` VALUES (1,1,3,'2024-01-11 00:00:00',12,NULL,NULL),(2,2,3,'2024-01-11 00:00:00',8,NULL,NULL),(3,3,3,'2024-01-11 00:00:00',15,NULL,NULL),(4,4,3,'2024-01-11 00:00:00',8,NULL,NULL),(5,5,3,'2024-01-11 00:00:00',3,NULL,NULL),(6,6,3,'2024-01-11 00:00:00',7,NULL,NULL),(7,7,3,'2024-01-11 00:00:00',25,NULL,NULL),(8,8,3,'2024-01-11 00:00:00',40,NULL,NULL),(9,9,3,'2024-01-11 00:00:00',22,NULL,NULL),(10,10,3,'2024-01-11 00:00:00',70,NULL,NULL),(11,11,3,'2024-01-11 00:00:00',60,NULL,NULL),(12,12,3,'2024-01-11 00:00:00',50,NULL,NULL),(13,13,3,'2024-01-11 00:00:00',15,NULL,NULL),(14,14,3,'2024-01-11 00:00:00',12,NULL,NULL),(15,15,3,'2024-01-11 00:00:00',10,NULL,NULL);
/*!40000 ALTER TABLE `t_stok` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2024-09-14 23:25:59
