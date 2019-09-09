-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 04:04 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `technology`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pass_details`
--

CREATE TABLE `pass_details` (
  `pass_id` int(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_details`
--

INSERT INTO `pass_details` (`pass_id`, `user_name`, `date`, `time`, `note`, `status`) VALUES
(1, 'admin', '2019-09-25', '02:00', '', 'eee'),
(2, 'admin', '2019-09-25', '02:00', 'eee', 'Accept'),
(3, 'abc', '2019-09-25', '02:02', 'ddd', 'Accept');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `reg_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`reg_id`, `first_name`, `last_name`, `user_name`, `email`, `password`) VALUES
(1, 'abc', 'abc', 'abc', 'abc@gmail.com', '1234'),
(2, 'Lakshan', 'Viranga', 'eg163006', 'LAKSHANVIRANGA0000@GMAIL.COM', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pass_details`
--
ALTER TABLE `pass_details`
  ADD PRIMARY KEY (`pass_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pass_details`
--
ALTER TABLE `pass_details`
  MODIFY `pass_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
