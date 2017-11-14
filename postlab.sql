-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 09:22 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `postlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_linkage`
--

DROP TABLE IF EXISTS `access_linkage`;
CREATE TABLE IF NOT EXISTS `access_linkage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) NOT NULL,
  `permission` int(11) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_linkage`
--

INSERT INTO `access_linkage` (`id`, `role`, `permission`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2015-08-13 09:56:58', '2015-08-13 09:56:58'),
(2, 1, 2, '2015-08-13 10:12:18', '2015-08-13 10:12:18'),
(3, 1, 3, '2015-08-24 08:22:25', '2015-08-24 08:22:25'),
(4, 1, 4, '2015-08-24 09:30:19', '2015-08-24 09:30:19'),
(6, 3, 4, '2015-08-26 06:35:02', '2015-08-26 06:35:02'),
(7, 1, 5, '2015-09-09 04:23:42', '2015-09-09 04:23:42');

-- --------------------------------------------------------

--
-- Table structure for table `access_permissions`
--

DROP TABLE IF EXISTS `access_permissions`;
CREATE TABLE IF NOT EXISTS `access_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_permissions`
--

INSERT INTO `access_permissions` (`id`, `key`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create_acl', 'Create ACL', 'Can create acl', '2015-08-13 09:56:23', '2015-08-13 09:56:23'),
(2, 'edit_acl', 'Edit ACL', 'Can edit acl', '2015-08-13 10:11:46', '2015-08-13 10:11:46'),
(3, 'edit_post', 'Edit Post', 'Can delete post', '2015-08-24 08:00:32', '2015-08-24 08:00:32'),
(4, 'create_post', 'Create Post', 'Can create post', '2015-08-24 08:00:32', '2015-08-24 08:00:32'),
(5, 'create_ads', 'Creates Ads', 'Create advates', '2015-09-09 04:19:54', '2015-09-09 04:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `access_roles`
--

DROP TABLE IF EXISTS `access_roles`;
CREATE TABLE IF NOT EXISTS `access_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_roles`
--

INSERT INTO `access_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Full access to create, edit, and update companies, and orders.', '2015-08-11 13:07:35', '2015-08-11 13:07:35'),
(2, 'User', 'A standard user that can have a licence assigned to them. No administrative features.', '2015-08-11 13:08:10', '2015-08-11 13:08:10'),
(3, 'Admin', 'Admin users', '2015-08-24 07:54:15', '2015-08-24 07:54:15');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cell` varchar(10) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ritshidze', 'Netshiavhela', 'ritshidze@yahoo.com', '$2y$10$5uuipL/Mf1oV4Ou3xOT3AOMVOMdKtcCpjbASpiynje/Npt/agbfIm', 1, '2UweUGQmQQnIcLrVw52EcExdBClqjsWjkI63nhyknm2bbWSkPvSoUkAOcuDY', '2017-06-07 10:32:00', '2017-06-07 10:32:00'),
(2, 'Rabelani', 'Nemaranzhe', 'rabe@lani.com', '$2y$10$Avgy20qKQb2le26Iaeu71e3xvdkT1NUmIEMpV9R7fvRoIceZNpcwa', 2, 'nrv6CfEcUXcyL7UpmFHmUMnvg4CcrgooI5eAwcT8J7dDfAEn0EVXcHJHXbtL', '2017-06-07 08:34:48', '2017-06-07 08:34:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
