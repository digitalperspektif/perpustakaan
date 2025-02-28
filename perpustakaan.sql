-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Feb 2025 pada 14.01
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_asp_bk`
--

CREATE TABLE `data_asp_bk` (
  `id` int(10) NOT NULL,
  `id_buku` varchar(10) NOT NULL,
  `no_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `jenis_buku` varchar(255) NOT NULL,
  `rak_buku` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `cover_buku` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_asp_bk`
--

INSERT INTO `data_asp_bk` (`id`, `id_buku`, `no_buku`, `judul_buku`, `jenis_buku`, `rak_buku`, `penerbit`, `tahun_terbit`, `cover_buku`, `file`) VALUES
(1004, '3', '0/3', 'Operation And Maintenance Manual Book And AS Build', 'BUKU', 'PLTA MANINJAU', 'PT.Teravisindo Sukses', '', 'pdf', 'Usulan Change Agent.pdf'),
(1005, '4', '0/4', 'Operation And Maintenance Manual Book And AS Build', 'BUKU', 'PLTA MANINJAU', 'PT Terasivindo Sukses', '', 'Slide3.PNG', ''),
(1007, '5', '0/5', 'Module Trainning AVR & Exciter', 'BUKU', 'PLTA MANINJAU', 'PT.Teravindo Sukses', '', '', ''),
(1008, '6', '0/6', 'Assembly Intruction', 'GUNYU', 'PLTA MANINJAU', 'PT Karya Deltamas Abadi', '', '', ''),
(1009, '7', '0/7', 'Drawing AVR & Excitation', 'DRAWING', 'PLTA MANINJAU', 'PT Putra Prima Mea Power & PT Travisindo Sukses', '2017', '', ''),
(1010, '8', '0/8', 'Drawing AVR & Excitation Unit 2', 'DRAWING', 'PLTA MANINJAU', 'PT Putra Prima Mega Power & PT Travisindo Sukses', '2017', '', ''),
(1011, '9', '0/9', 'Drawing AVR & Excitation Unit 3', 'DRAWING', 'PLTA MANINJAU', 'PT Putra Prima Mega Power & PT Travisindo Sukses', '2017', '', ''),
(1012, '10', '1/10', 'Drawing AVR & Excitation Unit 4', 'DRAWING', 'PLTA MANINJAU', 'PT Putra Prima Mega Power & PT Travisindo Sukses', '2017', '', ''),
(1013, '11', '1/1', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1014, '12', '1/2', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1015, '13', '2/1', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1016, '14', '2/2', 'Maninjau Hidroelectric Project Completion Report V', '', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1017, '15', '2/3', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1018, '16', '3/1A', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1019, '17', '3/2A', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1020, '18', '3/3A', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1021, '19', '3/4A', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1022, '20', '3/1B', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1023, '21', '3/2B', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1024, '22', '3/3B', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1025, '23', '3/4B', 'Maninjau Hidroelectric Project Completion Report V', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1026, '24', '4', 'Maninjau  Hydroelectric Project Hydromecanical wor', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1027, '25', '5', 'Site Effesiensy test reportof francis Turbine For ', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1028, '26', '6/1', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1029, '27', '6/2', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1030, '28', '7/1', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1031, '29', '7/2', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1032, '29', '8', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1033, '30', '9', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1034, '31', '11', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1035, '32', '12/1', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1036, '33', '12/2', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1037, '34', '13', 'Operation And maintenance Inspections For Generati', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1038, '35', '14', 'Operation And maintenance Instruksions For Generat', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1039, '36', '15/1', 'Inspection And Preliminary test Record For Maninja', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1040, '37', '16', 'Site Test Report For Generating Equipment Lot 2+3', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1041, '38', '17', 'Maninjau Hydroelectric project CompletionDocoments', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1042, '39', '18', 'Final Drawings For Generating Equipment Lot 1Volum', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1043, '40', '19', 'Operation And maintenance Manual For Maninjau Hydr', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1044, '41', '20', 'Final Drawings For Generating Equipment Lot 2+3 Vo', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1045, '42 ', '21/1', 'Complete Set OF Calculation Sheets And Drawing Gat', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1046, '43', '21/2', 'Complete Set OF Calculation Sheets And Drawing Gat', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1047, '44', '22', 'Complete Set OF Calculation Sheets And Drawing Gat', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1048, '45', '23', 'Completion Drawing And Calculation For Penstock', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1049, '46', '24', 'Complete Set OF Calculation Sheets And Drawing Gat', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1050, '47', '25', 'Instruction Manuals OF Operation And Maintenance G', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1051, '48', '26', 'Maintenance Electric power Instruction Manual for ', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1052, '49', '27', 'Instruction Manuals For Penstock', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1053, '50', '28/1', 'Instruction Manuals Of Operation And Maintenance G', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1054, '51', '29', 'Final Drawings For generation Equipment Lot 2+3Vol', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1055, '52', '6', 'Final Drawings For generation Equipment Lot 1 Volu', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1056, '53', '30', 'Instruction Manuals Of Operation And Maintenance G', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1057, '54', '31', 'Intake Weir PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1058, '55', '32', 'Photographiys During erection Works For Maninjau H', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1059, '56', '33', 'Photographiys During erection Works For Maninjau H', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1984', '', ''),
(1060, '57', '1', 'Desighn Shei For Struktures', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1061, '58', '2', 'DieselGeneration Room Fondation PLTA maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1062, '59', '3', 'Generator PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1981', '', ''),
(1063, '60', '4', 'Single Line And Schematic Diagram', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1978', '', ''),
(1064, '62', '5', 'CO 2-Battry Puryfier -Cable-Cable', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1981', '', ''),
(1065, '63', '6', 'Desighn Shei For Struktures', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1981', '', ''),
(1066, '64', '7', 'Spare part list Listrik PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1982', '', ''),
(1067, '65', '8', 'Outlet Gate Intake  Weir PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1068, '66', '9', 'Turbin PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1069, '67', '10', 'Dokumen Embedded', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1070, '68', '11', 'Panel PLTA Maninjau /Trafo', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1071, '69', '12', 'Generator Equipment Lot 123 Of Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1981', '', ''),
(1072, '70', '13', 'Petunjuk perencanaan Tiang swict Year ', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1981', '', ''),
(1073, '71', '14', 'Generator PMG PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1982', '', ''),
(1074, '72', '15', 'Handling  And Maintenance  Of Oil Immersed Transfo', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1980', '', ''),
(1075, '73', '16', 'Single Line Diagram Sistem Sumatra Barat', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1979', '', ''),
(1076, '74', '17', 'Arsip Gambar PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1979', '', ''),
(1077, '75', '18', 'Projeck Retrofit  Pintu Weir Dan Fasilitas Penduku', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1979', '', ''),
(1078, '76', '19', 'Final Inspection Report  For Stringing Work ', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '1982', '', ''),
(1079, '77', '20', 'Maninjau Hydro Electric', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '1982', '', ''),
(1080, '78', '21', 'Maninjau hydro Power Station Republik Indonesia Pe', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1081, '79', '22', 'Equipment Drawing For Crossbar PABX Type AC150B', 'BUKU', 'PLTA MANINJAU', 'PT.Teravindo Sukses', '', '', ''),
(1082, '80', '23', 'Dokumentation AVR Excitation PLTA Maninjau 21 Juni', 'BUKU', 'PLTA MANINJAU', 'PT.Teravindo Sukses', '1982', '', ''),
(1083, '81', '24', 'Dokumentation AVR Excitation PLTA Maninjau 21 Juni', 'BUKU', 'PLTA MANINJAU', 'PT.Teravindo Sukses', '1980', '', ''),
(1084, '82', '25', 'Single Line  And Schematic Diagram', 'BUKU', 'PLTA MANINJAU', 'PT.Teravindo Sukses', '2017', '', ''),
(1085, '83', '26', 'Schematic  Diagram', 'BUKU', 'PLTA MANINJAU', 'PT.Teravindo Sukses', '', '', ''),
(1086, '84', '27', 'Tender Proposal For Hydro Mechanical Equipment For', 'BUKU', 'PLTA MANINJAU', 'KENAMATSHU- GHOSO LTD', '1978', '', ''),
(1087, '84', '27', 'Tender Proposal For Hydro Mechanical Equipment For', 'BUKU', 'PLTA MANINJAU', 'KENAMATSHU- GHOSO LTD', '1978', '', ''),
(1088, '85', '28', 'Maninjau H>P Final Drawing For Generating Equipmen', 'BUKU', 'PLTA MANINJAU', '', '1980', '', ''),
(1089, '86', '29', 'KKS Number Sektor  Pembangkitan Bukittinggi Tahun ', 'BUKU', 'PLTA MANINJAU', '', '2013', '', ''),
(1090, '87', '30', 'Maninjau Hydro Power Station Single Line And Scema', 'BUKU', 'PLTA MANINJAU', '', '1982', '', ''),
(1091, '88', '31', 'Typical Drawing', 'BUKU', 'PLTA MANINJAU', '', '1993', '', ''),
(1092, '89', '32', 'Single Line Diagram Data Reseting Relay Dan Inpend', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1093, '90', '33', 'Maninjau Power  Station  Auxiliary Power Single Li', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1094, '91', '34', ' Control Relay Panel Drawing 150 /20 KV Transforme', 'BUKU', 'PLTA MANINJAU', '', '1987', '', ''),
(1095, '92', '35', 'Perencanaan & Pengawasan Pemeliharaan di PLTD ( Bu', 'GUNGYU', 'PLTA MANINJAU', '', '1985', '', ''),
(1096, '93', '36', ' Docomet Embedded In secon Stage 01', 'GUNGYU', 'PLTA MANINJAU', 'Corporation ', '1981', '', ''),
(1097, '94', '37', 'Spare part Mesin & Tool PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Sumitomo Corporation', '1980', '', ''),
(1098, '95', '38', 'Generator PMG (T.063-M.066 )', 'GUNGYU', 'PLTA MANINJAU', 'Sumito corp', '1981', '', ''),
(1099, '96', '39', 'Turbin ( T.030 ) PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'TOSHIBA CORPORATION', '1980', '', ''),
(1100, '97', '40', 'Dokumen List For  Maninjau Hydro electric Power St', 'GUNGYU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '1980', '', ''),
(1101, '98', '41', 'DOKUMEN 02', 'GUNGYU', 'PLTA MANINJAU', 'Nippon corporation ', '1982', '', ''),
(1102, '99', '42', 'DOKUMEN 03', 'GUNGYU', 'PLTA MANINJAU', 'SUMITOMO CORPORATION', '1981', '', ''),
(1103, '100', '43', 'Drawing transformer PLTA Maninjau', 'GUNGYU', 'PLTA MANINJAU', 'Nippon corporation ', '1980', '', ''),
(1104, '101', '44', 'Sertifikat Hak Pakai Tanah', 'GUNGYU', 'PLTA MANINJAU', 'Nippon corporation ', '1992', '', ''),
(1105, '102', '45', 'Dokumen 04', 'GUNGYU', 'PLTA MANINJAU', 'Numazu work ', '1983', '', ''),
(1106, '103', '46', 'Dokumen 05', 'GUNGYU', 'PLTA MANINJAU', 'Toshiba corporation', '1980', '', ''),
(1107, '104', '47', 'GAE -Electric', 'GUNGYU', 'PLTA MANINJAU', 'PT Guna electro', '', '', ''),
(1108, '105', '48', 'Dokumen 06', 'GUNGYU', 'PLTA MANINJAU', 'Toshiba corporation', '1981', '', ''),
(1109, '106', '49', 'PT Jalamas Berkarya', 'GUNGYU', 'PLTA MANINJAU', 'PT.jalamas', '2000', '', ''),
(1110, '107', '50', 'SMC Euro Dokument', 'GUNGYU', 'PLTA MANINJAU', '', '1998', '', ''),
(1111, '108', '51', 'Instalation ,Operation and Maintenance Manual Book', 'GUNGYU', 'PLTA MANINJAU', 'PT Power SystemIndonesia', '2017', '', ''),
(1112, '109', '1', 'Mayor Over Houl Turbin Generator Unit3 26 Nov-26 D', 'BUKU', 'PLTA MANINJAU', 'PT. Power System Indonesia', '2008', '', ''),
(1113, '110', '2', 'Tender And Contract Docoments Civil works Volume 1', 'Buku', 'PLTA MANINJAU', 'NIPPON kOEICO.,LTD.TOKYO,JAPAN', '', '', ''),
(1114, '111', '3', 'Berita Acara Serah Terima FisikTeknik Pekerjaan Pe', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1115, '112', '4', 'Berita Acara Serah Terima FisikTeknik Pekerjaan Pe', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1116, '113', '5', 'Volume 3 Economic Development Of Maninjau Service ', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1117, '114', '6', 'Hasil Rapat Kerja 1 PLN Wilayah 3 Tahun 1994/1995', '6', 'PLTA MANINJAU', '', '', '', ''),
(1118, '115', '7', 'Bukti -Bukti Pelaksanaan Program Partisipasi Pemba', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1119, '116', '8', 'Majalah Eye Nippon', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1120, '117', '9', 'Daftar Spesifikasi Material Sesuai LKAI 1996', 'Buku', 'PLTA MANINJAU', '', '1996', '', ''),
(1121, '118', '10', 'PLTA Maninjau Laporan Bulanan Teknik', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1122, '119', '11', '1.2 Graphhical Symbol 1.3 Component Code 1.4 Compe', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1123, '120', '12', 'Laporan Teknik No.77 LMK.84 TG 08.10.84 Final Inso', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1124, '121', '13', 'Shipping Documents Sumitomo Corporation', 'Buku', 'PLTA MANINJAU', 'SUMITOMO CORPORATION', '', '', ''),
(1125, '122', '14', 'Laporan Penanaman Pohon Productif Selingkar Danau ', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1126, '123', '15', 'Maintenance Schedule 1 Tahun PLTA Maninjau', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1127, '124', '16', 'Technical Paper No.104', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1128, '125', '17', 'PLN Wilayah 3 Sektor Bukittinggi Direct Fastening ', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1129, '126', '18', 'How To Operate Station Telephone Set In Crossbar P', 'Buku', 'PLTA MANINJAU', 'Oki Electric', '', '', ''),
(1130, '127', '19', 'Spare Part No 1', 'Buku', 'PLTA MANINJAU', 'KURIMOTO Works ,LTD', '', '', ''),
(1131, '127', '19', 'Spare Part No 1', 'Buku', 'PLTA MANINJAU', 'KURIMOTO Works ,LTD', '', '', ''),
(1132, '128', '20', 'Penerapan Standar Pengujian Efisiensi Turbin Pada ', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1133, '129', '21', 'Laporan Kegiatan Pengawasan Lingkungan Ketanaga li', 'Buku', 'PLTA MANINJAU', 'TIM K3 Lingkungan', '', '', ''),
(1134, '130', '22', 'Maninjau Hydroelectric Summary Of PLN Head Office ', 'Buku', 'PLTA MANINJAU', '', '1983', '', ''),
(1135, '131', '23', 'Knowledge Sharing Perancangan Pintu Air Maninjau W', 'Buku', 'PLTA MANINJAU', 'TIM COP Maninjau', '', '', ''),
(1136, '132', '24', 'Power Line Carrier ETI 22', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1137, '133', '25', 'Laporan Pemeliharaan Alat -Alat Bantu PLTA Maninja', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1138, '134', '26', 'Pengadaan Poros Shaf Pompa Air Pendingin PLTA Mani', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1139, '135', '27', 'Contrak No. Pj.225/PST/ 79', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1140, '136', '28', 'Data -Data PLTA Maninjau', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1141, '137', '29', 'Standing Operation Procedure SOP Sistim Operasi Un', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1142, '138', '30', 'Pemeriksaan Pemeliharaan Weir PLTA Maninjau', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1143, '139', '31', 'M Mudol MC-101', 'Buku', 'PLTA MANINJAU', '', '', '', ''),
(1144, '140', '32', 'Standar Operation Procedure Dc Charger RDAT 110 VD', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1145, '141', '33', 'Retrofit Synchronize PLTA Maninjau Unit 3', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1146, '142', '34', 'Retrofit Governor Hydraulic Governor PLTA Maninjau', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1147, '143', '35', 'Retrofit Synchonizer PLTA Maninjau Unit2', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1148, '144', '36', 'Retrofit Synchonizer PLTA Maninjau Unit 1', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1149, '145', '37', 'Retrofit Governor Hydraulic Governor PLTA Maninjau', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1150, '146', '38', 'Retrofit Governor Hydraulic Governor PLTA Maninjau', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1151, '147', '39', 'Standar Operation Procedure DC Charger RDAT 110 -2', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1152, '148', '40', 'Retrofit Governor Hydraulic Governor PLTA Maninjau', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1153, '149', '41', 'Retrofit Governor Hydraulic Governor PLTA Maninjau', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1154, '150', '42', 'Retrofit Governor Hydraulic Governor PLTA Maninjau', 'Buku', 'PLTA MANINJAU', 'PMI', '', '', ''),
(1155, '151', '43', 'toshiba Corp', 'Buku', 'PLTA MANINJAU', 'Toshiba corporation', '', '', ''),
(1156, '152', '44', 'Laporan supervisi Pengujian Lapangan PlTA Maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1157, '154', '46', 'Operation And maintenance Instruction for Subtatio', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1158, '155', '47', 'Laporan Supervisi Pengujian Lapangan PLTA  Unit 3L', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1159, '156', '48', 'Operation And Maintanance Of Vertikas tipe Francis', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1160, '156', '48', 'Operation And Maintanance Of Vertikas tipe Francis', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1161, '157', '49', 'Test Report For maninjau Hydro electric Project Ge', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1162, '158', '50', 'Operation & Maintanance Manual For Maninjau Hydroe', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1163, '159', '51', 'Inspection DuringErection Work Lot 1', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1164, '160', '52', 'InspectionDutringThe Erection Work', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1165, '161', '53', 'Operation And Maintenance Manual For Maninjau Hydr', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1166, '162', '46 B', 'Operation And Maintenance Instruktion For Substati', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1167, '163', '54', 'Final Inspection Peralatan Hydro mekanik PLTA Mani', 'BUKU', 'PLTA MANINJAU', '', '1984', '', ''),
(1168, '164', '55', 'Aktiva tetap PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1169, '165', '56', 'Final Inspection Peralatan Hydro mekanik PLTA Mani', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1170, '166', '57', 'Operation & Maintenance Manual for Maninjau Hydroe', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1171, '167', '58', 'Instruction Manual 4 Set', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1172, '168', '59', 'Operation & Maintenance manual  For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1173, '169', '60', 'EBARA Hydroelectric  Turbines', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1174, '170', '61', 'Final Drawing s For Generating Equip[ment Of Manin', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1175, '171', '62', 'Beberapa Data -Data Teknik  Peralatan Pembangkit', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1176, '172', '63', 'Instruction Manual Vibration & sound', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1177, '173', '64', 'Major Overhaul Turbine Generator  Unit 2 PLTA Mani', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1178, '174', '65', 'Maintenance Part 3 PLTA maninaju', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1179, '175', '66', 'Instalation Manual Of Water Turbine For Maninjau P', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1180, '176', '67', 'Operation & Maintenance Manual  For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1181, '177', '68', 'Operation & Maintenance manual  For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1182, '178', '69', 'Operation & Maintenance manual  For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1183, '179', '70', 'Operation & Maintenance  Manual For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1184, '180', '71', 'Operation & Maintenance manual  For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1185, '181', '72', 'Operation & Maintenance  Manual For Maninjau Hydro', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1186, '182', '73', 'Laporan Supervisi Pengujian Lapangan PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1187, '183', '74', 'Mea Surament Of Winding Resistance Unit 1 PLTA Man', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1188, '184', '75', 'Instruction Manual Of Operation And Maintenance PL', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1189, '185', '76', 'Instalationb hydroelectric Project Contract No.PJ ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1190, '186', '77', 'Instalation Manual Of Water Turbine For Maninjau P', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1191, '187', '78', 'Maninjau power Station Instuction for opration and', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1192, '188', '79', 'Laporan Supervisi Pengujian Lapangan No.07.LMK .84', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1193, '189', '80', 'Test Report For Maninjau Hydroelectric Project Gen', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1194, '190', '81', 'turbin dan Perlengkapannya', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1195, '191', '82', 'site Test Procedure Of Turbine Governor And Acceso', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1196, '192', '83', 'Instruction Manual 4 Set Of /21.5 MVA', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1197, '193', '84', 'data hidrologi turbin Generator Transpormer', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1198, '194', '85', 'Schamatic Diagram JOB No.3601075', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1199, '195', '86', 'Instruction For Auxiliary Relay', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1200, '196', '87', 'Operation and Maintenance Instructions Substation ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1201, '197', '88', 'Test Report for Maninjau Hydroelectric325/PST/79 i', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1202, '198', '89', 'Contract 150&70KV Transmission Line &Substation Eq', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1203, '199', '90', 'automatic Control dan Relay', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1204, '200', '91', 'Inspection and Preliminary test record For Maninja', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1205, '201', '92', 'Operating Instructions Of Goverand water Turbine 0', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1206, '202', '93', 'Standing Operation Procedure System Pembangkit Dan', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1207, '203', '94', 'Test Report For Substations Quipment Contract No.P', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1208, '204', '95', 'HydroElectricPower Project West Sumatra Indonesia ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1209, '205', '96', 'Instalations Manual Of water Turbine for Maninjau ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1210, '206', '97', 'Test Report On 150 KV Bandar Buat Transmision Line', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1211, '207', '98', 'Laporan Assesment Trafo PLTA Maninjau Unit 1-4 Tah', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1212, '208', '99', 'Maninjau Hydro Electric ProjectGenerating Equipmen', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1213, '209', '100', 'Spare Pars List PLTA Maninjau MNJ -410 1983', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1214, '210', '101', 'Test Report For Maninjau Hydro electric Projecct g', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1215, '211', '102', '7.Mainmtenace', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1216, '212', '103', 'additional Environ Mental Investigation Slected En', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1217, '213', '104', 'Test Report For Maninjau Hydro Electric 325/PST/79', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1218, '214', '105', 'Test Report for Maninjau Hydroelectric Project 325', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1219, '215', '106', 'Test report Telephone System Maninjau Hyroelectric', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1220, '216', '107', 'Test Report low Volrtage Switchgear control System', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1221, '217', '108', 'Dokumentasi Pekerjaan Pengadaan Dan Pemasangan PMT', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1222, '218', '109', 'SEKB/001/37 Test Report For G<E 20 KV Swictchgear ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1223, '219', '110', 'Instalation Manual Of Water Turbine', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1224, '220', '111', 'Test report For maninjau Hydroelectric project gen', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1225, '221', '112', 'Test Re[por For Maninjau Hydroelectric Project Gen', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1226, '222', '113', 'Data -data Air Danau Maninjau Tahun 1983-Mei 1190', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1227, '223', '114', 'Laporan sementara Pekerjaan assesment Di PLTA Mani', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1228, '224', '115', 'Data-Data P{eralatan Pembangkit Unit PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1229, '225', '116', 'Generating Equipment test Report', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1230, '226', '117', 'Switch Gear 150 KV PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1231, '227', '118', 'Filling Report Of Readarace Tunnel Hydroelectric P', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1232, '228', '119', 'Filling Report Of Readrace Tunnel hydroelectric PL', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1233, '229', '120', 'Invoce Ns.LEBE .79-0050/BBC.PLC', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1234, '230', '121', '~150KV C.B BBC =001-44~', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1235, '231', '122', 'Inspection Report Modification .Order.og.ewi.PLN00', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1236, '232', '123', 'Spare Parts.ListTurbine /generator (unit PLTA Mani', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1237, '233', '124', '7.Maintenance B', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1238, '234', '125', 'Petunjuk Pembongkaran Generator PLTA maninjau SIE ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1239, '235', '126', 'Instalation Manual Of water Turbine ForManinjau PS', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1240, '236', '127', 'Intake PLTA', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1241, '237', '128', 'Inspection Prosedure For Subsection B Steel Lining', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1242, '238', '129', 'Pemeriksaan Keretakan Beton PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1243, '239', '130', 'Generator Turbine', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1244, '240', '131', 'Instalation Manual Of Water Turbine For Maninjau P', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1245, '241', '132', 'Site Test Report For Generating Equipment LO II +I', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1246, '242', '133', 'Site Efficiency Test Report Of Francis Turbine For', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1247, '243', '134', 'LBS load Break Switch', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1248, '244', '135', 'Safety Valve Of Pressure oil tank', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1249, '245', '136', 'Instruction Of GS thyristor Rectifier', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1250, '246', '137', 'Efficiency THRU High technology Chemical', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1251, '247', '138', 'EquipmentDrawings For Crossbar Paba Type AC 150 B.', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1252, '248', '139', 'Spare Part Special And Repair Shop Equipment For C', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1253, '249', '140', '150 KV Transmission Line Manijau - Bandar Buat 1. ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1254, '250', '141', 'ContractNo.PJ.333/PST/79 Maninjau Project III Inst', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1255, '251', '142', 'Operation And Maintenance Instruktion Substation S', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1256, '252', '143', 'Instruction manual For Penstock And Wimch Cariers ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1257, '253', '144', 'Tecnical Specification For Three Sets OF 625Kva Di', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1258, '254', '145', 'Maninjau HydroElectric P{roject Contract No.PJ/333', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1259, '255', '146', 'Product Manual 1.HSB425416.31en rev.0 LTB72,5-170 ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1260, '256', '147', 'Manual For Static Type Automatic Syschizonizing Eq', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1261, '257', '148', 'Data Tool', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1262, '258', '149', 'Shipping Documents For Contract No PJ.325/PST/79 F', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1263, '259', '150', 'Maninjau H.E.P Report On Concrete Quality Investig', 'BUKU', 'PLTA MANINJAU', '', '1982', '', ''),
(1264, '260', '151', 'pemutus /Pemisah ( GCB. UCB.ACB', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1265, '261', '152', 'Instalation Manual Of Inletvalve For Maninjau PS. ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1266, '262', '153', 'Packing list maninjau Hydroelectric Project Timprt', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1267, '263', '154', 'Minimum Oil Circuit -Breaker Type SB And Cubicles', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1268, '264', '155', 'Test Report For Maninjau Hydro electric Project ge', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1269, '265', '156', 'Test Report For Maninjau Hydro electric Project ge', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1270, '266', '157', 'Instruction manual For Transformer 1 Set Of 5 MVA', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1271, '267', '158', 'Rangkuman data Hydrologi dan Metode Permalan masuk', 'BUKU', 'PLTA MANINJAU', '', '1990', '', ''),
(1272, '268', '159', 'Pokok -Pokok Pembakuan serta pola dan perencanaan ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1273, '268', '159', 'Pokok -Pokok Pembakuan serta pola dan perencanaan ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1274, '268', '159', 'Pokok -Pokok Pembakuan serta pola dan perencanaan ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1275, '268', '159', 'Pokok -Pokok Pembakuan serta pola dan perencanaan ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1276, '268', '159', 'Pokok -Pokok Pembakuan serta pola dan perencanaan ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1277, '269', '160', 'The calculator results Of the Load Rejection Of Ma', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1278, '270', '161', 'Distance Relays LZ3,LZ31 And LZ32', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1279, '271', '162', 'Erection Procedure For Sub section A Mechanical ma', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1280, '272', '163', 'Formulir MO Unit Pembangkit PLTA/ PLTM Dan Pedoman', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1281, '273', '164', 'Draw -Out Type Relays 39-KH-MNJ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1282, '274', '165', 'Feasibility Report Maninjau Hydroelectric Power Pr', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1283, '275', '166', '50/10/2 Ton Overhead Crane Travelling maninjau', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1284, '276', '167', 'Test report Of power house 002-007', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1285, '277', '168', 'Delivery Of Spare Special Tools And Repair Shop Eq', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1286, '278', '169', 'Surat Perjanjian pembuatan Pondasi Kaki Tower 150 ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1287, '279', '170', 'Factory Inspection Procedure of carbon Dioxide fir', 'BUKU', 'PLTA MANINJAU', 'Kawasaki', '', '', ''),
(1288, '280', '171', 'Maninjau pj.333/fst/79/Erection Procedure for Gate', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1289, '281', '172', 'Site Test Report Foe Generating Equipment Lot II O', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '', '', ''),
(1290, '282', '173', 'Invoice No. LEBE -79-0049/BBC 2 SHIPPING Document ', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '', '', ''),
(1291, '283', '174', 'Invoice no TSTS - KO33', 'BUKU', 'PLTA MANINJAU', 'KURIMOTO WORKS,LTD', '', '', ''),
(1292, '284', '175', 'Invoice LEBE -79-0049/5B', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '', '', ''),
(1293, '285', '176', 'Repair Weiding Procedure Of Runner For Hydrolikc T', 'BUKU', 'PLTA MANINJAU', 'TOSHIBA CORP', '', '', ''),
(1294, '286', '177', 'INVOice No.LEBE 79 .0050 ITS G-5', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '', '', ''),
(1295, '287', '178', 'Invoice No.TSt2 - KO94', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1296, '288', '179', 'Beberapa Petunjuk Dalam Melaksanakan Penempatan & ', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1297, '289', '180', 'TAKAOKA DisconectingSwitch', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1298, '290', '181', 'Maninjau H.E.P Summary OF Site Office Meeting For ', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '', '', ''),
(1299, '291', '182', 'Maninjau HydroelectricProject GovermentOf The Repu', 'BUKU', 'PLTA MANINJAU', 'MAIDENSHA ELECTRI.co.id', '', '', ''),
(1300, '292', '183', 'Telp PABX Merk OKI PLTA Maninjau 001-45', 'BUKU', 'PLTA MANINJAU', 'OKI Electric', '', '', ''),
(1301, '293', '184', 'Indoor Switchgear And Control Equipment', 'BUKU', 'PLTA MANINJAU', 'MAIDENSHA ELECTRI.co.id', '', '', ''),
(1302, '294', '185', 'Relianse Electric', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1303, '295', '186', 'Pretiminary Test Lot III Transpormer ( 21,5 MVA,50', 'BUKU', 'PLTA MANINJAU', 'MAIDENSHA ELECTRI.co.id', '', '', ''),
(1304, '296', '187', 'Specticatyion For 20K& 6KV PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', 'FUJI ELECTRIC.CO.LTD', '', '', ''),
(1305, '297', '188', 'Pauwels International contract P.J.P/028/PST /88 D', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1306, '298', '189', 'Dokument Photo Kegiatan Proyek PLTA Intake Weir PL', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1307, '299', '190', 'Capacitor Voltage Terminal Power Line carrier Term', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '', '', ''),
(1308, '300', '191', 'Berita Acara Serah Terima Pemakaian Pesawat  Radio', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1309, '301', '192', 'Part I Maniature Circuit Breakers, II Current Oper', 'BUKU', 'PLTA MANINJAU', 'BBC Brow Boveri', '', '', ''),
(1310, '302', '193', 'Test report For Maninjau Hydro ElectricProject Gen', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1311, '303', '194', 'SEKB.001/ 36 Test Report For Generating Equipment ', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '', '', ''),
(1312, '304', '195', 'Test report For Maninjau HydroElectric 325/PST/79 ', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '', '', ''),
(1313, '305', '196', 'Spectications For 20KV & 6 KV PLTA Maninjau', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '', '', ''),
(1314, '306', '197', 'Test Report Maninjau Hydroelectric Project Generat', 'BUKU', 'PLTA MANINJAU', 'NIPPON KOEI CO LTD.TOKYO,JAPAN', '', '', ''),
(1315, '307', '198', 'Shipping Application For contract No.PJ 325/PST/79', 'BUKU', 'PLTA MANINJAU', 'Sumito corp', '', '', ''),
(1316, '308', '199', 'Test Report For Maninjau Hydroelectric Project Gen', 'BUKU', 'PLTA MANINJAU', 'MAIDENSHA ELECTRI.co.id', '', '', ''),
(1317, '309', '200', 'Penyajian Evaluasi Lingkungan II.Rencana Pengelola', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1318, '301', '201', 'Major Overhoul Turbine -Generator Unit Unit 3 Tang', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1319, '312', '203', 'ion for GS Nickel cadmium  alkaline Bettery', 'BUKU', 'PLTA MANINJAU', 'JAPAN STORANGE BATTERY CO.LTD', '', '', ''),
(1320, '313', '204', 'Standing Operation Producedured SOP Untuk Sistem s', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1321, '314', '205', 'KKS Number Sektor Pembangkitan Bukittinggi PLTA Ma', 'BUKU', 'PLTA MANINJAU', '', '', '', ''),
(1322, '1', '1', 'Dokumen Pembayaran Konpensasi Tanah Dan Tanaman Pr', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1323, '2', '2', 'Dokumen Inventarisasi Pengadaan Tanah Proyek PLTA ', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1324, '3         ', '3', 'Rencana Anggaran Biaya', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1325, '4', '4', 'Rencana Pengelolaan Lingkungan (RKL) Plta Singkara', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1326, '5', '5', 'Rencana Pemantauan Lingkungan(RPL) PLTA Singkarak ', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1327, '6', '6', 'Rencana ', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1328, '6', '6', 'Rencana pengembangan wilayah sekitar danau Singkar', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1329, '7', '7', 'Pemantauan Pelaksanaan RKL dan RPL PLTA singkarak ', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1330, '8', '8', 'Laporan Pendahuluan ( Inpletion report) Pemantauan', '', 'PLTA SINGKARAK', '', '', '', ''),
(1331, '9', '9', 'Laporan PemantauanPelaksanan RKL dan RPL PLTA Sing', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1332, '10', '10', 'Laporan Commisioning report ( Supervisi - Evaluasi', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1333, '11', '11', 'Laporan Rencana Pengelolaaan Lingkungan RKL dan Re', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1334, '12', '12', 'Surat Perjanjian Pemborongan Pek. pembangunan Jala', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1335, '13', '13', 'laporan Pemantauan Pelaksanaan RKL dan RPL PLTA Si', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1336, '14', '14', 'Laporan Akhir Pemantauan Pelaksanaan RKL dan RPL P', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1337, '15', '15', 'Laporan Akhir Pemantauan Pelaksanaan RKL dan RPL P', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1338, '16', '16', 'Laporan PendahuluanPekerjaanMonitoring RKL dan RPL', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1339, '17', '17', 'Keberadaan L.kritis di sekitar Daerah Tangkapan Ai', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1340, '18', '18', 'Laporan akhir Monitoring  Rencana Pengelolaan Ling', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1341, '19', '19', 'AF- Protection Signaling Equipment Type NSD 40 Ope', 'BUKU', 'PLTA SINGKARAK', '', '', '', ''),
(1342, '20', '20', 'Laporan Pemantauan RKL & RPL Proyek PLTA Singkarak', 'BUKU', 'PLTA SINGKARAK', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `kode_pnjm` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `nm_rak` varchar(100) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL,
  `ket` text NOT NULL,
  `aksi` enum('Dipinjam','Dikembalikan') NOT NULL DEFAULT 'Dipinjam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`kode_pnjm`, `user_id`, `book_id`, `nm_rak`, `tgl_pinjam`, `tgl_kembali`, `ket`, `aksi`) VALUES
(9, 1, 1004, 'PLTA MANINJAU', '2025-02-10', '2025-02-20', 'Pinjaman reguler', 'Dikembalikan'),
(10, 2, 1005, 'PLTA MANINJAU', '2025-02-12', NULL, 'Masih dipinjam', 'Dipinjam'),
(11, 3, 1007, 'PLTA MANINJAU', '2025-02-15', '2025-02-18', 'Sudah dikembalikan tepat waktu', 'Dikembalikan'),
(12, 4, 1008, 'PLTA MANINJAU', '2025-02-17', NULL, 'Belum dikembalikan', 'Dipinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('f0xosHECxv0SWgNiTBdV7XAItDUsBhbne4EGrmbM', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTV3YnF3Y1hNV2xCejFXZDQ3NFNYdUxHdWg5bU5hYTVrRGpTaXZ6aiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1740142653);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_login`
--

CREATE TABLE `tab_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `id_user` int(20) NOT NULL,
  `role` enum('admin','librarian','anggota','pengguna_umum') NOT NULL DEFAULT 'anggota',
  `unit` enum('PLTA Singkarak','PLTA Maninjau','PLTA Batang Agam') NOT NULL DEFAULT 'PLTA Singkarak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tab_login`
--

INSERT INTO `tab_login` (`username`, `password`, `id_user`, `role`, `unit`) VALUES
('admin', '$2y$12$O4F7r6zLtHjxAWAw3tSDuuuD/aF7y8ZfmihqnDqz4KIasGOqydMka', 1, 'anggota', 'PLTA Singkarak'),
('admin1', '$2y$12$8KsGAAUwr3dlgYUZ5P2r9O.2KcOFF8PiIvlfpo3F/PhG/JAbXy/IS', 2, 'admin', 'PLTA Singkarak'),
('librarian1', '$2y$12$oE9ye2ER3TZWm3vtM2cCc.KQNX9V3gdRBWcbEP5FtbaIx6lUKcpd2', 3, 'librarian', 'PLTA Maninjau'),
('anggota1', '$2y$12$S5vCDX6xoTJ05PRPWgfece3fxRSzZdv.jAUYBgv.CwsgsqvnUJ5My', 4, 'anggota', 'PLTA Batang Agam'),
('pengguna1', '$2y$12$mggUFpPIxglaEcipIXypr.3ewVjf3BqaImnJGopod3lOUzGxEnv7i', 5, 'pengguna_umum', 'PLTA Singkarak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_file`
--

CREATE TABLE `upload_file` (
  `id` int(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `book_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `data_asp_bk`
--
ALTER TABLE `data_asp_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`kode_pnjm`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `tab_login`
--
ALTER TABLE `tab_login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_asp_bk`
--
ALTER TABLE `data_asp_bk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1343;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `kode_pnjm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tab_login`
--
ALTER TABLE `tab_login`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tab_login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `data_asp_bk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `upload_file`
--
ALTER TABLE `upload_file`
  ADD CONSTRAINT `upload_file_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `data_asp_bk` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
