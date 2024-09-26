/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - newsweb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`newsweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `newsweb`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL AUTO_INCREMENT,
  `visi` varchar(255) DEFAULT NULL,
  `misi` varchar(255) DEFAULT NULL,
  `gambar_about` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `about` */

insert  into `about`(`id_about`,`visi`,`misi`,`gambar_about`) values 
(1,'Menjadi Salah Satu Stasiun Terdepan','Memberikan Informasi Terbaik & Tajam','geografis.jpg');

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `berita` */

insert  into `berita`(`id_berita`,`id_kategori`,`judul_berita`,`tgl_berita`,`isi_berita`,`gambar_berita`) values 
(16,58,'Orang Terkaya','2024-08-29','Seorang Youtuber Yg Kaya ','449-20211116_112326.jpg'),
(17,57,'Wisata Padang','2024-08-29','Destinasy wisata  Padang adalah tempat Terbaik dan menyimpan beraragam wisata terindah','3-20211118_122331.jpg'),
(18,58,'Dubbing Terbaik ','2024-08-29','Seorang Dubber yang meraih penghargaan terbaik','571-20211119_191710.jpg'),
(19,57,'Festival Karnaval Sumbar','2024-08-29','Festival budaya memiliki berbagai banyak varian','191-20211118_122531.jpg');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`) values 
(55,'Kriminal'),
(56,'Politik'),
(57,'Budaya'),
(58,'Selebrity');

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(50) DEFAULT NULL,
  `instagram` varchar(50) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `kontak` */

insert  into `kontak`(`id_kontak`,`facebook`,`instagram`,`no_telp`,`alamat`) values 
(1,'https://www.facebook.com/profile.php?id=1000077185','https://www.instagram.com/dio_al_parino_77?igsh=MW','082384610724','Jalan Marapalam Indah A3.No.24 Kebon Jerok');

/*Table structure for table `tim` */

DROP TABLE IF EXISTS `tim`;

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tim` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_tim`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tim` */

insert  into `tim`(`id_tim`,`nama_tim`,`jabatan`,`foto`) values 
(1,'HACKTIV87','Admin','IMG_20220128_204138_658.webp'),
(3,'SPLITER','Keuangan','805-images.jpg'),
(4,'MASHLE','IT Controller','200-avatars-5yIJHT8LmsSwMklH-2QfC3g-t500x500.jpg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama_lengkap`,`foto`) values 
(5,'markus','12345','Mas Tukang  Perkakas','ai2.jpg'),
(6,'hartono','12345','Pak Hartono','905-ai1.jpg'),
(12,'ryanfeb','12345','Ryan Feb','783-bandung-badge.png'),
(13,'asaltauaja','12345','Shanks','998-history.jpg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
