-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2020 at 12:16 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `argoinvest`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblProperties`
--

CREATE TABLE `tblProperties` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `SizePark` decimal(10,2) NOT NULL,
  `InHectare` decimal(10,2) NOT NULL,
  `PropertyID` varchar(255) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `Available` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblProperties`
--

INSERT INTO `tblProperties` (`id`, `Name`, `SizePark`, `InHectare`, `PropertyID`, `Total`, `Available`) VALUES
(5, 'Plantain Garden River', '100.00', '100.00', 'PGR', '100.00', '0.00'),
(6, 'Amity Hall', '100.00', '100.00', 'AH', '100.00', '100.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblProperties`
--
ALTER TABLE `tblProperties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblProperties`
--
ALTER TABLE `tblProperties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
