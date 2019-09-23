<?php  
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'mechanichero';
    $con = mysqli_connect($hostname,$username,$password,$database);

    $json = file_get_contents('php://input');

    $obj = json_decode($json,true);
    $user = $obj['user'];
    $pass = $obj['pass'];

    $checkSql = "SELECT * from users where email = '$user' and password = '$pass'";
    $check = mysqli_fetch_array(mysqli_query($con,$checkSql));

    if(isset($check)){
        $getUser = "select user_id from users where email = '$user'";
        $get = mysqli_fetch_array(mysqli_query($con,$getUser));

        $EmailExistMSG = 'Login Successfull';
        $user_id = $get['user_id'];
        echo json_encode($user_id);
    }else{
        $message = 'Try Again';
        $messageJson = json_encode($message);
        echo $messageJson;
    }

    mysqli_close($con);