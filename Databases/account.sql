-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 01:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ACCOUNT_NUMBER` int(8) NOT NULL,
  `START_DATE` date NOT NULL,
  `BALANCE` int(30) NOT NULL,
  `BRANCH_ID` int(8) NOT NULL,
  `CUST_ID` int(8) NOT NULL,
  `ACCOUNT_TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ACCOUNT_NUMBER`, `START_DATE`, `BALANCE`, `BRANCH_ID`, `CUST_ID`, `ACCOUNT_TYPE`) VALUES
(2, '2017-04-11', 938887, 1, 5, 'current'),
(3, '2017-04-21', 183111, 1, 6, 'savings'),
(4, '2017-04-29', 19000, 2, 7, 'savings'),
(5, '2017-04-29', 0, 3, 8, 'savings'),
(6, '2017-04-29', 0, 4, 9, 'savings'),
(7, '2017-04-29', 0, 2, 10, 'savings'),
(8, '2017-09-30', 10000, 1, 11, 'savings');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ACCOUNT_NUMBER`),
  ADD KEY `BRANCH_ID` (`BRANCH_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ACCOUNT_NUMBER` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
