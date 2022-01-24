-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 10:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--
CREATE DATABASE IF NOT EXISTS `bloodbank` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE IF NOT EXISTS `bloodgroup` (
  `bg_id` int(100) NOT NULL AUTO_INCREMENT,
  `bg_name` varchar(100) NOT NULL,
  PRIMARY KEY (`bg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bloodgroup`
--

INSERT INTO `bloodgroup` (`bg_id`, `bg_name`) VALUES
(1, 'o+'),
(2, 'o-'),
(3, 'AB+'),
(4, 'AB-'),
(5, 'A+'),
(6, 'A-'),
(7, 'B+'),
(8, 'B-');

-- --------------------------------------------------------

--
-- Table structure for table `camp`
--

CREATE TABLE IF NOT EXISTS `camp` (
  `camp_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_title` varchar(500) NOT NULL,
  `organised_by` varchar(500) NOT NULL,
  `state` int(100) NOT NULL,
  `city` int(100) NOT NULL,
  `pic` varchar(900) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `camp`
--

INSERT INTO `camp` (`camp_id`, `camp_title`, `organised_by`, `state`, `city`, `pic`, `detail`) VALUES
(1, 'MIT Collage', 'Blood foundation', 1, 1, 'blood_donation_camp.jpg', 'A Blood Donation Camp at MIT Collage organized by Blood Foundation.'),
(2, 'Pune Blood Foundation', 'PBF', 1, 2, 'p38_2.jpg', 'A Blood Donation Camp at PBF.\r\n '),
(3, 'Rakt Blood Bank', 'Blood Bank', 1, 1, 'MIT-WPU.jpg', 'Blood Bank in pune'),
(10, 'Blood Foundation', 'Blood Foundation', 2, 8, 'Reflex logo.png', 'Blood donation camp in Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(100) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  `pin_code` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` int(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `pin_code`, `district`, `state`) VALUES
(1, 'Pune', '411043', 'Pune', 1),
(2, 'Nashik', '410253', 'Pune', 1),
(3, 'Mumbai', '144526', 'Mumbai', 1),
(8, 'delhi', '021554', 'delhi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `row_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `subj` varchar(700) NOT NULL,
  PRIMARY KEY (`row_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`row_id`, `name`, `email`, `mobile`, `subj`) VALUES
(11, 'abhi', 'A@acs.com', '542434', 'Need help'),
(12, 'Abc', 'Abc@gmail.com', '9923247327', 'Your website has bug!'),
(13, 'test123', 'test123@gmail.com', '12345678', 'some suggestion'),
(14, 'Abhi1234', 'Abc1234@gmail.com', '1231244123', 'some suggestion');

-- --------------------------------------------------------

--
-- Table structure for table `donarregistration`
--

CREATE TABLE IF NOT EXISTS `donarregistration` (
  `donar_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `bgroup` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `pic` varchar(1000) NOT NULL,
  PRIMARY KEY (`donar_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donarregistration`
--

INSERT INTO `donarregistration` (`donar_id`, `name`, `gender`, `age`, `mobile`, `bgroup`, `email`, `pwd`, `pic`) VALUES
(1, 'abhi', 'male', '24', '123442312312', 1, 'abhi123@gmail.com', '123', 'anonymous.jpg'),
(2, 'aby', 'male', '22', '144123321', 2, 'aby@gmail.com', 'A123', 'lockscreeen.jpg'),
(3, 'Gladys', 'male', '12', '3431212', 1, 'GladysTOConnor@dayrep.com', '123', 'Wallpaper.jpg'),
(4, 'Jeanetta', 'male', '23', '1354123', 3, 'JeanettaGMartinez@armyspy.com', '123', 'lockscreeen.jpg'),
(5, 'Virgil', 'male', '43', '122413413', 1, 'VirgilGGraham@jourrapide.com', '123', 'anonymous.jpg'),
(6, 'test123', 'male', '21', '123456789', 2, 'test123@gmail.com', 'test123', 'anonymous.jpg'),
(7, 'test1234', 'male', '23', '123456789', 4, 'test1234@gmail.com', 'test1234', 'lockscreeen.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE IF NOT EXISTS `donation` (
  `donation_id` int(100) NOT NULL AUTO_INCREMENT,
  `camp_id` int(100) NOT NULL,
  `ddate` date NOT NULL,
  `units` int(100) NOT NULL,
  `detail` varchar(800) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`donation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donation_id`, `camp_id`, `ddate`, `units`, `detail`, `email`) VALUES
(1, 1, '2000-06-08', 45, 'Blood Donated', 'abhi123@gmail.com'),
(2, 1, '2021-04-17', 4, '', 'abhi123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `camp_id` int(100) NOT NULL,
  `pic_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(400) NOT NULL,
  `pic` varchar(800) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallary`
--

INSERT INTO `gallary` (`camp_id`, `pic_id`, `title`, `pic`) VALUES
(9, 15, 'pic 1', 'p48_2.jpg'),
(9, 16, 'pic 2', 'p11 (1).jpg'),
(9, 17, 'pic 3', 'p141.jpg'),
(9, 18, 'pic 5', 'p177_2.jpg'),
(9, 19, 'pic 6', 'p279.jpg'),
(8, 20, 'pic 8', 'p246.jpg'),
(9, 21, 'pic 9', 'p82.jpg'),
(7, 22, 'pic 2', 'p82.jpg'),
(7, 23, 'pic 3', 'p93.jpg'),
(7, 24, 'pic 6', 'p148.jpg'),
(7, 25, 'pic 7', 'pamrik@ymail.com1 (2).jpg'),
(7, 26, 'pic 8', 'slider4.jpg'),
(7, 27, 'pic 9', 'slider7.jpg'),
(1, 28, 'pic 2', 'slider8.jpg'),
(1, 29, 'pic 3', 'slider3.jpg'),
(1, 30, 'pic 4', 'donation.jpg'),
(1, 31, 'pic 3', 'Blood-Donation2.jpg'),
(1, 32, 'pic 4', 'blood-donation-.jpg'),
(1, 33, 'pic 6', 'blood-donation.jpg'),
(8, 34, 'pic 1', 'resizedBlood donation (1).jpg'),
(8, 35, 'pic 2', 'Blood-donation-camp.jpg'),
(8, 36, 'pic 4', '3.jpg'),
(8, 37, 'pic 5', '4.jpg'),
(8, 38, 'pic 7', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `detail` varchar(900) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `detail`) VALUES
(1, 'blood donate', 'give blood give bloodgive blood'),
(2, 'blood bank', 'blooooddddd\n\n');

-- --------------------------------------------------------

--
-- Table structure for table `requestes`
--

CREATE TABLE IF NOT EXISTS `requestes` (
  `req_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bgroup` int(100) NOT NULL,
  `reqdate` date NOT NULL,
  `detail` varchar(500) NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestes`
--

INSERT INTO `requestes` (`req_id`, `name`, `gender`, `age`, `mobile`, `email`, `bgroup`, `reqdate`, `detail`) VALUES
(1, 'Micheal', 'male', '34', '1431423', 'MichealRDaniels@jourrapide.com', 1, '1971-01-17', 'Need blood'),
(2, 'Richard', 'male', '12', '53424234', 'RichardJGoldsmith@jourrapide.com', 2, '2008-01-13', 'Need o- blood'),
(3, 'Elaine', 'male', '53', '143432543245', 'Adw@gmail.com', 3, '1990-01-19', 'Help'),
(4, 'test999', 'male', '34', '123465789', 'test999@gmail.com', 3, '1984-01-17', 'need blood'),
(5, 'test12345', 'male', '34', '1926898496', 'test12345@gmail.com', 4, '1986-01-15', 'need some blood');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(100) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'Maharashtra'),
(2, 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pwd`, `typeofuser`) VALUES
('abhi', '123', 'Admin'),
('aby', '123', 'General'),
('abc', '123', 'General');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
