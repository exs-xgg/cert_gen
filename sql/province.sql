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
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `province_code` varchar(4) DEFAULT NULL,
  `region_code` varchar(2) DEFAULT NULL,
  `province_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province_code`, `region_code`, `province_name`) VALUES
(1, '0128', '01', 'ILOCOS NORTE'),
(2, '0129', '01', 'ILOCOS SUR'),
(3, '0133', '01', 'LA UNION'),
(4, '0155', '01', 'PANGASINAN'),
(5, '0215', '02', 'CAGAYAN'),
(6, '0231', '02', 'ISABELA'),
(7, '0250', '02', 'NUEVA VIZCAYA'),
(8, '0257', '02', 'QUIRINO'),
(9, '0308', '03', 'BATAAN'),
(10, '0314', '03', 'BULACAN'),
(11, '0349', '03', 'NUEVA ECIJA'),
(12, '0354', '03', 'PAMPANGA'),
(13, '0369', '03', 'TARLAC'),
(14, '0371', '03', 'ZAMBALES'),
(15, '0377', '03', 'AURORA'),
(16, '0410', '04', 'BATANGAS'),
(17, '0421', '04', 'CAVITE'),
(18, '0434', '04', 'LAGUNA'),
(19, '0456', '04', 'QUEZON'),
(20, '0458', '04', 'RIZAL'),
(21, '0505', '05', 'ALBAY'),
(22, '0516', '05', 'CAMARINES NORTE'),
(23, '0517', '05', 'CAMARINES SUR'),
(24, '0520', '05', 'CATANDUANES'),
(25, '0541', '05', 'MASBATE'),
(26, '0562', '05', 'SORSOGON'),
(27, '0604', '06', 'AKLAN'),
(28, '0606', '06', 'ANTIQUE'),
(29, '0619', '06', 'CAPIZ'),
(30, '0630', '06', 'ILOILO'),
(31, '0679', '06', 'GUIMARAS'),
(32, '0712', '07', 'BOHOL'),
(33, '0722', '07', 'CEBU'),
(34, '0761', '07', 'SIQUIJOR'),
(35, '0826', '08', 'EASTERN SAMAR'),
(36, '0837', '08', 'LEYTE'),
(37, '0848', '08', 'NORTHERN SAMAR'),
(38, '0860', '08', 'WESTERN SAMAR'),
(39, '0864', '08', 'SOUTHERN LEYTE'),
(40, '0878', '08', 'BILIRAN'),
(41, '0972', '09', 'ZAMBOANGA DEL NORTE'),
(42, '0973', '09', 'ZAMBOANGA DEL SUR'),
(43, '0983', '09', 'ZAMBOANGA SIBUGAY'),
(44, '0997', '09', 'CITY OF ISABELA'),
(45, '1013', '10', 'BUKIDNON'),
(46, '1018', '10', 'CAMIGUIN'),
(47, '1035', '10', 'LANAO DEL NORTE'),
(48, '1042', '10', 'MISAMIS OCCIDENTAL'),
(49, '1043', '10', 'MISAMIS ORIENTAL'),
(50, '1123', '11', 'DAVAO DEL NORTE'),
(51, '1124', '11', 'DAVAO DEL SUR'),
(52, '1125', '11', 'DAVAO ORIENTAL'),
(53, '1182', '11', 'COMPOSTELA VALLEY'),
(54, '1247', '12', 'COTABATO'),
(55, '1263', '12', 'SOUTH COTABATO'),
(56, '1265', '12', 'SULTAN KUDARAT'),
(57, '1280', '12', 'SARANGANI'),
(58, '1298', '12', 'CITY OF COTABATO'),
(59, '1339', '13', 'MANILA, NCR, FIRST DISTRICT'),
(60, '1374', '13', 'NCR SECOND DISTRICT'),
(61, '1375', '13', 'NCR THIRD DISTRICT'),
(62, '1376', '13', 'NCR FOURTH DISTRICT'),
(63, '1401', '14', 'ABRA'),
(64, '1411', '14', 'BENGUET'),
(65, '1427', '14', 'IFUGAO'),
(66, '1432', '14', 'KALINGA'),
(67, '1444', '14', 'MOUNTAIN PROVINCE'),
(68, '1481', '14', 'APAYAO'),
(69, '1507', '15', 'BASILAN'),
(70, '1536', '15', 'LANAO DEL SUR'),
(71, '1538', '15', 'MAGUINDANAO'),
(72, '1566', '15', 'SULU'),
(73, '1570', '15', 'TAWI-TAWI'),
(74, '1584', '15', 'SHARIFF KABUNSUAN'),
(75, '1602', '16', 'AGUSAN DEL NORTE'),
(76, '1603', '16', 'AGUSAN DEL SUR'),
(77, '1667', '16', 'SURIGAO DEL NORTE'),
(78, '1668', '16', 'SURIGAO DEL SUR'),
(79, '1685', '16', 'DINAGAT ISLANDS'),
(80, '1740', '17', 'MARINDUQUE'),
(81, '1751', '17', 'OCCIDENTAL MINDORO'),
(82, '1752', '17', 'ORIENTAL MINDORO'),
(83, '1753', '17', 'PALAWAN'),
(84, '1759', '17', 'ROMBLON'),
(85, '1845', '18', 'NEGROS OCCIDENTAL'),
(86, '1846', '18', 'NEGROS ORIENTAL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
