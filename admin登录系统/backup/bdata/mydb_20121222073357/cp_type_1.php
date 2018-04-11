<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `cp_type`;");
E_C("CREATE TABLE `cp_type` (
  `id` int(10) NOT NULL auto_increment,
  `cp_type` varchar(255) NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `cp_type` values('1','企业产品','2012-12-18 10:54:29');");
E_D("replace into `cp_type` values('2','荣誉产品','2012-12-18 10:54:37');");
E_D("replace into `cp_type` values('3','进口产品','2012-12-18 10:54:44');");
E_D("replace into `cp_type` values('5','测试分类2','2012-12-18 10:57:16');");

require("../../inc/footer.php");
?>