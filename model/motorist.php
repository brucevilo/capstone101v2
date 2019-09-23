<?php
	///Motorist model
	include("dbhelper.php");
	class Motorist{
		private $table="motorist";
		private $field_id ="motoristid";
		private $fieldnames=["lastname","firstname","email","password","contact_number","address","status",];
		private $field=["mechanicid","name","comment"];
		private $dbconn;
			// var_dump($this->fieldnames); die;
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllMotorist()	{	return $this->dbconn->getAll($this->table);}	
		function getMotoristID($ref_id)	{	return $this->dbconn->getMotoristID($ref_id);}	
		function getMotoristPassword($newpass,$ref_id)	{	return $this->dbconn->getMotoristPass($newpass,$ref_id);}
		function createMotorist($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function deleteMotorist($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
		function updateMotorist($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}
		function getReview($ref_id){return $this->dbconn->getreview($ref_id);}
		
		function addReview($data) { return $this->dbconn->addReview($data,$this->field);}
	}//end of class
	
		class User{
			private $table='users';
			private $fieldnames=array('email','password','user_type','status');
			private $dbconn;
			
			function __construct()	{	$this->dbconn=new DBHelper();}
			function getAllUser($newpass,$ref_id)	{	return $this->dbconn->getUserPass($newpass,$ref_id);}	
			function updatePasswordUser($newpass,$user_id)	{	return $this->dbconn->getUserPass($newpass,$user_id);}	
			function addUser($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		}//end of class
	
?>
