<?php
    session_start();
    include('../model/dbhelper.php');
    $db  = new DBHelper();
    
 if(isset($_POST['btnLogin'])){

  
$email = $_POST['email'];
$password = $_POST['password'];
$row = $db->login($email,$password);

// var_dump($row); die;
if(!empty($row))  
{
 
    $type =$row ['0']['user_type'];
    $user_id = $row ['0']['user_id'];
    $status  =$row ['0']['status'];
  if($status == "active"){     
    if($type == "Motorist")
        {   
            $table = "motorist";
            $field_id = "email";
            $ref_id = $email;
            $data=$db->getId($table,$field_id,$ref_id);
            $id =$data['motoristid'];
            $_SESSION['motorist'] = $id; 
            $_SESSION['user_id'] = $user_id;
            
            
            echo "<script>alert('Successfully Login');window.location='../view/motoristDashboard.php'</script>";
        }
    else{
          
        $table = "mechanic";
        $field_id = "email";
        $ref_id = $email;
        // echo $email;
        $data=$db->getId($table,$field_id,$ref_id);
        $id =$data['mechanicid'];
       
        $_SESSION['mechanic'] = $id; 
        $_SESSION['user_id'] = $user_id;
        echo "<script>alert('Successfully Login');window.location='../view/mechanicDashboard.php'</script>";
    }
    
}
echo "<script>alert('Account has been Deactivated.');window.location='../view/index.php'</script>";
}
else{
    
    echo "<script>alert('Invalid user try again!');window.location='../view/index.php'</script>";
}

}

?>