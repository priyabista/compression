-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 09:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `compression`
--

-- --------------------------------------------------------

--
-- Table structure for table `file_upload`
--

CREATE TABLE `file_upload` (
  `id` int(11) NOT NULL,
  `fullname` varchar(256) NOT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `filesize` int(11) DEFAULT NULL,
  `encoded_data` varchar(255) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userid` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `file_upload`
--

INSERT INTO `file_upload` (`id`, `fullname`, `filename`, `filepath`, `filesize`, `encoded_data`, `datetime`, `userid`, `p_id`) VALUES
(4, 'sdfgh', 'MPLab5.pdf', 'uploads/MPLab5.pdf', 224782, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '2023-06-28 14:14:41', 0, 0),
(5, 'cv', 'LinksAndOutputs.docx', 'uploads/LinksAndOutputs.docx', 2270688, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', '2023-06-28 14:58:27', 0, 0),
(16, 'ddrtdgf', 'sample4.txt', 'uploads/sample4.txt', 100333, 'uploads/sample4.txt', '2023-07-03 08:28:30', 0, 0),
(17, 'test', 'sample6.txt', 'uploads/sample6.txt', 201, 'uploads/sample6.txt', '2023-07-03 08:54:10', 0, 0),
(18, 'priya', 'sample4.txt', 'uploads/sample4.txt', 100333, 'uploads/sample4.txt', '2023-07-04 02:18:49', 0, 0),
(19, 'report', 'sample4.txt', 'uploads/sample4.txt', 100333, 'uploads/sample4.txt', '2023-07-04 02:22:51', 4, 0),
(20, 'ghu', 'sample2.txt', 'uploads/sample2.txt', 62595, 'uploads/sample2.txt', '2023-07-04 02:23:43', 4, 10),
(21, 'school', 'sample7.txt', 'uploads/sample7.txt', 5317492, 'uploads/sample7.txt', '2023-07-04 02:45:18', 4, 11),
(22, 'dxfcg', 'sample12.txt', 'uploads/sample12.txt', 349, 'uploads/sample12.txt', '2023-07-04 12:12:04', 4, 14),
(23, 'nb', 'sample10.txt', 'uploads/sample10.txt', 674, 'uploads/sample10.txt', '2023-07-04 13:02:24', 4, 18),
(24, 'fdddddd', 'ghu.txt', 'uploads/ghu.txt', 741, 'uploads/ghu.txt', '2023-07-05 01:34:17', 4, 16);

-- --------------------------------------------------------

--
-- Table structure for table `portals`
--

CREATE TABLE `portals` (
  `p_id` int(11) NOT NULL,
  `portal_name` varchar(255) NOT NULL,
  `portal_limit` int(11) NOT NULL,
  `portal_code` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `portals`
--

INSERT INTO `portals` (`p_id`, `portal_name`, `portal_limit`, `portal_code`, `userid`) VALUES
(10, 'NP(BCA 6th sem)', 30, 'oP#ekJGS', 4),
(11, 'Mid-term report', 15, '5hSYwhuW', 4),
(12, '', 0, '', 0),
(14, 'dsds', 23, '82wDnANj', 4),
(16, 'ppppp', 10, '13zVRnQW', 4),
(18, 'ppp', 10, 'vfRiNznS', 4);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, '', '', '', 'hari', 'hari'),
(2, '', '', '', 'sita', 'sita'),
(3, 'nn', 'bbbb', 'nnn@gmail.com', 'nn', 'bb'),
(4, 'priya', 'bista', 'bistapriya135@gmail.com', 'priya', 'priya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file_upload`
--
ALTER TABLE `file_upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portals`
--
ALTER TABLE `portals`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file_upload`
--
ALTER TABLE `file_upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `portals`
--
ALTER TABLE `portals`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
