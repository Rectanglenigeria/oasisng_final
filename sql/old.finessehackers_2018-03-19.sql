# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.2.9-MariaDB)
# Database: finessehackers
# Generation Time: 2018-03-19 01:24:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '1 for superadmin, 2 for author',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;

INSERT INTO `admins` (`id`, `name`, `email`, `role`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Admin 1','admin@finessehackers.com','1','$2y$10$2neX8oDt7IIXcoGL.Ucz.eyPFmX58xOnlk3NXzNOXjoGZ62Yvpg0i','qM0zQWMCDBUbS52C1gIBriUu29AoeV1hC2pcLuSUQPDaL06GcRMMLFPmNOQ9','2018-03-16 11:16:21','2018-03-16 11:16:21'),
	(3,'Aladeusi Olugbenga Olakunle','olakunleolugbenga@gmail.com','1','$2y$10$fPq6BZm8S2EVKfAc4Jthwu3XX4teOjyfs2r8ofDiYJRkd2LcIwKBW','cmWZ7AylHZ9vbwDjxllbkI32sjzz6mCXlOSF8zOa','2018-03-16 12:09:56','2018-03-16 12:09:56');

/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table categories
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;

INSERT INTO `categories` (`id`, `name`, `desc`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(2,'Category 1','Description','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:39:01','2018-03-17 09:39:01'),
	(3,'Category 2','Description','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:39:14','2018-03-17 09:39:14'),
	(4,'Category 3','Description','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:39:24','2018-03-17 09:39:24'),
	(5,'Category 4','Description','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:39:33','2018-03-17 09:39:33');

/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `avatar`, `body`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,2,'kenny','keny@gmail.com','1.png','this is good',NULL,'2018-03-17 09:39:01','2018-03-17 09:39:01'),
	(2,6,'zasd','S@f.c','1','scdsa',NULL,'2018-03-18 11:03:50','2018-03-18 11:03:50'),
	(3,6,'zasd','S@f.c','1','scdsascsaas',NULL,'2018-03-18 11:04:08','2018-03-18 11:04:08'),
	(4,6,'zasd','S@f.c','1','scdsascsaas',NULL,'2018-03-18 11:04:46','2018-03-18 11:04:46'),
	(5,6,'xx','s@f.com','1','xxx',NULL,'2018-03-18 11:36:17','2018-03-18 11:36:17'),
	(6,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:36:43','2018-03-18 11:36:43'),
	(7,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:39:54','2018-03-18 11:39:54'),
	(8,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:39:56','2018-03-18 11:39:56'),
	(9,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:39:57','2018-03-18 11:39:57'),
	(10,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:39:59','2018-03-18 11:39:59'),
	(11,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:40:04','2018-03-18 11:40:04'),
	(12,6,'xx','kmos@gmail.com','1','xxx',NULL,'2018-03-18 11:40:05','2018-03-18 11:40:05'),
	(13,6,'xxcdsfdsf','kmos@gmail.com','1','xxxcvc',NULL,'2018-03-18 11:41:29','2018-03-18 11:41:29'),
	(14,6,'xxcdsfdsf','kmos@gmail.com','1','xxxcvc',NULL,'2018-03-18 11:42:18','2018-03-18 11:42:18'),
	(15,6,'xxcdsfdsf','kmos@gmail.com','1','xxxcvc',NULL,'2018-03-18 11:42:55','2018-03-18 11:42:55');

/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table hires
# ------------------------------------------------------------

DROP TABLE IF EXISTS `hires`;

CREATE TABLE `hires` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed_at` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `victim_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_payment_ready` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `has_viewed` int(11) NOT NULL,
  `has_completed` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `hires` WRITE;
/*!40000 ALTER TABLE `hires` DISABLE KEYS */;

INSERT INTO `hires` (`id`, `service_id`, `firstname`, `lastname`, `email`, `country`, `phone`, `completed_at`, `victim_info`, `price_range`, `payment_method`, `is_payment_ready`, `has_viewed`, `has_completed`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,4,'ad','ff','ol@r.g','nigeria','098','tt','uyu','200','1','1',1,1,NULL,'2018-03-16 11:12:36','2018-03-16 23:15:51'),
	(2,5,'Olugbenga','Aladeusi','olakunleolugbenga@gmail.com','Nigeria','08038770285','2018-03-28','youtube user is olakunleolugbenga@gmail.com, password=Aladeusi1','200','Etherium','yes',0,0,'99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 10:23:53','2018-03-17 10:23:53'),
	(3,5,'Olugbenga','Aladeusi','olakunleolugbenga@gmail.com','Nigeria','08038770285','2018-03-28','youtube user is olakunleolugbenga@gmail.com, password=Aladeusi1','200','Etherium','yes',1,0,'99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 10:24:32','2018-03-17 10:25:08');

/*!40000 ALTER TABLE `hires` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(12,'2014_10_12_000000_create_users_table',1),
	(13,'2014_10_12_100000_create_password_resets_table',1),
	(14,'2018_03_16_100310_create_admins_table',1),
	(15,'2018_03_16_100927_create_posts_table',1),
	(16,'2018_03_16_100935_create_comments_table',1),
	(17,'2018_03_16_100943_create_replies_table',1),
	(18,'2018_03_16_100953_create_categories_table',1),
	(19,'2018_03_16_101000_create_tags_table',1),
	(20,'2018_03_16_101008_create_testimonies_table',1),
	(21,'2018_03_16_101016_create_hires_table',1),
	(22,'2018_03_16_101030_create_services_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `category_id`, `title`, `cover`, `body`, `views`, `tags`, `admin_id`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,3,'rr','18118863_1395564230528290_2243540086117680024_n.jpg','t','1',NULL,1,NULL,'2018-03-16 11:12:36','2018-03-16 11:12:36'),
	(2,5,'WHY UDEMY?','18118863_1395564230528290_2243540086117680024_n.jpg','<p><br></p><p style=\"margin: 0px 0px 6px; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br class=\"Apple-interchange-newline\">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL &amp; more!</p><p><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">With 21,725 5-star reviews and over 162,200 people already enrolled you are going to love this course on Udemy. Plus, you’ll get lifetime access to your content, can learn at your own pace on any device, and you’re protected by a 100% money-back guarantee.</p><p style=\"margin: 0px 0px 6px; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br class=\"Apple-interchange-newline\">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL &amp; more!</p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">With 21,725 5-star reviews and over 162,200 people already enrolled you are going to love this course on Udemy. Plus, you’ll get lifetime access to your content, can learn at your own pace on any device, and you’re protected by a 100% money-back guarantee.</p><p style=\"margin: 0px 0px 6px; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br class=\"Apple-interchange-newline\">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL &amp; more!</p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">With 21,725 5-star reviews and over 162,200 people already enrolled you are going to love this course on Udemy. Plus, you’ll get lifetime access to your content, can learn at your own pace on any device, and you’re protected by a 100% money-back guarantee.</p><p style=\"margin: 0px 0px 6px; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br class=\"Apple-interchange-newline\">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL &amp; more!</p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">With 21,725 5-star reviews and over 162,200 people already enrolled you are going to love this course on Udemy. Plus, you’ll get lifetime access to your content, can learn at your own pace on any device, and you’re protected by a 100% money-back guarantee.</p><p style=\"margin: 0px 0px 6px; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br class=\"Apple-interchange-newline\">Learn Web Development by building 25 websites and mobile apps using HTML, CSS, Javascript, PHP, Python, MySQL &amp; more!</p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">With 21,725 5-star reviews and over 162,200 people already enrolled you are going to love this course on Udemy. Plus, you’ll get lifetime access to your content, can learn at your own pace on any device, and you’re protected by a 100% money-back guarantee.</p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p style=\"margin: 6px 0px 0px; display: inline; font-family: &quot;SF Optimized&quot;, system-ui, -apple-system, system-ui, &quot;.SFNSText-Regular&quot;, sans-serif; color: rgb(29, 33, 41); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: -0.12px; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><br></p><p><br></p>','0',NULL,3,NULL,'2018-03-17 12:26:16','2018-03-17 12:26:16'),
	(3,5,'get itssd','18118863_1395564230528290_2243540086117680024_n.jpg','<p>xcascs<br></p>','0',NULL,1,NULL,'2018-03-17 14:01:00','2018-03-17 14:01:00'),
	(4,3,'go for it','18118863_1395564230528290_2243540086117680024_n.jpg','<p>ascfasdfaF<br></p>','0','boy,gat,com,gs',3,NULL,'2018-03-17 14:02:57','2018-03-17 14:02:57'),
	(5,4,'Hacking Steadily','18118863_1395564230528290_2243540086117680024_n.jpg','<p>SAXASX<br></p>','0',NULL,3,NULL,'2018-03-17 14:05:43','2018-03-17 14:05:43'),
	(6,2,'The Fly Boy','18118863_1395564230528290_2243540086117680024_n.jpg','<p><br></p><p>Suspendisse consequat suscipit justo sed tincidunt. Morbi a sapien \r\nbibendum, aliquam tellus sit amet, pretium quam. Curabitur vulputate eu \r\nmi a sagittis. Vivamus vestibulum rutrum velit, sed euismod quam \r\nimperdiet sit\r\n                                        amet. Fusce at nunc id est \r\ngravida tempor. Pellentesque at nisi vehicula, congue elit a, tempor \r\nleo.<span id=\"more-24\"></span>\r\n                                    </p><p>\r\n                                    <br></p><p><strong>Curabitur fringilla ante ut euismod ultricies.</strong>\r\n                                    </p><p>\r\n                                    <br></p><ul><li>Proin egestas dui ligula, et scelerisque ante hendrerit bibendum.</li><li>Aenean ullamcorper purus eget est pellentesque vulputate.</li><li>Vestibulum dictum nunc vel erat laoreet vestibulum.</li><li>Morbi nec sagittis purus, eget pulvinar turpis.</li></ul><p>\r\n                                    <br></p><p>In interdum ullamcorper tellus, \r\nin condimentum metus pellentesque vitae. Phasellus accumsan, sapien quis\r\n pellentesque scelerisque, risus orci tristique massa, ut rhoncus nibh \r\naugue quis felis.</p><p>\r\n                                    <br></p><p>Nullam orci neque, tempus id iaculis id, pharetra in risus. Duis non aliquet sapien.</p><p><br></p>','0',NULL,3,NULL,'2018-03-18 07:34:50','2018-03-18 07:34:50');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table replies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `replies`;

CREATE TABLE `replies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;

INSERT INTO `services` (`id`, `name`, `desc`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(3,'Facebook Hacking','sjhsjjss','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:37:38','2018-03-17 09:37:38'),
	(4,'Twitter Hacking','jhsdkjsjk','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:38:01','2018-03-17 09:38:01'),
	(5,'Youtube Hacking','zdhjajsd','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:38:15','2018-03-17 09:38:15'),
	(6,'Google plus hacking','ksdkas','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:38:36','2018-03-17 09:38:36');

/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Dump of table testimonies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `testimonies`;

CREATE TABLE `testimonies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `testimonies` WRITE;
/*!40000 ALTER TABLE `testimonies` DISABLE KEYS */;

INSERT INTO `testimonies` (`id`, `name`, `city`, `body`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(3,'Leo','lagos','best site','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:36:17','2018-03-17 09:36:17'),
	(4,'Lolu','Abuja','good','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:36:35','2018-03-17 09:36:35'),
	(5,'Kayode','Ibadan','sdhahsda','99RixrByGRo4YADK7VhCSR9MeBlDho0Jhtuc2fZ4','2018-03-17 09:37:05','2018-03-17 09:37:05');

/*!40000 ALTER TABLE `testimonies` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Aladeusi Olugbenga Olakunle','olakunleolugbenga@gmail.com','$2y$10$oZADU4me.dTgju5w9vHm3OxOq7/Pab0GjVmVg5XKx05iu8SCwGPDe','g7oXpkuhorGTLsCV267nAOoaJw1XXJJUusWKcwdMvnQx6GIwbP8K7KCLLomq','2018-03-16 11:12:36','2018-03-16 11:12:36');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
