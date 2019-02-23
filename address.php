<?php

require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
  $em = $_SESSION['email'];
 $qq = "select * from user_address where user_email='$em'";
 $res = mysqli_query($con, $qq) or die(mysqli_error($con));
 $rcount = mysqli_num_rows($res);
    if($rcount==1)
	{
		header('location:saves_address.php');
	}

?>
 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>Success | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
		<style>
		body {
                      background-image: url("img/lifestylestore_bg.jpg");
                  }
				  a{
					  color:#edc764;
				  }
        </style>				  
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
			  
           <div class="container-fluid decor_bg" id="content">
            <div class="row">
                <div class="container">
                    
					<div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
		               <form  action="address_script.php" method="POST">
						<legend><h3 style="font-size:15px; color:red; ">Enter Address</h3></legend>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="*City" name="city"  required = "true" >
                            </div>
							<div class="form-group">
                                <input type="text" class="form-control" placeholder="*Locality,area or street" name="locality"  required = "true" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Flat no.,Building name*" name="building"  required = "true" >
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Pincode*" maxlength="10" size="10" name="pin"  required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="State*" maxlength="6" size="6" name="state" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Landmark(optional)" name="landmark" >
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Full name" name="fullname" required = "true">
                            </div>
							<div class="form-group">
                                <input  type="number" class="form-control"  placeholder="10-didit mob. number" maxlength="10" size="10" name="number1" required = "true">
                            </div>
							<div class="form-group">
                                <input  type="number" class="form-control"  placeholder="Alternate mob. number" maxlength="10" size="10" name="number2" required = "true">
                            </div>
							
                            <button type="submit" name="submit" class="btn btn-primary">Proceed</button>
                        </form>
						<br>
					
					</div>
					</div>
			</div>		
			</div>	
        <?php include("includes/footer.php");
        ?>
    </body>
</html>