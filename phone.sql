-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 06:45 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

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

CREATE TABLE `persons` (
  `fullName` varchar(40) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `uName` varchar(10) NOT NULL,
  `uId` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
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

CREATE TABLE `stable` (
  `Id` int(4) NOT NULL,
  `staffname` varchar(20) NOT NULL,
  `month` varchar(10) NOT NULL,
  `s_perday` int(5) NOT NULL,
  `attendance` int(3) NOT NULL,
  `salary` int(50) NOT NULL
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
-- Table structure for table `telephone`
--

CREATE TABLE `telephone` (
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `The_brand` varchar(45) NOT NULL,
  `Price_of_the_brand` int(10) NOT NULL,
  `stock` int(11) DEFAULT NULL
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

CREATE TABLE `trans` (
  `Bill_No` int(4) NOT NULL,
  `Date` date NOT NULL,
  `Customer_Name` varchar(20) NOT NULL,
  `Customer_Contact` bigint(10) NOT NULL,
  `Item_Quantity` varchar(225) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `Cashier_ID` varchar(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`Bill_No`, `Date`, `Customer_Name`, `Customer_Contact`, `Item_Quantity`, `Price`, `Cashier_ID`) VALUES
(1, '2019-06-12', 'R.N. Herath', 754426475, '1 SD card', '900.00', '002'),
(2, '2019-06-14', 'D.K. Silva', 775538133, '1 Bluetooth Headset', '1500.00', '009'),
(3, '2019-06-18', 'A.K. Perera', 712398455, '1 Samsung Galaxy J7', '31000.00', '001');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `userid` varchar(10) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `password`, `userid`, `level`) VALUES
('kavishka', 'Hello@world', 'A000', 1),
('janaka', 'janaka', 's001', 0),
('kamal', 'kamal123', 's002', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `stable`
--
ALTER TABLE `stable`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `telephone`
--
ALTER TABLE `telephone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trans`
--
ALTER TABLE `trans`
  ADD PRIMARY KEY (`Bill_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `userid` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
