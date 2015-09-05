<?php

function match($mode,$str)
{
if(preg_match($mode,$str,$arr))
{
	echo "match: ".$arr[0];
}
else
	echo "no match ";
}

match("/ab/","asdfasdfabc");	//ab
echo "<br/>";
match("/[^98]/","8dfasdfabc9");	//d
echo "<br/>";
match("(abc)","asdfabasdf");	//no match
echo "<br/>";
match("/\d/","asdf27a8sdf01");	//2
echo "<br/>";
match("/\W/","asd@f27a8sdf01");	//@
echo "<br/>";
match("/\s/","asdf27a
8sdf01");						//match
?>