<?php
//download file function
//the first argument is file name
//the second argument is document path /xxx/xxx/
function down_file($file_name,$file_sub_dir)
{
	//$file_name="2.jpg";
	$file_sub_path=$SERVER['DOCUMENT_ROOT'].$file_sub_dir; 	//"my portable files/down/"
	$file_path=$file_sub_path.$file_name;
	
	if(file_exists($file_path))
	{
		echo"no file";
		return;
	}
	$fp=fopen($file_path,"r");
	$file_size=filesize($file_path);
	header("Content-type: application/octet-stream");
	header("Accept-Ranges: bytes");
	header("Accept-Length: $file_size");
	header("Content-Disposition: attachment; filename=".$file_name);
	$buffer=1024;
	$file_count=0;
	while(!feof($fp)&&$file_count<$file_size)
	{
	$file_data=fread($fp,$buffer);
	$file_count+=$buffer;
	echo $file_data;
	}
	fclose($fp);
}
down_file("2.jpg","my portable files/down/");
?>