-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 04:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splyint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(25) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `password`, `pic`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '9988775545', '$2y$10$AVSGzOWC5TZROVkvm6khHOVtNyb0eGosBZywMBZsIpDTsGAzZ9fgy', '1661185708_comments-1.jpg', 0, '2022-06-21 05:05:28', '2022-08-22 10:58:28'),
(2, 'Test', 'test@test.com', NULL, '$2y$10$Pbjn9GhLI1fqz0uPtsbtHu0.SdJVDKDraoiS6THrKX1SuSPq.vI1e', NULL, 1, '2022-06-21 05:43:56', '2022-06-21 05:43:56'),
(3, 'drupal', 'drupal@gmail.com', NULL, '$2y$10$7KH1naW7LHCIMgXD9aBq7ulaQfMzhOVkozk7t9mSRN0tEw9nzn9.6', '1658253045_IMG-20180721-WA0000.jpg', 1, '2022-07-19 12:20:45', '2022-07-19 12:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `assign_carriers`
--

CREATE TABLE `assign_carriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` tinyint(4) NOT NULL,
  `collection_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collect_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrier_id` tinyint(4) NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrier_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_moble` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carrier_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_carriers`
--

INSERT INTO `assign_carriers` (`id`, `collection_id`, `collection_from`, `collection_to`, `budget`, `collect_address`, `delivery_address`, `carrier_id`, `carrier_name`, `carrier_email`, `carrier_moble`, `carrier_address`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, NULL, '8965', 'Delhi', 'Chandigerh', 18, 'muzaffer', 'muzaffer@yopmail.com', '9693449740', '', '1', '2022-08-19 13:21:55', '2022-08-24 13:04:21'),
(3, 5, '2022-08-10', '2022-08-15', '2000', 'Mohali', 'Agrah', 18, 'muzaffer', 'muzaffer@yopmail.com', '9693449740', '', '0', '2022-08-19 13:23:57', '2022-08-19 13:23:57'),
(5, 12, '2022-08-17', '2022-08-26', '8000', 'Haridwar, Uttarakhand, India', 'Kolkata, West Bengal, India', 18, 'muzaffer', 'muzaffer@yopmail.com', '9693449740', '', '1', '2022-08-24 13:01:11', '2022-08-24 13:06:42'),
(6, 13, NULL, NULL, '2000', 'India', 'Pakistan', 19, 'Arun Kumar', 'arundeepsingh522@gmail.com', '9988775545', 'Mohali punjab', '0', '2022-08-29 10:54:25', '2022-08-29 10:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lince_no` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_no` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `it_is_owned_corporate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gst_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_truck` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `name`, `email`, `mobile`, `password`, `pic`, `address`, `lince_no`, `insurance_no`, `it_is_owned_corporate`, `attachment`, `company_name`, `company_email`, `gst_no`, `type_of_truck`, `status`, `created_at`, `updated_at`) VALUES
(1, 'carrier', 'carrier@gmail.com', '8884441117', '$2y$10$AVSGzOWC5TZROVkvm6khHOVtNyb0eGosBZywMBZsIpDTsGAzZ9fgy', '1661276294_team-1.jpg', '', '', '', '', NULL, '', '', '', '', 1, '2022-07-06 20:23:11', '2022-08-23 12:08:14'),
(2, 'developer', 'developer1784@yopmail.com', '9999888815', '$2y$10$bt22xvhMpF590OFZuVJ/vucUczkFgGEmL2r6lNZUG0kNvfqo5j/Ii', NULL, '', '', '', '', NULL, '', '', '', '', NULL, '2022-07-06 20:26:26', '2022-07-15 00:14:37'),
(11, 'Raman', 'raman123@yopmail.com', '9988775545', '$2y$10$iLvrQN2EN4yuUCJQFRcgzuhN3RZJn1eml1xACBvMLg0w5WZVpFieK', NULL, '', '', '', '', NULL, '', '', '', '', NULL, '2022-07-11 19:40:14', '2022-07-15 01:16:49'),
(12, 'developer', 'carrier111@gmail.com', '8884445789', '$2y$10$pLvOuOYyj/37w6Bn4x/33.YZQ48D/a8wYp6QhP3USGHrzzho3Y/dW', NULL, '', '', '', '', NULL, '', '', '', '', NULL, '2022-07-25 11:03:44', '2022-07-25 11:03:44'),
(13, 'developer12', 'carrier14@gmail.com', '9988775545', '$2y$10$1Vrm2d0QLqKa3U.Msk0s4.9LCMZwcTPTo6bjyBBwINN90Xaj03Nbu', NULL, '', '', '', '', NULL, '', '', '', '', NULL, '2022-07-25 11:11:37', '2022-07-25 11:11:37'),
(14, 'developer14', 'carrier78@gmail.com', '9988745451', '$2y$10$6J2crKU0bxpqiIqW8ReW7.X/ogDf6Ofq1Gkl5ckW3CaRdNtZQN57W', NULL, '', '', '', '', NULL, '', '', '', '', NULL, '2022-07-25 11:17:04', '2022-07-25 11:17:04'),
(17, 'Tahridh', 'tahridh123@yopmail.com', '9988775545', '$2y$10$heZuzJtyGCs/.nr4b/oH7.29oR5SYgfpwG8LP1h9o9Q49z25I2Oua', NULL, '', '', '', '', NULL, '', '', '', '', 1, '2022-07-31 05:07:46', '2022-07-31 05:07:46'),
(18, 'muzaffer', 'muzaffer@yopmail.com', '9693449740', '$2y$10$AVSGzOWC5TZROVkvm6khHOVtNyb0eGosBZywMBZsIpDTsGAzZ9fgy', NULL, '', '', '', '', NULL, '', '', '', '', 1, '2022-07-31 05:22:31', '2022-07-31 05:22:31'),
(19, 'Arun Kumar', 'arundeepsingh522@gmail.com', '9988775545', '$2y$10$9/C1bbwVzb7qjWiRZAgdWeNSVt81kAjLd9f4M/qFbClpcszY7uMM6', '1660840749_banner_10.jpg', 'Mohali punjab', '7896541235', '7896541235', 'Mohali punjab chandigerh', NULL, '', '', '', '', 1, '2022-08-18 11:05:26', '2022-08-18 11:09:09'),
(20, 'Rohit', 'rohit@yopmail.com', '9988775545', '$2y$10$PjZkxyx6VVN5sdVgf6Chteg8GRMecR55sGs4.J817bKK2gpDCx2Ce', NULL, 'mohali punjab', '56238974', '45632156', 'Yes this is the trucking company', '1661448608_blog-4.jpg', 'Web tech', 'democopany@yopmail.com', '789654', 'Yes', 0, '2022-08-25 12:00:08', '2022-08-25 12:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(25) NOT NULL,
  `user_email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection_address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivery_address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iam` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `load_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unload_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `user_id`, `user_email`, `collection_address`, `delivery_address`, `collection`, `delivery`, `iam`, `load_location`, `unload_location`, `collection_from`, `collection_to`, `delivery_from`, `delivery_to`, `expiry_date`, `budget`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, '', 'LUcknow', 'Patna', 'no date', '1', 'both', '3', '4', NULL, NULL, '2022-09-04', '2022-09-12', '11-8-2022', '4555', 1, '2022-08-09 13:09:55', '2022-08-21 04:25:31'),
(2, 0, '', 'Umbala', 'Mohali', '1', 'ready now', 'both', '3', '5', '2022-09-05', '2022-09-21', NULL, NULL, '18-8-2022', '45555', 1, '2022-08-09 13:53:48', '2022-08-15 11:41:00'),
(4, 0, '', 'Delhi', 'Chandigerh', 'Ready Now', 'Date Range', 'both', '4', '5', NULL, NULL, '2022-08-11', '2022-08-11', '22-8-2022', '8965', 1, '2022-08-11 11:41:24', '2022-08-19 11:35:12'),
(5, 0, '', 'Mohali', 'Agrah', 'Date Range', 'Date Range', 'receiver', '6', '6', '2022-08-10', '2022-08-15', '2022-08-10', '2022-08-26', '1-9-2022', '2000', 1, '2022-08-19 11:32:48', '2022-08-19 11:35:14'),
(6, 0, '', 'knakdn', 'nwndnqw', 'Ready Now', 'ready now', 'both', '3', '7', NULL, NULL, NULL, NULL, '31-8-2022', '522', 1, '2022-08-22 12:38:52', '2022-08-23 11:34:52'),
(7, 10, '', 'delhi', 'Agrah', 'Date Range', 'Date Range', 'both', '3', '7', '2022-08-11', '2022-08-26', '2022-10-04', '2022-10-21', '31-8-2022', '2555', 1, '2022-08-22 12:48:33', '2022-08-23 11:34:55'),
(8, 0, '', 'Lucknow, Uttar Pradesh, India', 'Pathankot, Punjab, India', 'Ready Now', 'ready now', 'both', '4', '5', NULL, NULL, NULL, NULL, '31-8-2022', '5000', 1, '2022-08-23 11:40:04', '2022-08-26 13:06:49'),
(9, 0, '', 'Delhi, India', 'Banaras, Uttar Pradesh, India', 'Ready Now', 'ready now', 'both', '4', '6', NULL, NULL, NULL, NULL, '1-9-2022', '4500', 1, '2022-08-23 12:56:50', '2022-08-29 10:57:29'),
(10, 0, '', 'Delhi, India', 'Noida, Uttar Pradesh, India', 'Ready Now', 'ready now', 'both', '4', '6', NULL, NULL, NULL, NULL, '1-9-2022', '4500', 1, '2022-08-23 12:58:30', '2022-08-29 10:57:24'),
(11, 0, '', 'Lucknow, Uttar Pradesh, India', 'Noida, Uttar Pradesh, India', 'Ready Now', 'ready now', 'both', '4', '6', NULL, NULL, NULL, NULL, '1-9-2022', '4500', 1, '2022-08-23 12:59:24', '2022-08-29 10:57:32'),
(12, 10, '', 'Haridwar, Uttarakhand, India', 'Kolkata, West Bengal, India', 'Date Range', 'Date Range', 'sender', '6', '7', '2022-08-17', '2022-08-26', '2022-08-18', '2022-08-31', '1-9-2022', '8000', 0, '2022-08-23 13:03:54', '2022-08-23 13:03:54'),
(13, 10, 'muzzaffer121@yopmail.com', 'India', 'Pakistan', 'Ready Now', 'no date', 'sender', '3', '5', NULL, NULL, NULL, NULL, '8-9-2022', '2000', 1, '2022-08-26 14:04:03', '2022-08-29 11:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2022_06_21_093133_create_admins_table', 1),
(15, '2022_06_21_093536_create_carriers_table', 2),
(16, '2022_07_12_002916_create_trucks_table', 3),
(17, '2022_07_30_123254_add_status_to_carriers_table', 4),
(18, '2022_07_31_094018_add_status_to_users_table', 5),
(21, '2022_08_08_164853_create_collections_table', 6),
(22, '2022_08_09_144656_create_quotes_table', 6),
(23, '2022_08_17_160936_create_quote_requests_table', 7),
(24, '2022_08_19_175848_create_assign_carriers_table', 8),
(25, '2022_08_23_180509_create_quote_notifications_table', 9);

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` tinyint(4) NOT NULL,
  `pallet_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_perchese` tinyint(4) DEFAULT NULL,
  `which_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_pallet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whate_need_moving` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pallet_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` tinyint(4) DEFAULT NULL,
  `unsure_weight` tinyint(4) DEFAULT NULL,
  `height_per_pallet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_per_pallet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pallet_cm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_per_items` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width_per_items` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heigh_per_items` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_cm1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_cm2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_cm3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toncm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_cubic_meter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dangerousgoods` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_dg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `required_tailgate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `items_secure` tinyint(4) DEFAULT NULL,
  `more_details` tinyint(4) DEFAULT NULL,
  `more_details_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `take_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `collection_id`, `pallet_category`, `action_perchese`, `which_website`, `content_pallet`, `whate_need_moving`, `pallet_size`, `quantity`, `unsure_weight`, `height_per_pallet`, `weight_per_pallet`, `pallet_cm`, `length_per_items`, `width_per_items`, `heigh_per_items`, `package_cm1`, `package_cm2`, `package_cm3`, `toncm`, `total_cubic_meter`, `dangerousgoods`, `class_dg`, `required_tailgate`, `items_secure`, `more_details`, `more_details_content`, `take_photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pallecons', 1, 'America', 'test', '', 'Euro', 2, 1, 'heigh', 'weigh', 'meter', '', '', '', 'meter', 'meter', 'meter', 'tons', '10', '1', '5', '1', 1, 1, 'hhhh', '1660070395_image.png', '2022-08-09 13:09:55', '2022-08-09 13:09:55'),
(2, 1, 'Pallecons', 1, 'Grays Online', '', '', '', 0, 1, 'heigh', '', '0', '', '', '', '0', '0', '0', '0', '', '1', '8', '1', 1, 1, '', '1660070395_splyint-logo.png', '2022-08-09 13:09:55', '2022-08-09 13:09:55'),
(3, 2, 'Pallecons', 1, 'America', '', '', '', 0, 1, 'heigh', 'weight', 'meter', '', '', '', 'meter', 'meter', 'meter', 'tons', '10', '1', '1', '1', 1, 1, 'hhhhhhhh', '1660073029_splyint-logo.png', '2022-08-09 13:53:49', '2022-08-09 13:53:49'),
(4, 2, 'Packages', 1, 'America', '', 'Moving', 'Euro', 2, 0, '', 'weight', '0', '15x20', 'width', 'height', '0', '0', '0', '0', '', '0', '5', '0', 0, 1, 'htabsjca', '1660073029_image.png', '2022-08-09 13:53:49', '2022-08-09 13:53:49'),
(5, 4, 'Pallecons', 1, 'Russia', 'test', '', 'Euro', 2, 1, 'heigh', 'weigh', 'meter', '', '', '', 'meter', 'cm', 'meter', 'tons', 'nwfi', '1', '6', '1', 1, 1, 'nrtrk jrtj', '1660237884_splyint-logo.png', '2022-08-11 11:41:24', '2022-08-11 11:41:24'),
(6, 4, 'Packages', 1, 'America', '', 'Moving', 'Euro', 2, 1, '', '15x50', '0', 'length', 'momomo', 'height', '0', '0', '0', '0', '', '1', '5', '1', 0, 1, 'nrete', '1660237884_image.png', '2022-08-11 11:41:24', '2022-08-11 11:41:24'),
(7, 5, 'Pallecons', 1, 'America', 'test', '', 'Euro2', 2, 1, 'heigh', 'weight', 'meter', '', '', '', 'meter', 'meter', 'cm', 'kg', 'nwfi', '1', '8', '1', 1, 1, 'This is the test detail', '1660928568_logo_white.png', '2022-08-19 11:32:48', '2022-08-19 11:32:48'),
(8, 6, 'Pallets', 1, 'Grays Online', 'test', '', 'Euro', 2, 1, 'heigh', 'weight', 'meter', '', '', '', '0', '0', '0', 'tons', '', '1', '5', '1', 1, 1, 'snfniif', '1661191732_comments-1.jpg', '2022-08-22 12:38:52', '2022-08-22 12:38:52'),
(9, 7, 'Pallets', 1, 'Facebook', 'test', '', 'Euro', 2, 1, 'heigh', 'weigh', 'cm', '', '', '', 'cm', 'cm', 'meter', 'tons', '10', '1', '3', '1', 1, 1, 'pkypk46ykp46', '1661192313_blog-4.jpg', '2022-08-22 12:48:33', '2022-08-22 12:48:33'),
(10, 7, 'Packages', 1, 'Canada', '', 'Moving', 'Euro', 2, 1, '', 'weigh', '0', '15x20', 'bwebkw', 'height', '0', '0', '0', '0', '', '1', '3', '1', 1, 1, '', '1661192313_comments-2.jpg', '2022-08-22 12:48:33', '2022-08-22 12:48:33'),
(11, 7, 'Pallecons', 1, 'Canada', 'hihh', '', 'Standard', 2, 1, 'ujllll', 'weigh', '0', '', '', '', '0', '0', '0', '0', '10', '0', '1', '1', 1, 0, 'gujbih', '1661192313_blog-4.jpg', '2022-08-22 12:48:33', '2022-08-22 12:48:33'),
(12, 8, 'Pallecons', 1, 'America', 'test', '', 'Euro', 3, 1, 'heigh', 'weigh', 'meter', '', '', '', '0', '0', '0', 'kg', '10', '1', '4', '1', 1, 1, 'test content', '1661274604_blog-3.jpg', '2022-08-23 11:40:04', '2022-08-23 11:40:04'),
(13, 9, 'Pallecons', 1, 'America', 'test', '', 'Euro2', 2, 1, 'heigh', 'weigh', 'meter', '', '', '', '0', '0', '0', 'kg', 'nwfi', '1', '4', '1', 1, 1, 'test content', '1661279210_partner-5.png', '2022-08-23 12:56:50', '2022-08-23 12:56:50'),
(14, 10, 'Pallecons', 1, 'America', 'test', '', 'Euro2', 2, 1, 'heigh', 'weigh', 'meter', '', '', '', '0', '0', '0', 'kg', 'nwfi', '1', '4', '1', 1, 1, 'test content', '1661279310_partner-5.png', '2022-08-23 12:58:30', '2022-08-23 12:58:30'),
(15, 11, 'Pallecons', 1, 'America', 'test', '', 'Euro2', 2, 1, 'heigh', 'weigh', 'meter', '', '', '', '0', '0', '0', 'kg', 'nwfi', '1', '4', '1', 1, 1, 'test content', '1661279364_partner-5.png', '2022-08-23 12:59:24', '2022-08-23 12:59:24'),
(16, 12, 'Pallecons', 1, 'Russia', 'nenwe', '', 'Non', 2, 1, 'heigh', 'weight', 'meter', '', '', '', 'cm', 'cm', 'cm', 'kg', '10', '1', '8', '1', 1, 1, 'hu fine', '1661279634_blog-3.jpg', '2022-08-23 13:03:54', '2022-08-23 13:03:54'),
(17, 12, 'Packages', 1, 'Canada', '', 'Moving', 'Euro2', 2, 1, '', 'weight', '0', 'length', 'width', 'height', '0', '0', '0', '0', '', '1', '6', '1', 1, 0, '', '1661279634_blog-details-1.jpg', '2022-08-23 13:03:54', '2022-08-23 13:03:54'),
(18, 13, 'Pallecons', 1, 'America', 'test', '', 'Euro2', 2, 1, 'heigh', 'weigh', 'cm', '', '', '', '0', '0', '0', 'tons', '10', '1', '5', '1', 1, 1, 'test content', '1661542443_about-img.jpg', '2022-08-26 14:04:03', '2022-08-26 14:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `quote_notifications`
--

CREATE TABLE `quote_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` tinyint(4) DEFAULT NULL,
  `collection_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` tinyint(4) DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quote_notifications`
--

INSERT INTO `quote_notifications` (`id`, `collection_id`, `collection_address`, `delivery_address`, `budget`, `user_id`, `user_name`, `user_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 11, 'Lucknow, Uttar Pradesh, India', 'Noida, Uttar Pradesh, India', '4500', 6, 'Demo', 'demo@gmail.com', 0, '2022-08-23 12:59:24', '2022-08-24 11:23:26'),
(2, 12, 'Haridwar, Uttarakhand, India', 'Kolkata, West Bengal, India', '8000', NULL, NULL, NULL, 1, '2022-08-23 13:03:54', '2022-08-29 11:12:44'),
(3, 13, 'India', 'Pakistan', '2000', 10, 'drupal', 'muzzaffer121@yopmail.com', 1, '2022-08-26 14:04:03', '2022-08-29 12:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `quote_requests`
--

CREATE TABLE `quote_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quote_id` tinyint(4) NOT NULL,
  `carrier_id` tinyint(4) NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quote_requests`
--

INSERT INTO `quote_requests` (`id`, `quote_id`, `carrier_id`, `carrier_name`, `carrier_email`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 11, 'Raman', 'raman123@yopmail.com', 0, '2022-08-17 11:10:37', '2022-08-17 11:10:37'),
(2, 4, 14, 'developer14', 'carrier78@gmail.com', 0, '2022-08-17 11:10:42', '2022-08-17 11:10:42'),
(3, 4, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-17 11:10:45', '2022-08-17 11:10:45'),
(4, 2, 13, 'developer12', 'carrier14@gmail.com', 0, '2022-08-17 12:24:43', '2022-08-17 12:24:43'),
(5, 2, 14, 'developer14', 'carrier78@gmail.com', 0, '2022-08-17 12:24:51', '2022-08-17 12:24:51'),
(6, 2, 17, 'Tahridh', 'tahridh123@yopmail.com', 0, '2022-08-17 12:24:53', '2022-08-17 12:24:53'),
(7, 1, 1, 'carrier', 'carrier@gmail.com', 0, '2022-08-17 12:31:19', '2022-08-17 12:31:19'),
(8, 1, 12, 'developer', 'carrier111@gmail.com', 0, '2022-08-17 12:31:23', '2022-08-17 12:31:23'),
(9, 1, 14, 'developer14', 'carrier78@gmail.com', 0, '2022-08-17 12:31:25', '2022-08-17 12:31:25'),
(10, 1, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-17 12:31:27', '2022-08-17 12:31:27'),
(11, 4, 1, 'carrier', 'carrier@gmail.com', 0, '2022-08-19 11:38:47', '2022-08-19 11:38:47'),
(12, 4, 2, 'developer', 'developer1784@yopmail.com', 0, '2022-08-19 11:38:58', '2022-08-19 11:38:58'),
(13, 4, 11, 'Raman', 'raman123@yopmail.com', 0, '2022-08-19 11:39:01', '2022-08-19 11:39:01'),
(14, 4, 12, 'developer', 'carrier111@gmail.com', 0, '2022-08-19 11:39:04', '2022-08-19 11:39:04'),
(15, 4, 13, 'developer12', 'carrier14@gmail.com', 0, '2022-08-19 11:39:08', '2022-08-19 11:39:08'),
(16, 4, 14, 'developer14', 'carrier78@gmail.com', 0, '2022-08-19 11:39:11', '2022-08-19 11:39:11'),
(17, 4, 17, 'Tahridh', 'tahridh123@yopmail.com', 0, '2022-08-19 11:39:14', '2022-08-19 11:39:14'),
(18, 4, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-19 11:39:16', '2022-08-19 11:39:16'),
(19, 4, 19, 'Arun Kumar', 'arundeepsingh522@gmail.com', 0, '2022-08-19 11:39:18', '2022-08-19 11:39:18'),
(20, 5, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-19 11:42:50', '2022-08-19 11:42:50'),
(21, 5, 19, 'Arun Kumar', 'arundeepsingh522@gmail.com', 0, '2022-08-19 11:42:56', '2022-08-19 11:42:56'),
(22, 7, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-26 13:26:47', '2022-08-26 13:26:47'),
(23, 7, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-26 13:31:40', '2022-08-26 13:31:40'),
(24, 2, 18, 'muzaffer', 'muzaffer@yopmail.com', 0, '2022-08-26 13:39:39', '2022-08-26 13:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `trucks`
--

CREATE TABLE `trucks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dry_reefer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permit_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trucks`
--

INSERT INTO `trucks` (`id`, `company_name`, `postal_address`, `abn`, `contact_number`, `phone_number`, `email`, `file`, `key_contact`, `user_id`, `user_role`, `truck_type`, `dry_reefer`, `insurance_number`, `permit_type`, `created_at`, `updated_at`) VALUES
(1, 'Web info', 'Mohali', 'DGJ', '7896541235', '8956231478', 'raman1784@gmail.com', NULL, 'Phone', '11', 'carrier', '16-wheel', 'friend', '7896FGHT', 'All india', '2022-07-11 19:42:56', '2022-07-11 19:42:56'),
(2, 'Web info', 'Mohali', 'DGJ', '7896541235', '8956231478', 'carrier@gmail.com', '1658764588_Baddi University.pdf', 'Phone', '1', 'carrier', '16-wheel', 'friend', '7896FGHT', 'All india', '2022-07-25 10:26:28', '2022-07-25 10:26:28'),
(3, 'Himtreasure', 'Mohali', 'DGJ', '7896541235', 'Drupal', 'developer14@yopmail.com', NULL, 'Phone', '17', 'carrier', '16-wheel', 'friend', '7896FGHT', 'All india', '2022-07-31 11:09:29', '2022-07-31 11:09:29'),
(4, 'Web info', 'Mohali', 'DGJ', '7896541235', '8956231478', 'carrier@gmail.com', NULL, 'Phone', '1', 'carrier', '16-wheel', 'friend', '7896FGHT', 'All india', '2022-08-13 11:06:15', '2022-08-13 11:06:15'),
(5, 'Web Him', 'Mohali', 'DGT', '7896541235', '7896541235', 'carrier@gmail.com', '1660410287_banner_1.jpg,1660410287_banner_8.jpg,1660410287_banner_8.jpg', 'Phone', '1', 'carrier', '16-wheel', 'friend', '7896FGHT', 'All india', '2022-08-13 11:34:47', '2022-08-13 11:34:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `office_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anb_no` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_address` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `pic`, `address`, `office_no`, `anb_no`, `full_address`, `attachment`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', '8884445789', NULL, '$2y$10$JyC6SpQGsKhoVQzCIMFK9uzpSvwd0adF5Mir7zuDByl4hDW19gIp.', '1661271223_comments-2.jpg', '', '', '', '', '', NULL, NULL, '2022-06-21 05:04:06', '2022-08-23 10:43:44'),
(3, 'Aditya Mehra', 'aditya.mehra800@gmail.com', NULL, NULL, '$2y$10$wi9gWCbcMBaBkp6pEKED4udfDggVnRTyoa4z3KOGqZrXphk1RXiVS', NULL, '', '', '', '', '', NULL, NULL, '2022-06-22 13:27:27', '2022-06-22 13:27:27'),
(4, 'sumitwalia', 'sumitwalia75@gmai.com', NULL, NULL, '$2y$10$u6/DdPLBwL.HkeDCH6gCsuYwaUp.9BKiz0oSU7KCcouXRYK1s.uUa', NULL, '', '', '', '', '', NULL, NULL, '2022-07-01 03:55:36', '2022-07-01 03:55:36'),
(5, 'sumit walia', 'sumitwalia75@gmail.com', NULL, NULL, '$2y$10$dIbc7kkL04hquxe8gQM8Hevr29kizVNNf8iGjeEAgitZrEkFjXRzS', NULL, '', '', '', '', '', NULL, NULL, '2022-07-01 07:30:38', '2022-07-01 07:30:38'),
(6, 'Demo', 'demo@gmail.com', NULL, NULL, '$2y$10$sxxa/1yWdxkgo6Qlt9mowOk1GEfm6XypQpQllESgijvHDgQ96StIy', NULL, '', '', '', '', '', NULL, NULL, '2022-07-05 22:18:29', '2022-07-05 22:18:29'),
(8, 'Test dev', 'deve12@yopmail.com', '8887779914', NULL, '$2y$10$u1yEx4nPEg3ptdNlDEgT1OkdgMobInlivGgd4okwQcMtFsPPEqvSG', NULL, '', '', '', '', '', NULL, NULL, '2022-07-11 16:09:56', '2022-07-15 01:26:44'),
(9, 'Demo', 'user12@gmail.com', '9988775545', NULL, '$2y$10$sTtyfLNutDhroekdIJ/fMeVyRKcNVHN33v9uU0JwsxXPCSPa.8iEC', NULL, '', '', '', '', '', NULL, NULL, '2022-07-25 11:43:28', '2022-07-25 11:43:28'),
(10, 'drupal', 'muzzaffer121@yopmail.com', '9988775545', NULL, '$2y$10$Xvw/bUDI7AvKRt3cn6HteeEiGSZnQTpjgs7fQ0nBIC9VHaxV1RMOW', NULL, '', '', '', '', '', 1, NULL, '2022-08-01 11:28:36', '2022-08-01 11:28:36'),
(11, 'Ankit', 'Ankit@yopmail.com', '9988774444', NULL, '$2y$10$pBNyElKWOF.9zB8j66bwA.IgGyZSgKkVR8Ec8nmQh6GYR9H6t0qju', NULL, 'mohali', '7896541235', '7896541235', 'Mohali punjab', '1661444862_blog-4.jpg', 0, NULL, '2022-08-25 10:57:42', '2022-08-25 10:57:42');

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
-- Indexes for table `assign_carriers`
--
ALTER TABLE `assign_carriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carriers_email_unique` (`email`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_notifications`
--
ALTER TABLE `quote_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quote_requests`
--
ALTER TABLE `quote_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trucks`
--
ALTER TABLE `trucks`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `assign_carriers`
--
ALTER TABLE `assign_carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `quote_notifications`
--
ALTER TABLE `quote_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quote_requests`
--
ALTER TABLE `quote_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `trucks`
--
ALTER TABLE `trucks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
