<?php
	require_once('mysql.php');
	$mysql=new mysql();
	$sql="select * from profiles";
	$res=$mysql->query($sql);
	while($row=mysql_fetch_assoc($res))
	{
		echo $row['text'];
	}
	
?>