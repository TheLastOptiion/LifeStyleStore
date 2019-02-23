<?php

require("includes/common.php");
 $emm = $_SESSION['email'];

  // Getting the values from the signup page using $_POST[] and cleaning the data submitted by the user.
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



     
    $query = "INSERT INTO user_address(user_email,city, locality, building, pin, state, landmark, fullname, number1, number2)VALUES
	('" . $emm . "','" . $city . "','" . $locality . "','" . $building . "','" . $pin . "','" . $state . "','" . $landmark . "'
	  ,'" . $fullname . "','" . $number1 . "','" . $number2 . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $res = mysqli_num_rows($query);
    header('location: success.php');
  
?>