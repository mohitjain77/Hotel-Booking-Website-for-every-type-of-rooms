<?php

    $connection = mysqli_connect("localhost", "root", "");
    $query = "CREATE DATABASE if not exists `hotelbookingdb`";
    mysqli_query($connection, $query);
?>