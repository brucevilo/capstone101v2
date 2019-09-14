<?php
    include("dbhelper.php");

class ServiceRequestDetails
{
    private $table="service_request_accepted";
    private $field_id ="sra_id";
    private $fieldnames=["serve_post_respid","motoristid","contactno","address","status"];
    private $dbconn;
        // var_dump($this->fieldnames); die;
    function __construct()	{	$this->dbconn=new DBHelper();}
    function getAllServiceRequestDetails()	{	return $this->dbconn->getAll($this->table);}
    function getAllServiceRequestDetailsById($ref_id)	{	return $this->dbconn->getByIdSRR($ref_id);}	
    function getAllServiceRequestAcceptedById($ref_id)	{	return $this->dbconn->getSRAbyId($ref_id);}	 	
    function updatenotofication($ref_id)	{	return $this->dbconn->updatenotofication($ref_id);}	 	
    function createServiceRequestDetails($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
    function deleteServiceRequestDetails($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
    function updateServiceRequest($serve_post_respid) { return $this->dbconn->updateServiceRequest($serve_post_respid);}  
}



?>