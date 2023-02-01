-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 07:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `TableID` int(11) NOT NULL,
  `IndexNumber` int(11) DEFAULT NULL,
  `CourseName` varchar(255) DEFAULT NULL,
  `ClassName` varchar(255) DEFAULT NULL,
  `HouseName` varchar(255) DEFAULT NULL,
  `RoomNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`TableID`, `IndexNumber`, `CourseName`, `ClassName`, `HouseName`, `RoomNumber`) VALUES
(11, 12345, 'THOMAS APPIAH ASARE', 'THOMAS APPIAH ASARE', 'THOMAS APPIAH ASARE', 3),
(12, 12345, 'Home Econs', '1 A', 'House 1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parentinfo`
--

CREATE TABLE `parentinfo` (
  `parentid` int(11) NOT NULL,
  `indexNumber` int(11) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `motherOccupation` varchar(255) NOT NULL,
  `motherContactNumber` varchar(10) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `fatherOccupation` varchar(255) NOT NULL,
  `fatherContactNumber` varchar(10) NOT NULL,
  `houseAddress` varchar(255) NOT NULL,
  `postalAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parentinfo`
--

INSERT INTO `parentinfo` (`parentid`, `indexNumber`, `motherName`, `motherOccupation`, `motherContactNumber`, `fatherName`, `fatherOccupation`, `fatherContactNumber`, `houseAddress`, `postalAddress`) VALUES
(6, 2147483647, 'Ama', 'Teaching', '0245067195', 'WILLIAM', 'Farming', '0245789', 'Ayirebi Senior High. P.O.Box 541 Akim Oda. Eastern Region', '4343'),
(7, 2147483647, 'Ama', 'Teaching', '0245067195', 'WILLIAM', 'Farming', '0245789', 'Ayirebi Senior High. P.O.Box 541 Akim Oda. Eastern Region', '4343'),
(8, 123456, 'Ama', 'Teaching', '0245067195', 'thomas', 'Farming', '0245789', 'Ayirebi Senior High. P.O.Box 541 Akim Oda. Eastern Region', 'FRRTYYY'),
(9, 2147483647, 'Ama', 'Teaching', '0245067195', 'WILLIAM', 'Farming', '0245789', 'Ayirebi Senior High. P.O.Box 541 Akim Oda. Eastern Region', 'sadsa');

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
(123456, 'Agyei', 'Ansah', 'Ansa', '2022-12-26', 'Abbey Memorial', '2022-04-06', 'm', 'Presby', '0245067195', 'Akim Oda', 'Tafo', 'Akyenmsa', 'Ayirebi'),
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
(7, 'asas', '123456', '2023-01-21 17:39:04'),
(8, 'frank', '123456', '2023-01-25 19:55:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`TableID`);

--
-- Indexes for table `parentinfo`
--
ALTER TABLE `parentinfo`
  ADD PRIMARY KEY (`parentid`),
  ADD KEY `FK` (`indexNumber`) USING BTREE;

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
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `TableID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parentinfo`
--
ALTER TABLE `parentinfo`
  MODIFY `parentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parentinfo`
--
ALTER TABLE `parentinfo`
  ADD CONSTRAINT `Test` FOREIGN KEY (`indexNumber`) REFERENCES `studenttable` (`IndexNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
