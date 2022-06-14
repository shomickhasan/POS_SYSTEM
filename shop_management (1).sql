-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 01:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE `tbl_branch` (
  `branch_id` varchar(8) NOT NULL,
  `branch_name` varchar(40) NOT NULL,
  `branch_location` text NOT NULL,
  `branch_email` varchar(40) NOT NULL,
  `branch_phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`branch_id`, `branch_name`, `branch_location`, `branch_email`, `branch_phone`) VALUES
('BR010', 'Ashadgate', ' Mirpur Road', 'ashadgatebranch@gmail.com', '2434354678'),
('BR0101', 'Natore  Branch', ' Natore Sadar', 'natorebranch@gmail.com', '01734351323'),
('BR02', 'Dhanmondi', 'Dhanmondi 27', 'branch27@gmail.com', '13243456'),
('BR03', 'Mohammadpur ', ' Solimullha Roal Mohammadpur Dhaka 1207', 'mohammadpurbranch@gmail.com', '+8801754253302'),
('BR06', 'Jatrabari  Brinch', ' Jatrabari Fly Over Er Necha', 'necha@gmail.com', '02392483574'),
('BR10', 'Sukrabad Branch', ' Sukrabad Kachabajajr', 'sukrabadbranch@gmail.com', '01997323723'),
('bre', 'Bakoil', ' Porsha', 'zohirul@gmail.com', '01798177935');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company`
--

CREATE TABLE `tbl_company` (
  `company_id` int(11) NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  `Company_name` varchar(50) NOT NULL,
  `company_address` text NOT NULL,
  `company_phone` varchar(20) NOT NULL,
  `company_email` int(11) NOT NULL,
  `company_manager_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_company`
--

INSERT INTO `tbl_company` (`company_id`, `branch_id`, `Company_name`, `company_address`, `company_phone`, `company_email`, `company_manager_name`) VALUES
(1, 'BR010', 'Sazzad  boetrplaoi', 'serajgojn', '3455678', 0, 0),
(2, 'BR010', 'Safa Enter Price', 'mohammadpur', '4657687', 0, 0),
(3, 'BR010', 'shopno bainghouse', 'uttora Dhaka', '01734287823', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `branch_id` varchar(20) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employe`
--

CREATE TABLE `tbl_employe` (
  `employe_id` int(20) NOT NULL,
  `branch_id` varchar(15) NOT NULL,
  `employe_designation` varchar(50) NOT NULL,
  `employe_name` varchar(50) NOT NULL,
  `employe_address` text NOT NULL,
  `employe_NID` varchar(40) NOT NULL,
  `employe_phone` varchar(15) NOT NULL,
  `employe_email` varchar(50) NOT NULL,
  `employe_joningDate` date NOT NULL,
  `employe_salary` int(60) NOT NULL,
  `employe_password` varchar(100) NOT NULL,
  `employe_status` int(3) NOT NULL COMMENT 'for 1 set Active \r\nand 2 set Deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employe`
--

INSERT INTO `tbl_employe` (`employe_id`, `branch_id`, `employe_designation`, `employe_name`, `employe_address`, `employe_NID`, `employe_phone`, `employe_email`, `employe_joningDate`, `employe_salary`, `employe_password`, `employe_status`) VALUES
(53, 'BR02', 'Manager', 'Md.Shomick Hasan', 'Dhanmondi', '12345678', '01754253301', 'shomick@gmail.com', '2022-04-13', 2000, 'd41d8cd98f00b204e9800998ecf8427e', 1),
(62, 'BR05', 'Manager', 'shazzad hossain shawan', 'Dhanmondi', '1534288976', '01794594594', 'sazzad@gmail.com', '2022-04-24', 50000, '1dd959253470d837eaefd54567327231', 1),
(63, 'BR06', 'Manager', 'Sazzad Hossain shawan', 'serajgonj, Ullapara', '1918727222', '01752246071', 'sazzad191@gmail.com', '2022-04-24', 50000, '1dd959253470d837eaefd54567327231', 1),
(64, 'BR010', 'Manager', 'shomick', 'natore', '24576789867', '01734197067', 'shomick12345@gmail.com', '2022-04-24', 40000, '827ccb0eea8a706c4c34a16891f84e7b', 1),
(65, 'BR010', '', '', '', '', '', '', '0000-00-00', 0, '', 0),
(69, 'BR0101', 'Manager', 'jony islam', 'kafuria Natore', '45468586885', '01785483858', 'jony@gmail.com', '2022-05-20', 20000, '827ccb0eea8a706c4c34a16891f84e7b', 1),
(70, 'bre', 'Manager', 'Zohirul', 'Dhanmondi', '98987666', '01798177935', 'zohirul@gmail', '2022-05-04', 34555, 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `product_id` int(50) NOT NULL,
  `branch_id` varchar(80) NOT NULL,
  `product_code` varchar(100) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `product_drescription` text NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `product_size` varchar(50) NOT NULL,
  `product_cost_price` int(50) NOT NULL,
  `product_sell_price` int(50) NOT NULL,
  `product_quqntity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `branch_id`, `product_code`, `product_name`, `product_drescription`, `product_type`, `product_size`, `product_cost_price`, `product_sell_price`, `product_quqntity`) VALUES
(1, 'BR010', 'PD005', 'T-shirt', 'cotton T-shirt  ,  best Quslity, ', 'men', 's,m,l,xl,xxl', 500, 800, 70),
(2, 'BR02', '', '', '', '', '', 0, 0, 40),
(2, 'BR02', 'PD33109', 'T-Shirt', 'all color avalable', 'Fashion', 's,m,l,xl,xxl', 2000000000, 5000000, 80),
(3, 'BR02', '', '', '', '', '', 0, 0, 0),
(4, 'BR010', 'PDL0', 'Lungi', 'cotton', 'men', 'xl', 200, 345, 0),
(191, 'BR06', '1911', 'weed', 'tis is veray silkey\r\n', 'madattion', 'xxl', 650, 700, 1000),
(192, 'BR010', 'SG001', 'Sunglass', 'orginal Quality ', 'fashion', '10', 600, 800, 55),
(193, 'BR010', 'JP001', 'Jins Pant', '', 'man Women', 's,m,l,xl,xxl', 1500, 1800, 10),
(194, 'BR0101', 'PD0110', 'panjabi', 'cotton', 'Man Kids', '40 42 44', 1400, 1800, 20),
(195, 'bre', 'yiyuiyi', '', 'hyhi', 'jyhiyhi', 'x', 23344, 300, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_purches_detals`
--

CREATE TABLE `tbl_purches_detals` (
  `purches_detals_id` int(11) NOT NULL,
  `br_id` varchar(20) NOT NULL,
  `company_id` int(40) NOT NULL,
  `purches_date` date NOT NULL,
  `invoice_number` int(50) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `purches_price` int(50) NOT NULL,
  `purches_quantity` int(50) NOT NULL,
  `total_price` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_purches_detals`
--

INSERT INTO `tbl_purches_detals` (`purches_detals_id`, `br_id`, `company_id`, `purches_date`, `invoice_number`, `product_code`, `product_name`, `purches_price`, `purches_quantity`, `total_price`) VALUES
(52, 'BR010', 1, '2022-04-28', 12345, 'JP001', 'Jins Pant', 1500, 10, 15000),
(53, 'BR010', 2, '2022-04-28', 12345, 'SG001', 'Sunglass', 600, 3, 1800),
(54, 'BR010', 1, '2022-04-28', 12345, 'PD005', 'T-shirt', 500, 3, 1500),
(55, 'BR010', 2, '2022-04-28', 54321, 'SG001', 'Sunglass', 600, 1, 600),
(56, 'BR010', 1, '2022-04-28', 12345, 'PD005', 'T-shirt', 500, 1, 500),
(57, 'BR010', 1, '2022-04-28', 12345, 'PD005', 'T-shirt', 500, 1, 500),
(58, 'BR010', 1, '2022-04-28', 12345, 'PD005', 'T-shirt', 500, 2, 1000),
(59, 'BR010', 1, '2022-04-28', 54321, 'SG001', 'Sunglass', 600, 2, 1200),
(60, 'BR010', 1, '2022-04-28', 54321, 'PD005', 'T-shirt', 500, 2, 1000),
(61, 'BR010', 1, '0000-00-00', 0, 'PD005', 'T-shirt', 500, 8, 4000),
(62, 'BR010', 1, '2022-04-28', 54321, 'SG001', 'Sunglass', 600, 6, 3600),
(63, 'BR010', 1, '0000-00-00', 0, 'SG001', 'Sunglass', 600, 5, 3000),
(64, 'BR0101', 1, '2022-05-08', 101110, 'PD0110', 'panjabi', 1400, 20, 28000),
(65, 'bre', 1, '2022-05-04', 12345, 'yiyuiyi', '', 23344, 12, 280128);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `tbl_company`
--
ALTER TABLE `tbl_company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  ADD PRIMARY KEY (`employe_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`product_id`,`product_code`);

--
-- Indexes for table `tbl_purches_detals`
--
ALTER TABLE `tbl_purches_detals`
  ADD PRIMARY KEY (`purches_detals_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_company`
--
ALTER TABLE `tbl_company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_employe`
--
ALTER TABLE `tbl_employe`
  MODIFY `employe_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `tbl_purches_detals`
--
ALTER TABLE `tbl_purches_detals`
  MODIFY `purches_detals_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
