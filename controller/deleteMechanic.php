<?php
     include('../model/mechanic.php');
     $mechanic=new Mechanic();


     $ref_id="1";
   
     $delete=$mechanic->deleteMechanic($ref_id);

?>