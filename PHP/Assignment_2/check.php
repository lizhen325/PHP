<?php
		require_once 'mysql.php';
		header("Cache-Control:no cache");
		$username=$_POST['username'];;
		// respond request
		$sql="select name from members";
				// create sqlHelper object
		$Mysql=new mysql();
			
		$res=$Mysql->query($sql);
		while($row=mysql_fetch_assoc($res))
		{
			if($username==$row['name'])
			{
				echo "username exist";
			}
			else
			{
				echo "OK!!";
				
			}
		}
		mysql_free_result($res);
		$Mysql->close();
?>