<?php

include('../model/mechanic.php');
$mechanic=new Mechanic();

$email = "brucevilo19";   
$password ="123";
$firstname ="bruce bigel";
$lastname = "vilojr ";
$address = "cebu mandue";
$contact_number="09223087445";
$mechtype = "AIR breathing";
$status ="1";

$data =[$lastname,$firstname,$email, 
$address,$contact_number,
$mechtype,$status,$password]; 

$ref_id="5";

$row=$mechanic->updateMechanic($data,$ref_id);


?>