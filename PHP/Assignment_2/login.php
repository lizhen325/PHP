<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
<div class="style1">

<!--<span style="font-size: 150px; color: red; font-style: italic;">Quiz</span>-->
<img src="/my portable files/a2/image/2.jpg" style="height: 300px; ">
<!--<span style="font-size: 150px; color: red; font-style: italic;">Fun</span>-->
</div>
<center>
<div class="style2">QuizTime(Guest)</div>
</center>
<div class="style3">
<table>
<tr>
<td><a href="main.html"><button type="button">Home</button></a></td>
<td><a href="sign1_up.php"><button type="button">Sign Up</button></a></td>
<td><a href="login.php"><button type="button">Log In</button></a></td>
</tr>
</table>
</div>
<center>
<span class="style4">=> you must be logged in to view his page.</span>
</center>
<br/>
<br/>
<br/>
<br/>
<center>
<span class="style5">Welcome to QuizeTime, Please sign up and/or log in to join in</span>
</center>
<table class="style6">
<form action="login_proess.php" method="post">
<tr>
<td>Username: <input type="text" name="username"></td>
 </tr>
<tr>
<td>Password: <input type="password" name="password" style="margin-left: 3px;"></td>
</tr>
<tr>
<td><input type="submit" value="Log In"></td>
</tr>
</table>
</form>
<a href="sign1_up.php" style="margin-left: 600px;"><button type="button">Sign Up</button></a>
<br/>
</body>
</html>
<?php
	if(!empty($_GET['errno'])){
		$error=$_GET['errno'];
		if($error==1)
		echo "<font color='red' style='margin-left: 600px;' >ID or password is incorrect please try again</font>";
	}
?>