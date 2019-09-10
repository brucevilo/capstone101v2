<?php
  
    include('../model/motorist.php');
 $motorist=new Motorist();
 $user = new User();

if(isset($_POST['btn-register']))
{
    $email = $_POST['email'];   
$password =$_POST['password'];
$cpass = $_POST['c-password'];
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_number=$_POST['contact_number'];
$user_type="Motorist";
$status ="1";
if ($cpass != $password)
{
    echo "<script>alert('Password mismatch!');window.location='../view/motoristRegistration.php'</script>";
}    
else if($password< 7 )
{
    echo "<script>alert('Password must be 6 character or more!');windw.location='../view/motoristRegistration.php'</script>";
}
else {
// $data =array('lastname'=>$lastname,'firstname' => $firstname,'email' => $email, 
//                 'address'=>$address,'contact_number'=>$contact_number,
//             'mechtype'=>$mechtype,'status'=>$status,'password' => $password); 
$data =[$lastname,$firstname,$email,$password,$contact_number,$address,$status]; 
$ok =$motorist->createMotorist($data);
$status = "active";
$data = [$email,$password,$user_type,$status];
$ok =$user->addUser($data); 

echo "<script>alert('Successfully Registered.');window.location='../view/motoristDashboard.php'</script>";
}

}



?>