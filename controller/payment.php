<?php
    include('../model/payments.php');
$pay =new Payments();
// $ref_id = $_GET['id'];
$row=$pay->addPayment($ref_id);
print_r($row);
?>