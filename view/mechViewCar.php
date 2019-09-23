<?php
session_start();
  if(!isset($_SESSION['mechanic'])){
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
							<h4 id="reply-title" class="fw-700 comment-reply-title">Car<span class="text-gradient">Details</span></h4>
							</div>

						</div>
					</div>
				</section>


			</div>
		
<?php
 include("../controller/getSingleSr.php");
	
		
	?>

			<section class="ls s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-60">
				<div class="container">
					<div class="row">
						<main class="offset-lg-1 col-lg-10">
							<article class="vertical-item post type-event status-publish format-standard has-post-thumbnail events-post single-post">
								<div class="item-media post-thumbnail rounded-top">
								<?php echo	"<img src='../controller/images/".$rows['vehicle_image']."'>"; ?>
								</div>
							
								<div class="item-content">
									<div class="divider-7"></div>
									<div class="entry-meta item-meta color-darkgrey mb-20">
										<i class="fa fa-calendar color-main"></i> <span><?php echo date('F j, Y, g:i a',strtotime($rows['service_date']));?></span>
										<br><i class="fa fa-map-marker color-main"></i> <span><?php echo $rows['city'];?></span>
										 <span>
										
										<br>
										
										
										 </span>
										<a href='#modalQouteForm' data-toggle ='modal'  class='btn btn-small btn-outline-maincolor btn-appointment' >Send Qoute</a> 
									</div>
									<!-- .entry-meta -->
									<hr>
<!-- map -->
<style>
#map {overflow:hidden!important; height:300px}
</style>
		<div id="map" ></div>
    <script>

      function initMap() {
		// 10.3111";s:19:"geoplugin_longitude";s:8:"123.8917
        var myLatLng = {lat:9.6475, lng: 123.8556};
		
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpPsipq7KmnGpRp-3Dp9gkYrRUTGM2OJ4&callback=initMap">
    </script>
<!-- end of map -->
									<div class="entry-content">
								<br>
								<br>
											<span><h6>	Car Brand: <?php echo strtoupper($rows['vehicle_brand']);?>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Car Model :<?php echo strtoupper($rows['vehicle_model']);?>
											</h6></span>
								
										<span><h6>	Car Transmission: <?php echo strtoupper($rows['vehicle_drivertype']);?>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											Car Engine :<?php echo strtoupper($rows['vehicle_engine']);?>
											</h6></span>
									

										<p>
										<h5 id="reply-title" class="fw-700 comment-reply-title">Car<span class="text-gradient">Problems  :   </span>&nbsp;&nbsp;<?php echo $rows['service']?> 

									

										<p>
										<h5 id="reply-title" class="fw-700 comment-reply-title">More<span class="text-gradient">Details    :  </span >&nbsp;&nbsp;<?php echo $rows['problems']?>
										</p>


									</div>
									<!-- .entry-content -->

								</div>
								<!-- .item-content -->
							</article>


					
<!-- modal-->
<div class="modal fade" id="modalQouteForm" tabindex="-1" role="dialog" aria-labelledby="modalLoginForm" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="row c-gutter-0">
			<form action="../controller/addServiceRequestRespon.php" method="get"></form>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span>×</span>
				</button>
				<div class="col-md-12 col-sm-12">
					<div class="modal-content">
						<div class="modal-header justify-content-center">
							<h6 class="modal-title">Estimated Pice for the service</h6>
						</div>
						<div class="modal-body">
							<form action="../controller/addServiceRequestRespon.php" method="GET">
								<div class="form-group has-placeholder">
									<label for="name-sigin"></label>

								<input type="hidden" name ="servreqid" value = " <?php echo $_GET['id'];?>">
									<strong>Total Price</strong> <input type="number" class="form-control" id="bid" placeholder="Bid" name="bid">
								</div>
								<div class="form-group has-placeholder">
								<strong>Qoute</strong>
								<textarea cols="30" rows="4.1" name="biddesc" id ="biddesc" placeholder="Details..."></textarea>

								</div>
									<div class="modal-footer d-flex justify-content-center">
										<button type="submit" name ="btnAddSr" class="btn btn-small btn-maincolor log-btn">Send Bid</button>
									</div>
							</form>
							<br/>
							<br/>
							<br/>

							<div class="modal-footer d-flex justify-content-center">



								</div>
						</div>
					</div>
				<!-- </div>
				<div class="col-md-6 d-sm-none d-xs-none ds s-overlay">
					<img src="images/modal-login-form.jpg" alt="">
				</div>
			</div> -->
		</div>
	</div>



	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>

