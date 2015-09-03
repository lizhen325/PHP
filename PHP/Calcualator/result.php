<?php
$num1=$_REQUEST['num1'];
$num2=$_REQUEST['num2'];
$oper=$_REQUEST['oper'];
if($oper=="+")
echo "result:".($num1+$num2);
else if($oper=="-")
echo "result:".($num1-$num2);
else if($oper=="/")
echo "result:".($num1/$num2);
else if($oper="*")
echo "result:".($num1*$num2);
?>
<br/><a href="calculator.php">return</a>