<?php
	include("conn.php");

$sql="SELECT *FROM information";
$query=mysql_query($sql);
while($row=mysql_fetch_array($query))
{
	//echo $row[1]."<br/>";
?>
<table style="width:400px;border:1px solid black">
<tr>
<td>ID: <?=$row[0]?></td>
<td>Title: <?=$row[1]?></td>
</tr>
<tr>
<td colspan="1">Content: <?=$row[2]?><td>
</tr>
</table>
<?php
}
?>