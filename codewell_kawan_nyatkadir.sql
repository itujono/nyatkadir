-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2017 at 03:40 AM
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
(3, 'User', 'verified_user', 'user', 0, '0', 1, 1, '2017-10-25 12:37:33'),
(4, 'Daftar', 'verified_user', 'index_user', 3, '0', 1, 1, '2017-10-25 12:37:55');

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
('0q4ueth38ldr3aba4id5ep8d1hjoq0fj', '::1', 1509285994, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238353939343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('15j2bqp56ppggnhno3tnovrqaqje06rs', '::1', 1509164273, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393136343234363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('17v67gsi86kh0d85bam5ope6k8vgb2jr', '::1', 1510235897, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303233353839373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('18vumjss0ektchmaoa618huohcodtofv', '::1', 1509163611, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393136333631313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1de65ckcfrlqfghbq0up03hrj82q4jr0', '::1', 1508935262, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933353236323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('1hq30an67l9fgoc98nm9if8hmouhsi3n', '::1', 1509368334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393336383333343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('1i4uomnlk5tsh4ndnkd86usjgv230kb6', '::1', 1510236611, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303233363631313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('316ao0n1aa782k4ti6l88fi3614fgvhg', '::1', 1508939027, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933393032373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33313a226d6f686f6e20756c616e676920696e707574616e20666f726d20616e64612e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('51so4o31q1ag346oi9asb03kkp5kebas', '::1', 1509279484, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393237393438343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('527qtamb7ue5dinn81bqjqot7csa8mej', '::1', 1509369344, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393336393334343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('5fun1vc48bssecrkmvu7grv5a2rkcphg', '::1', 1509371945, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393337313837383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('6l85acrv10p9jrdq5v646gan2u282utm', '::1', 1509370200, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393337303230303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('6plsf2v7obn0cojais1mbo5r629g8ld2', '::1', 1510234827, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303233343832373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('6ug57ho93f07c4adhavfst33ckpbntc6', '::1', 1508851492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383835313439323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a2257656c636f6d6521223b733a343a2274657874223b733a33393a2248616c6c6f2c2053656c616d617420646174616e672061646d696e4061646d696e2e636f6d2021223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7eu8f2641ql6cgrt9h7m0afdv2kjnq7b', '::1', 1509371449, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393337313434393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('7mbfftjn06l2h915qc039hht978o5joc', '::1', 1509279098, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393237393039383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('7vtnj0imj2dc8e9in3jaqos3ndv394lp', '::1', 1509164246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393136343234363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('8j3ai1dolkv0tgqmm4q8hr1s02kd8qd9', '::1', 1509271630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393237313633303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('9o2eg5veuds927lmopa7tvtbl56m6cra', '::1', 1508940884, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383934303838343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('a5veuj1c2tb47u4fq98so7jjhr1hb4tb', '::1', 1509370958, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393337303935383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('asbqr9blfpgovgcdgbabquebau3ga83i', '::1', 1509371878, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393337313837383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('b3ce23imdo3qmh0mko0245601qbv8fcq', '::1', 1509272011, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393237323031313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('bri8oboqcos54jm3um48f4b8he16pim4', '::1', 1510235527, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303233353532373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('clqrhk0cg02i00s4so1v8tkubimihne9', '::1', 1509370518, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393337303531383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('detjqm85kckosc7pqsfcqn5kst2ds202', '::1', 1508940061, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383934303036313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33313a226d6f686f6e20756c616e676920696e707574616e20666f726d20616e64612e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('do1hcke89ft130o2tnjhbng29e30c62g', '::1', 1508938218, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933383231383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('e0gcpj2otfu3cqro89623vknl8uvjuua', '::1', 1510236211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303233363231313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('e381mjgjltjgfqvk41388vek1p7us56p', '::1', 1508936221, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933363232313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('e9chljg7o097idn1p48lnfgomank66rs', '::1', 1509369842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393336393834323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('edc27tththv8uqqvag5ajehcs59n850i', '::1', 1509280954, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238303935343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('fi04p3j31818out6f1cp6u1l438cckn3', '::1', 1509280192, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238303139323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('g07r6f2dn4fflafapju7bsjq0nk09vpi', '::1', 1509441690, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393434313637393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('g9l0ijdi1jhuc0ncf4hvkhc6ppsgfe58', '::1', 1509288603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238383630333b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('h060lon8uohu16o0ub7rti2oatlobvc2', '::1', 1509282656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238323635363b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('h2rrhafjrc0l49udbt6dc03sv4snhgq8', '::1', 1509283127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238333132373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33363a226d6f686f6e20756c616e676920696e707574616e20666f726d206d656e7520616e64612e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('h5aib4fc4n10g0rethjkvkf16nboenfe', '::1', 1509279815, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393237393831353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('jc9mhh685gceod3ui4kqha9rgf1mnvfi', '::1', 1509289838, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238393636353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('jh3tjfc72f4n4k74e1cpc622jfd2uqnj', '::1', 1509286360, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238363336303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lamhmquvncgs75jd5rjn7efm6akatb8g', '::1', 1509284729, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238343732393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lcseov201kh7ojf5o0afsfh38tom40oe', '::1', 1508938572, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933383537323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('lhldifc7e2q8si68bfngg63gdeg9eomr', '::1', 1508765323, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383736353332333b6d6573736167657c613a333a7b733a353a227469746c65223b733a383a2257656c636f6d6521223b733a343a2274657874223b733a33393a2248616c6c6f2c2053656c616d617420646174616e672061646d696e4061646d696e2e636f6d2021223b733a343a2274797065223b733a373a2273756363657373223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('mrqq6cijuq5b9cfmav7co5tpbr54r0v7', '::1', 1509281807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238313830373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('nn718tpvd81ii1rf5865bkh9nhn2nore', '::1', 1509281278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238313237383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('o82j54nbufufm0gl2ce6ikrmufpbiov0', '::1', 1508935604, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933353630343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('oj8or0evmdu9dfu53csjn4pbhkn40b50', '::1', 1509289665, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238393636353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('p5td6c3hit712jhe7tqng48tqua0fooe', '::1', 1509287002, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238373030323b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('qtkouadg63e3ctkmbbinj04dmnfikutu', '::1', 1509289298, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238393239383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('rbeol0v19c316cmk6b3fejdcsuhvc875', '::1', 1509284194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238343139343b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('rinlddrfe5oqqrjqpk63o7bsrq033vd1', '::1', 1509272829, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393237323832393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('sn17clfo97i6ipsj35cfetrf4jp6bp1n', '::1', 1510234460, 0x5f5f63695f6c6173745f726567656e65726174657c693a313531303233343436303b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b6d6573736167657c613a333a7b733a353a227469746c65223b733a31373a225465726a616469204b6573616c6168616e223b733a343a2274657874223b733a33313a226d6f686f6e20756c616e676920696e707574616e20666f726d20616e64612e223b733a343a2274797065223b733a373a227761726e696e67223b7d5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226e6577223b7d),
('spej59h83ul67lpt6joi7mbh7bjm63a5', '::1', 1509288268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238383236383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('ssnv3oq7t14tadu9cdc4qr9nl4a8t3q6', '::1', 1508941211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383934313231313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('st4l6qfok8o6bh6fu7c6p1l8qv7ioua6', '::1', 1508937571, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933373537313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('tl2fifqdhkiek9evbi9lns5t4vtg7b09', '::1', 1509285051, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238353035313b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('tnerh6dr0mip2aeq8n22d0oprhd9scds', '::1', 1508765021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383736353032313b),
('tq7n80qh6q4jhvf5ae9a979h7vb3m5iv', '::1', 1509287309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238373330393b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('tu28oraij40sa4dbc56q9gib7t1dmntu', '::1', 1508940505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383934303530353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('u756v1nf7u9tu0qqia2lu53q50ug9ipj', '::1', 1509163918, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393136333931383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('uaincmjtud5jeeutjkgfn5jvrfsgndbb', '::1', 1509287807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238373830373b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b69735f61646d696e7c733a313a2231223b6c6f67676564696e7c623a313b),
('uic9emgt12nk117aoj7a4d2pg1fl202o', '::1', 1509282108, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530393238323130383b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b4e616d657c733a353a224d6172636f223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b),
('vgrpmditp7qmtc5obkt1be1gg5337o7r', '::1', 1508936525, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530383933363532353b456d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b696441444d494e7c733a313a2231223b6163636573734d454e557c693a313b616b7365737c733a353a2261646d696e223b6c6f67676564696e7c623a313b);

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
(1, 'Marco', 'admin@admin.com', '6a118651d34f7021bebb5acbeb91639f2ab77c25aca7b33e4e5889b5b5c272e3f83669371c2f9aa62e2942bdf7abc0c28be1c2ad9c69ce8344f8b14cb5b106b9', '2017-09-26 10:04:09', '2017-11-09 21:13:37', 1, 1),
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
(1, '::1', '2017-11-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nyat_menus_admin`
--
ALTER TABLE `nyat_menus_admin`
  ADD PRIMARY KEY (`idMENU`);

--
-- Indexes for table `nyat_sessions`
--
ALTER TABLE `nyat_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

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
-- AUTO_INCREMENT for table `nyat_menus_admin`
--
ALTER TABLE `nyat_menus_admin`
  MODIFY `idMENU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nyat_users_admin`
--
ALTER TABLE `nyat_users_admin`
  MODIFY `idADMIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `nyat_visitor`
--
ALTER TABLE `nyat_visitor`
  MODIFY `idVISITOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;