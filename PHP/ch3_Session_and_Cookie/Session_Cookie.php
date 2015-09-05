<?php
	/*	Cookie
	if(isset($_GET['out']))
	{
		setcookie("id","");
		setcookie("password","");
		echo"<script>location.href='Session_Cookie.php'</script>";
	}
	if(isset($_POST['id'])&&isset($_POST['password']))
	{
		//set cookie
		setcookie("id",$_POST['id'],time()+3600);
		setcookie("pw",md5($_POST['password']));
		echo"<script>location.href='Session_Cookie.php'</script>";
	}
	if(isset($_COOKIE['id'])&& isset($_COOKIE['pw']))
	{
		echo "logged in<br/> ID:".$_COOKIE['id']."<br>pw:".$_COOKIE['pw'];
		echo "<a href='Session_Cookie.php?out=out'>return </a>";
	}
	*/
	
	session_start();
	if(isset($_GET['out']))
	{
		unset($_SESSION['id'],$_SESSION['pw']);
		//echo"<script>location.href='Session_Cookie.php'</script>";
	}
	if(isset($_POST['id'])&&isset($_POST['password']))
	{
		//set session
		$_SESSION['id']=$_POST['id'];
		$_SESSION['pw']=$_POST['password'];
		//echo"<script>location.href='Session_Cookie.php'</script>";
	}
	if(isset($_SESSION['id'])&& isset($_SESSION['pw']))
	{
		echo "logged in<br/> ID:".$_SESSION['id']."<br>pw:".$_SESSION['pw'];
		echo "<a href='Session_Cookie.php?out=out'>return </a>";
	}
?>

<form action="" method="post">
ID:<input type="text" name="id"><br/><br/>
PW:<input type="password" name="password"><br/><br/>
<input type="submit" value="submit">
</form>