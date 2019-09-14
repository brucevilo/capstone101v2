<?php
session_start();
include('../model/motorist.php');
$mechanic=new motorist();
$user=new User();
$ref_id = $_SESSION['motorist'];
if(isset($_POST['UpAcc'])){
$email = $_POST['email'];
$password =$_POST['password'];
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_number=$_POST['contact_number'];
$status ="1";

$data =[$lastname,$firstname,$email,$password,$contact_number,$address,$status]; 

$row=$mechanic->updateMotorist($data,$ref_id);
if($row>0)
{
    
    echo "<script>alert('Successfully Change!');window.location='../view/motoristDashboard.php'</script>";

}
}

if(isset($_POST['btnpass']))
{
    $ref_id=$_SESSION['motorist'];   
    $pass =$_POST['pass'];
    $password =$_POST['password'];
    $newpass =$_POST['newpass'];
    $cpass =$_POST['cpass'];

   
    if($pass != $password)
    {
        echo "<script>alert('Current Password is Incorrect!');window.location='../view/motoristChangePass.php'</script>";
    }
     if($newpass != $cpass)
    {
        echo "<script>alert('Password Mismatch');window.location='../view/motoristChangePass.php'</script>";
    }
    if(strlen($cpass)<5)
    {
        echo "<script>alert('Password must be 6 character and above.!');window.location='../view/motoristChangePass.php'</script>";
    }
    else
    {
        $mechanic->getMotoristPassword($newpass,$ref_id);
        $user_id = $_SESSION['user_id'];
        $user->updatePasswordUser($newpass,$user_id);
        echo "<script>alert('Password Successfully changed!');window.location='../view/mechanicDashboard.php'</script>";
   
    }
}
?>