-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Nov 2019 pada 19.22
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
-- Database: `db_hubpin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `tahun_lulus` varchar(11) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `file_cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `nama`, `alamat`, `telepon`, `tahun_lulus`, `keahlian`, `username`, `password`, `file_cv`) VALUES
(3, 'azka', 'Buah Batu', '087773131667', '2020', 'TKJ', 'azka123', 'azka123', 'ada'),
(4, 'Jaja', 'Buah Batu', '087773131667', '2020', 'TKJ', 'nma123', 'nma123', 'lamaran.docx'),
(6, 'dddddd', 'Buah Batu', '087773131667', '2020', 'TKJ', 'aaa123', 'aaa123', 'lamaran.docx'),
(7, 'rrrrrr', 'Buah Batu', '087773131667', '2020', 'TKJ', 'aaa123', 'asdasd', 'lamaran.docx'),
(14, 'Muhammad Bilal Hikmat', 'Kopo Bulhab', '087773131667', '2020', 'TKJ', 'adasdasd123', 'aasd123', 'CV.docx'),
(16, 'Muhammad Himat Bilal', 'Jln. Kopo Bihbul', '087773131667', '2020', 'RPL', 'hikmat07123', 'hikmat07123', 'lamaran.docx'),
(17, 'Muhammad Himat Bilal', 'Jln. Kopo Bihbul', '087773131667', '2020', 'RPL', 'hikmat07123', '12345', 'lamaran.docx'),
(18, 'KOKO', 'Kopo Bulhab', '087773131667', '2020', 'RPL', 'koko123', 'koko123', 'CV.docx'),
(19, 'Kojo', 'Buah Batu', '087773131667', '2020', 'RPL', 'kojo123', 'kojo123', 'CV.docx'),
(20, 'Abosss', 'Buah Batu', '087773131667', '2019', 'TKJ', 'testalumni', 'testalumni', 'lamaran.docx'),
(21, 'Budi', 'Jln. Kopo Bihbul', '087773131667', '2020', 'TKJ', 'budi123', 'budi123', 'CV.docx'),
(22, 'Ardian', 'asdsad', '087773131667', '2020', 'RPL', 'ardian', 'ardian', 'lamaran.docx'),
(23, 'Tatang Kuswandi', 'Jl. Pagarsih', '084555545', '2011', 'RPL', 'papap123', 'papap123', 'EGHIT.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pesan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `judul`, `pesan`) VALUES
(1, 'Tatang Kuswandi', 'tatangkuswandi52@gmail.com', 'Report', 'Bagus'),
(2, 'Ardian', 'ardian@fhdfd', 'Bagus', 'Yyaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_company`
--

CREATE TABLE `register_company` (
  `id` int(11) NOT NULL,
  `id_alumni` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `tahun_lulus` varchar(255) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `file_cv` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register_company`
--

INSERT INTO `register_company` (`id`, `id_alumni`, `id_perusahaan`, `nama_perusahaan`, `is_verified`, `nama`, `alamat`, `telepon`, `tahun_lulus`, `keahlian`, `file_cv`) VALUES
(7, 22, 6, ' PT. LEN   ', 0, 'Ardian', 'asdsad', '087773131667', '2020', 'RPL', 'lamaran.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_company_user`
--

CREATE TABLE `register_company_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(255) NOT NULL,
  `is_verified` tinyint(4) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `kelompok` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `register_company_user`
--

INSERT INTO `register_company_user` (`id`, `id_user`, `id_perusahaan`, `nama_perusahaan`, `is_verified`, `nama`, `telepon`, `kelas`, `jurusan`, `kelompok`, `level`) VALUES
(1, 0, 1, 'WEBHADE CREATIVE', 0, '', '', '', '', '', ''),
(2, 0, 3, 'PT. LOUVRE', 0, '', '', '', '', '', ''),
(3, 6, 2, 'PT. WALDEN GLOBAL SERVICE', 0, 'Dwi Naufal Aprialdhi', '087773131667', '11', 'RPL', '0', 'siswa'),
(4, 6, 1, 'WEBHADE CREATIVE', 0, 'Dwi Naufal Aprialdhi', '087773131667', '11', 'RPL', '0', 'siswa'),
(5, 0, 2, 'PT. WALDEN GLOBAL SERVICE', 0, '', '', '', '', '', ''),
(6, 6, 4, 'PT. BUDIJAYA GROUP', 0, 'Dwi Naufal Aprialdhi', '087773131667', '11', 'RPL', '0', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_alumni`
--

CREATE TABLE `tambah_alumni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jarak` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tambah_alumni`
--

INSERT INTO `tambah_alumni` (`id`, `nama`, `alamat`, `notelp`, `email`, `jarak`, `deskripsi`) VALUES
(2, 'PT. EVOS', 'Jl. Mandiri', 121222, 'tehecho@gmail.com', '3,5 Km', 'Tentang dlasbnidaildbakdblawdbalwklsabdlkwabdklawbdlwbdklasbdlkwabd lawdbalwdblawbd lakwbdlwabdlkwabdlkbaw kldbakdbsmndl wbdbasldbwladbalwdb lakwbdsm,dblkwbdl asbdklwabdkasnkdbwkadbns jkabdkwadbnsdkawbda bndawdasdwadfa '),
(3, 'PT. RRQ', 'Jl. Sukamulya', 2221212, 'sucoo@gmail.com', '2,5 Km', ''),
(4, 'PT. BIGETRON', 'Jl. Merdeka', 22, 'bigetron@gmail.com', '23 Km', ''),
(5, 'PT. HACKER', 'Jl. Soekarno Hatta', 22, 'web@gmail.com', '1.2 Km', ''),
(6, ' PT. LEN   ', 'Jl. Kopo', 22, 'len@gmail.com', '2.1 Km', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tambah_siswa`
--

CREATE TABLE `tambah_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelp` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jarak` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tambah_siswa`
--

INSERT INTO `tambah_siswa` (`id`, `nama`, `alamat`, `notelp`, `email`, `jarak`, `deskripsi`) VALUES
(1, 'WEBHADE CREATIVE', 'Jl. Cibiru', 2147483647, 'webhade@gmail.com', '3,5 km', ''),
(2, 'PT. WALDEN GLOBAL SERVICE', 'Jl. Soekarno Hatta', 2147483647, 'walden@gmail.com', '2,5 Km', ''),
(3, 'PT. LOUVRE', 'Jl. Kemarau', 22, 'louvre@gmail.com', '2,3 Km', ''),
(4, 'PT. BUDIJAYA GROUP', 'Jl. Merdeka ', 22, 'budijaya@gmail.com', '1,2 Km', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelompok` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `telepon`, `kelas`, `jurusan`, `kelompok`, `level`) VALUES
(1, 'admin', 'admin', 'Admin', '214123123', '231', 'xcxc', '12', 'admin'),
(3, 'siswa', 'siswa', 'Siswa', '121212121', '1231', 'aksdnkanskd', '1212', 'siswa'),
(6, 'naufal001', 'naufal001', 'Dwi Naufal Aprialdhi', '087773131667', '11', 'RPL', '0', 'siswa'),
(8, 'lop123', '123456', 'hjhjh', '087773131667', '11', 'RPL', 'kelompok', 'siswa'),
(9, 'asd123', 'asd123', 'Ezechiel Ndoussel', '087773131667', '11', 'RPL', 'kelompok', 'siswa'),
(11, 'bilal123', 'bilal123', 'Bilal Hikmat', '087773131667', '11', 'RPL', 'kelompok', 'siswa'),
(12, 'belel123', 'belel123', 'Belel', '087773131667', '11', 'RPL', 'kelompok', 'siswa'),
(18, 'rt123', 'rt123', 'TestSIswa', '087773131667', '11', 'RPL', 'kelompok', 'siswa'),
(19, 'satria07123', 'satria07123', 'Satria Muhammad Nur', '081221558554', '12', 'RPL', 'kelompok', 'siswa'),
(21, 'upay', 'upay123', 'Dwi', '08594653423', '12', 'RPL', 'kelompok', 'siswa'),
(22, 'ardian123', 'ardian123', 'Ardian Ramadhan', '081221558554', 'XII', 'RPL', '2', 'siswa'),
(23, 'admin07123', 'admin07123', 'Dwi', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_company`
--
ALTER TABLE `register_company`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_alumni` (`id_alumni`),
  ADD KEY `id_perusahaan` (`id_perusahaan`);

--
-- Indexes for table `register_company_user`
--
ALTER TABLE `register_company_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah_alumni`
--
ALTER TABLE `tambah_alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah_siswa`
--
ALTER TABLE `tambah_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_company`
--
ALTER TABLE `register_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register_company_user`
--
ALTER TABLE `register_company_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tambah_alumni`
--
ALTER TABLE `tambah_alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tambah_siswa`
--
ALTER TABLE `tambah_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
