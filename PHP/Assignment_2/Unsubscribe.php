<head>
<script lang="javascript">
window.onload=function()
{
	var oRemove = document.getElementById('remove');
    oRemove.onclick = function (e) {
        if (!confirm('Are you sure delete from database?')) e.preventDefault();
    };
    for (var i = 0, l = elems.length; i < l; i++) {
        elems[i].addEventListener('click', confirmIt, false);
    }
}
</script>
</head>
<a href="Unsubscribe_Process.php" id="remove"><button type="button">Remove</button></a>
<a href="loggedin.php"><button type="button">Home</button></a>