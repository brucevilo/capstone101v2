<?php
	///mechanic controller
	include('../model/serviceRequestAccepted.php');
	$sr=new ServiceRequestDetails();
    $ref_id = $_SESSION['mechanic'];
 
	$row = $sr->getAllServiceRequestDetailsById($ref_id);
	
 ?>  