-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2016 at 10:46 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-student`
--

-- --------------------------------------------------------

--
-- Table structure for table `s_details`
--

CREATE TABLE `s_details` (
  `s_id` int(6) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `s_std` int(3) NOT NULL COMMENT 'Standard ',
  `s_div` text NOT NULL COMMENT 'Division',
  `s_te` int(4) NOT NULL COMMENT 'Marks in numeric',
  `s_grade` text NOT NULL COMMENT 'Grade Obtained',
  `s_date` datetime(6) NOT NULL COMMENT 'Date Entered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_details`
--

INSERT INTO `s_details` (`s_id`, `f_name`, `l_name`, `s_std`, `s_div`, `s_te`, `s_grade`, `s_date`) VALUES
(1, 'John', 'Doe', 9, 'A', 34, 'A', '2016-12-19 15:15:38.000000'),
(2, 'tiger', 'Nixon', 9, 'D', 23, 'C+', '2016-12-19 15:15:51.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `s_details`
--
ALTER TABLE `s_details`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `s_details`
--
ALTER TABLE `s_details`
  MODIFY `s_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
