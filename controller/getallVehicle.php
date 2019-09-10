<?php
// session_start();
    include('../model/vehicle.php');
    $vehicle = new Vehicle();
    $ref_id = $_SESSION['motorist'];

    $field_id = "motoristid";
    $rows = $vehicle->getUserVechicle($field_id,$ref_id);
    
//     foreach($rows as $keys=>$row)
//         {
//             echo $row['vehicle_plateno'];
        
//         }

// die;
?>