-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2019 at 11:07 AM
-- Server version: 5.6.45
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opensyst_uroflowmetry`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_09_12_065009_create_user-group_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `id` int(11) NOT NULL,
  `checktime` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `measuredvolume` double DEFAULT NULL,
  `measuredduration` int(11) DEFAULT NULL,
  `flowrate` double DEFAULT NULL,
  `timedistance` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`id`, `checktime`, `measuredvolume`, `measuredduration`, `flowrate`, `timedistance`, `userid`, `updated_at`, `created_at`) VALUES
(12, '2019-11-25', 404, 20, 20.2, '0,15,18,21,20,19,22,0,0,12,15,0', 30, '2019-12-04 17:28:03', '2019-12-04 17:28:03'),
(13, '2019-11-25', 404, 20, 20.2, '0,15,18,12,28,19,22,0,0,12,15,0', 30, '2019-12-04 17:28:03', '2019-12-04 17:28:03'),
(14, '2019-11-25', 404, 20, 20.2, '0,15,18,21,0,0,22,19,0,12,15,0', 31, '2019-12-04 17:28:03', '2019-12-04 17:28:03'),
(21, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,23,24,12,0,0,12,15,18,0', 36, '2019-12-07 05:17:36', '2019-12-07 05:17:36'),
(22, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,6,15,12,0,0,12,15,18,0', 36, '2019-12-07 05:17:36', '2019-12-07 05:17:36'),
(23, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,6,5,12,12,0,0,12,25,18,0', 36, '2019-12-07 05:17:36', '2019-12-07 05:17:36'),
(24, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,23,24,12,0,0,12,15,18,0', 36, '2019-12-07 05:27:13', '2019-12-07 05:27:13'),
(25, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,6,15,12,0,0,12,15,18,0', 36, '2019-12-07 05:27:13', '2019-12-07 05:27:13'),
(26, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,6,5,12,12,0,0,12,25,18,0', 36, '2019-12-07 05:27:13', '2019-12-07 05:27:13'),
(27, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,23,24,12,0,0,12,15,18,0', 36, '2019-12-07 05:36:18', '2019-12-07 05:36:18'),
(28, '2019-12-12 12:12', 120, 5, 20.1, '0,12,15,16,6,15,12,0,0,12,15,18,0', 36, '2019-12-07 05:36:18', '2019-12-07 05:36:18'),
(29, '2019-12-12 12:12', 120, 5, 20.3, '0,12,15,6,5,12,12,0,0,12,25,18,0', 36, '2019-12-07 05:36:18', '2019-12-07 05:36:18'),
(30, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,23,24,12,0,0,12,15,18,0', 36, '2019-12-07 05:53:28', '2019-12-07 05:53:28'),
(31, '2019-12-12 12:12', 120, 5, 20.1, '0,12,15,16,6,15,12,0,0,12,15,18,0', 36, '2019-12-07 05:53:28', '2019-12-07 05:53:28'),
(32, '2019-12-12 12:12', 120, 5, 20.3, '0,12,15,6,5,12,12,0,0,12,25,18,0', 36, '2019-12-07 05:53:28', '2019-12-07 05:53:28'),
(33, '2019-12-12 12:12', 120, 5, 20.2, '0,12,15,16,23,24,12,0,0,12,15,18,0', 36, '2019-12-07 05:53:39', '2019-12-07 05:53:39'),
(34, '2019-12-12 12:12', 120, 5, 20.1, '0,12,15,16,6,15,12,0,0,12,15,18,0', 36, '2019-12-07 05:53:39', '2019-12-07 05:53:39'),
(35, '2019-12-12 12:12', 120, 5, 20.3, '0,12,15,6,5,12,12,0,0,12,25,18,0', 36, '2019-12-07 05:53:39', '2019-12-07 05:53:39'),
(51, '2019/11/30 00:16:21', 404, 20, 20.2, '0.0, 162.73584, 4.716981, 0.0, 36.556602, 0.0, 0.0, 0.0, 0.0, 0.0, 38.46154, 13.095238, 16.826923, 9.523809, 30.952381, 7.1942444, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 76.456314, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 40, '2019-12-07 06:16:19', '2019-12-07 06:16:19'),
(52, '2019/11/30 01:41:54', 401, 22, 18.227272, '0.0, 127.35848, 0.0, 31.83962, 9.433962, 0.0, 41.273582, 0.0, 0.0, 0.0, 0.0, 0.0, 20.238094, 26.190475, 15.625001, 9.523809, 34.772182, 5.995204, 19.417477, 0.0, 0.0, 0.0, 0.0, 0.0, 52.184467, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 40, '2019-12-07 06:16:19', '2019-12-07 06:16:19'),
(53, '2019/12/02 12:05:50', 404, 26, 15.538462, '0.0, 73.33333, 0.0, 0.0, 0.0, 101.41509, 0.0, 31.83962, 16.587677, 0.0, 29.48113, 0.0, 0.0, 0.0, 0.0, 0.0, 37.259617, 13.064133, 16.826923, 25.179855, 19.184652, 3.6057694, 21.844662, 0.0, 0.0, 0.0, 0.0, 0.0, 54.611652, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 40, '2019-12-07 06:16:19', '2019-12-07 06:16:19'),
(54, '2019/12/07 14:08:33', 404, 21, 19.238094, '0.0, 138.6256, 18.867924, 18.957346, 10.613207, 17.688679, 9.501187, 0.0, 0.0, 0.0, 20.047169, 8.333333, 7.142857, 32.142857, 0.0, 30.952381, 9.592326, 19.417477, 0.0, 0.0, 0.0, 0.0, 0.0, 54.611652, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 40, '2019-12-07 06:16:19', '2019-12-07 06:16:19'),
(55, '2019/11/30 00:16:21', 404, 20, 20.2, '0.0, 162.73584, 4.716981, 0.0, 36.556602, 0.0, 0.0, 0.0, 0.0, 0.0, 38.46154, 13.095238, 16.826923, 9.523809, 30.952381, 7.1942444, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 76.456314, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 41, '2019-12-07 06:18:59', '2019-12-07 06:18:59'),
(56, '2019/11/30 01:41:54', 401, 22, 18.227272, '0.0, 127.35848, 0.0, 31.83962, 9.433962, 0.0, 41.273582, 0.0, 0.0, 0.0, 0.0, 0.0, 20.238094, 26.190475, 15.625001, 9.523809, 34.772182, 5.995204, 19.417477, 0.0, 0.0, 0.0, 0.0, 0.0, 52.184467, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 41, '2019-12-07 06:18:59', '2019-12-07 06:18:59'),
(57, '2019/12/02 12:05:50', 404, 26, 15.538462, '0.0, 73.33333, 0.0, 0.0, 0.0, 101.41509, 0.0, 31.83962, 16.587677, 0.0, 29.48113, 0.0, 0.0, 0.0, 0.0, 0.0, 37.259617, 13.064133, 16.826923, 25.179855, 19.184652, 3.6057694, 21.844662, 0.0, 0.0, 0.0, 0.0, 0.0, 54.611652, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 41, '2019-12-07 06:18:59', '2019-12-07 06:18:59'),
(58, '2019/12/07 14:08:33', 404, 21, 19.238094, '0.0, 138.6256, 18.867924, 18.957346, 10.613207, 17.688679, 9.501187, 0.0, 0.0, 0.0, 20.047169, 8.333333, 7.142857, 32.142857, 0.0, 30.952381, 9.592326, 19.417477, 0.0, 0.0, 0.0, 0.0, 0.0, 54.611652, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0, 0.0 ,0.0', 41, '2019-12-07 06:18:59', '2019-12-07 06:18:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `userId` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `doctoremail` varchar(50) DEFAULT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `volume` float DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 DEFAULT 'user.png',
  `is_admin` int(11) UNSIGNED DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('0','1') CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `userId`, `email`, `doctoremail`, `fullname`, `password`, `volume`, `avatar`, `is_admin`, `created_at`, `updated_at`, `status`) VALUES
(30, 'rogue', 'rogue@knight.com', 'rogue@rogue.com', 'rogue knight', '$2y$10$zxdC9AWbp4brX2o4.yPKoOWezfiYfc.7PLh.eaLRpCqE5ytNuEeZ6', NULL, 'user.png', 0, '2019-12-02 04:05:11', '2019-12-03 17:25:24', '1'),
(31, 'rogueqwe', 'rogue@rogue.com', 'rogue@rogue.com', 'rogue knight', '$2y$10$JA8nnulN.ttWNfbBlMNcE.aI7RfdCF6R3pqvUKWEdO9UBfo1QJJAS', NULL, 'user.png', 0, '2019-12-02 11:01:09', '2019-12-03 15:18:32', '0'),
(36, 'ben', 'ben@qwe.com', 'doc@doc.com', 'ben ben', '$2y$10$3ZZF9VWzOIZ1JmLNT2nwRug/pS6CQG.HgmH45jUVUaezL82N6T9su', 500, 'user.png', 0, '2019-12-04 11:57:41', '2019-12-04 11:57:41', NULL),
(38, 'rogueas', 'rog@rog.com', NULL, 'Rogue Knight', '$2y$10$jdz1aQIl8qbEjCLz0uJHwuebUNa1fM.Nxj.U8z8.EBhJvp38YK6WW', NULL, 'user.png', 0, '2019-12-05 10:13:41', '2019-12-05 10:13:41', NULL),
(39, 'rogueaqw', 'rogue@rogu.com', NULL, 'Rogue Knight', '$2y$10$gzE5hBGGf80B/99GjoIsCOUV4t7RC/Lbg6VYG/Bv/pX/Semr6UxRW', NULL, 'user.png', 0, '2019-12-05 10:15:40', '2019-12-05 10:15:40', NULL),
(40, 'needman', 'test@test.com', NULL, 'wang', '$2y$10$525aSNkdEbCtXKxETrEiBOE.EsC4GtmGhoySqlr8pSaQG.xB.rOXm', 500, 'user.png', 0, '2019-12-07 04:16:04', '2019-12-07 04:16:04', '1'),
(41, 'test', 'test@test.com', NULL, 'test', '$2y$10$mac1QT5Kxj8LcbqKu2z7DeIhhsbo92JWeO7jcVGmCdugV/Hn5XMOm', 500, 'user.png', 0, '2019-12-07 06:18:48', '2019-12-07 06:18:48', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_data`
--
ALTER TABLE `tbl_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_data`
--
ALTER TABLE `tbl_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
