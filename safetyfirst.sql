-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 08:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safetyfirst`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Shubham Veer', 'admin', 9403527044, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-06-25 07:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Status` int(2) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ID`, `CategoryName`, `Status`, `CreationDate`) VALUES
(27, 'Fire Extinguisher', 1, '2021-09-01 15:16:08'),
(28, 'Safety Cloth', 1, '2021-09-01 15:16:29');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ID`, `Name`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Kiran', 'kran@gmail.com', 'cost of volvo place pritampura to dwarka', '2021-07-05 07:26:24', 1),
(2, 'Sarita Pandey', 'sar@gmail.com', 'huiyuihhjjkhkjvhknv iyi tuyvuoiup', '2021-07-09 12:48:40', 1),
(3, 'Test', 'test@gmail.com', 'Want to know price of forest cake', '2021-07-16 12:51:06', 1),
(4, 'Shanu', 'shanu@gmail.com', 'hkjhkjhk', '2021-07-17 07:32:14', 1),
(5, 'Taanu Sharma', 'tannu@gmail.com', 'ytjhdjguqwgyugjhbjdsuy\r\nkjhjkwhkd\r\nljkkljwq\r\nmlkjol ', '2021-07-28 12:09:22', 1),
(6, 'Harish Kumar', 'hari@gmail.com', 'rytweiuyeiouoipoipo[po\r\njknkjlkdsflkjflkdjslk;lsdkf;l\r\nn,mn,ncxm.,m.m.,.', '2021-07-31 16:34:16', 1),
(7, 'test', 'test@gmail.com', 'Test', '2021-08-25 16:56:19', 1),
(9, 'shubham', 'shubhamveer111@gmail.com', 'Hi i am Shuabhm i like your product', '2022-07-06 18:38:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(45) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(2, 'Rakesh', 'Chandra', 'rakesh@gmail.com', 7656234589, '202cb962ac59075b964b07152d234b70', '2019-04-08 07:43:28'),
(3, 'Yogesh', 'Chandra', 'y@gmail.com', 8989898989, '202cb962ac59075b964b07152d234b70', '2019-04-24 07:04:02'),
(4, 'Yogesh', 'Shah', 'Test1@gmail.com', 8975895698, '202cb962ac59075b964b07152d234b70', '2019-05-06 09:09:05'),
(10, 'Tirang', 'Ganagrde', 'tirang@gmail.com', 9322584950, '827ccb0eea8a706c4c34a16891f84e7b', '2021-09-01 14:10:23'),
(11, 'Kiran', 'GANGARDE', 'kiran@gmail.com', 9867676767, '81dc9bdb52d04dc20036dbd8313ed055', '2021-09-02 16:14:51'),
(12, 'TIRANG', 'GANGARDE', 'tirang34@gmail.com', 9123456789, '81dc9bdb52d04dc20036dbd8313ed055', '2021-09-30 23:22:24'),
(14, 'Nikita', 'Kale', 'nik@gmail.com', 9168152140, '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-23 18:10:22'),
(15, 'Guru', 'Patil', 'guru@gmail.com', 9168152148, '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-24 07:59:52'),
(16, 'shubham', 'Veer', 'shubhamveer111@gmail.com', 9403527044, '5559e198d7a24841cae9cf5bf1f1d89e', '2022-07-06 18:43:14'),
(17, 'Kinnu', 'G', 'kinnu@gmail.com', 9168234567, '2d8e9cf2cae716107b7d4c3005dbb8ca', '2022-07-15 17:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `System Speed` varchar(20) NOT NULL,
  `System Performance rate` varchar(20) NOT NULL,
  `User friendly` varchar(20) NOT NULL,
  `Prefered to Others?` varchar(20) NOT NULL,
  `Overall Experience` varchar(20) NOT NULL,
  `Comments/Suggestions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`ID`, `Name`, `Email`, `System Speed`, `System Performance rate`, `User friendly`, `Prefered to Others?`, `Overall Experience`, `Comments/Suggestions`) VALUES
(1, 'TIRANG GANGARDE', 'tirang.gangarde16@gm', 'Excellent', '4', 'Yes', 'Yes', 'Excellent', 'no'),
(2, 'guru', 'guru@gmail.com', 'Good', '4', 'No', 'No', ' Good', 'sefer'),
(3, 'TIRANG GANGARDE', 'tirang.gangarde16@gmail.com', 'Excellent', '4', 'Yes', 'Yes', 'Excellent', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `infopages`
--

CREATE TABLE `infopages` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `infopages`
--

INSERT INTO `infopages` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us:', '<div style=\"text-align: justify;\"><font face=\"courier new\"><font size=\"5\" style=\"font-weight: bold;\">\"Safety-</font><font size=\"5\"><b>First\"</b></font><b style=\"font-size: medium;\">&nbsp;IT is online shop is the official online sales platform of Safety-first&nbsp;Industries Pvt. Ltd This portal is owned and managed directly by the company. safety-first&nbsp;is the fast-growing global brand that protects millions of people across the world, every single </b><font size=\"3\"><b>day. For</b></font><b style=\"font-size: medium;\">&nbsp;Decades now, we have pioneered fire safety in </b><font size=\"3\"><b>India</b></font><b style=\"font-size: medium;\">, through firefighting system and technologies that are unique to safety first and built at the every forefront of new-age technology.</b></font></div><div style=\"text-align: justify;\"><font face=\"courier new\" size=\"3\"><b>For over 25 years, Safety-first&nbsp;has successfully manufactured, tested and sold hundreds of thousand of extinguisher&nbsp;- In India and other part of the world.</b></font></div>                                                                        ', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '                                                                        Pimpri Chinchwad, Pune- 411033', 'safety@gmail.com', 9403527044, NULL, '24 Hours Available');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `UserId` char(10) DEFAULT NULL,
  `PId` char(10) DEFAULT NULL,
  `IsOrderPlaced` int(11) DEFAULT NULL,
  `OrderNumber` char(100) DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `SubTotal` int(10) NOT NULL,
  `PaymentType` varchar(100) DEFAULT NULL,
  `cardName` varchar(50) NOT NULL,
  `cardNumber` int(10) NOT NULL,
  `expMonth` int(5) NOT NULL,
  `expYear` int(5) NOT NULL,
  `CVV` int(5) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`ID`, `UserId`, `PId`, `IsOrderPlaced`, `OrderNumber`, `Quantity`, `SubTotal`, `PaymentType`, `cardName`, `cardNumber`, `expMonth`, `expYear`, `CVV`, `OrderDate`) VALUES
(83, '11', '19', 1, '981831215', 5, 300, 'Cash on Delivery', '', 0, 0, 0, 0, '2021-09-17 09:28:07'),
(89, '10', '21', 1, '112635920', 2, 116, 'Cash on Delivery', '', 0, 0, 0, 0, '2021-09-18 08:07:36'),
(96, '11', '17', 1, '199498627', 20, 1000, 'Cash on Delivery', '', 0, 0, 0, 0, '2021-09-30 23:25:30'),
(205, '10', '20', 1, '235928195', 20, 2300, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-12 07:21:27'),
(206, '10', '24', 1, '235928195', 35, 2800, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-12 07:21:28'),
(220, '11', '23', 1, '577784280', 13, 728, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-13 15:08:09'),
(221, '11', '24', 1, '577784280', 14, 1120, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-13 15:08:09'),
(224, '11', '17', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2021-10-13 15:30:27'),
(225, '11', '18', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2021-10-13 15:30:34'),
(232, '10', '15', 1, '465210680', 15, 750, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-16 07:54:41'),
(233, '10', '17', 1, '465210680', 5, 250, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-16 07:54:41'),
(235, '10', '15', 1, '119204093', 12, 600, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-23 18:28:38'),
(236, '10', '22', 1, '119204093', 4, 280, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-23 18:28:38'),
(237, '10', '22', 1, '846931476', 20, 1400, 'CashOnDelivery', 'None', 0, 0, 0, 0, '2021-10-24 07:36:33'),
(238, '10', '20', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2021-10-24 07:42:30'),
(239, '10', '20', 1, '938253925', 10, 1150, 'COD', '', 0, 0, 0, 0, '2021-10-24 07:43:15'),
(240, '15', '23', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2021-10-24 08:05:59'),
(241, '10', '19', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2021-10-24 08:32:12'),
(242, '10', '20', 1, '994937309', 5, 575, 'COD', '', 0, 0, 0, 0, '2021-10-24 08:32:40'),
(243, '10', '19', 1, '994937309', 10, 600, 'COD', '', 0, 0, 0, 0, '2021-10-24 08:32:40'),
(244, '16', '15', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2022-07-06 18:44:12'),
(245, '16', '15', 1, '433327053', 2, 2090, 'COD', '', 0, 0, 0, 0, '2022-07-06 18:45:50'),
(246, '17', '15', NULL, NULL, 0, 0, NULL, '', 0, 0, 0, 0, '2022-07-15 17:29:27'),
(247, '17', '15', 1, '541623069', 2, 2090, 'COD', '', 0, 0, 0, 0, '2022-07-15 17:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(10) NOT NULL,
  `ProductName` varchar(200) DEFAULT NULL,
  `CategoryName` varchar(200) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL,
  `Status` int(2) DEFAULT NULL,
  `Description` varchar(100) DEFAULT '',
  `Image1` varchar(200) DEFAULT NULL,
  `Image2` varchar(200) DEFAULT NULL,
  `Image3` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `ProductName`, `CategoryName`, `Price`, `Status`, `Description`, `Image1`, `Image2`, `Image3`, `CreationDate`) VALUES
(15, 'Water Mist', 'Fire Extinguisher', '1045', 1, 'Deionised water mist fire extinguishers have a white label and are highly effective on class A B C a', 'e475d868cced19afc503281807da39151657126615.jpg', 'eb004b5cdc2aab8f61e845aab07ee09b1630513095.jpg', 'b9e6f351aecb5d83d37ce4d4df03943e1630513095.jpg', '2021-09-01 16:18:15'),
(17, 'Water Fire Extinguisher', 'Fire Extinguisher', '1500', 1, 'Water fire extinguishers have a red label and a class A rating They are suitable for fighting fires ', 'ce32b4f2fc7b444d8db550bff69d1bcd1657127456.jpg', 'ce32b4f2fc7b444d8db550bff69d1bcd1657127483.jpg', 'ce32b4f2fc7b444d8db550bff69d1bcd1657127508.jpg', '2021-09-01 16:44:05'),
(18, 'AFFF FOAM', 'Fire Extinguisher', '3549', 1, 'AFFF foam fire extinguishers have a cream label and are highly effective on class A and class B fire', '0158fee77a5cf5a05c19069f9a0017651657127736.jpg', '0158fee77a5cf5a05c19069f9a0017651657127752.jpg', '0158fee77a5cf5a05c19069f9a0017651657127779.jpg', '2021-09-02 07:09:19'),
(19, 'Carbon Dioxide Fire Extinguisher', 'Fire Extinguisher', '3500', 1, 'Carbon dioxide fire extinguishers have a black label They were originally designed for use on flamma', 'f7680489fa0161e196bf4ceca05dad4d1657127981.jpg', 'f7680489fa0161e196bf4ceca05dad4d1657128028.jpg', 'f7680489fa0161e196bf4ceca05dad4d1657128055.jpg', '2021-09-02 07:11:21'),
(20, 'Powder Fire Extinguisher', 'Fire Extinguisher', '900', 1, 'ABC powder fire extinguishers have a blue label They are versatile and can be used on class A class ', 'fcc1df1b7a61c5fc4fff1b23e8aa9d761657128450.jpg', 'fcc1df1b7a61c5fc4fff1b23e8aa9d761657128479.jpg', 'fcc1df1b7a61c5fc4fff1b23e8aa9d761657128506.jpg', '2021-09-02 07:12:52'),
(21, 'Wet Chemical Fire Extinguisher', 'Fire Extinguisher', '5000', 1, 'Wet Chemical fire extinguishers have a yellow label and are designed specifically for use on fires i', 'd6606a337ae798c6b52b54743458ffd11657129208.jpg', 'd6606a337ae798c6b52b54743458ffd11657129233.jpg', 'd6606a337ae798c6b52b54743458ffd11657129306.jpg', '2021-09-02 07:18:49'),
(22, 'Rescue Suit', 'Safety Cloth', '38500', 1, 'Rescue Suit', 'b1b1bd33e9841babbe6483b8415b9a081657130069.jpg', 'b1b1bd33e9841babbe6483b8415b9a081657130092.jpg', '130bafe298f24416d7d9802ce66cd4711630567930.jpg', '2021-09-02 07:32:10'),
(23, 'Safety Jacket', 'Safety Cloth', '5000', 1, 'Fire Polyester Reflective Tape Safety Jacket', '6562301c3b0f2fcc4490575854b150ea1657130247.jpg', '6562301c3b0f2fcc4490575854b150ea1657130272.jpg', '2fb9a194f877acafd6b089cfc2571dc31657130300.jpg', '2021-09-02 07:34:36'),
(24, 'Tower Safety Kit', 'Safety Cloth', '7500', 1, 'Tower Safety Kit', 'ccabe92b5869193d417d84f063e9716b1657130767.jpg', 'ccabe92b5869193d417d84f063e9716b1657130807.jpg', 'e7c531d68a987148541bfd84c63229c61657130874.jpg', '2021-09-02 07:47:50'),
(25, 'Industrial Safety Kit', 'Safety Cloth', '3000', 1, 'Industrial Safety Kit', '520002937e69af68ce23090614d216191657131042.jpg', '520002937e69af68ce23090614d216191657131065.jpg', '520002937e69af68ce23090614d216191657131090.jpg', '2021-10-16 09:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `productprice`
--

CREATE TABLE `productprice` (
  `ID` int(10) NOT NULL,
  `Product Type` varchar(20) NOT NULL,
  `Product Price` int(10) NOT NULL,
  `CreationDate` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productprice`
--

INSERT INTO `productprice` (`ID`, `Product Type`, `Product Price`, `CreationDate`) VALUES
(12, 'xyz', 100, '2022-07-25 17:30:59.000000');

-- --------------------------------------------------------

--
-- Table structure for table `productrequest`
--

CREATE TABLE `productrequest` (
  `prid` int(10) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Product Type` varchar(20) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `PickUpDate` date NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Flatname/bname` varchar(25) NOT NULL,
  `StreetName` varchar(25) NOT NULL,
  `Area` varchar(20) NOT NULL,
  `Landmark` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Zipcode` int(6) NOT NULL,
  `AnotherContact` text NOT NULL,
  `RequestRemark` varchar(50) DEFAULT NULL,
  `RequestFinalStatus` varchar(20) DEFAULT NULL,
  `RequestDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productrequest`
--

INSERT INTO `productrequest` (`prid`, `UserId`, `Product Type`, `Quantity`, `PickUpDate`, `Description`, `Flatname/bname`, `StreetName`, `Area`, `Landmark`, `City`, `Zipcode`, `AnotherContact`, `RequestRemark`, `RequestFinalStatus`, `RequestDate`) VALUES
(237612393, 10, 'Wheat', 15, '2022-07-26', 'Sharbati wheat', '303', 'Aditya Birla Marg', 'Pimpri', 'birla hospital', 'Pune', 411033, '', 'accept', 'Request Accepted', '2021-10-24 08:18:25'),
(562251404, 11, 'Bajra', 152, '2021-10-18', 'Organic Bajra', '33/A Mauli Niwas', 'Aditya Birla Marg', 'Pimpri', 'MAB Hospital', 'Pune', 411033, '9168456787', 'Your request is accepted', 'Request Accepted', '2021-10-12 10:07:55'),
(874728816, 11, 'Wheat', 101, '2021-10-13', 'Lokwan wheat', 'xyz', 'Mauli niwas ,Dattanagar n', 'Chinchwad', 'prasundham', 'Pune', 411033, '9887678789', 'Rejected', 'Request Rejected', '2021-10-12 10:05:40'),
(993836783, 16, 'xyz', 10, '2022-07-26', 'aaaaaaaaaaaaa', '101', 'adres', 'shikrapur', 'zzzzzz', 'pune', 412208, '9403527044', '', '', '2022-07-25 18:04:37');

-- --------------------------------------------------------

--
-- Table structure for table `productreview`
--

CREATE TABLE `productreview` (
  `ID` int(10) NOT NULL,
  `ProductID` int(10) DEFAULT NULL,
  `ReviewTitle` varchar(200) DEFAULT NULL,
  `Reviews` varchar(50) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `DateofReview` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productreview`
--

INSERT INTO `productreview` (`ID`, `ProductID`, `ReviewTitle`, `Reviews`, `Name`, `DateofReview`, `Remark`, `Status`, `UpdationDate`) VALUES
(7, 17, 'Quality', 'Best', 'Tirang', '2021-09-19 17:31:15', 'Review Accept', 'Review Accept', '2021-09-17 14:48:14'),
(13, 21, 'Quality', 'Quality is good', 'Guru', '2021-10-05 17:46:53', 'Review Accept', 'Review Accept', '2021-09-19 17:23:48'),
(15, 19, 'Quality', 'Good', 'Nikita ', '2021-09-19 17:30:37', NULL, NULL, '2021-09-19 17:30:37'),
(17, 19, 'Price', 'Affordable Price', 'Tirang', '2021-09-19 17:36:05', NULL, NULL, '2021-09-19 17:36:05'),
(18, 17, 'Price', 'Avrage', 'Tirang', '2021-10-16 07:44:36', 'Review Accept', 'Review Accept', '2021-09-30 23:29:08');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `ID` int(11) NOT NULL,
  `UserId` char(100) DEFAULT NULL,
  `Ordernumber` char(100) DEFAULT NULL,
  `Flatnobuldngno` varchar(255) DEFAULT NULL,
  `StreetName` varchar(255) DEFAULT NULL,
  `Area` varchar(255) DEFAULT NULL,
  `Landmark` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Zipcode` int(10) DEFAULT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `OrderFinalStatus` varchar(255) DEFAULT 'Wait for confirmation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`ID`, `UserId`, `Ordernumber`, `Flatnobuldngno`, `StreetName`, `Area`, `Landmark`, `City`, `Zipcode`, `OrderTime`, `OrderFinalStatus`) VALUES
(26, '11', '981831215', 'Mauli Niwas', 'pune', 'pune', 'pune', 'Pune', 411033, '2021-09-17 09:28:34', 'Order Delivered'),
(28, '10', '112635920', 'Mauli Niwas', 'Pimpri chinchwad', 'Pimpri', 'no', 'Pune', 411033, '2021-09-18 08:07:57', 'Order Delivered'),
(29, '11', '199498627', 'Mauli Niwas', '-', 'Pimpri', 'birla hospital', 'Pune', 411033, '2021-09-30 23:25:53', 'Order Delivered'),
(116, '10', '235928195', 'xyz', 'Pimpri chinchwad', 'Pimpri', '', 'Wakad', 411033, '2021-10-12 07:21:28', 'Order Cancelled'),
(118, '11', '577784280', 'Mauli Niwas', 'Aditya', '', 'birla', 'Pune', 411033, '2021-10-13 15:08:09', 'Wait for confirmation'),
(119, '10', '465210680', '32/A Mauli Niwas', 'MG Road', 'Pimpri', 'birla hospital', 'Pune', 411033, '2021-10-16 07:54:41', 'Order Delivered'),
(120, '10', '119204093', '24e', 'ederf efd', '', 'no', 'Pune', 411033, '2021-10-23 18:28:38', 'Order Confirmed'),
(121, '10', '846931476', 'Mauli Niwas', 'Aditya Birla Marg', 'Pimpri', '', 'Pune', 411033, '2021-10-24 07:36:33', 'Order Confirmed'),
(122, '10', '938253925', 'Mauli Niwas', 'Aditya Birla Marg', 'xyz', '', 'Pune', 411033, '2021-10-24 07:43:16', 'On The Way'),
(123, '10', '994937309', 'Mauli Niwas', 'Aditya Birla Marg', 'Pimpri', 'xyz', 'Pune', 411033, '2021-10-24 08:32:40', 'Order Delivered'),
(124, '16', '433327053', '101', 'shikrapur', 'shikrapur', '', 'pune', 412208, '2022-07-06 18:45:50', 'Order Confirmed'),
(125, '17', '541623069', '101', 'adres', 'shikrapur', '', 'pune', 412208, '2022-07-15 17:30:28', 'Wait for confirmation');

-- --------------------------------------------------------

--
-- Table structure for table `tbltracking`
--

CREATE TABLE `tbltracking` (
  `ID` int(10) NOT NULL,
  `OrderId` char(50) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  `StatusDate` timestamp NULL DEFAULT current_timestamp(),
  `OrderCanclledByUser` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltracking`
--

INSERT INTO `tbltracking` (`ID`, `OrderId`, `remark`, `status`, `StatusDate`, `OrderCanclledByUser`) VALUES
(17, '276201350', 'I want to buy another product.', 'Order Cancelled', '2021-09-02 10:32:44', 1),
(18, '635291550', 'Your Order is comfirmed', 'Order Confirmed', '2021-09-04 11:03:07', NULL),
(19, '635291550', 'On the way', 'On The Way', '2021-09-04 11:03:48', NULL),
(20, '635291550', 'Your order is delivered', 'Mobile Delivered', '2021-09-04 11:04:36', NULL),
(21, '793143034', 'Confirmed', 'Order Confirmed', '2021-09-04 13:38:05', NULL),
(22, '793143034', 'Delivered', 'Mobile Delivered', '2021-09-04 13:38:46', NULL),
(23, '556662286', 'Your Order is comfirmed', 'Order Confirmed', '2021-09-17 09:18:49', NULL),
(24, '556662286', 'Your Order is delivered', 'Mobile Delivered', '2021-09-17 09:20:10', NULL),
(25, '325319856', 'comfirmed', 'Order Confirmed', '2021-09-17 09:25:06', NULL),
(26, '325319856', 'x', 'Order Delivered', '2021-09-17 09:25:39', NULL),
(27, '981831215', 'Your order is confirmed', 'Order Confirmed', '2021-09-17 09:29:41', NULL),
(28, '981831215', 'order dispatch', 'On The Way', '2021-09-17 09:31:13', NULL),
(29, '981831215', 'Your Order is delivered', 'Order Delivered', '2021-09-17 09:32:23', NULL),
(31, '199498627', 'Order Confirmed', 'Order Confirmed', '2021-09-30 23:54:18', NULL),
(32, '199498627', 'Your order is delivered', 'Order Delivered', '2021-09-30 23:55:06', NULL),
(33, '659916991', 'reject', 'Order Cancelled', '2021-10-04 02:23:56', NULL),
(34, '112635920', 'Your Order is confirmed', 'Order Confirmed', '2021-10-05 16:56:16', NULL),
(35, '112635920', 'Your Order is Delivered', 'Order Delivered', '2021-10-05 16:57:39', NULL),
(36, '235928195', 'Reject', 'Order Cancelled', '2021-10-12 13:32:31', NULL),
(37, '304770610', 'Your Order Is Confirmed', 'Order Confirmed', '2021-10-12 13:33:26', NULL),
(38, '465210680', 'c', 'Order Confirmed', '2021-10-23 17:34:40', NULL),
(39, '465210680', 'on the way', 'On The Way', '2021-10-23 17:49:21', NULL),
(40, '846931476', 'Your Order  is confirmed.', 'Order Confirmed', '2021-10-24 09:14:16', NULL),
(41, '846931476', 'Your Order  is confirmed.', 'Order Confirmed', '2021-10-24 09:15:09', NULL),
(42, '846931476', 'order confirmed', 'Order Confirmed', '2021-10-24 09:16:32', NULL),
(43, '938253925', 'order confirmed', 'Order Confirmed', '2021-10-24 09:16:45', NULL),
(44, '938253925', 'order is on the way.', 'On The Way', '2021-10-24 09:18:45', NULL),
(45, '994937309', 'order confirmed', 'Order Confirmed', '2021-10-24 09:18:59', NULL),
(46, '465210680', 'Your order is delivered.', 'Order Delivered', '2021-10-24 09:23:46', NULL),
(47, '119204093', 'Your Order is confirmed.', 'Order Confirmed', '2021-10-25 16:45:59', NULL),
(48, '994937309', 'Your Order is on the way.', 'On The Way', '2021-10-25 16:46:43', NULL),
(49, '994937309', 'Your Order is delivered.', 'Order Delivered', '2021-10-25 16:47:34', NULL),
(50, '433327053', 'product dispatched within 2n day', 'Order Confirmed', '2022-07-06 18:48:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(10) NOT NULL,
  `ProductId` int(5) DEFAULT NULL,
  `UserId` int(11) DEFAULT NULL,
  `WishlistDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`ID`, `ProductId`, `UserId`, `WishlistDate`) VALUES
(10, 17, 10, '2021-09-01 16:44:23'),
(11, 15, 10, '2021-09-02 05:41:38'),
(13, 17, 11, '2021-09-05 21:15:22'),
(16, 23, 15, '2021-10-24 08:05:54'),
(17, 15, 16, '2022-07-06 18:43:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `infopages`
--
ALTER TABLE `infopages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`,`PId`,`OrderNumber`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productprice`
--
ALTER TABLE `productprice`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `productrequest`
--
ALTER TABLE `productrequest`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `productreview`
--
ALTER TABLE `productreview`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserId` (`UserId`,`Ordernumber`);

--
-- Indexes for table `tbltracking`
--
ALTER TABLE `tbltracking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `infopages`
--
ALTER TABLE `infopages`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `productprice`
--
ALTER TABLE `productprice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `productrequest`
--
ALTER TABLE `productrequest`
  MODIFY `prid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=993836784;

--
-- AUTO_INCREMENT for table `productreview`
--
ALTER TABLE `productreview`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `tbltracking`
--
ALTER TABLE `tbltracking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
