-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2020 at 11:40 PM
-- Server version: 8.0.22
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `ID` int NOT NULL,
  `english_Lang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `vietnamese_lang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `french_lang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`ID`, `english_Lang`, `vietnamese_lang`, `french_lang`) VALUES
(1, 'Headquarters', 'Trụ sở chính', 'Quartier général'),
(2, 'Phone', 'Số điện thoại', 'Téléphone'),
(3, 'RECENT POSTS', 'Bài viết gần đây', 'MESSAGES RÉCENTS'),
(4, 'Home', 'Trang chủ', 'Page d\'accueil'),
(5, 'We believe in <strong>cheapest</strong>, <strong>Beautiful</strong> &amp; <strong>Good price</strong>.', 'Chúng tôi tin rằng <strong>rẻ nhất</strong>, <strong>đẹp</strong> &amp; <strong>giá tốt</strong>.', 'Nous croyons au <strong>prix le moins</strong>, <strong>cher</strong> &amp; <strong>beau et bon</strong>.'),
(6, 'Welcome', 'Xin chào', 'Bienvenue'),
(7, 'Logout', 'Thoát', 'Se déconnecter'),
(8, 'Username', 'Tài khoản', 'Nom d\'utilisateur'),
(9, 'Password', 'Mật khẩu', 'Mot de passe'),
(10, 'Remember me', 'Lưu', 'Souviens-toi de moi'),
(11, 'Login', 'Đăng nhập', 'S\'identifier'),
(12, 'Forgot Password?', 'Quên mật khẩu?', 'Mot de passe oublié?'),
(13, 'Register', 'Đăng ký', 'S\'inscrire'),
(14, 'Accessories', 'Phụ kiện', 'Accessoires'),
(15, 'Latest Fashion<br>Collections', 'Bộ sưu tập <br> Thời trang Mới nhất', 'Dernières collections de mode <br>'),
(16, 'Apple accessories', 'Phụ kiện Apple', 'Accessoires Apple'),
(17, 'Screen pasting', 'Dán màn hình', 'Collage d\'écran'),
(18, 'Cases | Holster', 'Ốp lưng | Bao da', 'Cas | Étui'),
(19, 'Charging cable', 'Cáp sạc', 'Câble de charge'),
(20, 'Battery backup', 'Pin dự phòng', 'Batterie de secours'),
(21, 'Telephone', 'Điện thoại', 'Téléphone'),
(22, 'Laptop', 'Máy tính xách tay', 'Portable'),
(23, 'Mouse | Keyboard', 'Chuột | Bàn phím', 'Souris | Clavier'),
(24, 'Convenience accessories', 'Phụ kiện tiện ích', 'Accessoires pratiques'),
(25, 'Network equipment', 'Thiết bị mạng', 'Équipement réseau'),
(26, 'Smarthome', 'Nhà thông minh\r\n', 'Maison intelligente'),
(27, 'Vacuum cleaner', 'Máy hút bụi', 'aspirateur'),
(28, 'Air purifier', 'Máy lọc không khí', 'No gas filter'),
(29, 'Smart lights', 'Đèn thông minh', 'Lumières intelligentes'),
(30, 'Power socket', 'Ổ cắm điện', 'Prise de courant'),
(31, 'TV Box', 'Tivi kỹ thuật số', 'Boîte TV'),
(32, 'Healthy balance', 'Cân sức khoẻ', 'Un équilibre sain'),
(33, 'Projectors', 'Máy chiếu', 'Projecteurs'),
(34, 'Secondhand goods', 'Hàng cũ', 'Biens d\'occasion'),
(35, 'Smart lock', 'Khoá thông minh', 'Serrure intelligente'),
(36, 'Air filter core', 'Lõi lọc không khí', 'noyau de filtre à air');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `transaction_id` int NOT NULL,
  `id` int DEFAULT NULL,
  `product_id` int NOT NULL,
  `qty` int DEFAULT NULL,
  `amount` decimal(15,4) DEFAULT NULL,
  `data` text,
  `status` int DEFAULT NULL,
  `public_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `parent_id` int NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`parent_id`, `category_code`, `description`) VALUES
(1, 'accessories', ''),
(2, 'telephone', ''),
(3, 'laptop', ''),
(5, 'smarthome', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `price` decimal(15,4) DEFAULT NULL,
  `discount` int DEFAULT NULL,
  `description` text,
  `sort_order` int DEFAULT NULL,
  `is_disabled` tinyint DEFAULT NULL,
  `cart_description` text,
  `img_link` varchar(255) DEFAULT NULL,
  `img_list` text,
  `created` varchar(255) DEFAULT NULL,
  `view` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `title`, `price`, `discount`, `description`, `sort_order`, `is_disabled`, `cart_description`, `img_link`, `img_list`, `created`, `view`) VALUES
(1, 27, 'Khoá cửa vân tay Samsung SHP-DH538', '5490000.0000', NULL, 'Khoá vân tay Samsung SHP-DH538 – Độ bảo mật cao giúp gia đình bạn luôn an toàn\r\nCùng với khóa cửa vân tay Samsung SHP-DP609 thì Samsung SHP-DH538 là dòng khóa điện tử thông minh của hãng Samsung sản xuất với nhiều tính năng thông minh. Nó cung cấp nhiều phương thức mở như: mở cửa bằng vân tay, mật khẩu và chìa khóa cơ. Khoá cửa vân tay Samsung SHP-DH538 phù hợp với các dòng cửa gỗ của những chung cư hay căn hộ cao cấp.\r\n\r\nĐa phương thức mở cửa: vân tay, mã số\r\nKhoá cửa vân tay Samsung SHP-DH538 sử dụng đa phương thức mở khóa, tiện lợi cho người dùng cho ngôi nhà thông minh. Đầu tiên là công nghệ vân tay bán dẫn FPC. Đây là công nghệ nhận dạng khóa vân tay mới nhất trên thế giới được nhiều hãng công nghệ ưa chuộng như khóa vân tay trên các dòng điện thoại cao cấp iPhone, Samsung. Số lượng mã số cũng được nâng lên đến 100 vân tay giúp khóa được bảo mật tốt hơn, quản lý lượng người ra vào được nhiều hơn.\r\n\r\ncông nghệ vân tay bán dẫn \r\n\r\nNgoài ra, Samsung SHP-DH538 còn bổ sung phương thức mở khóa bằng mã số. Trên màn hình của khóa cửa vân tay Samsung SHP-DH538 cung cấp đến 12 mã số cho người sử dụng. Đặc biệt rằng, trước khi bạn nhập mã số đã được cài đặt, bạn sẽ được hướng dẫn kích hoạt hai số ngẫu nhiên. Điều này nhằm ngăn chặn việc truy xét mã số thực dựa vào những dấu vân tay được lưu lại trên màn hình cảm ứng.\r\n\r\nmở khóa bằng mã số\r\n\r\nKhông những vậy, Samsung SHP-DH538 còn được thiết kế đèn LED cảm ứng. Thuận tiện cho việc mở khóa ban đêm với bàn phím cảm ứng có đèn nền màu cam.\r\n\r\nđèn LED cảm ứng\r\n\r\nKhả năng cảnh báo hỏa hoạn và đột nhập\r\nNếu xảy ra hỏa hoạn hay nhiệt độ quanh khóa tăng lên đến hơn 65 độ, khóa cửa vân tay Samsung SHP-DH538 sẽ tự động kích hoạt rơle nhiệt và phát ra tín hiệu sáng nhấp nháy để bạn có thể định hướng lối thoát an toàn. Đồng thời chốt khóa sẽ tự động bật để nhanh chóng thoát hiểm.\r\n\r\nKhả năng cảnh báo hỏa hoạn\r\n\r\nNếu có ai đó tác động vào cửa quá mạnh hoặc nhập xác thực bằng vân tay, mã số mà không chính xác trong năm lần liên tục thì khóa cửa vân tay Samsung SHP-DH538 sẽ phát ra tín hiệu cảnh báo và tiến hành vô hiệu hóa xác thực trong khoảng ba phút để đề phòng xâm nhập trái phép.\r\n\r\nphòng xâm nhập trái phép\r\n\r\nBáo hiệu pin yếu, điều chỉnh chế độ im lặng\r\nKhi pin sắp hết, khóa cửa vân tay Samsung SHP-DH538 sẽ thông báo trên màn hình LED và âm thanh khi đó bạn cần thay pin chất lượng tốt để tiếp tục sử dụng. Trong trường hợp khóa cạn kiệt nguồn pin mà bạn lại không mang theo chìa khóa cơ thì bạn hãy có thể đi mua một cục pin 9V tại bất kì cửa hàng tiện lợi nào để để cấp nguồn cho khóa từ bên ngoài và sau đó thay pin như bình thường.\r\n\r\nBáo hiệu pin yếu\r\n\r\nNếu trong nhà bạn có một đứa con nhỏ hoặc thường xuyên ra/ vào khỏi nhà giữa đêm khuya thì bạn có thể điều chỉnh âm lượng hoặc tắt tiếng âm thanh mở cửa. Điều này nhằm mục đích giúp cho gia đình hoặc khu phố của bạn có được một giấc ngủ ngon mà không bị quấy rầy.\r\n\r\nChế độ im lặng\r\n\r\nMua khoá cửa vân tay Samsung SHP-DH538 chính hãng, giá rẻ tại CellphoneS\r\nKhoá cửa vân tay Samsung SHP-DH538 chính hãng là thiết bị gia dụng dành cho ngôi nhà mà không nên bỏ qua, đem lại cảm giác yên tâm và an toàn cho gia đình của bạn. Đây chính là khóa cửa đa năng, tiện dụng lại còn thông minh và an toàn mà bạn nên sở hữu. Còn chần chừ gì mà không mua ngay khoá cửa vân tay Samsung SHP-DH538 chính hãng tại CellphoneS với mức giá hấp dẫn và chất lượng sản phẩm tuyệt vời nhất. CellphoneS luôn đảm bảo cung cấp đến cho người dùng những sản phẩm, phụ kiện chính hãng, chất lượng, giá tốt đến người dùng để bạn có thể tin tưởng, yên tâm mua hàng tại đây.', 1, NULL, NULL, '1', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/k/h/khoa-van-tay-samsung-shp-dh538.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/u/n/unnamed_2_1.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/u/n/unnamed_1__1.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/s/h/shp-dh538_grey_6.jpg', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `sort_order` int NOT NULL,
  `parent_id` int NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `title`, `description`, `sort_order`, `parent_id`, `code`) VALUES
(1, 'Apple accessories', '', 1, 1, 'phu-kien-apple'),
(2, 'Screen pasting', '', 2, 1, 'dan-man-hinh'),
(3, 'Cases | Holster', '', 3, 1, 'op-lung-bao-da'),
(4, 'Charging cable', '', 4, 1, 'cap-sac'),
(5, 'Battery backup', '', 5, 1, 'pin-du-phong'),
(6, 'Network equipment', '', 6, 1, 'thiet-bi-mang'),
(7, 'Camera', '', 7, 1, 'camera'),
(8, 'Mouse | Keyboard', '', 8, 1, 'chuot-ban-phim'),
(9, 'Convenience accessories', '', 9, 1, 'phu-kien-tien-ich'),
(10, 'Apple', '', 10, 2, 'apple'),
(11, 'Samsung', '', 11, 2, 'samsung'),
(12, 'Xiaomi', '', 12, 2, 'xiaomi'),
(13, 'OPPO', '', 13, 2, 'oppo'),
(14, 'Nokia', '', 14, 2, 'nokia'),
(15, 'Realme', '', 15, 2, 'realme'),
(16, 'Vsmart', '', 16, 2, 'asus'),
(17, 'Huawei', '', 17, 2, 'huawei'),
(18, 'Hãng khác', '', 18, 2, 'hang-khac'),
(19, 'Vivo', '', 19, 2, 'vivo'),
(20, 'Điện thoại phổ thông', '', 20, 2, 'dien-thoai-pho-thong'),
(21, 'Tin đồn - Mới ra', '', 21, 2, 'tin-don-moi-ra'),
(22, 'Thu cũ - Đổi mới', '', 22, 2, 'thu-cu-doi-moi'),
(23, 'MacBook', '', 23, 3, 'macbook'),
(24, 'Asus', '', 24, 3, 'asus'),
(25, 'Microsoft Surface', '', 25, 3, 'microsoft-surface'),
(26, 'HP', '', 26, 3, 'hp'),
(27, 'Smart lock', '', 27, 5, 'khoa-thong-minh'),
(28, 'Vacuum cleaner', '', 28, 5, 'may-hut-bui'),
(29, 'Air purifier', '', 29, 5, 'may-loc-khong-khi'),
(30, 'Smart lights', '', 30, 5, 'den-thong-minh'),
(31, 'Power socket', '', 31, 5, 'o-cam-dien'),
(32, 'TV Box', '', 32, 5, 'tv-box'),
(33, 'Healthy balance', '', 33, 5, 'can-suc-khoe'),
(34, 'Projectors', '', 34, 5, 'may-chieu'),
(35, 'Secondhand goods', '', 35, 5, 'hang-cu');

-- --------------------------------------------------------

--
-- Table structure for table `sub_product_category`
--

CREATE TABLE `sub_product_category` (
  `ID` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(15,4) NOT NULL,
  `description` varchar(255) NOT NULL,
  `codeSUB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_product_category`
--

INSERT INTO `sub_product_category` (`ID`, `category_id`, `title`, `price`, `description`, `codeSUB`) VALUES
(1, 10, 'iPhone 11 | 11 Pro | 11 Pro Max', '15000000.0000', '', 'iphone11'),
(2, 10, 'iPhone XS | XS Max', '18000000.0000', '', 'iphonexs'),
(3, 10, 'iPhone X | XR', '10000000.0000', '', 'iphonex'),
(4, 10, 'iPhone 8 | 8 Plus', '5000000.0000', '', 'iphone8'),
(5, 10, 'iPhone 7 | 7 Plus', '3000000.0000', '', 'iphone7'),
(6, 10, 'iPhone SE 2020', '10000000.0000', '', 'iphonese'),
(7, 10, 'iPhone 12 | 12 Mini | 12 Pro | 12 Pro Max', '30000000.0000', '', 'iphone12'),
(9, 18, 'Pocophone', '4900000.0000', '', 'pocophone'),
(10, 18, 'Motorola', '3000000.0000', '', 'motorola'),
(11, 18, 'BKAV Bphone', '7000000.0000', '', 'bkav-bphone'),
(12, 18, 'Sharp', '5000000.0000', '', 'sharp'),
(13, 29, 'Air filter core', '3000000.0000', '', 'loi-loc-khong-khi'),
(14, 23, 'MacBook Air', '22000000.0000', '', 'macbook-air'),
(15, 23, 'MacBook Pro', '30000000.0000', '', 'macbook-pro'),
(16, 23, 'Mac Mini', '20000000.0000', '', 'mac-mini');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int NOT NULL,
  `user_id` int NOT NULL,
  `public_id` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  `amount` decimal(15,4) DEFAULT NULL,
  `payment` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `payment_info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `created` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int NOT NULL,
  `username` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `password` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fullname` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `remote_addr` varchar(39) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(39) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_session` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `phone`, `remote_addr`, `reg_date`, `last_login`, `last_ip`, `last_session`, `user_agent`, `last_user_agent`) VALUES
(1, 'giaythuytinh176', '$2y$10$xYIH7FhbOZ.mZBXrQ4VycOVt4ajBMO8B.EWRQL3zZRO4ShtKugVKy', 'giaythuytinh176@gmail.com', 'LE DUC TAM', 'giaythuytinh176', '::1', '2020-11-19 06:28:20', NULL, '::1', 'v913ra90cjoo1el1ft1eca9r2s', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `transaction_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `parent_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`);

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent_category` (`parent_id`);

--
-- Constraints for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  ADD CONSTRAINT `sub_product_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `order` (`transaction_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
