-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 04, 2023 lúc 06:17 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbansach`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Phil Town', 'âsabdashdsajhadjsad', '1695085150_1694338294_4.jpg', '2023-09-19 00:59:10', '2023-09-19 00:59:10'),
(2, 'Napoleon Hill', 'ádasdhgasjgdasjdg', '1695085247_1694338202_2.jpg', '2023-09-19 01:00:26', '2023-09-19 01:00:47'),
(3, 'George Lakey', 'dáhfdasdfhagsd', '1695085628_1694338257_3.jpg', '2023-09-19 01:07:08', '2023-09-19 01:07:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1695086245_1694138656_01.jpg', '2023-09-19 01:17:25', '2023-09-19 01:17:25'),
(2, '1695086253_1694138665_02.jpg', '2023-09-19 01:17:33', '2023-09-19 01:17:33'),
(3, '1695086261_1694138677_03.jpg', '2023-09-19 01:17:42', '2023-09-19 01:17:42'),
(4, '1695086303_1694138686_04.jpg', '2023-09-19 01:18:23', '2023-09-19 01:18:23'),
(5, '1695086312_1694138695_05.jpg', '2023-09-19 01:18:32', '2023-09-19 01:18:32'),
(6, '1695086324_1694138708_06.jpg', '2023-09-19 01:18:44', '2023-09-19 01:18:44'),
(7, '1695086335_1694138719_07.jpg', '2023-09-19 01:18:55', '2023-09-19 01:18:55'),
(8, '1695086343_1694138728_08.jpg', '2023-09-19 01:19:03', '2023-09-19 01:19:03'),
(9, '1695086352_1694138736_09.jpg', '2023-09-19 01:19:12', '2023-09-19 01:19:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `total` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `id_user`, `total`, `payment`, `name`, `phone_number`, `address`, `address_type`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, '750000', 'Thanh toán khi giao hàng', 'ádasdasdasd', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-21 11:24:07', '2023-09-21 11:24:07'),
(4, 2, '356250', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-23 09:02:51', '2023-09-23 09:02:51'),
(13, 2, '833300', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-23 10:06:59', '2023-09-23 10:06:59'),
(14, 2, '583300', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-23 10:08:46', '2023-09-23 10:08:46'),
(15, 2, '879100', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-23 10:20:05', '2023-09-23 10:20:05'),
(16, 2, '439550', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đã giao hàng', '2023-09-23 10:28:03', '2023-09-25 09:53:33'),
(17, 2, '356250', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-25 10:04:22', '2023-09-25 10:04:22'),
(18, 2, '1031250', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-27 01:54:00', '2023-09-27 01:54:00'),
(19, 2, '568750', 'Thanh toán khi giao hàng', 'Sang', '062165465465', 'ádasdasdasd213123', 'Nhà riêng', 'đơn hàng mới', '2023-09-27 02:03:11', '2023-09-27 02:03:11'),
(20, 4, '3082100', 'Momo/ZaloPay', 'asda', '3423424234234234', 'sfsdfsd', 'Công ty', 'đã giao hàng', '2023-10-03 14:46:19', '2023-10-04 14:12:17'),
(21, 4, '1166200', 'Thanh toán khi giao hàng', 'ChickMaster45', '12312', 'sfsdfsd', 'Nhà riêng', 'đơn hàng đã hủy', '2023-10-03 15:15:13', '2023-10-04 14:14:37'),
(22, 2, '166600', 'Thanh toán khi giao hàng', 'asda', '234', 'sfsdfsd', 'Nhà riêng', 'đơn hàng mới', '2023-10-04 00:58:16', '2023-10-04 00:58:16'),
(23, 3, '333300', 'Thanh toán khi giao hàng', 'ChickMaster45', '123', 'aaaaaaaaaaaaaaaaaaa', 'Công ty', 'đơn hàng mới', '2023-10-04 01:03:22', '2023-10-04 01:03:22'),
(24, 3, '439550', 'Thanh toán khi giao hàng', 'asda', '23', 'ghxfghnfgbfcghfthjhnnc', 'Công ty', 'đơn hàng mới', '2023-10-04 01:04:51', '2023-10-04 01:04:51'),
(25, 4, '83300', 'Thanh toán khi giao hàng', 'ChickMaster45', '34234', 'sfsdfsd', 'Công ty', 'đang giao hàng', '2023-10-04 01:27:03', '2023-10-04 14:16:19'),
(26, 5, '910350', 'Thanh toán khi giao hàng', 'hạ', '3414123', 'đá', 'Công ty', 'đơn hàng mới', '2023-10-04 12:02:03', '2023-10-04 12:02:03'),
(27, 6, '1068750', 'Thanh toán khi giao hàng', 'tuấn', '0932547105', 'sfsdfsd', 'Nhà riêng', 'đơn hàng mới', '2023-10-04 14:54:45', '2023-10-04 14:54:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_bill` bigint(20) UNSIGNED NOT NULL,
  `id_book` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `id_bill`, `id_book`, `quantity`, `unit_price`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 3, 83333.33, '2023-09-21 11:24:07', '2023-09-21 11:24:07'),
(2, 4, 3, 1, 106250.00, '2023-09-23 09:02:51', '2023-09-23 09:02:51'),
(3, 4, 2, 1, 250000.00, '2023-09-23 09:02:51', '2023-09-23 09:02:51'),
(8, 13, 2, 3, 83333.33, '2023-09-23 10:06:59', '2023-09-23 10:06:59'),
(9, 13, 1, 1, 83300.00, '2023-09-23 10:06:59', '2023-09-23 10:06:59'),
(10, 14, 2, 2, 125000.00, '2023-09-23 10:08:46', '2023-09-23 10:08:46'),
(11, 14, 1, 1, 83300.00, '2023-09-23 10:08:46', '2023-09-23 10:08:46'),
(12, 15, 3, 2, 106250.00, '2023-09-23 10:20:05', '2023-09-23 10:20:05'),
(13, 15, 1, 2, 83300.00, '2023-09-23 10:20:05', '2023-09-23 10:20:05'),
(14, 15, 2, 2, 250000.00, '2023-09-23 10:20:05', '2023-09-23 10:20:05'),
(15, 16, 3, 1, 106250.00, '2023-09-23 10:28:03', '2023-09-23 10:28:03'),
(16, 16, 2, 1, 250000.00, '2023-09-23 10:28:03', '2023-09-23 10:28:03'),
(17, 16, 1, 1, 83300.00, '2023-09-23 10:28:03', '2023-09-23 10:28:03'),
(18, 17, 3, 1, 106250.00, '2023-09-25 10:04:22', '2023-09-25 10:04:22'),
(19, 17, 2, 1, 250000.00, '2023-09-25 10:04:22', '2023-09-25 10:04:22'),
(20, 18, 3, 5, 106250.00, '2023-09-27 01:54:00', '2023-09-27 01:54:00'),
(21, 18, 2, 2, 250000.00, '2023-09-27 01:54:01', '2023-09-27 01:54:01'),
(22, 19, 3, 3, 106250.00, '2023-09-27 02:03:11', '2023-09-27 02:03:11'),
(23, 19, 2, 1, 250000.00, '2023-09-27 02:03:11', '2023-09-27 02:03:11'),
(24, 20, 1, 37, 83300.00, '2023-10-03 14:46:19', '2023-10-03 14:46:19'),
(25, 21, 1, 14, 83300.00, '2023-10-03 15:15:13', '2023-10-03 15:15:13'),
(26, 22, 1, 2, 83300.00, '2023-10-04 00:58:16', '2023-10-04 00:58:16'),
(27, 23, 2, 1, 250000.00, '2023-10-04 01:03:22', '2023-10-04 01:03:22'),
(28, 23, 1, 1, 83300.00, '2023-10-04 01:03:22', '2023-10-04 01:03:22'),
(29, 24, 3, 1, 106250.00, '2023-10-04 01:04:51', '2023-10-04 01:04:51'),
(30, 24, 2, 1, 250000.00, '2023-10-04 01:04:51', '2023-10-04 01:04:51'),
(31, 24, 1, 1, 83300.00, '2023-10-04 01:04:51', '2023-10-04 01:04:51'),
(32, 25, 1, 1, 83300.00, '2023-10-04 01:27:03', '2023-10-04 01:27:03'),
(33, 26, 1, 2, 83300.00, '2023-10-04 12:02:03', '2023-10-04 12:02:03'),
(34, 26, 3, 7, 106250.00, '2023-10-04 12:02:04', '2023-10-04 12:02:04'),
(35, 27, 2, 3, 250000.00, '2023-10-04 14:54:45', '2023-10-04 14:54:45'),
(36, 27, 3, 3, 106250.00, '2023-10-04 14:54:45', '2023-10-04 14:54:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL,
  `id_supplier` bigint(20) UNSIGNED NOT NULL,
  `id_author` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `promotion_price` double(8,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `books`
--

INSERT INTO `books` (`id`, `name`, `id_type`, `id_supplier`, `id_author`, `description`, `unit_price`, `promotion_price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bí Quyết Làm Giàu Của Napoleon Hill', 1, 2, 2, 'ádasdasdasdasdasdads', 98000.00, 83300.00, '1695085912_1694338523_img01.jpg', '2023-09-19 01:11:52', '2023-09-19 01:11:52'),
(2, 'Payback Time - Ngày Đòi Nợ', 1, 1, 1, 'ádasdasđsađasadsadasdasdsa', 299000.00, 250000.00, '1696317611_ngay-doi-no-1.jpg', '2023-09-19 01:13:11', '2023-10-03 07:20:11'),
(3, 'Kinh Tế Học Viking: Cách Bắc Âu Thành Công Và Bài Học Cho Chúng Ta - Viking Economics', 1, 4, 3, 'ádadsasđâsdasdasd', 125000.00, 106250.00, '1695086039_1693968151_06.jpg', '2023-09-19 01:13:59', '2023-09-19 01:13:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone_number`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Vinh', 'vinhbd@gmail.com', '062165465465', 'ấdsasdsad', '2023-09-22 01:58:07', '2023-09-22 01:58:07'),
(19, 'Sang', 'haphuocsang6@gmail.com', '062165465465', 'zxcvbnbcxzxcvbn', '2023-09-22 03:22:19', '2023-09-22 03:22:19'),
(20, 'Sang', 'haphuocsang6@gmail.com', '062165465465', 'zxcvbnnzzxcvbn', '2023-09-22 03:25:02', '2023-09-22 03:25:02'),
(21, 'Sang', 'haphuocsang6@gmail.com', '062165465465', 'zxcvzxbncvznxbcvzxnbcvzxnbc', '2023-09-22 03:29:15', '2023-09-22 03:29:15'),
(22, 'adsasdasdasdasd', '1@1.1', '12341231234124', '123123123123123123', '2023-10-03 16:16:51', '2023-10-03 16:16:51'),
(23, '4523452345', 'daytao0905@gmail.com', '4523452', '2345234523452345', '2023-10-03 16:18:03', '2023-10-03 16:18:03'),
(24, 'gljkhbdsfgjklhasdfgsdfgadfasd', 'daytao0905@gmail.com', '412341234', '41234123412341234123', '2023-10-04 11:59:55', '2023-10-04 11:59:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
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
-- Cấu trúc bảng cho bảng `import_products`
--

CREATE TABLE `import_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_book` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `date_added` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `import_products`
--

INSERT INTO `import_products` (`id`, `id_book`, `quantity`, `date_added`, `created_at`, `updated_at`) VALUES
(1, 1, -8, '2023-09-19', '2023-09-19 01:16:25', '2023-10-04 12:02:03'),
(2, 2, 156, '2023-09-19', '2023-09-19 01:16:35', '2023-10-04 14:54:45'),
(3, 3, -10, '2023-09-19', '2023-09-19 01:16:45', '2023-10-04 14:54:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_15_010322_create_authors_table', 1),
(6, '2023_08_17_023051_create_suppliers_table', 1),
(7, '2023_08_18_020607_create_type_books_table', 1),
(8, '2023_08_18_020608_create_books_table', 1),
(9, '2023_08_18_023252_create_customers_table', 1),
(10, '2023_08_18_025509_create_bills_table', 1),
(11, '2023_08_18_025921_create_bill_details_table', 1),
(12, '2023_09_07_033236_create_banners_table', 1),
(13, '2023_09_09_095344_create_warehouses_table', 1),
(14, '2023_09_11_092328_create_import_products_table', 1),
(15, '2023_09_12_074350_create_contacts_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
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
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `address`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'Thế Giới', 'ádagsgasdj', '062165465465', '2023-09-19 00:58:29', '2023-09-19 00:58:29'),
(2, 'FIRST NEWS', 'ádasdajdsgasdjh', '123123123123', '2023-09-19 01:08:11', '2023-09-19 01:10:54'),
(3, 'Saigon Books', 'ádasdasdadasdasd', '06216546546512312', '2023-09-19 01:08:35', '2023-09-19 01:08:35'),
(4, 'NXB Trẻ', 'ádasdasdadasdasd', '21312312332', '2023-09-19 01:09:55', '2023-09-19 01:09:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_books`
--

CREATE TABLE `type_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `type_books`
--

INSERT INTO `type_books` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Kinh Tế', 'ádasdasdasd', '2023-09-19 01:09:31', '2023-09-19 01:09:31');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `full_name`, `password`, `phone`, `image`, `level`, `created_at`, `updated_at`) VALUES
(1, 'haphuocsang.dn2003@gmail.com', 'sdadasads', '$2y$10$Bp6si1IC47MeF/8WIyRSQ.OfSe1yotZuHe9UQReeWvGS/xVIjH1sy', '1231231231', 'daidien.jpg', 1, '2023-09-19 00:54:16', '2023-09-30 09:35:41'),
(2, 'haphuocsang6@gmail.com', 'Sang', '$2y$10$qpxU.ppVIxdyL0GL73IeZu6/sNlz11LmU83KiQIjpfdGCqcUF5p.K', '0932547105', '1696349186_gietnguoi.jpg', 3, '2023-09-22 08:58:00', '2023-10-03 16:10:17'),
(3, '1@1.1', 'vinh', '$2y$10$esUV0CSKOva8vfguQUhR/u/gF0KPc2aKasRdsqYmzKDTUtzaHSLsK', '0382302572', '1696343459_ultra2a-1648480524399401547386.jpeg', 3, '2023-10-03 14:30:34', '2023-10-03 14:30:59'),
(4, '2@2.2', 'admin', '$2y$10$d1qr.8f.LqSu7hiUkTPe.uk5i0umZsRVGqQDdRIIyF5NrY5g.JGwO', '34234234234234', 'daidien.jpg', 1, '2023-10-03 14:32:29', '2023-10-04 10:00:02'),
(5, '909cb6bf74@boxmail.lol', 'hạ', '$2y$10$AkyZBQROhlCoQEqp0PqlQOnvt/ZMkWLX5vjRYxIs3swmTkumYhbI2', '123123', 'daidien.jpg', 3, '2023-10-04 12:01:30', '2023-10-04 12:01:30'),
(6, 'daytao0905@gmail.com', 'tuấn', '$2y$10$oyzzXLDppcjOl9SMNn1ZKeqBgfZNieGiD1VzBAkiqQ2v6O3TCVEJq', '0932547105', '1696431230_1211555924590_5715.jpg', 3, '2023-10-04 14:33:13', '2023-10-04 14:53:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_book` bigint(20) UNSIGNED NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `update_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `warehouses`
--

INSERT INTO `warehouses` (`id`, `id_book`, `quantity`, `update_date`, `created_at`, `updated_at`) VALUES
(1, 1, 45234523452345, '2023-09-19', '2023-09-19 01:15:47', '2023-10-04 11:56:28'),
(2, 2, 215, '2023-09-19', '2023-09-19 01:15:57', '2023-09-19 01:16:35'),
(3, 3, 80, '2023-09-19', '2023-09-19 01:16:10', '2023-09-19 01:16:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_details_id_bill_foreign` (`id_bill`),
  ADD KEY `bill_details_id_book_foreign` (`id_book`);

--
-- Chỉ mục cho bảng `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id_type_foreign` (`id_type`),
  ADD KEY `books_id_supplier_foreign` (`id_supplier`),
  ADD KEY `books_id_author_foreign` (`id_author`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `import_products`
--
ALTER TABLE `import_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `import_products_id_book_foreign` (`id_book`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `type_books`
--
ALTER TABLE `type_books`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouses_id_book_foreign` (`id_book`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `import_products`
--
ALTER TABLE `import_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `type_books`
--
ALTER TABLE `type_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_id_bill_foreign` FOREIGN KEY (`id_bill`) REFERENCES `bills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_details_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_id_author_foreign` FOREIGN KEY (`id_author`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_id_supplier_foreign` FOREIGN KEY (`id_supplier`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `books_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `type_books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `import_products`
--
ALTER TABLE `import_products`
  ADD CONSTRAINT `import_products_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `warehouses` (`id_book`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `warehouses`
--
ALTER TABLE `warehouses`
  ADD CONSTRAINT `warehouses_id_book_foreign` FOREIGN KEY (`id_book`) REFERENCES `books` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
