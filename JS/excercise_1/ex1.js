function calculate(num1,num2,operator)
{
	var result=0;
	if(operator=="+")
		result=num1+num2;
	else if(operator=="-")
		result=num1-num2
	else if(operator=="*")
		result =num1*num2;
	else
		result=num1/num2;
	return result;
}

function test(val)
{
	window.alert("you typed: "+val);
}

function abc()
{
	window.alert(arguments.length);
}