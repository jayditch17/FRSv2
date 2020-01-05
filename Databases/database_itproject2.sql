-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 05:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_itproject2`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_office`
--

CREATE TABLE `account_office` (
  `officeID` int(20) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `depOfc` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_office`
--

INSERT INTO `account_office` (`officeID`, `firstName`, `lastName`, `depOfc`, `email`, `password`) VALUES
(3, 'sample', 'balansi', 'sao', 'office@slu.edu.ph', 'officefs');

-- --------------------------------------------------------

--
-- Table structure for table `dean_office`
--

CREATE TABLE `dean_office` (
  `eventID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mobNum` varchar(11) NOT NULL,
  `org` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `eveName` varchar(50) NOT NULL,
  `numPart` varchar(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dean_office`
--

INSERT INTO `dean_office` (`eventID`, `firstName`, `lastName`, `mobNum`, `org`, `pos`, `adviser`, `eveName`, `numPart`, `startDate`, `endDate`, `startTime`, `endTime`) VALUES
(1, 'j', 'j', 'j', 'org', 'j', 'j', 'jj', 'j', '1212-12-12', '1212-12-12', '00:12:00', '00:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equipID` int(11) NOT NULL,
  `equipName` varchar(100) NOT NULL,
  `equipStatus` varchar(100) NOT NULL,
  `equipRemarks` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mobNum` varchar(50) NOT NULL,
  `org` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `eveName` varchar(50) NOT NULL,
  `evePlace` varchar(50) NOT NULL,
  `numPart` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `firstName`, `lastName`, `mobNum`, `org`, `pos`, `adviser`, `eveName`, `evePlace`, `numPart`, `startDate`, `endDate`, `startTime`, `endTime`) VALUES
(8, 'jayditch', 'balansi', '09999999999', 'Sikap', 'President', 'Juan Cruz', 'Benta Mangga', 'Devesse Plaza', '1000', '2020-01-03', '2020-01-10', '07:00:00', '19:00:00'),
(9, 'dest', 'aldana', '09999999999', 'MilkTea', 'VP', 'Del', 'Palakasan ng Milktea', 'Devesse Plaza', '89', '2020-01-13', '2020-01-20', '10:59:00', '12:59:00'),
(10, 'AC', 'Manahan', '09999999999', 'ac orgs', 'VP', 'Father', 'Mass', 'Amphi Theater', '500', '2020-01-12', '2020-01-12', '21:59:00', '12:58:00'),
(11, 'Lester', 'De Guzman', '09999999999', 'Swimmers', 'Teacher', 'Jayditch', 'Swimming Lesson', 'Swimming Pool', '50', '2020-01-15', '2020-01-18', '13:00:00', '01:00:00'),
(12, 'Yeza', 'Salazar', '09999999999', 'Runners', 'VP', 'Lester De Guzman', 'Run for your life', 'Oval', '54', '2020-01-10', '2020-01-11', '16:01:00', '03:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilityID` int(15) NOT NULL,
  `facilityLevel` varchar(15) NOT NULL,
  `facilityRoom` varchar(15) NOT NULL,
  `roomType` varchar(50) NOT NULL,
  `roomDescription` varchar(50) NOT NULL,
  `roomCapacity` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilityID`, `facilityLevel`, `facilityRoom`, `roomType`, `roomDescription`, `roomCapacity`) VALUES
(10, '100', '100', 'Laboratory', 'dwadefdsf', '500'),
(11, '5', '515', 'Lecture', 'ayus', '500'),
(12, '5', '433', 'Laboratory', 'lecturelecturelecturelecturelecture', '50');

-- --------------------------------------------------------

--
-- Table structure for table `request_su`
--

CREATE TABLE `request_su` (
  `eventID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mobNum` varchar(11) NOT NULL,
  `org` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `eveName` varchar(50) NOT NULL,
  `evePlace` varchar(50) NOT NULL,
  `numPart` varchar(50) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `equipments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_su`
--

INSERT INTO `request_su` (`eventID`, `firstName`, `lastName`, `mobNum`, `org`, `pos`, `adviser`, `eveName`, `evePlace`, `numPart`, `startDate`, `endDate`, `startTime`, `endTime`, `equipments`) VALUES
(5, 'jayditch', 'balansi', '09987897987', 'Orga', 'VP', 'Lester De Guzman', 'Benta BBQ', 'Devesse Plaza', '60', '2020-01-27', '2020-01-29', '10:56:00', '19:00:00', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `sao_office`
--

CREATE TABLE `sao_office` (
  `eventID` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `mobNum` varchar(11) NOT NULL,
  `org` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `adviser` varchar(50) NOT NULL,
  `eveName` varchar(50) NOT NULL,
  `numPart` varchar(5) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `semesterdate`
--

CREATE TABLE `semesterdate` (
  `id` int(255) NOT NULL,
  `semesterstart` varchar(255) NOT NULL,
  `semesterend` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `semesterdate`
--

INSERT INTO `semesterdate` (`id`, `semesterstart`, `semesterend`) VALUES
(1, '2020-04-01', '2020-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `orgs` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `endofsem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `orgs`, `pos`, `email`, `user_type`, `password`, `status`, `endofsem`) VALUES
(10, 'super', 'admin', 'super', 'admin', 'superadmin@localhost.ph', 'Super Admin', 'slu', 'Active', ''),
(12, 'guest', 'user', 'guest', 'user', 'guestuser@localhost.ph', 'Guest User', 'slu', 'Active', '2020-12-04'),
(13, 'admin', 'user', 'dean', 'dean', 'dean@localhost.ph', 'Dean User', 'slu', 'Active', '2020-12-04'),
(14, 'admin', 'user', 'sao', 'sao', 'sao@localhost.ph', 'Sao User', 'slu', 'Active', '2020-12-04'),
(15, 'sample', 'sample', 'super', 'admin', 'superadmin123@localhost.ph', 'Super Admin', 'slu', 'Active', '2019-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_office`
--
ALTER TABLE `account_office`
  ADD PRIMARY KEY (`officeID`);

--
-- Indexes for table `dean_office`
--
ALTER TABLE `dean_office`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equipID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilityID`);

--
-- Indexes for table `request_su`
--
ALTER TABLE `request_su`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `sao_office`
--
ALTER TABLE `sao_office`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_office`
--
ALTER TABLE `account_office`
  MODIFY `officeID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dean_office`
--
ALTER TABLE `dean_office`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equipID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilityID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `request_su`
--
ALTER TABLE `request_su`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sao_office`
--
ALTER TABLE `sao_office`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
