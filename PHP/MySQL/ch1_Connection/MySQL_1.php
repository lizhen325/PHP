<?php
	//connect to mysql
	$conn = @mysql_connect("localhost","root","") or die("disconnected".mysql_error());
	//select database which name is newdb
	mysql_select_db("newdb",$conn) or die("no exist database".mysql_error());
	
	//select table
	$sql="SELECT *FROM test";
	// perform a query on the database
	$query=mysql_query($sql,$conn);
	
	//fetch_row to display 
	while($row=mysql_fetch_row($query))
	{
		echo $row[0].$row[1].$row[2].$row[3]."<br/>";
	}
	
	echo mysql_num_rows($query);
?>