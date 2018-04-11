<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `web_info`;");
E_C("CREATE TABLE `web_info` (
  `id` int(11) NOT NULL auto_increment,
  `web_name` varchar(255) NOT NULL,
  `web_host` varchar(255) NOT NULL,
  `web_key` varchar(255) NOT NULL,
  `web_desc` varchar(255) NOT NULL,
  `web_dz` varchar(255) NOT NULL,
  `web_tel` varchar(255) NOT NULL,
  `web_yb` varchar(255) NOT NULL,
  `web_qq` varchar(255) NOT NULL,
  `web_icp` varchar(255) NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `web_info` values('1','PHP企业网站管理系统','http://localhost/','HTML教程,php教程','本站提供各种网站开发教程','黑龙江省哈尔滨市南岗区南通大街93-16号','0451-666666','150001','34979702','黑ICP备908719231号','2012-12-13 14:31:15');");

require("../../inc/footer.php");
?>