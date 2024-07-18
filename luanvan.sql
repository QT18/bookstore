-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 11:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luanvan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(10) NOT NULL,
  `madonhang` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `code_donhang` varchar(255) NOT NULL,
  `so_luong` int(10) NOT NULL,
  `gia` decimal(10,0) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `hinhanh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdonhang`
--

INSERT INTO `chitietdonhang` (`id`, `madonhang`, `masp`, `code_donhang`, `so_luong`, `gia`, `tensp`, `hinhanh`) VALUES
(130, 72, 38, '6586', 5, 30000, 'Đấng toàn năng Nobita', 'dangtoannangnobitajpg.jpg'),
(131, 72, 41, '6586', 5, 30000, 'Nobita Và Lịch Sử Khai Phá Vũ Trụ', 'líchukhaiphavutru.jpg'),
(132, 73, 63, '4503', 1, 110000, 'Những con chim ẩn mình chờ chết', 'nhungconchimanminhchochet.jpg'),
(133, 73, 56, '4503', 1, 90000, 'Đám trẻ ở đại dương đen', 'damtreodaiduongden.jpg'),
(134, 73, 55, '4503', 1, 85000, 'Một lít nước mắt', 'motlitnuocmat.jpg'),
(135, 73, 48, '4503', 1, 50000, 'Trí thông minh của sự tinh tế', '4cdfbb2fd4217d7f2430.jpg'),
(136, 73, 51, '4503', 1, 110000, 'Không ai có thể làm bạn tổn thương trừ khi bạn cho phép', 'kactlbtttkbcp.jpg'),
(137, 73, 49, '4503', 1, 90000, 'Càng bình tĩnh càng hạnh phúc', 'vantinh.jpg'),
(138, 73, 44, '4503', 1, 30000, 'Doraemon Plus', 'Doraemon.jpg'),
(139, 74, 46, '6106', 3, 90000, 'Lý thuyết trò chơi', 'lythuyettrochoi.jpg'),
(140, 74, 32, '6106', 2, 150000, 'Bước chậm lại giữa thế gian vội vã 1', 'images (1).jpg'),
(141, 74, 34, '6106', 1, 280000, 'Phác họa chân dung kẻ phạm tội', '310654077-256-k650808.jpg'),
(142, 74, 39, '6106', 1, 30000, 'Nobita và Ba chàng hiệp sĩ mộng mơ', 'bachanghiepsimongmo.jpg'),
(143, 74, 82, '6106', 5, 80000, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', 'duongmaytrendathoa.jpg.webp'),
(144, 75, 48, '964', 1, 50000, 'Trí thông minh của sự tinh tế', '4cdfbb2fd4217d7f2430.jpg'),
(145, 75, 51, '964', 2, 110000, 'Không ai có thể làm bạn tổn thương trừ khi bạn cho phép', 'kactlbtttkbcp.jpg'),
(146, 76, 77, '8531', 2, 157000, 'Thiên tài bên trái kẻ điên bên phải', 'thientaibentraikedienbenphai.jpg'),
(147, 77, 35, '8609', 3, 280000, 'Phác họa chân dung kẻ phạm tội 2', 'tam-ly-hoc-toi-pham-diep-hong-vu.jpg'),
(148, 77, 85, '8609', 2, 65000, 'Thiên Thần Sa Ngã (Tái Bản)', 'ttsanga.jpg.webp'),
(149, 77, 58, '8609', 3, 165000, 'Muôn kiếp nhân sinh 3', 'muonkiepnhansinh3.jpg'),
(150, 78, 58, '2287', 1, 165000, 'Muôn kiếp nhân sinh 3', 'muonkiepnhansinh3.jpg'),
(151, 78, 68, '2287', 1, 56000, 'Mùa hè không tên 2', 'muahekhongten1.jpg'),
(152, 78, 55, '2287', 1, 85000, 'Một lít nước mắt', 'motlitnuocmat.jpg'),
(153, 78, 49, '2287', 1, 90000, 'Càng bình tĩnh càng hạnh phúc', 'vantinh.jpg'),
(154, 78, 50, '2287', 1, 90000, 'Hành tinh của một kẻ nghĩ nhiều', 'Hanhtinhcuarmotkenghinhieu.jpg'),
(155, 78, 51, '2287', 1, 110000, 'Không ai có thể làm bạn tổn thương trừ khi bạn cho phép', 'kactlbtttkbcp.jpg'),
(156, 79, 55, '3060', 2, 85000, 'Một lít nước mắt', 'motlitnuocmat.jpg'),
(157, 80, 28, '5225', 3, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(158, 80, 95, '5225', 1, 77000, 'Tôi tìm mình giữa những tháng năm', 'ttm.jpg.webp'),
(159, 80, 44, '5225', 2, 30000, 'Doraemon Plus', 'Doraemon.jpg'),
(160, 80, 42, '5225', 1, 30000, 'Nobita Du Hành Biển Phương Nam', 'duhanhbienphuongnam.jpg'),
(161, 80, 40, '5225', 1, 30000, 'Nobita và vương quốc trên mây', 'nobitavavuongquoctrenmay.jpg'),
(162, 81, 66, '4024', 1, 180000, 'Đêm trắng', 'demtrawng.jpg'),
(163, 81, 83, '4024', 1, 52000, 'Hoa trôi trên sông nước', 'hoatroi.jpg'),
(164, 81, 91, '4024', 1, 230000, 'Phải trái đúng sai', 'ptds.jpg.webp'),
(165, 82, 54, '7513', 1, 150000, 'Con chim xanh biếc bay về', 'conchimbiecbayve.jpg'),
(166, 82, 53, '7513', 1, 50000, 'Thương', 'thuong.jpg'),
(167, 82, 59, '7513', 1, 80000, 'Mùa hè không tên', 'muahekhongten.jpg'),
(168, 82, 69, '7513', 1, 150000, 'Lén nhặt chuyện đời', 'lennhat.jpg'),
(169, 82, 87, '7513', 1, 560000, 'Hồ Xuân Hương Tiếng Vọng', 'hxh.jpg.webp'),
(170, 82, 56, '7513', 1, 90000, 'Đám trẻ ở đại dương đen', 'damtreodaiduongden.jpg'),
(171, 82, 60, '7513', 1, 110000, 'Nhà giả kim', 'nhagiakim.jpg'),
(172, 82, 88, '7513', 1, 370000, 'Chân Dung Của Dorian Gray ', 'chandung.jpg.webp'),
(173, 83, 88, '8241', 1, 370000, 'Chân Dung Của Dorian Gray ', 'chandung.jpg.webp'),
(174, 83, 90, '8241', 1, 150000, 'Chết ở Venice', 'ven.jpg.webp'),
(175, 83, 75, '8241', 1, 120000, 'Hỏa ngục', 'hoanguc.jpg'),
(176, 84, 29, '6211', 2, 15000, 'Tâm lý học về tiền', 'tamlyhocvetien.jpg'),
(177, 84, 76, '6211', 1, 265000, 'Bí quyết xây dựng cơ nghiệp bạc tỷ', 'kdoanh.jpg'),
(178, 84, 79, '6211', 1, 128000, 'Bán gì để nhanh giàu?', 'bangi.jpg'),
(179, 85, 57, '3420', 1, 110000, 'Cây cam ngọt của tôi', 'caycamngotcuatoi.jpg'),
(180, 85, 64, '3420', 1, 190000, 'Hãy chăm sóc mẹ', 'sachhanquoc.jpg'),
(181, 85, 90, '3420', 1, 150000, 'Chết ở Venice', 'ven.jpg.webp'),
(182, 86, 83, '4542', 3, 52000, 'Hoa trôi trên sông nước', 'hoatroi.jpg'),
(183, 86, 67, '4542', 3, 90000, 'Bước chậm lại giữa thế gian vội vã', 'bclgtgvv.jpg'),
(184, 87, 38, '5539', 2, 30000, 'Đấng toàn năng Nobita', 'dangtoannangnobitajpg.jpg'),
(185, 87, 45, '5539', 1, 29000, 'Doraemon Quá Khứ Và Tương Lai', 'quakhuvatuonglai.jpg'),
(186, 87, 94, '5539', 1, 56000, '7 viên ngọc rồng', 'tt7.jpg.webp'),
(187, 87, 93, '5539', 1, 65000, 'Chim sẻ tóc xù', 'cstx.png.webp'),
(188, 87, 92, '5539', 1, 70000, 'Chú chó thông minh', 'tt.jpg.webp'),
(189, 88, 48, '4162', 1, 50000, 'Trí thông minh của sự tinh tế', '4cdfbb2fd4217d7f2430.jpg'),
(190, 88, 52, '4162', 1, 110000, 'Không phải Sói nhưng cũng đừng là Cừu', 'kpsncdlc.jpg'),
(191, 88, 54, '4162', 1, 150000, 'Con chim xanh biếc bay về', 'conchimbiecbayve.jpg'),
(192, 89, 65, '8276', 1, 90000, 'Nổi buồn chiến tranh', 'noibuonchientranh.jpg'),
(193, 89, 72, '8276', 1, 170000, 'Đi vòng quanh thế giới', 'divongquanhthegioi.jpg'),
(194, 89, 84, '8276', 1, 127000, 'Như Chỉ Mới Hôm Qua', 'chinhumoihqua.jpg.webp'),
(195, 89, 86, '8276', 1, 185000, 'Bắt Trẻ Đồng Xanh (Tái Bản 2020)', 'battredongxanh.jpg.webp'),
(196, 90, 63, '2626', 1, 110000, 'Những con chim ẩn mình chờ chết', 'nhungconchimanminhchochet.jpg'),
(197, 90, 78, '2626', 1, 220000, 'Sự im lặng của bầy cừu', 'suimlangcuabaycuu.jpg'),
(198, 90, 80, '2626', 1, 265000, 'Hai Mặt Của Gia Đình', 'giadinh.jpg.webp'),
(199, 91, 61, '6074', 1, 85000, 'Chưa kịp lớn đã trưởng thành', 'chuakiplondatruonthanh.jpg'),
(200, 91, 62, '6074', 1, 50000, 'Trời quá đẹp để buồn', 'troinayquadepdebuon.jpg'),
(201, 91, 70, '6074', 1, 110000, 'Tàn ngày để lại', 'tanngayderlai.jpg'),
(202, 91, 71, '6074', 1, 150000, 'Những người hàng xóm', 'nhungnguoihangxom.jpg'),
(203, 91, 74, '6074', 1, 180000, 'Nếu ốc sên có tình yêu', 'ocsencotinhyeu.jpg'),
(204, 91, 81, '6074', 1, 45000, 'Làm mới vườn tâm', 'lammoivuontam.jpg.webp'),
(205, 92, 89, '9055', 1, 95000, 'Đồi Gió Hú', 'gio.jpg.webp'),
(206, 93, 32, '8350', 1, 150000, 'Bước chậm lại giữa thế gian vội vã 1', 'images (1).jpg'),
(207, 93, 77, '8350', 1, 157000, 'Thiên tài bên trái kẻ điên bên phải', 'thientaibentraikedienbenphai.jpg'),
(208, 94, 65, '9177', 1, 90000, 'Nổi buồn chiến tranh', 'noibuonchientranh.jpg'),
(209, 94, 84, '9177', 1, 127000, 'Như Chỉ Mới Hôm Qua', 'chinhumoihqua.jpg.webp'),
(210, 94, 86, '9177', 1, 185000, 'Bắt Trẻ Đồng Xanh (Tái Bản 2020)', 'battredongxanh.jpg.webp'),
(211, 95, 89, '5066', 1, 95000, 'Đồi Gió Hú', 'gio.jpg.webp'),
(212, 95, 58, '5066', 1, 165000, 'Muôn kiếp nhân sinh 3', 'muonkiepnhansinh3.jpg'),
(213, 95, 1, '5066', 1, 100000, 'Muôn kiếp nhân sinh 1', 'Muon_kiep_nhan_sinh.jpg'),
(214, 96, 76, '8360', 1, 265000, 'Bí quyết xây dựng cơ nghiệp bạc tỷ', 'kdoanh.jpg'),
(215, 96, 79, '8360', 1, 128000, 'Bán gì để nhanh giàu?', 'bangi.jpg'),
(216, 96, 29, '8360', 1, 15000, 'Tâm lý học về tiền', 'tamlyhocvetien.jpg'),
(217, 97, 66, '1474', 1, 180000, 'Đêm trắng', 'demtrawng.jpg'),
(218, 97, 83, '1474', 1, 52000, 'Hoa trôi trên sông nước', 'hoatroi.jpg'),
(219, 98, 53, '5747', 1, 50000, 'Thương', 'thuong.jpg'),
(220, 98, 69, '5747', 1, 150000, 'Lén nhặt chuyện đời', 'lennhat.jpg'),
(221, 99, 44, '2673', 2, 30000, 'Doraemon Plus', 'Doraemon.jpg'),
(222, 99, 45, '2673', 1, 29000, 'Doraemon Quá Khứ Và Tương Lai', 'quakhuvatuonglai.jpg'),
(223, 100, 47, '3309', 1, 15000, 'Đừng cố làm người tốt trong mắt tất cả mọi người', 'dungcolamnguoitottrongmatmoinguoi.jpg'),
(224, 100, 50, '3309', 1, 90000, 'Hành tinh của một kẻ nghĩ nhiều', 'Hanhtinhcuarmotkenghinhieu.jpg'),
(225, 100, 54, '3309', 1, 150000, 'Con chim xanh biếc bay về', 'conchimbiecbayve.jpg'),
(226, 101, 65, '7078', 1, 90000, 'Nổi buồn chiến tranh', 'noibuonchientranh.jpg'),
(227, 101, 84, '7078', 1, 127000, 'Như Chỉ Mới Hôm Qua', 'chinhumoihqua.jpg.webp'),
(228, 101, 72, '7078', 1, 170000, 'Đi vòng quanh thế giới', 'divongquanhthegioi.jpg'),
(229, 102, 55, '9075', 1, 85000, 'Một lít nước mắt', 'motlitnuocmat.jpg'),
(230, 102, 62, '9075', 1, 50000, 'Trời quá đẹp để buồn', 'troinayquadepdebuon.jpg'),
(231, 102, 74, '9075', 1, 180000, 'Nếu ốc sên có tình yêu', 'ocsencotinhyeu.jpg'),
(232, 102, 81, '9075', 1, 45000, 'Làm mới vườn tâm', 'lammoivuontam.jpg.webp'),
(233, 103, 67, '6369', 1, 90000, 'Bước chậm lại giữa thế gian vội vã', 'bclgtgvv.jpg'),
(234, 103, 82, '6369', 1, 80000, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', 'duongmaytrendathoa.jpg.webp'),
(235, 104, 32, '2304', 1, 150000, 'Bước chậm lại giữa thế gian vội vã 1', 'images (1).jpg'),
(236, 104, 77, '2304', 1, 157000, 'Thiên tài bên trái kẻ điên bên phải', 'thientaibentraikedienbenphai.jpg'),
(237, 105, 34, '21', 1, 280000, 'Phác họa chân dung kẻ phạm tội', '310654077-256-k650808.jpg'),
(238, 105, 35, '21', 1, 280000, 'Phác họa chân dung kẻ phạm tội 2', 'tam-ly-hoc-toi-pham-diep-hong-vu.jpg'),
(239, 105, 85, '21', 1, 65000, 'Thiên Thần Sa Ngã (Tái Bản)', 'ttsanga.jpg.webp'),
(240, 105, 95, '21', 1, 77000, 'Tôi tìm mình giữa những tháng năm', 'ttm.jpg.webp'),
(241, 106, 56, '9344', 1, 90000, 'Đám trẻ ở đại dương đen', 'damtreodaiduongden.jpg'),
(242, 106, 60, '9344', 1, 110000, 'Nhà giả kim', 'nhagiakim.jpg'),
(243, 106, 75, '9344', 1, 120000, 'Hỏa ngục', 'hoanguc.jpg'),
(244, 106, 90, '9344', 1, 150000, 'Chết ở Venice', 'ven.jpg.webp'),
(245, 107, 59, '8472', 1, 80000, 'Mùa hè không tên', 'muahekhongten.jpg'),
(246, 107, 68, '8472', 1, 56000, 'Mùa hè không tên 2', 'muahekhongten1.jpg'),
(247, 107, 69, '8472', 1, 150000, 'Lén nhặt chuyện đời', 'lennhat.jpg'),
(248, 107, 87, '8472', 1, 560000, 'Hồ Xuân Hương Tiếng Vọng', 'hxh.jpg.webp'),
(249, 108, 39, '5406', 1, 30000, 'Nobita và Ba chàng hiệp sĩ mộng mơ', 'bachanghiepsimongmo.jpg'),
(250, 108, 40, '5406', 1, 30000, 'Nobita và vương quốc trên mây', 'nobitavavuongquoctrenmay.jpg'),
(251, 108, 41, '5406', 1, 30000, 'Nobita Và Lịch Sử Khai Phá Vũ Trụ', 'líchukhaiphavutru.jpg'),
(252, 108, 43, '5406', 1, 30000, 'Nobita Ở Vương Quốc Chó Mèo', 'Nobitavuongquocchomeo.jpg'),
(253, 108, 45, '5406', 1, 29000, 'Doraemon Quá Khứ Và Tương Lai', 'quakhuvatuonglai.jpg'),
(254, 109, 76, '2893', 1, 265000, 'Bí quyết xây dựng cơ nghiệp bạc tỷ', 'kdoanh.jpg'),
(255, 109, 28, '2893', 1, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(256, 110, 32, '8135', 1, 150000, 'Bước chậm lại giữa thế gian vội vã 1', 'images (1).jpg'),
(257, 110, 77, '8135', 1, 157000, 'Thiên tài bên trái kẻ điên bên phải', 'thientaibentraikedienbenphai.jpg'),
(258, 111, 61, '7402', 1, 85000, 'Chưa kịp lớn đã trưởng thành', 'chuakiplondatruonthanh.jpg'),
(259, 111, 81, '7402', 1, 45000, 'Làm mới vườn tâm', 'lammoivuontam.jpg.webp'),
(260, 111, 74, '7402', 1, 180000, 'Nếu ốc sên có tình yêu', 'ocsencotinhyeu.jpg'),
(261, 111, 70, '7402', 1, 110000, 'Tàn ngày để lại', 'tanngayderlai.jpg'),
(262, 111, 71, '7402', 1, 150000, 'Những người hàng xóm', 'nhungnguoihangxom.jpg'),
(263, 111, 62, '7402', 1, 50000, 'Trời quá đẹp để buồn', 'troinayquadepdebuon.jpg'),
(264, 111, 55, '7402', 1, 85000, 'Một lít nước mắt', 'motlitnuocmat.jpg'),
(265, 112, 46, '9862', 1, 90000, 'Lý thuyết trò chơi', 'lythuyettrochoi.jpg'),
(266, 112, 47, '9862', 1, 15000, 'Đừng cố làm người tốt trong mắt tất cả mọi người', 'dungcolamnguoitottrongmatmoinguoi.jpg'),
(267, 112, 48, '9862', 1, 50000, 'Trí thông minh của sự tinh tế', '4cdfbb2fd4217d7f2430.jpg'),
(268, 112, 49, '9862', 1, 90000, 'Càng bình tĩnh càng hạnh phúc', 'vantinh.jpg'),
(269, 112, 50, '9862', 1, 90000, 'Hành tinh của một kẻ nghĩ nhiều', 'Hanhtinhcuarmotkenghinhieu.jpg'),
(270, 112, 51, '9862', 1, 110000, 'Không ai có thể làm bạn tổn thương trừ khi bạn cho phép', 'kactlbtttkbcp.jpg'),
(271, 112, 52, '9862', 1, 110000, 'Không phải Sói nhưng cũng đừng là Cừu', 'kpsncdlc.jpg'),
(272, 112, 63, '9862', 1, 110000, 'Những con chim ẩn mình chờ chết', 'nhungconchimanminhchochet.jpg'),
(273, 112, 78, '9862', 1, 220000, 'Sự im lặng của bầy cừu', 'suimlangcuabaycuu.jpg'),
(274, 112, 80, '9862', 1, 265000, 'Hai Mặt Của Gia Đình', 'giadinh.jpg.webp'),
(275, 113, 51, '5511', 1, 110000, 'Không ai có thể làm bạn tổn thương trừ khi bạn cho phép', 'kactlbtttkbcp.jpg'),
(276, 113, 39, '5511', 1, 30000, 'Nobita và Ba chàng hiệp sĩ mộng mơ', 'bachanghiepsimongmo.jpg'),
(277, 113, 41, '5511', 1, 30000, 'Nobita Và Lịch Sử Khai Phá Vũ Trụ', 'líchukhaiphavutru.jpg'),
(278, 113, 42, '5511', 1, 30000, 'Nobita Du Hành Biển Phương Nam', 'duhanhbienphuongnam.jpg'),
(279, 113, 40, '5511', 1, 30000, 'Nobita và vương quốc trên mây', 'nobitavavuongquoctrenmay.jpg'),
(280, 113, 93, '5511', 1, 65000, 'Chim sẻ tóc xù', 'cstx.png.webp'),
(281, 114, 91, '7119', 1, 230000, 'Phải trái đúng sai', 'ptds.jpg.webp'),
(282, 114, 83, '7119', 1, 52000, 'Hoa trôi trên sông nước', 'hoatroi.jpg'),
(283, 114, 66, '7119', 1, 180000, 'Đêm trắng', 'demtrawng.jpg'),
(284, 115, 91, '1319', 1, 230000, 'Phải trái đúng sai', 'ptds.jpg.webp'),
(285, 115, 89, '1319', 1, 95000, 'Đồi Gió Hú', 'gio.jpg.webp'),
(286, 115, 1, '1319', 1, 100000, 'Muôn kiếp nhân sinh 1', 'Muon_kiep_nhan_sinh.jpg'),
(287, 115, 58, '1319', 1, 165000, 'Muôn kiếp nhân sinh 3', 'muonkiepnhansinh3.jpg'),
(288, 116, 95, '3377', 1, 77000, 'Tôi tìm mình giữa những tháng năm', 'ttm.jpg.webp'),
(289, 116, 35, '3377', 1, 280000, 'Phác họa chân dung kẻ phạm tội 2', 'tam-ly-hoc-toi-pham-diep-hong-vu.jpg'),
(290, 116, 34, '3377', 1, 280000, 'Phác họa chân dung kẻ phạm tội', '310654077-256-k650808.jpg'),
(291, 117, 55, '3548', 1, 85000, 'Một lít nước mắt', 'motlitnuocmat.jpg'),
(292, 117, 71, '3548', 1, 150000, 'Những người hàng xóm', 'nhungnguoihangxom.jpg'),
(293, 117, 62, '3548', 1, 50000, 'Trời quá đẹp để buồn', 'troinayquadepdebuon.jpg'),
(294, 117, 81, '3548', 1, 45000, 'Làm mới vườn tâm', 'lammoivuontam.jpg.webp'),
(295, 118, 54, '8230', 1, 150000, 'Con chim xanh biếc bay về', 'conchimbiecbayve.jpg'),
(296, 118, 68, '8230', 1, 56000, 'Mùa hè không tên 2', 'muahekhongten1.jpg'),
(297, 118, 69, '8230', 1, 150000, 'Lén nhặt chuyện đời', 'lennhat.jpg'),
(298, 118, 87, '8230', 1, 560000, 'Hồ Xuân Hương Tiếng Vọng', 'hxh.jpg.webp'),
(299, 118, 59, '8230', 1, 80000, 'Mùa hè không tên', 'muahekhongten.jpg'),
(300, 119, 40, '7751', 1, 30000, 'Nobita và vương quốc trên mây', 'nobitavavuongquoctrenmay.jpg'),
(301, 119, 42, '7751', 1, 30000, 'Nobita Du Hành Biển Phương Nam', 'duhanhbienphuongnam.jpg'),
(302, 119, 44, '7751', 1, 30000, 'Doraemon Plus', 'Doraemon.jpg'),
(303, 119, 92, '7751', 1, 70000, 'Chú chó thông minh', 'tt.jpg.webp'),
(304, 119, 45, '7751', 1, 29000, 'Doraemon Quá Khứ Và Tương Lai', 'quakhuvatuonglai.jpg'),
(305, 120, 72, '388', 1, 170000, 'Đi vòng quanh thế giới', 'divongquanhthegioi.jpg'),
(306, 120, 84, '388', 1, 127000, 'Như Chỉ Mới Hôm Qua', 'chinhumoihqua.jpg.webp'),
(307, 120, 86, '388', 1, 185000, 'Bắt Trẻ Đồng Xanh (Tái Bản 2020)', 'battredongxanh.jpg.webp'),
(308, 121, 1, '1840', 1, 100000, 'Muôn kiếp nhân sinh 1', 'Muon_kiep_nhan_sinh.jpg'),
(309, 121, 27, '1840', 1, 58000, 'Hành trình về phương đông', 'hanhtrinhvephuongdong.jpg'),
(310, 121, 28, '1840', 1, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(311, 121, 29, '1840', 1, 15000, 'Tâm lý học về tiền', 'tamlyhocvetien.jpg'),
(312, 122, 28, '4615', 2, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(313, 122, 82, '4615', 1, 80000, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', 'duongmaytrendathoa.jpg.webp'),
(314, 122, 32, '4615', 2, 150000, 'Bước chậm lại giữa thế gian vội vã 1', 'images (1).jpg'),
(315, 123, 38, '5024', 1, 30000, 'Đấng toàn năng Nobita', 'dangtoannangnobitajpg.jpg'),
(316, 123, 34, '5024', 1, 280000, 'Phác họa chân dung kẻ phạm tội', '310654077-256-k650808.jpg'),
(317, 124, 38, '6303', 1, 30000, 'Đấng toàn năng Nobita', 'dangtoannangnobitajpg.jpg'),
(318, 124, 46, '6303', 1, 90000, 'Lý thuyết trò chơi', 'lythuyettrochoi.jpg'),
(319, 124, 48, '6303', 1, 50000, 'Trí thông minh của sự tinh tế', '4cdfbb2fd4217d7f2430.jpg'),
(320, 124, 52, '6303', 1, 110000, 'Không phải Sói nhưng cũng đừng là Cừu', 'kpsncdlc.jpg'),
(321, 125, 47, '6991', 1, 15000, 'Đừng cố làm người tốt trong mắt tất cả mọi người', 'dungcolamnguoitottrongmatmoinguoi.jpg'),
(322, 125, 28, '6991', 2, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(323, 126, 27, '9889', 1, 58000, 'Hành trình về phương đông', 'hanhtrinhvephuongdong.jpg'),
(324, 126, 1, '9889', 1, 100000, 'Muôn kiếp nhân sinh 1', 'Muon_kiep_nhan_sinh.jpg'),
(325, 127, 44, '9915', 1, 30000, 'Doraemon Plus', 'Doraemon.jpg'),
(326, 127, 42, '9915', 1, 30000, 'Nobita Du Hành Biển Phương Nam', 'duhanhbienphuongnam.jpg'),
(327, 128, 95, '3746', 1, 77000, 'Tôi tìm mình giữa những tháng năm', 'ttm.jpg.webp'),
(328, 128, 47, '3746', 1, 15000, 'Đừng cố làm người tốt trong mắt tất cả mọi người', 'dungcolamnguoitottrongmatmoinguoi.jpg'),
(329, 128, 81, '3746', 1, 45000, 'Làm mới vườn tâm', 'lammoivuontam.jpg.webp'),
(330, 129, 48, '6938', 2, 50000, 'Trí thông minh của sự tinh tế', '4cdfbb2fd4217d7f2430.jpg'),
(331, 129, 89, '6938', 1, 95000, 'Đồi Gió Hú', 'gio.jpg.webp'),
(332, 129, 53, '6938', 1, 50000, 'Thương', 'thuong.jpg'),
(333, 130, 56, '5416', 1, 90000, 'Đám trẻ ở đại dương đen', 'damtreodaiduongden.jpg'),
(334, 130, 85, '5416', 1, 65000, 'Thiên Thần Sa Ngã (Tái Bản)', 'ttsanga.jpg.webp'),
(335, 131, 77, '1304', 1, 157000, 'Thiên tài bên trái kẻ điên bên phải', 'thientaibentraikedienbenphai.jpg'),
(336, 131, 49, '1304', 1, 90000, 'Càng bình tĩnh càng hạnh phúc', 'vantinh.jpg'),
(337, 132, 29, '5715', 1, 15000, 'Tâm lý học về tiền', 'tamlyhocvetien.jpg'),
(338, 133, 28, '8615', 1, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(339, 134, 38, '9102', 1, 30000, 'Đấng toàn năng Nobita', 'dangtoannangnobitajpg.jpg'),
(340, 134, 39, '9102', 1, 30000, 'Nobita và Ba chàng hiệp sĩ mộng mơ', 'bachanghiepsimongmo.jpg'),
(341, 134, 40, '9102', 1, 30000, 'Nobita và vương quốc trên mây', 'nobitavavuongquoctrenmay.jpg'),
(342, 134, 41, '9102', 1, 30000, 'Nobita Và Lịch Sử Khai Phá Vũ Trụ', 'líchukhaiphavutru.jpg'),
(343, 134, 42, '9102', 1, 30000, 'Nobita Du Hành Biển Phương Nam', 'duhanhbienphuongnam.jpg'),
(344, 134, 43, '9102', 1, 30000, 'Nobita Ở Vương Quốc Chó Mèo', 'Nobitavuongquocchomeo.jpg'),
(345, 134, 44, '9102', 1, 30000, 'Doraemon Plus', 'Doraemon.jpg'),
(346, 134, 45, '9102', 1, 29000, 'Doraemon Quá Khứ Và Tương Lai', 'quakhuvatuonglai.jpg'),
(347, 134, 92, '9102', 1, 70000, 'Chú chó thông minh', 'tt.jpg.webp'),
(348, 134, 93, '9102', 2, 65000, 'Chim sẻ tóc xù', 'cstx.png.webp'),
(349, 135, 57, '8404', 1, 110000, 'Cây cam ngọt của tôi', 'caycamngotcuatoi.jpg'),
(350, 135, 60, '8404', 1, 110000, 'Nhà giả kim', 'nhagiakim.jpg'),
(351, 135, 90, '8404', 1, 150000, 'Chết ở Venice', 'ven.jpg.webp'),
(352, 135, 88, '8404', 1, 370000, 'Chân Dung Của Dorian Gray ', 'chandung.jpg.webp'),
(353, 135, 66, '8404', 1, 180000, 'Đêm trắng', 'demtrawng.jpg'),
(354, 136, 28, '9037', 1, 120000, 'Cách nền kinh tế vận hành', 'sach-cach-nen-kinh-te-van-hanh.jpg'),
(355, 137, 91, '4283', 1, 230000, 'Phải trái đúng sai', 'ptds.jpg.webp'),
(356, 137, 85, '4283', 1, 65000, 'Thiên Thần Sa Ngã (Tái Bản)', 'ttsanga.jpg.webp'),
(357, 137, 84, '4283', 1, 127000, 'Như Chỉ Mới Hôm Qua', 'chinhumoihqua.jpg.webp'),
(358, 137, 82, '4283', 1, 80000, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', 'duongmaytrendathoa.jpg.webp'),
(359, 137, 49, '4283', 1, 90000, 'Càng bình tĩnh càng hạnh phúc', 'vantinh.jpg'),
(360, 137, 71, '4283', 1, 150000, 'Những người hàng xóm', 'nhungnguoihangxom.jpg'),
(361, 137, 89, '4283', 1, 95000, 'Đồi Gió Hú', 'gio.jpg.webp'),
(362, 137, 1, '4283', 1, 100000, 'Muôn kiếp nhân sinh 1', 'Muon_kiep_nhan_sinh.jpg'),
(363, 137, 87, '4283', 1, 560000, 'Hồ Xuân Hương Tiếng Vọng', 'hxh.jpg.webp'),
(364, 137, 88, '4283', 1, 370000, 'Chân Dung Của Dorian Gray ', 'chandung.jpg.webp'),
(365, 137, 56, '4283', 1, 90000, 'Đám trẻ ở đại dương đen', 'damtreodaiduongden.jpg'),
(366, 137, 90, '4283', 1, 150000, 'Chết ở Venice', 'ven.jpg.webp'),
(367, 138, 88, '1351', 1, 370000, 'Chân Dung Của Dorian Gray ', 'chandung.jpg.webp'),
(368, 138, 87, '1351', 1, 560000, 'Hồ Xuân Hương Tiếng Vọng', 'hxh.jpg.webp'),
(369, 138, 89, '1351', 1, 95000, 'Đồi Gió Hú', 'gio.jpg.webp'),
(370, 138, 49, '1351', 1, 90000, 'Càng bình tĩnh càng hạnh phúc', 'vantinh.jpg'),
(371, 138, 82, '1351', 1, 80000, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', 'duongmaytrendathoa.jpg.webp'),
(372, 139, 1, '8374', 1, 100000, 'Muôn kiếp nhân sinh 1', 'Muon_kiep_nhan_sinh.jpg'),
(373, 139, 40, '8374', 1, 30000, 'Nobita và vương quốc trên mây', 'nobitavavuongquoctrenmay.jpg'),
(374, 139, 65, '8374', 1, 90000, 'Nổi buồn chiến tranh', 'noibuonchientranh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(10) NOT NULL,
  `makhachhang` int(10) DEFAULT NULL,
  `taikhoan` varchar(255) DEFAULT NULL,
  `matkhau` varchar(255) NOT NULL,
  `vaitro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `makhachhang`, `taikhoan`, `matkhau`, `vaitro`) VALUES
(1, 2, 'admin@gmail.com', '123456', 1),
(2, 1, 'nthnguyen@gmail.com', '1234567', 2);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `id` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `number_vote` int(11) NOT NULL DEFAULT 5,
  `ngaythem` date NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`id`, `makhachhang`, `masp`, `number_vote`, `ngaythem`, `noidung`) VALUES
(9, 20, 27, 3, '2023-11-20', 'rất hay'),
(38, 20, 27, 5, '2023-11-24', 'abc'),
(39, 20, 1, 2, '2023-11-25', 'ổn'),
(40, 20, 29, 1, '2023-11-25', 'tạm'),
(41, 20, 1, 4, '2023-11-25', 'hay'),
(42, 20, 29, 5, '2023-11-25', 'rất hay'),
(43, 20, 27, 1, '2023-11-25', 'tệ'),
(44, 20, 27, 1, '2023-11-25', '1'),
(45, 20, 27, 2, '2023-11-25', '1'),
(46, 20, 29, 5, '2023-11-25', 'hay'),
(47, 20, 28, 1, '2023-11-25', 'chán'),
(48, 20, 27, 1, '2023-11-27', '1'),
(49, 1, 47, 5, '2023-11-28', 'Sách rất hay'),
(50, 1, 43, 5, '2023-11-28', 'Cuốn lắm luôn'),
(51, 21, 41, 5, '2023-11-29', 'hay'),
(52, 21, 38, 4, '2023-11-29', 'ok lắm'),
(53, 21, 38, 4, '2023-11-29', 'ok lắm'),
(54, 21, 38, 4, '2023-11-29', 'ok lắm'),
(55, 21, 43, 5, '2023-12-01', 'Hay lắm nha!'),
(56, 22, 82, 4, '2023-12-01', 'Sách hay'),
(57, 22, 82, 5, '2023-12-01', 'Tuyệt'),
(58, 22, 51, 4, '2023-12-01', 'hay'),
(59, 22, 51, 3, '2023-12-01', 'cũng được'),
(60, 22, 32, 4, '2023-12-01', 'nội dung hay '),
(61, 22, 32, 5, '2023-12-01', 'bìa đẹp, ý nghĩa'),
(62, 22, 46, 3, '2023-12-01', 'tạm được'),
(63, 22, 46, 2, '2023-12-01', 'xem kĩ thì không hay lắm'),
(64, 22, 34, 5, '2023-12-01', 'quá hay luôn á'),
(65, 22, 34, 4, '2023-12-01', 'nên mua'),
(66, 22, 39, 5, '2023-12-01', 'Truyện này thì khỏi phải bàn rồi'),
(67, 22, 39, 5, '2023-12-01', 'Doraemon thông minh dễ thương, nên mua'),
(68, 22, 77, 4, '2023-12-01', 'đọc hách não lắm nha'),
(69, 23, 35, 4, '2023-12-01', 'đọc cuốn dữ luôn'),
(70, 23, 85, 3, '2023-12-01', 'bánh bèo quá trời'),
(71, 23, 58, 5, '2023-12-01', 'nên đọc cả bộ nha mọi người'),
(72, 23, 51, 4, '2023-12-01', 'sách hay'),
(73, 23, 49, 4, '2023-12-01', 'cuốn này cực hay '),
(74, 23, 50, 5, '2023-12-01', 'đọc thử đi mọi người'),
(75, 23, 68, 4, '2023-12-01', 'đọc mà nhớ lại tuổi thơ quá'),
(76, 23, 55, 3, '2023-12-01', 'cũng được mà buồn quá'),
(77, 24, 95, 4, '2023-12-01', 'sách đẹp, hay'),
(78, 24, 44, 4, '2023-12-01', 'hay lắm nha'),
(79, 24, 42, 5, '2023-12-01', 'tác phẩm vượt thời đại'),
(80, 24, 40, 4, '2023-12-01', 'hay'),
(81, 24, 66, 3, '2023-12-01', 'không hợp với mình lắm'),
(82, 24, 83, 4, '2023-12-01', 'hay sách đẹp'),
(83, 24, 91, 5, '2023-12-01', 'cuốn này mình rất ưng'),
(84, 24, 60, 4, '2023-12-01', 'đọc cuốn'),
(85, 24, 56, 5, '2023-12-01', 'đọc mô tả thấy hay nên mua thử '),
(86, 24, 88, 4, '2023-12-01', 'hay lắm luôn'),
(87, 24, 75, 5, '2023-12-01', 'hay á mọi người'),
(88, 25, 29, 4, '2023-12-01', 'sách hay'),
(89, 25, 76, 4, '2023-12-01', 'được'),
(90, 25, 79, 5, '2023-12-01', 'tốt'),
(91, 25, 57, 4, '2023-12-01', '123456'),
(92, 25, 64, 3, '2023-12-01', 'hơi sầu nha'),
(93, 25, 90, 4, '2023-12-01', 'đẹp và rất hay'),
(94, 25, 83, 4, '2023-12-01', 'tôi thấy hay'),
(95, 25, 67, 3, '2023-12-01', 'cũng tạm được'),
(96, 25, 92, 5, '2023-12-01', 'hay lắm luôn'),
(97, 25, 93, 4, '2023-12-01', 'cưng quá à'),
(98, 25, 45, 4, '2023-12-01', 'truyện hay'),
(99, 24, 53, 4, '2023-12-01', 'hay nhe'),
(100, 24, 59, 5, '2023-12-01', 'nên mua'),
(101, 24, 69, 3, '2023-12-01', 'tạm được'),
(102, 24, 87, 4, '2023-12-01', 'hay á'),
(103, 25, 94, 4, '2023-12-01', 'hay từ truyện tới phim luôn'),
(104, 26, 48, 4, '2023-12-01', 'hay nhe'),
(105, 26, 52, 5, '2023-12-01', 'đọc là cuốn'),
(106, 26, 54, 3, '2023-12-01', 'không ưng lắm'),
(107, 26, 65, 4, '2023-12-01', 'thích'),
(108, 26, 72, 5, '2023-12-01', 'nên mua'),
(109, 26, 84, 3, '2023-12-01', 'được'),
(110, 26, 86, 4, '2023-12-01', 'dịu cả màu sắc lẫn nội dung'),
(111, 26, 63, 4, '2023-12-01', 'nên đọc một lần'),
(112, 26, 78, 5, '2023-12-01', 'hơi sợ nhưng mà hay'),
(113, 26, 80, 4, '2023-12-01', 'hay hay'),
(114, 26, 61, 3, '2023-12-01', 'không hợp với mình lắm'),
(115, 26, 62, 4, '2023-12-01', 'hay'),
(116, 26, 70, 5, '2023-12-01', 'tuyệt vời'),
(117, 26, 71, 4, '2023-12-01', 'được nhe'),
(118, 26, 74, 3, '2023-12-01', 'ổn'),
(119, 26, 81, 3, '2023-12-01', 'đọc cũng được '),
(120, 26, 89, 5, '2023-12-01', 'cuốn này hay nè mn mua đi'),
(121, 27, 77, 4, '2023-12-01', 'ê hay á'),
(122, 27, 32, 5, '2023-12-01', 'sách hay'),
(123, 27, 65, 5, '2023-12-01', 'rất hay luôn'),
(124, 27, 84, 4, '2023-12-01', 'bìa đẹp quá à'),
(125, 27, 86, 4, '2023-12-01', 'hay'),
(126, 27, 1, 5, '2023-12-01', 'hay lắm'),
(127, 27, 58, 4, '2023-12-01', 'hay, đọc cả bộ tuyệt lắm'),
(128, 27, 89, 4, '2023-12-01', 'hay quá trời'),
(129, 27, 29, 4, '2023-12-01', 'hay'),
(130, 27, 76, 5, '2023-12-01', 'đọc cuốn'),
(131, 27, 79, 4, '2023-12-01', 'nên đọc'),
(132, 27, 83, 5, '2023-12-01', 'rất hay'),
(133, 27, 66, 3, '2023-12-01', 'tạm thôi'),
(134, 28, 53, 5, '2023-12-01', 'mình thấy hay '),
(135, 28, 69, 4, '2023-12-01', 'được'),
(136, 28, 44, 5, '2023-12-01', 'hay'),
(137, 28, 45, 5, '2023-12-01', 'hay lắm luôn'),
(138, 28, 47, 5, '2023-12-01', 'hay mà rẻ nữa'),
(139, 28, 54, 4, '2023-12-01', 'cũng hay á'),
(140, 28, 50, 4, '2023-12-01', 'ổn'),
(141, 28, 65, 4, '2023-12-01', 'hay'),
(142, 28, 72, 5, '2023-12-01', 'hay quá'),
(143, 28, 84, 5, '2023-12-01', 'đẹp hay'),
(144, 28, 55, 4, '2023-12-01', 'hay'),
(145, 28, 74, 4, '2023-12-01', 'thú vị nha'),
(146, 28, 62, 4, '2023-12-01', 'hay mà buồn quá'),
(147, 28, 81, 3, '2023-12-01', 'được'),
(148, 28, 67, 4, '2023-12-01', 'hay'),
(149, 28, 82, 4, '2023-12-01', 'tốt'),
(150, 29, 32, 4, '2023-12-01', 'hay'),
(151, 29, 77, 5, '2023-12-01', 'tuyệt'),
(152, 29, 34, 4, '2023-12-01', 'hay'),
(153, 29, 35, 4, '2023-12-01', 'hay quá'),
(154, 29, 85, 4, '2023-12-01', 'hay'),
(155, 29, 95, 4, '2023-12-01', 'hay'),
(156, 29, 56, 4, '2023-12-01', 'hay'),
(157, 29, 60, 4, '2023-12-01', 'thấy nhiều người nói hay nên mua thử'),
(158, 29, 75, 4, '2023-12-01', 'hay'),
(159, 29, 90, 4, '2023-12-01', 'hay'),
(160, 29, 59, 4, '2023-12-01', 'hay'),
(161, 29, 68, 4, '2023-12-01', 'hay'),
(162, 29, 69, 4, '2023-12-01', 'hay'),
(163, 29, 87, 3, '2023-12-01', 'cũng được'),
(164, 29, 39, 4, '2023-12-01', 'hay'),
(165, 29, 40, 5, '2023-12-01', 'xuất sắc'),
(166, 29, 43, 5, '2023-12-01', 'hay'),
(167, 29, 45, 4, '2023-12-01', 'tuyệt'),
(168, 29, 28, 4, '2023-12-01', 'hay á mọi người'),
(169, 29, 76, 4, '2023-12-01', 'hay'),
(170, 30, 32, 4, '2023-12-01', 'hay'),
(171, 30, 77, 4, '2023-12-01', 'hay'),
(172, 30, 61, 4, '2023-12-01', 'hay nhe'),
(173, 30, 81, 4, '2023-12-01', 'hay'),
(174, 30, 74, 5, '2023-12-01', 'hay'),
(175, 30, 71, 5, '2023-12-01', 'hay'),
(176, 30, 70, 4, '2023-12-01', 'hay'),
(177, 30, 62, 5, '2023-12-01', 'hay'),
(178, 30, 55, 4, '2023-12-01', 'được'),
(179, 30, 49, 5, '2023-12-01', 'hay quá'),
(180, 30, 48, 4, '2023-12-01', 'hay'),
(181, 30, 50, 4, '2023-12-01', 'hay'),
(182, 30, 51, 4, '2023-12-01', 'hay'),
(183, 30, 52, 4, '2023-12-01', 'hay'),
(184, 30, 47, 4, '2023-12-01', 'hay quá'),
(185, 30, 46, 3, '2023-12-01', 'hay'),
(186, 30, 63, 4, '2023-12-01', 'hay'),
(187, 30, 78, 4, '2023-12-01', 'hay'),
(188, 30, 80, 4, '2023-12-01', 'hay quá'),
(189, 30, 39, 4, '2023-12-01', 'hay'),
(190, 30, 40, 4, '2023-12-01', 'hay'),
(191, 30, 41, 4, '2023-12-01', 'hay quá'),
(192, 30, 42, 5, '2023-12-01', 'mới mẻ'),
(193, 30, 93, 4, '2023-12-01', 'dễ thương nha'),
(194, 30, 66, 4, '2023-12-01', 'hay mà ta'),
(195, 30, 83, 4, '2023-12-01', 'ưng quá nha'),
(196, 30, 91, 4, '2023-12-01', 'cuốn này hay'),
(197, 30, 89, 4, '2023-12-01', 'hay'),
(198, 30, 1, 5, '2023-12-01', 'tuyệt'),
(199, 30, 58, 4, '2023-12-01', 'hay quá'),
(200, 31, 95, 4, '2023-12-01', 'hay quá'),
(201, 31, 35, 4, '2023-12-01', 'gây cấn nha'),
(202, 31, 34, 4, '2023-12-01', 'sợ mà vẫn đọc haha'),
(203, 31, 55, 4, '2023-12-01', 'hay'),
(204, 31, 71, 4, '2023-12-01', 'hay nha'),
(205, 31, 62, 5, '2023-12-01', 'tuyệt '),
(206, 31, 81, 4, '2023-12-01', 'tuyệt'),
(207, 31, 59, 4, '2023-12-01', 'được'),
(208, 31, 87, 4, '2023-12-01', 'hay á'),
(209, 31, 69, 5, '2023-12-01', 'hay'),
(210, 31, 54, 4, '2023-12-01', 'hay nha'),
(211, 31, 40, 4, '2023-12-01', 'hay quá'),
(212, 31, 42, 4, '2023-12-01', 'thích'),
(213, 31, 44, 4, '2023-12-01', 'được'),
(214, 31, 92, 4, '2023-12-01', 'hay'),
(215, 31, 72, 4, '2023-12-01', 'hay'),
(216, 31, 84, 5, '2023-12-01', 'hay quá'),
(217, 31, 86, 5, '2023-12-01', 'hay lắm'),
(218, 31, 1, 4, '2023-12-01', 'hay'),
(219, 31, 27, 4, '2023-12-01', 'hay mà'),
(220, 31, 28, 4, '2023-12-01', 'hay'),
(221, 31, 29, 5, '2023-12-01', 'hay, giá phải chăng'),
(222, 25, 85, 4, '2023-12-01', 'hay');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(10) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `ngaytao` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `ngaytao`) VALUES
(1, 'Thiên văn học', '2023-12-01 10:37:04'),
(9, 'Trinh thám', '2023-11-20 09:22:17'),
(11, 'Kinh tế', '2023-11-20 09:23:21'),
(12, 'Truyện tranh', '2023-11-27 17:18:57'),
(14, 'Lịch sử', '2023-11-20 09:26:55'),
(15, 'Triết học', '2023-11-20 09:27:01'),
(16, 'Tâm lý học', '2023-11-23 15:26:10'),
(17, 'Sinh học', '2023-11-20 09:27:25'),
(19, 'Tiểu Thuyết', '2023-11-20 09:28:16'),
(20, 'Tôn giáo & Tâm linh', '2023-11-20 10:00:11'),
(21, 'Văn học Việt Nam', '2023-11-23 15:07:58'),
(22, '  Văn học nước ngoài', '2023-11-23 15:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `ten` varchar(255) DEFAULT NULL,
  `sodienthoai` varchar(11) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `tongtien` int(10) NOT NULL,
  `ngaydathang` date NOT NULL,
  `ngaynhan` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `code_donhang` varchar(255) NOT NULL,
  `hinhthucthanhtoan` varchar(255) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`id`, `makhachhang`, `ten`, `sodienthoai`, `diachi`, `tongtien`, `ngaydathang`, `ngaynhan`, `code_donhang`, `hinhthucthanhtoan`, `trangthai`) VALUES
(72, 21, 'Như Hoa', '23456781', 'Cà Mau', 300000, '2023-11-29', '2023-12-01 08:40:20', '6586', 'VNPay', 3),
(73, 21, 'Như Hoa', '0234567818', 'Cà Mau', 565000, '2023-11-30', '2023-12-01 08:40:20', '4503', 'Tien mat', 3),
(74, 22, 'Nguyễn My', '123456789', 'Bạc Liêu', 1280000, '2023-12-01', '2023-12-01 08:40:20', '6106', 'Tien mat', 3),
(75, 22, 'Nguyễn My', '123456789', 'Bạc Liêu', 270000, '2023-12-01', '2023-12-01 08:40:20', '964', 'Tien mat', 3),
(76, 22, 'Nguyễn My', '123456789', 'Bạc Liêu', 314000, '2023-12-01', '2023-12-01 08:40:20', '8531', 'Tien mat', 3),
(77, 23, 'Thùy Ngô', '123456789', 'Vĩnh Long', 1465000, '2023-12-01', '2023-12-01 08:40:20', '8609', 'Tien mat', 3),
(78, 23, 'Thùy Ngô', '123456789', 'Vĩnh Long', 596000, '2023-12-01', '2023-12-01 08:39:28', '2287', 'Tien mat', 3),
(79, 23, 'Thùy Ngô', '123456789', 'Vĩnh Long', 170000, '2023-12-01', '2023-12-01 08:39:28', '3060', 'Tien mat', 3),
(80, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 557000, '2023-12-01', '2023-12-01 08:39:28', '5225', 'Tien mat', 3),
(81, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 462000, '2023-12-01', '2023-12-01 08:39:28', '4024', 'Tien mat', 3),
(82, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 1560000, '2023-12-01', '2023-12-01 08:39:28', '7513', 'Tien mat', 3),
(83, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 640000, '2023-12-01', '2023-12-01 08:39:28', '8241', 'Tien mat', 3),
(84, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 423000, '2023-12-01', '2023-12-01 08:39:28', '6211', 'Tien mat', 3),
(85, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 450000, '2023-12-01', '2023-12-01 08:39:28', '3420', 'Tien mat', 3),
(86, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 426000, '2023-12-01', '2023-12-01 08:39:28', '4542', 'Tien mat', 3),
(87, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 280000, '2023-12-01', '2023-12-01 08:39:28', '5539', 'Tien mat', 3),
(88, 26, 'Thành Nghĩa', '245682346', 'Bến Tre', 310000, '2023-12-01', '2023-12-01 09:32:43', '4162', 'Tien mat', 3),
(89, 26, 'Thành Nghĩa', '245682346', 'Bến Tre', 572000, '2023-12-01', '2023-12-01 09:32:43', '8276', 'Tien mat', 3),
(90, 26, 'Thành Nghĩa', '245682346', 'Bến Tre', 595000, '2023-12-01', '2023-12-01 09:32:29', '2626', 'Tien mat', 3),
(91, 26, 'Thành Nghĩa', '245682346', 'Bến Tre', 620000, '2023-12-01', '2023-12-01 09:32:29', '6074', 'Tien mat', 3),
(92, 26, 'Thành Nghĩa', '245682346', 'Bến Tre', 95000, '2023-12-01', '2023-12-01 09:32:29', '9055', 'Tien mat', 3),
(93, 27, 'Trung Hoàng', '907256431', 'Trà Vinh', 307000, '2023-12-01', '2023-12-01 09:32:29', '8350', 'Tien mat', 3),
(94, 27, 'Trung Hoàng', '907256431', 'Trà Vinh', 402000, '2023-12-01', '2023-12-01 09:32:28', '9177', 'Tien mat', 3),
(95, 27, 'Trung Hoàng', '907256431', 'Trà Vinh', 360000, '2023-12-01', '2023-12-01 09:32:28', '5066', 'Tien mat', 3),
(96, 27, 'Trung Hoàng', '907256431', 'Trà Vinh', 408000, '2023-12-01', '2023-12-01 09:32:28', '8360', 'Tien mat', 3),
(97, 27, 'Trung Hoàng', '907256431', 'Trà Vinh', 232000, '2023-12-01', '2023-12-01 09:32:28', '1474', 'Tien mat', 3),
(98, 28, 'Văn Tình', '725631489', 'Hậu Giang', 200000, '2023-12-01', '2023-12-01 09:32:28', '5747', 'Tien mat', 3),
(99, 28, 'Văn Tình', '725631489', 'Hậu Giang', 89000, '2023-12-01', '2023-12-01 09:32:28', '2673', 'Tien mat', 3),
(100, 28, 'Văn Tình', '725631489', 'Hậu Giang', 255000, '2023-12-01', '2023-12-01 09:31:34', '3309', 'Tien mat', 3),
(101, 28, 'Văn Tình', '725631489', 'Hậu Giang', 387000, '2023-12-01', '2023-12-01 09:31:34', '7078', 'Tien mat', 3),
(102, 28, 'Văn Tình', '725631489', 'Hậu Giang', 360000, '2023-12-01', '2023-12-01 09:31:34', '9075', 'Tien mat', 3),
(103, 28, 'Văn Tình', '725631489', 'Hậu Giang', 170000, '2023-12-01', '2023-12-01 09:31:34', '6369', 'Tien mat', 3),
(104, 29, 'Lê Trí Quang', '905236451', 'An Giang', 307000, '2023-12-01', '2023-12-01 09:31:34', '2304', 'Tien mat', 3),
(105, 29, 'Lê Trí Quang', '905236451', 'An Giang', 702000, '2023-12-01', '2023-12-01 09:31:34', '21', 'Tien mat', 3),
(106, 29, 'Lê Trí Quang', '905236451', 'An Giang', 470000, '2023-12-01', '2023-12-01 09:31:34', '9344', 'Tien mat', 3),
(107, 29, 'Lê Trí Quang', '905236451', 'An Giang', 846000, '2023-12-01', '2023-12-01 09:31:34', '8472', 'Tien mat', 3),
(108, 29, 'Lê Trí Quang', '905236451', 'An Giang', 149000, '2023-12-01', '2023-12-01 09:31:34', '5406', 'Tien mat', 3),
(109, 29, 'Lê Trí Quang', '905236451', 'An Giang', 385000, '2023-12-01', '2023-12-01 09:31:34', '2893', 'Tien mat', 3),
(110, 30, 'Trọng Lê', '75631489', 'Tiền Giang', 307000, '2023-12-01', '2023-12-01 10:00:56', '8135', 'Tien mat', 3),
(111, 30, 'Trọng Lê', '75631489', 'Tiền Giang', 705000, '2023-12-01', '2023-12-01 10:00:56', '7402', 'Tien mat', 3),
(112, 30, 'Trọng Lê', '75631489', 'Tiền Giang', 1150000, '2023-12-01', '2023-12-01 10:00:43', '9862', 'Tien mat', 3),
(113, 30, 'Trọng Lê', '75631489', 'Tiền Giang', 295000, '2023-12-01', '2023-12-01 10:00:43', '5511', 'Tien mat', 3),
(114, 30, 'Trọng Lê', '75631489', 'Tiền Giang', 462000, '2023-12-01', '2023-12-01 10:00:43', '7119', 'Tien mat', 3),
(115, 30, 'Trọng Lê', '75631489', 'Tiền Giang', 590000, '2023-12-01', '2023-12-01 10:00:43', '1319', 'Tien mat', 3),
(116, 31, 'Nguyễn Thúy', '254697264', 'Đồng Nai', 637000, '2023-12-01', '2023-12-01 10:00:43', '3377', 'Tien mat', 3),
(117, 31, 'Nguyễn Thúy', '254697264', 'Đồng Nai', 330000, '2023-12-01', '2023-12-01 10:00:43', '3548', 'Tien mat', 3),
(118, 31, 'Nguyễn Thúy', '254697264', 'Đồng Nai', 996000, '2023-12-01', '2023-12-01 10:00:43', '8230', 'Tien mat', 3),
(119, 31, 'Nguyễn Thúy', '254697264', 'Đồng Nai', 189000, '2023-12-01', '2023-12-01 10:00:43', '7751', 'Tien mat', 3),
(120, 31, 'Nguyễn Thúy', '254697264', 'Đồng Nai', 482000, '2023-12-01', '2023-12-01 10:00:43', '388', 'Tien mat', 3),
(121, 31, 'Nguyễn Thúy', '254697264', 'Đồng Nai', 293000, '2023-12-01', '2023-12-01 10:00:43', '1840', 'Tien mat', 3),
(122, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 620000, '2023-12-01', '2023-12-01 10:58:57', '4615', 'Tien mat', 3),
(123, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 310000, '2023-12-01', '2023-12-01 10:49:30', '5024', 'VNPay', 3),
(124, 22, 'Nguyễn My', '123456789', 'Bạc Liêu', 280000, '2023-12-01', '2023-12-01 11:11:06', '6303', 'Tien mat', 3),
(125, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 255000, '2023-12-01', '2023-12-01 14:45:11', '6991', 'VNPay', 3),
(126, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 158000, '2023-12-01', '2023-12-01 14:40:34', '9889', 'VNPay', 3),
(127, 35, 'Trần Thị', '725631489', 'Bạc Liêu', 60000, '2023-12-01', '2023-12-01 15:21:46', '9915', 'Tien mat', 3),
(128, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 137000, '2023-12-01', '2023-12-01 15:34:52', '3746', 'Tien mat', 0),
(129, 24, 'Ngọc Ánh', '123456789', 'Cần Thơ', 245000, '2023-12-01', '2023-12-01 15:35:36', '6938', 'VNPay', 0),
(130, 25, 'Trần Hoa', '354864125', 'Nha Trang', 155000, '2023-12-01', '2023-12-01 15:43:32', '5416', 'Tien mat', 0),
(131, 25, 'Trần Thiếu Hoa', '354864125', 'Nha Trang', 247000, '2023-12-01', '2023-12-01 15:44:00', '1304', 'VNPay', 0),
(132, 21, 'Như Hoa', '23456781', 'Cà Mau', 15000, '2023-12-02', '2023-12-02 14:59:29', '5715', 'VNPay', 0),
(133, 21, 'Như Hoa', '23456781', 'Cà Mau', 120000, '2023-12-02', '2023-12-02 15:03:09', '8615', 'VNPay', 0),
(134, 41, 'Thế Phong', '956987123', 'Cần Thơ', 439000, '2023-12-08', '2023-12-08 05:46:33', '9102', 'Tien mat', 0),
(135, 42, 'Ngọc Hà', '765258999', 'Nha Trang', 920000, '2023-12-08', '2023-12-08 05:54:06', '8404', 'Tien mat', 0),
(136, 20, 'abc', '123', 'ct', 120000, '2023-12-09', '2023-12-09 05:03:08', '9037', 'Tien mat', 0),
(137, 20, 'abc', '123', 'ct', 2107000, '2023-12-09', '2023-12-09 05:05:53', '4283', 'Tien mat', 0),
(138, 20, 'abc', '123', 'ct', 1195000, '2023-12-09', '2023-12-09 05:08:16', '1351', 'Tien mat', 0),
(139, 21, 'Như Hoa', '23456781', 'Cà Mau', 220000, '2023-12-09', '2023-12-09 07:12:08', '8374', 'Tien mat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE `giohang` (
  `id` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `masp` int(10) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `soluong` int(10) NOT NULL,
  `tonggia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nxb`
--

CREATE TABLE `nxb` (
  `id` int(10) NOT NULL,
  `tenNXB` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nxb`
--

INSERT INTO `nxb` (`id`, `tenNXB`, `mota`) VALUES
(1, 'Vibooks', 'Vibooks tự hào là một thương hiệu nột bật góp phần vào sự phát triển của thị trường xuất bản, được khách hàng đề cập đến với chất lượng và danh tiếng tốt.'),
(2, 'NXB Trẻ', 'Nhà Xuất Bản Trẻ là bản đồ các sách có sách mới phát hành, các sách bán chạy, các sách mới mới và các sách mới mới mới'),
(3, 'NXB Hội Nhà Văn', 'NXB Hội Nhà văn đã không ngừng cống hiến tài năng, công sức để xây dựng nên một địa chỉ xuất bản uy tín trên cả nước'),
(5, 'NXB Thế giới', 'NXB Thế Giới hàng ngàn tựa sách cùng với mức giá tiết kiệm và ưu đãi nhất'),
(6, 'NXB Lao động', 'NXB lao động là nhà xuất bản luôn được Bộ Tài chính đánh giá là đơn vị chấp hành tốt các quy định của Nhà nước'),
(7, 'NXB Kim Đồng', 'Nhà xuất bản Kim Đồng là Nhà xuất bản tổng hợp có chức năng xuất bản sách và văn hóa phẩm phục vụ thiếu nhi và các bậc phụ huynh.'),
(8, 'NXB Đại Học Quốc Gia Hà Nội', 'Nhà xuất bản Đại học Quốc gia Hà Nội có chức năng tổ chức xuất bản, phát hành sách giáo trình, sách chuyên khảo, sách tham khảo, các tài liệu có giá trị khoa học.'),
(9, 'Nhà Xuất Bản Tri Thức', 'Nhà xuất bản Tri thức là nhà xuất bản Việt Nam thành lập vào tháng 9 năm 2005 trực thuộc Liên hiệp các Hội Khoa học và Kỹ thuật Việt Nam (VUSTA).'),
(10, 'NXB Tổng hợp TP.HCM', 'NXB Tổng hợp TP.HCM đã cho ra đời gần 24.000 bản sách với gần 67 triệu bản in thuộc nhiều lĩnh vực: chính trị, lịch sử, văn hóa, xã hội, văn nghệ, công trình nghiên cứu khoa học, sách thiếu nhi…'),
(11, 'NXB Thanh Niên', 'NXB Thanh Niên là NXB tổng hợp, hoạt động trên lĩnh vực VHTT có chức năng xuất bản các ấn phẩm.'),
(12, 'Nhà Xuất Bản Dân Trí', ''),
(13, 'Nhà Xuất Bản Đồng Nai', ''),
(14, 'Nhà Xuất Bản Phụ nữ Việt Nam', 'Trí Thông Minh Của Sự Tinh Tế. Tác giả: Tô Mạn. Vì sao có những cô gái cuộc sống lúc nào cũng gặp may mắn, đi làm thì dễ dàng thăng tiến, về nhà thì được chồng yêu thương, gia đình thuận hoà chẳng cãi vã bao giờ? Tất cả là nhờ “Trí thông minh của sự tinh ');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(10) NOT NULL,
  `matacgia` int(10) NOT NULL,
  `maNXB` int(10) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` int(10) NOT NULL,
  `hinhanh` varchar(50) NOT NULL,
  `madanhmuc` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `matacgia`, `maNXB`, `tensp`, `gia`, `hinhanh`, `madanhmuc`, `soluong`, `mota`, `created_at`) VALUES
(1, 3, 10, 'Muôn kiếp nhân sinh 1', 100000, 'Muon_kiep_nhan_sinh.jpg', 20, 100, '“Muôn kiếp nhân sinh” mang lại cho bạn đọc kho kiến thức đồ sộ và mới mẻ, những câu chuyện kỳ lạ, những kiến giải uyên bác và tiên đoán bất ngờ về hiện tại và tương lai của con người và thế giới. Thông điệp quan trọng nhất của tác phẩm là nguồn gốc và các', '2023-11-20 10:20:38'),
(27, 3, 10, 'Hành trình về phương đông', 58000, 'hanhtrinhvephuongdong.jpg', 20, 15, 'Hành trình về phương đông', '2023-11-20 10:23:59'),
(28, 4, 9, 'Cách nền kinh tế vận hành', 120000, 'sach-cach-nen-kinh-te-van-hanh.jpg', 11, 20, 'Cuốn sách Cách Nền Kinh Tế Vận Hành được xuất bản lần đầu tiên vào năm 2010. Thời điểm này cũng là lúc thế giới đang phải vật lộn với cuộc suy thoái tồi tệ nhất kể từ những năm 1930.', '2023-11-20 10:30:41'),
(29, 5, 10, 'Tâm lý học về tiền', 15000, 'tamlyhocvetien.jpg', 11, 70, 'Tâm lý học về tiền', '2023-11-20 10:34:31'),
(32, 3, 2, 'Bước chậm lại giữa thế gian vội vã 1', 150000, 'images (1).jpg', 1, 10, 'đã sửa', '2023-11-27 17:41:18'),
(34, 9, 10, 'Phác họa chân dung kẻ phạm tội', 280000, '310654077-256-k650808.jpg', 9, 10, 'Phác họa chân dung kẻ phạm tội', '2023-11-20 11:37:34'),
(35, 9, 10, 'Phác họa chân dung kẻ phạm tội 2', 280000, 'tam-ly-hoc-toi-pham-diep-hong-vu.jpg', 9, 10, 'Tập 2', '2023-11-20 11:39:13'),
(38, 10, 7, 'Đấng toàn năng Nobita', 30000, 'dangtoannangnobitajpg.jpg', 12, 100, 'Doraemon Truyện Dài - Tập 15 - Đấng Toàn Năng Nobita (Tái Bản 2023)', '2023-11-27 17:56:21'),
(39, 10, 7, 'Nobita và Ba chàng hiệp sĩ mộng mơ', 30000, 'bachanghiepsimongmo.jpg', 12, 100, 'Doraemon Truyện Dài - Tập 14 - Nobita Và Ba Chàng Hiệp Sĩ Mộng Mơ (Tái Bản 2023)', '2023-11-27 17:57:51'),
(40, 10, 7, 'Nobita và vương quốc trên mây', 30000, 'nobitavavuongquoctrenmay.jpg', 12, 90, 'Doraemon Truyện Dài - Tập 12 - Nobita Và Vương Quốc Trên Mây (Tái Bản 2023)', '2023-11-27 17:59:04'),
(41, 10, 7, 'Nobita Và Lịch Sử Khai Phá Vũ Trụ', 30000, 'líchukhaiphavutru.jpg', 12, 100, 'Doraemon Truyện Dài - Tập 2 - Nobita Và Lịch Sử Khai Phá Vũ Trụ (Tái Bản 2023', '2023-11-27 18:00:24'),
(42, 10, 7, 'Nobita Du Hành Biển Phương Nam', 30000, 'duhanhbienphuongnam.jpg', 12, 50, 'Doraemon Truyện Dài - Tập 18 - Nobita Du Hành Biển Phương Nam (Tái Bản 2023)', '2023-11-27 18:01:32'),
(43, 10, 7, 'Nobita Ở Vương Quốc Chó Mèo', 30000, 'Nobitavuongquocchomeo.jpg', 12, 100, 'Doraemon Truyện Dài - Tập 24 - Nobita Ở Vương Quốc Chó Mèo (Tái Bản 2023)', '2023-11-27 18:02:41'),
(44, 10, 7, 'Doraemon Plus', 30000, 'Doraemon.jpg', 12, 20, 'Doraemon Plus - Tập 4 (Tái Bản 2023)', '2023-11-27 18:03:36'),
(45, 10, 7, 'Doraemon Quá Khứ Và Tương Lai', 29000, 'quakhuvatuonglai.jpg', 12, 12, 'Doraemon Đố Vui - Tập 3: Doraemon Quá Khứ Và Tương Lai (Tái Bản 2023)', '2023-11-27 18:05:48'),
(46, 11, 12, 'Lý thuyết trò chơi', 90000, 'lythuyettrochoi.jpg', 16, 15, 'Đời người giống như trò chơi, mỗi bước đều phải cân nhắc xem đi như thế nào, đi về đâu, phải kết hợp nhiều yếu tố lại chúng ta mới có thể đưa ra được lựa chọn. Mà trong quá trình chọn lựa này các yếu tố khiến ta phải cân nhắc và những đường đi khác nhau s', '2023-11-27 18:08:06'),
(47, 12, 11, 'Đừng cố làm người tốt trong mắt tất cả mọi người', 15000, 'dungcolamnguoitottrongmatmoinguoi.jpg', 16, 10, 'Tổn thương và khóc', '2023-11-27 18:13:02'),
(48, 8, 14, 'Trí thông minh của sự tinh tế', 50000, '4cdfbb2fd4217d7f2430.jpg', 16, 90, 'Vì sao có những cô gái cuộc sống lúc nào cũng gặp may mắn, đi làm thì dễ dàng thăng tiến, về nhà thì được chồng yêu thương, gia đình thuận hoà chẳng cãi vã bao giờ? Tất cả là nhờ “Trí thông minh của sự tinh tế\" cả đấy! “Trí thông minh\" ấy không phải sẵn c', '2023-11-27 18:18:04'),
(49, 13, 5, 'Càng bình tĩnh càng hạnh phúc', 90000, 'vantinh.jpg', 16, 15, 'Càng Bình Tĩnh Càng Hạnh Phúc. “Chúng ta thường nói, sự khẳng định lớn nhất của một người đàn ông dành cho một người phụ nữ là cưới cô ấy về nhà. Nhưng tôi muốn nói rằng: ‘Sự khẳng định lớn nhất của một người phụ nữ dành cho bản thân mình chính là nắm bắt', '2023-11-28 07:27:15'),
(50, 14, 5, 'Hành tinh của một kẻ nghĩ nhiều', 90000, 'Hanhtinhcuarmotkenghinhieu.jpg', 16, 20, 'Hành Tinh Của Một Kẻ Nghĩ Nhiều/ Hành tinh của một kẻ nghĩ nhiều là hành trình khám phá thế giới nội tâm của một người trẻ. Đó là một hành tinh đầy hỗn loạn của những suy nghĩ trăn trở, những dằn vặt, những cuộc chiến nội tâm, những cảm xúc vừa phức tạp c', '2023-11-28 07:30:47'),
(51, 15, 12, 'Không ai có thể làm bạn tổn thương trừ khi bạn cho phép', 110000, 'kactlbtttkbcp.jpg', 16, 15, 'Không Ai Có Thể Làm Bạn Tổn Thương Trừ Khi Bạn Cho Phép/ Chúng ta vẫn thường nghĩ mình sẽ chỉ hạnh phúc khi ở bên cạnh ai đó và nhận được yêu thương từ họ. Nhưng thực chất, hạnh phúc đơn giản chỉ là biết trân trọng bản thân và tận hưởng niềm vui trong chí', '2023-11-28 07:32:47'),
(52, 16, 5, 'Không phải Sói nhưng cũng đừng là Cừu', 110000, 'kpsncdlc.jpg', 16, 20, 'Không Phải Sói Nhưng Cũng Đừng Là Cừu -Tặng kèm bookmark 2 mặt/ Cuốn sách “Không phải sói nhưng cũng đừng là cừu” đến từ tác giả Lê Bảo Ngọc sẽ giúp bạn hiểu rõ hơn những khía cạnh sắc sảo phía sau những nhận định đúng, sai đơn thuần của mỗi người.', '2023-11-28 07:34:35'),
(53, 17, 10, 'Thương', 50000, 'thuong.jpg', 21, 15, '\"Thương\" là một tập thơ rất tình, ngẫu hứng, và đầy sáng tạo. Ở “Thương ” không có bóng dáng của một nhân vật nhất định, nhưng mang lại cho người đọc đầy đủ tất cả cảm xúc về tình yêu, tuổi trẻ và cuộc đời.', '2023-11-29 15:59:27'),
(54, 17, 2, 'Con chim xanh biếc bay về', 150000, 'conchimbiecbayve.jpg', 21, 20, 'Con chim xanh biếc bay về dẫn bạn đi hết từ bất ngờ này đến tò mò suy đoán khác, để kết thúc bằng một nỗi hân hoan vô bờ sau bao phen hồi hộp nghi kỵ đến khó thở.', '2023-11-29 16:02:12'),
(55, 12, 3, 'Một lít nước mắt', 85000, 'motlitnuocmat.jpg', 19, 18, 'Một lít nước mắt\" là một cuốn sách cảm động, đúng như tiêu đề của nó. Đó là câu chuyện của Kito Aya, một cô bé 15 tuổi mắc căn bệnh hiểm nghèo, nhưng chưa bao giờ đầu hàng số phận. Nghị lực phi thường của Aya khiến mọi người xung quanh cô đều rất nể phục,', '2023-11-29 16:04:06'),
(56, 13, 5, 'Đám trẻ ở đại dương đen', 90000, 'damtreodaiduongden.jpg', 22, 25, 'Đám trẻ ở đại dương đen là lời độc thoại và đối thoại của những đứa trẻ ở đại dương đen, nơi từng lớp sóng của nỗi buồn và tuyệt vọng không ngừng cuộn trào, lúc âm ỉ, khi dữ dội. Những đứa trẻ ấy phải vật lộn trong những góc tối tâm lý, với sự u uất đè né', '2023-11-29 16:06:29'),
(57, 4, 9, 'Cây cam ngọt của tôi', 110000, 'caycamngotcuatoi.jpg', 22, 21, 'Mở đầu bằng những thanh âm trong sáng và kết thúc lắng lại trong những nốt trầm hoài niệm, Cây cam ngọt của tôi khiến ta nhận ra vẻ đẹp thực sự của cuộc sống đến từ những điều giản dị như bông hoa trắng của cái cây sau nhà, và rằng cuộc đời thật khốn khổ ', '2023-11-29 16:08:10'),
(58, 3, 5, 'Muôn kiếp nhân sinh 3', 165000, 'muonkiepnhansinh3.jpg', 20, 30, 'Muôn Kiếp Nhân Sinh – tập 3” tiếp tục đưa bạn đọc đi qua hành trình thức tỉnh tâm linh của nhân vật chính Thomas. Không chỉ là hồi tiếp theo trong chuyến phiêu lưu của linh hồn, tập mới nhất và cũng là tập cuối cùng của bộ sách sẽ bàn luận sâu hơn về hiện', '2023-11-29 16:09:33'),
(59, 17, 12, 'Mùa hè không tên', 80000, 'muahekhongten.jpg', 21, 40, 'Mùa hè không tên” là truyện dài mới nhất của nhà văn Nguyễn Nhật Ánh, với những câu chuyện tuổi thơ với vô số trò tinh nghịch, những thoáng thinh thích hồi hộp cùng vô vàn kỷ niệm. Để rồi khi những tháng ngày trong sáng của tình bạn dần qua, bọn nhỏ trong', '2023-11-29 16:12:57'),
(60, 12, 10, 'Nhà giả kim', 110000, 'nhagiakim.jpg', 22, 20, 'Tiểu thuyết Nhà giả kim như một câu chuyện cổ tích giản dị, nhân ái, giàu chất thơ, thấm đẫm những minh triết huyền bí của phương Đông. Trong lần xuất bản đầu tiên tại Brazil vào năm 1988, sách chỉ bán được 900 bản. Nhưng, với số phận đặc biệt của cuốn sá', '2023-11-29 16:14:54'),
(61, 14, 6, 'Chưa kịp lớn đã trưởng thành', 85000, 'chuakiplondatruonthanh.jpg', 19, 10, 'Chưa kịp lớn đã phải trưởng thành” làm một người bạn ở bên, xoa dịu tổn thương và gửi tặng bạn đôi điều khích lệ. Mỗi trang sách đều là một lá thư nhắn nhủ bạn về sự đặc biệt của bản thân, về những nỗ lực hoàn thiện không ngừng nghỉ trong thế giới của ngư', '2023-11-29 16:17:13'),
(62, 17, 7, 'Trời quá đẹp để buồn', 50000, 'troinayquadepdebuon.jpg', 19, 25, 'Trời này quá đẹp để buồn - Đời này quá đẹp lại buồn” lưu giữ những suy tưởng về con người, tình yêu và cuộc sống, chảy theo nhịp cảm xúc từ dịu dàng đến trầm lắng, ký gửi qua từng câu chữ mộc mạc của tác giả Lê Hoài Đăng và được họa sĩ Chên Chên “ghi lại”', '2023-11-29 16:18:59'),
(63, 8, 10, 'Những con chim ẩn mình chờ chết', 110000, 'nhungconchimanminhchochet.jpg', 16, 20, 'Yêu những điều không hoàn hảo\" là một cuốn sách tâm lý nổi tiếng của sư Hae Min. Cuốn sách ấy đã giúp tôi tìm được sự bình yên giữa cuộc đời. Cuốn sách mang đến thông điệp là dù chúng ta đang sống giữa thế gian đầy rẫy những điều không hoàn hảo, ta vẫn kh', '2023-11-29 16:20:37'),
(64, 7, 9, 'Hãy chăm sóc mẹ', 190000, 'sachhanquoc.jpg', 22, 15, 'Cuốn sách mê hoặc lạ thường này đã khẳng định vị trí của Shin Kyung-sook như một hiện tượng văn học châu Á, tạo ra trào lưu đọc mới ở Hàn Quốc từ sự cộng cảm trước một tác phẩm đầy sức mạnh. Bằng câu chuyện cảm động thấm thía về người mẹ đi lạc đường, tác', '2023-11-29 16:23:07'),
(65, 11, 11, 'Nổi buồn chiến tranh', 90000, 'noibuonchientranh.jpg', 14, 20, 'Tác phẩm là dòng hồi ức của người lính về chiến tranh và thời tuổi trẻ đã trải qua trong bom đạn. Đólàlòng tiếc thương vô hạn đối với những người cùng thế hệ với mình đã nằm xuống, là ám ảnh về thân phận con người trong thời buổi loạn ly, và thông qua thâ', '2023-11-29 16:24:48'),
(66, 15, 1, 'Đêm trắng', 180000, 'demtrawng.jpg', 17, 12, 'Thiên tiểu thuyết có sức ảnh hưởng sâu rộng của Colleen McCullough về những giấc mơ, những trăn trở, những đam mê thầm kín, và mối tình bị ngăn cấm ở nước Úc xa xôi đã mê hoặc độc giả khắp thế giới. Đây là biên niên sử ba thế hệ dòng họ Cleary, những ngườ', '2023-11-29 16:26:24'),
(67, 6, 9, 'Bước chậm lại giữa thế gian vội vã', 90000, 'bclgtgvv.jpg', 15, 77, 'một cây đại thụ trong văn học Nga thế kỷ thứ 19 - viết về mối tình lãng mạn, cao thượng và trong sáng trong những đêm trắng thơ mộng bên bờ sông Neva, thành phố Sankt Peterburg.', '2023-11-29 16:28:42'),
(68, 17, 9, 'Mùa hè không tên 2', 56000, 'muahekhongten1.jpg', 21, 20, 'Câu chuyện đi theo lời kể của một anh chàng mới lấy vợ, chuẩn bị đi làm và có ý thích viết văn. Anh chàng yêu vợ theo cách của mình, khen ngợi sùng bái người yêu cũng theo cách của mình, nhưng nhìn cuộc đời theo cách sống của những người hàng xóm. Sống tr', '2023-11-29 16:30:27'),
(69, 16, 13, 'Lén nhặt chuyện đời', 150000, 'lennhat.jpg', 21, 20, 'Lén nhặt chuyện đời ra mắt trong khoảng thời gian chông chênh nhất của bản thân, hay nói cách khác là một cậu bé mới lớn, vừa bước ra khỏi cái vỏ bọc vốn an toàn của mình. Những câu chuyện trong Lén nhặt chuyện đời là những câu chuyện tôi được nghe kể lại', '2023-11-29 16:31:44'),
(70, 5, 12, 'Tàn ngày để lại', 110000, 'tanngayderlai.jpg', 19, 15, 'Tàn ngày để lại xuất bản năm 1989 đã giúp tác giả nhận được giải Man Booker. Cuốn sách được xem là một trong những tác phẩm xuất sắc nhất của Kazuo Ishiguro', '2023-11-29 16:33:00'),
(71, 17, 7, 'Những người hàng xóm', 150000, 'nhungnguoihangxom.jpg', 19, 30, 'Đi vòng thế giới vẫn quanh một người” là tập thơ chứa đựng những gì dịu dàng nhất, ẩn giấu những nỗi niềm, gói ghém những nhớ thương và đan cài hàng vạn sợi tình trong mỗi trang viết', '2023-11-29 16:34:22'),
(72, 16, 8, 'Đi vòng quanh thế giới', 170000, 'divongquanhthegioi.jpg', 14, 26, 'Đi vòng thế giới vẫn quanh một người” là tập thơ chứa đựng những gì dịu dàng nhất, ẩn giấu những nỗi niềm, gói ghém những nhớ thương và đan cài hàng vạn sợi tình trong mỗi trang viết', '2023-11-29 16:35:35'),
(74, 8, 12, 'Nếu ốc sên có tình yêu', 180000, 'ocsencotinhyeu.jpg', 19, 20, '“Đây là tiểu thuyết ngôn tình mới nhất của Đinh Mặc. Tên truyện có vẻ hơi “sến” nhưng thực sự khá độc đáo, độc đáo từ ý tưởng đến hình tượng nhân vật.\r\n\r\nMặc dù truyện có tình tiết điều tra phá án nhưng Đinh Mặc khẳng định đây không phải là tiểu thuyết hì', '2023-12-01 04:49:34'),
(75, 7, 5, 'Hỏa ngục', 120000, 'hoanguc.jpg', 22, 18, 'Chỉ ít lâu sau, thế giới của Landon trở nên hỗn loạn khi anh phải chạy trốn khỏi những kẻ lạ mặt ở Florence cùng một nữ bác sĩ trẻ có phần khắc kỷ, Sienna Brooks, người đã vận dụng mưu mẹo khôn khéo để cứu mạng anh. Langdon nhanh chóng nhận ra mình bị mắc', '2023-12-01 04:52:32'),
(76, 11, 9, 'Bí quyết xây dựng cơ nghiệp bạc tỷ', 265000, 'kdoanh.jpg', 11, 25, 'Trong quyển sách “Bí quyết gây dựng cơ nghiệp bạc tỷ”, Adam Khoo sẽ tiết lộ những bí quyết đã giúp anh xây dựng một cơ nghiệp hàng triệu đô từ tay trắng. Điều tuyệt vời nhất là bạn không cần phải sở hữu thật nhiều tiền để đầu tư, cũng không cần có bằng cấ', '2023-12-01 04:54:51'),
(77, 14, 8, 'Thiên tài bên trái kẻ điên bên phải', 157000, 'thientaibentraikedienbenphai.jpg', 1, 20, 'Thiên tài bên trái, kẻ điên bên phải là cuốn sách dành cho những người điên rồ, những kẻ gây rối, những người chống đối, những mảnh ghép hình tròn trong những ô vuông không vừa vặn… những người nhìn mọi thứ khác biệt, không quan tâm đến quy tắc. Bạn có th', '2023-12-01 04:58:06'),
(78, 12, 12, 'Sự im lặng của bầy cừu', 220000, 'suimlangcuabaycuu.jpg', 16, 52, 'Những cuộc phỏng vấn ở xà lim với kẻ ăn thịt người ham thích trò đùa trí tuệ, những tiết lộ nửa chừng hắn chỉ dành cho kẻ nào thông minh, những cái nhìn xuyên thấu thân phận và suy tư của cô mà đôi khi cô muốn lảng tránh… Clarice Starling đã dấn thân vào ', '2023-12-01 05:00:36'),
(79, 4, 14, 'Bán gì để nhanh giàu?', 128000, 'bangi.jpg', 11, 28, 'Cuốn sách này sẽ hướng dẫn bạn cách chọn sản phẩm, dịch vụ sao cho hợp lý nhất. Chọn sản phẩm theo trend cũng chỉ là một trong số đó. Chọn đúng sản phẩm làm sai cũng thành đúng, chọn sai sản phẩm đúng cũng hóa thành sai.', '2023-12-01 05:03:06'),
(80, 13, 2, 'Hai Mặt Của Gia Đình', 265000, 'giadinh.jpg.webp', 16, 25, 'Giúp hiểu về tổn thương và nỗi đau trong gia đình.\r\nĐưa ra cách giải quyết các vấn đề gia đình.\r\nThông qua câu chuyện gia đình, tìm thấy sự tương đồng.', '2023-12-01 05:11:37'),
(81, 16, 10, 'Làm mới vườn tâm', 45000, 'lammoivuontam.jpg.webp', 19, 16, 'Góc nhìn mới về tâm hồn và cuộc sống.\r\nPhương pháp làm mới cuộc sống hiệu quả.\r\nKích thước nhỏ gọn và dễ dàng mang theo.', '2023-12-01 05:14:33'),
(82, 3, 12, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', 80000, 'duongmaytrendathoa.jpg.webp', 15, 20, 'Sách Đường Mây Trên Đất Hoa - Nguyên Phong', '2023-12-01 05:26:53'),
(83, 9, 8, 'Hoa trôi trên sông nước', 52000, 'hoatroi.jpg', 17, 25, 'Chia sẻ sâu sắc và hữu ích về tu tập và giác ngộ.\r\nDịch giả Nguyên Phong biên dịch và phóng tác tự truyện thành công.\r\nPhát hành bởi công ty First News - Trí Việt, công ty uy tín.', '2023-12-01 05:28:47'),
(84, 12, 6, 'Như Chỉ Mới Hôm Qua', 127000, 'chinhumoihqua.jpg.webp', 14, 12, 'Câu chuyện đầy cảm xúc, lấy cảm hứng từ cuộc sống thực.\r\nNgôn ngữ tinh tế, gần gũi và dễ hiểu.\r\nSự pha trộn giữa hy vọng và lầm sai tạo nên câu chuyện gây cảm động.', '2023-12-01 05:31:36'),
(85, 6, 3, 'Thiên Thần Sa Ngã (Tái Bản)', 65000, 'ttsanga.jpg.webp', 9, 24, 'Câu chuyện tình yêu bình dị, trong sáng và sâu sắc.\r\nNhân vật phác thảo rõ ràng, mối quan hệ phức tạp.\r\nCâu chuyện nhân văn sâu sắc, thông điệp về giá trị hạnh phúc và tình yêu.', '2023-12-01 07:09:59'),
(86, 8, 13, 'Bắt Trẻ Đồng Xanh (Tái Bản 2020)', 185000, 'battredongxanh.jpg.webp', 14, 25, 'Câu chuyện được kể qua góc nhìn độc đáo của Holden Caulfield.\r\nTiểu thuyết gây tranh cãi và nổi tiếng, được đưa vào giảng dạy tại trường trung học.\r\nKích thước nhỏ gọn, dễ dàng mang theo và đọc bất cứ lúc nào.', '2023-12-01 07:18:05'),
(87, 17, 13, 'Hồ Xuân Hương Tiếng Vọng', 560000, 'hxh.jpg.webp', 21, 21, 'Tiếng vọng của người xưa tạo không gian lãng mạn, cảm xúc.\r\nCuộc sống và tình yêu của nữ sĩ Hồ Xuân Hương được kể một cách sâu sắc.\r\nKích thước và loại bìa phù hợp, dễ cầm nắm và đọc.', '2023-12-01 07:20:38'),
(88, 5, 1, 'Chân Dung Của Dorian Gray ', 370000, 'chandung.jpg.webp', 22, 37, 'Sách - Chân Dung Của Dorian Gray - Oscar Wilde - Nham Hoa dịch - Bìa Mềm (Tặng Kèm Bookmark Bamboo Books)\r\n', '2023-12-01 07:22:46'),
(89, 14, 10, 'Đồi Gió Hú', 95000, 'gio.jpg.webp', 20, 20, 'Cuốn tiểu thuyết dữ dội và bí ẩn của nữ tác giả  Emily Brontë: Đồi gió hú (TB)\r\n', '2023-12-01 07:24:36'),
(90, 4, 14, 'Chết ở Venice', 150000, 'ven.jpg.webp', 22, 10, 'Tác phẩm được dàn dựng như vở bi kịch cổ điển, mang đến trải nghiệm đặc biệt cho người đọc.\r\nCâu chuyện kể về hành trình tìm lại đam mê tuổi trẻ của nhà văn Gustav von Aschenbach.\r\nTác phẩm chứa đựng tư duy sâu sắc về nhân sinh quan và cái đẹp trong nghệ ', '2023-12-01 07:26:11'),
(91, 9, 2, 'Phải trái đúng sai', 230000, 'ptds.jpg.webp', 17, 10, 'Sách giải thích triết lý đạo đức một cách dễ hiểu và minh bạch.\r\nTác giả sử dụng các ví dụ thực tế để phân tích từ nhiều quan điểm khác nhau.\r\nTập trung vào các triết gia nổi tiếng như Aristotle, Kant, Mill, Nozick và Rawls.', '2023-12-01 07:28:13'),
(92, 9, 13, 'Chú chó thông minh', 70000, 'tt.jpg.webp', 12, 10, 'Sách Thiếu Nhi - Truyện Tranh Chú chó thông minh và tốt bụng \r\n', '2023-12-01 07:30:26'),
(93, 8, 1, 'Chim sẻ tóc xù', 65000, 'cstx.png.webp', 12, 10, 'Câu chuyện nhẹ nhàng, trong sáng về bạn nhỏ tốt bụng, biết chia sẻ và trân trọng sự khác biệt của mọi người.\r\nThiết kế sách đẹp mắt, thiệp xinh xắn lấy cảm hứng từ Đà Lạt.\r\nĐọc sách trước giờ đi ngủ giúp bé tăng sức đề kháng, tinh thần vui vẻ.', '2023-12-01 07:31:57'),
(94, 4, 6, '7 viên ngọc rồng', 56000, 'tt7.jpg.webp', 12, 10, 'Dragon Ball - 7 Viên Ngọc Rồng Tập 13: Son Goku Trả Thù (Tái Bản 2022)\r\n', '2023-12-01 07:33:36'),
(95, 16, 10, 'Tôi tìm mình giữa những tháng năm', 77000, 'ttm.jpg.webp', 9, 10, 'Tôi tìm mình giữa những tháng năm - Lê Ngọc\r\nTặng bookmart tùy chọn', '2023-12-01 07:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `id` int(10) NOT NULL,
  `tentacgia` varchar(255) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`id`, `tentacgia`, `mota`) VALUES
(3, 'Nguyên Phong', 'GS.John Vũ – Bút danh Nguyên Phong – Một cái tên của nền khoa học nước nhà, một dịch giả nổi tiếng trong tâm trí độc giả. Ông được xem là một trong những người sáng tạo nhất thế giới.'),
(4, 'Roger E. A.Farmer', 'Roger E. A. Farmer là một nhà kinh tế học xuất sắc với rất nhiều công trình nghiên cứu có tầm ảnh hưởng đến nền kinh tế thế giới.'),
(5, 'Morgan Housel', 'Morgan Housel là một cây viết nổi tiếng về tài chính cá nhân, với những quan điểm thú vị và đúng đắn về tài chính, tiền bạc, kinh doanh, đầu tư, tác giả đã thực sự là thay đổi cuộc sống của hàng vạn người.'),
(6, 'Liêu Tiểu Đao', 'Liêu Tiểu Đao là bác sĩ pháp y với 18 năm kinh nghiệm mổ xẻ tử thi bằng con dao bạc số 24.'),
(7, 'Higashino Keigo', 'Higashino Keigo  là một tác giả người Nhật Bản được biết tới rộng rãi qua các tiểu thuyết trinh thám của ông.'),
(8, 'Miêu công tử', 'Miêu Công Tử là một người làm nghề tự do, yêu tha thiết cuộc sống và là một nhà văn học mạng nổi tiếng tại Trung Quốc.'),
(9, 'Diệp Hồng Vũ', 'Diệp Hồng Vũ cũng là một nhà văn chuyên viết về các chủ đề liên quan đến tâm lý học, nhất là tâm lý học tội phạm'),
(10, 'FujikoFFujio', 'Là cha đẻ của nhân vật Doraemon'),
(11, 'Trần Phách Hàm', ''),
(12, 'Kim Yoo Eun', ''),
(13, 'Vãn Tình', ''),
(14, 'Nguyễn Đoàn Minh Thư', ''),
(15, 'Yoo Eun Jung', ''),
(16, 'Lê Bảo Ngọc', ''),
(17, 'Nguyễn Nhật Ánh', '');

-- --------------------------------------------------------

--
-- Table structure for table `thanhtoan`
--

CREATE TABLE `thanhtoan` (
  `id` int(10) NOT NULL,
  `madonhang` int(10) NOT NULL,
  `makhachhang` int(10) NOT NULL,
  `thoigiandathang` date NOT NULL,
  `trangthaithanhtoan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `sdt` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `idvaitro` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hoten`, `diachi`, `sdt`, `email`, `matkhau`, `idvaitro`) VALUES
(1, 'Ngô Thị Nguyễn', 'Cần Thơ', 123456789, 'nthnguyen@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(2, 'Admin', 'cần thơ', 123456789, 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1),
(20, 'abc', 'ct', 123, 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(21, 'Như Hoa', 'Cà Mau', 23456781, 'nhuhoa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(22, 'Nguyễn My', 'Bạc Liêu', 123456789, 'nmy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(23, 'Thùy Ngô', 'Vĩnh Long', 123456789, 'tngo@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(24, 'Ngọc Ánh', 'Cần Thơ', 123456789, 'nanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(25, 'Trần Thiếu Hoa', 'Nha Trang', 354864125, 'tthoa@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(26, 'Thành Nghĩa', 'Bến Tre', 245682346, 'tnghia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(27, 'Trung Hoàng', 'Trà Vinh', 907256431, 'thoang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(28, 'Văn Tình', 'Hậu Giang', 725631489, 'vtinh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(29, 'Lê Trí Quang', 'An Giang', 905236451, 'ltquang@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(30, 'Trọng Lê', 'Tiền Giang', 75631489, 'tle@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(31, 'Nguyễn Thúy', 'Đồng Nai', 254697264, 'nthuy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(32, 'Nguyễn Ngọc Phước', 'Cần Thơ', 366478555, 'nnphuoc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(33, 'Nguyễn My Trúc', 'Cần Thơ', 725631489, 'nmtruc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(34, 'Lê Ánh ', 'Cần Thơ', 907256431, 'lanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(35, 'Trần Thị', 'Bạc Liêu', 725631489, 'tthi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(36, 'Trà My', 'Nha Trang', 907256431, 'tmy@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(37, 'Lê Như ', 'Bến Tre', 354864125, 'lnhu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(38, 'Nguyễn Ngọc Như', 'Trà Vinh', 725631489, 'nnnhu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(39, 'Trần Thúy Nga', 'Trà Vinh', 907256431, 'ttnga@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(40, 'Hà Thanh ', 'Bến Tre', 354864125, 'hthanh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(41, 'Thế Phong', 'Cần Thơ', 956987123, 'tphong@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(42, 'Ngọc Hà', 'Nha Trang', 765258999, 'nha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `vaitro`
--

CREATE TABLE `vaitro` (
  `id` tinyint(1) NOT NULL,
  `ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaitro`
--

INSERT INTO `vaitro` (`id`, `ten`) VALUES
(1, 'Admin'),
(2, 'Người dùng');

-- --------------------------------------------------------

--
-- Table structure for table `vnpay`
--

CREATE TABLE `vnpay` (
  `id` int(11) NOT NULL,
  `vnp_amount` varchar(255) NOT NULL,
  `vnp_bankcode` varchar(255) NOT NULL,
  `vnp_banktranno` varchar(255) NOT NULL,
  `vnp_cardtype` varchar(255) NOT NULL,
  `vnp_orderinfo` varchar(255) NOT NULL,
  `vnp_paydate` varchar(255) NOT NULL,
  `vnp_tmncode` varchar(255) NOT NULL,
  `vnp_transactionno` varchar(255) NOT NULL,
  `code_donhang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vnpay`
--

INSERT INTO `vnpay` (`id`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `code_donhang`) VALUES
(12, '10200000', 'NCB', 'VNP14209255', 'ATM', 'Thanh toán đơn hàng mua sách', '20231129174338', 'QOWZTX43', '14209255', '7307'),
(13, '30000000', 'NCB', 'VNP14209815', 'ATM', 'Thanh toán đơn hàng mua sách', '20231129222924', 'QOWZTX43', '14209815', '6586'),
(14, '31000000', 'NCB', 'VNP14214551', 'ATM', 'Thanh toán đơn hàng mua sách', '20231201174811', 'QOWZTX43', '14214551', '5024'),
(15, '24700000', 'NCB', 'VNP14215072', 'ATM', 'Thanh toán đơn hàng mua sách', '20231201224537', 'QOWZTX43', '14215072', '1304');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_donhang` (`madonhang`),
  ADD KEY `fk_chitietdanhgia` (`masp`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dangnhap` (`makhachhang`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sanpham` (`masp`),
  ADD KEY `fk_danhgia` (`makhachhang`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_khachhang` (`makhachhang`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nxb`
--
ALTER TABLE `nxb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_danhmuc` (`madanhmuc`),
  ADD KEY `fk_tacgia` (`matacgia`),
  ADD KEY `fk_NXB` (`maNXB`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_thanhtoan` (`madonhang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vaitro`
--
ALTER TABLE `vaitro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vnpay`
--
ALTER TABLE `vnpay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=375;

--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `nxb`
--
ALTER TABLE `nxb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `vaitro`
--
ALTER TABLE `vaitro`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vnpay`
--
ALTER TABLE `vnpay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `fk_chitietdanhgia` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `fk_donhang` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`id`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `fk_danhgia` FOREIGN KEY (`makhachhang`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fk_sanpham` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`id`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk_khachhang` FOREIGN KEY (`makhachhang`) REFERENCES `users` (`id`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_NXB` FOREIGN KEY (`maNXB`) REFERENCES `nxb` (`id`),
  ADD CONSTRAINT `fk_danhmuc` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`id`),
  ADD CONSTRAINT `fk_tacgia` FOREIGN KEY (`matacgia`) REFERENCES `tacgia` (`id`);

--
-- Constraints for table `thanhtoan`
--
ALTER TABLE `thanhtoan`
  ADD CONSTRAINT `fk_thanhtoan` FOREIGN KEY (`madonhang`) REFERENCES `donhang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
