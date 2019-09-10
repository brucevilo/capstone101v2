<?php
	///Certificate model
	include("dbhelper.php");
	class Certificate{
		private $table="mechanic_cert";
		private $field_id ="certid";
		private $fieldnames=["mechanicid","certname","certUrl"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllCertificate()	{	return $this->dbconn->getAll($this->table);}	
		function createCertificate($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteCertificate($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateCertificate($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
	}//end of class
?>
