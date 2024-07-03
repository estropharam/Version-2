-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 06:39 AM
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
-- Database: `estrobase`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AreaCode` int(10) NOT NULL,
  `AreaName` varchar(20) NOT NULL,
  `AreaType` varchar(20) NOT NULL,
  `Pool` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AreaCode`, `AreaName`, `AreaType`, `Pool`) VALUES
(234587, 'lu', 'Select', 'Select'),
(234588, 'varanasi', 'Area', 'Select');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `AreaCode` int(10) NOT NULL,
  `AreaName` varchar(20) NOT NULL,
  `AreaType` varchar(20) NOT NULL,
  `Pool` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`AreaCode`, `AreaName`, `AreaType`, `Pool`) VALUES
(1, 'Patna', '', ''),
(2, 'delhi', '', ''),
(3, 'delhi', '', ''),
(4, 'Patna', '', ''),
(5, 'Patna', '', ''),
(1234, 'Lucknow', 'Area', 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(10) NOT NULL,
  `EmpCode` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Age` int(20) DEFAULT NULL,
  `DOJ` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `AreaCode` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `InvoiceID` int(11) NOT NULL,
  `StkId` int(11) DEFAULT NULL,
  `AreaCode` int(11) DEFAULT NULL,
  `EmployeeID` int(11) DEFAULT NULL,
  `DateOfCreation` date NOT NULL,
  `Amount` varchar(70) NOT NULL,
  `Action` varchar(80) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `ManufactureCode` int(10) NOT NULL,
  `Manufacturer` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhNo` varchar(15) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `LicenseNo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`ManufactureCode`, `Manufacturer`, `Email`, `PhNo`, `Address`, `LicenseNo`) VALUES
(3464, 'Estro Pharma', 'shreyansh2771@gmail.com', '06389178835', '', ''),
(3465, 'Estro Pharmas', 'shreyansh2771@gmail.com', '06389178835', '539K/149 Sheikhpur Kasaila Indira Nagar', '1234356475');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `P_Id` int(10) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `Manufacturer` varchar(50) DEFAULT NULL,
  `BatchId` varchar(50) NOT NULL,
  `HSN` varchar(20) NOT NULL,
  `PTR` decimal(10,2) NOT NULL,
  `PTS` decimal(10,2) NOT NULL,
  `PKG` varchar(50) NOT NULL,
  `Rate` decimal(10,2) NOT NULL,
  `MRP` decimal(10,2) NOT NULL,
  `EXP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`P_Id`, `ProductName`, `Manufacturer`, `BatchId`, `HSN`, `PTR`, `PTS`, `PKG`, `Rate`, `MRP`, `EXP`) VALUES
(4, 'BOMYCES-250', NULL, 't-123456', '34', 576.00, 43.00, '10x10', 67.00, 45.00, '2024-04-01'),
(34, 'DIVBORATE-ER 250', NULL, 't-123456', '23', 57.00, 43.00, '10x10', 76.00, 54.00, '2024-04-08');

-- --------------------------------------------------------

--
-- Table structure for table `stockists`
--

CREATE TABLE `stockists` (
  `StkId` int(10) NOT NULL,
  `StkName` varchar(30) NOT NULL,
  `City` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Contact` int(10) NOT NULL,
  `HQ` varchar(50) NOT NULL,
  `MarriageAnniversary` date NOT NULL,
  `Address` varchar(200) NOT NULL,
  `ContactPerson` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `PIN` int(10) NOT NULL,
  `GSTIN` varchar(50) NOT NULL,
  `PAN` varchar(20) NOT NULL,
  `DLNumber1` varchar(40) NOT NULL,
  `DLNumber2` varchar(40) NOT NULL,
  `AreaCode` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stockists`
--

INSERT INTO `stockists` (`StkId`, `StkName`, `City`, `State`, `DOB`, `Contact`, `HQ`, `MarriageAnniversary`, `Address`, `ContactPerson`, `Email`, `PIN`, `GSTIN`, `PAN`, `DLNumber1`, `DLNumber2`, `AreaCode`) VALUES
(6866, 'sanju', 'Lucknow', 'Uttar Pradesh', '2024-04-02', 2147483647, 'Delhi', '2024-04-24', '539K/149 Sheikhpur Kasaila Indira Nagar', 'Shreyansh Pandey', 'shreyansh2771@gmail.com', 345678, '45678956432', '4357yh5427689', 'qweqwa213142', '213467', 234588);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AreaCode`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`AreaCode`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `AreaCode` (`AreaCode`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`InvoiceID`),
  ADD KEY `fk_StkId` (`StkId`),
  ADD KEY `fk_AreaCode` (`AreaCode`),
  ADD KEY `fk_EmployeeID` (`EmployeeID`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`Manufacturer`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`P_Id`),
  ADD KEY `Manufacturer` (`Manufacturer`);

--
-- Indexes for table `stockists`
--
ALTER TABLE `stockists`
  ADD PRIMARY KEY (`StkId`),
  ADD KEY `AreaCode` (`AreaCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AreaCode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234589;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `AreaCode` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `InvoiceID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `P_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `stockists`
--
ALTER TABLE `stockists`
  MODIFY `StkId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`AreaCode`) REFERENCES `area` (`AreaCode`) ON DELETE SET NULL;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_AreaCode` FOREIGN KEY (`AreaCode`) REFERENCES `area` (`AreaCode`),
  ADD CONSTRAINT `fk_EmployeeID` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`),
  ADD CONSTRAINT `fk_StkId` FOREIGN KEY (`StkId`) REFERENCES `stockists` (`StkId`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`Manufacturer`) REFERENCES `manufacturer` (`Manufacturer`) ON DELETE SET NULL;

--
-- Constraints for table `stockists`
--
ALTER TABLE `stockists`
  ADD CONSTRAINT `stockists_ibfk_1` FOREIGN KEY (`AreaCode`) REFERENCES `area` (`AreaCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
