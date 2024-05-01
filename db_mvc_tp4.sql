-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 10.50 PM
-- Server version: 10.4.22-MariaDB
-- PHP version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc_tp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `name_company` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `name_company`) VALUES
(1, 'Telkom Indonesia'),
(2, 'GOJEK'),
(3, 'Google Indonesia'),
(4, 'Traveloka'),
(5, 'Tokopedia'),
(6, 'Sea Group'),
(7, 'Facebook Indonesia (Meta)');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `phone` varchar(225) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `id_company` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `join_date`, `job_id`, `id_company`) VALUES
(1, 'Bolip', 'bolip@gmail.com', '081564821036', '2025-04-12', 2, 3),
(2, 'Asgara', 'gara@gmail.edu', '081222068839', '2023-05-08', 4, 1),
(3, 'Razendra', 'razendra@gmail.edu', '0812294529', '2022-05-24', 7, 5),
(4, 'Youn Jung', 'gyj@gmail.edu', '08175468839', '2025-11-01', 1, 3),
(5, 'Vadella', 'vadell@gmail.edu', '08546875232', '2021-09-17', 3, 2),
(6, 'Vivian', 'vian@gmail.edu', '08756452125', '2023-01-06', 6, 4),
(7, 'Azaya', 'azaya@gmail.edu', '08965423158', '2025-05-24', 5, 6),
(8, 'Jarvis', 'rdj@gmail.edu', '081696254875', '2022-12-10', 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int(11) NOT NULL,
  `nama_job` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `nama_job`) VALUES
(1, 'Software Developer'),
(2, 'Website Developer'),
(3, 'Mobile Apps Developer'),
(4, 'UI/UX Designer'),
(5, 'Database Administrator'),
(6, 'Security Enginer'),
(7, 'System Analyst'),
(8, 'Data Scientist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `id_company` (`id_company`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job` (`id_job`),
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;