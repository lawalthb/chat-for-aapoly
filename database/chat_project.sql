-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 02:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `admin_type` int(1) NOT NULL DEFAULT 1,
  `date_join` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `email`, `password`, `status`, `admin_type`, `date_join`) VALUES
(1, 'lawal', 'Victor', 'lawalthb@gmail.com', '123456', 1, 1, '2022-09-16 21:22:10'),
(2, 'Admin', 'Lastname', 'lawis10@yahoo.com', '$2y$10$guVLERAEJGnT35dbfxld..i82QIdlmiE0T8MeA52vXgCVG0pVcytu', 1, 1, '2022-09-20 18:51:58'),
(3, 'ade', 'bisi', 'bise@gmail.com', '$2y$10$LmXt.J1kpk0VsQAi30itWeqxJ3Aa1Ip0lgwP/4K1/sXBjvOxrxghG', 1, 2, '2022-09-21 04:10:38'),
(4, 'Omotolani', 'Adeshina', 'motolani@yahoo.com', '$2y$10$eCJanFST.mLp3yO6Y5E.FOiHfN6syOhbYEBC68u5gZg5QmXLSgHCq', 1, 2, '2022-09-22 06:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `status`) VALUES
(1, 'Billing', 1),
(2, 'Bursary', 1),
(3, 'ICT', 1),
(4, 'Student Affairs', 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(150) NOT NULL,
  `answer` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `agent` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `status`, `agent`, `reg_date`) VALUES
(1, 'There are so many schools in the Nigeria, How do I decide which schools to apply to?', '<p><span style=\"font-size: 17.008px;\">Research your options and define your priorities. Contact the Education Nigeria advising center nearest you and browse college search engines online. Check to see if the schools you are considering are accredited</span><br></p>', 1, 2, '2022-09-21 20:21:39'),
(2, 'What’s the difference between a Polytechnic and a university?', '<p><span style=\"font-size: 17.008px;\">Polytechnic offer only undergraduate degrees while universities offer graduate degrees as well, but the terms are often used interchangeably.</span><br></p>', 1, 2, '2022-09-21 20:23:46'),
(3, 'What is the academic calendar for Polytechnic in the Nigeria?', '<p><span style=\"font-size: 17.008px;\">The academic year usually runs from August through May with breaks for holidays. Most universities use either the semester system (two terms), the quarter system (students attend three out of four total terms), or the trimester system (three terms)</span><br></p>', 1, 2, '2022-09-21 20:24:50'),
(4, 'What is the difference between \"Undergraduate\" and \"Graduate\" degrees?', '<p><span style=\"color: rgb(80, 82, 97); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Nimbus Sans L&quot;, sans-serif; font-size: 16px; background-color: rgb(241, 240, 237);\">Undergraduate programs follow high school and lead to an associate (two-year) degree or a bachelor (four-year) degree. Graduate programs follow a bachelor’s degree and lead to a master’s or doctoral degree</span><br></p>', 1, 2, '2022-09-21 20:27:54'),
(5, 'What are the different types of undergraduate degrees?', '<p><span style=\"color: rgb(80, 82, 97); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, &quot;Nimbus Sans L&quot;, sans-serif; font-size: 16px; background-color: rgb(241, 240, 237);\">Associate: a two-year program that either leads to a specific vocation or transitions to a bachelor program. Bachelor: a four or five-year program where students earn credits in a wide variety of courses.</span><br></p>', 1, 2, '2022-09-21 20:28:35');

-- --------------------------------------------------------

--
-- Table structure for table `inboxes`
--

CREATE TABLE `inboxes` (
  `id` int(11) NOT NULL,
  `last_sent_user_id` int(11) NOT NULL,
  `last_message_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `status`) VALUES
(1, 'Hausa', 1),
(2, 'Igbo', 1),
(3, 'Yoruba', 1),
(4, 'Fulfulde', 1),
(5, 'Kanuri', 1),
(6, 'Ijaw', 1),
(7, 'Pidgin', 1),
(8, 'Tiv', 1),
(9, 'Ibibio', 1),
(10, 'Edo', 1),
(11, 'English', 1);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `messages` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `deleted` int(11) NOT NULL DEFAULT 0,
  `seen` int(11) NOT NULL DEFAULT 0,
  `userfile` text DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `ip_address`, `messages`, `admin_id`, `status`, `deleted`, `seen`, `userfile`, `department_id`, `session_id`, `reg_date`) VALUES
(4, 1, '::1', 'can i chat with you?', 1, 1, 0, 0, NULL, 1, 1, '2022-09-17 09:04:02'),
(5, 2, '::1', 'my first qtn is u', 1, 1, 0, 0, NULL, 1, 2, '2022-09-17 09:04:02'),
(6, 3, '::1', 'i need u', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(8, 3, 'e111de62-5020-4dbb-9', 'i love u', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(9, 3, 'e111de62-5020-4dbb-9', 'i love u more', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(10, 3, 'e111de62-5020-4dbb-9', 'wait some munite', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(11, 3, 'e111de62-5020-4dbb-9', 'wait some munite333', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(12, 3, 'e111de62-5020-4dbb-9', 'wait some munite33355', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(13, 3, 'e111de62-5020-4dbb-9', 'i can not come today', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(14, 3, 'e111de62-5020-4dbb-9', 'i can not come today22', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(15, 3, 'e111de62-5020-4dbb-9', 'i love u why', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(16, 3, 'e111de62-5020-4dbb-9', 'i can not come today now now', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(17, 3, 'e111de62-5020-4dbb-9', 'i can not come today ok', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(18, 3, 'e111de62-5020-4dbb-9', 'i can not come today ok6', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(19, 3, 'e111de62-5020-4dbb-9', 'i can not come todayl', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(20, 3, 'e111de62-5020-4dbb-9', 'ww', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(21, 3, 'e111de62-5020-4dbb-9', 'i love u too', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(22, 3, 'e111de62-5020-4dbb-9', 'i can not come today555', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(23, 3, 'e111de62-5020-4dbb-9', 'i can not come today', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:04:02'),
(24, 3, 'e111de62-5020-4dbb-9', 'wait some munite33322', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 09:05:21'),
(25, 3, 'e111de62-5020-4dbb-9', 'wait some munite333 baby', 1, 1, 0, 0, NULL, 1, 3, '2022-09-17 10:28:31'),
(26, 3, 'e111de62-5020-4dbb-9', 'mama love u', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(27, 3, 'e111de62-5020-4dbb-9', 'mama love u 4 life', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(28, 3, 'e111de62-5020-4dbb-9', 'mama love u 4 life333333', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(29, 3, 'e111de62-5020-4dbb-9', 'mama love u 4 888life333333', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(30, 3, 'e111de62-5020-4dbb-9', 'mama love u 4 888life333333999', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(31, 3, 'e111de62-5020-4dbb-9', 'game over mama love u 4 888life333333999', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(32, 3, 'e111de62-5020-4dbb-9', 'wahala mama love u 4 888life333333999', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(33, 3, 'e111de62-5020-4dbb-9', 'new msg from db', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(34, 3, 'e111de62-5020-4dbb-9', 'new lawal send ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(35, 3, 'e111de62-5020-4dbb-9', 'lawa is here ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(36, 3, 'e111de62-5020-4dbb-9', 'jhghg fcc ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(37, 3, 'e111de62-5020-4dbb-9', 'fgfgf ggh hhfff jhh ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(38, 3, 'e111de62-5020-4dbb-9', 'dsds sdffdsf ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(39, 3, 'e111de62-5020-4dbb-9', 'bass ga ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(40, 3, 'e111de62-5020-4dbb-9', 'baby ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(41, 3, 'e111de62-5020-4dbb-9', 'hi lawal ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(42, 3, 'e111de62-5020-4dbb-9', 'love ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(43, 3, 'e111de62-5020-4dbb-9', 'dear ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(44, 3, 'e111de62-5020-4dbb-9', 'lawal ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(45, 3, 'e111de62-5020-4dbb-9', 'can i know you pls ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(46, 3, 'e111de62-5020-4dbb-9', 'wait ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(47, 3, 'e111de62-5020-4dbb-9', 'is not relaoding o ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(48, 3, 'e111de62-5020-4dbb-9', 'hi ', 1, 1, 0, 0, NULL, 1, 3, '2022-09-18 06:52:05'),
(49, 15, '::1', 'hi ', 1, 1, 0, 0, NULL, 1, 15, '0000-00-00 00:00:00'),
(50, 16, '::1', 'why ', 1, 1, 0, 0, NULL, 1, 16, '0000-00-00 00:00:00'),
(51, 17, '127.0.0.1', 'not good ', 1, 1, 0, 0, NULL, 1, 17, '0000-00-00 00:00:00'),
(52, 18, '::1', 'My Name is ernest ', 1, 1, 0, 0, NULL, 1, 18, '2022-09-20 17:26:28'),
(53, 18, '::1', 'Email is  lawalthb@gmail.com ', 1, 1, 0, 0, NULL, 1, 18, '2022-09-20 17:26:28'),
(54, 19, '::1', 'My Name is Run Around ', 1, 1, 0, 0, NULL, 1, 19, '2022-09-20 17:28:41'),
(55, 19, '::1', 'Email is  lawalthb@gmail.com ', 1, 1, 0, 0, NULL, 1, 19, '2022-09-20 17:28:41'),
(56, 19, '::1', 'I want to chat with  1 departement ', 1, 1, 0, 0, NULL, 1, 19, '2022-09-20 17:28:41'),
(57, 19, '::1', 'ok let go ', 1, 1, 0, 0, NULL, 1, 19, '0000-00-00 00:00:00'),
(58, 19, '::1', 'do you know me ', 1, 1, 0, 0, NULL, 1, 19, '0000-00-00 00:00:00'),
(59, 19, '::1', 'dadsa ', 1, 1, 0, 0, NULL, 1, 19, '0000-00-00 00:00:00'),
(60, 20, '::1', 'My Name is Lawal Toheeb2 ', 1, 1, 0, 0, NULL, 1, 20, '2022-09-20 22:06:57'),
(61, 20, '::1', 'Email is  info@flexplasttech.com ', 1, 1, 0, 0, NULL, 1, 20, '2022-09-20 22:06:57'),
(62, 20, '::1', 'I want to chat with  3 departement ', 1, 1, 0, 0, NULL, 1, 20, '2022-09-20 22:06:57'),
(63, 20, '::1', 'hi ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(64, 20, '::1', 'hello ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(65, 19, '::1', 'hi dear', 2, 1, 0, 0, NULL, 1, 19, '2022-09-20 22:13:35'),
(66, 19, '::1', 'wait some munite', 1, 1, 0, 0, NULL, 1, 19, '2022-09-20 22:17:15'),
(67, 19, '::1', 'i need this', 2, 0, 0, 0, NULL, 1, 19, '2022-09-20 22:19:56'),
(68, 20, '::1', 'we', 2, 1, 0, 0, NULL, 3, 20, '2022-09-20 22:22:26'),
(69, 20, '::1', 'hi', 2, 1, 0, 0, NULL, 3, 20, '2022-09-20 22:23:25'),
(70, 20, '::1', 'bye', 2, 1, 0, 0, NULL, 3, 20, '2022-09-20 22:23:31'),
(71, 20, '127.0.0.1', 'jesus ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(72, 20, '::1', 'hi ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(73, 20, '::1', 'what did u mean', 2, 0, 0, 0, NULL, 3, 20, '2022-09-20 22:34:53'),
(74, 21, '192.168.215.251', 'My Name is Funmi ade ', 1, 1, 0, 0, NULL, 1, 21, '2022-09-20 22:37:51'),
(75, 21, '192.168.215.251', 'Email is  lawis10@gmail.com ', 1, 1, 0, 0, NULL, 1, 21, '2022-09-20 22:37:51'),
(76, 21, '192.168.215.251', 'I want to chat with  2 departement ', 1, 1, 0, 0, NULL, 1, 21, '2022-09-20 22:37:51'),
(77, 21, '192.168.215.251', 'Hello sir ', 1, 1, 0, 0, NULL, 1, 21, '0000-00-00 00:00:00'),
(78, 21, '192.168.215.251', 'Hiiii ', 1, 1, 0, 0, NULL, 1, 21, '0000-00-00 00:00:00'),
(79, 20, '::1', 'll ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(80, 19, '::1', 'u say?', 2, 0, 0, 0, NULL, 1, 19, '2022-09-21 03:11:26'),
(81, 19, '::1', 'k ', 1, 1, 0, 0, NULL, 1, 19, '0000-00-00 00:00:00'),
(82, 19, '::1', 'no', 2, 0, 0, 0, NULL, 1, 19, '2022-09-21 03:14:04'),
(83, 19, '::1', 'what no ', 1, 1, 0, 0, NULL, 1, 19, '0000-00-00 00:00:00'),
(84, 21, '192.168.215.251', 'ko', 2, 0, 0, 0, NULL, 2, 21, '2022-09-21 03:22:54'),
(85, 21, '192.168.215.251', 'hi', 2, 0, 0, 0, NULL, 2, 21, '2022-09-21 03:31:07'),
(86, 21, '192.168.215.251', 'hi', 2, 0, 0, 0, NULL, 2, 21, '2022-09-21 03:32:12'),
(87, 21, '192.168.215.251', 'hi', 2, 0, 0, 0, NULL, 2, 21, '2022-09-21 03:32:55'),
(88, 21, '192.168.215.251', 'wait o', 2, 0, 0, 0, NULL, 2, 21, '2022-09-21 03:33:05'),
(89, 21, '::1', 'hi ', 1, 1, 0, 0, NULL, 1, 21, '0000-00-00 00:00:00'),
(99, 24, '::1', 'My Name is munit ', 1, 1, 0, 0, NULL, 1, 24, '2022-09-21 18:43:46'),
(100, 24, '::1', 'Email is  munit@gmail.com ', 1, 1, 0, 0, NULL, 1, 24, '2022-09-21 18:43:47'),
(101, 24, '::1', 'I want to chat with  1 departement ', 1, 1, 0, 0, NULL, 1, 24, '2022-09-21 18:43:47'),
(102, 24, '::1', 'hello sir ', 1, 1, 0, 0, NULL, 1, 24, '0000-00-00 00:00:00'),
(103, 24, '::1', 'i love u ', 1, 1, 0, 0, NULL, 1, 24, '0000-00-00 00:00:00'),
(104, 24, '::1', 'message ', 1, 1, 0, 0, NULL, 1, 24, '0000-00-00 00:00:00'),
(105, 24, '::1', 'hi', 4, 0, 0, 0, NULL, 1, 24, '2022-09-22 07:03:20'),
(106, 20, '::1', 'hello', 4, 0, 0, 0, NULL, 3, 20, '2022-09-22 07:04:10'),
(107, 20, '127.0.0.1', 'i want to buy form ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(108, 20, '127.0.0.1', 'How much is HND form ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(109, 20, '::1', 'HND form is #10,000', 4, 0, 0, 0, NULL, 3, 20, '2022-09-22 07:05:40'),
(110, 20, '::1', 'are you there', 4, 0, 0, 0, NULL, 3, 20, '2022-09-22 07:59:23'),
(111, 20, '127.0.0.1', 'yes ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00'),
(112, 20, '127.0.0.1', 'pls answer my question ', 1, 1, 0, 0, NULL, 1, 20, '0000-00-00 00:00:00');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_09_17_185306_create_jobs_table', 1),
(4, '0000_00_00_000000_create_websockets_statistics_entries_table', 2);

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
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `body` text NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`id`, `subject`, `body`, `fullname`, `email`, `status`) VALUES
(1, 'Introducing Distance Learning', 'Distance education occurs when a student and an instructor are in different places. Learning occurs by mail, telephone, internet, or by other means', 'lawal toheeb', 'consults@ogitechconsults.com', 1),
(2, 'They should be dorms', 'On campus, students usually live in residence halls or dormitories, which are student apartment buildings that are often called \"dorms.\"', 'lawal Salamot', 'lawalslmt@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `matric` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `avatar` varchar(150) DEFAULT NULL,
  `ip_address` varchar(30) NOT NULL,
  `first_message` text DEFAULT NULL,
  `date_join` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `language_id`, `department_id`, `fullname`, `matric`, `phone`, `email`, `status`, `avatar`, `ip_address`, `first_message`, `date_join`) VALUES
(1, 1, 1, 'lawal Salamot', 'NULL', '+2348132712715', 'lawalslmt@gmail.com', 1, 'NULL', '7a3ed799-9e7c-4c44-ade5-0ca245', 'can i chat with you?', '2022-09-20 19:48:02'),
(2, 1, 1, 'Run Around', 'NULL', '+2348126379154', 'lawalthb@gmail.com', 1, 'NULL', '7c4a89a1-bb41-4dcb-8b1e-9419bd', 'my first qtn is u', '2022-09-20 19:48:02'),
(3, 1, 1, 'Run Around44', 'NULL', '+2348126379154', 'lawalthb@gmail.com', 1, 'NULL', 'e111de62-5020-4dbb-9eb7-d4638b', 'i need u', '2022-09-20 19:48:02'),
(4, 10, 1, 'lawal toheeb', NULL, '08132712715', 'lawalthb@gmail.com', 1, NULL, '192.195.162.122', 'My Name is Lawal <br /> \nEmail: Lawal@f.com <br /> \nI understand Igbo Language <br /> \nI want to chat with Billing department agent', '2022-09-20 19:48:02'),
(5, 1, 1, 'lawal Salamot', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', '', '2022-09-20 19:48:02'),
(6, 1, 1, 'Lawal Toheeb2', '', '+2348132712715', 'info@flexplasttech.com', 1, NULL, '::1', '', '2022-09-20 19:48:02'),
(7, 1, 1, 'azeez Salamot', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', '', '2022-09-20 19:48:02'),
(8, 1, 1, 'lawal333 Salamot', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', 'My name is lawal333 Salamot <br /> \nEmail: lawalslmt@gmail.com <br /> \nI understand 1 language <br /> \nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(9, 1, 1, 'Lawa332332l Toheeb', '', '+2348132712715', 'info@flexplasttech.com', 1, NULL, '::1', 'My name is Lawa332332l Toheeb <br /> \r\nEmail: info@flexplasttech.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(10, 5, 2, 'melina agbo', '', '08132712715', 'melin@gmail.com', 1, NULL, '::1', 'My name is melina agbo <br /> \r\nEmail: melin@gmail.com <br /> \r\nI understand 5 language <br /> \r\nI want to chat with 2 department agent', '2022-09-20 19:48:02'),
(11, 7, 2, 'ayo bami', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', 'My name is ayo bami <br /> \r\nEmail: lawalslmt@gmail.com <br /> \r\nI understand 7 language <br /> \r\nI want to chat with 2 department agent', '2022-09-20 19:48:02'),
(12, 3, 2, 'lawal22 Salamot', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', 'My name is lawal22 Salamot <br /> \r\nEmail: lawalslmt@gmail.com <br /> \r\nI understand 3 language <br /> \r\nI want to chat with 2 department agent', '2022-09-20 19:48:02'),
(13, 9, 2, 'lekan daramola', '123/122/fs', '', 'lekan@gmail.com', 1, NULL, '127.0.0.1', 'My name is lekan daramola <br /> \r\nEmail: lekan@gmail.com <br /> \r\nI understand 9 language <br /> \r\nI want to chat with 2 department agent', '2022-09-20 19:48:02'),
(14, 1, 1, 'lawal Salamot', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', 'My name is lawal Salamot <br /> \r\nEmail: lawalslmt@gmail.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(15, 1, 1, 'oriyomi olajide', '', '', 'ola@fm.com', 1, NULL, '::1', 'My name is oriyomi olajide <br /> \r\nEmail: ola@fm.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(16, 1, 1, 'lawal Salamot', '', '+2348132712715', 'lawalslmt@gmail.com', 1, NULL, '::1', 'My name is lawal Salamot <br /> \r\nEmail: lawalslmt@gmail.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(17, 1, 1, 'ade ola', '', '', 'ade@gmail.com', 1, NULL, '127.0.0.1', 'My name is ade ola <br /> \r\nEmail: ade@gmail.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(18, 1, 1, 'ernest', '', '+2348126379154', 'lawalthb@gmail.com', 1, NULL, '::1', 'My name is ernest <br /> \r\nEmail: lawalthb@gmail.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(19, 1, 1, 'Run Around', '', '+2348126379154', 'lawalthb@gmail.com', 1, NULL, '::1', 'My name is Run Around <br /> \r\nEmail: lawalthb@gmail.com <br /> \r\nI understand 1 language <br /> \r\nI want to chat with 1 department agent', '2022-09-20 19:48:02'),
(20, 7, 3, 'Lawal Toheeb2', '5545sdwd45', '+2348132712715', 'info@flexplasttech.com', 1, NULL, '::1', 'My name is Lawal Toheeb2 <br /> \r\nEmail: info@flexplasttech.com <br /> \r\nI understand 7 language <br /> \r\nI want to chat with 3 department agent', '2022-09-20 22:06:57'),
(21, 6, 2, 'Funmi ade', '', '08132712715', 'lawis10@gmail.com', 1, NULL, '192.168.215.251', 'My name is Funmi ade <br /> \r\nEmail: lawis10@gmail.com <br /> \r\nI understand 6 language <br /> \r\nI want to chat with 2 department agent', '2022-09-20 22:37:51'),
(24, 2, 1, 'munit', '5545sdwd45', '+2348126379154', 'munit@gmail.com', 1, NULL, '::1', 'My name is munit <br /> \r\nEmail: munit@gmail.com <br /> \r\nI understand 2 language <br /> \r\nI want to chat with 1 department agent', '2022-09-21 18:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uniqq` (`email`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent` (`agent`);

--
-- Indexes for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `last_message_id` (`last_message_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `messages_ibfk_2` (`session_id`);

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
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `language_id` (`language_id`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `inboxes`
--
ALTER TABLE `inboxes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `faq_ibfk_1` FOREIGN KEY (`agent`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inboxes`
--
ALTER TABLE `inboxes`
  ADD CONSTRAINT `inboxes_ibfk_1` FOREIGN KEY (`last_message_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `inboxes_ibfk_2` FOREIGN KEY (`last_message_id`) REFERENCES `messages` (`id`),
  ADD CONSTRAINT `inboxes_ibfk_3` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
