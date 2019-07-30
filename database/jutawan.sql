-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2019 at 03:55 AM
-- Server version: 5.7.25
-- PHP Version: 7.3.1

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
-- Table structure for table `data_pengunjung`
--

CREATE TABLE `data_pengunjung` (
  `id` int(11) NOT NULL,
  `id_lokasi` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data_pengunjung`
--

INSERT INTO `data_pengunjung` (`id`, `id_lokasi`, `date`, `jumlah`) VALUES
(1, 1, 1563523827, 500),
(2, 2, 1563523827, 900),
(3, 3, 1563523827, 44),
(4, 1, 1563523827, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_ktrg` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_ktrg`, `icon`, `is_active`) VALUES
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
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama_lks` varchar(128) NOT NULL,
  `kategori` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tagline` varchar(128) NOT NULL,
  `tiket` int(11) NOT NULL,
  `ket` varchar(512) NOT NULL,
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
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama_lks`, `kategori`, `deskripsi`, `tagline`, `tiket`, `ket`, `alamat`, `no_tlp`, `email`, `website`, `sosmed`, `oprational`, `photo`, `video`, `iduser`) VALUES
(1, 'Museum Geologi Bandung', 1, 'Museum Geologi Bandung bla bla bla\r\n\r\nExcepteur sint occaecat cupidatat non proident, sunt in culpa kequi officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium dolorem que laudantium, totam rem aperiam the eaque ipsa quae abillo was inventore veritatis keret quasi aperiam architecto beatae vitae dicta sunt explicabo. Nemo ucxqui officia voluptatem accu santium doloremque laudantium, totam rem ape dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas.', 'Kementerian ESDM | Badan Geologi', 5000, 'Ingin berwisata sambil belajar ilmu', 'Jl. Diponegoro No.57', '(022) 7213822', 'museum-geologi@grdc.esdm.go.id', 'http://museum.geology.esdm.go.id/', 1, 'Senin-Kamis 08:00-16:00\r\nSabtu-Minggu 08.00-14.00\r\nTiket Masuk Pelajar Rp.2000\r\nTiket masuk Wisatawan Asing Rp.10.000', 'p1.jpg', '-', 1),
(2, 'Paris Van Java Mall', 2, 'Paris Van Java - Resort Lifestyle Place\r\nOne of a kind shopping centre in Asia which blends mediterranian architecture and lush greenery into a unique and memorable experience for all ages.\r\n \r\nRevel in an immersive shopping spree with world-renowned brands and creative entrepreneurs. Savour the tastes of the world while dining under the stars. Relish the beauty of nature in Paradiso and immortalize your visit enveloped by luscious flowers and exotic ambiance. Paris Van java - Resort Lifestyle Place bids you welcome for \"The Paris Van Java Experience\"\r\n', 'Resort Lifestyle Place', 0, 'pvj pvj pvj', 'Jl. Sukajadi No.131-139', '(022) 1234567', 'info@paris-van-java.com', 'http://www.parisvanjava.id/', 2, 'z', 'p2.jpg', '-', 1),
(3, 'Saung Angklung Udjo', 4, 'Saung Angklung Udjo  merupakan sebuah tujuan wisata budaya dan edukasi yang lengkap, karena Saung Angklung Udjo memiliki arena pertunjukan, pusat kerajinan bambu dan workshop untuk alat musik bambu. Disamping itu, kehadiran Saung Angklung Udjo di Bandung menjadi lebih bermakna karena kepeduliannya untuk terus melestarikan dan mengembangkan kebudayaan Sunda – khususnya Angklung – kepada masyarakat melalui sarana pendidikan dan pelatihan.', 'Nature Culture in Harmony', 50000, 'angklung', 'Jl. Padasuka No.118', '(022) 7271714', 'info@angklung-udjo.co.id', 'https://angklungudjo.com/', 3, '1', 'p3.jpg', '-', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oprational`
--

CREATE TABLE `oprational` (
  `id` int(11) NOT NULL,
  `hari` varchar(128) NOT NULL,
  `jambuka` time NOT NULL,
  `jamtutup` time NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `oprational`
--

INSERT INTO `oprational` (`id`, `hari`, `jambuka`, `jamtutup`, `id_lokasi`) VALUES
(1, 'Senin', '09:00:00', '17:00:00', 1),
(2, 'Selasa', '09:00:00', '17:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `twitter` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `facebook`, `instagram`, `twitter`) VALUES
(1, 'https://www.facebook.com/groups/60256428517/', 'https://www.instagram.com/geomuzee/', 'https://twitter.com/geomuzee'),
(2, 'https://www.facebook.com/officialpvj', 'https://www.instagram.com/pvjofficial/', 'https://twitter.com/PVJbandung'),
(3, 'https://www.facebook.com/saungangklungudjo/', 'https://www.instagram.com/angklungudjo/', 'https://twitter.com/angklungudjo');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Dani Sofyan', 'danixsofyan@gmail.com', 'foto_dani_bw.jpg', '$2y$10$mRgjjv/AlvpNv4XXK6rxU.RY4Ec1okSEyfLzlAe924l.CdRsRTU22', 1, 1, 1563523827),
(2, 'Jutawan', 'jutawan@gmail.com', 'default.jpg', '$2y$10$mRgjjv/AlvpNv4XXK6rxU.RY4Ec1okSEyfLzlAe924l.CdRsRTU22', 1, 1, 1563523827);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(12, 1, 5),
(14, 1, 3),
(15, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(5, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
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
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'danixsofyan@gmail.com', 'pNEc19AE0AowB+cfsiAeckbdRHmkK0elnaoEPPSBlJQ=', 1563523827),
(10, 'danixsofyan@gmail.com', 'y/HN6Zwvz/GBpPqQvE1HDpVlEvqqPgWsL5Px0oioE0c=', 1563765358),
(11, 'danixsofyan@gmail.com', 'SJDrx4QPZ+dnfX2nkGHcVDlP+/GWxcKbM9ExQzCiAw4=', 1563766056),
(12, 'danixsofyan@gmail.com', 'ZqnIJOJfft3hRtBtuBVk1UqO1dgvCffDQMSujQfpcnc=', 1563766629),
(13, 'danixsofyan@gmail.com', '4oohwgQm01UIQAJxzcdytuN+SbOxBVI8NtWcn413/ko=', 1563766927);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oprational`
--
ALTER TABLE `oprational`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pengunjung`
--
ALTER TABLE `data_pengunjung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `oprational`
--
ALTER TABLE `oprational`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
