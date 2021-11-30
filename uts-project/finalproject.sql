-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2020 pada 17.32
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_callofduty`
--

CREATE TABLE `daftar_callofduty` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_callofduty`
--

INSERT INTO `daftar_callofduty` (`id`, `item`, `harga`, `gambar`) VALUES
(1, '31 CP', 5000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(2, '62 CP', 10000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(3, '127 CP', 20000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(4, '317 CP', 50000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(5, '634 CP', 100000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(6, '1373', 200000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(7, '2059 CP', 300000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(8, '3564 CP', 500000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(9, '7657 CP', 1000000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg'),
(10, '15312 CP', 2000000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fcp.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_mobilelegend`
--

CREATE TABLE `daftar_mobilelegend` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_mobilelegend`
--

INSERT INTO `daftar_mobilelegend` (`id`, `item`, `harga`, `gambar`) VALUES
(1, '3 diamond', 1500, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg\r\n'),
(2, '59 diamond', 15200, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(3, '85 diamond', 22000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(4, '170 diamond', 43700, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(5, '240 diamond', 65000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(6, '296 diamond', 80000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(7, '408 diamond', 110000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(8, '568 diamond', 150000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(9, '2010 diamond', 500000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg'),
(10, '4830 diamond', 1200000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarMobileLegend%2Fdiamond.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_valorant`
--

CREATE TABLE `daftar_valorant` (
  `id` int(11) NOT NULL,
  `item` varchar(255) NOT NULL,
  `harga` int(50) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_valorant`
--

INSERT INTO `daftar_valorant` (`id`, `item`, `harga`, `gambar`) VALUES
(1, '123 points', 15000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(2, '420 points', 50000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(3, '700 points', 80000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(4, '800 points', 100000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(5, '1100 points', 115000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(6, '1375 points', 150000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(7, '2400 points', 250000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(8, '4000 points', 400000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(9, '8150 points', 800000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png'),
(10, '10000 points', 1000000, 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/daftarValorant%2Fvalorant-logo-5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `game` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `game`
--

INSERT INTO `game` (`id`, `game`, `gambar`) VALUES
(1, 'Valorant', 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/uploads%2Fvalorant.jpg'),
(2, 'Mobile Legend', 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/uploads%2Fteh-hangat.jpg'),
(3, 'Call Of Duty', 'https://objectstorage.ap-osaka-1.oraclecloud.com/n/axsorteekh7g/b/uts/o/uploads%2Fcod.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksivalorant`
--

CREATE TABLE `transaksivalorant` (
  `id_transaksi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idvalorant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'jack daniels', 'Jack11', '9ea5e6f10d48803ae38499c0d5e6d93f', '1'),
(2, 'Tommu Gun', 'Tom15', '97f164b4c1ad3bbf876b4b322ea1a68b', '2'),
(3, 'Roy Martin', 'Roy17', '46f227e9cf17e2e1e88b14e679047bd9', '1'),
(4, 'killjoy', 'joy19', '93279e3308bdbbeed946fc965017f67a', '1'),
(5, 'loiz lane', 'loiz03', '5379884c5ec4e06879f7400fd40be0d9', '1'),
(6, 'Aldy Pratama', 'aldy07', '73b197105b5366d300bcab1aba35fb9b', '1'),
(7, 'Tom Jerry', 'toms04', '8a15f1e163a53f99c3e2c75b1641f379', '2'),
(8, 'lady gaga', 'lady08', 'caa88b35f593f99340ca56b131a8a7da', '2'),
(9, 'harry potter', 'harry09', '18cb5657ca8c78f9552b1c1c184d07f4', '2'),
(10, 'gerry ', 'gerry10', '858915f1d2d425959fd4da867ba6b599', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_callofduty`
--
ALTER TABLE `daftar_callofduty`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_mobilelegend`
--
ALTER TABLE `daftar_mobilelegend`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar_valorant`
--
ALTER TABLE `daftar_valorant`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksivalorant`
--
ALTER TABLE `transaksivalorant`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id` (`id`,`idvalorant`),
  ADD KEY `idvalorant` (`idvalorant`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `daftar_callofduty`
--
ALTER TABLE `daftar_callofduty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `daftar_mobilelegend`
--
ALTER TABLE `daftar_mobilelegend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `daftar_valorant`
--
ALTER TABLE `daftar_valorant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `transaksivalorant`
--
ALTER TABLE `transaksivalorant`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksivalorant`
--
ALTER TABLE `transaksivalorant`
  ADD CONSTRAINT `transaksivalorant_ibfk_1` FOREIGN KEY (`idvalorant`) REFERENCES `daftar_valorant` (`id`),
  ADD CONSTRAINT `transaksivalorant_ibfk_2` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
