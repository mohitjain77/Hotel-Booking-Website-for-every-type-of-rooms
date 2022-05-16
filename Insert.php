<?php
include_once 'banner.php';
if(isset($_POST['submit']))
{    
     $name = $_POST['full name'];
     $email = $_POST['e-mail'];
     $doa = $_POST['date of arrival'];
     $nonights = $_POST['no. of nights'];
     $sql = "INSERT INTO users (full name,e-mail,date of arrival,no. ofnights)
     VALUES ('$name','$email','$doa','$nonights')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>