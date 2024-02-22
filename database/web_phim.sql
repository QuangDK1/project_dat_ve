-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 28, 2023 at 04:20 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_phim`
--

-- --------------------------------------------------------

--
-- Table structure for table `dondatve`
--

DROP TABLE IF EXISTS `dondatve`;
CREATE TABLE IF NOT EXISTS `dondatve` (
  `IDDonDatVe` int(11) NOT NULL AUTO_INCREMENT,
  `IDKhachHang` int(11) NOT NULL,
  `TenKH` varchar(45) NOT NULL,
  `ThoiGianDat` varchar(45) NOT NULL,
  `TrangThai` tinyint(4) NOT NULL COMMENT '1:đã đặt , 0:chưa đặt',
  `HinhThucThanhToan` tinyint(4) NOT NULL,
  PRIMARY KEY (`IDDonDatVe`),
  KEY `IDKhachHang` (`IDKhachHang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ghe`
--

DROP TABLE IF EXISTS `ghe`;
CREATE TABLE IF NOT EXISTS `ghe` (
  `IDGhe` int(11) NOT NULL AUTO_INCREMENT,
  `HangGhe` varchar(45) NOT NULL,
  `SoGhe` int(5) NOT NULL,
  PRIMARY KEY (`IDGhe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `IDKH` int(11) NOT NULL AUTO_INCREMENT,
  `TenKH` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(16) NOT NULL,
  PRIMARY KEY (`IDKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

DROP TABLE IF EXISTS `phim`;
CREATE TABLE IF NOT EXISTS `phim` (
  `IDPhim` int(11) NOT NULL AUTO_INCREMENT,
  `IDTheLoai` int(11) NOT NULL,
  `TenPhim` varchar(45) NOT NULL,
  `ThoiLuong` varchar(45) NOT NULL,
  `KhoiChieu` date DEFAULT NULL,
  `Mota` varchar(1000) NOT NULL,
  `Img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Trailer` varchar(50) NOT NULL,
  PRIMARY KEY (`IDPhim`),
  KEY `IDTheLoai` (`IDTheLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`IDPhim`, `IDTheLoai`, `TenPhim`, `ThoiLuong`, `KhoiChieu`, `Mota`, `Img`, `Trailer`) VALUES
(1, 5, 'CREED III', '117 phút', '2023-03-01', 'Adonis Creed đang trong đỉnh cao của cả sự nghiệp và cuộc sống gia đình, nhưng khi người bạn thời thơ ấu của anh Damian, đồng thời là cựu thần đồng quyền anh tái xuất, cuộc đối đầu ấy không chỉ đơn thuần là một cuộc chiến...\r\n', 'creed.jpg', 'creed.mp4'),
(2, 1, 'HOW TO SAVE THE IMMORTAL', '76 phút', '2023-03-14', 'Hành trình đi tìm tình yêu cùa hoàng tử đẹp trai và bất tử Koschey,nhưng vẫn không ai đồng ý mặc dù anh đã nhiều lần bắt cóc và biến nhiều công chúa thành ếch.Sau đó anh gặp nữ anh hùng Varvara, liệu sự chân thành của anh ta có chinh phục được cô ấy ?', 'cuocchienbattu.jpg', 'howtosaveimmortal.mp4'),
(3, 1, 'DEMON SLAYER : TO THE SWORDSMITH VILLAGE', '110 phút', '2023-03-02', 'Sau trận chiến khốc liệt với anh em quỷ Thượng Huyền Lục Gyuutarou và Daki tại Phố Đèn Đỏ, Tanjiro và các kiếm sĩ diệt quỷ đều bị thương nặng, thanh gươm của Tanjiro cũng bị hư hỏng nặng và cậu cần một thanh gươm mới để tiếp tục làm nhiệm vụ...', 'demonslayer.jpg', 'demonslayer.mp4'),
(4, 4, 'THE ONE', '96 phút', '2023-03-11', 'Cặp vợ chồng mới cưới Larisa và Vladimir trở về nhà từ tuần trăng mật ở Blagoveshchensk và bị va chạm máy bay, Larisa phải vật lộn với cái đói cái lạnh và động vật hoang dã săn mồi. Liệu Larisa có tìm được vị hôn phu và cùng sống sót trở về ?', 'songsot.jpg', 'theone.mp4'),
(5, 4, 'SOULMATE', '124 phút', '2023-03-16', 'Mi So và Ha Eun trong một mối quan hệ chồng chéo chất chứa những hạnh phúc, rung động và biệt ly. Từ giây phút gặp nhau , hai cô gái đã hình thành sợi dây liên kết đặc biệt nhưng mối quan hệ của họ rạn nứt khi một chàng trai xuất hiện...', 'soulmate.jpg', 'soulmate.mp4'),
(6, 2, 'THE COMUNION GIRL', '99 phút', '2023-03-10', 'Dựa trên truyền thuyết đô thị rùng rợn về một hồn ma cô gái mặc phục trang cho buổi Rước lễ lần đầu. Sara và bạn thân Rebe phải đối mặt với sự truy đuổi ác nghiệt từ một linh hồn không tên, cả hai sẽ phải làm gì để bảo vệ bản thân và gia đình...?', 'vonghon.jpg', 'vonghon.mp4'),
(7, 6, 'NHỮNG ĐỨA TRẺ TRONG SƯƠNG', '93 phút', '2023-03-04', 'Di, một cô gái trẻ nhiệt huyết đến từ cộng đồng người Mông bị mắc kẹt giữa truyền thống \"kéo vợ\" và mong muốn được tiếp tục sống thời thơ ấu và đến trường đi học , liệu với trái tim trong sáng ấy , Di sẽ đối diện với xã hội ấy như thế nào...?', 'nhungduatretrongsuong.jpg', 'nhungduatretrrongsuong.mp4'),
(8, 4, 'MY BEAUTIFUL MAN MOVIE: SPECIAL EDITION', '98 phút', '2023-04-13', 'Hira, 17 tuổi, cố gắng ẩn mình ở trường, không bao giờ muốn phơi bày tật nói lắp của mình với các bạn cùng lớp. Anh ấy nhìn thế giới qua ống kính máy ảnh của mình, cho đến một ngày Kiyoi Sou bước qua cửa lớp...', 'mybeautifulman.jpg', 'thebeautifulman.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `phongchieu`
--

DROP TABLE IF EXISTS `phongchieu`;
CREATE TABLE IF NOT EXISTS `phongchieu` (
  `IDPhongChieu` int(11) NOT NULL AUTO_INCREMENT,
  `IDRap` int(11) NOT NULL,
  `IDGhe` int(11) NOT NULL,
  PRIMARY KEY (`IDPhongChieu`),
  KEY `IDGhe` (`IDGhe`),
  KEY `IDRap` (`IDRap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rapchieuphim`
--

DROP TABLE IF EXISTS `rapchieuphim`;
CREATE TABLE IF NOT EXISTS `rapchieuphim` (
  `IDRap` int(11) NOT NULL AUTO_INCREMENT,
  `TenRap` varchar(45) NOT NULL,
  PRIMARY KEY (`IDRap`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suatchieu`
--

DROP TABLE IF EXISTS `suatchieu`;
CREATE TABLE IF NOT EXISTS `suatchieu` (
  `IDSuatChieu` int(11) NOT NULL AUTO_INCREMENT,
  `IDPhim` int(11) NOT NULL,
  `IDPhongChieu` int(11) NOT NULL,
  PRIMARY KEY (`IDSuatChieu`),
  KEY `IDPhim` (`IDPhim`),
  KEY `IDPhongChieu` (`IDPhongChieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `IDTheLoai` int(11) NOT NULL AUTO_INCREMENT,
  `TenTheLoai` varchar(45) NOT NULL,
  PRIMARY KEY (`IDTheLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`IDTheLoai`, `TenTheLoai`) VALUES
(1, 'Animation'),
(2, 'Horror'),
(3, 'Romance'),
(4, 'Drama'),
(5, 'Sport'),
(6, 'Documentary');

-- --------------------------------------------------------

--
-- Table structure for table `ve`
--

DROP TABLE IF EXISTS `ve`;
CREATE TABLE IF NOT EXISTS `ve` (
  `IDVe` int(11) NOT NULL AUTO_INCREMENT,
  `IDDonDatVe` int(11) NOT NULL,
  `IDSuatChieu` int(11) NOT NULL,
  `IDGhe` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL,
  `GiaVe` int(11) NOT NULL,
  PRIMARY KEY (`IDVe`),
  KEY `IDDonDatVe` (`IDDonDatVe`),
  KEY `IDGhe` (`IDGhe`),
  KEY `IDSuatChieu` (`IDSuatChieu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dondatve`
--
ALTER TABLE `dondatve`
  ADD CONSTRAINT `dondatve_ibfk_1` FOREIGN KEY (`IDKhachHang`) REFERENCES `khachhang` (`IDKH`);

--
-- Constraints for table `phim`
--
ALTER TABLE `phim`
  ADD CONSTRAINT `phim_ibfk_1` FOREIGN KEY (`IDTheLoai`) REFERENCES `theloai` (`IDTheLoai`);

--
-- Constraints for table `phongchieu`
--
ALTER TABLE `phongchieu`
  ADD CONSTRAINT `phongchieu_ibfk_1` FOREIGN KEY (`IDGhe`) REFERENCES `ghe` (`IDGhe`),
  ADD CONSTRAINT `phongchieu_ibfk_2` FOREIGN KEY (`IDRap`) REFERENCES `rapchieuphim` (`IDRap`);

--
-- Constraints for table `suatchieu`
--
ALTER TABLE `suatchieu`
  ADD CONSTRAINT `suatchieu_ibfk_1` FOREIGN KEY (`IDPhim`) REFERENCES `phim` (`IDPhim`),
  ADD CONSTRAINT `suatchieu_ibfk_2` FOREIGN KEY (`IDPhongChieu`) REFERENCES `phongchieu` (`IDPhongChieu`);

--
-- Constraints for table `ve`
--
ALTER TABLE `ve`
  ADD CONSTRAINT `ve_ibfk_1` FOREIGN KEY (`IDDonDatVe`) REFERENCES `dondatve` (`IDDonDatVe`),
  ADD CONSTRAINT `ve_ibfk_2` FOREIGN KEY (`IDGhe`) REFERENCES `ghe` (`IDGhe`),
  ADD CONSTRAINT `ve_ibfk_3` FOREIGN KEY (`IDSuatChieu`) REFERENCES `suatchieu` (`IDSuatChieu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
