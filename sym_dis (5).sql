-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 05, 2015 at 07:40 
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
  `term_id` int(11) NOT NULL,
  `student_id` int(12) NOT NULL,
  `status` int(100) NOT NULL DEFAULT '0',
  `set` int(11) NOT NULL DEFAULT '0',
  `English Language` varchar(3) NOT NULL DEFAULT '-',
  `Mathematics` varchar(3) NOT NULL DEFAULT '-',
  `Economics` varchar(3) NOT NULL DEFAULT '-',
  `Agriculcutal Science` varchar(3) NOT NULL DEFAULT '-',
  `Computer Science` varchar(3) NOT NULL DEFAULT '-',
  `Yoruba Language` varchar(3) NOT NULL DEFAULT '-',
  `Biology` varchar(3) NOT NULL DEFAULT '-',
  `Chemistry` varchar(3) NOT NULL DEFAULT '-',
  `Physics` varchar(3) NOT NULL DEFAULT '-',
  `Commerce` varchar(3) NOT NULL DEFAULT '-',
  `Gorvernment` varchar(3) NOT NULL DEFAULT '-',
  `Fine Art` varchar(3) NOT NULL DEFAULT '-',
  `Accounting` varchar(3) NOT NULL DEFAULT '-',
  `Food And Nutrition` varchar(3) NOT NULL DEFAULT '-',
  `Further Mathematics` varchar(3) NOT NULL DEFAULT '-',
  `CRK` varchar(3) NOT NULL DEFAULT '-',
  `Literature In English` varchar(3) NOT NULL DEFAULT '-',
  `History` varchar(3) NOT NULL DEFAULT '-',
  `Principle Of Accounting` varchar(3) NOT NULL DEFAULT '-',
  `Hausa` varchar(3) NOT NULL DEFAULT '-',
  `home economics` text NOT NULL,
  `IRK` text NOT NULL,
  `orology` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `broad_sheet`
--

INSERT INTO `broad_sheet` (`id`, `session_id`, `class_id`, `term_id`, `student_id`, `status`, `set`, `English Language`, `Mathematics`, `Economics`, `Agriculcutal Science`, `Computer Science`, `Yoruba Language`, `Biology`, `Chemistry`, `Physics`, `Commerce`, `Gorvernment`, `Fine Art`, `Accounting`, `Food And Nutrition`, `Further Mathematics`, `CRK`, `Literature In English`, `History`, `Principle Of Accounting`, `Hausa`, `home economics`, `IRK`, `orology`) VALUES
(1, 1, 4, 1, 24, 0, 1, '40', '-', '-', '10', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '20', '-', '-', '11', '-', '', '', ''),
(2, 1, 4, 1, 25, 0, 1, '4', '-', '-', '2', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '3', '-', '-', '6', '-', '', '', ''),
(3, 1, 1, 1, 26, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(4, 2, 4, 2, 27, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(5, 1, 2, 2, 28, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(6, 2, 5, 3, 29, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(7, 1, 9, 1, 1, 0, 1, '-', '-', '-', '-', '30', '-', '-', '-', '-', '-', '-', '20', '-', '10', '-', '-', '-', '-', '-', '13', '', '', ''),
(8, 1, 10, 1, 1, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(9, 1, 11, 1, 1, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(10, 1, 6, 1, 30, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(11, 1, 4, 1, 24, 1, 1, '12', '-', '-', '10', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '17', '-', '-', '12', '-', '', '', ''),
(12, 1, 4, 1, 25, 1, 1, '20', '-', '-', '30', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '20', '-', '-', '20', '-', '', '', ''),
(21, 1, 4, 1, 24, 2, 1, '11', '-', '-', '3', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '4', '-', '-', '13', '-', '', '', ''),
(22, 1, 4, 1, 24, 3, 1, '10', '-', '-', '8', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '5', '-', '-', '10', '-', '', '', ''),
(23, 1, 4, 1, 25, 2, 1, '20', '-', '-', '10', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '20', '-', '-', '20', '-', '', '', ''),
(24, 1, 4, 1, 25, 3, 1, '30', '-', '-', '20', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '10', '-', '-', '30', '-', '', '', ''),
(25, 1, 9, 1, 1, 1, 1, '-', '-', '-', '-', '10', '-', '-', '-', '-', '-', '-', '6', '-', '6', '-', '-', '-', '-', '-', '10', '', '', ''),
(26, 1, 4, 1, 31, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(27, 1, 4, 1, 32, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(28, 1, 4, 1, 33, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(29, 1, 4, 1, 34, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(30, 1, 4, 1, 35, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(31, 1, 4, 2, 36, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(32, 1, 4, 2, 37, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(33, 1, 4, 2, 38, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(34, 1, 4, 2, 39, 0, 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '', ''),
(35, 1, 2, 1, 26, 0, 1, '12', '-', '-', '32', '-', '-', '-', '-', '-', '-', '-', '12', '-', '-', '-', '10', '-', '-', '4', '-', '', '', ''),
(36, 1, 2, 1, 26, 1, 1, '21', '-', '-', '21', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '12', '-', '-', '5', '-', '', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `classmap`
--

CREATE TABLE IF NOT EXISTS `classmap` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` TIMESTAMP NOT NULL ,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employee_contact`
--

INSERT INTO `employee_contact` (`id`, `emp_id`, `address`, `city`, `state`, `country`, `office_address`, `office_city`, `office_state`, `office_country`, `office_phone`, `mobile_phone`, `home_line`, `email`, `status`) VALUES
(1, 1, '3 adamasingba Road, Bodija ', 'Ibadan', 'Oyo', 'nigeria', '', '', '', '', '', '23499574774733', '', 'y@m.c', 0),
(2, 2, '45, awori street', 'sango', 'ogun state', 'nigeria', '', '', '', '', '', '0909788789787', '', 'diplo@gmail.com', 0),
(3, 3, 'sango ota ogun state', 'abuja', 'Kano State', 'nigeria', '', '', '', '', '', '080908898898', '', 'mail@s.com', 0),
(4, 4, '45, awori street', 'abuja', 'Abia State', 'nigeria', '', '', '', '', '', '0908977478', '', 'mail@s.com', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employee_personal_detail`
--

INSERT INTO `employee_personal_detail` (`Fullname`, `id`, `gender`, `marital_status`, `father_name`, `Religion`, `nationality`, `children_count`, `State_of_origin`, `date_of_birth`, `status`) VALUES
('Olalere Kadijat', 1, 'male', 'married', '', 'Muslim', 'nigeria', 3, 'Oyo', '1-12-79', 0),
('Omolara', 2, 'male', 'single', '', 'christian', 'cameroon', 3, 'ogun state', '12-26-1992', 0),
('jinad omotayo', 3, 'female', 'single', '', 'CHRISTIANITY', 'nigeria', 4, 'Federal Capital Territory', '09/04/2015', 0),
('oljede', 4, 'male', 'single', '', 'CHRISTIANITY', 'nigeria', 12, 'Gombe State', '01/08/2013', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employee_work_detail`
--

INSERT INTO `employee_work_detail` (`id`, `emp_id`, `firstname`, `middlename`, `lastname`, `Date_employee`, `salary`, `emp_dept`, `emp_position`, `emp_category`, `emp_grade`, `job_title`, `qualification`, `year_experience`, `experience_details`, `other_details`, `status`) VALUES
(1, '1', '', '', '', '2015-09-09', '35000', '', 'Class Teacher', 'Teaching', '', '', 'HDN', '12', 'Mad Canning Skill', 0, 0),
(2, '2', '', '', '', '2015-09-12', '8000', '', 'Cleaner', 'non-Teaching', '', '', 'NCE', '2', 'Good in maintaining things', 0, 0),
(3, '3', '', '', '', '2015-09-12', '89000', '', 'teacher', 'Teaching', '', '', 'HDN', '12', 'old teacher', 0, 0),
(4, '4', '', '', '', '2015-09-12', '90000', '', 'HOD', 'non-Teaching', '', '', 'BSC', '2', 'just a graduate', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE IF NOT EXISTS `name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` TIMESTAMP NOT NULL ,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

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
(13, 25, 'AjeWaleLale Jones', '', 'Parent', '9-21-56', '', 'Surveyor', 0, 'ajeJones@gmail.com', '', '234995458834', 'Onikolobo, Abeokuta', 'Omida Abeokuta,Ogun', '', '', '', '', 0),
(14, 26, 'mr&mrs jinad', '', 'parent', '09/17/2015', '', 'trader', 0, 'mydaddy@heaven.com', '', '080909089898', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(15, 27, 'mr& mrs jerry', '', 'parent', '09/16/2015', '', 'occu', 0, 'tosyn@me.com', '', '7789799789', 'mobolade lagos', 'home', '', '', '', '', 0),
(16, 28, 'mr& mrs jerry', '', 'parent', '09/16/2015', '', 'occu', 0, 'tosyn@me.com', '', '7789799789', 'mobolade lagos', 'home', '', '', '', '', 0),
(17, 29, 'mr& mrs ade', '', 'parent', '09/18/2015', '', 'trader', 0, 'mydaddy@heaven.com', '', '67890798979', 'mobolade lagos', 'sango ota ogun state', '', '', '', '', 0),
(18, 30, 'Jones Godwin', '', 'Friend', '11/26/2012', '', 'Driver', 0, 'r@no.c', '', '238892322090923', 'Anywhere, Around d world', 'OLuwo Abk', '', '', '', '', 0),
(19, 31, 'adeola baraka', '', 'mother', '12-05-02', '', 'trader', 0, 'a@a,com', '', '0802345567', '12 olaoye str', 'same as above', '', '', '', '', 0),
(20, 32, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(21, 33, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(22, 34, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(23, 35, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(24, 36, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(25, 37, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(26, 38, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0),
(27, 39, 'hanna olarenwaju', '', 'mother', '10/29/2015', '', 'trader', 0, 'tosyn@mail.com', '', '09054534409', 'olarenjun', 'hola junctio', '', '', '', '', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `session`, `term`, `student`, `class`, `amount`, `admmission_Number`, `date`, `time`, `status`) VALUES
(11, 3, 2, 2, 2, 8999, '2015/2016/9', '2015-09-12', '12:34', 0),
(12, 2, 2, 2, 3, 90000, '2015/2016/15', '2015-09-12', '12:34', 0),
(13, 2, 1, 21, 4, 5666, '2015/2016/15', '2015-09-12', '12:34', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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
(14, 25, '', 'arkhGfzxbCuzHOBQjQCVBBeK9Xgldn', 'STD', 0),
(15, 2, '', 'sr6o9h2xZtJgtgGhjGxlwUGjdW6zDo', 'STAFF', 0),
(16, 26, '', 'hXLxBx4laQMYKFS7oBnGDrxpAbWtYW', 'STD', 0),
(17, 27, '', '5ZkP8meQEdFAEdbyVpfDb6B6dk5H4w', 'STD', 0),
(18, 28, '', 'u0ueZ0abU7tUkzTRJ1PEnCMQEZikDk', 'STD', 0),
(19, 29, '', 'uYUuwHKgyes6K3z0IZopcXuS3CBB7z', 'STD', 0),
(20, 3, '', 'YQoFWeE3vZ2Kp9kGA0R5A0ydIJO15s', 'STAFF', 0),
(21, 4, '', 'ydUn2F21yxp5A7vbWM0KmXpUmzxVsZ', 'STAFF', 0),
(22, 30, '', 'zKsiCNqLegW1fO3RAV44y0Yn48ERlt', 'STD', 0),
(23, 31, '', 'eUKc8AtQyRlP4AIxbKUiXggIsP2bY0', 'STD', 0),
(24, 32, '', '2VFI1MNFzrE6jJYoip4Ai0KQxS69Yr', 'STD', 0),
(25, 33, '', 'X0QHSy1bUZZpTaJ1ssNh8azCwr2HQh', 'STD', 0),
(26, 34, '', 'KroyGVlMwWcv0JwVPDJAfCs4kZpqNc', 'STD', 0),
(27, 35, '', 'dKHG6XUx4SfsHISazcvGJsiyY4n7zY', 'STD', 0),
(28, 36, '', 'eVpijuz57wRr2MZgnnuCPg5jzKJCw6', 'STD', 0),
(29, 37, '', 'tmQ9kJcuNWV2CB4TpB66b4PQ2npe3V', 'STD', 0),
(30, 38, '', 'WAUA6f552C1JyWa8DH3LKBMmdU7a0U', 'STD', 0),
(31, 39, '', 'GhFyEJ99ZuxxcNOaxNSVJQAvsY3kV7', 'STD', 0);

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
(1, 1, 6000, 32500, 50000, 0),
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
  `date_modified` TIMESTAMP NOT NULL ,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `students_archive`
--

INSERT INTO `students_archive` (`id`, `st_id`, `admission_no`, `session`, `class`, `term`) VALUES
(1, 24, '2015/2016/12', 1, 4, 1),
(2, 25, '2015/2016/13', 1, 4, 1),
(3, 26, '2015/2016/14', 1, 1, 1),
(4, 27, '2016/2017/1', 2, 4, 2),
(5, 28, '2015/2016/15', 1, 2, 2),
(6, 29, '2016/2017/2', 2, 5, 3),
(7, 1, '2015/2016/1', 1, 9, 1),
(8, 1, '2015/2016/1', 1, 10, 1),
(9, 1, '2015/2016/1', 1, 11, 1),
(10, 30, '2015/2016/16', 1, 6, 1),
(11, 31, '2015/2016/17', 1, 4, 1),
(12, 32, '2015/2016/18', 1, 4, 1),
(13, 33, '2015/2016/18', 1, 4, 1),
(14, 34, '2015/2016/18', 1, 4, 1),
(15, 35, '2015/2016/18', 1, 4, 1),
(16, 36, '2015/2016/18', 1, 4, 2),
(17, 37, '2015/2016/18', 1, 4, 2),
(18, 38, '2015/2016/18', 1, 4, 2),
(19, 39, '2015/2016/18', 1, 4, 2),
(20, 26, '2015/2016/14', 1, 2, 1);

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
  `current_session` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `student_admission_details`
--

INSERT INTO `student_admission_details` (`id`, `st_id`, `admission_no`, `class_admmited`, `session_admmited`, `term_admited`, `current_class`, `current_session`) VALUES
(1, 1, '2015/2016/1', 8, 1, 1, 11, 1),
(2, 2, '2015/2016/2', 8, 1, 1, 8, 0),
(3, 3, '2015/2016/3', 8, 1, 1, 8, 0),
(4, 4, '2015/2016/4', 6, 1, 1, 6, 0),
(5, 5, '2015/2016/5', 6, 1, 1, 6, 0),
(6, 6, '2015/2016/6', 6, 1, 1, 6, 0),
(7, 7, '2015/2016/7', 6, 1, 1, 6, 0),
(8, 8, '2015/2016/8', 6, 1, 1, 6, 0),
(9, 21, '2015/2016/9', 1, 1, 1, 2, 2),
(10, 22, '2015/2016/10', 9, 1, 1, 9, 0),
(11, 23, '2015/2016/11', 4, 1, 1, 4, 0),
(12, 24, '2015/2016/12', 4, 1, 1, 4, 0),
(13, 25, '2015/2016/13', 4, 1, 1, 4, 0),
(14, 26, '2015/2016/14', 1, 1, 1, 2, 1),
(15, 27, '2016/2017/1', 4, 2, 2, 4, 0),
(16, 28, '2015/2016/15', 2, 1, 2, 2, 0),
(17, 29, '2016/2017/2', 5, 2, 3, 5, 0),
(18, 30, '2015/2016/16', 6, 1, 1, 6, 1),
(19, 31, '2015/2016/17', 4, 1, 1, 4, 1),
(20, 32, '2015/2016/18', 4, 1, 1, 4, 1),
(21, 33, '2015/2016/18', 4, 1, 1, 4, 1),
(22, 34, '2015/2016/18', 4, 1, 1, 4, 1),
(23, 35, '2015/2016/18', 4, 1, 1, 4, 1),
(24, 36, '2015/2016/18', 4, 1, 2, 4, 1),
(25, 37, '2015/2016/18', 4, 1, 2, 4, 1),
(26, 38, '2015/2016/18', 4, 1, 2, 4, 1),
(27, 39, '2015/2016/18', 4, 1, 2, 4, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

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
(13, 25, 'Omida', '', 'Abeokuta', 'Ogun state', '', '23488342388492', '', 'mumuWole@h.com', 0),
(14, 26, 'sango ota ogun state', '', 'abuja', 'ogun state', '', '0809050445676', '', 'tosyngy@gmail.com', 0),
(15, 27, 'home', '', 'city', 'Kaduna State', '', '089897787', '', 'tosyngy@gmail.com', 0),
(16, 28, 'home', '', 'city', 'Kaduna State', '', '089897787', '', 'tosyngy@gmail.com', 0),
(17, 29, '45, awori street', '', 'abuja', 'Kaduna State', '', '868968676876897', '', 'tosyngy@gmail.com', 0),
(18, 30, 'Ijebu Ode Street', '', 'Akure Ondo', 'Ondo State', '', '2345996034533', '', 'imadoLive@googleshits.com', 0),
(19, 31, '12, olaoye street', '', 'apaja', 'Lagos State', '', '080281212345', '', 'toto@mail,com', 0),
(20, 32, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(21, 33, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(22, 34, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(23, 35, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(24, 36, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(25, 37, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(26, 38, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0),
(27, 39, 'mokola ', '', 'ibandan', 'Oyo State', '', '0906435242', '', 't@m.com', 0);

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
  `dob` varchar(50) NOT NULL,
  `birthplace` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `additional_date` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `student_personal_details`
--

INSERT INTO `student_personal_details` (`id`, `admisional_no`, `firstname`, `middlename`, `lastname`, `gender`, `dob`, `birthplace`, `nationality`, `religion`, `additional_date`, `status`) VALUES
(1, '', 'jinad', 'david', 'abiodun', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(2, '', ' omotayo', 'david', 'ibironke', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(3, '', ' olamide', 'abida', 'ibironke', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(4, '', 'jerry', 'abida', 'ogunrinde', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(5, '', 'tosin', 'ogini', 'ogunrinde', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(6, '', 'moshoo', 'ade', 'ogunrinde', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(7, '', 'akintunde', 'odeda', 'ogun', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(8, '', 'dele', 'odeda', 'ogundele', 'male', '12-26-1992', 'ogun state', 'nigeria', 'christian', '2015-09-09', 0),
(21, '', 'Adeniran', 'Johnson', 'Moyosore', 'male', '12-12-12', 'Loa', 'nigeria', 'christian', '2015-09-09', 0),
(22, '', 'Adewale', 'Thompsom', 'Jacobs', 'male', '1-2-1992', 'Kogi', 'nigeria', 'Christian', '2015-09-09', 0),
(23, '', 'Monday', 'Djeyoun', 'Mahuyoun', 'male', '13-4-92', 'Ogun state', 'nigeria', 'Christian', '2015-09-11', 0),
(24, '', 'Thursday', 'Jesuyoun', 'Mahuyoun', 'male', '13-4-98', 'Ogun state', 'nigeria', 'Christian', '2015-09-11', 0),
(25, '', 'MumuWole', 'Adewale', 'Jones', 'male', '1-12-97', 'Ogun', 'nigeria', 'Muslim', '2015-09-12', 0),
(26, '', 'jinad omotayo', 'david', 'abiodun', 'male', '09/11/2015', 'ogun state', 'nigeria', 'christian', '2015-09-12', 0),
(27, '', 'jinad omotayo', 'david', 'abiodun', 'male', '09/12/2015', 'Gombe State', 'NIGERIAN', 'ISLAM', '2015-09-12', 0),
(28, '', 'jinad omotayo', 'david', 'abiodun', 'male', '09/12/2015', 'Gombe State', 'NIGERIAN', 'ISLAM', '2015-09-12', 0),
(29, '', 'jinads', 'middle', 's', 'female', '09/02/2015', 'Abia State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-12', 0),
(30, '', 'Adekunle ', 'Jones', 'Kelly', 'male', '06/01/2010', 'Ondo State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-13', 0),
(31, '', 'adekola', 'sherifat', 'bola', 'female', '09/15/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-14', 0),
(32, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(33, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(34, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(35, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(36, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(37, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(38, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0),
(39, '', 'hanna', 'cherry', 'kola', 'female', '09/23/2015', 'Lagos State', 'NIGERIAN', 'CHRISTIANITY', '2015-09-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
(20, 'Hausa', 0),
(21, 'home economics', 0),
(22, 'IRK', 0),
(23, 'orology', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_class`
--

CREATE TABLE IF NOT EXISTS `subject_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` int(12) NOT NULL,
  `class` int(12) NOT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `subject_class`
--

INSERT INTO `subject_class` (`id`, `subject`, `class`, `status`) VALUES
(1, 1, 1, 0),
(2, 4, 1, 0),
(3, 16, 1, 0),
(4, 5, 2, 0),
(5, 12, 2, 0),
(6, 15, 3, 0),
(7, 19, 1, 0),
(8, 14, 2, 0),
(9, 20, 2, 0),
(10, 12, 1, 0),
(11, 11, 2, 0),
(12, 7, 3, 0),
(13, 22, 1, 0),
(14, 9, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date_modified` TIMESTAMP NOT NULL ,
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
