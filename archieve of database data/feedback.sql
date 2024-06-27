-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2024 at 07:15 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eatlemou`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `phoneno` varchar(11) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `enquiry` text,
  `branchname` varchar(50) DEFAULT NULL,
  `details` text,
  PRIMARY KEY (`feedback_id`),
  KEY `branchname` (`branchname`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `name`, `phoneno`, `email`, `enquiry`, `branchname`, `details`) VALUES
(1, 'John Doe', '1234567890', 'john@example.com', 'GE', 'SUNWAY', 'Need assistance with account activation'),
(2, 'Jane Smith', '9876543210', 'jane@example.com', 'COM', 'MV', 'Service was slow and staff were rude'),
(3, 'Michael Johnson', '5551234567', 'michael@example.com', 'FB', 'QM', 'Website is user-friendly but needs more features'),
(4, 'David Wilson', '3334567890', 'david@example.com', 'GE', 'QM', 'Service was slow and staff were rude. I visited your downtown branch yesterday to inquire about a loan application. Despite having only a few customers, I had to wait for almost an hour before someone assisted me. When I finally got to speak with a staff member, they were dismissive and unhelpful.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
