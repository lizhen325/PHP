<?php
	class mysql
	{
		private $host="localhost";
		private $username="root";
		private $password="";
		private $dbname="db339";
		private $conn;
		
		public function __construct()
		{
			$this->connect();
		}
		
		public function connect()
		{
			$this->conn=mysql_connect($this->host,$this->username,$this->password) or die("cannot connect!".mysql_error());
			mysql_select_db($this->dbname,$this->conn)or die("cannot find the database".mysql_error());
		}
		
		public function query($sql)
		{
			$res=mysql_query($sql)or die(mysql_error());
			return $res;
		}
		
		public function insert($table,$name,$value)
		{
			$insert=$this->query("INSERT INTO $table ($name) value ($value)");
			return $insert;
		}
	
		public function update($array,$table,$where=null)
		{
		foreach($array as $key=>$val)
		{
			$sets=$key."='".$val."',";
		}
		$sets=rtrim($sets,',');	//remove comma in the last of SQL
		if($where==null)
		{
			$where="";
		}
		else
			$where="WHERE ".$where;
		$sql="UPDATE $table SET $sets $where";
		$result=mysql_query($sql);
		if($result)
			return mysql_affected_rows();
		else
			return false;
		}
	
		public function delete($table,$where=null)
		{
			if($where==null)
			{
				$where="";
			}
			else
				$where="WHERE ".$where;
			$sql="DELETE FROM $table $where";
			$result=mysql_query($sql);
			if($result)
				return mysql_affected_rows();
			else
				return false;
			}
		
		public function close()
		{
			if(!empty($this->conn))
				return mysql_close($this->conn);
			else
				return false;
		}
		
	}
?>