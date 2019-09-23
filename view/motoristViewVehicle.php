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

	<div class="">
		<div class=""></div>
	</div>

	

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<div class="header_absolute s-parallax ds bs s-overlay">



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
												<a href="motoristProfile.php"><i class="ico-user"></i></a>
											</li>
											<li>
											<li>
												<a href="logout.php"><i class="fa fa-sign-out"></i></a>
											<li>
							
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<!-- <span class="toggle_menu"><span></span></span>

				</header> -->
<!-- 
				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								
	
			asdasdasdas				</div>

						</div>
					</div>
				</section> -->
        
<!-- 
			<section class="page_slider">
				<div class="flexslider" data-nav="false" data-dots="true">
					<ul class="slides">
						<li class="ds bs cover-image flex-slide">
							
							<img src="images/slide04.jpg" alt="">
							<div class="container"> -->
                            <!-- <div align="center">
            <h3>Vehicle Detail</h3>
        </div> -->

        
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-full.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-full.html">Aliquam amet atque deleniti</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span>March 9, 2019</span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>03:15 pm - 05:30 pm</span>
												</span>
											</div>
											<p>
												Aliquam amet, atque deleniti dignissimos dolor ducimus eaque eos error et facere ipsam iste laboriosam molestias optio.
											</p>

										</div>
									</div>
								</div>
                            </article>
                            
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-full.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-full.html">Aliquam amet atque deleniti</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span>March 9, 2019</span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>03:15 pm - 05:30 pm</span>
												</span>
											</div>
											<p>
												Aliquam amet, atque deleniti dignissimos dolor ducimus eaque eos error et facere ipsam iste laboriosam molestias optio.
											</p>

										</div>
									</div>
								</div>
                            </article>
                            
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-full.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-full.html">Aliquam amet atque deleniti</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span>March 9, 2019</span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>03:15 pm - 05:30 pm</span>
												</span>
											</div>
											<p>
												Aliquam amet, atque deleniti dignissimos dolor ducimus eaque eos error et facere ipsam iste laboriosam molestias optio.
											</p>

										</div>
									</div>
								</div>
                            </article>
                            
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-full.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-full.html">Aliquam amet atque deleniti</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span>March 9, 2019</span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>03:15 pm - 05:30 pm</span>
												</span>
											</div>
											<p>
												Aliquam amet, atque deleniti dignissimos dolor ducimus eaque eos error et facere ipsam iste laboriosam molestias optio.
											</p>

										</div>
									</div>
								</div>
                            </article>
                            
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-full.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-full.html">Aliquam amet atque deleniti</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span>March 9, 2019</span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>03:15 pm - 05:30 pm</span>
												</span>
											</div>
											<p>
												Aliquam amet, atque deleniti dignissimos dolor ducimus eaque eos error et facere ipsam iste laboriosam molestias optio.
											</p>

										</div>
									</div>
								</div>
                            </article>
                            
							<article class="post side-item text-center text-md-left content-padding bordered event-post">
								<div class="row">
									<div class="col-xl-4 col-lg-5 col-md-5">
										<div class="item-media cover-image">
											<img src="images/gallery/02.jpg" alt="">
											<div class="media-links">
												<a class="abs-link" title="" href="event-single-full.html"></a>
											</div>
										</div>
									</div>

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
												<a href="event-single-full.html">Aliquam amet atque deleniti</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span>March 9, 2019</span>
												</span>
												<span>
													<i class="fa fa-clock-o color-main"></i> <span>03:15 pm - 05:30 pm</span>
												</span>
											</div>
											<p>
												Aliquam amet, atque deleniti dignissimos dolor ducimus eaque eos error et facere ipsam iste laboriosam molestias optio.
											</p>

										</div>
									</div>
								</div>
							</article>
             

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
							<p><a target="_blank" href="https://templateshub.net">Mechanic Hero</a></p>
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