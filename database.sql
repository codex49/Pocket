-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2020 at 12:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dominore_rewards`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_data`
--

CREATE TABLE `access_data` (
  `id` int(11) UNSIGNED NOT NULL,
  `accountId` int(11) UNSIGNED NOT NULL,
  `accessToken` varchar(32) COLLATE utf8_unicode_ci DEFAULT '',
  `clientId` int(11) UNSIGNED DEFAULT 0,
  `createAt` int(10) UNSIGNED DEFAULT 0,
  `removeAt` int(10) UNSIGNED DEFAULT 0,
  `u_agent` varchar(300) COLLATE utf8_unicode_ci DEFAULT '',
  `ip_addr` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `salt` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fullname` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `createAt` int(11) UNSIGNED DEFAULT 0,
  `u_agent` varchar(300) COLLATE utf8_unicode_ci DEFAULT '',
  `ip_addr` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `salt`, `password`, `fullname`, `createAt`, `u_agent`, `ip_addr`) VALUES
(1, 'admin', ',+.', '32aa2fd87338e241978c48ab319641bc', 'ahmed ziani', 1592943828, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` int(11) NOT NULL,
  `date` varchar(12) NOT NULL,
  `sessions` varchar(12) NOT NULL DEFAULT '0',
  `requests` varchar(12) NOT NULL DEFAULT '0',
  `completed` varchar(12) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `date`, `sessions`, `requests`, `completed`) VALUES
(1, '2020-06-23', '6', '0', '0'),
(2, '2020-06-24', '21', '0', '0'),
(3, '2020-06-25', '18', '0', '0'),
(4, '2020-06-26', '2', '0', '0'),
(5, '2020-06-27', '4', '0', '0'),
(6, '2020-06-29', '28', '0', '0'),
(7, '2020-07-04', '9', '0', '0'),
(8, '2020-07-06', '3', '0', '0'),
(9, '2020-07-07', '7', '0', '0'),
(10, '2020-07-08', '3', '0', '0'),
(11, '2020-07-09', '77', '0', '0'),
(12, '2020-07-10', '96', '0', '0'),
(13, '2020-07-16', '10', '0', '0'),
(14, '2020-07-17', '4', '0', '0'),
(15, '2020-07-18', '30', '0', '0'),
(16, '2020-07-19', '1', '0', '0'),
(17, '2020-07-21', '1', '0', '0'),
(18, '2020-07-22', '2', '0', '0'),
(19, '2020-09-05', '1', '0', '0'),
(20, '2020-09-16', '2', '0', '0'),
(21, '2020-09-21', '8', '0', '0'),
(22, '2020-09-22', '1', '0', '0'),
(23, '2020-09-23', '132', '0', '0'),
(24, '2020-09-24', '49', '0', '0'),
(25, '2020-09-25', '19', '0', '0'),
(26, '2020-09-27', '3', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `completed`
--

CREATE TABLE `completed` (
  `rid` int(11) NOT NULL,
  `request_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dev_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dev_man` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gift_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `req_amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points_used` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `completed`
--

INSERT INTO `completed` (`rid`, `request_from`, `dev_name`, `dev_man`, `gift_name`, `req_amount`, `points_used`, `date`, `status`, `username`, `note`) VALUES
(1, 'ahmed.ziani.90@gmail.com', 'Computer - Windows 10', 'Chrome 83.0.4103.106', 'Paypal', '$1 USD', '1000', '2020-06-23', 1, 'code49', 'added');

-- --------------------------------------------------------

--
-- Table structure for table `configuration`
--

CREATE TABLE `configuration` (
  `id` int(2) NOT NULL,
  `config_name` varchar(225) NOT NULL,
  `config_value` text NOT NULL,
  `api_status` varchar(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `configuration`
--

INSERT INTO `configuration` (`id`, `config_name`, `config_value`, `api_status`) VALUES
(1, 'APP_NAME', 'Pocket', '0'),
(2, 'APP_DESC', 'Money Making Script by DroidOXY', '0'),
(3, 'SITE_NAME', 'Dashboard', '0'),
(4, 'SITE_DESC', 'Money Making Script by DroidOXY', '0'),
(5, 'WEB_ROOT', 'http://localhost/dominoRewards/', '1'),
(6, 'SUPPORT_EMAIL', 'support@example.com', '1'),
(7, 'BASE', 'PCKT', '0'),
(8, 'VERSION', '3.7', '1'),
(9, 'INSTALL', '1', '0'),
(10, 'COMPANY_NAME', 'Example Company', '1'),
(11, 'COMPANY_SITE', 'http://localhost/dominoRewards/', '1'),
(12, 'SUPPORT_PHONE', '+1 123 456 7890', '1'),
(13, 'COMPANY_COUNTRY', 'USA', '1'),
(14, 'COMPANY_EMAIL', 'hello@example.com', '1'),
(15, 'FIREBASE_API_KEY', 'AIzaSyAv23NYMxosF535eF7kkWxs2Dv_FwdOGqo', '0'),
(16, 'INCOME_OVERVIEW', '1', '0'),
(17, 'INCOME_OVERVIEW_TITLE', '0', '0'),
(18, 'ADMIN_RATIO', '250', '0'),
(19, 'REFER_ACTIVE', '1', '1'),
(20, 'REFER_REWARD', '100', '1'),
(21, 'USER_RATIO', '1000', '0'),
(22, 'DAILY_ACTIVE', '1', '1'),
(23, 'DAILY_REWARD', '25', '1'),
(24, 'LAST_SAVE', '1595084697', '0'),
(25, 'LAST_ADMIN_ACCESS', '1601068230', '0'),
(26, 'PACKAGE_NAME', 'com.example.appname', '1'),
(27, 'ADMIN', '1', '0'),
(28, 'ADMIN_IMAGE', 'person-placeholder.jpeg', '0'),
(29, 'ACCESS_TOKEN', 'tm58pal17padDt70', '0'),
(30, 'ADMIN_NAME', 'John Doe', '0'),
(31, 'TRANSACTION_PREFIX', 'PCKT', '1'),
(32, 'TRANSACTION_CREDIT_PREFIX', 'CR010', '0'),
(33, 'TRANSACTION_DEBIT_PREFIX', 'DB010', '0'),
(34, 'APP_NAVBAR_ENABLE', '1', '1'),
(35, 'APP_TABS_ENABLE', '0', '1'),
(36, 'APP_DEBUG_MODE', '0', '1'),
(37, 'POLICY_ACTIVE', '1', '1'),
(38, 'APP_POLICY_URL', 'http://localhost/dominorewards/privacy', '1'),
(39, 'CONTACT_US_ACTIVE', '1', '1'),
(40, 'APP_CONTACT_US_URL', 'http://localhost/dominorewards/contact', '1'),
(41, 'RATE_APP_ACTIVE', '1', '1'),
(42, 'INSTRUCTIONS_ACTIVE', '1', '1'),
(43, 'SHARE_APP_ACTIVE', '1', '1'),
(44, 'APP_SHARE_TEXT', 'Hey Look, What a Wonderful App i have found.', '1'),
(45, 'CHECKIN_BONUS_TITLE', 'Daily Checkin Credit', '0'),
(46, 'REFERAL_BONUS_TITLE', 'Invitation Bonus', '0'),
(47, 'REFERER_BONUS_TITLE', 'Referral Bonus', '0'),
(48, 'APP_VENDOR', 'DroidOXY', '0'),
(49, 'VENDOR_URL', 'www.droidoxy.com', '0'),
(50, 'AdGateMediaActive', '0', '1'),
(51, 'AdGate_Media_WallId', 'naucrg', '1'),
(52, 'AdScendMediaActive', '1', '1'),
(53, 'AdScendMedia_PubId', '107661', '1'),
(54, 'AdScendMedia_AdwallId', '7451', '1'),
(55, 'API_OFFERS_ACTIVE', '1', '1'),
(56, 'VENDOR_SUPPORT_URL', 'http://www.droidoxy.com/support', '1'),
(57, 'WEB_LICENSE_URL', 'http://www.codyhub.com/item/pocket-webpanel', '1'),
(58, 'APP_LICENSE_URL', 'http://www.codyhub.com/item/android-rewards-app-pocket', '1'),
(59, 'APP_LICENSE_URL_WEB', 'http://www.codyhub.com/item/web-rewards-app-pocket', '1'),
(60, 'APP_LICENSE_URL_IOS', 'http://www.codyhub.com/item/ios-rewards-app-pocket', '1'),
(61, 'SPIN_TITLE', 'Spin & Win', '1'),
(62, 'SPIN_REWARD_TITLE', 'Spin Wheel Credit', '0'),
(63, 'APP_SHARE_URL_ANDROID', 'https://play.google.com/store/apps/details?id=com.example.appname', '1'),
(64, 'APP_SHARE_URL_IOS', 'https://apps.apple.com/bt/app/app-name/id123456', '1'),
(65, 'APP_TERMS_URL', 'http://localhost/dominorewards/terms', '1'),
(66, 'WEB_SHOW_NEW_FEATURE_NOTICE', '1', '0'),
(67, 'WEB_SHOW_ANNOUNCEMENT', '1', '0'),
(68, 'WEB_ANNOUNCEMENT_TEXT', 'Show Any Announcements Here.You can change this text or completely disable it from your Admin Panel.', '0'),
(69, 'WEB_SHOW_RECENT_PAYOUTS', '1', '0'),
(70, 'NOTICE_TRANSACTIONS', 'All Pending and Processing payout requests will be processed at every Saturday as we provide weekly Payments. If you wish to cancel or modify the payout request please contact us at suppoty@example.com or alternatively you can contact us at http://example.com/support', '1'),
(71, 'NOTICE_REFER_AND_EARN', 'Make Sure to Refer real and genuine members only. Self referring and Fake Referrals are strictly prohibited and may cause your Account to be Blocked !', '1'),
(72, 'NOTICE_REDEEM', 'All Payout requests will be processed at every Saturday as we provide weekely Payments. If you wish to cancel or modify the payout request please contact us at suppoty@example.com or alternatively you can contact us at http://example.com/support', '1'),
(73, 'SITE_LOGO_LIGHT', 'logo-light.png', '0'),
(74, 'SITE_LOGO_DARK', 'logo-dark.png', '0'),
(75, 'SITE_FAVICON', 'favicon.ico', '0'),
(76, 'CpaLeadActive', '1', '1'),
(77, 'CpaLead_DirectLink', 'https://viral782.com/list/406784', '1'),
(78, 'WannadsActive', '1', '1'),
(79, 'WannadsApiKey', '5deb5aeb82512186481670', '1'),
(80, 'AdMantumActive', '1', '1'),
(81, 'AdMantum_PubId', '217543', '1'),
(82, 'AdMantum_AppId', '11969', '1'),
(83, 'AdMantum_SecretKey', 'adm1234567', '1'),
(84, 'OAOD_CHECK', '0', '0'),
(85, 'GOOGLE_LOGIN_WEB', '1', '0'),
(86, 'GOOGLE_CLIENT_ID', '830402320972-v43npmoh5e621suttsb989u3a53mdtcl', '0'),
(87, 'GOOGLE_SECRET_ID', '0rlWWIFOH-QEHgsyVjJeQsqu', '0'),
(88, 'FACEBOOK_LOGIN_WEB', '1', '0'),
(89, 'FACEBOOK_APP_ID', '551019701964537', '0'),
(90, 'FACEBOOK_SECRET_ID', '990f70f9408ccad76d9053aad54a50eb', '0'),
(91, 'NOTICE_ADBLOCK_TITLE', 'AdBlocker Detected !', '1'),
(92, 'ADBLOCK_WEB', '1', '1'),
(93, 'SMTP_AUTH', '1', '0'),
(94, 'NOTICE_ADBLOCK', 'Please disable adblocker as it may cause issues with displaying and crediting offers. Reload this page once disabled.', '1'),
(95, 'SMTP_EMAIL', 'example@gmail.com', '0'),
(96, 'SMTP_USERNAME', 'example@gmail.com', '0'),
(97, 'SMTP_PASSWORD', '123456', '0'),
(98, 'SMTP_HOST', 'smtp.gmail.com', '0'),
(99, 'SMTP_PORT', '587', '0'),
(100, 'SMTP_SECURE', 'TLS', '0'),
(101, 'KiwiWallActive', '1', '1'),
(102, 'KiwiWall_WallId', 'x7WSuXuvjGsHLevNVY4qiORPLFb7RBAS', '1'),
(103, 'KiwiWall_APIKEY', '2udP6T46zDawoO973tLiIg9h6Gj4jF3J', '1'),
(104, 'KiwiWall_SECKEY', 'rHyprpB1uzhJN0hb0ASSZ7VBXqed5nmI', '1');

-- --------------------------------------------------------

--
-- Table structure for table `offerwalls`
--

CREATE TABLE `offerwalls` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `featured` varchar(2) NOT NULL,
  `position` varchar(10) NOT NULL,
  `status` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offerwalls`
--

INSERT INTO `offerwalls` (`id`, `name`, `subtitle`, `url`, `points`, `image`, `type`, `featured`, `position`, `status`) VALUES
(1, 'Daily Checkin', 'open App daily and get 25 Points', '', '25', 'ic_place_holder.png', 'checkin', '1', '1', '1'),
(2, 'Spin & Win', 'Spin the Wheel To Win Points', '', '0', 'ic_place_holder.png', 'spin', '1', '2', '1'),
(3, 'Refer & Earn', 'Refer Friends and Get Points', '', '100', 'ic_place_holder.png', 'refer', '1', '3', '1'),
(4, 'Transactions', 'View All your Transactions', '', '0', 'ic_place_holder.png', 'transactions', '1', '4', '1'),
(5, 'Redeem', 'Turn your Points into cash', '', '0', 'ic_place_holder.png', 'redeem', '1', '5', '1'),
(6, 'Instructions', 'How to Earn Points', '', '0', 'ic_place_holder.png', 'instructions', '1', '6', '0'),
(7, 'Share This App', 'Help your friends find this App', '', '0', 'ic_place_holder.png', 'share', '1', '7', '1'),
(8, 'Rate the App', 'Support us by Rating our App', '', '0', 'ic_place_holder.png', 'rate', '1', '8', '0'),
(9, 'About Us', 'Advertise with Us', '', '0', 'ic_place_holder.png', 'about', '1', '9', '0'),
(10, 'AdMantum', 'Install Apps To Earn Points', '', '0', 'admantum.png', 'admantum', '1', '15', '1'),
(11, 'AdGateMedia', 'Install Apps To Earn Points', '', '0', 'ic_place_holder.png', 'adgatemedia', '1', '11', '0'),
(12, 'Adscend Media', 'Install Apps To Earn Points', '', '0', 'adscendmedia.png', 'adscendmedia', '1', '12', '1'),
(13, 'CpaLead', 'Install Apps To Earn Points', '', '0', 'cpalead.png', 'cpalead', '1', '13', '1'),
(14, 'Wannads', 'Install Apps To Earn Points', '', '0', 'wannads.png', 'wannads', '1', '14', '1'),
(15, 'KiwiWall', 'Install Apps To Earn Points', '', '0', 'kiwiwall.png', 'kiwiwall', '1', '10', '1');

-- --------------------------------------------------------

--
-- Table structure for table `offer_status`
--

CREATE TABLE `offer_status` (
  `id` int(11) NOT NULL,
  `cid` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `of_id` varchar(255) NOT NULL,
  `of_title` varchar(255) NOT NULL,
  `of_amount` varchar(255) NOT NULL DEFAULT '0',
  `of_url` varchar(255) NOT NULL,
  `partner` varchar(255) NOT NULL,
  `ip_addr` varchar(255) NOT NULL,
  `dev_name` varchar(255) NOT NULL,
  `dev_man` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payouts`
--

CREATE TABLE `payouts` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payouts`
--

INSERT INTO `payouts` (`id`, `name`, `subtitle`, `message`, `amount`, `points`, `image`, `status`) VALUES
(1, 'Paypal', '1000 Points = $1 USD', 'Enter your Paypal Email :', '$1 USD', '1000', 'paypal_icon.png', '1'),
(2, 'Paypal', '4500 Points = $5 USD', 'Enter your Paypal Email :', '$5 USD', '4500', 'paypal_icon.png', '1'),
(3, 'PayTm', '1000 Points = 100 INR', 'Enter your Paytm Mobile Number :', '100 INR', '1000', 'ic_place_holder.png', '0'),
(4, 'Amazon', '3000 Points = $2.5 USD', 'Enter your Amazon Email :', '$2.5 USD', '3000', 'ic_place_holder.png', '1'),
(5, 'Google Play', '9000 Points = $10 USD', 'Enter your Google Playstore Email :', '$10 USD', '9000', 'googleplay_icon.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `referers`
--

CREATE TABLE `referers` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `rid` int(11) NOT NULL,
  `request_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dev_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dev_man` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gift_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `req_amount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points_used` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`rid`, `request_from`, `dev_name`, `dev_man`, `gift_name`, `req_amount`, `points_used`, `date`, `status`, `username`, `note`) VALUES
(4, 'ahmed@gmil.com', 'Computer - Windows 10', 'Chrome 83.0.4103.106', 'Paypal', '$1 USD', '1000', '2020-06-23', 3, 'code49', 'spam'),
(3, 'ahmed.ziani.90@gmail.com', 'Computer - Windows 10', 'Chrome 83.0.4103.106', 'Google Play', '$10 USD', '9000', '2020-06-23', 3, 'code49', 'spam'),
(5, 'ahmed@hotmail.com', 'Computer - Windows 10', 'Chrome 83.0.4103.116', 'Paypal', '$1 USD', '1000', '2020-07-09', 0, 'ahmed', ''),
(6, 'us21.2@hotmail.com', 'Computer - Windows 10', 'Chrome 85.0.4183.102', 'Paypal', '$5 USD', '4500', '2020-09-21', 0, 'code49', '');

-- --------------------------------------------------------

--
-- Table structure for table `restore_data`
--

CREATE TABLE `restore_data` (
  `id` int(11) UNSIGNED NOT NULL,
  `accountId` int(11) UNSIGNED NOT NULL,
  `hash` varchar(32) COLLATE utf8_unicode_ci DEFAULT '',
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `clientId` int(11) UNSIGNED DEFAULT 0,
  `createAt` int(10) UNSIGNED DEFAULT 0,
  `removeAt` int(10) UNSIGNED DEFAULT 0,
  `u_agent` varchar(300) COLLATE utf8_unicode_ci DEFAULT '',
  `ip_addr` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `id` int(255) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`id`, `username`, `points`, `type`, `date`) VALUES
(1, 'code49', '', 'admin', '1592945174'),
(2, 'code49', '25', 'Daily Checkin Credit', '1592945231'),
(3, 'code49', '20000', 'admin', '1592945319'),
(4, 'code49', '1000', 'admin', '1592948257'),
(5, 'ahmed', '100', 'Invitation Bonus', '1592950003'),
(6, 'code49', '100', 'Referral Bonus', '1592950003'),
(7, 'ahmed', '25', 'Daily Checkin Credit', '1592950019'),
(8, 'code49', '25', 'Daily Checkin Credit', '1593206930'),
(9, 'code49', '25', 'Daily Checkin Credit', '1593426009'),
(10, 'ziani', '25', 'Daily Checkin Credit', '1593427912'),
(11, 'berkane', '100', 'Invitation Bonus', '1593869372'),
(12, 'code49', '100', 'Referral Bonus', '1593869372'),
(13, 'berkane', '25', 'Daily Checkin Credit', '1593869414'),
(14, 'code49', '300', 'CpaLead offerwall Credit', '1594075475'),
(15, 'code49', '3500', 'AdScendMedia offerwall Credit', '1594075680'),
(16, 'code49', '3500', 'AdScendMedia offerwall Credit', '1594075880'),
(17, 'code49', '3500', 'AdScendMedia offerwall Credit', '1594075903'),
(18, 'code49', '3500', 'AdScendMedia offerwall Credit', '1594075915'),
(19, 'code49', '580', 'AdScendMedia offerwall Credit', '1594077061'),
(20, 'code49', '25', 'Daily Checkin Credit', '1594295074'),
(21, 'ahmed', '5000', 'admin', '1594313689'),
(22, 'ahmed', '25', 'Daily Checkin Credit', '1594390165'),
(23, 'maroc123', '25', 'Daily Checkin Credit', '1594935467'),
(24, 'berkane', '25', 'Daily Checkin Credit', '1594936787'),
(25, 'rabat123', '25', 'Daily Checkin Credit', '1594937432'),
(43, 'code49', '25', 'Daily Checkin Credit', '1601203945'),
(27, 'doraxorlo', '25', 'Daily Checkin Credit', '1595087029'),
(42, 'code49', '25', 'Daily Checkin Credit', '1601023527');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `last_access` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `last_ip_addr` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `gcm_regid` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` int(10) UNSIGNED DEFAULT 0,
  `fullname` varchar(150) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `salt` char(3) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `passw` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `login` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regtime` int(10) UNSIGNED DEFAULT 0,
  `regtype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ip_addr` char(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `points` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `refer` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `refered` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `referer` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `last_access`, `last_ip_addr`, `gcm_regid`, `state`, `fullname`, `salt`, `passw`, `login`, `email`, `image`, `regtime`, `regtype`, `ip_addr`, `mobile`, `points`, `refer`, `refered`, `referer`) VALUES
(1, '1601203964', '::1', NULL, 0, 'ahmed ziani', 't7h', '122ab9d11da2949bb675f787a6971fb8', 'code49', 'us21.2@hotmail.com', 'person-placeholder.jpeg', 1592944983, 'Manual', '::1', '0678675643', '11065', '6TWJFY', '0', ''),
(9, '1595086960', '::1', NULL, 0, 'rbati fiass', 'zye', '5f4223376a3e511addbd18e6ac8a1d84', 'rabat123', 'rabat123@hotmail.com', 'person-placeholder.jpeg', 1594937409, 'Manual', '::1', '', '25', '65X0PU', '0', ''),
(8, '1594936838', '::1', NULL, 0, 'rajar eslk', 'ia=', '954f83d77ae4296d702e5fde8488591e', 'berkane', 'berkane@hotmail.com', 'person-placeholder.jpeg', 1594936770, 'Manual', '::1', '', '25', 'FXV6PC', '0', ''),
(7, '1594936569', '::1', NULL, 0, 'imade khalil', '87i', 'c42bc9c1a1df7339bc10041cb145b6df', 'oujda', 'oujda@hormail.com', 'person-placeholder.jpeg', 1594936569, 'Manual', '::1', '', '0', '9LDTUC', '0', ''),
(6, '1595087143', '::1', NULL, 0, 'maroc', 'q5m', '54020357648ccc75ebf15a0fc5c30454', 'maroc123', 'maroc123@hotmail.com', 'person-placeholder.jpeg', 1594935369, 'Manual', '::1', '', '25', '6ZET0W', '0', ''),
(10, '1595087031', '::1', NULL, 0, 'ziani ahmed', '87w', 'a5e865b75e08afdf77dd6b3e8f22b578', 'doraxorlo', 'doraxorlo@hotmail.com', 'person-placeholder.jpeg', 1595087025, 'Manual', '::1', '', '25', 'DBAX40', '0', ''),
(11, '1595087090', '::1', NULL, 0, 'maroli kidf', 'uve', 'c412826508e763f2ed34b51675e38d39', 'maroc456', 'maroc456@hotmail.com', 'person-placeholder.jpeg', 1595087074, 'Manual', '::1', '', '0', 'C7B4YW', '0', ''),
(12, '1600726471', '::1', NULL, 0, 'maroc123', 'w*v', '70edc08a1c769d80cc4089fc16649000', 'maroc12s3', 'maroc12s3@hotmail.com', 'person-placeholder.jpeg', 1600724004, 'Manual', '::1', '', '0', 'OLHFDX', '0', ''),
(13, '1600885939', '::1', NULL, 0, 'google123', '-ry', 'ec5d8ccd108e961f9fce664440158027', 'google123', 'google123@hotmail.com', 'person-placeholder.jpeg', 1600883708, 'Manual', '::1', '', '25', 'TVSQGN', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `whitelists`
--

CREATE TABLE `whitelists` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip_addr` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whitelists`
--

INSERT INTO `whitelists` (`id`, `name`, `ip_addr`) VALUES
(1, 'offertoro', '54.175.173.245'),
(2, 'adscendmedia1', '204.232.224.18'),
(3, 'adscendmedia1', '204.232.224.19'),
(4, 'adscendmedia1', '104.130.46.116'),
(5, 'adscendmedia1', '104.130.60.109'),
(6, 'adscendmedia1', '104.239.224.178'),
(7, 'adscendmedia1', '104.130.60.108'),
(8, 'test', '43.225.55.117'),
(9, 'adgatemedia', '104.130.7.162'),
(10, 'adgatemedia', '52.42.57.125'),
(11, 'superrewards', '54.85.0.76'),
(12, 'superrewards', '54.84.205.80'),
(13, 'superrewards', '54.84.27.163'),
(14, 'fyber', '85.195.83.44'),
(15, 'fyber', '146.0.239.0'),
(16, 'fyber', '146.0.239.1'),
(17, 'fyber', '146.0.239.2'),
(18, 'fyber', '146.0.239.3'),
(19, 'fyber', '146.0.239.4'),
(20, 'fyber', '146.0.239.5'),
(21, 'fyber', '146.0.239.6'),
(22, 'fyber', '146.0.239.7'),
(23, 'fyber', '146.0.239.8'),
(24, 'fyber', '146.0.239.9'),
(25, 'fyber', '146.0.239.10'),
(26, 'fyber', '146.0.239.255'),
(27, 'droidoxy', '103.50.162.86'),
(28, 'cpalead', '52.0.65.65'),
(29, 'admantum', '162.241.27.11'),
(30, 'admantum', '162.241.27.12'),
(31, 'admantum', '162.241.27.13'),
(32, 'admantum', '162.241.27.24'),
(33, 'droidoxy', '103.21.59.201'),
(34, 'kiwiwall', '34.193.235.172');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_data`
--
ALTER TABLE `access_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `completed`
--
ALTER TABLE `completed`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerwalls`
--
ALTER TABLE `offerwalls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_status`
--
ALTER TABLE `offer_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payouts`
--
ALTER TABLE `payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referers`
--
ALTER TABLE `referers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `restore_data`
--
ALTER TABLE `restore_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Indexes for table `whitelists`
--
ALTER TABLE `whitelists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_data`
--
ALTER TABLE `access_data`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `configuration`
--
ALTER TABLE `configuration`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `offerwalls`
--
ALTER TABLE `offerwalls`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `offer_status`
--
ALTER TABLE `offer_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payouts`
--
ALTER TABLE `payouts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `referers`
--
ALTER TABLE `referers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restore_data`
--
ALTER TABLE `restore_data`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `whitelists`
--
ALTER TABLE `whitelists`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
