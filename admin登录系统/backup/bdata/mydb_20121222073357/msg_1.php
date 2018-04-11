<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `msg`;");
E_C("CREATE TABLE `msg` (
  `id` int(10) NOT NULL auto_increment,
  `msg_tit` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_tel` varchar(255) NOT NULL,
  `msg_con` varchar(255) NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>