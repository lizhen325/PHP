<?php
	include ('MySQL_Class.php');
	$db=new mysql("localhost","root","","account");
	if(isset($_GET['key']))
	{
		//$k=explode(" ",$_GET[key]);
		// $sql="SELECT * FROM info WHERE company like '%$k[0]%' or company lie '$k[1]'";
		$sql="SELECT * FROM info WHERE company like '%$_GET[key]%'";
		//echo $sql;
		$q=$db->query($sql);
		while($row=mysql_fetch_array($q))
		{
			$row['company']=preg_replace("/($_GET[key])/i","<font color=red>\\1</font>",$row['company']);
			echo $row['company']."<br/>";
		}
		
	}
?>
<form action="" method="get">
Keyword: <input type="text" name="key"/>
<input type="submit" name="search" value="search">
</form>