-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2019 at 05:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alaincms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactus_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `comments` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_slug` text NOT NULL,
  `event_url` text NOT NULL,
  `meta_tags` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `event_status` enum('draft','publish','unpublish') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `media_id` int(11) NOT NULL,
  `media_path` varchar(255) NOT NULL,
  `media_alt` varchar(100) NOT NULL,
  `media_type` enum('audio','document','image','video') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_title` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_announcements`
--

CREATE TABLE `news_announcements` (
  `na_id` int(11) NOT NULL,
  `na_title` varchar(255) NOT NULL,
  `na_content` text NOT NULL,
  `na_slug` text NOT NULL,
  `na_url` text NOT NULL,
  `na_type` enum('announcement','news') NOT NULL,
  `meta_tags` text NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_description` text NOT NULL,
  `na_status` enum('draft','publish','unpublish') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_url` text NOT NULL,
  `page_slug` text NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `meta_keywords` text NOT NULL,
  `meta_tags` text NOT NULL,
  `meta_description` text NOT NULL,
  `page_content` text NOT NULL,
  `page_status` enum('publish','unpublish','draft') NOT NULL DEFAULT 'publish',
  `page_banner` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_url`, `page_slug`, `page_title`, `meta_keywords`, `meta_tags`, `meta_description`, `page_content`, `page_status`, `page_banner`, `created_at`, `updated_at`) VALUES
(1, '', 'lorem-ipsum', 'Lorem Ipsum', '', '', '', 'PGRpdiBzdHlsZT0iYmFja2dyb3VuZDojZWVlZWVlO2JvcmRlcjoxcHggc29saWQgI2NjY2NjYztwYWRkaW5nOjVweCAxMHB4OyI+PHN0cm9uZz5Mb3JlbSBJcHN1bTwvc3Ryb25nPiBpcyBzaW1wbHkgZHVtbXkgdGV4dCBvZiB0aGUgcHJpbnRpbmcgYW5kIHR5cGVzZXR0aW5nIGluZHVzdHJ5LiBMb3JlbSBJcHN1bSBoYXMgYmVlbiB0aGUgaW5kdXN0cnkmIzM5O3Mgc3RhbmRhcmQgZHVtbXkgdGV4dCBldmVyIHNpbmNlIHRoZSAxNTAwcywgd2hlbiBhbiB1bmtub3duIHByaW50ZXIgdG9vayBhIGdhbGxleSBvZiB0eXBlIGFuZCBzY3JhbWJsZWQgaXQgdG8gbWFrZSBhIHR5cGUgc3BlY2ltZW4gYm9vay4gSXQgaGFzIHN1cnZpdmVkIG5vdCBvbmx5IGZpdmUgY2VudHVyaWVzLCBidXQgYWxzbyB0aGUgbGVhcCBpbnRvIGVsZWN0cm9uaWMgdHlwZXNldHRpbmcsIHJlbWFpbmluZyBlc3NlbnRpYWxseSB1bmNoYW5nZWQuIEl0IHdhcyBwb3B1bGFyaXNlZCBpbiB0aGUgMTk2MHMgd2l0aCB0aGUgcmVsZWFzZSBvZiBMZXRyYXNldCBzaGVldHMgY29udGFpbmluZyBMb3JlbSBJcHN1bSBwYXNzYWdlcywgYW5kIG1vcmUgcmVjZW50bHkgd2l0aCBkZXNrdG9wIHB1Ymxpc2hpbmcgc29mdHdhcmUgbGlrZSBBbGR1cyBQYWdlTWFrZXIgaW5jbHVkaW5nIHZlcnNpb25zIG9mIExvcmVtIElwc3VtLjwvZGl2Pg0K', 'publish', '', '2019-07-31 05:36:35', '2019-07-31 05:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `ss_id` int(11) NOT NULL,
  `ss_title` varchar(100) NOT NULL,
  `ss_value` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `last_logged` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `status`, `last_logged`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'active', '2019-07-31 12:57:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactus_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`media_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `news_announcements`
--
ALTER TABLE `news_announcements`
  ADD PRIMARY KEY (`na_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
  ADD PRIMARY KEY (`ss_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_announcements`
--
ALTER TABLE `news_announcements`
  MODIFY `na_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `ss_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
