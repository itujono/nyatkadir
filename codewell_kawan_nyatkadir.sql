-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2017 at 05:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codewell_kawan_nyatkadir`
--

-- --------------------------------------------------------

--
-- Table structure for table `nyat_about`
--

CREATE TABLE `nyat_about` (
  `idABOUT` int(11) NOT NULL,
  `titlehomeABOUT` varchar(225) NOT NULL,
  `deschomeABOUT` text NOT NULL,
  `headertitleABOUT` varchar(70) NOT NULL,
  `titleABOUT` varchar(70) NOT NULL,
  `descABOUT` text NOT NULL,
  `title2ABOUT` varchar(70) NOT NULL,
  `desc2ABOUT` text NOT NULL,
  `titleawardABOUT` varchar(70) NOT NULL,
  `listawardABOUT` text NOT NULL,
  `createdateABOUT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateABOUT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_about`
--

INSERT INTO `nyat_about` (`idABOUT`, `titlehomeABOUT`, `deschomeABOUT`, `headertitleABOUT`, `titleABOUT`, `descABOUT`, `title2ABOUT`, `desc2ABOUT`, `titleawardABOUT`, `listawardABOUT`, `createdateABOUT`, `updatedateABOUT`) VALUES
(1, 'Nyat Kadir adalah anggota DPR RI yang akan selalu mengabdi untuk Indonesia.', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <br><br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'Bergegaslah! <br>Bangsa ini harus menang!', 'Dengan Pengalaman 20 Tahun Mengabdi  Untuk Indonesia', '<p>Hari di mana demokrasi merupakan hak-hak yang mutlak bagi seluruh rakyat. Semua suku bangsa yang ada di Indonesia, haruslah bersatu tanpa terkecuali.</p>', 'Nyat Kadir Adalah Anggota Kehormatan Fraksi Nasdem di DPR RI', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>', 'Raihan dan Award yang Didapat  oleh Nyat Kadir', '[[\"Anugerah Politikus Terbaik 2016\",\"Diberikan oleh KPK \",\"2016\"],[\"Anugerah Politikus Terpelajar 2014\",\"Diberikan oleh BPK \",\"2013\"],[\"Anugerah Tokoh Melayu 2015\",\"Diberikan oleh Dinpar \",\"2015\"],[\"Tuanku Diraja Melayu 2016\",\"Diberikan oleh Sultan Bolqiah \",\"2016\"],[\"Anugerah Politikus Terbaik 2017\",\"Diberikan oleh KPK \",\"2017\"],[\"Anugerah Politikus Terbaik 2018\",\"Diberikan oleh KPK \",\"2015\"]]', '2017-11-13 13:54:39', '2017-11-15 04:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_attempts`
--

CREATE TABLE `nyat_attempts` (
  `idATTEMPTS` int(11) NOT NULL,
  `idUSER` int(4) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_attempts`
--

INSERT INTO `nyat_attempts` (`idATTEMPTS`, `idUSER`, `timeATTEMPTS`) VALUES
(1, 1, '1511839878'),
(2, 1, '1511839894'),
(3, 1, '1511839904'),
(6, 1, '1511839996');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_choice_polling`
--

CREATE TABLE `nyat_choice_polling` (
  `idCHOICE` int(11) NOT NULL,
  `idPOLLING` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `nameCHOICE` varchar(120) NOT NULL,
  `createdateCHOICE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCHOICE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nyat_gallery`
--

CREATE TABLE `nyat_gallery` (
  `idGALLERY` int(11) NOT NULL,
  `titleGALLERY` varchar(80) NOT NULL,
  `categoryGALLERY` int(1) NOT NULL COMMENT '1  foto 2 video',
  `linkvideoGALLERY` varchar(125) NOT NULL,
  `createdateGALLERY` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateGALLERY` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_gallery`
--

INSERT INTO `nyat_gallery` (`idGALLERY`, `titleGALLERY`, `categoryGALLERY`, `linkvideoGALLERY`, `createdateGALLERY`, `updatedateGALLERY`) VALUES
(1, 'Demi Bangsa', 1, '', '2017-11-14 13:59:05', '0000-00-00 00:00:00'),
(2, 'Untuk kita dari kita', 1, '', '2017-11-14 13:59:24', '2017-11-14 14:18:04'),
(3, 'Menjaga Marwah Melayu', 1, '', '2017-11-14 13:59:44', '0000-00-00 00:00:00'),
(4, 'Menjaga Tanah air kita', 1, '', '2017-11-14 13:59:57', '0000-00-00 00:00:00'),
(5, 'Untuk Pemuda Melayu', 1, '', '2017-11-14 14:00:16', '2017-11-14 14:13:55'),
(6, 'Nyat Kadir gelar buka bersama dengan anak jalanan', 2, 'https://www.youtube.com/watch?v=zXXJfZ8WrCA', '2017-11-20 06:40:58', '2017-11-20 07:54:38'),
(7, 'Kenapa Nyat Kadir?', 1, '', '2017-11-20 07:49:47', '0000-00-00 00:00:00'),
(8, 'Untukmu sayang - Nyat kadir', 2, 'https://www.youtube.com/watch?v=gwBXFC2GKto', '2017-11-20 07:57:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_idea`
--

CREATE TABLE `nyat_idea` (
  `idIDEA` int(11) NOT NULL,
  `titleIDEA` varchar(90) NOT NULL,
  `descIDEA` text NOT NULL,
  `createdateIDEA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateIDEA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_idea`
--

INSERT INTO `nyat_idea` (`idIDEA`, `titleIDEA`, `descIDEA`, `createdateIDEA`, `updatedateIDEA`) VALUES
(1, 'Ada 2 jenis manusia yang ada di dunia ini. Kamu yang mana?', '', '2017-11-14 14:46:19', '0000-00-00 00:00:00'),
(2, 'Ke mana kamu mau jika kelak akan terjadi perselisihan?', '', '2017-11-14 14:46:32', '0000-00-00 00:00:00'),
(3, 'Bagaimana jika burung pelikan tak mampu berdiri satu kaki?', '', '2017-11-14 14:46:40', '0000-00-00 00:00:00'),
(4, 'Sudahkah kamu mengamalkan Pancasila di kehidupan TK mu dulu?', '', '2017-11-14 14:46:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_intro_news`
--

CREATE TABLE `nyat_intro_news` (
  `idINTRONEWS` int(11) NOT NULL,
  `titleINTRONEWS` varchar(80) NOT NULL,
  `createdateINTRONEWS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateINTRONEWS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_intro_news`
--

INSERT INTO `nyat_intro_news` (`idINTRONEWS`, `titleINTRONEWS`, `createdateINTRONEWS`, `updatedateINTRONEWS`) VALUES
(1, 'Bergegaslah! <br> Bangsa ini harus menang!', '2017-11-20 04:09:43', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_menus_admin`
--

CREATE TABLE `nyat_menus_admin` (
  `idMENU` int(11) NOT NULL,
  `namaMENU` varchar(45) NOT NULL,
  `iconMENU` varchar(45) NOT NULL,
  `functionMENU` varchar(45) NOT NULL,
  `parentMENU` int(11) NOT NULL DEFAULT '0',
  `accessMENU` varchar(11) NOT NULL,
  `orderMENU` int(10) NOT NULL,
  `statusMENU` int(11) NOT NULL DEFAULT '1',
  `createdateMENU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nyat_menus_admin`
--

INSERT INTO `nyat_menus_admin` (`idMENU`, `namaMENU`, `iconMENU`, `functionMENU`, `parentMENU`, `accessMENU`, `orderMENU`, `statusMENU`, `createdateMENU`) VALUES
(1, 'Dashboard', 'dashboard', 'dashboard', 0, '0', 1, 1, '2017-10-02 09:05:04'),
(2, 'Beranda', 'dashboard', 'index_dashboard', 1, '0', 1, 1, '2017-10-02 13:24:50'),
(3, 'Pengguna', 'verified_user', 'user', 0, '0', 1, 1, '2017-10-25 12:37:33'),
(4, 'Daftar', 'verified_user', 'index_user', 3, '0', 1, 1, '2017-10-25 12:37:55'),
(5, 'Slider', 'slideshow', 'slider', 0, '0', 1, 1, '2017-11-13 04:15:55'),
(6, 'Daftar', 'slideshow', 'index_slider', 5, '0', 1, 1, '2017-11-13 04:16:04'),
(7, 'Tentang', 'textsms', 'about', 0, '0', 1, 1, '2017-11-13 13:38:40'),
(8, 'Daftar', 'textsms', 'index_about', 7, '0', 1, 1, '2017-11-13 13:39:06'),
(9, 'Galeri', 'photo_library', 'gallery', 0, '0', 1, 1, '2017-11-14 13:55:25'),
(10, 'Daftar', 'photo_library', 'index_gallery', 9, '0', 1, 1, '2017-11-14 13:55:31'),
(11, 'Buah Pikiran', 'lightbulb_outline', 'idea', 0, '0', 1, 1, '2017-11-14 14:44:43'),
(12, 'Daftar', 'lightbulb_outline', 'index_idea', 11, '0', 1, 1, '2017-11-14 14:44:48'),
(13, 'Berita', 'question_answer', 'news', 0, '0', 1, 1, '2017-11-20 03:58:40'),
(14, 'Daftar', 'question_answer', 'index_intro_news', 13, '0', 1, 1, '2017-11-20 03:59:08'),
(15, 'Daftar Berita', 'question_answer', 'index_news', 13, '0', 1, 1, '2017-11-20 04:30:36'),
(16, 'Polling', 'poll', 'polling', 0, '0', 1, 1, '2017-11-28 13:52:58'),
(17, 'Daftar', 'poll', 'index_polling', 16, '0', 1, 1, '2017-11-28 13:53:03'),
(18, 'Input Polling', 'poll', 'form_polling', 16, '0', 1, 1, '2017-11-28 14:18:36'),
(19, 'Mitra Kerja', 'assignment', 'mitra', 0, '0', 1, 1, '2017-11-29 13:03:30'),
(20, 'Daftar', 'assignment', 'index_mitra', 19, '0', 1, 1, '2017-11-29 13:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_mitra_kerja`
--

CREATE TABLE `nyat_mitra_kerja` (
  `idMITRA` int(11) NOT NULL,
  `nameMITRA` varchar(80) NOT NULL,
  `createdateMITRA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateMITRA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_mitra_kerja`
--

INSERT INTO `nyat_mitra_kerja` (`idMITRA`, `nameMITRA`, `createdateMITRA`, `updatedateMITRA`) VALUES
(1, 'PT. Sentosa Abadi', '2017-11-29 13:05:35', '0000-00-00 00:00:00'),
(2, 'PT. Alfatron Batam', '2017-11-29 13:05:51', '0000-00-00 00:00:00'),
(3, 'PT. Kek Pisang Villa Bambu', '2017-11-29 13:06:18', '0000-00-00 00:00:00'),
(4, 'PT. Goindo Me', '2017-11-29 13:06:33', '2017-11-29 13:07:10'),
(5, 'PT. Sabar Subur', '2017-11-29 13:06:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_news`
--

CREATE TABLE `nyat_news` (
  `idNEWS` int(11) NOT NULL,
  `titleNEWS` varchar(80) NOT NULL,
  `descNEWS` text NOT NULL,
  `createdateNEWS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateNEWS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_news`
--

INSERT INTO `nyat_news` (`idNEWS`, `titleNEWS`, `descNEWS`, `createdateNEWS`, `updatedateNEWS`) VALUES
(1, 'Mengunjungi Panti Asuhan di Camp Vietnam Barelang', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', '2017-11-20 05:23:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_polling`
--

CREATE TABLE `nyat_polling` (
  `idPOLLING` int(11) NOT NULL,
  `questionPOLLING` varchar(120) NOT NULL,
  `answerPOLLING` text NOT NULL,
  `statusPOLLING` int(1) NOT NULL,
  `createdatePOLLING` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedatePOLLING` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_polling`
--

INSERT INTO `nyat_polling` (`idPOLLING`, `questionPOLLING`, `answerPOLLING`, `statusPOLLING`, `createdatePOLLING`, `updatedatePOLLING`) VALUES
(3, 'Apakah dia memang anak dewa?', '[[\"Betul Sekali\"],[\"Gak tahu\"],[\"Emang elu yee\"],[\"Kapan?\"]]', 0, '2017-11-29 01:33:01', '2017-11-29 03:00:34'),
(4, 'Bagaimana pendapatmu tentang kejadian Setya Novanto di Rumah Sakit Jakarta?', '[[\"Biasa aja\"],[\"Nggak bisa lah\"],[\"Ya bisa tapi nggak boleh\"],[\"Sukak dia lah\"]]', 1, '2017-11-29 01:37:07', '2017-11-29 03:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_sessions`
--

CREATE TABLE `nyat_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_sessions`
--

INSERT INTO `nyat_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('2p9uqs6cud8qkjioq96ndft1d67hvlqm', '::1', 1512013618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031333631383b),
('3494q5fv51f4qfonla9vkodoqa8pqmm7', '::1', 1511877206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837373230363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a2257656c636f6d6521223b733a343a2274657874223b733a33393a2248616c6c6f2c2053656c616d617420646174616e672061646d696e4061646d696e2e636f6d2021223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('3kc0kagnikjaq50mvcrbjn8jb2btg08h', '::1', 1511919149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931393134393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e676861707573616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('4ktm4s0af9qto8elmmo68oc99e26q1np', '::1', 1511918387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931383338373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('6d9nb0s5jatabcdqpoov8jnshpcmif0c', '::1', 1511920149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932303134393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31303a2250657268617469616e2c223b733a343a2274657874223b733a34363a2253696c616b616e206e6f6e2d616b7469666b616e20706f6c6c696e672079616e67206d6173696820616b7469662e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7tik9oo8e4hribt113fhamiavbcc7bvp', '::1', 1511880753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838303735333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('7ua6m0oq12ma9ehdvbclrpesqa0m9us7', '::1', 1511877678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837373637383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('9bjoht19dgslqpbu1nk8v9pp40koki1e', '::1', 1511960639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313936303633393b),
('9s7uf1ui9lb8bm7455va8e4f4e11l6ph', '::1', 1512007902, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323030373930323b),
('a6lq12o6b4erknesngrsl8r2rtgpu96a', '::1', 1512015085, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031353038353b),
('a91323ogqb7idb65a95k1c0c3t7ebalq', '::1', 1511919703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931393730333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a393a22426572686173696c2c223b733a343a2274657874223b733a33333a2250657275626168616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('aj8icigrt4lc5hab7c7ap98h5pvucuuq', '::1', 1511877984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837373938343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ajossbieadvg1gj1v5s17dq6dhnh5mo1', '::1', 1511925236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932353233363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31303a2250657268617469616e2c223b733a343a2274657874223b733a3133333a2253696c616b616e206e6f6e2d616b7469666b616e20706f6c6c696e67203c623e282242616761696d616e612070656e64617061746d752074656e74616e67206b656a616469616e205365747961204e6f76616e746f2064692052756d61682053616b6974204a616b617274613f22293c2f623e2079616e67206d6173696820616b7469662e223b733a343a2274797065223b733a363a2264616e676572223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('b4p8qn4s1aeflc6oam0ukau9it2nlfnu', '::1', 1511959687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313935393638373b),
('b9j7737j20vb69qtlhgs6n3srp7bkgde', '::1', 1511879670, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837393637303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('c952cg3lneb53mlul3f6rdsnrnlv7fh0', '::1', 1511881084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838313038343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ca1vagdnkp9m4cftivjk8tcg1iam65m0', '::1', 1511878505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837383530353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ce6i23o39sgkj4uqdctd5tjvfkf223la', '::1', 1511918761, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931383736313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('dn2kekugl4jfvqi9ibiq65s7hjosovrl', '::1', 1511924281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932343238313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31303a2250657268617469616e2c223b733a343a2274657874223b733a34363a2253696c616b616e206e6f6e2d616b7469666b616e20706f6c6c696e672079616e67206d6173696820616b7469662e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ev4rvc7rb1vvji6of6l0tjc97nokdndo', '::1', 1512016685, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031363536343b),
('hfjfc77kcn5qlbkoteu65v9c49a6bqpu', '::1', 1511881220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838313038343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('hsdjnas0beva0hh16npu47prtj3ote3n', '::1', 1511960955, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313936303935353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('i0lptp72bvjse0v70u1oap9ieadlmvdb', '::1', 1512011269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031313236393b6d6573736167657c613a313a7b733a343a2274657874223b733a36333a224d61616620616461206b6573616c6168616e2c206d6f686f6e20756c616e676920696e707574616e20666f726d207265676973747261736920616e6461212e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('jp6hb5qpalm77hf36thekhs8bloud0di', '::1', 1512013973, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031333937333b),
('kr9p111hjmq2c47hsbj8rmabaco4jso8', '::1', 1512012906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031323930363b),
('n3j471jovj3cf3bcmmvhuo9rsn6faf11', '::1', 1512016564, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031363536343b),
('nh35ms09aeirrop87vmvv0b39rk9oicc', '::1', 1512013238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031333233383b),
('o3af15nhrb100g692iulu4m94pacph0i', '::1', 1511878824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837383832343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('q2qfc8nhq8rthovthkk00blvgfkhgug6', '::1', 1512011886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031313838363b6d6573736167657c613a313a7b733a343a2274657874223b733a34353a224d6161662c20616b756e20616e646120746964616b207465726461667461722064692064617461206b616d692e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('sklqlnp7j1lj9mrlsergpr3aake0ne9h', '::1', 1511879993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837393939333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('tq396d551ng5kbrbh4lbv1ejo90sef95', '::1', 1511879328, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837393332383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('u402pdqfma22l42arc8kcee698tmb927', '::1', 1511925541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932353534313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('uu69qtt3gkik0r8rp46cskuf8ubfhn9t', '::1', 1511925628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932353534313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('vhfv4cj2sleuesu0mv8hs659la33prbb', '::1', 1511880417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838303431373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b);

-- --------------------------------------------------------

--
-- Table structure for table `nyat_slider`
--

CREATE TABLE `nyat_slider` (
  `idSLIDER` int(11) NOT NULL,
  `titleSLIDER` varchar(255) NOT NULL,
  `descSLIDER` text NOT NULL,
  `createdateSLIDER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSLIDER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_slider`
--

INSERT INTO `nyat_slider` (`idSLIDER`, `titleSLIDER`, `descSLIDER`, `createdateSLIDER`, `updatedateSLIDER`) VALUES
(1, 'Selamat datang di Laman Resmi Nyat Kadir', '<p>Pemuda Melayu berasaskan <br> Indonesia seutuhnya.</p>', '2017-11-13 04:47:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_users`
--

CREATE TABLE `nyat_users` (
  `idUSER` int(11) NOT NULL,
  `nameUSER` varchar(80) NOT NULL,
  `emailUSER` varchar(120) NOT NULL,
  `passwordUSER` varchar(129) NOT NULL,
  `addressUSER` text NOT NULL,
  `cityUSER` varchar(50) NOT NULL,
  `zipUSER` varchar(8) NOT NULL,
  `genderUSER` int(1) NOT NULL,
  `ageUSER` int(2) NOT NULL,
  `statusUSER` int(1) NOT NULL,
  `createdateUSER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateUSER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_users`
--

INSERT INTO `nyat_users` (`idUSER`, `nameUSER`, `emailUSER`, `passwordUSER`, `addressUSER`, `cityUSER`, `zipUSER`, `genderUSER`, `ageUSER`, `statusUSER`, `createdateUSER`, `updatedateUSER`) VALUES
(1, 'Andhana Utama', 'magicwarms@gmail.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', 'Tiban Lah', 'Batam', '29425', 1, 25, 0, '2017-11-28 02:09:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_users_admin`
--

CREATE TABLE `nyat_users_admin` (
  `idADMIN` int(11) NOT NULL,
  `nameADMIN` varchar(80) NOT NULL,
  `emailADMIN` varchar(40) NOT NULL,
  `passwordADMIN` varchar(129) NOT NULL,
  `createdateADMIN` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastloginADMIN` datetime NOT NULL,
  `statusADMIN` int(1) NOT NULL,
  `is_adminADMIN` int(1) NOT NULL COMMENT '1 = Admin 2 = Not admin'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_users_admin`
--

INSERT INTO `nyat_users_admin` (`idADMIN`, `nameADMIN`, `emailADMIN`, `passwordADMIN`, `createdateADMIN`, `lastloginADMIN`, `statusADMIN`, `is_adminADMIN`) VALUES
(1, 'Marco', 'admin@admin.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', '2017-09-26 10:04:09', '2017-11-29 20:04:06', 1, 1),
(2, 'Vasco', 'admin1@admin.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', '2017-10-25 13:32:15', '2017-10-25 21:20:19', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `nyat_visitor`
--

CREATE TABLE `nyat_visitor` (
  `idVISITOR` int(11) NOT NULL,
  `ipVISITOR` varchar(18) NOT NULL,
  `dateVISITOR` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_visitor`
--

INSERT INTO `nyat_visitor` (`idVISITOR`, `ipVISITOR`, `dateVISITOR`) VALUES
(1, '::1', '2017-11-09'),
(2, '::1', '2017-11-10'),
(3, '::1', '2017-11-13'),
(4, '::1', '2017-11-14'),
(5, '::1', '2017-11-15'),
(6, '::1', '2017-11-20'),
(7, '::1', '2017-11-21'),
(8, '::1', '2017-11-27'),
(9, '::1', '2017-11-28'),
(10, '::1', '2017-11-29'),
(11, '::1', '2017-11-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nyat_about`
--
ALTER TABLE `nyat_about`
  ADD PRIMARY KEY (`idABOUT`);

--
-- Indexes for table `nyat_attempts`
--
ALTER TABLE `nyat_attempts`
  ADD PRIMARY KEY (`idATTEMPTS`);

--
-- Indexes for table `nyat_choice_polling`
--
ALTER TABLE `nyat_choice_polling`
  ADD PRIMARY KEY (`idCHOICE`);

--
-- Indexes for table `nyat_gallery`
--
ALTER TABLE `nyat_gallery`
  ADD PRIMARY KEY (`idGALLERY`);

--
-- Indexes for table `nyat_idea`
--
ALTER TABLE `nyat_idea`
  ADD PRIMARY KEY (`idIDEA`);

--
-- Indexes for table `nyat_intro_news`
--
ALTER TABLE `nyat_intro_news`
  ADD PRIMARY KEY (`idINTRONEWS`);

--
-- Indexes for table `nyat_menus_admin`
--
ALTER TABLE `nyat_menus_admin`
  ADD PRIMARY KEY (`idMENU`);

--
-- Indexes for table `nyat_mitra_kerja`
--
ALTER TABLE `nyat_mitra_kerja`
  ADD PRIMARY KEY (`idMITRA`);

--
-- Indexes for table `nyat_news`
--
ALTER TABLE `nyat_news`
  ADD PRIMARY KEY (`idNEWS`);

--
-- Indexes for table `nyat_polling`
--
ALTER TABLE `nyat_polling`
  ADD PRIMARY KEY (`idPOLLING`);

--
-- Indexes for table `nyat_sessions`
--
ALTER TABLE `nyat_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `nyat_slider`
--
ALTER TABLE `nyat_slider`
  ADD PRIMARY KEY (`idSLIDER`);

--
-- Indexes for table `nyat_users`
--
ALTER TABLE `nyat_users`
  ADD PRIMARY KEY (`idUSER`);

--
-- Indexes for table `nyat_users_admin`
--
ALTER TABLE `nyat_users_admin`
  ADD PRIMARY KEY (`idADMIN`);

--
-- Indexes for table `nyat_visitor`
--
ALTER TABLE `nyat_visitor`
  ADD PRIMARY KEY (`idVISITOR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nyat_about`
--
ALTER TABLE `nyat_about`
  MODIFY `idABOUT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_attempts`
--
ALTER TABLE `nyat_attempts`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `nyat_choice_polling`
--
ALTER TABLE `nyat_choice_polling`
  MODIFY `idCHOICE` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nyat_gallery`
--
ALTER TABLE `nyat_gallery`
  MODIFY `idGALLERY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nyat_idea`
--
ALTER TABLE `nyat_idea`
  MODIFY `idIDEA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nyat_intro_news`
--
ALTER TABLE `nyat_intro_news`
  MODIFY `idINTRONEWS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_menus_admin`
--
ALTER TABLE `nyat_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `nyat_mitra_kerja`
--
ALTER TABLE `nyat_mitra_kerja`
  MODIFY `idMITRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nyat_news`
--
ALTER TABLE `nyat_news`
  MODIFY `idNEWS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_polling`
--
ALTER TABLE `nyat_polling`
  MODIFY `idPOLLING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nyat_slider`
--
ALTER TABLE `nyat_slider`
  MODIFY `idSLIDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_users`
--
ALTER TABLE `nyat_users`
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_users_admin`
--
ALTER TABLE `nyat_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nyat_visitor`
--
ALTER TABLE `nyat_visitor`
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
