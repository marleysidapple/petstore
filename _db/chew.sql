-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 04:52 PM
-- Server version: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chew`
--

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_05_29_070057_create_roles_table', 1),
('2016_05_30_122850_create_states_table', 1),
('2016_05_30_122860_create_users_table', 1),
('2016_05_30_122865_create_password_resets_table', 1),
('2016_06_10_045410_create_stores_table', 1),
('2016_06_14_064107_create_retailer_contacts_table', 1),
('2016_07_16_150831_create_products_table', 1),
('2016_07_16_150915_create_ship_to_table', 1),
('2016_07_16_150916_create_order_payments_table', 1),
('2016_07_16_150917_create_orders_table', 1),
('2016_07_17_031823_create_testomonials_table', 1),
('2016_07_17_075324_add_featured_image_to_products_table', 1),
('2016_07_17_075710_add_published_at_to_products_table', 1),
('2016_07_17_081830_create_product_galleries_table', 1),
('2016_07_17_095431_add_description_to_table', 1),
('2016_07_17_103715_add_published_at_to_testomonials_table', 1),
('2016_07_17_104303_add_slug_at_to_testomonials_table', 1),
('2016_07_19_042806_add_is_approved_to_users_table', 1),
('2016_07_20_041204_add_quantity_to_products_table', 1),
('2016_07_20_090852_drop_product_id_from_order_payments_table', 1),
('2016_08_13_145856_add_ingredients_to_products_table', 1),
('2016_08_13_150016_add_guaranteed_analysis_to_products_table', 1),
('2016_08_13_162619_add_video_to_products_table', 1),
('2016_08_13_170405_add_common_dog_breeds_to_products_table', 1),
('2016_08_13_172313_create_faqs_table', 1),
('2016_08_14_051617_add_is_complete_to_orders_table', 1),
('2016_08_14_141011_create_settings_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payer_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order_payment_id` int(10) unsigned NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `quantity`, `price`, `currency`, `payer_id`, `order_payment_id`, `product_id`, `created_at`, `updated_at`, `deleted_at`, `is_complete`) VALUES
(3, 1, 25.00, 'USD', 'CARD-7KN918673Y634371NK6YGU2I', 7, 2, '2016-08-14 07:11:15', '2016-08-14 07:11:15', NULL, 0),
(4, 1, 25.00, 'USD', 'CARD-47695348RS3592036K6YGV3Q', 9, 2, '2016-08-14 07:13:29', '2016-08-14 07:13:29', NULL, 0),
(5, 1, 25.00, 'USD', 'CARD-3M184054AX641561MK6YGW4A', 10, 2, '2016-08-14 07:15:39', '2016-08-14 07:15:39', NULL, 0),
(6, 1, 25.00, 'USD', 'CARD-9S619764LJ9767643K6YGXRY', 11, 2, '2016-08-14 07:17:06', '2016-08-14 07:17:06', NULL, 0),
(7, 1, 25.00, 'USD', 'CARD-5TP175840P558950LK6YGX6A', 12, 2, '2016-08-14 07:17:54', '2016-08-14 07:17:54', NULL, 0),
(8, 1, 25.00, 'USD', 'CARD-88J37496KD659302CK6YGY6Q', 13, 2, '2016-08-14 07:20:05', '2016-08-14 07:20:05', NULL, 0),
(9, 1, 25.00, 'USD', 'CARD-75B15376PA375525LK6YGZ2I', 14, 2, '2016-08-14 07:21:56', '2016-08-14 07:21:56', NULL, 0),
(10, 1, 25.00, 'USD', 'CARD-2TB56836ND4909201K6YG2TI', 15, 2, '2016-08-14 07:23:35', '2016-08-14 07:55:05', NULL, 1),
(11, 2, 25.00, 'USD', '', 16, 2, '2016-08-25 02:47:43', '2016-08-25 02:47:43', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_payments`
--

CREATE TABLE IF NOT EXISTS `order_payments` (
  `id` int(10) unsigned NOT NULL,
  `payment_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `transaction_fee` double(8,2) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `sale_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ship_to_id` int(10) unsigned NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_payments`
--

INSERT INTO `order_payments` (`id`, `payment_id`, `state`, `amount`, `transaction_fee`, `description`, `sale_id`, `user_id`, `ship_to_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PAY-2J693187U0192600YK6YGHMY', 'approved', 50.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 06:42:36', '2016-08-14 06:42:36', NULL),
(2, 'PAY-1BW86126WF8093346K6YGIQA', 'approved', 50.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 06:44:56', '2016-08-14 06:44:56', NULL),
(3, 'PAY-72A564169V970413JK6YGI2I', 'approved', 50.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 06:45:38', '2016-08-14 06:45:38', NULL),
(4, 'PAY-8WW97043GN313630WK6YGNJY', 'approved', 50.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 06:55:12', '2016-08-14 06:55:12', NULL),
(5, 'PAY-6AH665973D1096426K6YGOFQ', 'approved', 50.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 06:57:03', '2016-08-14 06:57:03', NULL),
(6, 'PAY-4FL22356YD3000920K6YGUVQ', 'approved', 25.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 07:10:55', '2016-08-14 07:10:55', NULL),
(7, 'PAY-14C417059E122512DK6YGU2Y', 'approved', 25.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 07:11:15', '2016-08-14 07:11:15', NULL),
(8, 'PAY-44R06464E3722043GK6YGVVQ', 'approved', 25.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 07:13:03', '2016-08-14 07:13:03', NULL),
(9, 'PAY-8XM50060GH592813JK6YGV4A', 'approved', 25.00, 0.00, 'Buying dogs chews.', '', 1, 1, '2016-08-14 07:13:29', '2016-08-14 07:13:29', NULL),
(10, 'PAY-52V74226XC853684MK6YGW4Q', 'approved', 25.00, 0.00, 'Buying dogs chews.', '29V70819J2817005G', 1, 1, '2016-08-14 07:15:39', '2016-08-14 07:15:39', NULL),
(11, 'PAY-9A53636142538752YK6YGXSI', 'approved', 25.00, 0.00, 'Buying dogs chews.', '5X496407R0708793N', 1, 1, '2016-08-14 07:17:06', '2016-08-14 07:17:06', NULL),
(12, 'PAY-9XH08634UY756003YK6YGX6Q', 'approved', 25.00, 0.00, 'Buying dogs chews.', '9EA44257GT6839519', 1, 1, '2016-08-14 07:17:54', '2016-08-14 07:17:54', NULL),
(13, 'PAY-30842221BD191635SK6YGY7A', 'approved', 25.00, 0.00, 'Buying dogs chews.', '7T4105680E3942250', 1, 1, '2016-08-14 07:20:05', '2016-08-14 07:20:05', NULL),
(14, 'PAY-6VB35228YD378943AK6YGZ2Y', 'approved', 25.00, 0.00, 'Buying dogs chews.', '8KK42176NW746584N', 1, 1, '2016-08-14 07:21:56', '2016-08-14 07:21:56', NULL),
(15, 'PAY-5GF32427D1788080JK6YG2TQ', 'approved', 25.00, 0.00, 'Buying dogs chews.', '05T22162EM8122430', 1, 1, '2016-08-14 07:23:35', '2016-08-14 07:23:35', NULL),
(16, 'PAY-14V18107X8570120RK67K2KY', 'created', 50.00, 0.00, 'Buying dogs chews.', '', 6, 18, '2016-08-25 02:47:43', '2016-08-25 02:47:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `universal_product_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `regular_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discount_price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_discount_active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `featured_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ingredients` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guaranteed_analysis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `common_dog_breeds` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `universal_product_code`, `regular_price`, `discount_price`, `currency`, `is_discount_active`, `created_at`, `updated_at`, `deleted_at`, `featured_image`, `published_at`, `description`, `quantity`, `ingredients`, `guaranteed_analysis`, `video`, `common_dog_breeds`) VALUES
(1, 'Royal Purple', 'royal-purple', 'KLDSJF78978979', '25', '22', 'USD', '0', '2016-08-14 01:46:42', '2016-08-14 01:48:27', '2016-08-14 01:48:27', 'roya-dogs-chew_purple.jpg', '2016-08-14 18:15:00', '<p>&nbsp;</p>\r\n\r\n<p>Introducing our new super-long lasting, all-natural cheese chews. Handmade at 15,000ft on the countryside of the Himalayas using only milk, lime juice &amp; salt, Summit Dog Chews are the perfect treat to keep your buddy happy and occupied in a safe and natural way.</p>\r\n', '', '100% Yak and cow milk, Salt and Lime', 'Crude Protein Min 52.8% ,Crude Fat min 0.9%, Moisture Max 10.2% , Ash Max 6.0%', 'https://www.youtube.com/watch?v=lFDd80pRyNM', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n'),
(2, 'Royal Purple', 'royal-purple', 'KLDSJF78978979', '25', '22', 'USD', '0', '2016-08-14 01:48:14', '2016-08-14 01:50:23', NULL, 'roya-dogs-chew_purple.jpg', '2016-08-14 18:15:00', '<p>Introducing our new super-long lasting, all-natural cheese chews. Handmade at 15,000ft on the countryside of the Himalayas using only milk, lime juice &amp; salt, Summit Dog Chews are the perfect treat to keep your buddy happy and occupied in a safe and natural way.</p>\r\n', '70', '100% Yak and cow milk, Salt and Lime', 'Crude Protein Min 52.8% ,Crude Fat min 0.9%, Moisture Max 10.2% , Ash Max 6.0%', 'https://www.youtube.com/watch?v=lFDd80pRyNM', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product_galleries`
--

CREATE TABLE IF NOT EXISTS `product_galleries` (
  `id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_galleries`
--

INSERT INTO `product_galleries` (`id`, `image`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1471159902roya-dogs-chew-1_546_348.jpg', 1, '2016-08-14 01:46:42', '2016-08-14 01:46:42', NULL),
(2, '1471159902roya-dogs-chew-1_big_546_348.jpg', 1, '2016-08-14 01:46:42', '2016-08-14 01:46:42', NULL),
(3, '1471159903roya-dogs-chew-2_546_348.jpg', 1, '2016-08-14 01:46:43', '2016-08-14 01:46:43', NULL),
(4, '1471159903roya-dogs-chew-3_546_348.jpg', 1, '2016-08-14 01:46:43', '2016-08-14 01:46:43', NULL),
(5, '1471159994roya-dogs-chew-1_546_348.jpg', 2, '2016-08-14 01:48:14', '2016-08-14 01:48:14', NULL),
(6, '1471159994roya-dogs-chew-1_big_546_348.jpg', 2, '2016-08-14 01:48:14', '2016-08-14 01:48:14', NULL),
(7, '1471159994roya-dogs-chew-2_546_348.jpg', 2, '2016-08-14 01:48:14', '2016-08-14 01:48:14', NULL),
(8, '1471159994roya-dogs-chew-3_546_348.jpg', 2, '2016-08-14 01:48:14', '2016-08-14 01:48:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `retailer_contacts`
--

CREATE TABLE IF NOT EXISTS `retailer_contacts` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apt_ste` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `retailer_contacts`
--

INSERT INTO `retailer_contacts` (`id`, `name`, `slug`, `designation`, `email`, `apt_ste`, `street_address`, `city`, `phone_number`, `fax_number`, `zip`, `state_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sipes-Pacocha', 'sipes-pacocha', 'Prof. Luna Zulauf', 'gerry78@example.com', '70550 Florine Vista Apt. 827', '7310 Yasmin River Suite 652', 'North Jennifer', '971.758.6757', '508.314.5213 x16271', '00977', 2, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(2, 'Pollich-Doyle', 'pollich-doyle', 'Rickey Rogahn', 'ralph.strosin@example.com', '34388 O''Conner Pass', '3019 Carlee Bridge', 'Lake Camilaborough', '+1 (383) 519-7318', '903-323-8477', '00977', 8, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(3, 'Dickens LLC', 'dickens-llc', 'Dejah Ondricka', 'johnston.brady@example.com', '91131 Rosenbaum Cove', '562 Abigail Crescent Suite 172', 'Lake Camillefort', '(735) 976-5533', '(370) 600-7797', '00977', 5, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(4, 'Satterfield LLC', 'satterfield-llc', 'Malika Bechtelar', 'schinner.dallas@example.com', '3124 Watsica Summit', '98345 Enid Fall', 'Port Brycen', '+1-675-515-2199', '1-480-949-7217 x47286', '00977', 10, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(5, 'Schmeler LLC', 'schmeler-llc', 'Prof. Bobbie Mraz', 'geovany.dare@example.net', '105 Paucek Locks', '933 Allan Fords Apt. 204', 'Lake Shannaburgh', '+1.540.972.4391', '(243) 988-0857 x96419', '00977', 3, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(6, 'Pfeffer-Doyle', 'pfeffer-doyle', 'Horacio Howe Sr.', 'cwill@example.net', '61688 Reynolds Prairie', '227 Travis Pike Apt. 601', 'Clydefurt', '+1.840.478.5404', '440-686-4436 x546', '00977', 2, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(7, 'Hegmann, Medhurst and Stoltenberg', 'hegmann,-medhurst-and-stoltenberg', 'Linnea Pacocha', 'dena70@example.org', '36303 Upton Overpass Suite 738', '496 O''Keefe Mountains', 'Pattieton', '792-829-8255', '463-746-1310', '00977', 6, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(8, 'Skiles-Keeling', 'skiles-keeling', 'Bennett Schaefer II', 'ebogan@example.net', '1530 Senger Road', '553 Carole Plain Apt. 367', 'Hettingerview', '(536) 519-8189', '413.609.7862 x20865', '00977', 7, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(9, 'Price, Bauch and Harvey', 'price,-bauch-and-harvey', 'Dr. Vidal Armstrong', 'eliseo.davis@example.com', '9598 Toy Mountains', '35641 Hudson Isle Suite 374', 'Neomatown', '(421) 983-0926 x607', '+1-920-519-7218', '00977', 4, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(10, 'Maggio PLC', 'maggio-plc', 'Dr. Calista Kuvalis', 'yessenia.dickens@example.net', '4794 Murl Island Apt. 659', '3267 Elijah Mission', 'Starkborough', '1-685-440-4577', '(793) 561-0000 x918', '00977', 5, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(2, 'admin', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(3, 'retailer', '2016-08-14 01:42:24', '2016-08-14 01:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(3, 'youtube_playlist', 'PL0dHRQbCQHJ13VFP3654Q6kjyh0tSfEJZ', '2016-08-14 08:52:51', '2016-08-14 08:52:51');

-- --------------------------------------------------------

--
-- Table structure for table `ship_to`
--

CREATE TABLE IF NOT EXISTS `ship_to` (
  `id` int(10) unsigned NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ein_sale_tax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billing_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ship_to`
--

INSERT INTO `ship_to` (`id`, `company_name`, `contact_address`, `phone_number`, `email`, `ein_sale_tax`, `fax_number`, `shipping_address`, `billing_address`, `zip`, `created_at`, `updated_at`) VALUES
(1, 'Panchase', 'Pokhara', '9897889', 'aashish@danfetech.com', '87', '97987897', 'Pokhara', 'Pokhara', '44600d', '2016-08-14 02:08:31', '2016-08-14 02:08:31'),
(2, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 06:37:29', '2016-08-14 06:37:29'),
(3, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish.ghale@gmail.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 06:42:35', '2016-08-14 06:42:35'),
(4, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish.ghale@gmail.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 06:44:56', '2016-08-14 06:44:56'),
(5, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish.ghale@gmail.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 06:45:38', '2016-08-14 06:45:38'),
(6, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish.ghale@gmail.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 06:55:12', '2016-08-14 06:55:12'),
(7, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish.ghale@gmail.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 06:57:03', '2016-08-14 06:57:03'),
(8, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:10:55', '2016-08-14 07:10:55'),
(9, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:11:15', '2016-08-14 07:11:15'),
(10, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:13:03', '2016-08-14 07:13:03'),
(11, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:13:29', '2016-08-14 07:13:29'),
(12, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:15:39', '2016-08-14 07:15:39'),
(13, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:17:06', '2016-08-14 07:17:06'),
(14, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:17:54', '2016-08-14 07:17:54'),
(15, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:20:05', '2016-08-14 07:20:05'),
(16, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:21:55', '2016-08-14 07:21:55'),
(17, 'Panchase', 'Siddhartha Highway, Pardi birauta, ward no 17', '9806534837', 'aashish@danfetech.com', '87', '9806534837', 'Siddhartha Highway, Pardi birauta, ward no 17', 'Siddhartha Highway, Pardi birauta, ward no 17', '33700', '2016-08-14 07:23:35', '2016-08-14 07:23:35'),
(18, 'sid company inc.', 'RouseHill, Australia', '192178911', 'bsiddhartha25@gmail.com', '123123', '192178911', 'RouseHill, Australia', 'RouseHill, Australia', '2155', '2016-08-25 02:47:43', '2016-08-25 02:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abbr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `abbr`, `created_at`, `updated_at`) VALUES
(1, 'Pennsylvania', 'MT', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(2, 'District of Columbia', 'SD', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(3, 'Michigan', 'AR', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(4, 'Florida', 'IA', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(5, 'New Jersey', 'HI', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(6, 'South Carolina', 'LA', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(7, 'Texas', 'NC', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(8, 'Wyoming', 'WV', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(9, 'Washington', 'OK', '2016-08-14 01:42:24', '2016-08-14 01:42:24'),
(10, 'Wisconsin', 'NJ', '2016-08-14 01:42:24', '2016-08-14 01:42:24');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE IF NOT EXISTS `stores` (
  `id` int(10) unsigned NOT NULL,
  `store_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `store` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `suite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `private_phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`id`, `store_name`, `slug`, `store`, `suite`, `email`, `street_address`, `city`, `phone_number`, `private_phone_number`, `fax_number`, `zip`, `website`, `state_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lakin-Rempel', 'lakin-rempel', 'Brooke Harvey', 'Rhoda Bosco IV', 'maggio.whitney@example.net', '301 Kameron Mountains Apt. 046', 'West Dannie', '1-726-871-0479 x2454', '1-703-362-0581 x00915', '667-506-1618', '00977', 'schultz.org', 7, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(2, 'Kuvalis Inc', 'kuvalis-inc', 'Buford Sporer', 'Lionel Huels', 'zgreen@example.net', '56033 Trantow Shoals Suite 104', 'Audreannemouth', '(298) 850-2093 x7730', '+13478731231', '994.772.0076', '00977', 'boyle.org', 1, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(3, 'Bergnaum-Morar', 'bergnaum-morar', 'Mr. Sonny Langworth', 'Piper Ziemann', 'kautzer.eugenia@example.com', '548 Johnston Mews Apt. 458', 'Hickleside', '672-482-9299 x5474', '759.277.3212', '1-710-344-4843 x584', '00977', 'ortiz.com', 3, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(4, 'Jacobi, Willms and Dickinson', 'jacobi,-willms-and-dickinson', 'Dr. Maybelle Schuppe', 'Arlie Bergnaum', 'lynch.carissa@example.org', '76014 Vito Vista Apt. 691', 'Christiansenshire', '+1 (680) 339-7916', '1-276-293-5250 x5628', '+1 (707) 623-7492', '00977', 'wintheiser.com', 5, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(5, 'Pagac, Connelly and Harris', 'pagac,-connelly-and-harris', 'Kade Klocko', 'Prof. Troy Mitchell', 'wmayert@example.com', 'Illionis', 'Port Donniemouth', '(841) 360-5424 x1035', '231.676.0060 x033', '(805) 923-7408', '00977', 'jacobson.com', 1, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(6, 'Cassin-Rohan', 'cassin-rohan', 'Wilfred Macejkovic', 'Keith Hartmann Jr.', 'thomas27@example.com', '75962 Braxton Shoals Apt. 192', 'Hansenmouth', '851.922.3217 x50534', '669-754-8723 x1040', '+1-587-964-8992', '00977', 'moen.com', 1, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(7, 'Considine-Huel', 'considine-huel', 'Prof. Lorenzo Becker V', 'Myrtice Douglas PhD', 'sabina42@example.org', '58995 Stracke Circle Apt. 140', 'New Cicero', '415.753.6409', '589-843-5897', '450-529-0284', '00977', 'schroeder.com', 9, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(8, 'Will, Bosco and Crist', 'will,-bosco-and-crist', 'Abelardo Dooley Sr.', 'Keagan Doyle', 'prohaska.vivianne@example.net', '544 Mohr Stravenue', 'Rolfsonchester', '643-272-7160 x6510', '848.736.4651', '+18386008355', '00977', 'upton.org', 7, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(9, 'Heidenreich-Balistreri', 'heidenreich-balistreri', 'Prof. Myrtis Nienow', 'Dr. Polly Marvin PhD', 'nellie.armstrong@example.com', '78931 Zola Loaf', 'East Reta', '491-506-3320 x7281', '1-389-932-9823', '860-353-3561 x25865', '00977', 'heidenreich.com', 7, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL),
(10, 'Kohler LLC', 'kohler-llc', 'Dr. Riley Streich', 'Cleora Ferry', 'vyost@example.net', 'Vancouver', 'Bartholomehaven', '1-953-309-4386', '(702) 260-0568 x52018', '664.732.4962 x6678', '00977', 'rempel.org', 1, '2016-08-14 01:42:25', '2016-08-14 01:42:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testomonials`
--

CREATE TABLE IF NOT EXISTS `testomonials` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `company_store_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `apt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(10) unsigned NOT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tax_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `role_id`, `company_store_name`, `street_address`, `apt`, `city`, `state_id`, `zip`, `phone_number`, `fax_number`, `website`, `tax_id`, `remember_token`, `created_at`, `updated_at`, `is_approved`) VALUES
(1, 'Aashish Ghale', 'aacssh', 'aashish.ghale@gmail.com', '$2y$10$UZr1NL8BGlnLDBDAGmubS.hr.H85GU8AFcz7cfzjBKW/FlodA8PVK', 1, 'Okuneva, Wolff and Ritchie', '9612 Hoppe Locks', '65296 Katelin Square Apt. 525\nCroninmouth, TX 22521-6327', 'Lilystad', 2, '00977', '(732) 623-2242 x124', '1-279-883-8401', 'becker.net', '4344854905', 'AVcpXOA073e0pjXrhPqqSxVEBLGQ28eanP7NyStCsdCkOPhW1FQZ0ZAz6gT0', '2016-08-14 01:42:24', '2016-08-14 11:03:00', 1),
(2, 'Yazmin Runolfsson', 'aweimann', 'jstokes@example.org', '$2y$10$g2JAMkjZH5U9AYmPrskSPunn1eOjWXj.Hyu3.ipbUr9JOspweGYiK', 1, 'Krajcik-Parker', '179 Ayana River', '167 Hand Plains\nNew Sofiastad, WY 88528', 'Port Darian', 4, '00977', '319-534-9818 x60189', '372.456.7323', 'harber.org', '4344854905', '8HK1yMFGX5', '2016-08-14 01:42:24', '2016-08-14 01:42:24', 0),
(6, 'Sid apple', 'bsiddhartha25@gmail.com', 'bsiddhartha25@gmail.com', '$2y$10$7CX2EIuKIOVa5MtbtewKMOioTJXw1So/6wIbLPtlbKPZ2GYb4yE7C', 3, 'My test store  123', 'Lalitpur', 'hattisar', 'Bagmati', 1, '44600123', '9849339971', '192178911', 'palungo.com', '31231', '43pdLjLjtuYw6vn1dcyDurk29FgwlJBDZruFTfEr53YHJQ8I8zu8foL6I7hx', '2016-08-25 02:32:52', '2016-08-30 02:27:33', 1),
(8, 'Deepak Poudel', 'neymar.poudel@gmail.com', 'neymar.poudel@gmail.com', '$2y$10$fGep4er7j0p/r18f.0DPMeEJmfqwwUsugcdDIqeLitNd9h9dn/5F2', 3, 'Lake street 1', 'pokhara', 'lakeside', 'lakeside', 9, ' 2213123', '1293128312', '12312312312312343', 'www.test.com', '12312312', 'UDwQrunFJhx8pKX5tYAhz4NtzGjOEFPW7PRNmmECHxmezLYTOFXT1t3em9oW', '2016-08-28 22:33:11', '2016-08-28 22:34:54', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_order_payment_id_foreign` (`order_payment_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_payments_user_id_foreign` (`user_id`),
  ADD KEY `order_payments_ship_to_id_foreign` (`ship_to_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_galleries_product_id_foreign` (`product_id`);

--
-- Indexes for table `retailer_contacts`
--
ALTER TABLE `retailer_contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `retailer_contacts_state_id_foreign` (`state_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ship_to`
--
ALTER TABLE `ship_to`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `states_name_unique` (`name`),
  ADD UNIQUE KEY `states_abbr_unique` (`abbr`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stores_state_id_foreign` (`state_id`);

--
-- Indexes for table `testomonials`
--
ALTER TABLE `testomonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_state_id_foreign` (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `order_payments`
--
ALTER TABLE `order_payments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_galleries`
--
ALTER TABLE `product_galleries`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `retailer_contacts`
--
ALTER TABLE `retailer_contacts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ship_to`
--
ALTER TABLE `ship_to`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `testomonials`
--
ALTER TABLE `testomonials`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_order_payment_id_foreign` FOREIGN KEY (`order_payment_id`) REFERENCES `order_payments` (`id`),
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `order_payments`
--
ALTER TABLE `order_payments`
  ADD CONSTRAINT `order_payments_ship_to_id_foreign` FOREIGN KEY (`ship_to_id`) REFERENCES `ship_to` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `product_galleries`
--
ALTER TABLE `product_galleries`
  ADD CONSTRAINT `product_galleries_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `retailer_contacts`
--
ALTER TABLE `retailer_contacts`
  ADD CONSTRAINT `retailer_contacts_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stores_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
