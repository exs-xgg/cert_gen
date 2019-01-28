-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 02:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cert_gen`
--

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_code` varchar(2) DEFAULT NULL,
  `region_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region_code`, `region_name`) VALUES
(2, '01', 'REGION I (Ilocos Region)'),
(3, '02', 'REGION II (Cagayan Valley)'),
(4, '03', 'REGION III (Central Luzon)'),
(5, '04', 'REGION IV-A (CALABARZON)'),
(6, '05', 'REGION V (Bicol Region)'),
(7, '06', 'REGION VI (Western Visayas)'),
(8, '07', 'REGION VII (Central Visayas)'),
(9, '08', 'REGION VIII (Eastern Visayas)'),
(10, '09', 'REGION IX (Zamboanga Peninsula)'),
(11, '10', 'REGION X (Nothern Mindanao)'),
(12, '11', 'REGION XI (Davao Region)'),
(13, '12', 'REGION XII (Soccsksargen)'),
(14, '13', 'NCR - National Capital Region'),
(15, '14', 'CAR - Cordillera Administrative Region'),
(16, '15', 'ARMM - Autonomous Region in Muslim Mindanao'),
(17, '16', 'REGION XIII (Caraga)'),
(18, '17', 'REGION IV-B (MIMAROPA)'),
(19, '18', 'NIR - Negros Island Region');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
