-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 12:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bahokcouriar`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `white_faq_name` varchar(255) NOT NULL,
  `white_faq_description` longtext NOT NULL,
  `black_faq_name` varchar(255) NOT NULL,
  `black_faq_description` longtext NOT NULL,
  `social_work_heading` varchar(255) NOT NULL,
  `social_work_title` varchar(255) NOT NULL,
  `social_work_description` longtext NOT NULL,
  `link` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `faq_title`, `white_faq_name`, `white_faq_description`, `black_faq_name`, `black_faq_description`, `social_work_heading`, `social_work_title`, `social_work_description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'WELCOME TO AFS', '<div>Welcome to America Food Services LLC. We are a company founded and established in Miami, FL, created with the purpose of supplying food products to satisfy the continuous and timely stock replenishment of the food industry. We have several years of experience supplying the best products, with the highest quality and the best prices in the market. We are leading company in the marketing and distribution of meat products, dairy products and other products derived from grains and cereals, such as corn and quinoa.</div><div><br></div><div>We are proud and privileged for the support from our suppliers, for the fresh and quality in all our products and for the outstanding human capital who has allowed America Food Services LLC. a positive and outstanding expansion of the local market.</div><div><br></div><div>But beyond this, we are pleased that our highly trained and qualified staff is always ready to meet all your needs with a great willingness to build an excellent business relationship with our suppliers and customers that lasts over time.</div>', 'SHOP WITH US, RESTOCK YOUR INVENTORY QUICK & EASY.', 'OUR VISION', 'America Food Services, LLC was born with the intention of inspiring our customers towards a healthier lifestyle by offering high quality products. This lifestyle is not only nutritious and great tasting, but also practical.', 'OUR MISSION', 'Our company plans on achieving our vision by partnering with the largest and grain agriculture in USA, Central and South America while maintaining fair trade and equitable loyalty to our partners. Together, we are committed to continuously developing quality products.', 'SOCIAL WORKING', 'AMERICA FOOD SERVICES - ALWAYS, CLOSE TO YOU.', '<div>We are proud to sponsor the Fundación Franlanqui, a non-profit organization founded more than 5 years ago, made up of a group of people dedicated to help other people who have become homeless or low-income people, by the donation of clothes, medicines, food, water or even economic resources needed to handle health issues. You can be a part of this!, Join us!</div><div><br></div>', 'http://localhost/technoparkbd/public/', '2023-10-04 03:28:29', '2023-10-04 03:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`id`, `heading`, `title`, `image`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'About Bahok Courier', 'media/about-details/2023-11-03-oDhnm6Btx6iqF1FADtgo8vyxLCIPJ1dLQS9PsliS.webp', 'Bahok Courier Ltd is a motorcycle and bi-cycle base delivery service established in 2015 to provide super fast delivery inside Dhaka city. From documents &amp; packages to medical specimens, we have the experience to deliver it on time and on budget. We provide a wide variety of services to meet all your STAT and Scheduled / Route delivery needs with service available 24/7.', 'Bahok Courier Limited is a motorcycle and bi-cycle base delivery service established in 2015 to provide superfast delivery inside Dhaka city sub area of Dhaka and Chittagong City corporations. From documents &amp; packages to medical specimens, we have the experience to deliver it on time. We provide a wide variety of services to meet all your STAT and Scheduled / Route delivery needs with service available 24/7. We are capable to provide same day delivery and we will include 8 hour, 12 hour service. Our special service is Signatory Service. We also help our client to deliver their product outside Dhaka through Sundorban Courier service, SA Paribahan, Kortowa courier, Janani courier service. Priority Service', '2023-11-03 02:01:10', '2023-11-03 03:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `about_faqs`
--

CREATE TABLE `about_faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` int(20) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_faqs`
--

INSERT INTO `about_faqs` (`id`, `serial`, `title`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Our Vision', '<p>&nbsp;Dhaka is becoming more congested and it has now become almost impossible to move around in Dhaka. Our aim is to provide quick and safest delivery door to door by motorcycle and bi-cycle to reach your product to your customer on time. Our target is to provide one stop solution that you don’t have to worry about your product to deliver on your destination. Our vision is also to provide hassle free delivery to the last mileage of the country and deliver most of the countries by time to time.<br></p>', '1', '2023-11-03 02:05:12', '2023-11-03 02:05:12'),
(2, 2, 'Our Mission', '<fieldset style=\"-webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><p style=\"margin-bottom: 15px; -webkit-font-smoothing: antialiased; color: rgb(16, 40, 93); line-height: 30px;\">Our delivery services are primarily for e-commerce businesses. But we also deliver non-ecommerce Company, shop’s and other company who wants to deliver documents, small parcel etc. Our target is:</p></fieldset><ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To provide total logistic support to our client i,e one stop solution.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">As e-commerce is now growing business, our target is to grow our business through quality service and value for money.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To be innovative, professional and build business partnerships.</li></ul>', '1', '2023-11-03 02:06:04', '2023-11-03 02:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `accordions`
--

CREATE TABLE `accordions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accordions`
--

INSERT INTO `accordions` (`id`, `title`, `serial`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Accordion', 1, 'If you have small parcels or documents , your product will reach to your customer hassle free as we have large number of bikers in Dhaka who are happy to help.', 1, '2023-11-02 11:18:07', '2023-11-04 03:48:20'),
(2, 'Accordion 2', 2, 'Our staffs and delivery man are so experts that they will help you to packaging your product and write proper address. You don’t need to panic if you have no helping hand.', 1, '2023-11-02 11:25:25', '2023-11-04 03:48:49'),
(3, 'Accordion 3', 3, 'We will help you to promote your product through our page and website with free of cost.', 1, '2023-11-02 11:26:03', '2023-11-04 03:49:27'),
(4, 'Our company', 4, 'Our company directors are well established and well known, so there is no problem with trust issues.', 1, '2023-11-02 11:53:26', '2023-11-04 03:49:56'),
(5, 'You can', 5, '<span style=\"font-size: 16px;\">You can keep your product in our warehouse with free of cost.</span><br>', 1, '2023-11-02 11:54:15', '2023-11-04 03:50:15'),
(6, 'Accordion 6', 6, 'You can keep your product in our warehouse with free of cost.<br>', 1, '2023-11-02 11:54:48', '2023-11-04 03:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menus`
--

CREATE TABLE `admin_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `route` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `delete` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menus`
--

INSERT INTO `admin_menus` (`id`, `permission_id`, `parent_id`, `name`, `route`, `icon`, `order`, `status`, `delete`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Settings', NULL, '<i class=\"far fa-cogs\"></i>', 30, 1, 1, '2023-10-02 15:33:38', '2023-10-03 04:09:22'),
(2, 2, 1, 'Slider', 'admin.slider.index', '<i class=\"fas fa-caret-right\"></i>', 1, 0, 1, '2023-10-02 15:34:11', '2023-11-04 05:13:12'),
(3, 3, 1, 'Site Items', 'admin.settings.index', '<i class=\"fas fa-caret-right\"></i>', 2, 1, 1, '2023-10-03 04:08:54', '2023-11-02 12:16:31'),
(4, 4, NULL, 'Special Food Item', 'admin.special-food-item.index', '<i class=\"far fa-turkey\"></i>', 29, 0, 1, '2023-10-03 11:49:56', '2023-11-03 15:32:45'),
(5, 5, NULL, 'Details Card', NULL, '<i class=\"far fa-credit-card\"></i>', 28, 1, 1, '2023-10-03 12:54:18', '2023-11-02 09:09:59'),
(6, 6, 5, 'Services Details', 'admin.services.index', '<i class=\"fas fa-game-board-alt\"></i>', 27, 1, 1, '2023-10-03 15:54:15', '2023-11-02 09:10:34'),
(7, 7, NULL, 'Client Messages', 'admin.client-message.index', '<i class=\"fas fa-comment-smile\"></i>', 26, 1, 1, '2023-10-03 16:33:55', '2023-10-03 16:33:55'),
(8, 8, NULL, 'Contact', 'admin.contact.index', '<i class=\"fas fa-id-card\"></i>', 24, 0, 1, '2023-10-03 16:35:01', '2023-11-03 15:33:05'),
(9, 9, NULL, 'Testimonial', 'admin.testimonial.index', '<i class=\"fas fa-vhs\"></i>', 25, 1, 1, '2023-10-04 02:33:01', '2023-10-04 02:33:01'),
(10, 10, NULL, 'About Page', 'admin.about.index', '<i class=\"fal fa-house-return\"></i>', 2, 1, 1, '2023-10-04 02:47:20', '2023-11-02 12:22:06'),
(11, 11, NULL, 'Social Working', 'admin.social-working.index', '<i class=\"far fa-handshake-slash\"></i>', 22, 0, 1, '2023-10-04 02:49:34', '2023-11-03 15:33:22'),
(12, 12, 5, 'Processing Details', 'admin.processing-details.index', '<i class=\"fas fa-caret-right\"></i>', 2, 1, 1, '2023-11-02 09:11:39', '2023-11-02 09:11:39'),
(13, 13, NULL, 'Area Setup', NULL, '<i class=\"fal fa-layer-plus\"></i>', 3, 1, 1, '2023-11-02 09:31:42', '2023-11-03 15:35:49'),
(14, 14, 13, 'Main Area Setup', 'admin.main-area-setup.index', '<i class=\"fas fa-caret-right\"></i>', 1, 1, 1, '2023-11-02 09:32:50', '2023-11-02 09:33:19'),
(15, 15, 13, 'Sub Area Steup', 'admin.sub-area-setup.index', '<i class=\"fas fa-caret-right\"></i>', 3, 1, 1, '2023-11-02 09:34:27', '2023-11-03 15:35:32'),
(16, 16, NULL, 'Accordion', 'admin.accordion.index', '<i class=\"fas fa-camcorder\"></i>', 1, 1, 1, '2023-11-02 11:05:16', '2023-11-03 15:33:52'),
(17, 17, 10, 'About Details', 'admin.about-details.index', '<i class=\"fas fa-caret-right\"></i>', 1, 1, 1, '2023-11-02 12:25:21', '2023-11-02 12:26:25'),
(18, 18, 10, 'About Faq', 'admin.about-faq.index', '<i class=\"fas fa-caret-right\"></i>', 2, 1, 1, '2023-11-02 12:26:08', '2023-11-02 12:26:08'),
(19, 19, NULL, 'Faqs', 'admin.faq.index', '<i class=\"fas fa-fingerprint\"></i>', 4, 1, 1, '2023-11-03 03:34:45', '2023-11-03 15:36:16'),
(20, 20, 1, 'Privacy', 'admin.privacy.index', '<i class=\"fas fa-user-shield\"></i>', 39, 1, 1, '2023-11-03 14:56:22', '2023-11-03 15:12:36'),
(21, 21, 1, 'Trams And Conditions', 'admin.trams-and-conditions.index', '<i class=\"fas fa-caret-right\"></i>', 3, 1, 1, '2023-11-03 15:13:54', '2023-11-03 15:13:54'),
(22, 22, 5, 'Services Tag', 'admin.services-tag.index', '<i class=\"fas fa-caret-right\"></i>', 3, 1, 1, '2023-11-04 05:14:00', '2023-11-04 05:14:00'),
(23, 23, NULL, 'Delivery', NULL, '<i class=\"far fa-truck-container\"></i>', 31, 1, 1, '2023-11-04 05:40:39', '2023-11-04 05:41:20'),
(24, 24, 23, 'Delivery Item', 'admin.delivery-item.index', '<i class=\"fas fa-caret-right\"></i>', 1, 1, 1, '2023-11-04 05:42:39', '2023-11-04 06:52:11'),
(25, 25, 23, 'Delivery Weight Setup', 'admin.delivery-weight.index', '<i class=\"fas fa-caret-right\"></i>', 2, 1, 1, '2023-11-04 05:44:40', '2023-11-04 05:44:40'),
(26, 26, 23, 'Delivery Details', 'admin.delivery-details.index', '<i class=\"fas fa-caret-right\"></i>', 5, 1, 1, '2023-11-04 11:28:25', '2023-11-04 11:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu_actions`
--

CREATE TABLE `admin_menu_actions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `admin_menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `route` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_settings`
--

CREATE TABLE `admin_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `secondary_color` varchar(255) DEFAULT NULL,
  `primary_color` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `home_title` varchar(255) DEFAULT NULL,
  `faq_title` varchar(255) DEFAULT NULL,
  `services_title` varchar(255) DEFAULT NULL,
  `about_title` varchar(255) DEFAULT NULL,
  `search_title` varchar(255) DEFAULT NULL,
  `services_title_one` varchar(255) DEFAULT NULL,
  `services_title_two` varchar(255) DEFAULT NULL,
  `basic_title_one` varchar(255) DEFAULT NULL,
  `basic_title_two` varchar(255) DEFAULT NULL,
  `basic_title_three` varchar(255) DEFAULT NULL,
  `basic_title_four` varchar(255) DEFAULT NULL,
  `basic_title_five` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `secondary_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_animation_image` varchar(255) DEFAULT NULL,
  `map_image` varchar(255) DEFAULT NULL,
  `footer_image` varchar(255) DEFAULT NULL,
  `footer_animation_image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `map_url` text DEFAULT NULL,
  `phone_one` varchar(255) DEFAULT NULL,
  `phone_two` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `title`, `home_title`, `faq_title`, `services_title`, `about_title`, `search_title`, `services_title_one`, `services_title_two`, `basic_title_one`, `basic_title_two`, `basic_title_three`, `basic_title_four`, `basic_title_five`, `logo`, `secondary_logo`, `favicon`, `banner_image`, `banner_animation_image`, `map_image`, `footer_image`, `footer_animation_image`, `facebook`, `youtube`, `whatsapp`, `twitter`, `linkedin`, `pinterest`, `map_url`, `phone_one`, `phone_two`, `email`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'Bahok App', 'Home Page', 'About Faqs', 'Services', 'About Bahok Courier', 'Track Your Order', NULL, NULL, 'House#11, Road#04, Senpara parbata, Mirpur 10, Mirpur, Dhaka 1215', NULL, '10:00 AM to 10:00 PM', 'Delivery Charge Calculator', 'Copyright @2023 Technopark Bangladesh', 'media/site-items/2023-11-02-XGWirIFEmv771FEV9bem3VqezvzJ0BSJwgFxvuiD.webp', 'media/site-items/2023-11-02-qZcqVosnCnzOhyEtUyuZVIE5l1cxIcybIHg64jfx.webp', 'media/site-items/2023-11-02-o3zSe1lLxkhMRpT718ICx9R9rE097iAmEjzaJ8nP.webp', 'media/site-items/2023-11-02-30PbnncpmOV4b4jDHjTPHrKX0azsvY3hOTyQpkJ3.webp', 'media/site-items/2023-11-02-zRINyvqDLeZHnJI1i4RxwvG3lEcHzKcAbbHYR8AM.webp', 'media/site-items/2023-11-02-ycCj26Pq8JKC25YjXZLEAoWijCJzBDPeq4X4ZPhu.webp', 'media/site-items/2023-11-02-wSQWi6gH21a4yLV9Gra4IRoyHgPANx1NHj5ihXt1.webp', 'media/site-items/2023-11-02-ah8E1l7bdvt1B2TvWWX4N4dKDPDqnLuFMift6lVd.gif', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://www.facebook.com/syedamir0', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28922.48314930121!2d90.0115998!3d25.0235383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3757d610b1247fcd%3A0x6820b0a61eb62bfc!2sSherpur!5e0!3m2!1sen!2sbd!4v1695954109455!5m2!1sen!2sbd', '01817807594', '01817807594', 'amirralli300400@gmail.com', NULL, 'couriar, deliver', 'No descriptions', '2023-11-02 06:48:49', '2023-11-04 04:32:23');

-- --------------------------------------------------------

--
-- Table structure for table `client_messages`
--

CREATE TABLE `client_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_messages`
--

INSERT INTO `client_messages` (`id`, `name`, `email`, `phone`, `address`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Syed Amir Ali', 'amirralli300400@gmail.com', '01817807594', 'Bosila Road, Arsinagar Keraniganj, 1312', 'Welcome to America Food Services LLC. We are a company founded and established in Miami, FL, created with the purpose of supplying food products to satisfy the continuous and timely stock replenishment of the food industry. We have several years of experience supplying the best products, with the highest quality and the best prices in the market. We are leading company in the marketing and distribution of meat products, dairy products and other products derived from grains and cereals, such as corn and quinoa.\r\n\r\nWe are proud and privileged for the support from our suppliers, for the fresh and quality in all our products and for the outstanding human capital who has allowed America Food Services LLC. a positive and outstanding expansion of the local market.\r\n\r\nBut beyond this, we are pleased that our highly trained and qualified staff is always ready to meet all your needs with a great willingness to build an excellent business relationship with our suppliers and customers that lasts over time.', 1, '2023-10-04 06:44:00', '2023-10-04 06:44:00'),
(2, 'Syed Amir Ali', 'amirralli300400@gmail.com', '01817807594', 'Sherpur, Mymenshingh', '$(\"#contactform\").submit(function(event){', 1, '2023-11-03 02:30:05', '2023-11-03 02:30:05'),
(3, 'Syed Amir Ali', 'amirralli300400@gmail.com', '01817807594', 'Sherpur, Mymenshingh', 'Say something about me.', 1, '2023-11-03 02:30:41', '2023-11-03 02:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `title` text DEFAULT NULL,
  `address` text NOT NULL,
  `work_time` text NOT NULL,
  `primary_mobile` varchar(255) NOT NULL,
  `primary_email` varchar(255) NOT NULL,
  `secondary_mobile` varchar(255) NOT NULL,
  `secondary_email` varchar(255) NOT NULL,
  `map_url` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `heading`, `title`, `address`, `work_time`, `primary_mobile`, `primary_email`, `secondary_mobile`, `secondary_email`, `map_url`, `created_at`, `updated_at`) VALUES
(1, 'GET IN TOUCH', '<span style=\"color: rgb(30, 41, 59); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium; text-align: center;\">Don’t hesitate to contact us directly so that we can think together about a solution.</span>', '<span style=\"color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">6313 NW 99th Ave</span><br style=\"border-width: 0px; border-style: solid; border-color: currentcolor; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\"><span style=\"color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">Doral, FL 33178.</span>', '<span style=\"color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">Monday to Friday</span><br style=\"border-width: 0px; border-style: solid; border-color: currentcolor; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\"><span style=\"color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">7 a.m. 12 p.m. – 1 p.m. 4 p.m.</span><br style=\"border-width: 0px; border-style: solid; border-color: currentcolor; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\"><br style=\"border-width: 0px; border-style: solid; border-color: currentcolor; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\"><span style=\"color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">Saturday</span><br style=\"border-width: 0px; border-style: solid; border-color: currentcolor; --tw-border-spacing-x: 0; --tw-border-spacing-y: 0; --tw-translate-x: 0; --tw-translate-y: 0; --tw-rotate: 0; --tw-skew-x: 0; --tw-skew-y: 0; --tw-scale-x: 1; --tw-scale-y: 1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness: proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgb(59 130 246 / 0.5); --tw-ring-offset-shadow: 0 0 #0000; --tw-ring-shadow: 0 0 #0000; --tw-shadow: 0 0 #0000; --tw-shadow-colored: 0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\"><span style=\"color: rgb(71, 85, 105); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium;\">8 a.m. 2 p.m.</span>', '(786) 451-0839', 'terracottabangladesh@gmail.com', '(786) 451-0839', 'amirralli300400@gmail.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28922.48314930121!2d90.0115998!3d25.0235383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3757d610b1247fcd%3A0x6820b0a61eb62bfc!2sSherpur!5e0!3m2!1sen!2sbd!4v1695954109455!5m2!1sen!2sbd', '2023-10-04 02:43:38', '2023-10-04 02:43:38');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`id`, `title`, `serial`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Details 1', 1, '1% Cash Handling &amp; Risk Management Charge will be added.', '1', '2023-11-04 11:48:58', '2023-11-04 11:48:58'),
(2, '2', 2, '*All charges are VAT & Tax excluded.', '1', '2023-11-04 11:49:17', '2023-11-04 11:50:11'),
(3, '3', 3, '*Unavoidable circumstances may change in time of delivery.', '1', '2023-11-04 11:49:41', '2023-11-04 11:50:20'),
(4, '4', 4, 'Sundorban/SA Paribahan Booking charge 30/-', '1', '2023-11-04 11:50:02', '2023-11-04 11:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_items`
--

CREATE TABLE `delivery_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `qty` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_items`
--

INSERT INTO `delivery_items` (`id`, `title`, `qty`, `time`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Same Day', 'Any', '24H to 72H', 1, 1, '2023-11-04 08:26:33', '2023-11-04 11:18:21'),
(2, 'Next Day', NULL, NULL, 2, 1, '2023-11-04 08:37:05', '2023-11-04 08:37:05'),
(3, 'Sub Area', NULL, NULL, 3, 1, '2023-11-04 08:40:18', '2023-11-04 08:40:18'),
(4, 'Outside of Dhaka', NULL, NULL, 4, 1, '2023-11-04 08:41:04', '2023-11-04 08:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_prices`
--

CREATE TABLE `delivery_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weight_id` bigint(20) UNSIGNED NOT NULL,
  `charge_id` bigint(20) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_prices`
--

INSERT INTO `delivery_prices` (`id`, `weight_id`, `charge_id`, `price`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 2, 60, 1, '2023-11-04 08:37:05', '2023-11-04 08:37:05'),
(5, 2, 2, 70, 1, '2023-11-04 08:37:05', '2023-11-04 08:37:05'),
(6, 3, 2, 100, 1, '2023-11-04 08:37:05', '2023-11-04 08:37:05'),
(7, 1, 3, 90, 1, '2023-11-04 08:40:18', '2023-11-04 08:40:18'),
(8, 2, 3, 110, 1, '2023-11-04 08:40:18', '2023-11-04 08:40:18'),
(9, 3, 3, 130, 1, '2023-11-04 08:40:18', '2023-11-04 08:40:18'),
(10, 1, 4, 120, 1, '2023-11-04 08:41:04', '2023-11-04 08:41:04'),
(11, 2, 4, 130, 1, '2023-11-04 08:41:04', '2023-11-04 08:41:04'),
(12, 3, 4, 150, 1, '2023-11-04 08:41:04', '2023-11-04 08:41:04'),
(13, 1, 1, 90, 1, '2023-11-04 11:18:21', '2023-11-04 11:18:21'),
(14, 2, 1, 120, 1, '2023-11-04 11:18:21', '2023-11-04 11:18:21'),
(15, 3, 1, 150, 1, '2023-11-04 11:18:21', '2023-11-04 11:18:21');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_weight_setups`
--

CREATE TABLE `delivery_weight_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute` varchar(255) DEFAULT NULL,
  `weight` bigint(20) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_weight_setups`
--

INSERT INTO `delivery_weight_setups` (`id`, `attribute`, `weight`, `unit`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 500, 'g', 1, '1', '2023-11-04 06:15:05', '2023-11-04 06:15:05'),
(2, 'Upto', 1, 'kg', 2, '1', '2023-11-04 06:15:28', '2023-11-04 06:18:22'),
(3, 'Upto', 2, 'kg', 3, '1', '2023-11-04 06:16:04', '2023-11-04 06:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `details_cards`
--

CREATE TABLE `details_cards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `details_cards`
--

INSERT INTO `details_cards` (`id`, `title`, `description`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A LARGE VARIETY OF PRODUCTS', '<p><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment. </span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment. </span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment. </span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment. </span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment. </span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment. </span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.</span><span style=\"background-color: rgb(241, 245, 249); color: rgb(51, 65, 85); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\"; font-size: medium; text-align: center;\"> </span><br></p>', 5, 1, '2023-10-03 13:07:42', '2023-10-04 05:03:47'),
(2, 'A LARGE VARIETY OF PRODUCTS', '<p><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.</span><span style=\"background-color: rgb(241, 245, 249); color: rgb(51, 65, 85); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium; text-align: center;\">&nbsp;</span><br></p>', 2, 1, '2023-10-03 13:08:10', '2023-10-03 13:08:10'),
(3, 'A LARGE VARIETY OF PRODUCTS', '<p><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.&nbsp;</span><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.</span><span style=\"background-color: rgb(241, 245, 249); color: rgb(51, 65, 85); font-family: Figtree, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: medium; text-align: center;\">&nbsp;</span><br></p>', 3, 1, '2023-10-03 13:08:26', '2023-10-03 13:08:26');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `serial`, `short_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'WHAT ARE YOUR OFFICE HOURS?', 1, 'You can call us from Friday to Saturday, at 08.00 – 11.30 p.m . We only closed our office on Two Eid. We have 24/7 service.', '1', '2023-11-03 03:35:43', '2023-11-04 04:43:08'),
(2, 'WHAT CAN I SEND IN MY PARCEL?', 2, 'You can send any kind of parcel. But don’t delivery any kind of illegal products or prohibited products. If found any kind of illegal or prohibited products Bahokbd.com will not be liable for this rather merchant will have to take all responsibilities.', '1', '2023-11-03 03:36:12', '2023-11-04 04:44:28'),
(3, 'WHAT HOURS ARE YOU OPEN AND WHEN DO YOU MAKE DELIVERIES?', 3, 'We understand that not every delivery is going to fall in 8.00 between 11.00 normal business hours so we are conveniently open 24/7 and can make a delivery at any time of day or night.', '1', '2023-11-03 03:36:43', '2023-11-04 04:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_area_setups`
--

CREATE TABLE `main_area_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_area_setups`
--

INSERT INTO `main_area_setups` (`id`, `title`, `serial`, `short_description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka Division', 1, '<p>D</p>', 'dhaka-division', 1, '2023-11-02 09:54:55', '2023-11-02 09:54:55');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2014_10_12_000000_create_users_table', 2),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(4, '2019_08_19_000000_create_failed_jobs_table', 2),
(5, '2023_04_26_070249_create_permission_tables', 2),
(6, '2023_04_29_104538_create_admin_menus_table', 2),
(7, '2023_04_29_104545_create_admin_menu_actions_table', 2),
(8, '2023_04_30_095422_create_jobs_table', 2),
(9, '2023_07_16_193339_create_settings_table', 2),
(10, '2023_08_08_095304_create_admin_settings_table', 2),
(11, '2023_08_23_083356_create_portfolios_table', 2),
(12, '2023_09_20_105200_create_sliders_table', 2),
(13, '2023_10_03_100103_create_site_items_table', 3),
(14, '2023_10_03_165212_create_static_site_items_table', 4),
(15, '2023_10_03_172718_create_special_food_items_table', 5),
(16, '2023_10_03_182643_create_details_cards_table', 6),
(17, '2023_10_03_213106_create_showcase_items_table', 7),
(18, '2023_10_03_222638_create_client_messages_table', 8),
(19, '2023_10_03_224230_create_contacts_table', 9),
(20, '2023_10_04_081821_create_testimonials_table', 10),
(21, '2023_10_04_085027_create_abouts_table', 11),
(22, '2023_10_04_093333_create_social_works_table', 12),
(23, '2023_11_02_115531_create_app_settings_table', 13),
(24, '2023_11_02_141204_create_services_table', 14),
(25, '2023_11_02_150749_create_processing_details_table', 15),
(26, '2023_11_02_153628_create_main_area_setups_table', 16),
(27, '2023_11_02_153921_create_sub_area_setups_table', 16),
(28, '2023_11_02_170305_create_accordions_table', 17),
(29, '2023_11_02_182345_create_about_details_table', 18),
(30, '2023_11_02_182405_create_about_faqs_table', 18),
(31, '2023_11_03_092056_create_faqs_table', 19),
(32, '2023_11_03_203706_create_privacies_table', 20),
(33, '2023_11_03_210340_create_terms_and_conditions_table', 21),
(34, '2023_11_04_111633_create_services_tags_table', 22),
(35, '2023_11_04_115245_create_delivery_charge_setups_table', 23),
(36, '2023_11_04_115936_create_delivery_weight_setups_table', 24),
(37, '2023_11_04_123422_create_delivery_prices_table', 25),
(38, '2023_11_04_123901_create_delivery_items_table', 26),
(39, '2023_11_04_172057_create_delivery_details_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Settings', 'web', '2023-10-02 15:33:38', '2023-10-03 04:09:22'),
(2, 'admin.slider.index', 'web', '2023-10-02 15:34:11', '2023-10-02 15:34:11'),
(3, 'admin.site-item.index', 'web', '2023-10-03 04:08:54', '2023-10-03 04:08:54'),
(4, 'admin.special-food-item.index', 'web', '2023-10-03 11:49:56', '2023-10-03 11:49:56'),
(5, 'admin.details-card.index', 'web', '2023-10-03 12:54:18', '2023-10-03 12:54:18'),
(6, 'Services Details', 'web', '2023-10-03 15:54:15', '2023-11-02 09:10:34'),
(7, 'admin.client-message.index', 'web', '2023-10-03 16:33:55', '2023-10-03 16:33:55'),
(8, 'admin.contact.index', 'web', '2023-10-03 16:35:01', '2023-10-03 16:35:01'),
(9, 'admin.testimonial.index', 'web', '2023-10-04 02:33:01', '2023-10-04 02:33:01'),
(10, 'About Page', 'web', '2023-10-04 02:47:20', '2023-11-02 12:22:06'),
(11, 'admin.social-working.index', 'web', '2023-10-04 02:49:34', '2023-10-04 02:49:34'),
(12, 'admin.processing-details.create', 'web', '2023-11-02 09:11:39', '2023-11-02 09:11:39'),
(13, 'Area Setup', 'web', '2023-11-02 09:31:42', '2023-11-02 09:31:42'),
(14, 'admin.main-area-setup.create', 'web', '2023-11-02 09:32:50', '2023-11-02 09:32:50'),
(15, 'admin.sub-area-setup.index', 'web', '2023-11-02 09:34:27', '2023-11-02 09:34:27'),
(16, 'admin.accordion.index', 'web', '2023-11-02 11:05:16', '2023-11-02 11:05:16'),
(17, 'admin.about-details.index', 'web', '2023-11-02 12:25:21', '2023-11-02 12:25:21'),
(18, 'admin.about-faq.index', 'web', '2023-11-02 12:26:08', '2023-11-02 12:26:08'),
(19, 'admin.faq.index', 'web', '2023-11-03 03:34:45', '2023-11-03 03:34:45'),
(20, 'admin.privacy.index', 'web', '2023-11-03 14:56:22', '2023-11-03 14:56:22'),
(21, 'admin.trams-and-conditions.index', 'web', '2023-11-03 15:13:54', '2023-11-03 15:13:54'),
(22, 'admin.services-tag.index', 'web', '2023-11-04 05:14:00', '2023-11-04 05:14:00'),
(23, 'Delivery', 'web', '2023-11-04 05:40:39', '2023-11-04 05:40:39'),
(24, 'Delivery Item', 'web', '2023-11-04 05:42:39', '2023-11-04 06:52:11'),
(25, 'admin.delivery-weight.index', 'web', '2023-11-04 05:44:40', '2023-11-04 05:44:40'),
(26, 'admin.delivery-details.index', 'web', '2023-11-04 11:28:25', '2023-11-04 11:28:25');

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `video_id` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `technologies` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacies`
--

INSERT INTO `privacies` (`id`, `title`, `serial`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'NULL', 1, '<p>This policy should be read carefully. By accessing or using our Website, you acknowledge and confirm that you have read all of the terms of this Policy and our Website’s Terms and Conditions, and that you understand, accept and agree to be bound by all the provisions contained in this Policy and the Terms and Conditions as contained on our Website. Our Privacy Policy explains what information we collect on the Website, how we use and/or share such information, and how such information is maintained. This Policy only applies with regard to the information collected on the Website and not with regard to any information collected or obtained through other methods or sources. Our Policy ensures that any information which you provide us remains private, secure and confidential. e will never collect sensitive information about you without your prior consent. You can check and update the information that we hold about you by contacting us using the contact information below. If you find any inaccuracies we will delete or correct it promptly upon your written request.<br></p>', '1', '2023-11-03 14:57:08', '2023-11-03 14:57:08'),
(2, 'INTRODUCTION', 2, '<p style=\"margin-bottom: 15px; -webkit-font-smoothing: antialiased; font-family: Mulish, sans-serif; color: rgb(16, 40, 93); font-size: 16px; line-height: 30px; background-color: rgb(251, 251, 253);\">Our website i.e. www.bahokcourier.com is owned, operated and directed by Bahok Courier Limited here in after Bahok Courier.</p><ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">A Private Company, duly registered as such in terms of the relevant laws of the The republic of Bangladesh.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">We have referred to the aforementioned enterprise in this document as “Bahok Courier”, “us”, “we”, or “our”).</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">We are dedicated, devoted and committed to protecting your privacy and thus, our legal team have developed this privacy policy.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Accordingly, we will only use the information that we collect from you and that which you furnish us with, lawfully and in accordance with the DIGITAL SECURITY ACT No. 46 of 2018 and all other applicable legislation related to enacted in Bangladesh from time to time.</li></ul>', '1', '2023-11-03 14:58:23', '2023-11-03 14:58:53'),
(3, 'WHAT INFORMATION DO WE COLLECT?', 3, '<ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">We collect personally identifiable information from you that is volunteered when you register on our website (www.bahokcourier.com), place an order, and fill out an online form and/or in response to specific information requests unambiguously and explicitly presented to you.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">When ordering or registering on our site, as appropriate, you may be asked to enter your first and last name, your e-mail address, your postal address, your date of birth, your contact details, and details of a payment mechanism, such as your credit/debit card information.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">We may also collect your Internet Protocol (“IP”) address. This may assist us in diagnosing problems with our server, and to administer our Website in order to be able to provide you with efficient and uninterrupted service. When you use the internet, an IP address is a number that is assigned to your computer. An IP address assists in identifying you during a particular session for security purposes and to gather broader demographic data.</li></ul>', '1', '2023-11-03 14:59:30', '2023-11-03 14:59:30'),
(4, 'WHAT DO WE USE YOUR PERSONAL IDENTIFIABLE INFORMATION FOR?', 4, '<fieldset style=\"-webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><p style=\"margin-bottom: 15px; -webkit-font-smoothing: antialiased; color: rgb(16, 40, 93); line-height: 30px;\">Any of the information that we collect from you may be used in one of the following ways</p></fieldset><ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To personalize your experience. Your information helps us to respond better to your individual needs and communicate with you effectively.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To improve our website. We continually strive to improve our website offerings based on the information and feedback we receive from you.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To improve customer service your information helps us to respond more effectively to your customer service requests and support needs.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To process transactions</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To send periodic emails to you</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To control and manage your account</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To analyses your use of our service</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To conduct research for marketing purposes</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To regulate deals/transactions and purchase products tailored in accordance with your specific interests, needs and location</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To enforce and apply our terms and conditions</li></ul>', '1', '2023-11-03 14:59:54', '2023-11-03 14:59:54'),
(5, 'ELECTRONIC COMMUNICATIONS', 5, '<fieldset style=\"-webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><p style=\"margin-bottom: 15px; -webkit-font-smoothing: antialiased; color: rgb(16, 40, 93); line-height: 30px;\">The email address which you provide for order processing and/or registration, may be used for one or more of the following purposes.</p></fieldset><ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To send you information and updates pertaining to your order or use of our service.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To send you information pertaining to your account details and/or status.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To send you occasional news, updates, related to our Website.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To send you promotional emails</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To offer you additional services related to Courier Direct</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">To remind you of the services we offer</li></ul><p style=\"margin-bottom: 15px; -webkit-font-smoothing: antialiased; font-family: Mulish, sans-serif; color: rgb(16, 40, 93); font-size: 16px; line-height: 30px; background-color: rgb(251, 251, 253);\">Kindly note that If at any time you would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email as well as an account review in which you may specifically indicate as to which communications you would like to receive and those which you would elect to exclude.</p>', '1', '2023-11-03 15:00:23', '2023-11-03 15:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `processing_details`
--

CREATE TABLE `processing_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `processing_details`
--

INSERT INTO `processing_details` (`id`, `serial`, `title`, `image`, `short_description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Receive From Shipper', 'media/processing-details/2023-11-02-xlcSvm1JLIjYvN5FYonoAvhpqg3N7l8AiOqzjIlX.webp', '<p>We collect the product from the shipper/Merchant’s warehouse/location after requesting for pickup.<br></p>', 'receive-from-shipper', 1, '2023-11-02 09:19:33', '2023-11-02 09:19:33'),
(2, 2, 'Safe & Secure Shipment', 'media/processing-details/2023-11-02-2AsM4Fklzsx2EfIxNEakfgh3Qd1gP0gPOJuOm1fz.webp', '<p>After confirming the pickup, rider receives the product from merchant’s location and safely bring the parcel to our hub.<br></p>', 'safe-secure-shipment', 1, '2023-11-02 09:20:12', '2023-11-02 09:20:12'),
(3, 1, 'Handover to Receiver', 'media/processing-details/2023-11-02-keLIvLv2hWYD6CLQIJPJLXB4TkRbaMY7eaD0kM4i.webp', '<p>As our delivery commitment we have handover parcel to the customer safe and swiftly on their desired time<br></p>', 'handover-to-receiver', 1, '2023-11-02 09:21:11', '2023-11-02 09:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'web', '2023-10-02 15:28:59', '2023-10-02 15:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `serial`, `title`, `image`, `short_description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Same day Delivery service', 'media/services/2023-11-02-foQBf4Tb2TfEWiUDz57SRKcoiyuO1afLNr9icEEF.webp', '<p>Our same day delivery is that we deliver product within 8 hours. Merchant should have requested to avail same delivery service within 12 pm.<br></p>', 'same-day-delivery-service', 1, '2023-11-02 08:47:34', '2023-11-02 09:00:12'),
(2, 2, 'Next Day Delivery service', 'media/services/2023-11-02-tO1EJdf251FfkiGcXyRDs9k2TQplyodIs5tiCGTS.webp', '<p>We ensures our merchant guaranteed delivery within 24 hours. We send SMS before the product is ready for dispatch. If Customer Does not respond, our call center executives informs the merchant rider is nearby customer’s location.<br></p>', 'next-day-delivery-service', 1, '2023-11-02 08:51:26', '2023-11-02 08:59:18'),
(4, 3, 'Sub area and Outside Dhaka Delivery', 'media/services/2023-11-02-sxgE2o5K3duE8bkwgWp7Pdn4k0m6NDkAAGJ7hknp.webp', '<p>We currently operating delivery service most of the Sub area of the Dhaka and some outside Dhaka and we try to deliver within 48 hours Within this year we will start our operations all over Bangladesh.<br></p>', 'sub-area-and-outside-dhaka-delivery', 1, '2023-11-02 09:01:24', '2023-11-02 09:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `services_tags`
--

CREATE TABLE `services_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_tags`
--

INSERT INTO `services_tags` (`id`, `title`, `serial`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Packaging', 1, 'packaging', '1', '2023-11-04 05:30:35', '2023-11-04 05:30:35'),
(2, 'Become Rider', 2, 'become-rider', '1', '2023-11-04 05:30:46', '2023-11-04 05:30:46'),
(3, 'Become Agent', 3, 'become-agent', '1', '2023-11-04 05:30:56', '2023-11-04 05:30:56'),
(4, 'Warehouse Support', 4, 'warehouse-support', '1', '2023-11-04 05:31:08', '2023-11-04 05:31:08'),
(5, 'Fraud Alert Service', 5, 'fraud-alert-service', '1', '2023-11-04 05:31:21', '2023-11-04 05:31:21'),
(6, 'Coverage Area', 6, 'coverage-area', '1', '2023-11-04 05:31:31', '2023-11-04 05:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `primary_mobile` varchar(255) DEFAULT NULL,
  `secondary_mobile` varchar(255) DEFAULT NULL,
  `primary_email` varchar(255) DEFAULT NULL,
  `secondary_email` varchar(255) DEFAULT NULL,
  `office_time` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_image` text DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `favicon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `placeholder` varchar(255) DEFAULT NULL,
  `facebook_page` varchar(255) DEFAULT NULL,
  `facebook_group` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `showcase_items`
--

CREATE TABLE `showcase_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `showcase_items`
--

INSERT INTO `showcase_items` (`id`, `title`, `thumbnail`, `short_description`, `slug`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'A LARGE VARIETY OF PRODUCTS', 'media/showcase_items/2023-10-03-cajlbwBGJgRx6Vw2t31WPMI3XShALRNLriyMA16j.webp', '<p>We have the freshest foods with the best quality from the food industry segment.<br></p>', 'a-large-variety-of-products', 1, 1, '2023-10-03 16:00:30', '2023-10-03 16:00:30'),
(2, 'A LARGE VARIETY OF PRODUCTS', 'media/showcase_items/2023-10-03-RFPPB7LJNm6I5W9cTZ8pekbYU6xFYaRdikoFhxAk.webp', '<span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment.</span>', 'a-large-variety-of-products', 2, 1, '2023-10-03 16:07:44', '2023-10-03 16:10:45'),
(3, 'A LARGE VARIETY OF PRODUCTS', 'media/showcase_items/2023-10-03-jHTHdHYN6BG6632hlZcdPFb6saHuLyz3mMABLp2a.webp', '<p><span style=\"text-align: center;\">We have the freshest foods with the best quality from the food industry segment</span><br></p>', 'a-large-variety-of-products', 3, 1, '2023-10-03 16:11:28', '2023-10-03 16:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `heading`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'OOD SERVICE DISTRIBUTORS NATIONAL & INTERNATIONAL WITH HIGH-QUALITY FOOD FOR YOUR RESTAURANT.', 'OOD SERVICE DISTRIBUTORS NATIONAL & INTERNATIONAL WITH HIGH-QUALITY FOOD FOR YOUR RESTAURANT.  HIGH-QUALITY FOOD FOR YOUR RESTAURANT.', 'media/slider/2023-10-02-Fos4yf6g4tkT5oKzaBVJi3ogFsdeJtuNWbd4GnlJ.webp', 1, '2023-10-02 15:48:52', '2023-10-02 15:48:52'),
(2, 'Dolorum accusantium unde nisi quidem quibusdam est reprehenderit', 'Dolorum accusantium unde nisi quidem quibusdam est reprehenderit।  Dolorum accusantium unde nisi quidem quibusdam est reprehenderit?', 'media/slider/2023-10-03-VwwrHxI66FB1WEHfXmBFgBvaJVvpO08jU9DMr5MG.webp', 1, '2023-10-03 11:09:43', '2023-10-03 11:09:43'),
(3, 'A Cycle of Scream as Posthuman Contingency Measure.', 'Dolorum accusantium unde nisi quidem quibusdam est reprehenderit।', 'media/slider/2023-10-04-S1CMcbUIIVpHHJgw3zbiHUvuXeEZM2llzgtgoUgi.webp', 1, '2023-10-03 11:10:07', '2023-10-04 04:03:58');

-- --------------------------------------------------------

--
-- Table structure for table `social_works`
--

CREATE TABLE `social_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_works`
--

INSERT INTO `social_works` (`id`, `title`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'media/social_works/2023-10-04-QAVrsWbB6NRS1wlJtJ34siScGtEttPjxqgP3RNKa.webp', 1, 1, '2023-10-04 03:49:39', '2023-10-04 03:49:39'),
(2, NULL, 'media/social_works/2023-10-04-wJgEeGykqSqhcUhvfM2b2r78jNGQBFXYkO2AlbzM.webp', 2, 1, '2023-10-04 03:50:08', '2023-10-04 03:50:08'),
(3, NULL, 'media/social_works/2023-10-04-W52eABEvajXPfzMLtqHpFdIdavDXTawnEuVqNZ4n.webp', 3, 1, '2023-10-04 03:50:47', '2023-10-04 03:50:47'),
(4, NULL, 'media/social_works/2023-10-04-fuaYVs0LvgsvlIUX6XOd3MUDZsq22ZLFbBT4yQJE.webp', 4, 1, '2023-10-04 03:51:13', '2023-10-04 03:51:13'),
(5, NULL, 'media/social_works/2023-10-04-RovQtIVdF5yiGR87zdhnh3k05aH2tu7ATTL53zH6.webp', 5, 1, '2023-10-04 03:51:25', '2023-10-04 06:20:18'),
(6, NULL, 'media/social_works/2023-10-04-iz7cqgFKiOuZa47BsPsaiX25FuheMbXN8maOos8u.webp', 6, 1, '2023-10-04 03:51:51', '2023-10-04 03:51:51');

-- --------------------------------------------------------

--
-- Table structure for table `special_food_items`
--

CREATE TABLE `special_food_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `special_food_items`
--

INSERT INTO `special_food_items` (`id`, `name`, `image`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Beef', 'media/special_food_items/2023-10-03-wvXiDfTKfd7GOYNXZjOIF5Utn0OWXXb7ygrNFGfD.webp', 1, 1, '2023-10-03 11:50:32', '2023-10-03 12:22:55'),
(2, 'Prok', 'media/special_food_items/2023-10-03-xudTJ8aB5rUTqUBhxVVMmb27PzQyv1DaRFWeVmJ5.webp', 2, 1, '2023-10-03 12:23:24', '2023-10-03 12:23:24'),
(3, 'poultry', 'media/special_food_items/2023-10-03-N7bpgvWddp9y1u0i7QuO4KiuVuGC8P5NDPKqABrM.webp', 3, 1, '2023-10-03 12:23:49', '2023-10-03 12:23:49'),
(4, 'sea food', 'media/special_food_items/2023-10-03-dprmvCrWPIjmf2TtNT0n6vXB92EfJLGaMfu7rhvl.webp', 4, 1, '2023-10-03 12:24:22', '2023-10-03 12:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `static_site_items`
--

CREATE TABLE `static_site_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `testimonial_title` varchar(255) NOT NULL,
  `details_video_url` varchar(255) NOT NULL,
  `products_title` varchar(255) NOT NULL,
  `header_bg_image` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `welcome_image` varchar(255) NOT NULL,
  `testimonial_image` varchar(255) NOT NULL,
  `x_separator_image` varchar(255) NOT NULL,
  `y_separator_image` varchar(255) NOT NULL,
  `shop_button_link` varchar(255) DEFAULT NULL,
  `contact_button_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `static_site_items`
--

INSERT INTO `static_site_items` (`id`, `title`, `short_description`, `banner_title`, `testimonial_title`, `details_video_url`, `products_title`, `header_bg_image`, `banner_image`, `welcome_image`, `testimonial_image`, `x_separator_image`, `y_separator_image`, `shop_button_link`, `contact_button_link`, `created_at`, `updated_at`) VALUES
(1, 'AFSWELCOME TO AFS', 'You are in the right place where you will find what you need for your restaurant at the best prices. The freshest products with the highest quality and excellent service. Explore our product collection and discover for yourself.', 'SHOP WITH US, RESTOCK YOUR INVENTORY QUICK & EASY.', 'ALWAYS, CLOSE TO YOU.', 'https://www.youtube.com/embed/tZwjVXQTE0c?si=buh7ys7ubIf-JzeJ', 'OUR PRODUCTS', 'media/site-items/2023-10-03-9y5Mr7QzwgDgS124p2bDNBJseSXgBVF1PLIHB9El.webp', 'media/site-items/2023-10-03-Ks3KztP2FkaALesdqsMBEf2YhsUoMmub42ehW07T.webp', 'media/site-items/2023-10-03-V43yN1ANy0ADg3S4NxQgZ75SNjxFxTiuaBhmHtNe.webp', 'media/site-items/2023-10-03-e5mGud9mdHnWZRF94nejSd7mpeciF352GxyfOvBX.webp', 'media/site-items/2023-10-03-8OfkG7MbLfPEphOtkQhn94iNtXQABRDrYLYiC13B.webp', 'media/site-items/2023-10-03-UqkuKHIPv4Q4l5ILV0Wc2kVRzpx8oPwRwYvJ1cF6.webp', 'http://localhost/technoparkbd/public/admin/site-item', 'http://localhost/technoparkbd/public/admin/site-item', '2023-10-03 10:59:56', '2023-10-03 11:04:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub_area_setups`
--

CREATE TABLE `sub_area_setups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_area_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `serial` bigint(20) UNSIGNED DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_area_setups`
--

INSERT INTO `sub_area_setups` (`id`, `main_area_id`, `title`, `serial`, `short_description`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'DHAKA CITY CORPORATION', 1, '<p>&nbsp;Full Coverage Inside City Corporation<br></p>', 'dhaka-city-corporation', 1, '2023-11-02 10:38:39', '2023-11-02 10:38:39'),
(2, 1, 'DHAKA - SUB AREA', 2, '<ul style=\"-webkit-font-smoothing: antialiased; color: rgb(53, 53, 53); font-family: Mulish, sans-serif; font-size: 15px; background-color: rgb(252, 252, 252);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"text-align: var(--bs-body-text-align); font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span><span style=\"text-align: var(--bs-body-text-align);\">Sanarpar</span><br></li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Matuail</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Chittagong Road</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Siddhirganj</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Kanchpur</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Demra</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Keraniganj</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Kamrangir char</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Ashulia</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Tongi</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Dakkhinkhan</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Uttarkahn</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Narayanganj</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Gazipur</li><li style=\"-webkit-font-smoothing: antialiased; list-style: none; font-size: 18px;\"><span class=\"fa fa-map-marker-alt\" style=\"font-family: &quot;Font Awesome 5 Free&quot;; margin-right: 10px;\"></span>Savar</li></ul>', 'dhaka-sub-area', 1, '2023-11-02 10:39:58', '2023-11-02 10:39:58'),
(3, 1, 'OUTSIDE OF DHAKA', 3, '<p>Full Coverage</p><p><br></p>', 'outside-of-dhaka', 1, '2023-11-02 10:40:52', '2023-11-02 10:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` text NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`id`, `title`, `serial`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'INTRODUCTION', 1, '<h4 style=\"font-family: &quot;Josefin Sans&quot;, sans-serif; color: rgb(199, 0, 57); -webkit-font-smoothing: antialiased; background-color: rgb(251, 251, 253);\">DEFINITIONS OF TERMS USED</h4><p style=\"margin-bottom: 15px; -webkit-font-smoothing: antialiased; font-family: Mulish, sans-serif; color: rgb(16, 40, 93); font-size: 16px; line-height: 30px; background-color: rgb(251, 251, 253);\">In these terms, the words or phrases below will have the following meanings.</p><ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">You, your authorized person who asks us to provide a delivery service, including any employee, agent or subcontractor acting on your behalf.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">We, our, us – Bahok Courier Limited</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Consignment – any item or items we carry for you from one address to another, including any packaging</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Dangerous goods – anything you may ask us to deliver that could put the health and safety of other people at risk. This includes (but is not restricted to) explosives, radioactive material, and items requiring specialist treatment or handling during transportation</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Proof of delivery – a signature or company stamp obtained from the consignee acknowledging that the consignment has been received</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Contract shall mean any contract entered into between the Courier and the Customer including this agreement</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Merchant shall mean the party with whom the Bahok Courier is contracting, and shall, unless the context indicates otherwise, include a reference to the owner of the Goods forming the subject matter of the Contract</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\"><span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Claim</span>&nbsp;means any claim of whatsoever nature</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\"><span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Register/Registration</span>&nbsp;means create an account on our Website/the action of creating an account on our Website</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Service means all or any of the services provided by Bahok Courier Limited via the Website or via other electronic or other communication from Bahok Courier Limited, including but not limited to the information services, content and transaction capabilities on the Website and the ability to make a Purchase</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Website means www.bahokcourierltd.com and any auxiliary website supplementary to our main website</li></ul>', '1', '2023-11-03 15:22:55', '2023-11-03 15:22:55'),
(2, 'GENERAL TERMS', 2, '<ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Bahok Courier will deliver the goods via bi-cycle, motorbike</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Any business undertaken by Bahok Courier is carried out subject to the conditions hereinafter set out, each of which shall be deemed to be incorporated in and to be a condition of any agreement whether written or oral implied between Bahok Courier and a Merchant</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Bahok Courier reserves the right to refuse the carriage or transportation of any documents or goods for any person, firm of company and the carriage of transportation of any class of documents or goods at its absolute discretion</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Any claims brought by a customer against Bahok Courier hereunder in respect of duties and liabilities must be notified to the office of Bahok Courier in writing within seven days(07) of the day when the documents or goods should have reached their destination.</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Merchant must provide reasonable access to the location so that the delivery drivers and/or employees are able to safely deliver the goods</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\"><span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Bahok Courier LTD</span>&nbsp;will do its best to ensure the safety of the goods in transit, and during the introduction of the goods into&nbsp;<span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Merchant</span>&nbsp;residence/business</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\"><span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Bahok Courier LTD</span>&nbsp;will not be responsible for any damages caused after its delivery drivers and/or employees leave Customers residence. Customer must sign a \"proof of delivery\" sheet to indicate this</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Every problem must be solved by the the spot of the customer</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">If parcel are stolen or lost or damaged,&nbsp;<span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Bahok Courier LTD</span>&nbsp;will compensate 50% price of the product</li></ul>', '1', '2023-11-03 15:23:20', '2023-11-03 15:23:20'),
(3, 'QUOTATIONS AND CHARGES', 3, '<ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">All quotations by the Bahok Courier shall be provided for on the website prior to payment</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">Quotations, where given, shall be on the basis of immediate acceptance and shall be subject to withdrawal or revision by the Bahok Courier</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">If any changes occur in the rates and other charges applicable to the Goods, quotations and charges shall be subject to revision accordingly with or without notice</li></ul>', '1', '2023-11-03 15:23:40', '2023-11-03 15:23:40'),
(4, 'DESCRIPTION OF GOODS', 4, '<ul class=\"mission-list\" style=\"margin-left: 30px; -webkit-font-smoothing: antialiased; color: rgb(33, 37, 41); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\"><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\">The Merchant shall provide to the Bahok Courier prior to loading a full documented description of the Goods on the website. All relevant information pertaining to the goods should filled out accurately</li><li style=\"-webkit-font-smoothing: antialiased; list-style: circle; margin-bottom: 5px;\"><span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Merchant</span> must inspect the goods to determine their condition prior to the departure of <span style=\"font-weight: bolder; -webkit-font-smoothing: antialiased;\">Bahok Courier LTD</span> employees and must pack the goods in best condition and fragile goods must be wrapped in bubble wrap or any other format that may not be damaged.</li></ul>', '1', '2023-11-03 15:24:04', '2023-11-03 15:24:12'),
(5, 'DANGEROUS GOODS', 5, '<p><span style=\"color: rgb(16, 40, 93); font-family: Mulish, sans-serif; font-size: 16px; background-color: rgb(251, 251, 253);\">No goods, including radioactive materials, which are or may become dangerous, inflammable or noxious, or which by their nature are or may become liable to cause injury or damage to any person, goods or property whatsoever, shall be tendered to the Company without its express consent in writing</span><br></p>', '1', '2023-11-03 15:24:35', '2023-11-03 15:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `thumbnail` text NOT NULL,
  `short_description` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `serial` bigint(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `title`, `thumbnail`, `short_description`, `slug`, `serial`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Md. Riyad Hossain', 'Founder & Managing Director of Bahok Courier Limited', 'media/testimonials/2023-11-02-YKtorkGHUd0hRViECLto9xAGpNGkMmPbFZ5sODuQ.webp', '<p>Our aim is to not only deliver the products we also build a strong relationship with merchant and work like on behalf of the company. We personally take care every single products.<br></p>', 'founder-managing-director-of-bahok-courier-limited', 1, 1, '2023-11-02 12:05:04', '2023-11-02 12:05:04'),
(5, 'Muhammad Kawsar Hamid', 'Partner & Chairman of Bahok Courier Limited', 'media/testimonials/2023-11-02-AESfDuIA52h7ZkQpUBcwOMaUtxuTZqsAIMgQbSIb.webp', '<p>We have talented riders and we trained them personally. We work on suggestion of the merchant what they desired for smooth delivery. We accept any kind of advice from our merchant.<br></p>', 'partner-chairman-of-bahok-courier-limited', 2, 1, '2023-11-02 12:06:06', '2023-11-02 12:06:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `user_name`, `email`, `phone`, `address`, `image`, `cover_image`, `bio`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, '$2y$10$nY8cBmrpMhPCqBZ8C8NLJeo764iiPDRTjI3cPkXcwNk6NS85gj5EW', NULL, '2023-10-02 15:28:59', '2023-10-02 15:28:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_faqs`
--
ALTER TABLE `about_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accordions`
--
ALTER TABLE `accordions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menus`
--
ALTER TABLE `admin_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_menu_actions`
--
ALTER TABLE `admin_menu_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_settings`
--
ALTER TABLE `admin_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_messages`
--
ALTER TABLE `client_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_items`
--
ALTER TABLE `delivery_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_prices`
--
ALTER TABLE `delivery_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_weight_setups`
--
ALTER TABLE `delivery_weight_setups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_cards`
--
ALTER TABLE `details_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `main_area_setups`
--
ALTER TABLE `main_area_setups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `main_area_setups_slug_unique` (`slug`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `processing_details`
--
ALTER TABLE `processing_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `processing_details_slug_unique` (`slug`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services_tags`
--
ALTER TABLE `services_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_tags_slug_unique` (`slug`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showcase_items`
--
ALTER TABLE `showcase_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_works`
--
ALTER TABLE `social_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `special_food_items`
--
ALTER TABLE `special_food_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_site_items`
--
ALTER TABLE `static_site_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_area_setups`
--
ALTER TABLE `sub_area_setups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sub_area_setups_slug_unique` (`slug`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_faqs`
--
ALTER TABLE `about_faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `accordions`
--
ALTER TABLE `accordions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_menus`
--
ALTER TABLE `admin_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `admin_menu_actions`
--
ALTER TABLE `admin_menu_actions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_settings`
--
ALTER TABLE `admin_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client_messages`
--
ALTER TABLE `client_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_items`
--
ALTER TABLE `delivery_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `delivery_prices`
--
ALTER TABLE `delivery_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `delivery_weight_setups`
--
ALTER TABLE `delivery_weight_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `details_cards`
--
ALTER TABLE `details_cards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_area_setups`
--
ALTER TABLE `main_area_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `processing_details`
--
ALTER TABLE `processing_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services_tags`
--
ALTER TABLE `services_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `showcase_items`
--
ALTER TABLE `showcase_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_works`
--
ALTER TABLE `social_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `special_food_items`
--
ALTER TABLE `special_food_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `static_site_items`
--
ALTER TABLE `static_site_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_area_setups`
--
ALTER TABLE `sub_area_setups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
