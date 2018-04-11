<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `cp`;");
E_C("CREATE TABLE `cp` (
  `id` int(10) NOT NULL auto_increment,
  `cp_name` varchar(255) NOT NULL,
  `cp_money` varchar(255) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `cp_img` varchar(255) NOT NULL,
  `tj` varchar(255) NOT NULL,
  `cp_con` text NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `cp` values('2','测试企业产品2','1500','1','/upload/135579978221502.jpg','','<p>111111111111111111111111</p>','2012-12-18 11:03:02');");
E_D("replace into `cp` values('3','测试荣誉产品1','2000','2','/upload/135579979722367.jpg','','<p>22222222222222222</p>','2012-12-18 11:03:17');");
E_D("replace into `cp` values('4','测试荣誉产品2','1500','2','/upload/135579981321932.jpg','','<p>111111111111</p>','2012-12-18 11:03:33');");
E_D("replace into `cp` values('5','测试进口产品1','3000','3','/upload/13557998334725.jpg','1','<p>11111111111111</p>','2012-12-18 11:03:53');");
E_D("replace into `cp` values('6','测试企业产品21','34001','1','/upload/135580105725814.jpg','1','<p>222222222222222222222<img alt=\"\" style=\"width: 313px; height: 165px\" src=\"/upload/1355801025676403754.jpg\" /></p>','2012-12-18 11:24:17');");
E_D("replace into `cp` values('10','测试企业产品3','2000','1','/upload/135597058427291.jpg','','<p>例如在我们公司,一个应用程序的开发流程如下：在提交计划文档之后,界面设计者[美工]制作了网站的外观模型,然后把它交给后台程序员。程序员使用PHP实现商业逻辑,同时使用外观模型做成基本架构。然后工程被返回到html页面设计者继续完善。就这样工程可能在后台程序员和页面设计者之间来来回回好几次。由于后台程序员不喜欢干预任何有关html标签，同时也不需要美工们和php鬼混在一起；美工设计者只需要配置文件，动态区块和其他的界面部分，不必要去接触那些错综复杂的php代码 。因此，这时候有一个很好的模板支持就显得很重要了。<br />\r\nLooking at many templating solutions available for PHP today, most of them provide a rudimentary way of substituting variables into templates and do a limited form of dynamic block functionality. But our needs required a bit more than that. We didn''t want programmers to be dealing with HTML layout at ALL, but this was almost inevitable. For instance, if a designer wanted background colors to alternate on dynamic blocks, this had to be worked out with the programmer in advance. We also needed designers to be able to use their own configuration files, and pull variables from them into the templates. The list goes on.</p>\r\n<p>纵观现今存在的许多php模板解决方案,大多数都只是提供了用模板取代变量和将动态区块的功能有限的格式化的基本方法。但是我们的需求比这个要高的多。我们完全不想要php程序员去设计html页面，可是这又是不可避免的。例如:如果美工想要在动态区块之间交替不同的背景颜色，他就可能得和程序员预先说好。同样,美工们也应该有自己对于页面设计的配置文件，这同样可以通过变量把</p>','2012-12-20 10:29:44');");
E_D("replace into `cp` values('11','测试荣誉产品3','3000','2','/upload/135597061820024.jpg','1','<p>例如在我们公司,一个应用程序的开发流程如下：在提交计划文档之后,界面设计者[美工]制作了网站的外观模型,然后把它交给后台程序员。程序员使用PHP实现商业逻辑,同时使用外观模型做成基本架构。然后工程被返回到html页面设计者继续完善。就这样工程可能在后台程序员和页面设计者之间来来回回好几次。由于后台程序员不喜欢干预任何有关html标签，同时也不需要美工们和php鬼混在一起；美工设计者只需要配置文件，动态区块和其他的界面部分，不必要去接触那些错综复杂的php代码 。因此，这时候有一个很好的模板支持就显得很重要了。<br />\r\nLooking at many templating solutions available for PHP today, most of them provide a rudimentary way of substituting variables into templates and do a limited form of 。同样,美工们也应该有自己对于页面设计的配置文件，这同样可以通过变量把</p>','2012-12-20 10:30:18');");
E_D("replace into `cp` values('12','测试进口产品3','5000','3','/upload/13559706423601.gif','1','<p>例如在我们公司,一个应用程序的开发流程如下：在提交计划文档之后,界面设计者[美工]制作了网站的外观模型,然后把它交给后台程序员。程序员使用PHP实现商业逻辑,同时使用外观模型做成基本架构。然后工程被返回到html页面设计者继续完善。就这样工程可能在后台程序员和页面设计者之间来来回回好几次。由于后台程序员不喜欢干预任何有关html标签，同时也不需要美工们和php鬼混在一起；美工设计者只需要配置文件，动态区块和其他的界面部分，不必要去接触那些错综复杂的php代码 。因此，这时候有一个很好的模板支持就显得很重要了。<br />\r\nLooking at many templating solutions available for PHP today, most of them provide a rudimentary way of substituting variables into templates and do a limited form of dynamic block functionality. But our needs required a bit more than that. We didn''t want programmers to be dealing with HTML layout at ALL, but this was almost inevitable. For instance, if a designer wanted background colors to alternate on dynamic blocks, this had to be worked out with the programmer in advance. We also needed designers to be able to use their own configuration files, and pull variables from them into the templates. The list goes on.</p>\r\n<p>纵观现今存在的许多php模板解决方案,大多数都只是提供了用模板取代变量和将动态区块的功能有限的格式化的基本方法。但是我们的需求比这个要高的多。我们完全不想要php程序员去设计html页面，可是这又是不可避免的。例如:如果美工想要在动态区块之间交替不同的背景颜色，他就可能得和程序员预先说好。同样,美工们也应该有自己对于页面设计的配置文件，这同样可以通过变量把</p>','2012-12-20 10:30:42');");

require("../../inc/footer.php");
?>