-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 12:17 PM
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
(1, '1', 'Tini’s Mac and Cheese', 'show', '1', 'Tini’s mac and cheese is a viral Tiktok with over 60 million views and counting. It’s viral in the way people wish their videos could go viral. Everybody and their aunt made her mac and cheese for Thanksgiving, so if you want to give it a try, I’ve detailed it for you below! It’s perfect for cold, cozy winter nights and holiday gatherings. It’s probably the best thing you can bring to a potluck, for real, for real.', '454545', '5454545', 'west bengal', 'kolkata', 'Newtown', '42673', '4563217890', 'business@gmail.com', 'https://iamafoodblog.com/tinis-mac-and-cheese/', 'reject', NULL, '2023-11-30 22:56:51', '2023-12-01 02:27:24'),
(2, '1', 'Swedish Meatballs', 'hide', '1', 'A couple of years ago Mike and went to Sweden and the number one item on my Swedish bucket list was eating real Swedish meatballs. We went to a little place called Bakfickan, tucked into a corner of the Royal Swedish Opera House in Stockholm.', '45454', '545454', 'west bengal', 'kolkata', 'Newtown', '59352', '5454545444', 'ruhym@mailinator.com', 'https://www.pujufunuza.tv', 'approve', NULL, '2023-11-30 22:58:30', '2023-12-01 02:27:19'),
(3, '3', 'Velveeta Mac and Cheese', 'show', '2', 'These days we have fancy mac and cheese with gruyere and breadcrumbs and all that, but do you ever dream of just easy plain mac and cheese, like the box kind, but without the powdered cheese and that mushy pasta? Enter this Velveeta mac and cheese.', '454545', '5454545', 'west bengal', 'kolkata', 'Newtown', '42673', '4563214789', 'admin@legalcrm.com', 'https://www.pocigazovy.net', 'approve', NULL, '2023-11-30 23:36:06', '2023-12-01 02:31:05'),
(6, '4', 'Rerum quia eius offi', 'show', '1', 'Ab qui ut cupidatat', '4545', '54545', 'Repellendus Cupidat', 'Nostrum enim aliquid', 'Laborum Soluta dele', '34669', '4563217890', 'satocygow@mailinator.com', 'https://www.munekavepemacum.cm', 'approve', NULL, '2023-12-04 00:39:02', '2023-12-04 00:39:43');

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
(60, '6', 'Brunch, Lunch, Dinner', '0', '2023-12-04 00:39:02', '2023-12-04 00:39:02');

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
(13, '3', 'images/Business_Images/1701407166_6.png', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(14, '5', 'images/Business_Images/1701668355_monument.png', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(15, '6', 'images/Business_Images/1701670142_l-2.jpg', '2023-12-04 00:39:02', '2023-12-04 00:39:02'),
(16, '6', 'images/Business_Images/1701670142_l-3.jpg', '2023-12-04 00:39:02', '2023-12-04 00:39:02');

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
(3, '3', '1:00 AM', '1:00 AM', '12:00 PM', '2:00 PM', '1:00 PM', '2:00 PM', '12:00 PM', '1:00 PM', '3:00 AM', '2:00 AM', '3:00 AM', '3:00 AM', '2:00 PM', '2:00 PM', NULL, 'https://www.fic.www', 'https://www.fic.www', 'http://127.0.0.1:8000/admin/category-listing', 'https://www.fic.www', NULL, '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(4, '4', '8:00 PM', '7:00 AM', '4:00 PM', '3:00 PM', '7:00 PM', '8:00 PM', '9:00 AM', '4:00 PM', '11:00 PM', '11:00 AM', '10:00 PM', '2:00 PM', 'Select', 'Select', 'on', 'https://www.hyca.ca', 'https://www.hyca.ca', 'https://www.hyca.ca', 'https://www.hyca.ca', NULL, '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(5, '5', '2:00 PM', '1:00 PM', 'Select', '9:00 AM', '12:00 AM', '9:00 PM', '5:00 PM', '10:00 PM', '8:00 PM', '7:00 PM', '10:00 PM', '2:00 AM', '11:00 AM', 'Select', 'on', 'https://www.ducipymumyzupi.org.uk', 'https://www.ducipymumyzupi.org.uk', 'https://www.ducipymumyzupi.org.uk', 'https://www.ducipymumyzupi.org.uk', NULL, '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(6, '6', '6:00 AM', '5:00 AM', '1:00 PM', '3:00 AM', '8:00 AM', '7:00 AM', '11:00 PM', '9:00 AM', '9:00 PM', '1:00 AM', '10:00 AM', '6:00 PM', '10:00 PM', '12:00 AM', NULL, 'https://www.munekavepemacum.cm', 'https://www.munekavepemacum.cm', 'https://www.munekavepemacum.cm', 'https://www.munekavepemacum.cm', NULL, '2023-12-04 00:39:02', '2023-12-04 00:39:02');

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
(17, '3', 'gruyere', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(18, '3', 'cheese', '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(19, '1', 'lover', '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(20, '4', 'Labore consequatur', '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(21, '5', 'Elit ea assumenda i', '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(22, '6', 'In ex mollit sed dig', '2023-12-04 00:39:02', '2023-12-04 00:39:02');

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
(23, '3', 'Burger', 'Fast', '84', 'cheese', 'images/MenuItems/17014071660.png', NULL, '2023-11-30 23:36:06', '2023-11-30 23:36:06'),
(24, '1', 'Tini’s mac and cheese', 'food', '497', 'pasta – Tini uses corkscrews aka cavatappi aka the best pasta for mac and cheese because the sauce goes into the center of the tube and when you bite into it, you’re biting into pockets of cheesy creaminess. You can find corkscrews at most grocery stores or online.', 'images/MenuItems/17014048110.png', NULL, '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(25, '1', 'Tini’s mac and cheese', 'Fast food', '497', 'pasta – Tini uses corkscrews aka cavatappi aka the best pasta for mac and cheese because the sauce goes into the center of the tube and when you bite into it, you’re biting into pockets of cheesy creaminess. You can find corkscrews at most grocery stores or online.', 'images/MenuItems/17014048111.png', NULL, '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(26, '1', 'Tini’s mac and cheese', 'Fast food', '840', 'pasta – Tini uses corkscrews aka cavatappi aka the best pasta for mac and cheese because the sauce goes into the center of the tube and when you bite into it, you’re biting into pockets of cheesy creaminess. You can find corkscrews at most grocery stores or online.', 'images/MenuItems/17014048112.png', NULL, '2023-12-01 01:31:38', '2023-12-01 01:31:38'),
(27, '4', 'Bradley Burks', 'Iusto voluptatibus r', '239', 'Possimus officiis e', NULL, NULL, '2023-12-04 00:08:21', '2023-12-04 00:08:21'),
(28, '5', 'Desiree Bridges', 'Aut suscipit dolore', '990', 'Minus et laborum fac', 'images/MenuItems/17016683550.jpg', NULL, '2023-12-04 00:09:15', '2023-12-04 00:09:15'),
(29, '6', 'Carlos Mann', 'Odit exercitation vo', '429', 'Ullamco saepe ea ear', 'images/MenuItems/17016701420.jpg', NULL, '2023-12-04 00:39:02', '2023-12-04 00:39:02');

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
(18, '2023_12_04_041313_create_abouts_table', 4);

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
  `star` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `review` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `list_id`, `star`, `name`, `email`, `review`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Teethi Dhar', 'teethi@gmail.com', 'good good good good good good goodgood good goodgoodgood good', '2023-12-01 04:43:33', '2023-12-01 04:43:33'),
(2, '3', '4', 'Teethi Dhar', 'teethi@gmail.com', 'good', '2023-12-01 04:45:25', '2023-12-01 04:45:25'),
(3, '1', '5', 'Sayan', 'sayan@gmail.com', 'it is quiet better. I have experience good thing.', '2023-12-04 04:34:07', '2023-12-04 04:34:07');

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
(1, 'Teethi Dhar', NULL, 'business@gmail.com', NULL, '$2y$12$e6bfYYd7Ae5OIRf3M1sNc.0tIeVOguXQLktACdNkQkm2/IZ6J9MT2', 'business_owner', '+1 (189) 496-9287', 'active', NULL, NULL, '2023-11-30 22:34:31', '2023-11-30 23:31:24'),
(2, 'user', NULL, 'user@gmail.com', NULL, '$2y$12$tS/2x2M0gZExIHwShDf8mOGlB0gXpJruh4Sq5AuP4gOLAWT9tH6i6', 'user', '+1 (628) 652-4901', 'active', NULL, NULL, '2023-11-30 22:35:05', '2023-11-30 22:35:05'),
(3, 'adem', NULL, 'adem@gmail.com', NULL, '$2y$12$i1MLkbUaEFPOkpnW5g/FrOmIgyDHbo/RVl8JaD4UrHsVN8wT7lzcO', 'business_owner', '+1 (358) 639-1328', 'active', NULL, NULL, '2023-11-30 23:32:28', '2023-11-30 23:32:28'),
(4, 'Sayan', 'images/User/1701669660_user1.jpg', 'sayan@gmail.com', NULL, '$2y$12$DChJu2mqywX.HCKq98IfuOXV9h5CpMmzpXZeplh2OQoylREq.cKyG', 'business_owner', '+1 (358) 639-1328', 'active', NULL, NULL, '2023-12-04 00:31:01', '2023-12-04 00:31:01');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_listing_amenities`
--
ALTER TABLE `business_listing_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `business_listing_images`
--
ALTER TABLE `business_listing_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `business_listing_infos`
--
ALTER TABLE `business_listing_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `business_listing_keywords`
--
ALTER TABLE `business_listing_keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `business_listing_menuitems`
--
ALTER TABLE `business_listing_menuitems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_infos`
--
ALTER TABLE `user_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
