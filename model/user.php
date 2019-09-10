<?php
	///user model
	require('dbhelper.php');
	class User{
		private $table='users';
		private $fieldnames=array('user_id','email','password','user_type','status');
		private $fieldnames2=array('email','password','user_type');
		private $status=array('status');
		private $dbconn;
		private $field_id = 'user_id';
		function __construct()	{	$this->dbconn=new DBHelper();}
		function getAllUser()	{	return $this->dbconn->getAll($this->table);}	
		function addUser($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
		function updateUser($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames2,$data,$this->field_id,$ref_id);}
		function updateStatus($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->status,$data,$this->field_id,$ref_id);}
		function getUserId($field_id,$ref_id){return $this->dbconn->getRecordById($this->table,$field_id,$ref_id);}
	}//end of class
?>