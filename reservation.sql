-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2022 at 08:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmed`
--

CREATE TABLE `confirmed` (
  `confirmedID` int(50) NOT NULL,
  `reservationID` int(50) NOT NULL,
  `idnumber` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `document` varchar(50) NOT NULL,
  `certification` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `appointmentdate` varchar(50) NOT NULL,
  `appointmenttime` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmed`
--

INSERT INTO `confirmed` (`confirmedID`, `reservationID`, `idnumber`, `fullname`, `document`, `certification`, `purpose`, `status`, `appointmentdate`, `appointmenttime`, `message`, `price`) VALUES
(1, 1, 2017100955, 'bern charrie', 'Transcript of Records', 'Subject enrolled', 'Evaluation', 'Confirmed', '', '', '', ''),
(2, 3, 2017100955, 'bern charrie', 'Transcript of Records', 'GPA', 'Board Exam', 'Confirmed', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `declined`
--

CREATE TABLE `declined` (
  `declinedID` int(50) NOT NULL,
  `reservationID` int(50) NOT NULL,
  `idnumber` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `document` varchar(50) NOT NULL,
  `certification` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `reason` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `declined`
--

INSERT INTO `declined` (`declinedID`, `reservationID`, `idnumber`, `fullname`, `document`, `certification`, `purpose`, `status`, `reason`) VALUES
(1, 2, 2017100955, 'bern charrie', 'Form 137', 'Officially Enrolled', 'Scholarship', 'Declined', ''),
(2, 4, 2017100955, 'bern charrie', 'Form 137', 'Subject enrolled', 'Scholarship', 'Declined', '');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `docu_id` int(11) NOT NULL,
  `type_docu` varchar(250) NOT NULL,
  `pricelist` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`docu_id`, `type_docu`, `pricelist`) VALUES
(1, 'TOR', '150.00'),
(2, 'Form 137', '150.00'),
(3, 'Officially Enrolled', '100.00'),
(4, 'Subject Enrolled', '100.00'),
(5, 'GPA', '100.00'),
(6, 'Earned Units', '100.00'),
(7, 'Subject with Grades', '100.00');

-- --------------------------------------------------------

--
-- Table structure for table `reserveinfo`
--

CREATE TABLE `reserveinfo` (
  `reservationID` int(50) NOT NULL,
  `idnumber` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `document` varchar(50) NOT NULL,
  `certification` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `fullname` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idnumber` int(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`fullname`, `phone`, `address`, `course`, `year`, `gender`, `email`, `idnumber`, `password`, `role`) VALUES
('admin', '', '', '', '', '', 'admin@gmail.com', 123456, 'admin', 'admin'),
('bern charrie', '09123456789', 'Cagayan de Oro', 'BSIT', '3rd', 'Female', 'berncharrie08@gmail.com', 2017100955, '1234', 'student'),
('Bern Charrie Gulang', '09361286438', 'Lapasan, Cagayan de Oro City', 'BSIT', '3rd', 'Female', 'berncharriegulang@gmail.com', 2019100707, '2019100707', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD PRIMARY KEY (`confirmedID`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `declined`
--
ALTER TABLE `declined`
  ADD PRIMARY KEY (`declinedID`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`docu_id`) USING BTREE,
  ADD KEY `type_docu` (`type_docu`);

--
-- Indexes for table `reserveinfo`
--
ALTER TABLE `reserveinfo`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `idnumber` (`idnumber`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`idnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmed`
--
ALTER TABLE `confirmed`
  MODIFY `confirmedID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `declined`
--
ALTER TABLE `declined`
  MODIFY `declinedID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `docu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reserveinfo`
--
ALTER TABLE `reserveinfo`
  MODIFY `reservationID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `confirmed`
--
ALTER TABLE `confirmed`
  ADD CONSTRAINT `confirmed_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `signin` (`idnumber`);

--
-- Constraints for table `declined`
--
ALTER TABLE `declined`
  ADD CONSTRAINT `declined_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `signin` (`idnumber`);

--
-- Constraints for table `reserveinfo`
--
ALTER TABLE `reserveinfo`
  ADD CONSTRAINT `reserveinfo_ibfk_1` FOREIGN KEY (`idnumber`) REFERENCES `signin` (`idnumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
