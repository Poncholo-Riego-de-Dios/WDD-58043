<html>
<head><title>WDD long quiz</title></head>
<?php
echo '<body style="background-color:aquamarine">';
echo "<center>";
echo "<h3>PROBLEM 1</h3>";
$Salary_rate = 600;
$Salary = $Salary_rate*15;
$Taxable_amount = $Salary*0.3;
$Net_pay = $Salary - $Taxable_amount;

echo "Salary Rate: ".$Salary_rate."/day<br>";
echo "Salary: ".$Salary."/15 days<br>";
echo "Taxable amount: ".$Taxable_amount."<br>";
echo "Net pay: ".$Net_pay."<br><br<<br>";

echo "<h3>PROBLEM 2</h3>";
$x = 1;
$y = 0;

echo "Adding all positive integers from 1-50  <br>";
while($x<51)
{
	$z = $x + $y;
	echo $x."+".$y."=".$z."<br>";
	$y= $y+$x;
	$x++;
}
echo "<br><b>The Total of all positive integers from 1-50: ".$y."</b>";

?>
</html>