-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2024 at 04:42 PM
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
-- Database: `app_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `amit`
--

CREATE TABLE `amit` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `creates_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `amit`
--

INSERT INTO `amit` (`id`, `name`, `email`, `password`, `creates_date`, `updated_date`) VALUES
(1, 'aman', 'amit8438@gmail.com', '87878787', '2024-01-20 20:58:46', '2024-01-20 20:58:46'),
(4, 'kkkk', 'gk@email.com', 'gghhggh', '2024-01-20 21:34:59', '2024-01-20 21:34:59'),
(15, 'pk', 'pk@gmail.com', '4754656', '2024-01-22 13:25:24', '2024-01-22 13:25:24'),
(16, 'nhkfef', 'officialankit1998@gmail.com', '89345734985', '2024-01-22 14:14:47', '2024-01-22 14:14:47'),
(17, 'Amit Yadav', 'amityadav@gmail.com', '87878787', '2024-01-22 15:38:50', '2024-01-22 15:38:50'),
(18, 'klkl', 'amityddadav@gmail.com', '897435734895', '2024-01-22 15:55:56', '2024-01-22 15:55:56'),
(19, 'Shree Ram', 'ram@gmail.com', '9840958', '2024-01-22 20:58:18', '2024-01-22 20:58:18'),
(20, 'KKK', 'ankityadavdc@gmail.com', '988989', '2024-01-23 15:52:56', '2024-01-23 15:52:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amit`
--
ALTER TABLE `amit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amit`
--
ALTER TABLE `amit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
