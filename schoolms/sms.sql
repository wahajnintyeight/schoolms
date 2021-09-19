-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2020 at 10:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--
CREATE DATABASE IF NOT EXISTS `sms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `book_copies`
--

DROP TABLE IF EXISTS `book_copies`;
CREATE TABLE IF NOT EXISTS `book_copies` (
  `book_id` int(11) NOT NULL,
  `no_of_copies` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_copies`
--

INSERT INTO `book_copies` (`book_id`, `no_of_copies`) VALUES
(1, 100),
(2, 1000),
(3, 10),
(4, 100),
(5, 1000),
(6, 100),
(7, 500),
(8, 100),
(9, 900),
(10, 100),
(11, 100),
(12, 400),
(13, 100),
(14, 100),
(15, 100);

-- --------------------------------------------------------

--
-- Table structure for table `book_shop`
--

DROP TABLE IF EXISTS `book_shop`;
CREATE TABLE IF NOT EXISTS `book_shop` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(20) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_shop`
--

INSERT INTO `book_shop` (`book_id`, `book_name`, `amount`) VALUES
(1, 'English', 200),
(2, 'English copy', 50),
(3, 'Maths', 200),
(4, 'Maths copy', 50),
(5, 'Urdu', 200),
(6, 'Urdu Copy', 50),
(7, 'Islamiat', 200),
(8, 'Islamiat copy', 50),
(9, 'Social Studies', 200),
(10, 'Social Studies copy', 50),
(11, 'Bio', 200),
(12, 'Bio copy', 50),
(13, 'che', 200),
(14, 'Phy', 200),
(15, 'Computer', 200);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE IF NOT EXISTS `class` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `classname` varchar(20) DEFAULT NULL,
  `class_strength` int(10) DEFAULT NULL,
  `class_teacher` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `class_teacher` (`class_teacher`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL,
  `designation` varchar(10) DEFAULT NULL,
  `pay` int(11) DEFAULT NULL,
  `joiningdate` date DEFAULT NULL,
  `leftdate` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `designation`, `pay`, `joiningdate`, `leftdate`, `status`) VALUES
(1, 'Accounts', 10000, '2001-01-01', NULL, 1),
(2, 'maid', 5000, '2000-07-19', NULL, 1),
(3, 'Teacher bi', 10000, '2007-01-01', NULL, 1),
(4, 'Teacher ph', 15000, '2012-01-01', NULL, 1),
(5, 'Teacher ch', 10000, '2001-02-01', NULL, 1),
(6, 'Teacher ph', 15000, '2012-03-01', NULL, 1),
(7, 'Teacher bi', 10000, '2001-01-01', NULL, 1),
(8, 'Teacher is', 15000, '2014-01-02', NULL, 1),
(9, 'Teacher bi', 10000, '2007-01-01', NULL, 1),
(10, 'Teacher ph', 15000, '2012-01-01', NULL, 1),
(11, 'Teacher bi', 10000, '2007-01-01', NULL, 1),
(12, 'Teacher ma', 15000, '2011-05-01', NULL, 1),
(13, 'Teacher bi', 10000, '2002-01-01', '2003-01-01', 0),
(14, 'Teacher ph', 15000, '2011-01-01', '2012-01-01', 0),
(15, 'Teacher bi', 10000, '2001-01-01', '2002-01-01', 0),
(16, 'Teacher ma', 15000, '2001-01-01', '2002-01-01', 0),
(17, 'Teacher bi', 10000, '2015-01-01', '2017-01-01', 0),
(18, 'Teacher ur', 15000, '2002-01-01', '2003-01-01', 0),
(19, 'Teacher bi', 10000, '2009-01-01', '2018-01-01', 0),
(20, 'Teacher En', 15000, '2012-01-01', '2014-01-01', 0),
(21, 'Teacher gk', 10000, '2007-01-01', '2009-01-01', 0),
(22, 'Teacher ph', 15000, '2012-01-01', '2013-01-01', 0),
(23, 'maid', 10000, '2007-01-01', NULL, 1),
(24, 'maid', 15000, '2012-01-01', NULL, 1),
(25, 'maid', 10000, '2007-01-01', NULL, 1),
(26, 'gardner', 15000, '2012-01-01', NULL, 1),
(27, 'gardner', 10000, '2007-01-01', NULL, 1),
(28, 'gardner', 15000, '2012-01-01', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `employee_name` varchar(20) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `salary` int(20) DEFAULT NULL,
  `designation` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_accounts`
--

DROP TABLE IF EXISTS `employee_accounts`;
CREATE TABLE IF NOT EXISTS `employee_accounts` (
  `emp_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`,`t_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_accounts`
--

INSERT INTO `employee_accounts` (`emp_id`, `t_id`) VALUES
(1, 101),
(2, 102),
(3, 103),
(4, 104),
(5, 105),
(6, 106),
(7, 107),
(8, 108),
(9, 109);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

DROP TABLE IF EXISTS `fees`;
CREATE TABLE IF NOT EXISTS `fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `fee` int(11) DEFAULT '0',
  `paper_fund` int(11) DEFAULT '0',
  `remaining` int(11) DEFAULT '0',
  `fine` int(11) DEFAULT '0',
  `other` int(11) DEFAULT '0',
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `student_id`, `fee`, `paper_fund`, `remaining`, `fine`, `other`, `time`) VALUES
(2, 6, 450, 0, 0, 10, 0, '2020-01-24 13:27:36'),
(7, 4, 500, 25, 0, 50, 0, '2020-01-24 14:45:45'),
(6, 6, 590, 20, 0, 56, 0, '2020-01-24 14:44:00'),
(8, 6, 552, 25, 0, 67, 0, '2020-01-24 14:47:07'),
(9, 6, 632, 37, 0, 22, 0, '2020-01-24 14:49:00'),
(10, 6, 10, 0, 0, 0, 0, '2020-01-24 16:06:53'),
(11, 6, 57, 0, 0, 0, 0, '2020-01-24 16:10:10'),
(12, 6, 66, 0, 0, 0, 0, '2020-01-24 16:11:25'),
(13, 8, 1000, 0, 0, 0, 0, '2020-01-25 19:20:44'),
(14, 8, 1000, 0, 0, 0, 0, '2020-01-25 19:20:56'),
(15, 37, 520, 250, 0, 50, 600, '2020-01-28 01:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `gardian`
--

DROP TABLE IF EXISTS `gardian`;
CREATE TABLE IF NOT EXISTS `gardian` (
  `gardian_id` int(11) NOT NULL,
  `gardian_name` varchar(25) DEFAULT NULL,
  `phnum` varchar(25) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gsex` char(1) DEFAULT NULL,
  PRIMARY KEY (`gardian_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gardian`
--

INSERT INTO `gardian` (`gardian_id`, `gardian_name`, `phnum`, `address`, `email`, `gsex`) VALUES
(1, 'Imran', '03001234567', 'colonay textile mill c block', 'iamran@gmail.com', 'M'),
(2, 'fatimah', '03001234566', 'colonay textile mill c block', 'iamr@gmail.com', 'F'),
(3, 'ayesha', '03001234555', 'colonay textile mill c block', 'sss@gmail.com', 'F'),
(4, 'Ahmag', '0300123666', 'colonay textile mill k block', 'ia@gmail.com', 'M'),
(5, 'asad', '03001234777', 'colonay textile mill f block', 'king@gmail.com', 'M'),
(6, 'shiza', '0300123457', 'colonay textile mill d block', 'king@gmail.com', 'F'),
(7, 'shista', '0300123787', '7th mile y block', 'shaz@gmail.com', 'F'),
(8, 'asif', '0300123787', '7th mile y block', 'shaz@gmail.com', 'F'),
(9, 'faheem', '03006623787', '7th mile y block', 'sz@gmail.com', 'M'),
(10, 'ali', '0366123787', '7th mile y block', 'saz@gmail.com', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `t_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `payment_type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`section_id`,`t_id`),
  KEY `t_id` (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

DROP TABLE IF EXISTS `school`;
CREATE TABLE IF NOT EXISTS `school` (
  `sid` int(11) NOT NULL,
  `sname` varchar(35) DEFAULT NULL,
  `phnum` varchar(12) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`sid`, `sname`, `phnum`, `address`, `email`) VALUES
(1, 'primary Aess', '', '7th mile shar shah road ,', ''),
(2, 'Secondary Aess', '', '7th mile shar shah road ,', ''),
(3, 'kind Aess', '', '7th mile shar shah road ,', ''),
(4, 'Accounts', '', '7th mile shar shah road ,', ''),
(5, 'Staff', '061-4420777', '7th mile shar shah road ,', 'staff.info@aess.com');

-- --------------------------------------------------------

--
-- Table structure for table `section_level`
--

DROP TABLE IF EXISTS `section_level`;
CREATE TABLE IF NOT EXISTS `section_level` (
  `section_id` int(11) NOT NULL AUTO_INCREMENT,
  `sectionname` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_level`
--

INSERT INTO `section_level` (`section_id`, `sectionname`) VALUES
(1, 'Playgroup'),
(2, 'pnursury'),
(3, 'nursury'),
(4, 'Prep'),
(5, 'One'),
(6, 'Two'),
(7, 'three'),
(8, 'four'),
(9, 'five'),
(10, 'six'),
(11, 'seven'),
(12, 'eight'),
(17, 'Ten'),
(18, 'Nine'),
(19, 'Hime');

-- --------------------------------------------------------

--
-- Table structure for table `sold_books`
--

DROP TABLE IF EXISTS `sold_books`;
CREATE TABLE IF NOT EXISTS `sold_books` (
  `book_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date_of_purchase` date DEFAULT NULL,
  PRIMARY KEY (`book_id`,`student_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold_books`
--

INSERT INTO `sold_books` (`book_id`, `student_id`, `date_of_purchase`) VALUES
(1, 1, '2017-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `registration_num` varchar(10) DEFAULT NULL,
  `student_fname` varchar(35) DEFAULT NULL,
  `student_lname` varchar(35) DEFAULT NULL,
  `guardian_name` varchar(20) NOT NULL,
  `sex` char(1) DEFAULT NULL,
  `FeeID` int(11) DEFAULT NULL,
  `home_address` varchar(30) DEFAULT NULL,
  `phonenumber` int(10) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `registration_num`, `student_fname`, `student_lname`, `guardian_name`, `sex`, `FeeID`, `home_address`, `phonenumber`) VALUES
(1, NULL, 'Ayan', '', '', 'M', NULL, NULL, NULL),
(2, NULL, 'Abid', '', '', 'M', NULL, NULL, NULL),
(3, NULL, 'Horrain', '', '', 'F', NULL, NULL, NULL),
(4, NULL, 'Javeria', '', '', 'F', NULL, NULL, NULL),
(5, NULL, 'Ayesha', '', '', 'F', NULL, NULL, NULL),
(6, NULL, 'Muskan', '', '', 'F', NULL, NULL, NULL),
(7, NULL, 'Imran', 'Fatimah', '', 'F', NULL, NULL, NULL),
(8, NULL, 'sana', '', '', 'F', NULL, NULL, NULL),
(9, NULL, 'yaseen', '', '', 'F', NULL, NULL, NULL),
(11, NULL, 'Hamdan', '', '', 'M', NULL, NULL, NULL),
(12, NULL, 'Hamza', 'asif', '', 'M', NULL, NULL, NULL),
(101, NULL, 'Ali', 'asif', '', 'M', NULL, NULL, NULL),
(102, NULL, 'Ahmad', 'asif', '', 'M', NULL, NULL, NULL),
(103, NULL, 'saqib', 'junaid', '', 'M', NULL, NULL, NULL),
(104, NULL, 'momin', 'junaid', '', 'M', NULL, NULL, NULL),
(105, NULL, 'naila', 'fatimah', '', 'F', NULL, NULL, NULL),
(106, NULL, 'shakeela', 'Fatimah', '', 'F', NULL, NULL, NULL),
(107, NULL, 'Ammara', 'cheema', '', 'F', NULL, NULL, NULL),
(108, NULL, 'Asia', 'asif', '', 'F', NULL, NULL, NULL),
(201, NULL, 'Haris', 'asif', '', 'M', NULL, NULL, NULL),
(202, NULL, 'shoaib', 'asif', '', 'M', NULL, NULL, NULL),
(207, NULL, 'zainab', 'cheema', '', 'F', NULL, NULL, NULL),
(208, NULL, 'cheeka', 'asif', '', 'F', NULL, NULL, NULL),
(301, NULL, 'suriya', 'cheema', '', 'F', NULL, NULL, NULL),
(302, NULL, 'alina', 'asif', '', 'F', NULL, NULL, NULL),
(401, NULL, 'zubda', 'cheema', '', 'F', NULL, NULL, NULL),
(402, NULL, 'alina', 'akhtar', '', 'F', NULL, NULL, NULL),
(501, NULL, 'aqsa', 'cheema', '', 'F', NULL, NULL, NULL),
(502, NULL, 'ayesha', 'asif', '', 'F', NULL, NULL, NULL),
(601, NULL, 'hina', 'cheema', '', 'F', NULL, NULL, NULL),
(602, NULL, 'rabia', 'asif', '', 'F', NULL, NULL, NULL),
(701, NULL, 'maham', 'cheema', '', 'F', NULL, NULL, NULL),
(702, NULL, 'asma', 'asif', '', 'F', NULL, NULL, NULL),
(801, NULL, 'shazia', 'cheema', '', 'F', NULL, NULL, NULL),
(802, NULL, 'rimsha', 'asif', '', 'F', NULL, NULL, NULL),
(901, NULL, 'romaisha', 'cheema', '', 'F', NULL, NULL, NULL),
(902, NULL, 'fatima', 'asif', '', 'F', NULL, NULL, NULL),
(1000, NULL, 'fazeke', 'hashi', '', 'M', NULL, NULL, NULL),
(1001, NULL, 'toti', 'totii', '', 'M', NULL, NULL, NULL),
(10010, NULL, 'ajsjbj', 'akjsjcj', '', 'M', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(30) NOT NULL,
  `registration_num` varchar(20) DEFAULT NULL,
  `student_fname` varchar(35) DEFAULT NULL,
  `student_lname` varchar(35) DEFAULT NULL,
  `guardian_name` varchar(35) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `monthly_fee` int(10) DEFAULT '0',
  `home_address` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(15) DEFAULT NULL,
  `totalmarks` int(11) NOT NULL DEFAULT '0',
  `age` int(11) NOT NULL,
  `s_sid` int(11) NOT NULL DEFAULT '100',
  `registered_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`),
  KEY `s_sid` (`s_sid`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `password`, `registration_num`, `student_fname`, `student_lname`, `guardian_name`, `sex`, `monthly_fee`, `home_address`, `phonenumber`, `totalmarks`, `age`, `s_sid`, `registered_on`) VALUES
(1, 'hamzach12', 'AESS157', 'Hamza', 'Ch', 'Khan', 'M', NULL, 'Lahore', '03004330640', 26, 19, 1, '2020-01-22 01:04:04'),
(5, 'abidali12', 'AESS022', 'Abid', 'Aliii', 'Ali', 'M', NULL, 'Walton, Lahore', '03241766', 63, 19, 2, '2020-01-17 01:04:04'),
(4, 'aryanali12', 'AESS02', 'Aryan', 'Ali', 'Ali', 'M', NULL, 'Walton, Lahore', '03245166', 0, 15, 3, '2020-01-24 01:04:04'),
(6, 'horrainemon12', 'AESS051', 'Horraine', 'Mon', 'Mon', 'F', 2000, 'DHA, Lahore', '03256163', 55, 11, 4, '2020-01-27 01:04:04'),
(7, 'khan202', 'AESS181', 'Ali Khan', 'Sahab', 'Wali', 'M', NULL, 'KPK', '052352667', 62, 19, 5, '2020-01-21 01:04:04'),
(8, 'abcdef', 'AESS105', 'ABC', 'DEF', 'ABCDEF', 'M', 5000, 'Home Ad', '52835920', 36, 20, 2, '2020-01-22 01:04:04'),
(15, 'hsamzach12', 'AESS127', 'Haamza', 'Cgh', 'Khjan', 'F', NULL, 'Lahore', '03004330640', 28, 19, 1, '2020-01-24 01:04:04'),
(16, 'hsamzach12', 'AESS1237', 'Haamza', 'Cgh', 'Khjan', 'F', NULL, 'Lahore', '03004330640', 0, 19, 1, '2020-01-10 01:04:04'),
(17, 'hsahzach12', 'AESS1297', 'Huzaifa', 'Umer', 'Buzdar', 'M', NULL, 'Quetta', '02415693', 56, 20, 2, '2020-01-23 01:04:04'),
(18, 'hsaszach12', 'AESS1267', 'Haamza', 'Cgh', 'Khjan', 'F', NULL, 'Lahore', '03004630640', 52, 12, 2, '2020-01-23 01:04:04'),
(19, 'hweamzsach12', 'AESS117', 'Haamza', 'Cgh', 'Khjan', 'F', NULL, 'Lahore', '03007330640', 74, 19, 2, '2020-01-27 01:04:04'),
(20, 'hgamzach12', 'AESS177', 'Haamza', 'Cgh', 'Khjan', 'F', NULL, 'Lahore', '03004380640', 47, 15, 1, '2020-01-22 01:04:04'),
(21, 'hsamzawch12', 'AESS827', 'Haamza', 'Ilyas', 'Khjan', 'F', NULL, 'Lahore', '03004430640', 36, 19, 2, '2020-01-22 01:04:04'),
(22, 'hsamzach12', 'AESS1667', 'Haamza', 'Cgh', 'Khjan', 'F', NULL, 'Lahore', '03004333640', 44, 12, 6, '2020-01-20 01:04:04'),
(23, 'hjamzach12', 'AESS1227', 'Atif', 'Khilji', 'Khjan', 'M', 2500, 'Karachi', '012535252', 48, 11, 5, '2020-01-19 01:04:04'),
(24, 'hzach12', 'AESS100', 'Has', 'Pel', 'Khjan', 'F', NULL, 'Lahore', '03004330640', 48, 19, 4, '2020-01-24 01:04:04'),
(25, 'hsamzac212', 'AESS111', 'Loa', 'Pel', 'Khjan', 'F', NULL, 'Multan', '03004330640', 52, 19, 5, '2020-01-29 01:04:04'),
(26, 'ach12', 'AESS1207', 'Yezu', 'Agha', 'Ali', 'M', NULL, 'Lahore', '012513523', 89, 15, 5, '2020-01-27 01:04:04'),
(27, 'hszach12', 'AESS1267', 'Talha', 'Talha', 'Khan', 'M', 5555, 'Okara', '0300463021', 73, 25, 5, '2020-01-22 01:04:04'),
(28, 'hweamzsach12', 'AESS189', 'HKmza', 'Cgh', 'KhYakn', 'F', NULL, 'Lahore', '03007330640', 84, 19, 6, '2020-01-27 01:04:04'),
(29, 'hgamzach12', 'AESS17', 'Limza', 'Aop', 'sdYakn', 'F', NULL, 'Lahore', '03004380640', 0, 15, 6, '2020-01-27 01:04:04'),
(30, 'hsamzawch12', 'AESS17', 'Yeza', 'Aosp', 'KYakan', 'F', NULL, 'Lahore', '03004430640', 74, 19, 4, '2020-01-27 01:04:04'),
(31, 'hsamzach12', 'AESS107', 'Waga', 'Cgh', 'Yak', 'F', NULL, 'Lahore', '03004333680', 47, 12, 4, '2020-01-27 01:04:04'),
(32, 'Aayan', 'AESS1492', 'Aayan', 'Cgh', 'Yask', 'M', NULL, 'Lahore', '03004320670', 66, 11, 4, '2020-01-22 01:04:04'),
(33, 'ayekm', 'AESS777', 'Aayan-Shah', 'Akbar', 'Yaks', 'M', NULL, 'Lahore', '03204333640', 74, 12, 4, '2020-01-27 01:04:04'),
(34, 'abdikbr', 'AESS292', 'Abid', 'Akbar', 'Yaske', 'M', NULL, 'Lahore', '0320220640', 23, 11, 4, '2020-01-27 01:04:04'),
(35, 'ali123', 'AESS222', 'Qasim', 'Ali', 'Qasim', 'M', 2000, 'Karachi', '05235624', 52, 19, 8, '2020-01-27 01:04:04'),
(36, 'kluss12', 'AESS821', 'Klaus', 'Klenn', 'Klenn', 'M', 5000, 'USA', '555035352', 99, 20, 8, '2020-01-27 01:04:04'),
(37, 'ahmadhassan', 'AESS3', 'Ahmad', 'Hassan', 'Hassan', 'M', 4000, 'Township', '0234352545', 70, 10, 17, '2020-01-28 01:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `student_payment_details`
--

DROP TABLE IF EXISTS `student_payment_details`;
CREATE TABLE IF NOT EXISTS `student_payment_details` (
  `student_id` int(11) NOT NULL,
  `fee` int(11) DEFAULT NULL,
  `dues` int(11) DEFAULT NULL,
  `other_s` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_payment_details`
--

INSERT INTO `student_payment_details` (`student_id`, `fee`, `dues`, `other_s`) VALUES
(1, 500, 0, 20),
(2, 500, 0, 20),
(3, 500, 0, 20),
(4, 500, 0, 200),
(5, 500, 0, 200),
(6, 500, 0, 20),
(7, 500, 0, 20),
(8, 500, 0, 200),
(9, 500, 0, 20),
(11, 500, 0, 20),
(12, 500, 0, 20),
(101, 600, 0, 20),
(102, 600, 0, 0),
(103, 600, 0, 0),
(104, 600, 0, 0),
(105, 600, 0, 0),
(106, 600, 0, 0),
(107, 600, 0, 0),
(108, 600, 0, 0),
(201, 700, 0, 0),
(301, 800, 0, 0),
(302, 800, 0, 0),
(401, 700, 0, 0),
(402, 700, 0, 0),
(501, 700, 0, 0),
(502, 700, 0, 0),
(601, 700, 0, 0),
(602, 700, 0, 0),
(701, 700, 0, 0),
(702, 700, 0, 0),
(801, 700, 0, 0),
(802, 700, 0, 0),
(901, 700, 0, 0),
(902, 700, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL,
  `offered_to` int(11) DEFAULT NULL,
  PRIMARY KEY (`sub_id`),
  KEY `offered_to` (`offered_to`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `offered_to`) VALUES
(1, 'science', 8),
(2, 'Maths', 7),
(3, 'english', 2),
(4, 'phy', 8),
(5, 'islamiat', 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(20) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT 'NONE',
  `phnum` varchar(12) DEFAULT NULL,
  `address` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `salary` int(11) NOT NULL,
  `t_sid` int(11) NOT NULL,
  PRIMARY KEY (`teacher_id`),
  KEY `section_id` (`t_sid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `password`, `phnum`, `address`, `email`, `sex`, `salary`, `t_sid`) VALUES
(5, 'amina', 'NONE', '03245124587', 'patoki', 'queen4@gmail.com', 'F', 11000, 1),
(6, 'sara', 'NONE', '03245124587', 'patoki', 'queen5@gmail.com', 'F', 15000, 2),
(7, 'Maryam', 'NONE', '03245124587', 'patoki', 'queen6@gmail.com', 'F', 4500, 17),
(8, 'Suneel', 'NONE', '03245124587', 'patoki', 'queen7@gmail.com', 'M', 1000, 1),
(9, 'Sarfraz', 'NONE', '03245124587', 'patoki', 'queen8@gmail.com', 'M', 15000, 5),
(10, 'liaquat', 'NONE', '03245124587', 'patoki', 'queen9@gmail.com', 'M', 6900, 6),
(11, 'ather suleman', 'NONE', '03245124587', 'patoki', 'queen10@gmail.com', 'M', 7500, 7),
(12, 'gohar', 'NONE', '03245124587', 'patoki', 'king1@gmail.com', 'M', 10000, 8),
(13, 'namra', 'NONE', '03245124587', 'patoki', 'queen30@gmail.com', 'F', 69000, 8),
(14, 'inaam qadir', 'NONE', '03245124587', 'patoki', 'king2@gmail.com', 'M', 5000, 4),
(15, 'rehan', 'NONE', '03245124587', 'patoki', 'queen2@gmail.com', 'M', 24000, 9),
(16, 'abdul rehman', 'NONE', '03245124587', 'patoki', 'king44@gmail.com', 'M', 50000, 10),
(17, 'shaista', 'NONE', '03245124587', 'patoki', 'shaista@gmail.com', 'F', 500, 11),
(18, 'ganeem', 'NONE', '03245124587', 'patoki', 'ganeem@gmail.com', 'M', 69000, 12),
(19, 'Akbar Ali', 'akbarali', '03264754747', 'Okara', 'akbarali@gmail.com', 'M', 5000, 18),
(20, 'Hafiz Junaid', 'hafizjunaid', '0212542352', 'Karachi', 'hafizjunaid@gmail.com', 'M', 5200, 19);

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

DROP TABLE IF EXISTS `timetable`;
CREATE TABLE IF NOT EXISTS `timetable` (
  `student_id` int(11) NOT NULL,
  `duration` varchar(20) DEFAULT NULL,
  `subject` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`student_id`, `duration`, `subject`) VALUES
(1, '8 AM to 2 PM', 'bio'),
(2, '8 AM to 2 PM', 'bio'),
(3, '8 AM to 2 PM', 'bio'),
(4, '8 AM to 2 PM', 'bio'),
(5, '8 AM to 2 PM', 'bio'),
(6, '8 AM to 2 PM', 'bio'),
(7, '8 AM to 2 PM', 'bio'),
(8, '8 AM to 2 PM', 'bio');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `t_id` int(11) NOT NULL,
  `payment_amount` int(11) DEFAULT NULL,
  `dateofTransaction` date DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`t_id`, `payment_amount`, `dateofTransaction`) VALUES
(1, 500, '0000-00-00'),
(2, 500, '2010-02-01'),
(3, 500, '2010-03-01'),
(4, 500, '2010-04-01'),
(5, 500, '2010-05-01'),
(6, 500, '2010-06-01'),
(7, 500, '2010-07-01'),
(8, 500, '2010-08-01'),
(9, 500, '2010-09-01'),
(10, 500, '2010-10-01'),
(11, 500, '2010-11-01'),
(12, 500, '2010-12-01'),
(13, 500, '2017-01-01'),
(14, 500, '2010-01-01'),
(15, 500, '2017-03-01'),
(16, 500, '2017-04-01'),
(17, 500, '2017-05-01'),
(18, 500, '2017-06-01'),
(19, 500, '2017-07-01'),
(20, 500, '2017-08-01'),
(21, 500, '2017-09-01'),
(22, 500, '2017-10-01'),
(23, 500, '2010-01-01'),
(24, 500, '2010-01-01'),
(25, 5000, '2010-01-01'),
(26, 1000, '2010-01-01'),
(27, 500, '2010-01-01'),
(28, 500, '2010-01-01'),
(29, 500, '2010-01-01'),
(30, 500, '2010-01-01'),
(31, 500, '2010-01-01'),
(32, 500, '2010-01-01'),
(33, 500, '2010-01-01'),
(34, 500, '2010-01-01'),
(35, 500, '2010-01-01'),
(36, 500, '2010-01-01'),
(37, 500, '2010-01-01'),
(38, 500, '2010-01-01'),
(39, 500, '2010-01-01'),
(40, 500, '2010-01-01'),
(101, 10000, '2010-01-01'),
(102, 10000, '2011-01-01'),
(103, 10000, '2011-01-01'),
(104, 10000, '2012-01-01'),
(105, 10000, '2013-01-01'),
(106, 10000, '2014-01-01'),
(107, 10000, '2014-01-01'),
(108, 10000, '2015-01-01'),
(109, 10000, '2016-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `username`) VALUES
('admin', 'admin', 'admin'),
('Arifkhilji', 'arif99', 'Arif khilji'),
('fazeel', '1122', 'fazeel arif'),
('fazeel99', '1234', 'fazeel'),
('Noureen.arif', '1212', 'Noureen Arif');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

DROP TABLE IF EXISTS `workers`;
CREATE TABLE IF NOT EXISTS `workers` (
  `worker_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`worker_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`worker_id`, `name`, `sex`, `phone_number`) VALUES
(2, 'naja', 'M', '03244231568'),
(23, 'shaista', 'M', '03244231568'),
(24, 'shaista', 'F', '03244231568'),
(25, 'Ali', 'M', '03244231568'),
(26, 'chacha bakhshu', 'M', '03244231568'),
(27, 'hali', 'M', '03244231568'),
(28, 'feeqa', 'M', '03244231568');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_payment_details`
--
ALTER TABLE `student_payment_details`
  ADD CONSTRAINT `student_payment_details_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `section_id` FOREIGN KEY (`t_sid`) REFERENCES `section_level` (`section_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
  ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `workers`
--
ALTER TABLE `workers`
  ADD CONSTRAINT `workers_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `employee` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
