<?php
session_start();
// if(!isset($_SESSION['mechanic'])){
//   header("location:index.php");
// }
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


				<!--eof topline-->
						<?php     include('../controller/getallSr.php');?>
									<!-- notification start -->
  						
				<?php
        
          
            			
            foreach($rows as $row){

            echo " <article class='post side-item text-center text-md-left content-padding bordered event-post'>";
            echo "<div class='row'>";
			echo "<div class='col-xl-3 col-lg-3 col-md-3'>";
										echo "<div class='item-media cover-image'>";
										
										echo "<img src='../controller/images/".$row['vehicle_image']."' alt=''>";
										// echo "<img src='../controller/images/9383-car-repair-362150_960_720.jpg alt=''>";
										// echo "img src='../controller/images/".$row['vehicle_imaged'];
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
                                    
												
										

										echo "<div class='mb-10 item-meta color-darkgrey'>";
									
										echo  strtoupper("<h6>Brand :".$row['vehicle_brand']."<br/>") ;		
										// echo "</span>
										// 		<span>";
										echo  strtoupper("Model :".$row['vehicle_model']."</span></h6>");
                                        echo  strtoupper("Address :".$row['city']."</span></h6> <br/>");
                                        echo  strtoupper("<h7>More Info :".$row['problems']."</span><br/>");
										
										echo "<a href='mechViewCar.php?id=".$row['servreqid']."'  class='btn btn-small btn-outline-maincolor btn-appointment' >View Details</a>";

                                        // echo "</span>";
										echo "</div>";
                                        // echo  strtoupper(" <span>".$row['vehicle_service']."</span></h6>");
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
		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>


</html>