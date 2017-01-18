/*
SQLyog Community v12.2.5 (32 bit)
MySQL - 10.1.13-MariaDB : Database - skul_supply
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`skul_supply` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `skul_supply`;

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `c_name` varchar(30) NOT NULL,
  `date_created` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`id`,`c_name`,`date_created`) values 
(1,'pen',NULL),
(2,'bags',NULL),
(3,'crayon',NULL),
(4,'books',NULL),
(5,'others',NULL);

/*Table structure for table `costumer_cart` */

DROP TABLE IF EXISTS `costumer_cart`;

CREATE TABLE `costumer_cart` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `c_ip_add` varchar(50) DEFAULT NULL,
  `sess_user` varchar(50) DEFAULT NULL,
  `p_id` int(12) DEFAULT NULL,
  `p_image` varchar(300) DEFAULT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_description` varchar(100) DEFAULT NULL,
  `p_qty` int(12) DEFAULT NULL,
  `p_price` decimal(10,2) DEFAULT NULL,
  `p_sub_total` decimal(10,2) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `d_option` varchar(30) DEFAULT NULL,
  `date_created` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `costumer_cart` */

insert  into `costumer_cart`(`id`,`c_ip_add`,`sess_user`,`p_id`,`p_image`,`p_name`,`p_description`,`p_qty`,`p_price`,`p_sub_total`,`status`,`d_option`,`date_created`) values 
(1,'::1','lexa lexa',4,'p4.png','M.U Books','asdasdasda',2,'120.00','240.00','Confirm','Cash On Delivery','12/07/2016');

/*Table structure for table `logs` */

DROP TABLE IF EXISTS `logs`;

CREATE TABLE `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `operation` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `logs` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contact` bigint(15) DEFAULT NULL,
  `reg_ip_add` varchar(50) DEFAULT NULL,
  `sess_ip` varchar(50) DEFAULT NULL,
  `date_created` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `member` */

insert  into `member`(`id`,`fname`,`lname`,`email`,`username`,`password`,`contact`,`reg_ip_add`,`sess_ip`,`date_created`) values 
(1,'lexa','lexa','asd@asd.com','lexa','7155fac63aac93d495d9caf67715b4b5',9363172451,'::1','::1','11/28/2016 13:00');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(12) unsigned NOT NULL AUTO_INCREMENT,
  `p_category_id` int(12) DEFAULT NULL,
  `p_brand` varchar(20) DEFAULT NULL,
  `p_name` varchar(30) DEFAULT NULL,
  `p_description` text,
  `p_qty` int(12) DEFAULT NULL,
  `p_price` decimal(10,2) DEFAULT NULL,
  `p_image` varchar(300) DEFAULT NULL,
  `date_created` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`p_category_id`,`p_brand`,`p_name`,`p_description`,`p_qty`,`p_price`,`p_image`,`date_created`) values 
(2,4,'Baby','Smart baby\'s board','asdasdasd',10,'150.00','p2.png',NULL),
(3,4,'Educational','My First Books','asdasdasd',10,'300.00','p3.png',NULL),
(4,4,'Story','M.U Books','asdasdasda',10,'120.00','p4.png',NULL),
(5,4,'Story','Philip K. Dick Books','asdasdasdasda',10,'100.00','p5.png',NULL),
(6,1,'stabilo','Pen','asdasdasd',10,'200.00','p6.png',NULL),
(7,1,'pilot','Stainless Pen','asdasdasd',10,'220.00','p7.png',NULL),
(8,1,'titus','Brush','asdasdasd',10,'80.00','p8.png',NULL),
(9,1,'titus','Pentel Pen','asdasdasd',10,'50.00','p9.png',NULL),
(10,2,'hawk','Bag','asdasdasd',10,'250.00','p10.png',NULL),
(11,5,'others','Folder','asdasdasd',10,'20.00','p11.png',NULL),
(12,5,'others','Pencil Case','asdasdasd',10,'20.00','p12.png',NULL),
(13,5,'others','Pencil cover',NULL,10,'20.00','p13.png',NULL);

/*Table structure for table `userdata` */

DROP TABLE IF EXISTS `userdata`;

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `date_created` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `userdata` */

insert  into `userdata`(`id`,`fname`,`lname`,`password`,`email`,`contact`,`date_created`) values 
(2,'root','root','dc76e9f0c0006e8f919e0c515c66dbba3982f785','root@gmail.com','12345',NULL),
(4,'admin','admin','d033e22ae348aeb5660fc2140aec35850c4da997','admin@gmail.com','123456',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
