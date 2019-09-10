<?php
    ///user controller
    // session_start();
	include('../model/serviceRequestRespon.php');
    $srr=new ServiceRequestRespon();

    
    $row1=$srr->getAllServiceRequestResponId($ref_id);
      
    // $row=$srr->getAllServiceRequestRespon1($ref_id);
	
?>