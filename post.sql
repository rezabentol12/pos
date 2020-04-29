-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 11.07
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `uwow` ()  BEGIN
SELECT COUNT(*) FROM kategori_barang;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `barang_id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `kategori_barang` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_barang`
--

INSERT INTO `data_barang` (`barang_id`, `nama_barang`, `kategori_barang`, `harga`, `jumlah`) VALUES
(2, 'hhhhh', 'samin', 300000, 3),
(3, 'hg', 'fsdff', 800000, 7),
(4, 'bnbhb', 'fsdff', 400000000, -14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_barang`
--

INSERT INTO `kategori_barang` (`id`, `nama_kategori`, `foto`) VALUES
(1, 'samin', 'gmail_logo_PNG102.png'),
(2, 'fsdff', 'citilink-bidik-18-juta-penumpang-untuk-diterbangkan-tahun-ini-yvtDlbxB0Y.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `transaksi_id` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `operator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`transaksi_id`, `tanggal_transaksi`, `operator_id`) VALUES
(1, '2019-12-31', 1),
(2, '2020-02-03', 1),
(3, '2020-02-26', 1),
(4, '2020-02-26', 1),
(5, '2020-02-26', 1),
(6, '2020-02-26', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `operator_id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `terakhir_login` datetime NOT NULL,
  `role_id` varchar(50) NOT NULL,
  `status` enum('masuk','keluar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`operator_id`, `nama`, `username`, `password`, `terakhir_login`, `role_id`, `status`) VALUES
(1, 'muhammad fairu reza', 'reza', '123', '2020-02-26 07:21:37', '2', 'masuk'),
(2, 'samin', 'reza', 'reza', '2020-02-26 07:21:37', '1', 'masuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(122) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `transaksi_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '1=sudah diproses,0=belum diproses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `barang_id`, `qty`, `harga`, `transaksi_id`, `status`) VALUES
(1, 1, '5', 1000000, 1, '1'),
(2, 1, '1', 1000000, 1, '1'),
(3, 2, '10', 300000, 1, '1'),
(4, 1, '2', 1000000, 1, '1'),
(5, 2, '5', 300000, 1, '1'),
(6, 2, '1', 300000, 2, '1'),
(7, 4, '4', 400000000, 2, '1'),
(8, 1, '2', 1000000, 2, '1'),
(9, 4, '2', 400000000, 2, '1'),
(10, 4, '1', 400000000, 2, '1'),
(11, 5, '3', 5, 2, '1'),
(16, 4, '5', 400000000, 3, '1'),
(17, 4, '2', 400000000, 4, '1'),
(18, 4, '3', 400000000, 0, '0');

--
-- Trigger `transaksi`
--
DELIMITER $$
CREATE TRIGGER `mengurang` AFTER INSERT ON `transaksi` FOR EACH ROW BEGIN
UPDATE data_barang SET jumlah=jumlah - new.qty
WHERE barang_id =new.barang_id;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indeks untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`transaksi_id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`operator_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `barang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `operator_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
