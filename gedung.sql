-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2017 at 04:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gedung`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `pemesan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengantin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tanggal_sewa` date DEFAULT NULL,
  `jenis_kegiatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waktu_kegiatan` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `pemesan`, `pengantin`, `alamat`, `telepon`, `tempat`, `tanggal_sewa`, `jenis_kegiatan`, `waktu_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'riyanti', 'andi dan ira', 'jalan antapani bandung', '08112345678', 'galeri cinde', '2017-02-12', 'pernikahan', '08:00:00', '2016-12-19 08:24:03', '2016-12-19 08:24:03'),
(3, 'Rangga', 'Rangga dan Cinta', 'Jakarta', '0214234534', 'Bale Dayang Sumbi', '2017-03-25', 'pernikahan', '08:00:00', '2016-12-20 07:15:54', '2016-12-20 07:15:54'),
(4, 'Ima', 'Farida dan Uam', 'jalan suka senang bandung', '0812243267', 'Galeri Cinde', '2017-04-22', 'Pernikahan', '16:00:00', '2016-12-25 00:29:34', '2016-12-25 00:29:34'),
(5, 'Ratna ', 'Ratna dan Galih', 'Jalan Laswi Bandung', '02267653326', 'Bale Dayang Sumbi', '2017-07-16', 'Tunangan', '08:00:00', '2017-01-07 20:46:13', '2017-01-07 20:46:13'),
(6, 'Rahman', 'Rahman dan Ina', 'Jalan Cigadung Raya Bandung', '7809765645', 'Bale Dayang Sumbi', '2017-05-21', 'Pernikahan', '08:00:00', '2017-01-07 20:47:50', '2017-01-07 20:47:50');

-- --------------------------------------------------------

--
-- Table structure for table `inputs`
--

CREATE TABLE `inputs` (
  `id` int(10) UNSIGNED NOT NULL,
  `pemesan` text COLLATE utf8_unicode_ci,
  `alamat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tgl_sewa` date DEFAULT NULL,
  `jns_kegiatan` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `waktu` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `inputs`
--

INSERT INTO `inputs` (`id`, `pemesan`, `alamat`, `telepon`, `tgl_sewa`, `jns_kegiatan`, `waktu`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:32:41', '2017-01-07 08:32:41'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:34:18', '2017-01-07 08:34:18'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:35:46', '2017-01-07 08:35:46'),
(4, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:35:49', '2017-01-07 08:35:49'),
(5, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:39:06', '2017-01-07 08:39:06'),
(6, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:44:30', '2017-01-07 08:44:30'),
(7, NULL, NULL, NULL, NULL, NULL, NULL, '2017-01-07 08:44:32', '2017-01-07 08:44:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2016_12_18_023735_CreateTableForm', 1),
(8, '2017_01_07_095648_create_inputdata_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'riri', 'riri@itenas.ac.id', '$2y$10$4TPLyl81D68AwAPW9r.Dm.gKdx4PsKNZ2JlFhD72h5ZRduO0hYxdW', 'ymaOEEBJMZuRBkiWhUbJ31Fuy28ui5OZhfaK2VoAYg3J3sTY9F4Np7Bx46yT', '2016-12-19 09:17:07', '2017-01-07 10:01:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inputs`
--
ALTER TABLE `inputs`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `inputs`
--
ALTER TABLE `inputs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
