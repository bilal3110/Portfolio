-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Muhammad Bilal Aqeel Sheikh', 'info@yahoo.com', '334987730', 'I am a problem solver and a technology enthusiast. My journey into the realm of software development started with an insatiable curiosity for creating seamless digital experiences\r\n\r\n'),
(2, 'Bilal Aqeel', 'info@yahoo.com', '03244050830', 'I am a problem solver and a technology enthusiast. My journey into the realm of software development started with an insatiable curiosity for creating seamless digital experiences\r\n\r\n'),
(3, 'Bilal Aqeel', 'info@yahoo.com', '03244050830', 'I am a problem solver and a technology enthusiast. My journey into the realm of software development started with an insatiable curiosity for creating seamless digital experiences\r\n\r\n'),
(4, 'Bilal Aqeel Sheikh', 'info@yahoo.com', '03244050830', 'I am a problem solver and a technology enthusiast. My journey into the realm of software development started with an insatiable curiosity for creating seamless digital experiences\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
