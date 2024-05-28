-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 26, 2024 at 05:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gegonu`
--

-- --------------------------------------------------------

--
-- Table structure for table `raffle_draw`
--

CREATE TABLE `raffle_draw` (
  `id` int NOT NULL,
  `Fullname` varchar(255) DEFAULT NULL,
  `Age` int DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Bday` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `raffle_draw`
--

INSERT INTO `raffle_draw` (`id`, `Fullname`, `Age`, `Address`, `Gender`, `Bday`, `Email`, `Phone`) VALUES
(2, 'Fred Casinao Cag-ong', 23, 'Talisay Bontoc Southern Leyte', 'Male', '2000-12-13', 'fredcagong21@gmail.com', '0956765453'),
(3, 'Francis Ryan Macuto Rebaldo', 20, 'Himaliko Bontoc', 'Male', '2003-03-28', 'ryanrebaldo@gmail.com', '09787653623'),
(5, 'Francis Ryan Macuto Rebaldo', 23, 'talisay', 'Male', '2333-04-04', 'udyf@gmail.com', '09372637262'),
(8, 'vince', 65, 'talisay', 'Male', '3333-03-31', 'vincen232t@gmail.com', '435333434334'),
(9, 'ratbo', 44, 'talisayon', 'Male', '1212-12-12', 'dg212fn@gmail.com', '2321231'),
(10, 'Michael Gonato', 22, 'Cabatuan Bontoc Southern Leyte', 'Male', '2112-08-09', 'gonato45@gmail.com', '09878376273'),
(11, 'Kristine', 21, 'San Francisco', 'Female', '2004-09-19', 'kristine123@gmail.com', '0912323212'),
(12, 'Herald Gesulga', 22, 'Talisay', 'Male', '2001-12-21', 'herald21@gmail.com', '097900128312'),
(13, 'Adroid1', 200, 'Nerux21', 'Male', '2001-12-12', '1212@gmail.com', '0921321234'),
(14, 'Android10', 291, 'Nexus21', 'Male', '1211-02-21', 'oiwei@gmail.com', '09122182123'),
(15, 'dfbg dfg', 2312, 'gggggg', 'Female', '3444-03-31', 'ghmhgjgmj', '3333333');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `user_type` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `is_admin`, `user_type`, `created_at`) VALUES
(2, 'sheesh', '$2y$10$UG9VhM86ArYptSEpQCrmiOeEm.c3HZ.paRgxD5B.JuWQ6FZsdnLYi', 0, 'user', '2023-12-22 23:28:36'),
(3, 'vincent', '$2y$10$wHcB7FCN3cUGjcddZq7cmOhK.61xbAfB3xzJAqB4vPFOYxRvClC/K', 0, 'user', '2023-12-27 09:55:02'),
(4, 'vincent123', '$2y$10$EtHQxZG2U2kMZ6uwayvfi.gncG6r1x4baq6Ew0Apl7JtwXSJ.Ylte', 0, 'user', '2023-12-27 09:56:06'),
(5, 'sevii', '$2y$10$lTPXCqKaYXhnOdVVS6sfv.kWitO1pP9OdEE3QOUNHJ9olj10p8BPa', 0, 'user', '2024-02-11 17:26:28'),
(6, 'sample', '$2y$10$rObcvM8kVbgBxBA5twvkYexv/iskMqZLskh6DCEGxK4ji7v1L6t9S', 0, 'user', '2024-03-03 12:24:17'),
(7, 'user', '$2y$10$Xg2.79RWRvukt.RH1KWyPeF1yTJUDGK8pHBYDA66ietQbA9uaP0Ce', 0, 'user', '2024-03-31 11:17:54'),
(8, 'cee', '$2y$10$XDKTJyvl3ebJ6oJWT3E37.dSzYou2.z27RY63WnPAdB50yCLaohSa', 0, 'user', '2024-05-18 16:56:58'),
(9, 'user1', '$2y$10$PpcQHMVU2ECxazOf6Fc05ON3DeOHrpTESk3BVcU2Kn/PxM4UW1.0K', 0, 'user', '2024-05-18 18:56:18'),
(10, 'lawrence', '$2y$10$E3Ec9jx2fiXCvoxwFLumgOn4xSfsDF/5kcKOTZnX6YPvr/cLgKu8i', 0, 'user', '2024-05-18 19:08:07'),
(11, 'user1122', '$2y$10$S2868T7.DmIePyDlhgwS3emBzRRX4fUFQ2gZv.5DKXItlTgCKpnaW', 0, 'user', '2024-05-18 20:36:31'),
(12, 'theadmin', '$2y$10$Bc78RgQ2UW9p30B3YjcFH.0.uL6WdEOv6EOCyY7e/lxQmmdnMMciK', 1, 'admin', '2024-05-26 21:48:53'),
(14, 'admin', '$2y$10$K5pYPTCbAAFbPpOwNbY3AeZiP0Agk5nJIRneOlnClpRcEhv/yhbY6', 1, 'admin', '2024-05-26 23:45:10'),
(15, 'RexToledo', '$2y$10$bq.gBHnh1lWG3tR8josJre3I97ACYNeLcgFuIycEhQTqXZTG1KTjq', 1, 'admin', '2024-05-27 00:57:57'),
(16, 'sev', '$2y$10$BP.VB5xGR2m1llGRXixpw.38iX1gKjtRr89zTQxAH75IX9UpkfD5.', 0, 'user', '2024-05-27 01:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raffle_draw`
--
ALTER TABLE `raffle_draw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raffle_draw`
--
ALTER TABLE `raffle_draw`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
