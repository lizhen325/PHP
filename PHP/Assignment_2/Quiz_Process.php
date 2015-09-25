<?php
	static $right=0;
	static $wrong=0;
	static $miss=0;
	static $score=0;
	/////////problem
	if(isset($_POST['problem']))
	{
		$answer=$_POST['problem'];
		if($answer=="right")
		{
			$right++;
			$score+=20;
		}
		else if($answer=="wrong")
		{
			$wrong++;
		}
	}
	else
	{
		$miss++;
	}
	///////problem1
	if(isset($_POST['problem1']))
	{
		$answer=$_POST['problem1'];
		if($answer=="right")
		{
			$right++;
			$score+=20;
		}
		else if($answer=="wrong")
		{
			$wrong++;
		}
	}
	else
	{
		$miss++;
	}
	/////////problem
	if(isset($_POST['problem2']))
	{
		$answer=$_POST['problem2'];
		if($answer=="right")
		{
			$right++;
			$score+=20;
		}
		else if($answer=="wrong")
		{
			$wrong++;
		}
	}
	else
	{
		$miss++;
	}
	///////problem1
	if(isset($_POST['problem3']))
	{
		$answer=$_POST['problem3'];
		if($answer=="right")
		{
			$right++;
			$score+=20;
		}
		else if($answer=="wrong")
		{
			$wrong++;
		}
	}
	else
	{
		$miss++;
	}
	/////////problem
	if(isset($_POST['problem4']))
	{
		$answer=$_POST['problem4'];
		if($answer=="right")
		{
			$right++;
			$score+=20;
		}
		else if($answer=="wrong")
		{
			$wrong++;
		}
	}
	else
	{
		$miss++;
	}
	///////problem6
	if(isset($_POST['problem5']))
	{
		$answer=$_POST['problem5'];
		if($answer=="right")
		{
			$right++;
			$score+=20;
		}
		else if($answer=="wrong")
		{
			$wrong++;
		}
	}
	else
	{
		$miss++;
	}
	$number_of_problems=$right+$wrong+$miss;
	echo $number_of_problems." problems<br/>";
	echo "Your Score is: ".$score."<br/>";
	if($score==100)
	{
		echo "<font color=red>Perfect, Well Done!</font>";
	}
	else if($score>=80 && $score < 100)
	{
		echo "<font color=red>Almost! Study a little more</font>";
	}
	else if($score>=60 && $score<80)
	{
		echo "<font color=red>Not Bad, Keep!!</font>";
	}
	else
	{
		echo "<font color=red>You need to study hard!!</font>";
	}
	echo "<br/>right answer: ".$right;
	echo "<br/>wrong answer: ".$wrong;
	echo "<br/>missed answer: ".$miss;
	
	include_once('mysql.php');
	$mysql=new mysql();
	$sql="select * from members";
	$array=array('score'=>$score);
	$mysql->update($array,"members","name='a2user'")
?>
<br/>
<a href="Quiz.php"><button type="button">Try Again!!!</button></a>
<a href="loggedin.php"><button type="button">Home</button></a>