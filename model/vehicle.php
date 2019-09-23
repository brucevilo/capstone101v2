	<?php
		///vechicle model
		require("dbhelper.php");
	class Vehicle
		{
		
			private $table="vehicle";
			private $table1="service_request";
			private $field_id ="vehicleid";
			private $fieldnames=["motoristid","vehicle_image","vehicle_mileage","vehicle_brand",
								"vehicle_model","vehicle_drivertype","vehicle_color","vehicle_regno",
								"vehicle_plateno","status","vehicle_engine"];

			private $dbconn;
	
			function __construct()	{	$this->dbconn=new DBHelper();}
			function getVehicleService(){ return $this->dbconn->getVehService();}
			function getUserVechicle($field_id,$ref_id)	{return $this->dbconn->getRecordById($this->table,$field_id,$ref_id);}	
			function getAllVehicle()	{	return $this->dbconn->getAll($this->table);}	
			function createVehicle($data) { return $this->dbconn->insertRecord($this->table,$this->fieldnames,$data);}
			function deleteVehicle($ref_id) { return $this->dbconn->deleteRecord($this->table,$this->field_id,$ref_id);}
			function updateVehicle($data,$ref_id) { return $this->dbconn->updateRecord($this->table,$this->fieldnames,$data,$this->field_id,$ref_id);}  
		}
	?>   