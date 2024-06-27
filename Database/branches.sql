-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 12, 2024 at 04:06 PM
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
-- Table structure for table `branches`
--

DROP TABLE IF EXISTS `branches`;
CREATE TABLE IF NOT EXISTS `branches` (
  `branch_id` int NOT NULL,
  `state` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contactno` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `state`, `name`, `address`, `contactno`) VALUES
(1, 'Selangor', 'IOI CITY MALL', 'L2-14, 2nd Floor, IOI City Mall, IOI Resort City, 62502 Putrajaya, Selangor.', '0107807793'),
(2, 'Selangor', 'SUNWAY PYRAMID', 'OB.K9, Ground Floor, Jalan PJS 11/15, Bandar Sunway, 47500 Petaling Jaya, Selangor.', '0104276421'),
(3, 'Selangor', 'MID VALLEY MEGAMALL', 'LG-059, Mid Valley Megamall, Lingkaran Syed Putra, Mid Valley City, 49200 Kuala Lumpur.', '0123429184'),
(4, 'Negeri Sembilan', 'AEON SEREMBAM 2', 'Lot G52, AEON Serembam 2, 112, Persiaran S2 B1, Serembam 2, 70300 Serembam, Negeri Sembilan.', '0173458046'),
(5, 'Penang', 'QUEENBAY MALL', '3F-01 (A), Queenbay Mall, Persiaran Bayan Baru, 11900 Bayan, Pulau Pinang.', '0163521234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
