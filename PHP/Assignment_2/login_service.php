<?php
require_once 'mysql.php';
	class AdminService
	{
		public function checkAdmin($username,$password)
		{
			$sql="select password from members where name='$username'";
			// create sqlHelper object
			$Mysql=new mysql();
			
			$res=$Mysql->query($sql);
	
			if($row=mysql_fetch_assoc($res))
			{
				if(md5($password)==$row['password'])
					return true;
			}
			mysql_free_result($res);
			$Mysql->close();
			return false;
		}
	}
?>