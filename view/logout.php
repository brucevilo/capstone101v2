<?php 
session_start();
// require('../model/viloModel.php');
// $id = $_SESSION['id'];
// $objvilo = new viloModel();
// $action = "Logout";
// $ip_address = $_SERVER['REMOTE_ADDR'];
// $objvilo->action=$action ;
// $objvilo->ip_address= $ip_address;
// $objvilo->id=$id;
// $result = $objvilo->logs($action);
session_destroy();
header("location:index.php");
 ?> 