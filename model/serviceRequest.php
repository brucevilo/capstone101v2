<?php
    include("dbhelper.php");

class ServiceRequest
{
    private $table="service_request";
    private $table2="vehicle";
    private $field_id ="servreqid";
    private $fieldnames=["vehicle_plateno","motoristid","service_date",
                        "problems","service","latlang","city","service_status","status"];
    private $dbconn;


        // var_dump($this->fieldnames); die;
    function __construct()	{	$this->dbconn=new DBHelper();}
    function getSinlgeSr($ref_id,$ref_field){ return $this->dbconn->getSingleService($ref_id,$ref_field);}
    function getAllSr(){return $this->dbconn->getAllService(); }
    function getAllServiceRequest($ref_id,$field_id)	{	return $this->dbconn->getRecordById($this->table,$ref_id,$field_id);}	
    function createServiceRequest($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
    function deleteServiceRequest($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
    function updateServiceRequest($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}  
}



?>