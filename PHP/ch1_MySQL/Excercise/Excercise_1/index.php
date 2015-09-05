<?php
	include("conn.php");
	if(isset($_POST['submit']))
	{
	$sql="insert into information(id,title,content) values ('$_POST[user]','$_POST[title]','$_POST[text]')";
	mysql_query("$sql");
	echo "success";
	}
?>
<script lang="javascript">
function checkpost()
{
	var myform=document.getElementById("form");
	if(myform.user.value=="")
	{
		alert("need id");
		myform.user.focust();
		return false;
	}
	if(myform.title.value.length < 5)
	{
		alert("title musbe be larger than 5");
		myform.title.focus();
		return false;
	}
}
</script>

<a href="display.php" name="show">Show</a>

<form action="test.php" method="post" id="form" onsubmit="return checkpost();">
ID: <input type="text" style="margin-left:45px" name="user"/><br/>
Title: <input type="text" style="margin-left:20px" name="title"/><br/>
Content: <textarea style="height:200px; width:200px;" name="text"></textarea><br/><br/>
<input type="submit" value="submit" name="submit"/>
</form>
