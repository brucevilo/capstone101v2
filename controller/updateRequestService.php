<?php
    include("../model/serviceRequest.php");
$sr = new ServiceRequest();

$vehicleid= "1";
$mechanicid="5";
$request_date="July 20, 2019 1:30PM";
$service_date="July 12, 2019 1:30PM";
$problems ="brake won't work";
$latlang ="1732,1234";
$service_staus="DONE";
$status = "0"; 

$ref_id= "1";
$data = [$vehicleid,$mechanicid,$mechanicid,$request_date,$problems,
        $latlang,$service_staus,$status];

$sr->updateServiceRequest($data,$ref_id);

// echo $ok;



?>