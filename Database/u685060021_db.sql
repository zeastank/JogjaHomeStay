
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 26 Jun 2015 pada 10.02
-- Versi Server: 5.1.66
-- Versi PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u685060021_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `host_location`
--

CREATE TABLE IF NOT EXISTS `host_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(20) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `host_location`
--

INSERT INTO `host_location` (`id`, `address`, `lat`, `lng`) VALUES
(1, '', 0.000000, 0.000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `markers`
--

CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data untuk tabel `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`) VALUES
(36, 'bebek', 'bebek mandi', -7.760150, 110.380325),
(37, 'rumah1', 'jalan pogung', -7.782942, 110.371918),
(38, 'rumah2', 'jalan kaliurang', -7.782474, 110.381096),
(39, 'rumah3', 'jalan thomas', -7.777329, 110.376122),
(40, 'rumah3', 'jalan pogung', -7.771971, 110.384018),
(41, 'Rumah10', 'Jalan mangga', -7.772056, 110.362473),
(42, '', '', 0.000000, 0.000000),
(43, 'thomas dan teman', 'thomas', -7.766103, 110.351318),
(44, 'jalan', 'godean', -7.771376, 110.340843),
(45, 'ff', 'ff', -7.760491, 110.358353);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_host`
--

CREATE TABLE IF NOT EXISTS `user_host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `user_host`
--

INSERT INTO `user_host` (`id`, `fullname`, `userName`, `email`, `pass`) VALUES
(1, 'harits', 'a', 'zeastank_harits@yahoo.co.id', 'a'),
(4, 'thomas', 'thomas', 'thomas@mail.com', '1234'),
(5, 'odie', 'odie', 'odie@gmail.com', 'odie'),
(6, 'w', 'w', 'w', 'w'),
(7, 'l', 'l', 'l', 'l'),
(8, 'budi', 'budi', 'budi@budi', 'budi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_stud`
--

CREATE TABLE IF NOT EXISTS `user_stud` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `user_stud`
--

INSERT INTO `user_stud` (`id`, `fullname`, `userName`, `email`, `pass`) VALUES
(1, 'c', 'c', 'c', 'c'),
(2, 'aaa', 'aaaaaa', 'aaaa', '12345678'),
(3, 'bbb', 'odie', 'bbb', '1234'),
(4, 'odie', 'odie', 'odiezich@gmail.com', 'odie'),
(5, 'q', 'q', 'q', 'q'),
(6, 'kokoh', 'kokoh', 'kokoh@kokoh', 'kokoh'),
(7, 'jojon', 'jojon', 'jojon@jojon', 'jojon');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
