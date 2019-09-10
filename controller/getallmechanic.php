<?php
	///mechanic controller
	include('C:/xampp/htdocs/mechwarrior/model/mechanic.php');
	$mechanic=new Mechanic();
	$row=$mechanic->getAllMechanic();
	//echo json_encode(array('user'=>$row));
	
	function getAll(){
		global $row;
		return $row;
	}
	
?>