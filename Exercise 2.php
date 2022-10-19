<html>
<head>
<title>Exercise1</title>
</head>
<body align=center><h1>
<?php

$grade = 60;
echo "The given grad is: ". $grade;
echo "<br>";
switch($grade)
{
case $grade<60;
{
echo "Failed";
break;
}
case $grade>=59 and $grade<70;
{
echo "Remedial";
break;
}
case $grade>70;
{
echo "Passed";
break;
}
default;
{
echo "No grade detected";
}
}


?></h1>
</body>
</html>