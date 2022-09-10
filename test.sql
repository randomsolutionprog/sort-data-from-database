-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 03:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `gred`
--

CREATE TABLE `gred` (
  `id` int(200) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gred` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gred`
--

INSERT INTO `gred` (`id`, `name`, `gred`) VALUES
(1, 'Muzaffar', 'A'),
(2, 'Sarveish', 'A'),
(3, 'Eqalzz', 'A'),
(4, 'Raze', 'B'),
(5, 'Binjour', 'D'),
(6, 'Ionjin', 'C'),
(7, 'Man', 'B'),
(8, 'Rina', 'A'),
(9, 'Aina', 'E'),
(10, 'Nas', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gred`
--
ALTER TABLE `gred`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gred`
--
ALTER TABLE `gred`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
