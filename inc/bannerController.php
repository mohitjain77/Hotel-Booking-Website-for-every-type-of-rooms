<?php
    include('dbconnect.php');

    class BannerController
    {
        public function __construct()
        {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
        }

        public function booking($fullname, $contactnumber, $numberofrooms, $typeofrooms, $checkin, $checkout)
        {
            $query = "INSERT INTO HotelBooking (fullname, contactnumber, numberofrooms, roomtype, checkin, checkout) VALUES ('$fullname', '$contactnumber', '$numberofrooms', '$typeofrooms', '$checkin', '$checkout')";
            $this->conn->query($query);
        }

    }
?>