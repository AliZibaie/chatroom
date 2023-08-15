-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql:3306
-- Generation Time: Aug 15, 2023 at 12:23 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `user_id` int DEFAULT NULL,
  `message` text CHARACTER SET utf32 COLLATE utf32_general_ci,
  `includes_image` varchar(1) DEFAULT NULL,
  `id` int NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `image_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`user_id`, `message`, `includes_image`, `id`, `date`, `image_name`) VALUES
(2, 'luck', '', 3, '2023-08-15 11:09:31', 'hello'),
(2, 'hi', '', 4, '2023-08-15 11:09:35', 'luck'),
(1, 'hello', '', 5, '2023-08-15 11:09:50', 'hi'),
(1, 'ascacasc', '', 7, '2023-08-15 11:12:41', 'hi'),
(1, 'hsfwd', '', 8, '2023-08-15 11:12:47', 'hi'),
(1, 'سشزسشسشز', '', 9, '2023-08-15 11:15:13', 'hi'),
(1, 'luck', '', 10, '2023-08-15 11:16:01', 'hi'),
(1, 'ascacasc', '', 11, '2023-08-15 11:22:33', 'hi'),
(1, 'luck', '', 12, '2023-08-15 11:23:03', 'hi'),
(1, 'سشزسشسشز', '', 13, '2023-08-15 11:24:44', 'hi'),
(1, 'luck', '', 14, '2023-08-15 11:26:30', 'hi'),
(1, 'ascacasc', '', 15, '2023-08-15 11:44:38', 'hi'),
(1, 'hsfwd', '', 16, '2023-08-15 11:45:52', 'hi'),
(1, 'سشزسشسشز', '', 17, '2023-08-15 11:46:35', 'hi'),
(1, 'hi', '', 18, '2023-08-15 11:47:38', 'hi'),
(2, 'hsfwd', '', 19, '2023-08-15 11:49:57', 'hi'),
(2, 'hi', '', 20, '2023-08-15 11:50:01', 'hsfwd'),
(3, 'hsfwd', '', 21, '2023-08-15 11:50:16', 'hi'),
(3, 'luck', '', 22, '2023-08-15 11:50:22', 'hsfwd'),
(1, 'hi', '', 23, '2023-08-15 11:50:38', 'luck'),
(4, 'hi', '', 24, '2023-08-15 11:51:06', 'hi'),
(3, 'hi', '', 25, '2023-08-15 12:19:57', 'hi'),
(3, 'hello', '', 26, '2023-08-15 12:20:02', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `chats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
