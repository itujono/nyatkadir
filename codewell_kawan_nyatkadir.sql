-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2018 at 01:59 AM
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
  `idCAT` int(11) DEFAULT NULL,
  `titleARTICLE` varchar(90) NOT NULL,
  `descARTICLE` text NOT NULL,
  `bestARTICLE` int(1) NOT NULL,
  `createdateARTICLE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateARTICLE` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_article`
--

INSERT INTO `nyat_article` (`idARTICLE`, `idCAT`, `titleARTICLE`, `descARTICLE`, `bestARTICLE`, `createdateARTICLE`, `updatedateARTICLE`) VALUES
(1, 1, 'Ada 2 jenis manusia yang ada di dunia ini. Kamu yang mana?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 1, '2017-11-14 14:46:19', '2017-12-17 03:37:54'),
(2, 1, 'Ke mana kamu mau jika kelak akan terjadi perselisihan?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 1, '2017-11-14 14:46:32', '2017-12-17 03:58:20'),
(3, 5, 'Bagaimana jika burung pelikan tak mampu berdiri satu kaki?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.&nbsp;</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 0, '2017-11-14 14:46:40', '2017-12-17 03:40:22'),
(4, 3, 'Sudahkah kamu mengamalkan Pancasila di kehidupan TK mu dulu?', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 0, '2017-11-14 14:46:48', '2017-12-17 03:40:35');

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
(2, 'Mahrani mahir', 'magicwarms@gmail.com', 67, 'Begitu kah?', 'Apapun itu, pasti akan kami dengar dengan seksama.', 0, '2017-12-07 14:09:06', '0000-00-00 00:00:00'),
(3, 'Andhana Utama', 'mamatjualtomat@gmail.com', 34, 'testing aje wak!', 'Testing yaaa broooooooo', 1, '2017-12-20 04:03:15', '0000-00-00 00:00:00');

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
(8, 1, '1512653545'),
(9, 1, '1512725404'),
(10, 2, '1513483285'),
(11, 2, '1513511096'),
(12, 1, '1513517335'),
(13, 1, '1513606520'),
(14, 1, '1513931370'),
(15, 8, '1513935554'),
(16, 1, '1513956203'),
(17, 1, '1513956430'),
(18, 9, '1513956447'),
(19, 1, '1513956495'),
(20, 9, '1513993340'),
(21, 9, '1514385429'),
(22, 1, '1514422334'),
(23, 1, '1514695463');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_attempts_admin`
--

CREATE TABLE `nyat_attempts_admin` (
  `idATTEMPTS` int(11) NOT NULL,
  `idADMIN` int(4) NOT NULL,
  `timeATTEMPTS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_attempts_admin`
--

INSERT INTO `nyat_attempts_admin` (`idATTEMPTS`, `idADMIN`, `timeATTEMPTS`) VALUES
(1, 1, '1511839878'),
(2, 1, '1511839894'),
(3, 1, '1511839904'),
(6, 1, '1511839996'),
(7, 1, '1512016955'),
(8, 1, '1512653545'),
(9, 1, '1512725404'),
(10, 2, '1513483285'),
(11, 2, '1513511096'),
(12, 1, '1513517335'),
(13, 1, '1513606520'),
(14, 1, '1513931370'),
(15, 8, '1513935554'),
(16, 1, '1513956203'),
(17, 1, '1513956430'),
(18, 9, '1513956447'),
(19, 1, '1513956495'),
(20, 9, '1513993340'),
(21, 9, '1514385429'),
(22, 1, '1514422334');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_category_article`
--

CREATE TABLE `nyat_category_article` (
  `idCAT` int(11) NOT NULL,
  `nameCAT` varchar(120) NOT NULL,
  `createdateCAT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateCAT` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_category_article`
--

INSERT INTO `nyat_category_article` (`idCAT`, `nameCAT`, `createdateCAT`, `updatedateCAT`) VALUES
(1, 'Infografis', '2017-12-17 03:31:04', '0000-00-00 00:00:00'),
(3, 'Dalam Negeri', '2017-12-17 03:31:33', '0000-00-00 00:00:00'),
(5, 'Politik', '2017-12-17 03:31:59', '0000-00-00 00:00:00');

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
(2, 3, 7, 'Kapan?', 1, '2017-12-29 02:53:17', '2017-12-29 02:53:42'),
(3, 3, 9, 'Gak tahu', 1, '2017-12-29 02:53:57', '0000-00-00 00:00:00'),
(4, 3, 1, 'Gak tahu', 1, '2017-12-31 04:47:31', '0000-00-00 00:00:00');

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
(1, 'Flyer test Batam pos', '2017-12-08', '2017-12-10', '2017-12-08 09:16:47', '2017-12-17 06:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_gallery`
--

CREATE TABLE `nyat_gallery` (
  `idGALLERY` int(11) NOT NULL,
  `titleGALLERY` varchar(80) NOT NULL,
  `categoryGALLERY` int(1) NOT NULL COMMENT '1  foto 2 video',
  `linkvideoGALLERY` varchar(125) NOT NULL,
  `ishomevideoGALLERY` int(1) NOT NULL,
  `createdateGALLERY` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateGALLERY` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_gallery`
--

INSERT INTO `nyat_gallery` (`idGALLERY`, `titleGALLERY`, `categoryGALLERY`, `linkvideoGALLERY`, `ishomevideoGALLERY`, `createdateGALLERY`, `updatedateGALLERY`) VALUES
(6, 'Nyat Kadir gelar buka bersama dengan anak jalanan', 2, 'https://www.youtube.com/watch?v=zXXJfZ8WrCA', 0, '2017-11-20 06:40:58', '2017-12-21 09:20:59'),
(8, 'Untukmu sayang - Nyat kadir', 2, 'https://www.youtube.com/watch?v=gwBXFC2GKto', 1, '2017-11-20 07:57:33', '2017-12-21 09:21:25'),
(9, 'Nyat kadir', 1, '', 0, '2017-12-29 01:23:45', '0000-00-00 00:00:00'),
(10, 'Nyat kadir Collection', 1, '', 0, '2017-12-30 03:25:42', '0000-00-00 00:00:00');

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
  `statusMENU` int(11) NOT NULL DEFAULT '1',
  `createdateMENU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nyat_menus_admin`
--

INSERT INTO `nyat_menus_admin` (`idMENU`, `namaMENU`, `iconMENU`, `functionMENU`, `parentMENU`, `statusMENU`, `createdateMENU`) VALUES
(1, 'Dashboard', 'dashboard', 'dashboard', 0, 1, '2017-10-02 09:05:04'),
(2, 'Beranda', 'dashboard', 'index_dashboard', 1, 1, '2017-10-02 13:24:50'),
(3, 'Pengguna', 'verified_user', 'user', 0, 1, '2017-10-25 12:37:33'),
(4, 'Daftar Pengguna', 'verified_user', 'index_user', 3, 1, '2017-10-25 12:37:55'),
(5, 'Slider', 'slideshow', 'slider', 0, 1, '2017-11-13 04:15:55'),
(6, 'Daftar Slider', 'slideshow', 'index_slider', 5, 1, '2017-11-13 04:16:04'),
(7, 'Tentang', 'textsms', 'about', 0, 1, '2017-11-13 13:38:40'),
(8, 'Daftar Tentang', 'textsms', 'index_about', 7, 1, '2017-11-13 13:39:06'),
(9, 'Galeri', 'photo_library', 'gallery', 0, 1, '2017-11-14 13:55:25'),
(10, 'Daftar Galeri', 'photo_library', 'index_gallery', 9, 1, '2017-11-14 13:55:31'),
(11, 'Artikel', 'lightbulb_outline', 'article', 0, 1, '2017-11-14 14:44:43'),
(12, 'Daftar Artikel', 'lightbulb_outline', 'index_article', 11, 1, '2017-11-14 14:44:48'),
(13, 'Berita', 'question_answer', 'news', 0, 1, '2017-11-20 03:58:40'),
(14, 'Daftar Pembuka', 'question_answer', 'index_intro_news', 13, 1, '2017-11-20 03:59:08'),
(15, 'Daftar Berita', 'question_answer', 'index_news', 13, 1, '2017-11-20 04:30:36'),
(16, 'Polling', 'poll', 'polling', 0, 1, '2017-11-28 13:52:58'),
(17, 'Daftar Polling', 'poll', 'index_polling', 16, 1, '2017-11-28 13:53:03'),
(18, 'Input Polling', 'poll', 'form_polling', 16, 1, '2017-11-28 14:18:36'),
(19, 'Mitra Kerja', 'assignment', 'mitra', 0, 1, '2017-11-29 13:03:30'),
(20, 'Daftar Mitra Kerja', 'assignment', 'index_mitra', 19, 1, '2017-11-29 13:03:35'),
(23, 'Liputan Media', 'mode_comment', 'press', 0, 1, '2017-12-06 02:16:23'),
(24, 'Daftar Liputan', 'mode_comment', 'index_press', 23, 1, '2017-12-06 02:16:27'),
(25, 'Aspirasi', 'feedback', 'aspirasi', 0, 1, '2017-12-08 01:58:45'),
(26, 'Daftar Aspirasi', 'feedback', 'index_aspirasi', 25, 1, '2017-12-08 01:58:55'),
(27, 'Flyer', 'add_alert', 'flyer', 0, 1, '2017-12-08 08:31:04'),
(28, 'Daftar Flyer', 'add_alert', 'index_flyer', 27, 1, '2017-12-08 08:31:10'),
(29, 'Member', 'verified_user', 'users', 0, 1, '2017-12-12 01:07:19'),
(30, 'Daftar Member', 'verified_user', 'index_users', 29, 1, '2017-12-12 01:07:22'),
(31, 'User Admin', 'supervisor_account', 'user', 0, 1, '2017-12-17 01:38:33'),
(32, 'Daftar Admin', 'supervisor_account', 'index_user_admin', 31, 1, '2017-12-17 01:38:34'),
(33, 'Menu', 'loyalty', 'menu_admin', 0, 1, '2017-12-17 02:02:37'),
(34, 'Daftar Menu', 'loyalty', 'index_menu', 33, 1, '2017-12-17 02:02:47'),
(35, 'Kategori', 'folder_special', 'category_article', 0, 1, '2017-12-17 03:27:59'),
(36, 'Daftar Kategori', 'folder_special', 'index_category_article', 35, 1, '2017-12-17 03:29:00'),
(37, 'Sosial Media', 'whatshot', 'social', 0, 1, '2017-12-21 08:04:05'),
(38, 'Daftar Social Media', 'whatshot', 'index_social', 37, 1, '2017-12-21 08:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_menus_admin_join_users_admin`
--

CREATE TABLE `nyat_menus_admin_join_users_admin` (
  `idMENUSJOINADMIN` int(11) NOT NULL,
  `idADMIN` int(11) NOT NULL,
  `idMENU` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_menus_admin_join_users_admin`
--

INSERT INTO `nyat_menus_admin_join_users_admin` (`idMENUSJOINADMIN`, `idADMIN`, `idMENU`) VALUES
(29, 1, 31),
(30, 1, 32),
(33, 2, 1),
(34, 2, 2),
(37, 1, 1),
(38, 1, 2),
(39, 1, 3),
(40, 1, 4),
(41, 1, 5),
(42, 1, 6),
(43, 1, 7),
(44, 1, 8),
(45, 1, 9),
(46, 1, 10),
(47, 1, 11),
(48, 1, 12),
(49, 1, 13),
(50, 1, 14),
(51, 1, 15),
(52, 1, 16),
(53, 1, 17),
(54, 1, 18),
(55, 1, 19),
(56, 1, 20),
(57, 1, 23),
(58, 1, 24),
(59, 1, 25),
(60, 1, 26),
(61, 1, 27),
(62, 1, 28),
(63, 1, 29),
(64, 1, 30),
(65, 1, 33),
(66, 1, 34),
(67, 1, 35),
(68, 1, 36),
(69, 2, 11),
(70, 2, 12),
(71, 2, 35),
(72, 2, 36),
(73, 1, 37),
(74, 1, 38);

-- --------------------------------------------------------

--
-- Table structure for table `nyat_mitra_kerja`
--

CREATE TABLE `nyat_mitra_kerja` (
  `idMITRA` int(11) NOT NULL,
  `nameMITRA` varchar(80) NOT NULL,
  `linkMITRA` varchar(125) NOT NULL,
  `createdateMITRA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateMITRA` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_mitra_kerja`
--

INSERT INTO `nyat_mitra_kerja` (`idMITRA`, `nameMITRA`, `linkMITRA`, `createdateMITRA`, `updatedateMITRA`) VALUES
(1, 'PT. Sentosa Abadi', 'http://www.google.com', '2017-11-29 13:05:35', '2017-12-12 01:48:53'),
(2, 'PT. Alfatron Batam', '', '2017-11-29 13:05:51', '0000-00-00 00:00:00'),
(3, 'PT. Kek Pisang Villa Bambu', '', '2017-11-29 13:06:18', '0000-00-00 00:00:00'),
(4, 'PT. Goindo Me', '', '2017-11-29 13:06:33', '2017-11-29 13:07:10'),
(5, 'PT. Sabar Subur', '', '2017-11-29 13:06:47', '0000-00-00 00:00:00');

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
(1, 'Mengunjungi Panti Asuhan di Camp Vietnam Barelang', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 1, '2017-11-20 05:23:07', '2017-12-26 13:57:55'),
(2, 'Mengunjungi Panti Asuhan di Tanjung Riau', '<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;<br /><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p style=\"text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>', 0, '2017-12-26 13:56:36', '0000-00-00 00:00:00');

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
(3, 'Apakah dia memang anak dewa?', '[[\"Betul Sekali\"],[\"Gak tahu\"],[\"Emang elu yee\"],[\"Kapan?\"]]', 1, '2017-11-29 01:33:01', '2017-12-17 11:51:12'),
(4, 'Bagaimana pendapatmu tentang kejadian Setya Novanto di Rumah Sakit Jakarta?', '[[\"Biasa aja\"],[\"Nggak bisa lah\"],[\"Ya bisa tapi nggak boleh\"],[\"Sukak dia lah\"]]', 0, '2017-11-29 01:37:07', '2017-12-17 11:51:07');

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
('1gklrcsps123maip3te7ahbmr5e2hv7p', '::1', 1514704594, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730343539343b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b6d6573736167655f75706c6f61647c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33363a2253756b7365732120496d61676520416e646120626572686173696c20646973696d70616e223b733a353a227374796c65223b733a31303a2269732d73756363657373223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f75706c6f6164223b733a333a226f6c64223b7d),
('32p1rmcbd4rphk4lqcofhebqv8ssmdt2', '::1', 1514698194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639383139343b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('418068ks9qtg802tjcqeth3g6lpe7p3k', '::1', 1514705488, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730353233383b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b6d6573736167655f75706c6f61647c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33363a2253756b7365732120496d61676520416e646120626572686173696c20646973696d70616e223b733a353a227374796c65223b733a31303a2269732d73756363657373223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f75706c6f6164223b733a333a226f6c64223b7d),
('5h959uufseb1atsofsoto5loaok7iesm', '::1', 1514705238, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730353233383b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b6d6573736167655f75706c6f61647c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33363a2253756b7365732120496d61676520416e646120626572686173696c20646973696d70616e223b733a353a227374796c65223b733a31303a2269732d73756363657373223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f75706c6f6164223b733a333a226e6577223b7d),
('9jimnndoarpumkm6r4619kumv5mvkun3', '::1', 1514695406, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639353430363b),
('d1s6doeo6vs7823anamqrbp9n5k0tkmm', '::1', 1514702998, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730323939383b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b6d6573736167655f75706c6f61647c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33363a2253756b7365732120496d61676520416e646120626572686173696c20646973696d70616e223b733a353a227374796c65223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f75706c6f6164223b733a333a226f6c64223b7d),
('d399u8ftmk0rso8a5h0ogu7ti5i33n97', '::1', 1514695981, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639353938313b6d6573736167655f63686f6963657c613a323a7b733a353a227469746c65223b733a363a224572726f7221223b733a343a2274657874223b733a3134383a224d6161662c20616e646120646968617275736b616e20756e74756b206c6f67696e207465726c6562696820646168756c752c2061746175206a696b6120616e64612062656c756d206d656e6461667461722073696c616b616e206d656e756a75206c696e6b20696e692022687474703a2f2f6c6f63616c686f73742f636f646577656c6c2f6e7961746b616469722f7573657222223b7d5f5f63695f766172737c613a313a7b733a31343a226d6573736167655f63686f696365223b733a333a226f6c64223b7d),
('dcl8f5uhqn0gujum3fr3vhdhqv52i6r1', '::1', 1514695101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639353130313b),
('fpktfas30o7df3ct7g2fmhdu4pvmnu4c', '::1', 1514697662, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639373636323b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('hem9gunb154fjum7asj6gb91vp95gokh', '::1', 1514703366, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730333336363b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('ia74fvevpkotc86sjl8hpbdquae4kbt5', '::1', 1514703795, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730333739353b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('ig5ioeeqhof7b7ern5hebn4n4ensqgje', '::1', 1514701521, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730313532313b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('o8ao60p1v33edahfs7letf42vsksn748', '::1', 1514704096, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730343039363b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('p59f7787kokb50ole7ta1c7i28mdvfg0', '::1', 1514697137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639373133373b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('qcmo0hielii18tkaer32sk1bk14vh7ju', '::1', 1514694633, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343639343633333b),
('s3c24doejuetklqviqf3g1ohp1jch35g', '::1', 1514704897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343730343839373b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b);

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
(1, 'Selamat datang di Laman Resmi Nyat Kadir', '<p>Pemuda Melayu <br> berasaskan Indonesia <br> seutuhnya.</p>', '2017-11-13 04:47:20', '2017-12-18 09:43:48'),
(2, 'Testing Slider 2', '<p>Menjaga marwah <br> Melayu seutuhnya <br> sampai nanti</p>', '2017-12-08 09:27:41', '2017-12-18 09:43:26');

-- --------------------------------------------------------

--
-- Table structure for table `nyat_social_media`
--

CREATE TABLE `nyat_social_media` (
  `idSOCIAL` int(11) NOT NULL,
  `nameSOCIAL` varchar(80) NOT NULL,
  `linkSOCIAL` varchar(120) NOT NULL,
  `createdateSOCIAL` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateSOCIAL` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_social_media`
--

INSERT INTO `nyat_social_media` (`idSOCIAL`, `nameSOCIAL`, `linkSOCIAL`, `createdateSOCIAL`, `updatedateSOCIAL`) VALUES
(1, 'Facebook', 'http://www.google.com', '2017-12-21 08:58:32', '0000-00-00 00:00:00'),
(2, 'Twitter', 'http://www.google.com', '2017-12-21 08:58:44', '0000-00-00 00:00:00'),
(3, 'Instagram', 'http://www.google.com', '2017-12-21 08:58:55', '0000-00-00 00:00:00'),
(4, 'Google Plus', 'http://www.google.com', '2017-12-21 08:59:05', '0000-00-00 00:00:00');

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
  `teleUSER` varchar(16) NOT NULL,
  `statusUSER` int(1) NOT NULL,
  `createdateUSER` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedateUSER` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nyat_users`
--

INSERT INTO `nyat_users` (`idUSER`, `nameUSER`, `emailUSER`, `passwordUSER`, `addressUSER`, `cityUSER`, `zipUSER`, `genderUSER`, `ageUSER`, `teleUSER`, `statusUSER`, `createdateUSER`, `updatedateUSER`) VALUES
(1, 'Andhana Utama', 'mamatjualtomat@gmail.com', '606fa7c0d58ad31c03e0f9bbbd1b4e4748f65d0eda3c5f1fb39f47db0a641d3176bc2d0942f548b432cd0bad4445f0b1209aac2cb015ab0c0fb4dc8c7bd62854', 'Tiban aja wak', 'Batam', '29425', 1, 34, '082161735453', 1, '2017-12-17 13:23:27', '2017-12-17 13:28:46'),
(7, 'Testing', 'testing@email.com', '606fa7c0d58ad31c03e0f9bbbd1b4e4748f65d0eda3c5f1fb39f47db0a641d3176bc2d0942f548b432cd0bad4445f0b1209aac2cb015ab0c0fb4dc8c7bd62854', 'asfafsaf', 'agsasg', '36311', 1, 80, '8126709342', 0, '2017-12-21 07:14:22', '0000-00-00 00:00:00'),
(9, 'Andhana Utama', 'magicwarms@gmail.com', '606fa7c0d58ad31c03e0f9bbbd1b4e4748f65d0eda3c5f1fb39f47db0a641d3176bc2d0942f548b432cd0bad4445f0b1209aac2cb015ab0c0fb4dc8c7bd62854', 'asgasgsagasasgsagsagsagsag', 'Batam', '29425', 1, 56, '82161735453', 0, '2017-12-22 09:58:07', '0000-00-00 00:00:00');

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
(1, 'Marco', 'admin@admin.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', '2017-09-26 10:04:09', '2017-12-30 09:17:27', 1, 1),
(2, 'Vasco', 'admin1@admin.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', '2017-10-25 13:32:15', '2017-12-17 09:37:19', 1, 1);

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
(17, '::1', '2017-12-08'),
(18, '::1', '2017-12-11'),
(19, '::1', '2017-12-12'),
(20, '::1', '2017-12-15'),
(21, '::1', '2017-12-17'),
(22, '::1', '2017-12-18'),
(23, '::1', '2017-12-20'),
(24, '::1', '2017-12-21'),
(25, '::1', '2017-12-22'),
(26, '::1', '2017-12-23'),
(27, '::1', '2017-12-26'),
(28, '::1', '2017-12-27'),
(29, '::1', '2017-12-28'),
(30, '::1', '2017-12-29'),
(31, '::1', '2017-12-30'),
(32, '::1', '2017-12-31');

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
-- Indexes for table `nyat_attempts_admin`
--
ALTER TABLE `nyat_attempts_admin`
  ADD PRIMARY KEY (`idATTEMPTS`);

--
-- Indexes for table `nyat_category_article`
--
ALTER TABLE `nyat_category_article`
  ADD PRIMARY KEY (`idCAT`);

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
-- Indexes for table `nyat_menus_admin_join_users_admin`
--
ALTER TABLE `nyat_menus_admin_join_users_admin`
  ADD PRIMARY KEY (`idMENUSJOINADMIN`);

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
-- Indexes for table `nyat_social_media`
--
ALTER TABLE `nyat_social_media`
  ADD PRIMARY KEY (`idSOCIAL`);

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
  MODIFY `idASPIRASI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nyat_attempts`
--
ALTER TABLE `nyat_attempts`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `nyat_attempts_admin`
--
ALTER TABLE `nyat_attempts_admin`
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `nyat_category_article`
--
ALTER TABLE `nyat_category_article`
  MODIFY `idCAT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nyat_choice_polling`
--
ALTER TABLE `nyat_choice_polling`
  MODIFY `idCHOICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nyat_flyer`
--
ALTER TABLE `nyat_flyer`
  MODIFY `idFLYER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_gallery`
--
ALTER TABLE `nyat_gallery`
  MODIFY `idGALLERY` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `nyat_intro_news`
--
ALTER TABLE `nyat_intro_news`
  MODIFY `idINTRONEWS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nyat_menus_admin`
--
ALTER TABLE `nyat_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `nyat_menus_admin_join_users_admin`
--
ALTER TABLE `nyat_menus_admin_join_users_admin`
  MODIFY `idMENUSJOINADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `nyat_mitra_kerja`
--
ALTER TABLE `nyat_mitra_kerja`
  MODIFY `idMITRA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nyat_news`
--
ALTER TABLE `nyat_news`
  MODIFY `idNEWS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `idSLIDER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nyat_social_media`
--
ALTER TABLE `nyat_social_media`
  MODIFY `idSOCIAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nyat_users`
--
ALTER TABLE `nyat_users`
  MODIFY `idUSER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nyat_users_admin`
--
ALTER TABLE `nyat_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nyat_visitor`
--
ALTER TABLE `nyat_visitor`
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
