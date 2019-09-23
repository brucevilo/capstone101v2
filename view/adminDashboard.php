
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


<head>
	<title>Mechanic</title>
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
	<script src="assets/js/angular.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.min.js"></script>

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
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title"></h4>
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
								<br/>
								Register now are you a:
								<div class="modal-footer d-flex justify-content-center">
									<a href="mechanicRegistration.html"  class="btn btn-small btn-outline-maincolor btn-appointment">Mechanic</a>
									<a href="motoristRegistration.php"  class="btn btn-small btn-outline-maincolor btn-appointment">Motorist</a>
										
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
											<a href="index.html" class="logo">
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
									<div class="d-flex justify-lg-content-end align-items-center meta-icons">
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-email"></i>
											</div>
											<div class="media-body">
												<h6>Mail Us</h6>
												<p class="fw-400">
													Info@candycar.com
												</p>
											</div>
										</div>
										<div class="media d-none d-md-flex">
											<div class="icon-styled color-main fs-20">
												<i class="ico-placeholder"></i>
											</div>
											<div class="media-body">
												<h6>Location</h6>
												<p class="fw-400">
													Waukesha, WI 53186
												</p>
											</div>
										</div>
										<div class="media">
											<div class="icon-styled color-main fs-20">
												<i class="ico-phone-call"></i>
											</div>
											<div class="media-body">
												<h6>Phone</h6>
												<p class="fw-400">
													+1 23 456 78 90
												</p>
											</div>
										</div>
										<div class="d-none d-xl-block">
										</div>
									</div>
								</div>
								<!-- header toggler -->
							</div>
						</div>
					</div>
				</section>


				<!--eof topline-->

				<!-- header with single Bootstrap column only for navigation and includes. Used with topline and toplogo sections. Menu toggler must be in toplogo section -->
				<header class="page_header s-py-10 s-py-lg-0 ds ms s-overlay nav-bordered justify-nav-center">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="d-lg-none col-11">
								<a href="index.html" class="logo">
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

				

				</header>

			</div>

			<section class="page_slider">
				<div class="flexslider" data-nav="false" data-dots="true">
					<ul class="slides">
						<li class="ds bs cover-image flex-slide">
							<!-- <span class="flexslider-overlay"></span> -->
							<img src="images/slide01.jpg" alt="">
							<div class="container">
                                <br/> <br/> <br/> <br/> <br/> <br/> <br/>
				<style>
				table {
					display: table;
					border-collapse: separate;
					border-spacing: 2px;
					border-color: gray;
					}
				th
				{	
					background-color: #f5f5f5;
					color: white;	
				}	
				</style>					
			
				<table  class="table-dark">
					<thead>
					<th>
                        <th>User Id</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>User Type</th>
						<th>Action</th>
						<th>Status</th>
                    </th>
				</thead>	
	<?php	
			include('../controller/getalluser.php');
			
				
				foreach($row as $u){
					echo "<tr>";
							echo "<td></td>";
							echo "<td>".$u['user_id']."</td>";
							echo "<td>".$u['email']."</td>";
							echo "<td>".$u['password']."</td>";
							echo "<td>".$u['user_type']."</td>";
							echo "<td><strong><a href='edit.php?id=".$u['user_id']."'>EDIT</a></strong></td>";
							if ($u['status']=='active'){
								echo "<td><a href='../controller/updateUser.php?id=".$u['user_id']."& action=deactive'>Deactivate</a></td>";
							  }
							  else{
								echo "<td><a href='../controller/updateUser.php?id=".$u['user_id']."& action=active'>Activate</a></td>";
							  }
							// echo "<td><strong><a href='edit.php?id=".$u['user_id']."'>".$u['status']."</a></strong></td>";         
							?>
				
						</td>
					<?php
							echo "</tr>";
				}
			?>
		</table>

                            </div>
				</div> 
<!-- Modal edit -->

<!-- Modal -->
<!-- deleteModal -->


		]

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
	<script>


	</script>
	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&amp;callback=initGoogleMap"></script>

</body>


</html>