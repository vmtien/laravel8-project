-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2022 lúc 10:04 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale` int(255) DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#',
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `prioty` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `sale`, `link`, `description`, `status`, `prioty`, `created_at`, `updated_at`) VALUES
(8, 'Laptop MSI Gaming Stealth 15M A11UEK-232VN', '1655712275-msi-gaming-stealth-15m-xam-1.jpg', 10, 'http://127.0.0.1:8000/chi-tiet-san-pham/7', '<p>Laptop gaming mỏng nhẹ cấu hình khủng chơi mọi loại game</p>', 1, 1, '2022-06-20 01:04:35', '2022-06-20 01:15:32'),
(9, 'Laptop MSI Summit E13 Flip Evo A11MT- 220VN', '1655715226-msi-summit-e13-flip-den-1.jpg', 5, 'http://127.0.0.1:8000/chi-tiet-san-pham/23', '<p>Laptop xoay gập 2 trong 1,màn hình cảm ứng</p>', 1, 2, '2022-06-20 01:53:46', '2022-06-20 01:56:57'),
(10, 'Laptop Asus Zenbook Duo UX482EA-KA274T', '1655716131-asus-zenbook-duo-ux482-xanh-1.jpg', 10, 'http://127.0.0.1:8000/chi-tiet-san-pham/21', '<p>Laptop mỏng nhẹ với 2 màn hình siêu độc đáo</p>', 1, 3, '2022-06-20 02:08:51', '2022-06-20 02:09:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MSI', 'MSI-Symbol.png', 1, '2022-02-21 19:42:28', '2022-06-22 02:35:25'),
(2, 'HP', 'logo hp.png1645497789', 1, '2022-02-21 19:43:09', '2022-02-21 19:43:09'),
(3, 'Dell', 'logo dell.png1645498283', 1, '2022-02-21 19:51:23', '2022-02-21 19:51:54'),
(4, 'Asus', 'logo asus.png1645498304', 1, '2022-02-21 19:51:44', '2022-02-21 19:51:44'),
(5, 'Acer', 'Acer-Logo.png', 1, '2022-02-21 19:53:43', '2022-06-22 02:53:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lapptop Gaming', 1, '2022-02-21 19:33:10', '2022-02-21 19:33:10'),
(2, 'Học tập', 1, '2022-02-21 19:33:22', '2022-03-07 03:04:17'),
(3, 'Văn phòng', 1, '2022-02-21 19:33:37', '2022-03-07 03:04:02'),
(4, 'Laptop mỏng nhẹ', 1, '2022-02-21 19:36:52', '2022-02-21 19:36:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `img_products`
--

CREATE TABLE `img_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `img_products`
--

INSERT INTO `img_products` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(19, 'msi-gaming-gf66-den-5.jpg1646412481', 6, '2022-03-04 09:48:01', '2022-03-04 09:48:01'),
(20, 'msi-gaming-gf66-den-4.jpg1646412481', 6, '2022-03-04 09:48:01', '2022-03-04 09:48:01'),
(21, 'msi-gaming-gf66-den-3.jpg1646412481', 6, '2022-03-04 09:48:01', '2022-03-04 09:48:01'),
(22, 'msi-gaming-gf66-den-2.jpg1646412481', 6, '2022-03-04 09:48:01', '2022-03-04 09:48:01'),
(38, 'asus-vivobook-pro-m3500qc-bac-2.jpg1646639449', 10, '2022-03-07 00:50:49', '2022-03-07 00:50:49'),
(39, 'asus-vivobook-pro-m3500qc-bac-3.jpg1646639449', 10, '2022-03-07 00:50:49', '2022-03-07 00:50:49'),
(40, 'asus-vivobook-pro-m3500qc-bac-4.jpg1646639449', 10, '2022-03-07 00:50:49', '2022-03-07 00:50:49'),
(41, 'asus-vivobook-pro-m3500qc-bac-5.jpg1646639449', 10, '2022-03-07 00:50:49', '2022-03-07 00:50:49'),
(42, 'dell-gaming-g7-15-den-2.jpg1646639827', 11, '2022-03-07 00:57:07', '2022-03-07 00:57:07'),
(43, 'dell-gaming-g7-15-den-3.jpg1646639827', 11, '2022-03-07 00:57:07', '2022-03-07 00:57:07'),
(44, 'dell-gaming-g7-15-den-4.jpg1646639827', 11, '2022-03-07 00:57:07', '2022-03-07 00:57:07'),
(45, 'dell-gaming-g7-15-den-5.jpg1646639827', 11, '2022-03-07 00:57:07', '2022-03-07 00:57:07'),
(51, 'dell-g5-15-5500-den-5.jpg1646640904', 13, '2022-03-07 01:15:04', '2022-03-07 01:15:04'),
(52, 'dell-g5-15-5500-den-4.jpg1646640904', 13, '2022-03-07 01:15:04', '2022-03-07 01:15:04'),
(53, 'dell-g5-15-5500-den-3.jpg1646640904', 13, '2022-03-07 01:15:04', '2022-03-07 01:15:04'),
(54, 'dell-g5-15-5500-den-2.jpg1646640904', 13, '2022-03-07 01:15:04', '2022-03-07 01:15:04'),
(55, 'hp-gaming-omen-16-rtx-3050ti-den-5.jpg1646641314', 14, '2022-03-07 01:21:54', '2022-03-07 01:21:54'),
(56, 'hp-gaming-omen-16-rtx-3050ti-den-4.jpg1646641314', 14, '2022-03-07 01:21:54', '2022-03-07 01:21:54'),
(57, 'hp-gaming-omen-16-rtx-3050ti-den-3.jpg1646641314', 14, '2022-03-07 01:21:54', '2022-03-07 01:21:54'),
(58, 'hp-gaming-omen-16-rtx-3050ti-den-2.jpg1646641314', 14, '2022-03-07 01:21:54', '2022-03-07 01:21:54'),
(75, 'acer-aspire-gaming-a715-75g-den-4.jpg1646642775', 19, '2022-03-07 01:46:15', '2022-03-07 01:46:15'),
(76, 'acer-aspire-gaming-a715-75g-den-3.jpg1646642775', 19, '2022-03-07 01:46:15', '2022-03-07 01:46:15'),
(77, 'acer-aspire-gaming-a715-75g-den-2.jpg1646642775', 19, '2022-03-07 01:46:15', '2022-03-07 01:46:15'),
(78, 'asus-vivobook-a415-print-bac-6.jpg1646643425', 20, '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(79, 'asus-vivobook-a415-print-bac-3.jpg1646643425', 20, '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(80, 'asus-vivobook-a415-print-bac-4.jpg1646643425', 20, '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(81, 'asus-vivobook-a415-print-bac-5.jpg1646643425', 20, '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(82, 'asus-vivobook-a415-print-bac-2.jpg1646643425', 20, '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(83, 'asus-zenbook-duo-ux482-xanh-6.jpg1646643715', 21, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(84, 'asus-zenbook-duo-ux482-xanh-4.jpg1646643715', 21, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(85, 'asus-zenbook-duo-ux482-xanh-5.jpg1646643715', 21, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(86, 'asus-zenbook-duo-ux482-xanh-3.jpg1646643715', 21, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(87, 'asus-zenbook-duo-ux482-xanh-2.jpg1646643715', 21, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(88, 'asus-zenbook-flip-ux363-xam-6.jpg1646644048', 22, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(89, 'asus-zenbook-flip-ux363-xam-5.jpg1646644048', 22, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(90, 'asus-zenbook-flip-ux363-xam-4.jpg1646644048', 22, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(91, 'asus-zenbook-flip-ux363-xam-3.jpg1646644048', 22, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(92, 'asus-zenbook-flip-ux363-xam-2.jpg1646644048', 22, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(93, 'msi-summit-e13-flip-den-5.jpg1646644427', 23, '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(94, 'msi-summit-e13-flip-den-6.jpg1646644427', 23, '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(95, 'msi-summit-e13-flip-den-4.jpg1646644427', 23, '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(96, 'msi-summit-e13-flip-den-3.jpg1646644427', 23, '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(97, 'msi-summit-e13-flip-den-2.jpg1646644427', 23, '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(98, 'msi-modern-15-xam-5.jpg1646644702', 24, '2022-03-07 02:18:22', '2022-03-07 02:18:22'),
(99, 'msi-modern-15-xam-4.jpg1646644702', 24, '2022-03-07 02:18:22', '2022-03-07 02:18:22'),
(100, 'msi-modern-15-xam-3.jpg1646644702', 24, '2022-03-07 02:18:22', '2022-03-07 02:18:22'),
(101, 'msi-modern-15-xam-2.jpg1646644702', 24, '2022-03-07 02:18:22', '2022-03-07 02:18:22'),
(102, 'hp-240-g8-bac-2.jpg1646644952', 25, '2022-03-07 02:22:32', '2022-03-07 02:22:32'),
(103, 'hp-240-g8-bac-3.jpg1646644952', 25, '2022-03-07 02:22:32', '2022-03-07 02:22:32'),
(104, 'hp-zbook-firefly-14-g8-xam-6.jpg1646645253', 26, '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(105, 'hp-zbook-firefly-14-g8-xam-5.jpg1646645253', 26, '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(106, 'hp-zbook-firefly-14-g8-xam-4.jpg1646645253', 26, '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(107, 'hp-zbook-firefly-14-g8-xam-3.jpg1646645253', 26, '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(108, 'hp-zbook-firefly-14-g8-xam-2.jpg1646645253', 26, '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(109, 'hp-pavilion-15-eg-bac-5.jpg1646645540', 27, '2022-03-07 02:32:20', '2022-03-07 02:32:20'),
(110, 'hp-pavilion-15-eg-bac-4.jpg1646645540', 27, '2022-03-07 02:32:20', '2022-03-07 02:32:20'),
(111, 'hp-pavilion-15-eg-bac-3.jpg1646645540', 27, '2022-03-07 02:32:20', '2022-03-07 02:32:20'),
(112, 'hp-pavilion-15-eg-bac-2.jpg1646645540', 27, '2022-03-07 02:32:20', '2022-03-07 02:32:20'),
(113, 'acer-swift-3-sf314-511-bac-6.jpg1646645815', 28, '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(114, 'acer-swift-3-sf314-511-bac-5.jpg1646645815', 28, '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(115, 'acer-swift-3-sf314-511-bac-4.jpg1646645815', 28, '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(116, 'acer-swift-3-sf314-511-bac-3.jpg1646645815', 28, '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(117, 'acer-swift-3-sf314-511-bac-2.jpg1646645815', 28, '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(118, 'acer-swift-3-sf314-43-r4x3-r5-5500u-bac-4.jpg1646646035', 29, '2022-03-07 02:40:35', '2022-03-07 02:40:35'),
(119, 'acer-swift-3-sf314-43-r4x3-r5-5500u-bac-5.jpg1646646035', 29, '2022-03-07 02:40:35', '2022-03-07 02:40:35'),
(120, 'acer-swift-3-sf314-43-r4x3-r5-5500u-bac-3.jpg1646646035', 29, '2022-03-07 02:40:35', '2022-03-07 02:40:35'),
(121, 'acer-swift-3-sf314-43-r4x3-r5-5500u-bac-2.jpg1646646035', 29, '2022-03-07 02:40:35', '2022-03-07 02:40:35'),
(127, 'dell-vostro-v3400-den-5.jpg1646646792', 31, '2022-03-07 02:53:12', '2022-03-07 02:53:12'),
(128, 'dell-vostro-v3400-den-4.jpg1646646792', 31, '2022-03-07 02:53:12', '2022-03-07 02:53:12'),
(129, 'dell-vostro-v3400-den-3.jpg1646646792', 31, '2022-03-07 02:53:12', '2022-03-07 02:53:12'),
(130, 'dell-vostro-v3400-den-2.jpg1646646792', 31, '2022-03-07 02:53:12', '2022-03-07 02:53:12'),
(135, 'dell-vostro-v3510-den-6.jpg1646647308', 33, '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(136, 'dell-vostro-v3510-den-5.jpg1646647308', 33, '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(137, 'dell-vostro-v3510-den-3.jpg1646647308', 33, '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(138, 'dell-vostro-v3510-den-4.jpg1646647308', 33, '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(139, 'dell-vostro-v3510-den-2.jpg1646647308', 33, '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(140, 'asus-zenbook-ux425-timnhat-5.jpg1646647932', 34, '2022-03-07 03:12:12', '2022-03-07 03:12:12'),
(141, 'asus-zenbook-ux425-timnhat-4.jpg1646647932', 34, '2022-03-07 03:12:12', '2022-03-07 03:12:12'),
(142, 'asus-zenbook-ux425-timnhat-3.jpg1646647932', 34, '2022-03-07 03:12:12', '2022-03-07 03:12:12'),
(143, 'asus-zenbook-ux425-timnhat-2.jpg1646647932', 34, '2022-03-07 03:12:12', '2022-03-07 03:12:12'),
(144, 'asus-vivobook-x515-print-bac-4.jpg1646648159', 35, '2022-03-07 03:15:59', '2022-03-07 03:15:59'),
(145, 'asus-vivobook-x515-print-bac-5.jpg1646648159', 35, '2022-03-07 03:15:59', '2022-03-07 03:15:59'),
(146, 'asus-vivobook-x515-print-bac-3.jpg1646648159', 35, '2022-03-07 03:15:59', '2022-03-07 03:15:59'),
(147, 'asus-vivobook-x515-print-bac-2.jpg1646648159', 35, '2022-03-07 03:15:59', '2022-03-07 03:15:59'),
(148, 'asus-flip-br1100f-xam-2.jpg1646648692', 36, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(149, 'asus-flip-br1100f-xam-5.jpg1646648692', 36, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(150, 'asus-flip-br1100f-xam-3.jpg1646648692', 36, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(151, 'asus-flip-br1100f-xam-7.jpg1646648692', 36, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(152, 'asus-flip-br1100f-xam-4.jpg1646648692', 36, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(153, 'asus-flip-br1100f-xam-6.jpg1646648692', 36, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(154, 'hp-envy-x360-convert-13-den-3.jpg1646813404', 37, '2022-03-09 01:10:04', '2022-03-09 01:10:04'),
(155, 'hp-envy-x360-convert-13-den-2.jpg1646813404', 37, '2022-03-09 01:10:04', '2022-03-09 01:10:04'),
(156, 'hp-pavilion-x360-14-dy-vang-7.jpg1646813753', 38, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(157, 'hp-pavilion-x360-14-dy-vang-6.jpg1646813753', 38, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(158, 'hp-pavilion-x360-14-dy-vang-5.jpg1646813753', 38, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(159, 'hp-pavilion-x360-14-dy-vang-4.jpg1646813753', 38, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(160, 'hp-pavilion-x360-14-dy-vang-3.jpg1646813753', 38, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(161, 'hp-pavilion-x360-14-dy-vang-2.jpg1646813753', 38, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(162, 'acer-travel-mate-b3-den-6.jpg1646814117', 39, '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(163, 'acer-travel-mate-b3-den-5.jpg1646814117', 39, '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(164, 'acer-travel-mate-b3-den-4.jpg1646814117', 39, '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(165, 'acer-travel-mate-b3-den-3.jpg1646814117', 39, '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(166, 'acer-travel-mate-b3-den-2.jpg1646814117', 39, '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(167, 'acer-aspire-3-a314-35-bac-6.jpg1646814408', 40, '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(168, 'acer-aspire-3-a314-35-bac-4.jpg1646814408', 40, '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(169, 'acer-aspire-3-a314-35-bac-5.jpg1646814408', 40, '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(170, 'acer-aspire-3-a314-35-bac-3.jpg1646814408', 40, '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(171, 'acer-aspire-3-a314-35-bac-2.jpg1646814408', 40, '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(172, 'dell-inspiron-n5310-bac-2.jpg1646814846', 41, '2022-03-09 01:34:06', '2022-03-09 01:34:06'),
(173, 'dell-inspiron-n5310-bac-3.jpg1646814846', 41, '2022-03-09 01:34:06', '2022-03-09 01:34:06'),
(174, 'dell-inspiron-n5310-bac-4.jpg1646814846', 41, '2022-03-09 01:34:06', '2022-03-09 01:34:06'),
(175, 'dell-inspiron-n3510-black-6.jpg1646815097', 42, '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(176, 'dell-inspiron-n3510-black-5.jpg1646815097', 42, '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(177, 'dell-inspiron-n3510-black-4.jpg1646815097', 42, '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(178, 'dell-inspiron-n3510-black-3.jpg1646815097', 42, '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(179, 'dell-inspiron-n3510-black-2.jpg1646815097', 42, '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(180, 'hp-14s-cf2527tu-i3-10110u-bac-5.jpg1646815775', 43, '2022-03-09 01:49:35', '2022-03-09 01:49:35'),
(181, 'hp-14s-cf2527tu-i3-10110u-bac-4.jpg1646815775', 43, '2022-03-09 01:49:35', '2022-03-09 01:49:35'),
(182, 'hp-14s-cf2527tu-i3-10110u-bac-3.jpg1646815775', 43, '2022-03-09 01:49:35', '2022-03-09 01:49:35'),
(183, 'hp-14s-cf2527tu-i3-10110u-bac-2.jpg1646815775', 43, '2022-03-09 01:49:35', '2022-03-09 01:49:35'),
(188, 'acer-aspire-3-a315-58g-bac-6.jpg1646816960', 45, '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(189, 'acer-aspire-3-a315-58g-bac-4.jpg1646816960', 45, '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(190, 'acer-aspire-3-a315-58g-bac-5.jpg1646816960', 45, '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(191, 'acer-aspire-3-a315-58g-bac-3.jpg1646816960', 45, '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(192, 'acer-aspire-3-a315-58g-bac-2.jpg1646816960', 45, '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(193, 'msi-modern-15-xam-5.jpg1646817178', 46, '2022-03-09 02:12:58', '2022-03-09 02:12:58'),
(194, 'msi-modern-15-xam-4.jpg1646817178', 46, '2022-03-09 02:12:58', '2022-03-09 02:12:58'),
(195, 'msi-modern-15-xam-3.jpg1646817178', 46, '2022-03-09 02:12:58', '2022-03-09 02:12:58'),
(196, 'msi-modern-15-xam-2.jpg1646817178', 46, '2022-03-09 02:12:58', '2022-03-09 02:12:58'),
(197, 'dell-vostro-v3510-den-6.jpg1646817543', 47, '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(198, 'dell-vostro-v3510-den-5.jpg1646817543', 47, '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(199, 'dell-vostro-v3510-den-3.jpg1646817543', 47, '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(200, 'dell-vostro-v3510-den-4.jpg1646817543', 47, '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(201, 'dell-vostro-v3510-den-2.jpg1646817543', 47, '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(209, '1654507494asus-vivobook-x515-print-bac-4.jpg', 50, '2022-06-06 02:24:54', '2022-06-06 02:24:54'),
(210, '1654507494asus-vivobook-x515-print-bac-5.jpg', 50, '2022-06-06 02:24:54', '2022-06-06 02:24:54'),
(211, '1654507494asus-vivobook-x515-print-bac-3.jpg', 50, '2022-06-06 02:24:54', '2022-06-06 02:24:54'),
(212, '1654507494asus-vivobook-x515-print-bac-2.jpg', 50, '2022-06-06 02:24:54', '2022-06-06 02:24:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2019_08_19_000000_create_failed_jobs_table', 1),
(64, '2021_05_07_014906_create_categories_table', 1),
(65, '2021_05_08_022645_create_brands_table', 1),
(66, '2021_05_08_024436_create_products_table', 1),
(67, '2021_05_25_075737_create_img_products_table', 1),
(68, '2021_06_11_023123_create_orders_table', 1),
(69, '2021_06_11_023749_create_order_details_table', 1),
(70, '2022_02_21_034259_create_product_details_table', 1),
(71, '2014_10_12_000000_create_users_table', 1),
(72, '2014_10_12_100000_create_password_resets_table', 1),
(73, '2019_08_19_000000_create_failed_jobs_table', 1),
(74, '2021_05_07_014906_create_categories_table', 1),
(75, '2021_05_08_022645_create_brands_table', 1),
(76, '2021_05_08_024436_create_products_table', 1),
(77, '2021_05_25_075737_create_img_products_table', 1),
(78, '2021_06_11_023123_create_orders_table', 1),
(79, '2021_06_11_023749_create_order_details_table', 1),
(80, '2022_02_21_034259_create_product_details_table', 1),
(81, '2022_06_12_092421_create_banners_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_amount` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `phone` double NOT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `total_amount`, `status`, `phone`, `note`, `address`, `email`, `user_id`, `created_at`, `updated_at`) VALUES
(22, 'Nguyễn Văn Abc', 16000000, 0, 123454445, NULL, 'Hoàng Mai -Hà Nội', 'nguyenvanabc@gmail.com', 7, '2022-06-13 02:30:31', '2022-06-13 03:04:07'),
(23, 'Nguyễn Thị D', 51000000, 0, 122245677, NULL, 'Thanh Xuân - Hà Nội', 'dnguyenthi@gmail.com', 6, '2022-06-13 02:33:36', '2022-06-13 02:33:36'),
(24, 'Nguyễn Văn B', 19000000, 0, 11223334, 'tesst', 'Cầu Giấy -Hà Nội', 'nguyenvana@gmail.com', 3, '2022-06-15 01:44:18', '2022-06-15 01:44:18'),
(25, 'Nguyễn Văn A', 16000000, 0, 123456789, 'tess tiếp', 'Cầu Giấy -Hà Nội', 'nguyenvana@gmail.com', 3, '2022-06-15 01:46:24', '2022-06-15 01:46:24'),
(26, 'Nguyễn Thị BCC', 12000000, 0, 12345, 'test lại', 'test', 'nguyenvana@gmail.com', 3, '2022-06-15 01:50:13', '2022-06-15 01:50:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(23, 22, 50, 1, 16000000, '2022-06-13 02:30:31', '2022-06-13 02:30:31'),
(24, 23, 46, 1, 14000000, '2022-06-13 02:33:36', '2022-06-13 02:33:36'),
(25, 23, 43, 1, 12000000, '2022-06-13 02:33:36', '2022-06-13 02:33:36'),
(26, 23, 37, 1, 25000000, '2022-06-13 02:33:36', '2022-06-13 02:33:36'),
(27, 24, 41, 1, 19000000, '2022-06-15 01:44:18', '2022-06-15 01:44:18'),
(28, 25, 50, 1, 16000000, '2022-06-15 01:46:24', '2022-06-15 01:46:24'),
(29, 26, 43, 1, 12000000, '2022-06-15 01:50:13', '2022-06-15 01:50:13');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `sale_price` double DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `sale_price`, `image`, `category_id`, `brand_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Laptop MSI GF63 Thin 11UC-442VN', NULL, 30000000, 27000000, '637788084554069739_msi-gf63-thin-den-1.jpg1645500616', 1, 1, 1, '2022-02-21 20:10:50', '2022-06-22 19:51:15'),
(6, 'Laptop MSI Gaming Katana GF66 11UD 697VN', NULL, 29000000, NULL, 'msi-gaming-gf66-den-1.jpg1646412481', 1, 1, 1, '2022-03-04 09:48:01', '2022-03-04 09:48:01'),
(7, 'Laptop MSI Gaming Stealth 15M A11UEK-232VN', '<p>Laptop gaming mỏng nhẹ cấu hình mạnh mẽ</p>', 40000000, 36000000, 'msi-gaming-stealth-15m-xam-1.jpg1646412981', 1, 1, 1, '2022-03-04 09:56:21', '2022-06-20 01:08:11'),
(8, 'Laptop Asus TUF Gaming FX506LH-HN188W', NULL, 20000000, 18000000, 'asus-tuf-gaming-fx506lh-den-2022-1.jpg1646413385', 1, 4, 1, '2022-03-04 10:03:05', '2022-06-22 19:57:11'),
(9, 'Laptop Asus ROG Strix Gaming G513IH-HN015W', NULL, 20000000, 18000000, 'asus-rog-gaming-g513-rgb4-xam-1.jpg1646639128', 1, 4, 1, '2022-03-07 00:45:28', '2022-06-22 19:58:53'),
(10, 'Laptop Asus Vivobook Pro M3500QC-L1327W', NULL, 28000000, NULL, 'asus-vivobook-pro-m3500qc-bac-1.jpg1646639449', 1, 4, 1, '2022-03-07 00:50:49', '2022-03-07 00:50:49'),
(11, 'Laptop Dell Gaming G7', NULL, 37000000, NULL, 'dell-gaming-g7-15-den-1.jpg1646639827', 1, 3, 1, '2022-03-07 00:57:07', '2022-03-07 00:57:07'),
(12, 'Laptop Dell Gaming G15', NULL, 30000000, 24000000, 'dell-gaming-g15-5515-xam-1.jpg1646640539', 1, 3, 1, '2022-03-07 01:08:59', '2022-06-22 19:52:11'),
(13, 'Laptop Dell Gaming G5', NULL, 38000000, NULL, 'dell-g5-15-5500-den-1.jpg1646640904', 1, 3, 1, '2022-03-07 01:15:04', '2022-03-07 01:15:04'),
(14, 'Laptop HP Gaming OMEN 16 b0142TX', NULL, 37000000, NULL, 'hp-gaming-omen-16-rtx-3050ti-den-1.jpg1646641314', 1, 2, 1, '2022-03-07 01:21:54', '2022-03-07 01:21:54'),
(15, 'Laptop HP VICTUS 16-d0199TX', NULL, 30000000, 24000000, 'hp-victus-16-den-1.jpg1646641602', 1, 2, 1, '2022-03-07 01:26:42', '2022-06-22 19:54:14'),
(16, 'Laptop HP Pavilion Gaming 15 dk1159TX', NULL, 30000000, 27000000, 'hp-pavilion-gaming-15-dk1086tx-1.png1646641850', 1, 2, 1, '2022-03-07 01:30:50', '2022-06-22 19:55:51'),
(17, 'Laptop Acer Nitro Gaming AN515-57-720A', NULL, 3000000, 27000000, 'acer-nitro-gaming-an515-57-den-1.jpg1646642200', 1, 5, 1, '2022-03-07 01:36:40', '2022-06-22 20:02:28'),
(18, 'Laptop Acer Triton Gaming PT516-51S-733T', NULL, 50000000, 45000000, 'acer-triton-gaming-pt516-51s-xam-1.jpg1646642462', 1, 5, 1, '2022-03-07 01:41:02', '2022-06-22 19:53:13'),
(19, 'Laptop Acer Aspire Gaming 7 A715-75G-58U4', NULL, 20000000, 18000000, 'acer-aspire-gaming-a715-75g-den-1.jpg1646642775', 1, 5, 1, '2022-03-07 01:46:15', '2022-03-07 01:46:15'),
(20, 'Laptop Asus Vivobook A415EA-EB1749W', NULL, 15000000, 12000000, 'asus-vivobook-a415-print-bac-1.jpg1646643425', 4, 4, 1, '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(21, 'Laptop Asus Zenbook Duo UX482EA-KA274T', NULL, 30000000, 27000000, 'asus-zenbook-duo-ux482-xanh-1.jpg1646643715', 4, 4, 1, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(22, 'Laptop Asus Zenbook Flip UX363EA-HP532T', NULL, 25000000, NULL, 'asus-zenbook-flip-ux363-xam-1.jpg1646644048', 4, 4, 1, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(23, 'Laptop MSI Summit E13 Flip Evo A11MT- 220VN', NULL, 40000000, 38000000, 'msi-summit-e13-flip-den-1.jpg1646644427', 4, 1, 1, '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(24, 'Laptop MSI Modern 15 A11MU 678VN', NULL, 19000000, NULL, 'msi-modern-15-xam-1.jpg1646644702', 4, 1, 1, '2022-03-07 02:18:22', '2022-03-07 02:18:22'),
(25, 'Laptop HP 240 G8', NULL, 16500000, NULL, 'hp-240-g8-bac-1.jpg1646644952', 4, 2, 1, '2022-03-07 02:22:32', '2022-03-07 02:22:32'),
(26, 'Laptop HP ZBook Firefly 14 G8', NULL, 30000000, 27000000, 'hp-zbook-firefly-14-g8-xam-1.jpg1646645253', 4, 2, 1, '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(27, 'Laptop HP Pavilion 15 eg0539TU', NULL, 18000000, NULL, 'hp-pavilion-15-eg-bac-1.jpg1646645540', 4, 2, 1, '2022-03-07 02:32:20', '2022-03-07 02:32:20'),
(28, 'Laptop Acer Swift 3 SF314-511-55QE', NULL, 21000000, NULL, 'acer-swift-3-sf314-511-bac-1.jpg1646645815', 4, 5, 1, '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(29, 'Laptop Acer Swift 3 SF314-43-R4X3', NULL, 19000000, NULL, 'acer-swift-3-sf314-43-r4x3-r5-5500u-bac-1.jpg1646646035', 4, 5, 1, '2022-03-07 02:40:35', '2022-03-07 02:40:35'),
(30, 'Laptop Acer Aspire 5 A514-54-5127', NULL, 15000000, 12000000, 'acer-aspire-a514-54-bac-1.jpg1646646320', 4, 5, 1, '2022-03-07 02:45:20', '2022-06-22 20:02:49'),
(31, 'Laptop Dell Vostro V3400 C734G', NULL, 18000000, NULL, 'dell-vostro-v3400-den-1.jpg1646646792', 4, 3, 1, '2022-03-07 02:53:12', '2022-03-07 02:53:12'),
(32, 'Laptop Dell Latitude L5420CTO', NULL, 25000000, 20000000, 'dell-latitude-l5420cto-xam-1.jpg1646647014', 4, 3, 1, '2022-03-07 02:56:54', '2022-06-22 19:56:42'),
(33, 'Laptop Dell Vostro V3510', NULL, 22000000, NULL, 'dell-vostro-v3510-den-1.jpg1646647308', 4, 3, 1, '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(34, 'Laptop Asus Zenbook UX425EA-KI883W', NULL, 22000000, NULL, 'asus-zenbook-ux425-timnhat-1.jpg1646647932', 3, 4, 1, '2022-03-07 03:12:12', '2022-03-07 03:12:12'),
(35, 'Laptop Asus Vivobook X515EP-BQ189T', NULL, 17000000, NULL, 'asus-vivobook-x515-print-bac-1.jpg1646648159', 3, 4, 1, '2022-03-07 03:15:59', '2022-03-07 03:15:59'),
(36, 'Laptop Asus Flip BR1100FKA-BP0660T', NULL, 9000000, NULL, 'asus-flip-br1100f-xam-1.jpg1646648692', 3, 4, 1, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(37, 'Laptop HP Envy x360 Convert 13 ay1057AU', NULL, 25000000, NULL, 'hp-envy-x360-convert-13-den-1.jpg1646813404', 3, 2, 1, '2022-03-09 01:10:04', '2022-03-09 01:10:04'),
(38, 'Laptop HP Pavilion x360 14-dy0076TU', NULL, 20000000, NULL, 'hp-pavilion-x360-14-dy-vang-1.jpg1646813753', 3, 2, 1, '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(39, 'Laptop Acer Travel Mate B3 TMB311-31-P49D', NULL, 9500000, NULL, 'acer-travel-mate-b3-den-1.jpg1646814117', 3, 5, 1, '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(40, 'Laptop Acer Aspire 3 A314-35-C3KS', NULL, 8500000, NULL, 'acer-aspire-3-a314-35-bac-1.jpg1646814408', 3, 5, 1, '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(41, 'Laptop Dell Inspiron N5310', NULL, 19000000, NULL, 'dell-inspiron-n5310-bac-1.jpg1646814846', 3, 3, 1, '2022-03-09 01:34:06', '2022-03-09 01:34:06'),
(42, 'Laptop Dell Inspiron N3510', NULL, 11000000, NULL, 'dell-inspiron-n3510-black-1.jpg1646815097', 3, 3, 1, '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(43, 'Laptop HP 14s-cf2527TU', NULL, 12000000, NULL, 'hp-14s-cf2527tu-i3-10110u-bac-1.jpg1646815775', 2, 2, 1, '2022-03-09 01:49:35', '2022-03-09 01:49:35'),
(45, 'Laptop Acer Aspire 3 A315-58-59LY', NULL, 17000000, NULL, 'acer-aspire-3-a315-58g-bac-1.jpg1646816960', 2, 5, 1, '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(46, 'Laptop MSI Modern 14 B11MOU-1028VN', NULL, 14000000, NULL, 'msi-modern-15-xam-1.jpg1646817178', 2, 1, 1, '2022-03-09 02:12:58', '2022-03-09 02:12:58'),
(47, 'Laptop Vostro V3400', NULL, 15000000, NULL, 'dell-vostro-v3510-den-1.jpg1646817543', 2, 3, 1, '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(50, 'Laptop Asus Vivobook X515EA BQ993T', '<p>test sản phẩm</p>', 16000000, NULL, '1654507494asus-vivobook-x515-print-bac-1.jpg', 2, 4, 1, '2022-06-06 02:24:54', '2022-06-06 02:24:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_details`
--

CREATE TABLE `product_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `CPU` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RAM` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graphics` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `HardDrive` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OperatingSystem` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DebutYear` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_details`
--

INSERT INTO `product_details` (`id`, `product_id`, `CPU`, `RAM`, `screen`, `graphics`, `HardDrive`, `OperatingSystem`, `weight`, `size`, `origin`, `DebutYear`, `created_at`, `updated_at`) VALUES
(1, 1, 'Intel Core i7-11800H', '8 GB, DDR4, 3200 MHz', '15.6\", 1920 x 1080 Pixel, IPS, 60 Hz, 300 nits, IPS LCD LED Backlit, True Tone', 'NVIDIA GeForce RTX 3050 4GB & Intel UHD Graphics', 'SSD 512 GB', 'Windows 11', '1.86', '359 x 254 x 21.7', 'Trung Quốc', '2021', '2022-02-21 20:10:50', '2022-02-21 20:30:16'),
(4, 6, 'Intel, Core i7, 11800H', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixel, IPS, 144 Hz, 300 nits, IPS LCD LED Backlit, True Tone', 'NVIDIA GeForce RTX 3050 Ti & Intel UHD Graphics', 'SSD 512 GB', 'Windows 10', '2.1 kg', NULL, 'Trung Quốc', '2021', '2022-03-04 09:48:01', '2022-03-04 09:48:01'),
(5, 7, 'Intel, Core i7, 11370H', '16 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixel, IPS, 144 Hz, 300 nits, IPS LCD', 'NVIDIA GeForce RTX 3060 Max-Q 4 GB & Intel UHD Graphics', 'SSD 512 GB', 'Windows 10', '1.7 kg', '16.1 x 358 x 248 mm', 'Trung Quốc', '2021', '2022-03-04 09:56:21', '2022-03-04 09:56:21'),
(6, 8, 'Intel, Core i5, 10300H', '8 GB, DDR4, 2933 MHz', '15.6 inch, 1920 x 1080 Pixel, IPS, 144 Hz, Anti-glare LED Backlit Ultra Slim', 'NVIDIA GeForce GTX 1650 4GB; Intel UHD Graphics', 'SSD 512 GB', 'Windows 11', '2.3 kg', '24.9 x 359 x 256 mm', 'Trung Quốc', '2021', '2022-03-04 10:03:05', '2022-03-04 10:03:05'),
(7, 9, 'AMD, Ryzen 7, 4800H', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, 250 nits, Anti-glare LED-backlit', 'NVIDIA GeForce GTX 1650 4GB; AMD Radeon Graphics', 'SSD 512 GB', 'Windows 11 Home', '2.1 kg', '22.6 x 356 x 260 mm', 'Trung Quốc', '2021', '2022-03-07 00:45:28', '2022-03-07 00:45:28'),
(8, 10, 'AMD, Ryzen 7, 5800H', '16 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, OLED, 600 nits, OLED', 'NVIDIA GeForce RTX 3050 4GB; AMD Radeon Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.65 kg', '19.90 x 359 x 235 mm', 'Trung Quốc', '2021', '2022-03-07 00:50:49', '2022-03-07 00:50:49'),
(9, 11, 'Intel, Core i7, 10750H', '8 GB, DDR4, 2933 MHz', '15.6 inch, 1920 x 1080 Pixels, WVA, 144 Hz, 300 nits, WVA Anti-glare LED Backlit Narrow Border', 'NVIDIA GeForce GTX 1660 Ti GB & Intel UHD Graphics', 'SSD 512 GB', 'Windows 10', '2.56 kg', '18.3 x 357.2 x 267.7 mm', 'Trung Quốc', '2021', '2022-03-07 00:57:07', '2022-03-07 00:57:07'),
(10, 12, 'Core i5', '8 GB', '15.6 inch, 1920 x 1080 Pixels', 'Intel UHD Graphics', 'SSD 256 GB', 'Windows 11 Home', '2.81 kg', NULL, 'Trung Quốc', '2021', '2022-03-07 01:08:59', '2022-03-07 01:08:59'),
(11, 13, 'Intel, Core i7, 10750H', '16 GB, DDR4, 2933 MHz', '15.6 inch, 1920 x 1080 Pixels, WVA, 120 Hz, 220 nits, WVA Anti-glare LED Backlit Narrow Border', 'NVIDIA GeForce RTX 2070 & Intel UHD Graphics', 'SSD 512 GB', 'Windows 10', '2.4 kg', '254 x 364.46 x 364.46 mm', 'Trung Quốc', '2021', '2022-03-07 01:15:04', '2022-03-07 01:15:04'),
(12, 14, 'Intel, Core i5, 11400H', '16 GB, DDR4, 2933 MHz', '16.1 inch, 1920 x 1080 Pixels, IPS, 144 Hz, 300 nits, IPS LCD', 'NVIDIA GeForce RTX 3050Ti 4 GB; Intel UHD Graphics', 'SSD 1 TB', 'Windows 10 Home', '2.3 kg', '369 x 262 x 23.5 mm', 'Trung Quốc', NULL, '2022-03-07 01:21:54', '2022-03-07 01:21:54'),
(13, 15, 'Intel, Core i7, 11800H', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 250 nits, Micro-edge WLED-backlit', 'NVIDIA GeForce RTX 3050 4GB', 'SSD 512 GB', 'Windows 11 Home', '2.46 kg', '369 x 260 x 23.5 mm', 'Trung Quốc', '2021', '2022-03-07 01:26:43', '2022-03-07 01:26:43'),
(14, 16, 'Intel, Core i7, 10750H', '8 GB, DDR4, 2933 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 250 nits, LED Backlit', 'NVIDIA GeForce GTX 1650Ti 4GB; Intel UHD Graphics', 'SSD 512 GB', 'Windows 10', '2.23 kg', '360 x 256 x 23.4 mm', 'Trung Quốc', NULL, '2022-03-07 01:30:50', '2022-03-07 01:30:50'),
(15, 17, 'Intel, Core i7, 11800H', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 144 Hz, LED Backlit', 'NVIDIA GeForce RTX 3050Ti 4 GB; Intel UHD Graphics', 'SSD 512 GB', 'Windows 11 Home', '2.2 kg', '363.4 x 255 x 23.9 mm', 'Trung Quốc', NULL, '2022-03-07 01:36:40', '2022-03-07 01:36:40'),
(16, 18, 'Intel, Core i7, 11800H', 'DDR4, 3200 MHz', '16.0 inch, 2560 x 1600 Pixels, IPS, 165 Hz, 500 nits, Acer ComfyView LED-backlit', 'NVIDIA GeForce RTX 3060 6GB; Intel Iris Xe Graphics', 'SSD 1T', 'Windows 10 Home', '2.4 kg', NULL, 'Trung Quốc', '2021', '2022-03-07 01:41:02', '2022-03-07 01:41:02'),
(17, 19, 'Intel, Core i5, 10300H', '8 GB, DDR4, 3300 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 60 Hz, Acer ComfyView Anti-glare LED-backlit', 'NVIDIA GeForce GTX 1650 4GB; Intel UHD Graphics', 'SSD 512 GB', 'Windows 11 Home', '2.1 kg', '22.9 x 363.4 x 254.5 mm', 'Trung Quốc', '2021', '2022-03-07 01:46:15', '2022-03-07 01:46:15'),
(18, 20, 'Intel, Core i3, 1125G4', '8 GB, DDR4, 3200 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 250 nits, IPS LCD', 'Intel UHD Graphics', 'SSD 480 GB', 'Windows 11', '1.4 kg', '17.9 x 324 x 215.6 mm', 'Trung Quốc', '2021', '2022-03-07 01:57:05', '2022-03-07 01:57:05'),
(19, 21, 'Intel, Core i5, 1135G7', '8 GB, LPDDR4X, 4267 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 400 nits, Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Home', '1.62 kg', NULL, 'Trung Quốc', NULL, '2022-03-07 02:01:55', '2022-03-07 02:01:55'),
(20, 22, 'Intel, Core i5, 1135G7', '8 GB, LPDDR4X, 4266 MHz', '13.3 inch, 1920 x 1080 Pixels, OLED, 60 Hz, 500 nits, OLED', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Home', '1.3 kg', '305.2 x 211.5 x 13.9 mm', 'Trung Quốc', NULL, '2022-03-07 02:07:28', '2022-03-07 02:07:28'),
(21, 23, 'Intel, Core i7, 1185G7', '16 GB, LPDDR4, 2133 MHz', '13.4 inch, 1920 x 1200 Pixels, IPS, 60 Hz, LED Backlit', 'Intel Iris Xe Graphics', 'SSD 1T', 'Windows 10 Home', '1.35 kg', '14.9 x 300.2 x 222.25 mm', 'Trung Quốc', '2021', '2022-03-07 02:13:47', '2022-03-07 02:13:47'),
(22, 24, 'Intel, Core i5, 1155G7', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 300 nits, IPS LCD LED Backlit, True Tone', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Home', '1.6 kg', '16.9 x 356.8 x 233.7 mm', 'Trung Quốc', '2021', '2022-03-07 02:18:22', '2022-03-07 02:18:22'),
(23, 25, 'Core i5, 1135G7', '8 GB, DDR4, 3200 MHz', '14.0 inch, 1366 x 768 Pixels, SVA, 60 Hz, 250 nits, Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Home', '1.47 kg', '19.9 x 324 x 226 mm', 'Trung Quốc', '2021', '2022-03-07 02:22:32', '2022-03-07 02:22:32'),
(24, 26, 'Core i5, 1135G7', '8 GB, DDR4, 3200 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 250 nits', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Pro', '1.35 kg', '17.9 x 323 x 214.6 mm', 'Trung Quốc', '2021', '2022-03-07 02:27:33', '2022-03-07 02:27:33'),
(25, 27, 'Intel, Core i5, 1135G7', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 250 nits', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11', '1.726 kg', '17.9 x 360 x 234 mm', 'Trung Quốc', '2021', '2022-03-07 02:32:20', '2022-03-07 02:32:20'),
(26, 28, 'Intel, Core i5, 1135G7', 'LPDDR4X, 4266 MHz', '14.0 inch, IPS, 60 Hz, Acer ComfyView Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.19 kg', '15.9 x 322.8 x 212.2 mm', NULL, '2021', '2022-03-07 02:36:55', '2022-03-07 02:36:55'),
(27, 29, 'AMD, Ryzen 5, 5500U', '16 GB, LPDDR4X, 2133 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, Acer ComfyView LED-backlit', 'AMD Radeon Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.19 kg', '322.8 x 212.2 x 15.9 mm', 'Trung Quốc', NULL, '2022-03-07 02:40:35', '2022-03-07 02:40:35'),
(28, 30, 'Intel, Core i5, 1135G7', '8 GB, DDR4, 2666 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, Acer ComfyView Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.45 kg', '17.9 x 328 x 222.9 mm', 'Trung Quốc', '2021', '2022-03-07 02:45:20', '2022-03-07 02:45:20'),
(29, 31, 'Intel, Core i5, 1135G7', '8 GB 1 thanh 8 GB, DDR4, 3200 MHz', '14.0 inch, 1920 x 1080 Pixels, TN, 60 Hz, 250 nits, Anti-glare LED-backlit', 'Intel UHD Graphics 600', 'SSD 256 GB; HDD 1000 GB', 'Windows 10 Pro', '1.65 kg', '358.5 x 235 x 15.6 mm', 'Trung Quốc', '2021', '2022-03-07 02:53:12', '2022-03-07 02:53:12'),
(30, 32, 'Core i5', '8 GB', '14.0 inch, 1920 x 1080 Pixels', 'Intel Graphics', 'SSD 256 GB', 'Windows 11 Home', '1.4 kg', NULL, 'Trung Quốc', '2021', '2022-03-07 02:56:54', '2022-03-07 02:56:54'),
(31, 33, 'Core i5', '8 GB', '15.6 inch, 1920 x 1080 Pixels', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.699 kg', NULL, 'Trung Quốc', '2021', '2022-03-07 03:01:48', '2022-03-07 03:01:48'),
(32, 34, 'Intel, Core i5, 1135G7', '8 GB, LPDDR4X, 4266 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 400 nits, Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.17 kg', '13.9 x 305.2 x 208.5 mm', 'Trung Quốc', '2021', '2022-03-07 03:12:12', '2022-03-07 03:12:12'),
(33, 35, 'Intel, Core i5, 1135G7', '8 GB, DDR4', '15.6 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 250 nits, Anti-glare LED-backlit', 'NVIDIA GeForce MX330 2GB; Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Home', '1.8 kg', '360 x 233 x 19.9 mm', 'Trung Quốc', NULL, '2022-03-07 03:15:59', '2022-03-07 03:15:59'),
(34, 36, 'Intel, Pentium, N6000', '4 GB, DDR4, 3200 MHz', '11.6 inch, 1366 x 768 Pixels, IPS, 60 Hz, 250 nits, Anti-glare LED-backlit', 'Intel UHD Graphics', 'eMMC 128 GB', 'Windows 10 Home', '1.4 kg', '296.9 x 204.7 x 20 mm', 'Trung Quốc', NULL, '2022-03-07 03:24:52', '2022-03-07 03:24:52'),
(35, 37, 'Ryzen 5, 5600U', '8 GB, DDR4, 3200 MHz', '13.3 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 400 nits', 'AMD Radeon Graphics', 'SSD 256 GB', 'Windows 11 Home', '1.32 kg', '16.4 x 306.5 x 194.5 mm', 'Trung Quốc', '2021', '2022-03-09 01:10:04', '2022-03-09 01:10:04'),
(36, 38, 'Intel, Core i5, 1135G7', '8 GB, DDR4, 3200 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 250 nits', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.53 kg', '322 x 208.5 x 20.6 mm', 'Trung Quốc', '2021', '2022-03-09 01:15:53', '2022-03-09 01:15:53'),
(37, 39, 'Intel, Pentium, N5030', '4 GB, DDR4, 2400 MHz', '11.6 inch, 1366 x 768 Pixels, TN, 60 Hz, Acer ComfyView LED-backlit', 'Intel UHD Graphics 605', 'SSD 256 GB', 'Windows 11 Home', '1.4 kg', '296.9 x 215.6 x 20.8 mm', 'Trung Quốc', '2021', '2022-03-09 01:21:57', '2022-03-09 01:21:57'),
(38, 40, 'Intel, Celeron, N5100', '4 GB, DDR4, 2400 MHz', '14.0 inch, 1366 x 768 Pixels, 60 Hz, Acer CineCrystalTM LED-backlit TFT LCD', 'Intel UHD Graphics', 'SSD 256 GB', 'Windows 11 Home', '1.45 kg', '19.9 x 328 x 235 mm', 'Trung Quốc', '2021', '2022-03-09 01:26:48', '2022-03-09 01:26:48'),
(39, 41, 'Core i3', '8 GB', '13.3 inch, 1920 x 1200 Pixels', 'Intel UHD Graphics', 'SSD 256 GB', 'Windows 11 Home', NULL, '1.28 kg', 'Trung Quốc', '2021', '2022-03-09 01:34:06', '2022-03-09 01:34:06'),
(40, 42, 'Intel, Pentium, N5030', '4 GB, DDR4, 3200 MHz', '15.6 inch, 1366 x 768 Pixels, WVA, 60 Hz, 220 nits, Wide-Viewing Angle (WVA)', 'Intel UHD Graphics 605', 'SSD 128 GB', 'Windows 10 Home', '1.65 kg', '358.5 x 235 x 18.9 mm', 'Trung Quốc', '2021', '2022-03-09 01:38:17', '2022-03-09 01:38:17'),
(41, 43, 'Intel, Core i3, 10110U', '4 GB, DDR4, 3200 MHz', '14.0 inch, 1366 x 768 Pixels, TN, 220 nits, BrightView WLED-backlit', 'Intel UHD Graphics', 'SSD 256 GB', 'Windows 11 Home', '1.423 kg', NULL, 'Trung Quốc', '2021', '2022-03-09 01:49:35', '2022-03-09 01:49:35'),
(43, 45, 'Intel, Core i5, 1135G7', '8 GB, DDR4, 2400 MHz', '15.6 inch, 1920 x 1080 Pixels, TN, 60 Hz, Acer ComfyView Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 11 Home', '1.7 kg', '19.9 x 363.4 x 238.4 mm', 'Trung Quốc', '2021', '2022-03-09 02:09:20', '2022-03-09 02:09:20'),
(44, 46, 'Intel, Core i3, 115G4', '8 GB, DDR4, 3200 MHz', '14.0 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 300 nits, LED Backlit', 'Intel UHD Graphics', 'SSD 256 GB', 'Windows 11 Home', '1.3 kg', '319 x 219 x 16.85 mm', 'Trung Quốc', '2021', '2022-03-09 02:12:58', '2022-03-09 02:12:58'),
(45, 47, 'Intel, Core i3, 1115G4', '8 GB, DDR4, 2666 MHz', '14.0 inch, 1920 x 1080 Pixels, WVA, 60 Hz, 220 nits, Anti-glare LED-backlit', 'Intel UHD Graphics', 'SSD 256 GB', 'Windows 11 Home', '1.64 kg', '19 x 239 x 328 mm', 'Trung Quốc', '2021', '2022-03-09 02:19:03', '2022-03-09 02:19:03'),
(48, 50, 'Intel, Core i5, 1135G7', '8 GB, DDR4, 3200 MHz', '15.6 inch, 1920 x 1080 Pixels, IPS, 60 Hz, 250 nits, Anti-glare LED-backlit', 'Intel Iris Xe Graphics', 'SSD 512 GB', 'Windows 10 Home', '1.8 kg', '360 x 235 x 19.9 mm', 'Trung Quốc', NULL, '2022-06-06 02:24:54', '2022-06-06 02:24:54');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', '', 0, 'admin@gmail.com', NULL, '$2y$10$EDRDdxiLMXNHW3fHckcYh.CAMT6sMfyBhcjA94saWMZUfhNWho4o.', NULL, '2022-02-21 19:31:40', '2022-02-21 19:31:40', 1),
(3, 'Nguyễn Văn A', 'Cầu Giấy -Hà Nội', 123456789, 'nguyenvana@gmail.com', NULL, '$2y$10$81zHDBB/nD/QidMb3guxQeW1iLRa3ACw0jl0E9UMb.ET3GUSPVUHC', NULL, '2022-06-09 02:57:56', '2022-06-14 01:46:44', 0),
(4, 'Nguyễn Văn B', 'Từ Liêm -Hà Nội', 3312344345, 'bnguyenvan@gmail.com', NULL, '$2y$10$gmPL/G.CuHhMxQEAaj7kEe95.KCYAKEKxYSo3acaeNerDHZHwgef6', NULL, '2022-06-09 03:01:59', '2022-06-09 03:01:59', 0),
(5, 'Nguyễn Thị C', 'Hà Đông - Hà Nội', 113223456, 'nguyenthic@gmail.com', NULL, '$2y$10$G/y0QtaaWMLIhfLp5yvcGegtmyibZbkAKo6sP.8.JHHVdhJ1xOGSW', NULL, '2022-06-09 03:04:14', '2022-06-09 03:04:14', 0),
(6, 'Nguyễn Thị D', 'Thanh Xuân - Hà Nội', 122245677, 'dnguyenthi@gmail.com', NULL, '$2y$10$sWxz79KHVa7j4Vr/DyMHEOvFchaX8EmYAurCnrfiZ5OelkUvcXrQ2', NULL, '2022-06-09 03:06:19', '2022-06-09 03:06:19', 0),
(7, 'Nguyễn Văn Abc', 'Hoàng Mai -Hà Nội', 123454445, 'nguyenvanabc@gmail.com', NULL, '$2y$10$NDN4yCKmiroF5XLgjIZNX.o48xQM4Y0K40zr0OriOGQ8Q75h3CNXO', NULL, '2022-06-09 03:08:17', '2022-06-09 03:08:17', 0),
(8, 'Nguyễn Thị Bcd', 'Long Biên - Hà Nội', 977435678, 'bcd@gmail.com', NULL, '$2y$10$V2CyP81iN2ZJqXjxVH4WpO3J23jl6VvWxrclnUs3Snp8wyP1HPqCm', NULL, '2022-06-09 03:10:21', '2022-06-09 03:10:21', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_name_unique` (`name`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `img_products_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Chỉ mục cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `product_details`
--
ALTER TABLE `product_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `img_products`
--
ALTER TABLE `img_products`
  ADD CONSTRAINT `img_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Các ràng buộc cho bảng `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
