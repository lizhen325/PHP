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

// *	0 or more quantifier of previous element
rs("/go*gle/","google");	//google
echo "<br/>";
rs("/go*gle/","ggle");		//ggle
echo "<br/>";
//+		1 or more quantifier of previous element
rs("/go+gle/","ggle");		//no match
echo "<br/>";
rs("/go+gle/","gooooooooogle");
echo "<br/>";
//?		0 or 1 quantifier of previous element
rs("/go?gle/","ggle");	//ggle
echo "<br/>";
rs("/go?gle/","google");	//no match
//^		//assert start of subject
echo "<br/>";
rs("/^google/","asfdgoogle");	//no match()
echo "<br/>";
//$		//assert end of subject or before a terminating newline
rs("/^google/","googleasdfasd");	//google
echo "<br/>";
rs("/google$/","asdfasdfgoogle");	//google
//\b		//word boundary
echo ("<br/>");
rs("/\bis\b/","whatis");			// no match
echo ("<br/>");
rs("/\bis\b/","what is");			//is
echo ("<br/>");
rs("/\bis\b/","what isasdf");		//no match
//{m}		//repeat m times
echo ("<br/>");
rs("/goo{1}le/","google");			//no match
echo ("<br/>");
rs("/go{2}gle/","google");			//google
echo ("<br/>");
rs("/go{2,}gle/","goooooooooogle");	//goooooooooogle
echo "<br/>";
//example of date 
rs("/[0-9]{2,4}(.*)[0-9]{1,2}(.*)[0-9]{1,2}/","2009-02-15");
?>