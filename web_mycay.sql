-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 10:19 AM
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
-- Database: `web_mycay`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tenbaiviet` varchar(200) NOT NULL,
  `gioithieu` varchar(500) NOT NULL,
  `noidung` varchar(10000) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `id_danhmucbv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_baiviet`, `tenbaiviet`, `gioithieu`, `noidung`, `hinhanh`, `id_danhmucbv`) VALUES
(12, 'Ưu đãi mới nhất hôm nay', 'Hay xin chào ', '<p><strong>fdfefefe<em>fefefefe</em></strong></p>\r\n\r\n<hr />\r\n<hr />\r\n<hr />\r\n<table border=\"1\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>fefe</td>\r\n			<td>fefe</td>\r\n		</tr>\r\n		<tr>\r\n			<td>efef</td>\r\n			<td>efef</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ef</td>\r\n			<td>ghth</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><br />\r\nfdgijdijad<strong>&aacute;gddgdg</strong></p>\r\n\r\n<p><img alt=\"\" src=\"Public/img/1703816984_tim-hieu-ve-cac-dong-card-man-hinh-cua-amd-02-800x4501.jpg\" style=\"height:450px; margin:20px 2px; width:565px\" /></p>\r\n', '1703403692_Nha-Thong-Minh.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id_binhluan` int(11) NOT NULL,
  `ten_nguoidung` varchar(100) NOT NULL,
  `anh_nguoidung` varchar(200) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `binhluan` varchar(300) NOT NULL,
  `id_nguoidung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id_binhluan`, `ten_nguoidung`, `anh_nguoidung`, `id_sanpham`, `binhluan`, `id_nguoidung`) VALUES
(1, 'tuong', 'tải xuống (15).jpg\"', 0, 'hi', 10),
(2, 'tuong', 'tải xuống (15).jpg\"', 27, 'hi', 10),
(3, 'tuong', 'tải xuống (15).jpg\"', 27, 'chaof', 10),
(4, 'tuong', 'tải xuống (15).jpg\"', 27, 'hi', 10),
(11, 'tuong', 'tải xuống (15).jpg\"', 30, 'hi', 10),
(13, 'tuong', 'tải xuống (15).jpg\"', 30, 'hi', 10),
(17, 'tuong', 'tải xuống (15).jpg\"', 31, 'hi', 10),
(19, 'tuong', 'tải xuống (15).jpg\"', 31, 'hi', 10);

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_chitiet` int(200) NOT NULL,
  `id_hoadon` int(200) NOT NULL,
  `id_sanpham` int(200) NOT NULL,
  `soluong` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_chitiet`, `id_hoadon`, `id_sanpham`, `soluong`) VALUES
(1, 3648, 6, 3),
(2, 3436, 5, 3),
(3, 3436, 3, 1),
(4, 8646, 6, 7),
(5, 8646, 4, 7),
(6, 5798, 6, 2),
(7, 8450, 6, 1),
(8, 8450, 4, 1),
(9, 8450, 3, 4),
(10, 8450, 2, 4),
(11, 4626, 6, 3),
(12, 3732, 6, 2),
(13, 3732, 5, 1),
(14, 3732, 3, 1),
(15, 1403, 5, 1),
(16, 1403, 6, 1),
(17, 1403, 4, 1),
(18, 1403, 3, 1),
(19, 1403, 2, 1),
(20, 9050, 6, 1),
(21, 366, 6, 1),
(22, 7254, 6, 5),
(23, 8419, 6, 1),
(24, 2071, 6, 1),
(25, 4054, 5, 2),
(26, 4054, 2, 1),
(27, 5473, 6, 18),
(28, 5527, 6, 1),
(29, 5844, 6, 1),
(30, 1936, 6, 1),
(31, 5202, 5, 1),
(32, 6939, 6, 3),
(33, 9231, 6, 3),
(34, 9231, 5, 1),
(35, 9231, 4, 1),
(36, 9231, 3, 1),
(37, 8123, 6, 1),
(38, 8007, 6, 2),
(39, 8007, 5, 1),
(40, 1178, 31, 2),
(41, 1178, 30, 1),
(42, 1178, 29, 3),
(43, 9942, 31, 3),
(44, 9996, 31, 3),
(45, 3742, 31, 3),
(46, 7611, 31, 3),
(47, 6930, 31, 3),
(48, 3492, 31, 10),
(49, 7541, 30, 3),
(50, 7550, 30, 1),
(51, 4724, 22, 1),
(52, 4724, 21, 1),
(53, 4724, 30, 1),
(54, 5658, 26, 1),
(55, 5232, 30, 1),
(56, 2958, 26, 2),
(57, 8835, 31, 1),
(58, 8835, 30, 1),
(59, 8835, 29, 1),
(60, 8835, 28, 1),
(61, 8835, 27, 1),
(62, 8835, 26, 1),
(63, 8835, 25, 1),
(64, 8835, 24, 1),
(65, 8825, 30, 1),
(66, 2194, 31, 1),
(67, 2194, 30, 1),
(68, 5134, 30, 1),
(69, 5134, 29, 1),
(70, 5134, 28, 1),
(71, 5134, 27, 1),
(72, 5134, 26, 2),
(73, 1463, 29, 1),
(74, 201, 29, 1),
(75, 201, 28, 1),
(76, 201, 27, 1),
(77, 7366, 29, 1),
(78, 318, 29, 1),
(79, 3868, 29, 2),
(80, 3868, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `danhmucbaiviet`
--

CREATE TABLE `danhmucbaiviet` (
  `id_danhmucbv` int(11) NOT NULL,
  `tendanhmucbv` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucbaiviet`
--

INSERT INTO `danhmucbaiviet` (`id_danhmucbv`, `tendanhmucbv`) VALUES
(6, 'ưu đãi');

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsanpham`
--

CREATE TABLE `danhmucsanpham` (
  `id_danhmuc` int(11) NOT NULL,
  `ten_danh_muc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsanpham`
--

INSERT INTO `danhmucsanpham` (`id_danhmuc`, `ten_danh_muc`) VALUES
(2, 'TIVI'),
(3, 'Tủ Lạnh'),
(4, 'xe'),
(5, 'ẩm thực'),
(6, 'Mỳ');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(200) NOT NULL,
  `id_nguoidung` int(200) NOT NULL,
  `timedathang` datetime NOT NULL DEFAULT current_timestamp(),
  `tennguoinhan` varchar(200) NOT NULL,
  `sdt` int(20) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `tongtien` int(200) NOT NULL,
  `trangthai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `id_nguoidung`, `timedathang`, `tennguoinhan`, `sdt`, `diachi`, `tongtien`, `trangthai`) VALUES
(201, 10, '2023-12-30 15:20:01', 'tuong', 2147483647, 'fffffffff', 267, 'duyệt'),
(318, 10, '2023-12-30 22:23:23', 'tuong', 2147483646, 'fffffffff', 89, 'chưa duyệt'),
(3868, 10, '2023-12-31 08:59:10', 'tuong', 2147483646, 'fffffffff', 267, 'chưa duyệt'),
(7366, 10, '2023-12-30 22:05:03', 'tuong', 2147483646, 'fffffffff', 89, 'chưa duyệt');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nguoidung` int(200) NOT NULL,
  `tennguoidung` varchar(200) NOT NULL,
  `diachi` varchar(200) NOT NULL,
  `matkhau` varchar(200) NOT NULL,
  `sdt` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `ma_pq` int(11) NOT NULL,
  `hinhanh` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id_nguoidung`, `tennguoidung`, `diachi`, `matkhau`, `sdt`, `email`, `ma_pq`, `hinhanh`) VALUES
(10, 'tuong', 'fffffffff', '34343434', 2147483646, 'aaaa.@gmail.com', 2, '1703987976_4.png'),
(11, 'đại', 'Quảng Nam', 'hahaha', 334012233, 'vothilamvu6898@gmail.com', 1, '1703924139_1.png'),
(13, 'Trương Nhược Đông', 'Quảng Nam', 'hahaha', 355, 'tranthithuykieu182100@gmail.com', 1, '1703921191_'),
(14, 'Hà Tiểu Quân', 'Quảng Nam', 'hahaha', 435, 'thuyhuynh141414@gmail.com', 1, 'tải xuống (15).jpg'),
(15, 'Hà Thái Úy', 'Qu', 'hahaha', 425466647, 'xiti.bt@easy1.vn', 1, '1703924319_2.png');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `id` int(11) NOT NULL,
  `tenphanquyen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`id`, `tenphanquyen`) VALUES
(1, 'khách hàng'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(11) NOT NULL,
  `tensanpham` varchar(500) NOT NULL,
  `gia` int(200) NOT NULL,
  `soluong` int(11) NOT NULL,
  `hinhanh` varchar(200) NOT NULL,
  `id_danhmucsp` int(11) NOT NULL,
  `chitiet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `tensanpham`, `gia`, `soluong`, `hinhanh`, `id_danhmucsp`, `chitiet`) VALUES
(15, 'mỳ cay', 43355, 12, '1700628666_3.-weatherbug.jpg', 8, ''),
(18, 'Combo Mì cay 65k', 49, 12, '1700712985_san-pham-combo-m-cay-65k_400x400_0_3_871788 (1).png', 6, ''),
(19, 'Combo Lẩu 259k', 200, 12, '1700713011_san-pham-combo-l-u-259k_400x400_0_3_911332.png', 6, ''),
(20, 'Combo Mì cay 109', 89, 13, '1700713037_san-pham-combo-m-cay-109k_400x400_0_3_855633 (1).png', 6, ''),
(21, 'Combo Mì cay 109', 89, 13, '1700713051_san-pham-my-cay-kim-chi-x-c-x-ch-c-vi-n_400x400_0_3_777800.png', 6, ''),
(22, 'Combo Mì cay 10', 89, 13, '1700713065_san-pham-my-cay-kim-chi-x-c-x-ch-c-vi-n_400x400_0_3_777800.png', 6, ''),
(23, 'Combo Mì cay 10', 89, 13, '1700713076_san-pham-my-cay-kim-chi-x-c-x-ch-c-vi-n_400x400_0_3_777800.png', 6, ''),
(25, 'Combo Mì cay 10', 89, 13, '1700713097_san-pham-my-cay-kim-chi-x-c-x-ch-c-vi-n_400x400_0_3_777800.png', 6, ''),
(26, 'Combo Mì cay 10', 89, 12, '1700713148_san-pham-my-cay-kim-chi-h-i-s-n_400x400_0_3_908079.png', 6, ''),
(27, 'Combo Mì cay 10', 89, 11, '1700713159_san-pham-combo-m-cay-65k_400x400_0_3_871788 (1).png', 6, ''),
(28, 'Combo Mì cay 10', 89, 8, '1700713171_san-pham-combo-m-cay-65k_400x400_0_3_871788 (1).png', 6, '<p>Với đặc trưng của v&ugrave;ng kh&iacute; hậu &ocirc;n đỡi, c&oacute; thể n&oacute;i hương vị cay nồng l&agrave; một vị kh&ocirc;ng thể thiếu trong ẩm thực H&agrave;n Quốc. Hương vị k&iacute;ch th&iacute;ch vị gi&aacute;c một c&aacute;ch tinh tế hay cũng c&oacute; thể cay x&egrave; đến bỏng cả lưỡi được xem l&agrave; linh hồn của c&aacute;c m&oacute;n ăn ở xứ sở kim chi. V&agrave; m&igrave; cay l&agrave; một trong những cơn b&atilde;o đ&atilde; g&acirc;y sốt giới m&ecirc; ẩm thực hiện nay, g&acirc;y ẩn tượng khiến kh&ocirc;ng &iacute;t người đều muốn được thưởng thức m&oacute;n ăn độc đ&aacute;o n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"Public/img/1703411139_MI_CAY_1.jpg\" style=\"height:250px; width:400px\" /></p>\r\n'),
(29, 'Combo Mì cay 10', 89, 10, '1700713182_san-pham-combo-m-cay-109k_400x400_0_3_855633 (1).png', 6, '<p>Với đặc trưng của v&ugrave;ng kh&iacute; hậu &ocirc;n đỡi, c&oacute; thể n&oacute;i hương vị cay nồng l&agrave; một vị kh&ocirc;ng thể thiếu trong ẩm thực H&agrave;n Quốc. Hương vị k&iacute;ch th&iacute;ch vị gi&aacute;c một c&aacute;ch tinh tế hay cũng c&oacute; thể cay x&egrave; đến bỏng cả lưỡi được xem l&agrave; linh hồn của c&aacute;c m&oacute;n ăn ở xứ sở kim chi. V&agrave; m&igrave; cay l&agrave; một trong những cơn b&atilde;o đ&atilde; g&acirc;y sốt giới m&ecirc; ẩm thực hiện nay, g&acirc;y ẩn tượng khiến kh&ocirc;ng &iacute;t người đều muốn được thưởng thức m&oacute;n ăn độc đ&aacute;o n&agrave;y.</p>\r\n\r\n<p><img alt=\"\" src=\"Public/img/1703411139_MI_CAY_1.jpg\" style=\"height:250px; width:400px\" /></p>\r\n'),
(31, 'Combo Mì cay 10', 89, 0, '1700713205_san-pham-my-cay-kim-chi-x-c-x-ch-c-vi-n_400x400_0_3_777800.png', 6, '<p><span class=\"marker\">Với đặc trưng của v&ugrave;ng kh&iacute; hậu &ocirc;n đỡi, c&oacute; thể n&oacute;i hương vị cay nồng l&agrave; một vị kh&ocirc;ng thể thiếu trong ẩm thực H&agrave;n Quốc. Hương vị k&iacute;ch th&iacute;ch vị gi&aacute;c một c&aacute;ch tinh tế hay cũng c&oacute; thể cay x&egrave; đến bỏng cả lưỡi được xem l&agrave; linh hồn của c&aacute;c m&oacute;n ăn ở xứ sở kim chi. V&agrave; m&igrave; cay l&agrave; một trong những cơn b&atilde;o đ&atilde; g&acirc;y sốt giới m&ecirc; ẩm thực hiện nay, g&acirc;y ẩn tượng khiến kh&ocirc;ng &iacute;t người đều muốn được thưởng thức m&oacute;n ăn độc đ&aacute;o n&agrave;y.</span></p>\r\n\r\n<p><img alt=\"\" src=\"Public/img/1703411139_MI_CAY_1.jpg\" style=\"height:250px; width:400px\" /></p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_binhluan`);

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_chitiet`);

--
-- Indexes for table `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  ADD PRIMARY KEY (`id_danhmucbv`);

--
-- Indexes for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`),
  ADD UNIQUE KEY `id_hoadon` (`id_hoadon`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_binhluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_chitiet` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  MODIFY `id_danhmucbv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `danhmucsanpham`
--
ALTER TABLE `danhmucsanpham`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nguoidung` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
