-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 15, 2016 at 10:37 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `email` varchar(50) DEFAULT NULL,
  `booked_flag` int(11) DEFAULT NULL,
  `start_time` varchar(5) DEFAULT NULL,
  `end_time` varchar(5) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`email`, `booked_flag`, `start_time`, `end_time`, `date`, `reservation_id`) VALUES
('abc@gmial.com', 1, '08:00', '09:00', '0000-00-00', 25),
('abc@gmial.com', 1, '11:00', '12:00', '2016-06-16', 26),
('abc@gmial.com', 1, '08:00', '09:00', '2016-06-16', 27),
('bkmanuj13@gmail.com', 1, '17:00', '18:00', '2016-06-16', 28),
('nishantgarg021294@gmail.com', 1, '09:30', '10:30', '2016-06-16', 29);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
