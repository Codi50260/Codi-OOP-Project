<?php require 'classes.php'?>
<html class="no-js">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Codi's OOP Booking App | Home</title>
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
		<!-- Style -->
		<link rel="stylesheet" href="css/style.css">
		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
		<script>
			function dateCheck() {
				var x = document.getElementById("date-start").value;
				var y = document.getElementById("date-end").value;

				if (y>x){
					document.getElementById("tooltiptext").style.visibility = "hidden";
					return true;
				} else{
					document.getElementById("tooltiptext").style.visibility = "visible";
					return false;
				}
			}
			function selectHotel() {
				var x = document.getElementById("optHotel").value;

				if (x == ""){
					document.getElementById("tooltiptext2").style.visibility = "visible";
					return false;
				} else{
					document.getElementById("tooltiptext2").style.visibility = "hidden";
					return true;
				}
			}
			function validate() {
				bool = false
				selectHotel();
				dateCheck();

				if (selectHotel() && dateCheck()){
					bool = true
				};

				if (bool === true){
					document.getElementById("subForm").submit();
				}
			}
		</script>

	</head>
	<body>
		<!-- <div id="fh5co-wrapper"> -->
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.php">Codi's DF Booking App | April 2022</a></h1>
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li><a class="active"href="index.php">Home</a></li>
								<li><a href="compare.php">Compare</a></li>
								<li><a href="#">Confirmation</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
		</div>
		<div class="fh5co-parallax" style="background-image: url(images/slider3.jpg); height: 100%" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell">
							<h1 class="text-center" style="font-family: Geomanist">Find your own (s)pace</h1>
							<p>Make yourself right at home, open spaces, modern facilities and fully-equipped hotels are yours for the taking. Whether you stay to dream, dine, or dance, there is always something here for you.</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wrap" id="form">
			<div class="container">
				<div class="row">
					<div
					 id="availability">
					 	<span id="tooltiptext2" style="visibility: hidden;width: 300px;background-color: red;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;bottom: 100%;left: 150px;margin-left: -60px;">No Hotel selected, Please try again</span>
						<span id="tooltiptext" style="visibility: hidden;width: 300px;background-color: red;color: #fff;text-align: center;border-radius: 6px;padding: 5px 0;position: absolute;z-index: 1;bottom: 100%;left: 50%;margin-left: -60px;">Invalid date, Please try again</span>
						<form action="confirm.php" method="post" id="subForm">
							<div class="a-col">
								<section>
									<select class="cs-select cs-skin-border" name='Hotel_Name' id="optHotel" required>
										<option value="" disabled selected>Select Hotel</option>
										<option value="The White Rock Hotel">The White Rock Hotel</option>
										<option value="Spotlight Hotel">Spotlight Hotel</option>
										<option value="Hotel Bliss">Hotel Bliss</option>
									</select>
								</section>
							</div>
							<div class="a-col alternate">
								<div class="input-field">
									<label for="date-start">Check In</label>
									<input type="text" class="form-control" id="date-start" name='CheckIn' required/>
								</div>
							</div>
							<div class="a-col alternate">
								<div class="input-field">
									<label for="date-end">Check Out</label>
									<input type="text" class="form-control" id="date-end" name='CheckOut' required/>
								</div>
							</div>
							<div class="a-col">
								<p><a href="compare.php" class="btn btn-primary btn-luxe-primary">Compare Hotels<i class="ti-angle-right"></i></a></p>
							</div>
							<div class="a-col">
								<p><button type="button" onclick="validate()" class="btn btn-primary btn-luxe-primary" id="lala">Book Hotel<i class="ti-angle-right"></i></button></p>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div id="fh5co-counter-section" class="fh5co-counters">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="251102" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Current Guests</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Check-Ins</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Reviews and Ratings</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="4850" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Staff on Hand</span>
					</div>
				</div>
			</div>
		</div>

		<div id="featured-hotel" class="fh5co-bg-color">
			<div class="container">
				
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Featured Hotels</h2>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="feature-full-1col">
						<?php
							$Bliss = new Hotel_Bliss();
							echo "<div class='image' style='background-image: url(".$Bliss->image.");'>";
						?>
							<div class="descrip text-center">
								<?php
									echo "<p><span>$".$Bliss->rate."/night</span></p>";
								?>
							</div>
						</div>
						<div class="desc">
							<?php
								echo "<h3>".$Bliss->name."</h3>";
								echo "<p>".$Bliss->desc."</p>";
							?>
							<p><a href="#form" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>

					<div class="feature-full-1col" id="hotel">
						<?php
							$Spotlight = new Spotlight_Hotel();
							echo "<div class='image' style='background-image: url(".$Spotlight->image.");'>";
						?>
							<div class="descrip text-center">
								<?php
									echo "<p><span>$".$Spotlight->rate."/night</span></p>";
								?>
							</div>
						</div>
						<div class="desc">
							<?php
								echo "<h3>".$Spotlight->name."</h3>";
								echo "<p>".$Spotlight->desc."</p>";
							?>
							<p><a href="#form" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>

					<div class="feature-full-1col">
						<?php
							$WhiteRock = new The_White_Rock_Hotel();
							echo "<div class='image' style='background-image: url(".$WhiteRock->image.");'>";
						?>
							<div class="descrip text-center">
								<?php
									echo "<p><span>$".$WhiteRock->rate."/night</span></p>";
								?>
							</div>
						</div>
						<div class="desc">
							<?php
								echo "<h3>".$WhiteRock->name."</h3>";
								echo "<p>".$WhiteRock->desc."</p>";
							?>
							<p><a href="#form" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="hotel-facilities">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Hotel Facilities</h2>
						</div>
					</div>
				</div>

				<div id="tabs">
					<nav class="tabs-nav">
						<a href="#" class="active" data-tab="tab1">
							<i class="flaticon-restaurant icon"></i>
							<span>Restaurant</span>
						</a>
						<a href="#" data-tab="tab2">
							<i class="flaticon-cup icon"></i>
							<span>Bar</span>
						</a>
						<a href="#" data-tab="tab3">
						
							<i class="flaticon-car icon"></i>
							<span>Pick-up /</span>
							<span>Drop-off</span>
						</a>
						<a href="#" data-tab="tab4">
							
							<i class="flaticon-swimming icon"></i>
							<span>Swimming Pool</span>
						</a>
						<a href="#" data-tab="tab5">
							
							<i class="flaticon-massage icon"></i>
							<span>Spa</span>
						</a>
						<a href="#" data-tab="tab6">
							
							<i class="flaticon-bicycle icon"></i>
							<span>Gym</span>
						</a>
					</nav>
					<div class="tab-content-container">
						<div class="tab-content active show" data-tab-content="tab1" id="restaurant">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Bliss->resImage." class='img' alt='Hotel Bliss Restaurant' style='max-width:100%; max-height:100%; object-fit: cover'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Bliss->resType."</span>";
											echo "<h3 class='heading'>".$Bliss->name."</h3>";
											echo "<p>".$Bliss->restaurant."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Bliss->resHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Spotlight->resImage." class='img' alt='Spotlight Hotel Restaurant' style='max-width:100%; max-height:100%; object-fit: cover'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Spotlight->resType."</span>";
											echo "<h3 class='heading'>".$Spotlight->name."</h3>";
											echo "<p>".$Spotlight->restaurant."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Spotlight->resHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$WhiteRock->resImage." class='img' alt='White Rock Hotel Restaurant' style='max-width:100%; max-height:100%; object-fit: cover'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$WhiteRock->resType."</span>";
											echo "<h3 class='heading'>".$WhiteRock->name."</h3>";
											echo "<p>".$WhiteRock->restaurant."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$WhiteRock->resHour."</strong>";
											?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab2" id="bar">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Bliss->barImage." class='img' alt='Bliss Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Bliss->barType."</span>";
											echo "<h3 class='heading'>".$Bliss->name."</h3>";
											echo "<p>".$Bliss->bar."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Bliss->barHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Spotlight->barImage." class='img' alt='Spotlight Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Spotlight->barType."</span>";
											echo "<h3 class='heading'>".$Spotlight->name."</h3>";
											echo "<p>".$Spotlight->bar."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Spotlight->barHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$WhiteRock->barImage." class='img' alt='White Rock Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$WhiteRock->barType."</span>";
											echo "<h3 class='heading'>".$WhiteRock->name."</h3>";
											echo "<p>".$WhiteRock->bar."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$WhiteRock->barHour."</strong>";
											?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab3" id="parking">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Bliss->valetImage." class='img' alt='Bliss Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Bliss->parkingType."</span>";
											echo "<h3 class='heading'>".$Bliss->name."</h3>";
											echo "<p>".$Bliss->parking."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Bliss->parkingHour."</strong>";
											?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab4" id="pool">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Bliss->poolImage." class='img' alt='Bliss Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Bliss->poolType."</span>";
											echo "<h3 class='heading'>".$Bliss->name."</h3>";
											echo "<p>".$Bliss->pool."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Bliss->poolHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Spotlight->poolImage." class='img' alt='Spotlight Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Spotlight->poolType."</span>";
											echo "<h3 class='heading'>".$Spotlight->name."</h3>";
											echo "<p>".$Spotlight->pool."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Spotlight->poolHour."</strong>";
											?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab5" id="spa">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Bliss->spaImage." class='img' alt='Bliss Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Bliss->spaType."</span>";
											echo "<h3 class='heading'>".$Bliss->name."</h3>";
											echo "<p>".$Bliss->spa."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Bliss->spaHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$WhiteRock->spaImage." class='img' alt='White Rock Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$WhiteRock->spaType."</span>";
											echo "<h3 class='heading'>".$WhiteRock->name."</h3>";
											echo "<p>".$WhiteRock->spa."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$WhiteRock->spaHour."</strong>";
											?>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab6" id="gym">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Bliss->gymImage." class='img' alt='Bliss Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Bliss->gymType."</span>";
											echo "<h3 class='heading'>".$Bliss->name."</h3>";
											echo "<p>".$Bliss->gym."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Bliss->gymHour."</strong>";
											?>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<?php
											echo "<img src=".$Spotlight->gymImage." class='img' alt='Spotlight Hotel Image' style='max-width:100%; max-height:100%; object-fit: contain'>";
										?>
									</div>
									<div class="col-md-6">
										<?php
											echo "<span class='super-heading-sm'>".$Spotlight->gymType."</span>";
											echo "<h3 class='heading'>".$Spotlight->name."</h3>";
											echo "<p>".$Spotlight->gym."</p>";
										?>
										<p class="service-hour">
											<span>Service Hours</span>
											<?php
												echo "<strong>".$Spotlight->gymHour."</strong>";
											?>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="testimonial">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="section-title text-center">
							<h2>Happy Customer Says...</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="testimony">
							<blockquote>
								&ldquo;If you’re looking for a top quality hotel look no further. We had high expectations for what we choose and they still managed to exceed them!! Thanks so much&rdquo;
							</blockquote>
							<p class="author"><cite>John Doe</cite></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="testimony">
							<blockquote>
								&ldquo;Me and my wife had a delightful weekend get away here, the staff were so friendly and attentive. Highly Recommended&rdquo;
							</blockquote>
							<p class="author"><cite>Rob Smith</cite></p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="testimony">
							<blockquote>
								&ldquo;My mouth is still drooling from the decorations and our time spent here&rdquo;
							</blockquote>
							<p class="author"><cite>Jane Foster</cite></p>
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
									<li><a href="#hotel">Hotels</a></li>
									<li><a href="#">Customer Care</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
							<div class="col-md-3">
								<h3>Our Facilities</h3>
								<ul class="link">
									<li><a href="#resturant">Resturant</a></li>
									<li><a href="#bar">Bars</a></li>
									<li><a href="#parking">Pick-up / Drop-Off</a></li>
									<li><a href="#pool">Swimming Pool</a></li>
									<li><a href="#spa">Spa</a></li>
									<li><a href="#gym">Gym</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<h3>Subscribe</h3>
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