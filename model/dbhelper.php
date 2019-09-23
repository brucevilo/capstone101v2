
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
	function getreview($ref_id){
			$rows;
		$sql = "SELECT * FROM review where mechanicid =$ref_id";
		
		try{
			$stmt=$this->conn->prepare($sql);
			$stmt->execute();
			$rows=$stmt->fetchall(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		return $rows;
		
	}
	function addReview($data,$field)
	{
		$fld=implode(",",$field);
		$q=array();
		$ok = true;
		try{
			
				foreach($data as $d) $q[]="?";
				$dta=implode(",",$q);
				$sql="INSERT INTO review($fld) VALUES($dta)";
				// echo $sql; die;
				$stmt=$this->conn->prepare($sql);
				$ok=$stmt->execute($data);
				
		}catch(PDOException $e){ echo $e->getMessage();}
		return $ok;
	}
	function getMotoristSrr($ref_id)
		{
			
			$rows;
			$sql="SELECT * FROM mechanic,service_request_respon,`service_request` WHERE `service_status` ='On-going'
			&& service_request_respon.servreqid = service_request.servreqid 
			&& service_request_respon.mechanicid = mechanic.mechanicid 
			&& `motoristid`=  $ref_id";
		try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchall(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function getMotoristID($ref_id)
		{
			
			$rows;
			$sql="SELECT * FROM motorist where motoristid =$ref_id";
			
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetch(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function UpdateNotification($ref_id)
		{
		
			$ok;
				$sql="UPDATE service_request_respon SET status ='read' WHERE serve_post_respid=$ref_id";
				// echo $sql;~
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute();
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
		}
		function getMechanicPass($newpass,$ref_id)
		{
			$ok;
				$sql="UPDATE mechanic SET password = '$newpass' 
				WHERE mechanicid=$ref_id ";
				// echo $sql; die;
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute();
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
		}
		function getUserPass($newpass,$user_id)
		{
			$ok;
				$sql="UPDATE users SET password='$newpass' 
				WHERE user_id=$user_id";
				// echo $sql;die;
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute();
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
		}
		
		function getMotoristPass($newpass,$ref_id)
		{
			$ok;
				$sql="UPDATE motorist SET password = '$newpass' 
				WHERE motoristid=$ref_id";
				// echo $sql;
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute();
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
		}
		function updatenotofication($ref_id)
		{
			
			$ok;
				$sql="UPDATE service_request_accepted SET notification ='read' WHERE sra_id=$ref_id";
				// echo $sql;~
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute();
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
		}
		function Notification($ref_id)
		{
			$rows;
			$sql="SELECT serve_post_respid,biddesc,bid,date,service_request_respon.status,lastname FROM mechanic,service_request_respon ,service_request where service_request_respon.servreqid = service_request.servreqid && service_request.motoristid = $ref_id && service_request_respon.mechanicid = mechanic.mechanicid order by date";
				// echo $sql; die;
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function Notification1($ref_id)
		{
			$rows;
				$sql="SELECT serve_post_respid,biddesc,bid,date,service_request_respon.status,lastname FROM mechanic,service_request_respon ,service_request where service_request_respon.servreqid = service_request.servreqid && service_request.motoristid =$ref_id && service_request_respon.mechanicid = mechanic.mechanicid && service_request_respon.status='unread'order by date";
				
				try{
					$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function Notification2($ref_id)
		{
			$rows;
				$sql="SELECT * FROM `service_request_accepted`,service_request_respon,motorist 
				WHERE service_request_respon.mechanicid =$ref_id
				 && service_request_respon.serve_post_respid =service_request_accepted.serve_post_respid 
				 && service_request_accepted.motoristid = motorist.motoristid 
				 order by date DESC";
			// echo $sql; die;
				try{
					$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function AddPayment($ref_id)
		{
			$ok;
				$sql="UPDATE service_request_accepted SET paid = '1' 
				WHERE sra_id=$ref_id";
				try{
					$stmt=$this->conn->prepare($sql);
					$ok=$stmt->execute();
				}catch(PDOException $e){ echo $e->getMessage();}
				return $ok;
		}
		function Notification3($ref_id)
		{
			$rows;
				$sql="SELECT * FROM `service_request_accepted`,service_request_respon 
				WHERE  service_request_respon.mechanicid =$ref_id 
				&& service_request_respon.serve_post_respid =service_request_accepted.serve_post_respid 
				&& service_request_accepted.notification='unread'
				order by date";
				
				try{
					$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetchAll(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function getSRRbyID($ref_id)
		{
			$sql = "SELECT * FROM service_request_respon,mechanic ,service_request WHERE serve_post_respid = $ref_id && service_request_respon.mechanicid = mechanic.mechanicid && service_request.servreqid = service_request_respon.servreqid";
			try{
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $row;
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
				// echo $sql;  die;
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
				// echo $sql; die;
			
				try{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute(array($ref_id));
				$row = $stmt->fetch(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
				return $row;
			   // $this->conn = null;
			}
		function getSRAbyId($ref_id)
		{
			$sql = "SELECT * FROM `service_request_accepted`,motorist
			 WHERE service_request_accepted.motoristid = motorist.motoristid 
			 && service_request_accepted.sra_id = $ref_id";
			// echo $sql; die;
		
			try{
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
		}catch(PDOException $e){ echo $e->getMessage();}
			return $row;
		   // $this->conn = null;
		}
		
		function getByIdSRR($ref_id)
		{
			$sql = "SELECT * FROM mechanic,service_request,`service_request_accepted`,service_request_respon 
			WHERE service_request_respon.serve_post_respid = service_request_accepted.serve_post_respid 
			&&service_request_respon.mechanicid =$ref_id  
			 && service_request.servreqid = service_request_respon.servreqid 
			&& service_request_accepted.status =1 
			&& mechanic.mechanicid = service_request_respon.mechanicid ";
				try{
				$stmt = $this->conn->prepare($sql);
				$stmt->execute();
				$row = $stmt->fetchall(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $row;
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
		function getMechanicByID($ref_id)
		{
			$rows;
			$sql="SELECT * FROM mechanic where mechanicid =$ref_id";
			try{
				$stmt=$this->conn->prepare($sql);
				$stmt->execute();
				$rows=$stmt->fetch(PDO::FETCH_ASSOC);
			}catch(PDOException $e){ echo $e->getMessage();}
			return $rows;
		}
		function updateServiceRequest($serve_post_respid)
		{
		
			$sql="UPDATE `service_request_respon`,service_request 
			SET service_request.service_status= 'On-going' 
			WHERE service_request.servreqid = service_request_respon.servreqid
			 && service_request_respon.serve_post_respid =$serve_post_respid";
			//  echo $sql; die;
		
			try{
				$stmt=$this->conn->prepare($sql);
				$ok=$stmt->execute();
			}catch(PDOException $e){ echo $e->getMessage();}
			return $ok;
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
						// echo $sql; die;
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
	}//end of classsaddasgi
?>