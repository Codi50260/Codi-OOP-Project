<?php

class The_White_Rock_Hotel {
	public $name = "The White Rock Hotel";
	public $location = "Theodore Diligiannis 40, Greece";
	public $review = "<span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span>";
	public $image = "images/White_Rock_Hotel.jpg";
	public $rate = 70;
	public $facilities = 'Restaurant , Bar , Spa';
	public $desc = "The White Rock Hotel is in the center of Athens, 5 minutes walking distance from Larissa railway station and Metaxourghio Metro station. The hotel boasts a roof garden from which you can relax and enjoy a splendid view of the city and the Acropolis. The roof garden is open from May to the end of September. Free Wi-Fi is also included.";
}
class Spotlight_Hotel {
	public $name = "Spotlight Hotel";
	public $location = "Panepistimiou 52, Greece";
	public $review = "<span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span>";
	public $image = "images/Spotlight_Hotel.jpg";
	public $rate = 100;
	public $facilities = 'Restaurant , Bar , Swimming pool , Gym';
	public $desc = "The Spotlight Hotel is located in the heart of the Historical Center of Athens and has recently been renovated. It's surrounded by the most important monuments of the Grecian History, such as the Acropolis, the New Museum of Acropolis, the Parliament, the Archaeological Museum, and the National Library. It's located within short distance to theaters, modern commercial shops and city malls, offering its guests a wide variety of sightseeing and entertainment choices.";
}
class Hotel_Bliss {
	public $name = "Hotel Bliss";
	public $location = "Via Aurelia 738, Italy";
	public $review = "<span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span><span class='fa fa-star checked'></span>";
	public $image = "images/Hotel_Bliss.jpg";
	public $rate = 140;
	public $facilities = 'Restaurant , Bar , Pick-up / Drop-off , Swimming pool , Spa , Gym';
	public $desc = "Hotel Bliss is strategically located, less than 3 km away from Vatican City. Well connected by public transport. Decorated & furnished in a modern elegant style, our rooms and facilities are fresh & stylish, yet maintaining a coziness & warmth that are essential to us. Extra comfort is guaranteed by our hi-speed Wi-Fi, satellite HD LCD TVs, sound-proof double windows, and other facilities.";
}

?>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Codi's OOP Booking App | Compare</title>
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
					<h1 id="fh5co-logo"><a href="index.php">Codi's Booking App</a></h1>
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
	<div class="fh5co-parallax" style="background-image: url(images/slider1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Compare Hotels</h1>
						<p>Select which hotels you would like to compare against</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php
		if ($_POST['Hotel_Name'] == 'The White Rock Hotel') {
			$hotel = new The_White_Rock_Hotel();
		} else if ($_POST['Hotel_Name'] == 'Spotlight Hotel') {
			$hotel = new Spotlight_Hotel();
		} else if ($_POST['Hotel_Name'] == 'Hotel Bliss') {
			$hotel = new Hotel_Bliss();
		}

		if ($_POST['Hotel_Name_2'] == 'The White Rock Hotel') {
			$hotel2 = new The_White_Rock_Hotel();
		} else if ($_POST['Hotel_Name_2'] == 'Spotlight Hotel') {
			$hotel2 = new Spotlight_Hotel();
		} else if ($_POST['Hotel_Name_2'] == 'Hotel Bliss') {
			$hotel2 = new Hotel_Bliss();
		}
	?>
	<form method="post" action="compare.php">
		<div id="fh5co-contact-section">
			<div class="row">
				<div class="col-md-6">
					<?php
						echo "<div class='fh5co-map'><img src=".$hotel->image." alt=".$_POST['Hotel_Name']."></div>";
					?>
				</div>
				<div class="col-md-6">
					<div class="col-md-12">
						<?php
							echo "<h3>".$_POST['Hotel_Name']."</h3>";
							echo "<p>".$hotel->desc."</p>";
						?>
						<ul class="contact-info">
							<?php
								echo "<li><i class='ti-home'></i>".$hotel->location."</li>";
								echo "<li><i class='ti-money'></i> $".$hotel->rate." per day"."</li>";
								echo "<li><i class='ti-star'></i>".$hotel->review."</li>";
								echo "<li><i class='ti-medall'></i>".$hotel->facilities."</li>";
							?>
						</ul>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<section>
										<br>
										<select name='Hotel_Name'>
											<option value="" disabled selected>Select Hotel</option>
											<option value="The White Rock Hotel" selected="selected">The White Rock Hotel</option>
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
						echo "<div class='fh5co-map'><img src=".$hotel->image." alt=".$_POST['Hotel_Name']."></div>";
					?>
				</div>
				<div class="col-md-6">
					<div class="col-md-12">
						<?php
							echo "<h3>".$_POST['Hotel_Name_2']."</h3>";
							echo "<p>".$hotel2->desc."</p>";
						?>
						<ul class="contact-info">
							<?php
								echo "<li><i class='ti-home'></i>".$hotel2->location."</li>";
								echo "<li><i class='ti-money'></i> $".$hotel2->rate." per day"."</li>";
								echo "<li><i class='ti-star'></i>".$hotel2->review."</li>";
								echo "<li><i class='ti-medall'></i>".$hotel2->facilities."</li>";
							?>
						</ul>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<section>
										<br>
										<select name='Hotel_Name_2'>
											<option value="" disabled selected>Select Hotel</option>
											<option value="The White Rock Hotel">The White Rock Hotel</option>
											<option value="Spotlight Hotel" selected="selected">Spotlight Hotel</option>
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
		<input type="submit" value="View Hotels">
	</form>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy; 2016 Free HTML5 Template. <br> All Rights Reserved. <br>
						Designed by <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a> <br> Demo Images: <a href="http://unsplash.com/" target="_blank">Unsplash</a></small></p>
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
								<li><a href="#">Pick-up</a></li>
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
	<!-- Owl Slider -->
	<!-- // <script src="js/owl.carousel.min.js"></script> -->
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>

	<script src="js/custom.js"></script>
	<script>
		var select = document.getElementById('Hotel_Name');
		var value = select.options[select.selectedIndex].value;
		console.log(value);
	</script>

</body>