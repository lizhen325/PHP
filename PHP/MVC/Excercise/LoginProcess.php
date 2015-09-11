<?php
	require_once 'Admin_Service.php';
	$id=$_POST['id'];
	$password=$_POST['password'];
	
	//create adminservice
	$adminService=new AdminService();
	if($adminService->checkAdmin($id,$password))
	{
		header("Location: empManage.php");
		exit();
	}
	else
	{
		header("Location: Login.php?errno=1");
		exit();
	}
	
?>
