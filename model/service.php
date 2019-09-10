<?php
    include("dbhelper.php");

class Service
{
    private $table="service";
    private $field_id ="serviceid";
    private $fieldnames=["mechanicid","servicedesc","service_fee"];
    private $dbconn;
        // var_dump($this->fieldnames); die;
    function __construct()	{	$this->dbconn=new DBHelper();}
    function getAllService()	{	return $this->dbconn->getAll($this->table);}	
    function createService($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
    function deleteService($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
    function updateService($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}  
}



?>