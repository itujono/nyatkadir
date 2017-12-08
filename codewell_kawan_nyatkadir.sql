-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 10:23 AM
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
-- Table structure for table `nyat_article`
--

CREATE TABLE `nyat_article` (
  `idARTICLE` int(11) NOT NULL,
  `titleARTICLE` varchar(90) NOT NULL,
  `descARTICLE` text NOT NULL,
  `bestARTICLE` int(1) NOT NULL,
  `createdateARTICLE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateARTICLE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_article`
--

INSERT INTO `nyat_article` (`idARTICLE`, `titleARTICLE`, `descARTICLE`, `bestARTICLE`, `createdateARTICLE`, `updatedateARTICLE`) VALUES
(1, 'Ada 2 jenis manusia yang ada di dunia ini. Kamu yang mana?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 1, '2017-11-14 14:46:19', '2017-12-05 13:31:39'),
(2, 'Ke mana kamu mau jika kelak akan terjadi perselisihan?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 1, '2017-11-14 14:46:32', '2017-12-05 13:32:15'),
(3, 'Bagaimana jika burung pelikan tak mampu berdiri satu kaki?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 0, '2017-11-14 14:46:40', '2017-12-05 13:33:29'),
(4, 'Sudahkah kamu mengamalkan Pancasila di kehidupan TK mu dulu?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 0, '2017-11-14 14:46:48', '2017-12-05 13:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_aspirasi`
--

CREATE TABLE `nyat_aspirasi` (
  `idASPIRASI` int(11) NOT NULL,
  `nameASPIRASI` varchar(60) NOT NULL,
  `emailASPIRASI` varchar(90) NOT NULL,
  `ageASPIRASI` int(2) NOT NULL,
  `subjectASPIRASI` varchar(100) NOT NULL,
  `descASPIRASI` text NOT NULL,
  `userASPIRASI` int(8) NOT NULL COMMENT 'kalau 0 = guest, kalau tak 0 = user, join with nyat_users',
  `createdateASPIRASI` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateASPIRASI` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_aspirasi`
--

INSERT INTO `nyat_aspirasi` (`idASPIRASI`, `nameASPIRASI`, `emailASPIRASI`, `ageASPIRASI`, `subjectASPIRASI`, `descASPIRASI`, `userASPIRASI`, `createdateASPIRASI`, `updatedateASPIRASI`) VALUES
(1, 'Andhana Utama', 'magicwarms@gmail.com', 23, 'Kenapa sih!', 'Apapun itu, pasti akan kami dengar dengan seksama.', 1, '2017-12-07 14:06:51', '0000-00-00 00:00:00'),
(2, 'Mahrani mahir', 'magicwarms@gmail.com', 67, 'Begitu kah?', 'Apapun itu, pasti akan kami dengar dengan seksama.', 0, '2017-12-07 14:09:06', '0000-00-00 00:00:00');

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
(6, 1, '1511839996'),
(7, 1, '1512016955'),
(8, 1, '1512653545');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_choice_polling`
--

CREATE TABLE `nyat_choice_polling` (
  `idCHOICE` int(11) NOT NULL,
  `idPOLLING` int(11) NOT NULL,
  `idUSER` int(11) NOT NULL,
  `nameCHOICE` varchar(120) NOT NULL,
  `valueCHOICE` int(1) NOT NULL,
  `createdateCHOICE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCHOICE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_choice_polling`
--

INSERT INTO `nyat_choice_polling` (`idCHOICE`, `idPOLLING`, `idUSER`, `nameCHOICE`, `valueCHOICE`, `createdateCHOICE`, `updatedateCHOICE`) VALUES
(1, 4, 1, 'Ya bisa tapi nggak boleh', 1, '2017-12-01 01:45:38', '0000-00-00 00:00:00'),
(2, 3, 1, 'Kapan?', 1, '2017-12-01 01:45:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_flyer`
--

CREATE TABLE `nyat_flyer` (
  `idFLYER` int(11) NOT NULL,
  `titleFLYER` varchar(80) NOT NULL,
  `startFLYER` date NOT NULL,
  `endFLYER` date NOT NULL,
  `createdateFLYER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateFLYER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_flyer`
--

INSERT INTO `nyat_flyer` (`idFLYER`, `titleFLYER`, `startFLYER`, `endFLYER`, `createdateFLYER`, `updatedateFLYER`) VALUES
(1, 'Flyer test Batam pos', '2017-12-08', '2017-12-10', '2017-12-08 09:16:47', '2017-12-08 09:17:20');

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
(11, 'Artikel', 'lightbulb_outline', 'article', 0, '0', 1, 1, '2017-11-14 14:44:43'),
(12, 'Daftar', 'lightbulb_outline', 'index_article', 11, '0', 1, 1, '2017-11-14 14:44:48'),
(13, 'Berita', 'question_answer', 'news', 0, '0', 1, 1, '2017-11-20 03:58:40'),
(14, 'Daftar', 'question_answer', 'index_intro_news', 13, '0', 1, 1, '2017-11-20 03:59:08'),
(15, 'Daftar Berita', 'question_answer', 'index_news', 13, '0', 1, 1, '2017-11-20 04:30:36'),
(16, 'Polling', 'poll', 'polling', 0, '0', 1, 1, '2017-11-28 13:52:58'),
(17, 'Daftar', 'poll', 'index_polling', 16, '0', 1, 1, '2017-11-28 13:53:03'),
(18, 'Input Polling', 'poll', 'form_polling', 16, '0', 1, 1, '2017-11-28 14:18:36'),
(19, 'Mitra Kerja', 'assignment', 'mitra', 0, '0', 1, 1, '2017-11-29 13:03:30'),
(20, 'Daftar', 'assignment', 'index_mitra', 19, '0', 1, 1, '2017-11-29 13:03:35'),
(23, 'Liputan Media', 'mode_comment', 'press', 0, '0', 1, 1, '2017-12-06 02:16:23'),
(24, 'Daftar', 'mode_comment', 'index_press', 23, '0', 1, 1, '2017-12-06 02:16:27'),
(25, 'Aspirasi', 'feedback', 'aspirasi', 0, '0', 1, 1, '2017-12-08 01:58:45'),
(26, 'Daftar', 'feedback', 'index_aspirasi', 25, '0', 1, 1, '2017-12-08 01:58:55'),
(27, 'Flyer', 'add_alert', 'flyer', 0, '0', 1, 1, '2017-12-08 08:31:04'),
(28, 'Daftar', 'add_alert', 'index_flyer', 27, '0', 1, 1, '2017-12-08 08:31:10');

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
  `bestNEWS` int(1) NOT NULL,
  `createdateNEWS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateNEWS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_news`
--

INSERT INTO `nyat_news` (`idNEWS`, `titleNEWS`, `descNEWS`, `bestNEWS`, `createdateNEWS`, `updatedateNEWS`) VALUES
(1, 'Mengunjungi Panti Asuhan di Camp Vietnam Barelang', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 0, '2017-11-20 05:23:07', '0000-00-00 00:00:00');

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
(4, 'Bagaimana pendapatmu tentang kejadian Setya Novanto di Rumah Sakit Jakarta?', '[[\"Biasa aja\"],[\"Nggak bisa lah\"],[\"Ya bisa tapi nggak boleh\"],[\"Sukak dia lah\"]]', 0, '2017-11-29 01:37:07', '2017-12-01 01:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_press`
--

CREATE TABLE `nyat_press` (
  `idPRESS` int(11) NOT NULL,
  `titlePRESS` varchar(80) NOT NULL,
  `descPRESS` text NOT NULL,
  `bestPRESS` int(1) NOT NULL,
  `sourcePRESS` varchar(50) NOT NULL,
  `createdatePRESS` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedatePRESS` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_press`
--

INSERT INTO `nyat_press` (`idPRESS`, `titlePRESS`, `descPRESS`, `bestPRESS`, `sourcePRESS`, `createdatePRESS`, `updatedatePRESS`) VALUES
(1, 'Nyat Kadir Menolak Tawaran Kerjasama Partai Gerindra', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 1, 'Koran Sindo', '2017-12-06 02:19:36', '2017-12-06 02:20:57');

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
('07eed0qqt4ujpht0r8a70bnb37va0vv4', '::1', 1512523341, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532333334313b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('1rf2k19h9t9r78dm76jldo3dgsr6jorb', '::1', 1512089754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038393735343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('2bfthochpf504gtefq1bvjtd2v914196', '::1', 1512723737, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732333733373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('2egudl2a888nd6aqflo2mlim6tdj4vl6', '::1', 1512723046, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732333034363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('2p9uqs6cud8qkjioq96ndft1d67hvlqm', '::1', 1512013618, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031333631383b),
('3494q5fv51f4qfonla9vkodoqa8pqmm7', '::1', 1511877206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837373230363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a2257656c636f6d6521223b733a343a2274657874223b733a33393a2248616c6c6f2c2053656c616d617420646174616e672061646d696e4061646d696e2e636f6d2021223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('3kc0kagnikjaq50mvcrbjn8jb2btg08h', '::1', 1511919149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931393134393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e676861707573616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('3mrao3o1j2frlh5iom795mbv1le3utp9', '::1', 1512438781, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323433383738313b),
('43ag66nfpi82bgqd2el30j62fsbdf4lj', '::1', 1512573121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323537333132313b),
('4ktm4s0af9qto8elmmo68oc99e26q1np', '::1', 1511918387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931383338373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('4qk8cupq34rshtl5f7m2pqsj7iuleik0', '::1', 1512486287, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438363238373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('51sl1imhcb0c66t7vmqbtg7463h7bdcl', '::1', 1512485237, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438353233373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('52edhtv14dpsufdjamklreljd30outa7', '::1', 1512724079, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732343037393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('55k4qo98um75jt09j1tuhmi4oa1vde6j', '::1', 1512483155, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438333135353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('578956m61il87g9l2uinhgpjeu5lf3u5', '::1', 1512653540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323635333534303b),
('5cfhdgvgqnifdicufn605r5ta9dfbj82', '::1', 1512723710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732333731303b),
('6btpin31q19c77fdgfffel2oheo8hp77', '::1', 1512087953, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038373935333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a353a224d6172636f223b6c6f67676564696e7c623a313b696441444d494e7c733a313a2231223b69735f61646d696e7c733a313a2231223b),
('6d9nb0s5jatabcdqpoov8jnshpcmif0c', '::1', 1511920149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932303134393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31303a2250657268617469616e2c223b733a343a2274657874223b733a34363a2253696c616b616e206e6f6e2d616b7469666b616e20706f6c6c696e672079616e67206d6173696820616b7469662e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7flpb4k44tp4bv769d57jqa1h1jr6e5e', '::1', 1512572390, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323537323339303b6d6573736167657c613a333a7b733a353a227469746c65223b733a373a2253756b73657321223b733a353a227374796c65223b733a31303a2269732d73756363657373223b733a343a2274657874223b733a39313a224b616d6920737564616820626572686173696c206d656e676972696d2074617574616e207265736574206b6174612073616e6469206c6577617420656d61696c3c62723e73696c616b616e2063656b20656d61696c206b616d7521223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7k39gdun7pn955g4n8jglfb1q11pc3eq', '::1', 1512091750, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039313735303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('7ob8qc2simc9qoacgfrtp5vvkck3k608', '::1', 1512521186, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532313138363b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('7q3l6b3tbstedd8hp3aibe2gmo48f08o', '::1', 1512079480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323037393438303b6d6573736167655f63686f6963657c613a323a7b733a353a227469746c65223b733a363a224572726f7221223b733a343a2274657874223b733a3134383a224d6161662c20616e646120646968617275736b616e20756e74756b206c6f67696e207465726c6562696820646168756c752c2061746175206a696b6120616e64612062656c756d206d656e6461667461722073696c616b616e206d656e756a75206c696e6b20696e692022687474703a2f2f6c6f63616c686f73742f636f646577656c6c2f6e7961746b616469722f7573657222223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f63686f696365223b733a333a226f6c64223b7d),
('7tik9oo8e4hribt113fhamiavbcc7bvp', '::1', 1511880753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838303735333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('7ua6m0oq12ma9ehdvbclrpesqa0m9us7', '::1', 1511877678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837373637383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('8s4vqgbd7us98pvaepvm2b0lcom2l9op', '::1', 1512350870, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323335303837303b),
('985cp2e5nvuhub9r9to3kqbvlls89umn', '::1', 1512092435, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039323433353b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('995k8ch1vsaha17lh9o2ilfp07o06q59', '::1', 1512090452, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039303435323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('9bjoht19dgslqpbu1nk8v9pp40koki1e', '::1', 1511960639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313936303633393b),
('9lfdjrj4n7e0fp98b4mhbpb9jv8qg7t2', '::1', 1512524002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532343030323b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('9nqv8ifhtptepb5g901vgsko2gj8l484', '::1', 1512724950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732343933313b),
('9p3stfo53fk9n00e3qe24r5qu5aut0bv', '::1', 1512724451, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732343435313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('9rbrpla9g50fq1a3da6btopl91pbnfcd', '::1', 1512521939, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532313933393b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('9s7uf1ui9lb8bm7455va8e4f4e11l6ph', '::1', 1512007902, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323030373930323b),
('9t4s1j6msoortgc9r3g7tjfuueuk0h9o', '::1', 1512547584, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323534373538343b),
('a6lq12o6b4erknesngrsl8r2rtgpu96a', '::1', 1512015085, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031353038353b),
('a91323ogqb7idb65a95k1c0c3t7ebalq', '::1', 1511919703, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931393730333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a393a22426572686173696c2c223b733a343a2274657874223b733a33333a2250657275626168616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('agfamuguimqdur3gultron6s2ml9esue', '::1', 1512092892, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039323730363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a353a224d6172636f223b6c6f67676564696e7c623a313b696441444d494e7c733a313a2231223b69735f61646d696e7c733a313a2231223b),
('ah9goeavnc8ua9nj0ndqm7diq6sqflqi', '::1', 1512724640, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732343435313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('aj8icigrt4lc5hab7c7ap98h5pvucuuq', '::1', 1511877984, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837373938343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ajossbieadvg1gj1v5s17dq6dhnh5mo1', '::1', 1511925236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932353233363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31303a2250657268617469616e2c223b733a343a2274657874223b733a3133333a2253696c616b616e206e6f6e2d616b7469666b616e20706f6c6c696e67203c623e282242616761696d616e612070656e64617061746d752074656e74616e67206b656a616469616e205365747961204e6f76616e746f2064692052756d61682053616b6974204a616b617274613f22293c2f623e2079616e67206d6173696820616b7469662e223b733a343a2274797065223b733a363a2264616e676572223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('apto8jtq03f0vgvqfd7hfn1s3b48pfug', '::1', 1512478420, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323437383432303b),
('b15254vh6mqhjmtkrfq9ttpdqvvoh43i', '::1', 1512535481, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323533353337303b),
('b4p8qn4s1aeflc6oam0ukau9it2nlfnu', '::1', 1511959687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313935393638373b),
('b6aepmjc5r2htufthbmq1k0fp4gvar5i', '::1', 1512655747, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323635353731363b6d6573736167655f61737069726173697c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a353a227374796c65223b733a31303a2269732d73756363657373223b733a343a2274657874223b733a3132333a22417370697261736920416e64612074656c6168206b616d692072656b616d2e2044616e20746572696d61206b617369682073756461682062657270617274697369706173692e204b616d692062657268617261702064617061742062657274656d7520416e6461206469206c61696e206b6573656d706174616e2e223b7d5f5f63695f766172737c613a313a7b733a31363a226d6573736167655f6173706972617369223b733a333a226f6c64223b7d),
('b9j7737j20vb69qtlhgs6n3srp7bkgde', '::1', 1511879670, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837393637303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('bb955kf9grih5a28eor09r36mfcn50o3', '::1', 1512572763, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323537323736333b),
('brqj7ad34ssmjva6eccj8u87ss41l9v3', '::1', 1512522544, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532323534343b),
('c4enon7980phrmk7eirej62pp6mk4li7', '::1', 1512374696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323337343439393b),
('c952cg3lneb53mlul3f6rdsnrnlv7fh0', '::1', 1511881084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838313038343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ca1vagdnkp9m4cftivjk8tcg1iam65m0', '::1', 1511878505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837383530353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ce6i23o39sgkj4uqdctd5tjvfkf223la', '::1', 1511918761, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313931383736313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('chk0evia010emgfbjniot1eo80sk246v', '::1', 1512485647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438353634373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ckq7jgjdflb4b17lir0c1fcbmbusm6ed', '::1', 1512651015, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323635313031353b),
('cqe2m3ur3e2s03vjlfkepi2nime3e7eu', '::1', 1512486345, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438363239343b),
('dcmvqo0n8cs8i2nc4p4hrdrrf9l9r51j', '::1', 1512707612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323730373534313b),
('dn2kekugl4jfvqi9ibiq65s7hjosovrl', '::1', 1511924281, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932343238313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31303a2250657268617469616e2c223b733a343a2274657874223b733a34363a2253696c616b616e206e6f6e2d616b7469666b616e20706f6c6c696e672079616e67206d6173696820616b7469662e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('dnb02ghh7j22rq7tp0erdibmko7i9omv', '::1', 1512353507, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323335333330313b),
('ejrj18f74bd5a4nto1r0uimmoh2uqet7', '::1', 1512523692, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532333639323b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('ev4rvc7rb1vvji6of6l0tjc97nokdndo', '::1', 1512016937, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031363933373b),
('f5g6i2sjskblt494obbsgi312agp9ade', '::1', 1512522265, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532323236353b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('fopff66hj6qf663nk345a1kv89aq0t69', '::1', 1512527663, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532373636333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a353a224d6172636f223b6c6f67676564696e7c623a313b696441444d494e7c733a313a2231223b69735f61646d696e7c733a313a2231223b),
('g9s1m8a2et0jhlnsj6ivv2t1k54d86aq', '::1', 1512482849, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438323834393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('h6gg92ej1lo8127hugju2lubi3rjpmr9', '::1', 1512698924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323639383932343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('hfjfc77kcn5qlbkoteu65v9c49a6bqpu', '::1', 1511881220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838313038343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('hjvi54o4gifqqkqjqr2hk92qj774hl5s', '::1', 1512654050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323635343035303b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('hp7h8sifv5bev96ljmt6qjvmddht40es', '::1', 1512655448, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323635353434383b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b6d6573736167655f61737069726173697c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a36333a224d61616620616461206b6573616c6168616e2c206d6f686f6e20756c616e676920696e707574616e20666f726d207265676973747261736920616e6461212e223b7d5f5f63695f766172737c613a313a7b733a31363a226d6573736167655f6173706972617369223b733a333a226f6c64223b7d),
('hsdjnas0beva0hh16npu47prtj3ote3n', '::1', 1511960955, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313936303935353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('htssdge5fi3mhgm0g3753mf5qvbk9rvn', '::1', 1512484326, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438343332363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('i0lptp72bvjse0v70u1oap9ieadlmvdb', '::1', 1512011269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031313236393b6d6573736167657c613a313a7b733a343a2274657874223b733a36333a224d61616620616461206b6573616c6168616e2c206d6f686f6e20756c616e676920696e707574616e20666f726d207265676973747261736920616e6461212e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('io1254n62dmbd20hb4gim14ab8l1odn5', '::1', 1512569129, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323536393132393b),
('je05arse1mo02paovmduerfcurvg1cmt', '::1', 1512524335, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532343333353b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('jp6hb5qpalm77hf36thekhs8bloud0di', '::1', 1512013973, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031333937333b),
('k203iebtvrt2fjp6rk92t5bgjq3s2mkt', '::1', 1512526612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532363631323b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('kanfff3dqmd7fe3239hjvc74ic34dii1', '::1', 1512527898, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532373636333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a353a224d6172636f223b6c6f67676564696e7c623a313b696441444d494e7c733a313a2231223b69735f61646d696e7c733a313a2231223b),
('kod1cnu5i9iogegct3rj0iplq0vt8qsv', '::1', 1512567760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323536373736303b),
('kr9p111hjmq2c47hsbj8rmabaco4jso8', '::1', 1512012906, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031323930363b),
('ljgem7ip78546b5f4jq2hmm7ih4b2vc8', '::1', 1512485950, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438353935303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('m00okn462d0vs9vp06pievuubaf71pes', '::1', 1512080259, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038303235393b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b6d6573736167655f63686f6963657c613a323a7b733a353a227469746c65223b733a31333a22546572696d61204b6173696821223b733a343a2274657874223b733a3132303a224f70696e6920416e64612074656c6168206b616d692072656b616d2e2044616e20746572696d61206b617369682073756461682062657270617274697369706173692e204b616d692062657268617261702064617061742062657274656d7520416e6461206469206c61696e206b6573656d706174616e2e223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f63686f696365223b733a333a226f6c64223b7d),
('n3j471jovj3cf3bcmmvhuo9rsn6faf11', '::1', 1512016564, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031363536343b),
('n3lhv28ar93blnerejmiuohub96lo0mb', '::1', 1512079126, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323037393132363b6d6573736167655f63686f6963657c613a323a7b733a353a227469746c65223b733a363a224572726f7221223b733a343a2274657874223b733a3135313a224d6161662c20616e646120646968617275736b616e20756e74756b206c6f67696e207465726c6562696820646168756c752c2061746175206a696b6120616e646120696e67696e206d656e6461667461722073696c616b616e206d656e756a75206b65206c696e6b20696e692022687474703a2f2f6c6f63616c686f73742f636f646577656c6c2f6e7961746b616469722f7573657222223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f63686f696365223b733a333a226f6c64223b7d),
('n8ta8hb4mfvr37k81ss9k1d5io11uflq', '::1', 1512082041, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038323034313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a353a224d6172636f223b6c6f67676564696e7c623a313b696441444d494e7c733a313a2231223b69735f61646d696e7c733a313a2231223b),
('nfgjem8epk8k0s7hrc8l4sia33ik7qof', '::1', 1512722743, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732323734333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('nh35ms09aeirrop87vmvv0b39rk9oicc', '::1', 1512013238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031333233383b),
('nih5lthhd9dp802d145eqrpasu8845r0', '::1', 1512089166, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038393136363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('nmc5hc3es7si28hhk8n9thio4ofhm83r', '::1', 1512480250, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438303235303b),
('o3af15nhrb100g692iulu4m94pacph0i', '::1', 1511878824, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837383832343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('p85ff7rbj502j6i1q5mqu0doqeq0ad5f', '::1', 1512480578, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438303537383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33373a2250656e676861707573616e2047616d62617220626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('q2qfc8nhq8rthovthkk00blvgfkhgug6', '::1', 1512011886, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031313838363b6d6573736167657c613a313a7b733a343a2274657874223b733a34353a224d6161662c20616b756e20616e646120746964616b207465726461667461722064692064617461206b616d692e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('q7t6nkke0vlp4b0l2r19mj848j8bo562', '::1', 1512353301, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323335333330313b),
('qkrp1h0t5hu5m21kn0pndjem0m6fl5rr', '::1', 1512526968, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532363936383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a353a224d6172636f223b6c6f67676564696e7c623a313b696441444d494e7c733a313a2231223b69735f61646d696e7c733a313a2231223b),
('qq17e5v7pa6vh55m3rk6qv5i05rkpa67', '::1', 1512090812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039303831323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('r77hbep0j6d7tin3jeu7seg3o3tl6uh3', '::1', 1512723718, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732333731303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ra1g3lbo2os6uu7ja4g54prvfh1uhpkf', '::1', 1512522583, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323532323538333b),
('rcfk6b7pttf4atugj9c189oiropic26e', '::1', 1512079830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323037393833303b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('rktjl63q7649qoki20i14q9v8bc8np4f', '::1', 1512092084, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039323038343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ruui7a6uleaack198mt90461se6bstus', '::1', 1512573065, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323537333036353b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a225761726e696e6721223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a39313a224d6161662c204d6f686f6e20756c616e676920696e707574616e20666f726d2070657275626168616e206b6174612073616e646920616e6461213c62723e4d696e696d616c2038204b6172616b746572206b6174612073616e6469223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('s1kg251k3o8ld6olf8jcutc1l0i2549a', '::1', 1512698924, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323639383932343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('s9cmqsdqn9ra4unfql93brefvdtmshim', '::1', 1512088819, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038383831393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('sele1oiij35tuons968is3m7h5ihh34r', '::1', 1512080676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323038303637363b456d61696c7c733a32303a226d616769637761726d7340676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('sf23hfqbue282pqv94dr158kkal6if6l', '::1', 1512016967, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323031363933373b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a3132313a224d6161662c20616b756e20616e646120746964616b20616b7469662c2073696c616b616e2063656b20656d61696c20616e646120756e74756b206b6f6e6669726d6173692c206174617520687562756e6769206b616d6920646920666f726d20636f6e746163742075732e20546572696d61206b6173696821223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('sklqlnp7j1lj9mrlsergpr3aake0ne9h', '::1', 1511879993, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837393939333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('sqkcs6gokpp611oivdd0jjamdog3rmsr', '::1', 1512090139, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323039303133393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('t06msjm332rmmmevfb329ed09obf26l1', '::1', 1512482245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438323234353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('tq396d551ng5kbrbh4lbv1ejo90sef95', '::1', 1511879328, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313837393332383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('u402pdqfma22l42arc8kcee698tmb927', '::1', 1511925541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932353534313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('u70jg38h99abagllb6igq3l8adjfd350', '::1', 1512349111, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323334393131313b),
('uarrbkg8hjis4icj6nl0k9rnafdcrqqp', '::1', 1512723358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732333335383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('utsatujd9kpb253p3ifmfqhrmcbka0f0', '::1', 1512722370, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323732323337303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('uu69qtt3gkik0r8rp46cskuf8ubfhn9t', '::1', 1511925628, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313932353534313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('vd0m5d677r9vngd22794unm24rgnn5g7', '::1', 1512572060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323537323036303b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a353a227374796c65223b733a31303a2269732d73756363657373223b733a343a2274657874223b733a39333a22546572696d61206b61736968207375646168206d656e6461667461722c2073696c616b616e2063656b206b6f74616b206d6173756b206174617570756e206b6f74616b207370616d20616e6461212e20546572696d61204b6173696821223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('vhfv4cj2sleuesu0mv8hs659la33prbb', '::1', 1511880417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531313838303431373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('vkdhvfm2eoigvp7dbr2q51dno8ge8ucf', '::1', 1512481925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531323438313932353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33353a2250656e79696d70616e616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d);

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
(1, 'Andhana Utama', 'magicwarms@gmail.com', '606fa7c0d58ad31c03e0f9bbbd1b4e4748f65d0eda3c5f1fb39f47db0a641d3176bc2d0942f548b432cd0bad4445f0b1209aac2cb015ab0c0fb4dc8c7bd62854', 'Tiban', 'Batam', '29425', 1, 23, 1, '2017-12-07 12:33:05', '2017-12-07 12:41:19');

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
(1, 'Marco', 'admin@admin.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', '2017-09-26 10:04:09', '2017-12-08 16:01:54', 1, 1),
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
(11, '::1', '2017-11-30'),
(12, '::1', '2017-12-01'),
(13, '::1', '2017-12-04'),
(14, '::1', '2017-12-05'),
(15, '::1', '2017-12-06'),
(16, '::1', '2017-12-07'),
(17, '::1', '2017-12-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nyat_about`
--
ALTER TABLE `nyat_about`
  ADD PRIMARY KEY (`idABOUT`);

--
-- Indexes for table `nyat_article`
--
ALTER TABLE `nyat_article`
  ADD PRIMARY KEY (`idARTICLE`);

--
-- Indexes for table `nyat_aspirasi`
--
ALTER TABLE `nyat_aspirasi`
  ADD PRIMARY KEY (`idASPIRASI`);

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
-- Indexes for table `nyat_flyer`
--
ALTER TABLE `nyat_flyer`
  ADD PRIMARY KEY (`idFLYER`);

--
-- Indexes for table `nyat_gallery`
--
ALTER TABLE `nyat_gallery`
  ADD PRIMARY KEY (`idGALLERY`);

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
-- Indexes for table `nyat_press`
--
ALTER TABLE `nyat_press`
  ADD PRIMARY KEY (`idPRESS`);

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
-- AUTO_INCREMENT for table `nyat_article`
--
ALTER TABLE `nyat_article`
  MODIFY `idARTICLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nyat_aspirasi`
--
ALTER TABLE `nyat_aspirasi`
  MODIFY `idASPIRASI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nyat_attempts`
--
ALTER TABLE `nyat_attempts`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nyat_choice_polling`
--
ALTER TABLE `nyat_choice_polling`
  MODIFY `idCHOICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nyat_flyer`
--
ALTER TABLE `nyat_flyer`
  MODIFY `idFLYER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_gallery`
--
ALTER TABLE `nyat_gallery`
  MODIFY `idGALLERY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nyat_intro_news`
--
ALTER TABLE `nyat_intro_news`
  MODIFY `idINTRONEWS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_menus_admin`
--
ALTER TABLE `nyat_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
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
-- AUTO_INCREMENT for table `nyat_press`
--
ALTER TABLE `nyat_press`
  MODIFY `idPRESS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
