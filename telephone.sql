-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 07:08 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `telephone`
--
ALTER TABLE `telephone`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
