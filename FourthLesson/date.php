<html>
<head>

</head>
<body>
<?php
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("l")."<br>";
?>
&copy; 2010
<h2>Get a simple time</h2>
<p>
    h - 12-hour format of an hour with leading zeros (01 to 12)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds with leading zeros (00 to 59)
    a - Lowercase Ante meridiem and Post meridiem (am or pm)
</p>
<?php
    echo "The time is ".date("h:i:sa")."<br>";
    date_default_timezone_set("America/New_York");

    echo "Time zone is ".date("h:i:sa");
?>
<h2>How to make time</h2>
<p>mktime()<br></p>
<?php
$d = mktime(11,12,58,2,6,1997);
echo "The making time is ".date("h:i:sa Y-m-d",$d)."<br>";
?>
<h2>Create a date from a string <br></h2>
<p>we are using strtotime() <br></p>
<?php
$d = strtotime("11:30pm  Auguest 15 2017");
echo "The create time is ".date("h:i:sm d-m-Y",$d);
?>
<h2>Converting string to date in various types</h2>
<?php
    echo "<h2>Tomorrow</h2>";
    $d = strtotime("tomorrow");
    echo date("d-m-Y h:i:sa",$d)."<br>";
    echo "<h2>Next Saturday</h2>";
    $d = strtotime("next Saturday");
    echo date("d-m-Y h:i:sa",$d)."<br>";
    echo "<h2>+3 months</h2>"."<br>";
    $d= strtotime("+3 months");
    echo date("d-m-Y h:i:sa",$d)."<br>";
?>
<h2>Next 6 week start from Saturday</h2> <br>
<?php
$startday = strtotime("Saturday");
$enddate = strtotime("+6 weeks",$startday);
echo "Next saturday 6 weeks later <br>";
echo date("M d",$enddate)."<br>";
echo  "Saturday<br>";
echo date("M d",$startday)."<br>";
while ($startday < $enddate)
{
    echo date("M d",$startday)."<br>";
    $startday = strtotime("+1 week",$startday);
}
?>
</body>
</html>
