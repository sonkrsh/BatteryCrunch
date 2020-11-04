-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 08:55 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batterycrunch`
--

-- --------------------------------------------------------

--
-- Table structure for table `battery_companys`
--

CREATE TABLE `battery_companys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BatteryCompany` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battery_companys`
--

INSERT INTO `battery_companys` (`id`, `BatteryCompany`, `created_at`, `updated_at`) VALUES
(1, 'Exide Industries Ltd.', '2020-05-21 01:14:59', '2020-05-21 01:14:59'),
(2, 'Luminous Power Technologies Pvt. Ltd.', '2020-05-21 01:15:05', '2020-05-21 01:15:05'),
(3, 'Amara Raja Batteries Ltd.', '2020-05-21 01:15:13', '2020-05-21 01:15:13'),
(4, 'Su-Kam Power Systems Ltd.', '2020-05-21 01:15:18', '2020-05-21 01:15:18'),
(5, 'Okaya Power Pvt. Ltd.', '2020-05-21 01:15:24', '2020-05-21 01:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `battery_product`
--

CREATE TABLE `battery_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batterCompany_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_descp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Product_price` decimal(8,2) NOT NULL,
  `Product_price_withExcahnge` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `battery_product`
--

INSERT INTO `battery_product` (`id`, `make_id`, `model_id`, `fuel_id`, `batterCompany_id`, `Product_name`, `Product_descp`, `Product_image`, `Product_price`, `Product_price_withExcahnge`, `created_at`, `updated_at`) VALUES
(1, '2', '7', '2', '2', 'assa', 'assa', '24796.png', '1.00', NULL, '2020-05-21 13:05:00', '2020-05-21 13:05:00'),
(2, '2', '5', '1', '3', 'sa', 'as', 'Googlesignin.png.png', '1.00', NULL, '2020-05-21 13:12:07', '2020-05-21 13:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `customer_numbers`
--

CREATE TABLE `customer_numbers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fules`
--

CREATE TABLE `fules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fuel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fules`
--

INSERT INTO `fules` (`id`, `fuel_name`, `created_at`, `updated_at`) VALUES
(1, 'Petrol', '2020-05-21 00:37:56', '2020-05-21 00:37:56'),
(2, 'Desiel', '2020-05-21 00:38:03', '2020-05-21 00:38:03'),
(3, 'CNg', '2020-05-21 00:38:10', '2020-05-21 00:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `created_at`, `updated_at`) VALUES
(1, 'Delhi', NULL, NULL),
(2, 'Mumbai', NULL, NULL),
(3, 'dehradun', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `make_name`, `created_at`, `updated_at`) VALUES
(1, 'Tata', '2020-05-21 00:32:51', '2020-05-21 00:32:51'),
(2, 'Maruti-Suzuki', '2020-05-21 00:33:10', '2020-05-21 00:33:10'),
(3, 'Chevrolet', '2020-05-21 00:33:19', '2020-05-21 00:33:19'),
(4, 'Honda', '2020-05-21 00:33:28', '2020-05-21 00:33:28'),
(5, 'Ford', '2020-05-21 00:33:36', '2020-05-21 00:33:36');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2020_04_30_102349_create_locations_table', 1),
(15, '2020_04_30_102526_create_makes_table', 1),
(16, '2020_04_30_102542_create_models_table', 1),
(17, '2020_04_30_102602_create_fules_table', 1),
(18, '2020_05_05_153758_create_customer_numbers_table', 1),
(19, '2020_05_20_093942_create_battery_companys_table', 1),
(20, '2020_05_21_052612_create_battery_product_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `make_id` int(11) NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `make_id`, `model_name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nexon', '2020-05-21 00:34:12', '2020-05-21 00:34:12'),
(2, 1, 'Altroz', '2020-05-21 00:34:23', '2020-05-21 00:34:23'),
(3, 1, 'Harrier', '2020-05-21 00:34:30', '2020-05-21 00:34:30'),
(4, 1, 'Tiago', '2020-05-21 00:34:36', '2020-05-21 00:34:36'),
(5, 2, 'Baleno', '2020-05-21 00:35:15', '2020-05-21 00:35:15'),
(6, 2, 'Dzire', '2020-05-21 00:35:21', '2020-05-21 00:35:21'),
(7, 2, 'Brezza', '2020-05-21 00:35:31', '2020-05-21 00:35:31'),
(8, 3, 'Trailblazer', '2020-05-21 00:35:57', '2020-05-21 00:35:57'),
(9, 3, 'Cruze', '2020-05-21 00:36:02', '2020-05-21 00:36:02'),
(10, 3, 'Sail Hatchback', '2020-05-21 00:36:10', '2020-05-21 00:36:10'),
(11, 4, 'City', '2020-05-21 00:36:34', '2020-05-21 00:36:34'),
(12, 4, 'Civic', '2020-05-21 00:36:38', '2020-05-21 00:36:38'),
(13, 4, 'WRV', '2020-05-21 00:36:45', '2020-05-21 00:36:45'),
(14, 4, 'CR-V', '2020-05-21 00:36:52', '2020-05-21 00:36:52'),
(15, 5, 'EcoSport', '2020-05-21 00:37:05', '2020-05-21 00:37:05'),
(16, 5, 'Mustang', '2020-05-21 00:37:12', '2020-05-21 00:37:12'),
(17, 5, 'Endeavour', '2020-05-21 00:37:16', '2020-05-21 00:37:16'),
(18, 5, 'Figo', '2020-05-21 00:37:21', '2020-05-21 00:37:21');

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'sourav', 'sonkrsh@gmail.com', NULL, '$2y$10$F9EKOnFhaYX75bdvJYb1v.HigTdvGIccAr4MTeZhZgrV3Dkk461nK', NULL, '2020-05-21 05:37:53', '2020-05-21 05:37:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `battery_companys`
--
ALTER TABLE `battery_companys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `battery_product`
--
ALTER TABLE `battery_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_numbers`
--
ALTER TABLE `customer_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fules`
--
ALTER TABLE `fules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `battery_companys`
--
ALTER TABLE `battery_companys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `battery_product`
--
ALTER TABLE `battery_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer_numbers`
--
ALTER TABLE `customer_numbers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fules`
--
ALTER TABLE `fules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
