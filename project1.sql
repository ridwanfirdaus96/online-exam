-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 08:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `role` varchar(10) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `role`) VALUES
('admin@gmail.com', 'admin', 'head'),
('agama@gmail.com', 'agama', 'admin'),
('indonesia@gmail.com', 'indonesia', 'admin'),
('inggris@gmail.com', 'inggris', 'admin'),
('irfan@gmail.com', 'irfan', 'admin'),
('matematika@gmail.com', 'matematika', 'admin'),
('pancasila@gmail.com', 'pancasila', 'admin'),
('sejarah@gmail.com', 'sejarah', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `qid` text NOT NULL,
  `ansid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`qid`, `ansid`) VALUES
('5ddd606a6ffbe', '5ddd606a70736'),
('5ddd606a73dda', '5ddd606a74475'),
('5ddd63a65fc6f', '5ddd63a6603d3'),
('5ddd63a662fb0', '5ddd63a663721'),
('5ddd650773e47', '5ddd6507745ba'),
('5ddd6507773f7', '5ddd650777a7f'),
('5ddd66c058f87', '5ddd66c059662'),
('5ddd66c05b4db', '5ddd66c05c443'),
('5ddd68c4a9ac3', '5ddd68c4aa291'),
('5ddd68c4adf85', '5ddd68c4ae7f5'),
('5ddd6a196b714', '5ddd6a196bf27'),
('5ddd6a196f4c9', '5ddd6a1970528');

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `id` int(11) NOT NULL,
  `filename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `feedback`, `date`, `time`) VALUES
('5ddde8168e38d', 'Irfan', 'irfan@gmail.com', 'Delete User', 'Please, Delete user Admin Irfan.. thanks a lot !', '2019-11-27', '08:35:58am');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`email`, `eid`, `score`, `level`, `sahi`, `wrong`, `date`) VALUES
('fauziah@gmail.com', '5ddd66f1d08b8', 1, 2, 1, 1, '2019-11-27 01:19:00'),
('ridwan@gmail.com', '5ddd6545d57ac', 4, 2, 2, 0, '2019-11-27 01:19:43'),
('asep@gmail.com', '5ddd6320142aa', 4, 2, 2, 0, '2019-11-27 01:20:48'),
('ragil@gmail.com', '5ddd5e51a7a39', -2, 2, 0, 2, '2019-11-27 01:21:12'),
('ahmad@gmail.com', '5ddd694bca4d7', 1, 2, 1, 1, '2019-11-27 01:22:20'),
('monica@gmail.com', '5ddd642381974', 4, 2, 2, 0, '2019-11-27 01:22:45'),
('septian@gmail.com', '5ddd6545d57ac', -2, 2, 0, 2, '2019-11-27 01:23:07'),
('valent@gmail.com', '5ddd66f1d08b8', -2, 2, 0, 2, '2019-11-27 01:23:27'),
('andhini@gmail.com', '5ddd694bca4d7', 4, 2, 2, 0, '2019-11-27 01:24:09'),
('andhini@gmail.com', '5ddd6320142aa', 4, 2, 2, 0, '2019-11-27 01:24:17'),
('anisa@gmail.com', '5ddd6320142aa', -2, 2, 0, 2, '2019-11-27 01:25:26'),
('anisa@gmail.com', '5ddd5e51a7a39', 1, 2, 1, 1, '2019-11-27 01:25:34'),
('asep@gmail.com', '5ddd694bca4d7', 1, 2, 1, 1, '2019-11-27 07:13:55'),
('asep@gmail.com', '5ddd642381974', 4, 2, 2, 0, '2019-11-27 07:26:28');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`qid`, `option`, `optionid`) VALUES
('5ddd606a6ffbe', 'Apotik', '5ddd606a70736'),
('5ddd606a6ffbe', 'Memasukan', '5ddd606a7073b'),
('5ddd606a6ffbe', 'Memasukkan', '5ddd606a7073c'),
('5ddd606a6ffbe', 'Ubat', '5ddd606a7073d'),
('5ddd606a73dda', 'Cara menyimpan brokoli', '5ddd606a74475'),
('5ddd606a73dda', 'Fungsi garam dan penirisan brokoli', '5ddd606a7447a'),
('5ddd606a73dda', 'Cara mempertahankan warna brokoli', '5ddd606a7447b'),
('5ddd606a73dda', 'Daya tahan brokoli', '5ddd606a7447c'),
('5ddd63a65fc6f', 'give', '5ddd63a6603ce'),
('5ddd63a65fc6f', 'giving', '5ddd63a6603d3'),
('5ddd63a65fc6f', 'given', '5ddd63a6603d4'),
('5ddd63a65fc6f', 'gave', '5ddd63a6603d5'),
('5ddd63a662fb0', 'That', '5ddd63a663717'),
('5ddd63a662fb0', 'Whom', '5ddd63a66371e'),
('5ddd63a662fb0', 'Who', '5ddd63a66371f'),
('5ddd63a662fb0', 'Whose', '5ddd63a663721'),
('5ddd650773e47', 'Pisau Belati', '5ddd6507745ad'),
('5ddd650773e47', 'Bambu Runcing', '5ddd6507745ba'),
('5ddd650773e47', 'Palu dan Arit', '5ddd6507745be'),
('5ddd650773e47', 'Markas musuh Power Ranger', '5ddd6507745c1'),
('5ddd6507773f7', '23 Maret 1946', '5ddd650777a7c'),
('5ddd6507773f7', '24 Maret 1946', '5ddd650777a7f'),
('5ddd6507773f7', '25 Maret 1946', '5ddd650777a7f'),
('5ddd6507773f7', '26 Maret 1946', '5ddd650777a81'),
('5ddd66c058f87', 'Awareness of the contemporary fole of science', '5ddd66c05965e'),
('5ddd66c058f87', 'A compassionate citizenry', '5ddd66c059662'),
('5ddd66c058f87', 'Value judgements for a changing world', '5ddd66c059664'),
('5ddd66c058f87', 'Readiness for effective economic life', '5ddd66c059665'),
('5ddd66c05b4db', 'Marxis', '5ddd66c05c43d'),
('5ddd66c05b4db', 'Pluralis', '5ddd66c05c442'),
('5ddd66c05b4db', 'Organis', '5ddd66c05c443'),
('5ddd66c05b4db', 'Fasis', '5ddd66c05c445'),
('5ddd68c4a9ac3', '-2/(x - 1)^2', '5ddd68c4aa291'),
('5ddd68c4a9ac3', '-x/(x+1)', '5ddd68c4aa298'),
('5ddd68c4a9ac3', '2x/(x-1)^2', '5ddd68c4aa29a'),
('5ddd68c4a9ac3', '-2x/(x-1)', '5ddd68c4aa29b'),
('5ddd68c4adf85', '2(p+2q) ', '5ddd68c4ae7ef'),
('5ddd68c4adf85', '2(2p+q) ', '5ddd68c4ae7f5'),
('5ddd68c4adf85', '2p+q ', '5ddd68c4ae7f6'),
('5ddd68c4adf85', 'p+2q', '5ddd68c4ae7f8'),
('5ddd6a196b714', 'Shohih', '5ddd6a196bf21'),
('5ddd6a196b714', 'Hasan', '5ddd6a196bf25'),
('5ddd6a196b714', 'Dhoif', '5ddd6a196bf27'),
('5ddd6a196b714', 'Mutawattir', '5ddd6a196bf28'),
('5ddd6a196f4c9', 'Sanad Hadist', '5ddd6a197051a'),
('5ddd6a196f4c9', 'Rawi Hadist', '5ddd6a1970527'),
('5ddd6a196f4c9', 'Matan Hadist', '5ddd6a1970528'),
('5ddd6a196f4c9', 'Tafsir Hadist', '5ddd6a1970529');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`eid`, `qid`, `qns`, `choice`, `sn`) VALUES
('5ddd5e51a7a39', '5ddd606a6ffbe', 'Menurut KBBI, kata baku yang benar adalah...', 4, 1),
('5ddd5e51a7a39', '5ddd606a73dda', 'Bacalah paragraf berikut dengan saksama!\r\n\r\nSebaiknya, brokoli dimasak atau direbus dengan air mendidih dalam kondisi setengah matang. Tambahkan garam untuk membunuh kuman, lalu tiriskan sebentar! Siram dengan air dingin! Fungsi air dingin untuk mempertahankan warna dan memperlambat proses pemasakan brokoli. Dalam kondisi seperti ini, brokoli dapat disimpan 2—3 hari dalam lemari pendingin dan aman dikonsumsi. Ide pokok paragraf tersebut adalah....', 4, 2),
('5ddd6320142aa', '5ddd63a65fc6f', 'Complete this senteces ! The poor kids thanked us for ... him money and food.', 4, 1),
('5ddd6320142aa', '5ddd63a662fb0', 'The doctor carefully examined patients ... heads had injured in an accident.', 4, 2),
('5ddd642381974', '5ddd650773e47', 'Monumen Perjuangan Rakyat Jawa Barat memiliki arsitektur seperti?', 4, 1),
('5ddd642381974', '5ddd6507773f7', 'Peristiwa Bandung Lautan Api terjadi pada tanggal?', 4, 2),
('5ddd6545d57ac', '5ddd66c058f87', 'Salah satu tujuan PKN adalah menumbuhkan perasaan belas kasihan terhadap rakyat atau menumbuhkan pandangan yang bisa menghargai manusia sebagai manusia, yang disebut dengan…', 4, 1),
('5ddd6545d57ac', '5ddd66c05b4db', 'Negara bukan merupakan alat dari masyarakatnya. Negara merupakan alat dari dirinya sendiri. Hal tersebut merupakan pendapat teori...', 4, 2),
('5ddd66f1d08b8', '5ddd68c4a9ac3', 'Tentukan fungsi turunan pertama dari f(x) = x + 1 / x - 1 ', 4, 1),
('5ddd66f1d08b8', '5ddd68c4adf85', 'Diketahui 5log2=p dan 5log3=q. Nilai dari 5log144=⋯⋅', 4, 2),
('5ddd694bca4d7', '5ddd6a196b714', 'Kebersihan sebagian dari Iman adalah termasuk ke dalam Hadist?', 4, 1),
('5ddd694bca4d7', '5ddd6a196f4c9', 'Makna isi hadist disebut?', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `sahi` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `intro` text NOT NULL,
  `tag` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `title`, `sahi`, `wrong`, `total`, `time`, `intro`, `tag`, `date`, `email`) VALUES
('5ddd5e51a7a39', '#bahasa Indonesia', 2, 1, 2, 5, 'pertanyaan ujian Bahasa Indonesia', '#bahasaindonesia', '2019-11-26 17:18:09', 'indonesia@gmail.com'),
('5ddd6320142aa', '#bahasa Inggris', 2, 1, 2, 5, 'pertanyaan ujian Bahasa Inggris', '#bahasainggris', '2019-11-26 17:38:40', 'inggris@gmail.com'),
('5ddd642381974', '#sejarah Indonesia', 2, 1, 2, 5, 'pertanyaan ujian Sejarah Indonesia', '#sejarah', '2019-11-26 17:42:59', 'sejarah@gmail.com'),
('5ddd6545d57ac', '#pendidikan Pancasila Dan Kewarganegaraan', 2, 1, 2, 5, 'pertanyaan ujian Pendidikan dan Kewarganegaraan', '#pancasila', '2019-11-26 17:47:49', 'pancasila@gmail.com'),
('5ddd66f1d08b8', '#matematika', 2, 1, 2, 10, 'pertanyaan ujian Matematika', '#matematika', '2019-11-26 17:54:57', 'matematika@gmail.com'),
('5ddd694bca4d7', '#agama', 2, 1, 2, 5, 'pertanyaan ujian Agama', '#agama', '2019-11-26 18:04:59', 'agama@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`email`, `score`, `time`) VALUES
('fauziah@gmail.com', 1, '2019-11-27 01:19:00'),
('ridwan@gmail.com', 4, '2019-11-27 01:19:43'),
('asep@gmail.com', 9, '2019-11-27 07:26:28'),
('ragil@gmail.com', -2, '2019-11-27 01:21:12'),
('ahmad@gmail.com', 1, '2019-11-27 01:22:20'),
('monica@gmail.com', 4, '2019-11-27 01:22:45'),
('septian@gmail.com', -2, '2019-11-27 01:23:07'),
('valent@gmail.com', -2, '2019-11-27 01:23:27'),
('andhini@gmail.com', 8, '2019-11-27 01:24:17'),
('anisa@gmail.com', -1, '2019-11-27 01:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `college` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `college`, `email`, `mob`, `password`) VALUES
('Ahmad', 'M', 'SMA 8 Bandung', 'ahmad@gmail.com', 87647478888, '61243c7b9a4022cb3f8dc3106767ed12'),
('Andhini', 'F', 'SMA 4 Bandung', 'andhini@gmail.com', 87262525278, '1369615388917d5c0138c81dbd33fe0b'),
('Anisa', 'F', 'SMA 13 Bandung', 'anisa@gmail.com', 82372362992, '40cc8f68f52757aff1ad39a006bfbf11'),
('Asep', 'M', 'SMA N 1 Bandung', 'asep@gmail.com', 88132328811, '7b4449987d9a0e390f88e8fa37a12b83'),
('Erwin', 'M', 'SMA 17 Bandung', 'erwin@gmail.com', 89732621231, '785f0b13d4daf8eee0d11195f58302a4'),
('Fauziah', 'F', 'SMA 24 Bandung', 'fauziah@gmail.com', 83658736883, 'a8e404443f4edea9337a04fa3bf192b1'),
('Monica', 'F', 'SMA 7 Bandung', 'monica@gmail.com', 89237813222, 'ff0d813dd5d2f64dd372c6c4b6aed086'),
('Ragil', 'M', 'SMA 7 Bandung', 'ragil@gmail.com', 86352769993, '67153c4ffb77b9d03276cad142a84e79'),
('Ridwan', 'M', 'SMAN 2 Bandung', 'ridwan@gmail.com', 8712737123, 'd584c96e6c1ba3ca448426f66e552e8e'),
('Septian', 'M', 'SMA 3 Bandung', 'septian@gmail.com', 82763713888, '5b3bb3e5458e02aa356f2fc671ae08d9'),
('Valent', 'F', 'SMA 10 Bandung', 'valent@gmail.com', 89725522626, '441b680560ed6c0c5e49ff4c554a63e7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
