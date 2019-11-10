/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.3.16-MariaDB : Database - csm_web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_aviation_electronics` */

DROP TABLE IF EXISTS `tbl_aviation_electronics`;

CREATE TABLE `tbl_aviation_electronics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `short_content_idn` text NOT NULL,
  `content` text NOT NULL,
  `content_idn` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_electronics` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_aviation_electronics` */

insert  into `tbl_aviation_electronics`(`id`,`name`,`short_content`,`short_content_idn`,`content`,`content_idn`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_electronics`) values 
(1,'PLC Controller design and implementations','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers.','','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers. <br>','','1','aviation_electronics-1.PNG','PLC Controller design and implementations','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers. ','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers. ','plc-controller-design-and-implementations.html'),
(2,'Power electronics design and manufacturing','Up to 400 Amps PWM driving \r\nInput voltage: 18-28 VDC\r\nSmart control (Current, temperature and luck sensing) \r\n...','','<ul><li>Up to 400 Amps PWM driving</li><li>Input voltage: 18-28 VDC</li><li>Smart control (Current, temperature and luck sensing)</li><li>Programmable RPM controlling</li><li>Time controlling (programmable delays)</li><li>Soft and fast running, soft and fast stop</li><li>RS-422 serial interface, status and warnings report</li><li>Discrete and digital command interface (controlling by panel or computer interface)<br>Noise isolation</li><li>Harsh environmental operation ( Drop, Shock, Strike, Vibration and temperature (-20 to +60) resistant )<br></li></ul>','','1','aviation_electronics-2.jpg','Power electronics design and manufacturing ','Power electronics design and manufacturing ','Power electronics design and manufacturing ','power-electronics-design-and-manufacturing.html'),
(3,'Man-Machine Interface','our MMI interface display panels are designed based on customer requirements in order for machinery programming and smart operations inspection.','','our MMI interface display panels are designed based on customer requirements in order for machinery programming and smart operations inspection. These products are suitable for industrial automation and special vehicles and portable sets.','','1','aviation_electronics-3.jpg','MMI (Man-Machine Interface)','MMI (Man-Machine Interface)','MMI (Man-Machine Interface)','man-machine-interface.html'),
(4,'Ruggedized electronic controllers','we design ruggedized electronic controlling and processing systems for all defense applications. Our products','','we design ruggedized electronic controlling and processing systems for all defense applications. Our products Are qualified by military standards requirements. The processing systems are designed for army and naval application.<br><br>','','2','aviation_electronics-4.jpg','Ruggedized electronic controllers','Ruggedized electronic controllers','Ruggedized electronic controllers','ruggedized-electronic-controllers.html'),
(5,'Harsh environmental power drivers','power electronic systems for defense and harsh environmental industrial electronic. \r\nDesigned based on military standards','','power electronic systems for defense and harsh environmental industrial electronic. <br>Designed based on military standards <br>','','2','aviation_electronics-5.jpg','Harsh environmental power drivers ','Harsh environmental power drivers ','Harsh environmental power drivers ','harsh-environmental-power-drivers.html'),
(6,'Mission computers','Mission computers','','<p>Mission computers <br></p>','','3','aviation_electronics-6.jpg','Mission computers ','Mission computers ','Mission computers ','mission-computers.html'),
(7,'Display systems Multi-Function Display-MFD Moving Map Display etc','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','','3','aviation_electronics-7.jpg','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','display-systems-multi-function-display-mfd-moving-map-display-etc.html'),
(8,'Sensor interface units','SIU converts analog and discrete signals from diverse source and sensors of aircraft to serial interface protocol, such  as ARINC429, RS-422/485, CAN (ARINC 825) or AFDX (ARINC664)','','<ul><li>SIU converts analogue and discrete signals from diverse source and sensors of aircraft to serial interface protocol, such  as ARINC429, RS-422/485, CAN (ARINC 825) or AFDX (ARINC664)</li><li>Converts signals from:</li><ul><li>Air pressure sensors</li><li>Free Gyros, compass </li><li>INS systems  </li><li>All Syncro and resolver sensors</li><li>Radio Altimeter</li><li>Fuel sensors</li><li>Engine sensors<br></li></ul></ul>','','3','aviation_electronics-8.jpg','Sensor interface units','Sensor interface units','Sensor interface units','sensor-interface-units.html');

/*Table structure for table `tbl_aviation_electronics_category` */

DROP TABLE IF EXISTS `tbl_aviation_electronics_category`;

CREATE TABLE `tbl_aviation_electronics_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_aviation_electronics_category` */

insert  into `tbl_aviation_electronics_category`(`category_id`,`category_name`,`status`) values 
(1,'Industrial Electronics','Active'),
(2,'Defense Electronic','Active'),
(3,'Aviation Electronics','Active');

/*Table structure for table `tbl_aviation_electronics_desc` */

DROP TABLE IF EXISTS `tbl_aviation_electronics_desc`;

CREATE TABLE `tbl_aviation_electronics_desc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aviation_electronics_desc_photo` varchar(255) NOT NULL,
  `aviation_electronics_desc_heading` varchar(255) NOT NULL,
  `ed_desc_heading_idn` varchar(255) NOT NULL,
  `aviation_electronics_desc_content` text NOT NULL,
  `ed_desc_content_idn` text NOT NULL,
  `mt_aviation_electronics_desc` varchar(255) NOT NULL,
  `mk_aviation_electronics_desc` text NOT NULL,
  `md_aviation_electronics_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_aviation_electronics_desc` */

insert  into `tbl_aviation_electronics_desc`(`id`,`aviation_electronics_desc_photo`,`aviation_electronics_desc_heading`,`ed_desc_heading_idn`,`aviation_electronics_desc_content`,`ed_desc_content_idn`,`mt_aviation_electronics_desc`,`mk_aviation_electronics_desc`,`md_aviation_electronics_desc`) values 
(1,'aviation_electronics_desc_photo.png','Electronic technology ','','<p>Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR etc) processors.</p><h4>Drivers and controllers</h4><p>Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.</p><p align=\"left\"><b><span style=\"font-family: \" arial\";\"=\"\"><br></span></b></p><h4 align=\"left\"><span style=\"font-family: \" arial\";\"=\"\">Product: Navigation and moving Maps</span></h4><p align=\"left\"><b>Functions: Multi-purpose display</b></p><ul><li>Moving the map and heading display</li><li>GEO Positioning</li><li>Flight Data</li><li>Aircraft Status data (Roll, Pitch, Yaw)</li><li>Camera Interface</li><li>Map data loading and settings</li><li>DO-160 Compatibility</li><li>Sunlight readable display</li></ul><p><b><br></b></p><h4>Aircraft Navigation and engine sensors converter unit</h4><ul><li><b>AIU </b>converts analog and discrete signals from diverse source and sensors of aircraft to serial interface protocol, such as ARINC429, RS-422/485, CAN (ARINC 825) or AFDX (ARINC664)</li><li>Converts signals from:</li><ul><li>Air pressure sensors</li><li>Fee Gryros, compass</li><li>INS systems</li><li>All Syncro and resolver sensors</li><li>Radio Altimeter</li><li>Fuel Sensors</li><li>Engine Sensors</li></ul></ul><h4><b><br></b></h4><h4>High Power Industrial DC Motor Driver</h4><ul><li>Up to 400 Amps, PWM Driving</li><li>Input voltage: 18-28 DC</li><li>Smart Control (Current, Temperature and luck sensing)</li><li>Programmable RPM Controlling</li><li>Time Controlling (Programmable delays)</li><li>soft and fast running, soft and fast stop</li><li>RS-422 serial interface, status, and warnings repot</li><li>Discrete and digital command interface (controlling by panel or computer interface)</li><li>Noise Isolation</li><li>Harsh environmental operation (Drop, Shock, Strike, Vibration and temperature (-20 to +60) resistant)<br></li></ul><p align=\"right\"></p>','','Electronic technology ','Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR, etc) processors. Drivers and controllers Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.','Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR, etc) processors. Drivers and controllers Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.');

/*Table structure for table `tbl_aviation_electronics_id` */

DROP TABLE IF EXISTS `tbl_aviation_electronics_id`;

CREATE TABLE `tbl_aviation_electronics_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_electronics` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_aviation_electronics_id` */

insert  into `tbl_aviation_electronics_id`(`id`,`name`,`short_content`,`content`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_electronics`) values 
(1,'PLC Controller design and implementations','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers.','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers. <br>','1','aviation_electronics-1.PNG','PLC Controller design and implementations','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers. ','design and integration PLC controlling solutions for Industrial Automation. Our engineering team is an expert on Several PLC controllers, therefore, we provide the most efficient solutions for our customers. ','plc-controller-design-and-implementations.html'),
(2,'Power electronics design and manufacturing','Up to 400 Amps PWM driving \r\nInput voltage: 18-28 VDC\r\nSmart control (Current, temperature and luck sensing) \r\n...','<ul><li>Up to 400 Amps PWM driving</li><li>Input voltage: 18-28 VDC</li><li>Smart control (Current, temperature and luck sensing)</li><li>Programmable RPM controlling</li><li>Time controlling (programmable delays)</li><li>Soft and fast running, soft and fast stop</li><li>RS-422 serial interface, status and warnings report</li><li>Discrete and digital command interface (controlling by panel or computer interface)<br>Noise isolation</li><li>Harsh environmental operation ( Drop, Shock, Strike, Vibration and temperature (-20 to +60) resistant )<br></li></ul>','1','aviation_electronics-2.jpg','Power electronics design and manufacturing ','Power electronics design and manufacturing ','Power electronics design and manufacturing ','power-electronics-design-and-manufacturing.html'),
(3,'Man-Machine Interface','our MMI interface display panels are designed based on customer requirements in order for machinery programming and smart operations inspection.','our MMI interface display panels are designed based on customer requirements in order for machinery programming and smart operations inspection. These products are suitable for industrial automation and special vehicles and portable sets.','1','aviation_electronics-3.jpg','MMI (Man-Machine Interface)','MMI (Man-Machine Interface)','MMI (Man-Machine Interface)','man-machine-interface.html'),
(4,'Ruggedized electronic controllers','we design ruggedized electronic controlling and processing systems for all defense applications. Our products','we design ruggedized electronic controlling and processing systems for all defense applications. Our products Are qualified by military standards requirements. The processing systems are designed for army and naval application.<br><br>','2','aviation_electronics-4.jpg','Ruggedized electronic controllers','Ruggedized electronic controllers','Ruggedized electronic controllers','ruggedized-electronic-controllers.html'),
(5,'Harsh environmental power drivers','power electronic systems for defense and harsh environmental industrial electronic. \r\nDesigned based on military standards','power electronic systems for defense and harsh environmental industrial electronic. <br>Designed based on military standards <br>','2','aviation_electronics-5.jpg','Harsh environmental power drivers ','Harsh environmental power drivers ','Harsh environmental power drivers ','harsh-environmental-power-drivers.html'),
(6,'Mission computers','Mission computers','<p>Mission computers <br></p>','3','aviation_electronics-6.jpg','Mission computers ','Mission computers ','Mission computers ','mission-computers.html'),
(7,'Display systems Multi-Function Display-MFD Moving Map Display etc','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','3','aviation_electronics-7.jpg','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','display-systems-multi-function-display-mfd-moving-map-display-etc.html'),
(8,'Sensor interface units','SIU converts analog and discrete signals from diverse source and sensors of aircraft to serial interface protocol, such  as ARINC429, RS-422/485, CAN (ARINC 825) or AFDX (ARINC664)','<ul><li>SIU converts analogue and discrete signals from diverse source and sensors of aircraft to serial interface protocol, such  as ARINC429, RS-422/485, CAN (ARINC 825) or AFDX (ARINC664)</li><li>Converts signals from:</li><ul><li>Air pressure sensors</li><li>Free Gyros, compass </li><li>INS systems  </li><li>All Syncro and resolver sensors</li><li>Radio Altimeter</li><li>Fuel sensors</li><li>Engine sensors<br></li></ul></ul>','3','aviation_electronics-8.jpg','Sensor interface units','Sensor interface units','Sensor interface units','sensor-interface-units.html');

/*Table structure for table `tbl_aviation_electronics_photo` */

DROP TABLE IF EXISTS `tbl_aviation_electronics_photo`;

CREATE TABLE `tbl_aviation_electronics_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aviation_electronics_id` int(11) NOT NULL,
  `slug_electronics` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_aviation_electronics_photo` */

insert  into `tbl_aviation_electronics_photo`(`id`,`aviation_electronics_id`,`slug_electronics`,`photo`) values 
(1,1,'plc-controller-design-and-implementations.html','1.jpg'),
(2,1,'plc-controller-design-and-implementations.html','2.jpg'),
(3,1,'plc-controller-design-and-implementations.html','3.jpg'),
(4,1,'plc-controller-design-and-implementations.html','4.jpg'),
(5,1,'plc-controller-design-and-implementations.html','5.jpg'),
(6,1,'plc-controller-design-and-implementations.html','6.jpg'),
(7,1,'plc-controller-design-and-implementations.html','7.jpg'),
(8,1,'plc-controller-design-and-implementations.html','8.jpg'),
(9,7,'display-systems-multi-function-display-mfd-moving-map-display-etc.html','9.jpg'),
(10,7,'display-systems-multi-function-display-mfd-moving-map-display-etc.html','10.jpg'),
(11,7,'display-systems-multi-function-display-mfd-moving-map-display-etc.html','11.jpg'),
(12,7,'display-systems-multi-function-display-mfd-moving-map-display-etc.html','12.jpg'),
(13,5,'harsh-environmental-power-drivers.html','13.jpg'),
(14,5,'harsh-environmental-power-drivers.html','14.jpg'),
(15,3,'man-machine-interface.html','15.jpg'),
(16,3,'man-machine-interface.html','16.jpg'),
(17,6,'mission-computers.html','17.jpg'),
(18,6,'mission-computers.html','18.jpg'),
(19,6,'mission-computers.html','19.jpg'),
(20,2,'power-electronics-design-and-manufacturing.html','20.jpg'),
(21,4,'ruggedized-electronic-controllers.html','21.jpg'),
(22,4,'ruggedized-electronic-controllers.html','22.jpg'),
(23,4,'ruggedized-electronic-controllers.html','23.jpg');

/*Table structure for table `tbl_comment` */

DROP TABLE IF EXISTS `tbl_comment`;

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_comment` */

insert  into `tbl_comment`(`id`,`code_body`,`code_main`) values 
(1,'<div id=\"fb-root\"></div>\r\n<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v4.0&appId=478972548833723&autoLogAppEvents=1\"></script>','<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>');

/*Table structure for table `tbl_content_home` */

DROP TABLE IF EXISTS `tbl_content_home`;

CREATE TABLE `tbl_content_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_content_home` */

insert  into `tbl_content_home`(`id`,`photo`,`heading`,`content`,`link`) values 
(1,'content-home-1.png','fa-cloud-download','Company Profile','download'),
(2,'content-home-2.png','fa-archive','Our Products','product'),
(3,'content-home-3.png','fa-briefcase','Career','ciptasinergi-career.html'),
(4,'content-home-4.png','fa-industry','Facility','facility');

/*Table structure for table `tbl_content_home_company_profile` */

DROP TABLE IF EXISTS `tbl_content_home_company_profile`;

CREATE TABLE `tbl_content_home_company_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_pdf1` varchar(255) NOT NULL,
  `spanduk1` varchar(255) NOT NULL,
  `file_pdf2` varchar(255) NOT NULL,
  `spanduk2` varchar(255) NOT NULL,
  `file_pdf3` varchar(255) NOT NULL,
  `spanduk3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_content_home_company_profile` */

insert  into `tbl_content_home_company_profile`(`id`,`file_pdf1`,`spanduk1`,`file_pdf2`,`spanduk2`,`file_pdf3`,`spanduk3`) values 
(1,'profile_perusahaan1.pdf','profile_perusahaan1.jpg','profile_perusahaan2.pdf','profile_perusahaan2.jpg','profile_perusahaan3.pdf','profile_perusahaan3.jpg');

/*Table structure for table `tbl_facility` */

DROP TABLE IF EXISTS `tbl_facility`;

CREATE TABLE `tbl_facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `short_content_idn` text NOT NULL,
  `content` text NOT NULL,
  `content_idn` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_facility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_facility` */

insert  into `tbl_facility`(`id`,`name`,`short_content`,`short_content_idn`,`content`,`content_idn`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_facility`) values 
(1,'High Speed CNC Milling Machining Center','Our production process is supported by a high-speed CNC Milling Machining center.','Proses produksi kami didukung oleh pusat Mesin Milling CNC berkecepatan tinggi.','<p align=\"justify\">Our production processes are supported by CNC Milling Machining Center, operated by operators of CNC machine experienced and assisted by specialist an experienced, as well the production process will be faster to be more productive, and resulting in a high-quality product, the following specifications CNC Milling we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">MATRIX 560AH / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 12000 rpm, Travel: 560x430x450<br></p></td><td align=\"center\">80%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">F1-LG 1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1000x510x510<br></p></td><td align=\"center\">90%<br></td><td align=\"center\">186.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">PRO-1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 10000 rpm, Travel: 1000x600x630<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">166.000<br></td><td align=\"center\">0,007/300<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">S-PLUSH 10AP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1020x520x530<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">205.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">SMC-5 / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr></tbody></table><p>With the guarantee of providing quality and tested products. <br></p>','<p align=\"justify\">Proses produksi kami didukung oleh CNC Milling Machining Centre, yang dioperasikan oleh operator mesin CNC yang berpengalaman dan dibantu oleh spesialis yang berpengalaman, serta proses produksi akan lebih cepat menjadi lebih produktif, dan menghasilkan produk yang berkualitas tinggi, berikut spesifikasi Penggilingan CNC yang kami gunakan:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">MATRIX 560AH / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 12000 rpm, Travel: 560x430x450<br></p></td><td align=\"center\">80%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">F1-LG 1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1000x510x510<br></p></td><td align=\"center\">90%<br></td><td align=\"center\">186.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">PRO-1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 10000 rpm, Travel: 1000x600x630<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">166.000<br></td><td align=\"center\">0,007/300<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">S-PLUSH 10AP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1020x520x530<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">205.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">SMC-5 / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr></tbody></table><p>Dengan jaminan memberikan produk yang berkualitas dan teruji.<br></p>','1','facility-1.jpg','High Speed CNC Milling Machining Center','','','high-speed-cnc-milling-machining-center.html'),
(2,'CNC Turning','The proper coating is key to maximizing the operational efficiency of metal cutting.','Pelapisan yang tepat adalah kunci untuk memaksimalkan efisiensi operasional pemotongan logam.','<p align=\"justify\">The proper cutting is key to maximizing the operational efficiency of metal cutting. Our production processes are supported by the CNC Turning Machining \r\nCenter, operated by operators of CNC machine experienced and assisted by\r\n specialist an experienced, as well the production process will be \r\nfaster to be more productive, and resulting in a high-quality product, \r\nthe following specifications CNC Turning we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC TURNING MACHINE<br></td><td align=\"center\">CAK 4085D / SHEN YANG<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850</p></td><td align=\"center\">50%<br></td><td align=\"center\">136.000<br></td><td align=\"center\">0,012<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC TURNING MACHINE</td><td align=\"center\">MAZAK QT T6<br></td><td align=\"center\"><p>Spindle Speed 7000 rpm, Travel: 100x100</p></td><td align=\"center\">50%<br></td><td align=\"center\">123.000<br></td><td align=\"center\">0,002<br></td></tr></tbody></table><p>Have a special spec? We can help match the proper coating to the tool and task.</p>','<p align=\"justify\">Pemotongan yang tepat adalah kunci untuk memaksimalkan efisiensi operasional pemotongan logam. Proses produksi kami didukung oleh CNC Turning Machining Center, yang dioperasikan oleh operator mesin CNC yang berpengalaman dan dibantu oleh spesialis yang berpengalaman, serta proses produksi akan lebih cepat menjadi lebih produktif, dan menghasilkan produk yang berkualitas tinggi, berikut spesifikasi CNC Turning yang kami gunakan:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC TURNING MACHINE<br></td><td align=\"center\">CAK 4085D / SHEN YANG<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850</p></td><td align=\"center\">50%<br></td><td align=\"center\">136.000<br></td><td align=\"center\">0,012<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC TURNING MACHINE</td><td align=\"center\">MAZAK QT T6<br></td><td align=\"center\"><p>Spindle Speed 7000 rpm, Travel: 100x100</p></td><td align=\"center\">50%<br></td><td align=\"center\">123.000<br></td><td align=\"center\">0,002<br></td></tr></tbody></table><p>Punya spec khusus? Kami dapat membantu mencocokkan lapisan yang tepat dengan alat dan tugas.</p>','1','facility-2.jpg','CNC Turning','','','cnc-turning.html'),
(3,'Conv. Machining Center and Surf. Grinding','Besides CNC Machining Center, Our production process is supported by High-Speed Conventional. Machining Center and Surface Grinding,','Selain Pusat Mesin CNC, proses produksi kami didukung oleh Konvensional Kecepatan Tinggi. Pusat Permesinan dan Penggilingan Permukaan,','<p align=\"justify\">Besides CNC Machining Center, Our production process is supported by<b> Conventional. Machining Center and Surface Grinding</b>, operated by operators of CNC machine experienced and assisted by engineering an experienced, as well the production process will be faster to be more productive and resulting in a high-quality product, the following specifications <b>Conventional. Machining Center and Surface Grinding</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM5 / STANDARD</td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 1000x450x450<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,015<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM4 / PHOEBUS<br></td><td align=\"center\"><p>Spindle Speed 1800 rpm, Travel: 775x400x400<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MAZAK<br></td><td align=\"center\"><p>Spindle Speed 2500 rpm, Travel: 775x400x401</p></td><td align=\"center\">60%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MV-11<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">RONG FU<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250</p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08</td></tr><tr><td align=\"center\">6.<br></td><td align=\"center\">CONV. TURNING MACHINE</td><td align=\"center\">COLCHESTER<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 200x600</p></td><td align=\"center\">80%<br></td><td align=\"center\">50.000<br></td><td align=\"center\">0,01</td></tr><tr><td align=\"center\">7.<br></td><td align=\"center\">SURFACE GRINDING<br></td><td align=\"center\">SG 2040 / STANDARD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x200x300</p></td><td align=\"center\">40%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,003</td></tr></tbody></table><p>With the guarantee of providing quality and tested products. <br></p>','<p align=\"justify\">Selain Pusat Mesin CNC, proses produksi kami didukung oleh Konvensional. Machining Center dan Surface Grinding, yang dioperasikan oleh operator mesin CNC yang berpengalaman dan dibantu oleh teknik yang berpengalaman, juga proses produksinya akan lebih cepat menjadi lebih produktif dan menghasilkan produk yang berkualitas tinggi, berikut spesifikasi Konvensional. Machining Center dan Surface Grinding yang kami gunakan:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM5 / STANDARD</td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 1000x450x450<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,015<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM4 / PHOEBUS<br></td><td align=\"center\"><p>Spindle Speed 1800 rpm, Travel: 775x400x400<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MAZAK<br></td><td align=\"center\"><p>Spindle Speed 2500 rpm, Travel: 775x400x401</p></td><td align=\"center\">60%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MV-11<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">RONG FU<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250</p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08</td></tr><tr><td align=\"center\">6.<br></td><td align=\"center\">CONV. TURNING MACHINE</td><td align=\"center\">COLCHESTER<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 200x600</p></td><td align=\"center\">80%<br></td><td align=\"center\">50.000<br></td><td align=\"center\">0,01</td></tr><tr><td align=\"center\">7.<br></td><td align=\"center\">SURFACE GRINDING<br></td><td align=\"center\">SG 2040 / STANDARD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x200x300</p></td><td align=\"center\">40%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,003</td></tr></tbody></table><p>Dengan jaminan memberikan produk yang berkualitas dan teruji. <br></p>','1','facility-3.jpg','Conv. Machining Center and Surf. Grinding','','','conv-machining-center-and-surf-grinding.html'),
(4,'Production Workshop and Parking Area','In the process products in the workshop, we use the total area: 500m2','Dalam proses produk di bengkel, kami menggunakan total area: 500m2','<p>In the production workshop process, we use the total area: 500m2 where:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Workshop</b><br></td><td align=\"center\"><b>Area</b><br></td></tr><tr><td align=\"center\"><b>1<br></b></td><td align=\"center\">CNC Workshop<br></td><td align=\"center\">154 m2<br></td></tr><tr><td align=\"center\"><b>2<br></b></td><td align=\"center\">Workshop Conventional<br></td><td align=\"center\">160 m2<br></td></tr><tr><td align=\"center\"><b>3<br></b></td><td align=\"center\">Car parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>4<br></b></td><td align=\"center\">Motorcycle parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>5<br></b></td><td align=\"center\">Others<br></td><td align=\"center\">66 m2<br></td></tr></tbody></table><p>To provide comfort and flexibility process production, so that the process in the production well be better and for the data collection included for the placement of the process production easier process.</p><p>to create comfort and safety in the workplace in the process production, the main safety procedures to provide signposts reminders or track safety in the workplace and we also write the symbols of safety symbol procedure in the workplace, because safety is the main thing in the work.<br></p>','<p>Dalam proses bengkel produksi, kami menggunakan total area: 500m2 di mana:<br></p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Workshop</b><br></td><td align=\"center\"><b>Area</b><br></td></tr><tr><td align=\"center\"><b>1<br></b></td><td align=\"center\">CNC Workshop<br></td><td align=\"center\">154 m2<br></td></tr><tr><td align=\"center\"><b>2<br></b></td><td align=\"center\">Workshop Conventional<br></td><td align=\"center\">160 m2<br></td></tr><tr><td align=\"center\"><b>3<br></b></td><td align=\"center\">Car parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>4<br></b></td><td align=\"center\">Motorcycle parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>5<br></b></td><td align=\"center\">Others<br></td><td align=\"center\">66 m2<br></td></tr></tbody></table>Untuk memberikan kenyamanan dan fleksibilitas proses produksi, sehingga proses dalam sumur produksi menjadi lebih baik dan untuk pengumpulan data termasuk untuk penempatan proses produksi proses yang lebih mudah.<br><br>untuk menciptakan kenyamanan dan keselamatan di tempat kerja dalam proses produksi, prosedur keselamatan utama untuk memberikan pengingat plang atau melacak keselamatan di tempat kerja dan kami juga menulis simbol prosedur simbol keselamatan di tempat kerja, karena keselamatan adalah hal utama dalam pekerjaan .<br>','1','facility-4.jpg','Production Workshop and Parking Area','','','production-workshop-and-parking-area.html'),
(5,'Office Area','for the management workplace, staff, asset placement, and all production data, like customer data we use an area of 70m2 located on the 2nd floor above the production area precisely at the top of the CNC Machining Center area.','untuk tempat kerja manajemen, staf, penempatan aset, dan semua data produksi, seperti data pelanggan kami menggunakan area seluas 70m2 yang terletak di lantai 2 di atas area produksi tepatnya di bagian atas area Pusat Mesin CNC.','<p>for the management workplace, staff, asset placement, and all production data, like customer data we use an area of 70m2 located on the 2nd floor above the production area precisely at the top of the CNC Machining Center area.</p><p>Management activities, engineering modeling, and the entire staff and administration activities carried out at this office.<br></p><p> <br></p>','<p>untuk tempat kerja manajemen, staf, penempatan aset, dan semua data produksi, seperti data pelanggan kami menggunakan area seluas 70m2 yang terletak di lantai 2 di atas area produksi tepatnya di bagian atas area Pusat Mesin CNC.<br><br>Kegiatan manajemen, pemodelan teknik, dan seluruh kegiatan staf dan administrasi dilakukan di kantor ini.<br></p>','2','facility-5.jpg','Office Area','','','office-area.html'),
(6,'Land Area','We use an area of approximately 1,400 m2 of land area for all activities such as outdoor soccer court, gathering hall, ping pong sports area and mess area for students/college for an internship program.','','<p>We use an area of approximately 1,400 m2 of land area for all activities such as outdoor soccer court, gathering hall, ping pong sports area and mess area for students/college for an internship program.</p><p> We also provide comfort to all employees and staff as a whole by providing large areas of green that can be comfortable after working.<br></p>','','3','facility-6.jpg','Land Area','','','land-area.html');

/*Table structure for table `tbl_facility_category` */

DROP TABLE IF EXISTS `tbl_facility_category`;

CREATE TABLE `tbl_facility_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_facility_category` */

insert  into `tbl_facility_category`(`category_id`,`category_name`,`status`) values 
(1,'Workshop','Active'),
(2,'Office','Active'),
(3,'Land','Active');

/*Table structure for table `tbl_facility_photo` */

DROP TABLE IF EXISTS `tbl_facility_photo`;

CREATE TABLE `tbl_facility_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `facility_id` int(11) NOT NULL,
  `slug_facility` varchar(255) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_facility_photo` */

insert  into `tbl_facility_photo`(`id`,`facility_id`,`slug_facility`,`photo`) values 
(2,1,'high-speed-cnc-milling-machining-center.html','2.jpg'),
(3,1,'high-speed-cnc-milling-machining-center.html','3.jpg'),
(4,1,'high-speed-cnc-milling-machining-center.html','4.jpg'),
(5,1,'high-speed-cnc-milling-machining-center.html','5.jpg'),
(6,2,'high-speed-cnc-turning-machining-center.html','6.jpg'),
(8,4,'production-workshop-and-parking-area.html','8.jpg'),
(9,4,'production-workshop-and-parking-area.html','9.jpg'),
(10,4,'production-workshop-and-parking-area.html','10.jpg'),
(12,3,'conv-machining-center-and-surf-grinding.html','12.jpg'),
(13,3,'conv-machining-center-and-surf-grinding.html','13.jpg'),
(14,3,'conv-machining-center-and-surf-grinding.html','14.jpg'),
(15,3,'conv-machining-center-and-surf-grinding.html','15.jpg'),
(16,3,'conv-machining-center-and-surf-grinding.html','16.jpg'),
(17,4,'production-workshop-and-parking-area.html','17.jpg');

/*Table structure for table `tbl_language` */

DROP TABLE IF EXISTS `tbl_language`;

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `eng` text NOT NULL,
  `idn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_language` */

insert  into `tbl_language`(`id`,`name`,`eng`,`idn`) values 
(1,'HOME','Home','Beranda'),
(2,'PAGE','Page','Halaman'),
(3,'ABOUT','About','Tentang'),
(4,'GALLERY','Gallery','Galeri'),
(5,'FAQ','FAQ','FAQ'),
(6,'SERVICE','Service','layanan'),
(7,'PORTFOLIO','Portfolio','Portofolio'),
(8,'TESTIMONIAL','Testimonial','Testimonial'),
(9,'NEWS','Media','Media'),
(10,'CONTACT','Contact','Kontak'),
(11,'ADDRESS','Address','Alamat'),
(12,'CALL_US','Call Us','Hubungi Kami'),
(13,'WORKING_HOURS','Working Hours','Jam Kerja'),
(14,'ABOUT_US','About Us','Tentang Kami'),
(15,'LATEST_NEWS','Latest News','Berita Terbaru'),
(16,'POPULAR_NEWS','Popular News','Berita Poluler'),
(17,'QUICK_LINKS','Quick Link','Quick Link'),
(18,'TERMS_AND_CONDITIONS','Term and Conditions','Term and Conditions'),
(19,'PRIVACY_POLICY','Privacy Policy','Privacy Policy'),
(20,'READ_MORE','Read More','Selengkapnya'),
(21,'POSTED_ON','Posted On:','Posting pada:'),
(22,'ADMIN','Admin','Admin'),
(23,'SERVICES','Services','Layanan Kami'),
(24,'ALL','All','Semua'),
(26,'PROJECTS','Project','Proyek'),
(27,'DESCRIPTION','Description','Deskripsi'),
(28,'CLIENT_NAME','Client Name','Nama klien'),
(29,'CLIENT_COMPANY','Client Company','Perusahaan Klien'),
(30,'PROJECT_START_DATE','Project Start Date','Waktu Mulai Proyek'),
(31,'PROJECT_END_DATE','Project End Date','Waktu Selesai Proyek'),
(33,'CLIENT_COMMENT','Client Comment','Komentar Klien'),
(34,'SEARCH_NEWS','Search News','Pencarian Berita'),
(35,'CATEGORY','Category','Kategori'),
(36,'SHARE_THIS','Share This','Bagikan ini'),
(37,'COMMENTS','Comments','Komentar'),
(38,'SEARCH_BY','Search by:','Pencarian Berdasarkan:'),
(39,'NO_RESULT_FOUND','No Result Found!','Pencarian tidak ditemukan!'),
(40,'CONTACT_US_PAGE_FORM_HEADING_TEXT','Contact us through the following form:','Kontak kami melalui form berikut:'),
(41,'PREVIOUS','Previos','Sebelumnya'),
(42,'NEXT','Next','Selanjutnya'),
(43,'FIND_US_ON_MAP','Find Us on Map:','Tentukan Kami di Maps:'),
(44,'NAME','Name','Nama'),
(45,'EMAIL_ADDRESS','Email Address','Alamat Email'),
(46,'PHONE','Phone Number','Nomor Telp'),
(47,'MESSAGE','Message','Pesan'),
(48,'SEND_MESSAGE','Send Message','Kirim Pesan'),
(49,'EMPTY_ERROR_NAME','Name can not be empty','Nama tidak boleh kosong!'),
(50,'EMPTY_ERROR_PHONE','Phone number can not be empty','Telp tidak boleh kosong!'),
(51,'EMPTY_ERROR_EMAIL','Email address can not be empty','Alamat Email tidak boleh kosong!'),
(52,'VALID_ERROR_EMAIL','Email address is invalid','Alamat Email tidak benar!'),
(53,'EMPTY_ERROR_COMMENT','Comment can not be empty','Komentar tidak boleh kosong!'),
(54,'CONTACT_FORM_EMAIL_SUBJECT','Contact Form Email - www.ciptasinergi.com','Pesan dari Email - www.ciptasinergi.com'),
(55,'CONTACT_FORM_EMAIL_SUCCESS_MESSAGE','Thank you for sending us the email. We will contact you shortly.','Terima kasih telah mengirim pesan, tunggu balasan dari kami..'),
(56,'PASSWORD_REQUEST_EMAIL_SUBJECT','Password Request - www.ciptasinergi.com','Password Request -  www.ciptasinergi.com'),
(57,'PRODUCT','Product','Produk'),
(58,'COMPANY_PROFILE','Company Profile','Profil Perusahaan'),
(59,'CAREER','Career','Karir'),
(60,'OUR_PRODUCT','Our Product','Produk Kami'),
(61,'FACILITY','Facility','Fasilitas'),
(62,'SEE_MORE','See More','Lihat Semua'),
(63,'COMPANY_EMAIL','Company Email','Email Perusahaan'),
(64,'COMPANY_PHONE','Company Phone/Fax','No.Telp/Fax Perusahaan'),
(65,'AVIATION_ELECTRONICS','Aviation & Electronics Department','Departemen Aviasi & Elektronik'),
(66,'NEW_PRODUCT','New Product','Produk Baru'),
(67,'TESTIMONIAL_SAY','What a Client Say','Apa yang klien katakan '),
(68,'PRODUCT_HOME','Our Featured Products','Produk Unggulan Kami'),
(69,'OUR_PARTNER','Our Partner','Partner Kami'),
(70,'OUR_FUTURE_PRODUCT','Our Products','Semua Produk Kami'),
(71,'INSTITUTE','Institute / Company','Institut / Perusahaan'),
(72,'HAVE_A_MORE_QUETIONS','Have more questions? Just Contact Us','Punya pertanyaan lain? Hubungi Kami'),
(73,'PROFILE','Profile','Profil'),
(74,'STRUCTURE','Structure','Struktur'),
(75,'CULTURE','Values and Culture','Nilai dan Budaya'),
(76,'COMMITMENT','Quality Commitment','Komitmen Mutu'),
(77,'VISION_MISION','Vision & Mission','Visi & Misi'),
(78,'PROFILE_IDENTITY','Company Identity','Identitas Perusahaan'),
(79,'STRUCTURE_ORGANIZATION','Structure Organization','Struktur Organisasi'),
(80,'VISION_AND_MISSION','Vision & Mission','Visi & Misi'),
(81,'ABOUT_COMPANY','About Company ','Tentang Perusahaan Kami'),
(82,'SITE_MAPS','Site Maps','Site Maps'),
(83,'MONDAY_FRIDAY','Monday - Friday','Senin - Jumat'),
(84,'DOWNLOAD_COMPANY_PROFILE','Download Company Profile','Unduh Profile Perusahaan'),
(85,'DOWNLOAD','Download','Unduh'),
(86,'CLICK_FOR_DOWNLOAD','Click for Download','Klik untuk unduh'),
(87,'COMPANY_PROFILE_ENGINEERING','Company Profile Mechanic','Profil Perusahaan Mekanik'),
(88,'COMPANY_PROFILE_AVIATION_ELECTRONICS','Company Profile Aviation & Electronics Department','Profil Perusahaan Departemen Aviasi & Elektronik'),
(89,'COMPANY_PROFILE_EN_DE','Company Profile Mechanic & Electronics Division','Profil Perusahaan Mekanik & Divisi Elektronik'),
(90,'COOKIES_MESSAGE',' We use cookies and other similar technologies, such as pixels or local storage, to help provide you with a better, faster, and safer experience','Kami menggunakan kuki dan teknologi sejenis, seperti piksel atau penyimpanan lokal, untuk membantu memberi Anda pengalaman yang lebih baik, lebih cepat, dan lebih aman.'),
(91,'COOKIES_MORE','More info','Lebih lanjut'),
(92,'COOKIES_OK','Got it!','Ok'),
(93,'FUTURED_PRODUCT','Product futured','Produk Unggulan'),
(94,'VISION_HEADING','Vision','Visi'),
(95,'MISSION_HEADING','Mission','Misi'),
(97,'SORRY_NOT_FOUND','Sorry, no content found.','Mohon maaf, pencarian tidak ditemukan.');

/*Table structure for table `tbl_logging` */

DROP TABLE IF EXISTS `tbl_logging`;

CREATE TABLE `tbl_logging` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT,
  `log_time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `log_user` varchar(100) DEFAULT NULL,
  `log_tipe` int(11) DEFAULT NULL,
  `log_desc` varchar(255) DEFAULT NULL,
  `log_ipaddress` varchar(15) DEFAULT NULL,
  `log_useragen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_logging` */

insert  into `tbl_logging`(`log_id`,`log_time`,`log_user`,`log_tipe`,`log_desc`,`log_ipaddress`,`log_useragen`) values 
(1,'2019-11-07 10:08:52','Encep Suryana',3,'[EDIT] Data: What is CNC Turning Machine? diupdate pada Berita','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0</i>'),
(2,'2019-11-07 10:37:47','Encep Suryana',3,'[EDIT] Data: BEING AN EDUCATOR FOR STUDENT INTERNSHIP diupdate pada Slider','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0</i>'),
(3,'2019-11-07 10:38:11','Encep Suryana',3,'[EDIT] Data: BEING AN EDUCATOR FOR STUDENT INTERNSHIP diupdate pada Slider','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0</i>'),
(4,'2019-11-07 10:38:25','Encep Suryana',3,'[EDIT] Data:  diupdate pada Slider','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:71.0) Gecko/20100101 Firefox/71.0</i>'),
(5,'2019-11-07 11:42:40','Encep Suryana',0,'[LOGIN] User: Encep Suryana Berhasil Login','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(6,'2019-11-08 08:41:20','Encep Suryana',0,'[LOGIN] User: Encep Suryana Berhasil Login','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(7,'2019-11-08 08:43:14',NULL,0,'<span style=\"background:red; color:white;\">[LOGIN] Error! Invalid Captcha, Robot Login detected!</span>','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(8,'2019-11-08 08:43:25','Admin',0,'[LOGIN] User: Admin Berhasil Login','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(9,'2019-11-08 08:48:08','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(10,'2019-11-08 08:54:23','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(11,'2019-11-08 08:54:33','Admin',3,'[EDIT] Data: Partner for education, a place for internship students diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(12,'2019-11-08 08:56:57','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(13,'2019-11-08 08:58:25','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(14,'2019-11-08 08:59:09','Admin',3,'[EDIT] Data: Comfortable workplace for empassioned employee diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(15,'2019-11-08 09:11:10','Admin',3,'[EDIT] Data: Smart managing, supported by  CSMERP system diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(16,'2019-11-08 09:12:22','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(17,'2019-11-08 09:13:48','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(18,'2019-11-08 09:14:29','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(19,'2019-11-08 09:20:50','Admin',3,'[EDIT] Data: Comfortable workplace for empassioned employee diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(20,'2019-11-08 09:25:45','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(21,'2019-11-08 09:29:40','Encep Suryana',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(22,'2019-11-08 09:31:46','Encep Suryana',3,'[EDIT] Data: Tooling & Jig Fixture diupdate pada Layanan','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(23,'2019-11-08 09:32:25','Encep Suryana',3,'[EDIT] Data: Tooling and Jig Fixture diupdate pada Layanan','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(24,'2019-11-08 09:34:52','Encep Suryana',3,'[EDIT] Data: Spare Part & Precision Component diupdate pada Layanan','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(25,'2019-11-08 09:36:12','Encep Suryana',2,'[TAMBAH] Data: CNC Machining ditambahkan ke Layanan','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(26,'2019-11-08 09:37:12','Admin',3,'[EDIT] Data: LATEST TECHNOLOGY IN MACHINING diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(27,'2019-11-08 09:38:50','Admin',3,'[EDIT] Data: Partner for education, <br> a place for internship students diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(28,'2019-11-08 09:39:46','Admin',3,'[EDIT] Data: Smart managing, <br> supported by  CSMERP system diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(29,'2019-11-08 09:41:31','Admin',3,'[EDIT] Data: LATEST TECHNOLOGY IN MACHINING diupdate pada Slider','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(30,'2019-11-08 09:53:19','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(31,'2019-11-08 10:02:58','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(32,'2019-11-08 10:16:21','Encep Suryana',3,'[EDIT] Database Bahasa Inggris diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(33,'2019-11-08 10:16:57','Encep Suryana',3,'[EDIT] Database Bahasa Indonesia diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(34,'2019-11-08 10:26:24','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(35,'2019-11-08 10:29:46','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(36,'2019-11-08 10:35:24','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(37,'2019-11-08 10:37:37','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(38,'2019-11-08 10:38:28','Admin',3,'[EDIT] Database Bahasa Inggris diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(39,'2019-11-08 10:42:04','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(40,'2019-11-08 10:59:49','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(41,'2019-11-08 11:05:11','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(42,'2019-11-08 11:05:42','Admin',3,'[EDIT] Halaman Tentang Perusahaan telah diupdate','192.168.1.192','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(43,'2019-11-08 13:09:25','Encep Suryana',3,'[EDIT] Halaman Divisi Elektronik telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(44,'2019-11-08 13:10:32','Encep Suryana',3,'[EDIT] Halaman Departemen Aviasi & Elektronik telah diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(45,'2019-11-08 13:17:55','Encep Suryana',3,'[EDIT] Data: PLC Controller design and implementations diupdate pada Departemen Aviasi & Elektronik','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(46,'2019-11-08 13:20:11','Encep Suryana',2,'[TAMBAH] Data: test ditambahkan ke Departemen Aviasi & Elektronik','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(47,'2019-11-08 13:20:20','Encep Suryana',4,'[HAPUS] Data: test dihapus dari Departemen Aviasi & Elektronik','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(48,'2019-11-08 13:23:52','Encep Suryana',3,'[EDIT] Data: PLC Controller design and implementations diupdate pada Departemen Aviasi & Elektronik','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(49,'2019-11-08 13:52:17','Encep Suryana',3,'[EDIT] Data: Company CEO diupdate pada Settings','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(50,'2019-11-08 14:02:44','Encep Suryana',3,'[EDIT] Foto Des. Departemen Aviasi & Elektronik diupdate','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>'),
(51,'2019-11-08 14:10:04','Encep Suryana',3,'[EDIT] Data: Company CEO diupdate pada Settings','192.168.1.216','<i>Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:70.0) Gecko/20100101 Firefox/70.0</i>');

/*Table structure for table `tbl_news` */

DROP TABLE IF EXISTS `tbl_news`;

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `news_title_idn` varchar(255) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `news_content` text NOT NULL,
  `news_content_idn` text NOT NULL,
  `news_short_content` text NOT NULL,
  `news_short_content_idn` text NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `slug_news_category` varchar(150) NOT NULL,
  `total_view` int(11) NOT NULL,
  `comment` varchar(10) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `user_update` varchar(255) NOT NULL,
  `post_slug` varchar(150) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_news` */

insert  into `tbl_news`(`news_id`,`news_title`,`news_title_idn`,`slug`,`news_content`,`news_content_idn`,`news_short_content`,`news_short_content_idn`,`news_date`,`photo`,`slug_news_category`,`total_view`,`comment`,`meta_title`,`meta_keyword`,`meta_description`,`user_update`,`post_slug`) values 
(1,'Understanding CNC Milling Machine','','col-page col-sm-8 col-md-6','<p align=\"left\">CNC Milling or Computer Numerical Control Milling is a processing machine that employs make tool path with programmable control data&nbsp; and rotated&nbsp; cutting tools to progressively removing material from the workpiece and produce a custom-designed part or product. This process is suitable for machining a wide range of materials, such as metal, plastic, glass, and wood, and producing a variety of custom-designed parts and products.</p>\r\n<p>Several capabilities are offered under the umbrella of precision CNC machining services, including mechanical, chemical, electrical, and thermal processes. CNC milling is a mechanical machining process along with drilling, turning, and a variety of other machining processes, meaning that material is removed from the workpiece via mechanical means, such as the actions of the milling machine’s cutting tools. &nbsp;&nbsp;</p>\r\n<p>This article focuses on the CNC milling process, outlining the basics of the process, and the components and tooling of the CNC milling machine. Additionally, this article explores the various milling operations and provides alternatives to the CNC milling process.</p><h2>Overview of CNC Milling Process</h2>\r\n<p>Like most conventional mechanical CNC machining&nbsp;processes, the CNC milling process utilizes computerized controls to operate and manipulate machine tools that cut and shape stock material. In addition, the process follows the same basic production stages which all CNC machining processes do, including:</p>\r\n<ul><li>Designing a CAD model</li><li>Converting the CAD model into a CNC program</li><li>Setting up the CNC milling machine</li><li>Executing the milling operation</li></ul>\r\n<p>The CNC milling process begins with the creation of a 2D or 3D CAD part design. Then the completed design is exported to a CNC-compatible file format and converted by CAM software into a CNC machine program which dictates the actions of the machine and the movements of the tooling across the workpiece. Before the operator runs the CNC program, they prepare the CNC milling machine by affixing the workpiece to the machine’s work surface (i.e., worktable) or work holding device (e.g., vise), and attaching the milling tools to the machine spindle. The CNC milling process employs horizontal or vertical CNC-enabled milling machines—depending on the specifications and requirements of the milling application—and rotating multi-point (i.e., multi-toothed) cutting tools, such as mills and drills. When the machine is ready, the operator launches the program via the machine interface prompting the machine to execute the milling operation.</p>\r\n<p>Once the CNC milling process is initiated, the machine begins rotating the cutting tool at speeds reaching up to thousands of RPM. Depending on the type of milling machine employed and the requirements of the milling application, as the tool cuts into the workpiece, the machine will perform one of the following actions to produce the necessary cuts on the workpiece:</p>\r\n<ol><li>Slowly feed the workpiece into the stationary, rotating tool</li><li>Move the tool across the stationary workpiece</li><li>Move both the tool and workpiece in relation to each other</li></ol>\r\n<p>As opposed to manual milling processes, in CNC milling, typically the machine feeds moveable workpieces with the rotation of the cutting tool rather than against it. Milling operations that abide by this convention are known as climb milling processes, while contrary operations are known as conventional milling processes.</p>\r\n<p>Generally, milling is best suited as a secondary or finishing process for an already machined workpiece, providing definition to or producing the part’s features, such as holes, slots, and threads. However, the process is also used to shape a stock piece of material from start to finish. In both cases, the milling process gradually removes material to form the desired shape and form of the part. First, the tool cuts small pieces—i.e., chips—off the workpiece to form the approximate shape and form. Then, the workpiece undergoes the milling process at much higher accuracy and with greater precision to finish the part with its exact features and specifications. Typically, a completed part requires several machining passes to achieve the desired precision and tolerances. For more geometrically complex parts, multiple machine setups may be required to complete the fabrication process.</p>\r\n<p>Once the milling operation is completed, and the part is produced to the custom-designed specifications, the milled part passes to the finishing and post-processing stages of production.</p><h2>CNC Milling Operations</h2><p>CNC milling is a machining process suitable for producing high accuracy, high tolerance parts in prototype, one-off, and small to medium production runs. While parts are typically produced with tolerances ranging between +/- 0.001 in. to +/- 0.005 in., some milling machines can achieve tolerances of up to and greater than +/- 0.0005 in. The versatility of the milling process allows it to be used in a wide range of industries and for a variety of part features and designs, including slots, chamfers, threads, and pockets. The most common CNC milling operations include:</p>\r\n<ul><li>Face milling</li><li>Plain milling</li><li>Angular milling</li><li>Form milling</li></ul>\r\n<h2>Face Milling</h2>\r\n<p>Face milling refers to milling operations in which the cutting tool’s axis of rotation is perpendicular to the surface of the workpiece. The process employs face milling cutters which have teeth both on the periphery and tool face, with the peripheral teeth primarily being used for cutting and the face teeth being used for finishing applications. Generally, face milling is used to create flat surfaces and contours on the finished piece and is capable of producing higher-quality finishes than other milling processes. Both vertical and horizontal milling machines support this process.</p>\r\n<p>Types of face milling include end milling and side milling, which use end milling cutters and side milling cutters, respectively.</p>\r\n<h2>Plain Milling</h2>\r\n<p>Plain milling, also known as surface or slab milling, refers to milling operations in which the cutting tool’s axis of rotation is parallel to the surface of the workpiece. The process employs plain milling cutters that have teeth on the periphery that perform the cutting operation. Depending on the specifications of the milling application, such as the depth of the cut and the size of the workpiece, both narrow and wide cutters are used. Narrow cutters allow for deeper cuts, while wider cutters are used for cutting larger surface areas. If a plain milling application requires the removal of a large amount of material from the workpiece, the operator first employs a coarse-toothed cutter, slow cutting speeds, and fast feed rates to produce the custom-designed part’s approximate geometry. Then, the operator introduces a finer toothed cutter, faster cutting speeds, and slower feed rates to produce the details of the finished part.</p>\r\n<h2>Angular Milling</h2>\r\n<p>Angular milling, also known as angle milling, refers to milling operations in which the cutting tool’s axis of rotation is at an angle relative to the surface of the workpiece. The process employs single-angle milling cutters—angled based on the particular design being machined—to produce angular features, such as chamfers, serrations, and grooves. One common application of angular milling is the production of dovetails, which employs 45°, 50°, 55°, or 60° <a href=\"https://www.thomasnet.com/products/dovetail-cutters-21381108-1.html\">dovetail cutters</a> based on the design of the dovetail.</p>\r\n<h2>Form Milling</h2>\r\n<p>Form milling refers to milling operations involving irregular surfaces, contours, and outlines, such as parts with curved and flat surfaces, or completely curved surfaces. The process employs formed milling cutters or flies cutters specialized for the particular application, such as convex, concave, and corner rounding cutters. Some of the common applications of form milling include producing hemispherical and semi-circular cavities, beads, and contours, as well as intricate designs and complex parts with single machine setup.</p>\r\n<h2>Other Milling Machine Operations</h2>\r\n<p>Besides the aforementioned operations, milling machines can be used to accomplish other specialized milling and machining operations. Examples of the other types of milling machine operations available include:</p>\r\n<p><strong>Straddle milling</strong>: Straddle milling refers to milling operations in which the machine tool machines two or more parallel workpiece surfaces with a single cut. This process employs two cutters on the same machine arbor, arranged such that the cutters are at either side of the workpiece and can mill both sides at the same time. &nbsp;</p>\r\n<p><strong>Gang milling</strong>: What is gang milling? Gang milling refers to milling operations that employ two or more cutters—typically of varying size, shape, or width—on the same machine arbor. Each cutter can perform the same cutting operation, or a different one, simultaneously, which produces more intricate designs and complex parts in shorter production times.</p>\r\n<p><strong>Profile milling</strong>: Profile milling refers to milling operations in which the machine tool creates a cut path along a vertical or angled surface on the workpiece. This process employs profile milling equipment and cutting tools which can be either parallel or perpendicular to the workpiece’s surface.</p>\r\n<p><strong>Gear cutting</strong>: Gear cutting is a milling operation that employs involute gear cutters to produce gear teeth. These cutters, a type of formed milling cutters, are available in various shapes and pitch sizes depending on the number of teeth necessary for the particular gear design. A specialized lathe cutter bit can also be employed by this process to produce gear teeth.</p>\r\n<p><strong>Other machining processes</strong>: Since milling machines support the use of other machine tools besides milling tools, they can be used for machining processes other than milling, such as drilling, boring, reaming, and tapping.</p>\r\n<h2 id=\"cnc-milling-and-components\">CNC Milling Equipment and Components</h2>\r\n<p>The CNC milling process employs a variety of software applications, machine tools, and milling machinery depending on the milling operation being performed.</p>\r\n<h2>CNC Support Software</h2>\r\n<p>Like most CNC machining processes, the CNC milling process uses CAD software to produce the initial part design and CAM software to generate the CNC program which provides the machining instructions to produce the part. The CNC program is then loaded to the CNC machine of choice to initiate and execute the milling process.</p>\r\n<h2><span data-sheets-value=\"{\" 1\":2,\"2\":\"cnc=\"\" milling=\"\" machine=\"\" components\"}\"=\"\" data-sheets-userformat=\"{\" 2\":14337,\"3\":{\"1\":1},\"14\":[null,2,0],\"15\":\"calibri\",\"16\":12}\"=\"\">CNC Milling Machine Components</span></h2>\r\n<p>Despite the wide range of milling machines available, most machines largely share the same basic components. These shared machine parts include the:</p>\r\n<ul><li>Machine interface</li><li>Column</li><li>Knee</li><li>Saddle</li><li>Worktable</li><li>Spindle</li><li>Arbor</li><li>Ram</li><li>Machine tool</li></ul><p><strong>Machine interface</strong>: The machine interface refers to the machine component the operator uses to the load, initiate, and execute the CNC machine program.</p>\r\n<p><strong>Column</strong>: The column refers to the machine component which provides support and structure to all other machine components. This component includes an affixed base and can include additional internal components that aid the milling process, such as oil and coolant reservoirs.</p>\r\n<p><strong>Knee</strong>: The knee refers to the adjustable machine component which is affixed to the column and provides support to the saddle and worktable. This component is adjustable along the Z-axis (i.e., able to be raised or lowered) depending on the specifications of the milling operation.</p>\r\n<p><strong>Saddle</strong>: The saddle refers to the machine component located on top of the knee, supporting the worktable. This component is capable of moving parallel to the axis of the spindle, which allows the worktable, and by proxy the workpiece, to be horizontally adjusted.</p>\r\n<p><strong>Worktable</strong>: The worktable refers to the machine component located on top of the saddle, which the workpiece or work holding device (e.g., chuck or vise) is fastened. Depending on the type of machine employed, this component is adjustable in the horizontal, vertical, both, or neither direction. &nbsp;</p>\r\n<p><strong>Spindle</strong>: The spindle refers to the machine component supported by the column which holds and runs the machine tool (or arbor) employed. Within the column, an electric motor drives the rotation of the spindle.</p>\r\n<p><strong>Arbor</strong>: The arbor refers to the shaft component inserted into the spindle in horizontal milling machines in which multiple machine tools can be mounted. These components are available in various lengths and diameters depending on the specifications of the milling application. The types of arbors available include standard milling machine, screw, slitting saw milling cutter, end milling cutter, and shell end milling cutter arbors.</p>\r\n<p><strong>Ram</strong>: The ram refers to the machine component, typically in vertical milling machines, located on top of and affixed to the column which supports the spindle. This component is adjustable to accommodate different positions during the milling operation.</p>\r\n<p><strong>Machine tool</strong>: The machine tool represents the machine component held by the spindle which performs the material removal operation. The milling process can employ a wide range of milling machine tools (typically multi-point cutters) depending on the specifications of the milling application—e.g., the material being milled, quality of the surface finish required, machine orientation, etc. Machine tools can vary based on the number, arrangement, and spacing of their teeth, as well as their material, length, diameter, and geometry. Some of the types of horizontal milling machine tools employed include plane, form relieved, staggered tooth, and double angle mills, while vertical milling machine tools employed include flat and ball end, chamfer, face, and twist drill mills. Millings machines can also use drilling, boring, reaming, and tapping tools to perform other machining operations.</p>\r\n<h2>Milling Machine Considerations</h2>\r\n<p>In general, milling machines are categorized into horizontal and vertical machine configurations, as well as differentiated based on the number of axes of motion.</p>\r\n<p>In vertical milling machines, the machine spindle is vertically oriented, while in horizontal milling machines the spindle is horizontally oriented. Horizontal machines also employ arbors for additional support and stability during the milling process, and have support capabilities for multiple cutting tools, such as in gang milling and straddle milling. Controls for both vertical and horizontal milling machines are dependent on the type of machine employed. For example, some machines can raise and lower the spindle and laterally move the worktable, while other machines have stationary spindles and worktables which move both horizontally, vertically, and rotationally. When deciding between vertical and horizontal milling machines, manufacturers and job shops must consider the requirements of the milling application, such as the number of surfaces requiring milling and the size and shape of the part. For example, heavier workpieces are better suited for horizontal milling operations, while dying sinking applications are better suited for vertical milling operations. Ancillary equipment that modifies vertical or horizontal machines to support the opposing process is also available.&nbsp; &nbsp;</p>\r\n<p>Most CNC milling machines are available with 3 to 5 axes— typically providing the performance along the XYZ axes and, if applicable, around rotational axes. The X-axis and Y-axis designate horizontal movement (side-to-side and forward-and-back, respectively, on a flat plane), while the Z-axis represents vertical movement (up-and-down) and the W-axis represents diagonal movement across a vertical plane. In basic CNC milling machines, horizontal movement is possible in two axes (XY), while newer models allow for the additional axes of motion, such as 3, 4, and 5-axis CNC machines. Table 1, below, outlines some of the characteristics of milling machines categorized by the number of axes of motion.</p>\r\n<h4 align=\"center\"><strong>Table 1 – Characteristics of Milling Machines by Axes of Motion</strong><em><br></em></h4><table class=\"table table-bordered\"><tbody><tr><td><p align=\"center\"><strong>Number of Axes</strong></p></td><td style=\"text-align: center;\"><strong>Characteristics</strong></td></tr><tr><td align=\"center\">3<br></td><td><ul><li>Capable of managing most machining needs</li><li>Capable of producing the same products as machines with more axes</li><li>Suitable for automatic or interactive operation, cutting sharp edges, drilling holes, milling slots, etc.</li><li>Simplest machine setup (A)</li><li>Only requires one workstation (A)</li><li>Higher knowledge requirements for operators (D)</li><li>Lower levels of efficiency and quality (D)</li></ul></td></tr><tr><td align=\"center\">4<br></td><td><ul><li>Capable of operating on materials ranging from aluminum and composite board to foam, PCB, and wood</li><li>Suitable for advertising design, art creating, medical equipment creating, technology research, hobby prototype building, and industrial applications</li><li>Greater functionality than 3-axis machines (A)</li><li>Higher levels of precision and accuracy than 3-axis machines (A)</li><li>More complex machine setup 3-axis machines (D)</li><li>More expensive than 3-axis machines (D)</li></ul></td></tr><tr><td align=\"center\">5<br></td><td><ul><li>multiple axes configurations available (e.g., 4+1, 3+2, or 5)</li><li>Suitable for aerospace, architectural, medical, military, oil and gas, and artistic and functional applications</li><li>Greatest functionality and capabilities (A)</li><li>Depending on config., faster operation than 3-axis and 4-axis machines (A)</li><li>Highest levels of quality and precision (A)</li><li>Depending on config., slower operation than 3-axis and 4-axis machines (D)</li><li>More expensive than 3-axis and 4-axis machines (D)</li></ul></td></tr></tbody></table><p><em><em>Note 1: If applicable, “A” indicates advantageous characteristics and “D” indicates disadvantageous characteristics.</em></em></p><p><em><em>Note 2: Some milling machine (by axes) information courtesy of Technox Machine &amp; Manufacturing Inc.</em></em></p><br><p>Depending on the type of milling machine employed, the machine tool, the machine worktable, or both of the components can be dynamic. Typically, dynamic worktables move along the XY-axes, but they are also capable of moving up and down to adjust the depth of cut and swiveling along the vertical or horizontal axis for an increased range of cutting. For milling applications requiring dynamic tooling, in addition to its inherent rotary motion, the machine tool moves perpendicularly along multiple axes, allowing the tool’s circumference, rather than just its tip, to cut into the workpiece. CNC milling machines with greater degrees of freedom allow for greater versatility and complexity in the milled parts produced.</p>\r\n<h3><span style=\"color: rgb(0, 0, 0);\"><span style=\"background-color: inherit;\">Types of Milling Machines</span></span></h3>\r\n<p>There are several different types of milling machines available that are suitable for a variety of machining applications. Beyond classification based solely on either machine configuration or the number of axes of motion, milling machines are further classified based on the combination of their specific characteristics. Some of the most common types of milling machines include:</p>\r\n<ul><li>Knee-type</li><li>Ram-type</li><li>Bed-type (or manufacturing-type)</li><li>Planer-type</li></ul>\r\n<p><strong>Knee-type</strong>: Knee-type milling machines employ a fixed spindle and vertically adjustable worktable which rests on the saddle supported by the knee. The knee can be lowered and raised on the column depending on the position of the machine tool. Some examples of knee-type milling machines include floor-mounted and bench-type plain horizontal milling machines.</p>\r\n<p><strong>Ram-type</strong>: Ram-type milling machines employ a spindle affixed to a movable housing (i.e., ram) on the column, which allows the machine tool to move along the XY axes. Two of the most common ram-type milling machines include floor-mounted universal horizontal and swivel cutter head milling machines. &nbsp;</p>\r\n<p><strong>Bed-type</strong>: Bed-type milling machines employ worktables affixed directly to the machine bed, which prevents the workpiece from moving along both the Y-axis and Z-axis. The workpiece is positioned beneath the cutting tool, which, depending on the machine, is capable of moving along the XYZ axes. Some of the bed-type milling machines available include simplex, duplex, and triplex milling machines. While simplex machines employ one spindle which moves along either the X-axis or Y-axis, duplex machines employ two spindles, and triplex machines employ three spindles (two horizontal and one vertical) for machining along the XY and XYZ axes, respectively.</p>\r\n<p><strong>Planer-type</strong>: Planer-type milling machines are similar to bed-type milling machines in that they have worktables fixed along the Y-axis and Z-axis and spindles capable of moving along the XYZ axes. However, planer-type machines can support multiple machine tools (typically up to four) simultaneously, which reduces the lead time for complex parts.</p>\r\n<p>Some of the specialized types of milling machines available include a rotary table, drum, and planetary milling machines. Rotary table milling machines have circular worktables that rotate around the vertical axis and employ machine tools positioned at varying heights for roughing and finishing operations. Drum milling machines are similar to rotary table machines, except the worktable is referred to as a “drum” and it rotates around the horizontal axis. In planetary machines, the worktable is stationary, and the workpiece is cylindrical. The rotating machine tool moves across the surface of the workpiece cutting internal and external features, such as threads.&nbsp;</p>\r\n<h2>Material Considerations</h2>\r\n<p>The CNC milling process is best suited as a secondary machining process to provide finishing features to a custom-designed part, but can also be used to produce custom designs and specialty parts from start to finish. CNC milling technology allows the process to machine parts of a wide range of materials, including:</p>\r\n<ul><li>Metals (including alloy, exotic, heavy-duty, etc.)</li><li>Plastics (include thermosets and thermoplastics)</li><li>Elastomers</li><li>Ceramics</li><li>Composites</li><li>Glass</li></ul>\r\n<p>As with all machining processes, when selecting a material for a milling application, several factors must be considered, such as the properties of the material (i.e., hardness, tensile and shear strength, and chemical and temperature resistance) and the cost-effectiveness of machining the material. These criteria dictate whether the material is suitable for the milling process and the budgetary constraints of the milling application, respectively. The chosen material determines the type(s) of the machine tool(s) employed and its/their design(s), and the optimal machine settings, including cutting speed, feed rate, and depth of cut.</p>\r\n<h2>Alternatives</h2>\r\n<p>CNC milling is a mechanical machining process suitable for machining a wide range of materials and producing a variety of custom-designed parts. While the process may demonstrate advantages over other machining processes, it may not be appropriate for every manufacturing application, and other processes may prove more suitable and cost-effective.</p>\r\n<p>Some of the other more conventional mechanical machining processes available include drilling and turning. Drilling, like milling, typically employs multi-point tools (i.e., drill bits), while turning employs single-point tools. However, while in turning the workpiece can be moved and rotated similar to that of some milling applications, in drilling the workpiece is stationary throughout the drilling operation.</p>\r\n<p>Some of the non-conventional mechanical machining processes (i.e., do not employ machine tools but still employ mechanical material removal processes) include ultrasonic machining, waterjet cutting, and abrasive jet machining. Non-conventional, non-mechanical machining processes—i.e., chemical, electrical, and thermal machining processes—provide additional alternative methods of removing material from a workpiece that does not employ machine tools or mechanical material removal processes, and include chemical milling, electrochemical deburring, laser cutting, and plasma arc cutting. These non-conventional machining methods support the production of more complex, demanding, and specialized parts not typically possible through conventional machining processes.&nbsp; &nbsp;</p>\r\n<h2>Summary</h2>\r\n<p>Outlined above are the basics of the CNC milling process, various CNC milling operations and their required equipment, and some of the considerations that may be taken into account by manufacturers and machine shops when deciding whether CNC milling is the most optimal solution for their particular machining application.</p>\r\n<p>To find more information on domestic commercial and industrial suppliers of custom manufacturing services and equipment, visit the Thomas Supplier Discovery Platform, where you will find information on over 500,000 commercial and industrial suppliers.</p>','','CNC Milling or Computer Numerical Control Milling, is a machining process that employs make tool path with programmable controll data  and rotating  cutting tools to progressively removing material from the workpiece and produce a custom-designed part or product.','','Tue, 17-Sep-2019','news-1.png','information.html',49,'On','Understanding CNC Milling Machine','','','admin','understanding-cnc-milling-machine.html'),
(2,'What is CNC Turning Machine?','Apa itu Mesin CNC Turning?','col-page col-sm-4 col-md-3','<p style=\"text-align: left;\">CNC Turning is a manufacturing process in which bars of material are held in a chuck and rotated while a tool is fed to the piece to remove material to create the desired shape. A turret (shown center), with tooling attached, is programmed to move to the bar of raw material and remove material to create the programmed result. This is also called “subtraction machining” since it involves material removal. If the center has both tuning and milling capabilities, such as the one above, the rotation can be stopped to allow for milling out of other shapes.</p>\r\n<ul style=\"text-align: left;\"><li>The starting material, though usual round, can be other shapes such as squares or hexagons.</li><li>Depending on the bar feeder, the bar length can vary. This affects how much handling is required for volume jobs.</li><li>CNC lathes or turning centers have tooling mounted on a turret which is computer-controlled. The more tools that the turret can hold, the more options are available for complexities on the part.</li><li>CNC’s with “live” tooling options, can stop the bar rotation and add additional features such as drilled holes, slots and milled surfaces.</li><li>Some CNC turning centers have one spindle, allowing work to be done all from one side, while other turning centers, such as the one shown above, have two spindles, a main and sub-spindle. A part can b<a href=\"http://www.pioneerserviceinc.com/precision-parts/photo-gallery/\" class=\"fusion-no-lightbox\"></a>e partially machined on the main spindle, moved to the sub-spindle and have additional work done to the other side of this configuration.</li><li>There are many different kinds of CNC turning centers with various types of tooling options, spindle options, outer diameter limitations as well as power and speed capabilities that affect the types of parts that can be economically made on it.</li></ul>\r\n<h3 style=\"text-align: left;\"><span style=\"color: rgb(0, 0, 0);\">Is my part a good fit for CNC turning?</span></h3>\r\n<p style=\"text-align: left;\">While a lot of factors go into determining if a part can be made most cost-effectively on a specific CNC turning center, some things we look at are:</p>\r\n<ul style=\"text-align: left;\"><li>How many parts are needed short-term and long-term? CNC turning centers are generally good for prototypes to short-run volumes.</li><li>What is the largest OD on the part? For the CNC turning centers at Pioneer Service, the maximum OD for collected (bar feed-capable) parts is 2.5.”</li><li>Parts over 2.5? OD are chucked individually, which depending on volume, can contribute to the price.</li><li>Parts under 1.25? OD and medium to high volume may be a better fit for the Swiss screw machines.</li><li>If a part can be made both on the CNC turning center and on a 32 mm Swiss Screw Machine factors such as projected volume and lead-time are critical for making the best call on which to use.</li></ul>\r\n<p style=\"text-align: left;\">When it comes to machining parts, there are a lot of variables. Pioneer Service can help you determine the best way to have your parts made. Contact us for help with your requirements.</p>','','CNC Turning is a manufacturing process in which bars of material are held in a chuck and rotated while a tool is feed to the piece to remove material to create the desired shape.','','Tue, 17-Sep-2019','news-2.jpg','information.html',62,'On','What is CNC Turning Machine?','','','admin','what-is-cnc-turning-machine.html');

/*Table structure for table `tbl_news_category` */

DROP TABLE IF EXISTS `tbl_news_category`;

CREATE TABLE `tbl_news_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_news_category` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_news_category` */

insert  into `tbl_news_category`(`category_id`,`category_name`,`meta_title`,`meta_keyword`,`meta_description`,`slug_news_category`) values 
(1,'New Product','New Product','','','new-product.html'),
(2,'New Project','New Project','','','new-project.html'),
(3,'Project Finish','Project Finish','','','project-finish.html'),
(4,'Activity','Activity','','','activity.html'),
(5,'Information','Information','','','information.html'),
(7,'Career','Career','','','career.html'),
(8,'Event','Event','','','event.html');

/*Table structure for table `tbl_page` */

DROP TABLE IF EXISTS `tbl_page`;

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mk_home` text NOT NULL,
  `md_home` text NOT NULL,
  `about_photo` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `about_content_idn` text NOT NULL,
  `profile_content` text NOT NULL,
  `profile_content_idn` text NOT NULL,
  `culture_content` text NOT NULL,
  `culture_content_idn` text NOT NULL,
  `quality_content` text NOT NULL,
  `quality_content_idn` text NOT NULL,
  `structure_photo` varchar(255) NOT NULL,
  `mission_content` text NOT NULL,
  `mission_content_idn` text NOT NULL,
  `vision_content` text NOT NULL,
  `vision_content_idn` text NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL,
  `mk_gallery` text NOT NULL,
  `md_gallery` text NOT NULL,
  `mk_product` text NOT NULL,
  `md_product` text NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL,
  `mk_facility` text NOT NULL,
  `md_facility` text NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL,
  `term_content` text NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL,
  `privacy_content` text NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL,
  `mk_carrier` text NOT NULL,
  `md_carrier` text NOT NULL,
  `mk_aviation_electronics` text NOT NULL,
  `md_aviation_electronics` text NOT NULL,
  `mk_site_maps` text NOT NULL,
  `md_site_maps` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_page` */

insert  into `tbl_page`(`id`,`mk_home`,`md_home`,`about_photo`,`about_content`,`about_content_idn`,`profile_content`,`profile_content_idn`,`culture_content`,`culture_content_idn`,`quality_content`,`quality_content_idn`,`structure_photo`,`mission_content`,`mission_content_idn`,`vision_content`,`vision_content_idn`,`mk_about`,`md_about`,`mk_gallery`,`md_gallery`,`mk_product`,`md_product`,`mk_service`,`md_service`,`mk_facility`,`md_facility`,`mk_portfolio`,`md_portfolio`,`mk_testimonial`,`md_testimonial`,`mk_news`,`md_news`,`mk_contact`,`md_contact`,`mk_search`,`md_search`,`term_content`,`mk_term`,`md_term`,`privacy_content`,`mk_privacy`,`md_privacy`,`mk_carrier`,`md_carrier`,`mk_aviation_electronics`,`md_aviation_electronics`,`mk_site_maps`,`md_site_maps`) values 
(1,'csm cimahi, Cipta Sinergi Manufacturing, CV. Cipta Sinergi Manufacturing, csm, manufacturing, penerbangan, elektronik master, elektronik komponen, component electronic, electronic data, aviation, manufacturer, manufacturing, manufactruing processing','CV. Cipta Sinergi Manufacturing merupakan Perusahaan yang bergerak di bidang manufaktur untuk mesin yang diperlukan Industri. Didukung oleh Tools Designer, Tools Maker,  dan Production Planner yang berpengalaman serta didukung oleh Peralatan yang cukup lengkap dan pemrosesan yang cepat didukung oleh mesin yang mempunyai title High Speed Machine Processing dan menghasilkan produk yang sangat berkualitas.','about_photo.png','<p>A BRAVE INTRODUCTION<br></p><p>Cipta Sinergi Manufacturing is an industry which present in metal manufacturing with core competencies in design engineering capabilities as well as CNC Machining. Producing precision parts & components, plastic mould, mechanical systems and industrial automation. Present to fulfill industrial needs and be a partners with various industries. Having contribution in strengthen national capability. Reach the local and foreign markets<br></p>','<p></p><p></p><h4>Deskripsi singkat Perusahaan<br></h4>Cipta Sinergi Manufacturing adalah industri yang bergerak di bidang manufaktur logam dengan kompetensi inti pada kemampuan perancangan dan rekayasa serta  CNC Machining, Menghasilkan produk berupa suku cadang & komponen presisi, cetakan plastik (Mould), sistem mekanik serta otomasi industri. Hadir untuk memenuhi kebutuhan dan menjadi mitra berbagai industri serta menjadi penguat bagi industri nasional. Meraih pasar dalam negeri maupun luar negeri<br><h4><br></h4><h4>Sejarah Singkat Perusahaan</h4><h3></h3><h5>Sejarah CSM</h5><p>CSM didirikan pada bulan Juni 1997 dengan bentuk badan hukum CV (Commanditer Venootschap). CSM mempunyai struktur organisasi yang berbentuk flat (Fungsional) dengan Nandjar Nugraha sebagai Direktur. Jumlah karyawan ada 30 Orang.<br>CSM berkedudukan di Jalan Kamarung No. 88B, RT.04 RW.04 Kel. Citeureup Kec. Cimahi Utara - Kota Cimahi, Propinsi Jawa Barat.</p><p><br></p><h4>Proses Produksi Perusahaan</h4><h5>Proses Produksi CSM</h5><p>Fasilitas yang dimiliki : Bangunan Permanen, mesin-mesin produksi diantaranya: CNC Mill ada 5 unit, CNC Lathe ada 2 unit di dukung dengan mesin-mesin konvensional.</p><p><br></p><h4>Pelanggan kami diantaranya:\r\n			</h4><ol><li>PT. Perfetti Van Melle Indonesia (industri makanan)</li><li>PT. Belfoods Indonesia (industri makanan)</li><li>PT. Heinz ABC (industri makanan)</li><li>PT. Pakoakuina (industri otomotif)</li><li>PT. Inkoasku (industri otomotif)</li><li>PT. Medion Jaya Farma (industri farmasi)</li><li>PT. Pindad Persero (industri strategis)</li><li>PT. Radar Telekomunikasi Indonesia<br></li></ol><p></p>','<table><tbody><tr><td><b>Office & Workshop<br></b></td><td><b>:</b> Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat Indonesia 40512</td></tr><tr><td><b>Phone/Fax<br></b></td><td><b>:</b> (+62 22) 6647945</td></tr><tr><td><b>Website<br></b></td><td><b>:</b> www.ciptasinergi.com</td></tr><tr><td><b>E-Mail<br></b></td><td><b>:</b> marketing@ciptasinergi.com</td></tr><tr><td><b>Date of Established<br></b></td><td><b>:</b> June 1997</td></tr><tr><td><b>Legal Form<br></b></td><td><b>:</b> CV (Commanditer Venootschap) No. 5 Tanggal 24 Juli 2003</td></tr><tr><td><b>Number of Employees<br></b></td><td><b>:</b> 30 Orang</td>  </tr></tbody>\r\n</table>','<table><tbody><tr><td><b>Lokasi & Kantor<br></b></td><td><b>:</b> Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512</td></tr><tr><td><b>Telp/Fax<br></b></td><td><b>:</b> (+62 22) 6647945</td></tr><tr><td><b>Website<br></b></td><td><b>:</b> www.ciptasinergi.com</td></tr><tr><td><b>E-Mail<br></b></td><td><b>:</b> marketing@ciptasinergi.com</td></tr><tr><td><b>Tgl didirikan<br></b></td><td><b>:</b> Juni 1997</td></tr><tr><td><b>Legal Form<br></b></td><td><b>:</b> CV (Commanditer Venootschap) No. 5 Tanggal 24 Juli 2003</td></tr><tr><td><b>Jumlah Karyawan<br></b></td><td><b>:</b> 30 Orang</td>  </tr></tbody>\r\n</table>','<ol><li><i>Treat people as subject</i></li><li><i>Fairness & Honesty</i></li><li><i>Be a super team</i></li><li><i>Strive to the best</i></li><li><i>Be a learning organization</i></li><li><i>Beneficial partnership</i></li><li><i>Gratitude</i></li></ol>','<ol><li>Memanusiakan Manusia</li><li>Kepatutan dan kebenaran<br></li><li>Menjadi tim yang tangguh</li><li>Berjuang mencapai yang terbaik</li><li>Menjadi organisasi pembelajaran</li><li>Kemitraan yang saling memberi manfaat</li><li>Bersyukur<br></li></ol>','<p>We all Cipta Sinergi Manufacturing employees are committed to : <br> Continually to meet & exceed customer expectations<br>by providing high quality products in terms of reliability, security & safety, accuracy & on time delivery. Our success is based on the continuous improvement of the process & quality management system<br></p>','<section id=\"content2\" class=\"tab-content\">\r\n				<p>Kami segenap karyawan Cipta Sinergi Manufacturing berkomitmen untuk terus memenuhi & melampaui harapan pelanggan <br></p><p>dengan menyediakan produk yang bermutu tinggi dalam hal kehandalan, keamanan & keselamatan, akurasi & ketepatan waktu. <br></p><p>Keberhasilan kami didasarkan pada kesinambungan perbaikan proses & sistem menejemen mutu.</p>\r\n\r\n			</section>','structure_photo.png','Producing high quality products with on time delivery to exceed customer satisfaction and sustainable relationships. <br> \r\nAchieving a better quality of life for stakeholders. <br> \r\nIncreasing shareholder value.','Menghasilkan produk permesinan berkualitas dan tepat waktu disertai layanan yang baik untuk mencapai kepuasan pelanggan dan hubungan yang berkelanjutan. <br>\r\nMewujudkan kualitas kehidupan stakeholder yang lebih baik. <br>\r\nMeningkatkan shareholder values secara terus menerus.\r\n','Becoming a precision metal industry which mastering the latest manufacturing technology and excellent in design engineering. Having good ability in producing precision component, plastic mould, mechanical system and industrial automation ','Menjadi industri permesinan presisi yang menguasai teknologi manufaktur terbaru dan memiliki kemampuan yang baik dalam bidang design dan rekayasa. Sehingga mampu menghasilkan produk berupa komponen presisi, cetakan plastik, sistem mekanik dan otomasi industri yang memberikan kepuasan kepada pelanggan. ',' tentang perusahaan, company profile, perusahaan manufacturing, about company, tentang csm, tentang cv. cipta sinergi manufacturing','Tentang perusahaan CV. Cipta Sinergi Manufacturing merupakan Perusahaan yang bergerak di bidang manufaktur untuk mesin yang diperlukan Industri. Didukung oleh Tools Designer, Tools Maker,  dan Production Planner yang berpengalaman serta didukung oleh Peralatan yang cukup lengkap dan pemrosesan yang cepat didukung oleh mesin yang mempunyai title High Speed Machine Processing dan menghasilkan produk yang sangat berkualitas.','Galeri, kegiatan perusahaan, kegiatan perusahaan csm, kegiatan perusahaan cv. cipta sinergi manufaturing, company gallery','CV. Cipta Sinergi Manufacturing merupakan Perusahaan yang bergerak di bidang manufaktur untuk mesin yang diperlukan Industri. Didukung oleh Tools Designer, Tools Maker,  dan Production Planner yang berpengalaman serta didukung oleh Peralatan yang cukup lengkap dan pemrosesan yang cepat didukung oleh mesin yang mempunyai title High Speed Machine Processing dan menghasilkan produk yang sangat berkualitas.','Produk Engineering, Product Engineering, Manufaktur, product Manufacturing, military, aviation, professional aviation tools, professional military tools, Industrial Product, Produk industri, manufaktur industri, manufakturing, ','CV. Cipta Sinergi Manufacturing merupakan Perusahaan yang bergerak di bidang manufaktur untuk mesin yang diperlukan Industri. Didukung oleh Tools Designer, Tools Maker,  dan Production Planner yang berpengalaman serta didukung oleh Peralatan yang cukup lengkap dan pemrosesan yang cepat didukung oleh mesin yang mempunyai title High Speed Machine Processing dan menghasilkan produk yang sangat berkualitas.','','','','','','','','','','','','','','','<h2><strong>Terms and Conditions</strong></h2>\r\n\r\n<p>Welcome to CV. Cipta Sinergi Manufacturing!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of CV. Cipta Sinergi Manufacturing\'s Website, located at www.ciptasinergi.com.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use CV. Cipta Sinergi Manufacturing if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing CV. Cipta Sinergi Manufacturing, you agreed to use cookies in agreement with the CV. Cipta Sinergi Manufacturing\'s Privacy Policy.</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, CV. Cipta Sinergi Manufacturing and/or its licensors own the intellectual property rights for all material on CV. Cipta Sinergi Manufacturing. All intellectual property rights are reserved. You may access this from CV. Cipta Sinergi Manufacturing for your own personal use subject to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n<ul>\r\n    <li>Republish material from CV. Cipta Sinergi Manufacturing</li>\r\n    <li>Sell, rent or sub-license material from CV. Cipta Sinergi Manufacturing</li>\r\n    <li>Reproduce, duplicate or copy material from CV. Cipta Sinergi Manufacturing</li>\r\n    <li>Redistribute content from CV. Cipta Sinergi Manufacturing</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. CV. Cipta Sinergi Manufacturing does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of CV. Cipta Sinergi Manufacturing,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, CV. Cipta Sinergi Manufacturing shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant CV. Cipta Sinergi Manufacturing a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n    <li>Government agencies;</li>\r\n    <li>Search engines;</li>\r\n    <li>News organizations;</li>\r\n    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n    <li>commonly-known consumer and/or business information sources;</li>\r\n    <li>dot.com community sites;</li>\r\n    <li>associations or other groups representing charities;</li>\r\n    <li>online directory distributors;</li>\r\n    <li>internet portals;</li>\r\n    <li>accounting, law and consulting firms; and</li>\r\n    <li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of CV. Cipta Sinergi Manufacturing; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to CV. Cipta Sinergi Manufacturing. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n    <li>By use of our corporate name; or</li>\r\n    <li>By use of the uniform resource locator being linked to; or</li>\r\n    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>\r\n</ul>\r\n\r\n<p>No use of CV. Cipta Sinergi Manufacturing\'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n    <li>limit or exclude our or your liability for death or personal injury;</li>\r\n    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>','','','<h1>Privacy Policy for CV. Cipta Sinergi Manufacturing</h1>\r\n\r\n<p>At CV. Cipta Sinergi Manufacturing, accessible from www.ciptasinergi.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by CV. Cipta Sinergi Manufacturing and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at encep.suryanajr@gmail.com</p>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Cookies and Web Beacons</h2>\r\n\r\n<p>Like any other website, CV. Cipta Sinergi Manufacturing uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>\r\n\r\n\r\n\r\n<h2>Privacy Policies</h2>\r\n\r\n<P>You may consult this list to find the Privacy Policy for each of the advertising partners of CV. Cipta Sinergi Manufacturing. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicygenerator.info\">Privacy Policy Generator</a>.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on CV. Cipta Sinergi Manufacturing, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that CV. Cipta Sinergi Manufacturing has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites. What Are Cookies?</p>\r\n\r\n<h2>Children\'s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n\r\n<h2>Online Privacy Policy Only</h2>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in CV. Cipta Sinergi Manufacturing. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>','','','Open Recruitment, Career CSM, PKL CSM, Magang, Praktek Kerja Lapangan CSM Cimahi. Karier CSM','','','','','');

/*Table structure for table `tbl_partner` */

DROP TABLE IF EXISTS `tbl_partner`;

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_partner` */

insert  into `tbl_partner`(`id`,`name`,`photo`) values 
(1,'PT Perfetti Van Melle Indonesia','partner-1.png'),
(2,'PT Pakoakuina Group','partner-2.png'),
(3,'PT. INFRA RCS','partner-3.png'),
(4,'PT. Medion Jaya Farma','partner-4.png'),
(5,'PT. Hini Daiki Indonesia','partner-5.png'),
(6,'PT. Madawikri Tunggal','partner-6.png'),
(7,'PT. Belfoods Indonesia','partner-7.png'),
(8,'PT Nusantara Turbin Dan Propulsi','partner-8.png'),
(9,'PT Heinz ABC Indonesia','partner-9.png'),
(10,'PT Inkoasku','partner-10.png'),
(11,'PT Deksafindo Pratama Abadi','partner-11.png'),
(12,'PT Sentra Usahatama Jaya','partner-12.png'),
(13,'PT Andalan Furnindo','partner-13.png'),
(14,'PT Sorin Maharasa','partner-14.png'),
(15,'PT Ultrajaya Milk Industry Tbk','partner-15.png'),
(16,'PT King Plastic','partner-16.png'),
(17,'PT Yangtze Optics Indonesia','partner-17.png');

/*Table structure for table `tbl_photo` */

DROP TABLE IF EXISTS `tbl_photo`;

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `photo_caption` varchar(255) NOT NULL,
  `photo_caption_idn` varchar(255) NOT NULL,
  `photo_style` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `photo_desc` text NOT NULL,
  `photo_desc_idn` text NOT NULL,
  `photo_show_home` varchar(10) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_photo` */

insert  into `tbl_photo`(`photo_id`,`photo_caption`,`photo_caption_idn`,`photo_style`,`photo_name`,`photo_desc`,`photo_desc_idn`,`photo_show_home`) values 
(1,'Touring Ciletuh 2017','','col-sm-6 col-xs-6 box','photo-1.jpg','Foto Bersama dibukit pinggir pantai Ciletuh - Sukabumi dalam acara touring karyawan CV. Cipta Sinergi Manufacturing tahun 2017','','Yes'),
(2,'Kebersamaan di Ciletuh 2017','','col-sm-3 col-xs-6 box','photo-2.jpg','Istirahat sejenak sebelum melanjutkan perjalanan ke Ciletuh - Sukabumi dalam acara Touring Karyawan CV. Cipta Sinergi Manufacturing 2017','','Yes'),
(4,'Pameran Manufaktur 2018','','col-sm-3 col-xs-6 box','photo-4.jpg','Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','','Yes'),
(5,'Pameran Manufaktur 2018 (2)','','col-sm-3 col-xs-6 box','photo-5.jpg','Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','','Yes'),
(6,'Pameran Manufaktur 2018 (3)','','col-sm-6 col-xs-6 box','photo-6.jpg','Team yang menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','','Yes'),
(7,'Pameran Manufaktur 2018 (4)','','col-sm-3 col-xs-6 box','photo-7.jpg','Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','','Yes'),
(8,'Touring Pangandaran 2018','','col-sm-6 col-xs-6 box','photo-8.jpg','Foto bersama di halaman CV. Cipta Sinergi Manufacturing sebelum berangkat ke pantai Pangandaran dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing 2018','','Yes'),
(9,'Touring Pangandaran 2018 (2)','','col-sm-3 col-xs-6 box','photo-9.jpg','Kegiatan saat Touring ke Pantai Pangandaran dalam acra Touring Karyawan CV. Cipta Sinergi Manufacturing 2018','','Yes'),
(10,'Touring Pangandaran 2018 (3)','','col-sm-3 col-xs-6 box','photo-10.jpg','Kegiatan bersama karyawan CV. Cipta Sinergi Manufacturing dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing ke Pangandaran 2018','','Yes'),
(11,'Touring Pangandaran 2018 (4)','','col-sm-6 col-xs-6 box','photo-11.jpg','Foto bersama karyawan CV. Cipta Sinergi Manufacturing di pantai Pangandaran dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing 2018','','Yes'),
(12,'Idul Adha 2019','','col-sm-3 col-xs-6 box','photo-12.jpg','Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','','Yes'),
(13,'Idul Adha 2019 (2)','','col-sm-3 col-xs-6 box','photo-13.jpg','Pemotongan Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','','Yes'),
(14,'Idul Adha 2019 (3)','','col-sm-3 col-xs-6 box','photo-14.jpg','Prosesn Pemotongan Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','','Yes'),
(15,'Idul Adha 2019 (4)','','col-sm-3 col-xs-6 box','photo-15.jpg','Proses Pengolahan dan pemotongan daging sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','','Yes'),
(16,'Idul Adha 2019 (5)','','col-sm-6 col-xs-6 box','photo-16.jpg','Proses pembagian daging sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','','Yes'),
(17,'Not just a team, it\'s SQUAD','','col-sm-6 col-xs-6 box','photo-17.jpeg','Not just a team, it\'s SQUAD','','Yes'),
(18,'Manufacturing is dancing','','col-sm-3 col-xs-6 box','photo-18.jpeg','Manufacturing is dancing','','Yes'),
(19,'Penghormatan Bendera Merah Putih','','col-sm-3 col-xs-6 box','photo-19.jpeg','Penghormatan Bendera Merah Putih','','Yes'),
(20,'Family Gathering','','col-sm-6 col-xs-6 box','photo-20.jpeg','Family Gathering','','Yes'),
(21,'Family Gathering','','col-sm-6 col-xs-6 box','photo-21.jpeg','Family Gathering','','Yes'),
(22,'Family Gathering','','col-sm-3 col-xs-6 box','photo-22.jpeg','Family Gathering','','Yes'),
(23,'Family Gathering','','col-sm-6 col-xs-6 box','photo-23.jpeg','Family Gathering','','Yes'),
(24,'Family Gathering','','col-sm-3 col-xs-6 box','photo-24.jpeg','Family Gathering','','Yes');

/*Table structure for table `tbl_portfolio` */

DROP TABLE IF EXISTS `tbl_portfolio`;

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `short_content_idn` text NOT NULL,
  `content` text NOT NULL,
  `content_idn` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_portfolio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_portfolio` */

insert  into `tbl_portfolio`(`id`,`name`,`short_content`,`short_content_idn`,`content`,`content_idn`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_portfolio`) values 
(1,'Food Beverage','In the production process not only made industrial equipment, but the entirety of the customer demand is definitely there.','','In the production process not only made industrial equipment, but the entirety of the customer demand is definitely there. of the completeness of the manufacturing infrastructure of food, mold and other requirements we are ready to serve customers<br>','','1','portfolio-1.jpg','Food Beverage','','','food-beverage.html'),
(2,'Automotive','Our production process has always relied on customer satisfaction, and where all the requests of customers we serve, as well as in the manufacture of parts or the whole of the automotive','','<p>Our production process has always relied on customer satisfaction, and where all the requests of customers we serve, as well as in the manufacture of automotive parts or in whole. ranging from the mold and the material basis of our own manufacture of ready-made</p>','','1','portfolio-2.jpg','Automotive','','','automotive.html'),
(3,'Mechanical System of Radar','Not just rely on the industry and we are also ready to assist the government and in the defense and security of the country.','','Not just rely on the industry and we are also ready to assist the government and in the defense and security of the country. to assist in making the national radar, we are ready to strengthen the resilience and security of the country.','','2','portfolio-3.jpg','Mechanical System of Radar','','','mechanical-system-of-radar.html'),
(4,'Cockpit Simulator','Improving our service also makes a Head-Up Display (HUD) for the purposes of the cockpit Casing simulator.','','Improving our service also makes a Head-Up Display (HUD) for the purposes of the cockpit Casing simulator.','','3','portfolio-4.jpg','Cockpit Simulator','','','cockpit-simulator.html'),
(5,'Radar Display Unit Casing','Improving our service also makes Radar Display Unit (RDU) Casing for the purposes of cockpit simulator','','in improving our service also makes Radar Display Unit (RDU) Casing for the purposes of cockpit simulator','','3','portfolio-5.jpg','Radar Display Unit Casing','','','radar-display-unit-casing.html');

/*Table structure for table `tbl_portfolio_category` */

DROP TABLE IF EXISTS `tbl_portfolio_category`;

CREATE TABLE `tbl_portfolio_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_portfolio_category` */

insert  into `tbl_portfolio_category`(`category_id`,`category_name`,`status`) values 
(1,'Industrial','Active'),
(2,'Military','Active'),
(3,'Aviation','Active');

/*Table structure for table `tbl_portfolio_photo` */

DROP TABLE IF EXISTS `tbl_portfolio_photo`;

CREATE TABLE `tbl_portfolio_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `portfolio_id` int(11) NOT NULL,
  `slug_portfolio` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_portfolio_photo` */

insert  into `tbl_portfolio_photo`(`id`,`portfolio_id`,`slug_portfolio`,`photo`) values 
(1,1,'food-beverage.html','1.jpg'),
(2,1,'food-beverage.html','2.jpg'),
(3,1,'food-beverage.html','3.jpg'),
(7,2,'automotive.html','7.jpg'),
(9,2,'automotive.html','9.jpg'),
(11,2,'automotive.html','11.jpg'),
(12,3,'mechanical-system-of-radar.html','12.jpg'),
(13,3,'mechanical-system-of-radar.html','13.jpg'),
(14,5,'radar-display-unit-casing.html','14.jpg'),
(15,5,'radar-display-unit-casing.html','15.jpg'),
(16,5,'radar-display-unit-casing.html','16.jpg'),
(17,3,'mechanical-system-of-radar.html','17.jpg'),
(18,3,'mechanical-system-of-radar.html','18.jpg');

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_caption` varchar(255) NOT NULL,
  `product_caption_idn` varchar(255) NOT NULL,
  `product_style` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_desc_idn` text NOT NULL,
  `product_show_home` varchar(10) NOT NULL,
  `product_star` varchar(10) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`product_id`,`product_caption`,`product_caption_idn`,`product_style`,`product_name`,`product_desc`,`product_desc_idn`,`product_show_home`,`product_star`) values 
(1,'Air Nozzle Boiler','','col-sm-3 col-xs-6 box','product-1.jpg','Air Nozzle Boiler','','Yes','No'),
(2,'Air Nozzle for Boiler','','col-sm-3 col-xs-6 box','product-2.jpg','Air Nozzle for Boiler- nozzle for blowing hot air with smolder sand grains.\r\nMake from SUS 304 blind bar material with CNC Lathe machine,','','Yes','No'),
(3,'Arm Machining Part','','col-sm-6 col-xs-6 box','product-3.jpg','Arm Machining Part','','Yes','No'),
(4,'Aviation Modul Part assy','','col-sm-6 col-xs-6 box','product-4.jpg','Aviation Modul Part assy','','Yes','No'),
(5,'Bal Valve','','col-sm-3 col-xs-6 box','product-5.jpg','Bal Valve','','Yes','No'),
(6,'Ball Valve - Up','','col-sm-3 col-xs-6 box','product-6.jpg','Ball Valve - Up','','Yes','No'),
(7,'BOTTLE YAMALUBE 600ML BLOW MOLD','','col-sm-3 col-xs-6 box','product-7.jpg','BOTTLE YAMALUBE 600ML BLOW MOLD','','Yes','No'),
(8,'Cam machining','','col-sm-3 col-xs-6 box','product-8.jpg','Cam machining with custom contour  defending to the function of machine part.','','Yes','No'),
(9,'Can Scroll Cutter set','','col-sm-6 col-xs-6 box','product-9.jpg','Can Scroll Cutter set','','Yes','No'),
(10,'Car Wheel Cavity Mold AHT','','col-sm-3 col-xs-6 box','product-10.jpg','Car Wheel Cavity Mold  after heat treatment,\r\nFinishing with special tool for cutting hard surface in the CNC Milling machine','','Yes','No'),
(11,'Car Wheel Cavity Mold with Insert Core Cavity','','col-sm-3 col-xs-6 box','product-11.jpg','Car Wheel Cavity Mold with Insert Core Cavity','','Yes','No'),
(12,'Car Wheel Cavity Mold','','col-sm-6 col-xs-6 box','product-12.jpg','Car Wheel Cavity Mold','','Yes','No'),
(13,'Casting Mold Cavity','','col-sm-3 col-xs-6 box','product-13.jpg','Casting Mold Cavity','','Yes','No'),
(14,'Casting Sand Core Mold','','col-sm-6 col-xs-6 box','product-14.jpg','Casting Sand Core Mold','','Yes','No'),
(15,'Cavity CNC Machining Part','','col-sm-3 col-xs-6 box','product-15.jpg','Cavity CNC Machining Part','','Yes','No'),
(16,'Cavity for Casting Sand Core','','col-sm-3 col-xs-6 box','product-16.jpg','Cavity for Casting Sand Core','','Yes','No'),
(17,'Cavity for Casting Sand Core-1','','col-sm-3 col-xs-6 box','product-17.jpg','Cavity for Casting Sand Core-1','','Yes','No'),
(18,'Cavity for Casting Sand Core-2','','col-sm-6 col-xs-6 box','product-18.jpg','Cavity for Casting Sand Core-2','','Yes','No'),
(19,'Cockpit Module Case','','col-sm-3 col-xs-6 box','product-19.jpg','Cockpit Module Case','','Yes','No'),
(20,'Cockpit Module Case - rear','','col-sm-3 col-xs-6 box','product-20.jpg','Cockpit Module Case - rear','','Yes','No'),
(21,'Feeder Conveyor Unit','','col-sm-6 col-xs-6 box','product-21.jpg','Feeder Conveyor Unit','','Yes','No'),
(22,'Food Processing Part - Mold Plate','','col-sm-3 col-xs-6 box','product-22.jpg','Food Processing Part - Mold Plate','','Yes','No'),
(23,'Food Processing Part - Steel Mold Plate','','col-sm-3 col-xs-6 box','product-23.jpg','Food Processing Part - Steel Mold Plate','','Yes','No'),
(24,'Horn Antena Radar - Front','','col-sm-3 col-xs-6 box','product-24.jpg','Horn Antenna Radar - Front\r\nMade with CNC lathe machine, from blind aluminium material up to 1 mm thickness, size about diameter  100 x 270 mm','','Yes','No'),
(25,'Horn Antena Radar - Upper','','col-sm-3 col-xs-6 box','product-25.jpg','Horn Antena Radar - Upper','','Yes','No'),
(26,'Housing Pump','','col-sm-6 col-xs-6 box','product-26.jpg','Housing for lube and pump sitting.','','Yes','No'),
(27,'Individual Feeder System','','col-sm-6 col-xs-6 box','product-27.jpg','Feeder for eliminated product rejects, with controller for filling missed ones.','','Yes','No'),
(28,'Jig For Machining Process','','col-sm-3 col-xs-6 box','product-28.jpg','Jig For Machining Process','','Yes','No'),
(29,'Lot Mark Holder SA25 PAKO Karwheel - Closer','','col-sm-3 col-xs-6 box','product-29.jpg','Holder for lot mark, look closer.','','Yes','No'),
(30,'Lot Mark Holder SA25 PAKO Karwheel','','col-sm-3 col-xs-6 box','product-30.jpg','Holder  for lot mark','','Yes','No'),
(31,'Lot Mark Koja FR#7 PAKO Motorcycle M6 - Closer','','col-sm-3 col-xs-6 box','product-31.jpg','Insert for make production marker for the date, month and year identify,\r\nIn the casting mold, look Closer.','','Yes','No'),
(32,'Lot Mark Koja FR#7 PAKO Motorcycle M6','','col-sm-6 col-xs-6 box','product-32.jpg','Insert for make production marker for the date, month and year identify,\r\nIn the casting mold, look Closer.','','Yes','No'),
(33,'MDM Food Processing Part','','col-sm-3 col-xs-6 box','product-33.jpg','Blade for feeder raw meat material to filtered to be pure meat and bone','','Yes','No'),
(34,'MDM Food Processing Part-Blade','','col-sm-3 col-xs-6 box','product-34.jpg','Blade for feeding meat and bone material to filtered.','','Yes','No'),
(35,'MDM Food Processing Part-Filter','','col-sm-3 col-xs-6 box','product-35.jpg','Spare part for filter meat and bones of chicken, with extruder pressure.','','Yes','No'),
(36,'Plastic Mold Set','','col-sm-3 col-xs-6 box','product-36.jpg','Plastic Mold Set','','Yes','No'),
(37,'Pump Lube Part - with wear plate','','col-sm-6 col-xs-6 box','product-37.jpg','Lube for transferring material in the big pump.','','Yes','No'),
(38,'Pump Lube Part','','col-sm-3 col-xs-6 box','product-38.jpg','Lube for transferring liquid material in the beverage industry','','Yes','No'),
(39,'Pump Part - Lube','','col-sm-3 col-xs-6 box','product-39.jpg','Lube for transferring  material in the pump','','Yes','No'),
(40,'Pump Part - Metering gear','','col-sm-6 col-xs-6 box','product-40.jpg','Gear for transferring material in the pump','','Yes','No'),
(41,'Radar Component','','col-sm-3 col-xs-6 box','product-41.jpg','Radar Component - make from blind POM material with CNC Milling machining , size about 700x600x90 mm','','Yes','No'),
(42,'Radar Component Rear','','col-sm-3 col-xs-6 box','product-42.jpg','Radar Component Rear','','Yes','No'),
(43,'Radar Component Closer','','col-sm-3 col-xs-6 box','product-43.jpg','Radar Component Closer','','Yes','No'),
(44,'ROLLER POM BLACK','','col-sm-3 col-xs-6 box','product-44.jpg','Custom shape ROLLER  make with  Turning CNC machine,  good uniformity','','Yes','No'),
(45,'Rotary Cleaner Machine','','col-sm-3 col-xs-6 box','product-45.jpg','Machine for cleaning candy forming dies after used','','Yes','No'),
(46,'Rotary Forming Part - Plunger','','col-sm-6 col-xs-6 box','product-46.jpg','Rotary Forming Part - Plunger','','Yes','No'),
(47,'Rotary Table','','col-sm-3 col-xs-6 box','product-47.jpg','Table for balancing production line. Used to make constant production capacity','','Yes','No'),
(48,'Rotary Table - Rear','','col-sm-3 col-xs-6 box','product-48.jpg','Table for balancing production line.\r\nUsed to make constant production capacity','','Yes','No'),
(49,'Rotary Table - Closer','','col-sm-3 col-xs-6 box','product-49.jpg','Table for balancing production line.\r\nUsed to make constant production capacity, look closer.','','Yes','No'),
(50,'SHAFT PN 7 Bearing Housing','','col-sm-6 col-xs-6 box','product-50.jpg','SHAFT PN 7 Bearing Housing','','Yes','No'),
(51,'SHAFT PN 7 Bearing Housing - Closer rear','','col-sm-3 col-xs-6 box','product-51.jpg','SHAFT PN 7 Bearing Housing - Closer rear','','Yes','No'),
(53,'Short Plunger Eclair','','col-sm-6 col-xs-6 box','product-53.jpg','Stick for gum forming.\r\nused couple with other side and forming locator.','','Yes','No'),
(54,'Short Plunger Eclair - Closer','','col-sm-3 col-xs-6 box','product-54.jpg','Stick for gum forming.\r\nused couple with other side and forming locator, look detail.','','Yes','No'),
(55,'Side Conveyor','','col-sm-3 col-xs-6 box','product-55.jpg','Side Conveyor','','Yes','No'),
(56,'Side Conveyor - Rear','','col-sm-3 col-xs-6 box','product-56.jpg','Side Conveyor - Rear','','Yes','No'),
(57,'Slab Blind Bottling Marble Beat','','col-sm-3 col-xs-6 box','product-57.jpg','Slab Blind Bottling Marble Beat,\r\nspacer for make no material carry, so make interval in packaging pouch','','Yes','No'),
(58,'Slab Blind Bottling Marble Beat - Closer','','col-sm-6 col-xs-6 box','product-58.jpg','Slab Blind Bottling Marble Beat - Closer','','Yes','No'),
(59,'Slab Blind Bottling Marble Beat - Closer-1','','col-sm-6 col-xs-6 box','product-59.jpg','Slab Blind Bottling Marble Beat - Closer-1','','Yes','No'),
(60,'Slab Bottle in Line3x7 Marbel Beat','','col-sm-3 col-xs-6 box','product-60.jpg','Carrier tray to determine the number of pieces of gum as a group in one pouch packaging.','','Yes','No'),
(61,'Slab Bottle in Line3x7 Marbel Beat - Closer','','col-sm-3 col-xs-6 box','product-61.jpg','Carrier tray to determine the number of pieces of gum as a group in one pouch packaging, look detail.','','Yes','No'),
(62,'Spray Bottle 500ml Blow Mold','','col-sm-6 col-xs-6 box','product-62.jpg','Molding for making Spray Bottle, with blowing process.','','Yes','No'),
(63,'Transfer Pump','','col-sm-3 col-xs-6 box','product-63.jpg','Pump for transferring chili sauce material to package in sachet form.\r\nCan use for other material with similar character.','','Yes','No'),
(64,'Turbine Impeller assy','','col-sm-3 col-xs-6 box','product-64.jpg','Impeller blade for energy generators.','','Yes','No'),
(65,'Turbine Impeller','','col-sm-6 col-xs-6 box','product-65.jpg','Turbine Impeller','','Yes','No'),
(66,'Electronic Support Measures (ESM) - Without Cover','','col-sm-3 col-xs-6 box','product-66.jpg','ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.','','Yes','No'),
(67,'Electronic Support Measures (ESM) - With Cover','','col-sm-3 col-xs-6 box','product-67.jpg','ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.','','Yes','No'),
(68,'Electronic Support Measures (ESM)','','col-sm-6 col-xs-6 box','product-68.jpg','ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.','','Yes','No'),
(69,'Knife Pocket - Upper','','col-sm-6 col-xs-6 box','product-69.jpg','Nice Knife for trip accessories tooling, look detail on upper.','','Yes','No'),
(70,'Knife Pocket - side by side','','col-sm-3 col-xs-6 box','product-70.jpg','Nice Knife for trip accessories tooling, look detail on side by side','','Yes','No'),
(71,'Knife Pocket - Side','','col-sm-3 col-xs-6 box','product-71.jpg','Nice Knife for trip accessories tooling, look detail on the side.','','Yes','No'),
(72,'Knife Pocket - Other Side','','col-sm-6 col-xs-6 box','product-72.jpg','Nice Knife for trip accessories tooling, look detail on another side.','','Yes','Yes'),
(74,'K15GRR Upper Insert','','col-sm-3 col-xs-6 box','product-74.jpg','Insert core for making casting wheel - placed in the center of wheel molding, look closer in the Upside.','','Yes','No'),
(75,'K15GRR Upper Insert - Side','','col-sm-3 col-xs-6 box','product-75.jpg','Insert core for making casting wheel - placed in the center of wheel molding, look closer in the side area.','','Yes','No'),
(76,'Tip Capper Cordial white cap sealer','','col-sm-6 col-xs-6 box','product-76.jpg','Head of the tool to tighten the cap of the bottle.\r\nused in beverage industries.','','Yes','No'),
(77,'Tip Capper Cordial white cap sealer - Side','','col-sm-3 col-xs-6 box','product-77.jpg','Head of the tool to tighten the cap of the bottle.\r\nused in beverage industries, the other side looks closer.','','Yes','No'),
(78,'Tip Capper Cordial white cap sealer - Other Side','','col-sm-3 col-xs-6 box','product-78.jpg','Head of a tool to tighten the cap of the bottle.\r\nused in beverage industries, look closer.','','Yes','Yes');

/*Table structure for table `tbl_service` */

DROP TABLE IF EXISTS `tbl_service`;

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `short_content_idn` text NOT NULL,
  `content` text NOT NULL,
  `content_idn` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_service` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_service` */

insert  into `tbl_service`(`id`,`heading`,`short_content`,`short_content_idn`,`content`,`content_idn`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_service`) values 
(2,'Tooling and Jig Fixture','Support for making tooling like dies, jig-fixture, checking fixture etc.  to help production process in the larger industry.\r\nCapable for produced precision part machinery with uniformity and reliability for semi-mass production','','<br>Mainly support for customizing  tooling like dies , jig and fixture etc. for support  bigger industry.  We able to produce precision part machining with uniformity and reliability of the quality of machining components by CNC machining  processing and other needed process.  We will advise on efficiency improvement before execute the manufacture process by SolidWork analysis.<br><br>','','service-2.jpg','Tooling and Jig Fixture','','','tooling-and-jig-fixture.html'),
(3,'Mold and Plastic Component','Mold & Plastic Components for industrial applications.','','<p>In addition to producing a wide range of metal products, we also provide the <b>Mold & Plastic components</b> for industry. with various requests submitted by our customers will create with a professional and with a variety of requests from customers to produce high-quality products.</p><p>With a wide range of products made previously from <b>Mold & Plastic Components</b>, we hire an experts to create concepts and applications to be implemented in the process of application of the product you want.<br></p><p><br></p>','','service-3.jpg','Mold and Plastic Component','','','mold-and-plastic-component.html'),
(4,'Spare Part & Precision Component','Spare Part & Precision Component with expert solid die and die component building professional','','To improve the quality of your production, CV. Cipta Sinergi Manufacturing offers <b>Spare Part &amp; Precision Component</b> with expert solid die and die component building professional, design and manufacturing services for progressive dies used in various industries. Using state-of-the-art design manufacturing, our engineering and design team works with each customer to manufacture accurate, high quality die components and tooling customized for each application industrial component.','','service-4.jpg','Spare Part & Precision Component','','','spare-part--precision-component.html'),
(5,'Mechanical System','Mechanical systems experts with many variety of experiences to increase your production','','<p>Mechanical systems experts with many variety of experiences to increase your production, with an experienced engineering team are working on various projects to produce high-quality mechanical systems, as well as  flexibility according to customer needed.</p><p>We accept various kinds of orders for mechanical systems  to increase production capacity.</p><p>We also deal with better designs for managing mechanical engineering and automation system.<br></p>','','service-5.jpg','Mechanical System','','','mechanical-system.html'),
(6,'Industry Training','industry training for beginner students in vocational high schools and colleges with job training, covering work safety, readiness at work, cooperation, responsibility, and increasing motivation','','<p>we also provide industry training for beginner students in vocational high schools and colleges with job training, covering work safety, readiness at work, cooperation, responsibility, and increasing motivation to be ready to compete with others, thereby generating new talent in the development industry in an environment of a highly qualified factory.</p><p>by growing a high curiosity, we developed a knack for making every student be able to compete with others in the industry.<br>after participating in industry training students get a certificate to show the experience that has been followed in the industrial training program that has been passed.<br></p>','','service-6.jpg','Industry Training','','','industry-training.html'),
(7,'CNC Machining','CNC Machining','','<p>CNC Machining<br></p>','','service-7.jpg','CNC Machining','','','cnc-machining.html');

/*Table structure for table `tbl_settings` */

DROP TABLE IF EXISTS `tbl_settings`;

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `logo2` varchar(255) NOT NULL,
  `logo_admin` varchar(255) NOT NULL,
  `company_ceo` varchar(50) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `counter_bg` varchar(255) NOT NULL,
  `login_bg` varchar(255) NOT NULL,
  `general_companyname` varchar(255) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_working_hour` text NOT NULL,
  `top_bar_email` varchar(255) NOT NULL,
  `top_bar_phone` varchar(255) NOT NULL,
  `contact_map_iframe` text NOT NULL,
  `receive_email` varchar(255) NOT NULL,
  `receive_password` varchar(255) NOT NULL,
  `protocol` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
  `logo_image` varchar(255) NOT NULL,
  `logo_alt` varchar(255) NOT NULL,
  `background` varchar(50) NOT NULL,
  `text_color` varchar(50) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `company_telp` varchar(50) NOT NULL,
  `company_website` varchar(255) NOT NULL,
  `reset_password_email_subject` varchar(255) NOT NULL,
  `total_recent_post` int(11) NOT NULL,
  `total_popular_post` int(11) NOT NULL,
  `total_recent_post_home` int(11) NOT NULL,
  `total_product_post` int(11) NOT NULL,
  `theme_color_1` varchar(10) NOT NULL,
  `theme_color_2` varchar(10) NOT NULL,
  `counter1_text` varchar(255) NOT NULL,
  `counter1_value` int(11) NOT NULL,
  `counter2_text` varchar(255) NOT NULL,
  `counter2_value` int(11) NOT NULL,
  `counter3_text` varchar(255) NOT NULL,
  `counter3_value` int(11) NOT NULL,
  `counter4_text` varchar(255) NOT NULL,
  `counter4_value` int(11) NOT NULL,
  `counter_status` varchar(10) NOT NULL,
  `banner` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_settings` */

insert  into `tbl_settings`(`id`,`logo`,`logo2`,`logo_admin`,`company_ceo`,`favicon`,`counter_bg`,`login_bg`,`general_companyname`,`footer_copyright`,`footer_address`,`footer_phone`,`footer_working_hour`,`top_bar_email`,`top_bar_phone`,`contact_map_iframe`,`receive_email`,`receive_password`,`protocol`,`smtp_host`,`smtp_port`,`logo_image`,`logo_alt`,`background`,`text_color`,`company_name`,`company_address`,`company_telp`,`company_website`,`reset_password_email_subject`,`total_recent_post`,`total_popular_post`,`total_recent_post_home`,`total_product_post`,`theme_color_1`,`theme_color_2`,`counter1_text`,`counter1_value`,`counter2_text`,`counter2_value`,`counter3_text`,`counter3_value`,`counter4_text`,`counter4_value`,`counter_status`,`banner`) values 
(1,'logo.png','logo2.png','logo_admin.png','company_ceo.png','favicon.png','counter_bg.JPG','login_bg.png','CV. Cipta Sinergi Manufacturing','Copyright © 2019 | CV. Cipta Sinergi Manufacturing','Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512','(022) 6647945','(8:00 AM - 5:00 PM)','marketing@ciptasinergi.com','(022) 6647945','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.177204490785!2d107.551033!3d-6.8552849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x602a56a5b8d7e0cc!2sCV.+Cipta+Sinergi+Manufacturing!5e0!3m2!1sid!2sid!4v1565082522509!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>','pkl.ciptasinergi@gmail.com','Bee9509*#','smtp','ssl://smtp.gmail.com','465','https://www.ciptasinergi.com/public/uploads/logo.png','Logo CV. Cipta Sinergi Manufacturing','134595','FFFFFF','CV. Cipta Sinergi Manufacturing','Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat - Indonesia (40512)','(022) 6647945','www.ciptasinergi.com','Password Reset Request - www.ciptasinergi.com',4,4,10,6,'134595','FFFFFF','Employee\'s',50,'Project Finish',1200,'Projects On-going',800,'Award\'s',1200,'','banner.png');

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `heading_idn` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `content_idn` text NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`id`,`photo`,`heading`,`heading_idn`,`content`,`content_idn`,`button1_text`,`button1_url`,`button2_text`,`button2_url`) values 
(1,'slider-1.JPG','Partner for education, <br> a place for internship students','Mitra dunia pendidikan, tempat bagi siswa magang','Good Partner for vocational school and college. Students are introduced to the industrial vibe and involved in working, doing drawing and designing, production and management activities.','Menjadi mitra bagi sekolah kejuruan dan perguruan tinggi. Para siswa dikenalkan kepada dunia industri dan dilibatkan dalam bekerja, melakukan aktifitas menggambar dan merancang, produksi dan manajemen. ','Read More','ciptasinergi-career.html','Contact Us','contact'),
(2,'slider-2.jpg','LATEST TECHNOLOGY IN MACHINING','menggunakan teknologi mutakhir dalam proses pemesinan','CNC machines are used for producing precision part with good quality surface. Increasing competitiveness and be accepted by customers as added value. Operated by well trained operators with high skills.','Mesin CNC digunakan untuk menghasilkan komponen presisi dan kualitas permukaan yang baik. meningkatkan daya saing dan diterima oleh pelanggan sebagai nilai tambah. Operator mesin yang terlatih dengan ketrampilan yang memadai.','Read More','facility','About Us','about'),
(3,'slider-3.jpg','Comfortable workplace for empassioned employee','TEMPAT KERJA YANG NYAMAN BAGI KARYAWAN ','Having sufficient working area, employees work in comfortable, safe and healthy environment. A warm and family-friendly atmosphere that fosters positive behaviour','Memiliki area kerja yang memadai, karyawan bekerja di lingkungan yang nyaman, aman dan sehat. Suasana hangat dan ramah keluarga yang menumbuhkan perilaku positif','Read more','facility','Services','service'),
(4,'slider-4.JPG','Smart managing, <br> supported by  CSMERP system','Didukung oleh sistem informasi CSMERP untuk pengelolaan yang cerdas','CSMERP is a manufacturing information system which developed to integrates and automates business processes, to make easier for analysis, planning, controlling and decision making.','CSMERP yang dikembangkan adalah sebuah sistem informasi manufaktur yang mengintegrasi dan mengotomasikan proses bisnis sehingga memudahkan dalam analisa, perencanaan, pengendalian dan pengambilan keputusan. ','read more','#','contact us','contact');

/*Table structure for table `tbl_social` */

DROP TABLE IF EXISTS `tbl_social`;

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL,
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_social` */

insert  into `tbl_social`(`social_id`,`social_name`,`social_url`,`social_icon`) values 
(1,'Facebook','#','fa fa-facebook'),
(2,'Twitter','#','fa fa-twitter'),
(3,'LinkedIn','#','fa fa-linkedin'),
(4,'Google Plus','','fa fa-google-plus'),
(5,'Pinterest','#','fa fa-pinterest'),
(6,'YouTube','#','fa fa-youtube'),
(7,'Instagram','','fa fa-instagram'),
(8,'Tumblr','','fa fa-tumblr'),
(9,'Flickr','','fa fa-flickr'),
(10,'Reddit','','fa fa-reddit'),
(11,'Snapchat','','fa fa-snapchat'),
(12,'WhatsApp','','fa fa-whatsapp'),
(13,'Quora','','fa fa-quora'),
(14,'StumbleUpon','','fa fa-stumbleupon'),
(15,'Delicious','','fa fa-delicious'),
(16,'Digg','','fa fa-digg');

/*Table structure for table `tbl_testimonial` */

DROP TABLE IF EXISTS `tbl_testimonial`;

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_idn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_testimonial` */

insert  into `tbl_testimonial`(`id`,`name`,`designation`,`company`,`photo`,`comment`,`comment_idn`) values 
(1,'John Doe','Managing Director','ABC Inc.','testimonial-1.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.',''),
(2,'Dadiv Smith','CEO','SS Multimedia','testimonial-2.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.',''),
(3,'Stefen Carman','Chairman','GH Group','testimonial-3.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.',''),
(4,'Gary Brent','CFO','XYZ It Solution','testimonial-4.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.','');

/*Table structure for table `tbl_user` */

DROP TABLE IF EXISTS `tbl_user`;

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`full_name`,`email`,`phone`,`password`,`photo`,`role`,`status`,`token`) values 
(1,'Encep Suryana','encep.suryanajr@gmail.com','082129714260','e4e05d342730456fcf3d8c87e95d5748','avatar-1.jpg','admin','Active','df627f2fcbe82f2aecd3071b228b631c'),
(2,'HRD','hrd@gmail.com','082129714260','e10adc3949ba59abbe56e057f20f883e','avatar-2.jpg','hrd','Active','6ebf2c00f0b9f4ccec500f841199e675'),
(3,'Staff','staff@gmail.com','082129714260','e10adc3949ba59abbe56e057f20f883e','avatar-3.jpg','staff','Active',''),
(4,'Admin','admin@gmail.com','082129714260','e10adc3949ba59abbe56e057f20f883e','avatar-4.png','admin','Active','bb0a1e5648196fac4a64247cae526102'),
(5,'Aman Wardana','aman.wardana@gmail.com','08156243970','71ba8c048487a12de09d371071ffcd7e','avatar-5.png','admin','Active','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
