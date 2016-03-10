-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2016 at 08:24 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `announID` varchar(15) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `content` varchar(400) DEFAULT NULL,
  `PostTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`announID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `annonces`
--

INSERT INTO `annonces` (`announID`, `title`, `content`, `PostTime`) VALUES
('20160308001', 'Newly paper', 'The newest paper is uploaded, please read it!', '2016-03-08 11:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `checkannounce`
--

CREATE TABLE IF NOT EXISTS `checkannounce` (
  `stID` varchar(11) NOT NULL,
  `announID` varchar(11) NOT NULL,
  PRIMARY KEY (`stID`,`announID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkannounce`
--

INSERT INTO `checkannounce` (`stID`, `announID`) VALUES
('0930123', '20160308001'),
('0930224', '20160308001'),
('0930756', '20160308001');

-- --------------------------------------------------------

--
-- Table structure for table `consists`
--

CREATE TABLE IF NOT EXISTS `consists` (
  `projID` varchar(11) NOT NULL,
  `taskID` varchar(15) NOT NULL,
  PRIMARY KEY (`projID`,`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `consists`
--

INSERT INTO `consists` (`projID`, `taskID`) VALUES
('20160001', '1'),
('20160001', '2'),
('20160002', '3'),
('20160002', '4'),
('20160004', '5');

-- --------------------------------------------------------

--
-- Table structure for table `distributes`
--

CREATE TABLE IF NOT EXISTS `distributes` (
  `taskID` int(11) NOT NULL,
  `profID` varchar(11) NOT NULL,
  PRIMARY KEY (`taskID`,`profID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `distributes`
--

INSERT INTO `distributes` (`taskID`, `profID`) VALUES
(1, '0201'),
(2, '0103'),
(3, '0201'),
(4, '0101'),
(5, '0102');

-- --------------------------------------------------------

--
-- Table structure for table `doing`
--

CREATE TABLE IF NOT EXISTS `doing` (
  `taskID` int(11) NOT NULL,
  `stID` varchar(11) NOT NULL,
  `last_start_time` datetime DEFAULT NULL,
  `last_end_time` datetime DEFAULT NULL,
  PRIMARY KEY (`taskID`,`stID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doing`
--

INSERT INTO `doing` (`taskID`, `stID`, `last_start_time`, `last_end_time`) VALUES
(1, '0930224', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(1, '0930756', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(2, '0930123', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(2, '0930756', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(3, '0930756', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(4, '0930121', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(4, '0930676', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(4, '0930767', '2016-03-04 15:14:20', '2016-03-04 16:16:21'),
(5, '0930666', '2016-03-04 15:14:20', '2016-03-04 16:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `gives`
--

CREATE TABLE IF NOT EXISTS `gives` (
  `profID` varchar(11) NOT NULL,
  `annonID` varchar(15) NOT NULL,
  PRIMARY KEY (`profID`,`annonID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gives`
--

INSERT INTO `gives` (`profID`, `annonID`) VALUES
('0103', '20160308001');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE IF NOT EXISTS `guides` (
  `profID` varchar(11) NOT NULL,
  `stID` varchar(11) NOT NULL,
  PRIMARY KEY (`profID`,`stID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`profID`, `stID`) VALUES
('0101', '0930121'),
('0101', '0930676'),
('0102', '0930756'),
('0103', '0930123'),
('0103', '0930224'),
('0103', '0930756'),
('0201', '0930123'),
('0201', '0930224'),
('0201', '0930756'),
('0301', '0930666');

-- --------------------------------------------------------

--
-- Table structure for table `hosts`
--

CREATE TABLE IF NOT EXISTS `hosts` (
  `projID` varchar(15) NOT NULL,
  `profID` varchar(11) NOT NULL,
  PRIMARY KEY (`projID`,`profID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hosts`
--

INSERT INTO `hosts` (`projID`, `profID`) VALUES
('20160001', '0103'),
('20160001', '0201'),
('20160002', '0101'),
('20160002', '0102'),
('20160003', '0102'),
('20160004', '0301');

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE IF NOT EXISTS `participate` (
  `projID` varchar(15) NOT NULL,
  `stID` varchar(11) NOT NULL,
  PRIMARY KEY (`projID`,`stID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`projID`, `stID`) VALUES
('20160001', '0930123'),
('20160001', '0930224'),
('20160001', '0930756'),
('20160002', '0930121'),
('20160002', '0930676'),
('20160002', '0930767'),
('20160003', '0930121'),
('20160003', '0930676'),
('20160003', '0930756'),
('20160004', '0930666');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE IF NOT EXISTS `professors` (
  `profID` varchar(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hintQ` varchar(45) NOT NULL,
  `hintAns` varchar(45) NOT NULL,
  PRIMARY KEY (`profID`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `profID_UNIQUE` (`profID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`profID`, `email`, `password`, `hintQ`, `hintAns`) VALUES
('0101', 'yatang@kean.edu', '123456', 'Your husband', 'Pinata'),
('0102', 'pwinoto@wku.edu.cn', '123457', 'Your wife', 'Tiffany'),
('0103', 'czhang@kean.edu', 'zhangc', 'Student your hate most', 'Sam'),
('0201', 'ymeng@kean.edu', 'Yoyo@Newjersy', 'Student your hate most', 'Sam'),
('0301', 'liq@kean.edu', '123456', 'Your department', 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `projectID` varchar(15) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `title` varchar(145) DEFAULT NULL,
  `abstract` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`projectID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectID`, `name`, `title`, `abstract`) VALUES
('20160001', 'BBB Study', 'How water gets into brain?', 'If water gets into your brain, you''ll become stupid. This paper presents a novely new hypothesis of how water gets into brain which is the heatest topic being studying even in such an enviroment. Our project has the potential to be useful for nuron science and computer science. '),
('20160002', 'HCI Project', 'Will AI govern our world', 'In various movies, AI becomes so developed that their products, robots have self conciousness. This work studies the possibility that AI develop their self-consciousness and the possible ways to solve them. '),
('20160003', 'Computer Theory', 'Web App', 'This study works on developing the appropriate web system which designed for various roles related to SPF project. '),
('20160004', 'Taobao and Money', 'How Taobao makes you lost money', 'As recent data shows that the total amount of saling in Chinese website Taobao have been reached to nearly 2 billions. How Tabao makes such an amount of money from consumers who lost their money is the key work that this study pays attention on. ');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `stID` varchar(11) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hintQ` varchar(45) NOT NULL,
  `hintAns` varchar(45) NOT NULL,
  `total_hrs` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stID`),
  UNIQUE KEY `stID_UNIQUE` (`stID`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stID`, `email`, `password`, `hintQ`, `hintAns`, `total_hrs`) VALUES
('0930121', 'leila@wku.edu.cn', '987654', 'Your bank account?', 'Chinabank', 4),
('0930123', 'allenturing@wku.edu.cn', 'allen@703', 'Your wife?', 'Jasmri', 0),
('0930224', 'fredy@kean.edu', 'helloworld', 'Your best friend', 'Sam', 0),
('0930666', 'luozheyu@kean.edu', 'youstupid', 'My pet', 'Bubbles', 0),
('0930676', 'christen@wku.edu.cn', '123456', 'Your husband?', 'Monkey', 0),
('0930756', 'yanjiangyue756@wku.edu.cn', 'yjy-1234', 'Your advisor', 'Pinata', 22),
('0930767', 'wangyongfu@wku.edu.cn', 'abcdefg', 'Your roommate', 'Ken', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `taskID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `discrip` varchar(545) NOT NULL,
  `max_hrs` int(11) NOT NULL DEFAULT '10',
  `progress` double NOT NULL DEFAULT '0',
  `assign_time` datetime NOT NULL,
  `deadline` datetime NOT NULL,
  PRIMARY KEY (`taskID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `title`, `discrip`, `max_hrs`, `progress`, `assign_time`, `deadline`) VALUES
(1, 'Clean my toilet', 'Help me clean my toilets during Sunday.', 10, 0, '2016-03-08 00:00:00', '2016-03-18 00:00:00'),
(2, 'Chat with me', 'I''m lonely, please chat with me in the whole afternoon.', 10, 0, '2016-03-08 00:00:15', '2016-03-08 00:00:24'),
(3, 'Develop app', 'Please help me develop apps.', 10, 0, '2016-03-08 00:00:24', '2016-03-08 08:08:00'),
(4, 'Test bugs', 'Please help me test bugs', 10, 0, '2016-03-08 08:08:00', '2016-03-08 09:27:00'),
(5, 'Write papers', 'Finish your paper before Saturday!', 10, 0, '2016-03-08 09:27:00', '2016-03-09 05:04:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
