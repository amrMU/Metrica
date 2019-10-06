-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2019 at 10:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `base_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `nameAr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nameEn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provinceId` int(10) UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `nameAr`, `nameEn`, `provinceId`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'تبوك', 'Tabuk', 3, NULL, NULL, NULL),
(3, 'الرياض', 'Riyadh', 6, NULL, NULL, NULL),
(5, 'الطائف', 'At Taif', 11, NULL, NULL, NULL),
(6, 'مكة المكرمة', 'Makkah Al Mukarramah', 11, NULL, NULL, NULL),
(10, 'حائل', 'Hail', 4, NULL, NULL, NULL),
(11, 'بريدة', 'Buraydah', 5, NULL, NULL, NULL),
(12, 'الهفوف', 'Al Hufuf', 13, NULL, NULL, NULL),
(13, 'الدمام', 'Ad Dammam', 13, NULL, NULL, NULL),
(14, 'المدينة المنورة', 'Al Madinah Al Munawwarah', 7, NULL, NULL, NULL),
(15, 'ابها', 'Abha', 8, NULL, NULL, NULL),
(17, 'جازان', 'Jazan', 10, NULL, NULL, NULL),
(18, 'جدة', 'Jeddah', 11, NULL, NULL, NULL),
(24, 'المجمعة', 'Al Majmaah', 6, NULL, NULL, NULL),
(31, 'الخبر', 'Al Khubar', 13, NULL, NULL, NULL),
(47, 'حفر الباطن', 'Hafar Al Batin', 13, NULL, NULL, NULL),
(62, 'خميس مشيط', 'Khamis Mushayt', 8, NULL, NULL, NULL),
(65, 'احد رفيده', 'Ahad Rifaydah', 8, NULL, NULL, NULL),
(67, 'القطيف', 'Al Qatif', 13, NULL, NULL, NULL),
(80, 'عنيزة', 'Unayzah', 5, NULL, NULL, NULL),
(89, 'قرية العليا', 'Qaryat Al Ulya', 13, NULL, NULL, NULL),
(113, 'الجبيل', 'Al Jubail', 13, NULL, NULL, NULL),
(115, 'النعيرية', 'An Nuayriyah', 13, NULL, NULL, NULL),
(227, 'الظهران', 'Dhahran', 13, NULL, NULL, NULL),
(233, 'الوجه', 'Al Wajh', 3, NULL, NULL, NULL),
(243, 'بقيق', 'Buqayq', 13, NULL, NULL, NULL),
(270, 'الزلفي', 'Az Zulfi', 6, NULL, NULL, NULL),
(288, 'خيبر', 'Khaybar', 7, NULL, NULL, NULL),
(306, 'الغاط', 'Al Ghat', 6, NULL, NULL, NULL),
(323, 'املج', 'Umluj', 3, NULL, NULL, NULL),
(377, 'رابغ', 'Rabigh', 11, NULL, NULL, NULL),
(418, 'عفيف', 'Afif', 6, NULL, NULL, NULL),
(443, 'ثادق', 'Thadiq', 6, NULL, NULL, NULL),
(454, 'سيهات', 'Sayhat', 13, NULL, NULL, NULL),
(456, 'تاروت', 'Tarut', 13, NULL, NULL, NULL),
(483, 'ينبع', 'Yanbu', 7, NULL, NULL, NULL),
(500, 'شقراء', 'Shaqra', 6, NULL, NULL, NULL),
(669, 'الدوادمي', 'Ad Duwadimi', 6, NULL, NULL, NULL),
(828, 'الدرعية', 'Ad Diriyah', 6, NULL, NULL, NULL),
(880, 'القويعية', 'Quwayiyah', 6, NULL, NULL, NULL),
(990, 'المزاحمية', 'Al Muzahimiyah', 6, NULL, NULL, NULL),
(1053, 'بدر', 'Badr', 7, NULL, NULL, NULL),
(1061, 'الخرج', 'Al Kharj', 6, NULL, NULL, NULL),
(1073, 'الدلم', 'Ad Dilam', 6, NULL, NULL, NULL),
(1228, 'الشنان', 'Ash Shinan', 4, NULL, NULL, NULL),
(1248, 'الخرمة', 'Al Khurmah', 11, NULL, NULL, NULL),
(1257, 'الجموم', 'Al Jumum', 11, NULL, NULL, NULL),
(1294, 'المجاردة', 'Al Majardah', 8, NULL, NULL, NULL),
(1361, 'السليل', 'As Sulayyil', 6, NULL, NULL, NULL),
(1443, 'تثليث', 'Tathilith', 8, NULL, NULL, NULL),
(1514, 'بيشة', 'Bishah', 8, NULL, NULL, NULL),
(1542, 'الباحة', 'Al Baha', 9, NULL, NULL, NULL),
(1625, 'القنفذة', 'Al Qunfidhah', 11, NULL, NULL, NULL),
(1801, 'محايل', 'Muhayil', 8, NULL, NULL, NULL),
(1879, 'ثول', 'Thuwal', 11, NULL, NULL, NULL),
(1947, 'ضبا', 'Duba', 3, NULL, NULL, NULL),
(2156, 'تربه', 'Turbah', 11, NULL, NULL, NULL),
(2167, 'صفوى', 'Safwa', 13, NULL, NULL, NULL),
(2171, 'عنك', 'Inak', 13, NULL, NULL, NULL),
(2208, 'طريف', 'Turaif', 1, NULL, NULL, NULL),
(2213, 'عرعر', 'Arar', 1, NULL, NULL, NULL),
(2226, 'القريات', 'Al Qurayyat', 2, NULL, NULL, NULL),
(2237, 'سكاكا', 'Sakaka', 2, NULL, NULL, NULL),
(2256, 'رفحاء', 'Rafha', 1, NULL, NULL, NULL),
(2268, 'دومة الجندل', 'Dawmat Al Jandal', 2, NULL, NULL, NULL),
(2421, 'الرس', 'Ar Rass', 5, NULL, NULL, NULL),
(2448, 'المذنب', 'Al Midhnab', 5, NULL, NULL, NULL),
(2464, 'الخفجي', 'Al Khafji', 13, NULL, NULL, NULL),
(2467, 'رياض الخبراء', 'Riyad Al Khabra', 5, NULL, NULL, NULL),
(2481, 'البدائع', 'Al Badai', 5, NULL, NULL, NULL),
(2590, 'رأس تنورة', 'Ras Tannurah', 13, NULL, NULL, NULL),
(2630, 'البكيرية', 'Al Bukayriyah', 5, NULL, NULL, NULL),
(2777, 'الشماسية', 'Ash Shimasiyah', 5, NULL, NULL, NULL),
(3158, 'الحريق', 'Al Hariq', 6, NULL, NULL, NULL),
(3161, 'حوطة بني تميم', 'Hawtat Bani Tamim', 6, NULL, NULL, NULL),
(3174, 'ليلى', 'Layla', 6, NULL, NULL, NULL),
(3275, 'بللسمر', 'Billasmar', 8, NULL, NULL, NULL),
(3347, 'شرورة', 'Sharurah', 12, NULL, NULL, NULL),
(3417, 'نجران', 'Najran', 12, NULL, NULL, NULL),
(3479, 'صبيا', 'Sabya', 10, NULL, NULL, NULL),
(3525, 'ابو عريش', 'Abu Arish', 10, NULL, NULL, NULL),
(3542, 'صامطة', 'Samtah', 10, NULL, NULL, NULL),
(3652, 'احد المسارحة', 'Ahad Al Musarihah', 10, NULL, NULL, NULL),
(3666, 'مدينة الملك عبدالله الاقتصادية', 'King Abdullah Economic City', 11, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `external_resources`
--

CREATE TABLE `external_resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2019_07_05_171759_create_counties_table', 1),
(16, '2019_07_05_171810_create_cities_table', 1),
(17, '2019_07_05_171811_create_users_table', 1),
(18, '2019_07_05_171812_create_password_resets_table', 1),
(19, '2019_07_25_182920_create_reports_table', 1),
(20, '2019_08_03_204310_create_settings_table', 1),
(21, '2019_08_03_204706_create_setting_emails_table', 1),
(22, '2019_08_03_205052_create_setting_social_media_table', 1),
(23, '2019_08_03_205249_create_setting_phones_table', 1),
(24, '2019_08_03_205424_create_setting_watsapps_table', 1),
(25, '2019_08_03_205753_create_setting_addresses_table', 1),
(26, '2019_08_03_210537_create_setting_mail_provider_infos_table', 1),
(27, '2019_08_08_195022_create_external_resources_table', 1),
(28, '2019_08_26_220943_create_waiting_lists_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `process` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hostname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `key`, `text`, `process`, `user_id`, `ip`, `browser`, `location`, `latitude`, `longitude`, `hostname`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'dashboard_browse_setting', 'Browse Setting', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:04:59', '2019-08-30 21:04:59'),
(2, 'dashboard_update_setting', 'Update Setting Info', '{\"id\":1,\"title_ar\":\"\\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0643\\u062a\\u0631\\u0648\\u0646\\u064a\",\"title_en\":\"E-Site\",\"content_ar\":\"iohgu hiuhgi\",\"content_en\":\"iug hriughr iurhi\",\"logo\":\"\\/uploads\\/images\\/logos\\/E-Site\\/50150604256.png\",\"meta_tags\":\"uighr iuh\",\"extirnal_code\":null,\"created_by\":1,\"deleted_at\":null,\"created_at\":\"2019-08-30 23:05:45\",\"updated_at\":\"2019-08-30 23:06:23\"}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:06:23', '2019-08-30 21:06:23'),
(3, 'dashboard_browse_setting', 'Browse Setting', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:06:23', '2019-08-30 21:06:23'),
(4, 'dashboard_browse_setting', 'Browse Setting', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:06:52', '2019-08-30 21:06:52'),
(5, 'dashboard_home_browse', 'Browse Home', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:07:01', '2019-08-30 21:07:01'),
(6, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":1,\"total\":1}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:07:03', '2019-08-30 21:07:03'),
(7, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":1,\"total\":1}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:10:10', '2019-08-30 21:10:10'),
(8, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:12:54', '2019-08-30 21:12:54'),
(9, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-30 21:19:32', '2019-08-30 21:19:32'),
(10, 'dashboard_home_browse', 'Browse Home', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 04:33:15', '2019-08-31 04:33:15'),
(11, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 04:33:20', '2019-08-31 04:33:20'),
(12, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:01:25', '2019-08-31 05:01:25'),
(13, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:02:34', '2019-08-31 05:02:34'),
(14, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/en\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/en\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/en\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:02:42', '2019-08-31 05:02:42'),
(15, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/en\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/en\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/en\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:49:31', '2019-08-31 05:49:31'),
(16, 'dashboard_home_browse', 'Browse Home', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:49:38', '2019-08-31 05:49:38'),
(17, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:49:57', '2019-08-31 05:49:57'),
(18, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:50:02', '2019-08-31 05:50:02'),
(19, 'dashboard_export_wating_list', 'Export Waiting List', '[{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"address_ar\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"address_en\":\"Hafar Al Batin\",\"phone\":\"520\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\"},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"address_ar\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"address_en\":\"Hafar Al Batin\",\"phone\":\"520\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\"},{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"address_ar\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"address_en\":\"Hafar Al Batin\",\"phone\":\"520\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\"}]', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:51:07', '2019-08-31 05:51:07'),
(20, 'dashboard_browse_wating_list', 'Waiting List', '{\"current_page\":1,\"data\":[{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\",\"updated_at\":\"2019-08-30 23:12:48\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\",\"updated_at\":\"2019-08-30 23:10:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}},{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"phone\":\"520\",\"address\":47,\"status\":\"not_read\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\",\"updated_at\":\"2019-08-30 23:03:11\",\"address_info\":{\"id\":47,\"nameAr\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"nameEn\":\"Hafar Al Batin\",\"provinceId\":13,\"deleted_at\":null,\"created_at\":null,\"updated_at\":null}}],\"first_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"from\":1,\"last_page\":1,\"last_page_url\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists?page=1\",\"next_page_url\":null,\"path\":\"http:\\/\\/localhost\\/Metrica\\/public\\/ar\\/admin\\/wating_lists\",\"per_page\":10,\"prev_page_url\":null,\"to\":3,\"total\":3}', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:51:32', '2019-08-31 05:51:32'),
(21, 'dashboard_export_wating_list', 'Export Waiting List', '[{\"id\":1,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"address_ar\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"address_en\":\"Hafar Al Batin\",\"phone\":\"520\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:03:11\"},{\"id\":2,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"address_ar\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"address_en\":\"Hafar Al Batin\",\"phone\":\"520\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:10:11\"},{\"id\":3,\"name\":\"amr Muhamed\",\"email\":\"amrmuhamed9@gmail.com\",\"address_ar\":\"\\u062d\\u0641\\u0631 \\u0627\\u0644\\u0628\\u0627\\u0637\\u0646\",\"address_en\":\"Hafar Al Batin\",\"phone\":\"520\",\"type\":\"user\",\"created_at\":\"2019-08-30 23:12:48\"}]', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:51:35', '2019-08-31 05:51:35'),
(22, 'dashboard_home_browse', 'Browse Home', 'null', 1, '156.218.68.126', 'Linux,Opera63.0.3368.43', 'Egypt, Alexandria, Alexandria', '31.2018', '29.9158', 'host-156.218.126.68-static.tedata.net', NULL, '2019-08-31 05:56:14', '2019-08-31 05:56:14');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_ar` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_en` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extirnal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title_ar`, `title_en`, `content_ar`, `content_en`, `logo`, `meta_tags`, `extirnal_code`, `created_by`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'موقع الكتروني', 'E-Site', 'iohgu hiuhgi', 'iug hriughr iurhi', '/uploads/images/logos/E-Site/50150604256.png', 'uighr iuh', NULL, 1, NULL, '2019-08-30 21:05:45', '2019-08-30 21:06:23');

-- --------------------------------------------------------

--
-- Table structure for table `setting_addresses`
--

CREATE TABLE `setting_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `address_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_emails`
--

CREATE TABLE `setting_emails` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_mail_provider_infos`
--

CREATE TABLE `setting_mail_provider_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `MAIL_DRIVER` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'SMTP',
  `MAIL_HOST` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'mail.amr.rmal.com.sa',
  `MAIL_port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '587',
  `MAIL_USERNAME` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'development@amr.rmal.com.sa',
  `MAIL_PASSWORD` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ';Rvc?uyCR!NH',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_mail_provider_infos`
--

INSERT INTO `setting_mail_provider_infos` (`id`, `setting_id`, `MAIL_DRIVER`, `MAIL_HOST`, `MAIL_port`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'SMTP', 'mail.basma-hr.com', '587', 'info@basma-hr.com', 'Ch{;30oL}][=', NULL, '2019-08-28 13:52:50', '2019-08-28 13:52:50');

-- --------------------------------------------------------

--
-- Table structure for table `setting_phones`
--

CREATE TABLE `setting_phones` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_social_media`
--

CREATE TABLE `setting_social_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/icon.png',
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_watsapps`
--

CREATE TABLE `setting_watsapps` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `whatsapp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `gander` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_user` enum('user','admin') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('not_verify','active','suspended','deactive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspended_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deactive_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/avatar.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `phone`, `address`, `lat`, `long`, `city_id`, `gander`, `type_user`, `status`, `suspended_reason`, `deactive_reason`, `image`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'amr', 'muhamed', 'amrmuhamed9@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'male', 'admin', 'active', NULL, NULL, 'img/avatar.png', '$2y$10$5qU7fjq1NLJvN6U7Wk3zie1Nv0gvib91E1Rcztfcm.ajAjxxn3oNO', NULL, NULL, '2019-08-30 21:04:56', '2019-08-30 21:04:56');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_lists_users`
--

CREATE TABLE `waiting_lists_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` int(10) UNSIGNED NOT NULL,
  `status` enum('not_read','read','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','company','other') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waiting_lists_users`
--

INSERT INTO `waiting_lists_users` (`id`, `name`, `email`, `phone`, `address`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'amr Muhamed', 'amrmuhamed9@gmail.com', '520', 47, 'not_read', 'user', '2019-08-30 21:03:11', '2019-08-30 21:03:11'),
(2, 'amr Muhamed', 'amrmuhamed9@gmail.com', '520', 47, 'not_read', 'user', '2019-08-30 21:10:11', '2019-08-30 21:10:11'),
(3, 'amr Muhamed', 'amrmuhamed9@gmail.com', '520', 47, 'not_read', 'user', '2019-08-30 21:12:48', '2019-08-30 21:12:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_resources`
--
ALTER TABLE `external_resources`
  ADD PRIMARY KEY (`id`),
  ADD KEY `external_resources_setting_id_foreign` (`setting_id`);

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
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reports_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_created_by_foreign` (`created_by`);

--
-- Indexes for table `setting_addresses`
--
ALTER TABLE `setting_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_addresses_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `setting_emails`
--
ALTER TABLE `setting_emails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_emails_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `setting_mail_provider_infos`
--
ALTER TABLE `setting_mail_provider_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_mail_provider_infos_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `setting_phones`
--
ALTER TABLE `setting_phones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_phones_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `setting_social_media`
--
ALTER TABLE `setting_social_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_social_media_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `setting_watsapps`
--
ALTER TABLE `setting_watsapps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_watsapps_setting_id_foreign` (`setting_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_city_id_foreign` (`city_id`);

--
-- Indexes for table `waiting_lists_users`
--
ALTER TABLE `waiting_lists_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `waiting_lists_users_address_foreign` (`address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3667;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `external_resources`
--
ALTER TABLE `external_resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_addresses`
--
ALTER TABLE `setting_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_emails`
--
ALTER TABLE `setting_emails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_mail_provider_infos`
--
ALTER TABLE `setting_mail_provider_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_phones`
--
ALTER TABLE `setting_phones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_social_media`
--
ALTER TABLE `setting_social_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_watsapps`
--
ALTER TABLE `setting_watsapps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waiting_lists_users`
--
ALTER TABLE `waiting_lists_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `external_resources`
--
ALTER TABLE `external_resources`
  ADD CONSTRAINT `external_resources_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_addresses`
--
ALTER TABLE `setting_addresses`
  ADD CONSTRAINT `setting_addresses_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_emails`
--
ALTER TABLE `setting_emails`
  ADD CONSTRAINT `setting_emails_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_mail_provider_infos`
--
ALTER TABLE `setting_mail_provider_infos`
  ADD CONSTRAINT `setting_mail_provider_infos_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_phones`
--
ALTER TABLE `setting_phones`
  ADD CONSTRAINT `setting_phones_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_social_media`
--
ALTER TABLE `setting_social_media`
  ADD CONSTRAINT `setting_social_media_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting_watsapps`
--
ALTER TABLE `setting_watsapps`
  ADD CONSTRAINT `setting_watsapps_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `waiting_lists_users`
--
ALTER TABLE `waiting_lists_users`
  ADD CONSTRAINT `waiting_lists_users_address_foreign` FOREIGN KEY (`address`) REFERENCES `cities` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
