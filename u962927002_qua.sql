
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 03 Feb 2016 pada 10.11
-- Versi Server: 10.0.22-MariaDB
-- Versi PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u962927002_qua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `assembly`
--

CREATE TABLE IF NOT EXISTS `assembly` (
  `id_project` int(11) NOT NULL,
  `id_assembly` int(11) NOT NULL,
  `proses_assembly` varchar(100) DEFAULT NULL,
  `blok_assembly` varchar(100) DEFAULT NULL,
  `qc_inspecass` varchar(100) DEFAULT NULL,
  `qa_coorass` varchar(100) DEFAULT NULL,
  `class_surass` varchar(100) DEFAULT NULL,
  `owner_surass` varchar(100) DEFAULT NULL,
  `tgl_periksaass` date DEFAULT NULL,
  `status_assembly` varchar(100) DEFAULT NULL,
  `tgl_reinspeksiass` date DEFAULT NULL,
  `rekomendasi_assembly` varchar(100) DEFAULT NULL,
  `path_gambarass` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_assembly`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `commissioning`
--

CREATE TABLE IF NOT EXISTS `commissioning` (
  `id_project` int(11) NOT NULL,
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `bagian_comm` varchar(100) DEFAULT NULL,
  `pengujian_comm` varchar(100) DEFAULT NULL,
  `id_kompom` varchar(100) DEFAULT NULL,
  `qc_inspecom` varchar(100) DEFAULT NULL,
  `qa_coorom` varchar(100) DEFAULT NULL,
  `class_surom` varchar(100) DEFAULT NULL,
  `owner_surom` varchar(100) DEFAULT NULL,
  `tgl_periksaom` date DEFAULT NULL,
  `status_comm` varchar(100) DEFAULT NULL,
  `tgl_reinspeksiom` date DEFAULT NULL,
  `rekomendasi_comm` varchar(100) DEFAULT NULL,
  `path_gambarom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_comm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_project`
--

CREATE TABLE IF NOT EXISTS `data_project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `nama_project` varchar(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `imo` varchar(50) DEFAULT NULL,
  `panjang_kapal` varchar(50) DEFAULT NULL,
  `lebar_kapal` varchar(50) DEFAULT NULL,
  `tinggi_kapal` varchar(50) DEFAULT NULL,
  `sarat_kapal` varchar(50) DEFAULT NULL,
  `gt_flag` varchar(50) DEFAULT NULL,
  `keel_laying` date DEFAULT NULL,
  `launching` date DEFAULT NULL,
  `comm_prog` date DEFAULT NULL,
  `inclining` date DEFAULT NULL,
  `sea_trial` date DEFAULT NULL,
  `delivery` date DEFAULT NULL,
  PRIMARY KEY (`id_project`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `id_project` int(11) NOT NULL,
  `id_delivery` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(100) DEFAULT NULL,
  `qc_inspecd` varchar(100) DEFAULT NULL,
  `qa_coord` varchar(100) DEFAULT NULL,
  `class_surd` varchar(100) DEFAULT NULL,
  `owner_surd` varchar(100) DEFAULT NULL,
  `tgl_periksad` date DEFAULT NULL,
  `status_delivery` varchar(100) DEFAULT NULL,
  `tgl_reinspeksid` date DEFAULT NULL,
  `rekomendasi_delivery` varchar(100) DEFAULT NULL,
  `path_gambard` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_delivery`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `erection`
--

CREATE TABLE IF NOT EXISTS `erection` (
  `id_project` int(11) NOT NULL,
  `id_erection` int(11) NOT NULL,
  `proses_erection` varchar(100) DEFAULT NULL,
  `blok_erection` varchar(100) DEFAULT NULL,
  `qc_inspecer` varchar(100) DEFAULT NULL,
  `qa_coorer` varchar(100) DEFAULT NULL,
  `class_surrer` varchar(100) DEFAULT NULL,
  `owner_surer` varchar(100) DEFAULT NULL,
  `tgl_periksaer` date DEFAULT NULL,
  `status_erection` varchar(100) DEFAULT NULL,
  `tgl_reinspeksier` date DEFAULT NULL,
  `rekomendasi_erection` varchar(100) DEFAULT NULL,
  `path_gambarer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_erection`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fabrikasi`
--

CREATE TABLE IF NOT EXISTS `fabrikasi` (
  `id_project` int(11) NOT NULL,
  `id_fabrikasi` int(11) NOT NULL AUTO_INCREMENT,
  `bagian_fabrikasi` varchar(100) DEFAULT NULL,
  `proses_fabrikasi` varchar(100) DEFAULT NULL,
  `jenis_fabrikasi` varchar(100) DEFAULT NULL,
  `nama_kompfab` varchar(100) DEFAULT NULL,
  `id_kompfab` varchar(100) DEFAULT NULL,
  `qc_inspecfab` varchar(100) DEFAULT NULL,
  `qa_coorfab` varchar(100) DEFAULT NULL,
  `class_surfab` varchar(100) DEFAULT NULL,
  `owner_surfab` varchar(100) DEFAULT NULL,
  `tgl_periksafab` date DEFAULT NULL,
  `status_fab` varchar(100) DEFAULT NULL,
  `tgl_reinspeksifab` date DEFAULT NULL,
  `rekomendasi_fab` varchar(100) DEFAULT NULL,
  `path_gambarfab` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_fabrikasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `idenmaterial`
--

CREATE TABLE IF NOT EXISTS `idenmaterial` (
  `id_project` int(11) NOT NULL,
  `id_idenmat` int(11) NOT NULL AUTO_INCREMENT,
  `bagian` varchar(50) DEFAULT NULL,
  `jenis_komp` varchar(50) DEFAULT NULL,
  `nama_komp` varchar(50) DEFAULT NULL,
  `id_komp` varchar(50) DEFAULT NULL,
  `qc_inspec` varchar(50) DEFAULT NULL,
  `qa_coor` varchar(50) DEFAULT NULL,
  `class_sur` varchar(50) DEFAULT NULL,
  `owner_sur` varchar(50) DEFAULT NULL,
  `tgl_periksa` date DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `tgl_reinspeksi` date DEFAULT NULL,
  `rekomendasi` varchar(500) DEFAULT NULL,
  `path_gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_idenmat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_assembly`
--

CREATE TABLE IF NOT EXISTS `item_assembly` (
  `id_assembly` int(11) NOT NULL,
  `id_itemassembly` int(11) NOT NULL AUTO_INCREMENT,
  `nama_itemas` varchar(100) DEFAULT NULL,
  `isi_itemas` varchar(100) DEFAULT NULL,
  `standard_itemas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemassembly`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_comm`
--

CREATE TABLE IF NOT EXISTS `item_comm` (
  `id_comm` int(11) NOT NULL,
  `id_itemcomm` int(11) NOT NULL AUTO_INCREMENT,
  `nama_itemom` varchar(100) DEFAULT NULL,
  `isi_itemom` varchar(100) DEFAULT NULL,
  `standard_itemom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemcomm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_delivery`
--

CREATE TABLE IF NOT EXISTS `item_delivery` (
  `id_delivery` int(11) NOT NULL,
  `id_itemd` int(11) NOT NULL AUTO_INCREMENT,
  `nama_itemd` varchar(100) DEFAULT NULL,
  `isi_itemd` varchar(100) DEFAULT NULL,
  `standard_itemd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_erection`
--

CREATE TABLE IF NOT EXISTS `item_erection` (
  `id_erection` int(11) NOT NULL,
  `id_itemer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_itemer` varchar(100) DEFAULT NULL,
  `isi_itemer` varchar(100) DEFAULT NULL,
  `standard_itemer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemer`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_fabrikasi`
--

CREATE TABLE IF NOT EXISTS `item_fabrikasi` (
  `id_fabrikasi` int(11) NOT NULL,
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nama_itemfab` varchar(100) DEFAULT NULL,
  `isi_itemfab` varchar(100) DEFAULT NULL,
  `standard_itemfab` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_idenmat`
--

CREATE TABLE IF NOT EXISTS `item_idenmat` (
  `id_idenmat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL AUTO_INCREMENT,
  `nama_item` varchar(50) DEFAULT NULL,
  `isi_item` varchar(50) DEFAULT NULL,
  `standard_item` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_item`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;

--
-- Dumping data untuk tabel `item_idenmat`
--

INSERT INTO `item_idenmat` (`id_idenmat`, `id_item`, `nama_item`, `isi_item`, `standard_item`) VALUES
(6, 37, 'Ukuran Pipa', '100 meter', '100 meter'),
(6, 38, 'Visual Check', 'Oke', 'oke'),
(6, 39, 'Quantity', '3', '3'),
(6, 40, 'Grade/Type', 'A', 'A'),
(6, 41, 'Nomor Sertifikat', 'PP123', 'PP123'),
(6, 42, 'Tanggal Produksi', '2016-01-21', '2016-01-21'),
(7, 43, 'Ukuran Pipa', '100 m', '100 m'),
(7, 44, 'Visual Check', 'Oke', 'Oke'),
(7, 45, 'Quantity', '3', '3'),
(7, 46, 'Grade/Type', 'A', 'A'),
(7, 47, 'Nomor Sertifikat', 'PR123', 'PR123'),
(7, 48, 'Tanggal Produksi', '2016-01-29', '2016-01-29'),
(8, 49, 'Visual Check', 'Oke', 'Oke'),
(8, 50, 'Quantity', '3', '2'),
(8, 51, 'Grade Type', 'A', 'A'),
(8, 52, 'Nomor Sertifikat', 'ST123', 'ST123'),
(8, 53, 'Tanggal Produksi', '2016-01-20', '2016-01-20'),
(9, 54, 'Visual Check', 'Oke', 'Oke'),
(9, 55, 'Quantity', '2', '2'),
(9, 56, 'Grade Type', 'A', 'A'),
(9, 57, 'Nomor Sertifikat', 'RB123', 'RB123'),
(9, 58, 'Tanggal Produksi', '2016-01-29', '2016-01-29'),
(10, 59, 'Visual Check', 'Oke', 'Oke'),
(10, 60, 'Quantity', '3', '3'),
(10, 61, 'Grade Type', 'A', 'A'),
(10, 62, 'Nomor Sertifikat', 'ML123', 'ML123'),
(10, 63, 'Tanggal Produksi', '2016-01-29', '2016-01-29'),
(11, 64, 'Visual Check', 'Oke', 'oke'),
(11, 65, 'Quantity', '2', '2'),
(11, 66, 'Grade Type', 'A', 'A'),
(11, 67, 'Nomor Sertifikat', 'MS12', 'MS12'),
(11, 68, 'Tanggal Produksi', '2016-01-29', '2016-01-29'),
(12, 69, 'Ukuran Pipa', '100 meter', '100 meter'),
(12, 70, 'Visual Check', 'oke', 'oke'),
(12, 71, 'Quantity', '2', '2'),
(12, 72, 'Grade/Type', 'A', 'A'),
(12, 73, 'Nomor Sertifikat', 'PO123', 'PO123'),
(12, 74, 'Tanggal Produksi', '2016-01-22', '2016-01-22'),
(13, 75, 'Visual Check', 'oke', 'oke'),
(13, 76, 'Quantity', '2', '2'),
(13, 77, 'Grade Type', 'kw', 'kw'),
(13, 78, 'Nomor Sertifikat', 'ab23', 'ab23'),
(13, 79, 'Tanggal Produksi', '2016-01-28', '2016-01-28'),
(14, 80, 'Visual Check', 'okes', 'okes'),
(14, 81, 'Quantity', '212', '212'),
(14, 82, 'Grade Type', 'kwa', 'kwa'),
(14, 83, 'Nomor Sertifikat', 'CS988', 'CS988'),
(14, 84, 'Tanggal Produksi', '2016-01-30', '2016-01-30'),
(15, 85, 'Visual Check', 'oke', 'oke'),
(15, 86, 'Quantity', '8', '8'),
(15, 87, 'Grade Type', 'a', 'a'),
(15, 88, 'Nomor Sertifikat', 'RB12', 'Rb12'),
(15, 89, 'Tanggal Produksi', '2016-02-26', '2016-02-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_launching`
--

CREATE TABLE IF NOT EXISTS `item_launching` (
  `id_launching` int(11) NOT NULL,
  `id_itemlau` int(11) NOT NULL AUTO_INCREMENT,
  `nama_iteml` varchar(100) DEFAULT NULL,
  `isi_iteml` varchar(100) DEFAULT NULL,
  `standar_iteml` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemlau`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_outfitting`
--

CREATE TABLE IF NOT EXISTS `item_outfitting` (
  `id_outfitting` int(11) NOT NULL,
  `id_itemout` int(11) NOT NULL AUTO_INCREMENT,
  `nama_itemout` varchar(100) DEFAULT NULL,
  `isi_itemout` varchar(100) DEFAULT NULL,
  `standard_itemout` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemout`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item_sea`
--

CREATE TABLE IF NOT EXISTS `item_sea` (
  `id_sea` int(11) NOT NULL,
  `id_itemsea` int(11) NOT NULL AUTO_INCREMENT,
  `nama_items` varchar(100) DEFAULT NULL,
  `isi_items` varchar(100) DEFAULT NULL,
  `standard_items` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemsea`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_assembly`
--

CREATE TABLE IF NOT EXISTS `komponen_assembly` (
  `id_kompassem` int(11) NOT NULL AUTO_INCREMENT,
  `proses_assembly` varchar(100) DEFAULT NULL,
  `item_assembly` varchar(100) DEFAULT NULL,
  `tipe_dataassembly` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kompassem`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `komponen_assembly`
--

INSERT INTO `komponen_assembly` (`id_kompassem`, `proses_assembly`, `item_assembly`, `tipe_dataassembly`) VALUES
(1, 'Accurracy Control', 'Lebar', 'number'),
(2, 'Accurracy Control', 'Panjang', 'number'),
(3, 'Accurracy Control', 'Kerataan', 'number'),
(4, 'Accurracy Control', 'Kesikuan', 'number'),
(5, 'Accurracy Control', 'Puntiran', 'number'),
(6, 'Accurracy Control', 'Penyimpangan Komponen Internal Pelat Kulit', 'number'),
(7, 'Accurracy Control', 'Penyimpangan Panel / Komponen terhadap CL,BL atau FR.L', 'number'),
(8, 'Accurracy Control', 'Jarak antara komponen', 'number'),
(9, 'Fitting', 'Kesalahan Pemasangan', 'text'),
(10, 'Fitting', 'Belum Terpasang', 'text'),
(11, 'Fitting', 'Ketidaklurusan', 'number'),
(12, 'Fitting', 'Celah/Gap', 'number'),
(13, 'Welding', 'Kesesuaian WPS', 'text'),
(14, 'Welding', 'Crack', 'number'),
(15, 'Welding', 'Kesalahan Pakai elektrode', 'text'),
(16, 'Welding', 'Belum Dilas', 'text'),
(17, 'Welding', 'Panjang kaki las', 'number'),
(18, 'Welding', 'Bentuk hasil las', 'text'),
(19, 'Welding', 'Cacat bekas stopper', 'text'),
(20, 'Welding', 'Spatter', 'number'),
(21, 'Welding', 'Porosity', 'number'),
(22, 'Deformasi', 'Kerataan Pelat antara gading - gading', 'number'),
(23, 'Deformasi', 'Kerataan Pelat di tepi bebas', 'number');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_comm`
--

CREATE TABLE IF NOT EXISTS `komponen_comm` (
  `id_kompc` int(11) NOT NULL,
  `bagian_comm` varchar(100) DEFAULT NULL,
  `pengujian_comm` varchar(100) DEFAULT NULL,
  `item_comm` varchar(100) DEFAULT NULL,
  `tipe_datacomm` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kompc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komponen_comm`
--

INSERT INTO `komponen_comm` (`id_kompc`, `bagian_comm`, `pengujian_comm`, `item_comm`, `tipe_datacomm`) VALUES
(1, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Pembacaan Sarat Dari Tanda Sarat', 'text'),
(2, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Koreksi Sarat', 'text'),
(3, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Displacement', 'number'),
(4, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Sudut Kemiringan', 'number'),
(5, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Titik Berat Kapal Pada Saat Test', 'number'),
(6, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Kondisi Kapal Kosong', 'text'),
(7, 'Hull Construction', 'Inclining Test & Deadweight Measurement', 'Muatan yang ditambahkan', 'text'),
(8, 'Hull Construction', 'Deadweight Measurement', 'Thickness of Deck Plate at midship', 'number'),
(9, 'Hull Construction', 'Deadweight Measurement', 'Thickness of keel plate at midship', 'number'),
(10, 'Hull Construction', 'Deadweight Measurement', 'Moulded depth at midship', 'number'),
(11, 'Hull Construction', 'Deadweight Measurement', 'statutory deck line above base line', 'text'),
(12, 'Hull Construction', 'Deadweight Measurement', 'summer freeboard', 'number'),
(13, 'Hull Construction', 'Deadweight Measurement', 'summer load draft (moulded)', 'number'),
(14, 'Hull Construction', 'Deadweight Measurement', 'summer load draft (extreme)', 'number'),
(15, 'Hull Construction', 'Deadweight Measurement', 'deadweight at summer load draft (extreme)', 'number'),
(16, 'Hull Construction', 'Radiography', 'Nama Komponen', 'text'),
(17, 'Hull Construction', 'Radiography', 'Lokasi Titik Tembak', 'text'),
(18, 'Hull Construction', 'Radiography', 'Crack ', 'number'),
(19, 'Hull Construction', 'Radiography', 'Incomplete Pen', 'text'),
(20, 'Hull Construction', 'Radiography', 'Incomplete Fusion', 'text'),
(21, 'Hull Construction', 'Radiography', 'Porosity', 'number'),
(22, 'Hull Construction', 'Radiography', 'Slag Inclusion', 'text'),
(23, 'Hull Construction', 'Radiography', 'Undercut', 'number'),
(24, 'Hull Construction', 'Radiography', 'judgement', 'text'),
(25, 'Hull Construction', 'Ultrasonic Test', 'Crack ', 'number'),
(26, 'Hull Construction', 'Ultrasonic Test', 'Incomplete Fusion', 'text'),
(27, 'Hull Construction', 'Ultrasonic Test', 'Incomplete Penetration', 'text'),
(28, 'Hull Construction', 'Ultrasonic Test', 'Elongated Indication', 'number'),
(29, 'Hull Construction', 'Keel Deflection', 'Measurement Test', 'number'),
(30, 'Hull Construction', 'Main Dmension', 'Measurement Test (LOA, LPP, B, H)', 'number'),
(31, 'Hull Outfitting', 'Cargo Hose Handling Crane', 'Function Test', 'text'),
(32, 'Hull Outfitting', 'Cargo Hose Handling Crane', 'Load Test With 3.0 Tons', 'text'),
(33, 'Hull Outfitting', 'Cargo Hose Handling Crane', 'Over Load Test Crane with 3.75 Tons', 'text'),
(34, 'Hull Outfitting', 'Provision Crane 0.9 T (Electric Type)', 'Function Test', 'text'),
(35, 'Hull Outfitting', 'Provision Crane 0.9 T (Electric Type)', 'Load Test With 0.9 Tons', 'text'),
(36, 'Hull Outfitting', 'Provision Crane 0.9 T (Electric Type)', 'Over Load Test Crane with 1.125 Tons', 'text'),
(37, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Bulkhead Temperature', 'number'),
(38, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Seal Temperature', 'number'),
(39, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Bearing Pump', 'text'),
(40, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Casing Temperature', 'number'),
(41, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Discharge Pressure', 'number'),
(42, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Suction Pressure', 'number'),
(43, 'Hull Outfitting', 'Tank Cleaning Pump System', 'R current', 'number'),
(44, 'Hull Outfitting', 'Tank Cleaning Pump System', 'S current', 'number'),
(45, 'Hull Outfitting', 'Tank Cleaning Pump System', 'T current', 'number'),
(46, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Start + Stop', 'text'),
(47, 'Hull Outfitting', 'Tank Cleaning Pump System', 'Emergency Stop', 'text'),
(48, 'Hull Outfitting', 'Cargo Control Pump System', 'Water Supply System', 'text'),
(49, 'Hull Outfitting', 'Cargo Control Pump System', 'Air Supply System', 'text'),
(50, 'Hull Outfitting', 'Cargo Control Pump System', 'Manual Throttle Valve System', 'text'),
(51, 'Hull Outfitting', 'Cargo Control Pump System', 'Auto Throttle Valve System', 'text'),
(52, 'Hull Outfitting', 'Cargo Control Pump System', 'Vacuum Pump Switching System', 'text'),
(53, 'Hull Outfitting', 'Cargo Control Pump System', 'Vacuum Pump Start', 'text'),
(54, 'Hull Outfitting', 'Cargo Control Pump System', 'Cooling System', 'text'),
(55, 'Hull Outfitting', 'Cargo Control Pump System', 'Cargo Stripping System', 'text'),
(56, 'Hull Outfitting', 'Cargo Control Pump System', 'Cargo Pump Set Safety Device', 'text'),
(57, 'Hull Outfitting', 'Cargo Control Pump System', 'High Speed', 'number'),
(58, 'Hull Outfitting', 'Cargo Control Pump System', 'Low Speed Ampere', 'number'),
(59, 'Hull Outfitting', 'Cargo Control Pump System', 'High Speed Ampere', 'number'),
(60, 'Hull Outfitting', 'Cargo Control Pump System', 'Terminal Overload Test', 'text'),
(61, 'Hull Outfitting', 'Cargo Control Pump System', 'Thermistor Motor Test', 'text'),
(62, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Fresh Air Temperature ', 'number'),
(63, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Mixer Air Temperature', 'number'),
(64, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Return Air Temperature', 'number'),
(65, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Ampere Motor Compressor', 'number'),
(66, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Suction Pressure', 'number'),
(67, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Discharge Pressure', 'number'),
(68, 'Hull Outfitting', 'AC & Mechanical Fan in Accommodation', 'Voltage Motor Compressor', 'number'),
(69, 'Hull Outfitting', 'Refrigeration Provision Plant', 'Condensing Unit Test', 'text'),
(70, 'Hull Outfitting', 'Refrigeration Provision Plant', 'Keeping Test', 'text'),
(71, 'Hull Outfitting', 'Refrigeration Provision Plant', 'Insulation Test', 'text'),
(72, 'Hull Outfitting', 'Refrigeration Provision Plant', 'Open Inspection', 'text'),
(73, 'Hull Outfitting', 'Lowering & Hoisting Life Boat/Rescue Boat Davit', 'Dimension Life Boat', 'text'),
(74, 'Hull Outfitting', 'Lowering & Hoisting Life Boat/Rescue Boat Davit', 'Weight Calculation', 'number'),
(75, 'Hull Outfitting', 'Lowering & Hoisting Life Boat/Rescue Boat Davit', 'Lowering Test (Test Weight, Ballast Weight)', 'number'),
(76, 'Hull Outfitting', 'Lowering & Hoisting Life Boat/Rescue Boat Davit', 'Hoisting Test  (Test Weight, Ballast Weight)', 'number'),
(77, 'Hull Outfitting', 'Fixed Local Application System', 'Tightness test', 'text'),
(78, 'Hull Outfitting', 'Fixed Local Application System', 'Pump Test and Verification of The Discharge Pressure', 'text'),
(79, 'Hull Outfitting', 'Fixed Local Application System', 'Fire Alarm System', 'text'),
(80, 'Hull Outfitting', 'Fixed Local Application System', 'Automatic Release Test', 'text'),
(81, 'Hull Outfitting', 'Fixed Local Application System', 'Manual Release Test', 'text'),
(82, 'Hull Outfitting', 'Fixed Local Application System', 'Air Blow Test', 'text'),
(83, 'Hull Outfitting', 'Fixed Local Application System', 'Water Tank Capacity', 'text'),
(84, 'Hull Outfitting', 'Fixed Local Application System', 'Independent Tank or Common tank', 'text'),
(85, 'Hull Outfitting', 'Fire Extinguisher System', 'Function  test for signal bell', 'text'),
(86, 'Hull Outfitting', 'Fire Extinguisher System', 'Test for pressure pipe', 'text'),
(87, 'Hull Outfitting', 'Fire Extinguisher System', 'Test of air blow on CO2', 'text'),
(88, 'Hull Outfitting', 'Fire Extinguisher System', 'Lamp control test', 'text'),
(89, 'Hull Outfitting', 'Fire Extinguisher System', 'Cylinder valve and main stop valve engine room/pump room', 'text'),
(90, 'Hull Outfitting', 'Fire Extinguisher System', 'Alarm test', 'text'),
(91, 'Hull Outfitting', 'Fire Extinguisher System', 'Instruction procedure', 'text'),
(92, 'Hull Outfitting', 'Accommodation Ladder', 'Function Test', 'text'),
(93, 'Hull Outfitting', 'Accommodation Ladder', 'Speed Test', 'text'),
(94, 'Hull Outfitting', 'Accommodation Ladder', 'Load Test', 'text'),
(95, 'Hull Outfitting', 'Accommodation Ladder', 'Air Lamp Test', 'text'),
(96, 'Hull Outfitting', 'Mooring Winch', 'Safety Device Test (Hydro Oil Low Level, Over load)', 'text'),
(97, 'Hull Outfitting', 'Mooring Winch', 'Operation Check ( Start/stop, Handle, Emergency Stop)', 'text'),
(98, 'Hull Outfitting', 'Mooring Winch', 'Speed Test (Mooring, Windlass)', 'text'),
(99, 'Hull Outfitting', 'Deck Foam', 'Suction Pressure', 'number'),
(100, 'Hull Outfitting', 'Deck Foam', 'Discharge Pressure', 'number'),
(101, 'Hull Outfitting', 'Remote Control Valve System', 'Safety Device Test ', 'text'),
(102, 'Hull Outfitting', 'Remote Control Valve System', 'Standard date', 'number'),
(103, 'Hull Outfitting', 'Mooring (Dock Trial)', 'Function TEst', 'text'),
(104, 'Hull Outfitting', 'Mooring (Dock Trial)', 'Starting Main Engine', 'text'),
(105, 'Hull Outfitting', 'Mooring (Dock Trial)', 'Main Engine RPM', 'number'),
(106, 'Hull Outfitting', 'Mooring (Dock Trial)', 'RPM Indicator', 'text'),
(107, 'Hull Outfitting', 'Navigation & Signal Light', 'Function TEst', 'text'),
(108, 'Hull Outfitting', 'Navigation & Signal Light', 'Light Angle', 'text'),
(109, 'Hull Outfitting', 'Fire Detecting & General Alarm System ', 'Function Test', 'text'),
(110, 'Hull Outfitting', 'Hydrocarbon Gas Monitoring System', 'Function Test', 'text'),
(111, 'Hull Outfitting', 'Hydrocarbon Gas Monitoring System', 'Percentage of Gas', 'number'),
(112, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Traveling Speed', 'text'),
(113, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Traversing Speed', 'text'),
(114, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Hoisting Speed', 'text'),
(115, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Lowering Speed', 'text'),
(116, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Emergency Stop', 'text'),
(117, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Limit Switch', 'text'),
(118, 'Hull Outfitting', 'Main Engine Over Head Crane System', 'Load Test 3750 kgs', 'text'),
(119, 'Machinery Outfitting', 'GS & Fire Pump', 'Function Test', 'text'),
(120, 'Machinery Outfitting', 'Main Air Compressor & Emergency Air Compressor', 'Function TEst', 'text'),
(121, 'Machinery Outfitting', 'Main Air Compressor & Emergency Air Compressor', 'Safety Device Test', 'text'),
(122, 'Machinery Outfitting', 'Main Air Compressor & Emergency Air Compressor', 'Safety Valve Test', 'text'),
(123, 'Machinery Outfitting', 'Main Air Compressor & Emergency Air Compressor', 'Auto Start and Stop', 'text'),
(124, 'Machinery Outfitting', 'Main Air Compressor & Emergency Air Compressor', 'Charging Test', 'text'),
(125, 'Machinery Outfitting', 'Emergency Fire Pump', 'Function TEst', 'text'),
(126, 'Machinery Outfitting', 'Homogenizer Pump', 'Fuel Oil Temperature', 'number'),
(127, 'Machinery Outfitting', 'Homogenizer Pump', 'Fuel Oil Pressure', 'number'),
(128, 'Machinery Outfitting', 'Homogenizer Pump', 'Elect. Load', 'number'),
(129, 'Machinery Outfitting', 'LO & FO Purifier', 'Measurement date', 'date'),
(130, 'Machinery Outfitting', 'LO & FO Purifier', 'Flow', 'text'),
(131, 'Machinery Outfitting', 'LO & FO Purifier', 'Temperature Controller', 'number'),
(132, 'Machinery Outfitting', 'LO & FO Purifier', 'Pressure', 'number'),
(133, 'Machinery Outfitting', 'Oily Water Separator', 'Oil Content', 'number'),
(134, 'Machinery Outfitting', 'Incinerator', 'Function Test', 'text'),
(135, 'Machinery Outfitting', 'Incinerator', 'Safety Device', 'text'),
(136, 'Machinery Outfitting', 'Mechanical Fan in Engine Room', 'Function Test', 'text'),
(137, 'Machinery Outfitting', 'Mechanical Fan in Engine Room', 'velocity', 'number'),
(138, 'Machinery Outfitting', 'Mechanical Fan in Engine Room', 'Air Volume', 'number'),
(139, 'Machinery Outfitting', 'Diesel Generator', 'Load Test ', 'text'),
(140, 'Machinery Outfitting', 'Diesel Generator', 'Governor Test', 'text'),
(141, 'Machinery Outfitting', 'Diesel Generator', 'Crank Shaft Deflection', 'text'),
(142, 'Machinery Outfitting', 'Emergency Diesel Generator', 'Load Test', 'text'),
(143, 'Machinery Outfitting', 'Emergency Diesel Generator', 'Protective Device Test', 'text'),
(144, 'Machinery Outfitting', 'Thermal Oil Heater', 'Alarm and Setpoint', 'text'),
(145, 'Machinery Outfitting', 'Distribution Board', 'Function test', 'text'),
(146, 'Electric Outfitting', 'Insulation Resistance', 'Megger Test', 'text'),
(147, 'Electric Outfitting', 'Generator On Board', 'Function Test', 'text'),
(148, 'Electric Outfitting', 'Generator On Board', 'Voltage Regulation and Governor Test', 'text'),
(149, 'Electric Outfitting', 'Generator On Board', 'Protective Device test', 'text'),
(150, 'Electric Outfitting', 'Generator On Board', 'Emergency Power Supply System Test', 'text'),
(151, 'Electric Outfitting', 'Generator On Board', 'Other Locking System', 'text'),
(152, 'Electric Outfitting', 'Main & Emergency Switch Board', 'Function Test', 'text'),
(153, 'Electric Outfitting', 'Main Lighting System', 'Function Test', 'text'),
(154, 'Electric Outfitting', 'Emergency Lighting System', 'Function Test', 'text');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_delivery`
--

CREATE TABLE IF NOT EXISTS `komponen_delivery` (
  `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokumen` varchar(100) NOT NULL,
  PRIMARY KEY (`id_dokumen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `komponen_delivery`
--

INSERT INTO `komponen_delivery` (`id_dokumen`, `nama_dokumen`) VALUES
(1, 'Builder Certificate'),
(2, 'International Tonnage Certificate (1969)'),
(3, 'Interim Safety Management Certificate'),
(4, 'Short Term International Ship Security Certificate'),
(5, 'Rekomendasi Ijin Stasiun Radio Kapal Laut'),
(6, 'Maritime Mobile Service Identities (MMSI)'),
(7, 'Call Sign'),
(8, 'Inmarsat C'),
(9, 'Nationality Certificate'),
(10, 'Cargo Ship Safety Construction Certificate'),
(11, 'Cargo Ship Safety Equipment Certificate'),
(12, 'Cargo Ship Safety Radion Certificate'),
(13, 'International Oil Pollution Prevention Certificate'),
(14, 'Ship Sanitation Control Exemption Certificate'),
(15, 'Ship`s Certificate Medicine'),
(16, 'International Air Pollution Prevention Certificate'),
(17, 'International Sewage Pollution Prevention Certificate'),
(18, 'Deviasi Compass Magnit Certificate'),
(19, 'Deadweight Certificate'),
(20, 'Provisional Certificate of Classification'),
(21, 'International Load Line Certificate (1966)'),
(22, 'Minimum Safe Manning Document'),
(23, 'Pengoperasian Kapal Tramper di Dalam Negeri'),
(24, 'Provisional Certificate of Installations Registration'),
(25, 'Statement of Compliance'),
(26, 'Onboard Computer for Stability Calculation'),
(27, 'Loading Instrument'),
(28, 'Free Board Assignment'),
(29, 'Register of Ship`s Lifting Appliances & Items of Loose Gear'),
(30, 'Provisional Classification Certificate'),
(31, 'Provisional International Load Line Certificate');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_erection`
--

CREATE TABLE IF NOT EXISTS `komponen_erection` (
  `id_itemer` int(11) NOT NULL AUTO_INCREMENT,
  `proses_erection` varchar(100) DEFAULT NULL,
  `item_erection` varchar(100) DEFAULT NULL,
  `tipe_dataer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_itemer`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `komponen_erection`
--

INSERT INTO `komponen_erection` (`id_itemer`, `proses_erection`, `item_erection`, `tipe_dataer`) VALUES
(1, 'Fitting', 'Kesalahan Pemasangan', 'text'),
(2, 'Fitting', 'Belum Terpasang', 'text'),
(3, 'Fitting', 'Ketidaklurusan', 'number'),
(4, 'Fitting', 'Celah/Gap', 'number'),
(5, 'Welding', 'Kesesuaian WPS', 'text'),
(6, 'Welding', 'Crack', 'number'),
(7, 'Welding', 'Kesalahan Pakai elektrode', 'text'),
(8, 'Welding', 'Belum Dilas', 'text'),
(9, 'Welding', 'Panjang kaki las', 'number'),
(10, 'Welding', 'Bentuk hasil las', 'text'),
(11, 'Welding', 'Cacat bekas stopper', 'text'),
(12, 'Welding', 'Spatter', 'number'),
(13, 'Welding', 'Porosity', 'number'),
(14, 'Deformasi', 'Kerataan Pelat antara gading - gading', 'number'),
(15, 'Deformasi', 'Kerataan Pelat di tepi bebas', 'number'),
(16, 'NDT', 'Ultrasonic Test', 'text'),
(17, 'NDT', 'Radiography Test', 'text'),
(18, 'Air Pressure test of Tank and Block Joint', 'Vacuum test', 'text'),
(19, 'Air Pressure test of Tank and Block Joint', 'Press test', 'text'),
(20, 'Air Pressure test of Tank and Block Joint', 'Hose Test', 'text'),
(21, 'Air Pressure test of Tank and Block Joint', 'Hydro Test', 'text'),
(22, 'Painting', 'Paint Maker', 'text'),
(23, 'Painting', 'Relative Humidity', 'number'),
(24, 'Painting', 'Steel Temperature', 'number'),
(25, 'Painting', 'Air Temperature', 'number'),
(26, 'Painting', 'Product name', 'text'),
(27, 'Painting', 'Colour', 'text'),
(28, 'Painting', 'Thinner', 'text'),
(29, 'Painting', 'Time (Start/Finish)', 'number'),
(30, 'Painting', 'Dew Point', 'number'),
(31, 'Painting', 'Wet Film Thikness', 'number'),
(32, 'Painting', 'Dry Film Thickness', 'number'),
(33, 'Painting', 'Aplication Methode', 'text'),
(34, 'Painting', 'Surface Treatment Methode', 'text');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_fabrikasi`
--

CREATE TABLE IF NOT EXISTS `komponen_fabrikasi` (
  `id_kompfabrikasi` int(11) NOT NULL AUTO_INCREMENT,
  `bagian_fabrikasi` varchar(100) DEFAULT NULL,
  `proses_fabrikasi` varchar(100) DEFAULT NULL,
  `item_fabrikasi` varchar(100) DEFAULT NULL,
  `tipe_datafabrikasi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kompfabrikasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='komponen_fabrikasi' AUTO_INCREMENT=76 ;

--
-- Dumping data untuk tabel `komponen_fabrikasi`
--

INSERT INTO `komponen_fabrikasi` (`id_kompfabrikasi`, `bagian_fabrikasi`, `proses_fabrikasi`, `item_fabrikasi`, `tipe_datafabrikasi`) VALUES
(1, 'Hull Construction', 'Marking', 'sudut penjuru dibanding dengan yang sebenarnya', 'text'),
(2, 'Hull Construction', 'Marking', 'Sudut penjuru dibanding dengan yang sebenarnya', 'text'),
(3, 'Hull Construction', 'Marking', 'Lengkungan', 'text'),
(4, 'Hull Construction', 'Marking', 'Penempatan komponen dan tanda untuk pemasangan dibanding yang sebenarnya', 'text'),
(5, 'Hull Construction', 'Marking', 'Penandaan block dibanding yang seharusnya', 'text'),
(6, 'Hull Construction', 'Marking', 'Penempatan komponen untuk pemasangan pada block', 'text'),
(7, 'Hull Construction', 'Bending', 'Ketepatan Posisi (Straight Line)', 'text'),
(8, 'Hull Construction', 'Bending', 'Ketepatan Posisi Joint', 'text'),
(9, 'Hull Construction', 'Bending', 'Gap', 'number '),
(10, 'Hull Construction', 'Bending', 'Proses', 'text'),
(11, 'Hull Construction', 'Cutting', 'Kekasaran (Tepi Bebas)', 'number '),
(12, 'Hull Construction', 'Cutting', 'Kekasaran (Alur Las)', 'number '),
(13, 'Hull Construction', 'Cutting', 'Takik (Tepi Bebas)', 'text'),
(14, 'Hull Construction', 'Cutting', 'Takik ( Alur Las)', 'text'),
(15, 'Hull Construction', 'Deformasi', 'Distorsi Pelat dan Profil', 'number'),
(16, 'Hull Construction', 'Deformasi', 'Distorsi pada sambungan pelat akibat pengelasan', 'number'),
(17, 'Hull Construction', 'Fitting', 'Kesalahan Pemasangan', 'text'),
(18, 'Hull Construction', 'Fitting', 'Belum Terpasang', 'text'),
(19, 'Hull Construction', 'Fitting', 'Ketidaklurusan', 'number'),
(20, 'Hull Construction', 'Fitting', 'Celah/Gap', 'number'),
(21, 'Hull Construction', 'Shop Primer Painting', 'Paint maker', 'text'),
(22, 'Hull Construction', 'Shop Primer Painting', 'Colour', 'text'),
(23, 'Hull Construction', 'Shop Primer Painting', 'Product name', 'text'),
(24, 'Hull Construction', 'Shop Primer Painting', 'Aplication Methode', 'text'),
(25, 'Hull Construction', 'Shop Primer Painting', 'Cleaning Standard', 'text'),
(26, 'Hull Construction', 'Shop Primer Painting', 'Blasting/Roughness', 'text'),
(27, 'Hull Construction', 'Shop Primer Painting', 'Relative Humidity (RH)', 'number'),
(28, 'Hull Construction', 'Shop Primer Painting', 'Steel Temperature', 'number'),
(29, 'Hull Construction', 'Shop Primer Painting', 'Grade', 'text'),
(30, 'Hull Construction', 'Shop Primer Painting', 'Wet Temp', 'number'),
(31, 'Hull Construction', 'Shop Primer Painting', 'Dry Temp', 'number'),
(32, 'Machinery Outfitting', 'Fitting', 'Kesalahan Pemasangan', 'text'),
(33, 'Machinery Outfitting', 'Fitting', 'Belum Terpasang', 'text'),
(34, 'Machinery Outfitting', 'Fitting', 'Ketidaklurusan', 'number'),
(35, 'Machinery Outfitting', 'Fitting', 'Celah/Gap', 'number'),
(36, 'Machinery Outfitting', 'Marking', 'Bentuk dan Ukuran dibanding dengan yang sebenarnya', 'text'),
(37, 'Machinery Outfitting', 'Marking', 'Sudut penjuru dibanding dengan yang sebenarnya', 'text'),
(38, 'Machinery Outfitting', 'Marking', 'Lengkungan', 'text'),
(39, 'Machinery Outfitting', 'Marking', 'Penempatan komponen dan tanda untuk pemasangan dibanding yang sebenarnya', 'text'),
(40, 'Machinery Outfitting', 'Marking', 'Penempatan komponen untuk pemasangan pada block', 'text'),
(41, 'Machinery Outfitting', 'Bending', 'Ketepatan Posisi (Straight Line)', 'text'),
(42, 'Machinery Outfitting', 'Bending', 'Ketepatan Posisi Joint', 'text'),
(43, 'Machinery Outfitting', 'Bending', 'Proses', 'text'),
(44, 'Machinery Outfitting', 'Bending', 'Gap', 'number'),
(45, 'Machinery Outfitting', 'Cutting', 'Kekasaran (Tepi Bebas dan Alur Las)', 'number'),
(46, 'Machinery Outfitting', 'Cutting', 'Takik (Tepi Bebas dan Alur Las)', 'text'),
(47, 'Machinery Outfitting', 'Cutting', 'Kondisi ', 'text'),
(48, 'Machinery Outfitting', 'Welding', 'Kesesuaian WPS', 'text'),
(49, 'Machinery Outfitting', 'Welding', 'Crack', 'number'),
(50, 'Machinery Outfitting', 'Welding', 'Kesalahan Pakai elektrode', 'text'),
(51, 'Machinery Outfitting', 'Welding', 'Belum Dilas', 'text'),
(52, 'Machinery Outfitting', 'Welding', 'Panjang kaki las', 'number'),
(53, 'Machinery Outfitting', 'Welding', 'Bentuk hasil las', 'text'),
(54, 'Machinery Outfitting', 'Welding', 'Cacat bekas stopper', 'text'),
(55, 'Machinery Outfitting', 'Welding', 'Spatter', 'number'),
(56, 'Machinery Outfitting', 'Welding', 'Porosity', 'number'),
(57, 'Machinery Outfitting', 'Deformasi', 'Distorsi Pelat', 'number'),
(58, 'Machinery Outfitting', 'NDT', 'Ultrasonic Test', 'number'),
(59, 'Machinery Outfitting', 'NDT', 'Radiography Test', 'number'),
(60, 'Hull Outfitting', 'Welding', 'Kesesuaian WPS', 'text'),
(61, 'Hull Outfitting', 'Welding', 'Crack', 'number'),
(62, 'Hull Outfitting', 'Welding', 'Kesalahan Pakai elektrode', 'text'),
(63, 'Hull Outfitting', 'Welding', 'Belum Dilas', 'text'),
(64, 'Hull Outfitting', 'Welding', 'Panjang kaki las', 'number'),
(65, 'Hull Outfitting', 'Welding', 'Bentuk hasil las', 'text'),
(66, 'Hull Outfitting', 'Welding', 'Cacat bekas stopper', 'text'),
(67, 'Hull Outfitting', 'Welding', 'Spatter', 'number'),
(68, 'Hull Outfitting', 'Welding', 'Porosity', 'number'),
(69, 'Hull Outfitting', 'Deformasi', 'Distorsi Pipa', 'number'),
(70, 'Hull Outfitting', 'Hydro Test', 'Pressure', 'number'),
(71, 'Hull Outfitting', 'Hydro Test', 'Kebocoran', 'text'),
(72, 'Hull Outfitting', 'Fitting Flange', 'Kesesuaian flange dengan pipa', 'number'),
(73, 'Hull Outfitting', 'Fitting Flange', 'Bentuk Las', 'text'),
(74, 'Hull Outfitting', 'Visual Check', 'Bentuk', 'text'),
(75, 'Hull Outfitting', 'Visual Check', 'Tingkat Kekaratan Pipa', 'number');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_idenmat`
--

CREATE TABLE IF NOT EXISTS `komponen_idenmat` (
  `id_komponen` int(11) NOT NULL AUTO_INCREMENT,
  `bagian` varchar(50) DEFAULT NULL,
  `jenis` varchar(50) DEFAULT NULL,
  `nama_komp` varchar(100) DEFAULT NULL,
  `item_kualitas` varchar(50) DEFAULT NULL,
  `tipe_data` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_komponen`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=211 ;

--
-- Dumping data untuk tabel `komponen_idenmat`
--

INSERT INTO `komponen_idenmat` (`id_komponen`, `bagian`, `jenis`, `nama_komp`, `item_kualitas`, `tipe_data`) VALUES
(1, 'Hull Construction', 'Pipa', 'none', 'Ukuran Pipa', 'text'),
(2, 'Hull Construction', 'Pipa', 'none', 'Visual Check', 'text'),
(3, 'Hull Construction', 'Pipa', 'none', 'Quantity', 'number'),
(4, 'Hull Construction', 'Pipa', 'none', 'Grade/Type', 'text'),
(5, 'Hull Construction', 'Pipa', 'none', 'Nomor Sertifikat', 'text'),
(6, 'Hull Construction', 'Pipa', 'none', 'Tanggal Produksi', 'date'),
(7, 'Hull Construction', 'Pelat', 'none', 'Ukuran Pelat', 'text'),
(8, 'Hull Construction', 'Pelat', 'none', 'Visual Check', 'text'),
(9, 'Hull Construction', 'Pelat', 'none', 'Quantity', 'number'),
(10, 'Hull Construction', 'Pelat', 'none', 'Grade/Type', 'text'),
(11, 'Hull Construction', 'Pelat', 'none', 'Nomor Sertifikat', 'text'),
(12, 'Hull Construction', 'Pelat', 'none', 'Tanggal Produksi', 'date'),
(13, 'Hull Construction', 'Profil', 'none', 'Ukuran Profil', 'text'),
(14, 'Hull Construction', 'Profil', 'none', 'Visual Check', 'text'),
(15, 'Hull Construction', 'Profil', 'none', 'Quantity', 'number'),
(16, 'Hull Construction', 'Profil', 'none', 'Grade/Type', 'text'),
(17, 'Hull Construction', 'Profil', 'none', 'Nomor Sertifikat', 'text'),
(18, 'Hull Construction', 'Profil', 'none', 'Tanggal Produksi', 'date'),
(19, 'Machinery Outfitting', 'none', 'Stern Tube Bushing', 'Visual Check', 'text'),
(20, 'Machinery Outfitting', 'none', 'Fwd Stern Tube Seal', 'Quantity', 'number'),
(21, 'Machinery Outfitting', 'none', 'Aft Stern Tube Seal', 'Grade/Type', 'text'),
(22, 'Machinery Outfitting', 'none', 'After Boss Casting', 'Nomor Sertifikat', 'text'),
(23, 'Machinery Outfitting', 'none', 'Fore Boss Casting', 'Tanggal Produksi', 'date'),
(24, 'Machinery Outfitting', 'none', 'Propeller ', 'Visual Check', 'text'),
(25, 'Machinery Outfitting', 'none', 'Shaft Propeller', 'Quantity', 'number'),
(26, 'Machinery Outfitting', 'none', 'Intermedite Shaft Propeller', 'Grade/Type', 'text'),
(27, 'Machinery Outfitting', 'none', 'Intermedite Shaft Bearing', 'Nomor Sertifikat', 'text'),
(28, 'Machinery Outfitting', 'none', 'Main Engine', 'Tanggal Produksi', 'date'),
(29, 'Machinery Outfitting', 'none', 'Main Diesel Generator', 'Visual Check', 'text'),
(30, 'Machinery Outfitting', 'none', 'Main Air Compressor', 'Quantity', 'number'),
(31, 'Machinery Outfitting', 'none', 'Emergency Air Compressor', 'Grade/Type', 'text'),
(32, 'Machinery Outfitting', 'none', 'Main Air Reservoir', 'Nomor Sertifikat', 'text'),
(33, 'Machinery Outfitting', 'none', 'Aux Air Receiver ', 'Tanggal Produksi', 'date'),
(34, 'Machinery Outfitting', 'none', 'Miniralizer', 'Visual Check', 'text'),
(35, 'Machinery Outfitting', 'none', 'M/E Jacket Water Preheather', 'Quantity', 'number'),
(36, 'Machinery Outfitting', 'none', 'Air Dryer', 'Grade/Type', 'text'),
(37, 'Machinery Outfitting', 'none', 'Thermal Oil', 'Nomor Sertifikat', 'text'),
(38, 'Machinery Outfitting', 'none', 'Thermal Oil Exp Tank', 'Tanggal Produksi', 'date'),
(39, 'Machinery Outfitting', 'none', 'Sterilizer', 'Visual Check', 'text'),
(40, 'Machinery Outfitting', 'none', ' Incenerator', 'Quantity', 'number'),
(41, 'Machinery Outfitting', 'none', 'Dg Mdo Pump', 'Grade/Type', 'text'),
(42, 'Machinery Outfitting', 'none', 'Thermal Oil Pre Heather', 'Nomor Sertifikat', 'text'),
(43, 'Machinery Outfitting', 'none', 'Themal Oil Circ Pump', 'Tanggal Produksi', 'date'),
(44, 'Machinery Outfitting', 'none', 'Thermal Oil Economizer', 'Visual Check', 'text'),
(45, 'Machinery Outfitting', 'none', 'Bilge Pump', 'Quantity', 'number'),
(46, 'Machinery Outfitting', 'none', 'Central Cooling Fw Pump ', 'Grade/Type', 'text'),
(47, 'Machinery Outfitting', 'none', 'Central Main Cooling Fw Pump', 'Nomor Sertifikat', 'text'),
(48, 'Machinery Outfitting', 'none', 'Me Jacket Fw Ht Cooling Pump', 'Tanggal Produksi', 'date'),
(49, 'Machinery Outfitting', 'none', 'Fw Generator', 'Visual Check', 'text'),
(50, 'Machinery Outfitting', 'none', 'Sewage Treatment', 'Quantity', 'number'),
(51, 'Machinery Outfitting', 'none', 'Fresh Water Pre Heather Pump', 'Grade/Type', 'text'),
(52, 'Machinery Outfitting', 'none', 'Homogenizer', 'Nomor Sertifikat', 'text'),
(53, 'Machinery Outfitting', 'none', 'Oily Bilge Separator Pump', 'Tanggal Produksi', 'date'),
(54, 'Machinery Outfitting', 'none', 'Central Fw Cooler', 'Visual Check', 'text'),
(55, 'Machinery Outfitting', 'none', 'Central Cooling Sw Pump', 'Quantity', 'number'),
(56, 'Machinery Outfitting', 'none', 'Auto Back Flush Filter', 'Grade/Type', 'text'),
(57, 'Machinery Outfitting', 'none', 'Air Cool Clean Pump', 'Nomor Sertifikat', 'text'),
(58, 'Machinery Outfitting', 'none', 'Bilge Pump', 'Tanggal Produksi', 'date'),
(59, 'Machinery Outfitting', 'none', 'Me Jacket Cooler', 'Visual Check', 'text'),
(60, 'Machinery Outfitting', 'none', 'Hfo Trans Pump For Thermal Oil', 'Quantity', 'number'),
(61, 'Machinery Outfitting', 'none', 'Mdo Trans Pump', 'Grade/Type', 'text'),
(62, 'Machinery Outfitting', 'none', 'Lo Trans Pump', 'Nomor Sertifikat', 'text'),
(63, 'Machinery Outfitting', 'none', 'Sludge Pump', 'Tanggal Produksi', 'date'),
(64, 'Machinery Outfitting', 'none', 'Main Lo Pump', 'Visual Check', 'text'),
(65, 'Machinery Outfitting', 'none', 'Main Lo Cooler', 'Quantity', 'number'),
(66, 'Machinery Outfitting', 'none', 'Aux Cool Sw Pump', 'Grade/Type', 'text'),
(67, 'Machinery Outfitting', 'none', 'Main Cool Sw Pump', 'Nomor Sertifikat', 'text'),
(68, 'Machinery Outfitting', 'none', 'Cargo Pump', 'Tanggal Produksi', 'date'),
(69, 'Machinery Outfitting', 'none', 'Cargo Stripping Pump ', 'Visual Check', 'text'),
(70, 'Machinery Outfitting', 'none', 'Tank Cleaning Pump', 'Quantity', 'number'),
(71, 'Machinery Outfitting', 'none', 'Fire & Gs Pump', 'Grade/Type', 'text'),
(72, 'Machinery Outfitting', 'none', 'Water Ballast Pump', 'Nomor Sertifikat', 'text'),
(73, 'Machinery Outfitting', 'none', 'Fw Pump Hydrophore', 'Tanggal Produksi', 'date'),
(74, 'Machinery Outfitting', 'none', 'Thermal Echo Oil Circ Pump', 'Visual Check', 'text'),
(75, 'Hull Outfitting', 'none', 'Rudder blade', 'Visual Check', 'text'),
(76, 'Hull Outfitting', 'none', 'Rudder Stock + Rudder Blade', 'Quantity', 'number'),
(77, 'Hull Outfitting', 'none', 'Rudder Pintie + Rudder Blade', 'Grade/Type', 'text'),
(78, 'Hull Outfitting', 'none', 'Rudder Horn + Shaft Propeller', 'Nomor Sertifikat', 'text'),
(79, 'Hull Outfitting', 'none', 'Bush for Rudder Stock', 'Tanggal Produksi', 'date'),
(80, 'Hull Outfitting', 'none', 'Rudder Pintle & Nut', 'Visual Check', 'text'),
(81, 'Hull Outfitting', 'none', 'Steering Gear', 'Quantity', 'number'),
(82, 'Hull Outfitting', 'none', 'Windlass & Mooring Winch', 'Grade/Type', 'text'),
(83, 'Hull Outfitting', 'none', 'Mooring & Equipmnet', 'Nomor Sertifikat', 'text'),
(84, 'Hull Outfitting', 'none', 'Anchor & Chain Cable', 'Tanggal Produksi', 'date'),
(85, 'Hull Outfitting', 'none', 'Chain Stoper', 'Visual Check', 'text'),
(86, 'Hull Outfitting', 'none', 'Emergency Towing Fitting', 'Quantity', 'number'),
(87, 'Hull Outfitting', 'none', 'Cargo House', 'Grade/Type', 'text'),
(88, 'Hull Outfitting', 'none', 'Life Boat Davit', 'Nomor Sertifikat', 'text'),
(89, 'Hull Outfitting', 'none', 'Rescue & Life Handling Davit', 'Tanggal Produksi', 'date'),
(90, 'Hull Outfitting', 'none', 'Life Boat', 'Visual Check', 'text'),
(91, 'Hull Outfitting', 'none', 'Rescue Boat', 'Quantity', 'number'),
(92, 'Hull Outfitting', 'none', 'Liferaft', 'Grade/Type', 'text'),
(93, 'Hull Outfitting', 'none', 'Lifebuoy', 'Nomor Sertifikat', 'text'),
(94, 'Hull Outfitting', 'none', 'Life Jacket', 'Tanggal Produksi', 'date'),
(95, 'Hull Outfitting', 'none', 'Fire Fighting System', 'Visual Check', 'text'),
(96, 'Hull Outfitting', 'none', 'Handrails', 'Quantity', 'number'),
(97, 'Hull Outfitting', 'none', 'Radar Mast', 'Grade/Type', 'text'),
(98, 'Hull Outfitting', 'none', 'Fore Mast', 'Nomor Sertifikat', 'text'),
(99, 'Hull Outfitting', 'none', 'Ventilation Duct', 'Tanggal Produksi', 'date'),
(100, 'Hull Outfitting', 'none', 'Mechanical Ventillation for P/R', 'Visual Check', 'text'),
(101, 'Hull Outfitting', 'none', 'Natural Ventillation', 'Quantity', 'number'),
(102, 'Hull Outfitting', 'none', 'CO2 System', 'Grade/Type', 'text'),
(103, 'Hull Outfitting', 'none', 'Emergency Diesel Generator', 'Nomor Sertifikat', 'text'),
(104, 'Hull Outfitting', 'none', 'Clear View Screen, Wipers, Heater', 'Tanggal Produksi', 'date'),
(105, 'Hull Outfitting', 'none', 'Insulation', 'Visual Check', 'text'),
(106, 'Hull Outfitting', 'none', 'ceiling & Lining', 'Quantity', 'number'),
(107, 'Hull Outfitting', 'none', 'Door and Fitting (Fire Proof Door)', 'Grade/Type', 'text'),
(108, 'Hull Outfitting', 'none', 'Windows & Side Scuttle', 'Nomor Sertifikat', 'text'),
(109, 'Hull Outfitting', 'none', 'Deck Covering', 'Tanggal Produksi', 'date'),
(110, 'Hull Outfitting', 'none', 'Furniture', 'Visual Check', 'text'),
(111, 'Hull Outfitting', 'none', 'Accessories Room', 'Quantity', 'number'),
(112, 'Hull Outfitting', 'none', 'Galley Equipments', 'Grade/Type', 'text'),
(113, 'Hull Outfitting', 'none', 'Lavatory & Sanitary Equipment', 'Nomor Sertifikat', 'text'),
(114, 'Hull Outfitting', 'none', 'Laundry Equipment', 'Tanggal Produksi', 'date'),
(115, 'Hull Outfitting', 'none', 'Refrigerated Provision Store', 'Visual Check', 'text'),
(116, 'Hull Outfitting', 'none', 'Air Conditioning System', 'Quantity', 'number'),
(117, 'Hull Outfitting', 'none', 'Man Hole', 'Grade/Type', 'text'),
(118, 'Hull Outfitting', 'none', 'Bottom plug', 'Nomor Sertifikat', 'text'),
(119, 'Hull Outfitting', 'none', 'Accomodation ladder', 'Tanggal Produksi', 'date'),
(120, 'Hull Outfitting', 'none', 'Pilot Ladder', 'Visual Check', 'text'),
(121, 'Hull Outfitting', 'none', 'Embarcation Ladder', 'Quantity', 'number'),
(122, 'Hull Outfitting', 'none', 'Life raft boarding ladder', 'Grade/Type', 'text'),
(123, 'Hull Outfitting', 'none', 'Ladder for tanks, mast, cargo hold', 'Nomor Sertifikat', 'text'),
(124, 'Hull Outfitting', 'none', 'Steel Door', 'Tanggal Produksi', 'date'),
(125, 'Hull Outfitting', 'none', 'Small Hatch', 'Visual Check', 'text'),
(126, 'Hull Outfitting', 'none', 'Cargo hold cleaning system', 'Quantity', 'number'),
(127, 'Hull Outfitting', 'none', 'Fuel & Diesel Oil System', 'Grade/Type', 'text'),
(128, 'Hull Outfitting', 'none', 'Air Pipe System', 'Nomor Sertifikat', 'text'),
(129, 'Hull Outfitting', 'none', 'Weather Deck System', 'Tanggal Produksi', 'date'),
(130, 'Hull Outfitting', 'none', 'Drinking & Fresh Water System', 'Visual Check', 'text'),
(131, 'Hull Outfitting', 'none', 'Hot Water System', 'Quantity', 'number'),
(132, 'Hull Outfitting', 'none', 'Soil System', 'Grade/Type', 'text'),
(133, 'Hull Outfitting', 'none', 'Deck Scuper System', 'Nomor Sertifikat', 'text'),
(134, 'Hull Outfitting', 'none', 'Drainage System', 'Tanggal Produksi', 'date'),
(135, 'Hull Outfitting', 'none', 'Fire & Wash Deck System', 'Visual Check', 'text'),
(136, 'Hull Outfitting', 'none', 'Heating Coil System', 'Quantity', 'number'),
(137, 'Hull Outfitting', 'none', 'Compressor Air Service', 'Grade/Type', 'text'),
(138, 'Hull Outfitting', 'none', 'Refrigerating Line', 'Nomor Sertifikat', 'text'),
(139, 'Hull Outfitting', 'none', 'CO2 Pipe Line System', 'Tanggal Produksi', 'date'),
(140, 'Hull Outfitting', 'none', 'Tank Level System', 'Visual Check', 'text'),
(141, 'Hull Outfitting', 'none', 'Sounding Pipe', 'Quantity', 'number'),
(142, 'Hull Outfitting', 'none', 'Bilge System', 'Grade/Type', 'text'),
(143, 'Hull Outfitting', 'none', 'Ballast System', 'Nomor Sertifikat', 'text'),
(144, 'Hull Outfitting', 'none', 'Hydraulic Line for Deck Machinery', 'Tanggal Produksi', 'date'),
(145, 'Hull Outfitting', 'none', 'Hydraulic Line for Remote Control Valve', 'Visual Check', 'text'),
(146, 'Hull Outfitting', 'none', 'Cargo Pipe Line System', 'Quantity', 'number'),
(147, 'Hull Outfitting', 'none', 'Inert Gas System', 'Grade/Type', 'text'),
(148, 'Hull Outfitting', 'none', 'Tank Cleaning System', 'Nomor Sertifikat', 'text'),
(149, 'Hull Outfitting', 'none', 'Protect Cable Pipe', 'Tanggal Produksi', 'date'),
(150, 'Hull Outfitting', 'none', 'Oil Discharge Monitoring', 'Visual Check', 'text'),
(151, 'Hull Outfitting', 'none', 'Over flow Monitoring', 'Quantity', 'number'),
(152, 'Hull Outfitting', 'none', 'Cargo Loading Monitoring', 'Grade/Type', 'text'),
(153, 'Hull Outfitting', 'none', 'Cathodic Protection', 'Nomor Sertifikat', 'text'),
(154, 'Hull Outfitting', 'none', 'General Painting', 'Tanggal Produksi', 'date'),
(155, 'Hull Outfitting', 'none', 'WBT Painting', 'Visual Check', 'text'),
(156, 'Hull Outfitting', 'none', 'COT Painting', 'Quantity', 'number'),
(157, 'Hull Outfitting', 'none', 'Carving Certificate', 'Grade/Type', 'text'),
(158, 'Electric Outfitting', 'none', 'Cable ', 'Visual Check', 'text'),
(159, 'Electric Outfitting', 'none', 'Main Switch Board (MSB)', 'Quantity', 'number'),
(160, 'Electric Outfitting', 'none', 'Emergency Switch Board (EMS)', 'Grade/Type', 'text'),
(161, 'Electric Outfitting', 'none', 'Distribution Board', 'Nomor Sertifikat', 'text'),
(162, 'Electric Outfitting', 'none', 'Transformers 450 / 230 Volt, ', 'Tanggal Produksi', 'date'),
(163, 'Electric Outfitting', 'none', 'Batteries & Battery Charger', 'Visual Check', 'text'),
(164, 'Electric Outfitting', 'none', 'Test Panel in Work Shop', 'Quantity', 'number'),
(165, 'Electric Outfitting', 'none', 'Main Lighting System', 'Grade/Type', 'text'),
(166, 'Electric Outfitting', 'none', '(On Hazardous area only)', 'Nomor Sertifikat', 'text'),
(167, 'Electric Outfitting', 'none', 'Emergency Lighting', 'Tanggal Produksi', 'date'),
(168, 'Electric Outfitting', 'none', 'Navigation & Signal Lighting', 'Visual Check', 'text'),
(169, 'Electric Outfitting', 'none', 'Alarm Monitoring System', 'Quantity', 'number'),
(170, 'Electric Outfitting', 'none', 'Automatic Telephone System', 'Grade/Type', 'text'),
(171, 'Electric Outfitting', 'none', 'Common Battery Telephone', 'Nomor Sertifikat', 'text'),
(172, 'Electric Outfitting', 'none', 'Sound Powered Telephone', 'Tanggal Produksi', 'date'),
(173, 'Electric Outfitting', 'none', 'Public Address/ Talk Back Syst.', 'Visual Check', 'text'),
(174, 'Electric Outfitting', 'none', 'Calling System', 'Quantity', 'number'),
(175, 'Electric Outfitting', 'none', 'General Alarm System', 'Grade/Type', 'text'),
(176, 'Electric Outfitting', 'none', 'Fire Detecting System', 'Nomor Sertifikat', 'text'),
(177, 'Electric Outfitting', 'none', 'CO 2 Release Alarm ', 'Tanggal Produksi', 'date'),
(178, 'Electric Outfitting', 'none', 'Communal Arial System', 'Visual Check', 'text'),
(179, 'Electric Outfitting', 'none', 'Engine Order Telegraph', 'Quantity', 'number'),
(180, 'Electric Outfitting', 'none', 'Shaft Revolution Indicator', 'Grade/Type', 'text'),
(181, 'Electric Outfitting', 'none', 'Rudder Angle Indicator', 'Nomor Sertifikat', 'text'),
(182, 'Electric Outfitting', 'none', 'Steering, Gyro Compass & Auto Pilot', 'Tanggal Produksi', 'date'),
(183, 'Electric Outfitting', 'none', 'Echo Sounder', 'Visual Check', 'text'),
(184, 'Electric Outfitting', 'none', 'Doppler Speed Log', 'Quantity', 'number'),
(185, 'Electric Outfitting', 'none', 'Magnetic Compass', 'Grade/Type', 'text'),
(186, 'Electric Outfitting', 'none', 'DGPS Satellite Navigator', 'Nomor Sertifikat', 'text'),
(187, 'Electric Outfitting', 'none', 'Whistle, Fog gong & Bell Syst.', 'Tanggal Produksi', 'date'),
(188, 'Electric Outfitting', 'none', 'Window Wiper & Clear View Screen', 'Visual Check', 'text'),
(189, 'Electric Outfitting', 'none', 'Anemometer', 'Quantity', 'number'),
(190, 'Electric Outfitting', 'none', 'Weather Facsimile Receiver', 'Grade/Type', 'text'),
(191, 'Electric Outfitting', 'none', 'MF/HF Radio Telephone', 'Nomor Sertifikat', 'text'),
(192, 'Electric Outfitting', 'none', 'V.H.F Two Way Radio Communication', 'Tanggal Produksi', 'date'),
(193, 'Electric Outfitting', 'none', 'V.H.F Radio Telephone', 'Visual Check', 'text'),
(194, 'Electric Outfitting', 'none', 'U.H.F. Transceiver 400 MHz', 'Quantity', 'number'),
(195, 'Electric Outfitting', 'none', 'Radio Beacon ( EPIRB )', 'Grade/Type', 'text'),
(196, 'Electric Outfitting', 'none', 'Search and Rescue Transponders (SARTS)', 'Nomor Sertifikat', 'text'),
(197, 'Electric Outfitting', 'none', 'Navtex Receiver', 'Tanggal Produksi', 'date'),
(198, 'Electric Outfitting', 'none', 'Marine Radars', 'Visual Check', 'text'),
(199, 'Electric Outfitting', 'none', 'Bridge Navigation Watch Alarm System (BNWAS)', 'Quantity', 'number'),
(200, 'Electric Outfitting', 'none', 'VDR (Voyage Data Recorder)', 'Grade/Type', 'text'),
(201, 'Electric Outfitting', 'none', 'AIS (Automatic Indent. Syst.)', 'Nomor Sertifikat', 'text'),
(202, 'Electric Outfitting', 'none', 'Inmarsat  B', 'Tanggal Produksi', 'date'),
(203, 'Electric Outfitting', 'none', 'Inmarsat C', 'Visual Check', 'text'),
(204, 'Electric Outfitting', 'none', 'SSAS (Ship Security Alert Sys)', 'Quantity', 'number'),
(205, 'Electric Outfitting', 'none', 'ECDIS (Electronic Chart Display)', 'Grade/Type', 'text'),
(206, 'Electric Outfitting', 'none', 'LRIT', 'Nomor Sertifikat', 'text'),
(207, 'Electric Outfitting', 'none', 'Refrigerator Chamber Alarm', 'Tanggal Produksi', 'date'),
(208, 'Electric Outfitting', 'none', 'Combustable Gas Detection Alarm', 'Visual Check', 'text'),
(209, 'Electric Outfitting', 'none', 'Electric Clock', 'Quantity', 'number'),
(210, 'Electric Outfitting', 'none', 'Marine Growth Prevention System (MGPS)', 'Grade/Type', 'text');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_launching`
--

CREATE TABLE IF NOT EXISTS `komponen_launching` (
  `id_komplau` int(11) NOT NULL AUTO_INCREMENT,
  `bagian_komplau` varchar(100) DEFAULT NULL,
  `nama_komplau` varchar(100) DEFAULT NULL,
  `item_komplau` varchar(100) DEFAULT NULL,
  `tipe_datalau` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_komplau`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data untuk tabel `komponen_launching`
--

INSERT INTO `komponen_launching` (`id_komplau`, `bagian_komplau`, `nama_komplau`, `item_komplau`, `tipe_datalau`) VALUES
(1, 'Hull Construction', 'Main Structure (Under Water Line)', 'Deformation', 'number'),
(2, 'Hull Construction', 'Main Structure (Under Water Line)', 'Radiography Test', 'text'),
(3, 'Hull Construction', 'Tanks', 'Leakage Test', 'text'),
(4, 'Hull Construction', 'Tanks', 'Vacuum Test', 'text'),
(5, 'Hull Construction', 'Tanks', 'Tank Marking', 'text'),
(6, 'Hull Construction', 'Keel Deflection', 'Measurement & record', 'text'),
(7, 'Hull Construction', 'Draft Mark', 'Measurement', 'number'),
(8, 'Hull Construction', 'Draft Mark', 'Fitting', 'text'),
(9, 'Hull Construction', 'Draft Mark', 'Welding', 'text'),
(10, 'Hull Construction', 'Freeboard', 'Measurement', 'number'),
(11, 'Hull Construction', 'Freeboard', 'Fitting', 'text'),
(12, 'Hull Construction', 'Freeboard', 'Welding', 'text'),
(13, 'Hull Construction', 'Water Line', 'Marking', 'text'),
(14, 'Hull Construction', 'Water Line', 'Welding', 'text'),
(15, 'Hull Construction', 'Main Dimension', 'Measurement & record', 'number'),
(16, 'Machinery Outfitting', 'Over Board Penetration', 'Install Check', 'text'),
(17, 'Machinery Outfitting', 'Over Board Penetration', 'Welding Check', 'text'),
(18, 'Machinery Outfitting', 'Sea Chest', 'Install Check of All penetration & Valves', 'text'),
(19, 'Machinery Outfitting', 'Sea Chest', 'Hose Test', 'text'),
(20, 'Machinery Outfitting', 'Sea Chest', 'Install Check of Anode', 'text'),
(21, 'Machinery Outfitting', 'Sea Chest', 'Install of Grating', 'text'),
(22, 'Machinery Outfitting', 'Sea Chest', 'Ventilation Hole', 'text'),
(23, 'Machinery Outfitting', 'Echo Sounder', 'Fitting ', 'text'),
(24, 'Machinery Outfitting', 'Echo Sounder', 'Welding Check', 'text'),
(25, 'Machinery Outfitting', 'Echo Sounder', 'Hose Test', 'text'),
(26, 'Machinery Outfitting', 'Speed Log', 'Fitting ', 'text'),
(27, 'Machinery Outfitting', 'Speed Log', 'Welding Check', 'text'),
(28, 'Machinery Outfitting', 'Speed Log', 'Hose Test', 'text'),
(29, 'Machinery Outfitting', 'Anode', 'Fitting ', 'text'),
(30, 'Machinery Outfitting', 'Anode', 'Welding Check', 'text'),
(31, 'Hull Outfitting', 'Bottom Plug', 'Fitting', 'text'),
(32, 'Hull Outfitting', 'Bottom Plug', 'Welding ', 'text'),
(33, 'Hull Outfitting', 'Bottom Plug', 'Vacuum Test', 'text'),
(34, 'Hull Outfitting', 'Bollard', 'Fitting', 'text'),
(35, 'Hull Outfitting', 'Bollard', 'Welding ', 'text'),
(36, 'Hull Outfitting', 'Painting Lambung', 'Preparation', 'text'),
(37, 'Hull Outfitting', 'Painting Lambung', 'Final Painting', 'text');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_outfitting`
--

CREATE TABLE IF NOT EXISTS `komponen_outfitting` (
  `id_kompout` int(11) NOT NULL,
  `bagian_kompout` varchar(100) DEFAULT NULL,
  `nama_kompout` varchar(100) DEFAULT NULL,
  `item_kompout` varchar(100) DEFAULT NULL,
  `tipe_dataout` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kompout`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komponen_outfitting`
--

INSERT INTO `komponen_outfitting` (`id_kompout`, `bagian_kompout`, `nama_kompout`, `item_kompout`, `tipe_dataout`) VALUES
(1, 'Machinery Outfitting', 'FWD STERN TUBE SEAL', 'Cleaning Check before poring Loctite', 'text'),
(2, 'Machinery Outfitting', 'FWD STERN TUBE SEAL', 'Alignment Check Sighting Shaft Center Before Cpouring Loctite', 'text'),
(3, 'Machinery Outfitting', 'AFT STERN TUBE SEAL', 'Cleaning Check before poring Loctite', 'text'),
(4, 'Machinery Outfitting', 'AFT STERN TUBE SEAL', 'Alignment Check Sighting Shaft Center Before Cpouring Loctite', 'text'),
(5, 'Machinery Outfitting', 'AFTER BOSS CASTING', 'Pouring Loctite', 'text'),
(6, 'Machinery Outfitting', 'AFTER BOSS CASTING', 'Alignment Check Sighting Shaft Center After pouring Loctite', 'text'),
(7, 'Machinery Outfitting', 'FORE BOSS CASTING', 'Pouring Loctite', 'text'),
(8, 'Machinery Outfitting', 'FORE BOSS CASTING', 'Alignment Check Sighting Shaft Center After pouring Loctite', 'text'),
(9, 'Machinery Outfitting', 'STERN TUBE BUSHING', 'Check of hardnees Barcol Test', 'text'),
(10, 'Machinery Outfitting', 'STERN TUBE BUSHING', 'Cleaning Check of hole bushing Stern tube before insert tail shaft', 'text'),
(11, 'Machinery Outfitting', 'STERN TUBE BUSHING', 'Tighthening nut propeller', 'text'),
(12, 'Machinery Outfitting', 'STERN TUBE BUSHING', 'Tighthening bolts compact seal', 'text'),
(13, 'Machinery Outfitting', 'STERN TUBE BUSHING', 'Wear Down Gauge', 'text'),
(14, 'Machinery Outfitting', 'STERN TUBE BUSHING', 'Fiiling Oil & Leakage Test of  Seal Aft & Seal Fwd', 'text'),
(15, 'Machinery Outfitting', 'PROPELLER', 'Install check', 'text'),
(16, 'Machinery Outfitting', 'PROPELLER', 'Push-up propeller', 'text'),
(17, 'Machinery Outfitting', 'PROPELLER', 'Tighthening nut propeller', 'text'),
(18, 'Machinery Outfitting', 'PROPELLER', 'Tighthening bolts compact seal', 'text'),
(19, 'Machinery Outfitting', 'PROPELLER', 'Install Rope Guard', 'text'),
(20, 'Machinery Outfitting', 'PROPELLER', 'Polishing Propeller Blades', 'text'),
(21, 'Machinery Outfitting', 'SHAFT PROPELLER', 'Deflection Shaft on the lathe', 'text'),
(22, 'Machinery Outfitting', 'SHAFT PROPELLER', 'Alignment Check', 'text'),
(23, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER', 'Deflection Shaft on the lathe', 'text'),
(24, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER', 'Alignment Check', 'text'),
(25, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER', 'Measuring Bolt Check', 'text'),
(26, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER', 'Fit bolt for propeller shaft flange', 'text'),
(27, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER', 'Thigtening Check', 'text'),
(28, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Install & Welding Check Foundation', 'text'),
(29, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Measurement Int Shaft Bearing seat bolt', 'number'),
(30, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Clearance check', 'number'),
(31, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Chock Fast / Loctite', 'text'),
(32, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Barcoll Test', 'text'),
(33, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Tightening Check Bolt Int Shaft Bearing', 'text'),
(34, 'Machinery Outfitting', 'INTERMEDITE SHAFT BEARING', 'Clearance check', 'text'),
(35, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER TO FLY WHEEL', 'Measurement Check for Fitt Bolt', 'number'),
(36, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER TO FLY WHEEL', 'Fitt bolt for Int'' shaft flange', 'text'),
(37, 'Machinery Outfitting', 'INTERMEDITE SHAFT PROPELER TO FLY WHEEL', 'Thigtening Check', 'text'),
(38, 'Machinery Outfitting', 'MAIN ENGINE', 'Final Alignment', 'text'),
(39, 'Machinery Outfitting', 'MAIN ENGINE', 'ME Bed Cleaning Check', 'text'),
(40, 'Machinery Outfitting', 'MAIN ENGINE', 'Crank Shaft deflection Before Chock Fast', 'text'),
(41, 'Machinery Outfitting', 'MAIN ENGINE', 'Chock Fast / Loctite', 'text'),
(42, 'Machinery Outfitting', 'MAIN ENGINE', 'Barcoll Test', 'text'),
(43, 'Machinery Outfitting', 'MAIN ENGINE', 'Holding Down Bolts', 'text'),
(44, 'Machinery Outfitting', 'MAIN ENGINE', 'Crank Shaft deflection After Chock Fast', 'text'),
(45, 'Machinery Outfitting', 'MAIN ENGINE', 'Side Chock', 'text'),
(46, 'Machinery Outfitting', 'MAIN ENGINE', 'End Chock', 'text'),
(47, 'Machinery Outfitting', 'MAIN ENGINE', 'Safety Device Check', 'text'),
(48, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Welding Check Foundation', 'text'),
(49, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Install Check Foundation on board', 'text'),
(50, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Crank Shaft Deflection Before Chock Fast', 'text'),
(51, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Pouring Loctite', 'text'),
(52, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Barcoll Test', 'text'),
(53, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Tightening Bolt ', 'text'),
(54, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Crank Shaft Deflection After Chock Fast', 'text'),
(55, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Cleaning Carter & Leak Test of Jacket Cooling Water', 'text'),
(56, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Filling Oil in Carter DG Engine & Alternative Bearing Generator', 'text'),
(57, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Safety Device Check', 'text'),
(58, 'Machinery Outfitting', 'MAIN DIESEL GENERATOR', 'Load Test', 'text'),
(59, 'Machinery Outfitting', 'MAIN AIR COMPRESSOR  No. 1', 'Welding Check Foundation', 'text'),
(60, 'Machinery Outfitting', 'MAIN AIR COMPRESSOR  No. 1', 'Install Check Foundation', 'text'),
(61, 'Machinery Outfitting', 'MAIN AIR COMPRESSOR  No. 1', 'Safety Device Check', 'text'),
(62, 'Machinery Outfitting', 'MAIN AIR COMPRESSOR  No. 1', 'Charging test', 'text'),
(63, 'Machinery Outfitting', 'EMERGENCY AIR COMPRESSOR', 'Welding Check pondasi ', 'text'),
(64, 'Machinery Outfitting', 'EMERGENCY AIR COMPRESSOR', 'Install Check Equipmant', 'text'),
(65, 'Machinery Outfitting', 'EMERGENCY AIR COMPRESSOR', 'Safety Device Check', 'text'),
(66, 'Machinery Outfitting', 'EMERGENCY AIR COMPRESSOR', 'Fuction Test', 'text'),
(67, 'Machinery Outfitting', 'MAIN AIR RESERVOIR', 'Welding Check Foundation', 'text'),
(68, 'Machinery Outfitting', 'MAIN AIR RESERVOIR', 'Install Check Foundation', 'text'),
(69, 'Machinery Outfitting', 'MAIN AIR RESERVOIR', 'Safety Device Check', 'text'),
(70, 'Machinery Outfitting', 'MAIN AIR RESERVOIR', 'Function', 'text'),
(71, 'Machinery Outfitting', 'AUX AIR RECEIVER', 'Welding Check Foundation', 'text'),
(72, 'Machinery Outfitting', 'AUX AIR RECEIVER', 'Install Check Foundation', 'text'),
(73, 'Machinery Outfitting', 'AUX AIR RECEIVER', 'Safety device', 'text'),
(74, 'Machinery Outfitting', 'AUX AIR RECEIVER', 'Function', 'text'),
(75, 'Machinery Outfitting', 'MINIRALIZER', 'Material Ident.', 'text'),
(76, 'Machinery Outfitting', 'MINIRALIZER', 'Welding Check Foundation', 'text'),
(77, 'Machinery Outfitting', 'MINIRALIZER', 'Install Check', 'text'),
(78, 'Machinery Outfitting', 'MINIRALIZER', 'Function', 'text'),
(79, 'Machinery Outfitting', 'M/E JACKET WATER PREHEATHER AIR DRYER', 'Welding Check Foundation', 'text'),
(80, 'Machinery Outfitting', 'M/E JACKET WATER PREHEATHER AIR DRYER', 'Function', 'text'),
(81, 'Machinery Outfitting', 'M/E JACKET WATER PREHEATHER AIR DRYER', 'Welding Check pondasi ', 'text'),
(82, 'Machinery Outfitting', 'M/E JACKET WATER PREHEATHER AIR DRYER', 'Install Check Equipmant', 'text'),
(83, 'Machinery Outfitting', 'M/E JACKET WATER PREHEATHER AIR DRYER', 'Function', 'text'),
(84, 'Machinery Outfitting', 'THERMAL OIL', 'Welding Check Foundation', 'text'),
(85, 'Machinery Outfitting', 'THERMAL OIL', 'Install Check Foundation', 'text'),
(86, 'Machinery Outfitting', 'THERMAL OIL', 'Function', 'text'),
(87, 'Machinery Outfitting', 'THERMAL OIL EXP TANK', 'Welding Check Foundation', 'text'),
(88, 'Machinery Outfitting', 'THERMAL OIL EXP TANK', 'Install Check Foundation', 'text'),
(89, 'Machinery Outfitting', 'THERMAL OIL EXP TANK', 'Function', 'text'),
(90, 'Machinery Outfitting', 'STERILIZER', 'Welding Check Foundation', 'text'),
(91, 'Machinery Outfitting', 'STERILIZER', 'Install Check', 'text'),
(92, 'Machinery Outfitting', 'STERILIZER', 'Function', 'text'),
(93, 'Machinery Outfitting', ' INCENERATOR', 'Welding Check Foundation', 'text'),
(94, 'Machinery Outfitting', ' INCENERATOR', 'Install Check Foundation', 'text'),
(95, 'Machinery Outfitting', ' INCENERATOR', 'Safety device', 'text'),
(96, 'Machinery Outfitting', ' INCENERATOR', 'Function', 'text'),
(97, 'Machinery Outfitting', 'DG MDO PUMP', 'Welding Check Foundation', 'text'),
(98, 'Machinery Outfitting', 'DG MDO PUMP', 'Install Check', 'text'),
(99, 'Machinery Outfitting', 'DG MDO PUMP', 'Function', 'text'),
(100, 'Machinery Outfitting', 'THERMAL OIL PRE HEATHER', 'Welding Check Foundation', 'text'),
(101, 'Machinery Outfitting', 'THERMAL OIL PRE HEATHER', 'Install Check Foundation', 'text'),
(102, 'Machinery Outfitting', 'THERMAL OIL PRE HEATHER', 'Function', 'text'),
(103, 'Machinery Outfitting', 'THEMAL OIL CIRC PUMP', 'Welding Check Foundation', 'text'),
(104, 'Machinery Outfitting', 'THEMAL OIL CIRC PUMP', 'Install Check Foundation', 'text'),
(105, 'Machinery Outfitting', 'THEMAL OIL CIRC PUMP', 'Function', 'text'),
(106, 'Machinery Outfitting', 'THERMAL OIL ECONOMIZER', 'Welding Check Foundation', 'text'),
(107, 'Machinery Outfitting', 'THERMAL OIL ECONOMIZER', 'Install Check', 'text'),
(108, 'Machinery Outfitting', 'THERMAL OIL ECONOMIZER', 'Function', 'text'),
(109, 'Machinery Outfitting', 'BILGE PUMP', 'Welding Check Foundation', 'text'),
(110, 'Machinery Outfitting', 'BILGE PUMP', 'Install Check Foundation', 'text'),
(111, 'Machinery Outfitting', 'BILGE PUMP', 'Function', 'text'),
(112, 'Machinery Outfitting', 'CENTRAL COOLING  FW PUMP ', 'Welding Check pondasi ', 'text'),
(113, 'Machinery Outfitting', 'CENTRAL COOLING  FW PUMP ', 'Install Check Equipmant', 'text'),
(114, 'Machinery Outfitting', 'CENTRAL COOLING  FW PUMP ', 'Function', 'text'),
(115, 'Machinery Outfitting', 'CENTRAL MAIN COOLING FW PUMP', 'Welding Check pondasi ', 'text'),
(116, 'Machinery Outfitting', 'CENTRAL MAIN COOLING FW PUMP', 'Install Check Equipmant', 'text'),
(117, 'Machinery Outfitting', 'ME JACKET FW HT COOLING PUMP', 'Welding Check Foundation', 'text'),
(118, 'Machinery Outfitting', 'ME JACKET FW HT COOLING PUMP', 'Install Check', 'text'),
(119, 'Machinery Outfitting', 'ME JACKET FW HT COOLING PUMP', 'Function', 'text'),
(120, 'Machinery Outfitting', 'FW GENERATOR', 'Welding Check Foundation', 'text'),
(121, 'Machinery Outfitting', 'FW GENERATOR', 'Install Check', 'text'),
(122, 'Machinery Outfitting', 'FW GENERATOR', 'Function', 'text'),
(123, 'Machinery Outfitting', 'SEWAGE TREATMENT', 'Welding Check Foundation', 'text'),
(124, 'Machinery Outfitting', 'SEWAGE TREATMENT', 'Install Check Foundation', 'text'),
(125, 'Machinery Outfitting', 'SEWAGE TREATMENT', 'Function', 'text'),
(126, 'Machinery Outfitting', 'FRESH WATER PRE HEATHER PUMP', 'Welding Check Foundation', 'text'),
(127, 'Machinery Outfitting', 'FRESH WATER PRE HEATHER PUMP', 'Install Check', 'text'),
(128, 'Machinery Outfitting', 'FRESH WATER PRE HEATHER PUMP', 'Function', 'text'),
(129, 'Machinery Outfitting', 'HOMOGENIZER', 'Welding Check Foundation', 'text'),
(130, 'Machinery Outfitting', 'HOMOGENIZER', 'Install Check', 'text'),
(131, 'Machinery Outfitting', 'HOMOGENIZER', 'Function', 'text'),
(132, 'Machinery Outfitting', 'OILY BILGE SEPARATOR PUMP', 'Welding Check Foundation', 'text'),
(133, 'Machinery Outfitting', 'OILY BILGE SEPARATOR PUMP', 'Install Check', 'text'),
(134, 'Machinery Outfitting', 'OILY BILGE SEPARATOR PUMP', 'Function', 'text'),
(135, 'Machinery Outfitting', 'CENTRAL FW COOLER', 'Welding Check Foundation', 'text'),
(136, 'Machinery Outfitting', 'CENTRAL FW COOLER', 'Install Check Foundation', 'text'),
(137, 'Machinery Outfitting', 'CENTRAL FW COOLER', 'Function', 'text'),
(138, 'Machinery Outfitting', 'CENTRAL COOLING  SW PUMP', 'Welding Check Foundation', 'text'),
(139, 'Machinery Outfitting', 'CENTRAL COOLING  SW PUMP', 'Install Check Foundation', 'text'),
(140, 'Machinery Outfitting', 'CENTRAL COOLING  SW PUMP', 'Function', 'text'),
(141, 'Machinery Outfitting', 'AUTO BACK FLUSH  FILTER', 'Welding Check Foundation', 'text'),
(142, 'Machinery Outfitting', 'AUTO BACK FLUSH  FILTER', 'Install Check', 'text'),
(143, 'Machinery Outfitting', 'AUTO BACK FLUSH  FILTER', 'Function', 'text'),
(144, 'Machinery Outfitting', 'AIR COOL CLEAN PUMP', 'Welding Check Foundation', 'text'),
(145, 'Machinery Outfitting', 'AIR COOL CLEAN PUMP', 'Install Check', 'text'),
(146, 'Machinery Outfitting', 'AIR COOL CLEAN PUMP', 'Function', 'text'),
(147, 'Machinery Outfitting', 'BILGE PUMP', 'Welding Check Foundation', 'text'),
(148, 'Machinery Outfitting', 'BILGE PUMP', 'Install Check Foundation', 'text'),
(149, 'Machinery Outfitting', 'BILGE PUMP', 'Function', 'text'),
(150, 'Machinery Outfitting', 'ME JACKET COOLER', 'Welding Check Foundation', 'text'),
(151, 'Machinery Outfitting', 'ME JACKET COOLER', 'Install Check Foundation', 'text'),
(152, 'Machinery Outfitting', 'ME JACKET COOLER', 'Function', 'text'),
(153, 'Machinery Outfitting', 'HFO TRANS PUMP FOR THERMAL OIL', 'Welding Check Foundation', 'text'),
(154, 'Machinery Outfitting', 'HFO TRANS PUMP FOR THERMAL OIL', 'Install Check', 'text'),
(155, 'Machinery Outfitting', 'HFO TRANS PUMP FOR THERMAL OIL', 'Function', 'text'),
(156, 'Machinery Outfitting', 'MDO TRANS PUMP', 'Welding Check Foundation', 'text'),
(157, 'Machinery Outfitting', 'MDO TRANS PUMP', 'Install Check', 'text'),
(158, 'Machinery Outfitting', 'MDO TRANS PUMP', 'Function', 'text'),
(159, 'Machinery Outfitting', 'LO TRANS PUMP', 'Welding Check Foundation', 'text'),
(160, 'Machinery Outfitting', 'LO TRANS PUMP', 'Install Check Foundation', 'text'),
(161, 'Machinery Outfitting', 'LO TRANS PUMP', 'Function', 'text'),
(162, 'Machinery Outfitting', 'SLUDGE PUMP', 'Welding Check pondasi ', 'text'),
(163, 'Machinery Outfitting', 'SLUDGE PUMP', 'Install Check Equipmant', 'text'),
(164, 'Machinery Outfitting', 'SLUDGE PUMP', 'Function', 'text'),
(165, 'Machinery Outfitting', 'MAIN LO PUMP', 'Material Ident.', 'text'),
(166, 'Machinery Outfitting', 'MAIN LO PUMP', 'Welding Check Foundation', 'text'),
(167, 'Machinery Outfitting', 'MAIN LO PUMP', 'Install Check Foundation', 'text'),
(168, 'Machinery Outfitting', 'MAIN LO PUMP', 'Function', 'text'),
(169, 'Machinery Outfitting', 'MAIN LO COOLER', 'Welding Check Foundation', 'text'),
(170, 'Machinery Outfitting', 'MAIN LO COOLER', 'Install Check Foundation', 'text'),
(171, 'Machinery Outfitting', 'MAIN LO COOLER', 'Function', 'text'),
(172, 'Machinery Outfitting', 'AUX COOL SW PUMP', 'Welding Check Foundation', 'text'),
(173, 'Machinery Outfitting', 'AUX COOL SW PUMP', 'Install Check Foundation', 'text'),
(174, 'Machinery Outfitting', 'AUX COOL SW PUMP', 'Function', 'text'),
(175, 'Machinery Outfitting', 'MAIN COOL SW PUMP', 'Welding Check Foundation', 'text'),
(176, 'Machinery Outfitting', 'MAIN COOL SW PUMP', 'Install Check Foundation', 'text'),
(177, 'Machinery Outfitting', 'MAIN COOL SW PUMP', 'Function', 'text'),
(178, 'Machinery Outfitting', 'CARGO PUMP', 'Welding Check Foundation', 'text'),
(179, 'Machinery Outfitting', 'CARGO PUMP', 'Install Check Foundation', 'text'),
(180, 'Machinery Outfitting', 'CARGO PUMP', 'Function', 'text'),
(181, 'Machinery Outfitting', 'CARGO STRIPPING PUMP', 'Welding Check Foundation', 'text'),
(182, 'Machinery Outfitting', 'CARGO STRIPPING PUMP', 'Install Check Foundation', 'text'),
(183, 'Machinery Outfitting', 'CARGO STRIPPING PUMP', 'Function', 'text'),
(184, 'Machinery Outfitting', 'TANK CLEANING PUMP', 'Welding Check Foundation', 'text'),
(185, 'Machinery Outfitting', 'TANK CLEANING PUMP', 'Install Check Foundation', 'text'),
(186, 'Machinery Outfitting', 'TANK CLEANING PUMP', 'Function', 'text'),
(187, 'Machinery Outfitting', 'FIRE & GS PUMP No.1', 'Welding Check Foundation', 'text'),
(188, 'Machinery Outfitting', 'FIRE & GS PUMP No.1', 'Install Check Foundation', 'text'),
(189, 'Machinery Outfitting', 'FIRE & GS PUMP No.1', 'Function', 'text'),
(190, 'Machinery Outfitting', 'WATER BALLAST PUMP', 'Welding Check Foundation', 'text'),
(191, 'Machinery Outfitting', 'WATER BALLAST PUMP', 'Install Check Foundation', 'text'),
(192, 'Machinery Outfitting', 'WATER BALLAST PUMP', 'Function', 'text'),
(193, 'Machinery Outfitting', 'FW PUMP HYDROPHORE', 'Welding Check Foundation', 'text'),
(194, 'Machinery Outfitting', 'FW PUMP HYDROPHORE', 'Install Check Foundation', 'text'),
(195, 'Machinery Outfitting', 'FW PUMP HYDROPHORE', 'Function', 'text'),
(196, 'Machinery Outfitting', 'THERMAL ECHO OIL CIRC PUMP', 'Welding Check Foundation', 'text'),
(197, 'Machinery Outfitting', 'THERMAL ECHO OIL CIRC PUMP', 'Install Check Foundation', 'text'),
(198, 'Machinery Outfitting', 'THERMAL ECHO OIL CIRC PUMP', 'Function', 'text'),
(199, 'Hull Outfitting', 'Rudder blade', 'Fitting', 'text'),
(200, 'Hull Outfitting', 'Rudder blade', 'Welding Check', 'text'),
(201, 'Hull Outfitting', 'Rudder blade', 'Leak test', 'text'),
(202, 'Hull Outfitting', 'Rudder blade', 'Painting', 'text'),
(203, 'Hull Outfitting', 'Rudder Stock + Rudder Blade', 'Contact Surface Check', 'text'),
(204, 'Hull Outfitting', 'Rudder Stock + Rudder Blade', 'Alignment Check', 'text'),
(205, 'Hull Outfitting', 'Rudder Pintie + Rudder Blade', 'Contact Surface Check', 'text'),
(206, 'Hull Outfitting', 'Rudder Horn + Shaft Propeller', 'Center Alignment Check', 'text'),
(207, 'Hull Outfitting', 'Bush for Rudder Stock', 'Fitting Check', 'text'),
(208, 'Hull Outfitting', 'Rudder Pintle & Nut', 'Tightening', 'text'),
(209, 'Hull Outfitting', 'Steering Gear', 'Fitting Check', 'text'),
(210, 'Hull Outfitting', 'Steering Gear', 'Inserting Bolt', 'text'),
(211, 'Hull Outfitting', 'Steering Gear', 'Chock fast', 'text'),
(212, 'Hull Outfitting', 'Steering Gear', 'Adjustment Rudder Angle Ind.', 'text'),
(213, 'Hull Outfitting', 'Steering Gear', 'Function Test ', 'text'),
(214, 'Hull Outfitting', 'Windlass & Mooring Winch', 'Instaal Check', 'text'),
(215, 'Hull Outfitting', 'Windlass & Mooring Winch', 'Chock Fast', 'text'),
(216, 'Hull Outfitting', 'Windlass & Mooring Winch', 'Function Test', 'text'),
(217, 'Hull Outfitting', 'Mooring & Equipmnet', 'Install Check', 'text'),
(218, 'Hull Outfitting', 'Mooring & Equipmnet', 'Function Test', 'text'),
(219, 'Hull Outfitting', 'Anchor & Chain Cable', 'Install Check', 'text'),
(220, 'Hull Outfitting', 'Chain Stoper', 'Install Check', 'text'),
(221, 'Hull Outfitting', 'Emergency Towing Fitting', 'Install Check', 'text'),
(222, 'Hull Outfitting', 'Emergency Towing Fitting', 'Function Test/Load Test', 'text'),
(223, 'Hull Outfitting', 'Cargo House', 'Install Check', 'text'),
(224, 'Hull Outfitting', 'Cargo House', 'Function Test/Load Test', 'text'),
(225, 'Hull Outfitting', 'Cargo House', '', 'text'),
(226, 'Hull Outfitting', 'Life Boat Davit', 'Install Check', 'text'),
(227, 'Hull Outfitting', 'Life Boat Davit', 'Function Test/Load Test', 'text'),
(228, 'Hull Outfitting', 'Rescue & Life Handling Davit', 'Install Check', 'text'),
(229, 'Hull Outfitting', 'Rescue & Life Handling Davit', 'Function Test/Load Test', 'text'),
(230, 'Hull Outfitting', 'Life Boat', 'Function Test', 'text'),
(231, 'Hull Outfitting', 'Life Boat', 'Inventory Check', 'text'),
(232, 'Hull Outfitting', 'Rescue Boat', 'Function Test', 'text'),
(233, 'Hull Outfitting', 'Rescue Boat', 'Inventory Check', 'text'),
(234, 'Hull Outfitting', 'Liferaft', 'Install Check', 'text'),
(235, 'Hull Outfitting', 'Lifebuoy', 'Install Check', 'text'),
(236, 'Hull Outfitting', 'Life Jacket', 'Install Check', 'text'),
(237, 'Hull Outfitting', 'Fire Fighting System', 'Install Check', 'text'),
(238, 'Hull Outfitting', 'Fire Fighting System', 'Function Test', 'text'),
(239, 'Hull Outfitting', 'Handrails', 'Install Check', 'text'),
(240, 'Hull Outfitting', 'Radar Mast', 'Install Check', 'text'),
(241, 'Hull Outfitting', 'Fore Mast', 'Install Check', 'text'),
(242, 'Hull Outfitting', 'Ventilation Duct', 'Install Check', 'text'),
(243, 'Hull Outfitting', 'Mechanical Ventillation for P/R', 'Install Check', 'text'),
(244, 'Hull Outfitting', 'Mechanical Ventillation for P/R', 'Function Test', 'text'),
(245, 'Hull Outfitting', 'Natural Ventillation', 'Install Check', 'text'),
(246, 'Hull Outfitting', 'CO2 System', 'Content Check', 'text'),
(247, 'Hull Outfitting', 'CO2 System', 'Alarm Test', 'text'),
(248, 'Hull Outfitting', 'CO2 System', 'Release Valve Test', 'text'),
(249, 'Hull Outfitting', 'CO2 System', 'Function Test', 'text'),
(250, 'Hull Outfitting', 'Emergency Diesel Generator', 'Install Check', 'text'),
(251, 'Hull Outfitting', 'Emergency Diesel Generator', 'Safety device', 'text'),
(252, 'Hull Outfitting', 'Emergency Diesel Generator', 'Load Test', 'text'),
(253, 'Hull Outfitting', 'Clear View Screen, Wipers, Heater', 'Fitting Check', 'text'),
(254, 'Hull Outfitting', 'Insulation', 'Install Check', 'text'),
(255, 'Hull Outfitting', 'ceiling & Lining', 'Install Check', 'text'),
(256, 'Hull Outfitting', 'Door and Fitting (Fire Proof Door)', 'Install Check', 'text'),
(257, 'Hull Outfitting', 'Windows & Side Scuttle', 'Install Check', 'text'),
(258, 'Hull Outfitting', 'Windows & Side Scuttle', 'Hose Test', 'text'),
(259, 'Hull Outfitting', 'Deck Covering', 'Install Check', 'text'),
(260, 'Hull Outfitting', 'Furniture', 'Fitting Check', 'text'),
(261, 'Hull Outfitting', 'Accessories Room', 'Fitting Check', 'text'),
(262, 'Hull Outfitting', 'Galley Equipments', 'Install Check', 'text'),
(263, 'Hull Outfitting', 'Galley Equipments', 'Function Test', 'text'),
(264, 'Hull Outfitting', 'Lavatory & Sanitary Equipment', 'Install Check', 'text'),
(265, 'Hull Outfitting', 'Lavatory & Sanitary Equipment', 'Funstion Test', 'text'),
(266, 'Hull Outfitting', 'Laundry Equipment', 'Install Check', 'text'),
(267, 'Hull Outfitting', 'Laundry Equipment', 'Funstion Test', 'text'),
(268, 'Hull Outfitting', 'Refrigerated Provision Store', 'Leak test of pipe', 'text'),
(269, 'Hull Outfitting', 'Refrigerated Provision Store', 'Safety device test', 'text'),
(270, 'Hull Outfitting', 'Refrigerated Provision Store', 'Cooling down test', 'text'),
(271, 'Hull Outfitting', 'Air Conditioning System', 'Leak test of pipe', 'text'),
(272, 'Hull Outfitting', 'Air Conditioning System', 'Safety device test', 'text'),
(273, 'Hull Outfitting', 'Air Conditioning System', 'Function test', 'text'),
(274, 'Hull Outfitting', 'Man Hole', 'Install Check', 'text'),
(275, 'Hull Outfitting', 'Bottom plug', 'Install Check', 'text'),
(276, 'Hull Outfitting', 'Bottom plug', 'Vacuum Check', 'text'),
(277, 'Hull Outfitting', 'Accomodation ladder', 'Install Check', 'text'),
(278, 'Hull Outfitting', 'Accomodation ladder', 'Load Test', 'text'),
(279, 'Hull Outfitting', 'Pilot Ladder', 'Install Check', 'text'),
(280, 'Hull Outfitting', 'Embarcation Ladder', 'Install Check', 'text'),
(281, 'Hull Outfitting', 'Life raft boarding ladder', 'Install Check', 'text'),
(282, 'Hull Outfitting', 'Ladder for tanks, mast, cargo hold', 'Install Check', 'text'),
(283, 'Hull Outfitting', 'Steel Door', 'Install Check', 'text'),
(284, 'Hull Outfitting', 'Steel Door', 'HoseTest', 'text'),
(285, 'Hull Outfitting', 'Small Hatch', 'Install Check', 'text'),
(286, 'Hull Outfitting', 'Small Hatch', 'Hose Test', 'text'),
(287, 'Hull Outfitting', 'Cargo hold cleaning system', 'Install Check', 'text'),
(288, 'Hull Outfitting', 'Cargo hold cleaning system', 'Function Test', 'text'),
(289, 'Hull Outfitting', 'Fuel & Diesel Oil System', 'Fitting Check', 'text'),
(290, 'Hull Outfitting', 'Fuel & Diesel Oil System', 'Pressure Test', 'text'),
(291, 'Hull Outfitting', 'Fuel & Diesel Oil System', 'Function Test', 'text'),
(292, 'Hull Outfitting', 'Air Pipe System', 'Fitting Check', 'text'),
(293, 'Hull Outfitting', 'Air Pipe System', 'Pressure Test', 'text'),
(294, 'Hull Outfitting', 'Air Pipe System', 'Function Test', 'text'),
(295, 'Hull Outfitting', 'Weather Deck System', 'Fitting Check', 'text'),
(296, 'Hull Outfitting', 'Weather Deck System', 'Pressure Test', 'text'),
(297, 'Hull Outfitting', 'Weather Deck System', 'Function Test', 'text'),
(298, 'Hull Outfitting', 'Drinking &Fresh Water System', 'Fitting Check', 'text'),
(299, 'Hull Outfitting', 'Drinking &Fresh Water System', 'Pressure Test', 'text'),
(300, 'Hull Outfitting', 'Drinking &Fresh Water System', 'Function Test', 'text'),
(301, 'Hull Outfitting', 'Hot Water System', 'Fitting Check', 'text'),
(302, 'Hull Outfitting', 'Hot Water System', 'Pressure Test', 'text'),
(303, 'Hull Outfitting', 'Hot Water System', 'Function Test', 'text'),
(304, 'Hull Outfitting', 'Soil System', 'Fitting Check', 'text'),
(305, 'Hull Outfitting', 'Soil System', 'Leak Test', 'text'),
(306, 'Hull Outfitting', 'Deck Scuper System', 'Fitting Check', 'text'),
(307, 'Hull Outfitting', 'Deck Scuper System', 'Leak Test', 'text'),
(308, 'Hull Outfitting', 'Drainage System', 'Fitting Check', 'text'),
(309, 'Hull Outfitting', 'Drainage System', 'Pressure Test', 'text'),
(310, 'Hull Outfitting', 'Drainage System', 'Function Test', 'text'),
(311, 'Hull Outfitting', 'Fire & Wash Deck System', 'Fitting Check', 'text'),
(312, 'Hull Outfitting', 'Fire & Wash Deck System', 'Pressure Test', 'text'),
(313, 'Hull Outfitting', 'Fire & Wash Deck System', 'Function Test', 'text'),
(314, 'Hull Outfitting', 'Heating Coil System', 'Fitting Check', 'text'),
(315, 'Hull Outfitting', 'Heating Coil System', 'Pressure Test', 'text'),
(316, 'Hull Outfitting', 'Heating Coil System', 'Function Test', 'text'),
(317, 'Hull Outfitting', 'Compressor Air Service', 'Fitting Check', 'text'),
(318, 'Hull Outfitting', 'Compressor Air Service', 'Pressure Test', 'text'),
(319, 'Hull Outfitting', 'Compressor Air Service', 'Function Test', 'text'),
(320, 'Hull Outfitting', 'Refrigerating Line', 'Fitting Check ', 'text'),
(321, 'Hull Outfitting', 'Refrigerating Line', 'Pressure Test', 'text'),
(322, 'Hull Outfitting', 'Refrigerating Line', 'Vacuum Test', 'text'),
(323, 'Hull Outfitting', 'Refrigerating Line', 'Function Test', 'text'),
(324, 'Hull Outfitting', 'CO2 Pipe Line System', 'Fitting Check', 'text'),
(325, 'Hull Outfitting', 'CO2 Pipe Line System', 'Pressure Test', 'text'),
(326, 'Hull Outfitting', 'CO2 Pipe Line System', 'Function Test', 'text'),
(327, 'Hull Outfitting', 'Tank Level System', 'Fitting Check', 'text'),
(328, 'Hull Outfitting', 'Tank Level System', 'Pressure Test', 'text'),
(329, 'Hull Outfitting', 'Tank Level System', 'Function Test', 'text'),
(330, 'Hull Outfitting', 'Sounding Pipe', 'Fitting Check', 'text'),
(331, 'Hull Outfitting', 'Sounding Pipe', 'Pressure Test', 'text'),
(332, 'Hull Outfitting', 'Sounding Pipe', 'Function Test', 'text'),
(333, 'Hull Outfitting', 'Bilge System', 'Fitting Check', 'text'),
(334, 'Hull Outfitting', 'Bilge System', 'Pressure Test', 'text'),
(335, 'Hull Outfitting', 'Bilge System', 'Function Test', 'text'),
(336, 'Hull Outfitting', 'Ballast System', 'Fitting Check', 'text'),
(337, 'Hull Outfitting', 'Ballast System', 'Pressure Test', 'text'),
(338, 'Hull Outfitting', 'Ballast System', 'Function Test', 'text'),
(339, 'Hull Outfitting', 'Hydraulic Line for Deck Machinery', 'Fitting Check', 'text'),
(340, 'Hull Outfitting', 'Hydraulic Line for Deck Machinery', 'Pressure Test', 'text'),
(341, 'Hull Outfitting', 'Hydraulic Line for Deck Machinery', 'Function Test', 'text'),
(342, 'Hull Outfitting', 'Hydraulic Line for Remote Control Valve', 'Fitting Check', 'text'),
(343, 'Hull Outfitting', 'Hydraulic Line for Remote Control Valve', 'Pressure Test', 'text'),
(344, 'Hull Outfitting', 'Hydraulic Line for Remote Control Valve', 'Function Test', 'text'),
(345, 'Hull Outfitting', 'Cargo Pipe Line System', 'Fitting Check', 'text'),
(346, 'Hull Outfitting', 'Cargo Pipe Line System', 'Pressure Test', 'text'),
(347, 'Hull Outfitting', 'Cargo Pipe Line System', 'Function Test', 'text'),
(348, 'Hull Outfitting', 'Inert Gas System', 'Fitting Check', 'text'),
(349, 'Hull Outfitting', 'Inert Gas System', 'Pressure Test', 'text'),
(350, 'Hull Outfitting', 'Inert Gas System', 'Function Test', 'text'),
(351, 'Hull Outfitting', 'Tank Cleaning System', 'Fitting Check', 'text'),
(352, 'Hull Outfitting', 'Tank Cleaning System', 'Pressure Test', 'text'),
(353, 'Hull Outfitting', 'Tank Cleaning System', 'Function Test', 'text'),
(354, 'Hull Outfitting', 'Protect Cable Pipe', 'Fitting Check', 'text'),
(355, 'Hull Outfitting', 'Oil Discharge Monitoring', 'Fitting Check', 'text'),
(356, 'Hull Outfitting', 'Oil Discharge Monitoring', 'Function Test', 'text'),
(357, 'Hull Outfitting', 'Over flow Monitoring', 'Fitting Check ', 'text'),
(358, 'Hull Outfitting', 'Over flow Monitoring', 'Function Test', 'text'),
(359, 'Hull Outfitting', 'Cargo Loading Monitoring', 'Fitting Check ', 'text'),
(360, 'Hull Outfitting', 'Cargo Loading Monitoring', 'Function Test', 'text'),
(361, 'Hull Outfitting', 'Cathodic Protection', 'Install Check', 'text'),
(362, 'Hull Outfitting', 'General Painting', 'Blasting Check', 'text'),
(363, 'Hull Outfitting', 'General Painting', 'Preparation Check', 'text'),
(364, 'Hull Outfitting', 'WBT Painting', 'Blasting Check', 'text'),
(365, 'Hull Outfitting', 'WBT Painting', 'Preparation Check', 'text'),
(366, 'Hull Outfitting', 'COT Painting', 'Blasting Check', 'text'),
(367, 'Hull Outfitting', 'COT Painting', 'Preparation Check', 'text'),
(368, 'Hull Outfitting', 'Carving Certificate', 'Fitting', 'text'),
(369, 'Hull Outfitting', 'Carving Certificate', 'Install Check', 'text'),
(370, 'Electric Outfitting', 'Cable ', 'Install Check', 'text'),
(371, 'Electric Outfitting', 'Cable ', 'Merger Test', 'text'),
(372, 'Electric Outfitting', 'Main Switch Board (MSB)', 'Safety Device', 'text'),
(373, 'Electric Outfitting', 'Main Switch Board (MSB)', 'Function Test', 'text'),
(374, 'Electric Outfitting', 'Emergency Switch Board (EMS)', 'Safety Device', 'text'),
(375, 'Electric Outfitting', 'Emergency Switch Board (EMS)', 'Function Test', 'text'),
(376, 'Electric Outfitting', 'Distribution Board', 'Install Check', 'text'),
(377, 'Electric Outfitting', 'Distribution Board', 'Function Test', 'text'),
(378, 'Electric Outfitting', 'Transformers 450 / 230 Volt, Batteries & Battery Charger', 'Install Check', 'text'),
(379, 'Electric Outfitting', 'Transformers 450 / 230 Volt, Batteries & Battery Charger', 'Function Test', 'text'),
(380, 'Electric Outfitting', 'Test Panel in Work Shop', 'Install Check', 'text'),
(381, 'Electric Outfitting', 'Test Panel in Work Shop', 'Function Test', 'text'),
(382, 'Electric Outfitting', 'Main Lighting System (On Hazardous area only)', 'Install Check', 'text'),
(383, 'Electric Outfitting', 'Main Lighting System (On Hazardous area only)', 'Function Test', 'text'),
(384, 'Electric Outfitting', 'Emergency Lighting', 'Install Check', 'text'),
(385, 'Electric Outfitting', 'Emergency Lighting', 'Function Test', 'text'),
(386, 'Electric Outfitting', 'Navigation & Signal Lighting', 'Install Check', 'text'),
(387, 'Electric Outfitting', 'Navigation & Signal Lighting', 'Function Test', 'text'),
(388, 'Electric Outfitting', 'Alarm Monitoring System', 'Install Check', 'text'),
(389, 'Electric Outfitting', 'Alarm Monitoring System', 'Function Test', 'text'),
(390, 'Electric Outfitting', 'Automatic Telephone System', 'Install Check', 'text'),
(391, 'Electric Outfitting', 'Automatic Telephone System', 'Function Test', 'text'),
(392, 'Electric Outfitting', 'Common Battery Telephone', 'Install Check', 'text'),
(393, 'Electric Outfitting', 'Common Battery Telephone', 'Function Test', 'text'),
(394, 'Electric Outfitting', 'Sound Powered Telephone', 'Install Check', 'text'),
(395, 'Electric Outfitting', 'Sound Powered Telephone', 'Function Test', 'text'),
(396, 'Electric Outfitting', 'Public Address/ Talk Back Syst.', 'Install Check', 'text'),
(397, 'Electric Outfitting', 'Public Address/ Talk Back Syst.', 'Function Test', 'text'),
(398, 'Electric Outfitting', 'Calling System', 'Install Check', 'text'),
(399, 'Electric Outfitting', 'Calling System', 'Function Test', 'text'),
(400, 'Electric Outfitting', 'General Alarm System', 'Install Check', 'text'),
(401, 'Electric Outfitting', 'General Alarm System', 'Function Test', 'text'),
(402, 'Electric Outfitting', 'Fire Detecting System', 'Install Check', 'text'),
(403, 'Electric Outfitting', 'Fire Detecting System', 'Function Test', 'text'),
(404, 'Electric Outfitting', 'CO2 Release Alarm ', 'Install Check', 'text'),
(405, 'Electric Outfitting', 'CO2 Release Alarm ', 'Function Test', 'text'),
(406, 'Electric Outfitting', 'Communal Arial System', 'Install Check', 'text'),
(407, 'Electric Outfitting', 'Communal Arial System', 'Function Test', 'text'),
(408, 'Electric Outfitting', 'Engine Order Telegraph', 'Install Check', 'text'),
(409, 'Electric Outfitting', 'Engine Order Telegraph', 'Function Test', 'text'),
(410, 'Electric Outfitting', 'Shaft Revolution Indicator', 'Install Check', 'text'),
(411, 'Electric Outfitting', 'Shaft Revolution Indicator', 'Function Test', 'text'),
(412, 'Electric Outfitting', 'Rudder Angle Indicator', 'Install Check', 'text'),
(413, 'Electric Outfitting', 'Rudder Angle Indicator', 'Function Test', 'text'),
(414, 'Electric Outfitting', 'Steering, Gyro Compass &Auto Pilot', 'Install Check', 'text'),
(415, 'Electric Outfitting', 'Steering, Gyro Compass &Auto Pilot', 'Function Test', 'text'),
(416, 'Electric Outfitting', 'Echo Sounder', 'Install Check', 'text'),
(417, 'Electric Outfitting', 'Echo Sounder', 'Function Test', 'text'),
(418, 'Electric Outfitting', 'Doppler Speed Log', 'Install Check', 'text'),
(419, 'Electric Outfitting', 'Doppler Speed Log', 'Function Test', 'text'),
(420, 'Electric Outfitting', 'Magnetic Compass', 'Install Check', 'text'),
(421, 'Electric Outfitting', 'Magnetic Compass', 'Compass Adjustment', 'text'),
(422, 'Electric Outfitting', 'DGPS Satellite Navigator', 'Install Check', 'text'),
(423, 'Electric Outfitting', 'DGPS Satellite Navigator', 'Function Test', 'text'),
(424, 'Electric Outfitting', 'Whistle, Fog gong & Bell Syst.', 'Install Check', 'text'),
(425, 'Electric Outfitting', 'Whistle, Fog gong & Bell Syst.', 'Function Test', 'text'),
(426, 'Electric Outfitting', 'Window Wiper & Clear View Screen', 'Install Check', 'text'),
(427, 'Electric Outfitting', 'Window Wiper & Clear View Screen', 'Function Test', 'text'),
(428, 'Electric Outfitting', 'Anemometer', 'Install Check', 'text'),
(429, 'Electric Outfitting', 'Anemometer', 'Function Test', 'text'),
(430, 'Electric Outfitting', 'Weather Facsimile Receiver', 'Install Check', 'text'),
(431, 'Electric Outfitting', 'Weather Facsimile Receiver', 'Function Test', 'text'),
(432, 'Electric Outfitting', 'MF/HF Radio Telephone', 'Install Check', 'text'),
(433, 'Electric Outfitting', 'MF/HF Radio Telephone', 'Function Test', 'text'),
(434, 'Electric Outfitting', 'V.H.F Two Way Radio Communication', 'Install Check', 'text'),
(435, 'Electric Outfitting', 'V.H.F Two Way Radio Communication', 'Function Test', 'text'),
(436, 'Electric Outfitting', 'V.H.F Radio Telephone', 'Install Check', 'text'),
(437, 'Electric Outfitting', 'V.H.F Radio Telephone', 'Function Test', 'text'),
(438, 'Electric Outfitting', 'U.H.F. Transceiver 400 MHz', 'Install Check', 'text'),
(439, 'Electric Outfitting', 'U.H.F. Transceiver 400 MHz', 'Function Test', 'text'),
(440, 'Electric Outfitting', 'Radio Beacon (EPIRB)', 'Install Check', 'text'),
(441, 'Electric Outfitting', 'Search and Rescue Transponders (SARTS)', 'Install Check', 'text'),
(442, 'Electric Outfitting', 'Navtex Receiver', 'Install Check', 'text'),
(443, 'Electric Outfitting', 'Navtex Receiver', 'Function Test', 'text'),
(444, 'Electric Outfitting', 'Marine Radars', 'Install Check', 'text'),
(445, 'Electric Outfitting', 'Marine Radars', 'Function Test', 'text'),
(446, 'Electric Outfitting', 'Bridge Navigation Watch Alarm System  (BNWAS)', 'Install Check', 'text'),
(447, 'Electric Outfitting', 'Bridge Navigation Watch Alarm System  (BNWAS)', 'Function Test', 'text'),
(448, 'Electric Outfitting', 'VDR (Voyage Data Recorder)', 'Install Check', 'text'),
(449, 'Electric Outfitting', 'VDR (Voyage Data Recorder)', 'Function Test', 'text'),
(450, 'Electric Outfitting', 'AIS (Automatic Indent. Syst.)', 'Install Check', 'text'),
(451, 'Electric Outfitting', 'AIS (Automatic Indent. Syst.)', 'Function Test', 'text'),
(452, 'Electric Outfitting', 'Inmarsat  B', 'Install Check', 'text'),
(453, 'Electric Outfitting', 'Inmarsat  B', 'Function Test', 'text'),
(454, 'Electric Outfitting', 'Inmarsat C', 'Install Check', 'text'),
(455, 'Electric Outfitting', 'Inmarsat C', 'Function Test', 'text'),
(456, 'Electric Outfitting', 'SSAS (Ship Security Alert Sys)', 'Install Check', 'text'),
(457, 'Electric Outfitting', 'SSAS (Ship Security Alert Sys)', 'Function Test', 'text'),
(458, 'Electric Outfitting', 'ECDIS (Electronic Chart Display)', 'Install Check', 'text'),
(459, 'Electric Outfitting', 'ECDIS (Electronic Chart Display)', 'Function Test', 'text'),
(460, 'Electric Outfitting', 'LRIT', 'Install Check', 'text'),
(461, 'Electric Outfitting', 'LRIT', 'Function Test', 'text'),
(462, 'Electric Outfitting', 'Refrigerator Chamber Alarm', 'Install Check', 'text'),
(463, 'Electric Outfitting', 'Refrigerator Chamber Alarm', 'Function Test', 'text'),
(464, 'Electric Outfitting', 'Combustable Gas Detection Alarm', 'Install Check', 'text'),
(465, 'Electric Outfitting', 'Combustable Gas Detection Alarm', 'Function Test', 'text'),
(466, 'Electric Outfitting', 'Electric Clock', 'Install Check', 'text'),
(467, 'Electric Outfitting', 'Electric Clock', 'Function Test', 'text'),
(468, 'Electric Outfitting', 'Marine Growth Prevention System (MGPS)', 'Install Check', 'text'),
(469, 'Electric Outfitting', 'Marine Growth Prevention System (MGPS)', 'Function Test', 'text');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komponen_sea`
--

CREATE TABLE IF NOT EXISTS `komponen_sea` (
  `id_komps` int(11) NOT NULL AUTO_INCREMENT,
  `bagian_sea` varchar(100) DEFAULT NULL,
  `pengujian_sea` varchar(100) DEFAULT NULL,
  `item_sea` varchar(100) DEFAULT NULL,
  `tipe_datas` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_komps`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data untuk tabel `komponen_sea`
--

INSERT INTO `komponen_sea` (`id_komps`, `bagian_sea`, `pengujian_sea`, `item_sea`, `tipe_datas`) VALUES
(1, 'Hull Outfitting', 'Compass Adjusment', 'Deviasi', 'number'),
(2, 'Hull Outfitting', 'Anchor System', 'Function Test', 'text'),
(3, 'Hull Outfitting', 'Anchor System', 'Time', 'Time'),
(4, 'Hull Outfitting', 'Anchor System', 'Velocity', 'number'),
(5, 'Hull Outfitting', 'Anchor System', 'Voltage', 'number'),
(6, 'Hull Outfitting', 'Anchor System', 'Ampere', 'number'),
(7, 'Hull Outfitting', 'Anchor System', 'Pressure', 'number'),
(8, 'Hull Outfitting', 'Ballast Stripping Pump', 'Safety Device Test', 'text'),
(9, 'Hull Outfitting', 'Ballast Stripping Pump', 'Operation Device Test', 'text'),
(10, 'Hull Outfitting', 'Steering Gear', 'Rudder Angle', 'number'),
(11, 'Hull Outfitting', 'Steering Gear', 'Time', 'number'),
(12, 'Hull Outfitting', 'Steering Gear', 'Voltage', 'number'),
(13, 'Hull Outfitting', 'Steering Gear', 'Ampere', 'number'),
(14, 'Hull Outfitting', 'Steering Gear', 'Pressure', 'number'),
(15, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Speed Trial', 'number'),
(16, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Turning Circle Test', 'text'),
(17, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Stopping Test', 'text'),
(18, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Crash Stop Astern Test', 'text'),
(19, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Zig-zag Manuever Test', 'text'),
(20, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Reversing Trial', 'text'),
(21, 'Hull Construction', 'SeaTrial- Ballast Condition', 'Williamson Turn Test', 'text'),
(22, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Speed Trial', 'number'),
(23, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Turning Circle Test', 'text'),
(24, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Stopping Test', 'text'),
(25, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Crash Stop Astern Test', 'text'),
(26, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Zig-zag Manuever Test', 'text'),
(27, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Reversing Trial', 'text'),
(28, 'Hull Construction', 'SeaTrial- Full Load Condition', 'Williamson Turn Test', 'text'),
(29, 'Hull Construction', 'Vibration Measurement', 'Measurement Frequency', 'number'),
(30, 'Hull Construction', 'Strength Test Tank', 'Leak Test', 'text'),
(31, 'Hull Construction', 'Strength Test Tank', 'Strength Test', 'text'),
(32, 'Hull Construction', 'Noise Level', 'Noise Measurement', 'number'),
(33, 'Machinery Outfitting', 'Official Sea Trial', 'Progressive Speed Trial', 'number'),
(34, 'Machinery Outfitting', 'Official Sea Trial', 'Endurance Test', 'text'),
(35, 'Machinery Outfitting', 'Official Sea Trial', 'Fuel Consumption', 'number'),
(36, 'Machinery Outfitting', 'Official Sea Trial', 'ME Starting Test', 'text'),
(37, 'Machinery Outfitting', 'Official Sea Trial', 'ME Minimum Revolution Test', 'text'),
(38, 'Machinery Outfitting', 'Main Engine Protective Device Test', 'Protective Device Test', 'text'),
(39, 'Machinery Outfitting', 'LO Pump', 'Function Test', 'text'),
(40, 'Electric Outfitting', 'Black Out & Deadship Condition', 'Black Out Test', 'text'),
(41, 'Electric Outfitting', 'Black Out & Deadship Condition', 'Emergency Generator Test', 'text'),
(42, 'Electric Outfitting', 'Internal Communication System', 'Function Test', 'text'),
(43, 'Electric Outfitting', 'Radio System', 'Function Test', 'text'),
(44, 'Electric Outfitting', 'Alarm & Monitoring System', 'Function Test', 'text'),
(45, 'Electric Outfitting', 'Navigation System', 'Performance Test', 'text'),
(46, 'Electric Outfitting', 'Navigation System', 'Function Test', 'text'),
(47, 'Electric Outfitting', 'Navigation System', 'Synchronize test for rudder angle', 'text'),
(48, 'Electric Outfitting', 'Navigation System', 'Safety Device Test', 'text'),
(49, 'Electric Outfitting', 'Navigation System', 'Turning Speed Test', 'text');

-- --------------------------------------------------------

--
-- Struktur dari tabel `launching`
--

CREATE TABLE IF NOT EXISTS `launching` (
  `id_project` int(11) NOT NULL,
  `id_launching` int(11) NOT NULL,
  `bagian_launching` varchar(100) DEFAULT NULL,
  `nama_kompl` varchar(100) DEFAULT NULL,
  `id_kompl` varchar(100) DEFAULT NULL,
  `qc_inspecl` varchar(100) DEFAULT NULL,
  `qa_coorl` varchar(100) DEFAULT NULL,
  `class_surl` varchar(100) DEFAULT NULL,
  `owner_surl` varchar(100) DEFAULT NULL,
  `tgl_periksal` date DEFAULT NULL,
  `status_launching` varchar(100) DEFAULT NULL,
  `tgl_reinspeksil` date DEFAULT NULL,
  `rekomendasi_lau` varchar(100) DEFAULT NULL,
  `path_gambarl` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_launching`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `outfitting`
--

CREATE TABLE IF NOT EXISTS `outfitting` (
  `id_project` int(11) NOT NULL,
  `id_outfitting` int(11) NOT NULL,
  `nama_bagianout` varchar(100) DEFAULT NULL,
  `nama_outfitting` varchar(100) DEFAULT NULL,
  `qc_inspecout` varchar(100) DEFAULT NULL,
  `qa_coorout` varchar(100) DEFAULT NULL,
  `class_surout` varchar(100) DEFAULT NULL,
  `owner_surout` varchar(100) DEFAULT NULL,
  `tgl_periksaout` date DEFAULT NULL,
  `status_out` varchar(100) DEFAULT NULL,
  `tgl_reinspekout` date DEFAULT NULL,
  `rekomendasi_out` varchar(100) DEFAULT NULL,
  `path_gambarout` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_outfitting`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE IF NOT EXISTS `pendaftar` (
  `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT,
  `username_daftar` varchar(100) DEFAULT NULL,
  `password_daftar` varchar(100) DEFAULT NULL,
  `nama_daftar` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `jabatanposisi` varchar(100) DEFAULT NULL,
  `alamat` varchar(1000) DEFAULT NULL,
  `nik` varchar(100) DEFAULT NULL,
  `tipe_kapal` varchar(100) DEFAULT NULL,
  `no_project` varchar(100) DEFAULT NULL,
  `infopesan` varchar(1000) DEFAULT NULL,
  `tipe_pengguna` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pendaftar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_pengguna` varchar(50) DEFAULT NULL,
  `hak_akses` int(11) DEFAULT NULL,
  `hak_project` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama_pengguna`, `hak_akses`, `hak_project`) VALUES
(1, 'admin', 'admin', 'Administrator', 1, '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seatrial`
--

CREATE TABLE IF NOT EXISTS `seatrial` (
  `id_project` int(11) NOT NULL,
  `id_sea` int(11) NOT NULL,
  `bagian_sea` varchar(100) DEFAULT NULL,
  `pengujian_sea` varchar(100) DEFAULT NULL,
  `id_komps` varchar(100) DEFAULT NULL,
  `qc_inspecs` varchar(100) DEFAULT NULL,
  `qa_coors` varchar(100) DEFAULT NULL,
  `class_surs` varchar(100) DEFAULT NULL,
  `owner_surs` varchar(100) DEFAULT NULL,
  `tgl_periksas` date DEFAULT NULL,
  `status_sea` varchar(100) DEFAULT NULL,
  `tgl_reinspeksis` date DEFAULT NULL,
  `rekomendasi_sea` varchar(100) DEFAULT NULL,
  `path_gambars` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_sea`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
