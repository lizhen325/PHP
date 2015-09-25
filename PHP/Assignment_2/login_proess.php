<?php

	require_once 'login_service.php';	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$adminService=new AdminService();
	if($adminService->checkAdmin($username,$password))
	{
		header("Location: loggedin.php");
		exit();
	}
	else
	{
		header("Location: login.php?errno=1");
		exit();
	}
	
?>