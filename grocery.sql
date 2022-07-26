-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 02:51 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--
CREATE DATABASE IF NOT EXISTS `grocery` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grocery`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(1, 'Ankit_Shukla', 'amart123');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE `cart` (
  `cart_id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `net_weight` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `uid`, `uname`, `pid`, `pname`, `net_weight`, `price`, `time`) VALUES
(139, 5, 'barak@gmail.com', 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '2020-03-27 16:06:31'),
(140, 5, 'barak@gmail.com', 44, 'INDIA GATE BROWN RICE', '1kg', 104, '2020-03-27 16:06:40'),
(175, 9, 'anushka.sharma@gmail.com', 40, 'BASKATI RICE 42', '5kg', 396, '2020-04-11 20:50:41'),
(172, 9, 'anushka.sharma@gmail.com', 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '2020-04-11 20:48:08'),
(173, 9, 'anushka.sharma@gmail.com', 44, 'INDIA GATE BROWN RICE', '1kg', 104, '2020-04-11 20:48:38'),
(174, 9, 'anushka.sharma@gmail.com', 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '2020-04-11 20:50:03'),
(194, 4, 'modi@gmail.com', 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '2020-05-03 06:22:41'),
(177, 9, 'anushka.sharma@gmail.com', 58, 'JK SOUNF (50GM)', '50gm', 24, '2020-04-11 20:53:28'),
(178, 9, 'anushka.sharma@gmail.com', 70, 'RED LENTILS (MASOOR DAL)', '1kg', 121, '2020-04-11 21:03:05'),
(179, 9, 'anushka.sharma@gmail.com', 71, 'ROYAL CHANNA DAL', '1kg', 127, '2020-04-11 21:06:51'),
(181, 9, 'anushka.sharma@gmail.com', 75, 'BRU INSTANT COFFEE', '50gm', 90, '2020-04-11 21:15:02'),
(192, 4, 'modi@gmail.com', 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '2020-05-03 06:22:34'),
(183, 9, 'anushka.sharma@gmail.com', 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '2020-04-11 21:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `cid` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(2, 'RICE'),
(3, 'OILS & GHEE'),
(4, 'MASALAS & SPICES'),
(5, 'SAUCES & VINIGAR'),
(6, 'WHEAT FLOR'),
(7, 'DALS & BEANS'),
(8, 'DRY FRUIT'),
(9, 'TEA & COFFIE'),
(10, 'MINERAL WATER'),
(11, 'DETERGENT'),
(12, 'CLEANERS'),
(13, 'SKIN CARE'),
(14, 'HAIR CARE'),
(15, 'PERSONAL CARE'),
(16, 'SHAVING NEEDS'),
(17, 'COSMETICS'),
(18, 'DEOS & PERFUMES');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `comments` varchar(5000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product` (
  `id` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `net_weight` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `order_id_p` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `pid`, `pname`, `net_weight`, `price`, `order_id_p`) VALUES
(146, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004047057495'),
(145, 49, 'PATANJALI MUSTARD OIL (1LTR)POUCH', '1ltr', 130, '202004047057495'),
(143, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004035286254'),
(144, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004035286254'),
(142, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '20200402933532'),
(141, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '20200402933532'),
(140, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003279024353'),
(138, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '20200326505676'),
(139, 42, 'BASMATI RICE-M E (S)', '5kg', 320, '202003279024353'),
(137, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '20200326505676'),
(135, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003264207763'),
(136, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '20200326505676'),
(134, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003264207763'),
(132, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003266375427'),
(133, 42, 'BASMATI RICE-M E (S)', '5', 320, '202003264207763'),
(131, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003266375427'),
(130, 48, 'FORTUNE MUSTARD OIL (500GM) BOTTLE', '500gm', 80, '202003266375427'),
(129, 46, 'FORTUNE MUSTARD OIL (200GM) BOTTLE', '200gm', 35, '202003262630004'),
(128, 42, 'BASMATI RICE-M E (S)', '5', 320, '202003262630004'),
(127, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '202003262630004'),
(126, 40, 'BASKATI RICE 42', '5kg', 396, '202003262630004'),
(125, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003269732971'),
(124, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003269732971'),
(123, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202003269732971'),
(92, 49, 'PATANJALI MUSTARD OIL (1LTR)POUCH', '1ltr', 130, '20200326626525'),
(93, 42, 'BASMATI RICE-M E (S)', '5', 320, '20200326626525'),
(94, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '20200326626525'),
(95, 42, 'BASMATI RICE-M E (S)', '5', 320, '202003269747314'),
(96, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202003269747314'),
(97, 39, 'KOLBAZ BASKATI RICE', '10kg', 344, '202003269747314'),
(98, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '202003269747314'),
(99, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '20200326599670'),
(100, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '20200326599670'),
(101, 42, 'BASMATI RICE-M E (S)', '5', 320, '202003263350219'),
(102, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '202003263350219'),
(103, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '202003266128845'),
(104, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003266128845'),
(105, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003261585998'),
(106, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003261585998'),
(107, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003263147277'),
(108, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003263147277'),
(109, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003261302490'),
(110, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003261302490'),
(111, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003264959716'),
(112, 49, 'PATANJALI MUSTARD OIL (1LTR)POUCH', '1ltr', 130, '202003264959716'),
(113, 49, 'PATANJALI MUSTARD OIL (1LTR)POUCH', '1ltr', 130, '202003264959716'),
(114, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202003261525'),
(115, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003261525'),
(116, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003261525'),
(117, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202003264402465'),
(118, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003264402465'),
(119, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003264402465'),
(120, 48, 'FORTUNE MUSTARD OIL (500GM) BOTTLE', '500gm', 80, '202003262073669'),
(121, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202003262073669'),
(122, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202003262073669'),
(147, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004047057495'),
(148, 81, 'SURF EXCEL EASY WASH', '500gm', 64, '202004044916992'),
(149, 95, 'EMAMI 7 OILS DAMAGE CONTROL HAIR OIL, 100 ML', '100ml', 63, '202004044916992'),
(150, 74, 'WATER CHESTNUT', '1tin', 240, '202004044916992'),
(151, 54, 'COOKME TURMERIC POWDER 50GM', '50gm', 15, '202004044916992'),
(152, 56, 'MDH DEGGI MIRCH POWDER (100GM)', '100gm', 54, '202004044916992'),
(153, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004044916992'),
(154, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004042219543'),
(155, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '202004042219543'),
(156, 41, 'PREMIUM BASKATI RICE', '10kg', 402, '202004042219543'),
(157, 42, 'BASMATI RICE-M E (S)', '5kg', 320, '202004042219543'),
(158, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004042219543'),
(159, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004066191406'),
(160, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004066191406'),
(161, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202004066191406'),
(162, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202004066191406'),
(163, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202004119893188'),
(164, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004119893188'),
(165, 95, 'EMAMI 7 OILS DAMAGE CONTROL HAIR OIL, 100 ML', '100ml', 63, '202004119893188'),
(166, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004223683471'),
(167, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004223683471'),
(168, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004252180175'),
(169, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202004252180175'),
(170, 42, 'BASMATI RICE-M E (S)', '5kg', 320, '202004276032409'),
(171, 42, 'BASMATI RICE-M E (S)', '5kg', 320, '202004276032409'),
(172, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004276032409'),
(173, 42, 'BASMATI RICE-M E (S)', '5kg', 320, '202004296975097'),
(174, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202004296975097'),
(175, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202004296975097'),
(176, 64, 'AASHIRVAAD WHOLE WHEAT ATTA', '5kg', 159, '20200629485534'),
(177, 69, 'ETC MASOOR DAL (500GM)', '500gm', 58, '20200629485534'),
(178, 70, 'RED LENTILS (MASOOR DAL)', '1kg', 121, '20200629485534'),
(179, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '20200629485534'),
(180, 44, 'INDIA GATE BROWN RICE', '1kg', 104, '202007273619384'),
(181, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202007273619384'),
(182, 45, 'DEVAAYA BASMATI RICE', '5kg', 405, '202007289094848'),
(183, 43, 'FORTUNE EVERYDAY BASMATI RICE ', '1kg', 108, '202007289094848');

-- --------------------------------------------------------

--
-- Table structure for table `order_user`
--

DROP TABLE IF EXISTS `order_user`;
CREATE TABLE `order_user` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `location` varchar(100) NOT NULL,
  `no_of_item` int(100) NOT NULL,
  `total_amount` float NOT NULL,
  `order_id` varchar(200) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(100) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_user`
--

INSERT INTO `order_user` (`id`, `uid`, `uname`, `fname`, `lname`, `phone_no`, `address`, `location`, `no_of_item`, `total_amount`, `order_id`, `order_time`, `status`) VALUES
(62, 1, 'sourav@gmail.com', 'Sourav', 'Nag', '8820406278', '6 No siddhanta Para Main Road, p.o. Nonachandan pukur, Barrackpore, kol-700122', 'Sitola Mandir', 3, 929, '202003264207763', '2020-03-26 18:01:36', 'confirm'),
(61, 4, 'modi@gmail.com', 'Narendra', 'Modi', '9969587845', '6/2 SMP khan Road,kol-700122', 'Saluka Biyebari', 3, 689, '202003266375427', '2020-03-26 13:43:16', 'confirm'),
(60, 2, 'hrithik@gmail.com', 'Hrithik', 'Nag', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 4, 1253, '202003262630004', '2020-03-26 13:31:00', 'confirm'),
(59, 1, 'sourav@gmail.com', 'Sourav', 'Nag', '8820406278', '6 No siddhanta Para Main Road, p.o. Nonachandan pukur, Barrackpore, kol-700122', 'Sitola Mandir', 3, 717, '202003269732971', '2020-03-26 13:30:04', 'confirm'),
(63, 5, 'barak@gmail.com', 'Barak', 'Obama', '9087845628', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 3, 717, '20200326505676', '2020-03-26 22:50:06', 'confirm'),
(66, 2, 'hrithik@gmail.com', 'Hrithik', 'Nag', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 2, 609, '20200402933532', '2020-04-02 18:37:43', 'confirm'),
(65, 2, 'hrithik@gmail.com', 'Hrithik', 'Nag', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 2, 825, '202003279024353', '2020-03-27 07:41:50', 'confirm'),
(67, 7, 'vk.saha@gmail.com', 'Vicky', 'Saha', '9858475847', 'Sbk 253,kol700122', 'mongol gram', 2, 609, '202004035286254', '2020-04-03 15:41:52', 'confirm'),
(68, 2, 'hrithik@gmail.com', 'Hrithik', 'Nag', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 3, 739, '202004047057495', '2020-04-04 06:27:13', 'confirm'),
(69, 4, 'modi@gmail.com', 'Narendra', 'Modi', '9969587845', '6/2 SMP khan Road,kol-700122', 'Saluka Biyebari', 6, 941, '202004044916992', '2020-04-04 18:54:35', 'confirm'),
(70, 4, 'modi@gmail.com', 'Narendra', 'Modi', '9969587845', '6/2 SMP khan Road,kol-700122', 'Saluka Biyebari', 5, 1733, '202004042219543', '2020-04-04 19:14:54', 'confirm'),
(71, 4, 'modi@gmail.com', 'Narendra', 'Modi', '9969587845', '6/2 SMP khan Road,kol-700122', 'Saluka Biyebari', 4, 825, '202004066191406', '2020-04-06 10:06:00', 'confirm'),
(72, 2, 'hrithik@gmail.com', 'Hrithik', 'Nag', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 3, 676, '202004119893188', '2020-04-11 15:02:56', 'confirm'),
(73, 2, 'hrithik@gmail.com', 'Hrithik', 'Nag', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club', 2, 609, '202004223683471', '2020-04-22 17:58:42', 'confirm'),
(74, 6, 'ramdas@gmail.com', 'Ram', 'Das', '8823658478', '6/2 SMP khan Road,kol-700122', 'Sitola Mandir', 2, 609, '202004252180175', '2020-04-25 10:44:19', 'pending'),
(75, 6, 'ramdas@gmail.com', 'Ram', 'Das', '8823658478', '6/2 SMP khan Road,kol-700122', 'Sitola Mandir', 3, 844, '202004276032409', '2020-04-27 06:46:56', 'pending'),
(76, 4, 'modi@gmail.com', 'Narendra', 'Modi', '9969587845', '6/2 SMP khan Road,kol-700122', 'Saluka Biyebari', 3, 632, '202004296975097', '2020-04-29 14:08:32', 'pending'),
(77, 1, 'modak@gmail.com', 'Saurav', 'Modak', '8820406278', '6 No siddhanta Para Main Road, p.o. Nonachandan pukur, Barrackpore, kol-700122', 'Sitola Mandir', 4, 843, '20200629485534', '2020-06-29 15:24:20', 'pending'),
(78, 11, 'virat.anushka@gmail.com', 'Virat', 'Kholi', '8854845784', '23/A New Delhi, Chandni Chalk, Delhi,India, Pin-8885447', 'Hamuman Mandir', 2, 609, '202007273619384', '2020-07-27 17:55:12', 'pending'),
(79, 11, 'virat.anushka@gmail.com', 'Virat', 'Kholi', '8854845784', '23/A New Delhi, Chandni Chalk, Delhi,India, Pin-8885447', 'Hamuman Mandir', 2, 613, '202007289094848', '2020-07-28 14:38:20', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `pid` int(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `dom` varchar(100) NOT NULL DEFAULT 'NA',
  `bbd` varchar(100) NOT NULL DEFAULT 'NA',
  `price` float NOT NULL,
  `stock` int(100) NOT NULL,
  `discount` float NOT NULL DEFAULT '0',
  `net_price` float NOT NULL,
  `net_weight` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `availability` varchar(100) NOT NULL DEFAULT 'In Stock',
  `entry_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `category`, `pname`, `dom`, `bbd`, `price`, `stock`, `discount`, `net_price`, `net_weight`, `details`, `image`, `availability`, `entry_time`) VALUES
(48, 'OILS & GHEE', 'FORTUNE MUSTARD OIL (500GM) BOTTLE', '03/2020', 'Indefinite', 80, 10, 0, 80, '500gm', 'Offers you a fine balance between great tasting food and good health, Gives you the goodness of fatty acids, extremely important for the human body in the right proportions. The acids reduce bad cholesterol while preserving good cholesterol. Acts as a digestive aid in neutralizing toxins and wards off indigestion.', '148_fortune_kachi_ghani_mustard_oil_dmjima.jpg', 'In Stock', '2020-03-26 05:43:40'),
(47, 'OILS & GHEE', 'FORTUNE MUSTARD OIL (500GM) POUCH', '03/2020', 'Indefinite', 80, 20, 5, 76, '500gm', 'Offers you a fine balance between great tasting food and good health, Gives you the goodness of fatty acids, extremely important for the human body in the right proportions. The acids reduce bad cholesterol while preserving good cholesterol. Acts as a digestive aid in neutralizing toxins and wards off indigestion.\r\n', 'wwww.jpg', 'In Stock', '2020-03-26 05:42:43'),
(46, 'OILS & GHEE', 'FORTUNE MUSTARD OIL (200GM) BOTTLE', '12/2016', 'Indefinite', 35, 20, 0, 35, '200gm', 'Offers you a fine balance between great tasting food and good health, Gives you the goodness of fatty acids, extremely important for the human body in the right proportions. The acids reduce bad cholesterol while preserving good cholesterol. Acts as a digestive aid in neutralizing toxins and wards off indigestion.', '148_fortune_kachi_ghani_mustard_oil_dmjima.jpg', 'In Stock', '2020-03-26 05:40:06'),
(45, 'RICE', 'DEVAAYA BASMATI RICE', 'Indefinite', 'Indefinite', 450, 10, 10, 405, '5kg', 'Basmati rice serves up a great value meal. Favoured is subtle flavour and texture. It is hygienically packed to the highest quality standards to ensure its goodness is retained. Basmati rice and indulge in everyday meal feast for you and your loved ones.', '81p5zTSqipL._SY445_-300x300.jpg', 'In Stock', '2020-07-28 14:43:16'),
(44, 'RICE', 'INDIA GATE BROWN RICE', '11/2015', 'Indefinite', 130, 20, 20, 104, '1kg', 'Brown rice serves up a great value meal. Favoured is subtle flavour and texture. It is hygienically packed to the highest quality standards to ensure its goodness is retained. Brown rice and indulge in everyday meal feast for you and your loved ones.', 'India-Gate-Brown-Basmati-Rice-1kg-500x500-300x300.jpg', 'In Stock', '2020-03-26 05:35:58'),
(43, 'RICE', 'FORTUNE EVERYDAY BASMATI RICE ', '07/2016', 'Indefinite', 120, 20, 10, 108, '1kg', 'Authentic has unbeatable flavor and texture and aromatic, with buttery flavor and clean, separate grains. Authentic basmati rice to be served with chicken tikka masala or chicken tandoori.', '70000483_2-fortune-basmati-rice-everyday-300x300.jpg', 'In Stock', '2020-03-26 05:32:10'),
(42, 'RICE', 'BASMATI RICE-M E (S)', 'Indefinite', 'Indefinite', 400, 15, 20, 320, '5kg', 'Basmati Rice serves up a great value meal. Favoured is subtle flavour and texture. It is hygienically packed to the highest quality standards to ensure its goodness is retained. Basmati Rice and indulge in everyday meal feast for you and your loved ones.', 'Steamed-Basmati-Rice-loose--300x300.jpg', 'In Stock', '2020-03-26 22:49:44'),
(41, 'RICE', 'PREMIUM BASKATI RICE', '11/2015', 'Indefinite', 502, 10, 20, 402, '10kg', 'Banskathi Rice is the best quality in non-basmati grade. Its length is good and very thin in size like Basmati Rice, It is very good for Biryani & Pulao. It is grown in the fertile soil of the Himalayas. Itâ€™s nourished by the pure water from the highest snow-covered peaks in the world.', 'kolbaj baskati.jpg', 'In Stock', '2020-03-26 05:26:41'),
(40, 'RICE', 'BASKATI RICE 42', '08/2016', 'Indefinite', 417, 10, 5, 396, '5kg', 'Premium Banskathi Rice is the best quality in non-basmati grade. Its length is good and very thin in size like Basmati Rice, It is very good for Biryani & Pulao. It is grown in the fertile soil of the Himalayas. Itâ€™s nourished by the pure water from the highest snow-covered peaks in the world.', 'baskati rice 42.jpg', 'In Stock', '2020-03-26 05:24:33'),
(39, 'RICE', 'KOLBAZ BASKATI RICE', '05/2016', 'Indefinite', 430, 5, 20, 344, '10kg', 'Baskati Rice is extra long & white and has a beautiful subtle aroma. It is acknowledged for properties like pearly-white, extra long grains, highly nutritional value and cost-effectiveness.', 'kolbaz baskati rice.jpg', 'In Stock', '2020-03-26 05:21:33'),
(49, 'OILS & GHEE', 'PATANJALI MUSTARD OIL (1LTR)POUCH', 'Indefinite', 'Indefinite', 130, 20, 0, 130, '1ltr', 'Oil of Mustard seeds. Free from Argemone oil. Kitchens all over India use Mustard oil extensively in preparing tasty recipes & pickles.', '14763673141443_patanjali_mustard_oil_pouch_1_ltrjpg_ke8nxq.jpg', 'In Stock', '2020-03-26 05:58:17'),
(50, 'BISCUITS SNACK', 'PARLE GLUCO BISCUITS â€“ PARLE-G', '03/2020', '04/2020', 80, 20, 20, 64, '800gm', 'Filled with the goodness of milk and wheat, Parle-G is a source of all round nourishment. Treat yourself to a pack of yummy Parle-G biscuits to experience what has nurtured and strengthened millions of people for over 70 years. A meal substitute for some and a tasty and healthy snack for many others. Consumed by some for the value it offers, and many others for its taste. Whatever the occasion, it has always been around as an instant source of nourishment.', 'Parle-g_gluco_Biscuit_300gm-500x500_usp6iv.jpg', 'In Stock', '2020-03-27 16:00:35'),
(51, 'BISCUITS SNACK', 'BRITANNIA BOURBON CREAM BISCUIT â€“ CHOCOLATE FLAVOR', '04/2020', '04/2020', 30, 25, 10, 27, '150gm', 'Britannia Bourbon is all about showing off your wickedly smooth side. It has always been the chocolate lovers favourite guilt trip. One bite of this smooth, luscious chocolate cream enveloped in crunchy, sugary chocolate biscuit and the smooth operator in you will be unleashed!\r\nSmooth chocolate cream spread in between crunchy chocolate biscuits topped with sugar crystals, best relished in the company of your craziest, naughtiest friends, as you spend hours gossiping and planning your next trick. We have a Pocket Pack, a Hangout Pack and a Party Pack!', '263593_4-britannia-bourbon-cream-biscuit-chocolate-flavor_pyujuq.jpg', 'In Stock', '2020-03-27 16:11:39'),
(53, 'BISCUITS SNACK', 'SUNFEAST DARK FANTASY â€“ CHOCO FILLS (75GM)', '03/2020', '08/2020', 30, 20, 5, 29, '75gm', 'Sunfeast Dark Fantasy Chocofill is nothing but smooth and tasty choco creme inside cookies that are baked to perfection. It has a rich chocolaty taste, and because of its soft texture, it simply melts in the mouth after a bite. This innovative cookie has its center filled with luscious chocolate which adds to the crunchiness.', '286082_6-sunfeast-dark-fantasy-choco-fills_qkf0mf.jpg', 'In Stock', '2020-03-27 16:13:47'),
(54, 'MASALAS & SPICES', 'COOKME TURMERIC POWDER 50GM', '04/2020', '10/2018', 20, 50, 25, 15, '50gm', 'Cookme Turmeric Powder is well-known for its bright yellow colour and used as a colouring agent Turmeric is used extensively in Indian dishes. Turmeric has also originated application in canned beverages, dairy products, baked products, yogurt, ice cream, and biscuits.', 'cookmee.jpg', 'In Stock', '2020-04-04 12:33:35'),
(55, 'MASALAS & SPICES', 'JK TURMERIC POWDER', '04/2020', '06/2020', 30, 30, 5, 29, '100gm', 'Turmeric Powder, also known as haldi, has been used in India for thousands of years. It is widely used as a spice in South Asian and Middle Eastern cooking. JK Turmeric is mostly used in savory dishes. It is used as an agent to impart a rich, mustard-like yellow color. In India, turmeric has been used as an age old remedy for stomach and liver ailments.', 'tru.jpg', 'In Stock', '2020-04-04 12:36:20'),
(56, 'MASALAS & SPICES', 'MDH DEGGI MIRCH POWDER (100GM)', '04/2020', '04/2018', 55, 20, 2, 54, '100gm', 'Fine ground red chillies of the finest quality distinguished by their brilliant red colour and mild pungency. Chilli is a heating spice and comes in a wide variety of shapes, sizes, colours, and degrees of pungency. Chilli is Americas most important contribution to the world of spices.', 'mdh_deggi_mirch_powder100gm-400x400.jpg', 'In Stock', '2020-04-04 12:41:50'),
(57, 'MASALAS & SPICES', 'EVEREST POWDER â€“ CUMIN', '04/2020', '10/2018', 56, 20, 2, 55, '100gm', 'Sourced from the well drained, loamy regions of Gujarat and Rajasthan. This type is much valued for its high percentage of essential oil content that gives it an intense flavour. Cumin seeds has a penetrating musty, earthy flavour. Itâ€™s a cooling spice. In the middle ages, cumin was believed to keep lovers faithful and chicken from straying. More recently, cumin has become popular because of its use in Mexican cooking. A native of Egypt and the Mediterranean, cumin is now mostly produced in India. Gujarat, Rajasthan and Uttar Pradesh are the prominent producers.', '119_Everest_Cumin_Jeera_Powder_kxhuto.jpg', 'In Stock', '2020-04-04 12:44:14'),
(58, 'MASALAS & SPICES', 'JK SOUNF (50GM)', '01/2018', '01/2018', 25, 25, 5, 24, '50gm', 'JK SOUNF (50GM)', 'jk-sounf-400x400.jpg', 'In Stock', '2020-04-11 20:56:12'),
(59, 'SAUCES & VINIGAR', 'KISSAN FRESH TOMATO KETCHUP', '04/2020', '07/2018', 100, 20, 20, 80, '200gm', 'Relish The Taste Of Ripe Tomatoes With Kissan Tomato Ketchup In Which Hand Picked High Quality Tomatoes Make The Great Taste To This Sauce. With Its Smooth Texture, The Sauce Is Easily To Spread, Use And Serve Alongside Food. It Is Packed Using The Latest Technology To Seal The Freshness Of Its Natural Ingredients. Its Every Drop Offers A Burst Of Taste To Make Your Taste Buds Come Alive. You Can Let Your Imagination And Creativity Run Wild With This Sauce And Your Snacks! Make Meals Fun For Your Family, Friends And Yourself With This Delicious Kissan Tomato Ketchup, Buy This Bottle Right Away!', '500-500x500_vpmuyk-400x400.jpg', 'In Stock', '2020-04-04 12:49:59'),
(60, 'SAUCES & VINIGAR', 'MAGGI â€“ RICH TOMATO SAUCE', '04/2020', '04/2018', 150, 12, 20, 120, '1kg', 'MAGGI Sauces have been an integral part of the Indian consumers households for decades now. Launched in the mid-1980s, MAGGI Sauces has been associated with category re-defining innovations from the very beginning, starting with the launch of the unique MAGGI Hot & Sweet and Its different commercials featuring Jaaved Jaffrey and Pankaj Kapoor. Over the years, MAGGI has continuously re-invented itself in terms of new products, packaging, promotion & distribution to emerge and sustain itself as one of the largest sauces brand in India.\r\nTo cater to the diverse Indian palate, MAGGI has a host of variants, including:\r\nâ€¢ The quintessential Rich Tomato Ketchup and Rich Tomato Sauce (No Onion No Garlic).\r\nâ€¢ The unique Hot & Sweet Tomato Chilli Sauce.\r\nâ€¢ The tangy and chatkaaredar Imli Pichkoo.\r\nMAGGI has also launched the Rich Tomato Ketchup and Hot & Sweet Tomato Chilli Sauce in a convenient doy pack format called Pichkoo that has made the unique flavors of MAGGI affordable to a whole new set of consumers.\r\nThe lip-smacking tastes and vibrant packaging ensures MAGGI Sauces stay true to its slogan â€“ Its different\r\n', 'Maggi-Rich-Tomato-Ketchup-1-Kg-500x500_xgnkqn-400x400.jpg', 'In Stock', '2020-04-04 12:53:21'),
(61, 'SAUCES & VINIGAR', 'VINEGAR WHITE (700ML)', '04/2020', '02/2018', 55, 25, 10, 50, '700ml', '', 'CornwellsWhiteVinegar750ml_large_re_ecfdf894-5abe-4b16-88f1-d47e592bcaef_grande-400x400.jpeg', 'In Stock', '2020-04-04 12:55:46'),
(62, 'SAUCES & VINIGAR', 'CHINGâ€™S DARK SOY SAUCE (200GM)', '04/2020', '10/2020', 55, 10, 10, 50, '200gm', '', '71mVh43iUmL._SX425_-400x400.jpg', 'In Stock', '2020-04-04 12:59:03'),
(63, 'SAUCES & VINIGAR', 'CHINGâ€™S RED CHILLY SAUCE (200GM)', '04/2020', '05/2018', 60, 20, 5, 57, '200gm', '', 'Ching_s_Secret_Red_Chilli_Sauce-400x400.jpeg', 'In Stock', '2020-04-04 13:01:12'),
(64, 'WHEAT FLOR', 'AASHIRVAAD WHOLE WHEAT ATTA', 'NA', 'NA', 199, 10, 20, 159, '5kg', 'Whole Wheat Atta is finished from the best accepted ingredients that help recover digestion and offer good number of well nutrients to the body. Aashirvaad Whole Grain Atta does not hold any extra preservatives or flavours. 100% full Wheat Chapati Flour and no Maida added.', 'aashirwaad-2-346x487-300x300_uvvoko.jpg', 'In Stock', '2020-04-04 13:03:05'),
(65, 'WHEAT FLOR', 'GANESH WHOLE WHEAT ATTA 1 KG', 'NA', 'NA', 45, 10, 20, 36, '1kg', 'Ganesh has a strong belief in dishing out the best in terms of quality to its esteemed customers and patrons. The freshest and finest quality of wheat is handpicked before it arrives at the mill. Every grain undergoes extensive cleaning process to make it free from dirt and impurities.', '190.jpg', 'In Stock', '2020-04-04 13:04:41'),
(66, 'WHEAT FLOR', 'PATANJALI WHOLE WHEAT ATTA (5KG)', 'NA', 'NA', 155, 10, 0, 155, '5kg', 'Baba Ramdev Patanjali Aarogya Whole Wheat Chakki Atta', 'WHOLE-WHEAT-ATTA-5-KG-T-AP-300x300_q8ymjx.jpg', 'In Stock', '2020-04-04 13:07:39'),
(67, 'WHEAT FLOR', 'GANESH MAIDA (1KG)', 'NA', 'NA', 55, 20, 20, 44, '1kg', '', 'Ganesh-Maida-400x400-300x300_qgw49f.jpg', 'In Stock', '2020-04-04 13:08:56'),
(68, 'WHEAT FLOR', 'GANESH SUJI (500GM)', 'NA', 'NA', 30, 20, 5, 29, '500gm', '', '1426661917058_Ganesh_SoojiJPG_qhe8ij-400x400.jpg', 'In Stock', '2020-04-04 13:10:43'),
(69, 'DALS & BEANS', 'ETC MASOOR DAL (500GM)', 'NA', 'NA', 72, 20, 20, 58, '500gm', 'Whole Masoor is one of the small and good source of cholesterol-lowering fiber from List of Indian Dals. Masoor dal or Red Lentil is very important part of vegetarian diet in Indian cuisine. Masoor is sold in all forms like with or without skin, whole or split. It is very soft and cooks quickly.', 'masoor-dal-bpl-500x500-400x400.jpg', 'In Stock', '2020-04-04 13:11:50'),
(70, 'DALS & BEANS', 'RED LENTILS (MASOOR DAL)', 'NA', 'NA', 151, 25, 20, 121, '1kg', 'Masoor Dal is one of the most well-known Indian lentils. This dal is with no skin and red in color. This dal is supple and cooks very speedily with a nice, earthy taste It has a dietary fiber, vitamin B1, Folate and minerals all with almost no fat.', 'redlentils.jpg', 'In Stock', '2020-04-04 13:13:22'),
(71, 'DALS & BEANS', 'ROYAL CHANNA DAL', 'NA', 'NA', 159, 20, 20, 127, '1kg', 'Channa Dal is sugary and nutty taste, this dal is amongst the most well-liked dal in India. It is a ready basis of proteins for a balanced diet including little or no meat. It includes a mild sweet flavor when cooked and is extremely nutritious. It is a good source of dietary fibre and includes an insignificant amount of polyunsaturated fat.', 'I043_Chana_Dal-1-400x400.jpg', 'In Stock', '2020-04-04 13:20:54'),
(72, 'DALS & BEANS', 'Matar Dal', 'NA', 'NA', 850, 5, 20, 680, '10kg', 'Matar dal is something very different and delicious compare to any other dal, the texture, flavors and taste is awesome if made properly. This dal is extensively used for cooking various dishes like boiled sprouts, pakoda, sweet snack and many more items.', 'matar-dal-400x400.jpg', 'In Stock', '2020-04-04 13:25:37'),
(73, 'DRY FRUIT', 'PISTA WHOLE', 'NA', 'NA', 1600, 5, 20, 1280, '1kg', '', 'S50_Pista_Salted_-500x500-400x400.jpg', 'In Stock', '2020-04-04 13:28:02'),
(74, 'DRY FRUIT', 'WATER CHESTNUT', 'NA', 'NA', 300, 5, 20, 240, '1tin', '', 'canz-water-chestnuts-in-water-565gm-500x500-350x400.jpg', 'In Stock', '2020-04-04 13:29:35'),
(75, 'TEA & COFFIE', 'BRU INSTANT COFFEE', '11/2020', '10/2018', 95, 10, 5, 90, '50gm', 'Made from a fine blend of choicest plantations and robust beans, BRU Instant coffee offers a rich coffee taste. Our strong processes ensure that the fresh coffee aroma is preserved so that you get the best coffee experience, instantly. Who needs a coffee machine!', 'Bru-Instant-Coffee-50-G-500x500-400x400.jpg', 'In Stock', '2020-04-04 13:32:20'),
(76, 'TEA & COFFIE', 'BROOKE BOND TAJ MAHAL TEA (500GM)', '04/2020', 'NA', 220, 20, 20, 176, '500gm', 'While ordinary teas provide either strength or just flavor, new brooke bond taj mahal tea gives you the much-coveted balance of both.', '312-400x400.jpg', 'In Stock', '2020-04-04 13:33:51'),
(77, 'TEA & COFFIE', 'LIPTON GREEN TEA â€“ PURE & LIGHT, 250 GM CARTON', '04/2020', 'NA', 220, 10, 20, 176, '250gm', 'Enjoy the fresh & light taste and all the goodness of pure green tea.', '519JzERmfKL._SX342_-342x400.jpg', 'In Stock', '2020-04-04 13:45:43'),
(78, 'DETERGENT', 'TIDE PLUS WASHING POWDER (1KG)', '04/2020', 'NA', 99, 30, 10, 89, '1kg', '', 'TIDE-PLUS-2-KG-500x500-400x400.jpg', 'In Stock', '2020-04-04 13:48:24'),
(79, 'DETERGENT', 'SAFED DETERGENT POWDER (4KG)', '04/2020', 'NA', 250, 10, 20, 200, '4kg', 'Washing powder-it helps supply whiter and brighter clothes.', 'add3_s-500x612-400x400.jpg', 'In Stock', '2020-04-04 13:49:41'),
(80, 'DETERGENT', 'RIN ADVANCED DETERGENT POWDER', '04/2020', 'NA', 40, 10, 10, 36, '500gm', 'Rin Advanced Detergent Powder is one of the trusted names for washing clothes; your laundry partner ensures that all your garments are clean and crisp. The stain removers and dirt cutters penetrate deep into the clothes and remove stubborn dirt which is hard to remove in one wash. As a result you have flawless shiny clothes; it is easy to make an impression with your bright apparels.-', 'Rin-Advanced-Detergent-Powder-2-SDL672613682-1-ea5f1-400x400.jpg', 'In Stock', '2020-04-04 13:50:54'),
(81, 'DETERGENT', 'SURF EXCEL EASY WASH', '04/2020', 'NA', 67, 10, 5, 64, '500gm', 'We understand that washing and removing stains can be extremely tiring and cumbersome. Especially if you are a mother of a young kid who fills your laundry basket with clothes covered in grass stains from football practice, ketchup stains from lunch and paint stains from art class! Till now you would have to soak his dirty clothes for a couple of hours and then scrub them with your hands using a brush and a bar, and wondered why it takes so much time to remove stains from your kids clothes? The answer is because regular detergents do not dissolve completely. But with Surf excel Easy Wash, a superfine powder, tough stains will now be taken off in a jiffy.', '1.jpg', 'In Stock', '2020-04-04 13:52:20'),
(82, 'DETERGENT', 'RIN DETERGENT BAR', '04/2020', 'NA', 20, 30, 5, 19, '250gm', 'With so many chores on the list, expert help always works! Leave your laundry woes to the Rin Detergent Bar- its NSD technology ensures the bar stays dry whereas the easy to hold shape gives you a better grip while washing away stains. The advanced bars and a refreshing fragrance of the Rin Bar makes washing clothes a breeze and helps you add a new shine to clothes with one simple stroke! Buy the small Rin Detergent Bar, right away!', '2.jpg', 'In Stock', '2020-04-04 13:54:22'),
(83, 'DETERGENT', 'WHEEL GREEN DETERGENT BAR (125GM)', '04/2020', 'NA', 5, 100, 0, 5, '125gm', 'Active Wheel Detergent bar brings a smile on the faces of millions of women across the country giving them a wonderful wash experience. It makes the dresses look so new and fresh that it makes everyone wonder if your clothes are old or new.', '3.jpg', 'In Stock', '2020-04-04 13:55:58'),
(84, 'CLEANERS', 'VIM DISHWASH BAR â€“ LEMON (300GM)', 'NA', 'NA', 20, 50, 0, 20, '300gm', 'Vim Dish wash bar lemon contains natural sense and sensitivity of lemon juice has been the key of VimÃƒÂ¢Ã¢â€šÂ¬Ã¢â€žÂ¢s success. It has an exclusive formulation designed to pry away grease in one easy wipe.', '4.jpg', 'In Stock', '2020-04-04 14:02:47'),
(85, 'CLEANERS', 'VIM DISHWASH GEL LEMON', '04/2020', 'NA', 120, 40, 20, 96, '500ml', 'Infused with the Power of 100 lemons, 1 spoon of Vim Gel is all you need to remove the toughest of grease from your utensils. Itâ€™s special formula ensures that it is tough on stains but gentle on your hands. So whether it is mumâ€™s burnt Halwa or your experimental Dal Makhani, clean shiny utensils is something you will get everytime. Dishwash bars not only leave white residue on your utensils after wash but can also damage or scratch your expensive cookwareâ€™s delicate surfaces such as non stick or ceramic. Vim Gel with its special formulation ensures that the toughest of grease is removed with ease without damaging your expensive cookware. A great lemon fragrance, easy to use bottle and the best grease cutting ability; all these make Vim Gel our best product ever. So go ahead, give it a try', '5.png', 'In Stock', '2020-04-04 14:00:26'),
(86, 'CLEANERS', 'COLIN CLEANER â€“ GLASS & HOUSEHOLD', '03/2020', 'NA', 71, 30, 5, 67, '500ml', 'Colin Glass Cleaner not simply removes dust and dirt but moreover gives two times extra Shine than usual cleaners across shiny & glass surfaces. It is great for Glass Window, Fridge, Mirrors, TV, Kitchen Cabinet, Oven and Furniture and so on.\r\n\r\nCleans to a shine', '6.jpg', 'In Stock', '2020-04-04 14:01:57'),
(87, 'CLEANERS', 'HARPIC POWERPLUS ORIGINAL', 'NA', 'NA', 138, 20, 10, 124, '1ltr', 'Harpic Power Plus is a specialized product for all your cleaning needs. Unlike ordinary cleaners, it combines the benefits of tough stain removal, 99.9% germ kill, and freshness into one, making it a smart toilet solution. Now get 10X more yellowish stain removal, resulting in sparkling clean, hygienic and fresh toilet with every use of Harpic.', '7.jpg', 'In Stock', '2020-04-04 14:05:12'),
(88, 'CLEANERS', 'LIZOL DISINFECTANT SURFACE CLEANER â€“ PINE', '04/2020', 'NA', 250, 4, 5, 238, '2ltr', '', '8.jpg', 'In Stock', '2020-04-04 14:06:37'),
(89, 'SKIN CARE', 'FAIR & LOVELY ADVANCE â€“ MULTIVITAMIN, 50 GRAMS', '04/2020', '11/2018', 110, 10, 2, 108, '50gm', '', '9.jpg', 'In Stock', '2020-04-04 14:08:47'),
(90, 'SKIN CARE', 'LAKME SUN EXPERT â€“ UV LOTION SPF 50, 100 ML', '04/2020', '06/2019', 580, 5, 20, 464, '100ml', 'Lakmeâ€™S Sun Expert Spf 50 Pa++ Sunscreen Cream Is Perfect For Those Hot, Sharp Summer Months. This Cream Is So Light It Can Be Used Every Day And Right Through The Year But Specially Apt For Indian Summers. It Prevents Sunburn, Dark Spots, And Premature Aging. This Cream Is Hypoallergenic, Dermatologically Tested, And Is Perfect For Normal To Dry Skin. You Can Apply This After Cleansing And Hydrating, And Before Putting On Makeup. When Stepping Out To Meet Your Friends, Just Apply This And Youâ€™Ll Be Ready With A Glow That Is Also Protecting You!', '10.jpg', 'In Stock', '2020-04-04 14:10:09'),
(91, 'SKIN CARE', 'FAIR & LOVELY MAX FAIRNESS â€“ MULTI EXPERT FACE CREAM, 50 GRAMS', '04/2020', '04/2018', 123, 20, 20, 98, '50gm', '', '11.jpg', 'In Stock', '2020-04-04 14:12:30'),
(92, 'SKIN CARE', 'EVERYUTH NATURALS PEEL-OFF MASK â€“ GOLDEN GLOW, 90 GM TUBE', '04/2020', '02/2018', 115, 10, 10, 104, '100gm', 'Everyuth Natural Golden Glow Peel-off is a home facial with nano-gold peptide and minerals that works wonders on your skin. It peels away dead cells, dust and bacteria from within the skin pores, motivates blood circulation and oxygen deliver. In just 15 minutes it gives you an immediate fairness with a golden glow.', '12.jpg', 'In Stock', '2020-04-04 14:13:56'),
(93, 'SKIN CARE', 'VASELINE INTENSIVE CARE DEEP RESTORE', '04/2020', '05/2019', 190, 10, 5, 181, '300ml', 'Our clean-feel formula combines pure oat extract and Stratys 3 multi-layer moisture to leave your skin deeply moisturized and feeling healthy, soft and smooth. Moisturizes top three layers of surface skin (stratum corneum). Contains pure oat extract. Absorbs fast for a non-greasy feel.', '13.jpg', 'In Stock', '2020-04-04 14:15:29'),
(94, 'SKIN CARE', 'NIVEA BODY LOTION NOURISHING MILK, 200 ML', '04/2020', '04/2019', 220, 20, 5, 209, '200ml', '', '14.jpg', 'In Stock', '2020-04-04 14:16:49'),
(95, 'HAIR CARE', 'EMAMI 7 OILS DAMAGE CONTROL HAIR OIL, 100 ML', '04/2020', '08/2018', 70, 10, 10, 63, '100ml', 'Emami after years of research has brought to you a breakthrough in hair oils â€“ a unique combination of 7 oils- that will repair hair damage. This extra ordinary oil, co-created by Indian and International Hair Experts, provides incredible nourishment to hair without weighing it down. This oil with a pleasant fragrance can be used on hair types.', '15.jpg', 'In Stock', '2020-04-04 14:18:53');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `uname`, `password`, `phone_no`, `address`, `location`) VALUES
(1, 'Saurav', 'Modak', 'modak@gmail.com', '123456', '8820406278', '6 No siddhanta Para Main Road, p.o. Nonachandan pukur, Barrackpore, kol-700122', 'Sitola Mandir'),
(2, 'Hrithik', 'Nag', 'hrithik@gmail.com', 'amijanina', '9869545872', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club'),
(3, 'Souvik', 'Pandit', 'souvik@gmail.com', '1234', '8895684875', '6/A Bipin chandra Lane, SMP satragachi,kol-700122', 'MidLove Park'),
(4, 'Narendra', 'Modi', 'modi@gmail.com', 'amijanina', '9969587845', '6/2 SMP khan Road,kol-700122', 'Saluka Biyebari'),
(5, 'Barak', 'Obama', 'barak@gmail.com', '1234', '9087845628', '6/9 Santi para lane, barrackpore,kol-700122', 'Netaji Sangha Club'),
(6, 'Ram', 'Das', 'ramdas@gmail.com', 'amijanina', '8823658478', '6/2 SMP khan Road,kol-700122', 'Sitola Mandir'),
(9, 'Anushka', 'Sharma', 'anushka.sharma@gmail.com', '123456', '8820406254', 'Nonachandan pukur Barrackpor, kol-700122', 'NCP Bazar'),
(10, 'Rajdeep', 'Nandi', 'raj.deep@gmail.com', '12345678', '9689547854', 'Hembabur bagan bari,barrackpore,kol-700122', 'Hembabur bagan'),
(11, 'Virat', 'Kholi', 'virat.anushka@gmail.com', 'amijanina', '8854845784', '23/A New Delhi, Chandni Chalk, Delhi,India, Pin-8885447', 'Hamuman Mandir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cname` (`cname`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_user`
--
ALTER TABLE `order_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
--
-- AUTO_INCREMENT for table `order_user`
--
ALTER TABLE `order_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
