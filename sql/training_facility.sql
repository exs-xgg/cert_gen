-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 01:54 PM
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
-- Table structure for table `training_facility`
--

CREATE TABLE `training_facility` (
  `id` int(11) NOT NULL,
  `fac_id` int(11) DEFAULT NULL,
  `logo` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training_facility`
--

INSERT INTO `training_facility` (`id`, `fac_id`, `logo`) VALUES
(1, 1, 'pateros.png'),
(2, 2, 'Dumalneg_Ilocos_Norte.png'),
(3, 194, 'pagudpod.png'),
(4, 3, 'alilem.jpg'),
(5, 4, 'bantay.png'),
(6, 5, 'candon.png'),
(7, 6, 'Caoayan_Ilocos_Sur.png'),
(8, 7, 'Cervantes_Ilocos_Sur.png'),
(9, 9, 'Lidlidda_Ilocos_Sur.png'),
(10, 10, 'Quirino_Ilocos_Sur.png'),
(11, 11, 'salcedo.jpg'),
(12, 8, 'Gregorio_del_Pilar_Ilocos_Sur.png'),
(13, 12, 'san ildefonso.jpg'),
(14, 13, 'Santa_Ilocos_Sur.png'),
(15, 14, 'Santa_Cruz_Ilocos_Sur.png'),
(16, 15, 'Sigay_Ilocos_Sur.png'),
(17, 16, 'Santo_Domingo_Ilocos_Sur.png'),
(18, 17, 'Sugpon_Ilocos_Sur.png'),
(19, 18, 'Suyo_Ilocos_Sur.png'),
(20, 19, 'Seal_of_Vigan.gif'),
(21, 20, 'Ph_seal_la_union_burgos.jpg'),
(22, 21, 'Santol_La_Union.png'),
(23, 22, 'Agno_Pangasinan.png'),
(24, 23, 'Aguilar_Pangasinan.png'),
(25, 24, 'Balungao.png'),
(26, 25, 'Bani_Pangasinan.png'),
(27, 26, 'Bani_Pangasinan.png'),
(28, 27, 'Basista_Pangasinan.png'),
(29, 28, 'Bayambang.png'),
(30, 29, 'Ph_seal_pangasinan_dagupan.png'),
(31, 30, 'Binalonan_Pangasinan.png'),
(32, 31, 'Binmaley_Pangasinan.png'),
(33, 32, 'Binmaley_Pangasinan.png'),
(34, 33, 'Bolinao_Pangasinan.png'),
(35, 34, 'Bolinao_Pangasinan.png'),
(36, 35, 'Bugallon_Pangasinan.png'),
(37, 36, 'Bugallon_Pangasinan.png'),
(38, 37, 'Calasiao_Pangasinan.png'),
(39, 38, 'Calasiao_Pangasinan.png'),
(40, 39, 'Laoac_Pangasinan.png'),
(41, 40, 'Malasiqui_Pangasinan.png'),
(42, 41, 'Malasiqui_Pangasinan.png'),
(43, 42, 'Manaoag_Pangasinan.png'),
(44, 43, 'Mangaldan_Pangasinan.png'),
(45, 44, 'Mangaldan_Pangasinan.png'),
(46, 45, 'Pozorrubio_Pangasinan.png'),
(47, 46, 'Mapandan_Pangasinan.png'),
(48, 47, 'San_Jacinto_Pangasinan.png'),
(49, 48, 'San_Manuel_Pangasinan.png'),
(50, 49, 'San_Nicolas_Pangasinan.png'),
(51, 50, 'San_Quintin_Pangasinan.png'),
(52, 51, 'Santa_Maria_Pangasinan.png'),
(53, 52, 'Sison_Pangasinan.png'),
(54, 53, 'Santa-barbara.png'),
(55, 54, 'Sual_Pangasinan.png'),
(56, 195, 'Tayug_Pangasinan.png'),
(57, 55, 'Urbiztondo_Pangasinan.png'),
(58, 56, 'Ph_seal_Urdaneta,_Pangasinan.png'),
(59, 57, 'Villasis_Pangasinan.png'),
(60, 58, 'Ph_seal_Baguio.png'),
(61, 59, 'Ph_seal_Baguio.png'),
(62, 60, 'Ph_seal_Baguio.png'),
(63, 61, 'Ph_seal_Baguio.png'),
(64, 62, 'Ph_seal_Baguio.png'),
(65, 63, 'Ph_seal_Baguio.png'),
(66, 64, 'Ph_seal_Baguio.png'),
(67, 65, 'Ph_seal_Baguio.png'),
(68, 66, 'Ph_seal_Baguio.png'),
(69, 67, 'Ph_seal_Baguio.png'),
(70, 68, 'Ph_seal_Baguio.png'),
(71, 69, 'Ph_seal_Baguio.png'),
(72, 70, 'Ph_seal_Baguio.png'),
(73, 71, 'Ph_seal_Baguio.png'),
(74, 72, 'Ph_seal_Baguio.png'),
(75, 73, 'Ph_seal_Baguio.png'),
(76, 74, 'Kayapa_Nueva_Vizcaya.png'),
(77, 75, 'dilasag.jpg'),
(78, 76, 'dipaculao.jpg'),
(79, 77, 'aurora.jpg'),
(80, 78, 'Norzagaray_Bulacan.png'),
(81, 79, 'Norzagaray_Bulacan.png'),
(82, 80, 'Norzagaray_Bulacan.png'),
(83, 81, 'Cuyapo_Nueva_Ecija.png'),
(84, 82, 'Cuyapo_Nueva_Ecija.png'),
(85, 83, 'Anao_Tarlac.png'),
(86, 84, 'bamban.png'),
(87, 85, 'bamban.png'),
(88, 86, 'Capas_Tarlac.png'),
(89, 87, 'Capas_Tarlac.png'),
(90, 88, 'Capas_Tarlac.png'),
(91, 89, 'Tarlac_City_Seal.png'),
(92, 90, 'Tarlac_City_Seal.png'),
(93, 91, 'Tarlac_City_Seal.png'),
(94, 92, 'Tarlac_City_Seal.png'),
(95, 93, 'Tarlac_City_Seal.png'),
(96, 94, 'Tarlac_City_Seal.png'),
(97, 95, 'Tarlac_City_Seal.png'),
(98, 96, 'Tarlac_City_Seal.png'),
(99, 97, 'Tarlac_City_Seal.png'),
(100, 98, 'Tarlac_City_Seal.png'),
(101, 99, 'concepcion.jpg'),
(102, 100, 'concepcion.jpg'),
(103, 101, 'concepcion.jpg'),
(104, 102, 'Gerona_Tarlac.png'),
(105, 103, 'Gerona_Tarlac.png'),
(106, 104, 'Gerona_Tarlac.png'),
(107, 105, 'La_Paz_Tarlac.png'),
(108, 106, 'La_Paz_Tarlac.png'),
(109, 107, 'Mayantoc_Tarlac.png'),
(110, 108, 'Moncada_Tarlac.png'),
(111, 109, 'Moncada_Tarlac.png'),
(112, 110, 'Paniqui_Tarlac.png'),
(113, 111, 'Paniqui_Tarlac.png'),
(114, 113, 'ramos.jpg'),
(115, 114, 'San_Clemente_Tarlac.png'),
(116, 115, 'Tarlac_City_Seal.png'),
(117, 116, 'San_Manuel_Tarlac.png'),
(118, 117, 'Santa_Ignacia_Tarlac.png'),
(119, 118, 'Victoria_Tarlac.png'),
(120, 119, 'Victoria_Tarlac.png'),
(121, 120, 'Tanza_Cavite.png'),
(122, 121, 'seal_laguna_mabitac.png'),
(123, 122, 'Ph_seal_laguna_siniloan.jpg'),
(124, 122, 'Ph_seal_laguna_siniloan.jpg'),
(125, 123, 'Jomalig,_Quezon_Official_Seal.png'),
(126, 124, 'Polillo_Quezon.png'),
(127, 125, 'real qc.png'),
(128, 126, 'Official_Seal_of_San_Antonio,_Quezon.png'),
(129, 127, 'Sariaya,_Quezon_Seal.png'),
(130, 128, 'Official_Seal_of_Tiaong.png'),
(131, 129, 'Abra_de_Ilog_Occidental_Mindoro.png'),
(132, 130, 'Ph_seal_San_Jose,_Occidental_Mindoro.svg'),
(136, 131, 'BROOKESPOINT-LOGO-HEADER.png'),
(137, 132, 'narra.jpg'),
(138, 133, 'Ph_seal_puertoprincesa.png'),
(139, 134, 'roxas_palawan.jpg'),
(140, 135, 'Cajidiocan_Romblon.png'),
(141, 136, 'Magdiwang_Romblon.png'),
(142, 137, 'San_Fernando_Romblon.png'),
(143, 138, 'Province-of-Albay-Official-Seal-1.png'),
(144, 139, 'Minalabac_Camarines_Sur.png'),
(145, 140, 'San_Fernando_Camarines_Sur.png'),
(146, 141, 'tinambac-seal-300x300.png'),
(147, 142, 'tinambac-seal-300x300.png'),
(148, 143, 'cataingan_masbaste.png'),
(149, 144, 'mandaon.jpg'),
(150, 145, 'cataingan_masbaste.png'),
(151, 146, 'milagros.jpg'),
(152, 147, 'Pilar_Sorsogon.png'),
(153, 148, 'dao.png'),
(154, 150, 'Gamay_Northern_Samar.png'),
(155, 151, 'Ph_seal_northern_samar.png'),
(156, 152, 'Ph_seal_northern_samar.png'),
(157, 153, 'Daram-Logo.png'),
(158, 154, 'gandara.jpg'),
(159, 155, 'matugunao.jpg'),
(160, 156, 'motiong.jpg'),
(161, 157, 'pagsanghan.jpg'),
(162, 158, 'Ph_seal_northern_samar.png'),
(163, 159, 'San_Sebastian_Samar.png'),
(164, 160, 'samar.png'),
(165, 161, 'villareal.jpg'),
(166, 162, 'gutalac.jpg'),
(167, 163, 'leon_b_postigo.jpeg'),
(168, 164, 'Municipality_seal_of_liloy.png'),
(169, 165, 'Provincial_seal_of_Zamboanga_del_Norte,_Philippines.png'),
(170, 166, 'Provincial_seal_of_Zamboanga_del_Norte,_Philippines.png'),
(171, 167, 'Sindanganseal_1.jpg'),
(172, 168, 'bayog.jpg'),
(173, 193, 'Ph_seal_zamboanga_del_sur.png'),
(174, 169, 'guipos.jpg'),
(175, 170, 'Ph_seal_zamboanga_del_sur.png'),
(176, 171, 'Margosatubig_seal.png'),
(177, 172, 'pitogo.jpg'),
(178, 173, 'san_miguel.png'),
(179, 174, 'Ph_seal_Bayog_zamboanga_del_sur.png'),
(180, 175, 'Ph_seal_Bayog_zamboanga_del_sur.png'),
(181, 176, 'Ph_seal_Bayog_zamboanga_del_sur.png'),
(182, 177, 'Imelda_Zamboanga_Sibugay.png'),
(183, 178, 'ipil.png'),
(184, 179, 'Ph_seal_Naga_Zamboanga_Sibugay.png'),
(185, 180, 'Ph_seal_Naga_Zamboanga_Sibugay.png'),
(186, 181, 'Ph_seal_Naga_Zamboanga_Sibugay.png'),
(187, 182, 'Tungawan_logo_seal(14).png'),
(188, 183, 'bacolod.png'),
(189, 184, 'Lanao_del_Norte_Seal.png'),
(190, 185, 'del-carmen.gif'),
(191, 186, 'Ph_seal_surigao_del_sur.png'),
(192, 187, 'Cortes_Surigao_del_Sur.png'),
(193, 188, 'hinatuan.png'),
(194, 189, 'Tandag_Logo_02-2.jpg'),
(195, 190, 'Ph_seal_maguindanao.png'),
(196, 191, 'n_upi.png'),
(197, 192, 'Ph_seal_Tawi-Tawi.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `training_facility`
--
ALTER TABLE `training_facility`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `training_facility`
--
ALTER TABLE `training_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
