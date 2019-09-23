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
												<a href="mechanicDashboard.php">Home</a>
											
											</li>

											<li>
												<a href="mechanicOnGoing.php">On-Going-Work</a>
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
<!-- 
				<section class="page_title ds s-pt-105 s-pb-50 s-pt-lg-115 s-pb-lg-60">
					<div class="divider-3 d-none d-lg-block"></div>
					<div class="container">
						<div class="row">

							<div class="col-md-12">
								
	
							</div>

						</div>
					</div>
				</section> -->

 <?php
 $ref_id = $_SESSION['mechanic'];
  include('../controller/getMechanicByID.php');?> 

				<section class="ls s-py-60 s-py-lg-100 s-py-xl-150 c-gutter-60">
				<div class="container mechanic">
					<div class="row">
						<main class="offset-lg-1 col-lg-10">
							<article class="vertical-item post type-event status-publish format-standard has-post-thumbnail events-post single-post">
								<div class="item-media post-thumbnail rounded-top">
								<h5><?php echo strtoupper($row['lastname']).", ".strtoupper($row['firstname']); ?></h5>
								</div>
							
									<!-- .entry-meta -->
									<hr>

									<div class="entry-content">
										<p class="excerpt">
										<span><h6>Email Address:  &nbsp;&nbsp; <?php echo strtoupper($row['email']);?></span>
										<br>
											Contact Number : &nbsp;&nbsp; <?php echo strtoupper($row['contact_number']);?>
										<br>
										Home Address  :   </span>&nbsp;&nbsp;<?php echo $row['address']?> 
									<br>
									Specialty   :  </span >&nbsp;&nbsp;<?php echo $row['mechtype']?>
									</h6>
									</p>
									<p class="form-submit">
											<a type="button" href="mechanicUpdateAcc.php" class="btn btn-small btn-maincolor">Edit Account Details</a>
											<a type="button" href="mechanicChangePass.php" class="btn btn-small btn-maincolor">Change Password</a>
										</p>

									</div>
									<!-- .entry-content -->

								</div>
								<!-- .item-content -->
							</article>
							
							

							<div id="comments" class="post-comments comments-area rounded">
								<h4 id="reply-title" class="fw-700 comment-reply-title">Mechanic<span class="text-gradient">History</span></h4>

								<div id="respond" class="comment-respond ls d-flex">
									<form action="../controller/addReview.php" method="post" id="commentform" class="comment-form" novalidate="">
										<p class="comment-form-comment form-group has-placeholder">
											<!-- <label for="comment">Comment</label> -->
											<!-- <input type="hidden" value=<?php echo $ref_id?> name="mechanicid"> -->
											<!-- <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="Enter your message"></textarea> -->
										</p>
										<p class="form-submit">
											<!-- <button type="submit" name="btnComment"class="btn btn-small btn-maincolor">Leave Comment</button> -->
										</p>
									</form>
								</div>
								<!-- #respond -->
							<?php if($review<1)
							{?>
														<div class="comment-content">
														<p>
																No Feedbacks Yet...
														</p>
													</div>

													<?php  }
							else {
							foreach($review as $u){
								?>
								<ol class="comment-list">
									<li class="comment">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<!-- <img alt="" src="images/team/comments-04.jpg"> -->
												</div>
												<!-- .comment-author -->
												<div class="comment-name d-block d-md-flex justify-content-between">
													<b class="fn">
														<a href="#" rel="nofollow" class="url fw-500"><?php echo strtoupper($u['name']);?></a>
													</b>
													<span class="comment-metadata d-block links-grey">
														<a href="#">
															<i class="fs-14 color-main ico-clock-alt"></i>
															<?php $time_ago = strtotime($u['review_date']);
																  $current_time = time();
																  $time_differce =  $current_time - $time_ago;
																  $seconds =$time_differce;
																  $minutes = round($seconds/60);
																  $hours = round($seconds/3600);
																  $days = round($seconds/86400);
																  $weeks= round($seconds/604800);
																// secho $seconds;
																  if($seconds <= 60)
																  {
																	  echo "Just Now";
																  }
																  else if($minutes <=60){
																	  if($minutes==1)
																	  {
																		  echo "one minute ago";
																	  }
																	  else{ echo "$minutes minutes ago";}
																  }
																  else if($hours <=12)
																  {
																	  if($hours == 1)
																	  { echo "hour ago";}
																	  else
																	  {echo "$hours hours ago";}
																  }
																  else if($days <=12)
																  {
																	  if($days == 1)
																	  { echo "A day ago";}
																	  else
																	  {echo "$days day ago";}
																  }
																  else if($weeks <=12)
																  {
																	  if($weeks == 1)
																	  { echo "A week ago";}
																	  else
																	  {echo "$weeks day ago";}
																  }
																  

																
																
															?>
														</a>
													</span>
													
													<!-- .comment-metadata -->
												</div>
												<div class="comment-content">
														<p>
															<?php echo $u['comment']?>
														</p>
													</div>
									</article>
									</li>
							<?php  } }?>	
				</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->



	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>