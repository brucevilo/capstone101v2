<?php
include("../model/service.php");
$service = new Service();

$mechanicid ="5";
$servicedesc= "Air Conditioning";
$service_fee ="P2500.00";

$data  =[$mechanicid,$servicedesc,$service_fee];
$service->createService($data);


?>