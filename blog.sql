# Host: localhost  (Version: 5.5.53)
# Date: 2018-03-02 15:19:47
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "bg_admin"
#

CREATE TABLE `bg_admin` (
  `admin_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) NOT NULL,
  `admin_pass` char(32) NOT NULL,
  `login_ip` varchar(30) NOT NULL,
  `login_nums` int(10) unsigned DEFAULT '0',
  `login_time` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "bg_admin"
#

INSERT INTO `bg_admin` VALUES (1,'wangxiaotie','25d55ad283aa400af464c76d713c07ad','127.0.0.1',30,1519955780);

#
# Structure for table "bg_article"
#

CREATE TABLE `bg_article` (
  `art_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_id` smallint(5) unsigned NOT NULL COMMENT '文章所属分类',
  `title` varchar(50) NOT NULL,
  `thumb` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `art_desc` text,
  `content` text,
  `author` varchar(20) DEFAULT NULL,
  `hits` smallint(5) unsigned NOT NULL DEFAULT '100',
  `addtime` int(10) unsigned NOT NULL COMMENT '文章发表时间',
  `is_recommend` enum('0','1') NOT NULL DEFAULT '0',
  `is_del` enum('0','1') NOT NULL DEFAULT '0' COMMENT '是否逻辑删除',
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "bg_article"
#

INSERT INTO `bg_article` VALUES (1,1,'三国',NULL,'驱蚊器','请问','去',100,1324656456,'0','1'),(2,1,'游戏咨询/技术支持','20180228023749835618.jpg','sadsa','asdsad','123',103,1519785469,'1','0'),(3,2,'上传图片的时候，谷歌浏览器会自动拦截，我们点击上传','20180228023823403685.jpg','请问去无','请问请问','请问去无',101,1519785503,'1','0'),(4,1,'逗趣网络客服小a为你服务12312','20180228024826934458.jpg','阿斯顿结了婚就考虑空间阿士大夫撒旦的范德萨或覆盖的涣发大号梵蒂冈或覆盖回复的借古讽今对方水电费卅股份的公司东风风光文身断发人事是大法官飞','<p>奥术大师啊阿斯顿结了婚就考虑空间阿士大夫撒旦的范德萨或覆盖的涣发大号梵蒂冈或覆盖回复的借古讽今对方水电费卅股份的公司东风风光文身断发人事是大法官飞</p>\r\n','请问请问',157,1519786106,'1','0');

#
# Structure for table "bg_category"
#

CREATE TABLE `bg_category` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(20) NOT NULL,
  `cate_pid` smallint(6) NOT NULL,
  `cate_sort` smallint(6) NOT NULL,
  `cate_desc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

#
# Data for table "bg_category"
#

INSERT INTO `bg_category` VALUES (1,'慢生活',0,1,'慢生活有益健康'),(2,'日记',1,1,'慢生活有益健康'),(3,'欣赏',1,1,'请大家欣赏一下我的点点滴滴'),(4,'程序人生',1,2,'程序人生很苦逼'),(5,'经典语录',1,3,'哥的经典语录');

#
# Structure for table "bg_comment"
#

CREATE TABLE `bg_comment` (
  `cmt_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `art_id` smallint(5) unsigned NOT NULL COMMENT '被评论的文章的id号',
  `cmt_user` varchar(20) NOT NULL,
  `cmt_content` text NOT NULL,
  `cmt_time` int(11) NOT NULL,
  PRIMARY KEY (`cmt_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "bg_comment"
#

INSERT INTO `bg_comment` VALUES (10,4,'qqq','123333333333333333333333333333333333333333',1519883844);

#
# Structure for table "bg_master"
#

CREATE TABLE `bg_master` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nickname` varchar(20) NOT NULL,
  `job` varchar(50) NOT NULL,
  `home` varchar(100) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "bg_master"
#

INSERT INTO `bg_master` VALUES (1,'圣骑士 | 蜗牛的家','PHPer','湖北黄冈','13971715240','mliqingxia@163.com');

#
# Structure for table "bg_singlepage"
#

CREATE TABLE `bg_singlepage` (
  `page_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text,
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "bg_singlepage"
#

INSERT INTO `bg_singlepage` VALUES (1,'路漫漫其修远兮，吾将上下而求索！','路漫漫其修远兮，吾将上下而求索！'),(2,'路漫漫其修远兮，吾将上下而求索！','路漫漫其修远兮，吾将上下而求索！');

#
# Structure for table "bg_user"
#

CREATE TABLE `bg_user` (
  `user_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_pass` char(32) DEFAULT NULL,
  `user_image` varchar(100) DEFAULT NULL,
  `user_time` int(10) unsigned DEFAULT NULL COMMENT '注册时间',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "bg_user"
#

INSERT INTO `bg_user` VALUES (1,'qqq','343b1c4a3ea721b2d640fc8700db0f36','20180228063528128566.jpg',1519799728);
