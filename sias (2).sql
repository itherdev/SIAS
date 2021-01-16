-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2021 pada 15.55
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sias`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_arsip`
--

CREATE TABLE `data_arsip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klarifikasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jenis_arsip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` enum('p','l') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik_ortu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `data_arsip`
--

INSERT INTO `data_arsip` (`id`, `kode_klarifikasi`, `no_register`, `tahun`, `jenis_arsip`, `nik`, `nama`, `jenis_kelamin`, `tempat`, `tgl_lahir`, `alamat`, `nama_ortu`, `nik_ortu`, `lokasi`, `ket`, `status`, `lampiran`, `created_at`, `updated_at`) VALUES
(1, '41435352', '2352521', 2020, 'Surat Masuk', '123146457969', 'Mila', 'p', 'Cirebon', '2000-06-04', 'Kelurahan Karya Mulya', 'Toto', '12314645785', 'Rak 1', 'oke', 'oke', 'sharing.png', NULL, NULL),
(4, '17920w12e', '23525215', 2020, 'Surat Masuk 1', '2940182414232', 'Ina', 'p', 'Cirebon', '2020-12-02', 'Kesambi', 'Tito', '61841042382983', 'Rak 1', 'oke', 'oke', 'BabIV.pdf', NULL, NULL),
(5, '134', '456', 2020, 'kelahiran', '3566788', 'inas', 'p', 'cirebon', '1999-10-17', 'tengahtani', 'didi', '35656778', 'rak', 'terlambat', 'aktif', 'Untitled.png', NULL, NULL),
(6, '472.11', '200', 2017, 'kelahiran', '3274090897999998', 'rendy', 'p', 'pegambiran', '2017-02-10', 'pegambiran', 'dulo', '327409000890001', 'rak 1', 'umum', 'anak', '07-10-2020-19.45.59(6).pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_barang`
--

CREATE TABLE `data_barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_barang` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2020_09_11_032518_create_data_barang_table', 1),
(23, '2020_09_11_033453_add_nama_barang_to_data_barang_table', 1),
(25, '2020_09_19_170009_add_column_to_users_table', 1),
(26, '2020_10_10_143656_create_operator_table', 1),
(29, '2020_10_24_165457_create_opname_buku_table', 1),
(34, '2020_11_09_090937_create_surat_masuk_table', 2),
(35, '2020_11_09_145528_create_surat_keluar_table', 3),
(37, '2020_11_30_071543_create_peminjaman_berkas_table', 4),
(40, '2020_12_03_131718_create_peminjaman_buku_table', 5),
(41, '2020_12_03_141224_create_pengembalian_berkas_table', 6),
(43, '2020_12_06_173112_create_data_arsip_table', 8),
(46, '2020_12_12_022106_create_pengembalian_buku_table', 9),
(47, '2020_12_12_022320_create_opname_berkas_table', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operator`
--

CREATE TABLE `operator` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_op` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_op` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `operator`
--

INSERT INTO `operator` (`id`, `id_op`, `nm_op`, `level`, `created_at`, `updated_at`) VALUES
(1, '123456', 'master', 'login sias', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `opname_berkas`
--

CREATE TABLE `opname_berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klarifikasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `kategori_berkas` enum('Umum','Terlambat I','Terlambat II','Istimewa','Pemutihan','IN','China') COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraian_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_boks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_boks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_perkembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `opname_berkas`
--

INSERT INTO `opname_berkas` (`id`, `kode_klarifikasi`, `no_berkas`, `tahun`, `kategori_berkas`, `uraian_berkas`, `jml_berkas`, `jml_boks`, `no_boks`, `lokasi`, `ket`, `tingkat_perkembangan`) VALUES
(2, '471932014', '7q9w1410', 2020, 'Umum', 'Surat keluar', '1', '2', '7234j9268', 'Rak 1', 'oke', 'Ada'),
(3, '628201y24', '72118491', 2020, 'Istimewa', 'Surat Masuk', '1', '1', '6283h29h56', 'Rak 1', 'oke', 'Ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `opname_buku`
--

CREATE TABLE `opname_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_klarifikasi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_buku` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `kategori_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_perkembangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `opname_buku`
--

INSERT INTO `opname_buku` (`id`, `kode_klarifikasi`, `no_buku`, `no_register`, `tahun`, `kategori_buku`, `lokasi`, `ket`, `tingkat_perkembangan`) VALUES
(1, 'KI-125', '123434', '136128', 2019, 'Surat Keluar', 'Rak 1', 'Pending', '312'),
(2, 'KI-12545', '123412', '1337E56', 2020, 'Surat Masuk', 'Rak 1', 'Pending', '312');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_berkas`
--

CREATE TABLE `peminjaman_berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `uraian_berkas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman_berkas`
--

INSERT INTO `peminjaman_berkas` (`id`, `no_berkas`, `tgl_pinjam`, `uraian_berkas`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(4, '2069', '2020-08-03', 'BERKAS AKTA KELAHIRAN AN. FATHIMAH ZAHROTUNNISA', 2019, '1', 'BU ERWIN', 'CAPIL', 'YENI ROYANA', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(5, '2068', '2020-08-03', 'BERKAS AKTA KELAHIRAN AN. MUHAMAD FATHIR AL FARIZI', 2019, '1', 'BU ERWIN', 'CAPIL', 'YENI ROYANA', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(6, '2067', '2020-08-03', 'BERKAS AKTA KELAHIRAN AN. NAFISATUL A.', 2019, '1', 'BU ERWIN', 'CAPIL', 'YENI ROYANA', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(7, '536', '2020-08-07', 'BERKAS AKTA KEMATIAN AN. DJUMANDI', 2019, '1', 'BU LEDY', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(8, '07/03/2020', '2020-08-13', 'KK DINAS AN. MAULANA YUSUF', 2020, '1', 'BU OPI', 'DAFDUK', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman_buku`
--

CREATE TABLE `peminjaman_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman_buku`
--

INSERT INTO `peminjaman_buku` (`id`, `no_buku`, `no_register`, `tgl_pinjam`, `uraian`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(3, '601-750', '711', '2020-08-03', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2017, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(4, '457-600', '502', '2020-08-03', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2009, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(5, '151-300', '212', '2020-08-04', 'BUKU REGISTER AKTA KELAHIRAN ISTIMEWA', 1998, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(6, '3601-3750', '3726', '2020-08-04', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2002, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(7, '1691-1840', '1768', '2020-08-04', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 1999, '1', 'BU ERWIN', 'CAPIL', 'RENNY RACHMATIKA, AMd', 'ARSIPARIS', 'PINJAM', NULL, NULL),
(8, '1551-1800', '1673', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2015, '1', 'BU ERWIN', 'CAPIL', 'RENNY RACHMATIKA, AMd', 'ARSIPARIS', 'PINJAM', NULL, NULL),
(9, '3146-3294', '3201', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2006, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(10, '1835-2287', '2200', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN ISTIMEWA', 2002, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(11, '151-300', '175', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2011, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL),
(12, '3001-3151', '3043', '2020-08-05', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 1993, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'PINJAM', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_berkas`
--

CREATE TABLE `pengembalian_berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` date NOT NULL,
  `uraian_berkas` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengembalian_berkas`
--

INSERT INTO `pengembalian_berkas` (`id`, `no_berkas`, `tgl_kembali`, `uraian_berkas`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(1, '131415341', '2020-12-03', 'Stovck Opname Surat', 2020, '1', 'Mila', 'ASFAGETEJR', 'Indah', 'Petugas', 'OKE', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian_buku`
--

CREATE TABLE `pengembalian_buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kembali` date NOT NULL,
  `uraian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` year(4) NOT NULL,
  `jml_berkas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_pengolah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pengembalian_buku`
--

INSERT INTO `pengembalian_buku` (`id`, `no_buku`, `no_register`, `tgl_kembali`, `uraian`, `tahun`, `jml_berkas`, `nama_peminjam`, `unit_pengolah`, `nama_petugas`, `kategori_petugas`, `status`, `created_at`, `updated_at`) VALUES
(1, '601-750', '456', '2020-10-12', 'BUKU REGISTER AKTA KELAHIRAN UMUM', 2019, '1', 'BU ERWIN', 'CAPIL', 'H. MAKHFUD', 'PEGAWAI ARSIP', 'KEMBALI', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `pengolah` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `no_surat`, `tgl_surat`, `pengolah`, `tujuan_surat`, `perihal`, `keterangan`) VALUES
(1, '2945/AB/X/I/2020', '2020-11-09', 'Kasubag Program Kepegawaian', 'Dinas Kominfo Cirebon', 'Undangan Rapat Koordinasi Kerja', 'Ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_agenda` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_surat` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_terima` date NOT NULL,
  `sumber_surat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perihal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `no_agenda`, `no_surat`, `tgl_surat`, `tgl_terima`, `sumber_surat`, `perihal`, `keterangan`) VALUES
(1, '001/AB/CDE/2020', '2939/LP/X/2020', '2020-11-15', '2020-11-15', 'Bupati Cirebon', 'Bupati Cirebon', 'Ok'),
(3, '002/B/CDL/2020', '2945/LP/X/I/2020', '2020-11-24', '2020-11-13', 'Dinas Kominfo Cirebon', 'Undangan Rapat Koordinasi Kerja', 'Ok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL),
(2, 'Istiharoh', 'master', 'admin@zoho.com', '2020-10-26 09:29:38', '$2y$10$plbNRGHWZJKHkpLP1Z8uOuO2fGtEw.epDzmtRhk9QNqy4V.J6gspK', 'b3dQ0Rn59ZodISq9hKBbOTPCAhUAF42nTafM45aZW2wRrl8Bp9rlJ2QeHxJg', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_arsip`
--
ALTER TABLE `data_arsip`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_arsip_kode_klarifikasi_unique` (`kode_klarifikasi`),
  ADD UNIQUE KEY `data_arsip_no_register_unique` (`no_register`);

--
-- Indeks untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_barang_kode_barang_unique` (`kode_barang`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `operator_id_op_unique` (`id_op`);

--
-- Indeks untuk tabel `opname_berkas`
--
ALTER TABLE `opname_berkas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opname_berkas_kode_klarifikasi_unique` (`kode_klarifikasi`);

--
-- Indeks untuk tabel `opname_buku`
--
ALTER TABLE `opname_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `opname_buku_kode_klarifikasi_unique` (`kode_klarifikasi`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `peminjaman_berkas`
--
ALTER TABLE `peminjaman_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengembalian_berkas`
--
ALTER TABLE `pengembalian_berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surat_keluar_no_surat_unique` (`no_surat`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `surat_masuk_no_agenda_unique` (`no_agenda`);

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
-- AUTO_INCREMENT untuk tabel `data_arsip`
--
ALTER TABLE `data_arsip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `operator`
--
ALTER TABLE `operator`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `opname_berkas`
--
ALTER TABLE `opname_berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `opname_buku`
--
ALTER TABLE `opname_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_berkas`
--
ALTER TABLE `peminjaman_berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `peminjaman_buku`
--
ALTER TABLE `peminjaman_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_berkas`
--
ALTER TABLE `pengembalian_berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengembalian_buku`
--
ALTER TABLE `pengembalian_buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
