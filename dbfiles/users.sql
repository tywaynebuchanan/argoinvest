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
(5, 'dian@bailey.com', 'password1', 'Dian Bailey', '2020-04-28 03:47:44', ''),
(8, 'leotis@nobro.com', 'password1', 'Leotis Buchanan', '2020-04-28 03:47:44', ''),
(9, 'yanique@baby.com', 'password1', 'Yanqiue Baby', '2020-04-28 03:47:44', ''),
(10, 'testuser@gmail.com', 'jamaica1', 'Test User10', '2020-04-28 07:39:29', ''),
(11, 'unknown@gmail.com', 'jamaica1', 'Unknown Error', '2020-04-30 18:37:14', ''),
(12, 'Nadine@kgs.com', 'password1', 'Nadine Brown', '2020-05-01 04:21:00', ''),
(13, 'yulane@treats.com', 'password1', 'Yulane Treats', '2020-05-01 04:24:33', ''),
(14, 'testuser@gmail.com', 'password1', 'Test User', '2020-05-21 21:45:49', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `User_name` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
