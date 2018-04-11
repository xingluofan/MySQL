<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `page_news`;");
E_C("CREATE TABLE `page_news` (
  `id` int(10) NOT NULL auto_increment,
  `news_tit` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `news_con` text NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `page_news` values('1','企业简介','admin','<p>例如在我们公司,一个应用程序的开发流程如下：在提交计划文档之后,界面设计者[美工]制作了网站的外观模型,然后把它交给后台程序员。程序员使用PHP实现商业逻辑,同时使用外观模型做成基本架构。然后工程被返回到html页面设计者继续完善。就这样工程可能在后台程序员和页面设计者之间来来回回好几次。由于后台程序员不喜欢干预任何有关html标签，同时也不需要美工们和php鬼混在一起；美工设计者只需要配置文件，动态区块和其他的界面部分，不必要去接触那些错综复杂的php代码 。因此，这时候有一个很好的模板支持就显得很重要了。<br />\r\nLooking at many templating solutions available for PHP today, most of them provide a rudimentary way of substituting variables into templates and do a limited form of dynamic block functionality. But our needs required a bit more than that. We didn''t want programmers to be dealing with HTML layout at ALL, but this was almost inevitable. For instance, if a designer wanted background colors to alternate on dynamic blocks, this had to be worked out with the programmer in advance. We also needed designers to be able to use their own configuration files, and pull variables from them into the templates. The list goes on.</p>\r\n<p>纵观现今存在的许多php模板解决方案,大多数都只是提供了用模板取代变量和将动态区块的功能有限的格式化的基本方法。但是我们的需求比这个要高的多。我们完全不想要php程序员去设计html页面，可是这又是不可避免的。例如:如果美工想要在动态区块之间交替不同的背景颜色，他就可能得和程序员预先说好。同样,美工们也应该有自己对于页面设计的配置文件，这同样可以通过变量把他们拉到模板里边去。继续。</p>','2012-12-20 15:24:11');");
E_D("replace into `page_news` values('2','企业荣誉','root','<p>尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。请继续读后面的章节</p>','2012-12-18 13:11:33');");
E_D("replace into `page_news` values('3','招商加盟','root','<p>尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。请继续读后面的章节</p>','2012-12-18 13:11:45');");
E_D("replace into `page_news` values('4','联系我们1','admin1','<p>2222222222222222222222222</p>','2012-12-18 13:17:02');");

require("../../inc/footer.php");
?>