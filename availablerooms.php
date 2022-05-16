<?php
    // include('dbconnect.php');

    class Availablerooms
    {
        public function __construct()
        {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
        }

        function getrooms()
        {
            $query1 = "CREATE TABLE IF NOT EXISTS AvailableRooms (roomtype VARCHAR(20), numberofrooms INT(11))";
            $query2 = "INSERT INTO AvailableRooms (roomtype, numberofrooms) VALUES('MasterSuite', 8)";
            $query3 = "INSERT INTO AvailableRooms (roomtype, numberofrooms) VALUES('KingSizeRoom', 11)";
            $query4 = "INSERT INTO AvailableRooms (roomtype, numberofrooms) VALUES('QueenSizeRoom', 10)";
            $query5 = "INSERT INTO AvailableRooms (roomtype, numberofrooms) VALUES('Studio', 7)";
            $query6 = "INSERT INTO AvailableRooms (roomtype, numberofrooms) VALUES('DoubleRoom', 8)";
            $query7 = "INSERT INTO AvailableRooms (roomtype, numberofrooms) VALUES('SingleRoom', 12)";
            $this->conn->query($query1);
            $this->conn->query($query2);
            $this->conn->query($query3);
            $this->conn->query($query4);
            $this->conn->query($query5);
            $this->conn->query($query6);
            $this->conn->query($query7);
            
            // return $result;
        }

        function createcontacttable()
        {
          $query = "CREATE TABLE IF NOT EXISTS `ContactUs` (
            `queryid` int(11) NOT NULL AUTO_INCREMENT,
            `name` varchar(255) DEFAULT NULL,
            `contactnumber` varchar(25) NOT NULL,
            `email` varchar(255) DEFAULT NULL,
            `message` text DEFAULT NULL,
            `sent_on` timestamp NOT NULL DEFAULT current_timestamp(),
            PRIMARY KEY (`queryid`),
            KEY `name` (`name`),
            KEY `contactnumber` (`contactnumber`),
            KEY `email` (`email`),
            FULLTEXT KEY `message` (`message`)
           ) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4";
           $this->conn->query($query);
        }

        function createbookingtable()
        {
          $query = "CREATE TABLE IF NOT EXISTS `HotelBooking` (
            `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
            `fullname` varchar(255) DEFAULT NULL,
            `contactnumber` varchar(25) NOT NULL,
            `numberofrooms` int(11) NOT NULL,
            `roomtype` text NOT NULL,
            `checkin` date NOT NULL,
            `checkout` date NOT NULL,
            `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
            PRIMARY KEY (`id`),
            KEY `contactnumber` (`contactnumber`),
            KEY `fullname` (`fullname`),
            KEY `checkin` (`checkin`),
            KEY `checkout` (`checkout`),
            KEY `numberofrooms` (`numberofrooms`)
           ) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4";
           $this->conn->query($query);
        }



        function updaterooms($room, $numberofrooms)
        {
          $query = "";
          $rooms = (int)$numberofrooms;
          
          if ($room == 'MasterSuite')
          {
            $query = "UPDATE AvailableRooms SET numberofrooms = (numberofrooms - $rooms) where roomtype = '$room'";
          }
          elseif ($room == 'KingSizeRoom')
          {
            $query = "UPDATE AvailableRooms SET numberofrooms = numberofrooms - $rooms where roomtype = '$room'";
          }
          elseif ($room == 'QueenSizeRoom')
          {
            $query = "UPDATE AvailableRooms SET numberofrooms = numberofrooms - $rooms where roomtype = '$room'";
          }
          elseif ($room == 'Studio')
          {
            $query = "UPDATE AvailableRooms SET numberofrooms = numberofrooms - $rooms where roomtype = '$room'";
          }
          elseif ($room == 'DoubleRoom')
          {
            $query = "UPDATE AvailableRooms SET numberofrooms = numberofrooms - $rooms where roomtype = '$room'";
          }
          elseif ($room == 'SingleRoom')
          {
            $query = "UPDATE AvailableRooms SET numberofrooms = numberofrooms - $rooms where roomtype = '$room'";
          }
          print_r($query);
          $result = $this->conn->query($query);
          return $result;
        }
    }

    
?>