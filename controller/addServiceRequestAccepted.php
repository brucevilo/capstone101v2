<?php
session_start();
include("../model/serviceRequestAccepted.php");
$srd = new ServiceRequestDetails();

if(isset($_POST['btnSRR'])){
$serve_post_respid=$_POST['serve_post_respid'];
// $serve_post_respid="17";
$contactno =$_POST['contactno'];
$address =$_POST['addresss'];
// echo $address; die;
$motoristid = $_SESSION['motorist'];
$status= "1";
$data  =[$serve_post_respid,$motoristid,$contactno,$address,$status];
$row=$srd->createServiceRequestDetails($data);

$srd->updateServiceRequest($serve_post_respid);
if($row>0)
{
    echo "<script>alert('Wait mo Mechanic to Contact you.');window.location='../view/motoristDashboard.php'</script>";
}
}

?>  