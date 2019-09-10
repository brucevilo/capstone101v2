<?php
session_start();
  if(!isset($_SESSION['motorist'])){
    header("location:index.php");
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
	<title>MechanicHero</title>
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
				<div class="col-6">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h4 class="modal-title">Add Vehicle</h4>
						</div>
						<div class="modal-body">
						<form action="../controller/addVehicle.php" method="POST" enctype="multipart/form-data">
				
								<div class="form-group has-placeholder">
								<input type="file"  class="form-control" id = "file" name="file" aria-label="Small" aria-describedby="inputGroup-sizing-sm" require>
							</div>
								<div class="form-group has-placeholder">
								<input type="text" class="form-control" id="vehicle_mileage" placeholder="Mile Age in KM" name="vehicle_mileage" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_brand" placeholder="Car Brand" name="vehicle_brand" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_model" placeholder="Car Model" name="vehicle_model" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_drivertype" placeholder="Driver Type" name="vehicle_drivertype" require>
								</div>
	
							
						
						</div>
					</div>
				</div>
				<div class="col-6 ds s-overlay">
					<!-- <img src="images/modal-login-form.jpg" alt=""> -->
					<div class="modal-content">
					<div class="modal-header justify-content-center">
						<br/>
						<br/>	
						</div>
						<div class="modal-body">
							
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_color" placeholder="Car Color" name="vehicle_color" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_regno" placeholder="Registration Number" name="vehicle_regno" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_plateno" placeholder="Car Plate Number" name="vehicle_plateno" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="hidden" placeholder="fdsf"/>
								</div>
							<br/>
							<br/>
								<div class="form-group has-placeholder">
									<button type="submit" name ="btnVehicle" id ="btnVehicle" class="btn btn-small btn-maincolor log-btn">Add Vehicle</button>
								</div>
							</form>
						</div>
							</div>
							</div>
					<!-- end -->
				
				</div>
			</div>
		</div>
	</div>

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">

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
											<a href="mechanicDashboard.php" class="logo">
												<img src="images/logo.png" alt="">
												<span class="logo-text fw-500">Mechannic<span class="fw-200">Hero</span></span>
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
													Info@MechanicHero.com
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
								<a href="mechanicDashboard.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
							</div>
							<div class="col-xl-12">

								<div class="nav-wrap">
									<!-- main nav start -->
									<nav class="top-nav">
										<ul class="nav sf-menu">
                                        <li class="active">
												<a href="motoristDashboard.php">Service</a>
											
											</li>

											<li>
												<a href="motoristVehicle.php">Vehicle</a>
											</li>
										
											<li>
												<a href="motoristProfile.php">Profile</a>
											</li>
											<li>
											<li>
												<a href="logout.php">Logout</a>
											<li>
							
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<span class="toggle_menu"><span></span></span>

				</header>

				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Vehicle </h1>
								<div class="d-none d-xl-block">
											<a href="#modalLoginForm" data-toggle="modal" class="btn btn-small btn-outline-maincolor btn-appointment" >Add Vehicle</a>
										</div>
	
							</div>

						</div>
					</div>
				</section>


			</div>


				
            <?php
            include('../controller/getallVehicle.php');
          
            			
            foreach($rows as $row){

            echo " <article class='post side-item text-center text-md-left content-padding bordered event-post'>";
            echo "<div class='row'>";
			echo "<div class='col-xl-3 col-lg-3 col-md-3'>";
										echo "<div class='item-media cover-image'>";
										
										echo "<img src='../controller/images/".$row['vehicle_image']."' alt=''>";
										// echo "<img src='../controller/images/9383-car-repair-362150_960_720.jpg alt=''>";
										// echo "img src='../controller/images/".$row['vehicle_imaged'];
										echo "<div class='media-links'>";
										echo "<a class='abs-link' title='' href='moto3.php?id=".$row['vehicleid']."'></a>";	
									echo "		</div>
                                    </div>
                                </div>";

									echo "<div class='col-xl-7 col-lg-6 col-md-5'>";
									echo "<div class='divider-11 d-none d-xl-block'></div>";
                                    echo "	<div class='item-content'>
                                              <h4>";
                                    echo "<a href='moto3.php?id=".$row['vehicleid']."'>".$row['vehicle_plateno'].

                                    "</a> 	</h4>";
                                    
												
										

										echo "<div class='mb-10 item-meta color-darkgrey'>";
									
										echo  strtoupper("<h6>Brand :".$row['vehicle_brand']."<br/>") ;		
										// echo "</span>
										// 		<span>";
                                        echo  strtoupper("Model :".$row['vehicle_model']."</span></h6>");
                                        echo  strtoupper("<h7>Registration No. :".$row['vehicle_regno']."</span><br/>");
										echo  strtoupper("Status :".$row['status']."</span></h7><br/>");
										echo "<a href='motoristAddServiceReq.php?id='".$row['vehicleid']."'  class='btn btn-small btn-outline-maincolor btn-appointment' >Add Service</a>";

                                        // echo "</span>";
										echo "</div>";
                                        // echo  strtoupper(" <span>".$row['vehicle_service']."</span></h6>");
										echo "</p>.";
										echo "</p>";

									echo"	</div>
									</div>
								</div>
							</article>

                            </div>
                </div> ";
            }
                ?>


			<footer class="page_footer text-center text-md-left ds ms s-pt-65 s-pt-lg-125 s-pb-lg-35 c-gutter-40 main-footer">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-lg-block"></div>

						<div class="col-md-6 col-lg-3 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<a href="mechanicDashboard.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechannic<span class="fw-200">Hero</span></span>
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
										<a href="mailto:">info@MechnicHero.com</a>
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

</body>


</html>