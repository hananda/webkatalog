/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50544
Source Host           : localhost:3306
Source Database       : webmobil

Target Server Type    : MYSQL
Target Server Version : 50544
File Encoding         : 65001

Date: 2015-10-18 19:13:21
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
INSERT INTO `m_about` VALUES ('1', '<p>test</p>\n\n<p>&nbsp;</p>\n\n<p>sdfasdf</p>\n\n<p><strong>a</strong></p>\n\n<p><strong>a</strong></p>\n\n<p><strong>asdfasfasdfasdfd</strong></p>\n\n<p style=\"text-align: center;\"><img alt=\"\" src=\"/webmobil/Pictures/asdf/5.jpg\" style=\"height:480px; width:480px\" /></p>\n', 'Y', null, null, '2015-10-10 10:10:16', '1');

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
INSERT INTO `m_categories` VALUES ('1', 'Mobil Sedan', 'Y', null, null, '2015-10-04 20:32:32', '1');
INSERT INTO `m_categories` VALUES ('2', '', 'Y', '2015-10-14 12:34:13', '1', '2015-10-14 12:34:13', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_product
-- ----------------------------
INSERT INTO `m_product` VALUES ('1', 'All New Avanza', 'DIcoba\n\ntesting', '1', 'Y', null, null, '2015-10-18 15:49:18', '1');
INSERT INTO `m_product` VALUES ('2', 'All new xenia', 'TESTTEST', '1', 'Y', null, null, '2015-10-18 11:22:50', '1');
INSERT INTO `m_product` VALUES ('3', '', '', '0', 'T', '2015-10-14 12:34:04', '1', '2015-10-18 11:25:40', '1');
INSERT INTO `m_product` VALUES ('4', 'All New Avanza', 'testes\n                            ', '0', 'Y', '0000-00-00 00:00:00', null, '2015-10-18 14:11:03', '1');
INSERT INTO `m_product` VALUES ('5', 'All new xenia', '\n           teste                 ', '0', 'Y', '0000-00-00 00:00:00', null, '2015-10-18 14:11:06', null);
INSERT INTO `m_product` VALUES ('6', 'All New Avanza', 'testes\n                            ', '1', 'Y', '0000-00-00 00:00:00', null, '2015-10-18 11:25:45', '1');
INSERT INTO `m_product` VALUES ('7', 'All new xenia', '\n           teste                 ', '1', 'Y', '0000-00-00 00:00:00', null, '0000-00-00 00:00:00', null);
INSERT INTO `m_product` VALUES ('8', 'All New Avanza', 'testes\n                            ', '1', 'Y', '0000-00-00 00:00:00', null, '2015-10-18 11:25:43', '1');
INSERT INTO `m_product` VALUES ('9', 'All new xenia', 'test', '1', 'Y', '0000-00-00 00:00:00', null, '2015-10-18 15:28:43', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_transmisi
-- ----------------------------
INSERT INTO `m_transmisi` VALUES ('1', 'Automatic', 'Y', null, null, '2015-10-14 15:36:21', '1');
INSERT INTO `m_transmisi` VALUES ('2', 's', 'T', '2015-10-14 10:56:05', '1', '2015-10-14 11:00:03', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of m_type
-- ----------------------------
INSERT INTO `m_type` VALUES ('1', 'S', 'Y', null, null, '2015-10-14 10:54:02', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_photoproduct
-- ----------------------------
INSERT INTO `t_photoproduct` VALUES ('2', '5.jpg', '0', '1', '2015-10-11 14:11:29', '1', '2015-10-11 14:11:29', '1');
INSERT INTO `t_photoproduct` VALUES ('7', 'Selection_025.jpg', '0', '2', '2015-10-11 14:30:26', '1', '2015-10-11 14:30:26', '1');
INSERT INTO `t_photoproduct` VALUES ('8', 'video-2012-04-27-17-25-44.mp4', '0', '2', '2015-10-11 14:36:16', '1', '2015-10-11 14:36:16', '1');
INSERT INTO `t_photoproduct` VALUES ('9', 'DSC_3016.JPG', '1', '1', '2015-10-11 14:52:40', '1', '2015-10-11 14:56:24', '1');
INSERT INTO `t_photoproduct` VALUES ('10', 'Selection_035.jpg', '0', '1', '2015-10-14 21:04:04', '1', '2015-10-14 21:04:04', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_price
-- ----------------------------
INSERT INTO `t_price` VALUES ('4', '2', '1', '1', '221', '2015-10-14 20:43:56', '1', '2015-10-14 20:43:56', '1', '0');
INSERT INTO `t_price` VALUES ('9', '1', '1', '1', '400000', '2015-10-14 21:21:10', '1', '2015-10-18 17:27:38', '1', '1');

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
