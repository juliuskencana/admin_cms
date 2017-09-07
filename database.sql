-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Inang: sql308.epizy.com
-- Waktu pembuatan: 06 Sep 2017 pada 23.27
-- Versi Server: 5.6.35-81.0
-- Versi PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `epiz_20448259_iren_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `iren_menu`
--

CREATE TABLE IF NOT EXISTS `iren_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `has_child` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `open_new_tab` int(11) NOT NULL DEFAULT '0',
  `style` varchar(255) NOT NULL,
  `active` varchar(255) DEFAULT NULL,
  `active_child` varchar(255) DEFAULT NULL,
  `is_menu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `iren_menu`
--

INSERT INTO `iren_menu` (`id`, `parent_id`, `has_child`, `description`, `position`, `url`, `open_new_tab`, `style`, `active`, `active_child`, `is_menu`) VALUES
(1, 0, 0, 'Dasbor', '1', 'Dasbor', 0, 'fa fa-dashboard\r\n', 'Dasbor', NULL, 1),
(2, 0, 1, 'Pengguna', '2', '#', 0, 'fa fa-circle-o', 'Pengguna', NULL, 1),
(3, 2, 0, 'Daftar Pengguna', '1', 'Pengguna/DaftarPengguna', 0, 'icon-list', 'Pengguna', 'DaftarPengguna', 1),
(4, 2, 0, 'Tambah Pengguna', '2', 'Pengguna/TambahPengguna', 0, 'icon-plus', 'Pengguna', 'TambahPengguna', 1),
(5, 0, 1, 'Role', '3', '#', 0, 'fa fa-circle-o', 'Role', NULL, 1),
(6, 5, 0, 'Daftar Role', '1', 'Role/DaftarRole', 0, 'icon-list', 'Role', 'DaftarRole', 1),
(7, 5, 0, 'Permission', '3', 'Role/Permission', 0, 'fa fa-file', 'Role', 'Permission', 1),
(8, 5, 0, 'Tambah Role', '2', 'Role/TambahRole', 0, 'icon-plus', 'Role', 'TambahRole', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `iren_permission`
--

CREATE TABLE IF NOT EXISTS `iren_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `iren_permission`
--

INSERT INTO `iren_permission` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 'all');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iren_projects`
--

CREATE TABLE IF NOT EXISTS `iren_projects` (
  `column_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `iren_projects`
--

INSERT INTO `iren_projects` (`column_name`, `description`) VALUES
('project_name', 'AKADEMIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iren_role`
--

CREATE TABLE IF NOT EXISTS `iren_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `iren_role`
--

INSERT INTO `iren_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Mahasiswa'),
(3, 'Dosen'),
(4, 'Akademis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iren_user`
--

CREATE TABLE IF NOT EXISTS `iren_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wilayah_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `handphone` varchar(255) DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL COMMENT '1 : Pria\r\n2 : Wanita',
  `birthdate` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `photo` text,
  `token` varchar(255) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  `is_activated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `iren_user`
--

INSERT INTO `iren_user` (`id`, `wilayah_id`, `role_id`, `username`, `password`, `first_name`, `last_name`, `email`, `phone`, `handphone`, `gender`, `birthdate`, `address`, `photo`, `token`, `register_date`, `is_activated`) VALUES
(1, NULL, 1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2017-08-09 00:00:00', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
