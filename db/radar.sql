-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 01:28 PM
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
-- Database: `radar`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `province` varchar(50) NOT NULL,
  `agreed_terms` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `phone`, `age`, `gender`, `province`, `agreed_terms`) VALUES
(101, 'Andi Pratama', 'andi.pratama@example.com', '081234567891', 22, 'male', 'Jawa Barat', 1),
(102, 'Siti Nurhaliza', 'siti.nurhaliza@example.com', '081245678902', 24, 'female', 'Jawa Tengah', 1),
(103, 'Budi Santoso', 'budi.santoso@example.com', '081256789013', 27, 'male', 'Jawa Timur', 1),
(104, 'Dewi Lestari', 'dewi.lestari@example.com', '081267890124', 29, 'female', 'Sumatera Barat', 1),
(105, 'Rahmat Hidayat', 'rahmat.hidayat@example.com', '081278901235', 31, 'male', 'Kalimantan Timur', 1),
(106, 'Ayu Lestari', 'ayu.lestari@example.com', '081234567891', 23, 'female', 'Jawa Tengah', 1),
(107, 'Rizky Pratama', 'rizky.pratama@example.com', '081234567892', 30, 'male', 'DKI Jakarta', 1),
(108, 'Indah Permata', 'indah.permata@example.com', '081234567893', 26, 'female', 'Bali', 1),
(109, 'Dimas Hidayat', 'dimas.hidayat@example.com', '081234567894', 19, 'male', 'Sumatera Barat', 1),
(110, 'Siti Nurhaliza', 'siti.nurhaliza@example.com', '081234567895', 22, 'female', 'Yogyakarta', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
