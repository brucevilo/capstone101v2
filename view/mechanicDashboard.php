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
	<title>MechanicHero></title>
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

				<!--topline section visible only on small screens|-->
		


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
												<a href="mechanicDashboard.php">Home</a>
											
											</li>

											<li>
												<a href="mechanicOnGoing.php">On-Going-Work</a>
												
											</li>
										
										
											<li>
												<a href="mechanicProfile.php"><i class="ico-user"></i></a>
											</li>
											
						<?php     include('../controller/getallSr.php');?>
									<!-- notification start -->
  												<li>
												  <div class="dropdown shop-card-dropdown">
												<a class="dropdown-toggle dropdown-shopping-cart" href="#" role="button" id="dropdown-shopping-cart" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="ico-shopping-bag"></i>
											<?php
											  if(count($noti1)>0){
											?>		
													<span class="badge bg-maincolor"><?php echo count($noti1);?></span>
											  <?php }?>
												</a>
												<div class="dropdown-menu dropdown-menu-right ls" aria-labelledby="dropdown-shopping-cart">
												
												<div class="widget woocommerce widget_shopping_cart">
														<h4>Car<span class="text-gradient">Notification</span></h4>
											<?php 
											 foreach ($noti as $notis){ 
												  if($notis['notification']=='unread'){?>	
												 	
														<div class="widget_shopping_cart_content">												
														<?php 	echo "<a href='paypal.php?id=".$notis['sra_id']."'>";?>
																	<small><i><?php echo date('F j, Y, g:i a',strtotime($notis['date']));?></i></small><br>
																		<span class="product-title fw-500">Mr/Ms.<?php echo $notis['lastname'];?> 
																		Accepted your qoute.</span>
												  </b>
																	</a>
															
																		<!-- <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku=""><i class="fs-14 ico-trash color-main"></i></a> -->
																		
																	</div>

																		</div>
											<?php
												  }
										  if($notis['notification']=='read'){
											?>		
														<div class="widget_shopping_cart_content">		
																						
														<?php
														
														if($notis['paid']== "1"){
															echo "<a href='mechanicSRAdeatails.php?id=".$notis['sra_id']."'>";
													
														}
														else 
														{
															// echo "<a href='mechanicSRAdeatails.php?id=".$notis['sra_id']."'>";
															echo "<a href='paypal.php?id=".$notis['sra_id']."'>";
															// echo $notis['paid'];
														}
														?>
														 		
																	<small><i><?php echo date('F j, Y, g:i a',strtotime($notis['date']));?></i></small><br>
																				<span class="">Mr/Ms. <?php echo $notis['lastname'];?> 
																				Accepted your qoute.</span>
																	<!-- </a> -->
															
																		<!-- <a href="#" class="remove" aria-label="Remove this item" data-product_id="73" data-product_sku=""><i class="fs-14 ico-trash color-main"></i></a> -->
																		
																	</div>

																		</div>
																	
											 <?php 
															
										}
												  }
											 
											 
								
											 ?>
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
			
			
				<br>
				<br>
				<br>
				<?php
        
          
            			
            foreach($rows as $row){

            echo " <article class='post side-item text-center text-md-left content-padding bordered event-post'>";
            echo "<div class='row'>";
			echo "<div class='col-xl-3 col-lg-3 col-md-3'>";
										echo "<div class='item-media cover-image'>";
										
										echo "<img src='../controller/images/".$row['vehicle_image']."' alt=''>";
									
										echo "<div class='media-links'>";
										echo "<a class='abs-link' title='' href='mechViewCar.php?id=".$row['servreqid']."'></a>";	
									echo "		</div>
                                    </div>
                                </div>";

									echo "<div class='col-xl-7 col-lg-6 col-md-5'>";
									echo "<div class='divider-11 d-none d-xl-block'></div>";
                                    echo "	<div class='item-content'>
                                              <h4>";
                                    echo  $row['service']."</h4>";
                                    
												
										

										// echo "<div class='mb-10 item-meta color-darkgrey'>";
									
										echo  strtoupper("<h6>Brand :".$row['vehicle_brand']."<br/>") ;		
										// echo "</span>
										// 		<span>";
										echo  strtoupper("Model :".$row['vehicle_model']."</span></h6>");
                                        echo  strtoupper("Address :".$row['city']."</span></h6> <br/>");
                                        echo  strtoupper("<h7>More Info :".$row['problems']."</span><br/>");
										
										echo "<a href='mechViewCar.php?id=".$row['servreqid']."'  class='btn btn-small btn-outline-maincolor btn-appointment' >View Details</a>";

                                       
										echo "</div>";
                                   
										echo "</p>";
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