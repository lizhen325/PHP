<?php
class cat
{
	private $num1;
	private $num2;
	private $oper;
	private $width;
	private $length;
	public function request()
	{
		$this->num1=$_REQUEST['num1'];
		$this->num2=$_REQUEST['num2'];
		$this->oper=$_REQUEST['operator'];
		$this->width=$_REQUEST['width'];
		$this->length=$_REQUEST['length'];
	}
	public function calculator()
	{	
		if($this->oper=="+")
			echo "result:".($this->num1+$this->num2);
		else if($this->oper=="-")
			echo "result:".($this->num1-$this->num2);
		else if($this->oper=="/")
			echo "result:".($this->num1/$this->num2);
		else if($this->oper="*")
			echo "result:".($this->num1*$this->num2);
			
		}
}
	$cat1 = new cat();
	$cat1->request();
	$cat1->calculator();

?>