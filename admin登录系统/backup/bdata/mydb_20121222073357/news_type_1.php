<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `news_type`;");
E_C("CREATE TABLE `news_type` (
  `id` int(10) NOT NULL auto_increment,
  `news_type` varchar(255) NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `news_type` values('1','企业新闻','2012-12-15 10:21:54');");
E_D("replace into `news_type` values('2','技术文章','2012-12-15 10:22:01');");
E_D("replace into `news_type` values('3','测试类别','2012-12-15 13:06:22');");
E_D("replace into `news_type` values('7','行业动态','2012-12-20 13:30:26');");

require("../../inc/footer.php");
?>