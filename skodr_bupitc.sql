-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2020 at 07:54 AM
-- Server version: 10.1.44-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skodr_ducc`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achiever` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achiever_bio` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievement_date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `title`, `desc`, `achiever`, `achiever_bio`, `achievement_date`, `image`, `category`, `created_at`, `updated_at`) VALUES
(10, 'বিতর্ক প্রতিযোগিতায় প্রথম পুরস্কার', 'এছাড়া জাহাঙ্গীরনগর বিশ্ববিদ্যালয়, জগন্নাথ বিশ্ববিদ্যালয়, বুয়েট, কুয়েট, চুয়েট, জাতীয় কবি কাজী নজরুল ইসলাম বিশ্ববিদ্যালয়, বাংলাদেশ কৃষি বিশ্ববিদ্যালয়, শের-ই-বাংলা কৃষি বিশ্ববিদ্যালয়, মিলিটারি ইনস্টিটিউট অফ সাইন্স এন্ড টেকনোলজি, ব্র্যাক ইউনিভার্সিটি, নর্থ সাউথ ইউনিভার্সিটি, ইস্ট ওয়েস্ট ইউনিভার্সিটিসহ দেশের বিভিন্ন পাবলিক ও প্রাইভেট বিশ্ববিদ্যালয় কর্তৃক আয়োজিত বিভিন্ন আন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক অনুষ্ঠান ও প্রতিযোগিতায় এই সংগঠনের সদস্যরা নিয়মিত সাংস্কৃতিক পরিবেশনায় অংশগ্রহণের সুযোগ পায়।', 'রায়হান খান', 'এছাড়াও ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীদের প্রতিভাকে বিকশিত করার লক্ষ্যে দেশের প্রখ্যাত শিল্পীদের দ্বারা আবৃত্তি, উপস্থাপনা, নৃত্যবিষয়ক বিভিন্ন কর্মশালারও ইতোমধ্যে আয়োজন করা হয়েছে। প্রতি বছর প্রকাশিত হচ্ছে বিশ্ববিদ্যালয়ের শিক্ষক, শিক্ষার্থী এবং দেশের সাংস্কৃতিক পরিমণ্ডলে বিদগ্ধজনের রচনা সংবলিত ক্রোড়পত্র ‘রঙ’।', '2019-07-12', '309707890.jpg', 'বিতর্ক', '2019-07-24 01:27:35', '2019-07-24 01:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `desc`, `posted_by`, `image`, `created_at`, `updated_at`) VALUES
(10, 'আমাদের প্রথম অর্জন', 'প্রতিষ্ঠার মাসখানেকের মধ্যে বাংলাদেশ ইউনিভার্সিটি অফ প্রফেশনালস (বিইউপি) আয়োজিত আন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক প্রতিযোগিতায় অংশ নিয়ে সংগঠনটি ছিনিয়ে আনে চ্যাম্পিয়নের মুকুট। এরপর ২০১৬ সালে প্রথমবারের মতো আয়োজন করে ‘ঢাকা বিশ্ববিদ্যালয় বসন্ত উৎসব ১৪২২’; যা এযাবৎকালে ক্যাম্পাসে অনুষ্ঠিত বৃহত্তম সাংস্কৃতিক অনুষ্ঠানগুলোর মধ্যে অন্যতম। সংগঠনটি প্রতি বছর নিয়মিত আয়োজন করে চলেছে বসন্ত উৎসব, অন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক প্রতিযোগিতা, আন্তঃবিশ্ববিদ্যালয় আবৃত্তি উৎসব, নাট্য উৎসব, বঙ্গবন্ধুকে চিঠি লেখার প্রতিযোগিতা, স্বল্পদৈর্ঘ্য চলচ্চিত্র উৎসব, সঞ্জীব উৎসবের মতো সফল সব আয়োজন।', 'তাওহীদুল ইসলাম', '414295217.jpg', '2019-07-24 06:00:26', '2019-07-24 06:00:26'),
(11, 'আমরা করব জয়', 'আমার বাংলা নিয়ে প্রথম কাজ করবার সুযোগ তৈরি হয়েছিল অভ্র^ নামক এক যুগান্তকারী বাংলা সফ্‌টওয়্যার হাতে পাবার মধ্য দিয়ে। এর পর একে একে বাংলা উইকিপিডিয়া, ওয়ার্ডপ্রেস বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে।', 'রাতুল আহমেদ', '619905251.jpg', '2019-07-24 18:49:16', '2019-07-24 18:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(15000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `desc`, `image`, `event_date`, `event_time`, `created_at`, `updated_at`) VALUES
(15, 'বসন্ত বরণ', 'জন্মলগ্ন থেকেই বিভিন্ন সাংস্কৃতিক কর্মকাণ্ডে অংশগ্রহণের মাধ্যমে চলতে থাকে ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের অগ্রযাত্রা। প্রতিষ্ঠার মাসখানেকের মধ্যে বাংলাদেশ ইউনিভার্সিটি অফ প্রফেশনালস (বিইউপি) আয়োজিত আন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক প্রতিযোগিতায় অংশ নিয়ে সংগঠনটি ছিনিয়ে আনে চ্যাম্পিয়নের মুকুট। এরপর ২০১৬ সালে প্রথমবারের মতো আয়োজন করে ‘ঢাকা বিশ্ববিদ্যালয় বসন্ত উৎসব ১৪২২’; যা এযাবৎকালে ক্যাম্পাসে অনুষ্ঠিত বৃহত্তম সাংস্কৃতিক অনুষ্ঠানগুলোর মধ্যে অন্যতম। সংগঠনটি প্রতি বছর নিয়মিত আয়োজন করে চলেছে বসন্ত উৎসব, অন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক প্রতিযোগিতা, আন্তঃবিশ্ববিদ্যালয় আবৃত্তি উৎসব, নাট্য উৎসব, বঙ্গবন্ধুকে চিঠি লেখার প্রতিযোগিতা, স্বল্পদৈর্ঘ্য চলচ্চিত্র উৎসব, সঞ্জীব উৎসবের মতো সফল সব আয়োজন।', '486287807.jpg', '2019-07-17', '01:00:00', '2019-07-24 00:44:49', '2019-07-24 00:44:49'),
(16, 'পহেলা বৈশাখ', 'জন্মলগ্ন থেকেই বিভিন্ন সাংস্কৃতিক কর্মকাণ্ডে অংশগ্রহণের মাধ্যমে চলতে থাকে ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের অগ্রযাত্রা। প্রতিষ্ঠার মাসখানেকের মধ্যে বাংলাদেশ ইউনিভার্সিটি অফ প্রফেশনালস (বিইউপি) আয়োজিত আন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক প্রতিযোগিতায় অংশ নিয়ে সংগঠনটি ছিনিয়ে আনে চ্যাম্পিয়নের মুকুট। এরপর ২০১৬ সালে প্রথমবারের মতো আয়োজন করে ‘ঢাকা বিশ্ববিদ্যালয় বসন্ত উৎসব ১৪২২’; যা এযাবৎকালে ক্যাম্পাসে অনুষ্ঠিত বৃহত্তম সাংস্কৃতিক অনুষ্ঠানগুলোর মধ্যে অন্যতম। সংগঠনটি প্রতি বছর নিয়মিত আয়োজন করে চলেছে বসন্ত উৎসব, অন্তঃবিশ্ববিদ্যালয় সাংস্কৃতিক প্রতিযোগিতা, আন্তঃবিশ্ববিদ্যালয় আবৃত্তি উৎসব, নাট্য উৎসব, বঙ্গবন্ধুকে চিঠি লেখার প্রতিযোগিতা, স্বল্পদৈর্ঘ্য চলচ্চিত্র উৎসব, সঞ্জীব উৎসবের মতো সফল সব আয়োজন।', '1389501613.jpg', '2019-07-26', '02:00:00', '2019-07-24 00:46:59', '2019-07-24 00:46:59'),
(18, 'বসন্ত উৎসব ২০২৫', 'ঢাকা বিশ্ববিদ্যালয়ে তৃতীয়বারের মত ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদ (ডিইউসিএস) এর আয়োজনে ২৮ মার্চ ২০১৯ (১৪ চৈত্র ১৪২৫ বাংলা সন) টিএসসি প্রাঙ্গণে অনুষ্ঠিত হয় জুঁই নিবেদিত “ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদ বসন্ত উৎসব ১৪২৫”, উৎসব সহযোগী হিসেবে ছিল কুল, গার্ডিয়ান লাইফ ইন্সুরেন্স, ঢাকা বিশ্ববিদ্যালয় কেন্দ্রীয় ছাত্র সংসদ (ডাকসু) এবং ঢাকা বিশ্ববিদ্যালয় অ্যালামনাই অ্যাসোসিয়েশন।\r\nদুপুর ২ টায় উৎসবের উদ্বোধনী পর্বে প্রধান অতিথি হিসেবে উপস্থিত ছিলেন ঢাকা বিশ্ববিদ্যালয়ের মাননীয় উপাচার্য অধ্যাপক ড. মো. আখতারুজ্জামান। অনুষ্ঠানে বিশেষ অতিথি হিসেবে ছিলেন বাংলাদেশ আওয়ামী লীগের উপ-দপ্তর সম্পাদক ও মাননীয় প্রধানমন্ত্রীর বিশেষ সহকারী ব্যারিস্টার বিপ্লব বড়ুয়া ও ঢাকা বিশ্ববিদ্যালয় ছাত্র-শিক্ষক কেন্দ্রের উপদেষ্টা অধ্যাপক ড. সৌমিত্র শেখর। এছাড়াও উৎসবে সাংস্কৃতিক ক্ষেত্রে অবদানের জন্য বিশেষ সম্মাননা প্রদান করা হয় প্রখ্যাত নাট্য ব্যক্তিত্ব লাকী ইনাম, একাধারে আবৃত্তিশিল্পী, নাট্যাভিনেতা ও লেখক ড. ভাস্বর বন্দ্যোপাধ্যায় এবং গুণী নৃত্যশিল্পী শর্মিলা বন্দ্যোপাধ্যায়-কে। অনুষ্ঠানটির সভাপতিত্ব করেন ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের মডারেটর সাবরিনা  সুলতানা চৌধুরী। এছাড়াও মঞ্চে আরও উপস্থিত ছিলেন ডাকসুর সহঃ সাধারণ সম্পাদক সাদ্দাম হোসেন, ডাকসুর সংস্কৃতি সম্পাদক আসিফ তালুকদার, ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের সভাপতি রাগীব রহমান এবং সংগঠনের সাধারণ সম্পাদক ফয়সাল মাহমুদ। দিনব্যাপী এই আয়োজনে ছিল নাগরদোলা, বানর নাচ, পুতুল নাচ, বায়োস্কোপ, মোরগ লড়াই, পুঁথিপাঠ, কীর্তন, টিয়া পাখির সাহায্যে ভাগ্য গণনাসহ ঐতিহ্যবাহী গ্রামীণ সংস্কৃতির বাহারি আয়োজন। ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীদের সাংস্কৃতিক পরিবেশনা ছাড়াও উৎসবের শেষ ভাগে কনসার্টে সঙ্গীত পরিবেশন করে  ব্যান্ডদল ‘দলছুট’, ‘গানকবি’ এবং ‘কৃষ্ণপক্ষ’।', '305545774.jpeg', '2019-03-28', '14:00:00', '2019-07-27 19:38:07', '2019-07-27 19:38:07'),
(19, '\"ঈশান\" বরণ', 'প্রতি বছরের ন্যায় এবারও ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদ নতুন সদস্য সংগ্রহের পর তাদেরকে সাদরে বরণ করে নিতে যাচ্ছে। সংগঠনের নতুন ব্যাচ \"ঈশান\"-কে বরণ করে নেওয়ার প্রয়াশে ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদ ২৮ জুলাই ২০১৯, রবিবার, দুপুর সাড়ে ৩ টায় ঢাকা বিশ্ববিদ্যালয়ের ছাত্র-শিক্ষক মিলনায়তে একটি বর্ণাঢ্য নবীনবরণের আয়োজন করেছে। উৎসবমুখর এ আয়োজনের পুরোটা জুড়েই থাকছে নবীন-প্রবীণ সদস্যদের  অংশগ্রহণে নাচ-গান-অভিনয়-আবৃত্তি সহ নানা রকমের মনোমুগ্ধকর আয়োজন। এছাড়াও এদিন সংগঠনটির এক বছর মেয়াদি কার্যনির্বাহী কমিটি হস্তান্তরের মাধ্যমে নতুন কমিটির ঘোষণা দেওয়া হবে।', '364700657.jpg', '2019-07-28', '15:30:00', '2019-07-27 19:53:09', '2019-07-27 19:55:06');

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
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `subject`, `desc`, `date`, `time`, `created_at`, `updated_at`) VALUES
(22, 'zxc', 'ZXc', '2019-07-10', '02:00:00', '2019-07-24 07:41:11', '2019-07-24 07:41:11'),
(23, 'adsf', 'sdff', '2019-07-04', '01:00:00', '2019-07-24 07:41:21', '2019-07-24 07:41:21'),
(24, 'asdf', 'asdf', '2019-07-17', '01:00:00', '2019-07-24 18:52:45', '2019-07-24 18:52:45'),
(25, 'sdf', 'sdf', '2019-07-18', '01:00:00', '2019-07-25 12:23:24', '2019-07-25 12:23:24'),
(26, 'asdf', 'asdf', '2019-07-11', '01:00:00', '2019-07-25 12:24:17', '2019-07-25 12:24:17'),
(27, 'asdf', 'wer', '2019-07-18', '01:00:00', '2019-07-25 13:48:12', '2019-07-25 13:48:12'),
(28, 'dsaf', 'asdf', '2019-07-11', '01:00:00', '2019-07-25 13:48:48', '2019-07-25 13:48:48'),
(29, 'nsdf', 'lskdjf', '2019-01-01', '01:00:00', '2019-07-25 14:08:02', '2019-07-25 14:08:02'),
(30, 'New Mail', 'This is the description.', '2019-07-12', '01:00:00', '2019-07-25 14:14:07', '2019-07-25 14:14:07'),
(31, 'New Mail', 'This is the description.', '2019-07-12', '01:00:00', '2019-07-25 14:14:44', '2019-07-25 14:14:44'),
(32, 'Mail SUbject', 'Thekd', '2019-01-01', '01:00:00', '2019-07-25 14:23:16', '2019-07-25 14:23:16'),
(33, 'asdf', 'asdf', '2019-01-01', '01:00:00', '2019-07-25 17:40:17', '2019-07-25 17:40:17'),
(34, 'asdf', 'adsf', '2019-01-01', '01:00:00', '2019-07-25 17:41:06', '2019-07-25 17:41:06'),
(35, 'ratul', 'ratul', '2019-01-01', '01:00:00', '2019-07-25 17:41:27', '2019-07-25 17:41:27'),
(36, 'abc', 'aldskf', '2019-01-01', '01:00:00', '2019-07-25 17:42:19', '2019-07-25 17:42:19'),
(37, 'ewr', 'ewr', '2019-01-01', '01:00:00', '2019-07-25 17:43:04', '2019-07-25 17:43:04'),
(38, 'first cron', 'theis is', '2019-01-01', '13:00:00', '2019-07-25 17:53:27', '2019-07-25 17:53:27'),
(39, 'running', 'ljsdf', '2019-01-01', '01:00:00', '2019-07-25 18:03:36', '2019-07-25 18:03:36'),
(40, 'asdf', 'asdfew', '2019-01-01', '01:00:00', '2019-07-25 18:13:57', '2019-07-25 18:13:57'),
(41, 'new email', 'ndlskf', '2019-01-01', '01:00:00', '2019-07-25 18:24:10', '2019-07-25 18:24:10'),
(42, 'last in', 'lkdj', '2019-01-01', '01:00:00', '2019-07-26 15:02:42', '2019-07-26 15:02:42'),
(43, 'again', 'lkajsf', '2019-01-01', '01:00:00', '2019-07-26 15:03:31', '2019-07-26 15:03:31'),
(44, 'sk abir testing', 'hello frob abir', '2019-07-30', '09:46:00', '2019-07-28 07:47:03', '2019-07-28 07:47:03'),
(45, 'Test', 'we are testingb', '2019-08-01', '06:33:00', '2019-08-01 04:33:39', '2019-08-01 04:33:39');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `current_address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_address` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_district` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_roll` int(11) NOT NULL,
  `designation` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievement` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `phone`, `blood_group`, `current_address`, `permanent_address`, `home_district`, `department`, `department_roll`, `designation`, `biography`, `skills`, `achievement`, `image`, `club_id`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Istiak Ahamed', 'sifatistiak@gmail.com', '01929717612', 'A+', '39/1A, NONDOLAL DATTA LANE, LUXMIBAZAR, SUTRAPUR', 'LUXMIBAZAR, SUTRAPUR', 'Q', 'Q', 4, 'General Member', 'Xx', 'W', 'Q', '2139729856.png', 'DUCC-12', 1, '2019-08-01 04:31:19', '2019-08-01 04:31:37'),
(11, 'Sk Abir', 'skabir.ice@gmail.com', '01750726094', 'A+', 'House#63, Road#6, Block-E, Pallabi, Mirpur, Dhaka-1216', 'Rajshahi', 'Dhaka', 'Web Devj', 12, 'Executive Member', 'uishjsk bio', 'skills', 'gjgjk', '1395605500.jpg', 'DUCC-11', 1, '2019-07-28 07:41:46', '2019-07-28 07:44:17'),
(9, 'সাদিয়া ইসলাম', 'sadia@gmail.com', '01526989856', 'A+', 'মহাখালী ঢাকা', 'মহাখালী ঢাকা', 'ঢাকা', 'BBA', 16588965, 'General Member', 'আমি একজন ছাত্রী', 'আমি একজন ছাত্রী', 'আমি একজন ছাত্রী', '75573076.jpg', 'DUCC-9', 1, '2019-07-24 11:32:42', '2019-07-24 11:33:07'),
(10, 'তাওহীদুল ইসলাম', 'touhedulislam46@gmail.com', '01833996321', 'A+', 'বাসাবো ঢাকা', 'বাসাবো ঢাকা', 'ঢাকা', 'ICT', 16588965, 'General Member', 'জন্মলগ্ন থেকেই বিভিন্ন সাংস্কৃতিক কর্মকাণ্ডে অংশগ্রহণের মাধ্যমে চলতে থাকে ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের জন্মলগ্ন থেকেই বিভিন্ন সাংস্কৃতিক কর্মকাণ্ডে অংশগ্রহণের মাধ্যমে চলতে থাকে ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের জন্মলগ্ন থেকেই বিভিন্ন সাংস্কৃতিক কর্মকাণ্ডে অংশগ্রহণের মাধ্যমে চলতে থাকে ঢাকা বিশ্ববিদ্যালয় সাংস্কৃতিক সংসদের', 'গান নাচ', 'গান নাচ', '853599485.jpg', 'DUCC-10', 1, '2019-07-25 14:05:55', '2019-07-25 14:05:55');

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
(4, '2019_07_12_012428_create_events_table', 2),
(7, '2019_07_12_041049_create_achievements_table', 3),
(8, '2019_07_12_050832_create_notices_table', 4),
(9, '2019_07_12_053123_create_testimonials_table', 5),
(10, '2019_07_12_055545_create_meetings_table', 6),
(11, '2019_07_12_082352_create_members_table', 7),
(12, '2019_07_12_140120_create_jobs_table', 8),
(13, '2019_07_16_033611_create_blogs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `posted_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `desc`, `date`, `posted_by`, `notice_from`, `created_at`, `updated_at`) VALUES
(4, 'আগামীকাল আলোচনা সভা', 'এছাড়াও ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীদের প্রতিভাকে বিকশিত করার লক্ষ্যে দেশের প্রখ্যাত শিল্পীদের দ্বারা আবৃত্তি, উপস্থাপনা, নৃত্যবিষয়ক বিভিন্ন কর্মশালারও ইতোমধ্যে আয়োজন করা হয়েছে। প্রতি বছর প্রকাশিত হচ্ছে বিশ্ববিদ্যালয়ের শিক্ষক, শিক্ষার্থী এবং দেশের সাংস্কৃতিক পরিমণ্ডলে বিদগ্ধজনের রচনা সংবলিত ক্রোড়পত্র ‘রঙ’।', '2019-07-17', 'জুনায়েদ খান', 'সাব্বির আহমেদ', '2019-07-24 01:35:27', '2019-07-24 01:35:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$4aEZRPNlrKkqB/aooVJBWu3IqRu9dI3f3R.3fBxEX84l0mwmqXScO', '2019-07-11 08:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(10, 'জুনায়েদ আহমেদ পলক', 'প্রতিমন্ত্রী, তথ্য ও যোগাযোগ প্রযুক্তি মন্ত্রণালয়,', 'ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীদের মনে শুদ্ধ বাংলা সংস্কৃতি চেতনার জন্ম দেয়া, তাদের সুস্থ ও রুচিশীল সংস্কৃতিচর্চার একটি সমন্বিত প্ল্যাটফর্ম তৈরি করা, বিভিন্ন সাংস্কৃতিক অনুষ্ঠান আয়োজনের মাধ্যমে আমাদের রুচিশীল সংস্কৃতিকে তুলে ধরা, স্থানীয়-জাতীয়-আন্তর্জাতিক অঙ্গণে ঢাকা বিশ্ববিদ্যালয়ের প্রতিনিধিত্ব করা ইত্যাদি', '1953011614.jpg', '2019-07-24 01:42:48', '2019-07-24 01:42:48'),
(11, 'অধ্যাপক ড. মো. আখতারুজ্জামান', 'উপাচার্য, ঢাকা বিশ্ববিদ্যালয়', 'ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীদের মনে শুদ্ধ বাংলা সংস্কৃতি চেতনার জন্ম দেয়া, তাদের সুস্থ ও রুচিশীল সংস্কৃতিচর্চার একটি সমন্বিত প্ল্যাটফর্ম তৈরি করা, বিভিন্ন সাংস্কৃতিক অনুষ্ঠান আয়োজনের মাধ্যমে আমাদের রুচিশীল সংস্কৃতিকে তুলে ধরা, স্থানীয়-জাতীয়-আন্তর্জাতিক অঙ্গণে ঢাকা বিশ্ববিদ্যালয়ের প্রতিনিধিত্ব করা ইত্যাদি', '859613637.jpg', '2019-07-24 01:43:52', '2019-07-24 01:43:52'),
(13, 'মফিজুর রহমান', 'অধ্যাপক, গণযোগাযোগ ও সাংবাদিকতা বিভাগ, ঢাকা বিশ্ববিদ্যালয়', 'প্রতি বছর একটি নির্দিষ্ট সময়ে ঢাকা বিশ্ববিদ্যালয়ের প্রথম ও দ্বিতীয় বর্ষের শিক্ষার্থীদের সংগঠনটির সদস্য হিসেবে যুক্ত হওয়ার সুযোগ থাকে। মহান মুক্তিযুদ্ধ ও অসাম্প্রদায়িক চেতনায় বিশ্বাসী, প্রগতিশীল ও সংস্কৃতিমনা ঢাবি শিক্ষার্থীরা সংগঠনটির সদস্য হিসেবে কাজ করার সুযোগ পায়।', '1053799520.jpg', '2019-07-24 01:56:48', '2019-07-24 01:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$LWrfC88j0eFSbnRxUq7hMuExjhV3w.Icm2RdIazFddsqXmU4sS7bW', 'EzYr3EpeAijfDIy9VC0qp4cbYxXoIxybED5CQVOGXTNfJW0XxnaBEpjrLGmk', '2019-07-11 11:57:39', '2019-07-11 23:16:05'),
(3, 'Admin2', 'admin2@admin.com', NULL, '$2y$10$oe71P/GYo0e0ybNr7eGWAePrZ4ukleBSKsvbZ2rrms9TnGJbeTqx2', NULL, '2019-07-12 13:19:07', '2019-07-12 13:19:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`(191));

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
