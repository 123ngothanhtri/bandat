-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 07:35 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bandat`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Thần Thánh', 'admin@gmail.com', '$2y$10$k5JaZon8Aoy/aDV6R6GULeTwIVV8LFP0vVm5pJ1CTHTFIQ04Ivb.S');

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tieude_baiviet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota_baiviet` varchar(999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sdt_baiviet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi_baiviet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaytao_baiviet` datetime NOT NULL,
  `gia_baiviet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hinhanh_baiviet` varchar(9999) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `dientich_baiviet` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`id_baiviet`, `tieude_baiviet`, `mota_baiviet`, `sdt_baiviet`, `diachi_baiviet`, `ngaytao_baiviet`, `gia_baiviet`, `hinhanh_baiviet`, `id`, `dientich_baiviet`) VALUES
(99, 'bán gấp nhà biệt thự pro vip', 'qwq erq erqwr qw', '2123123123', 'cần bán nhà ngay trục đường Hà Huy Giáp. phường thạnh xuân q12', '2021-10-17 12:14:51', '1321', 'hinhanh/zdbdnhocajngohw2NdX20zhQ3OQyRWYkeqay4NDP.jpg|hinhanh/sWQOPyOuJAmzvFbCvBHRr1eYOS39sj3lde6FZcXQ.jpg', 22, '3x8m'),
(100, 'bán gấp nhà biệt thự pro vip 2', 'qeweqwe', '312312312', 'cần bán nhà ngay trục đường Hà Huy Giáp. phường thạnh xuân q12', '2021-10-17 12:31:11', '321231', 'hinhanh/6D5QACNX8WmsecXrkbPGnZaQesrexbgv1uL3NShc.jpg', 22, 'qeqwe'),
(101, 'Bán đất tại Vĩnh Long', 'áp lý: Sổ hồng từng căn, công chứng ngay.\r\n➡️Diện tích: 5m2 ×15 m2\r\n➡️Giá cả ưu đãi mùa dịch: Chỉ từ 1,73 tỷ/căn\r\n●Nhà 1 trệt 1 lầu 3phong 3wc\r\n➡️Giá rẻ, hợp lý để ở hoặc đầu tư.\r\n➡️Vị trí đắc địa: Mặt tiền (lộ giới 12m), các tiện ích trong bán kính 1km chợ ,trường học,trạm y tế,thế giới di động,điện máy xanh .v.v...\r\n➡️Nhà đẹp, bàn giao hoàn chỉnh: điện âm, cống âm, đường nhựa 6m.', '023123123', 'cần bán nhà ngay trục đường Hà Huy Giáp. phường thạnh xuân q12', '2021-10-17 13:09:01', '121212', 'hinhanh/amfpNLF9bA5T1T43HgvDTUyf79eh0GAKJe8axcGw.jpg|hinhanh/PQ8ryWi3bfZgA18SMoDYYZWXyfpQ6pqck3NOyr15.jpg|hinhanh/Di5QTJnOSiIeDdbL29US6slJtcnpfOtqET3yZjDu.jpg|hinhanh/iMPICRIoskaABPwHAGKmwmTr6o4eeQTbW69rxYWm.jpg|hinhanh/5GRtib3nKhcbw8RbThMm10U9Sgcc3k2wDTyzClBK.jpg', 22, '3x8m'),
(102, 'Bán đất tại Vĩnh Long', 'wdw', '23123', '231231', '2021-10-17 13:38:12', '123123', 'hinhanh/agkr6IVc8OM1eEAZSkHbnwsx9qtuPLYHDarYhF3A.jpg|hinhanh/sJFm934a3K4LTZiX1M0e2DAYVJgXxYKFJxAIyCEW.jpg|hinhanh/FQPU7m4Nmjuka9M8iqdqY7pokCxFmaHcnIiUKAqP.jpg|hinhanh/tHG8DZzRgvd0J5YgNRDHSRRJKQvsY6MkUDrGJ7u2.jpg', 22, '123123'),
(103, 'sasd', 'asdas', '12312', '1231', '2021-10-17 13:44:32', '1231', 'hinhanh/DyAeY9YBDF15ZzzCRzQgoBrFNG26vDEjz2baU0zJ.jpg|hinhanh/8ezKMhnadKepg6h8nsfpLHEHRf5ru5FfimbxtpIp.jpg|hinhanh/54sZ0FUVczE9ECwMtec01SNAwbY1FVcfZxKvkWRc.jpg|hinhanh/RePiZ17nY3IMvOo6LTLXm0Bgik3hX5lRbmyv1ZBj.jpg|hinhanh/EQMxcEz6bODelMdsQIqSaLkdW2IYe8SL4Jmya6MS.jpg', 22, '2131'),
(104, 'BÁN ĐẤT THÀNH PHỐ PHÚ QUỐC, KIÊN GIANG', 'Bán một khu đất gồm 3 sổ tổng diện tích là 2837,2 m2.\r\nĐịa chỉ resort Khu 7 thị trấn Dương Đông, Phú Quốc hiện đang kinh doanh có 18 căn Bugalow có bể bơi nhà hàng phần lớn diện tích đất đã chuyển sang đất dịch vụ nằm cách đường Trần Hưng Đạo 50 m mặt tiền của lối xuống biển in đường Trần Hưng Đạo áo xuống khách sạn Vanada.\r\nBán toàn bộ diện tích và toàn bộ các công trình xây dựng trên giá125 tỷ có thương lượng.\r\nXin liên hệ A Khải số điện thoại bài 0917567989. Xin chân thành cảm ơn quý khách.', '0917567988', 'Huyện Phú Quốc, Tỉnh Kiên Giang', '2021-10-17 14:35:11', '125 Tỷ - 44.06 Triệu/m²', 'hinhanh/0vOXbjzRmgNicMHBlVhK49n9oPRTEx0S4Y9zdcLj.jpg|hinhanh/GOFmvCStT9ykV3mK3xDMNV8r1LgWRInalOaCl2Yh.jpg|hinhanh/HZY0DqdKE6E78KwRxuTsp3VtRb3rRMSa6rmqy9XA.jpg|hinhanh/H6wTDXEKiSrWwT3G5wyoRPl5urqGBDZ76RdzhruU.jpg|hinhanh/UTABeWj32XVrBIIhHP5bXph4NXEamQGSylod7txU.jpg', 14, '2,837.2 m²'),
(105, 'BÁN LÔ ĐẤT HỖN HỢP 95-10-3 KHU TRƯỜNG THỊNH, TỨ MINH, THÀNH PHỐ HẢI DƯƠNG, TỈNH HẢI DƯƠNG', 'Bán lô đất hỗn hợp 95-10-3 khu Trường Thịnh, Tứ Minh, thành phố Hải Dương, tỉnh Hải Dương.\r\nDiện tích: 813m2.\r\nLô góc 3 mặt đường.\r\nGần đường Trường Chinh và xa lô Võ Nguyên Giáp.\r\nGiá 23 triệu/m2.\r\n18,699 tỷ đồng.', '0904116201', 'Đường Trường Chinh, Phường Tứ Minh, Thành phố Hải Dương, Tỉnh Hải Dương', '2021-10-17 14:45:51', '18.7 Tỷ - 23 Triệu/m²', 'hinhanh/3H9P3ir7cDtZnwfuwFJ9XieOWdX1UN41hYhtbiqK.jpg|hinhanh/EV4YD3XssJOexaw56lI8AfjSjScGsOQeo34gZ9Cf.jpg|hinhanh/dVfypVo19o5qRXbVeVWzU6WI19SqAx4dhPffmtA2.jpg', 14, '813 m²');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `birthday`, `image`, `password`, `email_verified_at`, `remember_token`) VALUES
(14, 'Nguyễn Thị Keqing', 'keqing@gmail.com', 'Nữ', '2009-06-01', 'avatar/EBPf49Lo08e94W6LtojRNff1YpegpYhjW3ehRtKu.png', '$2y$10$w5bCfNmNLUkHOO6qs6N4RuFYLIb5zUFwL2i81dtQOp3qFdMMevOWO', NULL, NULL),
(15, 'Barbara', 'barbara@gmail.com', 'Nam', '2000-04-17', NULL, '$2y$10$w5bCfNmNLUkHOO6qs6N4RuFYLIb5zUFwL2i81dtQOp3qFdMMevOWO', NULL, NULL),
(16, 'Ganyu', 'ganyu@gmail.com', 'Nữ', '2000-04-17', NULL, '$2y$10$w5bCfNmNLUkHOO6qs6N4RuFYLIb5zUFwL2i81dtQOp3qFdMMevOWO', NULL, NULL),
(17, 'Raiden Shogun', 'raidensogun@gmail.com', 'Nữ', '2015-01-01', NULL, '$2y$10$3FrJBmC6DogptqKcrvnTzOJa5EgN4qeAm30Pfx1CXfCG9RuNnZ7xW', NULL, NULL),
(18, 'Kokomi', 'kokomi@gmail.com', 'Nữ', '2009-01-01', 'avatar/xH7ruO7wi3rSNrsF9gcm15hjRf9BOilNaer3YAEd.png', '$2y$10$DlmizLVOXh481DQ10mFL5uIKYnpiwiSMz2/00CQW1fZNW98qRZvb6', NULL, NULL),
(19, 'HuTao', 'hutao@gmail.com', 'Nữ', '2000-12-29', NULL, '$2y$10$XNBdoK9Sw/TeasrTgEmr8uFBtk4HTab6.PpAxW6G1nnT1Wi4wv7kC', NULL, NULL),
(20, 'Eula', 'eula@gmail.com', 'Nữ', '2015-01-01', NULL, '$2y$10$gfq1b5QbjJML45OYZcv1C.1ZXJMQJKCsQqsYlNlT7iia4eZ1/dLZy', NULL, NULL),
(21, 'Yoimiya', 'yoimiya@gmail.com', 'Nữ', '2015-01-01', NULL, '$2y$10$0jXo4/XzI6Z58c1WVOQ18eJkNQRWh6bO8diYVCz6ETyE46HaRyy0y', NULL, NULL),
(22, 'Ayaka', 'ayaka@gmail.com', 'Nam', '2014-12-31', 'avatar/RnTAtOo6luerW9QWG5FdMhEaSHrfGDonCxkXk7ug.png', '$2y$10$aY9sx1MSmND/I7k5vJP/TumKJAjk5d8L0Q4y/vqj22lauOBLz7Cze', NULL, NULL),
(23, 'Zhongli', 'zhongli@gmail.com', 'Nam', '2000-10-01', NULL, '$2y$10$fJfdsDMHf1wq8/K8N0Itie79lTINyimfouiJfAFg/9peSWX1ki.tq', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id_baiviet`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
