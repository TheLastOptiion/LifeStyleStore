<?php

require("includes/common.php");
 $eem = $_SESSION['email'];
  $query= "select * from user_address where user_email='$eem'";
	   $query_result= mysqli_query($con,$query);
	   $rows= mysqli_num_rows($query_result);   
       if($rows<1)
          {
	          header('location:address.php');
          }
	  
?>


<!doctype html>
<html>
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<style>
     		body {
                       background-image: url("img/lifestylestore_bg.jpg");
                       font-size:15px;
				  }  
		     input{
				     padding:10px;
					 color:tomato;
					 
			 }
			 .But{
	                 display:block;
					 margin-left:12px 
			 }
			 #theFourm{
				 
				 display:table;
				 padding:40px;
			 }
			 .row{
				 display:table-row;
			 }
			 .row label{
				 display:table-cell;
				 padding:2px;
				 text-align:right;
				 color:white;
			 }
			 .row input{
				 display: table-cell;
				 padding:2px;
			 }
		</style>
    </head>


<body>
            <?php include 'includes/header.php'; ?>
			<div class="container-fluid decor_bg" id="content">
              <div class="row">
                <div class="container">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
				   	 <h6 style="color:#eda764;">*Edit your address:</h6>
	           <form id="theFourm" action="update_address.php" method="post">
				         <?php 
				           for($i=1;$i<=$rows;$i++)
					        {
						      $row= mysqli_fetch_array($query_result);
						  ?>
                    <div class="row">
			            <label for="city">City:</label>     
					    <input class="form-control" type="text" value="<?php echo $row['city']?>" name="city"/><br><br>
					</div>
					<div class="row">
					   <label for="locality">Locality:</label>
					   <input class="form-control" type="text" value="<?php echo $row['locality']?>" name="locality" /> <br><br>
					</div>
					<div class="row">
					   <label for="building">Building:</label>
					   <input class="form-control" class="form-control" type="text"  value="<?php echo $row['building']?>" name="building" /><br><br>
					</div>
					<div class="row">
					   <label for="pin">Pincode:</label>
					   <input class="form-control" type="number" value="<?php echo $row['pin']?>" name="pin" /><br><br>
					</div>
					<div class="row">
					   <label for="landmark">Landmark:</label>
					   <input class="form-control" type="text" align="right" value="<?php echo $row['landmark']?>" name="landmark" /><br><br>
					</div>
					<div class="row">
					   <label for="state">State:</label>
					   <input class="form-control" type="text" value="<?php echo $row['state']?>" name="state"/><br><br>
					</div>
					<div class="row">
					   <label for="fullname">Full name:</label>
					   <input class="form-control" type="text" value="<?php echo $row['fullname']?>" name="fullname" /><br><br>
					</div>
					<div class="row">
					   <label for="number1">Contact 1:</label>
					   <input class="form-control" type="number" value="<?php echo $row['number1']?>" name="number1"/><br><br>
					</div>
					<div class="row">
					   <label for="number2">Contact 2:</label>
					   <input class="form-control" type="number" value="<?php echo $row['number2']?>" name="number2" /><br><br>
					</div>
				   <?php }?>			   
	                 <br>
	                   <input style=" position: absolute; top: 84%; left:53%;" class="btn btn-danger" type="submit" class="button"  value="Change"/>
	                 <br>
		             <br>
		        </form>
		             <div style="position: absolute;  top:88%; left:33%; margin:10px;">
					 
		                <a href="save_edit_use.php"><input class="btn btn-primary" type="button" value="Click Here to Use this Address"/></a>
		             
					 </div>
                  </div>
	           </div>
	        </div>
	     </div>
	<?php include("includes/footer.php"); ?>
				
   </body>
   
   </html>