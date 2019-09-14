<!-- dsadad -->
<?php
    include('../model/vehicle.php');
 $vehicle=new Vehicle();
 $motoristid="5";
 $vehicle_image="brucegwapo";
 $vehicle_mileage="20000";
 $vehicle_brand ="Hondaa";
 $vehicle_model ="Honda Covic";
 $vehicle_drivertype ="Manual";
 $vehicle_color ="Red";
 $vehicle_regno ="19843984324";
 $vehicle_plateno="GMW 1094";
 $status ="1";
 $ref_id ="2";

 
// $data =array('lastname'=>$lastname,'firstname' => $firstname,'email' => $email, 
//                 'address'=>$address,'contact_number'=>$contact_number,
//             'mechtype'=>$mechtype,'status'=>$status,'password' => $password); 
$data =[$motoristid,$vehicle_image,$vehicle_mileage, 
        $vehicle_brand,$vehicle_model,$vehicle_drivertype,
        $vehicle_color,$vehicle_regno,$vehicle_plateno,$status]; 


$ok =$vehicle->updateVehicle($data,$ref_id);

echo $ok;


?>