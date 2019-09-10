<?php
	///mechanic controller
	include('../model/serviceRequest.php');
	$sr=new ServiceRequest();
    $ref_id = $_GET['id'];
    $ref_field = "servreqid";
    $rows= $sr->getSinlgeSr($ref_id,$ref_field);
 ?>  