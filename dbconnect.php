<?php

define('servername', 'localhost');
define('db_user','root');
define('db_password', '');
define('db_name', 'hotelbookingdb');

include_once('databaseConnection.php');
$db = new DatabaseConnection;

?>