<?php
session_start();
 include('../model/vehicle.php');
 $vehicle=new Vehicle();
 
 if(isset($_POST['btnVehicle'])){
        
 $motoristEmail=$_SESSION['motorist'];

   #file name with a random number so that similar dont get replaced
   $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
  
   #temporary file name to store file
   $tname = $_FILES["file"]["tmp_name"];
   
    #upload directory path
$uploads_dir = 'images';
   #TO move the uploaded file to specific location
   move_uploaded_file($tname, $uploads_dir.'/'.$pname);

$vehicle_image = $pname;
$vehicle_mileage=$_POST['vehicle_mileage'];
 $vehicle_brand =$_POST['vehicle_brand'];
 $vehicle_model =$_POST['vehicle_model'];
 $vehicle_drivertype =$_POST['vehicle_drivertype'];
 $vehicle_color =$_POST['vehicle_color'];
 $vehicle_regno =$_POST['vehicle_regno'];
 
 $vehicle_plateno=$_POST['vehicle_plateno'];
 $status="";

 
// $data =array('lastname'=>$lastname,'firstname' => $firstname,'email' => $email, 
//                 'address'=>$address,'contact_number'=>$contact_number,
//             'mechtype'=>$mechtype,'status'=>$status,'password' => $password); 
$data =[$motoristEmail,$vehicle_image,$vehicle_mileage, 
        $vehicle_brand,$vehicle_model,$vehicle_drivertype,
        $vehicle_color,$vehicle_regno,$vehicle_plateno,$status]; 
$ok =$vehicle->createVehicle($data);
print_r($ok);
if($ok==1){
       
        echo "<script>alert('Vehicle Added!');window.location='../view/motoristVehicle.php'</script>";
        }
else{
        
        echo "<script>alert('Failed to Add!');window.location='../view/motoristVehicle.php'</script>";
}

}

?>