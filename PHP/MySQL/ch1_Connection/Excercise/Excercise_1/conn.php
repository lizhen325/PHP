<?php
	//connect to database
	$conn=mysql_connect("localhost","root","")or die("disconnect".mysql_error());
	//select database
	mysql_select_db("information",$conn)or die("no exist database").mysql_error();
	
	//mysql_query("set names 'GBK'");
?>