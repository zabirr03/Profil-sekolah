-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2022 pada 05.23
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `mapel` varchar(25) NOT NULL,
  `kode` varchar(8) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `mapel`, `kode`, `alamat`, `jenis_kelamin`, `gambar`) VALUES
(2, 'Drs.Busrani', 'kepala Sekolah', '', '', 'Laki-laki', '1652937613_4.jpg'),
(3, 'Alza Syofyan Andri,B.S.Pd', 'Wakil Kepala Sekolah', '', '', 'Laki-laki', '1652937567_2.jpg'),
(4, 'Agusrizal S.A M', 'Kesiswaan', '', '', 'Laki-laki', '1652937549_3.png'),
(5, 'Tri Kurniawati', 'Siscomdig', '', '', 'Perempuan', '1653020723_2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(5) NOT NULL,
  `telpon` char(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `telpon`, `email`, `ig`, `fb`) VALUES
(1, '075170053301', 'smkn1sintuktobohgadang@yahoo.com', 'https://instagram.com/\r\n<br>smkn1_sintuktobohgadang?igshid=YmMyMTA2M2Y= ', 'https://www.facebook.com/\r\n<br>SMKN-1-Sintuk-Toboh-Gadang-607469339348987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarana_prasarana`
--

CREATE TABLE `sarana_prasarana` (
  `id_sp` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `foto` varchar(288) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sarana_prasarana`
--

INSERT INTO `sarana_prasarana` (`id_sp`, `nama`, `foto`, `deskripsi`) VALUES
(2, 'Foto Bersama Kepsek ', '1652943951_1.jpg', ' '),
(3, 'Foto guru', '1652943987_2.jpg', ' '),
(4, 'Lomba Memasak', '1652944005_3.jpg', ''),
(5, 'Foto Bareng ', '1652944035_4.jpg', ''),
(6, 'Foto Bareng lagi', '1652944069_5.jpg', ''),
(7, 'SDYA(sama dengan yang diatas)', '1652944095_6.jpg', ' '),
(8, 'Foto Bareng pakai baju putih,b', '1652944188_7.jpg', ''),
(9, 'Ruang guru', '1652944215_smk2.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(5) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `isi`) VALUES
(1, 'SMK Negeri 1 Sintuk Toboh Gadang adalah tempat penulis bertugas, merupakan salah satu sekolah menengah kejuruan yang ada di Kabupaten Padang pariaman yang terletak di Jl. Raya Lubuk Alung – Pauh Kambar KM. 4, kenagarian Toboh Gadang Kecamatan Sintuk Toboh Gadang Kabupaten Padang pariaman, lebih kurang 5 km dari Parit Malintang ibu kota kabupaten Padangpariaman.\r\n<br>\r\n\r\nSMK Negeri 1 Sintuk Toboh Gadang dibangun tahun 2007 di atas tanah seluas 2,6 hektar milik pribadi Haji Jamaris Palapa yang telah dihibahkan kepada Pemerintah Kabupaten Padang pariaman. Pada bulan Juli Tahun Pelajaran 2007/2008 SMK Negeri 1 Sintuk Toboh Gadang mulai menerima murid baru (siswa kelas X) sebanyak 85 orang (tiga rombongan belajar).  Program Studi Keahlian yang dibuka adalah Pariwisata dan Tata Boga, dengan Kompetensi Keahlian “Akomodasi Perhotelan” dan “Jasa Boga”. Tahun Pelajaran 2008/2009 berdasarkan rekomendasi Kepala Dinas Pendidikan Kabupaten Padang pariaman SMK Negeri 1 Sintuk Toboh Gadang menambah Program Studi Keahlian Teknik Komputer dan Informatika dengan Kompetensi Keahlian “Rekayasa Perangkat Lunak” dan “Teknik Komputer  dan Jaringan”.\r\n<br>\r\n”. Dikarenakan banyaknya  tamatan SMP/Sederajat yang berminat terhadap Paket Keahlian “Teknik Sepeda Motor”, sementara untuk SMK Negeri yang ada di Kabupaten Padang Pariaman khususnya Kecamatan Sintuk Toboh Gadang Gadang dan Lubuk Alung belum ada yang membuka Paket Keahlian tersebut maka Berdasarkan Izin dan Rekomendasi dari Dinas Pendidikan Kabupaten Padang Pariaman, pada Tahun Pelajaran 2016-2017 SMKN 1 Sintuk Toboh Gadang Menambah Program Studi Keahlian Teknik Otomotif dengan Paket Keahlian ” Teknik Sepeda Motor. Dalam perjalanannya SMK Negeri 1 Sintuk Toboh Gadang TP.2016/2017 siswanya berjumlah 1063 Orang dengan 39 rombongan belajar.\r\n<br>\r\nSebelum diresmikan SMK Negeri 1 Sintuk Toboh Gadang dipimpin oleh Drs. Rismadi Ramli, MM.  yang merupakan Kepala Sekolah Sementara.\r\n<br>\r\nMenjelang ditetapkannya Kepala Sekolah definitif (2007 sampai dengan 2008) setelah diresmikan oleh Bupati Padang pariaman tahun 2008 SMK Negeri 1 Sintuk Toboh Gadang dipimpin oleh Drs. Isrul Idrus sampai bulan februari tahun 2013, dari bulan februari 2013 sampai bulan Februari 2014 dipimpin oleh Sri Astuti, S.Pd. MM, dari Februari 2014 sampai sekarang SMK Negeri 1 Sintuk toboh gadang dipimpin oleh Drs. Busraini .\r\n<br>\r\n\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile1`
--

CREATE TABLE `tb_profile1` (
  `id_profil` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `npsn` int(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `akreditas` varchar(26) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profile1`
--

INSERT INTO `tb_profile1` (`id_profil`, `judul`, `gambar`, `npsn`, `alamat`, `akreditas`, `isi`) VALUES
(1, 'SMKN 1 Sintoga', '1652936633_smk3.jpg', 0, 'Sintuk Toboh Gadang', 'Akreditas B', 'SMKN 1 SINTOGA memiliki beberapa jurusan,yaitu:\r\n<br>\r\n1.Rekayasa Perangkat Lunak\r\n<br>\r\n2.Teknik Komunikasi dan Jaringan\r\n<br>\r\n3.Tata Boga\r\n<br>\r\n4.Perhotelan\r\n<br>\r\n5.Teknik Bisnis Sepeda Bermotor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile2`
--

CREATE TABLE `tb_profile2` (
  `id_pf` int(5) NOT NULL,
  `npsn` int(30) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `kepemilikan` varchar(25) NOT NULL,
  `sk_pendirian` char(25) NOT NULL,
  `tanggal_sk_pendirian` date NOT NULL,
  `sk_izin` char(25) NOT NULL,
  `tanggal_sk_izin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profile2`
--

INSERT INTO `tb_profile2` (`id_pf`, `npsn`, `status`, `pendidikan`, `kepemilikan`, `sk_pendirian`, `tanggal_sk_pendirian`, `sk_izin`, `tanggal_sk_izin`) VALUES
(1, 10305575, 'Negeri', 'SMK', 'Pemerintah Daerah', '106/KEP/BPP/2008', '2008-01-25', '106/KEP/BPP/2008', '2008-01-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(8) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `foto`) VALUES
(1, 'Admin', 'Admin@gmail.com', '21c3134ee5edcb618c4f9aae358d73a7', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_vm` int(5) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_vm`, `visi`, `misi`) VALUES
(1, 'Terwujudnya tamatan yang taqwa,cerdas,terampil,produktif dan berbudi pekerti luhur', '1.Mendidik siswa menjadi tamatan yang berkualitas\r\n<br>\r\n2.Mendidikan siswa menjadi tamatan yang mempunyai etos kerja dan mampu menciptakan lapangan kerja\r\n<br>\r\n3.Menyiapkan tamatan yang terampil untuk memasuki dunia kerja\r\n<br>\r\n4.Menyiapkan tamatan untuk melanjutkan pendidikan ke jenjang yang lebih tinggi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `tb_profile1`
--
ALTER TABLE `tb_profile1`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_profile2`
--
ALTER TABLE `tb_profile2`
  ADD PRIMARY KEY (`id_pf`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_vm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `sarana_prasarana`
--
ALTER TABLE `sarana_prasarana`
  MODIFY `id_sp` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_profile1`
--
ALTER TABLE `tb_profile1`
  MODIFY `id_profil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_profile2`
--
ALTER TABLE `tb_profile2`
  MODIFY `id_pf` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_vm` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
