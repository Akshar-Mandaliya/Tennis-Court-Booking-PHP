-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 10:37 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tennis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Akshar', 'Akshar@gmail.com', 'Akshar123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `court_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `booking_payment_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `user_id`, `court_id`, `booking_date`, `start_time`, `end_time`, `booking_payment_details`) VALUES
(161, 14, 64, '2007-05-15', '10:00:00', '10:00:00', 'USING CREDIT CARD PAYMENT'),
(162, 15, 67, '2007-05-15', '10:00:00', '03:00:00', 'CASH BACK'),
(163, 15, 86, '2007-05-15', '10:00:00', '10:00:00', 'Using CASH BACK'),
(164, 15, 88, '2007-05-15', '10:00:00', '10:00:00', 'Akshar'),
(165, 15, 104, '2007-05-15', '10:00:00', '02:00:00', 'USING CREDIT CARD PAYMENT'),
(166, 91, 97, '2007-05-15', '10:00:00', '02:00:00', 'CASH BACK'),
(167, 15, 96, '2007-05-15', '10:00:00', '05:00:00', 'CASH BACK'),
(168, 91, 98, '2007-05-15', '10:00:00', '10:00:00', 'CASH BACK'),
(169, 15, 101, '2007-05-15', '12:00:00', '02:00:00', 'Using Internet '),
(170, 91, 106, '0000-00-00', '12:22:00', '03:00:00', 'CASH BACK'),
(171, 15, 98, '2007-05-15', '01:30:00', '03:30:00', 'Using debit Card.'),
(173, 15, 98, '9999-01-11', '10:59:00', '00:11:00', 'Om'),
(174, 15, 98, '2007-05-15', '10:09:00', '03:40:00', 'Using Internet '),
(175, 15, 115, '2007-05-15', '10:00:00', '02:00:00', 'CASH BACK'),
(176, 15, 98, '2024-07-16', '10:00:00', '11:00:00', 'CASH BACK'),
(177, 15, 98, '2007-05-15', '09:00:00', '01:00:00', 'Om'),
(178, 15, 98, '2024-08-17', '10:00:00', '01:00:00', 'Om');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_name`, `contact_email`, `contact_message`) VALUES
('mandaliya akshar naineshbhai', 'ommandaliya17@gmail.com', 'fvgg'),
('om', 'ommandaliya17@gmail.com', 'Best Website.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `court`
--

CREATE TABLE `court` (
  `court_id` int(10) NOT NULL,
  `court_name` varchar(50) NOT NULL,
  `court_type` varchar(50) NOT NULL,
  `court_location` varchar(50) NOT NULL,
  `court_image` varchar(50) NOT NULL,
  `court_prize` int(20) NOT NULL,
  `court_descripation` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `court`
--

INSERT INTO `court` (`court_id`, `court_name`, `court_type`, `court_location`, `court_image`, `court_prize`, `court_descripation`) VALUES
(96, 'Clay Court', 'Clay Court', 'Ahmadabad', 'img/Clay.jpeg', 2500, 'Best Court..............'),
(97, 'Carpet Court', 'Carpet Court', 'Ahmadabad', 'img/Carpet.jpeg', 3000, 'Poor Court.'),
(98, 'Carpet Court', 'Carpet Court', 'Surat', 'img/CarpetCourt.png', 3500, 'High Level Court.'),
(99, 'Grass Court', 'Grass Court', 'Ahmadabad', 'img/Grass.jpg', 4000, 'Fees High In Court.'),
(100, 'Grass Court', 'Grass Court', 'Surat', 'img/Grass.jpeg', 3800, 'Best Court In City.'),
(101, 'Hard Court', 'Hard Court', 'Ahmadabad', 'img/HardCourt.png', 2800, 'Hard Court is Hard.'),
(102, 'Hard Court', 'Hard Court', 'Surat', 'img/Surat.webp', 3100, 'Best Court in City.'),
(103, 'Clay Court', 'Clay Court', 'Surat', 'img/Ahmadabad.webp', 5200, 'High Price .'),
(104, 'Clay Court', 'Clay Court', 'Vadodara', 'img/Artifical.webp', 6000, 'Best Court.'),
(105, 'Carpet Court', 'Carpet Court', 'Vadodara', 'img/Vadodara.avif', 7000, 'Best Court.'),
(106, 'Grass Court', 'Grass Court', 'Vadodara', 'img/Rajkot.avif', 4100, 'Best Court.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `court_id` int(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review_message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `court_id`, `user_id`, `user_name`, `user_email`, `user_password`, `rating`, `review_message`) VALUES
(15, 57, 20, ' Rahul', 'Rahul@gmail.com', 'PARMAR', 5, 'cvjh'),
(42, 57, 20, ' Rahul', 'Rahul@gmail.com', 'PARMAR', 5, 'cvjh'),
(43, 57, 20, ' Rahul', 'Rahul@gmail.com', 'PARMAR', 5, 'cvjh'),
(45, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(46, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(47, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(48, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(49, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(50, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(51, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(52, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(53, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(54, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(55, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(56, 57, 19, ' Rohit', 'R@gmail.com', 'Sharma', 5, 'Hello Akshar'),
(57, 57, 19, 'Rohit', 'R@gmail.com', 'Hello', 5, 'Hello'),
(58, 57, 19, 'Rohit', 'R@gmail.com', 'Hello', 5, 'Hello'),
(59, 57, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'jebj'),
(60, 57, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'jebj'),
(61, 57, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'jebj'),
(62, 57, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'jebj'),
(63, 57, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'jebj'),
(64, 57, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'AKSHAR'),
(65, 60, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'HELLO'),
(66, 60, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'HELLO'),
(67, 60, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'HELLO'),
(68, 60, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'HELLO'),
(69, 60, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'HELLO'),
(70, 60, 19, 'Rohit', 'R@gmail.com', 'Sharma', 5, 'HELLO'),
(71, 66, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 5, 'gghdg'),
(72, 66, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 5, 'bjjeh'),
(73, 66, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 5, 'hghg'),
(74, 66, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 5, 'hghg'),
(75, 65, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 5, 'Hello'),
(76, 84, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 4, 'Hardik'),
(77, 84, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 2, 'Best Website in india.'),
(78, 84, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 2, 'Hello World'),
(79, 84, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 3, 'Hello'),
(80, 68, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 3, 'vnejh'),
(81, 71, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 5, 'Hello Akshar'),
(82, 71, 14, 'NAMAN', 'NAMAN@gmail.com', 'NAMANPATEL', 1, 'Poor Website'),
(83, 86, 15, 'Akshar', 'Akshar@gmail.com', 'Mandaliya', 5, 'cfghfh'),
(84, 98, 91, 'om', 'ommandaliya17@gmail.com', 'mandaliya', 5, 'Beats'),
(86, 98, 15, 'Akshar', 'Akshar@gmail.com', 'Mandaliya', 3, 'Hello'),
(87, 97, 15, 'Akshar', 'Akshar@gmail.com', 'Mandaliya', 5, 'Best Court'),
(88, 98, 15, 'Akshar', 'Akshar@gmail.com', 'Mandaliya', 5, 'Best Court.'),
(89, 98, 15, 'Akshar', 'Akshar@gmail.com', 'Mandaliya', 5, 'Best...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_gender`) VALUES
(33, 'Gill', 'Gill@gmail.com', 'gillindia', 'Male'),
(34, 'Rinu', 'Riknku@gmail.com', 'gfdgh', 'Male'),
(41, 'jay', 'jay@gmail.com', 'jaypanchal', 'male'),
(47, 'Krish', 'Krsh@gmail.com', 'vbhvhvhce', 'male'),
(53, 'Akshay', 'Akshay@gmail.com', 'pipaliya', 'male'),
(56, 'Prafula', 'Prafula@gmail.com', 'MandaliysPra', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD UNIQUE KEY `booking_id_2` (`booking_id`,`user_id`),
  ADD UNIQUE KEY `booking_id_4` (`booking_id`),
  ADD UNIQUE KEY `booking_id_5` (`booking_id`),
  ADD KEY `booking_id` (`booking_id`,`user_id`),
  ADD KEY `booking_id_3` (`booking_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD UNIQUE KEY `contact_name` (`contact_name`),
  ADD UNIQUE KEY `contact_name_2` (`contact_name`,`contact_email`),
  ADD UNIQUE KEY `contact_name_3` (`contact_name`,`contact_email`,`contact_message`),
  ADD KEY `contact_name_4` (`contact_name`,`contact_email`,`contact_message`);

--
-- Indexes for table `court`
--
ALTER TABLE `court`
  ADD PRIMARY KEY (`court_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD UNIQUE KEY `user_password` (`user_password`),
  ADD KEY `user_gender` (`user_gender`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `court`
--
ALTER TABLE `court`
  MODIFY `court_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
