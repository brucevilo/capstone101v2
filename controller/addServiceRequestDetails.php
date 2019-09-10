<?php
include("../model/serviceRequestDetail.php");
$srd = new ServiceRequestDetails();

$servreqid ="2";
$serviceid= "1";
$qty="1";//auto increment

$data  =[$servreqid,$serviceid,$qty];
$srd->createServiceRequestDetails($data);



?>  