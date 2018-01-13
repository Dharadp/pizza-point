-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2017 at 07:12 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pizza_point`
--
CREATE DATABASE IF NOT EXISTS `pizza_point` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pizza_point`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `book_table`
--

CREATE TABLE IF NOT EXISTS `book_table` (
  `bk_id` int(4) NOT NULL AUTO_INCREMENT,
  `bk_name` varchar(30) NOT NULL,
  `bk_email` varchar(20) NOT NULL,
  `bk_phone` varchar(10) NOT NULL,
  `bk_date` varchar(15) NOT NULL,
  `bk_time` varchar(15) NOT NULL,
  `bk_people` int(4) NOT NULL,
  `bk_msg` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`bk_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `book_table`
--

INSERT INTO `book_table` (`bk_id`, `bk_name`, `bk_email`, `bk_phone`, `bk_date`, `bk_time`, `bk_people`, `bk_msg`) VALUES
(1, 'Dhara', 'dhara2494@gmail.com', '9898056685', '30-05-2017', '06:00PM', 2, 'nice'),
(3, 'Twinkal', 'twinkalpatel299@gmai', '9054054022', '31-5-2017', '16:32pm', 2, 'nice'),
(5, 'Dhara', 'dhara2494@gmail.com', '9898056685', '', '06:00PM', 4, 'jknm'),
(6, 'Vishal', 'dharap@rbi.edu.in', '9898056685', '16/06/2017', '12:53', 2, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `discount_offer`
--

CREATE TABLE IF NOT EXISTS `discount_offer` (
  `do_id` int(4) NOT NULL AUTO_INCREMENT,
  `do_item_name` varchar(20) NOT NULL,
  `do_item_quantity` int(4) NOT NULL,
  `do_item_price` int(4) NOT NULL,
  `description` varchar(200) NOT NULL,
  `do_image` varchar(100) NOT NULL,
  PRIMARY KEY (`do_id`),
  KEY `item_id` (`do_item_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `discount_offer`
--

INSERT INTO `discount_offer` (`do_id`, `do_item_name`, `do_item_quantity`, `do_item_price`, `description`, `do_image`) VALUES
(9, 'Chizz Pizza', 2, 300, 'only for todays', 'admin/offer/index.jpg'),
(10, 'pizza', 2, 200, 'offer for today', 'admin/offer/index2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home_delivery`
--

CREATE TABLE IF NOT EXISTS `home_delivery` (
  `hm_id` int(4) NOT NULL AUTO_INCREMENT,
  `hm_name` varchar(20) NOT NULL,
  `hm_email` varchar(20) NOT NULL,
  `hm_phone` varchar(10) NOT NULL,
  `hm_address` varchar(100) NOT NULL,
  PRIMARY KEY (`hm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `home_delivery`
--

INSERT INTO `home_delivery` (`hm_id`, `hm_name`, `hm_email`, `hm_phone`, `hm_address`) VALUES
(3, 'Twinkal', 'twinkalpatel299@gmai', '9898056685', '151-3 patel vas,\r\nat bechar alias,\r\nbechraji'),
(4, 'Tanavi', 'twinkalpatel299@gmai', '9054054022', 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `item_id` int(4) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(20) NOT NULL,
  `item_price` int(4) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_price`) VALUES
(1, 'Chizz Pizza', 100),
(2, 'Italian Pizza', 50),
(3, 'Regular Pizza', 149),
(4, 'Medium Pizza', 249),
(5, 'Burger', 150),
(6, 'Sandwich', 30),
(7, 'Ice cream', 20),
(13, 'Double Chizz Pizza', 249),
(14, 'Large Pizza', 350);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(20) NOT NULL,
  `u_email` varchar(20) NOT NULL,
  `u_phone` varchar(15) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_email`, `u_phone`) VALUES
(1, 'Vishal', 'dharap@rbi.edu.in', '9898056685'),
(2, 'Tanavi', 'twinkalpatel299@gmai', '9054054022');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
