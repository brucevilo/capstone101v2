<?php
    include('../model/mechanic.php');
 $mechanic=new Mechanic();
 $user = new User();
if(isset($_POST['signup'])){
$email = $_POST['email'];   
$password = $_POST['password'];
$cpass = $_POST['c-password'];
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_number=$_POST['contactNo'];
$mechtype = $_POST['specialty'];
$user_type = "Mechanic";
$status ="1";
//for single cell value separte by ,  
$p = implode(',',$mechtype);
// for each value
for($i = 0;count($mechtype)<$i;$i++){
    
    // put insert query and value of selected price
    $p = $mechtype[$i];
}

   
if ($cpass != $password)
{
    echo "<script>alert('Password mismatch!');window.location='../view/motoristRegistration.php'</script>";
}  
else if($password <=6)
{
    echo "<script>alert('Password password must be 6 characters or more!');window.location='../view/motoristRegistration.php'</script>";
}  
else {

$data =[$lastname,$firstname,$email,$address,$contact_number,$p,$status,$password]; 
$ok =$mechanic->createMechanic($data);
$status="active";
$data = [$email,$password,$user_type,$status];
$ok =$user->addUser($data); 

echo "<script>alert('Successfully Registered.');window.location='../view/mechanicRegistration.html'</script>";
}
}

?>