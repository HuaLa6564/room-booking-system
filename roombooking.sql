-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 02:51 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

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
(88, 'A1002', 'Ferra Melissa', '2017814162', 23, '2018-12-16', '08:00:00', '10:00:00', 'Projector', 'APPROVE', '', '2018-12-13 05:13:42', '2018-12-13 05:26:24', '', ''),
(89, 'A1003', 'Syahida', '2015814162', 32, '2018-12-19', '10:00:00', '11:00:00', 'None', '', '', '2018-12-13 05:14:31', '0000-00-00 00:00:00', '', ''),
(90, 'A1004', 'Kayyisa', '2019814162', 26, '2018-12-18', '16:00:00', '18:00:00', 'None', '', '', '2018-12-13 05:15:17', '0000-00-00 00:00:00', '', ''),
(91, 'A1005', 'Mohamad Syahrul ', '2012814162', 18, '2018-12-21', '08:00:00', '10:00:00', 'Projector', '', '', '2018-12-13 05:16:18', '0000-00-00 00:00:00', '', ''),
(92, 'B1001', 'Firdaus', '2022001198', 20, '2018-12-29', '10:00:00', '00:00:00', 'Projector', '', '', '2018-12-13 05:17:42', '0000-00-00 00:00:00', '', ''),
(93, 'B1004', 'Nurul Fitriah Binti Abdulham', '2016001198', 23, '2018-12-21', '16:00:00', '18:00:00', 'None', '', '', '2018-12-13 05:18:23', '0000-00-00 00:00:00', '', ''),
(94, 'B1005', 'Hazeem', '2021001198', 15, '2018-12-27', '12:00:00', '14:00:00', 'None', '', '', '2018-12-13 05:19:15', '0000-00-00 00:00:00', '', ''),
(95, 'B1003', 'Hafees', '2019001198', 37, '2018-12-14', '08:00:00', '10:00:00', 'Projector', '', '', '2018-12-13 05:20:09', '0000-00-00 00:00:00', '', ''),
(96, 'AUDFKA', 'Lee Yee Wee', '1010119988', 145, '2018-12-31', '08:00:00', '10:00:00', 'Projector', '', '', '2018-12-13 05:21:49', '0000-00-00 00:00:00', '', ''),
(97, 'AUDFSG', 'Mael', '1998210603', 230, '2019-01-16', '14:00:00', '16:00:00', 'Projector', 'APPROVE', '', '2018-12-13 05:23:06', '2018-12-13 05:25:32', '', ''),
(98, 'Bilik Seminar Blok C', 'Astro', '2233445566', 440, '2019-02-14', '08:00:00', '10:00:00', 'HDMI Cable', '', '', '2018-12-13 05:24:38', '0000-00-00 00:00:00', '', ''),
(99, 'A1002', 'Irmah', '2016699036', 20, '2018-12-27', '13:00:00', '14:00:00', 'Projector', '', '', '2018-12-13 08:26:41', '0000-00-00 00:00:00', '', ''),
(101, 'A1001', 'ayu', '2016696364', 30, '2018-12-15', '14:00:00', '16:00:00', 'Projector', '', '', '2018-12-13 08:49:02', '0000-00-00 00:00:00', '', '');

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
(12, 'Nurul Fitriah Binti Abdulham', 'Average', 'ji');

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
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
