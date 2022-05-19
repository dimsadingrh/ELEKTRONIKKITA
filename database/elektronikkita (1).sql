-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2022 at 04:36 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elektronikkita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(3, 'Dimas', 'Bekasi', '2022-05-15 23:44:35', '2022-05-16 23:44:35'),
(4, 'lalal', 'lalala', '2022-05-17 21:57:48', '2022-05-18 21:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `nama_kategori` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kode_kategori`, `nama_kategori`) VALUES
(1, 'gdt', 'Gadget'),
(2, 'prm', 'Peralatan Rumah'),
(3, 'prj', 'Perangkat Jaringan'),
(4, 'pks', 'Perkakas');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `username` varchar(120) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `username`, `alamat`, `jenis_kelamin`, `no_telp`, `email`, `password`, `role_id`) VALUES
(2, 'Dimas Adi', 'dimsadingrh', 'Bekasi', 'Laki-laki', '0812312412512', 'dimasadingrh@gmail.com', '202cb962ac59075b964b07152d234b70', 0),
(4, 'user', 'user123', 'user123', 'Laki - Laki', '192471519248-', 'user123@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(5, 'Dimas Adi', 'admin123', 'bekasi', 'Laki - laki', '085311152854', 'dimasadingrh@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(6, 'Dimas Adi Nugroho', 'dimdimdim', 'Bekasi, Jawa Barat ', 'Laki - Laki', '085311152854', 'dimasadingrh@gmail.com', '3e86908f69a276c6064455e3db010fa2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jumlah` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(11) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `id_invoice`, `id_produk`, `nama_produk`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 3, 1, 'Mini Portable Wifi Repeater', 1, 100000, ''),
(2, 3, 2, 'Modem Mifi 4G LTE E5576', 1, 655000, ''),
(3, 4, 1, 'Mini Portable Wifi Repeater', 1, 100000, '');

--
-- Triggers `pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `pesanan` FOR EACH ROW BEGIN
	UPDATE produk SET stok = stok-NEW.jumlah
    WHERE id_produk = NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_kategori` varchar(120) NOT NULL,
  `merk` varchar(120) NOT NULL,
  `nama_produk` varchar(256) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga` int(32) NOT NULL,
  `stok` int(32) NOT NULL,
  `image` varchar(256) DEFAULT 'produk-default-cover.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_kategori`, `merk`, `nama_produk`, `warna`, `tahun_terbit`, `deskripsi`, `harga`, `stok`, `image`) VALUES
(1, 'prj', 'KexTech', 'Mini Portable Wifi Repeater', 'Putih', '2021', 'WL0189 Max kecepatan 300 mb/s 2,4GHZ . 1 x 6 x 7cm', 100000, 5, 'repeater.png'),
(2, 'prj', 'Huawei', 'Modem Mifi 4G LTE E5576', 'Putih', '2019', 'LTE Mobile Wifi E5576 Sharing: Up to 16 perangkat  Range: 10 Meter ', 655000, 5, 'mifi.png'),
(3, 'prj', 'TP-LINK', 'Wireless Router WR840N', 'Putih', '2020', '300MBps Data Wireless', 453000, 11, 'router.png'),
(4, 'prj', 'TP-LINK', 'Camera Wireless C100', 'Putih', '2019', 'Res: 1080, Night Vision, Privacy Mode ', 248000, 5, 'wireless_cam.png'),
(5, 'prj', 'UGreen', 'USB 3.0 to LAN RJ45 Ethernet', 'Hitam ', '2020', 'Gigabit Network USB 3.0 up to 5Gbps', 155000, 10, 'usb_hub.png'),
(6, 'gdt', 'Apple', 'Iphone 13 Mini (Pink) 128GB', 'Pink ', '2021', 'Internal: 128 GB Ram: 4 GB  Res: 1080 x 2340 pixel, 19.5:9 ratio  5,4 inches', 11500000, 10, '13_mini.png'),
(7, 'gdt', 'Apple ', 'Iphone 13 Pro (Green) 256GB', 'Green', '2021', 'Internal: 256 GB RAM:  6GB  Res: 1170 x 2532 Pixels 19.5:9 Rasio', 16650000, 2, '13_pro.png'),
(8, 'gdt', 'Samsung', 'Samsung Galaxy A52', 'Awesome Violet', '2021', 'Internal: 128 GB  RAM: 8 GB  Res: 1080 x 2400 Pixels,20:9 Rasio ', 4965000, 5, 'a52.png'),
(9, 'gdt', 'Apple', 'Apple MacBook Pro 13\" M1', 'Space Grey', '2020', '2020 . Internal: 256 GB  RAM: 8 GB  Res: 2560 x 1600 500 nits', 19499000, 5, 'macbook.png'),
(10, 'prm', 'Krisbow', 'Kipas Industrial', 'Hitam', '2021', 'Kipas 20\" 11,1kg ', 1600000, 7, 'kipas.png'),
(11, 'prm', 'Krisbow', 'Vacuum Cleaner', 'Abu-abu - Kuning', '2022', '1.8Ltr 800WATT 220-240V', 650000, 5, 'vacuum.png'),
(12, 'prm', 'Sharp', 'Microwave Oven Grill', 'Hitam ', '2021', '25L 1000WAT (58 x 46 x 36 cm)', 1300000, 10, 'microwave.png'),
(13, 'prm', 'Philips', 'Air Fryer HD9252/90 ', 'Hitam', '2021', 'Kapasitas 0,8kg/4,1L. Berat 7800gram', 1455000, 5, 'fryer.png'),
(14, 'prm', 'Aqua Japan', 'Mesin Cuci', 'Putih - Biru ', '2020', '10kg 2 Tabung 220V/50HZ (854 x 490 x 990mm / 32kg)', 1798000, 10, 'mesin_cuci.png'),
(15, 'pks', 'Bosch', 'Mesin Gerinda GWS 750 - 100', 'biru', '2021', 'Angle Grinder / Gerinda Tangan Listrik 115MM 750Watt - 11000 RPM (270 x 73 x 100 mm)', 500000, 5, 'gerinda.png'),
(16, 'pks', 'Krisbow', 'Bor Elektrik 12V', 'Merah', '2020', '10MM Battery Power 12V. Max 1300 rpm.', 730000, 5, 'bor.png'),
(17, 'pks', 'Krisbow', 'Kabel Roll KF-BG-4', 'Hitam', '2020', '1.0mm. Panjang Kabel 5m', 100000, 10, 'kabel_roll.png'),
(18, 'pks', 'Krisbow', 'Blower Elektrik', 'Biru', '2019', '400W 2.17kg Max 16000rpm (18-7/8', 411000, 0, 'blower.png'),
(19, 'prm', 'Philips', 'Rice Cooker', 'Abu - abu', '2021', 'Smart 3D heating Kapasitas 2L', 719000, 5, 'rice_cooker.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_penjualan` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `jumlah` varchar(128) NOT NULL,
  `harga` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
