-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 02:36 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flipkart`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subtitle` varchar(200) NOT NULL,
  `display_subtitle` tinyint(1) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `display_logo` tinyint(1) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `name`, `subtitle`, `display_subtitle`, `logo`, `display_logo`, `email`, `phone`, `address`) VALUES
(1, 'Flipkart', 'XYZ BLOCK -B Delhi - 110001', 0, 'Array', 0, 'flipkart@gmail.com', 999999999, ''),
(2, 'VIVEK ESHOP', 'A Complete Platform For All Gadgets', 1, 'Array', 1, 'vivekeshop@gmail.com', 2147483647, 'B-467/11 Gourav Nagar\r\nPrem Nagar 2nd');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `discount_percent` int(100) NOT NULL,
  `active` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id`, `name`, `description`, `discount_percent`, `active`, `created_at`, `modified_at`, `deleted_at`) VALUES
(5, 'Flipkart Days ', 'From 1st to 3rd December 2022, the Flipkart Days sale will take place. You will get amazing offers in the sale while it lasts. If payments are made using debit cards, credit cards or net banking, you will get 10% discounts over the already discounted prices.', 80, 'T', '2022-07-25 01:25:35', '2023-02-05 06:20:20', NULL),
(6, 'Big Billion Days', 'Smartphone Offers', 30, 'T', '2022-07-26 05:15:15', '2022-07-25 02:32:58', '2022-07-25 02:58:12'),
(7, 'BIg Savings Days', 'Grand offer On all Electronic Products', 40, 'F', '2022-07-25 02:37:30', '2022-07-25 02:37:30', NULL),
(8, 'Flipkart New Year Sale', '\"Flipkart New Year Sale is going to be a blockbuster because there are several discounts on many products. From 1st to 5th January, this sale will last.\"', 30, '', '2022-07-27 23:58:53', '2022-07-28 00:18:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `SKU` varchar(50) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `inventory` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `discount_id` int(11) NOT NULL,
  `featured` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `SKU`, `category_id`, `inventory`, `price`, `discount_id`, `featured`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'Realme GT Neo 3', 'Unleash the suppressed gamer in you and enjoy a top-notch user interface with the Realme GT NEO 3 smartphone. This phone is designed in such a way that it attracts the onlookers and performs so well that you can’t keep it down for a minute. This phone features an exquisite Dimensity 8100 5G processor that facilitates a silky smooth operation and delivers elevated performance. Additionally, the 50 MP Wide-angle Triple Camera of this phone enables you to take stunning photos and videos that last long in your cherished memories. Furthermore, the monstrous 4500 mAh battery and 150 W UltraDart Charge technology powers your phone in a short period of time and backs you up for an extended time.', 'HSN/138', 6, 3, '42999', 6, 1, '2022-07-26 03:57:08', '2022-08-05 00:05:43', NULL),
(2, 'IPhone 13 128Gb', 'The iPhone 13 features a stylish design and innovative features that make it a delight to use. It is equipped with a Dual-camera system that adds an upgrade to the photos and videos that you take. It offers a big boost in battery so that you have enough time to watch content, game, and so on. And, the A15 Bionic helps load graphics-intensive games with ease.', 'HSN/111', 6, 1, '75999', 6, 1, '2022-07-26 05:35:48', '2022-08-05 00:13:44', NULL),
(3, 'Samsung F13 (Waterfall Blue, 64 GB)  (4 GB RAM)', 'Enjoy seamless connectivity and an uninterrupted movie marathon with the impressive Samsung Galaxy F13 that is designed specifically to impress the entertainment fanatics. This smartphone features a terrific 16.62 cm (6.6) FHD+ LCD Display that can effortlessly blow your mind with its incredible performance. Furthermore, this phone boasts a 50 MP Triple Camera setup that allows you to capture awesomeness with a gentle tap. Moreover, the Samsung Galaxy F13 sports up to 8 GB of RAM and features an innovative RAM plus technology that taps into the phone’s internal storage to elevate its performance.', 'HSN/111', 6, 2, '11999', 6, 0, '2022-07-26 01:07:42', '2022-07-29 00:19:31', NULL),
(4, 'OnePlus 9 5G ', 'Rear Triple Camera Co-Developed by Hasselblad, 48 MP Main camera, 50 MP Ultra Wide Angle Camera with Free Form Lens, 2 MP Monochorme Lens. Also comes with a 16 MP Front Camera Qualcomm Snapdragon 888 Processor with Adreno 660 GPU 6.55 Inches Fluid AMOLED Display with 120Hz refresh rate OnePlus Oxygen OS based on Andriod 11 Comes with 4500 mAh Battery with 65W Wired Charging Hands-Free access to Alexa: Alexa on your phone lets you make phone calls, open apps, control smart home devices, access the library of Alexa skills, and more using just your voice while on-the-go. Download the Alexa app and complete hands-free setup to get started. Just ask - and Alexa will respond instantly', 'HSN/111', 6, 4, '42999', 7, 1, '2022-07-26 01:09:01', '2022-08-06 01:13:18', NULL),
(5, 'Asus Rog Phone 3', 'Robust, performance-oriented, and stylish, just like gamers, the ASUS ROG Phone 3 is a device meant for gaming. It is packed with multi-level processor cooling features so that your phone stays cool. It also comes with a whopping 6000 mAh battery to let you continue gaming for hours. With the presence of ultrasonic AirTriggers 3 with Dual Partition functionality, this phone even gives you the ability to enjoy console-like gaming.', 'HSN/137', 6, 5, '46999', 6, 0, '2022-07-26 01:10:51', '2022-07-29 00:24:05', NULL),
(6, 'Realme Buds Neo 2', 'Truewireless Earbuds\r\n', '1236', 10, 6, '2199', 8, 1, '2022-07-26 01:16:12', '2022-08-06 01:14:11', NULL),
(7, 'Lenovo IdeaPad 3 Core i3 11th Gen - (8 GB/512 GB S', 'Get an opportunity to work anytime and from anywhere as you bring home the Lenovo IdeaPad 3 Core i3 11th Gen laptop. It features a slim 19.9 mm body and weight of about 1.41 kg to ensure flexible portability and stylish looks no matter where you go. Also, its 35.56 cm (14) Full HD display with four-sided narrow bezels renders immersive visuals. Moreover, this laptop is powered by an 11th generation processor and high speed SSD storage that allows you to enjoy efficient performance and massive storage.', ' 15ITL6', 9, 7, '39599', 5, 0, '2022-07-29 00:26:23', '2022-08-06 01:14:46', NULL),
(8, 'Sandisk Pendrive 64Gb Type C', 'Pendrive Type C', 'SPD/64', 10, 90, '949', 8, 0, '2022-08-02 22:26:45', '2022-08-06 01:14:39', NULL),
(9, 'Vivo V27 ', 'With the amazing Vivo V27 Pro 5G, get the full sense of a brilliant display and flawless efficiency. This phone has a 3D Curved Screen that enhances user experience with its huge size of 17.22 cm (6.78), 120 Hz refresh rate, and up to 1.07 billion colours. Also, the extraordinary 50 MP front camera, Night Portrait with Aura Light, and the 50 MP primary camera with exceptional quality all let you take mesmerising photographs by dependably capturing precise, colourful details. Also, the MediaTek Dimensity 8200 in your phone provides effective performance and enables seamless multitasking.', 'VIVO/27', 6, 1, '28999', 6, 0, '2023-03-22 01:19:35', '2023-03-22 06:04:02', NULL),
(10, 'Samsung Tab', 'Learn, play, and do more with the Galaxy Tab A8 Wi-Fi + 4G tablet. This tablet features an elegant and slim metal body to add an aesthetic appearance on this device. Also, this tablet comes with a range of secured and exciting features including Parental Control system, Screen Recording system, Continue Apps to let you remain engrossed to the device for a long time. Lastly, thanks to the Samsung Knox app, you can enjoy keeping your confidential data secured on this tablet.', 'SAM/08', 7, 5, '18990', 6, 0, '2023-03-22 01:38:53', '2023-03-22 01:38:53', NULL),
(11, 'Iphone 14 Plus', '16.95 cm (6.7-inch) Super Retina XDR display\r\nAdvanced camera system for better photos in any light\r\nCinematic mode now in 4K Dolby Vision up to 30 fps\r\nAction mode for smooth, steady, handheld videos\r\nVital safety technology — Crash Detection calls for help when you can’t', 'HSN/14', 6, 8, '80990', 6, 1, '2023-03-21 20:45:53', '2023-03-21 20:45:53', NULL),
(12, 'LENOVO LAPTOP', 'Featuring a sleek and lightweight design, the Lenovo IdeaPad Gaming Laptop is ideal for on-the-go gaming, so you can take your powerful gaming system with you wherever you go. With this laptop, you can be confident that it will be durable and portable wherever you go, such as to college, the office, or even the airport. This laptop has undergone military specification tests, such as it has withstood exposure to high and low temperatures, temperature shock, drops, and vibrations. So, you may rest assured that this device can offer durable performance in a myriad of environments.', 'LAP/I6', 9, 8, '57999', 6, 1, '2023-03-21 20:51:26', '2023-03-21 20:54:08', NULL),
(13, 'APPLE iPad (9th Gen) 64 GB ROM', 'Featuring a sleek and lightweight design, the Lenovo IdeaPad Gaming Laptop is ideal for on-the-go gaming, so you can take your powerful gaming system with you wherever you go. With this laptop, you can be confident that it will be durable and portable wherever you go, such as to college, the office, or even the airport. This laptop has undergone military specification tests, such as it has withstood exposure to high and low temperatures, temperature shock, drops, and vibrations. So, you may rest assured that this device can offer durable performance in a myriad of environments.', 'IPAD/9TH', 7, 12, '58990', 6, 1, '2023-03-21 20:58:53', '2023-03-21 20:58:53', NULL),
(14, 'SAMSUNG TV ', 'Resolution: HD Ready (1366x768) | Refresh Rate: 60 hertz\r\nConnectivity: 2 HDMI ports to connect set top box, Blu Ray players, gaming console | 1 USB ports to connect hard drives and other USB devices\r\nSound : 20 Watts Output | Dolby Digital Plus\r\nSmart TV Features : Personal Computer | Screen Share | Music System | Content Guide | Connect Share Movie\r\nDisplay : LED Panel | Mega Contrast | PurColor | HD Picture Quality | Slim & Stylish Design', 'SMTV', 11, 8, '14990', 6, 1, '2023-03-21 21:02:47', '2023-03-21 21:02:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `description`, `image`, `created_at`, `modified_at`, `deleted_at`) VALUES
(6, 'Smartphone', 'Buy Smartphones from Wide range of smartphones from popular brands like \r\nSamsung, Apple, Realme,Oppo,Vivo,Poco, Motorola,Asus & more.', 'smartphone.jpg', '2022-07-28 13:23:04', '2022-08-02 22:44:17', NULL),
(7, 'Tablet', 'Shop for Latest Android Tablets in India at Flipkart.com. Check specifications, prices, ratings, reviews of Android Tablets made by Samsung, Lenovo, ...', 'tablet.jpg', '2022-07-28 13:23:19', '2022-08-02 22:44:30', NULL),
(8, 'Mobile Accessories', 'From mobile cases and covers, screen guards, chargers, cables, power banks, selfie sticks, memory cards, headphones to cleaning kits, enhance your mobile usage with our vast collection of nifty mobile accessories at exciting rates. Read reviews, compare prices and specs and only then take your pick. Flipkart is out to make your shopping experience quicker and simpler!', 'mobile-accessories.png', '2022-07-28 13:30:34', '2022-08-02 22:44:40', NULL),
(9, 'Laptop', 'Fulfilling all your tasks at work and home, laptops can be distinguished based on their size, portability, user-friendly interface, processor speeds, RAM &...\r\n', 'laptop.jpg', '2022-07-28 13:23:58', '2022-08-02 22:44:51', NULL),
(10, 'Computer Peripherals', 'Every modern home deserves a computer system, and every computer system deserves its posse of accessories. Here to help you make full use of your desktop is our collection of computer peripherals - we have printers, ink cartridges, ink toners, projectors, scanners, and personal PCs. Explore more, do more, with these computer necessities.', 'Computer-Accessories.png', '2022-07-27 21:55:29', '2022-08-02 22:45:01', NULL),
(11, 'Televisions', 'These days, it is almost surprising to find homes that do not have television sets. This is mainly because televisions have become such an important asset in every household. Televisions, by and large, are very essential than other appliances and are highly resourceful and entertaining in a variety of ways. Though, today’s generation mostly makes use of smartphones and other connected devices for entertainment, news, and binge-watching purposes, they still cannot beat the experience that a TV can deliver. In the present day, people mostly prefer LED, OLED, QLED, or smart TVs. Enjoy the incredible experience that the television presents and immerse yourself in the content. With enhanced visuals in modern TVs, you wouldn’t feel to take your eyes off the TV screen. Explore a wide range of smart TV options from Mi TVs, VU TVs, SAMSUNG, LG, SONY, and a myriad of other TV brands. It is best to research TV prices before making a purchase so that you can get your television set for the best price. For those who prefer LED variants, check online at Flipkart for LED TV prices and order for the best deals. ', 'television.png', '2022-08-02 22:43:56', '2022-08-02 22:43:56', NULL),
(12, 'Air Conditioners', 'An AC is just what you need to escape the unbearable heat of Indian summers and get a good night’s sleep. Select a split air conditioner for a larger room and efficient cooling or a window air conditioner for a compact space. Purchasing an air conditioner for all the rooms in a house might be tricky, so a portable AC 1.5 ton can do the job of cooling easily. Check out the various models of Lloyd portable ACs and other brands online. A tower air conditioner is a perfect choice for commercial spaces because of its instant cooling feature and portability. You can easily check the top 10 AC brands in India for all the categories mentioned above online to make the perfect choice for you. When choosing an AC for your home, choose between copper and aluminium condenser coils which affect the efficiency and cost of the machine. For window air conditioners, check out various Panasonic AC 1.5 ton models online. Panasonic CW-XN182AM has a copper condenser coil and an auto-restart feature. You can check and compare with Whirlpool AC 1.5 ton prices and features before making any decision. Brands like Voltas, LG, Hitachi, Lloyd, etc., offer user-friendly and durable air conditioners online.', 'air-conditioners.jpg', '2022-08-02 22:55:40', '2022-08-02 22:55:40', NULL),
(13, 'Refrigerators', 'Double door fridges offer extra storage space and an enhanced cooling effect that helps to preserve food for a longer period of time. The storage area in the fridge and the freezer seems to be ideal for a family of 4 to 5. These refrigerators boast elegant designs packed with a host of features that can auto adjust the chillness, detect temperature automatically, save energy by itself, work even during power cuts due to the smart inverter technology, retain freshness all the time due to the inbuilt deodorizer, and more. The uniform cooling feature allows for all-around cooling, keeping the perishables fresh and long-lasting. These fridges usually come in the capacity range of 230 to 500 liters. Double door fridge prices are usually lower during seasonal sales and festive discounts. Keep looking for ongoing offers online at Flipkart and place your order for your refrigerator model at the earliest, so you don’t miss out on the best deals. Brands like SAMSUNG, Whirlpool, LG, Haier, Godrej, etc. sell double door refrigerators in various colours and capacities with a range of innovative features.', 'refrigerators.jpg', '2022-08-02 23:04:04', '2022-08-02 23:04:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `url`) VALUES
(7, 7, 'lenovo-i3.jpg'),
(10, 9, 'vivo v27.jpg'),
(11, 10, 'samsung-tab1.jpg'),
(12, 10, 'samsung-tab.jpg'),
(13, 2, 'iphone 13.jpg'),
(14, 4, 'oneplus 11r.jpg'),
(15, 6, 'realme buds 3.jpg'),
(16, 1, 'realme narzo 50.jpg'),
(17, 11, '14 plus.jpg'),
(18, 12, 'lenevo laptop.jpg'),
(19, 13, 'ipad.jpg'),
(20, 14, 'SAMSUNGTV.JPG'),
(21, 14, '14 plus.jpg'),
(22, 5, 'asus.jpg'),
(23, 3, 'samung m13.jpg'),
(24, 8, 'sandisk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `account_no` int(11) NOT NULL,
  `expiry` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `user_id`, `payment_type`, `provider`, `account_no`, `expiry`, `email`, `password`) VALUES
(1, 'Vivek', 0, '', '', 0, '0000-00-00', 'vivekkumar@gmail.com', 'Vivek@123456'),
(4, 'user vivek', 0, '', '', 0, '0000-00-00', 'user@gmail.com', 'user@1'),
(5, 'Vivek-user', 0, '', '', 0, '0000-00-00', 'user@gmail.com', 'user@1');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `postal_code` varchar(6) NOT NULL,
  `country` varchar(50) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(50) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `discount_id` (`discount_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poduct_id` (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_3` FOREIGN KEY (`discount_id`) REFERENCES `discount` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
