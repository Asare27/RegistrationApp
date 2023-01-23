-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 07:23 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayisecapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `IndexNumber` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `OtherName` varchar(50) DEFAULT NULL,
  `DateOfAdmission` date NOT NULL,
  `NameOfFormerSchool` varchar(100) DEFAULT NULL,
  `DateOfBirth` date NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `ReligiousDenomination` varchar(50) DEFAULT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `HomeTown` varchar(100) DEFAULT NULL,
  `PlaceOfBirth` varchar(100) DEFAULT NULL,
  `District` varchar(50) DEFAULT NULL,
  `Region` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`IndexNumber`, `FirstName`, `LastName`, `OtherName`, `DateOfAdmission`, `NameOfFormerSchool`, `DateOfBirth`, `Gender`, `ReligiousDenomination`, `PhoneNumber`, `HomeTown`, `PlaceOfBirth`, `District`, `Region`) VALUES
(1245877, 'Thomas', 'Appiah', 'ASas', '2023-01-03', 'CRIG', '2023-01-03', '', 'Presby', '0245067195', 'Akim Oda', 'Tafo', 'Akyenmsa', 'Ayirebi'),
(2147483647, 'THOMAS APPIAH', 'ASARE', 'teacher', '2023-01-18', 'THOMAS APPIAH ASARE', '2023-01-19', 'm', 'Presby', '0245067195', 'ACCRA', 'Tafo', 'Akyenmsa', 'Ayirebi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_at`) VALUES
(6, 'thomas', '123456', '2023-01-21 17:07:38'),
(7, 'asas', '123456', '2023-01-21 17:39:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`IndexNumber`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
