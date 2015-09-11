<?php

?>
<h1>Add Empolyee</h1>
<form action="empProcess.php" method="post">
<table>
<tr><td>Name: <input type="text" name="username" style="margin-left: 15px"/></td></tr>
<tr><td>Level: <input type="text" name="level" style="margin-left: 8px"/></td></tr>
<tr><td>Email: <input type="text" name="email" style="margin-left: 8px"/></td></tr>
<tr><td>Salary: <input type="text" name="saraly"/></td></tr>
<input type="hidden" name="flag" value="addemp"/>
<tr><td><input type="submit" value="add"></td></tr>
</table>
</form>