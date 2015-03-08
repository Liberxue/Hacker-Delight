DROP TABLE IF EXISTS `tiny_ad`;
CREATE TABLE `tiny_ad` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `type` tinyint(1) DEFAULT NULL,
  `number` varchar(32) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `order` int(6) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `start_time` date DEFAULT NULL,
  `end_time` date DEFAULT NULL,
  `content` text,
  `description` varchar(255) DEFAULT NULL,
  `is_open` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
INSERT INTO `tiny_ad` (`id`,`name`,`type`,`number`,`link`,`order`,`width`,`height`,`start_time`,`end_time`,`content`,`description`,`is_open`) VALUES ('31','é¦–é¡µBanner','2','qgiowmka-us4k-p0up-vs3c-blkqmtb7','','0','960','410','2014-02-26','2022-02-28','a:2:{i:0;a:3:{s:4:\"path\";s:60:\"data/uploads/2014/05/13/b5cf5e20eda87a3ff77e4a2d33828947.jpg\";s:3:\"url\";s:0:\"\";s:5:\"title\";s:0:\"\";}i:1;a:3:{s:4:\"path\";s:60:\"data/uploads/2014/05/13/9670df531a008c75e7bed5b8967efd66.gif\";s:3:\"url\";s:0:\"\";s:5:\"title\";s:0:\"\";}}','çŽ\‹','1');
