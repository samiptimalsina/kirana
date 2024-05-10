-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2024 at 03:39 AM
-- Server version: 8.0.36-0ubuntu0.22.04.1
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `image_url`, `title`, `description`, `created_at`, `updated_at`) VALUES
(10, NULL, 'aYtW7_1714836900.jpg', 'Occaecat id eum eum', 'Voluptatem sapiente', '2024-05-04 09:50:00', '2024-05-04 09:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `slug` longtext COLLATE utf8mb4_unicode_ci,
  `img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `slug`, `img`, `price`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Mexican Eggrolls', 'mexican-eggrolls', 'assets/images/food1.jpg', 14.50, 'Face together given moveth divided form Of Seasons that fruitful.', '2024-05-03 21:13:42', '2024-05-07 07:55:15'),
(2, 'chicken burger', 'chicken-burger', 'assets/images/food2.jpg', 9.10, 'Together face given divided moveth Seasons form Of that fruitful.', '2024-05-03 21:13:42', '2024-05-07 07:55:15'),
(3, 'topu lasange', 'topu-lasange', 'assets/images/food3.jpg', 12.09, 'Form face together moveth given divided Of that Seasons fruitful.', '2024-05-03 21:13:42', '2024-05-07 07:55:15'),
(4, 'pepper potatoas', 'pepper-potatoas', 'assets/images/food4.jpg', 13.20, 'Given Face together divided moveth form Of that fruitful Seasons.', '2024-05-03 21:13:42', '2024-05-07 07:55:15'),
(5, 'bean salad', 'bean-salad', 'assets/images/food5.jpg', 8.55, 'Face together given moveth divided form Of Seasons that fruitful.', '2024-05-03 21:13:42', '2024-05-07 07:55:15'),
(6, 'beatball hoagie', 'beatball-hoagie', 'assets/images/food6.jpg', 11.80, 'Together face given divided moveth Seasons form Of that fruitful.', '2024-05-03 21:13:42', '2024-05-07 07:55:15'),
(7, 'Catherine Castro', 'catherine-castro', 'assets/images/foodimage/1715088938.jpg', 834.00, 'Ut repudiandae labor', '2024-05-07 07:50:38', '2024-05-07 07:55:15'),
(8, 'Kiona Bradford', 'kiona-bradford', 'assets/images/foodimage/1715089052.jpg', 701.00, 'Esse distinctio Co', '2024-05-07 07:52:32', '2024-05-07 07:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_23_062001_create_sessions_table', 1),
(7, '2022_12_31_065920_create_food_table', 1),
(8, '2023_01_18_131849_create_reservations_table', 1),
(9, '2023_01_21_054809_create_specialdishes_table', 1),
(10, '2023_01_22_113306_create_testimonials_table', 1),
(11, '2024_05_01_163013_create_banners_table', 1);

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
  `id` bigint UNSIGNED NOT NULL,
  `tokenable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person` enum('1','2','3','4','5','6') COLLATE utf8mb4_unicode_ci NOT NULL,
  `food_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialdishes`
--

CREATE TABLE `specialdishes` (
  `id` bigint UNSIGNED NOT NULL,
  `namepart1` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namepart2` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialdishes`
--

INSERT INTO `specialdishes` (`id`, `namepart1`, `namepart2`, `img`, `desc`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Garlic', 'green beans', 'assets/images/deshes1.png', 'Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she\'d kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.', 12.00, '2024-05-03 21:13:42', '2024-05-03 21:13:42'),
(2, 'Lemon', 'rosemary chicken', 'assets/images/deshes2.png', 'Be. Seed saying our signs beginning face give spirit own beast darkness morning moveth green multiply she\'d kind saying one shall, two which darkness have day image god their night. his subdue so you rule can.', 26.00, '2024-05-03 21:13:42', '2024-05-03 21:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` enum('0.5','1','1.5','2','2.5','3','3.5','4','4.5','5') COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `bio`, `review`, `rating`, `img`, `created_at`, `updated_at`) VALUES
(1, 'adame nesane', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '4.5', 'assets/images/customer1.png', '2024-05-03 21:13:42', '2024-05-03 21:13:42'),
(2, 'adame nesane', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '4', 'assets/images/customer1.png', '2024-05-03 21:13:42', '2024-05-03 21:13:42'),
(3, 'adam nahan', 'Chief Customer', 'You\'re had. Subdue grass Meat us winged years you\'ll doesn\'t. fruit two also won one yielding creepeth third give may never lie alternet food.', '3.5', 'assets/images/customer2.png', '2024-05-03 21:13:42', '2024-05-03 21:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `usertype`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Asif', 'admin@gmail.com', NULL, '1', '$2y$10$nPvG65XlejZa3wnod/S0cePZPqY6il.nb6CwPsKfHIB1wpFT3rcGa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-03 21:13:42', '2024-05-03 21:13:42'),
(2, 'Admin-Asif', 'admin@admin.com', NULL, '1', '$2y$10$iBiJFxTEFVRTYAoVhoz6u.T36y1G0PKWkikSLTggqKOZJfyvnOlKe', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-03 21:13:42', '2024-05-03 21:13:42'),
(3, 'Asif4', 'samiptimalsina17@gmail.com', NULL, '0', '$2y$10$XzL53.xgBf4fBkSHZKIAu.rDFNJj.0Syq3QSS2.UQfEghiibTEjgi', NULL, NULL, NULL, NULL, NULL, NULL, '2024-05-03 21:13:42', '2024-05-03 21:13:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_food_id_foreign` (`food_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `specialdishes`
--
ALTER TABLE `specialdishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialdishes`
--
ALTER TABLE `specialdishes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
