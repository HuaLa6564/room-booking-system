-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 06:42 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roombooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `adlist`
--

CREATE TABLE `adlist` (
  `no` int(11) NOT NULL,
  `roomNo` varchar(30) NOT NULL,
  `name` varchar(225) NOT NULL,
  `id` varchar(50) NOT NULL,
  `audience` int(11) NOT NULL,
  `date` date NOT NULL,
  `Tstart` time NOT NULL,
  `Tend` time NOT NULL,
  `equipment` varchar(225) NOT NULL,
  `status` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `curdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `rate` varchar(30) NOT NULL,
  `comment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adlist`
--

INSERT INTO `adlist` (`no`, `roomNo`, `name`, `id`, `audience`, `date`, `Tstart`, `Tend`, `equipment`, `status`, `code`, `curdate`, `date_update`, `rate`, `comment`) VALUES
(21, 'A1005', 'yuni', '1998', 15, '2018-11-02', '12:00:00', '14:00:00', 'Projector', 'APPROVE', '', '2018-12-08 20:45:00', '2018-12-12 01:27:11', '', ''),
(22, 'A1001', 'deferf', '999', 30, '2018-11-29', '12:00:00', '13:00:00', 'None', 'APPROVE', '', '2018-12-08 20:45:00', '2018-12-11 13:18:34', '', ''),
(23, 'A1001', 'vala', '2016', 30, '2018-12-03', '12:00:00', '01:59:00', 'None', 'APPROVE', '', '2018-12-08 20:45:00', '2018-12-11 13:18:27', '', ''),
(31, 'A1001', 'Farah Qurataanyuni Binti Mohammad', '2016814162', 0, '0000-00-00', '00:00:00', '00:00:00', 'None', 'DISAPPROVE', '', '2018-12-08 20:45:00', '2018-12-11 13:18:21', '', ''),
(67, 'A1001', 'cepat laaaa', '2016814162', 12, '2018-12-04', '02:02:00', '02:03:00', 'None', 'DISAPPROVE', '', '2018-12-09 11:42:56', '2018-12-11 13:17:52', '', ''),
(68, 'A1001', 'hahahahhaahahha', '2016814162', 12, '2018-12-04', '17:05:00', '04:59:00', 'None', 'DISAPPROVE', '', '2018-12-09 11:44:10', '2018-12-11 13:09:18', '', ''),
(69, 'A1001', 'try je', '2016814162', 12, '2018-12-05', '02:03:00', '03:04:00', 'None', 'APPROVE', '', '2018-12-09 11:53:00', '2018-12-11 13:07:57', '', ''),
(70, 'A1001', 'code la syg', '2016814162', 12, '2018-11-26', '02:03:00', '02:03:00', 'None', 'DISAPPROVE', '', '2018-12-09 11:54:17', '2018-12-11 12:12:11', '', ''),
(71, 'A1001', 's', 's', 3, '2018-12-11', '03:02:00', '02:03:00', 'None', 'APPROVE', '', '2018-12-09 11:57:04', '0000-00-00 00:00:00', '', ''),
(72, 'A1001', 'w', '4', 3, '2018-12-05', '13:02:00', '03:03:00', 'None', 'APPROVE', '', '2018-12-09 11:57:58', '0000-00-00 00:00:00', '', ''),
(73, 'B1003', 'Fitriah', '6515915', 12, '2018-11-07', '12:00:00', '08:33:37', 'None', '', '', '2018-12-11 23:52:08', '2018-12-31 00:00:00', '', ''),
(75, 'A1002', 'ayu', '2345678', 25, '2018-12-11', '12:34:00', '12:33:00', 'Projector', '', '', '2018-12-12 00:23:44', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `no` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `rate` varchar(225) NOT NULL,
  `comment` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`no`, `name`, `rate`, `comment`) VALUES
(1, 'Farah Qurataanyuni Binti Mohammad', 'Need Improvement', 'wefef'),
(2, 'jijo', 'Good', 'hahahahhaa');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'farah', 'farah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adlist`
--
ALTER TABLE `adlist`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adlist`
--
ALTER TABLE `adlist`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
