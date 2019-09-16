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
CREATE DATABASE /*!32312 IF NOT EXISTS*/`csm_web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `csm_web`;

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
  `content` text NOT NULL,
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
  `item_bg` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_content_home_company_profile` */

insert  into `tbl_content_home_company_profile`(`id`,`item_bg`) values 
(1,'Company_profile.pdf');

/*Table structure for table `tbl_electronics_division` */

DROP TABLE IF EXISTS `tbl_electronics_division`;

CREATE TABLE `tbl_electronics_division` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `client_comment` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_electronics` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_electronics_division` */

insert  into `tbl_electronics_division`(`id`,`name`,`short_content`,`content`,`client_name`,`client_company`,`start_date`,`end_date`,`website`,`cost`,`client_comment`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_electronics`) values 
(1,'PLC Controller design and implementations','PLC Controller design and implementations','<p>PLC Controller design and implementations<br></p>','','','','','','','','1','electronics_division-1.jpg','PLC Controller design and implementations','PLC Controller design and implementations','PLC Controller design and implementations','plc-controller-design-and-implementations.html'),
(2,'Power electronics design and manufacturing','Power electronics design and manufacturing','<p>Power electronics design and manufacturing <br></p>','','','','','','','','1','electronics_division-2.jpg','Power electronics design and manufacturing ','Power electronics design and manufacturing ','Power electronics design and manufacturing ','power-electronics-design-and-manufacturing.html'),
(3,'Man-Machine Interface','MMI (Man-Machine Interface)','<p>MMI (Man-Machine Interface)<br></p>','','','','','','','','1','electronics_division-3.jpg','MMI (Man-Machine Interface)','MMI (Man-Machine Interface)','MMI (Man-Machine Interface)','man-machine-interface.html'),
(4,'Ruggedized electronic controllers','Ruggedized electronic controllers','<p>Ruggedized electronic controllers<br></p>','','','','','','','','2','electronics_division-4.jpg','Ruggedized electronic controllers','Ruggedized electronic controllers','Ruggedized electronic controllers','ruggedized-electronic-controllers.html'),
(5,'Harsh environmental power drivers','Harsh environmental power drivers','<p>Harsh environmental power drivers <br></p>','','','','','','','','2','electronics_division-5.jpg','Harsh environmental power drivers ','Harsh environmental power drivers ','Harsh environmental power drivers ','harsh-environmental-power-drivers.html'),
(6,'Mission computers','Mission computers','<p>Mission computers <br></p>','','','','','','','','3','electronics_division-6.jpg','Mission computers ','Mission computers ','Mission computers ','mission-computers.html'),
(7,'Display systems Multi-Function Display-MFD Moving Map Display etc','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','','','','','','','','3','electronics_division-7.jpg','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','Display systems (Multi-Function Display-MFD, Moving Map Display, etc)','display-systems-multi-function-display-mfd-moving-map-display-etc.html'),
(8,'Sensor interface units','Sensor interface units','<p>Sensor interface units <br></p>','','','','','','','','3','electronics_division-8.jpg','Sensor interface units ','Sensor interface units ','Sensor interface units ','sensor-interface-units.html');

/*Table structure for table `tbl_electronics_division_category` */

DROP TABLE IF EXISTS `tbl_electronics_division_category`;

CREATE TABLE `tbl_electronics_division_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_electronics_division_category` */

insert  into `tbl_electronics_division_category`(`category_id`,`category_name`,`status`) values 
(1,'Industrial Electronics','Active'),
(2,'Defense Electronic','Active'),
(3,'Aviation Electronics','Active');

/*Table structure for table `tbl_electronics_division_desc` */

DROP TABLE IF EXISTS `tbl_electronics_division_desc`;

CREATE TABLE `tbl_electronics_division_desc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `electronics_division_desc_photo` varchar(255) NOT NULL,
  `electronics_division_desc_heading` varchar(255) NOT NULL,
  `electronics_division_desc_content` text NOT NULL,
  `mt_electronics_division_desc` varchar(255) NOT NULL,
  `mk_electronics_division_desc` text NOT NULL,
  `md_electronics_division_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_electronics_division_desc` */

insert  into `tbl_electronics_division_desc`(`id`,`electronics_division_desc_photo`,`electronics_division_desc_heading`,`electronics_division_desc_content`,`mt_electronics_division_desc`,`mk_electronics_division_desc`,`md_electronics_division_desc`) values 
(1,'electronics_division_desc_photo.png','Electronic technology ','<p>Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR etc) processors.</p><p><b>Drivers and controllers</b></p><p>Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.</p><p><br></p><p align=\"left\"><b><span style=\"font-family: \" arial\";\"=\"\">Product: Navigation and moving Maps</span></b></p><p align=\"left\"><b>Functions: Multi-purpose display</b></p><p align=\"left\">- Moving the map and heading display</p><p>- GEO Positioning</p><p>- Flight Data</p><p>- Aircraft Status data (Roll, Pitch, Yaw)</p><p>- Camera Interface</p><p>- Map data loading and settings</p><p>- DO-160 Compatibility</p><p>- Sunlight readable display</p><p><b><br></b></p><p><b>Aircraft Navigation and engine sensors converter unit</b></p><p><b>-</b> <b>AIU </b>converts analog and discrete signals from diverse source and sensors of aircraft to serial interface protocol, such as ARINC429, RS-422/485, CAN (ARINC 825) or AFDX (ARINC664)</p><p>- Converts signals from:</p><p>  +Air pressure sensors</p><p>  +Fee Gryros, compass</p><p>  +INS systems</p><p>  +All Syncro and resolver sensors</p><p>  +Radio Altimeter</p><p>  +Fuel Sensors</p><p>  +Engine Sensors</p><p><br></p><p><b>High Power Industrial DC Motor Driver</b></p><p>- Up to 400 Amps, PWM Driving</p><p>- Input voltage: 18-28 DC</p><p>- Smart Control (Current, Temperature and luck sensing)</p><p>- Programmable RPM Controlling</p><p>- Time Controlling (Programmable delays)</p><p>- soft and fast running, soft and fast stop</p><p>- RS-422 serial interface, status, and warnings repot</p><p>- Discrete and digital command interface (controlling by panel or computer interface)</p><p>- Noise Isolation</p><p>- Harsh environmental operation (Drop, Shock, Strike, Vibration and temperature (-20 to +60) resistant)<br><b></b><br></p><p align=\"right\"></p>','Electronic technology ','Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR, etc) processors. Drivers and controllers Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.','Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR, etc) processors. Drivers and controllers Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.');

/*Table structure for table `tbl_electronics_division_photo` */

DROP TABLE IF EXISTS `tbl_electronics_division_photo`;

CREATE TABLE `tbl_electronics_division_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `electronics_division_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_electronics_division_photo` */

/*Table structure for table `tbl_facility` */

DROP TABLE IF EXISTS `tbl_facility`;

CREATE TABLE `tbl_facility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_facility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_facility` */

insert  into `tbl_facility`(`id`,`name`,`short_content`,`content`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_facility`) values 
(1,'HIGH-SPEED CNC MILLING MACHINING CENTER','Our process production support with high-speed CNC Milling Machining center for high-speed cutting tools.','<p align=\"justify\">Our process production support with <b>High-Speed CNC Machining Center</b>, aided by a fast machine production process can be more productive and produce <b>High-Quality</b>\r\n products and competitive, so that the products will be used by the \r\nclients does not doubt the quality, the following specifications of <b>CNC Milling Machines</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">MATRIX 560AH / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 12000 rpm, Travel: 560x430x450<br></p></td><td align=\"center\">80%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">F1-LG 1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1000x510x510<br></p></td><td align=\"center\">90%<br></td><td align=\"center\">186.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">PRO-1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 10000 rpm, Travel: 1000x600x630<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">166.000<br></td><td align=\"center\">0,007/300<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">S-PLUSH 10AP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1020x520x530<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">205.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">SMC-5 / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr></tbody></table><p>With the guarantee of providing quality and tested products. <br></p>','1','facility-1.jpg','HIGH-SPEED CNC MILLING MACHINING CENTER','','','high-speed-cnc-milling-machining-center.html'),
(2,'HIGH-SPEED CNC TURNING MACHINING CENTER','The proper coating is key to maximizing the operational efficiency of high-speed metal cutting tools.','<p align=\"justify\">The proper coating is key to maximizing the \r\noperational efficiency of high-speed metal cutting tools. We offer a \r\nvariety of coatings to help optimize performance and extend the life of \r\nyour cutting tools and inserts. Process production support with <b>High-Speed CNC Turning Machining Center</b>, aided by a fast machine production process can be more productive and produce <b>High-Quality</b>\r\n products and competitive, so that the products will be used by the \r\nclients does not doubt the quality, the following specifications of <b>CNC </b><b><b>Turning </b> Machines</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC TURNING MACHINE<br></td><td align=\"center\">CAK 4085D / SHEN YANG<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850</p></td><td align=\"center\">50%<br></td><td align=\"center\">136.000<br></td><td align=\"center\">0,012<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC TURNING MACHINE</td><td align=\"center\">MAZAK QT T6<br></td><td align=\"center\"><p>Spindle Speed 7000 rpm, Travel: 100x100</p></td><td align=\"center\">50%<br></td><td align=\"center\">123.000<br></td><td align=\"center\">0,002<br></td></tr></tbody></table><p>Have a special spec? We can help match the proper coating to the tool and task.</p>','1','facility-2.jpg','HIGH-SPEED CNC TURNING MACHINING CENTER','','','high-speed-cnc-turning-machining-center.html'),
(3,'CONV. MACHINING CENTER AND SURF. GRINDING','Our process production support with Conv. Machining center and surface grinding for high-speed cutting tools.','<p align=\"justify\">Our process production support with <b>High-Speed Conv. Machining Center and Surface Grinding</b>, aided by a fast machine production process can be more productive and produce <b>High-Quality</b>\r\n products and competitive, so that the products will be used by the \r\nclients does not doubt the quality, the following specifications of <b><b>Conv. </b> Machines</b> <b>and Surface Grinding</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM5 / STANDARD</td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 1000x450x450<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,015<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM4 / PHOEBUS<br></td><td align=\"center\"><p>Spindle Speed 1800 rpm, Travel: 775x400x400<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MAZAK<br></td><td align=\"center\"><p>Spindle Speed 2500 rpm, Travel: 775x400x401</p></td><td align=\"center\">60%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MV-11<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">RONG FU<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250</p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08</td></tr><tr><td align=\"center\">6.<br></td><td align=\"center\">CONV. TURNING MACHINE</td><td align=\"center\">COLCHESTER<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 200x600</p></td><td align=\"center\">80%<br></td><td align=\"center\">50.000<br></td><td align=\"center\">0,01</td></tr><tr><td align=\"center\">7.<br></td><td align=\"center\">SURFACE GRINDING<br></td><td align=\"center\">SG 2040 / STANDARD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x200x300</p></td><td align=\"center\">40%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,003</td></tr></tbody></table><p>With the guarantee of providing quality and tested products. <br></p>','1','facility-3.jpg','CONV. MILLING & TURNING MACHINING CENTER AND SURFACE GRINDING','','','conv.-machining-center-and-surf.-grinding.html'),
(4,'PRODUCTION WORKSHOP AND PARKING AREA','In the production workshop process, we use the total area: 380m2 to provide comfort and flexibility in the production process so that the productivity in the production process.','<p>In the production workshop process, we use the total area: 500m2 where: </p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Workshop</b><br></td><td align=\"center\"><b>Area</b><br></td></tr><tr><td align=\"center\"><b>1<br></b></td><td align=\"center\">CNC Workshop<br></td><td align=\"center\">154 m2<br></td></tr><tr><td align=\"center\"><b>2<br></b></td><td align=\"center\">Workshop Conventional<br></td><td align=\"center\">160 m2<br></td></tr><tr><td align=\"center\"><b>3<br></b></td><td align=\"center\">Car parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>4<br></b></td><td align=\"center\">Motorcycle parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>5<br></b></td><td align=\"center\">Others<br></td><td align=\"center\">66 m2<br></td></tr></tbody></table><p>To\r\n provide comfort and flexibility in the production process so that the \r\nproductivity in the production process goes well and facilitate the data\r\n collection and the placement of the production. for the sake of \r\nconvenience and safety at work, we established safety procedures to give\r\n a warning or lane line safety at work and we also write the symbols of \r\nsafety in the work, because safety is the main thing in the work.<br></p>','1','facility-4.jpg','PRODUCTION WORKSHOP AND PARKING AREA','','','production-workshop-and-parking-area.html'),
(5,'OFFICE AREA','In the work of asset management and all production data, we use an area of 70m2 located on the 2nd floor above the production area precisely at the top of the CNC Machine Center area.','<p>In the work of asset management and all production data, we use an area \r\nof 70m2 located on the 2nd floor above the production area precisely at \r\nthe top of the CNC Machine Center area. not only the staff in the \r\noffice, all the tool designers, toolmakers, CAD-CAM Engineering and \r\nProduction Planner are in the office, so the whole can coordinate \r\ndirectly.</p>','2','facility-5.jpg','OFFICE AREA','','','office-area.html'),
(6,'LAND AREA','We use an area of approximately 1,400 m2 of land area for all activities such as outdoor soccer court, gathering hall, ping pong sports area and mess area for students/college for an internship program.','<p>We use an area of approximately 1,400 m2 of land area for all activities\r\n such as outdoor soccer court, gathering hall, ping pong sports area and\r\n mess area for students/college for an internship program. We also \r\nprovide comfort to all employees and staff as a whole by providing large\r\n areas of green that can be comfortable after working.<br></p>','3','facility-6.jpg','LAND AREA','','','land-area.html');

/*Table structure for table `tbl_facility_category` */

DROP TABLE IF EXISTS `tbl_facility_category`;

CREATE TABLE `tbl_facility_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_facility_photo` */

insert  into `tbl_facility_photo`(`id`,`facility_id`,`photo`) values 
(2,2,'2.png'),
(3,2,'3.png'),
(4,1,'4.jpg'),
(5,2,'5.jpg'),
(6,3,'6.jpg'),
(7,4,'7.jpg'),
(8,5,'8.jpg'),
(9,6,'9.jpg');

/*Table structure for table `tbl_language` */

DROP TABLE IF EXISTS `tbl_language`;

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `eng` text NOT NULL,
  `idn` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

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
(9,'NEWS','News','Berita'),
(10,'CONTACT','Contact','Kontak'),
(11,'ADDRESS','Address','Alamat'),
(12,'CALL_US','Call Us','Hubungi Kami'),
(13,'WORKING_HOURS','Woring Hours','Jam Kerja'),
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
(39,'NO_RESULT_FOUND','No Result Found','Pencarian tidak ditemukan'),
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
(64,'COMPANY_PHONE','Company Phone','No.Telp Perusahaan'),
(65,'ELECTRONICS_DIVISION','Electronics Division','Divisi Elektronik'),
(66,'NEW_PRODUCT','New Product','Produk Baru'),
(67,'TESTIMONIAL_SAY','What a Client Say','Apa yang klien katakan '),
(68,'PRODUCT_HOME','Our Featured Products','Produk Unggulan Kami'),
(69,'OUR_PARTNER','Our Partner','Partner Kami'),
(70,'OUR_FUTURE_PRODUCT','Our Future Product','Produk Unggulan Kami\r\n'),
(71,'INSTITUTE','Institute / Company','Institut / Perusahaan'),
(72,'HAVE_A_MORE_QUETIONS','Have more questions? Just Contact Us','Punya pertanyaan lain? Hubungi Kami'),
(73,'PROFILE','Profile','Profil'),
(74,'STRUCTURE','Structure','Struktur'),
(75,'CULTURE','Values and Culture','Nilai dan Budaya'),
(76,'COMMITMENT','Quality commitment','Komitmen Mutu'),
(77,'VISION_MISION','Vision & Mission','Visi & Misi'),
(78,'PROFILE_IDENTITY','Company Identity','Identitas Perusahaan'),
(79,'STRUCTURE_ORGANIZATION','Structure Organization','Struktur Organisasi'),
(80,'VISION_AND_MISSION','Vision & Mission','Visi & Misi'),
(81,'ABOUT_COMPANY','About Company Us','Tentang Perusahaan Kami');

/*Table structure for table `tbl_news` */

DROP TABLE IF EXISTS `tbl_news`;

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `news_content` text NOT NULL,
  `news_short_content` text NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_news` */

insert  into `tbl_news`(`news_id`,`news_title`,`slug`,`news_content`,`news_short_content`,`news_date`,`photo`,`slug_news_category`,`total_view`,`comment`,`meta_title`,`meta_keyword`,`meta_description`,`user_update`,`post_slug`) values 
(1,'Open Recruitment Agust 2019','col-page col-sm-8 col-md-6','<p>Open Recruitment new employee\'s CV. Cipta Sinergi Manufacturing on Agust 2019, The requirements are as follows:</p><p><b>Criteria :</b></p><ol><li>Matching CAM design with 5 axis CNC machines for optimal.</li><li>Making CAM designs.</li><li>Able to work in teams and individually.</li></ol><p><b>Qualification<b> :</b></b></p><ol><li><span class=\"tlid-translation translation\" lang=\"en\"><span title=\"\" class=\"\">Max age</span> <span title=\"\" class=\"\">35 years old, physically and mentally healthy</span></span></li><li>Having experience in the field of Programmer (CNC) ± 2 years specialized in Manufacturing Dies and CF</li><li>Experience using Mastercam & Powermill / other CAM design software</li><li>Experienced using a 5 axis CNC machine</li><li>Mastering 3D & 2D concepts</li><li>Able to work well together and good communication</li></ol><b>If you are personally we needed, please apply for an application to participate in the selection stage.<br>HRD Section</b><p><b><b>CV. Cipta Sinergi Manufacturing</b></b></p><p><b><b>Jl. Kamarung No. 88b RT/RW 004/004 Citeureup Kec. Cimahi Utara, Jawa Barat 40512<br></b></b></p>','Open Recruitment new employee\'s CV. Cipta Sinergi Manufacturing on Agust 2019.','Wed, 28-Aug-2019','news-1.jpg','career.html',19,'On','Open Recruitment Agust 2019','','','hrd','open-recruitment-agust-2019.html');

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
(5,'Announcement','Announcement','','','announcement.html'),
(7,'Career','Career','','','career.html'),
(8,'Event','Event','','','event.html');

/*Table structure for table `tbl_page` */

DROP TABLE IF EXISTS `tbl_page`;

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mt_home` varchar(255) NOT NULL,
  `mk_home` text NOT NULL,
  `md_home` text NOT NULL,
  `about_photo` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `profile_content` text NOT NULL,
  `culture_content` text NOT NULL,
  `quality_content` text NOT NULL,
  `structure_photo` varchar(255) NOT NULL,
  `mission_heading` varchar(255) NOT NULL,
  `mission_content` text NOT NULL,
  `vision_heading` varchar(255) NOT NULL,
  `vision_content` text NOT NULL,
  `mt_about` varchar(255) NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL,
  `mt_gallery` varchar(255) NOT NULL,
  `mk_gallery` text NOT NULL,
  `md_gallery` text NOT NULL,
  `mt_product` varchar(255) NOT NULL,
  `mk_product` text NOT NULL,
  `md_product` text NOT NULL,
  `mt_service` varchar(255) NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL,
  `mt_facility` varchar(255) NOT NULL,
  `mk_facility` text NOT NULL,
  `md_facility` text NOT NULL,
  `mt_portfolio` varchar(255) NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL,
  `mt_testimonial` varchar(255) NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL,
  `mt_news` varchar(255) NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL,
  `mt_contact` varchar(255) NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL,
  `mt_search` varchar(255) NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL,
  `term_content` text NOT NULL,
  `mt_term` varchar(255) NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL,
  `privacy_content` text NOT NULL,
  `mt_privacy` varchar(255) NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL,
  `mt_carrier` varchar(255) NOT NULL,
  `mk_carrier` text NOT NULL,
  `md_carrier` text NOT NULL,
  `mt_electronics_division` varchar(255) NOT NULL,
  `mk_electronics_division` text NOT NULL,
  `md_electronics_division` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_page` */

insert  into `tbl_page`(`id`,`mt_home`,`mk_home`,`md_home`,`about_photo`,`about_content`,`profile_content`,`culture_content`,`quality_content`,`structure_photo`,`mission_heading`,`mission_content`,`vision_heading`,`vision_content`,`mt_about`,`mk_about`,`md_about`,`mt_gallery`,`mk_gallery`,`md_gallery`,`mt_product`,`mk_product`,`md_product`,`mt_service`,`mk_service`,`md_service`,`mt_facility`,`mk_facility`,`md_facility`,`mt_portfolio`,`mk_portfolio`,`md_portfolio`,`mt_testimonial`,`mk_testimonial`,`md_testimonial`,`mt_news`,`mk_news`,`md_news`,`mt_contact`,`mk_contact`,`md_contact`,`mt_search`,`mk_search`,`md_search`,`term_content`,`mt_term`,`mk_term`,`md_term`,`privacy_content`,`mt_privacy`,`mk_privacy`,`md_privacy`,`mt_carrier`,`mk_carrier`,`md_carrier`,`mt_electronics_division`,`mk_electronics_division`,`md_electronics_division`) values 
(1,' | CV. Cipta Sinergi Manufacturing','','','about_photo.png','<h4>Indonesia :<br></h4><p>Perusahaan yang bergerak di bidang <b>manufaktur</b> untuk mesin yang diperlukan Industri. Didukung oleh <b>Tools Designer, Tools Maker, CAD CAM Engineering, CAD Modeler, CAM Programmer</b> dan<b> Production Planner</b> yang berpengalaman serta didukung oleh Peralatan yang cukup lengkap dan pemrosesan yang cepat didukung oleh mesin yang mempunyai title <b>High Speed Machine Processing</b> dan menghasilkan produk yang sangat berkualitas.</p><h4>English :</h4><p>Companies engaged in <b>manufacturing</b> for machines that are needed by industry. Supported by <b>Tools Designer, Tools Maker</b>, <b>CAD-CAM Engineering, CAM Programmer</b> and <b>Production Planner</b> who are experienced and supported by fairly complete equipment and fast processing supported by machines that have the title <b>High-Speed Machine Processing</b> and produce very high-quality products.<br></p>','<table><tbody><tr><td><b>Office & Workshop<br></b></td><td><b>:</b> Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512</td></tr><tr><td><b>Phone/Fax<br></b></td><td><b>:</b> (022) 6647945</td></tr><tr><td><b>Website<br></b></td><td><b>:</b> www.ciptasinergi.com</td></tr><tr><td><b>E-Mail<br></b></td><td><b>:</b> marketing@ciptasinergi.com</td></tr><tr><td><b>Date of Established<br></b></td><td><b>:</b> Juni 1997</td></tr><tr><td><b>Legal Form<br></b></td><td><b>:</b> CV (Commanditer Venootschap) No. 5 Tanggal 24 Juli 2003</td></tr><tr><td><b>Number of workers</b></td><td><b>:</b> 30 Orang</td>  </tr></tbody>\r\n</table>','<ol><li>Memanusiakan Manusia (<i>Treat people as subject</i>)</li><li>Kepatutan dan kebenaran (<i>Fairness & Honesty</i>)</li><li>Menjadi tim yang tangguh (<i>Be a super team</i>)</li><li>Berjuang mencapai yang terbaik (<i>Strive to the best</i>)</li><li>Menjadi organisasi pembelajaran (<i>Be a learning organization</i>)</li><li>Kemitraan yang saling memberi manfaat (<i>Beneficial partnership</i>)</li><li>Bersyukur (<i>Gratiture</i>)<br></li></ol>','<p>Kami segenap karyawan CV. Cipta Sinergi Manufacturing beromitmen untuk terus memenuhi dan melampaui harapan pelanggan dengan menyediakan produk yang bermutu tinggi dalam hal kehandalan, keamanan dan keselasaman, akurasi dan ketepatan waktu, serta menjaga kerahasian data pelanggan. keherhasilan kami didasarkan pada kesinambungan perbaikan efektifitas produk, proses dan sistem manajemen mutu.<br></p>','structure_photo.png','Misi','Menghasilkan produk permesinan berkualitas dan tepat waktu disertai layanan yang baik untuk mencapai kepuasan pelanggan dan hubungan yang berkelanjutan. Mewujudkan kualitas kehidupan stakholder yang baik. Meningkatkan shareholder values secara terus menerus','Visi','Menjadi indusrti permesinan presisi yang menguasai teknologi manufaktur terbaru dan memiliki kemampuan yang baik dalam disain dan rekayasa. Didukung oleh sistem manufaktur yang handal, sehingga mampu menghasilkan produk berupa komponen presisi, cetakan dan sistem makanik yang memberikan kepuasan kepada pelanggan',' | CV. Cipta Sinergi Manufacturing',' ','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','','','<h2><strong>Terms and Conditions</strong></h2>\r\n\r\n<p>Welcome to CV. Cipta Sinergi Manufacturing!</p>\r\n\r\n<p>These terms and conditions outline the rules and regulations for the use of CV. Cipta Sinergi Manufacturing\'s Website, located at www.ciptasinergi.com.</p>\r\n\r\n<p>By accessing this website we assume you accept these terms and conditions. Do not continue to use CV. Cipta Sinergi Manufacturing if you do not agree to take all of the terms and conditions stated on this page.</p>\r\n\r\n<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: \"Client\", \"You\" and \"Your\" refers to you, the person log on this website and compliant to the Company’s terms and conditions. \"The Company\", \"Ourselves\", \"We\", \"Our\" and \"Us\", refers to our Company. \"Party\", \"Parties\", or \"Us\", refers to both the Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>\r\n\r\n<h3><strong>Cookies</strong></h3>\r\n\r\n<p>We employ the use of cookies. By accessing CV. Cipta Sinergi Manufacturing, you agreed to use cookies in agreement with the CV. Cipta Sinergi Manufacturing\'s Privacy Policy.</p>\r\n\r\n<p>Most interactive websites use cookies to let us retrieve the user’s details for each visit. Cookies are used by our website to enable the functionality of certain areas to make it easier for people visiting our website. Some of our affiliate/advertising partners may also use cookies.</p>\r\n\r\n<h3><strong>License</strong></h3>\r\n\r\n<p>Unless otherwise stated, CV. Cipta Sinergi Manufacturing and/or its licensors own the intellectual property rights for all material on CV. Cipta Sinergi Manufacturing. All intellectual property rights are reserved. You may access this from CV. Cipta Sinergi Manufacturing for your own personal use subject to restrictions set in these terms and conditions.</p>\r\n\r\n<p>You must not:</p>\r\n<ul>\r\n    <li>Republish material from CV. Cipta Sinergi Manufacturing</li>\r\n    <li>Sell, rent or sub-license material from CV. Cipta Sinergi Manufacturing</li>\r\n    <li>Reproduce, duplicate or copy material from CV. Cipta Sinergi Manufacturing</li>\r\n    <li>Redistribute content from CV. Cipta Sinergi Manufacturing</li>\r\n</ul>\r\n\r\n<p>This Agreement shall begin on the date hereof.</p>\r\n\r\n<p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. CV. Cipta Sinergi Manufacturing does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not reflect the views and opinions of CV. Cipta Sinergi Manufacturing,its agents and/or affiliates. Comments reflect the views and opinions of the person who post their views and opinions. To the extent permitted by applicable laws, CV. Cipta Sinergi Manufacturing shall not be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or posting of and/or appearance of the Comments on this website.</p>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, offensive or causes breach of these Terms and Conditions.</p>\r\n\r\n<p>You warrant and represent that:</p>\r\n\r\n<ul>\r\n    <li>You are entitled to post the Comments on our website and have all necessary licenses and consents to do so;</li>\r\n    <li>The Comments do not invade any intellectual property right, including without limitation copyright, patent or trademark of any third party;</li>\r\n    <li>The Comments do not contain any defamatory, libelous, offensive, indecent or otherwise unlawful material which is an invasion of privacy</li>\r\n    <li>The Comments will not be used to solicit or promote business or custom or present commercial activities or unlawful activity.</li>\r\n</ul>\r\n\r\n<p>You hereby grant CV. Cipta Sinergi Manufacturing a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and edit any of your Comments in any and all forms, formats or media.</p>\r\n\r\n<h3><strong>Hyperlinking to our Content</strong></h3>\r\n\r\n<p>The following organizations may link to our Website without prior written approval:</p>\r\n\r\n<ul>\r\n    <li>Government agencies;</li>\r\n    <li>Search engines;</li>\r\n    <li>News organizations;</li>\r\n    <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed businesses; and</li>\r\n    <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising groups which may not hyperlink to our Web site.</li>\r\n</ul>\r\n\r\n<p>These organizations may link to our home page, to publications or to other Website information so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products and/or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>We may consider and approve other link requests from the following types of organizations:</p>\r\n\r\n<ul>\r\n    <li>commonly-known consumer and/or business information sources;</li>\r\n    <li>dot.com community sites;</li>\r\n    <li>associations or other groups representing charities;</li>\r\n    <li>online directory distributors;</li>\r\n    <li>internet portals;</li>\r\n    <li>accounting, law and consulting firms; and</li>\r\n    <li>educational institutions and trade associations.</li>\r\n</ul>\r\n\r\n<p>We will approve link requests from these organizations if we decide that: (a) the link would not make us look unfavorably to ourselves or to our accredited businesses; (b) the organization does not have any negative records with us; (c) the benefit to us from the visibility of the hyperlink compensates the absence of CV. Cipta Sinergi Manufacturing; and (d) the link is in the context of general resource information.</p>\r\n\r\n<p>These organizations may link to our home page so long as the link: (a) is not in any way deceptive; (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and (c) fits within the context of the linking party’s site.</p>\r\n\r\n<p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform us by sending an e-mail to CV. Cipta Sinergi Manufacturing. Please include your name, your organization name, contact information as well as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to which you would like to link. Wait 2-3 weeks for a response.</p>\r\n\r\n<p>Approved organizations may hyperlink to our Website as follows:</p>\r\n\r\n<ul>\r\n    <li>By use of our corporate name; or</li>\r\n    <li>By use of the uniform resource locator being linked to; or</li>\r\n    <li>By use of any other description of our Website being linked to that makes sense within the context and format of content on the linking party’s site.</li>\r\n</ul>\r\n\r\n<p>No use of CV. Cipta Sinergi Manufacturing\'s logo or other artwork will be allowed for linking absent a trademark license agreement.</p>\r\n\r\n<h3><strong>iFrames</strong></h3>\r\n\r\n<p>Without prior approval and written permission, you may not create frames around our Webpages that alter in any way the visual presentation or appearance of our Website.</p>\r\n\r\n<h3><strong>Content Liability</strong></h3>\r\n\r\n<p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>\r\n\r\n<h3><strong>Your Privacy</strong></h3>\r\n\r\n<p>Please read Privacy Policy</p>\r\n\r\n<h3><strong>Reservation of Rights</strong></h3>\r\n\r\n<p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>\r\n\r\n<h3><strong>Removal of links from our website</strong></h3>\r\n\r\n<p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>\r\n\r\n<p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we promise to ensure that the website remains available or that the material on the website is kept up to date.</p>\r\n\r\n<h3><strong>Disclaimer</strong></h3>\r\n\r\n<p>To the maximum extent permitted by applicable law, we exclude all representations, warranties and conditions relating to our website and the use of this website. Nothing in this disclaimer will:</p>\r\n\r\n<ul>\r\n    <li>limit or exclude our or your liability for death or personal injury;</li>\r\n    <li>limit or exclude our or your liability for fraud or fraudulent misrepresentation;</li>\r\n    <li>limit any of our or your liabilities in any way that is not permitted under applicable law; or</li>\r\n    <li>exclude any of our or your liabilities that may not be excluded under applicable law.</li>\r\n</ul>\r\n\r\n<p>The limitations and prohibitions of liability set in this Section and elsewhere in this disclaimer: (a) are subject to the preceding paragraph; and (b) govern all liabilities arising under the disclaimer, including liabilities arising in contract, in tort and for breach of statutory duty.</p>\r\n\r\n<p>As long as the website and the information and services on the website are provided free of charge, we will not be liable for any loss or damage of any nature.</p>',' | CV. Cipta Sinergi Manufacturing','','','<h1>Privacy Policy for CV. Cipta Sinergi Manufacturing</h1>\r\n\r\n<p>At CV. Cipta Sinergi Manufacturing, accessible from www.ciptasinergi.com, one of our main priorities is the privacy of our visitors. This Privacy Policy document contains types of information that is collected and recorded by CV. Cipta Sinergi Manufacturing and how we use it.</p>\r\n\r\n<p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us through email at encep.suryanajr@gmail.com</p>\r\n\r\n<h2>Log Files</h2>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing follows a standard procedure of using log files. These files log visitors when they visit websites. All hosting companies do this and a part of hosting services\' analytics. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of the information is for analyzing trends, administering the site, tracking users\' movement on the website, and gathering demographic information.</p>\r\n\r\n<h2>Cookies and Web Beacons</h2>\r\n\r\n<p>Like any other website, CV. Cipta Sinergi Manufacturing uses \'cookies\'. These cookies are used to store information including visitors\' preferences, and the pages on the website that the visitor accessed or visited. The information is used to optimize the users\' experience by customizing our web page content based on visitors\' browser type and/or other information.</p>\r\n\r\n\r\n\r\n<h2>Privacy Policies</h2>\r\n\r\n<P>You may consult this list to find the Privacy Policy for each of the advertising partners of CV. Cipta Sinergi Manufacturing. Our Privacy Policy was created with the help of the <a href=\"https://www.privacypolicygenerator.info\">Privacy Policy Generator</a>.</p>\r\n\r\n<p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on CV. Cipta Sinergi Manufacturing, which are sent directly to users\' browser. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see on websites that you visit.</p>\r\n\r\n<p>Note that CV. Cipta Sinergi Manufacturing has no access to or control over these cookies that are used by third-party advertisers.</p>\r\n\r\n<h2>Third Party Privacy Policies</h2>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing\'s Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options. You may find a complete list of these Privacy Policies and their links here: Privacy Policy Links.</p>\r\n\r\n<p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers\' respective websites. What Are Cookies?</p>\r\n\r\n<h2>Children\'s Information</h2>\r\n\r\n<p>Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.</p>\r\n\r\n<p>CV. Cipta Sinergi Manufacturing does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>\r\n\r\n<h2>Online Privacy Policy Only</h2>\r\n\r\n<p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information that they shared and/or collect in CV. Cipta Sinergi Manufacturing. This policy is not applicable to any information collected offline or via channels other than this website.</p>\r\n\r\n<h2>Consent</h2>\r\n\r\n<p>By using our website, you hereby consent to our Privacy Policy and agree to its Terms and Conditions.</p>',' | CV. Cipta Sinergi Manufacturing','','',' | CV. Cipta Sinergi Manufacturing','Open Recruitment, Career CSM, PKL CSM, Magang, Praktek Kerja Lapangan CSM Cimahi. Karier CSM','','Electronics Division | CV. Cipta Sinergi Manufacturing','','');

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
  `photo_style` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `photo_desc` text NOT NULL,
  `photo_show_home` varchar(10) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_photo` */

insert  into `tbl_photo`(`photo_id`,`photo_caption`,`photo_style`,`photo_name`,`photo_desc`,`photo_show_home`) values 
(1,'Touring Ciletuh 2017','col-sm-6 col-xs-6 box','photo-1.jpg','Foto Bersama dibukit pinggir pantai Ciletuh - Sukabumi dalam acara touring karyawan CV. Cipta Sinergi Manufacturing tahun 2017','Yes'),
(2,'Kebersamaan di Ciletuh 2017','col-sm-3 col-xs-6 box','photo-2.jpg','Istirahat sejenak sebelum melanjutkan perjalanan ke Ciletuh - Sukabumi dalam acara Touring Karyawan CV. Cipta Sinergi Manufacturing 2017','Yes'),
(4,'Pameran Manufaktur 2018','col-sm-3 col-xs-6 box','photo-4.jpg','Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','Yes'),
(5,'Pameran Manufaktur 2018 (2)','col-sm-3 col-xs-6 box','photo-5.jpg','Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','Yes'),
(6,'Pameran Manufaktur 2018 (3)','col-sm-6 col-xs-6 box','photo-6.jpg','Team yang menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','Yes'),
(7,'Pameran Manufaktur 2018 (4)','col-sm-3 col-xs-6 box','photo-7.jpg','Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta','Yes'),
(8,'Touring Pangandaran 2018','col-sm-6 col-xs-6 box','photo-8.jpg','Foto bersama di halaman CV. Cipta Sinergi Manufacturing sebelum berangkat ke pantai Pangandaran dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing 2018','Yes'),
(9,'Touring Pangandaran 2018 (2)','col-sm-3 col-xs-6 box','photo-9.jpg','Kegiatan saat Touring ke Pantai Pangandaran dalam acra Touring Karyawan CV. Cipta Sinergi Manufacturing 2018','Yes'),
(10,'Touring Pangandaran 2018 (3)','col-sm-3 col-xs-6 box','photo-10.jpg','Kegiatan bersama karyawan CV. Cipta Sinergi Manufacturing dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing ke Pangandaran 2018','Yes'),
(11,'Touring Pangandaran 2018 (4)','col-sm-6 col-xs-6 box','photo-11.jpg','Foto bersama karyawan CV. Cipta Sinergi Manufacturing di pantai Pangandaran dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing 2018','Yes'),
(12,'Idul Adha 2019','col-sm-3 col-xs-6 box','photo-12.jpg','Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','Yes'),
(13,'Idul Adha 2019 (2)','col-sm-3 col-xs-6 box','photo-13.jpg','Pemotongan Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','Yes'),
(14,'Idul Adha 2019 (3)','col-sm-3 col-xs-6 box','photo-14.jpg','Prosesn Pemotongan Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','Yes'),
(15,'Idul Adha 2019 (4)','col-sm-3 col-xs-6 box','photo-15.jpg','Proses Pengolahan dan pemotongan daging sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','Yes'),
(16,'Idul Adha 2019 (5)','col-sm-6 col-xs-6 box','photo-16.jpg','Proses pembagian daging sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing','Yes'),
(17,'Not just a team, it\'s SQUAD','col-sm-6 col-xs-6 box','photo-17.jpeg','Not just a team, it\'s SQUAD','Yes'),
(18,'Manufacturing is dancing','col-sm-3 col-xs-6 box','photo-18.jpeg','Manufacturing is dancing','Yes'),
(19,'Penghormatan Bendera Merah Putih','col-sm-3 col-xs-6 box','photo-19.jpeg','Penghormatan Bendera Merah Putih','Yes'),
(20,'Family Gathering','col-sm-6 col-xs-6 box','photo-20.jpeg','Family Gathering','Yes'),
(21,'Family Gathering','col-sm-6 col-xs-6 box','photo-21.jpeg','Family Gathering','Yes'),
(22,'Family Gathering','col-sm-3 col-xs-6 box','photo-22.jpeg','Family Gathering','Yes'),
(23,'Family Gathering','col-sm-6 col-xs-6 box','photo-23.jpeg','Family Gathering','Yes'),
(24,'Family Gathering','col-sm-3 col-xs-6 box','photo-24.jpeg','Family Gathering','Yes');

/*Table structure for table `tbl_portfolio` */

DROP TABLE IF EXISTS `tbl_portfolio`;

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_portfolio` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_portfolio` */

insert  into `tbl_portfolio`(`id`,`name`,`short_content`,`content`,`category_id`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_portfolio`) values 
(1,'FOOD BEVERAGE','In the production process not only made industrial equipment, but the entirety of the customer demand is definitely there.','In the production process not only made industrial equipment, but the entirety of the customer demand is definitely there. of the completeness of the manufacturing infrastructure of food, mold and other requirements we are ready to serve','1','portfolio-1.jpg','FOOD BEVERAGE','','','food-beverage.html'),
(2,'AUTOMOTIVE','Our production process has always relied on customer satisfaction, and where all the requests of customers we serve, as well as in the manufacture of parts or the whole of the automotive','Our production process has always relied on customer satisfaction, and where all the requests of customers we serve, as well as in the manufacture of automotive parts or in whole. ranging from the mold and the material basis of our own manufacture of ready made','1','portfolio-2.jpg','AUTOMOTIVE','','','automotive.html'),
(3,'MECHANICAL SYSTEM OF RADAR','Not just rely on the industry and we are also ready to assist the government and in the defense and security of the country.','Not just rely on the industry and we are also ready to assist the government and in the defense and security of the country. to assist in making the national radar, we are ready to strengthen the resilience and security of the country.','2','portfolio-3.jpg','MECHANICAL SYSTEM OF RADAR','','','mechanical-system-of-radar.html'),
(4,'COCKPIT SIMULATOR','Improving our service also makes a Head-Up Display (HUD) for the purposes of the cockpit Casing simulator.','Improving our service also makes a Head-Up Display (HUD) for the purposes of the cockpit Casing simulator.','3','portfolio-4.jpg','COCKPIT SIMULATOR','','','cockpit-simulator.html'),
(5,'RADAR DISPLAY UNIT CASING','Improving our service also makes Radar Display Unit (RDU) Casing for the purposes of cockpit simulator','in improving our service also makes Radar Display Unit (RDU) Casing for the purposes of cockpit simulator','3','portfolio-5.jpg','RADAR DISPLAY UNIT CASING','','','radar-display-unit-casing.html');

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
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_portfolio_photo` */

insert  into `tbl_portfolio_photo`(`id`,`portfolio_id`,`photo`) values 
(17,1,'17.jpg'),
(18,1,'18.jpg'),
(19,2,'19.jpg'),
(20,2,'20.jpg'),
(21,2,'21.jpg'),
(22,2,'22.jpg'),
(23,3,'23.jpg'),
(24,3,'24.jpg'),
(25,3,'25.jpg'),
(26,4,'26.jpg'),
(27,4,'27.jpg'),
(28,5,'28.jpg');

/*Table structure for table `tbl_product` */

DROP TABLE IF EXISTS `tbl_product`;

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_caption` varchar(255) NOT NULL,
  `product_style` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_show_home` varchar(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_product` */

insert  into `tbl_product`(`product_id`,`product_caption`,`product_style`,`product_name`,`product_desc`,`product_show_home`) values 
(1,'Air Nozzle Boiler','col-sm-3 col-xs-6 box','product-1.jpg','Air Nozzle Boiler','Yes'),
(2,'Air Nozzle for Boiler','col-sm-3 col-xs-6 box','product-2.jpg','Air Nozzle for Boiler','Yes'),
(3,'Arm Machining Part','col-sm-6 col-xs-6 box','product-3.jpg','Arm Machining Part','Yes'),
(4,'Aviation Modul Part assy','col-sm-6 col-xs-6 box','product-4.jpg','Aviation Modul Part assy','Yes'),
(5,'Bal Valve','col-sm-3 col-xs-6 box','product-5.jpg','Bal Valve','Yes'),
(6,'Ball Valve - Up','col-sm-3 col-xs-6 box','product-6.jpg','Ball Valve - Up','Yes'),
(7,'BOTTLE YAMALUBE 600ML BLOW MOLD','col-sm-3 col-xs-6 box','product-7.jpg','BOTTLE YAMALUBE 600ML BLOW MOLD','Yes'),
(8,'Cam machining','col-sm-3 col-xs-6 box','product-8.jpg','Cam machining','Yes'),
(9,'Can Scroll Cutter set','col-sm-6 col-xs-6 box','product-9.jpg','Can Scroll Cutter set','Yes'),
(10,'Car Wheel Cavity Mold AHT','col-sm-3 col-xs-6 box','product-10.jpg','Car Wheel Cavity Mold AHT','Yes'),
(11,'Car Wheel Cavity Mold with Insert Core Cavity','col-sm-3 col-xs-6 box','product-11.jpg','Car Wheel Cavity Mold with Insert Core Cavity','Yes'),
(12,'Car Wheel Cavity Mold','col-sm-6 col-xs-6 box','product-12.jpg','Car Wheel Cavity Mold','Yes'),
(13,'Casting Mold Cavity','col-sm-3 col-xs-6 box','product-13.jpg','Casting Mold Cavity','Yes'),
(14,'Casting Sand Core Mold','col-sm-6 col-xs-6 box','product-14.jpg','Casting Sand Core Mold','Yes'),
(15,'Cavity CNC Machining Part','col-sm-3 col-xs-6 box','product-15.jpg','Cavity CNC Machining Part','Yes'),
(16,'Cavity for Casting Sand Core','col-sm-3 col-xs-6 box','product-16.jpg','Cavity for Casting Sand Core','Yes'),
(17,'Cavity for Casting Sand Core-1','col-sm-3 col-xs-6 box','product-17.jpg','Cavity for Casting Sand Core-1','Yes'),
(18,'Cavity for Casting Sand Core-2','col-sm-6 col-xs-6 box','product-18.jpg','Cavity for Casting Sand Core-2','Yes'),
(19,'Cockpit Module Case','col-sm-3 col-xs-6 box','product-19.jpg','Cockpit Module Case','Yes'),
(20,'Cockpit Module Case - rear','col-sm-3 col-xs-6 box','product-20.jpg','Cockpit Module Case - rear','Yes'),
(21,'Feeder Conveyor Unit','col-sm-6 col-xs-6 box','product-21.jpg','Feeder Conveyor Unit','Yes'),
(22,'Food Processing Part - Mold Plate','col-sm-3 col-xs-6 box','product-22.jpg','Food Processing Part - Mold Plate','Yes'),
(23,'Food Processing Part - Steel Mold Plate','col-sm-3 col-xs-6 box','product-23.jpg','Food Processing Part - Steel Mold Plate','Yes'),
(24,'Horn Antena Radar - Front','col-sm-3 col-xs-6 box','product-24.jpg','Horn Antena Radar - Front','Yes'),
(25,'Horn Antena Radar - Upper','col-sm-3 col-xs-6 box','product-25.jpg','Horn Antena Radar - Upper','Yes'),
(26,'Housing Pump','col-sm-6 col-xs-6 box','product-26.jpg','Housing Pump','Yes'),
(27,'Individual Feeder System','col-sm-6 col-xs-6 box','product-27.jpg','Individual Feeder System','Yes'),
(28,'Jig For Machining Process','col-sm-3 col-xs-6 box','product-28.jpg','Jig For Machining Process','Yes'),
(29,'Lot Mark Holder SA25&#5 PAKO Karwheel - Closer','col-sm-3 col-xs-6 box','product-29.jpg','Lot Mark Holder SA25&#5 PAKO Karwheel - Closer','Yes'),
(30,'Lot Mark Holder SA25&#5 PAKO Karwheel','col-sm-3 col-xs-6 box','product-30.jpg','Lot Mark Holder SA25&#5 PAKO Karwheel','Yes'),
(31,'Lot Mark Koja FR#7 PAKO Motorcycle M6 - Closer','col-sm-3 col-xs-6 box','product-31.jpg','Lot Mark Koja FR#7 PAKO Motorcycle M6 - Closer','Yes'),
(32,'Lot Mark Koja FR#7 PAKO Motorcycle M6','col-sm-6 col-xs-6 box','product-32.jpg','Lot Mark Koja FR#7 PAKO Motorcycle M6','Yes'),
(33,'MDM Food Processing Part','col-sm-3 col-xs-6 box','product-33.jpg','MDM Food Processing Part','Yes'),
(34,'MDM Food Processing Part-Blade','col-sm-3 col-xs-6 box','product-34.jpg','MDM Food Processing Part-Blade','Yes'),
(35,'MDM Food Processing Part-Filter','col-sm-3 col-xs-6 box','product-35.jpg','MDM Food Processing Part-Filter','Yes'),
(36,'Plastic Mold Set','col-sm-3 col-xs-6 box','product-36.jpg','Plastic Mold Set','Yes'),
(37,'Pump Lube Part - with wear plate','col-sm-6 col-xs-6 box','product-37.jpg','Pump Lube Part - with wear plate','Yes'),
(38,'Pump Lube Part','col-sm-3 col-xs-6 box','product-38.jpg','Pump Lube Part','Yes'),
(39,'Pump Part - Lube','col-sm-3 col-xs-6 box','product-39.jpg','Pump Part - Lube','Yes'),
(40,'Pump Part - Metering gear','col-sm-6 col-xs-6 box','product-40.jpg','Pump Part - Metering gear','Yes'),
(41,'Radar Component','col-sm-3 col-xs-6 box','product-41.jpg','Radar Component','Yes'),
(42,'Radar Component Rear','col-sm-3 col-xs-6 box','product-42.jpg','Radar Component Rear','Yes'),
(43,'Radar Component Closer','col-sm-3 col-xs-6 box','product-43.jpg','Radar Component Closer','Yes'),
(44,'ROLLER POM BLACK','col-sm-3 col-xs-6 box','product-44.jpg','ROLLER POM BLACK','Yes'),
(45,'ROTARY CLEANER MACHINE','col-sm-3 col-xs-6 box','product-45.jpg','ROTARY CLEANER MACHINE','Yes'),
(46,'Rotary Forming Part - Plunger','col-sm-6 col-xs-6 box','product-46.jpg','Rotary Forming Part - Plunger','Yes'),
(47,'Rotary Table','col-sm-3 col-xs-6 box','product-47.jpg','Rotary Table','Yes'),
(48,'Rotary Table - Rear','col-sm-3 col-xs-6 box','product-48.jpg','Rotary Table - Rear','Yes'),
(49,'Rotary Table - Closer','col-sm-3 col-xs-6 box','product-49.jpg','Rotary Table - Closer','Yes'),
(50,'SHAFT PN 7 Bearing Housing','col-sm-6 col-xs-6 box','product-50.jpg','SHAFT PN 7 Bearing Housing','Yes'),
(51,'SHAFT PN 7 Bearing Housing - Closer rear','col-sm-3 col-xs-6 box','product-51.jpg','SHAFT PN 7 Bearing Housing - Closer rear','Yes'),
(52,'SHAFT PN 7 Bearing Housing - Closer rear','col-sm-3 col-xs-6 box','product-52.jpg','SHAFT PN 7 Bearing Housing - Closer rear','Yes'),
(53,'Short Plunger Eclair','col-sm-6 col-xs-6 box','product-53.jpg','Short Plunger Eclair','Yes'),
(54,'Short Plunger Eclair - Closer','col-sm-3 col-xs-6 box','product-54.jpg','Short Plunger Eclair - Closer','Yes'),
(55,'Side Conveyor','col-sm-3 col-xs-6 box','product-55.jpg','Side Conveyor','Yes'),
(56,'Side Conveyor - Rear','col-sm-3 col-xs-6 box','product-56.jpg','Side Conveyor - Rear','Yes'),
(57,'Slab Blind Bottling Marble Beat','col-sm-3 col-xs-6 box','product-57.jpg','Slab Blind Bottling Marble Beat','Yes'),
(58,'Slab Blind Bottling Marble Beat - Closer','col-sm-6 col-xs-6 box','product-58.jpg','Slab Blind Bottling Marble Beat - Closer','Yes'),
(59,'Slab Blind Bottling Marble Beat - Closer-1','col-sm-6 col-xs-6 box','product-59.jpg','Slab Blind Bottling Marble Beat - Closer-1','Yes'),
(60,'Slab Bottle in Line3x7 Marbel Beat','col-sm-3 col-xs-6 box','product-60.jpg','Slab Bottle in Line3x7 Marbel Beat','Yes'),
(61,'Slab Bottle in Line3x7 Marbel Beat - Closer','col-sm-3 col-xs-6 box','product-61.jpg','Slab Bottle in Line3x7 Marbel Beat - Closer','Yes'),
(62,'SPRAY BOTTLE 500ML BLOW MOLD','col-sm-6 col-xs-6 box','product-62.jpg','SPRAY BOTTLE 500ML BLOW MOLD','Yes'),
(63,'Transfer Pump','col-sm-3 col-xs-6 box','product-63.jpg','Transfer Pump','Yes'),
(64,'Turbine Impeller assy','col-sm-3 col-xs-6 box','product-64.jpg','Turbine Impeller assy','Yes'),
(65,'Turbine Impeller','col-sm-6 col-xs-6 box','product-65.jpg','Turbine Impeller','Yes'),
(66,'Electronic Support Measures (ESM) - Without Cover','col-sm-3 col-xs-6 box','product-66.jpg','ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.','Yes'),
(67,'Electronic Support Measures (ESM) - With Cover','col-sm-3 col-xs-6 box','product-67.jpg','ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.','Yes'),
(68,'Electronic Support Measures (ESM)','col-sm-6 col-xs-6 box','product-68.jpg','ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.','Yes'),
(69,'Knife Pocket - Upper','col-sm-6 col-xs-6 box','product-69.jpg','Knife Pocket - Upper','Yes'),
(70,'Knife Pocket - side by side','col-sm-3 col-xs-6 box','product-70.jpg','Knife Pocket - side by side','Yes'),
(71,'Knife Pocket - Side','col-sm-3 col-xs-6 box','product-71.jpg','Knife Pocket - Side','Yes'),
(72,'Knife Pocket - Other Side','col-sm-6 col-xs-6 box','product-72.jpg','Knife Pocket - Other Side','Yes'),
(74,'K15GRR Upper Insert','col-sm-3 col-xs-6 box','product-74.jpg','K15GRR Upper Insert','Yes'),
(75,'K15GRR Upper Insert - Side','col-sm-3 col-xs-6 box','product-75.jpg','K15GRR Upper Insert - Side','Yes'),
(76,'Tip Capper Cordial white cap sealer','col-sm-6 col-xs-6 box','product-76.jpg','Tip Capper Cordial white cap sealer','Yes'),
(77,'Tip Capper Cordial white cap sealer - Side','col-sm-3 col-xs-6 box','product-77.jpg','Tip Capper Cordial white cap sealer - Side','Yes'),
(78,'Tip Capper Cordial white cap sealer - Other Side','col-sm-3 col-xs-6 box','product-78.jpg','Tip Capper Cordial white cap sealer - Other Side','Yes');

/*Table structure for table `tbl_service` */

DROP TABLE IF EXISTS `tbl_service`;

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_service` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_service` */

insert  into `tbl_service`(`id`,`heading`,`short_content`,`content`,`photo`,`meta_title`,`meta_keyword`,`meta_description`,`slug_service`) values 
(1,'CNC CAD-CAM PROFESSIONAL','Have a CAD-CAM CAD experienced and professional in product design for product quality and competitive products.','<p></p><p>Have a great team in <b>CAD CAD-CAM that is experienced and professional</b> for product design and product quality for competitive products, and support with:</p><ul><li><b>- Tools Designer: 2 Person</b></li><li><b>- CAD-CAM Engineer: 2 Person</b></li><li><b>- Tools Maker: 2 Person</b></li><li><b>- CAM Programmer: 4 Person</b></li><li><b>- Production Planner: 1 Person<br></b><br></li></ul><p> </p><p></p>And support by :<p></p><ul><li><b>- CNC Machining with a high-speed machine process</b> makes a product quality and high accuracy. <br></li></ul>','service-1.jpg','CNC CAD-CAM Profesional','','','cnc-cad-cam-professional.html'),
(2,'TOOLING AND PRECISION PART','The proper coating is key to maximizing the operational efficiency of high-speed metal cutting tools.','The proper coating is key to maximizing the operational efficiency of high-speed metal cutting tools. We offer a variety of coatings to help optimize performance and extend the life of your cutting tools and inserts. Have a special spec? We can help match the proper coating to the tool and task.','service-2.jpg','TOOLING AND PRECISION PART','','','tooling-and-precision-part.html'),
(3,'MOULD AND PLASTIC COMPONENT','Mould & Plastic Components for industrial applications.','We provide <b>Mold & Plastic Components</b> for industrial applications. with a variety of requests submitted, we make professional modeling and build of high quality.<br>','service-3.jpg','MOULD AND PLASTIC COMPONENT','','','mould-and-plastic-component.html'),
(4,'DIES AND STAMPING COMPONENT','For the benefit of our Die Stamping customers, Bahrs Die & Stamping offers expert solid die and die component building, design and manufacturing services for progressive dies used in various industries.','For the benefit of our Die Stamping customers, Bahrs Die & Stamping offers expert solid die and die component building, design and manufacturing services for progressive dies used in various industries. Using state-of-the-art design software, our engineering and design team work with each client to manufacture accurate, high quality die components and tooling customized for each application.','service-4.jpg','DIES AND STAMPING COMPONENT','','','dies-and-stamping-component.html'),
(5,'MECHANICAL SYSTEM','Having components and teams in mechanical systems that are experienced and produce quality products.','Having components and teams in <b>mechanical systems</b> that are experienced and produce quality products. with a professional talent for accuracy processing and engineering build a product.<br>','service-5.jpg','MECHANICAL SYSTEM','','','mechanical-system.html'),
(6,'INDUSTRY TRAINING','Industry training for a beginner student in high school and college with work field training','Industry training for a beginner student in high school and college with work field training, and produce new talents in the development of the industry in a very quality factory environment.<br>','service-6.jpg','INDUSTRY TRAINING','','','industry-training.html');

/*Table structure for table `tbl_settings` */

DROP TABLE IF EXISTS `tbl_settings`;

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) NOT NULL,
  `logo2` varchar(255) NOT NULL,
  `logo_admin` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `counter_bg` varchar(255) NOT NULL,
  `login_bg` varchar(255) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_working_hour` text NOT NULL,
  `footer_about` text NOT NULL,
  `top_bar_email` varchar(255) NOT NULL,
  `top_bar_phone` varchar(255) NOT NULL,
  `contact_map_iframe` text NOT NULL,
  `receive_email` varchar(255) NOT NULL,
  `receive_password` varchar(255) NOT NULL,
  `protocol` varchar(255) NOT NULL,
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` varchar(255) NOT NULL,
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

insert  into `tbl_settings`(`id`,`logo`,`logo2`,`logo_admin`,`favicon`,`counter_bg`,`login_bg`,`footer_copyright`,`footer_address`,`footer_phone`,`footer_working_hour`,`footer_about`,`top_bar_email`,`top_bar_phone`,`contact_map_iframe`,`receive_email`,`receive_password`,`protocol`,`smtp_host`,`smtp_port`,`reset_password_email_subject`,`total_recent_post`,`total_popular_post`,`total_recent_post_home`,`total_product_post`,`theme_color_1`,`theme_color_2`,`counter1_text`,`counter1_value`,`counter2_text`,`counter2_value`,`counter3_text`,`counter3_value`,`counter4_text`,`counter4_value`,`counter_status`,`banner`) values 
(1,'logo.png','logo2.png','logo_admin.png','favicon.png','counter_bg.JPG','login_bg.png','Copyright © 2019 | CV. Cipta Sinergi Manufacturing','Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512','(022) 6647945','Monday - Friday (8:00 AM - 5:00 PM)','','marketing@ciptasinergi.com','(022) 6647945','<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.177204490785!2d107.551033!3d-6.8552849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x602a56a5b8d7e0cc!2sCV.+Cipta+Sinergi+Manufacturing!5e0!3m2!1sid!2sid!4v1565082522509!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>','encep.suryanajr@gmail.com','Password','smtp','ssl://smtp.gmail.com','465','Password Reset Request - www.ciptasinergi.com',4,4,10,6,'134595','FFFFFF','Employee\'s',50,'Project Finish',1200,'Projects On-going',800,'Award\'s',1200,'','banner.png');

/*Table structure for table `tbl_slider` */

DROP TABLE IF EXISTS `tbl_slider`;

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_slider` */

insert  into `tbl_slider`(`id`,`photo`,`heading`,`content`,`button1_text`,`button1_url`,`button2_text`,`button2_url`) values 
(1,'slider-1.JPG','being an educator for student internship','A place for student internships from various vocational schools in Indonesia, to learn how to use CNC machines and manual machines.','Read More','csm-career','Contact Us','contact'),
(2,'slider-2.JPG','HIGH PROCESSING ENGINE','Using machines that are very fast in product processing, with very high accuracy so as to create products that can compete with others.','Read More','facility','About Us','about');

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
(4,'Google Plus','#','fa fa-google-plus'),
(5,'Pinterest','#','fa fa-pinterest'),
(6,'YouTube','','fa fa-youtube'),
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_testimonial` */

insert  into `tbl_testimonial`(`id`,`name`,`designation`,`company`,`photo`,`comment`) values 
(1,'John Doe','Managing Director','ABC Inc.','testimonial-1.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.'),
(2,'Dadiv Smith','CEO','SS Multimedia','testimonial-2.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.'),
(3,'Stefen Carman','Chairman','GH Group','testimonial-3.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.'),
(4,'Gary Brent','CFO','XYZ It Solution','testimonial-4.jpg','Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user` */

insert  into `tbl_user`(`id`,`full_name`,`email`,`phone`,`password`,`photo`,`role`,`status`,`token`) values 
(1,'Encep Suryana','encep.suryanajr@gmail.com','082129714260','e4e05d342730456fcf3d8c87e95d5748','avatar-1.png','admin','Active',''),
(2,'HRD','hrd@gmail.com','082129714260','e10adc3949ba59abbe56e057f20f883e','avatar-2.png','hrd','Active',''),
(3,'Staff','staff@gmail.com','082129714260','e10adc3949ba59abbe56e057f20f883e','avatar-3.png','staff','Active',''),
(4,'Admin','admin@gmail.com','082129714260','e10adc3949ba59abbe56e057f20f883e','avatar-4.png','admin','Active','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
