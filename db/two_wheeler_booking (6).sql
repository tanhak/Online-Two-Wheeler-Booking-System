-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 23, 2021 at 12:04 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `two_wheeler_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE IF NOT EXISTS `tbl_booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `cmaster_id` int(11) NOT NULL,
  `bookingdate` varchar(50) NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `cmaster_id`, `bookingdate`) VALUES
(2, 56, '2021-10-10'),
(3, 62, '2021-10-10'),
(4, 63, '2021-10-10'),
(5, 65, '2021-10-10'),
(6, 69, '2021-10-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(50) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(1, 'Yamaha'),
(2, 'Kawasaki'),
(3, 'Yamaha'),
(4, 'Suzuki'),
(5, 'Bajaj'),
(6, 'KTM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_carddetails`
--

CREATE TABLE IF NOT EXISTS `tbl_carddetails` (
  `card_id` int(11) NOT NULL AUTO_INCREMENT,
  `custid` varchar(50) NOT NULL,
  `cardtype` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `expdate` varchar(50) NOT NULL,
  PRIMARY KEY (`card_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_carddetails`
--

INSERT INTO `tbl_carddetails` (`card_id`, `custid`, `cardtype`, `cardno`, `bank`, `expdate`) VALUES
(1, 'manu@gmail.com', 'small', '123456789123456', 'NOBNK', '2021-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartchild`
--

CREATE TABLE IF NOT EXISTS `tbl_cartchild` (
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
(0, 68, 10, 1),
(0, 69, 10, 1),
(0, 72, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cartmaster`
--

CREATE TABLE IF NOT EXISTS `tbl_cartmaster` (
  `cmaster_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `totamt` int(11) NOT NULL,
  `cart_date` date NOT NULL,
  `cart_status` varchar(50) NOT NULL,
  PRIMARY KEY (`cmaster_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

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
(68, '123@gmail.com', 155682, '2021-10-11', 'cartes'),
(69, 'alvin@gmail.com', 155682, '2021-10-11', 'booked'),
(72, 'manu@gmail.com', 155682, '2021-11-22', 'cartes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

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

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_fname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_hno` varchar(30) NOT NULL,
  `c_district` varchar(50) NOT NULL,
  `c_street` varchar(50) NOT NULL,
  `c_phoneno` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customer_id`, `c_fname`, `c_lname`, `c_email`, `c_password`, `c_hno`, `c_district`, `c_street`, `c_phoneno`, `gender`) VALUES
(1, 'manu', 'm', 'manu@gmail.com', 'manu', '2001', 'ekm', 'ekm', '9945754587', 'ekm'),
(2, 'harish', 'k', '123@gmail.com', '123', 'mlk', 'ktm', 'mop', '8578945612', 'm'),
(3, 'Aswin', 'Dinesh', 'ashwindinesh@gmail.com', '123', '1', 'kottayam', 'Mlakal', '1234567852', 'm'),
(4, 'Alvin', 'thomas', 'alvin@gmail.com', '1234', '33', 'Ekm', 'Mulakulam', '1234567895', 'm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
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
('alvin@gmail.com', '1234', 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` varchar(50) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `payment_date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE IF NOT EXISTS `tbl_staff` (
  `staff_id` varchar(10) NOT NULL,
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
('', 'ashwin', 'dinesh', '456@gmail.com', '456', '1', 'ktm', 'mop', '6597452147', '200000'),
('', 'Kumar', 'Gupta', 'kumargupta@gmail.com', '123', '33', 'kottayam', 'mlklm', '7896548512', '20123'),
('', 'Ashwin', 'Dinesh', 'ashwin@gmail.com', '123', '2', 'Vaikom', 'mop', '9605587690', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcategory`
--

CREATE TABLE IF NOT EXISTS `tbl_subcategory` (
  `scat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_id` varchar(50) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  PRIMARY KEY (`scat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

CREATE TABLE IF NOT EXISTS `tbl_ vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `cid` int(11) DEFAULT NULL,
  PRIMARY KEY (`vehicle_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_ vehicle`
--

INSERT INTO `tbl_ vehicle` (`vehicle_id`, `scat_id`, `brand_id`, `v_name`, `v_desc`, `ex_showroom`, `segmaent`, `milage`, `Cubic_cappacity`, `color`, `Weight`, `bhp`, `transmition`, `tankcapacity`, `Image`, `uname`, `cid`) VALUES
(10, 2, 5, 'NS 200', 'Indias Most loved sports bike.', '155682', 'Street Bike', '44KMpl', '199CC', 'White Metallic', 196, 24, 6, 13, 'pngwing.com (22).png', 'popularbajajekm@gmail.com', 1),
(11, 2, 5, 'dfsf', 'asfasfas', '144545', 'drtdd', '55', '124', 'vgde', 125, 25, 5, 12, 'pngwing.com (22).png', 'popularbajajekm@gmail.com', 2),
(12, 2, 5, 'errty', 'asfasfas', '284545', 'yui', '45', '127', 'vgde', 125, 25, 5, 12, 'pngwing.com (22).png', 'popularbajajekm@gmail.com', 3),
(13, 2, 1, 'KTM RC 200', 'The fastest indian', '256012', 'drtdd', '55', '127', 'Matte White', 148, 25, 6, 9, 'pngwing.com (23).png', 'popularktm@gmail.com', 6),
(14, 1, 1, 'errty', 'asfasfas', '144545', 'drtdd', '45', '124', 'vgde', 125, 25, 6, 12, 'pngwing.com (23).png', 'popularktm@gmail.com', 7),
(15, 2, 5, 'XL100', 'MOped', '50000', 'moped', '102', '50 CC', 'White', 100, 4, 0, 8, 'pngwing.com (24).png', 'popularbajajekm@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vender`
--

CREATE TABLE IF NOT EXISTS `tbl_vender` (
  `vender_id` varchar(10) NOT NULL,
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
('', '', 'popular bajaj', 'popularbajajekm@gmail.com', 'ekm', 'mop', '7896541258'),
('', '', 'Popular KTM', 'popularktm@gmail.com', 'kottayam', 'mlklm', '1234567895');
