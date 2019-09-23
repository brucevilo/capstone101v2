<?php
session_start();
include("../model/serviceRequest.php");
$sr = new ServiceRequest();



//get user ip address details with geoplugin.net
$geopluginURL = 'http://www.geoplugin.net/php.gp?id=';
$addrDetailsArr = unserialize(file_get_contents($geopluginURL));
//get city name by return array

//get country name by return array
$country = $addrDetailsArr['geoplugin_countryName'];

$vehicle_plateno= $_GET['vehicle_plateno'];

$motorist_email = $_SESSION['motorist'];
$request_date="now()";
$city =$_GET['city'];
$service_date=$_GET['request_date'];
$problems =$_REQUEST['problems'];
$services = $_GET['service'];
$service = implode(',',$services);
// for each value
for($i = 0;count($services)<$i;$i++){
    
    // put insert query and value of selected price
    $service = $services[$i];
}
$latlang =$addrDetailsArr['geoplugin_latitude'].",".$addrDetailsArr['geoplugin_longitude'];

$service_status="Pending";
$status = "1"; 
$data = [$vehicle_plateno,$motorist_email,$service_date,$problems,$service,
        $latlang,$city,$service_status,$status];
$row=$sr->createServiceRequest($data);
// print_r($data); die;
if($row>0)
{
    echo "<script>alert('Please wait for a mechanic to responce!');window.location='../view/motoristDashboard.php'</script>";
}
else
{
    echo "<script>alert('Service Failed to add');window.location='../view/motoristDashboard.php'</script>";
}



?>