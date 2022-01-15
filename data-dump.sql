-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: Bora_db
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `UserCartProduct`
--

DROP TABLE IF EXISTS `UserCartProduct`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `UserCartProduct` (
  `product_id` int NOT NULL,
  `userCart_iduserCart` int NOT NULL,
  KEY `fk_UserCartProduct_product1_idx` (`product_id`),
  KEY `fk_UserCartProduct_userCart1_idx` (`userCart_iduserCart`),
  CONSTRAINT `fk_UserCartProduct_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  CONSTRAINT `fk_UserCartProduct_userCart1` FOREIGN KEY (`userCart_iduserCart`) REFERENCES `userCart` (`iduserCart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `UserCartProduct`
--

LOCK TABLES `UserCartProduct` WRITE;
/*!40000 ALTER TABLE `UserCartProduct` DISABLE KEYS */;
/*!40000 ALTER TABLE `UserCartProduct` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `idcategory` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (0,'ноутбук'),(1,'планшет');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `image` (
  `idimage` int NOT NULL AUTO_INCREMENT,
  `image_1` varchar(45) DEFAULT NULL,
  `image_2` varchar(45) DEFAULT NULL,
  `image_3` varchar(45) DEFAULT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`idimage`),
  KEY `fk_image_product1_idx` (`product_id`),
  CONSTRAINT `fk_image_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `image`
--

LOCK TABLES `image` WRITE;
/*!40000 ALTER TABLE `image` DISABLE KEYS */;
INSERT INTO `image` VALUES (1,'/images/101.jpg','/images/201.jpg','/images/301.jpg',1),(2,'/images/201.jpg','/images/202.jpg','/images/203.jpg',2),(3,'/images/301.jpg','/images/302.jpg','/images/303.jpg',3),(4,'/images/401.jpg','/images/402.jpg','/images/403.jpg',4),(5,'/images/501.jpg','/images/502.jpg','/images/503.jpg',5),(6,'/images/601.jpg','/images/602.jpg','/images/603.jpg',6),(7,'/images/701.jpg','/images/702.jpg','/images/703.jpg',7),(8,'/images/801.jpg','/images/802.jpg','/images/803.jpg',8),(9,'/images/901.jpg','/images/902.jpg','/images/903.jpg',9),(10,'/images/1001.jpg','/images/1002.jpg','/images/1003.jpg',10),(11,'/images/1101.jpg','/images/1102.jpg','/images/1103.jpg',11),(12,'/images/1201.jpg','/images/1202.jpg','/images/1203.jpg',12),(13,'/images/1301.jpg','/images/1302.jpg','/images/1303.jpg',13),(14,'/images/1401.jpg','/images/1402.jpg','/images/1403.jpg',14);
/*!40000 ALTER TABLE `image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `phone`
--

DROP TABLE IF EXISTS `phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `phone` (
  `id_phone` int NOT NULL AUTO_INCREMENT,
  `phone` int NOT NULL,
  `users_id` int NOT NULL,
  PRIMARY KEY (`id_phone`),
  UNIQUE KEY `id_phone_UNIQUE` (`id_phone`),
  KEY `fk_phone_users1_idx` (`users_id`),
  CONSTRAINT `fk_phone_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone`
--

LOCK TABLES `phone` WRITE;
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;
INSERT INTO `phone` VALUES (1,504005005,0);
/*!40000 ALTER TABLE `phone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text,
  `price` decimal(10,0) DEFAULT NULL,
  `count` int DEFAULT NULL,
  `category_idcategory` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_product_category1_idx` (`category_idcategory`),
  CONSTRAINT `fk_product_category1` FOREIGN KEY (`category_idcategory`) REFERENCES `category` (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Ноутбук Chuwi LapBook Pro','Экран 11.6\" IPS (1920x1080) Full HD, Multi-touch, глянцевый с антибликовым покрытием / Intel Celeron N4100 (1.1 - 2.4 ГГц) / RAM 4 ГБ / SSD 128 ГБ / Intel UHD Graphics 600 / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Windows 10 Pro / 1.45 кг / темно-серый',16000,10,0),(2,'Ноутбук ASUS Laptop X515EP-BQ317','Экран 14\" (1366x768) WXGA HD, матовый / Intel Core i3-10110U (2.1 - 4.1 ГГц) / RAM 4 ГБ / SSD 256 ГБ / Intel UHD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / без ОС / 1.6 кг / серый',9000,8,0),(3,'Ноутбук Prestigio Ecliptica 116','Экран 16\" IPS (2560x1600) WQXGA 120 Гц, глянцевый с антибликовым покрытием / Intel Core i7-11800H (2.3 - 4.6 ГГц) / RAM 16 ГБ / SSD 1 ТБ / nVidia GeForce RTX 3060, 6 ГБ / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 10 Pro / 2.2 кг / серый',13000,6,0),(4,'Ноутбук Acer Nitro 5 AN515','Экран 15.6” IPS (1920x1080) Full HD 144 Гц, матовый / Intel Core i5-11400H (2.7 - 4.5 ГГц) / RAM 16 ГБ / SSD 512 ГБ / nVidia GeForce RTX 3060, 6 ГБ / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / без ОС / 2.3 кг / черный',11000,4,0),(5,'Ноутбук Dell Vostro 15 350','Экран 15.6\" WVA (1920x1080) Full HD, глянцевый с антибликовым покрытием / Intel Core i3-1115G4 (3.9 - 4.1 ГГц) / RAM 8 ГБ / SSD 256 ГБ / Intel UHD / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Windows 10 Pro 64bit / 1.78 кг / черный',15000,3,0),(6,'Ноутбук Lenovo ThinkBook 15','Экран 15.6\" IPS (1920x1080) Full HD, матовый / Intel Core i5-1135G7 (4.2 ГГц) / RAM 8 ГБ / SSD 512 ГБ / Intel Iris Xe Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / без ОС / 1.7 кг / серый',21000,8,0),(7,'Ноутбук ASUS TUF Gaming','Экран 15.6\" IPS (1920x1080) Full HD 144 Гц, матовый / Intel Core i5-11400H (2.7 - 4.5 ГГц) / RAM 8 ГБ / SSD 512 ГБ / nVidia GeForce RTX 3050, 4 ГБ / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / без ОС / 2.3 кг ',28997,5,0),(8,'Планшет Lenovo Tab M10 FHD Plus','Экран 10.3\" (1920x1200) MultiTouch / MediaTek Helio P22T (2.3 ГГц) / RAM 4 ГБ / 64 ГБ встроенной памяти + microSD / Wi-Fi / Bluetooth 5.0 / основная камера 8 Мп, фронтальная - 5 Мп',5999,14,1),(9,'Планшет Samsung Galaxy Tab A8','Экран 10.5\" (1920x1200) MultiTouch / Unisoc Tiger T618 (2.0 ГГц) / RAM 4 ГБ / 64 ГБ встроенной памяти + microSD / 3G / 4G / Wi-Fi / Bluetooth 5.0 / основная камера: 8 Мп, фронтальная - 5 Мп / GPS',6600,34,1),(10,'Планшет Samsung Galaxy Tab A7','Экран 8.7\" (1340x800) MultiTouch / MediaTek Helio P22T (2.3 ГГц) / RAM 3 ГБ / 32 ГБ встроенной памяти + microSD / 3G / 4G / Wi-Fi / Bluetooth 5.0 / основная камера 8 Мп, фронтальная - 2 Мп / GPS',5690,24,1),(11,'Планшет Apple iPad 10.2\"','Экран 10.2\" IPS (2160x1620) MultiTouch / Apple A13 Bionic (2.65 ГГц) / 256 ГБ встроенной памяти / Wi-Fi / Bluetooth 4.2 / основная камера 8 Мп, фронтальная - 12 Мп / iPadOS 15 / 487 г / серый космос',14999,35,1),(12,'Планшет Lenovo Tab','Экран 8\" (1280х800) IPS, емкостный MultiTouch / MediaTek Helio A22 (2 ГГц) / RAM 2 ГБ / 32 ГБ встроенной памяти + microSD (до 128 ГБ) / Wi-Fi / Bluetooth 5.0 / основная камера 5 Мп + фронтальная 2 Мп',4004,19,1),(13,'Планшет Lenovo Yoga Smart Tab 4/64','Экран 10.1\" (1920x1200) IPS емкостный, MultiTouch / Qualcomm Snapdragon 439 (2 ГГц) / RAM 4 ГБ / 64 ГБ встроенной памяти + microSD (до 256 ГБ) / Wi-Fi / 3G / 4G LTE / Bluetooth 4.2 ',7788,20,1),(14,'Планшет Lenovo Yoga Tab 11','Экран 11\" IPS (2000x1200) MultiTouch / MediaTek Helio G90T (2.05 ГГц + 2.0 ГГц) / RAM 8 ГБ / 256 ГБ встроенной памяти + microSD / 3G / 4G / Wi-Fi / Bluetooth 5.0 / основная камера 8 Мп, фронтальная - 8 Мп / пыле/влагозащищённый / Android 11',11999,19,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userCart`
--

DROP TABLE IF EXISTS `userCart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `userCart` (
  `iduserCart` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `count` int NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `users_id` int NOT NULL,
  PRIMARY KEY (`iduserCart`),
  UNIQUE KEY `iduserCart_UNIQUE` (`iduserCart`),
  KEY `fk_userCart_users1_idx` (`users_id`),
  CONSTRAINT `fk_userCart_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `userCart`
--

LOCK TABLES `userCart` WRITE;
/*!40000 ALTER TABLE `userCart` DISABLE KEYS */;
/*!40000 ALTER TABLE `userCart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `pass` varchar(90) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (15,'admin','Поздняков','$2y$10$sejkdwKXHeKfSHL.AiaZwe2UfoqHn71./35kB1wj92jz3paLKu98q','tttolll12345@gmail.com','/user_images/user_foto.jpg'),(17,'111','ivanov','$2y$10$qD/dHaVholdrjiFzDtdrmO8soTGPueB7U3Dlrcz6N6f21oedJtBMa','tttolll@rambler.ru',NULL),(18,'123','123','$2y$10$nQgXA2DXWDS3kAwWQz5zCOArtIfMBWVMa4hchrk6UESqgo8Rk.Yry','123@0',NULL),(19,'123','123','$2y$10$4NV2pEiodwvh7H3nPZEykO6icLA97REKJ9U1J6GIeh0Gx9JaAaU3e','tttolll12345@gmail.com',NULL);
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

-- Dump completed on 2022-01-20 20:24:31
