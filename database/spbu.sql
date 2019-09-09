-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06 Des 2017 pada 14.22
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spbu_v2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `no_akun` char(3) NOT NULL,
  `nama_akun` varchar(15) DEFAULT NULL,
  `header_akun` varchar(5) DEFAULT NULL,
  `saldo_awal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`no_akun`, `nama_akun`, `header_akun`, `saldo_awal`) VALUES
('111', 'Kas', '1', 0),
('411', 'Penjualan', '4', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bbm`
--

CREATE TABLE `bbm` (
  `no_bbm` varchar(5) NOT NULL,
  `nama_bbm` varchar(20) NOT NULL,
  `harga_bbm` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bbm`
--

INSERT INTO `bbm` (`no_bbm`, `nama_bbm`, `harga_bbm`, `stok`) VALUES
('01', 'Pertalite', 7500, 3723),
('02', 'Premium', 6550, 2974),
('03', 'Bio Solar', 5150, 1875),
('04', 'Pertamax', 8250, 3400);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jaga_operator`
--

CREATE TABLE `detail_jaga_operator` (
  `no_nota` varchar(10) NOT NULL,
  `id_operator` varchar(10) NOT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_jaga_operator`
--

INSERT INTO `detail_jaga_operator` (`no_nota`, `id_operator`, `jam_mulai`, `jam_selesai`) VALUES
('N001', 'OPR08', '00:01:00', '06:00:00'),
('N002', 'OPR04', '06:01:00', '12:00:00'),
('N003', 'OPR10', '12:01:00', '18:00:00'),
('N004', 'OPR05', '18:01:00', '00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_jual_pershift`
--

CREATE TABLE `detail_jual_pershift` (
  `no_nota` varchar(10) NOT NULL,
  `no_bbm` varchar(10) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_jual_pershift`
--

INSERT INTO `detail_jual_pershift` (`no_nota`, `no_bbm`, `jumlah`, `subtotal`, `status`) VALUES
('N001', '01', 40, 300000, '1'),
('N001', '02', 40, 262000, '1'),
('N001', '03', 40, 206000, '1'),
('N001', '04', 40, 330000, '1'),
('N002', '01', 40, 300000, '1'),
('N002', '02', 50, 327500, '1'),
('N002', '03', 20, 103000, '1'),
('N002', '04', 50, 412500, '1'),
('N003', '01', 40, 300000, '1'),
('N003', '02', 60, 393000, '1'),
('N003', '03', 70, 360500, '1'),
('N003', '04', 100, 825000, '1'),
('N004', '01', 100, 750000, '1'),
('N004', '02', 70, 458500, '1'),
('N004', '03', 100, 515000, '1'),
('N004', '04', 100, 825000, '1'),
('N005', '01', 10, 75000, '1'),
('N005', '02', 20, 131000, '1'),
('N005', '03', 40, 206000, '1'),
('N005', '04', 10, 82500, '1'),
('N006', '01', 60, 450000, '1'),
('N006', '02', 80, 524000, '1'),
('N006', '03', 50, 257500, '1'),
('N006', '04', 100, 825000, '1'),
('N007', '01', 90, 675000, '1'),
('N007', '02', 90, 589500, '1'),
('N007', '03', 40, 206000, '1'),
('N007', '04', 50, 412500, '1'),
('N008', '01', 50, 375000, '1'),
('N008', '02', 50, 327500, '1'),
('N008', '03', 70, 360500, '1'),
('N008', '04', 90, 742500, '1'),
('N009', '01', 100, 750000, '1'),
('N009', '02', 20, 131000, '1'),
('N009', '03', 50, 257500, '1'),
('N009', '04', 90, 742500, '1'),
('N010', '01', 50, 375000, '1'),
('N010', '02', 50, 327500, '1'),
('N010', '03', 60, 309000, '1'),
('N010', '04', 80, 660000, '1'),
('N011', '01', 100, 750000, '1'),
('N011', '02', 90, 589500, '1'),
('N011', '03', 40, 206000, '1'),
('N011', '04', 90, 742500, '1'),
('N012', '01', 40, 300000, '1'),
('N012', '02', 30, 196500, '1'),
('N012', '03', 80, 412000, '1'),
('N012', '04', 80, 660000, '1'),
('N013', '01', 40, 300000, '1'),
('N013', '02', 50, 327500, '1'),
('N013', '03', 40, 206000, '1'),
('N013', '04', 60, 495000, '1'),
('N014', '01', 50, 375000, '1'),
('N014', '02', 40, 262000, '1'),
('N014', '03', 50, 257500, '1'),
('N014', '04', 60, 495000, '1'),
('N015', '01', 100, 750000, '1'),
('N015', '02', 40, 262000, '1'),
('N015', '03', 60, 309000, '1'),
('N015', '04', 90, 742500, '1'),
('N016', '01', 100, 750000, '1'),
('N016', '02', 80, 524000, '1'),
('N016', '03', 80, 412000, '1'),
('N016', '04', 100, 825000, '1'),
('N017', '01', 20, 150000, '1'),
('N017', '02', 30, 196500, '1'),
('N017', '03', 60, 309000, '1'),
('N017', '04', 70, 577500, '1'),
('N018', '01', 10, 75000, '1'),
('N018', '02', 100, 655000, '1'),
('N018', '03', 70, 360500, '1'),
('N018', '04', 120, 990000, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `no_nota` varchar(10) NOT NULL,
  `no_akun` char(3) NOT NULL,
  `tgl_jurnal` date DEFAULT NULL,
  `posisi_dr_cr` varchar(7) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`no_nota`, `no_akun`, `tgl_jurnal`, `posisi_dr_cr`, `nominal`) VALUES
('N017', '111', '2017-12-08', 'd', 1233000),
('N017', '411', '2017-12-08', 'k', 1233000),
('N018', '111', '2017-12-09', 'd', 2080500),
('N018', '411', '2017-12-09', 'k', 2080500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mesin_pompa`
--

CREATE TABLE `mesin_pompa` (
  `no_pompa` varchar(5) NOT NULL,
  `no_bbm` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mesin_pompa`
--

INSERT INTO `mesin_pompa` (`no_pompa`, `no_bbm`) VALUES
('01', '01'),
('03', '02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id_operator` varchar(10) NOT NULL,
  `nama_operator` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telp` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id_operator`, `nama_operator`, `alamat`, `no_telp`) VALUES
('OPR01', 'Siska', 'Jl. Sesama', '089788765456'),
('OPR02', 'Wildan', 'Jl.Mangga Du', '082789276700'),
('OPR03', 'Anto', 'Jl.BBC', '081989009878'),
('OPR04', 'Sukirman', 'Jl.Buah Batu', '081889009012'),
('OPR05', 'Susi', 'Jl.Batunungg', '081000009111'),
('OPR06', 'Pascal', 'Jl.Sukapura', '089677123098'),
('OPR07', 'fani', 'Jl.Sukabirus', '089880012376'),
('OPR08', 'Santo', 'Jl.Buah Batu', '089012779008'),
('OPR09', 'Karmin', 'Jl.Mangga Du', '089557790907'),
('OPR10', 'Aldo', 'Jl.Bojongsoa', '081335633909'),
('OPR11', 'Sulis', 'Jl.Bojongsoa', '082337650900'),
('OPR12', 'Rizki', 'Jl.BBC', '082099117600'),
('OPR13', 'Herdian', 'Jl.Batunungg', '081557800987'),
('OPR14', 'Sulistio', 'Jl.Sukapura', '081099456112'),
('OPR15', 'Wiwin', 'Jl.Sukabirus', '081998123565');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_pershift`
--

CREATE TABLE `penjualan_pershift` (
  `no_nota` varchar(10) NOT NULL,
  `tgl_nota` date NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan_pershift`
--

INSERT INTO `penjualan_pershift` (`no_nota`, `tgl_nota`, `total`) VALUES
('N001', '2017-12-02', 1098000),
('N002', '2017-12-02', 1143000),
('N003', '2017-12-02', 1878500),
('N004', '2017-12-02', 2548500),
('N005', '2017-12-03', 494500),
('N006', '2017-12-03', 2056500),
('N007', '2017-12-03', 1883000),
('N008', '2017-12-03', 1805500),
('N009', '2017-12-05', 1881000),
('N010', '2017-12-05', 1671500),
('N011', '2017-12-05', 2288000),
('N012', '2017-12-05', 1568500),
('N013', '2017-12-06', 1328500),
('N014', '2017-12-06', 1389500),
('N015', '2017-12-06', 2063500),
('N016', '2017-12-06', 2511000),
('N017', '2017-12-08', 1233000),
('N018', '2017-12-09', 2080500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `struk_penjualan`
--

CREATE TABLE `struk_penjualan` (
  `id_struk` varchar(10) NOT NULL,
  `tgl_struk` date DEFAULT NULL,
  `jumlah_liter` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `no_bbm` varchar(5) DEFAULT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `struk_penjualan`
--

INSERT INTO `struk_penjualan` (`id_struk`, `tgl_struk`, `jumlah_liter`, `total`, `no_bbm`, `status`) VALUES
('S001', '2017-12-06', 10, 51500, '03', 'cetak'),
('S002', '2017-12-06', 3, 22500, '01', 'cetak'),
('S004', '2017-12-06', 3, 22500, '01', 'cetak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_akun`);

--
-- Indexes for table `bbm`
--
ALTER TABLE `bbm`
  ADD PRIMARY KEY (`no_bbm`);

--
-- Indexes for table `detail_jaga_operator`
--
ALTER TABLE `detail_jaga_operator`
  ADD PRIMARY KEY (`no_nota`,`id_operator`),
  ADD KEY `fk_detail_jaga_operator2` (`id_operator`);

--
-- Indexes for table `detail_jual_pershift`
--
ALTER TABLE `detail_jual_pershift`
  ADD PRIMARY KEY (`no_nota`,`no_bbm`),
  ADD KEY `fk_detail_jual_pershift2` (`no_bbm`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`no_nota`,`no_akun`),
  ADD KEY `fk_jurnal2` (`no_akun`);

--
-- Indexes for table `mesin_pompa`
--
ALTER TABLE `mesin_pompa`
  ADD PRIMARY KEY (`no_pompa`),
  ADD KEY `fk_mesin_pompa` (`no_bbm`);

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id_operator`);

--
-- Indexes for table `penjualan_pershift`
--
ALTER TABLE `penjualan_pershift`
  ADD PRIMARY KEY (`no_nota`);

--
-- Indexes for table `struk_penjualan`
--
ALTER TABLE `struk_penjualan`
  ADD PRIMARY KEY (`id_struk`),
  ADD KEY `fk_struk_penjualan1` (`no_bbm`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_jaga_operator`
--
ALTER TABLE `detail_jaga_operator`
  ADD CONSTRAINT `fk_detail_jaga_operator1` FOREIGN KEY (`no_nota`) REFERENCES `penjualan_pershift` (`no_nota`),
  ADD CONSTRAINT `fk_detail_jaga_operator2` FOREIGN KEY (`id_operator`) REFERENCES `operator` (`id_operator`);

--
-- Ketidakleluasaan untuk tabel `detail_jual_pershift`
--
ALTER TABLE `detail_jual_pershift`
  ADD CONSTRAINT `fk_detail_jual_pershift1` FOREIGN KEY (`no_nota`) REFERENCES `penjualan_pershift` (`no_nota`),
  ADD CONSTRAINT `fk_detail_jual_pershift2` FOREIGN KEY (`no_bbm`) REFERENCES `bbm` (`no_bbm`);

--
-- Ketidakleluasaan untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `fk_jurnal1` FOREIGN KEY (`no_nota`) REFERENCES `penjualan_pershift` (`no_nota`),
  ADD CONSTRAINT `fk_jurnal2` FOREIGN KEY (`no_akun`) REFERENCES `akun` (`no_akun`);

--
-- Ketidakleluasaan untuk tabel `mesin_pompa`
--
ALTER TABLE `mesin_pompa`
  ADD CONSTRAINT `fk_mesin_pompa` FOREIGN KEY (`no_bbm`) REFERENCES `bbm` (`no_bbm`);

--
-- Ketidakleluasaan untuk tabel `struk_penjualan`
--
ALTER TABLE `struk_penjualan`
  ADD CONSTRAINT `fk_struk_penjualan1` FOREIGN KEY (`no_bbm`) REFERENCES `bbm` (`no_bbm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
