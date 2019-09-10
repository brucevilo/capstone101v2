<?php
    session_start();
    include("../model/serviceRequestRespon.php");
$service_req_respons = new ServiceRequestRespon();
if(isset($_GET['btnAddSr'])){
$mechanicid =$_SESSION['mechanic'];
$servreqid = $_GET['servreqid'];
$bid=$_GET['bid'];
$biddesc=$_GET['biddesc'];
$status = "unread";
$data = [$servreqid,$mechanicid,$bid,$biddesc,$status];
// print_r($data); die;
$row =$service_req_respons->createServiceRequestRespon($data);

if($row>0)
    {
        echo "<script>alert('Service Request has been send please wait for motorist response.');window.location='../view/mechanicDashboard.php'</script>";
    }
    else
    {
        die;
        echo "<script>alert('Service Request Failed');window.location='../view/mechanicDashboard.php'</script>";
    }
 
}

?>