-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2023 at 08:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduans`
--

CREATE TABLE `aduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_aplikasi` bigint(20) UNSIGNED NOT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `aplikasis`
--

CREATE TABLE `aplikasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_opd` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_aplikasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prioritas` enum('Low','Medium','High','Urgent') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_projek` enum('Disposisi Surat','Analisis Awal','Analisis Kebutuhan','Coding','Testing','UAT','Selesai','Ditolak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_aplikasi` enum('Running','Perbaikan','Tidak Aktif','Semi Aktif','Progres','Antrian','Inisiasi') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_aplikasi` enum('WEB','Aplikasi') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_mulai` datetime DEFAULT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `progres` int(11) NOT NULL DEFAULT 0,
  `no_urut` int(11) DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arsip` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aplikasis`
--

INSERT INTO `aplikasis` (`id`, `id_opd`, `nama_aplikasi`, `deskripsi`, `prioritas`, `status_projek`, `status_aplikasi`, `type_aplikasi`, `tgl_mulai`, `tgl_selesai`, `progres`, `no_urut`, `keterangan`, `cp`, `slug`, `arsip`, `created_at`, `updated_at`) VALUES
(1, 1, 'lpse.magetan.go.id', 'layanan pengelolaan teknologi informasi untuk memfasilitasi pelaksanaan Pengadaan Barang/Jasa secara elektronik', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'lpse-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(2, 1, 'jdih.magetan.go.id', 'Aplikasi jaringan dokumentasi hukum terintegrasi dengan provinsi', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'jdih-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(3, 1, 'SIMDALEV | RFK ADBANG', 'Aplikasi Untuk merekap Data RFK ( Adbang )', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'simdalev-rfk-adbang', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(4, 1, 'simbatan', 'Aplikasi Sistem Informasi Pengadaan barang dan Jasa', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Development', NULL, 'simbatan', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(5, 1, 'E- SKM', 'Survey Kepuasan Masyarakat - Ortala', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'e-skm', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(6, 1, 'SIHARKO', 'Aplikasi ketersedian harga bahan pokok  (bagian perekonomian)', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'siharko', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(7, 3, 'magetankab.sipd.kemendagri.go.id & penatausahaan', 'Aplikasi pemerintah daerah milik kemendagri. Kominfo bertugas untuk mendampingi dan Inisiasi', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Perbaikan RAK kelurahan dan bagian yang masih error di SIPD pusat dan backup data aspirasi masyarakat', NULL, 'magetankab-sipd-kemendagri-go-id-penatausahaan', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(8, 3, 'damai.magetan.go.id', 'Aplikasi yang memuat data perencanaan pembangunan daerah, analisis dan profile pembangunan daerah', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'damai-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(9, 3, 'RUMAH INOVASI', 'Aplikasi untuk mengelola inovasi dari OPD dan masyarakat', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Menunggu UAT', NULL, 'rumah-inovasi', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(10, 3, 'sakip.magetan.go.id', 'Aplikasi untuk menampilkan hasil SAKIP dari rpjm', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'sakip-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(11, 3, 'sippd untuk RKPD dan PPAS (e-planning.magetan.go.id/sippd)', 'Masih bagian dari e-planning tapi dengan user dan modul aplikasi tersendiri', NULL, 'Disposisi Surat', 'Antrian', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'sippd-untuk-rkpd-dan-ppas-e-planning-magetan-go-id-sippd', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(12, 3, 'rpjm.magetan.go.id', 'Aplikasi input data RPJM', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'rpjm-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(13, 3, 'SAKIP New', 'Ortala dan Bappeda', NULL, 'Disposisi Surat', 'Antrian', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'sakip-new', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(14, 3, 'SIMDALEV | Monev', 'Aplikasi untuk mencetak data monev', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'simdalev-monev', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(15, 4, 'e-planning.magetan.go.id', 'Aplikasi meliputi RENSTRA, RKPD, RENJA, manajemen SSH, integrasi dengan e-budgeting, SIPD, integrasi dengan SIPD kemendagri, Musrembang kecamatan.', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Sudah tidak di pakai, tapi datanya mungkin masih digunakan untuk monev', NULL, 'e-planning-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(16, 5, 'kesbangpol.magetan.go.id', 'Aplikasi rekapitulasi perhitungan suara pemilu', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Dipakai ketika masa pemilu atau pilkada', NULL, 'kesbangpol-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(17, 5, 'simpeg.magetan.go.id', 'Aplikasi data kepegawaian, e-file, absensi, kenaikan pangkat, e-personal, ', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'simpeg-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(18, 5, 'e-personal (Mobile)', 'Aplikasi untuk melihat data ASN di magetan', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Data bisa dilihat di simpeg', NULL, 'e-personal-mobile', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(19, 5, 'Redok/ E-file', 'Aplikasi untuk arsip file PNS. Bagian dari SIMPEG', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'redok-e-file', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(20, 5, 'SIPEKAT', 'Aplikasi kenaikan pangkat. Bagian dari simpeg milik BKD', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'sipekat', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(21, 5, 'e-kinerja.magetan.go.id', 'Aplikasi untuk penilaian kinerja ASN', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'e-kinerja-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(22, 6, 'e-kinerja (Mobile)', 'e-kin versi mobile', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Aplikasi pihak ke 3(ITS), Masih testing', NULL, 'e-kinerja-mobile', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(23, 9, 'siskeudes (Desktop)', 'Pendampingan penerapan aplikasi keuangan desa yang dikelola oleh bapernas', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Aplikasi dari BPKB, servernya di kominfo', NULL, 'siskeudes-desktop', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(24, 9, 'mail.magetan.go.id', 'Domain email magetan', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'mail-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(25, 9, 'registrasi.magetan.go.id', 'Aplikasi pendaftaran domain dan email', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'registrasi-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(26, 9, 'sideskel.magetan.go.id', 'Aplikasi website desa dengan berbagai layanan terintegrasi', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'sideskel-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(27, 9, 'lppl.magetan.go.id', 'Aplikasi untuk streaming radio magetan indah', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'lppl-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(28, 9, 'lapak.magetan.go.id', 'Aplikasi jual beli UMKM', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'lapak-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(29, 9, 'covid19.magetan.go.id', 'Aplikasi untuk update covid 19', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'covid19-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(30, 9, 'ppid.magetan.go.id', 'Aplikasi pejabat pengelola informasi dan komunikasi', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'ppid-magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(31, 9, 'magetan.go.id', 'Website magetan versi 1', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'magetan-go-id', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(32, 9, 'GITLAB', 'Aplikasi manajemen project dan repository code lokal untuk efiensi pengembangan aplikasi di pemkab', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'gitlab', 'no', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(33, 9, 'Admin Data Center', 'Monitoring proxmox sebagai aplikasi manajemen data center mendampingi tim Jaringan', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'admin-data-center', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(34, 9, 'vesta panel WEBOPD', 'Aplikasi manajemen web OPD yang dikelola oleh tim tata kelola. web masing\" dinas, lihat servernya', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'vesta-panel-webopd', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(35, 9, 'NEXTCLOUD', 'Aplikasi untuk file sharing, form sharing dan chatting', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'nextcloud', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(36, 9, 'dprd.magetan.go.id', 'Web dprd untuk informasi dan input pokir juga aspirasi masyaraka', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'dprd-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(37, 9, 'e-office', 'Aplikasi surat menyurat dan pengarsipan', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Development', NULL, 'e-office', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(38, 9, 'Dashboard magetan | SIEMA', 'Aplikasi magetan dalam angka', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'dashboard-magetan-siema', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(39, 9, 'magetan.go.id', 'Website magetan versi 2', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Menunggu kepastian IKP untuk Go Live', NULL, 'magetan-go-id-2', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(40, 9, 'Ruang rapat', 'Aplikasi untuk pemesanan ruang rapat', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Development', NULL, 'ruang-rapat', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(41, 9, 'Absensi mobile', 'Aplikasi absensi PNS di magetan mobile', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'absensi-mobile', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(42, 9, 'E- Buku Tamu', 'Aplikasi Untuk mencatat Tamu ', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Development', NULL, 'e-buku-tamu', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(43, 9, 'Visit Magetan', 'Aplikasi Web untuk mengenalkan Magetan (IKP)', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Development', NULL, 'visit-magetan', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(44, 10, 'Bantuan dan hibah', 'Aplikasi untuk mengelola bantuan dan hibah', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Permintaan bupati. OPD PJ belum ada, masih menunggu untuk presentasi konsep ke kadin baru', NULL, 'bantuan-dan-hibah', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(45, 10, 'SIMDA KEUANGAN (Desktop)', 'Pendampingan penerapan simda keuangan yang dikelola oleh BPPKAD', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Aplikasi dari BPKP', NULL, 'simda-keuangan-desktop', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(46, 10, 'ASET (Desktop)', 'Aplikasi untuk pendataan aset daerah', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'aset-desktop', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(47, 10, 'sismiop (Desktop)', 'Aplikasi PBB', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Server di bappeda', NULL, 'sismiop-desktop', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(48, 10, 'e-bphtb.magetan.go.id', 'Aplikasi untuk pembayaran pajak terintegrasi', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Nitip server di kominfo', NULL, 'e-bphtb-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(49, 10, 'SIMDA BOS (Desktop)', 'Aplikasi keuangan untuk bantuan opersional sekolah', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Nitip server di kominfo', NULL, 'simda-bos-desktop', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(50, 10, 'SIMGAJI (Desktop)', 'Aplikasi untuk penggajian', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Nitip server di kominfo', NULL, 'simgaji-desktop', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(51, 10, 'esptpd', 'Aplikasi Pajak', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Nitip server di kominfo', NULL, 'esptpd', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(52, 10, 'Payment Gateway', 'BPPKAD bagian keuangan kerja sama dengan BNI dan kantor pos untuk pembayaran PBB dan ebhtp', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Perlu ke bagian keuangan untuk alur kerja sismiop dan ebhtp', NULL, 'payment-gateway', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(53, 11, 'antrian-disduk.magetan.go.id', 'Aplikasi pendaftaran antrian pelayanan', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'antrian-disduk-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(54, 14, 'PAK TANI', 'Aplikasi rekap data tanaman', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'pak-tani', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(55, 16, 'PUPR SDA', 'Aplikasi pencatatan, pengelolaan, pelaporan data hujan dan realisasi pengairan terhadap tanman', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Minta penambahan fitur limpasan', NULL, 'pupr-sda', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(56, 17, 'SIMPKB  (pihak ke3)', 'Aplikasi uji KIR lokal, pendaftaran dan cetak hasil uji KIR lokal, aplikasi android untuk pendaftaran online, aplikasi untuk sinkronisasi data pemkab ke aplikasi kementerian', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Nitip server di kominfo', NULL, 'simpkb-pihak-ke3', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(57, 17, 'e-kir (pihak ke3) mobile', 'Aplikasi uji KIR lokal, pendaftaran dan cetak hasil uji KIR lokal, aplikasi android untuk pendaftaran online, aplikasi untuk sinkronisasi data pemkab ke aplikasi kementerian versi mobile', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Nitip server di kominfo', NULL, 'e-kir-pihak-ke3-mobile', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(58, 19, 'Bantuan perkim', 'Aplikasi untuk bantuan rumah tidak layak huni', NULL, 'Disposisi Surat', 'Antrian', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'bantuan-perkim', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(59, 19, 'Pengajuan siteplan', 'Aplikasi untuk vendor mengajukan pendaftaran siteplan', NULL, 'Disposisi Surat', 'Antrian', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'pengajuan-siteplan', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(60, 21, 'siks.magetan.go.id', 'Aplikasi untuk manajemen data kemiskinan. Prioritas bupati untuk pengentasan kemiskinan dan distribusi bantuan tepat sasaran', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Data saja yang sudah dipakai, aplikasi belum dipakai', NULL, 'siks-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(61, 25, 'perpusda.magetan.go.id', 'Aplikasi perpustakaan online', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'perpusda-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(62, 25, 'sikn.magetan.go.id', 'Aplikasi arsip', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Data tidak update', NULL, 'sikn-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(63, 25, 'Aplikasi arsip inaktif', 'Aplikasi untuk menyimpan arsip ', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Development', NULL, 'aplikasi-arsip-inaktif', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(64, 15, 'ketenagakerjaan.magetan.go.id', 'Aplikasi pendataan tenaga kerja, data transmigrasi, data perusahaan. ', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'ketenagakerjaan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(65, 20, 'ppdb.magetan.go.id', 'Aplikasi PPDB tingkat SMP', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'ppdb-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(66, 20, 'Integrasi dapodik', 'aplikasi mencari anak tidak sekolah ( perencanaan)', NULL, 'Disposisi Surat', 'Antrian', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'integrasi-dapodik', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(67, 26, 'mpp.magetan.go.id', 'aplikasi antrian mall pelayanan publik', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'mpp-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(68, 26, 'simpadu.magetan.go.id', 'Aplikasi perijinan', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'simpadu-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(69, 12, 'simpus.magetan.go.id', 'Aplikasi Puskesmas', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'simpus-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(70, 12, 'Aplikasi Stunting', 'Aplikasi Stunting', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, NULL, NULL, 'aplikasi-stunting', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(71, 12, 'Sistem informasi manajemen logistik IFK', 'Sistem informasi manajemen logistik IFK', NULL, 'Disposisi Surat', 'Inisiasi', 'Aplikasi', NULL, NULL, 0, NULL, 'Analisis', NULL, 'sistem-informasi-manajemen-logistik-ifk', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(72, 1, 'bpbj.magetan.go.id', 'Web OPD bagian pengadaan barang dan jasa', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'bpbj-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(73, 1, 'ekonomi.magetan.go.id', 'Web OPD bagian perekonomian', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'ekonomi-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(74, 1, 'kesrasetda.magetan.go.id', 'Web OPD bagian administrasi dan kesejahteraan rakyat', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'kesrasetda-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(75, 1, 'humasprotokol.magetan.go.id', 'Web OPD bagian humas', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'humasprotokol-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(76, 1, 'tapem.magetan.go.id', 'Web OPD tata Pemerintahan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'tapem-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(77, 1, 'organisasi.magetan.go.id', 'Web OPD bagian organisasi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'organisasi-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(78, 2, 'inspektorat.magetan.go.id', 'WEB OPD inspektorat', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'inspektorat-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(79, 3, 'bappedalitbang.magetan.go.id', 'Web OPD bappeda litbang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'bappedalitbang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(80, 4, 'bakesbangpol.magetan.go.id', 'Web OPD Bakesbangpol', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'bakesbangpol-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(81, 5, 'bkd.magetan.go.id', 'Web OPD Badan KepegawaianDaerah', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'bkd-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(82, 6, 'dpmd.magetan.go.id', 'Web OPD Dinas Pemberdayaan Masyarakat dan desa', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dpmd-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(83, 7, 'dppkbpppa.magetan.go.id', 'Web OPD DPP KB PP PA', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dppkbpppa-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(84, 8, 'dlh.magetan.go.id', 'Web OPD Dinas Lingkungan Hidup', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dlh-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(85, 9, 'kominfo.magetan.go.id', 'Web OPD DISKOMINFO', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'kominfo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(86, 10, 'bppkad.magetan.go.id', 'Web OPD BPPKAD', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'bppkad-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(87, 11, 'dispenduk.magetan.go.id', 'Web OPD DISPENDUK', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dispenduk-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(88, 12, 'dinkes.magetan.go.id', 'Web OPD Dinas Kesehatan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dinkes-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(89, 13, 'disperindag.magetan.go.id', 'Web OPD DISPERINDAG', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'disperindag-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(90, 14, 'tphpkp.magetan.go.id', 'Web OPD TPHPKP', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'tphpkp-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(91, 15, 'disnaker.magetan.go.id', 'Web OPD DISNAKER', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'disnaker-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(92, 16, 'pupr.magetan.go.id', 'Web OPD PUPR', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'pupr-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(93, 17, 'dishub.magetan.go.id', 'Web OPD Dishub', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dishub-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(94, 18, 'disnakkan.magetan.go.id', 'Web OPD DISNAKKAN', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'disnakkan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(95, 19, 'dinaspkp.magetan.go.id', 'Web OPD PERKIM', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dinaspkp-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(96, 20, 'dikpora.magetan.go.id', 'Web OPD DIKPORA', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dikpora-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(97, 21, 'dinsos.magetan.go.id', 'Web OPD Dinas Sosial', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dinsos-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(98, 22, 'wisatadanbudaya.magetan.go.id', 'Web OPD DISPARBUD', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'wisatadanbudaya-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(99, 23, 'dinkopum.magetan.go.id', 'Web OPD Dinas Koperasi dan Usaha Mikro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dinkopum-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(100, 24, 'bpbd.magetan.go.id', 'Web OPD BPBD', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'bpbd-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(101, 25, 'arpus.magetan.go.id', 'Web OPD Dinas Kearsipan dan Perpustakaan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'arpus-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(102, 26, 'dpmptsp.magetan.go.id', 'Web OPD DPMPTSP', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'dpmptsp-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(103, 27, 'satpolppdamkar.magetan.go.id', 'Web OPD SATPOLPPDAMKAR', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'satpolppdamkar-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(104, 28, 'rsud.magetan.go.id', 'Web OPD RSUD Dr. Sayidiman', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'rsud-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(105, 29, 'magetankec.magetan.go.id', 'Web OPD Kecamatan Magetan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'magetankec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(106, 30, 'panekankec.magetan.go.id', 'Web OPD Kecamatan Panekan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'panekankec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(107, 31, 'plaosankec.magetan.go.id', 'Web OPD Kecamatan Plaosan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'plaosankec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(108, 32, 'poncolkec.magetan.go.id', 'Web OPD Kecamatan Poncol', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'poncolkec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(109, 33, 'parangkec.magetan.go.id', 'Web OPD Kecamatan Parang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'parangkec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(110, 34, 'lembeyankec.magetan.go.id', 'Web OPD Kecamatan Lembeyan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'lembeyankec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(111, 35, 'kawedanankec.magetan.go.id', 'Web OPD Kecamatan Kawedanan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'kawedanankec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(112, 36, 'takerankec.magetan.go.id', 'Web OPD Kecamatan Takeran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'takerankec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(113, 37, 'bendokec.magetan.go.id', 'Web OPD Kecamatan Bendo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'bendokec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(114, 38, 'maospatikec.magetan.go.id', 'Web OPD Kecamatan Maospati', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'maospatikec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(115, 39, 'baratkec.magetan.go.id', 'Web OPD Kecamatan Barat', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'baratkec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(116, 40, 'karangrejokec.magetan.go.id', 'Web OPD Kecamatan Karangrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'karangrejokec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(117, 41, 'kartoharjokec.magetan.go.id', 'Web OPD Kecamatan Kartoharjo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'kartoharjokec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(118, 42, 'karaskec.magetan.go.id', 'Web OPD Kecamatan Karas', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'karaskec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(119, 43, 'sukomorokec.magetan.go.id', 'Web OPD Kecamatan Sukomoro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, ' ', NULL, 'sukomorokec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(120, 44, 'ngariboyokec.magetan.go.id', 'Web OPD Kecamatan Ngariboyo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'ngariboyokec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(121, 45, 'nguntoronadikec.magetan.go.id', 'Web OPD Kecamatan Nguntoronadi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'nguntoronadikec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(122, 46, 'sidorejokec.magetan.go.id', 'Web OPD Kecamatan Sidorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'sidorejokec-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(123, 47, 'puskesmas-goranggarengtaji.magetan.go.id', 'Web Puskesmas Taji Gorang Gareng', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'puskesmas-goranggarengtaji-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(124, 48, 'puskesmas-takeran.magetan.go.id', 'Web Puskesmas Takeran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Masih Development', NULL, 'puskesmas-takeran-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(125, 49, 'puskesmas-kawedanan.magetan.go.id', 'Web Puskesmas Kawedanan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, 'Tidak update', NULL, 'puskesmas-kawedanan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(126, 50, 'widorokandang.magetan.go.id', 'Web OPD Desa Widorokandang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'widorokandang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(127, 51, 'sidokerto.magetan.go.id', 'Web OPD Desa Sidokerto', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sidokerto-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(128, 52, 'sumbersawit.magetan.go.id', 'Web OPD Desa Sumbersawit', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sumbersawit-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(129, 53, 'sidomulyo.magetan.go.id', 'Web OPD Desa Sidomulyo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sidomulyo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(130, 54, 'getasanyar.magetan.go.id', 'Web OPD Desa Getasanyar', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'getasanyar-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(131, 55, 'sidorejo.magetan.go.id', 'Web OPD Desa Sidorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sidorejo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(132, 56, 'durenan.magetan.go.id', 'Web OPD Desa Durenan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'durenan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(133, 57, 'kalang.magetan.go.id', 'Web OPD Desa Kalang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kalang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(134, 58, 'campursari.magetan.go.id', 'Web OPD Desa Campursari', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'campursari-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(135, 59, 'sambirobyong.magetan.go.id', 'Web OPD Desa Sambirobyong', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sambirobyong-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(136, 60, 'driyorejo.magetan.go.id', 'Web OPD Desa Driyorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'driyorejo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(137, 61, 'kenongomulyo.magetan.go.id', 'Web OPD Desa Kenongomulyo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kenongomulyo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(138, 62, 'purworejo.magetan.go.id', 'Web OPD Desa Purworejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'purworejo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(139, 63, 'simbatan.magetan.go.id', 'Web OPD Desa Simbatan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'simbatan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(140, 64, 'nguntoronadi.magetan.go.id', 'Web OPD Desa Nguntoronadi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'nguntoronadi-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(141, 65, 'petungrejo.magetan.go.id', 'Web OPD Desa Petungrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'petungrejo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(142, 66, 'goranggareng.magetan.go.id', 'Web OPD Desa Goranggareng', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'goranggareng-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(143, 67, 'semen.magetan.go.id', 'Web OPD Desa Semen', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'semen-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(144, 68, 'sukowidinguntoronadi.magetan.go.id', 'Web OPD Desa Sukowidi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sukowidinguntoronadi-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(145, 69, 'banjarejongariboyo.magetan.go.id', 'Web OPD Desa Banjarejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'banjarejongariboyo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(146, 70, 'banjarpanjang.magetan.go.id', 'Web OPD Desa Banjarpanjang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'banjarpanjang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(147, 71, 'banyudono.magetan.go.id', 'Web OPD Desa Banyudono', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'banyudono-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(148, 72, 'mojopurno.magetan.go.id', 'Web OPD Desa Mojopurno', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mojopurno-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(149, 73, 'ngariboyo.magetan.go.id', 'Web OPD Desa Ngariboyo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngariboyo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(150, 74, 'balegondo.magetan.go.id', 'Web OPD Desa Balegondo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'balegondo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(151, 75, 'baleasri.magetan.go.id', 'Web OPD Desa Baleasri', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'baleasri-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(152, 76, 'sumberdukun.magetan.go.id', 'Web OPD Desa Sumberdukun', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sumberdukun-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(153, 77, 'selopanggung.magetan.go.id', 'Web OPD Desa Selopanggung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'selopanggung-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(154, 78, 'bangsri.magetan.go.id', 'Web OPD Desa Bangsri', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bangsri-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(155, 79, 'pendem.magetan.go.id', 'Web OPD Desa Pendem', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pendem-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(156, 80, 'selotinatah.magetan.go.id', 'Web OPD Desa Selotinatah', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'selotinatah-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(157, 81, 'karangmojo.magetan.go.id', 'Web OPD Desa Karangmojo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'karangmojo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(158, 82, 'bayemtaman.magetan.go.id', 'Web OPD Desa Bayemtaman', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bayemtaman-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(159, 83, 'bayemwetan.magetan.go.id', 'Web OPD Desa Bayemwetan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bayemwetan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(160, 84, 'jeruk.magetan.go.id', 'Web OPD Desa Jeruk', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jeruk-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(161, 85, 'gunungan.magetan.go.id', 'Web OPD Desa Gunungan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'gunungan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(162, 86, 'jajar.magetan.go.id', 'Web OPD Desa Jajar', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jajar-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(163, 87, 'ngelang.magetan.go.id', 'Web OPD Desa Ngelang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngelang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(164, 68, 'sukowidikartoharjo.magetan.go.id', 'Web OPD Desa Sukowidi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sukowidikartoharjo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(165, 89, 'pencol.magetan.go.id', 'Web OPD Desa Pencol', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pencol-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(166, 90, 'klurahan.magetan.go.id', 'Web OPD Desa Klurahan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'klurahan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(167, 91, 'mrahu.magetan.go.id', 'Web OPD Desa Mrahu', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mrahu-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(168, 92, 'kartoharjo.magetan.go.id', 'Web OPD Desa Kartoharjo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kartoharjo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(169, 93, 'ginuk.magetan.go.id', 'Web OPD Desa Ginuk', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ginuk-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(170, 94, 'botok.magetan.go.id', 'Web OPD Desa Botok', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'botok-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(171, 95, 'geplak.magetan.go.id', 'Web OPD Desa Geplak', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'geplak-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(172, 96, 'temenggungan.magetan.go.id', 'Web OPD Desa Temenggungan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'temenggungan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(173, 97, 'temboro.magetan.go.id', 'Web OPD Desa Temboro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'temboro-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(174, 98, 'jungke.magetan.go.id', 'Web OPD Desa Jungke', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jungke-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(175, 99, 'kuwon.magetan.go.id', 'Web OPD Desa Kuwon', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kuwon-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(176, 100, 'taji.magetan.go.id', 'Web OPD Desa Taji', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'taji-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(177, 101, 'sumursongo.magetan.go.id', 'Web OPD Desa Sumursongo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sumursongo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(178, 102, 'sobontoro.magetan.go.id', 'Web OPD Desa Sobontoro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sobontoro-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(179, 103, 'karas.magetan.go.id', 'Web OPD Desa Karas', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'karas-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(180, 104, 'kauman.magetan.go.id', 'Web OPD Desa Kauman', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kauman-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(181, 105, 'grabahan.magetan.go.id', 'Web OPD Desa Grabahan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'grabahan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(182, 106, 'prampelan.magetan.go.id', 'Web OPD Desa Prampelan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'prampelan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(183, 107, 'maron.magetan.go.id', 'Web OPD Desa Maron', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'maron-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(184, 108, 'gebyog.magetan.go.id', 'Web OPD Desa Gebyog', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'gebyog-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(185, 109, 'baluk.magetan.go.id', 'Web OPD Desa Baluk', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'baluk-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(186, 110, 'pelem.magetan.go.id', 'Web OPD Desa Pelem', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pelem-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(187, 111, 'manisrejo.magetan.go.id', 'Web OPD Kelurahan Manisrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'manisrejo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(188, 112, 'patihan.magetan.go.id', 'Web OPD Desa Patihan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'patihan-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(189, 113, 'sambirembe.magetan.go.id', 'Web OPD Desa Sambirembe', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sambirembe-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(190, 114, 'gondang.magetan.go.id', 'Web OPD Desa Gondang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'gondang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(191, 115, 'mantren.magetan.go.id', 'Web OPD Desa Mantren', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mantren-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(192, 116, 'karangrejo.magetan.go.id', 'Web OPD Kelurahan Karangrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'karangrejo-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(193, 117, 'klagen.magetan.go.id', 'Web OPD Desa Klagen', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'klagen-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(194, 118, 'bangunasri.magetan.go.id', 'Web OPD Desa Bangunasri', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bangunasri-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(195, 119, 'rejomulyobarat.magetan.go.id', 'Web OPD Desa Rejomulyo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'rejomulyobarat-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(196, 120, 'jonggrang.magetan.go.id', 'Web OPD Desa Jonggrang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jonggrang-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(197, 121, 'blaran.magetan.go.id', 'Web OPD Desa Blaran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'blaran-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(198, 122, 'panggung.magetan.go.id', 'Web OPD Desa Panggung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'panggung-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(199, 123, 'ngumpul.magetan.go.id', 'Web OPD Desa Ngumpul', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngumpul-magetan-go-id', 'no', '2023-07-20 03:58:57', '2023-07-20 03:58:57'),
(200, 124, 'manjungbarat.magetan.go.id', 'Web OPD Desa Manjung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'manjungbarat-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(201, 125, 'tebon.magetan.go.id', 'Web OPD Kelurahan Tebon', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tebon-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(202, 126, 'mangge.magetan.go.id', 'Web OPD Kelurahan Mangge', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mangge-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(203, 127, 'purwodadi.magetan.go.id', 'Web OPD Desa Purwodadi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'purwodadi-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(204, 128, 'karangsono.magetan.go.id', 'Web OPD Desa Karangsono', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'karangsono-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(205, 69, 'banjarejobarat.magetan.go.id', 'Web OPD Desa Banjarejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'banjarejobarat-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(206, 130, 'bogorejo.magetan.go.id', 'Web OPD Desa Bogorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bogorejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(207, 131, 'sempol.magetan.go.id', 'Web OPD Desa Sempol', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sempol-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(208, 132, 'mranggen.magetan.go.id', 'Web OPD Kelurahan Mranggen', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mranggen-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(209, 133, 'kraton.magetan.go.id', 'Web OPD Kelurahan Kraton', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kraton-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(210, 134, 'pesu.magetan.go.id', 'Web OPD Desa Pesu', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pesu-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(211, 135, 'sumberejo.magetan.go.id', 'Web OPD Desa Sumberejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sumberejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(212, 136, 'ngujung.magetan.go.id', 'Web OPD Desa Ngujung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngujung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(213, 137, 'ronowijayan.magetan.go.id', 'Web OPD Desa Ronowijayan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ronowijayan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(214, 138, 'suratmajan.magetan.go.id', 'Web OPD Desa Suratmajan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'suratmajan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(215, 139, 'pandeyan.magetan.go.id', 'Web OPD Desa Pandeyan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pandeyan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58');
INSERT INTO `aplikasis` (`id`, `id_opd`, `nama_aplikasi`, `deskripsi`, `prioritas`, `status_projek`, `status_aplikasi`, `type_aplikasi`, `tgl_mulai`, `tgl_selesai`, `progres`, `no_urut`, `keterangan`, `cp`, `slug`, `arsip`, `created_at`, `updated_at`) VALUES
(216, 140, 'klagengambiran.magetan.go.id', 'Web OPD Desa Klagen Gambiran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'klagengambiran-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(217, 141, 'maospati.magetan.go.id', 'Web OPD Kelurahan Maospati', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'maospati-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(218, 142, 'malang.magetan.go.id', 'Web OPD Desa Malang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'malang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(219, 143, 'gulun.magetan.go.id', 'Web OPD Desa Gulun', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'gulun-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(220, 144, 'tanjungsepreh.magetan.go.id', 'Web OPD Desa Tanjungsepreh', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tanjungsepreh-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(221, 145, 'sugihwaras.magetan.go.id', 'Web OPD Desa Sugihwaras', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sugihwaras-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(222, 146, 'kleco.magetan.go.id', 'Web OPD Desa Kleco', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kleco-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(223, 147, 'setren.magetan.go.id', 'Web OPD Desa Setren', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'setren-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(224, 148, 'duwet.magetan.go.id', 'Web OPD Desa Duwet', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'duwet-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(225, 149, 'bulugledeg.magetan.go.id', 'Web OPD Desa Bulugledeg', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bulugledeg-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(226, 150, 'bendo.magetan.go.id', 'Web OPD Kelurahan Bendo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bendo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(227, 151, 'carikan.magetan.go.id', 'Web OPD Desa Carikan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'carikan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(228, 152, 'kledokan.magetan.go.id', 'Web OPD Desa Kledokan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kledokan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(229, 153, 'lemahbang.magetan.go.id', 'Web OPD Desa Lemahbang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'lemahbang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(230, 154, 'soco.magetan.go.id', 'Web OPD Desa Soco', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'soco-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(231, 155, 'kinandang.magetan.go.id', 'Web OPD Desa Kinandang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kinandang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(232, 156, 'bulak.magetan.go.id', 'Web OPD Desa Bulak', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bulak-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(233, 157, 'tegalarum.magetan.go.id', 'Web OPD Desa Tegalarum', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tegalarum-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(234, 158, 'tanjung.magetan.go.id', 'Web OPD Desa Tanjung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tanjung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(235, 159, 'pingkuk.magetan.go.id', 'Web OPD Desa Pingkuk', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pingkuk-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(236, 160, 'belotan.magetan.go.id', 'Web OPD Desa Belotan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'belotan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(237, 161, 'dukuhbendo.magetan.go.id', 'Web OPD Desa Dukuh', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'dukuhbendo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(238, 162, 'truneng.magetan.go.id', 'Web OPD Desa Truneng', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'truneng-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(239, 163, 'bogemsukomoro.magetan.go.id', 'Web OPD Desa Bogem', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bogemsukomoro-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(240, 164, 'kentangan.magetan.go.id', 'Web OPD Desa Kentangan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kentangan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(241, 165, 'kembangan.magetan.go.id', 'Web OPD Desa Kembangan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kembangan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(242, 166, 'kedungguwo.magetan.go.id', 'Web OPD Desa Kedungguwo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kedungguwo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(243, 167, 'tinap.magetan.go.id', 'Web OPD Kelurahan Tinap', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tinap-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(244, 168, 'pojoksari.magetan.go.id', 'Web OPD Desa Pojoksari', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pojoksari-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(245, 169, 'bulu.magetan.go.id', 'Web OPD Desa Bulu', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bulu-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(246, 170, 'sukomoro.magetan.go.id', 'Web OPD Desa Sukomoro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sukomoro-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(247, 171, 'bibis.magetan.go.id', 'Web OPD Desa Bibis', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bibis-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(248, 172, 'bandar.magetan.go.id', 'Web OPD Desa Bandar', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bandar-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(249, 173, 'tambakmas.magetan.go.id', 'Web OPD Desa Tambakmas', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tambakmas-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(250, 174, 'tamanan.magetan.go.id', 'Web OPD Desa Tamanan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tamanan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(251, 175, 'kalangketi.magetan.go.id', 'Web OPD Desa Kalangketi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kalangketi-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(252, 69, 'banjarejopanekan.magetan.go.id', 'Web OPD Desa Banjarejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'banjarejopanekan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(253, 177, 'turi.magetan.go.id', 'Web OPD Desa Turi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'turi-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(254, 119, 'rejomulyopanekan.magetan.go.id', 'Web OPD Desa Rejomulyo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'rejomulyopanekan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(255, 179, 'jabung.magetan.go.id', 'Web OPD Desa Jabung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jabung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(256, 180, 'ngiliran.magetan.go.id', 'Web OPD Desa Ngiliran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngiliran-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(257, 181, 'bedagung.magetan.go.id', 'Web OPD Desa Bedagung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bedagung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(258, 68, 'sukowidipanekan.magetan.go.id', 'Web OPD Desa Sukowidi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sukowidipanekan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(259, 183, 'tapak.magetan.go.id', 'Web OPD Desa Tapak', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tapak-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(260, 124, 'manjungpanekan.magetan.go.id', 'Web OPD Desa Manjung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'manjungpanekan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(261, 185, 'sumberdodol.magetan.go.id', 'Web OPD Desa Sumberdodol', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sumberdodol-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(262, 186, 'tanjungsari.magetan.go.id', 'Web OPD Desa Tanjungsari', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tanjungsari-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(263, 187, 'panekan.magetan.go.id', 'Web OPD Kelurahan Panekan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'panekan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(264, 188, 'sidowayah.magetan.go.id', 'Web OPD Desa Sidowayah', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sidowayah-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(265, 189, 'wates.magetan.go.id', 'Web OPD Desa Wates', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'wates-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(266, 190, 'milangasri.magetan.go.id', 'Web OPD Desa Milangasri', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'milangasri-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(267, 191, 'cepoko.magetan.go.id', 'Web OPD Desa Cepoko', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'cepoko-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(268, 192, 'terung.magetan.go.id', 'Web OPD Desa Terung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'terung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(269, 193, 'sendangagung.magetan.go.id', 'Web OPD Desa Sendangagung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sendangagung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(270, 194, 'pacalan.magetan.go.id', 'Web OPD Desa Pacalan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pacalan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(271, 195, 'sarangan.magetan.go.id', 'Web OPD Kelurahan Sarangan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sarangan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(272, 196, 'dadi.magetan.go.id', 'Web OPD Desa Dadi', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'dadi-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(273, 197, 'plaosan.magetan.go.id', 'Web OPD Kelurahan Plaosan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'plaosan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(274, 198, 'buluharjo.magetan.go.id', 'Web OPD Desa Buluharjo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'buluharjo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(275, 199, 'sidomukti.magetan.go.id', 'Web OPD Desa Sidomukti', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sidomukti-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(276, 200, 'nitikan.magetan.go.id', 'Web OPD Desa Nitikan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'nitikan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(277, 201, 'sumberagung.magetan.go.id', 'Web OPD Desa Sumberagung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sumberagung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(278, 202, 'randugede.magetan.go.id', 'Web OPD Desa Randugede', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'randugede-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(279, 203, 'bogoarum.magetan.go.id', 'Web OPD Desa Bogoarum', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bogoarum-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(280, 204, 'bulugunung.magetan.go.id', 'Web OPD Desa Bulugunung (bulugunung)', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bulugunung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(281, 205, 'puntukdoro.magetan.go.id', 'Web OPD Desa Puntukdoro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'puntukdoro-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(282, 206, 'plumpung.magetan.go.id', 'Web OPD Desa Plumpung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'plumpung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(283, 207, 'ngancar.magetan.go.id', 'Web OPD Desa Ngancar', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngancar-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(284, 208, 'purwosari.magetan.go.id', 'Web OPD Desa Purwosari', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'purwosari-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(285, 209, 'baron.magetan.go.id', 'Web OPD Desa Baron', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'baron-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(286, 210, 'tambran.magetan.go.id', 'Web OPD Kelurahan Tambran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tambran-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(287, 211, 'kebonagung.magetan.go.id', 'Web OPD Kelurahan Kebonagung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kebonagung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(288, 212, 'sukowinangun.magetan.go.id', 'Web OPD Kelurahan Sukowinangun', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sukowinangun-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(289, 213, 'kepolorejo.magetan.go.id', 'Web OPD Kelurahan Kepolorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kepolorejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(290, 214, 'tawanganom.magetan.go.id', 'Web OPD Kelurahan Tawanganom', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tawanganom-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(291, 215, 'selosari.magetan.go.id', 'Web OPD Kelurahan Selosari', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'selosari-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(292, 216, 'candirejo.magetan.go.id', 'Web OPD Desa Candirejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'candirejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(293, 217, 'ringinagung.magetan.go.id', 'Web OPD Desa Ringinagung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ringinagung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(294, 218, 'magetankel.magetan.go.id', 'Web OPD Kelurahan Magetan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'magetankel-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(295, 219, 'bulukerto.magetan.go.id', 'Web OPD Kelurahan Bulukerto', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bulukerto-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(296, 220, 'mangkujayan.magetan.go.id', 'Web OPD Kelurahan Mangkujayan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mangkujayan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(297, 221, 'tambakrejo.magetan.go.id', 'Web OPD Desa Tambakrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tambakrejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(298, 222, 'mojorejo.magetan.go.id', 'Web OPD Desa Mojorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mojorejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(299, 223, 'genengan.magetan.go.id', 'Web OPD Desa Genengan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'genengan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(300, 224, 'karangrejokawedanan.magetan.go.id', 'Web OPD Desa Karangrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'karangrejokawedanan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(301, 225, 'ngadirejo.magetan.go.id', 'Web OPD Desa Ngadirejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngadirejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(302, 226, 'sugihrejo.magetan.go.id', 'Web OPD Desa Sugihrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sugihrejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(303, 227, 'selorejo.magetan.go.id', 'Web OPD Desa Selorejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'selorejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(304, 228, 'jambangan.magetan.go.id', 'Web OPD Desa Jambangan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jambangan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(305, 163, 'bogemkawedanan.magetan.go.id', 'Web OPD Desa Bogem', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bogemkawedanan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(306, 230, 'sampung.magetan.go.id', 'Web OPD Kelurahan Sampung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sampung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(307, 231, 'rejosari.magetan.go.id', 'Web OPD Kelurahan Rejosari', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'rejosari-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(308, 232, 'kawedanan.magetan.go.id', 'Web OPD Kelurahan Kawedanan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kawedanan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(309, 233, 'tulung.magetan.go.id', 'Web OPD Desa Tulung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tulung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(310, 234, 'ngunutkawedanan.magetan.go.id', 'Web OPD Desa Ngunut', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngunutkawedanan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(311, 235, 'pojok.magetan.go.id', 'Web OPD Desa Pojok', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pojok-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(312, 236, 'tladan.magetan.go.id', 'Web OPD Desa Tladan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tladan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(313, 237, 'garon.magetan.go.id', 'Web OPD Desa Garon', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'garon-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(314, 238, 'balerejo.magetan.go.id', 'Web OPD Desa Balerejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'balerejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(315, 239, 'ngentep.magetan.go.id', 'Web OPD Desa Ngentep', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngentep-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(316, 240, 'giripurno.magetan.go.id', 'Web OPD Desa Giripurno', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'giripurno-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(317, 241, 'mangunrejo.magetan.go.id', 'Web OPD Desa Mangunrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mangunrejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(318, 242, 'madigondo.magetan.go.id', 'Web OPD Desa Madigondo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'madigondo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(319, 243, 'kerang.magetan.go.id', 'Web OPD Desa Kerang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kerang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(320, 244, 'jomblang.magetan.go.id', 'Web OPD Desa Jomblang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'jomblang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(321, 245, 'waduk.magetan.go.id', 'Web OPD Desa Waduk', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'waduk-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(322, 246, 'kerik.magetan.go.id', 'Web OPD Desa Kerik', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kerik-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(323, 247, 'kepuhrejo.magetan.go.id', 'Web OPD Desa Kepuhrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kepuhrejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(324, 248, 'kuwonharjo.magetan.go.id', 'Web OPD Desa Kuwonharjo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kuwonharjo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(325, 249, 'takeran.magetan.go.id', 'Web OPD Kelurahan Takeran', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'takeran-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(326, 250, 'sawojajar.magetan.go.id', 'Web OPD Desa Sawojajar', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sawojajar-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(327, 251, 'tawangrejo.magetan.go.id', 'Web OPD Desa Tawangrejo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tawangrejo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(328, 252, 'duyung.magetan.go.id', 'Web OPD Desa Duyung', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'duyung-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(329, 253, 'kiringan.magetan.go.id', 'Web OPD Desa Kiringan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kiringan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(330, 254, 'krowe.magetan.go.id', 'Web OPD Desa Krowe', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'krowe-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(331, 255, 'tapen.magetan.go.id', 'Web OPD Desa Tapen', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tapen-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(332, 256, 'pupus.magetan.go.id', 'Web OPD Desa Pupus', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pupus-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(333, 257, 'nguri.magetan.go.id', 'Web OPD Desa Nguri', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'nguri-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(334, 258, 'kedungpanji.magetan.go.id', 'Web OPD Desa Kedungpanji', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kedungpanji-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(335, 161, 'dukuhlembeyan.magetan.go.id', 'Web OPD Desa Dukuh', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'dukuhlembeyan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(336, 260, 'tunggur.magetan.go.id', 'Web OPD Desa Tunggur', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tunggur-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(337, 261, 'lembeyanwetan.magetan.go.id', 'Web OPD Desa Lembeyan Wetan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'lembeyanwetan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(338, 262, 'lembeyankulon.magetan.go.id', 'Web OPD Kelurahan Lembeyan Kulon', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'lembeyankulon-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(339, 263, 'kediren.magetan.go.id', 'Web OPD Desa Kediren', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'kediren-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(340, 264, 'krajan.magetan.go.id', 'Web OPD Desa Krajan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'krajan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(341, 265, 'joketro.magetan.go.id', 'Web OPD Desa Joketro', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'joketro-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(342, 266, 'sundul.magetan.go.id', 'Web OPD Desa Sundul', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sundul-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(343, 267, 'pragak.magetan.go.id', 'Web OPD Desa Pragak', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'pragak-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(344, 268, 'tamanarum.magetan.go.id', 'Web OPD Desa Tamanarum', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'tamanarum-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(345, 269, 'parang.magetan.go.id', 'Web OPD Parang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'parang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(346, 270, 'ngaglik.magetan.go.id', 'Web OPD Desa Ngaglik', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngaglik-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(347, 234, 'ngunutparang.magetan.go.id', 'Web OPD Desa Ngunut', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'ngunutparang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(348, 272, 'trosono.magetan.go.id', 'Web OPD Desa Trosono', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'trosono-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(349, 273, 'bungkuk.magetan.go.id', 'Web OPD Desa Bungkuk', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'bungkuk-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(350, 274, 'mategal.magetan.go.id', 'Web OPD Desa Mategal', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'mategal-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(351, 275, 'nglopang.magetan.go.id', 'Web OPD Desa Nglopang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'nglopang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(352, 276, 'sayutan.magetan.go.id', 'Web OPD Desa Sayutan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sayutan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(353, 277, 'sombo.magetan.go.id', 'Web OPD Desa Sombo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'sombo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(354, 278, 'cileng.magetan.go.id', 'Web OPD Desa Cileng', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'cileng-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(355, 279, 'plangkrongan.magetan.go.id', 'Web OPD Desa Plangkrongan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'plangkrongan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(356, 280, 'alastuwo.magetan.go.id', 'Web OPD Kelurahan Alastuwo', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'alastuwo-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(357, 281, 'genilangit.magetan.go.id', 'Web OPD Desa Genilangit', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'genilangit-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(358, 282, 'janggan.magetan.go.id', 'Web OPD Desa Janggan', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'janggan-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(359, 283, 'gonggang.magetan.go.id', 'Web OPD Desa Gonggang', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'gonggang-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58'),
(360, 284, 'poncol.magetan.go.id', 'Web OPD Desa Poncol', NULL, 'Disposisi Surat', 'Inisiasi', 'WEB', NULL, NULL, 0, NULL, NULL, NULL, 'poncol-magetan-go-id', 'no', '2023-07-20 03:58:58', '2023-07-20 03:58:58');

-- --------------------------------------------------------

--
-- Table structure for table `data_opds`
--

CREATE TABLE `data_opds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_opd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Aktif',
  `kode_opd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_opds`
--

INSERT INTO `data_opds` (`id`, `nama_opd`, `status`, `kode_opd`, `slug`, `email`, `alamat`, `no_telp`, `kecamatan`, `created_at`, `updated_at`) VALUES
(1, 'SETDA Kab Magetan', 'Tidak Aktif', 'SKM-001', 'setda-kab-magetan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 04:59:40'),
(2, 'Inspektorat', 'Aktif', 'I-002', 'inspektorat', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(3, 'Badan Perencanaan Pembangunan, Penelitian dan Pengembangan Daerah', 'Aktif', 'BPPPDPD-003', 'badan-perencanaan-pembangunan-penelitian-dan-pengembangan-daerah', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(4, 'Badan Kesatuan Bangsa dan Politik', 'Aktif', 'BKBDP-004', 'badan-kesatuan-bangsa-dan-politik', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(5, 'Badan Kepegawaian Daerah', 'Aktif', 'BKD-005', 'badan-kepegawaian-daerah', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(6, 'Dinas Pemberdayaan Masyarakat dan Desa', 'Aktif', 'DPMDD-006', 'dinas-pemberdayaan-masyarakat-dan-desa', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(7, 'Dinas Pengendalian Penduduk, Keluarga Berencana dan Pemberdayaan Perempuan, Perlindungan Anak', 'Aktif', 'DPPKBDPPPA-007', 'dinas-pengendalian-penduduk-keluarga-berencana-dan-pemberdayaan-perempuan-perlindungan-anak', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(8, 'Dinas Lingkungan Hidup', 'Aktif', 'DLH-008', 'dinas-lingkungan-hidup', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(9, 'Dinas Komunikasi dan Informatika', 'Aktif', 'DKDI-009', 'dinas-komunikasi-dan-informatika', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(10, 'Badan Pendapatan, Pengelolaan Keuangan dan Aset Daerah ', 'Aktif', 'BPPKDAD-010', 'badan-pendapatan-pengelolaan-keuangan-dan-aset-daerah', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(11, 'Dinas Kependudukan dan Catatan Sipil ', 'Aktif', 'DKDCS-011', 'dinas-kependudukan-dan-catatan-sipil', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(12, 'Dinas Kesehatan', 'Aktif', 'DK-012', 'dinas-kesehatan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(13, 'Dinas Perindustrian dan Perdagangan', 'Aktif', 'DPDP-013', 'dinas-perindustrian-dan-perdagangan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(14, 'Dinas Tanaman Pangan, Hortikultura, Perkebunan dan Ketahanan Pangan', 'Aktif', 'DTPHPDKP-014', 'dinas-tanaman-pangan-hortikultura-perkebunan-dan-ketahanan-pangan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(15, 'Dinas Tenaga Kerja', 'Aktif', 'DTK-015', 'dinas-tenaga-kerja', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(16, 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Aktif', 'DPUDPR-016', 'dinas-pekerjaan-umum-dan-penataan-ruang', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(17, 'Dinas Perhubungan', 'Aktif', 'DP-017', 'dinas-perhubungan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(18, 'Dinas Peternakan dan Perikanan', 'Aktif', 'DPDP-018', 'dinas-peternakan-dan-perikanan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(19, 'Dinas Perumahan dan Kawasan Permukiman', 'Aktif', 'DPDKP-019', 'dinas-perumahan-dan-kawasan-permukiman', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(20, 'Dinas Pendidikan, Kepemudaan dan Olahraga', 'Aktif', 'DPKDO-020', 'dinas-pendidikan-kepemudaan-dan-olahraga', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(21, 'Dinas Sosial', 'Aktif', 'DS-021', 'dinas-sosial', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(22, 'Dinas Pariwisata dan Kebudayaan', 'Aktif', 'DPDK-022', 'dinas-pariwisata-dan-kebudayaan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(23, 'Dinas Koperasi dan Usaha Mikro', 'Aktif', 'DKDUM-023', 'dinas-koperasi-dan-usaha-mikro', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(24, 'Badan Penanggulangan Bencana Daerah', 'Aktif', 'BPBD-024', 'badan-penanggulangan-bencana-daerah', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(25, 'Dinas Kearsipan dan Perpustakaan', 'Aktif', 'DKDP-025', 'dinas-kearsipan-dan-perpustakaan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(26, 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu', 'Aktif', 'DPMDPTSP-026', 'dinas-penanaman-modal-dan-pelayanan-terpadu-satu-pintu', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(27, 'Satuan Polisi Pamong Praja dan Pemadam Kebakaran', 'Aktif', 'SPPPDPK-027', 'satuan-polisi-pamong-praja-dan-pemadam-kebakaran', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(28, 'RSUD Dr. Sayidiman', 'Aktif', 'RDS-028', 'rsud-dr-sayidiman', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(29, 'Kecamatan Magetan', 'Aktif', 'KM-029', 'kecamatan-magetan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(30, 'Kecamatan Panekan', 'Aktif', 'KP-030', 'kecamatan-panekan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(31, 'Kecamatan Plaosan ', 'Aktif', 'KP-031', 'kecamatan-plaosan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(32, 'Kecamatan Poncol', 'Aktif', 'KP-032', 'kecamatan-poncol', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(33, 'Kecamatan Parang', 'Aktif', 'KP-033', 'kecamatan-parang', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(34, 'Kecamatan Lembeyan', 'Aktif', 'KL-034', 'kecamatan-lembeyan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(35, 'Kecamatan Kawedanan', 'Aktif', 'KK-035', 'kecamatan-kawedanan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(36, 'Kecamatan Takeran', 'Aktif', 'KT-036', 'kecamatan-takeran', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(37, 'Kecamatan Bendo', 'Aktif', 'KB-037', 'kecamatan-bendo', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(38, 'Kecamatan Maospati', 'Aktif', 'KM-038', 'kecamatan-maospati', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(39, 'Kecamatan Barat', 'Aktif', 'KB-039', 'kecamatan-barat', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(40, 'Kecamatan Karangrejo', 'Aktif', 'KK-040', 'kecamatan-karangrejo', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(41, 'Kecamatan Kartoharjo', 'Aktif', 'KK-041', 'kecamatan-kartoharjo', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(42, 'Kecamatan Karas', 'Aktif', 'KK-042', 'kecamatan-karas', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(43, 'Kecamatan Sukomoro', 'Aktif', 'KS-043', 'kecamatan-sukomoro', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(44, 'Kecamatan Ngariboyo', 'Aktif', 'KN-044', 'kecamatan-ngariboyo', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(45, 'Kecamatan Nguntoronadi', 'Aktif', 'KN-045', 'kecamatan-nguntoronadi', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(46, 'Kecamatan Sidorejo', 'Aktif', 'KS-046', 'kecamatan-sidorejo', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(47, 'Puskesmas Taji', 'Aktif', 'PT-047', 'puskesmas-taji', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(48, 'Puskesmas Takeran', 'Aktif', 'PT-048', 'puskesmas-takeran', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(49, 'Puskesmas Kawedanan', 'Aktif', 'PK-049', 'puskesmas-kawedanan', NULL, NULL, NULL, NULL, '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(50, 'Desa Widorokandang', 'Aktif', 'DW-050', 'desa-widorokandang', NULL, 'Desa Widorokandang, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(51, 'Desa Sidokerto', 'Aktif', 'DS-051', 'desa-sidokerto', NULL, 'Desa Sidokerto, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(52, 'Desa Sumbersawit', 'Aktif', 'DS-052', 'desa-sumbersawit', NULL, 'Desa Sumbersawit, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(53, 'Desa Sidomulyo', 'Aktif', 'DS-053', 'desa-sidomulyo', NULL, 'Desa Sidomulyo, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(54, 'Desa Getasanyar', 'Aktif', 'DG-054', 'desa-getasanyar', NULL, 'Desa Getasanyar, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(55, 'Desa Sidorejo', 'Aktif', 'DS-055', 'desa-sidorejo', NULL, 'Desa Sidorejo, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(56, 'Desa Durenan', 'Aktif', 'DD-056', 'desa-durenan', NULL, 'Desa Durenan, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(57, 'Desa Kalang', 'Aktif', 'DK-057', 'desa-kalang', NULL, 'Desa Kalang, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(58, 'Desa Campursari', 'Aktif', 'DC-058', 'desa-campursari', NULL, 'Desa Campursari, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(59, 'Desa Sambirobyong', 'Aktif', 'DS-059', 'desa-sambirobyong', NULL, 'Desa Sambirobyong, Kecamatan Sidorejo, Kabupaten Magetan', NULL, 'Sidorejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(60, 'Desa Driyorejo', 'Aktif', 'DD-060', 'desa-driyorejo', NULL, 'Desa Driyorejo, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(61, 'Desa Kenongomulyo', 'Aktif', 'DK-061', 'desa-kenongomulyo', NULL, 'Desa Kenongomulyo, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(62, 'Desa Purworejo', 'Aktif', 'DP-062', 'desa-purworejo', NULL, 'Desa Purworejo, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(63, 'Desa Simbatan', 'Aktif', 'DS-063', 'desa-simbatan', NULL, 'Desa Simbatan, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(64, 'Desa Nguntoronadi', 'Aktif', 'DN-064', 'desa-nguntoronadi', NULL, 'Desa Nguntoronadi, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(65, 'Desa Petungrejo', 'Aktif', 'DP-065', 'desa-petungrejo', NULL, 'Desa Petungrejo, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(66, 'Desa Goranggareng', 'Aktif', 'DG-066', 'desa-goranggareng', NULL, 'Desa Goranggareng, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(67, 'Desa Semen', 'Aktif', 'DS-067', 'desa-semen', NULL, 'Desa Semen, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(68, 'Desa Sukowidi', 'Aktif', 'DS-068', 'desa-sukowidi', NULL, 'Desa Sukowidi, Kecamatan Nguntoronadi, Kabupaten Magetan', NULL, 'Nguntoronadi', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(69, 'Desa Banjarejo', 'Aktif', 'DB-069', 'desa-banjarejo', NULL, 'Desa Banjarejo, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(70, 'Desa Banjarpanjang', 'Aktif', 'DB-070', 'desa-banjarpanjang', NULL, 'Desa Banjarpanjang, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(71, 'Desa Banyudono', 'Aktif', 'DB-071', 'desa-banyudono', NULL, 'Desa Banyudono, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(72, 'Desa Mojopurno', 'Aktif', 'DM-072', 'desa-mojopurno', NULL, 'Desa Mojopurno, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(73, 'Desa Ngariboyo', 'Aktif', 'DN-073', 'desa-ngariboyo', NULL, 'Desa Ngariboyo, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(74, 'Desa Balegondo', 'Aktif', 'DB-074', 'desa-balegondo', NULL, 'Desa Balegondo, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(75, 'Desa Baleasri', 'Aktif', 'DB-075', 'desa-baleasri', NULL, 'Desa Baleasri, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(76, 'Desa Sumberdukun', 'Aktif', 'DS-076', 'desa-sumberdukun', NULL, 'Desa Sumberdukun, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(77, 'Desa Selopanggung', 'Aktif', 'DS-077', 'desa-selopanggung', NULL, 'Desa Selopanggung, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(78, 'Desa Bangsri', 'Aktif', 'DB-078', 'desa-bangsri', NULL, 'Desa Bangsri, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(79, 'Desa Pendem', 'Aktif', 'DP-079', 'desa-pendem', NULL, 'Desa Pendem, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(80, 'Desa Selotinatah', 'Aktif', 'DS-080', 'desa-selotinatah', NULL, 'Desa Selotinatah, Kecamatan Ngariboyo, Kabupaten Magetan', NULL, 'Ngariboyo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(81, 'Desa Karangmojo', 'Aktif', 'DK-081', 'desa-karangmojo', NULL, 'Desa Karangmojo, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(82, 'Desa Bayemtaman', 'Aktif', 'DB-082', 'desa-bayemtaman', NULL, 'Desa Bayemtaman, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(83, 'Desa Bayemwetan', 'Aktif', 'DB-083', 'desa-bayemwetan', NULL, 'Desa Bayemwetan, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(84, 'Desa Jeruk', 'Aktif', 'DJ-084', 'desa-jeruk', NULL, 'Desa Jeruk, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(85, 'Desa Gunungan', 'Aktif', 'DG-085', 'desa-gunungan', NULL, 'Desa Gunungan, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(86, 'Desa Jajar', 'Aktif', 'DJ-086', 'desa-jajar', NULL, 'Desa Jajar, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(87, 'Desa Ngelang', 'Aktif', 'DN-087', 'desa-ngelang', NULL, 'Desa Ngelang, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(88, 'Desa Sukowidi', 'Aktif', 'DS-088', 'desa-sukowidi-2', NULL, 'Desa Sukowidi, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(89, 'Desa Pencol', 'Aktif', 'DP-089', 'desa-pencol', NULL, 'Desa Pencol, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(90, 'Desa Klurahan', 'Aktif', 'DK-090', 'desa-klurahan', NULL, 'Desa Klurahan, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(91, 'Desa Mrahu', 'Aktif', 'DM-091', 'desa-mrahu', NULL, 'Desa Mrahu, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(92, 'Desa Kartoharjo', 'Aktif', 'DK-092', 'desa-kartoharjo', NULL, 'Desa Kartoharjo, Kecamatan Kartoharjo, Kabupaten Magetan', NULL, 'Kartoharjo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(93, 'Desa Ginuk', 'Aktif', 'DG-093', 'desa-ginuk', NULL, 'Desa Ginuk, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(94, 'Desa Botok', 'Aktif', 'DB-094', 'desa-botok', NULL, 'Desa Botok, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(95, 'Desa Geplak', 'Aktif', 'DG-095', 'desa-geplak', NULL, 'Desa Geplak, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(96, 'Desa Temenggungan', 'Aktif', 'DT-096', 'desa-temenggungan', NULL, 'Desa Temenggungan, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(97, 'Desa Temboro', 'Aktif', 'DT-097', 'desa-temboro', NULL, 'Desa Temboro, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(98, 'Desa Jungke', 'Aktif', 'DJ-098', 'desa-jungke', NULL, 'Desa Jungke, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(99, 'Desa Kuwon', 'Aktif', 'DK-099', 'desa-kuwon', NULL, 'Desa Kuwon, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(100, 'Desa Taji', 'Aktif', 'DT-100', 'desa-taji', NULL, 'Desa Taji, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(101, 'Desa Sumursongo', 'Aktif', 'DS-101', 'desa-sumursongo', NULL, 'Desa Sumursongo, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(102, 'Desa Sobontoro', 'Aktif', 'DS-102', 'desa-sobontoro', NULL, 'Desa Sobontoro, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(103, 'Desa Karas', 'Aktif', 'DK-103', 'desa-karas', NULL, 'Desa Karas, Kecamatan Karas, Kabupaten Magetan', NULL, 'Karas', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(104, 'Desa Kauman', 'Aktif', 'DK-104', 'desa-kauman', NULL, 'Desa Kauman, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(105, 'Desa Grabahan', 'Aktif', 'DG-105', 'desa-grabahan', NULL, 'Desa Grabahan, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(106, 'Desa Prampelan', 'Aktif', 'DP-106', 'desa-prampelan', NULL, 'Desa Prampelan, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(107, 'Desa Maron', 'Aktif', 'DM-107', 'desa-maron', NULL, 'Desa Maron, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(108, 'Desa Gebyog', 'Aktif', 'DG-108', 'desa-gebyog', NULL, 'Desa Gebyog, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(109, 'Desa Baluk', 'Aktif', 'DB-109', 'desa-baluk', NULL, 'Desa Baluk, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(110, 'Desa Pelem', 'Aktif', 'DP-110', 'desa-pelem', NULL, 'Desa Pelem, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(111, 'Kelurahan Manisrejo', 'Aktif', 'KM-111', 'kelurahan-manisrejo', NULL, 'Kelurahan Manisrejo, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(112, 'Desa Patihan', 'Aktif', 'DP-112', 'desa-patihan', NULL, 'Desa Patihan, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(113, 'Desa Sambirembe', 'Aktif', 'DS-113', 'desa-sambirembe', NULL, 'Desa Sambirembe, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(114, 'Desa Gondang', 'Aktif', 'DG-114', 'desa-gondang', NULL, 'Desa Gondang, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(115, 'Desa Mantren', 'Aktif', 'DM-115', 'desa-mantren', NULL, 'Desa Mantren, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(116, 'Kelurahan Karangrejo', 'Aktif', 'KK-116', 'kelurahan-karangrejo', NULL, 'Kelurahan Karangrejo, Kecamatan Karangrejo, Kabupaten Magetan', NULL, 'Karangrejo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(117, 'Desa Klagen', 'Aktif', 'DK-117', 'desa-klagen', NULL, 'Desa Klagen, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(118, 'Desa Bangunasri', 'Aktif', 'DB-118', 'desa-bangunasri', NULL, 'Desa Bangunasri, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(119, 'Desa Rejomulyo', 'Aktif', 'DR-119', 'desa-rejomulyo', NULL, 'Desa Rejomulyo, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(120, 'Desa Jonggrang', 'Aktif', 'DJ-120', 'desa-jonggrang', NULL, 'Desa Jonggrang, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(121, 'Desa Blaran', 'Aktif', 'DB-121', 'desa-blaran', NULL, 'Desa Blaran, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(122, 'Desa Panggung', 'Aktif', 'DP-122', 'desa-panggung', NULL, 'Desa Panggung, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(123, 'Desa Ngumpul', 'Aktif', 'DN-123', 'desa-ngumpul', NULL, 'Desa Ngumpul, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(124, 'Desa Manjung', 'Aktif', 'DM-124', 'desa-manjung', NULL, 'Desa Manjung, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(125, 'Kelurahan Tebon', 'Aktif', 'KT-125', 'kelurahan-tebon', NULL, 'Kelurahan Tebon, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(126, 'Kelurahan Mangge', 'Aktif', 'KM-126', 'kelurahan-mangge', NULL, 'Kelurahan Mangge, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(127, 'Desa Purwodadi', 'Aktif', 'DP-127', 'desa-purwodadi', NULL, 'Desa Purwodadi, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(128, 'Desa Karangsono', 'Aktif', 'DK-128', 'desa-karangsono', NULL, 'Desa Karangsono, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(129, 'Desa Banjarejo', 'Aktif', 'DB-129', 'desa-banjarejo-2', NULL, 'Desa Banjarejo, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(130, 'Desa Bogorejo', 'Aktif', 'DB-130', 'desa-bogorejo', NULL, 'Desa Bogorejo, Kecamatan Barat, Kabupaten Magetan', NULL, 'Barat', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(131, 'Desa Sempol', 'Aktif', 'DS-131', 'desa-sempol', NULL, 'Desa Sempol, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(132, 'Kelurahan Mranggen', 'Aktif', 'KM-132', 'kelurahan-mranggen', NULL, 'Kelurahan Mranggen, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(133, 'Kelurahan Kraton', 'Aktif', 'KK-133', 'kelurahan-kraton', NULL, 'Kelurahan Kraton, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(134, 'Desa Pesu', 'Aktif', 'DP-134', 'desa-pesu', NULL, 'Desa Pesu, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(135, 'Desa Sumberejo', 'Aktif', 'DS-135', 'desa-sumberejo', NULL, 'Desa Sumberejo, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(136, 'Desa Ngujung', 'Aktif', 'DN-136', 'desa-ngujung', NULL, 'Desa Ngujung, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(137, 'Desa Ronowijayan', 'Aktif', 'DR-137', 'desa-ronowijayan', NULL, 'Desa Ronowijayan, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(138, 'Desa Suratmajan', 'Aktif', 'DS-138', 'desa-suratmajan', NULL, 'Desa Suratmajan, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(139, 'Desa Pandeyan', 'Aktif', 'DP-139', 'desa-pandeyan', NULL, 'Desa Pandeyan, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(140, 'Desa Klagen Gambiran', 'Aktif', 'DKG-140', 'desa-klagen-gambiran', NULL, 'Desa Klagen Gambiran, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(141, 'Kelurahan Maospati', 'Aktif', 'KM-141', 'kelurahan-maospati', NULL, 'Kelurahan Maospati, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(142, 'Desa Malang', 'Aktif', 'DM-142', 'desa-malang', NULL, 'Desa Malang, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(143, 'Desa Gulun', 'Aktif', 'DG-143', 'desa-gulun', NULL, 'Desa Gulun, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(144, 'Desa Tanjungsepreh', 'Aktif', 'DT-144', 'desa-tanjungsepreh', NULL, 'Desa Tanjungsepreh, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(145, 'Desa Sugihwaras', 'Aktif', 'DS-145', 'desa-sugihwaras', NULL, 'Desa Sugihwaras, Kecamatan Maospati, Kabupaten Magetan', NULL, 'Maospati', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(146, 'Desa Kleco', 'Aktif', 'DK-146', 'desa-kleco', NULL, 'Desa Kleco, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(147, 'Desa Setren', 'Aktif', 'DS-147', 'desa-setren', NULL, 'Desa Setren, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(148, 'Desa Duwet', 'Aktif', 'DD-148', 'desa-duwet', NULL, 'Desa Duwet, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(149, 'Desa Bulugledeg', 'Aktif', 'DB-149', 'desa-bulugledeg', NULL, 'Desa Bulugledeg, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(150, 'Kelurahan Bendo', 'Aktif', 'KB-150', 'kelurahan-bendo', NULL, 'Kelurahan Bendo, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(151, 'Desa Carikan', 'Aktif', 'DC-151', 'desa-carikan', NULL, 'Desa Carikan, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(152, 'Desa Kledokan', 'Aktif', 'DK-152', 'desa-kledokan', NULL, 'Desa Kledokan, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(153, 'Desa Lemahbang', 'Aktif', 'DL-153', 'desa-lemahbang', NULL, 'Desa Lemahbang, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(154, 'Desa Soco', 'Aktif', 'DS-154', 'desa-soco', NULL, 'Desa Soco, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(155, 'Desa Kinandang', 'Aktif', 'DK-155', 'desa-kinandang', NULL, 'Desa Kinandang, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(156, 'Desa Bulak', 'Aktif', 'DB-156', 'desa-bulak', NULL, 'Desa Bulak, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(157, 'Desa Tegalarum', 'Aktif', 'DT-157', 'desa-tegalarum', NULL, 'Desa Tegalarum, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(158, 'Desa Tanjung', 'Aktif', 'DT-158', 'desa-tanjung', NULL, 'Desa Tanjung, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:55', '2023-07-20 03:58:55'),
(159, 'Desa Pingkuk', 'Aktif', 'DP-159', 'desa-pingkuk', NULL, 'Desa Pingkuk, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(160, 'Desa Belotan', 'Aktif', 'DB-160', 'desa-belotan', NULL, 'Desa Belotan, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(161, 'Desa Dukuh', 'Aktif', 'DD-161', 'desa-dukuh', NULL, 'Desa Dukuh, Kecamatan Bendo, Kabupaten Magetan', NULL, 'Bendo', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(162, 'Desa Truneng', 'Aktif', 'DT-162', 'desa-truneng', NULL, 'Desa Truneng, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(163, 'Desa Bogem', 'Aktif', 'DB-163', 'desa-bogem', NULL, 'Desa Bogem, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(164, 'Desa Kentangan', 'Aktif', 'DK-164', 'desa-kentangan', NULL, 'Desa Kentangan, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(165, 'Desa Kembangan', 'Aktif', 'DK-165', 'desa-kembangan', NULL, 'Desa Kembangan, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(166, 'Desa Kedungguwo', 'Aktif', 'DK-166', 'desa-kedungguwo', NULL, 'Desa Kedungguwo, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(167, 'Kelurahan Tinap', 'Aktif', 'KT-167', 'kelurahan-tinap', NULL, 'Kelurahan Tinap, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(168, 'Desa Pojoksari', 'Aktif', 'DP-168', 'desa-pojoksari', NULL, 'Desa Pojoksari, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(169, 'Desa Bulu', 'Aktif', 'DB-169', 'desa-bulu', NULL, 'Desa Bulu, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(170, 'Desa Sukomoro', 'Aktif', 'DS-170', 'desa-sukomoro', NULL, 'Desa Sukomoro, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(171, 'Desa Bibis', 'Aktif', 'DB-171', 'desa-bibis', NULL, 'Desa Bibis, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(172, 'Desa Bandar', 'Aktif', 'DB-172', 'desa-bandar', NULL, 'Desa Bandar, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(173, 'Desa Tambakmas', 'Aktif', 'DT-173', 'desa-tambakmas', NULL, 'Desa Tambakmas, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(174, 'Desa Tamanan', 'Aktif', 'DT-174', 'desa-tamanan', NULL, 'Desa Tamanan, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(175, 'Desa Kalangketi', 'Aktif', 'DK-175', 'desa-kalangketi', NULL, 'Desa Kalangketi, Kecamatan Sukomoro, Kabupaten Magetan', NULL, 'Sukomoro', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(176, 'Desa Banjarejo', 'Aktif', 'DB-176', 'desa-banjarejo-3', NULL, 'Desa Banjarejo, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(177, 'Desa Turi', 'Aktif', 'DT-177', 'desa-turi', NULL, 'Desa Turi, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(178, 'Desa Rejomulyo', 'Aktif', 'DR-178', 'desa-rejomulyo-2', NULL, 'Desa Rejomulyo, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(179, 'Desa Jabung', 'Aktif', 'DJ-179', 'desa-jabung', NULL, 'Desa Jabung, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(180, 'Desa Ngiliran', 'Aktif', 'DN-180', 'desa-ngiliran', NULL, 'Desa Ngiliran, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(181, 'Desa Bedagung', 'Aktif', 'DB-181', 'desa-bedagung', NULL, 'Desa Bedagung, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(182, 'Desa Sukowidi', 'Aktif', 'DS-182', 'desa-sukowidi-3', NULL, 'Desa Sukowidi, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(183, 'Desa Tapak', 'Aktif', 'DT-183', 'desa-tapak', NULL, 'Desa Tapak, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(184, 'Desa Manjung', 'Aktif', 'DM-184', 'desa-manjung-2', NULL, 'Desa Manjung, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(185, 'Desa Sumberdodol', 'Aktif', 'DS-185', 'desa-sumberdodol', NULL, 'Desa Sumberdodol, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(186, 'Desa Tanjungsari', 'Aktif', 'DT-186', 'desa-tanjungsari', NULL, 'Desa Tanjungsari, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(187, 'Kelurahan Panekan', 'Aktif', 'KP-187', 'kelurahan-panekan', NULL, 'Kelurahan Panekan, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(188, 'Desa Sidowayah', 'Aktif', 'DS-188', 'desa-sidowayah', NULL, 'Desa Sidowayah, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(189, 'Desa Wates', 'Aktif', 'DW-189', 'desa-wates', NULL, 'Desa Wates, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(190, 'Desa Milangasri', 'Aktif', 'DM-190', 'desa-milangasri', NULL, 'Desa Milangasri, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(191, 'Desa Cepoko', 'Aktif', 'DC-191', 'desa-cepoko', NULL, 'Desa Cepoko, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(192, 'Desa Terung', 'Aktif', 'DT-192', 'desa-terung', NULL, 'Desa Terung, Kecamatan Panekan, Kabupaten Magetan', NULL, 'Panekan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(193, 'Desa Sendangagung', 'Aktif', 'DS-193', 'desa-sendangagung', NULL, 'Desa Sendangagung, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(194, 'Desa Pacalan', 'Aktif', 'DP-194', 'desa-pacalan', NULL, 'Desa Pacalan, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(195, 'Kelurahan Sarangan', 'Aktif', 'KS-195', 'kelurahan-sarangan', NULL, 'Kelurahan Sarangan, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(196, 'Desa Dadi', 'Aktif', 'DD-196', 'desa-dadi', NULL, 'Desa Dadi, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(197, 'Kelurahan Plaosan', 'Aktif', 'KP-197', 'kelurahan-plaosan', NULL, 'Kelurahan Plaosan, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(198, 'Desa Buluharjo', 'Aktif', 'DB-198', 'desa-buluharjo', NULL, 'Desa Buluharjo, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(199, 'Desa Sidomukti', 'Aktif', 'DS-199', 'desa-sidomukti', NULL, 'Desa Sidomukti, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(200, 'Desa Nitikan', 'Aktif', 'DN-200', 'desa-nitikan', NULL, 'Desa Nitikan, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(201, 'Desa Sumberagung', 'Aktif', 'DS-201', 'desa-sumberagung', NULL, 'Desa Sumberagung, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(202, 'Desa Randugede', 'Aktif', 'DR-202', 'desa-randugede', NULL, 'Desa Randugede, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(203, 'Desa Bogoarum', 'Aktif', 'DB-203', 'desa-bogoarum', NULL, 'Desa Bogoarum, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(204, 'Desa Bulugunung (bulugunung)', 'Aktif', 'DB(-204', 'desa-bulugunung-bulugunung', NULL, 'Desa Bulugunung (bulugunung), Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(205, 'Desa Puntukdoro', 'Aktif', 'DP-205', 'desa-puntukdoro', NULL, 'Desa Puntukdoro, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(206, 'Desa Plumpung', 'Aktif', 'DP-206', 'desa-plumpung', NULL, 'Desa Plumpung, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(207, 'Desa Ngancar', 'Aktif', 'DN-207', 'desa-ngancar', NULL, 'Desa Ngancar, Kecamatan Plaosan, Kabupaten Magetan', NULL, 'Plaosan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(208, 'Desa Purwosari', 'Aktif', 'DP-208', 'desa-purwosari', NULL, 'Desa Purwosari, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(209, 'Desa Baron', 'Aktif', 'DB-209', 'desa-baron', NULL, 'Desa Baron, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(210, 'Kelurahan Tambran', 'Aktif', 'KT-210', 'kelurahan-tambran', NULL, 'Kelurahan Tambran, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(211, 'Kelurahan Kebonagung', 'Aktif', 'KK-211', 'kelurahan-kebonagung', NULL, 'Kelurahan Kebonagung, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(212, 'Kelurahan Sukowinangun', 'Aktif', 'KS-212', 'kelurahan-sukowinangun', NULL, 'Kelurahan Sukowinangun, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(213, 'Kelurahan Kepolorejo', 'Aktif', 'KK-213', 'kelurahan-kepolorejo', NULL, 'Kelurahan Kepolorejo, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(214, 'Kelurahan Tawanganom', 'Aktif', 'KT-214', 'kelurahan-tawanganom', NULL, 'Kelurahan Tawanganom, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(215, 'Kelurahan Selosari', 'Aktif', 'KS-215', 'kelurahan-selosari', NULL, 'Kelurahan Selosari, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(216, 'Desa Candirejo', 'Aktif', 'DC-216', 'desa-candirejo', NULL, 'Desa Candirejo, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(217, 'Desa Ringinagung', 'Aktif', 'DR-217', 'desa-ringinagung', NULL, 'Desa Ringinagung, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(218, 'Kelurahan Magetan', 'Aktif', 'KM-218', 'kelurahan-magetan', NULL, 'Kelurahan Magetan, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(219, 'Kelurahan Bulukerto', 'Aktif', 'KB-219', 'kelurahan-bulukerto', NULL, 'Kelurahan Bulukerto, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(220, 'Kelurahan Mangkujayan', 'Aktif', 'KM-220', 'kelurahan-mangkujayan', NULL, 'Kelurahan Mangkujayan, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(221, 'Desa Tambakrejo', 'Aktif', 'DT-221', 'desa-tambakrejo', NULL, 'Desa Tambakrejo, Kecamatan Magetan, Kabupaten Magetan', NULL, 'Magetan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(222, 'Desa Mojorejo', 'Aktif', 'DM-222', 'desa-mojorejo', NULL, 'Desa Mojorejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(223, 'Desa Genengan', 'Aktif', 'DG-223', 'desa-genengan', NULL, 'Desa Genengan, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(224, 'Desa Karangrejo', 'Aktif', 'DK-224', 'desa-karangrejo', NULL, 'Desa Karangrejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(225, 'Desa Ngadirejo', 'Aktif', 'DN-225', 'desa-ngadirejo', NULL, 'Desa Ngadirejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(226, 'Desa Sugihrejo', 'Aktif', 'DS-226', 'desa-sugihrejo', NULL, 'Desa Sugihrejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(227, 'Desa Selorejo', 'Aktif', 'DS-227', 'desa-selorejo', NULL, 'Desa Selorejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(228, 'Desa Jambangan', 'Aktif', 'DJ-228', 'desa-jambangan', NULL, 'Desa Jambangan, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(229, 'Desa Bogem', 'Aktif', 'DB-229', 'desa-bogem-2', NULL, 'Desa Bogem, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(230, 'Kelurahan Sampung', 'Aktif', 'KS-230', 'kelurahan-sampung', NULL, 'Kelurahan Sampung, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(231, 'Kelurahan Rejosari', 'Aktif', 'KR-231', 'kelurahan-rejosari', NULL, 'Kelurahan Rejosari, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(232, 'Kelurahan Kawedanan', 'Aktif', 'KK-232', 'kelurahan-kawedanan', NULL, 'Kelurahan Kawedanan, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(233, 'Desa Tulung', 'Aktif', 'DT-233', 'desa-tulung', NULL, 'Desa Tulung, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(234, 'Desa Ngunut', 'Aktif', 'DN-234', 'desa-ngunut', NULL, 'Desa Ngunut, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(235, 'Desa Pojok', 'Aktif', 'DP-235', 'desa-pojok', NULL, 'Desa Pojok, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(236, 'Desa Tladan', 'Aktif', 'DT-236', 'desa-tladan', NULL, 'Desa Tladan, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(237, 'Desa Garon', 'Aktif', 'DG-237', 'desa-garon', NULL, 'Desa Garon, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(238, 'Desa Balerejo', 'Aktif', 'DB-238', 'desa-balerejo', NULL, 'Desa Balerejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(239, 'Desa Ngentep', 'Aktif', 'DN-239', 'desa-ngentep', NULL, 'Desa Ngentep, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(240, 'Desa Giripurno', 'Aktif', 'DG-240', 'desa-giripurno', NULL, 'Desa Giripurno, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(241, 'Desa Mangunrejo', 'Aktif', 'DM-241', 'desa-mangunrejo', NULL, 'Desa Mangunrejo, Kecamatan Kawedanan, Kabupaten Magetan', NULL, 'Kawedanan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(242, 'Desa Madigondo', 'Aktif', 'DM-242', 'desa-madigondo', NULL, 'Desa Madigondo, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(243, 'Desa Kerang', 'Aktif', 'DK-243', 'desa-kerang', NULL, 'Desa Kerang, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(244, 'Desa Jomblang', 'Aktif', 'DJ-244', 'desa-jomblang', NULL, 'Desa Jomblang, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(245, 'Desa Waduk', 'Aktif', 'DW-245', 'desa-waduk', NULL, 'Desa Waduk, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(246, 'Desa Kerik', 'Aktif', 'DK-246', 'desa-kerik', NULL, 'Desa Kerik, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(247, 'Desa Kepuhrejo', 'Aktif', 'DK-247', 'desa-kepuhrejo', NULL, 'Desa Kepuhrejo, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(248, 'Desa Kuwonharjo', 'Aktif', 'DK-248', 'desa-kuwonharjo', NULL, 'Desa Kuwonharjo, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(249, 'Kelurahan Takeran', 'Aktif', 'KT-249', 'kelurahan-takeran', NULL, 'Kelurahan Takeran, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(250, 'Desa Sawojajar', 'Aktif', 'DS-250', 'desa-sawojajar', NULL, 'Desa Sawojajar, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(251, 'Desa Tawangrejo', 'Aktif', 'DT-251', 'desa-tawangrejo', NULL, 'Desa Tawangrejo, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(252, 'Desa Duyung', 'Aktif', 'DD-252', 'desa-duyung', NULL, 'Desa Duyung, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(253, 'Desa Kiringan', 'Aktif', 'DK-253', 'desa-kiringan', NULL, 'Desa Kiringan, Kecamatan Takeran, Kabupaten Magetan', NULL, 'Takeran', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(254, 'Desa Krowe', 'Aktif', 'DK-254', 'desa-krowe', NULL, 'Desa Krowe, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(255, 'Desa Tapen', 'Aktif', 'DT-255', 'desa-tapen', NULL, 'Desa Tapen, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(256, 'Desa Pupus', 'Aktif', 'DP-256', 'desa-pupus', NULL, 'Desa Pupus, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(257, 'Desa Nguri', 'Aktif', 'DN-257', 'desa-nguri', NULL, 'Desa Nguri, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(258, 'Desa Kedungpanji', 'Aktif', 'DK-258', 'desa-kedungpanji', NULL, 'Desa Kedungpanji, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(259, 'Desa Dukuh', 'Aktif', 'DD-259', 'desa-dukuh-2', NULL, 'Desa Dukuh, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(260, 'Desa Tunggur', 'Aktif', 'DT-260', 'desa-tunggur', NULL, 'Desa Tunggur, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(261, 'Desa Lembeyan Wetan', 'Aktif', 'DLW-261', 'desa-lembeyan-wetan', NULL, 'Desa Lembeyan Wetan, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(262, 'Kelurahan Lembeyan Kulon', 'Aktif', 'KLK-262', 'kelurahan-lembeyan-kulon', NULL, 'Kelurahan Lembeyan Kulon, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(263, 'Desa Kediren', 'Aktif', 'DK-263', 'desa-kediren', NULL, 'Desa Kediren, Kecamatan Lembeyan, Kabupaten Magetan', NULL, 'Lembeyan', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(264, 'Desa Krajan', 'Aktif', 'DK-264', 'desa-krajan', NULL, 'Desa Krajan, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(265, 'Desa Joketro', 'Aktif', 'DJ-265', 'desa-joketro', NULL, 'Desa Joketro, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(266, 'Desa Sundul', 'Aktif', 'DS-266', 'desa-sundul', NULL, 'Desa Sundul, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(267, 'Desa Pragak', 'Aktif', 'DP-267', 'desa-pragak', NULL, 'Desa Pragak, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(268, 'Desa Tamanarum', 'Aktif', 'DT-268', 'desa-tamanarum', NULL, 'Desa Tamanarum, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(269, 'Parang', 'Aktif', 'P-269', 'parang', NULL, 'Parang, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(270, 'Desa Ngaglik', 'Aktif', 'DN-270', 'desa-ngaglik', NULL, 'Desa Ngaglik, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(271, 'Desa Ngunut', 'Aktif', 'DN-271', 'desa-ngunut-2', NULL, 'Desa Ngunut, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(272, 'Desa Trosono', 'Aktif', 'DT-272', 'desa-trosono', NULL, 'Desa Trosono, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(273, 'Desa Bungkuk', 'Aktif', 'DB-273', 'desa-bungkuk', NULL, 'Desa Bungkuk, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(274, 'Desa Mategal', 'Aktif', 'DM-274', 'desa-mategal', NULL, 'Desa Mategal, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(275, 'Desa Nglopang', 'Aktif', 'DN-275', 'desa-nglopang', NULL, 'Desa Nglopang, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(276, 'Desa Sayutan', 'Aktif', 'DS-276', 'desa-sayutan', NULL, 'Desa Sayutan, Kecamatan Parang, Kabupaten Magetan', NULL, 'Parang', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(277, 'Desa Sombo', 'Aktif', 'DS-277', 'desa-sombo', NULL, 'Desa Sombo, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56');
INSERT INTO `data_opds` (`id`, `nama_opd`, `status`, `kode_opd`, `slug`, `email`, `alamat`, `no_telp`, `kecamatan`, `created_at`, `updated_at`) VALUES
(278, 'Desa Cileng', 'Aktif', 'DC-278', 'desa-cileng', NULL, 'Desa Cileng, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(279, 'Desa Plangkrongan', 'Aktif', 'DP-279', 'desa-plangkrongan', NULL, 'Desa Plangkrongan, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(280, 'Kelurahan Alastuwo', 'Aktif', 'KA-280', 'kelurahan-alastuwo', NULL, 'Kelurahan Alastuwo, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(281, 'Desa Genilangit', 'Aktif', 'DG-281', 'desa-genilangit', NULL, 'Desa Genilangit, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(282, 'Desa Janggan', 'Aktif', 'DJ-282', 'desa-janggan', NULL, 'Desa Janggan, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(283, 'Desa Gonggang', 'Aktif', 'DG-283', 'desa-gonggang', NULL, 'Desa Gonggang, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56'),
(284, 'Desa Poncol', 'Aktif', 'DP-284', 'desa-poncol', NULL, 'Desa Poncol, Kecamatan Poncol, Kabupaten Magetan', NULL, 'Poncol', '2023-07-20 03:58:56', '2023-07-20 03:58:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_10_184846_create_data__o_p_d_s_table', 1),
(6, '2023_04_10_184934_create_aplikasis_table', 1),
(7, '2023_04_10_184948_create_tims_table', 1),
(8, '2023_04_10_185003_create_progres_table', 1),
(9, '2023_04_10_185021_create_pengaduans_table', 1),
(10, '2023_06_22_220754_create_aduans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengaduans`
--

CREATE TABLE `pengaduans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_aplikasi` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_pengaduan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Baru','Develop','Selesai') COLLATE utf8mb4_unicode_ci DEFAULT 'Baru',
  `tgl_mulai` datetime NOT NULL,
  `tgl_selesai` datetime DEFAULT NULL,
  `no_pengaduan` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `progres`
--

CREATE TABLE `progres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_aplikasi` bigint(20) UNSIGNED NOT NULL,
  `status` enum('Disposisi Surat','Analisis Awal','Analisis Kebutuhan','Coding','Testing','UAT','Selesai','Ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `catatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tims`
--

CREATE TABLE `tims` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_aplikasi` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `role` enum('Project Manager','System Analyst','Programmer','Quality Assurance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tims`
--

INSERT INTO `tims` (`id`, `id_aplikasi`, `id_user`, `role`, `created_at`, `updated_at`) VALUES
(1, 19, 3, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(2, 20, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(3, 320, 8, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(4, 318, 6, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(5, 283, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(6, 109, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(7, 188, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(8, 348, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(9, 357, 8, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(10, 2, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(11, 175, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(12, 251, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(13, 201, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(14, 276, 7, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(15, 92, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(16, 110, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(17, 148, 7, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(18, 168, 6, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(19, 274, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(20, 52, 2, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(21, 248, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(22, 157, 2, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(23, 39, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(24, 87, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(25, 196, 7, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(26, 164, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(27, 88, 5, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(28, 10, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(29, 145, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(30, 92, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(31, 335, 2, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(32, 7, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(33, 307, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(34, 309, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(35, 73, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(36, 199, 6, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(37, 128, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(38, 51, 7, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(39, 182, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(40, 276, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(41, 194, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(42, 345, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(43, 245, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(44, 71, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(45, 312, 5, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(46, 348, 6, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(47, 161, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(48, 180, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(49, 233, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(50, 145, 3, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(51, 207, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(52, 217, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(53, 246, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(54, 261, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(55, 61, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(56, 220, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(57, 231, 7, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(58, 10, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(59, 251, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(60, 78, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(61, 192, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(62, 102, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(63, 51, 2, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(64, 5, 5, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(65, 276, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(66, 150, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(67, 229, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(68, 190, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(69, 186, 7, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(70, 205, 7, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(71, 356, 5, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(72, 22, 6, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(73, 250, 5, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(74, 286, 5, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(75, 143, 6, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(76, 68, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(77, 199, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(78, 339, 2, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(79, 201, 5, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(80, 302, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(81, 274, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(82, 312, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(83, 84, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(84, 16, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(85, 6, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(86, 10, 5, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(87, 241, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(88, 252, 5, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(89, 338, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(90, 303, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(91, 157, 8, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(92, 36, 6, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(93, 105, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(94, 306, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(95, 159, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(96, 168, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(97, 309, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(98, 300, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(99, 31, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(100, 36, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(101, 25, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(102, 176, 2, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(103, 58, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(104, 311, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(105, 235, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(106, 328, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(107, 290, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(108, 174, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(109, 286, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(110, 61, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(111, 56, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(112, 121, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(113, 200, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(114, 177, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(115, 260, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(116, 27, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(117, 61, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(118, 71, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(119, 325, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(120, 23, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(121, 146, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(122, 205, 2, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(123, 102, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(124, 108, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(125, 286, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(126, 244, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(127, 90, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(128, 134, 6, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(129, 15, 3, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(130, 170, 5, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(131, 143, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(132, 158, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(133, 273, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(134, 268, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(135, 95, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(136, 215, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(137, 353, 8, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(138, 10, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(139, 10, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(140, 276, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(141, 228, 5, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(142, 197, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(143, 111, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(144, 70, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(145, 180, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(146, 175, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(147, 257, 2, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(148, 347, 6, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(149, 155, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(150, 261, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(151, 155, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(152, 307, 5, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(153, 120, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(154, 140, 7, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(155, 293, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(156, 357, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(157, 56, 3, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(158, 219, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(159, 107, 4, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(160, 295, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(161, 335, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(162, 153, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(163, 286, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(164, 189, 2, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(165, 166, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(166, 152, 5, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(167, 285, 4, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(168, 298, 2, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(169, 109, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(170, 79, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(171, 40, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(172, 255, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(173, 7, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(174, 282, 2, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(175, 329, 4, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(176, 61, 2, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(177, 247, 7, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(178, 257, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(179, 321, 3, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(180, 155, 2, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(181, 117, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(182, 147, 8, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(183, 107, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(184, 278, 5, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(185, 113, 8, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(186, 213, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(187, 13, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(188, 88, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(189, 313, 3, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(190, 90, 6, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(191, 20, 8, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(192, 259, 2, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(193, 136, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(194, 277, 6, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(195, 78, 7, 'Project Manager', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(196, 80, 2, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(197, 304, 7, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(198, 113, 4, 'Programmer', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(199, 182, 5, 'Quality Assurance', '2023-07-20 03:59:04', '2023-07-20 03:59:04'),
(200, 62, 6, 'System Analyst', '2023-07-20 03:59:04', '2023-07-20 03:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$MC/2k99/Q8upWuqByPTs8ePYfVBQSRXcGSCgplttGsfYpzv0HGaI6',
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('Super Admin','Project Manager','System Analyst','Programmer','Quality Assurance') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('aktif','tidak aktif') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'aktif',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `avatar`, `role`, `status`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@admin.com', NULL, '$2y$10$lpvZK7Q9OIHELbv2WLgB8ear/ApJpwXZ0jDxAf4Jn0ureu.Zt9ElW', 'images/mtv6kaEh1PXiZ0At90Na9mSD6X0HfIBfO98I04CY.jpg', 'Super Admin', 'aktif', 'super-admin-super-admin', NULL, '2023-07-20 03:58:59', '2023-08-06 06:34:15'),
(2, 'Project Manager', 'pm@pm.com', NULL, '$2y$10$TN.GbdcC/e2jFDomXvWVCOU2oDJGAAW8uRBCJBHnwKcNC0hjLzsjG', 'images/D9nfkYpBSIyIq0w33y6q0n99I290s4YbAEDaDVGn.jpg', 'Project Manager', 'aktif', 'project-manager-project-manager', NULL, '2023-07-20 03:58:59', '2023-08-06 06:35:30'),
(3, 'System Analyst', 'sa@sa.com', NULL, '$2y$10$Vb2kj3/92Gksw3CjC6BQN.A3/MGyWwvH8eadvJFcaizGve12Vgqk2', NULL, 'System Analyst', 'aktif', 'system-analyst-system-analyst', NULL, '2023-07-20 03:58:59', '2023-07-20 03:58:59'),
(4, 'Quality Assurance', 'qa@qa.com', NULL, '$2y$10$E3UTXJrqiyi0pv61PNloKu4X6L60/rKdydJqVmfZJikeR3gl2ZLUy', NULL, 'Quality Assurance', 'aktif', 'quality-assurance-quality-assurance', NULL, '2023-07-20 03:58:59', '2023-07-20 03:58:59'),
(5, 'Programmer', 'pg@pg.com', NULL, '$2y$10$VBcxRYPBnzkPT6K.PNyoVe8zBzvQIlOxJXAuqGDKTDHtRe26lkErW', NULL, 'Programmer', 'aktif', 'programmer-programmer', NULL, '2023-07-20 03:59:00', '2023-07-20 03:59:00'),
(6, 'Programmer A', 'pga@pg.com', NULL, '$2y$10$tFqcI79k3YT1NokPQd993OIjYRG7FeAqdlD0fdBZqDywhU10JBbu6', NULL, 'Programmer', 'aktif', 'programmer-programmer-a', NULL, '2023-07-20 03:59:00', '2023-07-20 03:59:00'),
(7, 'Programmer B', 'pgb@pg.com', NULL, '$2y$10$HLPMvUWwj1jU4T1EVOmGzOWAbmQDRBXYDiIDLRclvnzi1vcavPFL2', NULL, 'Programmer', 'aktif', 'programmer-programmer-b', NULL, '2023-07-20 03:59:00', '2023-07-20 03:59:00'),
(8, 'Programmer C', 'pgc@pg.com', NULL, '$2y$10$tH22XaPQoe3Lmtv5wvG2Ku//S7FiPFAbSVWv3vR02bV0ZogLa1ImO', NULL, 'Programmer', 'aktif', 'programmer-programmer-c', NULL, '2023-07-20 03:59:00', '2023-07-20 03:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduans`
--
ALTER TABLE `aduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aduans_judul_aplikasi_foreign` (`judul_aplikasi`);

--
-- Indexes for table `aplikasis`
--
ALTER TABLE `aplikasis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aplikasis_id_opd_foreign` (`id_opd`);

--
-- Indexes for table `data_opds`
--
ALTER TABLE `data_opds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengaduans_id_aplikasi_foreign` (`id_aplikasi`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `progres`
--
ALTER TABLE `progres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `progres_id_aplikasi_foreign` (`id_aplikasi`);

--
-- Indexes for table `tims`
--
ALTER TABLE `tims`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tims_id_aplikasi_foreign` (`id_aplikasi`),
  ADD KEY `tims_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduans`
--
ALTER TABLE `aduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aplikasis`
--
ALTER TABLE `aplikasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT for table `data_opds`
--
ALTER TABLE `data_opds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengaduans`
--
ALTER TABLE `pengaduans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `progres`
--
ALTER TABLE `progres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tims`
--
ALTER TABLE `tims`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aduans`
--
ALTER TABLE `aduans`
  ADD CONSTRAINT `aduans_judul_aplikasi_foreign` FOREIGN KEY (`judul_aplikasi`) REFERENCES `aplikasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `aplikasis`
--
ALTER TABLE `aplikasis`
  ADD CONSTRAINT `aplikasis_id_opd_foreign` FOREIGN KEY (`id_opd`) REFERENCES `data_opds` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduans`
--
ALTER TABLE `pengaduans`
  ADD CONSTRAINT `pengaduans_id_aplikasi_foreign` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasis` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `progres`
--
ALTER TABLE `progres`
  ADD CONSTRAINT `progres_id_aplikasi_foreign` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tims`
--
ALTER TABLE `tims`
  ADD CONSTRAINT `tims_id_aplikasi_foreign` FOREIGN KEY (`id_aplikasi`) REFERENCES `aplikasis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tims_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
