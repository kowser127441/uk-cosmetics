-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 09:26 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uk_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_access`
--

CREATE TABLE IF NOT EXISTS `admin_access` (
  `admin_id` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_access`
--

INSERT INTO `admin_access` (`admin_id`, `password`, `type`) VALUES
('admin', 'b619ba32353fe348c2c1551c22773fe4:8E2I810P1X4Z5131QNKZ29HDDZW3B5V3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advertaisement`
--

CREATE TABLE IF NOT EXISTS `advertaisement` (
  `position` int(3) NOT NULL,
  `pic_url` varchar(500) NOT NULL DEFAULT 'null',
  `code` varchar(5000) NOT NULL DEFAULT 'null',
  `flash` varchar(500) NOT NULL DEFAULT 'null',
  `height` int(4) NOT NULL,
  `url` varchar(500) NOT NULL DEFAULT 'null',
  PRIMARY KEY (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertaisement`
--

INSERT INTO `advertaisement` (`position`, `pic_url`, `code`, `flash`, `height`, `url`) VALUES
(1, 'ADD_PICTURE/1/Animation(1).gif', 'null', 'null', 0, 'http://www.aiub.edu');

-- --------------------------------------------------------

--
-- Table structure for table `background_image`
--

CREATE TABLE IF NOT EXISTS `background_image` (
  `pic_url` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `background_image`
--

INSERT INTO `background_image` (`pic_url`) VALUES
('BACKGROUND_IMAGE/Liton061817 (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(20) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(500) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(4, 'The Body Shop'),
(5, 'Marks & Spencer'),
(6, 'Loreal '),
(7, 'Nivea'),
(8, 'Mothercare'),
(9, 'Boots '),
(10, 'Superdrug'),
(11, 'Neutrogena '),
(12, 'Pantene'),
(13, 'Tresemme'),
(14, 'Sensodyne'),
(15, 'Aquafresh'),
(16, 'Macleans'),
(17, 'Heinz'),
(18, 'Cow & Gate'),
(19, 'Demo Brand');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(500) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Make Up'),
(2, 'Skin'),
(3, 'Perfume'),
(4, 'Hair'),
(5, 'Toiletries '),
(6, 'Mens'),
(7, 'Baby'),
(8, 'Electricals '),
(9, 'Food'),
(10, 'Clothing'),
(11, 'Chocolate'),
(12, 'Gift Shop');

-- --------------------------------------------------------

--
-- Table structure for table `category_slider_image`
--

CREATE TABLE IF NOT EXISTS `category_slider_image` (
  `position` int(5) NOT NULL,
  `pic_url` varchar(200) NOT NULL,
  `category_id` int(5) NOT NULL,
  PRIMARY KEY (`position`,`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_slider_image`
--

INSERT INTO `category_slider_image` (`position`, `pic_url`, `category_id`) VALUES
(1, 'CATEGORY_SLIDER_IMAGE/1/1/553585_575443709159597_466772234_n.jpg', 1),
(1, 'CATEGORY_SLIDER_IMAGE/2/1/994295_574552895915345_1162178331_n.jpg', 2),
(1, 'CATEGORY_SLIDER_IMAGE/3/1/1009893_574467469257221_1996140398_n.jpg', 3),
(1, 'CATEGORY_SLIDER_IMAGE/4/1/1175348_573925929311375_663425937_n.jpg', 4),
(1, 'CATEGORY_SLIDER_IMAGE/6/1/e1113dbgs_fabnfresh.jpg', 6),
(1, 'CATEGORY_SLIDER_IMAGE/11/1/526857_321857827959097_665807748_n.jpg', 11),
(2, 'CATEGORY_SLIDER_IMAGE/1/2/562735_574553429248625_1273257024_n.jpg', 1),
(2, 'CATEGORY_SLIDER_IMAGE/2/2/994345_575498919154076_444141998_n.jpg', 2),
(2, 'CATEGORY_SLIDER_IMAGE/3/2/1011575_575499039154064_95296358_n.jpg', 3),
(2, 'CATEGORY_SLIDER_IMAGE/4/2/1255475_573843669319601_1500870117_n.jpg', 4),
(3, 'CATEGORY_SLIDER_IMAGE/1/3/582118_573819422655359_1841876149_n.jpg', 1),
(3, 'CATEGORY_SLIDER_IMAGE/2/3/1009883_575770295793605_1800437047_n.jpg', 2),
(3, 'CATEGORY_SLIDER_IMAGE/3/3/1175140_575576665812968_91190305_n.jpg', 3),
(3, 'CATEGORY_SLIDER_IMAGE/4/3/1237784_573843899319578_359134373_n.jpg', 4),
(4, 'CATEGORY_SLIDER_IMAGE/2/4/1240389_573879875982647_349467098_n.jpg', 2),
(4, 'CATEGORY_SLIDER_IMAGE/11/4/46437_4819049649145_286225300_n.jpg', 11);

-- --------------------------------------------------------

--
-- Table structure for table `favourites`
--

CREATE TABLE IF NOT EXISTS `favourites` (
  `product_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `sub_category_id` int(20) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `position` int(20) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `favourites`
--

INSERT INTO `favourites` (`product_id`, `category_id`, `sub_category_id`, `brand_id`, `position`) VALUES
(112, 1, 79, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_url` varchar(200) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `pic_url`) VALUES
(5, 'IMAGE//m151-utility-vehicle-vector_626082.jpg'),
(7, 'IMAGE//Buffalo_mine-protected_vehicle.jpg'),
(8, 'IMAGE//BMW.jpg'),
(9, 'IMAGE//59215_360856110692556_53721190_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders_product`
--

CREATE TABLE IF NOT EXISTS `orders_product` (
  `order_id` int(200) NOT NULL,
  `product_id` int(200) NOT NULL,
  `quantity` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders_product`
--

INSERT INTO `orders_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 52, 1),
(1, 58, 1),
(3, 41, 1),
(3, 39, 1),
(3, 32, 6),
(1, 52, 1),
(1, 54, 1),
(1, 58, 1),
(3, 109, 1),
(4, 41, 1),
(5, 41, 6),
(6, 52, 1),
(7, 109, 1),
(7, 53, 6),
(8, 110, 1),
(10, 52, 1),
(12, 52, 1),
(13, 43, 1),
(14, 111, 21),
(15, 111, 21),
(16, 111, 2),
(17, 111, 6),
(20, 111, 3),
(21, 111, 3),
(22, 111, 5),
(23, 111, 5),
(24, 111, 1),
(25, 111, 1),
(26, 111, 1),
(0, 111, 3),
(28, 111, 6),
(0, 111, 6),
(0, 111, 4),
(0, 111, 5),
(0, 111, 50),
(0, 111, 1),
(34, 111, 21),
(35, 111, 10),
(36, 111, 5),
(37, 111, 2),
(39, 111, 3),
(42, 111, 1),
(43, 112, 1),
(46, 111, 1),
(47, 111, 1),
(48, 111, 1),
(49, 111, 1),
(50, 111, 1),
(51, 111, 1),
(52, 111, 1),
(53, 111, 1),
(54, 111, 1),
(55, 111, 1),
(56, 111, 1),
(57, 111, 1),
(58, 111, 1),
(59, 111, 1),
(60, 111, 1),
(60, 112, 1),
(61, 111, 1),
(61, 112, 1),
(62, 111, 1),
(62, 112, 1),
(63, 111, 1),
(63, 112, 1),
(64, 111, 1),
(64, 112, 1),
(65, 111, 1),
(66, 111, 1),
(67, 111, 1),
(68, 111, 1),
(69, 111, 1),
(70, 111, 1),
(71, 111, 1),
(72, 111, 1),
(73, 111, 1),
(74, 111, 1),
(75, 111, 1),
(76, 111, 1),
(77, 111, 1),
(78, 111, 1),
(79, 111, 1),
(80, 111, 1),
(81, 111, 1),
(82, 111, 1),
(83, 111, 1),
(84, 111, 1),
(85, 111, 1),
(86, 111, 1),
(87, 111, 1),
(88, 111, 1),
(89, 111, 1),
(90, 111, 1),
(91, 111, 1),
(92, 111, 1),
(93, 111, 1),
(94, 111, 1),
(95, 111, 1),
(96, 111, 1),
(97, 111, 1),
(98, 111, 1),
(99, 111, 1),
(100, 111, 1),
(101, 111, 1),
(102, 111, 1),
(103, 111, 1),
(104, 111, 1),
(105, 111, 1),
(106, 111, 1),
(107, 111, 1),
(108, 111, 1),
(109, 111, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE IF NOT EXISTS `order_table` (
  `order_id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'new',
  `tracking_number` varchar(200) NOT NULL,
  `shipping_address` text NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `buy_point` int(200) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=111 ;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `user_id`, `date`, `status`, `tracking_number`, `shipping_address`, `payment_type`, `buy_point`) VALUES
(29, 'kowser127441@yahoo.com', '2013-11-07', 'new', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'cash', 0),
(30, 'kowser127441@yahoo.com', '2013-11-07', 'new', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'point', 120),
(31, 'kowser127441@yahoo.com', '2013-11-07', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(32, 'kowser127441@yahoo.com', '2013-11-07', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(33, 'kowser127441@yahoo.com', '2013-11-07', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(34, 'kowser127441@yahoo.com', '2013-11-07', 'success', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(35, 'kowser127441@yahoo.com', '2013-11-07', 'success', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'point', 300),
(36, 'kowser127441@yahoo.com', '2013-11-23', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(37, 'cc@cc.com', '2013-11-30', 'success', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'cash', 0),
(38, 'cc@cc.com', '2013-11-30', 'success', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'cash', 0),
(39, 'cc@cc.com', '2013-11-30', 'success', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'cash', 0),
(40, 'cc@cc.com', '2013-11-30', 'new', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'cash', 0),
(41, 'cc@cc.com', '2013-11-30', 'new', '', 'From Store :  Our Store Address: Gulshan 1, DCC Market, Shop No.207', 'cash', 0),
(42, 'kowser127441@yahoo.com', '2013-11-30', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(43, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(44, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(45, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(46, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(47, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(48, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(49, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(50, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(51, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(52, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(53, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(54, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(55, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(56, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(57, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(58, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(59, 'kowser127441@yahoo.com', '2013-12-16', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(60, 'kowser127441@yahoo.com', '2013-12-17', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(61, 'kowser127441@yahoo.com', '2013-12-17', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(62, 'kowser127441@yahoo.com', '2013-12-17', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(63, 'kowser127441@yahoo.com', '2013-12-17', 'pending', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(64, 'kowser127441@yahoo.com', '2013-12-17', 'dispass', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(65, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(66, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(67, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(68, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(69, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(70, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(71, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(72, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(73, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(74, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(75, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(76, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(77, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(78, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(79, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(80, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(81, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(82, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(83, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(84, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(85, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(86, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(87, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(88, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(89, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(90, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(91, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(92, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(93, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(94, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(95, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(96, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(97, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(98, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(99, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(100, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(101, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(102, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(103, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(104, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(105, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(106, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(107, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(108, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(109, 'kowser127441@yahoo.com', '2013-12-19', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0),
(110, 'kowser127441@yahoo.com', '2013-12-23', 'new', '', '811 Dhaka 811, East jurain , Dhaka , Bangladesh', 'cash', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(200) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(500) NOT NULL,
  `category_id` int(200) NOT NULL,
  `sub_category_id` int(200) NOT NULL,
  `type_id` int(200) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `details` longtext NOT NULL,
  `terms` longtext NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `discount` int(20) NOT NULL,
  `discount_available` varchar(20) NOT NULL DEFAULT 'null',
  `discount_duration` int(20) NOT NULL,
  `discount_date` datetime NOT NULL,
  `purchase_price_1` int(200) NOT NULL,
  `sale_price` int(200) NOT NULL,
  `quantity_1` int(200) NOT NULL,
  `purchase_price_2` int(200) NOT NULL,
  `quantity_2` int(200) NOT NULL,
  `buy_point` int(200) NOT NULL,
  `earn_point` int(200) NOT NULL,
  `brand_id` int(200) NOT NULL,
  `picture_url` varchar(500) NOT NULL,
  `total_rating` int(200) NOT NULL DEFAULT '0',
  `no_of_rating` int(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=114 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `category_id`, `sub_category_id`, `type_id`, `product_code`, `details`, `terms`, `size`, `color`, `discount`, `discount_available`, `discount_duration`, `discount_date`, `purchase_price_1`, `sale_price`, `quantity_1`, `purchase_price_2`, `quantity_2`, `buy_point`, `earn_point`, `brand_id`, `picture_url`, `total_rating`, `no_of_rating`) VALUES
(111, 'RAINFOREST MOISTURE SHAMPOO ', 2, 83, 74, 'R101', 'Gently cleanses to help restore moisture and improve the hairâ€™s softness without weighing it down, for a smooth and shiny finish.\r\nContains pracaxi oil, manketti nut oil and Community Trade honey and sugar.\r\nNo silicones, no sulphates, no parabens and no colourants For dry and damaged hair.    ', 'Product Delivery is entirely Subject to availability of Stock * Once sold, product cannot be returned or replaced until it has a Warranty; please check your Product at the time of delivery; If you find your product defective, you have to contact london Cosmetics Customer Service Department within 24 hours    ', '250 ML', '', 0, 'null', 0, '0000-00-00 00:00:00', 200, 250, 0, 0, 0, 30, 5, 4, 'PICTURE/2/83/111/66154_518470898244928_75445152_n.jpg', 0, 0),
(112, 'demo product', 1, 79, 67, '1200', '<h2 style="border: 0px; font-size: 18px; margin-top: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; background-color: rgb(255, 255, 255);">(For Beautycard Terms and Conditions, please visit:&nbsp;<a href="http://www.uk-cosmetics.com/beautycard/beautycard-terms-and-conditions/page/beautycardterms" style="border: 0px; font-weight: 400; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Beautycard Terms and Conditions</a>)</h2><h3 style="border: 0px; font-size: 16px; margin-top: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; background-color: rgb(255, 255, 255);"><a href="http://londoncosmeticsbd.com/content/ebiz/uk-cosmetics/page/termsandconditions/termsandconditionsv2.pdf" target="_blank" style="border: 0px; font-weight: 400; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Download as a PDF click here</a></h3><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">This page (together with the documents referred to on it) tells you the terms and conditions (<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Terms &amp; Conditions</span>) on which we supply any of the products (Products) listed on our website www.uk-cosmetics.com (the&nbsp;<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Site</span>) to you. Please read these Terms &amp; Conditions carefully before ordering any&nbsp;<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Products</span>&nbsp;from our Site. You should understand that by ordering any of our Products, you agree to be bound by these Terms &amp; Conditions. You can print a copy of these Terms &amp; Conditions by selecting the print option from the â€œFileâ€ menu of your browser. Please also note that the use of the Site is subject to the terms contained in the&nbsp;<a href="http://www.uk-cosmetics.com/website-terms-of-use/page/disclaimer" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Disclaimer</a>&nbsp;document, which apply whether or not you order any Products from the Site. You should also read our&nbsp;<a href="http://www.uk-cosmetics.com/help+info/privacy-policy/page/privacypolicy" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Privacy Policy</a>.</p><h2 style="border: 0px; font-size: 18px; margin-top: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; background-color: rgb(255, 255, 255);">1. Information about us</h2><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">The Site is operated by uk-cosmetics Stores plc (<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">we</span>&nbsp;/&nbsp;<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">us</span>). We are registered in England and Wales under company number 00807043 and with our registered office at 118 Beddington Lane, Croydon, Surrey CR0 4TB. Our VAT registration number is 777947160.</p>', '<h3 style="border: 0px; font-size: 16px; margin-top: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; background-color: rgb(255, 255, 255);"><a href="http://londoncosmeticsbd.com/content/ebiz/uk-cosmetics/page/termsandconditions/termsandconditionsv2.pdf" target="_blank" style="border: 0px; font-weight: 400; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Download as a PDF click here</a></h3><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">This page (together with the documents referred to on it) tells you the terms and conditions (<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Terms &amp; Conditions</span>) on which we supply any of the products (Products) listed on our website www.uk-cosmetics.com (the&nbsp;<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Site</span>) to you. Please read these Terms &amp; Conditions carefully before ordering any&nbsp;<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">Products</span>&nbsp;from our Site. You should understand that by ordering any of our Products, you agree to be bound by these Terms &amp; Conditions. You can print a copy of these Terms &amp; Conditions by selecting the print option from the â€œFileâ€ menu of your browser. Please also note that the use of the Site is subject to the terms contained in the&nbsp;<a href="http://www.uk-cosmetics.com/website-terms-of-use/page/disclaimer" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Disclaimer</a>&nbsp;document, which apply whether or not you order any Products from the Site. You should also read our&nbsp;<a href="http://www.uk-cosmetics.com/help+info/privacy-policy/page/privacypolicy" style="border: 0px; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141);">Privacy Policy</a>.</p><h2 style="border: 0px; font-size: 18px; margin-top: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; background-color: rgb(255, 255, 255);">1. Information about us</h2><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);">The Site is operated by uk-cosmetics Stores plc (<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">we</span>&nbsp;/&nbsp;<span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">us</span>). We are registered in England and Wales under company number 00807043 and with our registered office at 118 Beddington Lane, Croydon, Surrey CR0 4TB. Our VAT registration number is 777947160.</p><h2 style="border: 0px; font-size: 18px; margin-top: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(239, 1, 141); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; background-color: rgb(255, 255, 255);">2. How the contract is formed between you and us</h2><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);"><span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">2.1</span>&nbsp;You may place an order to purchase a Product advertised for sale on the Site by following the onscreen prompts after clicking on the item you are interested in. You will have an opportunity to check and correct any input errors in your order up until the point at which you submit your order by clicking the â€œPay Nowâ€ button on the â€œOrder Summaryâ€ page.</p><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);"><span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">2.2</span>&nbsp;After placing an order, you will receive an e-mail from us acknowledging that we have received your order and giving an order number and a summary of your order. Please note that this does not mean that your order has been accepted. Your order constitutes an offer to us to buy a Product. All orders are subject to acceptance by us, and we will confirm such acceptance to you by sending you an e-mail that confirms that the Product has been dispatched (the Dispatch Confirmation). The contract between us will only be formed when we send you the Dispatch Confirmation.</p><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);"><span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">2.3</span>&nbsp;The Contract will relate only to those Products whose dispatch we have confirmed in the Dispatch Confirmation. We will not be obliged to supply any other Products which may have been part of your order until the dispatch of such Products has been confirmed in a separate Dispatch Confirmation.</p><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);"><span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">2.4</span>&nbsp;We may choose not to accept your order for any reason and we will not be liable to you or to anyone else in those circumstances.</p><p style="border: 0px; font-size: 12px; margin-bottom: 0.9em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(34, 34, 34); font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif; line-height: 18px; background-color: rgb(255, 255, 255);"><span style="border: 0px; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;">2.5</span>&nbsp;We may be unable to process your order if:<br>(a)the Product you ordered is out of stock or discontinued; or&nbsp;<br>(b)there is a problem with authorisation of the payment on your credit card.</p>', 'Small', 'Ash', 0, 'null', 0, '0000-00-00 00:00:00', 500, 800, 0, 0, 0, 2000, 20, 4, 'PICTURE/1/79/112/179930_476030399133514_1640841761_n.jpg', 0, 0),
(113, 'Kitkat', 11, 100, 134, '127441', '<font color="#ff3399"><b>Here Is some Details About KitKAt</b></font>', '<b style="color: rgb(255, 51, 153);">Here Is some Terms and Condition About KitKAt</b><br>', '', '', 0, 'null', 0, '0000-00-00 00:00:00', 50, 60, 0, 0, 0, 20, 1, 19, 'PICTURE/11/100/113/38900_1377099750872_1333213214_928389_8276127_n.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE IF NOT EXISTS `product_type` (
  `type_id` int(200) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(200) NOT NULL,
  `sub_category_id` int(200) NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=135 ;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`type_id`, `type_name`, `sub_category_id`) VALUES
(64, 'Make Up Brushes ', 79),
(65, 'Make Up Applicators', 79),
(66, 'Make up Bags & Cases ', 79),
(67, 'Eye Brow Pencil', 79),
(68, 'Eye Shadow', 80),
(69, 'Eye Liner', 80),
(70, 'Mascara ', 80),
(71, 'Lipstick', 81),
(72, 'Lip Gloss', 81),
(73, 'Lip Liner', 81),
(74, 'Body Moisturisers', 82),
(75, 'Hand Moisturisers', 82),
(76, 'Cocoa Butter', 82),
(77, 'Self tan body', 83),
(78, 'Wash Off', 83),
(79, 'Bronzing Prep', 83),
(80, 'Face Moisturisers', 84),
(81, 'Clear skin', 84),
(82, 'Cleansers & Scrubs', 84),
(83, 'Tissues', 101),
(84, 'Pocket Pack', 101),
(85, 'Face Moisturisers', 101),
(86, 'Lip Gloss', 102),
(87, 'Lipstick', 102),
(88, 'Lip Balm', 102),
(89, 'Mens Moisturisers', 103),
(90, 'Aftershave Balm', 103),
(91, 'Mens Facewash', 103),
(92, 'Medium SPF 6 - 15', 104),
(93, 'Extra High SPF 30+', 104),
(94, 'Suncare Baby & Kids', 104),
(95, 'Insect Repellent', 105),
(96, 'Everyday Conditioners', 78),
(97, 'Professional Conditioner', 78),
(98, 'Ethnic Conditioner', 78),
(99, 'Everyday Shampoo', 77),
(100, 'Dry Shampoo', 77),
(101, 'Anti-Dandruff Shampoo', 77),
(102, 'Washing & bathing accessories', 85),
(103, 'Gloves & Mitts', 85),
(104, 'Mens Accessories', 85),
(105, 'Shower Gel', 86),
(106, 'Shower Cream', 86),
(107, 'Handwash', 86),
(108, 'Manual Toothbrush', 87),
(109, 'Mouthwash', 87),
(110, 'Everyday Toothpaste', 87),
(111, 'Mens Moisturisers', 88),
(112, 'Body Sprays For Him', 88),
(113, 'Anti-Perspirant Sprays For Him', 88),
(114, 'Mens Shampoo', 89),
(115, 'Anti-Dandruff Shampoo', 89),
(116, 'Everyday Shampoo', 89),
(117, 'Dove', 90),
(118, 'Lynx', 90),
(119, 'Adidas ', 90),
(120, 'Bath & Wash', 91),
(121, 'Shower Gel', 91),
(122, 'Creams & Lotions', 91),
(123, 'Multi Pack', 92),
(124, 'Travel Size', 92),
(125, 'Pampers', 93),
(126, 'Huggies', 93),
(127, 'My Little Star', 93),
(128, 'Hair Removal Electricals', 94),
(129, 'Waxing ', 94),
(130, 'Health Electricals', 94),
(131, 'Hair dryers', 95),
(132, 'Hair straightener', 95),
(133, 'Shaving Electricals', 96),
(134, 'Demo type', 100);

-- --------------------------------------------------------

--
-- Table structure for table `random_details`
--

CREATE TABLE IF NOT EXISTS `random_details` (
  `position` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `details` longtext NOT NULL,
  `sort_details1` varchar(500) NOT NULL,
  `sort_details2` varchar(500) NOT NULL,
  `pic_url` varchar(200) NOT NULL,
  `link1` varchar(500) NOT NULL,
  `link2` varchar(500) NOT NULL,
  PRIMARY KEY (`position`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `random_details`
--

INSERT INTO `random_details` (`position`, `title`, `details`, `sort_details1`, `sort_details2`, `pic_url`, `link1`, `link2`) VALUES
(1, 'Demo Title', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -1', 'RANDOME_IMAGE/1/20131129_160808.jpg', 'index.php', 'index.php'),
(2, 'Demo Title - 2', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/2/545157_441179222560813_877790121_n.jpg', '', ''),
(3, 'Demo Title - 3', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/3/540678_565825876762813_1776314545_n.jpg', '', ''),
(4, 'Demo Title - 4', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/4/207430_298066843638150_1610385052_n.jpg', '', ''),
(5, 'Demo Title - 5', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/5/21017_359214334190067_550829645_n.jpg', '', ''),
(6, 'Demo Title - 6', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/6/66154_518470898244928_75445152_n.jpg', '', '');
INSERT INTO `random_details` (`position`, `title`, `details`, `sort_details1`, `sort_details2`, `pic_url`, `link1`, `link2`) VALUES
(7, 'Demo Title - 7', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/7/945385_522138154522233_352215708_n.jpg', '', ''),
(8, 'Demo Title - 8', '<div id="container">\r\n<table cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//59215_360856110692556_53721190_n.jpg" style="border-style:solid; border-width:2px; height:278px; width:750px" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n&nbsp;\r\n\r\n<table border="0" cellpadding="1" cellspacing="1" style="width:750px">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-1</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-2</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-3</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-4</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-5</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-6</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-7</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n			<td>\r\n			<p><a href="http://www.facebook.com/dany.aiub"><img alt="" src="http://localhost/uk-cosmetics/control_panel/IMAGE//BMW.jpg" style="border-style:solid; border-width:2px; float:left; height:85px; opacity:0.9; width:150px" /></a></p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center">&nbsp;</p>\r\n\r\n			<p style="text-align:center"><span style="font-size:20px"><strong>Product-8</strong></span></p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center">Some Details of the</p>\r\n\r\n			<p style="text-align:center">Product&nbsp;</p>\r\n\r\n			<p style="text-align:center"><input name="Add To Cart" type="button" value="Add To Cart" /></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'Short Description -1', 'Short Description -2', 'RANDOME_IMAGE/8/21106_295099740601527_519552742_n.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `product_id` int(11) NOT NULL,
  `headline` varchar(500) NOT NULL,
  `rating` varchar(200) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `nickname` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `date` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`product_id`, `headline`, `rating`, `comments`, `nickname`, `location`, `date`, `status`) VALUES
(111, 'Very Good Products', '5', 'I like this products. Its is very good', 'Foysal', 'Dhaka', '2013-11-03 05:43:34', 'new'),
(111, 'Good Product', '3', 'Average', 'ALI KAWSER DANY', ' ABH world , Dhaka, Bangladesh ', '2013-11-28 06:21:21', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE IF NOT EXISTS `slider_image` (
  `position` int(5) NOT NULL,
  `pic_url` varchar(200) NOT NULL,
  PRIMARY KEY (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`position`, `pic_url`) VALUES
(1, 'SLIDER_IMAGE/1/e1113afgsh_loveyourhairv4.jpg'),
(2, 'SLIDER_IMAGE/2/e1113afgshome_dknydeliciousskin.jpg'),
(3, 'SLIDER_IMAGE/3/e1113dbgs_fabnfresh.jpg'),
(4, 'SLIDER_IMAGE/4/e1113homegs_janetreger.jpg'),
(5, 'SLIDER_IMAGE/5/e1113jhgsh_lorealedt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `sub_category_id` int(20) NOT NULL AUTO_INCREMENT,
  `category_id` int(200) NOT NULL,
  `sub_category_name` varchar(500) NOT NULL,
  `pic_url` varchar(500) NOT NULL,
  PRIMARY KEY (`sub_category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `category_id`, `sub_category_name`, `pic_url`) VALUES
(77, 4, 'Shampoo', 'SUB_CATEGORY/77/shampo.jpg'),
(78, 4, 'Conditioners', 'SUB_CATEGORY/78/conditioner.jpg'),
(79, 1, 'Accessories', 'SUB_CATEGORY/79/Accessories.jpg'),
(80, 1, 'Eyes', 'SUB_CATEGORY/80/eyes.jpg'),
(81, 1, 'Lips', 'SUB_CATEGORY/81/lips.jpg'),
(82, 2, 'Body & Hand', 'SUB_CATEGORY/82/body.jpg'),
(83, 2, 'Bronzing', 'SUB_CATEGORY/83/Bronzing.jpg'),
(84, 2, 'Face', 'SUB_CATEGORY/84/face-2.jpg'),
(85, 5, 'Accessories', 'SUB_CATEGORY/85/toiletries-Accessories.jpg'),
(86, 5, 'Washing & Bathing', 'SUB_CATEGORY/86/toiletries-Washing-&-Bathing.jpg'),
(87, 5, 'Dental', 'SUB_CATEGORY/87/toiletries-Dental.jpg'),
(88, 6, 'Body Sprays', 'SUB_CATEGORY/88/mens-body-spray.jpg'),
(89, 6, 'Shampoo', 'SUB_CATEGORY/89/mens-body-shampo.jpg'),
(90, 6, 'Shower', 'SUB_CATEGORY/90/mens-body-shawer.jpg'),
(91, 7, 'Toiletries', 'SUB_CATEGORY/91/baby-toletries.jpg'),
(92, 7, 'Wipes', 'SUB_CATEGORY/92/baby-wisper.jpg'),
(93, 7, 'Nappies', 'SUB_CATEGORY/93/nappel.jpg'),
(94, 8, 'Hair Removal', 'SUB_CATEGORY/94/ele-hair-remover.jpg'),
(95, 8, 'Hair Dryers', 'SUB_CATEGORY/95/elec-hair-dryier.jpg'),
(96, 8, 'Shaving', 'SUB_CATEGORY/96/ele-saving.jpg'),
(97, 3, 'Demo fregrence', 'SUB_CATEGORY/97/66154_518470898244928_75445152_n.jpg'),
(98, 9, 'Demo health', 'SUB_CATEGORY/98/207430_298066843638150_1610385052_n.jpg'),
(99, 10, 'Demo Clothing', 'SUB_CATEGORY/99/421471_576470032365064_1864877672_n.jpg'),
(100, 11, 'Demo Chocolate', 'SUB_CATEGORY/100/My-body-is-my-journal.jpg'),
(101, 2, 'Facial Tissues', ''),
(102, 2, ' Lips', ''),
(103, 2, 'Mens', ''),
(104, 2, 'Suncare', ''),
(105, 2, 'Travel ', ''),
(106, 2, 'Top 5 Skin', ''),
(107, 12, 'Demo Gift Shop', 'SUB_CATEGORY/107/421471_576470032365064_1864877672_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `house` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `town` varchar(100) NOT NULL,
  `country` varchar(200) NOT NULL,
  `post_code` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `prefered_contact` varchar(50) NOT NULL,
  `token` varchar(200) NOT NULL DEFAULT 'null',
  `earn_point` int(200) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `title`, `first_name`, `last_name`, `house`, `address`, `town`, `country`, `post_code`, `email`, `password`, `mobile`, `prefered_contact`, `token`, `earn_point`) VALUES
(12, 'Mr', 'Ali', 'Kawser', '811', ' 811, East jurain , Dhaka , Bangladesh', 'Dhaka', 'United Kingdom', '1200', 'kowser127441@yahoo.com', '3dc4fb281f063aed219b4fd4be8a93e4:CO16HCBGE08Q50Y31NFPVT3B21XZSA4R', '01686960969', '8801686960969', 'disable', 2147483647),
(14, 'Mr', 'Maruf', 'Ahasan', '20', 'dhaka ', 'dhaka', 'United Kingdom', '1209', 'mamm@k.com', '7bbe79285d15bed582cd277337cbb8cc:UFH81R8831E8FNZ44KA57PB7X88YS808', '1234', '2345', 'null', -90),
(15, 'Mr', 'Nazmul', 'Maruf', '102', ' Gazipur', 'Dhaka', 'United Kingdom', '1212', 'marufaiub09@gmail.com', '2be859dd6a2abf7efa2dd39091e29e22:6RWJN8WR5XD1PQ1M1KL3C0RFO4EB6Y4Q', '01673725660', '01933168178', 'null', -90),
(16, 'Mr', 'Abu Hurayra', 'Foysal', '5', '55', 'Dhaka', 'United Kingdom', '456', 'foysal@abhworld.com', '71209b299c65b29676348f16098b7f31:JIPETDGEKR0740G0O2EG985K93628VM7', '765432', '4566', 'disable', -90),
(17, 'Mr', 'abh', 'world', 'abh world house', ' abh world house', 'dhaka', 'United Kingdom', '1200', 'abh@abh.com', 'f3990fd4960faad34b11e57be4b18de0:2103ONQ7R781KGU598J4YAYHMDI88YVP', '01686960969', 'kowser127441@yahoo.com', 'null', -90),
(18, 'Mr', 'cc', 'cc', 'dfsgs', ' sdfgds', 'sdfs', 'Bangladesh', '345', 'cc@cc.com', '9de8de57e4c802003712dd5c463dee80:Q5FH5QU441TO1Y8F3R81WC5G39O1R0UQ', '54654', '56756', 'null', 120);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
