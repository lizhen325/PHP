<?php
	require_once('mysql.php');
	$update=$_POST['text'];
	if($update=="")
	{
		header("Location: Edit_Profile.php");
	}
	else
	{
	$mysql=new mysql();
	$array=array('text'=>$update);
	if($mysql->update($array,"profiles","name='a2user'"))
	{
		header("Location: loggedin.php");
	}
	else
	{
		echo "fail!!";
	}
	$mysql->close();
	}
	
?>