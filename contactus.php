<?php
  include("inc/contactController.php");

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $booking = new ContactController();
    $booking->contact($_POST['name'], $_POST['contactnumber'], $_POST['email'], $_POST['message']);
    header('location: contactus.php');
    
  }
?>

<!DOCTYPE html>
<html>
  <?php include 'inc/head.php'; ?>
  <body>
    <?php include 'inc/nav.php'; ?>
    <?php include 'inc/contactdetails.php'; ?>
    <?php include 'inc/footer.php'; ?>
  </body>
</html>


