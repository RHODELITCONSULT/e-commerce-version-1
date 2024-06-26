-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 23, 2024 at 10:18 AM
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
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `info_type` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) NOT NULL,
  `information` longtext DEFAULT NULL,
  `terms_and_conditions` longtext DEFAULT NULL,
  `privacy_policy` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `info_type`, `company_name`, `information`, `terms_and_conditions`, `privacy_policy`, `created_at`, `updated_at`) VALUES
(1, 'privacy-policy', 'RHODEL E-COMMERCE TERMS & CONDITION', NULL, NULL, '<p><strong>1. Introduction</strong></p>\r\n\r\n<p>This Privacy Policy describes how [Your Company Name] (&quot;we,&quot; &quot;us,&quot; or &quot;our&quot;) collects, uses, and shares your personal information when you visit our website ([Your Website URL]) or use our mobile application (the &quot;App&quot;) (collectively, the &quot;Services&quot;).</p>\r\n\r\n<p><strong>2. Information We Collect</strong></p>\r\n\r\n<p>We collect several types of information from and about users of our Services:</p>\r\n\r\n<ul>\r\n	<li><strong>Information you provide:</strong> This includes information you provide when you create an account, place an order, subscribe to our newsletter, or contact us. This may include your name, email address, billing and shipping address, phone number, and payment information.</li>\r\n	<li><strong>Information collected automatically:</strong> When you use our Services, we automatically collect certain information about your device, including your IP address, web browser type, operating system, time zone, and some of the cookies that are installed on your device. We may also collect information about your browsing behavior on our Services, such as the pages you visit and products you view.</li>\r\n	<li><strong>Information from third parties:</strong> We may collect information about you from third-party sources, such as social media platforms or marketing partners. This information may include your name, email address, demographic data, and interests.</li>\r\n</ul>\r\n\r\n<p><strong>3. Use of Your Information</strong></p>\r\n\r\n<p>We use the information we collect for various purposes, including:</p>\r\n\r\n<ul>\r\n	<li>To process your orders and fulfill your requests.</li>\r\n	<li>To send you marketing communications, such as newsletters and promotional offers.</li>\r\n	<li>To personalize your experience on our Services.</li>\r\n	<li>To improve our Services and develop new features.</li>\r\n	<li>To prevent fraud and maintain the security of our Services.</li>\r\n	<li>To comply with legal and regulatory requirements.</li>\r\n</ul>\r\n\r\n<p><strong>4. Sharing Your Information</strong></p>\r\n\r\n<p>We may share your information with third-party service providers who help us operate our business, such as payment processors, shipping companies, marketing agencies, and data analytics providers. We will only share your information with these third parties in accordance with this Privacy Policy and their own privacy policies.</p>\r\n\r\n<p>We may also share your information if we are required to do so by law or in the good faith belief that such action is necessary to protect our rights, property, or safety, or the rights, property, or safety of others.</p>\r\n\r\n<p><strong>5. Cookies and Other Tracking Technologies</strong></p>\r\n\r\n<p>We use cookies and other tracking technologies to collect and store information about your use of our Services. Cookies are small data files that are stored on your device when you visit a website. They allow us to track and target your interests, analyze trends, and improve our Services.</p>\r\n\r\n<p>You can control your cookie preferences through your web browser settings. However, if you disable cookies, you may not be able to use all of the features of our Services.</p>\r\n\r\n<p><strong>6. Your Privacy Rights</strong></p>\r\n\r\n<p>You have certain rights regarding your personal information, including:</p>\r\n\r\n<ul>\r\n	<li>The right to access your personal information.</li>\r\n	<li>The right to rectify inaccurate personal information.</li>\r\n	<li>The right to request the deletion of your personal information.</li>\r\n	<li>The right to object to the processing of your personal information.</li>\r\n	<li>The right to withdraw your consent to the processing of your personal information (where applicable).</li>\r\n</ul>\r\n\r\n<p>You can exercise these rights by contacting us at [Your Email Address].</p>\r\n\r\n<p><strong>7. Children&#39;s Privacy</strong></p>\r\n\r\n<p>Our Services are not directed to children under the age of [Age Limit, e.g., 13]. We do not knowingly collect personal information from children. If you are a parent or guardian and you believe your child has provided us with personal information, please contact us. If we learn that we have collected personal information from a child under [Age Limit], we will delete that information from our records.</p>\r\n\r\n<p><strong>8. Security</strong></p>\r\n\r\n<p>We take reasonable steps to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no internet transmission or electronic storage method is 100% secure. Therefore, we cannot guarantee the absolute security of your information.</p>\r\n\r\n<p><strong>9. Changes to this Privacy Policy</strong></p>\r\n\r\n<p>We may update this Privacy Policy from time to time to reflect changes in our practices or comply with legal requirements. We will notify you of any changes by posting the revised Privacy Policy on our Services.</p>\r\n\r\n<p><strong>10. Contact Us</strong></p>\r\n\r\n<p>If you have any questions about this Privacy Policy, please contact us at [Your Email Address].</p>', '2024-06-16 09:14:14', '2024-06-16 10:22:39'),
(2, 'terms-and-conditions', 'RHODEL E-COMMERCE TERMS & CONDITION', NULL, '<p><strong>1. Introduction</strong></p>\r\n\r\n<p>These Terms and Conditions (&quot;Terms&quot;) govern your access and use of the [App Name] mobile application (the &quot;App&quot;) developed and operated by [Your Company Name] (&quot;we,&quot; &quot;us,&quot; or &quot;our&quot;). By accessing or using the App, you agree to be bound by these Terms. If you do not agree to all the terms and conditions, you may not use the App.</p>\r\n\r\n<p><strong>2. User Accounts</strong></p>\r\n\r\n<p>You may be required to create an account (&quot;Account&quot;) to access certain features of the App. You are responsible for maintaining the confidentiality of your account information, including your login credentials, and for all activity that occurs under your account. You agree to:</p>\r\n\r\n<ul>\r\n	<li>Provide true, accurate, current, and complete information when creating your Account.</li>\r\n	<li>Maintain the security of your Account by not sharing your login credentials with anyone.</li>\r\n	<li>Notify us immediately of any unauthorized use of your Account or any other security breach.</li>\r\n</ul>\r\n\r\n<p><strong>3. Products and Services</strong></p>\r\n\r\n<p>The App allows you to browse and purchase a variety of products offered by us or third-party vendors. We reserve the right to modify, discontinue, or restrict access to any product or service at any time without prior notice.</p>\r\n\r\n<p><strong>4. Orders and Payment</strong></p>\r\n\r\n<p>When you place an order through the App, you agree to pay the total amount, including the price of the product, any applicable taxes, and shipping fees. We accept various payment methods as listed in the App. You represent and warrant that you have the legal right to use any payment method you select during checkout.</p>\r\n\r\n<p><strong>5. Shipping and Delivery</strong></p>\r\n\r\n<p>We will use commercially reasonable efforts to deliver your order within the estimated timeframe provided at checkout. However, we are not responsible for delays caused by factors beyond our control, such as carrier issues or inclement weather.</p>\r\n\r\n<p><strong>6. Returns and Refunds</strong></p>\r\n\r\n<p>Our return and refund policy is available on the App. You may be eligible for a return or refund depending on the product, condition, and timeframe.</p>\r\n\r\n<p><strong>7. User Content</strong></p>\r\n\r\n<p>You may submit reviews, ratings, or other content (&quot;User Content&quot;) to the App. You retain all ownership rights to your User Content, but by submitting it, you grant us a non-exclusive, royalty-free license to use, reproduce, modify, publish, and distribute your User Content in connection with the App. You are responsible for the accuracy and completeness of your User Content and agree that it will not violate the rights of any third party.</p>\r\n\r\n<p><strong>8. Intellectual Property</strong></p>\r\n\r\n<p>The App and all its content, including logos, trademarks, and copyrights, are the property of [Your Company Name] or its licensors. You may not use any of this intellectual property without our express written permission.</p>\r\n\r\n<p><strong>9. Disclaimer</strong></p>\r\n\r\n<p>The App is provided &quot;as is&quot; and &quot;as available&quot; without warranties of any kind, express or implied. We disclaim all warranties, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>\r\n\r\n<p><strong>10. Limitation of Liability</strong></p>\r\n\r\n<p>We will not be liable for any damages arising out of your use of the App, including but not limited to direct, indirect, incidental, consequential, or punitive damages.</p>\r\n\r\n<p><strong>11. Termination</strong></p>\r\n\r\n<p>We may terminate your access to the App for any reason, at any time, without notice. You may also terminate your Account at any time.</p>\r\n\r\n<p><strong>12. Governing Law and Dispute Resolution</strong></p>\r\n\r\n<p>These Terms will be governed by and construed in accordance with the laws of [Your State/Country]. Any dispute arising out of or relating to these Terms will be resolved through [Arbitration or Court litigation, specify which].</p>\r\n\r\n<p><strong>13. Entire Agreement</strong></p>\r\n\r\n<p>These Terms constitute the entire agreement between you and us regarding your use of the App.</p>\r\n\r\n<p><strong>14. Changes to Terms</strong></p>\r\n\r\n<p>We may update these Terms at any time by posting the revised version on the App. You are responsible for checking the Terms periodically. Your continued use of the App following the posting of revised Terms constitutes your acceptance of the revisions.</p>\r\n\r\n<p><strong>15. Contact Us</strong></p>\r\n\r\n<p>If you have any questions about these Terms, please contact us at [Your Email Address].</p>', NULL, '2024-06-16 10:21:40', '2024-06-16 10:21:40'),
(3, 'about-us', 'RHODEL E-COMMERCE', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', NULL, NULL, '2024-06-16 10:29:24', '2024-06-16 11:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'admin',
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `type`, `mobile`, `email`, `password`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '233244491803', 'admin@admin.com', '$2y$12$IccaIMN9XLowFPE3x7QiZe52USVat0iNuSYaMnVMDcJ7eobX1E6hG', NULL, 1, '2024-06-04 19:45:05', '2024-06-04 19:45:05'),
(2, 'Subadmin1', 'subadmin', '0123456789', 'subadmin1@gmail.com', '$2y$12$IOIkCezW.Stk93ZjEjv1zOLPc5Y00UKr/MLrfxv7Q.dmBz8.EB3pC', '', 1, '2024-06-16 12:08:06', '2024-06-16 12:08:06');

-- --------------------------------------------------------

--
-- Table structure for table `admins_roles`
--

CREATE TABLE `admins_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subadmin_id` bigint(20) UNSIGNED NOT NULL,
  `module` varchar(255) NOT NULL,
  `view_access` varchar(255) NOT NULL,
  `edit_access` varchar(255) NOT NULL,
  `full_access` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins_roles`
--

INSERT INTO `admins_roles` (`id`, `subadmin_id`, `module`, `view_access`, `edit_access`, `full_access`, `created_at`, `updated_at`) VALUES
(1, 1, 'categories', '1', '1', '1', '2024-06-04 19:45:05', '2024-06-04 19:45:05'),
(2, 1, 'brands', '1', '1', '1', '2024-06-04 19:45:05', '2024-06-04 19:45:05'),
(3, 1, 'products', '1', '1', '1', '2024-06-04 19:45:05', '2024-06-04 19:45:05'),
(4, 1, 'cms_pages', '1', '1', '1', '2024-06-04 19:45:05', '2024-06-04 19:45:05'),
(5, 1, 'orders', '1', '1', '1', '2024-06-04 19:45:05', '2024-06-04 19:45:05'),
(6, 1, 'subadmin_id', '1', '1', '1', '2024-06-04 19:45:05', '2024-06-04 19:45:05');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `type`, `link`, `title`, `alt`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(1, '69979.png', 'Slider', 'men', 'T-Shirt Collection', 'New collection', 1, 1, '2024-06-04 20:05:17', '2024-06-22 17:58:19'),
(2, '25485.png', 'Slider', 'women', 'Women Collection', 'Winter Collection', 2, 1, '2024-06-04 20:06:10', '2024-06-22 17:58:38'),
(4, '96340.png', 'Slider', 'kids', 'Winter Collection', 'New collection', 1, 1, '2024-06-04 20:07:26', '2024-06-22 19:15:19'),
(5, '37720.png', 'Fix', 'women', 'women', 'Women Collection', 2, 1, '2024-06-04 20:08:44', '2024-06-22 16:31:17'),
(6, '19440.png', 'Fix', 'women', 'fix-2', 'New collection', 1, 1, '2024-06-04 20:09:44', '2024-06-22 17:57:04'),
(7, '53079.png', 'Fix', 'men', 'men', 'T-Shirt Collection', 2, 1, '2024-06-04 20:12:46', '2024-06-22 16:32:14'),
(8, '10176.png', 'Fix', 'men', 'New Arrival', 'New Collection', 1, 1, '2024-06-04 20:13:52', '2024-06-22 17:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_image` varchar(255) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `brand_discount` double(8,2) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_image`, `brand_logo`, `brand_discount`, `description`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Arrow', '', '', 0.00, '', 'arrow', '', '', '', 1, NULL, NULL),
(2, 'Gab', '', '', 0.00, '', 'gab', '', '', '', 1, NULL, NULL),
(3, 'Nike', '', '', 0.00, '', 'nike', '', '', '', 1, NULL, NULL),
(4, 'Puma', '', '', 0.00, '', 'puma', '', '', '', 1, NULL, NULL),
(5, 'Monte Carlo', '', '', 0.00, '', 'monte-carlo', '', '', '', 1, NULL, NULL),
(8, 'Nasco', '', '', 0.00, 'Nasco', 'nasco', 'nasco', 'nasco', 'nasco', 1, '2024-06-17 17:21:28', '2024-06-17 17:21:28'),
(9, 'Samsung', '', '', 0.00, 'Samsung', 'samsung', 'Samsung', 'Samsung', 'Samsung', 1, '2024-06-17 19:16:07', '2024-06-17 19:16:07'),
(10, 'Fila', '', '', 0.00, 'Fila', 'fila', 'fila', 'fila', 'fila', 1, '2024-06-22 16:54:02', '2024-06-22 16:54:02');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `session_id`, `user_id`, `product_id`, `product_size`, `product_qty`, `created_at`, `updated_at`) VALUES
(16, 'dc256d78f7662054123826b7389379a0', 1, 1, 'XL', 1, '2024-06-23 07:47:12', '2024-06-23 07:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `category_discount` float(8,2) NOT NULL DEFAULT 0.00,
  `description` text DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `category_name`, `category_image`, `category_discount`, `description`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'CLOTHING', '', 0.00, '', 'clothing', '', '', '', 1, NULL, '2024-06-17 16:43:03'),
(2, 0, 'ELECTRONICS', '', 0.00, '', 'electronics', '', '', '', 1, NULL, '2024-06-17 16:43:26'),
(3, 0, 'APPLIANCES', '', 0.00, '', 'appliances', '', '', '', 1, NULL, '2024-06-17 16:43:40'),
(4, 1, 'Men', '', 0.00, '', 'men', '', '', '', 1, NULL, NULL),
(5, 1, 'Women', '', 0.00, '', 'women', '', '', '', 1, NULL, NULL),
(6, 1, 'Kids', '', 0.00, '', 'kids', '', '', '', 1, NULL, NULL),
(33, 2, 'Television', '', 0.00, 'television', 'television', 'television', 'television', 'television', 1, '2024-06-17 16:47:33', '2024-06-17 16:47:33'),
(34, 3, 'Refrigerator', '', 0.00, 'refrigerator', 'refrigerator', 'refrigerator', 'refrigerator', 'refrigerator', 1, '2024-06-17 16:48:55', '2024-06-17 16:48:55'),
(36, 2, 'Phone & Tablet', '', 0.00, 'Phone & Tablet', 'phone-tablet', 'Phone & Tablet', 'Phone & Tablet', 'Phone & Tablet', 1, '2024-06-17 19:17:22', '2024-06-22 18:14:34');

-- --------------------------------------------------------

--
-- Table structure for table `cms_pages`
--

CREATE TABLE `cms_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` varchar(255) NOT NULL,
  `meta_keywords` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_pages`
--

INSERT INTO `cms_pages` (`id`, `title`, `description`, `url`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(3, 'About-Us', 'for about us page', 'about-us', 'about-us', 'about-us', 'about-us', 1, '2024-06-05 12:51:46', '2024-06-05 12:51:46'),
(5, 'Terms and Conditions', 'This is to make terms and conditions page', 'terms-and-conditions', 'This displays all terms and conditions for the page', 'Terms and conditions', 'terms and conditions, T&Cs, T&C, Terms-and-Conditions, Terms & Conditions', 1, '2024-06-05 13:24:26', '2024-06-05 13:24:26'),
(6, 'Privacy Policy', 'Privacy policy for the platform', 'privacy-policy', 'privacy-policy', 'privacy-policy', 'privacy-policy', 1, '2024-06-05 13:25:29', '2024-06-05 13:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) NOT NULL,
  `color_code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `color_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Black', '#000000', 1, '2024-02-14 00:00:00', '2024-02-14 00:00:00'),
(2, 'color_name', 'color_code', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Brown', '#964B00', 1, '2024-02-16 00:00:00', '2024-02-16 00:00:00'),
(4, 'Green', '#00FF00', 1, '2024-02-17 00:00:00', '2024-02-17 00:00:00'),
(5, 'Grey', '#808080', 1, '2024-02-18 00:00:00', '2024-02-18 00:00:00'),
(6, 'Multi', '', 1, '2024-02-19 00:00:00', '2024-02-19 00:00:00'),
(7, 'Olive', '#808000', 1, '2024-02-20 00:00:00', '2024-02-20 00:00:00'),
(8, 'Orange', '#FFA500', 1, '2024-02-21 00:00:00', '2024-02-21 00:00:00'),
(9, 'Pink', '#FFC0CB', 1, '2024-02-22 00:00:00', '2024-02-22 00:00:00'),
(10, 'Purple', '#A020F0', 1, '2024-02-23 00:00:00', '2024-02-23 00:00:00'),
(11, 'Red', '#FF0000', 1, '2024-02-24 00:00:00', '2024-02-24 00:00:00'),
(12, 'White', '#FFFFFF', 1, '2024-02-25 00:00:00', '2024-02-25 00:00:00'),
(13, 'Yellow', '#FFFF00', 1, '2024-02-26 00:00:00', '2024-02-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'country_code', 'country_name', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'AL', 'Albania', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(3, 'DZ', 'Algeria', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(4, 'AS', 'American Samoa', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(5, 'AD', 'Andorra', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(6, 'AO', 'Angola', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(7, 'AI', 'Anguilla', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(8, 'AQ', 'Antarctica', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(9, 'AG', 'Antigua and Barbuda', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(10, 'AR', 'Argentina', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(11, 'AM', 'Armenia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(12, 'AW', 'Aruba', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(13, 'AU', 'Australia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(14, 'AT', 'Austria', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(15, 'AZ', 'Azerbaijan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(16, 'BS', 'Bahamas', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(17, 'BH', 'Bahrain', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(18, 'BD', 'Bangladesh', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(19, 'BB', 'Barbados', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(20, 'BY', 'Belarus', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(21, 'BE', 'Belgium', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(22, 'BZ', 'Belize', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(23, 'BJ', 'Benin', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(24, 'BM', 'Bermuda', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(25, 'BT', 'Bhutan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(26, 'BO', 'Bolivia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(27, 'BA', 'Bosnia and Herzegovina', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(28, 'BW', 'Botswana', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(29, 'BV', 'Bouvet Island', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(30, 'BR', 'Brazil', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(31, 'IO', 'British Indian Ocean Territory', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(32, 'BN', 'Brunei Darussalam', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(33, 'BG', 'Bulgaria', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(34, 'BF', 'Burkina Faso', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(35, 'BI', 'Burundi', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(36, 'KH', 'Cambodia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(37, 'CM', 'Cameroon', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(38, 'CA', 'Canada', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(39, 'CV', 'Cape Verde', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(40, 'KY', 'Cayman Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(41, 'CF', 'Central African Republic', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(42, 'TD', 'Chad', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(43, 'CL', 'Chile', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(44, 'CN', 'China', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(45, 'CX', 'Christmas Island', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(46, 'CC', 'Cocos (Keeling) Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(47, 'CO', 'Colombia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(48, 'KM', 'Comoros', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(49, 'CD', 'Democratic Republic of the Congo', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(50, 'CG', 'Republic of Congo', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(51, 'CK', 'Cook Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(52, 'CR', 'Costa Rica', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(53, 'HR', 'Croatia (Hrvatska)', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(54, 'CU', 'Cuba', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(55, 'CY', 'Cyprus', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(56, 'CZ', 'Czech Republic', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(57, 'DK', 'Denmark', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(58, 'DJ', 'Djibouti', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(59, 'DM', 'Dominica', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(60, 'DO', 'Dominican Republic', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(61, 'TL', 'East Timor', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(62, 'EC', 'Ecuador', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(63, 'EG', 'Egypt', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(64, 'SV', 'El Salvador', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(65, 'GQ', 'Equatorial Guinea', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(66, 'ER', 'Eritrea', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(67, 'EE', 'Estonia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(68, 'ET', 'Ethiopia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(69, 'FK', 'Falkland Islands (Malvinas)', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(70, 'FO', 'Faroe Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(71, 'FJ', 'Fiji', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(72, 'FI', 'Finland', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(73, 'FR', 'France', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(74, 'FX', 'France, Metropolitan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(75, 'GF', 'French Guiana', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(76, 'PF', 'French Polynesia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(77, 'TF', 'French Southern Territories', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(78, 'GA', 'Gabon', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(79, 'GM', 'Gambia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(80, 'GE', 'Georgia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(81, 'DE', 'Germany', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(82, 'GH', 'Ghana', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(83, 'GI', 'Gibraltar', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(84, 'GG', 'Guernsey', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(85, 'GR', 'Greece', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(86, 'GL', 'Greenland', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(87, 'GD', 'Grenada', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(88, 'GP', 'Guadeloupe', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(89, 'GU', 'Guam', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(90, 'GT', 'Guatemala', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(91, 'GN', 'Guinea', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(92, 'GW', 'Guinea-Bissau', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(93, 'GY', 'Guyana', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(94, 'HT', 'Haiti', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(95, 'HM', 'Heard and Mc Donald Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(96, 'HN', 'Honduras', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(97, 'HK', 'Hong Kong', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(98, 'HU', 'Hungary', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(99, 'IS', 'Iceland', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(100, 'IN', 'India', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(101, 'IM', 'Isle of Man', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(102, 'ID', 'Indonesia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(103, 'IR', 'Iran (Islamic Republic of)', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(104, 'IQ', 'Iraq', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(105, 'IE', 'Ireland', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(106, 'IL', 'Israel', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(107, 'IT', 'Italy', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(108, 'CI', 'Ivory Coast', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(109, 'JE', 'Jersey', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(110, 'JM', 'Jamaica', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(111, 'JP', 'Japan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(112, 'JO', 'Jordan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(113, 'KZ', 'Kazakhstan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(114, 'KE', 'Kenya', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(115, 'KI', 'Kiribati', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(116, 'KP', 'Korea, Democratic People\'s Republic of', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(117, 'KR', 'Korea, Republic of', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(118, 'XK', 'Kosovo', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(119, 'KW', 'Kuwait', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(120, 'KG', 'Kyrgyzstan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(121, 'LA', 'Lao People\'s Democratic Republic', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(122, 'LV', 'Latvia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(123, 'LB', 'Lebanon', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(124, 'LS', 'Lesotho', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(125, 'LR', 'Liberia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(126, 'LY', 'Libyan Arab Jamahiriya', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(127, 'LI', 'Liechtenstein', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(128, 'LT', 'Lithuania', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(129, 'LU', 'Luxembourg', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(130, 'MO', 'Macau', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(131, 'MK', 'North Macedonia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(132, 'MG', 'Madagascar', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(133, 'MW', 'Malawi', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(134, 'MY', 'Malaysia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(135, 'MV', 'Maldives', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(136, 'ML', 'Mali', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(137, 'MT', 'Malta', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(138, 'MH', 'Marshall Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(139, 'MQ', 'Martinique', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(140, 'MR', 'Mauritania', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(141, 'MU', 'Mauritius', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(142, 'YT', 'Mayotte', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(143, 'MX', 'Mexico', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(144, 'FM', 'Micronesia, Federated States of', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(145, 'MD', 'Moldova, Republic of', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(146, 'MC', 'Monaco', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(147, 'MN', 'Mongolia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(148, 'ME', 'Montenegro', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(149, 'MS', 'Montserrat', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(150, 'MA', 'Morocco', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(151, 'MZ', 'Mozambique', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(152, 'MM', 'Myanmar', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(153, 'NA', 'Namibia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(154, 'NR', 'Nauru', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(155, 'NP', 'Nepal', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(156, 'NL', 'Netherlands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(157, 'AN', 'Netherlands Antilles', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(158, 'NC', 'New Caledonia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(159, 'NZ', 'New Zealand', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(160, 'NI', 'Nicaragua', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(161, 'NE', 'Niger', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(162, 'NG', 'Nigeria', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(163, 'NU', 'Niue', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(164, 'NF', 'Norfolk Island', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(165, 'MP', 'Northern Mariana Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(166, 'NO', 'Norway', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(167, 'OM', 'Oman', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(168, 'PK', 'Pakistan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(169, 'PW', 'Palau', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(170, 'PS', 'Palestine', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(171, 'PA', 'Panama', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(172, 'PG', 'Papua New Guinea', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(173, 'PY', 'Paraguay', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(174, 'PE', 'Peru', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(175, 'PH', 'Philippines', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(176, 'PN', 'Pitcairn', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(177, 'PL', 'Poland', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(178, 'PT', 'Portugal', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(179, 'PR', 'Puerto Rico', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(180, 'QA', 'Qatar', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(181, 'RE', 'Reunion', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(182, 'RO', 'Romania', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(183, 'RU', 'Russian Federation', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(184, 'RW', 'Rwanda', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(185, 'KN', 'Saint Kitts and Nevis', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(186, 'LC', 'Saint Lucia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(187, 'VC', 'Saint Vincent and the Grenadines', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(188, 'WS', 'Samoa', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(189, 'SM', 'San Marino', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(190, 'ST', 'Sao Tome and Principe', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(191, 'SA', 'Saudi Arabia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(192, 'SN', 'Senegal', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(193, 'RS', 'Serbia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(194, 'SC', 'Seychelles', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(195, 'SL', 'Sierra Leone', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(196, 'SG', 'Singapore', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(197, 'SK', 'Slovakia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(198, 'SI', 'Slovenia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(199, 'SB', 'Solomon Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(200, 'SO', 'Somalia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(201, 'ZA', 'South Africa', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(202, 'GS', 'South Georgia South Sandwich Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(203, 'SS', 'South Sudan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(204, 'ES', 'Spain', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(205, 'LK', 'Sri Lanka', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(206, 'SH', 'St. Helena', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(207, 'PM', 'St. Pierre and Miquelon', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(208, 'SD', 'Sudan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(209, 'SR', 'Suriname', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(211, 'SZ', 'Eswatini', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(212, 'SE', 'Sweden', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(213, 'CH', 'Switzerland', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(214, 'SY', 'Syrian Arab Republic', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(215, 'TW', 'Taiwan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(216, 'TJ', 'Tajikistan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(217, 'TZ', 'Tanzania, United Republic of', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(218, 'TH', 'Thailand', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(219, 'TG', 'Togo', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(220, 'TK', 'Tokelau', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(221, 'TO', 'Tonga', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(222, 'TT', 'Trinidad and Tobago', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(223, 'TN', 'Tunisia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(224, 'TR', 'Turkey', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(225, 'TM', 'Turkmenistan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(226, 'TC', 'Turks and Caicos Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(227, 'TV', 'Tuvalu', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(228, 'UG', 'Uganda', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(229, 'UA', 'Ukraine', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(230, 'AE', 'United Arab Emirates', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(231, 'GB', 'United Kingdom', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(232, 'US', 'United States', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(233, 'UM', 'United States minor outlying islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(234, 'UY', 'Uruguay', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(235, 'UZ', 'Uzbekistan', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(236, 'VU', 'Vanuatu', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(237, 'VA', 'Vatican City State', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(238, 'VE', 'Venezuela', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(239, 'VN', 'Vietnam', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(240, 'VG', 'Virgin Islands (British)', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(241, 'VI', 'Virgin Islands (U.S.)', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(242, 'WF', 'Wallis and Futuna Islands', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(243, 'EH', 'Western Sahara', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(244, 'YE', 'Yemen', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(245, 'ZM', 'Zambia', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04'),
(246, 'ZW', 'Zimbabwe', 1, '0000-00-00 00:00:00', '2024-03-17 11:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_option` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `categories` text NOT NULL,
  `brands` text NOT NULL,
  `users` text NOT NULL,
  `coupon_type` varchar(255) NOT NULL,
  `amount_type` varchar(255) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `expiry_date` date NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_option`, `coupon_code`, `categories`, `brands`, `users`, `coupon_type`, `amount_type`, `amount`, `expiry_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Automatic', 'vWTSGFkE', '1,4,5,6,2,3', '1,2,3,4,5,8,9,10', 'delayevu@gmail.com', 'Single Time', 'Percentage', 10.00, '2024-12-31', 1, '2024-06-05 19:45:27', '2024-06-22 18:20:20'),
(2, 'Automatic', 'LRK0UaQ9', '1,4,5,6,2,3', '1,2,3,4,5,8,9,10', 'delayevu@gmail.com', 'Multiple Times', 'Percentage', 20.00, '2024-12-31', 1, '2024-06-06 12:29:13', '2024-06-22 18:19:57'),
(3, 'Automatic', 'SgXzcNc0', '1,4,5,6,2,3', '1,2,3,4,5,8,9,10', 'delayevu@gmail.com', 'Multiple Times', 'Percentage', 10.00, '2024-12-31', 1, '2024-06-15 00:47:44', '2024-06-22 18:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_addresses`
--

CREATE TABLE `delivery_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_addresses`
--

INSERT INTO `delivery_addresses` (`id`, `user_id`, `name`, `address`, `city`, `state`, `country`, `pincode`, `mobile`, `status`, `is_default`, `created_at`, `updated_at`) VALUES
(1, 1, 'Delali Yevu', 'Tema Ghana', 'Accra', 'Accra', 'Ghana', '1234', '0242035311', 1, 1, '2024-06-04 22:26:13', '2024-06-04 22:26:29');

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
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message_text` longtext NOT NULL,
  `reply_status` tinyint(1) NOT NULL DEFAULT 0,
  `replied_at` datetime DEFAULT NULL,
  `reply_text` longtext DEFAULT NULL,
  `read_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message_text`, `reply_status`, `replied_at`, `reply_text`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Delali Yevu', 'info@rhodelitconsult.com', 'Website Design Hosting and Domain Name', 'This Privacy Policy describes how [Your Company Name] (\"we,\" \"us,\" or \"our\") collects, uses, and shares your personal information when you visit our website ([Your Website URL]) or use our mobile application (the \"App\") (collectively, the \"Services\").', 0, NULL, NULL, '2024-06-22 18:16:58', '2024-06-16 15:17:24', '2024-06-22 18:16:58'),
(2, 'Mr. Pharmacist', 'rhodelitconsult@gmail.com', 'SALES OF HOSPITAL MANAGEMENT SOFTWARE', 'This Privacy Policy describes how [Your Company Name] (\"we,\" \"us,\" or \"our\") collects, uses, and shares your personal information when you visit our website ([Your Website URL]) or use our mobile application (the \"App\") (collectively, the \"Services\").', 1, '2024-06-16 15:25:10', 'This Privacy Policy describes how [Your Company Name] (\"we,\" \"us,\" or \"our\") collects, uses, and shares your personal information when you visit our website ([Your Website URL]) or use our mobile application (the \"App\") (collectively, the \"Services\").', '2024-06-22 18:16:53', '2024-06-16 15:20:21', '2024-06-22 18:16:53'),
(3, 'Delali Yevu', 'delayevu@gmail.com', 'SSL CERTIFICATE UNABLE TO ACTIVE', 'test', 0, NULL, NULL, '2024-06-22 18:17:10', '2024-06-22 17:08:55', '2024-06-22 18:17:10');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_28_131520_create_admins_table', 1),
(6, '2023_12_06_083351_create_cms_pages_table', 1),
(7, '2023_12_12_110703_create_admins_roles_table', 1),
(8, '2024_01_03_192422_create_categories_table', 1),
(9, '2024_02_14_175845_create_products_images_table', 1),
(10, '2024_02_16_074000_create_products_attributes_table', 1),
(11, '2024_02_19_130339_create_brands_table', 1),
(12, '2024_02_21_095417_create_banners_table', 1),
(13, '2024_02_28_115807_create_products_filters_table', 1),
(14, '2024_03_02_105527_create_recently_viewed_items_table', 1),
(15, '2024_03_02_130011_create_carts_table', 1),
(16, '2024_03_04_233500_add_columns_to_users_table', 1),
(17, '2024_03_17_190528_create_coupons_table', 1),
(18, '2024_04_24_124159_create_products_table', 1),
(19, '2024_04_24_152442_update_products_table', 1),
(20, '2024_04_30_102822_create_delivery_addresses_table', 1),
(21, '2024_05_01_122337_create_orders_table', 1),
(22, '2024_05_01_124544_create_orders_products_table', 1),
(23, '2024_05_03_211909_create_order_statuses_table', 1),
(24, '2024_05_04_204459_create_orders_logs_table', 1),
(25, '2024_05_04_213639_update_orders_table', 1),
(26, '2024_05_07_133100_create_payments_table', 1),
(27, '2024_05_07_212956_create_shipping_charges_table', 1),
(28, '2024_05_09_130623_create_newsletter_subscribers_table', 1),
(29, '2024_05_09_224114_create_ratings_table', 1),
(30, '2024_05_12_144946_create_wishlists_table', 1),
(31, '2024_06_01_195547_create_colors_table', 1),
(32, '2024_06_02_161222_create_countries_table', 1),
(33, '2024_06_04_110052_create_abouts_table', 1),
(34, '2024_06_05_133539_addd_privacy_policy_column_to_abouts', 2),
(35, '2024_06_16_094722_create_messages_table', 3),
(36, '2024_06_16_173151_create_products_table', 4),
(37, '2024_06_16_183638_create_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE `newsletter_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsletter_subscribers`
--

INSERT INTO `newsletter_subscribers` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'dela@gmail.com', 1, '2024-06-05 15:54:28', '2024-06-05 15:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `shipping_charges` double(8,2) NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `coupon_amount` double(8,2) DEFAULT NULL,
  `order_status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_gateway` varchar(255) NOT NULL,
  `grand_total` double(8,2) NOT NULL,
  `courier_name` varchar(255) NOT NULL,
  `tracking_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `address`, `city`, `state`, `country`, `pincode`, `mobile`, `email`, `shipping_charges`, `coupon_code`, `coupon_amount`, `order_status`, `payment_method`, `payment_gateway`, `grand_total`, `courier_name`, `tracking_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'Delali Yevu', 'Tema Ghana', 'Accra', 'Accra', 'Ghana', '1234', '0242035311', '', 10.00, NULL, NULL, 'New', 'COD', 'COD', 11.80, '', '', '2024-06-23 07:47:48', '2024-06-23 07:47:48'),
(2, 1, 'Delali Yevu', 'Tema Ghana', 'Accra', 'Accra', 'Ghana', '1234', '0242035311', '', 10.00, NULL, NULL, 'New', 'COD', 'COD', 11.80, '', '', '2024-06-23 07:50:17', '2024-06-23 07:50:17'),
(3, 1, 'Delali Yevu', 'Tema Ghana', 'Accra', 'Accra', 'Ghana', '1234', '0242035311', '', 10.00, NULL, NULL, 'Pending', 'Prepaid', 'Paystack', 11.80, '', '', '2024-06-23 07:50:54', '2024-06-23 07:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `orders_logs`
--

CREATE TABLE `orders_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `user_id`, `product_id`, `product_code`, `product_name`, `product_color`, `product_size`, `product_sku`, `product_price`, `product_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 'Y121', 'Yellow T-Shirt', 'Yellow', 'XL', 'FI3', 1.80, 1, '2024-06-23 07:47:48', '2024-06-23 07:47:48'),
(2, 2, 1, 1, 'Y121', 'Yellow T-Shirt', 'Yellow', 'XL', 'FI3', 1.80, 1, '2024-06-23 07:50:17', '2024-06-23 07:50:17'),
(3, 3, 1, 1, 'Y121', 'Yellow T-Shirt', 'Yellow', 'XL', 'FI3', 1.80, 1, '2024-06-23 07:50:54', '2024-06-23 07:50:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_statuses`
--

CREATE TABLE `order_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `amount` double(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `family_color` varchar(255) NOT NULL,
  `group_code` varchar(255) DEFAULT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_discount` double(8,2) NOT NULL,
  `discount_type` varchar(255) NOT NULL,
  `final_price` double(8,2) NOT NULL,
  `product_weight` double(8,2) NOT NULL,
  `product_video` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `wash_care` text DEFAULT NULL,
  `search_keywords` text DEFAULT NULL,
  `fabric` varchar(255) DEFAULT NULL,
  `pattern` varchar(255) DEFAULT NULL,
  `sleeve` varchar(255) DEFAULT NULL,
  `fit` varchar(255) DEFAULT NULL,
  `occasion` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `is_featured` enum('No','Yes') NOT NULL,
  `is_bestseller` enum('No','Yes') NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_code`, `product_color`, `family_color`, `group_code`, `product_price`, `product_discount`, `discount_type`, `final_price`, `product_weight`, `product_video`, `description`, `wash_care`, `search_keywords`, `fabric`, `pattern`, `sleeve`, `fit`, `occasion`, `meta_title`, `meta_description`, `meta_keywords`, `is_featured`, `is_bestseller`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 3, 'Yellow T-Shirt', 'Y121', 'Yellow', 'Yellow', 'Y121', 2.00, 10.00, 'product', 1.80, 23.00, '', 'Yellow Shirt', 'Normal wash with low bleach', 'fila', 'Polyester', 'Checked', 'Short Sleeve', 'Regular', 'Casual', 'fila', 'fila', 'fila', 'Yes', 'Yes', 1, '2024-06-16 18:42:39', '2024-06-23 07:37:54'),
(2, 4, 3, 'T-Shirt', 'PU01', 'Multi', 'Multi', 'MU', 2.00, 10.00, 'product', 1.80, 23.00, '', 'PUMA T-Shirt', 'Normal Wash with low bleach', 'T-Shirt', 'Cotton', 'Plain', 'Short Sleeve', 'Regular', 'Casual', 'tshirt', 'tshirt', 'tshirt', 'Yes', 'Yes', 1, '2024-06-17 14:44:00', '2024-06-23 07:38:33'),
(3, 5, 2, 'Women T-Shirt', 'Red', 'Red', 'Red', 'Red', 2.00, 10.00, 'product', 1.80, 12.00, '', 'Women T-Shirt', 'Normal wash', 'Women T-Shirt', 'Cotton', 'Plain', 'Short Sleeve', 'Regular', 'Casual', 'tshirt', 'tshirt', 'tshirt', 'Yes', 'Yes', 1, '2024-06-17 16:31:41', '2024-06-23 07:39:15'),
(4, 33, 8, 'Nasco Curve TV', 'Black', 'Black', 'Black', 'Black', 1250.00, 0.00, '', 1250.00, 7.00, '', 'Nasco Curve TV', NULL, 'Nasco Curve TV', NULL, NULL, NULL, NULL, NULL, 'tv', 'tv', 'tv', 'Yes', 'Yes', 1, '2024-06-17 17:26:28', '2024-06-22 16:45:14'),
(5, 34, 8, 'Nasco Double Door Fridge', 'Grey', 'Grey', 'Grey', 'Grey', 1299.00, 10.00, 'product', 1169.10, 203.00, '', 'Nasco Double Door Fridge', NULL, 'Nasco Double Door Fridge', NULL, NULL, NULL, NULL, NULL, 'Nasco Double Door Fridge', 'Nasco Double Door Fridge', 'Nasco Double Door Fridge', 'Yes', 'Yes', 1, '2024-06-17 17:42:02', '2024-06-22 16:45:33'),
(6, 33, 8, 'Nasco Flat TV', 'Grey', 'Grey', 'Grey', 'Grey', 1299.00, 0.00, '', 1299.00, 23.00, '', 'Nasco Flat TV', NULL, 'Nasco Flat TV', NULL, NULL, NULL, 'Regular', NULL, 'Nasco Flat TV', 'Nasco Flat TV', 'Nasco Flat TV', 'Yes', 'Yes', 1, '2024-06-17 17:55:28', '2024-06-17 19:17:58'),
(7, 34, 8, 'Deep Freezer', 'Grey', 'Grey', 'Grey', NULL, 1299.00, 0.00, '', 1299.00, 23.00, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 1, '2024-06-17 18:31:00', '2024-06-17 18:31:00'),
(8, 36, 9, 'Samsung S-Twenty Four', 'Grey', 'Grey', 'Grey', 'Grey', 2259.00, 5.00, 'product', 2146.05, 62.00, '', 'Samsung S24', NULL, 'Samsung S24', NULL, NULL, NULL, NULL, NULL, 'Samsung S24', 'Samsung S24', 'Samsung S24', 'Yes', 'Yes', 1, '2024-06-17 19:26:15', '2024-06-17 19:26:15'),
(9, 33, 8, 'Nasco 55\" LED UHD/4K Smart Satellite TV', 'Black', 'Black', 'Black', 'Black', 6799.00, 0.00, '', 6799.00, 0.00, '', NULL, NULL, 'nascotv', NULL, NULL, NULL, NULL, NULL, 'nascotv', 'nascotv', 'nascotv', 'Yes', 'Yes', 1, '2024-06-22 18:11:43', '2024-06-22 18:11:43'),
(10, 6, 5, 'Kids Jacket', 'Kac', 'Black', 'Black', 'Black', 300.00, 0.00, '', 300.00, 0.00, '', 'Kids Jacket', 'Normal', 'Kids Jacket', 'Wool', 'Plain', 'Full Sleeve', 'Regular', 'Casual', 'Kids Jacket', 'Kids Jacket', 'Kids Jacket', 'Yes', 'Yes', 1, '2024-06-22 19:19:55', '2024-06-22 19:19:55'),
(11, 6, 5, 'Multi Colored Jacket', 'Pink', 'Pink', 'Pink', 'Pink', 300.00, 0.00, '', 300.00, 0.00, '', 'Multi Colored Jacket', 'Normal', 'Multi Colored Jacket', 'Wool', 'Self', 'Full Sleeve', 'Regular', 'Casual', 'Multi Colored Jacket', 'Multi Colored Jacket', 'Multi Colored Jacket', 'Yes', 'Yes', 1, '2024-06-22 19:27:12', '2024-06-22 19:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `products_attributes`
--

CREATE TABLE `products_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_attributes`
--

INSERT INTO `products_attributes` (`id`, `product_id`, `size`, `sku`, `price`, `stock`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'S', 'FI1', 2.00, 100, 1, '2024-06-17 13:16:54', '2024-06-23 07:37:54'),
(2, 1, 'L', 'FI2', 2.00, 100, 1, '2024-06-17 13:16:54', '2024-06-23 07:37:54'),
(3, 1, 'XL', 'FI3', 2.00, 92, 1, '2024-06-17 13:16:54', '2024-06-23 07:50:17'),
(4, 2, 'S', 'PU1', 2.00, 100, 1, '2024-06-17 14:44:00', '2024-06-23 07:38:33'),
(5, 2, 'M', 'PU2', 2.00, 100, 1, '2024-06-17 14:53:30', '2024-06-23 07:38:33'),
(6, 2, 'L', 'PU3', 2.00, 100, 1, '2024-06-17 14:53:30', '2024-06-23 07:38:33'),
(7, 2, 'XL', 'PU4', 2.00, 100, 1, '2024-06-17 14:53:30', '2024-06-23 07:38:33'),
(8, 3, 'S', 'W01', 2.00, 100, 1, '2024-06-17 16:31:42', '2024-06-23 07:39:15'),
(9, 3, 'M', 'W02', 2.00, 100, 1, '2024-06-17 16:31:42', '2024-06-23 07:39:15'),
(10, 3, 'L', 'W03', 2.00, 98, 1, '2024-06-17 16:31:42', '2024-06-23 07:39:15'),
(11, 3, 'XL', 'W04', 2.00, 96, 1, '2024-06-17 16:31:42', '2024-06-23 07:39:15'),
(12, 4, '42\"', 'NA1', 1250.00, 100, 1, '2024-06-17 17:26:28', '2024-06-22 16:45:14'),
(13, 4, '45\"', 'NA2', 1550.00, 99, 1, '2024-06-17 17:28:08', '2024-06-22 16:45:14'),
(14, 6, '41\"', 'N01', 1299.00, 98, 1, '2024-06-17 17:55:28', '2024-06-22 16:40:31'),
(15, 7, '305kg', 'NG1', 2299.00, 100, 1, '2024-06-17 18:31:00', '2024-06-22 16:45:50'),
(16, 7, '450kg', 'NG2', 3299.00, 100, 1, '2024-06-17 18:31:00', '2024-06-22 16:45:50'),
(17, 8, 'S24', 'S24', 2299.00, 98, 1, '2024-06-17 19:26:15', '2024-06-22 16:47:09'),
(18, 5, '405kg', 'NASC01', 1299.00, 100, 1, '2024-06-22 16:44:36', '2024-06-22 16:45:33'),
(19, 5, '350kg', 'NASC02', 1599.00, 100, 1, '2024-06-22 16:44:36', '2024-06-22 16:45:33'),
(20, 9, '55\"', 'Nas55', 6799.00, 98, 1, '2024-06-22 18:11:44', '2024-06-22 18:22:09'),
(21, 10, 'Small', 'Jac1', 300.00, 100, 1, '2024-06-22 19:19:55', '2024-06-22 19:19:55'),
(22, 11, 'Small', 'KI02', 300.00, 100, 1, '2024-06-22 19:27:13', '2024-06-22 19:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `products_filters`
--

CREATE TABLE `products_filters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filter_name` varchar(255) NOT NULL,
  `filter_value` varchar(255) NOT NULL,
  `sort` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_filters`
--

INSERT INTO `products_filters` (`id`, `filter_name`, `filter_value`, `sort`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fabric', 'Cotten', 1, 1, NULL, NULL),
(2, 'Fabric', 'Polyester', 2, 1, NULL, NULL),
(3, 'Fabric', 'Wool', 3, 1, NULL, NULL),
(4, 'Sleeve', 'Full Sleeve', 1, 1, NULL, NULL),
(5, 'Sleeve', 'Half Sleeve', 2, 1, NULL, NULL),
(6, 'Sleeve', 'Short Sleeve', 3, 1, NULL, NULL),
(7, 'Pattern', 'Checked', 1, 1, NULL, NULL),
(8, 'Pattern', 'Plain', 2, 1, NULL, NULL),
(9, 'Pattern', 'Printed', 3, 1, NULL, NULL),
(10, 'Pattern', 'Self', 4, 1, NULL, NULL),
(11, 'Pattern', 'Solid', 5, 1, NULL, NULL),
(12, 'Fit', 'Regular', 1, 1, NULL, NULL),
(13, 'Fit', 'Slim', 2, 1, NULL, NULL),
(14, 'Occasion', 'Casual', 1, 1, NULL, NULL),
(15, 'Occasion', 'Formal', 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_sort` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `image`, `image_sort`, `status`, `created_at`, `updated_at`) VALUES
(17, 1, 'product-8469834.jpeg', 0, 1, '2024-06-22 16:34:46', '2024-06-23 07:37:54'),
(18, 2, 'product-1098777.jpeg', 0, 1, '2024-06-22 16:37:49', '2024-06-23 07:38:33'),
(19, 3, 'product-7125262.jpeg', 0, 1, '2024-06-22 16:39:02', '2024-06-23 07:39:15'),
(20, 4, 'product-5143850.jpeg', 0, 1, '2024-06-22 16:40:04', '2024-06-22 16:45:14'),
(21, 6, 'product-5969354.jpeg', 0, 1, '2024-06-22 16:40:31', '2024-06-22 16:40:31'),
(22, 7, 'product-2458791.jpeg', 0, 1, '2024-06-22 16:41:15', '2024-06-22 16:45:50'),
(23, 8, 'product-3613159.jpeg', 0, 1, '2024-06-22 16:42:33', '2024-06-22 16:46:00'),
(24, 5, 'product-8611581.jpeg', 0, 1, '2024-06-22 16:44:36', '2024-06-22 16:45:33'),
(25, 9, 'product-8523599.png', 0, 1, '2024-06-22 18:11:44', '2024-06-22 18:11:44'),
(26, 10, 'product-9169427.jpeg', 0, 1, '2024-06-22 19:19:55', '2024-06-22 19:19:55'),
(27, 11, 'product-9915809.jpeg', 0, 1, '2024-06-22 19:27:12', '2024-06-22 19:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `review` text NOT NULL,
  `rating` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_id`, `review`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'test', 4, 0, '2024-06-22 19:03:13', '2024-06-22 19:03:13');

-- --------------------------------------------------------

--
-- Table structure for table `recently_viewed_items`
--

CREATE TABLE `recently_viewed_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recently_viewed_items`
--

INSERT INTO `recently_viewed_items` (`id`, `product_id`, `session_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'dc256d78f7662054123826b7389379a0', NULL, NULL),
(2, 11, 'dc256d78f7662054123826b7389379a0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(255) NOT NULL,
  `rate` double(8,2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `country`, `rate`, `status`, `created_at`, `updated_at`) VALUES
(1, 'country', 80.00, 0, '0000-00-00 00:00:00', '2024-06-15 00:14:09'),
(2, 'Albania', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(3, 'Algeria', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(4, 'American Samoa', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(5, 'Andorra', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(6, 'Angola', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(7, 'Anguilla', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(8, 'Antarctica', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(9, 'Antigua and Barbuda', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(10, 'Argentina', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(11, 'Armenia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(12, 'Aruba', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(13, 'Australia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(14, 'Austria', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(15, 'Azerbaijan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(16, 'Bahamas', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(17, 'Bahrain', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(18, 'Bangladesh', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(19, 'Barbados', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(20, 'Belarus', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(21, 'Belgium', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(22, 'Belize', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(23, 'Benin', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(24, 'Bermuda', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(25, 'Bhutan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(26, 'Bolivia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(27, 'Bosnia and Herzegovina', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(28, 'Botswana', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(29, 'Bouvet Island', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(30, 'Brazil', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(31, 'British Indian Ocean Territory', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(32, 'Brunei Darussalam', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(33, 'Bulgaria', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(34, 'Burkina Faso', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(35, 'Burundi', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(36, 'Cambodia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(37, 'Cameroon', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(38, 'Canada', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(39, 'Cape Verde', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(40, 'Cayman Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(41, 'Central African Republic', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(42, 'Chad', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(43, 'Chile', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(44, 'China', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(45, 'Christmas Island', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(46, 'Cocos (Keeling) Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(47, 'Colombia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(48, 'Comoros', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(49, 'Democratic Republic of the Congo', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(50, 'Republic of Congo', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(51, 'Cook Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(52, 'Costa Rica', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(53, 'Croatia (Hrvatska)', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(54, 'Cuba', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(55, 'Cyprus', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(56, 'Czech Republic', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(57, 'Denmark', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(58, 'Djibouti', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(59, 'Dominica', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(60, 'Dominican Republic', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(61, 'East Timor', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(62, 'Ecuador', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(63, 'Egypt', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(64, 'El Salvador', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(65, 'Equatorial Guinea', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(66, 'Eritrea', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(67, 'Estonia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(68, 'Ethiopia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(69, 'Falkland Islands (Malvinas)', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(70, 'Faroe Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(71, 'Fiji', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(72, 'Finland', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(73, 'France', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(74, 'France, Metropolitan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(75, 'French Guiana', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(76, 'French Polynesia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(77, 'French Southern Territories', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(78, 'Gabon', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(79, 'Gambia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(80, 'Georgia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(81, 'Germany', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(82, 'Ghana', 10.00, 1, '2024-05-07 00:00:00', '2024-05-09 09:45:03'),
(83, 'Gibraltar', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(84, 'Guernsey', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(85, 'Greece', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(86, 'Greenland', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(87, 'Grenada', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(88, 'Guadeloupe', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(89, 'Guam', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(90, 'Guatemala', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(91, 'Guinea', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(92, 'Guinea-Bissau', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(93, 'Guyana', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(94, 'Haiti', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(95, 'Heard and Mc Donald Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(96, 'Honduras', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(97, 'Hong Kong', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(98, 'Hungary', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(99, 'Iceland', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(100, 'India', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(101, 'Isle of Man', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(102, 'Indonesia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(103, 'Iran (Islamic Republic of)', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(104, 'Iraq', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(105, 'Ireland', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(106, 'Israel', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(107, 'Italy', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(108, 'Ivory Coast', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(109, 'Jersey', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(110, 'Jamaica', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(111, 'Japan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(112, 'Jordan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(113, 'Kazakhstan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(114, 'Kenya', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(115, 'Kiribati', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(116, 'Korea, Democratic People\'s Republic of', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(117, 'Korea, Republic of', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(118, 'Kosovo', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(119, 'Kuwait', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(120, 'Kyrgyzstan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(121, 'Lao People\'s Democratic Republic', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(122, 'Latvia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(123, 'Lebanon', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(124, 'Lesotho', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(125, 'Liberia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(126, 'Libyan Arab Jamahiriya', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(127, 'Liechtenstein', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(128, 'Lithuania', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(129, 'Luxembourg', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(130, 'Macau', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(131, 'North Macedonia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(132, 'Madagascar', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(133, 'Malawi', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(134, 'Malaysia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(135, 'Maldives', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(136, 'Mali', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(137, 'Malta', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(138, 'Marshall Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(139, 'Martinique', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(140, 'Mauritania', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(141, 'Mauritius', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(142, 'Mayotte', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(143, 'Mexico', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(144, 'Micronesia, Federated States of', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(145, 'Moldova, Republic of', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(146, 'Monaco', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(147, 'Mongolia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(148, 'Montenegro', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(149, 'Montserrat', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(150, 'Morocco', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(151, 'Mozambique', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(152, 'Myanmar', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(153, 'Namibia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(154, 'Nauru', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(155, 'Nepal', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(156, 'Netherlands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(157, 'Netherlands Antilles', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(158, 'New Caledonia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(159, 'New Zealand', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(160, 'Nicaragua', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(161, 'Niger', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(162, 'Nigeria', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-09 09:23:27'),
(163, 'Niue', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(164, 'Norfolk Island', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(165, 'Northern Mariana Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(166, 'Norway', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(167, 'Oman', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(168, 'Pakistan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(169, 'Palau', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(170, 'Palestine', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(171, 'Panama', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(172, 'Papua New Guinea', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(173, 'Paraguay', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(174, 'Peru', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(175, 'Philippines', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(176, 'Pitcairn', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(177, 'Poland', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(178, 'Portugal', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(179, 'Puerto Rico', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(180, 'Qatar', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(181, 'Reunion', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(182, 'Romania', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(183, 'Russian Federation', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(184, 'Rwanda', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(185, 'Saint Kitts and Nevis', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(186, 'Saint Lucia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(187, 'Saint Vincent and the Grenadines', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(188, 'Samoa', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(189, 'San Marino', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(190, 'Sao Tome and Principe', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(191, 'Saudi Arabia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(192, 'Senegal', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(193, 'Serbia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(194, 'Seychelles', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(195, 'Sierra Leone', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(196, 'Singapore', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(197, 'Slovakia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(198, 'Slovenia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(199, 'Solomon Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(200, 'Somalia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(201, 'South Africa', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(202, 'South Georgia South Sandwich Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(203, 'South Sudan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(204, 'Spain', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(205, 'Sri Lanka', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(206, 'St. Helena', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(207, 'St. Pierre and Miquelon', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(208, 'Sudan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(209, 'Suriname', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(210, 'Svalbard and Jan Mayen Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(211, 'Eswatini', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(212, 'Sweden', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(213, 'Switzerland', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(214, 'Syrian Arab Republic', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(215, 'Taiwan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(216, 'Tajikistan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(217, 'Tanzania, United Republic of', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(218, 'Thailand', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(219, 'Togo', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(220, 'Tokelau', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(221, 'Tonga', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(222, 'Trinidad and Tobago', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(223, 'Tunisia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(224, 'Turkey', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(225, 'Turkmenistan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(226, 'Turks and Caicos Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(227, 'Tuvalu', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(228, 'Uganda', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(229, 'Ukraine', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(230, 'United Arab Emirates', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(231, 'United Kingdom', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(232, 'United States', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(233, 'United States minor outlying islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(234, 'Uruguay', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(235, 'Uzbekistan', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(236, 'Vanuatu', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(237, 'Vatican City State', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(238, 'Venezuela', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(239, 'Vietnam', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(240, 'Virgin Islands (British)', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(241, 'Virgin Islands (U.S.)', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(242, 'Wallis and Futuna Islands', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(243, 'Western Sahara', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-07 00:00:00'),
(244, 'Yemen', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-08 10:03:19'),
(245, 'Zambia', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-08 10:03:20'),
(246, 'Zimbabwe', 1000.00, 1, '2024-05-07 00:00:00', '2024-05-08 10:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `city`, `state`, `country`, `pincode`, `mobile`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Delali Yevu', '', NULL, NULL, NULL, NULL, '0244491803', 'delayevu@gmail.com', NULL, '$2y$12$IJVUkjNnMosRlySckLpBo.Hbx1RNqUuvDoHYT3nDfOX7.uRD6o/jO', NULL, 1, '2024-06-17 13:11:35', '2024-06-17 13:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admins_roles`
--
ALTER TABLE `admins_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_pages`
--
ALTER TABLE `cms_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_logs`
--
ALTER TABLE `orders_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_statuses`
--
ALTER TABLE `order_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_attributes`
--
ALTER TABLE `products_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_filters`
--
ALTER TABLE `products_filters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recently_viewed_items`
--
ALTER TABLE `recently_viewed_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admins_roles`
--
ALTER TABLE `admins_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `cms_pages`
--
ALTER TABLE `cms_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `delivery_addresses`
--
ALTER TABLE `delivery_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `newsletter_subscribers`
--
ALTER TABLE `newsletter_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders_logs`
--
ALTER TABLE `orders_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_statuses`
--
ALTER TABLE `order_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products_attributes`
--
ALTER TABLE `products_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `products_filters`
--
ALTER TABLE `products_filters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products_images`
--
ALTER TABLE `products_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recently_viewed_items`
--
ALTER TABLE `recently_viewed_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
