-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 12:08 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_phone` int(11) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_services` varchar(255) NOT NULL,
  `a_date` date NOT NULL,
  `a_time` time(6) NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`a_id`, `a_name`, `a_phone`, `a_email`, `a_services`, `a_date`, `a_time`, `status`) VALUES
(2, 'sufiyan', 321387196, 'kabeer.20079@gmail.com', '2', '2024-09-11', '00:00:00.000000', 'Accepted'),
(3, 'shayan', 948340734, 'kabeer.20079@gmail.com', '4', '2024-09-11', '15:57:00.000000', 'Rejected'),
(7, 'azan', 313649876, 'azan@gmail.com', '1', '2024-08-22', '21:11:00.000000', 'Accepted'),
(16, 'ALIZA', 342556758, 'aliza@gmail.com', '4', '2024-09-17', '21:03:00.000000', 'Accepted'),
(20, 'azan', 313649876, 'aliyan@gmail.com', '1', '2024-09-06', '20:03:00.000000', 'Accepted'),
(21, 'azan', 313649876, 'khan1@gmail.com', '4', '2024-09-12', '00:06:00.000000', 'Rejected'),
(22, 'azan', 313649876, 'aliyan@gmail.com', '2', '2024-09-14', '21:57:00.000000', 'Accepted'),
(23, 'azan', 313649876, 'aaa@gmail.com', '1', '2024-09-04', '21:01:00.000000', 'Accepted'),
(24, 'George Harry Leo', 313649876, 'khan1@gmail.com', '3', '2024-09-12', '20:15:00.000000', 'Accepted');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `rating`) VALUES
(1, 'Face Mask', 'Freeman Renewing Cucumber Peel-Off Gel Facial Mask, Face Mask Refreshes Skin, Aloe', 14.99, 'facial.img2.png', 4.50),
(7, 'DOVE MEN', 'DOVE MEN + CARE Shampoo Charcoal + Clay 3 Count For Healthy-', 34.00, 'img.facial3.png', 5.00),
(10, 'Braun Series ', 'Braun Series 7 7020s Flex Electric Razor for Men with Precision Trimmer,', 23.00, 'product1.png', 5.00),
(11, 'The Face Shop', 'The Face Shop The Gentle for Men Anti-Aging Skincare Gift Set', 23.00, 'product.png', 5.00),
(13, 'The Face Shop', 'The Face Shop The Gentle for Men Anti-Aging Skincare Gift Set', 23.00, 'product.png', 5.00),
(14, 'Cream for Men', 'The Art of Shaving Shaving Cream for Men', 34.00, 'product.2.png', 5.00),
(15, 'AcneFree Acne Clearing Mask', 'AcneFree Acne Clearing Mask, 3.5% Sulfur Acne Treatment,', 20.00, 'product3.png', 4.50),
(16, 'Nioxin System Kit,', 'Nioxin System Kit, Strengthening & Thickening Hair Treatment', 23.00, 'product4.png', 5.00);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `description`, `price`, `image`) VALUES
(6, 'Haircut', '\"Hair dreams come true here\" \r\n\"Snip into something fabulous with us\" \r\n\"Trust us to transform your tresses\" \r\n\"Your hair is our canvas', 29.00, './uploads/66f03b8822f4a.png'),
(7, 'Beard Trim', 'They like to keep things simple and to the point,\r\n which can be seen in their barber slogans, such as,\r\n“cuts, shaves, trims\r\n', 35.00, './uploads/66f03bef5d63c.png'),
(8, 'Men Shaves', 'Just leave the beard to us. We\'ll get it done right. Bearded or buzzed, come to us!\r\nIt’s just better here', 23.00, './uploads/66f03c2d7c1d2.png'),
(9, 'Hair Dyeing', 'Beautiful hair in professional hands. The cure for bad hair days! A Reason To Dye. Life is too short to have boring hair!', 19.00, './uploads/66f03cd04522d.png'),
(10, 'Mustache', 'A good mustache makes a man for many reasons. In wrestling, my mustache made me look more like a villain. A', 15.00, './uploads/66f03d114bc18.png'),
(11, 'Stacking', 'Keep it full and thick for a manly look that says, “I\'m confident enough with my style to not really care what you think.”', 39.00, './uploads/66f03d55b88f4.png');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `image_path`, `facebook_url`, `twitter_url`, `instagram_url`) VALUES
(5, 'Harry Charlton', 'Hair dying Specialist', 'uploads/image3.jpg', '', '', ''),
(10, 'HARRY JHON', 'Men Shaves Specialist ', 'uploads/image2.jpg', '', '', ''),
(11, 'Ebenezer Jack', 'Hair dyeing SpecialisT', 'uploads/image6.jpg', '', '', ''),
(15, 'George Harry Leo', 'Stacking Specialist ', 'uploads/image7.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`) VALUES
(2, 'USER', 'sufiyan@gmail.com', 'admin1234'),
(9, 'sufiyan', 'aaa@gmail.com', '$2y$10$2w5.PFyImZ4DWNrV5u0oSe1VFN7jsh539D9V5TFHnaLlA7QaN5H0W'),
(14, 'sufiyan', 'sk2496033@gmail.com', '$2y$10$iyg0MWi7gP92SwBdpbyDa.aamvlEsDUuJjZXw77att8qaBvHhXzGq'),
(15, 'sufiyan', 'admin@gmail.com', '$2y$10$JFQwpPS8Qwd5A0HLwGFE4Oc4.J/Yiug05jMx3BEuZpuMIh8bmu/J6'),
(16, 'sufiyan', 'ameer@gmail.com', '$2y$10$mFBAmdbqft0TdSnpxSPJGuqiq/0MN3o7pLmQcz6L73Zw8IorD6pSe');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `feilds`
--
ALTER TABLE `feilds`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
