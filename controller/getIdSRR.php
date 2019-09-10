<?php
    ///user controller
    // session_start();
	include('../model/serviceRequestRespon.php');
    $srr=new ServiceRequestRespon();

    $srr->getAllServiceRequestResponUpdate($ref_id);
    $row1=$srr->getAllServiceRequestResponId($ref_id);
      
        
	
?>