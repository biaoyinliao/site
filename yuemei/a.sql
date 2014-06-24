/*
SQLyog Ultimate v10.51 
MySQL - 5.6.12-log 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `goods` (
	`goods_id` int (11),
	`goods_name` varchar (384),
	`goods_classic` varchar (384),
	`goods_category` varchar (120),
	`goods_norms` varchar (180),
	`goods_material` varchar (180),
	`goods_path` varchar (180),
	`goods_create_time` varchar (60),
	`goods_priority` int (11),
	`goods_introduce` text 
); 
insert into `goods` (`goods_id`, `goods_name`, `goods_classic`, `goods_category`, `goods_norms`, `goods_material`, `goods_path`, `goods_create_time`, `goods_priority`, `goods_introduce`) values('81','test','','楼宇亮化工程','32*23*12','亚克力','./assets/default/img/file_1403632080_8119.JPG','2014-06-25 01:48:00','0','测试例子');
