-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 03:21 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

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

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `login_id` int(50) NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`login_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '151593');

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
(1, 'admin', 'admin@gmail.com', 'admin123');

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
('5eef859fb108a', '5eef85d0c9282', '5eef85d0e1158'),
('60757d1f42fb5', '60757d3e5e6b8', '60757d3e610fa'),
('60757d1f42fb5', '60757d3e63a1f', '60757d3e650e1');

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
(23, 'Shrey', 'nigam01shrey@gmail.com', 'new', 'nice work', '2021-02-10 15:09:01');

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
(36, 'admin@gmail.com', '5eef859fb108a', 2, 1, 1, 1, '2020-06-21 16:08:01'),
(38, 'shrey@gmail.com', '5eef859fb108a', 2, 0, 0, 0, '2020-10-13 06:19:14'),
(39, 'xyz@gmail.com', '5eef859fb108a', 2, 0, 2, -2, '2020-12-12 06:58:14'),
(40, 'abc@gmail.com', '5eef859fb108a', 2, 0, 2, -2, '2020-12-30 04:40:33'),
(41, 'qwe@gmail.com', '5eef859fb108a', 2, 0, 2, -2, '2020-12-30 04:48:15'),
(43, 'abc@gmail.com', '60757d1f42fb5', 2, 2, 0, 2, '2021-04-13 11:26:57');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(50) NOT NULL,
  `meeting_title` varchar(600) NOT NULL,
  `time` varchar(900) NOT NULL,
  `name` varchar(600) NOT NULL,
  `link` varchar(2000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `meeting_title`, `time`, `name`, `link`, `date`) VALUES
(11, 'new update', '29-Apr-2021 5:00 p.m', 'shrey', 'https://jitsi.org/jitsi-meet/', '2021-05-08 09:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(50) NOT NULL,
  `notification_title` varchar(600) NOT NULL,
  `details` varchar(900) NOT NULL,
  `name` varchar(600) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `notification_title`, `details`, `name`, `date`) VALUES
(28, 'new', 'work under progress', 'shrey', '2021-05-08 06:37:41');

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
('5eef85d0e1158', '5eef85d0c9282', 'd'),
('60757d3e5f591', '60757d3e5e6b8', '1'),
('60757d3e610fa', '60757d3e5e6b8', '2'),
('60757d3e61ac4', '60757d3e5e6b8', '3'),
('60757d3e61faa', '60757d3e5e6b8', '4'),
('60757d3e63e16', '60757d3e63a1f', '1'),
('60757d3e64195', '60757d3e63a1f', '2'),
('60757d3e64cd7', '60757d3e63a1f', '3'),
('60757d3e650e1', '60757d3e63a1f', '4');

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
('5eef859fb108a', '5eef85d0c9282', 'question 2'),
('60757d1f42fb5', '60757d3e5e6b8', '1+1'),
('60757d1f42fb5', '60757d3e63a1f', '2+2');

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
('5eef859fb108a ', 'write quiz title', 2, 2, 1, 5, '2020-06-21 16:06:55'),
('5fd46cccc00e3 ', 'avc', 5, 2, 1, 1, '2020-12-12 07:10:04'),
('60757d1f42fb5 ', 'addition', 2, 1, 0, 2, '2021-04-13 11:14:39');

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
('abc@gmail.com', 0),
('akshay@gmail.com', 1),
('qwe@gmail.com', -2),
('shrey@gmail.com', 0),
('xyz@gmail.com', -2);

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
('abc', 'Male', 'juet', 'abc@gmail.com', 55995, 'abc123'),
('qwe', 'Male', 'juet', 'qwe@gmail.com', 4858648, 'qwe123'),
('shrey', 'Male', 'juet', 'shrey@gmail.com', 278264289642, 'shrey123'),
('xyz', 'Male', 'jp', 'xyz@gmail.com', 84575, 'xyz123');

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
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`) USING BTREE;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `historyid` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
