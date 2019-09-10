<?php
	///mechanic controller
	include('../model/serviceRequest.php');
	$sr=new ServiceRequest();
    
    $rows= $sr->getAllSr();
    // var_dump($rows); die;
   
        
 

    ?>