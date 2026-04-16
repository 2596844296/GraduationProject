set charset utf8;
CREATE TABLE `allusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `cx` varchar(50) DEFAULT '普通管理员',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=gb2312;
insert into `allusers`(`id`,`username`,`pwd`,`cx`,`addtime`) values('2','admin','admin','超级管理员','2026-02-24 11:44:21');
CREATE TABLE `caozuojilu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mouren` varchar(50) DEFAULT NULL,
  `quanxian` varchar(50) DEFAULT NULL,
  `caozuoshixiang` varchar(50) DEFAULT NULL,
  `xiangyingbiao` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
CREATE TABLE `dx` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `leibie` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=gb2312;
insert into `dx`(`ID`,`leibie`,`content`,`addtime`) values('1','系统公告','<P>&nbsp;&nbsp;&nbsp; 欢迎大家登录我站，我站主要是为广大朋友精心制作的一个系统，希望大家能够在我站获得一个好心情，谢谢！</P><P>&nbsp;&nbsp;&nbsp; 自强不息，海纳百川，努力学习！</P>','2026-02-24 11:44:21');
insert into `dx`(`ID`,`leibie`,`content`,`addtime`) values('2','系统简介','<p>以人为本：公司的软、硬环境的设计和管理都应满足人性化的要求，让人性化的关怀触手可及。</p><p>公司精神:团队精神 创新精神 挑战精神 奉献精神</p><p>企业宗旨：诚信为本，稳健经营</p><p>企业价值观：与客户同忧乐</p>','2026-02-24 11:44:21');
insert into `dx`(`ID`,`leibie`,`content`,`addtime`) values('3','关于我们','&nbsp; &nbsp; 本公司坚持走:以质量求生存,以科技求发展,重合同守信用的道路,生产经营得到迅速发展。我们将以优质的产品和最完善的售后服务来真诚与各界朋友开展广泛的合作,共同创造一个美好的未来!<br />  <br />  公司行为准则:忠信仁义，以人为本。 <br />  忠：即忠诚，  包括三重含义：企业忠于国家、忠于民族；企业忠于客户；员工忠于企业。 <br />  信：即诚信，做企业要立足根本道德、信义，要诚实、讲信用。 <br />  仁：即仁爱，上司对下属要仁爱、体贴，同事之间要关怀、友爱。 <br />  义：即大义，公司在与合作伙伴、客户的交往过程中，不做损人利己的事，维护自己利益的前提是不损害他人利益；对民族、社会要共襄义举，要识大义，明是非。 <br />','2026-02-24 11:44:21');
insert into `dx`(`ID`,`leibie`,`content`,`addtime`) values('4','联系方式','联系人：xxxxxxxx<br />  电话：0000-0000000<br />  手机：010000000000<br />  传真：0000-0000000<br />  邮件：xxxxxxxx@163.com<br />  地址：您公司的地址<br />  网址：http://www.xxxx.com<br />','2026-02-24 11:44:21');
CREATE TABLE `enterprisehire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stationnumbers` varchar(50) DEFAULT NULL,
  `stationnamec` varchar(50) DEFAULT NULL,
  `wagesdaiyu` varchar(50) DEFAULT NULL,
  `qualificationrequirement` varchar(50) DEFAULT NULL,
  `agerequirement` varchar(50) DEFAULT NULL,
  `genderrequirement` varchar(50) DEFAULT NULL,
  `jobjingyan` varchar(50) DEFAULT NULL,
  `jobmode` varchar(50) DEFAULT NULL,
  `enterprisenamec` varchar(50) DEFAULT NULL,
  `lianxitel` varchar(50) DEFAULT NULL,
  `enterpriseaddress` varchar(50) DEFAULT NULL,
  `issh` varchar(10) DEFAULT '否',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('2','020','电工','A薪资待遇','高中以上','A年龄要求','女','前台接待','兼职','大小姐有限公司','13748589658','解放路73号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('3','021','快递员','B薪资待遇','大专以上','B年龄要求','男','技术员','兼职','南京医药股份有限公司','13052154877','泰兴路22号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('4','007','司机','C薪资待遇','其他学历','C年龄要求','不限','助理','全职','广州医药有限公司','13025896548','方城丽圆11幢201室','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('5','026','程序员','D薪资待遇','高中以上','D年龄要求','女','会计','全职','广州医药有限公司','18759640002','河滨东路139号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('6','010','普工','E薪资待遇','中专以上','E年龄要求','不限','前台接待','全职','苍南仪表有限公司','13623256544','龙翔路11号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('7','034','白领','F薪资待遇','中专以上','F年龄要求','女','服务员','兼职','上海市医药股份有限公司','13159863241','人民路57号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('8','015','销售员','G薪资待遇','大专以上','G年龄要求','不限','助理','全职','大小姐有限公司','13587835380','上江小区2幢','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('9','011','厨师','H薪资待遇','其他学历','H年龄要求','不限','助理','兼职','苍南仪表有限公司','13186835580','开明路22号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('10','030','教师','I薪资待遇','其他学历','I年龄要求','女','服务员','全职','星河网络有限公司','17706641413','建兴路138号','是','2026-02-24 11:44:21');
insert into `enterprisehire`(`id`,`stationnumbers`,`stationnamec`,`wagesdaiyu`,`qualificationrequirement`,`agerequirement`,`genderrequirement`,`jobjingyan`,`jobmode`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`issh`,`addtime`) values('11','001','保姆','J薪资待遇','其他学历','J年龄要求','女','文秘','兼职','星河网络有限公司','13769548711','鑫和锦园2栋','是','2026-02-24 11:44:21');
CREATE TABLE `enterpriseinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `enterprisenumbers` varchar(50) DEFAULT NULL,
  `enterprisenamec` varchar(50) DEFAULT NULL,
  `pic` varchar(50) DEFAULT NULL,
  `videosadvertising` varchar(50) DEFAULT NULL,
  `enterprisetypes` varchar(50) DEFAULT NULL,
  `fields` varchar(50) DEFAULT NULL,
  `incharger` varchar(50) DEFAULT NULL,
  `lianxitel` varchar(50) DEFAULT NULL,
  `signinfund` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `enterprisememo` varchar(500) DEFAULT NULL,
  `dianzan_d` int(11) DEFAULT '0',
  `dianzan_c` int(11) DEFAULT '0',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('2','024','大小姐有限公司','uploadfile/enterpriseinfos4.jpg','uploadfile/2.mp4','国有企业','医药行业','006','18759640002','76','上江小区2幢','ok','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('3','023','华莱士有限公司','uploadfile/enterpriseinfos3.jpg','uploadfile/2.mp4','私营企业','餐饮行业','015','13748589658','47','河滨东路139号','无','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('4','016','上海市医药股份有限公司','uploadfile/enterpriseinfos4.jpg','uploadfile/2.mp4','国有企业','服务行业','023','13489665487','83','鑫和锦园2栋','ok','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('5','028','上海市医药股份有限公司','uploadfile/enterpriseinfos7.jpg','uploadfile/2.mp4','国有企业','教育行业','009','13184865998','83','解放路73号','ok','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('6','011','大小姐有限公司','uploadfile/enterpriseinfos10.jpg','uploadfile/2.mp4','私营企业','教育行业','010','13623256544','73','龙翔路11号','没问题','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('7','012','九州通医药集团股份有限公司','uploadfile/enterpriseinfos9.jpg','uploadfile/2.mp4','合资企业','医药行业','026','17505772420','76','泰兴路22号','abc','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('8','015','南京医药股份有限公司','uploadfile/enterpriseinfos3.jpg','uploadfile/2.mp4','国有企业','教育行业','024','13587835380','47','复兴街27号','ok','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('9','034','大小姐有限公司','uploadfile/enterpriseinfos6.jpg','uploadfile/2.mp4','国有企业','IT行业','027','17706641413','88','人民路57号','没问题','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('10','006','九州通医药集团股份有限公司','uploadfile/enterpriseinfos10.jpg','uploadfile/2.mp4','私营企业','服务行业','012','13544655202','92','东城路99号','ok','0','0','2026-02-24 11:44:21');
insert into `enterpriseinfos`(`id`,`enterprisenumbers`,`enterprisenamec`,`pic`,`videosadvertising`,`enterprisetypes`,`fields`,`incharger`,`lianxitel`,`signinfund`,`address`,`enterprisememo`,`dianzan_d`,`dianzan_c`,`addtime`) values('11','001','星河网络有限公司','uploadfile/enterpriseinfos9.jpg','uploadfile/1771904835w5co.mp4','','','001','13910215489','51','开明路22号','ok','0','0','2026-02-24 11:44:21');
CREATE TABLE `goodsinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `goodsnumbers` varchar(50) DEFAULT NULL,
  `goodstypes` varchar(50) DEFAULT NULL,
  `goodsnamec` varchar(50) DEFAULT NULL,
  `goodspic` varchar(50) DEFAULT NULL,
  `stocks` varchar(50) DEFAULT NULL,
  `memo` varchar(500) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('2','018','G类型','S产品','uploadfile/goodsinfos7.jpg','70','无','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('3','015','F类型','C产品','uploadfile/goodsinfos4.jpg','21','无','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('4','010','H类型','B产品','uploadfile/goodsinfos10.jpg','25','没问题','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('5','014','C类型','P产品','uploadfile/goodsinfos2.jpg','14','暂无','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('6','017','A类型','G产品','uploadfile/goodsinfos10.jpg','14','ok','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('7','024','F类型','F产品','uploadfile/goodsinfos3.jpg','92','ok','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('8','002','H类型','J产品','uploadfile/goodsinfos2.jpg','38','没问题','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('9','006','E类型','N产品','uploadfile/goodsinfos1.jpg','17','abc','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('10','008','G类型','H产品','uploadfile/goodsinfos9.jpg','92','abc','2026-02-24 11:44:21');
insert into `goodsinfos`(`id`,`goodsnumbers`,`goodstypes`,`goodsnamec`,`goodspic`,`stocks`,`memo`,`addtime`) values('11','001','测试','K产品','uploadfile/goodsinfos3.jpg','30','ok','2026-02-24 11:44:21');
CREATE TABLE `goodstypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `types` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;
insert into `goodstypes`(`id`,`types`,`addtime`) values('2','A类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('3','B类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('4','C类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('5','D类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('6','E类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('7','F类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('8','G类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('9','H类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('10','I类型','2026-02-24 11:44:21');
insert into `goodstypes`(`id`,`types`,`addtime`) values('11','测试','2026-02-24 11:44:21');
CREATE TABLE `hiresignup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `signupby` varchar(50) DEFAULT NULL,
  `stationnumbers` varchar(50) DEFAULT NULL,
  `stationnamec` varchar(50) DEFAULT NULL,
  `qualificationrequirement` varchar(50) DEFAULT NULL,
  `enterprisenamec` varchar(50) DEFAULT NULL,
  `lianxitel` varchar(50) DEFAULT NULL,
  `enterpriseaddress` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=gb2312;
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('2','004','026','程序员','高中以上','广州医药有限公司','18759640002','河滨东路139号','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('3','028','021','快递员','大专以上','南京医药股份有限公司','13052154877','泰兴路22号','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('4','016','034','白领','中专以上','上海市医药股份有限公司','13159863241','人民路57号','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('5','013','007','司机','其他学历','广州医药有限公司','13025896548','方城丽圆11幢201室','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('6','002','030','教师','其他学历','星河网络有限公司','17706641413','建兴路138号','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('7','014','001','保姆','其他学历','星河网络有限公司','13769548711','鑫和锦园2栋','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('8','020','007','司机','其他学历','广州医药有限公司','13025896548','方城丽圆11幢201室','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('9','007','021','快递员','大专以上','南京医药股份有限公司','13052154877','泰兴路22号','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('10','005','010','普工','中专以上','苍南仪表有限公司','13623256544','龙翔路11号','2026-02-24 11:44:21');
insert into `hiresignup`(`id`,`signupby`,`stationnumbers`,`stationnamec`,`qualificationrequirement`,`enterprisenamec`,`lianxitel`,`enterpriseaddress`,`addtime`) values('12','001','001','保姆','其他学历','星河网络有限公司','13769548711','鑫和锦园2栋','2026-02-24 11:45:44');
CREATE TABLE `liuyanban` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `liuyan` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `huifu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
CREATE TABLE `pinglun` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `wenzhangID` varchar(255) DEFAULT NULL,
  `pinglunneirong` varchar(1000) DEFAULT NULL,
  `pinglunren` varchar(255) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biao` varchar(50) DEFAULT NULL,
  `pingfen` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
CREATE TABLE `shoucangjilu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `xwid` varchar(255) DEFAULT NULL,
  `biao` varchar(100) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ziduan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;
CREATE TABLE `usersinfos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usernames` varchar(50) DEFAULT NULL,
  `names` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `idcard` varchar(50) DEFAULT NULL,
  `memo` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=gb2312;
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('2','007','舒畅','男','001','13748589658','330327199504059511','ok','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('3','022','何永康','女','001','18956482221','33032719900723568X','abc','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('4','019','陈明希','男','001','17706641413','330327198615482633','无','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('5','010','沈古璐','男','001','17505772420','330327198406150488','无','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('6','034','郑亚斌','女','001','13910215489','330327199010142546','没问题','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('7','006','邓超','女','001','13544655202','330327199005060003','abc','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('8','023','王与馨','男','001','13052154877','330327198811020456','暂无','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('9','021','吴官本','女','001','13489665487','330327198805060222','无','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('10','020','冯子杰','男','001','13623256544','330327198501020300','没问题','2026-02-24 11:44:21');
insert into `usersinfos`(`id`,`usernames`,`names`,`gender`,`pwd`,`phone`,`idcard`,`memo`,`addtime`) values('11','001','黄行阳','女','001','13186835580','330327198708070789','ok','2026-02-24 11:44:21');
CREATE TABLE `xinwentongzhi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `biaoti` varchar(500) DEFAULT NULL,
  `leibie` varchar(50) DEFAULT NULL,
  `neirong` text,
  `tianjiaren` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `shouyetupian` varchar(50) DEFAULT NULL,
  `dianjilv` int(11) DEFAULT '1',
  `zhaiyao` varchar(800) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=gb2312;
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('206','fewgewg','变幻图','','hsg','2026-02-24 11:44:21','uploadfile/1.jpg','2','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('207','grhrthtr','变幻图','','hsg','2026-02-24 11:44:21','uploadfile/2.jpg','3','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('208','grthtrjjrt','变幻图','','hsg','2026-02-24 11:44:21','uploadfile/3.jpg','5','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('209','vdsb','变幻图','bfdbdf','hsg','2026-02-24 11:44:21','uploadfile/4.jpg','3','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('210','jtjy','变幻图','tjyt','hsg','2026-02-24 11:44:21','uploadfile/5.jpg','6','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('211','习近平抵达塔什干 开始访问乌兹别克斯坦','站内新闻','<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">新华网塔什干9月8日电 中国国家主席习近平8日抵达塔什干，开始对乌兹别克斯坦进行国事访问。</P>
<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">访问期间，习近平将同卡里莫夫总统举行会谈，并会见参议院主席萨比罗夫，就深化双边关系、推动互利合作等问题交换意见。据悉，两国元首还将签署并发表成果文件，双方有关部门和企业将签署一系列双边合作文件。</P>
<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">中国与乌兹别克斯坦1992年建交，此后两国关系保持健康稳定快速发展的良好势头。两国高层交往日益密切，政治互信不断加深。2012年卡里莫夫总统访华期间，两国建立了战略伙伴关系。双方在经贸、能源、安全、人文等领域务实合作不断扩大，取得丰硕成果。今年上半年，双边贸易额达21.25亿美元，同比增长53.5%，增长势头强劲。中国已成为乌第二大贸易伙伴和第一大棉花出口目的国。</P>
<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">卡里莫夫总统不久前在会见中国外交部长王毅时表示，乌方期待习近平主席对乌进行国事访问，希望通过此访提升乌中战略伙伴关系，深化两国务实合作。</P>
<P style=\"TEXT-INDENT: 30px; MARGIN: 0px 3px 15px\">习近平是在圆满结束对哈萨克斯坦的国事访问后从阿拉木图抵达塔什干的。习近平还将对吉尔吉斯斯坦进行国事访问，并出席在吉尔吉斯斯坦比什凯克举行的上海合作组织成员国元首理事会第十三次会议。</P><!--/enpcontent-->','hsg','2026-02-24 11:44:21','uploadfile/sytp1.jpg','8','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('212','美国华人“春晚”要在温州设分会场','站内新闻','&nbsp;&nbsp;&nbsp; 2011年美国华人春节联欢会定于明年1月23日在温州设分会场，美国华人群体将送来有特色的节目。该联欢会定于明年1月30日在美国洛杉矶设立主会场，我市将选送具有温州地方特色的节目如歌曲《对鸟》、《叮叮当》和瓯剧传统节目《吕布与貂蝉》到洛杉矶为美国华人表演。 
<P>　　2011年美国华人春节联欢会温州分会场由市委宣传部、市委统战部、市广播电视总台、美中文化协会主办，广发银行温州分行冠名赞助。明年1月23日，温州分会场在温州体育馆举行，晚会以温州本土精品节目为主。主会场和分会场的演出经现场录制、剪辑后，将在中央电视台、浙江卫视、市广播电视总台相关频道播出。</P>
<P>　　美国华人春节联欢会自2005年以来已经成功举办6届，由美中文化协会主办，温州华侨参与其中。</P>
<P>　　温州有60万人在世界各地创业发展，其中在美国23万人。在美国的温州人在创造财富、取得个人成就的同时，不忘文化建设，他们积极参与美国当地的文化交流和文化活动。美国洛杉矶温州商会经过牵线搭桥，促成美国华人春节联欢会首次在国内开设分会场，展示温州优秀地方文化特色，彰显温州城市魅力。（记者 黄小玲）</P></FOUNDER-CONTENT>
<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end-->','hsg','2026-02-24 11:44:21','uploadfile/sytp2.jpg','34','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('213','市区“四小车”整治方案昨听证','站内新闻','<TABLE align=center>
<TBODY>
<TR>
<TD><IMG src=\"http://www.wenzhou.gov.cn/picture/0/110506064551072.jpg\" border=0></TD></TR></TBODY></TABLE><!--<$[信息内容]>begin--><!--ZJEG_RSS.content.begin-->
<META name=ContentStart>
<P align=center><FONT face=仿宋_GB2312>图为听证会现场。王诚 摄</FONT></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 市区“四小车”（机动三轮车、残疾人机动轮椅车、摩托车和人力客运三轮车）综合整治专项行动实施方案听证会昨天（5月5日）举行，应到的16名听证代表悉数到场，30余名列席人员参加。这场听证会进行了近3个小时，其目的是公开收集社会各界对“四小车”整治的意见和建议。</P>
<P>　　昨天的16名听证代表中，有摩托车主代表、人力三轮车夫代表、残疾人机动轮椅车车主代表、电动车生产厂家代表等。代表们都支持市区“四小车”整治，但就整治力度该循序渐进还是一步到位、整治范围该怎样划分、整治后市民出行如何解决等问题，做了一番探讨。其中，摩托车、三轮车的整治，成为探讨的关键所在。</P>
<P>　　尽管有不同的声音，但赞成“四小车”整治几乎成了听证代表们的共识。据悉，这些意见和建议经整理后，“四小车”综合整治领导小组办公室将向市委、市政府汇报。</P>
<P><STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 循序渐进还是一步到位？</STRONG></P>
<P>　　市人大代表郑奇芳称，“四小车”整治已是刻不容缓，必须建立长效管理机制，不能一阵风过去就算了。</P>
<P>　　支持“四小车”整治的市民代表刘良友认为，在三轮车整治问题上，“应该逐步淘汰，循序渐进。”</P>
<P>　　人力三轮车夫代表周步清表示服从政府的决策，但希望能更多地征询三轮车夫的意愿和想法。</P>
<P>　　市民代表郭作仁认为，摩托车、三轮车的淘汰，应该逐步过渡，有关部门应该多考虑淘汰后，市民的出行问题。市民代表王国荣认为，要整治就要彻底，不要留有尾巴。他说自己一些外地朋友来温，“高高兴兴到温州，堵堵堵堵到门口，‘四小车’的存在，严重影响了温州的城市形象。”</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <STRONG>限行范围如何选择？</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 整治方案中，市区中心区域的摩托车、人力三轮车的限制通行范围，都有一小一大两套方案（见下图）。</P>
<P align=center><FONT face=仿宋_GB2312>
<META name=ImageStart><IMG height=454 src=\"http://www.wenzhou.gov.cn/picture/0/110506064635205.jpg\" width=458 border=0> 
<META name=ImageEnd></FONT></P>
<P align=center><FONT face=仿宋_GB2312>
<META name=ImageStart><IMG height=332 src=\"http://www.wenzhou.gov.cn/picture/0/110506064641751.jpg\" width=496 border=0> 
<META name=ImageEnd></FONT></P>
<P>　　对于“禁摩”范围，市民代表欧阳后增倾向于大范围，他认为大范围“禁摩”才能更彻底。但对人力三轮车的禁行范围，他则倾向先从小范围入手，逐步扩大。而市民代表马军建在“禁摩”问题上，则认为应该先从小范围开始。</P>
<P>　　不少代表建议范围还应进一步扩大。市交通局推荐代表刘允平认为，车站、码头、机场、各高速入口是城市的形象窗口，也应纳入重点整治重点区域；政协委员虞友义认为，区域应该扩大到仰义那一带去。</P>
<P><STRONG>　　补偿问题如何解决？ </STRONG></P>
<P><STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </STRONG>市民代表马军建认为，应该适当提高补偿力度，建议以非现金方式发放，避免在操作过程中漫天要价、暗箱操作。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 残疾人机动轮椅车车主代表陈孝林认为，残疾人是弱势群体，这部分人群的家庭负担如何解决，值得重视。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 政协委员虞友义希望，“在三轮车淘汰的补偿问题上，最好能研究出激励机制，让车主主动前来置换。”</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 专家代表徐明武则认为，三轮车被淘汰后，可引导人力车夫转岗，比如从事物流方面的工作，政府在政策上应给予适当倾斜。</P>
<P>&nbsp;<STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 电动车该不该纳入整治？</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 一些代表认为，实行“禁摩”后，可能很多人会选择电动车，而电动车在危害性上与摩托车相近，应该把电动车也纳入整治对象。市民代表王国荣就认为，电动车如果不整治，会事与愿违，今后摩托车全变成电动车。</P>
<P>　　电动车生产厂家代表金崇火则称，目前温州路面上的电动车，确实都是超标的。“四小车”整治后，市民都去买汽车不现实，那么发展电动车是有必要的。他希望能对电动车进行规范管理，符合标准的，准许上牌。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;<STRONG>&nbsp;&nbsp;&nbsp; 市民出行该如何保障？</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 市人大代表郑奇芳认为，有部分老年人，对三轮车还是有依赖的，她希望将小部分三轮车用于社区载客上，严格规定范围和时间，不得转租或外借，加以规范。</P>
<P>　　77岁的市民代表叶志生认为，不是每个社区都有公交站点，三轮车淘汰后，他希望能更加完善公交线路。</P>
<P>　　摩托车主代表陈墀民认为，小汽车发展速度过快，才是交通拥堵的主要问题，“现在房子都限购了，小汽车能否也采取限购措施？”</P>
<P>　　市民代表王国荣认为，寒、暑假期间，市区道路会通畅许多，主要是平时家长接送孩子加剧了道路拥堵。“建议应该投入公交校车，学生统一由公交校车接送，避免私家车过多上路。”</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<STRONG>&nbsp;&nbsp; 部分代表观点</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 市公安局推荐代表郑上勇：<FONT face=仿宋_GB2312>从交通工程学上来说，一辆摩托车、汽车、公交车载客分别约是2人、5人、80人，在相同等量的载客数下，每增加10000辆摩托车，意味着比汽车多占用17万平方米的道路资源。因此，“四小车”是比较低级的交通工具，它的存在，影响了我市的道路通行速度。</FONT></P>
<P>　　市民代表欧阳后增：<FONT face=仿宋_GB2312>建议将残疾车折价更换后，变成不带后斗的残疾人代步车，这样就无法营运，但可以方便他们自己出行。</FONT></P>
<P>　　电动车生产厂家代表金崇火：<FONT face=仿宋_GB2312>杭州推出自行车出租，我们是否也可以推行这一政策，解决一部分人的出行代步问题。</FONT></P>
<P>　<STRONG>　整治小组看法</STRONG></P>
<P>　<FONT face=仿宋_GB2312>　“四小车”综合整治领导小组办公室相关人士认为，代表们的建议和意见非常宝贵。该人士认为，三轮车、摩托车的存在，给无牌无证三轮车、摩托车提供了很多条件，这些所谓的无牌无证车辆，其实都是假牌、假证车辆。去年，交警部门查处了3万多辆无牌无证三轮车，但查完后，他们又继续买、继续骑，执法成本很高，违法成本很低。</FONT></P>
<P><FONT face=仿宋_GB2312>　　对于市民出行问题，该人士认为要实现完全点对点的解决，确实不现实。他认为主要问题是温州人的出行习惯，“一段三百米、五百米的道路，也不愿步行，城市的公交再发达，也不可能这样设置站点。”该人士称，习惯的改变需要一个过程。</FONT></P>
<P><FONT face=仿宋_GB2312>　　对于“禁摩”问题，他称汽车排队时，摩托车不会跟着排队，摩托车总是会在中间穿插，一有空隙就横冲直撞，一旦绿灯放行，汽车被挡住去路，通行效率大打折扣。</FONT></P>
<P><STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <FONT color=#ff0000>市区“四小车”目前整治方案</FONT></STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 根据目前的方案，市区“四小车”综合整治时间安排在5月初至12月底，2012年1月开始进入长效管理阶段。&nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<STRONG>&nbsp;&nbsp; 整治对象：</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <FONT face=仿宋_GB2312>市区范围内的机动三轮车（包括电动三轮车、燃油三轮摩托车等机械动力装置驱动的三轮车）、残疾人机动轮椅车、摩托车和人力客运三轮车。</FONT>&nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<STRONG> 整治重点区域：</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <FONT face=仿宋_GB2312>北以瓯江为界，东至上江路，西至娄东大街、翠微大道过境路、泰力路，南至瓯海大道（不含上述道路）环线范围内的大街小巷；以及宁波路以西，瓯海大道以南，大连路以北，福州路以东范围内温州南火车站周边的大街小巷（含上述道路，不含瓯海大道辅路）。</FONT>&nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <STRONG>机动三轮车专项整治：</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<FONT face=仿宋_GB2312>&nbsp;&nbsp; 5月份，由市质监局、市工商局、市公安局联合发布通告，从6月1日起，我市禁止生产企业、商家生产和销售不符合机动车安全标准的机动三轮车，市区严禁机动三轮车上路通行和非法营运。6月1日起，对驾驶机动三轮车违禁驶入市区管制道路、违法停放、违反交通信号通行等行为，交警部门依法从严管理；对驾驶无牌无证机动三轮车上路行驶的，一律扣留车辆，依法给予罚款处罚；对未取得机动车驾驶证上路的，除罚款外，并处行政拘留处罚。</FONT>&nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;<STRONG>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 残疾人机动轮椅车专项整治：</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <FONT face=仿宋_GB2312>6月1日起，市牌残疾人机动轮椅车非法营运的，由运管部门按照《温州市区残疾人机动轮椅车管理办法》、《浙江省道路运输管理条例》第五十八条规定，责令停止经营，没收违法所得，处1万元以上3万元以下罚款。残疾人机动轮椅车无牌、闯禁、非法拼装、健全人驾驶残疾人机动轮椅车等行为，由交警部门依法严厉查处。同时，劳动保障和民政部门要将符合低保或困难家庭条件的残疾车车主家庭纳入保障范围，协助各区政府做好相关帮扶、安置工作。</FONT>&nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <STRONG>摩托车专项整治：</STRONG></P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <FONT face=仿宋_GB2312>一是停止温州市区摩托车更新，由市政府发布通告，自5月起，市牌、A牌摩托车（瓯海辖区的摩托车）报废、转出和被盗未追回的不予更新车辆；T牌摩托车（龙湾辖区的摩托车）继续执行原政策，不予过户，报废后不予更新。现有的执法、抢险、邮政用的市区牌照摩托车，报“四小车”综合整治工作领导小组办公室审核批准后，允许报废更新，但不允许新增。</FONT></P>
<P><FONT face=仿宋_GB2312>&nbsp;&nbsp;&nbsp; 二是市区中心区域部分路段限制摩托车通行。从6月1日起，市区中心城区部分道路禁止市牌摩托车通行（具体范围现有两套方案），现有的执法、抢险、邮政用摩托车和军警号牌摩托车不纳入禁行范围。</FONT></P>
<P><FONT face=仿宋_GB2312>&nbsp;&nbsp;&nbsp; 三是摩托车到期报废自然淘汰，并补偿牌照费。市牌、A牌摩托车已到强制报废年限和未到报废年限，本人自愿要求提前办理报废手续的，以及此前已办理报废手续或者转出外地但未更新车辆的，摩托车被盗未追回的，政府参照当前市场行情并由物价部门进行测算评估和核准后，予以补偿牌照费。</FONT>&nbsp;&nbsp;</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;<STRONG>&nbsp;&nbsp;&nbsp; 人力三轮车专项整治：</STRONG></P>
<P><FONT face=仿宋_GB2312>&nbsp;&nbsp;&nbsp;&nbsp;一是6月1日起，中心城区限制人力三轮车通行（限行范围有两套方案）。</FONT></P>
<P><FONT face=仿宋_GB2312>&nbsp;&nbsp;&nbsp; 二是对在市区交通管制区域内的人力客运三轮车进行回收淘汰。8月份开始，市区管制区范围内的有牌人力三轮车，由各区人民政府及市相关部门和单位派人专门到回收置换点开展工作，对车辆进行核实后予以回收，由各区人民政府负责给车主发放车辆回收补偿金和落实安置措施。经济补偿方式将参照当前市场行情，并由物价部门进行测算评估和核准后，政府按照一定标准予以经济补偿。另还有安排就业、社会保障等其他配套安置措施。</FONT></P>
<P><FONT face=仿宋_GB2312>&nbsp;&nbsp;&nbsp; 三是市区管制区内禁止人力三轮车通行。年底前，市区交通管制区环线范围内的大街小巷，禁止人力三轮车通行，对闯禁的有牌人力三轮车严管，对无牌无证人力三轮车坚决予以取缔。</FONT></P>','hsg','2026-02-24 11:44:21','uploadfile/sytp3.jpg','63','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('214','多吃土豆生儿子几率更大','站内新闻','<P class=summary>&nbsp;&nbsp;&nbsp; 核心提示：据《澳大利亚人》报近日报道，丹麦研究人员发现，怀孕前几周，多吃含钙、镁高的水果蔬菜，会增加生女儿的几率。而多吃含钾、钠的食物，如香蕉和土豆，则会增加生儿子的几率。</P>
<DIV id=contentText class=art-con-show>
<P>　　据《澳大利亚人》报近日报道，丹麦研究人员发现，<A href=\"http://baby.39.net/hy/\" target=_blank jQuery180004702021551195973=\"1\" keycmd=\"null\">怀孕</A>前几周，多吃含钙、镁高的水果蔬菜，会增加生女儿的几率。而多吃含钾、钠的食物，如<A href=\"http://ypk.39.net/zcy/qry/7ee7d.html\" target=_blank jQuery180004702021551195973=\"2\" keycmd=\"null\">香蕉</A>和<A href=\"http://spk.39.net/shipin/shucai/jgl/e0784.html\" target=_blank jQuery180004702021551195973=\"3\" keycmd=\"null\">土豆</A>，则会增加生儿子的几率。</P>
<P>　　丹麦科学家花5年时间跟踪调查了172对想生女儿的夫妇。每名女性在怀孕前9周内的膳食多以果蔬和<A href=\"http://spk.39.net/shipin/liangshi/milei/e043a.html\" target=_blank jQuery180004702021551195973=\"4\" keycmd=\"null\">米饭</A>为主，这样<A href=\"http://fitness.39.net/tzgj/fit/foodshow?q=news&amp;fid=3469\" target=_blank jQuery180004702021551195973=\"5\" keycmd=\"null\">无</A>疑升高了她们<A href=\"http://ksk.39.net/zz4/bumen/37b63.html\" target=_blank jQuery180004702021551195973=\"6\" keycmd=\"null\">血液</A>中的钙与镁的水平。</P>
<P>　　5年后，只有32对夫妇坚持下来，其中26对夫妇生了女儿，6对生了儿子。</P></DIV>
<P class=summary>核心提示：据《澳大利亚人》报近日报道，丹麦研究人员发现，怀孕前几周，多吃含钙、镁高的水果蔬菜，会增加生女儿的几率。而多吃含钾、钠的食物，如香蕉和土豆，则会增加生儿子的几率。</P>
<DIV id=contentText class=art-con-show>
<P>　　据《澳大利亚人》报近日报道，丹麦研究人员发现，<A href=\"http://baby.39.net/hy/\" target=_blank jQuery180004702021551195973=\"1\" keycmd=\"null\">怀孕</A>前几周，多吃含钙、镁高的水果蔬菜，会增加生女儿的几率。而多吃含钾、钠的食物，如<A href=\"http://ypk.39.net/zcy/qry/7ee7d.html\" target=_blank jQuery180004702021551195973=\"2\" keycmd=\"null\">香蕉</A>和<A href=\"http://spk.39.net/shipin/shucai/jgl/e0784.html\" target=_blank jQuery180004702021551195973=\"3\" keycmd=\"null\">土豆</A>，则会增加生儿子的几率。</P>
<P>　　丹麦科学家花5年时间跟踪调查了172对想生女儿的夫妇。每名女性在怀孕前9周内的膳食多以果蔬和<A href=\"http://spk.39.net/shipin/liangshi/milei/e043a.html\" target=_blank jQuery180004702021551195973=\"4\" keycmd=\"null\">米饭</A>为主，这样<A href=\"http://fitness.39.net/tzgj/fit/foodshow?q=news&amp;fid=3469\" target=_blank jQuery180004702021551195973=\"5\" keycmd=\"null\">无</A>疑升高了她们<A href=\"http://ksk.39.net/zz4/bumen/37b63.html\" target=_blank jQuery180004702021551195973=\"6\" keycmd=\"null\">血液</A>中的钙与镁的水平。</P>
<P>　　5年后，只有32对夫妇坚持下来，其中26对夫妇生了女儿，6对生了儿子。<BR>众所周知，<A href=\"http://baby.39.net/yingeq/\" target=_blank jQuery180004702021551195973=\"7\" keycmd=\"null\">婴儿</A>的性别由进入卵子的精子所携带的性<A href=\"http://jck.39.net/jiancha/huaxue/dna/4e5f2.html\" target=_blank jQuery180004702021551195973=\"8\" keycmd=\"null\">染色体</A>决定。但是科学家认为，女性血液中的<A href=\"http://hzpk.39.net/hz/hufu/ms/5d6dd.html\" target=_blank jQuery180004702021551195973=\"9\" keycmd=\"null\">矿物质</A>含量会决定受精卵所含的性染色体，以此来决定孩子性别。</P>
<P>　　研究者认为，由于携带女性性染色体(X)的精子到达卵子的时间比男性性染色体(Y)要长，所以夫妻如果在排卵前3―4天进行<A href=\"http://xbk.39.net/xbk/9b539.html\" target=_blank jQuery180004702021551195973=\"10\" keycmd=\"null\">性生活</A>，生女儿的几率就会增加。如果在排卵期的中间时间受孕成功，那么生儿子的几率就会更大。</P>
<P><BR></P></DIV>','hsg','2026-02-24 11:44:21','uploadfile/sytp4.jpg','4','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('215','钱库项桥社区党员基金会成立','站内新闻','<DIV>&nbsp;&nbsp;&nbsp; 为营造党内外关心关爱氛围，促进社会和谐，进一步增强党组织的凝聚力和号召力，7月27日，钱库镇项桥社区党员基金会成立大会暨现场募捐活动举行，100多名企业家、党员及村干部为基金会捐资，当场筹集基金86600元。<BR><BR></DIV>&nbsp;&nbsp;&nbsp; 据了解，项桥社区党员基金会以“党员带头，社会参与，关爱民生，促进和谐”为宗旨，严格按照国务院《基金会管理条例》有关规定，成立基金会理事会、监事会，设立基金会办公室，建立健全相关规章制度，管理、运作好基金，确保基金会规范、健康、高效运作。基金筹集的主要来源为各企业的赞助，党员、居民的捐款，上级的资助及社会各界的捐赠。主要用于困难党员、困难群众、和弱势群体的慰问补助等经费支出。（缪克梯）','hsg','2026-02-24 11:44:21','uploadfile/sytp5.jpg','7','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('216','马晓晖调研交通治堵工作','站内新闻','<P>　　10月24日，市委副书记马晓晖率队来到鹿城、龙湾、瓯海几处断头路、拥堵点，调研各地交通治堵工作落实情况，要求各地各部门严格按计划一步步落实任务措施，在年内争取“啃下几块硬骨头”，完成既定目标，取得实质性进展。</P>
<P>　　马晓晖一行实地查看了桃花岛规划三四五路、永中西路东延工程、福州路二期、牛山北路鹿城段、双龙路西延工程等列入全市交通治堵工作的项目，了解近期我市公交专用道建设的进展计划，并来到温瑞大道与东','hsg','2026-02-24 11:44:21','uploadfile/sytp6.jpg','25','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('217','2010年浙江省全民健身浙东片区“种文化”海洋体育活动实施方案','站内新闻','<DIV align=left>附件：</DIV>
<DIV align=center>2010年浙江省全民健身浙东片区“种文化”</DIV>
<DIV align=center>海洋体育活动实施方案</DIV>
<DIV align=left>&nbsp;</DIV>
<DIV align=left>一、主办单位</DIV>
<DIV align=left>&nbsp;&nbsp; 中共浙江省委宣传部 浙江省体育局 浙江省总工会</DIV>
<DIV align=left>二、承办单位</DIV>
<DIV align=left>&nbsp;&nbsp; 中共宁波市委宣传部 宁波市体育局 宁波市总工会 宁海县人民政府</DIV>
<DIV>三、协办单位</DIV>
<DIV>&nbsp;&nbsp; 宁海县体育局&nbsp; 宁海县西店镇人民政府</DIV>
<DIV>四、比赛时间及地点</DIV>
<DIV>&nbsp;&nbsp; 2010年7月19―22日 宁海县西店镇</DIV>
<DIV>五、组别设置</DIV>
<DIV>&nbsp;&nbsp; 本次浙东片区海洋体育展示大会分省级体育强镇乡、街道组，青少年体育俱乐部组，先进体育总会（社团）组三个组别。</DIV>
<DIV>六、参加办法</DIV>
<DIV>&nbsp;&nbsp; （一）海洋特色体育项目展示</DIV>
<DIV>&nbsp;&nbsp; 1、参加海洋特色体育项目滩涂运动会的代表队，可预送1个集体表演节目内容，以民间民俗文化体育为主，要具有鲜明的地方特色和较强的观赏性，每个节目表演人数尽量控制在15人以内，表演时间6分钟左右。</DIV>
<DIV>&nbsp;&nbsp; 2、参加青少年户外体育活动的各学校参赛队伍可选送1个集体文体表演节目，形式不限。</DIV>
<DIV>（二）海洋特色体育项目滩涂运动会参加办法</DIV>
<DIV>&nbsp;&nbsp; 1、以2010年创建省级体育强镇乡、街道（社区）的单位为组队对象。每队可报领队1名、教练员1名、运动员及工作人员10名（男运动员6名、女运动员4名），共计12人，计划30支队。</DIV>
<DIV>&nbsp;&nbsp; 2、参赛人员收取相应费用。运动员必须属本县（市、区）户籍居民，每名运动员限报2个项目；</DIV>
<DIV>&nbsp;&nbsp; 3、参加运动员必须办理赛事期间的人身意外伤害保险；</DIV>
<DIV>&nbsp;&nbsp; 4、参加运动员必须是经各县（市、区）医疗机构的体检适宜激烈运动的身体健康者。</DIV>
<DIV>&nbsp;&nbsp;&nbsp;5、参加运动员男子不得超过60周岁、女子不得超过55周岁。</DIV>
<DIV>&nbsp;&nbsp; 6、在校学生不得参加。</DIV>
<DIV>&nbsp;&nbsp; 7、各组顺序、组别以大会抽签决定进行比赛。</DIV>
<DIV>（三）全省青少年户外体育活动参赛办法</DIV>
<DIV>&nbsp;&nbsp; 1、以2009年省级青少年体育俱乐部和2010年创建省级青少年体育俱乐部的中小学校组队参加，计划30个队。每队可报领队1名、教练1名、运动员6名（男女各3名）。</DIV>
<DIV>&nbsp;&nbsp; 2、参赛人员收取相应费用。运动员必须属本县（市、区）户籍居民，经各县（市、区）医疗机构检查适宜激烈运动的身体健康者，每人限报1项。</DIV>
<DIV>（四）体育总会（社团）滩涂速滑比赛参赛办法</DIV>
<DIV>&nbsp;&nbsp; 1、以省级先进体育总会（社团）为组队对象，每队可报领队1名、教练员1名，运动员2名，共计4人，计划12支队。</DIV>
<DIV>&nbsp;&nbsp; 2、参赛人员收取相应费用。运动员必须属本县（市、区）户籍居民，经各县（市、区）医疗机构检查适宜激烈运动的身体健康者，每人限报1项。</DIV>
<DIV>七、比赛项目与竞赛办法</DIV>
<DIV>（一）海洋特色体育项目比赛</DIV>
<DIV>&nbsp;&nbsp; 1、4×50米滩涂障碍接力。每队4名运动员参加比赛（2男2女），站在25米比赛场地的起跑线上，第1号队员手持接力棒在起跑线待命，听到裁判员发令后，迅速向前奔跑，越过2个障碍经折返点返回起点，将接力棒交给第2名运动员……依此类推。以用时少的队名次列前。</DIV>
<DIV>&nbsp;&nbsp; 2、滩涂套缆绳。每队派1名运动员参加，运动员站在甩绳区内手持缆绳待命，听到裁判员发令后，将手中的缆绳甩向5米远的水桶，套住水桶并迅速拉回到甩绳区，在5分钟之内以拉回的水桶数量多者为胜，如遇数量相同则进行第二轮复赛。</DIV>
<DIV>&nbsp;&nbsp; 3、滩涂背新娘。每队派2名运动员参加（男女各1名），男运动员将女运动员以背和抱等方式使女运动员的肢体脱离地面，听到裁判员发令后，迅速奔向30米远的终点，以用时少者为胜，途中女运动员肢体不准接触地面。</DIV>
<DIV>&nbsp;&nbsp; 4、滩涂速滑。每队可派1名运动员参赛（男女均可），运动员站在50米比赛场地的起跑线上待命，双手或单手扶“泥马”小船，一脚踏在或跪在“泥马”小船上，一脚踩在滩涂上，听到裁判员发令后，单脚用力蹬地驾“泥马”小船向前，如在蹬地驾“泥马”小船时，双脚踩地成绩无效。每人一次机会，以用时少名次列前。</DIV>
<DIV>&nbsp;&nbsp; 5、滩涂寻宝。每队可派1名运动员参赛。每名运动员在指定的范围内进行寻宝比赛（挖蛏子），在30分钟内计重，以蛏子多者名次列前。</DIV>
<DIV>（二）全省青少年户外体育活动</DIV>
<DIV>&nbsp;&nbsp; 1、滩涂速滑。每队可派1名运动员参赛（男女均可），运动员站在50米比赛场地的起跑线上待命，双手或单手扶“泥马”小船，一脚踏在或跪在“泥马”小船上，一脚踩在滩涂上，听到裁判员发令后，单脚用力蹬地驾“泥马”小船向前，如在蹬地驾“泥马”小船时，双脚踩地成绩无效。每人一次机会，以用时少名次列前。</DIV>
<DIV>&nbsp;&nbsp; 2、4×50米滩涂障碍接力。每队4名运动员参加比赛（2男2女），站在25米比赛场地的起跑线上，第1号队员手持接力棒在起跑线待命，听到裁判员发令后，迅速向前奔跑，越过5个障碍经折返点返回起点，将接力棒交给第2名运动员……依此类推。以用时少的队名次列前。</DIV>
<DIV>&nbsp;&nbsp; 3、滩涂寻宝。每队可派1名运动员参赛。每名运动员在指定的范围内进行寻宝比赛（挖蛏子），在30分钟内计重，以蛏子多者名次列前。</DIV>
<DIV>（三）体育总会（社团）滩涂速滑比赛</DIV>
<DIV>&nbsp;&nbsp; 滩涂速滑。每队可派2名运动员参赛（男女均可），运动员站在50米比赛场地的起跑线上待命，双手或单手扶“泥马”小船，一脚踏在或跪在“泥马”小船上，一脚踩在滩涂上，听到裁判员发令后，单脚用力蹬地驾“泥马”小船向前，如在蹬地驾“泥马”小船时，双脚踩地成绩无效。每人一次机会，以用时少名次列前。</DIV>
<DIV>八、录取办法</DIV>
<DIV>&nbsp;&nbsp; 1、表演项目设一等奖、二等奖、三等奖。</DIV>
<DIV>&nbsp;&nbsp; 2、团体总分及单项均取前8名，如单项比赛参赛队伍不足8个队时按实际参赛队录取。</DIV>
<DIV>九、报名与报到</DIV>
<DIV>&nbsp;&nbsp; （一）请各代表队于2010年7月10日前将报名表和展示节目（含节目解说词200字）一式二份分别报送浙江省体育局群体处和宁海县体育局。浙江省体育局群体处联系人：蔡琳，电话（传真）：0571-85061759；宁海县体育局联系人：徐珊，电话：0574-59997375，传真：0574-59997123，邮编：315600</DIV>
<DIV>&nbsp;&nbsp; （二）各代表队报到时间及地点另行通知。</DIV>
<DIV>十、经费</DIV>
<DIV>&nbsp;&nbsp; 各参赛队来往交通费、食宿费自理。每人交食宿费240元，超编人员350元，其他经费由大会负责。</DIV>
<DIV>&nbsp;&nbsp;&nbsp; 未尽事宜，另行通知。</DIV>
<DIV>&nbsp;</DIV>
<DIV>附：1、海洋特色体育项目比赛报名表</DIV>
<DIV>2、全省青少年户外体育活动比赛报名表</DIV>
<DIV>3、体育总会（社团）滩涂速滑比赛报名表</DIV>
<DIV>4、海洋特色体育项目展示和文体表演报名表</DIV>','hsg','2026-02-24 11:44:21','uploadfile/sytp7.jpg','44','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('218','见钱眼开“新手上路” 涉毒三日即落法网','站内新闻','&nbsp;&nbsp;&nbsp; 12月14日消息：最近，民警在灵溪镇某宾馆前抓获一名正要进行毒品交易的犯罪嫌疑人吕某。涉毒三日即落法网的吕某，还不知道他的上家到底是谁。
<P>&nbsp;&nbsp;&nbsp; 近日，县公安局灵溪中心派出所接到群众举报称，一个男子在灵溪镇辖区内活动频繁，毒品卖得很“嚣张”。接报后，该所民警最终查实确有一个20出头的青年男子身上藏毒，并打算于11月29日晚进行一笔交易，地点选在灵溪镇一家宾馆。29日晚，民警廖某早早就和同事埋伏在宾馆附近等待男子出现，伺机抓捕。9点半左右，一辆人力三轮车载着一男子来到宾馆，该男子和民警之前侦查所获得的毒贩信息基本吻合。民警抓住最佳时机，把男子堵在宾馆门口，男子未来得及作反抗就被狠狠按住，不能动弹。民警从男子身上搜出8小包冰毒。</P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 据查，毒贩吕某20岁，算是一个“新手”，两天前才接触毒品，第三天就落网了。当说起涉毒经历时，吕某显得无知和天真。吕某原先在平阳县鳌江镇一家酒店做服务生，由于嫌弃工资低吃不了苦，再加上受到一名网友的怂恿，他离开了酒店来到灵溪镇。但吕某并没有找到工作，经常和一群人吃喝玩乐，租着每晚几十块钱的小旅馆作栖身之用。</P>
<P>&nbsp;&nbsp;&nbsp; 案发前10天，吕某在灵溪镇商业城一酒吧喝酒。酒喝到一半，一名中年男子上来向其搭讪。吕某没管对方是谁就和对方聊起了天。相互熟识以后，中年男子便很直接地向吕某介绍“生意”，称只要送送东西，每天就能有300块钱的进账，吕某见钱眼开，不加判断就答应了。几天后，中年男子把自己租住的房间让给了吕某，甚至还买了个手机送上作为联系之用。有了新手机后，中年男子常常给吕某打电话。</P>
<P>&nbsp;&nbsp;&nbsp; 11月26日凌晨，吕某被急促的电话铃声吵醒。电话那头的中年男子告诉吕某，称“东西”已经放在某街桥头的某个隐蔽位置，用砖块压着，务必火速取回，事后有回报。（通讯员 林传如）</P>
<P>&nbsp;&nbsp;&nbsp; 虽然吕某事后发现这些“东西”就是毒品，但他却没有想太多，依然走上了贩毒的路子。中年男子很狡猾，他一般都会事先把毒品放在某一地点，然后联系吕某。落网后，吕某还不知道中年男子的真实姓名。</P>
<P>&nbsp;&nbsp;&nbsp; 现吕某已被警方刑拘，案件正在进一步深挖中。</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp8.jpg','34','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('219','代表建议大医院办社区医疗卫生机构','站内新闻','&nbsp;&nbsp; &nbsp;新华网北京３月４日专电（记者白林、王昆）“目前，‘大病进医院、小病在社区、康复回社区的社区首诊、社区与医院双向转诊’的格局远没有形成。如何使社区医疗走出软硬件不配套、有设备缺人才的困局？那就是大医院管办社区卫生机构或社区成为大医院的派出机构。”全国人大代表、保定市卫生局副局长<SPAN style=\"BORDER-BOTTOM: 0px dotted; COLOR: #0084d8; CURSOR: hand; TEXT-DECORATION: underline\" name=\"HL_TAG\">郭淑芹</SPAN>接受记者采访时说。
<P>&nbsp;&nbsp;&nbsp;&nbsp;郭淑芹举例说，去年冬天，保定市各大医院人满为患，而社区服务站的患者没有太大增加，有的甚至比较冷清。虽然当下社区卫生服务中心和服务站比过去面积大了，设备有了，环境好了，但依旧得不到居民信任，病人量上不去，而大医院却人满为患，一床难求。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;“究其原因还是社区医疗服务机构没有让居民特别信任的医生，因此，多数社区卫生服务机构效能仍处于低水平、低层次阶段，国家投入社区卫生服务机构的钱尚未见到预期效果。”郭淑芹说。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;郭淑芹说，大医院主管社区医疗机构，一方面可以使社区卫生服务的发展从根本上走出困境，提升实力、提高效能，实现优秀医生进社区；另一方面，大医院将一些压床慢性病、术后患者、<SPAN style=\"BORDER-BOTTOM: 0px dotted; COLOR: #0084d8; CURSOR: hand; TEXT-DECORATION: underline\" name=\"HL_TAG\">康复期</SPAN>病人转回社区，可以提高医院的床位周转率。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;“如一般的疝气、阑尾炎、腹腔镜等术后病人三天就可以出院，需要的话回来拆线。但由于存在院外感染、家庭护理不专业等问题，病人一般要住到拆线后。如果医院有自己办的社区，医护人员可放心将其转到社区，医院为社区急、危、重症患者的向上<SPAN style=\"BORDER-BOTTOM: 0px dotted; COLOR: #0084d8; CURSOR: hand; TEXT-DECORATION: underline\" name=\"HL_TAG\">转诊</SPAN>开设‘绿色通道’，术后及康复期患者可转入社区卫生服务机构接受后续康复服务。真正实现‘小病在社区、大病进医院、康复回社区’的阶梯就医形式。”郭淑芹说。</P>
<P>&nbsp;&nbsp;&nbsp;&nbsp;郭淑芹建议，每个大医院主管辖区内一定数量的社区医疗机构。大医院管办社区医疗管理形式视投资主体的不同可分为两种，一是大医院接管，人事管理、财务管理、医疗管理等一体化。二是由医院托管或与医院挂靠，共享技术、统一管理。大医院在管理社区医疗机构中，国家给社区医疗机构的拨款单设账户，专款专用，按照各地卫生行政主管部门的要求，统一配备设施设备等硬件，保证建设社区医疗卫生事业的钱用到社区医疗服务上。</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp9.jpg','58','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('220','钱库镇召开重点工作督查会','站内新闻','&nbsp;&nbsp; 9月12日，钱库镇召开重点工作督查汇报会，总结8月份村组织换届选举、环境综合整治、计生等各项重点工作的考核和进展情况。镇三套班子领导杨雷、冯世强、陈显宏，相关班子成员，9个社区书记主任、相关部门单位负责人参加了会议。 <BR>&nbsp;&nbsp;&nbsp; 会上，组织委员王晓冬传达了关于苍南县村级组织换届选举工作的会议精神，并提出了钱库镇村级组织换届试点工作方案，通过试点工作，努力实现“一提升、三改善、六提高”的目标要求，进一步扩大党内民主，完善村组织选举制度，选优配强村党组织领导班子。根据市县相关要求，8月下旬启动试点工作，元旦前要完成大部分村级组织换届工作，春节前要基本完成村级组织换届工作。<BR>&nbsp;&nbsp;&nbsp; 在听取汇报后，镇委书记杨雷补充强调，做好此次村级组织换届工作，事关全局、事关长远，关系到今后几年我县农村基层组织建设，关系到农村社会发展稳定，关系到镇委、镇政府各项中心工作能否顺利推进。各社区、有关部门要站在战略和全局的高度，进一步统一思想，认清形势，切实增强抓好村级组织换届工作的责任感和紧迫感。<BR>&nbsp;&nbsp;&nbsp; 随后，宣传委员缪小飞通报钱库镇在县第8次城乡环境综合整治的工作排名情况，同时就失分点的情况做了简要的说明。计生办就近期来的计生工作和社会抚养费征收情况的汇报，8月份计生考核末两位的社区分别做了表态发言。各分管领导也就全镇近期的计生、固投、安全生产、经济普查等工作做了分析，并对下一步如何作好各项工作进行部署。<BR>&nbsp;&nbsp;&nbsp; 镇委书记杨雷充分肯定了8月份以来钱库城乡环境综合整治工作所取得的成绩。他强调指出，在看到了工作的成效，也要重视总层面上还存在的问题，要继续保持高压态势，严格按照河道整治的时间节点，推进环境整治工作。全镇上下要继续发扬成绩、坚定信心，查找不足、再鼓干劲，动员全体干部以高度负责的精神、决战决胜的姿态、全力拼抢的干劲、快马加鞭的行动，确保全面完成和超额完成今年的各项任务目标。（缪克梯）<BR>','hsg','2026-02-24 11:44:21','uploadfile/sytp10.jpg','88','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('221','钱库镇第四次城乡环境考核 社团组织共同参与','站内新闻','&nbsp;&nbsp;&nbsp;&nbsp; 为更好的督促社区开展城乡环境综合整治工作，以更好的工作成效迎接县第四次环境整治考核，4月22日，钱库镇城乡环境综合整治工作考核组分二组对9个社区环境整治情况进行内部督查考核，总结好经验，发现新问题，监督促整改。<BR>&nbsp;&nbsp;&nbsp;&nbsp; 据悉，这次的考核小组和以往有所不同，考核人员除镇内相关科室、退休老干部以外，还得到钱库壹加壹应急救援服务站、钱库冬泳协会、望里冬泳协会等社团组织协助，共同参与对社区环境、河道保洁、四边三化、垃圾死角整治、村庄周边重点区域整治情况进行考核。<BR>&nbsp;&nbsp;&nbsp;&nbsp; 通过社会团体队伍共同参与城乡环境考核，充分发挥社团组织示范引导作用，拉近广大群众与政府间的距离，进一步提高群众环保意识，营造全民参与城乡环境整治的良好氛围。（钱宣）<BR>','hsg','2026-02-24 11:44:21','uploadfile/sytp1.jpg','24','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('222','我市行政审批改革再吹“号角”','站内新闻','<P>　　在市行政审批服务中心的地税窗口，庄女士拿着办理好的证件依次装入文件袋，“花了10分钟，办了2个项目。”作为一家工商代理公司的业务员，庄女士对窗口服务的“提速”感受颇深，“现在窗口的人员多了，办理也快了。”</P>
<P>　　我市审批职能归并改革起始于2009年，按照市委市政府关于“两集中两到位”的标准，要求所有部门将审批职能集中到一个处室，成立行政审批处，再将这些处室集中到审批服务中心，所有审批事项和授权均要到位。换言之，只要群众有审批方面的需要，都能在审批中心的各部门窗口完成，告别了过去挨个部门跑，甚至不知往哪儿跑的尴尬局面。到目前为止，我市50个部门中已有48个部门窗口进驻审批中心，有11个部门授权到位，审批事项集中度超过90%。此改革力度位于全省前列。</P>
<P>　　随着改革的深入，审批服务中心的窗口服务更为便捷高效，部门各自批变审批中心统一批，群众跑变部门跑。预约审批、上门审批、网上审批、送证上门……各种方式都让群众办事更方便，审批更有效率。</P>
<P>　　今年10月，浙江正泰建筑电器有限公司反映，公司18名员工需要取得特种设备从业人员证书，却因三班制难以抽出培训时间。市质量技术监督局（简称质监局）窗口随即特聘授课老师，于10月29日在正泰公司现场举办培训班。2天后，18名工人通过考试并现场取得从业证书。若企业在审批中心办理手续，待证件制作完成后，质监局窗口会将证件放置于统一制作的圆筒内快递至企业。所有的包装、快递费用均由财政统一拨款。送证上门作为许多窗口的既有服务项目，质监局窗口却将这种服务做到了极致。</P>
<P>　　市食品药品监督管理局的窗口更加注重审批流程的优化。以《药品经营质量管理规范》（简称药品GSP）为例，法定办理时限即为4个月。今年6月1日，新修订的药品GSP开始实行。市药监局在深化该局内部审批职能归并改革的基础上，通过对审批流程的优化，将原先的串联改为并联审批，大大压缩了时间，并将药品经营许可证与药品GSP两证并为一证，现办理只需20个工作日。</P>
<P>　　伴随着审批制度的改革，对行政审批的监管力度也进一步提升。目前，随着市、县（市、区）、镇街（功能区）、社区网上四级联动审批服务系统的初步验收，全市行政审批电子监察系统业已运行并与省电子监察系统实时联网。在窗口办事的企业可事先在网上查询审批依据与流程，审批的每一步进度记录在案，并可短信通知企业，一旦超过办事时限或发生违规操作，经办人和其部门将被记录在案并按照规定予以问责。</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp2.jpg','63','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('223','约人门口“解决”一刀致命 刚刚逃离现场即落法网','站内新闻','&nbsp;&nbsp;&nbsp;&nbsp;11月30日消息：11月26日凌晨，县公安局龙港公安分局民警杨乃仁在执行专业接处警巡逻任务途中遭遇一故意伤害致人死亡的歹徒，并将其擒拿归案。从发案到犯罪嫌疑人的抓获，仅5分钟。
<P>&nbsp;&nbsp;&nbsp; 当日凌晨，苍南警方110指挥中心的报警电话里传来了急促的声音：“这里杀人了，杀人了！”报警人还告诉接警员犯罪嫌疑人已经逃离现场。接警员马上询问了事情的经过和嫌疑人特征以及发案地点，并且立刻将警情传达到龙港公安分局。当时正和几名同事驾车在路面巡逻的杨警官听着对讲机中传来的警情，立刻拨转方向盘朝案发地点驶去。据杨警官介绍，当时他和同事的车子在快到达案发现场的路口时，看着前方不远处有一男子沿着街道从北向南跑来，显得非常焦急。杨警官看到，在快跑到这个路口的时候，这名男子拦下了一辆出租车，径直坐了上去。考虑到该男子是从案发地点方向跑来，对照之前指挥中心发布的警情以及对嫌疑人的描述，杨警官认为这名男子与警方要找的男子有几分相似。于是顾不得路口的红绿灯，拉响警笛将警车开上前，顶住该男子所上的出租车车头。刚刚开动的出租车被突如其来的警车一下子“震”住了，来了个急刹车，车上的男子也向前冲了一下，差点没撞上车内的挡风玻璃。等这名男子回过神来的时候，杨警官已经带着同事堵住了出租车的各个车门。这时，大家看到了刚刚上车的这个男子身上满是血迹，其手指头也有受伤，于是例行对该男子进行了询问盘查。</P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 经比对，该男子就是警方要找的作案之后逃离现场的犯罪嫌疑人邢某。</P>
<P>&nbsp;&nbsp;&nbsp; 原来，案发当晚，邢某和自己的几个朋友在龙港镇某酒吧玩。酒喝到兴奋点时带着两女孩子上酒吧领舞台跳起了热舞。由于邢某不满酒吧内另一男子向那两个女孩子搭讪，于是邢某就叫该男子出来到酒吧门口“解决问题”。双方话不投机，相互推搡两下之后，邢某便从口袋中掏出携带的弹簧刀刺向对方男子，之后逃离现场。但是令邢某万万没有想到的是，自己在逃离现场不到5分钟的时间就被警车一把撞“倒”。</P>
<P>&nbsp;&nbsp;&nbsp; 据警方介绍，受害者在中刀之后因伤势过重，不治身亡，邢某已被警方依法刑事拘留，案件还在进一步审查。</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp3.jpg','0','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('224','龙港斥资亿元改造世纪大道 将拓宽为双向8车道','站内新闻','&nbsp;&nbsp;&nbsp; 日前，龙港镇召开世纪大道大修工程设计方案研讨会。龙港镇政府今年将投入1亿元资金，对世纪大道进行全面改造。
<P>&nbsp;&nbsp;&nbsp; 世纪大道是龙港镇对外交通的大动脉。近年来，随着该镇城市化建设的不断推进，世纪大道车流量也持续攀升，每天车流量达到了4万多辆。由于超负荷运行，世纪大道路面破损非常严重，多处路面坑洼不平还出现下沉，极大地影响了交通环境，与龙港城市化建设极不适应。据悉，这次列入改造的世纪大道，从龙金大道至龙巴公路段，总长5.12公里，总投资1亿多元，改造后的世纪大道将从双向6车道拓宽为双向8车道。（通讯员 金君 李其安）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp4.jpg','89','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('225','工商联系统代表委员“两会”前夕忙调研（图文）','站内新闻','<P align=center><IMG src=\"http://pic2.66wz.com/0/10/35/26/10352683_461178.jpg\" border=0> </P>
<P></P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 12月23日消息：昨天下午，来自我县工商联系统的10多位县人大代表、政协委员汇聚在县财税局，赶在县“两会”前夕，开展视察调研活动。</P>
<P>&nbsp;&nbsp;&nbsp; 在座谈会上，大家听取了县财税工作、县工商联参政议政工作情况的通报，以及县政协有关八届五次会议调研提纲介绍，并就明年“两会”提案、议案等工作进行座谈。代表、委员们纷纷围绕当前我县社会、经济发展形势，针对热点难点问题，就如何做好明年提案、议案工作畅所欲言。同时为财政地税工作把脉支招、献计献策，要求财税部门更好地发挥监管职能，大力支持帮助企业又好又快发展。（记者 方耀星&nbsp; 实习生 温加俏）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp5.jpg','69','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('226','我市18所初中将开展小班化教育','用户需知','&nbsp; &nbsp; 4月8日，全市初中小班化教育研讨会在温州市第九中学召开。从今年9月起，又将有18所初中在七年级全面开展小班化教育。这标志着我市初中小班化教育的正式启动。 
<P>　　这18所学校包括：鹿城临江中学、瓯海茶山中学、瓯海丽岙镇华侨中学、温州市第二十中学、龙湾沙城中学、乐清蒲岐中学、乐清乐成镇第三中学、瑞安碧山镇中、瑞安汀田镇一中、永嘉瓯北三中、平阳腾蛟镇一中、平阳闹村中学、苍南灵溪二中、苍南龙港九中、苍南钱库二中、文成樟台学校、泰顺西','hsg','2026-02-24 11:44:21','uploadfile/sytp1.jpg','93','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('227','苍南县教育系统2012年国家省市县各类先进名单','用户需知','<P><STRONG>一、全国“两基”先进个人</STRONG>（1名）：</P>
<P>徐盛亮（天井小学）</P><!--advertisement code begin--><!--advertisement code end-->
<P><STRONG>二、浙江省师德楷模奖</STRONG>（3名）：</P>
<P>徐明辉（县职业中专）、沈旭东（马站小学）、薛振碧（宜山高中）。</P>
<P><STRONG>三、浙江省“春蚕奖”</STRONG>（8名）：</P>
<P>金辉（灵溪一小）、陈志昶（龙港三中）、陈宋琴（宜山一中）、张英（金乡职校）、陈加拉（苍南中学）、黄通伦（龙港高中）、林志超（潜龙学校）、黄春华（县机关幼儿园）。</P>
<P><STRONG>四、浙江省“绿叶奖”</STRONG>（1人）：</P>
<P>黄荣钢（灵溪镇人民政府）</P>
<P><STRONG>五、温州市第五届师德楷模奖</STRONG>（14名）</P>
<P>梁鸯鸯（县实验三小）、林小辉（灵溪二小）、黄晓敏（县机关幼儿园）、陈海燕（县实验二小）、陈少琼（县实验一小）、赵春黄（县少艺校）、徐斌（灵溪三中）、吴志仲（宜山小学）、李求穆（矾山二中）、姚仁珊（马站高中）、章锦票（龙港四小）、陈淑萍（矾山二小）、黄桃红（仙居学校）、雷顺雄（桥墩小学）。</P>
<P><STRONG>六、温州市第五届终身班主任奖</STRONG>（15名）</P>
<P>庄笑萍（龙港五小）、林花（龙港二小）、吴晓玲（灵溪二小）、黄彩云（龙港五小）、伍日真（霞关小学）、刘素娟（石砰学校）、高楚月（灵溪二小）、肖金枝（灵溪五小）、彭满钱（金乡四小）、陈福品（钱库小学）、吕蓉蓉（县实验一小）、郭瑞云（澄海小学）、雷大银（凤阳学校）、陈映雪（观美小学）、陈耀辉（矾山一小）。</P>
<P><STRONG>七、第六届温州市新闻奖教金</STRONG>（15名）</P>
<P>（一）优秀校长奖（7名）</P>
<P>钟锦锁（龙港二中）、杨业鹏（灵溪六中）、黄方树（灵溪五小）、蔡耀偏（望里二小）、陈应验（龙港一小）、高美婵（县机关幼儿园）、陈先晨（藻溪中学）。</P>
<P>（二）优秀农村教师奖（8名）</P>
<P>林为璋（钱库三中）、林贤数（宜山高中）、朱坤畅（宜山小学）、 陈佳胜（金乡三中）、张淑等（灵溪九中）、范丽华（霞关小学）、缪志木（巴曹二小）、谢建中（矾山高中）。</P>
<P><STRONG>八、温州市园丁奖</STRONG>（12名）</P>
<P>蔡万坚（灵溪六中）、舒芝芳（云岩学校）、朱自腾（钱库一中）、金理样（金乡二中）、许亦松（赤溪小学）、林华彬（马站二中）、秦华平（桥墩小学）、吴宏鸿（原县成教中心）、廖思曙（钱库二中）、梁情谊（县民族中学）、林绳丑（原仁英高中）、蔡启静（钱库二高）。</P>
<P><STRONG>九、温州市教育工作先进个人</STRONG>（54名）</P>
<P>（一）温州市优秀班主任（14名）</P>
<P>章合杰（藻溪小学）、蔡素华（灵江小学）、李统仓（龙港十一中）、杨敬来（平等小学）、周碧（宜山小学）、王益静（钱库二小）、饶丽斌（金乡四小）、李芳眉（埔坪学校）、林玲（马站三中）、叶俊玲（桥墩一中）、郭进贵（新星学校）、陈文乐（县职业中专）、陈宾（灵溪中学）、林天明（马站高中）。</P>
<P>（二）温州市优秀教师（28名）</P>
<P>蔡存和（灵溪一中）、陈仁靠（灵溪二小）、王娟娟（灵溪六小）、余德养（龙港十二中）、肖云望（龙港二小）、陈乃双（龙港八小）、杨德新（龙港九小）、陈细棒（龙港新城二小）、彭陈平（县实验二小）、吕存贵（钱库小学）、谢作姜（括山学校）、陈发俊（金乡二小）、张廷群（矾山一中）、潘海棠（中墩小学）、蔡祖忠（马站一中）、林吉芳（沿浦小学）、林祖远（桥墩二中）、吕明志（金乡高中）、陈礼敬（桥墩高中）、陈启旺（钱库高中）、李求龙（求知中学）、陈阳（原县成教中心）、曾思思（县少艺校）、王剑雄（县实验三小）、庄立群（县教师进修校）、黄道源（苍南中学）、陈绍上（灵溪十一中）、金理笑（龙港高中）。</P>
<P>（三）温州市优秀教育工作者（12名）</P>
<P>张斌（灵溪二中）、孔爱月（龙港七小）、孙昌杉（宜山二小）、王慕杰（钱库三中）、金良栈（钱库小学）、陈宜宽（炎亭学校）、黄宗顺（金乡学区）、黄上宜（腾','hsg','2026-02-24 11:44:21','uploadfile/sytp2.jpg','10','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('228','钱库派出所：建立心理减压室  关爱干警心理健康','用户需知','<DIV>&nbsp;&nbsp;&nbsp; 舒缓的轻音乐徐徐播放着，鱼儿在快乐的游着，民警悠闲地坐在音乐按摩椅上，深呼吸，闭上眼睛，大自然里各种奇妙的声音涌过来,人仿佛置身世外……这一幕不是出现在钱库镇的哪个休闲会馆，而是钱库派出所的\"心理减压室\"。</DIV>
<DIV>&nbsp;&nbsp;&nbsp; 在社会治安形势日益复杂的今天，公安工作面临着许多新情况、新问题，尤其是基层的公安工作可说是千头万绪，“上面千根线、底下一根针”，而今年的世博安保、校园安保、亚运安保等工作使民警的任务比往年更加繁重，天天满负荷甚至超负荷运转，给他们的生理、心理都造成了极大的压力。</DIV>
<DIV>&nbsp;&nbsp;&nbsp; 针对所内公安干警压力颇大这一现象，2010年7月，钱库派出所投入十余万元为全所民警添置了一间“心理减压室”，并于近日正式启用。心理减压室集环境氛围营造、生理指标、压力与情绪评估、身心状态调节、情绪稳定训练于一体。在这儿，干警可以通过肌肉放松、呼吸放松、想象放松和音乐调试等方式缓解压力、释放情绪，改善紧张、疲劳等不良状态，从而增强情绪自控能力，达到维护身心健康的目的。（钱库所薛小静供稿）</DIV>','hsg','2026-02-24 11:44:21','uploadfile/sytp3.jpg','12','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('229','“木兰”起舞喜迎十八大（图）','用户需知','<DIV align=center>
<DIV align=center>&nbsp;</DIV>
<DIV align=center><SPAN><IMG id=no_img height=406 src=\"http://pic2.66wz.com/0/10/65/65/10656553_856650.jpg\" width=610 border=0></SPAN></DIV>
<DIV align=center>&nbsp;</DIV></DIV>
<P><!--epe-->&nbsp;&nbsp;&nbsp; 苍南新闻网10月21日消息：日前，灵溪木兰拳分会精心编排了系列舞蹈，准备在党的十八大召开和重阳节前夕组织队伍上台、上街演出，为广大居民送去喜庆和欢乐。 (李士明/摄）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp4.jpg','76','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('230','两张假证骗贷5万 俩被告获刑又罚钱','用户需知','<P><FONT color=#5c5c5c><FONT color=#5c5c5c>&nbsp;&nbsp;&nbsp; 苍南新闻网7月18日消息：</FONT><FONT color=#5c5c5c>近日，县法院对持伪造产权证明诈骗贷款的被告人吴某、金某以诈骗罪分别判处有期徒刑一年六个月、并处罚金人民币10000元和有期徒刑一年二个月、并处罚金人民币8000元，并责令被告人吴某退赔违法所得人民币23500元返还被害人。</FONT></FONT></P>
<P><FONT color=#5c5c5c><FONT color=#5c5c5c>&nbsp;&nbsp;&nbsp; 据了解，2011年，金某以自己名义帮吴某向钱库镇一家担保公司借款三万元。借款到期后，却无力偿还。2012年1月6日下午，吴某、金某经预谋后，携伪造的房屋产权证和国有土地使用权证至我县某商务信息咨询服务部，用上述假证作抵押，向该信息服务部贷款50000元，金某以吴某妻子项某的名义在合同上签字。当日，该信息服务部扣除利息后汇给吴某、金某48500元。后被告人吴某分三次共支付利息5000元。吴某从这笔贷款中取三万元让金某还给钱库镇的担保公司。案发后，被告人金某退出赃款2万元，被害人表示不再追究金某的民事责任。</FONT></FONT></P><!--advertisement code begin--><!--advertisement code end-->
<P><FONT color=#5c5c5c><FONT color=#5c5c5c>&nbsp;&nbsp;&nbsp; 法院审理后认为，被告人吴某、金某结伙用伪造的房产证、土地证骗取他人财物，数额较大，其行为均已构成诈骗罪，遂依法作出上述判决。（惟','hsg','2026-02-24 11:44:21','uploadfile/sytp5.jpg','85','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('231','外来务工者火车票一票难求 拼租回家省心能省钱吗','用户需知','<P>&nbsp; 　<!-- mark ( diantou ) parse end-->又到春运时节，火车站和代售点前排起了长龙。“一票难求”是外来务工者每年都要经历的烦恼。今年春节，情况似乎有点变化。<BR>今年，几位老乡“拼租辆车回家过年”越来越流行。不少外来务工者也和白领一样，选择了租辆汽车开回家。拼租回家，和坐火车、坐长途客车相比，到底实惠不实惠？钱报选取了回重庆(成都)、安徽阜阳、湖北武汉三条路线样本，和读者一起来算算这笔账。</P>
<P>　　<STRONG>路线一：杭州←→安徽阜阳</STRONG></P>
<P>　　去年春节返乡，来自安徽阜阳的小王还是买票长龙中一员，排了4个小时队也没买到火车票，最后是从“黄牛”手中花了高出汽车票两倍的价格才买到票，搭上了回乡的末班车。</P>
<P>　　今年春节他可以笃悠悠地呆到年二十八走。因为他和几个老乡将拼租一辆汽车回家过年。</P>
<P>　　小王是前几天在网上看到了汽车租赁的广告，觉得租辆车回阜阳大家拼起来用，人均大约230元，和长途汽车票的单价差不多，价格还可以接受，就马上按照上面的电话拨过去咨询。</P>
<P>　　按照一嗨租车客服人员的提示，小王上网确认了自己的用车时段及取车、还车的时间地点，在可供选择的车型中选择了爱丽舍三厢自动挡，点击了“立即预定”，就算预定成功了。“还好订得早，不然可以选择的车型就少了，或者只能网上排队了。”过几天，小王只要带上自己的身份证、驾驶证和信用卡，就可以上预定好的门店办理交接手续，签好约就能顺利取车了。</P>
<P>　　昨日，记者致电杭州的神州、国信、至尊、益友等几家汽车租赁公司，均被告知目前基本上订不到车，只剩几辆车了，要订的话还真得尽快下手。</P>
<P>　　<STRONG>路线二：杭州←→湖北武汉</STRONG></P>
<P>　　“去年回老家不仅票难买，拎着大包小包在车厢里挤都要挤死了，还要到武汉换乘大巴回乡，实在是不方便，今年我和老乡合计了一下，决定租辆车拼着走。”在杭州打工的湖北小伙小徐和记者说出自己的计划。</P>
<P>　　“我们租的是桑塔纳3000，150元一天，7天只要1050元，加上来回的油费和过路费，五个人分摊下来差不多450多元；杭州到武汉的硬卧火车票来回也要478元，还要加上从武汉回到乡下老家的车费40元，显然价格要便宜一些，而舒适度提高了不少，最主要是省去了拿着大包小包挤火车的麻烦，春节的时候走亲访友也可以开，这样算起来，租车回家真挺值的。”小徐跟记者算了这么一笔账。</P>
<P>　　据了解，汽车租赁的型号不同、价格也不同，但中低档的汽车在租赁市场上更受欢迎，日租价格大概在150元到300元不等，时间越长则价格越优惠。同时像国信、神州这样的公司都支持异地换车，可以在老家的门店把车还了，等到要回杭州了再去租，这样就省了好几天的租金。</P>
<P>　　至尊租车市场部总监黄志标告诉记者，不同的价格针对不同的人群：“我们最便宜的车型是新赛欧三厢自动挡，138元一天，性价比挺高的。”</P>
<P>　　“也有好几家公司因为放假比较晚，考虑到员工回家需求，公司出面来租两三辆车，差不多同方向的同事拼一辆开回去。”看来无论个人还是企业，算起账来都门儿清。</P>
<P>　<STRONG>　路线三：杭州←→重庆、成都</STRONG></P>
<P>　　40多岁的朱师傅来自重庆，带着一批老乡在杭州某工地打工，是他们的“头儿”。每年他都领着一帮人轮流漏夜排队买回乡的火车票。</P>
<P>　　有一天，他在一楼宇电视广告上看到，神州租车挺优惠的，脑海里就跳出了和几个老乡一起拼车回家的念头。当时大约估算了一下，杭州到重庆火车空调快车单程是409元，长途汽车票515元，还要费时费力去排队，还不一定能买到票；而租车5个人拼，摊到每个人头上只要530块，毕竟舒适度好了许多。</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp6.jpg','56','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('232','龙湾蓝图助力楼市','用户需知','<DIV id=zoom>
<TABLE align=center>
<TBODY>
<TR>
<TD><IMG src=\"http://www.wenzhou.gov.cn/picture/0/101223055153766.jpg\" border=0></TD></TR></TBODY></TABLE><!--<$[信息内容]>begin--><!--ZJEG_RSS.content.begin-->
<META name=ContentStart>
<P align=center><FONT face=楷体_GB2312 color=#0000ff>龙湾中心区某在建楼盘。 （卢春雨 摄）</FONT></P>
<P>　　12月22日，位于龙湾城市中心区2宗用地面积约25万平方米的A-02、A-09和A-16地块成功出让。据市公共资源交易网显示，12月23日及12月30日还有2幅位于龙湾区瑶溪南片区的住宅地块G、H及E-07地块出让。至此，龙湾区今年共出让13宗地块，总占地面积近43.7万平方米。 </P>
<P>　<STRONG>　土地出让迎来高峰</STRONG></P>
<P>　　据温州大学房地产研究报告表明，今年龙湾区土地出让量达到655亩，较近5年土地出让最高峰的2008年高了近3倍。今年龙湾区的土地出让大多集中在行政中心区以及瑶溪南片区，行政中心区以科教、金融、住宅用地为主，瑶溪南片区以商服、住宅用地为主。</P>
<P>　　“仅9月至11月3个月的时间，我市加大土地出让力度，其中龙湾区地块频频出让达到176亩，总建筑面积近28万平方米。用途包括商业、住宅、金融、科教等，吸引许多开发商的目光，”泰和房产营销总经理林育表示，“可以说龙湾作为温州城市的副中心承接未来大都市区，目前开发的力度都是空前的，综合体地块以及低容积率大体量的地块的推出，将会有助于外地大房企的引进，这对板块品质的提升有很大的推进作用。”</P>
<P>　　<STRONG>轻轨连起副中心</STRONG></P>
<P>　　根据《温州市城市轨道交通线网规划》，我市将形成以核心城区为中心的放射状市区轨道交通普线网、以大都市区为范围的弓箭形轨道交通网。计划于明年11月份率先启动建设的S1线一期，从温州南至灵昆全长约40公里，其中温州南至龙湾码头段，是利用既有金温铁路廊道建设，全长20多公里。</P>
<P>　　以轨道交通为依托，龙湾区的发展也将进入快车道，温州将加速从滨江时代迈入滨海时代。根据去年市政府批复的《龙湾城市中心区设计优化暨控规修编》规定，龙湾中心区定位为以行政管理、文化娱乐、商务休闲、金融办公和生活居住五大功能为主导，集其他配套功能为一体的多功能、生态型、复合型的中心区，是温州城市副中心和龙湾区的政治经济文化中心。龙湾区地处温州城市的东部，是温州未来10至20年的发展重点，未来开发力度很大。</P>
<P>　<STRONG>　区域发展潜力巨大</STRONG></P>
<P>　　“其实瑶溪板块的价值被低估了，”温州大学房地产研究所研究员向洋告诉记者，“瑶溪在市民的印象中一直是‘经济适用房聚集区’的代名词，因此不管是开发商还是购房者对该板块的认可度不高，但是近期出让的瑶溪地块竞得价相对较低，才能做得出适合刚需一族的产品。”向洋表示，11月成功出让的瑶溪南居住区D-11地块和E-09地块的楼面价在7024元/平方米和8636元/平方米，完全可以做中小户型，满足广大的刚性需求。“瑶溪有460公顷的土地正在规划中，若其中有三分之一做住宅的话，那也是相当大的数量了。”</P>
<P>　　好望角房产策划公司市场部主任温静称：“目前瑶溪一些安置房项目售价在12000元/平方米左右，与周边地区的房价比的话可以说是价格的洼地，虽然生活配套还不够成熟，但今年拍出的瑶溪南居住区B16、B28及B18地块均作为商服地块出让，同时，政府将瑶溪作为保障民生的区域进行开发，必定会大力建设配套设施。”</P>
<P>　　随着龙湾中心区配套设施的不断完善以及土地大规模的出让，该区域内的二手次新房价格也“水涨船高”。如之前已经开盘的万康锦绣城和锦绣家园，部分房源在中介公司的报价约每平方米30000元，而位于龙湾行政中心区的龙城华府，目前的二手房报价最高达到了每平方米35000元左右。 （李尖）</P>
<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end--></DIV>','hsg','2026-02-24 11:44:21','uploadfile/sytp7.jpg','43','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('233','钱库镇篮球联赛开展情况汇报','用户需知','<DIV align=center>钱库镇篮球联赛开展情况汇报</DIV>
<DIV align=center>&nbsp;</DIV>
<DIV>&nbsp;&nbsp; 为了迎接全国第二个“全民健身日”的到来，根据温州市开展“百镇千村万场篮球赛”的有关要求，钱库镇积极组织开展了第二届钱库镇（省体育强镇）篮球联赛“半场三人制”的活动。镇人民政府下发了[2010]41号文件通知对篮球联赛的目的、组织原则、竞赛形式、参赛资格、名次录取和奖励、报名方法、比赛经费、联赛组委会、比赛地点和其它有关方面作了部署。</DIV>
<DIV>&nbsp;&nbsp; 现全镇共有32支村居球队报名（报名的球队村都有自己的球场，他们各处通过村民自愿报名淘汰后选出优秀人员参加镇级联赛。经过8组单循环赛，进入交叉赛，再取前两名进行交叉赛，依次决出前1-4名。整个赛事共开展了2天，镇级投入经费1.5万元，各代表队总计投入约7万元，同时聘请县体育局局长易建军同志担任顾问。</DIV>
<DIV>&nbsp;&nbsp; 通过这次联赛的活动，我镇全民健身氛围有了新的高潮，现正积极筹建镇级队员报名参加市、县级联赛。</DIV>
<DIV>&nbsp;</DIV>
<DIV>&nbsp;</DIV>
<DIV>&nbsp;</DIV>
<DIV align=right>钱库镇社会体育指导站</DIV>
<DIV align=right>2010年7月1日</DIV>','hsg','2026-02-24 11:44:21','uploadfile/sytp8.jpg','57','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('234','县工商局清查“问题蜂蜜”（图文）','用户需知','<TABLE cellSpacing=0 cellPadding=0 align=center>
<TBODY>
<TR align=middle>
<TD><IMG src=\"http://pic2.66wz.com/0/10/33/36/10333611_129314.jpg\" border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=20 cellPadding=0 align=center>
<TBODY>
<TR align=middle>
<TD><IMG src=\"http://pic2.66wz.com/0/10/33/36/10333610_764536.jpg\" border=0></TD></TR></TBODY></TABLE>
<P>&nbsp;&nbsp;&nbsp; 11月18日消息：蜂蜜由于其养生、美容等功效受消费者喜爱。然而，为了降低生产成本，竟有商家在蜂蜜的纯度上动起了歪脑筋。日前，央视《每周质量报告》曝光了浙江万隆保健食品有限公司、浙江怡康蜂业有限公司、杭州紫香糖业有限公司等三家企业违规生产的“LH”、“蜂博士”蜂蜜以果糖冒充蜂蜜，低价销售，而这些果糖多是陈旧的碎米加工而成。这些企业生产的“问题蜂蜜”经超市销往全国各地。</P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 县工商局已组织执法人员迅速出击，开展“问题蜂蜜” 清查行动，确保广大群众消费安全。该局共出动执法人员85人次，检查商场超市17家，检查各类食品经营户539户，查获涉嫌违法的慈溪市怡康蜂业有限公司生产的“佳蜜康”牌500克装“洋槐蜜宝”4瓶。&nbsp; </P>
<P><STRONG>&nbsp;&nbsp;&nbsp; 教你如何购买蜂蜜</STRONG></P>
<P>&nbsp;&nbsp;&nbsp; 蜂蜜的价格与蜂蜜的浓度有关，一般一级蜂蜜的采集周期为7~15天，二级蜜为3~5天，时间越短，蜂蜜的浓度和营养度就越低。</P>
<P>&nbsp;&nbsp;&nbsp; 用肉眼分辨蜂蜜好坏有两个步骤：第一步，看透明度，无论蜂蜜的颜色深浅，优质蜂蜜都非常清透；第二步，看蜂蜜的结晶，如果结晶呈片状，则可能添加了一些别的东西，而优质蜂蜜的结晶是一粒一粒的。</P>
<P>&nbsp;&nbsp;&nbsp; 如果蜂蜜产品外包装上注明了浓度和水分含量，也可以看数据，一级蜂蜜水分一般小于19.2%，浓度要在42波美度(即蜂蜜浓度)以上，二级的浓度在36到42波美度，其他的为三级。</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp9.jpg','15','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('235','背街小巷也要变靓','用户需知','<p style=\"color:#333333;font-family:&quot;font-size:16px;text-align:justify;background-color:#FFFFFF;\">
	街头巷尾的“细碎小事”，关系居民切身利益，关系居民的获得感、幸福感和安全感。城市环境整治提升，不仅要让城市有光鲜亮丽的“面子”，更要给广大居民整洁舒适的“里子”
</p>
<p style=\"color:#333333;font-family:&quot;font-size:16px;text-align:justify;background-color:#FFFFFF;\">
	最近，某市一个小区的居民，为自己小区的环境整治感到有些焦虑：隔壁小区挨着主干道，周边环境干净整洁。而自己的小区就因为位置靠里，门口的路较为脏乱，环境卫生不好。居民们不时询问小区物业：背街小巷整治什么时候轮到这一片?
</p>
<p style=\"color:#333333;font-family:&quot;font-size:16px;text-align:justify;background-color:#FFFFFF;\">
	2017年4月，北京市发布《首都核心区背街小巷环境整治提升三年(2017―2019年)行动方案》，提出背街小巷环境整治提升是城市精细化管理和服务的重要标尺，计划用3年时间对2435条背街小巷实施整治提升，并建立“街长”“巷长”制，选派街道、社区的党员干部等担任。目前，这项环境整治行动正在持续进行。
</p>','hsg','2026-02-24 11:44:21','uploadfile/sytp10.jpg','40','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('236','黑龙江小伙创“1・29情侣节” 骑行全国倡议“情感环保”','用户需知','&nbsp;&nbsp;&nbsp; 提到“情感环保”，相信很多人还是第一次听说。11月5日下午，31岁的黑龙江未婚小伙刘成义，从黑龙江七台河市骑行路经苍南，宣传“情感环保”――他独创的“1・29情侣节”。
<P>&nbsp;&nbsp;&nbsp; 当天下午，记者见到刘成义时，只见他在硬纸板上用红笔写着“宣传不能停，快乐向前行， 1・29（‘要爱久’的谐音）情侣节”几个大字；一张红色的宣传单上则写着“每年的阳历1月29日定为情侣节，情侣节倡导的核心思想是忠贞、专一、责任、自爱、互爱、防病、自然……”让大家关注“情感环保”和“情感环保”的意义。</P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 为了倡议“情感环保”，刘成义打算用一年时间骑行全国。今年6月17日，刘成义骑着一辆自行车，带了3000元钱，带着印制的1万多份宣传单，从七台河市启程。一路走来，不少热心人给予他无私的帮助，让他的艰难旅途倍感温暖。（记者 简宁静）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp1.jpg','20','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('237','我市近4千辆本田汽车被召回','用户需知','<P>　　国家质检总局日前通报指出，广汽本田汽车有限公司和东风本田汽车有限公司决定从本月15日起，召回部分飞度（Fit）、思迪（CITY)轿车和思威（CR-V）多用途乘用车。记者9月6日从我市广汽本田和东风本田4S店了解到，我市范围召回的本田车近4000辆，他们将于本月14~15日，以短信、函件或电话等方式，通知相关车主就近免费检修。</P>
<P>　　此次召回范围内的车辆，当驾驶席侧电动窗开关受到外来含有硅氧烷的溶剂侵入时，如果继续使用，会使开关触点异常磨损，产生粉末堆积，达到一定程度后，可能引起短路、发热，使开关内部损坏。在极端情况下，可能还会导致零部件的局部烧损。召回后，广汽本田和东风本田将免费更换新的驾驶席侧电动车窗开关，以消除隐患。</P>
<P>　　据广汽本田汽车温州华能特约销售服务店售后经理仇先生说，此次被召回的本田车是2005年8月8日到2007年12月8日生产的部分飞度，2005年8月1日到2007年8月22日生产的部分思迪，温州售出的属于召回范围内的两款车共3700多辆。东风本田汽车温州华能特约销售服务店售后经理韩先生说，他们召回的是2006年1月11日到2007年3月5日生产的部分思威，温州售出约220多辆。</P>
<P>　　市质监局相关工作人员说，由于涉及到的汽车厂家本身已具备较为完善的售后网络，所以我市的召回工作主要由相关汽车公司的4S店完成。</P>
<P>　　据了解，所有属召回范围内的车辆都可就近检修更换，不受车辆购买地限制，车主可根据车型就近选择广汽本田或东风本田的4S店。 （倪曲）</P>
<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end-->','hsg','2026-02-24 11:44:21','uploadfile/sytp2.jpg','51','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('238','温州率全国之先设海外贸易预警监测系统','用户需知','&nbsp;&nbsp;&nbsp; 6月15日，温州市外经贸局将“土耳其温州眼镜公平贸易信息工作站”的牌子，授给土耳其中国工商总会副会长、温商程建兵。今后，这个设在土耳其的工作站将直接收集当地的贸易壁垒等信息，为温州眼镜业同行充当外贸预警“顺风耳千里眼”。与该工作站同期成立的，还有意大利温州鞋类公平贸易信息工作站、意大利温州服装公平贸易工作站。据市外经贸局向国家商务部证实，温州是全国首个直接在海外设立贸易预警监测系统的城市。 
<P>　　据介绍，2001年到2010年，温州共遭遇来自美国、欧盟、土耳其、印度等13个国家和地区发起的国际贸易壁垒共76起，其中土耳其发起贸易壁垒最多，欧盟、美国居次；涉案产品30多种，涉案企业1000余家，总金额达8.6亿美元。对于密集袭来的国际贸易壁垒，市眼镜商会副秘书长杨须迈告诉记者，很多时候并不是因为温州产品的质量问题，而是双方的信息不对称；同时，文化差异、沟通不畅也常让小事变成大事，因而遭受不必要的损失。</P>
<P>　　为畅通贸易信息渠道，近四年来，温州陆续在15个外向型行业商会建立贸易壁垒预警应对机制服务点。但是，这些预警点都仅限于国内。而最快的外贸信息渠道肯定来自海外当地市场，由此，温州一些民间行业商会开始尝试直接在海外设立贸易预警点。</P>
<P>　　直接在海外当地设立预警点，温州有着独特优势：遍布全球的温州人就是最佳信息源。据不完全统计，目前共有60多万名海外温州人活跃在全球100多个国家和地区。这些独有的“温州人资源”成为海外预警信息的最好“触角”。2009年5月，温州市鞋革协会在意大利设立“温州鞋业应对欧盟反倾销联络点”、“温州鞋业对外贸易预警联络点”，此后，温州市眼镜商会也依靠海外温企的力量，在土耳其、美国、巴西当地分别建立海外贸易预警联络点。“我们等于在对方的领域里装了一只‘顺风耳’，综合接收到的消息，让温商少走了弯路。”市鞋革行业协会执行会长、秘书长谢榕芳说。就在意大利温州鞋业对外贸易预警点设立不久，温州一鞋企就借助预警点发回的信息，成功避免了一笔价值数十万元人民币的损失。</P>
<P>　　市外经贸局负责人表示，今年将在海外温州人较为集中的地区与城市推进建立海外公平贸易信息工作站，争取在2015年前在全球重点出口市场形成覆盖重点产业、敏感产品的进出口公平贸易海外预警监测系统。（章映&nbsp; 翁晨辉）</P>
<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end-->','hsg','2026-02-24 11:44:21','uploadfile/sytp3.jpg','58','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('239','制度征意见 拟规定禁止对学生分类','用户需知','&nbsp;&nbsp;&nbsp; 昨日，教育部网站公布《依法治校――建设现代<SPAN style=\"CURSOR: hand; COLOR: #0084d8; BORDER-BOTTOM: 0px dotted; TEXT-DECORATION: underline\" name=\"HL_TAG\">学校</SPAN>制度实施纲要（征求意见稿）》，意见稿规定，各级教育行政部门将“减少对学校具体办学与管理活动的干扰”。
<P>　　征求意见稿涉及学校包括除了幼儿园在外的国民教育体系中的各级各类学校：中小学、中等职业学校、高校、民办高校和中外合作办学机构等。</P>
<P>　　征求意见稿指出，学校要在机构设置和职能上，实现行政权力与学术权力的相对分离，保障学术权力按照学术规则相对独立行使。</P>
<P>　　征求意见稿提出，“在学校的学术组织中要保证普通教师代表的比例不低于50%”；“专业技术职务评聘办法、收入分配方案等与教职工切身利益相关的制度、事务，要经教职工代表大会审议通过”。</P>
<P>　　征求意见稿要求教育行政部门以依法治校的综合性考核，代替相关的专项考评，减少对学校具体办学与管理活动的干扰。</P>
<P>　　征求意见稿6月25日至7月10日公开征求意见。</P>
<P>　　<STRONG><FONT color=navy>■ 内容</FONT></STRONG></P>
<P style=\"COLOR: navy\"><STRONG><FONT color=navy>　　章程制定 学校不得随意增义务、设定罚款</FONT></STRONG></P>
<P>　　征求意见稿规定，学校章程及其他规章制度要符合理性与常识，不得超越法定权限和教育需要增加义务，不得设定罚款，或其他可能侵犯师生基本权利的处罚事由和惩戒办法。</P>
<P>　　学校要设立或者指定专门机构，对校内制度文件进行审查，对与上位法或者国家有关规定相抵触，不符合学校章程和改革发展要求，不符合保障师生合法权益需要，或者相互之间不协调的内部规范性文件和管理制度，要及时修改或者废止。</P>
<P>　<STRONG><FONT color=navy>　民主决策 中小学应建校级家长委员会</FONT></STRONG></P>
<P>　　征求意见稿规定，要依法明确学校决策机构的组成、职权和议事规则，避免个人专断，其中：高等学校要依法明确学校党委、校长的职权范围和决策程序，推动内部法人治理结构的完善，充分发挥学校理事会（董事会）等机构在决策中的作用。</P>
<P>　　根据征求意见稿，中小学应当逐步建立健全班级和学校两级家长委员会。学校实施采购校服、订购教辅材料、组织活动、代收费用等直接涉及学生个体利益的活动，一般应由学校或者教师提出建议和选择方案，并做出相应说明，提交家长委员会做出决定。</P>
<P>　　征求意见稿规定，形成决策、执行与监督权相互制衡，保证学校管理与决策的规范、廉洁、高效。公办学校因违反决策规定、出现重大决策失误、造成重大损失的，要按照谁决策、谁负责的原则追究责任。</P>
<P>　<STRONG><FONT color=navy>　尊重师生 消除以任何形式对学生分类</FONT></STRONG></P>
<P>　　征求意见稿规定，各级各类学校应平等对待每个学生，消除以任何形式对学生进行分类、区别对待以及歧视的制度、言行。要切实保障残障人士的平等受教育权利，不得以非法理由拒绝招收残障学生。</P>
<P>　　在学生管理中，对学生进行处分，应做到事实清楚、定性准确、依据充分、程序正当，“重教育效果，做到公平公正”，对违反校纪的学生，要明确处分的期限与后果，积极教育挽救，给予悔改机会。要保障学生的人身权、财产权和受教育权不受到非法侵害，杜绝体罚或者变相体罚、限制人身自由、违法乱收费以及由于学校过错而造成的学生伤害等侵权行为。&nbsp;（记者郭少峰）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp4.jpg','63','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('240','10多家温企试水P2P借贷平台','用户需知','<P>　　最近，温州大展投资控股有限公司投资的“乐贷通” P2P网络借贷平台正式上线运营。在其交易网站平台显示，现已有7个正在交易的资金借贷，共涉及交易金额150多万元。这是一个以网络为渠道，实现个人对个人借贷交易的金融中介平台。在温州，“乐贷通”算是行业新秀，据悉，目前温州已有温商贷、三信贷、温州贷、民民贷、淘贷宝等10多个P2P网络借贷平台，部分平台在业内已小有名气。</P>
<P>　　一些企业表示，在民间资本活跃的温州，P2P网络借贷有市场需求，也有一定的发展机会。但当前行业良莠不齐，行业处于无准入门槛、无行业标准、无机构监管的“三无状态”，亟待规范。</P>
<P>　<STRONG>　以小额、本地借贷居多</STRONG></P>
<P>　　由温州李山投资管理有限公司投资的“温商贷”是今年3月份正式上线运营的。温商贷副总经理陈冬和介绍说，截至上月底，公司平台已有用户3000多个，总交易额累计达到2.8亿元，一般一天的交易额在三百万到五百万元不等。其中，以五六十万元的小额借款为主，60%以上的用户都是温州本地人。且多以实物（如房产、汽车等）抵押为主，尤其是汽车抵押因为手续方便，而成为主流。在市区机场大道李山投资办公楼前的停车场里，便停放着10多辆客户抵押在这里的汽车。</P>
<P>　　据悉，目前在温州的10多家P2P借贷平台中，大多以100万元以内的小额借款为主，并且这些订单会被拆分成多笔，以适应投资者需求。陈冬和说，作为民间资本活跃的温州，这种模式给中小投资者提供了便捷的资金保值增值渠道，同时也解决了企业或个人的贷款难问题。</P>
<P>　　市区上班族陈先生接触P2P借贷平台已有一段时间。他说，手中有个一二万元，借给别人拿利息不方便，也不好意思。而有了这样的平台，点点鼠标就可以投资，很方便。他表示，因为是闲钱，风险在可承受范围内，所以自己身边已有不少朋友在试着投资。</P>
<P>　<STRONG>　收取中介手续费为盈利手段</STRONG></P>
<P>　　乐贷通客户总监曹宏斌表示，P2P借贷平台担任的是中介机构的角色，以收取中介手续费为盈利手段。</P>
<P>　　乐贷通、温商贷等公司介绍运营流程一般如下：第一步，平台对借款人的资产(以房、车为主)进行评估，由第三方公证，签订担保、抵押合同；第二步，在网站上发布招标，投资人点击，把资金通过第三方支付软件(如支付宝等)支付给借款人；第三步，到期还款，交易完成。或到期未还款，由平台先赔付，再根据担保合同，处理抵押物，交易完成。</P>
<P>　　在这样一个运营流程中，所谓的P2P网络借贷平台，应该是个纯中介机构，遵循不吸存、不放贷、不担保，“三不”原则。</P>
<P>　　但有关业内人士透露，当前这个行业存在许多的不规范。一些平台为了吸引投资者，往往发布高利息收益，有的甚至高达4分息。而这些收益，有可能是以奖励等其他方式出现，而不一定是之前展示的利息收益。而有些平台则通过吸纳资金给自己使用。一位同行表示，这样的现象是非常危险的，这样高的收益往往也伴随着高风险。</P>
<P>　　曹宏斌表示，平台做好管控流程，做个“纯中介”非常重要。</P>
<P>　<STRONG>　行业处于“三无状态”亟待规范</STRONG></P>
<P>　　当前，P2P网贷行业处于无准入门槛、无行业标准、无机构监管的“三无状态”。一位业内人士表示，行业没有门槛，没有部门规定注册资金要50万，还是200万、1000万元。只要你建个网站，能算清楚利率，就可以运营，也没有真正的部门进行监管，目前这个行业可以说是“鱼龙混杂”。</P>
<P>　　“我们在等，等着行业规范，等着有相关的法律出台。”陈冬和说，只有有效的监管才能有约束，才能让投资者信任，让行业健康发展。“老板下达的指示是，只要保证平台正常运营，能自负盈亏就可以了。”陈冬和表示，当前，公司只能按自己的运营思路，尽可能地做到公开、透明，鼓励投资者到公司现场考察，将信息在网络上公布等，先把品牌打响。</P>
<P>　　昨天，市民林先生第一次到我市某网贷平台了解情况。他表示，自己最担忧的是资金安全性问题。即便中间有P2P网贷平台做担保，但若是坏账超过该平台承受力，一样会让投资者受损失。只有权威的监管部门对这些网贷平台的信息进行严格管理，保证信息透明、公开、及时发</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp5.jpg','47','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('241','钱库镇中心组理论学习荣获全县理论学习先进单位','系统公告','&nbsp;&nbsp;&nbsp; 日前，苍南县委发文表彰全县镇以上党委理论学习中心组先进单位。中共钱库镇委理论学习中心组被评为“全县学习型领导班子、党委（党组）中心组理论学习先进单位”。<BR>&nbsp;&nbsp;&nbsp; 钱库镇不断创新学习方式，完善周一夜学、党校学习、领导讲课等制度，还组织中心组成员系统学习中国特色社会主义理论体系及党中央提出的一系列理论创新成果，以邓小平理论和“三个代表”重要思想为指导，特别是认真学习贯彻党的十七届五中、六中全会和党的十八大精神，紧密结合苍南实际，积极展开讨论，达成共识。（钱宣）','hsg','2026-02-24 11:44:21','uploadfile/sytp1.jpg','3','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('242','温州著名书法家林剑丹获中国书法最高奖','系统公告','&nbsp;&nbsp;&nbsp; 昨日，代表着中国书法界最高荣誉的第四届中国书法兰亭奖颁奖典礼在绍兴举行，温州著名书法家林剑丹获艺术奖，并应邀前往领奖。
<P>　　林剑丹，1942年10月出生，师承金石大师方介堪和著名诗人王敬身。自1980年以来，其书法篆刻作品曾多次参加国内外大型展览并被中国美术馆、故宫博物院等机构收藏；他多年担任中国书协评审委员，系中国当代实力派书法家代表人物之一，现为温州书画院名誉院长，浙江省书协顾问，中国篆刻院研究员，浙江省文史研究馆馆员，西泠印社理事等。享受国务院特殊津贴。</P><!--advertisement code begin--><!--none--><!--advertisement code end-->
<P>　　中国书法兰亭奖由中国文联和中国书法家协会于2001年创立，系中国书法艺术界的最高奖，每三年举办一次。本届兰亭奖从去年3月开始启动，设理论奖、佳作奖、艺术奖和终身成就奖四个奖项。其中，艺术奖为首设，旨在表彰50至75岁在书法篆刻创作及学术上具有相当成就和取得广泛影响的著名书法家。此次艺术奖全国共有51位书法名家入围初选，最终评出10名，我市林剑丹名列其中。除林剑丹作品外，我市青年书法家邱朝剑、陈其增的作品也入围了兰亭奖佳作奖。</P>
<P>　　另据了解，今年的中国兰亭书法节正值《兰亭序》问世1660周年，绍兴除举办传统的开幕式外，还将举行《兰亭的故事》展览、《兰亭序》问世1660年学术论坛、“中国兰亭书法节”数据库开通仪式暨《兰亭序》讲座、书画用品博览会、广场千人书法表演、王羲之陈列馆开馆仪式、西泠印社绍兴拍卖会等活动。</P>
<P>　　昨晚颁奖典礼结束之际，林剑丹还受邀上台，用古玺文字写下《兰亭序》中“畅叙幽情”四个大字。（记者 潘舒畅）&nbsp; </P>','hsg','2026-02-24 11:44:21','uploadfile/sytp2.jpg','32','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('243','春来花木俏 路边花卉市场生意好','系统公告','<P>&nbsp;&nbsp;&nbsp; 随着气温回升，花卉销售也继春节之后又迎来了一个销售旺季，不少市民除了到正规的花卉市场和花店买花，装点房间，丰富生活。钱库一些路边花卉市场也同样吸引了不少路人。</P>
<P>&nbsp;&nbsp;&nbsp; 日前，记者在环城北路钱高段看到，仅五六十米的路段就占着十几个流动摊位形成了不小的路边花卉市场，吸引了不少路人欣赏和购买。采访中，记者发现微型或小型盆景植物最受消费者欢迎。盆栽果蔬如樱桃番茄、金橘等因集观赏、食用、美化环境等多种功用于一体，是近期市场上的俏销产品。奇特观赏盆景植物销售情况也较好，小型树桩盆景、仙人球也颇受消费者喜欢。</P>
<P>&nbsp;&nbsp; 据一位摊主介绍，不少白领都喜欢买上一盆微型盆景植物放在办公桌上，既净化空气，又美化环境。此外，从3月开始也是装修房子的旺季，不少新装修的房子或多或少地存在甲醛污染，这也使得一些具有“排毒”功能的花卉销售更加火暴。(缪克梯)</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp3.jpg','18','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('244','交流频繁 成绩喜人：我县文学创作迎来良机','系统公告','<P>&nbsp;&nbsp;&nbsp; 日前，记者从县文学协会了解到，2010年我县文学创作队伍不断壮大，文学创作成绩喜人。</P>
<P>&nbsp;&nbsp;&nbsp; 一年来，我县作者计有四次参加了全国、省、市级大型文学交流活动，其中，10月份，散文作者陈革新参加了中国散文学会主办的2010（北京之秋）中国散文创作高峰论坛，得到了与会专家的肯定，同时还获得了2010年度的“中国当代散文奖”，全国共50人获奖。12月份，青年作者黄伟龙参加了“浙江作家看生态”大型活动，推进了创作动力。11月，市文联第七次代表大会隆重召开，我县6位文学作者参加了会议；2011年1月，第十一届温州文学周在平阳山门举行，我县5位作者参加了交流。</P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 据了解，一年来，我县不但外出交流十分频繁，文学创作也取得了骄人的成绩，部分作品在《江南》、《上海文学》、《诗刊》、《星星诗刊》等省级以上纯文学刊物发表，并有小说和诗歌作品被收入《相忘书（浙江内刊选集）》、《2010年诗歌精选》等，此外还有多部诗集和小说集等出版。（记者 叶晔）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp4.jpg','88','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('245','钱库镇组织共青团员在会议室观看省第十三次党代会','系统公告','<DIV>&nbsp;&nbsp;&nbsp; 6月6日上午，我省第十三次党代会在杭州隆重召开，共青团苍南县钱库镇委组织本镇50多位青年在镇会议室通过电视直播，观看了大会开幕式，在收看了省委书记赵洪祝同志向大会作的报告后，广大团员青年欢欣鼓舞，纷纷表达了他们的激动心情。</DIV>
<DIV>&nbsp;&nbsp;&nbsp; 赵洪祝同志代表中国共产党第十二届委员会所作的《坚持科学发展深化创业创新，为建设物质富裕精神富有的现代化浙江而奋斗》的工作报告中非常重视关心青年工作，令广大团员青年倍加感动、倍受鼓舞，立志按照《报告》中对青年提出的要求，以变化变革创新的理念，以时不我待，只争朝夕的责任感和紧迫感，立足本职岗位，以实际行动，为推进四大国家战略开辟浙江发展新蓝海而努力奋斗。</DIV>
<DIV>&nbsp;&nbsp;&nbsp; 团委林志远发表说，赵洪祝书记的报告非常明了到位，几处谈及党团建设的工作，充分体现了党对团务工作的重视，对进一步促进共青团事业努力实现又好又快发展指明了方向。站在新的历史时期，团的干部要在政治上要更加敏锐，思想上要更加开放，行动上要更加大胆。为建设高标准的双海双区苍南献计出力。为打造江南中心重镇增花添彩。为实现共产主义理想社会争先创优。同时提出团队干部要坚持不断加强政治理论武装，提高团队干部自身的素质。带领全镇青年为钱库各项社会事业发展谋划出力。(<SPAN style=\"FONT-SIZE: 10.5pt; FONT-FAMILY: 宋体; mso-ascii-font-family: &#39;Times New Roman&#39;; mso-hansi-font-family: &#39;Times New Roman&#39;; mso-bidi-font-size: 12.0pt; mso-font-kerning: 1.0pt; mso-bidi-font-family: &#39;Times New Roman&#39;; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA\"><FONT size=3>林志远</FONT></SPAN><SPAN style=\"FONT-SIZE: 10.5pt; FONT-FAMILY: &#39;Times New Roman&#39;,&#39;serif&#39;; mso-bidi-font-size: 12.0pt; mso-fareast-font-family: 宋体; mso-font-kerning: 1.0pt; mso-ansi-language: EN-US; mso-fareast-language: ZH-CN; mso-bidi-language: AR-SA\"> </SPAN>)</DIV>
<DIV></DIV>','hsg','2026-02-24 11:44:21','uploadfile/sytp5.jpg','53','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('246','矾山改造农贸市场','系统公告','<P>&nbsp;&nbsp;&nbsp; 苍南新闻网7月7日消息：经营面积达2300平方米的矾山镇农贸市场改造提升工程于近日开工，工期80天。</P>
<P>&nbsp;&nbsp;&nbsp; 据悉，该项目总投资210万元，惠及经营户近280户。建成后，将成为该镇规模最大、品种最齐全、基础设施最完善的农贸市场，为群众创造一个安全卫生整洁的购物环境。（记者 王姿 通讯员 邱新福 夏元通）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp6.jpg','63','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('247','麻胜聪要求人口计生工作抓早抓严抓好 确保完成年度目标任务','系统公告','<P>&nbsp;&nbsp;&nbsp; 今天，全县人口计生工作第一季度形势分析暨工作推进会召开。会议就今年以来人口计生重点工作动态管理指标完成情况进行了介绍和分析，县委副书记麻胜聪、副县长林小同参加会议。</P>
<P>&nbsp;&nbsp;&nbsp; 麻胜聪指出，年初，各乡镇面对繁重的各项任务统筹协调，紧抓计生工作不放松，特别是桥墩、钱库、金乡等乡镇在前两个月的工作中亮点凸显，值得肯定。但各乡镇要充分认识到当前计生工作形势依然严峻，根据目前的数据，初步推算我县第一季度在市里排名仍将处于末位，并有逐步被其他县（市、区）拉开差距的趋势，因此，各乡镇必须克难攻坚，将计生工作抓早、抓严、抓好，为今年计生工作打下坚实基础。</P>
<P>&nbsp;&nbsp;&nbsp; 2月份我县社会抚养费征收当年例数兑现率38.96%，金额兑现率65.01%，往年例数兑现率6.26%，往年金额兑现率48.69%，其中高额征收仅桥墩镇一例。从数据分析来看，部分乡镇只对容易征收的对象进行征收，放弃困难户、钉子户的征收。大部分乡镇在社会抚养费征收上普遍存在“数额不足、比例不高、威慑不够”的问题。麻胜聪要求，各乡镇要建立违法生育数据库，摸清违法生育对象财产、收入情况，对数据库内有车、有房、有产业的对象，严格落实足额征收，对高收入对象，要落实高额征收，确保征出气势，营造氛围。</P>
<P>&nbsp;&nbsp;&nbsp; 麻胜聪要求，驻村干部、村计生员要加大进村入户排查力度，及时掌握生孕信息，对卫生、公安等部门反馈的基础信息，要及时核对，确保生育信息掌握及时、准确。同时加强生孕全过程管理，对已孕再生育对象，要建立“1对1”跟踪管理档案，确保“一人一档案，一月一随访”。对于出生人口性别比整治，有关职能部门要乘势而上、一鼓作气，各乡镇要积极提供“两非”线索，确保第二季度打击“两非”任务数达全年任务数的一半以上。麻胜聪要求，计生工作要强化保障，有关部门要各司其职，积极抓好督查工作和宣传教育，我县接下来也将严格实行责任追究和“一票否决”制度。“喊破噪子不如甩开膀子”，各级计生部门要以时不我待的紧迫感和如履薄冰的责任感，进一步振奋精神、自我加压，争取在全市第一季度动态排名中有所进位，为圆满完成年度目标任务奠定坚实基础。（记者 李静静）</P>
<P>&nbsp;</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp7.jpg','3','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('248','苍南县解决水库移民问题实施细则出台','系统公告','日前，《苍南县解决大中型水库移民问题实施细则》出台，移民培训、创业致富、教育补助、温馨行动、救助保障、金融贷款、库区资源开发等七大项目帮助移民脱贫致富。 
<P>　　此次出台的实施细则立足新农村建设和后扶工作实际，在解决好个别贫困、特困移民温饱、子女入学等实际困难的同时，着眼于移民创业致富和安置区经济社会可持续性发展长远需要。具体内容包括移民培训项目、创业致富项目、教育补助项目、温馨行动项目、救助保障项目、金融贷款项目、库区资源开发等。</P><!--advertisement code begin--><!--advertisement code end-->
<P>　　《实施细则》规定，凡18―60周岁的移民均可免费参加实用技术、绿色证书、就业技术等培训。对移民参与的经济实体，连片种植（经营）大棚蔬菜基地20亩或移民个人经营10亩以上或种植水果、花卉、茶叶50亩以上者，并有良好经济效益，能够积极创造效益带动移民经济发展的；对年存栏生猪50头或牛30头或羊200头、鸡（鸭）5000羽或淡水养殖20亩以上或一次性投资20万元以上的养殖场等经济实体；对承包耕地100亩以上从事粮食生产的及承包土地50亩以上或一次性投资20万元以上发展效益农业，能够积极创造效益带动移民经济发展的皆可获得一次性5000-20000不等的补助。对年缴税费超过20万元的移民企业或当年一次性接纳移民就业人数20名以上的企业，也可获得10000-30000元不等补助。</P>
<P>　　每年9月份是学生开学的日子，今年水库移民将不再为子女学费而发愁了。《实施细则》规定，对于当年考取公办高中就读的，持有民政部门发放的《低保边缘户证》的在册移民子女，皆可凭县移民办发放的减免单到就读学校注册，学校于每年12月之前凭减免单统一与县移民办结算，每学年予以补助800元/人标准。对于考取全日制大专以上的在册移民子女在当年一次性给予1000元奖励。在细则的温馨行动项目中还规定，对贫困、特困移民户送温暖慰问面每年达到登记在册移民户的5%以上，原则上（当年）每户平均不少于500元慰问金，县财政予以补助50%。参加城乡居民合作医疗保险的移民，个人缴纳部分本人缴50%，其余50%由县财政补助。</P>
<P>　　为了更好地帮助移民创业，解决移民创业中资金筹集难等问题，此次细则特推出金融贷款项目，规定金融机构特别是县农村合作银行要利用现有的涉农贷款政策向水库移民倾斜，增加对水库移民所办企业、种养殖大户贷款比例，扩大移民有效担保物范围。同时，在不影响库区环境的前提下，县农、林、渔、水等有关部门要大力扶持库区移民农业生产，增加移民收入。对于移民从事效益农业开发的项目，要给予培训、立项、资金扶持等政策方面的倾斜。（记者 董少芬） </P>','hsg','2026-02-24 11:44:21','uploadfile/sytp8.jpg','58','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('249','海外华人科技社团整体回归落户大江东','系统公告','<strong> <h1 class=\"artTitle mb15\" style=\"font-family:\" font-size:32px;color:#555555;\"=\"\">
<p style=\"font-family:&quot;font-size:16px;color:#555555;\">
	在第二十届中国科协年会期间，欧洲华人微电子中国论坛与杭州大江东产业集聚区管委会签署落地协议，将永久会址落户杭州大江东。
</p>
<p style=\"font-family:&quot;font-size:16px;color:#555555;\">
	该论坛是2004年由在欧洲微电子领域留学、工作的华人于荷兰自发成立，为全欧华人专业协会联合会下属的专业交流合作组织，致力于微电子技术交流及创新发展。近年来，论坛被祖国开放活力的“大磁场”所吸引，成员先后回国创新创业，已培育涌现了近20位“国千”人才。
</p>
<p style=\"font-family:&quot;font-size:16px;color:#555555;\">
	论坛永久会址设立在大江东，旨在为论坛成员搭建回国创新创业的直通平台，促成成员带项目、带技术、带资金回归祖国，促进欧洲微电子领域技术和项目到中国落地和转化。论坛永久落户后，还将举办一年一度的中欧微电子论坛活动，组织国内外微电子领域的高端人才，围绕行业技术发展和行业企业技术需求开展合作交流。
</p>
<p style=\"font-family:&quot;font-size:16px;color:#555555;\">
	据了解，大江东还将与论坛共同建立微电子专业加速器，通过为微电子创业企业提供“基础服务+投融资服务+专家引导+技术服务”的加速服务体系，培育形成新兴支柱产业，合力打造杭州（大江东）微电子产业集群。
</p>
<br />
	</h1>
</strong>','hsg','2026-02-24 11:44:21','uploadfile/sytp9.jpg','67','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('250','圣诞元旦出游短线居多 报价比去年同期上涨20%左右','系统公告','&nbsp;&nbsp;&nbsp; 12月21日消息：圣诞和元旦临近，给冬季旅游市场添了一把旺火。今天，笔者从我县一些旅行社了解到，元旦小长假期间的特色游路线已全面上线，元旦游报价比去年同期上涨20%左右。
<P>&nbsp;&nbsp;&nbsp; 据了解，由于天气寒冷，元旦期间，海南、云南等气候温暖的长线游仍是热门路线。但是由于圣诞、元旦时间有限，节日出游还是以短线游居多。笔者了解到，像横店、厦门短线游产品，成了元旦假期市民出游的主要选择。</P><!--advertisement code begin--><!--advertisement code end-->
<P>&nbsp;&nbsp;&nbsp; 另外，旅行社的工作人员介绍，由于本周末就是圣诞节，不少年轻的朋友会选择外出过个白色圣诞节，像安吉滑雪、泡温泉的路线更受到了这些年轻族群的偏爱。（龙视）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp10.jpg','93','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('251','合作社区黑臭河垃圾河整治工作成果初现','系统公告','&nbsp;&nbsp;&nbsp; 近日，合作社区在辖区内内全面开展黑臭河、垃圾河专项整治行动，整治工作开展近半个月来，社区上下联动，鼓足干劲，营造氛围，保持紧督紧促的工作态势深入推进“两河”整治，取得了阶段性成效。 <BR>&nbsp;&nbsp;&nbsp; 近日来，随着“四边三化”工作的深入开展，合作社区对辖区内长21多公里的黑臭河垃圾河进行整治。工程除了启用挖掘机，还需作业人员穿着防水工作衣步入臭水中进行人工清理，清淤疏浚。村民反映说，村中的垃圾河污染不是一朝一夕形成的，几十年来村内企业作坊生产、生活垃圾成年累月就地倾倒入河中，再加上长年未进行清理，不仅垃圾成堆，还长满了水草。记者在现场看到，被清理过的河道恢复了本来面貌，还未被清理的河面上长满了绿油油的水草，密密麻麻的堵塞了整个河道。<BR>&nbsp;&nbsp;&nbsp; 记者在另一条河道中看到黑压压的水葫芦和水草，作业人员只能直接踩在水葫芦和水草上在河中打捞，可见水葫芦和水草泛滥成灾的程度。据了解，合作社区平均每天出动5台挖机，100多名作业人员，25辆垃圾运输车，每天清理垃圾上百吨。(吴连明)','hsg','2026-02-24 11:44:21','uploadfile/sytp1.jpg','13','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('252','CE百科TAPI天然气管道','系统公告','<p style=\"font-size:16px;font-family:Simsun;background-color:#FFFFFF;\">
	“TAPI”是土库曼斯坦-阿富汗-巴基斯坦和印度四国英文首字母的缩写，同时也用来指代一条拟议修建连接四国的天然气管道项目。TAPI天然气管道的设想早在上个世纪90年代就已经由美国提出，目的是将产自土库曼斯坦的天然气经由阿富汗输送给巴基斯坦和印度使用。但是由于阿富汗局势动乱和印度参与热情不高，这一管道项目的建设迟迟没能付诸实施。
</p>
<p style=\"font-size:16px;font-family:Simsun;background-color:#FFFFFF;\">
	&nbsp;
</p>
<p style=\"font-size:16px;font-family:Simsun;background-color:#FFFFFF;\">
	&nbsp;&nbsp;&nbsp; 对印度而言，从伊朗进口天然气在经济上更为划算。无论通过铺设海底管道还是修建IPI(伊朗-巴基斯坦-印度)管道印度从伊朗进口天然气成本更低。因此，印度更倾向于修建IPI天然气管道或者修建一条穿越阿拉伯海的海底管道。但是，印度从伊朗进口天然气却面临着来自美国和西方国家的压力，因为这将削弱西方社会对伊朗实施制裁的效果。<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;受美国压力和得到亚洲开发银行承诺提供贷款的情况下，印度决定放弃IPI天然气管道项目转而支持TAPI天然气管道项目。2010年土库曼斯坦、阿富汗、巴基斯坦和印度四国总统签署合作协议决定共同推动TAPI天然气管道项目建设。<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;根据规划，管道起点位于土库曼斯坦的阿什喀巴得，终点到巴基斯坦中东部城市木尔坦，设计总长度约为1800公里，管道直径超过1米，总造价估计将达到76亿美元，预计2016年完工。届时，每天最多能够为阿富汗提供1400万立方米天然气，还能为巴基斯坦和印度分别输送3800万立方米天然气。<br />
<br />
&nbsp;&nbsp;&nbsp;&nbsp;根据相关协议，印度将以每百万英热单位49.5美分的价格分别向巴基斯坦和阿富汗支付过境费；而巴基斯坦只需以同样价格向阿富汗支付过境费即可。项目建成后，巴基斯坦有望每年从印度那里获得2.17亿美元的过境费，阿富汗每年大约可以获得4亿美元的过境费。
</p>','hsg','2026-02-24 11:44:21','uploadfile/sytp2.jpg','54','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('253','九三学社温州市委会召开全会','系统公告','&nbsp;&nbsp;&nbsp;&nbsp; 九三学社温州市七届六次全委扩大会议2月12日举行。会议学习了中共十七届五中全会精神及九三学社中央、省委有关会议精神，听取市政协副主席、九三学社温州市委会主委黄兆鸽所作的2010年工作报告，谋划部署新一年工作。 
<P>　　去年一年，九三学社温州市委会在中共温州市委和九三学社浙江省委的领导下，紧紧围绕市委、市政府中心工作，认真履行参政议政职能，牢固树立和努力践行社会主义核心价值体系，切实加强自身建设，积极开展社会服务，各项工作取得较好成效。</P>
<P>　　会议提出，今年是实施“十二五”规划的开局之年，九三学社温州市委会将重点围绕“十二五”规划实施、六城联创、产业结构调整、经济发展转型等问题开展调研，积极建言献策，不断提高参政议政的质量和水平。同时，进一步加强自身建设，围绕构建和谐社会，组织开展科技下乡、科普讲座、医疗义诊、扶贫帮困等活动，加大社会服务工作力度。</P>
<P>　　会议还表彰了上年度先进集体和个人。（记者 潘秀慧）</P>
<META name=ContentEnd><!--ZJEG_RSS.content.end--><!--<$[信息内容]>end-->','hsg','2026-02-24 11:44:21','uploadfile/sytp3.jpg','79','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('254','玩偶岛是什么样的','系统公告','<P align=left>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 距离墨西哥城不远的玩偶岛(Isla De Las Muecas)，是一个极为诡异地方。一千多个鬼娃娃遍布于全岛，这些娃娃钉在树上或是挂在灌木丛中。<BR _extended=\"true\">　　　　　<BR _extended=\"true\">　　当地人认为这样有驱鬼的作用，这个故事是这样的,“鬼娃娃”的背后有这样一个故事：1951年一个小女孩在当地的运河淹死了，她的灵魂一直不能得到安息，住在附近的花匠Julián Santana Barrera经常在梦中见到小女孩的鬼魂，为此他痛苦不堪。终于，他找到了一个对策：旧布娃娃好像能使小女孩的鬼魂敬而远之。于是，他开始把运河里捞出来的旧布娃娃(通常是游船上的乘客扔掉的)挂在小岛的树上。<BR></P>&nbsp;&nbsp; 　旧布娃娃使鬼魂敬而远之这以后，陆陆续续不断有好奇的人把自己的旧娃娃挂出来。这么多娃娃来“装饰”的房子，小女孩应该不敢靠近了吧，尽管如此，花匠也并没有得到“善终”。整整五十年之后，也就是2001年，他自己也淹死在同一条运河，就在小女孩淹死的地方。<BR _extended=\"true\"><BR _extended=\"true\">　　<BR _extended=\"true\">','hsg','2026-02-24 11:44:21','uploadfile/sytp4.jpg','55','');
insert into `xinwentongzhi`(`id`,`biaoti`,`leibie`,`neirong`,`tianjiaren`,`addtime`,`shouyetupian`,`dianjilv`,`zhaiyao`) values('255','110千伏望里变电站投运（图）','系统公告','<P align=center><IMG src=\"http://pic2.66wz.com/0/10/40/42/10404286_958087.jpg\" border=0> </P>
<P></P><!--advertisement code begin--><!--advertisement code end-->
<P></P>
<P>&nbsp;&nbsp;&nbsp; 4月26日消息：近日，新建的110千伏望里变电站顺利投运。据悉，110千伏望里变的顺利投运，将有效解决望里片区用电紧张的状况，使得110千伏八岱变的重负荷得到了分流，同时也将提高供电可靠性。（陈君/摄）</P>','hsg','2026-02-24 11:44:21','uploadfile/sytp5.jpg','29','');
CREATE TABLE `yonghuzhuce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zhanghao` varchar(50) DEFAULT NULL,
  `mima` varchar(50) DEFAULT NULL,
  `xingming` varchar(50) DEFAULT NULL,
  `xingbie` varchar(50) DEFAULT NULL,
  `diqu` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `zhaopian` varchar(50) DEFAULT NULL,
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `issh` varchar(10) DEFAULT '否',
  `shouji` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;
insert into `yonghuzhuce`(`id`,`zhanghao`,`mima`,`xingming`,`xingbie`,`diqu`,`Email`,`zhaopian`,`addtime`,`issh`,`shouji`) values('26','555','555','何升高','男','浙江','gsgs@163.com','uploadfile/yhtx1.jpg','2026-02-24 11:44:21','是','32235643');
insert into `yonghuzhuce`(`id`,`zhanghao`,`mima`,`xingming`,`xingbie`,`diqu`,`Email`,`zhaopian`,`addtime`,`issh`,`shouji`) values('27','leejie','leejie','李龙','男','湖北','fege@126.com','uploadfile/yhtx2.jpg','2026-02-24 11:44:21','是','65754745');
insert into `yonghuzhuce`(`id`,`zhanghao`,`mima`,`xingming`,`xingbie`,`diqu`,`Email`,`zhaopian`,`addtime`,`issh`,`shouji`) values('28','mygod','mygod','陈德才','男','河南','gshf@yahoo.com','uploadfile/yhtx3.jpg','2026-02-24 11:44:21','是','53464373');
insert into `yonghuzhuce`(`id`,`zhanghao`,`mima`,`xingming`,`xingbie`,`diqu`,`Email`,`zhaopian`,`addtime`,`issh`,`shouji`) values('29','xwxxmx','xwxxmx','吴江','女','北京','jrjtr@163.com','uploadfile/yhtx4.jpg','2026-02-24 11:44:21','否','52356474');
CREATE TABLE `youqinglianjie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wangzhanmingcheng` varchar(50) DEFAULT NULL,
  `wangzhi` varchar(50) DEFAULT NULL,
  `addtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=gb2312;
insert into `youqinglianjie`(`id`,`wangzhanmingcheng`,`wangzhi`,`addtime`,`logo`) values('16','百度','http://www.baidu.com','2026-02-24 11:44:21','uploadfile/baidu.jpg');
insert into `youqinglianjie`(`id`,`wangzhanmingcheng`,`wangzhi`,`addtime`,`logo`) values('17','谷歌','http://www.google.cn','2026-02-24 11:44:21','uploadfile/google.jpg');
insert into `youqinglianjie`(`id`,`wangzhanmingcheng`,`wangzhi`,`addtime`,`logo`) values('18','新浪','http://www.sina.com','2026-02-24 11:44:21','uploadfile/sina.jpg');
insert into `youqinglianjie`(`id`,`wangzhanmingcheng`,`wangzhi`,`addtime`,`logo`) values('19','QQ','http://www.qq.com','2026-02-24 11:44:21','uploadfile/qq.jpg');
insert into `youqinglianjie`(`id`,`wangzhanmingcheng`,`wangzhi`,`addtime`,`logo`) values('20','网易','http://www.163.com','2026-02-24 11:44:21','uploadfile/yahoo.jpg');
