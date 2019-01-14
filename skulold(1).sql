-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2015 at 06:19 
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skulold`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `broad_sheet`
--

CREATE TABLE IF NOT EXISTS `broad_sheet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(12) NOT NULL,
  `class_id` int(12) NOT NULL,
  `student_id` int(12) NOT NULL,
  `status` int(100) NOT NULL,
  `English Language` text NOT NULL,
  `Mathematics` text NOT NULL,
  `Economics` text NOT NULL,
  `Agriculcutal Science` text NOT NULL,
  `Computer Science` text NOT NULL,
  `Yoruba Language` text NOT NULL,
  `Biology` text NOT NULL,
  `Chemistry` text NOT NULL,
  `Physics` text NOT NULL,
  `Commerce` text NOT NULL,
  `Gorvernment` text NOT NULL,
  `Fine Art` text NOT NULL,
  `Accounting` text NOT NULL,
  `Food And Nutrition` text NOT NULL,
  `Further Mathematics` text NOT NULL,
  `CRK` text NOT NULL,
  `Literature In English` text NOT NULL,
  `History` text NOT NULL,
  `Principle Of Accounting` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classmap`
--

CREATE TABLE IF NOT EXISTS `classmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `classmap`
--

INSERT INTO `classmap` (`id`, `code`, `status`, `date_modified`) VALUES
(1, 'PRI 1', 0, '2015-09-04 11:45:08'),
(2, 'PRI 2', 0, '2015-09-04 11:45:08'),
(3, 'PRI 3', 0, '2015-09-04 11:45:08'),
(4, 'PRI 4', 0, '2015-09-04 11:45:08'),
(5, 'PRI 5', 0, '2015-09-04 11:45:08'),
(6, 'PRI 6', 0, '2015-09-04 11:45:08'),
(7, 'JSS 1', 0, '2015-09-04 11:45:08'),
(8, 'JSS 2', 0, '2015-09-04 11:45:09'),
(9, 'JSS 3', 0, '2015-09-04 11:45:09'),
(10, 'SSS 1', 0, '2015-09-04 11:45:09'),
(11, 'SSS 2', 0, '2015-09-04 11:45:09'),
(12, 'SSS 3', 0, '2015-09-04 11:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE IF NOT EXISTS `emergency` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `emergency_id` int(20) NOT NULL,
  `st_id` int(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `institution` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `totalmark` int(20) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee_contact`
--

CREATE TABLE IF NOT EXISTS `employee_contact` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `emp_id` int(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `office_address` text NOT NULL,
  `office_city` varchar(50) NOT NULL,
  `office_state` varchar(100) NOT NULL,
  `office_country` varchar(50) NOT NULL,
  `office_phone` varchar(20) NOT NULL,
  `mobile_phone` varchar(20) NOT NULL,
  `home_line` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_contact`
--

INSERT INTO `employee_contact` (`id`, `emp_id`, `address`, `city`, `state`, `country`, `office_address`, `office_city`, `office_state`, `office_country`, `office_phone`, `mobile_phone`, `home_line`, `email`, `status`) VALUES
(1, 1, '3 adamasingba Road, Bodija ', 'Ibadan', 'Oyo', 'nigeria', '', '', '', '', '', '23499574774733', '', 'y@m.c', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_personal_detail`
--

CREATE TABLE IF NOT EXISTS `employee_personal_detail` (
  `Fullname` text NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `gender` text NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `Religion` varchar(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `children_count` int(2) NOT NULL,
  `State_of_origin` text NOT NULL,
  `date_of_birth` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_personal_detail`
--

INSERT INTO `employee_personal_detail` (`Fullname`, `id`, `gender`, `marital_status`, `father_name`, `Religion`, `nationality`, `children_count`, `State_of_origin`, `date_of_birth`, `status`) VALUES
('Olalere Kadijat', 1, 'male', 'married', '', 'Muslim', 'nigeria', 3, 'Oyo', '1-12-79', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_work_detail`
--

CREATE TABLE IF NOT EXISTS `employee_work_detail` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `emp_id` varchar(30) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `Date_employee` text NOT NULL,
  `salary` varchar(100) NOT NULL,
  `emp_dept` varchar(50) NOT NULL,
  `emp_position` varchar(50) NOT NULL,
  `emp_category` varchar(50) NOT NULL,
  `emp_grade` varchar(50) NOT NULL,
  `job_title` text NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `year_experience` varchar(50) NOT NULL,
  `experience_details` text NOT NULL,
  `other_details` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `employee_work_detail`
--

INSERT INTO `employee_work_detail` (`id`, `emp_id`, `firstname`, `middlename`, `lastname`, `Date_employee`, `salary`, `emp_dept`, `emp_position`, `emp_category`, `emp_grade`, `job_title`, `qualification`, `year_experience`, `experience_details`, `other_details`, `status`) VALUES
(1, '1', '', '', '', '2015-09-09', '35000', '', 'Class Teacher', 'Teaching', '', '', 'HDN', '12', 'Mad Canning Skill', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE IF NOT EXISTS `name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `old_school`
--

CREATE TABLE IF NOT EXISTS `old_school` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `st_id` int(20) NOT NULL,
  `institution` varchar(200) NOT NULL,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `parent_personal_details`
--

CREATE TABLE IF NOT EXISTS `parent_personal_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `st_id` int(20) NOT NULL,
  `Fullname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `income` double NOT NULL,
  `email` varchar(100) NOT NULL,
  `office_no` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `office_address` text NOT NULL,
  `home_address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `other_details` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `parent_personal_details`
--

INSERT INTO `parent_personal_details` (`id`, `st_id`, `Fullname`, `lastname`, `relation`, `dob`, `education`, `occupation`, `income`, `email`, `office_no`, `mobile_no`, `office_address`, `home_address`, `city`, `state`, `country`, `other_details`, `status`) VALUES
(1, 1, 'mr&mrs jinad', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(2, 2, 'mr&mrsibironke', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(3, 3, 'mr& mrs ibi', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(4, 4, 'mr& mrs jerry', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(5, 5, 'mr& mrs tosin', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(6, 6, 'mr& mrs ade', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(7, 7, 'mr& mrs odeda', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(8, 8, 'mr&mrs jinad', '', 'parent', '12/3/1956', '', 'trader', 0, 'mydaddy@heaven.com', '', '0809099887', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(9, 21, 'Moshood Alaran', '', 'Brother', '1-1-19', '', 'Programmer', 0, 'w@g.com', '', '169989978798', 'Egbeda Lagos', 'Ikeja Lagos', '', '', '', '', 0),
(10, 22, 'Olakunle Thompson', '', 'Parent', '1-4-56', '', 'FootBall Coach', 0, 'kunlethompson@gmail.com', '', '234093489394', 'Alausa Lagos', 'Ewang Estate Abeokuta', '', '', '', '', 0),
(11, 23, 'Mahuyoun Mathew', '', 'Parent', '16-8-56', '', 'Laywer', 0, 'mathewmahu@yahoo.com', '', '23884398283', 'Challenge Ibadan, Oyo State', 'Owode Idiroko, Ogun State', '', '', '', '', 0),
(12, 24, 'Mahuyoun Mathew', '', 'Parent', '16-8-56', '', 'Laywer', 0, 'mathewmahu@yahoo.com', '', '23884398283', 'Challenge Ibadan, Oyo State', 'Owode Idiroko, Ogun State', '', '', '', '', 0),
(13, 25, 'AjeWaleLale Jones', '', 'Parent', '9-21-56', '', 'Surveyor', 0, 'ajeJones@gmail.com', '', '234995458834', 'Onikolobo, Abeokuta', 'Omida Abeokuta,Ogun', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `amount` double NOT NULL,
  `admmission_Number` text NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `session`, `term`, `student`, `class`, `amount`, `admmission_Number`, `date`, `time`, `status`) VALUES
(4, 2, 2, 2, 2, 1232, '2015/2016/1', '2015-09-11', '12:34', 0),
(5, 1, 1, 2, 1, 2000, '2015/2016/1', '2015-09-11', '12:34', 0),
(6, 1, 3, 2, 3, 4000, '2015/2016/4', '2015-09-12', '12:34', 0),
(7, 1, 2, 2, 2, 4444, '2015/2016/4', '2015-09-12', '12:34', 0),
(8, 1, 2, 2, 2, 200, '2015/2016/1', '2015-09-12', '12:34', 0),
(9, 2, 2, 2, 2, 3444, '2015/2016/4', '2015-09-12', '12:34', 0),
(10, 2, 2, 2, 2, 100, '2015/2016/7', '2015-09-12', '12:34', 0),
(11, 3, 2, 2, 2, 8999, '2015/2016/9', '2015-09-12', '12:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `Id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `pix` text NOT NULL,
  `pix_name` varchar(100) NOT NULL,
  `usertype` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`Id`, `user_id`, `pix`, `pix_name`, `usertype`, `status`) VALUES
(1, 1, '', 'X9SqCtIVasqVNSqGFyGB', 'STD', 0),
(2, 2, '', '31v70aWsB2Y1qVYlbr2Z', 'STD', 0),
(3, 3, '', 'ZX3PlH4NSCv38QLPySGQ', 'STD', 0),
(4, 4, '', 'oTLSUENmxal3PlVEZIex', 'STD', 0),
(5, 5, '', '5yPYKAZBJoc6X7wkyfW2', 'STD', 0),
(6, 6, '', 'fCISmx3pTbhX26J75GNS', 'STD', 0),
(7, 7, '', 'e565QMdrBNKipWuHyM5M', 'STD', 0),
(8, 8, '', 'lH98Dc0oT8jdLacFA4tW', 'STD', 0),
(9, 21, '', 'boFGh1CbLQM8hIgyOqnb', 'STD', 0),
(10, 22, '', 'r7w2aq1wd3c1Z7filQNr', 'STD', 0),
(11, 1, '', 'VWhRgQncbJMoNNAY4Z7R', 'STAFF', 0),
(12, 23, '', 'tHZtb1pK1vgLEFlTZgdj', 'STD', 0),
(13, 24, '', 'Ev6Xuh0CucKzC4IRF5mM', 'STD', 0),
(14, 25, '', 'arkhGfzxbCuzHOBQjQCVBBeK9Xgldn', 'STD', 0);

-- --------------------------------------------------------

--
-- Table structure for table `school_fees`
--

CREATE TABLE IF NOT EXISTS `school_fees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(12) NOT NULL,
  `1st` int(12) NOT NULL COMMENT '(School Fees In Naira)',
  `2nd` int(12) NOT NULL COMMENT '(School Fees In Naira)',
  `3rd` int(12) NOT NULL COMMENT '(School Fees In Naira)',
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `school_fees`
--

INSERT INTO `school_fees` (`id`, `class`, `1st`, `2nd`, `3rd`, `status`) VALUES
(1, 1, 3335, 32500, 50000, 0),
(2, 2, 30000, 50000, 90000, 0),
(3, 3, 30000, 30000, 40000, 0),
(4, 4, 30000, 30000, 40000, 0),
(5, 5, 30000, 30000, 50000, 0),
(6, 6, 30000, 30000, 40000, 0),
(7, 7, 30000, 30000, 40000, 0),
(8, 8, 40000, 30000, 40000, 0),
(9, 9, 50000, 50000, 40000, 0),
(10, 10, 30000, 30000, 40000, 0),
(11, 11, 30000, 30000, 70000, 0),
(12, 12, 50000, 50000, 80000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `name`, `status`, `date_modified`) VALUES
(1, '2015/2016', 0, '2015-09-08 11:54:41'),
(2, '2016/2017', 0, '2015-09-08 11:54:41'),
(3, '2017/2018', 0, '2015-09-08 11:54:41'),
(4, '2018/2019', 0, '2015-09-08 11:54:41'),
(5, '2019/2020', 0, '2015-09-08 11:54:42'),
(6, '2020/2021', 0, '2015-09-08 11:54:42'),
(7, '2021/2022', 0, '2015-09-08 11:54:42'),
(8, '2022/2023', 0, '2015-09-08 11:54:42'),
(9, '2023/2024', 0, '2015-09-08 11:54:42'),
(10, '2024/2025', 0, '2015-09-08 11:54:42'),
(11, '2025/2026', 0, '2015-09-08 11:54:42'),
(12, '2026/2027', 0, '2015-09-08 11:54:42'),
(13, '2027/2028', 0, '2015-09-08 11:54:42'),
(14, '2028/2029', 0, '2015-09-08 11:54:42'),
(15, '2029/2030', 0, '2015-09-08 11:54:42'),
(16, '2030/2031', 0, '2015-09-08 11:54:42'),
(17, '2031/2032', 0, '2015-09-08 11:54:42'),
(18, '2032/2033', 0, '2015-09-08 11:54:43'),
(19, '2033/2034', 0, '2015-09-08 11:54:43'),
(20, '2034/2035', 0, '2015-09-08 11:54:43'),
(21, '2035/2036', 0, '2015-09-08 11:54:43'),
(22, '2036/2037', 0, '2015-09-08 11:54:43'),
(23, '2037/2038', 0, '2015-09-08 11:54:43'),
(24, '2038/2039', 0, '2015-09-08 11:54:43'),
(25, '2039/2040', 0, '2015-09-08 11:54:43'),
(26, '2040/2041', 0, '2015-09-08 11:54:43'),
(27, '2041/2042', 0, '2015-09-08 11:54:43'),
(28, '2042/2043', 0, '2015-09-08 11:54:43'),
(29, '2043/2044', 0, '2015-09-08 11:54:43'),
(30, '2044/2045', 0, '2015-09-08 11:54:43'),
(31, '2045/2046', 0, '2015-09-08 11:54:43'),
(32, '2046/2047', 0, '2015-09-08 11:54:43'),
(33, '2047/2048', 0, '2015-09-08 11:54:43'),
(34, '2048/2049', 0, '2015-09-08 11:54:43'),
(35, '2049/2050', 0, '2015-09-08 11:54:43'),
(36, '2050/2051', 0, '2015-09-08 11:54:43'),
(37, '2051/2052', 0, '2015-09-08 11:54:44'),
(38, '2052/2053', 0, '2015-09-08 11:54:44'),
(39, '2053/2054', 0, '2015-09-08 11:54:44'),
(40, '2054/2055', 0, '2015-09-08 11:54:44'),
(41, '2055/2056', 0, '2015-09-08 11:54:44'),
(42, '2056/2057', 0, '2015-09-08 11:54:44'),
(43, '2057/2058', 0, '2015-09-08 11:54:44'),
(44, '2058/2059', 0, '2015-09-08 11:54:44'),
(45, '2059/2060', 0, '2015-09-08 11:54:44'),
(46, '2060/2061', 0, '2015-09-08 11:54:44'),
(47, '2061/2062', 0, '2015-09-08 11:54:44'),
(48, '2062/2063', 0, '2015-09-08 11:54:44'),
(49, '2063/2064', 0, '2015-09-08 11:54:44'),
(50, '2064/2065', 0, '2015-09-08 11:54:44'),
(51, '2065/2066', 0, '2015-09-08 11:54:44'),
(52, '2066/2067', 0, '2015-09-08 11:54:44'),
(53, '2067/2068', 0, '2015-09-08 11:54:44'),
(54, '2068/2069', 0, '2015-09-08 11:54:44'),
(55, '2069/2070', 0, '2015-09-08 11:54:44'),
(56, '2070/2071', 0, '2015-09-08 11:54:44'),
(57, '2071/2072', 0, '2015-09-08 11:54:44'),
(58, '2072/2073', 0, '2015-09-08 11:54:45'),
(59, '2073/2074', 0, '2015-09-08 11:54:45'),
(60, '2074/2075', 0, '2015-09-08 11:54:45'),
(61, '2075/2076', 0, '2015-09-08 11:54:45'),
(62, '2076/2077', 0, '2015-09-08 11:54:45'),
(63, '2077/2078', 0, '2015-09-08 11:54:45'),
(64, '2078/2079', 0, '2015-09-08 11:54:45'),
(65, '2079/2080', 0, '2015-09-08 11:54:45'),
(66, '2080/2081', 0, '2015-09-08 11:54:45'),
(67, '2081/2082', 0, '2015-09-08 11:54:45'),
(68, '2082/2083', 0, '2015-09-08 11:54:45'),
(69, '2083/2084', 0, '2015-09-08 11:54:45'),
(70, '2084/2085', 0, '2015-09-08 11:54:45'),
(71, '2085/2086', 0, '2015-09-08 11:54:45'),
(72, '2086/2087', 0, '2015-09-08 11:54:45'),
(73, '2087/2088', 0, '2015-09-08 11:54:46'),
(74, '2088/2089', 0, '2015-09-08 11:54:46'),
(75, '2089/2090', 0, '2015-09-08 11:54:46'),
(76, '2090/2091', 0, '2015-09-08 11:54:46'),
(77, '2091/2092', 0, '2015-09-08 11:54:46'),
(78, '2092/2093', 0, '2015-09-08 11:54:46'),
(79, '2093/2094', 0, '2015-09-08 11:54:46'),
(80, '2094/2095', 0, '2015-09-08 11:54:46'),
(81, '2095/2096', 0, '2015-09-08 11:54:46'),
(82, '2096/2097', 0, '2015-09-08 11:54:46'),
(83, '2097/2098', 0, '2015-09-08 11:54:46'),
(84, '2098/2099', 0, '2015-09-08 11:54:46'),
(85, '2099/2100', 0, '2015-09-08 11:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `students_archive`
--

CREATE TABLE IF NOT EXISTS `students_archive` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `admission_no` varchar(100) NOT NULL,
  `session` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `term` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `students_archive`
--

INSERT INTO `students_archive` (`id`, `st_id`, `admission_no`, `session`, `class`, `term`) VALUES
(1, 24, '2015/2016/12', 1, 4, 1),
(2, 25, '2015/2016/13', 1, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_admission_details`
--

CREATE TABLE IF NOT EXISTS `student_admission_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `admission_no` text NOT NULL,
  `class_admmited` int(11) NOT NULL,
  `session_admmited` int(11) NOT NULL,
  `term_admited` int(11) NOT NULL,
  `current_class` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `student_admission_details`
--

INSERT INTO `student_admission_details` (`id`, `st_id`, `admission_no`, `class_admmited`, `session_admmited`, `term_admited`, `current_class`) VALUES
(1, 1, '2015/2016/1', 8, 1, 1, 8),
(2, 2, '2015/2016/2', 8, 1, 1, 8),
(3, 3, '2015/2016/3', 8, 1, 1, 8),
(4, 4, '2015/2016/4', 6, 1, 1, 6),
(5, 5, '2015/2016/5', 6, 1, 1, 6),
(6, 6, '2015/2016/6', 6, 1, 1, 6),
(7, 7, '2015/2016/7', 6, 1, 1, 6),
(8, 8, '2015/2016/8', 6, 1, 1, 6),
(9, 21, '2015/2016/9', 1, 1, 1, 1),
(10, 22, '2015/2016/10', 9, 1, 1, 9),
(11, 23, '2015/2016/11', 4, 1, 1, 4),
(12, 24, '2015/2016/12', 4, 1, 1, 4),
(13, 25, '2015/2016/13', 4, 1, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student_contact_details`
--

CREATE TABLE IF NOT EXISTS `student_contact_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `st_id` int(20) NOT NULL,
  `home_address` text NOT NULL,
  `postal_address` text NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `landline` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `student_contact_details`
--

INSERT INTO `student_contact_details` (`id`, `st_id`, `home_address`, `postal_address`, `city`, `state`, `country`, `phone_no`, `landline`, `email`, `status`) VALUES
(1, 1, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(2, 2, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(3, 3, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(4, 4, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(5, 5, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(6, 6, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(7, 7, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(8, 8, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '090675565654', '', 'diplo@gmail.com', 0),
(9, 21, 'Adeniran Crib', '', 'Ikeja', 'Lagos', '', '0809098988', '', 'di@heaven.com', 0),
(10, 22, 'Ewang estate Abeokuta', '', 'Abeokuta', 'Ogun State', '', '23439589455534', '', 'i@m.com', 0),
(11, 23, '36 Olaniran lane', '', 'Owode idiroko', 'Ogun state', '', '23477549238823', '', 'mimi@tete.com', 0),
(12, 24, '36 Olaniran lane', '', 'Owode idiroko', 'Ogun state', '', '2345595993384', '', 'thursyoun@hotmail.com', 0),
(13, 25, 'Omida', '', 'Abeokuta', 'Ogun state', '', '23488342388492', '', 'mumuWole@h.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_details`
--

CREATE TABLE IF NOT EXISTS `student_personal_details` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `admisional_no` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `course` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `student_category` varchar(100) NOT NULL,
  `additional_date` varchar(50) NOT NULL,
  `additional_information` text NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `student_personal_details`
--

INSERT INTO `student_personal_details` (`id`, `admisional_no`, `firstname`, `middlename`, `lastname`, `gender`, `course`, `batch`, `dob`, `birthplace`, `nationality`, `religion`, `bloodgroup`, `student_category`, `additional_date`, `additional_information`, `status`) VALUES
(1, '', 'jinad', 'david', 'abiodun', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(2, '', ' omotayo', 'david', 'ibironke', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(3, '', ' olamide', 'abida', 'ibironke', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(4, '', 'jerry', 'abida', 'ogunrinde', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(5, '', 'tosin', 'ogini', 'ogunrinde', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(6, '', 'moshoo', 'ade', 'ogunrinde', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(7, '', 'akintunde', 'odeda', 'ogun', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(8, '', 'dele', 'odeda', 'ogundele', 'male', '', '', '12-26-1992', 'ogun state', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(21, '', 'Adeniran', 'Johnson', 'Moyosore', 'male', '', '', '12-12-12', 'Loa', 'nigeria', 'christian', '', '', '2015-09-09', '', 0),
(22, '', 'Adewale', 'Thompsom', 'Jacobs', 'male', '', '', '1-2-1992', 'Kogi', 'nigeria', 'Christian', '', '', '2015-09-09', '', 0),
(23, '', 'Monday', 'Djeyoun', 'Mahuyoun', 'male', '', '', '13-4-92', 'Ogun state', 'nigeria', 'Christian', '', '', '2015-09-11', '', 0),
(24, '', 'Thursday', 'Jesuyoun', 'Mahuyoun', 'male', '', '', '13-4-98', 'Ogun state', 'nigeria', 'Christian', '', '', '2015-09-11', '', 0),
(25, '', 'MumuWole', 'Adewale', 'Jones', 'male', '', '', '1-12-97', 'Ogun', 'nigeria', 'Muslim', '', '', '2015-09-12', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `status`) VALUES
(1, 'English Language', 0),
(2, 'Mathematics', 0),
(3, 'Economics', 0),
(4, 'Agriculcutal Science', 0),
(5, 'Computer Science', 0),
(6, 'Yoruba Language', 0),
(7, 'Biology', 0),
(8, 'Chemistry', 0),
(9, 'Physics', 0),
(10, 'Commerce', 0),
(11, 'Gorvernment', 0),
(12, 'Fine Art', 0),
(13, 'Accounting', 0),
(14, 'Food And Nutrition', 0),
(15, 'Further Mathematics', 0),
(16, 'CRK', 0),
(17, 'Literature In English', 0),
(18, 'History', 0),
(19, 'Principle Of Accounting', 0),
(20, 'English Language', 0),
(21, 'Mathematics', 0),
(22, 'Economics', 0),
(23, 'Agriculcutal Science', 0),
(24, 'Computer Science', 0),
(25, 'Yoruba Language', 0),
(26, 'Biology', 0),
(27, 'Chemistry', 0),
(28, 'Physics', 0),
(29, 'Commerce', 0),
(30, 'Gorvernment', 0),
(31, 'Fine Art', 0),
(32, 'Accounting', 0),
(33, 'Food And Nutrition', 0),
(34, 'Further Mathematics', 0),
(35, 'CRK', 0),
(36, 'Literature In English', 0),
(37, 'History', 0),
(38, 'Principle Of Accounting', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_class`
--

CREATE TABLE IF NOT EXISTS `subject_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` int(12) NOT NULL,
  `class` varchar(12) NOT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `name`, `status`, `date_modified`) VALUES
(1, 'First Term', 0, '2015-09-04 12:41:03'),
(2, 'Second Term', 0, '2015-09-04 12:41:03'),
(3, 'Third Term', 0, '2015-09-04 12:41:03');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
