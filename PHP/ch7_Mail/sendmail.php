<?php

	require_once "email.class.php";
	
	$smtpserver = "smtp.gmail.com";//SMTP server
	$smtpserverport =25;//SMTP·port
	$smtpusermail = "zhenli336@gmail.com";//SMTP server
	$smtpemailto = $_POST['toemail'];//·send to 
	$smtpuser = "zhenli336";//STMP sever user ID
	$smtppass = "flwls3250";//SMTP server user password
	$mailtitle = $_POST['title'];//title
	$mailcontent = "<h1>".$_POST['content']."</h1>";//message
	$mailtype = "HTML";//mailtype HTML/TXT
	
	$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);
	
	$smtp->debug = false;//
	$state = $smtp->sendmail($smtpemailto, $smtpusermail, $mailtitle, $mailcontent, $mailtype);

	echo "<div style='width:300px; margin:36px auto;'>";
	if($state==""){
		echo "Sorry Please check";
		echo "<a href='index.html'>return</a>";
		exit();
	}
	echo "Sent";
	echo "<a href='index.html'>return</a>";
	echo "</div>";

?>