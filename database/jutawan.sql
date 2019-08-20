-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 20 Agu 2019 pada 17.34
-- Versi server: 5.7.26
-- Versi PHP: 7.3.7

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
(1, 1, '2019-01-01', 10009, '2019-08-20', '2019-08-20'),
(2, 1, '2019-02-01', 1000, '2019-08-20', '2019-08-20'),
(3, 1, '2019-03-01', 1001, '2019-08-20', '2019-08-20'),
(4, 1, '2019-04-01', 99999, '2019-08-20', '2019-08-21'),
(6, 3, '2019-08-01', 1000, '2019-08-20', '2019-08-20');

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
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `name`, `icon`, `is_active`) VALUES
(1, 'Edukasi', 'la-puzzle-piece', 1),
(2, 'Belanja', 'la-shopping-cart', 1),
(3, 'Menginap', 'la-bed', 1),
(4, 'Seni Budaya', 'la-music', 1),
(5, 'Wisata', 'la-map-marker', 1),
(6, 'Ekonomi Kreatif', 'la-laptop', 1),
(7, 'Transportasi', 'la-plane', 1),
(8, 'Kuliner', 'la-cutlery', 1);

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
(1, 'Museum Geologi Bandung', 1, 'Museum Geologi Bandung bla bla bla\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa kequi officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem que laudantium, totam rem aperiam the eaque ipsa quae abillo was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo. Nemo ucxqui officia voluptatem accu santium doloremque laudantium, totam rem ape dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.', 'Kementerian ESDM | Badan Geologi', 5000, 'Jl. Diponegoro No.57', '(022) 7213822', 'museum-geologi@grdc.esdm.go.id', 'http://museum.geology.esdm.go.id/', 1, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'p1.jpg', '-', 3),
(2, 'Paris Van Java Mall', 2, 'Paris Van Java - Resort Lifestyle Place\r\nOne of a kind shopping centre in Asia which blends mediterranian architecture and lush greenery into a unique and memorable experience for all ages.\r\n \r\nRevel in an immersive shopping spree with world-renowned brands and creative entrepreneurs. Savour the tastes of the world while dining under the stars. Relish the beauty of nature in Paradiso and immortalize your visit enveloped by luscious flowers and exotic ambiance. Paris Van java - Resort Lifestyle Place bids you welcome for \"The Paris Van Java Experience\"\r\n', 'Resort Lifestyle Place', 0, 'Jl. Sukajadi No.131-139', '(022) 1234567', 'info@paris-van-java.com', 'http://www.parisvanjava.id/', 2, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'p2.jpg', '-', 1),
(3, 'Saung Angklung Udjo', 4, 'Saung Angklung Udjo  merupakan sebuah tujuan wisata budaya dan edukasi yang lengkap, karena Saung Angklung Udjo memiliki arena pertunjukan, pusat kerajinan bambu dan workshop untuk alat musik bambu. Disamping itu, kehadiran Saung Angklung Udjo di Bandung menjadi lebih bermakna karena kepeduliannya untuk terus melestarikan dan mengembangkan kebudayaan Sunda – khususnya Angklung – kepada masyarakat melalui sarana pendidikan dan pelatihan.', 'Nature Culture in Harmony', 50000, 'Jl. Padasuka No.118', '(022) 7271714', 'info@angklung-udjo.co.id', 'https://angklungudjo.com/', 3, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'p3.jpg', '-', 3),
(4, 'Dago', 5, 'Coba Input', 'Coba Input', 0, 'Coba Input', '123123', 'dago@bandung.go.id', 'https://www.instagram.com/digdaya.co/', 4, 'Coba Input', 'p4.jpg', 'null', 3);

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
(4, 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin', 'http://localhost/phpmyadmin');

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
(2, 'Disbudpar', 'jutawan@gmail.com', 'stunningbandung.jpg', '$2y$10$mRgjjv/AlvpNv4XXK6rxU.RY4Ec1okSEyfLzlAe924l.CdRsRTU22', 2, 1, 1563523827),
(3, 'Museum Geologi', 'museumgeologi@gmail.com', 'default.jpg', '$2y$10$mRgjjv/AlvpNv4XXK6rxU.RY4Ec1okSEyfLzlAe924l.CdRsRTU22', 3, 1, 1563523827),
(4, 'Anugerah Dicky Pratama', 'anugerahdickypratama@gmail.com', 'default.jpg', '$2y$10$mRgjjv/AlvpNv4XXK6rxU.RY4Ec1okSEyfLzlAe924l.CdRsRTU22', 1, 1, 1563523827);

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
(11, 2, 'Laporan', 'data/laporan', 'fas fa-file', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
