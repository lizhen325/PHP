<?php
include("conn.php");

if(isset($_POST['submit']))
{
	$sql="insert into info(id,name,company,salary) values ('','$_POST[user]','$_POST[company]','$_POST[salary]')";
	mysql_query("$sql");
	echo "success";
}
?>

<form action="add.php" method="post">
Name: <input type="text" style="margin-left:26px" name="user"/><br/>
Compnay: <input type="text" style="margin-left:2px" name="company"/><br/>
Salary: <input type="text" style="margin-left:10px" name="salary"/><br/>
<input type="submit" value="submit" name="submit"/>
</form>