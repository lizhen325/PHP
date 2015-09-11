<?php
	
	require_once 'SqlHelper.php';
	class AdminService
	{
		public function checkAdmin($id,$password)
		{
			$sql="select password,name from admin where id=$id";
			// create sqlHelper object
			$sqlHelper=new sqlHelper();
			$res=$sqlHelper->execute_dql($sql);
			if($row=mysql_fetch_assoc($res))
			{
				if($password==$row['password'])
				{
					return true;
				}
			}
			mysql_free_result($res);
			$sqlHelper->close();
			return false;
		}
	}
?>