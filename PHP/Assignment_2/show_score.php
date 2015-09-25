<?php
	require_once('mysql.php');
	$mysql=new mysql();
	$sql="select * from members";
	$res=$mysql->query($sql);
	while($row=mysql_fetch_assoc($res))
	{
		echo"your score is: ".$row['score'];
	}
	$mysql->close();
?>
<br/>
<a href="loggedin.php"><button type="button">Home</button></a>