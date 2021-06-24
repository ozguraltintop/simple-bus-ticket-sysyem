-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Haz 2021, 22:34:06
-- Sunucu sürümü: 10.4.19-MariaDB
-- PHP Sürümü: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `bubilet`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

CREATE TABLE `kayit` (
  `id` int(11) NOT NULL,
  `ad` varchar(50) NOT NULL,
  `tc` varchar(50) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `takipno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`id`, `ad`, `tc`, `tel`, `mail`, `takipno`) VALUES
(1, 'Uğur', '13123', '1212', '1311', 'BBfde9'),
(2, 'Uğur', '13123', '1212', '1311', 'BBc06d'),
(3, 'Uğur', '123213213123', '0504102123', '@madşsadas', 'BB0138');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seferler`
--

CREATE TABLE `seferler` (
  `seferid` int(11) NOT NULL,
  `kalkis` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `varis` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `fiyat` varchar(5) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `seferler`
--

INSERT INTO `seferler` (`seferid`, `kalkis`, `varis`, `tarih`, `fiyat`) VALUES
(1, 'Bursa', 'İstanbul', '31.05.2021', '100'),
(2, 'Ankara', 'Adana', '31.05.2021', '140'),
(3, 'Bursa', 'Ankara', '31.05.2021', '120'),
(4, 'Antalya', 'Manisa', '31.05.2021', '150'),
(5, 'Ankara', 'Adana', '31.05.2021', '160'),
(6, 'Ankara', 'Adana', '31.05.2021', '200');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sehirler`
--

CREATE TABLE `sehirler` (
  `sehirId` int(11) NOT NULL,
  `sehirIsim` varchar(55) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sehirler`
--

INSERT INTO `sehirler` (`sehirId`, `sehirIsim`) VALUES
(1, 'Adana'),
(2, 'Adıyaman'),
(3, 'Afyonkarahisar'),
(4, 'Ağrı'),
(5, 'Amasya'),
(6, 'Ankara'),
(7, 'Antalya'),
(8, 'Artvin'),
(9, 'Aydın'),
(10, 'Balıkesir'),
(11, 'Bilecik'),
(12, 'Bingöl'),
(13, 'Bitlis'),
(14, 'Bolu'),
(15, 'Burdur'),
(16, 'Bursa'),
(17, 'Çanakkale'),
(18, 'Çankırı'),
(19, 'Çorum'),
(20, 'Denizli'),
(21, 'Diyarbakır'),
(22, 'Edirne'),
(23, 'Elâzığ'),
(24, 'Erzincan'),
(25, 'Erzurum'),
(26, 'Eskişehir'),
(27, 'Gaziantep'),
(28, 'Giresun'),
(29, 'Gümüşhane'),
(30, 'Hakkâri'),
(31, 'Hatay'),
(32, 'Isparta'),
(33, 'Mersin'),
(34, 'İstanbul'),
(35, 'İzmir'),
(36, 'Kars'),
(37, 'Kastamonu'),
(38, 'Kayseri'),
(39, 'Kırklareli'),
(40, 'Kırşehir'),
(41, 'Kocaeli'),
(42, 'Konya'),
(43, 'Kütahya'),
(44, 'Malatya'),
(45, 'Manisa'),
(46, 'Kahramanmaraş'),
(47, 'Mardin'),
(48, 'Muğla'),
(49, 'Muş'),
(50, 'Nevşehir'),
(51, 'Niğde'),
(52, 'Ordu'),
(53, 'Rize'),
(54, 'Sakarya'),
(55, 'Samsun'),
(56, 'Siirt'),
(57, 'Sinop'),
(58, 'Sivas'),
(59, 'Tekirdağ'),
(60, 'Tokat'),
(61, 'Trabzon'),
(62, 'Tunceli'),
(63, 'Şanlıurfa'),
(64, 'Uşak'),
(65, 'Van'),
(66, 'Yozgat'),
(67, 'Zonguldak'),
(68, 'Aksaray'),
(69, 'Bayburt'),
(70, 'Karaman'),
(71, 'Kırıkkale'),
(72, 'Batman'),
(73, 'Şırnak'),
(74, 'Bartın'),
(75, 'Ardahan'),
(76, 'Iğdır'),
(77, 'Yalova'),
(78, 'Karabük'),
(79, 'Kilis'),
(80, 'Osmaniye'),
(81, 'Düzce');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kayit`
--
ALTER TABLE `kayit`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `seferler`
--
ALTER TABLE `seferler`
  ADD PRIMARY KEY (`seferid`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kayit`
--
ALTER TABLE `kayit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `seferler`
--
ALTER TABLE `seferler`
  MODIFY `seferid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
