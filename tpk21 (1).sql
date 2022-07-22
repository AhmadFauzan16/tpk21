-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 05:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpk21`
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
(5, '2021_12_09_013758_create_tb_pegawai_kontrak', 1),
(6, '2021_12_09_013819_create_tb_kriteria', 1),
(7, '2021_12_09_013832_create_tb_kriteria_sub', 1),
(8, '2021_12_09_013851_create_tb_parameter', 2),
(9, '2021_12_09_013905_create_tb_bobot_gap', 2),
(10, '2021_12_09_074048_create_tb_penilaian', 3),
(11, '2021_12_16_035839_create_tb_nilai', 3);

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
-- Table structure for table `tb_bobot_gap`
--

CREATE TABLE `tb_bobot_gap` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `selisih` int(11) NOT NULL,
  `bobotN` double NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bobot_gap`
--

INSERT INTO `tb_bobot_gap` (`id`, `selisih`, `bobotN`, `ket`, `created_at`, `updated_at`) VALUES
(1, 0, 5, 'Tidak ada selisih(Sesuai Kompetensi)', NULL, NULL),
(2, 1, 4.5, 'Kompetensi pegawai kelebihan 1 tingkat/level', NULL, NULL),
(3, -1, 4, 'Kompetensi pegawai kekurangan 1 tingkat/level', NULL, NULL),
(4, 2, 3.5, 'Kompetensi pegawai kelebihan 1 tingkat/level', NULL, NULL),
(5, -2, 3, 'Kompetensi pegawai kekurangan 1 tingkat/level', NULL, NULL),
(6, 3, 2.5, 'Kompetensi pegawai kelebihan 1 tingkat/level', NULL, NULL),
(7, -3, 2, 'Kompetensi pegawai kekurangan 1 tingkat/level', NULL, NULL),
(8, 4, 1.5, 'Kompetensi pegawai kelebihan 1 tingkat/level', NULL, NULL),
(9, -4, 1, 'Kompetensi pegawai kekurangan 1 tingkat/level', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `bobotCF` double NOT NULL,
  `bobotSF` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id`, `kriteria`, `bobot`, `bobotCF`, `bobotSF`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Internal Skill', 50, 60, 40, NULL, '2021-12-30 08:42:00', NULL),
(2, 'Technical Skill', 40, 80, 20, NULL, NULL, NULL),
(3, 'Utilities SKill', 10, 70, 30, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria_sub`
--

CREATE TABLE `tb_kriteria_sub` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faktor` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_ideal` int(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kriteria_sub`
--

INSERT INTO `tb_kriteria_sub` (`id`, `id_kriteria`, `sub`, `faktor`, `nilai_ideal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', 'Safety', 'CF', 5, NULL, NULL, NULL),
(2, '1', 'Disiplin', 'CF', 4, NULL, NULL, NULL),
(3, '1', '5s', 'CF', 4, NULL, '2021-12-30 08:31:57', NULL),
(4, '1', 'Quality', 'SF', 4, NULL, NULL, NULL),
(5, '1', 'Productivity', 'SF', 4, NULL, NULL, NULL),
(6, '2', 'Mesin RF', 'CF', 4, NULL, NULL, NULL),
(7, '2', 'Mesin Folder', 'CF', 4, NULL, NULL, NULL),
(8, '2', 'Mesin Trust', 'CF', 4, NULL, NULL, NULL),
(9, '2', 'Mesin Crimping', 'CF', 4, NULL, NULL, NULL),
(10, '2', 'Compressor', 'SF', 5, NULL, NULL, NULL),
(11, '2', 'Crane', 'SF', 4, NULL, NULL, NULL),
(12, '2', 'Uppender', 'SF', 5, NULL, NULL, NULL),
(13, '2', 'Forklift', 'SF', 4, NULL, NULL, NULL),
(14, '3', 'Troubleshooting and Maintenance', 'CF', 4, NULL, NULL, NULL),
(15, '3', 'ROA and Yield', 'CF', 5, NULL, NULL, NULL),
(16, '3', 'Training/Seminar/Workshop', 'SF', 4, NULL, NULL, NULL),
(17, '1', 'new sub 1', 'CF', 4, '2021-12-28 03:03:18', '2021-12-30 02:47:16', '2021-12-30 02:47:16'),
(18, '1', 'new sub', 'CF', 4, '2021-12-28 03:16:39', '2021-12-30 02:47:10', '2021-12-30 02:47:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pegawai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sub_kat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `id_pegawai`, `id_kategori`, `id_sub_kat`, `nilai`, `created_at`, `updated_at`) VALUES
(833, '1', '1', '1', 4, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(834, '1', '1', '2', 3, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(835, '1', '1', '3', 3, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(836, '1', '1', '4', 3, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(837, '1', '1', '5', 4, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(838, '1', '2', '6', 4, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(839, '1', '2', '7', 3, '2021-12-30 08:03:18', '2021-12-30 08:03:18'),
(840, '1', '2', '8', 3, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(841, '1', '2', '9', 4, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(842, '1', '2', '10', 4, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(843, '1', '2', '11', 3, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(844, '1', '2', '12', 4, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(845, '1', '2', '13', 4, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(846, '1', '3', '14', 3, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(847, '1', '3', '15', 5, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(848, '1', '3', '16', 3, '2021-12-30 08:03:19', '2021-12-30 08:03:19'),
(851, '2', '1', '1', 3, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(852, '2', '1', '2', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(853, '2', '1', '3', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(854, '2', '1', '4', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(855, '2', '1', '5', 3, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(856, '2', '2', '6', 3, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(857, '2', '2', '7', 3, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(858, '2', '2', '8', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(859, '2', '2', '9', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(860, '2', '2', '10', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(861, '2', '2', '11', 3, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(862, '2', '2', '12', 3, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(863, '2', '2', '13', 4, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(864, '2', '3', '14', 2, '2021-12-30 08:03:29', '2021-12-30 08:03:29'),
(865, '2', '3', '15', 5, '2021-12-30 08:03:30', '2021-12-30 08:03:30'),
(866, '2', '3', '16', 4, '2021-12-30 08:03:30', '2021-12-30 08:03:30'),
(869, '3', '1', '1', 3, '2021-12-30 08:03:39', '2021-12-30 08:03:39'),
(870, '3', '1', '2', 4, '2021-12-30 08:03:39', '2021-12-30 08:03:39'),
(871, '3', '1', '3', 3, '2021-12-30 08:03:39', '2021-12-30 08:03:39'),
(872, '3', '1', '4', 5, '2021-12-30 08:03:40', '2021-12-30 08:03:40'),
(873, '3', '1', '5', 3, '2021-12-30 08:03:40', '2021-12-30 08:03:40'),
(874, '3', '2', '6', 2, '2021-12-30 08:03:40', '2021-12-30 08:03:40'),
(875, '3', '2', '7', 3, '2021-12-30 08:03:40', '2021-12-30 08:03:40'),
(876, '3', '2', '8', 3, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(877, '3', '2', '9', 4, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(878, '3', '2', '10', 3, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(879, '3', '2', '11', 3, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(880, '3', '2', '12', 4, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(881, '3', '2', '13', 3, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(882, '3', '3', '14', 4, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(883, '3', '3', '15', 3, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(884, '3', '3', '16', 3, '2021-12-30 08:03:41', '2021-12-30 08:03:41'),
(887, '4', '1', '1', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(888, '4', '1', '2', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(889, '4', '1', '3', 4, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(890, '4', '1', '4', 4, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(891, '4', '1', '5', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(892, '4', '2', '6', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(893, '4', '2', '7', 2, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(894, '4', '2', '8', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(895, '4', '2', '9', 4, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(896, '4', '2', '10', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(897, '4', '2', '11', 4, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(898, '4', '2', '12', 3, '2021-12-30 08:03:56', '2021-12-30 08:03:56'),
(899, '4', '2', '13', 3, '2021-12-30 08:03:57', '2021-12-30 08:03:57'),
(900, '4', '3', '14', 3, '2021-12-30 08:03:57', '2021-12-30 08:03:57'),
(901, '4', '3', '15', 3, '2021-12-30 08:03:57', '2021-12-30 08:03:57'),
(902, '4', '3', '16', 3, '2021-12-30 08:03:57', '2021-12-30 08:03:57'),
(905, '5', '1', '1', 4, '2021-12-30 08:04:05', '2021-12-30 08:04:05'),
(906, '5', '1', '2', 3, '2021-12-30 08:04:05', '2021-12-30 08:04:05'),
(907, '5', '1', '3', 3, '2021-12-30 08:04:05', '2021-12-30 08:04:05'),
(908, '5', '1', '4', 4, '2021-12-30 08:04:05', '2021-12-30 08:04:05'),
(909, '5', '1', '5', 3, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(910, '5', '2', '6', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(911, '5', '2', '7', 3, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(912, '5', '2', '8', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(913, '5', '2', '9', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(914, '5', '2', '10', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(915, '5', '2', '11', 3, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(916, '5', '2', '12', 3, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(917, '5', '2', '13', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(918, '5', '3', '14', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(919, '5', '3', '15', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(920, '5', '3', '16', 4, '2021-12-30 08:04:06', '2021-12-30 08:04:06'),
(923, '6', '1', '1', 3, '2021-12-30 08:04:36', '2021-12-30 08:04:36'),
(924, '6', '1', '2', 4, '2021-12-30 08:04:36', '2021-12-30 08:04:36'),
(925, '6', '1', '3', 2, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(926, '6', '1', '4', 3, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(927, '6', '1', '5', 4, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(928, '6', '2', '6', 5, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(929, '6', '2', '7', 3, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(930, '6', '2', '8', 3, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(931, '6', '2', '9', 2, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(932, '6', '2', '10', 3, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(933, '6', '2', '11', 4, '2021-12-30 08:04:37', '2021-12-30 08:04:37'),
(934, '6', '2', '12', 3, '2021-12-30 08:04:38', '2021-12-30 08:04:38'),
(935, '6', '2', '13', 4, '2021-12-30 08:04:38', '2021-12-30 08:04:38'),
(936, '6', '3', '14', 3, '2021-12-30 08:04:38', '2021-12-30 08:04:38'),
(937, '6', '3', '15', 3, '2021-12-30 08:04:38', '2021-12-30 08:04:38'),
(938, '6', '3', '16', 3, '2021-12-30 08:04:38', '2021-12-30 08:04:38'),
(941, '7', '1', '1', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(942, '7', '1', '2', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(943, '7', '1', '3', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(944, '7', '1', '4', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(945, '7', '1', '5', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(946, '7', '2', '6', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(947, '7', '2', '7', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(948, '7', '2', '8', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(949, '7', '2', '9', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(950, '7', '2', '10', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(951, '7', '2', '11', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(952, '7', '2', '12', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(953, '7', '2', '13', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(954, '7', '3', '14', 4, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(955, '7', '3', '15', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(956, '7', '3', '16', 3, '2021-12-30 08:04:53', '2021-12-30 08:04:53'),
(959, '8', '1', '1', 3, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(960, '8', '1', '2', 3, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(961, '8', '1', '3', 2, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(962, '8', '1', '4', 4, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(963, '8', '1', '5', 4, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(964, '8', '2', '6', 3, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(965, '8', '2', '7', 3, '2021-12-30 08:05:02', '2021-12-30 08:05:02'),
(966, '8', '2', '8', 3, '2021-12-30 08:05:03', '2021-12-30 08:05:03'),
(967, '8', '2', '9', 2, '2021-12-30 08:05:03', '2021-12-30 08:05:03'),
(968, '8', '2', '10', 4, '2021-12-30 08:05:04', '2021-12-30 08:05:04'),
(969, '8', '2', '11', 3, '2021-12-30 08:05:04', '2021-12-30 08:05:04'),
(970, '8', '2', '12', 4, '2021-12-30 08:05:04', '2021-12-30 08:05:04'),
(971, '8', '2', '13', 3, '2021-12-30 08:05:05', '2021-12-30 08:05:05'),
(972, '8', '3', '14', 4, '2021-12-30 08:05:05', '2021-12-30 08:05:05'),
(973, '8', '3', '15', 4, '2021-12-30 08:05:05', '2021-12-30 08:05:05'),
(974, '8', '3', '16', 5, '2021-12-30 08:05:05', '2021-12-30 08:05:05'),
(977, '9', '1', '1', 4, '2021-12-30 08:05:14', '2021-12-30 08:05:14'),
(978, '9', '1', '2', 4, '2021-12-30 08:05:14', '2021-12-30 08:05:14'),
(979, '9', '1', '3', 3, '2021-12-30 08:05:14', '2021-12-30 08:05:14'),
(980, '9', '1', '4', 3, '2021-12-30 08:05:14', '2021-12-30 08:05:14'),
(981, '9', '1', '5', 3, '2021-12-30 08:05:14', '2021-12-30 08:05:14'),
(982, '9', '2', '6', 2, '2021-12-30 08:05:15', '2021-12-30 08:05:15'),
(983, '9', '2', '7', 4, '2021-12-30 08:05:15', '2021-12-30 08:05:15'),
(984, '9', '2', '8', 3, '2021-12-30 08:05:15', '2021-12-30 08:05:15'),
(985, '9', '2', '9', 3, '2021-12-30 08:05:15', '2021-12-30 08:05:15'),
(986, '9', '2', '10', 3, '2021-12-30 08:05:15', '2021-12-30 08:05:15'),
(987, '9', '2', '11', 3, '2021-12-30 08:05:15', '2021-12-30 08:05:15'),
(988, '9', '2', '12', 4, '2021-12-30 08:05:16', '2021-12-30 08:05:16'),
(989, '9', '2', '13', 4, '2021-12-30 08:05:16', '2021-12-30 08:05:16'),
(990, '9', '3', '14', 3, '2021-12-30 08:05:16', '2021-12-30 08:05:16'),
(991, '9', '3', '15', 3, '2021-12-30 08:05:16', '2021-12-30 08:05:16'),
(992, '9', '3', '16', 4, '2021-12-30 08:05:16', '2021-12-30 08:05:16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_parameter`
--

CREATE TABLE `tb_parameter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_parameter`
--

INSERT INTO `tb_parameter` (`id`, `rating`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Belum Terbukti', '1', NULL, NULL),
(2, 'Masih Lemah', '2', NULL, NULL),
(3, 'Cukup', '3', NULL, NULL),
(4, 'Kompeten', '4', NULL, NULL),
(5, 'Sangat Memuaskan', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id`, `nama`, `divisi`, `posisi`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Benny Wijaya', 'divisi3', 'Manufacturer', 'kontrak', NULL, '2021-12-30 06:42:32', NULL),
(2, 'Dalvin Ginting', 'divisi3', 'Technical Logistic', 'kontrak', NULL, NULL, NULL),
(3, 'Dedi Harmoko', 'divisi3', 'Technical Operator', 'kontrak', NULL, NULL, NULL),
(4, 'Dedy Sofyan', 'divisi3', 'Technical Logistic', 'kontrak', NULL, NULL, NULL),
(5, 'Hendrianto', 'divisi3', 'Technical Logistic', 'kontrak', NULL, NULL, NULL),
(6, 'Himinas', 'divisi3', 'Quality Operator', 'kontrak', NULL, NULL, NULL),
(7, 'Idris Purba', 'divisi3', 'Manufacturer', 'kontrak', NULL, NULL, NULL),
(8, 'Saimun', 'divisi3', 'Manufacturer', 'kontrak', NULL, NULL, NULL),
(9, 'Ahmad Fauzan', 'divisi1', 'Posisi1', 'kontrak', '2021-12-08 23:47:36', '2021-12-08 23:47:36', NULL),
(10, 'who?', 'divisi1', 'Posisi1', 'Tetap', '2021-12-15 20:25:58', '2021-12-15 20:25:58', NULL),
(11, 'whokonrak', 'divisi1', 'Posisi1', 'Kontrak', '2021-12-15 20:26:35', '2021-12-15 20:26:35', NULL),
(12, 'yep', 'divisi3', 'Posisi2', 'Tetap', '2021-12-16 00:24:22', '2021-12-16 00:24:22', NULL),
(13, 'yepkontrak', 'divisi1', 'Posisi1', 'Kontrak', '2021-12-16 00:24:36', '2021-12-16 00:24:36', NULL),
(14, 'mario', 'divisi1', 'Posisi1', 'Kontrak', '2021-12-16 02:31:40', '2021-12-16 02:31:40', NULL),
(15, 'test 2312', 'divisi2', 'Posisi1', 'Kontrak', '2021-12-22 22:39:14', '2021-12-27 19:35:39', NULL),
(16, 'Airlangga', 'divisi1', 'Posisi2', 'Kontrak', '2021-12-23 02:37:46', '2021-12-27 19:36:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_krit`
-- (See below for the actual view)
--
CREATE TABLE `v_krit` (
`idk` bigint(20) unsigned
,`kriteria` varchar(255)
,`sub` varchar(255)
,`ids` bigint(20) unsigned
,`faktor` varchar(2)
,`ideal` int(12)
,`del` timestamp
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_penilaian`
-- (See below for the actual view)
--
CREATE TABLE `v_penilaian` (
`id_k` bigint(20) unsigned
,`kriteria` varchar(255)
,`id_sub` bigint(20) unsigned
,`sub` varchar(255)
,`faktor` varchar(2)
,`bobot` double
,`bobotCF` double
,`bobotSF` double
,`id_pegawai` bigint(20) unsigned
,`nama` varchar(255)
,`nilai_ideal` int(12)
,`nilai` int(11)
,`yep` bigint(13)
,`yepp` decimal(2,1)
);

-- --------------------------------------------------------

--
-- Structure for view `v_krit`
--
DROP TABLE IF EXISTS `v_krit`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_krit`  AS  select `tb_kriteria`.`id` AS `idk`,`tb_kriteria`.`kriteria` AS `kriteria`,`tb_kriteria_sub`.`sub` AS `sub`,`tb_kriteria_sub`.`id` AS `ids`,`tb_kriteria_sub`.`faktor` AS `faktor`,`tb_kriteria_sub`.`nilai_ideal` AS `ideal`,`tb_kriteria_sub`.`deleted_at` AS `del` from (`tb_kriteria_sub` join `tb_kriteria` on(`tb_kriteria`.`id` = `tb_kriteria_sub`.`id_kriteria`)) where `tb_kriteria_sub`.`deleted_at` is null ;

-- --------------------------------------------------------

--
-- Structure for view `v_penilaian`
--
DROP TABLE IF EXISTS `v_penilaian`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_penilaian`  AS  select `tb_kriteria`.`id` AS `id_k`,`tb_kriteria`.`kriteria` AS `kriteria`,`tb_kriteria_sub`.`id` AS `id_sub`,`tb_kriteria_sub`.`sub` AS `sub`,`tb_kriteria_sub`.`faktor` AS `faktor`,`tb_kriteria`.`bobot` AS `bobot`,`tb_kriteria`.`bobotCF` AS `bobotCF`,`tb_kriteria`.`bobotSF` AS `bobotSF`,`tb_pegawai`.`id` AS `id_pegawai`,`tb_pegawai`.`nama` AS `nama`,`tb_kriteria_sub`.`nilai_ideal` AS `nilai_ideal`,`tb_nilai`.`nilai` AS `nilai`,`tb_nilai`.`nilai` - `tb_kriteria_sub`.`nilai_ideal` AS `yep`,case `tb_nilai`.`nilai` - `tb_kriteria_sub`.`nilai_ideal` when '0' then 5 when '1' then 4.5 when '-1' then 4 when '2' then 3.5 when '-2' then 3 when '3' then 2.5 when '-3' then 2 when '4' then 1.5 when '4' then 1 else 0 end AS `yepp` from (((`tb_kriteria` join `tb_kriteria_sub` on(`tb_kriteria`.`id` = `tb_kriteria_sub`.`id_kriteria`)) join `tb_nilai` on(`tb_nilai`.`id_sub_kat` = `tb_kriteria_sub`.`id`)) join `tb_pegawai` on(`tb_pegawai`.`id` = `tb_nilai`.`id_pegawai`)) where `tb_kriteria_sub`.`deleted_at` is null and `tb_pegawai`.`deleted_at` is null and `tb_kriteria`.`deleted_at` is null group by `tb_kriteria`.`kriteria`,`tb_kriteria_sub`.`sub`,`tb_pegawai`.`nama` order by `tb_pegawai`.`nama`,`tb_kriteria`.`id`,`tb_kriteria_sub`.`id` ;

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tb_bobot_gap`
--
ALTER TABLE `tb_bobot_gap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kriteria_sub`
--
ALTER TABLE `tb_kriteria_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_bobot_gap`
--
ALTER TABLE `tb_bobot_gap`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1013;

--
-- AUTO_INCREMENT for table `tb_parameter`
--
ALTER TABLE `tb_parameter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
