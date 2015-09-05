<?php
//open File.html
$fp=fopen("File.html","r");
//read File.html
$str=fread($fp,filesize("File.html"));

//change content to This is a new html file.
$str=str_replace("{Content}",'This is a new html file',$str);
//close file
fclose($fp);

// open a blank new html for writing
$handle=fopen('news.html',"w");
//write the $str which is this is a new html file
fwrite($handle,$str);
//close file
fclose($handle);
//done
?>

<a href="news.html">Change Content</a>