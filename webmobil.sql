/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : webmobil

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-10-26 21:55:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for m_about
-- ----------------------------
DROP TABLE IF EXISTS `m_about`;
CREATE TABLE `m_about` (
  `m_about_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_about_desc` mediumtext,
  `m_about_active` enum('T','Y') DEFAULT 'Y',
  `m_about_created_date` timestamp NULL DEFAULT NULL,
  `m_about_created_by` int(11) DEFAULT NULL,
  `m_about_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_about_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_about_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_about
-- ----------------------------
INSERT INTO `m_about` VALUES ('1', '<p>sani honda adalah sales terbaik tahun ini</p>\n', 'Y', null, null, '2015-10-26 21:40:05', '1');

-- ----------------------------
-- Table structure for m_article
-- ----------------------------
DROP TABLE IF EXISTS `m_article`;
CREATE TABLE `m_article` (
  `m_article_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_article_title` varchar(255) DEFAULT NULL,
  `m_article_desc` mediumtext,
  `m_article_created_date` timestamp NULL DEFAULT NULL,
  `m_article_created_by` int(11) DEFAULT NULL,
  `m_article_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_article_updated_by` int(11) DEFAULT NULL,
  `m_article_active` enum('T','Y') DEFAULT 'Y',
  PRIMARY KEY (`m_article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_article
-- ----------------------------
INSERT INTO `m_article` VALUES ('4', 'Honda Bikin Mobil HR-V Edisi Spesial bagi Penggila Audio', '<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; width: 641.891px; text-align: center;\"><img alt=\"\" src=\"/sanihonda/Pictures/artikel/honda_bikin_mobil_hr_v_edisi_spe.jpg\" style=\"height:249px; width:400px\" /></div>\n\n<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify; width: 641.891px;\"><span style=\"font-family:inherit; font-size:inherit\">&quot;Pada ajang Gaikindo Indonesia Internasional Auto Show (GIIAS 2015), PT Honda Prospect Motor (HPM) menawarkan Honda HR-V 1.8L E CVT Special Edition JBL Audio.&nbsp;</span></div>\n\n<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify; width: 641.891px;\"><span style=\"font-family:inherit; font-size:inherit\">Sesuai namanya, mobil ini dlengkapi dengan sistem audio dengan tuning khusus dan speaker baru dari JBL sehingga menghasilkan suara lebih berkarakter khas anak muda.</span></div>\n\n<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify; width: 641.891px;\"><span style=\"font-family:inherit; font-size:inherit\">Sistem audio JBL dirancang untuk menciptakan sensasi musik dengan kualitas yang merata baik di bangku baris depan maupun belakang. Sistem ini juga didukung sebuah amplifier dan ada menu equalizer.</span></div>\n\n<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify; width: 641.891px;\"><span style=\"font-family:inherit; font-size:inherit\">Jonfis Fandy,&nbsp;<em>marketing and aftersales service director&nbsp;</em>PT HPM mengatakan, &ldquo;Edisi spesial dari Honda HR-V akan memberikan nilai lebih bagi konsumen. Berbagai fitur canggih yang telah ada sebelumnya, sekarang dilengkapi dengan perangkat entertainment yang bisa membuat perjalanan bersama Honda HR-V semakin menyenangkan.&quot;</span></div>\n\n<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify; width: 641.891px;\"><span style=\"font-family:inherit; font-size:inherit\">Hanya sistem audio yang diperbaharui. Sisanya Honda HR-V 1.8L E CVT Special Edition JBL Audio tetap mempertahankan fitur standar.</span></div>\n\n<div style=\"margin: 15px 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify; width: 641.891px;\"><span style=\"font-family:inherit; font-size:inherit\">Mobil small SUV edisi spesial ini dipasarkan dengan harga Rp348 juta on the road Jabodetabek.</span></div>\n', '2015-10-26 20:05:57', '1', '2015-10-26 20:05:57', '1', 'Y');
INSERT INTO `m_article` VALUES ('5', 'Honda Siapkan \"Kakak\" Freed, Bermesin Turbo', '<p style=\"text-align: center;\"><img alt=\"\" src=\"/sanihonda/Pictures/artikel/artikelhonda1.jpg\" style=\"height:390px; width:780px\" /></p>\n\n<p><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Honda Motor Company meluncurkan mobil keluarga baru, Step WGN di Jepang, akhir pekan lalu (24/4/2015). Sesuai namanya, wagon berbodi &quot;</span><em>boxy</em><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">&quot; ini menawarkan ruang yang lapang tetapi tetap menyenangkan untuk dikemudikan.</span><br />\n<br />\n<span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Honda membekali dengan mesin hasil pengembangan baru, 1.5 liter, injeksi langsung, VTEC turbo dipadu transmisi CVT. Step WGN ini merupakan generasi kelima sejak pertama kali diluncurkan khusus untuk pasar Jepang, mengusung tema &quot;Waku Waku Gate&quot; yang secara harafiah artinya menyenangkan.</span><br />\n<br />\n<span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Mobil ini menjadi yang pertama dibekali mesin 1.5 liter turbo yang diklaim setara kemampuannya dengan jantung pacu berkapasitas 2.4 liter, tapi tetap hemat bahan bakar. Honda mengklaim rata-rata konsumsi bahan bakar 17 kpl dengan metode penghitungan JC08.</span><br />\n<span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Kendaraan multi guna ini punya kapasitas 7 penumpang, dengan kamampuan jok melipat dengan komposisi 60-40.&nbsp;</span></p>\n\n<p style=\"text-align: center;\"><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\"><img alt=\"\" src=\"/sanihonda/Pictures/artikel/artikelhonda2.jpg\" style=\"height:390px; width:780px\" /></span></p>\n', '2015-10-26 20:12:16', '1', '2015-10-26 20:12:16', '1', 'Y');
INSERT INTO `m_article` VALUES ('6', 'Beli Mobil Honda Cukup Modal Rp 19 Juta', '<p style=\"text-align: center;\"><img alt=\"\" src=\"/sanihonda/Pictures/artikel/artikelhonda3.jpg\" style=\"height:390px; width:780px\" /></p>\n\n<p><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Jelang Ramadhan dan musim mudik lebaran periode Juni-Agustus 2015, biasanya dimanfaatkan orang untuk berburu mobil baru. Pameran menjadi salah satu tujuan, karena dipastikan banyak program menarik termasuk promosi khusus.</span></p>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\"><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Salah satu yang bisa dimanfaatkan adalah pameran mobil-mobil Honda dari Honda Jakarta Center (HJC). Diler utama mobil Honda di Jabodetabek itu mengadakan kampanye &rdquo;Honda Mudik Hebat&rdquo; melalui pameran di The Forum, Summarecon Mall Serpong, 8-14 Juni 2015.</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\"><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Berbagai program promosi disiapkan di sini, mulai besaran uang muka yang sangat terjangkau ( Rp 19 juta), atau angsuran ringan mulai Rp 1 juta. Tak hanya itu, pengunjung juga siap digelontor dengan hadiah berubah gratis angsuran sampai dengan lima kali, gratis biaya asuransi 1 tahun, serta hemat biaya perawatan hingga enam tahun.</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\"><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Bonus khusus diberikan untuk setiap pemesanan&nbsp; Honda Mobilio, Jazz, dan Brio di pameran, berupa kaca film gratis. Sebagai tambahan, disiapkan pula voucher bahan bakar dan&nbsp;<em>cashback</em>&nbsp;dengan total ratusan juta rupiah.</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; text-align: justify;\"><span style=\"font-family:opensans,arial,helvetica,sans-serif; font-size:16px\">Pameran ini juga dimanfaatkan untuk memajang&nbsp;<em>line up</em>&nbsp;baru New Honda Accord VTi-L ES yang sudah menerima penambahan fitur keselamatan canggih, misalnya Collision Mitigation Braking System (CMBS), Adaptive Cruise Control (ACC), dan Lane Keeping Assist System (LKAS).</span></div>\n', '2015-10-26 20:14:56', '1', '2015-10-26 20:14:56', '1', 'Y');
INSERT INTO `m_article` VALUES ('7', 'Mobil Honda CR-Z Bertenaga Listrik Akan Ikut Balap', '<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; line-height: 20.8px; font-family: Arial, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\"><span style=\"font-family:latolight,sans-serif; font-size:17px\">Honda akan mengikutsertakan mobil CR-Z dalam ajang balap Pikes Peak International Hill Climb di Colorado, Amerika Serikat. Namun, mobil CR-Z yang diikutkan di lomba itu tidak biasa, karena sepenuhnya menggunakan tenaga listrik.</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\"><span style=\"font-family:inherit; font-size:inherit\">Kompetisi balap dengan trek menanjak tersebut sekaligus menjadi ajang uji coba mesin listrik yang digunakan CR-Z.</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\"><span style=\"font-family:inherit; font-size:inherit\">Honda sebenarnya belum mengumumkan spesifikasi CR-Z yang akan digunakan di balap tersebut, namun seorang sumber Honda membeberkan beberapa informasi</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: center;\"><img alt=\"\" src=\"/sanihonda/Pictures/artikel/artikelhonda4.jpg\" style=\"height:450px; width:800px\" /></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\"><span style=\"font-family:inherit; font-size:inherit\">Menurut sang sumber, Honda akan mengabaikan sementara mesin bensin 1,5 liter yang digunakan pada model standarnya. Selain itu, beredar rumor bahwa motor listrik CR-Z akan digunakan pada mobil&nbsp;<em>hybrid</em>&nbsp;<em>new&nbsp;</em>NSX.</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\"><span style=\"font-family:inherit; font-size:inherit\">Motor listrik pada CR-Z akan menggerakkan seluruh roda dengan sistem&nbsp;<em>super-handling all wheel drive&nbsp;</em>(SH-AWD) dan&nbsp;<em>precision all wheel steer&nbsp;</em>(P-AWS).</span></div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\">&nbsp;</div>\n\n<div style=\"margin: 0px; padding: 0px; border: 0px; font-stretch: inherit; font-size: 17px; line-height: 24.2857px; font-family: latolight, sans-serif; vertical-align: baseline; box-sizing: border-box; text-align: justify;\"><span style=\"font-family:inherit; font-size:inherit\">Mobil ini akan dilengkapi perangkat aerodinamis yang juga menjadikan tampang mobil<em>coupe&nbsp;</em>itu semakin agresif. Bodi CR-Z yang satu ini akan menggunakan bahan serat karbon.</span></div>\n', '2015-10-26 20:42:48', '1', '2015-10-26 20:42:48', '1', 'Y');

-- ----------------------------
-- Table structure for m_categories
-- ----------------------------
DROP TABLE IF EXISTS `m_categories`;
CREATE TABLE `m_categories` (
  `m_categories_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_categories_nama` varchar(255) DEFAULT NULL,
  `m_categories_active` enum('T','Y') DEFAULT 'Y',
  `m_categories_created_date` timestamp NULL DEFAULT NULL,
  `m_categories_created_by` int(11) DEFAULT NULL,
  `m_categories_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_categories_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_categories_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_categories
-- ----------------------------

-- ----------------------------
-- Table structure for m_perusahaan
-- ----------------------------
DROP TABLE IF EXISTS `m_perusahaan`;
CREATE TABLE `m_perusahaan` (
  `m_perusahaan_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_perusahaan_nama` varchar(255) DEFAULT NULL,
  `m_perusahaan_alamat` varchar(255) DEFAULT NULL,
  `m_perusahaan_phone` varchar(255) DEFAULT NULL,
  `m_perusahaan_email` varchar(100) DEFAULT NULL,
  `m_perusahaan_fax` varchar(100) DEFAULT NULL,
  `m_perusahaan_longitude` int(20) DEFAULT NULL,
  `m_perusahaan_langitude` int(20) DEFAULT NULL,
  `m_perusahaan_active` enum('T','Y') DEFAULT 'Y',
  `m_perusahaan_created_date` timestamp NULL DEFAULT NULL,
  `m_perusahaan_created_by` int(11) DEFAULT NULL,
  `m_perusahaan_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_perusahaan_updated_by` int(11) DEFAULT NULL,
  `m_perusahaan_label_web` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`m_perusahaan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_perusahaan
-- ----------------------------
INSERT INTO `m_perusahaan` VALUES ('2', 'SANI HONDA', '', '081297652527 , 085695211111', '', '', null, null, 'T', '2015-10-04 20:09:41', '1', '2015-10-18 12:48:48', '1', 'SANI HONDA');

-- ----------------------------
-- Table structure for m_product
-- ----------------------------
DROP TABLE IF EXISTS `m_product`;
CREATE TABLE `m_product` (
  `m_product_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_product_nama` varchar(255) DEFAULT NULL,
  `m_product_desc` mediumtext,
  `m_categories_id` int(11) DEFAULT NULL,
  `m_product_active` enum('T','Y') DEFAULT 'Y',
  `m_product_created_date` timestamp NULL DEFAULT NULL,
  `m_product_created_by` int(11) DEFAULT NULL,
  `m_product_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_product_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_product
-- ----------------------------
INSERT INTO `m_product` VALUES ('10', 'BRIO SATYA', '', '0', 'Y', '2015-10-26 21:06:20', '1', '2015-10-26 21:06:20', '1');
INSERT INTO `m_product` VALUES ('11', 'MOBILIO', '', '0', 'Y', '2015-10-26 21:21:08', '0', '2015-10-26 21:21:08', '0');
INSERT INTO `m_product` VALUES ('12', 'ALL NEW CITY', '', '0', 'Y', '2015-10-26 21:26:56', '0', '2015-10-26 21:26:56', '0');
INSERT INTO `m_product` VALUES ('13', 'ALL NEW JAZZ', '', '0', 'Y', '2015-10-26 21:29:39', '0', '2015-10-26 21:29:39', '0');

-- ----------------------------
-- Table structure for m_transmisi
-- ----------------------------
DROP TABLE IF EXISTS `m_transmisi`;
CREATE TABLE `m_transmisi` (
  `m_transmisi_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_transmisi_nama` varchar(255) DEFAULT NULL,
  `m_transmisi_active` enum('T','Y') DEFAULT 'Y',
  `m_transmisi_created_date` timestamp NULL DEFAULT NULL,
  `m_transmisi_created_by` int(11) DEFAULT NULL,
  `m_transmisi_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_transmisi_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_transmisi_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_transmisi
-- ----------------------------
INSERT INTO `m_transmisi` VALUES ('2', 'AT', 'Y', '2015-10-26 20:53:34', '1', '2015-10-26 20:53:35', '1');
INSERT INTO `m_transmisi` VALUES ('3', 'MT', 'Y', '2015-10-26 20:53:40', '1', '2015-10-26 20:53:40', '1');
INSERT INTO `m_transmisi` VALUES ('4', 'CVT', 'Y', '2015-10-26 20:53:44', '1', '2015-10-26 20:53:44', '1');
INSERT INTO `m_transmisi` VALUES ('5', 'CVT Plus', 'Y', '2015-10-26 20:53:50', '1', '2015-10-26 20:53:50', '1');

-- ----------------------------
-- Table structure for m_type
-- ----------------------------
DROP TABLE IF EXISTS `m_type`;
CREATE TABLE `m_type` (
  `m_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_type_nama` varchar(255) DEFAULT NULL,
  `m_type_active` enum('T','Y') DEFAULT 'Y',
  `m_type_created_date` timestamp NULL DEFAULT NULL,
  `m_type_created_by` int(11) DEFAULT NULL,
  `m_type_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `m_type_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`m_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_type
-- ----------------------------
INSERT INTO `m_type` VALUES ('6', 'A', 'Y', '2015-10-26 20:55:30', '1', '2015-10-26 20:55:30', '1');
INSERT INTO `m_type` VALUES ('7', 'S', 'Y', '2015-10-26 20:55:34', '1', '2015-10-26 20:55:34', '1');
INSERT INTO `m_type` VALUES ('8', 'E', 'Y', '2015-10-26 20:55:38', '1', '2015-10-26 20:55:38', '1');
INSERT INTO `m_type` VALUES ('9', 'RS', 'Y', '2015-10-26 20:55:48', '1', '2015-10-26 20:55:48', '1');
INSERT INTO `m_type` VALUES ('10', 'ES', 'Y', '2015-10-26 20:56:06', '1', '2015-10-26 20:56:06', '1');
INSERT INTO `m_type` VALUES ('11', 'A Paket Cermat 1', 'Y', '2015-10-26 20:56:29', '1', '2015-10-26 20:57:12', '1');
INSERT INTO `m_type` VALUES ('12', 'A Paket Cermat Plus 1', 'Y', '2015-10-26 20:56:37', '1', '2015-10-26 20:57:18', '1');
INSERT INTO `m_type` VALUES ('13', 'A Paket Cermat 2', 'Y', '2015-10-26 20:56:45', '1', '2015-10-26 20:57:23', '1');
INSERT INTO `m_type` VALUES ('14', 'A Paket Cermat Plus 2', 'Y', '2015-10-26 20:56:51', '1', '2015-10-26 20:57:28', '1');
INSERT INTO `m_type` VALUES ('15', 'S Paket Cermat 1', 'Y', '2015-10-26 20:57:06', '1', '2015-10-26 20:57:34', '1');
INSERT INTO `m_type` VALUES ('16', 'S Paket Cermat Plus 1', 'Y', '2015-10-26 20:58:23', '1', '2015-10-26 20:58:23', '1');
INSERT INTO `m_type` VALUES ('17', 'S Paket Cermat 2', 'Y', '2015-10-26 20:58:31', '1', '2015-10-26 20:58:31', '1');
INSERT INTO `m_type` VALUES ('18', 'S Paket Cermat Plus 2', 'Y', '2015-10-26 20:58:43', '1', '2015-10-26 20:58:43', '1');
INSERT INTO `m_type` VALUES ('19', 'E Paket Cermat 1', 'Y', '2015-10-26 20:59:15', '1', '2015-10-26 20:59:15', '1');
INSERT INTO `m_type` VALUES ('20', 'E Paket Cermat Plus 1', 'Y', '2015-10-26 20:59:35', '1', '2015-10-26 20:59:35', '1');
INSERT INTO `m_type` VALUES ('21', 'E Paket Cermat 2', 'Y', '2015-10-26 20:59:47', '1', '2015-10-26 20:59:47', '1');
INSERT INTO `m_type` VALUES ('22', 'E Paket Cermat Plus 2', 'Y', '2015-10-26 20:59:59', '1', '2015-10-26 20:59:59', '1');
INSERT INTO `m_type` VALUES ('23', 'RS Paket Cermat 1', 'Y', '2015-10-26 21:01:28', '1', '2015-10-26 21:01:28', '1');
INSERT INTO `m_type` VALUES ('24', 'RS Paket Cermat Plus 1', 'Y', '2015-10-26 21:01:35', '1', '2015-10-26 21:01:35', '1');
INSERT INTO `m_type` VALUES ('25', 'RS Paket Cermat 2', 'Y', '2015-10-26 21:01:40', '1', '2015-10-26 21:01:40', '1');
INSERT INTO `m_type` VALUES ('26', 'RS Paket Cermat Plus 2', 'Y', '2015-10-26 21:01:47', '1', '2015-10-26 21:01:47', '1');

-- ----------------------------
-- Table structure for s_user
-- ----------------------------
DROP TABLE IF EXISTS `s_user`;
CREATE TABLE `s_user` (
  `s_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_user_nama` varchar(100) DEFAULT NULL,
  `s_user_pass` varchar(100) DEFAULT NULL,
  `s_user_aktif` enum('N','Y') DEFAULT 'Y',
  `s_user_created_date` timestamp NULL DEFAULT NULL,
  `s_user_created_by` int(11) DEFAULT NULL,
  `s_user_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `s_user_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of s_user
-- ----------------------------
INSERT INTO `s_user` VALUES ('1', 'iqbal', '827ccb0eea8a706c4c34a16891f84e7b', 'Y', null, null, '2015-10-18 11:05:33', '1');
INSERT INTO `s_user` VALUES ('2', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Y', null, null, null, null);

-- ----------------------------
-- Table structure for t_bunga
-- ----------------------------
DROP TABLE IF EXISTS `t_bunga`;
CREATE TABLE `t_bunga` (
  `t_bunga_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_bunga_keterangan` varchar(255) DEFAULT NULL,
  `t_bunga_prosentase` int(11) DEFAULT NULL,
  `t_bunga_cicilan` int(11) DEFAULT NULL,
  `t_bunga_created_date` timestamp NULL DEFAULT NULL,
  `t_bunga_created_by` int(11) DEFAULT NULL,
  `t_bunga_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `t_bunga_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_bunga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_bunga
-- ----------------------------
INSERT INTO `t_bunga` VALUES ('1', 'DP', '12', '0', null, null, '2015-10-18 10:33:24', '1');
INSERT INTO `t_bunga` VALUES ('2', '1 Tahun', '10', '12', null, null, '2015-10-18 10:33:25', '1');
INSERT INTO `t_bunga` VALUES ('3', '2 Tahun', '10', '24', null, null, '2015-10-18 10:33:25', '1');
INSERT INTO `t_bunga` VALUES ('4', '3 Tahun', '10', '36', null, null, '2015-10-18 10:33:25', '1');
INSERT INTO `t_bunga` VALUES ('5', '4 Tahun', '10', '48', null, null, '2015-10-18 10:33:25', '1');
INSERT INTO `t_bunga` VALUES ('6', '5 Tahun', '10', '60', null, null, '2015-10-18 10:33:25', '1');

-- ----------------------------
-- Table structure for t_photoproduct
-- ----------------------------
DROP TABLE IF EXISTS `t_photoproduct`;
CREATE TABLE `t_photoproduct` (
  `t_photoproduct_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_photoproduct_nama` varchar(255) DEFAULT NULL,
  `t_photoproduct_main` int(1) DEFAULT '0' COMMENT 'tampil sebagai foto utama atau bukan',
  `m_product_id` int(11) DEFAULT NULL,
  `t_photoproduct_created_date` timestamp NULL DEFAULT NULL,
  `t_photoproduct_created_by` int(11) DEFAULT NULL,
  `t_photoproduct_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `t_photoproduct_updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_photoproduct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_photoproduct
-- ----------------------------
INSERT INTO `t_photoproduct` VALUES ('11', 'honda-brio-satya.jpg', '1', '10', '2015-10-26 21:08:37', '1', '2015-10-26 21:31:57', '0');
INSERT INTO `t_photoproduct` VALUES ('16', 'harga_honda_brio.jpg', '0', '10', '2015-10-26 21:18:53', '1', '2015-10-26 21:18:53', '1');
INSERT INTO `t_photoproduct` VALUES ('17', 'Mobilio.jpg', '1', '11', '2015-10-26 21:24:16', '0', '2015-10-26 21:33:14', '0');
INSERT INTO `t_photoproduct` VALUES ('18', 'honda-mobilio-tafeta-white.jpg', '0', '11', '2015-10-26 21:24:22', '0', '2015-10-26 21:24:22', '0');
INSERT INTO `t_photoproduct` VALUES ('19', 'honda-city1_505_112513042953.jpg', '1', '12', '2015-10-26 21:27:59', '0', '2015-10-26 21:33:21', '0');
INSERT INTO `t_photoproduct` VALUES ('20', 'The_All-_New_City_has_set_a_new_benchmark_with_10,000_bookings_in_1_month.jpg', '0', '12', '2015-10-26 21:28:02', '0', '2015-10-26 21:28:02', '0');
INSERT INTO `t_photoproduct` VALUES ('21', 'jazz.jpg', '1', '13', '2015-10-26 21:30:47', '0', '2015-10-26 21:33:28', '0');
INSERT INTO `t_photoproduct` VALUES ('22', 'fit-rs-01-630x331.jpg', '0', '13', '2015-10-26 21:30:51', '0', '2015-10-26 21:30:51', '0');

-- ----------------------------
-- Table structure for t_price
-- ----------------------------
DROP TABLE IF EXISTS `t_price`;
CREATE TABLE `t_price` (
  `t_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_product_id` int(11) DEFAULT NULL,
  `m_type_id` int(11) DEFAULT NULL,
  `m_transmisi_id` int(11) DEFAULT NULL,
  `t_price_nominal` int(11) DEFAULT NULL,
  `t_price_created_date` timestamp NULL DEFAULT NULL,
  `t_price_created_by` int(11) DEFAULT NULL,
  `t_price_updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `t_price_updated_by` int(11) DEFAULT NULL,
  `t_price_view` int(1) DEFAULT '0' COMMENT 'harga yang ditampilkan didepan, 1 untuk ya , 0 untuk tidak',
  PRIMARY KEY (`t_price_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_price
-- ----------------------------
INSERT INTO `t_price` VALUES ('10', '10', '6', '3', '114900000', '2015-10-26 21:19:34', '1', '2015-10-26 21:34:03', '0', '1');
INSERT INTO `t_price` VALUES ('11', '10', '11', '3', '117500000', '2015-10-26 21:19:58', '1', '2015-10-26 21:19:58', '1', '0');
INSERT INTO `t_price` VALUES ('12', '10', '12', '3', '119400000', '2015-10-26 21:20:15', '1', '2015-10-26 21:20:15', '1', '0');
INSERT INTO `t_price` VALUES ('13', '10', '7', '3', '119900000', '2015-10-26 21:20:31', '1', '2015-10-26 21:20:31', '1', '0');
INSERT INTO `t_price` VALUES ('14', '11', '7', '3', '176500000', '2015-10-26 21:25:05', '0', '2015-10-26 21:37:01', '1', '1');
INSERT INTO `t_price` VALUES ('15', '11', '15', '3', '174200000', '2015-10-26 21:25:28', '0', '2015-10-26 21:25:28', '0', '0');
INSERT INTO `t_price` VALUES ('16', '11', '8', '3', '197000000', '2015-10-26 21:26:11', '0', '2015-10-26 21:26:11', '0', '0');
INSERT INTO `t_price` VALUES ('17', '11', '8', '4', '208000000', '2015-10-26 21:26:33', '0', '2015-10-26 21:26:33', '0', '0');
INSERT INTO `t_price` VALUES ('18', '12', '7', '3', '285500000', '2015-10-26 21:28:25', '0', '2015-10-26 21:37:13', '1', '1');
INSERT INTO `t_price` VALUES ('19', '12', '7', '4', '295500000', '2015-10-26 21:28:44', '0', '2015-10-26 21:28:44', '0', '0');
INSERT INTO `t_price` VALUES ('20', '12', '8', '3', '300000000', '2015-10-26 21:29:04', '0', '2015-10-26 21:29:04', '0', '0');
INSERT INTO `t_price` VALUES ('21', '13', '6', '3', '206000000', '2015-10-26 21:31:08', '0', '2015-10-26 21:37:18', '1', '1');
INSERT INTO `t_price` VALUES ('22', '13', '7', '3', '224000000', '2015-10-26 21:31:19', '0', '2015-10-26 21:31:19', '0', '0');
INSERT INTO `t_price` VALUES ('23', '13', '7', '4', '234000000', '2015-10-26 21:31:35', '0', '2015-10-26 21:31:35', '0', '0');

-- ----------------------------
-- View structure for v_price
-- ----------------------------
DROP VIEW IF EXISTS `v_price`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_price` AS select distinct `t_price`.`t_price_id` AS `t_price_id`,`t_price`.`m_product_id` AS `m_product_id`,`t_price`.`m_type_id` AS `m_type_id`,`t_price`.`m_transmisi_id` AS `m_transmisi_id`,`t_price`.`t_price_nominal` AS `t_price_nominal`,`t_price`.`t_price_created_date` AS `t_price_created_date`,`t_price`.`t_price_created_by` AS `t_price_created_by`,`t_price`.`t_price_updated_date` AS `t_price_updated_date`,`t_price`.`t_price_updated_by` AS `t_price_updated_by`,`t_price`.`t_price_view` AS `t_price_view`,`m_type`.`m_type_nama` AS `m_type_nama`,`m_transmisi`.`m_transmisi_nama` AS `m_transmisi_nama` from ((`t_price` left join `m_type` on((`m_type`.`m_type_id` = `t_price`.`m_type_id`))) left join `m_transmisi` on((`m_transmisi`.`m_transmisi_id` = `t_price`.`m_transmisi_id`))) ;

-- ----------------------------
-- View structure for v_product
-- ----------------------------
DROP VIEW IF EXISTS `v_product`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_product` AS select `m_product`.`m_product_id` AS `m_product_id`,`m_product`.`m_product_nama` AS `m_product_nama`,`m_product`.`m_product_desc` AS `m_product_desc`,`m_product`.`m_categories_id` AS `m_categories_id`,`m_product`.`m_product_active` AS `m_product_active`,`m_product`.`m_product_created_date` AS `m_product_created_date`,`m_product`.`m_product_created_by` AS `m_product_created_by`,`m_product`.`m_product_updated_date` AS `m_product_updated_date`,`m_product`.`m_product_updated_by` AS `m_product_updated_by`,`t_photoproduct`.`t_photoproduct_nama` AS `t_photoproduct_nama`,`t_price`.`t_price_nominal` AS `t_price_nominal`,`m_categories`.`m_categories_nama` AS `m_categories_nama` from (((`m_product` left join `t_photoproduct` on(((`m_product`.`m_product_id` = `t_photoproduct`.`m_product_id`) and (`t_photoproduct`.`t_photoproduct_main` = 1)))) left join `t_price` on(((`m_product`.`m_product_id` = `t_price`.`m_product_id`) and (`t_price`.`t_price_view` = 1)))) left join `m_categories` on((`m_categories`.`m_categories_id` = `m_product`.`m_categories_id`))) where (`m_product`.`m_product_active` = 'Y') order by `m_product`.`m_product_updated_date` desc ;
