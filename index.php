<html class="no-js">
		<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Codi's OOP Booking App | Home</title>
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
								<li><a class="active"href="index.php">Home</a></li>
								<li><a href="compare.php">Compare</a></li>
								<li><a href="confirm.php">Confirmation</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</header>
			
		</div>
		<!-- end:fh5co-header -->
		<aside id="fh5co-hero" class="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
				<li id=img style="background-image: url(images/slider1.jpg);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-12 col-md-offset-0 text-center slider-text">
							<div class="slider-text-inner js-fullheight">
								<div class="desc">
									<p><span>The White Rock Hotel</span></p>
									<h2>Reserve Room for Family Vacation</h2>
									<p>
										<a href="#" class="btn btn-primary btn-lg">Book Now</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li id=img style="background-image: url(images/slider2.jpg);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-12 col-md-offset-0 text-center slider-text">
							<div class="slider-text-inner js-fullheight">
								<div class="desc">
									<p><span>Spotlight Hotel</span></p>
									<h2>Make Your Vacation Comfortable</h2>
									<p>
										<a href="#" class="btn btn-primary btn-lg">Book Now</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li id=img style="background-image: url(images/slider3.jpg);">
					<div class="overlay-gradient"></div>
					<div class="container">
						<div class="col-md-12 col-md-offset-0 text-center slider-text">
							<div class="slider-text-inner js-fullheight">
								<div class="desc">
									<p><span>Hotel Bliss</span></p>
									<h2>A Best Place To Enjoy Your Life</h2>
									<p>
										<a href="#" class="btn btn-primary btn-lg">Book Now</a>
									</p>
								</div>
							</div>
						</div>
					</div>
				</li>
				
				</ul>
			</div>
		</aside>
		<div class="wrap">
			<div class="container">
				<div class="row">
					<div id="availability">
						<form action="confirm.php" method="post">
							<div class="a-col">
								<section>
									<select class="cs-select cs-skin-border" name='Hotel_Name' required>
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
							<div class="a-col action">
								<button type="button" onclick="window.location.href='compare.php'" style="background-color: #3c4146">Compare Hotels</button>
							</div>
							<div class="a-col action">
								<button type="submit" style="background-color: #3c4146">Check Availability</button>
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
						<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">User Access</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Hotels</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Transactions</span>
					</div>
					<div class="col-md-3 text-center">
						<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
						<span class="fh5co-counter-label">Rating &amp; Review</span>
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
						<div class="image" style="background-image: url(images/hotel_feture_1.jpg);">
							<div class="descrip text-center">
								<p><span>$140/night</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>Hotel Bliss</h3>
							<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. Vivamus augue enim, consectetur ac interdum a, pulvinar ac massa. Nullam malesuada congue </p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
						</div>
					</div>

					<div class="feature-full-2col">
						<div class="f-hotel">
							<div class="image" style="background-image: url(images/hotel_feture_2.jpg);">
								<div class="descrip text-center">
									<p><span>$100/night</span></p>
								</div>
							</div>
							<div class="desc">
								<h3>Spotlight Hotel</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, 
								in suscipit urna condimentum sed. </p>
								<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
							</div>
						</div>
						<div class="f-hotel">
							<div class="image" style="background-image: url(images/hotel_feture_3.jpg);">
								<div class="descrip text-center">
									<p><span>$70/night</span></p>
								</div>
							</div>
							<div class="desc">
								<h3>The White Rock Hotel</h3>
								<p>Pellentesque habitant morbi tristique senectus et netus ett mauada fames ac turpis egestas. Etiam euismod tempor leo, in suscipit urna condimentum sed. </p>
								<p><a href="#" class="btn btn-primary btn-luxe-primary">Book Now <i class="ti-angle-right"></i></a></p>
							</div>
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
						<div class="tab-content active show" data-tab-content="tab1">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">World Class Restaurant</span>
										<h3 class="heading">Hotel Bliss</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>7:00 AM - 10:00 PM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Fine Dining</span>
										<h3 class="heading">Spotlight Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>7:00 AM - 10:00 AM</strong>
											<br>
											<strong>13:00 PM - 15:00 PM</strong>
											<br>
											<strong>18:00 PM - 21:00 PM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Buffet</span>
										<h3 class="heading">The White Rock Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>8:00 AM - 10:00 AM</strong>
											<br>
											<strong>13:00 PM - 15:00 PM</strong>
											<br>
											<strong>17:00 PM - 19:00 PM</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab2">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Formal Bar</span>
										<h3 class="heading">Hotel Bliss</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>10:00 AM - 12:00 AM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Formal Bar</span>
										<h3 class="heading">Spotlight Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>16:00 PM - 10:00 PM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Pub</span>
										<h3 class="heading">The White Rock Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>10:00 AM - 10:00 PM</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab3">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_3.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Valet Parking</span>
										<h3 class="heading">Hotel Bliss</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>8:00 AM - 8:00 PM</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab4">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_4.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Collection of Indoor Heated Pools</span>
										<h3 class="heading">Hotel Bliss</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>7:00 AM - 18:00 PM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_4.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Communal Pool</span>
										<h3 class="heading">Spotlight Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>10:00 AM - 17:00 PM</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab5">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_5.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Top 5 Best Masseuses and Masseurs</span>
										<h3 class="heading">Hotel Bliss</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>11:00 AM - 16:00 PM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_5.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Qualified Massage Therapy</span>
										<h3 class="heading">The White Rock Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>Appointment Only</strong>
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-content" data-tab-content="tab6">
							<div class="container">
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_6.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Elite Trainers</span>
										<h3 class="heading">Hotel Bliss</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>8:00 AM - 8:00 PM</strong>
										</p>
									</div>
								</div>
								<br>
								<br>
								<div class="row">
									<div class="col-md-6">
										<img src="images/tab_img_6.jpg" class="img-responsive" alt="Image">
									</div>
									<div class="col-md-6">
										<span class="super-heading-sm">Crossfit</span>
										<h3 class="heading">Spotlight Hotel</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore, reprehenderit illum dolorem quae facilis reiciendis quas similique totam sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit molestias animi vitae.</p>
										<p class="service-hour">
											<span>Service Hours</span>
											<strong>Appointment Only</strong>
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