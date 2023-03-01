-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 04:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payspp`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'in stock',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_code`, `title`, `cover`, `harga`, `slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'A001-001', 'PHP for nob', 'PHP for nob-1672304348-jpg', 10000, 'php-for-nob', 'not available', '2022-12-22 23:16:25', '2023-01-10 21:18:46', NULL),
(2, 'A001-002', 'Programer untuk pemula', 'Programer untuk pemula-1672306050-png', 9000, 'programer-untuk-pemula', 'not available', '2022-12-22 23:21:40', '2023-01-04 01:32:25', NULL),
(8, 'A001-007B', 'Lolines is my bestfriend', NULL, 0, 'hhhhh3', 'in stock', '2022-12-23 01:44:35', '2022-12-29 02:26:31', '2022-12-29 02:26:31'),
(9, 'A001-004', 'PERGI KE SYURGA', '', 12000, 'pergi-ke-syurga', 'not available', '2022-12-25 20:15:01', '2022-12-28 19:23:37', NULL),
(10, 'A001-008', 'hhhhh', '', 0, 'hhhhh', 'in stock', '2022-12-25 20:25:27', '2022-12-25 21:21:30', '2022-12-25 21:21:30'),
(11, 'A001-009', 'HUHU', NULL, 0, 'huhu', 'in stock', '2022-12-25 20:27:08', '2022-12-29 01:45:00', '2022-12-29 01:45:00'),
(12, 'tes', 'tes', '', 0, 'tes', 'in stock', '2022-12-27 02:33:58', '2022-12-29 01:45:09', '2022-12-29 01:45:09'),
(13, 'A001-003', 'Ingat alasan anda memulai', NULL, 0, 'ingat-alasan-anda-memulai', 'not available', '2022-12-28 00:23:11', '2023-01-10 21:18:46', NULL),
(14, 'A001-011', 'senja di padang mahsyar', '', 0, 'senja-di-padang-mahsyar', 'not available', '2022-12-28 21:17:37', '2023-01-10 21:48:55', '2023-01-10 21:48:55'),
(15, 'A001-005', 'Cina mencri kitab suci ke barat', NULL, 0, 'cina-mencri-kitab-suci-ke-barat', 'in stock', '2022-12-28 23:05:26', '2023-01-02 21:00:53', NULL),
(16, 'A001-010', 'Gatau apa', 'Gatau apa-1672306216-jpg', 0, 'gatau-apa', 'in stock', '2022-12-29 02:30:16', '2023-01-10 21:48:48', '2023-01-10 21:48:48'),
(17, 'A001-006', 'mbuh', '', 0, 'mbuh', 'in stock', '2022-12-29 02:41:21', '2023-01-02 20:54:01', '2023-01-02 20:54:01'),
(18, 'asd', 'asd', 'asd-1672307231.png', 0, 'asd', 'in stock', '2022-12-29 02:47:11', '2023-01-02 20:53:44', '2023-01-02 20:53:44'),
(19, 'tess', 'tes', 'tes-1672307292.png', 0, 'tes', 'in stock', '2022-12-29 02:48:12', '2023-01-02 20:53:52', '2023-01-02 20:53:52'),
(20, 'A007', 'rochman rochman', 'rochman rochman-1672718861.doc', 15000, 'rochman-rochman', 'not available', '2023-01-02 21:07:41', '2023-01-10 21:48:41', '2023-01-10 21:48:41'),
(21, 'A001-013', 'Bahagia itu sederhana', 'Bahagia itu sederhana-1673412490-jpg', 13000, 'cina-pencabut-ruko-kosong', 'in stock', '2023-01-03 23:40:49', '2023-01-10 21:48:11', NULL),
(22, 'A001-016', 'Arsitekstur Modern', 'Arsitekstur Modern-1673412393.jpg', 8000, 'arsitekstur-modern', 'in stock', '2023-01-10 21:46:34', '2023-01-10 21:46:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `book_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 11, 4, NULL, NULL),
(2, 13, 2, NULL, NULL),
(3, 13, 7, NULL, NULL),
(4, 14, 5, NULL, NULL),
(5, 15, 1, NULL, NULL),
(6, 15, 4, NULL, NULL),
(7, 16, 6, NULL, NULL),
(8, 17, 2, NULL, NULL),
(9, 18, 1, NULL, NULL),
(10, 19, 1, NULL, NULL),
(11, 20, 4, NULL, NULL),
(12, 21, 3, NULL, NULL),
(13, 21, 4, NULL, NULL),
(14, 21, 6, NULL, NULL),
(15, 22, 15, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(355) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'komika', 'komik', NULL, '2023-01-10 21:39:12', '2023-01-10 21:39:12'),
(2, 'novel', 'novel', NULL, '2022-12-28 19:26:41', NULL),
(3, 'fantasy', 'fantasy', NULL, NULL, NULL),
(4, 'fiction', 'fiction', NULL, NULL, NULL),
(5, 'mystery', 'mystery', NULL, NULL, NULL),
(6, 'horror', 'horror', NULL, NULL, NULL),
(7, 'romance', 'romance', NULL, '2022-12-28 19:26:52', NULL),
(8, 'western', 'western', NULL, '2022-12-27 23:30:25', '2022-12-27 23:30:25'),
(14, 'Sports', 'Sports', '2022-12-21 00:11:39', '2022-12-28 02:08:11', '2022-12-28 02:08:11'),
(15, 'Cerita Sejarah', NULL, '2022-12-22 00:18:30', '2022-12-22 00:18:30', NULL),
(16, 'Cerita Sejarah islam', 'cerita-sejarah-islam', '2022-12-22 00:22:19', '2023-01-10 21:39:06', '2023-01-10 21:39:06'),
(17, 'komik', 'komik', '2022-12-22 19:51:46', '2022-12-22 19:51:46', NULL),
(18, 'Self development', 'self-development', '2023-01-02 20:55:10', '2023-01-02 20:55:10', NULL);

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
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2022_11_30_101431_create_roles_table', 1),
(33, '2022_11_30_102444_add_role_id_column_to_users_table', 1),
(34, '2022_11_30_102943_create_categories_table', 1),
(35, '2022_11_30_103050_create_books_table', 1),
(36, '2022_11_30_103337_create_book_category__table', 1),
(37, '2022_12_03_011320_create_rent_logs_table', 2),
(38, '2022_12_21_084526_add_slug_column_to_categories_table', 3),
(39, '2022_12_22_070427_change_slug_column_into_nullable_in_categories_table', 4),
(40, '2022_12_22_084935_add_soft_delete_column_to_categories_table', 5),
(41, '2022_12_23_035327_add_slug_cover_column_to_books_table', 6),
(42, '2022_11_30_103337_create_book_category_table', 7),
(43, '2022_12_26_033945_add_soft_delete_column_to_books_table', 7),
(44, '2022_12_26_040133_add_soft_delete_column_to_books_table', 8),
(45, '2022_12_26_072623_add_slug_column_to_users_table', 9),
(46, '2022_12_26_090419_add_soft_delete_to_users_table', 10),
(47, '2023_01_04_062603_add_harga_column_to_books_table', 11),
(48, '2023_01_06_022308_create_orders_table', 12),
(49, '2023_01_06_022418_create_order_products_table', 12),
(50, '2023_01_06_032811_create_transactions_table', 13),
(51, '2023_01_06_035017_create_sewa_table', 14),
(52, '2022_12_03_011320_create_rent_l_table', 15),
(53, '2023_01_06_072043_create_rent_log_table', 16),
(54, '2023_01_06_072242_create_rent_log_detail_table', 16);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rent_logs`
--

CREATE TABLE `rent_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL,
  `actual_return_date` date DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_logs`
--

INSERT INTO `rent_logs` (`id`, `user_id`, `rent_date`, `return_date`, `actual_return_date`, `harga`, `total`, `created_at`, `updated_at`) VALUES
(1, 3, '2023-01-10', '2023-01-17', '2023-01-10', NULL, 21000, '2023-01-09 21:15:14', '2023-01-09 21:34:35'),
(2, 2, '2023-01-10', '2023-01-17', '2023-01-11', NULL, 21000, '2023-01-09 21:16:15', '2023-01-10 19:44:50'),
(7, 3, '2023-01-11', '2023-01-18', '2023-01-11', NULL, 10000, '2023-01-10 21:20:22', '2023-01-10 21:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `rent_logs_detail`
--

CREATE TABLE `rent_logs_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `rent_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rent_logs_detail`
--

INSERT INTO `rent_logs_detail` (`id`, `book_id`, `rent_id`, `created_at`, `updated_at`) VALUES
(1, 9, 2, '2023-01-09 21:16:15', '2023-01-09 21:16:15'),
(2, 2, 2, '2023-01-09 21:16:16', '2023-01-09 21:16:16'),
(12, 1, 7, '2023-01-10 21:20:22', '2023-01-10 21:20:22'),
(13, 13, 7, '2023-01-10 21:20:22', '2023-01-10 21:20:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `slug`, `password`, `phone`, `address`, `status`, `created_at`, `updated_at`, `role_id`, `deleted_at`) VALUES
(1, 'admin', 'admin', '$2y$10$8HrWI.q0IH4igBf2oDptxOmO9PDHzl/OtySYtuVXRBckvn/IC85HK', '123456789101112', 'solo', 'active', NULL, NULL, 1, NULL),
(2, 'aku', 'aku', '$2y$10$GyO643DELyxp/ZCscmj7wunj5dy.i42M9IpZzaeMCRd.k2eDoXnb6', '12434567787696324', 'solo', 'active', NULL, NULL, 2, NULL),
(3, 'koe', 'koe', '$2y$10$f6aUNMJraWZiZ5/KFp9Bi.3M7rYrrT770sTjyD6aW0rx38beCP6qu', '325758546441', 'solo', 'active', NULL, '2022-12-26 06:35:32', 2, NULL),
(9, 'andi', 'andi', '$2y$10$wtWtIOizoWsLqkQouQpu7.Fc4321iYEB8C27vid4KHx.5MqPUFgmK', '3154436574', 'solo', 'inactive', '2022-12-12 20:15:22', '2022-12-12 20:15:22', 2, NULL),
(10, 'cina', 'cina', '$2y$10$lcNccl2ZpudoJwLjLrjrqOALchRcVnPZ7PkJ7xnpVZ7rzvfl5kBVS', '1234', 'kasak', 'active', '2022-12-26 00:39:15', '2022-12-26 06:06:01', 2, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_category_book_id_foreign` (`book_id`),
  ADD KEY `book_category_category_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pinjam_book_id_foreign` (`book_id`);

--
-- Indexes for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `rent_logs_detail`
--
ALTER TABLE `rent_logs_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rent_logs_detail_book_id_foreign` (`book_id`),
  ADD KEY `rent_logs_detail_rent_id_foreign` (`rent_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rent_logs`
--
ALTER TABLE `rent_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rent_logs_detail`
--
ALTER TABLE `rent_logs_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_category`
--
ALTER TABLE `book_category`
  ADD CONSTRAINT `book_category_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `book_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `rent_logs`
--
ALTER TABLE `rent_logs`
  ADD CONSTRAINT `rent_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rent_logs_detail`
--
ALTER TABLE `rent_logs_detail`
  ADD CONSTRAINT `rent_logs_detail_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `rent_logs_detail_rent_id_foreign` FOREIGN KEY (`rent_id`) REFERENCES `rent_logs` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
