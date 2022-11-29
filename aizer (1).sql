-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2022 at 09:27 PM
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
(2, 2, 10, 1, '2022-08-21 12:12:09', '2022-08-21 12:12:09'),
(4, 10, 4, 1, '2022-08-21 13:28:51', '2022-08-21 13:28:51');

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
(1, 2, 'ABCD Business', 'xyz', '/busineesUser/1662595922.jpg', '/busineesLogo/1662595922.jpg', NULL, NULL, NULL, NULL, NULL, 'English', 'Software', NULL, 'Web Software', 'This is ABCD Business Description.', NULL, 0, '', '2022-09-06 18:24:47', '2022-09-07 13:40:46'),
(6, 2, 'XYZ Business', 'XYZ Subtitle', '/busineesUser/1662595922.jpg', '/busineesLogo/1662595922.jpg', NULL, NULL, '1234566788999', 'Driving', '45596666', 'English', 'Software', NULL, 'Web Software', 'dfdsaf fds', NULL, 1, '', '2022-09-07 18:12:02', '2022-09-07 18:12:02'),
(7, 2, 'MartBD', 'Mart BD', '/busineesUser/1662925282.jpg', '/busineesLogo/1662925282.jpg', 'roynirjon18@gmail.com', NULL, '1234566788999', 'Driving', '45596666', 'English', 'jkjk', NULL, 'Web Software', 'dfdf', NULL, 0, '$2y$10$7IPPp1LYPj6G2x/oyXV5EOrXr2PfwatH9SEzqgaTrHK.j9ZDYuOEG', '2022-09-11 13:41:22', '2022-09-11 13:41:22'),
(8, 2, 'Aemal World', 'Aemal World', '/busineesUser/1663111025.jpg', '/busineesLogo/1663111025.jpg', NULL, NULL, '47444', 'fff', '45596666', 'English', 'Software', NULL, 'Web Software', 'gfhg', NULL, 1, '$2y$10$BMc5tvUZLHvN16bethY2DeyvSUlH.bCvmxgyXqgwmebEZVnjQ6cYO', '2022-09-13 17:17:05', '2022-09-13 17:18:40');

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
(9, '2022_09_14_001851_create_vendor_products_table', 6);

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
(2, 'Nirjon Roy', 'Tutul', 'roynirjon18@gmail.com', '01518652101', 'F#D4, Prantik, H # 70/1, Dhanmondi 6A, Dhaka, 1210', 'male', '/user/1659985373.jpg', NULL, 'Itna Group', 'Software Engineer', '2022-04-01', NULL, 'Sylhet Technical School And College, Sylhet', '2014-01-01', '2015-05-05', 'Sylhet Polytechnic Inistitute', '2015-05-05', NULL, 'Green University', NULL, NULL, 'ttis.com', 'facebook.com/nirjonroy.37', 'twwww', NULL, NULL, '+8801774865115', NULL, '2022-07-31', 'Hindu', NULL, '2', NULL, NULL, '$2y$10$6EalpkgqARaHHBMh0Bne4eJhcHQw3alicGSpYmnPp948wHY70o0GS', 'c8d4394e40c47e342cbe571519a1cbc61360eabc', 0, NULL, '2022-06-16 12:13:10', '2022-08-08 13:02:53', 'Bangla', 'English', NULL),
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
(2, 2, 'fcvfgfgfff', 'avatar-3 - Copy.jpgdark.jpg', '2022-08-30 16:14:30', '2022-08-30 16:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_categories`
--

CREATE TABLE `vendor_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendor_categories`
--

INSERT INTO `vendor_categories` (`id`, `business_id`, `categoryName`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'first Category', 1, '2022-09-17 13:16:43', '2022-09-17 13:16:43'),
(2, 6, '2nd Category', 1, '2022-09-17 13:18:50', '2022-09-17 13:18:50'),
(3, 8, 'category first', 1, '2022-09-17 13:19:33', '2022-09-17 13:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_products`
--

CREATE TABLE `vendor_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendorCategoryId` tinyint(4) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productCode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productSize` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalProduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_friends`
--
ALTER TABLE `add_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_pages`
--
ALTER TABLE `business_pages`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_friends`
--
ALTER TABLE `add_friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `business_pages`
--
ALTER TABLE `business_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vendor_categories`
--
ALTER TABLE `vendor_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendor_products`
--
ALTER TABLE `vendor_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
