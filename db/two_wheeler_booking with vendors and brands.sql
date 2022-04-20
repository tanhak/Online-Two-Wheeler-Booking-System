-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 06:48 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `two_wheeler_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `cmaster_id` int(11) NOT NULL,
  `bookingdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `cmaster_id`, `bookingdate`) VALUES
(2, 56, '2021-10-10'),
(3, 62, '2021-10-10'),
(4, 63, '2021-10-10'),
(5, 65, '2021-10-10'),
(6, 69, '2021-10-11'),
(7, 74, '2021-11-23'),
(8, 81, '2021-11-26'),
(9, 82, '2021-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(1, 'Yamaha'),
(2, 'Kawasaki'),
(3, 'Yamaha'),
(4, 'Suzuki'),
(5, 'Bajaj'),
(6, 'KTM'),
(7, 'Hero Motor Corp'),
(8, 'TVS'),
(9, 'Yamaha'),
(10, 'Royal Enfield'),
(11, 'Hero Motor Corp'),
(12, 'Bajaj'),
(13, 'Suzuki'),
(14, 'JAWA'),
(15, 'KTM'),
(16, 'Aprilia'),
(17, 'BMW Motorrad'),
(18, 'Indian'),
(19, 'Kawasaki'),
(20, 'Mahindra'),
(21, 'Moto Guzzi'),
(22, 'Triumph');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carddetails`
--

CREATE TABLE `tbl_carddetails` (
  `card_id` int(11) NOT NULL,
  `custid` varchar(50) NOT NULL,
  `cardtype` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `expdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_carddetails`
--

INSERT INTO `tbl_carddetails` (`card_id`, `custid`, `cardtype`, `cardno`, `bank`, `expdate`) VALUES
(1, 'manu@gmail.com', 'small', '123456789123456', 'NOBNK', '2021-11-22'),
(2, '123@gmail.com', 'visa', '1234564789541235', 'NOBNK', '2021-11-23'),
(3, '123@gmail.com', 'master', '', 'NOBNK', '2021-11-26'),
(4, '123@gmail.com', 'master', '', 'NOBNK', '2021-11-26'),
(5, '123@gmail.com', 'master', '', 'NOBNK', '2021-11-26'),
(6, '123@gmail.com', 'master', '', 'NOBNK', '2021-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartchild`
--

CREATE TABLE `tbl_cartchild` (
  `child_id` int(11) NOT NULL,
  `master_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cartchild`
--

INSERT INTO `tbl_cartchild` (`child_id`, `master_id`, `item_id`, `qty`) VALUES
(0, 54, 10, 1),
(0, 55, 14, 1),
(0, 56, 13, 1),
(0, 62, 10, 1),
(0, 63, 15, 1),
(0, 64, 15, 1),
(0, 69, 10, 1),
(0, 72, 10, 1),
(0, 74, 11, 1),
(0, 81, 17, 1),
(0, 82, 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartmaster`
--

CREATE TABLE `tbl_cartmaster` (
  `cmaster_id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `totamt` int(11) NOT NULL,
  `cart_date` date NOT NULL,
  `cart_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cartmaster`
--

INSERT INTO `tbl_cartmaster` (`cmaster_id`, `uname`, `totamt`, `cart_date`, `cart_status`) VALUES
(54, 'manu@gmail.com', 155682, '2021-10-10', 'booked'),
(55, 'manu@gmail.com', 144545, '2021-10-10', 'booked'),
(56, 'manu@gmail.com', 256012, '2021-10-10', 'booked'),
(62, 'ashwindinesh@gmail.com', 155682, '2021-10-10', 'booked'),
(63, 'ashwindinesh@gmail.com', 50000, '2021-10-10', 'booked'),
(64, '123@gmail.com', 50000, '2021-10-10', 'booked'),
(69, 'alvin@gmail.com', 155682, '2021-10-11', 'booked'),
(72, 'manu@gmail.com', 155682, '2021-11-22', 'cartes'),
(74, '123@gmail.com', 144545, '2021-11-23', 'booked'),
(81, '123@gmail.com', 150009, '2021-11-26', 'booked'),
(82, '123@gmail.com', 150009, '2021-11-26', 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_name`) VALUES
(1, 'Scooter'),
(2, 'Cruiser'),
(4, 'Sport'),
(5, 'Commuter'),
(6, 'Street Bike'),
(7, 'Super Bike'),
(8, 'Cafe Racer'),
(9, 'Scrambler'),
(10, 'Adventure'),
(11, 'Moped'),
(12, 'Tourer'),
(13, 'Maxi Scooter');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `c_fname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_hno` varchar(30) NOT NULL,
  `c_district` varchar(50) NOT NULL,
  `c_street` varchar(50) NOT NULL,
  `c_phoneno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `c_fname`, `c_lname`, `c_email`, `c_password`, `c_hno`, `c_district`, `c_street`, `c_phoneno`, `gender`) VALUES
(1, 'manu', 'm', 'manu@gmail.com', 'manu', '2001', 'ekm', 'ekm', '9945754587', 'ekm'),
(2, 'harish', 'k', '123@gmail.com', '123', 'mlk', 'ktm', 'mop', '8578945612', 'm'),
(3, 'Aswin', 'Dinesh', 'ashwindinesh@gmail.com', '123', '1', 'kottayam', 'Mlakal', '1234567852', 'm'),
(4, 'Alvin', 'thomas', 'alvin@gmail.com', '1234', '33', 'Ekm', 'Mulakulam', '1234567895', 'm'),
(5, 'Harish', 'Krishna', '123@gmail.com', '123', '123', 'kottayam', 'mlklm', '8075404685', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `usertype`) VALUES
('manu@gmail.com', 'manu', 'Customer'),
('admin@gmail.com', 'Admin', 'Admin'),
('staff@gmail.com', 'staff', 'Staff'),
('123@gmail.com', '1234', 'Customer'),
('456@gmail.com', '456', 'Staff'),
('popularbajajekm@gmail.com', 'bajaj', 'Vender'),
('kumargupta@gmail.com', '123', 'Staff'),
('popularktm@gmail.com', 'ktm', 'Vender'),
('ashwin@gmail.com', '123', 'Staff'),
('ashwindinesh@gmail.com', '123', 'Customer'),
('alvin@gmail.com', '1234', 'Customer'),
('123@gmail.com', '123', 'Customer'),
('athul@gmail.com', '123', 'Staff'),
('hero@gmail.com', '123', 'Vender'),
('harish@gmail.com', '123', 'Staff'),
('yamaha@gmail.com', '123', 'Vender'),
('hero@gmail.com', '123', 'Vender'),
('bajaj@gmail.com', '123', 'Vender'),
('suzuki@gmail.com', '123', 'Vender'),
('jawa@gmail.com', '123', 'Vender'),
('ktm@gmail.com', '123', 'Vender'),
('aprilia@gmail.com', '123', 'Vender'),
('bmw@gmail.com', '123', 'Vender'),
('indian@gmail.com', '123', 'Vender'),
('kawasaki@gmail.com', '123', 'Vender'),
('mahindra@gmail.com', '123', 'Vender'),
('motoguzzi@gmail.com', '123', 'Vender'),
('triumph@gmail.com', '123', 'Vender'),
('tvs@gmail.com', '123', 'Vender');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` int(11) NOT NULL,
  `booking_id` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `booking_id`, `cardno`, `type`, `payment_date`, `status`) VALUES
(1, '74', '1234564789541235', 'visa', '2021-11-23', 'payed'),
(2, '75', '', 'master', '2021-11-26', 'payed'),
(3, '78', '', 'master', '2021-11-26', 'payed'),
(4, '81', '', 'master', '2021-11-26', 'payed'),
(5, '82', '', 'master', '2021-11-26', 'payed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `staff_id` int(10) NOT NULL,
  `s_fname` varchar(30) NOT NULL,
  `s_lname` varchar(30) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `s_password` varchar(50) NOT NULL,
  `s_hno` varchar(30) NOT NULL,
  `s_district` varchar(50) NOT NULL,
  `s_street` varchar(50) NOT NULL,
  `s_phoneno` varchar(20) NOT NULL,
  `s_salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`staff_id`, `s_fname`, `s_lname`, `s_email`, `s_password`, `s_hno`, `s_district`, `s_street`, `s_phoneno`, `s_salary`) VALUES
(2, 'Kumar', 'Gupta', 'kumargupta@gmail.com', '123', '33', 'kottayam', 'mlklm', '7896548512', '20123'),
(3, 'Ashwin', 'Dinesh', 'ashwin@gmail.com', '123', '2', 'Vaikom', 'mop', '9605587690', '200000'),
(4, 'athul', 's', 'athul@gmail.com', '123', '3', 'ekm', 'kaloor', '9874563210', '15000'),
(5, 'Harish', 'Krishna', 'harish@gmail.com', '123', 'Radhas', 'Kottayam', 'Mulakulam', '8075404685', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE `tbl_subcategory` (
  `scat_id` int(11) NOT NULL,
  `cat_id` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subcategory`
--

INSERT INTO `tbl_subcategory` (`scat_id`, `cat_id`, `cat_name`) VALUES
(1, '1', 'power'),
(2, '6', 'sub 250cc');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ vehicle`
--

CREATE TABLE `tbl_ vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `scat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_desc` varchar(1500) NOT NULL,
  `ex_showroom` varchar(20) NOT NULL,
  `segmaent` varchar(50) NOT NULL,
  `milage` varchar(50) NOT NULL,
  `Cubic_cappacity` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `Weight` int(11) NOT NULL,
  `bhp` int(11) NOT NULL,
  `transmition` int(11) NOT NULL,
  `tankcapacity` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `cid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ vehicle`
--

INSERT INTO `tbl_ vehicle` (`vehicle_id`, `scat_id`, `brand_id`, `v_name`, `v_desc`, `ex_showroom`, `segmaent`, `milage`, `Cubic_cappacity`, `color`, `Weight`, `bhp`, `transmition`, `tankcapacity`, `Image`, `uname`, `cid`) VALUES
(10, 2, 5, 'NS 200', 'Indias Most loved sports bike.', '155682', 'Street Bike', '44KMpl', '199CC', 'White Metallic', 196, 24, 6, 13, 'pngwing.com (22).png', 'popularbajajekm@gmail.com', 1),
(11, 2, 5, 'dfsf', 'asfasfas', '144545', 'drtdd', '55', '124', 'vgde', 125, 25, 5, 12, 'pngwing.com (22).png', 'popularbajajekm@gmail.com', 2),
(12, 2, 5, 'errty', 'asfasfas', '284545', 'yui', '45', '127', 'vgde', 125, 25, 5, 12, 'pngwing.com (22).png', 'popularbajajekm@gmail.com', 3),
(13, 2, 1, 'KTM RC 200', 'The fastest indian', '256012', 'drtdd', '55', '127', 'Matte White', 148, 25, 6, 9, 'pngwing.com (23).png', 'popularktm@gmail.com', 6),
(14, 1, 1, 'errty', 'asfasfas', '144545', 'drtdd', '45', '124', 'vgde', 125, 25, 6, 12, 'pngwing.com (23).png', 'popularktm@gmail.com', 7),
(15, 2, 5, 'XL100', 'MOped', '50000', 'moped', '102', '50 CC', 'White', 100, 4, 0, 8, 'pngwing.com (24).png', 'popularbajajekm@gmail.com', 11),
(17, 2, 7, 'Xpulse 200', 'any roader', '150009', '199', '44KMpl', '199CC', 'Black', 196, 24, 5, 13, 'pngwing.com (25).png', 'hero@gmail.com', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender`
--

CREATE TABLE `tbl_vender` (
  `vender_id` int(10) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `v_name` varchar(30) NOT NULL,
  `v_email` varchar(50) NOT NULL,
  `v_district` varchar(50) NOT NULL,
  `v_street` varchar(50) NOT NULL,
  `v_phoneno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_vender`
--

INSERT INTO `tbl_vender` (`vender_id`, `staff_id`, `v_name`, `v_email`, `v_district`, `v_street`, `v_phoneno`) VALUES
(1, '', 'popular bajaj', 'popularbajajekm@gmail.com', 'ekm', 'mop', '7896541258'),
(2, '', 'Popular KTM', 'popularktm@gmail.com', 'kottayam', 'mlklm', '1234567895'),
(4, 'Harish', 'Indel Automotives Kochi Yamaha', 'yamaha@gmail.com', 'Ernakulam', 'Changambuzha road', '0482911900'),
(5, 'Harish', 'FOCUZ BIWHEELERS Hero', 'hero@gmail.com', 'Ernakulam', 'Manorama Junction', '7094423170'),
(6, 'Harish', 'Royal Bajaj', 'bajaj@gmail.com', 'Ernakulam', 'Container road', '9745781555'),
(7, 'Harish', 'VTJ Suzuki', 'suzuki@gmail.com', 'Ernakulam', 'Maradu P.O', '9745430001'),
(8, 'Harish', 'Classic Motors Jawa', 'jawa@gmail.com', 'Ernakulam', 'Edappally', '7902260000'),
(9, 'Harish', 'VYTTILA KTM', 'ktm@gmail.com', 'Ernakulam', 'Janatha Junction', '8129820906'),
(10, 'Harish', 'Jey Motors Aprilia', 'aprilia@gmail.com', 'Ernakulam', 'Janatha Junction', '04859213'),
(11, 'Harish', 'EVM Autokraft Bmw', 'bmw@gmail.com', 'Ernakulam', 'Kalamassery South', '7558889515'),
(12, 'Harish', 'INDIAN MOTORCYCLE COCHIN', 'indian@gmail.com', 'Ernakulam', 'Vyttila', '9899797999'),
(13, 'Harish', 'Kawasaki Cochin', 'kawasaki@gmail.com', 'Ernakulam', 'South Kalamassery', '8138997555'),
(14, 'Harish', 'Mahindra Mojo Showroom', 'mahindra@gmail.com', 'Ernakulam', 'Aluva', '998999899'),
(15, 'Harish', 'Jey Motors Moto Guzzi', 'motoguzzi@gmail.com', 'Ernakulam', 'Edappally', '7356601635'),
(16, 'Harish', 'SYAMADYNAMIC Triumph', 'triumph@gmail.com', 'Ernakulam', 'Vyttila', '9645599933'),
(17, 'Harish', 'Cochin Motors Tvs', 'tvs@gmail.com', 'Ernakulam', 'Janatha Junction', '0412598745');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_carddetails`
--
ALTER TABLE `tbl_carddetails`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `tbl_cartmaster`
--
ALTER TABLE `tbl_cartmaster`
  ADD PRIMARY KEY (`cmaster_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  ADD PRIMARY KEY (`scat_id`);

--
-- Indexes for table `tbl_ vehicle`
--
ALTER TABLE `tbl_ vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `tbl_vender`
--
ALTER TABLE `tbl_vender`
  ADD PRIMARY KEY (`vender_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_carddetails`
--
ALTER TABLE `tbl_carddetails`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_cartmaster`
--
ALTER TABLE `tbl_cartmaster`
  MODIFY `cmaster_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `staff_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subcategory`
--
ALTER TABLE `tbl_subcategory`
  MODIFY `scat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_ vehicle`
--
ALTER TABLE `tbl_ vehicle`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_vender`
--
ALTER TABLE `tbl_vender`
  MODIFY `vender_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
