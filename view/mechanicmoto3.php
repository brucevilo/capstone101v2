<?php
session_start();
//   if(!isset($_SESSION['mechanic'])){
//     header("location:index.php");
//   }
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
												<a href="mechanicDashboard.php">Home</a>
											
											</li>

											<li>
												<a href="motoristVehicle.php">Vehicle</a>
											</li>
																				
										
											<li>
												<a href="mechanicProfile.php"><i class="ico-user"></i></a>
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

					<!-- <span class="toggle_menu"><span></span></span> -->

				</header>					
<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container mechanic">
						<div class="row">

							<div class="col-md-12">
								<h1 class="bold text-center text-lg-left">Car Details</h1>
							</div>

						</div>
					</div>
				</section>


			</div>
<?php
   $ref_id =$_GET['id'];
	include('../controller/getVehicleById.php');
	
	foreach($row as $rows){

?>		  			


<section class="ls s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-60">
				<div class="container">
					<div class="row">
						<main class="offset-lg-1 col-lg-10">
							<article class="vertical-item post type-event status-publish format-standard has-post-thumbnail events-post single-post">
								<div class="item-media post-thumbnail rounded-top">
								<?php echo	"<img src='../controller/images/".$rows['vehicle_image']."'>"; ?>
								</div>
							
									<!-- .entry-meta -->
									<hr>

									<div class="entry-content">
										<p class="excerpt">
										<span><h6>Car Brand:  &nbsp;&nbsp; <?php echo strtoupper($rows['vehicle_brand']);?></span>
										<br>
											Car Model/ Year : &nbsp;&nbsp; <?php echo strtoupper($rows['vehicle_model']);?>
										<br>	
											Car Transmission : &nbsp;&nbsp; <?php echo strtoupper($rows['vehicle_drivertype']);?>
										<br>
											Car Engine : &nbsp;&nbsp; <?php echo strtoupper($rows['vehicle_engine']);?>
										
										<br>
										Plate Number  :   </span>&nbsp;&nbsp;<?php echo $rows['vehicle_plateno']?> 
									<br>
									Registration Number    :  </span >&nbsp;&nbsp;<?php echo $rows['vehicle_regno']?>
									</h6>
									</p>


									</div>
									<!-- .entry-content -->

								</div>
								<!-- .item-content -->
							</article>
<?php 
}
	?>

							</div>


						</main>
					</div>
				</div>
			</section>



	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>