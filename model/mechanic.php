<?php
	///mechanic model
	include("dbhelper.php");
	class Mechanic{
		private $table="mechanic";
		private $field_id ="mechanicid";
		private $fieldnames=["lastname","firstname","email","address","contact_number","mechtype","status","password"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllMechanic()	{	return $this->dbconn->getAll($this->table);}	
		function createMechanic($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteMechanic($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateMechanic($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
	}//end of class

	class User{
		private $table='users';
		private $fieldnames=array('email','password','user_type');
		private $dbconn;
		
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllUser()	{	return $this->dbconn->getAll($this->table);}	
		function addUser($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
	}//end of class

?>
