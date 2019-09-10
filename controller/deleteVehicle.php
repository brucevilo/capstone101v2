<?php
     include('../model/vehicle.php');
     $mechanic=new Vehicle();


     $ref_id="1";
   
     $delete=$mechanic->deleteVehicle($ref_id);

?>