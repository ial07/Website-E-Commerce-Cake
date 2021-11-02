-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2021 pada 00.58
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(20) NOT NULL,
  `admin_toko` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_alamat` text NOT NULL,
  `admin_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_toko`, `admin_email`, `admin_password`, `admin_alamat`, `admin_foto`) VALUES
(1, 'Yanti', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'Muko-Muko', '20210615085848_67269.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_checkout`
--

CREATE TABLE `tb_checkout` (
  `checkout_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` int(12) NOT NULL,
  `norek` int(15) NOT NULL,
  `narek` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `register_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_contact`
--

CREATE TABLE `tb_contact` (
  `contact_id` int(11) NOT NULL,
  `contact_nama` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `keranjang_id` int(20) NOT NULL,
  `register_id` int(11) NOT NULL,
  `keranjang_foto` varchar(255) NOT NULL,
  `keranjang_nama` varchar(255) NOT NULL,
  `keranjang_harga` int(20) NOT NULL,
  `keranjang_ukuran` varchar(255) NOT NULL,
  `keranjang_jumlah` int(20) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`keranjang_id`, `register_id`, `keranjang_foto`, `keranjang_nama`, `keranjang_harga`, `keranjang_ukuran`, `keranjang_jumlah`, `produk_id`, `admin_id`) VALUES
(1, 0, '20210615091203_14336.jpg', 'Kue Ulang Tahun', 200000, '', 1, 1, 0),
(2, 1, '20210615091256_18271.jpg', 'Kue Ulang Tahun', 200000, '', 1, 1, 0),
(3, 2, '20210626100356_64526.jpg', 'Kue Ulang Tahun', 200000, '', 1, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(20) NOT NULL,
  `produk_nama` varchar(255) NOT NULL,
  `produk_harga` int(20) NOT NULL,
  `produk_stok` int(20) NOT NULL,
  `produk_detail` text NOT NULL,
  `produk_foto` varchar(255) NOT NULL,
  `produk_kat` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `produk_nama`, `produk_harga`, `produk_stok`, `produk_detail`, `produk_foto`, `produk_kat`, `admin_id`) VALUES
(1, 'Kue Ulang Tahun', 200000, 15, '<p>Kue Ini buat Ulang Tahun</p>\r\n', '20210615090034_36686.jpg', 'Kue Ulang Tahun', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_register`
--

CREATE TABLE `tb_register` (
  `register_id` int(11) NOT NULL,
  `register_username` varchar(255) NOT NULL,
  `register_email` varchar(255) NOT NULL,
  `register_password` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_register`
--

INSERT INTO `tb_register` (`register_id`, `register_username`, `register_email`, `register_password`, `admin_id`) VALUES
(1, 'rilki', 'rilki@gmail.com', 'rilki', 0),
(2, 'a', 'a@gmail.com', 'a', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_checkout`
--
ALTER TABLE `tb_checkout`
  ADD PRIMARY KEY (`checkout_id`);

--
-- Indeks untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`keranjang_id`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- Indeks untuk tabel `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`register_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_checkout`
--
ALTER TABLE `tb_checkout`
  MODIFY `checkout_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `keranjang_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
