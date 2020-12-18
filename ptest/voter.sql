-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2020 at 05:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votersystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `id` int(5) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `addr` varchar(63) NOT NULL,
  `city` varchar(30) NOT NULL,
  `party` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`id`, `firstname`, `lastname`, `addr`, `city`, `party`, `dob`) VALUES
(1, 'Jane', 'Doe', '456 Main St', 'Atlanta', 'Democrat', '10-13-1986'),
(2, 'John', 'Doe', '123 Maple St', 'Atlanta', 'Republican', '05-23-1963'),
(3, 'Jeff', 'Scott', '250 W. Elm St', 'Atlanta', 'Republican', '08-06-1991'),
(4, 'Sam', 'Young', '567 Appletree Rd', 'Sandy Springs', 'Democrat', '11-14-1997'),
(5, 'Emmett', 'Brown', '1640 Riverside Dr', 'Hill Valley', 'Democrat', '12-18-1914'),
(6, 'Nancy', 'Botwin', '28665 Chaucer Pl', 'Agrestic', 'Democrat', '08-02-1964'),
(7, 'Walter', 'White', '308 Negra Orroyo Ln', 'Albuquerque', 'Republican', '09-07-1958'),
(8, 'Patrick', 'Bateman', '55 W. 81st St', 'New York', 'Republican', '02-25-1962'),
(9, 'Tim', 'Apple', '1 Infinite Loop', 'Cupertino', 'Democrat', '11-01-1960');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
