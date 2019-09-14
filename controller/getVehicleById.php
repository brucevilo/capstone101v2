<?php
// session_start();
    include('../model/vehicle.php');
    $vehicle = new Vehicle();
 
// $ref_id ="ASD111";
    $field_id = "vehicle_plateno";
    $row = $vehicle->getUserVechicle($field_id,$ref_id);
    // print_r($rows);
//     foreach($rows as $keys=>$row)
//         {
//             echo $row['vehicle_plateno'];
        
//         }

// die;
?>