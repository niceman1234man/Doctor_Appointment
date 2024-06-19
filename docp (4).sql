-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2024 at 06:58 AM
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
-- Database: `docp`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `name` varchar(255) NOT NULL,
  `apo_num` int(255) NOT NULL,
  `doc_name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `apo_date` date NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`name`, `apo_num`, `doc_name`, `title`, `date`, `time`, `apo_date`, `id`) VALUES
('Abusha', 4, 'baki', 'devision', '2024-06-10', '02:00:34', '2024-06-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nic` int(255) NOT NULL,
  `telephone` varchar(13) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `name`, `email`, `nic`, `telephone`, `speciality`, `password`, `id`) VALUES
('doc', 'yonni', 'yihunietarekegn18@gmail.com', 56, '1234566', 'doctor', '123', 17),
('', 'yonni', 'yihunietarekegn18@gmail.com', 5, '1234566', 'doctor', '123', 18),
('', 'yonni', 'yihunietarekegn18@gmail.com', 55, '1234566', 'doctor', '123', 19),
('', 'tsionawit', 'yihunietarekegn18@gmailcom', 1234, '213456', 'doctor', '123', 23),
('', 'tsionawit', 'yihunietarekegn18@gmailcom', 1234, '213456', 'doctor', '123', 24),
('', 'alex', 'yihunietarekegn19@gmail.com', 56, '1232456987', 'doctor', '123', 25);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `NIC` int(15) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`FirstName`, `LastName`, `NIC`, `phone_number`, `email`, `date_of_birth`, `Address`, `password`, `id`) VALUES
('abush', '', 123344, '1234567890', 'abu@gmail.com', '12/23/45', '', '', 1),
('yonni', 'fghm', 0, '56', '2024-06-04', 'yihunietarekegn18@gmail.com', '1243254635', '$2y$10$KFnUVM2jCxVNsCdQGR8Ix.3eHpPLvh/f9GGy4AyFqZUGQgSIR8TLO', 2),
('tsionawit', 'gech', 0, '1234', '2024-05-16', 'yihunietarekegn18@gmailcom', '12445321', '$2y$10$PY6h7LjK1dsKGCpZBM3.hOpaCWL6CZo1S6F7D9tfYR0oyRjKhKQvq', 3);

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `title` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `num` int(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`title`, `dname`, `num`, `date`, `time`, `id`) VALUES
('travel', 'degu', 6, '2024-06-21', '19:12:00', 11),
('travel', 'degu', 6, '2024-06-21', '19:12:00', 17),
('travel', 'degu', 6, '2024-06-21', '19:12:00', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `usertype`) VALUES
('admin', '123', 'a'),
('doc', '123', 'd'),
('pat', '123', 'p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
