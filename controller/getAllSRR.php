<?php
    ///user controller
    // session_start();
	include('../model/serviceRequestRespon.php');
    $srr=new ServiceRequestRespon();
    $ref_id = $_SESSION['motorist']; 
    $row=$srr->getAllServiceRequestRespon($ref_id);

     $rows=$srr->getAllServiceRequestRespon1($ref_id);
	
?>