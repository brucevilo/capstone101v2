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
	</div>
			
				</div>
			</div>
		</div>
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
							<div class="col-md-12">
								<a href="mechanicDashboard.php" class="logo">
									<img src="images/logo.png" alt="">
									<span class="logo-text fw-500">Mechanic<span class="fw-200">Hero</span></span>
								</a>
							</div>
							<br>
							<div class="col-12">

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
											
						<?php include('../controller/getAllSRR.php')?>
									<!-- notification start -->
  												<li>
												  <div class="dropdown shop-card-dropdown">
												<a class="dropdown-toggle dropdown-shopping-cart" href="#" role="button" id="dropdown-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="ico-shopping-bag"></i>
											<?php
											  if(count($rows)>0){
											?>		
													<span class="badge bg-maincolor"><?php echo count($rows);?></span>
											  <?php }?>
												</a>
												<div class="dropdown-menu dropdown-menu-right ls" aria-labelledby="dropdown-shopping-cart">
												
												<div class="widget woocommerce widget_shopping_cart">
														<h4>Car<span class="text-gradient">Notification</span></h4>
										
												 		
														<div class="widget_shopping_cart_content">		
														<?php 
											 foreach ($row as $rows){ 
												 
												  if($rows['status']=='unread'){?>		
												  												
														<?php echo "<a href='motoristResponRequest.php?id=".$rows['serve_post_respid']."'>";?>
																	<small><i><?php echo date('F j, Y, g:i a',strtotime($rows['date']));?></i></small><br>
																		<span class="product-title fw-500">Mr/Ms.<?php echo $rows['lastname'];?>
																		 response to your service request.</span>
												  </b>
																	</a>
															
																		<!-- <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku=""><i class="fs-14 ico-trash color-main"></i></a> -->
																		
																	</div>

																		</div>
																		<div class="widget_shopping_cart_content">	
											<?php
												  }
												  
										  if($rows['status']=='read'){
											?>		
															
																						
														<?php		
														echo "<a href='motoristResponRequest.php?id=".$rows['serve_post_respid']."'>";?>
																	<small><i><?php echo date('F j, Y, g:i a',strtotime($rows['date']));?></i></small><br>
																		<span class="">Mr/Ms. 	<?php echo $rows['lastname'];?> 
																		response to your service request.</span>
																	
																	</a>
															
																		<!-- <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku=""><i class="fs-14 ico-trash color-main"></i></a> -->
																		
																	</div>

																		</div>
																	
											 <?php 
												}
												  }
											 
											 
								
											 ?>
												</li>				

												
									<!-- end -->


											<li>
												<a href="logout.php"><i class="fa fa-sign-out"></i></a>
											<li>
											<!-- <li  class="d-md-none d-sm-none col-xs-2">
												<a href="logout.php"><i class="oi oi-person"></i></a>
											<li>
										 -->
									</nav>
									<!-- eof main nav -->


								</div>

							</div>
						</div>
					</div>

					<!-- header toggler -->

					<!-- <span class="toggle_menu"><span></span></span> -->

				</header>
			<br>
			<br>
			<style>
			
			</style>
<?php
foreach($data as $u ) {?>
				<article class="post side-item text-center text-md-left content-padding bordered event-post mechanic">
							

									<div class="col-xl-8 col-lg-7 col-md-6">
										<div class="divider-11 d-none d-xl-block"></div>
										<div class="item-content">
											<h6>
											<?php $plateno=$u['vehicle_plateno'];
					
											?>
												<a href="../view/mechanicmoto3.php?id=<?php echo $plateno;?>& vehicle_id=<?php echo $u['servreqid']?>">
													Car Plate No:  <?php echo $plateno;?>
												</a>
											</h6>

											<div class="mb-10 item-meta color-darkgrey">
												<span>
													<i class="fa fa-calendar color-main"></i> <span><?php echo date('F j, Y',strtotime($u['service_date']));?></span>
												</span>
											
											</div>
											<p>
												Car Problems: <?php echo $u['service'];?>
											
												<br/>
												Description: <?php echo $u['problems'];?>
											</p>
											<a href="../view/mechanicProfile1.php?id=<?php echo $u['mechanicid'];?>";>				
												Mechanic Name :<b> <?php echo $u['lastname'].", ".$u['firstname'];?> </b>
												</a>
										

										</div>
									</div>
								</div>
							</article>


<?php }?>
<!-- 

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
			</section> -->


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>