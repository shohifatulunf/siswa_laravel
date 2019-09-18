-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 05:23 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(20) UNSIGNED NOT NULL,
  `nip` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nama_guru` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama_guru`, `tanggal_lahir`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
(2, '2002', 'Bias Damiasa', '2019-08-06', 'Perempuan', '2019-08-30 12:32:32', '0000-00-00 00:00:00'),
(3, '2006', 'Achmad Ilham Ramadhani', '2019-09-17', 'Laki-laki', '2019-09-02 07:35:33', '2019-09-02 00:35:33'),
(4, '2007', 'Firdausa', '2019-09-26', 'Laki-laki', '2019-09-11 16:58:05', '2019-09-11 16:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(20) UNSIGNED NOT NULL,
  `nama_kelas` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `nama_kelas`, `created_at`, `updated_at`) VALUES
(7, 'XI RPL 9', '2019-09-16 23:09:48', '2019-09-16 16:09:48'),
(8, 'XI RPL 5', '2019-08-30 11:06:06', '2019-08-30 11:06:14'),
(9, 'XI RPL 2', '2019-09-06 02:26:18', '2019-09-05 19:26:18'),
(10, 'XI RPL 7', '2019-09-16 16:11:05', '2019-09-16 16:11:05');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_24_055221_create_table_siswa', 1),
(4, '2019_08_30_005107_create_table_kelas', 2),
(5, '2019_08_30_104149_create_table_guru', 3),
(6, '2019_09_03_004214_create_table_walisiswa', 4),
(7, '2019_09_04_232603_create_table_walikelas', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shohifatululaa@gmail.com', 'qwer1234', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelas` int(20) UNSIGNED DEFAULT NULL,
  `nisn` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nama_siswa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `id_kelas`, `nisn`, `nama_siswa`, `tanggal_lahir`, `jenis_kelamin`, `image`, `created_at`, `updated_at`) VALUES
(8, 8, '1001', 'Shohifatul Ula Nisfatul Fajri', '2003-01-16', 'Perempuan', 'ifa.jpg', '2019-09-10 02:30:08', '2019-09-09 19:30:08'),
(10, 9, '1002', 'Amalia Putri', '2002-11-21', 'Perempuan', 'putri.jpg', '2019-09-05 12:35:13', '2019-09-05 05:32:46'),
(11, 7, '1003', 'Dwi Rian Bagus Saputra', '2002-04-17', 'Laki-laki', 'rian.jpg', '2019-09-06 01:40:49', '2019-09-05 18:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Ifa', 'shohifatul_ula_27rpl@student.smktelkom-mlg.sch.id', NULL, '$2y$10$G9iUCUdPeCcX2gc2TIc1gOMWlN3i27NxeqFgJX5Q5cxVYuJpfimiW', NULL, '2019-08-26 18:05:21', '2019-08-26 18:05:21'),
(4, 'Ula', 'shohifatululaa@gmail.com', NULL, '$2y$10$QjXRr8CC8KcpyCajjl32Benm80yKV1APD881SJe9FyrPCCO5tnJMC', NULL, '2019-08-26 18:11:43', '2019-08-26 18:11:43'),
(5, 'ifaq', 'eds@gamil.com', NULL, '$2y$10$4n5x..hePfuE15CKTNFRdOoaVGkV4lY0rr9fuz/90apd3LmT0sfve', NULL, '2019-08-28 17:43:39', '2019-08-28 17:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `walikelas`
--

CREATE TABLE `walikelas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_guru` int(20) UNSIGNED NOT NULL,
  `id_kelas` int(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `walikelas`
--

INSERT INTO `walikelas` (`id`, `id_guru`, `id_kelas`, `created_at`, `updated_at`) VALUES
(5, 2, 8, '2019-09-16 10:09:00', '2019-09-16 03:09:00'),
(6, 4, 9, '2019-09-16 03:51:58', '2019-09-16 03:51:58'),
(7, 3, 7, '2019-09-16 03:52:33', '2019-09-16 03:52:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
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
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswa_nisn_unique` (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`);

--
-- Constraints for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD CONSTRAINT `walikelas_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`),
  ADD CONSTRAINT `walikelas_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
