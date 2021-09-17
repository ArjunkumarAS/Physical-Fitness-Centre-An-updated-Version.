-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2021 at 06:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `ad_email` varchar(50) NOT NULL,
  `ad_password` varchar(50) NOT NULL,
  `ad_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`ad_email`, `ad_password`, `ad_name`) VALUES
('admin121@gmail.com', 'admin@123', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(5) NOT NULL,
  `weight` varchar(5) NOT NULL,
  `height` varchar(5) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `keyword` varchar(20) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `membership` varchar(20) NOT NULL,
  `DOJ` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`username`, `email`, `age`, `weight`, `height`, `mobile_no`, `gender`, `password`, `keyword`, `address`, `membership`, `DOJ`) VALUES
('A.S.Arjun Kumar', 'arjunit2000@gmail.com', '22', '90', '175', '9629947148', 'Male', 'aW1iYWNr', 'hi', '5,Pillaiyar Kovil Street,MMW Colony,Thirunagr,Madurai-6.', 'Gold', '2021-07-04'),
('A.S.Arun Kumar', 'arunshiyam2004@gmail.com', '17', '57', '170', '7890456287', 'Male', 'aW1iYWNr', 'hey', '5,Pillaiyar Kovil Street,MMW Colony,Thirunagr,Madurai-6.', 'Gold', '2020-05-09'),
('Jegadeeshan D', 'jagan@yahoo.com', '21', '65', '173', '7890456287', 'Male', 'aW1qZWdhbg==', 'hey', 'Annanagar,Madurai-9.', 'Gold', '2021-07-04'),
('A.S.Shiyam Sundar', 'shiyam@gmail.com', '54', '75', '170', '7890456287', 'Male', 'c2hpeWFt', 'hi', '5,Pillaiyar Kovil Street,MMW Colony,Thirunagr,Madurai-6.', 'Gold', '2021-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`ad_email`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
