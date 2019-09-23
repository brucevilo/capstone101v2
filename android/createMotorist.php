<?php  
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'mechanichero';
    $con = mysqli_connect($hostname,$username,$password,$database);

    $json = file_get_contents('php://input');

    $obj = json_decode($json,true);
    $email = $obj['user'];
    $pass = $obj['pass'];
    $firstname = $obj['firstname'];
    $lastname = $obj['lastname'];
    $contactNo = $obj['contactNo'];
    $address= $obj['address'];
    $password= $obj['password'];

    $userSql = "INSERT into users (email,password )VALUES ($email,$pass)";
    $motoristSql = "INSERT into motorist (email,password,firstname,lastname,contactNo,address,password)
                    VALUES ($email,$password,$firstname,$lastname,$contactNo,$address,$password)";
    $check = mysqli_fetch_array(mysqli_query($con,$usersql));
    $check1 = mysqli_fetch_array(mysqli_query($con,$motoristSql));
 if($check1&&$check1)
 {
     $message = "Succesfully Registered!";
     $json = json_encode($message);    
 }
 else 
 {
     echo "Failed to register.";
 }
    
    mysqli_close($con);