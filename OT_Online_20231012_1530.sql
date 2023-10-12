-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2023 at 03:27 PM
-- Server version: 10.5.19-MariaDB-0+deb11u2-log
-- PHP Version: 8.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ot_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', '$2y$10$mzxgetpHFn2b67b.5Z3mwOrFs8IjIWZuNjjp6kmGlVc5KB7MxAveS', 'อิฟฟาน');

-- --------------------------------------------------------

--
-- Table structure for table `tb_approver`
--

CREATE TABLE `tb_approver` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `sect` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_approver`
--

INSERT INTO `tb_approver` (`id`, `username`, `password`, `createdate`, `sect`) VALUES
(1, 'supoj', '$2y$10$mzxgetpHFn2b67b.5Z3mwOrFs8IjIWZuNjjp6kmGlVc5KB7MxAveS', '2023-09-04 05:46:59', '1'),
(2, 'santi', '$2y$10$mzxgetpHFn2b67b.5Z3mwOrFs8IjIWZuNjjp6kmGlVc5KB7MxAveS', '2023-09-04 05:46:59', '2,3'),
(3, 'nawitchai', '$2y$10$mzxgetpHFn2b67b.5Z3mwOrFs8IjIWZuNjjp6kmGlVc5KB7MxAveS', '2023-09-04 05:46:59', '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cars`
--

CREATE TABLE `tb_cars` (
  `id` int(11) NOT NULL,
  `cars` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_cars`
--

INSERT INTO `tb_cars` (`id`, `cars`) VALUES
(1, 'หนองมน-โรบินสัน-ม.ศรีราชาปาร์ควิลล์'),
(2, 'มาบเตย-ม.ปาล์มวิลล่า'),
(3, 'สะพานสี่ 1'),
(4, 'รุ้งสีทอง-ม.จินดารมย์ 3'),
(5, 'แม่น้ำคู้-แยกลุงอุ้ย'),
(6, 'ระยอง-ตะพง-เกาะกลอย'),
(7, 'โป่งสะเก็ต-บุญส่ง'),
(8, 'มาบยางพร'),
(9, 'ระยอง-มาบข่า'),
(10, 'ระยอง-ปากน้ำ-วัดโขดหิน'),
(11, 'ม.ปารียา-ตลาดศศิ'),
(12, 'ม.สมาร์ทแลนด์นิวสไตล์'),
(13, 'รถส่วนตัว'),
(14, 'คลอง2-หนองก้างปลา'),
(15, 'สะพานสี่ 2'),
(16, 'สะพานสี่ 3'),
(17, 'สะพานสี่ 4'),
(18, 'สะพานสี่ 5'),
(19, 'สะพานสี่ 6'),
(20, 'สะพานสี่ 7'),
(21, 'สะพานสี่ 8'),
(22, 'สะพานสี่ 9'),
(23, 'สะพานสี่ 10'),
(24, 'สะพานสี่ 11'),
(25, 'สะพานสี่ 12'),
(26, 'หัวสนามบิน-บึงทอง');

-- --------------------------------------------------------

--
-- Table structure for table `tb_employees`
--

CREATE TABLE `tb_employees` (
  `id` int(11) NOT NULL,
  `employees_id` varchar(6) NOT NULL,
  `employees_name` varchar(255) NOT NULL,
  `employees_sect` int(11) NOT NULL,
  `cars_id` int(11) NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_employees`
--

INSERT INTO `tb_employees` (`id`, `employees_id`, `employees_name`, `employees_sect`, `cars_id`, `createdate`) VALUES
(1, '470007', 'นายสุพจน์ สมนาศรี', 1, 1, '2023-09-02 16:17:42'),
(2, '480006', 'นายสันติ เหลืองอ่อน', 1, 2, '2023-09-02 16:17:42'),
(3, '480088', 'นายสมชาย เพ็งแจ่ม', 1, 3, '2023-09-02 16:17:42'),
(4, '480170', 'นายเอกพล วงค์คำ', 1, 4, '2023-09-02 16:17:42'),
(5, '500010', 'นายวีรชัย วงค์วันดี', 1, 3, '2023-09-02 16:17:42'),
(6, '550045', 'นายวงศกร แจ่มจันทร์', 1, 5, '2023-09-02 16:17:42'),
(7, '620036', 'นายนิเวศน์ นิรันตรานนท์', 1, 6, '2023-09-02 16:17:42'),
(8, '630015', 'ว่าที่ร.ต.ฉัตรพล สิงหาทิพย์', 1, 7, '2023-09-02 16:17:42'),
(9, '640004', 'นายทศพล เพียรไทสงค์', 1, 8, '2023-09-02 16:17:42'),
(10, '640062', 'นายพิทยาทร ฝ่ายชาวนา', 1, 9, '2023-09-02 16:17:42'),
(11, '650013', 'นายปัญญา อิติวุตตา', 1, 10, '2023-09-02 16:17:42'),
(12, '650034', 'นายเตชินท์ บุญอุ่น', 1, 3, '2023-09-02 16:17:42'),
(13, '660015', 'นายศิริโชค มั่นใจ', 1, 3, '2023-09-02 16:17:42'),
(14, '660016', 'นายพีรพัฒน์ นามยงค์', 1, 3, '2023-09-02 16:17:42'),
(15, '660029', 'นายอิทธิพล ไหว้พรหม', 1, 9, '2023-09-02 16:17:42'),
(16, '380008', 'นายบุญธง เพ็งพินิจ', 2, 2, '2023-09-02 16:17:42'),
(17, '380013', 'นายสนม มัธยมแก้ว', 2, 11, '2023-09-02 16:17:42'),
(18, '470024', 'นายสมคิด สมสะอาด', 2, 4, '2023-09-02 16:17:42'),
(19, '470047', 'นายสมพัตสร เสนา', 2, 12, '2023-09-02 16:17:42'),
(20, '480020', 'นายเรืองเนตร สมานเขตกิจ', 2, 13, '2023-09-02 16:17:42'),
(21, '480052', 'นายพินิจ ฦาชา', 2, 4, '2023-09-02 16:17:42'),
(22, '490085', 'นายดำรงค์ จันทรักษ์', 2, 12, '2023-09-02 16:17:42'),
(23, '500046', 'นายสุขสวัสดิ์ ชัยศรี', 2, 3, '2023-09-02 16:17:42'),
(24, '560061', 'นายนิรุตติ์ ราชโคตร', 2, 3, '2023-09-02 16:17:42'),
(25, '570084', 'นายธวัชชัย นันต๊ะวงค์', 2, 3, '2023-09-02 16:17:42'),
(26, '570088', 'นายเอกชัย ปินะกาพัง', 2, 3, '2023-09-02 16:17:42'),
(27, '580011', 'นายเกรียงไกร นนฤชา', 2, 11, '2023-09-02 16:17:42'),
(28, '580058', 'นายสดายุ ไกรกลาง', 2, 14, '2023-09-02 16:17:42'),
(29, '640046', 'นายผดุงเกียรติ ภวภูตานนท์', 2, 3, '2023-09-02 16:17:42'),
(30, '640061', 'นายสุชาติ สมานพันธุ์', 2, 13, '2023-09-02 16:17:42'),
(31, '640065', 'นายธีรภัทร ปันสา', 2, 13, '2023-09-02 16:17:42'),
(32, '650004', 'นายอนุวัฒน์ กองอาษา', 2, 13, '2023-09-02 16:17:42'),
(33, '650064', 'นายชนะ ทิพย์โอสถ', 2, 8, '2023-09-02 16:17:42'),
(34, '660007', 'นายณัฐวุฒิ พ่วงกลาง', 2, 13, '2023-09-02 16:17:42'),
(35, '660026', 'นายกฤษฎา โปต๊ะ', 2, 13, '2023-09-02 16:17:42'),
(36, '480092', 'นายเสถียร ไชยบัว', 3, 3, '2023-09-02 16:17:42'),
(37, '480188', 'นายบัญชา เพ็ชร์รัตน์', 3, 15, '2023-09-02 16:17:42'),
(38, '490141', 'นายยงยุท เสณีกุล', 3, 26, '2023-09-02 16:17:42'),
(39, '510079', 'นายบุญชัย ทวีชาติ', 3, 17, '2023-09-02 16:17:42'),
(40, '570007', 'นายพรทวี วงษ์ษา', 3, 18, '2023-09-02 16:17:42'),
(41, '570047', 'นายอักขจร ยอดดี', 3, 19, '2023-09-02 16:17:42'),
(42, '65T110', 'นายพร้อมพงษ์ เครือแวงมล', 3, 20, '2023-09-02 16:17:42'),
(43, '66W013', 'นายสุรพงษ์ ประทุมทอง', 3, 21, '2023-09-02 16:17:42'),
(44, '66W014', 'นายอนุวัฒน์ โพนรัตน์', 3, 22, '2023-09-02 16:17:42'),
(45, '66W015', 'นายสุธิราช เดชโคบุตร', 3, 23, '2023-09-02 16:17:42'),
(46, '490157', 'นายนะวิทชัย ศรีหลิ่ง', 3, 24, '2023-09-02 16:17:42'),
(47, '400009', 'นายปัญญา พิทักษ์ชาติ', 3, 25, '2023-09-02 16:17:42'),
(48, '640048', 'อิฟฟาน หะยีอิสมาแอ', 1, 13, '2023-10-11 13:27:17'),
(49, '66T031', 'นายมหัทธน กิจกุศล', 3, 3, '2023-10-12 03:25:33'),
(50, '66T045', 'นายสุรพงษ์ ประทุมทอง', 3, 3, '2023-10-12 03:26:18'),
(51, '66T046', 'นายอนุวัฒน์ โพนรัตน์', 3, 2, '2023-10-12 03:27:25'),
(52, '66T047', 'นายสุธิราช เดชโคบุตร', 3, 13, '2023-10-12 03:27:53');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ot_request`
--

CREATE TABLE `tb_ot_request` (
  `id` int(11) NOT NULL,
  `request_key` varchar(255) NOT NULL,
  `employee_id` varchar(6) NOT NULL,
  `roles_id` int(11) NOT NULL,
  `ot_starttime` time NOT NULL,
  `ot_endtime` time NOT NULL,
  `ot_date` date NOT NULL,
  `cars_text` varchar(255) NOT NULL,
  `approved_status` int(11) NOT NULL COMMENT '0=รอ/1=อนุมัติ/2=ไม่อนุมัติ',
  `work_detail` text NOT NULL,
  `machine_name` text NOT NULL,
  `createdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved_by` int(11) DEFAULT NULL,
  `approved_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_ot_request`
--

INSERT INTO `tb_ot_request` (`id`, `request_key`, `employee_id`, `roles_id`, `ot_starttime`, `ot_endtime`, `ot_date`, `cars_text`, `approved_status`, `work_detail`, `machine_name`, `createdate`, `approved_by`, `approved_datetime`) VALUES
(75, '31d09b9f-6410-11ee-b803-90b11c26834e', '580011', 3, '05:30:00', '08:00:00', '2023-10-06', 'ม.ปารียา-ตลาดศศิ', 1, 'Support all M/C', 'MC', '2023-10-06 06:18:41', 2, '2023-10-06 21:46:08'),
(76, 'a9745521-6426-11ee-b803-90b11c26834e', '470024', 3, '17:30:00', '20:00:00', '2023-10-06', 'รุ้งสีทอง-ม.จินดารมย์ 3', 1, 'Support MC', 'MC', '2023-10-06 08:59:30', 2, '2023-10-06 21:46:33'),
(77, 'a9745521-6426-11ee-b803-90b11c26834e', '580058', 3, '17:30:00', '20:00:00', '2023-10-06', 'คลอง2-หนองก้างปลา', 1, 'Support MC', 'MC', '2023-10-06 08:59:30', 2, '2023-10-06 21:46:33'),
(78, '5b6ebd34-6427-11ee-b803-90b11c26834e', '640065', 3, '17:30:00', '20:00:00', '2023-10-06', 'รถส่วนตัว', 1, 'Support MC ', 'MC', '2023-10-06 09:04:29', 2, '2023-10-06 21:46:21'),
(79, '5b6ebd34-6427-11ee-b803-90b11c26834e', '650064', 3, '17:30:00', '20:00:00', '2023-10-06', 'มาบยางพร', 1, 'Support MC ', 'MC', '2023-10-06 09:04:29', 2, '2023-10-06 21:46:21'),
(80, '4ec25e04-6436-11ee-abd0-00163e2213cc', '500010', 3, '17:30:00', '20:00:00', '2023-10-06', 'สะพานสี่ 1', 1, 'Support night shift ', 'All', '2023-10-06 10:51:30', 1, '2023-10-06 17:55:52'),
(81, '4ec25e04-6436-11ee-abd0-00163e2213cc', '550045', 3, '17:30:00', '20:00:00', '2023-10-06', 'แม่น้ำคู้-แยกลุงอุ้ย', 1, 'Support night shift ', 'All', '2023-10-06 10:51:30', 1, '2023-10-06 17:55:52'),
(82, '4ec25e04-6436-11ee-abd0-00163e2213cc', '620036', 3, '17:30:00', '20:00:00', '2023-10-06', 'ระยอง-ตะพง-เกาะกลอย', 1, 'Support night shift ', 'All', '2023-10-06 10:51:30', 1, '2023-10-06 17:55:52'),
(83, '4ec25e04-6436-11ee-abd0-00163e2213cc', '640004', 3, '17:30:00', '20:00:00', '2023-10-06', 'มาบยางพร', 1, 'Support night shift ', 'All', '2023-10-06 10:51:30', 1, '2023-10-06 17:55:52'),
(84, '4ec25e04-6436-11ee-abd0-00163e2213cc', '650013', 3, '17:30:00', '20:00:00', '2023-10-06', 'ระยอง-ปากน้ำ-วัดโขดหิน', 1, 'Support night shift ', 'All', '2023-10-06 10:51:30', 1, '2023-10-06 17:55:52'),
(85, '4ec25e04-6436-11ee-abd0-00163e2213cc', '660029', 3, '17:30:00', '20:00:00', '2023-10-06', 'ระยอง-มาบข่า', 1, 'Support night shift ', 'All', '2023-10-06 10:51:30', 1, '2023-10-06 17:55:52'),
(86, 'bde965f1-644c-11ee-abd0-00163e2213cc', '620036', 3, '05:30:00', '08:00:00', '2023-10-06', 'ระยอง-ตะพง-เกาะกลอย', 1, 'Standby support M/C', 'All', '2023-10-06 13:32:06', 1, '2023-10-06 20:32:31'),
(87, 'ad4a8f9d-666f-11ee-abd0-00163e2213cc', '550045', 3, '17:30:00', '20:00:00', '2023-10-09', 'แม่น้ำคู้-แยกลุงอุ้ย', 1, 'Support BZ', 'All', '2023-10-09 06:47:12', 1, '2023-10-09 15:08:47'),
(88, '0f2b9859-6673-11ee-abd0-00163e2213cc', '500010', 3, '05:30:00', '08:00:00', '2023-10-09', 'สะพานสี่ 1', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(89, '0f2b9859-6673-11ee-abd0-00163e2213cc', '620036', 3, '05:30:00', '08:00:00', '2023-10-09', 'ระยอง-ตะพง-เกาะกลอย', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(90, '0f2b9859-6673-11ee-abd0-00163e2213cc', '640004', 3, '05:30:00', '08:00:00', '2023-10-09', 'มาบยางพร', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(91, '0f2b9859-6673-11ee-abd0-00163e2213cc', '650013', 3, '05:30:00', '08:00:00', '2023-10-09', 'ระยอง-ปากน้ำ-วัดโขดหิน', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(92, '0f2b9859-6673-11ee-abd0-00163e2213cc', '650034', 3, '05:30:00', '08:00:00', '2023-10-09', 'สะพานสี่ 1', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(93, '0f2b9859-6673-11ee-abd0-00163e2213cc', '660016', 3, '05:30:00', '08:00:00', '2023-10-09', 'สะพานสี่ 1', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(94, '0f2b9859-6673-11ee-abd0-00163e2213cc', '660029', 3, '05:30:00', '08:00:00', '2023-10-09', 'ระยอง-มาบข่า', 1, 'Support', 'HD', '2023-10-09 07:11:25', 1, '2023-10-09 15:07:14'),
(95, 'a90bd5bc-6673-11ee-abd0-00163e2213cc', '650034', 3, '06:00:00', '08:00:00', '2023-10-09', 'สะพานสี่ 1', 1, 'Start up mc BZ', 'Bz', '2023-10-09 07:15:43', 1, '2023-10-09 15:08:54'),
(96, '3ca015e5-6679-11ee-abd0-00163e2213cc', '490141', 8, '17:30:00', '20:00:00', '2023-10-09', 'สะพานสี่ 3', 1, 'อุปกรณ์ชุดLoader G-96', 'US', '2023-10-09 07:55:38', 2, '2023-10-09 15:01:36'),
(97, 'bb146455-6679-11ee-abd0-00163e2213cc', '480188', 9, '17:00:00', '20:00:00', '2023-10-09', 'สะพานสี่ 2', 1, 'อุปกรณ์โต๊ะเช็ค100%AM-2', 'US', '2023-10-09 07:59:11', 2, '2023-10-09 15:01:33'),
(98, '865956d9-667c-11ee-abd0-00163e2213cc', '470047', 3, '05:30:00', '08:00:00', '2023-10-09', 'ม.สมาร์ทแลนด์นิวสไตล์', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(99, '865956d9-667c-11ee-abd0-00163e2213cc', '480020', 3, '05:30:00', '08:00:00', '2023-10-09', 'รถส่วนตัว', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(100, '865956d9-667c-11ee-abd0-00163e2213cc', '490085', 3, '05:30:00', '08:00:00', '2023-10-09', 'ม.สมาร์ทแลนด์นิวสไตล์', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(101, '865956d9-667c-11ee-abd0-00163e2213cc', '570084', 3, '05:30:00', '08:00:00', '2023-10-09', 'สะพานสี่ 1', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(102, '865956d9-667c-11ee-abd0-00163e2213cc', '580011', 3, '05:30:00', '08:00:00', '2023-10-09', 'ม.ปารียา-ตลาดศศิ', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(103, '865956d9-667c-11ee-abd0-00163e2213cc', '580058', 3, '05:30:00', '08:00:00', '2023-10-09', 'คลอง2-หนองก้างปลา', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(104, '865956d9-667c-11ee-abd0-00163e2213cc', '640061', 3, '05:30:00', '08:00:00', '2023-10-09', 'รถส่วนตัว', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(105, '865956d9-667c-11ee-abd0-00163e2213cc', '640065', 3, '05:30:00', '08:00:00', '2023-10-09', 'รถส่วนตัว', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(106, '865956d9-667c-11ee-abd0-00163e2213cc', '650064', 3, '05:30:00', '08:00:00', '2023-10-09', 'มาบยางพร', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(107, '865956d9-667c-11ee-abd0-00163e2213cc', '660007', 3, '05:30:00', '08:00:00', '2023-10-09', 'รถส่วนตัว', 1, 'Spupport', 'Spaer Part', '2023-10-09 08:19:11', 2, '2023-10-09 15:22:20'),
(108, 'b8a4bc7c-667c-11ee-abd0-00163e2213cc', '550045', 3, '17:30:00', '20:00:00', '2023-10-09', 'แม่น้ำคู้-แยกลุงอุ้ย', 1, 'BZ,GM', 'All', '2023-10-09 08:20:35', 1, '2023-10-09 15:20:57'),
(109, 'f073c16b-6688-11ee-abd0-00163e2213cc', '660026', 2, '17:30:00', '20:00:00', '2023-10-09', 'รถส่วนตัว', 1, 'Repair', 'AOQ-4', '2023-10-09 09:48:03', 2, '2023-10-09 16:49:47'),
(110, 'cd5276ba-669b-11ee-abd0-00163e2213cc', '640062', 3, '17:30:00', '20:00:00', '2023-10-09', 'ระยอง-มาบข่า', 1, 'Test run ', 'T-15', '2023-10-09 12:03:04', 1, '2023-10-09 19:06:23'),
(111, '17d355c2-6735-11ee-abd0-00163e2213cc', '480020', 3, '05:30:00', '08:00:00', '2023-10-10', 'รถส่วนตัว', 1, 'Support all M/C', 'MC', '2023-10-10 06:20:22', 2, '2023-10-10 14:58:07'),
(112, '17d355c2-6735-11ee-abd0-00163e2213cc', '580011', 3, '05:30:00', '08:00:00', '2023-10-10', 'ม.ปารียา-ตลาดศศิ', 1, 'Support all M/C', 'MC', '2023-10-10 06:20:22', 2, '2023-10-10 14:58:07'),
(113, 'e5aef28b-6735-11ee-abd0-00163e2213cc', '380008', 2, '17:30:00', '20:00:00', '2023-10-10', 'มาบเตย-ม.ปาล์มวิลล่า', 1, 'ติดตั้งหลอดเช็คน้ำมัน', 'R-11', '2023-10-10 06:26:07', 2, '2023-10-10 14:57:59'),
(114, '49c1d6bd-6736-11ee-abd0-00163e2213cc', '640065', 3, '17:30:00', '20:00:00', '2023-10-10', 'รถส่วนตัว', 1, 'Support BZ/OQ/GM', 'M/C', '2023-10-10 06:28:55', 2, '2023-10-10 14:58:11'),
(115, '7121f1db-6742-11ee-abd0-00163e2213cc', '640046', 3, '17:30:00', '20:00:00', '2023-10-10', 'สะพานสี่ 1', 1, 'Support M/C', 'M/C', '2023-10-10 07:55:55', 2, '2023-10-10 14:58:16'),
(116, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '500010', 9, '17:30:00', '20:00:00', '2023-10-10', 'สะพานสี่ 1', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(117, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '620036', 9, '17:30:00', '20:00:00', '2023-10-10', 'ระยอง-ตะพง-เกาะกลอย', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(118, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '640004', 9, '17:30:00', '20:00:00', '2023-10-10', 'มาบยางพร', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(119, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '640062', 9, '17:30:00', '20:00:00', '2023-10-10', 'ระยอง-มาบข่า', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(120, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '650013', 9, '17:30:00', '20:00:00', '2023-10-10', 'ระยอง-ปากน้ำ-วัดโขดหิน', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(121, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '650034', 9, '17:30:00', '20:00:00', '2023-10-10', 'สะพานสี่ 1', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(122, '9aecfc7e-6742-11ee-abd0-00163e2213cc', '660016', 9, '17:30:00', '20:00:00', '2023-10-10', 'สะพานสี่ 1', 1, 'Check part W-06', 'W-06', '2023-10-10 07:57:05', 1, '2023-10-10 20:56:43'),
(123, '12fd0f5e-6743-11ee-abd0-00163e2213cc', '480188', 9, '17:30:00', '20:00:00', '2023-10-10', 'สะพานสี่ 2', 1, 'ซ่อมรถเห็น adc', 'US', '2023-10-10 08:00:27', 2, '2023-10-10 15:03:39'),
(126, '6493a83f-6774-11ee-abd0-00163e2213cc', '630015', 2, '17:00:00', '21:00:00', '2023-10-10', 'โป่งสะเก็ต-บุญส่ง', 1, 'Startup หลังไฟดับ', 'GM-3', '2023-10-10 13:53:29', 1, '2023-10-10 20:56:38'),
(127, '6493a83f-6774-11ee-abd0-00163e2213cc', '650034', 2, '17:00:00', '21:00:00', '2023-10-10', 'สะพานสี่ 1', 1, 'Startup หลังไฟดับ', 'GM-3', '2023-10-10 13:53:29', 1, '2023-10-10 20:56:38'),
(128, '512a8538-67e0-11ee-abd0-00163e2213cc', '630015', 3, '17:00:00', '21:00:00', '2023-10-10', 'โป่งสะเก็ต-บุญส่ง', 1, 'Support ', 'GM-3', '2023-10-11 02:46:02', 1, '2023-10-11 10:53:46'),
(129, '512a8538-67e0-11ee-abd0-00163e2213cc', '640004', 3, '17:00:00', '21:00:00', '2023-10-10', 'รถส่วนตัว', 1, 'Support ', 'GM-3', '2023-10-11 02:46:02', 1, '2023-10-11 10:53:46'),
(130, '512a8538-67e0-11ee-abd0-00163e2213cc', '640062', 3, '17:00:00', '21:00:00', '2023-10-10', 'รถส่วนตัว', 1, 'Support ', 'GM-3', '2023-10-11 02:46:02', 1, '2023-10-11 10:53:46'),
(131, '512a8538-67e0-11ee-abd0-00163e2213cc', '650013', 3, '17:00:00', '21:00:00', '2023-10-10', 'ระยอง-ปากน้ำ-วัดโขดหิน', 1, 'Support ', 'GM-3', '2023-10-11 02:46:02', 1, '2023-10-11 10:53:46'),
(132, '512a8538-67e0-11ee-abd0-00163e2213cc', '650034', 3, '17:00:00', '21:00:00', '2023-10-10', 'รถส่วนตัว', 1, 'Support ', 'GM-3', '2023-10-11 02:46:02', 1, '2023-10-11 10:53:46'),
(133, '512a8538-67e0-11ee-abd0-00163e2213cc', '660016', 3, '17:00:00', '21:00:00', '2023-10-10', 'สะพานสี่ 1', 1, 'Support ', 'GM-3', '2023-10-11 02:46:02', 1, '2023-10-11 10:53:46'),
(134, 'f7f17e7b-67e8-11ee-abd0-00163e2213cc', '480092', 9, '08:00:00', '17:00:00', '2023-10-13', 'สะพานสี่ 1', 1, 'เปลี่ยนหม้อ Part feader', 'IM-30', '2023-10-11 03:47:58', 2, '2023-10-11 10:54:38'),
(135, 'f7f17e7b-67e8-11ee-abd0-00163e2213cc', '480188', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 1, 'เปลี่ยนหม้อ Part feader', 'IM-30', '2023-10-11 03:47:58', 2, '2023-10-11 10:54:38'),
(136, 'f7f17e7b-67e8-11ee-abd0-00163e2213cc', '490141', 9, '08:00:00', '17:00:00', '2023-10-13', 'สะพานสี่ 3', 1, 'เปลี่ยนหม้อ Part feader', 'IM-30', '2023-10-11 03:47:58', 2, '2023-10-11 10:54:38'),
(137, 'f7f17e7b-67e8-11ee-abd0-00163e2213cc', '510079', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 1, 'เปลี่ยนหม้อ Part feader', 'IM-30', '2023-10-11 03:47:58', 2, '2023-10-11 10:54:38'),
(138, 'f7f17e7b-67e8-11ee-abd0-00163e2213cc', '570007', 9, '08:00:00', '17:00:00', '2023-10-13', 'สะพานสี่ 5', 1, 'เปลี่ยนหม้อ Part feader', 'IM-30', '2023-10-11 03:47:58', 2, '2023-10-11 10:54:38'),
(139, 'f7f17e7b-67e8-11ee-abd0-00163e2213cc', '570047', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 1, 'เปลี่ยนหม้อ Part feader', 'IM-30', '2023-10-11 03:47:58', 2, '2023-10-11 10:54:38'),
(140, '3e8cd5d7-67eb-11ee-abd0-00163e2213cc', '480092', 9, '08:00:00', '17:00:00', '2023-10-14', 'สะพานสี่ 1', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:04:15', 2, '2023-10-11 16:50:01'),
(141, '3e8cd5d7-67eb-11ee-abd0-00163e2213cc', '480188', 9, '08:00:00', '17:00:00', '2023-10-14', 'รถส่วนตัว', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:04:15', 2, '2023-10-11 16:50:01'),
(142, '3e8cd5d7-67eb-11ee-abd0-00163e2213cc', '490141', 9, '08:00:00', '17:00:00', '2023-10-14', 'สะพานสี่ 3', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:04:15', 2, '2023-10-11 16:50:01'),
(143, '3e8cd5d7-67eb-11ee-abd0-00163e2213cc', '510079', 9, '08:00:00', '17:00:00', '2023-10-14', 'สะพานสี่ 4', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:04:15', 2, '2023-10-11 16:50:01'),
(144, '3e8cd5d7-67eb-11ee-abd0-00163e2213cc', '570007', 9, '08:00:00', '17:00:00', '2023-10-14', 'สะพานสี่ 5', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:04:15', 2, '2023-10-11 16:50:01'),
(145, 'd2f14a0b-67ec-11ee-abd0-00163e2213cc', '480092', 9, '08:00:00', '17:00:00', '2023-10-15', 'สะพานสี่ 1', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:15:34', 2, '2023-10-11 16:49:58'),
(146, 'd2f14a0b-67ec-11ee-abd0-00163e2213cc', '490141', 9, '08:00:00', '17:00:00', '2023-10-15', 'สะพานสี่ 3', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:15:34', 2, '2023-10-11 16:49:58'),
(147, 'd2f14a0b-67ec-11ee-abd0-00163e2213cc', '570007', 9, '08:00:00', '17:00:00', '2023-10-15', 'สะพานสี่ 5', 1, 'Modify ติดตั้ง cover Rotary', 'G-35', '2023-10-11 04:15:34', 2, '2023-10-11 16:49:58'),
(148, 'e85acad9-6801-11ee-abd0-00163e2213cc', '480020', 3, '05:30:00', '08:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:46:29', 2, '2023-10-11 16:49:55'),
(149, 'e85acad9-6801-11ee-abd0-00163e2213cc', '580011', 3, '05:30:00', '08:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:46:29', 2, '2023-10-11 16:49:55'),
(150, 'fde6c707-6802-11ee-abd0-00163e2213cc', '380008', 3, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(151, 'fde6c707-6802-11ee-abd0-00163e2213cc', '470024', 3, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(152, 'fde6c707-6802-11ee-abd0-00163e2213cc', '470047', 3, '17:30:00', '20:00:00', '2023-10-11', 'ม.สมาร์ทแลนด์นิวสไตล์', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(153, 'fde6c707-6802-11ee-abd0-00163e2213cc', '640061', 3, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(154, 'fde6c707-6802-11ee-abd0-00163e2213cc', '650064', 3, '17:30:00', '20:00:00', '2023-10-11', 'มาบยางพร', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(155, 'fde6c707-6802-11ee-abd0-00163e2213cc', '660007', 3, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(156, 'fde6c707-6802-11ee-abd0-00163e2213cc', '660026', 3, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'Support all M/C', 'M/C', '2023-10-11 06:54:15', 2, '2023-10-11 16:49:52'),
(157, '8a8c1cb8-6806-11ee-abd0-00163e2213cc', '500010', 9, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'เปลี่ยนโคมไฟ', 'H-60', '2023-10-11 07:19:39', 1, '2023-10-11 17:30:07'),
(158, '8a8c1cb8-6806-11ee-abd0-00163e2213cc', '620036', 9, '17:30:00', '20:00:00', '2023-10-11', 'ระยอง-ตะพง-เกาะกลอย', 1, 'เปลี่ยนโคมไฟ', 'H-60', '2023-10-11 07:19:39', 1, '2023-10-11 17:30:07'),
(159, '8a8c1cb8-6806-11ee-abd0-00163e2213cc', '650013', 9, '17:30:00', '20:00:00', '2023-10-11', 'ระยอง-ปากน้ำ-วัดโขดหิน', 1, 'เปลี่ยนโคมไฟ', 'H-60', '2023-10-11 07:19:39', 1, '2023-10-11 17:30:07'),
(160, '8a8c1cb8-6806-11ee-abd0-00163e2213cc', '650034', 9, '17:30:00', '20:00:00', '2023-10-11', 'สะพานสี่ 1', 1, 'เปลี่ยนโคมไฟ', 'H-60', '2023-10-11 07:19:39', 1, '2023-10-11 17:30:07'),
(161, '8a8c1cb8-6806-11ee-abd0-00163e2213cc', '660015', 9, '17:30:00', '20:00:00', '2023-10-11', 'สะพานสี่ 1', 1, 'เปลี่ยนโคมไฟ', 'H-60', '2023-10-11 07:19:39', 1, '2023-10-11 17:30:07'),
(162, '8a8c1cb8-6806-11ee-abd0-00163e2213cc', '660029', 9, '17:30:00', '20:00:00', '2023-10-11', 'ระยอง-มาบข่า', 1, 'เปลี่ยนโคมไฟ', 'H-60', '2023-10-11 07:19:39', 1, '2023-10-11 17:30:07'),
(163, '92b1be8a-680e-11ee-abd0-00163e2213cc', '490141', 9, '17:30:00', '20:00:00', '2023-10-11', 'หัวสนามบิน-บึงทอง', 1, 'สร้าง cover G-35', 'US', '2023-10-11 08:17:09', 2, '2023-10-11 16:49:49'),
(164, '92b1be8a-680e-11ee-abd0-00163e2213cc', '570047', 9, '17:30:00', '20:00:00', '2023-10-11', 'สะพานสี่ 6', 1, 'สร้าง cover G-35', 'US', '2023-10-11 08:17:09', 2, '2023-10-11 16:49:49'),
(165, 'b7ad2aaf-680f-11ee-abd0-00163e2213cc', '480188', 9, '17:30:00', '20:00:00', '2023-10-11', 'รถส่วนตัว', 1, 'ซ่อมรถเข็น ATC', 'US', '2023-10-11 08:25:21', 2, '2023-10-11 16:49:44'),
(168, '7e7b550d-68cd-11ee-abd0-00163e2213cc', '380008', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 1, 'ติ้งตั้งชุดจับแม่แรง', 'CJ-1', '2023-10-12 07:03:49', 2, '2023-10-12 14:05:25'),
(169, 'be42c051-68cd-11ee-abd0-00163e2213cc', '560061', 5, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 0, 'O/H', 'H-32', '2023-10-12 07:05:36', NULL, NULL),
(170, 'feaab1f2-68cd-11ee-abd0-00163e2213cc', '640046', 4, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 0, 'เช็คความเที่ยงตรง', 'H-62', '2023-10-12 07:07:24', NULL, NULL),
(171, '52276a20-68ce-11ee-abd0-00163e2213cc', '470024', 8, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 0, 'สร้างเครื่องยกชิ้นงาน', 'CF-2', '2023-10-12 07:09:44', NULL, NULL),
(172, '7830af3f-68cf-11ee-abd0-00163e2213cc', '580058', 4, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 0, 'ตัดต่อสายพานเตาเผาแข็ง', 'OQ-16', '2023-10-12 07:17:57', NULL, NULL),
(173, 'dc39b31b-68cf-11ee-abd0-00163e2213cc', '640061', 4, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 0, 'เปลี่ยน Air Cylinder ชุดโหลดก่อนเข้าเตา', 'BZ_8', '2023-10-12 07:20:45', NULL, NULL),
(174, '3f847422-68d0-11ee-abd0-00163e2213cc', '470047', 3, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 0, 'Support Spare part ', 'M/C', '2023-10-12 07:23:32', NULL, NULL),
(175, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '480170', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(176, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '630015', 9, '08:00:00', '17:00:00', '2023-10-13', 'โป่งสะเก็ต-บุญส่ง', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(177, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '640004', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(178, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '640062', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(179, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '650013', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(180, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '650034', 9, '08:00:00', '17:00:00', '2023-10-13', 'รถส่วนตัว', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(181, '26cd3f10-68d1-11ee-abd0-00163e2213cc', '660015', 9, '08:00:00', '17:00:00', '2023-10-13', 'สะพานสี่ 1', 2, 'ติดตั้งระบบ จับชิ้นงาน', 'JC-1', '2023-10-12 07:30:00', 1, '2023-10-12 15:20:23'),
(182, '33def608-68d3-11ee-abd0-00163e2213cc', '660007', 4, '08:00:00', '17:00:00', '2023-10-14', 'รถส่วนตัว', 0, 'แก้ไข Hanger', 'BZ-7', '2023-10-12 07:44:41', NULL, NULL),
(183, '7aeaf5c6-68d3-11ee-abd0-00163e2213cc', '580058', 4, '08:00:00', '17:00:00', '2023-10-14', 'รถส่วนตัว', 0, 'เปลี่ยนสายพานเตาเผาแข็ง', 'OQ-16', '2023-10-12 07:46:40', NULL, NULL),
(184, 'f912747f-68d4-11ee-abd0-00163e2213cc', '480188', 8, '17:30:00', '20:00:00', '2023-10-12', 'สะพานสี่ 2', 0, 'อุปกรณ์ ชุด โหลด G-96', 'US', '2023-10-12 07:57:21', NULL, NULL),
(185, 'f912747f-68d4-11ee-abd0-00163e2213cc', '490141', 8, '17:30:00', '20:00:00', '2023-10-12', 'หัวสนามบิน-บึงทอง', 0, 'อุปกรณ์ ชุด โหลด G-96', 'US', '2023-10-12 07:57:21', NULL, NULL),
(186, 'f912747f-68d4-11ee-abd0-00163e2213cc', '66T046', 8, '17:30:00', '20:00:00', '2023-10-12', 'มาบเตย-ม.ปาล์มวิลล่า', 0, 'อุปกรณ์ ชุด โหลด G-96', 'US', '2023-10-12 07:57:21', NULL, NULL),
(187, 'f912747f-68d4-11ee-abd0-00163e2213cc', '66T045', 8, '17:30:00', '20:00:00', '2023-10-12', 'รถส่วนตัว', 0, 'อุปกรณ์ ชุด โหลด G-96', 'US', '2023-10-12 07:57:21', NULL, NULL),
(188, '240cd60e-68d5-11ee-abd0-00163e2213cc', '380008', 4, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'เปลี่ยน Bearing motor ', 'P-50', '2023-10-12 07:58:33', NULL, NULL),
(189, '5b8ecbe5-68d5-11ee-abd0-00163e2213cc', '500046', 5, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'O/H', 'H-32 ', '2023-10-12 08:00:06', NULL, NULL),
(190, '5b8ecbe5-68d5-11ee-abd0-00163e2213cc', '560061', 5, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'O/H', 'H-32 ', '2023-10-12 08:00:06', NULL, NULL),
(191, '94e555da-68d5-11ee-abd0-00163e2213cc', '580011', 4, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'PM', 'H/D M6', '2023-10-12 08:01:43', NULL, NULL),
(192, 'de2a9bdd-68d5-11ee-abd0-00163e2213cc', '580058', 4, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'เปลี่ยนBearing ชุดโหลด', 'BZ-8', '2023-10-12 08:03:45', NULL, NULL),
(193, '3b8a5bf0-68d6-11ee-abd0-00163e2213cc', '480020', 4, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'เปลี่ยนลูกยางถังปั่น', 'BZ-2', '2023-10-12 08:06:22', NULL, NULL),
(194, '3b8a5bf0-68d6-11ee-abd0-00163e2213cc', '640061', 4, '08:00:00', '17:00:00', '2023-10-15', 'รถส่วนตัว', 0, 'เปลี่ยนลูกยางถังปั่น', 'BZ-2', '2023-10-12 08:06:22', NULL, NULL),
(195, 'f017ad77-68d7-11ee-abd0-00163e2213cc', '66T031', 4, '17:30:00', '20:00:00', '2023-10-12', 'สะพานสี่ 1', 0, 'PM Conveyor', 'US', '2023-10-12 08:18:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_roles`
--

INSERT INTO `tb_roles` (`id`, `roles`) VALUES
(2, 'Repair/BM'),
(3, 'Stand by/Support'),
(4, 'PM'),
(5, 'Overhual'),
(6, 'Control'),
(7, 'Improvement'),
(8, 'Project'),
(9, 'Job Request'),
(10, 'Training');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sect`
--

CREATE TABLE `tb_sect` (
  `id` int(11) NOT NULL,
  `sects` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tb_sect`
--

INSERT INTO `tb_sect` (`id`, `sects`) VALUES
(1, 'EL'),
(2, 'MC'),
(3, 'US');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_approver`
--
ALTER TABLE `tb_approver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cars`
--
ALTER TABLE `tb_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_employees`
--
ALTER TABLE `tb_employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_id` (`employees_id`);

--
-- Indexes for table `tb_ot_request`
--
ALTER TABLE `tb_ot_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sect`
--
ALTER TABLE `tb_sect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_approver`
--
ALTER TABLE `tb_approver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_cars`
--
ALTER TABLE `tb_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_employees`
--
ALTER TABLE `tb_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tb_ot_request`
--
ALTER TABLE `tb_ot_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_sect`
--
ALTER TABLE `tb_sect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
