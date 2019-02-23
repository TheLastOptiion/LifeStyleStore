<?php
// This page updates the user address
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
  $em=$_SESSION['email'];
  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);
  $locality = $_POST['locality'];
  $locality = mysqli_real_escape_string($con, $locality);
  $building = $_POST['building'];
  $building = mysqli_real_escape_string($con, $building);
  $pin = $_POST['pin'];
  $pin = mysqli_real_escape_string($con, $pin);
  $state = $_POST['state'];
  $state = mysqli_real_escape_string($con, $state);
  $landmark = $_POST['landmark'];
  $landmark = mysqli_real_escape_string($con, $landmark);
  $fullname = $_POST['fullname'];
  $fullname = mysqli_real_escape_string($con, $fullname);
  $number1 = $_POST['number1'];
  $number1 = mysqli_real_escape_string($con, $number1);
  $number2 = $_POST['number2'];
  $number2 = mysqli_real_escape_string($con, $number2);
  
 $query = "UPDATE user_address
			   set
			       user_email='$em',city='$city ',locality='$locality',building='$building',pin='$pin',
			       state='$state',landmark='$landmark',fullname='$fullname',number1='$number1',number2='$number2' ";
        mysqli_query($con, $query) or die(mysqli_error($con));
     header('location:saves_address.php');
?>
