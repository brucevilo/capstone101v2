<?php
    include("../model/certificalte.php");
$certificate = new Certificate();

$mechanicid ="5";
$certname= "TESDA Certificate";
$certUrl="certURL";
$data = [$mechanicid,$certname,$certUrl];

$certificate->createCertificate($data);


// brdsadadas
?>