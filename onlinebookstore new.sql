-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2017 at 09:55 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.17-2+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `position` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`admin_id`, `position`, `user_name`, `password`, `first_name`, `last_name`) VALUES
(80, 's', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 's', ''),
(81, ',jj', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'jj', 'j'),
(79, 'trtrtr', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'tytr', 'ttrt'),
(78, '', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 't', ''),
(17, 'sef', 'dzalev', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'stefan', 'dzalev'),
(85, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(69, 'fgh', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'htngbf', 'ghtngb'),
(71, 'managercccc', 'magdilencheto', '6b0d31c0d563223024da45691584643ac78c96e8', 'Magdalena', 'Siljanoska'),
(72, 's', 'oot', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'd', 'd'),
(73, 'f', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'f', 'f'),
(74, 'h', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'h', 'h'),
(75, 'sdfgnfdssbv ', 'dsffgndgs', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'asddfbvn v', 'DAFSBV'),
(76, 'nb', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'gtrgtr', 'gtrgtr'),
(77, 'gh', 'root', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'nhg', ''),
(83, 'pppppppppppppppppppppppppppppppppppppp', 'ppppppppppppppppp', 'b4c0f5a499009adeba7338326db7e94fc73e649d', 'ppppppppppppp', 'lllllllllllllllllllllll'),
(84, 'ASSSSSSSSSSSSSSSSSSSSSSSSS', 'rootDEDDDDDDDDD', '77de68daecd823babbb58edb1c8e14d7106e83bb', 'ASSSSSSSSSSSSSSSSSSSSSSS', 'ASSSSSSSSSSSSSSSSSSSSSSSSS'),
(86, '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `img_author` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `firstname`, `lastname`, `img_author`) VALUES
(55, 'Mark', 'Twain', 'Mark_Twain.jpg'),
(54, 'George', 'Martin', 'George-RR-Martin.jpg'),
(53, 'Sidney', 'Sheldon', 'Sidney_Sheldon.jpg'),
(52, 'Dan', 'Brown', 'Dan_Brown.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE `author_book` (
  `author_book_id` int(10) UNSIGNED NOT NULL,
  `author_id` int(10) DEFAULT NULL,
  `book_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author_book`
--

INSERT INTO `author_book` (`author_book_id`, `author_id`, `book_id`) VALUES
(9, 52, 32),
(10, 53, 36),
(8, 52, 30),
(20, 55, 30),
(13, 55, 42),
(25, 54, 32);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Stock` int(10) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `img_path` varchar(255) NOT NULL,
  `description` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `Title`, `Price`, `Language`, `Stock`, `category_id`, `img_path`, `description`) VALUES
(30, 'Inferno', 38, 'English', 100, 4, 'Inferno-cover_6.jpg', 0x486172766172642070726f666573736f7220526f62657274204c616e67646f6e2077616b657320757020696e206120686f73706974616c20776974682061206865616420776f756e6420616e64206e6f206d656d6f7279206f6620746865206c6173742066657720646179732e204865206c6173742072656d656d626572732077616c6b696e67206f6e2074686520486172766172642063616d7075732c2062757420686520717569636b6c79207265616c697a65732074686174206865206973206e6f7720696e20466c6f72656e63652c204974616c792e2044722e205369656e6e612042726f6f6b732c206f6e65206f662074686520646f63746f72732074656e64696e6720746f2068696d2c2072657665616c73207468617420686520697320737566666572696e672066726f6d20616d6e657369612e),
(32, 'DaVinciCode', 40, 'English', 100, 4, 'DaVinciCode_3.jpg', 0x4c6f757672652063757261746f7220616e64205072696f7279206f662053696f6e206772616e64206d6173746572204a616371756573205361756e69c3a8726520697320666174616c6c792073686f74206f6e65206e6967687420617420746865206d757365756d20627920616e20616c62696e6f20436174686f6c6963206d6f6e6b206e616d65642053696c61732c2077686f20697320776f726b696e67206f6e20626568616c66206f6620736f6d656f6e65206865206b6e6f7773206f6e6c792061732074686520546561636865722c2077686f2077697368657320746f20646973636f76657220746865206c6f636174696f6e206f662074686520),
(36, 'Tell Me Your Dreams', 50, 'English', 100, 16, 'sheldon_6.jpg', 0x4173686c6579206665617273207468617420736f6d65626f647920697320666f6c6c6f77696e67206865722e205368652066696e64732068657220686f757365206c6967687473207475726e6564206f6e207768656e207368652072657475726e732066726f6d20776f726b2c2068657220706572736f6e616c206566666563747320696e2064697361727261792c20616e6420736f6d656f6e6520686173207772697474656e2022596f752077696c6c2064696522206f6e20686572206d6972726f7220776974682061206c6970737469636b2e),
(39, 'Master of the Game', 38, 'English', 100, 3, 'Master_Of_The_Game_5.jpg', 0x4b6174652067726f77732075702066616c6c696e6720696e206c6f7665207769746820426c61636b77656c6c2c2064657370697465207468656972206c617267652061676520646966666572656e636520616e64206869732076696577206f6620686572206173206e6f7468696e67206d6f7265207468616e2061206368696c642c20616e6420766f77732074686174207368652077696c6c206d617272792068696d206f6e65206461792e),
(41, 'Clash Of Kings', 66, 'English', 100, 9, 'clashofkings_5.jpg', 0x4172796120537461726b20616e64207468652067616d65206f66207468726f6e657320626573742073656c6c696e6720626f6f6b),
(43, 'The Adventures of Tom Soyer', 20, 'English', 100, 17, 'tomSoyer.jpg', 0x546f6d20536177796572206c697665732077697468206869732041756e7420506f6c6c7920616e64206869732068616c662d62726f74686572205369642e20486520736b697073207363686f6f6c20746f207377696d20616e64206973206d61646520746f20776869746577617368207468652066656e636520746865206e657874206461792061732070756e6973686d656e742e20486520636c657665726c79207065727375616465732068697320667269656e647320746f2074726164652068696d20736d616c6c2074726561737572657320666f72207468652070726976696c656765206f6620646f696e672068697320776f726b2e204865207468656e20747261646573207468652074726561737572657320666f722053756e646179205363686f6f6c207469636b657473207768696368206f6e65206e6f726d616c6c7920726563656976657320666f72206d656d6f72697a696e672076657273657320636f6e73697374656e746c792c2072656465656d696e67207468656d20666f722061204269626c652c206d75636820746f2074686520737572707269736520616e6420626577696c6465726d656e74206f6620746865207375706572696e74656e64656e742077686f2074686f7567687420226974207761732073696d706c7920707265706f737465726f75732074686174207468697320626f79206861642077617265686f757365642074776f2074686f7573616e642073686561766573206f66205363726970747572616c20776973646f6d206f6e20686973207072656d69736573e280946120646f7a656e20776f756c642073747261696e206869732063617061636974792c20776974686f7574206120646f7562742e22);

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_by`
--

CREATE TABLE `borrowed_by` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) UNSIGNED NOT NULL,
  `Due_Date` date DEFAULT NULL,
  `Return_Date` date DEFAULT NULL,
  `borrowed_by_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed_by`
--

INSERT INTO `borrowed_by` (`member_id`, `book_id`, `Due_Date`, `Return_Date`, `borrowed_by_id`) VALUES
(4, 43, '2019-05-11', '2017-02-11', 8);

-- --------------------------------------------------------

--
-- Table structure for table `bucket`
--

CREATE TABLE `bucket` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `Quantity` int(50) NOT NULL,
  `Total_Price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bucket`
--

INSERT INTO `bucket` (`order_id`, `Quantity`, `Total_Price`) VALUES
(16, 123, 123),
(10, 111, 111),
(7, 50, 25),
(17, 123333, 123344);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `type`) VALUES
(17, 'Advanture'),
(3, 'educational'),
(4, 'triler'),
(5, 'historys'),
(16, 'Drama'),
(9, 'Mystery'),
(21, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_firstname` varchar(30) NOT NULL,
  `member_lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tell_number` varchar(30) DEFAULT NULL,
  `DOB` varchar(30) DEFAULT NULL,
  `Registration_Date` varchar(30) DEFAULT NULL,
  `ZipCode` int(5) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Street` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_firstname`, `member_lastname`, `email`, `tell_number`, `DOB`, `Registration_Date`, `ZipCode`, `Country`, `City`, `Street`) VALUES
(1, 'nikola', 'gruevski', 'vmro@hotmail.com', '075258789', '12352485485', '2017-02-22 19:03:27', 1000, 'unknown', 'zatvor', 'cela broj 38'),
(6, 'mice', 'pecevski', 'dzalev33@gmail.com', '075873006', '22.15.2019', '22.03.2018', 7000, 'Macedonia [FYROM]', 'Bitola', 'Anesti Panovski 38'),
(7, 'pece', 'pecevski', 'dzalev33@gmail.com', '075873006', '22.15.2019', '22.03.2018', 7000, 'Macedonia [FYROM]', 'Bitola', 'Anesti Panovski 38'),
(4, 'Stefan', 'Salev', 'dzalev33@gmail.com', '+38975873006', '18-03-1992', '22-01-2017', 100, 'Macedonia [FYROM]', 'Bitola', 'Anesti Panovski 38'),
(10, 'testing', 'pecckata', 'soaihr@hotmail.fom', '123123123', '18-03-1992', '22-01-2017', 8000, 'bazatest', 'baza', 'bazatest'),
(11, 'testing', 'pecckata', 'soaihr@hotmail.fom', '123123123', '18-03-1992', '22-01-2017', 8000, 'bazatest', 'baza', 'bazatest'),
(12, 'testing', 'pecckata', 'soaihr@hotmail.fom', '123123123', '18-03-1992', '22-01-2017', 8000, 'bazatest', 'baza', 'bazatest'),
(13, 'Stefan', 'Salev', 'dzalev33@gmail.com', '+38975873006', '', '', 7000, 'Macedonia [FYROM]', 'Bitola', 'Anesti Panovski 38'),
(14, 'Stefan', 'Salev', 'dzalev33@gmail.com', '+38975873006', '', '', 7000, 'Macedonia [FYROM]', 'Bitola', 'Anesti Panovski 38');

-- --------------------------------------------------------

--
-- Table structure for table `order_book`
--

CREATE TABLE `order_book` (
  `order_book_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(10) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_book`
--

INSERT INTO `order_book` (`order_book_id`, `book_id`, `order_id`) VALUES
(17, 30, 10),
(19, 30, 10),
(15, 30, 7);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `card_holder_Surname` varchar(50) DEFAULT NULL,
  `card_number` int(20) DEFAULT NULL,
  `card_expiary_date` int(11) DEFAULT NULL,
  `card_type` varchar(20) DEFAULT NULL,
  `security_code` int(3) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `card_holder_Surname`, `card_number`, `card_expiary_date`, `card_type`, `security_code`, `order_id`) VALUES
(3, 'dzalev', 2222222, 2222, 'master', 222, 7),
(5, 'asdsadd', 841315, 651, 'visa', 123, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
  ADD PRIMARY KEY (`author_book_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `borrowed_by`
--
ALTER TABLE `borrowed_by`
  ADD PRIMARY KEY (`borrowed_by_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `bucket`
--
ALTER TABLE `bucket`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `order_book`
--
ALTER TABLE `order_book`
  ADD PRIMARY KEY (`order_book_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
--
-- AUTO_INCREMENT for table `author_book`
--
ALTER TABLE `author_book`
  MODIFY `author_book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `borrowed_by`
--
ALTER TABLE `borrowed_by`
  MODIFY `borrowed_by_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `bucket`
--
ALTER TABLE `bucket`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `order_book`
--
ALTER TABLE `order_book`
  MODIFY `order_book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
