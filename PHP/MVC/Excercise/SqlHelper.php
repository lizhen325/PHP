<?php
	class sqlHelper
	{
		public $conn;
		public $dbname="employee";
		public $username="root";
		public $password="";
		public $host="localhost";
		//constructor connect database
		public function __construct()
		{
			$this->conn=mysql_connect($this->host,$this->username,$this->password);
			if(!$this->conn)
				die("disconnected".mysql_error());
				mysql_select_db($this->dbname,$this->conn) or die("there is no database".mysql_error());
			
		}
		//mysql_query function
		public function execute_dql($sql)
		{
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			return $res;
		}
		public function execute_dql2($sql)
		{
			$i=0;
			$arr=array();
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			while($row=mysql_fetch_array($res))
			{
				$arr[$i++]=$row;
			}
			mysql_free_result($res);
			return $arr;
		}
		
		public function execute_paging($sql1,$sql2,&$paging)
		{
			$res=mysql_query($sql1,$this->conn) or die(mysql_error());
			$arr=array();
			while($row=mysql_fetch_assoc($res))
			{
				$arr[]=$row;
			}
			mysql_free_result($res);
			$res2=mysql_query($sql2,$this->conn) or die(mysql_error());
			if($row=mysql_fetch_row($res2))
			{
				$paging->pageCount=ceil($row[0]/$paging->pageSize);
				$paging->rowCount=$row[0];
			}
			mysql_free_result($res2);
			
			$navigate="";
			if($paging->pageNow>1)
			{
				$prePage=$paging->pageNow-1;
				$navigate="<a href='{$paging->gotourl}?pageNow=$prePage'>pre</a>&nbsp;";
			}
			if($paging->pageNow < $paging->pageCount)
			{
				$nextPage=$paging->pageNow+1;
				$navigate.="<a href='{$paging->gotourl}?pageNow=$nextPage'>next</a>&nbsp;";
			}
			$page_whole=10;
			$start=floor(($paging->pageNow-1)/$page_whole)*$page_whole+1;
			$index=$start;
			if($paging->pageNow>10)
			{
				$navigate.="&nbsp;<a href='{$paging->gotourl}?pageNow=".($start-1)."'> << </a>";
			}
		
			for (; $start<$index+10; $start++)
			{
				$navigate.="<a href='{$paging->gotourl}?pageNow=$start'>[$start]</a>";
			}
				$navigate.="&nbsp;<a href='{$paging->gotourl}?pageNow=$start'> >> </a>";
				$navigate.="Current $paging->pageNow page/$paging->pageCount pages";
			
			$paging->res_array=$arr;
			$paging->navigate=$navigate;
			
			
		}
		
		public function execute_dml($sql)
		{
			$b=mysql_query($sql,$this->conn);
			if(!$b)
			return 0;
			else{
				if(mysql_affected_rows($this->conn)>0)
				{
					return 1;
				}
				else
				{
					return 2;
				}
			}
		}
		
		//close mysql function
		public function close()
		{
			if(!empty($this->conn))
				mysql_close($this->conn);
		}
	}
?>