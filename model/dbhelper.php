
<?php
	//database abstraction
	class DBHelper{
		
		private $hostname='127.0.0.1';
		private $username='root';
		private $password='';
		private $database='mechanichero';
		public $conn;
		
		function __construct(){
			try{
				$this->conn=new PDO("mysql:host=$this->hostname;dbname=$this->database",$this->username,$this->password);
			}catch(PDOException $e){ echo $e->getMessage();}
		}
		
		function Notification($ref_id)
		{
			$rows;
			$sql="SELECT serve_post_respid,biddesc,bid,date,service_request_respon.status,lastname FROM mechanic,service_request_respon ,service_request where service_request_respon.servreqid = service_request.servreqid && service_request_respon.status = 'unread' && service_request.motoristid = $ref_id && service_request_respon.mechanicid = mechanic.mechanicid order by date";
			
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function getSRRbyID($ref_id)
		{
			$sql = "SELECT * FROM $table WHERE $field_id = ?";
			try{
			$stmt = $this->conn->prepare($sql);
			$stmt->execute(array($ref_id));
			$row = $stmt->fetchall(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $row;
		}
		function Notification1($ref_id)
		{
			$rows;
			$sql="SELECT serve_post_respid,biddesc,bid,date,service_request_respon.status,lastname FROM mechanic,service_request_respon ,service_request where service_request_respon.servreqid = service_request.servreqid && service_request.motoristid = $ref_id && service_request_respon.mechanicid = mechanic.mechanicid order by date";
			
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function login($email,$password)
			{
				$rows;
				$sql = "SELECT * FROM users where email ='". $email."' && password ='". $password."'";
				
				try{
					$stmt=$this->conn->prepare($sql);
					$stmt->execute();
					$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
				}catch(PDOException $e){ echo $e->getMessage();}
				return $rows;
			}
			function getPlateNumber($table,$field_id,$ref_id){
				$sql = "SELECT vehicle_plateno FROM $table WHERE $field_id = ?";
			
				try{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array($ref_id));
				$row = $stmt->fetchall(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
				return $row;
			}
			function getRecordById($table,$field_id,$ref_id){
				$sql = "SELECT * FROM $table WHERE $field_id = ?";
				try{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array($ref_id));
				$row = $stmt->fetchall(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
				return $row;
			   // $this->conn = null;
			}
			function getId($table,$field_id,$ref_id){
				$sql = "SELECT * FROM $table WHERE $field_id = ?";
			
				try{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array($ref_id));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
				return $row;
			   // $this->conn = null;
			}
		function getAll($table){
			$rows;
			$sql="SELECT * FROM $table";
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}

		function getAllService(){
			$rows;
			$sql="SELECT * FROM vehicle, service_request WHERE service_request.service_status = 'Pending' && service_request.vehicle_plateno = vehicle.vehicle_plateno";
		
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}

		
		function getSingleService($ref_id,$field_id){
			$rows;
			$sql="SELECT * FROM vehicle, service_request WHERE service_request.vehicle_plateno = vehicle.vehicle_plateno && $field_id = $ref_id";
	
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetch(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function insertRecord($table,$fieldnames,$data){
			
				$fld=implode(",",$fieldnames);
				$q=array();
				$ok = true;
				try{
					
						foreach($data as $d) $q[]="?";
						$dta=implode(",",$q);
						$sql="INSERT INTO $table($fld) VALUES($dta)";
						$stmt=$this->conn->prepare($sql);
						$ok=$stmt->execute($data);
						
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
			}
		

		function deleteRecord($table,$field_id,$ref_id)
				{
					$ok;
					$sql="DELETE FROM $table WHERE $field_id=?";
					try{
						$stmt=$this->conn->prepare($sql);
						$ok=$stmt->execute(array($ref_id));				
					}catch(PDOException $e){ echo $e->getMessage();}
					return $ok;
				}
		function updateRecord($table,$fieldnames2,$data,$field_id,$ref_id)
			{	
				$ok;	
				$flds=implode("=?,",$fieldnames2)."=?";
				$sql="UPDATE $table SET $flds WHERE $field_id=$ref_id";
			
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute($data);
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
			}			
	}//end of class
?>