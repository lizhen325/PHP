<?php
function rs($mode,$string)
{
	if(preg_match($mode,$string,$arr))
	{
		echo "matched: ".$arr[0];
	}
	else
		echo "no match";
}
//i		makes the regex case insensitive
rs("/[a-z]/i","B");		//B
echo "<br/>";
//m		"multi-line mode"
rs("/^aaa/","000\naaaddd");		//no match
echo"<br/>";
rs("/^aaa/m","000\naaaddd");	//aaa
echo "<br/>";
//s		makes dot match all characters, including line breaks
rs("/444(.*)222/","444000\n333000\n22200");
echo "<br/>";
rs("/444(.*)222/s","444000\n333000\n22200");
echo "<br/>";
//x 	turn on free-spacing mode
rs("/333/","444433332222");		//333
echo "<br/>";
rs("/33 3/","444433332222");	//no match
echo "<br/>";
rs("/33 3/x","444433332222");	//333
echo"<br/>";
//A 	match from beginning
rs("/^aaa/m","000\naaaddd");	//333
echo"<br/>";
rs("/^aaa/A","000\naaaddd");	//no match
echo("<br/>");
//D 	makes dot,caret,and dollar treat only newline
rs("/200$/","000aaaddd200\n");	//200
echo("<br/>");
rs("/200$/D","000aaaddd200\n");	//no match
echo("<br/>");
//U		ungreedy mode, which switches the syntax for greedy and lazy quantifilers
rs("/<(.*)>/","<b>sss</b>ppppp");	//sss
echo("<br/>");
rs("/<(.*)>/U","<b>sss</b>ppppp");	//matched	the first > end so cannot display
echo("<br/>");
?>