-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2024 at 04:59 PM
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `icno` varchar(12) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phoneno` varchar(10) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `bankcard` varchar(16) DEFAULT NULL,
  `role` varchar(3) DEFAULT 'CUS',
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `name`, `icno`, `dob`, `phoneno`, `email`, `username`, `password`, `bankcard`, `role`) VALUES
(1, 'Cedric', '030915101980', '2003-09-15', '0123456789', 'cedric4@gmail.com', 'Cedric01', '00000000', NULL, 'ADM'),
(2, 'Zoe', '030406101980', '2003-04-06', '0123456789', 'zoe@gmail.com', 'Zoe01', '00000000', NULL, 'ADM'),
(3, 'Eric', '030319101980', '2003-03-19', '0123456789', 'eric@gmail.com', 'Eric01', '00000000', '0000000000000000', 'CUS'),
(4, 'Estee', '030806109999', '2003-08-06', '0123456789', 'estee24@gmail.com', 'Estee01', '00000000', NULL, 'ADM'),
(5, 'Chun Deik', '030824054567', '2003-08-24', '0123456789', 'chundeik24@1utar.my', 'cd0824', '00000000', '9999999999999999', 'CUS');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
