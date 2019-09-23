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
												<a href="logout.php"><i class="fa fa-sign-out"></i></a>
											<li>
										
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<!-- <span class="toggle_menu"><span></span></span> -->
			
				</header>



		
                <section class="ls s-pt-55 s-pb-35 s-pt-lg-145 s-pb-lg-140 s-parallax s-overlay comingsoon">
				<div class="divider-40 d-none d-lg-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h2 class="special-heading">
								Mechanic's<span class="text-gradient">Qoute.</span>
							</h2>
							<style>
								.center {
									margin: auto;
									width: 50%;
									padding: 10px;
									border: 2px solid #ccc;
									background-color: #ffffff;
								}

								input[type=text] {
									width: 50%;
									margin: center;
									padding: 12px 20px;
									margin: 8px 0;
									box-sizing: border-box;
									color: #ff4e3c;
								}
							</style>
							<div class="center">
                            <form action="../controller/updatemotorist.php" method="post">
                                <?php
 $ref_id = $_SESSION['motorist'];
  include('../controller/getMotoristById.php');?> 

                            <input type="hidden" value="<?php echo $row['password']?>" name="password">  
                              Lastname:  <input type="text" value="<?php echo $row['lastname']?>" name="lastname">  
                              <br>
                                Firstname:  <input type="text" value="<?php echo $row['firstname']?>" name="firstname">  
                                <br>
                               Email:      <input type="text" value="<?php echo $row['email']?>" name="email">  
                              <br>
                              Address:      <input type="text" value="<?php echo $row['address']?>" name="address">  
                              <br>
                               Contact Number: <input type="text" value="<?php echo $row['contact_number']?>" name="contact_number">
                               <br> 
                      	
									
                                    <button type="submit" name="UpAcc" class="btn btn-small btn-maincolor log-btn">Submit</button>
                                    <a href="motoristDashboard.php"  class="btn btn-small btn-maincolor log-btn">Cancel</a>
							</div>
							<!-- <h6 class="mt-0">Stay Tuned!</h6>		
							<div id="comingsoon-countdown"></div> -->
							<!--
					use "data-date" attribute with your date value to set date that you need to count to
					<div id="comingsoon-countdown" data-date="March 29, 2018 10:00:00"></div>
				-->
			</form>
						</div>
					</div>
				</div>
			</section>

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