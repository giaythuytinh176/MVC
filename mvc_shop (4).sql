-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 10, 2020 at 11:04 AM
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
-- Stand-in structure for view `allcatesubparent`
-- (See below for the actual view)
--
CREATE TABLE `allcatesubparent` (
`spc_category_id` int
,`spc_category_sub` int
,`spc_title` varchar(255)
,`pc_category_id` int
,`pc_title` varchar(255)
,`pc_code` text
,`p_category_code` varchar(255)
,`p_category_title` varchar(255)
,`parent_id` int
,`codeSUB` varchar(255)
);

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
(10, 'Remember me', 'Lưu mật khẩu', 'Souviens-toi de moi'),
(11, 'Login', 'Đăng nhập', 'S\'identifier'),
(12, 'Forgot Password?', 'Quên mật khẩu?', 'Mot de passe oublié?'),
(13, 'Register', 'Đăng ký', 'S\'inscrire'),
(14, 'accessories', 'Phụ kiện', 'Accessoires'),
(15, 'Latest Laptop models', 'Các mẫu Laptop mới nhất', 'Derniers modèles d\'ordinateurs portables'),
(16, 'Apple accessories', 'Phụ kiện Apple', 'Accessoires Apple'),
(17, 'Screen pasting', 'Dán màn hình', 'Collage d\'écran'),
(18, 'Cases | Holster', 'Ốp lưng | Bao da', 'Cas | Étui'),
(19, 'Charging cable', 'Cáp sạc', 'Câble de charge'),
(20, 'Battery backup', 'Pin dự phòng', 'Batterie de secours'),
(21, 'telephone', 'Điện thoại', 'Téléphone'),
(22, 'laptop', 'Laptop', 'Portable'),
(23, 'Mouse | Keyboard', 'Chuột | Bàn phím', 'Souris | Clavier'),
(24, 'Convenience accessories', 'Phụ kiện tiện ích', 'Accessoires pratiques'),
(25, 'Network equipment', 'Thiết bị mạng', 'Équipement réseau'),
(26, 'smarthome', 'Nhà thông minh\r\n', 'Maison intelligente'),
(27, 'Vacuum cleaner', 'Máy hút bụi', 'aspirateur'),
(28, 'Air purifier', 'Máy lọc không khí', 'No gas filter'),
(29, 'Smart lights', 'Đèn thông minh', 'Lumières intelligentes'),
(30, 'Power socket', 'Ổ cắm điện', 'Prise de courant'),
(31, 'TV Box', 'Tivi kỹ thuật số', 'Boîte TV'),
(32, 'Healthy balance', 'Cân sức khoẻ', 'Un équilibre sain'),
(33, 'Projectors', 'Máy chiếu', 'Projecteurs'),
(34, 'Secondhand goods', 'Hàng cũ', 'Biens d\'occasion'),
(35, 'Smart lock', 'Khoá thông minh', 'Serrure intelligente'),
(36, 'Air filter core', 'Lõi lọc không khí', 'noyau de filtre à air'),
(37, 'No products.', 'Không có sản phẩm nào.', 'Aucun produit.'),
(38, 'Out of Stock', 'Hết hàng', 'En rupture de stock'),
(39, 'Fashion', 'Thời trang', 'Mode');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderNumber` int NOT NULL,
  `product_id` int NOT NULL,
  `qty` int DEFAULT NULL,
  `amount` decimal(15,4) DEFAULT NULL,
  `id` int DEFAULT NULL,
  `data` text,
  `status` int DEFAULT NULL,
  `public_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderNumber`, `product_id`, `qty`, `amount`, `id`, `data`, `status`, `public_id`) VALUES
(24, 16, 1, '31200000.0000', NULL, NULL, NULL, NULL),
(25, 16, 1, '31200000.0000', NULL, NULL, NULL, NULL),
(26, 16, 1, '31200000.0000', NULL, NULL, NULL, NULL),
(27, 13, 1, '33990000.0000', NULL, NULL, NULL, NULL),
(27, 14, 1, '46500000.0000', NULL, NULL, NULL, NULL),
(28, 16, 1, '31200000.0000', NULL, NULL, NULL, NULL),
(29, 1, 1, '5490000.0000', NULL, NULL, NULL, NULL),
(29, 13, 1, '11896500.0000', NULL, NULL, NULL, NULL),
(29, 14, 1, '46500000.0000', NULL, NULL, NULL, NULL),
(29, 15, 1, '24890000.0000', NULL, NULL, NULL, NULL),
(29, 16, 1, '31200000.0000', NULL, NULL, NULL, NULL),
(30, 1, 7, '5490000.0000', NULL, NULL, NULL, NULL),
(31, 16, 5, '31200000.0000', NULL, NULL, NULL, NULL),
(32, 16, 11, '31200000.0000', NULL, NULL, NULL, NULL),
(33, 1, 7, '5490000.0000', NULL, NULL, NULL, NULL),
(34, 1, 6, '5490000.0000', NULL, NULL, NULL, NULL),
(34, 14, 9, '46500000.0000', NULL, NULL, NULL, NULL),
(34, 16, 5, '31200000.0000', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderNumber` int NOT NULL,
  `user_id` int NOT NULL,
  `orderDate` datetime NOT NULL,
  `shippedDate` date DEFAULT NULL,
  `status` int DEFAULT NULL,
  `public_id` int DEFAULT NULL,
  `amount` decimal(15,4) DEFAULT NULL,
  `payment` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `payment_info` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderNumber`, `user_id`, `orderDate`, `shippedDate`, `status`, `public_id`, `amount`, `payment`, `payment_info`) VALUES
(24, 1, '2020-12-09 11:55:04', NULL, NULL, NULL, NULL, NULL, NULL),
(25, 1, '2020-12-09 11:56:15', NULL, NULL, NULL, NULL, NULL, NULL),
(26, 1, '2020-12-09 15:46:05', NULL, NULL, NULL, NULL, NULL, NULL),
(27, 1, '2020-12-09 16:18:16', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 1, '2020-12-10 04:31:11', NULL, NULL, NULL, NULL, NULL, NULL),
(29, 1, '2020-12-10 12:11:03', NULL, NULL, NULL, NULL, NULL, NULL),
(30, 1, '2020-12-10 12:23:26', NULL, NULL, NULL, NULL, NULL, NULL),
(31, 4, '2020-12-10 12:36:42', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 1, '2020-12-10 16:46:16', NULL, NULL, NULL, NULL, NULL, NULL),
(33, 1, '2020-12-10 16:47:16', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 1, '2020-12-10 17:44:53', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `parent_id` int NOT NULL,
  `category_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category_title` varchar(255) NOT NULL,
  `orderParent` int NOT NULL,
  `is_disabled` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`parent_id`, `category_code`, `category_title`, `orderParent`, `is_disabled`) VALUES
(1, 'phu-kien', 'Accessories', 4, 1),
(2, 'dien-thoai', 'Telephone', 2, 0),
(3, 'may-tinh-xach-tay', 'Laptop', 1, 0),
(5, 'nha-thong-minh', 'SmartHome', 3, 0),
(11, 'sim-the', 'Sim card', 5, 1),
(12, 'dong-ho-thong-minh', 'SmartWatch', 6, 1),
(13, 'may-tinh-bang', 'Tablet', 7, 0),
(15, 'am-thanh', 'Sound', 8, 1),
(18, 'thoi-trang', 'Fashion', 9, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `category_id` int NOT NULL,
  `category_sub` int DEFAULT NULL,
  `ProductName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Stock` int DEFAULT NULL,
  `price` decimal(15,4) DEFAULT NULL,
  `discount` int DEFAULT '0',
  `description` text,
  `sort_order` int DEFAULT NULL,
  `is_disabled` tinyint DEFAULT '0',
  `cart_description` text,
  `img_link` varchar(255) DEFAULT NULL,
  `img_list` text,
  `created` varchar(255) DEFAULT NULL,
  `view` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `category_sub`, `ProductName`, `Stock`, `price`, `discount`, `description`, `sort_order`, `is_disabled`, `cart_description`, `img_link`, `img_list`, `created`, `view`) VALUES
(1, 27, NULL, 'Khoá cửa vân tay Samsung SHP-DH53812', 5555, '5490000.0000', 77, '<h3>Khoá vân tay Samsung SHP-DH538 – Độ bảo mật cao giúp gia đình bạn luôn an toàn\r\n</h3>\r\n<p>Cùng với khóa cửa vân tay Samsung SHP-DP609 thì Samsung SHP-DH538 là dòng khóa điện tử thông minh của hãng Samsung sản xuất với nhiều tính năng thông minh. Nó cung cấp nhiều phương thức mở như: mở cửa bằng vân tay, mật khẩu và chìa khóa cơ. Khoá cửa vân tay Samsung SHP-DH538 phù hợp với các dòng cửa gỗ của những chung cư hay căn hộ cao cấp.\r\n</p>', 1, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://lionlock.vn/wp-content/uploads/2019/06/khoa-SHP-DH538.jpg', 'https://lionlock.vn/wp-content/uploads/2019/06/khoa-SHP-DH538.jpg\r\nhttps://lionlock.vn/wp-content/uploads/2019/06/khoa-van-tay-SHP-DH538.jpg\r\nhttps://lionlock.vn/wp-content/uploads/2019/06/khoa-van-tay-samsung-SHP-DH538.jpg', NULL, 0),
(2, 24, NULL, 'Laptop ASUS ZenBook Duo UX481FL-BM049T', 1, '35190000.0000', 56, '<h3>Laptop Asus Zenbook UX481FL-BM049T–vẻ đẹp đổi mới và tốc độ nhanh đẳng cấp</h3> \r\n<p>là chiếc máy tính xách tay siêu mỏng nhỏ gọn được Asus tích hợp màn hình cảm ứng FHD 12.6 inch thiết kế đa nhiệm cực tốt được ra mắt trong thời gian gần đây. Chiếc laptop Asus sở hữu thiết kế thời trang, sang trọng và một cấu hình mạnh mẽ, sẵn sàng đáp ứng mọi nhu cầu làm việc.</p>', 2, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/_/0/_0004_asus-zenbook-duo-ux481fl-bm049t.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/_/0/_0004_asus-zenbook-duo-ux481fl-bm049t.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/_/0/_0000_asus-zenbook-duo-ux481fl-bm049t_1_.jpg', NULL, 0),
(3, 30, NULL, 'Đèn bàn Pisen Led chargeable lamp(PKTM.024)', 2, '222000.0000', 51, '<h3>Đèn Pisen Led chargeable lamp: Đèn Led cảm ứng và thiết kế bắt mắt</h3>\r\n<p>Trong công việc hay cuộc sống học tập của học sinh, sinh viên thì một chiếc đèn bàn có lẽ là thứ gắn bó và quan trọng nhất ảnh hưởng đến sự hiệu quả. Một chiếc đèn bàn tốt có thể giúp dễ dàng hơn trong công việc, bảo vệ sức khỏe mắt cũng như là vật trang trí trên chiếc tủ, bàn thật đẹp. Nắm bắt được nhu cầu ấy, thương hiệu Pisen đã tạo ra dòng sản phẩm phụ kiện gia dụng thông minh mới đó chính là đèn Pisen Led chargeable lamp nhằm đáp ứng và cải thiện cuộc sống cho mọi người. Với lối thiết kế cực kỳ hiện đại, màu sắc và có khả năng uốn cong mọi góc sẽ khiến bạn trầm trồ. Đi kèm với đó là nút cảm ứng cho thấy công nghệ cực kỳ cao cấp mà nhà sản xuất trang bị cho nó. </p>', 3, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/pisenledchargeabledesklampwithusb_1923.png', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/i/pisenledchargeabledesklampwithusb_1923.png\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/h/t/htb1nrxmcprguurjy0feq6xcbfxaf.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/p/i/pisenledchargeabledesklampwithusb_1923.png', NULL, 0),
(4, 16, NULL, 'Vsmart Active 3 6GB Ram', 0, '3590000.0000', 0, '<h3>Vsmart Active 3 - Điện thoại giá rẻ thương hiệu Việt</h3>\r\n<p>Vsmart thuộc tập đoàn Vingroup là dòng điện thoại thương hiệu Việt đang ngày càng được đông đảo người dân quan tâm. Mới đây, hãng tiếp tục giới thiệu thêm nhiều mẫu smartphone mới như Vsmart  Live 3, Vsmart  Star 3... và Vsmart Active 3. Trong đó, Active 3 mang trong mình nhiều tính năng và cấu hình cao với mức giá vô cùng tốt.</p>', 4, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/v/s/vsmart-active-3_2_.png', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/v/s/vsmart-active-3_2_.png\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/v/s/vsmart-active-3_4_.png', NULL, 0),
(5, 24, NULL, 'Laptop ASUS Gaming ROG Zephyrus GA502IV-AZ033T', 200, '34950000.0000', 50, '<h4>CHUẨN MỰC MỚI VỀ LAPTOP GAMING SIÊU MỎNG </h4>\r\n<p>Zephyrus G15 GA502IV-AZ033T định nghĩa lại khả năng chơi game với dòng Laptop siêu mỏng. Thiết kế mới giúp giải phóng tiềm năng thực sự của AMD® Ryzen™ 7 và GPU GeForce® RTX 2060 . Kết hợp với màn hình hỗ trợ tân số quét 144Hz / 3ms chuẩn mực PANTONE®.</p>', 5, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-zephyrus-g15-ram-16gb_2_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-zephyrus-g15-ram-16gb_2_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/laptop-asus-gaming-rog-zephyrus-g15-ram-16gb_1_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/laptop-asus-gaming-rog-zephyrus-g15-ram-16gb_2_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/thumbnail/115x/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-zephyrus-g15-ram-16gb_3_.jpg', NULL, 0),
(6, 24, NULL, 'Laptop ASUS Gaming ROG Zephyrus GA401II-HE154T', 100, '32450000.0000', 30, '<h3>Laptop ASUS Gaming ROG Zephyrus GA401II - Cấu hình mạnh mẽ trong thiết kế gọn gàng</h3>\r\n<p>Không chỉ dừng lại ở các thế hệ laptop gaming đa dạng ở tầm trung, Asus còn cho ra mắt một thế hệ laptop cực kỳ mạnh mẽ đại diện cho phân khúc cao cấp. Laptop ASUS Gaming ROG Zephyrus GA401II là một trong những cái tên đáng được bạn cân nhắc trong quá trình sử dụng.</p>', 6, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-zephyrus-g14-ga401ii_1_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-zephyrus-g14-ga401ii_1_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/laptop-asus-gaming-rog-zephyrus-g14-ga401ii_5_.jpg', NULL, 0),
(7, 24, NULL, 'Laptop ASUS TUF Gaming FA506IV-HN202T', 5, '30250000.0000', 89, '<h3>Laptop Asus TUF Gaming FA506IV mạnh mẽ vượt trội, chiến mọi tựa game</h3>\r\n<p>Khi nói tới laptop gaming mọi người sẽ hình dung ra ngay những cỗ máy siêu nặng, siêu to và vô cùng thô cứng. Nhưng với laptop Asus TUF Gaming FA506IV sẽ khiến bạn thay đổi hoàn toàn cách nhìn vào dòng laptop chơi game này. Được thiết kế gọn, cấu hình mạnh mẽ cùng những trang bị tối tân nhất, đây là một trong những chiếc laptop mà giới game thủ không thể bỏ qua.</p>', 7, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/_/0/_0000_asus-tuf-gaming-a15-fa506iv-hn202t_2b6b0be8584649ff9e2627629295d082_grande.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/_/0/_0000_asus-tuf-gaming-a15-fa506iv-hn202t_2b6b0be8584649ff9e2627629295d082_grande.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/_/0/_0002_asus-tuf-gaming-a15-fa506iv-hn202t-r7-4800h_3_18468113329a4f3889331337eea6d4ae_grande.jpg', NULL, 0),
(8, 24, NULL, 'Laptop ASUS Gaming ROG Strix G512L-UHN145T', -5, '29850000.0000', 22, '<span style=\"font-size: 12pt; color: #000000;\"><strong>Strix G15 G512L-UHN145T</strong>&nbsp;là hiện thân của phong cách thiết kế tối giản, mang đến trải nghiệm cốt lõi mãnh liệt nhất. Dư sức để chiến những tựa game nặng kí và xử lý đa nhiệm cùng&nbsp;<strong>Windows 10</strong>.&nbsp;</span>', 8, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-strix-g512-i7-vga-6gb_2_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-strix-g512-i7-vga-6gb_2_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/laptop-asus-gaming-rog-strix-g512-i7-vga-6gb_3_.jpg', NULL, 0),
(9, 24, NULL, 'Laptop ASUS Gaming ROG Zephyrus GA502IU-AL007T', NULL, '27450000.0000', 0, 'SẮP VỀ HÀNG', 9, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/350x/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop_asus_gaming_rog_zephyrus_ga502iu-al007t_0003_layer_2.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/350x/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop_asus_gaming_rog_zephyrus_ga502iu-al007t_0003_layer_2.jpg', NULL, 0),
(10, 24, NULL, 'Laptop ASUS ZenBook Duo UX481FL-BM048T', 1, '27190000.0000', 5, '<h3>Laptop Asus ZenBook UX481FL-BM048T - Chiếc máy tính xách tay của tương lai</h3>\r\n<p>ZenBook chính là dòng máy tính xách tay cao cấp nhà Asus, Asus ZenBook UX481FL BM048T đương nhiên không nằm ngoài thực tế đó. Với các thành phần mạnh mẽ đi kèm và thiết lập 2 màn hình độc đáo hứa hẹn sẽ tận dụng đầy đủ sức mạnh sáng tạo của bạn khi làm việc.</p>', 10, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/4/9/49030_asus_zenbook_ux481fl_bm048_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/4/9/49030_asus_zenbook_ux481fl_bm048_.jpg', NULL, 0),
(11, 24, NULL, 'Laptop ASUS Gaming ROG Strix G512-IAL001T', NULL, '26450000.0000', 0, 'SẮP VỀ HÀNG', 11, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-strix-g512-i7_6_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-gaming-rog-strix-g512-i7_6_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/laptop-asus-gaming-rog-strix-g512-i7_3_.jpg', NULL, 0),
(12, 24, NULL, 'Laptop ASUS TUF Gaming FA706IU-H7133T', 222, '25850000.0000', 0, '<h3>Laptop ASUS TUF Gaming FA706IU - Bước tiến mới trong dòng laptop gaming</h3>\r\n<p>Asus là một trong những hãng sản xuất laptop đi đầu trên thế giới với việc tối ưu hóa hiệu năng một chiếc laptop rất cao laptop ASUS TUF Gaming FA706IU là một trong những sản phẩm nổi bật của hãng khi thiết kế hiệu năng với dòng chip AMD cực kỳ mạnh mẽ phù hợp nhiều nhu cầu.</p>', 12, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-tuf-gaming-a17-fa706iu_1_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/a/laptop-asus-tuf-gaming-a17-fa706iu_1_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/l/a/laptop-asus-tuf-gaming-a17-fa706iu_5_.jpg', NULL, 0),
(13, 23, 15, 'Apple Macbook Pro 13 Touch Bar i5 1.4 256GB 2020 Chính Hãng Apple Việt Nam ', 22, '33990000.0000', 65, '<h3>Macbook Pro 13 Touch Bar 2020 chính hãng – Siêu phẩm tiếp theo sở hữu nhiều nâng cấp thú vị</h3>\r\n<p>Thế hệ Macbook Pro 13 2020 đã được ra mắt với nâng cấp mạnh mẽ về cấu hình. Máy vẫn giữ nguyên thừa hưởng những ưu điểm đặc trưng như màn hình siêu nét, thiết kế cao cấp cùng thanh Touch Bar cho khả năng tương tác tuyệt vời với các ứng dụng. Laptop hứa hẹn sẽ đem lại cho Apple những lời khen.</p>', 13, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/b/mbp13touch-space-select-202005.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/b/mbp13touch-space-select-202005.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/m/a/macbook_pro_13_2020_0001_4_1.jpg', NULL, 0),
(14, 23, 15, 'Apple Macbook Pro 13 Touch Bar i5 2.0 512GB 2020 Chính Hãng Apple Việt Nam ', 33, '46500000.0000', 0, '<h3>Macbook Pro 13 inch 2020 (MXK32/ MXK62)</h3>\r\n<p>MXK32 và MXK62 có thể trở thành chiếc MacBook quốc dân trong tương lai, với cấu hình cơ bản đủ dùng, chiếc MacBook này sẽ đáp ứng được tất cả các nhu cầu văn phòng cơ bản như soạn thảo văn bản, trình chiếu các nội dung,… cho tới các tác vụ đồ họa cơ bản như: photoshop, lightroom,…</p>', 14, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/b/mbp13touch-space-select-202005_2.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/b/mbp13touch-space-select-202005_2.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/m/a/macbook_pro_13_2020_0003_2.jpg', NULL, 0),
(15, 23, 14, 'Apple MacBook Air 13 256GB 2020 Chính Hãng Apple Việt Nam', 22, '24890000.0000', 0, '<h3>MacBook Air 13 2020 – Thiết kế nhỏ gọn, cấu hình mạnh mẽ</h3>\r\n<p>Macbook của Apple với cấu hình mạnh luôn được người dùng chào đón. Phiên bản MacBook Air năm 2020 cũng không ngoại lệ. MacBook Air 13 2020 sở hữu thiết kế đẹp mắt cùng cấu hình cực khỏe với nhiều tính năng hấp dẫn. Chiếc laptop mỏng nhẹ, cấu hình cao này hứa hẹn sẽ mang lại những trải nghiệm ấn tượng.</p>', 15, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/a/macbook-air-gold-select-201810.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/a/macbook-air-gold-select-201810.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/m/a/mac_air_13_2020_bac4.jpg', NULL, 0),
(16, 10, 1, 'iPhone 11 Pro Max 256GB Chính hãng(VN/A)', 11, '31200000.0000', 15, '<h2>I. Đặc điểm nổi bật của iPhone 11 Pro Max</h2>\r\n<h3>1. Thiết kế đẳng cấp</h3>\r\n<p>iPhone 11 Pro Max đã được ra mắt vào ngày 11/09/2019 vừa qua. Với ngôn ngữ thiết kế không có nhiều thay đổi so với iPhone Xs và iPhone Xs Max. Duy chỉ có logo Apple thì được đặt ở chính giữa mặt sau của máy. Máy vẫn được bọc bởi lớp thép không gỉ. Mặt lưng là cả một tấm kính duy nhất là kính nhám chứ không phải bóng như trên iPhone Xs và Xs Max. iPhone 11 Pro có 4 màu sắc được Apple cho ra mắt: Midnight Green, Space Gray, Silver, Gold.\r\n</p>\r\n', 16, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-11-pro-max_1__2.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-11-pro-max_1__2.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-11-pro-max_4__2.jpg', NULL, 0),
(17, 10, 5, 'Apple iPhone 7 Plus 128GB Chính hãng(Mã VN/A)', NULL, '9790000.0000', 5, 'Chưa có thông tin.', 17, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-7-plus_5_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-7-plus_5_.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-7-plus_4_.jpg', NULL, 0),
(18, 25, NULL, 'Surface Pro 7 Core i5 / 8GB / 128GB Chính Hãng', 55, '20500000.0000', 1, '<h3>Laptop Surface Pro 7 128GB chính hãng – Phù hợp công việc và giải trí cơ bản</h3>\r\n<p>\r\nHàng nhập khẩu chính hãng bởi nhà phân phối, đầy đủ chứng từ nguồn gốc xuất xứ, giá đã bao gồm thuế VAT. Bảo hành đổi mới 30 ngày tại CellphoneS và 12 tháng bởi nhà phân phối.\r\n</p>', 18, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/u/surface-pro-7__0003_13.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/s/u/surface-pro-7__0003_13.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/s/u/surface-pro-7__0000_16.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/s/u/surface-pro-7__0003_13.jpg', NULL, 0),
(21, 10, 7, 'iPhone 12 Chính Hãng (VN/A)', NULL, '22590000.0000', 1, '<h3>Điện thoại iPhone 12 - \"Siêu phẩm\" iPhone khẳng định đẳng cấp\r\n</h3>\r\n<p>Trong khi sức hút đến từ bộ ba iPhone 11 vẫn chưa nguội đi, hãng Apple vừa qua đã cho ra mắt \"siêu phẩm\" mới nhất 2020 mang tên iPhone 12. Với những nâng cấp đáng kể cho màn hình và hiệu năng, đây sẽ là smartphone thuộc phân khúc cao cấp đáng chú ý trong năm nay.\r\n</p>\r\n', 19, 0, '<div>* Giảm thêm tới 1% cho thành viên Smember</div>\r\n<div>* Thu cũ đổi mới -  Trợ giá tốt nhất</div>\r\n <div>Mua Balo - Túi chống sốc Laptop giá chỉ từ 200K</div>', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-mini-blue-select-2020_2.png', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-mini-blue-select-2020_2.png\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/iphone-12-mini-blue-select-2020_2.png\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-12-mini-black-select-2020_2.png\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-12-mini-white-select-2020_2.png\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/iphone-12-mini-green-select-2020_1.png', NULL, 0),
(22, 40, NULL, 'Apple Watch Series 3 38mm GPS viền nhôm dây cao su', NULL, '4890000.0000', 0, ' <h2>Apple Watch Series 3 38mm GPS - viền nhôm dây cao su bền bỉ</h2>\n<p>Đồng hồ thông minh Apple Watch ngày càng được sử dụng phổ biến. Tuy nhiên, Apple Watch Series 3 38mm GPS có rất nhiều phiên bản viền và dây đeo khác nhau. Phiên bản đồng hồ Apple Watch Series 3 38mm GPS viền nhôm dây cao su có điểm gì nổi bật?</p>\n\n<h3>Viền nhôm sang trọng – dây cao su bền bỉ</h3>\n<p>Apple Watch Series 3 38mm GPS được thiết kế với khung viền nhôm sang trọng. Khung nhôm cứng cáp, được làm nhám mờ hạn chế bám mồ hôi, vân tay giúp đồng hồ luôn sạch sẽ.</p>', NULL, 0, NULL, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/h/photo_2019-05-27_17-20-431_1_1_.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/h/photo_2019-05-27_17-20-431_1_1_.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/4/2/42-alu-silver-sport-white-nc-s3-gallery2_2_1.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/4/2/42-alu-silver-sport-white-nc-s3-gallery1_2_5.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/4/2/42-alu-space-nike-anth-black-nc-gallery2_geo_us_2.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/4/2/42-alu-space-nike-anth-black-nc-gallery1_geo_us_2.jpg', NULL, 0),
(23, 41, NULL, 'Samsung Galaxy Watch Active 2', NULL, '5500000.0000', 0, '<h3>Đồng hồ thông minh Galaxy Watch Active 2: Thiết kế thời trang, giải pháp theo dõi sức khỏe tuyệt vời</h3>\n<p>Galaxy Watch Active 2 là thế hệ thứ 2 của dòng đồng hồ Active đến từ Samsung. Sản phẩm là một bản nâng cấp hoàn hảo so với người tiền nhiệm khi được trang bị và cải tiến nhiều công nghệ hiện đại, phục vụ tối ưu cho nhu cầu sử dụng của người dùng. Ngoài ra bạn cũng có thể tham khảo thêm đồng hồ thông minh Samsung Galaxy Watch 3 mới nhất, sắp được lên kệ tại Cellphones. \n</p>\n', NULL, 0, NULL, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/5/1565204800_1491590.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/1/5/1565204800_1491590.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/1/5/1565204800_1491588.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/1/5/1565204800_1491589.jpg\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/1/5/1565204800_1491590.jpg', NULL, 0),
(25, 38, NULL, 'Apple iPad Pro 11 2020 Wi-Fi 128GB Chính Hãng Apple Việt Nam', 0, '20490000.0000', 0, '<h3>iPad Pro 11  – Sự nâng cấp đáng giá sau hai năm</h3>\r\n<p>Bắt đầu được giới thiệu từ lần đầu vào năm 2015, iPad Pro là dòng tablet cao cấp nhất của Apple. Ở phiên bản 2018, iPad Pro đã sở hữu màn hình viền mỏng cùng hệ thống nhận diện khuôn mặt Face ID. Cho đến hai năm sau, Apple cho ra mắt iPad Pro 11 WiFi 2020 128gb được nâng cấp mạnh mẽ hơn về hiệu năng và camera.</p>', NULL, 0, NULL, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/ipad-pro-11-select-cell-silver-202003-removebg-preview.png.jpg', 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/ipad-pro-11-select-cell-silver-202003-removebg-preview.png.jpg\r\nhttps://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/1000x/040ec09b1e35df139433887a97daa66f/i/p/ipad-pro-11-select-cell-spacegray-202003-removebg-preview.png.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `sort_order` int NOT NULL,
  `parent_id` int NOT NULL,
  `code` text NOT NULL,
  `is_disabled_brand` int NOT NULL DEFAULT '0',
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `title`, `sort_order`, `parent_id`, `code`, `is_disabled_brand`, `img`) VALUES
(1, 'Apple accessories', 1, 1, 'phu-kien-apple', 0, 'http://localhost/MVC_shop_test/src/views/pages/index/images/phukien.jpg'),
(2, 'Screen pasting', 2, 1, 'dan-man-hinh', 0, 'http://localhost/MVC_shop_test/src/views/pages/index/images/danmanhinh.jpg'),
(3, 'Cases | Holster', 3, 1, 'op-lung-bao-da', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/o/p/op-lung-chong-soc-cho-iphone-11-pro-max-gear4-d3o-2265.jpg'),
(4, 'Charging cable', 4, 1, 'cap-sac', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/2/0/200914_114233_12345.png'),
(5, 'Battery backup', 5, 1, 'pin-du-phong', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/3/1/3136d45580637b3d2272_copy.png'),
(6, 'Network equipment', 6, 1, 'thiet-bi-mang', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/a/7/a720r-1-1000x1000.png'),
(7, 'Camera', 7, 1, 'may-anh', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/c/a/camera-gopro-hero-9-anh-san-pham-5-500x500.jpg'),
(8, 'Mouse | Keyboard', 8, 1, 'chuot-ban-phim', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/m/a/magic-keyboard-2-5.jpg'),
(9, 'Convenience accessories', 9, 1, 'phu-kien-tien-ich', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/6/b/6b03aa32303f634163ce7967325b7429_2.jpg'),
(10, 'Apple', 10, 2, 'apple', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/p/h/photo_2020-10-13_22-12-24.jpg_1_2.png'),
(11, 'Samsung', 11, 2, 'samsung', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/b/l/black_final.jpg'),
(12, 'Xiaomi', 12, 2, 'xiaomi', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi-mi-10t-pro_2_.jpg'),
(13, 'OPPO', 13, 2, 'oppo', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/_/0/_0003_combo_-_reno4_-_blue_-_full_check.jpg'),
(14, 'Nokia', 14, 2, 'nokia', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/n/o/nokia-2.4_1_.jpg'),
(15, 'Realme', 15, 2, 'realme', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/6/3/637400868092278961_realme-c15-xanh-1_2.png'),
(16, 'Vsmart', 16, 2, 'vsmart', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/v/s/vsmart-active-3_2_.png'),
(17, 'Huawei', 17, 2, 'huawei', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/r/o/rog_3.jpg'),
(18, 'Hãng khác', 18, 2, 'hang-khac', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/v/i/vivo-y30-_3.png'),
(19, 'Vivo', 19, 2, 'vivo', 0, NULL),
(20, 'Điện thoại phổ thông', 20, 2, 'dien-thoai-pho-thong', 0, NULL),
(21, 'Tin đồn - Mới ra', 21, 2, 'tin-don-moi-ra', 0, NULL),
(22, 'Thu cũ - Đổi mới', 22, 2, 'thu-cu-doi-moi', 0, NULL),
(23, 'MacBook', 23, 3, 'macbook', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/220x175/9df78eab33525d08d6e5fb8d27136e95/m/a/macbook-air-gold-select-201810_4.jpg'),
(24, 'Asus', 24, 3, 'asus', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/350x/9df78eab33525d08d6e5fb8d27136e95/_/0/_0004_asus-zenbook-duo-ux481fl-bm049t.jpg'),
(25, 'Microsoft Surface', 25, 3, 'microsoft-surface', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/thumbnail/115x/9df78eab33525d08d6e5fb8d27136e95/s/u/surface-pro-7__0000_16.jpg'),
(26, 'HP', 26, 3, 'hp', 0, NULL),
(27, 'Smart lock', 27, 5, 'khoa-thong-minh', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/small_image/350x/9df78eab33525d08d6e5fb8d27136e95/k/h/khoa-van-tay-samsung-shp-dh538.jpg'),
(28, 'Vacuum cleaner', 28, 5, 'may-hut-bui', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/x/i/xiaomi-pro-styj02ym-mijia-mi-robot-vacuum-mop-p-sweeping-cleaner-2-lds-radar-app-control.jpg_q50.jpg'),
(29, 'Air purifier', 29, 5, 'may-loc-khong-khi', 0, NULL),
(30, 'Smart lights', 30, 5, 'den-thong-minh', 0, NULL),
(31, 'Power socket', 31, 5, 'o-cam-dien', 0, NULL),
(32, 'TV Box', 32, 5, 'tv-box', 0, NULL),
(33, 'Healthy balance', 33, 5, 'can-suc-khoe', 0, NULL),
(34, 'Projectors', 34, 5, 'may-chieu', 0, NULL),
(35, 'Secondhand goods', 35, 5, 'hang-cu', 0, NULL),
(38, 'iPad Pro', 36, 13, 'ipad-pro', 0, 'https://cdn.cellphones.com.vn/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/i/p/ipad-pro-11-select-cell-silver-202003-removebg-preview.png.jpg'),
(40, 'Apple Watch', 37, 12, 'apple-watch', 0, NULL),
(41, 'Samsung', 38, 12, 'samsung', 0, NULL),
(43, 'Garmin', 39, 12, 'garmin', 0, NULL),
(44, 'Xiaomi', 40, 12, 'xiaomi', 0, NULL),
(45, 'Amazfit', 41, 12, 'amazfit', 0, NULL),
(46, 'Huawei', 42, 12, 'huawei', 0, NULL),
(47, 'Fitbit', 43, 12, 'fitbit', 0, NULL),
(48, 'Vòng tay thông minh', 44, 12, 'vong-tay-thong-minh', 0, NULL),
(49, 'Đồng hồ định vị trẻ em', 45, 12, 'dong-ho-dinh-vi-tre-em', 0, NULL),
(50, 'Dây đeo đồng hồ', 46, 12, 'day-deo-dong-ho', 0, NULL),
(51, 'Loa', 47, 15, 'loa', 0, NULL),
(52, 'Tai nghe', 48, 15, 'am-thanh', 0, NULL),
(58, 'Áo', 49, 18, 'ao', 0, 'https://3.imimg.com/data3/YF/ID/GLADMIN-136167/mens-round-neck-t-shirt-250x250.jpg'),
(59, 'Shoes', 50, 18, 'shoes', 0, 'https://assets.myntassets.com/f_webp,dpr_2.0,q_60,w_210,c_limit,fl_progressive/assets/images/11352136/2020/3/3/c024d2cc-30e5-4ac9-8de5-72a8824bdeb21583225192893-ADIDAS-Men-Blue--Black-Throb-Woven-Design-Running-Shoes-4601-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_product_category`
--

CREATE TABLE `sub_product_category` (
  `category_sub` int NOT NULL,
  `category_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `descriptionSUB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '',
  `codeSUB` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_disabled_sub` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_product_category`
--

INSERT INTO `sub_product_category` (`category_sub`, `category_id`, `title`, `descriptionSUB`, `codeSUB`, `is_disabled_sub`) VALUES
(1, 10, 'iPhone 11 | 11 Pro | 11 Pro Max', '', 'iphone11', 0),
(2, 10, 'iPhone XS | XS Max', '', 'iphonexs', 0),
(3, 10, 'iPhone X | XR', '', 'iphonex', 0),
(4, 10, 'iPhone 8 | 8 Plus', '', 'iphone8', 0),
(5, 10, 'iPhone 7 | 7 Plus', '', 'iphone7', 0),
(6, 10, 'iPhone SE 2020', '', 'iphonese', 0),
(7, 10, 'iPhone 12 | 12 Mini | 12 Pro | 12 Pro Max', '', 'iphone12', 0),
(9, 18, 'Pocophone', '', 'pocophone', 0),
(10, 18, 'Motorola', '', 'motorola', 0),
(11, 18, 'BKAV Bphone', '', 'bkav-bphone', 0),
(12, 18, 'Sharp', '', 'sharp', 0),
(13, 29, 'Air filter core', '', 'loi-loc-khong-khi', 0),
(14, 23, 'MacBook Air', '', 'macbook-air', 0),
(15, 23, 'MacBook Pro', '', 'macbook-pro', 0),
(16, 23, 'Mac Mini', '', 'mac-mini', 0),
(22, 51, 'Loa vi tính', '', 'loa-vi-tinh', 0),
(23, 51, 'Loa bluetooth', '', 'loa-bluetooth', 0),
(24, 51, 'Loa kéo', '', 'loa-keo', 0),
(25, 51, 'Loa Tivi', '', 'loa-tivi', 0),
(26, 51, 'Soundbar', '', 'sound-bar', 0),
(27, 52, 'Tai nghe không dây', '', 'tai-nghe-khong-day', 0),
(28, 52, 'Tai nghe bluetooth', '', 'tai-nghe-bluetooth', 0);

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
  `address` varchar(255) DEFAULT NULL,
  `remote_addr` varchar(39) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `last_ip` varchar(39) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_session` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `last_user_agent` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `is_admin` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `fullname`, `phone`, `address`, `remote_addr`, `reg_date`, `last_login`, `last_ip`, `last_session`, `user_agent`, `last_user_agent`, `is_admin`) VALUES
(1, 'giaythuytinh176', '$2y$10$xYIH7FhbOZ.mZBXrQ4VycOVt4ajBMO8B.EWRQL3zZRO4ShtKugVKy', 'giaythuytinh176@gmail.com', 'Tam LE', '0979029556', 'hn ', '::1', '2020-11-19 06:28:20', NULL, '::1', 'chon631lt72f3acakqb25oe7o4', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.198 Safari/537.36', NULL, '1'),
(4, 'gtt176', '$2y$10$9v.KBpM.zE3nApPDgwFfLej8PAyA9S8xSpCo4FiiVvNudZ1sAMUju', 'giaythuytinh176@hotmail.com', 'Tam LE', '0979029556', 'HN ', '::1', '2020-12-10 12:36:12', NULL, '::1', 'chon631lt72f3acakqb25oe7o4', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', NULL, '0'),
(5, 'abcde', '$2y$10$W5Hvb6njhGx/Z7IorPVtDenfHEXyvviYCejPGtVyglISNZZOT68pm', 'giaythuytinh176@live.com', 'tam le', '0979029556', NULL, '::1', '2020-12-10 16:41:08', NULL, '::1', 'chon631lt72f3acakqb25oe7o4', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_0_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36', NULL, '0');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_parentproduct_productcategory_subcategory`
-- (See below for the actual view)
--
CREATE TABLE `view_parentproduct_productcategory_subcategory` (
`product_id` int
,`ProductName` varchar(255)
,`category_id` int
,`category_parent` varchar(255)
,`parent_title` varchar(255)
,`category_title` varchar(255)
,`parent_id` int
,`category_sub` int
,`is_disabled` tinyint
,`sort_order` int
,`Stock` int
,`price` decimal(15,4)
,`discount` int
,`description` text
,`img_link` varchar(255)
,`img_list` text
,`pc_code` text
,`spc_codeSUB` varchar(255)
,`spc_title` varchar(255)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_spc_pc_pac`
-- (See below for the actual view)
--
CREATE TABLE `v_spc_pc_pac` (
`spc_category_id` int
,`spc_title` varchar(255)
,`pc_category_id` int
,`pc_title` varchar(255)
,`pc_code` text
,`p_category_code` varchar(255)
,`p_category_title` varchar(255)
,`parent_id` int
,`codeSUB` varchar(255)
,`is_disabled_sub` int
,`category_sub` int
);

-- --------------------------------------------------------

--
-- Structure for view `allcatesubparent`
--
DROP TABLE IF EXISTS `allcatesubparent`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `allcatesubparent`  AS SELECT `spc`.`category_id` AS `spc_category_id`, `spc`.`category_sub` AS `spc_category_sub`, `spc`.`title` AS `spc_title`, `pc`.`category_id` AS `pc_category_id`, `pc`.`title` AS `pc_title`, `pc`.`code` AS `pc_code`, `p`.`category_code` AS `p_category_code`, `p`.`category_title` AS `p_category_title`, `p`.`parent_id` AS `parent_id`, `spc`.`codeSUB` AS `codeSUB` FROM ((`product_category` `pc` left join `sub_product_category` `spc` on((`pc`.`category_id` = `spc`.`category_id`))) left join `parent_category` `p` on((`p`.`parent_id` = `pc`.`parent_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `view_parentproduct_productcategory_subcategory`
--
DROP TABLE IF EXISTS `view_parentproduct_productcategory_subcategory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_parentproduct_productcategory_subcategory`  AS SELECT `p`.`product_id` AS `product_id`, `p`.`ProductName` AS `ProductName`, `pc`.`category_id` AS `category_id`, `c`.`category_code` AS `category_parent`, `c`.`category_title` AS `parent_title`, `pc`.`title` AS `category_title`, `pc`.`parent_id` AS `parent_id`, `p`.`category_sub` AS `category_sub`, `p`.`is_disabled` AS `is_disabled`, `p`.`sort_order` AS `sort_order`, `p`.`Stock` AS `Stock`, `p`.`price` AS `price`, `p`.`discount` AS `discount`, `p`.`description` AS `description`, `p`.`img_link` AS `img_link`, `p`.`img_list` AS `img_list`, `pc`.`code` AS `pc_code`, `spc`.`codeSUB` AS `spc_codeSUB`, `spc`.`title` AS `spc_title` FROM (((`product` `p` left join `product_category` `pc` on((`pc`.`category_id` = `p`.`category_id`))) left join `parent_category` `c` on((`c`.`parent_id` = `pc`.`parent_id`))) left join `sub_product_category` `spc` on((`spc`.`category_sub` = `p`.`category_sub`))) ;

-- --------------------------------------------------------

--
-- Structure for view `v_spc_pc_pac`
--
DROP TABLE IF EXISTS `v_spc_pc_pac`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_spc_pc_pac`  AS SELECT `spc`.`category_id` AS `spc_category_id`, `spc`.`title` AS `spc_title`, `pc`.`category_id` AS `pc_category_id`, `pc`.`title` AS `pc_title`, `pc`.`code` AS `pc_code`, `p`.`category_code` AS `p_category_code`, `p`.`category_title` AS `p_category_title`, `p`.`parent_id` AS `parent_id`, `spc`.`codeSUB` AS `codeSUB`, `spc`.`is_disabled_sub` AS `is_disabled_sub`, `spc`.`category_sub` AS `category_sub` FROM ((`sub_product_category` `spc` left join `product_category` `pc` on((`pc`.`category_id` = `spc`.`category_id`))) left join `parent_category` `p` on((`p`.`parent_id` = `pc`.`parent_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderNumber`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `index_parent_category` (`parent_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `sub_product_category` (`category_sub`),
  ADD KEY `index_product_id` (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `index_product_category` (`category_id`);

--
-- Indexes for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  ADD PRIMARY KEY (`category_sub`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `index_sub_product_category` (`category_sub`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `index_user` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderNumber` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNumber` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `parent_category`
--
ALTER TABLE `parent_category`
  MODIFY `parent_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  MODIFY `category_sub` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderNumber`) REFERENCES `orders` (`orderNumber`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_product_category` FOREIGN KEY (`category_sub`) REFERENCES `sub_product_category` (`category_sub`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `parent_category` (`parent_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_product_category`
--
ALTER TABLE `sub_product_category`
  ADD CONSTRAINT `sub_product_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
