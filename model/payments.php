<?php
	///user model
	require('dbhelper.php');
	class Payments{
		private $table='payments';
		private $fieldnames=array('id','txnid','payment_amount','payment_status','itemid','createdtime');
		
		private $dbconn;
		
		function __construct()	{	$this->dbconn=new DBHelper();}
		function addPayment($ref_id)	{	return $this->dbconn->AddPayment($ref_id);}	
	
		}//end of class
?>