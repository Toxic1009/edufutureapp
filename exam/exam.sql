-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 08:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--
CREATE DATABASE IF NOT EXISTS `exam` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;
USE `exam`;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `login_id` int(50) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`login_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '151593');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `eid` text COLLATE utf8mb4_bin NOT NULL,
  `id` text COLLATE utf8mb4_bin NOT NULL,
  `ansid` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`eid`, `id`, `ansid`) VALUES
('5eef859fb108a', '5eef85d06ed1d', '5eef85d089ebb'),
('5eef859fb108a', '5eef85d0c9282', '5eef85d0e1158');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(50) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `subject` varchar(600) COLLATE utf8mb4_bin NOT NULL,
  `description` varchar(900) COLLATE utf8mb4_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `name`, `email`, `subject`, `description`, `date`) VALUES
(11, 'ankit', 'ankit@gmail.com', 'subjecttttttttt', 'hi everyone aaaaaaaaaaaaaa kasasa asas', '2020-06-21 08:52:28'),
(13, 'gauravprajapati', 'gauravprajapati1@gmail.com', 'write subject', 'write your feedback here aaaaaaaaaa', '2020-06-21 09:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `historyid` bigint(50) NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `eid` text COLLATE utf8mb4_bin NOT NULL,
  `totals` int(20) NOT NULL,
  `correct` int(20) NOT NULL,
  `wrong` int(20) NOT NULL,
  `score` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`historyid`, `email`, `eid`, `totals`, `correct`, `wrong`, `score`, `date`) VALUES
(36, 'admin@gmail.com', '5eef859fb108a', 2, 1, 1, 1, '2020-06-21 16:08:01');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `optionid` text COLLATE utf8mb4_bin NOT NULL,
  `id` text COLLATE utf8mb4_bin NOT NULL,
  `optn` varchar(5000) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`optionid`, `id`, `optn`) VALUES
('5eef85d089ebb', '5eef85d06ed1d', 'a'),
('5eef85d091005', '5eef85d06ed1d', 'b'),
('5eef85d094a9e', '5eef85d06ed1d', 'c'),
('5eef85d0a11d9', '5eef85d06ed1d', 'd'),
('5eef85d0ca60a', '5eef85d0c9282', 'a'),
('5eef85d0dbb67', '5eef85d0c9282', 'b'),
('5eef85d0e0988', '5eef85d0c9282', 'c'),
('5eef85d0e1158', '5eef85d0c9282', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `eid` text COLLATE utf8mb4_bin NOT NULL,
  `id` text COLLATE utf8mb4_bin NOT NULL,
  `qns` text COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`eid`, `id`, `qns`) VALUES
('5eef859fb108a', '5eef85d06ed1d', 'enter question 1'),
('5eef859fb108a', '5eef85d0c9282', 'question 2');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text COLLATE utf8mb4_bin NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `total` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(100) NOT NULL,
  `time` bigint(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `total`, `correct`, `wrong`, `time`, `date`) VALUES
('5eef859fb108a ', 'write quiz title', 2, 2, 1, 5, '2020-06-21 16:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `rank` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`email`, `rank`) VALUES
('akshay@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `gender` varchar(6) COLLATE utf8mb4_bin NOT NULL,
  `collage` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `collage`, `email`, `mob`, `password`) VALUES
('akshay', 'Male', 'st.peter', 'akshay@gmail.com', 278264289642, 'akshay'),
('sanjjev', 'Male', 'bhavan', 'sanjeev@gmail.com', 3672532536, 'gaurav'),
('tahir', 'Male', 'meethibai', 'tahir@gmail.com', 1531873781, 'tahir');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD UNIQUE KEY `ansid` (`ansid`) USING HASH;

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`historyid`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD UNIQUE KEY `optionid` (`optionid`) USING HASH;

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD UNIQUE KEY `id` (`id`) USING HASH;

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD UNIQUE KEY `eid` (`eid`) USING HASH;

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `login_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
