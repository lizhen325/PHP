<?php
/*
// match all
function rs($mode,$string)
{
	if(preg_match_all($mode,$string,$arr))
	{
		print_r($arr);
	}
	else
		echo "no match";
}
rs("/{(.*)}/U","aks{title}skld{author}dafd{con}a28knsd9");	//display all the matched elements
*/
/*
function rs($mode,$change,$arr)
{
	echo preg_replace($mode,$change,$arr);
}
rs("/{(.*)}/U","Hello","aks{title}skld{author}dafd{con}a28knsd9");	//aksHelloskldHellodafdHelloa28knsd9
echo ("<br/>");

$mode = array("/{title}/","/{name}/","/{occ}/");
$change_to=array("Information","Jin","Student");
$str="Tile:{title}<br/>Name:{name}<br/>Occupation:{occ}";
rs($mode,$change_to,$str);
echo ("<br/>");

//one more example using md5
$str="2222222<font color=red>a</font>333333333322222222";
$mode="/(a)/ie";
echo preg_replace($mode,"md5(\\1)",$str);
*/

//segmentation
$str="aaaaa,ssssss,bbbbb.cccc|eeee";
$mode="/[,.|]/";
$arr=preg_split($mode,$str);
foreach($arr as $key=>$value)
{
	echo $value."<br/>";
}
?>