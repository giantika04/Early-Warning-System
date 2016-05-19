-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 08. Mei 2016 jam 21:23
-- Versi Server: 5.1.30
-- Versi PHP: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_knn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(70) NOT NULL,
  `tipe` enum('66','99') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`, `tipe`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '99'),
(2, '11453201768', 'cf3ac71c6bedde19bc749fcfd8b9597d', '66'),
(3, '11453205125', '626af7da925001b3648c506fb6e6bf47', '66');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL,
  `Jenis_Tinggal` varchar(40) NOT NULL,
  `Umur` int(3) NOT NULL,
  `Jumlah_NM` decimal(4,1) NOT NULL,
  `Jumlah_SKS` int(3) NOT NULL,
  `IPK` decimal(4,1) NOT NULL,
  `Nilai` varchar(20) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `Jenis_Kelamin`, `Jenis_Tinggal`, `Umur`, `Jumlah_NM`, `Jumlah_SKS`, `IPK`, `Nilai`) VALUES
('11253101003', 'PRIA', 'ORANG TUA', 22, 185.0, 79, 3.0, 'Sangat Memuaskan'),
('11253101066', 'PRIA', 'KOST', 23, 190.0, 79, 3.0, 'Sangat Memuaskan'),
('11253101229', 'PRIA', 'KOST', 22, 177.0, 79, 3.0, 'Sangat Memuaskan'),
('11253101952', 'PRIA', 'KOST', 22, 176.0, 79, 3.0, 'Sangat Memuaskan'),
('11253101967', 'PRIA', 'KOST', 23, 202.0, 81, 3.0, 'Sangat Memuaskan'),
('11253101976', 'PRIA', 'ASRAMA', 22, 170.0, 79, 2.0, 'Memuaskan'),
('11253102000', 'PRIA', 'ORANG TUA', 23, 190.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102004', 'PRIA', 'KOST', 22, 187.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102030', 'PRIA', 'WALI', 22, 130.0, 70, 1.0, 'Cukup'),
('11253102037', 'PRIA', 'KOST', 22, 192.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102039', 'PRIA', 'KOST', 22, 178.0, 79, 2.0, 'Memuaskan'),
('11253102051', 'PRIA', 'ORANG TUA', 22, 175.0, 79, 2.0, 'Memuaskan'),
('11253102063', 'PRIA', 'KOST', 23, 190.0, 77, 3.0, 'Sangat Memuaskan'),
('11253102079', 'PRIA', 'KOST', 23, 206.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102083', 'PRIA', 'KOST', 22, 180.0, 79, 3.0, 'Sangat Memuaskan'),
('11253102095', 'PRIA', 'ORANG TUA', 22, 192.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102113', 'PRIA', 'KOST', 23, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102116', 'PRIA', 'ORANG TUA', 21, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102121', 'PRIA', 'WALI', 23, 207.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102128', 'PRIA', 'KOST', 23, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102137', 'PRIA', 'WALI', 22, 198.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102138', 'PRIA', 'ORANG TUA', 22, 188.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102156', 'PRIA', 'ORANG TUA', 23, 179.0, 79, 3.0, 'Sangat Memuaskan'),
('11253102164', 'PRIA', 'ORANG TUA', 22, 215.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102170', 'PRIA', 'KOST', 22, 189.0, 81, 2.0, 'Memuaskan'),
('11253102187', 'PRIA', 'ORANG TUA', 22, 195.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102200', 'PRIA', 'KOST', 22, 119.0, 65, 1.0, 'Cukup'),
('11253102213', 'PRIA', 'ORANG TUA', 23, 209.0, 81, 3.0, 'Sangat Memuaskan'),
('11253102222', 'PRIA', 'KOST', 24, 110.0, 55, 2.0, 'Cukup'),
('11253102225', 'PRIA', 'ORANG TUA', 22, 175.0, 79, 2.0, 'Memuaskan'),
('11253102228', 'PRIA', 'ORANG TUA', 22, 147.0, 77, 2.0, 'Memuaskan'),
('11253103040', 'PRIA', 'ORANG TUA', 23, 203.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103060', 'PRIA', 'KOST', 23, 154.0, 56, 3.0, 'Pujian'),
('11253103078', 'PRIA', 'KOST', 24, 209.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103095', 'PRIA', 'KOST', 24, 174.0, 81, 2.0, 'Memuaskan'),
('11253103099', 'PRIA', 'ORANG TUA', 22, 125.0, 67, 2.0, 'Cukup'),
('11253103103', 'PRIA', 'KOST', 22, 158.0, 79, 2.0, 'Memuaskan'),
('11253103122', 'PRIA', 'KOST', 23, 145.0, 70, 2.0, 'Cukup'),
('11253103136', 'PRIA', 'WALI', 24, 165.0, 81, 2.0, 'Memuaskan'),
('11253103143', 'PRIA', 'ORANG TUA', 22, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103150', 'PRIA', 'KOST', 22, 188.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103160', 'PRIA', 'ORANG TUA', 23, 180.0, 79, 3.0, 'Sangat Memuaskan'),
('11253103176', 'PRIA', 'KOST', 24, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103179', 'PRIA', 'KOST', 22, 169.0, 79, 2.0, 'Memuaskan'),
('11253103194', 'PRIA', 'KOST', 24, 168.0, 79, 2.0, 'Memuaskan'),
('11253103195', 'PRIA', 'ORANG TUA', 22, 178.0, 81, 2.0, 'Memuaskan'),
('11253103223', 'PRIA', 'KOST', 22, 216.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103227', 'PRIA', 'KOST', 23, 166.0, 79, 2.0, 'Memuaskan'),
('11253103228', 'PRIA', 'KOST', 25, 190.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103270', 'PRIA', 'KOST', 25, 205.0, 81, 3.0, 'Sangat Memuaskan'),
('11253103489', 'PRIA', 'ORANG TUA', 22, 179.0, 81, 2.0, 'Memuaskan'),
('11253104631', 'PRIA', 'ORANG TUA', 22, 173.0, 79, 3.0, 'Sangat Memuaskan'),
('11253104644', 'PRIA', 'ORANG TUA', 22, 168.0, 79, 2.0, 'Memuaskan'),
('11253104651', 'PRIA', 'KOST', 23, 186.0, 79, 3.0, 'Sangat Memuaskan'),
('11253104680', 'PRIA', 'KOST', 23, 187.0, 79, 3.0, 'Sangat Memuaskan'),
('11253104694', 'PRIA', 'KOST', 23, 161.0, 77, 2.0, 'Memuaskan'),
('11253104728', 'PRIA', 'ORANG TUA', 23, 174.0, 79, 2.0, 'Memuaskan'),
('11253104737', 'PRIA', 'KOST', 22, 142.0, 76, 2.0, 'Cukup'),
('11253104751', 'PRIA', 'KOST', 23, 170.0, 79, 2.0, 'Memuaskan'),
('11253104762', 'PRIA', 'ORANG TUA', 23, 192.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104774', 'PRIA', 'ORANG TUA', 22, 189.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104821', 'PRIA', 'ORANG TUA', 23, 125.0, 67, 2.0, 'Cukup'),
('11253104887', 'PRIA', 'KOST', 22, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104916', 'PRIA', 'ORANG TUA', 23, 151.0, 74, 2.0, 'Cukup'),
('11253104917', 'PRIA', 'ORANG TUA', 23, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104918', 'PRIA', 'KOST', 22, 145.0, 76, 2.0, 'Cukup'),
('11253104922', 'PRIA', 'ORANG TUA', 23, 201.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104946', 'PRIA', 'KOST', 22, 179.0, 79, 2.0, 'Memuaskan'),
('11253104960', 'PRIA', 'KOST', 23, 152.0, 79, 2.0, 'Cukup'),
('11253104983', 'PRIA', 'ORANG TUA', 22, 199.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104984', 'PRIA', 'ORANG TUA', 23, 190.0, 79, 3.0, 'Sangat Memuaskan'),
('11253104985', 'PRIA', 'ORANG TUA', 22, 200.0, 81, 3.0, 'Sangat Memuaskan'),
('11253104986', 'PRIA', 'ORANG TUA', 22, 168.0, 79, 2.0, 'Memuaskan'),
('11253105016', 'PRIA', 'ORANG TUA', 22, 172.0, 79, 2.0, 'Memuaskan'),
('11253105020', 'PRIA', 'ORANG TUA', 22, 172.0, 81, 2.0, 'Memuaskan'),
('11253105022', 'PRIA', 'KOST', 24, 138.0, 73, 2.0, 'Memuaskan'),
('11253200005', 'PEREMPUAN', 'KOST', 22, 188.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200010', 'PEREMPUAN', 'ORANG TUA', 22, 213.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200076', 'PEREMPUAN', 'ORANG TUA', 22, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200080', 'PEREMPUAN', 'KOST', 23, 194.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200129', 'PEREMPUAN', 'KOST', 22, 212.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200158', 'PEREMPUAN', 'KOST', 23, 203.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200344', 'PEREMPUAN', 'KOST', 22, 190.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200384', 'PEREMPUAN', 'KOST', 22, 190.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200443', 'PEREMPUAN', 'ORANG TUA', 22, 224.0, 81, 3.0, 'Pujian'),
('11253100919', 'PRIA', 'KOST', 22, 190.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100828', 'PRIA', 'KOST', 23, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100763', 'PRIA', 'KOST', 22, 163.0, 81, 2.0, 'Memuaskan'),
('11253100717', 'PRIA', 'KOST', 23, 179.0, 81, 2.0, 'Memuaskan'),
('11253100691', 'PRIA', 'ORANG TUA', 22, 221.0, 81, 3.0, 'Pujian'),
('11253100673', 'PRIA', 'WALI', 22, 184.0, 81, 2.0, 'Memuaskan'),
('11253100642', 'PRIA', 'ORANG TUA', 23, 214.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100531', 'PRIA', 'ORANG TUA', 23, 209.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100499', 'PRIA', 'KOST', 22, 213.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100311', 'PRIA', 'KOST', 22, 179.0, 81, 2.0, 'Memuaskan'),
('11253100309', 'PRIA', 'KOST', 22, 187.0, 78, 3.0, 'Sangat Memuaskan'),
('11253100301', 'PRIA', 'KOST', 22, 187.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100296', 'PRIA', 'ORANG TUA', 22, 215.0, 81, 3.0, 'Pujian'),
('11253100230', 'PRIA', 'ORANG TUA', 23, 194.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100228', 'PRIA', 'ORANG TUA', 22, 197.0, 81, 3.0, 'Sangat Memuaskan'),
('11253100147', 'PRIA', 'KOST', 23, 162.0, 77, 2.0, 'Memuaskan'),
('11253100111', 'PRIA', 'KOST', 23, 198.0, 79, 3.0, 'Sangat Memuaskan'),
('11253100014', 'PRIA', 'KOST', 22, 193.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200460', 'PEREMPUAN', 'ORANG TUA', 22, 206.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200554', 'PEREMPUAN', 'KOST', 23, 205.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200571', 'PEREMPUAN', 'KOST', 22, 195.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200616', 'PEREMPUAN', 'ORANG TUA', 22, 195.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200744', 'PEREMPUAN', 'ORANG TUA', 22, 176.0, 81, 2.0, 'Memuaskan'),
('11253200854', 'PEREMPUAN', 'ORANG TUA', 22, 224.0, 81, 3.0, 'Pujian'),
('11253200861', 'PEREMPUAN', 'KOST', 22, 200.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200908', 'PEREMPUAN', 'KOST', 23, 172.0, 81, 2.0, 'Memuaskan'),
('11253200909', 'PEREMPUAN', 'KOST', 22, 202.0, 81, 3.0, 'Sangat Memuaskan'),
('11253200952', 'PEREMPUAN', 'ORANG TUA', 23, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201086', 'PEREMPUAN', 'KOST', 22, 211.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201101', 'PEREMPUAN', 'KOST', 23, 199.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201183', 'PEREMPUAN', 'KOST', 23, 186.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201209', 'PEREMPUAN', 'ORANG TUA', 22, 192.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201210', 'PEREMPUAN', 'KOST', 21, 205.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201950', 'PEREMPUAN', 'KOST', 22, 184.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201951', 'PEREMPUAN', 'KOST', 22, 204.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201961', 'PEREMPUAN', 'KOST', 23, 198.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201966', 'PEREMPUAN', 'KOST', 23, 187.0, 79, 3.0, 'Sangat Memuaskan'),
('11253201973', 'PEREMPUAN', 'KOST', 23, 199.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201975', 'PEREMPUAN', 'KOST', 22, 200.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201977', 'PEREMPUAN', 'WALI', 23, 180.0, 79, 3.0, 'Sangat Memuaskan'),
('11253201982', 'PEREMPUAN', 'ORANG TUA', 22, 212.0, 81, 3.0, 'Sangat Memuaskan'),
('11253201983', 'PEREMPUAN', 'ORANG TUA', 22, 213.0, 81, 3.0, 'Pujian'),
('11253201986', 'PEREMPUAN', 'KOST', 22, 202.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202019', 'PEREMPUAN', 'ORANG TUA', 22, 213.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202020', 'PEREMPUAN', 'KOST', 22, 204.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202032', 'PEREMPUAN', 'KOST', 23, 209.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202077', 'PEREMPUAN', 'KOST', 24, 204.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202088', 'PEREMPUAN', 'KOST', 23, 189.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202105', 'PEREMPUAN', 'WALI', 23, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202142', 'PEREMPUAN', 'ORANG TUA', 22, 203.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202144', 'PEREMPUAN', 'WALI', 22, 209.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202195', 'PEREMPUAN', 'KOST', 21, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202196', 'PEREMPUAN', 'KOST', 22, 190.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202199', 'PEREMPUAN', 'KOST', 22, 177.0, 79, 3.0, 'Sangat Memuaskan'),
('11253202201', 'PEREMPUAN', 'ORANG TUA', 22, 205.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202206', 'PEREMPUAN', 'KOST', 23, 204.0, 81, 3.0, 'Sangat Memuaskan'),
('11253202532', 'PEREMPUAN', 'KOST', 22, 217.0, 81, 3.0, 'Pujian'),
('11253203048', 'PEREMPUAN', 'KOST', 22, 180.0, 79, 3.0, 'Sangat Memuaskan'),
('11253203052', 'PEREMPUAN', 'KOST', 22, 195.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203069', 'PEREMPUAN', 'KOST', 23, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203104', 'PEREMPUAN', 'KOST', 22, 200.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203113', 'PEREMPUAN', 'KOST', 22, 183.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203187', 'PEREMPUAN', 'KOST', 22, 198.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203188', 'PEREMPUAN', 'KOST', 22, 211.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203198', 'PEREMPUAN', 'KOST', 22, 208.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203230', 'PEREMPUAN', 'KOST', 22, 209.0, 81, 3.0, 'Sangat Memuaskan'),
('11253203232', 'PEREMPUAN', 'ORANG TUA', 22, 160.0, 79, 2.0, 'Memuaskan'),
('11253204086', 'PEREMPUAN', 'KOST', 22, 196.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204349', 'PEREMPUAN', 'ORANG TUA', 23, 187.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204391', 'PEREMPUAN', 'KOST', 23, 201.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204599', 'PEREMPUAN', 'ORANG TUA', 22, 169.0, 79, 2.0, 'Memuaskan'),
('11253204716', 'PEREMPUAN', 'KOST', 22, 205.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204719', 'PEREMPUAN', 'KOST', 23, 183.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204727', 'PEREMPUAN', 'KOST', 22, 195.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204732', 'PEREMPUAN', 'ORANG TUA', 23, 201.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204787', 'PEREMPUAN', 'KOST', 22, 194.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204794', 'PEREMPUAN', 'KOST', 22, 163.0, 79, 2.0, 'Memuaskan'),
('11253204812', 'PEREMPUAN', 'KOST', 22, 191.0, 81, 3.0, 'Sangat Memuaskan'),
('11253204989', 'PEREMPUAN', 'ORANG TUA', 22, 199.0, 81, 3.0, 'Sangat Memuaskan'),
('11253205000', 'PEREMPUAN', 'KOST', 23, 173.0, 79, 2.0, 'Memuaskan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_smst_empat`
--

CREATE TABLE IF NOT EXISTS `mahasiswa_smst_empat` (
  `NIM` varchar(12) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tinggal` varchar(10) NOT NULL,
  `umur` int(11) NOT NULL,
  `sks` int(11) NOT NULL,
  `nm` varchar(20) NOT NULL,
  `ipk` varchar(20) NOT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa_smst_empat`
--

INSERT INTO `mahasiswa_smst_empat` (`NIM`, `jk`, `tinggal`, `umur`, `sks`, `nm`, `ipk`) VALUES
('11453205125', 'PEREMPUAN', 'KOST', 19, 91, '230,2', '3,385294118'),
('11453105287', 'PRIA', 'ORANG TUA', 19, 96, '217,3', '3,018055556'),
('11453101917', 'PRIA', 'ORANG TUA', 20, 91, '229,6', '3,376470588'),
('11453201880', 'PEREMPUAN', 'KOST', 20, 89, '214,5', '3,25'),
('11453201902', 'PEREMPUAN', 'WALI', 19, 91, '246,3', '3,676119403'),
('11453205428', 'PEREMPUAN', 'KOST', 20, 89, '211,5', '3,110294118'),
('11453101612', 'PRIA', 'KOST', 21, 91, '241,97', '3,558382353'),
('11453101927', 'PRIA', 'ORANG TUA', 20, 91, '236,54', '3,478529412'),
('11453105234', 'PRIA', 'KOST', 20, 91, '219,9', '3,012328767'),
('11453106082', 'PRIA', 'KOST', 20, 80, '216,78', '3,496451613'),
('11453104759', 'PRIA', 'KOST', 20, 81, '198,3', '3,478947368'),
('11453101837', 'PRIA', 'ORANG TUA', 20, 91, '225,3', '3,362686567'),
('11453101968', 'PRIA', 'KOST', 19, 88, '194,7', '2,995384615'),
('11453201779', 'PEREMPUAN', 'ORANG TUA', 19, 91, '214,3', '3,198507463'),
('11453201587', 'PEREMPUAN', 'KOST', 20, 82, '200,4', '3,455172414'),
('11453205804', 'PEREMPUAN', 'KOST', 20, 91, '232,7', '3,422058824'),
('11453101760', 'PRIA', 'KOST', 19, 91, '233', '3,47761194'),
('11453106087', 'PRIA', 'KOST', 20, 91, '214,5', '3,154411765'),
('11453101667', 'PRIA', 'KOST', 21, 79, '187,1', '3,341071429'),
('11453205559', 'PEREMPUAN', 'KOST', 19, 91, '220,5', '3,242647059'),
('11453205368', 'PEREMPUAN', 'WALI', 21, 89, '211,4', '3,203030303'),
('11453204106', 'PEREMPUAN', 'KOST', 20, 91, '245,79', '3,668507463'),
('11453201892', 'PEREMPUAN', 'KOST', 19, 91, '220,3', '3,239705882'),
('11453101884', 'PRIA', 'KOST', 19, 91, '207,8', '3,055882353'),
('11453105423', 'PRIA', 'WALI', 20, 91, '246,45', '3,520714286'),
('11453205235', 'PEREMPUAN', 'WALI', 20, 91, '258', '3,794117647'),
('11453101916', 'PRIA', 'KOST', 20, 91, '252,7', '3,325'),
('11453101591', 'PRIA', 'WALI', 19, 91, '216,7', '3,234328358'),
('11453201774', 'PEREMPUAN', 'KOST', 20, 89, '211,1', '3,247692308'),
('11453206027', 'PEREMPUAN', 'WALI', 21, 95, '231,7', '3,218055556'),
('11453201739', 'PEREMPUAN', 'KOST', 22, 91, '231,2', '3,4'),
('11453101600', 'PRIA', 'KOST', 20, 91, '223,2', '3,331343284'),
('11453204909', 'PEREMPUAN', 'KOST', 19, 91, '220,3', '3,288059701'),
('11453205801', 'PEREMPUAN', 'ORANG TUA', 19, 91, '214,6', '3,202985075'),
('11453101625', 'PRIA', 'KOST', 20, 52, '100,3', '3,45862069'),
('11453201756', 'PEREMPUAN', 'ORANG TUA', 20, 91, '217,9', '3,204411765'),
('11453105220', 'PRIA', 'KOST', 19, 89, '210,6', '3,190909091'),
('11453201608', 'PEREMPUAN', 'KOST', 19, 91, '233,1', '3,479104478'),
('11453205434', 'PEREMPUAN', 'KOST', 20, 91, '235,6', '3,464705882'),
('11453205965', 'PEREMPUAN', 'KOST', 19, 91, '238,4', '3,505882353'),
('11453205093', 'PEREMPUAN', 'KOST', 19, 91, '236,7', '3,480882353'),
('11453104992', 'PRIA', 'KOST', 18, 96, '232,3', '3,226388889'),
('11453101593', 'PRIA', 'KOST', 19, 75, '170,2', '3,273076923'),
('11453205158', 'PEREMPUAN', 'KOST', 20, 91, '225,6', '3,317647059'),
('11453205556', 'PEREMPUAN', 'KOST', 19, 91, '229,1', '3,419402985'),
('11453101749', 'PRIA', 'ORANG TUA', 20, 92, '231,5', '3,404411765'),
('11453201785', 'PEREMPUAN', 'KOST', 21, 85, '195,6', '3,15483871');
