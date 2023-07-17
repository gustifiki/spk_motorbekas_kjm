-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 10:30 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motorbekas_saw`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(5) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `tahun_pembuatan` varchar(50) NOT NULL,
  `kondisi_mesin` varchar(20) NOT NULL,
  `kondisi_body` varchar(20) NOT NULL,
  `konsumsi_bbm` varchar(20) NOT NULL,
  `jarak_tempuh` varchar(20) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `foto_alternatif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `nama_alternatif`, `tahun_pembuatan`, `kondisi_mesin`, `kondisi_body`, `konsumsi_bbm`, `jarak_tempuh`, `harga`, `foto_alternatif`) VALUES
(1, 'Honda CBR150R type ABS', '2020', 'Sangat Bagus', 'Bagus', '43', '11083', '28000000', '3746_cbrmerah (2).jpg'),
(2, 'Yamaha WR 155 R', '2021', 'Sangat Bagus', 'Bagus', '48', '5076', '34000000', '5977_300830261_472285791573447_5322884595916460435_n.jpg'),
(4, 'Kawasaki KLX 150 BF Extreme', '2022', 'Sangat Bagus', 'Sangat Bagus', '32', '2984', '35000000', '11628_306076805_5210757905689628_4159161161161609443_n.jpg'),
(5, 'Honda Beat ESP', '2020', 'Sangat Bagus', 'Bagus', '61', '23842', '15700000', '764_311002045_5307218752710209_8056002854746567339_n.jpg'),
(6, 'Honda Beat Street ESP', '2021', 'Bagus', 'Bagus', '61', '18203', '15500000', '28016_312978577_1464935030582540_2444641329661642999_n.jpg'),
(7, 'Honda CB150R New', '2021', 'Sangat Bagus', 'Sangat Bagus', '46', '3356', '26000000', '31168_313028341_1465759097166800_5386028184716356992_n.jpg'),
(8, 'Honda CBR250RR', '2021', 'Sangat Bagus', 'Bagus', '31', '9441', '55000000', '16026_307173668_5226699034095515_1943991852463991465_n.jpg'),
(9, 'Yamaha Fino New', '2022', 'Sangat Bagus', 'Sangat Bagus', '48', '5503', '18000000', '26857_316812222_5424701464295270_4838986178278183178_n.jpg'),
(10, 'Yamaha Mio Gear', '2022', 'Sangat Bagus', 'Bagus', '47', '10212', '15000000', '28469_315211322_524973772815405_3862867707757209000_n.jpg'),
(11, 'Yamaha NMAX 155 New', '2021', 'Sangat Bagus', 'Sangat Bagus', '39', '6627', '29000000', '17355_316104542_531125105533605_359103594245037337_n.jpg'),
(12, 'Honda PCX 160 New', '2021', 'Bagus', 'Sangat Bagus', '51', '9201', '30500000', '26536_315777798_531124462200336_3145389932875365764_n.jpg'),
(13, 'Honda Scoopy Esp New', '2021', 'Sangat Bagus', 'Bagus', '59', '18978', '22500000', '13849_308499560_5232179280214157_753120655542174716_n.jpg'),
(14, 'Honda Scoopy Esp Old', '2019', 'Bagus', 'Bagus', '61', '23041', '19000000', '22894_311302798_5306535046111913_8732680994589984070_n.jpg'),
(15, 'Honda Vario 125', '2020', 'Sangat Bagus', 'Bagus', '52', '5375', '20000000', '1785_316097109_5413688558729894_7507876159949759147_n.jpg'),
(16, 'Honda Vario 160 ', '2022', 'Sangat Bagus', 'Bagus', '47', '8127', '26000000', '22238_313041629_1464967270579316_7775963586653132984_n.jpg'),
(17, 'Honda Scoopy Esp Old', '2021', 'Bagus', 'Sangat Bagus', '58', '10100', '18000000', '10388_311302798_5306535046111913_8732680994589984070_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alt_motor`
--

CREATE TABLE `tb_alt_motor` (
  `id_alt_motor` smallint(5) NOT NULL,
  `id_alternatif` int(5) NOT NULL,
  `nama_alternatif` varchar(50) NOT NULL,
  `tahun_pembuatan` varchar(20) NOT NULL,
  `kondisi_mesin` varchar(20) NOT NULL,
  `kondisi_body` varchar(20) NOT NULL,
  `konsumsi_bbm` varchar(20) NOT NULL,
  `jarak_tempuh` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alt_motor`
--

INSERT INTO `tb_alt_motor` (`id_alt_motor`, `id_alternatif`, `nama_alternatif`, `tahun_pembuatan`, `kondisi_mesin`, `kondisi_body`, `konsumsi_bbm`, `jarak_tempuh`, `harga`) VALUES
(4, 4, 'Kawasaki KLX 150 BF Extreme', '2022', 'Sangat Bagus', 'Sangat Bagus', '32', '2984', '35000000'),
(9, 9, 'Yamaha Fino New', '2022', 'Sangat Bagus', 'Sangat Bagus', '48', '5503', '18000000'),
(10, 10, 'Yamaha Mio Gear', '2022', 'Sangat Bagus', 'Bagus', '47', '10212', '15000000'),
(16, 16, 'Honda Vario 160 ', '2022', 'Sangat Bagus', 'Bagus', '47', '8127', '26000000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `tipe_kriteria` set('benefit','cost') NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kode`, `kriteria`, `tipe_kriteria`, `bobot`) VALUES
(1, 'K1', 'Harga', 'cost', 25),
(2, 'K2', 'Tahun Pembuatan', 'benefit', 15),
(3, 'K3', 'Kondisi Mesin', 'benefit', 20),
(4, 'K4', 'Kondisi Body', 'benefit', 15),
(5, 'K5', 'Konsumsi BBM', 'benefit', 10),
(6, 'K6', 'Jarak Tempuh', 'cost', 15);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) UNSIGNED NOT NULL,
  `id_alt_motor` smallint(5) UNSIGNED DEFAULT NULL,
  `id_kriteria` tinyint(3) UNSIGNED DEFAULT NULL,
  `nilai` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_alt_motor`, `id_kriteria`, `nilai`) VALUES
(1, 4, 1, 5),
(2, 4, 2, 5),
(3, 4, 3, 5),
(4, 4, 4, 5),
(5, 4, 5, 1),
(6, 4, 6, 1),
(7, 9, 1, 2),
(8, 9, 2, 5),
(9, 9, 3, 5),
(10, 9, 4, 5),
(11, 9, 5, 2),
(12, 9, 6, 2),
(13, 10, 1, 1),
(14, 10, 2, 5),
(15, 10, 3, 5),
(16, 10, 4, 4),
(17, 10, 5, 2),
(18, 10, 6, 3),
(19, 16, 1, 4),
(20, 16, 2, 5),
(21, 16, 3, 5),
(22, 16, 4, 4),
(23, 16, 5, 2),
(24, 16, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `level` enum('admin','visitor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `no_hp`, `foto_user`, `level`) VALUES
(1, 'Admin', 'admin', '202cb962ac59075b964b07152d234b70', '085265706007', '22886_kjmpku.png', 'admin'),
(8, 'Gusti Fiki Maulana', 'gusti', '2c309021e3d4c0f9129d66e733825b48', '085265706007', '4365_WhatsApp Image 2022-11-16 at 10.32.11.jpeg', 'visitor'),
(9, 'Bagus Aja', 'bagus', 'a89407b9014f6f6d9a85f2d5b6a2c118', '085267095678', '25711_313041629_1464967270579316_7775963586653132984_n.jpg', 'visitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_alt_motor`
--
ALTER TABLE `tb_alt_motor`
  ADD PRIMARY KEY (`id_alt_motor`);

--
-- Indexes for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
