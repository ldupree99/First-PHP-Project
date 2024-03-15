-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 02:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT curtime()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pwd`, `email`, `created_at`) VALUES
(1, 'admin', '$2y$12$.vkufQDrn3qRA2IYdmZzhuwh9fgMrWG5Ll22ON8kf/xm5.kUbhofu', 'NEWemail@gmail.com', '2024-03-06 03:10:28'),
(2, 'LatrellD', '$2y$12$GhzidDqAUX/2CUhNL2ZVteyYjEzCaiUDwETdenZPwtTQNTj0blN4G', 'Randomemail@gmail.com', '2024-03-06 16:15:31'),
(3, 'LatrellDD', '$2y$12$IN0i173wK2/i.JCplgnq5uvi0A5obsvq9SrGs9fQQyPbcke5UUegS', 'latrelldd@gmail.com', '2024-03-06 17:37:04'),
(4, 'Example1', '$2y$12$/inl.bnb2R.1Pu/creisveQcIeNxIPD0JxqEH7CqXkcDE5lEFnvxm', 'EmailPassword1@gmail.com', '2024-03-12 10:48:39'),
(5, 'Example2', '$2y$12$co3yvhDBvEdE1dmk8a59L.Nze.f5xJiUy1Exd1Wy3xk5NGGPTmXfa', 'Example2@gmail.com', '2024-03-14 11:25:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
