<?php
	require_once "Employ_Service.php";
	$empService=new ems();
	if(!empty($_REQUEST['flag']))
	{
		$flag=$_REQUEST['flag'];
		if($flag=="del")
		{
			$id=$_REQUEST['id'];
			if($empService->DeleteEmpById($id)==1)
			{
				header("Location: ok.php");
				exit();
			}
			else
			{
				header("Location: error.php");
				exit();
			}
		}
		else if($flag=="addemp")
		{
			$name=$_POST['username'];
			$email=$_POST['email'];
			$level=$_POST['level'];
			$salaly=$_POST['saraly'];
			
			if($empService->AddEmp($name,$email,$level,$salaly)==1)
			{
				header("Location: ok.php");
				exit();
			}
			else
			{
				header("Location: error.php");
				exit();
			}
		}
		else if($flag=="updateemp")
		{
			$id=$_POST['id'];
			$name=$_POST['username'];
			$email=$_POST['email'];
			$level=$_POST['level'];
			$salaly=$_POST['saraly'];
			if($empService->UpdateEmp($id,$name,$email,$level,$salaly)==1)
			{
				header("Location: ok.php");
				exit();
			}
			else
			{
				header("Location: error.php");
				exit();
			}
		}
		else if($flag=="search")
		{
			
		}
	}
	
?>	