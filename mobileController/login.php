<?php
    session_start();
    include('../model/dbhelper.php');
    $db  = new DBHelper();
    
 
$email = $_POST['email'];
$password = $_POST['password'];
// $email="karen@gmail.comdsad";
// $password="qweasd";
// echo $password;
$row = $db->login($email,$password);
// var_dump($row); die;
// print_r($row);
// echo ;
if(sizeof($row)>0)
{
   
    echo "succesfully login.";  
}
else
{
    echo "failed to login";
}

?>