-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2024 at 04:00 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventsphere`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmaster`
--

CREATE TABLE `adminmaster` (
  `username` int(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminmaster`
--

INSERT INTO `adminmaster` (`username`, `password`) VALUES
(0, 'dean'),
(0, 'hod'),
(0, 'director');

-- --------------------------------------------------------

--
-- Table structure for table `clubmaster`
--

CREATE TABLE `clubmaster` (
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clubmaster`
--

INSERT INTO `clubmaster` (`username`, `password`) VALUES
('club1@gmail.com', 'club1');

-- --------------------------------------------------------

--
-- Table structure for table `eventmaster`
--

CREATE TABLE `eventmaster` (
  `eventname` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `venue` varchar(255) NOT NULL,
  `attendence` bigint(20) NOT NULL,
  `commiteename` varchar(255) NOT NULL,
  `contactperson` varchar(255) NOT NULL,
  `contactemail` varchar(255) NOT NULL,
  `contactphone` bigint(20) NOT NULL,
  `eventdetails` varchar(255) NOT NULL,
  `budget` double NOT NULL,
  `fundingsources` varchar(255) NOT NULL,
  `promotionplan` varchar(255) NOT NULL,
  `targetaudience` varchar(255) NOT NULL,
  `approver` varchar(255) NOT NULL,
  `detailfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eventmaster`
--

INSERT INTO `eventmaster` (`eventname`, `datetime`, `venue`, `attendence`, `commiteename`, `contactperson`, `contactemail`, `contactphone`, `eventdetails`, `budget`, `fundingsources`, `promotionplan`, `targetaudience`, `approver`, `detailfile`) VALUES
('', '0000-00-00 00:00:00', 'Main Building', 0, '', '', '', 0, '', 0, '', '', '', '', 0x63617374656e632e706466),
('[value-1]', '0000-00-00 00:00:00', '[value-3]', 0, '[value-5]', '[value-6]', '[value-7]', 0, '[value-9]', 0, '[value-11]', '[value-12]', '[value-13]', '[value-14]', 0x5b76616c75652d31355d),
('rock night', '0000-00-00 00:00:00', 'main bulding', 100, 'mian commitee', 'aishwarya', 'aish@gmail.com', 6537865467, 'hgdsfkg', 5645, 'dfj', 'fghhhh', '4566', 'hod', 0x736466),
('', '0000-00-00 00:00:00', 'Main Building', 0, '', '', '', 0, '', 0, '', '', '', '', ''),
('', '0000-00-00 00:00:00', 'Main Building', 0, '', '', '', 0, '', 0, '', '', '', '', ''),
('Rock Night', '2024-02-17 13:17:00', 'Main Building', 300, 'Main Commitee', 'Aishwarya Dhangar', 'aish@gmail.com', 1234567890, 'sdf', 10000, 'students', 'sf', '300', 'hod', 0x4170706c69636174696f6e2e706466),
('Rock Night', '2024-02-09 14:01:00', '', 300, '', 'Aishwarya Dhangar', 'aish@gmail.com', 123456789, 'fddf', 0, 'df', 'dfg', 'fd', 'director', ''),
('Rock Night', '2024-02-09 14:56:00', '', 300, '', 'Aishw23 3', 'aish@gmail', 1234567890, 'dsdfds', 0, 'df', 'fd', 'fd', 'dean', '');

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pno` bigint(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`fname`, `lname`, `email`, `pno`, `password`, `gender`) VALUES
('Aishwarya', 'Dhangar', 'aish@gmail.com', 123456789, 'aishwarya', 'female');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
