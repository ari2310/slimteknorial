-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Des 2016 pada 04.15
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slimteknorialdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `4`
--

CREATE TABLE `4` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `4`
--

INSERT INTO `4` (`id_produk`, `nama`, `harga`, `status`) VALUES
(1, 'Asus', '1500000', 'tersedia'),
(2, 'Xiomi', '1400000', 'tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama`, `harga`, `status`) VALUES
(1, 'Asus', '1500000', 'tersedia'),
(2, 'Xiomi', '2000000', 'tidak tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia'),
(0, 'LG 31', '4000000', 'tersedia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
