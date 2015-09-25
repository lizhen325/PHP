<title>Members List</title>
<h1>Members List</h1>
<?php
	require_once 'mysql.php';
	
	$mysql=new mysql();
	$sql="select * from members";
	
	$res=$mysql->query($sql);
	echo "<table border=1 width='700px' cellspacing='0px' bordercolor='blue'>";
		echo "<tr><th>Username</th><th>Scores</th>";
	while($row=mysql_fetch_assoc($res))
	{
		echo "<tr><td>{$row['name']}</td><td>{$row['score']}</td></tr>";
	}
		echo"</table>";
	$mysql->close();
?>
<br/>
<a href="loggedin.php"><button type="button">Back</button></a>
