<?php
	session_start();
	if(isset($_SESSION['motorist']))
	{
		header("location:motoristDashboard.php");
	}
	if(isset($_SESSION['mechanic']))
	{
		header("location:mechanicDashboard.php");
	}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>CandyCar - Repair, Towing, Tuning SinglePage and MultePage HTML template</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="http://webdesign-finder.com/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-md-6 col-sm-12">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form action="../controller/login.php" method="post">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your name" name="email">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="password" name="password">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a>
								</div>
									<div class="modal-footer d-flex justify-content-center">
										<button type="submit" name ="btnLogin" class="btn btn-small btn-maincolor log-btn">Log in</button>
									</div>
							</form>
							<br/>
							<br/>
							<br/>
							<div col-sm-12>
								Register Now.<br/>
									<a href="mechanicRegistration.html"  class="btn btn-small btn-outline-maincolor btn-appointment">Mechanic</a>
									<a href="motoristRegistration.php"  class="btn btn-small btn-outline-maincolor btn-appointment">Motorist</a>
							
							</div>
							
							<div class="modal-footer d-flex justify-content-center">
								
								
								
								</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-sm hidden-xs  ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>



	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<div class="header_absolute slide_absolute ds bs s-overlay">

				<!--topline section visible only on small screens|-->
				<section class="page_toplogo ds s-overlay s-pt-10 s-pb-5 s-py-lg-30">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-12">
								<div class="d-lg-flex justify-content-lg-end align-items-lg-center">
									<div class="mr-auto">
										<!--
							if you want to display toplogo info on smaller screens
							than use following CSS classes below:
						 	d-sm-flex justify-content-sm-center
						 -->
										<div class="d-none d-lg-flex justify-content-center justify-content-lg-start">
											<a href="index.php" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
											</a>
										</div>
									</div>
									<!--
						if you want to display toplogo info on smaller screens
						than use following CSS classes below:
						d-sm-flex justify-lg-content-end justify-content-sm-between align-items-center
					-->
								

				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="index.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
							</div>
							<div class="col-xl-12">

								<div class="nav-wrap">
									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
											<li>
												<a href="#box_wrapper">Home</a>
											</li>

											<li>
												<a href="#steps">Steps</a>
											</li>
											<li>
												<a href="#service">Service</a>
											</li>
											<li>
												<a href="#section_testimonials">Testimonials</a>
											</li>
											<li>
												<a href="#team">Team</a>
											</li>

											<li>
												<a href="#blog">Blog</a>
											</li>
											<li>
												<a href="#contacts">Contacts</a>
											</li>
											<li>
												<a href="#partners">Partners</a>
											</li>

										</ul>
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>

			</div>

				<section class="page_slider">
					<div class="flexslider" data-nav="false" data-dots="true">
						<ul class="slides">
							<li class="ds bs cover-image flex-slide">
								<span class="flexslider-overlay"></span>
								<img src="images/slide01.jpg" alt="">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="intro_layers_wrapper text-center text-xl-left">
												<div class="intro_layers">
													<div class="divider-20 d-none d-lg-block d-xl-none"></div>
													<div class="intro_layer" data-animation="fadeInDown">
														<h2 class="text-uppercase intro_featured_word">
															<span class="color-main">Full</span>
															<span class="flex-gradient">
																<span id="typed-strings">
																	<span>Collision</span>
																	<span>Tuning</span>
																	<span>Repair</span>
																</span>
																<span id="typed"></span>
															</span>
														</h2>
													</div>
													<div class="intro_layer" data-animation="fadeInDown">
														<h2 class="text-uppercase intro_featured_word">
															& Auto Body Services
														</h2>
													</div>
													<div class="intro_layer" data-animation="fadeInDown">
														<ul class="list1">
															<li>Complete Restoration Available</li>
															<li>9 Foot Tall Spray Booth</li>
															<li>Can Paint & Repair Sprinter Vans</li>
															<li>We Work with Insurance Companies</li>
														</ul>
													</div>
													<div class="intro_layer" data-animation="fadeInDown">
														<div class="slide-button">
															<a class="btn btn-small btn-maincolor" href="#modalLoginForm" data-toggle="modal">Get Started</a>
														</div>
													</div>
												</div> <!-- eof .intro_layers -->

											</div> <!-- eof .intro_layers_wrapper -->
										</div> <!-- eof .col-* -->
									</div><!-- eof .row -->
								</div><!-- eof .container-fluid -->
								<div class="ds social-flex d-none d-lg-block">
									<p class="social-icons with-border">
										<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
										<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
										<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
									</p>
								</div>
							</li>
							<li class="ds bs cover-image flex-slide">
								<span class="flexslider-overlay"></span>
								<img src="images/slide02.jpg" alt="">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="intro_layers_wrapper justify-content-center">
												<div class="intro_layers rotate_layers">
													<div class="intro_layer" data-animation="fadeInRightBig">
														<h2 class="text-uppercase intro_before_featured_word text-left">
															All Makes &
														</h2>
													</div>
													<div class="intro_layer gradient-layer text-center" data-animation="fadeInDown">
														<h2 class="text-uppercase">
															<span class="text-layer">
																<span class="color-main2">$20</span> Off Towing!
															</span>
														</h2>
													</div>
													<div class="intro_layer text-right" data-animation="fadeInLeftBig">
														<h2 class="text-uppercase intro_after_featured_word">
															Models Welcome
														</h2>
													</div>
												</div> <!-- eof .intro_layers -->

											</div> <!-- eof .intro_layers_wrapper -->
										</div> <!-- eof .col-* -->
									</div><!-- eof .row -->
								</div><!-- eof .container-fluid -->
								<div class="ds social-flex d-none d-lg-block">
									<p class="social-icons with-border">
										<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
										<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
										<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
									</p>
								</div>
							</li>
							<li class="ds bs cover-image flex-slide">
								<span class="flexslider-overlay"></span>
								<img src="images/slide03.jpg" alt="">
								<div class="container">
									<div class="row">
										<div class="col-md-12">
											<div class="intro_layers_wrapper justify-content-center">
												<div class="intro_layers rotate_layers">
													<div class="intro_layer" data-animation="fadeInRightBig">
														<h2 class="text-uppercase intro_before_featured_word text-left">
															All Makes &
														</h2>
													</div>
													<div class="intro_layer gradient-layer text-center" data-animation="fadeInDown">
														<h2 class="text-uppercase">
															<span class="text-layer">
																<span class="color-main2">$20</span> Off Towing!
															</span>
														</h2>
													</div>
													<div class="intro_layer text-right" data-animation="fadeInLeftBig">
														<h2 class="text-uppercase intro_after_featured_word">
															Models Welcome
														</h2>
													</div>
												</div> <!-- eof .intro_layers -->

											</div> <!-- eof .intro_layers_wrapper -->
										</div> <!-- eof .col-* -->
									</div><!-- eof .row -->
								</div><!-- eof .container-fluid -->
								<div class="ds social-flex d-none d-lg-block">
									<p class="social-icons with-border">
										<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
										<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
										<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
									</p>
								</div>
							</li>
						</ul>
					</div> <!-- eof flexslider -->
				</section>

					<div class="row c-mb-45 c-mb-lg-0">
						<div class="divider-40 d-block d-lg-none"></div>
						<div class="offset-lg-2 col-lg-8 item-content text-center">
							<h3 class="special-heading text-center">Why<span class="text-gradient">Choose</span> Us</h3>
							<p class="fs-20 color-dark">The Car Repair Appointment</p>
							<div class="divider-60 d-none d-lg-block"></div>
							<p>Autospa Hand Wash is an eco-friendly, hand car wash and detailing service based in Portland. Our company was founded back in 2005 by a team of experts with more then 10 years of professional car wash experience.</p>
							<p>Our goal is to provide our customers with the friendliest, most convenient hand car wash experience possible. We use the most modern and up-to-date.</p>
							<div class="row text-left c-gutter-60">
								<div class="divider-35"></div>
								<div class="col-md-4">
									<div class="icon-box text-center">
										<div class="icon-styled color-main2 fs-40">
											<i class="ico-candy"></i>
										</div>
										<p>
											We offer multiple services at a great value
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="icon-box text-center">
										<div class="icon-styled color-main2 fs-40">
											<i class="ico-car-wash"></i>
										</div>
										<p>
											Multiple car wash locations throughout Portland
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="icon-box text-center">
										<div class="icon-styled color-main2 fs-40">
											<i class="ico-painting"></i>
										</div>
										<p>
											Biodegradable and eco-friendly products
										</p>
									</div>
								</div>
							</div>
							<div class="divider-33 d-none d-lg-block"></div>
							<div>
								<a href="#" class="btn btn-small btn-maincolor">Read more</a> <span class="color-dark m-25">or</span> <a href="#" class="btn btn-small btn-outline-maincolor">Get Started</a>
							</div>
						</div>
					</div>
					<div class="divider-50 d-none d-lg-block"></div>
				</div>
			</section>

			<section class="s-pt-55 s-pb-0 s-pt-md-50 s-pt-lg-140 s-pb-lg-145 ls ms text-center steps-section" id="steps">
				<div class="container">
					<div class="col-12 text-center mb-55">
						<h4>How<span class="text-gradient">We Work</span></h4>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row c-mb-53 c-mb-lg-0">
						<div class="col-12 col-lg-3">
							<div class="steps">
								<img src="images/step01.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Diagnostics</h6>
									<p class="color-dark">Help extend the life of your major business investment</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="steps feature-step">
								<img src="images/step02.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Make a Quote</h6>
									<p class="color-dark">Regarding our technicians, it takes 30 years of ongoing training</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-3">
							<div class="steps">
								<img src="images/step03.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Repair Your Car</h6>
									<p class="color-dark">Convoy Auto Repair provides expert repairs, service</p>
								</div>
							</div>

						</div>
						<div class="col-12 col-lg-3">
							<div class="steps feature-step last-step">
								<img src="images/step04.jpg" alt="">
								<div class="step-content">
									<h6 class="fw-700">Joy</h6>
									<p class="color-dark">We are proud to have earned the reputation</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-55 s-pt-md-50 s-pb-5 s-pt-lg-140 s-pb-lg-145 service-section text-center text-lg-left c-gutter-0" id="service">
				<div class="container">
					<div class=" col-12 mb-50 text-center">
						<h4>Our<span class="text-gradient">Services</span></h4>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-4 col-xl-3">
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-tow-truck"></i>
								</div>
								<div class="media-body">
									<h6>
										Car Towing
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-car"></i>
								</div>
								<div class="media-body">
									<h6>
										Flood Insurance
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-car-alt"></i>
								</div>
								<div class="media-body">
									<h6>
										Fire Insurance
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-xl-6">
							<img src="images/01.png" alt="">
						</div>
						<div class="col-lg-4 col-xl-3">
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-breakdown"></i>
								</div>
								<div class="media-body">
									<h6>
										Hail Damage
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-accident"></i>
								</div>
								<div class="media-body">
									<h6>
										Accident Insurance
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
							<div class="divider-130 d-none d-lg-block"></div>
							<div class="media">
								<div class="icon-styled color-main fs-40">
									<i class="ico-motorcycle"></i>
								</div>
								<div class="media-body">
									<h6>
										Motorcycle Towing
									</h6>
									<p>
										Drumstick leberkas tenderloin swine laborum cupim bacon.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ds s-pt-55 s-pb-10 s-pt-lg-140 s-pb-lg-150 s-parallax testimonials-section" id="section_testimonials">
				<div id="particles-js"></div> <!-- Animated background -->
				<div class="container">
					<div class=" col-12 mb-50 text-center">
						<h4><span class="text-gradient">Testimonials</span> Slider</h4>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-60 d-none d-xl-block"></div>
					</div>
					<div class="row">
						<div class="col-md-12">

							<div class="testimonials-slider owl-carousel" data-autoplay="false" data-loop="true" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-nav="true" data-dots="false">
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_01.jpg" alt="">
									</div>
									<div class="quote-mark">
										<img src="images/quote.png" alt="">
									</div>
									<p>
										<em class="big fw-400">
											Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim.
										</em>
									</p>
									<h6 class="quote-name fw-700">
										Brett Connor
									</h6>
									<p class="color-grey">
										AutoDoc Manager
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_01.jpg" alt="">
									</div>
									<div class="quote-mark">
										<img src="images/quote.png" alt="">
									</div>
									<p>
										<em class="big fw-400">
											Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim.
										</em>
									</p>
									<h6 class="quote-name fw-700">
										Brett Connor
									</h6>
									<p class="color-grey">
										AutoDoc Manager
									</p>
								</div>
								<div class="quote-item">
									<div class="quote-image">
										<img src="images/team/testimonials_01.jpg" alt="">
									</div>
									<div class="quote-mark">
										<img src="images/quote.png" alt="">
									</div>
									<p>
										<em class="big fw-400">
											Meatloaf laborum velit kielbasa. Drumstick sirloin lorem chicken swine biltong in short ribs duis bresaola. Veniam meatloaf cow incididunt in bacon kevin in pork belly ball tip duis ipsum. Ribeye et aliquip strip steak dolore in anim.
										</em>
									</p>
									<h6 class="quote-name fw-700">
										Brett Connor
									</h6>
									<p class="color-grey">
										AutoDoc Manager
									</p>
								</div>

							</div><!-- .testimonials-slider -->

						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-55 s-pb-30 s-pt-lg-145 s-pb-lg-120" id="team">
				<div class="container">
					<div class="col-12 mb-50">
						<h3 class="special-heading text-center">Meet Our<span class="text-gradient">Team</span></h3>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-60 d-none d-lg-block"></div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel" data-autoplay="false" data-loop="true" data-responsive-lg="3" data-responsive-md="2" data-responsive-sm="2" data-nav="false" data-dots="false" data-margin="60">
								<div class="vertical-item content-padding text-center overflow-hidden">
									<div class="item-media">
										<img src="images/team/01.jpg" alt="">
										<div class="content-hover team-btn">
											<a href="#" class="btn btn-small btn-maincolor">Mail me</a>
										</div>
									</div>
									<div class="item-content">
										<h6 class="team-name fw-700">
											<a href="team-single.html">Melvin C. Williams</a>
										</h6>
										<p>
											AutoDoc Manager
										</p>
										<p class="social-icons with-border">
											<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
											<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
											<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
										</p>
									</div>
								</div>
								<div class="vertical-item content-padding text-center overflow-hidden">
									<div class="item-media">
										<img src="images/team/02.jpg" alt="">
										<div class="content-hover team-btn">
											<a href="#" class="btn btn-small btn-maincolor">Mail me</a>
										</div>
									</div>
									<div class="item-content">
										<h6 class="team-name fw-700">
											<a href="team-single.html">Kurt A. Schwartz</a>
										</h6>
										<p>
											AutoDoc Manager
										</p>
										<p class="social-icons with-border">
											<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
											<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
											<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
										</p>
									</div>
								</div>
								<div class="vertical-item content-padding text-center overflow-hidden">
									<div class="item-media">
										<img src="images/team/03.jpg" alt="">
										<div class="content-hover team-btn">
											<a href="#" class="btn btn-small btn-maincolor">Mail me</a>
										</div>
									</div>
									<div class="item-content">
										<h6 class="team-name fw-700">
											<a href="team-single.html">Trevor L. Puckett</a>
										</h6>
										<p>
											AutoDoc Manager
										</p>
										<p class="social-icons with-border">
											<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
											<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
											<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
										</p>
									</div>
								</div>
								<div class="vertical-item content-padding text-center overflow-hidden">
									<div class="item-media">
										<img src="images/team/04.jpg" alt="">
										<div class="content-hover team-btn">
											<a href="#" class="btn btn-small btn-maincolor">Mail me</a>
										</div>
									</div>
									<div class="item-content">
										<h6 class="team-name fw-700">
											<a href="team-single.html">Darryl L. Cordoba</a>
										</h6>
										<p>
											AutoDoc Manager
										</p>
										<p class="social-icons with-border">
											<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
											<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
											<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
										</p>
									</div>
								</div>
								<div class="vertical-item content-padding text-center overflow-hidden">
									<div class="item-media">
										<img src="images/team/05.jpg" alt="">
										<div class="content-hover team-btn">
											<a href="#" class="btn btn-small btn-maincolor">Mail me</a>
										</div>
									</div>
									<div class="item-content">
										<h6 class="team-name fw-700">
											<a href="team-single.html">Aaron M. Lee</a>
										</h6>
										<p>
											AutoDoc Manager
										</p>
										<p class="social-icons with-border">
											<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
											<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
											<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
										</p>
									</div>
								</div>
								<div class="vertical-item content-padding text-center overflow-hidden">
									<div class="item-media">
										<img src="images/team/06.jpg" alt="">
										<div class="content-hover team-btn">
											<a href="#" class="btn btn-small btn-maincolor">Mail me</a>
										</div>
									</div>
									<div class="item-content">
										<h6 class="team-name fw-700">
											<a href="team-single.html">Ronald E. Conway</a>
										</h6>
										<p>
											AutoDoc Manager
										</p>
										<p class="social-icons with-border">
											<span><a href="#" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
											<span><a href="#" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
											<span><a href="#" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
										</p>
									</div>
								</div>
							</div><!-- .team-carousel -->
						</div>
						<div class="divider-2"></div>
					</div>
				</div>
			</section>

			<section class="s-pt-55 s-pb-0 s-pt-lg-145 s-pb-lg-150 ls ms blog-section c-gutter-60" id="blog">
				<div class="container">
					<div class="col-12 mb-55">
						<h3 class="special-heading text-center">Latest<span class="text-gradient">Blog</span> Posts</h3>
						<p class="fs-20 color-dark">The Car Repair Appointment</p>
						<div class="divider-64 d-none d-lg-block"></div>
					</div>
					<div class="row justify-content-center c-mb-60 c-mb-lg-0">
						<div class="col-lg-4 col-md-6">
							<article class="vertical-item text-center content-padding post type-post status-publish format-standard has-post-thumbnail bordered ls">
								<div class="tagcloud">
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Repair
										</span>
									</a>
								</div>
								<div class="item-media post-thumbnail">
									<img src="images/blog/10.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-left.html"></a>
									</div>
								</div><!-- .post-thumbnail -->
								<div class="item-content">
									<header class="entry-header">
										<h4 class="entry-title">
											<a href="blog-single-%40%40type.html" rel="bookmark">
												Life is either a great adverture
											</a>
										</h4>
									</header><!-- .entry-header -->
									<div class="entry-content">
										<p>Drumstick sirloin lorem chicken swine biltong</p>
									</div><!-- .entry-content -->
									<div class="entry-meta">
										<span class="byline links-grey d-flex justify-content-between">
											<span class="posted-on">
												<a href="#">
													<i class="fs-14 color-main ico-clock-alt"></i>
													2 min ago
												</a>
											</span>
											<span class="span">
												<span class="like-count">
													<a href="#comments">
														<i class="fs-14 fw-900 color-main fa fa-heart-o"></i>
														25
													</a>
												</span>
												<span class="comment-count">
													<a href="#comments">
														<i class="fs-14 color-main ico-comments-alt"></i>
														23
													</a>
												</span>
											</span>
										</span>
									</div>
								</div><!-- .item-content -->
							</article><!-- #post-## -->
						</div>
						<div class="col-lg-4 col-md-6">
							<article class="vertical-item text-center content-padding post type-post status-publish format-standard has-post-thumbnail bordered ls">
								<div class="tagcloud">
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Repair
										</span>
									</a>
								</div>
								<div class="item-media post-thumbnail">
									<img src="images/blog/11.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-left.html"></a>
									</div>
								</div><!-- .post-thumbnail -->
								<div class="item-content">
									<header class="entry-header">
										<h4 class="entry-title">
											<a href="blog-single-%40%40type.html" rel="bookmark">
												Life is either a great adverture
											</a>
										</h4>
									</header><!-- .entry-header -->
									<div class="entry-content">
										<p>Drumstick sirloin lorem chicken swine biltong</p>
									</div><!-- .entry-content -->
									<div class="entry-meta">
										<span class="byline links-grey d-flex justify-content-between">
											<span class="posted-on">
												<a href="#">
													<i class="fs-14 color-main ico-clock-alt"></i>
													2 min ago
												</a>
											</span>
											<span class="span">
												<span class="like-count">
													<a href="#comments">
														<i class="fs-14 fw-900 color-main fa fa-heart-o"></i>
														25
													</a>
												</span>
												<span class="comment-count">
													<a href="#comments">
														<i class="fs-14 color-main ico-comments-alt"></i>
														23
													</a>
												</span>
											</span>
										</span>
									</div>
								</div><!-- .item-content -->
							</article><!-- #post-## -->
						</div>
						<div class="col-lg-4 col-md-6">
							<article class="vertical-item text-center content-padding post type-post status-publish format-standard has-post-thumbnail bordered ls">
								<div class="tagcloud">
									<a href="blog-right.html" class="tag-cloud-link">
										<span>
											Repair
										</span>
									</a>
								</div>
								<div class="item-media post-thumbnail">
									<img src="images/blog/09.jpg" alt="">
									<div class="media-links">
										<a class="abs-link" title="" href="blog-left.html"></a>
									</div>
								</div><!-- .post-thumbnail -->
								<div class="item-content">
									<header class="entry-header">
										<h4 class="entry-title">
											<a href="blog-single-%40%40type.html" rel="bookmark">
												Life is either a great adverture
											</a>
										</h4>
									</header><!-- .entry-header -->
									<div class="entry-content">
										<p>Drumstick sirloin lorem chicken swine biltong</p>
									</div><!-- .entry-content -->
									<div class="entry-meta">
										<span class="byline links-grey d-flex justify-content-between">
											<span class="posted-on">
												<a href="#">
													<i class="fs-14 color-main ico-clock-alt"></i>
													2 min ago
												</a>
											</span>
											<span class="span">
												<span class="like-count">
													<a href="#comments">
														<i class="fs-14 fw-900 color-main fa fa-heart-o"></i>
														25
													</a>
												</span>
												<span class="comment-count">
													<a href="#comments">
														<i class="fs-14 color-main ico-comments-alt"></i>
														23
													</a>
												</span>
											</span>
										</span>
									</div>
								</div><!-- .item-content -->
							</article><!-- #post-## -->
						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-60 s-pb-0 s-pt-md-55 s-pb-md-45 s-pt-lg-145 s-pb-lg-115 c-mb-55 c-mb-md-0 text-center text-md-left side-section">
				<div class="divider-5 d-none d-mb-block"></div>
				<div class="cover-image s-cover-left"></div><!-- half image background element -->
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<img src="images/side-image01.jpg" alt="">
						</div>
						<div class="col-md-6">
							<div class="item-content content-left-padding">
								<h3 class="special-heading">Get<span class="text-gradient">Appointment</span></h3>
								<p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren. Vis no intellegebat voluptatibus, vim an partem admodum copiosae, has ei mutat maluisset comprehensam.</p>
								<ul class="list1">
									<li>Fully Responsive</li>
									<li>Retina Ready</li>
									<li>Extremely Customizable</li>
									<li>WP 4.1+ Ready</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls s-pt-3 s-pb-0 s-pt-md-55 s-pb-md-45 s-pt-lg-145 s-pb-lg-115 c-mb-55 c-mb-md-0 text-center text-md-left side-section">
				<div class="divider-5 d-none d-mb-block"></div>
				<div class="cover-image s-cover-right"></div><!-- half image background element -->
				<div class="container">
					<div class="row">
						<div class="col-md-6 order-1 order-md-2">
							<img src="images/side-image02.jpg" alt="">
						</div>
						<div class="col-md-6 order-2 order-md-1">
							<div class="item-content content-right-padding">
								<h3 class="special-heading">About<span class="text-gradient">Service</span> Center</h3>
								<p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren. Vis no intellegebat voluptatibus, vim an partem admodum copiosae, has ei mutat maluisset comprehensam.</p>
								<ul class="list1">
									<li>Fully Responsive</li>
									<li>Retina Ready</li>
									<li>Extremely Customizable</li>
									<li>WP 4.1+ Ready</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-3 d-block d-mb-none"></div>
			</section>

			<section class="ls ms contact-section text-center text-md-left" id="contacts">
				<div class="row align-items-center c-gutter-0">
					<div class="col-xl-6 col-lg-6 col-md-6 col-xs-12">
						<div class="animate page_map animated scaleAppear" data-animation="scaleAppear">
							<div class="marker">
								<div class="marker-address">sydney, australia, Liverpool street, 2</div>
								<div class="marker-title">Fourth Marker</div>
								<div class="marker-description">
									<p><strong>Sydney, Australia, Liverpool Street, 2</strong>.<br>
										Lorem ipsum dolor sit amet,
										consectetur adipisicing elit. Aliquid cumque,
										deserunt dolor.
									</p>
								</div>
								<img class="marker-icon" src="images/map_marker_icon.png" alt="">P
							</div>
							<!-- .marker -->
						</div>
						<!--.col-* -->
					</div>
					<div class="col-xl-3 col-md-6 col-10">
						<div class="divider-55 d-md-none"></div>
						<div class="item-content content-left-padding">
							<h3 class="special-heading">Find<span class="text-gradient">Us</span></h3>
							<p>Pro inimicus sapientem an, ad cibo velit mollis mei, ne vim adhuc gubergren.</p>
							<h6 class="fw-700">New Yourk</h6>
							<div class="media side-icon-box">
								<div class="icon-styled color-main">
									<i class="fa fa-map-marker"></i>
								</div>
								<p class="media-body">2688 Simpson Avenue<br> Harrisburg, PA 17109 </p>
							</div>
							<div class="media side-icon-box">
								<div class="icon-styled color-main">
									<i class="fa fa-phone"></i>
								</div>

								<p class="media-body">+1 234 56 78</p>
							</div>
							<div class="media side-icon-box">
								<div class="icon-styled color-main fs-14">
									<i class="fa fa-envelope"></i>
								</div>
								<p class="media-body links-grey">
									<a href="#">info@candycar.com</a>
								</p>
							</div>
							<a href="#" class="btn btn-small btn-outline-maincolor">Contact us</a>
						</div>
						<div class="divider-60 d-md-none"></div>
					</div>
					<!--.col-* -->
				</div>
			</section>

			<section class="ls s-py-55 s-py-lg-75" id="partners">
				<div class="container-fluid">
					<div class="divider-3"></div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="owl-carousel partners-carousel" data-center="true" data-loop="true" data-responsive-lg="10" data-responsive-md="6" data-responsive-sm="4" data-responsive-xs="3">
								<a href="#">
									<img src="images/partners/01.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/02.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/03.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/04.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/05.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/06.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/07.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/08.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/09.png" alt="">
								</a>
								<a href="#">
									<img src="images/partners/10.png" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<a href="index.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-map-marker"></i>
									</div>
									<p class="media-body color-grey">2688 Simpson Avenue Harrisburg, PA 17109 </p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-phone"></i>
									</div>

									<p class="media-body color-grey">+1 234 56 78</p>
								</div>
								<div class="media side-icon-box">
									<div class="icon-styled color-main">
										<i class="fa fa-envelope"></i>
									</div>
									<p class="media-body color-grey">
										<a href="mailto:">info@candycar.com</a>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-3 order-lg-2" data-animation="fadeInUp">
							<div class="widget widget_page_links">
								<h3>Useful Pages</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Contact Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Blog post</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>About Us</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Services</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 animate order-md-4 order-lg-3" data-animation="fadeInUp">
							<div class="widget widget_services_links">
								<h3>Services</h3>
								<ul>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Exterior Hand Wash</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tower Hand Dry</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Tire Dressing</a>
									</li>
									<li>
										<a href="#"><i class="ico-check-circle"></i>Wheel Shine</a>
									</li>
								</ul>
							</div>
						</div>

						<div class="col-md-6 col-lg-3 c-gutter-10 animate order-lg-4" data-animation="fadeInUp">
							<div class="widget widget_working_hours">
								<h3>Our Hours</h3>
								<ul>
									<li class="row">
										<div class="color-grey col-3">
											Mn-Fr
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 8.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sat
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">9.<sup>00</sup>am - 4.<sup>00</sup>pm</span>
										</div>
									</li>
									<li class="row">
										<div class="color-grey col-3">
											Sun
										</div>
										<div class="col-md-9 col-5">
											<span class="color-darkgrey">output</span>
										</div>
									</li>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</footer>


			<section class="page_copyright ds ms s-pt-5 s-pb-25 s-py-lg-20">
				<div class="container">
					<div class="divider-2 d-none d-lg-block"></div>
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-12 text-center">
							<p class="social-icons with-border">
								<span><a href="https://www.facebook.com/" class="fa fa-facebook border-icon rounded-icon" title="facebook"></a></span>
								<span><a href="https://telegram.org/" class="fa fa-paper-plane border-icon rounded-icon" title="telegram"></a></span>
								<span><a href="https://www.instagram.com/" class="fa fa-instagram border-icon rounded-icon" title="instagram"></a></span>
							</p>
							<p><a target="_blank" href="https://templateshub.net">Templates Hub</a></p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&amp;callback=initGoogleMap"></script>

</body>


</html>