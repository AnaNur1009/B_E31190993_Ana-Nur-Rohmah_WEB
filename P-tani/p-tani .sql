-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 03:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p-tani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_penjual` varchar(60) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(600) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `jenis` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `min_pembelian` varchar(40) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `waktu_panen` date NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_penjual`, `alamat`, `telp`, `nama_brg`, `keterangan`, `kategori`, `jenis`, `harga`, `stok`, `min_pembelian`, `no_rek`, `waktu_panen`, `gambar`) VALUES
(11, 'Dea Safitri', 'Wuluhan Jember', '082147483647', 'Tomat', 'Ceri', 'Sayuran', 'Organik', 12000, 0, '4', '', '2021-01-19', 'images_(2)1.jpeg'),
(12, 'Dea', 'Wuluhan Jember', '082147483647', 'Wortel', 'Mini', 'Sayuran', 'Non Organik', 10000, 10, '3', '', '2021-01-19', '42e60b5d478e488fcf3efebcc458e607.jpeg'),
(13, 'Dea', 'Wuluhan Jember', '6281331574071', 'Ketela Ubi', 'Putih, Madu, dan Ungu', 'Karbohidrat', 'Non Organik', 3000, 50, '3', '', '2021-01-12', 'images (8).jpeg'),
(14, 'Bambang', 'Jember', '083456789098', 'Jagung', 'Manis', 'Biji-bijian', 'Non Organik', 5000, 20, '3', '', '2021-01-13', 'gambar-tanaman-jagung-yang-sehat-520x245.jpg'),
(15, 'Bambang', 'Jember', '6281252604380', 'Kacang', 'Tanah', 'Biji-bijian', 'Non Organik', 5000, 19, '4', '', '2021-01-18', 'pangan-kacang-tanah.jpg'),
(16, 'Dea', 'Wuluhan Jember', '081331574071', 'Jeruk', 'Semboro', 'Buah', 'Organik', 8000, 92, '3', '', '2021-01-03', 'IMG-20210128-WA0012.jpg'),
(17, 'Bambang', 'Semboro', '083456789098', 'Jambu Air', 'Merah', 'Buah', 'Organik', 5000, 23, '3', '', '2021-01-07', 'IMG-20210128-WA0011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `noresi` varchar(60) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `email` varchar(200) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `noresi`, `nama`, `alamat`, `telp`, `email`, `metode`, `tgl_pesan`, `batas_bayar`, `status`, `bukti`) VALUES
(31, 'BC12gh', 'Ana Nur Rohmah', 'SEMBORO', '082139474513', 'ananurrohma09@gmail.com', 'COD (Disetujui)', '2021-01-28 16:21:19', '2021-01-29 16:21:19', 'DIPROSES', '11.jpg'),
(32, 'ab90ki765', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'Transfer', '2021-01-29 10:21:07', '2021-01-30 10:21:07', 'DIPROSES', ''),
(33, 'bwbqwgh78', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'Transfer', '2021-01-29 20:41:31', '2021-01-30 20:41:31', 'LUNAS', 'IMG_20210129_2053363.jpg'),
(34, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'COD', '2021-01-31 18:02:54', '2021-02-01 18:02:54', 'Belum Lunas', ''),
(35, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', '', '2021-07-15 20:58:39', '2021-07-16 20:58:39', '', ''),
(36, '', 'Ana Nur', 'Jember', '083456789098', 'ananurrohma10@gmail.com', '', '2021-07-15 21:17:45', '2021-07-16 21:17:45', '', ''),
(37, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', '', '2021-07-17 13:38:31', '2021-07-18 13:38:31', '', ''),
(38, '', 'Ana Nur', 'Jember', '082139474513', 'ananurrohma10@gmail.com', 'Transfer', '2021-07-17 13:40:56', '2021-07-18 13:40:56', '', ''),
(39, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'Transfer', '2021-07-20 19:59:15', '2021-07-21 19:59:15', '', ''),
(40, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'Transfer', '2021-07-20 20:00:45', '2021-07-21 20:00:45', '', ''),
(41, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'Transfer', '2021-07-20 20:01:50', '2021-07-21 20:01:50', '', ''),
(42, '', 'Ana Nur Rohmah', 'Semboro', '082139474513', 'ananurrohma09@gmail.com', 'COD', '2021-07-20 20:03:23', '2021-07-21 20:03:23', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(23, 30, 11, 'Tomat', 1, 12000, ''),
(24, 31, 11, 'Tomat', 1, 12000, ''),
(25, 32, 16, 'Jeruk', 4, 8000, ''),
(26, 33, 17, 'Jambu Air', 1, 5000, ''),
(27, 34, 12, 'Wortel', 1, 10000, ''),
(28, 34, 17, 'Jambu Air', 1, 5000, ''),
(29, 35, 12, 'Wortel', 1, 10000, ''),
(30, 36, 16, 'Jeruk', 1, 8000, ''),
(31, 36, 11, 'Tomat', 1, 12000, ''),
(32, 36, 12, 'Wortel', 1, 10000, ''),
(33, 37, 11, 'Tomat', 1, 12000, ''),
(34, 38, 11, 'Tomat', 1, 12000, ''),
(35, 39, 12, 'Wortel', 1, 10000, ''),
(36, 40, 16, 'Jeruk', 3, 8000, ''),
(37, 41, 12, 'Wortel', 1, 10000, ''),
(38, 42, 15, 'Kacang', 1, 5000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah WHERE id_brg = NEW.id_brg;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `telp`, `username`, `alamat`, `password`, `role_id`, `email`) VALUES
(11, '082139474513', 'Ana Nur Rohmah', 'Semboro', 'ana1009', 2, ''),
(12, '081331574071', 'Dea Safitri', '', 'dea1234', 1, ''),
(13, '082147483647', 'Rifda', '', 'rifda34', 1, ''),
(14, '', 'Ana Nur', '', 'ana1234', 2, 'ananurrohma09@gmail.com'),
(15, '', 'Rifda Zifikta', '', 'rifda123', 1, 'rifdazifikta10@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
