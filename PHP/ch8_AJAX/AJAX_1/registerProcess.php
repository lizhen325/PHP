<?php

	header("Cache-Control:no cache");
	// respond request
	$username=$_POST['username'];
	if($username=="lizhen")
	{
		echo "try another";
	}
	else
		echo "ok";
	
?>