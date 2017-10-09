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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUST_ID` int(8) NOT NULL,
  `CUST_NAME` varchar(20) NOT NULL,
  `DATE_OF_BIRTH` date NOT NULL,
  `SEX` varchar(10) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `MOBILE_NO` varchar(20) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `STREET` varchar(255) DEFAULT NULL,
  `PINCODE` int(6) NOT NULL,
  `LOGIN_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUST_ID`, `CUST_NAME`, `DATE_OF_BIRTH`, `SEX`, `EMAIL`, `MOBILE_NO`, `STATE`, `CITY`, `STREET`, `PINCODE`, `LOGIN_ID`) VALUES
(5, 'aa', '2013-04-11', 'Male', 'abacus@gmail.com', '9479935369', 'Andhra Pradesh', 'jpb', '0', 25, 'a'),
(6, 'bb', '2013-02-18', 'Male', 'abc@gmail.com', '9479935222', 'Manipur', 'vv', '0', 25, 'b'),
(7, 'Amit Kumar', '1992-04-29', 'Male', 'amit.shrivastav9@gmail.com', '9595265845', 'Rajasthan', 'Jaipur', 'Bapu Nagar   ', 302007, 'Amit'),
(8, 'Vikas Kumar', '1997-04-25', 'Male', 'vikas.cooldude@gmail.com', '9479795894', 'Bihar', 'Patna', 'SKPuri', 800001, 'Vikas'),
(9, 'Kritika', '1997-04-30', 'Female', 'aabacus@gmail.com', '9479795894', 'Uttar Pradesh', 'Delhi', 'Rajouri Garden  ', 231212, 'Kritika'),
(10, 'aaa', '2013-04-29', 'Male', 'aaa@gmail.com', '9999999999', 'Rajasthan', 'Jaipur', '', 482005, 'aaa'),
(11, 'Vivek', '2014-09-27', 'Male', 'vivek@gmail.com', '947584', 'Meghalaya', 'Jaipur', 'Bapu Nagar   ', 123, 'viveksd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUST_ID`),
  ADD KEY `CUSTOMER` (`LOGIN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUST_ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `CUSTOMER` FOREIGN KEY (`LOGIN_ID`) REFERENCES `login` (`USERNAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
