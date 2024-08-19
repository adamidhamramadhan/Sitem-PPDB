-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 01:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_15_120634_create_pendaftaran_table', 1),
(6, '2022_06_20_074303_create_nilai_rapot_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_rapot`
--

CREATE TABLE `nilai_rapot` (
  `id` int(10) UNSIGNED NOT NULL,
  `pendaftaran_id` int(10) UNSIGNED DEFAULT NULL,
  `bahasa_indonesia` int(11) NOT NULL,
  `bahasa_inggris` int(11) NOT NULL,
  `mtk` int(11) NOT NULL,
  `ipa` int(11) NOT NULL,
  `total_rata2` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nilai_rapot`
--

INSERT INTO `nilai_rapot` (`id`, `pendaftaran_id`, `bahasa_indonesia`, `bahasa_inggris`, `mtk`, `ipa`, `total_rata2`, `created_at`, `updated_at`) VALUES
(5, 7, 90, 90, 90, 90, 90, '2022-07-27 02:04:49', '2022-07-27 02:04:49'),
(6, 8, 90, 90, 86, 86, 88, '2022-08-21 12:09:43', '2022-08-21 12:09:43'),
(7, 5, 73, 79, 74, 72, 75, '2022-08-21 12:15:13', '2022-08-21 12:15:13'),
(8, 9, 88, 87, 85, 86, 86, '2022-08-22 07:02:02', '2022-08-22 07:02:02'),
(9, 9, 88, 88, 88, 88, 88, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama_siswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_akte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_ayah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_ibu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asal_sekolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_rapot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_ijazah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pendaftaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`id`, `user_id`, `nama_siswa`, `nisn`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `foto`, `foto_akte`, `agama`, `alamat`, `nohp`, `nama_ayah`, `pekerjaan_ayah`, `nohp_ayah`, `nama_ibu`, `pekerjaan_ibu`, `nohp_ibu`, `asal_sekolah`, `foto_rapot`, `foto_ijazah`, `status_pendaftaran`, `created_at`, `updated_at`) VALUES
(5, 6, 'Rahwini Harpa Helda', '1234567898', '1771040912010099', 'Laki-laki', 'Bengkulu', '2001-11-01', '20220821191820.JPG', '20220821191820.jpeg', 'Islam', 'Perumahana Arga Jaya', '0821', 'Firman', 'PNS', '0921', 'Mirna', 'PNS', '0812', 'SMPN 02 Kota Bengkulu', '20220821191820.pdf', '20220821191820.pdf', 'Tidak Lolos', '2022-06-22 02:04:32', '2022-08-21 12:19:36'),
(6, 7, 'Mark Zuckerberg', '1234567822', '1771040912010022', 'Laki-laki', 'Bengkulu', '2001-11-11', '20220708102900.jpg', '20220708102900.jpg', 'Kristen', 'Perumahan Jaya Kusua No.79', '087656476543', 'Firman', 'PNS', '087654345263', 'sarah', 'PNS', '081234526765', 'SMPN 01 Kota Lembang', '20220708102900.pdf', '20220708102900.pdf', NULL, '2022-07-08 03:29:00', '2022-07-08 03:29:00'),
(7, 8, 'Rangga Pranatoly', '1234567877', '1771040912010077', 'Laki-laki', 'Bengkulu', '2000-02-01', '20220727084546.jpg', '20220727084546.jpeg', 'Islam', 'Prumahan Griya Mentari Muara Bangkahulu', '087654676545', 'Pratanoly', 'PNS', '084567645637', 'Mirna', 'PNS', '082345625467', 'SMPN 01 Kota Bengkulu', '20220727084546.pdf', '20220727084546.pdf', 'Lolos', '2022-07-27 01:45:46', '2022-07-27 02:08:38'),
(8, 10, 'Ardho Febriansyah', '1234567881', '1771020201790081', 'Laki-laki', 'Bengkulu', '2000-01-01', '20220821190830.jpg', '20220821190830.jpeg', 'Islam', 'Jalan Sention nomor 70 Pasar Minggu', '081345672654', 'Firman Zen', 'PNS', '081245673645', 'Siti Syarifah', 'PNS', '081456345781', 'SMPN 01 Kota Bengkulu', '20220821190830.pdf', '20220821190830.pdf', 'Lolos', '2022-08-21 12:08:31', '2022-08-21 12:11:17'),
(9, 11, 'Yogi Pratama', '1234567845', '1234567890123489', 'Laki-laki', 'Bengkulu', '2001-01-04', '20220822140103.jpg', '20220822140103.jpeg', 'Islam', 'Perumahan Medan Baru No 70 kel kandang limun kecamatan muara bangkahulu', '085346785678', 'Basuki', 'PNS', '085643567898', 'Mirna', 'PNS', '082378657867', 'SMPN 01 Kota Bengkulu', '20220822140103.pdf', '20220822140103.pdf', 'Lolos', '2022-08-22 07:01:03', '2022-08-22 07:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'siswa',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nisn`, `email`, `username`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', '', 'admin@gmail.com', 'admin', NULL, '$2y$10$4cSaclW7XUtupmojmbnpL.DuwSsbDwJtJVwryshEwUdcdsp1w1t5q', 'admin', NULL, '2022-06-20 06:49:08', '2022-06-20 06:49:08'),
(6, 'Rahwini Harpa Helda', '1234567898', 'wiwi@gmail.com', 'rahwini', NULL, '$2y$10$bj34cviSHQ94PjvZioqR4eqVIz2TTjc5y1d7l9duH23s7sc7xWt9.', 'siswa', NULL, '2022-06-22 00:35:01', '2022-06-22 00:35:01'),
(7, 'Mark Zuckerberg', '1234567822', 'mark@gmail.com', 'mark', NULL, '$2y$10$jcona0EpvXTg/xIhalOE8.34E4hdNHO7ga0YjadHU.kErwAvSU8T6', 'siswa', NULL, '2022-07-08 03:26:18', '2022-07-08 03:26:18'),
(8, 'Rangga Pranatoly', '1234567877', 'rangga@gmail.com', 'rangga', NULL, '$2y$10$i0xfVvORZpmZw.6VXqfemuYW8FCpB0tW5csA3u/.iL/wJ5VTRoMbC', 'siswa', NULL, '2022-07-27 01:39:27', '2022-07-27 01:39:27'),
(9, 'Angga Renaldi', '1234567889', 'angga@gmail.com', 'angga', NULL, '$2y$10$eFpMyK/87iut3NEASELUieIdOiU75thFGfrrXoNRgN1kKccmnUQRC', 'siswa', NULL, '2022-07-27 02:46:58', '2022-07-27 02:46:58'),
(10, 'Ardho Febriansyah', '1234567881', 'ardho@gmail.com', 'ardho', NULL, '$2y$10$WB8vEIVSOPXG.K2zYMlZn.1nzyn8fu2e6nPPis5COJD7T1gMdiMeS', 'siswa', NULL, '2022-08-21 12:04:43', '2022-08-21 12:04:43'),
(11, 'Yogi Pratama', '1234567845', 'yogi@gmail.com', 'yogi', NULL, '$2y$10$XcR0mbN4QQCvTjZPMZ/Uz.lEulcGUTSnuWXxX9HzbDL4mdCD4iD4.', 'siswa', NULL, '2022-08-22 06:57:56', '2022-08-22 06:57:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_rapot`
--
ALTER TABLE `nilai_rapot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nilai_rapot_pendaftaran_id_foreign` (`pendaftaran_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pendaftaran_nisn_unique` (`nisn`),
  ADD UNIQUE KEY `pendaftaran_nik_unique` (`nik`),
  ADD KEY `pendaftaran_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_nisn_unique` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `nilai_rapot`
--
ALTER TABLE `nilai_rapot`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_rapot`
--
ALTER TABLE `nilai_rapot`
  ADD CONSTRAINT `nilai_rapot_pendaftaran_id_foreign` FOREIGN KEY (`pendaftaran_id`) REFERENCES `pendaftaran` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
