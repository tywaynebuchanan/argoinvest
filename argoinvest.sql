-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 04, 2020 at 11:51 PM
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
-- Table structure for table `tblNotes`
--

CREATE TABLE `tblNotes` (
  `id` int(11) NOT NULL,
  `Notes` varchar(255) NOT NULL,
  `DateCreated` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `FileNumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblNotes`
--

INSERT INTO `tblNotes` (`id`, `Notes`, `DateCreated`, `username`, `FileNumber`) VALUES
(1, 'He did not pay', '2020-05-24', '', 'PGR1'),
(2, 'He still has not paid', '2020-05-24', '', 'PGR1'),
(3, 'Tywayne is doing good', '2020-05-24', 'Tywayne', 'PGR2'),
(4, 'datepicker works', '2000-01-01', 'Tywayne', 'AH31'),
(5, 'Select works', '2019-01-01', 'Tywayne', 'PGR1'),
(6, 'works without one field', '2022-01-01', 'Tywayne', 'PGR2'),
(7, 'Tywayne is back', '2000-01-01', 'Kadia badbread', 'PGR2'),
(8, 'Prepared statement is working', '2020-05-07', 'Tywayne', 'PGR1'),
(9, 'Prepared statement is working', '2020-05-07', 'Tywayne', 'PGR1'),
(10, 'Mysqli escape string works', '2020-05-20', 'Tywayne', 'PGR1'),
(11, 'Radio is working', '2020-05-20', 'Tywayne', 'no'),
(12, 'Tywayne', '2020-05-24', 'Tywayne', 'PGR1'),
(13, '', '2020-06-04', 'Tywayne', 'PGR1'),
(14, 'Tywayne is a genius', '2020-06-04', 'Tywayne', 'PGR1'),
(15, '', '2020-06-04', 'Tywayne', 'PGR1'),
(16, 'Tywayne is the man', '2020-06-04', 'Tywayne', 'PGR1'),
(17, 'No duplicate', '2020-06-04', 'Tywayne', 'PGR1'),
(18, '', '2020-06-04', 'Tywayne', 'PGR1'),
(19, 'Tywayne', '2020-06-04', 'Tywayne', 'PGR1'),
(20, '', '2020-06-04', 'Tywayne', 'PGR1'),
(21, 'WTF', '2020-06-04', 'Tywayne', 'PGR1');

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
  `OfficePhone` varchar(30) NOT NULL,
  `CellPhone` varchar(30) NOT NULL,
  `HomePhone` varchar(30) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TRN` varchar(30) NOT NULL,
  `TCC` varchar(30) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Irrigation` decimal(10,2) NOT NULL,
  `NoIrrigation` decimal(10,2) NOT NULL,
  `PropertyID` varchar(5) NOT NULL,
  `Rate` decimal(10,2) NOT NULL,
  `Acreage` decimal(10,2) NOT NULL,
  `LeasePeriod` decimal(10,0) GENERATED ALWAYS AS ((to_days(`EndDate`) - to_days(`StartDate`))) STORED NOT NULL,
  `Hectare` decimal(10,2) GENERATED ALWAYS AS ((`Acreage` * 0.405)) STORED NOT NULL,
  `Revenue` decimal(40,2) GENERATED ALWAYS AS ((`Acreage` * `Rate`)) STORED NOT NULL,
  `User` varchar(40) NOT NULL,
  `Property` varchar(200) NOT NULL,
  `ApplicationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblPersonalInformation`
--

INSERT INTO `tblPersonalInformation` (`ID`, `FileNumber`, `FirstName`, `LastName`, `Street`, `City`, `Parish`, `OfficePhone`, `CellPhone`, `HomePhone`, `Email`, `TRN`, `TCC`, `StartDate`, `EndDate`, `Irrigation`, `NoIrrigation`, `PropertyID`, `Rate`, `Acreage`, `User`, `Property`, `ApplicationDate`) VALUES
(1, 'PGR1', 'Tywayne', 'Buchanan', 'Lot 141 8west Greater Portmore', 'Greater  Portmore', 'St  \r\n Catherine', '8764177898', '8764177898', '8764177898', 'tywaynebuchanan@gmail.com', '114458740', '114458740', '2020-05-01', '2025-05-21', '42.00', '0.00', 'PGR', '10000.00', '42.00', '', 'Plantain Garden River', '2020-05-29 23:25:11'),
(2, 'PGR2', 'Kadia', 'Smith', 'Portmore', 'Portmore', 'Portmore', '8769996666', '8769996666', '8769996666', 'kadia@gmail.com', '112334567', '112334567', '2020-04-01', '2021-05-23', '0.00', '2.00', 'PGR', '5000.00', '2.00', '', '', '2020-05-29 23:25:11'),
(3, 'AH1', 'Bob ', 'Baker', 'Gaza', 'Gaza', 'Gaza', '8765687657', '8765687657', '8765687657', 'bob@gaza.com', '112345678', '112345678', '2020-05-03', '2025-05-03', '0.00', '5.00', 'AH', '10000.00', '5.00', '', '', '2020-05-29 23:25:11'),
(4, 'AH2', 'Pauline', 'Stone', 'Hermitage PO', 'Hermitage PO', 'St Catherine', '8769990000', '8769990000', '8769990000', 'pauline@stone.com', '111222333', '111222333', '2020-05-01', '2025-05-01', '0.00', '25.00', 'AH', '10000.00', '25.00', '', '', '2020-05-29 23:25:11'),
(5, 'AH4', 'Rupaul', 'DragRace', 'DragRace', 'DragRace', 'St Catherine', '8769990000', '8769990000', '8769990000', 'rupal@gmail.com', '111222333', '111222333', '2020-05-01', '2025-05-01', '15.00', '0.00', 'AH', '10000.00', '15.00', '', '', '2020-05-29 23:25:11'),
(6, 'PGR12', 'Kendrick', 'Lamar', 'Mad City', 'Mad City', 'Kingston', '6669999', '6669999', '6669999', 'johnbrown@gmail.com', '999888777', '999888777', '2020-05-20', '2020-05-27', '0.00', '0.00', 'PGR', '10000.00', '20.00', '', '', '2020-05-29 23:25:11'),
(7, 'AH30', 'Mary', 'Blige', '1q Glassspole Avenue', 'Kingston', 'Kingston', '988-2322', '404-6464', '927-4444', 'p_clit@gmail.com', '099000222', '999333000', '2020-04-01', '2025-03-30', '10.00', '0.00', 'AH', '10000.00', '10.00', '', '', '2020-05-29 23:25:11'),
(8, 'AH31', 'Tywaynw', 'Buchanan', 'Lot 140 8west', 'Greater Portmore', 'Kingston', '9990000', '9990000', '9990000', 'johnbrown@gmail.com', '999000111', '999000111', '2020-05-27', '2025-05-27', '10.00', '0.00', 'PGR', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(9, 'AH50', 'Tywayne', 'Buchanan', 'Works', 'works', 'Kingston', '6660000', '6660000', '6660000', 'johnbrown@gmail.com', '111222333', '111222333', '2020-05-06', '2020-05-06', '0.00', '10.00', 'PGR', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(11, 'AH200', 'Tywayne', 'Itworks', 'itworks', 'itworks', 'St Andrew', '8887777', '8887777', '8887777', 'johnsmith@gmail.com', '999000111', '999000111', '2020-05-27', '2020-05-27', '0.00', '0.00', 'AH', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(12, 'AH900', 'Tywayne', 'Itreallyworks', 'Itreallyworks', 'Itreallyworks', 'Kingston', '7778888', '7778888', '7778888', 'johndoe@gmail.com', '999000111', '999000111', '2020-05-27', '2020-05-27', '0.00', '0.00', 'AH', '10000.00', '20.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(13, 'AH786', 'Tywayne', 'Brynn', 'Brynn', 'Brynn', 'Kingston', '8768888', '8768888', '8768888', 'johndoe@gmail.com', '999888111', '999888111', '2020-05-27', '2020-05-27', '0.00', '0.00', 'PGR', '10000.00', '8.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(14, 'AH1000', 'Tywayne', 'itreallyworks', 'Tywayne', 'Tywayne', 'Kingston', '8987777', '8987777', '8987777', 'johnsmith@gmail.com', '999111000', '999111000', '2020-05-27', '2020-05-27', '0.00', '0.00', 'PGR', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(23, 'AH0991', 'Tywayne', 'Tywayne', 'Tywayne', 'Tywayne', 'Kingston', '8889999', '8889999', '8889999', 'johndoe@gmail.com', '999111222', '999111222', '2020-05-06', '2020-05-06', '0.00', '0.00', 'AH', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(26, 'AH1234', 'Tywayne', 'Buchanan', 'home', 'home', 'St Andrew', '8889999', '8889999', '8889999', 'johnson@gmail.com', '111222333', '111222333', '2020-05-28', '2020-05-28', '0.00', '0.00', 'PGR', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(27, 'KD123', 'Kadia', 'Smith', 'Tywayne', 'Brown', 'St Andrew', '3334444', '2223333', '2223333', 'tywaynebrown@gmail.com', '222333444', '222333444', '2020-05-28', '2020-05-28', '0.00', '0.00', 'PGR', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(28, 'SP123', 'Brynn', 'Smith', 'Brynn', 'Brynn', 'Kingston', '8887777', '8887777', '8887777', 'johnbrown@gmail.com', '999888999', '999888999', '2020-05-28', '2020-05-28', '0.00', '0.00', 'SP', '10000.00', '10.00', 'testuser@gmail.com', '', '2020-05-29 23:25:11'),
(29, 'AH100', 'Tywayne', 'Buchanan', 'Lot 10 Bridgboer', 'Greater Portmore', 'St Catherine', '8877654', '8876654', '8877645', 'johnson@gmail.com', '999000111', '999000111', '2020-05-28', '2020-05-28', '0.00', '0.00', 'AH', '10000.00', '10.00', 'tywaynebuchanan@gmail.com', '', '2020-05-29 23:25:11'),
(31, 'AH1235', 'Tywayne', 'Works', 'jdfhdjh', 'sjfdsjhf', 'Kingston', '8889999', '8889999', '8889999', 'johnsmith@gmail.com', '999000000', '999000000', '2020-05-28', '2020-05-28', '0.00', '0.00', 'PGR', '10000.00', '10.00', 'tywaynebuchanan@gmail.com', 'Plantian Gardenn', '2020-05-29 23:25:11'),
(33, 'RHY123', 'Tywayne', 'Buchanan', 'Lot 141 8west Greater Portmore', 'Portmore', 'St Catherine', '9990000', '9990000', '9990000', 'johnsmith@gmail.com', '999000999', '999000999', '2020-05-28', '2020-05-28', '0.00', '10.00', 'RHY', '10000.00', '10.00', 'tywaynebuchanan@gmail.com', 'Rhymesbury', '2020-05-29 23:25:11'),
(34, 'AH123', 'Tywayne', 'Buchanan', 'jhfdjhfjsh', 'sjhfdjhfsj', 'St Andrew', '876-566-6666', '876-877-6665', '876-899-7654', 'jamaica@gmail.com', '999-111-000', '999-111-000', '2020-05-27', '2020-05-26', '0.00', '0.00', 'PGR', '10000.00', '12.00', 'tywaynebuchanan@gmail.com', 'Plantian Gardenn', '2020-05-29 23:25:11'),
(35, 'AF1234', 'Tywayne', 'Buchanan', 'Tywayne', 'Lane', 'Kingston', '999-888-8888', '999-888-8888', '888-888-8888', 'johnbrown@gmail.com', '113-445-666', '112-345-677', '2020-05-20', '2020-05-27', '10.00', '0.00', 'PGR', '10000.00', '10.00', 'tywaynebuchanan@gmail.com', 'Plantian Gardenn', '2020-05-29 23:25:11'),
(36, 'AH9088', 'Tywayne', 'Buchanan', 'Tywayne', 'Buchanan', 'Kingston', '876-656-5656', '656-564-5454', '767-665-6454', 'johnsome@gmail.com', '999-999-999', '999-999-999', '2020-05-07', '2020-05-06', '10.00', '0.00', 'PGR', '10000.00', '10.00', 'tywaynebuchanan@gmail.com', 'Plantian Gardenn', '2020-05-29 23:25:11'),
(37, 'AJT123', 'Tywayne', 'Buchanan', 'Lot 20', 'Greater Portmore', 'St Andrew', '888-877-7777', '655-555-5555', '544-444-4444', 'johnsmith@gmail.com', '999-999-999', '666-666-666', '2020-05-21', '2020-05-18', '20.00', '0.00', 'PGR', '10000.00', '20.00', 'tywaynebuchanan@gmail.com', 'Plantian Gardenn', '2020-05-29 23:25:11'),
(38, 'PGR90', 'Sophia', 'Bush', '103 Love Man Lane', 'Lovers Leap', 'St Elizabeth', '876-000-3333', '876-994-4445', '876-888-1111', 'love_d_dee@gmail.com', '000-088-866', '888-776-555', '2009-08-01', '2030-07-31', '15.00', '0.00', 'PGR', '40000.00', '15.00', 'tywaynebuchanan@gmail.com', 'Plantian Gardenn', '2020-05-29 23:25:11');

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

-- --------------------------------------------------------

--
-- Table structure for table `tblTracker`
--

CREATE TABLE `tblTracker` (
  `id` int(3) NOT NULL,
  `User` varchar(40) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FileNumber` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `file` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `userpassword` varchar(100) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `TimeLogIN` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `userpassword`, `user_name`, `TimeLogIN`, `user_role`) VALUES
(1, 'tywaynebuchanan@gmail.com', 'jamaica1', 'Tywayne Buchanan', '2020-04-28 03:47:44', 'Admin'),
(2, 'tremaine@gmail.com', 'password1', 'Tremaine Buchanan', '2020-04-28 03:47:44', 'User'),
(4, 'gerald@gmail.com', 'password1', 'Gerald Niel', '2020-04-28 03:47:44', 'User'),
(5, 'kadia.smith@gmail.com', 'password1', 'Kadia Smith', '2020-04-28 03:47:44', 'User'),
(8, 'leotis@nobro.com', 'password1', 'Leotis Buchanan', '2020-04-28 03:47:44', ''),
(9, 'yanique@baby.com', 'password1', 'Yanqiue Baby', '2020-04-28 03:47:44', ''),
(10, 'testuser@gmail.com', 'jamaica1', 'Test User10', '2020-04-28 07:39:29', ''),
(11, 'unknown@gmail.com', 'jamaica1', 'Unknown Error', '2020-04-30 18:37:14', ''),
(12, 'Nadine@kgs.com', 'password1', 'Nadine Brown', '2020-05-01 04:21:00', ''),
(13, 'yulane@treats.com', 'password1', 'Yulane Treats', '2020-05-01 04:24:33', ''),
(14, 'testuser@gmail.com', 'password1', 'Test User', '2020-05-21 21:45:49', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `usersonline`
--

CREATE TABLE `usersonline` (
  `id` int(11) NOT NULL,
  `Session` varchar(255) NOT NULL,
  `TimeLogin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblNotes`
--
ALTER TABLE `tblNotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblPersonalInformation`
--
ALTER TABLE `tblPersonalInformation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblProperties`
--
ALTER TABLE `tblProperties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblTracker`
--
ALTER TABLE `tblTracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `User_name` (`user_id`);

--
-- Indexes for table `usersonline`
--
ALTER TABLE `usersonline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblNotes`
--
ALTER TABLE `tblNotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblPersonalInformation`
--
ALTER TABLE `tblPersonalInformation`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblProperties`
--
ALTER TABLE `tblProperties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblTracker`
--
ALTER TABLE `tblTracker`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `usersonline`
--
ALTER TABLE `usersonline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
