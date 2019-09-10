<?php
include("../model/service.php");
$service = new Service();

$mechanicid ="5";
$servicedesc= "Air Conditioning";
$service_fee ="P3500.00";
$ref_id ="2";
$data  =[$mechanicid,$servicedesc,$service_fee];
$service->updateService($data,$ref_id);



?>