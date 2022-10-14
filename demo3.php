<html>
<head>
<title>My First Webpage</title>
</head>
<body align=center><h1>
<?php
//Equality and Inequality
$a = "1000";
$b = "+1000";
$month = "December";

if($a===$b) echo "a is equal to b <br>";
if($month=="December") echo "It is Christmas time!";

//Comparison Operators
if($a>$b) echo "a is greater than b <br>";
if($a<$b) echo "a is less than b";
echo "<br>";
if($a>=$b) echo "a is greater than or equal to b";
echo "<br>";
if($a<=$b) echo "a is less than or equal to b";

//Logical Operators
$c = 1;
$d = 0;

echo $c AND $d;
echo "<br>";
echo $c OR $d; 
echo "<br>";
echo $c XOR $d;
echo "<br>";

$bank_balance=150;
$savings=100;
if($bank_balance<100)
{
$money=1000;
$bank_balance+=$money;
echo "<br>";
echo "The bank balance is: ".$bank_balance;
}
else
{
$savings+=50;
$bank_balance-=50;
echo "The savings is: ".$savings."<br>";
}

$page = "Web Page";
switch($page)
{
case "Home";
{
echo "You choose Home";
break;
}
case "Login";
{
echo "You choose Login";
break;
}
case "Links";
{
echo "You choose Links";
break;
}
default;
{
echo "None of the Choices are correct";
}
}
$fuel = 1;
echo $fuel<=1? "<br>Fill tank now": "There is enough fuel";



?></h1>
</body>
</html>