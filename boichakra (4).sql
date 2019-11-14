-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 02:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boichakra`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `writer_id` int(11) DEFAULT NULL,
  `book_category_id` int(11) DEFAULT NULL,
  `publisher_id` int(11) DEFAULT NULL,
  `book_genre_id` int(11) DEFAULT NULL,
  `book_language_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `book_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_cover` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hit_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `circle_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(4) NOT NULL DEFAULT 1,
  `assigned` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `writer_id`, `book_category_id`, `publisher_id`, `book_genre_id`, `book_language_id`, `user_id`, `book_name`, `book_details`, `book_cover`, `book_video`, `hit_count`, `circle_count`, `verified`, `assigned`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 4, 1, 7, 7, 1, 'Hottapuri Feluda', '<h3 class=\"f5 cl-orange mb16\">HISTORY, PURPOSE AND USAGE</h3>\r\n<p class=\"f4 cl-white mt0 mb16\"><em>Lorem ipsum</em>, or&nbsp;<em>lipsum</em>&nbsp;as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s&nbsp;<em>De Finibus Bonorum et Malorum</em>&nbsp;for use in a type specimen book. It usually begins with:</p>\r\n<blockquote class=\"page-section__blockquote\">&ldquo;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&rdquo;</blockquote>\r\n<p class=\"f4 cl-white mv16\">The purpose of&nbsp;<em>lorem ipsum</em>&nbsp;is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn\'t distract from the layout. A practice not without&nbsp;<a title=\"Controversy in the Design World\" href=\"https://loremipsum.io/#controversy\">controversy</a>, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>\r\n<p class=\"f4 cl-white mv16\">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it\'s seen all around the web; on templates, websites, and stock designs. Use our&nbsp;<a title=\"Lorem Ipsum Generator\" href=\"https://loremipsum.io/#generator\">generator</a>&nbsp;to get your own, or read on for the authoritative history of&nbsp;<em>lorem ipsum</em>.</p>', 'upload/front/book/book_cover/365211.jpg', NULL, NULL, NULL, 1, 0, 1, '2019-11-11 05:30:09', '2019-11-11 05:30:09'),
(2, 1, 5, 4, 1, 7, 7, 1, 'Ma', '<p>আজাদ ছিল তাঁর মায়ের একমাত্র সন্তান। আজাদের বাবা দ্বিতীয় বিয়ে করায় বালক আজাদকে নিয়ে তার মা স্বামীর গৃহ-অর্থ-বিত্ত ত্যাগ করে আলাদা হয়ে যান। মা বড় কষ্ট করে ছেলেকে লেকাপড়া করান। আজাদ এমএ পাস করে। এই সময় দেশে শুরু হয় মুক্তিযুদ্ধ। আজাদের বন্ধুরা যোগ দেয় ঢাকার আরবান গেরিলা দলে। আজাদ মাকে বলে, আমিও যুদ্ধে যাব। মা তাকে অনুমতি দেন। ছেলে যুদ্ধে যায়। ১৯৭১ সালের ৩০ আগস্ট একরাতে ঢাকার অনেক ক&rsquo;টা মুক্তিযোদ্ধা-নিবাসে হামলা চালায় পাকিস্তানী সৈন্যরা, আরো অনেকের সঙ্গে ধরা পড়ে রুমী, বদি, আলতাফ মাহমুদ, জুয়েল এবং আজাদ। আজাদের ওপরে পাকিস্তানীরা প্রচন্ড অত্যাচার চালিয়ে কথা বের করতে পারে না। তখন তার মাকে বলা হয়, ছেলে যদি সবার নাম-ধাম ইত্যাদি বলে দেয়, তাকে ছেড়ে দেওয়া হবে। আজাদ বলে, মা দুদিন ভাত খাই না, ভাত নিয়ে এসো। মা পরের দিন ভাত নিয়ে হাজির হন চন্দিশিবিরে, কিন্তু ছেলের দেখা আর মেলে না। আর কোনোদিনও ছেলে তাঁর ফিরে আসে নাই আর এই মা আর কোনোদিনও জীবনে ভাত খান নাই। যুদ্ধের ১৪ বছর পরে মা মারা যান, নিঃস্ব, রিক্ত-বেশে। মুক্তিযোদ্ধারা তাঁকে কবরে শায়িত করলে আকাশ থেকে ঝিরঝির করে ঝরতে থাকে বৃষ্টি।</p>', 'upload/front/book/book_cover/675551.jpg', NULL, NULL, NULL, 1, 0, 1, '2019-11-11 06:01:57', '2019-11-11 06:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `book_categories`
--

CREATE TABLE `book_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_categories`
--

INSERT INTO `book_categories` (`id`, `category_id`, `book_category_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 'Uponnas', 1, '2019-11-06 03:59:24', '2019-11-11 03:55:15'),
(5, 1, 'Golpo', 1, '2019-11-12 06:38:50', '2019-11-12 06:38:50'),
(6, 1, 'Kobita', 1, '2019-11-12 06:38:56', '2019-11-12 06:38:56'),
(7, 1, 'Natok', 1, '2019-11-12 06:39:00', '2019-11-12 06:39:00'),
(8, 1, 'Sports', 0, '2019-11-12 06:39:20', '2019-11-13 05:38:41'),
(9, 1, 'Medical', 1, '2019-11-12 06:40:17', '2019-11-12 06:40:17'),
(10, 1, 'Health', 1, '2019-11-12 06:40:25', '2019-11-12 06:40:25'),
(11, 1, 'Academic Text', 1, '2019-11-12 06:40:33', '2019-11-12 06:40:33'),
(12, 1, 'History', 1, '2019-11-12 06:41:09', '2019-11-12 06:41:09'),
(13, 1, 'Law', 1, '2019-11-13 05:39:57', '2019-11-13 05:39:57'),
(14, 1, 'Comics', 1, '2019-11-13 05:40:07', '2019-11-13 05:40:07');

-- --------------------------------------------------------

--
-- Table structure for table `book_genres`
--

CREATE TABLE `book_genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_genre_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_genres`
--

INSERT INTO `book_genres` (`id`, `category_id`, `book_genre_name`, `status`, `created_at`, `updated_at`) VALUES
(6, 1, 'Fiction', 0, '2019-11-06 07:51:01', '2019-11-06 08:13:08'),
(7, 1, 'Noval', 1, '2019-11-06 07:51:06', '2019-11-06 07:51:06'),
(9, 1, 'Poetry', 1, '2019-11-06 07:51:17', '2019-11-06 07:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `book_images`
--

CREATE TABLE `book_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_images`
--

INSERT INTO `book_images` (`id`, `category_id`, `book_id`, `book_image`, `status`, `created_at`, `updated_at`) VALUES
(20, 1, 1, 'upload/front/book/book_image/987361.jpg', 1, '2019-11-11 05:30:10', '2019-11-11 05:30:10'),
(21, 1, 1, 'upload/front/book/book_image/386951.jpg', 1, '2019-11-11 05:30:10', '2019-11-11 05:30:10'),
(22, 1, 2, 'upload/front/book/book_image/580251.jpg', 1, '2019-11-11 06:01:57', '2019-11-11 06:01:57'),
(23, 1, 2, 'upload/front/book/book_image/696301.jpg', 1, '2019-11-11 06:01:57', '2019-11-11 06:01:57'),
(24, 1, 2, 'upload/front/book/book_image/680051.jpg', 1, '2019-11-11 06:01:57', '2019-11-11 06:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `book_languages`
--

CREATE TABLE `book_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_language_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_languages`
--

INSERT INTO `book_languages` (`id`, `category_id`, `book_language_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'Hindi', 1, '2019-11-06 06:43:52', '2019-11-06 06:43:52'),
(5, 1, 'chinies', 0, '2019-11-06 06:44:54', '2019-11-14 02:47:29'),
(6, 1, 'French', 0, '2019-11-06 07:07:17', '2019-11-06 08:12:59'),
(7, 1, 'Bangla', 1, '2019-11-07 02:16:10', '2019-11-07 02:16:10'),
(8, 1, 'Arabi', 1, '2019-11-14 01:40:25', '2019-11-14 02:47:42'),
(9, 1, 'Farsi', 0, '2019-11-14 01:40:29', '2019-11-14 02:13:38'),
(10, 1, 'Farsi', 1, '2019-11-14 01:40:32', '2019-11-14 01:40:32'),
(11, 1, 'Singholi', 1, '2019-11-14 01:40:36', '2019-11-14 01:40:36'),
(12, 1, 'Japani', 1, '2019-11-14 01:40:42', '2019-11-14 01:40:42'),
(13, 1, 'German', 0, '2019-11-14 01:40:48', '2019-11-14 01:41:24'),
(14, 1, 'nepali', 1, '2019-11-14 01:41:12', '2019-11-14 01:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `book_publishers`
--

CREATE TABLE `book_publishers` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `publisher_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publisher_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_publishers`
--

INSERT INTO `book_publishers` (`id`, `category_id`, `publisher_name`, `publisher_image`, `publisher_details`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ananda Publishers', 'upload/front/book/publisher_image/774081.jpg', NULL, 1, '2019-11-06 01:10:18', '2019-11-11 03:56:21'),
(5, 1, 'Sheab Prokasoni', 'upload/front/book/publisher_image/909521.jpg', NULL, 1, '2019-11-06 01:25:36', '2019-11-12 06:09:27'),
(6, 1, 'Bangla Academy', 'upload/front/book/publisher_image/261481.png', NULL, 0, '2019-11-06 01:26:51', '2019-11-14 00:59:48'),
(7, 1, 'Islamic Foundations', 'upload/front/book/publisher_image/251851.jpg', NULL, 1, '2019-11-06 01:32:04', '2019-11-12 06:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `book_requests`
--

CREATE TABLE `book_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_requests`
--

INSERT INTO `book_requests` (`id`, `user_id`, `book_id`, `category_id`, `message`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 1, 'I need this book for few days.', 0, '2019-11-12 03:04:22', '2019-11-12 03:04:22'),
(4, 3, 1, 1, 'Hello, Shamim I need this book.', 0, '2019-11-13 06:31:02', '2019-11-13 06:31:02');

-- --------------------------------------------------------

--
-- Table structure for table `book_tags`
--

CREATE TABLE `book_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `book_tag_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_tags`
--

INSERT INTO `book_tags` (`id`, `category_id`, `book_id`, `book_tag_name`, `status`, `created_at`, `updated_at`) VALUES
(31, 1, 1, 'hottapuri', 1, '2019-11-11 05:30:10', '2019-11-11 05:30:10'),
(32, 1, 1, 'feluda', 1, '2019-11-11 05:30:10', '2019-11-11 05:30:10'),
(33, 1, 2, 'ma', 1, '2019-11-11 06:01:57', '2019-11-11 06:01:57'),
(34, 1, 2, 'anisul haq', 1, '2019-11-11 06:01:57', '2019-11-11 06:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `book_writers`
--

CREATE TABLE `book_writers` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `writer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer_details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writer_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_writers`
--

INSERT INTO `book_writers` (`id`, `category_id`, `writer_name`, `writer_details`, `writer_image`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 'Mohammad Jafar Ikbal', 'মুহম্মদ জাফর ইকবাল (জন্মঃ ২৩ ডিসেম্বর ১৯৫২) হলেন একজন বাংলাদেশী লেখক, পদার্থবিদ ও শিক্ষাবিদ।তার পিতা মুক্তিযোদ্ধা শহীদ ফয়জুর রহমান আহমদ এবং মা আয়েশা আখতার খাতুন। বাবা ফয়জুর রহমান আহমদের পুলিশের চাকরির সুবাদে তার ছোটবেলা কেটেছে বাংলাদেশের বিভিন্ন জায়গায়। মুহম্মদ জাফর ইকবালের নাম আগে ছিল বাবুল।', 'upload/front/book/writer_image/597871.jpg', 1, '2019-11-05 00:51:23', '2019-11-11 03:52:19'),
(5, 1, 'Anisul Haque', 'আনিসুল হক - আনিসুল হক (জন্ম: মার্চ ৪, ১৯৬৫) একজন বাংলাদেশী কবি, লেখক, নাট্যকার ও সাংবাদিক। বর্তমানে তিনি বাংলাদেশের দৈনিক প্রথম আলোর সহযোগী সম্পাদক এবং কিশোর আলোর সম্পাদক পদে কর্মরত আছেন। মুক্তিযুদ্ধকালীন সময়ের সত্য ঘটনা নিয়ে তাঁর লেখা মা বইটি বেশ জনপ্রিয়। বাংলা ভাষার পাশাপাশি বইটি দিল্লী থেকে ইংরেজি ভাষায় এবং ভুবনেশ্বর থেকে উড়ে ভাষায় প্রকাশিত হয়েছে ।', 'upload/front/book/writer_image/400371.jpg', 1, '2019-11-05 01:08:30', '2019-11-06 08:09:33'),
(8, 1, 'Sottogit Ray', 'সত্যজিৎ রায় (জন্ম ২ মে, ১৯২১ – মৃত্যু ২৩ এপ্রিল, ১৯৯২) একজন ভারতীয় চলচ্চিত্র নির্মাতা ও বিংশ শতাব্দীর অন্যতম শ্রেষ্ঠ চলচ্চিত্র পরিচালক। কলকাতা শহরে সাহিত্য ও শিল্পের জগতে খ্যাতনামা এক বাঙালি পরিবারে তাঁর জন্ম হয়। তাঁর পূর্বপুরুষের ভিটা ছিল বাংলাদেশের কিশোরগঞ্জ জেলার কটিয়াদী উপজেলার মসূয়া গ্রামে। তিনি কলকাতার প্রেসিডেন্সি কলেজ ও শান্তিনিকেতনে রবীন্দ্রনাথ ঠাকুর প্রতিষ্ঠিত বিশ্বভারতী বিশ্ববিদ্যালয়ে পড়াশোনা করেন।', 'upload/front/book/writer_image/866171.jpg', 1, '2019-11-05 06:31:50', '2019-11-11 03:53:11'),
(10, 1, 'Kazi Nazrul Islam', 'বাংলাদেশে জাতীয় কবি কাজী নজরুল ইসলাম ১১ জ্যৈষ্ঠ ১৩০৬ বঙ্গাব্দে (২৪ মে ১৮৯৯ খ্রিস্টাব্দ) পশ্চিমবঙ্গের বর্ধমান জেলার আসানসোল মহকুমার চুরুলিয়া গ্রামে এক সম্রান্ত মুসলিম পরিবারে জন্মগ্রহণ করেন । তার পিতা কাজী ফকির আহমদ ও মাতা জাহেদা খাতুন। মাত্র আট বছর বয়সে তিনি পিতৃহীন হন ।', 'upload/front/book/writer_image/699771.jpg', 1, '2019-11-05 06:32:20', '2019-11-11 03:51:44'),
(12, 1, 'Humayun Ahmed', 'হুমায়ূন আহমেদ বিংশ শতাব্দীর বাঙালি জনপ্রিয় কথাসাহিত্যিকদের মধ্যে অন্যতম। তাঁকে বাংলাদেশের স্বাধীনতা পরবর্তী শ্রেষ্ঠ লেখক গণ্য করা হয়।সাবলীল ঘটনার বর্ননা আর সহজ ভাষায় লেখার কারণে হুমায়ুন আহমেদের বই এর তুলনা নেই। হুমায়ূন আহমেদ একাধারে ঔপন্যাসিক, ছোটগল্পকার, নাট্যকার এবং গীতিকার। বলা হয় আধুনিক বাংলা কল্পবিজ্ঞান সাহিত্যের তিনি পথিকৃৎ।', 'upload/front/book/writer_image/394091.jpg', 1, '2019-11-07 07:35:18', '2019-11-11 06:03:14');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Book', 1, '2019-11-03 18:00:00', '2019-11-03 18:00:00');

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
(3, '2019_11_03_094424_create_roles_table', 2),
(5, '2019_11_04_061934_create_categories_table', 3),
(6, '2019_11_04_062749_create_book_writers_table', 4),
(7, '2019_11_04_062846_create_books_table', 4),
(8, '2019_11_04_063003_create_book_publishers_table', 5),
(9, '2019_11_04_070541_create_book_genres_table', 5),
(10, '2019_11_04_070647_create_book_languages_table', 5),
(11, '2019_11_04_070725_create_book_tags_table', 5),
(12, '2019_11_04_102923_create_book_categories_table', 5),
(13, '2019_11_04_181221_create_admins_table', 5),
(15, '2019_11_07_075621_create_book_images_table', 6),
(16, '2019_11_11_122007_create_book_requests_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('shamimhcp@gmail.com', '$2y$10$XpFre3uEN/VoHXphswnY5ucvsb1I2VrZeHd15Ro4GHLQdWbwXswzW', '2019-11-12 08:32:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-11-02 18:00:00', '2019-11-02 18:00:00'),
(2, 'user', '2019-11-02 18:00:00', '2019-11-02 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_genres`
--
ALTER TABLE `book_genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_images`
--
ALTER TABLE `book_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_languages`
--
ALTER TABLE `book_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_publishers`
--
ALTER TABLE `book_publishers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_requests`
--
ALTER TABLE `book_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_tags`
--
ALTER TABLE `book_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_writers`
--
ALTER TABLE `book_writers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `book_writers_writer_name_unique` (`writer_name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book_genres`
--
ALTER TABLE `book_genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `book_images`
--
ALTER TABLE `book_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `book_languages`
--
ALTER TABLE `book_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book_publishers`
--
ALTER TABLE `book_publishers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `book_requests`
--
ALTER TABLE `book_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_tags`
--
ALTER TABLE `book_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `book_writers`
--
ALTER TABLE `book_writers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
