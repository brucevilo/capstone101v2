<?php
	///mechanic controller
	include('../model/serviceRequest.php');
	$sr=new ServiceRequest();
    
    $rows= $sr->getAllSr();
    // var_dump($rows); die;
    // $ref_id=$_SESSION['mechanic'];
    $ref_id= "14";
    $noti=$sr->mechanicNoto($ref_id);   
    // print_r($noti1);
   
    $noti1 =$sr->mechanicNoto1($ref_id);   
    // print_r($noti);
    // echo count($noti1);
    // die;

    ?>