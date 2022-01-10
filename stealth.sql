-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 11:56 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `grpby_time_tab`
--

CREATE TABLE IF NOT EXISTS `grpby_time_tab` (
  `id` int(11) NOT NULL,
  `tim_date` date NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grpby_time_tab`
--

INSERT INTO `grpby_time_tab` (`id`, `tim_date`, `value`) VALUES
(1, '2022-01-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grpby_user_tab`
--

CREATE TABLE IF NOT EXISTS `grpby_user_tab` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grpby_user_tab`
--

INSERT INTO `grpby_user_tab` (`id`, `user_id`, `value`) VALUES
(1, 100, 1),
(2, 101, 4),
(3, 103, 5);

-- --------------------------------------------------------

--
-- Table structure for table `grpby_user_time`
--

CREATE TABLE IF NOT EXISTS `grpby_user_time` (
  `id` int(11) NOT NULL,
  `dt_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `value` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grpby_user_time`
--

INSERT INTO `grpby_user_time` (`id`, `dt_date`, `user_id`, `value`) VALUES
(1, '2022-01-08', 100, 1),
(2, '2022-01-08', 101, 4),
(3, '2022-01-08', 103, 5);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hist_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `content` varchar(100) NOT NULL,
  `createdon` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `hist_time`, `content`, `createdon`) VALUES
(1, 100, '2022-01-08 13:21:47', 'My First Data to insert', '2022-01-08 18:51:47'),
(2, 100, '2022-01-08 13:22:19', 'second data', '2022-01-08 18:52:19'),
(3, 100, '2022-01-08 13:53:34', 'Third data from user 101', '2022-01-08 19:23:34'),
(4, 101, '2022-01-08 13:54:16', 'First data from BBB', '2022-01-08 19:24:16'),
(5, 103, '2022-01-08 13:57:36', 'DDD Testing data', '2022-01-08 19:27:36'),
(6, 100, '2022-01-08 14:05:25', 'This is the model we have created', '2022-01-08 19:35:25'),
(7, 100, '2022-01-08 14:07:25', 'Simple data to test', '2022-01-08 19:37:25'),
(8, 100, '2022-01-08 14:13:59', 'abcd test', '2022-01-08 19:43:59'),
(9, 100, '2022-01-08 14:17:49', 'sample tab g', '2022-01-08 19:47:49'),
(10, 100, '2022-01-08 14:18:53', 'testing data here', '2022-01-08 19:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_id` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `ename` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `pass`, `ename`) VALUES
(100, '100', 'AAA'),
(101, '101', 'BBB'),
(102, '102', 'CCC'),
(103, '103', 'DDD');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE IF NOT EXISTS `testing` (
  `id` int(11) NOT NULL,
  `namey` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `namey`) VALUES
(1, 'hhh'),
(2, 'dzfdsdg'),
(3, 'fsdfvgdsgd'),
(4, 'jubi testing data here'),
(5, 'dddd'),
(6, 'dddd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grpby_time_tab`
--
ALTER TABLE `grpby_time_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grpby_user_tab`
--
ALTER TABLE `grpby_user_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grpby_user_time`
--
ALTER TABLE `grpby_user_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grpby_time_tab`
--
ALTER TABLE `grpby_time_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `grpby_user_tab`
--
ALTER TABLE `grpby_user_tab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `grpby_user_time`
--
ALTER TABLE `grpby_user_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
