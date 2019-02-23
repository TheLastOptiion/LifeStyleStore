<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Group Details</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
</head>

<body>

	<!-- Header -->
	<header id="header">
		<!-- container -->
		<div class="container">
			<!-- navbar header -->
			<div class="navbar-header">
				<!-- Logo -->
				<div class="navbar-brand">
					<a class="logo" href="index.html">
						<img class="logo-img" src="./img/logo.png" alt="logo">
						<img class="logo-alt-img" src="./img/logo-alt.png" alt="logo">
					</a>
				</div>
				<!-- /Logo -->

				<!-- Mobile toggle -->
				<button class="navbar-toggle">
						<i class="fa fa-bars"></i>
					</button>
				<!-- /Mobile toggle -->
			</div>
			<!-- /navbar header -->

			<!-- Navigation -->
			<nav id="nav">
				<ul class="main-nav nav navbar-nav navbar-right">
					<<li><a href="#">Welcome,</a></li>
					<li><a href="#">Match result</a></li>
					<li><a href="#">Payment status</a></li>
					<li><a href="logout_script.php">logout</a></li>
				</ul>
			</nav>
			<!-- /Navigation -->

		</div>
		<!-- /container -->
	</header>
	<!-- /Header -->

	<!-- Page Header -->
	<div id="page-wrapper" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- wrapper content -->
				<div class="col-md-12">
					<div class="page-wrapper-content">
						<h1>Add your Group Details.</h1>
					</div>
				</div>
				<!-- /wrapper content -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Page Header -->

	<!-- BLOG -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- blog -->
				<div class="col-md-12">
					<div class="blog">
						<!-- blog content -->
						
						<div class="blog-content">
							<div class="blog-meta">

						
						<!-- /comments -->

						<!-- reply form -->
						<div class="blog-reply">
							
							<p style="font-size:20px;">Please Add your team mates details so that we can easily manage your details and provide you a better service.</p>
							<br>
							
							<p style="font-size:30px;">NAME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CHARACTER ID &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp AVATAR NAME </p>
							
								           <form id="theFourm" action="update_address.php" method="post">
				         <?php 
				           for($i=1;$i<=$rows;$i++)
					        {
						      $row= mysqli_fetch_array($query_result);
						  ?>
                    <div class="row">
			            <label for="city">Name:</label>     
					    <input class="form-control" type="text" value="<?php echo $row['city']?>" name="city"/><br><br>
					</div>
					<div class="row">
					   <label for="locality">Character_id</label>
					   <input class="form-control" type="text" value="<?php echo $row['locality']?>" name="locality" /> <br><br>
					</div>
					<div class="row">
					   <label for="building">Character_name</label>
					   <input class="form-control" class="form-control" type="text"  value="<?php echo $row['building']?>" name="building" /><br><br>
					</div>
				   <?php }?>			   
	                 <br>
	                   <input style=" position: absolute; top: 84%; left:53%;" class="btn btn-danger" type="submit" class="button"  value="Change"/>
	                 <br>
		             
		        </form>
							
							</form>
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
							
						</div>
						<!-- /reply form -->
					</div>
				</div>
				<!-- /blog -->

				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /BLOG -->

	<!-- CTA -->

	<!-- /CTA -->

	<!-- Contact -->
	<div id="contact" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="section-title">
					<h3 class="title"><span>Contact</span> <span style="color: #dd0a37;">Info</span></h3>
				</div>
				<!-- /section title -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Address</h3>
						<p>2635 Simons Hollow Road, NEW YORK</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Phone</h3>
						<p>570-751-2415</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<h3>Email</h3>
						<a href="#">event@support.com</a>
					</div>
				</div>
				<!-- /contact -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		
	</div>
	<!-- /Contact -->

	
	<!-- Footer -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">

				<!-- footer logo -->
				<div class="col-md-4 col-md-push-4">
					<div class="footer-brand">
						<a class="logo" href="index.html">
							<img class="logo-img" src="./img/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<!-- /footer logo -->

				<!-- contact social -->
				<div class="col-md-4 col-md-push-4">
					<div class="contact-social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-whatsapp"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
					</div>
				</div>
				<!-- /contact social -->

				<!-- copyright -->
				<div class="col-md-4 col-md-pull-8">
					<span class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				<!-- /copyright -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /Footer -->

	<!-- jQuery Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/main.js"></script>

</body>

</html>