<!--
	
	mysql class for connecting, updating, and inserting to the database. and print all data in the database. code by Li Zhen
-->
<?php
class mysql
{
	private $username;
	private $password;
	private $hostname;
	private $db_name;
	function __construct($host,$user,$pass,$db)
	{
		$this->hostname=$host;
		$this->password=$pass;
		$this->username=$user;
		$this->db_name=$db;
		$this->connect();
	}
	//connect to database
	public function connect()
	{
		$conn=mysql_connect($this->hostname,$this->username,$this->password)or die("disconnected".mysql_error());
		mysql_select_db($this->db_name,$conn)or die("there is no database".mysql_error());
	}
	//query function
	public function query($sql)
	{
		if(!($query=mysql_query($sql))) $this->show('Says:',$sql);
		return $query;
	}
	//show error
	public function show($message='',$sql='')
	{
		if(!$sql)echo $message;
		else echo $message.'<br>'.$sql;
	}
	//insert into database
	public function fn_insert($table,$name,$value)
	{
		$this->query("INSERT INTO $table ($name) value ($value)");
	}
	
	//print all data in database
	public function fetch_all($sql)
	{
		$result=mysql_query($sql);
		if($result && mysql_num_rows($result)>0)
		{
			while($row=mysql_fetch_array($result))
			{
				for($i=0; $i<mysql_num_fields($result);++$i)
					echo $row[$i]." ";
				echo "<br/>";
			}
		}
	}
	//delete 
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
	//update 
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
}

$db=new mysql("localhost","root","","information");
//$db->fn_insert("information","id,title,content","1280,'Jin','this is my class'");
//$sql="SELECT *FROM information";
//$db->fetch_all($sql);

//$db->delete('information','id=0');
$array=array('title'=>'Kei','content'=>'he is a boss');
$db->update($array,"information","id=9180");
?>