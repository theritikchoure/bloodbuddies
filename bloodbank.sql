-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 08, 2021 at 04:57 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

DROP TABLE IF EXISTS `donors`;
CREATE TABLE IF NOT EXISTS `donors` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `donated_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `email`, `password`, `name`, `bg`, `gender`, `age`, `mobile`, `address`, `city`, `state`, `zip_code`, `image`, `status`, `donated_date`, `created_at`, `updated_at`) VALUES
(6, 'your.email+fakedata46463@gmail.com', '$2y$10$H0wciHdlhCIz4YIxEHfLr./DQwoNJWqw9/w9TyYyKN9hXCdR7TwLq', 'Nat Pouros', 'B-', 'Female', '36', 'Corporate Data Strategist', '338 Israel Brook', 'Bhopal', 'Mississippi', '462042', '1631119088.jpg', 1, '2021-09-08 11:08:08', '2021-09-08 11:08:08', '2021-09-08 11:08:08'),
(4, 'ritik@gmail.com', '$2y$10$znaOCSD8MT4KXa0VyEDnZejRJdML5U0Gq54NNOkeL2eG98cxPOD4u', 'Ritik Chourasiya', 'A+', 'Male', '21', '09285515855', 'Bhopal', 'Bhopal', 'Madhya Pradesh', '462034', '1630555803.jpg', 0, '2021-09-02 22:31:24', '2021-09-01 22:40:03', '2021-09-02 22:31:24'),
(5, 'harsh@gmail.com', '$2y$10$OPZZXXsXmdwXLrqRP2pwruq4.Pl80EItv7dr226Qh3WDW5NyW//FO', 'Harsh Verma', 'A-', 'Male', '21', '4714785247', 'Jawahar chowk', 'Rewa', 'Madhya Pradesh', '462034', '1630776745.jpg', 1, '2021-09-04 12:02:25', '2021-09-04 12:02:25', '2021-09-04 12:02:25'),
(7, 'adarsh@gmail.com', '$2y$10$w4G1hpBnYv5.Ix6iq1DnROgDr9SUoVyatnl2oXV1xbyMiptAQ8Orq', 'Adarsh Kushwaha', 'A-', 'Male', '2', '9574257415', 'Ratnagiri Bypass', 'Bhopal', 'Madhya Pradesh', '462034', '1631119286.jpg', 1, '2021-09-08 11:11:26', '2021-09-08 11:11:26', '2021-09-08 11:11:26'),
(8, 'your.email+fakedata63049@gmail.com', '$2y$10$1nD3mZM9anlCJ9AnapyZwO.uA85h76PqxLOGyxAFjnH.FQO5kqa72', 'Jairo Luettgen', 'A-', 'Male', '2', 'Forward Mobility Administrator', '987 Anya Ferry', 'Bhopal', 'Rhode Island', '59287', '1631119339.jpg', 1, '2021-09-08 11:12:19', '2021-09-08 11:12:19', '2021-09-08 11:12:19'),
(9, 'your.email+fakedata71687@gmail.com', '$2y$10$BWxjQOSQh7P4zdfyy3L.DeFZua3tEuSlCdKFvHu0YrU8WbRVaPm4m', 'Kimberly Gislason', 'B-', 'Female', '0', 'Internal Security Facilitator', '42135 Luz Spurs', 'Bhopal', 'Minnesota', '54635-4414', '1631119364.jpg', 1, '2021-09-08 11:12:44', '2021-09-08 11:12:44', '2021-09-08 11:12:44'),
(10, 'your.email+fakedata13816@gmail.com', '$2y$10$xdwAu3hGuKgsaJV5qUd0zulavX3jyH1JfZ78xN/BzDHYayyi/5vBW', 'Albertha Gutkowski', 'AB-', 'Male', '0', 'Forward Communications Assistant', '5856 Hilpert Mountains', 'Bhopal', 'Oregon', '38734', '1631119390.jpg', 1, '2021-09-08 11:13:10', '2021-09-08 11:13:10', '2021-09-08 11:13:10');

-- --------------------------------------------------------

--
-- Table structure for table `donor_requisition`
--

DROP TABLE IF EXISTS `donor_requisition`;
CREATE TABLE IF NOT EXISTS `donor_requisition` (
  `donor_id` int(10) UNSIGNED NOT NULL,
  `requisition_id` int(10) UNSIGNED NOT NULL,
  KEY `donor_requisition_donor_id_foreign` (`donor_id`),
  KEY `donor_requisition_requisition_id_foreign` (`requisition_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donor_requisition`
--

INSERT INTO `donor_requisition` (`donor_id`, `requisition_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 1),
(4, 2),
(4, 1),
(0, 0),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING HASH
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_31_090255_create_donors_table', 2),
(5, '2021_08_31_095314_create_requisitions_table', 3),
(6, '2021_09_01_142434_create_donor_requisitions_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(250))
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requisitions`
--

DROP TABLE IF EXISTS `requisitions`;
CREATE TABLE IF NOT EXISTS `requisitions` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `p_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hospital` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_disease` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_bg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_form` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisitions`
--

INSERT INTO `requisitions` (`id`, `p_name`, `p_age`, `p_gender`, `mobile`, `hospital`, `doctor`, `p_city`, `p_disease`, `p_bg`, `unit`, `r_form`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Anita Bai', '32', 'Female', '8415274859', 'Hamidia Hospital', 'Rachna Shrivastav', 'Harda', 'Fracture', 'AB+', '1', '1630471114.jpg', 1, '2021-08-31 23:08:34', '2021-08-31 23:08:34'),
(2, 'Lakshman', '52', 'Male', '8452174859', 'Harda Govt. Hospital', 'Anita Choure', 'Harda', 'TB', 'Any', '1', '1630472777.jpg', 0, '2021-08-31 23:36:17', '2021-09-02 22:31:24'),
(4, 'L', 'Bugpggaaa gaa', 'Female', 'Lp', 'A', 'Lfeo Ua a', 'Bhopal', 'Oa aoag  ol', 'Any', '485', '1631118316.jpg', 1, '2021-09-08 10:55:16', '2021-09-08 10:55:16'),
(5, 'Vyh thte', 'Nanutonhaa', 'Female', 'N u kp\'aaa', 'Ala', 'Tiaeewhtm', 'Bhopal', 'G', 'B+', '329', '1631118339.jpg', 1, '2021-09-08 10:55:39', '2021-09-08 10:55:39'),
(6, 'Eaplpmaulot', 'A a', 'Male', 'Ue', 'T a', 'Tanuh  hlhmt', 'Bhopal', 'Ligunrn  habmw', 'A-', '471', '1631118443.jpg', 1, '2021-09-08 10:57:23', '2021-09-08 10:57:23'),
(7, 'Peggie Hand', 'Beatae id tempora ut culpa explicabo omnis quia. Eaque dolor vel eveniet nemo. Accusantium dolor voluptas iusto dolor sunt quibusdam enim. Dolorem magni beatae quam perspiciatis voluptas.', 'Male', 'Future Factors Associate', 'Amet voluptatum dicta et minima.', 'Sint consequuntur voluptatibus dolor aut fugit nemo nam.', 'Bhopal', 'Oa aoag  ol', 'B-', '75', '1631118523.jpg', 1, '2021-09-08 10:58:43', '2021-09-08 10:58:43'),
(8, 'Henderson Kerluke', 'Sit cum ut. Numquam in aliquam eos ut officia autem explicabo. Recusandae perspiciatis est ducimus impedit harum veritatis eum repellat quaerat. A distinctio occaecati voluptatem nulla totam et maxime. Laborum ut nemo sed rem non.', 'Male', 'Senior Usability Administrator', 'Ullam debitis explicabo ut ut minus.', 'Est iusto laboriosam velit ex.', 'Bhopal', '85173', 'O-', '455', '1631118645.jpg', 1, '2021-09-08 11:00:45', '2021-09-08 11:00:45'),
(9, 'Erick Reichert', '10', 'Male', '7485748574', 'Officiis et dolores alias deleniti nesciunt omnis.', 'Reiciendis aut aliquid aut voluptate reiciendis.', 'Bhopal', '63631', 'A-', '77', '1631118697.jpg', 1, '2021-09-08 11:01:37', '2021-09-08 11:01:37'),
(10, 'A naa u bvaRwb', '50', 'Female', 'Tat awitm', 'WamaA tu', 'N', 'Bhopal', 'NnUaaUtanurw', 'B+', '159', '1631118758.jpg', 1, '2021-09-08 11:02:38', '2021-09-08 11:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ritik Chourasiya', 'admin@gmail.com', NULL, '$2y$10$rKQfkhDCurlVQFiHwrV3juza7zWTsCoMPO22CZR9PFt804GBjYCu6', '1630763810.jpg', NULL, '2021-09-04 08:26:50', '2021-09-08 10:43:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
