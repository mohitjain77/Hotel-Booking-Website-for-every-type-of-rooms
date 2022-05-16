<?php
  require_once("inc/initializedb.php");
  include('inc/bannerController.php');
  include('availablerooms.php');

  $rooms = new AvailableRooms;
  $rooms->getrooms();
  $rooms->createcontacttable();
  $rooms->createbookingtable();

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $booking = new BannerController();
    $booking->booking($_POST['fullname'], $_POST['contactnumber'], $_POST['numberofrooms'], $_POST['typeofrooms'], $_POST['checkin'], $_POST['checkout']);
    $rooms->updaterooms($_POST['typeofrooms'], $_POST['numberofrooms']);
    header('location: index.php');
    die;
  }


?>

<!DOCTYPE html>
<html>
  <?php include 'inc/head.php'; ?>
  <body>
    <?php include 'inc/nav.php'; ?>
    <?php include 'inc/banner.php'; ?>
    <?php include 'inc/grid.php'; ?>
    <?php include 'inc/footer.php'; ?>

  </body>
</html>
