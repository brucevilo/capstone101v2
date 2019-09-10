<?php
	///mechanic controller
	include('../model/serviceRequest.php');
	$sr=new ServiceRequest();
	$ref_id = $_SESSION['motorist'];
	$field_id = "motoristEmail";
	$row=$sr->getAllServiceRequest($ref_id,$field_id);
    // echo json_encode(array('user'=>$row));
    
	
	// function getAll(){
	// 	global $row;
	// 	return $row;
	// }
	
?>