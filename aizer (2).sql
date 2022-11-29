-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 02:25 AM
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
-- Database: `aizer`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_banks`
--

CREATE TABLE `add_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bankName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountHolder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IBAN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `accountBalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parpus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_banks`
--

INSERT INTO `add_banks` (`id`, `bankName`, `accountHolder`, `sortCode`, `accountNumber`, `IBAN`, `country`, `refference`, `accountBalance`, `parpus`, `created_at`, `updated_at`) VALUES
(1, 'Dutch Bangla', 'Admin', '123456', '123456789', '123456', 'Bangladesh', '111', '111111111', 'dipossit', '2022-10-15 14:59:37', '2022-10-15 14:59:37'),
(2, 'Marcentail Bank Ltd', 'Admin', '568*-556', '546897564', '56598', 'Bangladesh', '54894', '10000', 'dipossit', '2022-10-15 18:32:36', '2022-10-15 18:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `add_dipossits`
--

CREATE TABLE `add_dipossits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(50) NOT NULL,
  `paymentMethod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txPhoto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `parpus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_dipossits`
--

INSERT INTO `add_dipossits` (`id`, `userId`, `paymentMethod`, `currency`, `amount`, `txId`, `txPhoto`, `status`, `parpus`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 'BDT', '2000', '1234567890', '/wallet/1665883015.png', 'Approved', 'top up', '2022-10-15 19:16:55', '2022-10-15 20:44:37'),
(2, 2, '1', 'BDT', '60000', '1234567890', '/wallet/1665884989.png', 'Approved', 'top up', '2022-10-15 19:49:49', '2022-10-15 20:16:30'),
(3, 2, '1', 'BDT', '5000', '1234567890', '/wallet/1665885587.png', 'Reject', 'top up', '2022-10-15 19:59:47', '2022-10-15 20:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `add_friends`
--

CREATE TABLE `add_friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_requested` int(11) NOT NULL,
  `acceptor` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_friends`
--

INSERT INTO `add_friends` (`id`, `user_requested`, `acceptor`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 10, NULL, '2022-10-10 12:19:20', '2022-10-10 12:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `boost_infos`
--

CREATE TABLE `boost_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `businessPageId` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boost_infos`
--

INSERT INTO `boost_infos` (`id`, `userId`, `businessPageId`, `country`, `for`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Bangladesh', '2', '2022-10-29 11:55:01', '2022-10-29 11:55:01'),
(2, 2, 1, 'Bangladesh', '2', '2022-10-29 13:50:40', '2022-10-29 13:50:40'),
(3, 2, 1, 'Bangladesh', '2', '2022-10-29 15:23:51', '2022-10-29 15:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `business_pages`
--

CREATE TABLE `business_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` tinyint(4) NOT NULL,
  `BusinessName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BusinessSubtitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userPhoto` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessPhoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licence_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `licenceType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_licence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `businessCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessSubCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarms_condition` tinyint(4) DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_pages`
--

INSERT INTO `business_pages` (`id`, `user_id`, `BusinessName`, `BusinessSubtitle`, `userPhoto`, `businessPhoto`, `email`, `phone`, `licence_id`, `licenceType`, `trade_licence`, `language`, `businessCategory`, `business_type`, `businessSubCategory`, `description`, `tarms_condition`, `status`, `password`, `created_at`, `updated_at`) VALUES
(1, 2, 'ABCD Business', 'xyz', '/busineesUser/1662595922.jpg', '/busineesLogo/1662595922.jpg', NULL, NULL, NULL, NULL, NULL, 'English', 'Software', NULL, 'Web Software', 'This is ABCD Business Description.', NULL, 1, '', '2022-09-06 18:24:47', '2022-09-26 18:08:47'),
(6, 2, 'XYZ Business', 'XYZ Subtitle', '/busineesUser/1662595922.jpg', '/busineesLogo/1662595922.jpg', NULL, NULL, '1234566788999', 'Driving', '45596666', 'English', 'Software', NULL, 'Web Software', 'dfdsaf fds', NULL, 1, '', '2022-09-07 18:12:02', '2022-09-07 18:12:02'),
(7, 2, 'MartBD', 'Mart BD', '/busineesUser/1662925282.jpg', '/busineesLogo/1662925282.jpg', 'roynirjon18@gmail.com', NULL, '1234566788999', 'Driving', '45596666', 'English', 'jkjk', NULL, 'Web Software', 'dfdf', NULL, 0, '$2y$10$7IPPp1LYPj6G2x/oyXV5EOrXr2PfwatH9SEzqgaTrHK.j9ZDYuOEG', '2022-09-11 13:41:22', '2022-09-11 13:41:22'),
(8, 2, 'Aemal World', 'Aemal World', '/busineesUser/1663111025.jpg', '/busineesLogo/1663111025.jpg', NULL, NULL, '47444', 'fff', '45596666', 'English', 'Software', NULL, 'Web Software', 'gfhg', NULL, 1, '$2y$10$BMc5tvUZLHvN16bethY2DeyvSUlH.bCvmxgyXqgwmebEZVnjQ6cYO', '2022-09-13 17:17:05', '2022-09-13 17:18:40');

-- --------------------------------------------------------

--
-- Table structure for table `business_settings`
--

CREATE TABLE `business_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) NOT NULL,
  `headerBackground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sliderBackground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryBackground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorycolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandBackground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brandcolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footerBackground` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footercolor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_settings`
--

INSERT INTO `business_settings` (`id`, `business_id`, `headerBackground`, `sliderBackground`, `categoryBackground`, `categorycolor`, `brandBackground`, `brandcolor`, `footerBackground`, `footercolor`, `created_at`, `updated_at`) VALUES
(1, 6, '#0ee1b7', '#b55e5e', '#000000', '#7d2626', '#000000', '#000000', '#000000', '#000000', '2022-10-18 12:48:52', '2022-10-18 12:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `business_sliders`
--

CREATE TABLE `business_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_sliders`
--

INSERT INTO `business_sliders` (`id`, `business_id`, `image`, `content`, `discount`, `title`, `created_at`, `updated_at`) VALUES
(1, 6, '/slider_image/1665254061.png', 'Slider Content Onte', 'Discount price', 'Slider Title', '2022-10-08 12:34:21', '2022-10-08 12:34:21'),
(2, 6, '/slider_image/1665254119.png', 'Content 2', 'Discount content (15%)', 'Slider Title Two', '2022-10-08 12:35:19', '2022-10-08 12:35:19');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productCode` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `business_id`, `userId`, `productCode`, `name`, `image`, `phone`, `address`, `product_title`, `quantity`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(64, 6, 10, '1021', 'Abu Shams Muhammad Ratul', '/product_image/1663634175.jpg', '01789512684', NULL, 'Test Product', '2', '100', '200', '2022-10-17 19:03:21', '2022-10-17 19:03:21'),
(66, 6, 2, '5665655', 'Nirjon Roy', '/product_image/1663635031.jpg', '01518652101', NULL, 'Burger', '1', '500', '500', '2022-10-29 11:39:31', '2022-10-29 11:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profilePhoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverPhoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instragram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsApp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(4, '2022_07_30_192602_create_user_posts_table', 2),
(5, '2022_07_30_193919_create_post_images_table', 3),
(6, '2022_08_14_195630_create_add_friends_table', 4),
(7, '2022_09_05_191407_create_business_pages_table', 5),
(8, '2022_09_14_001825_create_vendor_categories_table', 6),
(9, '2022_09_14_001851_create_vendor_products_table', 6),
(10, '2022_09_20_193846_create_carts_table', 7),
(11, '2022_09_21_181541_create_orders_table', 8),
(12, '2022_09_25_205803_create_order_details_table', 9),
(13, '2022_10_02_183634_create_product_brands_table', 10),
(14, '2022_10_02_203020_create_business_sliders_table', 11),
(15, '2022_10_08_203417_create_business_settings_table', 12),
(16, '2022_10_10_223441_create_reactions_table', 13),
(17, '2022_10_11_011639_create_post_comments_table', 14),
(18, '2022_10_11_013900_create_post_shares_table', 15),
(19, '2022_10_15_182208_create_wallets_table', 16),
(20, '2022_10_15_202734_create_add_banks_table', 16),
(21, '2022_10_15_213049_create_add_dipossits_table', 17),
(22, '2022_10_17_190353_create_send_money_table', 18),
(23, '2022_10_28_011108_create_boost_infos_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `businessId` int(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `productCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderNumber` int(255) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippingAddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Payment Pending',
  `txId` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `businessId`, `userId`, `productCode`, `orderNumber`, `name`, `phone`, `address`, `shippingAddress`, `product_name`, `quantity`, `price`, `total_price`, `status`, `txId`, `created_at`, `updated_at`) VALUES
(1, 6, 2, '444', 36469269, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'ggg', 'Test Product', '4', '100', '400', 'Payment Pending', 1234567890, '2022-09-26 17:37:15', '2022-09-26 17:37:15'),
(2, 6, 2, '444', 36469269, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'ggg', 'Burger', '4', '500', '2000', 'Payment Pending', 1234567890, '2022-09-26 17:37:15', '2022-09-26 17:37:15'),
(3, 6, 2, '444', 36469269, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'ggg', 'Pizza', '5', '500', '2500', 'pending', 1234567890, '2022-09-26 17:37:15', '2022-09-26 17:37:15'),
(4, 6, 2, '444', 36469269, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'ggg', 'dfdfd', '4', '50', '200', 'pending', 1234567890, '2022-09-26 17:37:15', '2022-09-26 17:37:15'),
(5, 6, 2, '5665655', 63952775, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', '55', 'Burger', '3', '500', '1500', 'pending', 1234567890, '2022-09-27 17:37:33', '2022-09-27 17:37:33'),
(6, 6, 2, '444', 83591439, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'dsedsd', 'Test Product', '3', '100', '300', 'pending', 1234567890, '2022-09-27 17:40:31', '2022-09-27 17:40:31'),
(7, 6, 2, '444', 83591439, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'dsedsd', 'Pizza', '1', '500', '500', 'pending', 1234567890, '2022-09-27 17:40:31', '2022-09-27 17:40:31'),
(8, 6, 2, '444', 83591439, 'Nirjon Roy', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'dsedsd', 'dfdfd', '1', '50', '50', 'pending', 1234567890, '2022-09-27 17:40:31', '2022-09-27 17:40:31'),
(9, 6, 10, '444', 78435627, 'Abu Shams Muhammad Ratul', '01789512684', NULL, 'Gabtoli Dhaka', 'Test Product', '1', '100', '100', 'pending', 1234568970, '2022-09-27 18:53:04', '2022-09-27 18:53:04'),
(10, 6, 10, '444', 78435627, 'Abu Shams Muhammad Ratul', '01789512684', NULL, 'Gabtoli Dhaka', 'dfdfd', '1', '50', '50', 'pending', 1234568970, '2022-09-27 18:53:04', '2022-09-27 18:53:04'),
(11, 6, 10, '32836050', 61457063, 'Abu Shams Muhammad Ratul', '01789512684', NULL, 'Gabtoli, Dhaka', 'Test Product', '1', '100', '100', 'pending', 1234567890, '2022-09-27 20:18:52', '2022-09-27 20:18:52'),
(12, 6, 10, '32836050', 61457063, 'Abu Shams Muhammad Ratul', '01789512684', NULL, 'Gabtoli, Dhaka', 'Burger', '1', '500', '500', 'pending', 1234567890, '2022-09-27 20:18:52', '2022-09-27 20:18:52'),
(13, 6, 10, '32836050', 61457063, 'Abu Shams Muhammad Ratul', '01789512684', NULL, 'Gabtoli, Dhaka', 'dfdfd', '1', '50', '50', 'pending', 1234567890, '2022-09-27 20:18:52', '2022-09-27 20:18:52'),
(14, 6, 10, '32836050', 61457063, 'Abu Shams Muhammad Ratul', '01789512684', NULL, 'Gabtoli, Dhaka', 'Test Product2', '1', '500', '500', 'pending', 1234567890, '2022-09-27 20:18:52', '2022-09-27 20:18:52'),
(15, 6, 10, '5665655', 28116486, 'Abu Shams Muhammad Ratul', '01789512684', NULL, '2212', 'Burger', '3', '500', '1500', 'Payment Pending', 1234567890, '2022-09-28 17:21:45', '2022-09-28 17:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `businessId` int(11) DEFAULT NULL,
  `orderNumber` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `totalQuantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalprice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txId` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shippingDetail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `businessId`, `orderNumber`, `userId`, `totalQuantity`, `totalprice`, `status`, `txId`, `shippingDetail`, `created_at`, `updated_at`) VALUES
(1, 6, 36469269, 2, '17', '1150', 'Deliverd', '1234567890', NULL, '2022-09-26 17:37:15', '2022-09-28 16:01:55'),
(2, 6, 63952775, 2, '3', '500', 'Deliverd', '1234567890', NULL, '2022-09-27 17:37:33', '2022-09-28 17:50:21'),
(3, 6, 83591439, 2, '5', '850', 'Pending', '1234567890', NULL, '2022-09-27 17:40:31', '2022-09-27 17:40:31'),
(4, 6, 78435627, 10, '2', '150', 'Pending', '1234568970', 'Gabtoli Dhaka', '2022-09-27 18:53:04', '2022-09-27 18:53:04'),
(5, 6, 61457063, 10, '4', '1150', 'Pending', '1234567890', 'Gabtoli, Dhaka', '2022-09-27 20:18:52', '2022-09-28 15:33:36'),
(6, 6, 28116486, 10, '3', '1500', 'pending', '1234567890', '2212', '2022-09-28 17:21:45', '2022-09-28 17:21:45');

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
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `userId`, `postId`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'nice', '2022-10-10 19:26:28', '2022-10-10 19:26:28'),
(2, 2, 1, 'Fine', '2022-10-10 19:27:32', '2022-10-10 19:27:32'),
(3, 2, 1, 'Looking Good', '2022-10-10 19:28:15', '2022-10-10 19:28:15'),
(4, 2, 2, 'Right', '2022-10-10 19:28:53', '2022-10-10 19:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `UserPostId` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_shares`
--

CREATE TABLE `post_shares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `timeLineShare` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_shares`
--

INSERT INTO `post_shares` (`id`, `userId`, `postId`, `timeLineShare`, `caption`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'i am sharing this post', '2022-10-10 20:05:17', '2022-10-10 20:05:17'),
(2, 2, 1, 1, 'This is Caption', '2022-10-10 20:10:08', '2022-10-10 20:10:08'),
(3, 2, 1, 1, '5rtreter', '2022-10-10 20:10:43', '2022-10-10 20:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) NOT NULL,
  `BrandName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_brands`
--

INSERT INTO `product_brands` (`id`, `business_id`, `BrandName`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'Nike', '/brand_image/1664737888.png', NULL, '2022-10-02 13:11:28', '2022-10-02 13:11:28'),
(2, 6, 'Addidas', '/brand_image/1664739830.png', NULL, '2022-10-02 13:43:50', '2022-10-02 13:43:50'),
(3, 6, 'Puma', '/brand_image/1664740722.png', NULL, '2022-10-02 13:58:42', '2022-10-02 13:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `postId` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reactions`
--

INSERT INTO `reactions` (`id`, `userId`, `postId`, `like`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2022-10-10 17:17:15', '2022-10-10 17:17:15'),
(2, 2, 2, 1, '2022-10-10 17:18:56', '2022-10-10 17:18:56'),
(3, 2, 1, 1, '2022-10-10 17:23:18', '2022-10-10 17:23:18'),
(4, 2, 1, 1, '2022-10-10 17:36:55', '2022-10-10 17:36:55'),
(5, 2, 1, 1, '2022-10-15 12:01:17', '2022-10-15 12:01:17');

-- --------------------------------------------------------

--
-- Table structure for table `send_money`
--

CREATE TABLE `send_money` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_user_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `send_money`
--

INSERT INTO `send_money` (`id`, `form_user_id`, `to_user_id`, `from_phone`, `from_email`, `to_phone`, `to_email`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, 10, '01518652101', 'roynirjon18@gmail.com', '01789512684', 'ratul@gmail.com', '2000', '2022-10-17 16:26:59', '2022-10-17 16:26:59'),
(2, 2, 4, '01518652101', 'roynirjon18@gmail.com', '32111265', 'user@gmail.com', '10000', '2022-10-17 17:43:05', '2022-10-17 17:43:05'),
(3, 2, 10, '01518652101', 'roynirjon18@gmail.com', '01789512684', 'ratul@gmail.com', '10000', '2022-10-17 18:00:01', '2022-10-17 18:00:01'),
(4, 10, 1, '01789512684', 'ratul@gmail.com', '01774865115', 'roynirjon18@gmail.com', '10000', '2022-10-17 18:47:13', '2022-10-17 18:47:13'),
(5, 2, 4, '01518652101', 'roynirjon18@gmail.com', '01789512684', 'ratul@gmail.com', '5000', '2022-10-17 18:59:55', '2022-10-17 18:59:55'),
(6, 4, 1, '32111265', 'user@gmail.com', '01518652101', 'roynirjon18@gmail.com', '14000', '2022-10-17 19:31:17', '2022-10-17 19:31:17');

-- --------------------------------------------------------

--
-- Table structure for table `shop_settings`
--

CREATE TABLE `shop_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profilePhoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coverPhoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation_start` date DEFAULT current_timestamp(),
  `occuption_end` date DEFAULT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `school_start` date DEFAULT NULL,
  `school_end` date DEFAULT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `college_start` date DEFAULT NULL,
  `college_end` date DEFAULT NULL,
  `university` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university_start` date DEFAULT NULL,
  `university_end` date DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instragram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsApp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '2',
  `status_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `language_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nickName`, `email`, `phone`, `address`, `gender`, `profilePhoto`, `coverPhoto`, `occupation`, `position`, `occupation_start`, `occuption_end`, `school`, `school_start`, `school_end`, `college`, `college_start`, `college_end`, `university`, `university_start`, `university_end`, `website`, `facebook`, `twitter`, `instragram`, `youtube`, `whatsApp`, `linkedin`, `DOB`, `religion`, `relationship_status`, `role`, `status_id`, `email_verified_at`, `password`, `verification_code`, `is_verified`, `remember_token`, `created_at`, `updated_at`, `language_one`, `language_two`, `language_three`) VALUES
(2, 'Nirjon Roy', 'Tutul', 'roynirjon18@gmail.com', '01518652101', NULL, 'male', '/user/1659985373.jpg', NULL, 'Itna Group', 'Software Engineer', '2022-04-01', NULL, 'Sylhet Technical School And College, Sylhet', '2014-01-01', '2015-05-05', 'Sylhet Polytechnic Inistitute', '2015-05-05', NULL, 'Green University', NULL, NULL, 'ttis.com', 'facebook.com/nirjonroy.37', 'twwww', NULL, NULL, '+8801774865115', NULL, '2022-07-31', 'Hindu', NULL, '2', NULL, NULL, '$2y$10$6EalpkgqARaHHBMh0Bne4eJhcHQw3alicGSpYmnPp948wHY70o0GS', 'c8d4394e40c47e342cbe571519a1cbc61360eabc', 0, NULL, '2022-06-16 12:13:10', '2022-10-15 17:46:11', 'Bangla', 'English', NULL),
(3, 'Admin', NULL, 'admin@gmail.com', '00000', NULL, 'male', NULL, NULL, NULL, NULL, '2022-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '$2y$10$3GgE/2S519PvtDk.xDBPROQZOX.O/.F3.Vda5tmHoSc5mBALiSQMe', '6835363aaaa19e22bd5fc5246f6bef7ddc368d82', 0, NULL, '2022-06-16 12:16:08', '2022-06-16 12:16:08', NULL, NULL, NULL),
(4, 'User', NULL, 'user@gmail.com', '32111265', NULL, 'female', '/user/1660164078.jpg', NULL, NULL, NULL, '2022-06-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2000-03-31', 'Islam', NULL, '2', NULL, NULL, '$2y$10$a6b8TRvw/ApoVK1o0Ej.eOFy2mriLK4BX/CoKbmO7LR6WrvntYXvS', 'abc5a75ceef3ff3cc76be8a3276d14b3763881c2', 0, NULL, '2022-06-18 12:02:31', '2022-08-10 14:41:18', NULL, NULL, NULL),
(10, 'Abu Shams Muhammad Ratul', 'Leo Smash', 'ratul@gmail.com', '01789512684', NULL, 'male', '/user/1661726367.jpg', NULL, NULL, NULL, '2022-08-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1994-08-18', 'Islam', 'Single', '2', NULL, NULL, '$2y$10$hBfS2vi/7hGbCM44LdsoDuA5G8dFKortjTJT19q5Bu4rs32k7UdMi', 'df73a688577c4d1888fdf5ee035f23b7236ca838', 0, NULL, '2022-08-14 13:37:29', '2022-08-28 16:39:27', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`id`, `userId`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'ddd fdfe ee', 'avatar-1.jpg', '2022-08-30 16:09:07', '2022-08-30 16:09:07'),
(2, 2, 'fcvfgfgfff', 'avatar-3 - Copy.jpgdark.jpg', '2022-08-30 16:14:30', '2022-08-30 16:14:30'),
(3, 2, 'This is post Caption', '1.1.png', '2022-10-12 19:14:52', '2022-10-12 19:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_categories`
--

INSERT INTO `vendor_categories` (`id`, `business_id`, `categoryName`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'first Category', NULL, 1, '2022-09-17 13:16:43', '2022-09-17 13:16:43'),
(2, 6, '2nd Category', NULL, 1, '2022-09-17 13:18:50', '2022-09-17 13:18:50'),
(3, 8, 'category first', NULL, 1, '2022-09-17 13:19:33', '2022-09-17 13:19:33'),
(4, 6, 'Food', '/category_image/1663458228.jpg', 1, '2022-09-17 17:43:48', '2022-09-17 17:43:48'),
(5, 6, 'Food', '/category_image/1663458228.jpg', 1, '2022-09-17 17:43:48', '2022-09-17 17:43:48'),
(7, 6, 'Books', '/category_image/1664420531.png', 1, '2022-09-28 21:02:11', '2022-09-28 21:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_products`
--

CREATE TABLE `vendor_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) NOT NULL,
  `vendorCategoryId` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendorBrandId` int(11) DEFAULT NULL,
  `productType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productDescription` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discountPrice` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productSize` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ProductColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalProduct` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_products`
--

INSERT INTO `vendor_products` (`id`, `business_id`, `vendorCategoryId`, `vendorBrandId`, `productType`, `productName`, `productDescription`, `productImage`, `Currency`, `productPrice`, `discountPrice`, `productCode`, `productSize`, `ProductColor`, `totalProduct`, `status`, `created_at`, `updated_at`) VALUES
(2, 6, 'first Category', 0, NULL, 'Test Product', 'kdfjdlksfj kjfdlk', '/product_image/1663634175.jpg', 'BDT', '100', '50', '1021', 'XL', NULL, '10', '1', '2022-09-19 18:36:15', '2022-09-19 18:36:15'),
(3, 6, 'Food', 0, NULL, 'Burger', 'kdfjlkds dskfjlkdsfjo kjlk', '/product_image/1663635031.jpg', 'BDT', '500', '400', '5665655', 'ddd', 'ddd', '20', '1', '2022-09-19 18:50:31', '2022-09-19 18:50:31'),
(4, 6, 'first Category', 0, NULL, 'Pizza', 'dfd sdsfdsa sffds', '/product_image/1663635114.jpg', 'BDT', '500', '400', '123555', 'ddd', 'Red', '20', '1', '2022-09-19 18:51:54', '2022-09-19 18:51:54'),
(9, 6, 'first Category', 0, NULL, 'Test Product2', 'lkllll', '/product_image/1663888582.jpg', 'BDT', '500', NULL, '32836050', 'XL', 'Red', '10', '1', '2022-09-22 17:16:22', '2022-09-22 17:16:22'),
(10, 6, '2nd Category', 0, NULL, 'Test Product', 'kkkk', '/product_image/1663888621.jpg', 'BDT', '500', NULL, '58349510', 'ddd', 'Red', '10', '1', '2022-09-22 17:17:01', '2022-09-22 17:17:01'),
(13, 6, 'Food', 0, 'Physical', 'Pizza 12\"', 'kjdslkf kdfjldksjf', '/product_image/1664419453.png', 'BDT', '1000', '800', '76255518', '12\"', NULL, '12', '1', '2022-09-28 20:44:13', '2022-09-28 20:44:13'),
(14, 6, 'first Category', 0, 'Digital', 'Dopamin Detox', 'dfsaf', '/product_image/1664419752.png', 'BDT', '300', '280', '12504786', NULL, NULL, '5', '1', '2022-09-28 20:49:12', '2022-09-28 20:49:12'),
(15, 6, '1', 0, 'Digital', 'Black', 'kdfjlakd', '/product_image/1664495759.png', 'BDT', '200', '150', '44637413', '1', 'red', '12', '1', '2022-09-29 17:55:59', '2022-09-29 17:55:59'),
(16, 6, '2', NULL, 'Digital', 'Test Product', 'ikjkj', '/product_image/1664741484.png', 'BDT', '500', '400', '93642601', 'ddd', 'Red', '10', '1', '2022-10-02 14:11:24', '2022-10-02 14:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `jhgjhg` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_banks`
--
ALTER TABLE `add_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_dipossits`
--
ALTER TABLE `add_dipossits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_friends`
--
ALTER TABLE `add_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boost_infos`
--
ALTER TABLE `boost_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_pages`
--
ALTER TABLE `business_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_settings`
--
ALTER TABLE `business_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_sliders`
--
ALTER TABLE `business_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_shares`
--
ALTER TABLE `post_shares`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send_money`
--
ALTER TABLE `send_money`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_settings`
--
ALTER TABLE `shop_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_products`
--
ALTER TABLE `vendor_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_banks`
--
ALTER TABLE `add_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_dipossits`
--
ALTER TABLE `add_dipossits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_friends`
--
ALTER TABLE `add_friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `boost_infos`
--
ALTER TABLE `boost_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_pages`
--
ALTER TABLE `business_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `business_settings`
--
ALTER TABLE `business_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_sliders`
--
ALTER TABLE `business_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_shares`
--
ALTER TABLE `post_shares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `send_money`
--
ALTER TABLE `send_money`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shop_settings`
--
ALTER TABLE `shop_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor_products`
--
ALTER TABLE `vendor_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
