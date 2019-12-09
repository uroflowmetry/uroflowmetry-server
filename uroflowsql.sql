/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.4.6-MariaDB : Database - uroflowmetry
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2019_09_12_065009_create_user-group_table',1);

/*Table structure for table `tbl_data` */

DROP TABLE IF EXISTS `tbl_data`;

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checktime` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `measuredvolume` double DEFAULT NULL,
  `measuredduration` int(11) DEFAULT NULL,
  `flowrate` double DEFAULT NULL,
  `timedistance` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_data` */

insert  into `tbl_data`(`id`,`checktime`,`measuredvolume`,`measuredduration`,`flowrate`,`timedistance`,`userid`,`updated_at`,`created_at`) values 
(12,'2019-11-25',404,20,20.2,'0,15,18,21,20,19,22,0,0,12,15,0',30,'2019-12-04 17:28:03','2019-12-04 17:28:03'),
(13,'2019-11-25',404,20,20.2,'0,15,18,12,28,19,22,0,0,12,15,0',30,'2019-12-04 17:28:03','2019-12-04 17:28:03'),
(14,'2019-11-25',404,20,20.2,'0,15,18,21,0,0,22,19,0,12,15,0',31,'2019-12-04 17:28:03','2019-12-04 17:28:03');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `doctoremail` varchar(50) DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `volume` float DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT 'user.png',
  `is_admin` int(11) unsigned DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('0','1') CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`userId`,`email`,`doctoremail`,`fullname`,`password`,`volume`,`avatar`,`is_admin`,`created_at`,`updated_at`,`status`) values 
(30,'rogue','rogue@knight.com','rogue@rogue.com','rogue knight','$2y$10$zxdC9AWbp4brX2o4.yPKoOWezfiYfc.7PLh.eaLRpCqE5ytNuEeZ6',NULL,'user.png',0,'2019-12-02 04:05:11','2019-12-03 17:25:24','0'),
(31,'rogueqwe','rogue@rogue.com','rogue@rogue.com','rogue knight','$2y$10$JA8nnulN.ttWNfbBlMNcE.aI7RfdCF6R3pqvUKWEdO9UBfo1QJJAS',NULL,'user.png',0,'2019-12-02 11:01:09','2019-12-03 15:18:32','0'),
(36,'ben','ben@ben.com',NULL,'ben ben','$2y$10$3ZZF9VWzOIZ1JmLNT2nwRug/pS6CQG.HgmH45jUVUaezL82N6T9su',NULL,'user.png',0,'2019-12-04 11:57:41','2019-12-04 11:57:41',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
