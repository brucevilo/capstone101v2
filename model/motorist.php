<?php
	///Motorist model
	include("dbhelper.php");
	class Motorist{
		private $table="motorist";
		private $field_id ="motoristid";
		private $fieldnames=["lastname","firstname","email","password","contact_number","address","status",];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllMotorist()	{	return $this->dbconn->getAll($this->table);}	
		function createMotorist($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteMotorist($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateMotorist($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
	}//end of class
	
		class User{
			private $table='users';
			private $fieldnames=array('email','password','user_type','status');
			private $dbconn;
			
			function __construct()	{	$this->dbconn=new DBHelper();}
			function getAllUser()	{	return $this->dbconn->getAll($this->table);}	
			function addUser($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		}//end of class
	
?>
