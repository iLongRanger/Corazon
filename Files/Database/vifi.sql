-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2017 at 07:03 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cims`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_code` varchar(20) NOT NULL,
  `name` varchar(250) NOT NULL,
  `manager` varchar(250) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_code`, `name`, `manager`, `Address`) VALUES
('123456', 'Main', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `address`, `contact`, `email`, `created_at`, `updated_at`, `photo_id`) VALUES
(1, 'Barbosa', 'Quezon City', '09154466034', 'sample@test.com', '2017-10-15 23:25:44', '2017-10-15 23:45:31', 15),
(2, 'Jack Sparrow', 'Manila Philippines', '09057363593', 'jack@sparrow.com', '2017-10-15 23:50:28', '2017-10-15 23:50:42', 16);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Head Office', NULL, '2017-10-09 10:00:58', 'Handles and see everything'),
(2, 'Legal', NULL, '2017-10-09 10:01:07', 'Makers of the Law'),
(3, 'Accounting', '2017-10-09 09:21:46', '2017-10-09 10:01:17', 'Money Handlers'),
(4, 'Handyman Repairs', '2017-10-09 09:33:33', '2017-10-09 09:33:33', 'Construction Firm'),
(5, 'Human Resources', '2017-10-09 19:22:39', '2017-10-09 19:22:39', 'Hr Hr HR'),
(6, 'Spa', '2017-10-15 21:48:43', '2017-10-15 21:48:43', 'Complete with the name of the Spa'),
(7, 'Auditing', '2017-10-18 04:33:24', '2017-10-18 04:33:24', 'Department where auditing happens'),
(8, 'Marketing', '2017-10-18 04:37:31', '2017-10-18 04:37:31', 'People who markets the company');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo_id` int(10) UNSIGNED DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `houseno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brgy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_id` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hphone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `econtact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ealcontact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employeeid` int(11) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `started_date` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(10) UNSIGNED DEFAULT NULL,
  `salary` double NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `photo_id`, `lastname`, `firstname`, `middlename`, `street`, `houseno`, `city`, `region`, `brgy`, `zipcode`, `birthdate`, `birthplace`, `marital_id`, `aphone`, `phone`, `hphone`, `email`, `facebook`, `ename`, `relationship`, `eaddress`, `econtact`, `ealcontact`, `employeeid`, `role_id`, `started_date`, `department_id`, `salary`, `created_at`, `updated_at`) VALUES
(1, 40, 'Ortiz', 'Ralp Jeff', 'Villanueva', 'Mt Elgon', 'B20 L26', 'Quezon City', 'NCR', 'Santa Monica', '1123', '09/05/1994', 'Marikina City', 'Married', '0905-736-3593', '0915-446-6034', '990-55-39', 'rortiz0305@gmail.com', 'facebook.com/ralp.ortiz', 'Christin Marie R Velez', 'Live in Partner', 'Novaliches Quezon City', '0905-736-3593', '0915-446-6034', 2120150391, 1, '10/20/2017', 1, 10000, '2017-10-18 10:57:38', '2017-12-06 06:11:54'),
(9, 41, 'Ortiz', 'Sasa', 'Villanueva', 'Mt Elgon', 'B20 L26', 'Quezon City', 'NCR', 'Santa Monica', '1123', '09/05/1994', 'Marikina City', '1', '0905-736-3593', '0915-446-6034', '990-55-39', 'rortiz0305@gmail.comasd', 'facebook.com/christine.tintintin', 'Christin Marie R Velez', 'Live in Partnet', 'Novaliches Quezon City', '0905-736-3593', '0915-446-6034', 2120150391, 1, '2017-10-13', 1, 30000, '2017-10-21 06:22:17', '2017-12-06 06:12:10');

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
(15, '2017_10_07_181103_add_photo_id_to_users', 1),
(16, '2017_10_07_181133_create_photos_table', 1),
(20, '2017_10_07_185446_add_photo_id_to_users', 3),
(23, '2014_10_12_000000_create_users_table', 4),
(24, '2014_10_12_100000_create_password_resets_table', 4),
(25, '2017_10_07_180342_create_roles_table', 4),
(26, '2017_10_08_051539_create_department_table', 4),
(28, '2017_10_09_172435_add_description_to_department', 5),
(29, '2017_10_16_064603_create_customers_table', 6),
(31, '2017_10_18_181248_create_employees_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, '1507512147856835_648775645143237_1265331074_o.jpg', '2017-10-08 17:22:27', '2017-10-08 17:22:27'),
(2, '1507512235856835_648775645143237_1265331074_o.jpg', '2017-10-08 17:23:55', '2017-10-08 17:23:55'),
(3, '150751227816144271_10202974441359125_1055996986_n.jpg', '2017-10-08 17:24:38', '2017-10-08 17:24:38'),
(4, '1507561717856835_648775645143237_1265331074_o.jpg', '2017-10-09 07:08:37', '2017-10-09 07:08:37'),
(5, '150756231115747431_10202888150041896_5435667112254474776_n.jpg', '2017-10-09 07:18:31', '2017-10-09 07:18:31'),
(6, '150756238117358705_1377274222293372_4898290067420934867_o.jpg', '2017-10-09 07:19:41', '2017-10-09 07:19:41'),
(7, '1507563523jack.jpg', '2017-10-09 07:38:43', '2017-10-09 07:38:43'),
(8, '150756364816145573_10202974452199396_2018802984_o.jpg', '2017-10-09 07:40:48', '2017-10-09 07:40:48'),
(9, '1507605800856835_648775645143237_1265331074_o.jpg', '2017-10-09 19:23:20', '2017-10-09 19:23:20'),
(10, '1507605956jack.jpg', '2017-10-09 19:25:56', '2017-10-09 19:25:56'),
(11, '1507607800myAvatar.png', '2017-10-09 19:56:40', '2017-10-09 19:56:40'),
(12, '1508132962dota-2-rylai-the-crystal-maiden-1920x1080.jpg', '2017-10-15 21:49:22', '2017-10-15 21:49:22'),
(13, '1508134114856835_648775645143237_1265331074_o.jpg', '2017-10-15 22:08:34', '2017-10-15 22:08:34'),
(14, '1508138744856835_648775645143237_1265331074_o.jpg', '2017-10-15 23:25:44', '2017-10-15 23:25:44'),
(15, '1508139930Kv70y3fd.jpg', '2017-10-15 23:45:30', '2017-10-15 23:45:30'),
(16, '1508140228jack.jpg', '2017-10-15 23:50:28', '2017-10-15 23:50:28'),
(17, '1508330683accountant.png', '2017-10-18 04:44:43', '2017-10-18 04:44:43'),
(18, '1508330738atty.jpg', '2017-10-18 04:45:38', '2017-10-18 04:45:38'),
(19, '1508330802hr.jpg', '2017-10-18 04:46:42', '2017-10-18 04:46:42'),
(20, '1508330966auditor.png', '2017-10-18 04:49:26', '2017-10-18 04:49:26'),
(21, '1508331049marketing.png', '2017-10-18 04:50:49', '2017-10-18 04:50:49'),
(22, '1508331160carpenter.jpg', '2017-10-18 04:52:40', '2017-10-18 04:52:40'),
(23, '150835259216145573_10202974452199396_2018802984_o.jpg', '2017-10-18 10:49:52', '2017-10-18 10:49:52'),
(24, '1508352732856835_648775645143237_1265331074_o.jpg', '2017-10-18 10:52:12', '2017-10-18 10:52:12'),
(25, '150835305816145573_10202974452199396_2018802984_o.jpg', '2017-10-18 10:57:38', '2017-10-18 10:57:38'),
(26, '150847374417358705_1377274222293372_4898290067420934867_o.jpg', '2017-10-19 20:29:04', '2017-10-19 20:29:04'),
(27, '150847389715747431_10202888150041896_5435667112254474776_n.jpg', '2017-10-19 20:31:37', '2017-10-19 20:31:37'),
(28, '1508479060myAvatar.png', '2017-10-19 21:57:40', '2017-10-19 21:57:40'),
(29, '1508479099myAvatar.png', '2017-10-19 21:58:19', '2017-10-19 21:58:19'),
(30, '1508479720856835_648775645143237_1265331074_o.jpg', '2017-10-19 22:08:40', '2017-10-19 22:08:40'),
(31, '1508479859605776.jpg', '2017-10-19 22:10:59', '2017-10-19 22:10:59'),
(32, '1508588001856835_648775645143237_1265331074_o.jpg', '2017-10-21 04:13:21', '2017-10-21 04:13:21'),
(33, '1508588771856835_648775645143237_1265331074_o.jpg', '2017-10-21 04:26:11', '2017-10-21 04:26:11'),
(34, '1508589301856835_648775645143237_1265331074_o.jpg', '2017-10-21 04:35:01', '2017-10-21 04:35:01'),
(35, '1508589354856835_648775645143237_1265331074_o.jpg', '2017-10-21 04:35:54', '2017-10-21 04:35:54'),
(36, '1508589410856835_648775645143237_1265331074_o.jpg', '2017-10-21 04:36:50', '2017-10-21 04:36:50'),
(37, '1508589452856835_648775645143237_1265331074_o.jpg', '2017-10-21 04:37:32', '2017-10-21 04:37:32'),
(38, '1508595737856835_648775645143237_1265331074_o.jpg', '2017-10-21 06:22:17', '2017-10-21 06:22:17'),
(39, '15085966111108468-league-of-legends-katarina.jpg', '2017-10-21 06:36:51', '2017-10-21 06:36:51'),
(40, '1512569514856835_648775645143237_1265331074_o.jpg', '2017-12-06 06:11:54', '2017-12-06 06:11:54'),
(41, '151256953017358705_1377274222293372_4898290067420934867_o.jpg', '2017-12-06 06:12:10', '2017-12-06 06:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `rj201001`
--

CREATE TABLE `rj201001` (
  `id_number` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rj201002`
--

CREATE TABLE `rj201002` (
  `fileNo` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `applicationForm` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `NBI` varchar(255) DEFAULT NULL,
  `healthCert` varchar(255) DEFAULT NULL,
  `brgyClearance` varchar(255) DEFAULT NULL,
  `birthCert` varchar(255) DEFAULT NULL,
  `marrigeCert` varchar(255) DEFAULT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rj201003`
--

CREATE TABLE `rj201003` (
  `recordNo` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dateHired` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rj201004`
--

CREATE TABLE `rj201004` (
  `fileNo` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Pagibig` varchar(255) NOT NULL,
  `Philhealth` varchar(255) NOT NULL,
  `TIN` varchar(255) NOT NULL,
  `SSS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rj201005`
--

CREATE TABLE `rj201005` (
  `fileNo` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `NC1` varchar(255) DEFAULT NULL,
  `NC2` varchar(255) DEFAULT NULL,
  `DOHLic` varchar(255) DEFAULT NULL,
  `YellowCard` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'The Leader', NULL, '2017-10-18 09:05:16'),
(2, 'Regular', '6  months and counting', NULL, '2017-10-09 19:05:07'),
(3, 'Provisionary', 'Not Reqgular', '2017-10-09 18:59:39', '2017-10-09 18:59:39'),
(4, 'Test', 'Testing', '2017-10-09 19:05:22', '2017-10-09 19:05:22'),
(5, 'test', 'test', '2017-10-31 02:44:50', '2017-10-31 02:44:50'),
(6, 'test', 'testy', '2017-10-31 03:05:51', '2017-10-31 03:05:51'),
(7, 'Asdasd', 'as', '2017-10-31 03:06:04', '2017-10-31 07:59:32'),
(8, 'asdf', 'asd', '2017-10-31 03:07:27', '2017-10-31 03:07:27'),
(9, 'asd', 'asdf', '2017-10-31 03:18:20', '2017-10-31 03:18:20'),
(10, 'qwe', 'qwe', '2017-10-31 04:19:27', '2017-10-31 04:19:27'),
(11, 'zxc', 'zxc', '2017-10-31 04:19:47', '2017-10-31 04:19:47'),
(12, 'fghj', 'fhg', '2017-10-31 04:21:44', '2017-10-31 04:21:44'),
(13, 'sad', 'asd', '2017-10-31 04:22:01', '2017-10-31 04:22:01'),
(14, 'hj', 'hgj', '2017-10-31 05:02:17', '2017-10-31 05:02:17'),
(15, '24', '21', '2017-10-31 06:45:20', '2017-10-31 06:45:20'),
(16, 'Aa', 'as', '2017-10-31 06:55:46', '2017-10-31 06:55:46'),
(17, '123', '123', '2017-10-31 07:28:29', '2017-10-31 07:28:29'),
(18, 'fsda', 'asfd', '2017-10-31 07:30:18', '2017-10-31 07:30:18'),
(19, 'jki', 'kj', '2017-10-31 07:38:34', '2017-10-31 07:38:34'),
(20, '12', '11', '2017-10-31 07:39:46', '2017-10-31 07:39:46'),
(21, 'qw', 'ww', '2017-10-31 07:40:41', '2017-10-31 07:40:41'),
(22, '1', '11', '2017-10-31 07:41:18', '2017-10-31 07:41:18'),
(23, '121', '123', '2017-10-31 07:43:41', '2017-10-31 07:43:41'),
(24, '1', '11', '2017-10-31 07:44:37', '2017-10-31 07:44:37'),
(25, '121', '123', '2017-10-31 07:46:15', '2017-10-31 07:46:15'),
(26, '121', '2q3', '2017-10-31 07:47:18', '2017-10-31 07:59:11'),
(27, '12', '11', '2017-10-31 07:54:09', '2017-10-31 07:54:09'),
(28, 'Asdasd', 'asd', '2017-10-31 07:56:56', '2017-10-31 07:56:56'),
(29, 'asda', 'aa', '2017-10-31 07:58:38', '2017-10-31 07:58:38'),
(30, 'asda', 'aa', '2017-10-31 07:58:38', '2017-10-31 07:58:38'),
(31, 'Asd', 'asdf', '2017-10-31 07:58:47', '2017-10-31 07:58:47'),
(32, 'sfd', 'dsf', '2017-10-31 07:59:05', '2017-10-31 07:59:05'),
(33, 'Asdasd', 'asdf', '2017-10-31 08:11:38', '2017-10-31 08:11:38'),
(34, 'Asdasd', 'asdf', '2017-11-07 08:06:58', '2017-11-07 08:06:58'),
(35, 'fdgs', 'sgfd', '2017-11-07 08:17:52', '2017-11-07 08:17:52'),
(36, 'asdf', 'sdfa', '2017-11-07 08:18:23', '2017-11-07 08:18:23'),
(37, 'asdf', 'asdf', '2017-11-07 08:21:58', '2017-11-07 08:21:58'),
(38, 'asdf', 'asdf', '2017-11-07 08:23:22', '2017-11-07 08:23:22'),
(39, 'sd', 'asdf', '2017-11-07 08:24:00', '2017-11-07 08:24:00'),
(40, 'asdsad', 'asd', '2017-11-07 08:24:52', '2017-11-07 08:24:52'),
(41, 'Asdasd', 'as', '2017-11-07 08:25:55', '2017-11-07 08:25:55'),
(42, 'asdf', 'asd', '2017-11-07 08:27:29', '2017-11-07 08:27:29'),
(43, 'cgh', 'Hj', '2017-11-07 08:29:10', '2017-11-07 08:29:10'),
(44, 'Asdasdas', 'Dasd', '2017-11-07 08:30:11', '2017-11-07 08:30:11'),
(45, 'Asdasd', 'asdf', '2017-11-07 08:35:20', '2017-11-07 08:35:20'),
(46, 'asdasd', 'asdf', '2017-11-07 08:38:01', '2017-11-07 08:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `employee_id` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `department_id` int(10) DEFAULT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(130) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `role_id`, `is_active`, `department_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `photo_id`) VALUES
(1, '', 1, 1, 1, 'Ralp Jeff  Ortiz', 'rortiz0305@gmail.com', '$2y$10$uaRz/b7MHnSDcFj232q8oeqvpJXvHuq9iCh3vJj7FjsS80QbyMAB2', 'fMUN08mMB3KVsfkMgnhElkW6ce62h0AODQJiKHbJwnxgtFkh3pUqQQsrjYJc', '2017-10-09 02:36:09', '2017-10-19 22:09:28', 11),
(2, '', 1, 0, 1, 'Christine Marie R. Velez', 'christine@yahoo.com', '$2y$10$5dMSNUl1A8y0XMrn9raBO.GnFRigpn1uXUqexypabdGjcDmznCmyy', 'KgMlJiYW9THO4Gq2KGm2yXStgXYbbkGIJ6144BzvCrDr7JuwoPRg83taxcGg', '2017-10-09 07:18:31', '2017-10-21 02:23:03', 5),
(3, '', 1, 1, 5, 'Human Resources Person', 'hr@human.com', '$2y$10$VvQZFJy1oGGC0QnqVDv/Qed8ova0qNG2Hazp47IHaj9atfTLT41Ai', 'OAgMseWnk5YlB4eN8MR8fA6cGPP7SAwkGP9dQWsjeBYiOGRYp3tpCG8ElRaR', '2017-10-09 19:23:21', '2017-10-19 22:10:12', 19),
(4, '', 1, 1, 2, 'Attorney Legal', 'legal@legal.com', '$2y$10$NQ4ThpJWFEBXveEwUZeEZu1QOq2bGENa0R4BVNopxWf2XFBuE7SsO', '8KeDjxzXTslNT2UXduK4rnaua9vKjAMJHKfIfzlMUWLpQyRdAXQD2QFpfW0l', '2017-10-09 19:25:56', '2017-10-19 22:10:32', 18),
(5, '', 1, 1, 6, 'Theraphist', 'spa@spa.com', '$2y$10$0orGfCFpak2R.qb3EWr3pulpr6YczVCvUM9uJS4rS2LSKhfxt5vjC', 'miSG9ft8cvs1H92MZxZaLYjmME5BFYvK6HVw7GS8NUvTexsHxxzyhnWolbJc', '2017-10-15 21:49:22', '2017-10-19 22:10:59', 31),
(6, '', 1, 1, 3, 'Accountant Person', 'accountant@accounts.com', '$2y$10$F3KTTOY78Y3IwWUJc19WS.ri4QTdgDrLcWENuAWcAsPoGu2dXJ0.2', 'S5XzQgNwTn4od4sqtaSDdEpfcC3C8H6rwej52KZyl1UipOiflHNwjR5izNsC', '2017-10-18 04:44:43', '2017-10-19 22:11:19', 17),
(7, '', 1, 1, 7, 'Auditor Audits', 'auditor@audit.com', '$2y$10$oDeLzkp1w37mHDhdg6F4vu/MJv61gxpqjG70QFtEd2yGKCPmgI3JC', 'agz8kAQBU9EjhLNqRv8VyYmr2ggHVN77vpfnzsmuCXO3I2nzKKCWeuQjM2ZP', '2017-10-18 04:49:26', '2017-10-19 22:11:32', 20),
(8, '', 1, 1, 8, 'Someone who sells something', 'marketing@market.com', '$2y$10$A0xFUquoOHsX3gblKRGry.wfBJi.RUmj/T3Vdvag.IornrVWTGQ3O', 'Xkmvv5tv0eMWlegsmq776j0SbfcdBWEY2tF9AhuqVRpEPTAtqwnCQXNGlMDQ', '2017-10-18 04:50:49', '2017-10-19 22:11:49', 21),
(9, '', 1, 1, 4, 'Repair man', 'handyman@handyman.com', '$2y$10$h9hyjU5Xv8EQIQsi.BXr3ewbASKm.fFayehKg0goJVFo2GBeFRUu6', 'etjYEk3fkHPeC1iq4IjxEP9TJJp4pMnwyUxKLOOsrVFZ45rBugUFJpnloy31', '2017-10-18 04:52:40', '2017-10-19 22:12:00', 22),
(10, '', 1, 1, 2, 'Ralp Jeff', 'sata@gmail.com', '$2y$10$QQH8qtoquvGO3wN43vhGaO2ixW77V8.VmRdGJs8Q4Q6YJojnlPJda', NULL, '2017-10-19 21:58:19', '2017-10-19 22:06:41', 29),
(11, '', 2, 1, 1, 'asdasd', 'test@tse.com', '$2y$10$ugUqwyxOGj6mlXJHNj1msOyzqEU9HFm9PaNpMS.Y3dw3Bt4WtZ1ge', NULL, '2017-10-19 22:08:40', '2017-10-19 22:08:40', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_code`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `employees_photo_id_index` (`photo_id`),
  ADD KEY `employees_marital_id_index` (`marital_id`(191)),
  ADD KEY `employees_role_id_index` (`role_id`),
  ADD KEY `employees_department_id_index` (`department_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rj201001`
--
ALTER TABLE `rj201001`
  ADD PRIMARY KEY (`id_number`);

--
-- Indexes for table `rj201002`
--
ALTER TABLE `rj201002`
  ADD PRIMARY KEY (`fileNo`);

--
-- Indexes for table `rj201003`
--
ALTER TABLE `rj201003`
  ADD PRIMARY KEY (`recordNo`);

--
-- Indexes for table `rj201004`
--
ALTER TABLE `rj201004`
  ADD PRIMARY KEY (`fileNo`);

--
-- Indexes for table `rj201005`
--
ALTER TABLE `rj201005`
  ADD PRIMARY KEY (`fileNo`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
