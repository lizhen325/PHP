function multiple_list(num1)
{
	for(var i=1;i<=num1;++i)
	{
		for(var j=1;j<=i;++j)
		{
			document.writeln(+i);
			document.writeln("*");
			document.writeln(+j);
			document.writeln("="+i*+j);
		}
		document.writeln("<br/>");
	}
}