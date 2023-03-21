-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 21, 2023 lúc 12:29 PM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbtintuc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE IF NOT EXISTS `binhluan` (
  `idbinhluan` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idusers` int(11) NOT NULL,
  `idtintuc` int(11) NOT NULL,
  `trangthai` int(11) DEFAULT NULL,
  PRIMARY KEY (`idbinhluan`),
  KEY `fk_tintuc_binhluan_idx` (`idtintuc`),
  KEY `fk_user_binhluan_idx` (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `idnhomtin` int(11) NOT NULL AUTO_INCREMENT,
  `tennhomtin` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idnhomtin`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`idnhomtin`, `tennhomtin`, `status`) VALUES
(1, 'Xã Hội', 0),
(2, 'Thế Giới ', 0),
(3, 'Kinh doanh', 0),
(4, 'Văn Hóa', 0),
(5, 'Pháp Luật', 0),
(6, 'Thể Thao', 0),
(7, 'Công nghệ', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

DROP TABLE IF EXISTS `loaitin`;
CREATE TABLE IF NOT EXISTS `loaitin` (
  `idloaitin` varchar(5) CHARACTER SET utf8 NOT NULL,
  `tenloaitin` varchar(255) CHARACTER SET utf8 NOT NULL,
  `idnhomtin` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idloaitin`),
  KEY `fk_nhomtin_loaitin_idx` (`idnhomtin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`idloaitin`, `tenloaitin`, `idnhomtin`, `status`) VALUES
('AN', 'Âm nhạc', 4, 1),
('BD', 'Bóng đá', 6, 1),
('BDS', 'Bất động sản', 3, 1),
('CK', 'Chứng khoán', 3, 1),
('CSDD', 'Cuộc sống đó đây', 2, 1),
('DA', 'Điện ảnh', 4, 1),
('DL', 'Du Lịch', 1, 1),
('DN', 'Doanh nhân', 3, 1),
('FB', 'Bóng rổ', 6, 1),
('GD', 'Giáo Dục', 1, 1),
('HS', 'Hình sự', 5, 1),
('MT', 'Máy tính', 7, 1),
('NDT', 'Nhịp Điệu Trẻ', 1, 1),
('NVNT', 'Người Việt Năm Châu', 2, 1),
('PT', 'Phân tích', 2, 1),
('TN', 'Tennis', 6, 1),
('TT', 'Thời trang', 4, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE IF NOT EXISTS `tintuc` (
  `idtintuc` int(11) NOT NULL AUTO_INCREMENT,
  `tieude` varchar(255) CHARACTER SET utf8 NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mota` text NOT NULL,
  `noidung` text NOT NULL,
  `ngaydang` date NOT NULL,
  `idloaitin` varchar(5) CHARACTER SET utf8 NOT NULL,
  `luotxem` int(11) DEFAULT NULL,
  `hot` tinyint(4) NOT NULL,
  `trangthai` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtintuc`),
  KEY `fk_tintuc_loaitin_idx` (`idloaitin`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`idtintuc`, `tieude`, `img`, `mota`, `noidung`, `ngaydang`, `idloaitin`, `luotxem`, `hot`, `trangthai`) VALUES
(1, 'MV trở lại của Jack như nồi lẩu thập cẩm', 'anh1.jpg', 'Sau ồn ào đời tư, Jack tiếp tục cho thấy phong độ xuống dốc với MV “Ngôi sao cô đơn”. Ca khúc không chỉ cũ kỹ mà ý tưởng, hình ảnh MV còn giống sản phẩm khác.', 'aaaa', '2022-07-20', 'AN', 0, 1, 1),
(2, 'ÂM NHẠC', '2-anh2.jpg', 'Nam ca sĩ cần nghỉ ngơi, trị bệnh sau thời gian chạy show liên tục. Trước đó, anh được chẩn đoán mắc hội chứng Ramsay Hunt, gây ra tình trạng liệt cơ mặt.', 'ấcca', '2023-03-02', 'AN', 0, 1, 1),
(3, 'Nhóm nhạc của Nancy tan rã', '3-anh3.jpg', 'Momoland ra mắt năm 2016 nhưng thời gian gần đây hoạt động không hiệu quả. Mới đây, tất cả thành viên chấm dứt hợp đồng với công ty quản lý.', 'âccaca', '2023-01-27', 'AN', 0, 1, 1),
(4, 'Ten Hag: \'MU có thể bất bại đến hết mùa\'', '4-anh4.jpeg', 'HLV người Hà Lan tự tin rằng đội chủ sân Old Trafford có thể kết thúc mùa giải 2022/23 với thành tích bất bại trên cả 4 đấu trường.', 'CẤCCASCAS', '2023-03-16', 'BD', 0, 1, 1),
(5, 'Man United cười trên nỗi đau của Pep Guardiola', '5-anh5.jpg', 'Pep Guardiola day dứt khi thần tượng Julia Roberts không ghé thăm Man City trong chuyến đi cách đây 6 năm.', 'adadadada', '2023-03-16', 'BD', 0, 1, 1),
(6, 'Real Madrid thắng Liverpool với tổng tỷ số 6-2', '6-anh6.jpg', 'Rạng sáng 16/3 (giờ Hà Nội), Real Madrid đánh bại Liverpool với tỷ số 1-0 ở trận lượt về vòng 16 đội Champions League 2022/23 nhờ pha lập công duy nhất của Karim Benzema.', 'acdscasc', '2023-03-16', 'BD', 0, 1, 1),
(7, 'Đại Quang Minh: Đã bàn giao tạm 3 tuyến đường Thủ Thiêm từ 2018', '7-anh7.png', 'Chủ đầu tư Đại Quang Minh cho hay đã bàn giao tạm 3 tuyến đường ở khu đô thị mới Thủ Thiêm cho Sở Giao thông Vận tải TP.HCM vào năm 2018, hiện công ty muốn sớm bàn giao chính thức.', 'ávsvvav', '2023-03-16', 'BDS', 0, 1, 1),
(8, 'Hiện trạng dự án khu Mả Lạng vừa bị thu hồi tại TP.HCM', '8-anh8.jpg', 'Khu Mả Lạng trải qua hơn 20 năm có chủ trương giải tỏa và qua hai đời chủ đầu tư đến nay đã tạm dừng, nhiều người dân vẫn phải sống trong căn nhà chỉ hơn 10 m2.', 'sdvsdvsd', '2023-03-16', 'BDS', 0, 1, 1),
(9, 'Hải Phát giải thể một công ty con', '9-anh9.jpg', 'Do thay đổi định hướng đầu tư, Hải Phát Invest đã quyết định giải thể Công ty CP Đầu tư Greenland Bắc Giang chỉ sau gần 1 năm thành lập.', 'sdadad', '2023-03-14', 'BDS', 0, 1, 1),
(10, 'Chứng khoán lại giảm vì cổ phiếu bluechip', '10-anh10.jpg', 'Đà giảm của hầu hết cổ phiếu vốn hóa lớn phiên hôm nay (16/3) một lần nữa kéo tụt chỉ số chứng khoán Việt Nam xuống dưới vùng 1.050 điểm.', 'adasdad', '2023-03-16', 'CK', 0, 1, 1),
(11, 'Quảng Ngãi muốn trở thành trung tâm công nghiệp và lọc dầu', '11-anh11.jpg', 'Quy hoạch tỉnh xác định mục tiêu đến năm 2030, Quảng Ngãi là tỉnh phát triển khá của cả nước, là tỉnh công nghiệp với 2 ngành công nghiệp chủ lực là lọc hóa dầu và luyện kim thép.', 'adad', '2023-03-16', 'CK', 0, 1, 1),
(12, 'Thêm nhiều ngân hàng giảm mạnh lãi suất tiết kiệm', '12-anh12.jpg', 'Sau khi Ngân hàng Nhà nước quyết định hạ lãi suất điều hành, một số nhà băng đã nhanh chóng điều chỉnh biểu lãi suất huy động với xu hướng giảm mạnh ở nhiều kỳ hạn từ 16/3.', 'dâda', '2023-03-16', 'CK', 0, 1, 1),
(13, 'Đoàn từ thiện Tần Nguyễn mang hạnh phúc đến với trẻ em vùng cao', '13-anh13.jpg', 'Đoàn từ thiện Tần Nguyễn đã trao hơn 13.000 áo ấm cho học sinh vùng cao tại các tỉnh vùng núi miền Bắc Việt Nam như Điện Biên, Hà Giang, Lai Châu, Hòa Bình, Bắc Cạn, Cao Bằng.', 'dâddad', '2023-03-08', 'CSDD', 0, 1, 1),
(14, 'Chuyện nhà Đậu, Tô Đi Đâu tham gia \'Hành trình sống khỏe góp xanh\'', '14-anh14.jpg', 'Những ngày qua, gia đình Linh Bí, nhà Đậu, Tô Đi Đâu hay Huy Linh Tinh cùng khoe hình trồng cây kèm từ khóa “hành trình sống khỏe góp xanh” và lời kêu gọi trồng rừng đầy cảm hứng.', 'adadad', '2023-02-28', 'CSDD', 0, 1, 1),
(15, 'Brendan Fraser - từ mỹ nam xiêu lòng nữ giới đến chiến thắng ở Oscar', '15-anh15.jpg', 'Vai giáo sư Charlie to béo ở \"The Whale\" đã cứu rỗi sự nghiệp từng chạm đáy trong thời gian dài của Brendan Fraser.', 'dâdad', '2023-03-14', 'DA', 0, 1, 1),
(16, 'Nàng tiên cá da màu tiếp tục bị bàn tán', '16-anh16.jpg', 'Trailer mới nhất hé lộ những chi tiết thú vị đầu tiên về nàng tiên cá da màu của Halle Bailey trong \"The Little Mermaid\".', 'dâdadad', '2023-03-13', 'DA', 0, 1, 1),
(17, 'Trại voi Ấn Độ hút khách sau chiến thắng tại giải Oscar', '17-anh17.jpeg', 'Sau khi bộ phim \"The Elephant Whisperers\" đoạt giải Oscar, lượng lớn khách du lịch đã đổ xô đến Công viên quốc gia Mudumalai, Ấn Độ để chứng kiến tận mắt 2 nhân vật chính.', 'dâdadad', '2023-03-16', 'DL', 0, 1, 1),
(18, 'Người Việt bị sốc văn hóa tại Nhật', '18-anh18.jpg', 'Văn hóa “lạnh lùng” của người Nhật khiến cho số đông du khách nước ngoài cảm thấy bất ngờ và có những trải nghiệm không vui.', 'dâdadada', '2023-03-16', 'DL', 0, 1, 1),
(19, 'Ông chủ Shopee vừa có thêm gần 1 tỷ USD', '19-anh19.jpg', 'Tài sản ròng của Forrest Li - nhà sáng lập Sea Limited, công ty mẹ của Shopee và Garena - đã có thêm 915 triệu USD sau khi công ty công bố quý kinh doanh đầu tiên có lãi.', 'dâdada', '2023-03-08', 'DN', 0, 1, 1),
(20, '8 nữ tỷ phú giàu nhất thế giới', '20-anh20.jpg', 'Theo Forbes, người phụ nữ có tài sản lớn nhất trong danh sách cũng là tỷ phú giàu thứ 10 trên thế giới, tính đến ngày 24/2 năm nay.', 'dâdada', '2023-03-08', 'DN', 0, 1, 1),
(21, 'Stephen Curry ghi 50 điểm vẫn bất lực nhìn Warriors thua 9 trận sân khách liên tiếp', '21-anh21.jpg', 'Thất thần trên ghế dự bị, Stephen Curry nhìn vào hư không với ánh mắt đầy bất lực sau khi ghi đến 50 điểm nhưng Golden State Warriors vẫn không thể thắng.', 'ầvavavav', '2023-03-16', 'FB', 0, 1, 1),
(22, 'Thắng trận quan trọng trước Pelicans, Los Angeles Lakers tiến gần hơn đến postseason', '22-anh22.jpg', 'Los Angeles Lakers đã dùng hai hiệp đầu bùng nổ để giành chiến thắng 123-108 ngay trên sân của New Orleans Pelicans, đối thủ cạnh tranh trực tiếp trên BXH miền Tây.', 'fsafasfsaf', '2023-03-15', 'FB', 0, 1, 1),
(23, 'Chiêu lừa \'con cấp cứu\' khiến phụ huynh TP.HCM mất hơn 800 triệu đồng', '23-anh23.jpeg', 'Từ đầu tháng 3/2023 đến nay, Công an TP.HCM đã ghi nhận 14 trường hợp phụ huynh học sinh bị lừa đảo, tổng số tiền lên đến 825 triệu đồng.', 'dâfaf', '2023-03-16', 'GD', 0, 1, 1),
(24, 'Thí sinh được chọn ngoại ngữ khi thi tuyển vào lớp 10 tiếng Nhật', '24-anh24.jpg', 'Theo kế hoạch của Sở GD&ĐT Hà Nội, thí sinh đăng ký vào lớp 10 học tiếng Nhật có thể chọn một ngoại ngữ bất kỳ trong phiếu đăng ký dự tuyển lớp 10 để làm bài thi.', 'fsafafaf', '2023-03-16', 'GD', 0, 1, 1),
(26, 'Tội ác của ông bố ngoại tình', '26-anh25.jpg', 'Ngoại tình và đòi ly hôn không được, Christopher Watts sát hại người vợ đang mang thai và hai con nhỏ, phi tang xác ở bể chứa dầu thô.', 'fsafasfa', '2023-03-16', 'HS', 0, 1, 1),
(27, 'Cuộc cãi vã lộ chân tướng kẻ giết người bằng axit', '27-anh26.jpg', 'Các hướng truy tìm kẻ tạt axit khiến người phụ nữ tử vong đang vào ngõ cụt thì cảnh sát phát hiện bất thường từ cuộc cãi vã trong quá khứ.', 'fasfafa', '2023-03-15', 'HS', 0, 1, 1),
(28, 'Giá máy tính trong nước đang giảm mạnh', '28-anh27.jpg', 'Thị trường máy tính tại Việt Nam đang ở trong giai đoạn trầm lắng nhất trong nhiều năm trở lại đây, buộc các nhà sản xuất và bán lẻ phải giảm giá sâu để kích cầu.', 'fafafaf', '2023-03-10', 'MT', 0, 1, 1),
(29, 'Khắc phục hiện tượng đứng máy, giật khung hình trên Windows', '29-anh28.jpg', 'Có nhiều vấn đề liên quan đến cả phần cứng lẫn phần mềm ảnh hưởng đến hiệu năng hoạt động của máy tính. Người dùng có thể thực hiện một số điều chỉnh để cải thiện việc này.', 'gaggssgag', '2023-03-15', 'MT', 0, 1, 1),
(30, 'Trải nghiệm \'Uống cực chill - fill cảm xúc\' cùng Lương Thùy Linh', '30-anh29.jpg', 'Cuối tuần qua, người dân TP.HCM có dịp thử các thức uống được lòng giới trẻ và giao lưu cùng Miss World Vietnam 2019 Lương Thùy Linh.', 'gsdgdgs', '2023-03-15', 'NDT', 0, 1, 1),
(31, 'Trung tâm thương mại ở TP.HCM không đủ sức hút với giới trẻ', '31-anh30.jpg', 'Khi các mô hình giải trí mới ra đời và thế hệ trẻ có nhiều lựa chọn vui chơi, nhiều bạn trẻ thừa nhận không còn mặn mà với các trung tâm thương mại như trước.', 'gsgsgsg', '2023-03-03', 'NDT', 0, 1, 1),
(32, 'Tết Việt với khách Tây', '32-anh31.jpg', 'TP - Đến một đất nước xa lạ rồi chọn đó làm “ngôi nhà thứ 2” để gắn bó quả là điều không dễ dàng với nhiều người. Nhưng những “công dân Tây” mà Tiền Phong trò chuyện dịp năm mới là một ngoại lệ. Người 5 năm, người 10 năm, giờ đây họ đã xem Việt Nam như một phần máu thịt của mình.', 'gsdgsdgs', '2023-02-15', 'NVNT', 0, 1, 1),
(33, 'Nỗi nhớ Tết quê nhà', '33-anh32.jpg', 'Tết đến, xuân về là lúc những người con xa xứ mưu sinh trở về sum vầy với người thân bên bữa cơm gia đình. Thế nhưng, với du học sinh Tết đến lại là lúc chồng chất nỗi niềm, sự buồn tủi và nỗi nhớ quê hương da diết.', 'sfdfsf', '2023-02-15', 'NVNT', 0, 1, 1),
(34, 'Buộc Điện gió Cầu Đất nộp gần 1,4 tỷ đồng tiền phạt, thu lợi bất hợp pháp', '34-anh33.jpg', 'Ngoài 225 triệu đồng tiền phạt, Cty CP Năng lượng tái tạo Đại Dương phải nộp lại 1,152 tỷ đồng tiền thu lợi bất hợp pháp từ hành vi vi phạm.', 'fasfaf', '2023-03-16', 'PT', 0, 1, 1),
(35, 'Đề nghị tước danh hiệu quân nhân 14 người, khai trừ đảng 2 trường hợp', '35-anh34.jpg', 'Ủy ban Kiểm tra Quân ủy Trung ương đề nghị thi hành kỷ luật với 16 quân nhân, trong đó có 14 người bị xác định phải tước danh hiệu quân nhân do có vi phạm nghiêm trọng.', 'sfafaf', '2023-03-16', 'PT', 0, 1, 1),
(36, 'Indian Wells ngày 8: Tiafoe quật ngã Norrie, chờ Medvedev', '36-anh35.jpg', 'Tiafoe đã giành vé vào bán kết và sẽ chờ đón Medvedev ở bán kết.', 'fsafafas', '2023-03-16', 'TN', 0, 1, 1),
(37, 'Làng tennis cùng vui: Nadal và Djokovic đăng kí tham dự Masters này', '37-anh36.jpg', 'Phải chờ đợi rất lâu khán giả mới có cơ hội được chứng kiến cả Nadal và Djokovic tham dự chung giải.', 'sfsfsf', '2023-03-16', 'TN', 0, 1, 1),
(38, 'Hàng trăm người mẫu trình diễn áo dài trên phố đi bộ', '38-anh37.jpg', 'Hơn 500 người mẫu cùng dàn sao Việt trình diễn 21 bộ sưu tập của các nhà thiết kế áo dài nổi tiếng trong đêm khai mạc Lễ hội Áo dài TP.HCM lần thứ 9.', 'fsfsfsf', '2023-03-04', 'TT', 0, 1, 1),
(39, 'Đầm trễ hông và loạt trang phục táo bạo tại Oscar 2023', '39-anh38.jpg', 'Tại lễ trao giải Oscar lần thứ 95, nhiều nghệ sĩ thu hút sự chú ý khi diện trang phục gợi cảm, phom dáng độc đáo.', 'sfsfsf', '2023-03-14', 'TT', 0, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idusers` int(11) NOT NULL AUTO_INCREMENT,
  `ten` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idusers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_tintuc_binhluan` FOREIGN KEY (`idtintuc`) REFERENCES `tintuc` (`idtintuc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_binhluan` FOREIGN KEY (`idusers`) REFERENCES `users` (`idusers`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD CONSTRAINT `fk_nhomtin_loaitin` FOREIGN KEY (`idnhomtin`) REFERENCES `category` (`idnhomtin`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `fk_tintuc_loaitin` FOREIGN KEY (`idloaitin`) REFERENCES `loaitin` (`idloaitin`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
