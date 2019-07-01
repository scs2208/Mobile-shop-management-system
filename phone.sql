-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2019 at 06:44 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
CREATE TABLE IF NOT EXISTS `persons` (
  `fullName` varchar(40) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `uName` varchar(10) NOT NULL,
  `uId` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`fullName`, `nid`, `phoneNo`, `address`, `uName`, `uId`, `password`) VALUES
('Pringa Gamage', '945678978v', ' 071600866', '241,wellakka,weligama ', 'pringa', 's007', 'Hello2'),
('sandana dayananda', '645678333v', '0718185280', 'colombo,05   ', 'sandana', 's003', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `stable`
--

DROP TABLE IF EXISTS `stable`;
CREATE TABLE IF NOT EXISTS `stable` (
  `Id` int(4) NOT NULL,
  `staffname` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `s_perday` int(5) NOT NULL,
  `attendance` int(3) NOT NULL,
  `salary` int(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stable`
--

INSERT INTO `stable` (`Id`, `staffname`, `month`, `s_perday`, `attendance`, `salary`) VALUES
(1, 'hasini', 'january', 200, 31, 6000),
(2, 'anjana', 'january', 200, 21, 4200),
(3, 'hansani', 'january', 200, 25, 5000),
(4, 'sandya', 'january', 200, 25, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `userid`, `level`) VALUES
('kavishka', 'Hello@world', 'A000', 1),
('janaka', 'janaka', 's001', 0),
('kamal', 'kamal123', 's002', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
