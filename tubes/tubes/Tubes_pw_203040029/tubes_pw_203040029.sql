-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2021 pada 09.49
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_pw_203040029`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` char(7) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `harga` int(8) NOT NULL,
  `stok` int(4) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `detail`, `harga`, `stok`, `foto`) VALUES
('SM1', 'Delima Merah', 'Minuman Asam Manis Menyegarkan\r\n', 55000, 2, 'c1.jpg'),
('SM2', 'Yin yang', 'Yin Yang 500ml\r\nMinuman kopi susu perpaduan antara espresso shot, activated charcoal, vanilla extract, dan fresh milk\r\n\r\n*simpan di suhu dingin\r\n\r\n\r\n', 90000, 2, 'c4.jpg'),
('SM3', 'Strawberry Latte ', 'Minuman kopi susu strawberry\r\nPerpaduan antara espresso dengan campuran sirup strawberry dan susu murni\r\n', 90000, 3, 'c5.jpg'),
('SM4', 'Tropical Thunder', 'TROPICAL THUNDER 500ml :\r\nPineapple juice, passion fruit syrup, soda water\r\n', 55000, 3, 'c3.jpg'),
('SM5', 'Strawberry Latte 500ml', 'Minuman kopi susu strawberry\r\n', 55000, 4, 'c2.jpg'),
('SM6', 'Not So Coffee 1L', 'Minuman kopi susu\r\nPerpaduan antara espresso, fresh milk dan secret syrup\r\n\r\n*simpan di suhu dingin\r\n', 90000, 1, 'c6.jpg'),
('SMC1', 'Coffe Gayo Gajah Village', 'Species : Arabica\r\nRegion : Bener Meriah\r\nVariety : Bourbon, P88, Timtim\r\nProcess : Natural\r\nAltitude : 1500 MASL\r\nProfile : Filter\r\n\r\n\r\nTasting Notes : Blueberry, Apple, Hints of Peach, Sweet Chocolate\r\n\r\nRoasting is a fascinating aspect of the coffee industry. We took the green coffee beans, which had very little flavor and transform those beans into an incredibly aromatic, astonishingly complex roasted beans.\r\n\r\nThe roasting process is very important as it affects the acidity, sweetness, and bitterness of the beans. Our roaster seeks to balance these three flavor aspects through a carefully controlled handling of heat and timing. However, even the best roaster can not transform poor quality coffee beans into good roasted beans. Hence, we have selected the best green coffee beans to go through our machine. After the beans have been roasted, we then check the flavor of the beans through our intensive cupping protocol.\r\n\r\nWe at S.M.I.T.H Jakarta only sell the best beans that have been carefully selected, precisely roasted and thoroughly check for our customers.\r\n\r\nShoot Me In The Head', 120000, 5, 'cf1.jpg'),
('SMC2', 'Coffe Srikandi Malang Black Honey', 'Species : Arabica\r\nRegion : Bumiaji\r\nVariety : Line S, Kartika\r\nProcess : Black Honey\r\nAltitude : 1300-1400 MASL\r\n\r\nQty : 200g\r\n\r\n\r\nTasting Notes : Caramel Candy, Green Apple, Pear, Almond\r\n\r\nRoasting is a fascinating aspect of the coffee industry. We took the green coffee beans, which had very little flavor and transform those beans into an incredibly aromatic, astonishingly complex roasted beans.\r\n\r\nThe roasting process is very important as it affects the acidity, sweetness, and bitterness of the beans. Our roaster seeks to balance these three flavor aspects through a carefully controlled handling of heat and timing. However, even the best roaster can not transform poor quality coffee beans into good roasted beans. Hence, we have selected the best green coffee beans to go through our machine. After the beans have been roasted, we then check the flavor of the beans through our intensive cupping protocol.\r\n\r\nWe at S.M.I.T.H Jakarta only sell the best beans that have been carefully selected, precisely roasted and thoroughly check for our customers.\r\n\r\nShoot Me In The Head', 140000, 6, 'cf2.jpg'),
('SMC3', 'Coffee Megasari Bondowoso Honey', 'Species : Arabica\r\nRegion : Puncak Megasari\r\nVariety : Java\r\nProcess : Anaerobic Honey\r\nAltitude : 1700 MASL\r\nProfile : Filter\r\n\r\nTasting Notes : Plum, Orange, Molasses\r\n\r\nWe at S.M.I.T.H Jakarta only sell the best beans that have been carefully selected, precisely roasted and thoroughly check for our customers.\r\n\r\nShoot Me In The Head', 120000, 6, 'cf4.jpg'),
('SMC4', 'Coffe Muthuaini AB Kenya Washed', 'Species : Arabica\r\nRegion : Nyeri\r\nVariety : SL-28, SL-34\r\nProcess : Washed\r\nAltitude : 1900 MASL\r\n\r\nQty : 200g\r\n\r\nProfile : Filter\r\n\r\nTasting Notes : Bergamot, Plum, Floral, Black Tea\r\n\r\nRoasting is a fascinating aspect of the coffee industry. We took the green coffee beans, which had very little flavor and transform those beans into an incredibly aromatic, astonishingly complex roasted beans.\r\n\r\nThe roasting process is very important as it affects the acidity, sweetness, and bitterness of the beans. Our roaster seeks to balance these three flavor aspects through a carefully controlled handling of heat and timing. However, even the best roaster can not transform poor quality coffee beans into good roasted beans. Hence, we have selected the best green coffee beans to go through our machine. After the beans have been roasted, we then check the flavor of the beans through our intensive cupping protocol.\r\n\r\nWe at S.M.I.T.H Jakarta only sell the best beans that have been carefully selected, precisely roasted and thoroughly check for our customers.\r\n\r\nShoot Me In The Head', 150000, 3, 'cf3.jpg'),
('SMC5', 'Coffee Aricha Ethiopia Natural', 'Species : Arabica\r\nRegion : Gedeo\r\nVariety : Heirloom\r\nProcess : Natural\r\nAltitude : 1950-2150 MASL\r\n\r\nQty : 200g\r\n\r\nProfile : Filter\r\n\r\nTasting Notes : Red Berries, Raspberries, Watermelon Candy\r\n\r\nRoasting is a fascinating aspect of the coffee industry. We took the green coffee beans, which had very little flavor and transform those beans into an incredibly aromatic, astonishingly complex roasted beans.\r\n\r\nThe roasting process is very important as it affects the acidity, sweetness, and bitterness of the beans. Our roaster seeks to balance these three flavor aspects through a carefully controlled handling of heat and timing. However, even the best roaster can not transform poor quality coffee beans into good roasted beans. Hence, we have selected the best green coffee beans to go through our machine. After the beans have been roasted, we then check the flavor of the beans through our intensive cupping protocol.\r\n\r\nWe at S.M.I.T.H Jakarta only sell the best beans that have been carefully selected, precisely roasted and thoroughly check for our customers.\r\n\r\nShoot Me In The Head', 150000, 5, 'cf5.jpg'),
('SMC6', 'Coffe Kerinci Sungai Penuh Natural', 'Species : Arabica\r\nRegion : Jambi\r\nVariety : Multiple\r\nProcess : Natural\r\nAltitude : 1300MASL\r\n\r\nQty : 250g\r\n\r\n\r\nTasting Notes : Sweet Cedar, Brown Sugar, Praline, Guava, Green Tea Finish\r\n\r\nRoasting is a fascinating aspect of the coffee industry. We took the green coffee beans, which had very little flavor and transform those beans into an incredibly aromatic, astonishingly complex roasted beans.\r\n\r\nThe roasting process is very important as it affects the acidity, sweetness, and bitterness of the beans. Our roaster seeks to balance these three flavor aspects through a carefully controlled handling of heat and timing. However, even the best roaster can not transform poor quality coffee beans into good roasted beans. Hence, we have selected the best green coffee beans to go through our machine. After the beans have been roasted, we then check the flavor of the beans through our intensive cupping protocol.\r\n\r\nWe at S.M.I.T.H Jakarta only sell the best beans that have been carefully selected, precisely roasted and thoroughly check for our customers.\r\n\r\nShoot Me In The Head', 120000, 3, 'cf6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(15, 'ucok', 'ucok', 'b7eb1e45e5dfa943da4751282008fa53', 'user'),
(16, 'admin1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
