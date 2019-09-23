<?php
include('../model/mechanic.php');
$mechanic=new Mechanic();
$row=$mechanic->getMechanicID($ref_id);
$review=$mechanic->getReview($ref_id);

?>