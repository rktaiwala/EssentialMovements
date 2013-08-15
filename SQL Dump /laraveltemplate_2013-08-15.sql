# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.29)
# Database: laraveltemplate
# Generation Time: 2013-08-15 16:03:00 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2013_08_07_233311_create_users_table',1),
	('2013_08_15_010016_create_products_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table products
# ------------------------------------------------------------

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `label` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `option` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  UNIQUE KEY `products_id_unique` (`id`),
  UNIQUE KEY `products_image_unique` (`image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;

INSERT INTO `products` (`id`, `name`, `artist`, `label`, `year`, `image`, `price`, `qty`, `option`, `created_at`, `updated_at`)
VALUES
	('sku_220512','Modern Rapture','Mandrill','Arista','1986','img/covers/220512.jpg',11.99,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_221693','Mystic Brew','Leon Thomas','Flying Dutchman','1976','img/covers/221693.jpg',8.00,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_222190','Rainbow Walker','Radio Head','Compost','2007','img/covers/222190.jpg',5.00,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_222758','Bitches Brew','Miles Davis','Blue Note','2013','img/covers/222758.jpg',6.99,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_223994','Sketches Of Spain','Miles Davis','Columbia','2013','img/covers/223994.jpg',10.00,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_224285','Classic Keys','Jimmy Smith','Blue Note','1963','img/covers/224285.jpg',10.00,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_224399','Fallout','John Roundtree','Tribe Records','2009','img/covers/224399.jpg',10.00,1,'WAV','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_225379','Diamonds','Victor Brown','Columbia','2012','img/covers/225379.jpg',8.99,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_226014','Random Thoughts','Ron Gripes','Truth Recording','2008','img/covers/226014.jpg',5.00,1,'WAV','2013-08-15 15:18:09','2013-08-15 15:18:09'),
	('sku_226447','My Favorite Things','John Belran','River Records','2013','img/covers/226447.jpg',9.99,1,'MP3','2013-08-15 15:18:09','2013-08-15 15:18:09');

/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `created_at`, `updated_at`)
VALUES
	(1,'Ahmed','Davis','admin','$2y$08$3ikh6Ery11MqqFTNi4RIuelu3WWIHi12yscpCOTrQf9AZBAWRthc6','ahmed609@gmail.com','2013-08-07 23:53:10','2013-08-07 23:53:10'),
	(2,'bob','james','bobbyjkay','$2y$08$XfFDsSsb1Ha29LlmULAaBOI/p4Fn90raAfe.Aj93HdPQhye/.F3de','bjames@yo.uk','2013-08-08 04:58:13','2013-08-08 04:58:13'),
	(3,'tina ','turner','tturner','$2y$08$7ZIF6/M74M630K/bF7qZ4OSIBmINlzHp4ZzyMHmvAARKChAjB8KYC','tturner@local.com','2013-08-09 01:44:55','2013-08-09 01:44:55');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
