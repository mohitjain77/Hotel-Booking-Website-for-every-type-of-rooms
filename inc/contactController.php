<?php
    include('dbconnect.php');

    class ContactController
    {
        public function __construct()
        {
            $db = new DatabaseConnection;
            $this->conn = $db->conn;
        }

        public function contact($name, $contactnumber, $email, $message)
        {
            $query = "INSERT INTO ContactUs (name, contactnumber, email, message) VALUES ('$name', '$contactnumber', '$email', '$message')";
            $result = $this->conn->query($query);
            return $result;
        }
    }
?>