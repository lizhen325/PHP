<?php
	require_once 'SqlHelper.php';
	class ems
	{
		
		function getPageCount($pageSize)
		{
			$sql="select count(id) from emplyee";
			$sqlHelper=new sqlHelper();
			$res=$sqlHelper->execute_dql($sql);
			
			if($row=mysql_fetch_row($res))
			{
				$pageCount=ceil($row[0]/$pageSize);
			}
			mysql_free_result($res);
			$sqlHelper->close();
			return $pageCount;
			
		}
		function getEmpListByPage($pageNow,$pageSize)
		{
			$sql="select *from emplyee limit ".($pageNow-1)*$pageSize.",$pageSize";
			$sqlHelper=new sqlHelper();
			$res=$sqlHelper->execute_dql2($sql);
			$sqlHelper->close();
			return $res;
			
		}
		function paging($paging)
		{
			$sqlhelper=new sqlHelper();
			$sql1="select * from emplyee limit ".($paging->pageNow-1)*$paging->pageSize.",".$paging->pageSize;
			$sql2="select count(id) from emplyee";
			$sqlhelper->execute_paging($sql1,$sql2,$paging);
		}
		function DeleteEmpById($id)
		{
			$sqlhelper=new sqlHelper();
			$sql="delete from emplyee where id=$id";
			$res=$sqlhelper->execute_dml($sql);
			return $res;
		}
		function AddEmp($name,$email,$level,$salary)
		{
			$sqlhelper=new sqlHelper();
			$sql="insert into emplyee (username,email,level,saraly) values('$name','$email',$level,$salary)";
			$res=$sqlhelper->execute_dml($sql);
			$sqlhelper->close();
			return $res;
		}
		function getEmpById($id)
		{
			$sql="select * from emplyee where id=$id";
			$sqlhelper=new sqlHelper();
			$arr=$sqlhelper->execute_dql2($sql);
			$sqlhelper->close();
			return $arr;
		}
		function UpdateEmp($id,$name,$email,$level,$salary)
		{
			$sqlhelper=new sqlHelper();
			$sql="update emplyee set username='$name' , email='$email' , level=$level , saraly=$salary where id=$id";
			$res=$sqlhelper->execute_dml($sql);
			$sqlhelper->close();
			return $res;
		}
	}
?>