-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 10:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_compression`
--

-- --------------------------------------------------------

--
-- Table structure for table `compress_data`
--

CREATE TABLE `compress_data` (
  `id` int(11) NOT NULL,
  `file_name` varchar(256) NOT NULL,
  `file_url` varchar(500) NOT NULL,
  `file_size` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `compress_data`
--

INSERT INTO `compress_data` (`id`, `file_name`, `file_url`, `file_size`, `user_id`, `status`, `date`) VALUES
(6, 'hello', 'uploads/hello', '', 4, 'COMPRESSED', '2023-07-14 01:22:51'),
(15, '1688977492_dilbahadurchheteri_decompressed (1).txt', 'uploads/1688977492_dilbahadurchheteri_decompressed (1).txt', '', 5, 'COMPRESSED', '2023-07-14 01:37:52'),
(16, 'Password 123.txt', 'uploads/Password 123.txt', '', 5, 'COMPRESSED', '2023-07-14 01:38:36'),
(17, 'Password 123_compressed (21)_compressed.txt', 'uploads/Password 123_compressed (21)_compressed.txt', '', 0, 'DE-COMPRESSED', '2023-07-14 02:02:50'),
(18, 'Password 123_compressed (36).txt', 'uploads/Password 123_compressed (36).txt', '', 0, 'DE-COMPRESSED', '2023-07-14 02:04:36'),
(19, 'imp_compressed.txt', 'uploads/imp_compressed.txt', '', 5, 'DE-COMPRESSED', '2023-07-14 02:05:22'),
(20, 'Password 123.txt', 'uploads/Password 123.txt', '', 5, 'COMPRESSED', '2023-07-14 02:07:24'),
(21, 'Password 123.txt', 'uploads/Password 123.txt', '59', 5, 'COMPRESSED', '2023-07-14 02:17:10'),
(22, 'Password 123.txt', 'uploads/Password 123.txt', '59', 5, 'COMPRESSED', '2023-07-14 02:19:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(256) NOT NULL,
  `lastname` varchar(256) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, '', '', '', 'hari', 'hari'),
(2, '', '', '', 'sita', 'sita'),
(3, 'nn', 'bbbb', 'nnn@gmail.com', 'nn', 'bb'),
(4, 'priya', 'bista', 'bistapriya135@gmail.com', 'priya', 'priya'),
(5, 'dil', 'chhetri', 'sandesh@gmail.com', 'sandesh', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compress_data`
--
ALTER TABLE `compress_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compress_data`
--
ALTER TABLE `compress_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
