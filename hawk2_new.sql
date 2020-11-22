-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 06:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hawk2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(0, 1, 'none', 'none@gmail.com', NULL, 'admin', NULL, NULL, NULL),
(1, 1, 'Shahrukh', 'shahrukh.khan7991@gmail.com', NULL, '$2y$10$tpULLyFZfGD8UH9ILsqWQeRRoH1O3ZGxwbMIAZeoQUkv8o9B3nCaS', 'BSoyADY0yqmhpi0rNXllVElHakxB5pfX7HBIjs3mAV6DNJ5mBhzKX4622dJ2', NULL, NULL),
(3, 1, 'Murtaza Zaheer', 'murtazazaheer@gmail.com', NULL, '$2y$12$fGdxPt285MEZMSeXO6rdA.7cD9fI/R62BoKyFO9xzb4M4P/hcEEw2', NULL, '2020-06-23 12:44:55', '2020-06-23 12:44:55'),
(4, 1, 'MRMSoft', 'majidmrmsoft@gmail.com', NULL, '$2y$10$aG2Hts9pj325elSyj7g9.ON1kzTU6vglGhoimf.OmWyWHsIhROxqy', NULL, '2020-06-23 12:50:08', '2020-06-23 12:50:08'),
(13, 4, 'Shayan khan', 'shayanhaider666@gmail.com', NULL, '$2y$10$orj2Pjdwn/EjIRq6OHCE7.ufbGNOWiy11imdUed17ikpfrPOKSlBG', NULL, '2020-06-25 06:14:16', '2020-06-25 06:14:16'),
(14, 4, 'ayan', 'ayan@gmail.com', NULL, '$2y$10$nqZDV83bHkq7DESZrMKZI.Avc7vbqdaFpQq6b5sfNnZD8Ti6.dOoW', NULL, '2020-08-17 12:11:03', '2020-08-17 12:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `cameras`
--

CREATE TABLE `cameras` (
  `id` int(10) UNSIGNED NOT NULL,
  `store_id` int(10) UNSIGNED NOT NULL,
  `camera_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cameras`
--

INSERT INTO `cameras` (`id`, `store_id`, `camera_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Stairs', NULL, NULL),
(2, 1, 'Garage', NULL, NULL),
(3, 2, '1st floor', NULL, NULL),
(4, 2, 'outside', NULL, NULL),
(5, 3, 'Lawn', NULL, NULL),
(6, 3, 'bedroom', NULL, NULL),
(7, 3, 'kitchen', NULL, NULL),
(8, 4, 'garden', NULL, NULL),
(9, 4, 'car parking', NULL, NULL),
(10, 4, 'front door', NULL, NULL),
(11, 5, 'room2', NULL, NULL),
(12, 5, 'washroom', NULL, NULL),
(13, 5, 'bathroom', NULL, NULL),
(14, 7, 'backyard', NULL, NULL),
(15, 7, 'playing area', NULL, NULL),
(16, 7, 'meeting room', NULL, NULL),
(17, 2, 'Roof', '2020-05-21 02:47:10', '2020-05-21 02:47:10'),
(19, 10, 'Front Camera', '2020-06-17 09:28:46', '2020-06-17 09:28:46'),
(20, 11, 'Front Cam 01', '2020-06-23 12:58:43', '2020-06-23 12:58:43'),
(21, 12, 'shayan_camera', '2020-06-25 08:50:36', '2020-06-25 08:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `created_at`, `updated_at`) VALUES
(1, 'New York', NULL, NULL),
(2, 'Washington DC', NULL, NULL),
(3, 'Chicago', NULL, NULL),
(4, 'Los Angleles', NULL, NULL),
(5, 'Houston', NULL, NULL),
(7, 'Phoenix', NULL, NULL),
(9, 'Philadelphia', NULL, NULL),
(11, 'San Antonio', NULL, NULL),
(12, 'San Diego', NULL, NULL),
(13, 'Dallas', NULL, NULL),
(14, 'San Jose', NULL, NULL),
(15, 'Austin', NULL, NULL),
(16, 'Jacksonville', NULL, NULL),
(17, 'San Francisco', NULL, NULL),
(18, 'Columbus', NULL, NULL),
(19, 'Fort Worth', NULL, NULL),
(20, 'Indianapolis[', NULL, NULL),
(21, 'Charlotte', NULL, NULL),
(22, 'Seattle', NULL, NULL),
(23, 'Denver', NULL, NULL),
(24, 'Washington, D.C.', NULL, NULL),
(25, 'Boston', NULL, NULL),
(26, 'El Paso', NULL, NULL),
(27, 'Detroit', NULL, NULL),
(28, 'Nashville', NULL, NULL),
(29, 'Memphis', NULL, NULL),
(30, 'Portland', NULL, NULL),
(31, 'Oklahoma City', NULL, NULL),
(32, 'Las Vegas', NULL, NULL),
(33, 'Louisville', NULL, NULL),
(34, 'Baltimore', NULL, NULL),
(35, 'Milwaukee', NULL, NULL),
(36, 'Albuquerque', NULL, NULL),
(37, 'Tucson', NULL, NULL),
(38, 'Fresno', NULL, NULL),
(39, 'Sacramento', NULL, NULL),
(40, 'Mesa', NULL, NULL),
(41, 'Kansas', NULL, NULL),
(42, 'Atlanta', NULL, NULL),
(43, 'Long Beach', NULL, NULL),
(44, 'Omaha', NULL, NULL),
(45, 'Raleigh', NULL, NULL),
(46, 'Colorado Springs', NULL, NULL),
(47, 'Miami', NULL, NULL),
(48, 'Virginia Beach', NULL, NULL),
(49, 'Oakland', NULL, NULL),
(50, 'Minneapolis', NULL, NULL),
(51, 'Tulsa', NULL, NULL),
(52, 'Arlington', NULL, NULL),
(53, 'New Orleans', NULL, NULL),
(54, 'Wichita', NULL, NULL),
(55, 'Cleveland', NULL, NULL),
(56, 'Tampa', NULL, NULL),
(57, 'Bakersfield', NULL, NULL),
(58, 'Aurora', NULL, NULL),
(59, 'Anaheim', NULL, NULL),
(60, 'Honolulu', NULL, NULL),
(61, 'Santa Ana', NULL, NULL),
(62, 'Riverside', NULL, NULL),
(63, 'Corpus Christi', NULL, NULL),
(64, 'Lexington', NULL, NULL),
(65, 'Stockton', NULL, NULL),
(66, 'St. Louis', NULL, NULL),
(67, 'Saint Paul', NULL, NULL),
(68, 'Henderson', NULL, NULL),
(69, 'Pittsburgh', NULL, NULL),
(70, 'Cincinnati', NULL, NULL),
(71, 'Anchorage', NULL, NULL),
(72, 'Greensboro', NULL, NULL),
(73, 'Plano', NULL, NULL),
(74, 'Newark', NULL, NULL),
(75, 'Lincoln', NULL, NULL),
(76, 'Orlando', NULL, NULL),
(77, 'Irvine', NULL, NULL),
(78, 'Toledo', NULL, NULL),
(79, 'Jersey City', NULL, NULL),
(80, 'Chula Vista', NULL, NULL),
(81, 'Durham', NULL, NULL),
(82, 'Fort Wayne', NULL, NULL),
(83, 'St. Petersburg', NULL, NULL),
(84, 'Laredo', NULL, NULL),
(85, 'Buffalo', NULL, NULL),
(86, 'Madison', NULL, NULL),
(87, 'Lubbock', NULL, NULL),
(88, 'Chandler', NULL, NULL),
(89, 'Scottsdale', NULL, NULL),
(90, 'Reno', NULL, NULL),
(91, 'Glendale', NULL, NULL),
(92, 'Norfolk', NULL, NULL),
(93, 'Winston–Salem', NULL, NULL),
(94, 'North Las Vegas', NULL, NULL),
(95, 'Gilbert', NULL, NULL),
(96, 'Chesapeake', NULL, NULL),
(97, 'Irving', NULL, NULL),
(98, 'Hialeah', NULL, NULL),
(99, 'Garland', NULL, NULL),
(100, 'Fremont', NULL, NULL),
(101, 'Richmond', NULL, NULL),
(102, 'Boise', NULL, NULL),
(103, 'Baton Rouge', NULL, NULL),
(104, 'Des Moines', NULL, NULL),
(105, 'Spokane', NULL, NULL),
(106, 'San Bernardino', NULL, NULL),
(107, 'Modesto', NULL, NULL),
(108, 'Tacoma', NULL, NULL),
(109, 'Fontana', NULL, NULL),
(110, 'Santa Clarita', NULL, NULL),
(111, '', NULL, NULL),
(112, 'Birmingham', NULL, NULL),
(113, 'Oxnard', NULL, NULL),
(114, 'Fayetteville', NULL, NULL),
(115, 'Rochester', NULL, NULL),
(116, 'Moreno Valley', NULL, NULL),
(117, 'Glendale', NULL, NULL),
(118, 'Yonkers', NULL, NULL),
(119, 'Huntington Beach', NULL, NULL),
(120, 'Aurora', NULL, NULL),
(121, 'Salt Lake City', NULL, NULL),
(122, 'Amarillo', NULL, NULL),
(123, 'Montgomery', NULL, NULL),
(124, 'Grand Rapids', NULL, NULL),
(125, 'Little Rock', NULL, NULL),
(126, 'Akron', NULL, NULL),
(127, 'Augusta', NULL, NULL),
(128, 'Huntsville', NULL, NULL),
(129, 'Columbus', NULL, NULL),
(130, 'Grand Prairie', NULL, NULL),
(131, 'Shreveport', NULL, NULL),
(132, 'Overland Park', NULL, NULL),
(133, 'Tallahassee', NULL, NULL),
(134, 'Mobile', NULL, NULL),
(135, 'Port St. Lucie', NULL, NULL),
(136, 'Knoxville', NULL, NULL),
(137, 'Worcester', NULL, NULL),
(138, 'Tempe', NULL, NULL),
(139, 'Cape Coral', NULL, NULL),
(140, 'Brownsville', NULL, NULL),
(141, 'McKinney', NULL, NULL),
(142, 'Providence', NULL, NULL),
(143, 'Fort Lauderdale', NULL, NULL),
(144, 'Newport News', NULL, NULL),
(145, 'Chattanooga', NULL, NULL),
(146, 'Rancho Cucamonga', NULL, NULL),
(147, 'Frisco', NULL, NULL),
(148, 'Sioux Falls', NULL, NULL),
(149, 'Oceanside', NULL, NULL),
(150, 'Ontario', NULL, NULL),
(151, 'Vancouver', NULL, NULL),
(152, 'Santa Rosa', NULL, NULL),
(153, 'Garden Grove', NULL, NULL),
(154, 'Elk Grove', NULL, NULL),
(155, 'Pembroke Pines', NULL, NULL),
(156, 'Salem', NULL, NULL),
(157, 'Eugene', NULL, NULL),
(158, 'Peoria', NULL, NULL),
(159, 'Corona', NULL, NULL),
(160, 'Springfield', NULL, NULL),
(161, 'Jackson', NULL, NULL),
(162, 'Cary', NULL, NULL),
(163, 'Fort Collins', NULL, NULL),
(164, 'Hayward', NULL, NULL),
(165, 'Lancaster', NULL, NULL),
(166, 'Alexandria', NULL, NULL),
(167, 'Salinas', NULL, NULL),
(168, 'Palmdale', NULL, NULL),
(169, 'Lakewood', NULL, NULL),
(170, 'Springfield', NULL, NULL),
(171, 'Sunnyvale', NULL, NULL),
(172, 'Hollywood', NULL, NULL),
(173, 'Pasadena', NULL, NULL),
(174, 'Clarksville', NULL, NULL),
(175, 'Pomona', NULL, NULL),
(176, 'Macon', NULL, NULL),
(177, 'Escondido', NULL, NULL),
(178, 'Paterson', NULL, NULL),
(179, 'Joliet', NULL, NULL),
(180, 'Naperville', NULL, NULL),
(181, 'Rockford', NULL, NULL),
(182, 'Torrance', NULL, NULL),
(183, 'Bridgeport', NULL, NULL),
(184, 'Savannah', NULL, NULL),
(185, 'Killeen', NULL, NULL),
(186, 'Bellevue', NULL, NULL),
(187, 'Mesquite', NULL, NULL),
(188, 'Syracuse', NULL, NULL),
(189, 'McAllen', NULL, NULL),
(190, 'Pasadena', NULL, NULL),
(191, 'Orange', NULL, NULL),
(192, 'Fullerton', NULL, NULL),
(193, 'Dayton', NULL, NULL),
(194, 'Miramar', NULL, NULL),
(195, 'Olathe', NULL, NULL),
(196, 'Thornton', NULL, NULL),
(197, 'Waco', NULL, NULL),
(198, 'Murfreesboro', NULL, NULL),
(199, 'Denton', NULL, NULL),
(200, 'West Valley City', NULL, NULL),
(201, 'Midland', NULL, NULL),
(202, 'Carrollton', NULL, NULL),
(203, 'Roseville', NULL, NULL),
(204, 'Warren', NULL, NULL),
(205, 'Charleston', NULL, NULL),
(206, 'Hampton', NULL, NULL),
(207, 'Surprise', NULL, NULL),
(208, 'Columbia', NULL, NULL),
(209, 'Coral Springs', NULL, NULL),
(210, 'Visalia', NULL, NULL),
(211, 'Coral Springs', NULL, NULL),
(212, 'Visalia', NULL, NULL),
(213, 'Sterling Heights', NULL, NULL),
(214, 'Gainesville', NULL, NULL),
(215, 'Cedar Rapids', NULL, NULL),
(216, 'New Haven', NULL, NULL),
(217, 'Stamford', NULL, NULL),
(218, 'Elizabeth', NULL, NULL),
(219, 'Concord', NULL, NULL),
(220, 'Thousand Oaks', NULL, NULL),
(221, 'Kent', NULL, NULL),
(222, 'Santa Clara', NULL, NULL),
(223, 'Simi Valley', NULL, NULL),
(224, 'Lafayette', NULL, NULL),
(225, 'Topeka', NULL, NULL),
(226, 'Athens', NULL, NULL),
(227, 'Round Rock', NULL, NULL),
(228, 'Hartford', NULL, NULL),
(229, 'Norman', NULL, NULL),
(230, 'Victorville', NULL, NULL),
(231, 'Fargo', NULL, NULL),
(232, 'Berkeley', NULL, NULL),
(233, 'Vallejo', NULL, NULL),
(234, 'Abilene', NULL, NULL),
(235, 'Columbia', NULL, NULL),
(236, 'Ann Arbor', NULL, NULL),
(237, 'Allentown', NULL, NULL),
(238, 'Pearland', NULL, NULL),
(239, 'Beaumont', NULL, NULL),
(240, 'Wilmington', NULL, NULL),
(241, 'Evansville', NULL, NULL),
(242, 'Arvada', NULL, NULL),
(243, 'Provo', NULL, NULL),
(244, 'Independence', NULL, NULL),
(245, 'Lansing', NULL, NULL),
(246, 'Odessa', NULL, NULL),
(247, 'Richardson', NULL, NULL),
(248, 'Fairfield', NULL, NULL),
(249, 'El Monte', NULL, NULL),
(250, 'Rochester', NULL, NULL),
(251, 'Clearwater', NULL, NULL),
(252, 'Carlsbad', NULL, NULL),
(253, 'Springfield', NULL, NULL),
(254, 'Temecula', NULL, NULL),
(255, 'West Jordan', NULL, NULL),
(256, 'Costa Mesa', NULL, NULL),
(257, 'Miami Gardens', NULL, NULL),
(258, 'Cambridge', NULL, NULL),
(259, 'College Station', NULL, NULL),
(260, 'Murrieta', NULL, NULL),
(261, 'Downey', NULL, NULL),
(262, 'Peoria', NULL, NULL),
(263, 'Westminster', NULL, NULL),
(264, 'Elgin', NULL, NULL),
(265, 'Antioch', NULL, NULL),
(266, 'Palm Bay', NULL, NULL),
(267, 'High Point', NULL, NULL),
(268, 'Lowell', NULL, NULL),
(269, 'Manchester', NULL, NULL),
(270, 'Pueblo', NULL, NULL),
(271, 'Gresham', NULL, NULL),
(272, 'North Charleston', NULL, NULL),
(273, 'Ventura', NULL, NULL),
(274, 'Inglewood', NULL, NULL),
(275, 'Pompano Beach', NULL, NULL),
(276, 'Centennial', NULL, NULL),
(277, 'West Palm Beach', NULL, NULL),
(278, 'Everett', NULL, NULL),
(279, 'Richmond', NULL, NULL),
(280, 'Clovis', NULL, NULL),
(281, 'Billings', NULL, NULL),
(282, 'Waterbury', NULL, NULL),
(283, 'Broken Arrow', NULL, NULL),
(284, 'Lakeland', NULL, NULL),
(285, 'West Covina', NULL, NULL),
(286, 'Boulder', NULL, NULL),
(287, 'Daly City', NULL, NULL),
(288, 'Santa Maria', NULL, NULL),
(289, 'Hillsboro', NULL, NULL),
(290, 'Sandy Springs', NULL, NULL),
(291, 'Norwalk', NULL, NULL),
(292, 'Jurupa Valley', NULL, NULL),
(293, 'Lewisville', NULL, NULL),
(294, 'Greeley', NULL, NULL),
(295, 'Davie', NULL, NULL),
(296, 'Green Bay', NULL, NULL),
(297, 'Tyler', NULL, NULL),
(298, 'League City', NULL, NULL),
(299, 'Burbank', NULL, NULL),
(300, 'San Mateo', NULL, NULL),
(301, 'Wichita Falls', NULL, NULL),
(302, 'El Cajon', NULL, NULL),
(303, 'Rialto', NULL, NULL),
(304, 'Lakewood', NULL, NULL),
(305, 'Edison', NULL, NULL),
(306, 'Davenport', NULL, NULL),
(307, 'South Bend', NULL, NULL),
(308, 'Woodbridge', NULL, NULL),
(309, 'Las Cruces', NULL, NULL),
(310, 'Vista', NULL, NULL),
(311, 'Renton', NULL, NULL),
(312, 'Sparks', NULL, NULL),
(313, 'Clinton', NULL, NULL),
(314, 'Allen', NULL, NULL),
(315, 'Tuscaloosa', NULL, NULL),
(316, 'San Angelo', NULL, NULL),
(317, 'Vacaville', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `report_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `report_id`, `user_name`, `comment`, `created_at`, `updated_at`) VALUES
(27, 16, 'Hamzaa', 'yretyhvcb', '2020-06-30 01:54:14', '2020-06-30 01:54:14'),
(29, 38, 'Shahrukh (Admin)', 'Hello bhai kese ho', '2020-06-30 02:32:28', '2020-06-30 02:32:28'),
(30, 38, 'Shahrukh (Admin)', 'send me the detail in email', '2020-06-30 02:33:19', '2020-06-30 02:33:19'),
(34, 16, 'Shahrukh (Admin)', 'AIFD', '2020-06-30 07:01:00', '2020-06-30 07:01:00'),
(36, 16, 'Hamzaa', 'send me the detail in email', '2020-06-30 07:28:13', '2020-06-30 07:28:13'),
(38, 15, 'Shahrukh (Admin)', 'Hi, i need its detail', '2020-06-30 07:31:40', '2020-06-30 07:31:40'),
(39, 15, 'Hamzaa', 'i have already sent', '2020-06-30 07:32:07', '2020-06-30 07:32:07'),
(40, 41, 'Shahrukh (Admin)', 'Hello', '2020-06-30 07:46:36', '2020-06-30 07:46:36'),
(43, 40, 'Shahrukh (Admin)', 'hi', '2020-06-30 08:00:12', '2020-06-30 08:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `created_at`, `updated_at`) VALUES
(1, 'USA', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `report_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `report_id`, `path`, `created_at`, `updated_at`) VALUES
(1, 1, '1920202020122920_report_banner1.png', '2020-05-19 07:29:20', '2020-05-19 07:29:20'),
(2, 2, '1920202020123314_report_560606.jpg', '2020-05-19 07:33:14', '2020-05-19 07:33:14'),
(3, 2, '1920202020123314_report_420202020012058_report_error.png', '2020-05-19 07:33:14', '2020-05-19 07:33:14'),
(4, 2, '1920202020123350_report_420202020090451_report_image1.png', '2020-05-19 07:33:50', '2020-05-19 07:33:50'),
(5, 2, '1920202020123350_report_420202020094725_report_image1.png', '2020-05-19 07:33:50', '2020-05-19 07:33:50'),
(6, 4, '1920202020123515_report_120202020100035_report_560606.jpg', '2020-05-19 07:35:15', '2020-05-19 07:35:15'),
(7, 4, '1920202020123515_report_120202020100035_report_banner1.png', '2020-05-19 07:35:15', '2020-05-19 07:35:15'),
(8, 4, '1920202020123515_report_420202020090451_report_error.png', '2020-05-19 07:35:15', '2020-05-19 07:35:15'),
(9, 6, '2120202020101718_report_zuve.png', '2020-05-21 05:17:18', '2020-05-21 05:17:18'),
(10, 7, '2120202020112806_report_zizo.png', '2020-05-21 06:28:06', '2020-05-21 06:28:06'),
(17, 10, '2820202020022321_report_s-l1600 (1).jpg', '2020-05-28 12:23:21', '2020-05-28 12:23:21'),
(18, 10, '2820202020022321_report_s-l1600 (2).jpg', '2020-05-28 12:23:21', '2020-05-28 12:23:21'),
(19, 10, '2820202020022321_report_s-l1600.jpg', '2020-05-28 12:23:21', '2020-05-28 12:23:21'),
(20, 38, '2620202020061512_report_icons8-facebook-24.png', '2020-06-26 13:15:12', '2020-06-26 13:15:12'),
(21, 39, '3020202020053326_report_banner1.png', '2020-06-30 12:33:26', '2020-06-30 12:33:26'),
(22, 39, '3020202020053354_report_Logo Design DB.jpg', '2020-06-30 12:33:54', '2020-06-30 12:33:54');

-- --------------------------------------------------------

--
-- Table structure for table `incidents`
--

CREATE TABLE `incidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `incident_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `incidents`
--

INSERT INTO `incidents` (`id`, `incident_name`, `created_at`, `updated_at`) VALUES
(1, 'Walk in', NULL, NULL),
(2, 'Break in', NULL, NULL),
(3, 'Robbery', NULL, NULL),
(4, 'Burglary', NULL, NULL),
(5, 'Employee Complaint', NULL, NULL),
(6, 'Group in', NULL, NULL),
(7, 'Others', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_04_10_153822_create_roles_table', 1),
(2, '2020_04_12_000000_create_users_table', 1),
(3, '2020_04_12_100000_create_password_resets_table', 1),
(4, '2020_04_13_160849_create_cities_table', 1),
(5, '2020_04_13_161345_create_countries_table', 1),
(6, '2020_04_13_161737_create_states_table', 1),
(7, '2020_04_14_181817_create__admin__table', 1),
(8, '2020_04_15_060351_create_stores_table', 1),
(9, '2020_04_15_084334_create_priorities_table', 1),
(10, '2020_04_16_054031_create_cameras_table', 1),
(11, '2020_04_16_070256_create_incidents_table', 1),
(12, '2020_04_17_084318_create_reports_table', 1),
(13, '2020_04_18_075037_create_images_table', 1),
(14, '2020_04_27_075145_create_remarks_table', 1),
(15, '2020_05_05_093614_create_reqs_table', 1),
(16, '2020_06_29_100423_create_comments_table', 2),
(17, '2020_06_29_121321_create_comments_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `priorities`
--

CREATE TABLE `priorities` (
  `id` int(10) UNSIGNED NOT NULL,
  `priority_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `priorities`
--

INSERT INTO `priorities` (`id`, `priority_level`, `created_at`, `updated_at`) VALUES
(1, 'Low', NULL, NULL),
(2, 'Medium', NULL, NULL),
(3, 'High', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `report_id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `store_id` int(10) UNSIGNED NOT NULL,
  `camera_id` int(10) UNSIGNED NOT NULL,
  `incident_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority_id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `store_id`, `camera_id`, `incident_id`, `description`, `priority_id`, `admin_id`, `document`, `link`, `status`, `date`, `time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'test', 1, 1, NULL, NULL, 1, '19-05-2020', '12:29 pm', '2020-05-19 07:29:20', '2020-05-19 07:29:20'),
(2, 1, 4, 9, 2, 'test', 2, 1, NULL, NULL, 1, '19-05-2020', '12:33 pm', '2020-05-19 07:33:14', '2020-05-19 07:33:14'),
(3, 2, 2, 3, 3, 'test', 1, 1, '2020202020034111_doc_sample.pdf', NULL, 1, '19-05-2020', '12:33 pm', '2020-05-19 07:33:50', '2020-05-19 07:33:50'),
(4, 2, 5, 11, 3, 'test', 3, 1, '2020202020034136_doc_WWQA.pdf', NULL, 1, '19-05-2020', '12:35 pm', '2020-05-19 07:35:15', '2020-05-19 07:35:15'),
(5, 3, 3, 6, 5, 'Sitting for a long', 3, 1, NULL, NULL, 1, '21-05-2020', '09:12 am', '2020-05-21 04:12:20', '2020-05-21 04:12:20'),
(6, 3, 7, 15, 3, 'asdklas kalsdkal kl;aksdals;d', 2, 1, NULL, NULL, 1, '21-05-2020', '10:17 am', '2020-05-21 05:17:18', '2020-05-21 05:17:18'),
(7, 2, 2, 3, 3, 'hsadgfkjashgdf', 2, 1, '2120202020063128_doc_sample.pdf', NULL, 1, '21-05-2020', '11:28 am', '2020-05-21 06:28:06', '2020-05-21 06:28:06'),
(10, 3, 3, 6, 5, 'asdasdasdasdasdasdasdas', 3, 1, '2820202020092407_doc_Mrm-soft - Wordpress website - Eric Team AMC.pdf', NULL, 0, '28-05-2020', '02:23 pm', '2020-05-28 12:23:21', '2020-05-28 12:23:21'),
(11, 1, 1, 2, 1, 'asdf', 1, 1, NULL, NULL, 1, '28-05-2020', '04:15 pm', '2020-05-28 14:15:10', '2020-05-28 14:15:10'),
(12, 7, 10, 19, 2, 'Test', 3, 1, NULL, NULL, 1, '17-06-2020', '04:29 pm', '2020-06-17 14:29:06', '2020-06-17 14:29:06'),
(13, 9, 11, 20, 5, 'Test complaint on an employee', 3, 1, NULL, NULL, 1, '23-06-2020', '08:01 pm', '2020-06-23 18:01:35', '2020-06-23 18:01:35'),
(14, 1, 1, 1, 2, 'asda', 2, 1, NULL, NULL, 0, '25-06-2020', '06:01 pm', '2020-06-25 13:01:56', '2020-06-25 13:01:56'),
(15, 1, 4, 8, 3, 'safdsdf', 2, 1, NULL, NULL, 1, '25-06-2020', '06:16 pm', '2020-06-25 13:16:31', '2020-06-25 13:16:31'),
(16, 1, 4, 8, 1, 'cdfhscf', 1, 1, '2520202020023557_doc_POS.docx', NULL, 1, '25-06-2020', '06:18 pm', '2020-06-25 13:18:16', '2020-06-25 13:18:16'),
(17, 2, 5, 11, 2, 'asds', 2, 1, NULL, NULL, 0, '25-06-2020', '06:27 pm', '2020-06-25 13:27:43', '2020-06-25 13:27:43'),
(18, 2, 2, 3, 3, 'asdsafd', 3, 1, NULL, NULL, 0, '25-06-2020', '06:37 pm', '2020-06-25 13:37:32', '2020-06-25 13:37:32'),
(19, 2, 2, 3, 2, 'sdfgewre', 3, 1, NULL, NULL, 0, '25-06-2020', '06:38 pm', '2020-06-25 13:38:22', '2020-06-25 13:38:22'),
(20, 14, 12, 21, 3, 'Testing email report', 3, 1, NULL, NULL, 0, '25-06-2020', '06:51 pm', '2020-06-25 13:51:24', '2020-06-25 13:51:24'),
(21, 14, 12, 21, 2, 'Testing report email 2', 3, 1, NULL, NULL, 0, '25-06-2020', '06:52 pm', '2020-06-25 13:52:33', '2020-06-25 13:52:33'),
(22, 14, 12, 21, 6, 'safdsafewfzxcsdaf', 3, 1, NULL, NULL, 0, '25-06-2020', '06:53 pm', '2020-06-25 13:53:43', '2020-06-25 13:53:43'),
(23, 14, 12, 21, 3, 'ertergfdsfgaergfdsf', 3, 1, NULL, NULL, 0, '25-06-2020', '06:54 pm', '2020-06-25 13:54:19', '2020-06-25 13:54:19'),
(24, 14, 12, 21, 3, 'safagdsrtythvfdhg', 3, 1, NULL, NULL, 0, '25-06-2020', '06:57 pm', '2020-06-25 13:57:39', '2020-06-25 13:57:39'),
(25, 14, 12, 21, 2, 'asfdsadf', 3, 1, NULL, NULL, 0, '25-06-2020', '06:58 pm', '2020-06-25 13:58:46', '2020-06-25 13:58:46'),
(26, 14, 12, 21, 3, 'asfadf', 3, 1, NULL, NULL, 0, '25-06-2020', '07:03 pm', '2020-06-25 14:03:02', '2020-06-25 14:03:02'),
(27, 14, 12, 21, 5, 'asdasdq', 3, 1, NULL, NULL, 0, '25-06-2020', '07:04 pm', '2020-06-25 14:04:32', '2020-06-25 14:04:32'),
(28, 14, 12, 21, 3, 'asfsafdsadf', 3, 1, NULL, NULL, 0, '25-06-2020', '07:09 pm', '2020-06-25 14:09:15', '2020-06-25 14:09:15'),
(29, 14, 12, 21, 3, 'asdawrff', 3, 1, NULL, NULL, 0, '25-06-2020', '07:14 pm', '2020-06-25 14:14:52', '2020-06-25 14:14:52'),
(30, 14, 12, 21, 4, 'safsdfa', 3, 1, NULL, NULL, 0, '25-06-2020', '07:17 pm', '2020-06-25 14:17:46', '2020-06-25 14:17:46'),
(31, 14, 12, 21, 1, 'sadfadf', 3, 1, NULL, NULL, 1, '25-06-2020', '07:19 pm', '2020-06-25 14:19:51', '2020-06-25 14:19:51'),
(32, 14, 12, 21, 3, 'asdsdfsad', 3, 1, NULL, NULL, 0, '25-06-2020', '07:21 pm', '2020-06-25 14:21:10', '2020-06-25 14:21:10'),
(33, 14, 12, 21, 3, 'safefqertqewf', 3, 1, NULL, NULL, 0, '25-06-2020', '07:23 pm', '2020-06-25 14:23:19', '2020-06-25 14:23:19'),
(34, 14, 12, 21, 3, 'asfsafsdfds', 3, 1, NULL, NULL, 0, '25-06-2020', '07:23 pm', '2020-06-25 14:23:58', '2020-06-25 14:23:58'),
(35, 14, 12, 21, 3, 'asfafasfdsgfdg43terfgdf', 3, 1, NULL, NULL, 1, '25-06-2020', '07:25 pm', '2020-06-25 14:25:23', '2020-06-25 14:25:23'),
(36, 14, 12, 21, 3, 'checking', 3, 1, '2520202020023525_doc_cougars.docx', 'http://www.google.com.pk', 1, '25-06-2020', '07:28 pm', '2020-06-25 14:28:24', '2020-06-25 14:28:24'),
(37, 14, 12, 21, 3, 'sdhfioeushfjkdsnfds', 3, 1, NULL, 'https://www.google.com/', 1, '25-06-2020', '07:29 pm', '2020-06-25 14:29:35', '2020-06-25 14:29:35'),
(38, 1, 4, 8, 3, 'sadfewfsdf', 2, 3, NULL, NULL, 1, '26-06-2020', '06:15 pm', '2020-06-26 13:15:12', '2020-06-26 13:15:12'),
(39, 1, 4, 8, 4, 'sadfghjkcvnb', 2, 1, NULL, NULL, 0, '30-06-2020', '05:33 pm', '2020-06-30 12:33:26', '2020-06-30 12:33:26'),
(40, 1, 1, 1, 6, 'sdafdsgfdjgfkyruthergxcvxfgv', 3, 1, NULL, NULL, 0, '30-06-2020', '05:33 pm', '2020-06-30 12:33:54', '2020-06-30 12:33:54'),
(41, 1, 4, 9, 1, 'Hello', 2, 1, NULL, NULL, 1, '30-06-2020', '05:37 pm', '2020-06-30 12:37:57', '2020-06-30 12:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `reqs`
--

CREATE TABLE `reqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `report_id` int(10) UNSIGNED NOT NULL,
  `status` int(10) NOT NULL DEFAULT 0,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reqs`
--

INSERT INTO `reqs` (`id`, `admin_id`, `user_id`, `report_id`, `status`, `date`, `time`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 4, 1, '19-05-2020', '01:02 pm', '2020-05-19 08:02:57', '2020-05-19 03:13:35'),
(6, 1, 1, 3, 1, '19-05-2020', '01:23 pm', '2020-05-19 08:23:15', '2020-05-28 07:26:15'),
(7, 1, 1, 2, 1, '20-05-2020', '10:15 am', '2020-05-20 05:15:34', '2020-05-28 07:26:04'),
(8, 1, 1, 6, 1, '21-05-2020', '10:17 am', '2020-05-21 05:17:47', '2020-05-21 00:18:11'),
(9, 1, 1, 7, 1, '21-05-2020', '11:33 am', '2020-05-21 06:33:33', '2020-05-21 01:35:11'),
(12, 1, 1, 1, 1, '28-05-2020', '04:11 pm', '2020-05-28 14:11:36', '2020-05-28 09:14:15'),
(13, 0, 1, 11, 0, '13-06-2020', '01:08 pm', '2020-06-13 11:08:55', '2020-06-13 11:08:55'),
(14, 1, 7, 12, 1, '17-06-2020', '04:29 pm', '2020-06-17 14:29:22', '2020-06-17 09:29:31'),
(15, 0, 1, 16, 0, '25-06-2020', '07:32 pm', '2020-06-25 14:32:36', '2020-06-25 14:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL),
(3, 'none', NULL, NULL),
(4, 'reporter', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`, `created_at`, `updated_at`) VALUES
(1, 'California', NULL, NULL),
(2, 'Texas', NULL, NULL),
(3, 'Florida', NULL, NULL),
(4, 'Ohio', NULL, NULL),
(5, 'New Jersey', NULL, NULL),
(6, 'Michigan', NULL, NULL),
(7, 'Pennsylvania', NULL, NULL),
(8, 'Arizona', NULL, NULL),
(9, 'Georgia', NULL, NULL),
(10, 'Massachusetts', NULL, NULL),
(11, 'Alaska', NULL, NULL),
(12, 'Hawaii', NULL, NULL),
(13, 'Illinois', NULL, NULL),
(14, 'Colorado', NULL, NULL),
(15, 'New York', NULL, NULL),
(16, 'Washington', NULL, NULL),
(17, 'Minnesota', NULL, NULL),
(18, 'North Carolina', NULL, NULL),
(19, 'Virginia', NULL, NULL),
(20, 'Alabama', NULL, NULL),
(21, 'Maryland', NULL, NULL),
(22, 'Indiana', NULL, NULL),
(23, 'Oregon', NULL, NULL),
(24, 'Wisconsin', NULL, NULL),
(25, 'Missouri', NULL, NULL),
(26, 'Tennessee', NULL, NULL),
(27, 'South Carolina', NULL, NULL),
(28, 'Connecticut', NULL, NULL),
(29, 'Utah', NULL, NULL),
(30, 'Louisiana', NULL, NULL),
(31, 'Montana', NULL, NULL),
(32, 'Iowa', NULL, NULL),
(33, 'Mississippi', NULL, NULL),
(34, 'Maine', NULL, NULL),
(35, 'Kentucky', NULL, NULL),
(36, 'Arkansas', NULL, NULL),
(37, 'Nevada', NULL, NULL),
(38, 'New Mexico', NULL, NULL),
(39, 'Wyoming', NULL, NULL),
(40, 'Idaho', NULL, NULL),
(41, 'Rhode Island', NULL, NULL),
(42, 'Oklahoma', NULL, NULL),
(43, 'Delaware', NULL, NULL),
(44, 'Nebraska', NULL, NULL),
(45, 'West Virginia', NULL, NULL),
(46, 'Kansas', NULL, NULL),
(47, 'New Hampshire', NULL, NULL),
(48, 'Vermont', NULL, NULL),
(49, 'South Dakota', NULL, NULL),
(50, 'North Dakota', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `id` int(10) UNSIGNED NOT NULL,
  `store_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `address`, `user_id`, `city_id`, `state_id`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Hawk 1', 'abcd', 1, 1, 1, 1, '2020-05-19 02:03:25', '2020-05-19 02:03:25'),
(2, 'Hawk 2', 'efgh', 2, 2, 2, 1, '2020-05-19 02:03:51', '2020-05-19 02:03:51'),
(3, 'Hawk 3', 'ijkl', 3, 3, 3, 1, '2020-05-19 02:04:13', '2020-05-19 02:04:13'),
(4, 'Hawk 4', 'afsaf', 1, 2, 2, 1, '2020-05-19 02:04:29', '2020-05-19 02:04:29'),
(5, 'Hawk 5', 'fefw', 2, 3, 3, 1, '2020-05-19 02:04:48', '2020-05-19 02:04:48'),
(7, 'Hawk 6', 'jkygkjhg', 3, 1, 1, 1, '2020-05-19 02:05:32', '2020-05-19 02:05:32'),
(10, 'Abc Store', '123 street abc road', 7, 1, 1, 1, '2020-06-17 09:28:25', '2020-06-17 09:28:25'),
(11, 'Xtreme Store', '4229  Aviation Way', 9, 4, 1, 1, '2020-06-23 12:57:00', '2020-06-23 12:57:00'),
(12, 'test 123', 'abcdefg', 14, 7, 12, 1, '2020-06-25 08:50:13', '2020-06-25 08:50:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `address`, `city_id`, `state_id`, `country_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'Hamzaa', 'hamza@gmail.com', NULL, '$2y$10$5SBN1APnTbhckHanSwb3g.K072fVJSM13C4uYuQw1YKqKdqI/whp2', '0123456789', 'Street 1', 2, 2, 1, 'YVuGgSnr9VNKh6I7TfeLCqeIy1hJd7H195CfFdv2wbpHo07imrjxcloOxxyx', NULL, NULL),
(2, 2, 'Murtuza', 'murtuza@gmail.com', NULL, '$2b$10$N0cVYOXJCSJAIFfXFqoD4ed2jEoiES0ybr1XcCpWA7YMLPN99jR2G', '9876543210', 'Street 2', 2, 2, 1, NULL, NULL, NULL),
(3, 2, 'Shayan', 'shayan@gmail.com', NULL, '$2b$10$N0cVYOXJCSJAIFfXFqoD4ed2jEoiES0ybr1XcCpWA7YMLPN99jR2G', '95175364820', 'Street 3', 3, 3, 1, NULL, NULL, NULL),
(4, 2, 'Aurangzeb', 'aurangzeb@gmail.com', NULL, '$2y$10$BqcKrpapIuqIS4DEnVeq3OG7I4nYlv6FDE93swgjRdcJ3FdJ/SA/O', '321549780', 'Street 4', 1, 3, 1, NULL, '2020-05-21 04:43:39', '2020-05-21 04:43:39'),
(7, 2, 'Murtaza', 'murtazazaheer@gmail.com', NULL, '$2y$10$rflQQBtq2AkxItHc2cedXubbqgcsGATjLdGhfXw.rQUseW3Qw9b6K', '03124047569', 'L26, paradise apartments.', 2, 2, 1, NULL, '2020-06-17 09:26:28', '2020-06-17 09:26:28'),
(8, 2, 'Wajji', 'wajji@gmail.com', NULL, '$2y$10$9Qs2s9YdHo5jy8WW5n0IL.Kpbtiw/6XgzXNr1IVy.XduNGIDbL6Eu', '123456789', 'abcd', 1, 2, 1, NULL, '2020-06-17 10:34:47', '2020-06-17 10:34:47'),
(9, 2, 'Moosa', 'moosaraza890@gmail.com', NULL, '$2y$10$7cwEoUs1bwuAZm6u5dgOneN2VhueGxNuAg4U6zAyGaRuTrbAHR9zy', '03122546312', '1936  Clifford Street', 100, 1, 1, NULL, '2020-06-23 12:54:41', '2020-06-23 12:54:41'),
(14, 2, 'Shayan haider', 'shayanhaider333@gmail.com', NULL, '$2y$10$lT/BTTrDdoWBRJNQIbxlLOAwzbeexUPw1XvKjGsqg7BQq1ricqIRK', '03451234567', 'Defence', 2, 1, 1, '2Jw3ioyQLReblLZeTtz5y8A91ziApwE6OhG0BBVYvpqL07FGA6ks3NxlkJv9', '2020-06-25 07:19:46', '2020-06-25 07:19:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD KEY `admins_role_id_foreign` (`role_id`);

--
-- Indexes for table `cameras`
--
ALTER TABLE `cameras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cameras_store_id_foreign` (`store_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_report_id_foreign` (`report_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_report_id_foreign` (`report_id`);

--
-- Indexes for table `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `priorities`
--
ALTER TABLE `priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `remarks_user_id_foreign` (`user_id`),
  ADD KEY `remarks_report_id_foreign` (`report_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`),
  ADD KEY `reports_store_id_foreign` (`store_id`),
  ADD KEY `reports_camera_id_foreign` (`camera_id`),
  ADD KEY `reports_incident_id_foreign` (`incident_id`),
  ADD KEY `reports_priority_id_foreign` (`priority_id`),
  ADD KEY `reports_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `reqs`
--
ALTER TABLE `reqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reqs_admin_id_foreign` (`admin_id`),
  ADD KEY `reqs_user_id_foreign` (`user_id`),
  ADD KEY `reqs_report_id_foreign` (`report_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_user_id_foreign` (`user_id`),
  ADD KEY `stores_city_id_foreign` (`city_id`),
  ADD KEY `stores_state_id_foreign` (`state_id`),
  ADD KEY `stores_country_id_foreign` (`country_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_city_id_foreign` (`city_id`),
  ADD KEY `users_state_id_foreign` (`state_id`),
  ADD KEY `users_country_id_foreign` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cameras`
--
ALTER TABLE `cameras`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `priorities`
--
ALTER TABLE `priorities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `reqs`
--
ALTER TABLE `reqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cameras`
--
ALTER TABLE `cameras`
  ADD CONSTRAINT `cameras_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `remarks`
--
ALTER TABLE `remarks`
  ADD CONSTRAINT `remarks_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `remarks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_camera_id_foreign` FOREIGN KEY (`camera_id`) REFERENCES `cameras` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_incident_id_foreign` FOREIGN KEY (`incident_id`) REFERENCES `incidents` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_priority_id_foreign` FOREIGN KEY (`priority_id`) REFERENCES `priorities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_store_id_foreign` FOREIGN KEY (`store_id`) REFERENCES `stores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reqs`
--
ALTER TABLE `reqs`
  ADD CONSTRAINT `reqs_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reqs_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reqs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stores_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stores_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stores_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `users_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
