-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2020 pada 11.44
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(5) NOT NULL,
  `nuptk` varchar(16) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `status_pegawai` varchar(10) NOT NULL,
  `mata_pelajaran` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nuptk`, `nip`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `status_pegawai`, `mata_pelajaran`, `status`) VALUES
(1, '3039737639110093', '121231750038020001', 'H. FAKHRUROZI, S.Ag', 'JAKARTA', '07/07/1959', 'LAKI-LAKI', 'Jl. Pondok Kelapa Selatan', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(2, '5459753656210023', '121231750038160002', 'NOVI EKA ARIYANTI, S.Pd', 'JOGYAKARTA', '27/11/1975', 'PEREMPUAN', 'Jl. Swakarsa IV', 'NON-PNS', ' IPA (Fisika, Biologi, Kimia)', 'AKTIF'),
(3, '6656757658210062', '121231750038030003', 'ITA NURLITA, S.Th.I', 'Jakarta', '24/03/1979', 'PEREMPUAN', 'Jl. Pondok Kelapa Selatan', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(4, '2552745647110062', '121231750038080004', 'H. JUNAEDI, S.Pd.I', 'Jakarta', '20/02/1967', 'LAKI-LAKI', 'Jl. Swakarsa IV', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(5, '6362755657210073', '121231750038090005', 'ST. BADRIAH, S.Pd.I', 'Jakarta', '30/10/1977', 'PEREMPUAN', 'Jl. Kenangan III', 'NON-PNS', 'Pendidikan Agama Islam (PAI)', 'AKTIF'),
(6, '5834765666210142', '121231750038070006', 'ELIE ROSMAWATI', 'Jakarta', '02/05/1987', 'PEREMPUAN', 'Jl. Pangkalan Jati No. 9', 'NON PNS', ' PGSD/PGMI', 'AKTIF'),
(8, '1458757659110022', '121231750038280008', 'DEDI JUNAEDI, S.Kom', 'Jakarta', '26/01/1979', 'LAKI-LAKI', 'Jl. Pangkalan Jati V', 'NON PNS', 'Teknologi Informasi', 'AKTIF'),
(9, '0134748650110063', '121231750038040009', 'H. NASRUDIN, S.Pd.I', 'Jakarta', '02/08/1970', 'LAKI-LAKI', 'Jl. Amil Abas Ujung No. 49', 'NON PNS', ' Rumpun Pendidikan Agama Islam', 'AKTIF'),
(14, '2015230056', '2015230056', 'Jordan Nur Akbar', 'Jakarta', '2016-07-31', 'Laki-Laki', 'Serdang', 'PNS', 'Pendidikan Agama Islam (PAI)', 'Aktif'),
(15, '201523001616', '2015230016', 'Gita Fitriana', 'Jakarta', '1997-05-03', 'Perempuan', '  Jl, Pasir Putih III  ', 'PNS', 'Sejarah Kebudayaan Islam', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `input_nilai`
--

CREATE TABLE `input_nilai` (
  `id` int(10) NOT NULL,
  `nis` varchar(50) NOT NULL,
  `kelas` int(5) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `pai` int(5) NOT NULL,
  `pai_huruf` varchar(30) NOT NULL,
  `kkm_pai` int(5) NOT NULL,
  `bindo` int(5) NOT NULL,
  `bindo_huruf` varchar(30) NOT NULL,
  `kkm_bindo` int(5) NOT NULL,
  `binggris` int(5) NOT NULL,
  `binggris_huruf` varchar(30) NOT NULL,
  `kkm_binggris` int(5) NOT NULL,
  `barab` int(5) NOT NULL,
  `barab_huruf` varchar(30) NOT NULL,
  `kkm_barab` int(5) NOT NULL,
  `matematika` int(5) NOT NULL,
  `matematika_huruf` varchar(30) NOT NULL,
  `kkm_matematika` int(5) NOT NULL,
  `ipa` int(5) NOT NULL,
  `ipa_huruf` varchar(30) NOT NULL,
  `kkm_ipa` int(5) NOT NULL,
  `ips` int(5) NOT NULL,
  `ips_huruf` varchar(30) NOT NULL,
  `kkm_ips` int(5) NOT NULL,
  `aqidah` int(5) NOT NULL,
  `aqidah_huruf` varchar(30) NOT NULL,
  `kkm_aqidah` int(5) NOT NULL,
  `fiqih` int(5) NOT NULL,
  `fiqih_huruf` varchar(30) NOT NULL,
  `kkm_fiqih` int(5) NOT NULL,
  `qurdis` int(5) NOT NULL,
  `qurdis_huruf` varchar(30) NOT NULL,
  `kkm_qurdis` int(5) NOT NULL,
  `ski` int(5) NOT NULL,
  `ski_huruf` varchar(30) NOT NULL,
  `kkm_ski` int(5) NOT NULL,
  `senbud` int(5) NOT NULL,
  `senbud_huruf` varchar(30) NOT NULL,
  `kkm_senbud` int(5) NOT NULL,
  `penjaskes` int(5) NOT NULL,
  `penjaskes_huruf` varchar(30) NOT NULL,
  `kkm_penjaskes` int(5) NOT NULL,
  `budi_pekerti` varchar(30) NOT NULL,
  `sikap` varchar(10) NOT NULL,
  `kerajinan` varchar(10) NOT NULL,
  `kebersihan` varchar(10) NOT NULL,
  `sakit` int(5) NOT NULL,
  `izin` int(5) NOT NULL,
  `alfa` int(5) NOT NULL,
  `catatan_guru` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `input_nilai`
--

INSERT INTO `input_nilai` (`id`, `nis`, `kelas`, `semester`, `pai`, `pai_huruf`, `kkm_pai`, `bindo`, `bindo_huruf`, `kkm_bindo`, `binggris`, `binggris_huruf`, `kkm_binggris`, `barab`, `barab_huruf`, `kkm_barab`, `matematika`, `matematika_huruf`, `kkm_matematika`, `ipa`, `ipa_huruf`, `kkm_ipa`, `ips`, `ips_huruf`, `kkm_ips`, `aqidah`, `aqidah_huruf`, `kkm_aqidah`, `fiqih`, `fiqih_huruf`, `kkm_fiqih`, `qurdis`, `qurdis_huruf`, `kkm_qurdis`, `ski`, `ski_huruf`, `kkm_ski`, `senbud`, `senbud_huruf`, `kkm_senbud`, `penjaskes`, `penjaskes_huruf`, `kkm_penjaskes`, `budi_pekerti`, `sikap`, `kerajinan`, `kebersihan`, `sakit`, `izin`, `alfa`, `catatan_guru`) VALUES
(1, '', 0, 'Ganjil', 75, 'Tujuh Puluh Lima', 70, 85, '', 80, 70, '0', 60, 70, '0', 65, 75, 'Tujuh Puluh Lima', 70, 70, 'Tujuh Puluh', 70, 80, 'Delapan Puluh', 75, 78, 'Tujuh Puluh Delapan', 75, 80, 'Delapan Puluh', 80, 80, 'Delapan Puluh', 75, 75, 'Tujuh Puluh Lima', 75, 80, 'Delapan Puluh', 80, 80, 'Delapan Puluh', 75, 'Disiplin', '', '', '', 1, 1, 1, 'Belajar Lebih Giat Yaa..'),
(4, '', 0, 'Ganjil', 75, 'Tujuh Puluh Lima', 0, 85, 'Delapan Puluh Lima', 0, 70, '0', 0, 70, '0', 0, 75, 'Tujuh Puluh Lima', 0, 70, 'Tujuh Puluh', 0, 80, 'Delapan Puluh', 0, 78, 'Tujuh Puluh Delapan', 0, 80, 'Delapan Puluh', 0, 80, 'Delapan Puluh', 0, 75, 'Tujuh Puluh Lima', 0, 80, 'Delapan Puluh', 0, 80, 'Delapan Puluh', 0, 'Tidak Disiplin', '', '', '', 1, 1, 1, 'Oyee'),
(18, '2015230056', 7, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, '0', 65, 70, '0', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', '', '', '', 1, 1, 1, 'Oyee'),
(23, '121231750038160452', 8, 'Genap', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', '', '', '', 1, 1, 1, 'Oyeee'),
(24, '2015230016', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'B', 'A', 1, 1, 1, 'Baik'),
(25, '2015230098', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', '', '', '', 1, 2, 1, 'Nilai lebih ditingkatkan'),
(26, '121231750038160453', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'A', 'A', 1, 1, 1, 'Lebih rajin'),
(27, '121231750038160453', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'A', 'A', 1, 1, 1, 'Lebih rajin'),
(28, '2015230055', 7, 'Ganjil', 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 65, 50, 'Lima Puluh', 60, 50, 'Lima Puluh', 60, 'Disiplin', 'A', 'B', 'A', 1, 1, 5, 'Tingkat nilai kamu, kurangi bercanda dikelas'),
(29, '2015230055', 8, 'Ganjil', 75, 'Tujuh Puluh Lima', 60, 85, 'Delapan Puluh Lima', 60, 70, 'Tujuh Puluh', 65, 70, 'Tujuh Puluh', 60, 75, 'Tujuh Puluh Lima', 60, 70, 'Tujuh Puluh', 60, 80, 'Delapan Puluh', 60, 78, 'Tujuh Puluh Delapan', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 65, 75, 'Tujuh Puluh Lima', 65, 80, 'Delapan Puluh', 60, 80, 'Delapan Puluh', 60, 'Disiplin', 'A', 'A', 'A', 1, 1, 1, 'Belajar Lebih Giat Yaa..');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(10) NOT NULL,
  `id_mapel` int(10) NOT NULL,
  `id_staf` int(10) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_mapel`, `id_staf`, `kelas`, `jurusan`) VALUES
(11, 22, 22, '10', 'Teknik Elektro'),
(22, 1211, 46, '11', 'Teknik Komputer Jaringan'),
(23, 2655, 46, '10', 'Teknik Komputer Jaringan'),
(24, 212, 47, '11', 'Teknik Komputer Jaringan'),
(25, 2656, 39, '12', 'Teknik Elektro'),
(26, 2656, 46, '12', 'Teknik Sepeda Motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` int(10) NOT NULL,
  `nama_pelajaran` varchar(20) NOT NULL,
  `jenis_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_pelajaran`, `jenis_pelajaran`) VALUES
(212, 'Matematika', 'Mapel-Umum'),
(1211, 'Pemrograman Internet', 'Mapel-Wajib Jurusan'),
(2655, 'Php Mysql', 'Mapel-Wajib Jurusan'),
(2656, 'Bahasa Inggris', 'Mapel-Umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) NOT NULL,
  `id_rincian` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `waktu` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `raport`
--

CREATE TABLE `raport` (
  `id_raport` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `nilai_harian` int(10) NOT NULL,
  `nilai_kehadiran` int(10) NOT NULL,
  `nilai_uts` int(10) NOT NULL,
  `nilai_uas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rincian`
--

CREATE TABLE `rincian` (
  `id_rincian` int(10) NOT NULL,
  `nama` int(20) NOT NULL,
  `nominal` int(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(10) NOT NULL,
  `nis` int(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `tahun_masuk` int(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_rumah` varchar(30) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_lengkap`, `tahun_masuk`, `tempat_lahir`, `tanggal_lahir`, `alamat_rumah`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `jenis_kelamin`, `agama`) VALUES
(2, 111888, 'Abdur Rahman wahid', 2017, 'Bekasi', '2010-05-10', 'Jl P saparua 3 no 193 rt 08 rw', 'Daniel Moranta', 'Main Perempuan', 'Deti Kurniawan', 'Main Bapak Bapak', 'Perempuan', 'Kristen ka'),
(3, 123213, 'rio maliki', 2015, 'jonggol', '2222-02-22', 'Jl P saparua 3 no 193 rt 08 rw', 'dapi', 'asfas', 'fasfsaf', 'asgasgsa', 'Perempuan', 'ateis'),
(4, 122144, 'Bagas Bagus Bigis', 2017, 'banten', '2005-12-11', 'jl maju mundur kena dikit aye', 'saprudin', 'ternak', 'sumiati', 'manen', 'Laki-Laki', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf_sekolah`
--

CREATE TABLE `staf_sekolah` (
  `id_staf` int(11) NOT NULL,
  `nama_staf` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `status_diri` varchar(20) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staf_sekolah`
--

INSERT INTO `staf_sekolah` (`id_staf`, `nama_staf`, `tempat_lahir`, `tgl_lahir`, `alamat`, `status_diri`, `pendidikan_terakhir`) VALUES
(39, 'riki siokona', 'bekasi', '2020-04-17', 'jl p spaarua 3', 'Belum Kawin', 'S5 Dating Apps'),
(42, 'rio maliki', 'bekasi', '4444-04-04', 'jl kenangan', 'Belum Kawin', 'S3 Marketing'),
(46, 'Adam Arif Budiman', 'Wonogiri', '1987-09-15', 'Jl mutar muter no 192', 'Kawin', 'S2 Komputer'),
(47, 'Leli Noor', 'Jakarta', '1988-03-08', 'jl pondok ijo', 'Kawin', 'S1 TEKNIK INFORMATIKA'),
(48, 'Budi Prasetyo', 'Jambi', '1967-07-04', 'Pulo gadung', 'Kawin', 'S2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uas`
--

CREATE TABLE `uas` (
  `id_uas` int(11) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `tahun` varchar(15) NOT NULL,
  `semester` int(5) NOT NULL,
  `kb` int(10) NOT NULL,
  `angka` int(10) NOT NULL,
  `predikat` varchar(1) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai_remedial` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_staf` varchar(10) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `id_staf`, `level`) VALUES
(24, 'rikisiokona', 'buka123', '39', 'Admin'),
(25, 'malikinas', 'buka123', '42', 'Walikelas'),
(27, 'lelinoor', 'buka123', '47', 'Kepala_Sekolah'),
(28, 'adamarif', 'buka123', '46', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uts`
--

CREATE TABLE `uts` (
  `id_uts` int(11) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `tahun` varchar(15) NOT NULL,
  `semester` int(5) NOT NULL,
  `kb` int(10) NOT NULL,
  `angka` int(10) NOT NULL,
  `predikat` varchar(1) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nilai_remedial` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE `walikelas` (
  `id_walikelas` int(10) NOT NULL,
  `id_staf` int(10) NOT NULL,
  `id_kelas` int(10) NOT NULL,
  `id_siswa` int(10) NOT NULL,
  `nama_kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`id_walikelas`, `id_staf`, `id_kelas`, `id_siswa`, `nama_kelas`) VALUES
(4, 0, 11, 3, ''),
(6, 0, 22, 4, ''),
(10, 46, 23, 4, '12 Tkj 1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indeks untuk tabel `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indeks untuk tabel `rincian`
--
ALTER TABLE `rincian`
  ADD PRIMARY KEY (`id_rincian`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `staf_sekolah`
--
ALTER TABLE `staf_sekolah`
  ADD PRIMARY KEY (`id_staf`);

--
-- Indeks untuk tabel `uas`
--
ALTER TABLE `uas`
  ADD PRIMARY KEY (`id_uas`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `uts`
--
ALTER TABLE `uts`
  ADD PRIMARY KEY (`id_uts`);

--
-- Indeks untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`id_walikelas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mapel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2657;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `raport`
--
ALTER TABLE `raport`
  MODIFY `id_raport` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rincian`
--
ALTER TABLE `rincian`
  MODIFY `id_rincian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `staf_sekolah`
--
ALTER TABLE `staf_sekolah`
  MODIFY `id_staf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `uas`
--
ALTER TABLE `uas`
  MODIFY `id_uas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `uts`
--
ALTER TABLE `uts`
  MODIFY `id_uts` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `id_walikelas` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
