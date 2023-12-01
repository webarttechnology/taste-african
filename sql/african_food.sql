-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 07:23 AM
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
  `category` varchar(255) DEFAULT NULL,
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listings`
--

INSERT INTO `business_listings` (`id`, `user_id`, `title`, `category`, `description`, `latitude`, `longitude`, `state`, `city`, `address`, `zip_code`, `mobile`, `email`, `website`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Tini’s Mac and Cheese', 'Resturent', 'Tini’s mac and cheese is a viral Tiktok with over 60 million views and counting. It’s viral in the way people wish their videos could go viral. Everybody and their aunt made her mac and cheese for Thanksgiving, so if you want to give it a try, I’ve detailed it for you below! It’s perfect for cold, cozy winter nights and holiday gatherings. It’s probably the best thing you can bring to a potluck, for real, for real.', '454545', '5454545', 'west bengal', 'kolkata', 'Newtown', '42673', '4563217890', 'business@gmail.com', 'https://iamafoodblog.com/tinis-mac-and-cheese/', NULL, '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(2, '1', 'Swedish Meatballs', 'Resturent', 'A couple of years ago Mike and went to Sweden and the number one item on my Swedish bucket list was eating real Swedish meatballs. We went to a little place called Bakfickan, tucked into a corner of the Royal Swedish Opera House in Stockholm.', '45454', '545454', 'west bengal', 'kolkata', 'Newtown', '59352', '5454545444', 'ruhym@mailinator.com', 'https://www.pujufunuza.tv', NULL, '2023-11-30 22:58:30', '2023-11-30 23:05:09'),
(3, '3', 'Velveeta Mac and Cheese', 'Resturent', 'These days we have fancy mac and cheese with gruyere and breadcrumbs and all that, but do you ever dream of just easy plain mac and cheese, like the box kind, but without the powdered cheese and that mushy pasta? Enter this Velveeta mac and cheese.', '454545', '5454545', 'west bengal', 'kolkata', 'Newtown', '42673', '4563214789', 'admin@legalcrm.com', 'https://www.pocigazovy.net', NULL, '2023-11-30 23:36:06', '2023-11-30 23:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `business_listing_amenities`
--

CREATE TABLE `business_listing_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `business_listing_id` varchar(255) NOT NULL,
  `amenities` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_listing_amenities`
--

INSERT INTO `business_listing_amenities` (`id`, `business_listing_id`, `amenities`, `created_at`, `updated_at`) VALUES
(19, '2', 'Health Score 8.7 / 10', '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(20, '2', 'Reservations', '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(21, '2', 'Vegetarian Options', '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(30, '1', 'Health Score 8.7 / 10', '2023-11-30 23:28:21', '2023-11-30 23:28:21'),
(31, '1', 'Brunch, Lunch, Dinner', '2023-11-30 23:28:21', '2023-11-30 23:28:21'),
(32, '3', 'Health Score 8.7 / 10', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(33, '3', 'Reservations', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(34, '3', 'Vegetarian Options', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(35, '3', 'Moderate Noise', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(36, '3', 'Good For Kids', '2023-11-30 23:36:06', '2023-11-30 23:36:06');

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
(1, '1', 'images/Business_Images/1701404811_1.png', '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(2, '1', 'images/Business_Images/1701404811_2.png', '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(3, '1', 'images/Business_Images/1701404811_3.png', '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(4, '1', 'images/Business_Images/1701404811_4.png', '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(5, '1', 'images/Business_Images/1701404811_5.png', '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(8, '2', 'images/Business_Images/1701405309_5.png', '2023-11-30 23:05:09', '2023-11-30 23:05:09'),
(9, '2', 'images/Business_Images/1701405309_6.png', '2023-11-30 23:05:09', '2023-11-30 23:05:09'),
(10, '2', 'images/Business_Images/1701405309_7.png', '2023-11-30 23:05:09', '2023-11-30 23:05:09'),
(11, '3', 'images/Business_Images/1701407166_8.png', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(12, '3', 'images/Business_Images/1701407166_7.png', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(13, '3', 'images/Business_Images/1701407166_6.png', '2023-11-30 23:36:06', '2023-11-30 23:36:06');

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
(1, '1', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', '1:00 AM', NULL, 'https://iamafoodblog.com/', 'https://iamafoodblog.com/', 'https://iamafoodblog.com/', 'https://iamafoodblog.com/', NULL, '2023-11-30 22:56:51', '2023-11-30 22:56:51'),
(2, '2', '8:00 AM', '10:00 PM', '11:00 PM', '6:00 PM', '2:00 AM', '10:00 PM', '8:00 AM', '4:00 AM', '10:00 AM', '5:00 PM', '12:00 AM', '12:00 AM', '12:00 AM', '12:00 AM', NULL, 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', 'https://www.fic.www', NULL, '2023-11-30 22:58:30', '2023-11-30 23:10:49'),
(3, '3', '1:00 AM', '1:00 AM', '12:00 PM', '2:00 PM', '1:00 PM', '2:00 PM', '12:00 PM', '1:00 PM', '3:00 AM', '2:00 AM', '3:00 AM', '3:00 AM', '2:00 PM', '2:00 PM', NULL, 'https://www.fic.www', 'https://www.fic.www', 'http://127.0.0.1:8000/admin/category-listing', 'https://www.fic.www', NULL, '2023-11-30 23:36:06', '2023-11-30 23:36:06');

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
(15, '2', 'food', '2023-11-30 23:27:14', '2023-11-30 23:27:14'),
(16, '1', 'lover', '2023-11-30 23:28:21', '2023-11-30 23:28:21'),
(17, '3', 'gruyere', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(18, '3', 'cheese', '2023-11-30 23:36:06', '2023-11-30 23:36:06');

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
(9, '2', 'meatballs', 'food', '963', 'The meatballs were UNREAL. I swear, they were and still currently are one of my all time favorite food memories. They were so good we went back the very next day. Super juicy and bursting with meaty flavor, served up with the creamiest mashed potatoes, a rich creamy gravy, lightly picked cucumbers, and freshly crushed lingonberries. Every bite was a revelation.', 'images/MenuItems/17014053090.png', NULL, '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(10, '2', 'Dorian Todd', 'Fast', '84', 'The meatballs were UNREAL. I swear, they were and still currently are one of my all time favorite food memories. They were so good we went back the very next day. Super juicy and bursting with meaty flavor, served up with the creamiest mashed potatoes, a rich creamy gravy, lightly picked cucumbers, and freshly crushed lingonberries. Every bite was a revelation.', 'images/MenuItems/17014056491.png', NULL, '2023-11-30 23:11:43', '2023-11-30 23:11:43'),
(20, '1', 'Tini’s mac and cheese', 'food', '497', 'pasta – Tini uses corkscrews aka cavatappi aka the best pasta for mac and cheese because the sauce goes into the center of the tube and when you bite into it, you’re biting into pockets of cheesy creaminess. You can find corkscrews at most grocery stores or online.', 'images/MenuItems/17014048110.png', NULL, '2023-11-30 23:28:21', '2023-11-30 23:28:21'),
(21, '1', 'Tini’s mac and cheese', 'Fast food', '497', 'pasta – Tini uses corkscrews aka cavatappi aka the best pasta for mac and cheese because the sauce goes into the center of the tube and when you bite into it, you’re biting into pockets of cheesy creaminess. You can find corkscrews at most grocery stores or online.', 'images/MenuItems/17014048111.png', NULL, '2023-11-30 23:28:21', '2023-11-30 23:28:21'),
(22, '1', 'Tini’s mac and cheese', 'Fast food', '840', 'pasta – Tini uses corkscrews aka cavatappi aka the best pasta for mac and cheese because the sauce goes into the center of the tube and when you bite into it, you’re biting into pockets of cheesy creaminess. You can find corkscrews at most grocery stores or online.', 'images/MenuItems/17014048112.png', NULL, '2023-11-30 23:28:21', '2023-11-30 23:28:21'),
(23, '3', 'Burger', 'Fast', '84', 'cheese', 'images/MenuItems/17014071660.png', NULL, '2023-11-30 23:36:06', '2023-11-30 23:36:06');

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
(1, 'Reservations', 'images/category/1701404022_fast-food.png', NULL, '2023-11-30 22:43:42', '2023-11-30 22:43:42'),
(2, 'Resturent', 'images/category/1701404036_diet (1).png', NULL, '2023-11-30 22:43:56', '2023-11-30 22:43:56'),
(3, 'Dance school', 'images/category/1701404060_fast-food.png', NULL, '2023-11-30 22:44:20', '2023-11-30 22:44:20');

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
(15, '2023_11_29_054512_create_amenities_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `phone`, `status`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teethi Dhar', 'business@gmail.com', NULL, '$2y$12$e6bfYYd7Ae5OIRf3M1sNc.0tIeVOguXQLktACdNkQkm2/IZ6J9MT2', 'business_owner', '+1 (189) 496-9287', 'active', NULL, NULL, '2023-11-30 22:34:31', '2023-11-30 23:31:24'),
(2, 'user', 'user@gmail.com', NULL, '$2y$12$tS/2x2M0gZExIHwShDf8mOGlB0gXpJruh4Sq5AuP4gOLAWT9tH6i6', 'user', '+1 (628) 652-4901', 'active', NULL, NULL, '2023-11-30 22:35:05', '2023-11-30 22:35:05'),
(3, 'adem', 'adem@gmail.com', NULL, '$2y$12$i1MLkbUaEFPOkpnW5g/FrOmIgyDHbo/RVl8JaD4UrHsVN8wT7lzcO', 'business_owner', '+1 (358) 639-1328', 'active', NULL, NULL, '2023-11-30 23:32:28', '2023-11-30 23:32:28');

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
(1, '1', 'Uttar Pradesh', 'Allahabad', 'Newtown', '42673', '2023-11-30 22:36:14', '2023-11-30 22:36:14');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_listing_amenities`
--
ALTER TABLE `business_listing_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `business_listing_images`
--
ALTER TABLE `business_listing_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `business_listing_infos`
--
ALTER TABLE `business_listing_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `business_listing_keywords`
--
ALTER TABLE `business_listing_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `business_listing_menuitems`
--
ALTER TABLE `business_listing_menuitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
