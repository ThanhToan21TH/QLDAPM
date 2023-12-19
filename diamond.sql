-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 06:57 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--
DROP DATABASE IF EXISTS `diamond`;
CREATE DATABASE IF NOT EXISTS `diamond` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `diamond`;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(1, 'Phòng khách'),
(2, 'Phòng ngủ'),
(3, 'Nhà bếp');

-- --------------------------------------------------------

--
-- Table structure for table `diachi`
--

CREATE TABLE `diachi` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `macdinh` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `nguoidung_id` int(11) NOT NULL,
  `diachi_id` int(11) DEFAULT NULL,
  `ngay` datetime NOT NULL DEFAULT current_timestamp(),
  `tongtien` float NOT NULL DEFAULT 0,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donhangct`
--

CREATE TABLE `donhangct` (
  `id` int(11) NOT NULL,
  `donhang_id` int(11) NOT NULL,
  `mathang_id` int(11) NOT NULL,
  `dongia` float NOT NULL DEFAULT 0,
  `soluong` int(11) NOT NULL DEFAULT 1,
  `thanhtien` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mathang`
--

CREATE TABLE `mathang` (
  `id` int(11) NOT NULL,
  `tenmathang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `giagoc` float NOT NULL DEFAULT 0,
  `giaban` float NOT NULL DEFAULT 0,
  `soluongton` int(11) NOT NULL DEFAULT 0,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `luotmua` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mathang`
--

INSERT INTO `mathang` (`id`, `tenmathang`, `mota`, `giagoc`, `giaban`, `soluongton`, `hinhanh`, `danhmuc_id`,`luotxem`,`luotmua`) VALUES
(1, 'Bộ tủ kệ Tivi Siêu Cấp Vip Pro', '<p>Kích thước (Dài&nbsp;× Rộng × Dày) : 110,5 × 91 × 9,4 cm</p><p>Màu trắng sang xin và mịn</p><p>Khách đến nhà nhìn chết mê chết mệt</p>', 2000000, 1800000, 10, 'image/pk1.jpg', 1, 5,0),
(2, 'Kệ Tivi gỗ trầm hương', '<p><strong>Phát trên mình màu nâu óng ánh</strong>&nbsp;thuộc dòng gỗ quý hiếm bật nhất Việt Nam, được săn lùng bởi các đại gia, các doanh nhanh thành đạt và những người đam mê đồ gỗ. Được kế hợp hài hoà giữa hương thơm tự nhiên của gỗ cùng với thiết kế sang trong tinh tế, làm toát lên vẻ dẹp nhiều tiền của gia chủ</p><p><i><strong>Sản phẩm được cho phép kinh doanh</strong></i></p>', 1500000000, 1000000000, 1, 'image/pk2.jpg', 1, 4, 0),
(3, 'Bộ tủ kệ Tivi K30-502', '<p><strong>Được thiết kế một cách sang trọng và tối giãn giúp tăng mỹ quan cho gia chủ</strong></p><p>Với sự kết hợp giữa màu trắng tinh khiết như làn da của những cô gái và màu nâu sẩm như làn da của các cánh đàn ông&nbsp;</p><p>Với nhiều ngăn giúp cho việc lưu trữ dễ dàng</p><p>Kích thước phù hợp không chiếm qua nhiều diện tích</p><p>Độ bền sản phẩm cao do được phủ lớp keo chống mối mọt</p>', 6350000, 5715000, 20, 'image/pk3.jpg', 1, 2, 0),
(4, 'Tủ quần ảo phòng ngủ K09-821', '<p>Màu sắc trang nhã</p><p>Cách sắp xếp ngăn tủ một cách hợp lý rộng rãi&nbsp;tiện dụng</p><p>Thao tác lắp đặt, tháo rời đơn giản, dễ dàng</p><p>Bề mặt có các khe hở, tránh ẩm mốc.</p><p>Khay đựng quần áo 3 tầng&nbsp;thường được dùng để đựng chăn mền, bảo quản, phân loại các đồ đạc, </p>', 1780000, 1402000, 25, 'image/1.jpg', 2, 3, 1),
(5, 'Tủ quẩn ảo phong ngủ K90-834', '<p>Màu sắc trang nhã</p><p>Cách sắp xếp ngăn tủ một cách hợp lý rộng rãi&nbsp;tiện dụng</p><p>Thao tác lắp đặt, tháo rời đơn giản, dễ dàng</p><p>Bề mặt có các khe hở, tránh ẩm mốc.</p><p>Khay đựng quần áo 3 tầng&nbsp;thường được dùng để đựng chăn mền, bảo quản, phân loại các đồ đạc, </p>', 1920000, 158000, 40, 'image/2.jpg', 2, 5, 0),
(6, 'Tủ quần áo cửa kéo L04-I21', '<p>Sản phẩm làm bằng gỗ cao cấp, thân thiện với môi trường, an toàn khi sử dụng.</p><p>Thiết kế cửa kéo nhóm bền và tiện lợi.</p><p>Thiết kế trong suốt hiện đại, đơn giản nhưng tinh tế với loại cửa kéo tiện dụng.</p>', 1300000, 980000, 30, 'image/3.jpg', 2, 8, 0),
(7, 'Quầy bếp kèm tủ bếp B34-471', '<p>Sản phẩm&nbsp;làm bằng đá cao cấp, màu sắc đẹp và bắt mắt.</p><p>Sản&nbsp;phẩm được thiết kế với kiểu dáng đơn giản, kích thước nhỏ gọn không chiếm nhiều diện tích.</p><p>Sản phẩm giúp cho việc sắp xếp các đồ dùng trở nên gọn gàng, ngăn nắp.</p>', 1900000, 1360000, 20, 'image/NB1.jpg', 3, 2, 0),
(8, 'Quầy bếp kèm tủ bếp B39-601', '<p>Sản phẩm&nbsp;làm bằng đá cao cấp, màu sắc đẹp và bắt mắt.</p><p>Sản&nbsp;phẩm được thiết kế với kiểu dáng đơn giản, kích thước nhỏ gọn không chiếm nhiều diện tích.</p><p>Sản phẩm giúp cho việc sắp xếp các đồ dùng trở nên gọn gàng, ngăn nắp.</p>', 1850000, 1265000, 10, 'image/NB2.jpg', 3, 8, 1),
(9, 'Quầy bếp kèm tủ bếp P51-982', '<p>Sản phẩm&nbsp;làm bằng đá cao cấp, màu sắc đẹp và bắt mắt.</p><p>Sản&nbsp;phẩm được thiết kế với kiểu dáng đơn giản, kích thước nhỏ gọn không chiếm nhiều diện tích.</p><p>Sản phẩm giúp cho việc sắp xếp các đồ dùng trở nên gọn gàng, ngăn nắp.</p>', 1830000, 1250000, 15, 'image/NB3.jpg', 3, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sodienthoai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `loai` tinyint(4) NOT NULL DEFAULT 3,
  `trangthai` tinyint(4) NOT NULL DEFAULT 1,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`id`, `email`, `sodienthoai`, `matkhau`, `hoten`, `loai`, `trangthai`, `hinhanh`) VALUES
(1, 'diamond@shop.com', '0988994683', '900150983cd24fb0d6963f7d28e17f72', 'Admin', 1, 1, 'user.png'),
(2, 'def@diamod.com', '11111111', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thị Bành Chướng', 2, 1, 'doraemon.jpg'),
(3, 'ghi@dimoand.com', '0988994685', '900150983cd24fb0d6963f7d28e17f72', 'Nhân viên GHI', 2, 1, NULL),
(4, 'kh1@gmail.com', '0988994686', '900150983cd24fb0d6963f7d28e17f72', 'Nguyễn Thanh Toàn', 3, 1, NULL),
(5, 'kh2@gmail.com', '0988994687', '900150983cd24fb0d6963f7d28e17f72', 'Thiều Tấn Tài', 3, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diachi`
--
ALTER TABLE `diachi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nguoidung_id` (`nguoidung_id`),
  ADD KEY `diachi_id` (`diachi_id`);

--
-- Indexes for table `donhangct`
--
ALTER TABLE `donhangct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhang_id` (`donhang_id`),
  ADD KEY `mathang_id` (`mathang_id`);

--
-- Indexes for table `mathang`
--
ALTER TABLE `mathang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `danhmuc_id` (`danhmuc_id`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `diachi`
--
ALTER TABLE `diachi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhangct`
--
ALTER TABLE `donhangct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mathang`
--
ALTER TABLE `mathang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diachi`
--
ALTER TABLE `diachi`
  ADD CONSTRAINT `diachi_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`nguoidung_id`) REFERENCES `nguoidung` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `donhangct`
--
ALTER TABLE `donhangct`
  ADD CONSTRAINT `donhangct_ibfk_1` FOREIGN KEY (`donhang_id`) REFERENCES `donhang` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `donhangct_ibfk_2` FOREIGN KEY (`mathang_id`) REFERENCES `mathang` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `mathang`
--
ALTER TABLE `mathang`
  ADD CONSTRAINT `mathang_ibfk_1` FOREIGN KEY (`danhmuc_id`) REFERENCES `danhmuc` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
