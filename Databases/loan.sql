-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 01:32 PM
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
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `LOAN_ID` int(8) NOT NULL,
  `LOAN_DATE` date NOT NULL,
  `AMOUNT` int(30) NOT NULL,
  `BRANCH_ID` int(8) NOT NULL,
  `CUST_ID` int(8) NOT NULL,
  `LOAN_TYPE` varchar(20) DEFAULT 'None',
  `LOAN_STATUS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`LOAN_ID`, `LOAN_DATE`, `AMOUNT`, `BRANCH_ID`, `CUST_ID`, `LOAN_TYPE`, `LOAN_STATUS`) VALUES
(4, '2017-04-28', 1000, 1, 5, 'home_loan', 'successful'),
(5, '2017-04-28', 10000, 1, 5, 'home_loan', 'successful'),
(6, '2017-04-28', 10000, 1, 5, 'home_loan', 'successful'),
(7, '2017-04-28', 1222, 1, 5, 'personal_loan', 'successful'),
(8, '2017-04-29', 2222, 1, 5, 'car_loan', 'successful'),
(9, '2017-04-29', 11111, 1, 5, 'personal_loan', 'successful'),
(11, '2017-04-29', 11111, 1, 5, 'home_loan', 'reject'),
(12, '2017-04-29', 10000, 1, 5, 'home_loan', 'successful'),
(13, '2017-04-30', 10000, 3, 7, 'home_loan', 'successful'),
(14, '2017-08-26', 1000, 1, 5, 'home_loan', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`LOAN_ID`),
  ADD KEY `BRANCH_ID` (`BRANCH_ID`),
  ADD KEY `CUST_ID` (`CUST_ID`),
  ADD KEY `LOAN_TYPE` (`LOAN_TYPE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `LOAN_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`BRANCH_ID`) REFERENCES `branch` (`BRANCH_ID`),
  ADD CONSTRAINT `loan_ibfk_2` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`),
  ADD CONSTRAINT `loan_ibfk_3` FOREIGN KEY (`LOAN_TYPE`) REFERENCES `loan_type` (`LOAN_TYPE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
