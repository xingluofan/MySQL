<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('gbk');
E_D("DROP TABLE IF EXISTS `admin`;");
E_C("CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `ad_name` varchar(255) NOT NULL,
  `ad_pwd` varchar(255) NOT NULL,
  `ad_lv` varchar(255) NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk");
E_D("replace into `admin` values('1','admin','21232f297a57a5a743894a0e4a801fc3','1','2012-06-04 10:14:07');");
E_D("replace into `admin` values('14','root','202cb962ac59075b964b07152d234b70','0','2012-06-04 15:21:07');");

require("../../inc/footer.php");
?>