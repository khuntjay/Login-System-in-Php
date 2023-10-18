-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 10:28 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `nieosoft`
--

CREATE TABLE `nieosoft` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `address` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nieosoft`
--

INSERT INTO `nieosoft` (`id`, `email`, `password`, `gender`, `address`, `datetime`) VALUES
(7, 'khuntjay20@gmail.com', '789', 'm', 'jay', '2020-09-14 22:15:24'),
(10, 'jay@123.com', '456', 'm', 'jay', '2020-10-16 12:58:32'),
(14, '', '', '', '', '2021-07-20 18:57:14'),
(15, 'khuntjay20@gmail.com', '789', 'm', 'jay', '2021-07-20 18:57:39'),
(16, '', '', '', '', '2021-07-20 18:57:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nieosoft`
--
ALTER TABLE `nieosoft`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nieosoft`
--
ALTER TABLE `nieosoft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
