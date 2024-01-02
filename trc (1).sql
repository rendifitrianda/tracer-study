-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 02 Jan 2024 pada 08.24
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` enum('Admin','Wakil Direktur') NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`, `foto`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Rendi fitrianda', 'admin@gmail.com', '$2y$12$yBo9eZv9gNjCVR340mPt6.Nu14D8U8bpq4DDk46PLOmblisVf/LW6', 'app/admin/14-1701229894-y74Bk.jpg', 'Admin', '2023-11-23 15:08:48', '2023-12-03 11:56:38'),
(2, 'ERIK SAJA', 'wadir@gmail.com', '$2y$12$yBo9eZv9gNjCVR340mPt6.Nu14D8U8bpq4DDk46PLOmblisVf/LW6', 'app/admin/2-1701609748-s1eLL.png', 'Wakil Direktur', '2023-12-01 15:20:37', '2023-12-03 13:22:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE `alumni` (
  `id` int NOT NULL,
  `prodi_id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `ipk` double NOT NULL,
  `nim` varchar(30) NOT NULL,
  `tahun_masuk` varchar(15) NOT NULL,
  `tahun_lulus` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` longtext NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `alumni`
--

INSERT INTO `alumni` (`id`, `prodi_id`, `nama`, `nik`, `ipk`, `nim`, `tahun_masuk`, `tahun_lulus`, `jenis_kelamin`, `agama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`, `email`, `password`, `foto`, `created_at`, `updated_at`) VALUES
(2, 6, 'Dagelan Hakim', '4556353335643683', 8, '3528363669198961', '1971', '2011', 'Laki-laki', 'Kristen', 'Tidore Kepulauan', '1997-03-07', 'Ki. Orang No. 4, Metro 90695, Sumut', '1', 'firmansyah.bakiadi@yahoo.co.id', '$2y$12$sRXAzG9Q6ZVw4KwIRafHnu5QJ0UuR4BSUJifLp0HKrDZ2l/Im3sde', 'app/alumni/2-1701610200-BKb2c.png', '2023-11-30 07:48:16', '2023-12-21 07:55:36'),
(3, 6, 'Safina Uli Widiastuti S.E.I', '4716067324470208', 8, '4532447804422717', '1982', '2021', 'Perempuan', 'Konghuchu', 'Parepare', '1948-03-24', 'Ki. Kartini No. 719, Kotamobagu 47066, Sulteng', '6', 'mwastuti@yahoo.co.id', '$2y$12$MewIO1l37bC/PTzwqipjAuuL6tsGNzxLd4nUHxC3zMBrNr08xp0M6', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(4, 6, 'Karimah Salwa Suryatmi S.Ked', '4922396145853676', 7, '5467464724612208', '1997', '1981', 'Laki-laki', 'Budha', 'Serang', '1984-11-07', 'Kpg. Katamso No. 499, Parepare 95216, Jambi', '5', 'lutfan85@gmail.co.id', '$2y$12$/WwEIXDra7alO3Wy9QWvMunDi5aRAkqUzuyONOnaAxFWF65S9NNp6', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(6, 6, 'Darmanto Setiawan S.E.I', '5453717891269458', 0, '5331055241350175', '1980', '2020', 'Perempuan', 'Konghuchu', 'Administrasi Jakarta Selatan', '1936-08-27', 'Ki. Hayam Wuruk No. 414, Tanjungbalai 68238, Riau', '0', 'anggraini.raina@yahoo.co.id', '$2y$12$rGnM2440EYM44DHiRy00BevVl.eVs3NNp07NAxyqa1UWbUNxO0RLi', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(7, 6, 'Melinda Titi Rahayu', '4929790232383055', 3, '3528004391951307', '1970', '1989', 'Perempuan', 'Budha', 'Metro', '2023-07-15', 'Dk. Baranang Siang No. 828, Tebing Tinggi 27651, Babel', '6', 'genta.saragih@gmail.com', '$2y$12$iYjaKUKsGfpWEBhD4Ylndu.a3mtfyjPG8cGy7qP.JB6tsFOBEmqkC', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(9, 6, 'Humaira Suartini', '2221219860814008', 2, '2720592773032306', '1985', '2020', 'Perempuan', 'Khatolik', 'Bontang', '2008-08-10', 'Jln. Gading No. 589, Tangerang Selatan 18726, Papua', '3', 'fitriani.zulkarnain@gmail.com', '$2y$12$c/iS6mHLPxYIsbSAa/qdkeKf26fuOVKDRqvosCgB8P7Cf0f.E/PCq', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(10, 6, 'Cawuk Mahdi Ardianto', '5433825217053442', 1, '4485255448467114', '1985', '1987', 'Laki-laki', 'Islam', 'Banda Aceh', '1928-03-11', 'Dk. Ters. Buah Batu No. 927, Tual 48974, Gorontalo', '6', 'rlazuardi@yahoo.co.id', '$2y$12$kBCi7QD2ZGW1fxViVsvcW.Kv8ebz7CnFffTdJ0dOqSZK06iowGtyC', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(12, 6, 'Tami Maimunah Nasyiah', '5281106946031972', 6, '4556026948502948', '1973', '2017', 'Laki-laki', 'Budha', 'Kendari', '1946-10-30', 'Ds. Moch. Toha No. 608, Palu 17743, Kaltim', '5', 'gading.tarihoran@yahoo.co.id', '$2y$12$/17g564rdB6fRgt5J.xMX.sUGgpO2Zk/GYUIM4O0.zPC6wIlGwTHW', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(13, 6, 'Harjasa Pradana', '4539871182826533', 7, '4539126839045', '2007', '1972', 'Laki-laki', 'Hindu', 'Bandung', '1965-07-28', 'Kpg. Dewi Sartika No. 258, Tarakan 24338, Banten', '7', 'luthfi43@yahoo.com', '$2y$12$9cD9WP/oOmgzxQVNpVAlMOohJrGTnwbZTM7DYTMpkdcxgWDV6gzLO', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(15, 6, 'Galih Jaya Salahudin S.T.', '4695163568013948', 2, '4202752201240953', '1997', '2000', 'Laki-laki', 'Khatolik', 'Bandar Lampung', '1955-08-25', 'Jln. Laswi No. 362, Jayapura 81645, Jambi', '3', 'nsetiawan@gmail.co.id', '$2y$12$rj09jNgifvxqnXc0XNHb9eTG5HqRnDhBZS7NkBSX46M1Qjn3MQ3DO', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(16, 6, 'Gangsar Mustika Marbun M.M.', '2609816918382797', 1, '3589501048649461', '1999', '1997', 'Perempuan', 'Budha', 'Cimahi', '1937-06-02', 'Kpg. Salam No. 854, Pontianak 41356, Bali', '1', 'mandala.zelaya@gmail.co.id', '$2y$12$yH4BOUw5tDTCD6SUUBIKQeEywaJLlh6MzzzE1HGQnSBfxqAMOHfeO', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(17, 6, 'Labuh Prasetyo', '2489892449985825', 2, '4716143729777396', '2000', '2010', 'Perempuan', 'Budha', 'Batam', '1992-11-03', 'Psr. Madrasah No. 274, Singkawang 49081, DKI', '7', 'umi78@gmail.com', '$2y$12$f3y0b82rN3ntVPc.aCxyXeQ3p5NJped2kmgd7b3VHamhoC1pGct2u', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(18, 6, 'Zulaikha Yuniar', '2536328305324133', 4, '347890219099641', '2020', '1986', 'Perempuan', 'Hindu', 'Madiun', '1951-08-29', 'Jln. Tambun No. 792, Cirebon 66991, Papua', '2', 'malik29@yahoo.co.id', '$2y$12$b0FewygFyo0q9/HaZ/5BqeDVZGucmZxenyo6JuZSuvnt7ZHQzyxE.', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(19, 6, 'Danuja Iswahyudi', '4539609848213294', 2, '2466787038033580', '2023', '2002', 'Laki-laki', 'Islam', 'Pekalongan', '2016-07-13', 'Psr. Sadang Serang No. 592, Madiun 67154, Jatim', '7', 'dhalimah@yahoo.com', '$2y$12$T/IbXzcvFzHmVtCj3dU8.OvVgRKd.OmWbzK0zkcdrzOmG86UbD84e', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(20, 6, 'Tugiman Kenzie Najmudin S.E.', '4508948364745926', 1, '4024007132823690', '2014', '2012', 'Perempuan', 'Khatolik', 'Madiun', '1946-04-23', 'Ds. Camar No. 706, Blitar 36894, Kaltara', '6', 'syahrini88@gmail.com', '$2y$12$q6XC12Mmey1FPWxwmK1NWOIc16IpaRxba2spk0aIeDZIWXFMZdIZi', NULL, '2023-11-30 07:48:16', '2023-11-30 07:48:16'),
(41, 8, 'Umar Waskita S.Ked', '2460672329424225', 1, '4716916437885407', '2003', '1970', 'Perempuan', 'Khatolik', 'Administrasi Jakarta Timur', '1957-06-23', 'Jr. Bappenas No. 679, Pasuruan 69998, Pabar', '7', 'namaga.elvin@yahoo.com', '$2y$12$d403ltA1Dh6OppC91FOACOWYXH5nLRNbZCBJA5H8LNDEKsC9.785O', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(42, 8, 'Dinda Mulyani S.H.', '5167133165479905', 8, '5589068084524664', '1975', '2001', 'Laki-laki', 'Konghuchu', 'Administrasi Jakarta Pusat', '1998-09-16', 'Kpg. Jamika No. 529, Banjarmasin 35397, Banten', '7', 'wardaya70@gmail.com', '$2y$12$v1KlcF1litLFc.UVLr.YEuCiZVIALrp3NYY4/pkEZY8qMu9pqIicq', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(43, 8, 'Akarsana Tarihoran', '6011631666220385', 1, '2720150916971631', '2015', '1986', 'Perempuan', 'Khatolik', 'Tidore Kepulauan', '1933-07-22', 'Ki. Bakin No. 750, Bandar Lampung 32701, NTT', '0', 'qwaskita@yahoo.com', '$2y$12$ZS2ulRCYYOJdXVjHtZnH..JHsD.nYu2j44R8KBfoJm9XiO4K/cPTq', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(44, 8, 'Anastasia Hastuti', '4539987533477600', 9, '5181894989175845', '2001', '2005', 'Laki-laki', 'Konghuchu', 'Tidore Kepulauan', '1964-12-16', 'Ds. K.H. Maskur No. 142, Batam 23211, Jateng', '6', 'siregar.kiandra@gmail.co.id', '$2y$12$P56.d9W7oQEqfxg3W3bkvOE257y6heuUVT7Awcjl.cWHQhdWIFyoG', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(45, 8, 'Paiman Gambira Mansur S.IP', '5133374822345748', 6, '5484774744404058', '1995', '2005', 'Perempuan', 'Khatolik', 'Bandar Lampung', '2000-08-26', 'Jr. Tangkuban Perahu No. 261, Probolinggo 49166, Riau', '8', 'sari.wacana@yahoo.co.id', '$2y$12$KfLmLsMrU4/aEueUaCmMF.PPJ5AhGCIfnFmbTc1zKzW4FR460Sw.m', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(46, 8, 'Aris Jefri Anggriawan', '4539158350128011', 4, '5494742651751835', '1974', '2001', 'Perempuan', 'Budha', 'Ambon', '1940-03-15', 'Ki. Pasir Koja No. 421, Langsa 70756, Kaltara', '3', 'zrahayu@gmail.co.id', '$2y$12$GG91gcaxcVx0dRPtxebha..8KhMiS49.Z2W98BaQrLH3RMRuJuuGy', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(47, 8, 'Muni Prabowo', '4929225975837827', 9, '4556423584298024', '1987', '1984', 'Perempuan', 'Islam', 'Tanjungbalai', '1980-06-08', 'Ds. Hayam Wuruk No. 873, Parepare 75828, Babel', '0', 'salwa36@yahoo.com', '$2y$12$XXcg7o24mYrgVf.siqRcXOjHjJDtwfZuxBOE2UfsAEfcatBJPtOQa', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(48, 8, 'Ajeng Haryanti S.Psi', '5480808039744549', 1, '4634729900326521', '2017', '2014', 'Perempuan', 'Konghuchu', 'Palangka Raya', '1964-10-28', 'Dk. BKR No. 438, Kupang 64571, Sumut', '5', 'siti77@gmail.co.id', '$2y$12$IXYJg2LmlYzJLdwIw93e0.HZ3xq1jhDOLVn4/6fGxUGNuq9H9LXxK', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(49, 8, 'Elisa Pertiwi', '340154763962556', 0, '4532809824541', '1985', '2000', 'Perempuan', 'Kristen', 'Tarakan', '1924-08-03', 'Ds. Basoka Raya No. 749, Padangsidempuan 32699, Jambi', '4', 'uiswahyudi@gmail.com', '$2y$12$VELugTRexaUF3OQ5h7VR/.HZQ7t.eWFV8Zp5jBNpVZf2oOUIITpvm', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(50, 8, 'Lala Permata', '5234873487838820', 4, '4539357881381392', '2021', '2004', 'Perempuan', 'Hindu', 'Banjar', '1994-04-18', 'Kpg. Bakau Griya Utama No. 261, Magelang 44144, Banten', '5', 'zwibisono@gmail.com', '$2y$12$V5iW6FwJQgk9ZRQ1J8o3KOtw4mcCT7e1D7hhoKof7W6TPFd3iRgeq', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(51, 8, 'Ratih Vanesa Sudiati', '3589641753395395', 9, '6011599358171366', '2013', '2017', 'Laki-laki', 'Islam', 'Subulussalam', '1974-11-08', 'Psr. Badak No. 158, Mojokerto 64320, Pabar', '1', 'ifarida@yahoo.co.id', '$2y$12$ttTweBiWxUMtrzvws2jA9esdMHE2r/MPCuJ/RgLcPro26e96DZdDe', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(52, 8, 'Cinthia Andriani S.Ked', '4916539652615602', 1, '4716392574240816', '1984', '1973', 'Laki-laki', 'Budha', 'Sukabumi', '2006-12-01', 'Psr. Zamrud No. 401, Sabang 63338, DIY', '3', 'huyainah@gmail.com', '$2y$12$HGjsqRfUQNR0L8B/iXU8q.dPwHRYly7BiLheHJ3s0mUil78ZS7bzS', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(53, 8, 'Bahuwirya Santoso', '2221582236179871', 9, '4539782707053695', '2017', '2009', 'Laki-laki', 'Islam', 'Metro', '1949-12-24', 'Dk. Juanda No. 477, Tanjung Pinang 96391, Kalsel', '6', 'wibowo.raden@yahoo.com', '$2y$12$B6ETwTXnR4z6BS3VQ.S3Gegd7SXHpmTfPx4DZr1svn5vRYGl2Yhby', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(54, 8, 'Bella Susanti', '4485607208804953', 3, '2609157666709711', '2017', '2001', 'Perempuan', 'Islam', 'Bau-Bau', '1998-03-18', 'Dk. Laksamana No. 902, Bima 82594, NTB', '3', 'rahayu96@gmail.com', '$2y$12$tw7StKGyjgjKgjeuCmjWF.nqJpV6IAhN1UV21KyyJAmkRRkDJ6jje', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(55, 8, 'Patricia Nuraini', '4556065908561908', 9, '2660154310138229', '2021', '1989', 'Laki-laki', 'Konghuchu', 'Prabumulih', '1960-09-07', 'Jln. Bata Putih No. 43, Madiun 81760, Sumut', '5', 'laras04@yahoo.com', '$2y$12$8tb0OOjNY7hjgpUrXi9I8e8/wn9ST.Ink8iGvtFMmF.V2DZLJgnW2', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(56, 8, 'Paramita Rahimah', '4929882413486482', 6, '5495136087447440', '2015', '2009', 'Laki-laki', 'Islam', 'Palu', '1925-03-01', 'Dk. Baranangsiang No. 319, Surabaya 16605, DIY', '8', 'garan.handayani@yahoo.co.id', '$2y$12$AbYd.6FW5uFx/9mhwO1uoubyyF/VwoGsWMOI40UqAKxKKz8fEdhc2', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(57, 8, 'Cemplunk Widodo S.H.', '5293207930070541', 8, '4916688138896532', '1985', '1977', 'Perempuan', 'Hindu', 'Surakarta', '1927-08-07', 'Jln. BKR No. 524, Pariaman 14848, Sulut', '1', 'ina.zulaika@yahoo.com', '$2y$12$wVGjf4vZlyyMaqK5lBAdDOLlqrksiwjQwqVGoFD3UNi7Z1JbWPMfu', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(58, 8, 'Amalia Hassanah', '5377854587963806', 8, '3589527908459303', '2010', '2019', 'Perempuan', 'Budha', 'Padangpanjang', '1996-08-25', 'Gg. Rajawali Timur No. 522, Subulussalam 42811, Kaltim', '8', 'flailasari@yahoo.co.id', '$2y$12$pkDXBxQ0Y50RzyhmPU1Pmeag2hFaf9Yii2x8mAiYMpPQawMCxF1/e', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(59, 8, 'Kamaria Laksmiwati', '3589166123257158', 9, '4716186007214319', '2016', '1973', 'Laki-laki', 'Konghuchu', 'Sukabumi', '2021-07-29', 'Jln. Sugiyopranoto No. 563, Madiun 87735, Sulteng', '6', 'hfujiati@yahoo.com', '$2y$12$VUbKqajWSlcbjHJURedCFuWC3J9Jfh2BV3cJ7NDU0nLTBmZM23Owy', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(60, 8, 'Paramita Putri Mulyani', '2221851684575637', 1, '4539789249138488', '2012', '1998', 'Perempuan', 'Kristen', 'Ambon', '1962-03-15', 'Kpg. Orang No. 915, Ternate 22190, Sumsel', '6', 'anggraini.paulin@yahoo.co.id', '$2y$12$gKKO5YGnZKeJrhtcFdntwOhJlTucZrgDnNz8NfwH1zQzSr5ZY1Yg.', NULL, '2023-11-30 07:48:37', '2023-11-30 07:48:37'),
(61, 9, 'Cayadi Prasetya', '3528836848844340', 3, '6011804942953273', '1990', '2013', 'Laki-laki', 'Khatolik', 'Cimahi', '2021-08-16', 'Gg. Sumpah Pemuda No. 312, Tegal 58356, Riau', '5', 'harjaya.zulkarnain@gmail.com', '$2y$12$1R5dkako9zyxD.k7BXpRiODaugiJ.LwctfuAYDwOg6C7JiF1vGuWq', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(62, 9, 'Fitriani Handayani S.Gz', '4716908310392551', 7, '2465684835453486', '1981', '2007', 'Laki-laki', 'Budha', 'Cilegon', '1970-10-04', 'Ds. Bahagia  No. 442, Bukittinggi 37798, Banten', '2', 'irnanto19@gmail.co.id', '$2y$12$lpXBpX2YsQ5u5rxNdUvjJumUT0GZY6gZB3tJptkB.xCut1r8Ofcs2', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(63, 9, 'Tami Winarsih S.Psi', '4929931482254725', 7, '2221004273361999', '1973', '2011', 'Laki-laki', 'Konghuchu', 'Tanjung Pinang', '1942-12-13', 'Gg. Bakti No. 132, Makassar 13062, Sumsel', '5', 'kwijaya@yahoo.co.id', '$2y$12$/dIfeJJrhNp0eyq.yaTwC./1Ljc5XxddXXl7d.NAeRpWoVI7bfpkO', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(64, 9, 'Wasis Maulana', '6011368212176502', 0, '4485719375285609', '1992', '1989', 'Laki-laki', 'Khatolik', 'Sungai Penuh', '1990-09-23', 'Ki. Teuku Umar No. 266, Lubuklinggau 24037, Malut', '1', 'laksmiwati.michelle@yahoo.co.id', '$2y$12$j5GMBteZGSQSQ3cHfbIm3.hl5gx0az6NB5ah.T9tk.XqOFlUTPcU6', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(65, 9, 'Ana Agustina S.Farm', '4556003668676830', 7, '5245960382546322', '1976', '1974', 'Laki-laki', 'Khatolik', 'Surakarta', '2007-03-06', 'Jr. Yos Sudarso No. 347, Bandung 25069, Kaltim', '0', 'dewi.wahyudin@yahoo.co.id', '$2y$12$.N6bc6xLHy3l4Ljr64SmmuE199OElChLs7V8vXPxZUp4brxihvqd2', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(66, 9, 'Ami Hassanah', '5289615798013062', 1, '2476961759110749', '2012', '1993', 'Laki-laki', 'Budha', 'Cimahi', '1930-12-10', 'Dk. Diponegoro No. 630, Sabang 90556, Banten', '5', 'baktianto68@yahoo.com', '$2y$12$w/SX2w.FjqhzXri0NFZOs.um1.Cra7qSL0MAfkdozC2Kkz7laE95u', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(67, 9, 'Almira Kuswandari S.Farm', '377867055913005', 1, '4716065877214346', '1990', '2000', 'Laki-laki', 'Hindu', 'Palangka Raya', '2021-01-27', 'Ds. Suharso No. 470, Padang 92498, Pabar', '4', 'wastuti.ghaliyati@yahoo.com', '$2y$12$kKzmSc8fVjxUek/INNI1Run6YVnOGEQ.RdM7JrYMg7h/bGT.AJjNe', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(68, 9, 'Cahya Saefullah', '3528943674364862', 6, '4485481629029', '2002', '1993', 'Perempuan', 'Kristen', 'Depok', '2005-12-12', 'Jln. B.Agam 1 No. 662, Palu 16884, Kalteng', '7', 'ibun84@yahoo.com', '$2y$12$Skdvgud1XeegE7ocvhJAFOgTZasdqjZDh6VOMQqDLYL4cDlhDCmQW', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(69, 9, 'Humaira Jelita Andriani M.Ak', '5379403619933631', 7, '4916863480133772', '2021', '2001', 'Perempuan', 'Islam', 'Serang', '1933-11-03', 'Jln. Rumah Sakit No. 795, Administrasi Jakarta Barat 32985, Aceh', '5', 'cici27@yahoo.co.id', '$2y$12$GDK8ebdIQL5rnMYEbqlXtuVOx9lylYFly09zuP0Q69hYEYwnWNDqy', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(70, 9, 'Devi Gina Wahyuni M.Pd', '2353411472296886', 3, '6011986462942719', '2015', '1981', 'Perempuan', 'Hindu', 'Sabang', '1983-03-07', 'Jln. Jamika No. 486, Pekalongan 68916, Kaltim', '8', 'jinawi.dongoran@gmail.com', '$2y$12$mtb5E6NVhzfLmiGeth2y.OEojnZ4dsNFmgkTvQc3UJ2lUJB0REXsi', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(71, 9, 'Ajimat Wijaya', '4929869152556302', 0, '2720605231819799', '1997', '1991', 'Perempuan', 'Budha', 'Bogor', '2023-01-04', 'Dk. Sampangan No. 922, Kotamobagu 36010, Malut', '1', 'sihombing.padmi@yahoo.co.id', '$2y$12$7k.SgUjTGNH8ALlTYLqigeA6AKD2d7IrP7jRiS/K1UVoxfS3eD26C', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(72, 9, 'Rahmi Aryani', '4485968420722229', 1, '4556726552607046', '1991', '2012', 'Laki-laki', 'Hindu', 'Administrasi Jakarta Barat', '2022-05-29', 'Ds. Abang No. 150, Administrasi Jakarta Selatan 95791, Malut', '2', 'harsaya.mardhiyah@yahoo.com', '$2y$12$R/GCVet3tITnl5DS3Tw2Ge3N7S6IqQG3yfIxUAUYgJqrRMMmm.nhy', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(73, 9, 'Utama Cahyo Manullang', '4539209277006', 8, '2720015948064798', '1982', '2013', 'Perempuan', 'Budha', 'Tual', '1957-01-27', 'Ds. Lumban Tobing No. 904, Sukabumi 53444, Kepri', '1', 'suryatmi.elma@gmail.com', '$2y$12$B/nSyUQZMMZPgjW1DxvBhOiiQj6vCWZqUJr3XQ.WxVwYcxm.o3L1G', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(74, 9, 'Ellis Titin Puspasari', '4024007155704', 8, '5265879434262388', '1997', '2006', 'Laki-laki', 'Kristen', 'Administrasi Jakarta Timur', '1933-04-29', 'Kpg. Sutarto No. 703, Dumai 97383, Sumsel', '0', 'edamanik@yahoo.co.id', '$2y$12$gwXtNmmplOuGnXriQJz1recmJR6pipqMi5XWcBCyqD/50xgp.cJNq', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(75, 9, 'Patricia Aryani M.Farm', '6011261772780286', 0, '2221302948900153', '1992', '1989', 'Perempuan', 'Islam', 'Palopo', '2018-05-14', 'Jln. Suryo No. 666, Payakumbuh 48332, Bengkulu', '4', 'uhastuti@yahoo.co.id', '$2y$12$tunyg/EZwi0nqWGm9hOqIu0PBl/nvy6tZ5VfyTcueZc0QCX9wBYcm', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(76, 9, 'Cemplunk Yono Widodo M.M.', '4716502236959955', 4, '4556245329515424', '1982', '2016', 'Laki-laki', 'Hindu', 'Banjarbaru', '1953-05-18', 'Psr. Sunaryo No. 246, Administrasi Jakarta Timur 99588, Banten', '5', 'swidiastuti@yahoo.co.id', '$2y$12$pkmBK3sgMjk8NdBAy.1l7.BOQsSbxvu0RwETA7YJLaB54LWgnXF6e', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(77, 9, 'Jelita Utami', '4485181518867845', 3, '4532088869635304', '2008', '2002', 'Laki-laki', 'Kristen', 'Sungai Penuh', '2001-04-02', 'Kpg. Madrasah No. 409, Parepare 87933, Sumut', '1', 'silvia.permata@gmail.com', '$2y$12$lBqc/GyzSNY.M2yD8E955Oesj220yMo.wCp6X.tdoJdN02fy58FCq', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(78, 9, 'Gaiman Siregar S.T.', '5516713380898035', 0, '4441366286828581', '2021', '1994', 'Perempuan', 'Hindu', 'Pariaman', '1981-11-30', 'Jr. Padang No. 266, Metro 67495, Banten', '4', 'kamal.mangunsong@gmail.co.id', '$2y$12$WHKLByeFcc7nZS4sXBsZN.UqbVJbdnAN9EjpJZW/OdT512Hg0NOIy', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(79, 9, 'Fitriani Halimah', '4485734838394310', 9, '5177402151697137', '2001', '2020', 'Perempuan', 'Konghuchu', 'Prabumulih', '1960-10-16', 'Gg. Hasanuddin No. 118, Bekasi 72312, Riau', '4', 'pharyanti@gmail.com', '$2y$12$cRcolz82k0KAp6byCdH4zepW6Wz9FCIMgc3pL9Ul6i1qac69VAV8i', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(80, 9, 'Vivi Aurora Hasanah', '3528636895372066', 8, '4024007111301', '1998', '2014', 'Laki-laki', 'Budha', 'Manado', '2008-03-14', 'Ds. Rajawali No. 833, Administrasi Jakarta Pusat 27995, Bengkulu', '3', 'cwahyudin@gmail.co.id', '$2y$12$Jx8mgA1i/PNagVeH3weRtOS/GaOSJaUSO3FUhh7gvo8Uj34DngPE2', NULL, '2023-11-30 07:48:49', '2023-11-30 07:48:49'),
(81, 10, 'Yahya Baktianto Utama', '2508484731835715', 2, '4485191728175319', '2014', '1979', 'Laki-laki', 'Islam', 'Bima', '2000-05-24', 'Gg. Tubagus Ismail No. 275, Banjar 65669, Sulteng', '4', 'wasita.dimas@yahoo.com', '$2y$12$jV1VdmYA4QRAlzB1jpgM/eDV7Y6esh3yffxgzdctbunfEWCZKnn1m', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(82, 10, 'Rini Riyanti M.TI.', '4539823755618367', 6, '2720474441524735', '2001', '2018', 'Laki-laki', 'Budha', 'Tebing Tinggi', '1932-12-22', 'Gg. Mahakam No. 768, Gorontalo 70556, Bengkulu', '4', 'gamblang20@gmail.co.id', '$2y$12$SEPVshLY3Du5RZGDXxzpUOtVvwPZYDBPYSjQH81wlhWTbW8UY.rIy', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(83, 10, 'Novi Ella Oktaviani S.Ked', '4539483763657988', 1, '370918184236060', '2008', '1971', 'Laki-laki', 'Khatolik', 'Bandar Lampung', '1951-10-29', 'Jln. Raden Saleh No. 139, Balikpapan 78260, Sulut', '0', 'zmaryati@yahoo.com', '$2y$12$L4jthw6whg6e5W..Q/sPXep9pR1ZliwWFXoslXOwC4nenWQB2jxn.', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(84, 10, 'Kiandra Puspita', '4485199142331', 3, '2376080987655085', '1997', '2016', 'Perempuan', 'Budha', 'Palangka Raya', '2014-06-12', 'Dk. Jend. A. Yani No. 570, Kediri 11746, Sultra', '4', 'karya28@yahoo.co.id', '$2y$12$45uXJo89RnKejSP4K8NPRu6jZBWthp84Bzx23dKl5rlTyud4UzF3q', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(85, 10, 'Kalim Narpati', '3528522263395519', 3, '4929855957242990', '1975', '1971', 'Perempuan', 'Konghuchu', 'Balikpapan', '1994-09-17', 'Jr. Bagis Utama No. 754, Bukittinggi 96218, Jambi', '0', 'hani.nababan@yahoo.co.id', '$2y$12$G2MZ8gDC8fLkywaqoJpjeeTOllHb1T/tk4M4DkkYLvOPgNJTcjI0O', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(86, 10, 'Jasmin Zelda Nurdiyanti S.E.', '4485546056658923', 2, '4532516397982954', '1972', '1975', 'Perempuan', 'Hindu', 'Bitung', '1950-06-30', 'Psr. Basmol Raya No. 168, Parepare 46092, Kalteng', '3', 'vzulkarnain@gmail.com', '$2y$12$7Yl1hcoL5ukhwyYC8crDsOuyNI/L56nxQrzYC3fGgbvcEU8n7c5HO', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(87, 10, 'Kania Riyanti', '4865505483407783', 7, '4024007154029440', '1978', '2013', 'Perempuan', 'Konghuchu', 'Pekanbaru', '2018-05-16', 'Gg. Sutarjo No. 851, Depok 84359, Maluku', '8', 'vwijayanti@yahoo.co.id', '$2y$12$nGH7I01.05FSyWTltr1fwefSOHHK/ygTDkhhcfNQjavXWXUtQ1fEC', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(88, 10, 'Jamalia Padma Puspasari S.Pt', '377941059464198', 4, '3528969792479878', '1983', '2006', 'Perempuan', 'Budha', 'Pematangsiantar', '1986-04-25', 'Ds. Bappenas No. 496, Cilegon 20273, Banten', '5', 'ozy.irawan@yahoo.com', '$2y$12$4LgRdxVM5jRO4WBHNU7EVuWroBG5VtxyqlkUrb.Hgo7r2lv0GutUS', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(89, 10, 'Natalia Usada', '344989598712239', 1, '5197607376568345', '1983', '1985', 'Perempuan', 'Islam', 'Parepare', '1969-03-27', 'Kpg. Salam No. 348, Administrasi Jakarta Utara 15768, DKI', '8', 'oliva.saputra@yahoo.co.id', '$2y$12$vwTKEz//yvBx/7/8BcafdOvq5a0p97YAQkV90gNe4l6EB3otws7eW', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(90, 10, 'Yessi Humaira Namaga', '4539831800197873', 9, '5309890080232698', '2010', '1988', 'Perempuan', 'Hindu', 'Kediri', '1934-10-20', 'Gg. Gatot Subroto No. 892, Mojokerto 88890, Jatim', '5', 'malika.pangestu@gmail.co.id', '$2y$12$YWxtuMfjzKPONl2TPGfnAeb2VALr8MeKWhmnTeOd8/f9f3ApCsCxm', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(91, 10, 'Janet Nasyidah', '4485684585338541', 1, '4596883980042957', '1998', '1993', 'Laki-laki', 'Konghuchu', 'Yogyakarta', '1986-02-09', 'Ki. Cikapayang No. 409, Mataram 25008, Malut', '3', 'bwijayanti@yahoo.co.id', '$2y$12$FJI5wnfqcKhVbF.HFiFNXeTYHxBoq./WIB325bx0t3NE4gBquQhHC', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(92, 10, 'Wisnu Asmuni Pranowo S.Gz', '2340950268579514', 8, '2415179186517188', '1980', '2005', 'Laki-laki', 'Kristen', 'Subulussalam', '2022-02-03', 'Dk. Monginsidi No. 734, Gunungsitoli 32735, Kalteng', '7', 'npalastri@gmail.com', '$2y$12$aaUdizvMv3./vPVhm3rijeH6HiBRt7ZPtECjvT1n0ujzxhqQ/1l22', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(93, 10, 'Ina Ade Rahmawati M.Ak', '2507575076750434', 2, '6011359924156817', '2008', '2016', 'Laki-laki', 'Hindu', 'Pariaman', '1992-03-03', 'Ds. Kebonjati No. 852, Padang 95506, Papua', '3', 'hakim.kemal@yahoo.com', '$2y$12$Cjn8bhoIVMF1bxX4mFzqf.BTfaztZl6/B.SivUxggyGIFsWkVQM16', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(94, 10, 'Upik Pranata Zulkarnain S.T.', '6011683464120531', 2, '2451692694006051', '2008', '2012', 'Laki-laki', 'Hindu', 'Bogor', '1938-05-01', 'Ds. Salak No. 381, Manado 25665, Sultra', '7', 'lfujiati@gmail.com', '$2y$12$.3u5kiV1Az7.UqpkG/7yIOa/KNF6sJiIhYPghoAjmiiTnu42.yNFu', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(95, 10, 'Samiah Wahyuni S.E.', '2628628823139056', 1, '6011307667058443', '1986', '1989', 'Perempuan', 'Konghuchu', 'Bontang', '2010-01-01', 'Jr. Villa No. 711, Surakarta 12104, Sultra', '6', 'lulut01@gmail.com', '$2y$12$YDK3.mrI26QDjXLr42p5duedtxyXDltdPspZ4Gp0ztkk2Ufr8SRwG', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(96, 10, 'Balidin Halim S.Pt', '4024007195742928', 9, '2377595920419876', '2023', '1978', 'Perempuan', 'Budha', 'Gorontalo', '1956-01-19', 'Jr. Mahakam No. 564, Manado 60667, Gorontalo', '5', 'chandra89@yahoo.co.id', '$2y$12$qFLuxf7yDRq8XflD45kswOEtLho/vQxgCqXqK.RPXY6CGB0Lnt2nC', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(97, 10, 'Calista Astuti', '4024007125236', 6, '4916092507600072', '2008', '2004', 'Perempuan', 'Khatolik', 'Ambon', '1975-05-16', 'Jr. Laswi No. 455, Sukabumi 71685, Malut', '4', 'adriansyah.cengkir@yahoo.com', '$2y$12$rF6e6C9AjRGH8E573Bp4kODBBa7L5zCtonmRPi7foMffZL97uejCW', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(98, 10, 'Salimah Hartati', '4024007153254528', 8, '4929993209796982', '2000', '2007', 'Perempuan', 'Islam', 'Langsa', '1989-08-30', 'Jr. Pintu Besar Selatan No. 960, Tanjung Pinang 71201, Gorontalo', '0', 'ratna51@gmail.com', '$2y$12$/1QeuxrZoubLJw3Ko8LvnOZtSaSfH/ENU3rV8T3Uwvvo1S9hf89r.', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(99, 10, 'Wulan Lestari', '4485349031722348', 9, '4716716060153432', '2020', '1976', 'Laki-laki', 'Khatolik', 'Pagar Alam', '1951-09-10', 'Ds. Barasak No. 411, Sukabumi 60582, Kalteng', '4', 'sakura.sirait@gmail.co.id', '$2y$12$1S7ZWDoH7S9EbVEVKHtMrOK2IKRc3FWUGe6W.hchx.o17OPOTXPHy', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(100, 10, 'Candrakanta Warsa Megantara', '347956475758228', 3, '4556720247955175', '1980', '1978', 'Laki-laki', 'Hindu', 'Magelang', '2000-04-08', 'Jln. Jend. Sudirman No. 92, Parepare 73817, Kaltim', '1', 'gandi.hassanah@yahoo.co.id', '$2y$12$WW1f/bu9/sw3E6xyIT723uu0xig4F.9Prwa76rjpCkGSikFdD/vWq', NULL, '2023-11-30 07:48:59', '2023-11-30 07:48:59'),
(101, 11, 'Cinta Hariyah', '2664937614942551', 8, '4929585016062', '1991', '2017', 'Perempuan', 'Kristen', 'Padangpanjang', '2023-02-15', 'Gg. Sutami No. 748, Pekalongan 21762, Sulbar', '4', 'upradana@gmail.com', '$2y$12$j5RPUuu4fnoYcZ6ov1bbd.fNJs5Sv3jUOOqOeLPgHohfsVStMG1em', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(102, 11, 'Vinsen Aslijan Thamrin S.E.', '2548518316565262', 8, '2515504800864105', '1975', '1993', 'Laki-laki', 'Khatolik', 'Sawahlunto', '2007-05-11', 'Jln. Baabur Royan No. 251, Manado 90093, Sultra', '6', 'klaksita@gmail.com', '$2y$12$SalM8j07WAKobkuc.EcgqeaIaQ8QUq.vMuDdCYZ2cHx35RTBw5/qu', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(103, 11, 'Zizi Laila Hasanah', '4485366665055621', 4, '5259230771477098', '2010', '2011', 'Laki-laki', 'Khatolik', 'Subulussalam', '2003-11-08', 'Kpg. Babadan No. 623, Medan 41791, Aceh', '5', 'daryani01@yahoo.co.id', '$2y$12$2jqDxqPps0X08F1WsepWEew0caLcC0CSbdUx7eH.fGKSctuno3bxm', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(104, 11, 'Daruna Candrakanta Hidayanto', '4539630561291713', 6, '4556989093130', '2004', '1979', 'Perempuan', 'Budha', 'Palu', '2007-07-04', 'Psr. Flora No. 325, Manado 35397, Kepri', '7', 'hana.wahyudin@gmail.com', '$2y$12$Kgcyty1TrV2Nj3zcJTVfIuWTgh6vI7aJxF2x9R3BajlswUFh9NNEu', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(105, 11, 'Prasetya Hardiansyah', '2399585166029582', 3, '4916381970158175', '2008', '1995', 'Perempuan', 'Konghuchu', 'Bukittinggi', '1944-02-18', 'Jr. Baranang Siang Indah No. 176, Cimahi 61584, Malut', '0', 'farhunnisa.oktaviani@gmail.co.id', '$2y$12$0Kq80rooRaumi4qJO6N1fO43Tutx2mD6ynvPe0KQg2hrnHCGx6BVW', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(106, 11, 'Unjani Purwanti', '4929961416332552', 7, '2588391029653044', '1986', '1974', 'Laki-laki', 'Budha', 'Batu', '2002-10-07', 'Dk. Warga No. 267, Batam 63943, Kepri', '4', 'kambali36@yahoo.co.id', '$2y$12$ER.SRzpABvpzctQ6RHuOI.OQoWrfRz2I6hEIBswAgth.xR7m/33/e', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(107, 11, 'Kawaca Ramadan', '4539564095391337', 0, '5559979741549256', '1998', '2007', 'Laki-laki', 'Budha', 'Gorontalo', '2008-03-03', 'Psr. Radio No. 805, Lubuklinggau 45272, Aceh', '2', 'rachel68@yahoo.com', '$2y$12$DZYh2uheZAu3CywSzHaZHOaQUIal0petj/NQe1AElB3QnRAZUJj8O', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(108, 11, 'Fitria Wahyuni', '348706986792011', 3, '349953924147317', '2000', '1992', 'Laki-laki', 'Budha', 'Padangsidempuan', '1935-09-27', 'Ds. Babakan No. 447, Malang 21282, Sulbar', '5', 'wahyudin.ayu@yahoo.co.id', '$2y$12$/rvmLFmXGLvNrnXuZrSNrOU1wesVeFtNslaw2TOhncBLTqd3W9M7a', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(109, 11, 'Dadap Nardi Hidayat', '3528820835296318', 3, '6011216616318396', '1971', '2023', 'Perempuan', 'Konghuchu', 'Surakarta', '1960-11-09', 'Jln. Kiaracondong No. 105, Prabumulih 65367, DKI', '8', 'badriansyah@yahoo.com', '$2y$12$fdzRFG/lmPa1y/b7X7U./.Z4lV4wnlJ/qI6gpy7YvT751opn2Eppu', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(110, 11, 'Lembah Martana Mahendra S.E.', '2221740029645876', 3, '4485658247502868', '1980', '2016', 'Perempuan', 'Islam', 'Sukabumi', '1933-02-02', 'Ki. Babakan No. 172, Blitar 47635, Banten', '8', 'puti.saefullah@gmail.com', '$2y$12$6MvydV3IXApkMmtC9zKldOcG9MHXdmBq7Rhe8RBhbdRX2DJgr71Q2', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(111, 11, 'Kani Riyanti S.Gz', '4916753657029772', 4, '5407202961794179', '1988', '1991', 'Perempuan', 'Khatolik', 'Tomohon', '1980-07-30', 'Psr. Pacuan Kuda No. 662, Bekasi 49306, Sulteng', '4', 'baryani@gmail.co.id', '$2y$12$EtintIb.Ku3suI4hhNWo6Og3rvX9/qiP2RwVQCk2usYH46JPkJ9dm', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(112, 11, 'Cahyo Makuta Pradipta', '4866896115007185', 9, '5124580127635325', '2003', '2015', 'Laki-laki', 'Khatolik', 'Kendari', '1927-11-18', 'Ds. Krakatau No. 867, Parepare 26850, DKI', '6', 'iswahyudi.najwa@gmail.com', '$2y$12$kR7He4fTDHIzUApxp5XiIutXeIwD/ZwUeEYHK1LsYi/UVnpLnwOOO', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(113, 11, 'Mariadi Kawaca Dongoran', '4532609819774149', 7, '6011057491760249', '1997', '2004', 'Perempuan', 'Kristen', 'Binjai', '1927-01-02', 'Jr. Imam No. 387, Padang 18996, Kaltara', '1', 'najmudin.gandi@yahoo.co.id', '$2y$12$cg.JN9KU3zIeEyqto95Wfe1p/4GWMmogOk5O4QfMFdIExLmToHYZW', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(114, 11, 'Cawisadi Omar Latupono S.Sos', '4532724148711', 8, '6011486047380923', '1983', '1972', 'Perempuan', 'Khatolik', 'Tebing Tinggi', '2017-02-08', 'Gg. Pasirkoja No. 864, Malang 20501, Kaltim', '7', 'winda.dabukke@gmail.co.id', '$2y$12$6OQVAbdNYjL.9YSjk8ZmUexL1XtnavDnk0PVD95IBlOUGZdbpWEmO', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(115, 11, 'Lukman Cakrajiya Sihombing', '2641561745075483', 2, '5541402628580329', '1977', '1971', 'Perempuan', 'Islam', 'Bau-Bau', '1994-02-07', 'Psr. Baranang No. 913, Padang 21428, Kepri', '2', 'lasmanto41@gmail.com', '$2y$12$Fg4q7EhSMNHZgZl0sCguOOr8D.HbDapo9.TcevUSlL8MGt8ePFDt6', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(116, 11, 'Hani Halimah', '3589021433645032', 8, '4929637637528018', '1975', '1995', 'Laki-laki', 'Hindu', 'Surabaya', '1963-01-03', 'Gg. Kalimantan No. 782, Kotamobagu 78733, Kepri', '1', 'elvina41@gmail.co.id', '$2y$12$RVVK5BEXuZI3kO2OUr9PN.O3/KyuACCZSWcWFpnOD0xWBw/IIISry', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(117, 11, 'Gilda Rahayu', '4532757229512284', 7, '5411494999280115', '1991', '2017', 'Laki-laki', 'Kristen', 'Salatiga', '1936-01-09', 'Kpg. Juanda No. 464, Banjarmasin 25858, Gorontalo', '6', 'safitri.oliva@yahoo.com', '$2y$12$B86UiYqN4oEHLEMzQingH./X.q3T48sHZg/A9FCNQ/BnyFIpsZS7S', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(118, 11, 'Qori Nurdiyanti S.Pd', '3528882803052271', 8, '4556655046861952', '1973', '2017', 'Perempuan', 'Islam', 'Tual', '1994-08-20', 'Ki. Bah Jaya No. 451, Tasikmalaya 23503, Jateng', '7', 'budiman.cinta@gmail.com', '$2y$12$8yCzJVSTtzSA.fcdvxkkCuT1KvwdSyZtsza8arUd102sijqRGdyq.', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(119, 11, 'Ganep Kurniawan', '4382133580467420', 2, '342484991253454', '1976', '2010', 'Laki-laki', 'Konghuchu', 'Tanjung Pinang', '1937-11-16', 'Ki. Baja Raya No. 799, Sabang 46949, Banten', '6', 'luwes.rajasa@yahoo.com', '$2y$12$nrrcIEjSHE1RSV57keem9uEvn5LTiyEVYpTCdZrtNQjw8YJvecdPO', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(120, 11, 'Unjani Wahyuni', '2656723877435016', 8, '4716503567915095', '1989', '1981', 'Perempuan', 'Islam', 'Sawahlunto', '1948-04-12', 'Kpg. Cikapayang No. 957, Kotamobagu 30501, Sulbar', '1', 'tpuspita@gmail.co.id', '$2y$12$o0I7WXUFRrBgwJHWm2fj7uewJEKwGko9U1k326ulyVd8ulp5R6uwO', NULL, '2023-11-30 07:49:11', '2023-11-30 07:49:11'),
(121, 12, 'Prayoga Narpati', '4716868506314878', 6, '2720623041336060', '1999', '2009', 'Perempuan', 'Budha', 'Denpasar', '1936-07-10', 'Psr. Umalas No. 718, Lubuklinggau 55447, Malut', '2', 'andriani.maimunah@gmail.co.id', '$2y$12$DBqjFxFJNrr8ZGuvs1e/w.g07Oh8dP2Ujt6QAOc37HUFtsDwMedSi', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(122, 12, 'Usman Putra S.Kom', '6011096249925076', 4, '4485038598446', '1998', '1999', 'Perempuan', 'Kristen', 'Dumai', '1925-09-20', 'Gg. Ters. Kiaracondong No. 533, Metro 68173, Kepri', '7', 'laras.uyainah@yahoo.com', '$2y$12$lUq6vlXrGhPXWn9Evx2sPOF5KOEwES7wuzqMqNRa.ylYPJQBn4OT2', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(123, 12, 'Danu Wibowo', '2345864531643707', 8, '5140184198132922', '1970', '2013', 'Laki-laki', 'Hindu', 'Langsa', '2013-04-07', 'Dk. Basket No. 666, Palembang 73528, Kepri', '0', 'intan61@gmail.co.id', '$2y$12$LoWp6g5n4egnFEy1PKabF.h3YBCpkSZdwBa6qwGWY7JM6wB.esVPq', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(124, 12, 'Darmanto Adriansyah M.M.', '4539021411669458', 0, '5536395387205848', '2023', '2002', 'Laki-laki', 'Hindu', 'Surabaya', '1972-10-03', 'Jr. Bass No. 396, Tebing Tinggi 33117, Sulut', '5', 'jpertiwi@gmail.com', '$2y$12$36y8pvUP9N4oZhnZpGFfBeqR9z0m4Lenqq17eUqPquvQlqcC/WWOK', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(125, 12, 'Prayitna Sihombing', '4024007181666826', 3, '3589408648033593', '1995', '1983', 'Perempuan', 'Kristen', 'Lubuklinggau', '2006-12-10', 'Ki. Bayan No. 295, Bandar Lampung 39670, Jabar', '8', 'zmarbun@gmail.co.id', '$2y$12$P.jvI9vPK2oArf35wB/Lo.RHCINWwvXWgOaSXzkWX7GbelpxlePVW', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(126, 12, 'Cakrabuana Naradi Suryono S.I.Kom', '4916152404934089', 9, '2454376064320147', '1972', '1990', 'Laki-laki', 'Hindu', 'Banjarmasin', '2016-05-19', 'Ki. Jaksa No. 576, Palopo 30292, Sumut', '3', 'karen.pranowo@yahoo.co.id', '$2y$12$YMP8CaT/vOPIC/b.9dY6K.T0dCgPXArzTY9GBHYRoopSW2hzwPQi.', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(127, 12, 'Imam Ganep Saefullah S.Pd', '5476225020837354', 3, '5543543255007058', '1985', '1976', 'Laki-laki', 'Konghuchu', 'Tual', '2009-02-27', 'Gg. Jaksa No. 75, Tanjung Pinang 54745, Bali', '8', 'endah61@gmail.com', '$2y$12$j0.1C7I8k3D/u.e.eigG3ez2yCOqdq6D1cnxbiuDVr.eTMQ1FqMsy', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(128, 12, 'Artanto Purwadi Hardiansyah S.IP', '373991922677587', 9, '2469402328312655', '2001', '1976', 'Perempuan', 'Islam', 'Tidore Kepulauan', '2012-07-19', 'Gg. Baya Kali Bungur No. 952, Kotamobagu 99781, Malut', '2', 'elma.waskita@gmail.com', '$2y$12$adK8esP7N9pMI1v.g1SSrePPDRnBMrxDy8LmHolB6SpGqQ/3zc456', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(129, 12, 'Hardi Mahesa Dabukke', '4024007110515342', 1, '4929230616075217', '1997', '2004', 'Laki-laki', 'Kristen', 'Medan', '1936-09-17', 'Kpg. Sudirman No. 309, Subulussalam 43922, NTT', '8', 'slamet.pratama@gmail.co.id', '$2y$12$mO5yRC1cm7CjIKDt8UAT6eZByFT3PPz5PHeGE2I5oFfdJmL0tDdYm', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(130, 12, 'Dono Sitorus', '6011601370612763', 7, '373656920504709', '1989', '1981', 'Laki-laki', 'Hindu', 'Pangkal Pinang', '1985-09-20', 'Psr. Bara No. 730, Palembang 43643, Aceh', '6', 'nurdiyanti.dimas@gmail.co.id', '$2y$12$q66j2oe1Aq4vgoY.vHmtSenmRr/fnJ6Z3qUM4rSIkaTC7nvLDtub6', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(131, 12, 'Martani Kurniawan M.Ak', '4539515403187502', 7, '4532769621178341', '2022', '2000', 'Perempuan', 'Islam', 'Surabaya', '1952-10-15', 'Ds. Dahlia No. 52, Salatiga 90289, Sultra', '1', 'vdabukke@yahoo.com', '$2y$12$lxWENnCv2/tb1cTq/nZppeNt4MFGS55.bES1NNvXhYNP5kz237num', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(132, 12, 'Edi Siregar', '2333359880497783', 0, '5388745010090828', '2023', '1980', 'Laki-laki', 'Konghuchu', 'Sorong', '1994-08-01', 'Jln. Ters. Buah Batu No. 607, Kendari 90797, Babel', '3', 'dnamaga@gmail.com', '$2y$12$KxizgrgUxYSSeU4EsYiTAOfQz7Ch.1wtj4KnsjODg.kYKkjK/LeTi', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(133, 12, 'Intan Puspasari', '5342550846610533', 9, '5462350896961579', '2012', '1987', 'Laki-laki', 'Hindu', 'Pekalongan', '1980-02-22', 'Jln. Babadak No. 191, Medan 70713, Pabar', '6', 'permata.labuh@yahoo.com', '$2y$12$dYArS/ujOcovl7rkA6pUmOQ9Nn8uf5WYmU7r2xxgT43WECOApRmH6', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(134, 12, 'Belinda Ophelia Lailasari M.Kom.', '5255437195921007', 2, '4024007148469', '1981', '2012', 'Perempuan', 'Budha', 'Padangpanjang', '2002-05-06', 'Ki. Madrasah No. 869, Medan 59507, Bali', '3', 'gawati.rajasa@gmail.co.id', '$2y$12$t6docP8H.taKWbYV9BFYiOuFpyvXnRwfnAayprtuIbcH0bwPFbycy', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(135, 12, 'Qori Padmasari', '4929900050582338', 1, '4916868821888', '1999', '2019', 'Laki-laki', 'Khatolik', 'Metro', '1985-12-21', 'Jln. Yap Tjwan Bing No. 308, Banjarbaru 38033, DIY', '1', 'puspita.sari@gmail.co.id', '$2y$12$otHsbWrR6Dv8H4Qj94TMiO2P47hSuPh.ci/c3.on5xqsyZmbonReC', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(136, 12, 'Vinsen Firgantoro M.M.', '4539549046805469', 8, '5529878854906328', '1995', '2022', 'Laki-laki', 'Hindu', 'Makassar', '1964-08-08', 'Gg. Yos No. 738, Depok 82067, Jambi', '7', 'farhunnisa.halim@gmail.com', '$2y$12$xid5qJfbhZhhGjFjm5hAq.P7PTtWewJ4DdZyQtfScS.65dgvzV516', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(137, 12, 'Yulia Ira Oktaviani', '6011462469722306', 8, '2720904472710944', '2012', '1993', 'Laki-laki', 'Hindu', 'Parepare', '2007-10-13', 'Jr. Abang No. 290, Tangerang 95371, Jatim', '7', 'lasmono56@yahoo.com', '$2y$12$qMQRgwaZ569MWCKpy.CrX.gzSeJtyupYGo05i/EpCAnoyCDPO2CI.', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(138, 12, 'Sabrina Handayani', '4360335784222396', 7, '2543360822908230', '1994', '2009', 'Perempuan', 'Kristen', 'Sorong', '1984-09-06', 'Ds. Cemara No. 978, Mojokerto 77200, Sultra', '2', 'nadia.prastuti@gmail.com', '$2y$12$noykxcjQDU9c3EYjGxGI8.U/345TH1RxZrz9RCoYsJ84FhaqlTjsq', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(139, 12, 'Dacin Irawan M.M.', '4929979834712346', 4, '4485498052529627', '1996', '1983', 'Laki-laki', 'Budha', 'Ambon', '1928-12-04', 'Jr. Baranang Siang Indah No. 258, Jayapura 90974, Babel', '3', 'osusanti@yahoo.com', '$2y$12$h8JFv8FLjxBWn6ETwCvTDOkuhWCH4kVy.Ga9XebPchDLSspY4oEQq', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(140, 12, 'Ratna Hastuti', '343129566092873', 3, '2303899558473208', '1998', '1979', 'Laki-laki', 'Khatolik', 'Bontang', '1976-06-17', 'Jr. Suryo No. 70, Pasuruan 42926, Riau', '6', 'novi73@gmail.com', '$2y$12$aQJzwxh1xHKVew9gKIzmdeLHX1RtJrdY3B3Ij4UTeSZT/Nij4g06a', NULL, '2023-11-30 07:49:22', '2023-11-30 07:49:22'),
(141, 13, 'Margana Tamba M.Kom.', '4485464863760603', 3, '5225414624780582', '1995', '2006', 'Perempuan', 'Islam', 'Lubuklinggau', '1940-01-04', 'Ki. Baranang Siang Indah No. 731, Bontang 85711, Sulsel', '7', 'agustina.edi@gmail.co.id', '$2y$12$cf3JvTEXMdvoREj2PlrzNuUT3pW49ewRrpDTrH7fkHgw33eKavsHq', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(142, 13, 'Dian Wulandari', '5161683681709173', 3, '3589797189892932', '1977', '1978', 'Laki-laki', 'Khatolik', 'Sibolga', '2005-10-05', 'Psr. Bank Dagang Negara No. 613, Denpasar 58577, Babel', '5', 'karsa.sudiati@yahoo.com', '$2y$12$17ZMKBsgvUs4LBRhiqanue3.HYAoiXUIz5OdGgN17KH.wdj2HELtO', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(143, 13, 'Anastasia Aryani', '6011554431547413', 3, '4916550871381', '1975', '1987', 'Laki-laki', 'Hindu', 'Cilegon', '1924-02-05', 'Jln. Baja No. 468, Payakumbuh 43789, Papua', '8', 'dasa46@yahoo.co.id', '$2y$12$OdhpIb8VWMRfIRbcrGPe3OtZ5KY8MHBKhmNmO4zbhVuPZbUMe3o/W', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(144, 13, 'Yusuf Widodo', '4716613567805301', 7, '2221689261520430', '2019', '2003', 'Perempuan', 'Budha', 'Pasuruan', '1948-03-11', 'Ki. Ciumbuleuit No. 1, Tanjungbalai 82903, DIY', '0', 'chelsea.anggriawan@gmail.co.id', '$2y$12$7A7dApl5XP55aNLSsvnKbOGnBHsgHnTJZBilI.L2TpveTdMz7W7p.', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(145, 13, 'Hafshah Rachel Puspasari M.M.', '6011559694155119', 6, '6011432489783794', '2020', '1971', 'Laki-laki', 'Budha', 'Pontianak', '1924-11-18', 'Ki. Astana Anyar No. 397, Tidore Kepulauan 14324, Jateng', '0', 'maida.winarno@gmail.com', '$2y$12$FxTDtwPI0Ctiq1oL7cnqHebEWCl7dafKkT9Tho5woD1wVUtrDvUSy', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(146, 13, 'Dewi Hana Puspita S.IP', '6011439276189382', 1, '4556176422277663', '1991', '2021', 'Laki-laki', 'Konghuchu', 'Malang', '1974-12-15', 'Dk. Nakula No. 317, Palopo 82696, DIY', '6', 'nainggolan.usyi@yahoo.com', '$2y$12$XU/9GDRf47X.cXkcdewpa.NfP2h68B5pTY9oTav82h3KcWOGCqOma', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(147, 13, 'Kariman Heru Damanik', '4916424871153', 0, '5502364347134332', '1992', '2015', 'Laki-laki', 'Hindu', 'Pekanbaru', '1973-08-03', 'Psr. Sutami No. 748, Pangkal Pinang 95596, Riau', '0', 'kusmawati.jane@yahoo.com', '$2y$12$cmQeFd71jH9xrIRucrs.eO0ClQ2cBCe6ZRMIt5RHZS9p2icusmhda', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(148, 13, 'Budi Hidayat', '4556387265806803', 8, '4539553134082403', '1994', '2000', 'Laki-laki', 'Khatolik', 'Bandung', '2023-05-13', 'Gg. Adisucipto No. 955, Bandung 91470, DKI', '5', 'himawan.fujiati@yahoo.com', '$2y$12$kBfMYbPdjuWRbsBzgLFLwOmak6055F0mbCcbyfXq/cye13rhVGv0e', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(149, 13, 'Widya Zulaika S.E.', '6011117948872656', 4, '4716249575975', '1974', '1984', 'Laki-laki', 'Islam', 'Bima', '1989-06-12', 'Ds. Acordion No. 365, Prabumulih 60348, Banten', '1', 'rendy.hidayanto@yahoo.com', '$2y$12$bFT8eJlTUkcU/ASgGn212uWq9rEksl.yxoXo2hMvPAMz.lYkUb4VS', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(150, 13, 'Maras Ramadan', '4929629688894811', 9, '6011094662629697', '2006', '2013', 'Laki-laki', 'Budha', 'Bitung', '2016-09-09', 'Jr. Samanhudi No. 234, Palu 78449, NTT', '3', 'clara.mandasari@gmail.co.id', '$2y$12$EFa1nmK.SE59vTXOuko2CeRjoumckGI/0nCrcnnIoPk39Ks9NR8MS', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(152, 13, 'Ophelia Yuniar S.T.', '2371583323407751', 7, '3589653100453496', '2015', '2020', 'Perempuan', 'Kristen', 'Depok', '2013-03-15', 'Jr. Dr. Junjunan No. 580, Bekasi 90062, NTB', '0', 'suwais@gmail.co.id', '$2y$12$DOWFjl2YtRzORSzEFXcxY.ocifffboVKbmLYkywfba5KgEsxYCrwC', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(153, 13, 'Raditya Simbolon', '4485161022511', 3, '4556643555705018', '2012', '2007', 'Perempuan', 'Budha', 'Pangkal Pinang', '1975-11-15', 'Ki. Mulyadi No. 151, Blitar 58356, Sulut', '2', 'rahimah.maria@gmail.com', '$2y$12$NbxxzrD5noiNrnVQfElvqOPzEl7Zu3IC/0eGpnucjPKjM16Zoqf9G', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(154, 13, 'Gamanto Budiman', '346418846176870', 9, '2528120938383309', '2021', '2019', 'Laki-laki', 'Budha', 'Padangsidempuan', '2007-05-26', 'Psr. Ketandan No. 56, Dumai 22490, Jambi', '6', 'ami15@yahoo.co.id', '$2y$12$o3uW9rVlWoPD1HLgDlT9ie/GrOoBiyWFs5wexZjMsK7AXnb4BY.xm', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(155, 13, 'Ivan Ramadan', '2661858324508693', 9, '5595321302411848', '1971', '2017', 'Laki-laki', 'Kristen', 'Blitar', '1935-12-11', 'Ds. Gremet No. 778, Kotamobagu 17212, Sulut', '2', 'praba.suartini@gmail.co.id', '$2y$12$/EJSmKpYhbEHISATm7Rq0u6oPtFB1upOl9zpkTBCJtEgOh31y.ySK', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(156, 13, 'Banawa Asmuni Prakasa', '3528892846729769', 2, '377898705149583', '2018', '1975', 'Perempuan', 'Konghuchu', 'Padang', '1953-07-30', 'Kpg. Babah No. 840, Banda Aceh 49791, NTT', '1', 'pertiwi.alambana@gmail.co.id', '$2y$12$diuSCd2k25zuBCGeGiU6UeTCfRRkJ2fTXvKyeqZKa2gHnbp1XIaiC', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(157, 13, 'Warji Permadi S.Pt', '2671356847347762', 0, '4716280410630169', '2003', '1997', 'Laki-laki', 'Budha', 'Yogyakarta', '1946-01-31', 'Psr. Surapati No. 690, Bima 58184, Jambi', '5', 'marpaung.mutia@yahoo.co.id', '$2y$12$./KUhFppM/mTc4jCDba94.qSCioyK/sH4g4WWFLbs0C83JsprbpFW', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(158, 13, 'Ikhsan Darmaji Kurniawan', '377270718049400', 9, '3528064674685675', '1974', '2010', 'Perempuan', 'Islam', 'Solok', '1994-01-13', 'Jr. Bass No. 634, Bekasi 58179, Sultra', '0', 'eli.andriani@yahoo.co.id', '$2y$12$.pgD8mqI5CIMIDm/qurKfuMybb8Y7BIuvZDkCowvDCFUpNCyW/axi', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(159, 13, 'Eka Yulianti', '2221175972643802', 4, '4556504316406538', '1993', '1983', 'Perempuan', 'Khatolik', 'Depok', '1981-09-05', 'Jr. Abdul Muis No. 795, Pontianak 78724, Riau', '0', 'imangunsong@yahoo.com', '$2y$12$IutsbLxOQLsRGgV9zCi/C.awko/SBIyHyjZQpGv2qGNhqHJM.k4De', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(160, 13, 'Ganda Prabu Thamrin', '2565735310297142', 0, '4485990302938673', '2017', '2015', 'Laki-laki', 'Islam', 'Denpasar', '1953-02-16', 'Ki. Hayam Wuruk No. 970, Sukabumi 96261, Bengkulu', '1', 'maida.prastuti@yahoo.com', '$2y$12$7NmzxbJ6fIznGGVJW9EgI.k2h285xJUkNHbgrU43dZSdCmmLtd7oW', NULL, '2023-11-30 07:49:31', '2023-11-30 07:49:31'),
(161, 6, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36872', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '123', 'unababan@gmail.co.id', '$2y$12$c1cD8EIjyMqSlh8S0.wce.ns4HUOauEueXVdOdTaNDyVA.jmfx/WG', 'NULL', '2023-12-02 14:25:37', '2023-12-02 14:25:37'),
(163, 8, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36874', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '125', 'unababan@gmail.co.id', '$2y$12$Wlp9arP.uT7CImHnwLIrv.6e55mKN5LYWWUA0lOw8191lxVZw2oEO', 'NULL', '2023-12-02 14:25:38', '2023-12-02 14:25:38'),
(164, 9, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36875', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '126', 'unababan@gmail.co.id', '$2y$12$11ICns/i.Xpbm7t2rQPL5O0cO5ssJM2sWmmexcNWUNF.Caf4bIOPO', 'NULL', '2023-12-02 14:25:38', '2023-12-02 14:25:38'),
(165, 10, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36876', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '127', 'unababan@gmail.co.id', '$2y$12$cycp.i6WrmbVgzoMHnTC/.b3nXZkqcOER971T0HlxKjzDXhI6qOVa', 'NULL', '2023-12-02 14:25:38', '2023-12-02 14:25:38'),
(166, 11, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36877', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '128', 'unababan@gmail.co.id', '$2y$12$ejc0ST4Uf9w2rHBKMjZZSO2HXLwfxu.wVHJrb3s2/jv2RTdLMP0Hy', 'NULL', '2023-12-02 14:25:38', '2023-12-02 14:25:38'),
(167, 12, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36878', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '129', 'unababan@gmail.co.id', '$2y$12$MbOcW4B52GepbkfSsofLpun4hif48gNfuC0VNFhA1YO2TQB2J8rmC', 'NULL', '2023-12-02 14:25:38', '2023-12-02 14:25:38'),
(168, 13, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36879', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '130', 'unababan@gmail.co.id', '$2y$12$fmXAn1grxCRFrJHQMO3uGeBkQz7WI0Dcvkzc2HOnjAWwFqD.TuZFW', 'NULL', '2023-12-02 14:25:39', '2023-12-02 14:25:39'),
(169, 14, 'Muhammad Yusuf', '12345', 3, '123456', '2020', '2023', 'Laki-laki', 'Islam', 'Ketapang', '36880', 'Jr. Diponegoro No. 741, Langsa 48895, Babel', '131', 'unababan@gmail.co.id', '$2y$12$c1SG0lDOcTSadgyNQ.PDK.9.Gsphr2uXWlaA/j32qOLADLC0tHdHy', 'NULL', '2023-12-02 14:25:39', '2023-12-02 14:25:39'),
(172, 16, 'Rendi fitrianda', '1212121212', 4, '3042022015', '2022', '2025', 'Laki-laki', 'Islam', 'Ketapang', '2023-12-21', 'Sei.Awan Kanan', '089635989179', 'rendifitrianda95@gmail.com', '$2y$12$67ubkz7roQOFI86zMDp78egb5ALk2uLBSFleSbUk8wfpuMwBU28lC', 'app/alumni/-1703145720-I7mfT.jpg', '2023-12-21 08:02:00', '2023-12-21 08:02:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bagian`
--

CREATE TABLE `bagian` (
  `id` int NOT NULL,
  `prodi_id` int NOT NULL,
  `nama` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `tahun_upload` varchar(15) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `bagian`
--

INSERT INTO `bagian` (`id`, `prodi_id`, `nama`, `title`, `tahun_upload`, `created_at`, `updated_at`) VALUES
(6, 6, 'Bagian I', 'kontribusi jurusan prodi anda terhadap pekerjaan anda', '', '2024-01-02 07:12:30', '2024-01-02 07:12:30'),
(7, 16, 'bagian II', 'Kesulitan dan Tantangan', '', '2024-01-02 07:13:08', '2024-01-02 07:15:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guest`
--

CREATE TABLE `guest` (
  `id` int NOT NULL,
  `pengisi` varchar(225) NOT NULL,
  `perusahaan` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `alumni_id` int NOT NULL,
  `sikap` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `keahlian` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `bahasa_asing` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `penggunaan_tek` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `komunikasi` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kerjasama` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `pengembangan_diri` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `kesiapan` enum('Sangat Baik','Baik','Cukup','Kurang') NOT NULL,
  `harapan` longtext NOT NULL,
  `kritik_saran` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `guest`
--

INSERT INTO `guest` (`id`, `pengisi`, `perusahaan`, `jabatan`, `alumni_id`, `sikap`, `keahlian`, `bahasa_asing`, `penggunaan_tek`, `komunikasi`, `kerjasama`, `pengembangan_diri`, `kesiapan`, `harapan`, `kritik_saran`, `created_at`, `updated_at`) VALUES
(1, 'Habib', 'Skm', 'manager', 18, 'Sangat Baik', 'Baik', 'Kurang', 'Sangat Baik', 'Kurang', 'Sangat Baik', 'Baik', 'Sangat Baik', 'bagus', 'bagus', '2023-12-02 16:41:03', '2023-12-02 16:41:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kusioner`
--

CREATE TABLE `kusioner` (
  `id` int NOT NULL,
  `pilihan_id` int NOT NULL,
  `alumni_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `kusioner`
--

INSERT INTO `kusioner` (`id`, `pilihan_id`, `alumni_id`, `created_at`, `updated_at`) VALUES
(1, 36, 1, '2023-12-02 13:22:57', '2023-12-02 13:22:57'),
(2, 13, 1, '2023-12-02 13:22:57', '2023-12-02 13:22:57'),
(3, 15, 1, '2023-12-02 13:22:57', '2023-12-02 13:22:57'),
(4, 37, 1, '2023-12-02 13:50:10', '2023-12-02 13:50:10'),
(5, 12, 1, '2023-12-02 13:50:10', '2023-12-02 13:50:10'),
(6, 14, 1, '2023-12-02 13:50:10', '2023-12-02 13:50:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporansurveiprodi`
--

CREATE TABLE `laporansurveiprodi` (
  `id` char(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `jenis_survei` enum('Mahasiswa','Tenaga Pendidik/Dosen','Tenaga Pendidik/Teknisi') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pilihan`
--

CREATE TABLE `pilihan` (
  `id` int NOT NULL,
  `soal_id` int NOT NULL,
  `title_pilihan` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `pilihan`
--

INSERT INTO `pilihan` (`id`, `soal_id`, `title_pilihan`, `created_at`, `updated_at`) VALUES
(12, 6, 'Sangat Baik', '2023-11-26 06:30:59', '2023-11-26 06:30:59'),
(13, 6, 'Sangat Puas', '2023-11-26 06:31:08', '2023-11-26 06:31:08'),
(14, 7, 'Baik', '2023-11-26 07:17:58', '2023-11-26 07:17:58'),
(15, 7, 'Cukup Baik', '2023-11-26 07:18:04', '2023-12-01 09:07:54'),
(17, 9, 'Sangat Baik', '2023-11-28 07:36:25', '2023-11-28 07:36:25'),
(18, 9, 'Baik', '2023-11-28 07:36:31', '2023-11-28 07:36:31'),
(19, 8, 'Sangat Baik', '2023-11-28 07:38:55', '2023-11-28 07:38:55'),
(20, 8, 'Baik', '2023-11-28 07:39:02', '2023-11-28 07:39:02'),
(21, 8, 'buruk', '2023-11-28 07:39:08', '2023-11-28 07:39:08'),
(22, 10, 'Sangat Baik', '2023-11-28 07:39:13', '2023-11-28 07:39:13'),
(23, 10, 'Baik', '2023-11-28 07:39:21', '2023-11-28 07:39:21'),
(24, 10, 'buruk', '2023-11-28 07:39:30', '2023-11-28 07:39:30'),
(25, 11, 'Sangat Baik', '2023-11-28 07:52:13', '2023-11-28 07:52:13'),
(26, 11, 'Baik', '2023-11-28 07:52:20', '2023-11-28 07:52:20'),
(27, 11, 'buruk', '2023-11-28 07:52:27', '2023-11-28 07:52:27'),
(28, 12, 'Iyaa', '2023-11-28 19:13:37', '2023-11-28 19:13:37'),
(29, 12, 'Tidak', '2023-11-28 19:13:44', '2023-11-28 19:13:44'),
(30, 6, 'tidak tahu', '2023-11-28 20:56:44', '2023-11-28 20:56:44'),
(31, 6, 'Tahu', '2023-11-28 20:56:52', '2023-11-28 20:56:52'),
(32, 13, 'Sangat Baik', '2023-11-30 21:53:17', '2023-11-30 21:53:17'),
(33, 13, 'Cukup Baik', '2023-11-30 21:53:24', '2023-11-30 21:53:24'),
(34, 13, 'Kurang Baik', '2023-11-30 21:53:31', '2023-11-30 21:53:31'),
(35, 13, 'Sangat Buruk', '2023-11-30 21:53:41', '2023-11-30 21:53:41'),
(36, 14, 'Sangat Sesuai', '2023-12-01 09:06:09', '2023-12-01 09:06:09'),
(37, 14, 'Sesuai', '2023-12-01 09:06:13', '2023-12-01 09:06:13'),
(38, 14, 'Netral', '2023-12-01 09:06:18', '2023-12-01 09:06:18'),
(39, 14, 'Tidak Sesuai', '2023-12-01 09:06:25', '2023-12-01 09:06:25'),
(40, 14, 'Sangat Tidak Sesuai', '2023-12-01 09:06:34', '2023-12-01 09:06:34'),
(41, 7, 'Kurang Baik', '2023-12-01 09:08:05', '2023-12-01 09:08:05'),
(42, 9, 'Sangat Baik', '2023-12-04 03:10:25', '2023-12-04 03:10:25'),
(43, 9, 'Baik', '2023-12-04 03:10:31', '2023-12-04 03:10:31'),
(44, 15, 'Sangat Baik', '2023-12-21 08:06:34', '2023-12-21 08:06:34'),
(45, 15, 'Baik', '2023-12-21 08:06:38', '2023-12-21 08:06:38'),
(46, 15, 'Sangat Puas', '2023-12-21 08:06:43', '2023-12-21 08:06:43'),
(47, 16, 'iya', '2024-01-02 07:15:39', '2024-01-02 07:15:39'),
(48, 16, 'tidak', '2024-01-02 07:15:48', '2024-01-02 07:15:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id` int NOT NULL,
  `nama_prodi` varchar(100) NOT NULL,
  `link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id`, `nama_prodi`, `link`, `created_at`, `updated_at`) VALUES
(6, 'TEKNOLOGI LISTRIK', 'https://www.google.com/search', '2023-11-17 16:21:34', '2023-12-21 07:35:29'),
(8, 'TEKNOLOGI PRODUKSI TANAMAN PERKEBUNAN', 'https://www.google.com/search', '2023-11-29 22:54:19', '2023-11-29 22:54:19'),
(9, 'AGRO INDUSTRI', 'https://www.google.com/search', '2023-11-29 22:54:32', '2023-11-29 22:54:32'),
(10, 'TEKNOLOGI PERTAMBANGAN', 'https://www.google.com/search', '2023-11-29 22:54:46', '2023-11-29 22:54:46'),
(11, 'TEKNOLOGI REKAYASA KONSTRUKSI JALAN DAN JEMBATAN', 'https://www.google.com/search', '2023-11-29 22:55:17', '2023-11-29 22:55:17'),
(12, 'PEMELIHARAAN MESIN', 'https://www.google.com/search', '2023-11-29 22:55:36', '2023-11-29 22:55:36'),
(14, 'TEKNOLOGI PENGOLAHAN HASIL PERKEBUNAN', 'https://www.google.com/search', '2023-12-21 07:33:36', '2024-01-02 07:08:35'),
(16, 'TEKNOLOGI INFORMASI', 'https://www.google.com/search', '2023-12-21 07:59:54', '2023-12-21 07:59:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id` int NOT NULL,
  `bagian_id` int NOT NULL,
  `title_soal` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id`, `bagian_id`, `title_soal`, `created_at`, `updated_at`) VALUES
(16, 7, 'Apakah Anda menghadapi kesulitan atau tantangan tertentu ketika mencari pekerjaan setelah lulus?', '2024-01-02 07:15:28', '2024-01-02 07:15:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surveipenggunalulusan`
--

CREATE TABLE `surveipenggunalulusan` (
  `id` int NOT NULL,
  `alumni_id` int NOT NULL,
  `tanggal_lulus` date DEFAULT NULL,
  `tingkat_sarjana` enum('Diploma 4','Diploma 3') DEFAULT NULL,
  `nilai_rata_rata` int DEFAULT NULL,
  `status_saat_ini` enum('Bekerja','Melanjutkan Study','Belum bekerja') DEFAULT NULL,
  `pendidikan_lanjutan` varchar(255) DEFAULT NULL,
  `pendidikan` enum('Sanggat membantu','Membantu','Kurang membantu','Tidak membantu') DEFAULT NULL,
  `kepuasan_programstudy` enum('Sanggat Puas','Lumayan Puas','Cukup','Kurang Puas') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tahun_input` varchar(15) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `surveipenggunalulusan`
--

INSERT INTO `surveipenggunalulusan` (`id`, `alumni_id`, `tanggal_lulus`, `tingkat_sarjana`, `nilai_rata_rata`, `status_saat_ini`, `pendidikan_lanjutan`, `pendidikan`, `kepuasan_programstudy`, `tahun_input`, `updated_at`, `created_at`) VALUES
(1, 1, '2017-12-05', 'Diploma 3', 32, 'Melanjutkan Study', 'S1', 'Sanggat membantu', 'Sanggat Puas', '2022', '2023-12-01 08:57:08', '2023-12-01 08:57:08'),
(2, 2, '2017-12-08', 'Diploma 4', 34, 'Bekerja', 'S1', 'Membantu', 'Lumayan Puas', '', '2023-12-01 08:58:24', '2023-12-01 08:58:24'),
(3, 3, '2016-12-12', 'Diploma 3', 43, 'Belum bekerja', '-', 'Membantu', 'Sanggat Puas', '', '2023-12-01 10:52:30', '2023-12-01 10:52:30'),
(4, 4, '2016-04-04', 'Diploma 3', 21, 'Belum bekerja', '-', 'Sanggat membantu', 'Sanggat Puas', '', '2023-12-01 10:53:42', '2023-12-01 10:53:42'),
(5, 1, '2022-12-12', 'Diploma 3', 32, 'Bekerja', 'S1', 'Sanggat membantu', 'Lumayan Puas', '2022', '2023-12-02 10:16:07', '2023-12-02 10:16:07'),
(6, 1, '2021-02-13', 'Diploma 4', 34, 'Belum bekerja', '-', 'Membantu', 'Sanggat Puas', '2022', '2023-12-02 10:25:19', '2023-12-02 10:25:19'),
(7, 1, '2000-12-12', 'Diploma 3', 34, 'Bekerja', 'S1', 'Sanggat membantu', 'Sanggat Puas', '2023', '2023-12-02 13:21:32', '2023-12-02 13:21:32'),
(8, 2, '2023-12-06', 'Diploma 3', 24, 'Bekerja', 'S1', 'Tidak membantu', 'Kurang Puas', '2023', '2023-12-03 13:24:49', '2023-12-03 13:24:49'),
(10, 172, NULL, 'Diploma 3', NULL, 'Melanjutkan Study', NULL, 'Sanggat membantu', 'Sanggat Puas', '2023', '2023-12-21 08:15:50', '2023-12-21 08:15:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kusioner`
--
ALTER TABLE `kusioner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `surveipenggunalulusan`
--
ALTER TABLE `surveipenggunalulusan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `guest`
--
ALTER TABLE `guest`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kusioner`
--
ALTER TABLE `kusioner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `surveipenggunalulusan`
--
ALTER TABLE `surveipenggunalulusan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
