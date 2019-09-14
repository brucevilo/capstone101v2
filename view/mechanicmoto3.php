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
												<a href="mechanicDashboard.php">Home</a>
											
											</li>

											<li>
												<a href="mechanicOnGoing.php">On-Going-Work</a>
											</li>
										
											<li>
												<a href="mechanicProfile.php">Profile</a>
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
<?php }
	?>


							<div id="comments" class="post-comments comments-area rounded">
								<h4 id="reply-title" class="fw-700 comment-reply-title">Leave<span class="text-gradient">Comment</span></h4>

								<div id="respond" class="comment-respond ls d-flex">
									<form action="http://webdesign-finder.com/" method="post" id="commentform" class="comment-form" novalidate="">
										<div class="comment-form-author form-group has-placeholder">
											<label for="author">Name</label>
											<input class="form-control" id="author" name="author" type="text" value="" size="30" maxlength="245" aria-required="true" required="required" placeholder="Enter your name">
										</div>
										<p class="comment-form-email form-group has-placeholder">
											<label for="email">Email </label>
											<input class="form-control" id="email" name="email" type="email" value="" size="30" maxlength="100" aria-required="true" required="required" placeholder="Enter your email">
										</p>

										<p class="comment-form-comment form-group has-placeholder">
											<label for="comment">Comment</label>
											<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="Enter your message"></textarea>
										</p>
										<p class="form-submit">
											<button type="button" class="btn btn-small btn-maincolor">Leave Comment</button>
										</p>
									</form>
								</div>
								<!-- #respond -->
								<ol class="comment-list">
									<li class="comment">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="" src="images/team/comments-04.jpg">
												</div>
												<!-- .comment-author -->
												<div class="comment-name d-block d-md-flex justify-content-between">
													<b class="fn">
														<a href="#" rel="nofollow" class="url fw-500">Jeffrey P. McAllister</a>
													</b>
													<span class="comment-metadata d-block links-grey">
														<a href="#">
															<i class="fs-14 color-main ico-clock-alt"></i>
															2 min ago
														</a>
													</span>
													<!-- .comment-metadata -->
												</div>
											</footer>
											<!-- .comment-meta -->
											<div class="comment-content">
												<p>
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
												</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class=" color-main fw-500" href="#comments" aria-label="Reply to John Doe">Reply</a>
											</div>
										</article>
										<!-- .comment-body -->
										<ol class="children">
											<li class="comment">
												<article class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="" src="images/team/comments-02.png">
														</div>
														<!-- .comment-author -->
														<div class="comment-name d-block d-md-flex justify-content-between">
															<b class="fn">
																<a href="#" rel="nofollow" class="url fw-500">David F. Gibbs</a>
															</b>
															<span class="comment-metadata d-block links-grey">
																<a href="#">
																	<i class="fs-14 color-main ico-clock-alt"></i>
																	2 min ago
																</a>
															</span>
															<!-- .comment-metadata -->
														</div>
													</footer>
													<!-- .comment-meta -->
													<div class="comment-content">
														<p>
															Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
														</p>
													</div>
													<div class="reply">
														<a rel="nofollow" class=" color-main fw-500" href="#comments" aria-label="Reply to John Doe">Reply</a>
													</div>
												</article>
												<!-- .comment-body -->
											</li>
											<!-- #comment-## -->
											<li class="comment">
												<article class="comment-body">
													<footer class="comment-meta">
														<div class="comment-author vcard">
															<img alt="" src="images/team/comments-01.jpg">
														</div>
														<!-- .comment-author -->
														<div class="comment-name d-block d-md-flex justify-content-between">
															<b class="fn">
																<a href="#" rel="nofollow" class="url fw-500">Antonie D. Malone</a>
															</b>
															<span class="comment-metadata d-block links-grey">
																<a href="#">
																	<i class="fs-14 color-main ico-clock-alt"></i>
																	2 min ago
																</a>
															</span>
															<!-- .comment-metadata -->
														</div>
													</footer>
													<!-- .comment-meta -->
													<div class="comment-content">
														<p>
															Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
														</p>
													</div>
													<div class="reply">
														<a rel="nofollow" class=" color-main fw-500" href="#comments" aria-label="Reply to John Doe">Reply</a>
													</div>
												</article>
												<!-- .comment-body -->
											</li>
											<!-- #comment-## -->
										</ol>
										<!-- .children -->
									</li>
									<!-- #comment-## -->

									<li class="comment">
										<article class="comment-body">
											<footer class="comment-meta">
												<div class="comment-author vcard">
													<img alt="" src="images/team/comments-03.png">
												</div>
												<!-- .comment-author -->
												<div class="comment-name d-block d-md-flex justify-content-between">
													<b class="fn">
														<a href="#" rel="nofollow" class="url fw-500">Delie J. Warren</a>
													</b>
													<span class="comment-metadata d-block links-grey">
														<a href="#">
															<i class="fs-14 color-main ico-clock-alt"></i>
															2 min ago
														</a>
													</span>
													<!-- .comment-metadata -->
												</div>
											</footer>
											<!-- .comment-meta -->
											<div class="comment-content">
												<p>
													Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
												</p>
											</div>
											<div class="reply">
												<a rel="nofollow" class=" color-main fw-500" href="#comments" aria-label="Reply to John Doe">Reply</a>
											</div>
										</article>
										<!-- .comment-body -->
									</li>
									<!-- #comment-## -->
								</ol>
								<!-- .comment-list -->

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