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
									<input type="text" class="form-control" id="vehicle_model" placeholder="Car Model/Year" name="vehicle_model" require>
								</div>
								<div class="form-group has-placeholder">
									<input type="text" class="form-control" id="vehicle_drivertype" placeholder="Transmission" name="vehicle_drivertype" require>
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
									<input type="text" class="form-control" id="vehicle_engine" placeholder="Engine Name" name="vehicle_engine" require>
								</div>
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
<!-- 
<script>
$(document).ready(function{
	$('#btnVehicle').click(function(){
		var image_name == $('image').val();
		if(image name =='')
		{
			alert("Please Select Image");
			return false;
		}
		else{
			var extention =$('#image').val().split(',').pop().toLowerCase();
			if(jquery.inArray (extension, ['gif','png','jpg','jpeg'])) == -1)
			{
				alert("Invalid Image File";
				$('#image').val('');
					return false;

				)

			}
		}

	})

})
</script>
 -->
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

				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container mechanic">
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
										echo "<a href='motoristAddServiceReq.php?id=".$row['vehicleid']."& plateno=".$row['vehicle_plateno']."'  class='btn btn-small btn-outline-maincolor btn-appointment' >Add Service</a>";

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