<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `news`;");
E_C("CREATE TABLE `news` (
  `id` int(10) NOT NULL auto_increment,
  `news_tit` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `type_id` varchar(255) NOT NULL,
  `news_img` varchar(255) NOT NULL,
  `gonggao` varchar(255) NOT NULL,
  `tj` varchar(255) NOT NULL,
  `js` varchar(255) NOT NULL,
  `news_con` text NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");
E_D("replace into `news` values('1','测试企业新闻一','admin','1','/upload/135554906427242.jpg','1','1','1','<p>阿克苏京东方哈拉少看到回复拉姆和第三方了尽快哈第三方拉空间的身份辣椒和第三方拉空间和第三方拉开惊魂甫定拉克丝结婚的法律空间回复啊拉开惊魂甫定拉开点数据恢复阿拉卡时间段发<img style=\"width: 325px; height: 141px\" alt=\"\" src=\"/upload/1355549057698408651.jpg\" /></p>','2012-12-15 13:24:24');");
E_D("replace into `news` values('2','测试企业文章二','admin','1','/upload/135554913619291.jpg','','','','<p>1111111111111111</p>','2012-12-15 13:25:36');");
E_D("replace into `news` values('3','测试技术文章一','root','2','/upload/135554916132760.jpg','','1','','<p>11111111111111111111</p>','2012-12-15 13:26:01');");
E_D("replace into `news` values('4','测试技术文章二','root','2','/upload/135554918515569.jpg','1','','1','<p>111111111111111111111111111</p>','2012-12-15 13:26:25');");
E_D("replace into `news` values('5','测试企业新闻三','admin','1','/upload/135554921626057.jpg','','','1','<p>33333333333333333333333333333333333</p>','2012-12-15 13:26:56');");
E_D("replace into `news` values('6','测试新闻1','admin','3','/upload/135554927631554.jpg','1','1','','<p>请注意这个范例和其它用 C 或 Perl 语言写的脚本之间的区别――与用大量的命令来编写程序以输出 HTML 不同的是，我们用 PHP 编写了一个 HTML 脚本，其中嵌入了一些代码来做一些事情（例如，在本例中输出了一些文本）。PHP 代码被包含在特殊的中，使得可以进出&ldquo;PHP 模式&rdquo;。</p>\r\n<p>和客户端的 JavaScript 不同的是，PHP 代码是运行在服务端的。如果在服务器上建立了如上例类似的代码，则在运行该脚本后，客户端就能接收到其结果，但他们无法得知其背后的代码是如何运作的。甚至可以将 web 服务器设置成让 PHP 来处理所有的 HTML 文件，这么一来，用户就无法得知服务端到底做了什么。 <br />\r\n<br />\r\n<img style=\"width: 325px; height: 190px\" alt=\"\" src=\"/upload/13559672001271896487.jpg\" /></p>\r\n<p>使用 PHP 的一大好处是它对于初学者来说极其简单，同时也给专业的程序员提供了各种高级的特性。当看到 PHP 长长的特性列表时，请不要害怕。可以很快的入门，只需几个小时就可以自己写一些简单的脚本。</p>\r\n<p>尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。请继续读后面的章节</p>','2012-12-20 09:33:47');");
E_D("replace into `news` values('8','测试技术文章四','admin','2','/upload/135555029522672.jpg','','','','<p>请注意这个范例和其它用 C 或 Perl 语言写的脚本之间的区别――与用大量的命令来编写程序以输出 HTML 不同的是，我们用 PHP 编写了一个 HTML 脚本，其中嵌入了一些代码来做一些事情（例如，在本例中输出了一些文本）。PHP 代码被包含在特殊的中，使得可以进出&ldquo;PHP 模式&rdquo;。</p>\r\n<p>和客户端的 JavaScript 不同的是，PHP 代码是运行在服务端的。如果在服务器上建立了如上例类似的代码，则在运行该脚本后，客户端就能接收到其结果，但他们无法得知其背后的代码是如何运作的。甚至可以将 web 服务器设置成让 PHP 来处理所有的 HTML 文件，这么一来，用户就无法得知服务端到底做了什么。 <br />\r\n<br />\r\n<img style=\"width: 325px; height: 190px\" alt=\"\" src=\"/upload/13559672001271896487.jpg\" /></p>\r\n<p>使用 PHP 的一大好处是它对于初学者来说极其简单，同时也给专业的程序员提供了各种高级的特性。当看到 PHP 长长的特性列表时，请不要害怕。可以很快的入门，只需几个小时就可以自己写一些简单的脚本。</p>\r\n<p>尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。请继续读后面的章节</p>','2012-12-20 09:33:41');");
E_D("replace into `news` values('9','测试技术文章三','root','2','/upload/135555033317801.jpg','','','','<p>请注意这个范例和其它用 C 或 Perl 语言写的脚本之间的区别――与用大量的命令来编写程序以输出 HTML 不同的是，我们用 PHP 编写了一个 HTML 脚本，其中嵌入了一些代码来做一些事情（例如，在本例中输出了一些文本）。PHP 代码被包含在特殊的中，使得可以进出&ldquo;PHP 模式&rdquo;。</p>\r\n<p>和客户端的 JavaScript 不同的是，PHP 代码是运行在服务端的。如果在服务器上建立了如上例类似的代码，则在运行该脚本后，客户端就能接收到其结果，但他们无法得知其背后的代码是如何运作的。甚至可以将 web 服务器设置成让 PHP 来处理所有的 HTML 文件，这么一来，用户就无法得知服务端到底做了什么。 <br />\r\n<br />\r\n<img style=\"width: 325px; height: 190px\" alt=\"\" src=\"/upload/13559672001271896487.jpg\" /></p>\r\n<p>使用 PHP 的一大好处是它对于初学者来说极其简单，同时也给专业的程序员提供了各种高级的特性。当看到 PHP 长长的特性列表时，请不要害怕。可以很快的入门，只需几个小时就可以自己写一些简单的脚本。</p>\r\n<p>尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。请继续读后面的章节</p>','2012-12-20 09:33:36');");
E_D("replace into `news` values('10','测试企业新闻四1','root1','3','/upload/135556176424177.jpg','','','1','<p>请注意这个范例和其它用 C 或 Perl 语言写的脚本之间的区别――与用大量的命令来编写程序以输出 HTML 不同的是，我们用 PHP 编写了一个 HTML 脚本，其中嵌入了一些代码来做一些事情（例如，在本例中输出了一些文本）。PHP 代码被包含在特殊的中，使得可以进出&ldquo;PHP 模式&rdquo;。</p>\r\n<p>和客户端的 JavaScript 不同的是，PHP 代码是运行在服务端的。如果在服务器上建立了如上例类似的代码，则在运行该脚本后，客户端就能接收到其结果，但他们无法得知其背后的代码是如何运作的。甚至可以将 web 服务器设置成让 PHP 来处理所有的 HTML 文件，这么一来，用户就无法得知服务端到底做了什么。 <br />\r\n<br />\r\n<img style=\"width: 325px; height: 190px\" alt=\"\" src=\"/upload/13559672001271896487.jpg\" /></p>\r\n<p>使用 PHP 的一大好处是它对于初学者来说极其简单，同时也给专业的程序员提供了各种高级的特性。当看到 PHP 长长的特性列表时，请不要害怕。可以很快的入门，只需几个小时就可以自己写一些简单的脚本。</p>\r\n<p>尽管 PHP 的开发是以服务端脚本为目的，但事实上其功能远不局限与此。请继续读后面的章节</p>','2012-12-20 09:33:29');");
E_D("replace into `news` values('18','测试行业新闻一','root','7','/upload/135598144527255.jpg','1','1','1','<p>111111111111</p>','2012-12-20 13:30:45');");

require("../../inc/footer.php");
?>