-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: web
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `merchant` int NOT NULL,
  `cus_comment` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comments` (`merchant`),
  CONSTRAINT `fk_comments` FOREIGN KEY (`merchant`) REFERENCES `merchant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (13,1,'bad'),(14,1,'سيء'),(15,1,'very bad service'),(16,1,'مره ممتاز');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customer` (
  `username` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `security_q` varchar(50) NOT NULL,
  `security_ans` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('222','22','aw@a.com','22','',''),('ab','22','ab@ab.com','2244','',''),('Khalid','','a@a.com','11','','');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchant`
--

DROP TABLE IF EXISTS `merchant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `merchant` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `rate` double DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `merchant_chk_1` CHECK ((`rate` <= 5))
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchant`
--

LOCK TABLES `merchant` WRITE;
/*!40000 ALTER TABLE `merchant` DISABLE KEYS */;
INSERT INTO `merchant` VALUES (1,'الملحم','123','molh@gmail.com',2.5,'الملحم لقطع الغيار'),(2,'العلوان','123','ema@gmail.com',5,'العلوان للسيارات'),(3,'محل2','1234','aa@gmail.com',2,'محل فخم');
/*!40000 ALTER TABLE `merchant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_item`
--

DROP TABLE IF EXISTS `orders_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders_item` (
  `order_id` int NOT NULL,
  `prod_id` int NOT NULL,
  PRIMARY KEY (`order_id`,`prod_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_item`
--

LOCK TABLES `orders_item` WRITE;
/*!40000 ALTER TABLE `orders_item` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product` (
  `pnum` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `quantity` int NOT NULL,
  `img` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(15) NOT NULL,
  `merchant_id` int DEFAULT NULL,
  `availability` varchar(20) NOT NULL DEFAULT 'Available',
  PRIMARY KEY (`pnum`),
  KEY `mp_fk` (`merchant_id`),
  CONSTRAINT `mp_fk` FOREIGN KEY (`merchant_id`) REFERENCES `merchant` (`id`),
  CONSTRAINT `product_chk_1` CHECK ((`quantity` >= 0))
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'صدام امامي',150,2,'https://i.ibb.co/qr4GQ8z/front-Bumper.png','صدام امامي لسيارة كامري','body',1,'Available'),(2,'ذراع دركسون داخلي ',63,4,'https://i.ibb.co/zhLmCzV/image-30.png','ذراع دركسون داخلي لفورد برانكو','mechanical ',1,'Available'),(3,'صدام خلفي',80,3,'https://i.ibb.co/qr4GQ8z/front-XX','صدام خلفي لسيارة صني','body',1,'Unavailable'),(4,'كرسي مكينه',600,22,'data:image/jpeg;base64,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','كرسي مكينه كامري 2018 - 2022','consume',2,'Available'),(5,'كرسي مكينه',2400,22,'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAJ4AqAMBIgACEQEDEQH/xAAbAAACAgMBAAAAAAAAAAAAAAAEBQYHAAIDAf/EAD0QAAIBAwIEBAQDBwIFBQAAAAECAwAEEQUSITFBUQYTImEycYGRFEKhI1JiscHR4TNDBxUkU3JEgpLw8f/EABkBAAMBAQEAAAAAAAAAAAAAAAECAwAEBf/EAB8RAQEBAQADAQADAQAAAAAAAAABAhEDITESE0FRIv/aAAwDAQACEQMRAD8AnksqxRNKx9KDJqu9Tu2urmR3znJJqWeJrsWunMNwzJwAqvLy4It3AJ3OOGOhNcUz+rI67eTp1pdgssI1K6UtuJFpG3IKCQ0hHXJHAexPGut4qk8Tlj1pjcZhtbWNlX0xpGoQ4wqqP7VGfF941pYbIvTLK2FPYYzXqZzMZcer+qA1DXrezPlktLIOBWMcPuf80PB4nt9w82GeJD+cAOB/Kpb4f03SNB8M2eoXlqGup081pNgZzu9QAJ5cCOVGTRabr+mi9toY2jdghkbCtGw5ZxzpP1R4juYZofPhkDRuMhkPP/PtS+dJbadLyxJSYcwOTDsRRNpaQwT+ZYu34e4O2WLHpDclYE8sHH0r3G4up5Gj63A+PbzW1v7ZVX9kvNtx60vaZf8Aur96W3CpaXLo/CNjwJ79qx48ZBwT0xXDvHK6JrsO7fV5bc5juPu2ab2njCKM+XdNk9wMioRt4FvhUfET0riHDgspO3pQ/P8AY/pcOl+I7OZhiVSD1HGnbXdhdrvSYxMORRuI+tUKjyIwaNihH7pxTKz8R31sQGfzMciTih+R6uQaitlD5szcW4jc3HHSgoPEj3U5XCrFyBzxzVZT+LJLycLd7nZuQU5ru+rysqRw+gcOOMmtMarXUW3FcmMqsrNhuRajo5ozx3An241SsL3146xLPMc8l3k/TFayQ3FjP+0aVXyRkEj+VV/hT/ki8PMBPA8+QxXN39WRywBVS6d4r1O0YIbk3Cnkk/qB+Tc6nOk+JLTULNnZ0hmQZaOQ8fp3qevHcnzqaPL7UILSHfM2PbvWVAtb1M3E67JCxbkX6VlR7VOQB4u1Hz74QI2VTicd+1I4SjXNt5xAj/EJvPtkA/1rUo0jFmYlicknvQ9+UEDRBg0rYIAHTPOr+P1qJ7+LO1iBEv7mCRA3lM4TK8xwx+hqvP8AiBvBsxu5o7A+4A/vU2GrPrFjaauy5YoI5iDkmRRhhj5YNJPFemf8zsV8oDzIzvj65HVT869G+8uSeqP1GCLxBotvFpE6odqmPeCQRtA2kcwQBz9u3GuOkWsnhXw3q3nXEclyY2YBc4RtpA+uT2qBNeX+n7XsZ5oZEQLIoOAccsjkeVA32r6lfuDe3U06htwVmwM98cqjadIbGdplWKNyNxG4A9RTDOCT3pL4cjl8w3DDEfwg9zTaTKDJ5U+ZyFt6T615RmhSXiGID+4oe3cwnZP/AKYOBKwx96G1abzLsAHPHJ9hQsTkkW3mO24kks2cfIVHc7T5vDBXfUJnjgT/AKdM5Y9z1/xW/wCF8tQqg4FOvDzWstmbaMASofWB+b3o6XT8flqOv8UiKMhHIUsvJzE+AMk8BwqXT2W1c4pDeWTJMrsowHyM0c/W18Zp1sYU3MP2r8z2p3BFuXzX+EDIHU0Bjagx2z8zRl5JtXOcFTtXHI9qvPSRvqCw6PdWayXB82aBZ96jARiTw+2KIiez1SNbee6CszFhN7gcOeM8/rUf8X2FzFeRzoHkRlA3YORj5Vw8O+f+IkYACOOB2OflxJ7duPKszcet13cqMVmthHID8Qw3CgN4WUrvX0uV9uBxW7XMrgBmGBWsHppeXsMoCOWEnMHFZSpyZDDxJYIAx+VZXJfH7XmvR/NFHJdfh7ZdzHoBk1ms6PBapb3Ec/magnqlhUcEwC2M454xwzTttX0zSikGnxfEwEkpwTioZ4oGoQXV1E7kK0hO7HE8e/Wn8U5ek8lOBOvhTXZoJVa40i72vxPFSRncMdRkj3FSO5jmWGK5UrJazANDLCAVIAxjI7dRzFRKxuRqnhuGWdDM9ivkXaHmYuOyQe6nPzy3cUNp2pat4f3HRblJ7SU7ntpxvjkH/ieYPcYNdn74hw61DSYr4eYcKSOLbchh/elZ0Cwgbd5bSt+8zcPtyo+LxtoE8THU9KvdOuAf/RSB0Y/+L8R96AuvFGh7WNub5/3UaKNB9w5o9y3sU4jjVVRdm1aC1147Cw33ZZJ5BmG3HxY/fbsOw5mlFx4rnQEadbRwvnIkf9pIPlnhn3xmkNxcSTzvNdSNLI5yzOclj7nrS3X+NI2lfcAxPrb1H2HatYgzSALwBrngu+7vyFHRxcscMVLVPEq8H2DRzb0GFAw3vUpniAHHO6kXhecJalM8VbB9xT+5k3RZOMnlUTk80ZncRp34/KkviMCCSKFehyxP6fyNS6xtsh345xiop4yUrcTgfEojI98Z/vTeP6GgHB4/Tz2kfat7r9rAFZtpG0gjuORoKyuBuXPAMeBPQ9aIEgU/DwFXI8t/EWoWMItJFguIlOYxPGWCfJgQce2a8l1e/v4fJjWKGM43CCPYp+fU/U166qeQraImIkx8Ca3GdIbSOVGjlyUx/wDTXObS5IkVxdPhjwBY5xW6OFJUkgH9PnXtxOZ3CoeGMA/1pazazjJvGTIIOQKyu3huP8RqgRRuC54/TGfuRXtS1PamZ6WJp3hWygLs7ebLjK7+AqK+IrDXIbfdqa2jI3AtExJzj3qyZ1IkyvDhilWtQpe2IjlTOH6cKnm8PZ1UmkXFxpmoCe0wOBVlfiHU8wR2ppe2nmQPc6Cpkt1O6bT2P7a2bqUHVT7Z/nhpP4bVeKAk+1L73TJVUSesSIPS6Eq6+2RVs+RO5RqfUFlyJUOeqkcvvQd29q6t5IGR/Bimtz+IeYvIsVw370ihWPzpdNHKpLGyTj/CKJC0sxOApP1zWqr6cyZHzrvIzs+fL2HsigVoR6tz8fbpTM72ynOWxtzimkMe4+1KN5U7QeGc040/JgVjzPGp6NDfRWMc+0cjUodt6xIOoyKi1gMXI96mFiqtNx/KMCpmH26+VbjI+LOSfaq71jU4dX1i8ji/7YWPHXBP9DmnX/EDxItlbR6VZEm5fJmdfyoenzP8vnVewObd1dP9VG3E+9VxnhdV1S58s+XIBwOCPbtRsczj4MSKOSk4Iry9sxeQG/sR5nHMsQ+JPf5UuiuXiGOJHv0qhThJHZsArEOnmDOftXpnK8NnmHurYU/U0sTUX2424HtXRb3P5QvfPGt1h6LJOMuQAeSL8P1NZc3CIvlQ8W7il5uHk9EZJbsP70XY2jSzKGODzZhyA/vS9/0ZOpZ4LsjFbyXmduV2j3GRnH1A+1ZRukSiNUSFCIYOJHcVlc9vVosgjjk1wljQn1j6jlRhjMnLhWhGPiAA7GgJLcWuw7lFLr5I5ICirtkwR86kVzFvjYK3xcPkaTeWqxtBMDuVt3uPej0Kh+qaWdgKAB+mRUWv4ZI/2brj5CrSayaYiWVNqqmF3dfc9qQatpSyElRxFNKVWUyr5m7a2AcHjWqITxCnHc0fdwmO9uoeqPjH0r2C1llIC4HcDiKsmW+SxlA70/sI9tvCDzCYrR7NUbJ3ZUE8udG6OnmlFbhgY41PXxpRdjGfxUeAcGmuqazHolnLcMN0zHbEh6tjr7Uv1TVrHTCGDCWRfyKcY+ZqG6zd3upXJuL0MqlT5a4xhfYf1rZzaN0EmuJrq4e4uHMkrsWZm6k11t0YygHjnnmuES7mwAaZWVsoIZ0Mh6EnhVeyF517K81lc7rIsJM5ZV4jHyFeSXdleHNzAYZupUc/pTaMzSQMrylQBgRxelR9uNLru3RcIUVm6nGcUv64PAn4O1cZS7XHvWG2gX/dDfWtZbOQHMYJT2rFgI/28/PjW/UbguB0zst1z3PQfWpDZWwjjGASx5+9KtOt1xu4N7VLdEszNbgniQ2OHapb11TM4ceHLQPab3OCxOeHOvKYaMjQW7pJuKJxU8iayp9Okn4rPwED51p+Jk5FVkI6EYNc0tJAfWnCunlkcxgjkeope03GwnjcbShU9qHu7XftZeMi9fbtW3F5THPwJ+F161zkea2GGwV6N3owtcxLvthv9SAYJ/oaBvo1dS8agqe3SjGxHL5q/C/Bx+6e9azQ/nhznmU708pLFX3lqg8VzwuF9YV8Z5nYOFd47MO0jhiuOgOMUq8U3Md/4rxZnZsITzFPMrzP8x9KK2S7vL82bivBw/M+9X/pJ3/DZt5s8cna5z/Ko+ZLma4MML7EdsFl4tj3pxpFnPfedEl1KJoydsKjAJ+dELpDaZL+2AAlGA3QN2z9f0o5st5WvqA9N0u0t5UeRGkmI9LyjOfYdKVa8Teai45lfTkU81SSKK2ChgspYFQCM8CCTw6f4pZptlLe3PoGS5zmqeTUzOQuZb9DWljhhkbmPapLZaQ3kKZVI3n0g8sU503w9tKqw4jmcV54j1NbOZLHT4xJKgAJI4D5d65beq8R/W7y30qEocG4bG1R79T7VFlvJt5doyQeeV/zXeTfdXkxm9bByZHPMmpLfeG4rfRhdl28zCkjHp49OVVznkLaA0iSK8UhdoIGSvaiYtKEqhoxw60js2/BXBlywib0lwfgz1+XQ1OtFaB1JzgE4K9jSazw2aRixMMnoGOGcVK9LilhtY/JC5ZcnjXC6t0/GBQvArTfRy3lQj05VgjAjlUao2W0laMyPdy+Z2xwFZTecxQQtK44AekdzWUBOfMbd5e8Fu1eHa3x+j3I4Uuebe2G5V1WWaMblbKdm40oiJIA6AFxgcjyIrnY7bmGWJiCyOVPUGubXUdwux4yh+de28YgX/pWUpnJA60ZWcru0Nu26FuGOAPI+1RTxj4i/wCVaXIkQK3kmUiBHFO5+2Me5FTGe4iaNlm9BAzk1RvjnX31vVnZDmGECOL+JeJ3fXOftVcZ7U90lglZJg75DK2QT3p7FrEuwKtvvY8iXyo9+/6UBCkVxZqCMuOdcTaPDIixn0yHAHtwrp5xFNPAN7JG12fLSTzDlJ8HO7r9KeXVnJfRtHMFdG5q9a+HtJOnQwrLt3spbA6HqKkCRL+7mua3/rqvyK0n8MTxXTJjepbcuOQHv3qWeHNF/AQ7pIw0rdO1SSOBANzx9McRXG+uorCInOZW5AdKN1Q5wLf3osYvLjO+4fgq+9RlYN1/O8zKXiHEngAxyx+XOnlnal919enMm0kA9KrnxLcXNxKxMjCORy5QcMgnr9K2Z2tQdo8ZvLog7g7lxgdDTe+8SXVxpqafNLCqqMFh8TAcs1GLKby5OZBwRWjgyepxnjjlXSmZsyMCOBBGCM9KM0HUhp1wkE29kZ1RSOWP/wBIqOhdvLNEQTOrRtzwwYZ7ihqdFcEcYuI1YD14xiuMCyW+pIGJ2yMNwH73KirVvNhhZMKrkYH0z/UUVEqyX8PpB45OfauSxaO9+34iZxjEUPpX3PevK66whRv2QGyQ5PvXtKcfHayO2dhxRLRqibeJol5lxhWFL9e1m00LTnvbn1N8McPWRzyA/r2FGT+gt446pJY2Fmbm+uI4IxzZzzPYDqfbnUGvfHY8xl0u1ZkH+5NwB/8AaP6kVGtW1O71q8N7qUm5vyRjgsY7KOg/nS9nbiM+n93oKvnwyfUr5Kfaj4s1TULSW1uJYo4pRhhEmOHbJzUUk0pGUtHK240VkdhWyyFeRqkzJ8Jb0vXzLWUcOA/WpP4Tsl1vWVkZdkcQDlfYcv140llAm+IfapD4AuI7S5ubYZWeZV8snqoz+vGhvV42fqyDFHMRHEFCx8j/ABUuh1K7EjJLbQgjhwY8aPjkSNEjGO/zoa6tVkZyuAS2VxzX51zK+mkuqTFWB4EVz03TpLp/xFxk/Ot7GxErg3GPTzHemU06QQt6giLxPyrSN6LfEEqxWyWcCqZbk+WD1VfzNVX+KFEWq3Ea5KxMijA4YAFWPpsb3d5PqE/XhGp/KtVt4hui+q6iyEFZJmBHsD/ir+NPRFNDsvEQfE1Mbe2MtsWwMBsfWl0Mnm3yMeY/z/ej45/KjCk/EzNj34D+lUhXpsj2rIrPDqCOA50ZEDLCJNw6kjPStDOBvHWiyeeDNQ/5hpVtuUboA8Tfpg/an6KFvUIzxBIqKeBIUj0Zp7KTMjuDIjkYPoUn6Z4VK1wdQgQc9tc+88WzTe5jWS0O/kozkVlezOssIgRgCWBOeuOlZUTttjj8hqrfGmpvqmvPC7FoLQmJQe4+I/fhVtXDGGJ3MoyqFsdaoMSu4eV2LO5BYnqTxP61XwT3aTyNpHy27rXBmzuIHAcfesc0x0BYZbtnmwUgjLru5Fsgce/OumotbXRNRuk3pDtH8fD64rhfadd2DhbmMDIyCpBzUimvLqJHVHVPLUF5C3U+/XpwpZcX897IxSfaXTa4CHDgZwPbr7UBJleu8DSRyRzwNtkjYMp7GgmOy4mi6IxArvFIcYrX2CytM1IXEUVwFyrAHGeXf7U+hdT0FVz4TugsGw8V3MuD2zmpfZTk9a5r9UO7oBoy8Qw49udL7iVLq2JxkdQaN/EkqBu4nt0pVdq1vcekfs5OnagIqwYGBxgenJPyzVMalIXd3IyXJJ496t2ecWttesOS2zkfRarS38M3upWj3VpHviTOfVzx271XF5C36jCMy3AZMZFENISQe1etbmCVvM4MvPrXJgeYII9qoUfHdMIDEHG044VqWHlOwfLdABxoAHackU68N25nufMcZTKjJod40nUl8KwSWsEAzIGKbyoYjnxx79OdTm2/11mb8gx+lLNEtla4vCqEshGB7U18uX/cTy0HPjXNrS8yx99y6SMzLtOY/nWURCnmceg5VlKYqKaxqysGk/DwuMbE5t8zVYqGWMptIZThgT96veBPQuMAYzwqoPGlgumeJbmNcGOUeaoHTdkkfcH9Kr4eS8T8k9EjcaY+HBE93JDJ6RJCygHkTkHhS5jjgOdaBmRgysQwOQexrpRSG/hLI4iO2IkPjHMgc/t86WiLywykZbmcj4fvW66/cogWSGGYgY3HKkj3xS7UNSudRIik2JD+4g5/egISSUS3c0q8mfNEwqcZPKhQozkV1ZysPGgx5oEqxxqD8TMxFSmC7YgbUIY1V0N1NC+5H5HIBqW6Frhu49jIyyL1HI1HebPcPKn2mSl4xu4460fdQLJbrnOSM0u0tAIA5J401VwyDpgYqfTIlr9w1tpd0rfEU2cezcKE8PeJbDTPDrW0zsJ13+jYfXnl0x+tOPFdgL/T5VR/LeP1g4yD1warSNWkUsu3gMnPWrY5YSuMi724depoTy/LkC4GD2/tXaS4YlECgbqK1HS5LCKymkkD/iCwwOmMf3qnovAYgHmqzKcKD8iaYxalfRHarKFxnCxihLeFpXHmPkFjwI4VsrM4JGFYcOB4UOdbqy/AerJfXMquNtzt9ad8cMipHLmYTDlw4Y71WHgeZ4/Elpgn1hgf/gas9uuOGTmufyTlXzexomUgj9WD1rK2kUE7ccKypmf/2Q==','كرسي مكينه كامري 2018 - 2022','consume',3,'Unavailable');
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sales` (
  `sale_id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `merchant_id` int DEFAULT NULL,
  `sale_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales`
--

LOCK TABLES `sales` WRITE;
/*!40000 ALTER TABLE `sales` DISABLE KEYS */;
INSERT INTO `sales` VALUES (1,4,2,'2023-12-09 05:04:18'),(2,4,2,'2023-12-09 05:04:20'),(3,4,2,'2023-12-09 05:04:22'),(4,4,2,'2023-12-09 05:04:25'),(5,4,2,'2023-12-09 05:04:32');
/*!40000 ALTER TABLE `sales` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-12-09  7:17:19
