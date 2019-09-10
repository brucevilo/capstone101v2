<?php
	///user controller
	include('../model/user.php');
	$user=new User();
	$row=$user->getAllUser();
	
	
?>