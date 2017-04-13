-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 12, 2017 at 10:34 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`admin_id`, `position`, `user_name`, `password`, `first_name`, `last_name`) VALUES
(1, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'Stefan', 'dzalev'),
(2, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'pece', 'pecorrrrrr'),
(3, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'ljue', 'popov'),
(4, '', 'vsdvsdvsd', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'acsiadija', 'kckpokacoas'),
(5, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 'acsiadija', 'so ti eee'),
(6, '', 'dgfg', '526c6f702cfce0eeedee0927ef3339bc46718ac5', 'hhki', 'hhhh');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `author_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `firstname`, `lastname`) VALUES
(1, 'pece', 'petrovski'),
(2, 'marijan', 'atanasovski'),
(3, 'izabela', 'jovanovska'),
(4, 'den', 'brawn'),
(5, 'pece', 'petrovski'),
(6, 'magdalena', 'siljanoska'),
(7, 'se da tibam', 'pickumater');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE IF NOT EXISTS `author_book` (
  `author_book_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(10) DEFAULT NULL,
  `book_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`author_book_id`),
  KEY `book_id` (`book_id`),
  KEY `author_id` (`author_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`author_book_id`, `author_id`, `book_id`) VALUES
(1, 1, 3),
(2, 5, 2),
(3, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(50) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Stock` int(10) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`),
  KEY `category_id` (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `Title`, `Price`, `Language`, `Stock`, `category_id`) VALUES
(1, 'inferno', 500, 'makedonski', 5, 3),
(2, 'istorija na makedonija', 500, 'makedonski', 10, 5),
(3, 'istorija na anglija', 600, 'angliski', 10, 5),
(4, 'zoki poki', 250, 'makedonski', 99, 0),
(5, 'kniga', 333, 'makedonski', 333, 1),
(6, 'knigakurac', 33, 'MKD and ENG', 33, 1),
(7, 'kniga kurac2', 50, '', 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_by`
--

CREATE TABLE IF NOT EXISTS `borrowed_by` (
  `member_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `Due_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `borrowed_by_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`borrowed_by_id`),
  KEY `member_id` (`member_id`),
  KEY `book_id` (`book_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `borrowed_by`
--

INSERT INTO `borrowed_by` (`member_id`, `book_id`, `Due_Date`, `Return_Date`, `borrowed_by_id`) VALUES
(1, 2, '2017-05-12', '2017-02-22', 1),
(2, 3, '2017-05-12', '2017-02-22', 2),
(0, 0, '2018-04-21', '2018-04-21', 3),
(0, 0, '2017-05-02', '2022-06-12', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bucket`
--

CREATE TABLE IF NOT EXISTS `bucket` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Quantity` varchar(50) NOT NULL,
  `Total_Price` int(11) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bucket`
--

INSERT INTO `bucket` (`order_id`, `Quantity`, `Total_Price`) VALUES
(1, '5', 15),
(2, '10', 35),
(3, '50', 100),
(4, '753', 248),
(5, '333', 33);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `type`) VALUES
(1, 'drama'),
(2, 'mystery'),
(3, 'educational'),
(4, 'triler'),
(5, 'history'),
(6, 'crime');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_firstname` varchar(30) NOT NULL,
  `member_lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tell_number` varchar(30) DEFAULT NULL,
  `DOB` varchar(30) DEFAULT NULL,
  `Registration_Date` varchar(30) DEFAULT NULL,
  `ZipCode` int(5) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street`) VALUES
(1, 'nikola', 'gruevski', 'vmro@hotmail.com', '075258789', '12352485485', '2017-02-22 19:03:27', 1000, 'Makedonija', 'Skopje', 'cela broj 38'),
(2, 'zoran', 'zaev', 'sdsm@hotmail.com', '0754576', '1803992415', '2017-02-22 19:05:22', 2400, 'Makedonija', 'strumica', 'radisani broj 30'),
(3, 'ace', 'mitrevski', 'seloo@hotmail.com', '07526889', '87352485485', '2016-05-22 17:22:15', 1000, 'Makedonija', 'Skopje', 'cela broj 38'),
(4, 'Stefan', 'Salev', 'dzalev33@gmail.com', '+38975873006', '18-03-1992', '22-01-2017', 7000, 'Macedonia [FYROM]', 'Bitola', 'Anesti Panovski 38'),
(5, 'magdalena', 'siljanoska', 'magdilenceto@hotmail.com', '02458456', '02-02-2018', '22-01-2187', 7000, 'Macedonia [FYROM]', 'Bitola', 'crn most');

-- --------------------------------------------------------

--
-- Table structure for table `order_book`
--

CREATE TABLE IF NOT EXISTS `order_book` (
  `order_book_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int(10) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`order_book_id`),
  KEY `book_id` (`book_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_book`
--

INSERT INTO `order_book` (`order_book_id`, `book_id`, `order_id`) VALUES
(1, 1, 3),
(2, 2, 1),
(3, 3, 3),
(4, 3, 3),
(5, 3, 3),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `card_holder_Surname` varchar(50) DEFAULT NULL,
  `card_number` int(20) DEFAULT NULL,
  `card_expiary_date` int(11) DEFAULT NULL,
  `card_type` varchar(20) DEFAULT NULL,
  `security_code` int(3) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `card_holder_Surname`, `card_number`, `card_expiary_date`, `card_type`, `security_code`, `order_id`) VALUES
(1, 'gruevski', 255555477, 2018, 'master', 328, 2),
(2, 'zaev', 2147483647, 2018, 'visa', 119, 1),
(3, 'dzalev ', 2222222, 2222, 'maester', 222, 9);
