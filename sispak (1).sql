-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2018 pada 15.55
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_training`
--

CREATE TABLE `data_training` (
  `TB` varchar(20) NOT NULL,
  `TD` varchar(20) NOT NULL,
  `BB` varchar(20) NOT NULL,
  `RL` varchar(20) NOT NULL,
  `LTBT` varchar(20) NOT NULL,
  `LT` varchar(20) NOT NULL,
  `LBB` varchar(20) NOT NULL,
  `LK` varchar(20) NOT NULL,
  `L40M` varchar(20) NOT NULL,
  `MFT` varchar(20) NOT NULL,
  `Class` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_training`
--

INSERT INTO `data_training` (`TB`, `TD`, `BB`, `RL`, `LTBT`, `LT`, `LBB`, `LK`, `L40M`, `MFT`, `Class`) VALUES
('Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Tidak Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Tidak Berbakat'),
('Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Berbakat'),
('Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Tidak Berbakat'),
('Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Berbakat'),
('Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Tidak Berbakat'),
('Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Tidak Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Tidak Berbakat'),
('Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Tidak Ideal', 'Ideal', 'Ideal', 'Ideal', 'Berbakat'),
('Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Tidak Ideal', 'Tidak Berbakat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_class_berbakat`
--

CREATE TABLE `tabel_class_berbakat` (
  `Berbakat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_class_berbakat`
--

INSERT INTO `tabel_class_berbakat` (`Berbakat`) VALUES
(8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_class_tidak_berbakat`
--

CREATE TABLE `tabel_class_tidak_berbakat` (
  `Tidak Berbakat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_class_tidak_berbakat`
--

INSERT INTO `tabel_class_tidak_berbakat` (`Tidak Berbakat`) VALUES
(7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ideal_berbakat`
--

CREATE TABLE `tabel_ideal_berbakat` (
  `TB` varchar(20) NOT NULL,
  `TD` varchar(20) NOT NULL,
  `BB` varchar(20) NOT NULL,
  `RL` varchar(20) NOT NULL,
  `LTBT` varchar(20) NOT NULL,
  `LT` varchar(20) NOT NULL,
  `LBB` varchar(20) NOT NULL,
  `LK` varchar(20) NOT NULL,
  `L40M` varchar(20) NOT NULL,
  `MFT` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ideal_berbakat`
--

INSERT INTO `tabel_ideal_berbakat` (`TB`, `TD`, `BB`, `RL`, `LTBT`, `LT`, `LBB`, `LK`, `L40M`, `MFT`) VALUES
('6', '6', '8', '6', '8', '8', '4', '8', '8', '8');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_ideal_tidak_berbakat`
--

CREATE TABLE `tabel_ideal_tidak_berbakat` (
  `TB` int(5) NOT NULL,
  `TD` int(5) NOT NULL,
  `BB` int(5) NOT NULL,
  `RL` int(5) NOT NULL,
  `LTBT` int(5) NOT NULL,
  `LT` int(5) NOT NULL,
  `LBB` int(5) NOT NULL,
  `LK` int(5) NOT NULL,
  `L40M` int(5) NOT NULL,
  `MFT` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_ideal_tidak_berbakat`
--

INSERT INTO `tabel_ideal_tidak_berbakat` (`TB`, `TD`, `BB`, `RL`, `LTBT`, `LT`, `LBB`, `LK`, `L40M`, `MFT`) VALUES
(4, 4, 3, 4, 3, 4, 4, 3, 3, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tidak_ideal_berbakat`
--

CREATE TABLE `tabel_tidak_ideal_berbakat` (
  `TB` int(5) NOT NULL,
  `TD` int(5) NOT NULL,
  `BB` int(5) NOT NULL,
  `RL` int(5) NOT NULL,
  `LTBT` int(5) NOT NULL,
  `LT` int(5) NOT NULL,
  `LBB` int(5) NOT NULL,
  `LK` int(5) NOT NULL,
  `L40M` int(5) NOT NULL,
  `MFT` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_tidak_ideal_berbakat`
--

INSERT INTO `tabel_tidak_ideal_berbakat` (`TB`, `TD`, `BB`, `RL`, `LTBT`, `LT`, `LBB`, `LK`, `L40M`, `MFT`) VALUES
(2, 2, 0, 2, 0, 0, 4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tidak_ideal_tidak_berbakat`
--

CREATE TABLE `tabel_tidak_ideal_tidak_berbakat` (
  `TB` int(5) NOT NULL,
  `TD` int(5) NOT NULL,
  `BB` int(5) NOT NULL,
  `RL` int(5) NOT NULL,
  `LTBT` int(5) NOT NULL,
  `LT` int(5) NOT NULL,
  `LBB` int(5) NOT NULL,
  `LK` int(5) NOT NULL,
  `L40M` int(5) NOT NULL,
  `MFT` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_tidak_ideal_tidak_berbakat`
--

INSERT INTO `tabel_tidak_ideal_tidak_berbakat` (`TB`, `TD`, `BB`, `RL`, `LTBT`, `LT`, `LBB`, `LK`, `L40M`, `MFT`) VALUES
(3, 3, 4, 3, 4, 3, 3, 4, 4, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
