<?php
include("../model/serviceRequestAccepted.php");
$srd = new ServiceRequestDetails();
$srd->updatenotofication($ref_id);
$row=$srd->getAllServiceRequestAcceptedById($ref_id);
// print_r($row);
?>