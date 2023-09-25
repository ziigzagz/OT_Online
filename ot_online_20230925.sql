-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2023 at 05:38 PM
-- Server version: 10.5.15-MariaDB-0+deb11u1-log
-- PHP Version: 8.2.8

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_approver`
--

INSERT INTO `tb_approver` (`id`, `username`, `password`, `createdate`, `sect`) VALUES
(1, 'supoj', '$2y$10$mzxgetpHFn2b67b.5Z3mwOrFs8IjIWZuNjjp6kmGlVc5KB7MxAveS', '2023-09-04 05:46:59', '1'),
(2, 'santi', '$2y$10$mzxgetpHFn2b67b.5Z3mwOrFs8IjIWZuNjjp6kmGlVc5KB7MxAveS', '2023-09-04 05:46:59', '2,3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cars`
--

CREATE TABLE `tb_cars` (
  `id` int(11) NOT NULL,
  `cars` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(25, 'สะพานสี่ 12');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(38, '490141', 'นายยงยุท เสณีกุล', 3, 16, '2023-09-02 16:17:42'),
(39, '510079', 'นายบุญชัย ทวีชาติ', 3, 17, '2023-09-02 16:17:42'),
(40, '570007', 'นายพรทวี วงษ์ษา', 3, 18, '2023-09-02 16:17:42'),
(41, '570047', 'นายอักขจร ยอดดี', 3, 19, '2023-09-02 16:17:42'),
(42, '65T110', 'นายพร้อมพงษ์ เครือแวงมล', 3, 20, '2023-09-02 16:17:42'),
(43, '66W013', 'นายสุรพงษ์ ประทุมทอง', 3, 21, '2023-09-02 16:17:42'),
(44, '66W014', 'นายอนุวัฒน์ โพนรัตน์', 3, 22, '2023-09-02 16:17:42'),
(45, '66W015', 'นายสุธิราช เดชโคบุตร', 3, 23, '2023-09-02 16:17:42'),
(46, '490157', 'นายนะวิทชัย ศรีหลิ่ง', 3, 24, '2023-09-02 16:17:42'),
(47, '400009', 'นายปัญญา พิทักษ์ชาติ', 3, 25, '2023-09-02 16:17:42');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_ot_request`
--

INSERT INTO `tb_ot_request` (`id`, `request_key`, `employee_id`, `roles_id`, `ot_starttime`, `ot_endtime`, `ot_date`, `cars_text`, `approved_status`, `work_detail`, `machine_name`, `createdate`, `approved_by`, `approved_datetime`) VALUES
(60, '7977198f-4c95-11ee-b803-90b11c26834e', '380008', 4, '17:30:00', '20:00:00', '2023-09-05', 'มาบเตย-ม.ปาล์มวิลล่า', 1, 'เปลี่ยนสายเครื่อง ', 'BZ-07', '2023-09-06 09:12:16', 2, '2023-09-07 09:37:45'),
(61, '0a21742f-4d28-11ee-b803-90b11c26834e', '510079', 2, '08:00:00', '17:00:00', '2023-09-10', 'สะพานสี่ 4', 0, 'ทำงาน', 'AOQ', '2023-09-07 02:41:25', NULL, NULL),
(62, '4cf5e694-4d2b-11ee-b803-90b11c26834e', '470047', 3, '10:06:00', '10:08:00', '2023-09-22', 'ม.สมาร์ทแลนด์นิวสไตล์', 0, 'test', 'test', '2023-09-07 03:04:46', NULL, NULL),
(63, 'b7211619-4d2b-11ee-b803-90b11c26834e', '470047', 7, '10:09:00', '10:13:00', '2023-09-21', 'ม.สมาร์ทแลนด์นิวสไตล์', 1, 'test', 'test', '2023-09-07 03:07:44', 2, '2023-09-12 15:51:08'),
(64, 'c8191724-4d2d-11ee-b803-90b11c26834e', '470047', 7, '10:09:00', '10:13:00', '2023-09-21', 'ม.สมาร์ทแลนด์นิวสไตล์', 0, 'test', 'test', '2023-09-07 03:22:32', NULL, NULL),
(65, '41a42c2a-514a-11ee-b803-90b11c26834e', '380008', 2, '17:15:00', '20:00:00', '2023-09-12', 'Maptoey-University Palm Villa', 2, 'ซ่อมเครื่องจักร', 'AOQ-5', '2023-09-12 08:56:26', 2, '2023-09-12 16:05:03'),
(66, '41a42c2a-514a-11ee-b803-90b11c26834e', '380013', 2, '17:15:00', '20:00:00', '2023-09-12', 'Pariya University - Sasi Market', 0, 'ซ่อมเครื่องจักร', 'AOQ-5', '2023-09-12 08:56:26', NULL, NULL),
(67, '41a42c2a-514a-11ee-b803-90b11c26834e', '470024', 2, '17:15:00', '20:00:00', '2023-09-12', 'Golden Rainbow - Jindarom University 3', 0, 'ซ่อมเครื่องจักร', 'AOQ-5', '2023-09-12 08:56:26', NULL, NULL),
(68, '643ce3a8-538f-11ee-b803-90b11c26834e', '650034', 8, '17:30:00', '20:00:00', '2023-09-15', 'สะพานสี่ 1', 1, 'ซ่อม', 'HD ', '2023-09-15 06:16:22', 1, '2023-09-15 13:17:01'),
(69, 'a68aa493-5397-11ee-b803-90b11c26834e', '380013', 3, '17:30:00', '20:00:00', '2023-09-15', 'ม.ปารียา-ตลาดศศิ', 0, 'เปลี่ยน Barrel', 'BZ-08', '2023-09-15 07:15:29', NULL, NULL),
(70, 'a68aa493-5397-11ee-b803-90b11c26834e', '470047', 3, '17:30:00', '20:00:00', '2023-09-15', 'ม.สมาร์ทแลนด์นิวสไตล์', 0, 'เปลี่ยน Barrel', 'BZ-08', '2023-09-15 07:15:29', NULL, NULL),
(71, '655e78f6-539a-11ee-b803-90b11c26834e', '480092', 4, '17:30:00', '20:00:00', '2023-09-15', 'สะพานสี่ 1', 0, 'PM พีุ่ดโหลดBZฝั่งซ้าย BZ', 'BZ-06', '2023-09-15 07:35:08', NULL, NULL),
(72, '9ef5f453-539c-11ee-b803-90b11c26834e', '470024', 2, '17:30:00', '20:00:00', '2023-09-15', 'รุ้งสีทอง-ม.จินดารมย์ 3', 1, 'Repair GM', 'GM-4', '2023-09-15 07:51:04', 2, '2023-09-15 14:58:44'),
(73, 'cc26dfe4-53b4-11ee-b803-90b11c26834e', '470047', 7, '10:09:00', '10:13:00', '2023-09-21', 'ม.สมาร์ทแลนด์นิวสไตล์', 0, 'test', 'test', '2023-09-15 10:44:07', NULL, NULL),
(74, '474dd0a5-5487-11ee-b803-90b11c26834e', '480188', 4, '17:30:00', '20:00:00', '2023-09-16', 'สะพานสี่ 2', 0, 'ช่อมชุด land ', 'BZ-01', '2023-09-16 11:50:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_cars`
--
ALTER TABLE `tb_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_employees`
--
ALTER TABLE `tb_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_ot_request`
--
ALTER TABLE `tb_ot_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

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
