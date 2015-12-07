CREATE TABLE IF NOT EXISTS `Aircraft` (
  `TailNumber` varchar(16) NOT NULL,
  `Airline` varchar(64) NOT NULL,
  `Manufacture` varchar(64) NOT NULL,
  `Model` varchar(64) NOT NULL,
  `Capacity` int(3) NOT NULL,
  `StatusID` int(2) NOT NULL,
  PRIMARY KEY (`TailNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `AircraftCapapcity` (
  `TotalCapacity` int(11) NOT NULL,
  `Business` int(11) NOT NULL,
  `FirstClass` int(11) NOT NULL,
  `Coach` int(11) NOT NULL,
  `windowSeatCount` int(11) NOT NULL,
  `isleCount` int(11) NOT NULL,
  PRIMARY KEY (`TotalCapacity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Airports` (
  `Airport_Code` varchar(3) NOT NULL,
  `Airport_Name` varchar(64) NOT NULL,
  `Airport_City` varchar(64) NOT NULL,
  `State` varchar(64) NOT NULL,
  PRIMARY KEY (`Airport_Code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Class` (
  `ClassID` int(2) NOT NULL,
  `ClassName` varchar(64) NOT NULL,
  PRIMARY KEY (`ClassID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Flights` (
  `FlightNumber` varchar(16) NOT NULL,
  `TailNumber` varchar(16) NOT NULL,
  `StatusID` int(8) NOT NULL,
  `DepartureTime` datetime NOT NULL,
  `ArrivalTime` datetime NOT NULL,
  `TimeStamp` datetime NOT NULL,
  `destinationid` int(11) NOT NULL,
  PRIMARY KEY (`FlightNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Flight_Status` (
  `StatusID` int(2) NOT NULL,
  `Status` varchar(16) NOT NULL,
  PRIMARY KEY (`StatusID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `Payment_Info` (
  `CreditCardNo` int(16) NOT NULL,
  `ExpirationMonth` int(2) NOT NULL,
  `ExpirationYear` int(4) NOT NULL,
  `CVCCode` int(3) NOT NULL,
  `PaymentID` int(2) NOT NULL,
  `UUID` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Reservations` (
  `FlightNumber` varchar(12) NOT NULL,
  `FlightDate` datetime NOT NULL,
  `SeatNumber` varchar(4) NOT NULL,
  `MealType` enum('Vegetarian','Vegan','Kosher','Halal') NOT NULL,
  `Cost` float NOT NULL,
  `ReservationID` varchar(32) NOT NULL,
  `UUID` int(12) NOT NULL,
  `ClassType` int(11) NOT NULL,
  `SeatType` enum('window','Isle','Normal') NOT NULL,
  PRIMARY KEY (`ReservationID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Roles` (
  `RoleID` int(3) NOT NULL,
  `Title` varchar(16) NOT NULL,
  PRIMARY KEY (`RoleID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `Seat` (
  `TailNumber` varchar(16) NOT NULL,
  `SeatID` int(2) NOT NULL,
  `ClassID` int(3) NOT NULL,
  `FlightNumber` varchar(12) NOT NULL,
  PRIMARY KEY (`TailNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `TravelDistance` (
  `Origin` varchar(64) NOT NULL,
  `Destination` varchar(64) NOT NULL,
  `Distance` float NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=213 ;



CREATE TABLE IF NOT EXISTS `Users` (
  `UUID` int(12) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `LastName` varchar(64) NOT NULL,
  `FirstName` varchar(64) NOT NULL,
  `StreetAddress` varchar(127) NOT NULL,
  `City` varchar(64) NOT NULL,
  `State` varchar(64) NOT NULL,
  `ZipCode` varchar(5) NOT NULL,
  `Password` varchar(64) NOT NULL,
  `ContactPhone` varchar(16) NOT NULL,
  `RoleID` int(2) NOT NULL,
  PRIMARY KEY (`UUID`,`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


