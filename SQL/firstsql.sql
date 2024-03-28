-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2024 at 12:00 AM
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Moderator');

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
(2, 'Example3', 'examplepass321', 'Example3@gmail.com', '2024-03-06 16:15:31'),
(3, 'LatrellDD', '$2y$12$IN0i173wK2/i.JCplgnq5uvi0A5obsvq9SrGs9fQQyPbcke5UUegS', 'latrelldd@gmail.com', '2024-03-06 17:37:04'),
(4, 'Example1', '$2y$12$/inl.bnb2R.1Pu/creisveQcIeNxIPD0JxqEH7CqXkcDE5lEFnvxm', 'EmailPassword1@gmail.com', '2024-03-12 10:48:39'),
(5, 'admin1', '$2y$12$.SDK4znys4hcpyU36A2wveRRTaxiWtEN4JEIIP5Zg/XF5UoL6OhuW', 'adminemail@gmail.com', '2024-03-28 17:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles_mapping`
--

CREATE TABLE `user_roles_mapping` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_roles_mapping`
--

INSERT INTO `user_roles_mapping` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 2),
(5, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles_mapping`
--
ALTER TABLE `user_roles_mapping`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_roles_mapping`
--
ALTER TABLE `user_roles_mapping`
  ADD CONSTRAINT `user_roles_mapping_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_roles_mapping_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
