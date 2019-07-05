-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2019 at 06:36 AM
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
('Janaka Gamage', '861378088v', '0768943266', '241, Middeniya Rd, Weeraketiya', 'Janaka', 'S001', 'gamage86'),
(' Kumara Wanigasekara', '922778333v', '0718185289', '23, Mandaduwa Rd, Weeraketiya', 'Kumara', 'S002', 'kumara1234'),
(' Lakmali Alwis', '955678423v', '0716573009', '14A, Tangalle Rd, Weeraketiya', 'Lakmali', 'S003', 'alwis333'),
(' Piyanga Withanage', '903378343v', '0719935200', '23/41, Damulla Rd, Weeraketiya', 'Priyanga', 'S004', 'priyanga9'),
('Kamal Silva', '903458221v', '0767534007', '31, Middeniya Rd, Medamulana', 'Kamal', 'S005', 'ksilva123');

-- --------------------------------------------------------

--
-- Table structure for table `stable`
--

DROP TABLE IF EXISTS `stable`;
CREATE TABLE IF NOT EXISTS `stable` (
  `Id` varchar(4) NOT NULL,
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
('S001', 'Janaka', 'June', 200, 30, 6000),
('S002', 'Kumara', 'June', 200, 25, 5000),
('S003', 'Lakmali', 'June', 200, 25, 5000),
('S004', 'Priyanga', 'June', 200, 21, 4200),
('S005', 'Kamal', 'June', 200, 22, 4400);

-- --------------------------------------------------------

--
-- Table structure for table `telephone`
--

DROP TABLE IF EXISTS `telephone`;
CREATE TABLE IF NOT EXISTS `telephone` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `The_brand` varchar(45) NOT NULL,
  `Price_of_the_brand` int(10) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telephone`
--

INSERT INTO `telephone` (`name`, `id`, `The_brand`, `Price_of_the_brand`, `stock`) VALUES
('htc ', '2356', 'Desire 728', 35000, 25),
('htc', '2425', 'xyzd', 35000, 198),
('nokia', '3454578', 'nokia asha', 19000, 49),
('Htc', '356277', 'htc mia', 35000, 24),
('samsung', '35652', 'galaxy', 12000, 200),
('oppo', '37684', 'x2', 40000, 12),
('oppo', '53656', 'oppx', 35000, 99),
('nokia', '9898', 'x1', 26873, 25);

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

DROP TABLE IF EXISTS `trans`;
CREATE TABLE IF NOT EXISTS `trans` (
  `Bill_No` int(4) NOT NULL,
  `Date` date NOT NULL,
  `Customer_Name` varchar(20) NOT NULL,
  `Customer_Contact` bigint(10) NOT NULL,
  `Item_Quantity` varchar(225) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Cashier_ID` varchar(4) NOT NULL,
  PRIMARY KEY (`Bill_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`Bill_No`, `Date`, `Customer_Name`, `Customer_Contact`, `Item_Quantity`, `Price`, `Cashier_ID`) VALUES
(1, '2019-06-01', 'R.N. Herath', 754426475, '1 Nokia Asha', '19000.00', 'S002'),
(2, '2019-06-14', 'D.K. Silva', 775538133, '1 HTC Desire 728', '35000.00', 'S002'),
(3, '2019-06-18', 'A.K. Perera', 712398455, '1 Samsung Galaxy J7', '31000.00', 'S001');

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
('Janaka', 'gamage86', 'S001', 0),
('Kumara', 'kumara1234', 'S002', 0),
('Lakmali', 'alwis333', 'S003', 0),
('Priyanga', 'priyanga9', 'S004', 0),
('Kamal', 'ksilva123', 'S005', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
