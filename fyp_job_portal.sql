-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 17, 2024 at 12:15 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fyp_job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `job_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `resume_file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_id`, `user_id`, `resume_file`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(2, 2, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(3, 3, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(4, 4, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(5, 5, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(6, 6, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(7, 7, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(8, 8, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(9, 9, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(10, 10, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(11, 11, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(12, 12, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(13, 13, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(14, 14, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(15, 15, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(16, 16, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(17, 17, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(18, 18, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(19, 19, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(20, 20, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(21, 21, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(22, 22, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(23, 23, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(24, 24, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(25, 25, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(26, 26, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(27, 27, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(28, 28, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(29, 29, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(30, 30, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(31, 31, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(32, 32, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(33, 33, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(34, 34, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(35, 35, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(36, 36, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(37, 37, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(38, 38, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(39, 39, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(40, 40, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(41, 41, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(42, 42, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(43, 43, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(44, 44, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(45, 45, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(46, 46, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(47, 47, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(48, 48, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(49, 49, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(50, 50, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(51, 51, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(52, 52, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(53, 53, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(54, 54, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(55, 55, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(56, 56, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(57, 57, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(58, 58, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(59, 59, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(60, 60, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(61, 61, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(62, 62, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(63, 63, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(64, 64, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(65, 65, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(66, 66, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(67, 67, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(68, 68, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(69, 69, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(70, 70, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(71, 71, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(72, 72, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(73, 73, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(74, 74, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(75, 75, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(76, 76, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(77, 77, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(78, 78, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(79, 79, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(80, 80, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(81, 81, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(82, 82, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(83, 83, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:34', '2024-01-26 16:06:34'),
(84, 84, 3, 'path/to/resume/file', 'pending', '2024-01-26 16:06:34', '2024-01-26 16:06:34'),
(85, 5, 4, 'cv/2t93cELmDvVxcw5Z9RGzKKIf9DkhokdrRQbpmvmI.png', 'approve', '2024-01-27 02:11:46', '2024-01-27 02:12:45'),
(86, 13, 5, 'cv/ATbXJ0ETvd9fujf71HS7kLBawHWzk0HBEOUxHMSM.html', 'pending', '2024-01-27 03:31:28', '2024-01-27 03:31:28'),
(87, 86, 9, 'cv/38cffNpoRyfWiSXQw9gDVZGBOrWWTkNLo09webBZ.png', 'pending', '2024-03-10 12:24:59', '2024-03-10 12:24:59'),
(88, 86, 9, 'cv/vz36cRvaaQ9bqiR1WbwB69y3BLw0CJqz5F4mM1i7.docx', 'pending', '2024-03-10 12:30:40', '2024-03-10 12:30:40'),
(89, 87, 15, 'cv/zyARcAGXvSXEVeUMM0xNQPd55dpWCM1w9jzG2dHA.docx', 'pending', '2024-03-15 17:01:57', '2024-03-15 17:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web Development', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(2, 'Graphic Designer', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(3, 'Multimedia', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(4, 'Advertising', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(5, 'Education & Training', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(6, 'English', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(7, 'Social Media', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(8, 'Writing', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(9, 'PHP Programming', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(10, 'Project Management', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(11, 'Finance Management', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(12, 'Office & Admin', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(13, 'Web Designer', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(14, 'Customer Service', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(15, 'Marketing & Sales', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(16, 'Software Development', '2024-01-26 16:06:32', '2024-01-26 16:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `location`, `image`, `phone`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Gleichner-Robel', '34274 Beatty Way Suite 523\nGaylordbury, PA 06339', 'https://via.placeholder.com/200x200.png/0022dd?text=business+dolores', '+14194739438', 1, '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(2, 'Huffman Randolph Inc', 'Ut ea officia volupt', 'http://127.0.0.1:8000/storage/companyimages/mURKZJMLO5D7jRn8pJKzoS528rSvts4gptjAISZ9.png', '+1 (633) 428-7196', 10, '2024-03-10 12:31:14', '2024-03-10 12:31:14'),
(3, 'Indus Hospital', 'Sa 63/2 Block 7 Kaechs Karachi', 'http://jobportal.test/storage/companyimages/jDn5XiETbASrMWWJIDg3ayl1oAADHAAAttC88N28.jpg', '123456789', 14, '2024-03-15 13:52:32', '2024-03-15 13:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`id`, `user_id`, `email`, `phone_number`, `website`, `linkedin_link`, `github_link`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 1, 'asim@gmail.com', '03002334072', 'https://www.bizobirasy.org', NULL, NULL, NULL, '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'rafay@gmail.com', '0320232020', 'https://agilerepublics.com', NULL, NULL, NULL, '2024-01-27 04:19:43', '2024-01-27 04:19:43'),
(3, 3, 'nywiwihiq@mailinator.com', '326', 'https://www.suqupez.ca', 'https://www.bevymikyhoso.org.au', 'https://www.hyjohelupawed.cm', 'Exercitationem et au', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(4, 4, 'nywiwihiq@mailinator.com', '326', 'https://www.suqupez.ca', 'https://www.bevymikyhoso.org.au', 'https://www.hyjohelupawed.cm', 'Exercitationem et au', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(5, 5, 'sekiwojoxo@mailinator.com', '241', 'https://www.gunudij.com', 'https://www.pybalycygeluw.mobi', 'https://www.jagogefafuha.org.uk', 'Minim ducimus facil', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(7, 7, 'zuxo@mailinator.com', '282', 'https://www.leverofylugeve.org.au', 'https://www.qah.org.au', 'https://www.kyxevugokebu.ca', 'Minim a blanditiis d', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(8, 8, 'naluharo@mailinator.com', '353', 'https://www.demosygosaz.net', 'https://www.nedacutecahuge.cm', 'https://www.fesixykucu.cm', 'Sed molestias mollit', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(9, 9, 'qevisyh@mailinator.com', '897', 'https://www.torizyvoloce.org', 'https://www.nirapeq.com.au', 'https://www.rytejanorafe.info', 'Qui aspernatur et ve', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `degree_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_start_date` date DEFAULT NULL,
  `edu_end_date` date DEFAULT NULL,
  `education_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `user_id`, `degree_title`, `institute`, `edu_start_date`, `edu_end_date`, `education_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bachelors Computer Science', 'Iqra university', '2019-11-25', '2024-02-04', 'Very Educational', '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'Bachelors Computer Science', 'Iqra university', '2019-02-05', '2020-02-05', 'Iqra university', '2024-01-27 04:19:43', '2024-01-27 04:19:43'),
(3, 3, 'Ea omnis duis minim', 'Sunt impedit accusa', '1998-10-31', '2006-04-28', 'Quo cumque consectet', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(4, 3, 'Maiores aliquid nisi', 'Voluptatibus vero ni', '2016-12-02', '2022-05-08', 'Sed neque ipsum mol', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(5, 3, 'Voluptatibus quo sol', 'Sit nulla odit ea ex', '1977-05-30', '1997-12-17', 'Et voluptatem Facil', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(6, 4, 'Ea omnis duis minim', 'Sunt impedit accusa', '1998-10-31', '2006-04-28', 'Quo cumque consectet', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(7, 4, 'Maiores aliquid nisi', 'Voluptatibus vero ni', '2016-12-02', '2022-05-08', 'Sed neque ipsum mol', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(8, 4, 'Voluptatibus quo sol', 'Sit nulla odit ea ex', '1977-05-30', '1997-12-17', 'Et voluptatem Facil', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(9, 5, 'Nobis et ad voluptat', 'Minim non architecto', '1978-07-06', '2007-08-12', 'Nihil officia in non', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(11, 7, 'Voluptas sequi quis', 'Ratione odit id inci', '1984-10-08', '1974-03-20', 'Maxime neque non ull', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(12, 8, 'Sed Nam magna fugiat', 'Dolor nostrud labori', '2008-04-13', '1981-08-11', 'Ipsum non aliquip a', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(13, 9, 'Neque ad quia a simi', 'At dignissimos aut a', '1995-09-24', '2008-08-09', 'Praesentium inventor', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(14, 9, 'Mollit commodi quod', 'Adipisci quia fugit', '1995-04-04', '1974-05-30', 'Porro assumenda corp', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `job_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_start_date` date DEFAULT NULL,
  `job_end_date` date DEFAULT NULL,
  `job_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `job_title`, `organization`, `job_start_date`, `job_end_date`, `job_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wordpress developer Intern', 'Agile Republics', '2021-09-01', '2022-09-01', 'Problem Solving Development', '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'Graphic desinger', 'Alpha', '2020-05-02', '2021-02-09', 'Graphic', '2024-01-27 04:19:43', '2024-01-27 04:19:43'),
(3, 2, 'Wordpress Developer', 'Agile Republics', '2000-02-05', '2000-02-02', 'Web Developer', '2024-01-27 09:21:35', '2024-01-27 09:21:35'),
(4, 3, 'Ipsum est Nam facil', 'Clements and Reynolds Co', '2002-01-31', '1997-02-13', 'Consequatur ex dolo', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(5, 3, 'Velit cillum sequi i', 'Sears and Mcleod Inc', '2000-05-14', '1987-02-17', 'Nihil amet corporis', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(6, 4, 'Ipsum est Nam facil', 'Clements and Reynolds Co', '2002-01-31', '1997-02-13', 'Consequatur ex dolo', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(7, 4, 'Velit cillum sequi i', 'Sears and Mcleod Inc', '2000-05-14', '1987-02-17', 'Nihil amet corporis', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(8, 5, 'Est ut mollitia arch', 'Nelson and Stokes Plc', '2017-11-03', '2002-10-20', 'Nam ut sapiente odio', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(10, 7, 'Quas enim accusantiu', 'Cooper Porter Associates', '2007-01-17', '1984-03-26', 'Qui mollitia delectu', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(11, 8, 'Qui et quaerat aliqu', 'Casey Pickett Plc', '2008-09-30', '1979-07-09', 'Dolor velit labore', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(12, 9, 'Beatae duis libero q', 'Mccormick Gilbert LLC', '1978-03-19', '2020-05-03', 'Voluptates iusto mol', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(13, 9, 'Aut enim vel vitae d', 'Franks Garcia Associates', '2005-08-05', '1987-06-20', 'Voluptatem nulla re', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(14, 9, 'Laboris lorem ea ad', 'Ortega and Davenport Traders', '1981-12-18', '1980-11-23', 'Ipsa quo nisi modi', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(15, 9, 'Commodo quas quis cu', 'Oneal and Patrick Associates', '1981-12-31', '1997-09-19', 'Debitis voluptatem', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `interest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `user_id`, `interest`, `created_at`, `updated_at`) VALUES
(1, 1, 'Development', '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'Development', '2024-01-27 04:19:43', '2024-01-27 04:19:43'),
(3, 3, 'Itaque nihil ea ipsu', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(4, 3, 'Qui et qui sed facer', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(5, 3, 'Expedita omnis simil', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(6, 4, 'Itaque nihil ea ipsu', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(7, 4, 'Qui et qui sed facer', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(8, 4, 'Expedita omnis simil', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(9, 5, 'Sit nesciunt id qui', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(11, 7, 'Laboris quisquam dol', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(12, 8, 'Voluptatem quo labo', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(13, 9, 'Deleniti aute ab dol', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(14, 9, 'Quia iste deleniti e', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(15, 9, 'Ea est ad aliquid do', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(16, 9, 'Odio quis aut aut de', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(17, 9, 'Fugiat laudantium', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `employer_id` bigint UNSIGNED NOT NULL,
  `job_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_seats` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prefered_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `experice_required` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_id`, `category_id`, `employer_id`, `job_type`, `title`, `job_description`, `no_of_seats`, `salary`, `prefered_gender`, `experice_required`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 2, 'full-time', 'Animal Control Worker', 'Possimus quos maiores error quia beatae. Labore iste animi tempore in. Et dolores laborum deserunt sapiente. Perferendis consectetur explicabo perspiciatis tempora aut error.', '5', '48699', 'Male', 'qui', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(2, 1, 1, 2, 'full-time', 'Geological Data Technician', 'Eum aliquid sed magnam enim assumenda. Tenetur nisi quia laboriosam. Quas voluptas quia autem et.', '10', '66716', 'Male', 'dolores', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(3, 1, 1, 2, 'full-time', 'Office and Administrative Support Worker', 'Maxime voluptate temporibus est temporibus. Et pariatur est beatae voluptatum quae dolor amet. Libero quasi illum consequatur fugiat molestiae consequatur. Harum soluta quisquam dolores tempora alias voluptates.', '6', '35977', 'Any', 'reiciendis', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(4, 1, 2, 2, 'half-time', 'Public Health Social Worker', 'Nam corrupti tempore dolorum fugiat eum quasi quaerat qui. Aut tenetur quam voluptas. Sit et consequatur voluptas sequi.', '4', '55026', 'Female', 'et', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(5, 1, 2, 2, 'half-time', 'Art Director', 'Voluptas in inventore iure cupiditate. Non expedita in quaerat velit animi et nobis. Sit culpa aspernatur aut et. Magni id laborum aut aspernatur doloremque necessitatibus.', '9', '61969', 'Male', 'consequatur', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(6, 1, 2, 2, 'part-time', 'Printing Press Machine Operator', 'Ratione magnam debitis est consequuntur. Rerum iusto nisi atque. Omnis quia dolor enim asperiores sit.', '9', '17996', 'Any', 'sit', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(7, 1, 2, 2, 'half-time', 'Utility Meter Reader', 'Eos inventore harum in molestiae. Qui est sit impedit quam quibusdam.', '2', '34910', 'Any', 'eos', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(8, 1, 2, 2, 'part-time', 'Order Filler', 'Deserunt harum dolorem magnam quis quia pariatur. Aliquam iste facilis corrupti harum. Et odit nemo laboriosam nam omnis reiciendis. Nihil aut suscipit non labore rem ullam voluptatibus ratione.', '6', '77141', 'Any', 'aliquam', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(9, 1, 2, 2, 'part-time', 'Computer', 'Doloremque omnis qui laudantium voluptas quis in. Quidem laboriosam et sed. Deserunt exercitationem nam necessitatibus tenetur molestias repudiandae. Omnis et beatae enim ipsam. Aut fuga qui impedit doloribus velit aut.', '10', '784', 'Male', 'corrupti', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(10, 1, 2, 2, 'full-time', 'Psychiatrist', 'Eligendi ut voluptate iste. Qui atque ut maiores. Autem quis similique saepe perferendis. Autem ipsa quis eos laboriosam perspiciatis.', '10', '69942', 'Male', 'veniam', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(11, 1, 3, 2, 'half-time', 'Electro-Mechanical Technician', 'Iste in ratione eum et quo perferendis repellat. Rem est velit molestiae ut. Et quis incidunt quia maiores voluptas quod. Modi quo maxime hic voluptas non non.', '2', '96430', 'Female', 'architecto', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(12, 1, 3, 2, 'part-time', 'Barber', 'Rerum optio doloremque et numquam. Praesentium nobis nesciunt libero quam officia qui nihil. Cumque magnam et corporis ad molestiae ducimus.', '9', '24947', 'Female', 'eos', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(13, 1, 3, 2, 'part-time', 'Physicist', 'Et ipsam nihil eos aut laborum sunt. Corrupti ut atque natus rem eum. Voluptas illo ut et architecto molestias. Iusto atque aliquam quis.', '5', '99574', 'Female', 'et', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(14, 1, 3, 2, 'part-time', 'Printing Machine Operator', 'Neque assumenda vitae sint atque incidunt est. Accusamus odio sequi doloribus non et. Rerum nemo qui natus.', '4', '50074', 'Female', 'non', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(15, 1, 3, 2, 'half-time', 'Chemical Equipment Controller', 'Accusamus magnam minus dolore. Blanditiis sit amet reiciendis excepturi voluptatum. Dolor maiores sed nesciunt alias maxime ducimus vitae.', '9', '32903', 'Any', 'at', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(16, 1, 3, 2, 'half-time', 'Rental Clerk', 'Labore qui aperiam eaque ipsam. Libero possimus aut dolores numquam. Quo eum magnam explicabo et sit et.', '5', '29146', 'Female', 'id', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(17, 1, 3, 2, 'part-time', 'Highway Maintenance Worker', 'Qui et vel est non. Dolorum architecto quos itaque voluptates ducimus. Ut quam recusandae voluptates.', '6', '67409', 'Male', 'sed', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(18, 1, 4, 2, 'part-time', 'Distribution Manager', 'Fugit rem et laboriosam laborum laboriosam repellat est. A rem et omnis molestias temporibus aut. Totam ad eum reiciendis dolor magnam aut error similique.', '10', '11658', 'Female', 'quo', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(19, 1, 4, 2, 'part-time', 'Plant Scientist', 'Voluptatem illum aliquam maxime nobis. Hic quo officia sed. Voluptatem assumenda dolorum voluptatum est quidem eum minus culpa. Saepe exercitationem tempora dolorem amet odit occaecati.', '2', '50264', 'Female', 'occaecati', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(20, 1, 4, 2, 'full-time', 'Telecommunications Facility Examiner', 'Voluptas doloremque ipsa ratione dignissimos est. Voluptatibus nesciunt rerum sint illo rerum. Ipsa odio rerum id sunt magni ut aut. Voluptas odit quasi quisquam exercitationem modi vel placeat voluptatem.', '5', '94434', 'Female', 'dolorum', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(21, 1, 4, 2, 'part-time', 'Letterpress Setters Operator', 'Est ad optio illo incidunt eaque quia ea. Est dolor odio quia nulla cumque ipsum. Tenetur quam earum natus vitae ut consequatur.', '7', '9247', 'Any', 'veritatis', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(22, 1, 5, 2, 'full-time', 'Mechanical Drafter', 'Et molestias voluptate tempora quae sequi. Omnis voluptas ab eos dolores esse.', '2', '8051', 'Male', 'voluptate', '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(23, 1, 5, 2, 'part-time', 'Cartographer', 'Est libero voluptatem exercitationem laboriosam alias quasi vel ut. Et neque repellat ut beatae. Dolorem dolorum at voluptatem. Molestiae cum quia atque.', '8', '50666', 'Any', 'quos', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(24, 1, 5, 2, 'half-time', 'Technical Writer', 'Quasi qui provident quia laboriosam sapiente. Ab quis nisi maxime maiores. Ipsam est harum consequatur est. Quo sed sed unde minima fugit sed.', '4', '51447', 'Male', 'et', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(25, 1, 5, 2, 'full-time', 'Order Filler', 'Repellendus voluptatem autem asperiores magni quia. Aspernatur eum voluptatem cumque aut. Dolores repudiandae dicta provident provident dolore veritatis. Et minus sint explicabo vel quod odio.', '9', '5522', 'Female', 'exercitationem', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(26, 1, 6, 2, 'full-time', 'Receptionist and Information Clerk', 'Rerum aut enim consequatur enim quibusdam id quia. Reprehenderit non doloremque nulla consequatur blanditiis laboriosam. Nemo veritatis voluptas vero repellat. Harum sint nostrum sit saepe repudiandae.', '7', '53543', 'Male', 'vel', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(27, 1, 6, 2, 'full-time', 'User Experience Researcher', 'Impedit aliquam nam qui voluptatum aut autem nesciunt. Distinctio placeat ipsum qui molestias accusantium voluptas suscipit voluptas. Accusantium nam beatae commodi et repellat harum. Rerum et voluptate aut dolores ad id rerum quo.', '4', '48164', 'Male', 'incidunt', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(28, 1, 6, 2, 'part-time', 'Cartographer', 'Dolor vel modi facilis sed itaque vel ut. Doloremque dolores ut ut eaque est. Eum dolorem ullam omnis sed voluptas.', '10', '83100', 'Any', 'eos', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(29, 1, 7, 2, 'half-time', 'Stonemason', 'Praesentium quo deserunt et voluptatem aut. Et dignissimos maiores sequi delectus. Sapiente incidunt eum voluptatem architecto rerum et nemo.', '4', '11827', 'Any', 'delectus', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(30, 1, 7, 2, 'part-time', 'Fabric Pressers', 'Eum aut quia et asperiores est. Ut accusamus unde aut ratione. Sint sed eaque dolorem rerum.', '5', '45766', 'Any', 'quo', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(31, 1, 7, 2, 'part-time', 'Recordkeeping Clerk', 'Dolor aut voluptate rerum perferendis modi totam. Ad id laborum eligendi molestiae praesentium exercitationem. Sequi illo incidunt cum unde eius soluta cupiditate. Nisi eligendi eum culpa nihil quidem.', '3', '17826', 'Any', 'officiis', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(32, 1, 7, 2, 'full-time', 'Proofreaders and Copy Marker', 'Minus dolore eum ut sint quia aut vitae est. Corporis quo quas earum nostrum quo perspiciatis. Velit distinctio voluptatem illo et.', '1', '41165', 'Male', 'optio', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(33, 1, 7, 2, 'full-time', 'Elevator Installer and Repairer', 'Nihil ut vero vitae id fugit ut error. Ipsa odio expedita blanditiis laborum quo quos consequatur. Pariatur non ipsa facilis cupiditate veniam vel placeat. Ratione aliquid saepe dolores quo ab totam voluptatem.', '2', '84419', 'Female', 'quibusdam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(34, 1, 8, 2, 'half-time', 'Garment', 'Totam veniam est nisi qui sed dolor. Dolor omnis est velit voluptatem. Quisquam aut ut sed unde laudantium ut. Voluptas qui totam eveniet sed aspernatur eum iste.', '9', '34400', 'Female', 'cupiditate', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(35, 1, 8, 2, 'half-time', 'Animal Breeder', 'Reiciendis occaecati ut voluptatibus tenetur saepe. Nam excepturi autem perferendis ea eius illum. Temporibus nemo odio ea architecto fuga. Ex incidunt consequuntur ut fugiat similique voluptatum expedita. Est numquam voluptates omnis eos dignissimos ipsa minima.', '8', '49293', 'Any', 'sit', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(36, 1, 8, 2, 'full-time', 'Stationary Engineer OR Boiler Operator', 'Doloremque fugit voluptatem est. Voluptatem similique ea soluta vitae dolorem. Qui animi iusto et aut omnis.', '10', '27933', 'Male', 'dolorum', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(37, 1, 8, 2, 'full-time', 'Dietetic Technician', 'Quia quo excepturi repellat animi. Id officia dolorum saepe eaque hic sit expedita. Debitis est quia et qui. Qui sed tempore nemo doloribus molestiae quo.', '8', '53335', 'Any', 'repellendus', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(38, 1, 8, 2, 'part-time', 'Computer Security Specialist', 'Inventore qui velit ea culpa quo suscipit nesciunt ea. Qui omnis eum aut aut et quisquam. Illo excepturi nesciunt dolore veniam quia perferendis neque.', '1', '67199', 'Male', 'quia', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(39, 1, 8, 2, 'part-time', 'Park Naturalist', 'Quo itaque earum aut laborum sequi. Dolores maxime consequuntur magni minus ea commodi.', '9', '84929', 'Male', 'unde', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(40, 1, 8, 2, 'half-time', 'Plating Operator', 'Non voluptatem fugit suscipit laborum. Similique quia sit dolore cupiditate voluptatem illum. Culpa dolorem velit quis consequatur accusamus quod. Consequatur temporibus minus consequuntur quisquam quia. Quas perferendis voluptas culpa porro necessitatibus adipisci.', '9', '20886', 'Male', 'qui', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(41, 1, 8, 2, 'full-time', 'Distribution Manager', 'Nemo et consequatur est autem harum dolores quam. Atque ut qui laboriosam ut vel autem. Nam animi vero porro est voluptatibus ea. Numquam sed et impedit repellendus ut ut.', '5', '67912', 'Female', 'aut', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(42, 1, 9, 2, 'half-time', 'Milling Machine Operator', 'Et in asperiores explicabo alias. Distinctio fugiat mollitia et provident et eius. Odio facere tenetur qui dolor maiores corporis. Qui blanditiis et temporibus itaque cum placeat quos nam. Minus quae officiis quia et odit sapiente libero.', '2', '17896', 'Female', 'tempora', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(43, 1, 9, 2, 'half-time', 'Sawing Machine Tool Setter', 'Quae dolorem debitis suscipit dolor id. Nostrum numquam aliquid qui ut doloremque modi sed. Ab rerum eos veniam tempora quia et nisi. Minima pariatur cumque architecto sapiente.', '9', '32666', 'Any', 'ullam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(44, 1, 9, 2, 'full-time', 'Electrical Sales Representative', 'Reprehenderit cupiditate dicta nihil officiis maxime voluptas in et. Maxime sequi corrupti dolorem est asperiores. Qui dolor laboriosam quod molestias sed quia excepturi. Velit aut quod nisi sit atque quam.', '4', '82217', 'Any', 'id', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(45, 1, 10, 2, 'part-time', 'Financial Services Sales Agent', 'Saepe facere aut id est. Numquam alias et deserunt quas rerum odit et. Ea aut quos qui odio.', '1', '5147', 'Any', 'a', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(46, 1, 10, 2, 'full-time', 'Court Clerk', 'Non aliquid id consequatur natus sit voluptatem id. Voluptas cupiditate animi sit et ipsam possimus nesciunt. Consectetur eligendi nisi ea in voluptatem temporibus ipsam.', '1', '39145', 'Male', 'sed', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(47, 1, 10, 2, 'half-time', 'Order Filler', 'Cum dolore provident et quia vel soluta. Optio beatae quam et non quod accusantium est.', '2', '73430', 'Female', 'voluptatem', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(48, 1, 10, 2, 'half-time', 'Librarian', 'Reprehenderit blanditiis quidem omnis facere quasi. Ad aut aliquam ex iusto. Exercitationem unde blanditiis cupiditate vel est occaecati dicta.', '9', '48268', 'Any', 'tempore', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(49, 1, 10, 2, 'full-time', 'Private Sector Executive', 'Reprehenderit dolorem asperiores ut et. Ducimus neque omnis non voluptatem dolorem. Incidunt tempora laudantium excepturi iure consequatur atque veritatis.', '3', '24764', 'Female', 'voluptatem', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(50, 1, 10, 2, 'half-time', 'Sales Representative', 'Molestiae ut omnis officia quod architecto qui. Numquam ex fuga et facilis et.', '3', '66038', 'Male', 'et', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(51, 1, 11, 2, 'part-time', 'Mail Clerk', 'Aut voluptas occaecati est enim deleniti rerum. Deleniti facere consequatur officiis et. Quis adipisci id non beatae sint blanditiis. Et omnis minima deleniti. Nihil ad aliquam sed vel nisi nam itaque aspernatur.', '6', '48892', 'Male', 'numquam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(52, 1, 11, 2, 'half-time', 'Natural Sciences Manager', 'Sit consequatur vel assumenda et ad cupiditate. Esse doloremque ad excepturi.', '3', '98939', 'Any', 'magnam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(53, 1, 11, 2, 'full-time', 'Continuous Mining Machine Operator', 'Quam consequatur placeat delectus consequatur quia magni nam. Est consequatur sed blanditiis saepe sed molestiae exercitationem. Sit eos nostrum nam eligendi.', '6', '35579', 'Any', 'dignissimos', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(54, 1, 12, 2, 'full-time', 'Inspector', 'Veniam quaerat ut dolorum at corrupti voluptatem laboriosam. Est neque cupiditate sint incidunt. Aut sint illum assumenda voluptas accusamus. Fugit qui et eius voluptatum.', '3', '30035', 'Any', 'voluptatem', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(55, 1, 12, 2, 'full-time', 'Excavating Machine Operator', 'Quasi dolore occaecati et ratione dolorum velit voluptates. Voluptas hic doloribus hic beatae. Accusamus ut deserunt repellat ex id quasi.', '1', '75376', 'Female', 'corrupti', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(56, 1, 12, 2, 'full-time', 'Crushing Grinding Machine Operator', 'Sed commodi repudiandae vero et illum dolor commodi. Ut blanditiis dignissimos illum quo amet tempora. Non cupiditate voluptas natus doloremque consequatur necessitatibus nostrum.', '9', '19564', 'Female', 'at', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(57, 1, 12, 2, 'part-time', 'Jeweler', 'Iure accusamus delectus placeat mollitia aliquam distinctio eligendi libero. Non unde voluptatem quis vitae repellat at vitae. Nihil distinctio quo fugit eligendi officiis repellendus excepturi. Numquam vel rerum officia quia ea laborum et.', '6', '5426', 'Male', 'voluptatem', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(58, 1, 12, 2, 'full-time', 'Materials Inspector', 'Magni deserunt sed incidunt consequatur in dolores cupiditate. Amet dolorem beatae sed est iste vitae recusandae qui. Qui quo similique voluptates illo est. Eligendi maiores qui vero qui ut eum qui.', '10', '88515', 'Any', 'et', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(59, 1, 12, 2, 'half-time', 'Police Detective', 'Facere non nulla minus voluptatem quae omnis dolores. Ut sint ullam officiis. Labore reprehenderit deserunt nemo fuga autem odio ipsam. Eligendi rerum id et a harum dicta.', '3', '89228', 'Female', 'distinctio', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(60, 1, 13, 2, 'part-time', 'Gluing Machine Operator', 'Non quae quo expedita quisquam. Voluptatem aperiam dolores similique sint porro rem voluptas. Molestiae et quae nihil laborum. Optio enim nemo harum ipsam et et assumenda.', '5', '86071', 'Any', 'et', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(61, 1, 13, 2, 'part-time', 'Graphic Designer', 'Omnis et animi dolor quos et tempora repellendus dolores. Consequatur fuga voluptates quo molestiae et dicta rerum sed. Repellendus harum nam consequuntur ipsum culpa iure. Illo laboriosam aspernatur saepe.', '9', '73768', 'Female', 'est', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(62, 1, 13, 2, 'full-time', 'Chef', 'Qui illum vitae asperiores. Vero dolorem porro qui aut. Fuga pariatur dolores voluptatem qui exercitationem ea.', '5', '24699', 'Female', 'quia', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(63, 1, 13, 2, 'full-time', 'Continuous Mining Machine Operator', 'Neque nemo non iure voluptas eum. Quibusdam explicabo quis reprehenderit molestiae qui ex. A placeat eveniet architecto. Quisquam possimus doloremque velit illum porro.', '2', '59025', 'Any', 'iste', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(64, 1, 13, 2, 'part-time', 'Timing Device Assemblers', 'Voluptas veniam expedita nulla tenetur temporibus totam. Consequuntur est officiis velit magni. Incidunt omnis laborum amet odio.', '9', '69319', 'Male', 'nam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(65, 1, 14, 2, 'full-time', 'Fishing OR Forestry Supervisor', 'Laborum reprehenderit enim a inventore. Optio cupiditate est dolorem in. Mollitia nesciunt dolores quibusdam eos voluptas. Rerum esse molestias et ut.', '10', '58730', 'Female', 'eveniet', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(66, 1, 14, 2, 'half-time', 'Claims Adjuster', 'Et et sint quasi et placeat non vel. Magnam deserunt adipisci illo quo sint doloribus ea nostrum. Dolorum dolores unde expedita ut autem.', '1', '40193', 'Male', 'id', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(67, 1, 14, 2, 'half-time', 'Radio Operator', 'Et quo maiores voluptatem ea maiores quod. Ex possimus atque itaque quod. Molestiae inventore molestiae fuga quia provident.', '7', '92577', 'Female', 'veniam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(68, 1, 14, 2, 'part-time', 'Pipefitter', 'Itaque quis error mollitia quia id aut odio. In animi enim vel nam. Enim veritatis aut ab.', '1', '42772', 'Any', 'aperiam', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(69, 1, 14, 2, 'part-time', 'Engraver', 'Ipsam ducimus necessitatibus enim natus et corrupti. Tenetur temporibus minima autem minima officiis aspernatur soluta. Non vitae asperiores fuga dolor nesciunt sit est.', '10', '83523', 'Male', 'et', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(70, 1, 15, 2, 'full-time', 'Council', 'Sint qui blanditiis ut vero magni quidem. Quis quisquam temporibus qui rerum. Voluptatem id illo voluptas animi. Mollitia cum vitae praesentium.', '6', '57498', 'Female', 'commodi', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(71, 1, 15, 2, 'half-time', 'Geological Data Technician', 'Fugiat omnis illo maiores dolorem modi et iste autem. Rem porro voluptatum itaque rerum natus incidunt. Quo rerum qui illo perspiciatis et. Commodi quo harum voluptatem eaque in officia animi. Eveniet libero aspernatur quia libero.', '4', '25240', 'Male', 'culpa', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(72, 1, 15, 2, 'full-time', 'Fishing OR Forestry Supervisor', 'Doloremque quia omnis accusantium nulla. Vitae est dolorum necessitatibus nostrum. Rerum non voluptas reiciendis perspiciatis.', '5', '45033', 'Any', 'eligendi', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(73, 1, 15, 2, 'half-time', 'Molding and Casting Worker', 'Eligendi doloremque optio ratione aperiam ea dolor sint. Sint enim quis recusandae iure eveniet. Tenetur ea totam aut in voluptates soluta earum. Occaecati omnis blanditiis tempore hic dignissimos numquam nisi.', '7', '53175', 'Female', 'nisi', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(74, 1, 15, 2, 'part-time', 'Brattice Builder', 'Error voluptas facere laudantium est pariatur et ullam modi. Sed blanditiis quis perspiciatis mollitia ut qui et. Voluptate earum magni quo non quam consequatur. Dolorem et aliquam qui.', '9', '42358', 'Female', 'labore', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(75, 1, 15, 2, 'part-time', 'Food Preparation and Serving Worker', 'Alias nihil quia amet et quae aut nisi unde. Eum autem quia nobis ullam enim quae corrupti. Natus et atque exercitationem nihil et est. Quia aut repellendus ipsam et. In laudantium molestias facere dignissimos esse in facilis.', '5', '24312', 'Any', 'aut', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(76, 1, 15, 2, 'part-time', 'Multi-Media Artist', 'Ratione unde fuga repellat alias officiis numquam sunt. Adipisci qui voluptas non cum. Ea aut deleniti natus magni ipsum blanditiis maiores et. Et dolor tenetur dolor dolorem repellendus quibusdam.', '7', '3887', 'Female', 'maxime', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(77, 1, 15, 2, 'full-time', 'Communication Equipment Repairer', 'Nam veniam adipisci qui quaerat aliquid consequatur. Aut sed qui rerum vitae voluptas sed molestias cum. Atque voluptatem enim dolorem et. Porro sapiente voluptate sunt iste quam quibusdam et.', '6', '39128', 'Female', 'cumque', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(78, 1, 16, 2, 'part-time', 'Bartender Helper', 'Ut iure quos omnis qui ut. Voluptas id sed voluptatum voluptatem omnis est. Ea dolore beatae et maxime corrupti. Molestiae earum qui aliquid nam.', '5', '68067', 'Female', 'omnis', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(79, 1, 16, 2, 'full-time', 'Welder-Fitter', 'Optio quis voluptatibus praesentium nam dicta. Molestiae ipsum illo dignissimos aut tempora voluptatem accusamus. Provident deserunt hic aut magni aut cumque. Omnis perferendis animi nam ullam sequi.', '7', '11862', 'Female', 'cupiditate', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(80, 1, 16, 2, 'full-time', 'Directory Assistance Operator', 'Aliquid nulla facere pariatur. Dolores doloribus tempore voluptas id asperiores. Delectus adipisci dolorum facilis a dolores voluptas.', '4', '87622', 'Any', 'ut', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(81, 1, 16, 2, 'full-time', 'Human Resources Manager', 'Veniam voluptatem voluptatem quod ipsam est soluta est. Eveniet nemo ut nihil similique expedita. Dolore autem laudantium tempore. Sunt quidem incidunt necessitatibus doloremque quaerat assumenda ut.', '10', '56325', 'Any', 'dolor', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(82, 1, 16, 2, 'full-time', 'Financial Services Sales Agent', 'Et officiis eaque rerum neque ea aut similique libero. Temporibus odio eos non. Maiores porro velit voluptas consequatur et voluptatem in. Est nihil distinctio ad id velit tempore.', '3', '23448', 'Any', 'ea', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(83, 1, 16, 2, 'full-time', 'Forging Machine Setter', 'Sunt unde aliquam qui natus facere ducimus nihil. Sed at dolorum eos.', '4', '76056', 'Female', 'temporibus', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(84, 1, 16, 2, 'half-time', 'School Bus Driver', 'Nisi perspiciatis temporibus neque esse vitae voluptates eos. Voluptatem itaque rem culpa placeat aut minus consequatur iure. Libero fugiat minus enim voluptas veritatis occaecati eaque. Nihil reprehenderit amet atque consequatur.', '10', '24524', 'Male', 'ut', '2024-01-26 16:06:33', '2024-01-26 16:06:33'),
(85, 1, 1, 2, 'Part Time', 'wordpress dev', 'adofusaifoasbvu9', '1', '1000000', 'male', 'no', '2024-01-27 01:57:06', '2024-01-27 01:57:06'),
(86, 1, 3, 2, 'Permanent', 'Animator', 'Constructred Video editor render video editing 3d renders', '2', '300000', 'male', '5 years', '2024-01-27 03:34:12', '2024-01-27 03:34:12'),
(87, 2, 2, 10, 'Part Time', 'Aspernatur est omni', 'Eaque sunt voluptas', 'Facere cum voluptati', 'Vel eaque cillum fac', 'Voluptatum non et ve', 'Nisi adipisci accusa', '2024-03-10 12:31:33', '2024-03-10 12:31:33');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `language` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language_level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `user_id`, `language`, `language_level`, `created_at`, `updated_at`) VALUES
(1, 1, 'ur', NULL, '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'ur', NULL, '2024-01-27 04:19:43', '2024-01-27 04:19:43'),
(3, 3, 'nb', 'Basic', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(4, 3, 'nn', 'Basic', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(5, 3, 'af', 'Native', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(6, 4, 'nb', 'Basic', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(7, 4, 'nn', 'Basic', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(8, 4, 'af', 'Native', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(9, 5, 'be', 'Basic', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(11, 7, 'zh-TW', 'Native', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(12, 8, 'cs', 'Fluent', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(13, 9, 'hy', 'Native', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(14, 9, 'rm', 'Fluent', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(15, 9, 'th', 'Fluent', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(16, 9, 'hr', 'Fluent', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_30_205207_create_personal_information_table', 1),
(6, '2022_12_30_205230_create_contact_information_table', 1),
(7, '2022_12_30_205253_create_education_table', 1),
(8, '2022_12_30_205309_create_experiences_table', 1),
(9, '2022_12_30_205341_create_projects_table', 1),
(10, '2022_12_30_205359_create_languages_table', 1),
(11, '2022_12_30_205415_create_skills_table', 1),
(12, '2022_12_30_205433_create_interests_table', 1),
(13, '2024_01_21_040204_create_categories_table', 1),
(14, '2024_01_21_040214_create_companies_table', 1),
(15, '2024_01_21_040227_create_jobs_table', 1),
(16, '2024_01_21_041614_create_applications_table', 1),
(17, '2024_01_21_042344_create_permission_tables', 1),
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(20, '2019_08_19_000000_create_failed_jobs_table', 1),
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2022_12_30_205207_create_personal_information_table', 1),
(23, '2022_12_30_205230_create_contact_information_table', 1),
(24, '2022_12_30_205253_create_education_table', 1),
(25, '2022_12_30_205309_create_experiences_table', 1),
(26, '2022_12_30_205341_create_projects_table', 1),
(27, '2022_12_30_205359_create_languages_table', 1),
(28, '2022_12_30_205415_create_skills_table', 1),
(29, '2022_12_30_205433_create_interests_table', 1),
(30, '2024_01_21_040204_create_categories_table', 1),
(31, '2024_01_21_040214_create_companies_table', 1),
(32, '2024_01_21_040227_create_jobs_table', 1),
(33, '2024_01_21_041614_create_applications_table', 1),
(34, '2024_01_21_042344_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 8),
(3, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 12),
(3, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(3, 'App\\Models\\User', 15);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `id` bigint UNSIGNED NOT NULL,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`id`, `first_name`, `last_name`, `image_path`, `profile_title`, `about_me`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Asim', 'Sheikh', '', 'Web Developer', 'I am quick learner', '2024-01-27 02:07:21', '2024-01-27 02:07:21', NULL),
(2, 'Rafay', 'Khalid', 'box.png', 'Graphic Designer', 'Graphic Designer', '2024-01-27 04:19:43', '2024-01-27 09:21:35', NULL),
(3, 'Sierra', 'Patterson', '', 'Dolor alias ad quasi', 'Quia eveniet harum', '2024-03-08 13:19:15', '2024-03-08 13:19:15', NULL),
(4, 'Sierra', 'Patterson', '', 'Dolor alias ad quasi', 'Quia eveniet harum', '2024-03-08 13:19:16', '2024-03-08 13:19:16', NULL),
(5, 'Ingrid', 'Talley', 'fe2310145936049.62a78a0c7554a.png', 'Quis sed odit labore', 'Omnis ipsa vitae si', '2024-03-10 12:17:56', '2024-03-10 12:17:56', NULL),
(7, 'Xanthus', 'Garrett', '', 'Quia corrupti susci', 'Qui modi doloribus f', '2024-03-10 12:42:36', '2024-03-10 12:42:36', 11),
(8, 'Julian', 'Hoover', '', 'Laboris omnis ad eu', 'Placeat et sunt qu', '2024-03-11 13:08:07', '2024-03-11 13:08:07', 12),
(9, 'Vernon', 'Sanford', '', 'Duis pariatur Perfe', 'Est voluptatum expli', '2024-03-12 10:47:47', '2024-03-12 10:47:47', 13);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `project_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `project_title`, `project_description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Website', 'Creative Websites', '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'Website', 'developer', '2024-01-27 04:19:43', '2024-01-27 09:21:35'),
(3, 3, 'Ipsa eos recusandae', 'Repellendus Quia qu', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(4, 3, 'Blanditiis ducimus', 'Temporibus omnis nos', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(5, 3, 'Dolorum ullam molest', 'Laudantium ut conse', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(6, 4, 'Ipsa eos recusandae', 'Repellendus Quia qu', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(7, 4, 'Blanditiis ducimus', 'Temporibus omnis nos', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(8, 4, 'Dolorum ullam molest', 'Laudantium ut conse', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(9, 5, 'Dicta pariatur Adip', 'Aute optio incidunt', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(11, 7, 'Quia et et incidunt', 'Rem dolorem aliquid', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(12, 8, 'In cupiditate rerum', 'Sint nostrum recusan', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(13, 9, 'Elit est optio mod', 'Autem tempore volup', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(14, 9, 'Sunt quasi quasi rep', 'Praesentium amet as', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(15, 9, 'Quis enim soluta ips', 'Adipisci vero dolore', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(16, 9, 'Sunt voluptatem erro', 'Eu labore mollitia e', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2024-01-26 16:06:31', '2024-01-26 16:06:31'),
(2, 'employer', 'web', '2024-01-26 16:06:31', '2024-01-26 16:06:31'),
(3, 'user', 'web', '2024-01-26 16:06:31', '2024-01-26 16:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `skill_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skill_percentage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `skill_name`, `skill_percentage`, `created_at`, `updated_at`) VALUES
(1, 1, 'Php html Css', '60', '2024-01-27 02:07:21', '2024-01-27 02:07:21'),
(2, 2, 'Php html Css', '60', '2024-01-27 04:19:43', '2024-01-27 04:19:43'),
(3, 2, 'Wordpress', NULL, '2024-01-27 09:21:35', '2024-01-27 09:21:35'),
(4, 3, 'Shea Aguilar', '70', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(5, 3, 'Daria Waters', '30', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(6, 3, 'Leslie Dickerson', '20', '2024-03-08 13:19:15', '2024-03-08 13:19:15'),
(7, 4, 'Shea Aguilar', '70', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(8, 4, 'Daria Waters', '30', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(9, 4, 'Leslie Dickerson', '20', '2024-03-08 13:19:16', '2024-03-08 13:19:16'),
(10, 5, 'Marny Hudson', '70', '2024-03-10 12:17:56', '2024-03-10 12:17:56'),
(12, 7, 'Ramona Hicks', '80', '2024-03-10 12:42:36', '2024-03-10 12:42:36'),
(13, 8, 'Quinn Aguirre', '70', '2024-03-11 13:08:07', '2024-03-11 13:08:07'),
(14, 9, 'Hillary Chapman', '70', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(15, 9, 'Lionel Berger', '90', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(16, 9, 'Hollee Gonzales', '30', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(17, 9, 'Ingrid Holder', '10', '2024-03-12 10:47:47', '2024-03-12 10:47:47'),
(18, 9, 'Rooney Emerson', '10', '2024-03-12 10:47:47', '2024-03-12 10:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `place_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `martial_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_degree` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ADDRESS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `gender`, `date_of_birth`, `place_of_birth`, `phone_of_birth`, `martial_status`, `username`, `last_degree`, `ADDRESS`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$wY4Jyu4u0xkhtZy4SXAv/u37sQPH5PBDUOXhokqCSPHYNTvp9ZuM.', NULL, '2024-03-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 16:06:31', '2024-03-10 12:38:08'),
(2, 'Employer User', 'employer@example.com', NULL, '$2y$12$Yx3EM0zfxoPABHsxLlZezuX596vsl8TL6h8Ol01O.8daTL7LCG2AW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(3, 'Regular User', 'user@example.com', NULL, '$2y$12$V8fwEc1sxAOnlREco0o6weHAs1RFz9aKGXa9kjE7x.GO.HIKAgcRi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-01-26 16:06:32', '2024-01-26 16:06:32'),
(4, 'Asim s', 'asim@gmail.com', NULL, '$2y$12$yrXxJi3azPHcfZefd02.tub4BV60zSf04PHgUX9djtfnEoh/qI.pG', NULL, '2000-02-02', 'Karachi', '03002334072', 'Single', 'asim@gmail.com', 'Undergraduate', 'Karachi', NULL, NULL, '2024-01-27 01:58:29', '2024-01-27 02:11:46'),
(5, 'Misbah', 'misbah@gmail.com', NULL, '$2y$12$w6idGvRa/r7DtQYzabybf.8JaPuMWjFmmACxIBw8HUU1OkQfFXXxq', NULL, '2000-02-02', 'Karachi Pakistan', '020202020', 'Single', 'asim@gmail.com', 'Undergraduate', 'karach', NULL, NULL, '2024-01-27 03:31:28', '2024-01-27 03:31:28'),
(6, 'asim@gmail.com', 'imran@gmail.com', NULL, '$2y$12$b1aV2U996SmunHy6w5jB2.HoYaSkZXKPcl7IXHUWC5bat1dYOpqri', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 11:39:12', '2024-03-08 11:39:12'),
(7, 'Dominic Forbes', 'dysexezyn@mailinator.com', NULL, '$2y$12$cln6PC0gGraIlx4B8v1EBulXQGxSwwZhUbk4PfrGWCMwZuxwpDlw.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-08 12:53:50', '2024-03-08 12:53:50'),
(8, 'Christen Haney', 'kygegehore@mailinator.com', NULL, '$2y$12$g7nVnhHFHHOsi/H0b00JEOSAn55KMYuMK3DlUBMvIleKRaO/ZujuK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-10 12:07:21', '2024-03-10 12:07:21'),
(9, 'Melyssa Logan', 'piha@mailinator.com', NULL, '$2y$12$.aFJhSh3Y1DSDv00sZGcN.htzIEVFvwp7vMPBiBS4HXtEqk9l1l8G', 'Female', '1975-06-27', 'Et suscipit proident', '+1 (592) 774-4374', 'Married', 'cuhavuq', 'Beatae ea quis labor', 'Et suscipit proident', NULL, NULL, '2024-03-10 12:24:59', '2024-03-10 12:30:40'),
(10, 'Oliver Harris', 'saloweqew@mailinator.com', NULL, '$2y$12$k6QOG0q5rZfQamByjt4UDOSFty2q2UuCgkxfV0hr3cX5tElyUh9zC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-10 12:31:14', '2024-03-10 12:31:14'),
(11, 'Vaughan Craft', 'bycuhi@mailinator.com', NULL, '$2y$12$zMwfhxP71Vnt4jI4gORUG.A.RCdjMrrNWqmqwQW5EbmaCSFjnPfnu', 'Male', '2001-11-18', 'wahax', 'cutytefo', 'Married', NULL, 'byzoxelyly', 'lopepozogy', NULL, NULL, '2024-03-10 12:38:30', '2024-03-10 12:38:45'),
(12, 'Tara Navarro', 'pykoxepaq@mailinator.com', NULL, '$2y$12$1kR9txn.QGj8.mPnW0IBz.jSppuG5XPIOVxcKLsl44xY4k2CqsYYe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-11 13:06:50', '2024-03-11 13:06:50'),
(13, 'Quamar Wiley', 'begurusu@mailinator.com', NULL, '$2y$12$U0VZwp/KIkK6jz0hh5kpz.4Mww2WOqEGLt5oBGNgA5NNGC2IQs4Ti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-12 10:46:43', '2024-03-12 10:46:43'),
(14, 'Indus Hospital', 'indus@gmail.com', NULL, '$2y$12$CGsR.8W18mT4GMPAc5OJnOsGxrHLuSytA/oM1b.QPPkVSV5G2gIaK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-15 13:52:31', '2024-03-15 13:52:31'),
(15, 'Muhammad Rafay', 'rafay@gmail.com', NULL, '$2y$12$DH8BCOd90NjHQltFVAE2euEf2P3sOO2XdnepU8xGbnO1.NlffvQPK', 'Male', '2000-05-05', 'Karachi', '03303003501', 'Married', 'M. Rafay', 'Bachelor\'s in Computer Science', 'Sa 63/2 Block 7 KAECHS Karachi City Sindh ,Pakistan\r\nZeenatabad Sector 19 A Gulzar E Hijri Scheme 33, Karachi City Sindh, Pakistan', NULL, NULL, '2024-03-15 17:01:57', '2024-03-15 17:01:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
