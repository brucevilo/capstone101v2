<?php
include('../model/motorist.php');
$mechanic=new Motorist();
$row=$mechanic->getMotoristID($ref_id);

?>