<html>
<head><title>My Web Page</title></head>
<body>
<?php
$content = "Welcome to PHP Programming";
$a = 5;
$_msg = 'Hello, again';
$x = 8;
$y = 8;

echo $content;
echo"<br>".$a;
echo"<br>";
echo $_msg;

//Arithmetic Operations
echo"<br>";
echo $x+$y;
echo"<br>";
echo $x-$y;
echo"<br>";
echo $x*$y;
echo"<br>";
echo $x/$y;
echo"<br>".$x%$y;
echo"<br>";
echo $x**$y;

//Comparison Operations
echo"<br>";
if($x===$y)
{
echo "They are identical.";
}
else
{
echo "They are not identical.";
}

//Increment/Decrement Operators
//for loop
for ($a=5; $a>=1; $a--)
{
echo "<br>".$a;
}

//while loop
while ($a>1)
{
echo "<br>".$a;
$a--;
}

//do while loop
do
{
echo "<br>".$a;
$a--;
} while ($a>1);
?>
</body>
</html>