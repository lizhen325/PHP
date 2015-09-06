<?php

?>
<script type="text/javascript">
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
/*
function check()
{
	//creat AJAX
	myxmlHttpRequest=getXmlHttpObject();
	if(myxmlHttpRequest)
	{
		var url="/my portable files/registerProcess.php?mytime="+ new Date() +"&username="+$('username').value;
		//var url="/my portable files/registerProcess.php?username="+$('username').value;
		//window.alert(url);
		
		//open request using get method
		myxmlHttpRequest.open("get",url,true);
		
		myxmlHttpRequest.onreadystatechange=conduct;
		
		//send request
		myxmlHttpRequest.send(null); //if get request, send(null)
	}
}
*/
function check()
{
	//creat AJAX
	myxmlHttpRequest=getXmlHttpObject();
	if(myxmlHttpRequest)
	{
		var url="/my portable files/registerProcess.php";
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
<form action="" name="">
ID: <input type="text" onkeyup="check()" name="username" id="username">
 <input type="button" onclick="check();" value="Confirm">
 <input style="border-width: 0; color: red" type="text" id="myres">
<br/>
PW: <input type="password" name="password" id="password"><br/>
E-Mail <input type="text" id="email"><br/>
<input type="submit" value="Register" >
</form>