<?php

include('../model/certificalte.php');
$mechanic=new Certificate();

$mechanicid ="5";
$certname= "TESDA Certificate";
$certUrl="certURL";
$data = [$mechanicid,$certname,$certUrl];

$ref_id="2";

$row=$mechanic->updateCertificate($data,$ref_id);


?>