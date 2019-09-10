<?php
     include('../model/service.php');
     $service=new Service();


     $ref_id="1";
   
     $delete=$service->deleteService($ref_id);

?>