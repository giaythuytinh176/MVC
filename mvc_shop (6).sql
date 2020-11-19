-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2020 at 08:16 PM
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
  `category_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`parent_id`, `category_name`, `description`) VALUES
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
  `img_link` int DEFAULT NULL,
  `img_list` text,
  `created` int DEFAULT NULL,
  `view` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `description` varchar(255) NOT NULL,
  `codeSUB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_product_category`
--

INSERT INTO `sub_product_category` (`ID`, `category_id`, `title`, `description`, `codeSUB`) VALUES
(1, 10, 'iPhone 11 | 11 Pro | 11 Pro Max', '', 'iphone11'),
(2, 10, 'iPhone XS | XS Max', '', 'iphonexs'),
(3, 10, 'iPhone X | XR', '', 'iphonex'),
(4, 10, 'iPhone 8 | 8 Plus', '', 'iphone8'),
(5, 10, 'iPhone 7 | 7 Plus', '', 'iphone7'),
(6, 10, 'iPhone SE 2020', '', 'iphonese'),
(7, 10, 'iPhone 12 | 12 Mini | 12 Pro | 12 Pro Max', '', 'iphone12'),
(9, 18, 'Pocophone', '', 'pocophone'),
(10, 18, 'Motorola', '', 'motorola'),
(11, 18, 'BKAV Bphone', '', 'bkav-bphone'),
(12, 18, 'Sharp', '', 'sharp'),
(13, 29, 'Air filter core', '', 'loi-loc-khong-khi'),
(14, 23, 'MacBook Air', '', 'macBook-air'),
(15, 23, 'MacBook Pro', '', 'macbook-pro'),
(16, 23, 'Mac Mini', '', 'mac-mini');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` bigint NOT NULL,
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
  ADD PRIMARY KEY (`transaction_id`);

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
  ADD PRIMARY KEY (`transaction_id`);

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
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT;

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
  MODIFY `transaction_id` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
