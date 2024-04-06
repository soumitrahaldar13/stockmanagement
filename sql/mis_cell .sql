-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2024 at 03:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis_cell`
--

-- --------------------------------------------------------

--
-- Table structure for table `amc`
--

CREATE TABLE `amc` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `Reminder_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amc`
--

INSERT INTO `amc` (`id`, `name`, `address`, `mobile`, `start_date`, `end_date`, `Reminder_date`) VALUES
(6, 'AMC1', 'AMC PRD', '0987654321', '2024-03-01', '2024-05-31', '2024-04-10'),
(7, 'AMC2', 'test', '0999999999', '2024-03-27', '2025-07-27', '2024-04-28'),
(8, 'AMC3', 'AMC3', '7878787878', '2023-01-01', '2023-06-30', '2023-02-02');

-- --------------------------------------------------------

--
-- Table structure for table `byback`
--

CREATE TABLE `byback` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `serial_no` varchar(100) NOT NULL,
  `ewaste_date` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `byback`
--

INSERT INTO `byback` (`id`, `product_name`, `serial_no`, `ewaste_date`, `date`, `active`) VALUES
(1, 'ups', '1234321hp', '2024-04-03', 'NAN', '0'),
(2, 'ups', 'csacc', '2024-04-03', 'NAN', '0'),
(3, 'ups', 'dell123serialno', '2024-04-03', 'NAN', '0'),
(4, 'ups', 'ups00000', '2024-04-04', 'NAN', '0'),
(5, 'ups', 'ups11111', '2024-04-04', 'NAN', '0'),
(6, 'UPS', 'serial0099', '2024-04-04', 'NAN', '0'),
(7, 'UPS', 'serial1m', '2024-04-05', 'NAN', '0'),
(8, 'UPS', 'serial1cpu', '2024-04-06', 'NAN', '0'),
(9, 'monitor', 'serial2m', '2024-04-06', 'NAN', '0'),
(10, 'cpu', 'serial2c', '2024-04-06', 'NAN', '0'),
(11, 'UPS', 'serial1', '2024-04-06', 'NAN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `id` int(11) NOT NULL,
  `GEM_NO` varchar(100) NOT NULL,
  `GEM_Date` varchar(100) NOT NULL,
  `VENDOR_NAME` varchar(100) NOT NULL,
  `BRAND_NAME` varchar(100) NOT NULL,
  `Serial_Number` varchar(100) NOT NULL,
  `Model_No` varchar(100) NOT NULL,
  `Delevary_Date` varchar(100) NOT NULL,
  `Problem` varchar(100) NOT NULL,
  `START_DATE` varchar(100) NOT NULL,
  `END_DATE` varchar(100) NOT NULL,
  `Defunct` varchar(2) NOT NULL,
  `AMC` varchar(2) NOT NULL,
  `ewaste` varchar(2) NOT NULL,
  `SSD_Capacity` varchar(100) NOT NULL,
  `HDD_Capacity` varchar(100) NOT NULL,
  `Processor` varchar(100) NOT NULL,
  `Processor_Base_Frequency` varchar(100) NOT NULL,
  `ChipSet_Number` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `Optical_Drive` varchar(100) NOT NULL,
  `Graphic_Card` varchar(100) NOT NULL,
  `Wireless` varchar(100) NOT NULL,
  `OS` varchar(100) NOT NULL,
  `OS_Serial_no` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id`, `GEM_NO`, `GEM_Date`, `VENDOR_NAME`, `BRAND_NAME`, `Serial_Number`, `Model_No`, `Delevary_Date`, `Problem`, `START_DATE`, `END_DATE`, `Defunct`, `AMC`, `ewaste`, `SSD_Capacity`, `HDD_Capacity`, `Processor`, `Processor_Base_Frequency`, `ChipSet_Number`, `RAM`, `Optical_Drive`, `Graphic_Card`, `Wireless`, `OS`, `OS_Serial_no`) VALUES
(1, 'gem1cpu', '2024-04-05', 'VENDOR4', 'brand1cpu', 'serial1cpu', 'model1cpu', 'NAN', 'problrmpu', '2024-04-01', '2024-04-06', '1', '1', '1', '128 cpu', '500cpu', '1.2 cpu', '200 cpu', 'chip_cpu', 'ramcpu', 'optical_cpu', 'gcd cpu', 'yes cpu', 'os1cpu', 'os1ccpu'),
(2, 'gem2c', '2024-04-06', 'VENDOR4', 'brand1c', 'serial2c', 'model2c', 'NAN', 'NAN', 'NAN', 'NAN', '1', '0', '1', 'SSD_c', 'HDDc', 'processor_c', 'prosessor_no_c', 'chip_c', 'ramc', 'optical_c', 'gcd c', 'yes c', 'os1c', 'os1cc'),
(3, 'gem2cpu', '2024-04-06', 'VENDOR4', 'brand2cpu', 'serial2cpu', 'model2cpu', '2024-04-06', 'abccpu', 'NAN', 'NAN', '0', '1', '0', 'ssdcpu', 'hddcpu', 'processorcpu', 'pbf cpu', 'chipcpu', 'ramcpu', 'od_cpu', 'gcd_cpu', 'wireless-cpu', 'os_cpu', 'sono-cpu');

-- --------------------------------------------------------

--
-- Table structure for table `ip`
--

CREATE TABLE `ip` (
  `ID` int(11) NOT NULL,
  `IP` varchar(100) NOT NULL,
  `ACTIVE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ip`
--

INSERT INTO `ip` (`ID`, `IP`, `ACTIVE`) VALUES
(1, '10.5.16.30', '1'),
(3, '10.5.16.31', '1'),
(4, '10.5.16.32', '1'),
(5, '10.5.16.33', '0'),
(6, '10.5.16.34', '0'),
(7, '10.5.16.35', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `image` varchar(1111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `NAME`, `password`, `image`) VALUES
(2, 'debu', '12345', 'bimal pp new.jpg'),
(3, 'sanjay', '12345', 'sanjay.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `id` int(11) NOT NULL,
  `GEM_NO` varchar(100) NOT NULL,
  `GEM_Date` varchar(100) NOT NULL,
  `VENDOR_NAME` varchar(100) NOT NULL,
  `BRAND_NAME` varchar(100) NOT NULL,
  `Serial_Number` varchar(100) NOT NULL,
  `Model_No` varchar(100) NOT NULL,
  `Delevary_Date` varchar(100) NOT NULL,
  `Problem` varchar(100) NOT NULL,
  `START_DATE` varchar(100) NOT NULL,
  `END_DATE` varchar(100) NOT NULL,
  `Defunct` varchar(2) NOT NULL,
  `AMC` varchar(2) NOT NULL,
  `ewaste` varchar(2) NOT NULL,
  `Display_Size` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`id`, `GEM_NO`, `GEM_Date`, `VENDOR_NAME`, `BRAND_NAME`, `Serial_Number`, `Model_No`, `Delevary_Date`, `Problem`, `START_DATE`, `END_DATE`, `Defunct`, `AMC`, `ewaste`, `Display_Size`) VALUES
(14, 'gem1m', '2024-04-05', 'VENDOR4', 'brand1m', 'serial1m', 'model1m', 'NAN', 'mmm', 'NAN', 'NAN', '1', '1', '1', '23m'),
(15, 'gem2', '2024-04-06', 'VENDOR4', 'brand2', 'serial2m', 'model2', 'NAN', 'frfeff', 'NAN', 'NAN', '1', '0', '1', '32'),
(16, 'gem3', '2024-04-06', 'VENDOR4', 'brend3m', 'serial3m', 'model3m', '2024-04-06', 'NAN', 'NAN', 'NAN', '0', '0', '0', '24m');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `ACTIVE` varchar(10) NOT NULL,
  `url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `NAME`, `ACTIVE`, `url`) VALUES
(1, 'ups', '1', 'admin_UPS.php'),
(2, 'monitor', '1', 'admin_monitor.php'),
(3, 'cpu', '1', 'admin_CPU.php');

-- --------------------------------------------------------

--
-- Table structure for table `product_add`
--

CREATE TABLE `product_add` (
  `ID` int(11) NOT NULL,
  `IP` varchar(100) NOT NULL,
  `USER_MOBILE` varchar(11) NOT NULL,
  `PRODUCT NAME` varchar(100) NOT NULL,
  `SERIAL_NO` varchar(100) NOT NULL,
  `DATE_OF_ISSUE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_add`
--

INSERT INTO `product_add` (`ID`, `IP`, `USER_MOBILE`, `PRODUCT NAME`, `SERIAL_NO`, `DATE_OF_ISSUE`) VALUES
(16, '10.5.16.31', '1223456789', 'cpu', 'serial2cpu', '2024-04-06'),
(17, '10.5.16.31', '1223456789', 'monitor', 'serial3m', '2024-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `ups`
--

CREATE TABLE `ups` (
  `id` int(11) NOT NULL,
  `GEM_NO` varchar(100) NOT NULL,
  `GEM_Date` varchar(100) NOT NULL,
  `VENDOR_NAME` varchar(100) NOT NULL,
  `BRAND_NAME` varchar(100) NOT NULL,
  `Serial_Number` varchar(100) NOT NULL,
  `Model_No` varchar(100) NOT NULL,
  `Delevary_Date` varchar(100) NOT NULL,
  `Problem` varchar(100) NOT NULL,
  `START_DATE` varchar(100) NOT NULL,
  `END_DATE` varchar(100) NOT NULL,
  `Defunct` varchar(2) NOT NULL,
  `AMC` varchar(2) NOT NULL,
  `ewaste` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ups`
--

INSERT INTO `ups` (`id`, `GEM_NO`, `GEM_Date`, `VENDOR_NAME`, `BRAND_NAME`, `Serial_Number`, `Model_No`, `Delevary_Date`, `Problem`, `START_DATE`, `END_DATE`, `Defunct`, `AMC`, `ewaste`) VALUES
(1, 'gem109', '2024-03-30', 'abc', 'hp09', 'sddf235609', 'mfp09', 'NAN', 'NAN', '2024-03-01', '2024-03-31', '1', '1', '0'),
(6, '000000', '0001-01-01', 'vendor1', 'hp', '1234321hp', 'hp mfp', 'NAN', 'not runningjjjj', 'NAN', 'NAN', '0', '1', '1'),
(7, '123gem', '2024-03-31', 'vendor2', 'dell', 'dell123serialno', 'dell123model', 'NAN', 'NAN', 'NAN', 'NAN', '0', '1', '1'),
(8, 'gem00000', '2024-04-02', 'VENDOR4', 'ups brand', 'ups00000', 'upsmodel', 'NAN', 'huhbuhbuybbhy', 'NAN', 'NAN', '0', '1', '1'),
(9, 'gem1111111', '2024-04-02', 'VENDOR4', 'ups brand', 'ups11111', 'upsmodel', 'NAN', 'dispose off', 'NAN', 'NAN', '0', '1', '1'),
(10, 'gem22222', '2024-04-01', 'VENDOR4', 'brand22222', 'serial22222', 'model22222', 'NAN', 'NAN', 'NAN', 'NAN', '1', '1', '1'),
(11, 'zcsdc', '2024-04-05', 'vendor3', 'cccssccs', 'csacc', 'saccsc', 'NAN', 'NAN', 'NAN', 'NAN', '1', '0', '1'),
(12, 'gem0099', '2024-04-03', 'vendor2', 'hp0099', 'serial0099', 'hpmfp0099', 'NAN', 'wefefce', 'NAN', 'NAN', '1', '1', '1'),
(13, '12124ups', '2024-04-01', 'VENDOR4', 'legend', 'ups12345', '12', '', 'NAN', '2024-04-01', '2026-04-01', '1', '0', '0'),
(14, 'gem11', '2024-04-05', 'VENDOR4', 'brand1', 'serial1', 'model1', '', 'sdcdcdc', 'NAN', 'NAN', '1', '0', '1'),
(15, 'gem_ups', '2024-04-06', 'VENDOR4', 'brandups', 'serialups', 'ups', 'NAN', 'NAN', 'NAN', 'NAN', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `DESIGNATION` varchar(100) NOT NULL,
  `CELL` varchar(100) NOT NULL,
  `FLOOR_NO` varchar(100) NOT NULL,
  `MOBILE_NO` varchar(100) NOT NULL,
  `emp_code` varchar(100) NOT NULL,
  `active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NAME`, `DESIGNATION`, `CELL`, `FLOOR_NO`, `MOBILE_NO`, `emp_code`, `active`) VALUES
(7, 'debabrata biswas', ' AIO', 'IT CELL', '9', '1223456789', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `DOR` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`ID`, `NAME`, `Address`, `mobile`, `DOR`) VALUES
(1, 'vendor2', '    prdd', '1234567899', ''),
(4, 'vendor1', '    vendor_prdd', '98765432100', '23-03-24'),
(5, 'vendor3', 'jani na', '7676767676', '25-03-24'),
(6, 'VENDOR4', ' VENDOR', '9898989899', '28-03-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amc`
--
ALTER TABLE `amc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `byback`
--
ALTER TABLE `byback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip`
--
ALTER TABLE `ip`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product_add`
--
ALTER TABLE `product_add`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ups`
--
ALTER TABLE `ups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amc`
--
ALTER TABLE `amc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `byback`
--
ALTER TABLE `byback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ip`
--
ALTER TABLE `ip`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_add`
--
ALTER TABLE `product_add`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ups`
--
ALTER TABLE `ups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
