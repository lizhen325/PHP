<?php
	require_once 'Employ_Service.php';
	$id=$_GET['id'];
	$empService=new ems();
	$arr=$empService->getEmpById($id);
?>
<h1>Update Empolyee</h1>
<form action="empProcess.php" method="post">
<table>
<tr><td>ID: <input readonly="" type="text" name="id" value="<?php echo $arr[0]['id'] ?>" style="margin-left: 30px"/></td></tr>
<tr><td>Name: <input type="text" name="username" value="<?php echo $arr[0]['username'] ?>" style="margin-left: 15px"/></td></tr>
<tr><td>Level: <input type="text" name="level" value="<?php echo $arr[0]['level'] ?>" style="margin-left: 8px"/></td></tr>
<tr><td>Email: <input type="text" name="email" value="<?php echo $arr[0]['email'] ?>" style="margin-left: 8px"/></td></tr>
<tr><td>Salary: <input type="text" name="saraly" value="<?php echo $arr[0]['saraly'] ?>"/></td></tr>
<input type="hidden" name="flag" value="updateemp"/>
<tr><td><input type="submit" value="update"></td></tr>
</table>
</form>