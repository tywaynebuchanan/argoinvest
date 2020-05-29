-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 26, 2020 at 12:24 PM
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
-- Table structure for table `tblPersonalInformation`
--

CREATE TABLE `tblPersonalInformation` (
  `ID` int(3) NOT NULL,
  `FileNumber` varchar(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Parish` varchar(20) NOT NULL,
  `OfficePhone` varchar(10) NOT NULL,
  `CellPhone` varchar(10) NOT NULL,
  `HomePhone` varchar(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TRN` varchar(9) NOT NULL,
  `TCC` varchar(9) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Property` varchar(100) NOT NULL,
  `Irrigation` decimal(10,2) NOT NULL,
  `NoIrrigation` decimal(10,2) NOT NULL,
  `PropertyID` varchar(5) NOT NULL,
  `Rate` decimal(10,2) NOT NULL,
  `Acreage` decimal(10,2) NOT NULL,
  `LeasePeriod` decimal(10,0) GENERATED ALWAYS AS ((to_days(`EndDate`) - to_days(`StartDate`))) STORED NOT NULL,
  `Hectare` decimal(10,2) GENERATED ALWAYS AS ((`Acreage` * 0.405)) STORED NOT NULL,
  `Revenue` decimal(40,2) GENERATED ALWAYS AS ((`Acreage` * `Rate`)) STORED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblPersonalInformation`
--

INSERT INTO `tblPersonalInformation` (`ID`, `FileNumber`, `FirstName`, `LastName`, `Street`, `City`, `Parish`, `OfficePhone`, `CellPhone`, `HomePhone`, `Email`, `TRN`, `TCC`, `StartDate`, `EndDate`, `Property`, `Irrigation`, `NoIrrigation`, `PropertyID`, `Rate`, `Acreage`, `LeasePeriod`, `Hectare`, `Revenue`) VALUES
(1, 'PGR1', 'Tywayne', 'Buchanan', 'Lot 141 8west Greater Portmore', 'Greater  Portmore', 'St  \r\n Catherine', '8764177898', '8764177898', '8764177898', 'tywaynebuchanan@gmail.com', '114458740', '114458740', '2020-05-01', '2025-05-21', 'Plantain\r\nGarden River', '42.00', '0.00', 'PGR', '10000.00', '42.00', '1846', '17.01', '420000.00'),
(2, 'PGR2', 'Kadia', 'Smith', 'Portmore', 'Portmore', 'Portmore', '8769996666', '8769996666', '8769996666', 'kadia@gmail.com', '112334567', '112334567', '2020-04-01', '2021-05-23', 'Plantain Garden River', '0.00', '2.00', 'PGR', '5000.00', '2.00', '417', '0.81', '10000.00'),
(3, 'AH1', 'Bob ', 'Baker', 'Gaza', 'Gaza', 'Gaza', '8765687657', '8765687657', '8765687657', 'bob@gaza.com', '112345678', '112345678', '2020-05-03', '2025-05-03', 'Amenity Hall', '0.00', '5.00', 'AH', '10000.00', '5.00', '1826', '2.03', '50000.00'),
(4, 'AH2', 'Pauline', 'Stone', 'Hermitage PO', 'Hermitage PO', 'St Catherine', '8769990000', '8769990000', '8769990000', 'pauline@stone.com', '111222333', '111222333', '2020-05-01', '2025-05-01', 'Amity Hall', '0.00', '25.00', 'AH', '10000.00', '25.00', '1826', '10.13', '250000.00'),
(5, 'AH4', 'Rupaul', 'DragRace', 'DragRace', 'DragRace', 'St Catherine', '8769990000', '8769990000', '8769990000', 'rupal@gmail.com', '111222333', '111222333', '2020-05-01', '2025-05-01', 'Amity Hall', '15.00', '0.00', 'AH', '10000.00', '15.00', '1826', '6.08', '150000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblPersonalInformation`
--
ALTER TABLE `tblPersonalInformation`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblPersonalInformation`
--
ALTER TABLE `tblPersonalInformation`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
