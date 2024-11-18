-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2024 at 12:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_services`
--

CREATE TABLE `add_services` (
  `s_id` int(255) NOT NULL,
  `s_name` varchar(1000) NOT NULL,
  `s_cost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_services`
--

INSERT INTO `add_services` (`s_id`, `s_name`, `s_cost`) VALUES
(1, 'trimming', 700),
(2, 'hair wash', 1200);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_phone` int(11) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_services` int(255) NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`a_id`, `a_name`, `a_phone`, `a_email`, `a_services`, `a_date`, `a_time`) VALUES
(2, 'sufiyan', 321387196, 'kabeer.20079@gmail.com', 2, '2024-09-11', '00:00:00.000000'),
(3, 'shayan', 948340734, 'kabeer.20079@gmail.com', 4, '2024-09-11', '15:57:00.000000'),
(4, 'ameer hamza', 2147483647, 'hadibaloch33220@gmail', 4, '2024-09-11', '16:09:00.000000'),
(5, 'sufiyan', 2147483647, 'btsr66274@gmail.com', 2, '2024-09-12', '16:19:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `feilds`
--

CREATE TABLE `feilds` (
  `f_id` int(11) NOT NULL,
  `aservice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feilds`
--

INSERT INTO `feilds` (`f_id`, `aservice`) VALUES
(1, 'Hair cut'),
(2, 'Beard Trim'),
(3, 'Mens Shave'),
(4, 'Hair Dyeing'),
(5, 'Mustache'),
(6, 'stacking');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_descrip` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_services`
--
ALTER TABLE `add_services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `feilds`
--
ALTER TABLE `feilds`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_services`
--
ALTER TABLE `add_services`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `feilds`
--
ALTER TABLE `feilds`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
