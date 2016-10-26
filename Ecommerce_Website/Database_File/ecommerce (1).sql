-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2016 at 07:03 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_information`
--

CREATE TABLE IF NOT EXISTS `account_information` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(50) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `account_no` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE IF NOT EXISTS `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_number` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `user_name`, `user_address`, `user_number`) VALUES
(1, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(2, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(3, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(4, 'Sachin', '5400 N. Lakewood Avenue', 2147483647),
(5, 'Sachin', '5400 N. Lakewood Avenue', 2147483647),
(6, 'Sachin', '5400 N. Lakewood Avenue', 2147483647),
(7, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(8, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(9, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(10, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(11, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(12, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(13, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `parent_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `description`, `parent_id`) VALUES
(23, 'Computer Appliances', '', ''),
(24, 'Monitor', '', '23'),
(25, 'Hard Drive', '', '23'),
(26, 'Mouse', 'Optical', '23'),
(27, 'Keyboard', '', '23'),
(28, 'Laptops & Accessories', '', ''),
(29, 'Laptops', '', '28');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `description` varchar(500) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `cost`, `description`, `product_id`) VALUES
(14, 'Samsung', '5000', '18.5'' TFT ', '24'),
(15, 'Seagate', '6000', '1 TB Hard disk', '25'),
(16, 'Logitech', '600', 'Wheel', '26'),
(17, 'Logitech', '600', 'Multimedia', '27'),
(18, 'TVS', '480', 'Strong keyboard to last long', '27'),
(19, 'Dell', '42000', '1 TB ,i5 processor,4 GB RAM', '29'),
(20, 'Keyboards', '5000', 'jkjkj', '25');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` varchar(20) NOT NULL,
  `images` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `images`) VALUES
(26, '14', 'Monitor.jpg'),
(27, '15', 'hard-drive-with-tool'),
(28, '16', '3-Tastenmaus_Microso'),
(29, '17', 'keyboard1.jpg'),
(30, '18', 'key1.jpg'),
(31, '18', 'key2.jpg'),
(32, '19', 'dell1.jpg'),
(33, '20', '1234.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE IF NOT EXISTS `shipping` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `ship_name` varchar(20) NOT NULL,
  `ship_address` varchar(255) NOT NULL,
  `ship_number` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `ship_name`, `ship_address`, `ship_number`) VALUES
(1, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(2, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(3, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(4, 'Sachin', '5400 N. Lakewood Avenue', 2147483647),
(5, 'Sachin', '5400 N. Lakewood Avenue', 2147483647),
(6, 'Sachin', '5400 N. Lakewood Avenue', 2147483647),
(7, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(8, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(9, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(10, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(11, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(12, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647),
(13, 'Ayush Kumar Singh', '5400 N. Lakewood Avenue', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `mobile` int(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `role` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `gender`, `mobile`, `dob`, `address`, `role`) VALUES
(5, 'Ayush Kumar', 'ayush@dualcube.com', 'aks', 'Male', 123, '2016-02-29', 'Diamond Harbour Road', 0),
(7, 'admin', 'admin@dualcube.com', 'ayush', '', 0, '0000-00-00', '', 1),
(8, 'Ravindra Kumar', 'ravi@gmail.com', '123', 'Male', 321, '2016-03-01', 'Diamond Harbour Road', 0),
(10, '', '', '', '', 0, '0000-00-00', '', 0),
(11, '', '', '', '', 0, '0000-00-00', '', 0),
(12, '', '', '', '', 0, '0000-00-00', '', 0),
(13, '', '', '', '', 0, '0000-00-00', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
