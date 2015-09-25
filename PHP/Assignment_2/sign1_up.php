<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="my.css">
<script type="text/javascript" lang="javascript">
//check broswer and creat AJAX
function getXmlHttpObject()
{
	var xmlHttpRequest;
	if(window.ActiveXObject)
	{
		xmlHttpRequest=new ActiveXObject("Microsoft.XMLHTTP");
	}
	else
	{
		xmlHttpRequest= new XMLHttpRequest();
	}
	return xmlHttpRequest;
}
var myxmlHttpRequest;

function check()
{
	//creat AJAX
	myxmlHttpRequest=getXmlHttpObject();
	if(myxmlHttpRequest)
	{
		var url="/my portable files/a2/check.php";
		var data="username="+$('username').value;
		//var url="/my portable files/registerProcess.php?username="+$('username').value;
		//window.alert(url);
		
		//open request using get method
		myxmlHttpRequest.open("post",url,true);
		myxmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		
		myxmlHttpRequest.onreadystatechange=conduct;
		
		//send request
		myxmlHttpRequest.send(data); //if get request, send(null)
	}
}
function conduct()
{
	//alert("call conduct function"+myxmlHttpRequest.readyState);
	if(myxmlHttpRequest.readyState==4)
	{
		$('myres').value=myxmlHttpRequest.responseText;
	}
}
function $(id)
{
	return document.getElementById(id);
}
</script>
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
<span class="style5">Please enter your details to sign up</span>
</center>
<table class="style6">
<form action="sign_up_process.php" method="post">
<tr>
<td>Username: <input type="text" onkeyup="check()" name="username" id="username">
 <input style="border-width: 0; color: red" type="text" id="myres">
 </td>
 </tr>
<tr>
<td>Password: <input type="password" name="password" style="margin-left: 3px;"></td>
</tr>
<tr>
<td>E-Mail: <input type="text" name="email" style="margin-left: 19px;"></td>
</tr>
<tr>
<td><input type="submit" value="Sgin Up"></td>
</tr>
</table>
</form>
</body>
</html>