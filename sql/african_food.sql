-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 12:13 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `african_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_short_title` varchar(255) DEFAULT NULL,
  `about_long_title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` longtext DEFAULT NULL,
  `about_short_title_1` varchar(255) DEFAULT NULL,
  `about_long_title_1` varchar(255) DEFAULT NULL,
  `description_1` longtext DEFAULT NULL,
  `image_1` longtext DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_sub_heading` varchar(255) DEFAULT NULL,
  `banner_main_heading` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_short_title`, `about_long_title`, `description`, `image`, `about_short_title_1`, `about_long_title_1`, `description_1`, `image_1`, `banner_image`, `banner_sub_heading`, `banner_main_heading`, `created_at`, `updated_at`) VALUES
(1, 'Our Mission', 'Claim Your Business & Get Started Today!', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.', 'images/about/1701676296_bn-5.png', 'Process', 'How it works & features Around The Globe', '<div class=\"uli-list-features\">\r\n<div class=\"position-relative\" style=\"box-sizing: border-box; outline: none; position: relative; color: #696969; font-family: Jost, sans-serif; background-color: #ffffff;\">\r\n<p class=\"mb-3\" style=\"box-sizing: border-box; outline: none; line-height: 1.8; margin: 0px 0px 1rem !important 0px;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>\r\n</div>\r\n</div>', 'images/about/1701680291_bn-4.png', 'images/about/1701680291_about.jpg', 'Smart team alwasy create better thing and better solutions.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco', '2023-12-04 02:21:36', '2023-12-04 05:45:39');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL COMMENT '12345678',
  `role` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$RL3t1CVN47Ozn9HjrDuS6.SrXdrBgosKzpuFSvbMin5P0ZSZhbhmG', 'admin', '', NULL, '2023-12-01 04:09:14', '2023-12-01 04:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Health Score 8.7 / 10', '2023-11-30 22:45:51', '2023-11-30 22:45:51'),
(2, 'Offers Delivery', '2023-11-30 22:46:09', '2023-11-30 22:46:09'),
(3, 'Offers Takeout', '2023-11-30 22:46:16', '2023-11-30 22:46:16'),
(4, 'Reservations', '2023-11-30 22:46:22', '2023-11-30 22:46:22'),
(5, 'Staff wears masks', '2023-11-30 22:46:29', '2023-11-30 22:46:29'),
(6, 'Vegan Options', '2023-11-30 22:46:35', '2023-11-30 22:46:35'),
(7, 'Vegetarian Options', '2023-11-30 22:46:41', '2023-11-30 22:46:41'),
(8, 'Accepts Credit Cards', '2023-11-30 22:46:47', '2023-11-30 22:46:47'),
(9, 'Casual', '2023-11-30 22:46:52', '2023-11-30 22:46:52'),
(10, 'Moderate Noise', '2023-11-30 22:46:57', '2023-11-30 22:46:57'),
(11, 'Offers Catering', '2023-11-30 22:47:05', '2023-11-30 22:47:05'),
(12, 'Good for Groups', '2023-11-30 22:47:12', '2023-11-30 22:47:12'),
(13, 'Good For Kids', '2023-11-30 22:47:28', '2023-11-30 22:47:28'),
(14, 'Good for Breakfast', '2023-11-30 22:47:34', '2023-11-30 22:47:34'),
(15, 'Brunch, Lunch, Dinner', '2023-11-30 22:47:51', '2023-11-30 22:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `business_listings`
--

CREATE TABLE `business_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `approval` varchar(255) NOT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` varchar(500) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listings`
--

INSERT INTO `business_listings` (`id`, `user_id`, `title`, `approval`, `category_id`, `description`, `latitude`, `longitude`, `state`, `city`, `address`, `zip_code`, `mobile`, `email`, `website`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, '2', 'Dinner Recipes', 'show', '1', 'Big, beautiful, bossy flavors ahead! Shiitake mushrooms and chicken wontons swim in a brothy flavor-filled sauce and get finished with a swirl of sesame oil and chili crisp on top. Yum!', '12345', '54545', 'west bengal', 'Kolkata', 'Kameko Christian', '42673', '4556963529', 'sayan@gmail.com', 'https://pinchofyum.com/chicken-wontons-in-spicy-chili-sauce', 'approve', NULL, '2023-12-04 22:45:18', '2023-12-05 00:16:42'),
(8, '2', 'House Favorite Roasted Brussels Sprouts', 'hide', '2', 'Prep your brussels sprouts. Cut off the base of the brussel sprout, remove the outer leaves, and cut it in half vertically. Turn on some music or a good show and go to town.', '45454', '12345', 'Aut culpa consectetu', 'Sapiente dolor quide', 'Kameko Christian', '42673', '0000000000', 'sayan@gmail.com', 'https://pinchofyum.com/house-favorite-brussels-sprouts', 'approve', NULL, '2023-12-04 22:54:43', '2023-12-05 00:16:50'),
(9, '1', 'Basic Soft Pretzels', 'show', '6', 'Beer cheese soup was made for soft pretzels. I know it, you know it, and these twisty knots of soft fluffy bread with the chunky salt know it.\r\n\r\nAnd that is my job today: to give you the pretzels you need to complete the beer cheese soup set. Soft, excessively fluffy, basic delicious pretzels. You know I take this job very seriously.', '22.688021', '88.376221', 'Aut culpa consectetu', 'Sapiente dolor quide', 'Kameko Christian', '42673', '4556963529', 'teethi@gmail.com', 'https://pinchofyum.com/basic-soft-pretzels', 'approve', NULL, '2023-12-04 23:42:03', '2023-12-05 00:16:54'),
(10, '1', 'Dolor eu lorem anim', 'hide', '3', 'Beatae aliquam nemo', '777', '777', 'Labore nihil et cons', 'Debitis occaecat vol', 'Voluptate ullam est', '29151', '0000000000', 'nomejiw@mailinator.com', 'https://www.sumiky.ca', 'reject', NULL, '2023-12-04 23:43:27', '2023-12-05 00:17:14'),
(11, '5', 'Quaerat ipsum omnis', 'show', '7', 'Deserunt vel aut rec', '12345', '636236', 'Rerum labore dolores', 'Eum nobis voluptas e', 'At eum doloribus id', '59451', '1233456789', 'myqoti@mailinator.com', 'https://www.cuwi.info', 'approve', NULL, '2023-12-05 06:39:50', '2023-12-05 06:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_amenities`
--

CREATE TABLE `business_listing_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_listing_id` varchar(255) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `custom` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listing_amenities`
--

INSERT INTO `business_listing_amenities` (`id`, `business_listing_id`, `amenities`, `custom`, `created_at`, `updated_at`) VALUES
(19, '2', 'Health Score 8.7 / 10', '0', '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(20, '2', 'Reservations', '0', '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(21, '2', 'Vegetarian Options', '0', '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(32, '3', 'Health Score 8.7 / 10', '0', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(33, '3', 'Reservations', '0', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(34, '3', 'Vegetarian Options', '0', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(35, '3', 'Moderate Noise', '0', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(36, '3', 'Good For Kids', '0', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(37, '1', 'Health Score 8.7 / 10', '0', '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(38, '1', 'Brunch, Lunch, Dinner', '0', '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(39, '1', 'trtrt', '0', '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(40, '4', 'Health Score 8.7 / 10', '0', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(41, '4', 'Offers Delivery', '0', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(42, '4', 'Staff wears masks', '0', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(43, '4', 'Accepts Credit Cards', '0', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(44, '4', 'Casual', '0', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(45, '4', 'Brunch, Lunch, Dinner', '0', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(46, '5', 'Offers Delivery', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(47, '5', 'Vegetarian Options', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(48, '5', 'Accepts Credit Cards', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(49, '5', 'Casual', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(50, '5', 'Good for Groups', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(51, '5', 'Good For Kids', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(52, '5', 'Brunch, Lunch, Dinner', '0', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(53, '6', 'Offers Delivery', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(54, '6', 'Offers Takeout', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(55, '6', 'Reservations', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(56, '6', 'Staff wears masks', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(57, '6', 'Accepts Credit Cards', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(58, '6', 'Casual', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(59, '6', 'Good For Kids', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(60, '6', 'Brunch, Lunch, Dinner', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(61, '7', 'Reservations', '0', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(62, '7', 'Staff wears masks', '0', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(63, '7', 'Vegetarian Options', '0', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(64, '7', 'Spicy Chili Sauce', '0', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(74, '8', 'Health Score 8.7 / 10', '0', '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(75, '8', 'Offers Delivery', '0', '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(76, '8', 'Offers Takeout', '0', '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(77, '9', 'Moderate Noise', '0', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(78, '9', 'Good For Kids', '0', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(79, '9', 'Good for Breakfast', '0', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(80, '9', 'Brunch, Lunch, Dinner', '0', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(81, '10', 'Offers Delivery', '0', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(82, '10', 'Offers Takeout', '0', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(83, '10', 'Reservations', '0', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(84, '10', 'Moderate Noise', '0', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(85, '10', 'Good For Kids', '0', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(104, '11', 'Offers Takeout', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(105, '11', 'Staff wears masks', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(106, '11', 'Vegan Options', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(107, '11', 'Vegetarian Options', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(108, '11', 'Casual', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(109, '11', 'Moderate Noise', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(110, '11', 'Offers Catering', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(111, '11', 'Good for Groups', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(112, '11', 'Brunch, Lunch, Dinner', '0', '2023-12-05 06:41:57', '2023-12-05 06:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_images`
--

CREATE TABLE `business_listing_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_listing_id` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listing_images`
--

INSERT INTO `business_listing_images` (`id`, `business_listing_id`, `images`, `created_at`, `updated_at`) VALUES
(1, '7', 'images/Business_Images/1701749718_l-1.jpg', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(2, '7', 'images/Business_Images/1701749718_l-2.jpg', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(3, '7', 'images/Business_Images/1701749718_l-3.jpg', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(4, '7', 'images/Business_Images/1701749718_l-4.jpg', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(5, '7', 'images/Business_Images/1701749718_l-5.jpg', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(6, '8', 'images/Business_Images/1701750285_l-8.jpg', '2023-12-04 22:54:45', '2023-12-04 22:54:45'),
(7, '8', 'images/Business_Images/1701750285_l-11.jpg', '2023-12-04 22:54:45', '2023-12-04 22:54:45'),
(8, '8', 'images/Business_Images/1701750286_l-12.jpg', '2023-12-04 22:54:46', '2023-12-04 22:54:46'),
(9, '9', 'images/Business_Images/1701753123_food-01.jpg', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(10, '9', 'images/Business_Images/1701753123_food-02.jpg', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(11, '9', 'images/Business_Images/1701753123_food-04.jpg', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(12, '10', 'images/Business_Images/1701753207_food-09.jpg', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(13, '10', 'images/Business_Images/1701753207_food-07.jpg', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(14, '10', 'images/Business_Images/1701753207_food-06.jpg', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(15, '11', 'images/Business_Images/1701778190_banner.jpg', '2023-12-05 06:39:50', '2023-12-05 06:39:50'),
(16, '11', 'images/Business_Images/1701778190_banner-2.jpg', '2023-12-05 06:39:50', '2023-12-05 06:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_infos`
--

CREATE TABLE `business_listing_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_listing_id` varchar(255) NOT NULL,
  `monday_opening_time` varchar(255) NOT NULL,
  `monday_closing_time` varchar(255) DEFAULT NULL,
  `tuesday_opening_time` varchar(255) NOT NULL,
  `tuesday_closing_time` varchar(255) DEFAULT NULL,
  `wednesday_opening_time` varchar(255) NOT NULL,
  `wednesday_closing_time` varchar(255) DEFAULT NULL,
  `thursday_opening_time` varchar(255) NOT NULL,
  `thursday_closing_time` varchar(255) DEFAULT NULL,
  `friday_opening_time` varchar(255) NOT NULL,
  `friday_closing_time` varchar(255) DEFAULT NULL,
  `saturday_opening_time` varchar(255) NOT NULL,
  `saturday_closing_time` varchar(255) DEFAULT NULL,
  `sunday_opening_time` varchar(255) NOT NULL,
  `sunday_closing_time` varchar(255) DEFAULT NULL,
  `opening_all_time` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listing_infos`
--

INSERT INTO `business_listing_infos` (`id`, `business_listing_id`, `monday_opening_time`, `monday_closing_time`, `tuesday_opening_time`, `tuesday_closing_time`, `wednesday_opening_time`, `wednesday_closing_time`, `thursday_opening_time`, `thursday_closing_time`, `friday_opening_time`, `friday_closing_time`, `saturday_opening_time`, `saturday_closing_time`, `sunday_opening_time`, `sunday_closing_time`, `opening_all_time`, `facebook`, `twitter`, `instagram`, `linkedin`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '7', '10:00 AM', '10:00 PM', '10:00 AM', '10:00 PM', '10:00 AM', '10:00 PM', '10:00 AM', '10:00 PM', '10:00 AM', '10:00 PM', '10:00 AM', '2:00 PM', '10:00 AM', '2:00 PM', NULL, 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', NULL, '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(2, '8', '9:00 AM', '7:00 PM', '9:00 AM', '7:00 PM', '9:00 AM', '9:00 PM', '9:00 AM', '9:00 PM', '9:00 AM', '9:00 PM', '9:00 AM', '9:00 PM', '9:00 AM', '9:00 PM', NULL, 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', NULL, '2023-12-04 22:54:43', '2023-12-04 22:54:43'),
(3, '9', '8:00 AM', '9:00 AM', '8:00 AM', '9:00 AM', '8:00 AM', '9:00 AM', '8:00 AM', '9:00 AM', '8:00 AM', '9:00 AM', '8:00 AM', '9:00 AM', '8:00 AM', '9:00 AM', NULL, 'https://pinchofyum.com/basic-soft-pretzels', 'https://pinchofyum.com/basic-soft-pretzels', 'https://pinchofyum.com/basic-soft-pretzels', 'https://pinchofyum.com/basic-soft-pretzels', NULL, '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(4, '10', '12:00 PM', '8:00 AM', '12:00 AM', '12:00 PM', '3:00 PM', '11:00 AM', '8:00 PM', '12:00 AM', '5:00 AM', '3:00 PM', '9:00 PM', 'Select', '5:00 PM', '5:00 PM', 'on', 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', NULL, '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(5, '11', '6:00 PM', '9:00 PM', '12:00 PM', '4:00 AM', '1:00 AM', '9:00 AM', '10:00 AM', '3:00 PM', '12:00 PM', '6:00 AM', '12:00 AM', '9:00 PM', '10:00 AM', '7:00 PM', NULL, 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', NULL, '2023-12-05 06:39:50', '2023-12-05 06:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_keywords`
--

CREATE TABLE `business_listing_keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_listing_id` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listing_keywords`
--

INSERT INTO `business_listing_keywords` (`id`, `business_listing_id`, `keywords`, `created_at`, `updated_at`) VALUES
(1, '7', 'Chicken Wontons', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(2, '7', 'Spicy Chili Sauce', '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(9, '8', 'Brussels Sprouts', '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(10, '8', 'Prefer', '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(11, '8', 'Taste Good', '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(12, '9', 'Beer cheese soup', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(13, '9', 'pretzels', '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(14, '10', 'Magna in do est non', '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(19, '11', 'Enim qui tempore vo', '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(20, '11', '94984', '2023-12-05 06:41:57', '2023-12-05 06:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_menuitems`
--

CREATE TABLE `business_listing_menuitems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_listing_id` varchar(255) NOT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `about_item` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listing_menuitems`
--

INSERT INTO `business_listing_menuitems` (`id`, `business_listing_id`, `item_name`, `category`, `price`, `about_item`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '7', 'Chicken Wontons in Spicy Chili Sauce', 'Fast', '497', 'Big, beautiful, bossy flavors ahead! Shiitake mushrooms and chicken wontons swim in a brothy flavor-filled sauce and get finished with a swirl of sesame oil and chili crisp on top. Yum!', 'images/MenuItems/17017497180.png', NULL, '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(2, '7', 'Chicken Wontons in Spicy Chili Sauce', 'Fast', '497', 'Big, beautiful, bossy flavors ahead! Shiitake mushrooms and chicken wontons swim in a brothy flavor-filled sauce and get finished with a swirl of sesame oil and chili crisp on top. Yum!', 'images/MenuItems/17017497181.png', NULL, '2023-12-04 22:45:18', '2023-12-04 22:45:18'),
(7, '8', 'brussels sprouts', 'Fast', '4970', 'This is an SOS series recipe – as in, an excellent back pocket choice for when you just need to get something on the table quickly – so here’s our super short and sweet ingredient list:', 'images/MenuItems/17017502840.png', NULL, '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(8, '8', 'brussels sprouts', 'fast', '497', 'This is an SOS series recipe – as in, an excellent back pocket choice for when you just need to get something on the table quickly – so here’s our super short and sweet ingredient list:', 'images/MenuItems/17017517691.jpg', NULL, '2023-12-04 23:19:29', '2023-12-04 23:19:29'),
(9, '9', 'Simple and straightforward', 'Fast', '497', 'And that is my job today: to give you the pretzels you need to complete the beer cheese soup set. Soft, excessively fluffy, basic delicious pretzels. You know I take this job very seriously.', 'images/MenuItems/17017531230.jpg', NULL, '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(10, '9', 'Simple and straightforward', 'Fast', '497', 'And that is my job today: to give you the pretzels you need to complete the beer cheese soup set. Soft, excessively fluffy, basic delicious pretzels. You know I take this job very seriously.', 'images/MenuItems/17017531231.jpg', NULL, '2023-12-04 23:42:03', '2023-12-04 23:42:03'),
(11, '10', 'Jane Edwards', 'Illum saepe amet q', '642', 'Minima optio enim q', 'images/MenuItems/17017532070.jpg', NULL, '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(12, '10', 'Jane Edwards', 'Illum saepe amet q', '642', 'Minima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim qMinima optio enim q', 'images/MenuItems/17017532071.jpg', NULL, '2023-12-04 23:43:27', '2023-12-04 23:43:27'),
(17, '11', 'Kelly Zamora', 'Odio dolor porro aut', '221', 'Et inventore in labo', 'images/MenuItems/17017781900.jpg', NULL, '2023-12-05 06:41:57', '2023-12-05 06:41:57'),
(18, '11', 'Chaney Strong', 'Ducimus suscipit es', '86', 'Consequat Culpa vol', 'images/MenuItems/17017781901.jpg', NULL, '2023-12-05 06:41:57', '2023-12-05 06:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Restaurants', 'images/category/1701662512_restaurant-cutlery-circular-symbol-of-a-spoon-and-a-fork-in-a-circle.png', NULL, '2023-11-30 22:43:42', '2023-12-03 22:31:52'),
(2, 'African Market', 'images/category/1701662526_monument.png', NULL, '2023-11-30 22:43:56', '2023-12-03 22:32:06'),
(3, 'African Online market', 'images/category/1701662544_target-audience.png', NULL, '2023-11-30 22:44:20', '2023-12-03 22:32:24'),
(4, 'Caterers', 'images/category/1701662549_catering.png', NULL, '2023-12-03 22:17:59', '2023-12-03 22:32:29'),
(5, 'Chefs', 'images/category/1701662553_cooking.png', NULL, '2023-12-03 22:18:22', '2023-12-03 22:32:33'),
(6, 'Food distributors', 'images/category/1701662563_chef.png', NULL, '2023-12-03 22:18:42', '2023-12-03 22:32:43'),
(7, 'Food importers to USA', 'images/category/1701662567_food-truck.png', NULL, '2023-12-03 22:19:03', '2023-12-03 22:32:47'),
(8, 'Food photographers', 'images/category/1701662573_popcorn.png', NULL, '2023-12-03 22:23:33', '2023-12-03 22:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `footer_text` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instragram` varchar(255) DEFAULT NULL,
  `linkdin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `logo`, `address`, `phone`, `email`, `footer_text`, `facebook`, `instragram`, `linkdin`, `youtube`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'images/contactdetails/1701767453_logos.png', '7742 Sadar Street Range Road, USA United Kingdom GHQ11', '1234567890', 'info@demo.com', NULL, '#', '#', '#', '#', '#', '2023-12-05 03:04:17', '2023-12-05 03:40:53');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_20_041427_alter_user_table', 1),
(6, '2023_11_21_104253_create_categories_table', 1),
(7, '2023_11_22_034540_create_business_listings_table', 1),
(8, '2023_11_22_035612_create_business_listing_menuitems_table', 1),
(9, '2023_11_22_035907_create_business_listing_infos_table', 1),
(10, '2023_11_22_062220_create_business_listing_images_table', 1),
(11, '2023_11_22_062307_create_business_listing_keywords_table', 1),
(12, '2023_11_22_062327_create_business_listing_amenities_table', 1),
(13, '2023_11_27_040037_create_admins_table', 1),
(14, '2023_11_27_103924_create_user_infos_table', 1),
(15, '2023_11_29_054512_create_amenities_table', 1),
(16, '2023_12_01_070742_alter_business_listing_amenities', 2),
(17, '2023_12_01_095730_create_reviews_table', 3),
(18, '2023_12_04_041313_create_abouts_table', 4),
(19, '2023_12_05_072615_create_contact_details_table', 5),
(20, '2023_12_06_044320_create_subscribes_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `list_id` varchar(255) NOT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  `star` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `list_id`, `user_id`, `star`, `name`, `image`, `email`, `review`, `created_at`, `updated_at`) VALUES
(1, '9', '1', '3', 'Teethi Dhar', NULL, 'teethi@gmail.com', 'Its good. i have better Expectations from here. Otherwise it is good to goo.', '2023-12-05 00:32:20', '2023-12-05 00:32:20'),
(2, '9', '5', '1', 'Sayan', NULL, 'sayan@gmail.com', 'Its good. i have better Expectations from here. Otherwise it is good to goo.', '2023-12-05 00:32:41', '2023-12-05 00:32:41'),
(3, '11', '4', '2', 'Personal', NULL, 'testter@yopmail.com', 'I dont know what this is', '2023-12-05 06:44:13', '2023-12-05 06:44:13'),
(4, '11', '4', '5', 'My name', NULL, 'myname@yopmail.com', 'Review of gods', '2023-12-05 06:47:34', '2023-12-05 06:47:34'),
(5, '7', '3', '1', 'Sayan', NULL, 'sayan@yopmail.com', 'Very bad place', '2023-12-05 23:43:29', '2023-12-05 23:43:29'),
(6, '7', '2', '5', 'Teethi', NULL, 'teethi@gmail.com', 'No you are wrong this is very good', '2023-12-05 23:45:17', '2023-12-05 23:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `user_id`, `email`, `created_at`, `updated_at`) VALUES
(1, '3', 'admin@gmail.com', '2023-12-05 23:33:37', '2023-12-05 23:33:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `role`, `phone`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teethi Dhar', 'images/User/1701748878_girl.png', 'teethi@gmail.com', NULL, '$2y$12$t6JhmFacHAO9k4u0JkWhbeP5purmRl3kDe7E0C9zDye1E2D6FbXke', 'business_owner', '+1 (358) 639-1328', 'active', NULL, NULL, '2023-12-04 22:31:18', '2023-12-04 22:31:18'),
(2, 'Sayan', 'images/User/1701748908_man.png', 'sayan@gmail.com', NULL, '$2y$12$kIVjKxewXgoqDA6I6Am5MeTlaXSgfbNpF/COgF4.FvDAeeL7/7vx6', 'business_owner', '+1 (358) 639-1328', 'active', NULL, NULL, '2023-12-04 22:31:48', '2023-12-04 22:31:48'),
(3, 'Adem', 'images/User/1701753497_user.png', 'user@gmail.com', NULL, '$2y$12$qzONIMKS.DxfRu5ifVJHzu0NzG1jPZFqDb2.JGyLlXAvHhh7k7P3u', 'user', '+1 (189) 496-9287', 'active', NULL, NULL, '2023-12-04 23:48:18', '2023-12-04 23:48:18'),
(4, 'Sayandip', 'images/User/1701777618_404.png', 'sayandipsaha096@gmail.com', NULL, '$2y$12$7ZdSw88wV7qsuR5de5CQT.Yp4iF7npcgeYAvMD2fKv6WTzde5zXhm', 'user', '+1 (358) 639-1328', 'active', NULL, NULL, '2023-12-05 06:30:18', '2023-12-05 06:30:18'),
(5, 'Business Account', 'images/User/1701777652_burger-king.png', 'business@mailinator.com', NULL, '$2y$12$84.wWePBl9Un2WIL5QPH5uLmp6UBSRF28gkOC7DSlP77IpQKnL8Ju', 'business_owner', '+1 (561) 633-7392', 'active', NULL, NULL, '2023-12-05 06:30:53', '2023-12-05 06:35:32');

-- --------------------------------------------------------

--
-- Table structure for table `user_infos`
--

CREATE TABLE `user_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_infos`
--

INSERT INTO `user_infos` (`id`, `user_id`, `state`, `city`, `address`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, '2', 'Mumbai', 'Agra', 'Newtown', '42673', '2023-12-04 22:36:53', '2023-12-04 22:36:53'),
(2, '1', 'Goa', 'Agra', 'Kameko Christian', '42673', '2023-12-04 23:34:32', '2023-12-04 23:34:32'),
(3, '5', 'Gujrat', 'Ghaziabad', '78855', '700109', '2023-12-05 06:34:11', '2023-12-05 06:34:11'),
(4, '3', 'Uttrakhand', 'Agra', 'Brenna Whitehead', '59215', '2023-12-05 22:40:33', '2023-12-05 22:40:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listings`
--
ALTER TABLE `business_listings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listing_amenities`
--
ALTER TABLE `business_listing_amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listing_images`
--
ALTER TABLE `business_listing_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listing_infos`
--
ALTER TABLE `business_listing_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listing_keywords`
--
ALTER TABLE `business_listing_keywords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_listing_menuitems`
--
ALTER TABLE `business_listing_menuitems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_infos`
--
ALTER TABLE `user_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `business_listings`
--
ALTER TABLE `business_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `business_listing_amenities`
--
ALTER TABLE `business_listing_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `business_listing_images`
--
ALTER TABLE `business_listing_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `business_listing_infos`
--
ALTER TABLE `business_listing_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `business_listing_keywords`
--
ALTER TABLE `business_listing_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `business_listing_menuitems`
--
ALTER TABLE `business_listing_menuitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
