<?php
    ///user controller
    // session_start();
	include('../model/serviceRequestRespon.php');
    $srr=new ServiceRequestRespon();
    $ref_id = $_SESSION['motorist']; 
    $row1=$srr->getAllServiceRequestRespon($ref_id);
    
    $row=$srr->getAllServiceRequestRespon1($ref_id);
	
?>