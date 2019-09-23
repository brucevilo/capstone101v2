<?php
include("../model/motorist.php");
$motorist = new Motorist();
session_start();

if(isset($_POST['btnComment'])){


$ref_id =$_SESSION['motorist'];
$rows=$motorist->getMotoristID($ref_id);
$name =  $rows['lastname'].", ".$rows['firstname'];



$mechnic = $_POST['mechanicid'];
$comment = $_POST['comment'];

$data = [$mechnic,$name,$comment];
$ref_id=$_SESSION['motorist'];
$row=$motorist->addReview($data);
// print_r($row); die;
if($row>0)
{
    header('Location: ../view/mechanicprofile1.php?id='.$mechnic);
}
}
?>