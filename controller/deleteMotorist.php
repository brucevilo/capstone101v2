<?php
     include('../model/motorist.php');
     $mechanic=new Motorist();


     $ref_id="1";
   
     $delete=$mechanic->deleteMotorist($ref_id);

?>