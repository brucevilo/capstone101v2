<?php?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Mechanic Hero</title>
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
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Sign in</h4>
						</div>
						<div class="modal-body">
							<form action="http://webdesign-finder.com/">
								<div class="form-group has-placeholder">
									<label for="name-sigin">Your Name:</label>
									<input type="text" class="form-control" id="name-sigin" placeholder="Enter your name" name="First name">
								</div>
								<div class="form-group has-placeholder">
									<label for="sigpassword">Password:</label>
									<input type="password" class="form-control" id="sigpassword" placeholder="password" name="sigpassword">
								</div>
								<div class="modal-password">
									<a href="#" class="modal-password-btn">Forgot password?</a>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button type="submit" class="btn btn-small btn-maincolor log-btn">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">

				
				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
			
				<section class="page_title ds s-pt-10 s-pb-10 s-pt-lg-60 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Motorist Registration</h1>
		
							</div>

						</div>
					</div>
				</section>


			</div>


			<section class="ls s-pt-55 s-pb-35 s-pt-lg-145 s-pb-lg-140 s-parallax s-overlay comingsoon">
				<div class="divider-40 d-none d-lg-block"></div>
				<div class="container">
					<form action="../controller/addMotorist.php" method="post">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="special-heading">
								Mechanic<span class="text-gradient">Hero!</span>
							</h2>
							<style> 
									.center {
												margin: auto;
												width: 80%;
												padding: 10px;
												border: 2px solid #ccc;
												background-color: #ffffff;
												}
										
											</style>
							<div class="center">
									
							<input type="text" name ="firstname"id="firstname" placeholder="Firstname" required/>
							<input type="text" name="lastname" id="lastname" placeholder="Lastname"required/>
							<input type="text" name="email" id="email" placeholder="Email"required/>
							<input type="text" name="contact_number" id="contact_number" placeholder="Contact Number" required/>
							<input type="text" name="address" id="address" placeholder="Address" required/>
							<input type="text" name="password" id="password" placeholder="Password" required/>
							<input type="text" name="c-password" id="c-password" placeholder="Confirm Password" required/>
							<br/>
							<br/>
							<button type="submit" id="btn-register" name="btn-register" class="btn btn-small btn-maincolor log-btn">Sign Up</button>
							</div>
							<!-- <h6 class="mt-0">Stay Tuned!</h6>		
							<div id="comingsoon-countdown"></div> -->
							<!--
					use "data-date" attribute with your date value to set date that you need to count to
					<div id="comingsoon-countdown" data-date="March 29, 2018 10:00:00"></div>
				-->
						</div>
					</div>
				</div>
				</form>
			</section>


			


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>

</html>