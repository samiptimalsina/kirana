-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2024 at 12:01 PM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samiptimalsina_kirana`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `page` enum('HOME','ABOUT','SHOP','DEALERS','CONTACT','BLOG') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `image_url`, `title`, `description`, `created_at`, `updated_at`, `page`) VALUES
(10, NULL, 'zblov_1721351674.jpeg', 'Occaecat id eum eum', 'Voluptatem sapiente', '2024-05-04 09:50:00', '2024-07-19 05:14:34', 'CONTACT'),
(12, NULL, 'ogZhL_1723302790.jpeg', 'create banner', 'Create Banner', '2024-06-01 08:25:02', '2024-08-10 19:13:10', 'ABOUT'),
(13, NULL, '9iPrU_1723351714.jpg', 'Create Banner', 'Create Banner', '2024-06-01 08:28:04', '2024-08-11 08:48:34', 'DEALERS'),
(14, NULL, 'bT2bR_1723438328.jpg', 'Welcome to  maha Spice Food  admin dashboard!', 'Welcome to Maha Spice  admin dashboard!', '2024-06-01 08:29:12', '2024-08-12 08:52:08', 'SHOP'),
(15, NULL, '8xAwF_1723135783.jpeg', '<strong>हिमाल पहाड तराई कोही छैन पराई</strong>', '<strong class=\"text-white\" style=\"font-size: 7rem\">नेपाली मनको नेपाली स्वाद <br/> <h1 class=\"text-4xl font-bold \" style=\"font-size: 9rem; padding-top:5rem\"> महाश्री नामकीन</h1></strong>', '2024-06-01 08:29:45', '2024-08-11 23:48:58', 'HOME'),
(17, NULL, 'msrgP_1723455282.jpeg', 'dfasf', 'fasdfasfasfd', '2024-08-12 13:34:42', '2024-08-12 13:34:42', 'BLOG');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `short_desc` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `short_desc`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WhatsApp Image 2024-08-09 at 16.02.19', 'whatsapp-image-2024-08-09-at-160219', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.19.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(2, 'WhatsApp Image 2024-08-09 at 16.02.20', 'whatsapp-image-2024-08-09-at-160220', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.20.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(3, 'WhatsApp Image 2024-08-09 at 16.02.21', 'whatsapp-image-2024-08-09-at-160221', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.21.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(4, 'WhatsApp Image 2024-08-09 at 16.02.30', 'whatsapp-image-2024-08-09-at-160230', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.30.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(5, 'WhatsApp Image 2024-08-09 at 16.02.31', 'whatsapp-image-2024-08-09-at-160231', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.31.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(6, 'WhatsApp Image 2024-08-09 at 16.02.32', 'whatsapp-image-2024-08-09-at-160232', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.32.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(7, 'WhatsApp Image 2024-08-09 at 16.02.33', 'whatsapp-image-2024-08-09-at-160233', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.33.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(8, 'WhatsApp Image 2024-08-09 at 16.02.36', 'whatsapp-image-2024-08-09-at-160236', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.36.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(9, 'WhatsApp Image 2024-08-09 at 16.02.37', 'whatsapp-image-2024-08-09-at-160237', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.37.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(10, 'WhatsApp Image 2024-08-09 at 16.02.38', 'whatsapp-image-2024-08-09-at-160238', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.38.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(11, 'WhatsApp Image 2024-08-09 at 16.02.39', 'whatsapp-image-2024-08-09-at-160239', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.39.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(12, 'WhatsApp Image 2024-08-09 at 16.02.40', 'whatsapp-image-2024-08-09-at-160240', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.40.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(13, 'WhatsApp Image 2024-08-09 at 16.02.48', 'whatsapp-image-2024-08-09-at-160248', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.48.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(14, 'WhatsApp Image 2024-08-09 at 16.02.49', 'whatsapp-image-2024-08-09-at-160249', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.49.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(15, 'WhatsApp Image 2024-08-09 at 16.02.50', 'whatsapp-image-2024-08-09-at-160250', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.50.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(16, 'WhatsApp Image 2024-08-09 at 16.02.52', 'whatsapp-image-2024-08-09-at-160252', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.52.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(17, 'WhatsApp Image 2024-08-09 at 16.02.54', 'whatsapp-image-2024-08-09-at-160254', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.02.54.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(18, 'WhatsApp Image 2024-08-09 at 16.03.13', 'whatsapp-image-2024-08-09-at-160313', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.13.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(19, 'WhatsApp Image 2024-08-09 at 16.03.14', 'whatsapp-image-2024-08-09-at-160314', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.14.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(20, 'WhatsApp Image 2024-08-09 at 16.03.15', 'whatsapp-image-2024-08-09-at-160315', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.15.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(21, 'WhatsApp Image 2024-08-09 at 16.03.16', 'whatsapp-image-2024-08-09-at-160316', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.16.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(22, 'WhatsApp Image 2024-08-09 at 16.03.17', 'whatsapp-image-2024-08-09-at-160317', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.17.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(23, 'WhatsApp Image 2024-08-09 at 16.03.18', 'whatsapp-image-2024-08-09-at-160318', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.18.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(24, 'WhatsApp Image 2024-08-09 at 16.03.19', 'whatsapp-image-2024-08-09-at-160319', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.19.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(25, 'WhatsApp Image 2024-08-09 at 16.03.20', 'whatsapp-image-2024-08-09-at-160320', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.20.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(26, 'WhatsApp Image 2024-08-09 at 16.03.21', 'whatsapp-image-2024-08-09-at-160321', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.21.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(27, 'WhatsApp Image 2024-08-09 at 16.03.23', 'whatsapp-image-2024-08-09-at-160323', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.23.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(28, 'WhatsApp Image 2024-08-09 at 16.03.24', 'whatsapp-image-2024-08-09-at-160324', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.24.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(29, 'WhatsApp Image 2024-08-09 at 16.03.25', 'whatsapp-image-2024-08-09-at-160325', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.25.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(30, 'WhatsApp Image 2024-08-09 at 16.03.26', 'whatsapp-image-2024-08-09-at-160326', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.26.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(31, 'WhatsApp Image 2024-08-09 at 16.03.27', 'whatsapp-image-2024-08-09-at-160327', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.27.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(32, 'WhatsApp Image 2024-08-09 at 16.03.32', 'whatsapp-image-2024-08-09-at-160332', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.32.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(33, 'WhatsApp Image 2024-08-09 at 16.03.33', 'whatsapp-image-2024-08-09-at-160333', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.33.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(34, 'WhatsApp Image 2024-08-09 at 16.03.35', 'whatsapp-image-2024-08-09-at-160335', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.35.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(35, 'WhatsApp Image 2024-08-09 at 16.03.36', 'whatsapp-image-2024-08-09-at-160336', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.36.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(36, 'WhatsApp Image 2024-08-09 at 16.03.39', 'whatsapp-image-2024-08-09-at-160339', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.39.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(37, 'WhatsApp Image 2024-08-09 at 16.03.40', 'whatsapp-image-2024-08-09-at-160340', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.40.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(38, 'WhatsApp Image 2024-08-09 at 16.03.41', 'whatsapp-image-2024-08-09-at-160341', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.41.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(39, 'WhatsApp Image 2024-08-09 at 16.03.43', 'whatsapp-image-2024-08-09-at-160343', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.43.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(40, 'WhatsApp Image 2024-08-09 at 16.03.47', 'whatsapp-image-2024-08-09-at-160347', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.47.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(41, 'WhatsApp Image 2024-08-09 at 16.03.49', 'whatsapp-image-2024-08-09-at-160349', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.49.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(42, 'WhatsApp Image 2024-08-09 at 16.03.52', 'whatsapp-image-2024-08-09-at-160352', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.52.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(43, 'WhatsApp Image 2024-08-09 at 16.03.53', 'whatsapp-image-2024-08-09-at-160353', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.53.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(44, 'WhatsApp Image 2024-08-09 at 16.03.54', 'whatsapp-image-2024-08-09-at-160354', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.54.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(45, 'WhatsApp Image 2024-08-09 at 16.03.55', 'whatsapp-image-2024-08-09-at-160355', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.55.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(46, 'WhatsApp Image 2024-08-09 at 16.03.59', 'whatsapp-image-2024-08-09-at-160359', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.03.59.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(47, 'WhatsApp Image 2024-08-09 at 16.04.01', 'whatsapp-image-2024-08-09-at-160401', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.04.01.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(48, 'WhatsApp Image 2024-08-09 at 16.04.02', 'whatsapp-image-2024-08-09-at-160402', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.04.02.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(49, 'WhatsApp Image 2024-08-09 at 16.04.04', 'whatsapp-image-2024-08-09-at-160404', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.04.04.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(50, 'WhatsApp Image 2024-08-09 at 16.04.05', 'whatsapp-image-2024-08-09-at-160405', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.04.05.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(51, 'WhatsApp Image 2024-08-09 at 16.28.11', 'whatsapp-image-2024-08-09-at-162811', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.11.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(52, 'WhatsApp Image 2024-08-09 at 16.28.12', 'whatsapp-image-2024-08-09-at-162812', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.12.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(53, 'WhatsApp Image 2024-08-09 at 16.28.13', 'whatsapp-image-2024-08-09-at-162813', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.13.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(54, 'WhatsApp Image 2024-08-09 at 16.28.14', 'whatsapp-image-2024-08-09-at-162814', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.14.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(55, 'WhatsApp Image 2024-08-09 at 16.28.15', 'whatsapp-image-2024-08-09-at-162815', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.15.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(56, 'WhatsApp Image 2024-08-09 at 16.28.16', 'whatsapp-image-2024-08-09-at-162816', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.16.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(57, 'WhatsApp Image 2024-08-09 at 16.28.17', 'whatsapp-image-2024-08-09-at-162817', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.17.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(58, 'WhatsApp Image 2024-08-09 at 16.28.18', 'whatsapp-image-2024-08-09-at-162818', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.18.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(59, 'WhatsApp Image 2024-08-09 at 16.28.19', 'whatsapp-image-2024-08-09-at-162819', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.19.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(60, 'WhatsApp Image 2024-08-09 at 16.28.20', 'whatsapp-image-2024-08-09-at-162820', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.20.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(61, 'WhatsApp Image 2024-08-09 at 16.28.21', 'whatsapp-image-2024-08-09-at-162821', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.21.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(62, 'WhatsApp Image 2024-08-09 at 16.28.22', 'whatsapp-image-2024-08-09-at-162822', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.22.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(63, 'WhatsApp Image 2024-08-09 at 16.28.23', 'whatsapp-image-2024-08-09-at-162823', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.23.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(64, 'WhatsApp Image 2024-08-09 at 16.28.24', 'whatsapp-image-2024-08-09-at-162824', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.24.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(65, 'WhatsApp Image 2024-08-09 at 16.28.25', 'whatsapp-image-2024-08-09-at-162825', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.25.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(66, 'WhatsApp Image 2024-08-09 at 16.28.26', 'whatsapp-image-2024-08-09-at-162826', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.26.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(67, 'WhatsApp Image 2024-08-09 at 16.28.27', 'whatsapp-image-2024-08-09-at-162827', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.27.jpeg', '2024-08-10 11:50:21', '2024-08-10 11:50:21'),
(68, 'WhatsApp Image 2024-08-09 at 16.28.28', 'whatsapp-image-2024-08-09-at-162828', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.28.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(69, 'WhatsApp Image 2024-08-09 at 16.28.29', 'whatsapp-image-2024-08-09-at-162829', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.29.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(70, 'WhatsApp Image 2024-08-09 at 16.28.30', 'whatsapp-image-2024-08-09-at-162830', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.30.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(71, 'WhatsApp Image 2024-08-09 at 16.28.31', 'whatsapp-image-2024-08-09-at-162831', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.31.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(72, 'WhatsApp Image 2024-08-09 at 16.28.32', 'whatsapp-image-2024-08-09-at-162832', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.32.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(73, 'WhatsApp Image 2024-08-09 at 16.28.33', 'whatsapp-image-2024-08-09-at-162833', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.33.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(74, 'WhatsApp Image 2024-08-09 at 16.28.34', 'whatsapp-image-2024-08-09-at-162834', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.34.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(75, 'WhatsApp Image 2024-08-09 at 16.28.35', 'whatsapp-image-2024-08-09-at-162835', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.35.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(76, 'WhatsApp Image 2024-08-09 at 16.28.36', 'whatsapp-image-2024-08-09-at-162836', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.36.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(77, 'WhatsApp Image 2024-08-09 at 16.28.37', 'whatsapp-image-2024-08-09-at-162837', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.37.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(78, 'WhatsApp Image 2024-08-09 at 16.28.38', 'whatsapp-image-2024-08-09-at-162838', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.38.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(79, 'WhatsApp Image 2024-08-09 at 16.28.39', 'whatsapp-image-2024-08-09-at-162839', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.39.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(80, 'WhatsApp Image 2024-08-09 at 16.28.40', 'whatsapp-image-2024-08-09-at-162840', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.40.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(81, 'WhatsApp Image 2024-08-09 at 16.28.41', 'whatsapp-image-2024-08-09-at-162841', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.41.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(82, 'WhatsApp Image 2024-08-09 at 16.28.42', 'whatsapp-image-2024-08-09-at-162842', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.42.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(83, 'WhatsApp Image 2024-08-09 at 16.28.43', 'whatsapp-image-2024-08-09-at-162843', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.43.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(84, 'WhatsApp Image 2024-08-09 at 16.28.44', 'whatsapp-image-2024-08-09-at-162844', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.44.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(85, 'WhatsApp Image 2024-08-09 at 16.28.45', 'whatsapp-image-2024-08-09-at-162845', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.45.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(86, 'WhatsApp Image 2024-08-09 at 16.28.46', 'whatsapp-image-2024-08-09-at-162846', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.46.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(87, 'WhatsApp Image 2024-08-09 at 16.28.47', 'whatsapp-image-2024-08-09-at-162847', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.47.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(88, 'WhatsApp Image 2024-08-09 at 16.28.48', 'whatsapp-image-2024-08-09-at-162848', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.48.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(89, 'WhatsApp Image 2024-08-09 at 16.28.49', 'whatsapp-image-2024-08-09-at-162849', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.49.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(90, 'WhatsApp Image 2024-08-09 at 16.28.50', 'whatsapp-image-2024-08-09-at-162850', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.50.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(91, 'WhatsApp Image 2024-08-09 at 16.28.51', 'whatsapp-image-2024-08-09-at-162851', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.51.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(92, 'WhatsApp Image 2024-08-09 at 16.28.52', 'whatsapp-image-2024-08-09-at-162852', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.52.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(93, 'WhatsApp Image 2024-08-09 at 16.28.53', 'whatsapp-image-2024-08-09-at-162853', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.53.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(94, 'WhatsApp Image 2024-08-09 at 16.28.54', 'whatsapp-image-2024-08-09-at-162854', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.54.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22'),
(95, 'WhatsApp Image 2024-08-09 at 16.28.55', 'whatsapp-image-2024-08-09-at-162855', NULL, 'Image description or content here', 'assets/images/blog/WhatsApp Image 2024-08-09 at 16.28.55.jpeg', '2024-08-10 11:50:22', '2024-08-10 11:50:22');

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `contact_person` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `proprietor_name` varchar(255) DEFAULT NULL,
  `google_address` varchar(255) DEFAULT NULL,
  `google_map` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealers`
--

INSERT INTO `dealers` (`id`, `name`, `contact_no`, `contact_person`, `address`, `proprietor_name`, `google_address`, `google_map`, `created_at`, `updated_at`) VALUES
(38, 'Gaundibaag Tred And Suppliers', NULL, 'Hari Prasad Bhatta', 'Dhangadhi', 'Hari Prashad Bhatta', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(39, 'Nagarjun Store', NULL, 'Bhuwan Jaisi', 'Mahendranagar', 'Bhuwan Jaisi', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(40, 'Gaundibaag Distributers', NULL, 'Dammar Joshi', 'Dadeldhura', 'Dammar Joshi', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(41, 'Himganga Tred Concern', NULL, 'Tejendra Bohara', 'Dhangadhi', 'Tejendra Bohara', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(42, 'Aush Cold Store', NULL, 'Laxman Thapa', 'Ibrd.(Kanchanpur)', 'Laxman Thapa', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(43, 'Prajuli Suppliers', NULL, 'Dilip Prajuli', 'Rajapur(Bardiya)', 'Dilip Prajuli', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(44, 'Sk. Store', NULL, 'Hari Lal Khatri', 'Tarataal(Bardiya)', 'Hari Lal Khatri', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(45, 'Siwani Sandhya Suppliers', NULL, 'Balaram Yadav', 'Gulariya(Bardiya)', 'Balaram Yadav', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(46, 'Shubha Laxmi Janaral Store', NULL, 'Surendra Yadav', 'Nepalgunj', 'Surendra Yadav', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(47, 'Jyoti Tred Concern', NULL, 'Jyoti Prakash Joshi', 'Dhangadhi', 'Jyoti Prakash Joshi', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(48, 'Nirak Janaral Store', NULL, 'Surendra Oli', 'Surkhet', 'Surendra Oli', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(49, 'Sandesh And Sangita Store', NULL, 'Sandesh Sheresth', 'Surkhet', 'Sandesh Sheresth', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(50, 'Raju Store', NULL, 'Raju Sheresth', 'Dailekh', 'Raju Sheresth', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(51, 'S.S. Suppliers', NULL, 'Hemant G.c.', 'Lamahi (Dang)', 'Hemant G.c.', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(52, 'New Sindur Kirana Pasal', NULL, 'Krishna Pokhrel', 'Tulsipur(Dang)', 'Krishna Pokhrel', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(53, 'Shivmani Suppliers', NULL, 'Deepak Bhushal', 'Kapilbastu', 'Deepak Bhushal', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(54, 'Om Laxmi Kirana Pasal', NULL, 'Anjana Bhushal', 'Arghakhachi', 'Anjana Bhushal', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(55, 'Shree Nandarupa Suppliers', NULL, 'Home Nath Subedi', 'Murgiya', 'Home Nath Subedi', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(56, 'K. & G. Tred And Suppliers', NULL, 'Karna Bdr. Tandan', 'Butwal', 'Karna Bdr. Tandan', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(57, 'Prekshya And Prashant Suppliers', NULL, 'Prashant K.c.', 'Narayangadh', 'Prashant K.c.', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(58, 'Binaya Marketing', NULL, 'Binaya Adhikari', 'Kawasoti', 'Binaya Adhikari', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(59, 'Supriya And Shulabh Tredars', NULL, 'Binaya Bhatta', 'Hetauda', 'Binaya Bhatta', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(60, 'New Pragati Store', NULL, 'Ganesh Sheresth', 'Abukhaireni', 'Ganesh Sheresth', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(61, 'Maharudra Store', NULL, 'Chanchal Sheresth', 'Tanahu', 'Chanchal Sheresth', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(62, 'Namuna Store', NULL, 'Rajendra Sheresth', 'Damauli', 'Rajendra Sheresth', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(63, 'New Anup Trede Center', NULL, 'Chandra Prakash murau', 'Bhairahawa', 'Chandra Prakash murau', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(64, 'Sk. Suppliers', NULL, 'Shiv Subedi', 'Sunawal', 'Shiv Subedi', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(65, 'Nittyam Treding Pvt.Ltd.', NULL, 'Sabin Manandhar', 'Banepa', 'Sabin Manandhar', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(66, 'B & D Tred & Suppliers', NULL, 'Ganesh Bhushal', 'Pepsicola', 'Ganesh Bhushal', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(67, 'Jaya Laxmi Tred Link', NULL, 'Salin Sheresth', 'Balkumari', 'Salin Sheresth', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(68, 'Jass Tred International', NULL, 'Sashi Chandra Shingh', 'Dhapakhel(Lalitpur)', 'Sashi Chandra Shingh', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(69, 'Jssp Enterprises', NULL, 'Surendra Limbu', 'Jorpati', 'Surendra Limbu', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(70, 'Loard Pashupati Tred Link', NULL, 'Keshav Acharya', 'Kapan', 'Keshav Acharya', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(71, 'Nayabha Enterprises', NULL, 'Narayan Bdr. Nayabha', 'Suryabinayak', 'Narayan Bdr. Nayabha', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(72, 'PPK Shanti Tredars Pvt.Ltd.', NULL, 'Prabhakar Maharjan', 'Balaju', 'Prabhakar Maharjan', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07'),
(73, 'Khanal Jee Kirana Supplier', NULL, 'Nabin Khanal', 'Naraphat', 'Nabin Khanal', NULL, NULL, '2024-08-08 21:40:07', '2024-08-08 21:40:07');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` longtext DEFAULT NULL,
  `img` varchar(250) NOT NULL DEFAULT '',
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `desc` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `slug`, `img`, `price`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'छक्का पन्जा', 'chhakka-panja', 'assets/images/foodimage/1723301025.png', 10.00, 'Ingredients: Corn Grits, Rice Grits, Edible Vegetable Oil, Iodized Salt, Spices and Condiments', NULL, '2024-08-10 18:43:45'),
(2, 'Noodle Crunch', 'noodle-crunch', '[\"assets\\/images\\/foodimage\\/1723303755-noodle1.png\",\"assets\\/images\\/foodimage\\/1723303755-noodle2.png\"]', 20.00, 'Ingredients: Refined Wheat Flour, Edible Vegetable Oil, Corn Starch, Potato Starch, Seasoning Spices & Condiments', NULL, '2024-08-10 19:29:15'),
(3, 'Jyap Jhup Crunchy Stick (अकबरे पिरो )', 'jyap-jhup-crunchy-stick-akbare-piro', 'assets/images/foodimage/akbare piro 10.png', 10.00, 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt', NULL, NULL),
(4, 'Jyap Jhup Crunchy Stick (Tomato Tangy Masala )', 'jyap-jhup-crunchy-stick-tomato-tangy-masala', 'assets/images/foodimage/1723284181.png', 10.00, 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salts', NULL, '2024-08-10 14:03:01'),
(5, 'Jyap Jhup Crunchy Stick (Masala Munch )', 'jyap-jhup-crunchy-stick-masala-munch', 'assets/images/foodimage/1723284249.png', 10.00, 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salts', NULL, '2024-08-10 14:04:09'),
(6, 'मजेदार मिक्स (580 gm)', 'majedar-mix-580-gm', 'assets/images/foodimage/1723301166.png', 175.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 18:46:06'),
(7, 'मजेदार मिक्स (280 gm)', 'majedar-mix-280-gm', 'assets/images/foodimage/1723301869.png', 100.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 18:57:49'),
(8, 'मजेदार मिक्स (140 gm)', 'majedar-mix-140-gm', 'assets/images/foodimage/majedar140.png', 50.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, NULL),
(9, 'फुरनदाना (450gm)', 'phurandana-450-gm', 'assets/images/foodimage/1723302052.png', 150.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 19:00:52'),
(10, 'फुरनदाना (250gm)', 'phurandana-250-gm', 'assets/images/foodimage/1723302104.png', 100.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 19:01:44'),
(11, 'सदाबहार मिक्स ( 700 gm)', 'sadabahar-mix-700-gm', 'assets/images/foodimage/1723302219.png', 220.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 19:03:39'),
(12, 'सदाबहार मिक्स (350 gm)', 'sadabahar-mix-350-gm', 'assets/images/foodimage/1723302257.png', 125.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 19:04:17'),
(13, 'सदाबहार मिक्स (200 gm)', 'sadabahar-mix-200-gm', 'assets/images/foodimage/1723302283.png', 75.00, 'Ingredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar Besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices', NULL, '2024-08-10 19:04:43'),
(14, 'बदाम टेस्टी', 'badam-tasty', 'assets/images/foodimage/badam.png', 10.00, 'Ingredients: Peanut, Gram Pulse Flour, Edible Vegetable Oil, Corn Starch, Spices & Condiments, Salt and Acidity Regular', NULL, NULL),
(15, 'SALTED PEANUTS', 'salted-peanuts', 'assets/images/foodimage/salted-peanuts.png', 10.00, 'Ingredients: Peanuts, Edible Vegetable Oil & Edible Common Salt', NULL, NULL),
(16, 'CHATPATA MATAR', 'chatpata-matar', 'assets/images/foodimage/chatpata-matar.png', 10.00, 'Ingredients: Green Pea, Edible Vegetable Oil, Edible Salt, Condiments and Seasoning Spices', NULL, NULL),
(17, 'MIX DALMOTH', 'mix-dalmoth', 'assets/images/foodimage/mix-dalmoth.png', 10.00, 'Ingredients: Rice Flakes, Rice Flour, Edible Vegetable Oil, Peanuts, Chickpeas Flour, Red Chilli, Black Pepper, Potato Powder, Black Salt, Spices and Other Seasoning', NULL, NULL),
(18, 'Jyap Jhup Crunchy Stick (अकबरे पिरो )', 'jyap-jhup-crunchy-stick-akbare-piro-20', 'assets/images/foodimage/akbare-piro-20.png', 20.00, 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt', NULL, NULL),
(19, 'Jyap Jhup Crunchy Stick (Masala Munch )', 'jyap-jhup-crunchy-stick-masala-munch-20', 'assets/images/foodimage/masala-munch.png', 20.00, 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt', NULL, NULL),
(20, 'Jyap Jhup Crunchy Stick (Tomato Tangy Masala )', 'jyap-jhup-crunchy-stick-tomato-tangy-masala-20', 'assets/images/foodimage/tomato-tangy-20.png', 20.00, 'Ingredients: Rice meal, Edible oil, Corn meal, Gram meal, Spices, Condiments & Salt', NULL, NULL),
(21, 'CHANA DAAL MASALA', 'chana-daal-masala', 'assets/images/foodimage/chana-dal.png', 10.00, 'Ingredients: Gram, Edible Vegetable Oil & Edible Common Salt & Spices', NULL, NULL),
(22, 'MOONG DAAL', 'moong-daal', 'assets/images/foodimage/moong-daal.png', 10.00, 'Ingredients: Split Green Gram, Edible Vegetable Oil and Edible Common Salt Powder', NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_23_062001_create_sessions_table', 1),
(7, '2022_12_31_065920_create_food_table', 1),
(8, '2023_01_18_131849_create_reservations_table', 1),
(9, '2023_01_21_054809_create_specialdishes_table', 1),
(10, '2023_01_22_113306_create_testimonials_table', 1),
(11, '2024_05_01_163013_create_banners_table', 1),
(12, '2024_05_12_074636_create_settings_table', 2),
(13, '2024_06_01_014108_create_blogs_table', 3),
(14, '2024_06_08_055204_create_dealers_table', 4),
(15, '2024_06_08_061948_create_teams_table', 4),
(16, '2024_06_20_190220_add_page_to_banners_table', 5),
(17, '2024_08_17_180002_add_address_to_reservations_table', 6),
(18, '2024_08_26_152807_create_feedback_table', 6);

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
  `tokenable` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `person` enum('1','2','3','4','5','6') NOT NULL,
  `food_id` bigint(20) UNSIGNED DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `product_name`, `phone_number`, `date`, `time`, `person`, `food_id`, `address`, `created_at`, `updated_at`) VALUES
(1, 'local', NULL, '9860309035', NULL, NULL, '3', 1, NULL, '2024-05-16 22:28:57', '2024-05-16 22:28:57'),
(2, 'Rishi Timalsina', 'Makhan', '9860309035', NULL, NULL, '3', NULL, NULL, '2024-05-16 22:29:06', '2024-05-16 22:29:06'),
(3, 'Rishi Timalsina', NULL, '9860309035', NULL, NULL, '3', NULL, NULL, '2024-05-16 22:30:20', '2024-05-16 22:30:20'),
(4, NULL, NULL, '9860309035', NULL, NULL, '1', NULL, NULL, '2024-05-16 22:30:27', '2024-05-16 22:30:27'),
(5, 'Rishi Timalsina', NULL, '9860309035', NULL, NULL, '3', 5, NULL, '2024-05-17 01:38:26', '2024-05-17 01:38:26'),
(6, 'local', NULL, '9860309035', NULL, NULL, '4', 2, NULL, '2024-05-18 11:09:03', '2024-05-18 11:09:03'),
(7, 'Suman', NULL, '1234123423', NULL, NULL, '1', 2, NULL, '2024-05-31 04:37:03', '2024-05-31 04:37:03'),
(8, 'Dipesh', NULL, '9851198357', NULL, NULL, '2', 5, NULL, '2024-05-31 21:07:44', '2024-05-31 21:07:44'),
(9, 'samip', NULL, '9860 309 035', NULL, NULL, '6', 8, NULL, '2024-07-05 14:35:35', '2024-07-05 14:35:35'),
(10, 'local', NULL, '9860309035', NULL, NULL, '4', 8, NULL, '2024-07-05 14:35:41', '2024-07-05 14:35:41'),
(11, 'Rishi Timalsina', NULL, '9860309035', NULL, NULL, '4', 8, NULL, '2024-07-05 15:32:54', '2024-07-05 15:32:54'),
(12, 'samip', NULL, '9860 309 035', NULL, NULL, '4', 8, NULL, '2024-07-06 08:08:55', '2024-07-06 08:08:55'),
(13, 'Rishi Timalsina', NULL, '9860309035', NULL, NULL, '1', 8, NULL, '2024-07-19 06:08:24', '2024-07-19 06:08:24'),
(14, NULL, NULL, '9860309035', NULL, NULL, '5', 1, NULL, '2024-07-19 17:13:22', '2024-07-19 17:13:22'),
(15, 'Rishi Timalsina', NULL, '9860309035', NULL, NULL, '5', 1, NULL, '2024-07-19 17:16:57', '2024-07-19 17:16:57'),
(16, 'Rishi Timalsina', NULL, '9860309035', NULL, NULL, '5', 1, NULL, '2024-07-19 17:16:58', '2024-07-19 17:16:58'),
(17, 'Rishi Timalsina', NULL, '9860 309 035', NULL, NULL, '5', 7, NULL, '2024-07-20 14:32:39', '2024-07-20 14:32:39'),
(18, 'Dipesh Mandal', 'sadabahar miks', '9851198357', NULL, NULL, '1', NULL, NULL, '2024-08-14 09:17:43', '2024-08-14 09:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `fab_icon` varchar(255) DEFAULT NULL,
  `site_name` varchar(255) NOT NULL,
  `about_us` text NOT NULL,
  `about_us_image` varchar(255) DEFAULT NULL,
  `contact_address` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `opening_hours` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `fab_icon`, `site_name`, `about_us`, `about_us_image`, `contact_address`, `contact_phone`, `contact_email`, `opening_hours`, `created_at`, `updated_at`) VALUES
(1, 'MJChA_1723197133.png', NULL, 'technobiomed', '<p>Maha spice and food product is basically a FMCG products of snacks and namkeens founded in 2074 by Mr. Madan Raj Neupane. It is a sole proprietorship profit base industrial firm. Balance of taste is ensured without compromising health with wide range of varieties provided to our customers. All our products maintain a constant sense of quality and simplicity. The ingredients and recipes we choose &nbsp;extremely carefully to emphasize these fundamentals. Our commitment is to serve &nbsp;the most authentic tastes &nbsp;to the consumer through our quality products. Our main view is to establish a company and to increase consumable goods production, distribution, and sales at market as it is a sole proprietorship profit base industrial firm. Our main focus is to manufacture puff type of short time commercial product snack and long period consumable product namkeen. &nbsp;We have around &nbsp;50+ product range in namkeen and snacks which has only been possible because of quality products and rich taste and around 100 plus members working together as a family in the company.<br>Our market network has spread on &nbsp;4 province of Nepal in Sudduer Paschim Pradesh, Lumbini Pradesh, Karnali Pradesh and Bagmati Pradesh. Recently we have launched about 10920 outlets all over our market area working together with 52 dealership and have received a great feedback from the dealers.</p>', '8Muzf_1723402064.jpeg', 'Kailali Lamki', '+9779869711440', 'info@email.com', '<p>fdasfsafdfasdfa</p>', '2024-05-16 21:53:41', '2024-08-12 07:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `specialdishes`
--

CREATE TABLE `specialdishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namepart1` varchar(200) NOT NULL,
  `namepart2` varchar(200) NOT NULL,
  `img` varchar(250) NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialdishes`
--

INSERT INTO `specialdishes` (`id`, `namepart1`, `namepart2`, `img`, `desc`, `price`, `created_at`, `updated_at`) VALUES
(1, 'सदाबहार', 'मिक्स (700 Gm)', 'assets/images/spdishimage/1723433019.png', 'सदाबहार मिक्स  is one of the demanding product of Mahashree Namkeen. \r\nIngredients are  Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices.', 220.00, '2024-05-03 21:13:42', '2024-08-14 09:13:00'),
(2, 'मजेदार', 'मिक्स  (580 Gm)', 'assets/images/spdishimage/1723433181.png', 'मजेदार  मिक्स is also the demanding Product of Mahashree Namkeen. \r\nIngredients: Selected Chewra, White Puffed, Chana Dal, Rice Flour, Cornflakes, Masoor Dal, Chana Besan, Corn Flour, Peanuts, Matar Dal, Matar besan, Edible Oil, Black Salt, Iodised Salt, Flavour and other spices.', 175.00, '2024-05-03 21:13:42', '2024-08-14 09:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `contact_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `role`, `contact_no`, `email`, `photo_url`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(4, 'Bishnu Neupane', 'Product Manager and Supervisor', NULL, NULL, NULL, '1723140783.jpg', 'He is responsible for product strategy and vision including product development, supervises activities of the team, ensuring the training and development of employees.', NULL, '2024-08-08 22:13:03'),
(5, 'Sushant Neupane', 'National Sales Manager', NULL, NULL, NULL, '1723140846.jpg', 'He is an expert in overseeing the sales operations of an organization across an entire country by conducting market research to identify opportunities for growth and expansion.', NULL, '2024-08-08 22:14:06'),
(6, 'Bhim BK', 'Supervisor and Mechanical Manager', NULL, NULL, NULL, '1723140899.jpg', 'He oversees the daily operations and activities of a team with responsibilities of team management and monitoring performance, also bears the knowledge of mechanical engineering and maintenance activities within an organization.', NULL, '2024-08-08 22:14:59'),
(7, 'Rupesh KC', 'Regional Sales Manager', NULL, NULL, NULL, '1723140925.jpg', 'His key role is overseeing the sales operations within a specific area implementing sales strategies and planning.', NULL, '2024-08-08 22:15:25'),
(8, 'Lokesh Chaulena', 'A/C and Finance Head', NULL, NULL, NULL, '1723140952.jpg', 'He assumes the role of managing and overseeing the overall financial strategy and accounts of an organization.', NULL, '2024-08-08 22:15:52'),
(9, 'Bushnu Rimal', 'Sub A/C and Finance', NULL, NULL, NULL, '1723140987.jpg', 'Work as a financial professional by managing specific aspects of accounting under the supervision of a senior accountant.', NULL, '2024-08-08 22:16:27');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `bio` varchar(200) NOT NULL,
  `review` text NOT NULL,
  `rating` enum('0.5','1','1.5','2','2.5','3','3.5','4','4.5','5') NOT NULL,
  `img` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `bio`, `review`, `rating`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Bijaya Store', 'Rolpa', 'We loved how your team is committed to providing high-quality customer services and easy approach. we look forward to be connected with you in future as well. Best wishes!!', '2', 'assets/images/testimonialimage/1723396764.jpeg', '2024-08-10 13:02:14', '2024-08-11 21:19:24'),
(2, 'B And B Suppliers', 'Salyan', 'I highly recommend this dealership for their services as they were professional, knowledgeable and did an excellent job on the products.', '2', 'assets/images/testimonialimage/1723396795.jpeg', '2024-08-10 13:02:14', '2024-08-11 21:19:55'),
(3, 'Gaunibagh Trade & Suppliers', 'Dhangadhi, Kailali', 'I found them reliable, honest and operate with integrity providing a certain level of trust and assurance.', '2', 'assets/images/testimonialimage/1723396865.jpeg', '2024-08-10 13:02:14', '2024-08-11 21:21:05'),
(4, 'Ramesh', 'Butwal', 'Loved these snacks, flavor is excellent and with reasonable price. I loved how these products can be enjoyed at any time of the day.', '2', 'logo', '2024-08-10 13:02:14', '2024-08-10 13:02:14'),
(5, 'Prakash', 'Pokhara', 'I loved, there is wide variety of products to choose from. And how easy it is to place an order and the speed of the delivery', '2', 'logo', '2024-08-10 13:02:14', '2024-08-10 13:02:14'),
(6, 'Dhiraj', 'Chitwan', 'Snacks to fit all budgets and diets and tastes even better. I like the product quality, way of packaging, fast delivery.', '2', 'logo', '2024-08-10 13:02:14', '2024-08-10 13:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
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
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_reservation_id_foreign` (`reservation_id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialdishes`
--
ALTER TABLE `specialdishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialdishes`
--
ALTER TABLE `specialdishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_reservation_id_foreign` FOREIGN KEY (`reservation_id`) REFERENCES `reservations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_food_id_foreign` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
