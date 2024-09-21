-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Sep 2024 pada 16.54
-- Versi server: 10.6.17-MariaDB-cll-lve
-- Versi PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doctrip`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `user`, `pass`, `input_at`) VALUES
(1, 'dito', 'developer', '2024-09-05 06:43:10'),
(2, 'admin', '$doctripid', '2024-09-05 06:43:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galery`
--

CREATE TABLE `tbl_galery` (
  `id` int(11) NOT NULL,
  `file` text NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_galery`
--

INSERT INTO `tbl_galery` (`id`, `file`, `input_at`) VALUES
(1, '17b2eb68dbc87ed54192255c8336d5e7.jpg', '2024-06-02 17:50:19'),
(2, '79bc9d62ddc53efc76166a596e630482.jpg', '2024-06-02 17:50:53'),
(3, 'c4fda71b4c181b6fe8cbd2b07b702e70.jpg', '2024-06-02 17:51:21'),
(4, 'b9d77d60e78bd60843c85a5fdb0ebdfc.jpg', '2024-06-02 17:51:49'),
(5, 'f5fdad70175137aaac86a27a99aa91b4.jpg', '2024-06-02 17:52:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_itinerary`
--

CREATE TABLE `tbl_itinerary` (
  `id` int(11) NOT NULL,
  `id_trip` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `experience` text NOT NULL,
  `transportation` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_itinerary`
--

INSERT INTO `tbl_itinerary` (`id`, `id_trip`, `day`, `title`, `experience`, `transportation`, `image`, `input_at`) VALUES
(1, 1, 1, 'HARI KE-1 BERANGKAT', '<li>Perjalanan menuju Banda Aceh (Pelabuhan).</li>', '<li>Hiace</li>', '4a78feb741ff5eace5c494f326bee359.png', '2024-08-02 03:35:15'),
(2, 1, 2, 'HARI KE-2 EXPLORE', '<li>Tiba di Pelabuhan Ule Lheue, Banda Aceh, bersih-bersih dan Sarapan.</li>\r\n<li>Persiapan Nyebrang.</li>\r\n<li>Penyeberangan ke Pelabuhan Balohan Sabang (Kapal Fery).</li>\r\n<li>Tiba di Pelabuhan Balohan, Sabang.</li>\r\n<li>Melanjutkan Perjalanan Explore Sabang (Ujung Karang, Km 0 Indonesia,\r\nHunting Lumba-lumba, Snorkeling di Rubiah.</li>\r\n<li>Check in Hotel Freddies (Istirahat).</li>', '<li>Kapal</li>', '4a78feb741ff5eace5c494f326bee359.png', '2024-08-06 09:07:35'),
(3, 1, 3, 'HARI KE-3 EXPLORE', '<li>Checkout Penginapan.</li>\r\n<li>Menuju Pelabuhan Balohan, Sabang.</li>\r\n<li>Tiba di Pelabuhan Balohan, Sarapan.</li>\r\n<li>Penyeberangan ke Pelabuhan Ule Lheue, Banda Aceh (Kapal Fery).</li>\r\n<li>Tiba di Pelabuhan Ule Lheue, Banda Aceh.</li>\r\n<li>Explore Banda Aceh (Museum Tsunami, Masjid Baiturrahman, Pantai\r\nLampuuk, Belanja Oleh-oleh).</li>\r\n<li>Perjalanan Kembali ke Medan.</li>', '<li>Kapal</li>', '4a78feb741ff5eace5c494f326bee359.png', '2024-08-06 09:07:42'),
(4, 1, 4, 'HARI KE-4 PULANG', '<li>Sampai di Medan.</li>\r\n<li>Sampai Jumpa di Trip Selanjutnya.</li>', '<li>Hiace</li>', '4a78feb741ff5eace5c494f326bee359.png', '2024-08-02 03:35:51'),
(5, 2, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di meeting point, kantor Doctor Trip (MEDAN).</li>', '<li>Hiace</li>', '8a58cd72fcde98c683a5a511be30c263.jpg', '2024-08-06 08:15:27'),
(6, 2, 2, 'HARI KE-2 EXPLORE', '<li>Perjalanan menuju Samosir.</li>\r\n<li>Tiba di Bukit Holbung (Sunrise Moment).</li>\r\n<li>Melanjutkan Perjalanan ke Air Terjun Efrata.</li>\r\n<li>Photo Stop di Air Terjun Efrata.</li>\r\n<li>Melanjutkan Perjalanan ke Hutasialagan\r\nPhoto Stop Jembatan Aek Tano Ponggol.</li>\r\n<li>Huta Siallagan (Tari Sigale-gale).</li>\r\n<li>Naik Kapal.</li>\r\n<li>Makan Siang di Kapal.</li>\r\n<li>Free Time di Situmurun (Berenang / main kayak/cano).</li>\r\n<li>Perjalanan ke Pantai Bebas Parapat.</li>\r\n<li>Perjalanan kembali ke Medan.</li>\r\n<li>Tiba di Medan\r\nSee You Next Trip !!!</li>', '<li>Kapal</li>', '8a58cd72fcde98c683a5a511be30c263.jpg', '2024-08-06 09:07:55'),
(7, 3, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di meeting point (Doctor Trip Indonesia) dan melakukan perjalanan menuju Sibolga.</li>', '<li>Hiace</li>', '051a8cdc31d39d53de8644d2e9195865.jpg', '2024-08-06 08:40:51'),
(8, 3, 2, 'HARI KE-2 EXPLORE', '<li>Tiba di Sibolga, Sarapan (Include).</li>\r\n<li>Persiapan jelajah pulau.</li>\r\n<li>Jelajah pulau (Badalu, Air Terjun Mursala, Blue Spot, Kalimantung).</li>\r\n<li>Photostop/Snorkeling di Pulau Badalu.</li>\r\n<li>PhotoStop di Air Terjun Mursala.</li>\r\n<li>Menuju Blue Spot.</li>\r\n<li>PhotoStop di Blue Spot.</li>\r\n<li>Melanjutkan perjalanan ke Pulau Kalimantung.</li>\r\n<li>ISOMA (Makan Siang Include) di Pulau Kalimantung dan Free Time.</li>\r\n<li>Aktivitas Snorkeling, Hunting Foto dan lain-lain.</li>\r\n<li>Perjalanan kembali ke Pantai Pandan.</li>\r\n<li>Check In Hotel.</li>\r\n<li>Free Time dan Istirahat / belanja oleh-oleh.</li>', '<li>Kapal</li>', '051a8cdc31d39d53de8644d2e9195865.jpg', '2024-08-06 08:36:18'),
(9, 3, 3, 'HARI KE-3 EXPLORE', '<li>Sarapan (Include).</li>\r\n<li>Check Out Hotel, Melanjutkan perjalanan ke Aek Sijornih.</li>\r\n<li>Freetime di Aek Sijornih.</li>\r\n<li>Melanjutkan Perjalanan ke Kota Medan.</li>', '<li>Kapal</li>', '051a8cdc31d39d53de8644d2e9195865.jpg', '2024-08-06 10:02:51'),
(10, 3, 4, 'HARI KE-4 PULANG', '<li>Tiba di Medan\r\nSee You Next Trip !!!</li>', '<li>Hiace</li>', '051a8cdc31d39d53de8644d2e9195865.jpg', '2024-08-06 08:41:15'),
(11, 4, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di Meeting Point (Medan).</li>\r\n<li>Berangkat menuju Padang.</li>\r\n<li>Berhenti sholat (Zuhur jamak Ashar).</li>\r\n<li>Berhenti sholat (Maghrib jamak Isya).</li>\r\n<li>Makan malam.</li>', '<li>Hiace</li>', '93da7ff0080ed80c4176b99cf2ad459a.png', '2024-08-06 08:44:05'),
(12, 4, 2, 'HARI KE-2 EXPLORE', '<li>Berhenti sholat Subuh.</li>\r\n<li>Sarapan pagi.</li>\r\n<li>Kelok 9.</li>\r\n<li>Lembah Arau.</li>\r\n<li>Istana Pagaruyung.</li>\r\n<li>Makan siang.</li>\r\n<li>Masjid Raya Padang (Sholat Zuhur jamak Ashar).</li>\r\n<li>Check in Padang.</li>\r\n<li>Pantai Air Manis (Malin Kundang).</li>\r\n<li>Jembatan Siti Nurbaya.</li>\r\n<li>Balik ke penginapan (Acara bebas).</li>', '<li>Hiace</li>', '93da7ff0080ed80c4176b99cf2ad459a.png', '2024-08-06 08:47:47'),
(13, 4, 3, 'HARI KE-3 EXPLORE', '<li>Check out.</li>\r\n<li>Sarapan pagi.</li>\r\n<li>Pantai Padang.</li>\r\n<li>Makan siang.</li>\r\n<li>Berhenti sholat (Zuhur jamak Ashar).</li>\r\n<li>Check in Bukit Tinggi.</li>\r\n<li>Air Terjun Lembah Anai.</li>\r\n<li>Lobang Jepang.</li>\r\n<li>Balik ke penginapan.</li>\r\n<li>Acara bebas.</li>', '<li>Hiace</li>', '93da7ff0080ed80c4176b99cf2ad459a.png', '2024-08-06 08:50:20'),
(14, 4, 4, 'HARI KE-4 EXPLORE', '<li>Check Out.</li>\r\n<li>Sarapan pagi.</li>\r\n<li>Jam Gadang.</li>\r\n<li>Belanja oleh-oleh.</li>\r\n<li>Makan siang.</li>\r\n<li>Berhenti sholat (Zuhur jamak Ashar).</li>\r\n<li>Balik ke Medan.</li>\r\n<li>Berhenti sholat (Maghrib jamak Isya).</li>\r\n<li>Makan malam.</li>\r\n<li>Kembali menuju Menuju Medan.</li>', '<li>Hiace</li>', '93da7ff0080ed80c4176b99cf2ad459a.png', '2024-08-06 08:52:22'),
(15, 4, 5, 'HARI KE-5 PULANG', '<li>Berhenti sholat Subuh.</li>\r\n<li>Sarapan pagi.</li>\r\n<li>Aek Sijornih.</li>\r\n<li>Makan siang.</li>\r\n<li>Berhenti sholat Zuhur jamak Ashar di Masjid Sipirok.</li>\r\n<li>Melanjutkan perjalanan kembali ke Medan.</li>\r\n<li>Berhenti sholat (Maghrib jamak Isya).</li>\r\n<li>Makan malam.</li>\r\n<li>Melanjutkan perjalanan kembali ke Medan.</li>\r\n<li>Tiba di Medan.</li>\r\n<li>Trip Selesai (See You Next Trip!!)</li>', '<li>Hiace</li>', '93da7ff0080ed80c4176b99cf2ad459a.png', '2024-08-06 08:54:38'),
(16, 5, 1, 'HARI KE-1 GATHERING', '<li>Perjalanan menuju Banda Aceh (Pelabuhan).</li>', '<li>Hiace</li>', '9a3a939d6066188ae269d4420fc2ae9f.png', '2024-08-06 08:56:02'),
(17, 5, 2, 'HARI KE-2 EXPLORE', '<li>Tiba di Pelabuhan Ule Lheue (Banda Aceh), Bersih-bersih dan Sarapan.</li>\r\n<li>Persiapan Nyebrang.</li>\r\n<li>Nyebrang ke Pelabuhan Balohan (Sabang).</li>\r\n<li>Tiba di Pelabuhan Balohan (Sabang).</li>\r\n<li>Melanjutkan Perjalanan Explore Sabang (Freddies, Ujung Karnag,\r\nKM 0 Indonesia, Snorkeling Pulau Rubiah).</li>\r\n<li>Melanjutkan perjalanan ke Hotel\r\nTiba dan Checkin Hotel (Istirahat).</li>', '<li>Kapal</li>', '9a3a939d6066188ae269d4420fc2ae9f.png', '2024-08-06 09:06:55'),
(18, 5, 3, 'HARI KE-3 ', '<li>Check Out Hotel (Menuju Pelabuhan Balohan, Sabang).</li>\r\n<li>Tiba di Pelabuhan Balohan (Persiapan Nyebrang).</li>\r\n<li>Nyebrang ke Pelabuhan Ule Lheue.</li>\r\n<li>Tiba di Pelabuhan Ule Lheue (Banda Aceh).</li>\r\n<li>Makan Siang.</li>\r\n<li>Explore Banda Aceh (Museum Tsunami, PLTD Apung, Pantai\r\nLampuuk, Masjid Baiturrahman, Belanja Oleh-oleh).</li>\r\n<li>Perjalanan Kembali ke Medan.</li>', '<li>Kapal</li>', '9a3a939d6066188ae269d4420fc2ae9f.png', '2024-08-06 09:09:41'),
(19, 5, 4, 'HARI KE-4 PULANG', '<li>Sampai di Medan.</li>\r\n<li>Sampai Jumpa di Trip Selanjutnya!</li>', '<li>Hiace</li>', '9a3a939d6066188ae269d4420fc2ae9f.png', '2024-08-06 09:10:47'),
(20, 6, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di meeting point (Doctor Trip Indonesia).</li>\r\n<li>Perjalanan menuju Pelabuhan Singkil.</li>', '<li>Hiace</li>', 'd4a0c7001dfcf382b395e75419db02a9.png', '2024-08-06 09:18:44'),
(21, 6, 2, 'HARI KE-2 EXPLORE', '<li>Sampai di Pelabuhan Singkil.</li>\r\n<li>Bebersih dan Sarapan.</li>\r\n<li>Penyebrangan ke Pulau Banyak.</li>\r\n<li>Sampai di Pelabuhan Pulau Banyak (Checkin Penginapan).</li>\r\n<li>Penyebrangan ke Pulau Panjang.</li>\r\n<li>Mengunjungi Pulau Rangit (Mercusuar).</li>\r\n<li>Mengunjungi Pulau Malelo (Pasir Putih).</li>\r\n<li>Kembali ke Pulau Balai.</li>\r\n<li>Free time.</li>\r\n<li>Makan Malam.</li>\r\n<li>Istirahat.</li>', '<li>Kapal</li>', 'd4a0c7001dfcf382b395e75419db02a9.png', '2024-08-06 09:21:26'),
(22, 6, 3, 'HARI KE-3 EXPLORE', '<li>Sarapan.</li>\r\n<li>Mengunjungi Pulau Teluk Nibung (penangkaran penyu).</li>\r\n<li>Mengunjungi Pulau Biawak.</li>\r\n<li>Mengunjungi Pulau Sikandang.</li>\r\n<li>Mengunjungi Pulau Asok (snorkeling).</li>\r\n<li>Kembali ke Pulau Balai.</li>\r\n<li>Tiba di Pula Balai (Persiapan naik kapal).</li>\r\n<li>Penyebrangan menuju Pelabuhan Singkil.</li>\r\n<li>Sampai di Pelabuhan Singkil.</li>\r\n<li>Perjalanan Menuju Kota Medan.</li>', '<li>Kapal</li>', 'd4a0c7001dfcf382b395e75419db02a9.png', '2024-08-06 09:23:19'),
(23, 6, 4, 'HARI KE-4 PULANG', '<li>Tiba di Medan.</li>\r\n<li>See You Next Trip!!!</li>', '<li>Hiace</li>', 'd4a0c7001dfcf382b395e75419db02a9.png', '2024-08-06 09:24:24'),
(24, 7, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di Meeting Point (kantor Doctor Trip Indonesia) pukul 19:00 Wib.</li>\r\n<li>Perjalanan menuju sibolga.</li>', '<li>Hiace</li>', '206efd495d9886d6d9463387cdfcaea4.png', '2024-08-06 10:03:53'),
(25, 7, 2, 'HARI KE-2 EXPLORE', '<li>Lanjut di hari ke 2 kita telah tiba di Sibolga kemudian melakukan sarapan dan bebersih/persiapan untuk Hopping Island.</li>\r\n<li>Berkumpul di bibir pantai pandan dab persiapan menaiki kapal kemudian Hopping Island dimulai yeayy....</li>\r\n<li>Dalam perjalanan hopping island ini kita akan mengunungi 4 spot destinasi.</li>\r\n<li>Destinasi pertama yang kita kunjungi yaitu Pulau Badalu, spot ini disebut sebagai surga bawah lautnya Sumut. Disini kita bisa melakukan aktivitas snorkeling atau hanya sekedar take foto/video dokumentasi dari atas kapal.</li>\r\n<li>Destinasi kedua yang kita kunjungi yaitu Air Terjun Mursala, Air Terjun ini merupakan air terjun yang alirannya langsung mengarah ke air laut samudera hindia dan tau ga? tempat ini pernah juga jadi Lokasi Syuting Film \"King Kong\" tahun 2005 lalu loh.</li>\r\n<li>Destinasi ketiga Blue Spot. Yupss disebut blue spot karena memang perairan dispot ini lebih biru dari perairan di sekitarnya. Disini kita bisa foto-foto di atas kapal juga.</li>\r\n<li>Nah tiba saatnya kita sampai di Pulau Kalimantung. ini tempat kita bersandar beberapa saat. Dipulau ini banyak aktivitas yang bisa kita lakukan, seperti main air, snorkeling, hunting foto/video di beberpa spot cantik yg ada atau sekedar duduk menikmati vitamin sea.</li>\r\n<li>Ketika hari sudah mulai sorean, kita bergegas kembali untuk melanjutkan perjalanan kembali ke pantai pandan.</li>\r\n<li>setelah sampai kembali di pantai pandan kita bergegas menuju hotel untuk check in kemudian bebersih.</li>\r\n<li>Dilanjut makan malam sekaligus belanja oleh-oleh khas sibolga.</li>\r\n<li>Waktunya istirahat dan tidur.</li>', '<li>Kapal</li>', '206efd495d9886d6d9463387cdfcaea4.png', '2024-08-06 09:33:25'),
(26, 7, 3, 'HARI KE-3 PULANG', '<li>Selamat pagii... kita akan melanjut perjalanan, tapi sebelum itu kita sarapan dulu. kemudian di lanjut bergegas checkout untuk melanjutkan perjalanan kembali ke Medan.</li>\r\n<li>Eits engga langsung balik ke medan juga. karena masih ada destinasi yang bakal kita kunjungin yaitu Kaldera Toba. tapi unutk destinasi kali ini destinasi yang jadi opsional ya, boleh masuk maupun engga karena tiket masuk di tanggung pribadi ya.</li>\r\n<li>Melanjutkan perjalanan balik ke medan.</li>\r\n<li>Trip selesai dan sampai ketemu kembali di trip selanjutnya ya!!</li>', '<li>Hiace</li>', '206efd495d9886d6d9463387cdfcaea4.png', '2024-08-06 09:34:55'),
(27, 8, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di Meeting Point (Pelabuhan Ule-lheue).</li>\r\n<li>Trip dimulai dengan nyeberang menggunakan kapal fery ke pelabuhan Balohan Sabang.</li>\r\n<li>Setelah melakukan penyeberangan yang memakan waktu sekitar 1 Jam 45 menit. akhirnya kita tiba di Sabang.</li>\r\n<li>Lanjut saatnya kita turun dari kapal dan menuju kendaraan untuk explore Sabang.</li>\r\n<li>Explore Sabang di mulai dengan mengunjungi KM 0 Indonesia, katanya engga ke sabang kalau engga mengunjungi  KM 0 Indonesia kan ya.</li>\r\n<li>Lanjut ke Iboih dan nyeberang ke Pulau Rubiah, disini waktunya kita basah-basahan melakukan aktivitas Snorkeling.</li>\r\n<li>Sorenya kita lanjut balik ke penginapan untuk bebersih dan dilanjut Free Time/Istirahat.</li>', '<li>Kapal</li>', '972c97bdc47dfc8def0e74c55da0bbfd.png', '2024-08-06 09:38:13'),
(28, 8, 2, 'HARI KE-2 EXPLORE', '<li>Explore Sabang hari ke dua dimulai dengan mengunjungi Freddies Santai Sumur Tiga. tempat ini merupakan Peginapan yang ada di pinggir pantai dengan view yang sangat menakjubkan. Kita akan melalui bangunan seperti jembatan untuk turun ke pantai. dari spot tersebut biasa menjadi tempat Favorite untuk mengambil dokumentasi foto dan video.</li>\r\n<li>Lanjut ke destinasi berikutnya, yaitu Ujung Karang. Tempat ini menawarkan panorama laut lepas yang luas dan formasi batu karang yang indah.</li>\r\n<li>Setelah berpuas-puas di destinasi diatas, selanjutnya kita melanjutkan perjalanan kembali ke pelabuhan Balohan Sabang.</li>\r\n<li>Sama seperti kemarin kita akan menempuh waktu sekitar 1 jam 45 menit untuk kembali ke pelabuhan Ule-Lheue (Banda Aceh).</li>\r\n<li>Tiba di Sabang (Trip Berakirh yeayy).</li>\r\n<li>See you next trip ya !!!</li>', '<li>Hiace</li>', '972c97bdc47dfc8def0e74c55da0bbfd.png', '2024-08-06 09:39:53'),
(29, 9, 1, 'HARI KE-1 GATHERING', '<li>Berkumpul di Meeting Point (Pelabuhan Aceh Singkil).</li>\r\n<li>Penyebrangan ke Pulau Banyak.</li>\r\n<li>Sampai di Pelabuhan Pulau Banyak (Checkin Penginapan).</li>\r\n<li>Penyebrangan ke Pulau Panjang.</li>\r\n<li>Mengunjungi Pulau Rangit (Mercusuar).</li>\r\n<li>Mengunjungi Pulau Malelo (Pasir Putih).</li>\r\n<li>Kembali ke Pulau Balai.</li>\r\n<li>Free time.</li>\r\n<li>Makan Malam.</li>\r\n<li>Istirahat.</li>', '<li>Hiace</li>', '5a958de36ab4fbc1360c3c75a85307f4.png', '2024-08-06 09:41:53'),
(30, 9, 2, 'HARI KE-2 EXPLORE', '<li>Sarapan.</li>\r\n<li>Mengunjungi Pulau Teluk Nibung (penangkaran penyu).</li>\r\n<li>Mengunjungi Pulau Biawak.</li>\r\n<li>Mengunjungi Pulau Sikandang.</li>\r\n<li>Mengunjungi Pulau Asok (snorkeling).</li>\r\n<li>Kembali ke Pulau Balai.</li>\r\n<li>Tiba di Pula Balai (Persiapan naik kapal).</li>\r\n<li>Penyebrangan menuju Pelabuhan Singkil.</li>\r\n<li>Sampai di Pelabuhan Singkil.</li>\r\n<li>Trip Selesai (See You Next Trip).</li>', '<li>Hiace</li>', '5a958de36ab4fbc1360c3c75a85307f4.png', '2024-08-06 09:43:54'),
(31, 10, 1, 'HARI KE-1 EXPLORE', '<li>Berkumpul di pantai pandan pukul 07:00 Wib.</li>\r\n<li>Persiapan menaiki kapal kemudian Hopping Island dimulai.</li>\r\n<li>Dalam perjalanan hopping island ini kita akan mengunungi 4 spot destinasi.</li>\r\n<li>Destinasi pertama yang kita kunjungi yaitu Pulau Badalu, spot ini disebut sebagai surga bawah lautnya Sumut. Disini kita bisa melakukan aktivitas snorkeling atau hanya sekedar take foto/video dokumentasi dari atas kapal.</li>\r\n<li>Destinasi kedua yang kita kunjungi yaitu Air Terjun Mursala, Air Terjun ini merupakan air terjun yang alirannya langsung mengarah ke air laut samudera hindia dan tau ga? tempat ini pernah juga jadi Lokasi Syuting Film \"King Kong\" tahun 2005 lalu loh.</li>\r\n<li>Destinasi ketiga Blue Spot. Yupss disebut blue spot karena memang perairan dispot ini lebih biru dari perairan di sekitarnya. Disini kita bisa foto-foto di atas kapal juga.</li>\r\n<li>Nah tiba saatnya kita sampai di Pulau Kalimantung. ini tempat kita bersandar beberapa saat. Dipulau ini banyak aktivitas yang bisa kita lakukan, seperti main air, snorkeling, hunting foto/video di beberpa spot cantik yg ada atau sekedar duduk menikmati vitamin sea.</li>\r\n<li>Ketika hari sudah mulai sorean, kita bergegas kembali untuk melanjutkan perjalanan kembali ke pantai pandan.</li>\r\n<li>sampai di pantai pandan, trip selesai dan see you next trip!!!</li>', '<li>Kapal</li>', '25eb471dc11c339ae31bf7685a277e46.png', '2024-08-06 09:46:13'),
(32, 11, 1, 'HARI KE-1 EXPLORE', '<li>Berkumpul di meeting point (MEDAN).</li>\r\n<li>Perjalanan menuju Loken Barn.</li>\r\n<li>Foto Stop di Loken Barn.</li>\r\n<li>Melanjutkan perjalaan ke Air Terjun Efrata.</li>\r\n<li>Foto Stop di Air Terjun Efrata.</li>\r\n<li>Makan siang dan acara bebas.</li>\r\n<li>Melanjutkan perjalanan ke Bukit Sibea-Bea.</li>\r\n<li>Foto Stop di Sibea-Bea.</li>\r\n<li>Melanjutkan perjalanan ke Bukit Holbung.</li>\r\n<li>Foto Stop dan acara bebas di Bukit Holbung.</li>\r\n<li>Perjalanan kembali ke Medan.</li>\r\n<li>Tiba di Medan (Trip Selesai!).</li>\r\n<li>See You Next Time!</li>', '<li>Hiace</li>', 'f6b8679282fdf760aaad476fad0ddf12.png', '2024-08-06 09:48:47'),
(33, 12, 1, 'HARI KE-1 GATHERING', '<li>No Data</li>', '<li>No Data</li>', '482afeb462daaebce1b4681e1f06b3c7.png', '2024-08-06 09:52:57'),
(34, 12, 2, 'HARI KE-2 EXPLORE', '<li>No Data</li>', '<li>No Data</li>', '482afeb462daaebce1b4681e1f06b3c7.png', '2024-08-06 09:53:44'),
(35, 12, 3, 'HARI KE-3 PULANG', '<li>No Data</li>', '<li>No Data</li>', '482afeb462daaebce1b4681e1f06b3c7.png', '2024-08-06 09:54:28'),
(36, 13, 1, 'HARI KE-1 GATHERING', '<li>No Data</li>', '<li>No Data</li>', 'cffe819d4413b95dd8c35c0085930789.png', '2024-08-06 09:55:11'),
(37, 13, 2, 'HARI KE-2 EXPLORE', '<li>No Data</li>', '<li>No Data</li>', 'cffe819d4413b95dd8c35c0085930789.png', '2024-08-06 09:55:44'),
(38, 13, 3, 'HARI KE-3 EXPLORE', '<li>No Data</li>', '<li>No Data</li>', 'cffe819d4413b95dd8c35c0085930789.png', '2024-08-06 09:56:19'),
(39, 13, 4, 'HARI KE-4 PULANG', '<li>No Data</li>', '<li>No Data</li>', 'cffe819d4413b95dd8c35c0085930789.png', '2024-08-06 09:56:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `is_active` enum('Tidak','Iya') NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `title`, `name`, `icon`, `is_active`, `input_at`) VALUES
(1, 'Dashboard', 'dashboard', 'bx bxs-store-alt', 'Iya', '2024-09-05 06:40:02'),
(2, 'Open Trip', 'opentrip', 'bx bxs-plane', 'Iya', '2024-09-05 06:40:32'),
(3, 'Itinerary', 'itinerary', 'bx bxs-briefcase-alt-2', 'Iya', '2024-09-05 06:41:12'),
(4, 'Schedule', 'schedule', 'bx bxs-notepad', 'Iya', '2024-09-05 06:41:37'),
(5, 'Gallery', 'gallery', 'bx bxs-grid-alt', 'Iya', '2024-09-05 06:42:05'),
(6, 'Client', 'client', 'bx bxs-user-account', 'Iya', '2024-09-05 06:42:33'),
(7, 'Review', 'review', 'bx bxs-star', 'Iya', '2024-09-05 06:42:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mitra`
--

CREATE TABLE `tbl_mitra` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `file` text NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mitra`
--

INSERT INTO `tbl_mitra` (`id`, `name`, `file`, `input_at`) VALUES
(1, 'ACE WARE', '360e2ece07507675dced80ba867d6dcd.png', '2024-06-02 17:35:47'),
(2, 'BNI', '5c199234210e910129d3913b58bdc9d8.png', '2024-06-02 17:36:37'),
(3, 'INDAKO', '72df3edda62163b4a3dca3aadaba7deb.png', '2024-06-02 17:37:15'),
(4, 'INFORMA', 'a4ec7d3459f8ba7e2c302d9fe70e21ee.png', '2024-06-02 17:37:51'),
(5, 'KIM', 'fb1eaf2bd9f2a7013602be235c305e7a.png', '2024-06-02 17:38:28'),
(6, 'TELKOM AKSES', '7bcffcbd59a2f6194853d4de10143c8e.png', '2024-06-02 17:43:30'),
(7, 'PLN', '7c90e34bded1194349f9364bfcab0762.png', '2024-06-02 17:39:43'),
(8, 'PTPN', 'a3ac11f7a56e4ef84323dffde9880fa8.png', '2024-06-02 17:40:21'),
(9, 'TELKOMSEL', '51b0c69926535e5289cddf6f27c64631.png', '2024-06-02 17:41:04'),
(10, 'UINSU', 'd469942d5879f8afb9dea2b177bfa614.png', '2024-06-02 17:41:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `location` text NOT NULL,
  `maps` text NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `name`, `about`, `telp`, `email`, `address`, `location`, `maps`, `input_at`) VALUES
(1, 'Doctor Trip Indonesia', 'Doctor Trip Indonesia merupakan badan usaha yang bergerak dibidang tour and travel yang menyediakan layanan open trip maupun private trip yang semakin mudah, hemat dan menyenangkan ke berbagai destinasi menarik. Doctor Trip Indonesia kini sudah menjalin kerjasama dengan berbagai penyedia jasa pendukung perjalanan dan menjamin kenyamanan Travellers mulai dari penginapan, transportasi, destinasi wisata, serta Travelmate yang sudah berpengalaman untuk menemani liburan kamu agar lebih berkesan.', '6281269146575', 'doctortrip@gmail.com', 'Jl. Sei Belutu No.34, Padang Bulan Selayang I, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20131.', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.049748527886!2d98.64835081479283!3d3.576038251377126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312f1439f52777%3A0x5727ce374aa67660!2sDoctor%20Trip%20Indonesia!5e0!3m2!1sen!2sid!4v1676436638774!5m2!1sen!2sid', '2024-06-08 04:42:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_review`
--

INSERT INTO `tbl_review` (`id`, `name`, `message`, `input_at`) VALUES
(1, 'Aldito Fayyadh Yustihar', 'Pengalaman Luar biasa melakukan perjalanan bersama Doctor Trip. Para Travel Mate nya ramah ramah banget. Enjoy banget selama perjalanan😊.', '2024-06-10 15:27:30'),
(2, 'Sari Handa', 'Kali ke2 jalan2 ikut travel, pake DocTrip dibulan Februari\'24 ke Padang, pas banget wktu itu DocTrip Open trip ke Padang, Gass laa terus yakan hehe, Admin nya gercep, guide nya juga humble, ktemu bestie baruu jugaa, seruu banget deh pkok nyaaa, see U next trip Pulau Banyak, yuhuuuuu 😅.', '2024-06-11 19:16:17'),
(3, 'Nadya Jollin Wahyudi', 'PARAHHH SII!!! Pakai Doctrip dijamin auto the best bangetttt aku udah ke samosir sama sabang pakai jasa travel ini ga nyesel sama sekali. Padahal solo trip, tapi serasa punya keluarga kedua atau kayak bawak temen karena travelmatenya asik\"banget. ThankYou Doctrip💙.', '2024-06-11 19:22:43'),
(4, 'Kristoria Siallagan', 'Pertama kali ikutan open trip plus solo, awal nya ragu karena sendirian, tapi ternyata malah ketemu banyak temen yg awalnya ga kenal, travelmatenya juga pada ramah dan baik. recomended, next bakal pake doctrip lagi, ga bakal selingkuh hehe.', '2024-06-11 19:17:43'),
(5, 'Adam Nasution', 'Mantapp banget trip dan pelayananya,uda 3x pake trip dokter trep,yg terakhir ke pulau banyak,pulau nya mantap kali,makannya enak enak semua,pokok nya mantap Tm nya ramah ramah baik.', '2024-06-11 19:18:17'),
(6, 'Jheta Pratiwi', 'Yang awalnya nekat solo trip, malah dapat keluarga baru. Doctor Trip benar2 teman healing terbaik sih, travelmatenya juga baik baik banget. Best pokoknya. see you next trip ☺ #healingwithdoctortrip.', '2024-06-11 19:19:01'),
(7, 'Elpina Sari Siregar', 'Langganan trip disiniii, dari mulai Sibolga sampai ke sabanggg ini juga mau ikut trip pulau banyakkk pokoknya healing ga ribet ikut trip aja.', '2024-06-11 19:19:55'),
(8, 'Triana Sari', 'Baru pertama kali ikut trip trip ginian, eh taunya ketagihan.. Adminnya super duper gercep, guidenya juga friendly abieezz, makasih yaa Doctor Trip udah manjadi salah satu pilihan terbaik buat Healing akuu, otw trip mana nih, sabanglah kuyyy!', '2024-06-11 19:20:27'),
(9, 'Juni Lim', 'Pertama x ikut trip travel ya lewat docter trip..puas banget 👍guide nya juga ramah dan banyak bantu..semoga tetap menberikan layanan terbaik dan yg hobi healing ga ada teman ga usah takut,akan byk Tmn baru..', '2024-06-11 19:21:04'),
(10, 'Deva Sembiring', 'Puas sama pelayanannya,TM ramah dan friendly banget dan yang paling senang itu aku banyak jumpa teman baru,seruu kali laa kalian harus cobaan juga.', '2024-06-11 19:21:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id` int(11) NOT NULL,
  `id_trip` int(11) NOT NULL,
  `january` varchar(250) NOT NULL,
  `february` varchar(250) NOT NULL,
  `march` varchar(250) NOT NULL,
  `april` varchar(250) NOT NULL,
  `may` varchar(250) NOT NULL,
  `june` varchar(250) NOT NULL,
  `july` varchar(250) NOT NULL,
  `august` varchar(250) NOT NULL,
  `september` varchar(250) NOT NULL,
  `october` varchar(250) NOT NULL,
  `november` varchar(250) NOT NULL,
  `december` varchar(250) NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id`, `id_trip`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`, `input_at`) VALUES
(1, 1, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(2, 2, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(3, 3, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(4, 4, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(5, 5, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(6, 6, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(7, 7, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(8, 8, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(9, 9, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(10, 10, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(11, 11, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(12, 12, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55'),
(13, 13, 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', 'SETIAP WEEKEND', '2024-08-15 03:18:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `id_trip` int(11) NOT NULL,
  `photo` text NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `id_trip`, `photo`, `input_at`) VALUES
(1, 1, '8b04d5e3775d298e78455efc5ca404d5.png', '2024-06-26 16:47:56'),
(2, 1, 'a319360336c8cac32102f4dffbee4260.png', '2024-06-26 16:48:27'),
(3, 1, 'ca0e90458e0fa1ec4b91cd5ce243f25f.png', '2024-06-26 16:48:51'),
(4, 2, 'a8c71f9b5cf41a482b1185480932db3b.jpg', '2024-06-29 04:51:48'),
(5, 2, '6742923575546471370cc028f289db40.jpg', '2024-06-29 04:53:04'),
(6, 2, '1099bcee169daf6a3039ac47f82037ca.jpg', '2024-06-29 04:57:34'),
(7, 3, '0ac1a3dd00e77a8920b26c2c8aa839ca.jpg', '2024-06-26 16:53:48'),
(8, 3, '106f0bb87e7c619df5f3ab3f95c7423b.jpg', '2024-06-26 16:54:46'),
(9, 3, '4468335418d080311ac997834468aace.jpg', '2024-06-26 16:56:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` enum('WhatsApp','Instagram','Tik Tok','Youtube') NOT NULL,
  `account` varchar(250) NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `name`, `type`, `account`, `input_at`) VALUES
(1, 'Tik Tok DocTrip.id', 'Tik Tok', '@doctrip.id', '2024-06-09 16:45:56'),
(2, 'Instagram DocTrip.id', 'Instagram', 'doctrip.id', '2024-06-09 16:45:24'),
(3, 'Admin WA', 'WhatsApp', '081269146575', '2024-06-02 16:12:59'),
(4, 'Admin WA Private', 'WhatsApp', '081374971702', '2024-06-02 16:13:07'),
(5, 'Instagram DocTrip.asia', 'Instagram', 'doctrip.asia', '2024-06-09 16:46:42'),
(6, 'Instagram DocTrans.id', 'Instagram', 'doctrans.id', '2024-06-09 16:47:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_trip`
--

CREATE TABLE `tbl_trip` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `aft_price` int(11) DEFAULT NULL,
  `file` text NOT NULL,
  `detail` text NOT NULL,
  `type` enum('OPEN','SPECIAL','PROMO') NOT NULL,
  `seat` int(11) NOT NULL,
  `meet` varchar(250) NOT NULL,
  `location` text NOT NULL,
  `include` text NOT NULL,
  `exclude` text NOT NULL,
  `s_k` text NOT NULL,
  `is_active` enum('Tidak','Iya') NOT NULL,
  `is_asia` enum('Tidak','Iya') NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `input_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_trip`
--

INSERT INTO `tbl_trip` (`id`, `name`, `sub`, `price`, `aft_price`, `file`, `detail`, `type`, `seat`, `meet`, `location`, `include`, `exclude`, `s_k`, `is_active`, `is_asia`, `from_date`, `to_date`, `input_at`) VALUES
(1, 'SPECIAL TRIP 4D3N', 'Sabang & Banda Aceh<br>(Staycation at Freddies Plus Boat Trip Hunting Lumba-lumba)', 1250000, 0, '4a78feb741ff5eace5c494f326bee359.png', 'Sabang, tempat yang menakjubkan di ujung barat Pulau Weh, menyuguhkan pemandangan laut yang memukau. Dari tepi pantai, matahari terbenam membentuk perpaduan warna-warni yang memukau, menciptakan siluet yang menawan di balik cakrawala. Suasana tenang dan damai memeluk setiap pengunjung, membuat setiap momen di Sabang menjadi tak terlupakan.\r\n<br><br>\r\nBanda Aceh, ibukota Provinsi Aceh, juga menawarkan pesona alam yang luar biasa. Pantai-pantai yang memikat seperti Pantai Lampuuk dan Pantai Lhoknga menawarkan ombak yang cocok untuk berselancar dan pemandangan matahari terbenam yang menakjubkan. Selain itu, kekayaan budaya dan sejarah Aceh tercermin dalam keindahan Masjid Raya Baiturrahman yang megah.', 'SPECIAL', 4, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi Full AC Medan-Banda Aceh.</li>\r\n<li>Transportasi City Tour Sabang.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Tiket Penyebrangan Kapal Fery.</li>\r\n<li>Tiket Boat Pulau Rubiah PP.</li>\r\n<li>Seluruh Tiket Wisata.</li>\r\n<li>Penginapan Ac 1 malam di Sabang\r\n(1 kamar 3 Orang).</li>\r\n<li>Boat Trip Hunting Lumba-lumba.</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>Guide Snorkeling &\r\nDokumentasi GoPro.</li>\r\n<li>Travelmate/Tour Guide\r\nP3K.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Makan & Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 50k (Sudah termasuk\r\ndi dalam invoice).</li>\r\n<li>Snorkeling 65k / Orang\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota minimal trip special berikut terlaksana minimal kuota sebanyak 40 pendaftar,\r\napabila kurang maka Doctor Trip berhak membatalkan trip tersebut.</li>\r\n<li>Sebelum h-5 dari jadwal keberangatan Doctor Trip akan mengkonfirmasi apakah trip fix\r\nberangkat atau tidaknya.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip. Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Apabila batal berangkat maka Doctor Trip akan mengembalikan seluruh dana yang telah\r\ndibayarkan oleh peserta trip, maksimal proses pengembalian 3 hari kerja.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>\r\n<br>\r\n<b>Ketentuan Boat Trip Hunting Lumba-Lumba</b>\r\n<br>\r\n<li>Batas waktu maksimal dalam melakukan hunting lumba-lumba selama 1 jam. Maka apabila\r\ndalam 1 jam lumba-luma tidak ditemukan kana lanjut ke program selanjutnya.</li>\r\n<li>Apabila saat dilaksanakannya Tour Lumba-lumba ternyata lumba-lumba sedang tidak muncul\r\nkepermukaan akibat kondisi cuaca dan lainnya maka Doctor Trip tidak dapat dituntut atas\r\npengembalian dana program trip lumba-lumba.</li>\r\n<li>Waktu Hunting Lumba-Lumba sesuai dengan itinerary yg ada dan sewaktu-waktu dapat\r\nberubah menyesuaikan kondisi yang terjadi di lapangan.</li>\r\n<li>Apabila sebelum melaksanakan Tour Lumba-lumba kondisi cuaca tidak memungkinkan untuk dilakukannya trip lumba-lumba atau adanya larangan untuk melaut maka dana tour lumba-\r\nlumba akan di refund ke masing-masing peserta sebesar 50 k / Orang.</li>', 'Iya', 'Tidak', '2024-06-03', '2024-06-07', '2024-09-05 06:36:07'),
(2, 'SPECIAL TRIP MIDNIGHT', 'Samosir + Air Terjun Situmurun', 500000, 425000, '8a58cd72fcde98c683a5a511be30c263.jpg', 'Samosir adalah sebuah pulau yang terletak di tengah Danau Toba, Sumatera Utara, Indonesia. Pulau ini terkenal dengan keindahan alamnya yang memukau serta kekayaan budaya Batak yang kental. Samosir menawarkan berbagai destinasi wisata menarik, seperti desa-desa tradisional, situs-situs bersejarah, dan pemandangan danau yang menakjubkan. Selain itu, wisatawan juga dapat menikmati aktivitas seperti berenang di danau, bersepeda mengelilingi pulau, dan mengeksplorasi seni serta kerajinan tangan khas Batak. Pulau ini mudah diakses melalui feri dari Parapat, menjadikannya destinasi populer bagi wisatawan domestik dan mancanegara.\r\n<br>\r\nAir Terjun Situmurun, yang juga dikenal sebagai Air Terjun Binangalom, adalah salah satu keajaiban alam yang terletak di tepi Danau Toba, dekat dengan Samosir. Air terjun ini unik karena airnya langsung jatuh ke danau, menciptakan pemandangan yang spektakuler dan memukau. Dengan ketinggian sekitar 70 meter, Air Terjun Situmurun menawarkan suasana yang tenang dan menyegarkan, serta merupakan tempat yang sempurna untuk berenang atau sekadar bersantai sambil menikmati keindahan alam sekitar. Air terjun ini dapat diakses dengan perahu dari berbagai titik di sekitar Danau Toba, menjadikannya tujuan yang wajib dikunjungi bagi para pecinta alam dan petualang.', 'SPECIAL', 4, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi PP Full AC.</li>\r\n<li>BBM.</li>\r\n<li>Parkir.</li>\r\n<li>Fee Driver.</li>\r\n<li>Biaya Tol.</li>\r\n<li>Kapal Tour Danau.</li>\r\n<li>Pelampung.</li>\r\n<li>Air Mineral.</li>\r\n<li>Dokumentasi Foto/Video.</li>\r\n<li>Dokumentasi Drone.</li>\r\n<li>Makan Siang 1x.</li>\r\n<li>P3K.</li>\r\n<li>Seluruh Tiket Wisata.</li>', '<li>Makan di luar program.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 35 k (termasuk di\r\ndalam invoice).</li>\r\n<li>Tiket Wisata Sibea-bea\r\n(Opsional).</li>\r\n<li>Sewa kayak/kano 150 k/ kano\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip berjumlah minimal 15 Orang.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau\r\nganti nama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-10', '2024-06-14', '2024-09-05 06:36:14'),
(3, 'SPECIAL TRIP 4D3N', 'Sibolga Kalimantung<br>(Plus Air Terjun Aek Sijornih)', 849000, NULL, '051a8cdc31d39d53de8644d2e9195865.jpg', 'Sibolga Kalimantung adalah sebuah kota kecil yang terletak di pesisir barat Sumatera Utara, Indonesia. Kota ini dikenal dengan pesonanya yang menawan, memiliki pantai-pantai yang indah serta keindahan alam yang masih alami. Sibolga juga merupakan pusat perdagangan yang penting bagi masyarakat setempat karena letaknya yang strategis di tepi laut. Masyarakatnya yang ramah dan budaya yang kaya membuat Sibolga menjadi tempat yang menarik untuk dikunjungi oleh wisatawan. Di sini, pengunjung dapat menikmati keindahan alam serta kekayaan budaya lokal yang masih terjaga dengan baik.\r\n<br><br>\r\nAir Terjun Aek Sijornih terletak di daerah Tapanuli Selatan, tidak terlalu jauh dari Sibolga. Nama \"Aek Sijornih\" sendiri berarti \"air yang jernih\" dalam bahasa Batak, sesuai dengan karakteristik air terjun ini yang memiliki air yang sangat bersih dan bening. Air terjun ini terdiri dari beberapa tingkatan kecil yang mengalir melalui bebatuan kapur yang unik, menciptakan pemandangan yang sangat mempesona. Tempat ini menjadi destinasi favorit bagi para wisatawan yang ingin menikmati suasana alam yang tenang dan segar. Selain keindahan alamnya, lokasi ini juga menawarkan kesegaran air yang alami, sangat cocok untuk berenang atau sekadar berendam.', 'SPECIAL', 4, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi PP Full AC\r\nMedan-Sibolga + Aek Sijornih.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Kapal Speed Boat Jelajah Pulau.</li>\r\n<li>Tiket Wisata Pulau.</li>\r\n<li>Life Jacket.</li>\r\n<li>Makan 3 kali.</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>Dokumentasi GoPro Snorkeling.</li>\r\n<li>P3K.</li>\r\n<li>Penginapan AC 1 Malam\r\n(1 kamar 3 orang).</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 50k (Sudah termasuk\r\ndi dalam invoice).</li>\r\n<li>Snorkeling 65k / Orang\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota minimal trip special berikut terlaksana minimal kuota sebanyak 40 pendaftar,\r\napabila kurang maka Doctor Trip berhak membatalkan trip tersebut.</li>\r\n<li>Sebelum h-5 dari jadwal keberangatan Doctor Trip akan mengkonfirmasi apakah trip fix\r\nberangkat atau tidaknya.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip. Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Apabila batal berangkat maka Doctor Trip akan mengembalikan seluruh dana yang telah\r\ndibayarkan oleh peserta trip, maksimal proses pengembalian 3 hari kerja.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-17', '2024-06-21', '2024-09-05 06:36:20'),
(4, 'Special Trip 5D4N', 'Padang & Bukit Tinggi<br>(Plus Aek Sijornih)', 1250000, NULL, '93da7ff0080ed80c4176b99cf2ad459a.png', 'Padang, ibu kota Provinsi Sumatera Barat, merupakan sebuah kota yang kaya akan budaya dan sejarah. Kota ini dikenal dengan kulinernya yang lezat, terutama masakan Padang yang terkenal di seluruh Indonesia dan dunia. Selain kelezatan makanannya, Padang juga menawarkan pemandangan alam yang memukau, seperti Pantai Padang, yang menjadi tempat favorit bagi wisatawan untuk menikmati sunset. Kota ini juga memiliki banyak bangunan bersejarah dan museum, seperti Museum Adityawarman, yang memberikan wawasan mendalam tentang budaya Minangkabau. Padang juga berfungsi sebagai pintu gerbang menuju berbagai destinasi wisata lainnya di Sumatera Barat.\r\n<br><br>\r\nBukit Tinggi, yang terletak sekitar dua jam perjalanan dari Padang, adalah sebuah kota yang dikelilingi oleh keindahan alam dan pegunungan. Kota ini terkenal dengan Jam Gadang, sebuah menara jam ikonik yang menjadi simbol Bukit Tinggi dan pusat aktivitas kota. Selain itu, Bukit Tinggi juga memiliki bentang alam yang menakjubkan, seperti Ngarai Sianok dan Taman Panorama, yang menawarkan pemandangan ngarai yang dramatis dan indah. Kota ini juga merupakan pusat budaya Minangkabau dengan banyaknya rumah adat, pasar tradisional, dan kerajinan tangan yang unik. Bukit Tinggi merupakan destinasi wisata yang sempurna bagi mereka yang ingin merasakan keindahan alam sekaligus mempelajari budaya lokal yang kaya.', 'SPECIAL', 4, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/mvSxnqm2EG1AnKEW9', '<li>Transportasi PP Full AC\r\nMedan - Padang.</li>\r\n<li>Tiket Wisata Lembah Harau,\r\nIstana Pagaruyung, Pantai Aih\r\nManih, Lembah Anai, Aek\r\nSijornih, Lobang Jepang.</li>\r\n<li>Penginapan 1 Malam di Padang\r\n(1 kamar 3 orang).</li>\r\n<li>Penginapan 1 Malam di Bukit\r\nTinggi (1 kamar 3 orang).</li>\r\n<li>Air mineral selama trip.</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>P3K.</li>\r\n<li>Travelmate/Tour Guide.</li>\r\n<li>Pengalaman paling bahagia.</li>\r\n<li>Biaya Parkir.</li>\r\n<li>Biaya Tol.</li>', '<li>Makan & Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 65k (Sudah termasuk\r\ndi dalam invoice).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali\r\npembatalan keberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip menyesuaikan transportasi yang digunakan berupa Elf dengan kuota\r\nminimal 17 Orang dan Bus Pariwisata dengan kuota minimal 35 Orang.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala\r\nkerugian yang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip.\r\nDoctor trip akan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan\r\nterlebih dahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal\r\nini doctor trip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service\r\nyang sudah dibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya\r\ntambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas\r\npengembalian uang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi\r\ntanggung jawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-13', '2024-06-17', '2024-09-05 06:36:29'),
(5, 'OPEN TRIP 4D3N', 'Sabang & Banda Aceh', 1200000, 985000, '9a3a939d6066188ae269d4420fc2ae9f.png', 'Sabang, tempat yang menakjubkan di ujung barat Pulau Weh, menyuguhkan pemandangan laut yang memukau. Dari tepi pantai, matahari terbenam membentuk perpaduan warna-warni yang memukau, menciptakan siluet yang menawan di balik cakrawala. Suasana tenang dan damai memeluk setiap pengunjung, membuat setiap momen di Sabang menjadi tak terlupakan.\r\n<br><br>\r\nBanda Aceh, ibukota Provinsi Aceh, juga menawarkan pesona alam yang luar biasa. Pantai-pantai yang memikat seperti Pantai Lampuuk dan Pantai Lhoknga menawarkan ombak yang cocok untuk berselancar dan pemandangan matahari terbenam yang menakjubkan. Selain itu, kekayaan budaya dan sejarah Aceh tercermin dalam keindahan Masjid Raya Baiturrahman yang megah.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi PP Full AC\r\nMedan-Banda Aceh-Sabang.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Tiket Penyebrangan Kapal Fery.</li>\r\n<li>Tiket Boat Pulau Rubiah PP.</li>\r\n<li>Seluruh Tiket Wisata.</li>\r\n<li>Penginapan Ac 1 malam di Sabang\r\n(1 kamar 3 Orang).</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>Guide Snorkeling &\r\nDokumentasi GoPro.</li>\r\n<li>Travelmate/Tour Guide.</li>\r\n<li>P3K.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Makan & Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 50k (Sudah termasuk\r\ndi dalam invoice).</li>\r\n<li>Snorkeling 65k / Orang\r\n(Opsional).</li>\r\n<li>Boat Trip Hunting Dolphin 250 k\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota minimal trip special berikut terlaksana minimal kuota sebanyak 40 pendaftar,\r\napabila kurang maka Doctor Trip berhak membatalkan trip tersebut.</li>\r\n<li>Sebelum h-5 dari jadwal keberangatan Doctor Trip akan mengkonfirmasi apakah trip fix\r\nberangkat atau tidaknya.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip. Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Apabila batal berangkat maka Doctor Trip akan mengembalikan seluruh dana yang telah\r\ndibayarkan oleh peserta trip, maksimal proses pengembalian 3 hari kerja.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>\r\n<br>\r\n<b>Ketentuan Boat Trip Hunting Lumba-Lumba</b>\r\n<br>\r\n<li>Batas waktu maksimal dalam melakukan hunting lumba-lumba selama 1 jam. Maka apabila\r\ndalam 1 jam lumba-luma tidak ditemukan kana lanjut ke program selanjutnya.</li>\r\n<li>Apabila saat dilaksanakannya Tour Lumba-lumba ternyata lumba-lumba sedang tidak muncul\r\nkepermukaan akibat kondisi cuaca dan lainnya maka Doctor Trip tidak dapat dituntut atas\r\npengembalian dana program trip lumba-lumba.</li>\r\n<li>Waktu Hunting Lumba-Lumba sesuai dengan itinerary yg ada dan sewaktu-waktu dapat\r\nberubah menyesuaikan kondisi yang terjadi di lapangan.</li>\r\n<li>Apabila sebelum melaksanakan Tour Lumba-lumba kondisi cuaca tidak memungkinkan untuk dilakukannya trip lumba-lumba atau adanya larangan untuk melaut maka dana tour lumba-\r\nlumba akan di refund ke masing-masing peserta sebesar 50 k / Orang.</li>', 'Iya', 'Tidak', '2024-06-10', '2024-06-14', '2024-09-05 06:36:36'),
(6, 'OPEN TRIP 4D3N', 'PULAU BANYAK<br>(ACEH SINGKIL)', 1200000, 1100000, 'd4a0c7001dfcf382b395e75419db02a9.png', 'Pulau Banyak, terletak di Kabupaten Aceh Singkil, adalah sebuah gugusan pulau yang terdiri dari sekitar 99 pulau kecil yang tersebar di lautan biru yang jernih. Pulau-pulau ini menawarkan keindahan alam yang luar biasa dengan pantai berpasir putih, terumbu karang yang indah, serta hutan mangrove yang lebat. Keanekaragaman hayati lautnya membuat Pulau Banyak menjadi surga bagi para penyelam dan snorkeler. Selain aktivitas bawah air, wisatawan juga dapat menikmati keindahan alam dengan berkeliling pulau menggunakan perahu tradisional, menjelajahi pulau-pulau yang belum terjamah, serta berkemah di pantai-pantai yang tenang dan terpencil.\r\n<br><br>\r\nSelain keindahan alamnya, Pulau Banyak juga memiliki nilai budaya yang menarik. Masyarakat setempat yang sebagian besar adalah nelayan, hidup dengan cara yang sederhana dan masih sangat dekat dengan alam. Wisatawan yang berkunjung ke sini dapat merasakan keramahan penduduk lokal serta menikmati kuliner khas daerah yang lezat. Pulau Banyak juga sering dikunjungi oleh wisatawan yang mencari ketenangan dan kedamaian, jauh dari hiruk-pikuk kehidupan kota. Dengan segala keindahan dan keunikan yang ditawarkan, Pulau Banyak menjadi destinasi wisata yang sempurna bagi para pecinta alam dan petualangan.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi PP\r\nMedan-Pelabuhan Singkil.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Tiket Penyebrangan Kapal\r\nFery/Lokal PP Singkil - Pulau\r\nBanyak.</li>\r\n<li>Kapal Jelajah Pulau PP.</li>\r\n<li>Seluruh Tiket Wisata.</li>\r\n<li>Penginapan/Homestay di pulau\r\nbalai (1 kamar 2 Orang).</li>\r\n<li>Makan 2 x (makan siang day 2 &\r\nsarapan day 3).</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>Dokumentasi Underwater Gopro.</li>\r\n<li>Life Jacket.</li>\r\n<li>P3K.</li>\r\n<li>Travelmate/Tour Guide.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Makan & Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Sewa AlaSnorkeling 65k /\r\nOrang (Opsional).</li>\r\n<li>Tipp Guide 45k (Sudah termasuk\r\ndi dalam invoice).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip menyesuaikan transportasi yang digunakan berupa mobil pribadi/mini\r\nbus (5-6 Orang), Hiace(13-14 Orang), dan Elf (15-17 Orang) dan Bus Pariwisata.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>\r\n<br>\r\n<b>Ketentuan Boat Trip Hunting Lumba-Lumba</b>\r\n<br>\r\n<li>Batas waktu maksimal dalam melakukan hunting lumba-lumba selama 1 jam. Maka apabila\r\ndalam 1 jam lumba-luma tidak ditemukan kana lanjut ke program selanjutnya.</li>\r\n<li>Apabila saat dilaksanakannya Tour Lumba-lumba ternyata lumba-lumba sedang tidak muncul\r\nkepermukaan akibat kondisi cuaca dan lainnya maka Doctor Trip tidak dapat dituntut atas\r\npengembalian dana program trip lumba-lumba.</li>\r\n<li>Waktu Hunting Lumba-Lumba sesuai dengan itinerary yg ada dan sewaktu-waktu dapat\r\nberubah menyesuaikan kondisi yang terjadi di lapangan.</li>\r\n<li>Apabila sebelum melaksanakan Tour Lumba-lumba kondisi cuaca tidak memungkinkan untuk dilakukannya trip lumba-lumba atau adanya larangan untuk melaut maka dana tour lumba-\r\nlumba akan di refund ke masing-masing peserta sebesar 50 k / Orang.</li>', 'Iya', 'Tidak', '2024-06-14', '2024-06-17', '2024-09-05 06:36:44'),
(7, 'OPEN TRIP 3D2N', 'SIBOLGA KALIMANTUNG', 1000000, 745000, '206efd495d9886d6d9463387cdfcaea4.png', 'Sibolga Kalimantung adalah sebuah kota kecil yang terletak di pesisir barat Sumatera Utara, Indonesia. Kota ini dikenal dengan pesonanya yang menawan, memiliki pantai-pantai yang indah serta keindahan alam yang masih alami. Sibolga juga merupakan pusat perdagangan yang penting bagi masyarakat setempat karena letaknya yang strategis di tepi laut. Masyarakatnya yang ramah dan budaya yang kaya membuat Sibolga menjadi tempat yang menarik untuk dikunjungi oleh wisatawan. Di sini, pengunjung dapat menikmati keindahan alam serta kekayaan budaya lokal yang masih terjaga dengan baik.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi PP Full AC\r\nMedan-Sibolga.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Kapal Speed Boat Jelajah Pulau.</li>\r\n<li>Tiket Wisata Pulau.</li>\r\n<li>Life Jacket.</li>\r\n<li>Makan siang di pulau 1x.</li>\r\n<li>Dokumentasi Drone.</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>Dokumentasi GoPro Snorkeling.</li>\r\n<li>P3K.</li>\r\n<li>Penginapan AC 1 Malam\r\n(1 kamar 3 orang).</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 40k (termasuk di\r\ndalam invoice).</li>\r\n<li>Snorkeling 65 k / Orang\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip menyesuaikan transportasi yang digunakan berupa mobil pribadi/mini\r\nbus (5-6 Orang), Hiace(13-14 Orang), dan Elf (15-17 Orang) dan Bus Pariwisata.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-14', '2024-06-17', '2024-09-05 06:36:52'),
(8, 'OPEN TRIP 2D1N', 'EXPLORE SABANG<br>(Staycation at Sabang)', 800000, 650000, '972c97bdc47dfc8def0e74c55da0bbfd.png', 'Sabang, tempat yang menakjubkan di ujung barat Pulau Weh, menyuguhkan pemandangan laut yang memukau. Dari tepi pantai, matahari terbenam membentuk perpaduan warna-warni yang memukau, menciptakan siluet yang menawan di balik cakrawala. Suasana tenang dan damai memeluk setiap pengunjung, membuat setiap momen di Sabang menjadi tak terlupakan.\r\n<br><br>\r\nBanda Aceh, ibukota Provinsi Aceh, juga menawarkan pesona alam yang luar biasa. Pantai-pantai yang memikat seperti Pantai Lampuuk dan Pantai Lhoknga menawarkan ombak yang cocok untuk berselancar dan pemandangan matahari terbenam yang menakjubkan. Selain itu, kekayaan budaya dan sejarah Aceh tercermin dalam keindahan Masjid Raya Baiturrahman yang megah.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi Selama di Sabang.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Tiket Penyebrangan Kapal Fery.</li>\r\n<li>Tiket Boat Pulau Rubiah PP.</li>\r\n<li>Seluruh Tiket Wisata.</li>\r\n<li>Penginapan AC 1 malam di Sabang\r\n(1 Kamar 3 Orang).</li>\r\n<li>Dokumentasi Foto/Video\r\nselama Trip.</li>\r\n<li>Guide Snorkeling &\r\nDokumentasi GoPro.</li>\r\n<li>Travelmate/Tour Guide.</li>\r\n<li>P3K.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Tipping Guide 35 k / Orang\r\n(Sudah termasuk dalam Invoice).</li>\r\n<li>Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Snorkeling 65 k / Orang\r\n(Opsional).</li>\r\n<li>Boat Trip Hunting Dolphin 250 k\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip menyesuaikan transportasi yang digunakan berupa mobil pribadi/mini\r\nbus (5-6 Orang), Hiace(13-14 Orang), dan Elf (15-17 Orang) dan Bus Pariwisata.</li>\r\n<li>Sebelum h-5 dari jadwal keberangatan Doctor Trip akan mengkonfirmasi apakah trip fix\r\nberangkat atau tidaknya.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-14', '2024-06-17', '2024-09-05 06:37:01'),
(9, 'OPEN TRIP 2D1N', 'PULAU BANYAK ACEH SINGKIL<br>(Start Pelabuhan Singkil)', 850000, 750000, '5a958de36ab4fbc1360c3c75a85307f4.png', 'Pulau Banyak, terletak di Kabupaten Aceh Singkil, adalah sebuah gugusan pulau yang terdiri dari sekitar 99 pulau kecil yang tersebar di lautan biru yang jernih. Pulau-pulau ini menawarkan keindahan alam yang luar biasa dengan pantai berpasir putih, terumbu karang yang indah, serta hutan mangrove yang lebat. Keanekaragaman hayati lautnya membuat Pulau Banyak menjadi surga bagi para penyelam dan snorkeler. Selain aktivitas bawah air, wisatawan juga dapat menikmati keindahan alam dengan berkeliling pulau menggunakan perahu tradisional, menjelajahi pulau-pulau yang belum terjamah, serta berkemah di pantai-pantai yang tenang dan terpencil.\r\n<br><br>\r\nSelain keindahan alamnya, Pulau Banyak juga memiliki nilai budaya yang menarik. Masyarakat setempat yang sebagian besar adalah nelayan, hidup dengan cara yang sederhana dan masih sangat dekat dengan alam. Wisatawan yang berkunjung ke sini dapat merasakan keramahan penduduk lokal serta menikmati kuliner khas daerah yang lezat. Pulau Banyak juga sering dikunjungi oleh wisatawan yang mencari ketenangan dan kedamaian, jauh dari hiruk-pikuk kehidupan kota. Dengan segala keindahan dan keunikan yang ditawarkan, Pulau Banyak menjadi destinasi wisata yang sempurna bagi para pecinta alam dan petualangan.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Tiket Penyebrangan Kapal\r\nFery/Lokal PP Singkil - Pulau\r\nBanyak.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Kapal Jelajah Pulau PP.</li>\r\n<li>Seluruh Tiket Wisata.</li>\r\n<li>Penginapan/Homestay di pulau\r\nbalai (1 kamar 2 Orang).</li>\r\n<li>Makan 2 x (makan siang day 2 &\r\nsarapan day 3).</li>\r\n<li>Dokumentasi Foto/Video\r\nselama Trip.</li>\r\n<li>Dokumentasi Underwater Gopro.</li>\r\n<li>Life Jacket.</li>\r\n<li>Travelmate/Tour Guide.</li>\r\n<li>P3K.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Makan & Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Sewa Alat Snorkeling 65k /\r\nOrang (Opsional).</li>\r\n<li>Tipp Guide 35k (Sudah termasuk\r\ndi dalam invoice).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip ini minimal 12 Orang.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-14', '2024-06-17', '2024-09-05 06:37:09'),
(10, 'OPEN TRIP 1D', 'HOPPING ISLAND<br>(Kalimantung + Air Terjun Mursala)', 370000, 299000, '25eb471dc11c339ae31bf7685a277e46.png', 'Sibolga Kalimantung adalah sebuah kota pesisir yang terletak di bagian barat Sumatera Utara, Indonesia. Kota ini dikenal dengan pelabuhannya yang ramai dan pantai-pantainya yang mempesona. Sebagai pusat perdagangan dan perikanan, Sibolga menjadi pintu gerbang penting bagi aktivitas ekonomi di wilayah ini. Selain itu, kota ini menawarkan pesona alam yang memikat, dengan pemandangan laut yang indah dan gugusan pulau-pulau kecil di sekitarnya. Kehidupan masyarakat Sibolga yang ramah dan penuh dengan kekayaan budaya lokal menjadikannya tempat yang menarik untuk dikunjungi. Wisatawan dapat menikmati berbagai aktivitas seperti menyelam, snorkeling, dan berperahu di perairan yang jernih.\r\n<br><br>\r\nAir Terjun Mursala, yang terletak tidak jauh dari Sibolga, adalah salah satu destinasi alam paling ikonik di kawasan ini. Air terjun ini unik karena mengalir langsung ke laut dari tebing batu granit yang menjulang tinggi. Ketinggian air terjun yang mencapai sekitar 35 meter ini menciptakan pemandangan spektakuler yang jarang ditemukan di tempat lain. Air Terjun Mursala juga dikelilingi oleh hutan tropis yang lebat, menjadikannya tempat yang sempurna bagi para pecinta alam dan fotografer. Selain keindahan alamnya, air terjun ini juga memiliki nilai sejarah dan budaya, karena sering dikaitkan dengan berbagai legenda lokal. Mengunjungi Air Terjun Mursala memberikan pengalaman yang tak terlupakan, memadukan keindahan alam dengan keajaiban geologi yang menakjubkan.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Air Mineral selama trip.</li>\r\n<li>Kapal SpeedBoat Jelajah Pulau.</li>\r\n<li>Tiket Wisata Pulau.</li>\r\n<li>Life Jacket.</li>\r\n<li>Makan Siang di Pulau.</li>\r\n<li>Dokumentasi Drone.</li>\r\n<li>Dokumentasi Foto/Video\r\nSelama Trip.</li>\r\n<li>Dokumentasi GoPro Snorkeling.</li>\r\n<li>P3K.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 25k (termasuk di\r\ndalam invoice).</li>\r\n<li>Snorkeling 65 k / Orang\r\n(Opsional).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip menyesuaikan jumlah tamu dan ketersediaan Speed Boat.</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau\r\nganti nama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-14', '2024-06-17', '2024-09-05 06:37:17');
INSERT INTO `tbl_trip` (`id`, `name`, `sub`, `price`, `aft_price`, `file`, `detail`, `type`, `seat`, `meet`, `location`, `include`, `exclude`, `s_k`, `is_active`, `is_asia`, `from_date`, `to_date`, `input_at`) VALUES
(11, 'OPEN TRIP 1D', 'SAMOSIR', 370000, 300000, 'f6b8679282fdf760aaad476fad0ddf12.png', 'Pulau Samosir, yang terletak di tengah Danau Toba di Sumatera Utara, Indonesia, adalah sebuah destinasi wisata yang memukau dengan keindahan alam dan kekayaan budayanya. Danau Toba sendiri merupakan danau vulkanik terbesar di dunia, dan Pulau Samosir menjadi ikon utamanya. Pulau ini menawarkan pemandangan spektakuler berupa danau yang luas dengan air yang jernih, pegunungan hijau, dan udara yang sejuk. Samosir juga dikenal dengan tradisi dan budaya Batak yang kental. Pengunjung dapat menemukan banyak rumah adat Batak, yang disebut rumah Bolon, serta berbagai upacara dan tarian tradisional yang masih dilestarikan oleh penduduk setempat.\r\n<br><br>\r\nSelain keindahan alam dan budayanya, Pulau Samosir juga menyediakan berbagai aktivitas wisata yang menarik. Wisatawan dapat menjelajahi desa-desa tradisional seperti Tomok dan Ambarita, di mana mereka dapat melihat situs-situs bersejarah seperti makam Raja Sidabutar dan batu persidangan Raja Siallagan. Untuk pecinta petualangan, bersepeda atau hiking di sekitar pulau menawarkan pemandangan yang menakjubkan dan pengalaman yang mendalam. Pulau Samosir juga terkenal dengan kerajinan tangan khas Batak, seperti tenun ulos dan patung kayu, yang dapat dibeli sebagai oleh-oleh. Dengan perpaduan keindahan alam, kekayaan budaya, dan keramahan penduduknya, Pulau Samosir menjadi destinasi yang wajib dikunjungi bagi siapa saja yang berlibur ke Sumatera Utara.', 'OPEN', 6, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Transportasi Full AC PP\r\nMedan-Samosir.</li>\r\n<li>Air Mineral selama trip.</li>\r\n<li>Tiket Masuk Wisata.</li>\r\n<li>BBM.</li>\r\n<li>Parkir.</li>\r\n<li>Travelmate/Tour Guide.</li>\r\n<li>P3K.</li>\r\n<li>Pengalaman Paling Berharga.</li>', '<li>Makan & Kebutuhan Pribadi.</li>\r\n<li>Asuransi.</li>\r\n<li>Tipp Guide 30k (termasuk di\r\ndalam invoice).</li>', '<li>Pembatalan DP & Pembayaran yang sudah masuk tidak dapat dibatalkan kecuali pembatalan\r\nkeberangkatan yang dilakukan oleh doctor trip.</li>\r\n<li>Pembatalan keberangkatan diberlakukan jika terjadi sesuatu/keadaan tertentu yang diluar\r\nkendali doctor trip atau kuota trip tidak memenuhi untuk dilakukannya keberangkatan trip.</li>\r\n<li>Adapun kuota trip menyesuaikan transportasi yang digunakan berupa mobil pribadi/mini\r\nbus (5-6 Orang), Hiace(13-14 Orang), dan Elf (15-17 Orang).</li>\r\n<li>Sebelum h-7 dari jadwal keberangatan peserta bisa melakukan reschedule jadwal atau ganti\r\nnama peserta trip.</li>\r\n<li>Reschedule hanya bisa dilakukan 1 x di bulan yang sama.</li>\r\n<li>Itinerary dapat berubah jika terjadi FORCE MAJEURE.</li>\r\n<li>Force Majeure yang dimaksud dalam perjanjian ini adalah dalam keadaan force\r\nmajeure/terpaksa/tidak teratasi karena bencana alam, kerusuhan, suasana mencekam,\r\nhambatan transportasi lokal, maka pihak doctor trip tidak dapat dituntut dari segala kerugian\r\nyang disebabkan hal tersebut. Jika ada, maka menjadi tanggungan peserta trip. Doctor trip\r\nakan semampunya membantu komunikasi ke pihak terkait.</li>\r\n<li>Rencana perjalanan dapat diubah baik susunan maupun jadwal tanpa pemberitahuan terlebih\r\ndahulu, hal ini demi kepentingan dan keamanan seluruh rombongan trip. Dalam hal ini doctor\r\ntrip tidak bertanggung jawab dalam pengembalian biaya atau uang atas service yang sudah\r\ndibayarkan yang tidak digunakan, termasuk dan tidak terbatas pada biaya tambahan.</li>\r\n<li>Demi kelancaran trip, acara perjalanan dapat berubah tanpa pemberitahuan terlebih dahulu.</li>\r\n<li>Jam Keberangkatan sewaktu-waktu dapat berubah dan akan diinformasikan menyesuaikan\r\nkeadaan dan kondisi lapangan.</li>\r\n<li>Toleransi keterlambatan peserta berkumpul di Meeting Point maksimal 30 menit. Apabila\r\nsudah lewat maka Trip akan berjalan dan Doctor Trip tidak dapat dituntut atas pengembalian\r\nuang.</li>\r\n<li>Seluruh Barang Bawaan Bagasi dan Barang Bawaan Pribadi lainnya tidak menjadi tanggung\r\njawab Doctor Trip apabila terjadi kehilangan.</li>\r\n<li>Bagi peserta dengan berkebutuhan khusus, wajib didampingi oleh kerabat/keluarga. Doctor\r\ntrip tidak bertanggung jawab selama masa trip berlangsung.</li>\r\n<li>Dengan melakukan pendaftaran, berarti peserta sudah dianggap menyetujui syarat dan\r\nketentuan yang berlaku.</li>', 'Iya', 'Tidak', '2024-06-14', '2024-06-17', '2024-09-05 06:37:25'),
(12, 'ASIA TRIP 3D2N', 'Kuala Lumpur + Genting Highland<br>(Start Medan)', 3500000, 2800000, '482afeb462daaebce1b4681e1f06b3c7.png', 'Kuala Lumpur, ibu kota Malaysia, adalah sebuah kota metropolitan yang menawarkan perpaduan antara modernitas dan warisan budaya yang kaya. Kota ini terkenal dengan menara kembarnya yang ikonik, Petronas Twin Towers, yang merupakan salah satu gedung tertinggi di dunia. Selain itu, Kuala Lumpur juga memiliki berbagai destinasi wisata menarik seperti Menara Kuala Lumpur, Batu Caves, dan Dataran Merdeka. Wisatawan dapat menikmati berbagai aktivitas belanja di pusat perbelanjaan mewah seperti Suria KLCC dan Pavilion Kuala Lumpur, serta mencicipi beragam kuliner lezat di Jalan Alor dan Pasar Seni. Kota ini juga dikenal dengan taman-taman indah seperti Taman KLCC dan Taman Burung Kuala Lumpur, yang menawarkan ruang hijau di tengah kota.\r\n<br><br>\r\nGenting Highlands, atau Genting Island, terletak di pegunungan Titiwangsa sekitar satu jam perjalanan dari Kuala Lumpur. Destinasi wisata ini terkenal dengan resor dan kasino yang mewah, serta taman hiburan yang menarik. Genting Highlands adalah tempat yang ideal untuk melarikan diri dari panasnya kota karena udaranya yang sejuk dan pemandangan pegunungan yang menakjubkan. Pengunjung dapat menikmati berbagai wahana di Skytropolis Indoor Theme Park, atau mencoba keberuntungan di kasino yang berkelas internasional. Selain itu, Genting Highlands juga menawarkan pengalaman belanja yang unik di Genting Premium Outlets, serta berbagai pilihan restoran dan hiburan malam. Dengan kombinasi atraksi modern dan pemandangan alam yang indah, Genting Highlands menjadi destinasi wisata yang populer bagi wisatawan lokal maupun internasional.', 'OPEN', 5, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Belum Di Set</li>', '<li>Belum Di Set</li>', '<li>Belum Di Set</li>', 'Iya', 'Iya', '2024-06-16', '2024-06-18', '2024-09-05 06:44:41'),
(13, 'ASIA TRIP 4D3N', 'Malaysia + Singapore<br>(Start KNO)', 4500000, 3800000, 'cffe819d4413b95dd8c35c0085930789.png', 'Malaysia adalah sebuah negara yang terletak di Asia Tenggara, terkenal dengan keberagaman budaya, etnis, dan agamanya. Negara ini terdiri dari dua wilayah utama, yaitu Semenanjung Malaysia dan Malaysia Timur di Pulau Borneo. Ibu kota Malaysia, Kuala Lumpur, adalah pusat ekonomi dan budaya dengan landmark ikonik seperti Petronas Twin Towers dan Menara Kuala Lumpur. Selain itu, Malaysia juga menawarkan keindahan alam yang memukau seperti Pulau Langkawi, Taman Negara, dan Gunung Kinabalu. Makanan Malaysia juga menjadi daya tarik tersendiri, dengan hidangan yang memadukan rasa dari berbagai budaya seperti Nasi Lemak, Roti Canai, dan Laksa.\r\n<br><br>\r\nSingapura, yang terletak di ujung selatan Semenanjung Malaysia, adalah sebuah negara kota yang dikenal dengan efisiensi, kebersihan, dan kemajuannya. Meskipun ukurannya kecil, Singapura memiliki banyak daya tarik wisata yang besar, termasuk Marina Bay Sands, Gardens by the Bay, dan Sentosa Island. Singapura juga dikenal sebagai salah satu pusat keuangan terpenting di dunia, dengan skyline modern yang dihiasi gedung-gedung pencakar langit. Sistem transportasi umum yang sangat baik memudahkan wisatawan untuk menjelajahi kota ini. Selain itu, Singapura juga merupakan surga kuliner dengan berbagai hawker centers yang menawarkan hidangan lokal seperti Chicken Rice, Chili Crab, dan Laksa Singapura. Kombinasi antara modernitas dan budaya tradisional membuat Singapura menjadi destinasi yang menarik bagi wisatawan dari seluruh dunia.', 'OPEN', 5, 'Doctor Trip Indonesia, Medan', 'https://maps.app.goo.gl/L4UV9mzgLUi3VGJB7', '<li>Belum Di Set</li>', '<li>Belum Di Set</li>', '<li>Belum Di Set</li>', 'Iya', 'Iya', '2024-06-16', '2024-06-18', '2024-09-05 06:44:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_galery`
--
ALTER TABLE `tbl_galery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_itinerary`
--
ALTER TABLE `tbl_itinerary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trip` (`id_trip`);

--
-- Indeks untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id_trip` (`id_trip`);

--
-- Indeks untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_trip` (`id_trip`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_trip`
--
ALTER TABLE `tbl_trip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_galery`
--
ALTER TABLE `tbl_galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_itinerary`
--
ALTER TABLE `tbl_itinerary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_trip`
--
ALTER TABLE `tbl_trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_itinerary`
--
ALTER TABLE `tbl_itinerary`
  ADD CONSTRAINT `tbl_itinerary_ibfk_1` FOREIGN KEY (`id_trip`) REFERENCES `tbl_trip` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD CONSTRAINT `tbl_schedule_ibfk_1` FOREIGN KEY (`id_trip`) REFERENCES `tbl_trip` (`id`);

--
-- Ketidakleluasaan untuk tabel `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD CONSTRAINT `tbl_slider_ibfk_1` FOREIGN KEY (`id_trip`) REFERENCES `tbl_trip` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
