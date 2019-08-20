-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 07:52 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ReservationID` int(11) NOT NULL,
  `ReservationName` varchar(200) NOT NULL,
  `ReservationEmail` varchar(255) NOT NULL,
  `RoomTypeID` int(11) NOT NULL,
  `ReservationGuests` smallint(6) NOT NULL,
  `ReservationArrival` datetime NOT NULL,
  `ReservationDeparture` date NOT NULL,
  `TransportID` int(11) NOT NULL,
  `ReservationNotes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleID`, `RoleName`) VALUES
(1, 'Admin'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomID` int(11) NOT NULL,
  `RoomNo` varchar(10) NOT NULL,
  `RoomTypeID` int(11) NOT NULL,
  `RoomStatus` enum('Vacant','Booked','Occupied','Blocked','Maintenance') NOT NULL DEFAULT 'Vacant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `RoomTypeID` int(11) NOT NULL,
  `RoomName` varchar(150) NOT NULL,
  `RoomDescription` varchar(500) NOT NULL,
  `RoomPrice` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffName` varchar(500) NOT NULL,
  `StaffUsername` varchar(30) NOT NULL,
  `StaffEmail` varchar(255) NOT NULL,
  `StaffPassword` varchar(32) NOT NULL,
  `StaffPic` varchar(500) NOT NULL DEFAULT './imgs/avatar-1.png',
  `RoleID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `StaffUsername`, `StaffEmail`, `StaffPassword`, `StaffPic`, `RoleID`) VALUES
(1, 'Tester', 'testacc', 'acc@acc.com', '5f4dcc3b5aa765d61d8327deb882cf99', './imgs/avatar-1.png', 1),
(2, 'New tester', 'newtester', 'newtester@email.com', '482c811da5d5b4bc6d497ffa98491e38', './imgs/avatar-1.png', 1),
(3, 'Lalala', 'lalala', 'la@la.com', '9aa6e5f2256c17d2d430b100032b997c', './imgs/avatar-1.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `TransportID` int(11) NOT NULL,
  `TransportTo` varchar(500) NOT NULL,
  `TransportFrom` varchar(500) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `VehicleID` int(11) NOT NULL,
  `TransportTime` datetime NOT NULL,
  `TransportNotes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VehicleID` int(11) NOT NULL,
  `VehicleType` enum('Car','Bus','Van') NOT NULL,
  `VehicleLicense` varchar(20) NOT NULL,
  `VehicleModel` varchar(100) NOT NULL,
  `VehiclePurchaseDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD KEY `FK1_reservation` (`RoomTypeID`),
  ADD KEY `FK2_reservation` (`TransportID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `FK_room` (`RoomTypeID`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`RoomTypeID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `FK_staff` (`RoleID`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`TransportID`),
  ADD KEY `FK1_transport` (`StaffID`),
  ADD KEY `FK2_transport` (`VehicleID`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `RoomTypeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `TransportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VehicleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `FK1_reservation` FOREIGN KEY (`RoomTypeID`) REFERENCES `room_type` (`RoomTypeID`),
  ADD CONSTRAINT `FK2_reservation` FOREIGN KEY (`TransportID`) REFERENCES `transport` (`TransportID`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `FK_room` FOREIGN KEY (`RoomTypeID`) REFERENCES `room_type` (`RoomTypeID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `FK_staff` FOREIGN KEY (`RoleID`) REFERENCES `role` (`RoleID`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `FK1_transport` FOREIGN KEY (`StaffID`) REFERENCES `staff` (`StaffID`),
  ADD CONSTRAINT `FK2_transport` FOREIGN KEY (`VehicleID`) REFERENCES `vehicle` (`VehicleID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
