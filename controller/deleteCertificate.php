<?php
     include('../model/certificalte.php');
     $mechanic=new certificate();


     $ref_id="1";
   
     $delete=$mechanic->deleteCertificate($ref_id);

?>