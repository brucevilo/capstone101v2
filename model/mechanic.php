<?php
	///mechanic model
	include("dbhelper.php");
	class Mechanic{
		private $table="mechanic";
		private $field_id ="mechanicid";
		private $field=["mechanicid","name","comment"];
		private $fieldnames=["lastname","firstname","email","address","contact_number","mechtype","status","password"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllMechanic()	{	return $this->dbconn->getAll($this->table);}

		function getMechanicID($ref_id)	{	return $this->dbconn->getMechanicByID($ref_id);}		
		function getMechanicPassword($newpass,$ref_id)	{	return $this->dbconn->getMechanicPass($newpass,$ref_id);}		
		function createMechanic($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteMechanic($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateMechanic($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
		function getReview($ref_id){return $this->dbconn->getreview($ref_id);}
		
		function addReview($data) { return $this->dbconn->insertRecord($this->field,$data);}
	
	
	
	}//end of class

	class User{
		private $table='users';
		private $fieldnames=array('email','password','user_type','status');
		private $dbconn;
		
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllUser()	{	return $this->dbconn->getAll($this->table);}	
		function addUser($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function updatePasswordUser($newpass,$user_id)	{	return $this->dbconn->getUserPass($newpass,$user_id);}	
		

	}//end of class

?>
