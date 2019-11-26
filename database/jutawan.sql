-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 05 Nov 2019 pada 04.41
-- Versi server: 5.7.26
-- Versi PHP: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jutawan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pengunjung`
--

CREATE TABLE `data_pengunjung` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `date` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `date_created` date DEFAULT NULL,
  `date_update` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_pengunjung`
--

INSERT INTO `data_pengunjung` (`id`, `id_lokasi`, `date`, `jumlah`, `date_created`, `date_update`) VALUES
(1, 1, '2018-01-01', 100, '2019-10-31', '2019-10-31'),
(2, 1, '2018-02-01', 200, '2019-10-31', '2019-10-31'),
(3, 1, '2018-03-01', 300, '2019-10-31', '2019-10-31'),
(4, 1, '2018-04-01', 100, '2019-10-31', '2019-10-31'),
(5, 1, '2018-05-01', 400, '2019-10-31', '2019-10-31'),
(6, 1, '2018-06-01', 700, '2019-10-31', '2019-10-31'),
(7, 1, '2018-07-01', 200, '2019-10-31', '2019-10-31'),
(8, 1, '2018-08-01', 100, '2019-10-31', '2019-10-31'),
(9, 1, '2018-09-01', 400, '2019-10-31', '2019-10-31'),
(10, 1, '2018-10-01', 300, '2019-10-31', '2019-10-31'),
(11, 1, '2018-11-01', 400, '2019-10-31', '2019-10-31'),
(12, 1, '2018-12-01', 1000, '2019-10-31', '2019-10-31'),
(13, 1, '2019-01-01', 1500, '2019-10-31', '2019-10-31'),
(14, 1, '2019-02-01', 500, '2019-10-31', '2019-10-31'),
(15, 1, '2019-03-01', 700, '2019-10-31', '2019-10-31'),
(16, 1, '2019-04-01', 300, '2019-10-31', '2019-10-31'),
(17, 1, '2019-05-01', 200, '2019-10-31', '2019-10-31'),
(18, 1, '2019-06-01', 200, '2019-10-31', '2019-10-31'),
(19, 1, '2019-07-01', 200, '2019-10-31', '2019-10-31'),
(20, 1, '2019-08-01', 100, '2019-10-31', '2019-10-31'),
(21, 1, '2019-09-01', 300, '2019-10-31', '2019-10-31'),
(22, 1, '2019-10-01', 500, '2019-10-31', '2019-10-31'),
(23, 1, '2019-11-01', 500, '2019-10-31', '2019-10-31'),
(24, 1, '2019-12-01', 700, '2019-10-31', '2019-10-31'),
(25, 2, '2018-01-01', 500, '2019-10-31', '2019-10-31'),
(26, 2, '2018-02-01', 300, '2019-10-31', '2019-10-31'),
(27, 2, '2018-03-01', 400, '2019-10-31', '2019-10-31'),
(28, 2, '2018-04-01', 500, '2019-10-31', '2019-10-31'),
(29, 2, '2018-05-01', 800, '2019-10-31', '2019-10-31'),
(30, 2, '2018-06-01', 700, '2019-10-31', '2019-10-31'),
(31, 2, '2018-07-01', 300, '2019-10-31', '2019-10-31'),
(32, 2, '2018-08-01', 200, '2019-10-31', '2019-10-31'),
(33, 2, '2018-09-01', 700, '2019-10-31', '2019-10-31'),
(34, 2, '2018-10-01', 400, '2019-10-31', '2019-10-31'),
(35, 2, '2018-11-01', 300, '2019-10-31', '2019-10-31'),
(36, 2, '2018-12-01', 1000, '2019-10-31', '2019-10-31'),
(37, 2, '2019-01-01', 500, '2019-10-31', '2019-10-31'),
(38, 2, '2019-02-01', 700, '2019-10-31', '2019-10-31'),
(39, 2, '2019-03-01', 400, '2019-10-31', '2019-10-31'),
(40, 2, '2019-04-01', 700, '2019-10-31', '2019-10-31'),
(41, 2, '2019-05-01', 900, '2019-10-31', '2019-10-31'),
(42, 2, '2019-06-01', 700, '2019-10-31', '2019-10-31'),
(43, 2, '2019-07-01', 200, '2019-10-31', '2019-10-31'),
(44, 2, '2019-08-01', 100, '2019-10-31', '2019-10-31'),
(45, 2, '2019-09-01', 300, '2019-10-31', '2019-10-31'),
(46, 2, '2019-10-01', 400, '2019-10-31', '2019-10-31'),
(47, 2, '2019-11-01', 500, '2019-10-31', '2019-10-31'),
(48, 2, '2019-12-01', 1300, '2019-10-31', '2019-10-31'),
(49, 3, '2018-01-01', 300, '2019-10-31', '2019-10-31'),
(50, 3, '2018-02-01', 400, '2019-10-31', '2019-10-31'),
(51, 3, '2018-03-01', 100, '2019-10-31', '2019-10-31'),
(52, 3, '2018-04-01', 200, '2019-10-31', '2019-10-31'),
(53, 3, '2018-05-01', 400, '2019-10-31', '2019-10-31'),
(54, 3, '2018-06-01', 700, '2019-10-31', '2019-10-31'),
(55, 3, '2018-07-01', 200, '2019-10-31', '2019-10-31'),
(56, 3, '2018-08-01', 400, '2019-10-31', '2019-10-31'),
(57, 3, '2018-09-01', 500, '2019-10-31', '2019-10-31'),
(58, 3, '2018-10-01', 300, '2019-10-31', '2019-10-31'),
(59, 3, '2018-11-01', 400, '2019-10-31', '2019-10-31'),
(60, 3, '2018-12-01', 200, '2019-10-31', '2019-10-31'),
(61, 3, '2019-01-01', 200, '2019-10-31', '2019-10-31'),
(62, 3, '2019-02-01', 300, '2019-10-31', '2019-10-31'),
(63, 3, '2019-03-01', 400, '2019-10-31', '2019-10-31'),
(64, 3, '2019-04-01', 200, '2019-10-31', '2019-10-31'),
(65, 3, '2019-05-01', 500, '2019-10-31', '2019-10-31'),
(66, 3, '2019-06-01', 700, '2019-10-31', '2019-10-31'),
(67, 3, '2019-07-01', 300, '2019-10-31', '2019-10-31'),
(68, 3, '2019-08-01', 200, '2019-10-31', '2019-10-31'),
(69, 3, '2019-09-01', 300, '2019-10-31', '2019-10-31'),
(70, 3, '2019-10-01', 300, '2019-10-31', '2019-10-31'),
(71, 3, '2019-11-01', 400, '2019-10-31', '2019-10-31'),
(72, 3, '2019-12-01', 400, '2019-10-31', '2019-10-31'),
(73, 4, '2018-01-01', 300, '2019-10-31', '2019-10-31'),
(74, 4, '2018-02-01', 400, '2019-10-31', '2019-10-31'),
(75, 4, '2018-03-01', 700, '2019-10-31', '2019-10-31'),
(76, 4, '2018-04-01', 200, '2019-10-31', '2019-10-31'),
(77, 4, '2018-05-01', 300, '2019-10-31', '2019-10-31'),
(78, 4, '2018-06-01', 500, '2019-10-31', '2019-10-31'),
(79, 4, '2018-07-01', 500, '2019-10-31', '2019-10-31'),
(80, 4, '2018-08-01', 400, '2019-10-31', '2019-10-31'),
(81, 4, '2018-09-01', 300, '2019-10-31', '2019-10-31'),
(82, 4, '2018-10-01', 400, '2019-10-31', '2019-10-31'),
(83, 4, '2018-11-01', 200, '2019-10-31', '2019-10-31'),
(84, 4, '2018-12-01', 1000, '2019-10-31', '2019-10-31'),
(85, 4, '2019-01-01', 300, '2019-10-31', '2019-10-31'),
(86, 4, '2019-02-01', 400, '2019-10-31', '2019-10-31'),
(87, 4, '2019-03-01', 200, '2019-10-31', '2019-10-31'),
(88, 4, '2019-04-01', 400, '2019-10-31', '2019-10-31'),
(89, 4, '2019-05-01', 700, '2019-10-31', '2019-10-31'),
(90, 4, '2019-06-01', 300, '2019-10-31', '2019-10-31'),
(91, 4, '2019-07-01', 700, '2019-10-31', '2019-10-31'),
(92, 4, '2019-08-01', 400, '2019-10-31', '2019-10-31'),
(93, 4, '2019-09-01', 500, '2019-10-31', '2019-10-31'),
(94, 4, '2019-10-01', 400, '2019-10-31', '2019-10-31'),
(95, 4, '2019-11-01', 500, '2019-10-31', '2019-10-31'),
(96, 4, '2019-12-01', 1000, '2019-10-31', '2019-10-31'),
(97, 5, '2018-01-01', 400, '2019-10-31', '2019-10-31'),
(98, 5, '2018-02-01', 300, '2019-10-31', '2019-10-31'),
(99, 5, '2018-03-01', 200, '2019-10-31', '2019-10-31'),
(100, 5, '2018-04-01', 500, '2019-10-31', '2019-10-31'),
(101, 5, '2018-05-01', 300, '2019-10-31', '2019-10-31'),
(102, 5, '2018-06-01', 300, '2019-10-31', '2019-10-31'),
(103, 5, '2018-07-01', 400, '2019-10-31', '2019-10-31'),
(104, 5, '2018-08-01', 300, '2019-10-31', '2019-10-31'),
(105, 5, '2018-09-01', 500, '2019-10-31', '2019-10-31'),
(106, 5, '2018-10-01', 400, '2019-10-31', '2019-10-31'),
(107, 5, '2018-11-01', 400, '2019-10-31', '2019-10-31'),
(108, 5, '2018-12-01', 500, '2019-10-31', '2019-10-31'),
(109, 5, '2019-01-01', 1000, '2019-10-31', '2019-10-31'),
(110, 5, '2019-02-01', 400, '2019-10-31', '2019-10-31'),
(111, 5, '2019-03-01', 700, '2019-10-31', '2019-10-31'),
(112, 5, '2019-04-01', 300, '2019-10-31', '2019-10-31'),
(113, 5, '2019-05-01', 700, '2019-10-31', '2019-10-31'),
(114, 5, '2019-06-01', 400, '2019-10-31', '2019-10-31'),
(115, 5, '2019-07-01', 700, '2019-10-31', '2019-10-31'),
(116, 5, '2019-08-01', 300, '2019-10-31', '2019-10-31'),
(117, 5, '2019-09-01', 200, '2019-10-31', '2019-10-31'),
(118, 5, '2019-10-01', 300, '2019-10-31', '2019-10-31'),
(119, 5, '2019-11-01', 400, '2019-10-31', '2019-10-31'),
(120, 5, '2019-12-01', 700, '2019-10-31', '2019-10-31'),
(121, 6, '2018-01-01', 400, '2019-10-31', '2019-10-31'),
(122, 6, '2018-02-01', 300, '2019-10-31', '2019-10-31'),
(123, 6, '2018-03-01', 200, '2019-10-31', '2019-10-31'),
(124, 6, '2018-04-01', 500, '2019-10-31', '2019-10-31'),
(125, 6, '2018-05-01', 700, '2019-10-31', '2019-10-31'),
(126, 6, '2018-06-01', 500, '2019-10-31', '2019-10-31'),
(127, 6, '2018-07-01', 400, '2019-10-31', '2019-10-31'),
(128, 6, '2018-08-01', 1000, '2019-10-31', '2019-10-31'),
(129, 6, '2018-09-01', 400, '2019-10-31', '2019-10-31'),
(130, 6, '2018-10-01', 400, '2019-10-31', '2019-10-31'),
(131, 6, '2018-11-01', 500, '2019-10-31', '2019-10-31'),
(132, 6, '2018-12-01', 200, '2019-10-31', '2019-10-31'),
(133, 6, '2019-01-01', 400, '2019-10-31', '2019-10-31'),
(134, 6, '2019-02-01', 500, '2019-10-31', '2019-10-31'),
(135, 6, '2019-03-01', 700, '2019-10-31', '2019-10-31'),
(136, 6, '2019-04-01', 500, '2019-10-31', '2019-10-31'),
(137, 6, '2019-05-01', 700, '2019-10-31', '2019-10-31'),
(138, 6, '2019-06-01', 400, '2019-10-31', '2019-10-31'),
(139, 6, '2019-07-01', 300, '2019-10-31', '2019-10-31'),
(140, 6, '2019-08-01', 500, '2019-10-31', '2019-10-31'),
(141, 6, '2019-09-01', 700, '2019-10-31', '2019-10-31'),
(142, 6, '2019-10-01', 300, '2019-10-31', '2019-10-31'),
(143, 6, '2019-11-01', 500, '2019-10-31', '2019-10-31'),
(144, 6, '2019-12-01', 700, '2019-10-31', '2019-10-31'),
(145, 7, '2018-01-01', 400, '2019-10-31', '2019-10-31'),
(146, 7, '2018-02-01', 300, '2019-10-31', '2019-10-31'),
(147, 7, '2018-03-01', 300, '2019-10-31', '2019-10-31'),
(148, 7, '2018-04-01', 700, '2019-10-31', '2019-10-31'),
(149, 7, '2018-05-01', 200, '2019-10-31', '2019-10-31'),
(150, 7, '2018-06-01', 400, '2019-10-31', '2019-10-31'),
(151, 7, '2018-07-01', 700, '2019-10-31', '2019-10-31'),
(152, 7, '2018-08-01', 400, '2019-10-31', '2019-10-31'),
(153, 7, '2018-09-01', 500, '2019-10-31', '2019-10-31'),
(154, 7, '2018-10-01', 700, '2019-10-31', '2019-10-31'),
(155, 7, '2018-11-01', 500, '2019-10-31', '2019-10-31'),
(156, 7, '2018-12-01', 300, '2019-10-31', '2019-10-31'),
(157, 7, '2019-01-01', 400, '2019-10-31', '2019-10-31'),
(158, 7, '2019-02-01', 500, '2019-10-31', '2019-10-31'),
(159, 7, '2019-03-01', 400, '2019-10-31', '2019-10-31'),
(160, 7, '2019-04-01', 700, '2019-10-31', '2019-10-31'),
(161, 7, '2019-05-01', 200, '2019-10-31', '2019-10-31'),
(162, 7, '2019-06-01', 300, '2019-10-31', '2019-10-31'),
(163, 7, '2019-07-01', 500, '2019-10-31', '2019-10-31'),
(164, 7, '2019-08-01', 400, '2019-10-31', '2019-10-31'),
(165, 7, '2019-09-01', 500, '2019-10-31', '2019-10-31'),
(166, 7, '2019-10-01', 400, '2019-10-31', '2019-10-31'),
(167, 7, '2019-11-01', 700, '2019-10-31', '2019-10-31'),
(168, 7, '2019-12-01', 500, '2019-10-31', '2019-10-31'),
(169, 8, '2018-01-01', 400, '2019-10-31', '2019-10-31'),
(170, 8, '2018-02-01', 300, '2019-10-31', '2019-10-31'),
(171, 8, '2018-03-01', 500, '2019-10-31', '2019-10-31'),
(172, 8, '2018-04-01', 500, '2019-10-31', '2019-10-31'),
(173, 8, '2018-05-01', 700, '2019-10-31', '2019-10-31'),
(174, 8, '2018-06-01', 300, '2019-10-31', '2019-10-31'),
(175, 8, '2018-07-01', 300, '2019-10-31', '2019-10-31'),
(176, 8, '2018-08-01', 400, '2019-10-31', '2019-10-31'),
(177, 8, '2018-09-01', 500, '2019-10-31', '2019-10-31'),
(178, 8, '2018-10-01', 1000, '2019-10-31', '2019-10-31'),
(179, 8, '2018-11-01', 400, '2019-10-31', '2019-10-31'),
(180, 8, '2018-12-01', 500, '2019-10-31', '2019-10-31'),
(181, 8, '2019-01-01', 500, '2019-10-31', '2019-10-31'),
(182, 8, '2019-02-01', 500, '2019-10-31', '2019-10-31'),
(183, 8, '2019-03-01', 400, '2019-10-31', '2019-10-31'),
(184, 8, '2019-04-01', 700, '2019-10-31', '2019-10-31'),
(185, 8, '2019-05-01', 1000, '2019-10-31', '2019-10-31'),
(186, 8, '2019-06-01', 500, '2019-10-31', '2019-10-31'),
(187, 8, '2019-07-01', 700, '2019-10-31', '2019-10-31'),
(188, 8, '2019-08-01', 400, '2019-10-31', '2019-10-31'),
(189, 8, '2019-09-01', 200, '2019-10-31', '2019-10-31'),
(190, 8, '2019-10-01', 200, '2019-10-31', '2019-10-31'),
(191, 8, '2019-11-01', 500, '2019-10-31', '2019-10-31'),
(192, 8, '2019-12-01', 500, '2019-10-31', '2019-10-31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `name`, `photo`, `id_lokasi`) VALUES
(1, 'coba', 'default.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `style` varchar(20) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `icon`, `style`, `is_active`) VALUES
(1, 'Edukasi', 'la-puzzle-piece', 'text-primary', 1),
(2, 'Belanja', 'la-shopping-cart', 'text-success', 1),
(3, 'Menginap', 'la-bed', 'text-info', 1),
(4, 'Seni Budaya', 'la-music', 'text-warning', 1),
(5, 'Wisata', 'la-map-marker', 'text-danger', 1),
(6, 'Ekonomi Kreatif', 'la-laptop', 'text-primary', 1),
(7, 'Transportasi', 'la-plane', 'text-success', 1),
(8, 'Kuliner', 'la-cutlery', 'text-info', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lks` varchar(128) NOT NULL,
  `kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tagline` varchar(128) NOT NULL,
  `tiket` int(11) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_tlp` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL,
  `sosmed` int(11) NOT NULL,
  `oprational` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `video` varchar(128) NOT NULL,
  `iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lks`, `kategori`, `deskripsi`, `tagline`, `tiket`, `alamat`, `no_tlp`, `email`, `website`, `sosmed`, `oprational`, `photo`, `video`, `iduser`) VALUES
(1, 'Museum Geologi Bandung', 1, 'Museum Geologi Bandung bla bla bla\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa kequi officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem que laudantium, totam rem aperiam the eaque ipsa quae abillo was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo. Nemo ucxqui officia voluptatem accu santium doloremque laudantium, totam rem ape dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.', 'Kementerian ESDM | Badan Geologi', 5000, 'Jl. Diponegoro No.57', '(022) 7213822', 'museum-geologi@grdc.esdm.go.id', 'http://museum.geology.esdm.go.id/', 1, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'museumgeologi.jpg', '-', 4),
(2, 'Paris Van Java Mall', 2, 'Paris Van Java - Resort Lifestyle Place\r\nOne of a kind shopping centre in Asia which blends mediterranian architecture and lush greenery into a unique and memorable experience for all ages.\r\n \r\nRevel in an immersive shopping spree with world-renowned brands and creative entrepreneurs. Savour the tastes of the world while dining under the stars. Relish the beauty of nature in Paradiso and immortalize your visit enveloped by luscious flowers and exotic ambiance. Paris Van java - Resort Lifestyle Place bids you welcome for \"The Paris Van Java Experience\"\r\n', 'Paris Van Java - Resort Lifestyle Place One of a kind shopping centre in Asia which blends mediterranian architecture and lush g', 0, ' Jl. Sukajadi No.131-139, Cipedes, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', '(022) 1234567', 'info@paris-van-java.com', 'http://www.parisvanjava.id/', 2, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'pvj.jpg', 'null', 5),
(3, 'Saung Angklung Udjo', 4, 'Saung Angklung Udjo  merupakan sebuah tujuan wisata budaya dan edukasi yang lengkap, karena Saung Angklung Udjo memiliki arena pertunjukan, pusat kerajinan bambu dan workshop untuk alat musik bambu. Disamping itu, kehadiran Saung Angklung Udjo di Bandung menjadi lebih bermakna karena kepeduliannya untuk terus melestarikan dan mengembangkan kebudayaan Sunda – khususnya Angklung – kepada masyarakat melalui sarana pendidikan dan pelatihan.', 'Nature Culture in Harmony', 50000, 'Jl. Padasuka No.118', '(022) 7271714', 'info@angklung-udjo.co.id', 'https://angklungudjo.com/', 3, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'angklungudjo.jpg', '-', 6),
(4, 'The Trans Luxery Hotel', 3, 'Bandung\'s finest 5 star, The Trans Luxury Hotel is located in Bandung city center, next to Trans Studio Bandung, Indonesia\'s largest indoor theme Park,', 'The Grand Ball Room', 1000000, 'Jl. Gatot Subroto No.289, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273', '02287348888', 'transhotel@gmail.com', 'https://www.thetranshotel.com/', 5, '-', 'thetrans.jpg', 'null', 7),
(5, 'Trans Studio', 5, 'Taman hiburan keluarga indoor dengan wahana seru, bioskop, & area bermain untuk anak usia dini.', 'divided into 3 unique and different zones. ', 125000, 'Jl. Gatot Subroto No.289, Cibangkong, Kec. Batununggal, Kota Bandung, Jawa Barat 40273', '02286012555', 'transstudio@gmail.com', 'http://www.transstudiobandung.com/', 6, '-', 'transstudio.jpg', 'null', 8),
(6, 'Rumah Batik Komar', 6, 'Batik Komar was founded in 1998 by Dr. Komarudin Kudiya, M.Ds and his wife, Hj. Nuryanti Widya (Yeyen) In Bandung. At the very beginning, Batik Komar started with designs of “Batik Cirebonan” or Cirebonese Batik. Today, the designs of Batik Komar have been developed to be more modern, combined with the new creation of contemporary designs, which are unique, thematic and also keep up-to-date to the latest fashion trends, thus, they can give prestige value to those who wear them.', 'Rumah Batik Komar', 2000, 'Jl. Cigadung Raya Timur No.1 No.5, Cigadung, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40191', '0224237688', 'batikkomar@gmail.com', 'https://batik-komar.com/', 7, '', 'batikkomar.jpg', 'null', 9),
(7, 'Bandara Husein', 7, 'Bandar Udara Internasional Husein Sastranegara adalah sebuah bandar udara internasional yang terletak di Jalan Pajajaran Nomor. 156, kelurahan Husen Sastranegara, kecamatan Cicendo, kota Bandung.', 'Bandara Husein', 9000, 'Jl. Pajajaran No.156, Husen Sastranegara, Kec. Cicendo, Kota Bandung, Jawa Barat 40174', '0226033971', 'bandarahusein@gmail.com', 'http://huseinsastranegara-airport.co.id/', 8, '-', 'bandarahusein.jpg', 'null', 10),
(8, 'Kartika Sari', 8, 'Kue-kue Kartika Sari® yang menjadi oleh-oleh favorit Anda adalah resep turun-menurun keluarga Ibu Ratnawati yang didapatkan sejak jaman kolonial Belanda. Koleksi resep disimpan dengan baik dan diteliti, sebelum diterapkan ke produk-produk Kartika Sari® agar kualitas dan rasa tetap terasa sempurna. Layanan dan bahan-bahan profesional dari Unilever Food Solutions, adalah salah satu perusahaan jasa makanan terkemuka di dunia yang juga mendukung bisnis Kartika Sari® hingga kini.\r\n\r\nSeperti halnya puff pastry, begitu juga dengan bisnis Kartika Sari®. Awalnya biasa saja, kelihatannya hanya seperti sebentuk adonan polos. Tapi, begitu masuk ke dalam oven, wih, lapis demi lapis mulai mengembang hingga menjadi lapisan kulit yang renyah dan lekker (padahal tidak pakai ragi atau bahan pengembang kue, lho!) Kok bisa ya? Ternyata, kuncinya ada pada passion atau ketekunan. Bayangkan, ratusan lapis adonan yang sudah tipis-tipis itu terus digulung, ditarik, dilipat, digulung lagi, ditarik lagi, dilipat lagi, dan terus begitu sampai dapat konsistensi yang diinginkan.', 'DRIVEN BY PASSION POLISHED BY INNOVATION', 90000, 'Jl. Ir. H. Juanda No.85 - 87, Lb. Siliwangi, Kecamatan Coblong, Kota Bandung, Jawa Barat 40132', '0222509500', 'kartikasari@gmail.com', 'https://kartikasari.com/', 9, '-', 'kartikasari.jpg', 'null', 11);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `twitter` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'https://www.facebook.com/groups/60256428517/', 'https://www.instagram.com/geomuzee/', 'https://twitter.com/geomuzee'),
(2, 'https://www.facebook.com/officialpvj', 'https://www.instagram.com/pvjofficial/', 'https://twitter.com/PVJbandung'),
(3, 'https://www.facebook.com/saungangklungudjo/', 'https://www.instagram.com/angklungudjo/', 'https://twitter.com/angklungudjo'),
(4, 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin'),
(5, 'http://instagram.com/', 'http://instagram.com/', 'http://instagram.com/'),
(6, 'http://instagram.com/', 'http://instagram.com/', 'http://instagram.com/'),
(7, 'http://instagram.com/', 'http://instagram.com/', 'http://instagram.com/'),
(8, 'http://instagram.com/', 'http://instagram.com/', 'http://instagram.com/'),
(9, 'http://instagram.com/', 'http://instagram.com/', 'http://instagram.com/');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Dani Sofyan', 'danixsofyan@gmail.com', 'profile.jpg', '$2y$10$mRgjjv/AlvpNv4XXK6rxU.RY4Ec1okSEyfLzlAe924l.CdRsRTU22', 1, 1, 1563523827),
(2, 'Anugerah Dicky Pratama', 'anugerahdickypratama@gmail.com', 'default.jpg', '$2y$10$HgNL9VvMi0J.aZZJ8YvWpez9c0VopyFUCMAltwc0kQS1ypaQx3MwG', 1, 1, 1572489115),
(3, 'Disbudpar', 'disbudpar@bandung.go.id', 'stunningbandung.jpg', '$2y$10$Fm7NkUZG1r85Aqr3USQ2/ONZKsKJdIhsGPfCiuu07H7zAv/FnQnPq', 2, 1, 1572494949),
(4, 'Museum Geologi Bandung', 'museumgeologi@gmail.com', 'default.jpg', '$2y$10$6iKoKgr/LVBAE96PYgwi.uMWa73Gqw8CbJC2YSckA5qFvfuSNY9Bu', 3, 1, 1572489329),
(5, 'Paris Van Java', 'parisvanjava@gmail.com', 'default.jpg', '$2y$10$Luzn5tyrhzVL/mRymoT98uGmmny.8Fd02RflX3536uNQ3CdN0UpU2', 3, 1, 1572494956),
(6, 'Saung Angklung Udjo', 'saungangklungudjo@gmail.com', 'default.jpg', '$2y$10$lGlmWvh8aVsfyY9/IsCmQOc2Bwfh7VKNzSi19dYWaUySc8HaviukS', 3, 1, 1572494961),
(7, 'The Trans Luxury Hotel', 'transhotel@gmail.com', 'default.jpg', '$2y$10$ztY4evHuXhnPawFhFFZe6OiaBBeHJ/0.RopNwteSdHEiQJRvVMYIS', 3, 1, 1572502056),
(8, 'Trans Studio', 'transstudio@gmail.com', 'default.jpg', '$2y$10$O5kRvRuX5Grv0GOAx2/62uZ5TtEcOfRi4rPgPoJ5Jgf1xxfYFN4ue', 3, 1, 1572502137),
(9, 'Batik Komar', 'batikkomar@gmail.com', 'default.jpg', '$2y$10$l5z/aBqyNOD8xF3dFSgpvOSmXszhT6MoUTxxU6dVThXTCRttWVAp6', 3, 1, 1572502513),
(10, 'Bandara Husein Sastra Negara', 'bandarahusein@gmail.com', 'default.jpg', '$2y$10$PahlXgZnB7QyySAvrw2vM.muUePDxwHovSVvlduRO6o/Ajkp3s306', 3, 1, 1572502555),
(11, 'Kartika Sari', 'kartikasari@gmail.com', 'default.jpg', '$2y$10$xqiZcpCuVz6Yh1IrqjgbsOcpOL1m0NTHpynJRiEUTsTTlrIydX8QO', 3, 1, 1572502594);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 2, 1),
(7, 2, 2),
(8, 2, 3),
(9, 2, 4),
(10, 3, 1),
(11, 3, 2),
(12, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Data'),
(3, 'Profile'),
(4, 'Menu'),
(5, 'User');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 3, 'Profil', 'profile', 'fas fa-fw fa-user', 1),
(3, 3, 'Ubah Profil', 'profile/edit', 'fas fa-fw fa-user-edit', 1),
(4, 4, 'Pengelolaan Menu', 'menu', 'fas fa-fw fa-folder', 1),
(5, 4, 'Pengelolaan Submenu', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 5, 'Daftar Pengguna', 'user', 'fas fa-fw fa-user-tie', 1),
(7, 3, 'Ganti Password', 'profile/changepassword', 'fas fa-fw fa-key', 1),
(8, 2, 'Data Pengunjung', 'data', 'fas fa-database', 1),
(9, 5, 'Hak Akses', 'user/role', 'fas fa-user', 1),
(10, 2, 'Data Lokasi', 'data/lokasi', 'fas fa-map-marked-alt', 1),
(11, 2, 'Laporan', 'data/laporan', 'fas fa-file', 1),
(12, 4, 'Kategori', 'menu/kategori', 'fas fa-grip-horizontal', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'anugerahdickypratama@gmail.com', 'qBVgvOGEbMRlA3NxwH9KnstVxuRS+jwJYjDcC5SrAL8=', 1572488792),
(2, 'disbudpar@bandung.go.id', '6Hcfeou73Yoh2KB5THv9deaE/ONvJAq1RAOwp340b3g=', 1572488855),
(3, 'museumgeologi@gmail.com', 'NgOIrdZRBSDgX3xb8hMFYz1Ys8yeWhmlulZZgP8dsVM=', 1572488952),
(4, 'parisvanjava@gmail.com', 'CBo7uscaP5useNGLJN5PrMwfs8zLiI9rCW0EcQQdTDc=', 1572489008),
(5, 'saungangklungudjo@gmail.com', 'vEqhxBkaW4rXuUIyrFC3H+ZVVz2yFkCu3purweKEQsk=', 1572489080),
(6, 'transhotel@gmail.com', 'WvrT/uegNjAj5r+SqXLT2TXPgi2VLOj/fdzNQTnZ88Y=', 1572502056),
(7, 'transstudio@gmail.com', 'Xz0vlFvXUN6YSzzhi4NSgfwfQ/F7F5P2cwgGM8cufc4=', 1572502137),
(8, 'batikkomar@gmail.com', '8cqZjtbWDmUC4k8oTqdm6cwB2ue+Eon8mgWDCc9h4Yc=', 1572502513),
(9, 'bandarahusein@gmail.com', 'VHAwuE37h7NXz/J+tusbwk7d0acYfPwUtiOndoskz2E=', 1572502555),
(10, 'kartikasari@gmail.com', '/DjQNeH1fN4Nzj7F3ki8axroYcGKw5Il55KGD55hCyg=', 1572502594);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
