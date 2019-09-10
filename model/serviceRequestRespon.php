<?php
	///ServiceRequestRespon model
	include("dbhelper.php");
	class ServiceRequestRespon{
		private $table="service_request_respon";
		private $fieldnames=["servreqid","mechanicid","bid","biddesc","status"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllServiceRequestRespon1($ref_id)	{	return $this->dbconn->Notification1($ref_id);}
		function getAllServiceRequestRespon($ref_id)	{	return $this->dbconn->Notification($ref_id);}
		function getAllServiceRequestResponId($ref_id)	{	return $this->dbconn->getSRRbyID($ref_id);}		
		function createServiceRequestRespon($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteServiceRequestRespon($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateServiceRequestRespon($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
	}//end of class
?>
