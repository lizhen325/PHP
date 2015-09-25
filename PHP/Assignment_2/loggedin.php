<?php
	require_once('mysql.php');
	$mysql=new mysql();
	$sql="select * from profiles";
	$res=$mysql->query($sql);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>Welcome to Quiz Fun</title>
<link rel="stylesheet" type="text/css" href="my.css">
<meta name="" content="">
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
<td><a href="members.php"><button type="button">Members</button></a></td>
<td><a href="Quiz.php"><button type="button">Quiz</button></a></td>
<td><a href="Edit_Profile.php"><button type="button">Edit Profile</button></a></td>
<td><a href="Unsubscribe.php"><button type="button">Unsubscribe</button></a></td>
<td><a href="main.html"><button type="button">Log Out</button></a></td>
</tr>
</table>
</div>
<center>
<span class="style4">your Profile:
	<?php
		while($row=mysql_fetch_assoc($res))
		{
			echo $row['text'];
		}
	?>
</span>
</center>
<br/>
<br/>
<br/>
<br/>
<center>
<span class="style5"><a href="show_score.php"><input type="button" value="Show My Score"></a></span>
</center>
</form>
</body>
</html>