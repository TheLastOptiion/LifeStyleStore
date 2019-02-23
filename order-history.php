<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
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
                  }
            th{
				color:orange;
			}
			
			td {
                      background-image: url("img/lifestylestore_bg.jpg");
					  color:white;
                  }				  
				
		</style>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                       <h2 style="color:orange;">Your Order History is:</h2>
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $sum = 0;
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.users_id='$user_id' and  status='Confirmed' ";	 
                        $qq = "select date from users_items where users_id='$user_id'";
						$res = mysqli_query($con, $qq)or die (mysqli_error($con));
						$result = mysqli_query($con, $query)or die (mysqli_error($con));
						if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
								    <th>s_no</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
									<th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
								$i=1;
								if($i<=mysqli_num_rows($result))
                                while ($row = mysqli_fetch_array($result)) {
                                            $r = mysqli_fetch_array($res);
																	 
                                    
                                    echo "<tr>
									          <td>" . "#" . $i++ . "</td>
											  <td>" . $row["Name"] . "</td>
									          <td>Rs " . $row["Price"] . "</td>
											  <td> " . $r["date"] . "</td>
											
										  </tr>";
                                
								
								
								}
								      ?>
                            </tbody>
                            <?php
						
                        } else {
                            echo "<h1 style='color:orange';>No Order is in your history!</h1>";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>
    </body>
</html>