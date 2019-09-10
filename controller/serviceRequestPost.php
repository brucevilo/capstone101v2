<?php
    include("../model/serviceRequestPost.php");
$srp = new ServiceRequestPost();

    $servreqid="2";
    $postdate=CURRENT_TIMESTAMP;
$data = [$servreqid,$postdate];

$row=$srp->createServiceRequestPost($data);



?>