<html>
<head><title>My looping statements</title></head>
<?php

$fuel = 10;

/*
//while loop (if condition is met, it executes the code
while ($fuel>1)
{
	echo "There's enough fuel!";
	--$fuel;
}
*/



/*
//do...while (execute first then checks condition)
$count = 1;
do
	echo "$count times 12 id ". $count*12 . "<br>";
while(++$count<=12);
*/



/* 
do
{
	echo "There's enough fuel! <br>";
}
while(--$fuel>1)
*/



/*
//for loop (if conditions are met, it'll execute code)
for($fuel=10; $fuel>=1; --$fuel)
{
	echo "There's enough fuel <br>";
}
*/


/*
//foreach (relies on array)
$colors = array("red","green","blue");
foreach($colors as $value)
{
		echo "$value <br>";
}
*/


/*
//break statement (stops when condition is met)
for($x=0; $x<10; $x++)
{
		if($x==4)
		{
			echo "The number is $x <br>";
			break;
		}
}
*/


/*
//continue (skips value when specific condition is met)
for($x=0; $x<10; $x++)
{
		if($x==4)
		{
			continue;
		}
	echo "The number is $x <br>";
}
*/

//Let's Try
for($x=9; $x>2; $x--)
{
	echo "$x <br>";
}

?>
</html>