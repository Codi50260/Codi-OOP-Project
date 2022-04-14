<?php require 'classes.php';

// Function to convert the calender format to a more standard one so I can calculate the diff between days
function difference() {
	$dateOut = $_POST["CheckOut"];
	$dateIn = $_POST["CheckIn"];
	$your_date1 = date("Y-m-d", strtotime($dateOut));
	$your_date2 = date("Y-m-d", strtotime($dateIn));
	$now = strtotime($your_date1);
	$your_date = strtotime($your_date2);
	$datediff2 = $now - $your_date;
	$datediff = round($datediff2 / (60 * 60 * 24));
	return $datediff;
}

?>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Codi's OOP Booking App | Confirm</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
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
	<!-- Star Rating -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
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
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
							<li><a href="compare.php">Compare</a></li>
							<li><a class="active" href="#">Confirmation</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/background_confirm.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Confirmation of Booking</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>

	<div class="feature-full-1col" id="hotel">
		<?php
		// Creating new class and assigining to var $hotel so that I can call individual vars inside the class once the form on index.php has been submitted
		if ($_POST['Hotel_Name'] == 'Prestige Hotel') {
			$hotel = new Prestige_Hotel();
		} else if ($_POST['Hotel_Name'] == 'Spotlight Hotel') {
			$hotel = new Spotlight_Hotel();
		} else if ($_POST['Hotel_Name'] == 'Hotel Bliss') {
			$hotel = new Hotel_Bliss();
		}
			echo "<div class='image' style='background-image: url(".$hotel->image.");'>";
		?>
		<div class="descrip text-center">
			<?php
				echo "<p><span>$".$hotel->rate."/day</span></p>";
			?>
		</div>
		</div>
		<div class="desc">
			<h3>
				<?php echo $hotel->name."<br>";
				echo $hotel->review?>
			</h3>
			<ul class="contact-info">
				<li><i class='ti-pin'></i><?php echo $hotel->location ?></li>
				<li><i class='ti-world'></i>Facilities - <?php echo $hotel->facilities ?></li>
				<li><i class='ti-time'></i> Number of Days: <?php $datediff = difference(); echo $datediff ?></li>
				<li><i class='ti-calendar'></i> Check In - <?php echo $_POST["CheckIn"] ?></li>
				<li><i class='ti-calendar'></i> Check Out - <?php echo $_POST["CheckOut"] ?></li>
			</ul>
			<div><i class='ti'></i> Total Cost: $<?php echo $hotel->rate * $datediff ?></div>
		</div>
	</div>

	<div class="wrap" id="form">
		<div class="container">
			<div class="row">
				<div id="availability">
					<!-- Form to submit to the final thank you page - This is just final confirmation to make sure all the info is correct -->
					<form action="thanks.php" method="post">
						<div class="a-col">
							<div class="input-field_2">
								<label for="surname">Surname</label>
								<input type="text" class="form-control" id="surname" name="surname" required/>
							</div>
						</div>
						<div class="a-col">
							<div class="input-field_2">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" required/>
							</div>
						</div>
						<div class="a-col">
							<div class="input-field_2">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" required/>
							</div>
						</div>
						<div class="a-col" style="">
							<p><button type="submit" class="btn btn-primary btn-luxe-primary">Confirm Booking<i class="ti-angle-right"></i></button></p>
						</div>
						<div class="a-col">
						<p><button type="button" onclick="window.location.href='index.php'" class="btn btn-primary btn-luxe-primary">Cancel<i class="ti-angle-right"></i></button></p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer to close off the page -->
	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; <strong>Codi de Faria's OOP Project.</strong> <br> All Rights Reserved. <br>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3><strong>Company</strong></h3>
							<ul class="link">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Hotels</a></li>
								<li><a href="#">Customer Care</a></li>
								<li><a href="#">Contact Us</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3><strong>Our Facilities</strong></h3>
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
							<h3><strong>Subscribe</strong></h3>
							<p>Subscribe to hear more about us and receive our newspapers. </p>
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