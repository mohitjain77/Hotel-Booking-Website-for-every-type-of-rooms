<?php
    class DatabaseConnection
    {
      public function __construct()
      {
        $conn = new mysqli(servername, db_user, db_password, db_name);

        if($conn->connect_error)
        {
            die("<h1>Database connection failed</h1>");
        }
        return $this->conn = $conn;
      }

      
    }
?>