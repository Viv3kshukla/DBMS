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
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `TRANS_ID` int(8) NOT NULL,
  `CREDIT` int(30) DEFAULT NULL,
  `DEBIT` int(30) DEFAULT NULL,
  `TRANS_DATE` date NOT NULL,
  `CHEQUE_NO` int(20) DEFAULT NULL,
  `ACCOUNT_NUMBER` int(8) NOT NULL,
  `ACCOUNT_TO` int(8) DEFAULT NULL,
  `DESCRIPTION` varchar(255) DEFAULT NULL,
  `CUST_ID` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`TRANS_ID`, `CREDIT`, `DEBIT`, `TRANS_DATE`, `CHEQUE_NO`, `ACCOUNT_NUMBER`, `ACCOUNT_TO`, `DESCRIPTION`, `CUST_ID`) VALUES
(6, 1000, NULL, '2017-04-22', NULL, 2, 3, 'Amount 1000 Credited from account number 2 for abcd', 6),
(7, NULL, 1000, '2017-04-22', NULL, 2, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 5),
(8, 1000, NULL, '2017-04-22', NULL, 2, 3, 'Amount 1000 Credited from account number 2 for abcd', 6),
(9, NULL, 1000, '2017-04-22', NULL, 2, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 5),
(10, 1000, NULL, '2017-04-22', NULL, 2, 2, 'Amount 1000 Credited from account number 2 for abcd', 5),
(11, NULL, 1000, '2017-04-22', NULL, 2, 2, 'Amount 1000 Dredited transfered to account number 2 for abcd', 5),
(12, 1000, NULL, '2017-04-22', NULL, 3, 2, 'Amount 1000 Credited from account number 3 for abcd', 5),
(13, NULL, 1000, '2017-04-22', NULL, 3, 2, 'Amount 1000 Dredited transfered to account number 2 for abcd', 6),
(14, 1000000, NULL, '2017-04-22', NULL, 3, 2, 'Amount 1000000 Credited from account number 3 for abcd', 5),
(15, NULL, 1000000, '2017-04-22', NULL, 3, 2, 'Amount 1000000 Dredited transfered to account number 2 for abcd', 6),
(16, 1000000, NULL, '2017-04-22', NULL, 3, 3, 'Amount 1000000 Credited from account number 3 for abcd', 6),
(17, NULL, 1000000, '2017-04-22', NULL, 3, 3, 'Amount 1000000 Dredited transfered to account number 3 for abcd', 6),
(18, 1000, NULL, '2017-04-23', NULL, 3, 2, 'Amount 1000 Credited from account number 3 for abcd', 5),
(19, NULL, 1000, '2017-04-23', NULL, 3, 2, 'Amount 1000 Dredited transfered to account number 2 for abcd', 6),
(20, 55555, NULL, '2017-04-28', NULL, 2, 3, 'Amount 55555 Credited from account number 2 for abcd', 6),
(21, NULL, 55555, '2017-04-28', NULL, 2, 3, 'Amount 55555 Dredited transfered to account number 3 for abcd', 5),
(22, 123, NULL, '2017-04-28', NULL, 2, 3, 'Amount 123 Credited from account number 2 for abcd', 6),
(23, NULL, 123, '2017-04-28', NULL, 2, 3, 'Amount 123 Dredited transfered to account number 3 for abcd', 5),
(24, NULL, 55555, '2017-04-28', NULL, 2, 2, 'Amount 55555 Dredited transfered to account number 2 for abcd', 5),
(25, 55555, NULL, '2017-04-28', NULL, 2, 2, 'Amount 55555 Credited from account number 2 for abcd', 5),
(26, NULL, 10000, '2017-04-28', NULL, 2, 3, 'Amount 10000 Dredited transfered to account number 3 for abcd', 5),
(27, 10000, NULL, '2017-04-28', NULL, 2, 3, 'Amount 10000 Credited from account number 2 for abcd', 6),
(28, NULL, 55555, '2017-04-29', NULL, 2, 3, 'Amount 55555 Dredited transfered to account number 3 for abcd', 5),
(29, 55555, NULL, '2017-04-29', NULL, 2, 3, 'Amount 55555 Credited from account number 2 for abcd', 6),
(30, NULL, 10000, '2017-04-29', NULL, 2, 3, 'Amount 10000 Dredited transfered to account number 3 for abcd', 5),
(31, 10000, NULL, '2017-04-29', NULL, 2, 3, 'Amount 10000 Credited from account number 2 for abcd', 6),
(32, NULL, 1000, '2017-04-29', NULL, 2, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 5),
(33, 1000, NULL, '2017-04-29', NULL, 2, 3, 'Amount 1000 Credited from account number 2 for abcd', 6),
(34, NULL, 1000, '2017-04-29', NULL, 2, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 5),
(35, 1000, NULL, '2017-04-29', NULL, 2, 3, 'Amount 1000 Credited from account number 2 for abcd', 6),
(36, NULL, 1000, '2017-04-29', NULL, 2, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 5),
(37, 1000, NULL, '2017-04-29', NULL, 2, 3, 'Amount 1000 Credited from account number 2 for abcd', 6),
(38, NULL, 1000, '2017-04-29', NULL, 2, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 5),
(39, 1000, NULL, '2017-04-29', NULL, 2, 3, 'Amount 1000 Credited from account number 2 for abcd', 6),
(44, 11111, NULL, '2017-04-29', NULL, 2, 0, 'Amount 11111 Credited by loan 9 for personal_loan', 5),
(45, 10000, NULL, '2017-04-29', NULL, 2, 0, 'Amount 10000 Credited by loan 12 for home_loan', 5),
(46, NULL, 12546, '2017-04-29', NULL, 2, 3, 'Amount 12546 Dredited transfered to account number 3 for accccc', 5),
(47, 12546, NULL, '2017-04-29', NULL, 2, 3, 'Amount 12546 Credited from account number 2 for accccc', 6),
(48, NULL, 10000, '2017-04-29', NULL, 2, 3, 'Amount 10000 Dredited transfered to account number 3 for accccc', 5),
(49, 10000, NULL, '2017-04-29', NULL, 2, 3, 'Amount 10000 Credited from account number 2 for accccc', 6),
(50, 10000, NULL, '2017-04-30', NULL, 4, 0, 'Amount 10000 Credited by loan 13 for home_loan', 7),
(51, 10000, NULL, '2017-04-30', NULL, 4, 0, 'Amount 10000 Credited by loan 13 for home_loan', 7),
(52, NULL, 1000, '2017-04-30', NULL, 4, 3, 'Amount 1000 Dredited transfered to account number 3 for abcd', 7),
(53, 1000, NULL, '2017-04-30', NULL, 4, 3, 'Amount 1000 Credited from account number 4 for abcd', 6),
(54, NULL, 10000, '2017-10-01', NULL, 2, 8, 'Amount 10000 Dredited transfered to account number 8 for Scholarship', 5),
(55, 10000, NULL, '2017-10-01', NULL, 2, 8, 'Amount 10000 Credited from account number 2 for Scholarship', 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`TRANS_ID`),
  ADD KEY `ACCOUNT_NUMBER` (`ACCOUNT_NUMBER`),
  ADD KEY `CUST_ID` (`CUST_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `TRANS_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`ACCOUNT_NUMBER`) REFERENCES `account` (`ACCOUNT_NUMBER`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`CUST_ID`) REFERENCES `customer` (`CUST_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
