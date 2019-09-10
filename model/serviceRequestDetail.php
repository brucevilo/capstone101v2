<?php
    include("dbhelper.php");

class ServiceRequestDetails
{
    private $table="service_request_details";
    private $field_id ="srd_id";
    private $fieldnames=["servreqid","serviceid","qty"];
    private $dbconn;
        // var_dump($this->fieldnames); die;
    function __construct()	{	$this->dbconn=new DBHelper();}
    function getAllServiceRequestDetails()	{	return $this->dbconn->getAll($this->table);}	
    function createServiceRequestDetails($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
    function deleteServiceRequestDetails($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
    function updateServiceRequestDetails($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}  
}



?>