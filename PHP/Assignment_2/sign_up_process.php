<?php
	require_once 'mysql.php';
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	
	$Mysql=new mysql();

	 $b=$Mysql->insert("members","name,password,score","'$username','$password',100");
	
	if($b)
	{
		header("Location:test.php");
		exit();
	}
	else
	{
		header("sign1_up.php");
		exit();
	}
?>