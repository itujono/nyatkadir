-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2017 at 04:53 PM
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
(22, 1, '1514422334');

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
(1, 3, 1, 'Betul Sekali', 1, '2017-12-20 02:51:26', '0000-00-00 00:00:00'),
(2, 3, 7, 'Kapan?', 1, '2017-12-29 02:53:17', '2017-12-29 02:53:42'),
(3, 3, 9, 'Gak tahu', 1, '2017-12-29 02:53:57', '0000-00-00 00:00:00');

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
('06apnp3mp88g2so9b8rd9dr1l85frhcq', '::1', 1513957688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333935373638383b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('06jjgfneol71f5p6fp3cmum37elvj1an', '::1', 1514521544, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343532313534343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('0eepo3otr5v1ga8lsgevoi26da6cgn5l', '::1', 1514516742, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531363734323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('19ptf7lsou1on8n2afm592727lste1rj', '::1', 1514382117, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338323131373b),
('278oplvnp4ntj3hv64d83fe8u3a426cp', '::1', 1513993785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333939333631353b),
('2jc5pdo8o6ushrq8fn4vh3k0u6ni215o', '::1', 1514518488, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531383438383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('3bv194b1kdv4fo53q5hiva7fu9c4k6q9', '::1', 1514518154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531383135343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('3jsbthn444e6idjh4gg7chija80rq449', '::1', 1514297398, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239373339383b),
('3p321nu3cbqompogldre5ffn80a7msg3', '::1', 1514424091, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432343039313b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('3uo8qls4kbehofs248qgv62njfvfoioe', '::1', 1514422639, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432323633393b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('4ff2k2fe4pe0g1us0k1l9pq39smkchsu', '::1', 1514385723, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338353732333b),
('5dvi5b1lv46t2j582jlfsb4mr4t2d7j5', '::1', 1514511806, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531313830363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('5ic4rt6a23ugfa2ap4hgqe6sopq5mtu0', '::1', 1514521170, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343532313137303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('6omgtebbvk0kofi5iufgm416sl0mjlvd', '::1', 1514603142, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630333134323b),
('6r2ms754ia3d44729vjmvfho492j5ea4', '::1', 1513993312, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333939333331323b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a33393a224d6161662c2073696c616b616e2063656b20696e707574616e20616e6461206b656d62616c692e223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('7665ij03086me53uj3bao23d93k7j9mt', '::1', 1514425608, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432353630383b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('77vsm9aa6klfl7v6pbb3atgqjkhk7cg5', '::1', 1514604347, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630343331343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('7d91f6rjdqssi09p1989jreibsqgmei0', '::1', 1514514533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531343533333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('7iaseod0vjtibks39sj2q7jlh9aqgst9', '::1', 1514426044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432353738303b),
('7ohv0h6if9nlgsm0nqurq531smibt9ct', '::1', 1514602833, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630323833333b),
('85cfdrbat0km5hm9juct8asv4okjt79f', '::1', 1514509934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343530393933343b),
('8rss0rarp216njp0lhd03be5lckg9adp', '::1', 1514514218, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531343231383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('93eef0m7jb2muutrp17oan7i76jsdm5i', '::1', 1514424494, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432343439343b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('9c5l1s6k7pe7frcc65i6ogvq1738gkug', '::1', 1514519821, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531393832313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('a1c4urper3p78og3p4fj4v79ff4te51q', '::1', 1514510254, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531303235343b),
('b86nodvaa454g5534bf61bqrjsm3vuqq', '::1', 1513957688, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333935373638383b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d6d6573736167657c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a34333a224d6161662c2073696c616b616e2063656b20696e707574616e20616e6461206b656d62616c69206c6f682e223b7d),
('bif39qghlnqak5dnn8ck73jirdmc7ukp', '::1', 1514381814, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338313831343b),
('cvrfis7i6nnodi1oa7hiu8q93r0kdogg', '::1', 1514646645, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343634363634353b),
('e3l9qu5cksvq6h3vk55lcs9j824bb239', '::1', 1514515739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531353733393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('eda6il8b0h7onnpsv46gfbqkgeu5j7cp', '::1', 1514296751, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239363735313b),
('esasa5i0i63592o3hqv6b6nm4uerbqee', '::1', 1514604314, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630343331343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33373a2250656e676861707573616e2047616d62617220626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('esejv1m9joamd1t5i0pop9sb6uqpsk9v', '::1', 1514511100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531313130303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('fmfovul52akbi2a2q6m7p8evopukqj9o', '::1', 1514518813, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531383831333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('gilcv3g96cusoqfr2e28b6nqtacdmva7', '::1', 1514516042, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531363034323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('gj8abul5hue0igv00fvedv0p03lmj5dr', '::1', 1514520373, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343532303337333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('h6fa3pjrlg76ub8jmtn856hts3o94hgq', '::1', 1514383953, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338333935333b),
('h7eom3sug15umi7dcrkpgtodj36e4kfb', '::1', 1514603754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630333735343b),
('hd5j75s53g54tdfe3omruhq19oo04r0n', '::1', 1514298687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239383638373b),
('hhi8dmas9r3qap12m98pnltlvn38jq28', '::1', 1514514880, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531343838303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('hlne6rp90tm491f8vr0lot1u2bm0efs1', '::1', 1514385583, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338353538333b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('hui8g8g1lumh2jd7ginr8312glvncsck', '::1', 1514296675, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239363532383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a363a2253756b736573223b733a343a2274657874223b733a33333a2250657275626168616e204461746120626572686173696c2064696c616b756b616e223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('iao457135iirlf3i4ct14dsr0reeolme', '::1', 1514383333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338333333333b),
('iat6fttj8q26il239lk06e7s9s0ud1l8', '::1', 1514517765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531373736353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ir74hpohtuit1h6apfpjqei2kf031t6r', '::1', 1514298080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239383038303b),
('j6155fsmla0kvs2qa1ogaqo4bpsr6crf', '::1', 1514604533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630343533333b),
('jk6t5j8mp589k1671qsr61d4i6gfah6i', '::1', 1513956487, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333935363438373b6d657373616765726567697374726174696f6e7c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a33393a224d6161662c2073696c616b616e2063656b20696e707574616e20616e6461206b656d62616c692e223b7d5f5f63695f766172737c613a313a7b733a31393a226d657373616765726567697374726174696f6e223b733a333a226f6c64223b7d),
('k8gidh8i0k8h5l8bah7fmnptgtq50vj2', '::1', 1514647384, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343634373338343b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('kb3j28scon5uhsb4pbfbtg8gmt9bm0nc', '::1', 1514517054, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531373035343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('lnm9b5oubj91oftpo3hgvc8esmrs941n', '::1', 1514604533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630343533333b),
('lvm37usi7pg0c7n9i7m3clvf3ig97aaj', '::1', 1514384256, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338343235363b),
('mf5evnmtubdooqv714opmfts6rpo1kmh', '::1', 1514515285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531353238353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('mk14649val5jpvdje6uh3to780jgn4kb', '::1', 1514601739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630313733393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('nij41sq9fkmo7dcqk9hb84lmg66k50i3', '::1', 1514600245, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630303234353b),
('nnbjdqg8oi54ah2u66g862hpgnhl3iql', '::1', 1514423217, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432333231373b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('ns5iatdtj95vjf5obakmcuql8ast3kv5', '::1', 1514425187, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432353138373b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('on0nal00t81hhadho6jn3cpma83fhgu0', '::1', 1514648389, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343634383239313b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('p6v53lfanvt0gfejid5thftpc41ulg9e', '::1', 1514513667, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531333636373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('paaoejr53qpkk0mqr88s3ovdupit8u01', '::1', 1514385269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338353236393b),
('piv3ml8p6igtl9g6eoc97flcr4qsrfmi', '::1', 1514512516, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531323531363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('qh99oqpchbjkobp03hmtlljptqa6qcsc', '::1', 1514647881, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343634373838313b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('qmr83tt1tmrfdv65kpp8qrtmctqi9g3u', '::1', 1514423710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432333731303b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('qogec9k7h4i2667e1elrmg52c6q5o4pe', '::1', 1514519486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531393438363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('qqgqtlf6pqhm2199poc67si6j0d430ls', '::1', 1514510625, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531303632353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('r2j41jf70ecbg8n10n7ujlmjtml0j3tj', '::1', 1514344133, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343334343133333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('r66f45ijpijhaartmlhn5cp9eektdun4', '::1', 1514382562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343338323536323b),
('rfgj97r3vtsk1cdci06lhr50mgmo46n0', '::1', 1514299080, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239393038303b),
('rjsq95co9coocf661kkn375hfnoqnsnc', '::1', 1514519122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531393132323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('rss0cu1c3brq76lri40ocnkdoq3i2nlf', '::1', 1514516371, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343531363337313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('s88mta632ocm3tbbe1ksbec8hhgskokm', '::1', 1514424863, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343432343836333b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('sju4k752ansdc7ip4djqa33a1ucp8c1k', '::1', 1514647050, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343634373035303b),
('t10qnn8hfdou6qav4v1oo02t41b1b9c1', '::1', 1514603453, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630333435333b),
('tpcu46rdtbjt16l459cmuvgdafb6qcnu', '::1', 1514297074, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239373037343b),
('trn7381q7ju0hpeu4iea6eu7947fjjam', '::1', 1514521547, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343532313534343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('u76p41ld6n5o3phtutvlocrdl8k7bm2s', '::1', 1513955595, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333935353539353b6d657373616765726567697374726174696f6e7c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a33393a224d6161662c2073696c616b616e2063656b20696e707574616e20616e6461206b656d62616c692e223b7d5f5f63695f766172737c613a313a7b733a31393a226d657373616765726567697374726174696f6e223b733a333a226e6577223b7d),
('ujq217msohkg2l9lnhcbjo6n80pdedkm', '::1', 1514296438, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239363433383b),
('uovh8e9vgg2vici464a3a940tgl20bk8', '::1', 1514648291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343634383239313b456d61696c7c733a32343a226d616d61746a75616c746f6d617440676d61696c2e636f6d223b6964555345527c733a313a2231223b4e616d657c733a31333a22416e6468616e61205574616d61223b6c6f67676564696e7c623a313b),
('usi2m1pejnbsenk523c9v0knk3cccvbq', '::1', 1514299121, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343239393038303b),
('v4dnh4ce2h9c56rm11qqlc4t7260rsma', '::1', 1513993615, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333939333631353b),
('vjul11cp6pg3tlscn8h29uhqv02tksqu', '::1', 1514604093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531343630343039333b),
('vkivodapobausp7k3rdp0cp5hbg0papg', '::1', 1513957220, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531333935373232303b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d6d6573736167657c613a333a7b733a353a227469746c65223b733a363a224572726f7221223b733a353a227374796c65223b733a31303a2269732d7761726e696e67223b733a343a2274657874223b733a33393a224d6161662c2073696c616b616e2063656b20696e707574616e20616e6461206b656d62616c692e223b7d);

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
(31, '::1', '2017-12-30');

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
  MODIFY `idATTEMPTS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
  MODIFY `idCHOICE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
