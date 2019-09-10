<?php
    include('../model/user.php');
    $user = new User();

    if(isset($_GET['btn_edit']))
    {
        $ref_id = $_GET['id'];
        $email = $_GET['email'];
        $password =$_GET['password'];
        $user_type =$_GET['user_type'];
        $data = [$email,$password,$user_type];
        $user->updateUser($data,$ref_id);

        echo "<script>alert('Successfully Updated!');window.location='../view/mechanicDashboard.php'</script>";
    }

    if(isset($_GET['action']) and isset($_GET['id']))
    {
    
        $action = $_GET['action'];
        $ref_id = $_GET['id'];
        $status = " ";
        $message = " ";


        // echo var_dump($action); die;
    if($action=='deactive')
    {
        $status='inactive';
        $message='Deactived!';
    }
     else{
            $status='active';
            $message='Active!';
        }
         $data=[$status];
        $user->updateStatus($data,$ref_id);
        echo "<script>alert('Account has been $message');window.location='../view/mechanicDashboard.php'</script>";   }
?>