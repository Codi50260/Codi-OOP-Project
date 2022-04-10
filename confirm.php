<?php

function dateDiffInDays($date1, $date2) 
{
	// Calculating the difference in timestamps
	$diff = strtotime($date2) - strtotime($date1);

	if ($diff > 0) {
		return abs(round($diff / 86400));
	} else {
		echo "Invalid dates, please return and correct error";
		return False;
	}
}
class The_White_Rock_Hotel {
	public $rate = 70;
	public $facilities = ['restaurant', 'bar', 'spa'];
}
class Spotlight_Hotel {
	public $rate = 100;
	public $facilities = ['restaurant', 'bar', 'swimming pool', 'gym'];
}
class Hotel_Bliss {
	public $rate = 140;
	public $facilities = ['restaurant', 'bar', 'pick-up / drop-off', 'swimming pool', 'spa', 'gym'];
}
?>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Codi's OOP Booking App | Confirm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="css/flaticon.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	
	<!-- Style -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.php">Codi's Booking App</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="compare.php">Compare</a></li>
							<li><a class="active" href="confirm.php">Confirmation</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Confirmation of Booking</h1>
						<p><span>Please fill in and confirm details are correct</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-services-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="services">
						<span><i class="ti-home"></i></span>
						<div class="desc">
							<h3>Booking for Hotel:</h3>
						</div>
						<br>
						<form method="post" action="thanks.php">
							<p>
								<label for="hotel" id="formText">Hotel chosen:</label>
								<?php
								if ($_POST['Hotel_Name'] == 'The White Rock Hotel') {
									$hotel = new The_White_Rock_Hotel();
								} else if ($_POST['Hotel_Name'] == 'Spotlight Hotel') {
									$hotel = new Spotlight_Hotel();
								} else if ($_POST['Hotel_Name'] == 'Hotel Bliss') {
									$hotel = new Hotel_Bliss();
								}
								echo "<br>".$_POST['Hotel_Name'];
								echo "<br>Daily rate: $".$hotel->rate;
								?>
							</p>
							<p>
								<label for="numdays" id="formText">Number of Days:</label>
								<?php
								$dateDiff = dateDiffInDays($_POST["CheckIn"], $_POST["CheckOut"]);
								echo "<br>".$dateDiff;
								echo "<br>Total cost: $".$hotel->rate * $dateDiff;
								?>
							</p>
							<p>
								<label for="checkIn" id="formText">Check in:</label>
								<?php
								echo $_POST["CheckIn"];
								?>
							</p>
							<p>
								<label for="checkOut" id="formText">Check out:</label>
								<?php
								echo $_POST["CheckOut"];
								?>
							</p>
							<h3>Please fill in the details below to complete booking</h3>
							<p>
								<label for="name" id="formText">First Name:</label>
								<input type="text" name="name" style="color: dimgray;" onclick="this.value=''" required>
							</p>
							<p>
								<label for="surname" id="formText">Surname:</label>
								<input type="text" name="surname" style="color: dimgray;" onclick="this.value=''" required>
							</p>
							<p>
								<label for="email" id="formText">Email Address:</label>
								<input type="email" name="email" style="color: dimgray;" onclick="this.value=''" required>
							</p>
							<?php
							if ($dateDiff != FALSE) {
								echo "<input type='submit' value='Book'>";
							}
							?>
						</form>
						<form method="get" action="index.php">
							<input type="submit" value="Cancel">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; Codi de Faria's OOP Project. <br> All Rights Reserved. <br>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>Company</h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>Our Facilities</h3>
							<ul class="link">
								<li><a href="#">Resturant</a></li>
								<li><a href="#">Bars</a></li>
								<li><a href="#">Pick-up / Drop-Off</a></li>
								<li><a href="#">Swimming Pool</a></li>
								<li><a href="#">Spa</a></li>
								<li><a href="#">Gym</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>Subscribe</h3>
							<p>Sed cursus ut nibh in semper. Mauris varius et magna in fermentum. </p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li>
							<a href="#"><i class="icon-twitter-with-circle"></i></a>
							<a href="#"><i class="icon-facebook-with-circle"></i></a>
							<a href="#"><i class="icon-instagram-with-circle"></i></a>
							<a href="#"><i class="icon-linkedin-with-circle"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	</div>
	</div>
	
	<!-- Javascripts -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<!-- Dropdown Menu -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/custom.js"></script>

</body>
</html>