<?php
session_start();
include('../model/mechanic.php');
$mechanic=new Mechanic();
$user =new User();

if(isset($_POST['btnAcc'])){
$ref_id=$_SESSION['mechanic'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$contact_number = $_POST['contact_number'];
$address = $_POST['address'];
$mechtype = $_POST['mechtype'];
$password = $_POST['password'];
$status ="1";

$data =[$lastname,$firstname,$email, 
$address,$contact_number,
$mechtype,$status,$password]; 

// print_r($data); die;
$row=$mechanic->updateMechanic($data,$ref_id);
if($row>0)
{
    echo "<script>alert('Successfully Change!');window.location='../view/mechanicDashboard.php'</script>";
}
}


if(isset($_POST['btnpass']))
{
    $ref_id=$_SESSION['mechanic'];   
    $pass =$_POST['pass'];
    $password =$_POST['password'];
    $newpass =$_POST['newpass'];
    $cpass =$_POST['cpass'];

   
    if($pass != $password)
    {
        echo "<script>alert('Current Password is Incorrect!');window.location='../view/mechanicChangePass.php'</script>";
    }
     if($newpass != $cpass)
    {
        echo "<script>alert('Password Mismatch');window.location='../view/mechanicChangePass.php'</script>";
    }
    if(strlen($cpass)<5)
    {
        echo "<script>alert('Password must be 6 character and above.!');window.location='../view/mechanicChangePass.php'</script>";
    }
    else
    {
        $mechanic->getMechanicPassword($newpass,$ref_id);
        $user_id = $_SESSION['user_id'];
        $user->updatePasswordUser($newpass,$user_id);
        echo "<script>alert('Password Successfully changed!');window.location='../view/mechanicDashboard.php'</script>";
   
    }
}
?>