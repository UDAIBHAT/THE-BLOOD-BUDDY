-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2024 at 08:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `fname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `bg` varchar(10) NOT NULL,
  `rv` varchar(100) NOT NULL,
  `rs` varchar(200) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `ri` varchar(100) NOT NULL,
  `th` varchar(100) NOT NULL,
  `abg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`fname`, `dob`, `bg`, `rv`, `rs`, `mail`, `age`, `addr`, `ri`, `th`, `abg`) VALUES
('udai bhat', '2024-05-11', 'A+', 'jaiupur', 'mooo', 'udaibhat181@gmail.com', 15, 'block -E Boys Hostel ,LD College of Engineering,Ahemdbad', 'dadawd', 'nooo', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `feedtable`
--

CREATE TABLE `feedtable` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no` int(10) NOT NULL,
  `feed` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `funame` varchar(100) NOT NULL,
  `cinfo` int(10) NOT NULL,
  `bldgrp` varchar(10) NOT NULL,
  `urg` varchar(10) NOT NULL,
  `addinfo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`funame`, `cinfo`, `bldgrp`, `urg`, `addinfo`) VALUES
('aman', 2147483647, 'A+', 'urgent', 'hloo'),
('aman', 2147483647, 'A-', 'urgent', 'skjfjhdkaekf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(12, 'udaibhat181@gmail.com', 'aman'),
(13, 'udaibhat2@gmail.com', 'aman'),
(14, 'aman@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedtable`
--
ALTER TABLE `feedtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedtable`
--
ALTER TABLE `feedtable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
