<?php
	require_once('mysql.php');
	echo "Remove Success";
	$mysql=new mysql();
	$mysql->delete("members","name='lizhen'");
	$mysql->close();
	
?>