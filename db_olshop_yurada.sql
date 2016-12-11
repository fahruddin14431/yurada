-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Des 2016 pada 12.02
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_olshop_yurada`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telfon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `kata_sandi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `alamat`, `no_telfon`, `email`, `nama_pengguna`, `kata_sandi`) VALUES
('ADM101', 'Habibi', 'L', 'Jl KH Ahmad Dahlan ', '085855449666', 'yusufudin14431@gmail.com', 'Habibi', 'de33fd244a6f5f46707db201e82c9356e07d622c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bank`
--

CREATE TABLE `tb_bank` (
  `id_bank` varchar(10) NOT NULL,
  `nama_bank` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_bank`
--

INSERT INTO `tb_bank` (`id_bank`, `nama_bank`) VALUES
('B101', 'BCA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(10) NOT NULL,
  `id_umkm` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `harga_barang` double NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `gambar_barang` varchar(200) NOT NULL,
  `spesifikasi_barang` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `id_umkm`, `nama_barang`, `id_kategori`, `harga_barang`, `jumlah_stok`, `gambar_barang`, `spesifikasi_barang`) VALUES
('asdf', 'UMKM0301102', 'asdf', '13', 1234124, 11, 'asdfdsdv', 'asdfasdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_jasa_pengiriman`
--

CREATE TABLE `tb_detail_jasa_pengiriman` (
  `id_jasa_pengiriman` varchar(5) NOT NULL,
  `id_umkm` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pesan`
--

CREATE TABLE `tb_detail_pesan` (
  `id_pesan` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `jumlah_pesan` int(11) NOT NULL,
  `sub_total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detail_pesan`
--

INSERT INTO `tb_detail_pesan` (`id_pesan`, `id_barang`, `jumlah_pesan`, `sub_total`) VALUES
('P001', 'asdf', 10, 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jasa_pengiriman`
--

CREATE TABLE `tb_jasa_pengiriman` (
  `id_jasa_pengiriman` varchar(5) NOT NULL,
  `nama_jasa_pengiriman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jasa_pengiriman`
--

INSERT INTO `tb_jasa_pengiriman` (`id_jasa_pengiriman`, `nama_jasa_pengiriman`) VALUES
('JP101', 'JNE'),
('JP102', 'TIKI'),
('JP103', 'POS'),
('JP104', 'ALHAMDULILLAH');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
('13', 'subhanalloh Alhamdulilah'),
('14', 'man'),
('15', 'bismillah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` varchar(5) NOT NULL,
  `nama_kota` varchar(50) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kota`
--

INSERT INTO `tb_kota` (`id_kota`, `nama_kota`, `id_provinsi`) VALUES
('0101', 'Kab. Simeulue', '01'),
('0102', 'Kab. Aceh Singkil', '01'),
('0103', 'Kab. Aceh Selatan', '01'),
('0104', 'Kab. Aceh Tenggara', '01'),
('0105', 'Kab. Aceh Timur', '01'),
('0106', 'Kab. Aceh Tengah', '01'),
('0107', 'Kab. Aceh Barat', '01'),
('0108', 'Kab. Aceh Besar', '01'),
('0109', 'Kab. Pidie', '01'),
('0110', 'Kab. Bireuin', '01'),
('0111', 'Kab. Aceh Utara', '01'),
('0112', 'Kab. Aceh Barat Daya', '01'),
('0113', 'Kab. Gayo Lues', '01'),
('0114', 'Kab. Aceh Tamiang', '01'),
('0115', 'Kab. Nagan Raya', '01'),
('0116', 'Kab. Aceh Jaya', '01'),
('0117', 'Kab. Bener Meriah', '01'),
('0118', 'Kab. Pidie Jaya', '01'),
('0119', 'Kota Banda Aceh', '01'),
('0120', 'Kota Sabang', '01'),
('0121', 'Kota Langsa', '01'),
('0122', 'Kota Lhokseumawe', '01'),
('0123', 'Kota Subulussalam', '01'),
('0201', 'Kab. Nias', '02'),
('0202', 'Kab. Mandailing Natal', '02'),
('0203', 'Kab. Tapanuli Selatan', '02'),
('0204', 'Kab. Tapanuli Tengah', '02'),
('0205', 'Kab. Tapanuli Utara', '02'),
('0206', 'Kab. Toba Samosir', '02'),
('0207', 'Kab. Labuhan Batu', '02'),
('0208', 'Kab. Asahan', '02'),
('0209', 'Kab. Simalungun', '02'),
('0210', 'Kab. Dairi', '02'),
('0211', 'Kab. Karo', '02'),
('0212', 'Kab. Deli Serdang', '02'),
('0213', 'Kab. Langkat', '02'),
('0214', 'Kab. Nias Selatan', '02'),
('0215', 'Kab. Humbang Hasundutan', '02'),
('0216', 'Kab. Pakpak Bharat', '02'),
('0217', 'Kab. Samosir', '02'),
('0218', 'Kab. Serdang Bedagai', '02'),
('0219', 'Kab. Batu Bara', '02'),
('0220', 'Kab. Padang Lawas Utara', '02'),
('0221', 'Kab. Padang Lawas', '02'),
('0222', 'Kab. Labuhan Batu Selatan', '02'),
('0223', 'Kab. Labuhan Batu Utara', '02'),
('0224', 'Kab. Nias Utara', '02'),
('0225', 'Kab. Nias Barat', '02'),
('0226', 'Kota Sibolga', '02'),
('0227', 'Kota Tanjung Balai', '02'),
('0228', 'Kota Pematang Siantar', '02'),
('0229', 'Kota Tebing Tinggi', '02'),
('0230', 'Kota Medan', '02'),
('0231', 'Kota Binjai', '02'),
('0232', 'Kota Padangsidimpuan', '02'),
('0233', 'Kota Gunungsitoli', '02'),
('0301', 'Kab. Kepulauan Mentawai', '03'),
('0302', 'Kab. Pesisir Selatan', '03'),
('0303', 'Kab. Solok', '03'),
('0304', 'Kab. Sijunjung', '03'),
('0305', 'Kab. Tanah Datar', '03'),
('0306', 'Kab. Padang Pariaman', '03'),
('0307', 'Kab. Agam', '03'),
('0308', 'Kab. Lima Puluh Kota', '03'),
('0309', 'Kab. Pasaman', '03'),
('0310', 'Kab. Solok Selatan', '03'),
('0311', 'Kab. Dharmasraya', '03'),
('0312', 'Kab. Pasaman Barat', '03'),
('0313', 'Kota Padang ', '03'),
('0314', 'Kota Solok', '03'),
('0315', 'Kota Sawah Lunto', '03'),
('0316', 'Kota Padang Panjang', '03'),
('0317', 'Kota Bukittinggi', '03'),
('0318', 'Kota Payakumbuh', '03'),
('0319', 'Kota Pariaman', '03'),
('0401', 'Kab. Kuantan Singingi', '04'),
('0402', 'Kab. Indragiri Hulu', '04'),
('0403', 'Kab. Indragiri Hilir', '04'),
('0404', 'Kab. Pelalawan', '04'),
('0405', 'Kab. S I A K', '04'),
('0406', 'Kab. Kampar', '04'),
('0407', 'Kab. Rokan Hulu', '04'),
('0408', 'Kab. Bengkalis', '04'),
('0409', 'Kab. Rokan Hilir', '04'),
('0410', 'Kab. Kepulauan Meranti', '04'),
('0411', 'Kab. Kota Pekanbaru', '04'),
('0412', 'Kota D U M A I', '04'),
('0501', 'Kab. Kerinci', '05'),
('0502', 'Kab. Merangin', '05'),
('0503', 'Kab. Sarolangun', '05'),
('0504', 'Kab. Batang Hari', '05'),
('0505', 'Kab. Muaro Jambi', '05'),
('0506', 'Kab. Tanjung Jabung Timur', '05'),
('0507', 'Kab. Tanjung Jabung Barat', '05'),
('0508', 'Kab. Tebo', '05'),
('0509', 'Kab. Bungo', '05'),
('0510', 'Kota Jambi', '05'),
('0511', 'Kota Sungai Penuh', '05'),
('0601', 'Kab. Ogan Komering Ulu', '06'),
('0602', 'Kab. Ogan Komering Ilir', '06'),
('0603', 'Kab. Muara Enim', '06'),
('0604', 'Kab. Muara Enim', '06'),
('0605', 'Kab. Musi Rawas', '06'),
('0606', 'Kab. Musi Banyuasin', '06'),
('0607', 'Kab. Banyu Asin', '06'),
('0608', 'Kab. Ogan Komering Ulu Selatan', '06'),
('0609', 'Kab. Ogan Komering Ulu Timur', '06'),
('0610', 'Kab. Ogan Ilir', '06'),
('0611', 'Kab. Empat Lawang', '06'),
('0612', 'Kota Palembang', '06'),
('0613', 'Kota Prabumulih', '06'),
('0614', 'Kota Pagar Alam', '06'),
('0615', 'Kota Lubuklinggau', '06'),
('0701', 'Kab. Bengkulu Selatan', '07'),
('0702', 'Kab. Rejang Lebong', '07'),
('0703', 'Kab. Bengkulu Utara', '07'),
('0704', 'Kab. Kaur', '07'),
('0705', 'Kab. Seluma', '07'),
('0706', 'Kab. Mukomuko', '07'),
('0707', 'Kab. Lebong', '07'),
('0708', 'Kab. Kepahiang', '07'),
('0709', 'Kab. Bengkulu Tengah', '07'),
('0710', 'Kota Bengkulu', '07'),
('0801', 'Kab. Lampung Barat', '08'),
('0802', 'Kab. Tanggamus', '08'),
('0803', 'Kab. Lampung Selatan', '08'),
('0804', 'Kab. Lampung Timur', '08'),
('0805', 'Kab. Lampung Tengah', '08'),
('0806', 'Kab. Lampung Utara', '08'),
('0807', 'Kab. Way Kanan', '08'),
('0808', 'Kab. Tulangbawang', '08'),
('0809', 'Kab. Pesawaran', '08'),
('0810', 'Kab. Pringsewu', '08'),
('0811', 'Kab. Mesuji', '08'),
('0812', 'Kab. Tulang Bawang Barat', '08'),
('0813', 'Bandar Lampung', '08'),
('0814', 'Kota Metro', '08'),
('0901', 'Kab. Bangka ', '09'),
('0902', 'Kab. Belitung', '09'),
('0903', 'Kab. Bangka Barat', '09'),
('0904', 'Kab. Bangka Tengah', '09'),
('0905', 'Kab. Bangka Selatan', '09'),
('0906', 'Kab. Bangka Timur', '09'),
('0907', 'Kota Pangkal Pinang', '09'),
('1001', 'Kab. Karimun', '10'),
('1002', 'Kab. Bintan', '10'),
('1003', 'Kab. Natuna', '10'),
('1004', 'Kab. Lingga', '10'),
('1005', 'Kab. Kepulauan Anambas', '10'),
('1006', 'Kota B A T A M', '10'),
('1007', 'Kota Tanjung Pinang', '10'),
('1101', 'Kab. Kepulauan Seribu', '11'),
('1102', 'Kota Jakarta Selatan', '11'),
('1103', 'Kota Jakarta Timur', '11'),
('1104', 'Kota Jakarta Pusat', '11'),
('1105', 'Kota Jakarta Barat', '11'),
('1106', 'Kota Jakarta Utara', '11'),
('1201', 'Kab. Bogor', '12'),
('1202', 'Kab. Sukabumi', '12'),
('1203', 'Kab. Cianjur', '12'),
('1204', 'Kab. Bandung', '12'),
('1205', 'Kab. Garut', '12'),
('1206', 'Kab. Tasikmalaya', '12'),
('1207', 'Kab. Ciamis', '12'),
('1208', 'Kab. Kuningan ', '12'),
('1209', 'Kab. Cirebon', '12'),
('1210', 'Kab. Majalengka', '12'),
('1211', 'Kab. Sumedang ', '12'),
('1212', 'Kab. Indramayu', '12'),
('1213', 'Kab. Subang', '12'),
('1214', 'Kab. Purwakarta', '12'),
('1215', 'Kab. Karawang', '12'),
('1216', 'Kab. Bekasi', '12'),
('1217', 'Kab.  Bandung Barat', '12'),
('1218', 'Kota Bogor', '12'),
('1219', 'Kota Sukabumi', '12'),
('1220', 'Kota Bandung', '12'),
('1221', 'Kota Cirebon', '12'),
('1222', 'Kota Bekasi', '12'),
('1223', 'Kota Depok', '12'),
('1224', 'Kota Cimahi', '12'),
('1225', 'Kota Tasikmalaya', '12'),
('1226', 'Kota Banjar', '12'),
('1230', 'Kab. Brebes', '13'),
('1301', 'Kab. Cilacap', '13'),
('1302', 'Kab. Banyumas', '13'),
('1303', 'Kab. Banyumas', '13'),
('1304', 'Kab. Purbalingga', '13'),
('1305', 'Kab. Banjarnegara', '13'),
('1306', 'Kab. Kebumen', '13'),
('1307', 'Kab. Purworejo', '13'),
('1308', 'Kab. Wonosobo', '13'),
('1309', 'Kab. Magelang', '13'),
('1310', 'Kab. Boyolali', '13'),
('1311', 'Kab. Klaten', '13'),
('1312', 'Kab. Sukoharjo', '13'),
('1313', 'Kab. Wonogiri', '13'),
('1314', 'Kab. Karanganyar', '13'),
('1315', 'Kab. Sragen', '13'),
('1316', 'Kab. Grobogan', '13'),
('1317', 'Kab. Blora', '13'),
('1318', 'Kab. Rembang', '13'),
('1319', 'Kab. Pati', '13'),
('1320', 'Kab. Kudus', '13'),
('1321', 'Kab. Jepara', '13'),
('1322', 'Kab. Demak', '13'),
('1323', 'Kab. Semarang', '13'),
('1324', 'Kab. Temanggung', '13'),
('1325', 'Kab. Kendal', '13'),
('1326', 'Kab. Batang', '13'),
('1327', 'Kab. Pekalongan', '13'),
('1328', 'Kab. Pemalang', '13'),
('1329', 'Kab. Tegal', '13'),
('1331', 'Kota Magelang', '13'),
('1332', 'Kota Surakarta', '13'),
('1333', 'Kota Salatiga', '13'),
('1334', 'Kota Semarang', '13'),
('1335', 'Kota Pekalongan', '13'),
('1336', 'Kota Tegal', '13'),
('1401', 'Kab. Kulon Progo', '14'),
('1402', 'Kab. Bantul', '14'),
('1403', 'Kab. Gunung Kidul', '14'),
('1404', 'Kab. Sleman', '14'),
('1405', 'Kota Yogyakarta', '14'),
('1501', 'Kab. Pacitan', '15'),
('1502', 'Kab. Ponorogo', '15'),
('1503', 'Kab. Trenggalek', '15'),
('1504', 'Kab. Tulungagung', '15'),
('1505', 'Kab. Blitar', '15'),
('1506', 'Kab. Kediri', '15'),
('1507', 'Kab. Malang', '15'),
('1508', 'Kab. Lumajang', '15'),
('1509', 'Kab. Jember', '15'),
('1510', 'Kab. Banyuwangi', '15'),
('1511', 'Kab. Bondowoso', '15'),
('1512', 'Kab. Situbondo', '15'),
('1513', 'Kab. Probolinggo', '15'),
('1514', 'Kab. Pasuruan', '15'),
('1515', 'Kab. Sidoarjo', '15'),
('1516', 'Kab. Mojokerto', '15'),
('1517', 'Kab. Jombang', '15'),
('1518', 'Kab. Nganjuk', '15'),
('1519', 'Kab. Madiun', '15'),
('1520', 'Kab. Magetan', '15'),
('1521', 'Kab. Ngawi', '15'),
('1522', 'Kab. Bojonegoro', '15'),
('1523', 'Kab. Tuban', '15'),
('1524', 'Kab. Lamongan', '15'),
('1525', 'Kab. Gresik', '15'),
('1526', 'Kab. Bangkalan', '15'),
('1527', 'Kab. Sampang', '15'),
('1528', 'Kab. Pamekasan', '15'),
('1529', 'Kab. Sumenep', '15'),
('1530', 'Kota Kediri', '15'),
('1531', 'Kota Blitar', '15'),
('1532', 'Kota Malang', '15'),
('1533', 'Kota Probolinggo', '15'),
('1534', 'Kota Pasuruan', '15'),
('1535', 'Kota Mojokerto', '15'),
('1536', 'Kota Madiun', '15'),
('1537', 'Kota Surabaya', '15'),
('1538', 'Kota Batu', '15'),
('1601', 'Kab. Pandeglang', '16'),
('1602', 'Kab. Lebak', '16'),
('1603', 'Kab. Tangerang', '16'),
('1604', 'Kab. Serang', '16'),
('1605', 'Kota Tangerang', '16'),
('1606', 'Kota Cilegon', '16'),
('1607', 'Kota Serang ', '16'),
('1608', 'Kota Tangerang Selatan', '16'),
('1701', 'Kab. Jembrana', '17'),
('1702', 'Kab. Tabanan', '17'),
('1703', 'Kab. Badung', '17'),
('1704', 'Kab. Gianyar', '17'),
('1705', 'Kab. Klungkung', '17'),
('1706', 'Kab. Bangli', '17'),
('1707', 'Kab. Karang Asem', '17'),
('1708', 'Kab. Buleleng', '17'),
('1709', 'Kota Denpasar', '17'),
('1801', 'Kab. Lombok Barat', '18'),
('1802', 'Kab. Lombok Tengah', '18'),
('1803', 'Kab. Lombok Timur', '18'),
('1804', 'Kab. Sumbawa', '18'),
('1805', 'Kab. Dompu', '18'),
('1806', 'Kab. Bima', '18'),
('1807', 'Kab. Sumbawa Barat', '18'),
('1808', 'Kab. Lombok Utara', '18'),
('1809', 'Kota Mataram', '18'),
('1810', 'Kota Bima', '18'),
('1901', 'Kab. Sumba Barat', '19'),
('1902', 'Kab. Sumba Timur', '19'),
('1903', 'Kab. Kupang', '19'),
('1904', 'Kab. Timor Tengah Selatan', '19'),
('1905', 'Kab. Timor Tengah Utara', '19'),
('1906', 'Kab. Belu', '19'),
('1907', 'Kab. Alor', '19'),
('1908', 'Kab. Lembata', '19'),
('1909', 'Kab. Flores Timur', '19'),
('1910', 'Kab. Sikka', '19'),
('1911', 'Kab. Ende', '19'),
('1912', 'Kab. Ngada', '19'),
('1913', 'Kab. Manggarai', '19'),
('1914', 'Kab. Rote Ndao', '19'),
('1915', 'Kab. Manggarai Barat', '19'),
('1916', 'Kab. Sumba Tengah', '19'),
('1917', 'Kab. Sumba Barat Daya', '19'),
('1918', 'Kab. Nagekeo', '19'),
('1919', 'Kab. Manggarai Timur', '19'),
('1920', 'Kab. Sabu Raijua', '19'),
('1921', 'Kota Kupang', '19'),
('2001', 'Kab. Sambas', '20'),
('2002', 'Kab. Bengkayang', '20'),
('2003', 'Kab. Landak', '20'),
('2004', 'Kab. Pontianak', '20'),
('2005', 'Kab. Sanggau', '20'),
('2006', 'Kab. Ketapang', '20'),
('2007', 'Kab. Sintang', '20'),
('2008', 'Kab. Kapuas Hulu', '20'),
('2009', 'Kab. Sekadau', '20'),
('2010', 'Kab. Melawi', '20'),
('2011', 'Kab. Kayong Utara', '20'),
('2012', 'Kab. Kubu Raya', '20'),
('2013', 'Kota Pontianak', '20'),
('2014', 'Kota Singkawang', '20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` varchar(10) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `no_telfon` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kata_sandi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `id_kota`, `id_provinsi`, `no_telfon`, `email`, `kata_sandi`) VALUES
('PEL1604101', 'Fahruddin Habibi', 'Jl Sumber Butuh', '1604', '16', '085855449666', 'yusufudin14431@gmail.com', 'de33fd244a6f5f46707db201e82c9356e07d622c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` varchar(10) NOT NULL,
  `id_pesan` varchar(10) NOT NULL,
  `total_transaksi` double NOT NULL,
  `no_resi` varchar(50) NOT NULL,
  `bukti_pembayaran` varchar(200) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_pesan`, `total_transaksi`, `no_resi`, `bukti_pembayaran`, `status`) VALUES
('pem001', 'P001', 20000, '1', 'asdasdfasdfasdf', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesan`
--

CREATE TABLE `tb_pesan` (
  `id_pesan` varchar(10) NOT NULL,
  `id_pelanggan` varchar(10) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `total_biaya` double NOT NULL,
  `alamat` text NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pesan`
--

INSERT INTO `tb_pesan` (`id_pesan`, `id_pelanggan`, `tanggal_pesan`, `total_biaya`, `alamat`, `id_kota`, `id_provinsi`, `catatan`) VALUES
('P001', 'PEL1604101', '2016-12-10', 20000, 'JL jlan', '0102', '16', 'asdsadf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` varchar(5) NOT NULL,
  `nama_provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_provinsi`
--

INSERT INTO `tb_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
('01', 'ACEH'),
('02', 'SUMATERA UTARA'),
('03', 'SUMATERA BARAT'),
('04', 'RIAU'),
('05', ' JAMBI'),
('06', 'SUMATERA SELATAN'),
('07', 'BENGKULU'),
('08', 'LAMPUNG'),
('09', 'KEPULAUAN BANGKA BELITUNG'),
('10', 'KEPULAUAN RIAU'),
('11', 'DKI JAKARTA'),
('12', 'JAWA BARAT'),
('13', 'JAWA TENGAH'),
('14', 'DI YOGYAKARTA'),
('15', 'JAWA TIMUR'),
('16', 'BANTEN'),
('17', 'BALI'),
('18', 'NUSA TENGGARA BARAT'),
('19', 'NUSA TENGGARA TIMUR'),
('20', 'KALIMANTAN BARAT'),
('21', 'KALIMANTAN TENGAH'),
('22', 'KALIMANTAN SELATAN'),
('23', 'KALIMANTAN TIMUR'),
('24', 'KALIMANTAN UTARA'),
('25', 'SULAWESI UTARA'),
('26', 'SULAWESI TENGAH'),
('27', 'SULAWESI SELATAN'),
('28', 'SULAWESI TENGGARA'),
('29', 'GORONTALO'),
('30', 'SULAWESI BARAT'),
('31', 'MALUKU'),
('32', 'MALUKU UTARA'),
('33', 'PAPUA BARAT'),
('34', 'PAPUA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rekening`
--

CREATE TABLE `tb_rekening` (
  `id_umkm` varchar(15) NOT NULL,
  `id_bank` varchar(10) NOT NULL,
  `no_rekening` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_rekening`
--

INSERT INTO `tb_rekening` (`id_umkm`, `id_bank`, `no_rekening`) VALUES
('UMKM0301102', 'B101', '9091092102910291091212');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_umkm`
--

CREATE TABLE `tb_umkm` (
  `id_umkm` varchar(15) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `alamat_umkm` text NOT NULL,
  `id_kota` varchar(5) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telfon` varchar(12) NOT NULL,
  `deskripsi_umkm` text NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL,
  `kata_sandi` varchar(50) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_umkm`
--

INSERT INTO `tb_umkm` (`id_umkm`, `nama_umkm`, `nama_pemilik`, `alamat_umkm`, `id_kota`, `id_provinsi`, `email`, `no_telfon`, `deskripsi_umkm`, `nama_pengguna`, `kata_sandi`, `status`) VALUES
('UMKM0301102', 'Yusuf emas muda', 'Yusuf Rahmad', 'Jl KH Ahmad Dahlan', '0301', '03', 'yusufudin20@yahoo.co.id', '085855449661', 'as', 'Yusuf', 'de33fd244a6f5f46707db201e82c9356e07d622c', '1'),
('UMKM0703103', 'Elvira shop', 'Elvira Linardi', 'Jl Sumber Gempol', '0703', '07', 'yusufudin20@yahoo.com', '085855449690', 'asdf', 'Elvira', 'de33fd244a6f5f46707db201e82c9356e07d622c', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_bank`
--
ALTER TABLE `tb_bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_umkm` (`id_umkm`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_detail_jasa_pengiriman`
--
ALTER TABLE `tb_detail_jasa_pengiriman`
  ADD KEY `id_jasa_pengiriman` (`id_jasa_pengiriman`),
  ADD KEY `id_umkm` (`id_umkm`);

--
-- Indexes for table `tb_detail_pesan`
--
ALTER TABLE `tb_detail_pesan`
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `tb_jasa_pengiriman`
--
ALTER TABLE `tb_jasa_pengiriman`
  ADD PRIMARY KEY (`id_jasa_pengiriman`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_pesan` (`id_pesan`);

--
-- Indexes for table `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD KEY `id_umkm` (`id_umkm`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `tb_umkm`
--
ALTER TABLE `tb_umkm`
  ADD PRIMARY KEY (`id_umkm`),
  ADD KEY `id_kota` (`id_kota`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_umkm`) REFERENCES `tb_umkm` (`id_umkm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_detail_jasa_pengiriman`
--
ALTER TABLE `tb_detail_jasa_pengiriman`
  ADD CONSTRAINT `tb_detail_jasa_pengiriman_ibfk_1` FOREIGN KEY (`id_umkm`) REFERENCES `tb_umkm` (`id_umkm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_jasa_pengiriman_ibfk_2` FOREIGN KEY (`id_jasa_pengiriman`) REFERENCES `tb_jasa_pengiriman` (`id_jasa_pengiriman`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_detail_pesan`
--
ALTER TABLE `tb_detail_pesan`
  ADD CONSTRAINT `tb_detail_pesan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_detail_pesan_ibfk_2` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pesan` (`id_pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD CONSTRAINT `tb_kota_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pelanggan_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `tb_pesan` (`id_pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_pesan`
--
ALTER TABLE `tb_pesan`
  ADD CONSTRAINT `tb_pesan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `tb_pesan_ibfk_2` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pesan_ibfk_3` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rekening`
--
ALTER TABLE `tb_rekening`
  ADD CONSTRAINT `tb_rekening_ibfk_1` FOREIGN KEY (`id_umkm`) REFERENCES `tb_umkm` (`id_umkm`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekening_ibfk_2` FOREIGN KEY (`id_bank`) REFERENCES `tb_bank` (`id_bank`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_umkm`
--
ALTER TABLE `tb_umkm`
  ADD CONSTRAINT `tb_umkm_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `tb_kota` (`id_kota`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_umkm_ibfk_2` FOREIGN KEY (`id_provinsi`) REFERENCES `tb_provinsi` (`id_provinsi`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
