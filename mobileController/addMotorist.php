<?php
  
    include('../model/motorist.php');
 $motorist=new Motorist();
 $user = new User();


 $email = $_POST['email'];   
$password =$_POST['password'];
$cpass = $_POST['cpass'];
$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$contact_number=$_POST['contact_number'];
$user_type="Motorist";
$status ="1";

// $data =array('lastname'=>$lastname,'firstname' => $firstname,'email' => $email, 
//                 'address'=>$address,'contact_number'=>$contact_number,
//             'mechtype'=>$mechtype,'status'=>$status,'password' => $password); 
$data =[$lastname,$firstname,$email,$password,$contact_number,$address,$status]; 
$row =$motorist->createMotorist($data);
$status = "active";
$data = [$email,$password,$user_type,$status];
$ok =$user->addUser($data); 

if($row>0 && $ok>0)
{
    echo "Successfully Registered";
}
else 
{
    echo "Failed to Registered";
}





?>