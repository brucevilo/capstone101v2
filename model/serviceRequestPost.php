<?php
	///ServiceRequestPost model
	include("dbhelper.php");
	class ServiceRequestPost{
		private $table="service_request_post";
		private $fieldnames=["servreqid","postdate"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllServiceRequestPost()	{	return $this->dbconn->getAll($this->table);}	
		function createServiceRequestPost($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteServiceRequestPost($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateServiceRequestPost($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
	}//end of class
?>
