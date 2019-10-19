-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 12, 2019 lúc 10:08 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_sanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_donhang` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`id`, `id_sanpham`, `soluong`, `id_donhang`, `created_at`, `updated_at`) VALUES
(1, '2', '11', 2, '2019-05-10 06:05:43', '2019-05-10 06:05:43'),
(2, '1', '2', 2, '2019-05-10 06:05:43', '2019-05-10 06:05:43'),
(3, '2', '1', 3, '2019-05-10 06:07:57', '2019-05-10 06:07:57'),
(4, '1', '1', 4, '2019-05-10 06:09:45', '2019-05-10 06:09:45'),
(5, '1', '1', 5, '2019-05-10 06:10:54', '2019-05-10 06:10:54'),
(6, '10', '1', 6, '2019-05-14 01:24:52', '2019-05-14 01:24:52'),
(7, '11', '1', 6, '2019-05-14 01:24:52', '2019-05-14 01:24:52'),
(8, '3', '1', 7, '2019-05-14 01:25:41', '2019-05-14 01:25:41'),
(9, '5', '1', 7, '2019-05-14 01:25:41', '2019-05-14 01:25:41'),
(10, '5', '2', 8, '2019-05-14 01:27:29', '2019-05-14 01:27:29'),
(11, '3', '1', 17, '2019-05-14 01:36:46', '2019-05-14 01:36:46'),
(12, '3', '1', 18, '2019-05-17 01:00:18', '2019-05-17 01:00:18'),
(13, '5', '1', 19, '2019-05-21 07:18:36', '2019-05-21 07:18:36'),
(14, '5', '1', 20, '2019-05-26 23:03:23', '2019-05-26 23:03:23'),
(15, '7', '1', 21, '2019-06-10 05:15:53', '2019-06-10 05:15:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) UNSIGNED NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `tendanhmuc`, `mota`, `created_at`, `updated_at`) VALUES
(1, 'hang nha bep', 'hang nha bep', NULL, NULL),
(2, 'hang do an', 'hang do an', NULL, NULL),
(3, 'mi', 'mi', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(10) UNSIGNED NOT NULL,
  `HoTen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TongTien` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `HoTen`, `SDT`, `DiaChi`, `TongTien`, `created_at`, `updated_at`) VALUES
(1, 'asa', '121212', 'qasqs', '144', '2019-05-10 06:05:03', '2019-05-10 06:05:03'),
(2, 'asasas', '1212121', 'asasa', '156', '2019-05-10 06:05:43', '2019-05-10 06:05:43'),
(3, 'dddddddddd', '11111111', 'ddddddd', '12', '2019-05-10 06:07:57', '2019-05-10 06:07:57'),
(4, 'anc', '22222', 'dsaasd', '12', '2019-05-10 06:09:45', '2019-05-10 06:09:45'),
(5, 'asdasdasd', '111111111', 'wadsasd', '12', '2019-05-10 06:10:54', '2019-05-10 06:10:54'),
(6, 'asasas', '11111111', 'adasdasd', '210000', '2019-05-14 01:24:52', '2019-05-14 01:24:52'),
(7, '3qweq', '123123', 'aa', '65', '2019-05-14 01:25:41', '2019-05-14 01:25:41'),
(8, 'a', '121212', 'ádasd', '30', '2019-05-14 01:27:29', '2019-05-14 01:27:29'),
(9, 'a', '121212', 'ádasd', '0', '2019-05-14 01:28:43', '2019-05-14 01:28:43'),
(10, 'a', '121212', 'ádasd', '0', '2019-05-14 01:30:47', '2019-05-14 01:30:47'),
(11, 'a', '121212', 'ádasd', '0', '2019-05-14 01:30:59', '2019-05-14 01:30:59'),
(12, 'a', '121212', 'ádasd', '0', '2019-05-14 01:31:41', '2019-05-14 01:31:41'),
(13, 'a', '121212', 'ádasd', '0', '2019-05-14 01:32:19', '2019-05-14 01:32:19'),
(14, 'a', '121212', 'ádasd', '0', '2019-05-14 01:32:33', '2019-05-14 01:32:33'),
(15, 'a', '121212', 'ádasd', '0', '2019-05-14 01:33:14', '2019-05-14 01:33:14'),
(16, 'a', '121212', 'ádasd', '0', '2019-05-14 01:33:54', '2019-05-14 01:33:54'),
(17, 'á', '111111111', '33333333333', '50', '2019-05-14 01:36:46', '2019-05-14 01:36:46'),
(18, 'a', 'a', 'aa', '500000', '2019-05-17 01:00:18', '2019-05-17 01:00:18'),
(19, 'a', '22222', 'aaa', '150000', '2019-05-21 07:18:35', '2019-05-21 07:18:35'),
(20, 'aaaaa', '066464', 'aaaaa', '150000', '2019-05-26 23:03:23', '2019-05-26 23:03:23'),
(21, 'aaaaa', 'asaaa', 'aaaaaaaaaa', '200000', '2019-06-10 05:15:53', '2019-06-10 05:15:53');

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
(1, '2019_05_10_105552_create_danh_muc_table', 1),
(3, '2019_05_10_105623_create_san_pham_table', 2),
(4, '2019_05_10_124009_create_don_hang_table', 3),
(6, '2019_05_10_124034_create_chi_tiet_don_hang_table', 4),
(7, '2014_10_12_000000_create_users_table', 5),
(8, '2014_10_12_100000_create_password_resets_table', 5);

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
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(10) UNSIGNED NOT NULL,
  `tensanpham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `giakhuyenmai` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_danhmuc` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `tensanpham`, `anh`, `mota`, `gia`, `giakhuyenmai`, `id_danhmuc`, `created_at`, `updated_at`) VALUES
(5, 'Hạt Dẻ', 'm3.jpg', 'Thơm ngon', '150000', '100000', 1, NULL, '2019-05-17 02:29:32'),
(6, 'Dầu tự do', 'mk4.jpg', 'Đảm bảo dinh dưỡng', '800000', '550000', 2, NULL, NULL),
(7, 'Dầu vàng 1L', 'mk5.jpg', 'Thơm ngon bất ngờ', '200000', '160000', 2, NULL, NULL),
(8, 'Dầu Ép 5L', 'mk6.jpg', 'Thơm ngon giá rẻ', '600000', '500000', 2, NULL, NULL),
(9, 'Hảo hảo', 'mk7.jpg', 'Chua cay', '80000', '55000', 3, NULL, NULL),
(10, 'Ba miền', 'mk8.jpg', 'Thơm ngon', '60000', '40000', 3, NULL, NULL),
(11, 'Bò rau thơm', 'mk9.jpg', 'Thơm ngon giá rẻ', '150000', '110000', 3, NULL, NULL),
(13, 'gạo đặc sản', 'k1.jpg', 'Gạo ngon', '700000', '555000', 2, NULL, NULL),
(14, 'hạnh nhân', 'm1.jpg', 'Giá rẻ thơm ngon', '500000', '300000', 1, '2019-05-20 19:45:42', '2019-05-20 19:45:42'),
(15, 'Hạt Điều', 'm2.jpg', 'Thơm ngon chất lượng', '420000', '200000', 1, '2019-05-20 19:48:08', '2019-05-20 19:48:08'),
(16, 'Trà Hoa Sen', 'k2.jpg', 'Trà ngon giá tốt', '50000', '35000', 3, '2019-05-20 19:50:58', '2019-05-20 19:50:58'),
(17, 'Trà lipton', 'k3.jpg', 'Chất lượng hàng đầu', '100000', '84000', 3, '2019-05-20 19:51:55', '2019-05-20 19:51:55'),
(18, 'Hạt nêm', 'k4.jpg', 'Ngon từ thịt ngọt từ xương', '90000', '70000', 2, '2019-05-20 19:52:46', '2019-05-20 19:52:46'),
(19, 'Bột ngọt A-JI-NO-MOTO', 'k6.jpg', 'Chất lượng tốt', '42000', '30000', 2, '2019-05-20 19:54:24', '2019-05-20 19:55:03'),
(20, 'Bánh Socola', 'k7.jpg', 'Ngon , mềm', '25000', '22000', 3, '2019-05-20 19:57:06', '2019-05-20 19:57:06'),
(21, 'Bánh nabati', 'k8.jpg', 'Chất lượng tốt giá ưu đãi', '19500', '15000', 3, '2019-05-20 19:58:03', '2019-05-20 19:58:03'),
(22, 'Bánh trứng Tipo', 'k9.jpg', 'Chất lượng tốt giá ưu đãi', '150000', '134000', 3, '2019-05-20 19:59:03', '2019-05-20 19:59:03'),
(23, 'Kẹo mè xửng Huế', 'k12.jpg', 'Đặc sản Huế', '70000', '60000', 3, '2019-05-20 20:00:43', '2019-05-20 20:00:43'),
(24, 'Kẹo dừa Bến Tre', 'k11.jpg', 'Đắc sản Bến Tre', '35000', '25000', 3, '2019-05-20 20:08:57', '2019-05-20 20:08:57'),
(25, 'Kẹo Bạc Hà', 'k10.jpg', 'Chất lượng tốt giá ưu đãi', '15000', '13000', 3, '2019-05-20 20:10:58', '2019-05-20 20:10:58'),
(26, 'Tiêu tự nhiên', 'k5.jpg', 'Tự nhiên 100%', '90000', '80000', 2, '2019-05-20 20:12:09', '2019-05-20 20:12:09'),
(27, 'Khoai tây chiên', 'd2.jpg', 'Chất lượng tốt giá ưu đãi', '10000', '8000', 3, '2019-05-20 20:13:58', '2019-05-20 20:13:58'),
(28, 'Muối IOT', 'd4.jpg', 'Tự nhiên 100%', '15000', '10000', 2, '2019-05-20 20:15:41', '2019-05-20 20:15:41'),
(29, 'Đường nguyên chất', 'a2.jpg', 'Chất lượng tốt giá ưu đãi', '10000', '8000', 2, '2019-05-20 20:26:04', '2019-05-20 20:26:04'),
(30, 'Sữa Chua', 'a3.png', 'Tự nhiên 100%', '24000', '20000', 2, '2019-05-20 20:26:49', '2019-05-20 20:26:49'),
(31, 'Ớt Bột', 'a4.jpg', 'Cay đậm đà', '30000', '20000', 2, '2019-05-20 20:27:28', '2019-05-20 20:27:28'),
(32, 'Ớt Bột Hàn Quốc', 'a5.png', 'Chất lượng tốt giá ưu đãi', '30000', '20000', 2, '2019-05-20 20:28:09', '2019-05-20 20:28:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'abc@gmail.com', '$2y$10$W4uwdIbPBDhs5eXA/cKr2e2w1zKPtFPSUNdyRIm0E/8epYTEd40sC', 'PDyUJBo6ILCQZjVQ5Or0HP4hm0MAORo3JpA369tr1KGrYlmlD4FCQf2DoPHn', NULL, NULL),
(2, 'trantuyen', 'cudu@gmail.com', '$2y$10$Dr88KlRbGlTMwGpMs/a/r.cnkKKZS87.Ml1OZeIJqQU1xk1Z/RV9C', 'Xo9ra8uNOp1jpa3ChGvUahWDYllQgCCz1ebXXMyZlSV5Eii6hCv6ceUQjiqV', '2019-05-21 02:21:51', '2019-05-21 02:21:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_tiet_don_hang_id_donhang_foreign` (`id_donhang`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `san_pham_id_danhmuc_foreign` (`id_danhmuc`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_id_donhang_foreign` FOREIGN KEY (`id_donhang`) REFERENCES `don_hang` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_id_danhmuc_foreign` FOREIGN KEY (`id_danhmuc`) REFERENCES `danh_muc` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
