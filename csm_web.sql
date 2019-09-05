-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Sep 2019 pada 11.27
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csm_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `code_body`, `code_main`) VALUES
(1, '<div id=\"fb-root\"></div>\r\n<script async defer crossorigin=\"anonymous\" src=\"https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v4.0&appId=478972548833723&autoLogAppEvents=1\"></script>', '<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_content_home`
--

CREATE TABLE `tbl_content_home` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_content_home`
--

INSERT INTO `tbl_content_home` (`id`, `photo`, `heading`, `content`, `link`) VALUES
(1, 'content-home-1.png', 'fa-cloud-download', 'Company Profile', 'download'),
(2, 'content-home-2.png', 'fa-archive', 'Our Products', 'product'),
(3, 'content-home-3.png', 'fa-briefcase', 'Career', 'csm-career'),
(4, 'content-home-4.png', 'fa-industry', 'Facility', 'facility');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_content_home_company_profile`
--

CREATE TABLE `tbl_content_home_company_profile` (
  `id` int(11) NOT NULL,
  `item_bg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_content_home_company_profile`
--

INSERT INTO `tbl_content_home_company_profile` (`id`, `item_bg`) VALUES
(1, 'Company_profile.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(1, 'Director'),
(2, 'Manufacturing Team Leader'),
(3, 'Commercial & Human Resources'),
(4, 'Administration'),
(5, 'PPIC & QC Manager'),
(6, 'Manufacturing Manager'),
(7, 'HRD & GA Manager'),
(8, 'Finance & Purchase Manager'),
(9, 'Marketing'),
(10, 'CNC CADCAM Shop Section Head'),
(11, 'Conventional Shop Section Head'),
(12, 'Design Engineering Section Head');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_electronics_division`
--

CREATE TABLE `tbl_electronics_division` (
  `id` int(11) NOT NULL,
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
  `slug_electronics` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_electronics_division`
--

INSERT INTO `tbl_electronics_division` (`id`, `name`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `meta_title`, `meta_keyword`, `meta_description`, `slug_electronics`) VALUES
(1, 'PLC Controller design and implementations', 'PLC Controller design and implementations', '<p>PLC Controller design and implementations<br></p>', '', '', '', '', '', '', '', '1', 'electronics_division-1.jpg', 'PLC Controller design and implementations', 'PLC Controller design and implementations', 'PLC Controller design and implementations', 'plc-controller-design-and-implementations.html'),
(2, 'Power electronics design and manufacturing', 'Power electronics design and manufacturing', '<p>Power electronics design and manufacturing <br></p>', '', '', '', '', '', '', '', '1', 'electronics_division-2.jpg', 'Power electronics design and manufacturing ', 'Power electronics design and manufacturing ', 'Power electronics design and manufacturing ', 'power-electronics-design-and-manufacturing.html'),
(3, 'Man-Machine Interface', 'MMI (Man-Machine Interface)', '<p>MMI (Man-Machine Interface)<br></p>', '', '', '', '', '', '', '', '1', 'electronics_division-3.jpg', 'MMI (Man-Machine Interface)', 'MMI (Man-Machine Interface)', 'MMI (Man-Machine Interface)', 'man-machine-interface.html'),
(4, 'Ruggedized electronic controllers', 'Ruggedized electronic controllers', '<p>Ruggedized electronic controllers<br></p>', '', '', '', '', '', '', '', '2', 'electronics_division-4.jpg', 'Ruggedized electronic controllers', 'Ruggedized electronic controllers', 'Ruggedized electronic controllers', 'ruggedized-electronic-controllers.html'),
(5, 'Harsh environmental power drivers', 'Harsh environmental power drivers', '<p>Harsh environmental power drivers <br></p>', '', '', '', '', '', '', '', '2', 'electronics_division-5.jpg', 'Harsh environmental power drivers ', 'Harsh environmental power drivers ', 'Harsh environmental power drivers ', 'harsh-environmental-power-drivers.html'),
(6, 'Mission computers', 'Mission computers', '<p>Mission computers <br></p>', '', '', '', '', '', '', '', '3', 'electronics_division-6.jpg', 'Mission computers ', 'Mission computers ', 'Mission computers ', 'mission-computers.html'),
(7, 'Display systems Multi-Function Display-MFD Moving Map Display etc', 'Display systems (Multi-Function Display-MFD, Moving Map Display, etc)', 'Display systems (Multi-Function Display-MFD, Moving Map Display, etc)', '', '', '', '', '', '', '', '3', 'electronics_division-7.jpg', 'Display systems (Multi-Function Display-MFD, Moving Map Display, etc)', 'Display systems (Multi-Function Display-MFD, Moving Map Display, etc)', 'Display systems (Multi-Function Display-MFD, Moving Map Display, etc)', 'display-systems-multi-function-display-mfd-moving-map-display-etc.html'),
(8, 'Sensor interface units', 'Sensor interface units', '<p>Sensor interface units <br></p>', '', '', '', '', '', '', '', '3', 'electronics_division-8.jpg', 'Sensor interface units ', 'Sensor interface units ', 'Sensor interface units ', 'sensor-interface-units.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_electronics_division_category`
--

CREATE TABLE `tbl_electronics_division_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_electronics_division_category`
--

INSERT INTO `tbl_electronics_division_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Industrial Electronics', 'Active'),
(2, 'Defense Electronic', 'Active'),
(3, 'Aviation Electronics', 'Active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_electronics_division_desc`
--

CREATE TABLE `tbl_electronics_division_desc` (
  `id` int(11) NOT NULL,
  `electronics_division_desc_photo` varchar(255) NOT NULL,
  `electronics_division_desc_heading` varchar(255) NOT NULL,
  `electronics_division_desc_content` text NOT NULL,
  `mt_electronics_division_desc` varchar(255) NOT NULL,
  `mk_electronics_division_desc` text NOT NULL,
  `md_electronics_division_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_electronics_division_desc`
--

INSERT INTO `tbl_electronics_division_desc` (`id`, `electronics_division_desc_photo`, `electronics_division_desc_heading`, `electronics_division_desc_content`, `mt_electronics_division_desc`, `mk_electronics_division_desc`, `md_electronics_division_desc`) VALUES
(1, 'electronics_division_desc_photo.png', 'Electronic technology ', '<p><b>Electronic technology</b></p><p>Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR etc) processors.</p><p><br></p><p><b>Drivers and controllers</b></p><p>Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.</p>', 'Electronic technology ', 'Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR, etc) processors. Drivers and controllers Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.', 'Electronics technology Expert on design electronic control systems by Field-Programmable Gate Array (FPGA), Digital Signal Processor  (DSP), microcontrollers (ARM, AVR, etc) processors. Drivers and controllers Synchro, resolvers, motors,  high power, and precision systems by means of IGBT, transformers, power modules, etc.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_electronics_division_photo`
--

CREATE TABLE `tbl_electronics_division_photo` (
  `id` int(11) NOT NULL,
  `electronics_division_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_facility`
--

CREATE TABLE `tbl_facility` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_facility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_facility`
--

INSERT INTO `tbl_facility` (`id`, `name`, `short_content`, `content`, `category_id`, `photo`, `meta_title`, `meta_keyword`, `meta_description`, `slug_facility`) VALUES
(1, 'HIGH-SPEED CNC MILLING MACHINING CENTER', 'Our process production support with high-speed CNC Milling Machining center for high-speed cutting tools.', '<p align=\"justify\">Our process production support with <b>High-Speed CNC Machining Center</b>, aided by a fast machine production process can be more productive and produce <b>High-Quality</b>\r\n products and competitive, so that the products will be used by the \r\nclients does not doubt the quality, the following specifications of <b>CNC Milling Machines</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">MATRIX 560AH / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 12000 rpm, Travel: 560x430x450<br></p></td><td align=\"center\">80%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">F1-LG 1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1000x510x510<br></p></td><td align=\"center\">90%<br></td><td align=\"center\">186.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">PRO-1000SP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 10000 rpm, Travel: 1000x600x630<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">166.000<br></td><td align=\"center\">0,007/300<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">S-PLUSH 10AP / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 8000 rpm, Travel: 1020x520x530<br></p></td><td align=\"center\">70%<br></td><td align=\"center\">205.000<br></td><td align=\"center\">0,005<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CNC MILLING CENTER<br></td><td align=\"center\">SMC-5 / HARTFORD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">156.000<br></td><td align=\"center\">0,005<br></td></tr></tbody></table><p>With the guarantee of providing quality and tested products. <br></p>', '1', 'newfacility-1.jpg', 'HIGH-SPEED CNC MILLING MACHINING CENTER', '', '', 'high-speed-cnc-milling-machining-center.html'),
(2, 'HIGH-SPEED CNC TURNING MACHINING CENTER', 'The proper coating is key to maximizing the operational efficiency of high-speed metal cutting tools.', '<p align=\"justify\">The proper coating is key to maximizing the \r\noperational efficiency of high-speed metal cutting tools. We offer a \r\nvariety of coatings to help optimize performance and extend the life of \r\nyour cutting tools and inserts. Process production support with <b>High-Speed CNC Turning Machining Center</b>, aided by a fast machine production process can be more productive and produce <b>High-Quality</b>\r\n products and competitive, so that the products will be used by the \r\nclients does not doubt the quality, the following specifications of <b>CNC </b><b><b>Turning </b> Machines</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CNC TURNING MACHINE<br></td><td align=\"center\">CAK 4085D / SHEN YANG<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x850</p></td><td align=\"center\">50%<br></td><td align=\"center\">136.000<br></td><td align=\"center\">0,012<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CNC TURNING MACHINE</td><td align=\"center\">MAZAK QT T6<br></td><td align=\"center\"><p>Spindle Speed 7000 rpm, Travel: 100x100</p></td><td align=\"center\">50%<br></td><td align=\"center\">123.000<br></td><td align=\"center\">0,002<br></td></tr></tbody></table><p>Have a special spec? We can help match the proper coating to the tool and task.</p>', '1', 'newfacility-2.jpg', 'HIGH-SPEED CNC TURNING MACHINING CENTER', '', '', 'high-speed-cnc-turning-machining-center.html'),
(3, 'CONV. MACHINING CENTER AND SURF. GRINDING', 'Our process production support with Conv. Machining center and surface grinding for high-speed cutting tools.', '<p align=\"justify\">Our process production support with <b>High-Speed Conv. Machining Center and Surface Grinding</b>, aided by a fast machine production process can be more productive and produce <b>High-Quality</b>\r\n products and competitive, so that the products will be used by the \r\nclients does not doubt the quality, the following specifications of <b><b>Conv. </b> Machines</b> <b>and Surface Grinding</b> we use:</p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Machine</b><br></td><td align=\"center\"><b>Type/Merk</b></td><td align=\"center\"><p><b>Specification</b></p></td><td align=\"center\"><p><b>Loading vs Capacity (%)</b></p></td><td align=\"center\"><b>Machine Hour (Rp/Hour)<br></b></td><td align=\"center\"><b>Accuracy Machine (mm) <br></b></td></tr><tr><td align=\"center\">1.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM5 / STANDARD</td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 1000x450x450<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,015<br></td></tr><tr><td align=\"center\">2.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">SM4 / PHOEBUS<br></td><td align=\"center\"><p>Spindle Speed 1800 rpm, Travel: 775x400x400<br></p></td><td align=\"center\">50%<br></td><td align=\"center\">56.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">3.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MAZAK<br></td><td align=\"center\"><p>Spindle Speed 2500 rpm, Travel: 775x400x401</p></td><td align=\"center\">60%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,05<br></td></tr><tr><td align=\"center\">4.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">MV-11<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250<br></p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08<br></td></tr><tr><td align=\"center\">5.<br></td><td align=\"center\">CONV. MILLING MACHINE</td><td align=\"center\">RONG FU<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 600x200x250</p></td><td align=\"center\">60%<br></td><td align=\"center\">30.000<br></td><td align=\"center\">0,08</td></tr><tr><td align=\"center\">6.<br></td><td align=\"center\">CONV. TURNING MACHINE</td><td align=\"center\">COLCHESTER<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 200x600</p></td><td align=\"center\">80%<br></td><td align=\"center\">50.000<br></td><td align=\"center\">0,01</td></tr><tr><td align=\"center\">7.<br></td><td align=\"center\">SURFACE GRINDING<br></td><td align=\"center\">SG 2040 / STANDARD<br></td><td align=\"center\"><p>Spindle Speed 1500 rpm, Travel: 400x200x300</p></td><td align=\"center\">40%<br></td><td align=\"center\">60.000<br></td><td align=\"center\">0,003</td></tr></tbody></table><p>With the guarantee of providing quality and tested products. <br></p>', '1', 'newfacility-3.jpg', 'CONV. MILLING & TURNING MACHINING CENTER AND SURFACE GRINDING', '', '', 'conv.-machining-center-and-surf.-grinding.html'),
(4, 'PRODUCTION WORKSHOP AND PARKING AREA', 'In the production workshop process, we use the total area: 380m2 to provide comfort and flexibility in the production process so that the productivity in the production process.', '<p>In the production workshop process, we use the total area: 500m2 where: </p><table class=\"table table-bordered\"><tbody><tr><td align=\"center\"><b>No.</b><br></td><td align=\"center\"><b>Workshop</b><br></td><td align=\"center\"><b>Area</b><br></td></tr><tr><td align=\"center\"><b>1<br></b></td><td align=\"center\">CNC Workshop<br></td><td align=\"center\">154 m2<br></td></tr><tr><td align=\"center\"><b>2<br></b></td><td align=\"center\">Workshop Conventional<br></td><td align=\"center\">160 m2<br></td></tr><tr><td align=\"center\"><b>3<br></b></td><td align=\"center\">Car parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>4<br></b></td><td align=\"center\">Motorcycle parking area<br></td><td align=\"center\">60 m2<br></td></tr><tr><td align=\"center\"><b>5<br></b></td><td align=\"center\">Others<br></td><td align=\"center\">66 m2<br></td></tr></tbody></table><p>To\r\n provide comfort and flexibility in the production process so that the \r\nproductivity in the production process goes well and facilitate the data\r\n collection and the placement of the production. for the sake of \r\nconvenience and safety at work, we established safety procedures to give\r\n a warning or lane line safety at work and we also write the symbols of \r\nsafety in the work, because safety is the main thing in the work.<br></p>', '1', 'newfacility-4.jpg', 'PRODUCTION WORKSHOP AND PARKING AREA', '', '', 'production-workshop-and-parking-area.html'),
(5, 'OFFICE AREA', 'In the work of asset management and all production data, we use an area of 70m2 located on the 2nd floor above the production area precisely at the top of the CNC Machine Center area.', '<p>In the work of asset management and all production data, we use an area \r\nof 70m2 located on the 2nd floor above the production area precisely at \r\nthe top of the CNC Machine Center area. not only the staff in the \r\noffice, all the tool designers, toolmakers, CAD-CAM Engineering and \r\nProduction Planner are in the office, so the whole can coordinate \r\ndirectly.</p>', '2', 'newfacility-5.jpg', 'OFFICE AREA', '', '', 'office-area.html'),
(6, 'LAND AREA', 'We use an area of approximately 1,400 m2 of land area for all activities such as outdoor soccer court, gathering hall, ping pong sports area and mess area for students/college for an internship program.', '<p>We use an area of approximately 1,400 m2 of land area for all activities\r\n such as outdoor soccer court, gathering hall, ping pong sports area and\r\n mess area for students/college for an internship program. We also \r\nprovide comfort to all employees and staff as a whole by providing large\r\n areas of green that can be comfortable after working.<br></p>', '3', 'newfacility-6.jpg', 'LAND AREA', '', '', 'land-area.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_facility_category`
--

CREATE TABLE `tbl_facility_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_facility_category`
--

INSERT INTO `tbl_facility_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Workshop', 'Active'),
(2, 'Office', 'Active'),
(3, 'Land', 'Active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_facility_photo`
--

CREATE TABLE `tbl_facility_photo` (
  `id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_facility_photo`
--

INSERT INTO `tbl_facility_photo` (`id`, `facility_id`, `photo`) VALUES
(2, 2, '2.png'),
(3, 2, '3.png'),
(4, 1, '4.jpg'),
(5, 2, '5.jpg'),
(6, 3, '6.jpg'),
(7, 4, '7.jpg'),
(8, 5, '8.jpg'),
(9, 6, '9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `eng` text NOT NULL,
  `idn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `eng`, `idn`) VALUES
(1, 'HOME', 'Home', 'Beranda'),
(2, 'PAGE', 'Page', 'Halaman'),
(3, 'ABOUT', 'About', 'Tentang'),
(4, 'GALLERY', 'Gallery', 'Galeri'),
(5, 'FAQ', 'FAQ', 'FAQ'),
(6, 'SERVICE', 'Service', 'layanan'),
(7, 'PORTFOLIO', 'Portfolio', 'Portofolio'),
(8, 'TESTIMONIAL', 'Testimonial', 'Testimonial'),
(9, 'NEWS', 'News', 'Berita'),
(10, 'CONTACT', 'Contact', 'Kontak'),
(11, 'ADDRESS', 'Address', 'Alamat'),
(12, 'CALL_US', 'Call Us', 'Hubungi Kami'),
(13, 'WORKING_HOURS', 'Woring Hours', 'Jam Kerja'),
(14, 'ABOUT_US', 'About Us', 'Tentang Kami'),
(15, 'LATEST_NEWS', 'Latest News', 'Berita Terbaru'),
(16, 'POPULAR_NEWS', 'Popular News', 'Berita Poluler'),
(17, 'QUICK_LINKS', 'Quick Link', 'Quick Link'),
(18, 'TERMS_AND_CONDITIONS', 'Term and Conditions', 'Term and Conditions'),
(19, 'PRIVACY_POLICY', 'Privacy Policy', 'Privacy Policy'),
(20, 'READ_MORE', 'Read More', 'Selengkapnya'),
(21, 'POSTED_ON', 'Posted On:', 'Posting pada:'),
(22, 'ADMIN', 'Admin', 'Admin'),
(23, 'SERVICES', 'Services', 'Jasa'),
(24, 'ALL', 'All', 'Semua'),
(26, 'PROJECTS', 'Project', 'Proyek'),
(27, 'DESCRIPTION', 'Description', 'Deskripsi'),
(28, 'CLIENT_NAME', 'Client Name', 'Nama klien'),
(29, 'CLIENT_COMPANY', 'Client Company', 'Perusahaan Klien'),
(30, 'PROJECT_START_DATE', 'Project Start Date', 'Waktu Mulai Proyek'),
(31, 'PROJECT_END_DATE', 'Project End Date', 'Waktu Selesai Proyek'),
(33, 'CLIENT_COMMENT', 'Client Comment', 'Komentar Klien'),
(34, 'SEARCH_NEWS', 'Search News', 'Pencarian Berita'),
(35, 'CATEGORY', 'Category', 'Kategori'),
(36, 'SHARE_THIS', 'Share This', 'Bagikan ini'),
(37, 'COMMENTS', 'Comments', 'Komentar'),
(38, 'SEARCH_BY', 'Search by:', 'Pencarian Berdasarkan:'),
(39, 'NO_RESULT_FOUND', 'No Result Found', 'Pencarian tidak ditemukan'),
(40, 'CONTACT_US_PAGE_FORM_HEADING_TEXT', 'Contact us through the following form:', 'Kontak kami melalui form berikut:'),
(41, 'PREVIOUS', 'Previos', 'Sebelumnya'),
(42, 'NEXT', 'Next', 'Selanjutnya'),
(43, 'FIND_US_ON_MAP', 'Find Us on Map:', 'Tentukan Kami di Maps:'),
(44, 'NAME', 'Name', 'Nama'),
(45, 'EMAIL_ADDRESS', 'Email Address', 'Alamat Email'),
(46, 'PHONE', 'Phone Number', 'Nomor Telp'),
(47, 'MESSAGE', 'Message', 'Pesan'),
(48, 'SEND_MESSAGE', 'Send Message', 'Kirim Pesan'),
(49, 'EMPTY_ERROR_NAME', 'Name can not be empty', 'Nama tidak boleh kosong!'),
(50, 'EMPTY_ERROR_PHONE', 'Phone number can not be empty', 'Telp tidak boleh kosong!'),
(51, 'EMPTY_ERROR_EMAIL', 'Email address can not be empty', 'Alamat Email tidak boleh kosong!'),
(52, 'VALID_ERROR_EMAIL', 'Email address is invalid', 'Alamat Email tidak benar!'),
(53, 'EMPTY_ERROR_COMMENT', 'Comment can not be empty', 'Komentar tidak boleh kosong!'),
(54, 'CONTACT_FORM_EMAIL_SUBJECT', 'Contact Form Email - www.ciptasinergi.com', 'Pesan dari Email - www.ciptasinergi.com'),
(55, 'CONTACT_FORM_EMAIL_SUCCESS_MESSAGE', 'Thank you for sending us the email. We will contact you shortly.', 'Terima kasih telah mengirim pesan, tunggu balasan dari kami..'),
(56, 'PASSWORD_REQUEST_EMAIL_SUBJECT', 'Password Request - www.ciptasinergi.com', 'Password Request -  www.ciptasinergi.com'),
(57, 'PRODUCT', 'Product', 'Produk'),
(58, 'COMPANY_PROFILE', 'Company Profile', 'Profil Perusahaan'),
(59, 'CAREER', 'Career', 'Karir'),
(60, 'OUR_PRODUCT', 'Our Product', 'Produk Kami'),
(61, 'FACILITY', 'Facility', 'Fasilitas'),
(62, 'SEE_MORE', 'See More', 'Lihat Semua'),
(63, 'COMPANY_EMAIL', 'Company Email', 'Email Perusahaan'),
(64, 'COMPANY_PHONE', 'Company Phone', 'No.Telp Perusahaan'),
(65, 'ELECTRONICS_DIVISION', 'Electronics Division', 'Divisi Elektronik'),
(66, 'NEW_PRODUCT', 'New Product', 'Produk Baru'),
(67, 'TESTIMONIAL_SAY', 'What a Client Say', 'Apa yang klien katakan '),
(68, 'PRODUCT_HOME', 'Our Featured Products', 'Produk Unggulan Kami'),
(69, 'OUR_PARTNER', 'Our Partner', 'Partner Kami'),
(70, 'OUR_FUTURE_PRODUCT', 'Our Future Product', 'Produk Unggulan Kami\r\n'),
(71, 'INSTITUTE', 'Institute / Company', 'Institut / Perusahaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
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
  `post_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `slug`, `news_content`, `news_short_content`, `news_date`, `photo`, `slug_news_category`, `total_view`, `comment`, `meta_title`, `meta_keyword`, `meta_description`, `user_update`, `post_slug`) VALUES
(1, 'Open Recruitment Agust 2019', 'col-page col-sm-8 col-md-6', '<p>Open Recruitment new employee\'s CV. Cipta Sinergi Manufacturing on Agust 2019, The requirements are as follows:</p><p><b>Criteria :</b></p><ol><li>Matching CAM design with 5 axis CNC machines for optimal.</li><li>Making CAM designs.</li><li>Able to work in teams and individually.</li></ol><p><b>Qualification<b> :</b></b></p><ol><li><span class=\"tlid-translation translation\" lang=\"en\"><span title=\"\" class=\"\">Max age</span> <span title=\"\" class=\"\">35 years old, physically and mentally healthy</span></span></li><li>Having experience in the field of Programmer (CNC) ± 2 years specialized in Manufacturing Dies and CF</li><li>Experience using Mastercam & Powermill / other CAM design software</li><li>Experienced using a 5 axis CNC machine</li><li>Mastering 3D & 2D concepts</li><li>Able to work well together and good communication</li></ol><b>If you are personally we needed, please apply for an application to participate in the selection stage.<br>HRD Section</b><p><b><b>CV. Cipta Sinergi Manufacturing</b></b></p><p><b><b>Jl. Kamarung No. 88b RT/RW 004/004 Citeureup Kec. Cimahi Utara, Jawa Barat 40512<br></b></b></p>', 'Open Recruitment new employee\'s CV. Cipta Sinergi Manufacturing on Agust 2019.', '2019-08-01', 'news-1.jpg', 'career.html', 0, 'On', 'Open Recruitment Agust 2019', '', '', 'hrd', 'open-recruitment-agust-2019.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_news_category`
--

CREATE TABLE `tbl_news_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_news_category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_news_category`
--

INSERT INTO `tbl_news_category` (`category_id`, `category_name`, `meta_title`, `meta_keyword`, `meta_description`, `slug_news_category`) VALUES
(1, 'New Product', 'New Product', '', '', 'new-product.html'),
(2, 'New Project', 'New Project', '', '', 'new-project.html'),
(3, 'Project Finish', 'Project Finish', '', '', 'project-finish.html'),
(4, 'Activity', 'Activity', '', '', 'activity.html'),
(5, 'Announcement', 'Announcement', '', '', 'announcement.html'),
(7, 'Career', 'Career', '', '', 'career.html'),
(8, 'Event', 'Event', '', '', 'event.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `mt_home` varchar(255) NOT NULL,
  `mk_home` text NOT NULL,
  `md_home` text NOT NULL,
  `about_photo` varchar(255) NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `profile_heading` varchar(255) NOT NULL,
  `profile_content` text NOT NULL,
  `history_heading` varchar(255) NOT NULL,
  `history_content` text NOT NULL,
  `structure_heading` varchar(255) NOT NULL,
  `structure_photo` varchar(255) NOT NULL,
  `mission_heading` varchar(255) NOT NULL,
  `mission_content` text NOT NULL,
  `vision_heading` varchar(255) NOT NULL,
  `vision_content` text NOT NULL,
  `mt_about` varchar(255) NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL,
  `gallery_heading` varchar(255) NOT NULL,
  `mt_gallery` varchar(255) NOT NULL,
  `mk_gallery` text NOT NULL,
  `md_gallery` text NOT NULL,
  `product_heading` varchar(255) NOT NULL,
  `mt_product` varchar(255) NOT NULL,
  `mk_product` text NOT NULL,
  `md_product` text NOT NULL,
  `service_heading` varchar(255) NOT NULL,
  `mt_service` varchar(255) NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL,
  `facility_heading` varchar(255) NOT NULL,
  `mt_facility` varchar(255) NOT NULL,
  `mk_facility` text NOT NULL,
  `md_facility` text NOT NULL,
  `portfolio_heading` varchar(255) NOT NULL,
  `mt_portfolio` varchar(255) NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL,
  `testimonial_heading` varchar(255) NOT NULL,
  `mt_testimonial` varchar(255) NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL,
  `news_heading` varchar(255) NOT NULL,
  `mt_news` varchar(255) NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL,
  `contact_heading` varchar(255) NOT NULL,
  `mt_contact` varchar(255) NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL,
  `search_heading` varchar(255) NOT NULL,
  `mt_search` varchar(255) NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL,
  `term_heading` varchar(255) NOT NULL,
  `term_content` text NOT NULL,
  `mt_term` varchar(255) NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL,
  `privacy_heading` varchar(255) NOT NULL,
  `privacy_content` text NOT NULL,
  `mt_privacy` varchar(255) NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL,
  `mt_carrier` varchar(255) NOT NULL,
  `mk_carrier` text NOT NULL,
  `md_carrier` text NOT NULL,
  `mt_electronics_division` varchar(255) NOT NULL,
  `mk_electronics_division` text NOT NULL,
  `md_electronics_division` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `mt_home`, `mk_home`, `md_home`, `about_photo`, `about_heading`, `about_content`, `profile_heading`, `profile_content`, `history_heading`, `history_content`, `structure_heading`, `structure_photo`, `mission_heading`, `mission_content`, `vision_heading`, `vision_content`, `mt_about`, `mk_about`, `md_about`, `gallery_heading`, `mt_gallery`, `mk_gallery`, `md_gallery`, `product_heading`, `mt_product`, `mk_product`, `md_product`, `service_heading`, `mt_service`, `mk_service`, `md_service`, `facility_heading`, `mt_facility`, `mk_facility`, `md_facility`, `portfolio_heading`, `mt_portfolio`, `mk_portfolio`, `md_portfolio`, `testimonial_heading`, `mt_testimonial`, `mk_testimonial`, `md_testimonial`, `news_heading`, `mt_news`, `mk_news`, `md_news`, `contact_heading`, `mt_contact`, `mk_contact`, `md_contact`, `search_heading`, `mt_search`, `mk_search`, `md_search`, `term_heading`, `term_content`, `mt_term`, `mk_term`, `md_term`, `privacy_heading`, `privacy_content`, `mt_privacy`, `mk_privacy`, `md_privacy`, `mt_carrier`, `mk_carrier`, `md_carrier`, `mt_electronics_division`, `mk_electronics_division`, `md_electronics_division`) VALUES
(1, 'Home | CV. Cipta Sinergi Manufacturing', '', '', 'about_photo.png', 'About Company', '<h4>Indonesia :<br></h4><p>Perusahaan yang bergerak di bidang <b>manufaktur</b> untuk mesin yang diperlukan Industri. Didukung oleh <b>Tools Designer, Tools Maker, CAD CAM Engineering, CAD Modeler, CAM Programmer</b> dan<b> Production Planner</b> yang berpengalaman serta didukung oleh Peralatan yang cukup lengkap dan pemrosesan yang cepat didukung oleh mesin yang mempunyai title <b>High Speed Machine Processing</b> dan menghasilkan produk yang sangat berkualitas.</p><h4>English :</h4><p>Companies engaged in <b>manufacturing</b> for machines that are needed by industry. Supported by <b>Tools Designer, Tools Maker</b>, <b>CAD-CAM Engineering, CAM Programmer</b> and <b>Production Planner</b> who are experienced and supported by fairly complete equipment and fast processing supported by machines that have the title <b>High-Speed Machine Processing</b> and produce very high-quality products.<br></p>', 'Company Identity', '<table><tbody><tr><td><b>Office &amp; Workshop<br></b></td><td><b>:</b> Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512</td></tr><tr><td><b>Phone/Fax<br></b></td><td><b>:</b> (022) 6647945</td></tr><tr><td><b>Website<br></b></td><td><b>:</b> www.ciptasinergi.com</td></tr><tr><td><b>E-Mail<br></b></td><td><b>:</b> marketing@ciptasinergi.com</td></tr><tr><td><b>Date of Established<br></b></td><td><b>:</b> Juni 1997</td></tr><tr><td><b>Legal Form<br></b></td><td><b>:</b> CV (Commanditer Venootschap) No. 5 Tanggal 24 Juli 2003</td></tr><tr><td><b>Number of workers</b></td><td><b>:</b> 30 Orang</td>  </tr></tbody>\r\n</table>', 'Sejarah', '<p>Berawal pada pertengahan tahun 1997, setelah mengikuti Pelatihan Industri Kecil Modern (IKM) yang diadakan oleh Teknik Industri ITB dengan Deperindag, Nandjar Nugraha mendapatkan tawaran untuk mengelola Laboratorium Sistem Produksi Teknik Industri (LSP-TI). Tugas utamanya membantu mahasiswa yang akan melakukan praktek Sistem Produksi. Setelah menjalani aktifitas tersebut, Beliau melihat ada peluang untuk mengoptimalkan mesin-mesin yang ada di Lab. Sisprod yang selama ini kelihatan tidak optimal, karena tidak ada kegiatan produksi.<br></p><p><br>Dengan memanfaatkan jaringan Alumni Polman (Politeknik Manufactur Swiss) akhirnya memberanikan diri untuk mencari order. Dengan tenaga yang sangat terbatas, mulailah menerima & mengerjakan order yang diperoleh. Berawal dari order kecil-kecilan tersebut, maka terpikir untuk merintis sebuah usaha. Sebagai langkah awal, sebelum membentuk usaha, dikumpulkannya beberapa temen alumni Polman untuk bergabung. Beberapa diantaranya adalah M. Syafir Adly, Aman Wardana & Agus Yulian. Juga beberpa temen yang mensupport dari luar (karena pada jadi Karyawan) antara lain Maryadi, Anton Diyanto, Marzuki dll. Kemudian terbentuklah bendara usaha dengan nama Kop. Assakinah. Tidak lama kemudian dengan bertambahnya aktifitas, bergabung lagi alumni Polman yaitu Ius Rusmana yang pernah berpengalaman kerja di Batam. Dan yang terakhir bergabung adalah Ahmad Suparto, yang ini tidak ada hubunganya dengan alumni, hanya semata-mata hubungan pertemanan.</p><p><br>Dengan jumlah SDM yang hanya ber-tujuh orang, mulailah As-Sakinah beraktifitas layaknya sebuah usaha Industri, menerima order, mengerjakan (beli material, produksi internal, subkon) delivery dan lain sebagainya. Secara bergiliran beberapa personil As-Sakinah tersebut diikutkan pada pelatihan Industri Kecil Modern (IKM) setelah angkatan I (Nandjar Nugraha) angkatan II (M. Syafir Adly & Agus Yulian), angkatan III (Aman Wardana & Ius Rusmana) & angkata terakhir (Ahmad Suparto) setelah itu tidak ada lagi Pelatihan yang dibiayai oleh Deperindag Pusat bekerjasama dengan Teknik Indusrti ITB. Seiring dengan berlalunya waktu kurang lebih 1 tahun setelah berjalan usaha, di tengah perjalanan ada Personil yang memilih berpisah, ingin menjalankan aktifitas usaha secara sendiri. Banyak sudah suka & duka yang dialami dalam rentang waktu 1 tahun tersebut. Hikmah dari berpisahnya salah satu teman ini, akhirnya terbentuklah “Cipta Sinergi” Manufacturing.</p><p><br>Berkat ke-murahan Tuhan yang Maha Pemurah jua, tidak disangka-sangka datanglah sebuah tantangan yang sungguh sangat menantang. Betapa tidak, sebuah usaha yang baru belajar untuk bisa bertahan hidup, kemudian ditawari sebuah pekerjaan yang membutuhkan modal tidak sedikit (dilihat dari asset yang dimiliki CSM) waktu itu. Tapi dengan penuh keyakinan Koordinator CSM (NN) memberanikan diri menerima tawaran order tersebut, karena dibalik tantangan ini pasti ada peluang yang bisa dimanfaatkan untuk CSM kedepan. Dengan mensiasati dalam negosiasi penawaran harga, untuk mendapatkan DP (down payment) dari sejumlah PO yang diterima, maka pekerjaan tersebut bisa diambil dan dikerjakan dengan sukses. Dari pekerjaan ini pula-lah akhirnya bisa merekrut beberapa karyawan dan membeli mesin-mesin produksi konvensional. Ajib-nya pekerjaan tersebut berlanjut untuk beberpa project/termin. Rentang waktu project tersebut yaitu antara tahun 1999 – 2000 (termin 1 & 2). Dari pekerjaan tersebut mulailah CSM bisa menyisihkan modal untuk membeli sebidang tanah di daerah Cimahi utara. Tidak lupa juga para perintis CSM bisa membeli sepada motor, walaupun second. Sebagai informasi aja (tapi jangan bilang siapa-siapa) bahwa para “asabiqunal awalun” CSM ini berangkat kerja ke LSP-TI ITB dengan mengendarai sepada kumbang. Nandjar Nugraha berangkat dari Pada Suka Cicaheum, M. Syafir Adly & Aman Wardana berangkat dari batas Kota (Cibeureum), Ius Rusmana berangkat dari Elang & Ahmad Suparto berangkat dari Cibaduyut ada satu lagi dik Maman (operator awal) & dik Hendi Prayitno berangkat dari Kiaracondong. Sunggguh sebuah pengalaman yang bisa dikenang untuk cerita anak cucu.</p><p><br>Empat tahun sudah bayi CSM (1997 – 2000), lahir dan di didik di LSP-TI ITB atau istilahnya di Inkubasi. Dengan bimbingan dari bapak-bapak dosen Teknik Industri ITB, Bp. Isa Setiasah Toha, Bp. Abdul Hakim, Bp. Barmawi, Bp. Drajat Irianto, Bp. Anas Ma’ruf, Bp. Aso, dll yang tidak bisa disebutkan semuanya di sini. Mereka dengan sepenuh hati meberikan saran, masukan & kritik untuk membesarkan bayi CSM tersebut. Terima kasih yang sedalam-dalamnya dari lubuk hati yang paling dalam, mudah-mudahan semua jasa beliau-beliau terhadap CSM baik pribadi maupun institusi mendapatkan balasan yang lebih baik dan lebih banyak dari Tuhan yang Maha Kuasa. Tidak lupa juga terimaksih kepada teteh Yeni & Kang Engkos yang telah berperan aktif memudahkan personel CSM untuk meng ”akses” makan siang yang mak Nyus apalagi gratis, dari even-even pelatihan dan semacamnya. Tahun 2001 merupakan periode ke-2, sebagai langkah berikutnya setelah CSM, memisahkan diri dari induk iknubator LSP-TI ITB. </p><p>Kampung kamarung, kawasan Cimahi Utara merupakan tempat yang telah dipilihkan oleh sang penentu Nasib, setelah berikhtiar mencoba mencari tempat dibeberapa lokasi. Babak baru mulai di gelar, dengan bermodalkan profit usaha selama diinkubator di LSP-TI ITB, sebidang tanah yang dibeli tersebut, dibangunlah sebuah bangunan work shop dan di isi beberapa mesin konvnsional.<br>Tahun pertama di Cimahi, setelah kepindahan dari ITB, kembali mendapatkan anugerah untuk mengerjakan pekerjaan sebagai jilid ke-3 dari lanjutan project yang pernah dikerjakan di ITB selama 2 termin. Dari project jilid – 3 ini kemudian banyak merekrut karyawan yang nantinya menjadi karyawan tetap hingga sekarang ini. Setelah itu ada keberanian untuk mengambil keputusan besar, yang dihubungkan dengan visi CSM kedepan. Yaitu membeli mesin CNC Machining. Walaupun baru bisa membayar DP, dan sisanya dicicil. Detik – demi – detik, menit demi menit, jam demi jam, hari berganti hari, bulan berganti tahun, saat ini (2012) Cipta Sinergi Manufacturing sudah bisa dikatakan tumbuh & berkembang walaupun baru dilihat dari sisi asset dhohiriah/ materi semata, yaitu antara lain jumlah karyawan yang ada 33 orang, sarana produksi antara lain : CNC Machining Center 3 unit, CNC Lathe 1 unit dan beberapa mesin konvensional dll. Mudah-mudahan semua hal tersebut diatas menjadi satu langkah awal dari langkah-langkah berikutnya ke depan hingga masa yang akan datang yang menjadi bagian partisipasi bagi seluruh pribadi maupun institusi CSM untuk ikut berkhidmat kepada kehidupan dunia ini yang akan menjadi wasilah untuk memetik hasil yang hakiki dikehidupan akherat kelak. Amin yaa Mujibas-Sa’ilin<br></p>', 'Company Structure', 'structure_photo.png', 'Misi', 'Menghasilkan produk permesinan berkualitas dan tepat waktu disertai layanan yang baik untuk mencapai kepuasan pelanggan dan hubungan yang berkelanjutan. Mewujudkan kualitas kehidupan stakholder yang baik. Meningkatkan shareholder values secara terus menerus', 'Visi', 'Menjadi indusrti permesinan presisi yang menguasai teknologi manufaktur terbaru dan memiliki kemampuan yang baik dalam disain dan rekayasa. Didukung oleh sistem manufaktur yang handal, sehingga mampu menghasilkan produk berupa komponen presisi, cetakan dan sistem makanik yang memberikan kepuasan kepada pelanggan', 'About Us | CV. Cipta Sinergi Manufacturing', ' ', '', 'Gallery', 'Gallery | CV. Cipta Sinergi Manufacturing', '', '', 'Product', 'Product | CV. Cipta Sinergi Manufacturing', '', '', 'Service', 'Service | CV. Cipta Sinergi Manufacturing', '', '', 'Facility', 'Facility | CV. Cipta Sinergi Manufacturing', '', '', 'PORTFOLIO', 'Portfolio | CV. Cipta Sinergi Manufacturing', '', '', 'TESTIMONIAL', 'Testimonial | CV. Cipta Sinergi Manufacturing', '', '', 'News', 'News | CV. Cipta Sinergi Manufacturing', '', '', 'Contact', 'Contact | CV. Cipta Sinergi Manufacturing', '', '', 'Search By :', 'Search | CV. Cipta Sinergi Manufacturing', '', '', 'TERMS & CONDITIONS', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Terms and Conditions | CV. Cipta Sinergi Manufacturing', '', '', 'PRIVACY POLICY', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Privacy Policy | CV. Cipta Sinergi Manufacturing', '', '', 'Career | CV. Cipta Sinergi Manufacturing', 'Open Recruitment, Career CSM, PKL CSM, Magang, Praktek Kerja Lapangan CSM Cimahi. Karier CSM', '', 'Electronics Division | CV. Cipta Sinergi Manufacturing', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_partner`
--

INSERT INTO `tbl_partner` (`id`, `name`, `photo`) VALUES
(1, 'Perfetti Van Melle Indonesia', 'partner-1.png'),
(2, 'Pakoakuina Group', 'partner-2.png'),
(3, 'PT. INFRA RCS', 'partner-3.png'),
(4, 'PT. Medion Jaya Farma', 'partner-4.png'),
(5, 'PT. Hini Daiki Indonesia', 'partner-5.png'),
(6, 'PT. Madawikri Tunggal', 'partner-6.png'),
(7, 'PT. Belfoods Indonesia', 'partner-7.png'),
(8, 'PT Nusantara Turbin Dan Propulsi', 'partner-8.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` varchar(255) NOT NULL,
  `photo_style` varchar(255) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `photo_desc` text NOT NULL,
  `photo_show_home` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_caption`, `photo_style`, `photo_name`, `photo_desc`, `photo_show_home`) VALUES
(1, 'Touring Ciletuh 2017', 'col-sm-6 col-xs-6 box', 'photo-1.jpg', 'Foto Bersama dibukit pinggir pantai Ciletuh - Sukabumi dalam acara touring karyawan CV. Cipta Sinergi Manufacturing tahun 2017', 'Yes'),
(2, 'Kebersamaan di Ciletuh 2017', 'col-sm-3 col-xs-6 box', 'photo-2.jpg', 'Istirahat sejenak sebelum melanjutkan perjalanan ke Ciletuh - Sukabumi dalam acara Touring Karyawan CV. Cipta Sinergi Manufacturing 2017', 'Yes'),
(4, 'Pameran Manufaktur 2018', 'col-sm-3 col-xs-6 box', 'photo-4.jpg', 'Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta', 'Yes'),
(5, 'Pameran Manufaktur 2018 (2)', 'col-sm-3 col-xs-6 box', 'photo-5.jpg', 'Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta', 'Yes'),
(6, 'Pameran Manufaktur 2018 (3)', 'col-sm-6 col-xs-6 box', 'photo-6.jpg', 'Team yang menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta', 'Yes'),
(7, 'Pameran Manufaktur 2018 (4)', 'col-sm-3 col-xs-6 box', 'photo-7.jpg', 'Menghadiri Pameran Manufacturing dalam acara JIEXPO Manufacturing Indonesia 2018 di Jakarta', 'Yes'),
(8, 'Touring Pangandaran 2018', 'col-sm-6 col-xs-6 box', 'photo-8.jpg', 'Foto bersama di halaman CV. Cipta Sinergi Manufacturing sebelum berangkat ke pantai Pangandaran dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing 2018', 'Yes'),
(9, 'Touring Pangandaran 2018 (2)', 'col-sm-3 col-xs-6 box', 'photo-9.jpg', 'Kegiatan saat Touring ke Pantai Pangandaran dalam acra Touring Karyawan CV. Cipta Sinergi Manufacturing 2018', 'Yes'),
(10, 'Touring Pangandaran 2018 (3)', 'col-sm-3 col-xs-6 box', 'photo-10.jpg', 'Kegiatan bersama karyawan CV. Cipta Sinergi Manufacturing dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing ke Pangandaran 2018', 'Yes'),
(11, 'Touring Pangandaran 2018 (4)', 'col-sm-6 col-xs-6 box', 'photo-11.jpg', 'Foto bersama karyawan CV. Cipta Sinergi Manufacturing di pantai Pangandaran dalam kegiatan Touring Karyawan CV. Cipta Sinergi Manufacturing 2018', 'Yes'),
(12, 'Idul Adha 2019', 'col-sm-3 col-xs-6 box', 'photo-12.jpg', 'Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing', 'Yes'),
(13, 'Idul Adha 2019 (2)', 'col-sm-3 col-xs-6 box', 'photo-13.jpg', 'Pemotongan Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing', 'Yes'),
(14, 'Idul Adha 2019 (3)', 'col-sm-3 col-xs-6 box', 'photo-14.jpg', 'Prosesn Pemotongan Sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing', 'Yes'),
(15, 'Idul Adha 2019 (4)', 'col-sm-3 col-xs-6 box', 'photo-15.jpg', 'Proses Pengolahan dan pemotongan daging sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing', 'Yes'),
(16, 'Idul Adha 2019 (5)', 'col-sm-6 col-xs-6 box', 'photo-16.jpg', 'Proses pembagian daging sapi Qurban CV. Cipta Sinergi Manufacturing dalam memperingati hari raya Idul Adha 2019 di lapangan CV. Cipta Sinergi Manufacturing', 'Yes'),
(17, 'Not just a team, it\'s SQUAD', 'col-sm-6 col-xs-6 box', 'photo-17.jpeg', 'Not just a team, it\'s SQUAD', 'Yes'),
(18, 'Manufacturing is dancing', 'col-sm-3 col-xs-6 box', 'photo-18.jpeg', 'Manufacturing is dancing', 'Yes'),
(19, 'Penghormatan Bendera Merah Putih', 'col-sm-3 col-xs-6 box', 'photo-19.jpeg', 'Penghormatan Bendera Merah Putih', 'Yes'),
(20, 'Family Gathering', 'col-sm-6 col-xs-6 box', 'photo-20.jpeg', 'Family Gathering', 'Yes'),
(21, 'Family Gathering', 'col-sm-6 col-xs-6 box', 'photo-21.jpeg', 'Family Gathering', 'Yes'),
(22, 'Family Gathering', 'col-sm-3 col-xs-6 box', 'photo-22.jpeg', 'Family Gathering', 'Yes'),
(23, 'Family Gathering', 'col-sm-6 col-xs-6 box', 'photo-23.jpeg', 'Family Gathering', 'Yes'),
(24, 'Family Gathering', 'col-sm-3 col-xs-6 box', 'photo-24.jpeg', 'Family Gathering', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
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
  `slug_portfolio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `meta_title`, `meta_keyword`, `meta_description`, `slug_portfolio`) VALUES
(1, 'FOOD BEVERAGE', 'In the production process not only made industrial equipment, but the entirety of the customer demand is definitely there.', 'In the production process not only made industrial equipment, but the entirety of the customer demand is definitely there. of the completeness of the manufacturing infrastructure of food, mold and other requirements we are ready to serve', '-', '-', '7-01-08', '10-01-08', '-', '-', 'manufacture and production of reliable, high-quality products.', '1', 'portfolio-1.jpg', 'FOOD BEVERAGE', '', '', 'food-beverage.html'),
(2, 'AUTOMOTIVE', 'Our production process has always relied on customer satisfaction, and where all the requests of customers we serve, as well as in the manufacture of parts or the whole of the automotive', 'Our production process has always relied on customer satisfaction, and where all the requests of customers we serve, as well as in the manufacture of automotive parts or in whole. ranging from the mold and the material basis of our own manufacture of ready made', '-', '-', '2019-08-29', '2019-08-29', '-', '-', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-2.jpg', 'AUTOMOTIVE', '', '', 'automotive.html'),
(3, 'MECHANICAL SYSTEM OF RADAR', 'Not just rely on the industry and we are also ready to assist the government and in the defense and security of the country.', 'Not just rely on the industry and we are also ready to assist the government and in the defense and security of the country. to assist in making the national radar, we are ready to strengthen the resilience and security of the country.', '-', '-', '08-04-2018', '22-06-2018', '-', '-', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-3.jpg', 'MECHANICAL SYSTEM OF RADAR', '', '', 'mechanical-system-of-radar.html'),
(4, 'COCKPIT SIMULATOR', 'Improving our service also makes a Head-Up Display (HUD) for the purposes of the cockpit Casing simulator.', 'Improving our service also makes a Head-Up Display (HUD) for the purposes of the cockpit Casing simulator.', '-', '-', '2019-08-29', '2019-08-29', '-', '-', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-4.jpg', 'COCKPIT SIMULATOR', '', '', 'cockpit-simulator.html'),
(5, 'RADAR DISPLAY UNIT CASING', 'Improving our service also makes Radar Display Unit (RDU) Casing for the purposes of cockpit simulator', 'in improving our service also makes Radar Display Unit (RDU) Casing for the purposes of cockpit simulator', '-', '-', '15-06-2018', '05-07-2018', '-', '-', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-5.jpg', 'RADAR DISPLAY UNIT CASING', '', '', 'radar-display-unit-casing.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_portfolio_category`
--

CREATE TABLE `tbl_portfolio_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_portfolio_category`
--

INSERT INTO `tbl_portfolio_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Industrial', 'Active'),
(2, 'Military', 'Active'),
(3, 'Aviation', 'Active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_portfolio_photo`
--

CREATE TABLE `tbl_portfolio_photo` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_portfolio_photo`
--

INSERT INTO `tbl_portfolio_photo` (`id`, `portfolio_id`, `photo`) VALUES
(17, 1, '17.jpg'),
(18, 1, '18.jpg'),
(19, 2, '19.jpg'),
(20, 2, '20.jpg'),
(21, 2, '21.jpg'),
(22, 2, '22.jpg'),
(23, 3, '23.jpg'),
(24, 3, '24.jpg'),
(25, 3, '25.jpg'),
(26, 4, '26.jpg'),
(27, 4, '27.jpg'),
(28, 5, '28.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_caption` varchar(255) NOT NULL,
  `product_style` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_show_home` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_caption`, `product_style`, `product_name`, `product_desc`, `product_show_home`) VALUES
(1, 'Air Nozzle Boiler', 'col-sm-3 col-xs-6 box', 'product-1.jpg', 'Air Nozzle Boiler', 'Yes'),
(2, 'Air Nozzle Boiler-2', 'col-sm-3 col-xs-6 box', 'product-2.jpg', 'Air Nozzle Boiler-2', 'Yes'),
(3, 'Arm Machining Part', 'col-sm-6 col-xs-6 box', 'product-3.jpg', 'Arm Machining Part', 'Yes'),
(4, 'Aviation Modul Part assy', 'col-sm-3 col-xs-6 box', 'product-4.jpg', 'Aviation Modul Part assy', 'Yes'),
(5, 'Ball Valve', 'col-sm-3 col-xs-6 box', 'product-5.jpg', 'Ball Valve', 'Yes'),
(6, 'Ball Valve-1', 'col-sm-6 col-xs-6 box', 'product-6.jpg', 'Ball Valve', 'Yes'),
(7, 'BOTTLE YAMALUBE 600ML BLOW MOLD', 'col-sm-3 col-xs-6 box', 'product-7.jpg', 'BOTTLE YAMALUBE 600ML BLOW MOLD', 'Yes'),
(8, 'Cam machining', 'col-sm-3 col-xs-6 box', 'product-8.jpg', 'Cam machining', 'Yes'),
(9, 'Can Scroll Cutter set', 'col-sm-3 col-xs-6 box', 'product-9.jpg', 'Can Scroll Cutter set', 'Yes'),
(10, 'Car Wheel Cavity Mold AHT', 'col-sm-6 col-xs-6 box', 'product-10.jpg', 'Car Wheel Cavity Mold AHT', 'Yes'),
(11, 'Car Wheel Cavity Mold with Insert Core Cavity', 'col-sm-3 col-xs-6 box', 'product-11.jpg', 'Car Wheel Cavity Mold with Insert Core Cavity.jpg', 'Yes'),
(12, 'Car Wheel Cavity Mold', 'col-sm-3 col-xs-6 box', 'product-12.jpg', 'Car Wheel Cavity Mold', 'Yes'),
(13, 'Casting Mold Cavity', 'col-sm-3 col-xs-6 box', 'product-13.jpg', 'Casting Mold Cavity', 'Yes'),
(14, 'Casting Sand Core Mold', 'col-sm-3 col-xs-6 box', 'product-14.jpg', 'Casting Sand Core Mold', 'Yes'),
(15, 'Cavity CNC Machining Part', 'col-sm-6 col-xs-6 box', 'product-15.jpg', 'Cavity CNC Machining Part', 'Yes'),
(16, 'Cavity for Casting Sand Core - 1', 'col-sm-3 col-xs-6 box', 'product-16.jpg', 'Cavity for Casting Sand Core - 1', 'Yes'),
(17, 'Cavity for Casting Sand Core - 2', 'col-sm-3 col-xs-6 box', 'product-17.jpg', 'Cavity for Casting Sand Core - 2', 'Yes'),
(18, 'Cavity for Casting Sand Core', 'col-sm-3 col-xs-6 box', 'product-18.jpg', 'Cavity for Casting Sand Core', 'Yes'),
(19, 'Cockpit Module Case - rear', 'col-sm-3 col-xs-6 box', 'product-19.jpg', 'Cockpit Module Case - rear', 'Yes'),
(20, 'Cockpit Module Case', 'col-sm-3 col-xs-6 box', 'product-20.jpg', 'Cockpit Module Case', 'Yes'),
(21, 'Feeder Conveyor Unit', 'col-sm-3 col-xs-6 box', 'product-21.jpg', 'Feeder Conveyor Unit', 'Yes'),
(22, 'Food Processing Part - Mold Plate', 'col-sm-3 col-xs-6 box', 'product-22.jpg', 'Food Processing Part - Mold Plate', 'Yes'),
(23, 'Food Processing Part - Steel Mold Plate', 'col-sm-6 col-xs-6 box', 'product-23.jpg', 'Food Processing Part - Steel Mold Plate', 'Yes'),
(24, 'Horn Antena Radar', 'col-sm-3 col-xs-6 box', 'product-24.jpg', 'Horn Antena Radar', 'Yes'),
(25, 'Horn Antena Radar-1', 'col-sm-6 col-xs-6 box', 'product-25.jpg', 'Horn Antena Radar-1', 'Yes'),
(26, 'Housing Pump', 'col-sm-3 col-xs-6 box', 'product-26.jpg', 'Housing Pump', 'Yes'),
(27, 'Individual Feeder System', 'col-sm-3 col-xs-6 box', 'product-27.jpg', 'Individual Feeder System', 'Yes'),
(28, 'Jig For Machining Process', 'col-sm-3 col-xs-6 box', 'product-28.jpg', 'Jig For Machining Process', 'Yes'),
(29, 'Lot Mark Holder SA25&#5 PAKO Karwheel', 'col-sm-3 col-xs-6 box', 'product-29.jpg', 'Lot Mark Holder SA25&#5 PAKO Karwheel', 'Yes'),
(30, 'Lot Mark Koja FR#7 PAKO Motorcycle M6', 'col-sm-3 col-xs-6 box', 'product-30.jpg', 'Lot Mark Koja FR#7 PAKO Motorcycle M6', 'Yes'),
(31, 'MDM Food Processing Part', 'col-sm-3 col-xs-6 box', 'product-31.jpg', 'MDM Food Processing Part', 'Yes'),
(32, 'MDM Food Processing Part-Blade', 'col-sm-6 col-xs-6 box', 'product-32.jpg', 'MDM Food Processing Part-Blade', 'Yes'),
(33, 'MDM Food Processing Part-Filter', 'col-sm-3 col-xs-6 box', 'product-33.jpg', 'MDM Food Processing Part-Filter', 'Yes'),
(34, 'Plastic Mold Set', 'col-sm-3 col-xs-6 box', 'product-34.jpg', 'Plastic Mold Set', 'Yes'),
(35, 'Pump Lube Part - with wear plate', 'col-sm-6 col-xs-6 box', 'product-35.jpg', 'Pump Lube Part - with wear plate', 'Yes'),
(36, 'Pump Lube Part', 'col-sm-3 col-xs-6 box', 'product-36.jpg', 'Pump Lube Part', 'Yes'),
(37, 'Pump Part - Lube', 'col-sm-3 col-xs-6 box', 'product-37.jpg', 'Pump Part - Lube', 'Yes'),
(38, 'Pump Part - Metering gear', 'col-sm-6 col-xs-6 box', 'product-38.jpg', 'Pump Part - Metering gear', 'Yes'),
(39, 'ROLLER POM BLACK', 'col-sm-3 col-xs-6 box', 'product-39.jpg', 'ROLLER POM BLACK', 'Yes'),
(40, 'ROTARY CLEANER MACHINE', 'col-sm-3 col-xs-6 box', 'product-40.jpg', 'ROTARY CLEANER MACHINE', 'Yes'),
(41, 'Rotary Forming Part - Plunger', 'col-sm-3 col-xs-6 box', 'product-41.jpg', 'Rotary Forming Part - Plunger', 'Yes'),
(42, 'Rotary Forming Part - Plunger', 'col-sm-6 col-xs-6 box', 'product-42.jpg', 'Rotary Forming Part - Plunger', 'Yes'),
(43, 'Short Plunger Eclair', 'col-sm-3 col-xs-6 box', 'product-43.jpg', 'Short Plunger Eclair', 'Yes'),
(44, 'Short Plunger Eclair', 'col-sm-3 col-xs-6 box', 'product-44.jpg', 'Short Plunger Eclair', 'Yes'),
(45, 'Slab Blind Bottling Marble Beat', 'col-sm-3 col-xs-6 box', 'product-45.jpg', 'Slab Blind Bottling Marble Beat', 'Yes'),
(46, 'Slab Blind Bottling Marble Beat', 'col-sm-3 col-xs-6 box', 'product-46.jpg', 'Slab Blind Bottling Marble Beat', 'Yes'),
(47, 'Slab Blind Bottling Marble Beat', 'col-sm-3 col-xs-6 box', 'product-47.jpg', 'Slab Blind Bottling Marble Beat', 'Yes'),
(48, 'Slab Bottle in Line 3x7 Marble Beat', 'col-sm-3 col-xs-6 box', 'product-48.jpg', 'Slab Bottle in Line 3x7 Marble Beat', 'Yes'),
(49, 'Slab Bottle in Line 3x7 Marble Beat', 'col-sm-3 col-xs-6 box', 'product-49.jpg', 'Slab Bottle in Line 3x7 Marble Beat', 'Yes'),
(50, 'SPRAY BOTTLE 500ML BLOW MOLD', 'col-sm-6 col-xs-6 box', 'product-50.jpg', 'SPRAY BOTTLE 500ML BLOW MOLD', 'Yes'),
(51, 'Transfer Pump', 'col-sm-3 col-xs-6 box', 'product-51.jpg', 'Transfer Pump', 'Yes'),
(52, 'Turbine Impeller assy-2', 'col-sm-3 col-xs-6 box', 'product-52.jpg', 'Turbine Impeller assy-2', 'Yes'),
(53, 'Turbine Impeller', 'col-sm-3 col-xs-6 box', 'product-53.jpg', 'Turbine Impeller', 'Yes'),
(54, 'Electronic Support Measures (ESM)', 'col-sm-3 col-xs-6 box', 'product-54.jpg', 'ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.', 'Yes'),
(55, 'Electronic Support Measures (ESM)', 'col-sm-3 col-xs-6 box', 'product-55.jpg', 'ELectronic INTelligence primarily dedicated to the interception and analysis of radar emissions from surveillance, fire-control or missile guidance radars, and is often allied to an ECM system to provide protection from these.', 'Yes'),
(56, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-56.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(57, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-57.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(58, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-58.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(59, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-59.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(60, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-60.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(61, 'Unnamed-Product [CSM]', 'col-sm-6 col-xs-6 box', 'product-61.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(62, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-62.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(63, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-63.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(64, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-64.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(65, 'Unnamed-Product [CSM]', 'col-sm-6 col-xs-6 box', 'product-65.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(66, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-66.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(67, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-67.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(68, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-68.jpg', 'Unnamed-Product [CSM]', 'Yes'),
(69, 'Unnamed-Product [CSM]', 'col-sm-3 col-xs-6 box', 'product-69.jpg', 'Unnamed-Product [CSM]', 'Yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `service_style` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `slug_service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `heading`, `service_style`, `short_content`, `content`, `photo`, `meta_title`, `meta_keyword`, `meta_description`, `slug_service`) VALUES
(1, 'CNC CAD-CAM PROFESSIONAL', 'col-page col-sm-6 col-md-4', 'Have a CAD-CAM CAD experienced and professional in product design for product quality and competitive products.', '<p></p><p>Have a great team in <b>CAD CAD-CAM that is experienced and professional</b> for product design and product quality for competitive products, and support with:<br></p><table class=\"table table-bordered\"><tbody><tr><td><b>Tools Designer<br></b></td><td><b>2 Person<br></b></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><b>CAD-CAM Engineer<br></b></td><td><b>2 Person<br></b></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><b>Tools Maker</b></td><td><b>2 Person</b><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><b>CAM Programmer<br></b></td><td><b>4 Person<br></b></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><b>Production Planner<br></b></td><td><b>1 Person<br></b></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p> </p><p></p>And support by :<p></p><ul><li><b>CNC Machining with a high-speed machine process</b> makes a product quality and high accuracy. <br></li></ul>', 'service-1.jpg', 'CNC CAD-CAM Profesional', '', '', 'cnc-cad-cam-professional.html'),
(2, 'TOOLING AND PRECISION PART', 'col-page col-sm-6 col-md-4', 'The proper coating is key to maximizing the operational efficiency of high-speed metal cutting tools.', 'The proper coating is key to maximizing the operational efficiency of high-speed metal cutting tools. We offer a variety of coatings to help optimize performance and extend the life of your cutting tools and inserts. Have a special spec? We can help match the proper coating to the tool and task.', 'service-2.jpg', 'TOOLING AND PRECISION PART', '', '', 'tooling-and-precision-part.html'),
(3, 'MOULD AND PLASTIC COMPONENT', 'col-page col-sm-6 col-md-4', 'Mould & Plastic Components for industrial applications.', 'We provide <b>Mold & Plastic Components</b> for industrial applications. with a variety of requests submitted, we make professional modeling and build of high quality.<br>', 'service-3.jpg', 'MOULD AND PLASTIC COMPONENT', '', '', 'mould-and-plastic-component.html'),
(4, 'DIES AND STAMPING COMPONENT', 'col-page col-sm-6 col-md-4', 'For the benefit of our Die Stamping customers, Bahrs Die & Stamping offers expert solid die and die component building, design and manufacturing services for progressive dies used in various industries.', 'For the benefit of our Die Stamping customers, Bahrs Die & Stamping offers expert solid die and die component building, design and manufacturing services for progressive dies used in various industries. Using state-of-the-art design software, our engineering and design team work with each client to manufacture accurate, high quality die components and tooling customized for each application.', 'service-4.jpg', 'DIES AND STAMPING COMPONENT', '', '', 'dies-and-stamping-component.html'),
(5, 'MECHANICAL SYSTEM', 'col-page col-sm-6 col-md-4', 'Having components and teams in mechanical systems that are experienced and produce quality products.', 'Having components and teams in <b>mechanical systems</b> that are experienced and produce quality products. with a professional talent for accuracy processing and engineering build a product.<br>', 'service-5.jpg', 'MECHANICAL SYSTEM', '', '', 'mechanical-system.html'),
(6, 'INDUSTRY TRAINING', 'col-page col-sm-6 col-md-4', 'Industry training for a beginner student in high school and college with work field training', 'Industry training for a beginner student in high school and college with work field training, and produce new talents in the development of the industry in a very quality factory environment.<br>', 'service-6.jpg', 'INDUSTRY TRAINING', '', '', 'industry-training.html');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
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
  `footer_address_icon` varchar(255) NOT NULL,
  `footer_phone_icon` varchar(255) NOT NULL,
  `footer_working_hour_icon` varchar(255) NOT NULL,
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
  `content_home_title` varchar(255) NOT NULL,
  `content_home_subtitle` varchar(255) NOT NULL,
  `content_home_status` varchar(10) NOT NULL,
  `service_title` varchar(255) NOT NULL,
  `service_subtitle` varchar(255) NOT NULL,
  `service_status` varchar(10) NOT NULL,
  `facility_title` varchar(255) NOT NULL,
  `facility_subtitle` varchar(255) NOT NULL,
  `facility_status` varchar(10) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_subtitle` varchar(255) NOT NULL,
  `portfolio_status` varchar(10) NOT NULL,
  `team_title` varchar(255) NOT NULL,
  `team_subtitle` varchar(255) NOT NULL,
  `team_status` varchar(10) NOT NULL,
  `testimonial_title` varchar(255) NOT NULL,
  `testimonial_subtitle` varchar(255) NOT NULL,
  `testimonial_status` varchar(10) NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_subtitle` varchar(255) NOT NULL,
  `faq_status` varchar(10) NOT NULL,
  `gallery_title` varchar(255) NOT NULL,
  `gallery_subtitle` varchar(255) NOT NULL,
  `gallery_status` varchar(10) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_subtitle` varchar(255) NOT NULL,
  `product_status` varchar(10) NOT NULL,
  `recent_post_title` varchar(255) NOT NULL,
  `recent_post_subtitle` varchar(255) NOT NULL,
  `recent_post_status` varchar(10) NOT NULL,
  `partner_title` varchar(255) NOT NULL,
  `partner_subtitle` varchar(255) NOT NULL,
  `partner_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `logo2`, `logo_admin`, `favicon`, `counter_bg`, `login_bg`, `footer_copyright`, `footer_address`, `footer_phone`, `footer_working_hour`, `footer_address_icon`, `footer_phone_icon`, `footer_working_hour_icon`, `footer_about`, `top_bar_email`, `top_bar_phone`, `contact_map_iframe`, `receive_email`, `receive_password`, `protocol`, `smtp_host`, `smtp_port`, `reset_password_email_subject`, `total_recent_post`, `total_popular_post`, `total_recent_post_home`, `total_product_post`, `theme_color_1`, `theme_color_2`, `counter1_text`, `counter1_value`, `counter2_text`, `counter2_value`, `counter3_text`, `counter3_value`, `counter4_text`, `counter4_value`, `counter_status`, `banner`, `content_home_title`, `content_home_subtitle`, `content_home_status`, `service_title`, `service_subtitle`, `service_status`, `facility_title`, `facility_subtitle`, `facility_status`, `portfolio_title`, `portfolio_subtitle`, `portfolio_status`, `team_title`, `team_subtitle`, `team_status`, `testimonial_title`, `testimonial_subtitle`, `testimonial_status`, `faq_title`, `faq_subtitle`, `faq_status`, `gallery_title`, `gallery_subtitle`, `gallery_status`, `product_title`, `product_subtitle`, `product_status`, `recent_post_title`, `recent_post_subtitle`, `recent_post_status`, `partner_title`, `partner_subtitle`, `partner_status`) VALUES
(1, 'logo.png', 'logo2.png', 'logo_admin.png', 'favicon.png', 'counter_bg.JPG', 'login_bg.png', 'Copyright © 2019 | CV. Cipta Sinergi Manufacturing', 'Jl. Kamarung No.88 B, RT.004/RW.04, Citeureup, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40512', '(022) 6647945', 'Monday - Friday (8:00 AM - 5:00 PM)', 'footer_address_icon.png', 'footer_phone_icon.png', 'footer_working_hour_icon.png', '', 'marketing@ciptasinergi.com', '(022) 6647945', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15845.177204490785!2d107.551033!3d-6.8552849!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x602a56a5b8d7e0cc!2sCV.+Cipta+Sinergi+Manufacturing!5e0!3m2!1sid!2sid!4v1565082522509!5m2!1sid!2sid\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'encep.suryanajr@gmail.com', 'Password', 'smtp', 'ssl://smtp.gmail.com', '465', 'Password Reset Request - www.ciptasinergi.com', 4, 4, 10, 7, '134595', 'FFFFFF', 'Employee\'s', 50, 'Project Finish', 1200, 'Projects On-going', 800, 'Award\'s', 1200, '', 'banner.png', 'WHY CHOOSE US?', '', 'Show', 'SERVICES', '', 'Show', 'FACILITY', '', 'Show', 'PORTFOLIO', '', 'Show', 'MEET WITH OUR TEAM', '', 'Show', 'WHAT A CLIENT SAY', '', 'Show', 'Have more question ? Just Contact Us', '', 'Show', 'PHOTO GALLERY', '', 'Show', 'Our Featured Products', 'Gallery Produk Unggunal Kami', 'Show', 'LATEST NEWS', '', 'Show', 'OUR PARTNER', '', 'Show');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`) VALUES
(1, 'slider-1.JPG', 'being an educator for student internship', 'A place for student internships from various vocational schools in Indonesia, to learn how to use CNC machines and manual machines.', 'Read More', 'csm-career', 'Contact Us', 'contact'),
(2, 'slider-2.JPG', 'HIGH PROCESSING ENGINE', 'Using machines that are very fast in product processing, with very high accuracy so as to create products that can compete with others.', 'Read More', 'facility', 'About Us', 'about');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', '#', 'fa fa-facebook'),
(2, 'Twitter', '#', 'fa fa-twitter'),
(3, 'LinkedIn', '#', 'fa fa-linkedin'),
(4, 'Google Plus', '#', 'fa fa-google-plus'),
(5, 'Pinterest', '#', 'fa fa-pinterest'),
(6, 'YouTube', '', 'fa fa-youtube'),
(7, 'Instagram', '', 'fa fa-instagram'),
(8, 'Tumblr', '', 'fa fa-tumblr'),
(9, 'Flickr', '', 'fa fa-flickr'),
(10, 'Reddit', '', 'fa fa-reddit'),
(11, 'Snapchat', '', 'fa fa-snapchat'),
(12, 'WhatsApp', '', 'fa fa-whatsapp'),
(13, 'Quora', '', 'fa fa-quora'),
(14, 'StumbleUpon', '', 'fa fa-stumbleupon'),
(15, 'Delicious', '', 'fa fa-delicious'),
(16, 'Digg', '', 'fa fa-digg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `flickr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`id`, `name`, `designation_id`, `photo`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`) VALUES
(1, 'Nanjar Nugraha', 1, 'team-member-1.png', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', '', '', ''),
(2, 'Iyus Rusmana', 2, 'team-member-2.png', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', '', '', ''),
(3, 'Aman Wardana', 3, 'team-member-3.png', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', '', '', ''),
(4, 'Ripki Budiman', 4, 'team-member-4.png', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', '', '', ''),
(5, 'Harkat', 5, 'team-member-5.png', 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedin.com', 'http://www.youtube.com', '', '', ''),
(6, 'Hendi Priyono', 6, 'team-member-6.png', '', '', '', '', '', '', ''),
(7, 'Ahmad Suparto', 7, 'team-member-7.png', '', '', '', '', '', '', ''),
(8, 'Bakti Ramdani', 8, 'team-member-8.png', '', '', '', '', '', '', ''),
(9, 'Aman Wardana', 9, 'team-member-9.png', '#', '#', '#', '#', '', '', ''),
(10, 'Rahmat Satuhu', 10, 'team-member-10.png', '#', '#', '#', '#', '', '', ''),
(11, 'Taupik', 11, 'team-member-11.png', '#', '#', '#', '#', '', '', ''),
(12, 'Hendi Prayitno', 12, 'team-member-12.png', '#', '#', '#', '#', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `company`, `photo`, `comment`) VALUES
(1, 'John Doe', 'Managing Director', 'ABC Inc.', 'testimonial-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.'),
(2, 'Dadiv Smith', 'CEO', 'SS Multimedia', 'testimonial-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.'),
(3, 'Stefen Carman', 'Chairman', 'GH Group', 'testimonial-3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.'),
(4, 'Gary Brent', 'CFO', 'XYZ It Solution', 'testimonial-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit quo illo corporis nemo consectetur nobis maxime porro obcaecati accusamus, veniam impedit. Soluta esse dolorem saepe architecto similique odit quae ut.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimonial_photo`
--

CREATE TABLE `tbl_testimonial_photo` (
  `id` int(11) NOT NULL,
  `main_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimonial_photo`
--

INSERT INTO `tbl_testimonial_photo` (`id`, `main_photo`) VALUES
(1, 'testimonial-main-photo.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`, `token`) VALUES
(1, 'Encep Suryana', 'encep.suryanajr@gmail.com', '082129714260', 'e4e05d342730456fcf3d8c87e95d5748', 'avatar-1.png', 'admin', 'Active', ''),
(2, 'HRD', 'hrd@gmail.com', '082129714260', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-2.png', 'hrd', 'Active', ''),
(3, 'Staff', 'staff@gmail.com', '082129714260', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-3.png', 'staff', 'Active', ''),
(4, 'Admin', 'admin@gmail.com', '082129714260', 'e10adc3949ba59abbe56e057f20f883e', 'avatar-4.png', 'admin', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_content_home`
--
ALTER TABLE `tbl_content_home`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_content_home_company_profile`
--
ALTER TABLE `tbl_content_home_company_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indeks untuk tabel `tbl_electronics_division`
--
ALTER TABLE `tbl_electronics_division`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_electronics_division_category`
--
ALTER TABLE `tbl_electronics_division_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tbl_electronics_division_desc`
--
ALTER TABLE `tbl_electronics_division_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_electronics_division_photo`
--
ALTER TABLE `tbl_electronics_division_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_facility`
--
ALTER TABLE `tbl_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_facility_category`
--
ALTER TABLE `tbl_facility_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tbl_facility_photo`
--
ALTER TABLE `tbl_facility_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indeks untuk tabel `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indeks untuk tabel `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indeks untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indeks untuk tabel `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_testimonial_photo`
--
ALTER TABLE `tbl_testimonial_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_content_home`
--
ALTER TABLE `tbl_content_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_content_home_company_profile`
--
ALTER TABLE `tbl_content_home_company_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_electronics_division`
--
ALTER TABLE `tbl_electronics_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_electronics_division_category`
--
ALTER TABLE `tbl_electronics_division_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_electronics_division_desc`
--
ALTER TABLE `tbl_electronics_division_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_electronics_division_photo`
--
ALTER TABLE `tbl_electronics_division_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_facility`
--
ALTER TABLE `tbl_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_facility_category`
--
ALTER TABLE `tbl_facility_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_facility_photo`
--
ALTER TABLE `tbl_facility_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT untuk tabel `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimonial_photo`
--
ALTER TABLE `tbl_testimonial_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
