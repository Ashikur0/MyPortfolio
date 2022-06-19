-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 01:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jdescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company_name`, `position`, `period`, `jdescription`, `company_logo`, `created_at`, `updated_at`) VALUES
(4, 'Platinum Communications Limited', 'Engineer (Core Technical & Billing Dept.)', 'January 2020 to Continuing', '• MySQL Database Maintaining and Management.\r\n• Asterisk and Application Server Maintaining and Management.\r\n• Call Details Record (CDR) automation and processing.\r\n• Daily Platinum Calls Detail Record (CDR) Backup.\r\n• Managing and Maintaining Carriers and IOS Port allocation on Soft Switch.\r\n• I/O call managing and routing towards Carrier.\r\n• New SIP peer and TG configuration and modification.\r\n• Blocking, Unblocking Carrier and IOS’s from Soft Switch.\r\n• Soft Switch Internal network Monitoring and Carrier and IOS’s complain handling and troubleshooting.\r\n• Invoice (to carrier) generation for International Incoming Call in weekly basis.\r\n• Dispute Analysis for International Outgoing Call in weekly basis.\r\n• Revenue Sharing BTRC in monthly basis.\r\n• Invoice to IOS for Outgoing Call in monthly basis.', 'Platinum Logo.png', '2022-06-16 03:18:41', '2022-06-16 03:18:41'),
(5, 'Mango CA', 'Software Engineer', 'January 2020 to Continuing', '• Developed New Software for System Automation and Maintaining and up gradation of existing\r\nSoftware.\r\n• Developed New Module and Maintain existing Module for Mango CA.\r\n• Providing Training to Users on how to install and use a digital signature.\r\n• Verifying new Application and Applicant information.\r\n• Providing Technical support to Digital Signature users.', 'Mango CA Logo.jpg', '2022-06-16 03:19:34', '2022-06-16 03:19:34');

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Ashikur Rahaman', 'ashikur.rahaman@platinumgw.com', '01755632823', 'This is a Good Portfolio Website.', '2022-06-19 03:01:24', '2022-06-19 03:01:24'),
(11, 'Rifat Sultana Safa', 'rifat.sultana@platinumgw.com', '01755632835', 'WOW Ashik..! Welldone.', '2022-06-19 03:43:22', '2022-06-19 03:43:22'),
(12, 'Kazi Mizan Ahmed', 'mail.kazimizan@gmail.com', '01771585899', 'Hello! Project', '2022-06-19 05:17:23', '2022-06-19 05:17:23');

-- --------------------------------------------------------

--
-- Table structure for table `mains`
--

CREATE TABLE `mains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mains`
--

INSERT INTO `mains` (`id`, `title`, `sub_title`, `images`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'Hi.! I AM', 'Ashikur Rahaman', 'Ashikur Rahaman.jpg', 'Ashikur Rahaman.pdf', NULL, '2022-06-12 04:38:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_17_110308_create_sessions_table', 1),
(7, '2022_06_12_064129_create_mains_table', 2),
(8, '2022_06_13_060147_create_services_table', 3),
(10, '2022_06_14_065038_create_projects_table', 4),
(11, '2022_06_16_054222_create_experiences_table', 5),
(12, '2022_06_19_062907_create_personal_infos_table', 6),
(15, '2022_06_19_084815_create_feedback_table', 7);

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
-- Table structure for table `personal_infos`
--

CREATE TABLE `personal_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkdin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_infos`
--

INSERT INTO `personal_infos` (`id`, `name`, `designation`, `company`, `email`, `contact`, `facebook`, `linkdin`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Ashikur Rahaman', 'Engineer (Core Technical & Billing Dept.)', 'Platinum Communications Limited', 'ashikur.rahaman@platinumgw.com', '01759359294', 'https://www.facebook.com/profile.php?id=100008256289270', 'https://www.linkedin.com/in/ashikur-rahaman-a9914b184', 'Ashikur_rahaman.jpg', '2022-06-19 00:41:15', '2022-06-19 01:33:55');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptechnology` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `pname`, `pdescription`, `ptechnology`, `pimage`, `created_at`, `updated_at`) VALUES
(1, 'My Portfolio', '1. Register & Login as an Admin user.\r\n2. Upload Banner Image, Banner Title, and Resume of User.\r\n3. Dynamically Add, Update and Delete Area of Expertise, Projects, and Professional Experience from Admin Panel.\r\n4. Store & View Contact me Information from Database.\r\n5. Admin Dashboard\r\n6. View Project information using Modal.', 'Language: Laravel 8, JavaScript, AJAX.\r\nDatabase: MySQL.\r\nWeb Technology: HTML 5, CSS 3, Bootstrap 5.\r\nWeb Services:  Apache.', 'Portfolio.JPG', '2022-06-14 01:13:24', '2022-06-15 04:10:28'),
(2, 'Msigner', '1. Register a new User & Login an existing user.\r\n2. Mobile Number Validation by sending OTP to Users Mobile Number.\r\n3. Show & Update User Information.\r\n4. User Dashboard.\r\n5. Browse Digital Signature and show Certificate information.\r\n6. Browse PDF documents.\r\n7. Sign & Delete users\' uploaded documents.\r\n8. Signed documents with uploaded Digital Signature.\r\n9. Download & Delete Signed documents.', 'Language: PHP 7, Java, JavaScript, AJAX.\r\nDatabase: MySQL.\r\nWeb Technology: HTML 5, CSS 3, Bootstrap 5.\r\nAPI: Jersey (JAX-RS).\r\nWeb Services:  Apache, Tomcat 9.', 'MSigner.jpg', '2022-06-14 01:26:19', '2022-06-15 03:54:08'),
(4, 'Platinum Invoice Generator', '1. Register a new User & Login an existing user.\r\n2. Add, Edit, and Delete International Partner for International Incoming Calls.\r\n3. Fetch Call Details Record (CDR) data from Platinum Central Database and Store CDR in Invoice Database.\r\n4. Generate and Export CDR Reports as Excel for Int. Carriers for a Given Period.\r\n5. Generate and Export Invoices as Excel for Int. Carriers for a Given Period.\r\n6. View, Edit, and Delete User Profile.', 'Language: PHP 7, JavaScript.\r\nDatabase: MySQL.\r\nWeb Technology: HTML 5, CSS 3, Bootstrap 5.\r\nWeb Services:  Apache.', 'Platinum_Invoice_Generator.JPG', '2022-06-15 04:24:04', '2022-06-15 04:24:04'),
(5, 'Platinum CDR Downloader', '1. A simple .exe application.\r\n2. Can Start CDR Downloading automatically after running only one executable file.\r\n3. Connected to Platinum soft Switch’s Split-CDR Folder where CDR is automatically stored after 5 Minutes Interval by Asterisk Soft Switch.\r\n4. It Checks for newly Generated CDR from the soft switch for 2.5-minute intervals if a new CDR is found then it automatically Downloads the Newly generated CDR File.\r\n5. Multiple CDR can be downloaded at a time.\r\n6. Connected to Platinum CDR Mediation Server and automatically send the downloaded CDR for Mediation.\r\n7. Connected to IOF FTP Server and send the downloaded CDR to IOF Vault.', 'Language: Python v 3.0.1\r\n\r\nDatabase: MySQL.', 'Platinum_CDR_Downloader.png', '2022-06-15 04:58:08', '2022-06-15 04:58:08'),
(6, 'Towards IoT and ML Driven Cardiac Status Prediction System', 'An IoT and Machine Learning derived cardiac status prediction method that can collect necessary data from the human body using IoT devices (sensors) and transfer those data to the cloud where the data are stored with user authentication. The data which are received from the human body are then to be normalized before machine learning algorithms are applied to them to calculate and predict the overall condition of a patient’s heart.', 'Language: JavaScript, Python, Java\r\nData Format: JSON-LD, ASCII', 'Capstone Project.PNG', '2022-06-15 05:16:51', '2022-06-15 05:16:51'),
(7, 'Smart Irrigation System', '1. Control the Environment autonomously.\r\n2. Monitor the Environment inside the Greenhouse.\r\n3. Manually Control The Environment.\r\n4. Motion The Condition Of soil and Plants.', 'Sensors: Trip Wire, Water Sensor, Water Drain, Temperature Sensor Humidity Sensor.\r\nActuators:  Fan & Ac, Camera & Motion Detectors, Light.', 'Smart Irrigation System.png', '2022-06-15 05:24:49', '2022-06-15 05:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'fa-solid fa-code', 'Backend Development', 'Developing new websites backend using PHP, Laravel, Javascript, and Ajax. Update Existing System and add new Modules to Existing System.', '2022-06-13 00:16:56', '2022-06-13 03:57:24'),
(2, 'fa-solid fa-paintbrush', 'Frontend Development', 'Designing New Responsive Website Using HTML 5 ,CSS 3 and Bootstrap 4 & 5.', '2022-06-13 00:34:48', '2022-06-13 03:57:52'),
(5, 'fa-solid fa-gear', 'System Automation', 'Developing new Automation Script using Python for System Automation.', '2022-06-13 02:06:15', '2022-06-13 02:56:32'),
(6, 'fa-solid fa-database', 'Database Management', 'Specialized in MySQL Database. Designing a new Relational Database. Writing Complex Queries.', '2022-06-13 03:00:28', '2022-06-13 03:00:59'),
(7, 'fa-solid fa-asterisk', 'VOIP Service Management', 'Asterisk and Application Server Maintaining and Management. Managing and Maintaining Carriers and IOS Port allocation on Soft Switch. New SIP peer and TG configuration and modification.', '2022-06-13 03:04:23', '2022-06-13 03:06:16'),
(8, 'fa-solid fa-file-invoice-dollar', 'Billing Management', 'Invoice generation for International Incoming & Outgoing Calls.Dispute Analysis.Revenue Sharing.', '2022-06-13 03:08:59', '2022-06-13 03:08:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('F0Zf6wRdtxfUekuE3Yw5x2edO3N9RFY17cNrl9Fw', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0NlNGVBOXJZbjNibVdPWk05NHJSbzVZNDBKYnhSNXdJaWRSZHpSciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi92aWV3L2ZlZWRiYWNrIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1655637474);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mains`
--
ALTER TABLE `mains`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `personal_infos`
--
ALTER TABLE `personal_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mains`
--
ALTER TABLE `mains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `personal_infos`
--
ALTER TABLE `personal_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
