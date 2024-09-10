-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2024 at 06:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `choice_text` text NOT NULL,
  `is_correct` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_id`, `choice_text`, `is_correct`, `created_at`, `updated_at`) VALUES
(1, 1, 'head', 1, '2024-09-04 14:37:26', '2024-09-07 18:47:18'),
(2, 1, 'html', 0, '2024-09-04 14:37:40', '2024-09-07 18:47:25'),
(3, 1, 'title', 0, '2024-09-04 14:37:52', '2024-09-07 18:47:43'),
(4, 1, '<document>', 0, '2024-09-04 14:38:03', NULL),
(5, 2, '<fat>', 0, '2024-09-04 14:38:26', NULL),
(6, 2, '<black>', 0, '2024-09-04 14:38:36', NULL),
(7, 2, '<strong>', 1, '2024-09-04 14:38:48', NULL),
(8, 2, '<emp>', 0, '2024-09-04 14:38:57', NULL),
(9, 3, '<strong>', 0, '2024-09-04 14:39:17', NULL),
(10, 3, '<bolder>', 0, '2024-09-04 14:39:26', NULL),
(11, 3, '<bold>', 0, '2024-09-04 14:39:38', NULL),
(12, 3, '<b>', 1, '2024-09-04 14:39:48', '2024-09-04 14:40:33'),
(13, 4, '<strong>', 1, '2024-09-04 14:40:21', NULL),
(14, 4, '<bold>', 0, '2024-09-04 14:40:51', NULL),
(15, 4, '<b>', 0, '2024-09-04 14:41:00', NULL),
(16, 4, '<bolder>', 0, '2024-09-04 14:41:09', NULL),
(17, 5, '<include src=\'style.css\'>', 0, '2024-09-04 14:41:29', NULL),
(18, 5, '<link href=\'style.css\' rel=\'stylesheet\'>', 1, '2024-09-04 14:41:41', NULL),
(19, 5, '<css src=\'style.css\'>', 0, '2024-09-04 14:41:54', NULL),
(20, 5, '<import src=\'style.css\'>', 0, '2024-09-04 14:42:02', NULL),
(21, 6, 'class', 0, '2024-09-06 14:34:18', NULL),
(22, 6, 'name', 0, '2024-09-06 14:34:37', NULL),
(23, 6, 'key', 0, '2024-09-06 14:34:48', NULL),
(24, 6, 'id', 1, '2024-09-06 14:35:02', NULL),
(25, 7, '<style>', 0, '2024-09-06 14:35:52', NULL),
(26, 7, '<link>', 1, '2024-09-06 14:36:07', NULL),
(27, 7, '<import>', 0, '2024-09-06 14:36:21', NULL),
(28, 7, '<include>', 0, '2024-09-06 14:36:30', NULL),
(29, 8, 'To display a short hint that describes  the expected value of the input field.', 1, '2024-09-06 14:37:28', NULL),
(30, 8, 'To display a default value  that the user can submit.', 0, '2024-09-06 14:37:39', NULL),
(31, 8, 'To make the input field  read-only.', 0, '2024-09-06 14:37:48', NULL),
(32, 8, 'To automatically fill the  input field with a value from  the user’s previous sessions.', 0, '2024-09-06 14:37:59', NULL),
(33, 9, '<fieldset>', 1, '2024-09-06 14:39:09', NULL),
(34, 9, '<form>', 0, '2024-09-06 14:39:18', NULL),
(35, 9, '<label>', 0, '2024-09-06 14:39:35', NULL),
(36, 9, 'group', 0, '2024-09-06 14:39:45', '2024-09-07 18:46:10'),
(37, 10, 'disabled', 0, '2024-09-06 14:40:11', NULL),
(38, 10, 'readonly', 0, '2024-09-06 14:40:23', NULL),
(39, 10, 'required', 1, '2024-09-06 14:40:35', NULL),
(40, 10, 'placeholder', 0, '2024-09-06 14:40:45', NULL),
(41, 11, 'It disables the ability to  run JavaScript by default.', 1, '2024-09-06 14:41:49', NULL),
(42, 11, 'It restricts access to  parent window variables.', 0, '2024-09-06 14:42:02', NULL),
(43, 11, 'It prevents any external resources  from loading within the frame.', 0, '2024-09-06 14:42:16', NULL),
(44, 11, 'It forces HTTPS content  within the frame.', 0, '2024-09-06 14:42:27', NULL),
(45, 12, 'GET', 1, '2024-09-06 14:44:21', NULL),
(46, 12, 'PATCH', 0, '2024-09-06 14:44:34', NULL),
(47, 12, 'POST', 0, '2024-09-06 14:44:48', NULL),
(48, 12, 'PUT', 0, '2024-09-06 14:45:03', NULL),
(49, 13, '<header>', 0, '2024-09-06 14:46:12', NULL),
(50, 13, '<meta>', 1, '2024-09-06 14:46:24', NULL),
(51, 13, '<article>', 0, '2024-09-06 14:46:34', NULL),
(52, 13, '<aside>', 0, '2024-09-06 14:46:44', NULL),
(53, 14, 'Session Storage', 0, '2024-09-06 14:47:52', NULL),
(54, 14, 'Cookies', 0, '2024-09-06 14:48:04', NULL),
(55, 14, 'Local Storage', 1, '2024-09-06 14:48:15', NULL),
(56, 14, 'Cache API', 0, '2024-09-06 14:48:26', NULL),
(57, 15, 'It can hold reusable  chunks of HTML.', 0, '2024-09-06 14:49:42', NULL),
(58, 15, 'Its content renders immediately in the DOM upon page load.', 1, '2024-09-06 14:50:04', NULL),
(59, 15, 'It is typically used with  JavaScript to clone content.', 0, '2024-09-06 14:50:13', NULL),
(60, 15, 'The content inside  <template> is inert until  activated by JavaScript.', 0, '2024-09-06 14:50:23', NULL),
(64, 17, 'color', 0, '2024-09-07 18:38:53', NULL),
(65, 17, 'background-color', 1, '2024-09-07 18:56:21', NULL),
(66, 17, 'background-image', 0, '2024-09-07 18:56:37', NULL),
(67, 17, 'bgcolor', 0, '2024-09-07 18:56:50', NULL),
(68, 18, 'font-color', 0, '2024-09-07 18:58:54', NULL),
(69, 18, 'text-color', 0, '2024-09-07 18:59:06', NULL),
(70, 18, 'color', 1, '2024-09-07 19:01:14', NULL),
(71, 18, 'font-style', 0, '2024-09-07 19:01:32', NULL),
(72, 19, 'font-style', 0, '2024-09-07 19:02:55', NULL),
(73, 19, 'text-size', 0, '2024-09-07 19:03:10', NULL),
(74, 19, 'text-style', 0, '2024-09-07 19:03:22', NULL),
(75, 19, 'font-size', 1, '2024-09-07 19:03:43', NULL),
(76, 20, 'font-weight: bold;', 1, '2024-09-07 19:04:39', NULL),
(77, 20, 'font-style: bold;', 0, '2024-09-07 19:04:57', NULL),
(78, 20, 'text-weight: bold;', 0, '2024-09-07 19:05:07', NULL),
(79, 20, 'text-bold: true;', 0, '2024-09-07 19:05:18', NULL),
(80, 21, 'absolute', 0, '2024-09-07 19:07:15', NULL),
(81, 21, 'fixed', 0, '2024-09-07 19:07:27', NULL),
(82, 21, 'relative', 0, '2024-09-07 19:07:42', NULL),
(83, 21, 'static', 1, '2024-09-07 19:07:54', NULL),
(84, 22, 'margin: 10px;', 1, '2024-09-07 19:09:28', NULL),
(85, 22, 'margin: 10;', 0, '2024-09-07 19:13:08', NULL),
(86, 22, 'padding: 10px;', 0, '2024-09-07 19:13:18', NULL),
(87, 22, 'margin: 10px all;', 0, '2024-09-07 19:14:43', NULL),
(88, 23, 'margin', 0, '2024-09-07 19:15:59', NULL),
(89, 23, 'padding', 1, '2024-09-07 19:16:09', NULL),
(90, 23, 'border-spacing', 0, '2024-09-07 19:16:23', NULL),
(91, 23, 'spacing', 0, '2024-09-07 19:16:40', NULL),
(92, 24, '<div class=\"class1 class2\">', 1, '2024-09-07 19:19:37', NULL),
(93, 24, '<div class=\"class1, class2\">', 0, '2024-09-07 19:19:59', NULL),
(94, 24, '<div class=\"class1.class2\">', 0, '2024-09-07 19:20:21', NULL),
(95, 24, '<div class=\"class1; class2\">', 0, '2024-09-07 19:20:41', NULL),
(96, 26, 'display: block;', 0, '2024-09-07 19:31:13', NULL),
(97, 26, 'display: inline-block;', 0, '2024-09-07 19:31:23', NULL),
(98, 26, 'display: flex;', 1, '2024-09-07 19:31:42', NULL),
(99, 26, 'display: grid;', 0, '2024-09-07 19:32:03', NULL),
(100, 27, 'opacity', 1, '2024-09-07 19:33:53', NULL),
(101, 27, 'filter: opacity()', 0, '2024-09-07 19:34:08', NULL),
(102, 27, 'visibility', 0, '2024-09-07 19:34:21', NULL),
(103, 27, 'transparency', 0, '2024-09-07 19:35:34', NULL),
(104, 28, 'resize', 1, '2024-09-07 19:37:49', NULL),
(105, 28, 'overflow', 0, '2024-09-07 19:38:00', NULL),
(106, 28, 'clip', 0, '2024-09-07 19:38:39', NULL),
(107, 28, 'drag', 0, '2024-09-07 19:40:00', NULL),
(108, 29, ':first-child', 1, '2024-09-07 19:41:55', NULL),
(109, 29, ':nth-child(1)', 0, '2024-09-07 19:42:05', NULL),
(110, 29, ':only-child', 0, '2024-09-07 19:42:14', NULL),
(111, 29, ':first-of-type', 0, '2024-09-07 19:42:23', NULL),
(112, 30, 'min-size', 0, '2024-09-07 19:45:16', NULL),
(113, 30, 'min-width', 1, '2024-09-07 19:45:26', NULL),
(114, 30, 'size-limit', 0, '2024-09-07 19:45:41', NULL),
(115, 30, 'fixed-size', 0, '2024-09-07 19:45:51', NULL),
(116, 31, 'display', 0, '2024-09-07 19:47:17', NULL),
(117, 31, 'background-image', 0, '2024-09-07 19:47:26', NULL),
(118, 31, 'transform', 1, '2024-09-07 19:47:37', NULL),
(119, 31, 'float', 0, '2024-09-07 19:47:52', NULL),
(120, 32, 'em', 0, '2024-09-07 19:48:48', NULL),
(121, 32, 'px', 0, '2024-09-07 19:48:57', NULL),
(122, 32, 'rem', 1, '2024-09-07 19:49:08', NULL),
(123, 32, '%', 0, '2024-09-07 19:49:21', NULL),
(124, 33, 'scroll-mode', 0, '2024-09-07 19:52:14', NULL),
(125, 33, 'scroll-direction', 0, '2024-09-07 19:52:25', NULL),
(126, 33, 'scroll-behavior', 0, '2024-09-07 19:52:36', NULL),
(127, 33, 'overflow', 1, '2024-09-07 19:52:52', NULL),
(128, 34, 'box-shadow', 0, '2024-09-07 19:56:11', NULL),
(129, 34, 'text-shadow', 1, '2024-09-07 19:56:21', NULL),
(130, 34, 'text-decoration', 0, '2024-09-07 19:56:45', NULL),
(131, 34, 'shadow-text', 0, '2024-09-07 19:56:56', NULL),
(132, 35, 'string', 0, '2024-09-07 19:58:33', NULL),
(133, 35, 'Array', 1, '2024-09-07 19:58:51', NULL),
(134, 35, 'number', 0, '2024-09-07 19:58:59', NULL),
(135, 35, 'null', 0, '2024-09-07 19:59:10', NULL),
(136, 36, 'console.log(Hello,World)', 0, '2024-09-07 20:00:49', NULL),
(137, 36, 'console.log(\"Hello,World\")', 1, '2024-09-07 20:01:04', NULL),
(138, 36, 'console.log\"Hello,World\"', 0, '2024-09-07 20:01:15', '2024-09-07 20:06:38'),
(139, 36, 'console.log\'Hello,World\'', 0, '2024-09-07 20:01:24', '2024-09-07 20:06:58');

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
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `helpful` text NOT NULL,
  `msgDetail` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `helpful`, `msgDetail`, `created_at`, `updated_at`) VALUES
(7, 'yes', 'Hello WOrld', '2024-09-06 20:05:06', NULL),
(8, 'no', 'hi', '2024-09-06 20:05:10', NULL),
(9, 'yes', 'Hello', '2024-09-07 09:20:31', NULL);

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2024_09_01_120152_create_questions_table', 1),
(12, '2024_09_01_120518_create_choices_table', 1),
(13, '2024_09_06_213148_create_feedbacks_table', 2),
(16, '2024_09_06_215443_create_feedbacks_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_text` text NOT NULL,
  `language` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `language`, `difficulty`, `created_at`, `updated_at`) VALUES
(1, 'What should be the first tag in any HTML document?', 'html', 'easy', '2024-09-04 14:37:09', NULL),
(2, 'Apart from <b> tag, which tag makes text bold?', 'html', 'easy', '2024-09-04 14:38:16', NULL),
(3, 'Which HTML tag is used to define bold text without any additional importance?', 'html', 'easy', '2024-09-04 14:39:07', NULL),
(4, 'Which HTML tag is used to define text with strong importance?', 'html', 'easy', '2024-09-04 14:40:11', NULL),
(5, 'How can we include an external CSS file in our HTML Document?', 'html', 'easy', '2024-09-04 14:41:20', NULL),
(6, 'Which of the following attributes is used to  uniquely identify an HTML element?', 'html', 'medium', '2024-09-06 14:33:56', NULL),
(7, 'Which tag allows the definition of a scoped  external style sheet in HTML?', 'html', 'medium', '2024-09-06 14:35:41', NULL),
(8, 'What is the purpose of the placeholder attribute  in an HTML input field?', 'html', 'medium', '2024-09-06 14:37:18', NULL),
(9, 'Which HTML element is used to group related form controls together?', 'html', 'medium', '2024-09-06 14:38:54', NULL),
(10, 'Which attribute is used to specify that an input  field must be filled out before submitting a form?', 'html', 'medium', '2024-09-06 14:39:59', NULL),
(11, 'How does the sandbox attribute affect an <iframe> in HTML?', 'html', 'hard', '2024-09-06 14:41:27', NULL),
(12, 'What is the default value for the method attribute  in an HTML form if it is not specified?', 'html', 'hard', '2024-09-06 14:44:08', NULL),
(13, 'Which HTML element is used to create a machine-readable  description of the page’s content for search engines?', 'html', 'hard', '2024-09-06 14:45:54', NULL),
(14, 'Which of the following HTML5 features is used to store  data on the client-side, but persists across sessions?', 'html', 'hard', '2024-09-06 14:47:36', NULL),
(15, 'Which of the following statements is incorrect  about <template> in HTML?', 'html', 'hard', '2024-09-06 14:49:31', NULL),
(17, 'Which property is used to change the background color of an element?', 'css', 'easy', '2024-09-07 18:38:32', NULL),
(18, 'Which property is used to change the text color of an element?', 'css', 'easy', '2024-09-07 18:58:36', NULL),
(19, 'Which CSS property controls the size of text?', 'css', 'easy', '2024-09-07 19:02:42', NULL),
(20, 'How do you make text bold in CSS?', 'css', 'easy', '2024-09-07 19:04:27', NULL),
(21, 'What is the default value of the position property in CSS?', 'css', 'easy', '2024-09-07 19:06:25', NULL),
(22, 'Which of the following is the correct syntax for applying a margin of 10px on all sides?', 'css', 'easy', '2024-09-07 19:09:05', NULL),
(23, 'Which property is used to specify the space between the content  and the border of an element?', 'css', 'medium', '2024-09-07 19:15:45', NULL),
(24, 'Which of the following is the correct way to apply multiple classes to an HTML element?', 'css', 'medium', '2024-09-07 19:19:19', NULL),
(26, 'Which of the following is the correct way to implement a CSS Flexbox container?', 'css', 'medium', '2024-09-07 19:30:50', NULL),
(27, 'Which CSS property is used to change the opacity of an element?', 'css', 'medium', '2024-09-07 19:33:32', NULL),
(28, 'Which property is used to specify whether an element is resizable by the user in CSS?', 'css', 'medium', '2024-09-07 19:37:33', NULL),
(29, 'Which of the following pseudo-classes is used to style  an element that is the first child of its parent?', 'css', 'medium', '2024-09-07 19:41:05', NULL),
(30, 'Which CSS property is used to prevent an element from being sized smaller  than a certain value, regardless of the content?', 'css', 'hard', '2024-09-07 19:44:59', NULL),
(31, 'Which of the following CSS properties can be animated?', 'css', 'hard', '2024-09-07 19:47:02', NULL),
(32, 'Which of the following units is based on the font size of the root element?', 'css', 'hard', '2024-09-07 19:48:32', NULL),
(33, 'Which CSS property allows you to set an element to only scroll horizontally or vertically?', 'css', 'hard', '2024-09-07 19:51:51', NULL),
(34, 'Which CSS property applies a shadow only to the text of an element?', 'css', 'hard', '2024-09-07 19:55:58', NULL),
(35, 'What\'s the non-primitive data type in Javascript?', 'javascript', 'easy', '2024-09-07 19:58:17', NULL),
(36, 'What is the correct way to display Hello,World in console?', 'javascript', 'easy', '2024-09-07 20:00:19', NULL);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `choices_question_id_foreign` (`question_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
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
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `choices`
--
ALTER TABLE `choices`
  ADD CONSTRAINT `choices_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
