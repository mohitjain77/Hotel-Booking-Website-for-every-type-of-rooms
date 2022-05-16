CREATE TABLE `HotelBooking` (
  `id` int(11) UNSIGNED NOT NULL,
  'booking_id' int(10) unsigned NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` text NOT NULL,
  'roomtype' text NOT NULL,
  `Time of Booking` datetime NOT NULL DEFAULT current_timestamp(),
  'Arrival' date NOT NULL,
  'Departure' date NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `HotelBooking`
  ADD PRIMARY KEY (`id`);
  
ALTER TABLE `HotelBooking`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

CREATE TABLE 'ContactUs' (
  'queryid' int(11) UNSIGNED NOT NULL,
  'name' varchar(255) DEFAULT NULL,
  'contactnumber' varchar(12) NOT NULL,
  'email' varchar(255) DEFAULT NULL,
  'message' varchar(500) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `ContactUs`
  ADD PRIMARY KEY (`queryid`);
  
ALTER TABLE `ContactUs`
  MODIFY `queryid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

CREATE TABLE 'AvailableRooms' (
  'mastersuite' int(11) UNSIGNED NOT NULL,
  'single' int(11) UNSIGNED NOT NULL,
  'double' int(11) UNSIGNED NOT NULL,
  'king' int(11) UNSIGNED NOT NULL,
  'queen' int(11) UNSIGNED NOT NULL,
  'studio' int(11) UNSIGNED NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;