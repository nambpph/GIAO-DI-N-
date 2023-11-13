-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2023 lúc 05:31 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(250) NOT NULL,
  `bill_tell` varchar(255) NOT NULL,
  `bill_email` varchar(255) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1. Thanh toán trực tiếp\r\n2. Chuyển khoản\r\n3.Thanh toán online',
  `ngaydathang` varchar(250) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) DEFAULT 0 COMMENT '0.Đơn hàng mới\r\n1.Đang xử lý\r\n2.Đang giao hàng\r\n3.Đã giao hàng',
  `recelve_name` varchar(255) DEFAULT NULL,
  `recelve_address` varchar(255) DEFAULT NULL,
  `recelve_tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `ngaybinhluan` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT '0',
  `price` int(10) NOT NULL,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`) VALUES
(3, 'Chăm sóc cơ thể'),
(6, 'Nước hoa'),
(7, 'Giảm cân'),
(8, 'Mỹ phẩm ST.lves'),
(9, 'Done'),
(10, 'Serum và sản phẩm đặc trị');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `img` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `luotxem` int(11) NOT NULL DEFAULT 0,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(11, 'Viên uống trắng da Triple White', 600000.00, 'vien-uong-trang-da.jpg', 'Triple white ra đời với sự cải tiến về công thức trắng da chống nắng tiên tiến với thành phần nổi bật nhất hiện nay là hoạt chất Glutathione.\r\n\r\nThông tin sản phẩm Triple White\r\nXuất xứ: Mỹ\r\nQuy cách đóng gói: 50 viên / lọ\r\nNhà sản xuất: AIE PHARMCEUTICALS, INC. USA\r\nChất lượng: đạt chuẩn GMP & FDA Hoa Kỳ.\r\nCông dụng của Triple White và những dặc điểm nổi bật\r\nTrắng sáng da toàn thân giúp da sáng đều màu.\r\nChống nắng toàn thân giúp da chống lại những tia có hại từ ánh nắng mặt trời cũng như các thiết bị điện tử.\r\n\r\n\r\n', 0, 10),
(12, 'Tẩy tế bào chết Dove Exfoliating Body Polish Scrub chiết xuất lựu', 220000.00, 'tay-te-bao-chet.jpg', 'Tẩy tế bào chết Body chiết xuất lựu Dove Exfoliating Body Polish Scrub 298g Sản phẩm công thức kết hợp kem dưỡng ẩm và có kết cấu dạng kem tẩy tế bào chết hiệu quả. Dễ thấm vào da không gây khó chịu nhờ hương thơm nhẹ và ngọt. Được feedback cực tốt hiện đang rất hot trên các diễn dàng.\r\n\r\nCông dụng\r\n\r\nGiảm vùng da khô và xỉn màu nhờ tẩy tế bào chết\r\nSạch lỗ chân lông bị bí bách\r\nSăn chắc da\r\nPhục hồi da khoẻ hơn đàn hồi hơi.\r\nQuy cách đóng gói:\r\n\r\n10.5 oz ~ 298g / hộp\r\n\r\nXuất xứ\r\n\r\nMỹ\r\n\r\nLưu ý\r\n\r\nKhi làm ước người bạn phải để khô 1 xíu không quá ướt không quá khô. Để tránh mất độ ma sát của cát hạt trong sản phẩm.\r\n\r\nMỗi tuần dùng 1 đến 2 lần', 0, 9),
(13, 'Mặt nạ dưỡng da ST.Ives chiết suất tự nhiên, mềm mịn da', 28000.00, 'mat-na-st-ives.jpg', 'Mặt nạ giấy ST.Ives gồm các dòng mặt nạ chiết suất từ thiên nhiên như mơ, việt quất, yến mạch. Với những công dụng khác nhau giúp giải quyết các vấn đề tức thời của da.\r\n\r\n\r\nHướng dẫn sử dụng:\r\n\r\nSau khi làm sạch da, và cân bằng da bằng nước hoa hồng. Tiến hành đắp mặt nạ lên đều các góc mặt, mũi miệng. Để thư giãn trong 10 phút. Tháo mặt nạ và vỗ nhẹ để các dưỡng chất hấp thụ tối đa vào da.', 0, 8),
(14, 'Sữa dưỡng thể toàn thân ST.Ives Body Lotion', 125000.00, 'Sua-duong-the-toan-than-ST.Ives-Body-Lotion.jpg', 'Sữa dưỡng thể ST.Ives toàn thân với các thành phần chiết suất từ thiên nhiên. Như lúa mạch, bơ, dầu đậu nàng. Cung cấp chất dưỡng ẩm chuyên sâu cho da. Phục hồi cho những làn da khô, sần sùi mịn màng và tươi trẻ.\r\n\r\n', 0, 10),
(15, 'Sữa dinh dưỡng/Bữa ăn lành mạnh F1 Herbalife cho cơ thể khỏe đẹp', 680000.00, 'F1-Herbalife-nubeuaty-1.jpg', 'Sữa dinh dưỡng/Kiểm soát cân nặng F1 Herbalife hiện là một sản phẩm được ưa chuộng và phổ biến rất nhiều hiện nay. Sản phẩm bổ sung dinh dưỡng dành cho những người kiểm soát cân nặng, tăng cân hoặc giảm cân. Hoặc là một dạng thức uống dinh dưỡng để duy trì cho một cơ thể khỏe mạnh lâu dài.\r\n\r\nĐể hiểu hơn về công dụng, thành phần, sữa dành cho đối tượng nào, liệu trình dùng như nào để có hiệu quả nhất. Và những lưu ý hay mua sản phẩm nơi đâu uy tín để tránh những hàng trôi nổi, kém chất lượng. Nubeauty sẽ giải đáp chi tiết nhất trong bài viết này.', 0, 10),
(16, 'Dung dịch vệ sinh Femfresh màu cam hàng ngày cho chị em phụ nữ', 136000.00, 'Dung-Dich-ve-sinh-phu-nu-cao-cap-hang-ngay-Femfresh-Daily-nubeauty.jpg', 'Sản phẩm dung dịch vệ sinh phụ nữ Femfresh màu cam hàng ngày chăm sóc vùng kín chị em luôn sạch khoẻ. Chiết xuất chính từ hoa cúc La mã, Lô hội giúp làm sạch và nuôi dưỡng, thơm mát suốt cả ngày.\r\n\r\nCông dụng\r\nLàm sạch vùng kín, khử mùi hôi mang lại cảm giác khô thoáng, sạch mát cả ngày.\r\nDuy trì và nuôi dưỡng độ ẩm tự nhiên, sự mềm mại cho làn da vùng kín.\r\nNgăn ngừa các vấn đề liên quan đến viêm nhiễm, nấm ngứa và hỗ trợ điều trị các bệnh phụ khoa.\r\nCân bằng độ pH tự nhiên của môi trường âm đạo để bảo vệ các lợi khuẩn.\r\n\r\nThành phần\r\nChiết xuất từ hoa Cúc La Mã, Lô hội, Chanh, dầu dừa giúp kháng khuẩn, kháng viêm, khô da và nuôi dưỡng làn da.\r\nDưỡng chất Glycerin, Butylene Glycol cung cấp độ ẩm cho làn da vùng kín luôn mịn màng.\r\nLactic Acid giúp làm sạch, sáng da và mờ vết thâm.\r\nThành phần Dichlorobenzyl Alcohol kháng viêm, kháng khuẩn hiệu quả.', 0, 10),
(17, 'Lăn khử mùi Scion Brightening Roll On Nuskin', 180000.00, 'lan-scion-nuskin-mau-moi-nubeauty.jpg', 'Lăn khử mùi Scion Brightening Roll On Nuskin – thông tin sản phẩm\r\nTrên thị trường thông tin của lăn khử mùi scion được đồn thổi và rất thiếu thực tế. Làm cho khách hàng đôi khi hoang mang không biết rằng thông tin trên đã đúng chưa. Thậm chí nhiều khách lên internet tìm kiếm đọc xong vẫn không hiểu lắm.\r\n\r\nBiết được điều đó Nu Beauty lặn lội qua tận tổng công ty Nuskin tìm tài liệu tiếng anh về dịch lại. Đảm bảo chính xác 100% với trình độ tiếng anh Ielt 8.0 nhé ^^.\r\n\r\nĐịnh vị sản phẩm Scion Brightening Roll On\r\nLăn khử mùi Scion Pure White giúp giảm tuyến mồ hôi giúp bảo vệ chống lại mùi cơ thể. Đồng thời làm sáng vùng da dưới cánh tay trong khoảng 3 – 4 tuần.\r\n\r\nĐiểm nhấn sản phẩm\r\n\r\nBảo vệ 24h\r\nCân bằng PH', 0, 3),
(18, 'Nước hoa Giordani Gold Essenza Parfum Oriflame 31816 Oriflame', 819000.00, 'nuoc-hoa-giordani-gold-essenza-parfum-oriflame.jpg', 'Nước hoa Giordani Gold Essenza Parfum Oriflame 31816 được sáng chế từ Fabrice Pellegrin là người đã sáng tạo ra nhiều sản phẩm nước hoa nổi tiếng như Mane, HERMÈS, Thierry Mugler, Diptyque, Giorgio Armani.\r\n\r\nVà Giordani Gold Essenza Parfum Oriflame 31816 là dòng nước hoa được ông sáng chế gần đây. Nằm trong top những dòng nước hoa siêu bán chạy tại Oriflame. Mang một một hương nồng nàn của niềm hạnh phúc và ánh nắng ngập tràn. Biến mùi hương hoa cam đơn điệu trở thành dòng nước hoa mang tầm cao mới.', 0, 10),
(19, 'Nước hoa bỏ túi Giordani Gold Essenza Parfum Purse Spray Oriflame 33493 Oriflame', 190000.00, 'nuoc-hoa-bo-tui-giordani-gold-essenza.jpg', 'Một hương thơm tươi mát, ngọt ngào nhưng không kém phần sang trọng. Không gì khác đó chính là sản phẩm Nước hoa bỏ túi Giordani Gold Essenza Parfum Purse Spray Oriflame 33493. \r\n\r\nNhững nốt hương của Giordani Gold Essenza Parfum Purse Spraysẽ khiến bạn thăng hoa giữa những cung bậc cảm xúc của sự hạnh phúc. Một hương thơm dành cho phái đẹp mà bất cứ người đàn ông nào nghe được cũng muốn cạnh bên.', 0, 6),
(20, 'Nước hoa Men’s Collection Dark Wood Eau de Toilette 30059 Oriflame', 429000.00, 'nuoc-hoa-mens-collection-dark-wood-eau-de-toilette.jpg', 'Nước hoa Men’s Collection Dark Wood Eau de Toilette 30059 là loại nước hoa mang đến một mùi hương nam tính cực kỳ mạnh mẽ. Các quý ông sẽ được “khoác” lên người mùi hương thật sự khí chất ngôn từ không lời lôi cuốn. Thứ tạo nên điều đó chính là công nghệ chiết xuất hương từ hương gỗ Guaiac độc đáo.\r\nĐây là một loại gỗ quý hiếm có mùi hắc ín và gốc phenol. Loại gỗ này giúp mang đến mùi khói và nhựa đường trong nước hoa tạo nên nét phong trần cuốn hút.', 0, 6),
(22, 'Nước hoa Eternal Man Eau de Toilette 33652 Oriflame', 350000.00, 'nuoc-hoa-eternal-man-eau-de-toilette.jpg', 'Mùi hương gỗ nhẹ nhàng, nam tính toát lên khí chất người đàn ông. Dễ dùng cho mọi tính cách đều bật lên cá tính riêng cho người sử dụng\r\nMùi hương sang trọng, lịch lãm, tăng sự thu hút phù hợp với tất cả môi trường. Đặc biết nhất là những buổi hẹn hò lãng mạn, tiệc tùng sang trọng\r\nDung tích lớn 100ml có thể sử dụng rất lâu\r\nGiá cả phải chăng\r\nThiết kế tiện lợi có thể mang bất cứ đâu', 0, 6),
(23, 'Nước hoa Paradise Man Eau de Toilette 32997 Oriflame', 1090000.00, 'nuoc-hoa-paradise-man-eau-de-toilette.jpg', 'Nước hoa dành cho những chàng trai lịch lãm ư? Nước hoa Paradise Man Eau de Toilette 32997 hoàn toàn hoàn hảo cho điều đó. Với mùi hương trái cây thanh lịch khác xa với những mùi hương được tổng hợp của một số sản phẩm, sự nam tính sẽ được tăng lên và độc đáo bởi hương dưa Kiwano quý hiếm được chiết xuất bằng công nghệ NaturePrint® tân tiến. Một mùi hương đem đến sự thanh lịch, nhã nhặn và sự phấn khởi cho bất kỳ chàng trai lịch lãm nào.', 0, 10),
(24, 'Sữa tắm tẩy tế bào chết Oriflame Milk and Honey Gold 31601 Oriflame', 230000.00, 'sua-tam-tay-te-bao-chet-oriflame-milk-and-honey-gold-4.jpg', 'Rất nhiều người đã sử dụng qua sản phẩm này đều đã nhận được kết quả vượt qua sự kỳ vọng ban đầu. Mùi hương của sản phẩm không nồng nàn mà ngược lại chỉ nhẹ nhàng, thoảng qua. Không gây kích ưng hay khó chịu cho người sử dụng\r\n\r\nLàm sạch da một cách từ từ, không gây khô ráp, dị ứng cho da khi tẩy tế bào. Hộ trợ làm mềm da, mịn màng hơn. Khi sử dụng thì bản thân sẽ cảm nhận được sự thay đổi sau 1-2 tuần sử dụng.', 0, 3),
(25, 'Vitamin Herbalife F2 – Bổ sung vitamin cho sức khỏe toàn diện', 280000.00, 'vitamin-F2-herbalife-1.jpg', 'Vitamin Herbalife F2 là một sản phẩm chất lượng hàng đầu được phát triển bởi Herbalife, một thương hiệu nổi tiếng trong ngành công nghiệp thực phẩm bổ sung. Sản phẩm này được thiết kế đặc biệt để cung cấp các dưỡng chất cần thiết cho cơ thể, giúp tăng cường sức khỏe và duy trì cân bằng dinh dưỡng hàng ngày. Trong bài viết này, chúng tôi sẽ giới thiệu về xuất xứ, công dụng, thành phần, cách sử dụng, giá cả và nơi mua uy tín sản phẩm Vitamin Herbalife F2.', 0, 7),
(26, 'Sữa dưỡng thể toàn thân ST.Ives Body Lotion', 125000.00, 'Sua-duong-the-toan-than-ST.Ives-Body-Lotion (1).jpg', 'Sữa dưỡng thể ST.Ives toàn thân với các thành phần chiết suất từ thiên nhiên. Như lúa mạch, bơ, dầu đậu nàng. Cung cấp chất dưỡng ẩm chuyên sâu cho da. Phục hồi cho những làn da khô, sần sùi mịn màng và tươi trẻ.\r\n\r\nNgoài ra, chất kem lỏng, nhẹ không gây bít tắc, dễ dàng thẩm thấu để chị em dùng được trong mọi thời tiết.\r\n\r\nSữa dưỡng thể ST.Ives có 3 hương ưa chuộng nhất mà bạn có thể lựa chọn:\r\n\r\nMùi hương', 0, 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `email`, `address`, `tel`, `role`) VALUES
(1, 'Admin', '123456', 'admin@fpt.edu.vn', NULL, NULL, 1),
(4, 'nang', '123', 'huynang075@gmail.conm', NULL, NULL, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `iduser` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iddm` (`iddm`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `sanpham` (`id`),
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `taikhoan` (`id`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
