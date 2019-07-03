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
(1, '2019-06-12', 'R.N. Herath', 754426475, '1 SD card', '900.00', '002'),
(2, '2019-06-14', 'D.K. Silva', 775538133, '1 Bluetooth Headset', '1500.00', '009'),
(3, '2019-06-18', 'A.K. Perera', 712398455, '1 Samsung Galaxy J7', '31000.00', '001');


-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `tp_no` varchar(11) NOT NULL,
  `attendence` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `Address`, `tp_no`, `attendence`, `salary`, `username`, `password`) VALUES
(28, 'dilan', 'srimal', 'no 150,colombo', '0772324243', 95, 50000, 'admin', 'ucsc@123'),
(29, 'KMN', 'nandana', 'no 5,colombo 07', '0772324243', 80, 30000, 'adminucsc@123', 'aaa'),
(30, 'dileep', 'nsrimal@gmail.com', 'colombo 8,', '0772324243', 90, 40000, 'admin', 'bb'),
(31, 'ucsc', 'nsrimal@gmail.com', 'no 25,colombo 9', '0777847899', 90, 40000, 'dileep', '22'),
(32, 'nandana', 'srimal@gmail.com', 'no 3,colombo 10', '0777847899', 95, 45000, 'admin', '3333'),
(33, 'jekwekjew', 'nsrimal@gmail.com', 'no 50,colombo', '0777847899', 75, 45000, 'admin', 'ucsc@123'),
(34, 'dilan', 'dilan@gmail.com', 'AWsded', '0772324243', 89, 45000, 'testuser', '3245464'),
(35, 'sugath', 'dilan@gmail.com', 'no 7,colombo 7', '0772324243', 89, 45000, 'testuser', '3245464');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
