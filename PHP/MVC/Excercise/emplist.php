<?php

	require_once 'Employ_Service.php';
	require_once 'paging.php';
	$empService=new ems();
	if(!empty($_GET['flag']))
	{
		$id=$_GET['id'];
		$empService->DeleteEmpById($id);
	}
	
	$paging=new paging();
	$paging->pageNow=1;
	$paging->pageSize=3;
	$paging->gotourl="emplist.php";
	
	//$pageSize=3;	//how many pages do you need
	//$pageNow=1;
	if(!empty($_GET['pageNow']))
	{
	$paging->pageNow=$_GET['pageNow'];
	}
	
	$empService->paging($paging);
	
	echo "<table border=1 width='700px' cellspacing='0px' bordercolor='blue'>";
		echo "<tr><th>id</th><th>username</th><th>email</th><th>lvel</th><th>salary</th><th>remove user</th><th>add user</th>/tr>";
		
	for ($i=0; $i<count($paging->res_array);$i++)
	{
		$row=$paging->res_array[$i];
		echo "<tr><td>{$row['id']}</td><td>{$row['username']}</td><td>{$row['email']}</td><td>{$row['level']}</td><td>{$row['saraly']}</td><td><a onclick='return confirmDelet({$row['id']})' href='empProcess.php?flag=del&id={$row['id']}'>remove</a></td><td><a href='update.php?id={$row['id']}'>update</a></td></tr>";
	}
	echo "</table>";
	
	echo $paging->navigate;
	
	
	?>
	<form action="emplist.php" method="get">
	Page: <input type="text"  name="pageNow">
	<input type="submit" onclick=error() value="go">
	</form>
	<script lang="javascript" type="text/javascript">
		function confirmDelet(val)
		{
			return window.confirm("Are you sure delete ID="+val+"user ?");
		}
	</script>