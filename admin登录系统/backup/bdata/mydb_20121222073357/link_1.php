<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `link`;");
E_C("CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `link_img` varchar(255) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>