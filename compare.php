<?php require 'classes.php';

if ($_POST) {
	// Creating new class and assigining to var $hotel so that I can call individual vars inside the class once the form has been submitted
	if ($_POST['Hotel_Name'] == 'Prestige Hotel') {
		$hotel = new Prestige_Hotel();
	} else if ($_POST['Hotel_Name'] == 'Spotlight Hotel') {
		$hotel = new Spotlight_Hotel();
	} else if ($_POST['Hotel_Name'] == 'Hotel Bliss') {
		$hotel = new Hotel_Bliss();
	}

	// Creating new class and assigining to var $hotel2 so that I can call individual vars inside the class once the form has been submitted
	if ($_POST['Hotel_Name_2'] == 'Prestige Hotel') {
		$hotel2 = new Prestige_Hotel();
	} else if ($_POST['Hotel_Name_2'] == 'Spotlight Hotel') {
		$hotel2 = new Spotlight_Hotel();
	} else if ($_POST['Hotel_Name_2'] == 'Hotel Bliss') {
		$hotel2 = new Hotel_Bliss();
	}
}
?>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Codi's OOP Booking App | Compare</title>
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
							<li><a class="active" href="compare.php">Compare</a></li>
							<li><a href="#">Confirmation</a></li>
						</ul>
					</nav>
				</div> 
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<div class="fh5co-parallax" style="background-image: url(images/background_compare.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Comparing of Hotels</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<form method="post" action="compare.php" name="fom">
		<div id="fh5co-contact-section">
			<div class="row">
				<div class="col-md-6">
					<?php
					// Calling the variable $Hotel with class so that I can grab its corrosponging data to compare
					if ($_POST) {
						echo "<div class='fh5co-map'><img src=".$hotel->image." alt=".$_POST['Hotel_Name']." style='width:100%; max-height:100%; object-fit: contain'></div>";
					} else {
					echo "<div class='fh5co-map'><img src='images/compare_image1.jpg' alt='background pic' style='width:100%; max-height:100%; object-fit: contain'></div>";
					}
					?>
				</div>
				<div class="col-md-6">
					<div class="col-md-12">
						<?php
						if ($_POST) {
							echo "<h3>".$_POST['Hotel_Name']."</h3>";
							echo "<p>".$hotel->desc."</p>";
						}
						?>
						<ul class="contact-info">
							<?php
							if ($_POST) {
								echo "<li><i class='ti-pin'></i>".$hotel->location."</li>";
								echo "<li><i class='ti-money'></i> $".$hotel->rate." per day"."</li>";
								echo "<li><i class='ti-star'></i>".$hotel->review."</li>";
								echo "<li><i class='ti-world'></i>".$hotel->facilities."</li>";
							}
							?>
						</ul>
					</div>
					<div class="col-md-12">
						<div class="row">
							<?php
							if (!$_POST) {
								echo "Please select Hotel to compare";
							}
							?>
							<div class="col-md-12">
								<div class="form-group">
									<section>
										<br>
										<!-- Hotel select to compare to the other one -->
										<select name='Hotel_Name' style="width: 130px; padding: 10px 0; margin: 10px auto; border-radius: 5px; border: none; background-color: #9e9b9b; color: white" required >
											<option value="" disabled selected>Select Hotel</option>
											<option value="Prestige Hotel">Prestige Hotel</option>
											<option value="Spotlight Hotel">Spotlight Hotel</option>
											<option value="Hotel Bliss">Hotel Bliss</option>
										</select>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		

		<div id="fh5co-contact-section">
			<div class="row">
				<div class="col-md-6">
					<?php
					// Calling the variable $Hotel2 with class so that I can grab its corrosponging data to compare
					if ($_POST) {
						echo "<div class='fh5co-map'><img src=".$hotel2->image." alt=".$_POST['Hotel_Name']." style='width:100%; max-height:100%; object-fit: contain'></div>";
					} else {
						echo "<div class='fh5co-map'><img src='images/compare_image2.jpg' alt='background pic' style='width:100%; max-height:100%; object-fit: contain'></div>";
					}
					?>
				</div>
				<div class="col-md-6">
					<div class="col-md-12">
						<?php
						if ($_POST) {
							echo "<h3>".$_POST['Hotel_Name_2']."</h3>";
							echo "<p>".$hotel2->desc."</p>";
						}
						?>
						<ul class="contact-info">
							<?php
							if ($_POST) {
								echo "<li><i class='ti-home'></i>".$hotel2->location."</li>";
								echo "<li><i class='ti-money'></i> $".$hotel2->rate." per day"."</li>";
								echo "<li><i class='ti-star'></i>".$hotel2->review."</li>";
								echo "<li><i class='ti-medall'></i>".$hotel2->facilities."</li>";
							}
							?>
						</ul>
					</div>
					<div class="col-md-12">
						<div class="row">
							<?php
							if (!$_POST) {
								echo "Please select Hotel to compare";
							}
							?>
							<div class="col-md-12">
								<div class="form-group">
									<section>
										<br>
										<!-- Hotel select to compare to the other one -->
										<select name='Hotel_Name_2' style="width: 130px; padding: 10px 0; margin: 10px auto; border-radius: 5px; border: none; background-color: #9e9b9b; color: white" required>
											<option value="" disabled selected>Select Hotel</option>
											<option value="Prestige Hotel">Prestige Hotel</option>
											<option value="Spotlight Hotel">Spotlight Hotel</option>
											<option value="Hotel Bliss">Hotel Bliss</option>
										</select>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div style="text-align:center">
			<input type="submit" value="Compare Hotels" name="click" style="width: 15%; padding: 10px 0; margin: 10px auto; border-radius: 5px; border: none; background-color: #6e6c69; color: white">
		</div>
	</form>

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