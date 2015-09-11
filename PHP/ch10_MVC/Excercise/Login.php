<form action="LoginProcess.php" method="post">
<table>
<tr>
<td><center>Admistor Login<center></td>
</tr>
<tr>
<td>ID:<input type="text" name="id" style="margin-left: 55px"></td>
</tr>
<tr>
<td>Password: <input type="password" name="password"></td>
</tr>
<tr>
<td><input type="submit" value="Login"><td>
<td><input type="reset" value="reset"><td>
</tr>
</table>
</form>
<?php
	if(!empty($_GET['errno'])){
		$error=$_GET['errno'];
		if($error==1)
		echo "<font color=red>ID or password is incorrect please try again</font>";
	}
?>