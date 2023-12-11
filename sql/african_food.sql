-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 05:15 AM
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
(1, '2', 'Chicken Wontons', 'show', '1', 'Big, beautiful, bossy flavors ahead! Shiitake mushrooms and chicken wontons swim in a brothy flavor-filled sauce and get finished with a swirl of sesame oil and chili crisp on top. Yum!\r\n\r\nBig, beautiful, bossy flavors ahead! Shiitake mushrooms and chicken wontons swim in a brothy flavor-filled sauce and get finished with a swirl of sesame oil and chili crisp on top. Yum!\r\n\r\nBig, beautiful, bossy flavors ahead! Shiitake mushrooms and chicken wontons swim in a brothy flavor-filled sauce and get finished with a swirl of sesame oil and chili crisp on top. Yum!', '12345', '12345', 'Ipsam perspiciatis', 'Praesentium nesciunt', 'In culpa rerum non e', '43163', '1234567890', 'admin@mailinator.com', 'https://www.sevyqycymadapo.us', 'approve', NULL, '2023-12-07 02:10:57', '2023-12-07 02:13:50'),
(2, '2', 'Sunt aute adipisici', 'show', '6', 'Illum corporis eos', '12345', '12345', 'Ea deserunt omnis au', 'Labore culpa minus', 'Eaque consequatur F', '67295', '1234567890', 'sykaniwam@mailinator.com', 'https://www.melademin.us', 'approve', NULL, '2023-12-07 02:12:34', '2023-12-07 02:20:27');

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
(1, '1', 'Offers Delivery', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(2, '1', 'Reservations', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(3, '1', 'Staff wears masks', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(4, '1', 'Vegan Options', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(5, '1', 'Vegetarian Options', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(6, '1', 'Offers Catering', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(7, '1', 'Good for Groups', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(8, '1', 'Good For Kids', '0', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(23, '2', 'Health Score 8.7 / 10', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(24, '2', 'Offers Delivery', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(25, '2', 'Vegan Options', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(26, '2', 'Vegetarian Options', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(27, '2', 'Accepts Credit Cards', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(28, '2', 'Casual', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(29, '2', 'Good for Breakfast', '0', '2023-12-07 02:20:27', '2023-12-07 02:20:27');

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
(1, '1', 'images/Business_Images/1701934857_food-01.jpg', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(2, '1', 'images/Business_Images/1701934857_food-02.jpg', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(3, '1', 'images/Business_Images/1701934857_food-03.jpg', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(4, '1', 'images/Business_Images/1701934857_food-04.jpg', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(5, '1', 'images/Business_Images/1701934857_food-05.jpg', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(6, '2', 'images/Business_Images/1701934954_food-09.jpg', '2023-12-07 02:12:34', '2023-12-07 02:12:34'),
(7, '2', 'images/Business_Images/1701934954_food-08.jpg', '2023-12-07 02:12:34', '2023-12-07 02:12:34'),
(8, '2', 'images/Business_Images/1701934954_food-07.jpg', '2023-12-07 02:12:34', '2023-12-07 02:12:34');

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
(1, '1', '3:00 AM', '11:00 AM', '4:00 PM', '9:00 PM', '6:00 PM', '6:00 AM', '1:00 AM', 'Select', '6:00 PM', '3:00 AM', '3:00 PM', '5:00 PM', '2:00 PM', '2:00 AM', NULL, 'https://www.sevyqycymadapo.us', 'https://www.sevyqycymadapo.us', 'https://www.sevyqycymadapo.us', 'https://www.sevyqycymadapo.us', NULL, '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(2, '2', '5:00 AM', '7:00 AM', '11:00 AM', '1:00 PM', '5:00 PM', '1:00 AM', '9:00 PM', '2:00 AM', '3:00 AM', '12:00 AM', '5:00 PM', '2:00 PM', '1:00 PM', '8:00 PM', NULL, 'http://127.0.0.1:8000/business-listing', 'http://127.0.0.1:8000/business-listing', 'http://127.0.0.1:8000/business-listing', 'http://127.0.0.1:8000/business-listing', NULL, '2023-12-07 02:12:34', '2023-12-07 02:19:44');

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
(1, '1', 'food', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(2, '1', 'chess', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(3, '1', 'chife', '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(6, '2', 'Illum ut autem laud', '2023-12-07 02:20:27', '2023-12-07 02:20:27');

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
(1, '1', 'Kelsie Hill', 'Voluptatum sunt veli', '221', 'Iure et enim cupidat', 'images/MenuItems/17019348570.jpg', NULL, '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(2, '1', 'Pizza', 'food', '500', 'https://www.sevyqycymadapo.us', 'images/MenuItems/17019348571.jpg', NULL, '2023-12-07 02:10:57', '2023-12-07 02:10:57'),
(7, '2', 'Kay Rosario', 'Delectus sunt vel i', '202', 'Id tempor mollit ni', 'images/MenuItems/17019349540.jpg', NULL, '2023-12-07 02:20:27', '2023-12-07 02:20:27'),
(8, '2', 'Pizza', 'food', '500', 'http://127.0.0.1:8000/business-listing', 'images/MenuItems/17019349541.jpg', NULL, '2023-12-07 02:20:27', '2023-12-07 02:20:27');

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
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(20, '2023_12_06_044320_create_subscribes_table', 6),
(23, '2023_12_07_052215_alter_user_table', 7),
(24, '2023_12_07_064043_create_recent_view_listings_table', 8),
(25, '2023_12_11_035039_create_f_a_q_s_table', 9);

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
-- Table structure for table `recent_view_listings`
--

CREATE TABLE `recent_view_listings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `list_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_view_listings`
--

INSERT INTO `recent_view_listings` (`id`, `user_id`, `list_id`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '2023-12-07 02:14:04', '2023-12-07 02:14:04'),
(2, '1', '2', '2023-12-07 02:14:26', '2023-12-07 02:14:26'),
(3, '1', '2', '2023-12-07 02:15:18', '2023-12-07 02:15:18'),
(4, '1', '1', '2023-12-07 02:16:05', '2023-12-07 02:16:05'),
(5, '1', '1', '2023-12-07 02:16:24', '2023-12-07 02:16:24'),
(6, '1', '1', '2023-12-07 02:16:47', '2023-12-07 02:16:47'),
(7, '1', '2', '2023-12-07 02:17:10', '2023-12-07 02:17:10'),
(8, '1', '2', '2023-12-07 02:17:34', '2023-12-07 02:17:34'),
(9, '1', '1', '2023-12-07 06:00:31', '2023-12-07 06:00:31'),
(10, '1', '1', '2023-12-07 06:05:25', '2023-12-07 06:05:25'),
(11, '1', '1', '2023-12-07 06:06:07', '2023-12-07 06:06:07'),
(12, '1', '1', '2023-12-07 06:11:28', '2023-12-07 06:11:28'),
(13, '1', '1', '2023-12-07 06:16:23', '2023-12-07 06:16:23');

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
(1, '1', '1', '1', 'Sayan', NULL, 'sayan@gmail.com', 'very good', '2023-12-07 02:16:23', '2023-12-07 02:16:23'),
(2, '2', '1', '3', 'Sayan', NULL, 'sayan@gmail.com', 'not good', '2023-12-07 02:17:34', '2023-12-07 02:17:34');

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
(1, '1', 'teethi.dhar@webart.technology', '2023-12-07 05:35:10', '2023-12-07 05:35:10'),
(2, '1', 'teethi.webart@gmail.com', '2023-12-07 05:40:21', '2023-12-07 05:40:21');

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
  `verification_link` varchar(255) DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `role`, `phone`, `status`, `verification_link`, `verified`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sayandip', 'images/User/1701930462_user.png', 'teethi.dhar@webart.technology', NULL, '$2y$12$Jj4H9RmvlZVZg1kqIPE/TepY0GRjaIoX4kUrUVBec.nGkFrmMyqxe', 'user', '+1 (388) 814-1792', 'active', '0A7K4iP0copxmi1nJWfinIzbg6UEFRLyynO3lA3AZyvYH0Hqn4MYxhomb0QZ', 1, NULL, NULL, '2023-12-07 00:57:43', '2023-12-07 02:04:24'),
(7, 'Teethi Dhar', 'images/User/1702266369_5.jpg', 'teethi.webart@gmail.com', NULL, '$2y$12$GuKooW/YDDrmN8NajJwTW.McY5G4VEPyGYiCwwnOdKpkzvtcVe1Wa', 'business_owner', '+1 (388) 814-1792', 'active', 'WzfRwyC0PGZWj4JHJRHGeDOhMvycyLQWrc9H7DSLn0eaqrdc81xSDhvM5PKF', 1, NULL, NULL, '2023-12-10 22:16:09', '2023-12-10 22:16:39');

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
(1, '1', 'Uttrakhand', 'Allahabad', 'Brenna Whitehead', '59215', '2023-12-07 02:02:54', '2023-12-07 02:02:54'),
(2, '2', 'Uttar Pradesh', 'Allahabad', 'Newtown', '700035', '2023-12-07 02:06:59', '2023-12-07 02:06:59');

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
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `recent_view_listings`
--
ALTER TABLE `recent_view_listings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_listing_amenities`
--
ALTER TABLE `business_listing_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `business_listing_images`
--
ALTER TABLE `business_listing_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `business_listing_infos`
--
ALTER TABLE `business_listing_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_listing_keywords`
--
ALTER TABLE `business_listing_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_listing_menuitems`
--
ALTER TABLE `business_listing_menuitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recent_view_listings`
--
ALTER TABLE `recent_view_listings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
