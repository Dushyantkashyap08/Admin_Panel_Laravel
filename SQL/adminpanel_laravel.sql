-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 01:09 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcategories`
--

CREATE TABLE `addcategories` (
  `id` int(11) NOT NULL,
  `categoryname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addcategories`
--

INSERT INTO `addcategories` (`id`, `categoryname`) VALUES
(1, 'Dishwashers'),
(3, 'Cameras'),
(4, 'Washing Machines'),
(5, 'Speakers'),
(6, 'Mobiles'),
(8, 'Monitors'),
(9, 'Hometheator system'),
(10, 'Refrigerator'),
(11, 'Microwaves'),
(12, 'Washer & Dryers'),
(13, 'Camcoder'),
(14, 'Projectores');

-- --------------------------------------------------------

--
-- Table structure for table `addpages`
--

CREATE TABLE `addpages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addpages`
--

INSERT INTO `addpages` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Harsh Mehta', 'Marketer', 1, NULL, NULL),
(2, 'Ravi', 'Accountant', 0, NULL, NULL),
(4, 'Deep', 'software engineer', 1, NULL, NULL),
(7, 'Manish', 'Video Gamer', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `addproducts`
--

CREATE TABLE `addproducts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pstock` int(11) NOT NULL,
  `pimage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addproducts`
--

INSERT INTO `addproducts` (`id`, `category_id`, `pname`, `pdescription`, `pprice`, `pstock`, `pimage`, `created_at`, `updated_at`) VALUES
(8, 1, 'ddr4', 'Best Ever', '7000', 18, 'product_images\\1697195165.png', NULL, NULL),
(9, 8, 'Acer Monitor', 'Acer', '12399', 3, 'product_images\\1697196287.jpg', NULL, NULL),
(10, 3, 'Nikon', 'nik', '4500', 75, 'product_images\\1697432628.jpeg', NULL, NULL),
(11, 4, 'samsung', 'samsung', '20000', 46, 'product_images\\1697432666.jpg', NULL, NULL),
(13, 6, 'Redmi', 'Redmi 11i', '21000', 43, 'product_images\\1697433825.jpg', NULL, NULL),
(14, 3, 'Canon TRx', 'Conon 43', '4350', 24, 'product_images\\1697612712.jpg', NULL, NULL),
(15, 3, 'Sony cam', 'Rare Sony', '8599', 118, 'product_images\\1697612798.jpg', NULL, NULL),
(16, 6, 'Apple', 'Apple 13', '36000', 55, 'product_images\\1697612992.jpg', NULL, NULL),
(17, 9, 'Alpha', 'Alpha RYX', '555', 19, 'product_images\\1697613094.jpeg', NULL, NULL),
(18, 8, 'Apple', 'Apple Pc', '45000', 21, 'product_images\\1697613184.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `userid`, `productid`, `quantity`, `created_at`, `updated_at`) VALUES
(1, NULL, 5, 4, '2023-10-17 13:39:35', '2023-10-17 13:39:35'),
(2, NULL, 5, 4, '2023-10-17 13:40:56', '2023-10-17 13:40:56'),
(3, 4, 5, 5, '2023-10-17 14:13:12', '2023-10-17 14:13:12'),
(4, 4, 5, 5, '2023-10-17 14:43:22', '2023-10-17 14:43:22'),
(5, 4, 5, 1, '2023-10-17 14:44:59', '2023-10-17 14:44:59'),
(7, 4, 5, 8, '2023-10-17 14:47:39', '2023-10-17 14:47:39'),
(9, 2, 45, 5, '2023-10-17 23:35:45', '2023-10-17 23:35:45'),
(10, 2, 9, 1, '2023-10-18 00:39:59', '2023-10-18 00:39:59'),
(11, 2, 9, 1, '2023-10-18 00:40:52', '2023-10-18 00:40:52'),
(12, 3, 13, 2, '2023-10-18 00:53:44', '2023-10-18 00:53:44'),
(13, 4, 11, 1, '2023-10-18 04:14:06', '2023-10-18 04:14:06'),
(14, 8, 14, 2, '2023-10-18 23:53:19', '2023-10-18 23:53:19'),
(15, 8, 14, 1, '2023-10-18 23:54:39', '2023-10-18 23:54:39'),
(16, 8, 14, 1, '2023-10-18 23:55:11', '2023-10-18 23:55:11'),
(17, 11, 8, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `fullname`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kamal', 'kamal@gmail.com', 'likeee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2023_10_12_072049_create_addpages_table', 2),
(6, '2023_10_12_085800_create_addpages_table', 3),
(7, '2023_10_16_110438_create_signups_table', 4),
(8, '2023_10_17_135520_create_contacts_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT '123',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `fullname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ripanshu', 'r@gmail.com', '132', NULL, NULL),
(2, 'sachin', 'sachin@gmail.com', '$2y$10$0AeIT0Ydnax/MTJFZeR95u6Ok8oA90OuD2AzDBpTZ2kSyA6sBMB1O', NULL, NULL),
(3, 'Kamal', 'kamal@gmail.com', '$2y$10$TqtNy.kLBh76IBcsdUGlleDXYMe/fYl7AUB6TKlpKq5pwv6QEl03K', NULL, NULL),
(4, 'Dushi', 'Dk@gmail.com', '$2y$10$CnmemPi8pJTJ.elLptOSTO3D4.nd19qtOmSUrDMVjZTJL6Chtwxn2', NULL, NULL),
(5, 'Gurpreet', 'g@gmail.com', '$2y$10$0YejXXBQsYYcgTRTlKV0hOsdvuvpQIL0UxU741PmM/l7DzJ1Px.lC', NULL, NULL),
(6, 'Sandeep', 's@gmail.com', '$2y$10$284JiKZRIJ5YYEmC6ewufeunZ0WXOmbnqDqEqLVxtuzfxn8nX7V7W', NULL, NULL),
(7, 'Kanan', 'k@gmail.com', '$2y$10$yMl2Pg9HFtzskUf2lBK1qOE6pJks24E8tHDph34dWIPh6yYgujw02', NULL, NULL),
(8, 'Richa', 'r@gmail.com', '$2y$10$7tP45l1mg3KtU5HFU07K4ennCYogPePUgbvZiD3vOtc9yFEObVMya', NULL, NULL),
(9, 'Ankita', 'ankita@gmail.com', '$2y$10$GUasNGaI0e4I5xaFXYLPk.kiEGDYBJxQdTFSJiRjpSiJyXbEf0ipy', NULL, NULL),
(10, 'Nayan', 'nayan@gmail.com', '$2y$10$tEdnxO8Gfuz9hLSUoi6LSOeCFNKsn7nbUjuqgGKBKOIwz6cIz6v2S', NULL, NULL),
(11, 'dushyant', 'dushyant@ok.com', '$2y$10$1TxtnB5XLyCAOQ45bSDxSO1DTaon/PE4CoblImZRIsgU9QaNuH4TK', NULL, NULL),
(12, 'Dushyant', 'dknov2000@gmail.com', '123', NULL, NULL),
(13, 'Bhaumik Kashyap', 'bhaumikkashyap2@gmail.com', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '456', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcategories`
--
ALTER TABLE `addcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addpages`
--
ALTER TABLE `addpages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addproducts`
--
ALTER TABLE `addproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcategories`
--
ALTER TABLE `addcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `addpages`
--
ALTER TABLE `addpages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `addproducts`
--
ALTER TABLE `addproducts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
