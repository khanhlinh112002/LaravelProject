-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 06:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
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
(5, '2022_07_01_015551_create_t__food_table', 1),
(6, '2022_07_01_043118_type', 2);

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
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Thực phẩm khô', '2022-06-30 21:35:00', '2022-06-30 21:35:00'),
(2, 'Rau hữu cơ', '2022-06-30 21:35:00', '2022-06-30 21:35:00');

-- --------------------------------------------------------

--
-- Table structure for table `t__food`
--

CREATE TABLE `t__food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t__food`
--

INSERT INTO `t__food` (`id`, `name`, `description`, `image`, `price`, `discount`, `category`, `created_at`, `updated_at`) VALUES
(11, 'LtqlpdebCS', 'NfzVyAMMkc8BWZ1kKgU0eoV069jfHFjuMi0bln1yKxBBSlRUU9', '4ifN1hYLje', 73760, 7180, 'Thực phẩm khô', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(12, 'dPDGrc3TDD', 'nk9crpacKGxWOQvmEFSTpLIhTA6zwDWBy6hn51vqK38ECJcS5w', 'IapLb2o9Cg', 65855, 8548, 'Thực phẩm khô', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(13, 'MVYqlaNbGO', 'VvBIlNZQmnD0GIInaCloAFUV5QUeusqZ77ciYZafQoHI0HX8YS', 'VjwmbLxOtr', 85540, 5822, 'Thực phẩm khô', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(14, '7w8GIFocE2', 'SnZF9vqsCECiJxgJOK4ALkOcNJ8EAIxHayHpakAV3FizjBXyTa', 'xd0FlqosQf', 40417, 5408, 'Thực phẩm khô', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(15, 'Qaa461QgAv', 'nQzglgN1R4U2wrQR11pDzpKnULV8bIsgm15N5WSsOLXxlcJRda', 'tZ4bkYlQII', 61587, 9888, 'Rau hữu cơ', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(16, 'VMxNWrmpjt', 'YiXuz401YKu17nupUVvUibRE4ZenxFvHvfGgGTCExELEt2LQgK', 'y5ri0SfCdo', 39078, 7047, 'Rau hữu cơ', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(17, '4nR8QC9VcE', 'FF5yh8oLY8vjqEkBSMAWdXkcYJlmv4Ugm11xwlpMcwSL4LOq03', '3KZrIIQ3sS', 86268, 7810, 'Rau hữu cơ', '2022-06-30 19:10:51', '2022-06-30 19:10:51'),
(18, 'LbJ291vK4i', 'cx0YQfwxd5JqquI5CWtBMk1frFJFCfc58CYf9Qy3bzYl2wlskp', 'EC5jaP87rR', 64408, 5463, 'Rau hữu cơ', '2022-06-30 19:10:52', '2022-06-30 19:10:52'),
(19, '2LkWkcIOWd', 'eZWwPwl9zYuNxLLgttkU0vQiG2wdkDjQRam16ceEew3fD5Y6rk', 'Yr1dmZRvKH', 57699, 8505, 'Thực phẩm khô', '2022-06-30 19:10:52', '2022-06-30 19:10:52'),
(20, 'o7eGOr0fYV', 'cDhVjM4pDKZTZ5LGlAghBeMeda6VWjax9rl94WnrXug8G3aNOz', '2u7V5uYklF', 49134, 6946, 'Rau hữu cơ', '2022-06-30 19:10:52', '2022-06-30 19:10:52'),
(21, 'Củ cải trắng', 'Củ cải trắng ăn rất dở', 'cach-trong-cu-cai-trang.jpg', 15000, 1000, 'Rau hữu cơ', '2022-06-30 20:03:05', '2022-06-30 20:03:05'),
(22, 'Củ cải trắng', 'Củ cải trắng ăn rất dở', 'cach-trong-cu-cai-trang.jpg', 20000, 1000, 'Rau hữu cơ', '2022-06-30 20:13:19', '2022-06-30 20:13:19'),
(23, 'Khánh Linh', '111', 'cach-trong-cu-cai-trang.jpg', 15000, 2000, 'Rau hữu cơ', '2022-06-30 20:44:19', '2022-06-30 20:44:19');

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
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t__food`
--
ALTER TABLE `t__food`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t__food`
--
ALTER TABLE `t__food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
