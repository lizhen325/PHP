<?php
	include("conn.php");

$sql="SELECT *FROM info";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
	//echo $row[1]."<br/>";
?>
<table style="width:400px;border:1px solid black">
<tr>
<td><?=$row[0]?></td>
<td>Name: <?=$row[1]?></td>
<td>Company: <?=$row[2]?></td>
</tr>
<tr>
<td colspan="1">Salary: <?=$row[3]?><td>
</tr>
</table>
<?php
}
?>