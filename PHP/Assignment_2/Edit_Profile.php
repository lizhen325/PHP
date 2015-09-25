<title>Edit Profile</title>
<head>
<script lang="javascript">
window.onload=function()
{
	var oSubmit=document.getElementById('submit');
	var oText=document.getElementById('text1');
	oSubmit.onclick=function()
	{
		if(oText.value=="")
		{
			alert("cannot submit blank profile");
			window.location.assign('Edit_Profile.php');
		}
	}
}
</script>
</head>
<h1>Edit Profile</h1>
Contents:
<form action="Edit_Profile_Process.php" method="post">
<textarea cols="40" rows="10" name="text" id="text1">
</textarea>
<br/>
<br/>
<input type="submit" value="Edit" id="submit">
</form>