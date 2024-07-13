-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `godon`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getbooking` ()   SELECT booking_date from booking$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `t_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `booking_date` date DEFAULT NULL,
  `period` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `agreement` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `biz_id` int(11) NOT NULL,
  `bizname` varchar(20) DEFAULT NULL,
  `bizId` varchar(20) DEFAULT NULL,
  `bizemail` varchar(50) DEFAULT NULL,
  `bizaddress` text NOT NULL,
  `bizpwd` varchar(30) DEFAULT NULL,
  `bizmobile_no` bigint(20) DEFAULT NULL,
  `biztype` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`biz_id`, `bizname`, `bizId`, `bizemail`, `bizaddress`, `bizpwd`, `bizmobile_no`, `biztype`) VALUES
(8, 'Creative Tailors', 'AK798112', 'creative.tailors@gmail.com', '098689-7890', 'shonaluku', 25478977580, 'Textiles'),
(9, 'Gamezone', 'AK798178', 'gamezone@gmail.com', '45656-00200', 'gamers', 254, 'Gaming Zone'),
(10, NULL, NULL, NULL, '', '$2y$10$qArsogNt88zj.OZ3fAyOaO1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business signatories`
--

CREATE TABLE `business signatories` (
  `t_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `relationship` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `warehouse_id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `Owner_id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `mobile_no` bigint(20) DEFAULT NULL,
  `no_of_houses` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `county` varchar(20) DEFAULT NULL,
  `town` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`Owner_id`, `name`, `email`, `pwd`, `mobile_no`, `no_of_houses`, `country`, `county`, `town`, `address`) VALUES
(7, 'Chris', 'whouse@gmail.com', 'storage', 25479809126, 5, 'Kenya', 'Nairobi', 'Langata', '12290-00020'),
(8, 'Esther', 'jaza@gmail.com', 'keepers', 254792341673, 7, 'Kenya', 'Nairobi', 'Karen', '67679-7809'),
(9, 'test', 'teststore@gmail.com', 'test', 84539898322, 6, 'Kenya', 'Nairobi', 'Langata', '12290-00020');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `biz_id` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `dimensions` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `pics` blob DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `county` varchar(20) DEFAULT NULL,
  `town` varchar(30) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `location` text NOT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Triggers `warehouses`
--
DELIMITER $$
CREATE TRIGGER `deletelog` BEFORE DELETE ON `warehouses` FOR EACH ROW INSERT INTO logs VALUES(null,old.id,"deleted",now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertlog` AFTER INSERT ON `warehouses` FOR EACH ROW INSERT INTO logs VALUES(null,new.id,"inserted",now())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLog` AFTER UPDATE ON `warehouses` FOR EACH ROW INSERT INTO logs VALUES(null,new.id,"updated",now())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`t_id`,`h_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`biz_id`);

--
-- Indexes for table `business signatories`
--
ALTER TABLE `business signatories`
  ADD PRIMARY KEY (`t_id`,`fname`,`lname`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`Owner_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`,`biz_id`),
  ADD KEY `t_id` (`biz_id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `biz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `Owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`t_id`) REFERENCES `businesses` (`biz_id`) ON DELETE CASCADE;

--
-- Constraints for table `business signatories`
--
ALTER TABLE `business signatories`
  ADD CONSTRAINT `business signatories_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `businesses` (`biz_id`) ON DELETE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_3` FOREIGN KEY (`id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rating_ibfk_4` FOREIGN KEY (`biz_id`) REFERENCES `businesses` (`biz_id`) ON DELETE CASCADE;

--
-- Constraints for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `warehouses_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`Owner_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
