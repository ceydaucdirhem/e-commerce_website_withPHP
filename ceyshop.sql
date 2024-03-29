-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Mar 2024, 09:09:33
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `ceyshop`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `email` text NOT NULL,
  `need` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `name`, `surname`, `email`, `need`, `message`) VALUES
(1, 'ceyda ', 'üçdirhem', 'ceydaucdirhem@hotmail.com', 'naoıwjfoıjo', 'efojfoıqwofmqw'),
(2, 'bbbb', 'bbbbb', 'bbbb@gmail.com', 'müşteri hizmetleri', 'wvewwwwwwwwwwww'),
(3, 'ceyda', 'sildir', 'ceydasildir@gmail.com', 'müşteri hizmetleri', 'ceydyguyqwgfwq'),
(4, 'ceyda', 'sildir', 'ceydasildir@gmail.com', 'müşteri hizmetleri', 'ceydyguyqwgfwq'),
(5, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(6, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(7, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(8, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(9, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(10, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(11, 'ceydacim', 'cimcim', 'cimcim@gmail.com', 'şikayet', 'qfqwfwqfwqf'),
(12, 'hüsamettin', 'kayık', 'husokayik@hotmail.com', 'diğer', 'denemeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(13, 'hüsamettin', 'kayık', 'husokayik@hotmail.com', 'diğer', 'denemeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(14, 'hüsamettin', 'kayık', 'husokayik@hotmail.com', 'diğer', 'denemeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(15, 'fffff', 'ffffffff', 'fffff@gmail.com', 'şikayet', 'qqqqqqqqqqqqqqqqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(150) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `registered_at` date NOT NULL DEFAULT current_timestamp(),
  `isAdmin` int(11) NOT NULL DEFAULT 0,
  `user_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`user_id`, `first_name`, `last_name`, `email`, `password`, `contact_no`, `registered_at`, `isAdmin`, `user_address`) VALUES
(1, 'bb', 'Admin', 'admin@gmail.com', '$2y$10$j9OXXIYS0CG5AYuks62YMeDvuIpo2hZEN4CqfJfujt1yPMnoUq5C6', '9810283472', '2022-04-10', 1, 'almanya'),
(2, 'Ceyda ', 'Üçdirhem', 'ceydaucdirhem@gmail.com', '$2y$10$DJOdhZy1InHTKQO6whfyJexVTZCDTlmIYGCXQiPTv7l82AdC9bWHO', '980098322', '2022-04-10', 0, 'ataşehir'),
(12, 'semih ', 'varol', 'semihvarol@gmail.com', 'smh12', '55897456', '2024-03-27', 0, 'ankara'),
(14, 'dilek', 'sabancı', 'dileksabanci@sabanci.com', 'sabanaciii12', '0555896314', '2024-03-27', 0, 'Almanya'),
(15, 'sakıp', 'sabancı', 'sabanci@sabanciholding.com', 'sabanci123', '05589754', '2024-03-27', 0, 'italya'),
(17, 'akif', 'sildir', 'akifsildir@ghotmail.com', 'akiffb1907', '05558984', '2024-03-27', 0, 'Ataşehir');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `delivered_to` varchar(150) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `deliver_address` varchar(255) NOT NULL,
  `pay_method` varchar(50) NOT NULL,
  `pay_status` int(11) NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0,
  `order_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `delivered_to`, `phone_no`, `deliver_address`, `pay_method`, `pay_status`, `order_status`, `order_date`) VALUES
(1, 123, 'Ceyda Üçdirhem', '980098322', 'İstanbul', 'Kredi Kartı', 0, 1, '2024-03-28'),
(2, 124, 'Semih Varol', '55897456', 'İzmir', 'Nakit', 0, 1, '2024-03-28'),
(3, 125, 'dilek sabancı', '0555896314', 'Muğla', 'Doğrudan Banka Transferi', 1, 1, '2024-03-28'),
(4, 126, 'sakıp sabancı', '05589754', 'Edirne', 'Doğrudan Banka Transferi', 1, 0, '2024-03-28'),
(5, 126, 'akif sildir', '05558984', 'Amasya', 'Doğrudan Banka Transferi', 0, 0, '2024-03-28');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `uploaded_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `price`, `uploaded_date`) VALUES
(1, 'Kiraz Çiçeği Sallantılı Charm', '925 Ayar Gümüş', './uploads/p1.png', 150, '2022-03-28'),
(2, 'Moments Kalp Klipsli Bileklik', '925 Ayar Gümüş', './uploads/p2.png', 1900, '2022-04-04'),
(3, 'Işıltılı Ay Klipsli Bileklik', '925 Ayar Gümüş', './uploads/pp.webp', 2000, '2022-04-04'),
(4, 'Kalp Klipsli Yılan Zincir Bileklik', '925 Ayar Gümüş', './uploads/p5.png', 1356, '2022-04-04'),
(5, 'Moments Düz Klipsli Bileklik', '925 Ayar Gümüş', './uploads/p6.png', 2251, '2022-03-24'),
(6, 'Silindir Klipsli Bileklik', '925 Ayar Gümüş', './uploads/p7.png', 1351, '2022-04-04'),
(7, 'Işıltılı Kalp Tenis Bilezik', '925 Ayar Gümüş', './uploads/p8.png', 2000, '2022-04-04'),
(8, 'Yavru Kedi ve İp Yumağı Charm', '925 Ayar Gümüş', './uploads/p9.png', 1121, '2022-04-04'),
(9, 'Aile Ağacı Kalp Klipsli Bileklik', '925 Ayar Gümüş', './uploads/p10.png', 218, '2022-04-04'),
(11, 'Kalp & Asılı Taş Kolye', '925 Ayar Gümüş', './uploads/798955.png', 5101, '2024-03-13'),
(13, 'Işıltılı Herbaryum Sallantılı Charm', '925 Ayar Gümüş', './uploads/924742.png', 3000, '2024-03-13'),
(14, 'Papatyalar Güvenlik Zinciri', '925 Ayar Gümüş', './uploads/551291.png', 1290, '2024-03-13'),
(15, 'Işıltılı Tenis Bileziği', '925 Ayar Gümüş', './uploads/557873.png', 1160, '2024-03-13'),
(16, 'Koruyucu Fatma Eli Sallantılı Charm', '925 Ayar Gümüş', './uploads/357664.png', 859, '2024-03-13'),
(17, 'Küçük Halka Bileklik', '925 Ayar Gümüş', './uploads/968570.png', 1551, '2024-03-13'),
(18, 'Moments Asimetrik Yıldız Klipsli Bileklik', '925 Ayar Gümüş', './uploads/249404.png', 1151, '2024-03-13'),
(19, 'Boncuklu Kalp Küresi Charm', '925 Ayar Gümüş', './uploads/645198.png', 1191, '2024-03-13'),
(20, 'Işıltılı Kırmızı Taşlı Kalp Yüzük', '925 Ayar Gümüş', './uploads/559430.png', 1281, '2024-03-13'),
(21, 'Mutlu Yaşlar Hava Balonu Charm', '925 Ayar Gümüş', './uploads/157694.webp', 1281, '2024-03-13'),
(22, 'Asimetrik Kalpler Küpe', '925 Ayar Gümüş', './uploads/648194.png', 2181, '2024-03-13'),
(23, 'M Harfi Charm', '925 Ayar Gümüş', './uploads/198353.png', 1251, '2024-03-13'),
(24, 'Sonsuzluk Düğümü Zincir Bileklik', '925 Ayar Gümüş', './uploads/542901.png', 2156, '2024-03-13'),
(25, 'Denge Madalyon Charm', '925 Ayar Gümüş', './uploads/478440.png', 1981, '2024-03-13'),
(26, 'Disney The Little Mermaid Charm', '925 Ayar Gümüş', './uploads/751433.png', 1101, '2024-03-13'),
(28, 'Kırmızı Işıltılı Kalp Tenis Bilekliği', '925 Ayar Gümüş', './uploads/653525.png', 2300, '2024-03-13'),
(29, 'Cam Kelebek Sallantılı Charm', '925 Ayar Gümüş', './uploads/284784.png', 2811, '2024-03-13'),
(30, 'Kalp Kilitli Zincir Bileklik', '925 Ayar Gümüş', './uploads/603279.png', 2811, '2024-03-13'),
(31, 'Işıltılı Pati İzi Sallantılı Charm', '925 Ayar Gümüş', './uploads/484995.png', 1156, '2024-03-13'),
(32, 'Çift Kalpli Ayrılabilen Charm', '925 Ayar Gümüş', './uploads/574993.png', 1620, '2024-03-13'),
(33, 'Deniz Kaplumbağası Charm', '925 Ayar Gümüş', './uploads/354188.png', 2000, '2024-03-13'),
(34, 'Diş Mini Sallantılı Charm', '925 Ayar Gümüş', './uploads/738708.png', 551, '2024-03-13'),
(35, 'Deniz Kaplumbağası Charm', '925 Ayar Gümüş', './uploads/456233.png', 2000, '2024-03-13'),
(36, 'Işıltılı Arı Sallantılı Charm', '925 Ayar Gümüş', './uploads/162571.png', 2000, '2024-03-13'),
(37, 'Mavi Kelebek Sallantılı Charm', '925 Ayar Gümüş', './uploads/638310.png', 357, '2024-03-13'),
(38, 'Disney Pixar Mike Wazowski Charm', '925 Ayar Gümüş', './uploads/246380.png', 657, '2024-03-13'),
(39, 'Seyahat Charm', '925 Ayar Gümüş', './uploads/225964.jpg', 200, '2024-03-13'),
(40, 'Mor Papatya Charm', '925 Ayar Gümüş', './uploads/702795.jpg', 190, '2024-03-13'),
(41, 'Göz Mini  Charm', '925 Ayar Gümüş', './uploads/318123.jpg', 200, '2024-03-13'),
(42, 'Yıldız ve Yeni Ay Charm', '925 Ayar Gümüş', './uploads/781293.jpg', 70, '2024-03-13'),
(43, 'Pembe Klipsli Bileklik', '925 Ayar Gümüş', './uploads/772446.jpg', 156, '2024-03-13'),
(44, 'Kalpli Sallantılı Charm', '925 Ayar Gümüş', './uploads/326704.jpg', 251, '2024-03-13'),
(45, 'Hilal ve Yıldızlar Charm', '925 Ayar Gümüş', './uploads/195500.jpg', 351, '2024-03-13'),
(46, 'Mickey Charm', '925 Ayar Gümüş', './uploads/776283.jpg', 51, '2024-03-13'),
(47, 'Sevimli Ahtapot Charm', '925 Ayar Gümüş', './uploads/915856.jpg', 121, '2024-03-13'),
(48, 'Pembe Papatya Ayraç Klips', '925 Ayar Gümüş', './uploads/443227.jpg', 181, '2024-03-13'),
(49, 'T Kapama Klipsli Bileklik', '925 Ayar Gümüş', './uploads/272110.jpg', 200, '2024-03-13'),
(50, 'Sevgi Sallantılı Charm', '925 Ayar Gümüş', './uploads/267440.jpg', 200, '2024-03-13'),
(51, 'Kelebek Çift Charm', '925 Ayar Gümüş', './uploads/910279.jpg', 100, '2024-03-13'),
(52, 'Örgü Deri Bileklik', '925 Ayar Gümüş', './uploads/328972.jpg', 400, '2024-03-13'),
(53, 'Sonsuzluk Sarmalı Charm', '925 Ayar Gümüş', './uploads/777952.jpg', 160, '2024-03-13'),
(54, 'Işıltılı Pembe Charm', '925 Ayar Gümüş', './uploads/953516.jpg', 551, '2024-03-13'),
(55, 'Herbaryum Sallantılı Charm', '925 Ayar Gümüş', './uploads/169683.jpg', 551, '2024-03-13'),
(56, 'Spiritüel Düş Kapanı Charm', '925 Ayar Gümüş', './uploads/364346.jpg', 151, '2024-03-13'),
(57, 'Hale Tenis Bilekliği', '925 Ayar Gümüş', './uploads/263585.jpg', 191, '2024-03-13'),
(58, 'Aile Kalpli Güvenlik Zinciri', '925 Ayar Gümüş', './uploads/984799.jpg', 291, '2024-03-13'),
(59, 'Kafes İşi Kalbini Aç Charm', '925 Ayar Gümüş', './uploads/103042.jpg', 281, '2024-03-13'),
(60, 'Mavi Dünya Klips', '925 Ayar Gümüş', './uploads/492772.jpg', 181, '2024-03-13'),
(61, 'Fatma Eli Sallantılı Charm', '925 Ayar Gümüş', './uploads/452487.jpg', 181, '2024-03-13'),
(62, 'Yavru Kedi ve İp Yumağı Charm', '925 Ayar Gümüş', './uploads/399710.jpg', 151, '2024-03-13'),
(63, 'Kız Kardeş Charm', '925 Ayar Gümüş', './uploads/13104.jpg', 156, '2024-03-13'),
(64, 'Pembe Işıltılı Dizi Klips Charm', '925 Ayar Gümüş', './uploads/599938.jpg', 981, '2024-03-13'),
(65, 'Tek Harf Küpe', '925 Ayar Gümüş', './uploads/363319.png', 101, '2024-03-13'),
(66, 'Pusula Madalyon Charm', '925 Ayar Gümüş', './uploads/389864.jpg', 151, '2024-03-13'),
(68, 'Murano Cam Charm', '925 Ayar Gümüş', './uploads/324156.jpg', 190, '2024-03-13'),
(69, 'Işıltılı Yıldız Madalyon Charm', '925 Ayar Gümüş', './uploads/31046.jpg', 200, '2024-03-13'),
(70, 'Işıltılı Pati İzi Charm', '925 Ayar Gümüş', './uploads/272752.jpg', 70, '2024-03-13'),
(71, 'Kalp Taşlı Tavşan Charm', '925 Ayar Gümüş', './uploads/279076.jpg', 156, '2024-03-13'),
(72, 'Minnie Mouse Yeni Ay Charm', '925 Ayar Gümüş', './uploads/680028.jpg', 251, '2024-03-13'),
(73, 'Gezegen Mini Sallantılı Charm', '925 Ayar Gümüş', './uploads/658693.jpg', 351, '2024-03-13'),
(74, 'Kar Taneli Kar Küresi Charm', '925 Ayar Gümüş', './uploads/451790.jpg', 151, '2024-03-13'),
(75, 'Gülen Surat Mini Charm', '925 Ayar Gümüş', './uploads/53844.jpg', 190, '2024-03-13'),
(76, 'Uzay Sevgisi Roket Charm', '925 Ayar Gümüş', './uploads/517999.jpg', 200, '2024-03-13'),
(77, 'Winnie the Pooh Charm', '925 Ayar Gümüş', './uploads/210096.jpg', 70, '2024-03-13'),
(78, 'Işıltılı Hale Tenis Bilekliği', '925 Ayar Gümüş', './uploads/739765.jpg', 156, '2024-03-13'),
(79, 'Murano Cam  Charm', '925 Ayar Gümüş', './uploads/835440.jpg', 251, '2024-03-13'),
(80, 'Bebek Emziği Charm', '925 Ayar Gümüş', './uploads/452188.jpg', 351, '2024-03-13'),
(81, 'Işıltılı Pavé Üç Sıralı Charm', '925 Ayar Gümüş', './uploads/854289.png', 1501, '2024-03-13'),
(82, 'Işıltılı Herbaryum Charm', '925 Ayar Gümüş', './uploads/900540.png', 190, '2024-03-13'),
(83, 'Pusula Sallantılı Charm', '925 Ayar Gümüş', './uploads/921565.png', 200, '2024-03-13'),
(84, 'Oyuncak Ayı Sallantılı Charm', '925 Ayar Gümüş', './uploads/747565.png', 170, '2024-03-13'),
(85, 'Buzlu Kar Tanesi Charm', '925 Ayar Gümüş', './uploads/169722.png', 156, '2024-03-13'),
(86, 'Kilit ve Anahtar Sallantılı Charm', '925 Ayar Gümüş', './uploads/691934.png', 251, '2024-03-13'),
(87, 'Vurgulu Kalpler Sallantılı Charm', '925 Ayar Gümüş', './uploads/743343.png', 351, '2024-03-13'),
(88, 'Metalik Pembe Kalp Charm', '925 Ayar Gümüş', './uploads/814752.png', 51, '2024-03-13'),
(89, 'Çift Hale Kalpli Sallantılı Charm', '925 Ayar Gümüş', './uploads/132052.png', 121, '2024-03-13'),
(90, 'Boncuklu Açık Kalpli Charm', '925 Ayar Gümüş', './uploads/396114.png', 181, '2024-03-13'),
(91, 'Kırlangıç Çift Sallantılı Charm', '925 Ayar Gümüş', './uploads/438536.png', 200, '2024-03-13'),
(92, 'Kedi ve Fiyonk Charm', '925 Ayar Gümüş', './uploads/318808.png', 200, '2024-03-13'),
(93, 'Işıltılı Sevimli Panda Charm', '925 Ayar Gümüş', './uploads/531468.png', 100, '2024-03-13'),
(94, 'El Yazısı Aşk Charm', '925 Ayar Gümüş', './uploads/106363.png', 400, '2024-03-13'),
(95, 'Gökkuşağı Unicorn Bruno Charm', '925 Ayar Gümüş', './uploads/527391.png', 160, '2024-03-13'),
(96, 'Aşk Mektubu Zarf Sallantılı Charm', '925 Ayar Gümüş', './uploads/374269.png', 551, '2024-03-13'),
(97, 'Aşk Asma Kilit Sallantılı Charm', '925 Ayar Gümüş', './uploads/439314.png', 551, '2024-03-13'),
(98, 'Pembe Papatya Sallantılı Charm', '925 Ayar Gümüş', './uploads/306176.png', 151, '2024-03-13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `desc` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `rrp` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
(1, 'Kiraz Çiçeği Sallantılı Charm', '925 Ayar Gümüş', 1505, 2207, 10, 'p1.png', '2024-03-13 17:55:22'),
(2, 'Moments Kalp Klipsli Bileklik', '925 Ayar Gümüş', 1900, 1999, 34, 'p2.png', '2024-03-13 18:52:49'),
(3, 'Işıltılı Ay Klipsli Bileklik', '925 Ayar Gümüş', 2000, 2811, 23, 'pp.webp', '2024-03-13 18:47:56'),
(4, 'Kübik Zirkon Bilezik', '925 Ayar Gümüş', 1370, 2556, 7, '94.png', '2024-03-13 17:42:04'),
(5, 'Kalp Klipsli Yılan Zincir Bileklik', '925 Ayar Gümüş', 1356, 1800, 77, 'p5.png', '2024-03-13 17:42:04'),
(6, 'Moments Düz Klipsli Bileklik', '925 Ayar Gümüş', 2251, 4589, 87, 'p6.png', '2024-03-13 17:42:04'),
(7, 'Silindir Klipsli Bileklik', '925 Ayar Gümüş', 1351, 1400, 97, 'p7.png', '2024-03-13 17:42:04'),
(8, 'Işıltılı Kalp Tenis Bilezik', '925 Ayar Gümüş', 5551, 6600, 57, 'p8.png', '2024-03-13 17:42:04'),
(9, 'Yavru Kedi ve İp Yumağı Charm', '925 Ayar Gümüş', 1121, 1220, 17, 'p9.png', '2024-03-13 17:42:04'),
(10, 'Aile Ağacı Kalp Klipsli Bileklik', '925 Ayar Gümüş', 2181, 4200, 27, 'p10.png', '2024-03-13 17:42:04'),
(11, 'Kafes İşi Kalbini Aç Charm', '925 Ayar Gümüş', 1200, 1400, 37, 'p11.png', '2024-03-13 17:42:04'),
(12, 'Kalp & Asılı Taş Kolye', '925 Ayar Gümüş', 5101, 7400, 47, 'p12.png', '2024-03-13 17:42:04'),
(13, 'Işıltılı Herbaryum Sallantılı Charm', '1925 Ayar Gümüş', 3000, 151, 5, 'p13.png', '2024-03-13 17:42:04'),
(14, 'Papatyalar Güvenlik Zinciri', '925 Ayar Gümüş', 1290, 1551, 3, 'p14.png', '2024-03-13 17:42:04'),
(15, 'Işıltılı Tenis Bileziği', '925 Ayar Gümüş', 1160, 1551, 9, 'p15.png', '2024-03-13 17:42:04'),
(16, 'Koruyucu Fatma Eli Sallantılı Charm', '925 Ayar Gümüş', 859, 960, 6, 'p16.png', '2024-03-13 17:42:04'),
(17, 'Küçük Halka Bileklik', '925 Ayar Gümüş', 1551, 1851, 1, 'p17.png', '2024-03-13 17:42:04'),
(18, 'Moments Asimetrik Yıldız Klipsli Bileklik', '925 Ayar Gümüş', 1151, 2251, 55, 'p18.png', '2024-03-13 17:42:04'),
(19, 'Boncuklu Kalp Küresi Charm', '925 Ayar Gümüş', 1191, 2286, 99, 'p19.png', '2024-03-13 17:42:04'),
(21, 'Işıltılı Kırmızı Taşlı Kalp Yüzük', '925 Ayar Gümüş', 1281, 2389, 18, 'p21.png', '2024-03-13 17:42:04'),
(22, 'Mutlu Yaşlar Hava Balonu Charm', '925 Ayar Gümüş', 1181, 2289, 19, 'p22.webp', '2024-03-13 17:42:04'),
(23, 'Asimetrik Kalpler Küpe', '925 Ayar Gümüş', 2181, 2289, 63, 'p23.png', '2024-03-13 17:42:04'),
(24, 'M Harfi Charm', '925 Ayar Gümüş', 1251, 2201, 81, 'p24.png', '2024-03-13 17:42:04'),
(25, 'Sonsuzluk Düğümü Zincir Bileklik', '925 Ayar Gümüş', 2156, 2211, 26, 'p25.png', '2024-03-13 17:42:04'),
(26, ' Denge Madalyon Charm', '925 Ayar Gümüş', 1981, 3000, 64, 'p26.png', '2024-03-13 17:42:04'),
(27, 'Disney The Little Mermaid Charm', '925 Ayar Gümüş', 1101, 2201, 98, 'p27.png', '2024-03-13 17:42:04'),
(29, 'Kırmızı Işıltılı Kalp Tenis Bilekliği', '925 Ayar Gümüş', 1801, 2889, 19, 'u1.png', '2024-03-13 17:42:04'),
(30, ' Cam Kelebek Sallantılı Charm', '925 Ayar Gümüş', 2811, 4289, 63, 'u2.png', '2024-03-13 17:42:04'),
(31, 'Kalp Kilitli Zincir Bileklik', '925 Ayar Gümüş', 1151, 2201, 81, 'u3.png', '2024-03-13 17:42:04'),
(32, 'Işıltılı Pati İzi Sallantılı Charm', '925 Ayar Gümüş', 1156, 2211, 26, 'u4.png', '2024-03-13 17:42:04'),
(34, 'Çift Kalpli Ayrılabilen Charm', '925 Ayar Gümüş', 1620, 2201, 98, 'u6.png', '2024-03-13 17:42:04'),
(35, 'Deniz Kaplumbağası Charm', '925 Ayar Gümüş', 2000, 2481, 64, 'u7.png', '2024-03-13 17:42:04'),
(36, 'Diş Mini Sallantılı Charm', '925 Ayar Gümüş', 551, 851, 64, 'u8.png', '2024-03-13 17:42:04'),
(37, 'Deniz Kaplumbağası Charm', '925 Ayar Gümüş', 2000, 2851, 64, 'u9.png', '2024-03-13 17:42:04'),
(38, 'Işıltılı Arı Sallantılı Charm', '925 Ayar Gümüş', 2000, 3851, 64, 'u10.png', '2024-03-13 17:42:04'),
(39, 'Mavi Kelebek Sallantılı Charm', '925 Ayar Gümüş', 357, 451, 64, 'u11.png', '2024-03-13 17:42:04'),
(40, 'Disney Pixar Mike Wazowski Charm', '925 Ayar Gümüş', 657, 851, 64, 'u12.png', '2024-03-13 17:42:04'),
(41, 'Seyahat Charm', '925 Ayar Gümüş', 200, 901, 10, 'c1.jpg', '2024-03-13 17:55:22'),
(42, 'Mor Papatya Charm', '925 Ayar Gümüş', 190, 410, 34, 'c2.jpg', '2024-03-13 18:52:49'),
(43, 'Göz Mini  Charm', '925 Ayar Gümüş', 200, 311, 23, 'c3.jpg', '2024-03-13 18:47:56'),
(44, 'Yıldız ve Yeni Ay Charm', '925 Ayar Gümüş', 70, 56, 7, 'c4.jpg', '2024-03-13 17:42:04'),
(45, 'Pembe Klipsli Bileklik', '925 Ayar Gümüş', 156, 300, 77, 'c5.jpg', '2024-03-13 17:42:04'),
(46, 'Kalpli Sallantılı Charm', '925 Ayar Gümüş', 251, 400, 87, 'c6.jpg', '2024-03-13 17:42:04'),
(47, 'Hilal ve Yıldızlar Charm', '925 Ayar Gümüş', 351, 400, 97, 'c7.jpg', '2024-03-13 17:42:04'),
(48, 'Mickey Charm', '925 Ayar Gümüş', 51, 100, 57, 'c8.jpg', '2024-03-13 17:42:04'),
(49, 'Sevimli Ahtapot Charm', '925 Ayar Gümüş', 121, 150, 17, 'c9.jpg', '2024-03-13 17:42:04'),
(50, 'Pembe Papatya Ayraç Klips', '925 Ayar Gümüş', 181, 200, 27, 'c10.jpg', '2024-03-13 17:42:04'),
(51, 'T Kapama Klipsli Bileklik', '925 Ayar Gümüş', 200, 400, 37, 'c11.jpg', '2024-03-13 17:42:04'),
(52, 'Sevgi Sallantılı Charm', '925 Ayar Gümüş', 200, 400, 47, 'c12.jpg', '2024-03-13 17:42:04'),
(53, 'Kelebek Çift Charm', '925 Ayar Gümüş', 100, 151, 5, 'c13.jpg', '2024-03-13 17:42:04'),
(54, ' Örgü Deri Bileklik', '925 Ayar Gümüş', 400, 551, 3, 'c14.jpg', '2024-03-13 17:42:04'),
(55, 'Sonsuzluk Sarmalı Charm', '925 Ayar Gümüş', 160, 551, 9, 'c15.jpg', '2024-03-13 17:42:04'),
(56, 'Işıltılı Pembe Charm', '925 Ayar Gümüş', 551, 851, 6, 'c16.jpg', '2024-03-13 17:42:04'),
(57, 'Herbaryum Sallantılı Charm', '925 Ayar Gümüş', 551, 851, 1, 'c17.jpg', '2024-03-13 17:42:04'),
(58, 'Spiritüel Düş Kapanı Charm', '925 Ayar Gümüş', 151, 251, 55, 'c18.jpg', '2024-03-13 17:42:04'),
(59, 'Hale Tenis Bilekliği', '925 Ayar Gümüş', 191, 286, 99, 'c19.jpg', '2024-03-13 17:42:04'),
(60, 'Aile Kalpli Güvenlik Zinciri', '925 Ayar Gümüş', 291, 386, 14, 'c20.jpg', '2024-03-13 17:42:04'),
(61, 'Kafes İşi Kalbini Aç Charm', '925 Ayar Gümüş', 281, 389, 18, 'c21.jpg', '2024-03-13 17:42:04'),
(62, 'Mavi Dünya Klips', '925 Ayar Gümüş', 181, 289, 19, 'c22.jpg', '2024-03-13 17:42:04'),
(63, 'Fatma Eli Sallantılı Charm', '925 Ayar Gümüş', 181, 289, 63, 'c23.jpg', '2024-03-13 17:42:04'),
(64, 'Yavru Kedi ve İp Yumağı Charm', '925 Ayar Gümüş', 151, 201, 81, 'c24.jpg', '2024-03-13 17:42:04'),
(65, 'Kız Kardeş Charm', '925 Ayar Gümüş', 156, 211, 26, 'c25.jpg', '2024-03-13 17:42:04'),
(66, 'Pembe Işıltılı Dizi Klips Charm', '925 Ayar Gümüş', 981, 1000, 64, 'c26.jpg', '2024-03-13 17:42:04'),
(67, 'Tek Harf Küpe', '925 Ayar Gümüş', 101, 201, 98, 'p26.png', '2024-03-13 17:42:04'),
(68, 'Pusula Madalyon Charm', '925 Ayar Gümüş', 151, 901, 10, 'c27.jpg', '2024-03-13 17:55:22'),
(69, 'Murano Cam Charm', '925 Ayar Gümüş', 190, 410, 34, 'c28.jpg', '2024-03-13 18:52:49'),
(70, 'Işıltılı Yıldız Madalyon Charm', '925 Ayar Gümüş', 200, 311, 23, 'c29.jpg', '2024-03-13 18:47:56'),
(71, 'Işıltılı Pati İzi Charm', '925 Ayar Gümüş', 70, 56, 7, 'c30.jpg', '2024-03-13 17:42:04'),
(72, 'Kalp Taşlı Tavşan Charm', '925 Ayar Gümüş', 156, 300, 77, 'c31.jpg', '2024-03-13 17:42:04'),
(73, 'Minnie Mouse Yeni Ay Charm', '925 Ayar Gümüş', 251, 400, 87, 'c32.jpg', '2024-03-13 17:42:04'),
(74, 'Gezegen Mini Sallantılı Charm', '925 Ayar Gümüş', 351, 400, 97, 'c33.jpg', '2024-03-13 17:42:04'),
(75, 'Kar Taneli Kar Küresi Charm', '925 Ayar Gümüş', 151, 901, 10, 'c34.jpg', '2024-03-13 17:55:22'),
(76, 'Gülen Surat Mini Charm', '925 Ayar Gümüş', 190, 410, 34, 'c35.jpg', '2024-03-13 18:52:49'),
(77, 'Uzay Sevgisi Roket Charm', '925 Ayar Gümüş', 200, 311, 23, 'c36.jpg', '2024-03-13 18:47:56'),
(78, 'Winnie the Pooh Charm', '925 Ayar Gümüş', 70, 56, 7, 'c37.jpg', '2024-03-13 17:42:04'),
(79, 'Işıltılı Hale Tenis Bilekliği', '925 Ayar Gümüş', 156, 300, 77, 'c38.jpg', '2024-03-13 17:42:04'),
(80, 'Murano Cam  Charm', '925 Ayar Gümüş', 251, 400, 87, 'c39.jpg', '2024-03-13 17:42:04'),
(81, 'Bebek Emziği Charm', '925 Ayar Gümüş', 351, 400, 97, 'c40.jpg', '2024-03-13 17:42:04'),
(82, 'Işıltılı Pavé Üç Sıralı Charm', '925 Ayar Gümüş', 1501, 1901, 10, 'n1.png', '2024-03-13 17:55:22'),
(83, 'Işıltılı Herbaryum Charm', '925 Ayar Gümüş', 190, 410, 34, 'n2.png', '2024-03-13 18:52:49'),
(84, 'Pusula Sallantılı Charm', '925 Ayar Gümüş', 200, 311, 23, 'n3.png', '2024-03-13 18:47:56'),
(85, 'Oyuncak Ayı Sallantılı Charm', '925 Ayar Gümüş', 170, 256, 7, 'n4.png', '2024-03-13 17:42:04'),
(86, 'Buzlu Kar Tanesi Charm', '925 Ayar Gümüş', 156, 300, 77, 'n5.png', '2024-03-13 17:42:04'),
(87, 'Kilit ve Anahtar Sallantılı Charm', '925 Ayar Gümüş', 251, 400, 87, 'n6.png', '2024-03-13 17:42:04'),
(88, 'Vurgulu Kalpler Sallantılı Charm', '925 Ayar Gümüş', 351, 400, 97, 'n7.png', '2024-03-13 17:42:04'),
(89, 'Metalik Pembe Kalp Charm', '925 Ayar Gümüş', 51, 100, 57, 'n8.png', '2024-03-13 17:42:04'),
(90, 'Çift Hale Kalpli Sallantılı Charm', '925 Ayar Gümüş', 121, 150, 17, 'n9.png', '2024-03-13 17:42:04'),
(91, 'Boncuklu Açık Kalpli Charm', '925 Ayar Gümüş', 181, 200, 27, 'n10.png', '2024-03-13 17:42:04'),
(92, 'Kırlangıç Çift Sallantılı Charm', '925 Ayar Gümüş', 200, 400, 37, 'n11.png', '2024-03-13 17:42:04'),
(93, 'Kedi ve Fiyonk Charm', '925 Ayar Gümüş', 200, 400, 47, 'n12.png', '2024-03-13 17:42:04'),
(94, 'Işıltılı Sevimli Panda Charm', '925 Ayar Gümüş', 100, 151, 5, 'n13.png', '2024-03-13 17:42:04'),
(95, 'El Yazısı Aşk Charm', '925 Ayar Gümüş', 400, 551, 3, 'n14.png', '2024-03-13 17:42:04'),
(96, 'Gökkuşağı Unicorn Bruno Charm', '925 Ayar Gümüş', 160, 551, 9, 'n15.png', '2024-03-13 17:42:04'),
(97, 'Aşk Mektubu Zarf Sallantılı Charm', '925 Ayar Gümüş', 551, 851, 6, 'n16.png', '2024-03-13 17:42:04'),
(98, 'Aşk Asma Kilit Sallantılı Charm', '925 Ayar Gümüş', 551, 851, 1, 'n17.png', '2024-03-13 17:42:04'),
(99, 'Pembe Papatya Sallantılı Charm', '925 Ayar Gümüş', 151, 251, 55, 'n18.png', '2024-03-13 17:42:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`) VALUES
(22, 'Ceyda  Üçdirhem', 'ceydaucdirhem@gmail.com', '$2y$10$DJOdhZy1InHTKQO6whfyJexVTZCDTlmIYGCXQiPTv7l', '2024-03-28 07:14:19'),
(23, 'semih varol ', 'semihvarol@gmail.com', 'smh12', '2024-03-28 07:15:29'),
(24, 'dilek sabancı', 'dileksabanci@sabanci.com', 'sabanaciii12', '2024-03-28 07:16:17'),
(25, 'sakıp sabancı', 'sabanci@sabanciholding.com', 'sabanci123', '2024-03-28 07:16:52'),
(26, 'akif sildir', 'akifsildir@ghotmail.com', 'akiffb1907', '2024-03-28 07:17:19'),
(27, 'ceyda', 'ceydauc@gmail.com', '98c43d0e3aa54231a7f541a38433e7c7', '2024-03-28 08:36:50');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
