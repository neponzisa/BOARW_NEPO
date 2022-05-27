-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 07:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boar`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `bID` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `usd` varchar(20) NOT NULL,
  `euro` varchar(20) NOT NULL,
  `gbp` varchar(20) NOT NULL,
  `chf` varchar(20) NOT NULL,
  `cad` varchar(20) NOT NULL,
  `jpy` varchar(20) NOT NULL,
  `zar` varchar(20) NOT NULL,
  `kes` varchar(20) NOT NULL,
  `ugx` varchar(20) NOT NULL,
  `tzs` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`bID`, `date`, `time`, `usd`, `euro`, `gbp`, `chf`, `cad`, `jpy`, `zar`, `kes`, `ugx`, `tzs`, `action`) VALUES
(9, 'Mon,28-Mar-2022', '02:37:44', '400.3325', '100.225', '3.2001', '87.25445', '477.311122', '378.20033', '3002.01255', '4.2554457', '78520.336', '200.30014', 'Buying');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `sID` int(10) NOT NULL,
  `sdate` varchar(20) NOT NULL,
  `stime` varchar(15) NOT NULL,
  `usd` varchar(20) NOT NULL,
  `euro` varchar(20) NOT NULL,
  `gbp` varchar(20) NOT NULL,
  `chf` varchar(20) NOT NULL,
  `cad` varchar(20) NOT NULL,
  `jpy` varchar(20) NOT NULL,
  `zar` varchar(20) NOT NULL,
  `kes` varchar(20) NOT NULL,
  `ugx` varchar(20) NOT NULL,
  `tzs` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`sID`, `sdate`, `stime`, `usd`, `euro`, `gbp`, `chf`, `cad`, `jpy`, `zar`, `kes`, `ugx`, `tzs`, `action`) VALUES
(8, 'Mon,28-Mar-2022', '02:25:51', '1024.7174', '1.1524', '1.0124', '67.352', '3000.25', '67.2150', '0.21025', '35.2255', '1003.356', '415.2554', 'Selling');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(1) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `usertype` varchar(15) NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`bID`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`sID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `bID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `sID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(1) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
