-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 11:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `dev_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `id` int(10) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'site',
  `name` varchar(100) NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='configuration settings of site';

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `type`, `name`, `value`) VALUES
(1, 'site', 'sitename', 'Mobi-Hub'),
(2, 'site', 'home_title', 'Welcome to Mobi-hub'),
(3, 'site', 'logo', 'static/images/uploads/mobi-hub.png'),
(4, 'site', 'default_user_status', '3'),
(5, 'site', 'phone', '+44 20 3105 6281'),
(7, 'site', 'email', 'dheeraj@mobi-hub.com'),
(8, 'site', 'home_text', 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan ti'),
(9, 'site', 'date_format', 'D d-m-Y'),
(10, 'site', 'sending_email', 'No-reply@mobi-hub.com'),
(11, 'site', 'sending_email_name', 'Mobi-Hub'),
(13, 'site', 'time_format', 'h:i A'),
(14, 'site', 'user_dp_image_path', 'static/uploads/app/user_dp/'),
(17, 'site', 'max_table_row_display', '20'),
(19, 'site', 'device_auth_key', 'user_auth_key'),
(20, 'site', 'date_time', 'M/d/Y h:i A'),
(21, 'site', 'post_image_path', 'static/uploads/app/post_image/'),
(22, 'site', 'soft_delete', '1'),
(23, 'site', 'user_default_avatar', 'static/images/placeholder/user_default.png'),
(24, 'site', 'auth_key', 'User-Auth-Token'),
(25, 'site', 'post_placeholder', 'static/images/placeholder/post_placeholder.jpg'),
(26, 'site', 'placeholder_sm', 'static/images/placeholder/bg_image_small.jpg'),
(27, 'site', 'facebook', 'https://www.facebook.com/Mobi-Hub-1650835908269057/'),
(28, 'site', 'twitter', 'https://twitter.com/mobihubtraders'),
(29, 'site', 'instagram', 'https://www.instagram.com/mobihubtraders/'),
(30, 'site', 'google_plus', 'http://google.com/mobi_hub'),
(31, 'site', 'address', '43 Street, London'),
(32, 'site', 'company_logo_photo', 'static/uploads/app/company_logo/'),
(33, 'site', 'group_logo_photo', 'static/uploads/app/group_logo/'),
(34, 'site', 'logo-app', 'static/front/images/app-icon-round-sm.png'),
(35, 'site', 'logo-wide', 'static/front/images/logo-mobi-hub-white.png'),
(36, 'site', 'max_image_upload', '3'),
(37, 'site', 'invoice_reference_key', 'MH-'),
(38, 'site', 'grading_img_path', 'static/uploads/app/grading_img/'),
(39, 'site', 'verification_mail', 'dheeraj@mobi-hub.com'),
(40, 'site', 'post_expire_days', '1'),
(41, 'site', 'post_reminder_days', '1'),
(42, 'site', 'url_apple_store', 'https://itunes.apple.com/us/app/mobi-hub/id1289626857?mt=8'),
(43, 'site', 'url_google_play', 'https://play.google.com/store/apps/details?id=com.egi.mobihub'),
(44, 'site', 'linkedin', 'https://www.linkedin.com/company/mobihub'),
(45, 'site', 'bucket_url', 'https://app-static-cdn.mobi-hub.com/'),
(46, 'site', 'bucket_name', 'staging.mobi-hub.com'),
(47, 'site', 'app_splash', 'static/front/images/logo-app-splash.png'),
(48, 'site', 'bucket_name', 'staging.mobi-hub.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;
