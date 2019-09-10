<?php

include('../model/motorist.php');
$mechanic=new motorist();

$email = "brucevilo19";   
$password ="123";
$firstname ="bruce bigel";
$lastname = "vilojr ";
$address = "cebu mandue";
$contact_number="09223087445";
$status ="1";

$data =[$lastname,$firstname,$email,$password,$contact_number,$address,$status]; 

$ref_id="3";

$row=$mechanic->updateMotorist($data,$ref_id);


?>